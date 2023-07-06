<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sejarahcontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_sejarah');
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
		$data['page'] 		= 'sejarah';
		$data['judul']		= 'Sejarah';
		$data['sejarah']	= $this->Model_sejarah->get('sejarah')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/sejarah', $data);
		$this->load->view('admin/template/footer');
	}

	public function ubah($id_sejarah)
	{
		$id_sejarah			= decrypt_url($id_sejarah);
		$data['page'] 		= 'sejarah';
		$data['judul']		= 'Ubah Sejarah';
		$data['sejarah']	= $this->Model_sejarah->get_where('sejarah', 'id_sejarah='.$id_sejarah)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-sejarah', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_sejarah)
	{
		$id_sejarah	= decrypt_url($id_sejarah);
		$sejarah	= $this->input->post('sejarah');
		
		$object = array(
			'sejarah'		=> $sejarah,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
		$this->Model_sejarah->update('sejarah', 'id_sejarah='.$id_sejarah, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data sejarah oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_sejarah->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Sejarah'));
		redirect('admin/profil/sejarah');
	}
}
