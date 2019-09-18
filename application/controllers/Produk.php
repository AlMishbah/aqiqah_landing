<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_produk');
    }
    public function index() {

        //Load Gallery

        $data['produk'] = $this->Model_produk->get()->result();
        $this->load->view('produk', $data);
        
    }
    //Tambah
    public function tambah() {
        
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $status =$this->input->post('status');

        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'status' => $status
        );
        $this->Model_produk->tambah_data($data, 'produk');
        redirect('produk');
    }

    //Hapus
    public function hapus($id) {
       $where = array ('id' => $id);
       $this->Model_produk->hapus_data($where, 'produk');
       redirect('produk');
    }

    //Edit
    public function edit($id) {
        $where = array ('id' => $id);
        $data['produk'] = $this->Model_produk->edit_data($where, 'produk')->result();
        $this->load->view('edit_produk', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $nama_produk = $this->input->post('nama_produk');
        $harga_produk = $this->input->post('harga_produk');
        $status =$this->input->post('status');

        $data = array(
            'nama_produk' => $nama_produk,
            'harga_produk' => $harga_produk,
            'status' => $status
        );
        $where = array ('id' => $id);
        $this->Model_produk->update_data($where, $data, 'produk');
    }
    
}
