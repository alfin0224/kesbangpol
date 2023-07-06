<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategoricontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_berita');
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
		$data['page'] 		= 'kategori';
		$data['judul']		= 'Kategori';
		$data['kategori']	= $this->Model_berita->get('kategori_berita')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/kategori');
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] = 'kategori';
		$data['judul']= 'Tambah Kategori';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-kategori');
		$this->load->view('admin/template/footer');
	}

	public function simpan_kategori()
	{
		$kategori = $this->input->post('kategori');
		
		$object = array(
			'kategori'  => $kategori
		);
		$this->Model_berita->insert('kategori_berita', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'tambah data kategori oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_kategori->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Data Kategori'));
		redirect('admin/manajemen-berita/kategori','refresh');
	}

	public function ubah()
	{
		$id_kategori		= decrypt_url($this->uri->segment(5));
		$data['page']		= 'kategori';
		$data['judul']		= 'Ubah Kategori';
		$data['kategori']	= $this->Model_berita->get_where('kategori_berita', 'id_kategori='.$id_kategori)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-kategori');
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id){
		// var_dump($id);
		// exit(0);
		$id_kategori	= decrypt_url($id);
		$kategori = $this->input->post('kategori');

		$object = array(
			'kategori' => $kategori
		);
		$this->Model_berita->update('kategori_berita', 'id_kategori='.$id_kategori, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data kategori dg id '.$id_kategori.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_kategori->insert('log_user', $isi_data_log);
		redirect('admin/manajemen-berita/kategori', 'refresh');
	}

	public function hapus_kategori($id){
		$id_kategori	= decrypt_url($id);
		// var_dump($id_regulasi);
		// exit(0);
		$this->Model_berita->delete('kategori_berita', 'id_kategori='.$id_kategori);
		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data kategori dg id '.$id_kategori.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_kategori->insert('log_user', $isi_data_log);
		redirect('admin/manajemen-berita/kategori', 'refresh');
	}
}
