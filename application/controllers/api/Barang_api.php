<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';

class Barang_api extends RestController
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }

    // GET: /api/barang atau /api/barang?id=1
    public function index_get()
    {
        $id = $this->input->get('id');
        $barang = $id ? $this->Barang_model->get_by_id($id) : $this->Barang_model->get_all();

        if ($barang) {
            $this->response([
                'status' => true,
                'data' => $barang
            ], self::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => $id ? 'Barang tidak ditemukan' : 'Tidak ada data barang'
            ], $id ? self::HTTP_NOT_FOUND : self::HTTP_NO_CONTENT);
        }
    }

    // POST: /api/barang
    public function index_post()
    {
        $post_data = $this->input->post();

        if (empty($post_data)) {
            $json_input = file_get_contents('php://input');
            $post_data = json_decode($json_input, true);
        }

        // Pastikan $post_data tidak null dan merupakan array
        if (empty($post_data) || !is_array($post_data)) {
            $this->response([
                'status' => false,
                'message' => 'Data tidak valid atau kosong'
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $this->form_validation->set_data($post_data);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|max_length[100]');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer|greater_than_equal_to[1]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'max_length[255]');

        if ($this->form_validation->run() == false) {
            $this->response([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $this->form_validation->error_array()
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $data = [
            'nama_barang' => $post_data['nama_barang'],
            'jumlah' => $post_data['jumlah'],
            'keterangan' => $post_data['keterangan'] ?? null
        ];

        $insert_id = $this->Barang_model->insert($data);

        if ($insert_id) {
            $this->response([
                'status' => true,
                'message' => 'Barang berhasil ditambahkan',
                'data' => ['id' => $insert_id]
            ], self::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menambahkan barang'
            ], self::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // PUT: /api/barang
    public function index_put()
    {
        $json_input = file_get_contents('php://input');
        $put_data = json_decode($json_input, true);

        // Pastikan data valid
        if (empty($put_data) || !is_array($put_data)) {
            $this->response([
                'status' => false,
                'message' => 'Data tidak valid'
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $id = $put_data['id'] ?? null;
        if (!$id) {
            $this->response([
                'status' => false,
                'message' => 'ID barang tidak boleh kosong'
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $existing = $this->Barang_model->get_by_id($id);
        if (!$existing) {
            $this->response([
                'status' => false,
                'message' => 'Barang tidak ditemukan'
            ], self::HTTP_NOT_FOUND);
            return;
        }

        $this->form_validation->set_data($put_data);
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required|max_length[100]');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer|greater_than_equal_to[1]');
        $this->form_validation->set_rules('keterangan', 'Keterangan', 'max_length[255]');

        if ($this->form_validation->run() == false) {
            $this->response([
                'status' => false,
                'message' => 'Validasi gagal',
                'errors' => $this->form_validation->error_array()
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $data = [
            'nama_barang' => $put_data['nama_barang'],
            'jumlah' => $put_data['jumlah'],
            'keterangan' => $put_data['keterangan'] ?? null
        ];

        $update = $this->Barang_model->update($id, $data);

        if ($update) {
            $this->response([
                'status' => true,
                'message' => 'Barang berhasil diperbarui'
            ], self::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal memperbarui barang'
            ], self::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    // DELETE: /api/barang
    public function index_delete()
    {
        $id = $this->input->get('id');
        if (!$id) {
            $this->response([
                'status' => false,
                'message' => 'ID barang tidak boleh kosong'
            ], self::HTTP_BAD_REQUEST);
            return;
        }

        $existing = $this->Barang_model->get_by_id($id);
        if (!$existing) {
            $this->response([
                'status' => false,
                'message' => 'Barang tidak ditemukan'
            ], self::HTTP_NOT_FOUND);
            return;
        }

        $delete = $this->Barang_model->delete($id);
        if ($delete) {
            $this->response([
                'status' => true,
                'message' => 'Barang berhasil dihapus'
            ], self::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'Gagal menghapus barang'
            ], self::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
