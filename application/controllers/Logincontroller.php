<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logincontroller extends CI_Controller {

	function __construct(){
		parent::__construct();	
		$this->load->helper('login');	
		$this->load->model('Model_login');
		date_default_timezone_set('Asia/Jayapura');
	}

	public function index()
	{
		$this->load->view('login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = encrypt_pass($this->input->post('password'), $username);
		// var_dump($username);
		// exit(0);

		$where = array(
			'username' => $username,
			'password' => $password,
			'status_user' => 1
			);
		$cek = $this->Model_login->cek_login("user", $where)->num_rows();
		// var_dump($cek);
		// exit(0);
		if($cek > 0){

			// $ambil_data = $this->model_login ->ambil("user_admin", $where)->result();
			// foreach ($ambil_data as $a) {
			// 	$role = $a->role;
			// }

			// $data_session = array(
			// 	'username' => $username,
			// 	'status' => "login",
			// 	'role' => $role
			// 	);
			$ambil_data 			= $this->Model_login ->ambil("user", $where)->row();
			$data_session  			= (array) $ambil_data; //convert jadi array
			if (isset($data_session['__ci_last_regenerate'])) {
				unset($data_session['__ci_last_regenerate']);
			}

			$data_session['status'] = "login";
			$this->session->set_userdata($data_session);

			if(function_exists('check_if_role_is')){
				// insert log activity

				$this->load->library('user_agent');
				$browser = $this->agent->browser();
				$browser_version = $this->agent->version();
				$os = $this->agent->platform();
				$ip_address = $this->input->ip_address();

				$isi_data_log = array(
					'tgl_aktivitas' => date("Y-m-d H:i:s"),
					'keterangan' => 'login nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
					'jenis_aktivitas' => 'login',
					'username' => $this->session->userdata('username'),
					'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
					);
				$this->Model_login ->insert_data('log_user', $isi_data_log);
				$role = $this->session->userdata('id_role');
				if (check_if_role_is($role)){
					// $this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Login..'));
					redirect(base_url("admin/home"), 'refresh');

				} 
			}

		}else{
		// 	echo "<script> alert('data yang anda masukkan salah!!');
		// 	history.back();
		// </script>";
			$_SESSION["message"] = 'Username/Password yang Anda Masukkan Salah';
			redirect(base_url("admin"),'refresh');
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('admin'));
	}
}
