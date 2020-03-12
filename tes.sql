-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2017 at 01:55 PM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes`
--

-- --------------------------------------------------------

--
-- Table structure for table `curhat`
--

CREATE TABLE `curhat` (
  `id_curhat` int(10) UNSIGNED NOT NULL,
  `user_kirim` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_terima` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `curhat`
--

INSERT INTO `curhat` (`id_curhat`, `user_kirim`, `user_terima`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'tes', 'sudah', '2017-01-18 05:26:08', '2017-01-18 05:26:08'),
(2, 'user', 'admin', 'test', 'sudah', '2017-01-18 05:41:58', '2017-01-18 05:41:58'),
(3, 'user', 'admin', 'curhat', 'sudah', '2017-01-18 05:42:00', '2017-01-18 05:42:00'),
(4, 'user', 'admin', 'online', 'sudah', '2017-01-18 05:42:03', '2017-01-18 05:42:03'),
(5, 'admin', 'user', 'tes', 'sudah', '2017-02-22 04:57:17', '2017-02-22 04:57:17'),
(6, 'admin', 'user', 'cepat', 'belum', '2017-02-24 01:55:36', '2017-02-24 01:55:36'),
(7, 'admin', 'user', 'mantab', 'belum', '2017-02-24 02:05:15', '2017-02-24 02:05:15'),
(8, 'admin', 'user', 'tedd', 'belum', '2017-02-24 02:08:28', '2017-02-24 02:08:28'),
(9, 'admin', 'user', 'dddd', 'belum', '2017-02-24 02:09:37', '2017-02-24 02:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(1, 'pengumuman'),
(2, 'event'),
(3, 'berita');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_01_114832_create_user', 1),
('2016_10_01_115121_create_category', 1),
('2016_10_01_115129_create_post', 1),
('2016_10_01_115233_create_curhat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(10) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `isi` longtext COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dokumen` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipe_user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `status`, `tipe_user`, `created_at`, `updated_at`) VALUES
('admin', 'eyJpdiI6IlRQa2l1TGZueUtLSENITTVBbnB6Ync9PSIsInZhbHVlIjoiak0xNW1TeStcL0szMk15TWtZbFwvOXlRPT0iLCJtYWMiOiJiMmJjZjU5ZDBlZDhhY2EwOTBlYjcyYTRlYzkxZTNlODczZmVjNDMxYWI4NDYwODM0YTUxNDA3Y2ZlMzBkOTRmIn0=', 'aktif', 'admin', NULL, NULL),
('admin2', 'eyJpdiI6ImhtQmdrQ2V1MmJMOEp5ZnN5ZjNjVVE9PSIsInZhbHVlIjoiSEF5MlVnRkJCMEhCYzhsVTd5ODZoUT09IiwibWFjIjoiNmViZDBmZjJlM2EyMDA3OTdkY2NmYzNmN2VmY2VkZWUwYWU5M2U0NGRlNjQ5YTZjNjFjMjVhZjc4MjgxNWU0NiJ9', 'aktif', 'admin2', NULL, NULL),
('user', 'eyJpdiI6IjY3R3p1N3ZpWVNFZUZHem5IUEFObmc9PSIsInZhbHVlIjoiSU4zTVwvV3hSTmIxMkhlTHBqN24ybVE9PSIsIm1hYyI6IjZmNDYxMzRlNGFmNjkyZjQ3MTFlODllNzRkZTQyY2RkZjk0OTgzOTkxNDdjNzc5YWNkODhhM2YzNzFlN2Q3NGMifQ==', 'aktif', 'user', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curhat`
--
ALTER TABLE `curhat`
  ADD PRIMARY KEY (`id_curhat`),
  ADD KEY `curhat_user_kirim_foreign` (`user_kirim`),
  ADD KEY `curhat_user_terima_foreign` (`user_terima`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `post_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

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
-- AUTO_INCREMENT for table `curhat`
--
ALTER TABLE `curhat`
  MODIFY `id_curhat` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `curhat`
--
ALTER TABLE `curhat`
  ADD CONSTRAINT `curhat_user_kirim_foreign` FOREIGN KEY (`user_kirim`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `curhat_user_terima_foreign` FOREIGN KEY (`user_terima`) REFERENCES `user` (`username`);

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
