<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

	public function login()
	{
		$this->load->view('admin/login');
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			// $this->session->set_flashdata('message', array('type'=>'success','text'=>'Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!'));
			echo "<script>alert('Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!')</script>";
			redirect(base_url("admin/"),'refresh');
		}
		$data['page'] = 'home';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/home');
		$this->load->view('admin/template/footer');
	}
}
