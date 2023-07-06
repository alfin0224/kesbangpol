<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penggunacontroller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_pengguna');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jayapura');
		if($this->session->userdata('status') != "login"){
			echo "<script>alert('Maaf, anda belum login / sesi anda sudah habis. Silahkan untuk login lagi!')</script>";
			redirect(base_url("admin/"),'refresh');
		}
		if(function_exists('check_if_role_is')){
			if (!check_if_role_is('1')){
				echo "<script>alert('Maaf, anda tidak izinkan membuka fitur ini!')</script>";
				redirect(base_url("admin/home"),'refresh');
			}
		}
	}

	public function index()
	{
		$id_user 			= $this->session->userdata('id_user');
		$data['user']		= $this->Model_pengguna->get_duatable('*','user', 'role', 'user.id_role = role.id_role', 'user.id_user!='.$id_user, 'user.id_user');
		$data['page']		= 'pengguna';
		$data['judul']		= 'Pengguna';
		$data['cekpenulis']	= $this->Model_pengguna->get_tbl('berita')->result_object(); 
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/pengguna');
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page']	= 'pengguna';
		$data['judul']	= 'Tambah Pengguna';
		$data['role']	= $this->Model_pengguna->get_tbl('role')->result();

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-pengguna');
		$this->load->view('admin/template/footer');
	}

	public function simpan_data_pengguna(){
		$role 		= $this->input->post('role');
		$email 		= $this->input->post('email');
		$telepon	= $this->input->post('telepon');
		$username   = $this->input->post('username');
		$nama 		= $this->input->post('nama');
		$password   = encrypt_pass($this->input->post('password'), $username);

		$cusername	= $this->Model_pengguna->get_tbl_where('user', ['username' => $username])->result_object();
		if(empty($cusername)){
			$isi_data_pengguna = array(
				'nama' 		   => $nama,
				'email'		   => $email,
				'no_telp'	   => $telepon,
				'username'     => $username,
				'password'     => $password,
				'id_role'  	   => $role,
				'gambar_profil' => 'profil_default.jpg',
				'author_insert'	=> $this->session->userdata('username'),
				'insert_date' 	=> date("Y-m-d H:i:s")
			);
	
			$this->Model_pengguna->tambah('user', $isi_data_pengguna);
	
			$this->load->library('user_agent');
			$browser = $this->agent->browser();
			$browser_version = $this->agent->version();
			$os = $this->agent->platform();
			$ip_address = $this->input->ip_address();
	
			// insert log activity
			$isi_data_log = array(
				'tgl_aktivitas' => date("Y-m-d H:i:s"),
				'keterangan' => 'tambah data user oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
				'jenis_aktivitas' => 'tambah data',
				'username' => $this->session->userdata('username'),
				'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
			);
			
			$this->Model_pengguna->tambah('log_user', $isi_data_log);
	
			$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Data Pengguna'));
			redirect('admin/pengguna','refresh');		
		} else {
			$this->session->set_flashdata('message1', array('type'=>'error','text'=>'Gagal Menambah Data Dengan Username Sama'));
			redirect('admin/pengguna/tambah','refresh');
		}
	}

	public function ubah()
	{
		$id_user			= decrypt_url($this->uri->segment(4));
		$data['pengguna']	= $this->Model_pengguna->get_duatable('*','user', 'role', 'user.id_role = role.id_role', 'user.id_user='.$id_user,' user.id_user');
		$data['role'] 		= $this->Model_pengguna->get_tbl('role')->result_object();
		$data['page'] 		= 'pengguna';
		$data['judul']		= 'Ubah Pengguna';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-pengguna');
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah_pengguna(){
		$id_pengguna = decrypt_url($this->uri->segment(4));
		$id_role = $this->input->post('role');
		$email  = $this->input->post('email');
		$nama = $this->input->post('nama');
		$no_telp = $this->input->post('telepon');
		$password  =$this->input->post('password');
		// var_dump($id_pengguna);
		// exit(0);
		$datapengguna	= $this->Model_pengguna->get_tbl_where('user', ['id_user' => $id_pengguna])->row();
		$username = $datapengguna->username;
		
		$isi_ubah_pengguna= array(
			'nama' => $nama,
			'id_role'  => $id_role,
			'email' => $email,
			'no_telp' => $no_telp,
			'last_update' 		=> date("Y-m-d H:i:s"),
			'author_update'		=> $this->session->userdata('username')
		);
		
		if (strlen($password) > 0) {
			$isi_ubah_pengguna['password'] =  encrypt_pass($password, $username);
		}

		$this->Model_pengguna->update_data('user', 'id_user='.$id_pengguna, $isi_ubah_pengguna);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas' => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data pengguna dg id '.$id_pengguna.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_pengguna->tambah('log_user', $isi_data_log);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Data Pengguna'));
		redirect('admin/pengguna','refresh');

	}

	public function hapus($id_user){
		$id_user	= decrypt_url($id_user);
		$this->Model_pengguna->hapus_data('user', 'id_user='.$id_user);
		
		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas' => date("Y-m-d H:i:s"),
			'keterangan' => 'Hapus data pengguna dg id '.$id_user.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_pengguna->tambah('log_user', $isi_data_log);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Data Pengguna'));
		redirect('admin/pengguna','refresh');
	}

	public function disable_user(){

		$id_user = decrypt_url($this->uri->segment(4));
		$ubah_status_pengguna= array(
			'status_user' => 0,
			'last_update' 		=> date("Y-m-d H:i:s"),
			'author_update'		=> $this->session->userdata('username')
		);
		$this->Model_pengguna->update_data('user', 'id_user='.$id_user, $ubah_status_pengguna);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas' => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah status deaktif pengguna dg id '.$id_user.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah status',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_pengguna->tambah('log_user', $isi_data_log);
		
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menon-aktikan Pengguna'));
		redirect('admin/pengguna','refresh');
	}
	
	public function activate_user(){
		
		$id_user = decrypt_url($this->uri->segment(4));
		$ubah_status_pengguna= array(
			'status_user' => 1,
			'last_update' 		=> date("Y-m-d H:i:s"),
			'author_update'		=> $this->session->userdata('username')
		);
		$this->Model_pengguna->update_data('user', 'id_user='.$id_user, $ubah_status_pengguna);
		
		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();
	
		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas' => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah status aktif pengguna dg id '.$id_user.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah status',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_pengguna->tambah('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengaktikan Pengguna'));
		redirect('admin/pengguna','refresh');
	}
}
