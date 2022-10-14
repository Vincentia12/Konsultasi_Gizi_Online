-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2022 at 02:03 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectgizi`
--

-- --------------------------------------------------------

--
-- Table structure for table `asessment`
--

CREATE TABLE `asessment` (
  `id_asessment` int(5) NOT NULL,
  `asessment` varchar(400) NOT NULL,
  `form_type` enum('text','number','date','select','radio','checkbox','file') NOT NULL DEFAULT 'text',
  `custom_value` text DEFAULT NULL,
  `nama_field` varchar(50) NOT NULL,
  `is_required` tinyint(1) NOT NULL DEFAULT 1,
  `is_readonly` tinyint(1) NOT NULL DEFAULT 0,
  `function_method` varchar(30) DEFAULT NULL,
  `id_asessment_kategori` int(3) NOT NULL DEFAULT 1,
  `is_aktif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asessment`
--

INSERT INTO `asessment` (`id_asessment`, `asessment`, `form_type`, `custom_value`, `nama_field`, `is_required`, `is_readonly`, `function_method`, `id_asessment_kategori`, `is_aktif`) VALUES
(1, 'Berat badan ? (Kg)', 'number', NULL, 'berat_badan', 1, 0, NULL, 1, 1),
(2, 'Tinggi badan ? (cm)', 'number', NULL, 'tinggi_badan', 1, 0, 'hitungimt', 1, 1),
(4, 'Indeks Massa Tubuh (IMT)', 'number', NULL, 'imt', 1, 1, NULL, 1, 1),
(5, 'Status Gizi', 'select', 'normal,buruk,lebih,obes', 'status_gizi', 1, 1, NULL, 1, 1),
(6, 'GDA', 'text', NULL, 'gda', 0, 0, NULL, 2, 1),
(7, 'Kreatin Serum', 'text', NULL, 'kreatin_serum', 0, 0, NULL, 2, 1),
(8, 'SGOT', 'text', NULL, 'sgot', 0, 0, NULL, 2, 1),
(9, 'SGPT', 'text', NULL, 'sgpt', 0, 0, NULL, 2, 1),
(10, 'Albumin', 'text', NULL, 'albumin', 0, 0, NULL, 2, 1),
(11, 'HB', 'text', NULL, 'hb', 0, 0, NULL, 2, 1),
(12, 'Lain-Lain', 'text', NULL, 'lain_lain', 0, 0, NULL, 2, 1),
(13, 'Tensi darah (mmHg)', 'text', NULL, 'tensi_darah', 0, 0, NULL, 3, 1),
(14, 'OEDEMA / Bengkak', 'select', 'ya,tidak', 'oedema', 1, 0, NULL, 3, 1),
(15, 'Keadaan umum', 'select', 'sehat,lemah', 'keadaan_umum', 1, 0, NULL, 3, 1),
(16, 'Mual', 'select', 'ya,tidak', 'mual', 1, 0, NULL, 3, 1),
(17, 'Muntah', 'select', 'ya,tidak', 'muntah', 1, 0, NULL, 3, 1),
(18, 'Diare', 'select', 'ya,tidak', 'diare', 1, 0, NULL, 3, 1),
(19, 'Nafsu makan', 'select', 'baik,turun', 'nafsu_makan', 1, 0, NULL, 4, 1),
(20, 'Kesulitan mengunyah', 'select', 'ya,tidak', 'kesulitan_mengunyah', 1, 0, NULL, 4, 1),
(21, 'Alergi makan', 'select', 'ya,tidak', 'alergi_makan', 1, 0, NULL, 4, 1),
(22, 'Jika Anda memiliki alergi', 'text', NULL, 'jika_alergi', 0, 0, NULL, 4, 1),
(23, 'Pola makan sehari berapa kali', 'select', '1x sehari,2x sehari,3x sehari,4x sehari,5x sehari,6x sehari,7x sehari,8x sehari,9x sehari,10x sehari', 'pola_makan_sehari', 1, 0, NULL, 4, 1),
(24, 'Pekerjaan', 'select', 'pns,swasta,wiraswasta,pedagang,petani,guru,lainnya', 'pekerjaan', 1, 0, NULL, 5, 1),
(25, 'Agama', 'select', 'islam,kristen,katolik,hindu,budha,lainnya', 'agama', 1, 0, NULL, 5, 1),
(26, 'Pendidikan', 'select', 'sd,smp,sma/smk,d1,d2,d3,d4,s1,s2,s3,lainnya', 'pendidikan', 1, 0, NULL, 5, 1),
(27, 'Merokok ?', 'select', 'ya,tidak', 'merokok', 1, 0, NULL, 5, 1),
(28, 'Riwayat sakit keluarga ?', 'text', NULL, 'riwayat_sakit_keluarga', 1, 0, NULL, 5, 1),
(29, 'Riwayat sakit dahulu ?', 'text', NULL, 'riwayat_sakit_dahulu', 1, 0, NULL, 5, 1),
(30, 'Konsumsi obat ?', 'select', 'ya,tidak', 'konsumsi_obat', 1, 0, NULL, 5, 1),
(31, 'Obat apa ?', 'text', NULL, 'obat_apa', 0, 0, NULL, 5, 1),
(32, 'Olahraga ?', 'select', 'ya,tidak', 'olahraga', 1, 0, NULL, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `asessment_kategori`
--

CREATE TABLE `asessment_kategori` (
  `id_asessment_kategori` int(3) NOT NULL,
  `asessment_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asessment_kategori`
--

INSERT INTO `asessment_kategori` (`id_asessment_kategori`, `asessment_kategori`) VALUES
(1, 'Antropometri'),
(2, 'Biokimia Data / Hasil Laborat'),
(3, 'Clinical History / Fisik Klinik'),
(4, 'Dietary History / Riwayat Makan'),
(5, 'Personal History / Riwayat Personal');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `thumbnail` varchar(300) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` mediumtext DEFAULT NULL,
  `id_kategori_berita` int(3) NOT NULL,
  `slug` text NOT NULL,
  `dilihat` int(7) NOT NULL DEFAULT 0,
  `is_publish` enum('0','1') NOT NULL DEFAULT '1',
  `tanggal` date DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `thumbnail`, `judul`, `isi`, `id_kategori_berita`, `slug`, `dilihat`, `is_publish`, `tanggal`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(7, 'gizi-seimbang.jpg', 'Gizi Seimbang Optimalkan Tumbuh Kembang Anak di Masa Pandemi Covid-19', '<p>Sudah hampir 2 tahun negara Indonesia dilanda pandemi Covid-19 yang merenggut banyak korban jiwa. Hal ini membuat semua orang panik dan berbondong-bondong mencari informasi guna menyelamatkan diri mereka dari terjangkitnya virus Covid-19. Mulai dari menerapkan protokol kesehatan yang ketat sesuai anjuran pemerintah, hingga memperbaiki pola hidup, terutama pola makan. Namun hal tersebut baiknya tak hanya dilakukan oleh orang dewasa saja, orangtua yang memiliki anak, terlebih lagi anak yang masih dalam masa tumbuh kembang pun harus tetap memperhatikan pola gizi untuk anak-anak. Hal tersebut bertujuan agar sang anak tetap mendapatkan asupan yang bergizi seimbang dan tumbuh kembang tetap optimal meskipun dalam situasi pandemi Covid-19.</p>\r\n\r\n<p>Ada banyak hal yang perlu diketahui orangtua yang memiliki anak dalam masa tumbuh kembang. Asupan zat gizi atau nutrisi merupakan salah satu hal yang perlu diperhatikan karena memiliki peranan penting dalam mengoptimalkan tumbuh kembang anak. Terutama pada balita, kebutuhan asupan zat gizi harus terpenuhi dengan baik. Jika tidak, anak dapat mengalami kekurangan gizi yang dapat menyebabkan munculnya kondisi gagal tumbuh atau biasa disebut stunting. Oleh sebab itu, penting bagi orangtua untuk mengatur pola makan anak agar mendapatkan assupan yang bergizi seimbang.</p>\r\n\r\n<p>Dengan melakukan pola makan yang benar dan mengatur asupan gizi sedemikian rupa sesuai dengan anjuran Kementerian Kesehatan RI mengenai asupan gizi yang ideal bagi anak untuk menunjang tumbuh kembang. Terlebih lagi, pada usia balita atau biasa disebut dengan golden age yang merupakan usia yang penting karena usia tersebut sang anak dalam proses pertumbuhan yang sangat pesat. Sangat disayangkan apabila pada masa pertumbuhannya, sang anak tidak mendapatkan asupan gizi yang seimbang. Dilansir dari jurnal yang ditulis oleh Muthya dkk (2021), mununjukkan bahwa perilaku yang tepat untuk memberikan pola makan pada anak agar tetap terjaga keseimbangan status gizi anak yakni dengan cara otoratif. Otoratif sendiri merupakan pola asuh di mana orangtua mendorong anak untuk mandiri namun masih menerapkan batasan pada tindakan anak.</p>\r\n\r\n<p>Efek lain dari otoratif pun memiliki kepercayaan diri dan harga diri yang tinggi. Orangtua yang otoratif pun cenderung mendorong anak untuk mengambil keputusan dan belajar dari pengalaman mereka sendiri. Selain perilaku dan dorongan dari orangtua yang otoratif, penting juga untuk memperhatikkan jadwal makan dan jenis makanan yang diberikan kepada anak. Apabila kandungan gizi makanan anak terpenuhi maka hal-hal yang berkaitan dengan tumbuh kembang anak pun akan terbantu. Berikut hal-hal mendasar yang dapat menunjang asupan gizi anak:</p>', 4, 'gizi-seimbang-optimalkan-tumbuh-kembang-anak-di-masa-pandemi-covid-19', 5, '1', '2022-01-18', '2022-01-18 01:12:55', 8, NULL, NULL),
(8, 'makanan-gizi.jpg', 'Apa Itu Makanan Sehat Bergizi.?', '<p>Makanan sehat merupakan makanan yang bebas dari bahan berbahaya dan mengandung gizi yang bermanfaat untuk tubuh kita. Bahan berbahaya yang dimaksud seperti pewarna msi, pengawet dan pemanis buatan. Sedangkan, gizi yang bermanfaat bagi tubuh seperti yang mengandung protein, karbohidrat, lemak, vitamin, air, dan mineral.</p>\r\n\r\n<p>Makanan bergizi merupakan makanan yang memenuhi kebutuhan gizi bagi tubuh kita. Tuhan menciptakan manusia dengan susunan yang sebegitu sempurna sehingga memerlukan pula zat gizi yang lengkap sebagai penyusunnya (protein, karbohidrat, lemak, vitamin, air dan mineral). Makanan bergizi itu tidak perlu dan tidak selalu mahal, tapi harus sehat dan bergizi yang juga mengandung berbagai zat yang bermanfaat bagi tubuh kita, seperti :</p>\r\n\r\n<p>Karbohidrat, yang akan dipecah oleh tubuh kita menjadi sumber energi<br />\r\nProtein, yang dibutuhkan tubuh kita sebagai zat pembangun tubuh dan memperbaiki jaringan yang rusak<br />\r\nLemak, sebagai cadangan energi dan pelarut vitamin A, D, E, K<br />\r\nVitamin dan Mineral, yang menjaga daya tahan dan kesehatan tubuh<br />\r\nAir, yang sangat baik manfaatnya apabila dikonsumsi 7-8 gelas/hari<br />\r\nSerat, yang dapat diperoleh dari sayuran dan buah-buahan yang bermanfaat menjaga kesehatan dan pencernaan tubuh kita<br />\r\nMengapa makanan sehat dan bergizi itu penting ? Karena makanan sehat bergizi dapat mencegah kita dari terserangnya penyakit seperti diare, diabetes mellitus, jantung, tifus, dan juga kolesterol. Prinsip gizi seimbang dapat kita terapkan dengan menyantap makan-makanan 4 sehat 5 sempurna.</p>', 4, 'apa-itu-makanan-sehat-bergizi', 8, '1', '2022-01-18', '2022-01-18 01:17:38', 8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_soal`
--

CREATE TABLE `data_soal` (
  `id_data_soal` int(11) NOT NULL,
  `id_soal` int(11) DEFAULT NULL,
  `no_soal` int(11) DEFAULT NULL,
  `isi_soal` varchar(500) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_a` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_b` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_c` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_d` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `jawaban_e` varchar(300) CHARACTER SET latin1 DEFAULT NULL,
  `soal_gambar` varchar(400) CHARACTER SET latin1 DEFAULT NULL,
  `nilai_a` int(11) DEFAULT NULL,
  `nilai_b` int(11) DEFAULT NULL,
  `nilai_c` int(11) DEFAULT NULL,
  `nilai_d` int(11) DEFAULT NULL,
  `nilai_e` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_soal`
--

INSERT INTO `data_soal` (`id_data_soal`, `id_soal`, `no_soal`, `isi_soal`, `jawaban_a`, `jawaban_b`, `jawaban_c`, `jawaban_d`, `jawaban_e`, `soal_gambar`, `nilai_a`, `nilai_b`, `nilai_c`, `nilai_d`, `nilai_e`) VALUES
(1, 1, 1, 'Saya sama sekali tidak dapat merasakan perasaan positif', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(2, 1, 2, 'Saya sepertinya tidak kuat lagi untuk melakukan suatu kegiatan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(3, 1, 3, 'Saya merasa tidak ada hal yang dapat diharapkan dimasa depan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(4, 1, 4, 'Saya merasa sedih dan tertekan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(5, 1, 5, 'Saya merasa saya kehilangan minat akan segala hal.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(6, 1, 6, 'Saya merasa bahwa saya tidak berharga sebagai nseorang manusia.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(7, 1, 7, 'Saya merasa bahwa hidup tidak bermanfaat.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(8, 1, 8, 'Saya tidak dapat merasakan kenikmatan dari berbagai hal yang dilakukan.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(9, 1, 9, 'Saya merasa putus asa dan sedih.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(10, 1, 10, 'Saya tidak merasa antusias dalam hal apapun.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(11, 1, 11, 'Saya merasa bahwa saya tidak berharga.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(12, 1, 12, 'Saya melihat tidak ada harapan untuk masa depan.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(13, 1, 13, 'Saya merasa bahwa hidup tidak berarti.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(14, 1, 14, '<p>Saya merasa sulit untuk meningkatkan inisiatif dalam melakukan sesuatu.</p>', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(15, 2, 1, 'Saya merasa bibir saya sering kering', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(16, 2, 2, 'Saya mengalami kesulitan bernafas(misalnya ; seringkali terengah-engah atau tidak dapat bernafas padahal tidak melakukan aktifitas fisik sebelumnya)', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(17, 2, 3, 'Saya merasa goyah(misalnya, kaki terasa mau \'mau copot\')', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(18, 2, 4, 'Saya menemukan diri saya berada dalam situasi yang membuat saya merasa cemas dan saya akan merasa sangat lega jika semua berakhir.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(19, 2, 5, 'Saya merasa lemas seperti mau pingsan.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(20, 2, 6, 'Saya berkeringat secara berlebihan (misalnya: Tangan berkeringat), padahal temperatur tidak panas atau tidak melakukan aktivitas fisik sebelumnya.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(21, 2, 7, 'Saya merasa takut tanpa alasan yang jelas.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(22, 2, 8, 'Saya mengalami kesulitan dalam menelan.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(23, 2, 9, 'Saya menyadari kegiatan jantung, walaupun saya tidak sehabis melakukan aktivitas fisik,(misalnya: merasa detak jantung meningkat atau melemah)', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(24, 2, 10, 'Saya merasa saya hampir panik', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(25, 2, 11, 'Saya takut bahwa saya akan \"terhambat\" oleh tugas-tugas sepele yang tidak biasa saya lakukan ', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(26, 2, 12, 'Saya sangat merasa ketakutan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(27, 2, 13, 'Saya merasa khawatir dengan situasi dimana saya mungkin menjadi panik dan mempermalukan diri sendiri.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(28, 2, 14, 'Saya merasa gemetar(Misalnya : pada tangan)', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(29, 4, 1, 'Saya merasa bahwa diri saya menjadi marah karena hal hal sepele.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(30, 4, 2, 'Saya cenderung bereaksi berlebihan terhadap suatu situasi', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(31, 4, 3, 'Saya sulit untuk bersantai', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(32, 4, 4, 'Saya menemukan diri saya mudah merasa kesal.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(33, 4, 5, 'Saya merasa telah menghabiskan banyak energi untuk merasa cemas', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(34, 4, 6, 'Saya menemukan diri saya menjadi tidak sabar ketika mengalami penundaan (misalnya:kemacetan lalu lintas,menunggun sesuati).', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(35, 4, 7, 'Saya merasa bahwa saya mudah tersinggung', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(36, 4, 8, 'Saya merasa sulit untuk beristirahat.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(37, 4, 9, 'Saya merasa bahwa saya sangat mudah marah', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(38, 4, 10, 'Saya merasa sulit untuk tenang setelah sesuatu membuat saya kesal.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(39, 4, 11, 'Saya sulit untuk sabar dalam menghadapi gangguan terhadap hal yang sedang saya lakukan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(40, 4, 12, 'Saya sedang merasa gelisah.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(41, 4, 13, 'Saya tidak dapat memaklumi hal apapun yang mengahalangi saya untuk menyelesaikan hal yang sedang saya lakukan', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(42, 4, 14, 'Saya menemukan diri saya mudah gelisah.', 'Tidak sesuai dengan saya sama sekali, atau tidak pernah.', 'Sesuai dengan saya sampai tingkat tertentu, atau kadang-kadang', 'Sesuai dengan saya sampai batas yang dapat dipertimbangkan, atau lumayan sering.', 'Sangat sesuai dengan saya, atau sering sekali.', NULL, NULL, 0, 1, 2, 3, NULL),
(43, 5, 1, 'Saya tidak tidur karena sesi game yang panjang', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(44, 5, 2, 'Ketika tidak bermain game, saya sering memikirkan level game berikutnya', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(45, 5, 3, 'Gaming telah menjadi kegiatan yang paling menyita waktu didalam kehidupan saya', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(46, 5, 4, 'Game membantu saya mengatasi suasana hati yang jelek', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(47, 5, 5, 'Saya tidak pernah bermain game dengan tujuan untuk membuat saya jadi merasa lebih baik', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(48, 5, 6, 'Saya bermain game untuk melupakan kejadian buruk yang saya  alami', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(49, 5, 7, 'Penggunaan waktu saya untuk bermain game telah meningkat secara signifikan satu tahun terakhir ini', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(50, 5, 8, 'Saya butuh waktu yang lebih lama untuk bermain game', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(51, 5, 9, 'Kadang saya berpikir bahwa waktu ini tidak akan cukup untuk melakukan apa pun yang ingin saya lakukan dalam game ini', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(52, 5, 10, '<p>Ketika tidak sedang bermain game, saya jadi lebih tersinggung</p>', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(53, 5, 11, 'Saya sedih kalau saya tidak bisa bermain game', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(54, 5, 12, 'Saya cenderung merasa cemas kalau saya tidak bisa bermain game, dengan alasan apapun', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(55, 5, 13, 'Saya jarang mengerjakan hobbi saya yang dulu, karena aktifitas gaming', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(56, 5, 14, 'Saya telah berbohong pada keluarga saya karena hal-hal yang berkaitan dengan game', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(57, 5, 15, 'Saya yakin, aktifivitas sehari-hari saya (misalnya sekolah, pekerjaan, membersihkan rumah dll) tidak terpengaruh oleh perilaku gaming saya.', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(58, 5, 16, 'Saya sedih kalau tidak bisa bermain game', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, NULL),
(59, 5, 17, 'Saya rasa gaming ini telah merusak hubungan saya dengan pacar.', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, NULL),
(60, 5, 18, 'Saya yakin perilaku perilaku gaming ini telah membuat kacau beberapa hal dalam hidup saya', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, NULL),
(61, 5, 19, 'Sebenarnya saya ingin mengurangi waktu bermain game, tapi hal itu sulit sekali dilakukan', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4),
(62, 5, 20, '<p>Saya rasa saya tidak bisa menghentikan perilaku gaming ini.</p>', 'Sangat Tidak Setuju', 'Tidak Setuju', 'Netral / Kadang-kadang', 'Setuju', 'Sangat Setuju', NULL, 0, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `detailkonsultasi`
--

CREATE TABLE `detailkonsultasi` (
  `id_detail` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `id_pasien` int(3) NOT NULL,
  `id_platform` varchar(20) NOT NULL,
  `berat_badan` varchar(20) NOT NULL,
  `tinggi_badan` varchar(20) NOT NULL,
  `gda` varchar(20) NOT NULL,
  `kreatin_serum` varchar(20) NOT NULL,
  `sgot` varchar(20) NOT NULL,
  `sgpt` varchar(20) NOT NULL,
  `albumin` varchar(20) NOT NULL,
  `hb` varchar(20) NOT NULL,
  `lain_lain` varchar(20) NOT NULL,
  `tensi_darah` varchar(20) NOT NULL,
  `oedema` varchar(20) NOT NULL,
  `keadaan_umum` varchar(20) NOT NULL,
  `mual` varchar(20) NOT NULL,
  `muntah` varchar(20) NOT NULL,
  `diare` varchar(20) NOT NULL,
  `nafsu_makan` varchar(20) NOT NULL,
  `kesulitan_mengunyah` varchar(20) NOT NULL,
  `alergi_makan` varchar(20) NOT NULL,
  `jika_alergi` varchar(20) NOT NULL,
  `pola_makan_sehari` varchar(20) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `merokok` varchar(20) NOT NULL,
  `riwayat_sakit_keluarga` varchar(20) NOT NULL,
  `riwayat_sakit_dahulu` varchar(20) NOT NULL,
  `konsumsi_obat` varchar(20) NOT NULL,
  `obat_apa` varchar(20) NOT NULL,
  `olahraga` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailkonsultasi`
--

INSERT INTO `detailkonsultasi` (`id_detail`, `transaction_id`, `id_pasien`, `id_platform`, `berat_badan`, `tinggi_badan`, `gda`, `kreatin_serum`, `sgot`, `sgpt`, `albumin`, `hb`, `lain_lain`, `tensi_darah`, `oedema`, `keadaan_umum`, `mual`, `muntah`, `diare`, `nafsu_makan`, `kesulitan_mengunyah`, `alergi_makan`, `jika_alergi`, `pola_makan_sehari`, `pekerjaan`, `agama`, `pendidikan`, `merokok`, `riwayat_sakit_keluarga`, `riwayat_sakit_dahulu`, `konsumsi_obat`, `obat_apa`, `olahraga`, `created_at`, `date`) VALUES
(2, 'dc08ba05-1b2f-4d82-99c7-be7bc88a3951', 3, 'Konsultasi_ZOOM', '22', '22', '22', '22', '22', '22', '22', '22', '', '22', 'ya', 'sehat', 'ya', 'ya', 'ya', 'baik', 'ya', 'ya', '22', '1x sehari', 'pns', 'islam', 'sd', 'ya', '22', '22', 'ya', '2222', 'ya', '2022-07-27 06:34:24', NULL),
(3, '1cafa030-2f88-4c8f-8357-04afa8663743', 3, '', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22', 'ya', 'sehat', 'ya', 'ya', 'ya', 'turun', 'tidak', 'ya', '22', '1x sehari', 'pns', 'islam', 'sd', 'ya', '', '22', 'ya', '2222', 'tidak', '2022-07-27 06:37:13', NULL),
(4, '1a83499b-3131-4c3d-b073-f4d75026a42f', 3, 'Konsultasi_ZOOM', '22', '22', '22', '22', '22', '22', '22', '22', '22', '22', 'ya', 'sehat', 'ya', 'ya', 'ya', 'baik', 'ya', 'ya', '22', '1x sehari', 'pns', 'islam', 'sd', 'ya', '22', '22', 'tidak', '2222', 'tidak', '2022-07-27 06:40:45', NULL),
(5, '51313e68-a973-411a-9fb7-a73cdd3a200d', 27, 'Konsultasi_ZOOM', '111', '32', '292', '124', '114', '21424', '2214', '241', '2412', '14121', 'tidak', 'sehat', 'tidak', 'tidak', 'tidak', 'baik', 'ya', 'tidak', '-', '2x sehari', 'swasta', 'kristen', 's3', 'tidak', '-', '-', 'tidak', '-', 'ya', '2022-07-27 06:45:07', NULL),
(6, '67c75e15-101e-472c-898e-dcbae22f7c64', 27, 'Konsultasi_ZOOM', '55', '160', 'B', '124', '114', '45', '876', '890', '134', '243', 'tidak', 'sehat', 'tidak', 'tidak', 'tidak', 'baik', 'tidak', 'tidak', '-', '3x sehari', 'pns', 'katolik', 's2', 'tidak', '-', '-', 'tidak', '-', 'ya', '2022-07-29 03:07:16', NULL),
(7, 'f5837b1a-4616-4c5a-9164-2371997c8d7f', 27, 'Konsultasi_ZOOM', '55', '160', 'B', '124', '114', '21424', '2214', '241', '134', '243', 'tidak', 'sehat', 'tidak', 'tidak', 'tidak', 'baik', 'ya', 'tidak', '-', '3x sehari', 'pns', 'katolik', 's3', 'tidak', '-', '-', 'tidak', '-', 'ya', '2022-07-29 03:18:04', NULL),
(8, '9e01e7d2-02dd-4b4a-8aef-ea9d0d877a4e', 34, 'Konsultasi_ZOOM', '55', '160', 'B', '124', '114', '45', '876', '241', '134', '90', 'tidak', 'sehat', 'tidak', 'tidak', 'tidak', 'baik', 'ya', 'tidak', '-', '3x sehari', 'pns', 'katolik', 's3', 'tidak', '-', '-', 'tidak', '-', 'ya', '2022-07-29 07:47:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `duitku`
--

CREATE TABLE `duitku` (
  `merchant_code` varchar(50) DEFAULT NULL,
  `project_api_key` varchar(255) DEFAULT NULL,
  `sandbox` enum('0','1') NOT NULL DEFAULT '1',
  `durasi_payment` char(4) NOT NULL DEFAULT '1440',
  `tipe_durasi` enum('days','hours','minutes') NOT NULL DEFAULT 'minutes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duitku`
--

INSERT INTO `duitku` (`merchant_code`, `project_api_key`, `sandbox`, `durasi_payment`, `tipe_durasi`) VALUES
('D7952', '2f04dec84ab1ec6ced0cdf66b08bf29b', '1', '1440', 'minutes');

-- --------------------------------------------------------

--
-- Table structure for table `file_uploader`
--

CREATE TABLE `file_uploader` (
  `id_file` int(11) NOT NULL,
  `file` varchar(400) DEFAULT NULL,
  `type_file` varchar(50) DEFAULT NULL,
  `size_file` varchar(10) DEFAULT NULL,
  `is_private` enum('private','public') NOT NULL,
  `didownload` int(11) NOT NULL DEFAULT 0,
  `created_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gateway`
--

CREATE TABLE `gateway` (
  `id_gateway` int(3) NOT NULL,
  `gateway` varchar(100) NOT NULL,
  `gambar` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `tipe_gateway` enum('ewallet','credit_card','qrcode','bank','echannel','manual') NOT NULL DEFAULT 'ewallet',
  `kode` varchar(100) DEFAULT NULL,
  `is_aktif` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gateway`
--

INSERT INTO `gateway` (`id_gateway`, `gateway`, `gambar`, `link`, `tipe_gateway`, `kode`, `is_aktif`) VALUES
(1, 'ShopeePay', 'shopeepay.png', 'https://shopee.co.id/shopeepay', 'ewallet', 'SP', '0'),
(2, 'Gopay', 'gopay.png', 'gojek.com', 'ewallet', 'gopay', '1'),
(3, 'Ovo', 'ovo.png', 'https://tumpengmini.net', 'ewallet', 'ov', '0'),
(4, 'LinkAja', 'linkaja.png', 'https://tumpengmini.net', 'ewallet', 'LINKAJA', '0'),
(5, 'DANA', 'dana.png', 'https://tumpengmini.net', 'ewallet', 'DANA', '0'),
(6, 'Credit Card', 'credit_card.jpeg', NULL, 'credit_card', 'credit_card', '1'),
(7, 'QRIS', 'qris.png', 'https://bi.go.id', 'qrcode', 'QRIS', '0'),
(8, 'BNI VA', 'bni.png', 'https://bni.co.id/id-id/', 'echannel', 'bni_va', '1'),
(9, 'Mandiri', 'mandiri.png', 'https://bankmandiri.co.id', 'echannel', 'echannel', '1'),
(10, 'BRI VA', 'bri.png', 'https://bri.co.id', 'echannel', 'bri_epay', '0'),
(11, 'ATM Bersama', 'atm_bersama.jpg', 'https://midtrans.com', 'echannel', 'other_va', '1'),
(12, 'BSI', 'bsi_kecil_(3).jpg', 'https://itsedekah.id', 'bank', 'Yayasan Manarul Ilmi ITS', '0'),
(13, 'Mandiri', 'mandiri2.png', 'https://itsedekah.id', 'bank', 'A.n Disty Indonesia', '0'),
(14, 'Mega Syariah', 'bank_mega_syariah_(1).jpg', '1000169703', 'bank', 'Yayasan Manarul Ilmi ITS', '0'),
(15, 'BSI', 'bsi_kecil_(3)2.jpg', '5502207708', 'bank', 'Yayasan Manarul Ilmi ITS', '0'),
(16, 'Mandiri', 'mandiri21.png', '1400019793935', 'bank', 'Yayasan Manarul Ilmi ITS', '0'),
(17, 'Indomaret', 'indomaret.jpg', 'www.rsudjombang.com', 'echannel', 'rsud jombang', '0'),
(18, 'Alfamart', 'AlfaMart.png', 'https://midtrans.com', 'echannel', 'alfa', '0');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(3) NOT NULL,
  `id_level` int(2) NOT NULL,
  `id_menu` text DEFAULT NULL,
  `id_detail` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `id_level`, `id_menu`, `id_detail`) VALUES
(1, 1, '.1:::.2:::.3:::.4:::.5:t:e:h.6:::.7:::.8:::.9:::.10:::.11:::.13:::', '.1:t:e:h.2:t:e:h.3:t:e:h.4:t:e:h.5:t:e:h.12:t:e:h.6:t:e:h.7:t:e:h.8:t:e:h.9:t:e:h.10:t:e:h.11:t:e:h.13:t:e:h.14:t:e:h.15:t:e:h.16:t:e:h.17:t:e:h.18:t:e:h.19:t:e:h.20:t:e:h.21:t:e:h.25:t:e:h.31:t:e:h.32:t:e:h.29:t:e:h.30:t:e:h'),
(2, 2, '.1:::.3:::.8:::.11:::', '.13:t:e:h.14:t:e:h.15:t:e:h.19:::.22:t:e:h.23:t:e:h.24:t:e:h.25:t:e:h'),
(3, 3, '.1:::.7:::.8:::.10:::.11:::', '.9:t:e:h.10:t:e:h.14:t:e:h.15:t:e:h.20:t:e:h.25:t:e:h'),
(4, 4, '.1:::', ''),
(5, 5, '.1:::.12:::', '.26:t::.27:t::.28:t::');

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `id_icon` int(5) NOT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`id_icon`, `icon`) VALUES
(1, 'fas fa-fire'),
(2, 'fas fa-building'),
(3, 'fas fa-rocket'),
(4, 'fas fa-exclamation'),
(5, 'fas fa-envelope'),
(6, 'fas fa-th-large'),
(7, 'fas fa-address-card'),
(8, 'fas fa-flag'),
(9, 'fas fa-ambulance'),
(10, 'fas fa-angle-double-left'),
(11, 'fas fa-angle-double-right'),
(12, 'fas fa-angle-left'),
(13, 'fas fa-angle-right'),
(14, 'fas fa-angry'),
(15, 'fas fa-folder'),
(16, 'fas fa-arrow-alt-circle-left'),
(17, 'fas fa-arrow-alt-circle-right'),
(18, 'fas fa-arrow-left'),
(19, 'fas fa-arrow-right'),
(20, 'fas fa-atlas'),
(21, 'fas fa-award'),
(22, 'fas fa-at'),
(23, 'fas fa-balance-scale'),
(24, 'fas fa-barcode'),
(25, 'fas fa-bars'),
(26, 'fas fa-gavel'),
(27, 'fas fa-bell'),
(28, 'fas fa-folder-open'),
(29, 'fas fa-filter'),
(30, 'fas fa-bicycle'),
(31, 'fas fa-gift'),
(32, 'fas fa-book-open'),
(33, 'fas fa-book-reader'),
(34, 'fas fa-bookmark'),
(35, 'fas fa-box-open'),
(36, 'fas fa-briefcase'),
(37, 'fas fa-gem'),
(38, 'fas fa-bullhorn'),
(39, 'fas fa-burn'),
(40, 'fas fa-bus'),
(41, 'fas fa-calendar'),
(42, 'fas fa-calendar-alt'),
(43, 'fas fa-calendar-check'),
(44, 'fas fa-camera'),
(45, 'fas fa-globe'),
(46, 'fas fa-capsules'),
(47, 'fas fa-car'),
(48, 'fas fa-graduation-cap'),
(49, 'fas fa-caret-up'),
(50, 'fas fa-caret-square-left'),
(51, 'fas fa-caret-square-right'),
(52, 'fas fa-cart-arrow-down'),
(53, 'fas fa-cart-plus'),
(54, 'fas fa-hand-holding-heart'),
(55, 'fas fa-chalkboard'),
(56, 'fas fa-chart-area'),
(57, 'fas fa-chart-bar'),
(58, 'fas fa-chart-line'),
(59, 'fas fa-chart-pie'),
(60, 'fas fa-check'),
(61, 'fas fa-check-circle'),
(62, 'fas fa-check-double'),
(63, 'fas fa-check-square'),
(64, 'fas fa-chess'),
(65, 'fas fa-chess-queen'),
(66, 'fas fa-chrome'),
(67, 'fas fa-circle'),
(68, 'fas fa-city'),
(69, 'fas fa-clinic-medical'),
(70, 'fas fa-clipboard'),
(71, 'fas fa-clipboard-check'),
(72, 'fas fa-clipboard-list'),
(73, 'fas fa-clock'),
(74, 'fas fa-clone'),
(75, 'fas fa-cloud'),
(76, 'fas fa-cloud-download-alt'),
(77, 'fas fa-cloud-moon'),
(78, 'fas fa-cloud-showers-heavy'),
(79, 'fas fa-cloud-upload-alt'),
(80, 'fas fa-code'),
(81, 'fas fa-code-branch'),
(82, 'fas fa-coffee'),
(83, 'fas fa-cog'),
(84, 'fas fa-cogs'),
(85, 'fas fa-coins'),
(86, 'fas fa-comment'),
(87, 'fas fa-comments'),
(88, 'fas fa-compass'),
(89, 'fas fa-copy'),
(90, 'fas fa-copyright'),
(91, 'fas fa-database'),
(92, 'fas fa-cubes'),
(93, 'fas fa-dice'),
(94, 'fas fa-download'),
(95, 'fas fa-dragon'),
(96, 'fas fa-edit'),
(97, 'fas fa-lock'),
(98, 'fas fa-ellipsis-h'),
(99, 'fas fa-envelope-open'),
(100, 'fas fa-envelope-open-text'),
(101, 'fas fa-envira'),
(102, 'fas fa-eraser'),
(103, 'fas fa-eye'),
(104, 'fas fa-facebook-square'),
(105, 'fas fa-fax'),
(106, 'fas fa-feather-alt'),
(107, 'fas fa-female'),
(108, 'fas fa-file'),
(109, 'fas fa-file-alt'),
(110, 'fas fa-file-code'),
(111, 'fas fa-file-excel'),
(112, 'fas fa-file-image'),
(113, 'fas fa-file-pdf'),
(114, 'fas fa-file-powerpoint'),
(115, 'fas fa-file-word'),
(116, 'fas fa-file-signature'),
(117, 'fas fa-file-upload'),
(118, 'fas fa-file-video'),
(119, 'fas fa-file-drip'),
(120, 'fas fa-hands'),
(121, 'fas fa-hdd'),
(122, 'fas fa-heart'),
(123, 'fas fa-history'),
(124, 'fas fa-home'),
(125, 'fas fa-hospital'),
(126, 'fas fa-hourglass'),
(127, 'fas fa-id-card'),
(128, 'fas fa-image'),
(129, 'fas fa-info'),
(130, 'fas fa-info-circle'),
(131, 'fas fa-kaaba'),
(132, 'fas fa-key'),
(133, 'fas fa-keyboard'),
(134, 'fas fa-laptop'),
(135, 'fas fa-layer-group'),
(136, 'fas fa-lightbulb'),
(137, 'fas fa-link'),
(138, 'fas fa-list-alt'),
(139, 'fas fa-location-arrow'),
(140, 'fas fa-male'),
(141, 'fas fa-map'),
(142, 'fas fa-map-marker-alt'),
(143, 'fas fa-map-pin'),
(144, 'fas fa-money-bill'),
(145, 'fas fa-mosque'),
(146, 'fas fa-mouse'),
(147, 'fas fa-mouse-pointer'),
(148, 'fas fa-newspaper'),
(149, 'fas fa-paper-plane'),
(150, 'fas fa-paperclip'),
(151, 'fas fa-pen'),
(152, 'fas fa-plus-circle'),
(153, 'fas fa-phone'),
(154, 'fas fa-plane'),
(155, 'fas fa-print'),
(156, 'fas fa-restroom'),
(157, 'fas fa-retweet'),
(158, 'fas fa-satellite'),
(159, 'fas fa-save'),
(160, 'fas fa-school'),
(161, 'fas fa-search-plus'),
(162, 'fas fa-search-minus'),
(163, 'fas fa-scroll'),
(164, 'fas fa-share-alt'),
(165, 'fas fa-shield-alt'),
(166, 'fas fa-share'),
(167, 'fas fa-shopping-cart'),
(168, 'fas fa-sign-out-alt'),
(169, 'fas fa-sign-in-alt'),
(170, 'fas fa-sitemap'),
(171, 'fas fa-search'),
(172, 'fas fa-wallet');

-- --------------------------------------------------------

--
-- Table structure for table `info_mail`
--

CREATE TABLE `info_mail` (
  `id_mail` int(2) NOT NULL,
  `protocol` char(10) NOT NULL,
  `smtp_host` varchar(100) NOT NULL,
  `smtp_port` char(5) NOT NULL,
  `smtp_user` varchar(150) NOT NULL,
  `smtp_pass` varchar(150) NOT NULL,
  `charset` char(10) NOT NULL,
  `mailtype` char(10) NOT NULL,
  `newline` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_mail`
--

INSERT INTO `info_mail` (`id_mail`, `protocol`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `charset`, `mailtype`, `newline`) VALUES
(1, 'smtp', 'ssl://smtp.googlemail.com', '465', 'yourmail@mail.com', 'passwordmail', 'iso-8859-1', 'html', '\\r\\n');

-- --------------------------------------------------------

--
-- Table structure for table `info_sistem`
--

CREATE TABLE `info_sistem` (
  `id_info` int(3) NOT NULL,
  `title_header` varchar(30) DEFAULT NULL,
  `title_footer` varchar(70) DEFAULT NULL,
  `logo` varchar(400) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telepon` varchar(15) DEFAULT NULL,
  `alamat` varchar(150) DEFAULT NULL,
  `tentang_website` text DEFAULT NULL,
  `website_status` enum('9','8') NOT NULL DEFAULT '9'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_sistem`
--

INSERT INTO `info_sistem` (`id_info`, `title_header`, `title_footer`, `logo`, `email`, `no_telepon`, `alamat`, `tentang_website`, `website_status`) VALUES
(1, 'SikoZiOn', 'RSUD Kabupaten Jombang', 'Devm_Ori_Transparent.png', 'mail@office.co.id', '0321671181', 'Jombang - Jawa Timur', '', '9');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `hari` enum('SENIN','SELASA','RABU','KAMIS','JUMAT','SABTU','MINGGU') NOT NULL DEFAULT 'SENIN',
  `jam_mulai` time NOT NULL DEFAULT '00:00:00',
  `jam_selesai` time NOT NULL DEFAULT '00:00:00',
  `kuota` int(11) DEFAULT NULL,
  `id_jenis_layanan` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `hari`, `jam_mulai`, `jam_selesai`, `kuota`, `id_jenis_layanan`) VALUES
(1, 'SENIN', '07:00:00', '12:00:00', 50, 14),
(2, 'SELASA', '07:00:00', '12:00:00', 50, 14),
(3, 'RABU', '07:00:00', '12:00:00', 50, 14),
(4, 'KAMIS', '07:00:00', '12:00:00', 50, 14),
(5, 'JUMAT', '07:00:00', '12:00:00', 50, 14),
(6, 'SABTU', '07:00:00', '12:00:00', 0, 14),
(7, 'MINGGU', '07:00:00', '12:00:00', 0, 14);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_layanan`
--

CREATE TABLE `jenis_layanan` (
  `id_jenis_layanan` int(3) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `gambar` varchar(60) NOT NULL DEFAULT 'fas fa-home',
  `is_login` enum('0','1','2') NOT NULL DEFAULT '0',
  `urutan` tinyint(2) NOT NULL DEFAULT 1,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_layanan`
--

INSERT INTO `jenis_layanan` (`id_jenis_layanan`, `jenis_layanan`, `link`, `icon`, `gambar`, `is_login`, `urutan`, `status`) VALUES
(1, 'Pendaftaran', 'registrasi', 'care.png', 'fas fa-home', '0', 1, '1'),
(2, 'Jadwal Konsultasi', 'layanan/jadwal_konsultasi', 'hospital.png', 'fas fa-calendar', '1', 4, '1'),
(7, 'Login', 'login', 'login.png', 'fas fa-sign-in-alt', '0', 2, '1'),
(8, 'Logout', 'logout', 'logout.png', 'fas fa-sign-out-alt', '1', 16, '1'),
(9, 'Transaksi', 'transaksi', 'wallet.png', 'fas fa-wallet', '1', 15, '1'),
(10, 'Artikel Gizi', 'artikel', 'newspaper.png', 'fas fa-newspaper', '2', 3, '1'),
(12, 'Kalkulator Gizi', 'kalkulator_gizi', '—Pngtree—audit_accounting_banking_budget_business_4970002(1).png', 'fas fa-calculator', '2', 11, '1'),
(13, 'Konversi Nilai Gizi', 'konversi_nilai_gizi', '—Pngtree—green_leaves_vector_icon_design_5224045(1).png', 'fas fa-heart', '2', 12, '1'),
(14, 'Konsultasi Gizi', 'konsultasi_gizi', '—Pngtree—consulting_4704563(1).png', 'fas fa-comments', '1', 13, '1'),
(15, 'Katering Diet', 'katering_diet', '—Pngtree—vector_diet_icon_4156064(1).png', 'fas fa-utensils', '1', 14, '1'),
(16, 'Riwayat', 'konsultasi_gizi/riwayat', 'riwayat.png', 'fas fa-history', '1', 17, '1');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tes`
--

CREATE TABLE `jenis_tes` (
  `id_jenis_tes` int(3) NOT NULL,
  `jenis_tes` varchar(50) NOT NULL,
  `slug` text DEFAULT NULL,
  `gambar` varchar(400) DEFAULT NULL,
  `kode` char(4) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `min_hari` int(2) NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `perlu_token` enum('0','1') NOT NULL DEFAULT '1',
  `id_jenis_layanan` int(3) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_tes`
--

INSERT INTO `jenis_tes` (`id_jenis_tes`, `jenis_tes`, `slug`, `gambar`, `kode`, `keterangan`, `min_hari`, `status`, `perlu_token`, `id_jenis_layanan`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(11, 'Konsultasi Gizi', 'konsultasi-gizi', NULL, 'KSGZ', '<p>Layanan konsultasi gizi yang tersedia seputar kebutuhan yang diperlukan tubuh dan dapat menerapkan dalam kehidupan sehari-hari</p>', 1, '1', '0', 14, '2021-06-18 13:25:28', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tes_akses`
--

CREATE TABLE `jenis_tes_akses` (
  `id_jenis_tes` int(3) NOT NULL,
  `id_tipe_akun` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tes_biaya`
--

CREATE TABLE `jenis_tes_biaya` (
  `id_jenis_tes_biaya` int(5) NOT NULL,
  `id_jenis_tes` int(3) NOT NULL,
  `durasi` varchar(5) DEFAULT NULL,
  `biaya` double(16,0) NOT NULL DEFAULT 0,
  `status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_tes_biaya`
--

INSERT INTO `jenis_tes_biaya` (`id_jenis_tes_biaya`, `id_jenis_tes`, `durasi`, `biaya`, `status`) VALUES
(9, 11, '30', 100000, '0'),
(10, 11, '1', 0, '1'),
(11, 11, '30', 30000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori_berita` int(3) NOT NULL,
  `kategori_berita` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori_berita`, `kategori_berita`) VALUES
(4, 'Artikel GIZI');

-- --------------------------------------------------------

--
-- Table structure for table `katering_diet`
--

CREATE TABLE `katering_diet` (
  `id_katering_diet` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katering_diet`
--

INSERT INTO `katering_diet` (`id_katering_diet`, `hari`) VALUES
(3, 'senin'),
(4, 'selasa'),
(5, 'rabu'),
(6, 'kamis'),
(7, 'jumat'),
(8, 'sabtu'),
(9, 'minggu');

-- --------------------------------------------------------

--
-- Table structure for table `katering_diet_harga`
--

CREATE TABLE `katering_diet_harga` (
  `id_katering_diet_harga` int(11) NOT NULL,
  `id_katering_diet_menu` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_aktif` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `update_at` date DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katering_diet_harga`
--

INSERT INTO `katering_diet_harga` (`id_katering_diet_harga`, `id_katering_diet_menu`, `harga`, `is_aktif`, `created_at`, `created_by`, `update_at`, `update_by`) VALUES
(1, 1, 630000, 1, '2022-06-14', '1', NULL, NULL),
(2, 2, 630000, 1, '2022-07-04', '1', NULL, NULL),
(3, 3, 630000, 1, '2022-07-04', '1', NULL, NULL),
(4, 4, 630000, 1, '2022-07-13', '', NULL, NULL),
(5, 5, 630000, 1, '2022-07-13', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `katering_diet_menu`
--

CREATE TABLE `katering_diet_menu` (
  `id_katering_diet_menu` int(11) NOT NULL,
  `id_katering_diet` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_aktif` int(11) NOT NULL,
  `is_katering_diet` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katering_diet_menu`
--

INSERT INTO `katering_diet_menu` (`id_katering_diet_menu`, `id_katering_diet`, `foto`, `nama_menu`, `deskripsi`, `is_aktif`, `is_katering_diet`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, 'https://cdn-2.tstatic.net/travel/foto/bank/images/kuliner-nasi-goreng-jawa-enak-untuk-menu-sarapan.jpg', 'Paket A', 'Paket Makanan Diet  Berat / Nasi  (Heavyfood) yang sudah diukur oleh ahli gizi', 1, 1, '2022-06-14', '1', '2022-06-14', ''),
(2, 3, 'https://img.okezone.com/library/images/2018/08/23/2osvs8lh9zbqxuds8e42_20171.jpg', 'Paket B', 'Paket Makanan Diet Medium / Noodle / Starters  (Mediumfood) yang sudah diukur oleh ahli gizi', 1, 1, '2022-06-14', '1', '2022-06-14', ''),
(3, 3, 'https://asset.kompas.com/crops/fP_Q5TD9BOn5G5JTnntgtDIjQMI=/53x36:933x623/750x500/data/photo/2021/10/21/6171492e1ea12.jpg', 'Paket C', 'Paket Makanan Diet Grain / Roti (Lightfood) yang sudah diukur oleh ahli gizi', 1, 1, '2022-06-14', '1', '2022-06-14', ''),
(4, 3, 'https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bakso-sapi-kuah-1.jpg', 'Paket D', 'Paket Makanan Diet  Berat / Daging  (Heavyfood) yang sudah diukur oleh ahli gizi', 1, 1, '2022-06-14', '1', '2022-06-14', ''),
(5, 3, 'https://cdn1.katadata.co.id/media/images/thumb/2021/11/10/Menu_diet_sehat-2021_11_10-13_45_22_4b86b10812f669b0eb0fb0c3a4c0daad_620x413_thumb.jpg', 'Paket E', 'Paket Makanan Diet Ringan / Sayur Salad  (Lightfood) yang sudah diukur oleh ahli gizi', 1, 1, '2022-06-14', '1', '2022-06-14', '');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(30) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL,
  `id_detail` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `room_date` date NOT NULL,
  `room_url` varchar(255) NOT NULL,
  `is_finished` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`room_id`, `room_name`, `patient_id`, `dokter_id`, `id_detail`, `transaction_id`, `room_date`, `room_url`, `is_finished`) VALUES
(6, '', 3, 26, 3, '1cafa030-2f88-4c8f-8357-04afa8663743', '2022-10-05', 'https://zoom.us/j/97088373193?pwd=TVIvcFVTODdVVktvbGZQa2RZTzRDZz09', 1),
(7, 'Konsultasi_ZOOM', 3, 4, 4, '1a83499b-3131-4c3d-b073-f4d75026a42f', '2022-10-10', 'https://zoom.us/j/97088373193?pwd=TVIvcFVTODdVVktvbGZQa2RZTzRDZz09', 1),
(8, 'Konsultasi_ZOOM', 27, 10, 5, '51313e68-a973-411a-9fb7-a73cdd3a200d', '0000-00-00', 'https://zoom.us/j/97088373193?pwd=TVIvcFVTODdVVktvbGZQa2RZTzRDZz09', 0);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_gizi`
--

CREATE TABLE `konsultasi_gizi` (
  `id_konsultasi_gizi` int(11) NOT NULL,
  `no_ljk` varchar(20) DEFAULT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_platform` int(2) NOT NULL DEFAULT 1,
  `id_jenis_tes` int(3) NOT NULL DEFAULT 11,
  `tanggal` date DEFAULT NULL,
  `id_status` tinyint(2) NOT NULL DEFAULT 7,
  `nama` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL DEFAULT 'Laki-Laki',
  `keterangan` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `konsultasi_gizi`
--

INSERT INTO `konsultasi_gizi` (`id_konsultasi_gizi`, `no_ljk`, `id_transaksi`, `id_user`, `id_platform`, `id_jenis_tes`, `tanggal`, `id_status`, `nama`, `tgl_lahir`, `jk`, `keterangan`, `created_at`, `updated_at`, `updated_by`) VALUES
(1, 'KSGZ/1642414495', 1, 1, 2, 11, '2022-01-26', 7, 'Muhammad Maghfur', '1998-08-17', 'Laki-Laki', NULL, '2022-01-17 17:14:55', NULL, NULL),
(2, 'KSGZ/1642422391', 5, 1, 3, 11, '2022-01-18', 7, 'Muhammad Maghfur', '1998-08-17', 'Laki-Laki', NULL, '2022-01-17 19:26:31', NULL, NULL),
(3, 'KSGZ/1642422992', 6, 1, 3, 11, '2022-01-18', 7, 'Muhammad Maghfur', '1998-08-17', 'Laki-Laki', NULL, '2022-01-17 19:36:32', NULL, NULL),
(4, 'KSGZ/1642427500', 7, 1, 3, 11, '2022-01-18', 7, 'Muhammad Maghfur', '1998-08-17', 'Laki-Laki', NULL, '2022-01-17 20:51:40', NULL, NULL),
(5, 'KSGZ/1642427892', 8, 1, 4, 11, '2022-01-18', 9, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', 'sudah', '2022-01-17 20:58:12', NULL, NULL),
(6, 'KSGZ/1642440891', 9, 7, 3, 11, '2022-01-19', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 00:34:51', NULL, NULL),
(7, 'KSGZ/1642441587', 10, 7, 4, 11, '2022-01-19', 7, 'Adinda', '1980-01-08', 'Laki-Laki', NULL, '2022-01-18 00:46:27', NULL, NULL),
(8, 'KSGZ/1642446022', 11, 7, 1, 11, '2022-01-19', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 02:00:22', NULL, NULL),
(9, 'KSGZ/1642446456', 12, 7, 1, 11, '2022-01-19', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 02:07:36', NULL, NULL),
(10, 'KSGZ/1642447468', 13, 7, 1, 11, '2022-01-19', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 02:24:28', NULL, NULL),
(11, 'KSGZ/1642447930', 14, 9, 2, 11, '2022-01-19', 7, 'Wiwit', '1989-05-02', 'Perempuan', NULL, '2022-01-18 02:32:10', NULL, NULL),
(12, 'KSGZ/1642449050', 23, 7, 4, 11, '2022-01-21', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 02:50:50', NULL, NULL),
(13, 'KSGZ/1642449628', 25, 7, 2, 11, '2022-01-21', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 03:00:28', NULL, NULL),
(14, 'KSGZ/1642450258', 27, 7, 1, 11, '2022-01-20', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 03:10:58', NULL, NULL),
(15, 'KSGZ/1642451110', 30, 7, 1, 11, '2022-01-20', 7, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', NULL, '2022-01-18 03:25:10', NULL, NULL),
(16, 'KSGZ/1642472187', 31, 9, 1, 11, '2022-01-19', 7, 'Wiwit', '1989-05-02', 'Perempuan', NULL, '2022-01-18 09:16:27', NULL, NULL),
(17, 'KSGZ/1642472601', 32, 9, 1, 11, '2022-01-19', 7, 'Wiwit', '1989-05-02', 'Perempuan', NULL, '2022-01-18 09:23:21', NULL, NULL),
(18, 'KSGZ/1642472826', 33, 9, 1, 11, '2022-01-19', 7, 'Wiwit', '1989-05-02', 'Perempuan', NULL, '2022-01-18 09:27:06', NULL, NULL),
(19, 'KSGZ/1642473033', 34, 10, 4, 11, '2022-01-27', 7, 'fatihatur rosyidah', '2022-01-18', 'Perempuan', NULL, '2022-01-18 09:30:33', NULL, NULL),
(21, 'KSGZ/1642479822', 36, 7, 1, 11, '2022-01-19', 9, 'Chandra Sukma Anugrah', '1988-10-31', 'Laki-Laki', 'kurango makan gorengan', '2022-01-18 11:23:42', NULL, NULL),
(22, 'KSGZ/1642480259', 37, 11, 2, 11, '2022-01-19', 7, 'litagizi@gmail.com', '2022-01-18', 'Perempuan', NULL, '2022-01-18 11:30:59', NULL, NULL),
(23, 'KSGZ/1642480360', 38, 8, 1, 11, '2022-01-19', 7, 'Admin Gizi', '1988-10-21', 'Laki-Laki', NULL, '2022-01-18 11:32:40', NULL, NULL),
(24, 'KSGZ/1642480807', 39, 12, 3, 11, '2022-01-20', 7, 'Fathony', '2021-07-30', 'Laki-Laki', NULL, '2022-01-18 11:40:07', NULL, NULL),
(25, 'KSGZ/1642481683', 40, 12, 3, 11, '2022-01-21', 7, 'Halam', '2022-01-11', 'Laki-Laki', NULL, '2022-01-18 11:54:43', NULL, NULL),
(26, 'KSGZ/1642482608', 41, 8, 1, 11, '2022-01-19', 7, 'Admin Gizi', '1988-10-21', 'Laki-Laki', NULL, '2022-01-18 12:10:08', NULL, NULL),
(29, 'KSGZ/1642689341', 44, 1, 3, 11, '2022-01-21', 7, 'Muhammad Maghfur', '1998-08-17', 'Laki-Laki', NULL, '2022-01-20 21:35:41', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_gizi_asessment`
--

CREATE TABLE `konsultasi_gizi_asessment` (
  `id_konsultasi_gizi` int(11) NOT NULL,
  `id_asessment` int(5) NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konsultasi_gizi_asessment`
--

INSERT INTO `konsultasi_gizi_asessment` (`id_konsultasi_gizi`, `id_asessment`, `value`) VALUES
(29, 1, '72'),
(29, 2, '168'),
(29, 4, '40.00'),
(29, 5, 'normal'),
(29, 6, ''),
(29, 7, ''),
(29, 8, ''),
(29, 9, ''),
(29, 10, ''),
(29, 11, ''),
(29, 12, ''),
(29, 13, ''),
(29, 14, 'tidak'),
(29, 15, 'sehat'),
(29, 16, 'ya'),
(29, 17, 'tidak'),
(29, 18, 'tidak'),
(29, 19, 'baik'),
(29, 20, 'tidak'),
(29, 21, 'tidak'),
(29, 22, ''),
(29, 23, '3x sehari'),
(29, 24, 'lainnya'),
(29, 25, 'islam'),
(29, 26, 's1'),
(29, 27, 'tidak'),
(29, 28, 'Tidak ada'),
(29, 29, 'Tidak ada'),
(29, 30, 'tidak'),
(29, 31, ''),
(29, 32, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `konversi`
--

CREATE TABLE `konversi` (
  `id_konversi_gizi` int(11) NOT NULL,
  `konversi_gizi` varchar(100) NOT NULL,
  `protein` varchar(25) NOT NULL,
  `lemak` varchar(25) NOT NULL,
  `karbo` varchar(25) NOT NULL,
  `kalori` varchar(25) NOT NULL,
  `vitamin` varchar(25) NOT NULL,
  `mineral` varchar(25) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_at` date NOT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konversi`
--

INSERT INTO `konversi` (`id_konversi_gizi`, `konversi_gizi`, `protein`, `lemak`, `karbo`, `kalori`, `vitamin`, `mineral`, `foto`, `created_at`, `created_by`, `update_at`, `update_by`) VALUES
(23, 'beras ketan', '8983', '398403', '48984', '3892', '293', '2839', 'beras_ketan1.jpg', '2022-06-28', 1, '2022-07-29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `layanan_libur`
--

CREATE TABLE `layanan_libur` (
  `id_layanan_libur` int(11) NOT NULL,
  `id_jenis_layanan` int(3) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_selesai` date DEFAULT NULL,
  `keterangan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan_libur`
--

INSERT INTO `layanan_libur` (`id_layanan_libur`, `id_jenis_layanan`, `tahun`, `tgl_mulai`, `tgl_selesai`, `keterangan`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 14, 2022, '2022-01-24', '2022-01-25', 'Libur hari kecepit', '2022-01-17 10:00:27', 1, '2022-01-17 14:55:49', 1),
(2, 14, 2022, '2022-02-14', '2022-02-15', 'Libur weekend', '2022-01-17 11:54:46', 1, '2022-01-17 14:56:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(2) NOT NULL,
  `level` varchar(50) NOT NULL,
  `kode` char(3) DEFAULT 'REF'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`, `kode`) VALUES
(1, 'Root', 'SPR'),
(2, 'Dokter', 'REF'),
(3, 'Petugas', 'ROG'),
(4, 'Petugas 2', 'SPV'),
(5, 'Peserta', 'PSN');

-- --------------------------------------------------------

--
-- Table structure for table `ljk`
--

CREATE TABLE `ljk` (
  `id_ljk` int(11) NOT NULL,
  `no_ljk` varchar(20) DEFAULT NULL,
  `id_token` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `skor` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `start` datetime NOT NULL DEFAULT current_timestamp(),
  `end` datetime DEFAULT NULL,
  `status` enum('belum','selesai') NOT NULL DEFAULT 'belum',
  `is_valid` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ljk_detail`
--

CREATE TABLE `ljk_detail` (
  `id_ljk` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(1) DEFAULT NULL,
  `is_ragu` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_level`
--

CREATE TABLE `log_level` (
  `id_log` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_level` int(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log_mail`
--

CREATE TABLE `log_mail` (
  `id_log` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `from_mail` varchar(200) NOT NULL,
  `mailto` varchar(200) NOT NULL,
  `pesan` text NOT NULL,
  `send_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_user` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_mail`
--

INSERT INTO `log_mail` (`id_log`, `id_pesan`, `from_mail`, `mailto`, `pesan`, `send_at`, `id_user`) VALUES
(1, 16, 'darnalselmath@gmail.com', 'ainunnisa@gmail.com', '<p>Bismillah</p>\r\n', '2020-06-19 07:46:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(3) NOT NULL,
  `menu` varchar(30) DEFAULT NULL,
  `id_icon` int(5) DEFAULT 1,
  `is_link` enum('0','1') DEFAULT '0',
  `link` varchar(50) DEFAULT NULL,
  `is_badge` enum('0','1') NOT NULL DEFAULT '0',
  `badge_color` varchar(30) DEFAULT NULL,
  `badge_text` char(10) DEFAULT NULL,
  `is_separator` enum('0','1') NOT NULL DEFAULT '0',
  `separator_text` varchar(30) DEFAULT NULL,
  `urutan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `menu`, `id_icon`, `is_link`, `link`, `is_badge`, `badge_color`, `badge_text`, `is_separator`, `separator_text`, `urutan`) VALUES
(1, 'Dashboard', 1, '1', 'home', '0', NULL, NULL, '1', 'Navigasi', '1'),
(2, 'Modul Sistem', 2, '0', NULL, '0', NULL, NULL, '0', NULL, '5'),
(3, 'Dokumentasi', 3, '1', 'admin/dokumentasi', '1', 'warning', 'Baca', '0', NULL, '9'),
(4, 'Tentang', 4, '1', 'admin/tentang', '0', NULL, NULL, '0', NULL, '9'),
(5, 'Pesan', 5, '1', 'admin/pesan', '0', NULL, NULL, '1', 'Informasi', '8'),
(6, 'System', 6, '0', NULL, '1', 'danger', 'Zona', '0', NULL, '7'),
(7, 'Informasi Website', 45, '0', NULL, '0', NULL, NULL, '0', NULL, '6'),
(8, 'Data Primary', 3, '0', NULL, '0', NULL, NULL, '0', NULL, '2'),
(9, 'Gateway', 75, '0', NULL, '0', NULL, NULL, '0', NULL, '3'),
(10, 'Transaksi', 172, '0', NULL, '0', NULL, NULL, '0', NULL, '4'),
(11, 'Layanan', 54, '0', NULL, '0', NULL, NULL, '0', NULL, '2'),
(12, 'Layanan', 54, '0', NULL, '0', NULL, NULL, '0', NULL, '2'),
(13, 'CAT', 134, '0', NULL, '0', NULL, NULL, '0', NULL, '3');

-- --------------------------------------------------------

--
-- Table structure for table `menu_detail`
--

CREATE TABLE `menu_detail` (
  `id_detail` int(5) NOT NULL,
  `id_menu` int(3) NOT NULL,
  `menu` varchar(30) NOT NULL,
  `is_badge` enum('0','1') NOT NULL DEFAULT '0',
  `badge_color` varchar(30) DEFAULT NULL,
  `badge_text` char(10) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `urutan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_detail`
--

INSERT INTO `menu_detail` (`id_detail`, `id_menu`, `menu`, `is_badge`, `badge_color`, `badge_text`, `link`, `urutan`) VALUES
(1, 2, 'Manajemen Menu', '0', NULL, NULL, 'admin/modul', '2'),
(2, 2, 'Hak Akses ', '0', NULL, NULL, 'admin/hak_akses', '4'),
(3, 2, 'User', '1', 'success', 'New', 'admin/user', '5'),
(4, 2, 'Info Sistem', '1', 'danger', 'Hot', 'admin/info_sistem', '1'),
(5, 2, 'Manajemen Icons', '0', NULL, NULL, 'admin/icons', '2'),
(6, 6, 'System Version', '0', NULL, NULL, 'admin/system_version', '1'),
(7, 6, 'Backup / Restore Database', '0', NULL, NULL, 'admin/backup_restore', '2'),
(8, 6, 'Reset Database', '0', NULL, NULL, 'admin/reset_database', '3'),
(9, 7, 'Kategori Berita', '0', NULL, NULL, 'admin/kategori_berita', '1'),
(10, 7, 'Berita', '0', NULL, NULL, 'admin/berita', '2'),
(11, 7, 'Pengumuman', '0', NULL, NULL, 'admin/pengumuman', '3'),
(12, 2, 'Sharing File', '0', NULL, NULL, 'admin/sharing_file', '6'),
(13, 8, 'Jenis Layanan', '0', NULL, NULL, 'data/jenis_layanan', '1'),
(14, 8, 'Master Layanan', '0', NULL, NULL, 'data/jenis_tes', '2'),
(15, 8, 'Atur Jadwal', '0', NULL, NULL, 'data/jadwal', '3'),
(16, 9, 'API Midtrans', '0', NULL, NULL, 'admin/api/midtrans', '1'),
(17, 9, 'API Duitku', '0', NULL, NULL, 'admin/api/duitku', '2'),
(18, 9, 'API Xendit', '0', NULL, NULL, 'admin/api/xendit', '3'),
(19, 10, 'Atur Gateway', '0', NULL, NULL, 'admin/gateway', '1'),
(20, 10, 'Data Transaksi', '0', NULL, NULL, 'admin/transaksi', '2'),
(21, 10, 'Tipe Saldo', '0', NULL, NULL, '3', '3'),
(25, 11, 'Konsultasi Gizi', '0', NULL, NULL, 'admin/konsultasi_gizi', '1'),
(28, 12, 'Konsultasi Gizi', '0', NULL, NULL, 'layanan/konsultasi_gizi', '1'),
(29, 13, 'Jenis Soal', '0', NULL, NULL, 'admin/jenis_soal', '1'),
(30, 13, 'Simulasi CAT', '0', NULL, NULL, 'admin/simulasi', '2'),
(31, 11, 'Kategori Asessment', '0', NULL, NULL, 'admin/asessment_kategori', '2'),
(32, 11, 'Asessment', '0', NULL, NULL, 'admin/asessment', '3');

-- --------------------------------------------------------

--
-- Table structure for table `midtrans`
--

CREATE TABLE `midtrans` (
  `id` int(11) NOT NULL,
  `serverkey` varchar(300) NOT NULL,
  `clientkey` varchar(300) NOT NULL,
  `sandbox` int(1) NOT NULL,
  `durasi_payment` char(3) NOT NULL DEFAULT '24',
  `tipe_durasi` enum('days','hours') NOT NULL DEFAULT 'hours'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midtrans`
--

INSERT INTO `midtrans` (`id`, `serverkey`, `clientkey`, `sandbox`, `durasi_payment`, `tipe_durasi`) VALUES
(1, 'SB-Mid-server-5rZlD7gvU_YiZOmpg_-VlJz-', 'SB-Mid-client-fzf2SwOBy8jLa77r', 0, '24', 'hours');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_ljk` int(11) NOT NULL,
  `nilai` int(11) NOT NULL DEFAULT 0,
  `id_jenis_tes` int(3) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_ljk`, `nilai`, `id_jenis_tes`, `id_user`) VALUES
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 0, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 0, 2, 1),
(1, 2, 2, 1),
(1, 2, 2, 1),
(1, 2, 2, 1),
(1, 3, 2, 1),
(2, 3, 1, 1),
(2, 3, 1, 1),
(2, 3, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(2, 0, 1, 1),
(3, 2, 1, 1),
(3, 2, 1, 1),
(3, 3, 1, 1),
(1, 2, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 2, 2, 1),
(1, 3, 2, 1),
(1, 2, 2, 1),
(1, 1, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(1, 2, 2, 1),
(1, 0, 2, 1),
(1, 1, 2, 1),
(3, 0, 5, 1),
(3, 3, 5, 1),
(3, 2, 5, 1),
(3, 2, 5, 1),
(3, 0, 5, 1),
(3, 1, 5, 1),
(3, 1, 5, 1),
(3, 1, 5, 1),
(3, 1, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(3, 0, 5, 1),
(4, 0, 1, 1),
(4, 1, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 0, 1, 1),
(4, 1, 1, 1),
(4, 0, 1, 1),
(5, 2, 2, 1),
(5, 3, 2, 1),
(5, 1, 2, 1),
(5, 2, 2, 1),
(5, 3, 2, 1),
(5, 1, 2, 1),
(5, 2, 2, 1),
(5, 1, 2, 1),
(5, 3, 2, 1),
(5, 0, 2, 1),
(5, 1, 2, 1),
(5, 2, 2, 1),
(5, 2, 2, 1),
(5, 1, 2, 1),
(6, 2, 1, 1),
(6, 1, 1, 1),
(6, 1, 1, 1),
(6, 2, 1, 1),
(6, 1, 1, 1),
(6, 1, 1, 1),
(6, 2, 1, 1),
(6, 2, 1, 1),
(6, 1, 1, 1),
(6, 3, 1, 1),
(6, 0, 1, 1),
(6, 1, 1, 1),
(6, 1, 1, 1),
(6, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(7) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_telp` varchar(14) DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `published` datetime NOT NULL DEFAULT current_timestamp(),
  `is_read` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan_katering`
--

CREATE TABLE `pesan_katering` (
  `id_pesan_katering` int(11) NOT NULL,
  `kd_order` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `is_bayar` int(11) NOT NULL,
  `is_proses` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `crated_by` varchar(100) NOT NULL,
  `update_at` date NOT NULL,
  `update_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `platform`
--

CREATE TABLE `platform` (
  `id_platform` int(2) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `is_aktif` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `platform`
--

INSERT INTO `platform` (`id_platform`, `platform`, `is_aktif`) VALUES
(1, 'Video Call via WhatsApp', '1'),
(2, 'Chatting via WhatsApp', '1'),
(3, 'Zoom Meeting', '1'),
(4, 'Google Meet', '1'),
(5, 'Chat Telegram', '0');

-- --------------------------------------------------------

--
-- Table structure for table `program_diet`
--

CREATE TABLE `program_diet` (
  `id_program_diet` int(11) NOT NULL,
  `hari` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_diet`
--

INSERT INTO `program_diet` (`id_program_diet`, `hari`) VALUES
(1, 'senin'),
(2, 'selasa');

-- --------------------------------------------------------

--
-- Table structure for table `program_diet_harga`
--

CREATE TABLE `program_diet_harga` (
  `id_program_diet_harga` int(11) NOT NULL,
  `id_program_diet_list` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `is_aktif` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `update_at` date NOT NULL,
  `update_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_diet_harga`
--

INSERT INTO `program_diet_harga` (`id_program_diet_harga`, `id_program_diet_list`, `harga`, `is_aktif`, `created_at`, `created_by`, `update_at`, `update_by`) VALUES
(1, 1, 100000, 1, '2022-07-19', '1', '0000-00-00', 'NULL');

-- --------------------------------------------------------

--
-- Table structure for table `program_diet_list`
--

CREATE TABLE `program_diet_list` (
  `id_program_diet_list` int(11) NOT NULL,
  `id_program_diet` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `nama_program` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `is_aktif` int(11) NOT NULL,
  `is_program_diet` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `updated_at` date NOT NULL,
  `updated_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_diet_list`
--

INSERT INTO `program_diet_list` (`id_program_diet_list`, `id_program_diet`, `foto`, `nama_program`, `deskripsi`, `is_aktif`, `is_program_diet`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 3, 'https://img.okezone.com/library/images/2018/08/23/2osvs8lh9zbqxuds8e42_20171.jpg', 'Diet Mayo ', 'Diet Mayo adalah suatu jenis diet yang terutama membatasi konsumsi karbohidrat dan garam.', 1, 1, '2022-07-19', '1', '2022-07-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `qris`
--

CREATE TABLE `qris` (
  `qris` varchar(400) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qris`
--

INSERT INTO `qris` (`qris`) VALUES
('QRIS.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saldo`
--

CREATE TABLE `saldo` (
  `id_saldo` int(11) NOT NULL,
  `id_tipe` int(3) NOT NULL,
  `saldo` double(16,0) DEFAULT 0,
  `id_transaksi` int(11) DEFAULT NULL,
  `is_accepted` enum('0','1','2') NOT NULL DEFAULT '1',
  `kd_request` varchar(30) DEFAULT NULL,
  `id_bank` int(4) DEFAULT NULL,
  `file` varchar(250) DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saldo`
--

INSERT INTO `saldo` (`id_saldo`, `id_tipe`, `saldo`, `id_transaksi`, `is_accepted`, `kd_request`, `id_bank`, `file`, `keterangan`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 1, 100000, 1, '1', NULL, NULL, NULL, NULL, '2022-01-17 10:17:04', 1, NULL, NULL),
(2, 1, NULL, NULL, '1', NULL, NULL, NULL, NULL, '2022-01-17 12:36:33', NULL, NULL, NULL),
(3, 1, 0, 6, '1', NULL, NULL, NULL, NULL, '2022-01-17 12:38:16', 1, NULL, NULL),
(4, 1, 0, 7, '1', NULL, NULL, NULL, NULL, '2022-01-17 13:51:41', 1, NULL, NULL),
(5, 1, 30000, 8, '1', NULL, NULL, NULL, NULL, '2022-01-17 13:58:39', 1, NULL, NULL),
(6, 1, 30000, 8, '1', NULL, NULL, NULL, NULL, '2022-01-17 13:58:39', 1, NULL, NULL),
(7, 1, 0, 9, '1', NULL, NULL, NULL, NULL, '2022-01-17 17:34:51', 7, NULL, NULL),
(8, 1, 0, 10, '1', NULL, NULL, NULL, NULL, '2022-01-17 17:46:27', 7, NULL, NULL),
(9, 1, 0, 11, '1', NULL, NULL, NULL, NULL, '2022-01-17 19:00:22', 7, NULL, NULL),
(10, 1, 0, 12, '1', NULL, NULL, NULL, NULL, '2022-01-17 19:07:36', 7, NULL, NULL),
(11, 1, 0, 13, '1', NULL, NULL, NULL, NULL, '2022-01-17 19:24:29', 7, NULL, NULL),
(12, 1, 0, 14, '1', NULL, NULL, NULL, NULL, '2022-01-17 19:32:10', 9, NULL, NULL),
(13, 1, 0, 23, '1', NULL, NULL, NULL, NULL, '2022-01-17 19:50:50', 7, NULL, NULL),
(14, 1, 0, 25, '1', NULL, NULL, NULL, NULL, '2022-01-17 20:00:28', 7, NULL, NULL),
(15, 1, 0, 27, '1', NULL, NULL, NULL, NULL, '2022-01-17 20:10:58', 7, NULL, NULL),
(16, 1, 0, 30, '1', NULL, NULL, NULL, NULL, '2022-01-17 20:25:10', 7, NULL, NULL),
(17, 1, 0, 31, '1', NULL, NULL, NULL, NULL, '2022-01-18 02:16:27', 9, NULL, NULL),
(18, 1, 0, 32, '1', NULL, NULL, NULL, NULL, '2022-01-18 02:23:21', 9, NULL, NULL),
(19, 1, 0, 33, '1', NULL, NULL, NULL, NULL, '2022-01-18 02:27:06', 9, NULL, NULL),
(20, 1, 0, 34, '1', NULL, NULL, NULL, NULL, '2022-01-18 02:30:33', 10, NULL, NULL),
(21, 1, 0, 36, '1', NULL, NULL, NULL, NULL, '2022-01-18 04:23:42', 7, NULL, NULL),
(22, 1, 0, 37, '1', NULL, NULL, NULL, NULL, '2022-01-18 04:30:59', 11, NULL, NULL),
(23, 1, 0, 38, '1', NULL, NULL, NULL, NULL, '2022-01-18 04:32:40', 8, NULL, NULL),
(24, 1, 0, 39, '1', NULL, NULL, NULL, NULL, '2022-01-18 04:40:07', 12, NULL, NULL),
(25, 1, 0, 40, '1', NULL, NULL, NULL, NULL, '2022-01-18 04:54:43', 12, NULL, NULL),
(26, 1, 0, 41, '1', NULL, NULL, NULL, NULL, '2022-01-18 05:10:08', 8, NULL, NULL),
(27, 1, 0, 44, '1', NULL, NULL, NULL, NULL, '2022-01-20 14:35:42', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(11) NOT NULL,
  `soal` varchar(50) DEFAULT NULL,
  `id_jenis_tes` int(3) DEFAULT NULL,
  `waktu_pengerjaan` int(11) DEFAULT NULL,
  `is_aktif` enum('0','1') NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id_soal`, `soal`, `id_jenis_tes`, `waktu_pengerjaan`, `is_aktif`, `id_user`) VALUES
(1, 'Tes Depresi', 2, 60, '1', 1),
(2, 'Tes Kecemasan', 1, 60, '1', 1),
(4, 'Tes Stress', 3, 60, '1', 1),
(5, 'Tes Internet Gaming Disorder', 5, 60, '1', 1),
(6, 'Tes Inteligensi', 6, 60, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `soal_skor`
--

CREATE TABLE `soal_skor` (
  `id_soal_skor` int(3) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `norma` varchar(50) DEFAULT NULL,
  `warna` varchar(15) NOT NULL DEFAULT 'info',
  `skor_awal` int(3) NOT NULL DEFAULT 0,
  `skor_akhir` int(3) NOT NULL DEFAULT 0,
  `rekomendasi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal_skor`
--

INSERT INTO `soal_skor` (`id_soal_skor`, `id_soal`, `norma`, `warna`, `skor_awal`, `skor_akhir`, `rekomendasi`) VALUES
(1, 1, 'Normal', 'info', 0, 9, 'Pertahankan terus hasil Anda'),
(2, 1, 'Ringan', 'info', 10, 13, 'Akses Layanan Psikologi'),
(3, 1, 'Sedang', 'primary', 14, 20, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(4, 1, 'Berat', 'warning', 21, 27, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(5, 1, 'Sangat Berat', 'danger', 28, 999, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(6, 2, 'Normal', 'info', 0, 7, 'Pertahankan terus hasil Anda'),
(7, 2, 'Ringan', 'info', 8, 9, 'Akses Layanan Psikologi'),
(8, 2, 'Sedang', 'primary', 10, 14, 'Konsultasi lebih lanjut ke psikolog'),
(9, 2, 'Berat', 'warning', 15, 19, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(10, 2, 'Sangat Berat', 'danger', 20, 999, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(11, 4, 'Normal', 'info', 0, 14, 'Pertahankan terus hasil Anda'),
(12, 4, 'Ringan', 'info', 15, 18, 'Akses Layanan Psikologi'),
(13, 4, 'Sedang', 'primary', 19, 25, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(14, 4, 'Berat', 'warning', 26, 33, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(15, 4, 'Sangat Berat', 'danger', 34, 999, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(16, 5, 'Gejala Tidak Ada', 'default', 0, 5, 'Akses Layanan Psikologi'),
(17, 5, 'Gejala Minimal', 'default', 6, 10, 'Akses Layanan Psikologi'),
(18, 5, 'Gejala Sementara', 'default', 11, 20, 'Akses Layanan Psikologi'),
(19, 5, 'Gejala Ringan & Menetap', 'warning', 21, 30, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(20, 5, 'Gejala Sedang (Moderat)', 'warning', 31, 40, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(21, 5, 'Gejala Berat (Serious)', 'warning', 41, 50, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(22, 5, 'Disabilitas Berat', 'danger', 51, 60, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(23, 5, 'Disabilitas Berat', 'danger', 61, 70, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(24, 5, 'Disabilitas Berat', 'danger', 71, 80, 'Konsultasi Lebih Lanjut Ke Psikolog'),
(25, 6, 'Borderline', 'default', 0, 79, 'Tidak ada'),
(26, 6, 'Low Average (Di bawah rata-rata)', 'default', 80, 90, 'Tidak ada'),
(27, 6, 'Average (Rata-rata)', 'warning', 91, 110, 'Tidak ada'),
(28, 6, 'High Average', 'info', 111, 119, 'Tidak ada'),
(29, 6, 'Superior', 'info', 120, 127, 'Tidak ada'),
(30, 6, 'Very Superior', 'success', 128, 140, 'Tidak ada'),
(31, 6, 'Genius', 'danger', 141, 999, 'Tidak ada');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` tinyint(2) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `untuk` enum('layanan','payment') NOT NULL DEFAULT 'layanan',
  `warna` char(10) DEFAULT NULL,
  `set_default` enum('0','1') NOT NULL DEFAULT '0',
  `code` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`, `untuk`, `warna`, `set_default`, `code`) VALUES
(1, 'Menunggu Bayar', 'payment', 'warning', '1', '201'),
(2, 'Diterima', 'payment', 'success', '0', '200'),
(3, 'Ditolak', 'payment', 'danger', '0', '202'),
(4, 'Expired', 'payment', 'danger', '0', '202'),
(5, 'DIbatalkan', 'payment', 'warning', '0', '202'),
(6, 'Refund', 'payment', 'info', '0', '200'),
(7, 'Menunggu Penjadwalan', 'layanan', 'warning', '0', NULL),
(8, 'Sedang Berlangsung', 'layanan', 'info', '0', NULL),
(9, 'Sudah Selesai', 'layanan', 'success', '0', NULL),
(10, 'Tidak ada tanggapan', 'layanan', 'danger', '0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status_payment`
--

CREATE TABLE `status_payment` (
  `id_status_payment` int(4) NOT NULL,
  `status_payment` varchar(50) NOT NULL,
  `id_gateway` int(3) NOT NULL,
  `id_status` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status_payment`
--

INSERT INTO `status_payment` (`id_status_payment`, `status_payment`, `id_gateway`, `id_status`) VALUES
(1, 'pending', 2, 1),
(2, 'settlement', 2, 2),
(3, 'deny', 2, 3),
(4, 'expire', 2, 4),
(5, 'cancel', 2, 5),
(6, 'refund', 2, 6),
(7, '00', 1, 2),
(8, '01', 1, 1),
(9, '02', 1, 5),
(10, '00', 3, 2),
(11, '01', 3, 1),
(12, '02', 3, 5),
(13, 'SUCCEEDED', 4, 2),
(14, 'PENDING', 4, 1),
(15, 'FAILED', 4, 5),
(16, 'challenge', 6, 1),
(17, 'accept', 6, 2),
(18, 'anything', 6, 3),
(19, 'SUCCEEDED', 5, 2),
(20, 'PENDING', 5, 1),
(21, 'FAILED', 5, 5),
(22, 'pending', 9, 1),
(23, 'settlement', 9, 2),
(24, 'deny', 9, 3),
(25, 'expire', 9, 4),
(26, 'cancel', 9, 5),
(27, 'refund', 9, 6),
(28, 'pending', 8, 1),
(29, 'settlement', 8, 2),
(30, 'deny', 8, 3),
(31, 'expire', 8, 4),
(32, 'cancel', 8, 5),
(33, 'refund', 8, 6),
(34, 'pending', 11, 1),
(35, 'settlement', 11, 2),
(36, 'deny', 11, 3),
(37, 'expire', 11, 4),
(38, 'cancel', 11, 5),
(39, 'refund', 11, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts`
--

CREATE TABLE `tbl_posts` (
  `post_id` int(11) NOT NULL,
  `author_id` int(3) DEFAULT NULL,
  `question` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_posts`
--

INSERT INTO `tbl_posts` (`post_id`, `author_id`, `question`, `created_at`) VALUES
(1, 3, 'Tolong, perut saya sakit', '2022-07-29 04:19:10'),
(5, 3, 'test', '2022-07-29 04:23:27'),
(6, 27, 'Testing', '2022-07-29 05:53:00'),
(8, 4, 'tolong saya demam', '2022-07-29 06:53:08'),
(9, 34, 'Tolong, badan anak saya demam', '2022-07-29 07:42:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_posts_comments`
--

CREATE TABLE `tbl_posts_comments` (
  `comment_id` int(11) NOT NULL,
  `comment_index` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `author_id` int(3) DEFAULT NULL,
  `reply` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_posts_comments`
--

INSERT INTO `tbl_posts_comments` (`comment_id`, `comment_index`, `post_id`, `author_id`, `reply`, `created_at`) VALUES
(1, 1, 5, 4, 'Ok, Diterima.', '2022-07-29 06:43:01'),
(2, 2, 1, 4, 'saya buatkan resep dulu ya.', '2022-07-29 07:15:07'),
(3, 1, 8, 4, 'baik.', '2022-07-29 07:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `transaction_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `id_patient` int(3) NOT NULL,
  `card_type` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `masked_card` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `fraud_status` varchar(50) NOT NULL,
  `approval_code` varchar(50) NOT NULL,
  `transaction_status` varchar(50) NOT NULL,
  `status_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`transaction_id`, `order_id`, `id_patient`, `card_type`, `bank`, `masked_card`, `amount`, `payment_type`, `date`, `fraud_status`, `approval_code`, `transaction_status`, `status_code`) VALUES
('0fc4dee3-7981-4d7a-a7f9-20a3f5e05b86', '206004139', 27, 'debit', 'mandiri', '44111111-1118', '630000.00', 'credit_card', '2022-07-29 10:04:21', 'accept', '1659063861902', 'capture', '200'),
('15b54bdc-fee9-4231-a485-989be9830d35', '1946202923', 3, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 12:44:13', 'accept', '1658900653866', 'capture', '200'),
('1a83499b-3131-4c3d-b073-f4d75026a42f', '548042426', 3, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 13:40:39', 'accept', '1658904039916', 'capture', '200'),
('1cafa030-2f88-4c8f-8357-04afa8663743', '1167212462', 3, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 13:37:10', 'accept', '1658903831091', 'capture', '200'),
('2203c114-1955-497f-9cc2-e468b168dd47', '554904326', 27, 'credit', 'mandiri', '48111111-1114', '630000.00', 'credit_card', '2022-07-29 10:15:32', 'accept', '1659064533009', 'capture', '200'),
('4a916d6a-9948-41c3-b153-8de0548c46d0', '272415522', 3, 'credit', 'cimb', '48111111-1114', '630000.00', 'credit_card', '2022-07-27 09:00:08', 'accept', '1658887208816', 'capture', '200'),
('51313e68-a973-411a-9fb7-a73cdd3a200d', '2123079935', 27, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 13:45:00', 'accept', '1658904301022', 'capture', '200'),
('5a841a96-8595-4561-aa68-5e3c0209dea6', '231861883', 34, 'credit', 'mandiri', '48111111-1114', '630000.00', 'credit_card', '2022-07-29 14:44:33', 'accept', '1659080673892', 'capture', '200'),
('67c75e15-101e-472c-898e-dcbae22f7c64', '1808504648', 27, 'credit', 'mandiri', '48111111-1114', '100000.00', 'credit_card', '2022-07-29 10:07:10', 'accept', '1659064031262', 'capture', '200'),
('80a85cda-a5fb-4757-a3f9-d9f48c785860', '68442116', 3, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 12:25:57', 'accept', '1658899557466', 'capture', '200'),
('9e01e7d2-02dd-4b4a-8aef-ea9d0d877a4e', '61530319', 34, 'credit', 'mandiri', '48111111-1114', '100000.00', 'credit_card', '2022-07-29 14:46:54', 'accept', '1659080815063', 'capture', '200'),
('c4e6f229-a743-45c4-a976-af80a4c7854e', '458516294', 25, 'credit', 'cimb', '48111111-1114', '630000.00', 'credit_card', '2022-07-20 15:04:26', 'accept', '1658304266605', 'capture', '200'),
('dc08ba05-1b2f-4d82-99c7-be7bc88a3951', '1954615886', 3, 'credit', 'cimb', '48111111-1114', '100000.00', 'credit_card', '2022-07-27 13:34:18', 'accept', '1658903659012', 'capture', '200'),
('df94aa54-f65e-49ee-915e-d094461111e4', '1941292993', 3, 'credit', 'cimb', '48111111-1114', '630000.00', 'credit_card', '2022-07-27 08:58:29', 'accept', '1658887109463', 'capture', '200'),
('f5837b1a-4616-4c5a-9164-2371997c8d7f', '1811148543', 27, 'credit', 'mandiri', '48111111-1114', '100000.00', 'credit_card', '2022-07-29 10:18:01', 'accept', '1659064681545', 'capture', '200');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_akun`
--

CREATE TABLE `tipe_akun` (
  `id_tipe_akun` int(2) NOT NULL,
  `tipe_akun` varchar(40) NOT NULL,
  `warna` varchar(15) NOT NULL DEFAULT 'success',
  `is_aktif` enum('0','1') NOT NULL DEFAULT '0',
  `biaya` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_akun`
--

INSERT INTO `tipe_akun` (`id_tipe_akun`, `tipe_akun`, `warna`, `is_aktif`, `biaya`) VALUES
(1, 'Free', 'info', '1', 0),
(2, 'Premium', 'success', '1', 25000),
(3, 'Platinum', 'primary', '0', 30000),
(4, 'Gold', 'warning', '0', 35000),
(5, 'Full Akses', 'danger', '0', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `tipe_saldo`
--

CREATE TABLE `tipe_saldo` (
  `id_tipe` int(3) NOT NULL,
  `tipe` varchar(100) DEFAULT NULL,
  `jenis` enum('pemasukan','pengeluaran') NOT NULL DEFAULT 'pengeluaran',
  `untuk` enum('user','sistem') NOT NULL DEFAULT 'user',
  `kategori` varchar(30) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipe_saldo`
--

INSERT INTO `tipe_saldo` (`id_tipe`, `tipe`, `jenis`, `untuk`, `kategori`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'Pembayaran project dari owner', 'pemasukan', 'user', 'Pembayaran', '2021-01-26 15:00:17', 1, NULL, NULL),
(2, 'Pembayaran Selesai Project dari Owner ke Worker', 'pemasukan', 'user', 'Pembayaran', '2020-10-12 10:32:52', NULL, NULL, NULL),
(3, 'Potongan project selesai (7%)', 'pemasukan', 'sistem', 'Potongan Project', '2021-04-21 01:25:48', 1, NULL, NULL),
(4, 'Pencarian dana langsung potongan 7000', 'pengeluaran', 'user', 'Withdrawal', '2021-04-21 01:58:33', 1, NULL, NULL),
(5, 'Biaya Admin Withdraw', 'pemasukan', 'sistem', 'Potongan', '2020-10-14 22:40:33', 1, NULL, NULL),
(6, 'Saldo Withdraw', 'pemasukan', 'user', 'Pengeluaran Withdrawal', '2020-10-15 01:15:57', 1, NULL, NULL),
(7, 'Bayar biaya admin withdraw', 'pengeluaran', 'user', 'Biaya Transfer', '2021-04-21 01:26:54', 1, NULL, NULL),
(8, 'Pendapatan Owner dari arbitrasi dengan worker', 'pemasukan', 'user', 'Pendapatan', '2020-10-20 00:32:25', 1, NULL, NULL),
(9, 'Pendapatan Worker dari arbitrasi dengan Owner', 'pemasukan', 'user', 'Pendapatan', '2020-10-20 00:35:43', 1, NULL, NULL),
(10, 'Pembayaran project melalui saldo', 'pengeluaran', 'user', 'Pembayaran', '2021-01-15 06:35:26', 1, NULL, NULL),
(11, 'Refund saldo transaksi', 'pemasukan', 'user', NULL, '2021-02-14 13:07:12', 1, NULL, NULL),
(12, 'Penalty saldo transaksi', 'pengeluaran', 'user', NULL, '2021-02-14 13:07:32', 1, NULL, NULL),
(13, 'Pembayaran Project Selesai', 'pengeluaran', 'user', 'Pembayaran', '2021-04-10 08:31:48', 1, NULL, NULL),
(14, 'Potongan project selesai (7%)', 'pengeluaran', 'user', 'Pembayaran', '2021-04-21 01:26:19', 1, NULL, NULL),
(15, 'Pembayaran owner setelah arbitrasi selesai', 'pengeluaran', 'user', NULL, '2021-04-11 08:58:01', 1, NULL, NULL),
(16, 'Kredit saldo', 'pemasukan', 'user', NULL, '2021-04-22 10:00:20', 1, NULL, NULL),
(17, 'Pembayaran project melalui saldo', 'pemasukan', 'user', NULL, '2021-04-21 11:18:53', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id_token` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `token` varchar(6) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_jenis_tes` int(3) NOT NULL,
  `is_pakai` enum('0','1') NOT NULL DEFAULT '0',
  `mulai` datetime DEFAULT NULL,
  `selesai` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id_token`, `id_transaksi`, `token`, `id_user`, `id_jenis_tes`, `is_pakai`, `mulai`, `selesai`) VALUES
(1, 1, 'ECE6AD', 1, 2, '0', NULL, NULL),
(2, 5, 'C07AAD', 1, 1, '1', '2021-06-15 09:22:38', '2021-06-15 10:22:38'),
(3, 6, '4F75F7', 1, 1, '1', '2021-06-15 10:44:30', '2021-06-15 11:44:30'),
(4, 8, 'D0BBF1', 1, 5, '1', '2021-06-15 05:30:18', '2021-06-15 06:30:18'),
(5, 9, '3D6855', 1, 2, '1', '2021-06-15 10:38:36', '2021-06-15 11:38:36'),
(6, 11, '11EFAC', 6, 6, '0', NULL, NULL),
(7, 14, '1C8AC4', 6, 2, '0', NULL, NULL),
(8, 13, '238C49', 1, 2, '1', '2021-06-14 19:52:06', '2021-06-14 20:52:06'),
(9, 16, '46A474', 4, 5, '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `order_id` varchar(30) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `id_jenis_tes` int(3) DEFAULT NULL,
  `id_status` tinyint(2) NOT NULL,
  `id_gateway` int(3) NOT NULL,
  `biller_code` varchar(15) DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL,
  `payment_code` varchar(200) DEFAULT NULL,
  `payment_url` text DEFAULT NULL,
  `qrcode` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `order_id`, `amount`, `id_jenis_tes`, `id_status`, `id_gateway`, `biller_code`, `payment_type`, `payment_code`, `payment_url`, `qrcode`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'I-16424144946808', 100000, 11, 2, 9, '70012', 'echannel', '198973229844', NULL, NULL, '2022-01-17 17:15:02', 1, '2022-01-17 17:17:04', NULL),
(5, 'I-16424223917061', 0, 11, 2, 11, NULL, NULL, NULL, NULL, NULL, '2022-01-17 19:26:31', 1, NULL, NULL),
(6, 'I-1642422992112', 0, 11, 2, 11, NULL, NULL, NULL, NULL, NULL, '2022-01-17 19:36:32', 1, NULL, NULL),
(7, 'I-16424275002024', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-17 20:51:40', 1, NULL, NULL),
(8, 'I-16424278925153', 30000, 11, 2, 8, NULL, 'bank_transfer', '9886035674833937', NULL, NULL, '2022-01-17 20:58:12', 1, '2022-01-17 20:58:39', NULL),
(9, 'I-16424408916368', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 00:34:51', 7, NULL, NULL),
(10, 'I-16424415871295', 0, 11, 2, 8, NULL, NULL, NULL, NULL, NULL, '2022-01-18 00:46:27', 7, NULL, NULL),
(11, 'I-16424460221461', 0, 11, 2, 9, NULL, NULL, NULL, NULL, NULL, '2022-01-18 02:00:22', 7, NULL, NULL),
(12, 'I-16424464561202', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 02:07:36', 7, NULL, NULL),
(13, 'I-16424474684071', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 02:24:28', 7, NULL, NULL),
(14, 'I-16424479305063', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 02:32:10', 9, NULL, NULL),
(23, 'I-16424490508650', 0, 11, 2, 8, NULL, NULL, NULL, NULL, NULL, '2022-01-18 02:50:50', 7, NULL, NULL),
(25, 'I-16424496283752', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 03:00:28', 7, NULL, NULL),
(27, 'I-16424502582445', 0, 11, 2, 11, NULL, NULL, NULL, NULL, NULL, '2022-01-18 03:10:58', 7, NULL, NULL),
(30, 'I-16424511109951', 0, 11, 2, 8, NULL, NULL, NULL, NULL, NULL, '2022-01-18 03:25:10', 7, NULL, NULL),
(31, 'I-16424721872913', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 09:16:27', 9, NULL, NULL),
(32, 'I-16424726013780', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 09:23:21', 9, NULL, NULL),
(33, 'I-1642472826294', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 09:27:06', 9, NULL, NULL),
(34, 'I-16424730338039', 0, 11, 2, 9, NULL, NULL, NULL, NULL, NULL, '2022-01-18 09:30:33', 10, NULL, NULL),
(36, 'I-16424798221869', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 11:23:42', 7, NULL, NULL),
(37, 'I-16424802594958', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 11:30:59', 11, NULL, NULL),
(38, 'I-16424803602486', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 11:32:40', 8, NULL, NULL),
(39, 'I-16424808079778', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 11:40:07', 12, NULL, NULL),
(40, 'I-16424816838631', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 11:54:43', 12, NULL, NULL),
(41, 'I-16424826081977', 0, 11, 2, 2, NULL, NULL, NULL, NULL, NULL, '2022-01-18 12:10:08', 8, NULL, NULL),
(44, 'I-16426893413078', 0, 11, 2, 8, NULL, NULL, NULL, NULL, NULL, '2022-01-20 21:35:41', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL DEFAULT 'Laki-Laki',
  `alamat` varchar(150) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `kode_unik` varchar(17) NOT NULL,
  `id_level` int(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `jk`, `alamat`, `tgl_lahir`, `email`, `no_hp`, `foto`, `status`, `kode_unik`, `id_level`, `created_at`, `created_by`, `updated_at`, `updated_by`) VALUES
(1, 'admin', 'c99870ce8696fb93c7f9798523eecf1d1046b86aba871ea19447e3021278b2fd94ae6470d2f7c926f940e0c08550c529d7380ff6f3dc12b8b5d5de8bc7f14864SRdZplo0P94JW+eDZMuRfEfZFAfrvTa9gHxt3E/0a/g=', 'Muhammad Maghfur', 'Laki-Laki', 'Indonesia', '1998-08-17', 'admin', '6285755056530', 'fotoku2.jpg', '1', 'SPR070321299', 1, '2020-09-04 18:33:25', NULL, '2021-03-07 20:04:20', 1),
(2, 'tisafaa@gmail.com', 'c99870ce8696fb93c7f9798523eecf1d1046b86aba871ea19447e3021278b2fd94ae6470d2f7c926f940e0c08550c529d7380ff6f3dc12b8b5d5de8bc7f14864SRdZplo0P94JW+eDZMuRfEfZFAfrvTa9gHxt3E/0a/g=', 'Tisa Fatichul Hanif', 'Perempuan', 'Plandaan Jombang', '1997-06-27', 'tisafaa@gmail.com', '6285851241533', NULL, '1', 'SPR070321290', 1, '2021-03-07 18:21:36', 1, '2021-03-07 19:50:17', 1),
(3, '5123456789123456', '$2y$10$FggsOE/07WWsoopMo0MA.O/ShMtM93dIyWUcKjrfDsK6TQ9uTU6LC', 'Ainul', 'Laki-Laki', NULL, '1988-03-01', 'ainul@gmail.com', '6285755056530', NULL, '1', 'PSN162201175', 5, '2021-05-26 13:49:15', NULL, '2021-05-26 13:49:15', NULL),
(4, 'Abdul M. Shiddiq', '$2y$10$FggsOE/07WWsoopMo0MA.O/ShMtM93dIyWUcKjrfDsK6TQ9uTU6LC', 'Abdul Ma\'sum Shiddiq', '', NULL, '2021-06-05', 'dokter@gmail.com', '6281234567890', NULL, '1', 'PSN16228516100001', 2, '2021-06-05 07:06:50', NULL, '2021-06-05 07:06:50', NULL),
(5, 'Test 3', '$2y$10$FggsOE/07WWsoopMo0MA.O/ShMtM93dIyWUcKjrfDsK6TQ9uTU6LC', 'Tes 3', '', NULL, '2021-06-06', 'test3@gmail.com', '6285755056530', NULL, '1', 'PSN16229565480002', 5, '2021-06-06 12:15:48', NULL, '2021-06-06 12:15:48', NULL),
(6, '3517514161727656', '6599de9391685ccc94d195bedf68f32f033d149ba0b8b5a93dc5bc7064e1e6af3d0d18635f63b27f75dacc858053965e0e624856a30f02661e1a67e243a4f4454RQ6IPXns2Nye13GruNoK/4+dm6+H1w6MlIcze179/M=', 'Chandra Sukma Anugrah', '', NULL, '2021-03-10', '3517514161727656', '6282229998117', NULL, '1', 'PSN16229579930003', 5, '2021-06-06 12:39:53', NULL, '2021-06-06 12:39:53', NULL),
(7, 'ziepro7@gmail.com', '9cfadcb4aad29eb7b2c2453fa2df9c6c3d70c3f21ccd37467b3fb931087ef376f7a5bbf96d260d4b744d6aca4c5f64735b9262ac375d6efaea2b87c4783995c9vJ1LWg+DjARPi+i7/2EAyzaO9NZDKHwIlij7Zx/5R/0=', 'Chandra Sukma Anugrah', 'Laki-Laki', NULL, '1988-10-31', 'ziepro7@gmail.com', '6282229998117', NULL, '1', 'PSN16424303290004', 5, '2022-01-17 21:38:49', NULL, '2022-01-17 21:38:49', NULL),
(8, 'rsudjombang@gmail.com', 'ac9535cf981e69d59861fc23395a89ac2d70a0472cb8fa841be555caea0ba266e2c629943a376ac48e587de89c9e2ed0e6d0a26a74d71579071a3c9cc88155cf7LxNV4cnPSn+XuF5aCyVRlqtR0TihXZOUSBt+gAbxlg=', 'Admin Gizi', 'Laki-Laki', 'RSUD Jombang', '1988-10-21', 'rsudjombang@gmail.com', '6282229998117', NULL, '1', 'ROG170122458', 0, '2022-01-17 22:06:43', 1, NULL, NULL),
(9, 'wiwitdenny@gmail.com', 'b61e6d831f6eba523c9ae29ebf42db81b3dcd9c78868e082a575a2161711a8b83440b44076b11370ded392dd1ec0476f39b0139492e7619f96dc2c270304724djqqTLxwZT48dMYp54Fb7aD/JX/QWhSPYJn3CZ2YtG6U=', 'Wiwit', 'Perempuan', NULL, '1989-05-02', 'wiwitdenny@gmail.com', '6282228880627', NULL, '1', 'PSN16424478360005', 2, '2022-01-18 02:30:36', NULL, '2022-01-18 02:30:36', NULL),
(10, 'zulfa@gmail.com', '520d19d803f067ed3fcd29d477ef2d343e1b0a8ec98d4d14b1800e7dc8de2e811475ee17d72649553fba43e1a2a16a21776b7ba7c89c7971755ad8edae596b37wz5JOwjdtLsmoSpwgIef5aY+YdtX83W3XS0T4z3Vnck=', 'fatihatur rosyidah', 'Perempuan', NULL, '2022-01-18', 'zulfa@gmail.com', '628555555555555', NULL, '1', 'PSN16424729800006', 2, '2022-01-18 09:29:40', NULL, '2022-01-18 09:29:40', NULL),
(11, 'litagizi@gmail.com', '09553524168b60c301925975e481f334cf057d7889f758416845b31b8f12b10767540ea3694cc6d2d36d532bbcd108a748ce6709b142718ed7bd2331bc7fe849FqAFIhuTtVuqWxKiY/nl3/0SCR553/ZY6ZnGv2HRFik=', 'litagizi@gmail.com', 'Perempuan', NULL, '2022-01-18', 'litagizi@gmail.com', '6285755202535', NULL, '1', 'PSN16424800650007', 5, '2022-01-18 11:27:45', NULL, '2022-01-18 11:27:45', NULL),
(12, 'jackgull18@gmail.com', '1de01bce776722786e335144606fc95b456ffa355b848adee0569c8bf5e2155cf7a3f7a5808b57fc0bc3f89aacb9ba7d78a3e65499eff7dc87fed00f1783d84f8KoTiaaOhUmU74QObh67GuUU84LN2iLtT4I7FSqxDO8=', 'Fathony', 'Laki-Laki', NULL, '2021-07-30', 'jackgull18@gmail.com', '6285653986752', NULL, '1', 'PSN16424807020008', 3, '2022-01-18 11:38:22', NULL, '2022-01-18 11:38:22', NULL),
(17, 'adamfriska2905@gmail.com', '', '12washere', 'Laki-Laki', NULL, NULL, 'adamfriska2905@gmail.com', NULL, NULL, '1', '', 0, '2022-07-18 16:49:18', NULL, NULL, NULL),
(19, 'mizunumas27@gmail.com', '', 'Novan Candra', 'Laki-Laki', NULL, NULL, 'mizunumas27@gmail.com', NULL, NULL, '1', 'Novan Candramizun', 0, '2022-07-18 16:51:55', NULL, NULL, NULL),
(20, 'clementinemuijs@gmail.com', '', 'Miryam Clementine Aksama', 'Laki-Laki', NULL, NULL, 'clementinemuijs@gmail.com', NULL, NULL, '1', 'Miryam Clementine', 0, '2022-07-18 16:52:14', NULL, NULL, NULL),
(21, 'novancandra27@gmail.com', '', 'Mizunuma', 'Laki-Laki', NULL, NULL, 'novancandra27@gmail.com', NULL, NULL, '1', 'Mizunumanovancand', 0, '2022-07-18 16:54:49', NULL, NULL, NULL),
(22, '11111@gmail.com', '$2y$10$oueXDhkz3kqWzD1gQtwCruJh1ooa9Bk7YWLVXIshQSUXwOjjLBJGm', 'Ayam', 'Laki-Laki', NULL, '1111-11-11', '11111@gmail.com', '11111111111', NULL, '1', 'Ayam11111@gmail.c', 0, '2022-07-19 14:40:36', NULL, NULL, NULL),
(23, '22222@gmail.com', '$2y$10$RQjQGF46y3qvoOcDOOrLPOV0NLfIsH7pXbkPLC3e6BSgj3/BhWd02', '222222', 'Laki-Laki', NULL, '2222-02-22', '22222@gmail.com', '111111', NULL, '1', '22222222222', 0, '2022-07-19 14:43:03', NULL, NULL, NULL),
(24, 'test@gmail.com', '$2y$10$IPBEhJLKWp5Vqu58QuTTS.7DRFlkLxFZrO9.eum0PSKhmP/MrN46u', 'Test', 'Laki-Laki', NULL, '1111-11-11', 'test@gmail.com', '1111111111111', NULL, '1', 'Testtest', 3, '2022-07-19 15:07:38', NULL, NULL, NULL),
(25, 'Test2@gmail.com', '$2y$10$egvERvkHfTSxxIGhBHod0OE6UgZbmMG6aLJ6RCWYq.xWu6PAFulwS', 'Test2', 'Laki-Laki', NULL, '2222-02-11', 'Test2@gmail.com', '1111111111111', NULL, '1', 'Test2Test2', 3, '2022-07-19 15:14:10', NULL, NULL, NULL),
(26, 'adminmagang', '$2y$10$FggsOE/07WWsoopMo0MA.O/ShMtM93dIyWUcKjrfDsK6TQ9uTU6LC', 'Admin Magang', 'Laki-Laki', NULL, '1111-11-11', 'adminmagang@gmail.com', '1111111111111', NULL, '1', 'Test3@gmail.comTe', 1, '2022-07-19 15:17:28', NULL, NULL, NULL),
(27, 'vincentiaindri12@gmail.com', '$2y$10$tolZ1pitUhxzIL3aB4bNS.KwL/3ZCnwzTXptpes7t6RdIyv/fyIX.', 'Vincentia Indri Octaviani', 'Perempuan', NULL, '2000-10-30', 'vincentiaindri12@gmail.com', '162636372818', NULL, '1', 'VincentiaIndriOct', 3, '2022-07-19 16:27:39', NULL, NULL, NULL),
(28, '19430200001@dinamika.ac.id', '$2y$10$oXmRwXUnhcJXRO3uLPdYJuAhSAkD.d85n.PwHaw8y/t1U6i8cAZWO', 'Miryam Clementine Aksama', 'Perempuan', NULL, '2001-11-07', '19430200001@dinamika.ac.id', '083849644204', NULL, '1', 'MiryamClementineA', 5, '2022-07-19 16:29:09', NULL, NULL, NULL),
(29, 'lusiana.19069@mhs.unesa.ac.id', '$2y$10$q3tZPnSOCqCrF75PaxW9l.MCR0iSiDJPqZD/UuQn5Neu66dLCKJQq', 'Lusiana Anggraini', 'Perempuan', NULL, '2001-04-18', 'lusiana.19069@mhs.unesa.ac.id', '083854206916', NULL, '1', 'LusianaAnggrainil', 5, '2022-07-19 16:29:21', NULL, NULL, NULL),
(30, 'Test9@gmail.com', '$2y$10$jlx2S8cEWinn2rypzurTeOQ4fKJwVMG4yboiaBgIo6eupbElE2iiG', 'Test9', 'Laki-Laki', NULL, '1111-11-11', 'Test9@gmail.com', '1111111111111', NULL, '1', 'Test9Test9', 5, '2022-07-19 16:39:41', NULL, NULL, NULL),
(31, 'Test10@gmail.com', '$2y$10$XM9h4P7iUS7pQNPdRrIC1OQ5HuhyJoAOGnsf.XhOGh9jsnhNAKkSa', 'Test10', 'Laki-Laki', NULL, '1111-11-11', 'Test10@gmail.com', '1111111111111', NULL, '1', 'Test10Test10', 0, '2022-07-19 16:41:13', NULL, NULL, NULL),
(33, 'uyeyoman59@gmail.com', '', '134- Rifki Setiawan', 'Laki-Laki', NULL, NULL, 'uyeyoman59@gmail.com', NULL, NULL, '1', '134-RifkiSetiawan', 0, '2022-07-20 18:46:39', NULL, NULL, NULL),
(34, 'vincentia.indri.octaviani@gmail.com', '$2y$10$JbsEcKn6IJkB/9kUf5nEyuOR/8/wMFOf0P1J2/6pb3Oy0kh98A49S', 'Vincentia', 'Perempuan', NULL, '2000-10-30', 'vincentia.indri.octaviani@gmail.com', '628135914203', NULL, '1', 'Vincentiavincenti', 5, '2022-07-29 14:40:30', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id_log` int(11) NOT NULL,
  `id_user` int(3) NOT NULL,
  `last_in` datetime NOT NULL DEFAULT current_timestamp(),
  `ip_address` varchar(50) DEFAULT NULL,
  `browser` varchar(50) DEFAULT NULL,
  `os` varchar(100) DEFAULT NULL,
  `device` varchar(30) DEFAULT NULL,
  `user_agent` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_oauth`
--

CREATE TABLE `user_oauth` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_oauth`
--

INSERT INTO `user_oauth` (`id`, `name`, `email`, `password`, `image`) VALUES
(8, 'JVL code', 'jvlcodevideos@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AOh14GgeYKv1vcfRvqlV_hF1C9jUs_KTWjjoWk28J1TM=s96-c'),
(16, 'Mizunuma', 'novancandra27@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AFdZucp-urSbHItNsrTK_LWP6gfVOGd1zwH39vcxmnMHHA=s96-c'),
(17, '12washere', 'adamfriska2905@gmail.com', '', 'https://lh3.googleusercontent.com/a-/AFdZucpm5sXT7d41wTLLaT3qQYhaGFL7sMPQ0CbdSj3L5Q=s96-c');

-- --------------------------------------------------------

--
-- Table structure for table `xendit`
--

CREATE TABLE `xendit` (
  `key_name` varchar(100) NOT NULL,
  `secret_key` text DEFAULT NULL,
  `verification_token` text DEFAULT NULL,
  `sandbox` enum('0','1') NOT NULL DEFAULT '1',
  `durasi_payment` char(4) NOT NULL DEFAULT '24',
  `tipe_durasi` enum('days','hours','minutes') NOT NULL DEFAULT 'minutes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `xendit`
--

INSERT INTO `xendit` (`key_name`, `secret_key`, `verification_token`, `sandbox`, `durasi_payment`, `tipe_durasi`) VALUES
('infak', 'xnd_production_uRBTxdI9Dl3kBj2WYsi3ks6HNSupLT5JhLeUumKzk70stFOuBsNt1PVzxvGQZIa5', 'xnd_public_production_w0PizF4lxPU2pUztxeIlyqjykel1E6qBJeaSro1DB6wfva77cM60YKJi7X4', '1', '1', 'hours');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asessment`
--
ALTER TABLE `asessment`
  ADD PRIMARY KEY (`id_asessment`),
  ADD KEY `id_asessment_kategori` (`id_asessment_kategori`);

--
-- Indexes for table `asessment_kategori`
--
ALTER TABLE `asessment_kategori`
  ADD PRIMARY KEY (`id_asessment_kategori`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `data_soal`
--
ALTER TABLE `data_soal`
  ADD PRIMARY KEY (`id_data_soal`);

--
-- Indexes for table `detailkonsultasi`
--
ALTER TABLE `detailkonsultasi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `FK_PasienID` (`id_pasien`),
  ADD KEY `FK_DETAIL_IDTRANSAKSI` (`transaction_id`);

--
-- Indexes for table `file_uploader`
--
ALTER TABLE `file_uploader`
  ADD PRIMARY KEY (`id_file`),
  ADD KEY `id_user` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `gateway`
--
ALTER TABLE `gateway`
  ADD PRIMARY KEY (`id_gateway`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`),
  ADD KEY `id_level` (`id_level`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`id_icon`);

--
-- Indexes for table `info_mail`
--
ALTER TABLE `info_mail`
  ADD PRIMARY KEY (`id_mail`);

--
-- Indexes for table `info_sistem`
--
ALTER TABLE `info_sistem`
  ADD PRIMARY KEY (`id_info`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jenis_layanan` (`id_jenis_layanan`);

--
-- Indexes for table `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  ADD PRIMARY KEY (`id_jenis_layanan`);

--
-- Indexes for table `jenis_tes`
--
ALTER TABLE `jenis_tes`
  ADD PRIMARY KEY (`id_jenis_tes`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `id_jenis_layanan` (`id_jenis_layanan`);

--
-- Indexes for table `jenis_tes_akses`
--
ALTER TABLE `jenis_tes_akses`
  ADD KEY `id_tipe_akun` (`id_tipe_akun`),
  ADD KEY `id_jenis_tes` (`id_jenis_tes`);

--
-- Indexes for table `jenis_tes_biaya`
--
ALTER TABLE `jenis_tes_biaya`
  ADD PRIMARY KEY (`id_jenis_tes_biaya`),
  ADD KEY `id_jenis_tes` (`id_jenis_tes`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori_berita`);

--
-- Indexes for table `katering_diet`
--
ALTER TABLE `katering_diet`
  ADD PRIMARY KEY (`id_katering_diet`);

--
-- Indexes for table `katering_diet_harga`
--
ALTER TABLE `katering_diet_harga`
  ADD PRIMARY KEY (`id_katering_diet_harga`),
  ADD KEY `id_katering_diet_menu` (`id_katering_diet_menu`);

--
-- Indexes for table `katering_diet_menu`
--
ALTER TABLE `katering_diet_menu`
  ADD PRIMARY KEY (`id_katering_diet_menu`),
  ADD KEY `id_katering_diet` (`id_katering_diet`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `FK_DokterID` (`dokter_id`),
  ADD KEY `FK_PatientID` (`patient_id`),
  ADD KEY `FK_DetailID` (`id_detail`),
  ADD KEY `FK_TransactionID` (`transaction_id`);

--
-- Indexes for table `konsultasi_gizi`
--
ALTER TABLE `konsultasi_gizi`
  ADD PRIMARY KEY (`id_konsultasi_gizi`),
  ADD UNIQUE KEY `no_ljk` (`no_ljk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_platform` (`id_platform`),
  ADD KEY `id_jenis_tes` (`id_jenis_tes`);

--
-- Indexes for table `konsultasi_gizi_asessment`
--
ALTER TABLE `konsultasi_gizi_asessment`
  ADD KEY `id_konsultasi_gizi` (`id_konsultasi_gizi`),
  ADD KEY `id_asessment` (`id_asessment`);

--
-- Indexes for table `konversi`
--
ALTER TABLE `konversi`
  ADD PRIMARY KEY (`id_konversi_gizi`);

--
-- Indexes for table `layanan_libur`
--
ALTER TABLE `layanan_libur`
  ADD PRIMARY KEY (`id_layanan_libur`),
  ADD KEY `id_jenis_layanan` (`id_jenis_layanan`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `ljk`
--
ALTER TABLE `ljk`
  ADD PRIMARY KEY (`id_ljk`),
  ADD UNIQUE KEY `id_token` (`id_token`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `ljk_detail`
--
ALTER TABLE `ljk_detail`
  ADD KEY `id_ljk` (`id_ljk`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `log_level`
--
ALTER TABLE `log_level`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_level` (`id_level`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `log_mail`
--
ALTER TABLE `log_mail`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `icon` (`id_icon`);

--
-- Indexes for table `menu_detail`
--
ALTER TABLE `menu_detail`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_menu` (`id_menu`),
  ADD KEY `id_menu_2` (`id_menu`);

--
-- Indexes for table `midtrans`
--
ALTER TABLE `midtrans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD KEY `id_kategori_soal` (`id_jenis_tes`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ljk` (`id_ljk`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `pesan_katering`
--
ALTER TABLE `pesan_katering`
  ADD PRIMARY KEY (`id_pesan_katering`);

--
-- Indexes for table `platform`
--
ALTER TABLE `platform`
  ADD PRIMARY KEY (`id_platform`);

--
-- Indexes for table `program_diet`
--
ALTER TABLE `program_diet`
  ADD PRIMARY KEY (`id_program_diet`);

--
-- Indexes for table `program_diet_harga`
--
ALTER TABLE `program_diet_harga`
  ADD PRIMARY KEY (`id_program_diet_harga`),
  ADD KEY `id_program_diet_list` (`id_program_diet_list`);

--
-- Indexes for table `program_diet_list`
--
ALTER TABLE `program_diet_list`
  ADD PRIMARY KEY (`id_program_diet_list`),
  ADD KEY `id_program_diet` (`id_program_diet`);

--
-- Indexes for table `saldo`
--
ALTER TABLE `saldo`
  ADD PRIMARY KEY (`id_saldo`),
  ADD KEY `id_tipe` (`id_tipe`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `id_project` (`id_transaksi`),
  ADD KEY `id_bank` (`id_bank`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jenis_soal` (`id_jenis_tes`);

--
-- Indexes for table `soal_skor`
--
ALTER TABLE `soal_skor`
  ADD PRIMARY KEY (`id_soal_skor`),
  ADD KEY `id_soal` (`id_soal`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `status_payment`
--
ALTER TABLE `status_payment`
  ADD PRIMARY KEY (`id_status_payment`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_gateway` (`id_gateway`);

--
-- Indexes for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `FK_AUTHORID` (`author_id`);

--
-- Indexes for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `FK_ACOMMENT_UTHORID` (`author_id`),
  ADD KEY `FK_POSTID` (`post_id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `FK_ID_PASIEN` (`id_patient`);

--
-- Indexes for table `tipe_akun`
--
ALTER TABLE `tipe_akun`
  ADD PRIMARY KEY (`id_tipe_akun`);

--
-- Indexes for table `tipe_saldo`
--
ALTER TABLE `tipe_saldo`
  ADD PRIMARY KEY (`id_tipe`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id_token`),
  ADD UNIQUE KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_jenis_tes` (`id_jenis_tes`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `order_id` (`order_id`),
  ADD KEY `id_gateway` (`id_gateway`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_jenis_layanan` (`id_jenis_tes`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `kode_unik` (`kode_unik`),
  ADD KEY `created_by` (`created_by`),
  ADD KEY `updated_by` (`updated_by`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user_oauth`
--
ALTER TABLE `user_oauth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asessment`
--
ALTER TABLE `asessment`
  MODIFY `id_asessment` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `asessment_kategori`
--
ALTER TABLE `asessment_kategori`
  MODIFY `id_asessment_kategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `data_soal`
--
ALTER TABLE `data_soal`
  MODIFY `id_data_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `detailkonsultasi`
--
ALTER TABLE `detailkonsultasi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `file_uploader`
--
ALTER TABLE `file_uploader`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gateway`
--
ALTER TABLE `gateway`
  MODIFY `id_gateway` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `id_icon` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;

--
-- AUTO_INCREMENT for table `info_mail`
--
ALTER TABLE `info_mail`
  MODIFY `id_mail` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `info_sistem`
--
ALTER TABLE `info_sistem`
  MODIFY `id_info` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jenis_layanan`
--
ALTER TABLE `jenis_layanan`
  MODIFY `id_jenis_layanan` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jenis_tes`
--
ALTER TABLE `jenis_tes`
  MODIFY `id_jenis_tes` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jenis_tes_biaya`
--
ALTER TABLE `jenis_tes_biaya`
  MODIFY `id_jenis_tes_biaya` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `katering_diet`
--
ALTER TABLE `katering_diet`
  MODIFY `id_katering_diet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `katering_diet_harga`
--
ALTER TABLE `katering_diet_harga`
  MODIFY `id_katering_diet_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `katering_diet_menu`
--
ALTER TABLE `katering_diet_menu`
  MODIFY `id_katering_diet_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `konsultasi_gizi`
--
ALTER TABLE `konsultasi_gizi`
  MODIFY `id_konsultasi_gizi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `konversi`
--
ALTER TABLE `konversi`
  MODIFY `id_konversi_gizi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `layanan_libur`
--
ALTER TABLE `layanan_libur`
  MODIFY `id_layanan_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ljk`
--
ALTER TABLE `ljk`
  MODIFY `id_ljk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_level`
--
ALTER TABLE `log_level`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_mail`
--
ALTER TABLE `log_mail`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu_detail`
--
ALTER TABLE `menu_detail`
  MODIFY `id_detail` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `midtrans`
--
ALTER TABLE `midtrans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan_katering`
--
ALTER TABLE `pesan_katering`
  MODIFY `id_pesan_katering` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `platform`
--
ALTER TABLE `platform`
  MODIFY `id_platform` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program_diet`
--
ALTER TABLE `program_diet`
  MODIFY `id_program_diet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_diet_harga`
--
ALTER TABLE `program_diet_harga`
  MODIFY `id_program_diet_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `program_diet_list`
--
ALTER TABLE `program_diet_list`
  MODIFY `id_program_diet_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saldo`
--
ALTER TABLE `saldo`
  MODIFY `id_saldo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `soal_skor`
--
ALTER TABLE `soal_skor`
  MODIFY `id_soal_skor` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status_payment`
--
ALTER TABLE `status_payment`
  MODIFY `id_status_payment` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tipe_akun`
--
ALTER TABLE `tipe_akun`
  MODIFY `id_tipe_akun` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipe_saldo`
--
ALTER TABLE `tipe_saldo`
  MODIFY `id_tipe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id_token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_oauth`
--
ALTER TABLE `user_oauth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detailkonsultasi`
--
ALTER TABLE `detailkonsultasi`
  ADD CONSTRAINT `FK_DETAIL_IDTRANSAKSI` FOREIGN KEY (`transaction_id`) REFERENCES `tbl_transaksi` (`transaction_id`),
  ADD CONSTRAINT `FK_PasienID` FOREIGN KEY (`id_pasien`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `katering_diet_harga`
--
ALTER TABLE `katering_diet_harga`
  ADD CONSTRAINT `katering_diet_harga_ibfk_1` FOREIGN KEY (`id_katering_diet_menu`) REFERENCES `katering_diet_menu` (`id_katering_diet_menu`);

--
-- Constraints for table `katering_diet_menu`
--
ALTER TABLE `katering_diet_menu`
  ADD CONSTRAINT `katering_diet_menu_ibfk_1` FOREIGN KEY (`id_katering_diet`) REFERENCES `katering_diet` (`id_katering_diet`);

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `FK_DetailID` FOREIGN KEY (`id_detail`) REFERENCES `detailkonsultasi` (`id_detail`),
  ADD CONSTRAINT `FK_DokterID` FOREIGN KEY (`dokter_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_PatientID` FOREIGN KEY (`patient_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_TransactionID` FOREIGN KEY (`transaction_id`) REFERENCES `tbl_transaksi` (`transaction_id`);

--
-- Constraints for table `tbl_posts`
--
ALTER TABLE `tbl_posts`
  ADD CONSTRAINT `FK_AUTHORID` FOREIGN KEY (`author_id`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `tbl_posts_comments`
--
ALTER TABLE `tbl_posts_comments`
  ADD CONSTRAINT `FK_COMMENT_AUTHORID` FOREIGN KEY (`author_id`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `FK_POSTID` FOREIGN KEY (`post_id`) REFERENCES `tbl_posts` (`post_id`);

--
-- Constraints for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD CONSTRAINT `FK_ID_PASIEN` FOREIGN KEY (`id_patient`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
