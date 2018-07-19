-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2018 at 06:38 PM
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
-- Database: `saw_mps2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_sekolah`
--

CREATE TABLE `admin_sekolah` (
  `id` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_sekolah`
--

INSERT INTO `admin_sekolah` (`id`, `id_pengguna`, `id_sekolah`, `created_at`) VALUES
(1, 4, 10, '2018-07-19 15:52:16');

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
(17, 'Ada', 1, 7, '2018-07-12 16:05:16', '2018-07-12 16:05:16'),
(18, 'Tidak Ada', 0, 7, '2018-07-12 16:05:37', '2018-07-12 16:05:37'),
(19, 'Ada', 1, 8, '2018-07-12 16:10:31', '2018-07-12 16:10:31'),
(20, 'Tidak Ada', 0, 8, '2018-07-12 16:10:49', '2018-07-12 16:10:49'),
(21, 'Ada', 1, 9, '2018-07-13 10:55:31', '2018-07-13 10:55:31'),
(22, 'Tidak Ada', 0, 9, '2018-07-13 10:55:41', '2018-07-13 10:55:41'),
(23, 'Ada', 1, 10, '2018-07-13 10:56:00', '2018-07-13 10:56:00'),
(24, 'Tidak Ada', 0, 10, '2018-07-13 10:56:11', '2018-07-13 10:56:11'),
(25, 'Lengkap', 1, 11, '2018-07-13 10:56:38', '2018-07-13 10:56:38'),
(26, 'Tidak Lengkap', 0, 11, '2018-07-13 10:56:53', '2018-07-13 10:56:53');

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
(7, 'Pengembangan Kompetensi Sikap Spiritual', '', '2018-07-12 16:04:33', '2018-07-12 16:04:33'),
(8, 'Pengembangan Kompetensi Sikap Sosial', '', '2018-07-12 16:09:42', '2018-07-12 16:09:42'),
(9, 'Pengembangan Kompetensi Pengetahuan', '', '2018-07-12 16:11:55', '2018-07-12 16:11:55'),
(10, 'Pengembangan Kompetensi Keterampilan', '', '2018-07-12 16:12:14', '2018-07-12 16:12:14'),
(11, 'Komponen-komponen KTSP', '1. Visi, misi, dan tujuan\r\n2. Muatan kurikuler\r\n3. Pengaturan beban belajar siswa dan beban kerja guru\r\n4. Kalender pendidikan\r\n5. Silabus mata pelajaran\r\n6. RPP ', '2018-07-12 16:18:08', '2018-07-12 16:18:08'),
(12, 'Prosedur Operasional Pengembangan KTSP', '1. Draf analisis KTSP\r\n2. Draf penyusunan KTSP\r\n3. Penetapan Dokumen Final KTSP\r\n4. Pengesahan Dokumen Final KTSP', '2018-07-12 17:29:26', '2018-07-12 17:29:26'),
(13, 'Pelaksanaan Kurikulum', '1. Struktur Kurikulum\r\n2. Penugasan terstruktur dan kegiatan mandiri tidak terstruktur maksimal 60% dari jam tatap muka\r\n3. Beban kerja guru dan beban belajar siswa\r\n4. Mata pelajaran seni budaya dan prakarya\r\n5. Pengembangan diri (layanan konseling dan kegiatan ekstrakulikuler) dan cara penilaiannya', '2018-07-12 17:35:38', '2018-07-12 17:35:38'),
(14, 'Kelengkapan RPP Kelas X', '', '2018-07-12 17:48:35', '2018-07-12 17:48:35'),
(15, 'Kelengkapan RPP Kelas XI', '', '2018-07-12 17:48:46', '2018-07-12 17:48:46'),
(16, 'Kelengkapan RPP Kelas XII', '', '2018-07-12 17:48:53', '2018-07-12 17:48:53'),
(17, 'Penggunaan penilaian otentik oleh guru ', '', '2018-07-12 17:51:33', '2018-07-12 17:51:33'),
(18, 'Pemantauan proses pembelajaran oleh kepala sekolah/madrasah', '1. Diskusi Kelompok Terfokus\r\n2. Pengamatan\r\n3. Pencatatan\r\n4. Perekaman\r\n5. Wawancara\r\n6. Pendokumentasian', '2018-07-12 17:54:23', '2018-07-12 17:54:23'),
(19, 'Mengembangkan kegiatan literasi', '1. Perencanaan dan penilaian program\r\n2. Ketersediaan waktu yang cukup untuk kegiatan literasi\r\n3. Membaca/menulis buku\r\n4. Menyelenggarakan lomba\r\n5. Memajang karya tulis siswa\r\n6. Penghargaan terhadap prestasi siswa\r\n7. Pelatihan tentang literasi', '2018-07-12 18:12:55', '2018-07-12 18:12:55'),
(20, 'Mengembangkan perilaku sehat jasmani dan rohani', '1. Olahraga\r\n2. Snei\r\n3. Kepramukaan\r\n4. UKS\r\n5. Keagamaan\r\n6. Lomba yang terkait dengan kesehatan jasmani dan rohani', '2018-07-13 10:38:06', '2018-07-13 10:38:06'),
(21, 'Kepala sekolah/madrasah memiliki kemampuan kewirausahaan', '1. Melakukan inovasi\r\n2. Bekerja Keras\r\n3. Memiliki motivasi\r\n4. Pantang Menyerah\r\n5. Memiliki naluri kewirausahaan', '2018-07-13 10:39:49', '2018-07-13 10:39:49'),
(22, 'Sekolah/madrasah memiliki ruang perpustakaan dengan luas dan sarana sesuai standar', '1. Luas sesuai standar\r\n2. sarana,sesuai standar\r\n3. ketersediaan data pengunjung\r\n4. kondisi terawat, bersih, dan nyaman', '2018-07-13 10:43:48', '2018-07-13 10:43:48'),
(23, 'Dokumen struktur organisasi sekolah/madrasah', '1. Notulen rapat terkait struktur organisasi sekolah/madrasah\r\n2. Penetapan struktur organisasi sekolah/madrasah\r\n3. Sosialisasi struktur organisasi sekolah/madrasah, foto kegiatan, dokumen pertemuan seosialisasi\r\n4. Bukti pengesahan struktur organisasi sekolah/madrasah\r\n5. Rincian tugas setiap personil dalam struktur organisasi', '2018-07-13 10:50:17', '2018-07-13 10:50:17'),
(24, 'Rata-Rata Nilai UAN', '', '2018-07-13 10:51:57', '2018-07-13 10:51:57'),
(25, 'Lokasi sekolah', '', '2018-07-13 10:52:09', '2018-07-13 10:52:09'),
(26, 'Ketersediaan Ekstrakulikuler', '', '2018-07-13 10:52:36', '2018-07-13 10:52:36'),
(27, 'Prestasi Sekolah', '', '2018-07-13 10:52:45', '2018-07-13 10:52:45'),
(28, 'Lingkungan Sekolah', '', '2018-07-13 10:53:13', '2018-07-13 10:53:13'),
(29, 'Dokumen penilaian kompetensi sikap', '', '2018-07-13 10:53:42', '2018-07-13 10:53:42'),
(30, 'Dokumen penilaian kompetensi pengetahuan ', '', '2018-07-13 10:53:56', '2018-07-13 10:53:56'),
(31, 'Dokumen penilaian kompetensi keterampilan', '', '2018-07-13 10:54:09', '2018-07-13 10:54:09');

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
(3, '12345', '985fabf8f96dc1c4c306341031569937', 4, 'Assessor 1', '2018-07-05 10:39:44', '2018-07-05 10:39:44'),
(4, '111', '985fabf8f96dc1c4c306341031569937', 5, 'Admin SMA 1', '2018-07-19 08:51:56', '2018-07-19 08:51:56');

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
(21, 6, 7, 17),
(22, 7, 7, 18),
(23, 9, 7, 17),
(24, 6, 7, 17),
(25, 6, 8, 19);

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
(4, 'Assessor', '2018-07-05 10:35:03', '2018-07-05 10:35:03'),
(5, 'Admin Sekolah', '2018-07-19 16:07:05', '2018-07-19 16:07:05');

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
  `kecamatan` text NOT NULL,
  `status` enum('Negeri','Swasta') NOT NULL DEFAULT 'Negeri',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`id_sekolah`, `nama_sekolah`, `lokasi_sekolah`, `npsn`, `kabupaten`, `desa`, `kecamatan`, `status`, `created_at`, `updated_at`) VALUES
(6, 'SMA EL MUNDO', 'JL.UD Sarkawi (Ki Bajuri) No. 01', '10507428', 'Kota Jambi', 'Talang Bakung', 'Paal Merah', 'Swasta', '2018-07-12 14:17:09', '2018-07-12 14:17:09'),
(7, 'SMA JAMBI  IX LURAH', 'JL. KOL. AMIR HAMZAH NO.20\r\n', '10505785', 'Kota Jambi', 'Selamat', 'Danau Sipin', 'Swasta', '2018-07-12 14:24:51', '2018-07-12 14:24:51'),
(9, 'SMA TRI SUKSES BOARDING SCHOOL', 'Jl. Kol.Pol. M. Taher No. 20\r\n', '69940645', 'Kota Jambi', 'Wijaya Pura\r\n', 'Kec. Jambi Selatan\r\n', 'Swasta', '2018-07-12 14:38:30', '2018-07-12 14:38:30'),
(10, 'SMAN 1 KOTA JAMBI', 'JL. URIP SUMOHARJO NO. 15\r\n', '10504684', 'Kota Jambi', 'Sungai Putri\r\n', 'Danau Sipin', 'Negeri', '2018-07-12 14:40:16', '2018-07-12 14:40:16'),
(11, 'SMAN 10 KOTA JAMBI', 'JL. DEPATI PARBO\r\n', '10504586', 'Kota Jambi\r\n', 'Pematang Sulur\r\n', 'Telanai Pura\r\n', 'Negeri', '2018-07-12 14:44:45', '2018-07-12 14:44:45'),
(12, 'SMAN 11 KOTA JAMBI', 'JL. SERSAN ANWAR BAY\r\n', '10504587', 'Kota Jambi\r\n', 'Bagan Pete\r\n', 'Alam Barajo\r\n', 'Negeri', '2018-07-12 14:48:02', '2018-07-12 14:48:02'),
(13, 'SMAN 2 KOTA JAMBI', 'JL. PANGERAN ANTASARI\r\n', '10504623', 'Kota Jambi\r\n', 'TALANG BANJAR\r\n', 'Jambi Timur', 'Negeri', '2018-07-12 14:51:36', '2018-07-12 14:51:36'),
(14, 'SMAN 3 KOTA JAMBI', 'JL. GURU MUKTAR\r\n', '10504553', 'Kota Jambi\r\n', 'Jelutung\r\n', 'Jelutung', 'Negeri', '2018-07-12 14:52:49', '2018-07-12 14:52:49'),
(15, 'SMAN 4 KOTA JAMBI', 'JL. IR. H. JUANDA NO.125\r\n', '10504580', 'Kota Jambi\r\n', 'Simpang III Sipin\r\n', 'Kota baru', 'Swasta', '2018-07-12 14:57:11', '2018-07-12 14:57:11'),
(16, 'SMAN 5 KOTA JAMBI', 'JL. AR. HAKIM NO. 50\r\n', '10504581', 'Kota Jambi\r\n', 'Simpang IV Sipin\r\n', 'Telanai Pura\r\n', 'Swasta', '2018-07-12 14:58:32', '2018-07-12 14:58:32'),
(17, 'SMAN 6 KOTA JAMBI', 'JL. KOL. M. KUKUH NO. 46\r\n', '10504582', 'Kota Jambi\r\n', 'PAAL LIMA\r\n', 'Kota Baru', 'Negeri', '2018-07-12 15:03:41', '2018-07-12 15:03:41'),
(18, 'SMAN 7 KOTA JAMBI', 'JL. KH A. BAKAR\r\n', '10504583', 'Kota Jambi', 'ULU GEDONG\r\n', 'Danau Teluk\r\n', 'Negeri', '2018-07-12 15:04:31', '2018-07-12 15:04:31'),
(19, 'SMAN 8 KOTA JAMBI', 'JL. MARSDA SURYADHARMA\r\n', '10504584', 'Kota Jambi\r\n', 'KENALI ASAM BAWAH\r\n', 'Kota Baru\r\n', 'Negeri', '2018-07-12 15:07:55', '2018-07-12 15:07:55'),
(20, 'SMAN 9 KOTA JAMBI', 'JL. Berdikari\r\n', '10504585', 'Kota Jambi\r\n', 'Paal Merah\r\n', 'Paal Merah\r\n', 'Negeri', '2018-07-12 15:09:03', '2018-07-12 15:09:03'),
(21, 'SMAS ADHYAKSA I', 'JL. JEND. URIP SUMOHARJO NO.33\r\n', '10504588', 'Kota Jambi\r\n', 'Sungai Putri\r\n', 'Danau Sipin', 'Swasta', '2018-07-12 15:09:42', '2018-07-12 15:09:42'),
(22, 'SMAS AL PROGO I', 'JL. SYAMSUDIN UBAN NO.33\r\n', '10504589', 'Kota Jambi\r\n', 'Jelutung\r\n', 'Jelutung', 'Swasta', '2018-07-12 15:11:06', '2018-07-12 15:11:06'),
(23, 'SMAS ATTAUFIQ', 'JL. GUNUNG KIDUL NO. 11\r\n', '10504590', 'Kota Jambi\r\n', 'Talang Banjar\r\n', 'Jambi Timur', 'Swasta', '2018-07-12 15:11:47', '2018-07-12 15:11:47'),
(24, 'SMA S SURYA IBU', 'JL. LETKOL A. TARMIZI  KADIR\r\n', '10504576', 'Kota Jambi\r\n', 'Pakuan Baru\r\n', 'Jambi Selatan', 'Swasta', '2018-07-12 15:14:20', '2018-07-12 15:14:20'),
(25, 'SMAS BINA KASIH', 'JL. LOMBOK NO.4 RT 19\r\n', '10506129', 'Kota Jambi\r\n', 'Jelutung', 'Jelutung', 'Swasta', '2018-07-12 15:15:26', '2018-07-12 15:15:26'),
(26, 'SMAS DHARMA BHAKTI 2', 'JL. KASTURI 1 NO.14\r\n', '10504591', 'Kota Jambi\r\n', 'Bagan Pete\r\n', 'Alam Barajo', 'Swasta', '2018-07-12 15:16:26', '2018-07-12 15:16:26'),
(27, 'SMAS DHARMA BHAKTI 3', 'JL. ANGKASA PURI\r\n', '10504579', 'Kota Jambi\r\n', 'Pasir Putih\r\n', 'Jambi Selatan\r\n', 'Swasta', '2018-07-12 15:18:11', '2018-07-12 15:18:11'),
(28, 'SMAS DHARMA BHAKTI 4', 'JL UNTUNG SUROPATI PUNCAK\r\n', '10504578', 'Kota Jambi\r\n', 'Jelutung\r\n', 'Jelutung\r\n', 'Swasta', '2018-07-12 15:18:47', '2018-07-12 15:18:47'),
(29, 'SMAS DUA MEI', 'JJL. KALAPIRING I NO. 69\r\n', '10504577', 'Kota Jambi\r\n', 'SIMPANG IV SIPIN\r\n', 'Telanai Pura\r\n', 'Swasta', '2018-07-12 15:19:19', '2018-07-12 15:19:19'),
(30, 'SMAS FERDY FERRY PUTRA', 'JL. PROF. DR. SOEMANTRI BROJONEGORO SIPIN\r\n', '10504554', 'Kota Jambi\r\n', 'SELAMAT\r\n', 'Danau Sipin\r\n', 'Swasta', '2018-07-12 15:20:58', '2018-07-12 15:20:58'),
(31, 'SMAS ISLAM AL FALAH', 'JL. HOS COKROAMINOTO\r\n', '10504556', 'Kota Jambi\r\n', 'Selamat\r\n', 'Danau Sipin\r\n', 'Swasta', '2018-07-12 15:22:10', '2018-07-12 15:22:10'),
(32, 'SMAS IT AL- AZHAR', 'JL. KOL. AMIR HAMZAH NO.32\r\n', '10506150', 'Kota Jambi\r\n', 'KAMBANG JAMBI\r\n', 'Telanai Pura\r\n', 'Swasta', '2018-07-12 15:23:01', '2018-07-12 15:23:01'),
(34, 'SMAS MEGATAMA', 'JL. DAMAI No. 47 Rt. 32\r\n', '10507235', 'Kota Jambi\r\n', 'Eka Jaya\r\n', 'Paal Merah\r\n', 'Swasta', '2018-07-12 15:31:01', '2018-07-12 15:31:01'),
(35, 'SMAS MUHAMMADIYAH', 'JL. KAPTEN PATIMURA\r\n', '10504557', 'Kota Jambi\r\n', 'Simpang Iv Sipin\r\n', 'Telanai Pura\r\n', 'Swasta', '2018-07-12 15:31:35', '2018-07-12 15:31:35'),
(36, 'SMAS NASIONAL SARIPUTRA', 'JL. P. DIPONEGORO NO. 67\r\n', '10504558', 'Kota Jambi\r\n', 'SULANJANA\r\n', 'Jambi Timur\r\n', 'Swasta', '2018-07-12 15:33:06', '2018-07-12 15:33:06'),
(37, 'SMAS NOMMENSEN', 'JL. BARAU - BARAU I', '10504559', 'Kota Jambi\r\n', 'PAKUAN BARU\r\n', 'Jambi Selatan\r\n', 'Swasta', '2018-07-12 15:33:47', '2018-07-12 15:33:47'),
(38, 'SMAS NUSANTARA', 'JL. KOL. ABUNJANI NO. 57\r\n', '10504570', 'Kota Jambi\r\n', 'Legok\r\n', 'Danau Sipin\r\n', 'Swasta', '2018-07-12 15:34:32', '2018-07-12 15:34:32'),
(39, 'SMAS PELITA RAYA', 'JL. KOPRAL RAMLI NO. 89\r\n', '10504592', 'Kota Jambi\r\n', 'Talang Bakung\r\n', 'Paal Merah\r\n', 'Swasta', '2018-07-12 15:35:15', '2018-07-12 15:35:15'),
(40, 'SMAS PERTIWI I KOTA JAMBI', 'JL. LETKOL SLAMET RIYADI\r\n', '10504571', 'Kota Jambi\r\n', 'Murni\r\n', 'Danau Sipin\r\n', 'Swasta', '2018-07-12 15:35:54', '2018-07-12 15:35:54'),
(42, 'SMAS PGRI 2', 'JL. GURU MUCHTAR NO. 05\r\n', '10504572', 'Kota Jambi\r\n', 'JELUTUNG\r\n', 'Jelutung\r\n', 'Swasta', '2018-07-12 15:37:45', '2018-07-12 15:37:45'),
(43, 'SMAS PGRI 3', 'JL. LINGKAR SELATAN 3 NO 5\r\n', '10504573', 'Kota Jambi\r\n', 'Talang Bakung\r\n', 'Kec. Paal Merah\r\n', 'Swasta', '2018-07-12 15:40:09', '2018-07-12 15:40:09'),
(44, 'SMAS PURNAMA', 'JL. SERMA MURAD ALINI\r\n', '10504574', 'Kota Jambi\r\n', 'SUKAKARYA\r\n', 'Kota Baru\r\n', 'Swasta', '2018-07-12 15:41:10', '2018-07-12 15:41:10'),
(45, 'SMAS UNGGUL IKABAMA', 'JL. HOS. COKROAMINOTO No. 29\r\n', '10505682', 'Kota Jambi\r\n', 'Selamat\r\n', 'Danau Sipin\r\n', 'Swasta', '2018-07-12 15:41:42', '2018-07-12 15:41:42'),
(46, 'SMAS UNGGUL SAKTI', 'JL. PANGERAN ANTASARI\r\n', '10504593', 'Kota Jambi\r\n', 'TALANG BANJAR\r\n', 'Jambi Timur\r\n', 'Swasta', '2018-07-12 15:45:30', '2018-07-12 15:45:30'),
(47, 'SMAS XAVERIUS 1', 'JL. MASDA ABDURAHMAN SALEH NO 19\r\n', '10504594', 'Kota Jambi\r\n', 'The Hok\r\n', 'Jambi Selatan\r\n', 'Swasta', '2018-07-12 15:46:08', '2018-07-12 15:46:08'),
(48, 'SMAS XAVERIUS 2', 'JL. MELUR 1 NO. 23 RT. 16\r\n', '10504610', 'Kota Jambi\r\n', 'SIMPANG IV SIPIN\r\n', 'Telanai Pura\r\n', 'Swasta', '2018-07-12 15:46:43', '2018-07-12 15:46:43'),
(49, 'SMAS YADIKA', 'JL. ABDUL MUIS LR. ANGGREK RT. 38\r\n', '10505954', 'Kota Jambi\r\n', 'Paal Merah\r\n', 'Paal Merah\r\n', 'Swasta', '2018-07-12 15:47:39', '2018-07-12 15:47:39'),
(50, 'SMAS YPWI MUSLIMAT', 'JL. KHA HASYIM ASARI NO. 33\r\n', '10504611', 'Kota Jambi\r\n', 'Rajawali\r\n', 'Jambi Timur\r\n', 'Swasta', '2018-07-12 15:48:14', '2018-07-12 15:48:14');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_sekolah`
--
ALTER TABLE `admin_sekolah`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_sekolah` (`id_sekolah`);

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
-- AUTO_INCREMENT for table `admin_sekolah`
--
ALTER TABLE `admin_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `penilaian`
--
ALTER TABLE `penilaian`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_sekolah`
--
ALTER TABLE `admin_sekolah`
  ADD CONSTRAINT `admin_sekolah_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_sekolah_ibfk_2` FOREIGN KEY (`id_sekolah`) REFERENCES `sekolah` (`id_sekolah`) ON DELETE CASCADE ON UPDATE CASCADE;

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
