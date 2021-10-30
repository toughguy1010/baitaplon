-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 07:33 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_dulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ad_id` int(11) NOT NULL,
  `ad_Name` varchar(100) NOT NULL,
  `ad_age` int(15) NOT NULL,
  `ad_Gender` tinyint(1) NOT NULL,
  `ad_address` varchar(100) NOT NULL,
  `ad_phone` varchar(11) NOT NULL,
  `ad_username` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_tour`
--

CREATE TABLE `booking_tour` (
  `booking_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `tour_id` int(11) NOT NULL,
  `booking_day` datetime NOT NULL,
  `booking_guest_number` int(50) NOT NULL,
  `booking_guid` varchar(100) NOT NULL,
  `booking_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `booking_tour`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `tour_id` int(11) NOT NULL,
  `tour_Name` varchar(100) NOT NULL,
  `tour_price` double NOT NULL,
  `tour_day_start` date NOT NULL,
  `tour_day_end` date NOT NULL,
  `tour_days` int(50) NOT NULL,
  `tour_location` varchar(50) NOT NULL,
  `tour_phone_contact` varchar(20) NOT NULL,
  `tour_number` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour`
--



-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `guest_id` int(11) NOT NULL,
  `guest_name` varchar(100) NOT NULL,
  `guest_age` int(100) NOT NULL,
  `guest_gender` varchar(10) NOT NULL,
  `guest_address` varchar(100) NOT NULL,
  `guest_phone` varchar(100) NOT NULL,
  `guest_email` varchar(100) NOT NULL,
  `guest_username` varchar(100) NOT NULL,
  `guest_password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--



--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Chỉ mục cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `guest_id` (`guest_id`),
  ADD KEY `tour_id` (`tour_id`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`tour_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`guest_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `user`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `tour`
  MODIFY `tour_id` int(11) NOT NULL AUTO_INCREMENT;

  ALTER TABLE `booking_tour`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;




--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking_tour`
--
ALTER TABLE `booking_tour`
  ADD CONSTRAINT `booking_tour_ibfk_1` FOREIGN KEY (`guest_id`) REFERENCES `user` (`guest_id`),
  ADD CONSTRAINT `booking_tour_ibfk_2` FOREIGN KEY (`tour_id`) REFERENCES `tour` (`tour_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
