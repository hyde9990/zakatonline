-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 25, 2011 at 09:57 
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ta44`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `alamat`, `tanggal_lahir`, `username`, `password`) VALUES
(1, 'admin', 'jl platina', '1994-06-18', 'admin', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `penulis` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `judul_artikel` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `tgl_artikel` date NOT NULL,
  `isi_artikel` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `penulis`, `judul_artikel`, `tgl_artikel`, `isi_artikel`) VALUES
(3, 'rizal', 'Zakat Dalam Alquran', '2011-05-17', 'Zakat dalam Al Qur''anul Karim<br /><br />    * QS (2:43) ("Dan dirikanlah salat, tunaikanlah zakat dan ruku''lah <br />      beserta orang-orang yang ruku''".)<br />    * QS (9:35) (Pada hari dipanaskan emas perak itu dalam neraka jahannam, <br />      lalu dibakar dengannya dahi mereka, lambung dan punggung mereka (<br />      lalu dikatakan) kepada mereka: "Inilah harta bendamu yang kamu simpan untuk dirimu <br />      sendiri, maka rasakanlah sekarang (akibat dari) apa yang kamu simpan itu.")<br />    * QS (6: 141) (Dan Dialah yang menjadikan kebun-kebun yang berjunjung <br />      dan yang tidak berjunjung, pohon korma, tanam-tanaman yang bermacam-macam <br />      buahnya, zaitun dan delima yang serupa (bentuk dan warnanya) dan <br />      tidak sama (rasanya). Makanlah dari buahnya (yang bermacam-macam itu) bila dia berbuah, <br />      dan tunaikanlah haknya di hari memetik hasilnya (dengan disedekahkan <br />      kepada fakir miskin); dan janganlah kamu berlebih-lebihan. Sesungguhnya Allah tidak <br />      menyukai orang yang berlebih-lebihan).<br />	  <br />'),
(4, 'rizal', 'Pengertian Zakat', '2011-05-17', '<br />Zakat<br />Zakat adalah jumlah harta tertentu yang wajib dikeluarkan oleh orang yang <br />beragama Islam dan diberikan kepada golongan yang berhak menerimanya (fakir<br />miskin dan sebagainya) menurut ketentuan yang telah ditetapkan oleh syarak. <br />Zakat merupakan rukun ketiga dari Rukun Islam.<br /><br />Etimologi<br />Secara harfiah zakat berarti "tumbuh", "berkembang", "menyucikan", atau <br />"membersihkan". Sedangkan secara terminologi syari''ah, zakat merujuk pada <br />aktivitas memberikan sebagian kekayaan dalam jumlah dan perhitungan tertentu <br />untuk orang-orang tertentu sebagaimana ditentukan.<br />'),
(5, 'rizal', 'Yang Tidak Berhak Menerima Zakat', '2011-05-17', '<br />Yang tidak berhak menerima zakat<br />   1.Orang kaya. Rasulullah bersabda, "Tidak halal mengambil sedekah (zakat) <br />     bagi orang yang kaya dan orang yang mempunyai kekuatan <br />     tenaga." (HR Bukhari).<br />   2.Hamba sahaya, karena masih mendapat nafkah atau tanggungan dari tuannya.<br />   3.Keturunan Rasulullah. Rasulullah bersabda, "Sesungguhnya tidak halal bagi <br />     kami (ahlul bait) mengambil sedekah <br />     zakat)." (HR Muslim).<br />   4.Orang yang dalam tanggungan yang berzakat, misalnya anak dan istri.<br />   5.Orang kafir<br />'),
(6, 'rizal', 'Yang Berhak Menerima Zakat', '2011-05-17', '<br />Yang berhak menerima<br />Ada delapan pihak yang berhak menerima zakat, yakni:<br />   1. Fakir - Mereka yang hampir tidak memiliki apa-apa sehingga tidak mampu memenuhi kebutuhan pokok hidup.<br />   2. Miskin - Mereka yang memiliki harta namun tidak cukup untuk memenuhi kebutuhan dasar untuk hidup.<br />   3. Amil - Mereka yang mengumpulkan dan membagikan zakat.<br />   4. Mu''allaf - Mereka yang baru masuk Islam dan membutuhkan bantuan untuk menyesuaikan diri dengan keadaan barunya<br />   5. Hamba sahaya yang ingin memerdekakan dirinya<br />   6. Gharimin - Mereka yang berhutang untuk kebutuhan yang halal dan tidak sanggup untuk memenuhinya<br />   7. Fisabilillah - Mereka yang berjuang di jalan Allah (misal: dakwah, perang dsb)<br />   8. Ibnus Sabil - Mereka yang kehabisan biaya di perjalanan.'),
(7, 'rizal', 'Sejarah Zakat', '2011-05-17', '<br />Sejarah zakat<br />Setiap muslim diwajibkan memberikan sedekah dari rezeki yang dikaruniakan <br />Allah. Kewajiban ini tertulis di dalam Al-Qur’an. Pada awalnya, Al-Qur’an<br />hanya memerintahkan untuk memberikan sedekah (pemberian yang sifatnya bebas, <br />tidak wajib). Namun, pada kemudian hari, umat Islam diperintahkan untuk<br />membayar zakat. Zakat menjadi wajib hukumnya sejak tahun 662 M. Nabi Muhammad <br />melembagakan perintah zakat ini dengan menetapkan pajak bertingkat bagi<br />mereka yang kaya untuk meringankan beban kehidupan mereka yang miskin. Sejak <br />saat ini, zakat diterapkan dalam negara-negara Islam. Hal ini menunjukan<br />bahwa pada kemudian hari ada pengaturan pemberian zakat, khususnya mengenai j<br />umlah zakat tersebut.<br />Pada zaman khalifah, zakat dikumpulkan oleh pegawai sipil dan didistribusikan <br />kepada kelompok tertentu dari masyarakat. Kelompok itu adalah orang <br />miskin, janda, budak yang ingin membeli kebebasan mereka, orang yang terlilit <br />hutang dan tidak mampu membayar. Syari''ah mengatur dengan lebih detail<br />mengenai zakat dan bagaimana zakat itu harus dibayarkan. Kejatuhan para khalifah <br />dan negara-negara Islam menyebabkan zakat tidak dapat diselenggarakan<br />dengan berdasarkan hukum lagi<br />'),
(8, 'rizal', 'Jenis Zakat', '2011-05-17', 'Jenis zakat<br />Zakat terbagi atas dua jenis yakni:<br />* Zakat fitrah<br />  Zakat yang wajib dikeluarkan muslim menjelang Idul Fitri pada bulan Ramadan. <br />  Besar zakat ini setara dengan 3,5 liter (2,5 kilogram) makanan pokok <br />  yang ada di daerah bersangkutan.<br />* Zakat maal (harta)<br />  Mencakup hasil perniagaan, pertanian, pertambangan, hasil laut, hasil ternak, <br />  harta temuan, emas dan perak. Masing-masing jenis memiliki <br />  perhitungannya sendiri-sendiri.<br />'),
(9, 'rizal', 'Hukum Zakat dalam alquran', '2011-05-17', 'Hukum zakat<br />Zakat merupakan salah satu rukun Islam, dan menjadi salah satu unsur pokok <br />bagi tegaknya syariat Islam. Oleh sebab itu hukum zakat adalah wajib (fardhu)<br />atas setiap muslim yang telah memenuhi syarat-syarat tertentu. Zakat termasuk <br />dalam kategori ibadah seperti salat, haji, dan puasa yang telah diatur <br />secara rinci berdasarkan Al-Qur''an dan As Sunnah. Zakat juga merupakan amal <br />sosial kemasyarakatan dan kemanusiaan yang dapat berkembang sesuai dengan <br />perkembangan ummat manusia.');

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE IF NOT EXISTS `buku_tamu` (
  `id_buku_tamu` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `pesan` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_buku_tamu`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_buku_tamu`, `nama`, `email`, `pesan`) VALUES
(1, 'Rizal', 'rizal.purwosaputro@gmail.com', 'bagus . , <br />lanjutkan bro. , :)');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_zakat`
--

CREATE TABLE IF NOT EXISTS `jenis_zakat` (
  `id_jenis_zakat` int(10) NOT NULL AUTO_INCREMENT,
  `jenis` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_jenis_zakat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `jenis_zakat`
--

INSERT INTO `jenis_zakat` (`id_jenis_zakat`, `jenis`) VALUES
(1, 'harta tersimpan  1 tahun'),
(2, 'profesi'),
(3, 'harta usaha'),
(4, 'hadiah');

-- --------------------------------------------------------

--
-- Table structure for table `komentar_artikel`
--

CREATE TABLE IF NOT EXISTS `komentar_artikel` (
  `id_komentar_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `id_artikel` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `isi_komentar` text COLLATE latin1_general_ci NOT NULL,
  `waktu` varchar(30) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_komentar_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `komentar_artikel`
--

INSERT INTO `komentar_artikel` (`id_komentar_artikel`, `id_artikel`, `nama`, `email`, `isi_komentar`, `waktu`) VALUES
(50, 6, 'Rendy', 'rendy@yahoo.com', 'ehem . .,<br />cuman nyapa aja . ,<br />hhe.', '12:45 21-May-2011'),
(44, 10, 'Devita', 'dh3ta@yahoo.com', 'Coba', '16:55 18-May-2011'),
(41, 7, 'rizal', 'rizal.purwosaputro@gmail.com', 'artikel ini sudah bagus. , \r\ncayoo . ,', '16:49 17-May-2011'),
(48, 9, 'rizal ', 'rizal.purwosaputro@gmail.com', 'haii <br />:)', '12:10 19-May-2011');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
  `id_kota` int(50) NOT NULL AUTO_INCREMENT,
  `nama_kota` varchar(50) NOT NULL,
  `id_propinsi` int(50) NOT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `id_propinsi`) VALUES
(1, 'Banda Aceh', 1),
(2, 'Langsa', 1),
(3, 'Lhokseumawe', 1),
(4, 'Sabang', 1),
(5, 'Subulussalam', 1),
(6, 'Binjai', 2),
(7, 'Gunung Sitoli', 2),
(8, 'Medan', 2),
(9, 'Padang Sidempuan', 2),
(10, 'Pematangsiantar', 2),
(11, 'Sibolga', 2),
(12, 'Tanjung Balai', 2),
(13, 'Tebing Tinggi', 2),
(14, 'Bengkulu', 3),
(15, 'Jambi', 4),
(16, 'Sungai Penuh', 4),
(17, 'Pekanbaru', 5),
(18, 'Dumai', 5),
(19, 'Bukittinggi', 6),
(20, 'Padang', 6),
(21, 'Padangpanjang', 6),
(22, 'Pariaman', 6),
(23, 'Payakumbuh', 6),
(24, 'Sawahlunto', 6),
(25, 'Solok', 6),
(26, 'Lubuklinggau', 7),
(27, 'Pagar Alam', 7),
(28, 'Palembang', 7),
(29, 'Prabumulih', 7),
(30, 'Bandar Lampung', 8),
(31, 'Metro', 8),
(32, 'Pangkal Pinang', 9),
(33, 'Batam', 10),
(34, 'Tanjung Pinang', 10),
(35, 'Cilegon', 11),
(36, 'Serang', 11),
(37, 'Tangerang', 11),
(38, 'Tangerang Selatan', 11),
(39, 'Bandung', 12),
(40, 'Banjar', 12),
(41, 'Bekasi', 12),
(42, 'Bogor', 12),
(43, 'Cimahi', 12),
(44, 'Cirebon', 12),
(45, 'Depok', 12),
(46, 'Sukabumi', 12),
(47, 'Tasikmalaya', 12),
(48, 'Administrasi Jakarta Barat', 13),
(49, 'Administrasi Jakarta Pusat', 13),
(50, 'Administrasi Jakarta Selatan', 13),
(51, 'Administrasi Jakarta Timur', 13),
(52, 'Administrasi Jakarta Utara', 13),
(53, 'Magelang', 14),
(54, 'Pekalongan', 14),
(55, 'Salatiga', 14),
(56, 'Semarang', 14),
(57, 'Surakarta', 14),
(58, 'Tegal', 14),
(59, 'Batu', 15),
(60, 'Blitar', 15),
(61, 'Kediri', 15),
(62, 'Madiun', 15),
(63, 'Malang', 15),
(64, 'Mojokerto', 15),
(65, 'Pasuruan', 15),
(66, 'Probolinggo', 15),
(67, 'Surabaya', 15),
(68, 'Yogyakarta', 16),
(69, 'Denpasar', 17),
(70, 'Bima', 18),
(71, 'Mataram', 18),
(72, 'Kupang', 19),
(73, 'Pontianak', 20),
(74, 'Singkawang', 20),
(75, 'Banjarbaru', 21),
(76, 'Banjarmasin', 21),
(77, 'Palangka Raya', 22),
(78, 'Balikpapan', 23),
(79, 'Bontang', 23),
(80, 'Samarinda', 23),
(81, 'Tarakan', 23),
(82, 'Gorontalo', 24),
(83, 'Makassar', 25),
(84, 'Palopo', 25),
(85, 'Parepare', 25),
(86, 'Bau-Bau', 26),
(87, 'Kendari', 26),
(88, 'Palu', 27),
(89, 'Bitung', 28),
(90, 'Kotamobagu', 28),
(91, 'Manado', 28),
(92, 'Tomohon', 28),
(93, 'Ambon', 30),
(94, 'Tual', 30),
(95, 'Ternate', 31),
(96, 'Tidore Kepulauan', 31),
(97, 'Jayapura', 32),
(98, 'Sorong', 33);

-- --------------------------------------------------------

--
-- Table structure for table `pembagian`
--

CREATE TABLE IF NOT EXISTS `pembagian` (
  `id_pembagian` int(20) NOT NULL AUTO_INCREMENT,
  `id_petugas` int(11) NOT NULL,
  `id_penerima` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `jumlah_pembagian` int(11) DEFAULT NULL,
  `tanggal_pembagian` date DEFAULT NULL,
  `disalurkan_ke` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_pembagian`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pembagian`
--

INSERT INTO `pembagian` (`id_pembagian`, `id_petugas`, `id_penerima`, `id_pembayaran`, `jumlah_pembagian`, `tanggal_pembagian`, `disalurkan_ke`) VALUES
(1, 1, 1, 1, 12500, '2011-05-17', 'konsumsi amil');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_pembayaran` int(10) NOT NULL AUTO_INCREMENT,
  `id_zakat` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `jumlah_zakat` int(11) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `tanggal_konfirmasi` date DEFAULT NULL,
  `status` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_pembayaran`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_zakat`, `id_user`, `id_petugas`, `nama`, `jumlah_zakat`, `tanggal_bayar`, `tanggal_konfirmasi`, `status`) VALUES
(1, 1, 2, 1, 'Rizal', 1750000, '2011-05-25', '2011-05-25', 'terima'),
(2, 2, 2, 1, 'Rizal', 2250000, '2011-05-25', '2011-05-25', 'terima');

-- --------------------------------------------------------

--
-- Table structure for table `penerima`
--

CREATE TABLE IF NOT EXISTS `penerima` (
  `id_penerima` int(20) NOT NULL AUTO_INCREMENT,
  `penerima` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `penanggung_jawab` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat_penanggung_jawab` text COLLATE latin1_general_ci,
  PRIMARY KEY (`id_penerima`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `penerima`
--

INSERT INTO `penerima` (`id_penerima`, `penerima`, `alamat`, `no_telp`, `penanggung_jawab`, `alamat_penanggung_jawab`) VALUES
(1, 'SMK TELKOM', 'JL Sawojajar', '0341-778899', 'M Saifuddi', 'JL Sawojajar'),
(2, 'Masjid Darussalam', 'JL Nikel no 2', '0341-498765', 'Saipudin', 'JL Nikel no 9'),
(3, 'panti jompo', 'JL Nikel no 2', '021-334455', 'zakaria', 'jl cengkeh'),
(4, 'Panti Asuhan', 'Jl asahan no4', '098-656908', 'Rizal', 'jl Ogan'),
(5, 'Masjid Annur', 'jl kembang', '08796589', 'zakaria', 'jl sawojajar');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE IF NOT EXISTS `petugas` (
  `id_petugas` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` text COLLATE latin1_general_ci,
  `jenis_kelamin` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `username` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama`, `alamat`, `jenis_kelamin`, `tanggal_lahir`, `username`, `email`, `password`) VALUES
(1, 'Devita', 'JL Turen no 2', 'P', '2011-05-17', 'devita', 'devita@yahoo.com', 'devita');

-- --------------------------------------------------------

--
-- Table structure for table `propinsi`
--

CREATE TABLE IF NOT EXISTS `propinsi` (
  `id_propinsi` int(50) NOT NULL AUTO_INCREMENT,
  `nama_propinsi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_propinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `propinsi`
--

INSERT INTO `propinsi` (`id_propinsi`, `nama_propinsi`) VALUES
(1, 'Aceh'),
(2, 'Sumatera Utara'),
(3, 'Bengkulu'),
(4, 'Jambi'),
(5, 'Riau'),
(6, 'Sumatera Barat'),
(7, 'Sumatera Selatan'),
(8, 'Lampung'),
(9, 'Kepulauan Bangka Belitung'),
(10, 'Kepulauan Riau'),
(11, 'Banten'),
(12, 'Jawa Barat'),
(13, 'DKI Jakarta'),
(14, 'Jawa Tengah'),
(15, 'Jawa Timur'),
(16, 'Daerah Istimewa Yogyakarta'),
(17, 'Bali'),
(18, 'Nusa Tenggara Barat'),
(19, 'Nusa Tenggara Timur'),
(20, 'Kalimantan Barat'),
(21, 'Kalimantan Selatan'),
(22, 'Kalimantan Tengah'),
(23, 'Kalimantan Timur'),
(24, 'Gorontalo'),
(25, 'Sulawesi Selatan'),
(26, 'Sulawesi Tenggara'),
(27, 'Sulawesi Tengah'),
(28, 'Sulawesi Utara'),
(29, 'Sulawesi Barat'),
(30, 'Maluku'),
(31, 'Maluku Utara'),
(32, 'Papua'),
(33, 'Papua Barat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `alamat` text COLLATE latin1_general_ci,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(1) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `email` varchar(200) COLLATE latin1_general_ci DEFAULT NULL,
  `kota` int(50) NOT NULL,
  `propinsi` int(50) NOT NULL,
  `username` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  `password` varchar(20) COLLATE latin1_general_ci DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `no_telp`, `email`, `kota`, `propinsi`, `username`, `password`) VALUES
(1, 'Zakaria', 'JL Sawojajar no 7', '1994-07-26', 'L', '0343-788909', 'zakaria@yahoo.com', 63, 15, 'zakaria', 'zakaria'),
(2, 'Rizal', 'JL Platina no 27', '1994-05-18', 'L', '0341-493574', 'rizal.purwosaputro@gmail.com', 76, 21, 'rizal', 'zalphe');

-- --------------------------------------------------------

--
-- Table structure for table `zakat`
--

CREATE TABLE IF NOT EXISTS `zakat` (
  `id_zakat` int(50) NOT NULL AUTO_INCREMENT,
  `id_jenis_zakat` int(50) NOT NULL,
  `id_user` int(50) NOT NULL,
  `nama` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `alamat` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_propinsi` int(11) NOT NULL,
  `jumlah_zakat` int(11) NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `bank_tujuan` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pembayaran_via` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `bank_asal_transfer` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_zakat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `zakat`
--

INSERT INTO `zakat` (`id_zakat`, `id_jenis_zakat`, `id_user`, `nama`, `alamat`, `no_telp`, `email`, `id_kota`, `id_propinsi`, `jumlah_zakat`, `tanggal_bayar`, `bank_tujuan`, `pembayaran_via`, `bank_asal_transfer`) VALUES
(1, 1, 2, 'Rizal', 'JL Platina no 27', '0341-493574', 'rizal.purwosaputro@g', 76, 21, 1762500, '2011-05-25', 'Bank DKI Syariah 701 700 7000', 'ATM', 'CIMB Niaga Syariah'),
(2, 3, 2, 'Rizal', 'JL Platina no 27', '0341-493574', 'rizal.purwosaputro@g', 76, 21, 2250000, '2011-05-25', 'Bank Central Asia 094 301 6001', 'ATM', 'Bank Danamon Syariah');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
