-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 10, 2022 at 10:39 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(22, '2019_08_19_000000_create_failed_jobs_table', 1),
(23, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(24, '2022_08_25_063333_create_sessions_table', 1),
(25, '2022_08_28_082414_create_reports_table', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `v_serial_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_reg_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_chasis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_engine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_route_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `v_route_name_start` text COLLATE utf8mb4_unicode_ci,
  `v_route_name_end` text COLLATE utf8mb4_unicode_ci,
  `v_fitness_expiry_date` date DEFAULT NULL,
  `v_tax_expiry_date` date DEFAULT NULL,
  `v_route_permit_expire_date` date DEFAULT NULL,
  `v_status` int(11) DEFAULT NULL,
  `v_owner_name` text COLLATE utf8mb4_unicode_ci,
  `v_owner_address` text COLLATE utf8mb4_unicode_ci,
  `owner_phone_no` int(255) DEFAULT NULL,
  `sticker_printed_date` date DEFAULT NULL,
  `sticker_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sticker_expire_date` date DEFAULT NULL,
  `v_idetify_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `v_serial_no`, `v_reg_no`, `v_chasis_no`, `v_engine_no`, `v_route_no`, `v_route_name_start`, `v_route_name_end`, `v_fitness_expiry_date`, `v_tax_expiry_date`, `v_route_permit_expire_date`, `v_status`, `v_owner_name`, `v_owner_address`, `owner_phone_no`, `sticker_printed_date`, `sticker_status`, `sticker_expire_date`, `v_idetify_code`, `created_at`, `updated_at`) VALUES
(30, '1', 'DHAKA METRO-BA-15-4010', 'MAT382042J7RO6370', 'MAT382042J7RO6370', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-10-16', '2022-06-06', '2021-06-08', 1, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-06', '0', '2023-03-01', 'bMdkzs46hC5zTqAC', '2022-08-29 22:37:27', '2022-09-05 23:55:00'),
(35, '2', 'DHAKA METRO-BA-15-505', 'MC2A3LRF0GL358315', 'MC2A3LRF0GL358315', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2023-10-03', '2023-12-02', '2023-12-02', 0, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-03', '1', '2022-09-17', 'TqY44hPUQZtFb8Qj', '2022-08-30 02:48:29', '2022-08-30 03:42:22'),
(36, '3', 'DHAKA METRO-BA-11-9842', 'MAT382042H7RO1621', '497TC93ASY803326', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-02-02', '2023-12-02', '2023-12-04', 0, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-03', '1', '2022-09-10', '53ZrmRRk8HRF5gTw', '2022-08-30 02:52:21', '2022-08-30 02:52:21'),
(37, '4', 'DHAKA METRO-BA-15-4019', 'MC2A5HRF1FA307666', 'MC2A5HRF1FA307666', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-08-30', '2022-08-31', '2022-09-29', 1, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-01', '0', '2022-09-23', '0TT6gM4dZLsYOO8Q', '2022-08-30 03:01:08', '2022-08-30 03:42:39'),
(38, '5', 'DHAKA METRO-BA-11-8887', 'MAT382042G7RO1754', '497TC93ATY803564', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2023-12-01', '2023-02-20', '2024-02-04', NULL, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-01', '1', '2022-09-10', 'xQJ51S4KvN6BXKKY', '2022-08-30 03:20:20', '2022-08-30 03:20:20'),
(39, '6', 'DHAKA METRO-BA-22-9842', 'MC2A5HRF1FA307660', 'MC2A5HRF1FA307666', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-12-30', '2022-12-28', '2022-08-31', 1, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-29', '0', '2022-09-30', 'dGeVUp9cm8xuvXzp', '2022-08-30 03:21:15', '2022-08-30 03:40:05'),
(40, '7', 'DHAKA METRO-BA-11-9842', 'MAT382042H7RO1621', '497TC93ASY803326', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-08-31', '2022-10-12', '2022-08-31', NULL, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-02', '0', '2022-09-20', 'mBCPTFAslJtwatmZ', '2022-08-30 03:22:09', '2022-08-30 03:22:09'),
(41, '8', 'DHAKA METRO-BA-17-4010', 'MAT382042G7RO1754', 'MAT382042G7RO1754', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2023-08-31', '2022-09-29', '2023-06-30', 0, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-03', '1', '2022-09-15', '8RUTWTdOjYpt82yT', '2022-08-30 03:23:02', '2022-08-30 03:32:16'),
(42, '9', 'DHAKA METRO-BA-11-8887', 'MC2A3LRF0GL358314', 'MC2A3LRF0GL358315', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2023-01-30', '2022-11-30', '2022-09-30', NULL, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-02', '0', '2022-09-17', '6pJPKRnV67EmnsB2', '2022-08-30 03:23:51', '2022-08-30 03:39:12'),
(43, '10', 'DHAKA METRO-BA-11-7620', 'MC2A3LRF0GL358315', 'MC2A3LRF0GL358315', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-08-31', '2022-08-31', '2022-08-26', 1, 'GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-27', '1', '2023-01-20', '7E1mREroNzhvE4fe', '2022-08-30 03:24:29', '2022-09-05 23:53:59'),
(44, '11', 'DHAKA METRO-BA-11-9842', 'MAT382042G7RO1754', 'MAT382042G7RO1754', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-12-29', '2022-09-27', '2022-10-20', NULL, 'BANANI', 'NITOL MOTORS LTD', 170000000, '2022-09-24', '1', '2022-09-21', 'CfA5tbdJa6ikb9zy', '2022-08-30 03:25:22', '2022-09-03 03:18:27'),
(45, '15', 'DHAKA METRO-BA-15-4010', 'MAT382042J7RO6370', '497TC93CRY809485', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-09-10', '2022-09-20', '2022-10-01', NULL, 'STANDARD BANK GULSHAN', 'NITOL MOTORS LTD', 170000000, '2022-09-30', NULL, '2022-09-30', 'b7tQgNcsG8YpJ2kn', '2022-09-03 01:00:38', '2022-09-06 00:21:19'),
(46, '12', 'DHAKA METRO-BA-15-4010', 'MAT382042J7RO6370', 'MAT382042J7RO6370', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-09-06', '2022-09-06', '2022-09-21', NULL, 'sohel', 'dhaka', 170000000, '2022-09-06', NULL, '2022-09-06', 'Uw7d45B5p5w1citr', '2022-09-05 23:09:49', '2022-09-06 00:21:31'),
(47, '16', 'MAT382042J7RO6370', '497TC93CRY809485', '497TC93CRY809485', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-09-07', '2022-09-07', '2022-09-06', NULL, 'sohel', 'NITOL MOTORS LTD', 170000000, '2022-09-06', NULL, '2022-09-06', 'qdiPw7vY9P2MbgX0', '2022-09-05 23:14:28', '2022-09-06 00:20:00'),
(48, '17', 'MAT382042J7RO6370', '497TC93CRY809485', '497TC93CRY809485', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-09-30', '2022-09-08', '2022-09-08', NULL, 'STANDARD BANK GULSHAN', 'dhaka', 170000000, '2022-09-01', NULL, '2022-09-08', 'J4aYuOTFDSJbVf2h', '2022-09-06 21:46:37', '2022-09-06 21:46:37'),
(49, '20', 'MAT382042J7RO6370', '497TC93CRY809485', '497TC93CRY809485', 'A/441', 'NARAYANGANJ CHASARA', 'NONDON PARK', '2022-09-07', '2022-09-06', '2022-09-09', NULL, 'GULSHAN', 'dhaka', 170000000, '2022-09-08', NULL, '2022-10-07', '1hqiDH9F6ajdttv3', '2022-09-06 22:04:49', '2022-09-06 22:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('8M8Q86KDzY8hgpaj4iydLidq6UgjP8ZFkXUWzeZW', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS3N4NzhkMDBlaFJnRjBaTzE0QlR0YVhTQXJOeVNncjgyekM2ZklYYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovL2xvY2FsaG9zdC92ZWhpY2xlL3B1YmxpYy9hZG1pbi9pbmRleCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0L3ZlaGljbGUvcHVibGljL2FkbWluL2luZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662804694),
('Ahqke0x5CouZEPUauCp0Q2V0T5AC8eyOo0hrdHdv', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMzQ3cTZnbWZ5dXBlbUZKRnV2QTc2QmRvajc1cHhGeldqUE91Rzh6bSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo0MzoiaHR0cDovL2xvY2FsaG9zdC92ZWhpY2xlL3B1YmxpYy9hZG1pbi9pbmRleCI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM3OiJodHRwOi8vbG9jYWxob3N0L3ZlaGljbGUvcHVibGljL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662802156),
('jrjnpxFPEIrErcybUu7nguojOTltQokIiRulDNsn', 1, '223.27.94.123', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXJzenZQMDR3N2ZkSTljTGthTFloNjhwbnNJOTZFUmdQYVBkaVRiZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTQ6Imh0dHA6Ly8yMjMuMjcuOTQuMTIzL3ZlaGljbGUvcHVibGljL2FkbWluL3ZlaGljbGUvdXNlciI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1662805728),
('KmJyboMVFw49j5beEIucPbVlyxa2lbUSBpbIwcrD', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOVBveTU0d3JiUUhkNVZtaWpGc3UwcERzN0JkUnUzNkFCS1hKYU5qayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly9sb2NhbGhvc3QvdmVoaWNsZS9wdWJsaWMvYWRtaW4vaW5kZXgiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1662806344),
('Q2iberGrYqgR6OfUibZxCvoH6Pu4VRZSg8YkTsHX', NULL, '223.27.94.123', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWWczWG84SGF3SEQ4MUlSYTAzcUFiclpvSWRRMjk4YWlOcGt3cFNhdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8yMjMuMjcuOTQuMTIzL3ZlaGljbGUvcHVibGljIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1662802337),
('tmY4E1RhPmcWCAT1mYTDPCNfeivASHEaHCktMV7O', 1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/105.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiYUdsMFg4eFg1Q04xVUV1dXV0Vk5iMUdVWEZwVEdCWUFzWTNycXVNcSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQzOiJodHRwOi8vbG9jYWxob3N0L3ZlaGljbGUvcHVibGljL2FkbWluL2luZGV4Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1662804679);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_type`, `full_name`, `phone`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2', 'Elias Khan', '0166247464', 'admin@gmail.com', NULL, '$2y$10$.nIYVkc431SRgB43HEFODe5Wdswni5hkmissKk2FP9DrHxjWWSNui', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-08 02:12:20', '2022-09-08 05:16:29');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
