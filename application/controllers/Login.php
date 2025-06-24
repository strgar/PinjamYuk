<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();		
        $this->load->model('M_login');
        $this->load->helper('url'); 
        $this->load->library('session');
    }

    function index() {
        $this->load->view('login');
    }

    function masuk() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_username($username);

        if ($cek->num_rows() > 0) {
            $user = $cek->row();
            if (password_verify($password, $user->password)) {
                $sess_data['username'] = $user->username;
                $sess_data['status'] = "AezakmiHesoyamWhosyourdaddy";
                $this->session->set_userdata($sess_data);

                redirect(base_url("dashboard"));
            } else {
                echo "<script>alert('Password salah');window.location = '".base_url('Login')."';</script>";
            }
        } else {
            echo "<script>alert('Username tidak ditemukan');window.location = '".base_url('Login')."';</script>";
        }
    }

    function daftar() {
        $this->load->view('signup');
    }

    function daftar_aksi() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_username($username);

        if ($cek->num_rows() > 0) {
            echo "<script>alert('Username sudah terdaftar');window.location = '".base_url('Login/daftar')."';</script>";
        } else {
            $data = array(
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );

            $this->M_login->tambah_user($data);
            echo "<script>alert('Pendaftaran berhasil, silakan login');window.location = '".base_url('Login')."';</script>";
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
