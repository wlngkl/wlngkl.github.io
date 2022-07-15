-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 05:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `idkategori` varchar(5) NOT NULL,
  `namakategori` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`idkategori`, `namakategori`) VALUES
('MN001', 'Minuman'),
('KM001', 'Komputer'),
('MK001', 'Makanan');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `idpelanggan` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbpelanggan`
--

INSERT INTO `tbpelanggan` (`idpelanggan`, `nama`, `alamat`, `nohp`) VALUES
('PL002', 'Eko', 'Jalan Adi Sucipto', '085599774455'),
('PL003', 'Budi', 'Jl. Sungai Raya Dalam', '08224455566'),
('PL004', 'Sarifudin', 'Jl. Ahmad Yani', '082251803304'),
('PL007', 'Andi', 'Jl. Adi Sucipto', '081122334455');

-- --------------------------------------------------------

--
-- Table structure for table `tbproduk`
--

CREATE TABLE `tbproduk` (
  `idproduk` varchar(5) NOT NULL,
  `idkategori` varchar(5) NOT NULL,
  `namaproduk` varchar(50) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `stok` varchar(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbproduk`
--

INSERT INTO `tbproduk` (`idproduk`, `idkategori`, `namaproduk`, `satuan`, `stok`, `harga`) VALUES
('PR001', 'KM001', 'PC', 'PCS', '20', 7290000),
('PR005', 'KM001', 'LENOVO', 'PCS', '700', 7000000),
('PR004', 'MN001', 'SPRITE', 'BOTOL', '500', 60000),
('LP001', 'MK001', 'POP MIE', 'PCS', '900', 20000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `tbproduk`
--
ALTER TABLE `tbproduk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `idkategori` (`idkategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
