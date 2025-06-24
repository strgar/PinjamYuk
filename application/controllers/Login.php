<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_login');
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('login');
    }

    public function masuk() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_username($username);

        if ($cek->num_rows() > 0) {
            $user = $cek->row();
            if (password_verify($password, $user->password)) {
                $sess_data = [
                    'username' => $user->username,
                    'logged_in' => true,
                    'user_id' => $user->id
                ];
                $this->session->set_userdata($sess_data);

                redirect('dashboard');
            } else {
                $this->session->set_flashdata('error', 'Password salah');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('error', 'Username tidak ditemukan');
            redirect('login');
        }
    }

    public function daftar() {
        $this->load->view('signup');
    }

    public function daftar_aksi() {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek_username($username);

        if ($cek->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Username sudah terdaftar');
            redirect('login/daftar');
        } else {
            $data = [
                'username' => $username,
                'email' => $email,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            ];

            $this->M_login->tambah_user($data);
            $this->session->set_flashdata('success', 'Pendaftaran berhasil, silakan login');
            redirect('login');
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}