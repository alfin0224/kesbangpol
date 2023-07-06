<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanmasukcontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_pesanmasuk');
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
		$data['page'] 		= 'pesan-masuk';
		$data['judul']		= 'Pesan Masuk';
		$data['pesanmasuk']	= $this->Model_pesanmasuk->get('pesan_masuk')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pesan-masuk', $data);
		$this->load->view('admin/template/footer');
	}

	public function hapus($id_pesan_masuk){
		$id_pesan_masuk	= $id_pesan_masuk;
		$this->Model_pesanmasuk->delete('pesan_masuk', 'id_pesan_masuk='.$id_pesan_masuk);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data pesan masuk dg id '.$id_pesan_masuk.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_pesanmasuk->insert('log_user', $isi_data_log);
		redirect('admin/pesan-masuk');
	}
}
