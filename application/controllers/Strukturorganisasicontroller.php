<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strukturorganisasicontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_strukturorganisasi');
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
		$where = [];
		$data['page'] 		= 'struktur-organisasi';
		$data['judul']		= 'Struktur Organisasi';
		$data['strukorgan'] = $this->Model_strukturorganisasi->get_duatable('*', 'struktur_organisasi', 'jabatan', 'struktur_organisasi.id_jabatan=jabatan.id_jabatan', $where, 'struktur_organisasi.id_jabatan');

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/struktur-organisasi', $data);
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page'] 		= 'struktur-organisasi';
		$data['judul']		= 'Tambah Struktur Organisasi';
		$cekkadis			= $this->Model_strukturorganisasi->get_where('struktur_organisasi', 'id_jabatan=1')->result_object();
		$ceksekre			= $this->Model_strukturorganisasi->get_where('struktur_organisasi', 'id_jabatan=3')->result_object();
		if(empty($cekkadis) && empty($ceksekre)){
			$data['jabatan']	= $this->Model_strukturorganisasi->get('jabatan')->result_object();
		} else if(empty($cekkadis)){
			$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=3')->result_object();
		} else if(empty($ceksekre)){
			$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=1')->result_object();
		} else{
			$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan=2')->result_object();
		}

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-struktur-organisasi', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan()
	{
		$nama_pejabat	= $this->input->post('nama');
		$id_jabatan		= $this->input->post('jabatan');
		$ket_jabatan	= $this->input->post('ket_jabatan');
		$nip			= $this->input->post('nip');
		$foto			= $this->uploadFile();

		$object = array(
			'nama_pejabat'	=> $nama_pejabat,
			'id_jabatan'	=> $id_jabatan,
			'ket_jabatan'	=> $ket_jabatan,
			'nip'			=> $nip,
			'foto'			=> $foto,
			'author_insert'	=> $this->session->userdata('username'),
			'insert_date'	=> date("Y-m-d H:i:s")
		);
	
		$this->Model_strukturorganisasi->insert('struktur_organisasi', $object);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'tambah data struktur organisasi dg id oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_strukturorganisasi->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Struktur Organisasi'));
		redirect('admin/profil/struktur-organisasi');
	}

	public function ubah($id_struktur)
	{
		$id_struktur		= decrypt_url($id_struktur);
		$data['page'] 		= 'struktur-organisasi';
		$data['judul']		= 'Ubah Struktur Organisasi';
		$data['strukorgan'] = $this->Model_strukturorganisasi->get_duatable('*', 'struktur_organisasi', 'jabatan', 'struktur_organisasi.id_jabatan=jabatan.id_jabatan', 'struktur_organisasi.id_struktur='.$id_struktur, 'struktur_organisasi.id_struktur');
		$cekkadis			= $this->Model_strukturorganisasi->get_where('struktur_organisasi', 'id_jabatan=1')->result_object();
		$ceksekre			= $this->Model_strukturorganisasi->get_where('struktur_organisasi', 'id_jabatan=3')->result_object();

		foreach($data['strukorgan'] as $so):
			if($so->id_jabatan == 1){
				if(empty($ceksekre)){
					$data['jabatan']	= $this->Model_strukturorganisasi->get('jabatan')->result_object();
				} else{
					$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=3')->result_object();
				}
			} else if($so->id_jabatan == 3){
				if(empty($cekkadis)){
					$data['jabatan']	= $this->Model_strukturorganisasi->get('jabatan')->result_object();
				} else{
					$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=1')->result_object();
				}
			} else {
				if(empty($cekkadis) && empty($ceksekre)){
					$data['jabatan']	= $this->Model_strukturorganisasi->get('jabatan')->result_object();
				} else if(empty($cekkadis)){
					$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=3')->result_object();
				} else if(empty($ceksekre)){
					$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan!=1')->result_object();
				} else{
					$data['jabatan']	= $this->Model_strukturorganisasi->get_where('jabatan', 'id_jabatan=2')->result_object();
				}
			}
		endforeach;
		
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-struktur-organisasi', $data);
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah($id_struktur){
		$id_struktur	= decrypt_url($id_struktur);
		$nama_pejabat	= $this->input->post('nama');
		$id_jabatan		= $this->input->post('jabatan');
		if($id_jabatan == 1 OR $id_jabatan == 3){
			$ket_jabatan	= "";
		} else {
			$ket_jabatan	= $this->input->post('ket_jabatan');
		}
		$nip			= $this->input->post('nip');
		if (!empty($_FILES['foto']['name'])) {
			$this->deleteFile($id_struktur);
			$foto		= $this->uploadFile();
		} else {
			$foto		= $this->input->post('file_lama');
		}

		$object = array(
			'nama_pejabat'	=> $nama_pejabat,
			'id_jabatan'	=> $id_jabatan,
			'ket_jabatan'	=> $ket_jabatan,
			'nip'			=> $nip,
			'foto'			=> $foto,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update'	=> $this->session->userdata('username')
		);
	
		$this->Model_strukturorganisasi->update('struktur_organisasi', 'id_struktur='.$id_struktur, $object);
		
		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data struktur organisasi dg id '.$id_struktur.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_strukturorganisasi->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Struktur Organisasi'));
		redirect('admin/profil/struktur-organisasi');	
	}

	public function hapus($id_struktur){
		$id_struktur	= decrypt_url($id_struktur);
		$this->deleteFile($id_struktur);
		$this->Model_strukturorganisasi->delete('struktur_organisasi', 'id_struktur='.$id_struktur);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data struktur organisasi dg id '.$id_struktur.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_strukturorganisasi->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menghapus Struktur Organisasi'));
		redirect('admin/profil/struktur-organisasi');
	}

	private function uploadFile(){
		$config['upload_path']          = './assets/img/struktur/';
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
		$product = $this->Model_strukturorganisasi->get_where('struktur_organisasi', 'id_struktur='.$id)->row();
		if ($product->foto != null) {
			$filename = explode(".", $product->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/img/struktur/$filename.*"));
		}
	}
}
