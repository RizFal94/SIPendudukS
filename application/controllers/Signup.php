<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('User_model');
        $this->load->library('session');
    }

    public function daftar() {
        $this->load->view('signup');
    }

    public function buat_akun() {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password'); 
    
        if (empty($nama) || empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Semua field harus diisi.');
            redirect('Signup/daftar');
        }
    
        $hashed_password = md5($password);
    
        $data = [
            'nama' => $nama,
            'username' => $username,
            'password' => $hashed_password, 
            'created_at' => date('Y-m-d H:i:s') 
        ];
    
        if ($this->User_model->insert_data($data)) {
            $this->session->set_flashdata('success', 'Akun Anda berhasil dibuat! Silahkan login :)');
            redirect('Login');
        } else {
            $this->session->set_flashdata('error', 'Gagal membuat akun.');
            redirect('Signup/daftar');
        }
    }
    
}
