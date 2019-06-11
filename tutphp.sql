-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 07:56 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `level` tinyint(4) DEFAULT '1',
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `password`, `phone`, `level`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'HP', 'KÍ TÚC XÁ KHU A , ĐẠI HỌC QUỐC GIA', 'nhattan1585@gmail.com', 'c81e728d9d4c2f636f067f89cc14862c', '01627308125', 2, NULL, 1, '2019-05-12 09:39:47', '2019-05-12 09:39:47'),
(2, 'tan', 'tan', 'a@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '1627308125', 1, NULL, 1, '2019-05-31 04:38:52', '2019-05-31 04:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `images` varchar(100) DEFAULT NULL,
  `home` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `banner` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `images`, `home`, `status`, `created_at`, `updated_at`, `banner`) VALUES
(7, 'MacBook', 'macbook', NULL, 1, 1, '2019-05-30 11:41:29', '2019-06-03 01:56:51', NULL),
(8, 'iPhone', 'iphone', NULL, 1, 1, '2019-05-30 11:41:35', '2019-06-03 01:59:11', NULL),
(9, 'iPad', 'ipad', NULL, 1, 1, '2019-05-30 11:41:35', '2019-06-03 01:59:05', NULL),
(10, 'Phụ Kiện', 'phu-kien', NULL, 1, 1, '2019-05-30 11:41:41', '2019-06-03 01:58:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` tinyint(4) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 8500000, '2019-05-22 16:55:36', '2019-05-22 16:55:36'),
(2, 3, 1, 1, 8500000, '2019-05-22 17:04:32', '2019-05-22 17:04:32'),
(3, 4, 1, 1, 8500000, '2019-05-22 17:05:46', '2019-05-22 17:05:46'),
(4, 5, 1, 1, 8500000, '2019-05-22 17:08:50', '2019-05-22 17:08:50'),
(5, 6, 8, 1, 100000, '2019-05-22 17:13:47', '2019-05-22 17:13:47'),
(6, 7, 8, 1, 100000, '2019-05-22 17:21:31', '2019-05-22 17:21:31'),
(7, 8, 11, 6, 1500, '2019-05-27 06:22:05', '2019-05-27 06:22:05'),
(8, 9, 15, 1, 10000000, '2019-05-30 12:10:46', '2019-05-30 12:10:46'),
(9, 10, 15, 2, 10000000, '2019-05-31 03:23:31', '2019-05-31 03:23:31'),
(10, 10, 17, 1, 15000000, '2019-06-02 10:46:31', '2019-06-02 10:46:31'),
(11, 11, 17, 1, 15000000, '2019-06-02 16:51:52', '2019-06-02 16:51:52'),
(12, 11, 25, 2, 56000000, '2019-06-02 16:51:52', '2019-06-02 16:51:52'),
(13, 12, 18, 1, 20000000, '2019-06-02 16:54:21', '2019-06-02 16:54:21'),
(14, 13, 18, 1, 20000000, '2019-06-03 03:24:47', '2019-06-03 03:24:47'),
(15, 13, 17, 1, 15000000, '2019-06-03 03:24:47', '2019-06-03 03:24:47'),
(16, 13, 27, 1, 41000000, '2019-06-03 03:24:47', '2019-06-03 03:24:47'),
(17, 13, 25, 1, 56000000, '2019-06-03 03:24:47', '2019-06-03 03:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `sale` tinyint(4) DEFAULT '0',
  `thunbar` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `content` text,
  `head` int(11) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `hot` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `number` int(100) DEFAULT NULL,
  `infoPro` text,
  `pay` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `price`, `sale`, `thunbar`, `category_id`, `content`, `head`, `view`, `hot`, `created_at`, `updated_at`, `number`, `infoPro`, `pay`) VALUES
(1, 'iPad Pro 11 inch 64GB Wifi', 'ipad-pro-11-inch-2018', 17900000, 0, 'ipad-pro-2018-11.png', 9, 'ok', 0, 0, 0, '2019-05-30 12:04:55', '2019-05-30 12:04:55', 10, '11-inch/ 64GB/ Wifi', 0),
(2, 'iPad Pro 11 inch 256GB Wifi', 'ipad-pro-11-inch-2018-256gb-wifi', 21000000, 0, 'ipad-pro-2018-11.png', 9, '', 0, 0, 0, '2019-06-03 05:17:03', '2019-06-03 05:17:03', 4, '11-inch/ 256GB/ Wifi', 0),
(3, 'iPad Pro 11 inch 64GB 4G', 'ipad-pro-11-inch-2018-4g', 21000000, 0, 'ipad-pro-2018-11.png', 9, 'ok', 0, 0, 0, '2019-05-30 12:04:55', '2019-05-30 12:04:55', 10, '11-inch/ 64GB/ 4G', 0),
(4, 'iPad Pro 11 inch 256GB 4G', 'ipad-pro-11-inch-2018-256gb-4G', 21000000, 0, 'ipad-pro-2018-11.png', 9, '', 0, 0, 0, '2019-06-03 05:17:03', '2019-06-03 05:17:03', 4, '11-inch/ 256GB/ 4G', 0),
(5, 'iPad Pro 12.9 inch 64GB Wifi', 'ipad-pro-12.9-2018', 21000000, 0, 'ipad-pro-2018-12-9.png', 9, 'ok', 0, 0, 0, '2019-05-30 12:05:39', '2019-05-30 12:05:39', 10, '12.9-inch/ 64GB/ Wifi', 0),
(6, 'iPad Pro 12.9 inch 256GB Wifi', 'ipad-pro-129-inch-2018-256gb-wifi', 25000000, 0, 'ipad-pro-2018-12-9.png', 9, '', 0, 0, 0, '2019-06-03 05:18:58', '2019-06-03 05:18:58', 4, '12.9-inch/ 256GB/ Wifi', 0),
(7, 'iPad Pro 12.9 inch 64GB 4G', 'ipad-pro-12.9-2018-4G', 21000000, 0, 'ipad-pro-2018-12-9.png', 9, 'ok', 0, 0, 0, '2019-05-30 12:05:39', '2019-05-30 12:05:39', 10, '12.9-inch/ 64GB/ 4G', 0),
(8, 'iPad Pro 12.9 inch 256GB 4G', 'ipad-pro-12.9-2018-256gb-4g', 21000000, 0, 'ipad-pro-2018-12-9.png', 9, 'ok', 0, 0, 0, '2019-05-30 12:05:39', '2019-05-30 12:05:39', 10, '12.9-inch/ 256GB/ 4G', 0),
(21, 'Apple Earpod', 'apple-earpod', 500000, 0, 'earpods-lightning-1-300x300.png', 10, 'Apple Pod With 3.5 jack audio ', 0, 0, 0, '2019-05-30 12:06:16', '2019-05-30 12:06:16', 5, 'Apple Pod With 3.5 jack audio ', 0),
(23, 'MacBook Pro 15 inch 2018 Gray 256GB', 'macbook-pro-15-inch-2018-space-gray', 51000000, 0, 'mbp15gray.png', 7, 'CPU: Intel Core i7 6 core 2.2GHz\r\nRam: 16GB\r\nSSD: 256GB\r\nGPU: Radeon 555X', 0, 0, 0, '2019-06-01 08:18:05', '2019-06-01 08:18:05', 4, 'CPU: Intel Core i7 6 core 2.2GHz\r\nRam: 16GB\r\nSSD: 256GB\r\nGPU: Radeon 555X', 0),
(24, 'MacBook Pro 15 inch 2018 Silver 256GB', 'macbook-pro-15-inch-2018-silver', 51000000, 0, 'mbp15silver.png', 7, '6-cores i7 2.2GHz / Ram 16GB 2400MHz / SSD 256GB', 0, 0, 0, '2019-06-01 18:53:24', '2019-06-01 18:53:24', 4, '6-cores i7 2.2GHz / Ram 16GB 2400MHz / SSD 256GB', 0),
(25, 'MacBook Pro 15 inch 2018 Gray 512GB', 'macbook-pro-15-inch-2018-space-gray', 56000000, 0, 'mbp15gray.png', 7, '', 0, 0, 0, '2019-06-01 19:15:17', '2019-06-01 19:15:17', 4, 'CPU: Intel Core i7 6 core 2.2GHz\r\nRam: 16GB\r\nSSD: 512GB\r\nGPU: Radeon 555X', 0),
(26, 'MacBook Pro 15 inch 2018 Silver 512Gb', 'macbook-pro-15-inch-2018-silver', 56000000, 0, 'mbp15silver.png', 7, '', 0, 0, 0, '2019-06-01 19:14:23', '2019-06-01 19:14:23', 2, '6-cores i7 2.2GHz / Ram 16GB 2400MHz / SSD 512GB', 0),
(27, 'MacBook Pro 13 inch 2018 Gray 256GB', 'macbook-pro-13-inch-2018-gray-256gb', 41000000, 0, 'mbp13gray.png', 7, '', 0, 0, 0, '2019-06-03 02:12:08', '2019-06-03 02:12:08', 5, '4-Core Intel Core i5 2.5GHz/ \r\n8GB Ram 2100MHz/ \r\n256GB SSD NVME/ \r\nSpace Gray Color', 0),
(28, 'MacBook Pro 13 inch 2018 Silver 256GB', 'macbook-pro-13-inch-2018-silver', 41000000, 0, 'mbp13silver.png', 7, '', 0, 0, 0, '2019-06-03 02:29:15', '2019-06-03 02:29:15', 5, '4-Core Intel Core i5 2.5GHz/ \r\n8GB Ram 2100MHz/ \r\n256GB SSD NVME/ \r\nSilver Color', 0),
(29, 'MacBook Pro 13 inch 2018 Gray 512GB', 'macbook-pro-13-inch-2018-gray-512gb', 46000000, 0, 'mbp13gray.png', 7, '', 0, 0, 0, '2019-06-03 02:12:08', '2019-06-03 02:12:08', 5, '4-Core Intel Core i5 2.5GHz/ \r\n8GB Ram 2100MHz/ \r\n512GB SSD NVME/ \r\nSpace Gray Color', 0),
(30, 'MacBook Pro 13 inch 2018 Silver 512GB', 'macbook-pro-13-inch-2018-silver-512GB', 46000000, 0, 'mbp13silver.png', 7, '', 0, 0, 0, '2019-06-03 02:29:15', '2019-06-03 02:29:15', 5, '4-Core Intel Core i5 2.5GHz/ \r\n8GB Ram 2100MHz/ \r\n512 SSD NVME/ \r\nSilver Color', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `user_id` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '0',
  `note` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `amount`, `user_id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(2, 9350000, 8, 1, '', '2019-05-22 16:55:36', '2019-05-22 16:55:36'),
(3, 9350000, 8, 0, '', '2019-05-22 17:04:32', '2019-05-22 17:04:32'),
(4, 9350000, 8, 0, '', '2019-05-22 17:05:46', '2019-05-22 17:05:46'),
(5, 9350000, 8, NULL, '', '2019-05-22 17:08:50', '2019-05-22 17:08:50'),
(6, 110000, 8, NULL, '', '2019-05-22 17:13:47', '2019-05-22 17:13:47'),
(7, 110000, 8, 0, '', '2019-05-22 17:21:31', '2019-05-22 17:21:31'),
(8, 9900, 8, 0, 'giao som cho e', '2019-05-27 06:22:05', '2019-05-27 06:22:05'),
(9, 11000000, 8, 0, 'giao som cho e', '2019-05-30 12:10:45', '2019-05-30 12:10:45'),
(10, 16500000, 8, 0, '', '2019-06-02 10:46:31', '2019-06-02 10:46:31'),
(11, 139700000, 8, 0, '', '2019-06-02 16:51:52', '2019-06-02 16:51:52'),
(12, 22000000, 8, 0, '', '2019-06-02 16:54:21', '2019-06-02 16:54:21'),
(13, 145200000, 8, 0, '', '2019-06-03 03:24:47', '2019-06-03 03:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `password`, `avatar`, `status`, `created_at`, `updated_at`, `email`) VALUES
(8, 'Nguyễn Nhật Tân', '1627308125', 'KÍ TÚC XÁ KHU A , ĐẠI HỌC QUỐC GIA', 'c4ca4238a0b923820dcc509a6f75849b', NULL, 1, '2019-05-22 16:47:54', '2019-05-22 16:47:54', 'nhattan1585@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
