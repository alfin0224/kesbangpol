<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Regulasicontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_regulasi');
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
		$data['page'] 		= 'regulasi';
		$data['judul']		= 'Regulasi';
		$data['regulasi']	= $this->Model_regulasi->get_tbl('regulasi')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/regulasi');
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] 	= 'regulasi';
		$data['judul']	= 'Tambah Regulasi';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-regulasi');
		$this->load->view('admin/template/footer');
	}

	public function simpan_data_regulasi(){
		$judul_regulasi 		= $this->input->post('judul_regulasi');
		$deskripsi 				= $this->input->post('deskripsi');
		$file_regulasi			= $this->uploadFile();
		// var_dump($file_regulasi);
		// exit(0);

			$isi_data_regulasi = array(
				'judul_regulasi'  => $judul_regulasi,
				'deskripsi'		  => $deskripsi,
				'file_regulasi'	  => $file_regulasi,
				'author_insert'	  => $this->session->userdata('username'),
				'insert_date' 	  => date("Y-m-d H:i:s")
			);

			$this->Model_regulasi->tambah('regulasi', $isi_data_regulasi);

			$this->load->library('user_agent');
			$browser = $this->agent->browser();
			$browser_version = $this->agent->version();
			$os = $this->agent->platform();
			$ip_address = $this->input->ip_address();

			// insert log activity
			$isi_data_log = array(
				'tgl_aktivitas' => date("Y-m-d H:i:s"),
				'keterangan' => 'tambah data regulasi oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
				'jenis_aktivitas' => 'tambah data',
				'username' => $this->session->userdata('username'),
				'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
			);
			
			$this->Model_regulasi->tambah('log_user', $isi_data_log);

			$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Data Regulasi'));
		redirect('admin/regulasi','refresh');
	}


	private function uploadFile(){
		$config['upload_path']          = './upload/regulasi/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png|pdf|doc|docx';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file_regulasi')) {
			return $this->upload->data("file_name");
		}
	}


	public function ubah()
	{
		$data['page'] 	= 'regulasi';
		$data['judul']	= 'Ubah Regulasi';

		$id_regulasi = decrypt_url($this->uri->segment(4));
		$data['regulasi']	= $this->Model_regulasi->get_tbl_where('regulasi', 'id_regulasi = '.$id_regulasi)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-regulasi');
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id){
		// var_dump($id);
		// exit(0);
		$id_regulasi	= decrypt_url($id);
		$judul_regulasi	= $this->input->post('judul_regulasi');
		$deskripsi	= $this->input->post('deskripsi');
		if (!empty($_FILES['file_regulasi']['name'])) {
			$this->deleteFile($id_regulasi);
			$file_regulasi		= $this->uploadFile();
		} else {
			$file_regulasi		= $this->input->post('file_lama');
		}

		$object = array(
			'judul_regulasi' => $judul_regulasi,
			'deskripsi'	=> $deskripsi,
			'file_regulasi'	=> $file_regulasi
		);
		$this->Model_regulasi->update_data('regulasi', 'id_regulasi='.$id_regulasi, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data regulasi dg id '.$id_regulasi.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_regulasi->tambah('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Regulasi'));
		redirect('admin/regulasi');
	}

	public function hapus($id){
		$id_regulasi	= decrypt_url($id);
		// var_dump($id_regulasi);
		// exit(0);
		$this->deleteFile($id_regulasi);
		$this->Model_regulasi->hapus_data('regulasi', 'id_regulasi='.$id_regulasi);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data regulasi dg id '.$id_regulasi.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_regulasi->tambah('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Regulasi'));
		redirect('admin/regulasi');
	}

	private function deleteFile($id){
		$product = $this->Model_regulasi->get_tbl_where('regulasi', 'id_regulasi='.$id)->row();
		// var_dump($product);
		// exit(0);
		if ($product->file_regulasi != null) {
			$filename = explode(".", $product->file_regulasi)[0];
			return array_map('unlink', glob(FCPATH."upload/regulasi/$filename.*"));
		}
	}
}
