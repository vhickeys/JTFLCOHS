-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2025 at 10:20 PM
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
-- Database: `nafogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_19_152555_create_unit_nomenclature_table', 2);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7KgrBbWFhn8lBiZZx6tDJFSPH3K2Va0VzG6VJHe7', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL3VuaXQtbG9naW4/bW9kZWw9YXVmb2dlbSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJGbVFZWUdOTmo1ckFmWUZqV0VKY2w0ZW9la2d5a2NXbGRPR1ZrdEJMIjt9', 1752955435);

-- --------------------------------------------------------

--
-- Table structure for table `unit_nomenclature`
--

CREATE TABLE `unit_nomenclature` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `unit_nomenclature`
--

INSERT INTO `unit_nomenclature` (`id`, `unit`, `status`, `created_at`, `updated_at`) VALUES
(1, '7th Batallion', 0, '2025-07-19 15:34:28', '2025-07-19 15:34:28'),
(2, '3rd Batallion', 0, '2025-07-19 15:34:28', '2025-07-19 15:34:28'),
(3, 'Alpha Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(4, 'Bravo Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(5, 'Charlie Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(6, 'Delta Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(7, 'Echo Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(8, 'Foxtrot Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(9, 'Golf Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(10, 'Hotel Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(11, 'India Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(12, 'Juliet Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(13, '101st Airborne', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(14, '82nd Airborne', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(15, '1st Armored Division', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(16, '2nd Infantry Division', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(17, '3rd Cavalry Regiment', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(18, '75th Ranger Regiment', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(19, 'Special Forces Group A', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(20, 'Special Forces Group B', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(21, 'Field Artillery Battalion', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(22, 'Combat Support Team', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(23, 'Tactical Recon Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(24, 'Logistics Support Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(25, 'Military Intelligence Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(26, 'Engineering Corps', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(27, 'Signal Corps', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(28, 'Medical Corps', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(29, 'Aviation Battalion', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(30, 'Air Defense Artillery', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(31, 'Rapid Deployment Force', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(32, 'Mechanized Infantry', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(33, 'Armored Recon Squad', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(34, 'Heavy Weapons Company', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(35, 'Sniper Platoon', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(36, 'Mortar Platoon', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(37, 'Anti-Tank Platoon', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(38, 'Pathfinder Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(39, 'Paratrooper Division', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(40, 'Urban Warfare Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(41, 'Jungle Warfare Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(42, 'Desert Combat Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(43, 'Arctic Survival Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(44, 'Amphibious Assault Team', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(45, 'Combat Engineer Team', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(46, 'Chemical Defense Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(47, 'Electronic Warfare Team', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(48, 'PsyOps Division', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(49, 'Drone Recon Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(50, 'Cyber Operations Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(51, 'K-9 Unit', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26'),
(52, 'Military Police Squad', 0, '2025-07-19 20:12:26', '2025-07-19 20:12:26');

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `unit_nomenclature`
--
ALTER TABLE `unit_nomenclature`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `unit_nomenclature`
--
ALTER TABLE `unit_nomenclature`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
