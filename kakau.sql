-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 23 Feb 2021 pada 06.29
-- Versi Server: 5.7.17-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kakau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_admin`
--

CREATE TABLE `data_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(11) NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_admin`
--

INSERT INTO `data_admin` (`id_admin`, `username`, `password`, `hak_akses`, `photo`) VALUES
(123, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Iklan_AC_Januari1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_investor`
--

CREATE TABLE `data_investor` (
  `id_investor` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `kewarga_negaraan` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `rencana_investasi` varchar(100) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  `paket_investasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `info_laundry` varchar(50) NOT NULL,
  `no_hp1` varchar(20) NOT NULL,
  `no_hp2` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'pelanggan', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `data_investor`
--
ALTER TABLE `data_investor`
  ADD PRIMARY KEY (`id_investor`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_investor`
--
ALTER TABLE `data_investor`
  MODIFY `id_investor` int(200) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
