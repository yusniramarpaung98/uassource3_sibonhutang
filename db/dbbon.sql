-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2020 at 04:47 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbbon`
--

-- --------------------------------------------------------

--
-- Table structure for table `bon`
--

CREATE TABLE `bon` (
  `noP` varchar(100) NOT NULL,
  `namaP` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `alamatK` varchar(100) NOT NULL,
  `tgl_bon` date NOT NULL,
  `tgl_bayar` date NOT NULL,
  `barang` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL,
  `uangmuka` varchar(100) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bon`
--

INSERT INTO `bon` (`noP`, `namaP`, `hp`, `alamatK`, `tgl_bon`, `tgl_bayar`, `barang`, `total`, `uangmuka`, `ket`, `id`) VALUES
('001/BMT/01', 'Reza', '082134567890', '-', '2020-12-31', '2020-12-31', 'Pena, Notes', '400.000', '100.000', 'ATK', 1),
('002/BMT/02', 'Dahliana', '082134567890', '', '2020-01-02', '2020-01-09', 'Berkas', '500.000', '150.000', 'Print', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `noP` varchar(100) NOT NULL,
  `namaP` varchar(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `alamatP` varchar(100) NOT NULL,
  `hp` varchar(100) NOT NULL,
  `kantor` varchar(100) NOT NULL,
  `alamatK` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `noP`, `namaP`, `jk`, `alamatP`, `hp`, `kantor`, `alamatK`) VALUES
(2, '002/BMT/02', 'Dahliana Purba', 'Perempuan', 'Simp. Empat Asahan', '082134567890', 'Kominfo Tanjungbalai', 'Jl. Sudirman KM. 7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `paswd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'indrabmt@gmail.com', 'INDRA BMT', 1, 'Pemilik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bon`
--
ALTER TABLE `bon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bon`
--
ALTER TABLE `bon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
