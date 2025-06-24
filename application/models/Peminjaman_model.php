<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_model extends CI_Model {
    private $table = 'peminjaman';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_total_active_loans() {
        $this->db->where('status', 'dipinjam');
        return $this->db->count_all_results($this->table);
    }
}