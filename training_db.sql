-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 03:37 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `to_id` int(11) DEFAULT NULL,
  `from_id` int(11) DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `to_id`, `from_id`, `content`, `created`, `modified`) VALUES
(1, 2, 1, 'tset', '2021-07-14 09:58:45', '2021-07-14 09:58:45'),
(2, 3, 1, 'test', '2021-07-14 09:58:53', '2021-07-14 09:58:53'),
(3, 4, 1, 'test', '2021-07-14 09:59:03', '2021-07-14 09:59:03'),
(4, 5, 1, 'tset', '2021-07-14 09:59:10', '2021-07-14 09:59:10'),
(6, 5, 1, 'test', '2021-07-15 04:38:14', '2021-07-15 04:38:14'),
(7, 6, 1, 'test', '2021-07-15 04:38:28', '2021-07-15 04:38:28'),
(8, 7, 1, 'test', '2021-07-15 04:38:39', '2021-07-15 04:38:39'),
(9, 8, 1, 'test', '2021-07-15 04:38:47', '2021-07-15 04:38:47'),
(10, 9, 1, 'tset', '2021-07-15 04:38:54', '2021-07-15 04:38:54'),
(14, 1, 5, 'test', '2021-07-15 04:55:09', '2021-07-15 04:55:09'),
(15, 10, 1, 'test', '2021-07-15 08:21:55', '2021-07-15 08:21:55'),
(16, 11, 1, 'tset', '2021-07-15 08:22:03', '2021-07-15 08:22:03'),
(37, 1, 13, 'tset', '2021-07-15 11:22:25', '2021-07-15 11:22:25'),
(38, 2, 13, '', '2021-07-15 11:22:32', '2021-07-15 11:22:32'),
(39, 13, 1, 'tset', '2021-07-15 11:23:06', '2021-07-15 11:23:06'),
(40, 1, 13, 'test', '2021-07-15 11:23:57', '2021-07-15 11:23:57'),
(41, 13, 1, 'test', '2021-07-15 11:24:56', '2021-07-15 11:24:56'),
(42, 1, 13, 'tset', '2021-07-15 11:26:16', '2021-07-15 11:26:16'),
(43, 13, 1, 'test', '2021-07-15 11:33:36', '2021-07-15 11:33:36'),
(44, 1, 13, 'test', '2021-07-15 11:35:14', '2021-07-15 11:35:14'),
(45, 1, 13, 'test', '2021-07-15 11:35:58', '2021-07-15 11:35:58'),
(46, 13, 1, 'tset', '2021-07-15 11:36:32', '2021-07-15 11:36:32'),
(47, 13, 1, 'test', '2021-07-15 11:36:43', '2021-07-15 11:36:43'),
(48, 1, 13, 'tset', '2021-07-15 11:37:55', '2021-07-15 11:37:55'),
(49, 13, 1, 'teste', '2021-07-15 11:39:07', '2021-07-15 11:39:07'),
(50, 1, 13, 'test', '2021-07-15 11:46:24', '2021-07-15 11:46:24'),
(51, 13, 1, 'test', '2021-07-15 11:48:09', '2021-07-15 11:48:09'),
(52, 13, 1, 'test', '2021-07-15 11:49:43', '2021-07-15 11:49:43'),
(53, 13, 1, 'test', '2021-07-15 11:50:07', '2021-07-15 11:50:07'),
(54, 13, 1, 'test', '2021-07-15 11:51:08', '2021-07-15 11:51:08'),
(55, 1, 13, 'test', '2021-07-15 11:53:30', '2021-07-15 11:53:30'),
(56, 13, 1, 'testse', '2021-07-15 11:55:45', '2021-07-15 11:55:45'),
(57, 1, 13, 'test', '2021-07-15 11:58:31', '2021-07-15 11:58:31'),
(58, 13, 1, 'test', '2021-07-15 11:59:05', '2021-07-15 11:59:05'),
(59, 1, 13, 'test', '2021-07-15 12:00:16', '2021-07-15 12:00:16'),
(60, 1, 13, 'TEST', '2021-07-15 12:03:26', '2021-07-15 12:03:26'),
(62, 13, 1, 'test', '2021-07-16 03:36:52', '2021-07-16 03:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `hubby` text COLLATE utf8_unicode_ci,
  `last_login_time` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `created_ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified_ip` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `image`, `gender`, `birthdate`, `hubby`, `last_login_time`, `created_at`, `modified`, `created_ip`, `modified_ip`) VALUES
(1, 'admin1', 'admin1@test.test', '720751019a4a70940c7af57244e8c70ee0b534b6', '1626397732.jpg', '1', '2021-07-03', 'test', '2021-07-14 09:38:08', '2021-07-14 09:38:08', '2021-07-14 09:38:08', '127.0.0.1', '127.0.0.1'),
(2, 'admin2', 'admin2@test.test', '8450bc0e3d2413cb0e1ae52b4f2a2d0a5160159f', NULL, NULL, NULL, NULL, '2021-07-14 09:41:20', '2021-07-14 09:41:20', '2021-07-14 09:41:20', '127.0.0.1', NULL),
(3, 'admin3', 'admin3@test.test', '22ffbf570c419b3bc1a9c2f71a412a73787cdc55', NULL, NULL, NULL, NULL, '2021-07-14 09:50:31', '2021-07-14 09:50:31', '2021-07-14 09:50:31', '127.0.0.1', NULL),
(4, 'admin4', 'admin4@test.test', '5ab4a41bbb244e8a4532a9ca4c2187ffc4b9c274', NULL, NULL, NULL, NULL, '2021-07-14 09:51:31', '2021-07-14 09:51:31', '2021-07-14 09:51:31', '127.0.0.1', NULL),
(5, 'admin5', 'admin5@test.test', 'cf8d1f7005caef6f48cdacd1867ceec2f111ef8e', NULL, NULL, NULL, NULL, '2021-07-14 09:52:14', '2021-07-14 09:52:14', '2021-07-14 09:52:14', '127.0.0.1', NULL),
(6, 'admin6', 'admin6@test.tset', '2a3e1f98dc6b4b7002b129a7c78c958380845efd', NULL, NULL, NULL, NULL, '2021-07-14 09:53:07', '2021-07-14 09:53:07', '2021-07-14 09:53:07', '127.0.0.1', NULL),
(7, 'admin7', 'admin7@test.test', '5325b9437c9e276fa31a1de19109e9fe52af0673', NULL, NULL, NULL, NULL, '2021-07-14 09:53:38', '2021-07-14 09:53:38', '2021-07-14 09:53:38', '127.0.0.1', NULL),
(8, 'admin8', 'admin8@test.test', 'e5666d7f185973a3ce8908731d00c4abe14ffbf4', NULL, NULL, NULL, NULL, '2021-07-14 09:54:08', '2021-07-14 09:54:08', '2021-07-14 09:54:08', '127.0.0.1', NULL),
(9, 'admin9', 'admin9@test.test', '7e19fb56dddcaa07cd6c0da4b862293825c7c531', NULL, NULL, NULL, NULL, '2021-07-14 09:54:25', '2021-07-14 09:54:25', '2021-07-14 09:54:25', '127.0.0.1', NULL),
(10, 'admin10', 'admin10@test.test', '8e3dffb60da6a2be96f36f1a890853d98ecf6eab', NULL, NULL, NULL, NULL, '2021-07-14 09:55:06', '2021-07-14 09:55:06', '2021-07-14 09:55:06', '127.0.0.1', NULL),
(11, 'admin11', 'admin11@test.test', '6a60456751d11b6a068727fc6400112ec093a4bd', NULL, NULL, NULL, NULL, '2021-07-14 09:56:13', '2021-07-14 09:56:13', '2021-07-14 09:56:13', '127.0.0.1', NULL),
(12, 'admin12', 'admin12@test.test', 'b6576eb98a17f5e7829e1137be398ede2d2164b6', NULL, NULL, NULL, NULL, '2021-07-14 09:56:58', '2021-07-14 09:56:58', '2021-07-14 09:56:58', '127.0.0.1', NULL),
(13, 'check', 'check@test.test', 'b1df6bfd51b1616091f994393c0f9fd42a234f4b', NULL, NULL, NULL, NULL, '2021-07-15 11:22:09', NULL, '2021-07-15 11:22:09', '127.0.0.1', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
