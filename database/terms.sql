-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 04:34 AM
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
(2, 1, 1, 'Trĩ ngoại', NULL, 'tri-ngoai', NULL, NULL, NULL, '{"meta":"B\\u1ec7nh tr\\u0129 c\\u00f3 truy\\u1ec1n nhi\\u1ec5m kh\\u00f4ng? ;  B\\u1ec7nh tr\\u0129 c\\u00f3 th\\u1ec3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ;   H\\u1eadu qu\\u1ea3 kh\\u00f4ng ch\\u1eefa tr\\u1ecb b\\u1ec7nh tr\\u0129   ; Ph\\u1eabu thu\\u1eadt tr\\u0129 sau bao nhi\\u00eau ng\\u00e0y h\\u1ed3i ph\\u1ee5c? ; Ph\\u1eabu thu\\u1eadt tr\\u0129 c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng? ; Ph\\u00ed ph\\u1eabu thu\\u1eadt tr\\u0129 cao kh\\u00f4ng?"}', '2017-06-15 01:28:16', '2017-06-15 02:08:01'),
(3, 1, 1, 'Trĩ nội', NULL, 'tri-noi', NULL, NULL, NULL, '{"meta":"B\\u1ec7nh tr\\u0129 c\\u00f3 truy\\u1ec1n nhi\\u1ec5m kh\\u00f4ng? ;  B\\u1ec7nh tr\\u0129 c\\u00f3 th\\u1ec3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ;   H\\u1eadu qu\\u1ea3 kh\\u00f4ng ch\\u1eefa tr\\u1ecb b\\u1ec7nh tr\\u0129   ; Ph\\u1eabu thu\\u1eadt tr\\u0129 sau bao nhi\\u00eau ng\\u00e0y h\\u1ed3i ph\\u1ee5c? ; Ph\\u1eabu thu\\u1eadt tr\\u0129 c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng? ; Ph\\u00ed ph\\u1eabu thu\\u1eadt tr\\u0129 cao kh\\u00f4ng?"}', '2017-06-15 01:28:23', '2017-06-15 02:08:38'),
(4, 1, 1, 'Trĩ hỗn hợp', NULL, 'tri-hon-hop', NULL, NULL, NULL, '{"meta":"B\\u1ec7nh tr\\u0129 c\\u00f3 truy\\u1ec1n nhi\\u1ec5m kh\\u00f4ng? ;  B\\u1ec7nh tr\\u0129 c\\u00f3 th\\u1ec3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ;   H\\u1eadu qu\\u1ea3 kh\\u00f4ng ch\\u1eefa tr\\u1ecb b\\u1ec7nh tr\\u0129   ; Ph\\u1eabu thu\\u1eadt tr\\u0129 sau bao nhi\\u00eau ng\\u00e0y h\\u1ed3i ph\\u1ee5c? ; Ph\\u1eabu thu\\u1eadt tr\\u0129 c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng? ; Ph\\u00ed ph\\u1eabu thu\\u1eadt tr\\u0129 cao kh\\u00f4ng?"}', '2017-06-15 01:28:38', '2017-06-15 02:08:46'),
(5, 1, 0, 'Bệnh quanh hậu môn', NULL, 'benh-quanh-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:28:47', '2017-06-15 01:28:47'),
(6, 1, 5, 'Áp xe hậu môn', NULL, 'ap-xe-hau-mon', NULL, NULL, NULL, '{"meta":"Chi ph\\u00ed ph\\u1eabu thu\\u1eadt \\u00e1p xe h\\u1eadu m\\u00f4n? ; Ph\\u1eabu thu\\u1eadt \\u00e1p xe h\\u1eadu m\\u00f4n \\u0111au kh\\u00f4ng? ; \\u00c1p xe h\\u1eadu m\\u00f4n b\\u1eaft bu\\u1ed9c ph\\u1ea3i l\\u00e0m ph\\u1eabu thu\\u1eadt kh\\u00f4ng? ; Ph\\u1eabu thu\\u1eadt \\u00e1p xe h\\u1eadu m\\u00f4n c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng?; \\u00c1p xe h\\u1eadu m\\u00f4n c\\u00f3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ; \\u00c1p xe h\\u1eadu m\\u00f4n c\\u00f3 d\\u1ec5 ch\\u1eefa kh\\u00f4ng?"}', '2017-06-15 01:28:57', '2017-06-15 02:22:14'),
(7, 1, 5, 'Ngứa rát hậu môn', NULL, 'ngua-rat-hau-mon', NULL, NULL, NULL, '{"meta":"Ng\\u1ee9a h\\u1eadu m\\u00f4n, ra m\\u00e1u? ; Nguy\\u00ean nh\\u00e2n \\u0111au ng\\u1ee9a h\\u1eadu m\\u00f4n? ; Ng\\u1ee9a h\\u1eadu m\\u00f4n, n\\u1ed5i m\\u1ee5n th\\u1ecbt?  ;T\\u1ea1i sao h\\u1eadu m\\u00f4n \\u1ea9m \\u01b0\\u1edbt v\\u00e0 ng\\u1ee9a? ; Ng\\u1ee9a h\\u1eadu m\\u00f4n l\\u00e0 b\\u1ec7nh g\\u00ec? ; Ng\\u1ee9a h\\u1eadu m\\u00f4n c\\u00f3 th\\u1ec3 ch\\u1eefa kh\\u00f4ng?"}', '2017-06-15 01:29:05', '2017-06-15 02:22:38'),
(8, 1, 5, 'Polyp hậu môn', NULL, 'polyp-hau-mon', NULL, NULL, NULL, '{"meta":"L\\u00e0m th\\u1ebf n\\u00e0o \\u0111\\u1ec3 ph\\u00e2n bi\\u1ec7t Polyp h\\u1eadu m\\u00f4n v\\u1edbi b\\u1ec7nh tr\\u0129? ; Chi ph\\u00ed c\\u1eaft b\\u1ecf Polyp h\\u1eadu m\\u00f4n  ;  Polyp h\\u1eadu m\\u00f4n ra m\\u00e1u ph\\u1ea3i l\\u00e0m th\\u1ebf n\\u00e0o? ;   Polyp h\\u1eadu m\\u00f4n ph\\u1ea3i ch\\u1eefa kh\\u00f4ng?  ;  Polyp h\\u1eadu m\\u00f4n ng\\u1ee9a th\\u00ec ph\\u1ea3i l\\u00e0m th\\u1ebf n\\u00e0o? ;   Polyp h\\u1eadu m\\u00f4n c\\u00f3 nh\\u1eefng nguy hi\\u1ec3m g\\u00ec?"}', '2017-06-15 01:29:14', '2017-06-15 02:21:02'),
(9, 1, 5, 'Đau hậu môn', NULL, 'dau-hau-mon', NULL, NULL, NULL, '{"meta":"\\u0110au h\\u1eadu m\\u00f4n? Ra m\\u00e1u?;  \\u0110au h\\u1eadu m\\u00f4n, H\\u1eadu m\\u00f4n m\\u1ecdc m\\u1ee5n th\\u1ecbt?;  T\\u1ea1i sao l\\u1ea1i \\u0111au h\\u1eadu m\\u00f4n? ; T\\u1ea1i sao h\\u1eadu m\\u00f4n v\\u1eeba \\u0111au v\\u1eeba ng\\u1ee9a?;  T\\u1ea1i sao \\u0111i ngo\\u00e0i l\\u1ea1i \\u0111au h\\u1eadu m\\u00f4n?  ;Nguy\\u00ean nh\\u00e2n \\u0111au h\\u1eadu m\\u00f4n?"}', '2017-06-15 01:29:22', '2017-06-15 02:23:26'),
(10, 1, 5, 'Hậu môn có vật thể lạ', NULL, 'hau-mon-co-vat-the-la', NULL, NULL, NULL, '{"meta":"H\\u1eadu m\\u00f4n m\\u1ecdc th\\u1ecbt tr\\u00ean da? ; H\\u1eadu m\\u00f4n m\\u1ecdc m\\u1ee5n th\\u1ecbt l\\u00e0 tr\\u0129 sao?;  H\\u1eadu m\\u00f4n c\\u00f3 v\\u1eadt th\\u1ec3 l\\u1ea1, ng\\u1ee9a?  ;\\r\\nH\\u1eadu m\\u00f4n c\\u00f3 m\\u1ee5n th\\u1ecbt r\\u01a1i ra?  ;H\\u1eadu m\\u00f4n m\\u1ecdc m\\u1ee5n th\\u1ecbt, ra m\\u00e1u? ; H\\u1eadu m\\u00f4n m\\u1ecdc m\\u1ee5n th\\u1ecbt l\\u00e0 b\\u1ec7nh g\\u00ec?"}', '2017-06-15 01:29:30', '2017-06-15 02:23:06'),
(11, 1, 0, 'Chấn thương hậu môn', NULL, 'chan-thuong-hau-mon', NULL, NULL, NULL, '[]', '2017-06-15 01:29:40', '2017-06-15 01:29:40'),
(12, 1, 11, 'Rò hậu môn', NULL, 'ro-hau-mon', NULL, NULL, NULL, '{"meta":"Ph\\u1eabu thu\\u1eadt r\\u00f2 h\\u1eadu m\\u00f4n \\u0111au kh\\u00f4ng? ;  R\\u00f2 h\\u1eadu m\\u00f4n c\\u00f3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ;  Ph\\u1eabu thu\\u1eadt r\\u00f2 h\\u1eadu m\\u00f4n c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng?  ; R\\u00f2 h\\u1eadu m\\u00f4n c\\u00f3 b\\u1eaft bu\\u1ed9c l\\u00e0m ph\\u1eabu thu\\u1eadt kh\\u00f4ng? ;  Ph\\u1eabu thu\\u1eadt r\\u00f2 h\\u1eadu m\\u00f4n sau bao l\\u00e2u th\\u00ec h\\u1ed3i ph\\u1ee5c? ;  Ph\\u1eabu thu\\u1eadt r\\u00f2 h\\u1eadu m\\u00f4n l\\u00e0m nh\\u01b0 th\\u1ebf n\\u00e0o?"}', '2017-06-15 01:29:48', '2017-06-15 02:21:29'),
(13, 1, 11, 'Nứt kẽ hậu môn', NULL, 'nut-ke-hau-mon', NULL, NULL, NULL, '{"meta":"N\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n c\\u00f3 th\\u1ec3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ;  N\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n c\\u00f3 b\\u1eaft bu\\u1ed9c ph\\u1ea3i l\\u00e0m ph\\u1eabu thu\\u1eadt kh\\u00f4ng?  ;N\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n \\u0111i ngo\\u00e0i ra m\\u00e1u ph\\u1ea3i l\\u00e0m th\\u1ebf n\\u00e0o? ; N\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n kh\\u00f4ng m\\u1ed5 th\\u00ec ch\\u1eefa tr\\u1ecb b\\u1eb1ng c\\u00e1ch n\\u00e0o? ; Ph\\u1eabu thu\\u1eadt n\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng?;  Ph\\u1eabu thu\\u1eadt n\\u1ee9t k\\u1ebd h\\u1eadu m\\u00f4n c\\u00f3 \\u0111au kh\\u00f4ng?"}', '2017-06-15 01:29:57', '2017-06-15 02:17:21'),
(14, 1, 11, 'Sa hậu môn', NULL, 'sa-hau-mon', NULL, NULL, NULL, '{"meta":"L\\u00e0m th\\u1ebf n\\u00e0o \\u0111\\u1ec3 ph\\u00e2n bi\\u1ec7t b\\u1ec7nh tr\\u0129 v\\u00e0 sa h\\u1eadu m\\u00f4n? ; Ph\\u1eabu thu\\u1eadt sa h\\u1eadu m\\u00f4n \\u0111au kh\\u00f4ng? ; Ph\\u1eabu thu\\u1eadt sa h\\u1eadu m\\u00f4n l\\u00e0m nh\\u01b0 th\\u1ebf n\\u00e0o? ; Sa h\\u1eadu m\\u00f4n c\\u00f3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng? ; Sa h\\u1eadu m\\u00f4n c\\u00f3 b\\u1eaft bu\\u1ed9c ph\\u1ea3i l\\u00e0m ph\\u1eabu thu\\u1eadt kh\\u00f4ng? ; Ph\\u1eabu thu\\u1eadt sa h\\u1eadu m\\u00f4n c\\u00f3 c\\u1ea7n n\\u1eb1m vi\\u1ec7n kh\\u00f4ng?"}', '2017-06-15 01:30:05', '2017-06-15 02:18:20'),
(15, 1, 0, 'Biểu hiện thường gặp', NULL, 'bieu-hien-thuong-gap', NULL, NULL, NULL, '[]', '2017-06-15 01:30:14', '2017-06-15 01:30:14'),
(16, 1, 15, 'Đi ngoài ra máu', NULL, 'di-ngoai-ra-mau', NULL, NULL, NULL, '{"meta":"\\u0110i ngo\\u00e0i ra m\\u00e1u l\\u00e0 b\\u1ecb tr\\u0129 sao? ; \\u0110i ngo\\u00e0i ra m\\u00e1u l\\u00e0 n\\u00f3ng sao? ; \\u0110i ngo\\u00e0i ra m\\u00e1u \\u0111\\u1ecf t\\u01b0\\u01a1i kh\\u00f4ng \\u0111au;  \\u0110i ngo\\u00e0i ra m\\u00e1u kh\\u00f4ng \\u0111au l\\u00e0 b\\u1ec7nh g\\u00ec? ; \\u0110i ngo\\u00e0i ra m\\u00e1u \\u0111au l\\u00e0 b\\u1ec7nh g\\u00ec? ;  \\u0110i ngo\\u00e0i ra m\\u00e1u l\\u00e0 bi\\u1ec3u hi\\u1ec7n ung th\\u01b0 \\u0111\\u1ea1i tr\\u1ef1c tr\\u00e0ng sao?"}', '2017-06-15 01:30:22', '2017-06-15 02:21:53'),
(17, 1, 15, 'Táo bón', NULL, 'tao-bon', NULL, NULL, NULL, '{"meta":"T\\u00e1o b\\u00f3n n\\u00ean \\u0103n g\\u00ec? ; T\\u00e1o b\\u00f3n do tr\\u0129 sao?;  Nh\\u1eefng b\\u1ec7nh g\\u00ec \\u1ea3nh h\\u01b0\\u1edfng \\u0111\\u1ebfn vi\\u1ec7c t\\u00e1o b\\u00f3n? ; T\\u00e1o b\\u00f3n, \\u0111i ngo\\u00e0i ra m\\u00e1u?;  L\\u00e0m th\\u1ebf n\\u00e0o \\u0111\\u1ec3 ch\\u1eefa tr\\u1ecb t\\u00e1o b\\u00f3n? ; T\\u00e1o b\\u00f3n c\\u00f3 th\\u1ec3 t\\u1ef1 kh\\u1ecfi kh\\u00f4ng?"}', '2017-06-15 01:30:29', '2017-06-15 02:23:43'),
(18, 1, 0, 'Kỹ thuật đặc biệt', NULL, 'ky-thuat-dac-biet', NULL, NULL, NULL, '[]', '2017-06-15 01:30:36', '2017-06-15 01:30:36'),
(19, 1, 0, 'Bệnh án', NULL, 'benh-an', NULL, NULL, NULL, '[]', '2017-06-15 01:30:43', '2017-06-15 01:30:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
