<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisicontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_visimisi');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jayapura');
		if($this->session->userdata('status') != "login"){
			echo "<script>alert('Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!')</script>";
			redirect(base_url("admin/"),'refresh');
		}
	}


	public function index()
	{
		$data['page'] 		= 'visi-misi';
		$data['judul']		= 'Visi-Misi';
		$data['visimisi']	= $this->Model_visimisi->get('visi_misi')->result_object();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/visi-misi', $data);
		$this->load->view('admin/template/footer');
	}

	public function ubah($id_visi_misi)
	{
		$id_visi_misi		= decrypt_url($id_visi_misi);
		$data['page'] 		= 'visi-misi';
		$data['judul']		= 'Ubah Visi-Misi';
		$data['visimisi'] 	= $this->Model_visimisi->get_where('visi_misi', 'id_visi_misi='.$id_visi_misi)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-visi-misi', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_visi_misi)
	{
		$id_visi_misi	= decrypt_url($id_visi_misi);
		$visi			= $this->input->post('visi');
		$misi			= $this->input->post('misi');
		
		$object = array(
			'visi'			=> $visi,
			'misi'			=> $misi,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
		$this->Model_visimisi->update('visi_misi', 'id_visi_misi='.$id_visi_misi, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data visi-misi oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_visimisi->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Visi-Misi'));
		redirect('admin/profil/visi-misi');
	}
}
