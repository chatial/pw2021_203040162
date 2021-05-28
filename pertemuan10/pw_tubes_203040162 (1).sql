-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 12:04 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040162`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(15) NOT NULL,
  `img` varchar(50) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `terbit` date NOT NULL,
  `dimensi` varchar(15) NOT NULL,
  `ISBN` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `img`, `judul`, `pengarang`, `terbit`, `dimensi`, `ISBN`) VALUES
(1, '1.jpg', 'Marmut Merah Jambu', 'Raditya Dika', '2010-12-03', '222 halaman', ''),
(2, '2.jpg', 'Ayat Ayat Cinta', 'Habiburrahman El Shirazy', '2004-01-21', '418 halaman', ''),
(3, '3.jpg', 'Mariposa', ' Luluk HF', '2018-04-12', '482 halaman', ''),
(4, '4.jpg', 'Manusia Setengah Salmon', 'Raditya Dika', '2011-04-12', '264 halaman', ''),
(5, '5.jpg', 'Cinta Brontosaurus', 'Raditya Dika', '2006-01-04', '152 halaman', ''),
(6, '6.jpg', 'Dilan 1990', 'Pidi Baiq', '2015-01-14', '330 halaman', ''),
(7, '7.jpg', 'Koala Kumal', 'Raditya Dika', '2015-04-12', '250 halaman', ''),
(8, '8.jpg', 'Laskar Pelangi', 'Andrea Hirata', '2005-03-15', '529 halaman', ''),
(9, '9.jpg', 'Perahu Kertas', 'Dewi Lestari', '2009-02-12', '444 halaman', ''),
(10, '10.jpg', 'Sang Pemimpi', 'Andrea Hirata', '2006-01-12', '292 halaman', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
