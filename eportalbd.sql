-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 05:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eportalbd_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `image`, `brand_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Abubakar', '20200629044053.jpg', 'abubakar', 1, '2020-06-29 23:40:54', '2020-06-29 23:46:43', NULL),
(2, 'Abubakar1', '20200630111325.jpg', 'abubakar1', 1, '2020-06-30 18:13:25', '2020-06-30 18:14:43', NULL),
(3, 'Abubakar2', '20200630111336.jpg', 'abubakar2', 1, '2020-06-30 18:13:36', '2020-06-30 18:14:42', NULL),
(4, 'Abubakar3', '20200630111348.jpg', 'abubakar3', 1, '2020-06-30 18:13:48', '2020-06-30 18:14:41', NULL),
(5, 'Abubakar4', '20200630111507.jpg', 'abubakar4', 1, '2020-06-30 18:15:08', '2020-06-30 18:16:02', NULL),
(6, 'Abubakar5', '20200630111517.jpg', 'abubakar5', 1, '2020-06-30 18:15:17', '2020-06-30 18:16:01', NULL),
(7, 'Abubakar6', '20200630111527.jpg', 'abubakar6', 1, '2020-06-30 18:15:27', '2020-06-30 18:16:00', NULL),
(8, 'Abubakar8', '20200630111537.jpg', 'abubakar8', 1, '2020-06-30 18:15:37', '2020-06-30 18:15:59', NULL),
(9, 'Abubakar7', '20200630111546.jpg', 'abubakar7', 1, '2020-06-30 18:15:46', '2020-06-30 18:15:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `mobile`, `service`, `name_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Md Abubakar', '0172612291', 'a', 'md-abubakar', 0, '2020-06-27 07:54:55', '2020-06-27 07:54:55', NULL),
(2, 'Md Abubakar', '01623639901', 'a', 'md-abubakar', 0, '2020-06-27 07:58:03', '2020-06-27 07:58:03', NULL),
(3, 'Md Abubakar', '01623639901', 'a', 'md-abubakar', 0, '2020-06-27 08:00:06', '2020-06-27 08:00:06', NULL),
(4, 'Md Abubakar', '01726122900', 'a', 'md-abubakar', 0, '2020-06-27 08:16:14', '2020-07-01 08:48:05', '2020-07-01 08:48:05'),
(5, 'Md Abubakar', '01726122900', 'a', 'md-abubakar', 0, '2020-06-27 08:17:08', '2020-07-01 08:47:59', '2020-07-01 08:47:59'),
(6, 'Md Abubakar', '0172612291', 'a', 'md-abubakar', 0, '2020-06-27 08:26:50', '2020-07-01 08:47:53', '2020-07-01 08:47:53'),
(7, 'Md Abubakar', '01680084974', 'a', 'md-abubakar', 0, '2020-06-27 08:27:19', '2020-07-01 08:47:48', '2020-07-01 08:47:48'),
(8, 'Md Abubakar', '01680084974', 'a', 'md-abubakar', 0, '2020-06-27 08:28:45', '2020-07-01 08:47:41', '2020-07-01 08:47:41'),
(9, 'Md Abubakar', '01623639901', 'a', 'md-abubakar', 0, '2020-06-27 08:32:30', '2020-06-27 08:32:30', NULL),
(10, 'Md Abubakar', '01734825882', 'a', 'md-abubakar', 0, '2020-06-27 08:34:07', '2020-07-02 00:19:13', NULL),
(11, 'Md Abubakar', '01726122917', 'a', 'md-abubakar', 1, '2020-06-27 08:34:52', '2020-07-01 09:26:23', NULL),
(12, 'auth', '01726122917', 'অনলাইন আবেদন', 'auth', 1, '2020-06-29 19:16:01', '2020-07-01 09:25:58', NULL),
(13, 'URMI AKTER LUCKY', '01726122917', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'urmi-akter-lucky', 0, '2020-06-29 22:16:47', '2020-07-01 09:25:33', '2020-07-01 09:25:33'),
(14, 'auth', '01726122911', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'auth', 0, '2020-06-29 22:18:56', '2020-07-01 09:23:37', '2020-07-01 09:23:37'),
(15, 'test', '01726122900', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'test', 0, '2020-06-29 22:55:16', '2020-07-01 09:23:29', '2020-07-01 09:23:29'),
(16, 'URMI AKTER LUCKY', '01680084974', 'HTML5', 'urmi-akter-lucky', 0, '2020-07-01 08:43:46', '2020-07-01 09:22:12', '2020-07-01 09:22:12'),
(17, 'URMI AKTER LUCKY3', '01623639901', 'অনলাইন আবেদন অনলাইন আবেদন', 'urmi-akter-lucky3', 1, '2020-07-01 08:44:08', '2020-07-01 09:22:08', NULL),
(18, 'URMI AKTER LUCKY', '01726122900', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'urmi-akter-lucky', 1, '2020-07-03 10:37:46', '2020-07-03 12:23:44', NULL),
(20, 'admin', '01948956450', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'admin', 0, '2020-07-03 12:26:18', '2020-07-03 12:26:18', NULL),
(21, 'URMI AKTER LUCKY', '01726122900', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'urmi-akter-lucky', 0, '2020-07-03 12:26:23', '2020-07-03 12:26:23', NULL),
(22, 'Rabeya', '01948956450', 'কম্পিউটার', 'rabeya', 0, '2020-07-05 23:54:46', '2020-07-05 23:54:46', NULL),
(23, 'admin', '01948956450', 'কম্পিউটার', 'admin', 0, '2020-07-05 23:55:11', '2020-07-05 23:55:11', NULL),
(24, 'hdg', '01948956450', 'কম্পিউটার', 'hdg', 0, '2020-07-06 06:36:43', '2020-07-06 06:36:43', NULL),
(25, 'Md Faruque Hossain', '01711111111', 'আয়কর', 'md-faruque-hossain', 0, '2021-10-14 12:20:45', '2021-10-14 12:20:45', NULL),
(26, 'test 19 1', '01711111111', 'পাসপোর্ট, ভিসা ও ইমিগ্রেশন', 'test-19-1', 0, '2021-10-14 12:22:49', '2021-10-14 12:22:49', NULL),
(27, 'Md Faruque Hossain', '01711111111', 'ভ্যাট (বিন)) সার্টিফিকেট', 'md-faruque-hossain', 0, '2021-10-14 12:24:38', '2021-10-14 12:24:38', NULL);

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
(9, '2020_06_27_131847_create_clients_table', 6),
(10, '2020_06_28_140556_create_sliders_table', 7),
(11, '2020_06_28_195438_create_services_table', 8),
(13, '2020_06_29_103420_create_sub_services_table', 9),
(14, '2020_06_29_135737_create_notices_table', 10),
(15, '2020_06_15_192013_create_brands_table', 11),
(16, '2020_06_30_112203_create_products_table', 12),
(17, '2021_10_14_184143_create_works_table', 13),
(18, '2021_10_16_124346_create_settings_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `notice_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `notice`, `notice_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'অনলাইন আবেদন অনলাইন আবেদন', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', '-', 0, '2020-06-29 21:32:35', '2020-06-29 21:40:55', '2020-06-29 21:40:55'),
(3, 'অনলাইন আবেদন অনলাইন আবেদন', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', '-', 0, '2020-06-29 21:34:55', '2020-06-29 21:40:59', '2020-06-29 21:40:59'),
(4, 'অনলাইন আবেদন অনলাইন আবেদন', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', '-', 1, '2020-06-29 21:35:21', '2020-07-03 10:44:11', '2020-06-29 21:41:03'),
(5, 'অনলাইন আবেদন অনলাইন আবেদন', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', '-', 1, '2020-06-29 21:37:36', '2020-07-03 10:44:04', NULL),
(6, 'Web Design', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', 'web-design', 1, '2020-06-29 22:26:08', '2020-07-03 10:43:57', NULL),
(7, 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকর', 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরনজাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', '-', 1, '2020-06-29 22:36:26', '2020-07-01 23:52:47', NULL),
(8, 'HTML5', 'অনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদনঅনলাইন আবেদন অনলাইন আবেদন অনলাইন আবেদন', 'html5', 1, '2020-06-29 22:52:45', '2020-07-01 23:52:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asonlinebd18@gmail.com', '$2y$10$FtSRLUsdPoK1pa1nTo4J9e1kVENAHpZvCrUU9JwCBGM7SBf.Dl80a', '2020-07-02 00:44:03'),
('asonlinebd18@gmail.com', '$2y$10$FtSRLUsdPoK1pa1nTo4J9e1kVENAHpZvCrUU9JwCBGM7SBf.Dl80a', '2020-07-02 00:44:03');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `sub_title`, `desc`, `image`, `price`, `product_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Web Design', 'Web Design', 'Description', '20200630121008.jpg', '5000', 'web-design', 1, '2020-06-30 19:10:08', '2020-06-30 19:14:10', '2020-06-30 19:14:10'),
(2, 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'Web Design', 'Description', '20200630121426.jpg', '5000', '-', 1, '2020-06-30 19:14:27', '2020-06-30 19:37:31', '2020-06-30 19:37:31'),
(3, 'অনলাইন আবেদন', 'Web Design', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '20200630121524.jpg', '4000', '-', 1, '2020-06-30 19:15:24', '2020-07-01 18:02:15', NULL),
(4, 'HTML5', 'Web Design', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '20200630121539.jpg', '8000', 'html5', 0, '2020-06-30 19:15:39', '2020-07-01 18:35:20', NULL),
(5, 'HTML5 HTML5', 'Web Design', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '51328927_20200630123549_753631181.jpg', '7000', 'html5-html5', 1, '2020-06-30 19:30:17', '2020-06-30 19:35:58', NULL),
(6, 'HTML5 HT', 'Web Design', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '20200630123108.jpg', '70001', 'html5-ht', 1, '2020-06-30 19:31:09', '2020-06-30 19:31:09', NULL),
(7, 'অনলাইন আবেদন', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '20200630124454.jpg', '5000', '-', 1, '2020-06-30 19:44:54', '2020-06-30 19:44:54', NULL),
(8, 'HTML5', 'Web Design', 'এই ওয়েবসাইটের মাধ্যমে আপনি নতুন ভোটার হিসাবে নিবন্ধন এবং পুরাতন ভোটার হিসাবে আপনার তথ্য হালনাগাদ করতে পারবেন।', '20200630124511.jpg', '7000', 'html5', 1, '2020-06-30 19:45:11', '2020-06-30 19:45:11', NULL),
(11, 'কম্পিউটার', 'ইস্টুডেন্ট কম্পিউটার', '17” ইঞ্জি নতুন মনিটর সহ সকল কিছু নতুন', '20200706055006.jpg', '9999', '', 1, '2020-07-05 23:50:06', '2020-07-05 23:51:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `image`, `service_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'আয়কর', '20200628081902.png', '', 1, '2020-06-29 03:19:02', '2020-06-29 03:19:02', NULL),
(6, 'পাসপোর্ট, ভিসা ও ইমিগ্রেশন', '20200628081929.png', '-', 1, '2020-06-29 03:19:29', '2020-06-29 03:19:29', NULL),
(11, 'ভ্যাট (বিন)) সার্টিফিকেট', '20200706051902.jpg', '-', 1, '2020-07-05 23:19:02', '2020-07-05 23:19:02', NULL),
(12, 'ই-জিপি করতে চান?', '20200706051953.png', '-', 1, '2020-07-05 23:19:53', '2020-07-05 23:19:53', NULL),
(13, 'টেন্ডার ড্রোপিং', '20200706052029.jpg', '-', 1, '2020-07-05 23:20:29', '2020-07-05 23:20:29', NULL),
(14, 'fhtfntfg', '20211014062325.JPG', 'fhtfntfg', 1, '2021-10-14 12:23:27', '2021-10-14 12:23:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comppany_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms_sender_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sms3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `comppany_name`, `logo`, `banar`, `fabicon`, `sms_sender_id`, `api_key`, `sms1`, `sms2`, `sms3`, `created_at`, `updated_at`) VALUES
(1, 'Rakib Rent', '16343933272.jpeg', '16343931872.jpeg', '16343935301.jpeg', '8809601001422', 'C20007686179481370c626.39721900', 'আপনার কাজটি সফলভাবে শুরু করা হয়েছে।', 'আপনার কাজটি সফলভাবে সাবমিট হয়ে গেছে।', 'আপনার কাজটি সফলভাবে সম্পন্ন হয়েছে।', '2021-10-16 13:14:27', '2021-10-27 06:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `sub_title`, `image`, `slider_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(14, 'ই-টিন (আয়কর)', 'ই-টিন নতুন করন ,সংশোধন আয়কর প্রত্যায়ন সকল কিছু খুব সহসজ', '20200705051209.jpg', '-', 1, '2020-07-05 11:12:09', '2020-07-05 11:15:00', NULL),
(15, 'ভ্যাট (বিন)) সার্টিফিকেট দরকার', 'নতুন ভ্যাট 13 ডিজিটের আপডেট করতে অথবা নতুন করতে চাইলে (সকলের দোরগড়ায় নয় এখন আমাদের কাছেই পাবেন সব সেবা) আমাদের সাথে যোগাযোগ করতে পারেন 01717766989/01948956450', '20200706050409.jpg', '-', 1, '2020-07-05 23:04:11', '2020-07-05 23:04:22', NULL),
(16, 'ই-জিপি করতে চান?', 'কোন প্রকার ঝামেলা ছাড়াই আমাদের কাছে পাচ্ছেন ই-জিপি সহ সকল ই-সেবা । ইমাজেন্সি ই-জিপি দরকার হলে মাত্র 12 ঘন্টায় ই-জিপি করতে পাবেন আমাদের সাথে যোগাযোগ করতে। 01717766989/01948956450', '20200706050848.png', '-', 1, '2020-07-05 23:08:48', '2020-07-05 23:08:55', NULL),
(17, 'টেন্ডার ড্রোপিং', 'টেন্ডার  ড্রোপিং করতে চান ? সব চেয়ে কম খরচে আপাদের মাধ্যমে দেশের যেকোনো জায়গায় বসে টেন্ডার ড্রোপ করতে পারবেন। যোগাযোগ 01717766989/01948956450', '20200706051145.jpg', '-', 1, '2020-07-05 23:11:45', '2020-07-05 23:11:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sub_services`
--

CREATE TABLE `sub_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_service_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_services`
--

INSERT INTO `sub_services` (`id`, `service_id`, `title`, `sub_title`, `image`, `sub_service_slug`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 5, 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'Web Design', '20200629111420.jpg', '-', 1, '2020-06-29 18:14:20', '2020-06-29 18:26:15', '2020-06-29 18:26:15'),
(2, 5, 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'Web Design', '20200629112849.jpg', '-', 1, '2020-06-29 18:28:49', '2020-06-29 19:01:18', '2020-06-29 19:01:18'),
(3, 5, 'অনলাইন আবেদন', 'Web Design', '20200629114340.jpg', '-', 1, '2020-06-29 18:43:40', '2020-07-01 23:49:00', NULL),
(4, 5, 'জাতীয় পরিচয়পত্রের তথ্য হালনাগাদকরন', 'Web Design', '20200629115803.jpg', '-', 1, '2020-06-29 18:58:04', '2020-06-29 18:58:04', NULL);

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
(1, 'Md Abubakar', 'asonlinebd18@gmail.com', NULL, '$2y$10$uGDVxM8VRomEU3vXC33U1OFvKkIf13in54GoCtym.jQUzu6Ap8peu', 'MFbg8ESMNepCZpVijcx8ztjypbBWzlverIQoZxMwoNyk9pNDnoF4gaoXlMCA', '2020-06-15 09:31:03', '2020-06-15 09:31:03'),
(2, 'Abul Hasan Rakib', 'mahasan5840@gmail.com', NULL, '$2y$10$uGDVxM8VRomEU3vXC33U1OFvKkIf13in54GoCtym.jQUzu6Ap8peu', 'zdbJCiYz09kOeiPhc23afd5CVeDYbLQqPSB4YVvlijPriHf6jnCXNQIGgwk1', '2020-06-15 09:46:58', '2020-07-03 12:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_of_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trade_license_issue_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tin_certificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_numbar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submission_id1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submission_id2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_numbar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract` double(18,2) DEFAULT NULL,
  `payment` double(18,2) DEFAULT NULL,
  `due` double(18,2) DEFAULT NULL,
  `note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `sms_status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`id`, `name`, `company_name`, `company_address`, `name_of_owner`, `trade_license_no`, `trade_license_issue_date`, `national_id`, `tin_certificate`, `bank_account_numbar`, `bank_account_name`, `bank_name`, `bank_branch_name`, `submission_id1`, `submission_id2`, `gmail`, `gmail_password`, `contact_numbar`, `contract`, `payment`, `due`, `note`, `images1`, `images2`, `images3`, `images4`, `images5`, `images6`, `images7`, `images8`, `images9`, `images10`, `status`, `payment_status`, `sms_status`, `created_at`, `updated_at`) VALUES
(34, 'Md Abubakar', 'Barguna It', 'Barguna', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0147888544777', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, 1, '2022-01-26 10:12:35', '2022-01-26 10:26:33'),
(35, 'Md Abubakar', 'Barguna It', 'Barguna', 'Md Abubakar', NULL, NULL, NULL, NULL, NULL, NULL, 'barguna', 'sdfgg', NULL, NULL, 'Barguna', 'dcgfdg', '0115155511', NULL, NULL, NULL, NULL, '16432137321.jpeg', '16432143122.png', '16432143123.jpeg', '16432143124.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, '2022-01-26 10:15:32', '2022-01-26 10:25:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_services`
--
ALTER TABLE `sub_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sub_services`
--
ALTER TABLE `sub_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
