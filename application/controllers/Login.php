<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function index() {
        if ($this->session->userdata('logged_in')) {
            redirect('home');
        }
        $this->load->view('login');
    }

    public function authenticate() {
        $username = $this->input->post('username');
        $password = $this->input->post('password'); 
    
        $user = $this->User_model->check_user($username, $password);
    
        if ($user) {
            $this->session->set_userdata([
                'logged_in' => true,
                'user_id' => $user['id'],
                'username' => $username,
                'nama' => $user['nama'],
                'session_id' => session_id(),
            ]);
            redirect('home');
        } else {
            $this->session->set_flashdata('error', 'Username atau Password salah');
            redirect('login');
        }
    }
    

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

    public function session_status() {
        $logged_in = $this->session->userdata('logged_in') ? true : false;
        echo json_encode(['logged_in' => $logged_in]);
    }
    
}
