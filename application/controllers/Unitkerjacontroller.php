<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitkerjacontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_unitkerja');
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
		$data['page'] 		= 'unit-kerja';
		$data['judul']		= 'Unit Kerja';
		$data['unitkerja']	= $this->Model_unitkerja->get('unit_kerja')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/unit-kerja', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] 	= 'unit-kerja';
		$data['judul']	= 'Tambah Unit Kerja';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-unit-kerja');
		$this->load->view('admin/template/footer');
	}
	
	public function simpan()
	{
		$unit_kerja	= $this->input->post('unit');
		$konten		= $this->input->post('deskripsi');

		$object = array(
			'unit_kerja'	=> $unit_kerja,
			'konten'		=> $konten,
			'insert_date'	=> date("Y-m-d H:i:s"),
			'author_insert'	=> $this->session->userdata('username')	
		);
		$this->Model_unitkerja->insert('unit_kerja', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'tambah data unit kerja oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_unitkerja->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Unit Kerja'));
		redirect('admin/unit-kerja');
	}

	public function ubah($id_unit_kerja)
	{
		$id_unit_kerja		= decrypt_url($id_unit_kerja);
		$data['page'] 		= 'unit-kerja';
		$data['judul']		= 'Ubah Unit Kerja';
		$data['unitkerja']	= $this->Model_unitkerja->get_where('unit_kerja', 'id_unit_kerja='.$id_unit_kerja)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-unit-kerja', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_unit_kerja)
	{
		$id_unit_kerja	= decrypt_url($id_unit_kerja);
		$unit_kerja		= $this->input->post('unit');
		$konten			= $this->input->post('deskripsi');

		$object = array(
			'unit_kerja'	=> $unit_kerja,
			'konten'		=> $konten,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')	
		);
		$this->Model_unitkerja->update('unit_kerja', 'id_unit_kerja='.$id_unit_kerja, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data unit kerja dg id '.$id_unit_kerja.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_unitkerja->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Unit Kerja'));
		redirect('admin/unit-kerja');
	}

	public function hapus($id_unit_kerja){
		$id_unit_kerja	= decrypt_url($id_unit_kerja);
		$this->Model_unitkerja->delete('unit_kerja', 'id_unit_kerja='.$id_unit_kerja);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data unit kerja dg id '.$id_unit_kerja.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_unitkerja->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Unit Kerja'));
		redirect('admin/unit-kerja');
	}


}
