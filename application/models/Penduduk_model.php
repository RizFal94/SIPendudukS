<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk_model extends CI_Model {

    public function get_all_data() {
        return $this->db->get('data_penduduk')->result_array();
    }

    public function get_data_by_nomor($nomor) {
        return $this->db->get_where('data_penduduk', ['Nomor' => $nomor])->row_array();
    }

    public function insert_data($data) {
        return $this->db->insert('data_penduduk', $data);
    }

    public function update_data($nomor, $data) {
        $this->db->where('Nomor', $nomor);
        return $this->db->update('data_penduduk', $data);
    }

    public function delete_data($nomor) {
        $this->db->where('Nomor', $nomor);
        return $this->db->delete('data_penduduk');
    }
}
