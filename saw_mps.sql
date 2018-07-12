-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 02:37 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saw_mps`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `nama` text NOT NULL,
  `nilai` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `nama`, `nilai`, `id_kriteria`, `created_at`, `updated_at`) VALUES
(2, 'Guru tanpa memiliki sertifikasi', 1, 1, '2018-02-28 13:50:40', '2018-02-28 13:50:40'),
(3, 'Guru mengajar sesuai prosedur sekolah dan tanpa memiliki sertifikasi', 3, 1, '2018-02-28 13:52:08', '2018-02-28 13:52:08'),
(4, 'Guru mengajar sesuai prosedur dan memiliki sertifikasi', 5, 1, '2018-02-28 13:52:31', '2018-02-28 13:52:31'),
(5, 'Kepala sekolah belum berperan sebagai professional leader dalam tindakan dan perilaku internal sekolah', 1, 2, '2018-02-28 13:53:14', '2018-02-28 13:53:14'),
(6, 'Kepala sekolah belum sepenuhnya berperan sebagai professional leader dalam tindakan dan perilaku internal sekolah', 3, 2, '2018-02-28 13:53:41', '2018-02-28 13:53:41'),
(7, 'Kepala sekolah telah berperan sebagai professional leader dalam tindakan dan perilaku internal sekolah', 5, 2, '2018-02-28 13:54:03', '2018-02-28 13:54:03'),
(8, 'Belum adanya sarana dan prasarana yang memenuhi standar sekolah', 1, 3, '2018-02-28 23:20:08', '2018-02-28 23:20:08'),
(9, 'Sarana dan prasarana yang memenuhi standar sekolah yang belum lengkap', 3, 3, '2018-02-28 23:20:39', '2018-02-28 23:20:39'),
(10, 'Sarana dan prasarana yang memenuhi standar sekolah yang lengkap', 5, 3, '2018-02-28 23:21:09', '2018-02-28 23:21:09'),
(11, 'Lingkungan seperti taman sekolah belum ada', 1, 4, '2018-02-28 23:21:35', '2018-02-28 23:21:35'),
(12, 'Lingkungan seperti taman sekolah yang hanya memiliki beberapa saja', 3, 4, '2018-02-28 23:21:56', '2018-02-28 23:21:56'),
(13, 'Lingkungan seperti taman sekolah yang cukup memenuhi standar sekolah', 5, 4, '2018-02-28 23:22:21', '2018-02-28 23:22:21'),
(14, 'Pembelajaran di sekolah yang tidak kondusif', 1, 6, '2018-02-28 23:22:44', '2018-02-28 23:22:44'),
(15, 'Kualitas belajar yang belum mumpunin', 3, 6, '2018-02-28 23:22:58', '2018-02-28 23:22:58'),
(16, 'Kualitas belajar yang sudah memenuhi standar kriteria', 5, 6, '2018-02-28 23:23:19', '2018-02-28 23:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_pengguna` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `komentar` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_pengguna`, `id_role`, `nama`, `email`, `komentar`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Azhary', 'azhary@gmail.com', 'Ini komentar publik', '2018-06-01 13:46:36', '2018-06-01 13:46:36'),
(2, NULL, NULL, 'Arliansyah', 'arliansyah@gmail.com', 'Ini komentar anonymous', '2018-06-01 13:48:16', '2018-06-01 13:48:16'),
(3, 1, 3, NULL, NULL, 'Ini komentar siswa', '2018-06-01 13:51:38', '2018-06-01 13:51:38'),
(4, 1, 3, NULL, NULL, 'Ini komentar siswa 2', '2018-06-01 13:55:00', '2018-06-01 13:55:00'),
(5, 1, 1, NULL, NULL, 'Ini komentar admin', '2018-06-01 13:59:52', '2018-06-01 13:59:52'),
(6, 2, 2, NULL, NULL, 'Ini komentar kepala dinas', '2018-06-01 14:08:07', '2018-06-01 14:08:07'),
(7, NULL, NULL, 'namasaya', 'email@saya.com', 'komentarsaya', '2018-06-05 13:39:55', '2018-06-05 13:39:55'),
(8, 1, 1, NULL, NULL, 'test', '2018-06-05 13:40:24', '2018-06-05 13:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(300) NOT NULL,
  `deskripsi` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'Guru', '', '2018-02-28 13:44:34', '2018-02-28 13:44:34'),
(2, 'Kepala Sekolah', '', '2018-02-28 13:44:47', '2018-02-28 13:44:47'),
(3, 'Sarana dan Prasarana', '', '2018-02-28 13:45:02', '2018-02-28 13:45:02'),
(4, 'Lingkungan', '', '2018-02-28 13:45:11', '2018-02-28 13:45:11'),
(6, 'Proses Belajar', '', '2018-02-28 13:45:49', '2018-02-28 13:45:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nip`, `password`, `id_role`, `nama`, `created_at`, `updated_at`) VALUES
(1, '09021181419007', '985fabf8f96dc1c4c306341031569937', 1, 'Rizqi Adi Surya', '2018-06-01 11:38:12', '2018-03-11 15:25:23'),
(2, '1212', '827ccb0eea8a706c4c34a16891f84e7b', 2, 'Surya Rizqi Adi', '2018-06-01 14:03:37', '2018-06-01 14:03:37'),
(3, '12345', '985fabf8f96dc1c4c306341031569937', 4, 'Assessor 1', '2018-07-05 10:39:44', '2018-07-05 10:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE `penilaian` (
  `id_nilai` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `id_bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`id_nilai`, `id_sekolah`, `id_kriteria`, `id_bobot`) VALUES
(1, 2, 1, 3),
(2, 2, 2, 7),
(3, 2, 3, 9),
(4, 2, 4, 13),
(5, 2, 6, 14),
(6, 3, 1, 2),
(7, 3, 2, 6),
(8, 3, 3, 10),
(9, 3, 4, 11),
(10, 3, 6, 15),
(11, 4, 1, 3),
(12, 4, 2, 5),
(13, 4, 3, 10),
(14, 4, 4, 12),
(15, 4, 6, 15),
(16, 5, 1, 2),
(17, 5, 2, 5),
(18, 5, 3, 9),
(19, 5, 4, 13),
(20, 5, 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2018-03-11 14:58:34', '2018-03-11 14:58:34'),
(2, 'Kepala Dinas', '2018-04-05 07:38:37', '2018-04-05 07:38:37'),
(3, 'Siswa', '2018-04-05 07:38:37', '2018-04-05 07:38:37'),
(4, 'Assessor', '2018-07-05 10:35:03', '2018-07-05 10:35:03');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(300) NOT NULL,
  `lokasi_sekolah` text NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `kabupaten` text NOT NULL,
  `desa` text NOT NULL,
  `kelurahan` text NOT NULL,
  `kecamatan` text NOT NULL,
  `status` enum('Negeri','Swasta') NOT NULL DEFAULT 'Negeri',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `lokasi_sekolah`, `npsn`, `kabupaten`, `desa`, `kelurahan`, `kecamatan`, `status`, `created_at`, `updated_at`) VALUES
(2, 'SMA Negeri 12', 'Jambi Utara', '1', '', '', '', '', 'Swasta', '2018-02-28 13:59:51', '2018-02-28 13:59:51'),
(3, 'SMA Negeri 1', 'Jambi Selatan', '2', '', '', '', '', 'Negeri', '2018-02-28 23:03:04', '2018-02-28 23:03:04'),
(4, 'SMA Negeri 3', 'Jambi Barat', '3', '', '', '', '', 'Negeri', '2018-02-28 23:03:15', '2018-02-28 23:03:15'),
(5, 'SMA neger 3', 'Jl. Urip Sumoharoiucqcef\r\n', '4', '', '', '', '', 'Negeri', '2018-03-01 03:52:08', '2018-03-01 03:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `password`, `nama`, `jenis_kelamin`, `id_sekolah`, `tempat_lahir`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'Adi Surya Rizqi', 'Perempuan', 3, 'Palembang', '1996-08-05', '2018-04-11 16:39:26', '2018-04-11 16:39:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_sekolah` (`id_sekolah`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `id_bobot` (`id_bobot`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bobot`
--
ALTER TABLE `bobot`
  ADD CONSTRAINT `bobot_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_3` FOREIGN KEY (`id_bobot`) REFERENCES `bobot` (`id_bobot`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
