<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontakcontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_kontak');
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
		$data['page'] 	= 'kontak';
		$data['judul']	= 'Kontak';
		$data['kontak'] = $this->Model_kontak->get('kontak')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/kontak', $data);
		$this->load->view('admin/template/footer');
	}

	public function ubah($id_kontak)
	{
		$id_kontak		= decrypt_url($id_kontak);
		$data['page'] 	= 'kontak';
		$data['judul']	= 'Ubah Kontak';
		$data['kontak']	= $this->Model_kontak->get_where('kontak', 'id_kontak='.$id_kontak)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-kontak', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_kontak)
	{
		$id_kontak		= decrypt_url($id_kontak);
		$alamat_lengkap	= $this->input->post('alamat_lengkap');
		$code_iframe	= $this->input->post('code_iframe');
		$email			= $this->input->post('email');
		$telepon		= $this->input->post('telepon');
		$jam_kerja		= $this->input->post('jam_kerja');
		
		$object = array(
			'alamat_lengkap'	=> $alamat_lengkap,
			'code_iframe'		=> $code_iframe,
			'email'				=> $email,
			'telepon'			=> $telepon,
			'jam_kerja'			=> $jam_kerja
		);
		$this->Model_kontak->update('kontak', 'id_kontak='.$id_kontak, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data kontak dg id '.$id_kontak.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_kontak->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Kontak'));
		redirect('admin/kontak');
	}
}
