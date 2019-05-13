-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 07:52 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `japri`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `bonus` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `nama`, `pass`, `bonus`) VALUES
(1, 'admin', 'Herman', '21232f297a57a5a743894a0e4a801fc3', 152400);

-- --------------------------------------------------------

--
-- Table structure for table `crew`
--

CREATE TABLE `crew` (
  `id_crew` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `piutang` bigint(9) NOT NULL,
  `bagihasil` bigint(9) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crew`
--

INSERT INTO `crew` (`id_crew`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `piutang`, `bagihasil`, `keterangan`) VALUES
(1, 'Aay ramadhan', '', '0000-00-00', '', 0, 514250, '-'),
(2, 'Acep Ahmad saroni', '', '0000-00-00', '', 0, 0, '-'),
(3, 'Agung Wahyu Ginanjar', '', '0000-00-00', '', 274800, 158535, '-'),
(4, 'Alifah Nursyabani', '', '0000-00-00', '', 0, 2300, '-'),
(5, 'Alya Choirunnisa', '', '0000-00-00', '', 0, 2750, '-'),
(6, 'Anggita Rifamuthya', '', '0000-00-00', '', 168000, 28100, '-'),
(7, 'Anida Camelia', '', '0000-00-00', '', 0, 0, '-'),
(8, 'Annisa Nur rahmah', '', '0000-00-00', '', 0, 9300, '-'),
(9, 'Annisa Choirunnisa', '', '0000-00-00', '', 0, 800, '-'),
(10, 'Annisa Syahrani', '', '0000-00-00', '', 0, 5000, '-'),
(11, 'Atthariq daffa', '', '0000-00-00', '', 13000, 3900, '-'),
(12, 'Ayuni Dewi', '', '0000-00-00', '', 0, 45500, '-'),
(13, 'Budianto', '', '0000-00-00', '', 33500, 6050, '-'),
(14, 'Cindi Irmadati', '', '0000-00-00', '', 136500, 60700, '-'),
(15, 'Dahlia Aisyah', '', '0000-00-00', '', 2500, 31150, '-'),
(16, 'Dede Rahma', '', '0000-00-00', '', 21000, 5900, '-'),
(17, 'Dede Rohaeni', '', '0000-00-00', '', 64500, 40650, '-'),
(18, 'Depi Siti Wahyuni', '', '0000-00-00', '', 67000, 19300, '-'),
(19, 'Desi Lestari', '', '0000-00-00', '', 40000, 62295, '-'),
(20, 'Dhimas - PLS', '', '0000-00-00', '', 3000, 900, '-'),
(21, 'Dicky', '', '0000-00-00', '', 0, 0, '-'),
(22, 'Dina khusnul Khotimah', '', '0000-00-00', '', 66500, 75550, '-'),
(23, 'Dini Dinahastuti', '', '0000-00-00', '', 0, 31200, '-'),
(24, 'Erna puspitasari', '', '0000-00-00', '', 0, 40805, '-'),
(25, 'Fadila Prameswari', '', '0000-00-00', '', 201500, 64550, '-'),
(26, 'Farel Amar', '', '0000-00-00', '', 0, 0, '-'),
(27, 'Fazri', '', '0000-00-00', '', 205500, 79050, '-'),
(28, 'Felictya Azzahra', '', '0000-00-00', '', 94500, 28350, '-'),
(29, 'Fitria Febrianti', '', '0000-00-00', '', 260500, 75750, '-'),
(30, 'Hamzah', '', '0000-00-00', '', 51000, 13300, '-'),
(31, 'Heri Muhammad Farhan', '', '0000-00-00', '', 0, 0, '-'),
(32, 'Hesti Novianti', '', '0000-00-00', '', 100000, 29600, '-'),
(33, 'Ichsan Alif', '', '0000-00-00', '', 1500, 450, '-'),
(34, 'Ilmiyatul', '', '0000-00-00', '', 0, 22950, '-'),
(35, 'Indra Nurfadillah', '', '0000-00-00', '', 0, 5700, '-'),
(36, 'Irfan - FISIP', '', '0000-00-00', '', 0, 5550, '-'),
(37, 'Japri - Ai Intan', '', '0000-00-00', '', 0, 0, '-'),
(38, 'Japri - Rizal', '', '0000-00-00', '', 0, 0, '-'),
(39, 'Keukeu Herawati', '', '0000-00-00', '', 10000, 3000, '-'),
(40, 'Khoirunnisa Maudy Sofiani', '', '0000-00-00', '', 0, 10350, '-'),
(41, 'Krisda Destira', '', '0000-00-00', '', 0, 0, '-'),
(42, 'Lavia Sucia', '', '0000-00-00', '', 64500, 19350, '-'),
(43, 'Lisna Muniroh', '', '0000-00-00', '', 18000, 23800, '-'),
(44, 'Listia Melawati', '', '0000-00-00', '', 103000, 66850, '-'),
(45, 'M. Adha Zafarulloh', '', '0000-00-00', '', 0, 600, '-'),
(46, 'M. Ahmad Hanafi', '', '0000-00-00', '', 31850, 0, '-'),
(47, 'M. Alwin', '', '0000-00-00', '', 358250, 176725, '-'),
(48, 'M. Nurhasa Fauzi', '', '0000-00-00', '', 147000, 63900, '-'),
(49, 'Marina Anggraeni', '', '0000-00-00', '', 0, 0, '-'),
(50, 'Mella Tringastuti', '', '0000-00-00', '', 105000, 47050, '-'),
(51, 'Mu\'min Muttaqin', '', '0000-00-00', '', 725500, 74550, '-'),
(52, 'Mumu', '', '0000-00-00', '', 0, 8400, '-'),
(53, 'Nabila Siti Nurfauziah', '', '0000-00-00', '', 0, 0, '-'),
(54, 'Nadya Tasyafira ', '', '0000-00-00', '', 94500, 27950, '-'),
(55, 'Nirmala', '', '0000-00-00', '', 0, 0, '-'),
(56, 'Nisa Sundari', '', '0000-00-00', '', 19000, 26965, '-'),
(57, 'Novelia', '', '0000-00-00', '', 0, 0, '-'),
(58, 'Pina Prianti', '', '0000-00-00', '', 0, 686, '-'),
(59, 'Rahmania sacarin', '', '0000-00-00', '', 61500, 176350, '-'),
(60, 'Rati Aprianti', '', '0000-00-00', '', 345500, 124600, '-'),
(61, 'Revaldy Zacky', '', '0000-00-00', '', 0, 5100, '-'),
(62, 'Revi Febriana', '', '0000-00-00', '', 88000, 25200, '-'),
(63, 'Reza M. Ardhy', '', '0000-00-00', '', 0, 0, '-'),
(64, 'Rezkita', '', '0000-00-00', '', 68000, 38000, '-'),
(65, 'Rifkie', '', '0000-00-00', '', 168500, 68750, '-'),
(66, 'Rika Dewi Nirwana', '', '0000-00-00', '', 13000, 23800, '-'),
(67, 'Rika Silvia', '', '0000-00-00', '', 190000, 83050, '-'),
(68, 'Rima Melati', '', '0000-00-00', '', 0, 19650, '-'),
(69, 'Rina Nuranisa', '', '0000-00-00', '', 537300, 126455, '-'),
(70, 'Rizki', '', '0000-00-00', '', 54600, 33630, '-'),
(71, 'Rosa Nurhalisa', '', '0000-00-00', '', 0, 0, '-'),
(72, 'Sandi - KESMAS', '', '0000-00-00', '', 0, 0, '-'),
(73, 'Siti Aisyah', '', '0000-00-00', '', 15500, 4250, '-'),
(74, 'Siti Eka', '', '0000-00-00', '', 30000, 5100, '-'),
(75, 'Siti Fatimah', '', '0000-00-00', '', 0, 0, '-'),
(76, 'Sulis', '', '0000-00-00', '', 28500, 70950, '-'),
(77, 'Susi', '', '0000-00-00', '', 31500, 87550, '-'),
(78, 'Viviana', '', '0000-00-00', '', 0, 0, '-'),
(79, 'Walida', '', '0000-00-00', '', 0, 240, '-'),
(80, 'Wana Rimba', '', '0000-00-00', '', 0, 900, '-'),
(81, 'Windi Widiasari', '', '0000-00-00', '', 18000, 11655, '-'),
(82, 'Yesi', '', '0000-00-00', '', 0, 31700, '-');

-- --------------------------------------------------------

--
-- Table structure for table `detil_print`
--

CREATE TABLE `detil_print` (
  `id_print` int(11) NOT NULL,
  `nama` tinytext NOT NULL,
  `harga` bigint(9) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_print`
--

INSERT INTO `detil_print` (`id_print`, `nama`, `harga`, `tanggal`) VALUES
(1, 'Herman', 835200, '2019-05-12 11:54:44'),
(2, 'Herman', 835200, '2019-05-12 11:55:32'),
(3, 'Herman', 835200, '2019-05-12 11:56:12'),
(4, 'Herman', 835200, '2019-05-12 11:56:35'),
(5, 'Herman', 835200, '2019-05-12 11:56:56'),
(6, 'Herman', 835200, '2019-05-12 13:36:24'),
(7, 'Herman', 266200, '2019-05-13 22:09:31'),
(8, 'Herman', 266200, '2019-05-13 22:09:53'),
(9, 'Herman', 1318000, '2019-05-13 22:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id_discount` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `potongan` bigint(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `discount`
--

INSERT INTO `discount` (`id_discount`, `nama`, `potongan`) VALUES
(1, 'Tidak ada', 0),
(6, 'Skripsi', 20);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id_harga` int(11) NOT NULL,
  `barang` text NOT NULL,
  `harga` bigint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id_harga`, `barang`, `harga`) VALUES
(1, 'Print Normal', 500),
(2, 'Print 50% Warna', 750),
(3, 'Print 100% warna', 1000),
(4, 'Jilid', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `ledger`
--

CREATE TABLE `ledger` (
  `id_ledger` int(11) NOT NULL,
  `keterangan` longtext,
  `debit` bigint(7) NOT NULL,
  `saldo` bigint(7) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ledger`
--

INSERT INTO `ledger` (`id_ledger`, `keterangan`, `debit`, `saldo`, `tanggal`) VALUES
(1, 'PENDAPATAN PRINT', 835200, 835200, '2019-05-12 11:55:32'),
(2, 'PENDAPATAN PRINT', 835200, 1670400, '2019-05-12 11:56:12'),
(3, 'PENDAPATAN PRINT', 835200, 2505600, '2019-05-12 11:56:35'),
(4, 'PENDAPATAN PRINT', 835200, 3340800, '2019-05-12 11:56:56'),
(5, 'PENDAPATAN PRINT', 835200, 4176000, '2019-05-12 13:36:24'),
(6, 'PENDAPATAN PRINT', 266200, 4442200, '2019-05-13 22:09:31'),
(7, 'PENDAPATAN PRINT', 266200, 4708400, '2019-05-13 22:09:53'),
(8, 'PENDAPATAN PRINT', 1318000, 6026400, '2019-05-13 22:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `crew` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `admin` int(11) NOT NULL,
  `print` int(11) NOT NULL,
  `ledger` int(11) NOT NULL,
  `jumlah` bigint(9) NOT NULL,
  `jilid` tinyint(4) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `harga_awal` bigint(9) NOT NULL,
  `harga_diskon` bigint(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `crew`, `discount`, `admin`, `print`, `ledger`, `jumlah`, `jilid`, `tanggal`, `harga_awal`, `harga_diskon`) VALUES
(1, 31, 6, 1, 5, 4, 2040, 3, '2019-05-12 11:56:56', 1044000, 835200),
(2, 31, 6, 1, 6, 5, 2040, 3, '2019-05-12 13:36:25', 1044000, 835200),
(3, 1, 6, 1, 8, 7, 432, 2, '2019-05-13 22:09:54', 332750, 266200),
(4, 1, 6, 1, 9, 8, 2556, 1, '2019-05-13 22:40:59', 1647500, 1318000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `crew`
--
ALTER TABLE `crew`
  ADD PRIMARY KEY (`id_crew`);

--
-- Indexes for table `detil_print`
--
ALTER TABLE `detil_print`
  ADD PRIMARY KEY (`id_print`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id_discount`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id_harga`);

--
-- Indexes for table `ledger`
--
ALTER TABLE `ledger`
  ADD PRIMARY KEY (`id_ledger`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`,`crew`,`discount`,`admin`,`print`,`ledger`),
  ADD KEY `fk_transaksi_crew_idx` (`crew`),
  ADD KEY `fk_transaksi_discount1_idx` (`discount`),
  ADD KEY `fk_transaksi_admin1_idx` (`admin`),
  ADD KEY `fk_transaksi_detil_print1_idx` (`print`),
  ADD KEY `fk_transaksi_ledger1_idx` (`ledger`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `crew`
--
ALTER TABLE `crew`
  MODIFY `id_crew` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `detil_print`
--
ALTER TABLE `detil_print`
  MODIFY `id_print` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id_discount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ledger`
--
ALTER TABLE `ledger`
  MODIFY `id_ledger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_admin1` FOREIGN KEY (`admin`) REFERENCES `admin` (`id_admin`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_crew` FOREIGN KEY (`crew`) REFERENCES `crew` (`id_crew`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_detil_print1` FOREIGN KEY (`print`) REFERENCES `detil_print` (`id_print`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_discount1` FOREIGN KEY (`discount`) REFERENCES `discount` (`id_discount`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_ledger1` FOREIGN KEY (`ledger`) REFERENCES `ledger` (`id_ledger`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
