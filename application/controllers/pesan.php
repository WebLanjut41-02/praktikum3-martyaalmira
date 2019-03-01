<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesan extends CI_Controller {
		function __construct()
	{
		parent::__construct();
		$this->load->model('mpesan');
		$this->load->library('form_validation');
	}

	public function index(){
		$this->load->view('index');
	}

	public function daftar_menu(){
		$data = $this->mpesan->getallpelanggan();
		$this->session->set_userdata('all_data', $data);
		$this->load->view('menu');
	}
	
	public function viewmenu(){
		$data = $this->mpesan->menu();
		$this->session->set_userdata('all_data', $data);
		$this->load->view('menu');
	}

	public function inputpemesan(){
		$data = array(
			'nama' => $this->input->post('nama'));
		$this->mpesan->inputpemesan($data);
		redirect('pesan/viewmenu');
	}


}
