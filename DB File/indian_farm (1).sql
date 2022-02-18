-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2022 at 03:41 PM
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
-- Database: `indian_farm`
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
  `due_month_pregnancy` date DEFAULT NULL,
  `gender` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breed_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pregnant` int(11) DEFAULT NULL,
  `vaccinated` int(11) NOT NULL,
  `ownership_status` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` double DEFAULT NULL,
  `ads_photo_id` bigint(20) UNSIGNED NOT NULL,
  `ads_video_id` bigint(20) UNSIGNED NOT NULL,
  `ads_address_id` bigint(20) UNSIGNED NOT NULL,
  `certified` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `certified_reg_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `user_id`, `animal_type`, `age`, `price`, `no_animals`, `breed`, `milk_capacity`, `due_month_pregnancy`, `gender`, `breed_type`, `pregnant`, `vaccinated`, `ownership_status`, `description`, `weight`, `ads_photo_id`, `ads_video_id`, `ads_address_id`, `certified`, `status`, `created_at`, `updated_at`, `certified_reg_no`, `deleted_at`) VALUES
(12, 1, 0, 34, 840, 34534, 'Magni perspiciatis', 56, '1977-12-03', NULL, 'Select Bread Type', 1, 1, NULL, NULL, 345, 19, 19, 14, 1, 1, '2022-02-17 08:24:56', '2022-02-17 08:39:59', 'Qui expedita sequi n', '2022-02-17 08:39:59'),
(13, 1, 0, 69, 847, 345435, 'Reprehenderit sed de', 1, '1982-05-24', NULL, '1', 1, 0, NULL, NULL, 34534, 20, 20, 15, 0, 1, '2022-02-17 08:40:32', '2022-02-17 08:40:32', 'A nemo ut tempore p', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ads_adress`
--

CREATE TABLE `ads_adress` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `takula` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `addressline1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `addressline2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads_adress`
--

INSERT INTO `ads_adress` (`id`, `area`, `takula`, `city`, `district`, `zipcode`, `created_at`, `updated_at`, `addressline1`, `addressline2`, `state`) VALUES
(1, 'Accusantium molestia', 'Assumenda velit exc', NULL, 'Magni asperiores off', 11901, '2022-02-15 10:44:42', '2022-02-15 10:44:42', '55 North Hague Extension', 'Accusantium autem fu', NULL),
(2, 'Iure quidem velit mo', 'Animi aut dolor est', NULL, 'Sit neque saepe ut n', 52850, '2022-02-16 10:58:18', '2022-02-16 10:58:18', '289 South Clarendon Court', 'In minim tempore co', 'Non nemo molestiae a'),
(3, 'Nesciunt vero tempo', 'Et aperiam et quis o', NULL, 'Eum accusamus rerum', 41512, '2022-02-16 10:59:24', '2022-02-16 10:59:24', '992 South Nobel Lane', 'Unde officiis proide', 'Ipsum voluptas maio'),
(4, 'Officiis aut dolor q', 'Molestias vero sunt', NULL, 'Qui doloribus reicie', 22955, '2022-02-16 10:59:45', '2022-02-16 10:59:45', '48 Clarendon Street', 'Modi dolor sequi ape', 'Dignissimos deserunt'),
(6, 'Magnam illo velit au', 'Quasi inventore null', NULL, 'Doloremque dolore mo', 30477, '2022-02-16 11:00:34', '2022-02-16 11:00:34', '88 Fabien Lane', 'Sint itaque ut id et', 'Officia corporis omn'),
(7, 'Commodo eos quae in', 'Pariatur Officia se', NULL, 'Est mollitia vel et', 59911, '2022-02-16 11:01:08', '2022-02-16 11:01:08', '69 North Fabien Court', 'Voluptas temporibus', 'Quas voluptas volupt'),
(8, 'Illo eum nulla cupid', 'Sequi a mollitia duc', NULL, 'Ullamco in velit omn', 61058, '2022-02-16 11:05:13', '2022-02-16 11:05:13', '732 Nobel Extension', 'Eligendi eiusmod sit', 'Sunt laboriosam inc'),
(9, 'Ratione consequatur', 'Ducimus animi qui', NULL, 'Autem accusantium al', 46776, '2022-02-17 07:21:47', '2022-02-17 07:21:47', '751 South Second Street', 'Ut voluptas et quisq', 'Eius necessitatibus'),
(10, 'Incidunt itaque non', 'Elit mollit exercit', NULL, 'Aut in rerum non quo', 44160, '2022-02-17 07:22:17', '2022-02-17 07:22:17', '786 Cowley Drive', 'Incidunt est qui vo', 'A quidem sapiente of'),
(11, 'Fugiat voluptate rer', 'Accusantium animi u', NULL, 'Enim anim cumque exp', 25551, '2022-02-17 07:59:23', '2022-02-17 07:59:23', '61 Second Road', 'Omnis sit eos est r', 'Dolor eum voluptas p'),
(12, 'Sit expedita consequ', 'Tempore assumenda q', NULL, 'Tenetur optio lauda', 82195, '2022-02-17 08:01:27', '2022-02-17 08:01:27', '22 South Rocky Nobel Avenue', 'Eos maiores quam et', 'Dolorem modi eos et'),
(14, 'Animi molestias qui', 'Cupiditate in sed et', NULL, 'In velit aliquam com', 95111, '2022-02-17 08:24:56', '2022-02-17 08:24:56', '145 North Clarendon Court', 'Culpa omnis autem q', 'Irure voluptatem ea'),
(15, 'Nisi Nam voluptatem', 'Fugit eveniet irur', NULL, 'At quia in neque eiu', 55221, '2022-02-17 08:40:32', '2022-02-17 08:40:32', '49 South Green Oak Street', 'Ipsum adipisicing m', 'Qui iste vel amet n');

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

--
-- Dumping data for table `ads_photo`
--

INSERT INTO `ads_photo` (`id`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `created_at`, `updated_at`) VALUES
(1, 'Ads/images/164493988271320067.jpg', 'Ads/images/164493988265626325.jpg', 'Ads/images/164493988287421109.jpg', 'Ads/images/164493988270565582.webp', NULL, NULL, '2022-02-15 10:44:42', '2022-02-15 10:44:42'),
(7, 'Ads/images/164502709823062607.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-16 10:58:18', '2022-02-16 10:58:18'),
(8, 'Ads/images/164502716493420288.jpg', 'Ads/images/164502716442046612.jpg', 'Ads/images/164502716466670430.jpg', 'Ads/images/164502716410166404.jpg', 'Ads/images/164502716438758762.jpg', NULL, '2022-02-16 10:59:24', '2022-02-16 10:59:24'),
(9, 'Ads/images/164502718593015211.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-16 10:59:45', '2022-02-16 10:59:45'),
(11, 'Ads/images/164502723493259521.png', NULL, NULL, NULL, NULL, NULL, '2022-02-16 11:00:34', '2022-02-16 11:00:34'),
(12, 'Ads/images/164502726875847093.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-16 11:01:08', '2022-02-16 11:01:08'),
(13, 'Ads/images/164502751390764205.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-16 11:05:13', '2022-02-16 11:05:13'),
(14, 'Ads/images/164510050737636053.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-17 07:21:47', '2022-02-17 07:21:47'),
(15, 'Ads/images/164510053768736147.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-17 07:22:17', '2022-02-17 07:22:17'),
(16, 'Ads/images/164510276373134296.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-17 07:59:23', '2022-02-17 07:59:23'),
(17, 'Ads/images/164510288731759092.jpg', 'Ads/images/164510288739215982.jpg', 'Ads/images/164510288777605845.jpg', 'Ads/images/164510288779377730.jpg', 'Ads/images/164510288715296830.jpg', NULL, '2022-02-17 08:01:27', '2022-02-17 08:01:27'),
(19, 'Ads/images/164510429696950186.png', 'Ads/images/164510429615059137.jpg', 'Ads/images/164510429634329997.jpg', 'Ads/images/164510429620144912.jpg', 'Ads/images/164510429629861155.jpg', NULL, '2022-02-17 08:24:56', '2022-02-17 08:24:56'),
(20, 'Ads/images/164510523225432454.png', 'Ads/images/164510523264660818.jpg', 'Ads/images/164510523222497041.jpg', 'Ads/images/164510523210761222.jpg', 'Ads/images/164510523253538586.jpg', NULL, '2022-02-17 08:40:32', '2022-02-17 08:40:32');

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

--
-- Dumping data for table `ads_videos`
--

INSERT INTO `ads_videos` (`id`, `video`, `created_at`, `updated_at`) VALUES
(1, 'Ads/video/164493988240800740.mp4', '2022-02-15 10:44:42', '2022-02-15 10:44:42'),
(7, 'Ads/video/164502709849475078.mp4', '2022-02-16 10:58:18', '2022-02-16 10:58:18'),
(8, 'Ads/video/164502716452285832.mp4', '2022-02-16 10:59:24', '2022-02-16 10:59:24'),
(9, 'Ads/video/164502718513131964.mp4', '2022-02-16 10:59:45', '2022-02-16 10:59:45'),
(11, 'Ads/video/164502723492085636.mp4', '2022-02-16 11:00:34', '2022-02-16 11:00:34'),
(12, 'Ads/video/164502726838427742.mp4', '2022-02-16 11:01:08', '2022-02-16 11:01:08'),
(13, 'Ads/video/164502751358732879.mp4', '2022-02-16 11:05:13', '2022-02-16 11:05:13'),
(14, 'Ads/video/164510050723993474.mp4', '2022-02-17 07:21:47', '2022-02-17 07:21:47'),
(15, 'Ads/video/164510053760714453.mp4', '2022-02-17 07:22:17', '2022-02-17 07:22:17'),
(16, 'Ads/video/164510276351211747.mp4', '2022-02-17 07:59:23', '2022-02-17 07:59:23'),
(17, 'Ads/video/164510288798565071.mp4', '2022-02-17 08:01:27', '2022-02-17 08:01:27'),
(19, 'Ads/video/164510429668959019.mp4', '2022-02-17 08:24:56', '2022-02-17 08:24:56'),
(20, 'Ads/video/164510523283162982.mp4', '2022-02-17 08:40:32', '2022-02-17 08:40:32');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_type` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_address_id` bigint(20) UNSIGNED NOT NULL,
  `animal_type` int(11) NOT NULL,
  `no_of_animal` int(11) NOT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `vet_id` int(11) NOT NULL,
  `vet_commnet` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `appointment_type`, `user_id`, `appointment_address_id`, `animal_type`, `no_of_animal`, `breed`, `contact_name`, `contact_no`, `appointment_date`, `appointment_time`, `comment`, `status`, `created_at`, `updated_at`, `vet_id`, `vet_commnet`) VALUES
(1, NULL, 1, 7, 0, 345435, 'Magnam incididunt no', 'Kay Marks', 'Qui id aut impedit', '2008-01-29', '16:53:00', 'Repudiandae omnis vo', 1, '2022-02-16 11:16:26', '2022-02-16 11:16:26', 9, NULL),
(2, NULL, 1, 8, 2, 45435, 'Nisi quis perferendi', 'Macaulay Vance', 'Voluptate autem temp', '1994-12-06', '08:54:00', 'Reiciendis minus rep', 1, '2022-02-16 11:16:32', '2022-02-16 11:16:32', 6, NULL),
(3, NULL, 1, 9, 1, 3453, 'Unde perferendis in', 'Camilla Myers', 'Voluptatem veniam n', '2007-11-08', '05:09:00', 'Nisi ea iusto illum', 1, '2022-02-16 11:16:39', '2022-02-16 11:16:39', 9, NULL),
(4, NULL, 1, 10, 3, 435, 'Deleniti culpa quid', 'Rajah Carpenter', 'Quae sunt excepteur', '2006-03-06', '08:44:00', 'Dolor doloremque id', 1, '2022-02-16 11:16:46', '2022-02-16 11:16:46', 5, NULL),
(5, NULL, 1, 11, 4, 345, 'Quod praesentium eni', 'Zelda Mcneil', 'Maiores eum nostrud', '2002-07-16', '01:31:00', 'Qui molestiae et est', 1, '2022-02-16 11:16:53', '2022-02-16 11:16:53', 5, NULL),
(6, NULL, 1, 12, 2, 435, 'Commodi eum aut vel', 'Chiquita Lawson', 'Qui est non esse par', '2004-09-18', '18:04:00', 'Deserunt Nam quia qu', 1, '2022-02-16 11:17:38', '2022-02-16 11:17:38', 7, NULL),
(7, NULL, 1, 19, 1, 435435, 'Enim esse quia elige', 'Wallace Coleman', 'Dolorum nisi autem i', '1986-08-26', '14:17:00', 'Rem necessitatibus v', 1, '2022-02-17 08:39:46', '2022-02-17 08:39:46', 5, NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_line1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_address`
--

INSERT INTO `appointment_address` (`id`, `area`, `city`, `state`, `district`, `taluka`, `zipcode`, `created_at`, `updated_at`, `address_line1`, `address_line2`) VALUES
(7, 'Eius consequat Obca', 'delhi', 'Haryana', 'xyzs', 'xyzs', 18211, '2022-02-16 11:16:26', '2022-02-16 11:16:26', '66 Clarendon Street', 'Occaecat porro in qu'),
(8, 'Sed excepteur dolore', 'delhi', 'Tamil Nadu', 'abcs', 'lmno', 79418, '2022-02-16 11:16:32', '2022-02-16 11:16:32', '152 Milton Freeway', 'Blanditiis consectet'),
(9, 'Excepturi quia quasi', 'delhi', 'Haryana', 'abcs', 'lmno', 19514, '2022-02-16 11:16:39', '2022-02-16 11:16:39', '916 North Nobel Freeway', 'Ut dolores eum et ma'),
(10, 'Dolor adipisicing il', 'mumbai', 'Lakshadweep', 'lmno', 'xyzs', 98631, '2022-02-16 11:16:46', '2022-02-16 11:16:46', '64 South Fabien Court', 'Tempora veniam ipsa'),
(11, 'Iste culpa sapiente', 'delhi', 'Himachal Pradesh', 'xyzs', 'lmno', 79220, '2022-02-16 11:16:53', '2022-02-16 11:16:53', '266 Hague Parkway', 'Nihil sed quam Nam c'),
(12, 'Et molestias tenetur', 'delhi', 'Haryana', 'lmno', 'xyzs', 12898, '2022-02-16 11:17:38', '2022-02-16 11:17:38', '307 New Lane', 'Dolorum cupiditate m'),
(13, 'Rerum laboriosam vo', 'pune', 'Arunachal Pradesh', 'pune', 'pune', 433434, '2022-02-16 12:27:46', '2022-02-16 12:27:46', '569 Cowley Avenue', 'Accusamus quibusdam'),
(14, 'Labore possimus ut', 'goa', 'Manipur', 'pune', 'goa', 67, '2022-02-16 12:35:28', '2022-02-16 12:35:28', '950 Green Milton Drive', 'Quisquam qui assumen'),
(15, 'Anim magna soluta ve', 'goa', 'Uttarakhand', 'pune', 'goa', 24, '2022-02-16 12:35:39', '2022-02-16 12:35:39', '26 First Boulevard', 'Deserunt amet liber'),
(16, 'Non voluptatem illo', 'goa', 'Goa', 'pune', 'pune', 82, '2022-02-16 12:35:43', '2022-02-16 12:35:43', '800 Hague Court', 'Et omnis quo officia'),
(17, 'Eaque ut eu labore e', 'goa', 'Dadar and Nagar Haveli', 'pune', 'goa', 15, '2022-02-16 12:35:47', '2022-02-16 12:35:47', '38 South First Freeway', 'In sit error ex eius'),
(18, 'Neque dolorem commod', 'pune', 'Rajasthan', 'pune', 'pune', 7, '2022-02-16 12:35:58', '2022-02-16 12:35:58', '210 West Rocky Fabien Drive', 'Repellendus Sequi p'),
(19, 'Suscipit sunt et mag', 'delhi', 'Uttarakhand', 'lmno', 'lmno', 81537, '2022-02-17 08:39:46', '2022-02-17 08:39:46', '51 Cowley Avenue', 'Dolorum lorem volupt'),
(20, 'Aute voluptatem nihi', 'goa', 'West Bengal', 'pune', 'goa', 85, '2022-02-17 08:46:09', '2022-02-17 08:46:09', '755 South Oak Avenue', 'Porro ad architecto'),
(21, 'Ratione suscipit rec', 'goa', 'Uttarakhand', 'pune', 'goa', 70, '2022-02-17 08:55:25', '2022-02-17 08:55:25', '91 West Cowley Extension', 'Est earum velit illu'),
(22, 'Aut veritatis eius a', 'pune', 'Maharashtra', 'pune', 'pune', 81, '2022-02-17 08:57:22', '2022-02-17 08:57:22', '28 Clarendon Extension', 'Voluptates placeat'),
(23, 'Magnam saepe quasi v', 'pune', 'Manipur', 'pune', 'pune', 7, '2022-02-17 08:58:06', '2022-02-17 08:58:06', '93 Milton Boulevard', 'Sunt sunt velit id');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_transport`
--

INSERT INTO `book_transport` (`id`, `user_id`, `animal_type`, `no_of_animal`, `contact_name`, `contact_no`, `date_of_transport`, `from_address_id`, `to_address_id`, `status`, `created_at`, `updated_at`, `driver_id`, `breed`) VALUES
(1, 1, 2, 534545, 'Perferendis eum ex h', 'At assumenda ut ut n', '2016-05-31', 1, 1, 2, '2022-02-16 11:23:29', '2022-02-16 11:23:29', 0, 'Voluptas cupiditate'),
(2, 1, 0, 34545, 'In eiusmod cumque re', 'Corrupti tempor har', '1995-01-14', 2, 2, 0, '2022-02-16 11:23:43', '2022-02-16 11:23:43', 0, 'Temporibus modi labo'),
(3, 1, 0, 435, 'Lorem natus et repel', 'Commodo quisquam cum', '1983-09-14', 3, 3, 2, '2022-02-16 11:23:51', '2022-02-16 11:23:51', 1, 'Dolorem necessitatib'),
(4, 1, 1, 4354, 'Quod pariatur Qui l', 'Id sit perferendis', '1990-09-15', 4, 4, 1, '2022-02-16 11:24:00', '2022-02-16 11:24:00', 1, 'Eos praesentium volu'),
(5, 1, 2, 345, 'Blanditiis mollit qu', 'Ipsa dolor quibusda', '1983-07-27', 5, 5, 0, '2022-02-16 11:24:12', '2022-02-16 11:24:12', 0, 'Officia temporibus a'),
(6, 1, 3, 345, 'Esse voluptas non et', 'Placeat esse eum ra', '1980-05-29', 6, 6, 2, '2022-02-16 11:24:27', '2022-02-17 09:00:32', 0, 'Pariatur Sapiente c');

-- --------------------------------------------------------

--
-- Table structure for table `certify_animals`
--

CREATE TABLE `certify_animals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_type` int(11) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_address_id` bigint(20) UNSIGNED NOT NULL,
  `vet_id` bigint(20) UNSIGNED NOT NULL,
  `animal_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_animal` int(11) NOT NULL,
  `breed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `certified_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `certify_animals`
--

INSERT INTO `certify_animals` (`id`, `appointment_type`, `user_id`, `appointment_address_id`, `vet_id`, `animal_type`, `no_of_animal`, `breed`, `contact_name`, `contact_no`, `appointment_date`, `appointment_time`, `comment`, `status`, `certified_status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 1, 13, 8, 'Buffalo', 34, 'Laboriosam aliquam', 'Jeanette Summers', '43543543', '2022-02-20', '22:29:00', '343434', 1, 0, '2022-02-16 12:27:46', '2022-02-17 08:57:38', '2022-02-17 08:57:38'),
(2, NULL, 1, 14, 5, 'Buffalo', 7, 'Est obcaecati quam e', 'Indigo Lara', '+1 (713) 646-4044', '2008-04-04', '16:28:00', 'Dolor quis modi laud', 1, 1, '2022-02-16 12:35:29', '2022-02-17 08:57:46', '2022-02-17 08:57:46'),
(3, NULL, 1, 15, 8, 'Sheep', 90, 'Repudiandae iste rep', 'Sharon Briggs', '+1 (636) 594-8793', '1997-11-27', '09:15:00', 'Voluptatum doloribus', 1, 0, '2022-02-16 12:35:39', '2022-02-17 08:57:48', '2022-02-17 08:57:48'),
(4, NULL, 1, 16, 8, 'Sheep', 80, 'Deserunt quasi et in', 'Bernard Jimenez', '+1 (952) 743-1182', '1990-09-27', '15:54:00', 'Soluta proident vel', 1, 1, '2022-02-16 12:35:43', '2022-02-17 08:57:51', '2022-02-17 08:57:51'),
(5, NULL, 1, 17, 7, 'Goat', 94, 'In magni eum non est', 'Adele Mitchell', '+1 (731) 927-7816', '1988-08-22', '05:55:00', 'Labore elit officia', 1, 1, '2022-02-16 12:35:47', '2022-02-17 08:57:54', '2022-02-17 08:57:54'),
(6, NULL, 1, 18, 9, 'Bull', 36, 'Proident consequatu', 'Adena Snider', '+1 (143) 957-3509', '1986-07-14', '01:16:00', 'Laboriosam aut nost', 1, 0, '2022-02-16 12:35:58', '2022-02-17 08:57:57', '2022-02-17 08:57:57'),
(7, NULL, 1, 20, 5, 'Cow', 92, 'Molestiae dolores co', 'Marny Sharp', '+1 (392) 758-5799', '1973-08-11', '00:57:00', 'Ullamco nulla ut exc', 1, 1, '2022-02-17 08:46:10', '2022-02-17 08:57:59', '2022-02-17 08:57:59'),
(8, NULL, 1, 21, 5, 'Buffalo', 87, 'Aute facere in eiusm', 'Dahlia Cochran', '+1 (575) 735-9181', '2018-09-26', '19:30:00', 'Et odit reiciendis s', 1, 0, '2022-02-17 08:55:25', '2022-02-17 08:58:02', '2022-02-17 08:58:02'),
(9, NULL, 1, 22, 7, 'Cow', 44, 'Totam repudiandae re', 'Kermit Coleman', '+1 (363) 187-8235', '1988-04-18', '09:33:00', 'Nulla id lorem maxi', 1, 1, '2022-02-17 08:57:22', '2022-02-17 08:58:24', NULL),
(10, NULL, 1, 23, 11, 'Cow', 23, 'Veniam sint quis qu', 'Hammett William', '+1 (799) 225-9835', '2010-12-23', '17:31:00', 'Aperiam culpa ipsam', 1, 0, '2022-02-17 08:58:06', '2022-02-17 08:58:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education_videos`
--

CREATE TABLE `education_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_videos`
--

INSERT INTO `education_videos` (`id`, `user_id`, `title`, `url`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Quia tenetur omnis i', 'GwunZ5sH2P8', '2022-02-17 09:23:07', '2022-02-17 09:21:54', '2022-02-17 09:23:07'),
(2, 1, 'wrwer', 'GwunZ5sH2P8', NULL, '2022-02-17 09:22:12', '2022-02-17 09:22:12'),
(3, 1, 'werer', 'GwunZ5sH2P8', NULL, '2022-02-17 09:22:19', '2022-02-17 09:22:19'),
(4, 1, 'rewr', 'GwunZ5sH2P8', NULL, '2022-02-17 09:22:24', '2022-02-17 09:22:24'),
(5, 1, '24213e', 'GwunZ5sH2P8', NULL, '2022-02-17 09:22:30', '2022-02-17 09:22:30'),
(6, 1, 'qwewqe', 'GwunZ5sH2P8', '2022-02-17 09:22:50', '2022-02-17 09:22:39', '2022-02-17 09:22:50');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `from_address`
--

INSERT INTO `from_address` (`id`, `address_line1`, `address_line2`, `area`, `city`, `state`, `district`, `taluka`, `zipcode`, `created_at`, `updated_at`, `appointment_time`, `appointment_date`) VALUES
(1, '42 Nobel Extension', 'Fugiat sit excepteur', 'In consectetur et ip', 'Mumbai', 'Arunachal Pradesh', 'abcd', 'Taluka AND', 34651, '2022-02-16 11:23:29', '2022-02-16 11:23:29', '03:10:00', '1994-09-29'),
(2, '69 North Clarendon Street', 'Omnis ex illo a lore', 'Sunt necessitatibus', 'delhi', 'Odisha', 'xyz', 'Taluka AND', 49769, '2022-02-16 11:23:43', '2022-02-16 11:23:43', '13:49:00', '1992-06-03'),
(3, '27 First Court', 'Ab veniam non offic', 'Est obcaecati unde u', 'chandigarh', 'Madhya Pradesh', 'xyz', 'Taluka AND', 34940, '2022-02-16 11:23:51', '2022-02-16 11:23:51', '12:35:00', '2005-01-21'),
(4, '79 Old Drive', 'Saepe anim corporis', 'Natus cumque ut pari', 'chandigarh', 'Haryana', 'xyz', 'Taluka AND', 91671, '2022-02-16 11:24:00', '2022-02-16 11:24:00', '10:28:00', '2013-11-20'),
(5, '98 First Drive', 'Qui corporis dicta e', 'Aut velit eu et aut', 'chandigarh', 'Lakshadweep', 'xyz', 'Taluka AND', 45659, '2022-02-16 11:24:12', '2022-02-16 11:24:12', '12:36:00', '2020-04-15'),
(6, '42 East First Court', 'Est pariatur Minus', 'Accusamus asperiores', 'Mumbai', 'Kerala', 'lmno', 'Taluka AND', 85273, '2022-02-16 11:24:27', '2022-02-16 11:24:27', '23:57:00', '2009-09-03'),
(7, '63 South White First Lane', 'Vitae dignissimos co', 'Sunt enim laborum Q', 'chandigarh', 'Maharashtra', 'abcd', 'Taluka AND', 38941, '2022-02-17 09:00:10', '2022-02-17 09:00:10', '03:44:00', '1998-12-06');

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
(21, '2022_02_10_121742_add_owner_status_to_users_table', 1),
(22, '2022_02_10_151032_add_soft_delete_to_users_table', 1),
(23, '2022_02_11_131820_add_deleted_at_to_vets_table', 2),
(24, '2022_02_11_130307_update_column_nullable_ads', 3),
(25, '2022_02_11_140516_add_addresline_to_ads_adress', 3),
(26, '2022_02_11_140604_add_cerified_reg_to_ads', 3),
(27, '2022_02_11_142832_update_column_nullable_ads_address', 3),
(28, '2022_02_11_152953_update_column_type_ads', 3),
(29, '2022_02_14_112505_add_vet_id_to_appointments', 3),
(30, '2022_02_14_125217_add_address_to_appointment_address', 3),
(31, '2022_02_15_044257_add_appoint_to_to_address_table', 3),
(32, '2022_02_15_044446_add_appoint_to_from_address_table', 3),
(33, '2022_02_15_045824_add_driver_id_to_book_transport_table', 3),
(34, '2022_02_15_082137_add_login_status_to_users', 3),
(35, '2022_02_15_160439_update_column_image_nullable_to_users', 4),
(36, '2022_02_15_151517_add_soft_delete_to_transports_table', 5),
(37, '2022_02_15_160649_create_education_videos_table', 5),
(38, '2022_02_15_160706_create_certify_animals_table', 5),
(39, '2022_02_15_175507_add_state_to_ads_adress', 5),
(40, '2022_02_16_075346_create_newsupdates_table', 5),
(41, '2022_02_16_133552_add_soft_delete_to_certify_animals_table', 6),
(42, '2022_02_16_162737_add_soft_delete_to_ads_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `newsupdates`
--

CREATE TABLE `newsupdates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `topic` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `newsupdates`
--

INSERT INTO `newsupdates` (`id`, `user_id`, `topic`, `detail`, `photo`, `status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Voluptas veritatis t', 'Soluta incididunt iu', 'NewsUpdate/images/164503530742302030.png', NULL, NULL, '2022-02-16 13:15:07', '2022-02-16 13:15:07'),
(2, 1, 'Quisquam nemo ut ull', 'Laborum Aut necessi', 'NewsUpdate/images/164510676347548231.jpg', NULL, NULL, '2022-02-17 09:06:03', '2022-02-17 09:06:03'),
(3, 1, 'Eum consectetur ips', 'Accusamus enim cum d', 'NewsUpdate/images/164510678668721454.jpg', NULL, NULL, '2022-02-17 09:06:26', '2022-02-17 09:06:26'),
(4, 1, 'Rerum fugiat et atq', 'Ex itaque sit obcae', 'NewsUpdate/images/164510681375048002.jpg', NULL, '2022-02-17 09:08:18', '2022-02-17 09:06:53', '2022-02-17 09:08:18'),
(5, 1, 'Quia sint qui dolor', 'Cum libero et impedi', 'NewsUpdate/images/164510684874695830.jpg', NULL, '2022-02-17 09:08:14', '2022-02-17 09:07:28', '2022-02-17 09:08:14'),
(6, 1, 'Dolore laboriosam i', 'Et id quae dignissi', 'NewsUpdate/images/164510688369448122.jpg', NULL, NULL, '2022-02-17 09:08:03', '2022-02-17 09:08:03'),
(7, 1, 'Laudantium vero ea', 'Sed pariatur Dolore', 'NewsUpdate/images/164510765221470523.jpg', NULL, NULL, '2022-02-17 09:20:52', '2022-02-17 09:20:52'),
(8, 1, 'Quod laboriosam par', 'Corporis enim obcaec', 'NewsUpdate/images/164510766167947125.jpg', NULL, NULL, '2022-02-17 09:21:01', '2022-02-17 09:21:01');

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
(1, 12, 'Ria Cain', 1, '2022-02-16 10:38:21', '2022-02-16 10:38:21'),
(2, 13, 'Keely Abbott', 1, '2022-02-16 10:38:42', '2022-02-16 10:38:42'),
(3, 14, 'Zahir Ray', 1, '2022-02-16 10:39:59', '2022-02-16 10:39:59'),
(4, 15, 'Colt Trujillo', 1, '2022-02-16 10:40:23', '2022-02-16 10:40:23'),
(5, 16, 'Colleen Little', 1, '2022-02-16 10:40:41', '2022-02-16 10:40:41'),
(6, 17, 'Helen Velasquez', 1, '2022-02-16 10:40:51', '2022-02-16 10:40:51'),
(7, 18, 'Suki Snider', 1, '2022-02-16 10:42:02', '2022-02-16 10:42:02'),
(8, 29, 'Gary Mann', 1, '2022-02-17 07:13:33', '2022-02-17 07:13:33'),
(9, 30, 'Lucian Summers', 1, '2022-02-17 07:15:11', '2022-02-17 07:15:11'),
(10, 31, 'Todd Christensen', 1, '2022-02-17 07:16:01', '2022-02-17 07:16:01'),
(11, 32, 'Scarlet Martin', 1, '2022-02-17 07:53:34', '2022-02-17 07:53:34');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `appointment_time` time DEFAULT NULL,
  `appointment_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `to_address`
--

INSERT INTO `to_address` (`id`, `address_line1`, `address_line2`, `city`, `area`, `state`, `district`, `taluka`, `zipcode`, `created_at`, `updated_at`, `appointment_time`, `appointment_date`) VALUES
(1, '28 Cowley Drive', 'Tempor qui ex asperi', 'Mumbai', 'Ullamco ipsum amet', 'Mizoram', 'xyz', 'Taluka AND', 17070, '2022-02-16 11:23:29', '2022-02-16 11:23:29', '22:54:00', '1993-11-27'),
(2, '52 West Clarendon Road', 'Eligendi recusandae', 'Mumbai', 'Placeat distinctio', 'Dadar and Nagar Haveli', 'lmno', 'Taluka AND', 18508, '2022-02-16 11:23:43', '2022-02-16 11:23:43', '19:26:00', '2017-09-04'),
(3, '133 Cowley Road', 'Magni molestiae esse', 'chandigarh', 'Voluptate cum maxime', 'Tamil Nadu', 'xyz', 'Taluka AND', 83470, '2022-02-16 11:23:51', '2022-02-16 11:23:51', '04:51:00', '2019-05-03'),
(4, '644 First Freeway', 'Nihil nulla aut sunt', 'chandigarh', 'Odio non id esse fa', 'Manipur', 'xyz', 'Taluka AND', 59912, '2022-02-16 11:24:00', '2022-02-16 11:24:00', '11:54:00', '1980-06-19'),
(5, '41 South Second Drive', 'Minus accusamus et u', 'delhi', 'Commodo iste aliquip', 'Telangana', 'abc', 'Taluka AND', 79438, '2022-02-16 11:24:12', '2022-02-16 11:24:12', '06:40:00', '1994-08-28'),
(6, '80 East Hague Extension', 'Aut porro dolore mag', 'Mumbai', 'Debitis nihil quos r', 'Daman and Diu', 'xyz', 'Taluka AND', 52310, '2022-02-16 11:24:27', '2022-02-16 11:24:27', '01:29:00', '1977-01-21'),
(7, '633 North New Drive', 'Earum quam enim est', 'delhi', 'Non aut consectetur', 'Karnataka', 'lmno', 'Taluka AND', 72200, '2022-02-17 09:00:10', '2022-02-17 09:00:10', '04:49:00', '2020-10-27');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transports`
--

INSERT INTO `transports` (`id`, `user_id`, `vehicle_type`, `vehicle_make_model`, `license_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 11, 'bike', 'ybr', '998223', '2022-02-12 02:33:08', '2022-02-12 03:56:39', NULL),
(4, 24, 'Placeat aliqua Ad', 'Rerum magna corrupti', 'Nobis itaque dolorum', '2022-02-16 11:10:35', '2022-02-16 11:10:35', NULL),
(5, 25, 'Placeat aliqua Ad', 'Rerum magna corrupti', 'Nobis itaque dolorum', '2022-02-16 11:10:36', '2022-02-16 11:10:36', NULL),
(6, 26, 'A quisquam necessita', 'Adipisicing consecte', 'Fugiat sit fugiat', '2022-02-16 11:10:51', '2022-02-16 11:10:51', NULL),
(7, 27, 'Accusamus sed labori', 'Occaecat eiusmod vol', 'Quaerat quas rerum f', '2022-02-16 11:11:01', '2022-02-16 11:11:01', NULL),
(8, 28, 'Ut exercitation reru', 'Eius molestiae non d', 'Molestiae impedit n', '2022-02-16 11:11:12', '2022-02-16 11:11:12', NULL),
(9, 34, 'Et possimus animi', 'Perferendis eveniet', 'Sed et sit occaecat', '2022-02-17 08:33:10', '2022-02-17 08:33:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_role` enum('admin','seller','buyer','vet','transport','expert') COLLATE utf8mb4_unicode_ci NOT NULL,
  `membership_type` int(11) DEFAULT NULL,
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
  `deleted_at` timestamp NULL DEFAULT NULL,
  `login_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `middle_name`, `last_name`, `user_role`, `membership_type`, `contact_no`, `email`, `password`, `image`, `address_id`, `document_id`, `email_otp`, `mob_otp`, `status`, `remember_token`, `created_at`, `updated_at`, `owner_status`, `deleted_at`, `login_status`) VALUES
(1, 'Hitman', 'Codename', '47', 'admin', 1, '0990909090', 'hamza.bliynk@gmail.com', '$2y$10$DanzI6WC31vkA4diQYjKgOdBlKemyIyL8PofYKRktX4JGya.mkwGq', '/uploads/1/profile/1645101300353052375004.jpg', 17, NULL, 185791, NULL, 1, NULL, NULL, '2022-02-17 09:39:21', NULL, NULL, 1),
(5, 'Charles', 'Desiree Martinez', 'Tillman', 'vet', 1, 'Placeat qui irure o', 'hamza.bliynk@gmail.com', 'Pa$$w0rd!', '/vets//profile/1644582768680590769821.jfif', 16, 5, NULL, NULL, 1, NULL, '2022-02-11 07:32:48', '2022-02-11 08:48:39', NULL, '2022-02-11 08:48:39', 1),
(6, 'Amery', 'Eleanor Luna', 'Kinney', 'vet', NULL, 'Voluptatibus quibusd', 'nuvog@mailinator.com', 'Pa$$w0rd!', '/vets//profile/1644582793794719917826.jfif', 17, 6, NULL, NULL, 1, NULL, '2022-02-11 07:33:13', '2022-02-11 08:49:54', NULL, '2022-02-11 08:49:54', NULL),
(7, 'Stuart', 'Denise Brooks', 'Vance', 'vet', NULL, 'Voluptatem autem eos', 'byfomywaq@mailinator.com', 'Pa$$w0rd!', '/vets//profile/1644587455687852938376.jpeg', 18, 7, NULL, NULL, 1, NULL, '2022-02-11 08:50:55', '2022-02-11 08:51:03', NULL, '2022-02-11 08:51:03', NULL),
(8, 'Hitman', 'Ur', 'Rehman', 'vet', NULL, 'Provident perferend', 'muneeburr451@gmail.com', '$2y$10$CtiRPCX49fVBJ8Ee06v2beZ9dZsOW.ZDsWK9S9unaB0.F3ZYB1jiK', '/uploads/8/profile/164459532297554282167.png', 19, 8, NULL, NULL, 1, NULL, '2022-02-11 09:02:35', '2022-02-17 08:45:01', NULL, NULL, NULL),
(11, 'muneeb', 'rehman', 'rehman', 'transport', NULL, '03049167411', 'muneeburr451@gmail.com', '$2y$10$O7ogmqqtdr4s1RCH8gH64ekC0qTFuHRx6VsSqvQOLLEZ/KIeQH7.K', '/transport//profile/1644651188138586586304.png', 25, 14, NULL, NULL, 1, NULL, '2022-02-12 02:33:08', '2022-02-17 08:45:33', NULL, '2022-02-17 08:45:33', NULL),
(12, 'Aladdin Stokes', NULL, NULL, 'seller', 0, 'Neque est eos velit', 'wuzoce@mailinator.com', '$2y$10$KaCOywuYaRGggYS889YfLenlNRfMG4JboFugr4TK04ZkoilwQi76C', '/uploads/12/profile/1645025901983992902355.jpg', 30, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:38:21', '2022-02-16 10:38:21', 'agent', NULL, 0),
(13, 'Iola Bruce', NULL, NULL, 'seller', 1, 'Quibusdam sapiente f', 'xivalykoc@mailinator.com', '$2y$10$U8zlaCjzF2/kgnsgdG/TEu4SzkOiVMQwGZXoi.73y.kBVSy4QZbqC', '/uploads/13/profile/1645025922737768672091.jpg', 31, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:38:42', '2022-02-16 10:38:42', 'agent', NULL, 0),
(14, 'Theodore Douglas', NULL, NULL, 'seller', 0, 'Sunt sed quisquam do', 'dulokyge@mailinator.com', '$2y$10$1zRaanC.Cg2CmMyZAmoo7eCYY8gn5eDs6RaKvdAOhjSZth6tMkKdK', '/uploads/14/profile/1645025999489806675858.jpg', 32, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:39:59', '2022-02-17 07:15:45', 'owner', '2022-02-17 07:15:45', 0),
(15, 'Diana Velasquez', NULL, NULL, 'seller', 1, 'Amet earum non cons', 'veke@mailinator.com', '$2y$10$N1oQ/du1KpsUtL5/.Ew4V.7EMZ5uwW.h6ess6bsb1mCI7CPsQVKxy', '/uploads/15/profile/1645026023530401364346.jpg', 33, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:40:23', '2022-02-16 10:40:23', 'agent', NULL, 0),
(16, 'Phyllis Preston', NULL, NULL, 'seller', 0, 'Animi adipisicing i', 'fyrowigeq@mailinator.com', '$2y$10$ksb3Ya1//4y/RNhvsJvcBOhZTXURlQJdpZrOkBIdtep0Z..RxVR4G', '/uploads/16/profile/1645026041167733698802.jpg', 34, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:40:41', '2022-02-16 12:19:34', 'agent', '2022-02-16 12:19:34', 0),
(17, 'Hilda Torres', NULL, NULL, 'seller', 0, 'Quaerat optio moles', 'pabenubinu@mailinator.com', '$2y$10$d8NGDTeU2rL9IKq4I2iLIeypEtbFKvOW48PH0U1eG5YJ/P4MKJvfG', '/uploads/17/profile/1645026051932625473791.webp', 35, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:40:51', '2022-02-16 10:40:51', 'agent', NULL, 0),
(18, 'Jared Sutton', NULL, NULL, 'seller', 1, 'Et eveniet excepteu', 'ryluv@mailinator.com', '$2y$10$AU2Zh.NztSmBh/e.vL8XZeRc7ZsCdNu3ymR7G0e.v893lk0tPt4ni', '/uploads/18/profile/1645026122257277323224.png', 36, NULL, NULL, NULL, 0, NULL, '2022-02-16 10:42:02', '2022-02-16 10:42:02', 'agent', NULL, 0),
(19, 'Jessica', 'Ryder Leonard', 'Schneider', 'vet', NULL, 'Sint eum amet recus', 'fyruruh@mailinator.com', '$2y$10$OMKw.7ABAb6S57YxXJ3K..Bb54oGUdU1LJ03qEl0yd1zxMpk/XEJm', '/vets//profile/164502762726747786119.jpg', 37, 17, NULL, NULL, 1, NULL, '2022-02-16 11:07:07', '2022-02-16 11:07:07', NULL, NULL, NULL),
(20, 'Ray', 'Lareina Burnett', 'Graves', 'vet', NULL, 'Eius ut assumenda au', 'bulini@mailinator.com', '$2y$10$CUjKUuOxuoAc5aosB4bE1uLN7Oebkf6biYFp.yl7gJu6hrC55Q2iC', '/vets//profile/1645027690850295947197.jpg', 38, 18, NULL, NULL, 1, NULL, '2022-02-16 11:08:10', '2022-02-16 11:08:10', NULL, NULL, NULL),
(21, 'Madeson', 'Katell Atkins', 'Andrews', 'vet', NULL, 'Ratione voluptatem', 'rinit@mailinator.com', '$2y$10$Y4u4Df8lRDOWJ3q2Qx4IGed6NdxCwtWev2iIgiz/Jk6UzpIjbJHru', '/vets//profile/1645027719564707005394.jpg', 39, 19, NULL, NULL, 1, NULL, '2022-02-16 11:08:39', '2022-02-17 08:44:45', NULL, NULL, NULL),
(22, 'Abel', 'Karyn Vance', 'Dennis', 'vet', NULL, 'Non labore cupidatat', 'dibado@mailinator.com', '$2y$10$mlkxS6nHTpW/nxhcDZjl/Oyla3hP/xUTr1U9gfKD0n6WObk.IW.Ba', '/vets//profile/1645027739978955623336.jpg', 40, 20, NULL, NULL, 1, NULL, '2022-02-16 11:08:59', '2022-02-16 11:08:59', NULL, NULL, NULL),
(23, 'Tanisha', 'Camilla Hughes', 'Shelton', 'vet', NULL, 'Sed atque reprehende', 'jomuwin@mailinator.com', '$2y$10$XTaCZtf3dWkCptiz97CuYe0LdpHEBDrh3kPhRt8/1SRN6k3NqhLxK', '/vets//profile/1645027759386356927721.jpg', 41, 21, NULL, NULL, 1, NULL, '2022-02-16 11:09:19', '2022-02-17 08:41:21', NULL, '2022-02-17 08:41:21', NULL),
(24, 'Hitmn', 'Gareth Combs', 'Robertson', 'transport', NULL, 'Ut in fugiat quis qu', 'wodulivacy@mailinator.com', '$2y$10$7u/7Kpocuuvjwb1EDPMdxuQohj3xKt5l/6hdWowiN7nwuCeKlRIAO', '/transport//profile/1645027835737995105564.jpg', 42, 22, NULL, NULL, 1, NULL, '2022-02-16 11:10:35', '2022-02-17 08:45:49', NULL, NULL, NULL),
(25, 'Urielle', 'Gareth Combs', 'Robertson', 'transport', NULL, 'Ut in fugiat quis qu', 'wodulivacy@mailinator.com', '$2y$10$FDsVKyE1cxj96isth1ivoOHO63B0C85zUIdyEoW5FGMwqdwX20nIW', '/transport//profile/1645027836510301584832.jpg', 43, 23, NULL, NULL, 1, NULL, '2022-02-16 11:10:36', '2022-02-16 11:10:36', NULL, NULL, NULL),
(26, 'Mark', 'Xenos Bray', 'Jacobson', 'transport', NULL, 'Exercitationem volup', 'wehowiwyra@mailinator.com', '$2y$10$Rcd4SmcZB6yx8zaJQ.8a1OgwbDwxK5rqCABjfODQlDWFkg8A.OsMG', '/transport//profile/1645027851792100629658.jpg', 44, 24, NULL, NULL, 1, NULL, '2022-02-16 11:10:51', '2022-02-16 11:10:51', NULL, NULL, NULL),
(27, 'Althea', 'Amir Barton', 'Mendez', 'transport', NULL, 'Aliquam laboriosam', 'qowuzegogy@mailinator.com', '$2y$10$iCXMq.OidltbSTEaCPcS5..Oh7LI.nXqcfBL3iexI4oqVJzVbGTZy', '/transport//profile/1645027861787491836996.webp', 45, 25, NULL, NULL, 1, NULL, '2022-02-16 11:11:01', '2022-02-16 11:11:01', NULL, NULL, NULL),
(28, 'Wilma', 'Anthony Gillespie', 'Ratliff', 'transport', NULL, 'Quia voluptates mole', 'caqeq@mailinator.com', '$2y$10$i76VDdi3A8fsUFNRuzxxY.DL4pxQSmK7qnVUa3DascheeCfPmwDHS', '/transport//profile/1645027872304381215902.jpg', 46, 26, NULL, NULL, 1, NULL, '2022-02-16 11:11:12', '2022-02-16 11:11:12', NULL, NULL, NULL),
(29, 'Geraldine Decker', NULL, NULL, 'seller', 1, 'Sit qui cupiditate', 'peqocequz@mailinator.com', '$2y$10$.x.7ztQ6wPdgStZFA6u6Aevy7DO9lZ4TH21XpNUMGsrShHKTmmbN6', '/uploads/29/profile/1645100013917772878288.jpg', 47, NULL, NULL, NULL, 0, NULL, '2022-02-17 07:13:33', '2022-02-17 07:15:38', 'agent', '2022-02-17 07:15:38', 0),
(30, 'Kylee Chan', NULL, NULL, 'seller', 0, 'Fugiat eum ut amet', 'leni@mailinator.com', '$2y$10$epETn6a8Z8asRltkLyG17O1QJXBHPn06zB2Vnv2Y.WCXTmLxk0euC', '/uploads/30/profile/1645100111948406751778.jpg', 48, NULL, NULL, NULL, 0, NULL, '2022-02-17 07:15:11', '2022-02-17 07:15:34', 'owner', '2022-02-17 07:15:34', 0),
(31, 'Hitman', NULL, NULL, 'seller', 0, 'Reiciendis quam qui', 'dolucoxux@mailinator.com', '$2y$10$I1Wrlf945c6I1usoS89XIO2KntbG8gnrUxDyc4UgCXaxPipz6KGVC', '/uploads/31/profile/1645100224132935720395.jpg', 49, NULL, NULL, NULL, 0, NULL, '2022-02-17 07:16:01', '2022-02-17 07:17:04', 'owner', NULL, 0),
(32, 'Sasha Benjamin', NULL, NULL, 'seller', 0, 'Quam sint qui dolor', 'gyfasyx@mailinator.com', '$2y$10$2fkyGqasRt5JUomv91xm5Op2L4F86iRnszmO2spdlWs1gta.0VJA.', '/uploads/32/profile/1645102414683386130741.jpg', 57, NULL, NULL, NULL, 0, NULL, '2022-02-17 07:53:34', '2022-02-17 07:53:34', 'owner', NULL, 0),
(33, 'Owen', 'Isadora Berger', 'Sandoval', 'vet', NULL, 'Cumque ea blanditiis', 'hedugyva@mailinator.com', '$2y$10$pyAjYZtqAmtPnM9LmjDOh.Ej3R3qGJZQICMJm9e8aTT2y0vI1NBFS', '/vets//profile/1645104652960078254040.png', 58, 27, NULL, NULL, 1, NULL, '2022-02-17 08:30:52', '2022-02-17 08:30:52', NULL, NULL, NULL),
(34, 'Chester', 'Salvador Shaffer', 'Key', 'transport', NULL, 'Corrupti eum non pa', 'pobi@mailinator.com', '$2y$10$zgyTWFCZ78cqTCll2NjBtesK8bmmAoJNQEI5WkvdmZMfUsbQATQFS', '/transport//profile/1645104790356548036923.jpg', 59, 28, NULL, NULL, 1, NULL, '2022-02-17 08:33:10', '2022-02-17 08:33:10', NULL, NULL, NULL);

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
(16, '797 East Oak Parkway', 'Dolore in cillum nos', 'Sint non et magni iu', 'Pune', 'Rajasthan', 'Pune', 'Pune', 22, '2022-02-11 07:32:48', '2022-02-11 07:32:48'),
(17, 'something', 'something', 'something', 'Pune', 'Himachal Pradesh', 'Pune', 'Pune', 3434, '2022-02-11 07:33:13', '2022-02-17 07:36:16'),
(18, '81 Old Court', 'Eligendi in ullamco', 'Culpa quia amet do', 'Pune', 'Nagaland', 'Pune', 'Pune', 90, '2022-02-11 08:50:55', '2022-02-11 08:50:55'),
(19, 'johar town N block', 'Enim recusandae Ali', 'Abdalian society', 'Pune', 'Andhra Pradesh', 'Pune', 'Pune', 50003, '2022-02-11 09:02:35', '2022-02-11 11:02:02'),
(25, 'house number 212,karam shah wali,mailsi,vehari', 'jinah boys hostel,dew samajh road,lower mall lahore.', 'johar town', 'Pune', 'Jharkhand', 'Pune', 'Pune', 54000, '2022-02-12 02:33:08', '2022-02-12 02:33:08'),
(26, 'house number 212,karam shah wali,mailsi,vehari', 'jinah boys hostel,dew samajh road,lower mall lahore.', 'johar town', 'Pune', 'Jharkhand', 'Pune', 'Pune', 54000, '2022-02-12 03:29:06', '2022-02-12 03:29:06'),
(27, 'house number 212,karam shah wali,mailsi,vehari', 'jinah boys hostel,dew samajh road,lower mall lahore.', 'johar town', 'Pune', 'Jharkhand', 'Pune', 'Pune', 54000, '2022-02-12 03:32:21', '2022-02-12 03:32:21'),
(28, '569 Cowley Avenue', 'Accusamus quibusdam', 'Ut eos ipsa molest', 'Pune', 'Tripura', 'Pune', 'Pune', 76, '2022-02-16 10:36:27', '2022-02-16 10:36:27'),
(29, '28 South Clarendon Freeway', 'Duis ducimus quod v', 'Anim consectetur nis', 'Pune', 'Arunachal Pradesh', 'Pune', 'Pune', 66, '2022-02-16 10:36:53', '2022-02-16 10:36:53'),
(30, '28 South Clarendon Freeway', 'Duis ducimus quod v', 'Anim consectetur nis', 'Pune', 'Arunachal Pradesh', 'Pune', 'Pune', 66, '2022-02-16 10:38:21', '2022-02-16 10:38:21'),
(31, '625 Rocky Old Lane', 'Obcaecati architecto', 'Ex nulla modi facili', 'Pune', 'Meghalaya', 'Pune', 'Pune', 21, '2022-02-16 10:38:42', '2022-02-16 10:38:42'),
(32, '28 First Court', 'Dolor accusantium in', 'Explicabo Voluptate', 'Pune', 'Dadar and Nagar Haveli', 'Pune', 'Pune', 41, '2022-02-16 10:39:59', '2022-02-16 10:39:59'),
(33, '86 New Boulevard', 'Iure accusantium vel', 'Maxime lorem tempore', 'Pune', 'West Bengal', 'Pune', 'Pune', 9, '2022-02-16 10:40:23', '2022-02-16 10:40:23'),
(34, '488 North Nobel Freeway', 'Ducimus inventore e', 'Et anim adipisicing', 'Pune', 'Uttar Pradesh', 'Pune', 'Pune', 59, '2022-02-16 10:40:41', '2022-02-16 10:40:41'),
(35, '66 Clarendon Parkway', 'Anim excepturi simil', 'Similique assumenda', 'Pune', 'Madhya Pradesh', 'Pune', 'Pune', 61, '2022-02-16 10:40:51', '2022-02-16 10:40:51'),
(36, '90 Green Clarendon Parkway', 'Adipisci nulla dolor', 'Autem libero velit i', 'Pune', 'Bihar', 'Pune', 'Pune', 71, '2022-02-16 10:42:02', '2022-02-16 10:42:02'),
(37, '249 Nobel Boulevard', 'Nisi nesciunt nemo', 'Cumque et culpa id e', 'Pune', 'Meghalaya', 'Pune', 'Pune', 38, '2022-02-16 11:07:07', '2022-02-16 11:07:07'),
(38, '56 South Oak Parkway', 'Non ut velit dolore', 'Facilis officia quo', 'Pune', 'Andaman and Nicobar Islands', 'Pune', 'Pune', 56, '2022-02-16 11:08:10', '2022-02-16 11:08:10'),
(39, '67 North First Road', 'Dolorem odit veniam', 'Fuga Dignissimos it', 'Pune', 'Gujarat', 'Pune', 'Pune', 69, '2022-02-16 11:08:39', '2022-02-17 08:44:45'),
(40, '36 Nobel Court', 'Deleniti dolore cons', 'Perspiciatis repell', 'Pune', 'Andaman and Nicobar Islands', 'Pune', 'Pune', 24, '2022-02-16 11:08:58', '2022-02-16 11:08:58'),
(41, '409 North New Lane', 'Ea harum ex ut aliqu', 'Sint deleniti et vel', 'Pune', 'Madhya Pradesh', 'Pune', 'Pune', 55, '2022-02-16 11:09:19', '2022-02-16 11:09:19'),
(42, '40 Nobel Court', 'Culpa impedit conse', 'Rerum laboriosam vo', 'Pune', 'Uttar Pradesh', 'Pune', 'Pune', 10940, '2022-02-16 11:10:35', '2022-02-16 11:10:35'),
(43, '40 Nobel Court', 'Culpa impedit conse', 'Rerum laboriosam vo', 'Pune', 'Uttar Pradesh', 'Pune', 'Pune', 10940, '2022-02-16 11:10:36', '2022-02-16 11:10:36'),
(44, '713 West Second Lane', 'Cumque minim qui ven', 'Veritatis ea tenetur', 'Pune', 'Tripura', 'Pune', 'Pune', 17084, '2022-02-16 11:10:51', '2022-02-16 11:10:51'),
(45, '805 West Hague Street', 'In ea do nobis aliqu', 'Saepe deserunt moles', 'Pune', 'Rajasthan', 'Pune', 'Pune', 90447, '2022-02-16 11:11:01', '2022-02-16 11:11:01'),
(46, '37 Fabien Freeway', 'Laborum aut nulla fu', 'Voluptas qui aliquam', 'Pune', 'Maharashtra', 'Pune', 'Pune', 79826, '2022-02-16 11:11:12', '2022-02-16 11:11:12'),
(47, '60 White Second Avenue', 'Voluptates odit dolo', 'Dolorum doloremque s', 'Pune', 'Andaman and Nicobar Islands', 'Pune', 'Pune', 78, '2022-02-17 07:13:32', '2022-02-17 07:13:32'),
(48, '554 Clarendon Court', 'Modi pariatur Velit', 'Illum facere ut omn', 'Pune', 'Andhra Pradesh', 'Pune', 'Pune', 82, '2022-02-17 07:15:11', '2022-02-17 07:15:11'),
(49, '265 Oak Road', 'Quam suscipit at ani', 'Laborum amet illo q', 'Pune', 'Meghalaya', 'Pune', 'Pune', 65, '2022-02-17 07:16:00', '2022-02-17 07:16:00'),
(57, '37 North Second Extension', 'In corrupti officia', 'Esse qui cum sint', 'Pune', 'Nagaland', 'Pune', 'Pune', 38, '2022-02-17 07:53:33', '2022-02-17 07:53:33'),
(58, '656 East Milton Court', 'Necessitatibus iusto', 'Sint ea similique ma', 'Pune', 'Kerala', 'Pune', 'Pune', 20, '2022-02-17 08:30:51', '2022-02-17 08:30:51'),
(59, '37 South Rocky Nobel Avenue', 'Eu qui deserunt modi', 'Laborum Qui fugit', 'Pune', 'Bihar', 'Pune', 'Pune', 20246, '2022-02-17 08:33:10', '2022-02-17 08:33:10');

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

--
-- Dumping data for table `user_documents`
--

INSERT INTO `user_documents` (`id`, `document1`, `document2`, `document3`, `document4`, `created_at`, `updated_at`) VALUES
(5, '/vets/documents/1644582768102223186684.docx', '/vets//documents/1644582768762966254828.docx', '/vets//documents/1644582768778678342345.docx', NULL, '2022-02-11 07:32:48', '2022-02-11 07:32:48'),
(6, '/vets/documents/1644582793293073170828.xlsx', NULL, NULL, NULL, '2022-02-11 07:33:13', '2022-02-11 07:33:13'),
(7, '/vets/documents/1644587455101004840515.docx', NULL, NULL, NULL, '2022-02-11 08:50:55', '2022-02-11 08:50:55'),
(8, '/vets/documents/164458815573538006563.docx', NULL, NULL, NULL, '2022-02-11 09:02:35', '2022-02-11 09:02:35'),
(9, '/vets//documents/1644649782343474894186.xlsx', NULL, NULL, NULL, '2022-02-12 02:09:42', '2022-02-12 02:09:42'),
(10, '/vets//documents/1644649833753626369666.xlsx', NULL, NULL, NULL, '2022-02-12 02:10:33', '2022-02-12 02:10:33'),
(11, '/vets//documents/1644649866851468185380.xlsx', NULL, NULL, NULL, '2022-02-12 02:11:06', '2022-02-12 02:11:06'),
(14, '/vets/11/documents/1644656199396910418208.pdf', NULL, NULL, NULL, '2022-02-12 02:33:08', '2022-02-12 03:56:39'),
(15, '/transport//documents/1644654546412869209747.pdf', NULL, NULL, NULL, '2022-02-12 03:29:06', '2022-02-12 03:29:06'),
(16, '/transport//documents/1644654741277935980575.pdf', NULL, NULL, NULL, '2022-02-12 03:32:21', '2022-02-12 03:32:21'),
(17, '/vets//documents/1645027627227513994311.jpg', '/vets//documents/1645027627766327288086.jpg', '/vets//documents/1645027627318186222076.jpg', NULL, '2022-02-16 11:07:07', '2022-02-16 11:07:07'),
(18, '/vets//documents/1645027690127884828040.jpg', '/vets//documents/1645027690163111893091.jpg', '/vets//documents/1645027690644833363618.jpg', NULL, '2022-02-16 11:08:10', '2022-02-16 11:08:10'),
(19, '/vets//documents/1645027719693028498365.jpg', '/vets//documents/1645027719256686742927.jpg', '/vets//documents/1645027719577414774530.jpg', NULL, '2022-02-16 11:08:39', '2022-02-16 11:08:39'),
(20, '/vets//documents/1645027738926198402537.jpg', '/vets//documents/1645027738977825583979.jpg', '/vets//documents/1645027738756986470484.jpg', NULL, '2022-02-16 11:08:58', '2022-02-16 11:08:58'),
(21, '/vets//documents/1645027759985111330848.jpg', '/vets//documents/1645027759185942011851.jpg', '/vets//documents/1645027759725883908623.jpg', NULL, '2022-02-16 11:09:19', '2022-02-16 11:09:19'),
(22, '/transport//documents/1645027835947922787611.jpg', NULL, NULL, NULL, '2022-02-16 11:10:35', '2022-02-16 11:10:35'),
(23, '/transport//documents/1645027836771322958513.jpg', NULL, NULL, NULL, '2022-02-16 11:10:36', '2022-02-16 11:10:36'),
(24, '/transport//documents/1645027851940333292308.jpg', NULL, NULL, NULL, '2022-02-16 11:10:51', '2022-02-16 11:10:51'),
(25, '/transport//documents/164502786132248307213.jpg', NULL, NULL, NULL, '2022-02-16 11:11:01', '2022-02-16 11:11:01'),
(26, '/transport//documents/1645027872511342242327.jpg', NULL, NULL, NULL, '2022-02-16 11:11:12', '2022-02-16 11:11:12'),
(27, '/vets//documents/1645104651457332397121.jpg', NULL, NULL, NULL, '2022-02-17 08:30:51', '2022-02-17 08:30:51'),
(28, '/transport//documents/1645104790537935117980.jpg', NULL, NULL, NULL, '2022-02-17 08:33:10', '2022-02-17 08:33:10');

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vets`
--

INSERT INTO `vets` (`id`, `user_id`, `license_no`, `reg_vet_council`, `vc_reg_no`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 5, 'Error totam unde lab', 'Tempora non a sapien', 'Corrupti et fugiat', '2022-02-11 07:32:48', '2022-02-11 08:34:11', '2022-02-11 08:34:11'),
(3, 6, 'Officia veniam nost', 'Eu facere rerum irur', 'Hic quis rem ratione', '2022-02-11 07:33:13', '2022-02-11 08:49:54', '2022-02-11 08:49:54'),
(4, 7, 'Itaque rerum esse i', 'Elit pariatur Null', 'Dolor necessitatibus', '2022-02-11 08:50:55', '2022-02-11 08:51:03', '2022-02-11 08:51:03'),
(5, 8, 'Perferendis eveniet', 'muneeb Farm', 'Fugiat aliquid cill', '2022-02-11 09:02:35', '2022-02-12 03:46:50', NULL),
(6, 19, 'Quae cillum blanditi', 'Dolor aut sed volupt', 'Dolorum aut tempora', '2022-02-16 11:07:07', '2022-02-16 11:07:07', NULL),
(7, 20, 'Asperiores irure dol', 'Nemo dignissimos exp', 'Ut iure ut nulla qui', '2022-02-16 11:08:10', '2022-02-16 11:08:10', NULL),
(8, 21, 'Nihil delectus ipsu', 'Ducimus atque labor', 'Rerum qui voluptatib', '2022-02-16 11:08:39', '2022-02-17 08:44:45', NULL),
(9, 22, 'Perspiciatis non en', 'Natus ad laborum Is', 'Dolore duis excepteu', '2022-02-16 11:08:59', '2022-02-16 11:08:59', NULL),
(10, 23, 'Sit ipsa qui quia a', 'Fuga Dolorem proide', 'Maiores quasi labori', '2022-02-16 11:09:19', '2022-02-17 08:41:21', '2022-02-17 08:41:21'),
(11, 33, 'Accusantium vel enim', 'Qui vero quas et acc', 'Quam aute et a dolor', '2022-02-17 08:30:52', '2022-02-17 08:30:52', NULL);

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
-- Indexes for table `certify_animals`
--
ALTER TABLE `certify_animals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certify_animals_user_id_foreign` (`user_id`),
  ADD KEY `certify_animals_appointment_address_id_foreign` (`appointment_address_id`),
  ADD KEY `certify_animals_vet_id_foreign` (`vet_id`);

--
-- Indexes for table `education_videos`
--
ALTER TABLE `education_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `education_videos_user_id_foreign` (`user_id`);

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
-- Indexes for table `newsupdates`
--
ALTER TABLE `newsupdates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `newsupdates_user_id_foreign` (`user_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ads_adress`
--
ALTER TABLE `ads_adress`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `ads_photo`
--
ALTER TABLE `ads_photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `ads_videos`
--
ALTER TABLE `ads_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment_address`
--
ALTER TABLE `appointment_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `book_transport`
--
ALTER TABLE `book_transport`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `certify_animals`
--
ALTER TABLE `certify_animals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `education_videos`
--
ALTER TABLE `education_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `from_address`
--
ALTER TABLE `from_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `newsupdates`
--
ALTER TABLE `newsupdates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `to_address`
--
ALTER TABLE `to_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transports`
--
ALTER TABLE `transports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `user_documents`
--
ALTER TABLE `user_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `vets`
--
ALTER TABLE `vets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- Constraints for table `certify_animals`
--
ALTER TABLE `certify_animals`
  ADD CONSTRAINT `certify_animals_appointment_address_id_foreign` FOREIGN KEY (`appointment_address_id`) REFERENCES `appointment_address` (`id`),
  ADD CONSTRAINT `certify_animals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `certify_animals_vet_id_foreign` FOREIGN KEY (`vet_id`) REFERENCES `vets` (`id`);

--
-- Constraints for table `education_videos`
--
ALTER TABLE `education_videos`
  ADD CONSTRAINT `education_videos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `newsupdates`
--
ALTER TABLE `newsupdates`
  ADD CONSTRAINT `newsupdates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
