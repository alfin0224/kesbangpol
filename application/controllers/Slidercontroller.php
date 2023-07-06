<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slidercontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_slider');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jayapura');
		if($this->session->userdata('status') != "login"){
			echo "<script>alert('Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!')</script>";
			redirect(base_url("admin/"),'refresh');
		}
	}

	public function index(){
		$data['page']	= 'slider';
		$data['slider']	= $this->Model_slider->get('galeri')->result_object();
		$data['judul']	= 'Slider';
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/slider', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah(){
		$data['page']	= 'slider';
		$data['judul']	= 'Tambah Slider';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-slider');
		$this->load->view('admin/template/footer');
	}

	public function simpan(){
		$deskripsi	= $this->input->post('deskripsi');
		$nama_file	= $this->uploadFile();

		$object = array(
			'deskripsi'		=> $deskripsi,
			'nama_file'		=> $nama_file,
			'insert_date'	=> date("Y-m-d H:i:s"),
			'author_insert'	=> $this->session->userdata('username')
		);
		$this->Model_slider->insert('galeri', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan'	  => 'tambah data slider oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_slider->insert('log_user', $isi_data_log);
	
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Slider'));
		redirect('admin/slider');
	}

	public function ubah($id_slider){
		$id_slider = decrypt_url($id_slider);
		$data['page']	= 'slider';
		$data['judul']	= 'Ubah Slider';
		$data['slider']	= $this->Model_slider->get_where('galeri', 'id_gambar='.$id_slider)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-slider', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_slider){
		$id_gambar	= decrypt_url($id_slider);;
		$deskripsi	= $this->input->post('deskripsi');
		if (!empty($_FILES['foto']['name'])) {
			$this->deleteFile($id_gambar);
			$nama_file		= $this->uploadFile();
		} else {
			$nama_file		= $this->input->post('file_lama');
		}

		$object = array(
			'deskripsi'		=> $deskripsi,
			'nama_file'		=> $nama_file,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
		$this->Model_slider->update('galeri', 'id_gambar='.$id_gambar, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data slider dg id '.$id_gambar.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_slider->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Slider'));
		redirect('admin/slider');
	}

	public function hapus($id_slider){
		$id_gambar	= decrypt_url($id_slider);
		$this->deleteFile($id_gambar);
		$this->Model_slider->delete('galeri', 'id_gambar='.$id_gambar);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data slider dg id '.$id_gambar.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_slider->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Slider'));
		redirect('admin/slider');
	}

	private function uploadFile(){
		$config['upload_path']          = './assets/img/slider/';
		$config['allowed_types']        = 'gif|jpg|jpeg|png';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
	}

	private function deleteFile($id){
		$product = $this->Model_slider->get_where('galeri', 'id_gambar='.$id)->row();
		if ($product->nama_file != null) {
			$filename = explode(".", $product->nama_file)[0];
			return array_map('unlink', glob(FCPATH."assets/img/slider/$filename.*"));
		}
	}


}
