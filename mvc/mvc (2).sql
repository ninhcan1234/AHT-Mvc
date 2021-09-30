-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 07, 2021 lúc 09:04 AM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mvc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `prince` double DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `prince`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Product 1', 300, 'Sieu dep sieu ngon', '2021-07-06 03:58:41', '2021-07-06 03:58:41'),
(5, 'Trương Thị Hà Nhiii', 100, '12345dssssss', '2021-07-06 03:58:36', '2021-07-06 03:58:36'),
(6, 'Nguyễn Văn Ninh', 8.8888888888, 'Dep trai ma con doc nhat', '2021-07-06 03:32:41', '2021-07-06 03:32:41'),
(7, 'aaaa', 300, 'tank', '2021-07-06 02:57:45', '2021-07-06 02:57:45'),
(8, 'New product', 8888888888, 'giong Ninh nen dat', '2021-07-06 03:03:20', '2021-07-06 03:03:20'),
(9, 'product 9', 200002, 'xinxin', '2021-07-06 03:58:26', '2021-07-06 03:58:26'),
(10, 'product 10', 50000, 'xin xin', '2021-07-06 03:58:09', '2021-07-06 03:58:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(35, 'đâsdddddddddd', 'sadasdasdasssssssssss', '2021-06-11 06:32:14', '2021-06-11 06:32:14'),
(38, 'nguyen van a', 'abzzzzzzzzzz', '2021-06-10 20:16:32', '2021-06-10 20:16:32'),
(53, 'ggggggggggggggg', 'dddddddddd22333333333333333333', '2021-06-11 06:23:26', '2021-06-11 06:23:26'),
(58, 'obj', 'n+', '2021-07-05 21:45:28', '2021-07-05 21:45:28'),
(59, 'eqweqqqqqqqqqqqqqwwwwwwwwww', 'ádsaddddddddddd', '2021-07-05 21:45:44', '2021-07-05 21:45:44'),
(60, 'eqweqqqqqqqqqqqqqwwwwwwwwww', 'ádsad', '2021-07-05 23:23:40', '2021-07-05 23:23:40');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
