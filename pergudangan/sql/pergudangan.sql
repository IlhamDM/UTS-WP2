-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 04:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pergudangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(3) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`) VALUES
('IDM', 'Indomie'),
('MSD', 'Mie Sedap');

-- --------------------------------------------------------

--
-- Table structure for table `brg_keluar`
--

CREATE TABLE `brg_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` varchar(3) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_keluar`
--

INSERT INTO `brg_keluar` (`id_keluar`, `id_barang`, `id_rak`, `jumlah`, `tgl_keluar`, `keterangan`) VALUES
(1, 'IDM', 1, 5, '2020-10-27', 'Dalam bentuk dus');

-- --------------------------------------------------------

--
-- Table structure for table `brg_masuk`
--

CREATE TABLE `brg_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` varchar(3) NOT NULL,
  `id_rak` int(11) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `keterangan` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brg_masuk`
--

INSERT INTO `brg_masuk` (`id_masuk`, `id_barang`, `id_rak`, `jumlah`, `tgl_masuk`, `keterangan`) VALUES
(1, 'IDM', 1, 10, '2020-10-27', 'Dalam bentuk dus');

-- --------------------------------------------------------

--
-- Table structure for table `rak`
--

CREATE TABLE `rak` (
  `id_rak` int(11) NOT NULL,
  `nama_rak` varchar(6) NOT NULL,
  `kapasitas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rak`
--

INSERT INTO `rak` (`id_rak`, `nama_rak`, `kapasitas`) VALUES
(1, 'RAK-1', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_rak` (`id_rak`);

--
-- Indexes for table `rak`
--
ALTER TABLE `rak`
  ADD PRIMARY KEY (`id_rak`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `rak`
--
ALTER TABLE `rak`
  MODIFY `id_rak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brg_keluar`
--
ALTER TABLE `brg_keluar`
  ADD CONSTRAINT `brg_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `brg_keluar_ibfk_2` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`);

--
-- Constraints for table `brg_masuk`
--
ALTER TABLE `brg_masuk`
  ADD CONSTRAINT `brg_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `brg_masuk_ibfk_2` FOREIGN KEY (`id_rak`) REFERENCES `rak` (`id_rak`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
