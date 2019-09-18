<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_produk extends CI_Model {
    public function get_where($where) {
        return $this->db->get_where('produk' , $where);
    }

    //CRUD

    public function get() {
        return $this->db->get('produk');
    }
    public function tambah_data($data, $table) {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    

}
