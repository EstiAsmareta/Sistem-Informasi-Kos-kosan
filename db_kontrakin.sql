-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kontrakin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kamar_batavia`
--

CREATE TABLE `kamar_batavia` (
  `No_kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_batavia`
--

INSERT INTO `kamar_batavia` (`No_kamar`, `status`) VALUES
(1, 'Terisi'),
(2, 'Terisi'),
(3, 'Terisi'),
(4, 'Terisi'),
(5, 'Terisi'),
(6, 'Terisi'),
(7, 'Terisi'),
(8, 'Terisi');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_berkah`
--

CREATE TABLE `kamar_berkah` (
  `No_Kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_berkah`
--

INSERT INTO `kamar_berkah` (`No_Kamar`, `status`) VALUES
(1, 'Kosong'),
(2, 'Kosong'),
(3, 'Kosong'),
(4, 'Kosong'),
(5, 'Terisi'),
(6, 'Terisi'),
(7, 'Kosong'),
(8, 'Terisi'),
(9, 'Kosong'),
(10, 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_citra`
--

CREATE TABLE `kamar_citra` (
  `No_Kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_citra`
--

INSERT INTO `kamar_citra` (`No_Kamar`, `status`) VALUES
(1, 'Terisi'),
(2, 'Terisi'),
(3, 'Kosong'),
(4, 'Kosong'),
(5, 'Kosong'),
(6, 'Kosong'),
(7, 'Kosong'),
(8, 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_kirana`
--

CREATE TABLE `kamar_kirana` (
  `No_kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_kirana`
--

INSERT INTO `kamar_kirana` (`No_kamar`, `status`) VALUES
(1, 'Kosong'),
(2, 'Kosong'),
(3, 'Kosong'),
(4, 'Kosong'),
(5, 'Kosong'),
(6, 'Kosong');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_orange`
--

CREATE TABLE `kamar_orange` (
  `No_kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_orange`
--

INSERT INTO `kamar_orange` (`No_kamar`, `status`) VALUES
(1, 'Terisi'),
(2, 'Kosong'),
(3, 'Terisi'),
(4, 'Kosong'),
(5, 'Tersis'),
(6, 'Kosong'),
(7, 'Terisi'),
(8, 'Terisi');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_senja`
--

CREATE TABLE `kamar_senja` (
  `No_kamar` int(4) NOT NULL,
  `status` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamar_senja`
--

INSERT INTO `kamar_senja` (`No_kamar`, `status`) VALUES
(1, 'Terisi'),
(2, 'Kosong'),
(3, 'Terisi'),
(4, 'Kosong'),
(5, 'Tersis'),
(6, 'Terisi'),
(7, 'Terisi'),
(8, 'Terisi'),
(9, 'Terisi'),
(10, 'Terisi');

-- --------------------------------------------------------

--
-- Table structure for table `kos`
--

CREATE TABLE `kos` (
  `kode_kos` varchar(6) NOT NULL,
  `jenis_kos` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_pemilik` int(11) DEFAULT NULL,
  `tipe` varchar(255) DEFAULT NULL,
  `biaya` int(20) DEFAULT NULL,
  `fasilitas` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `nama_kos` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kos`
--

INSERT INTO `kos` (`kode_kos`, `jenis_kos`, `alamat`, `id_pemilik`, `tipe`, `biaya`, `fasilitas`, `status`, `nama_kos`) VALUES
('KBK001', 'Khusus Laki-laki', 'Gang Setia 4 Kandang Limun Muara Bangkahulu Kota Bengkulu', 3, 'Elit', 1000000, 'Dilengkapi CCTV, Dilengkapi AC, Free Wifi', 'Tersedia', 'Kos Berkah'),
('KBV001', 'Campur', 'Gang Damai Kandang Limun Muara Bangkahulu Kota Bengkulu', 2, 'Ekslusif', 750000, 'Disediakan Lemari, Meja dan Kursi Belajar, Free Wifi', 'Penuh', 'Kos Batavia'),
('KCR001', 'Khusus Perempuan', 'Gang Juwita 2 Kandang Limun Muara Bangkahulu Kota Bengkulu', 1, 'Standar', 500000, 'Free Listrik, Free Air, Free Wifi', 'Tersedia', 'Kos Citra'),
('KKR001', 'Khusus perempuan', 'Gang Perintis Tugu Batu Muara Bangkahulu Kota Bengkulu', 4, 'Elit', 2000000, 'Dilengkapi TV, Dilengkapi AC, Free Snack, Free Wifi', 'Tersedia', 'Kos Kirana'),
('KOG001', 'Campur', 'Gang Jihan Musik Rawa Makmur Muara Bangkahulu Kota Bengkulu', 6, 'Elit', 2500000, 'Dilengkapi CCTV,Dilengkapi AC,Free Wifi,Free Laundry,Dilengkapi Kantin', 'Tersedia', 'Kos Orange'),
('KSJ001', 'Khusus Laki-laki', 'Merpati 5 Rawa Makmur Muara Bangkahulu Kota Bengkulu', 5, 'Eklusif', 70000, 'Disediakan Meja dan kursi Beljar ,Free Wifi', 'Tersedia', 'Kos Senja');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `kode_kos` varchar(6) DEFAULT NULL,
  `tipe_pembayaran` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `kode_transfer` int(11) DEFAULT NULL,
  `id_penghuni` int(11) DEFAULT NULL,
  `konfirmasi` varchar(5) DEFAULT NULL,
  `No_kamar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pemilik_kos`
--

CREATE TABLE `pemilik_kos` (
  `id_pemilik` int(11) NOT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemilik_kos`
--

INSERT INTO `pemilik_kos` (`id_pemilik`, `no_telp`, `nama`, `alamat`) VALUES
(1, '089624711254', 'Marsa Hulwa Indri Muthi', 'Rawa Makmur'),
(2, '087897196200', 'Esti Asmareta Ayu', 'Hibrida'),
(3, '085378645266', 'Fregy Rese Rio Sandika', 'Pagar Dewa'),
(4, '085768555821', 'Muhammad Fachrurozi', 'Pematang Gubernur'),
(5, '089634251106', 'Adelia Ayu', 'Sawah Lebar'),
(6, '083172961583', 'Revaldo Relinsyah', 'Sukamerindu');

-- --------------------------------------------------------

--
-- Table structure for table `penghuni`
--

CREATE TABLE `penghuni` (
  `id_penghuni` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `Sex` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `no_hp` varchar(13) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `Nama_Kos` varchar(20) DEFAULT NULL,
  `Kosan_no` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kamar_batavia`
--
ALTER TABLE `kamar_batavia`
  ADD PRIMARY KEY (`No_kamar`);

--
-- Indexes for table `kamar_berkah`
--
ALTER TABLE `kamar_berkah`
  ADD PRIMARY KEY (`No_Kamar`);

--
-- Indexes for table `kamar_citra`
--
ALTER TABLE `kamar_citra`
  ADD PRIMARY KEY (`No_Kamar`);

--
-- Indexes for table `kamar_kirana`
--
ALTER TABLE `kamar_kirana`
  ADD PRIMARY KEY (`No_kamar`);

--
-- Indexes for table `kamar_orange`
--
ALTER TABLE `kamar_orange`
  ADD PRIMARY KEY (`No_kamar`);

--
-- Indexes for table `kamar_senja`
--
ALTER TABLE `kamar_senja`
  ADD PRIMARY KEY (`No_kamar`);

--
-- Indexes for table `kos`
--
ALTER TABLE `kos`
  ADD PRIMARY KEY (`kode_kos`),
  ADD KEY `id_pemilik` (`id_pemilik`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `kode_kos` (`kode_kos`),
  ADD KEY `id_penghuni` (`id_penghuni`),
  ADD KEY `No_kamar` (`No_kamar`);

--
-- Indexes for table `pemilik_kos`
--
ALTER TABLE `pemilik_kos`
  ADD PRIMARY KEY (`id_pemilik`);

--
-- Indexes for table `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id_penghuni`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kos`
--
ALTER TABLE `kos`
  ADD CONSTRAINT `kos_ibfk_1` FOREIGN KEY (`id_pemilik`) REFERENCES `pemilik_kos` (`id_pemilik`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `id_penghuni` FOREIGN KEY (`id_penghuni`) REFERENCES `penghuni` (`id_penghuni`),
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`kode_kos`) REFERENCES `kos` (`kode_kos`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`kode_kos`) REFERENCES `kos` (`kode_kos`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_batavia` (`No_kamar`),
  ADD CONSTRAINT `pembayaran_ibfk_4` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_berkah` (`No_Kamar`),
  ADD CONSTRAINT `pembayaran_ibfk_5` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_citra` (`No_Kamar`),
  ADD CONSTRAINT `pembayaran_ibfk_6` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_kirana` (`No_kamar`),
  ADD CONSTRAINT `pembayaran_ibfk_7` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_senja` (`No_kamar`),
  ADD CONSTRAINT `pembayaran_ibfk_8` FOREIGN KEY (`No_kamar`) REFERENCES `kamar_orange` (`No_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
