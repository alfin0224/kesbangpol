<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beritacontroller extends CI_Controller {

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
		$where = [];
		$data['berita'] = $this->Model_berita->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'berita.id_status_berita=1', 'berita.id_berita', 'DESC');
		$data['page']	= 'berita';
		$data['judul']	= 'Berita';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita');
		$this->load->view('admin/template/footer');
	}

	public function tambah()
	{
		$data['page']		= 'berita';
		$data['judul']		= 'Tambah Berita';
		$data['kategori']	= $this->Model_berita->get('kategori_berita')->result_object();
		$data['status']		= $this->Model_berita->get_where('status_berita', 'id_status != 3')->result_object();
		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/tambah/tambah-berita');
		$this->load->view('admin/template/footer');
	}

	public function simpan_berita()
	{
		$judul 		  = $this->input->post('judul');
		$isi_berita   = $this->input->post('isi');
		$id_kategori  = $this->input->post('kategori');
		$foto	  	  = $this->input->post('foto');
		$id_status 	  = $this->input->post('status');
		$gambar_berita = $this->uploadFile();
		// var_dump($gambar_berita);
		// exit(0);
		
		$object = array(
			'judul' 				=> $judul,
			'isi_berita'			=> $isi_berita,
			'id_status_berita'  	=> $id_status,
			'id_user_penulis'		=> $this->session->userdata('id_user'),
			'insert_date_berita'  	=> date("Y-m-d H:i:s")
		);

		if (isset($gambar_berita)) {
			$object['judul_gambar'] = $gambar_berita;
		}
		$this->Model_berita->insert('berita', $object);

		$where = [];
		$data['id_berita'] = $this->Model_berita->get_order_by('id_berita', 'berita', $where, 'id_berita', 'Desc', 1);
		foreach($data['id_berita'] as $ib){
			$id_berita = $ib->id_berita;
		}

		$i=0;
		foreach ($id_kategori as $ik => $kategori) :
			$data_kategori = array(
				'id_berita' => $id_berita,
				'id_kategori' => $kategori
			);
			$this->Model_berita->insert('merge_berita_kategori', $data_kategori);
			$i++;
		endforeach;



		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan'	  => 'tambah data berita oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'tambah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menambah Data Berita'));
		redirect('admin/manajemen-berita/berita','refresh');
	}

	public function ubah()
	{
		$id_berita						= decrypt_url($this->uri->segment(5));
		$data['judul']					= 'Ubah Berita';
		$data['berita'] 				= $this->Model_berita->get_duatable('*','berita', 'user', 'berita.id_user_penulis = user.id_user',  'berita.id_berita='.$id_berita,' berita.id_berita','ASC');
		$data['merge_berita_kategori'] 	= $this->Model_berita->get_duatable('*','kategori_berita', 'merge_berita_kategori', 'kategori_berita.id_kategori=merge_berita_kategori.id_kategori', 'merge_berita_kategori.id_berita='.$id_berita, 'merge_berita_kategori.id_berita', 'ASC');
		$data['kategori'] 				= $this->Model_berita->get('kategori_berita')->result_object();
		$data['page'] 					= 'berita';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/ubah/ubah-berita');
		$this->load->view('admin/template/footer');
	}

	public function simpan_ubah_berita()
	{
		$id_berita	= decrypt_url($this->uri->segment(5));
		$judul 		  = $this->input->post('judul');
		$isi_berita   = $this->input->post('isi');
		$id_kategori  = $this->input->post('kategori');
		
		// var_dump($gambar_berita);
		// exit(0);
		

		if (!empty($_FILES['gambar_berita']['name'])) {
			$this->deleteFile($id_berita);
		// var_dump($gambar_berita);
		// exit(0);
			$gambar_berita = $this->uploadFile();
		} else {
			$gambar_berita = $this->input->post('file_lama');
		}

		$object = array(
			'judul' 		=> $judul,
			'isi_berita'	=> $isi_berita,
			'judul_gambar'	=> $gambar_berita,
			'last_update'	=> date("Y-m-d H:i:s"),
			'author_update' => $this->session->userdata('username')
		);

		$this->Model_berita->update('berita', 'id_berita='.$id_berita, $object);

		if ($id_kategori == NULL) {

			$this->Model_berita->delete('merge_berita_kategori', 'id_berita='.$id_berita);

		} else {

			$i=0;
			$cek_kesamaan = 0;
			$data['cek_merge_kategori'] = $this->Model_berita->get_where('merge_berita_kategori', 'id_berita='.$id_berita)->result();
			if(isset($data['cek_merge_kategori'])){
				
				$this->Model_berita->delete('merge_berita_kategori', 'id_berita='.$id_berita);		
				foreach ($id_kategori as $ik => $kategori) :
					$data_kategori = array(
						'id_berita' => $id_berita,
						'id_kategori' => $kategori
					);
					$this->Model_berita->insert('merge_berita_kategori', $data_kategori);
					$i++;
				endforeach;

			} else {

				foreach ($id_kategori as $ik => $kategori) :
					$data_kategori = array(
						'id_berita' => $id_berita,
						'id_kategori' => $kategori
					);
					$this->Model_berita->insert('merge_berita_kategori', $data_kategori);
					$i++;
				endforeach;
			}
		}


		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data berita dg id '.$id_berita.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);
		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Mengubah Data Berita'));
		redirect('admin/manajemen-berita/berita/konsep','refresh');
	}

	public function konsep()
	{
		$data['berita'] = $this->Model_berita->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'berita.id_status_berita=2', 'berita.id_berita', 'DESC');
		$data['page'] 	= 'berita';
		$data['judul']	= 'Konsep';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita/konsep');
		$this->load->view('admin/template/footer');
	}

	public function tongsampah()
	{
		$data['berita'] = $this->Model_berita->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'berita.id_status_berita=3', 'berita.id_berita', 'DESC');
		$data['page'] 	= 'berita';
		$data['judul']	= 'Tong Sampah';

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita/tong-sampah');
		$this->load->view('admin/template/footer');
	}

	public function pratinjau()
	{
		$id_berita			= decrypt_url($this->uri->segment(5));
		$data['page']		= 'berita';
		$data['judul']		= 'Pratinjau Berita';
		$data['berita']		= $this->Model_berita->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'berita.id_berita='.$id_berita, 'berita.id_berita', 'ASC');
		$data['kategori']	= $this->Model_berita->get_duatable('*', 'merge_berita_kategori', 'kategori_berita', 'merge_berita_kategori.id_kategori = kategori_berita.id_kategori', 'merge_berita_kategori.id_berita='.$id_berita, 'merge_berita_kategori.id_berita', 'ASC');

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita/pratinjau');
		$this->load->view('admin/template/footer');
	}

	public function pratinjau_konsep()
	{
		$id_berita			= decrypt_url($this->uri->segment(6));
		$data['page'] 		= 'berita';
		$data['judul']		= 'Pratinjau Konsep';
		$data['berita'] 	= $this->Model_berita->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'berita.id_berita='.$id_berita, 'berita.id_berita', 'ASC');
		$data['kategori'] 	= $this->Model_berita->get_duatable('*', 'merge_berita_kategori', 'kategori_berita', 'merge_berita_kategori.id_kategori = kategori_berita.id_kategori', 'merge_berita_kategori.id_berita='.$id_berita, 'merge_berita_kategori.id_berita', 'ASC');

		$this->load->view('admin/template/header', $data);
		$this->load->view('admin/berita/pratinjau-konsep');
		$this->load->view('admin/template/footer');
	}

	public function ubah_status_konsep(){

		$id_berita = decrypt_url($this->uri->segment(5));
		$ubah_status_konsep= array(
			'id_status_berita' => 1
		);
		$this->Model_berita->update('berita', 'id_berita='.$id_berita, $ubah_status_konsep);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data status konsep berita dg id '.$id_berita.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah status',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Menerbitkan Berita'));
		redirect('admin/manajemen-berita/berita/','refresh');
	}


	public function ubah_status_terbit(){

		$id_berita = decrypt_url($this->uri->segment(5));
		$ubah_status_terbit= array(
			'id_status_berita' => 2
		);
		$this->Model_berita->update('berita', 'id_berita='.$id_berita, $ubah_status_terbit);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data status terbit berita dg id '.$id_berita.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah status',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Memindahkan ke Konsep'));
		redirect('admin/manajemen-berita/berita/konsep','refresh');
	}

	public function ubah_status_tong_sampah(){

		$id_berita = decrypt_url($this->uri->segment(5));
		$ubah_status_tong_sampah= array(
			'id_status_berita' => 3
		);
		$this->Model_berita->update('berita', 'id_berita='.$id_berita, $ubah_status_tong_sampah);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'ubah data status tong sampah berita dg id '.$id_berita.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'ubah status',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);

		$this->session->set_flashdata('message', array('type'=>'success','text'=>'Berhasil Memindahkan ke Tong Sampah'));
		redirect('admin/manajemen-berita/berita/tong-sampah','refresh');
	}

	public function hapus_permanen($id){
		$id_berita	= decrypt_url($id);
		// var_dump($id_regulasi);
		// exit(0);
		$this->Model_berita->delete('berita', 'id_berita='.$id_berita);

		$this->load->library('user_agent');
		$browser = $this->agent->browser();
		$browser_version = $this->agent->version();
		$os = $this->agent->platform();
		$ip_address = $this->input->ip_address();

		// insert log activity
		$isi_data_log = array(
			'tgl_aktivitas'   => date("Y-m-d H:i:s"),
			'keterangan' => 'hapus data berita dg id '.$id_berita.' oleh user dengan nama asli '.$this->session->userdata('nama'). ' dan kode role '.$this->session->userdata('id_role'),
			'jenis_aktivitas' => 'hapus data',
			'username' => $this->session->userdata('username'),
			'perangkat' =>  $browser.'-'.$browser_version.', '.$os.', '.$ip_address
		);
		$this->Model_berita->insert('log_user', $isi_data_log);
		redirect('admin/manajemen-berita/berita/tong-sampah');
	}

	private function uploadFile(){
		$config['upload_path']          = './assets/img/berita/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 25600;
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('gambar_berita')) {
			return $this->upload->data("file_name");
		}
	}

	private function deleteFile($id){
		$product = $this->Model_berita->get_where('berita', 'id_berita='.$id)->row();

		if ($product->judul_gambar != null) {
			$filename = explode(".", $product->judul_gambar)[0];
			return array_map('unlink', glob(FCPATH."assets/img/berita/$filename.*"));
		}
	}
}
