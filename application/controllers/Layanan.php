<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Layanan_model');
    }
    public function index() {

        //Load Gallery

        $data['layanan'] = $this->Layanan_model->get()->result();
        $this->load->view('layanan', $data);
    }

        //Tambah
        public function tambah() {
        
            $judul_layanan = $this->input->post('judul_layanan');
            $deskripsi = $this->input->post('deskripsi');
           
    
            $data = array(
                'judul_layanan' => $judul_layanan,
                'deskripsi' => $deskripsi
                
            );
            $this->Layanan_model->tambah_data($data, 'layanan');
            redirect('layanan');
        }

        //Hapus
    public function hapus($id) {
        $where = array ('id' => $id);
        $this->Layanan_model->hapus_data($where, 'layanan');
        redirect('layanan');
     }

      //Edit
    public function edit($id) {
        $where = array ('id' => $id);
        $data['layanan'] = $this->Layanan_model->edit_data($where, 'layanan')->result();
        $this->load->view('edit_layanan', $data);
    }

    public function update() {
        $id = $this->input->post('id');
        $judul_layanan = $this->input->post('judul_layanan');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'judul_layanan' => $judul_layanan,
            'deskripsi' => $deskripsi
        );
        $where = array ('id' => $id);
        $this->Layanan_model->update_data($where, $data, 'layanan');
    }
        
}
