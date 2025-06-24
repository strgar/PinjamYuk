<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    private $table = 'barang';

    public function __construct()
    {
        parent::__construct();
        $this->load->database(); // Memuat library database
    }

    public function get_all()
    {
        return $this->db->get($this->table)->result();
    }

    public function insert($data)
    {
        return $this->db->insert($this->table, $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    public function delete($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
    // Tambahkan di akhir model
    public function get_total_barang()
    {
        return $this->db->count_all($this->table);
    }

    public function search($keyword)
    {
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('keterangan', $keyword);
        return $this->db->get($this->table)->result();
    }
}
