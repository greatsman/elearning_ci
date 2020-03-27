-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2020 at 08:42 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ult_pelayanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_ref_kab_kota`
--

CREATE TABLE `tb_ref_kab_kota` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ref_kab_kota`
--

INSERT INTO `tb_ref_kab_kota` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Kab. Fak-Fak', '2020-02-04 06:51:55', '0000-00-00 00:00:00'),
(3, 'Kab. Kaimana', '2020-02-04 06:52:16', '0000-00-00 00:00:00'),
(4, 'Kab. Manokwari', '2020-02-04 06:52:30', '0000-00-00 00:00:00'),
(5, 'Kab. Manokwari Selatan', '2020-02-04 06:52:47', '0000-00-00 00:00:00'),
(6, 'Kab. Maybrat', '2020-02-04 06:53:00', '0000-00-00 00:00:00'),
(7, 'Kab. Pegunungan Arfak', '2020-02-04 06:53:20', '0000-00-00 00:00:00'),
(8, 'Kab. Raja Ampat', '2020-02-04 06:53:39', '0000-00-00 00:00:00'),
(9, 'Kab. Sorong', '2020-02-04 06:53:55', '0000-00-00 00:00:00'),
(10, 'Kab. Sorong Selatan', '2020-02-04 06:54:13', '0000-00-00 00:00:00'),
(11, 'Kab. Tambrauw', '2020-02-04 06:56:13', '0000-00-00 00:00:00'),
(12, 'Kab. Teluk Bintuni', '2020-02-04 06:56:34', '0000-00-00 00:00:00'),
(13, 'Kab. Teluk Wondama', '2020-02-04 06:56:50', '0000-00-00 00:00:00'),
(14, 'Kota Sorong', '2020-02-04 06:57:11', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_ref_keperluan`
--

CREATE TABLE `tb_ref_keperluan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ref_keperluan`
--

INSERT INTO `tb_ref_keperluan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'NUPTK', '2020-02-04 06:28:12', '0000-00-00 00:00:00'),
(3, 'Tunjangan Profesi Pendidik', '2020-02-27 11:20:38', NULL),
(4, 'Kesetaraan (Inpassing)', '2020-02-27 11:22:26', NULL),
(5, 'Tunjangan Khusus', '2020-02-27 11:22:26', NULL),
(6, 'Tunjangan Fungsional', '2020-02-27 11:22:26', NULL),
(7, 'Sertifikasi', '2020-02-27 11:22:26', NULL),
(8, 'Dapodik', '2020-02-27 11:22:26', NULL),
(9, 'NRG', '2020-02-27 11:22:26', NULL),
(10, 'NISN', '2020-02-27 11:22:26', NULL),
(11, 'NPSN', '2020-02-27 11:22:26', NULL),
(12, 'Konversi Kode Mapel', '2020-02-27 11:22:26', NULL),
(13, 'Izin Belajar WNI/WNA', '2020-02-27 11:22:26', NULL),
(14, 'Izin Mengajar Bagi WA', '2020-02-27 11:22:26', NULL),
(15, 'LPSE', '2020-02-27 11:22:26', NULL),
(16, 'Bansos', '2020-02-27 11:22:26', NULL),
(17, 'Lainya', '2020-02-27 11:22:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_ref_pekerjaan`
--

CREATE TABLE `tb_ref_pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_ref_pekerjaan`
--

INSERT INTO `tb_ref_pekerjaan` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(2, 'Guru SD', '2020-01-31 06:39:38', '0000-00-00 00:00:00'),
(3, 'Guru SMP', '2020-01-31 06:40:14', '0000-00-00 00:00:00'),
(4, 'Guru SMA', '2020-01-31 06:42:44', '0000-00-00 00:00:00'),
(5, 'Guru SMK', '2020-01-31 06:42:57', '0000-00-00 00:00:00'),
(6, 'Guru TK', '2020-01-31 06:43:04', '0000-00-00 00:00:00'),
(7, 'Guru Paud', '2020-01-31 06:43:15', '0000-00-00 00:00:00'),
(8, 'Guru SLB', '2020-01-31 06:46:26', '0000-00-00 00:00:00'),
(9, 'Operator Sekolah', '2020-01-31 06:46:41', '0000-00-00 00:00:00'),
(10, 'Karyawan', '2020-01-31 06:46:53', '0000-00-00 00:00:00'),
(11, 'Pengawas', '2020-01-31 06:47:03', '0000-00-00 00:00:00'),
(12, 'PNS', '2020-01-31 06:47:20', '0000-00-00 00:00:00'),
(13, 'Dinas Pendidikan', '2020-01-31 06:47:29', '0000-00-00 00:00:00'),
(14, 'Orang Tua', '2020-01-31 06:47:40', '0000-00-00 00:00:00'),
(15, 'Siswa', '2020-01-31 06:47:50', '0000-00-00 00:00:00'),
(16, 'Mahasiswa', '2020-01-31 06:47:58', '0000-00-00 00:00:00'),
(17, 'Jurnalis/Wartawan', '2020-01-31 06:48:08', '0000-00-00 00:00:00'),
(18, 'Lainya', '2020-01-31 06:48:15', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tamu`
--

CREATE TABLE `tb_tamu` (
  `id` int(11) NOT NULL,
  `no_antrian` varchar(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama lengkap` varchar(255) NOT NULL,
  `nuptk` varchar(16) DEFAULT NULL,
  `no_identitas` varchar(16) NOT NULL,
  `alamat_instansi` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `daerah` int(11) NOT NULL,
  `provinsi` varchar(255) NOT NULL DEFAULT 'Papua Barat',
  `no_handphone` varchar(12) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pekerjaan` int(11) NOT NULL,
  `keperluan` int(11) NOT NULL,
  `permasalahan` varchar(6500) NOT NULL,
  `status` int(1) NOT NULL COMMENT '1 = Baru, 2= Proses, 3=Selesai',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_ref_kab_kota`
--
ALTER TABLE `tb_ref_kab_kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ref_keperluan`
--
ALTER TABLE `tb_ref_keperluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_ref_pekerjaan`
--
ALTER TABLE `tb_ref_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_ref_kab_kota`
--
ALTER TABLE `tb_ref_kab_kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_ref_keperluan`
--
ALTER TABLE `tb_ref_keperluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_ref_pekerjaan`
--
ALTER TABLE `tb_ref_pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_tamu`
--
ALTER TABLE `tb_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
