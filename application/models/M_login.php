<?php 

class M_login extends CI_Model {

	// Cek login berdasarkan username dan password
	function cek_login($table, $where) {
		return $this->db->get_where($table, $where);
	}

	// Tambah user baru
	function tambah_user($data) {
		$this->db->insert('user', $data);
	}

	// Cek apakah username sudah ada
	function cek_username($username) {
		$this->db->where('username', $username);
		return $this->db->get('user');
	}
}
