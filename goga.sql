-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 07:35 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goga`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`) VALUES
(1, 'Ruditya'),
(2, 'Royandi'),
(3, 'Raka');

-- --------------------------------------------------------

--
-- Table structure for table `daftarlowongan`
--

CREATE TABLE `daftarlowongan` (
  `id_lowongan` int(4) NOT NULL,
  `id_pencakerja` int(4) NOT NULL,
  `id_admin` int(4) NOT NULL,
  `tgl_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftarlowongan`
--

INSERT INTO `daftarlowongan` (`id_lowongan`, `id_pencakerja`, `id_admin`, `tgl_daftar`) VALUES
(201, 305, 2, '2019-05-08'),
(202, 302, 1, '2019-05-21'),
(203, 301, 3, '2019-05-08'),
(204, 304, 2, '2019-05-06'),
(205, 303, 3, '2019-05-14');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(4) NOT NULL,
  `kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Ahli gizi'),
(2, 'Akuntan'),
(3, 'Apoteker'),
(4, 'Arsitek'),
(5, 'Buruh tani'),
(6, 'Dokter'),
(7, 'Dosen'),
(8, 'Guru'),
(9, 'Tenaga lepas'),
(10, 'Tukang besi'),
(11, 'Tukang kayu'),
(12, 'Tukang pos'),
(13, 'Tukang roti');

-- --------------------------------------------------------

--
-- Table structure for table `lowongan`
--

CREATE TABLE `lowongan` (
  `id_lowongan` int(4) NOT NULL,
  `id_kategori` int(4) NOT NULL,
  `id_pencapekerja` int(4) NOT NULL,
  `syarat` varchar(40) NOT NULL,
  `nama` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lowongan`
--

INSERT INTO `lowongan` (`id_lowongan`, `id_kategori`, `id_pencapekerja`, `syarat`, `nama`) VALUES
(201, 2, 102, 'Lulusan S1 Akuntansi', 'Lowongan Akuntan'),
(202, 1, 104, 'Lulusan S1 Gizi', 'Lowongan Ahli Gizi'),
(203, 11, 101, 'Laki - laki, Berbadan besar', 'Lowongan Tukang Kayu'),
(204, 13, 105, 'Lulusan SMK Tataboga', 'Lowongan Tukang Roti'),
(205, 9, 103, 'Laki - laki, Berbadan besar', 'Lowongan Kuli Bangunan');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pencakerja`
--

CREATE TABLE `pencakerja` (
  `id_pencakerja` int(4) NOT NULL,
  `id_admin` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kel` enum('M','F') NOT NULL,
  `email` varchar(40) NOT NULL,
  `status` enum('Belum Menikah','Menikah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencakerja`
--

INSERT INTO `pencakerja` (`id_pencakerja`, `id_admin`, `nama`, `tgl_lahir`, `jns_kel`, `email`, `status`) VALUES
(301, 1, 'Muklas', '2000-02-18', 'M', 'muklas@komsi.id', 'Belum Menikah'),
(302, 1, 'Rahmanti', '1993-05-11', 'F', 'rahmanti@komsi.com', 'Menikah'),
(303, 2, 'Qrishno', '1997-11-27', 'M', 'qrishno@komsi.com', 'Menikah'),
(304, 3, 'Sakila', '1995-09-09', 'F', 'sakila@komsi.com', 'Belum Menikah'),
(305, 2, 'Inem', '2001-12-16', 'F', 'inem@komsi.com', 'Belum Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `pencapekerja`
--

CREATE TABLE `pencapekerja` (
  `id_pencapekerja` int(4) NOT NULL,
  `id_admin` int(4) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `website` varchar(40) NOT NULL,
  `no_telp` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pencapekerja`
--

INSERT INTO `pencapekerja` (`id_pencapekerja`, `id_admin`, `nama`, `alamat`, `website`, `no_telp`) VALUES
(101, 1, 'Candra', 'Muntilan, Magelang', 'www.candra.com', '8123475837'),
(102, 1, 'Nicholas', 'Manahan, Sukabumi', 'www.nico.id', '8923485717'),
(103, 3, 'Ramadhan', 'Parung Panjang, Bogor', 'www.jajalwae.com', '8214742252'),
(104, 2, 'Bambang', 'Sawangan, Magelang', 'www.bambang.id', '8144751827'),
(105, 2, 'Scarlet', 'Bantul, Yogyakarta', 'www.widow.net', '8165743712');

-- --------------------------------------------------------

--
-- Table structure for table `penerimaankerja`
--

CREATE TABLE `penerimaankerja` (
  `id_penerimaan` int(4) NOT NULL,
  `id_lowongan` int(4) NOT NULL,
  `id_pencakerja` int(4) NOT NULL,
  `tgl_diterima` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerimaankerja`
--

INSERT INTO `penerimaankerja` (`id_penerimaan`, `id_lowongan`, `id_pencakerja`, `tgl_diterima`) VALUES
(1001, 201, 305, '2019-05-15'),
(1002, 202, 302, '2019-05-28'),
(1003, 203, 301, '2019-05-15'),
(1004, 204, 304, '2019-05-13'),
(1005, 205, 303, '2019-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `daftarlowongan`
--
ALTER TABLE `daftarlowongan`
  ADD KEY `fk_daftar_lowongan1` (`id_lowongan`),
  ADD KEY `fk_daftar_lowongan2` (`id_pencakerja`),
  ADD KEY `fk_admin3` (`id_admin`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_kategori` (`id_kategori`),
  ADD KEY `id_pencapekerja` (`id_pencapekerja`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pencakerja`
--
ALTER TABLE `pencakerja`
  ADD PRIMARY KEY (`id_pencakerja`),
  ADD KEY `fk_admin2` (`id_admin`);

--
-- Indexes for table `pencapekerja`
--
ALTER TABLE `pencapekerja`
  ADD PRIMARY KEY (`id_pencapekerja`),
  ADD KEY `fk_admin1` (`id_admin`);

--
-- Indexes for table `penerimaankerja`
--
ALTER TABLE `penerimaankerja`
  ADD PRIMARY KEY (`id_penerimaan`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `id_pencakerja` (`id_pencakerja`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `daftarlowongan`
--
ALTER TABLE `daftarlowongan`
  ADD CONSTRAINT `fk_admin3` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`),
  ADD CONSTRAINT `fk_daftar_lowongan1` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`),
  ADD CONSTRAINT `fk_daftar_lowongan2` FOREIGN KEY (`id_pencakerja`) REFERENCES `pencakerja` (`id_pencakerja`);

--
-- Constraints for table `lowongan`
--
ALTER TABLE `lowongan`
  ADD CONSTRAINT `lowongan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE,
  ADD CONSTRAINT `lowongan_ibfk_2` FOREIGN KEY (`id_pencapekerja`) REFERENCES `pencapekerja` (`id_pencapekerja`) ON DELETE CASCADE;

--
-- Constraints for table `pencakerja`
--
ALTER TABLE `pencakerja`
  ADD CONSTRAINT `fk_admin2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `pencapekerja`
--
ALTER TABLE `pencapekerja`
  ADD CONSTRAINT `fk_admin1` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`);

--
-- Constraints for table `penerimaankerja`
--
ALTER TABLE `penerimaankerja`
  ADD CONSTRAINT `penerimaan_lowongan_1` FOREIGN KEY (`id_lowongan`) REFERENCES `lowongan` (`id_lowongan`) ON DELETE CASCADE,
  ADD CONSTRAINT `penerimaan_lowongan_2` FOREIGN KEY (`id_pencakerja`) REFERENCES `pencakerja` (`id_pencakerja`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
