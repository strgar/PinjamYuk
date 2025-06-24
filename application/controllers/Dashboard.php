<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if(!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Barang_model');
    }

    public function index() {
        // Mengambil data statistik
        $data = [
            'total_barang' => $this->Barang_model->get_total_barang(),
            'total_pengguna' => 0, // Sementara 0, nanti diganti jika ada model
            'total_peminjaman' => 0 // Sementara 0
        ];
        
        $this->load->view('dashboard', $data);
    }

    public function about() {
        $this->load->view('about_us');
    }
}