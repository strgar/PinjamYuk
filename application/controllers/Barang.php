<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
        $this->load->model('Barang_model');
    }

    public function index()
    {
        $keyword = $this->input->get('q');

        if ($keyword) {
            $data['barang'] = $this->Barang_model->search($keyword);
        } else {
            $data['barang'] = $this->Barang_model->get_all();
        }

        $this->load->view('barang', $data);
    }

    public function tambah()
    {
        $this->load->view('tambah_barang');
    }

    public function simpan()
    {
        $this->load->library('form_validation');

        // Aturan validasi
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan error
            $this->load->view('tambah_barang');
        } else {
            // Jika validasi berhasil, simpan data
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'keterangan' => $this->input->post('keterangan')
            ];

            $result = $this->Barang_model->insert($data);

            if ($result) {
                $this->session->set_flashdata('success', 'Barang berhasil ditambahkan');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambahkan barang');
            }

            redirect('barang');
        }
    }

    public function edit($id)
    {
        $data['barang'] = $this->Barang_model->get_by_id($id);

        if (!$data['barang']) {
            show_404();
        }

        $this->load->view('edit_barang', $data);
    }

    public function update($id)
    {
        $this->load->library('form_validation');

        // Aturan validasi
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, tampilkan kembali form dengan error
            $data['barang'] = $this->Barang_model->get_by_id($id);
            $this->load->view('edit_barang', $data);
        } else {
            // Jika validasi berhasil, update data
            $data = [
                'nama_barang' => $this->input->post('nama_barang'),
                'jumlah' => $this->input->post('jumlah'),
                'keterangan' => $this->input->post('keterangan')
            ];

            $result = $this->Barang_model->update($id, $data);

            if ($result) {
                $this->session->set_flashdata('success', 'Barang berhasil diperbarui');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui barang');
            }

            redirect('barang');
        }
    }

    public function hapus($id)
    {
        $result = $this->Barang_model->delete($id);

        if ($result) {
            $this->session->set_flashdata('success', 'Barang berhasil dihapus');
        } else {
            $this->session->set_flashdata('error', 'Gagal menghapus barang');
        }

        redirect('barang');
    }
    // Tambahkan di class Barang
    public function cari()
    {
        $keyword = $this->input->get('q');
        $data['barang'] = $this->Barang_model->search($keyword);
        $this->load->view('barang', $data);
    }
}
