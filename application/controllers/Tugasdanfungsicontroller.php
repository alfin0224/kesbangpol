<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugasdanfungsicontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_tugasfungsi');
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
		$data['page'] 			= 'tugas-dan-fungsi';
		$data['judul']			= 'Tugas dan Fungsi';
		$data['tugasfungsi']	= $this->Model_tugasfungsi->get('tugas_fungsi')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tugas-dan-fungsi', $data);
		$this->load->view('admin/template/footer');
	}

	public function ubah($id_tugas_fungsi)
	{
		$id_tugas_fungsi		= decrypt_url($id_tugas_fungsi);
		$data['page']			= 'tugas-dan-fungsi';
		$data['judul']			= 'Ubah Tugas dan Fungsi';
		$data['tugasfungsi']	= $this->Model_tugasfungsi->get_where('tugas_fungsi', 'id_tugas_fungsi='.$id_tugas_fungsi)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-tugas-dan-fungsi', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_tugas_fungsi)
	{
		$id_tugas_fungsi	= decrypt_url($id_tugas_fungsi);
		$tugas				= $this->input->post('tugas');
		$fungsi				= $this->input->post('fungsi');
		
		$object = array(
			'tugas'			=> $tugas,
			'fungsi'		=> $fungsi,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
		$this->Model_tugasfungsi->update('tugas_fungsi', 'id_tugas_fungsi='.$id_tugas_fungsi, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data tugas dan fungsi dg id '.$id_tugas_fungsi.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_tugasfungsi->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Tugas dan Fungsi'));
		redirect('admin/profil/tugas-dan-fungsi');
	}
}
