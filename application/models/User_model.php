<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    private $table = 'user';

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_total_users_active() {
        $this->db->where('status', 'aktif');
        return $this->db->count_all_results($this->table);
    }
}