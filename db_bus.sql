-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 07:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_taru` int(11) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `type_bus` int(11) DEFAULT NULL,
  `lama` int(11) DEFAULT NULL,
  `harga` int(12) DEFAULT NULL,
  `total_bayar` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_transaksi`, `id_taru`, `tgl_berangkat`, `type_bus`, `lama`, `harga`, `total_bayar`) VALUES
('B001', 3, '2017-10-13', 1, 2, 1200000, 2400000),
('B005', 3, '2017-10-13', 2, 3, 1400000, 4200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `level` enum('admin','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `username`, `password`, `nama_lengkap`, `jk`, `level`) VALUES
(6, 'tio', 'b71b3e083dd4533ed48421a696890835', 'tio', 'laki-laki', 'pelanggan'),
(7, 'fauzi', '0bd9897bf12294ce35fdc0e21065c8a7', 'fauzi', 'laki-laki', 'pelanggan'),
(8, 'robi', 'b8b743a499e461922accad58fdbf25d2', 'robi', 'laki-laki', 'pelanggan'),
(10, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'robby julian', 'laki-laki', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_operator`
--

CREATE TABLE `tbl_operator` (
  `id_op` varchar(10) NOT NULL,
  `nama_op` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_operator`
--

INSERT INTO `tbl_operator` (`id_op`, `nama_op`, `alamat`, `telp`) VALUES
('11', 'aulio', 'jl pengkolan', 812123454);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `no_ktp` varchar(16) NOT NULL,
  `nm_lengkap` varchar(50) NOT NULL,
  `t_lhr` varchar(30) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`no_ktp`, `nm_lengkap`, `t_lhr`, `tgl_lhr`, `alamat`, `no_hp`, `pekerjaan`, `agama`) VALUES
('1234', 'fa', 'pdg', '2017-10-13', 'jl', 123456775, 'mhs', 'Katolik');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_taru`
--

CREATE TABLE `tbl_taru` (
  `id_taru` int(11) NOT NULL,
  `rute` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_taru`
--

INSERT INTO `tbl_taru` (`id_taru`, `rute`) VALUES
(1, 'padang-bukittinggi'),
(2, 'padang-solok'),
(3, 'padang-padangpanjang'),
(4, 'padang-pyk'),
(5, 'padang-riau'),
(6, 'padang-batusagnkar'),
(7, 'padang-painan'),
(8, 'padang-pariaman'),
(9, 'padang-pasaman'),
(10, 'padang-Sawahlunto');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(10) NOT NULL,
  `id_op` varchar(10) NOT NULL,
  `no_ktp` varchar(16) NOT NULL,
  `tgl_transaksi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_op`, `no_ktp`, `tgl_transaksi`) VALUES
('B001', '11', '1234', '2017-10-04'),
('B002', '11', '1234', '2017-10-28'),
('B003', '11', '1234', '2017-10-13'),
('B004', '11', '1234', '2017-10-13'),
('B005', '11', '1234', '2017-10-13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_taru` (`id_taru`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tbl_operator`
--
ALTER TABLE `tbl_operator`
  ADD PRIMARY KEY (`id_op`);

--
-- Indexes for table `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`no_ktp`);

--
-- Indexes for table `tbl_taru`
--
ALTER TABLE `tbl_taru`
  ADD PRIMARY KEY (`id_taru`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_op` (`id_op`),
  ADD KEY `no_ktp` (`no_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_taru`
--
ALTER TABLE `tbl_taru`
  MODIFY `id_taru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_taru`) REFERENCES `tbl_taru` (`id_taru`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_op`) REFERENCES `tbl_operator` (`id_op`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`no_ktp`) REFERENCES `tbl_pelanggan` (`no_ktp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
