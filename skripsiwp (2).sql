-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2020 at 04:35 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsiwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `deskripsi`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'Busuk Hitam', 'lorem', 'lorem', '2020-02-07 01:04:44', '2020-02-10 21:38:23'),
(2, 'Antraknosa', 'lorem', 'lorem', '2020-02-07 01:05:02', '2020-02-07 01:05:02'),
(3, 'Layu Sclerotium', 'lorem', 'lorem', '2020-02-07 01:05:15', '2020-02-07 01:05:15'),
(4, 'Virus Mosaik Cymbidium', 'lorem', 'lorem', '2020-02-07 01:05:29', '2020-02-07 01:05:29'),
(5, 'Virus Mosaik Tembakau', 'lorem', 'lorem', '2020-02-07 01:05:42', '2020-02-07 01:05:42'),
(6, 'Hawar Bunga', 'lorem', 'lorem', '2020-02-07 01:05:58', '2020-02-07 01:05:58'),
(8, 'Busuk Coklat', 'lorem', 'lorem', '2020-02-07 01:11:58', '2020-02-07 01:11:58'),
(18, 'Coba', 'lorem', 'lorem', '2020-04-29 01:18:04', '2020-04-29 01:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif_kriteria`
--

CREATE TABLE `alternatif_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `bobotnilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`id`, `alternatif_id`, `kriteria_id`, `bobotnilai`, `created_at`, `updated_at`) VALUES
(45, 1, 4, 4, '2020-05-10 02:38:17', '2020-05-10 02:38:17'),
(46, 1, 3, 5, '2020-05-10 02:38:27', '2020-05-10 02:38:27'),
(47, 1, 5, 1, '2020-05-10 02:38:37', '2020-05-10 02:38:37'),
(48, 1, 6, 3, '2020-05-10 02:38:45', '2020-05-10 02:38:45'),
(49, 1, 7, 1, '2020-05-10 02:38:52', '2020-05-10 02:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jenisanggreks`
--

CREATE TABLE `jenisanggreks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atribut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id`, `namakriteria`, `atribut`, `range`, `created_at`, `updated_at`) VALUES
(3, 'Lingkungan', 'cost', 25, '2020-02-07 01:21:37', '2020-02-18 22:08:59'),
(4, 'Daun', 'cost', 25, '2020-02-07 01:21:56', '2020-02-07 01:21:56'),
(5, 'Batang', 'cost', 20, '2020-02-07 01:22:18', '2020-02-07 01:22:18'),
(6, 'Akar', 'cost', 20, '2020-02-07 01:22:35', '2020-02-07 01:22:35'),
(7, 'Bunga', 'cost', 10, '2020-02-07 01:22:53', '2020-02-07 01:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_17_090138_create_alternatifs_table', 1),
(5, '2020_01_17_090300_create_kriterias_table', 1),
(6, '2020_01_19_062336_create_subkriterias_table', 1),
(7, '2020_02_11_185025_create_jenisanggreks_table', 2),
(8, '2020_02_12_045618_create_penyakitanggreks_table', 3),
(9, '2020_02_12_053607_create_tentangs_table', 4),
(10, '2020_02_15_151532_create_nilaialternatifs_table', 5),
(11, '2020_05_10_091551_create_sarans_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penyakitanggreks`
--

CREATE TABLE `penyakitanggreks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sarans`
--

CREATE TABLE `sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subkriterias`
--

CREATE TABLE `subkriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `namasub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobotsub` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subkriterias`
--

INSERT INTO `subkriterias` (`id`, `kriteria_id`, `namasub`, `bobotsub`, `created_at`, `updated_at`) VALUES
(1, 3, 'Lembab', 3, '2020-02-07 01:38:22', '2020-02-07 01:38:22'),
(2, 3, 'Teduh', 4, '2020-02-09 19:24:33', '2020-02-09 19:24:33'),
(3, 3, 'Kering', 5, '2020-02-09 19:24:53', '2020-02-09 19:24:53'),
(4, 4, 'Bercak berwarna ungu kehitaman', 5, '2020-02-09 19:25:12', '2020-02-09 19:25:12'),
(5, 4, 'Bercak bulat kuning kehijauan ada bintik jamur', 4, '2020-02-09 19:25:30', '2020-02-09 19:25:30'),
(6, 4, 'Menguning dan layu', 3, '2020-02-09 19:25:48', '2020-02-09 19:25:48'),
(7, 4, 'Keriput', 2, '2020-02-09 19:26:09', '2020-02-09 19:26:09'),
(8, 5, 'Membusuk dan ada jamur', 4, '2020-02-09 19:26:38', '2020-02-09 19:26:38'),
(9, 5, 'Membusuk', 5, '2020-02-09 19:26:54', '2020-02-09 19:26:54'),
(10, 6, 'Berwarna keunguan dan layu', 3, '2020-02-09 19:27:13', '2020-02-11 11:25:51'),
(11, 6, 'Akar bekas dipotong berwarna ungu', 4, '2020-02-09 19:27:31', '2020-02-09 19:27:31'),
(12, 6, 'Akar membusuk', 5, '2020-02-09 19:27:44', '2020-02-09 19:27:44'),
(13, 7, 'Bercak coklat', 5, '2020-02-09 19:28:04', '2020-02-09 19:28:04'),
(14, 7, 'Tangkai bunga mengering dan berkerut', 4, '2020-02-09 19:28:22', '2020-02-09 19:28:22'),
(15, 7, 'Bunga kehitaman dan rontok', 3, '2020-02-09 19:28:34', '2020-02-09 19:28:34'),
(19, 9, 'awaw', 40, '2020-02-15 04:52:04', '2020-02-15 04:52:04'),
(20, 3, 'Tidak Ada Gejala', 1, '2020-02-16 00:16:44', '2020-02-16 00:16:44'),
(21, 4, 'Tidak Ada Gejala', 1, '2020-02-16 00:16:56', '2020-02-16 00:16:56'),
(22, 5, 'Tidak Ada Gejala', 1, '2020-02-16 00:17:05', '2020-02-16 00:17:05'),
(23, 6, 'Tidak Ada Gejala', 1, '2020-02-16 00:17:13', '2020-02-16 00:17:13'),
(24, 7, 'Tidak Ada Gejala', 1, '2020-02-16 00:17:21', '2020-02-16 00:17:21');

-- --------------------------------------------------------

--
-- Table structure for table `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iqbaldev', 'iqbaldev@gmail.com', NULL, '$2y$10$LSSzltGgOj5NlHzHL7fJae6fUYqxwREKv3QjUhdCE5W97sdAKzfOW', NULL, '2020-02-07 01:04:19', '2020-02-07 01:04:19'),
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$U6yXIg9X6yGEn1kOnv4UDOwcBrKZYzKMvjoI9aF0RDZ5hlSllGK92', NULL, '2020-02-20 00:20:45', '2020-02-20 00:20:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alternatif_kriteria`
--
ALTER TABLE `alternatif_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenisanggreks`
--
ALTER TABLE `jenisanggreks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
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
-- Indexes for table `penyakitanggreks`
--
ALTER TABLE `penyakitanggreks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarans`
--
ALTER TABLE `sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subkriterias`
--
ALTER TABLE `subkriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentangs`
--
ALTER TABLE `tentangs`
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
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `alternatif_kriteria`
--
ALTER TABLE `alternatif_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisanggreks`
--
ALTER TABLE `jenisanggreks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `penyakitanggreks`
--
ALTER TABLE `penyakitanggreks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sarans`
--
ALTER TABLE `sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subkriterias`
--
ALTER TABLE `subkriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
