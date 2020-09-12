-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2020 at 11:13 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isbn` varchar(10) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `isbn`, `tahun_terbit`, `pengarang`, `penerbit`) VALUES
(1, 'Guess What!!!', '907570091', '2018', 'Rodrigesss', 'Transteev'),
(3, 'Batu Sejarah 2', '910998012', '2018', 'Budi Bedul', 'Lentera Pusaka'),
(8, 'Believe In What You See', '190086271', '2012', 'Andrea Himmington', 'Bookerian'),
(9, 'Batu Sejarah 1', '130900921', '2014', 'Budi Bedul', 'Lentera Pusaka'),
(10, 'Bumi Humanis', '281092201', '2017', 'Anton Pariaman', 'Bluzz'),
(11, 'Oceanic Theme', '710288171', '2016', 'Daniel Roos', 'Ornament'),
(12, 'Hilang di Tengah Rembulan', '124609001', '2009', 'Hilal Ramadhan', 'Seismik'),
(13, 'Muda-Mudi Moods', '092119230', '2015', 'moody Werd', 'Literals'),
(14, 'Just Do It!', '101830182', '2009', 'James W. Fierro', 'Flychange'),
(15, 'Apa Aja Lah!!!', '1323445672', '2008', 'Anton Pariaman', 'Bookerian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
