<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

    public function cek_login($table, $where) {
        return $this->db->get_where($table, $where);
    }

    public function tambah_user($data) {
        $this->db->insert('user', $data);
        return $this->db->insert_id();
    }

    public function cek_username($username) {
        return $this->db->get_where('user', ['username' => $username]);
    }
}