<?php
defined('BASEPATH') or exit('No direct Script access allowed');

class Model_csb extends CI_Model
{
    // fungsi create digunakan untuk menambahkan data ke dalam tabel
    public function create($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi read digunakan untuk menampilkan seluruh data pada tabel
    public function read($table)
    {
        return $this->db->get($table);
    }

    // fungsi select digunakan untuk menampilkan data berdasarkan keynya
    public function select($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    // fungsi update digunakan untuk mengupdate data atau mengedit data
    public function update($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
    }

    //fungsi delete digunakan untuk menghapus data
    public function delete($table, $where)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
