-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indiafarmanimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `animal_type` int(11) NOT NULL,
  `age` double NOT NULL,
  `price` double NOT NULL,
  `no_animals` int(11) DEFAULT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `milk_capacity` double DEFAULT NULL,
  `due_month_pregnancy` double DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `breed_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregnant` int(11) DEFAULT NULL,
  `vaccinated` int(11) NOT NULL,
  `ownership_status` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` double DEFAULT NULL,
  `ads_photo_id` bigint(20) UNSIGNED NOT NULL,
  `ads_video_id` bigint(20) UNSIGNED NOT NULL,
  `ads_address_id` bigint(20) UNSIGNED NOT NULL,
  `certified` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads_adress`
--

CREATE TABLE `ads_adress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `takula` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads_photo`
--

CREATE TABLE `ads_photo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo5` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo6` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ads_videos`
--

CREATE TABLE `ads_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_type` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_address_id` bigint(20) UNSIGNED NOT NULL,
  `animal_type` int(11) NOT NULL,
  `no_of_animal` int(11) NOT NULL,
  `breed` int(11) NOT NULL,
  `contact_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` int(11) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_address`
--

CREATE TABLE `appointment_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluka` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `book_transport`
--

CREATE TABLE `book_transport` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `animal_type` int(11) NOT NULL,
  `no_of_animal` int(11) NOT NULL,
  `contact_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_transport` date NOT NULL,
  `from_address_id` bigint(20) UNSIGNED NOT NULL,
  `to_address_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `from_address`
--

CREATE TABLE `from_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluka` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2012_02_09_142834_create_user_documents_table', 1),
(2, '2013_02_09_142719_create_user_address_table', 1),
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2022_02_09_142941_create_vets_table', 1),
(8, '2022_02_09_144119_create_ads_adress_table', 1),
(9, '2022_02_09_144437_create_ads_videos_table', 1),
(10, '2022_02_09_144440_create_ads_photo_table', 1),
(11, '2022_02_09_144537_create_ads_table', 1),
(12, '2022_02_09_145457_create_appointment_address_table', 1),
(13, '2022_02_09_145543_create_appointments_table', 1),
(14, '2022_02_09_145800_create_from_address_table', 1),
(15, '2022_02_09_145801_create_to_address_table', 1),
(16, '2022_02_09_145806_create_book_transport_table', 1),
(17, '2022_02_09_151352_create_packages_table', 1),
(18, '2022_02_09_151428_create_sellers_table', 1),
(19, '2022_02_09_151546_create_subscriptions_table', 1),
(20, '2022_02_09_151735_create_transports_table', 1),
(21, '2022_02_10_121742_add_owner_status_to_users_table', 2),
(22, '2022_02_10_151032_add_soft_delete_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_ads` int(11) NOT NULL,
  `period` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `farm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `user_id`, `farm_name`, `status`, `created_at`, `updated_at`) VALUES
(3, 12, 'muneeb farm', 1, '2022-02-10 08:03:06', '2022-02-10 08:03:06'),
(4, 13, 'Hoyt Cantu', 1, '2022-02-10 08:08:28', '2022-02-10 08:08:28'),
(5, 14, 'Kim William', 1, '2022-02-10 08:10:14', '2022-02-10 08:10:14'),
(6, 15, 'Donna Buckner', 1, '2022-02-10 08:22:22', '2022-02-10 08:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `activate_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `to_address`
--

CREATE TABLE `to_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluka` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transports`
--

CREATE TABLE `transports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_make_model` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` int(11) NOT NULL,
  `membership_type` int(11) NOT NULL,
  `contact_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `document_id` int(11) DEFAULT NULL,
  `email_otp` int(11) DEFAULT NULL,
  `mob_otp` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `owner_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `user_role`, `membership_type`, `contact_no`, `email`, `password`, `image`, `address_id`, `document_id`, `email_otp`, `mob_otp`, `status`, `remember_token`, `created_at`, `updated_at`, `owner_status`, `deleted_at`) VALUES
(1, 'admin', NULL, 'admin', 1, 1, '333333333', 'admin@gmail.com', '$2y$10$QoIdW5VLk2EcopCor7JEveUBcGpHj9auJvQi1rs8uCBE39KIkBn8e', '', 0, 0, 730232, NULL, 1, NULL, NULL, '2022-02-10 05:16:03', NULL, NULL),
(12, 'muneeb rehman', NULL, NULL, 2, 1, '03049167411', 'muneeburr451@gmail.com', '$2y$10$DanzI6WC31vkA4diQYjKgOdBlKemyIyL8PofYKRktX4JGya.mkwGq', '/uploads/12/profile/1644498186956551662834.png', 17, NULL, NULL, NULL, 0, NULL, '2022-02-10 08:03:06', '2022-02-10 08:03:06', 'owner', NULL),
(13, 'Lane Burns', NULL, NULL, 2, 0, 'Nesciunt hic illum', 'byfel@mailinator.com', '$2y$10$XmHEvdYo6JumLdL.ctSi0OcyNNCfuf3uZJcvfZf49qYOH/5kfGaDu', '/uploads/13/profile/1644498508649169086567.jpeg', 18, NULL, NULL, NULL, 0, NULL, '2022-02-10 08:08:28', '2022-02-10 08:08:28', 'owner', NULL),
(14, 'Rahim Knowles', NULL, NULL, 2, 1, 'Voluptatibus aliqua', 'fovadukum@mailinator.com', '$2y$10$Oym3i1lAi5AFuGS8ocoWluMIoKJa.Ew53C2BckWqmcMks5UKDRc0u', '/uploads/14/profile/1644498614181045579849.png', 19, NULL, NULL, NULL, 0, NULL, '2022-02-10 08:10:14', '2022-02-10 10:50:11', 'agent', '2022-02-10 10:50:11'),
(15, 'Kieran Tyler', NULL, NULL, 2, 1, 'Facere commodi velit', 'jobuny@mailinator.com', '$2y$10$Mjqu5nPOqMOiOSVWdpBzm.ciMmB2pzUOaP/U6LL48if5o7YSpe.w2', '/uploads/15/profile/1644499342519031104017.jfif', 20, NULL, NULL, NULL, 0, NULL, '2022-02-10 08:22:22', '2022-02-10 08:22:22', 'agent', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taluka` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`id`, `address_line1`, `address_line2`, `area`, `city`, `state`, `district`, `taluka`, `zipcode`, `created_at`, `updated_at`) VALUES
(14, 'house number 212,karam shah wali,mailsi,vehari', 'jinah boys hostel,dew samajh road,lower mall lahore.', 'johar town', 'Pune', 'Jharkhand', 'Pune', 'Pune', 54000, '2022-02-10 07:52:41', '2022-02-10 07:52:41'),
(17, 'house number 212,karam shah wali,mailsi,vehari', 'jinah boys hostel,dew samajh road,lower mall lahore.', 'johar town', 'Pune', 'Goa', 'Pune', 'Pune', 54000, '2022-02-10 08:03:05', '2022-02-10 08:03:05'),
(18, 'johar town', 'Consectetur corrupti', 'Ullam dolores obcaec', 'Pune', 'Jammu and Kashmir', 'Pune', 'Pune', 34233, '2022-02-10 08:08:28', '2022-02-10 08:08:28'),
(19, '849 Milton Parkway', 'Maiores mollitia dic', 'Molestiae deserunt e', 'Pune', 'Gujarat', 'Pune', 'Pune', 90809, '2022-02-10 08:10:14', '2022-02-10 08:10:14'),
(20, '785 North Nobel Road', 'Laboris maiores dist', 'Deserunt et duis est', 'Pune', 'Manipur', 'Pune', 'Pune', 14, '2022-02-10 08:22:21', '2022-02-10 08:22:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_documents`
--

CREATE TABLE `user_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `document2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document3` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document4` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vets`
--

CREATE TABLE `vets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `license_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reg_vet_council` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vc_reg_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ads_user_id_foreign` (`user_id`),
  ADD KEY `ads_ads_photo_id_foreign` (`ads_photo_id`),
  ADD KEY `ads_ads_video_id_foreign` (`ads_video_id`),
  ADD KEY `ads_ads_address_id_foreign` (`ads_address_id`);

--
-- Indexes for table `ads_adress`
--
ALTER TABLE `ads_adress`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_photo`
--
ALTER TABLE `ads_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_videos`
--
ALTER TABLE `ads_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_appointment_address_id_foreign` (`appointment_address_id`);

--
-- Indexes for table `appointment_address`
--
ALTER TABLE `appointment_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_transport`
--
ALTER TABLE `book_transport`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_transport_user_id_foreign` (`user_id`),
  ADD KEY `book_transport_from_address_id_foreign` (`from_address_id`),
  ADD KEY `book_transport_to_address_id_foreign` (`to_address_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `from_address`
--
ALTER TABLE `from_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sellers_user_id_foreign` (`user_id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_package_id_foreign` (`package_id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`);

--
-- Indexes for table `to_address`
--
ALTER TABLE `to_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transports`
--
ALTER TABLE `transports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transports_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_documents`
--
ALTER TABLE `user_documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vets`
--
ALTER TABLE `vets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vets_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads_adress`
--
ALTER TABLE `ads_adress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads_photo`
--
ALTER TABLE `ads_photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads_videos`
--
ALTER TABLE `ads_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appointment_address`
--
ALTER TABLE `appointment_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `book_transport`
--
ALTER TABLE `book_transport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `from_address`
--
ALTER TABLE `from_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `to_address`
--
ALTER TABLE `to_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ads`
--
ALTER TABLE `ads`
  ADD CONSTRAINT `ads_ads_address_id_foreign` FOREIGN KEY (`ads_address_id`) REFERENCES `ads_adress` (`id`),
  ADD CONSTRAINT `ads_ads_photo_id_foreign` FOREIGN KEY (`ads_photo_id`) REFERENCES `ads_photo` (`id`),
  ADD CONSTRAINT `ads_ads_video_id_foreign` FOREIGN KEY (`ads_video_id`) REFERENCES `ads_videos` (`id`),
  ADD CONSTRAINT `ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_appointment_address_id_foreign` FOREIGN KEY (`appointment_address_id`) REFERENCES `appointment_address` (`id`),
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `book_transport`
--
ALTER TABLE `book_transport`
  ADD CONSTRAINT `book_transport_from_address_id_foreign` FOREIGN KEY (`from_address_id`) REFERENCES `from_address` (`id`),
  ADD CONSTRAINT `book_transport_to_address_id_foreign` FOREIGN KEY (`to_address_id`) REFERENCES `to_address` (`id`),
  ADD CONSTRAINT `book_transport_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `sellers`
--
ALTER TABLE `sellers`
  ADD CONSTRAINT `sellers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`),
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transports`
--
ALTER TABLE `transports`
  ADD CONSTRAINT `transports_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `vets`
--
ALTER TABLE `vets`
  ADD CONSTRAINT `vets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
