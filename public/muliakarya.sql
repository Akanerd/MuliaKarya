-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 01:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `muliakarya`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `link`, `created_at`, `updated_at`) VALUES
(4, 'Mulia karya - kursi', 'lH8Lqv3004OgAhZy1iPJDXmlOHdbChFSO7OzsT7Q.jpg', 'https://www.instagram.com/p/BdJRABkDbXU/', '2024-01-16 11:58:38', '2024-01-16 11:58:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_16_125311_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$l0W6e8j7/K8qHfCBS/0Gv.wHDOJ2JH9/B/gGDDkJI47rAptKFc7Ku', 'admin', 'MlC1LUP0KmuTO0Lw6cxRORuyed7xhlD8z94UqKjxvyFJjaCUgoJSp5QktQgS', NULL, NULL),
(2, 'User', 'user@gmail.com', NULL, '$2y$12$j7bcAiax6z2rzzlpNjUpgOBGnSd64m4nwWbxP/t5xLaKBu48UBkEm', 'user', 'zdjHgMSqBC7Vl7lkDbPDunCrFBGCBufJY9CbKVs3nFWUif15cskJ7HKkbIDD', NULL, NULL),
(3, 'zeta', 'zeta@gmail.com', NULL, '$2y$12$iULs7/KvyJRSj7ZOFIL5n.p.0gw2yZHPm7anpfrUdFBE5rGTVASBK', 'user', '4jr72YpXle01pnk2ZnPpfNn5BvesV5Vx4y0f7MOaumsN16xM9q8sUUAXLei7', '2024-01-14 19:44:31', '2024-01-15 19:06:47'),
(4, 'kobo', 'kobo@mail.com', NULL, '$2y$12$l6.re2Aww59VNjS4hA0UZ.5dQopDwnjdW9IQ8YfHUYMuIN2/lth5O', 'user', NULL, '2024-01-14 19:55:45', '2024-01-14 19:55:45'),
(5, 'ria', 'ria@mail.com', NULL, '$2y$12$4c9zD4768CiVg5xzzw75hOLEAasaNw0gS8AxoJ6Tc79ImMQqFxEqC', 'user', NULL, '2024-01-14 19:57:31', '2024-01-14 19:57:31'),
(6, 'sena', 'sena@mail.com', NULL, '$2y$12$5plfIz8ScHCP9iwxlgsyYuzOozqnrAX8VW.eFhBZdlzSlDY1VeFM6', 'user', NULL, '2024-01-14 20:00:35', '2024-01-14 20:00:35'),
(7, 'Azza', 'azza@mail.com', NULL, '$2y$12$oqHwWeS0KJU1ovAOmArwpuMbZ41p7aExSBmjMK.05aA2Bydq8tWNC', 'user', NULL, '2024-01-14 20:02:34', '2024-01-14 20:02:34'),
(8, 'iris', 'iris@mail.com', NULL, '$2y$12$YxmEVzEgGIrnwgraVG1HruvTac5TtJkoDZpx6o9C8HLDnRgcp.KDq', 'user', NULL, '2024-01-14 20:08:10', '2024-01-14 20:08:10'),
(9, 'rena', 'rena@mail.com', NULL, '$2y$12$4NbHkBvSkYONFE74jamZmeLh2hsnnz4hy70YSuMuBVQxAKA3zOYcm', 'user', NULL, '2024-01-14 20:09:56', '2024-01-14 20:09:56'),
(10, 'kei', 'kei@mail.com', NULL, '$2y$12$MRYN9qnvHyWiUgVon3.UZ.mxCm9VSgA4CaaANWRF14RWnVjUBNWPy', 'user', NULL, '2024-01-14 20:12:00', '2024-01-14 20:12:00'),
(11, 'kai', 'kai@mail.com', NULL, '$2y$12$9QVcgoOwCSOxN6DeB/tPNOKdnsPqU1oN72ogRjIphLWGn0vZYYh.m', 'user', NULL, '2024-01-14 20:15:24', '2024-01-14 20:15:24'),
(12, 'mi', 'mi@mail.com', NULL, '$2y$12$3gRvbfucIOMJ4mSs8n0R8OLjLhZNzD5CAEJF4K8yipzfqoRI2fayq', 'user', NULL, '2024-01-14 20:17:15', '2024-01-14 20:17:15'),
(13, 'q', 'q@mail.com', NULL, '$2y$12$Q135SXtut/OxRl0DA7esUuzVDgCIVHRxZn81Rm1A1NQXwGFM1bzEq', 'user', NULL, '2024-01-14 20:33:15', '2024-01-14 20:33:15'),
(14, 'w', 'w@mail.com', NULL, '$2y$12$XZIuV1sNfWp/wm8j05OhHOtHdqH3yVi7ktMV2cPEOAX4/u/cmmKLu', 'user', NULL, '2024-01-14 20:36:15', '2024-01-14 20:36:15'),
(15, 'kila', 'kila@mail.com', NULL, '$2y$12$Cd2XltLYH7Guq8.qOyvKLeOUnjocpJSmYLEg1wLtnVLZI1VGLYYsK', 'user', NULL, '2024-01-14 20:51:18', '2024-01-14 20:51:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
