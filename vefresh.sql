-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 07:31 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vefresh`
--

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id` int(11) NOT NULL,
  `kelurahan` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `tanggal_pembelian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rincian_pesan`
--

CREATE TABLE `rincian_pesan` (
  `id` int(11) NOT NULL,
  `id_pesan` int(11) NOT NULL,
  `id_stok_sayur` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE `sayur` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`id`, `nama`, `deskripsi`, `foto`, `harga`) VALUES
(1, 'Anggur', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'anggur.jpg', 65000),
(2, 'Apel', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'apel.jpg', 43000),
(3, 'Jeruk', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'jeruk.jpg', 20000),
(4, 'Mangga', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'mangga.jpg', 15000),
(5, 'Markisa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'markisa.jpg', 23000),
(6, 'Melon', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'melon.jpg', 25000),
(7, 'Pear', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'pear.jpg', 33000),
(8, 'Pisang', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'pisang.jpg', 20000),
(9, 'Semangka', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'semangka.jpg', 20000),
(10, 'Strawberry', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tincidunt, neque vitae aliquet mollis', 'strawberry.jpg', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `stok_sayur`
--

CREATE TABLE `stok_sayur` (
  `id` int(11) NOT NULL,
  `id_sayur` int(11) NOT NULL,
  `waktu_datang` datetime NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stok_sayur`
--

INSERT INTO `stok_sayur` (`id`, `id_sayur`, `waktu_datang`, `stok`) VALUES
(1, 1, '2019-11-11 00:00:00', 20),
(2, 1, '2019-11-11 06:00:00', 20);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `testimoni` text NOT NULL,
  `tanggal_testimoni` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(400) NOT NULL,
  `alamat` text DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kelurahan` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `alamat`, `kecamatan`, `kelurahan`, `email`) VALUES
(1, 'fakhri19', 'Fakhri Imaduddin', '94cd166631d14dab533858b9b47e9584a2ff3f65', NULL, NULL, NULL, 'fakhriimaduddin19@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `rincian_pesan`
--
ALTER TABLE `rincian_pesan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pesan` (`id_pesan`),
  ADD KEY `id_stok_sayur` (`id_stok_sayur`);

--
-- Indexes for table `sayur`
--
ALTER TABLE `sayur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stok_sayur`
--
ALTER TABLE `stok_sayur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sayur` (`id_sayur`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rincian_pesan`
--
ALTER TABLE `rincian_pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sayur`
--
ALTER TABLE `sayur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `stok_sayur`
--
ALTER TABLE `stok_sayur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `rincian_pesan`
--
ALTER TABLE `rincian_pesan`
  ADD CONSTRAINT `rincian_pesan_ibfk_1` FOREIGN KEY (`id_pesan`) REFERENCES `pesan` (`id`),
  ADD CONSTRAINT `rincian_pesan_ibfk_2` FOREIGN KEY (`id_stok_sayur`) REFERENCES `stok_sayur` (`id`);

--
-- Constraints for table `stok_sayur`
--
ALTER TABLE `stok_sayur`
  ADD CONSTRAINT `stok_sayur_ibfk_1` FOREIGN KEY (`id_sayur`) REFERENCES `sayur` (`id`);

--
-- Constraints for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
