<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Penduduk_model');
        $this->load->library('session');

        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index() {
        $data['data_penduduk'] = $this->Penduduk_model->get_all_data();
        $this->load->view('data_dispenduk', $data);
    }
}
