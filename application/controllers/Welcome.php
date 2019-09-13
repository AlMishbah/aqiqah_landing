<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index(){
		$this->load->view('welcome_message');
	}

	public function to_lock(){
		if($this->session->userdata('status') !== null):
			redirect('admin/dashboard');
		endif;

		$this->load->view('admin/lock');
	}

	public function open_lock(){
		$data = array(
			'pin_code' => $this->input->post('pin_code'),
		);
		// Load Model
		$this->load->model('model_info');
		$cek = $this->model_info->get_where($data)->num_rows();
		if ($cek > 0) {
			$sess = array(
				'status'	=> TRUE
			);
			$this->session->set_userdata($sess);
			redirect('admin/dashboard');
		}else{
			redirect('mulya_admin_aqiqah');
		}
	}
}
