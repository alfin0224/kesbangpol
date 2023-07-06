<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publiccontroller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();	
		$this->load->model('Model_public');
		$this->load->library('form_validation');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		date_default_timezone_set('Asia/Jayapura');
	}

	public function index()
	{
		$where				= [];
		$data['page'] 		= 'beranda';
		$data['data'] 		= $this->Model_public->get('kontak')->row();
		$data['slider']		= $this->Model_public->get('galeri')->result_object();
		$data['strukorgan']	= $this->Model_public->get_duatable('*', 'struktur_organisasi', 'jabatan', 'struktur_organisasi.id_jabatan=jabatan.id_jabatan', $where, 'struktur_organisasi.id_struktur', "ASC");
		$data['unitkerja']	= $this->Model_public->get('unit_kerja')->result_object();
		$data['progkeg']	= $this->Model_public->get('program_kegiatan')->result_object();
		$data['layanan']	= $this->Model_public->get('layanan')->result_object();
		$data['regulasi']	= $this->Model_public->get('regulasi')->result_object();
		$data['berita'] 	= $this->Model_public->get_order_by('*', 'berita', 'id_status_berita=1', 'id_berita', 'desc', 4);
		// $data['gambar_berita'] = $this->Model_public->get('gambar_berita')->result_object();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/index', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function visi_misi()
	{
		$data['page'] 		= 'profil';
		$data['judul']		= 'Visi-Misi';
		$data['data'] 		= $this->Model_public->get('kontak')->row();
		$data['visimisi'] 	= $this->Model_public->get('visi_misi')->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/visi-misi-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function tugas_dan_fungsi()
	{
		$data['page'] 			= 'profil';
		$data['judul']			= 'Tugas dan Fungsi';
		$data['data'] 			= $this->Model_public->get('kontak')->row();
		$data['tugasfungsi']	= $this->Model_public->get('tugas_fungsi')->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/tugas-dan-fungsi-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function struktur_organisasi()
	{
		$data['page'] 		= 'profil';
		$data['judul']		= 'Struktur Organisasi';
		$data['data'] 		= $this->Model_public->get('kontak')->row();
		$data['struktur'] 	= $this->getStruktur();
		
		$this->load->view('public/template/header', $data);
		$this->load->view('public/struktur-organisasi-public', $data);
		//$this->load->view('public/template/footer', $data);
	}

	private function getStruktur(){
		$where				= [];
		$atasan = $this->Model_public->get_duatable('*', 'struktur_organisasi', 'jabatan', 'struktur_organisasi.id_jabatan=jabatan.id_jabatan', 'struktur_organisasi.id_jabatan=1', 'struktur_organisasi.id_jabatan', "ASC")[0];
	
		$isi = [];
		$isi[] = [
			'head'		=> $atasan->jabatan." ".$atasan->ket_jabatan,
			'id'		=> $atasan->id_jabatan,
			'contents'	=> $atasan->nama_pejabat,
			'children'	=> $this->getBawahan()
		];
		
		return json_encode($isi);
		
	}
	private function getBawahan(){
		$bawahan	= $this->Model_public->get_duatable('*', 'struktur_organisasi', 'jabatan', 'struktur_organisasi.id_jabatan=jabatan.id_jabatan', 'struktur_organisasi.id_jabatan!=1', 'struktur_organisasi.id_jabatan', "ASC");
		$isi = [];
		foreach($bawahan as $bw){
			$isi[] = [
				'head'		=> $bw->jabatan." ".$bw->ket_jabatan,
				'id'		=> $bw->id_jabatan,
				'contents'	=> $bw->nama_pejabat
			];
		}
		return ($isi);
	}

	public function sejarah()
	{
		$data['page'] 		= 'profil';
		$data['judul']		= 'Sejarah';
		$data['data'] 		= $this->Model_public->get('kontak')->row();
		$data['sejarah']	= $this->Model_public->get('sejarah')->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/sejarah-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function unit_kerja($id_unit_kerja)
	{
		$id_unit_kerja	= decrypt_url($id_unit_kerja);
		$data['page'] 	= 'unit-kerja';
		$data['judul']	= 'Unit Kerja';
		$data['data'] 	= $this->Model_public->get('kontak')->row();
		$data['unit'] 	= $this->Model_public->get_where('unit_kerja', 'id_unit_kerja='.$id_unit_kerja)->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/unit-kerja-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function program_kegiatan($id_progkeg)
	{
		$id_progkeg		= decrypt_url($id_progkeg);
		$data['page'] 	= 'program-kegiatan';
		$data['judul']	= 'Program Kegiatan';
		$data['data'] 	= $this->Model_public->get('kontak')->row();
		$data['pk']		= $this->Model_public->get_where('program_kegiatan', 'id_progkeg='.$id_progkeg)->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/program-kegiatan-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function berita()
	{
		$id_berita			= decrypt_url($this->uri->segment(3));
		$data['page'] 		= 'berita';
		$data['data'] 		= $this->Model_public->get('kontak')->row();
		$data['berita'] 	= $this->Model_public->get_duatable('*', 'berita', 'user', 'berita.id_user_penulis = user.id_user', 'id_status_berita=1 AND id_berita='.$id_berita, 'berita.id_berita', "DESC");
		$data['katber']		= $this->Model_public->get_duatable('*', 'merge_berita_kategori', 'kategori_berita', 'merge_berita_kategori.id_kategori = kategori_berita.id_kategori', 'merge_berita_kategori.id_berita='.$id_berita, 'merge_berita_kategori.id_berita', "DESC");

		$data['top5'] 		= $this->Model_public->get_order_by('*', 'berita', 'id_status_berita=1', 'id_berita', 'desc', 5);
		$data['kategori']	= $this->Model_public->get('kategori_berita')->result_object();
		// $data['gambar_berita'] = $this->Model_public->get_where('gambar_berita', 'id_berita='.$id_berita)->result_object();
		foreach($data['berita'] as $b):
			$data['judul']	= $b->judul;
		endforeach;
		
		$this->load->view('public/template/header', $data);
		$this->load->view('public/berita-public');
		$this->load->view('public/template/footer', $data);
	}

	public function berita_semua()
	{
		//PAGINATION
		$start					= $this->uri->segment(3);
		$config['base_url']		= base_url('/berita/semua/');
		$config['total_rows']	= $this->Model_public->get('berita')->num_rows();
		$config['per_page']		= 8;

		$config['full_tag_open']	= '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close']	= '</ul></nav>';

		$config['first_link'] 		= 'Awal';
		$config['first_tag_open']	= '<li class="page-item">';
		$config['first_tag_close']	= '</li>';
		
		$config['last_link'] 		= 'Akhir';
		$config['last_tag_open']	= '<li class="page-item">';
		$config['last_tag_close']	= '</li>';
		
		$config['next_link'] 		= '&raquo';
		$config['next_tag_open']	= '<li class="page-item">';
		$config['next_tag_close']	= '</li>';
		
		$config['prev_link'] 		= '&laquo';
		$config['prev_tag_open']	= '<li class="page-item">';
		$config['prev_tag_close']	= '</li>';

		$config['cur_tag_open'] 	= '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close']	= '</a></li>';

		$config['num_tag_open']		= '<li class="page-item">';
		$config['num_tag_close']	= '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$this->pagination->initialize($config);

		$data['page'] 			= 'berita';
		$data['judul']			= 'Berita';
		$data['data'] 			= $this->Model_public->get('kontak')->row();
		$data['berita'] 		= $this->Model_public->get_limit_where('berita', 'id_status_berita=1', $config['per_page'], $start, 'berita.id_berita', 'DESC')->result_object();
		// $data['gambar_berita'] 	= $this->Model_public->get('gambar_berita')->result_object();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/berita-semua-public');
		$this->load->view('public/template/footer', $data);
	}

	public function layanan()
	{
		$data['page'] = 'layanan';
		$data['data'] = $this->Model_public->get('kontak')->row();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/layanan-public');
		$this->load->view('public/template/footer', $data);
	}

	public function regulasi($id_regulasi)
	{
		$id_regulasi	= decrypt_url($id_regulasi);
		$data['page']	= 'regulasi';
		$data['judul']	= 'Regulasi';
		$data['data']	= $this->Model_public->get('kontak')->row();
		$data['regu']	= $this->Model_public->get_where('regulasi', 'id_regulasi='.$id_regulasi)->row();


		$this->load->view('public/template/header', $data);
		$this->load->view('public/regulasi-public');
		$this->load->view('public/template/footer', $data);
	}

	// public function kontak()
	// {
	// 	$data['page'] = 'kontak';

	// 	$this->load->view('public/template/header', $data);
	// 	$this->load->view('public/kontak-public');
	// 	$this->load->view('public/template/footer');
	// }

	public function kirim_pesan()
	{
		$nama		= $this->input->post('nama');
		$telepon	= $this->input->post('telepon');
		$email		= $this->input->post('email');
		$pesan		= $this->input->post('pesan');
		
		$object = array(
			'nama'		=> $nama,
			'telepon'	=> $telepon,
			'email'		=> $email,
			'pesan'		=> $pesan
		);
		$this->Model_public->insert('pesan_masuk', $object);
		redirect('');
		
	}

	public function cari()
	{
		$data['keyword']	= $this->input->get('keyword');	
		$data['page']		= '';
		$data['judul']		= 'Pencarian';
		$data['ketcari']	= 'Hasil Pencarian';
		$data['data']		= $this->Model_public->get('kontak')->row();
		$data['cari']		= $this->Model_public->get_like('berita', 'berita.judul', 'berita.isi_berita', $data['keyword'], 'id_status_berita=1', 'berita.id_berita', "DESC")->result_object();

		$this->load->view('public/template/header', $data);
		$this->load->view('public/cari-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function penulis($id_user_penulis)
	{
		$id_user_penulis	= decrypt_url($id_user_penulis);
		$data['penulis']	= $this->Model_public->get_where('user','id_user='.$id_user_penulis)->row();
		$data['keyword'] 	= $data['penulis']->nama;
		$data['page']		= '';
		$data['judul']		= 'Penulis';
		$data['ketcari']	= 'Penulis';
		$data['data']		= $this->Model_public->get('kontak')->row();
		$data['jumlah']		= $this->Model_public->get_where('berita', 'id_status_berita=1 AND id_user_penulis='.$id_user_penulis)->num_rows();
		$data['cari']		= $this->Model_public->get_order_by('*', 'berita', 'id_status_berita=1 AND id_user_penulis='.$id_user_penulis, 'id_berita', "DESC", $data['jumlah']);
		
		$this->load->view('public/template/header', $data);
		$this->load->view('public/cari-public', $data);
		$this->load->view('public/template/footer', $data);
	}

	public function kategori($id_kategori)
	{
		$id_kategori		= decrypt_url($id_kategori);
		$data['kategori']	= $this->Model_public->get_where('kategori_berita','id_kategori='.$id_kategori)->row();
		$data['keyword']	= $data['kategori']->kategori;
		$data['page']		= '';
		$data['judul']		= 'Kategori';
		$data['ketcari']	= 'Kategori';
		$data['data']		= $this->Model_public->get('kontak')->row();
		$data['cari']		= $this->Model_public->get_duatable('*', 'merge_berita_kategori', 'berita', 'merge_berita_kategori.id_berita = berita.id_berita', 'id_status_berita=1 AND merge_berita_kategori.id_kategori='.$id_kategori, 'berita.id_berita', "DESC");

		$this->load->view('public/template/header', $data);
		$this->load->view('public/cari-public', $data);
		$this->load->view('public/template/footer', $data);
	}
}
