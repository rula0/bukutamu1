-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 04:26 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataguru`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbakun`
--

CREATE TABLE `tbakun` (
  `no` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbakun`
--

INSERT INTO `tbakun` (`no`, `nama`, `tgl`, `alamat`, `username`, `password`) VALUES
(2, 'hahaha', '1213', 'fffg', 'sehtg', 'asdfdf'),
(3, 'aku', '123', 'ggg', 'rr', 'rr'),
(5, 'eee', '123', 'ggg', 'rr', 'uu'),
(6, 'eee', '123', 'fffg', 'rr', 'rr'),
(7, 'huhhu', '123', 'ggg', 'rr', 'zz'),
(8, 'kkk', '333', 'uuu', 'www', 'com'),
(9, 'Fitrah', '28', 'Bandung', 'fitrah', '12345'),
(10, 'fittrah', '28', 'Bandung', 'fitrah', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbguru`
--

CREATE TABLE `tbguru` (
  `no` int(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nuptk` varchar(50) NOT NULL,
  `jeniskelamin` varchar(50) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `gelar` varchar(50) NOT NULL,
  `skawal` varchar(50) NOT NULL,
  `tmt` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `progstudi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbguru`
--

INSERT INTO `tbguru` (`no`, `nama`, `nuptk`, `jeniskelamin`, `tempat`, `tanggal`, `gelar`, `skawal`, `tmt`, `jabatan`, `progstudi`) VALUES
(5, 'eee', 'erer', 'qsqs', 'rtert', '1212', 'wdewde', 'weeq', 'erer', 'ere', '7utyjh'),
(6, 'Fitrah', '12356', 'Pria', 'Bandung', '28', 'Siswa', 'Garut', 'SMP37BDG', 'Mahasiswa', 'DKV'),
(7, 'jnck', '134', 'Pria', 'Bandung', '27', 'Siswa', 'Garut', 'SMP37BDG', 'Mahasiswa', 'DKV'),
(8, 'yuugfy', 'jjuytuyt', 'qsqs', 'dwdewde', '1212', 'kjhlhj', 'Garut', 'sdfs', 'ere', 'DKV');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbakun`
--
ALTER TABLE `tbakun`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbguru`
--
ALTER TABLE `tbguru`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbakun`
--
ALTER TABLE `tbakun`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbguru`
--
ALTER TABLE `tbguru`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
