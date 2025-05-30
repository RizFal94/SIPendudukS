<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function check_user($username, $password) {
        $hashed_password = md5($password);

        $this->db->where('username', $username);
        $this->db->where('password', $hashed_password);
        $query = $this->db->get('user'); 

        if ($query->num_rows() > 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function insert_data($data) {
        $data['created_at'] = date('Y-m-d H:i:s');
        return $this->db->insert('user', $data);
    }
}
