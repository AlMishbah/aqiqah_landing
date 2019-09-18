<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_gallery');
    }
    public function index() {

        //Load Gallery

        $data['gallery'] = $this->Model_gallery->get()->result();
        $this->load->view('gallery', $data);
        
    }
    //Tambah
    public function tambah() {
        
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $foto =$this->input->post('foto');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'foto' => $foto
        );
        $this->Model_gallery->tambah_data($data, 'gallery');
        redirect('gallery');
    }

    //Hapus
    public function hapus($id) {
       $where = array ('id' => $id);
       $this->Model_gallery->hapus_data($where, 'gallery');
       redirect('gallery');
    }

    //Edit
    public function edit($id) {
        $where = array ('id' => $id);
        $data['gallery'] = $this->Model_gallery->edit_data($where, 'gallery')->result();
        $this->load->view('edit_gallery', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $foto =$this->input->post('foto');

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'foto' => $foto
        );
        $where = array ('id' => $id);
        $this->Model_gallery->update_data($where, $data, 'gallery');
    }
    
}
