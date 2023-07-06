<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'publiccontroller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//public
$route['visi-misi'] = 'publiccontroller/visi_misi';
$route['tugas-dan-fungsi'] = 'publiccontroller/tugas_dan_fungsi';
$route['struktur-organisasi'] = 'publiccontroller/struktur_organisasi';
$route['sejarah'] = 'publiccontroller/sejarah';

$route['unit-kerja/(:any)'] = 'publiccontroller/unit_kerja/$1';
$route['program-kegiatan/(:any)'] = 'publiccontroller/program_kegiatan/$1';
$route['berita/detail/(:any)'] = 'publiccontroller/berita/$1';
$route['berita/semua'] = 'publiccontroller/berita_semua';
$route['berita/semua/(:any)'] = 'publiccontroller/berita_semua';
$route['layanan/(:any)'] = 'publiccontroller/layanan/$1';
$route['regulasi/(:any)'] = 'publiccontroller/regulasi/$1';
$route['kirim-pesan'] = 'publiccontroller/kirim_pesan';
// $route['kontak'] = 'publiccontroller/kontak'

$route['cari'] = 'publiccontroller/cari';
$route['penulis/(:any)'] = 'publiccontroller/penulis/$1';
$route['kategori/(:any)'] = 'publiccontroller/kategori/$1';

//login
$route['admin'] = 'admincontroller/login';
$route['aksi_login'] = 'logincontroller/aksi_login';
$route['logout'] = 'logincontroller/logout';

//home
$route['admin/home'] = 'admincontroller';
$route['summernote/(:any)'] = 'uploadcontroller/$1';

//profil
$route['admin/profil_user/(:any)'] = 'profilcontroller/index/$1';
$route['admin/profil_user/ubah/(:any)'] = 'profilcontroller/ubah/$1';
$route['admin/profil_user/simpan_ubah/(:any)'] = 'profilcontroller/simpan_ubah/$1';

//slider
$route['admin/slider'] = 'slidercontroller';
$route['admin/slider/tambah'] = 'slidercontroller/tambah';
$route['admin/slider/ubah/(:any)'] = 'slidercontroller/ubah/$1';
$route['admin/slider/simpan_ubah/(:any)'] = 'slidercontroller/simpan_ubah/$1';
$route['admin/slider/simpan'] = 'slidercontroller/simpan';
$route['admin/slider/hapus/(:any)'] = 'slidercontroller/hapus/$1';

//profil
$route['admin/profil/visi-misi'] = 'visimisicontroller';
$route['admin/profil/visi-misi/ubah/(:any)'] = 'visimisicontroller/ubah/$1';
$route['admin/profil/visi-misi/simpan_ubah/(:any)'] = 'visimisicontroller/simpan_ubah/$1';
$route['admin/profil/tugas-dan-fungsi'] = 'tugasdanfungsicontroller';
$route['admin/profil/tugas-dan-fungsi/ubah/(:any)'] = 'tugasdanfungsicontroller/ubah/$1';
$route['admin/profil/tugas-dan-fungsi/simpan_ubah/(:any)'] = 'tugasdanfungsicontroller/simpan_ubah/$1';
$route['admin/profil/struktur-organisasi'] = 'strukturorganisasicontroller';
$route['admin/profil/struktur-organisasi/tambah'] = 'strukturorganisasicontroller/tambah';
$route['admin/profil/struktur-organisasi/simpan'] = 'strukturorganisasicontroller/simpan';
$route['admin/profil/struktur-organisasi/ubah/(:any)'] = 'strukturorganisasicontroller/ubah/$1';
$route['admin/profil/struktur-organisasi/simpan_ubah/(:any)'] = 'strukturorganisasicontroller/simpan_ubah/$1';
$route['admin/profil/struktur-organisasi/hapus/(:any)'] = 'strukturorganisasicontroller/hapus/$1';
$route['admin/profil/sejarah'] = 'sejarahcontroller';
$route['admin/profil/sejarah/ubah/(:any)'] = 'sejarahcontroller/ubah/$1';
$route['admin/profil/sejarah/simpan_ubah/(:any)'] = 'sejarahcontroller/simpan_ubah/$1';

//unit-kerja
$route['admin/unit-kerja'] = 'unitkerjacontroller';
$route['admin/unit-kerja/tambah'] = 'unitkerjacontroller/tambah';
$route['admin/unit-kerja/simpan'] = 'unitkerjacontroller/simpan';
$route['admin/unit-kerja/ubah/(:any)'] = 'unitkerjacontroller/ubah/$1';
$route['admin/unit-kerja/simpan_ubah/(:any)'] = 'unitkerjacontroller/simpan_ubah/$1';
$route['admin/unit-kerja/hapus/(:any)'] = 'unitkerjacontroller/hapus/$1';

//program-kegiatan
$route['admin/program-kegiatan'] = 'programkegiatancontroller';
$route['admin/program-kegiatan/tambah'] = 'programkegiatancontroller/tambah';
$route['admin/program-kegiatan/simpan'] = 'programkegiatancontroller/simpan';
$route['admin/program-kegiatan/ubah/(:any)'] = 'programkegiatancontroller/ubah/$1';
$route['admin/program-kegiatan/simpan_ubah/(:any)'] = 'programkegiatancontroller/simpan_ubah/$1';
$route['admin/program-kegiatan/hapus/(:any)'] = 'programkegiatancontroller/hapus/$1';

//berita
$route['admin/manajemen-berita/berita'] = 'beritacontroller';
$route['admin/manajemen-berita/berita/tambah'] = 'beritacontroller/tambah';
$route['admin/manajemen-berita/berita/simpan_berita'] = 'beritacontroller/simpan_berita';
$route['admin/manajemen-berita/berita/ubah/(:any)'] = 'beritacontroller/ubah/$1';
$route['admin/manajemen-berita/berita/simpan_ubah_berita/(:any)'] = 'beritacontroller/simpan_ubah_berita/$1';
$route['admin/manajemen-berita/berita/pratinjau/(:any)'] = 'beritacontroller/pratinjau/$1';
$route['admin/manajemen-berita/berita/konsep'] = 'beritacontroller/konsep';
$route['admin/manajemen-berita/berita/konsep/pratinjau-konsep/(:any)'] = 'beritacontroller/pratinjau_konsep/$1';
$route['admin/manajemen-berita/berita/tong-sampah'] = 'beritacontroller/tongsampah';
$route['admin/manajemen-berita/kategori'] = 'kategoricontroller';
$route['admin/manajemen-berita/kategori/tambah'] = 'kategoricontroller/tambah';
$route['admin/manajemen-berita/simpan_kategori'] = 'kategoricontroller/simpan_kategori';
$route['admin/manajemen-berita/kategori/ubah/(:any)'] = 'kategoricontroller/ubah/$1';
$route['admin/manajemen-berita/kategori/simpan_ubah/(:any)'] = 'kategoricontroller/simpan_ubah/$1';
$route['admin/manajemen-berita/kategori/hapus_kategori/(:any)'] = 'kategoricontroller/hapus_kategori/$1';
$route['admin/manajemen-berita/berita/ubah_status_konsep/(:any)'] = 'beritacontroller/ubah_status_konsep/$1';
$route['admin/manajemen-berita/berita/ubah_status_terbit/(:any)'] = 'beritacontroller/ubah_status_terbit/$1';
$route['admin/manajemen-berita/berita/ubah_status_tong_sampah/(:any)'] = 'beritacontroller/ubah_status_tong_sampah/$1';
$route['admin/manajemen-berita/berita/tong-sampah/hapus_permanen/(:any)'] = 'beritacontroller/hapus_permanen/$1';

//layanan
$route['admin/layanan'] = 'layanancontroller';
$route['admin/layanan/tambah'] = 'layanancontroller/tambah';
$route['admin/layanan/simpan'] = 'layanancontroller/simpan';
$route['admin/layanan/ubah/(:any)'] = 'layanancontroller/ubah/$1';
$route['admin/layanan/simpan_ubah/(:any)'] = 'layanancontroller/simpan_ubah/$1';
$route['admin/layanan/hapus/(:any)'] = 'layanancontroller/hapus/$1';

//regulasi
$route['admin/regulasi'] = 'regulasicontroller';
$route['admin/regulasi/tambah'] = 'regulasicontroller/tambah';
$route['admin/regulasi/simpan_regulasi'] = 'regulasicontroller/simpan_data_regulasi';
$route['admin/regulasi/ubah/(:any)'] = 'regulasicontroller/ubah/$1';
$route['admin/regulasi/simpan_ubah/(:any)'] = 'regulasicontroller/simpan_ubah/$1';
$route['admin/regulasi/hapus/(:any)'] = 'regulasicontroller/hapus/$1';

//kontak
$route['admin/kontak'] = 'kontakcontroller';
$route['admin/kontak/ubah/(:any)'] = 'kontakcontroller/ubah/$1';
$route['admin/kontak/simpan_ubah/(:any)'] = 'kontakcontroller/simpan_ubah/$1';

//pesan-masuk
$route['admin/pesan-masuk'] = 'pesanmasukcontroller';
$route['admin/pesan-masuk/hapus/(:any)'] = 'pesanmasukcontroller/hapus/$1';

//pengguna
$route['admin/pengguna'] = 'penggunacontroller';
$route['admin/pengguna/tambah'] = 'penggunacontroller/tambah';
$route['admin/pengguna/simpan_data_pengguna'] = 'penggunacontroller/simpan_data_pengguna';
$route['admin/pengguna/ubah/(:any)'] = 'penggunacontroller/ubah/$1';
$route['admin/pengguna/simpan_ubah_pengguna/(:any)'] = 'penggunacontroller/simpan_ubah_pengguna/$1';
$route['admin/pengguna/activate_user/(:any)'] = 'penggunacontroller/activate_user/$1';
$route['admin/pengguna/disable_user/(:any)'] = 'penggunacontroller/disable_user/$1';
$route['admin/pengguna/hapus/(:any)'] = 'penggunacontroller/hapus/$1';
