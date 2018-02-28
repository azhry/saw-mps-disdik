-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2018 at 12:46 AM
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
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `kriteria`, `created_at`, `updated_at`) VALUES
(1, 'Guru', '2018-02-28 13:44:34', '2018-02-28 13:44:34'),
(2, 'Kepala Sekolah', '2018-02-28 13:44:47', '2018-02-28 13:44:47'),
(3, 'Sarana dan Prasarana', '2018-02-28 13:45:02', '2018-02-28 13:45:02'),
(4, 'Lingkungan', '2018-02-28 13:45:11', '2018-02-28 13:45:11'),
(6, 'Proses Belajar', '2018-02-28 13:45:49', '2018-02-28 13:45:49');

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
(15, 4, 6, 15);

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

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE `sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(300) NOT NULL,
  `lokasi_sekolah` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `lokasi_sekolah`, `created_at`, `updated_at`) VALUES
(2, 'SMA Negeri 12', 'Jambi Utara', '2018-02-28 13:59:51', '2018-02-28 13:59:51'),
(3, 'SMA Negeri 1', 'Jambi Selatan', '2018-02-28 23:03:04', '2018-02-28 23:03:04'),
(4, 'SMA Negeri 3', 'Jambi Barat', '2018-02-28 23:03:15', '2018-02-28 23:03:15');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(300) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`id_nilai`);

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
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

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
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
