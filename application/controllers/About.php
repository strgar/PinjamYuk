<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $this->load->helper('url'); // <- Tambahkan ini
        $this->load->view('about_us');
    }
}
