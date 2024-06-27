-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2024 at 12:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prf_leave_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Accounting', 'Accounting', 0, '2024-06-24 17:07:05', '2024-06-24 17:07:05'),
(6, 'FINANCE', 'FINANCE', 0, '2024-06-24 17:09:09', '2024-06-24 17:09:09'),
(7, 'MARKETING', 'MARKETING', 1, '2024-06-24 17:09:22', '2024-06-24 17:09:22'),
(8, 'AUDIT', 'AUDIT', 0, '2024-06-24 17:09:34', '2024-06-24 17:09:34'),
(9, 'Sales', 'Sales', 0, '2024-06-24 17:10:51', '2024-06-24 17:10:51'),
(10, 'Carissa Curry', 'Reprehenderit nostr', 0, '2024-06-25 16:18:19', '2024-06-25 16:18:19');

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Web Developer', 'Web Developer', 0, '2024-06-24 17:11:45', '2024-06-24 17:11:45'),
(4, 'Graphics Designer', 'Graphics Designer', 1, '2024-06-24 17:12:09', '2024-06-24 17:12:09'),
(5, 'Digital Marketer', 'Digital Marketer', 0, '2024-06-24 17:12:25', '2024-06-24 17:12:25'),
(6, 'SEO Epert', 'SEO Epert', 0, '2024-06-24 17:12:42', '2024-06-24 17:12:42'),
(7, 'Software en', 'Software en', 1, '2024-06-25 03:32:24', '2024-06-25 03:32:24'),
(8, 'Sunt ut eos natus vo', 'Perferendis adipisic', 0, '2024-06-25 16:18:30', '2024-06-25 16:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_code` text DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `alternate_phone` text DEFAULT NULL,
  `address` text DEFAULT NULL,
  `dob` text DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `joining_date` text DEFAULT NULL,
  `resign_date` text DEFAULT NULL,
  `job_location` text DEFAULT NULL,
  `role_id` text DEFAULT NULL,
  `employee_file_uploads_id` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_code`, `name`, `username`, `email`, `phone`, `alternate_phone`, `address`, `dob`, `department_id`, `designation_id`, `joining_date`, `resign_date`, `job_location`, `role_id`, `employee_file_uploads_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(18, 'jeqih', 'xozyja', 'gocytidul', 'vofexyku', 'kolocinufu', 'hozojadyf', 'fydehyr', '1995-07-31', 8, 5, '2014-08-22', '1999-07-24', 'Autem sunt fugit au', NULL, NULL, 0, '1719354510.jpg', '2024-06-25 16:28:30', '2024-06-25 16:28:30'),
(19, 'mugifa', 'difiladepa', 'kahihezode', 'bojuhipe', 'quqizyceru', 'xapogide', 'nugujoni', '2006-11-27', 10, 3, '2011-04-04', '2011-06-10', 'Ipsum non consequatu', '1', NULL, 1, '1719354748.jpg', '2024-06-25 16:32:28', '2024-06-25 16:32:28'),
(20, 'fowodabil', 'mehobunu', 'texujec', 'tucyrada', 'zolaqud', 'nuzyqu', 'ryqad', '1983-12-12', 6, 7, '2020-09-14', '1990-08-22', 'Enim voluptatem ut', '', NULL, 1, '1719354986.jpg', '2024-06-25 16:36:26', '2024-06-25 16:36:26'),
(21, 'tylanapec', 'cebirupo', 'cunamu', 'kasaz', 'hityci', 'fysib', 'pyras', '1991-06-14', 5, 4, '2018-11-13', '1983-10-19', 'Ex et quis repudiand', '', NULL, 0, '1719355148.jpg', '2024-06-25 16:39:08', '2024-06-25 16:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `employee_file_uploads`
--

CREATE TABLE `employee_file_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_1` text DEFAULT NULL,
  `file_2` text DEFAULT NULL,
  `file_3` text DEFAULT NULL,
  `file_4` text DEFAULT NULL,
  `file_5` text DEFAULT NULL,
  `file_6` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_file_uploads`
--

INSERT INTO `employee_file_uploads` (`id`, `file_1`, `file_2`, `file_3`, `file_4`, `file_5`, `file_6`, `created_at`, `updated_at`) VALUES
(1, '1719259896.png', NULL, NULL, NULL, NULL, NULL, '2024-06-24 14:11:36', '2024-06-24 14:11:36'),
(2, '1719259992.vsix', NULL, NULL, NULL, NULL, NULL, '2024-06-24 14:13:12', '2024-06-24 14:13:12'),
(3, NULL, '1719260512.jpg', NULL, NULL, NULL, NULL, '2024-06-24 14:21:52', '2024-06-24 14:21:52'),
(4, NULL, NULL, '1719261137.csv', NULL, NULL, NULL, '2024-06-24 14:32:17', '2024-06-24 14:32:17'),
(5, NULL, NULL, NULL, '1719261376.docx', NULL, NULL, '2024-06-24 14:36:16', '2024-06-24 14:36:16'),
(6, NULL, NULL, NULL, NULL, '1719261384.docx', NULL, '2024-06-24 14:36:24', '2024-06-24 14:36:24'),
(7, NULL, NULL, NULL, NULL, NULL, '1719261393.csv', '2024-06-24 14:36:33', '2024-06-24 14:36:33'),
(8, '1719261408.docx', NULL, NULL, NULL, NULL, NULL, '2024-06-24 14:36:48', '2024-06-24 14:36:48'),
(9, NULL, '1719261416.xlsx', NULL, NULL, NULL, NULL, '2024-06-24 14:36:56', '2024-06-24 14:36:56'),
(10, NULL, NULL, '1719261437.vsix', NULL, NULL, NULL, '2024-06-24 14:37:17', '2024-06-24 14:37:17'),
(11, '1719304578.png', NULL, NULL, NULL, NULL, NULL, '2024-06-25 02:36:18', '2024-06-25 02:36:18'),
(12, '1719353873.png', NULL, NULL, NULL, NULL, NULL, '2024-06-25 16:17:53', '2024-06-25 16:17:53');

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
(7, '2024_06_22_222529_create_employees_table', 2),
(8, '2024_06_24_193114_create_employee_file_uploads_table', 2),
(10, '2024_06_24_220743_create_departments_table', 3),
(11, '2024_06_24_223917_create_designations_table', 4),
(12, '2024_06_25_095700_create_user_roles_table', 5);

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
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `username` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `avatar`, `last_login`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Amrito', NULL, 'Bosu', 'amrito', NULL, '2024-06-15 23:19:13', 'amrito@gmail.com', 0, '2024-06-15 21:19:13', '$2y$10$2NENqU65XYRwZYGyoV0l.e6wXtoT7GzT/o.beWSMvtic4Tj1YSZVK', NULL, '2024-06-15 21:19:13', '2024-06-15 21:19:13'),
(2, 'admin', NULL, NULL, 'admin', NULL, '2024-06-15 23:53:11', 'admin@gmail.com', 2, NULL, '$2y$10$2NENqU65XYRwZYGyoV0l.e6wXtoT7GzT/o.beWSMvtic4Tj1YSZVK', NULL, NULL, NULL),
(3, 'supervisor', NULL, NULL, 'supervisor', NULL, '2024-06-15 23:54:06', 'supervisor@gmail.com', 1, NULL, '$2y$10$u0rRpIMqHR6a/VBMoZNNPuSU.gF6fki3Rmg.x83SaTZibAWkLHTQm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_file_uploads`
--
ALTER TABLE `employee_file_uploads`
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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`) USING HASH;

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee_file_uploads`
--
ALTER TABLE `employee_file_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
