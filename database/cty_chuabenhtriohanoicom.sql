-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 03:46 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cty_chuabenhtriohanoicom`
--

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  `content` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `term_id` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `avatar` text,
  `alias` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(38, '2014_10_12_000000_create_users_table', 1),
(39, '2014_10_12_100000_create_password_resets_table', 1),
(40, '2017_05_08_081333_create_terms_table', 1),
(41, '2017_05_09_065841_create_posts_table', 1),
(42, '2017_05_09_075216_create_configs_table', 1),
(43, '2017_05_10_045918_create_medias_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `term_id` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  `content` longtext,
  `orther` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `term_id`, `name`, `avatar`, `alias`, `status`, `description`, `content`, `orther`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Đây là bài viết mẫu', '1497490490.png', 'day-la-bai-viet-mau', 1, 'Đây là bài mẫu', '<p>Đ&acirc;y l&agrave; b&agrave;i mẫu</p>', '[]', '2017-06-15 01:33:15', '2017-06-15 01:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL DEFAULT '0',
  `term_id` bigint(20) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `description` text,
  `content` longtext,
  `orther` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `user_id`, `term_id`, `name`, `avatar`, `alias`, `status`, `description`, `content`, `orther`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'Chuyên khoa trĩ', NULL, 'chuyen-khoa-tri', NULL, NULL, NULL, '[]', '2017-06-15 01:28:04', '2017-06-15 01:28:04'),
(2, 1, 1, 'Trĩ ngoại', NULL, 'tri-ngoai', NULL, NULL, NULL, '[]', '2017-06-15 01:28:16', '2017-06-15 01:28:16'),
(3, 1, 1, 'Trĩ nội', NULL, 'tri-noi', NULL, NULL, NULL, '[]', '2017-06-15 01:28:23', '2017-06-15 01:28:23'),
(4, 1, 1, 'Trĩ hỗn hợp', NULL, 'tri-hon-hop', NULL, NULL, NULL, '[]', '2017-06-15 01:28:38', '2017-06-15 01:28:38'),
(5, 1, 0, 'Bệnh quanh hậu môn', NULL, 'benh-quanh-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:28:47', '2017-06-15 01:28:47'),
(6, 1, 5, 'Áp xe hậu môn', NULL, 'ap-xe-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:28:57', '2017-06-15 01:28:57'),
(7, 1, 5, 'Ngứa rát hậu môn', NULL, 'ngua-rat-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:05', '2017-06-15 01:29:05'),
(8, 1, 5, 'Polyp hậu môn', NULL, 'polyp-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:14', '2017-06-15 01:29:14'),
(9, 1, 5, 'Đau hậu môn', NULL, 'dau-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:22', '2017-06-15 01:29:22'),
(10, 1, 5, 'Hậu môn có vật thể lạ', NULL, 'hau-mon-co-vat-the-la', NULL, NULL, NULL, '[]', '2017-06-15 01:29:30', '2017-06-15 01:29:30'),
(11, 1, 0, 'Chấn thương hậu môn', NULL, 'chan-thuong-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:40', '2017-06-15 01:29:40'),
(12, 1, 11, 'Rò hậu môn', NULL, 'ro-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:48', '2017-06-15 01:29:48'),
(13, 1, 11, 'Nứt kẽ hậu môn', NULL, 'nut-ke-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:57', '2017-06-15 01:29:57'),
(14, 1, 11, 'Sa hậu môn', NULL, 'sa-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:30:05', '2017-06-15 01:30:05'),
(15, 1, 0, 'Biểu hiện thường gặp', NULL, 'bieu-hien-thuong-gap', NULL, NULL, NULL, '[]', '2017-06-15 01:30:14', '2017-06-15 01:30:14'),
(16, 1, 15, 'Đi ngoài ra máu', NULL, 'di-ngoai-ra-mau', NULL, NULL, NULL, '[]', '2017-06-15 01:30:22', '2017-06-15 01:30:22'),
(17, 1, 15, 'Táo bón', NULL, 'tao-bon', NULL, NULL, NULL, '[]', '2017-06-15 01:30:29', '2017-06-15 01:30:29'),
(18, 1, 0, 'Kỹ thuật đặc biệt', NULL, 'ky-thuat-dac-biet', NULL, NULL, NULL, '[]', '2017-06-15 01:30:36', '2017-06-15 01:30:36'),
(19, 1, 0, 'Bệnh án', NULL, 'benh-an', NULL, NULL, NULL, '[]', '2017-06-15 01:30:43', '2017-06-15 01:30:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Văn Trường', 'vantruong3289@gmail.com', '$2y$10$IOA4jsMYwu/8StobwXSYJ.5PF2sv8wnCSjsaiVUEFsPbL9g56sz3i', NULL, 'eBLhWFknP1MjxG0bQLvUTzta6VHG2ySyjjBhLirUvQ2HvZK3c4i0XgxrqKJe', '2017-05-24 23:46:48', '2017-05-24 23:46:48'),
(2, 'nga', 'nga@gmail.com', '$2y$10$5BZpRSJ7tycdY16Ym2axi.MP2QlhPuGP81CKN6NMB16wmXcus.5SS', NULL, 'CHwZzM8gDOBZdqWOlUzOI9gGmPnSmv7jSdS5EL9E3QfRHYkZA0udvT5KMubR', '2017-05-27 01:10:06', '2017-05-27 01:10:06'),
(3, 'lan', 'lan@gmail.com', '$2y$10$hJt6PffFtO7xpYiWDSLiQ.ywHe.pJZx47QE.UvjGLb3B4AhFuDOLu', NULL, NULL, '2017-05-27 01:10:06', '2017-05-27 01:10:06'),
(4, 'hanh', 'hanh@gmail.com', '$2y$10$/V2P6xhmOBOJ9XiQ7ee8jOkNU3T9MS.TS/Giw3YqafDhMUtg4Ibpu', NULL, NULL, '2017-05-27 01:10:07', '2017-05-27 01:10:07'),
(5, 'lan1992', 'lan1992@gmail.com', '$2y$10$Sq09grwCMSRo95888HKQieCqb4X1TUU2aDYny5H2prZ.jj6rTYpaq', NULL, NULL, '2017-05-27 01:10:07', '2017-05-27 01:10:07'),
(6, 'tha', 'tha@gmail.com', '$2y$10$xEpAQzMyyE8upgkSZI.u..Hu7EKOJQg.dvJrcyBMwB8adu/0idjuy', NULL, NULL, '2017-05-27 01:10:07', '2017-05-27 01:10:07'),
(7, 'minh', 'minh@gmail.com', '$2y$10$dnGk7P4hUaxiSeQazTb/S.LeeP/FECI.XZnMqX6PRHHkZ8o/WkRVO', NULL, NULL, '2017-05-27 01:10:07', '2017-06-14 09:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
