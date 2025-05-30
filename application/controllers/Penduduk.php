<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Penduduk_model');
    }

    public function tambah() {
        $this->load->view('tambah');
    }

    public function simpan() {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'Nama' => $this->input->post('Nama'),
            'Tlp' => $this->input->post('Tlp')
        ];
        $this->Penduduk_model->insert_data($data);
        $this->session->set_flashdata('success', 'Data berhasil ditambahkan!');
        redirect('home');
    }

    public function edit($nomor) {
        $data['penduduk'] = $this->Penduduk_model->get_data_by_nomor($nomor);
        $this->load->view('edit', $data);
    }

    public function update($nomor) {
        $data = [
            'NIK' => $this->input->post('NIK'),
            'Nama' => $this->input->post('Nama'),
            'Tlp' => $this->input->post('Tlp')
        ];
        $this->Penduduk_model->update_data($nomor, $data);
        $this->session->set_flashdata('success', 'Data berhasil diperbarui!');
        redirect('home');
    }

    public function hapus($nomor) {
        $this->Penduduk_model->delete_data($nomor);
        $this->session->set_flashdata('success', 'Data berhasil dihapus!');
        redirect('home');
    }
}
