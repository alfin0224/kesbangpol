<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profilcontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_profil');
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
		$data['page'] = '';
		$id_user = decrypt_url($this->uri->segment(3));
		// var_dump($id_user);
		// exit(0);
		$data['profil_user'] = $this->Model_profil->get_duatable('*', 'user', 'role', 'user.id_role=role.id_role', 'id_user='.$id_user, 'user.id_user');

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/profil');
		$this->load->view('admin/template/footer');
	}

	public function ubah()
	{
		
		$data['page'] = '';

		$id_user = decrypt_url($this->uri->segment(4));
		// var_dump($id_user);
		// exit(0);
		$data['profil_user'] = $this->Model_profil->get_duatable('*', 'user', 'role', 'user.id_role=role.id_role', 'id_user='.$id_user, 'user.id_user');

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-profil');
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id){

		$id_user	= decrypt_url($id);
		$nama	= $this->input->post('nama');
		$email	= $this->input->post('email');
		$no_telp	= $this->input->post('telepon');
		$cek_default_profil = $this->Model_profil->get_where('user', 'id_user='.$id_user)->row();
		$username = $cek_default_profil->username;
		$password	= encrypt_pass($this->input->post('password'), $username);
		// var_dump($cek_default_profil->gambar_profil);
		// exit(0);
		if (!empty($_FILES['foto']['name'])) {
			if($cek_default_profil->gambar_profil != "profil_default.jpg"){
				$this->deleteFile($id_user);
			}
			$foto		= $this->uploadFile();
		} else {
			$foto		= $this->input->post('file_lama');
		}

		$object = array(
			'nama' => $nama,
			'email'	=> $email,
			'no_telp' => $no_telp,
			'password' => $password,
			'gambar_profil'	=> $foto
		);
		$this->Model_profil->update('user', 'id_user='.$id_user, $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data profil dg id '.$id_user.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_profil->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Profil User'));
		redirect('admin/profil_user/'.encrypt_url($id_user));
	}

	private function uploadFile(){
		$config['upload_path']          = './assets/img/profiluser/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
	}

	private function deleteFile($id){
		$product = $this->Model_profil->get_where('user', 'id_user='.$id)->row();
		// var_dump($product);
		// exit(0);
		if ($product->gambar_profil != null) {
			$filename = explode(".", $product->gambar_profil)[0];
			return array_map('unlink', glob(FCPATH."assets/img/profiluser/$filename.*"));
		}
	}
}
