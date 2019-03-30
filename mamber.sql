-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 30, 2019 lúc 09:27 AM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webhackathon`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mamber`
--

CREATE TABLE `mamber` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `mamber`
--

INSERT INTO `mamber` (`id`, `username`, `password`, `email`) VALUES
(1, 'dilavi', 'admin', 'thach@gmail.com'),
(2, 'wordpress', '12345678szdas', 'thach1213@gmail.com'),
(3, 'admin', 'admin', 'thach150@gmail.com'),
(4, 'thach', '123', 'thph@gmail.com'),
(6, 'thachkaka', '123', 'thachkaa@gmail.com'),
(7, 'hi', 'hihi', 'hi@gmail.com'),
(8, 'login', 'logim', 'login@gmail.com'),
(9, 'ha', 'ha', 'ha@gmail.com'),
(10, 'ha', 'ha', 'ha@gmail.com'),
(11, 'hix', 'hix', 'hix@gmail.com'),
(12, 'hix', 'hix', 'hix@gmail.com'),
(13, 'admin', 'admin123', 'admin@gmail.com'),
(14, 'admin', 'admin', 'admin@123'),
(15, 'n', 'n', 'n@gmail.com'),
(16, 'm', 'm', 'm@gmail.com'),
(17, 'k', 'k', 'k@gm'),
(18, 'ad', 'ad', 'ad@gmail.com'),
(19, 'h', 'h', 'ha@gmail.com'),
(20, 'l', 'l', 'l@gmail.com'),
(21, 'i', 'i', 'i@g.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `mamber`
--
ALTER TABLE `mamber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `mamber`
--
ALTER TABLE `mamber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
