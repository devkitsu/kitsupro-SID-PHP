-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 01:47 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_warga`
--
CREATE DATABASE IF NOT EXISTS `db_warga` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_warga`;

-- --------------------------------------------------------

--
-- Table structure for table `arsip`
--

CREATE TABLE IF NOT EXISTS `arsip` (
  `id_arsip` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_surat` int(5) NOT NULL,
  `no_laci` varchar(5) NOT NULL,
  `no_lemari` varchar(5) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `arsip`
--

INSERT INTO `arsip` (`id_arsip`, `id_user`, `id_surat`, `no_laci`, `no_lemari`, `keterangan`, `tanggal`) VALUES
(1, 1, 2, '2', 'A', 'Surat Keterangan Bebas', '2019-12-18'),
(2, 1, 1, '23', 'B', 'Surat Keterangan Lagi', '2019-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `judul` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_user`, `judul`, `isi`, `tanggal`, `gambar`, `created_at`, `updated_at`) VALUES
(2, 1, 'aaa', '<p style="text-align: left;"><strong>aaa</strong></p>', '2019-12-17', 'LOGO.jpg', '2019-12-17 08:40:58', '2019-12-21 06:14:30'),
(3, 1, 'Test Lage', '<p style="text-align: center;">test aaaaaa</p>\r\n<p style="text-align: left;"><strong>bbbb</strong></p>\r\n<p style="text-align: right;"><em><strong>cccc</strong></em></p>\r\n<ol style="list-style-type: undefined;">\r\n<li style="text-align: center;"><em><strong>&nbsp;a</strong></em></li>\r\n<li style="text-align: center;"><em><strong>b </strong></em></li>\r\n</ol>', '2019-12-21', 'imagesxc.png', '2019-12-21 06:11:23', '2019-12-21 06:14:14'),
(4, 1, 'Prestasi Desa', '<p>Prestasi desa kita nih</p>', '2019-12-23', 'pngguru.com(1).png', '2019-12-23 06:59:26', '2019-12-23 07:00:32'),
(5, 1, 'Seputar Warga', '<p>Warga nya mantap mantap</p>', '2019-12-23', 'yrgwj.jpg', '2019-12-23 07:01:20', '0000-00-00 00:00:00'),
(6, 1, 'Test buat loadmore', '<p>adadawf</p>', '2019-12-23', 'LOGO UNPAM.png', '2019-12-23 07:02:29', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` int(5) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `caption` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `nama_file`, `caption`) VALUES
(1, 'LOGO.jpg', 'LOGO'),
(4, '85a9f8a7c1829169ece9552fd2a764f4.jpg', 'KOchenk 2'),
(6, '098f6bcd4621d373cade4e832627b4f6.jpg', 'Surga Kucing'),
(7, '81caeb692fb66d5aa1d88ac5f07d502c.jpg', 'Kancolle');

-- --------------------------------------------------------

--
-- Table structure for table `kartu_keluarga`
--

CREATE TABLE IF NOT EXISTS `kartu_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `nomor_kk` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(5) DEFAULT NULL,
  `alamat_keluarga` text NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Kepala Keluarga',
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_kk`, `id_kepala_keluarga`, `alamat_keluarga`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(20, '13', 1, 'Ciawi', 'Kepala Keluarga', 1, '2019-12-17 05:26:07', '2017-12-17 11:41:23'),
(21, '12', 2, 'Kuningan', 'Kepala Keluarga', 1, '2019-12-17 05:32:00', '2017-12-17 11:40:10'),
(36, '123123123123123', 38, 'Kievo', 'Kepala Keluarga', 1, '2019-12-16 17:24:15', '2019-12-16 17:24:15');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id_setting` int(11) NOT NULL,
  `jenis` enum('Nomor_tpl','Kontak','Tentang','Alamat') NOT NULL,
  `Isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id_setting`, `jenis`, `Isi`) VALUES
(1, 'Kontak', '<p style="text-align: center;">Ini adalah kontak untuk kelurahan kademangan.</p>\r\n<p style="text-align: center;">Untuk mengubah ini silahkan lakukan di menu setting di halaman admin. <strong>Terimakasih!</strong></p>'),
(2, 'Nomor_tpl', '<p>(021) 999 888 77</p>\r\n<p>(+62) 812 3456 7890</p>\r\n<p>E-mail: kademangan@gmail.com</p>'),
(3, 'Alamat', '<p>Kelurahan Kademangan,</p>\r\n<p>Kecamatan Setu,</p>\r\n<p>Kota Tangerang Selatan,</p>\r\n<p>Banten. 15313</p>'),
(4, 'Tentang', '<p style="text-align: center;">Ini adalah <em>website</em> kelurahan Kademangan untuk mengelola data warga dan pengarsipan.</p>\r\n<p style="text-align: center;">Serta sebagai media untuk menyebarkan informasi berupa berita dan agenda kegiatan kepada warga</p>');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `id_surat` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_surat` varchar(20) NOT NULL,
  `berkas` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_user`, `tanggal`, `nama_surat`, `berkas`) VALUES
(1, 1, '2019-12-18', 'test', 'borobudur.docx'),
(2, 1, '2019-12-18', 'test pdf', 'Puisi Susah.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(45) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(32) NOT NULL,
  `status_user` varchar(10) NOT NULL DEFAULT 'Admin',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username_user`, `password_user`, `status_user`, `created_at`, `updated_at`) VALUES
(1, 'otakcoding', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2019-12-13 13:24:20', '2017-10-18 23:31:17'),
(12, 'Jamal Kaboer', 'jamal123', '7592628bce37dd14e0b36ea66d5ba847', 'Admin 3', '2019-12-17 05:35:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `id_warga` int(5) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan` enum('Kawin','Lajang') NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL DEFAULT 'Aktif',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `password`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pekerjaan_warga`, `status_perkawinan`, `status`, `created_at`, `updated_at`) VALUES
(1, '3208090101960089', '', 'sulaiman', 'Dukuhdalem', '1985-02-26', 'L', '<p>Dukuh</p>\r\n<p>dalem</p>', '<p>Dukuh</p>\r\n<p>dalem</p>', 'Indonesia', '001', '002', 'Islam', 'Petani', 'Lajang', 'Aktif', '2018-01-17 08:51:54', '2019-12-21 06:52:41'),
(2, '3208090511780005', '', 'Anang', 'Kuningan', '1978-11-05', 'L', '<p>Dukuh<strong>dalem</strong></p>', '<p>Dukuhdalem</p>', 'Indonesia', '02', '01', 'Islam', 'pedagang', 'Kawin', 'Aktif', '2018-01-17 08:53:24', '2019-12-21 06:53:04'),
(36, '1234567891234567', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Dobleh', 'Kabur', '2010-12-16', 'L', '<p>adas</p>', '<p>Rumah</p>', 'Indonesia', '1', '2', 'Hindu', 'Penguras Air Sawah', 'Lajang', 'Aktif', '2019-12-16 08:29:46', '2019-12-22 17:05:40'),
(37, '1234567891234568', '', 'sdad', 'sfaf', '2019-12-16', 'L', '<p>afaf</p>', '<p>afaf</p>', 'afaf', '04', '02', 'Kristen', 'afaf', 'Kawin', 'Aktif', '2019-12-16 09:03:42', '2019-12-21 06:53:23'),
(38, '1111111111111111', 'cc68ba356b36e974079316d0c365c5e2', 'Gagarin', 'Moskva', '2019-12-16', 'L', '<p>dd</p>', '<p>dd</p>', 'Rusia', '01', '03', 'Katholik', 'Kosmonot', 'Kawin', 'Aktif', '2019-12-16 14:16:19', '2019-12-21 06:53:29'),
(39, '1234567891234569', 'cc68ba356b36e974079316d0c365c5e2', 'Yuri', 'Moskva', '2019-12-18', 'L', '<p>Bogor</p>', '<p>Depok</p>', 'Russia', '02', '01', 'Kristen', 'Astronot', 'Kawin', 'Aktif', '2019-12-18 13:31:54', '2019-12-21 06:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `warga_has_kartu_keluarga`
--

CREATE TABLE IF NOT EXISTS `warga_has_kartu_keluarga` (
  `id_warga` int(5) NOT NULL,
  `id_keluarga` int(5) NOT NULL,
  `status` enum('Anak','Istri') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`, `status`) VALUES
(39, 36, 'Istri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id_arsip`), ADD KEY `id_surat` (`id_surat`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  ADD PRIMARY KEY (`id_keluarga`), ADD UNIQUE KEY `FK_keluarga_penduduk` (`id_kepala_keluarga`) USING BTREE, ADD UNIQUE KEY `id_kepala_keluarga` (`id_kepala_keluarga`) USING BTREE, ADD KEY `id_user` (`id_user`), ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
  ADD PRIMARY KEY (`id_warga`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
  ADD KEY `id_warga` (`id_warga`), ADD KEY `id_keluarga` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id_arsip` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id_setting` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
  MODIFY `id_warga` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `arsip`
--
ALTER TABLE `arsip`
ADD CONSTRAINT `fk_arsip` FOREIGN KEY (`id_surat`) REFERENCES `surat` (`id_surat`),
ADD CONSTRAINT `fk_arsip2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
ADD CONSTRAINT `fk_berita` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
ADD CONSTRAINT `fk_kk` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`),
ADD CONSTRAINT `kartu_keluarga_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `surat`
--
ALTER TABLE `surat`
ADD CONSTRAINT `fk_surat` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
ADD CONSTRAINT `fk1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`),
ADD CONSTRAINT `fk2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
