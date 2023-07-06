<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanancontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_layanan');
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
		$data['page'] 		= 'layanan';
		$data['judul']		= 'Layanan';
		$data['layanan']	= $this->Model_layanan->get('layanan')->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/layanan', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] 	= 'layanan';
		$data['judul']	= 'Tambah Layanan';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-layanan');
		$this->load->view('admin/template/footer');
	}

	public function simpan()
	{
		$nama_layanan	= $this->input->post('nama_layanan');
		$foto			= $this->uploadFile();
		$link			= $this->input->post('link');

		$object = array(
			'nama_layanan'	=> $nama_layanan,
			'foto'			=> $foto,
			'link'			=> $link	
		);
		$this->Model_layanan->insert('layanan', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'tambah data layanan oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_layanan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Layanan'));
		redirect('admin/layanan');
	}

	public function ubah($id_layanan)
	{
		$id_layanan			= decrypt_url($id_layanan);
		$data['page'] 		= 'layanan';
		$data['judul']		= 'Ubah Layanan';
		$data['layanan']	= $this->Model_layanan->get_where('layanan', 'id_layanan='.$id_layanan)->result_object();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-layanan', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_layanan){
		$id_layanan		= decrypt_url($id_layanan);
		$nama_layanan	= $this->input->post('nama_layanan');
		$link			= $this->input->post('link');
		if (!empty($_FILES['foto_web_app']['name'])) {
			$this->deleteFile($id_layanan);
			$foto		= $this->uploadFile();
		} else {
			$foto		= $this->input->post('file_lama');
		}

		$object = array(
			'nama_layanan'	=> $nama_layanan,
			'foto'			=> $foto,
			'link'			=> $link
		);
		$this->Model_layanan->update('layanan', 'id_layanan='.$id_layanan, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data layanan dg id '.$id_layanan.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_layanan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Layanan'));
		redirect('admin/layanan');
	}

	public function hapus($id_layanan){
		$id_layanan	= decrypt_url($id_layanan);
		$this->deleteFile($id_layanan);
		$this->Model_layanan->delete('layanan', 'id_layanan='.$id_layanan);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data layanan dg id '.$id_layanan.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_layanan->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Layanan'));
		redirect('admin/layanan');
	}

	private function uploadFile(){
		$config['upload_path']          = './assets/img/layanan/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto_web_app')) {
			return $this->upload->data("file_name");
		}
	}

	private function deleteFile($id){
		$product = $this->Model_layanan->get_where('layanan', 'id_layanan='.$id)->row();
		if ($product->foto != null) {
			$filename = explode(".", $product->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/img/layanan/$filename.*"));
		}
	}
}
