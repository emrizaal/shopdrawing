-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2018 at 09:08 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopdrawing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `as_build_drawing`
--

CREATE TABLE `as_build_drawing` (
  `id_as_build_drawing` int(11) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_as_build_drawing`
--

CREATE TABLE `detail_as_build_drawing` (
  `id_detail_as_build_drawing` int(11) NOT NULL,
  `id_as_build_drawing` int(11) NOT NULL,
  `judul_gambar` varchar(128) NOT NULL,
  `nomor_shop_drawing` varchar(100) NOT NULL,
  `is_kembali` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_gambar` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detail_shop_drawing`
--

CREATE TABLE `detail_shop_drawing` (
  `id_detail_shop_drawing` int(11) NOT NULL,
  `id_shopdrawing` int(11) NOT NULL,
  `judul_gambar` varchar(128) NOT NULL,
  `nomor_shop_drawing` varchar(100) NOT NULL,
  `is_kembali` tinyint(1) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_gambar` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `request_of_work`
--

CREATE TABLE `request_of_work` (
  `id_request_of_work` int(11) NOT NULL,
  `no_request_of_work` varchar(50) NOT NULL,
  `jenis_pekerjaan` varchar(30) NOT NULL,
  `uraian_pekerjaan` text NOT NULL,
  `satuan_pekerjaan` varchar(5) NOT NULL,
  `kuantitas_pekerjaan` int(11) NOT NULL,
  `lokasi_pekerjaan` varchar(50) NOT NULL,
  `no_item` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shopdrawing`
--

CREATE TABLE `shopdrawing` (
  `id_shopdrawing` int(11) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `tanggal_pembuatan` date NOT NULL,
  `id_admin` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_shop_drawing`
--
ALTER TABLE `detail_shop_drawing`
  ADD PRIMARY KEY (`id_detail_shop_drawing`);

--
-- Indexes for table `request_of_work`
--
ALTER TABLE `request_of_work`
  ADD PRIMARY KEY (`id_request_of_work`);

--
-- Indexes for table `shopdrawing`
--
ALTER TABLE `shopdrawing`
  ADD PRIMARY KEY (`id_shopdrawing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_shop_drawing`
--
ALTER TABLE `detail_shop_drawing`
  MODIFY `id_detail_shop_drawing` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_of_work`
--
ALTER TABLE `request_of_work`
  MODIFY `id_request_of_work` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shopdrawing`
--
ALTER TABLE `shopdrawing`
  MODIFY `id_shopdrawing` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
