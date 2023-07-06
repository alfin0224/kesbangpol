<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programkegiatancontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_programkegiatan');
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
		$data['page'] 		= 'program-kegiatan';
		$data['judul']		= 'Program Kegiatan';
		$data['progkeg']	= $this->Model_programkegiatan->get('program_kegiatan')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/program-kegiatan', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] 	= 'program-kegiatan';
		$data['judul']	= 'Tambah Program Kegiatan';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-program-kegiatan');
		$this->load->view('admin/template/footer');
	}

	public function simpan()
	{
		$tahun		= $this->input->post('tahun');
		$deskripsi	= $this->input->post('deskripsi');
		$nama_file	= $this->uploadFile();

		$object = array(
			'tahun'			=> $tahun,
			'deskripsi'		=> $deskripsi,
			'nama_file'		=> $nama_file,
			'author_insert'	=> $this->session->userdata('username'),
			'insert_date'	=> date("Y-m-d H:i:s")
		);
		$this->Model_programkegiatan->insert('program_kegiatan', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'tambah data program kegiatan oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_programkegiatan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Program Kegiatan'));
		redirect('admin/program-kegiatan');
	}

	public function ubah($id_progkeg)
	{
		$id_progkeg			= decrypt_url($id_progkeg);
		$data['page'] 		= 'program-kegiatan';
		$data['judul']		= 'Ubah Program Kegiatan';
		$data['progkeg']	= $this->Model_programkegiatan->get_where('program_kegiatan', 'id_progkeg='.$id_progkeg)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-program-kegiatan', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_progkeg){
		$id_progkeg	= decrypt_url($id_progkeg);
		$tahun		= $this->input->post('tahun');
		$deskripsi	= $this->input->post('deskripsi');
		if (!empty($_FILES['pk']['name'])) {
			$this->deleteFile($id_progkeg);
			$nama_file	= $this->uploadFile();
		} else {
			$foto		= $this->input->post('file_lama');
		}

		$object = array(
			'tahun'			=> $tahun,
			'deskripsi'		=> $deskripsi,
			'nama_file'		=> $nama_file,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
		$this->Model_programkegiatan->update('program_kegiatan', 'id_progkeg='.$id_progkeg, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data program kegiatan dg id '.$id_progkeg.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_programkegiatan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Program Kegiatan'));
		redirect('admin/program-kegiatan');
	}

	public function hapus($id_progkeg){
		$id_progkeg	= decrypt_url($id_progkeg);
		$this->deleteFile($id_progkeg);
		$this->Model_programkegiatan->delete('program_kegiatan', 'id_progkeg='.$id_progkeg);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data program kegiatan dg id '.$id_progkeg.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_programkegiatan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Program Kegiatan'));
		redirect('admin/program-kegiatan');
	}

	private function uploadFile(){
		$config['upload_path']          = './upload/progkeg/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg|doc|docx|pdf|xls';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('pk')) {
			return $this->upload->data("file_name");
		}
	}

	private function deleteFile($id){
		$product = $this->Model_programkegiatan->get_where('program_kegiatan', 'id_progkeg='.$id)->row();
		if ($product->nama_file != null) {
			$filename = explode(".", $product->nama_file)[0];
			//echo $filename;
			return array_map('unlink', glob(FCPATH."upload/progkeg/$filename.*"));
		}
	}
}
