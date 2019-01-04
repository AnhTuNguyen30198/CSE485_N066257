-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 04, 2019 lúc 07:44 PM
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
  `tenTheLoai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenCaSi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenNhom` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quocGia` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dangBoi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `baihat`
--

INSERT INTO `baihat` (`idBaiHat`, `tenBaiHat`, `tenTheLoai`, `tenCaSi`, `tenNhom`, `quocGia`, `path`, `dangBoi`) VALUES
(5, 'Chạy ngay đi', 'soul', 'Sơn Tùng', 'vpop', 'Việt Nam', 'baihat/chay_ngay_di_son_tung_m_tp_tiger_remix_stage_version_ho_chi_minh_31_12_2018_382261.mp3', 'admin'),
(6, 'Happy Xmas (War is over)', 'pop', 'Maroon 5', 'usuk', 'Mỹ ', 'baihat/maroon_5_happy_christmas_war_is_over_388509.mp3', 'admin'),
(7, 'Gạt đi nước mắt', 'pop', 'Noo Phước Thịnh', 'vpop', 'Việt Nam', 'baihat/noo_phuoc_thinh_gat_di_nuoc_mat_ft_tonny_viet_241249.mp3', 'admin'),
(8, 'Tan', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/mv_tan_tuan_hung.mp3', 'admin'),
(9, 'Fly me to the moon', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_fly_me_to_the_moon_236083.mp3', 'admin'),
(10, 'Fire on fire', 'pop', 'Sam Smith', 'usuk', 'Mỹ ', 'baihat/sam_smith_fire_on_fire_350214.mp3', 'admin'),
(11, 'Friends', 'pop', 'Dido', 'usuk', 'Mỹ ', 'baihat/marshmello_anne_marie_friends_lyrics_224802.mp3', 'admin'),
(12, 'Imagine', 'pop', ' Ariana Grande', 'usuk', 'Mỹ ', 'baihat/ariana_grande_imagine_388519.mp3', 'admin'),
(13, 'Birthday', 'pop', 'Katy Perry', 'usuk', 'Mỹ', 'baihat/katy_perry_birthday_lyric_video_260362.mp3', 'admin'),
(14, 'Cozy Little Christmas', 'pop', 'Katy Perry', 'usuk', 'Mỹ', 'baihat/katy_perry_cozy_little_christmas_audio_clip_388520.mp3', 'admin'),
(15, 'Part of me ', 'pop', 'Katy Perry', 'usuk', 'Mỹ', 'baihat/katy_perry_part_of_me_official_327306.mp3', 'admin'),
(16, 'Rise', 'pop', 'Katy Perry', 'usuk', 'Mỹ', 'baihat/katy_perry_rise_official_305936.mp3', 'admin'),
(17, 'Thank u, next', 'pop', 'Ariana Grande', 'usuk', 'Mỹ', 'baihat/ariana_grande_thank_u_next_299106.mp3', 'admin'),
(18, 'Into You', 'pop', 'Ariana Grande', 'usuk', 'Mỹ', 'baihat/ariana_grande_thank_u_next_299106.mp3', 'admin'),
(19, 'Tìm lại bầu trời', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/tim_lai_bau_troi_tuan_hung_official_mv_hd_234000.mp3', 'admin'),
(20, 'Vì người không xứng đáng', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/vi_nguoi_khong_xung_dang_tuan_hung_199718.mp3', 'admin'),
(21, 'Chỉ còn đêm cuối', 'folk', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/mv_official_chi_con_mot_dem_cuoi_tuan_hung_319082.mp3', 'admin'),
(22, 'Hối hận trong anh', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/hoi_han_trong_anh_tuan_hung_official_mv_hd_234680.mp3', 'admin'),
(23, 'Anh vẫn còn yêu em', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/anh_van_con_yeu_em_tuan_hung_388523.mp3', 'admin'),
(24, 'Nắm lấy tay anh', 'pop', 'Tuấn Hưng', 'vpop', 'Việt Nam', 'baihat/nam_lay_tay_anh_tuan_hung_mv_official_224687.mp3', 'admin'),
(25, 'I love you baby', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_i_love_you_baby_223697.mp3', 'admin'),
(26, 'You are love', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_i_love_you_baby_223697.mp3', 'admin'),
(27, 'My way', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_my_way_268632.mp3', 'admin'),
(28, 'Fly me to the moon', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_fly_me_to_the_moon_236083.mp3', 'admin'),
(29, 'Cant take my eyes off you', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/can_t_take_my_eyes_off_you_frankie_valli_and_the_4_seasons_223683.mp3', 'admin'),
(30, 'It had to be you', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_it_had_to_be_you_388530.mp3', 'admin'),
(31, 'Killing me softly', 'jazz', 'Frank Sinatra', 'usuk', 'Mỹ', 'baihat/frank_sinatra_killing_me_softly_236084.mp3', 'admin'),
(32, 'Rainy Night in Georgia', 'jazz', 'Brook Benton', 'usuk', 'Mỹ', 'baihat/brook_benton_rainy_night_in_georgia_388534.mp3', 'admin'),
(33, 'Harry hippie', 'jazz', 'Brook Benton', 'usuk', 'Mỹ', 'baihat/brook_benton_rainy_night_in_georgia_388534.mp3', 'admin'),
(34, 'Only your love', 'jazz', 'Brook Benton', 'usuk', 'Mỹ', 'baihat/brook_benton_rainy_night_in_georgia_388534.mp3', 'admin'),
(35, 'Endlessly', 'jazz', 'Brook Benton', 'usuk', 'Mỹ', 'baihat/katy_perry_birthday_lyric_video_260362.mp3', 'admin'),
(36, 'Blowin in the Wind', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/don_t_think_twice_it_s_all_right_bob_dylan_388541.mp3', 'admin'),
(37, 'Girl from the North Country', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/girl_from_the_north_country_bob_dylan_388560.mp3', 'admin'),
(38, 'Masters of War', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/frank_sinatra_killing_me_softly_236084.mp3', 'admin'),
(39, 'Down the Highway', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/girl_from_the_north_country_bob_dylan_388560.mp3', 'admin'),
(40, 'Dont Think Twice, It is All Right', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/don_t_think_twice_it_s_all_right_bob_dylan_388541.mp3', 'admin'),
(41, 'Highway 51 Blues', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/frank_sinatra_killing_me_softly_236084.mp3', 'admin'),
(42, 'Oxford Town', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/frank_sinatra_my_way_268632.mp3', 'admin'),
(43, 'Man of Constant Sorrow', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/frank_sinatra_killing_me_softly_236084.mp3', 'admin'),
(44, 'I Shall Be Free ', 'folk', 'Bob Dylan', 'usuk', 'Mỹ', 'baihat/girl_from_the_north_country_bob_dylan_388560.mp3', 'admin'),
(46, 'Missing you', 'hiphop', 'G-Dragon', 'kpop', 'Hàn Quốc', 'baihat\\MissingYou.mp3', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phanquyen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `email`, `password`, `phanquyen`) VALUES
(1, 'atnguyen', 'atnguyen30198@gmail.com', 'anhtu123', 0),
(2, 'admin', 'atnguyen301297@gmail.com', 'ThuanTu', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`idBaiHat`),
  ADD KEY `idCaSi` (`tenCaSi`),
  ADD KEY `idTheLoai` (`tenTheLoai`),
  ADD KEY `idNhomBaiHat` (`tenNhom`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baihat`
--
ALTER TABLE `baihat`
  MODIFY `idBaiHat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
