-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2018 at 06:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trang-web-nghe-nhac`
--

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `idBaiHat` int(10) NOT NULL,
  `tenBaiHat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idTheLoai` int(10) NOT NULL,
  `idCaSi` int(10) NOT NULL,
  `idNhom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dangBoi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`idBaiHat`, `tenBaiHat`, `idTheLoai`, `idCaSi`, `idNhom`, `path`, `dangBoi`) VALUES
(0, 'Nơi này có anh', 1, 0, '0', 'https://www.nhaccuatui.com/mh/auto/JzDZ5BW4RSTI', ''),
(1, 'Gửi ngàn lời yêu', 1, 1, '0', 'https://www.nhaccuatui.com/mh/auto/r3CJejSG3lkn', ''),
(2, 'She will be loved', 1, 3, '2', 'https://www.nhaccuatui.com/mh/auto/4SF8VzM4cY', ''),
(3, 'Clown', 5, 2, '1', 'https://www.nhaccuatui.com/mh/auto/pcGiy73p1Qfl', '');

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `idCasi` int(10) NOT NULL,
  `tenCaSi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocGia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`idCasi`, `tenCaSi`, `quocGia`) VALUES
(0, 'Sơn Tùng MTP', 'Việt Nam'),
(1, 'Tuấn Hưng', 'Việt Nam'),
(2, 'Leessang', 'Hàn Quốc'),
(3, 'Maroon 5', 'Mỹ');

-- --------------------------------------------------------

--
-- Table structure for table `nhombaihat`
--

CREATE TABLE `nhombaihat` (
  `idNhom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenNhom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhombaihat`
--

INSERT INTO `nhombaihat` (`idNhom`, `tenNhom`) VALUES
('0', 'vpop'),
('1', 'kpop'),
('2', 'usuk');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `idTheLoai` int(10) NOT NULL,
  `tenTheLoai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`idTheLoai`, `tenTheLoai`) VALUES
(0, 'jazz'),
(1, 'pop'),
(2, 'rock'),
(3, 'blue'),
(4, 'soul'),
(5, 'hiphop'),
(6, 'folk'),
(7, 'latin');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `phanquyen`) VALUES
(1, 'atnguyen', 'atnguyen30198@gmail.com', 'anhtu123', 0),
(2, 'admin', 'atnguyen301297@gmail.com', 'ThuanTu', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`idBaiHat`),
  ADD KEY `idCaSi` (`idCaSi`),
  ADD KEY `idTheLoai` (`idTheLoai`),
  ADD KEY `idNhomBaiHat` (`idNhom`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`idCasi`);

--
-- Indexes for table `nhombaihat`
--
ALTER TABLE `nhombaihat`
  ADD PRIMARY KEY (`idNhom`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`idCaSi`) REFERENCES `casi` (`idCasi`),
  ADD CONSTRAINT `baihat_ibfk_2` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`idTheLoai`),
  ADD CONSTRAINT `baihat_ibfk_3` FOREIGN KEY (`idNhom`) REFERENCES `nhombaihat` (`idNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
