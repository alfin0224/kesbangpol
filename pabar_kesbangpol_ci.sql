-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 06, 2023 at 11:33 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pabar_kesbangpol_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `tgl_posting` varchar(20) NOT NULL,
  `id_status_berita` int(3) NOT NULL,
  `id_user_penulis` int(11) NOT NULL,
  `judul_gambar` varchar(255) NOT NULL,
  `insert_date_berita` varchar(20) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `last_update` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `isi_berita`, `tgl_posting`, `id_status_berita`, `id_user_penulis`, `judul_gambar`, `insert_date_berita`, `author_insert`, `last_update`, `author_update`) VALUES
(1, 'Badan Kesbangpol Papua Barat   Gelar Sosialisasi Lintas Umat Bergama', '<!-- wp:paragraph -->\r\n<p><strong>Sorong, InfoPublik</strong>&nbsp;– Badan Kesbangpol Papua Barat &nbsp;melalui Badan Kesatuan Bangsa dan Politik Kabupaten Sorong menggelar sosialisasi lintas umat beragama bagi pemuda dan pelajar, yang ada di wilayah ini, Selasa (20/8/2019) di Aimas.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Gubernur Papua Barat &nbsp;diwakili Kepala Kesbangpol Adri B. Timba, SH,&nbsp; mengatakan, perbedaan agama dan kepercayaan seringkali dijadikan alat pemecah persatuan dan kerukunan umat oleh kelompok-kelompok tertentu, atau bahkan untuk berhadapan dengan kebijakan pemerintah.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Hal ini dimungkinkan karena kelompok-kelompok tersebut sering juga dengan makna dan hakikat dari Binneka Tunggal Ika yang melekat pada lambang negara kita.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Dijelaskan, perbedaan agama dan kepercayaan seringkali dijadikan pemicu konflik horizontal maupun vertikal oleh kelompok-kelompok yang tidak bertanggung jawab.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>\"Kondisi ini sudah barang tentu mengusik kerukunan hidup antar umat beragama yang telah dibangun sejak lama,” ungkap Adri mengutip sambutan &nbsp;Gubernur Papua Barat.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Untuk itu, terus menjamin berlangsungnya proses pembangunan guna mewujudkan masyarakat Papua Barat yang sejahtera lahir dan batin.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Suasana kondusif bagi berlangsungnya proses pembangunan mutlak diperlukan kondisi ini terwujud, jika kerukunan antar umat beragama tetap terjaga.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Oleh karena itu, &nbsp;para pemuda generasi zaman kini memiliki tanggung jawab yang besar memikul beban yang wajib dipertahankan, &nbsp;yakni menjadi penopang bagi pemerintah guna menjaga kerukunan umat beragama di daerah masing-masing.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Bersatu padu bersama tokoh agama dan pemuda agama guna meningkatkan serta mewujudkan peningkatan dan kesadaran umat beragama dalam mempererat persaudaraan sesama penganut umat beragama</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>Dalam kegiatan di lintas antar umat beragama bagi pemuda dan pelajar ini diharapkan peserta mampu mengikuti dengan baik agar dapat diterapkan di tengah masyarakat,&nbsp; guna terciptanya kesamaan visi dan paradigma antara pemerintah.</p>\r\n<!-- /wp:paragraph -->\r\n\r\n<!-- wp:paragraph -->\r\n<p>“Mari kita membangun dengan hati mempersatukan dengan kasih menuju Papua Barat yang adil, sejahtera dan bermartabat,” ajak Gubernur Papua Barat</p><p>Sumber :&nbsp;https://infopublik.id/kategori/nusantara/367697/badan-kesbangpol-papua-barat-gelar-sosialisasi-lintas-umat-bergama?video=</p>\r\n<!-- /wp:paragraph -->										', '', 1, 3, 'sosialiasi_antar_umat_agama.jpg', '2019-08-21 12:14:51', '', '', ''),
(2, 'DPR Papua Barat Awasi Transparansi Penggunaan Dana Covid-19 Rp197,8 Miliar Yhoga', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Dikutip dari papuabaratnews.co – Dewan Perwakilan Rakyat (DPR) Provinsi Papua Barat akhirnya membentuk panitia khusus (Pansus) pengawasan dana penanganan virus corona atau Covid-19 di daerah tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Wakil Ketua DPR Papua Barat Yhoga Saleh Siknun mengatakan, pemerintah provinsi telah mengalokasikan anggaran cukup besar untuk penanganan Covid-19 serta dampaknya. Anggaran tersebut mencapai Rp197,8 miliar yang bersumber APBD Papua Barat tahun anggaran 2020. Dengan demikian, pihaknya menginginkan alokasi anggaran itu benar-benar tepat sasaran dan terserap secara maksimal.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">“Anggaran ini berasal dari rasionalisasi, pemotongan 50 persen dana belanja modal dari setiap OPD termasuk sekretariat DPR Papua Barat,” ucap Saleh saat dikonfirmasi Papua Barat News, Selasa (23/6/2020).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Ia menerangkan, pembentukan pansus merupakan keinginan sebagian besar anggota DPR Papua Barat. Pansu juga akan memantau pendistribusian Jaminan Pengaman Sosial (JPS) mulai dari administrasi rasionalisasi PAD APBD 2020 serta realisasi anggaran pada penanganan Covid-19.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Menurut dia, seluruh komisi di DPR akan terlibat dalam pansus. Dengan pengawasan yang optimal dari dewan, maka sangat diharapkan penanganan Covid-19 serta pendistribusian bantuan dilakukan pemerintah daerah dengan merata.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">‘’Pembagian bahan makanan, jangan sampai ada yang terlewatkan. Masyarakat yang selayaknya membutuhkan bantuan harus dapat, intinya harus merata dan tepat sasaran,’’ ujarnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Dalam penyaluran bantuan bahan makanan, kata Saleh, Pemprov Papua Barat mengalokasikan anggaran sebesar Rp48 miliar. Bantuan disalurkan ke kabupaten/kota yang diserahkan langsung oleh gubernur dengan melibatkan organisasi keagamaan.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">‘’Pemerintah provinsi menyerahkan ke pemerintah kabupaten/kota yang selanjutnya disampaikan ke masyarakat. Perlu dipahami masyarakat bahwa yang menentukan penerima bantuan bukan provinsi dan apa yang dilakukan gubernur sudah benar,’’ tuturnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">Akan tetapi, politikus PDI Perjuangan ini belum bisa memastikan apakah bantuan bahan makanan sudah tepat sasaran atau belum. Hal ini akan ditelusuri Pansus Covid-19. Dan, hingga kini DPR Papua Barat juga belum menerima laporan terkait realokasi anggaran atau pemotongan belanja modal yang mencapai 50 persen. Laporan itu belum diterima dari Tim Anggaran Pemerintah Daerah (TPAD) Provinsi Papua Barat. Dalam waktu dekat, DPR Provinsi Papua Barat berencana akan memanggil TAPD untuk meminta penjelasan realokasi anggaran di setiap OPD.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">‘’Memang kami sudah mendapat informasi bahwa TAPD sudah melakukan rasionalisasi dan sudah dilaporkan ke pemerintah pusat, tetapi DPR Papua Barat belum mendapatkan laporan secara tertulis,’’ tega dia. (PB22)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px;\">sumber: http://papuabaratnews.co/papua-barat/dpr-papua-barat-bentuk-pansus-dana-covid-19/</p>																																								', '', 1, 1, 'covid-berita-22.jpg', '2021-03-04 12:23:58', '', '2021-03-19 09:46:38', 'yhoganteng'),
(3, 'Penerapan “New Normal” Harus Berdasarkan Regulasi', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Dikutip dari TEROPONGNEWS.COM, MANOKWARI – Kebijakan pemerintah untuk menerapkan tatanan hidup baru atau “New Normal” di Provinsi Papua Barat mendapat apresiasi dari berbagai kalangan.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Namun, penerapan tatanan hidup baru itu perlu didasarkan pada regulasi yang mengatur tentang kegiatan masyarakat supaya dapat bermanfaat, terutama pencegahan penyebaran corona virus disease 2019 (COVID-19).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Tokoh Pemuda Papua Barat, Marinus Bonepay melalui telpon celulernya kepada media ini, Rabu (17/6) mengatakan, ketika dilaksanakan “New Normal” maka semua akses akan dibuka maka kemungkinan pasti terjadi.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">“Terutama transportasi baik udara, darat maupun laut diatur dalan regulasi atau aturan tetap untuk mengatur, bukan sekedar himbauan supaya mengikat semua pihak dengan mengedepankan anjuran pemerintah mencegah COVID-19,” ucap Marinus Bonepay.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Lanjut Bonepay, yang harus diproteksi secara maksimal adalah transportasi dari luar tanah papua karena angka pasien positif masih tinggi, ini juga akan berpengaruh pada penyebaran COVID-19.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Politisi muda ini minta supaya New Normal hanya dibuka untuk 12 Kabupaten dan 1 Kota di Provinsi Papua Barat, mengingat penanganan pasien positif COVID-19 sudah membaik dan mencegah penyebaran.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">“Kalau dari saya, lebih baik buka akses New Normal untuk lokal papua barat supaya akses semua sektor jalan dalam rangka menunjang pemerintah daerah untuk menjalankan roda pemerintahan kembali normal, pelayanan kepada masyarakat berjalan baik,” pungkasnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Tetapi semua tergantung kepada pemerintah daerah sebagai eksekutor dengan mengedepankan regulasi sebagai dasar.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">sumber: http://teropongnews.com/berita/penerapan-new-normal-harus-berdasarkan-regulasi/</p>																																																																																																																								', '', 1, 1, 'covid-berita-20.jpg', '2021-03-09 10:31:29', '', '2021-03-15 14:52:24', 'testoperator'),
(4, 'DPR Papua Barat Bentuk Pansus Dana Covid-19', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Dikutip dari papuabaratnews.co – Dewan Perwakilan Rakyat (DPR) Provinsi Papua Barat akhirnya membentuk panitia khusus (Pansus) pengawasan dana penanganan virus corona atau Covid-19 di daerah tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Wakil Ketua DPR Papua Barat Yhoga Saleh Siknun mengatakan, pemerintah provinsi telah mengalokasikan anggaran cukup besar untuk penanganan Covid-19 serta dampaknya. Anggaran tersebut mencapai Rp197,8 miliar yang bersumber APBD Papua Barat tahun anggaran 2020. Dengan demikian, pihaknya menginginkan alokasi anggaran itu benar-benar tepat sasaran dan terserap secara maksimal.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">“Anggaran ini berasal dari rasionalisasi, pemotongan 50 persen dana belanja modal dari setiap OPD termasuk sekretariat DPR Papua Barat,” ucap Saleh saat dikonfirmasi Papua Barat News, Selasa (23/6/2020).</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Ia menerangkan, pembentukan pansus merupakan keinginan sebagian besar anggota DPR Papua Barat. Pansu juga akan memantau pendistribusian Jaminan Pengaman Sosial (JPS) mulai dari administrasi rasionalisasi PAD APBD 2020 serta realisasi anggaran pada penanganan Covid-19.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Menurut dia, seluruh komisi di DPR akan terlibat dalam pansus. Dengan pengawasan yang optimal dari dewan, maka sangat diharapkan penanganan Covid-19 serta pendistribusian bantuan dilakukan pemerintah daerah dengan merata.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">‘’Pembagian bahan makanan, jangan sampai ada yang terlewatkan. Masyarakat yang selayaknya membutuhkan bantuan harus dapat, intinya harus merata dan tepat sasaran,’’ ujarnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Dalam penyaluran bantuan bahan makanan, kata Saleh, Pemprov Papua Barat mengalokasikan anggaran sebesar Rp48 miliar. Bantuan disalurkan ke kabupaten/kota yang diserahkan langsung oleh gubernur dengan melibatkan organisasi keagamaan.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">‘’Pemerintah provinsi menyerahkan ke pemerintah kabupaten/kota yang selanjutnya disampaikan ke masyarakat. Perlu dipahami masyarakat bahwa yang menentukan penerima bantuan bukan provinsi dan apa yang dilakukan gubernur sudah benar,’’ tuturnya.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Akan tetapi, politikus PDI Perjuangan ini belum bisa memastikan apakah bantuan bahan makanan sudah tepat sasaran atau belum. Hal ini akan ditelusuri Pansus Covid-19. Dan, hingga kini DPR Papua Barat juga belum menerima laporan terkait realokasi anggaran atau pemotongan belanja modal yang mencapai 50 persen. Laporan itu belum diterima dari Tim Anggaran Pemerintah Daerah (TPAD) Provinsi Papua Barat. Dalam waktu dekat, DPR Provinsi Papua Barat berencana akan memanggil TAPD untuk meminta penjelasan realokasi anggaran di setiap OPD.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">‘’Memang kami sudah mendapat informasi bahwa TAPD sudah melakukan rasionalisasi dan sudah dilaporkan ke pemerintah pusat, tetapi DPR Papua Barat belum mendapatkan laporan secara tertulis,’’ tega dia. (PB22)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">sumber: http://papuabaratnews.co/papua-barat/dpr-papua-barat-bentuk-pansus-dana-covid-19/</p>																				', '', 2, 1, 'covid-berita-14.jpg', '2021-03-09 10:35:38', '', '2021-03-15 22:53:58', 'testoperator'),
(5, 'Kaum Muda Fakfak Beri Dukungan Moril dan Spirit Untuk dr. Subhan Rumoning, Fokus Tangani Covid -19', '<p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Dikutip dari PAPUADALAMBERITA.COM. FAKFAK – Masih seputar klinik Satria Medika tempat praktek dr. Subhan Rumoning, Sp.PD, yang beberapa hari lalu sempat diberitakan terjadi pungutan biaya rapid test di klinik swasta tersebut.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Pemberitaan yang menyudutkan dokter sepecialis penyakit dalam itu, membuat dirinya sempat mengajukan pengunduran diri sebagai ketua tim Kesehatan Covid -19 Kabupaten Fakfak.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Terkait pemberitaan yang memojokkan dirinya, membuat puluhan kaum muda Fakfak, Rabu (17/6/2020) sekitar jam 11.00 WIT mendatangi RSUD Fakfak untuk meminta penjelasan resmi dari Direktur RSUD Fakfak itu.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Selain meminta penjelasan resmi dari dokter specialis penyakit dalam satu satunya di RSUD Fakfak, kaum muda Fakfak ini juga meminta Subhan Rumoning agar tetap fokus berada di tim gugus tugas percepatan penanganan Covid -19 Kabupaten Fakfak dengan alasan masyarakat Fakfak masih membutuhkannya untuk menangani corona virus di Kabupaten Fakfak ini.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Dalam pertemuan yang berlangsung di ruang kerja Direktur RSUD Fakfak, para pemuda ini juga memberikan dukungan moril dan spirit bagi dokter muda specialis penyakit dalam ini agar tetap berada di dalam tim Gugus Tugas Covid -19 untuk menangani penyebaran Covid -19 di Kabupaten Fakfak.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Amin Jabir Suaery, S.Pd, kepada papuadalamberita.com. mengatakan, dampak pemberitaan klinik Satria Medika yang menyudutkan dr. Subhan Rumoning, Sp.PD, hingga terancam mengundurkan diri dari tim Covid -19 Kabupaten Fakfak, membuat pemuda Fakfak harus turun tangan untuk ikut menyelesaikan persoalan ini agar dokter sepecialis penyakit dalam ini tetap berada bersama masyarakat untuk “perangi” memutuskan mata rantai Covid -19 di Fakfak.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">“Pengaruh pemberitaan yang menyerang dirinya (dr. Subhan Rumoning) hingga dirinya nyaris mengudurkan diri, sangat riskan bagi penanganan Covid -19 di Fakfak karena itu selaku pemuda yang peduli tergadap Covid -19 di Fakfak harus memberikan dukungan moril dan spirit sehingga dia harus tetap berada dalam garda terdepan bersama tenaga medis lainnya untuk ikut memutus mata rantai Covid -19 di Fakfak”, tegas Amin Jabir Suaery.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Lebih lanjut menurut Amin Jabir Suaery, dari hasil kordinasi para pemuda Fakfak dengan dr. Subhan Rumoning, dimana dijelaskan bahwa, rapid test di klinik tempatnya berparktek tidak menggunakan fasilitas Pemerintah Daerah khusus fasilitas RSUD Fakfak.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Bahkan harga rapid test yang ditetapkan klinik swasta tersebut sudah sesuai dengan coast operasional klinik tempatnya praktek setelah menjalankan tugas kedinasan sebagai Direktur RSUD Fakfak, tuturnya kepada media ini.</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">Karena itu, para pemuda Fakfak kata Amin, sapaan akrabnya, berharap agar masyarakat Fakfak tidak terpengaruh dengan pemberitaan beberapa hari lalu yang telah menyerang pribadi dr. Subhan Rumoning yang selama ini menjalankan praktek di klinik swasta tersebut.(RL 07)</p><p style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; color: rgb(102, 102, 102); font-family: Poppins, sans-serif; font-size: 14px;\">sumber: http://papuadalamberita.com/kaum-muda-fakfak-beri-dukungan-moril-dan-spirit-untuk-dr-subhan-rumoning-fokus-tangani-covid-19/</p>																				', '', 1, 1, 'covid-berita-21.jpg', '2021-03-15 10:36:48', '', '2021-03-16 12:03:25', 'yhoganteng');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_gambar` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `last_update` varchar(30) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_gambar`, `deskripsi`, `nama_file`, `insert_date`, `author_insert`, `last_update`, `author_update`) VALUES
(3, 'Pimpinan Provinsi Papua Barat', 'gub_wagub_papua_barat.jpg', '2021-07-16 15:00:20', 'melbet', '', ''),
(4, 'Memaknai Toleransi', 'Memaknai-toleransi-di-Tengah-Perbedaan.jpg', '2021-07-16 15:07:03', 'melbet', '', ''),
(5, '6 Langkah Cuci Tangan Dengan Benar', 'slide1.jpeg', '2021-07-16 15:09:04', 'melbet', '', ''),
(6, 'Tips Agar Terhindar Dari COVID 19', 'slide3.jpeg', '2021-07-16 15:14:44', 'melbet', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(5) NOT NULL,
  `jenis_instansi` varchar(150) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `status_instansi` tinyint(1) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Kepala Badan'),
(2, 'Kepala Bidang'),
(3, 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `kategori`) VALUES
(1, 'Umum'),
(2, 'Masyarakat'),
(3, 'COVID19'),
(5, 'Politik');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat_lengkap` text NOT NULL,
  `last_update` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL,
  `code_iframe` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jam_kerja` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat_lengkap`, `last_update`, `author_update`, `code_iframe`, `telepon`, `email`, `jam_kerja`) VALUES
(1, 'Jl. Andai, Arfai, Manokwari, Papua Barat', '', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13787.02426220929!2d134.03381633150042!3d-0.9230888607691775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d53f4108acd0f1b%3A0x157578c624b71041!2sKANTOR%20GUBERNUR%20PROVINSI%20PAPUA%20BARAT!5e0!3m2!1sid!2sid!4v1615255192960!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '(+021) 11223344', 'kesbangpol@email.com', '08.00 - 16.00 WIT');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `author_insert` varchar(150) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `author_update` varchar(150) NOT NULL,
  `last_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `foto`, `link`, `author_insert`, `insert_date`, `author_update`, `last_update`) VALUES
(1, 'DMS', 'DMS.png', 'https://dms.papuabaratprov.go.id', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `log_user`
--

CREATE TABLE `log_user` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `tgl_aktivitas` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `jenis_aktivitas` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  `perangkat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_user`
--

INSERT INTO `log_user` (`id`, `username`, `tgl_aktivitas`, `jenis_aktivitas`, `keterangan`, `perangkat`) VALUES
(1, 'yhoganteng', '2021-03-16 04:57:38', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(2, 'yhoganteng', '2021-03-16 04:58:44', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(3, 'yhoganteng', '2021-03-16 04:58:58', 'ubah data', 'ubah data slider dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(4, 'yhoganteng', '2021-03-16 04:59:07', 'hapus data', 'hapus data slider dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(5, 'yhoganteng', '2021-03-16 04:59:57', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(6, 'yhoganteng', '2021-03-16 05:00:15', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(7, 'yhoganteng', '2021-03-16 05:00:44', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(8, 'yhoganteng', '2021-03-16 05:00:56', 'ubah data', 'ubah data struktur organisasi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(9, 'yhoganteng', '2021-03-16 05:01:05', 'hapus data', 'hapus data struktur organisasi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(10, 'yhoganteng', '2021-03-16 05:01:16', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(11, 'yhoganteng', '2021-03-16 05:01:30', 'tambah data', 'tambah data unit kerja oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(12, 'yhoganteng', '2021-03-16 05:01:41', 'ubah data', 'ubah data unit kerja dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(13, 'yhoganteng', '2021-03-16 05:01:48', 'hapus data', 'hapus data unit kerja dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(14, 'yhoganteng', '2021-03-16 05:02:18', 'tambah data', 'tambah data program kegiatan oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(15, 'yhoganteng', '2021-03-16 05:02:45', 'ubah data', 'ubah data program kegiatan dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(16, 'yhoganteng', '2021-03-16 05:02:56', 'hapus data', 'hapus data program kegiatan dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(17, 'yhoganteng', '2021-03-16 05:03:25', 'ubah data', 'ubah data berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(18, 'yhoganteng', '2021-03-16 05:03:35', 'hapus data', 'ubah data status konsep berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(19, 'yhoganteng', '2021-03-16 05:04:03', 'ubah data', 'ubah data status terbit berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(20, 'yhoganteng', '2021-03-16 05:05:44', 'ubah status', 'ubah data status tong sampah berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(21, 'yhoganteng', '2021-03-16 05:06:34', 'ubah status', 'ubah data status terbit berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(22, 'yhoganteng', '2021-03-16 05:06:43', 'ubah status', 'ubah data status terbit berita dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(23, 'yhoganteng', '2021-03-16 05:10:13', 'ubah status', 'ubah data status konsep berita dg id 8 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(24, 'yhoganteng', '2021-03-16 07:45:08', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(25, 'yhoganteng', '2021-03-16 07:51:59', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.190, Windows 10, ::1'),
(26, 'yhoganteng', '2021-03-17 03:50:26', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(27, 'yhoganteng', '2021-03-17 03:51:54', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(28, 'yhoganteng', '2021-03-17 03:57:14', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(29, 'yhoganteng', '2021-03-17 07:34:24', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(30, 'yhoganteng', '2021-03-17 07:45:52', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(31, 'yhoganteng', '2021-03-17 07:46:36', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(32, 'yhoganteng', '2021-03-18 02:41:10', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(33, 'yhoganteng', '2021-03-18 03:02:54', 'ubah data', 'ubah data slider dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(34, 'yhoganteng', '2021-03-18 03:08:12', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(35, 'yhoganteng', '2021-03-18 03:10:48', 'ubah data', 'ubah data slider dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(36, 'yhoganteng', '2021-03-18 03:21:46', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(37, 'yhoganteng', '2021-03-18 03:28:42', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(38, 'yhoganteng', '2021-03-18 03:30:59', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(39, 'yhoganteng', '2021-03-18 03:38:01', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(40, 'yhoganteng', '2021-03-18 03:38:38', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(41, 'yhoganteng', '2021-03-18 03:42:29', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(42, 'yhoganteng', '2021-03-18 03:44:39', 'ubah data', 'ubah data struktur organisasi dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(43, 'yhoganteng', '2021-03-18 03:45:31', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(44, 'yhoganteng', '2021-03-18 03:46:01', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(45, 'yhoganteng', '2021-03-18 03:57:19', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(46, 'yhoganteng', '2021-03-18 04:09:02', 'ubah data', 'ubah data slider dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(47, 'yhoganteng', '2021-03-18 04:11:39', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(48, 'yhoganteng', '2021-03-18 04:13:52', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(49, 'yhoganteng', '2021-03-18 04:19:20', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(50, 'yhoganteng', '2021-03-18 04:21:33', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(51, 'yhoganteng', '2021-03-18 04:21:50', 'ubah data', 'ubah data struktur organisasi dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(52, 'yhoganteng', '2021-03-18 04:24:53', 'ubah data', 'ubah data struktur organisasi dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(53, 'yhoganteng', '2021-03-18 04:27:09', 'ubah data', 'ubah data struktur organisasi dg id 4 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(54, 'yhoganteng', '2021-03-18 04:33:03', 'tambah data', 'tambah data unit kerja oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(55, 'yhoganteng', '2021-03-18 04:33:39', 'tambah data', 'tambah data unit kerja oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(56, 'yhoganteng', '2021-03-18 04:45:51', 'ubah data', 'ubah data unit kerja dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(57, 'yhoganteng', '2021-03-18 04:51:40', 'tambah data', 'tambah data program kegiatan oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(58, 'yhoganteng', '2021-03-18 04:55:25', 'tambah data', 'tambah data program kegiatan oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(59, 'yhoganteng', '2021-03-18 15:19:00', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(60, 'yhoganteng', '2021-03-18 15:20:34', 'ubah data', 'ubah data regulasi dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(61, 'yhoganteng', '2021-03-18 15:23:36', 'ubah data', 'ubah data kontak dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(62, 'yhoganteng', '2021-03-18 15:37:34', 'ubah status', 'ubah data status konsep berita dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(63, 'yhoganteng', '2021-03-18 15:58:16', 'ubah data', 'ubah data berita dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(64, 'yhoganteng', '2021-03-19 02:42:36', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(65, 'yhoganteng', '2021-03-19 02:45:00', 'ubah data', 'ubah data berita dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(66, 'yhoganteng', '2021-03-19 02:46:38', 'ubah data', 'ubah data berita dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(67, 'yhoganteng', '2021-03-19 03:00:40', 'ubah status', 'ubah data status terbit berita dg id 7 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(68, 'yhoganteng', '2021-03-23 04:44:33', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(69, 'yhoganteng', '2021-03-25 03:51:36', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(70, 'yhoganteng', '2021-03-25 04:35:23', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(71, 'yhoganteng', '2021-03-25 05:16:42', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(72, 'yhoganteng', '2021-03-25 05:16:56', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(73, 'yhoganteng', '2021-03-25 05:34:37', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(74, 'yhoganteng', '2021-03-25 05:36:36', 'ubah data', 'ubah data pengguna dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(75, 'yhoganteng', '2021-03-25 05:44:22', 'ubah data', 'ubah data pengguna dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(76, 'yhoganteng', '2021-03-25 05:46:41', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(77, 'yhoganteng', '2021-03-25 05:48:30', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(78, 'yhoganteng', '2021-03-25 05:50:31', 'ubah data', 'ubah data profil dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(79, 'yhoganteng', '2021-03-25 07:46:07', 'ubah status', 'ubah status aktif pengguna dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(80, 'yhoganteng', '2021-03-25 07:51:18', 'ubah data', 'ubah data pengguna dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(81, 'yhoganteng', '2021-03-25 07:52:56', 'tambah data', 'tambah data user oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(82, 'yhoganteng', '2021-03-25 07:53:02', 'ubah status', 'ubah status aktif pengguna dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(83, 'yhoganteng', '2021-03-26 02:52:05', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(84, 'yhoganteng', '2021-03-26 02:53:08', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(85, 'yhoganteng', '2021-03-26 03:20:10', 'ubah data', 'ubah data pengguna dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-89.0.4389.90, Windows 10, ::1'),
(86, 'melbet', '2021-07-14 14:24:25', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-91.0.4472.124, Windows 10, ::1'),
(87, 'melbet', '2021-07-14 14:24:51', 'ubah data', 'ubah data profil dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-91.0.4472.124, Windows 10, ::1'),
(88, 'melbet', '2021-07-14 14:25:04', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-91.0.4472.124, Windows 10, ::1'),
(89, 'melbet', '2021-07-16 05:46:05', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(90, 'melbet', '2021-07-16 05:50:22', 'ubah data', 'ubah data pengguna dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(91, 'melbet', '2021-07-16 06:00:20', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(92, 'melbet', '2021-07-16 06:06:08', 'hapus data', 'hapus data slider dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(93, 'melbet', '2021-07-16 06:06:11', 'hapus data', 'hapus data slider dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(94, 'melbet', '2021-07-16 06:07:03', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(95, 'melbet', '2021-07-16 06:09:04', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(96, 'melbet', '2021-07-16 06:14:44', 'tambah data', 'tambah data slider oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(97, 'melbet', '2021-07-16 12:34:42', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(98, 'melbet', '2021-07-16 12:36:11', 'ubah data', 'ubah data struktur organisasi dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(99, 'melbet', '2021-07-16 12:36:45', 'ubah data', 'ubah data struktur organisasi dg id 4 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(100, 'melbet', '2021-07-16 12:38:00', 'ubah data', 'ubah data struktur organisasi dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(101, 'melbet', '2021-07-16 12:38:46', 'ubah data', 'ubah data struktur organisasi dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(102, 'melbet', '2021-07-16 12:44:36', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(103, 'melbet', '2021-07-16 12:45:24', 'tambah data', 'tambah data struktur organisasi dg id oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(104, 'melbet', '2021-07-16 12:53:20', 'ubah data', 'ubah data unit kerja dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(105, 'melbet', '2021-07-16 12:53:33', 'ubah data', 'ubah data unit kerja dg id 2 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(106, 'melbet', '2021-07-16 12:54:09', 'tambah data', 'tambah data unit kerja oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(107, 'melbet', '2021-07-16 12:54:57', 'ubah data', 'ubah data struktur organisasi dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(108, 'melbet', '2021-07-16 12:55:08', 'ubah data', 'ubah data struktur organisasi dg id 6 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(109, 'melbet', '2021-07-16 12:55:19', 'tambah data', 'tambah data unit kerja oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(110, 'melbet', '2021-07-16 12:55:54', 'ubah data', 'ubah data struktur organisasi dg id 5 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(111, 'melbet', '2021-07-18 02:53:13', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(112, 'melbet', '2021-07-18 03:14:51', 'tambah data', 'tambah data berita oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(113, 'melbet', '2021-07-18 04:26:32', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(114, 'melbet', '2021-07-18 04:31:33', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(115, 'melbet', '2021-07-18 04:31:47', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(116, 'melbet', '2021-07-18 04:33:38', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(117, 'melbet', '2021-07-18 04:34:08', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(118, 'melbet', '2021-07-18 04:35:30', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(119, 'melbet', '2021-07-18 04:37:26', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(120, 'melbet', '2021-07-18 04:38:11', 'ubah data', 'ubah data sejarah oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(121, 'melbet', '2021-07-18 04:45:28', 'ubah data', 'ubah data tugas dan fungsi dg id 1 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(122, 'melbet', '2021-07-18 04:48:13', 'ubah data', 'ubah data visi-misi oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-88.0.4324.192, Mac OS X, ::1'),
(123, 'testoperator', '2021-11-14 12:26:00', 'login', 'login nama asli test operator dan kode role 2', 'Chrome-92.0.4515.159, Mac OS X, ::1'),
(124, 'yhoganteng', '2021-11-14 12:26:30', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-92.0.4515.159, Mac OS X, ::1'),
(125, 'yhoganteng', '2021-11-14 12:51:26', 'ubah data', 'ubah data pengguna dg id 3 oleh user dengan nama asli Admin Aplikasi dan kode role 1', 'Chrome-92.0.4515.159, Mac OS X, ::1'),
(126, 'melbet', '2021-11-14 12:51:34', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-92.0.4515.159, Mac OS X, ::1'),
(127, 'melbet', '2023-01-02 12:09:53', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-92.0.4515.159, Mac OS X, ::1'),
(128, 'melbet', '2023-01-09 07:25:15', 'login', 'login nama asli Admin Aplikasi dan kode role 1', 'Chrome-92.0.4515.159, Mac OS X, ::1');

-- --------------------------------------------------------

--
-- Table structure for table `merge_berita_kategori`
--

CREATE TABLE `merge_berita_kategori` (
  `id_merge` int(11) NOT NULL,
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merge_berita_kategori`
--

INSERT INTO `merge_berita_kategori` (`id_merge`, `id_berita`, `id_kategori`) VALUES
(29, 3, 2),
(30, 3, 3),
(33, 4, 3),
(34, 4, 5),
(35, 5, 2),
(36, 5, 3),
(41, 2, 2),
(42, 2, 3),
(43, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan_masuk`
--

CREATE TABLE `pesan_masuk` (
  `id_pesan_masuk` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telepon` varchar(15) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `program_kegiatan`
--

CREATE TABLE `program_kegiatan` (
  `id_progkeg` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun` varchar(4) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `author_insert` varchar(150) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `author_update` varchar(150) NOT NULL,
  `last_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_kegiatan`
--

INSERT INTO `program_kegiatan` (`id_progkeg`, `deskripsi`, `tahun`, `nama_file`, `author_insert`, `insert_date`, `author_update`, `last_update`) VALUES
(1, '<p>Berisi deskripsi singkat program kegiatan yang dilakukan pada tahun tersebut. Lampirkan juga <i>file </i>program tahun tersebut.</p><p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Cras iaculis elit at accumsan dictum. Mauris vel laoreet massa, eget blandit lorem. Curabitur tristique dolor ac hendrerit congue. Ut viverra nisl quis bibendum gravida. Etiam tincidunt, tellus a interdum feugiat, enim nisi lobortis justo, et volutpat nibh eros eu velit. Nullam lacinia semper massa, et faucibus massa tempor quis. Ut suscipit odio ut lacus laoreet bibendum. Morbi nisl ante, luctus ac auctor ac, blandit sit amet felis.</span><br></p><p><br></p>', '2020', 'Contoh_Program_Kegiatan.docx', 'yhoganteng', '2021-03-18 11:51:40', '', ''),
(2, '<p style=\"\">Berisi deskripsi singkat program kegiatan yang dilakukan pada tahun tersebut. Lampirkan juga&nbsp;<i>file&nbsp;</i>program tahun tersebut.</p><p style=\"\"><span style=\"text-align: justify;\">Cras iaculis elit at accumsan dictum. Mauris vel laoreet massa, eget blandit lorem. Curabitur tristique dolor ac hendrerit congue. Ut viverra nisl quis bibendum gravida. Etiam tincidunt, tellus a interdum feugiat, enim nisi lobortis justo, et volutpat nibh eros eu velit. Nullam lacinia semper massa, et faucibus massa tempor quis. Ut suscipit odio ut lacus laoreet bibendum. Morbi nisl ante, luctus ac auctor ac, blandit sit amet felis.</span></p>										', '2021', 'Contoh_Program_Kegiatan1.docx', 'yhoganteng', '2021-03-18 11:55:25', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `regulasi`
--

CREATE TABLE `regulasi` (
  `id_regulasi` int(11) NOT NULL,
  `judul_regulasi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `file_regulasi` varchar(255) DEFAULT NULL,
  `author_insert` varchar(150) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `author_update` varchar(150) NOT NULL,
  `last_update` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regulasi`
--

INSERT INTO `regulasi` (`id_regulasi`, `judul_regulasi`, `deskripsi`, `file_regulasi`, `author_insert`, `insert_date`, `author_update`, `last_update`) VALUES
(2, 'Judul Regulasi', '																				Berikut berisi deskripsi singkat mengenai regulasi yang diterbitkan', 'Contoh_Regulasi.docx', 'yhoganteng', '2021-03-01 14:45:39', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Admin Aplikasi'),
(2, 'Operator OPD');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` int(11) NOT NULL,
  `sejarah` text NOT NULL,
  `last_update` varchar(30) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `sejarah`, `last_update`, `author_update`) VALUES
(1, '<h2 style=\"text-align: justify; \"><p style=\"margin: 0.75em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16.0016px; line-height: inherit; font-family: Ubuntu, Arial, Tahoma; vertical-align: baseline;\"><font color=\"#636363\">Sebagaimana kita maklumi bersama bahwa tantangan utama yang akan dihadapi oleh Bangsa dan negara Indonesia kedepan yaitu bagaimana mempertahankan persatuan dan kesatuan serta mewujudkan sistem politik yang demokratis. Tantangan ini sekaligus juga akan menjadi dasar penentuan arah pembangunan politik dalam negeri kita ke depan yang pada dasarnya berdimensi dua, yaitu dimensi penguatan persatuan dan kesatuan serta pembangunan sistem politik demokrasi.</font></p><p style=\"margin: 0.75em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16.0016px; line-height: inherit; font-family: Ubuntu, Arial, Tahoma; vertical-align: baseline;\"><font color=\"#636363\">Dengan mempertimbangkan bobot dan tanggung jawab pemerintah di bidang pembinaan kesatuan bangsa dan pembangunan politik dalam negeri di masa yang akan datang, maka Badan Kesatuan Bangsa, Politik dan Perlindungan Masyarakat Provinsi Papua Barat telah mengalami perubahan dan perkembangannya menjadi Kantor Kesatuan Bangsa dan Politik. Nomenklatur Kantor tersebut telah ditetapkan berdasarkan Peraturan Daerah Nomor 10 Tahun 2009. Sesuai dengan kebijakan Pemerintah Daerah dalam rangka lebih mengoptimalkan perangkat di daerah yang mana Peraturan Daerah tersebut telah diubah dengan Peraturan Daerah Nomor 14 Tahun 2016 tentang Perubahan Atas Peraturan Daerah Provinsi Papua Barat.</font></p><p style=\"margin: 0.75em 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 16.0016px; line-height: inherit; font-family: Ubuntu, Arial, Tahoma; vertical-align: baseline;\"><font color=\"#636363\">Hal ini mengingat bahwa tugas, fungsi dan tanggung jawab pembinaan kesatuan bangsa tanggung jawab pemerintah daerah dan seluruh lapisan masyarakat, sebagai komponen terdepan penyelenggara dan pelayanan publik.</font></p></h2>																																								', '2021-07-18 13:38:11', 'melbet');

-- --------------------------------------------------------

--
-- Table structure for table `status_berita`
--

CREATE TABLE `status_berita` (
  `id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status_berita`
--

INSERT INTO `status_berita` (`id_status`, `status`) VALUES
(1, 'Terbitkan'),
(2, 'Konsep'),
(3, 'Tong Sampah');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur` int(11) NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `ket_jabatan` varchar(255) DEFAULT NULL,
  `author_insert` varchar(255) NOT NULL,
  `insert_date` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL,
  `last_update` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur`, `nama_pejabat`, `id_jabatan`, `nip`, `foto`, `ket_jabatan`, `author_insert`, `insert_date`, `author_update`, `last_update`) VALUES
(2, 'Dr. Baesara Wael, S.Sos, MH', 1, 'xxxxxxxx xxxxxx x xxx', NULL, '', '', '', 'melbet', '2021-07-16 21:36:11'),
(3, 'Yunus Woraith, SH', 2, 'xxxxxxxx xxxxxx x xxx', '', 'Bina Ideologi Dan Wawasan Kebangsaan', '', '', 'melbet', '2021-07-16 21:54:57'),
(4, 'Saman B. Tangdikanna, S.Sos', 3, 'xxxxxxxx xxxxxx x xxx', NULL, '', '', '', 'melbet', '2021-07-16 21:36:45'),
(5, 'Nunuk Setiyowati, SE', 2, 'xxxxxxxx xxxxxx x xxx', '', 'Kewaspadaan Nasional', '', '', 'melbet', '2021-07-16 21:55:54'),
(6, 'Christine M.B. Werbete, S.STP', 2, 'xxxxxxxxxxxxxxxxxxxx', '', 'Fasilitas Pembinaan Politik', 'melbet', '2021-07-16 21:44:36', 'melbet', '2021-07-16 21:55:08'),
(7, 'Yusuf Homer, SH', 2, 'xxxxxxxxxxxxxxxxxxxx', NULL, 'Ketahanan Sosial Ekonomi', 'melbet', '2021-07-16 21:45:24', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_fungsi`
--

CREATE TABLE `tugas_fungsi` (
  `id_tugas_fungsi` int(11) NOT NULL,
  `tugas` text NOT NULL,
  `fungsi` text NOT NULL,
  `insert_date` varchar(20) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `last_update` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tugas_fungsi`
--

INSERT INTO `tugas_fungsi` (`id_tugas_fungsi`, `tugas`, `fungsi`, `insert_date`, `author_insert`, `last_update`, `author_update`) VALUES
(1, '<h2><span style=\"color: rgb(68, 68, 68); font-family: \" open=\"\" sans\",=\"\" arial,=\"\" verdana;\"=\"\"></span></h2><h2 style=\"font-family: \" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" justify;\"=\"\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit;\"><i><font color=\"#636363\">Tugas :</font></i></span></h2><h2 style=\"font-family: \" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" justify;\"=\"\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit;\"><font color=\"#636363\">Badan Kesatuan Bangsa dan Politik mempunyai tugas menyelenggarakan fungsi penunjang urusan pemerintahan bidang kesatuan bangsa dan politik.</font><i><font color=\"#ff0000\"><br></font></i></span></h2>																																																																																																																								', '<h2 source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-family: \" 0);\"=\"\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit; font-family: &quot;Source Sans Pro&quot;;\"><i><font color=\"#636363\">Fungsi :</font></i></span></h2><h2 source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" justify;\"=\"\" style=\"font-family: \" 0);\"=\"\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: inherit;\"><p class=\"MsoNormal\" style=\"margin: 0in 0in 7.5pt; font-size: 12pt; font-family: Calibri, sans-serif;\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\"><font color=\"#636363\"><span style=\"font-family: &quot;Source Sans Pro&quot;;\">Badan Kesatuan Bangsa dan Politik mempunyai fungsi:</span><o:p></o:p></font></span></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">1.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Penyusunan program Badan;<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Perumusan kebijakan teknis dan pembinaan urusan bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agarna, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional;<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">3.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Pelaksanaan fasilitasi dan koordinasi penyelenggaraan urusan bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agama, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional;<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Pemantauan, evaluasi, dan pelaporan pelaksanaan kebijakan bidang bina ideologi, wawasan kebangsaan, karakter bangsa, politik dalam negeri, ketahanan ekonomi, sosial, budaya, agama, organisasi kemasyarakatan, penanganan konflik, dan kewaspadaan nasional;<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">5.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Penyelenggaraan kegiatan kesekretariatan;<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">6.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\">Penyusunan laporan pelaksanaan tugas Badan; dan<o:p></o:p></span></font></p><p class=\"MsoNormal\" style=\"margin: 0in 0in 0.0001pt 0.5in; font-size: 12pt; font-family: Calibri, sans-serif; text-indent: -0.25in;\"><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\"><font color=\"#636363\">7.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: &quot;Times New Roman&quot;;\">&nbsp;&nbsp; </span></font></span><span style=\"font-size: 16pt; font-family: Arial, sans-serif;\"><font color=\"#636363\">Pelaksanaan tugas lain yang diberikan oleh Gubemur sesuai dengan tugas dan fungsi Badan.</font><font color=\"#333333\"><o:p></o:p></font></span></p></span></h2>																																																		', '', '', '2021-07-18 13:45:28', 'melbet');

-- --------------------------------------------------------

--
-- Table structure for table `unit_kerja`
--

CREATE TABLE `unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `konten` text NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `last_update` varchar(30) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unit_kerja`
--

INSERT INTO `unit_kerja` (`id_unit_kerja`, `unit_kerja`, `konten`, `insert_date`, `author_insert`, `last_update`, `author_update`) VALUES
(1, 'Bidang Ketahanan Sosial Ekonomi', '<p>Berisi deskripsi bidang, terkait.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue velit, pulvinar eu enim et, eleifend dapibus odio. Quisque euismod mauris sed dolor efficitur semper. Praesent rutrum lectus nisi, at efficitur ex auctor sit amet. Pellentesque felis nunc, tincidunt quis mollis vitae, placerat ac mauris. Vestibulum lobortis eu nulla ac consequat. Nam et metus commodo, hendrerit mauris vitae, facilisis metus. Nam pellentesque justo lacus, sed pulvinar massa ornare sed. Cras a metus eget nibh ultrices faucibus sed a lectus. Nulla vitae sapien ligula.<br></p>																				', '2021-03-18 11:33:03', 'yhoganteng', '2021-07-16 21:53:20', 'melbet'),
(2, 'Bidang Kepala Bidang Kewaspadaan Nasional', 'Aliquam odio felis, mollis vitae ex vel, egestas facilisis diam. Fusce elementum diam a lectus condimentum, ac blandit nisl interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper sapien id nisi aliquam, a laoreet sapien feugiat. In vel elit ut purus sollicitudin gravida vel et ex. Mauris lacus nisi, semper tincidunt convallis cursus, suscipit non dolor. Praesent enim libero, mollis porta facilisis non, finibus vitae arcu. Phasellus interdum dui ac suscipit accumsan. Aliquam erat volutpat. Suspendisse id lectus vulputate, porta tortor at, imperdiet nisi. Donec efficitur eros eu faucibus malesuada. Integer sapien quam, euismod vitae imperdiet ultrices, interdum ut sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus a consequat odio. Cras hendrerit pharetra ligula, ac mattis eros blandit vel. Aliquam erat volutpat.																				', '2021-03-18 11:33:39', 'yhoganteng', '2021-07-16 21:53:33', 'melbet'),
(3, 'Bidang Kepala Bidang Bina Ideologi Dan Wawasan Kebangsaan', '<p>Berisi deskripsi bidang, terkait.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum augue velit, pulvinar eu enim et, eleifend dapibus odio. Quisque euismod mauris sed dolor efficitur semper. Praesent rutrum lectus nisi, at efficitur ex auctor sit amet. Pellentesque felis nunc, tincidunt quis mollis vitae, placerat ac mauris. Vestibulum lobortis eu nulla ac consequat. Nam et metus commodo, hendrerit mauris vitae, facilisis metus. Nam pellentesque justo lacus, sed pulvinar massa ornare sed. Cras a metus eget nibh ultrices faucibus sed a lectus. Nulla vitae sapien ligula.</p>										', '2021-07-16 21:54:09', 'melbet', '', ''),
(4, 'Bidang Fasilitas Pembinaan Politik', '<span style=\"color: rgb(33, 37, 41);\">Aliquam odio felis, mollis vitae ex vel, egestas facilisis diam. Fusce elementum diam a lectus condimentum, ac blandit nisl interdum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla semper sapien id nisi aliquam, a laoreet sapien feugiat. In vel elit ut purus sollicitudin gravida vel et ex. Mauris lacus nisi, semper tincidunt convallis cursus, suscipit non dolor. Praesent enim libero, mollis porta facilisis non, finibus vitae arcu. Phasellus interdum dui ac suscipit accumsan. Aliquam erat volutpat. Suspendisse id lectus vulputate, porta tortor at, imperdiet nisi. Donec efficitur eros eu faucibus malesuada. Integer sapien quam, euismod vitae imperdiet ultrices, interdum ut sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus a consequat odio. Cras hendrerit pharetra ligula, ac mattis eros blandit vel. Aliquam erat volutpat.</span>										', '2021-07-16 21:55:19', 'melbet', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `gambar_profil` varchar(255) NOT NULL,
  `status_user` int(3) NOT NULL,
  `id_role` int(4) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `insert_date` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL,
  `last_update` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `nama`, `no_telp`, `gambar_profil`, `status_user`, `id_role`, `author_insert`, `insert_date`, `author_update`, `last_update`) VALUES
(1, 'yhoganteng', 'Ecxaud0PmRyHuabRbsjEtw--', 'yoghanteng@gmail.com', 'Admin Aplikasi', '0821372874', 'profil_default.jpg', 1, 1, '', '', 'melbet', '2021-07-16 14:50:22'),
(2, 'testoperator', 'FQ5rX5F1~tKqo656.qm8Kw--', 'testemail@gmail.com', 'test operator', '0827362728162', 'profil_default.jpg', 1, 2, 'yhoganteng', '2021-02-21 18:32:07', 'yhoganteng', '2021-03-25 14:51:18'),
(3, 'melbet', 'ksTenprrs0ZI6a.iojYShA--', 'kominfopabar@papuabaratprov.go.id', 'Admin Aplikasi', '081xxxx', 'profil_default.jpg', 1, 1, 'yhoganteng', '2021-03-25 14:52:56', 'yhoganteng', '2021-11-14 21:51:26');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(4) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `insert_date` varchar(20) NOT NULL,
  `author_insert` varchar(255) NOT NULL,
  `last_update` varchar(20) NOT NULL,
  `author_update` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `visi`, `misi`, `insert_date`, `author_insert`, `last_update`, `author_update`) VALUES
(1, '<h2 style=\"margin-right: 0in; margin-left: 0in; font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif; color: rgb(0, 0, 0); margin-top: 0in; line-height: 36px;\"><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif; color: rgb(102, 102, 102);\">Badan Kesatuan Bangsa dan Politik Provinsi Papua Barat mempunyai&nbsp;</span><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif; color: rgb(102, 102, 102);\">Visi</span><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif; color: rgb(102, 102, 102);\">&nbsp;sebagai berikut :</span><br>”MEMANTAPKAN PERSATUAN DAN KESATUAN BANGSA, STABILITAS DAERAH YANG DEMOKRATIS BERDASARKAN PANCASILA DAN UUD 1945 DALAM BINGKAI NEGARA KESATUAN REPUBLIK INDONESIA”<span style=\"font-size: 16pt; line-height: 32px; font-family: &quot;Source Sans Pro&quot;, sans-serif;\"><o:p></o:p></span></h2>																																																																																																																																																																																				', '<h2 style=\"font-family: \" source=\"\" sans=\"\" pro\",=\"\" -apple-system,=\"\" blinkmacsystemfont,=\"\" \"segoe=\"\" ui\",=\"\" roboto,=\"\" \"helvetica=\"\" neue\",=\"\" arial,=\"\" sans-serif,=\"\" \"apple=\"\" color=\"\" emoji\",=\"\" ui=\"\" symbol\";=\"\" color:=\"\" rgb(0,=\"\" 0,=\"\" 0);=\"\" text-align:=\"\" justify;\"=\"\"><p class=\"justify\" style=\"margin: 0in 0in 7.5pt; font-size: 12pt; font-family: &quot;Times New Roman&quot;, serif; line-height: 24px;\"><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\"><font color=\"#636363\">Untuk mewujudkan Visi maka Badan Kesatuan Bangsa dan Politik Provinsi Papua Barat dapat menjabarkan beberapa&nbsp;<b style=\"\">Misi</b>&nbsp;sebagi berikut :<o:p></o:p></font></span></p></h2><h2 style=\"margin-right: 0in; margin-left: 0.25in; text-indent: -0.25in; line-height: 36px; border: none; padding: 0in;\"><font color=\"#636363\"><span style=\"font-family: Arial, sans-serif; font-size: 16pt; line-height: 32px;\">1.&nbsp;</span><span style=\"font-family: Arial, sans-serif; font-size: 16pt; line-height: 32px;\">Memantapkan Keamanan, Ketertiban dan Kenyamanan Lingkungan;<o:p></o:p></span></font></h2><h2 style=\"margin-right: 0in; margin-left: 0.25in; font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif; text-indent: -0.25in; line-height: 36px; border: none; padding: 0in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\">2.&nbsp;</span><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\">Meningkatkan Pengawasan Ekonomi, Budaya, Agama dan Kemasyarakatan;<o:p></o:p></span></font></h2><h2 style=\"margin-right: 0in; margin-left: 0.25in; text-indent: -0.25in; line-height: 36px; border: none; padding: 0in;\"><font color=\"#636363\"><span style=\"font-family: Arial, sans-serif; font-size: 16pt; line-height: 32px;\">3.&nbsp;</span><span style=\"font-family: Arial, sans-serif; font-size: 16pt; line-height: 32px;\">Menyediakan data Orang Asing dan Lembaga Asing yang Akurat;<o:p></o:p></span></font></h2><h2 style=\"margin-right: 0in; margin-left: 0.25in; font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif; text-indent: -0.25in; line-height: 36px; border: none; padding: 0in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\">4.&nbsp;</span><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\">Meningkatkan Pemahaman tentang Wawasan Kebangsaan, Ideologi dan Bela Negara;</span></font></h2><h2 style=\"margin-right: 0in; margin-left: 0.25in; font-size: 18pt; font-family: &quot;Times New Roman&quot;, serif; text-indent: -0.25in; line-height: 36px; border: none; padding: 0in;\"><font color=\"#636363\"><span style=\"font-size: 16pt; line-height: 32px; font-family: Arial, sans-serif;\">5.&nbsp;</span>Mewujudkan Sistem Politik, Kehidupan Bermasyarakat, Berbangsa dan BerNegara yang Demokratis.</font></h2>																																								', '', '', '2021-07-18 13:48:13', 'melbet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_status_berita` (`id_status_berita`),
  ADD KEY `id_user_penulis` (`id_user_penulis`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merge_berita_kategori`
--
ALTER TABLE `merge_berita_kategori`
  ADD PRIMARY KEY (`id_merge`),
  ADD KEY `id_berita` (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  ADD PRIMARY KEY (`id_pesan_masuk`);

--
-- Indexes for table `program_kegiatan`
--
ALTER TABLE `program_kegiatan`
  ADD PRIMARY KEY (`id_progkeg`);

--
-- Indexes for table `regulasi`
--
ALTER TABLE `regulasi`
  ADD PRIMARY KEY (`id_regulasi`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `status_berita`
--
ALTER TABLE `status_berita`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tugas_fungsi`
--
ALTER TABLE `tugas_fungsi`
  ADD PRIMARY KEY (`id_tugas_fungsi`);

--
-- Indexes for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `merge_berita_kategori`
--
ALTER TABLE `merge_berita_kategori`
  MODIFY `id_merge` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pesan_masuk`
--
ALTER TABLE `pesan_masuk`
  MODIFY `id_pesan_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `program_kegiatan`
--
ALTER TABLE `program_kegiatan`
  MODIFY `id_progkeg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regulasi`
--
ALTER TABLE `regulasi`
  MODIFY `id_regulasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `status_berita`
--
ALTER TABLE `status_berita`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_struktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tugas_fungsi`
--
ALTER TABLE `tugas_fungsi`
  MODIFY `id_tugas_fungsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unit_kerja`
--
ALTER TABLE `unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `fk_id_status_berita` FOREIGN KEY (`id_status_berita`) REFERENCES `status_berita` (`id_status`),
  ADD CONSTRAINT `fk_id_user_penulis` FOREIGN KEY (`id_user_penulis`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `merge_berita_kategori`
--
ALTER TABLE `merge_berita_kategori`
  ADD CONSTRAINT `fk_id_berita` FOREIGN KEY (`id_berita`) REFERENCES `berita` (`id_berita`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_berita` (`id_kategori`);

--
-- Constraints for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD CONSTRAINT `fk_id_jabatan_organisasi` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
