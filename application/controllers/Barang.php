<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

    public function index() {
        $this->load->helper('url'); // Tambahkan baris ini
        $this->load->view('barang');
    }

    public function tambah() {
    $this->load->helper('url');
    $this->load->view('tambah_barang');
}

    
}

