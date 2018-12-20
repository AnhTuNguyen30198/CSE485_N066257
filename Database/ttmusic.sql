-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2018 lúc 02:18 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `trang-web-nghe-nhac`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baihat`
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
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`idBaiHat`, `tenBaiHat`, `idTheLoai`, `idCaSi`, `idNhom`, `path`, `dangBoi`) VALUES
(0, 'Nơi này có anh', 1, 0, '0', 'https://www.nhaccuatui.com/mh/auto/JzDZ5BW4RSTI', ''),
(1, 'Gửi ngàn lời yêu', 1, 1, '0', 'https://www.nhaccuatui.com/mh/auto/r3CJejSG3lkn', ''),
(2, 'She will be loved', 1, 3, '2', 'https://www.nhaccuatui.com/mh/auto/4SF8VzM4cY', ''),
(3, 'Clown', 5, 2, '1', 'https://www.nhaccuatui.com/mh/auto/pcGiy73p1Qfl', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `casi`
--

CREATE TABLE `casi` (
  `idCasi` int(10) NOT NULL,
  `tenCaSi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocGia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `casi`
--

INSERT INTO `casi` (`idCasi`, `tenCaSi`, `quocGia`) VALUES
(0, 'Sơn Tùng MTP', 'Việt Nam'),
(1, 'Tuấn Hưng', 'Việt Nam'),
(2, 'Leessang', 'Hàn Quốc'),
(3, 'Maroon 5', 'Mỹ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhombaihat`
--

CREATE TABLE `nhombaihat` (
  `idNhom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenNhom` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhombaihat`
--

INSERT INTO `nhombaihat` (`idNhom`, `tenNhom`) VALUES
('0', 'vpop'),
('1', 'kpop'),
('2', 'usuk');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `idTheLoai` int(10) NOT NULL,
  `tenTheLoai` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
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
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`) VALUES
(0, 'vietthuan', 'vietthuan98@gmail.com', '123123');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`idBaiHat`),
  ADD KEY `idCaSi` (`idCaSi`),
  ADD KEY `idTheLoai` (`idTheLoai`),
  ADD KEY `idNhomBaiHat` (`idNhom`);

--
-- Chỉ mục cho bảng `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`idCasi`);

--
-- Chỉ mục cho bảng `nhombaihat`
--
ALTER TABLE `nhombaihat`
  ADD PRIMARY KEY (`idNhom`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheLoai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_ibfk_1` FOREIGN KEY (`idCaSi`) REFERENCES `casi` (`idCasi`),
  ADD CONSTRAINT `baihat_ibfk_2` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`idtheloai`),
  ADD CONSTRAINT `baihat_ibfk_3` FOREIGN KEY (`idNhom`) REFERENCES `nhombaihat` (`idNhom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
