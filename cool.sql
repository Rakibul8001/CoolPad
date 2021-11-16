-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2021 at 10:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maktelco_cpabd`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, 'CoolPad N7 PLUS', 'coolpad-n7-plus', '/storage/photos/1/cool-s3.jpg', '<p><b style=\"\">&lt;!--&lt;p&gt;&lt;span style=\"font-weight: bolder; color: rgb(255, 255, 255);\"&gt;See Bigger World on Bigger Screen&lt;/span&gt;&lt;/p&gt;--&gt;&lt;p&gt;&lt;span style=\"color: rgb(255, 255, 255);\"&gt;6.53\" Water Drop HD+&lt;br /&gt;(20+2)MP Sony IMX350 Rear&lt;br/&gt;20MP Sony IMX376 Front&lt;br/&gt;4GB RAM+64GB ROM&lt;br/&gt;4000mAh Battery&lt;br/&gt;Fingerprint&lt;/span&gt;&lt;/p&gt;</b><br></p>', 'active', '2021-05-30 05:29:56', '2021-06-07 22:29:18'),
(10, 'CoolPad N7 Air', 'coolpad-n8-plus', '/storage/photos/1/cool-s2.jpg', '<p><span style=\"font-weight: bolder; color: rgb(255, 255, 255);\">&lt;!--&lt;p&gt;&lt;span style=\"font-weight: bolder; color: rgb(255, 255, 255);\"&gt;See Bigger World on Bigger Screen&lt;/span&gt;&lt;/p&gt;--&gt;&lt;p&gt;&lt;span style=\"color: rgb(255, 255, 255);\"&gt;6.517\" Water-drop HD&lt;br /&gt;13MP Triple Rear Camera&lt;br /&gt;2GB RAM+16GB ROM&lt;br /&gt;4000mAh Battery&lt;br /&gt;Face Unlock&lt;/span&gt;&lt;/p&gt;</span><br></p>', 'active', '2021-05-30 05:29:56', '2021-06-07 22:31:23'),
(11, 'CoolPad Cool S', 'coolpad-n10-plus', '/storage/photos/1/Col-S-slider.jpg', '<p><span style=\"font-weight: bolder; color: rgb(255, 255, 255);\">&lt;!--&lt;p&gt;&lt;span style=\"font-weight: bolder; color: rgb(255, 255, 255);\"&gt;See Bigger World on Bigger Screen&lt;/span&gt;&lt;/p&gt;--&gt;&lt;p&gt;&lt;span style=\"color: rgb(255, 255, 255);\"&gt;6.53\" FHD+ Full-screen&lt;br&gt;48MP Quad Rear Camera&lt;br&gt;4GB RAM+128GB ROM&lt;br&gt;5000mAh Battery&lt;br&gt;Side Mounted Fingerprint&lt;/span&gt;&lt;/p&gt;</span><br></p>', 'active', '2021-05-30 05:29:56', '2021-06-07 22:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'adidas', 'active', '2020-08-14 04:23:00', '2020-08-14 04:23:00'),
(2, 'Nike', 'nike', 'active', '2020-08-14 04:23:08', '2020-08-14 04:23:08'),
(3, 'Kappa', 'kappa', 'active', '2020-08-14 04:23:48', '2020-08-14 04:23:48'),
(4, 'Prada', 'prada', 'active', '2020-08-14 04:24:08', '2020-08-14 04:24:08'),
(6, 'Brand', 'brand', 'active', '2020-08-17 20:50:31', '2020-08-17 20:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `color`, `status`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(5, 24, NULL, 33, 49000.00, 'Blue', 'new', 1, 49000.00, '2021-07-10 23:34:28', '2021-07-11 00:49:14'),
(6, 20, NULL, 33, 11880.00, 'Black', 'new', 1, 12000.00, '2021-07-11 00:12:39', '2021-07-11 00:12:39'),
(7, 21, NULL, 33, 15000.00, 'Blue', 'new', 2, 30000.00, '2021-07-11 00:36:22', '2021-07-11 00:36:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Smart Phone', 'smart-phone', NULL, '/storage/photos/1/Base.png', 1, NULL, NULL, 'active', '2021-06-08 00:43:01', '2021-06-08 01:27:19'),
(16, 'Accessories', 'accessories', NULL, '/storage/photos/1/Cool-HUB-800.png', 1, NULL, NULL, 'active', '2021-06-08 00:45:28', '2021-06-08 01:27:32'),
(17, 'Smart Watch', 'smart-watch', NULL, '/storage/photos/1/Coolpad-Cool-watch-1S-289x275.jpg', 0, 16, NULL, 'active', '2021-06-08 00:46:08', '2021-06-08 00:46:08'),
(18, 'Ear Phone', 'ear-phone', NULL, '/storage/photos/1/Coolpad-coolbuds-T1.jpg', 0, 16, NULL, 'active', '2021-06-08 00:47:44', '2021-06-08 00:47:44'),
(19, 'Power Bank', 'power-bank', NULL, '/storage/photos/1/Coolpad-Power-Bank.png', 0, 16, NULL, 'active', '2021-06-08 00:48:06', '2021-06-08 00:48:06'),
(20, 'Router', 'router', NULL, '/storage/photos/1/coolpad-Router_CRT01.png', 0, 16, NULL, 'active', '2021-06-08 00:49:07', '2021-06-08 00:49:07'),
(21, 'UPS', 'ups', NULL, '/storage/photos/1/ups.png', 0, 16, NULL, 'active', '2021-06-08 00:49:46', '2021-06-08 00:49:46'),
(22, 'HUB', 'hub', NULL, '/storage/photos/1/Cool-HUB-800.png', 0, 16, NULL, 'active', '2021-06-08 00:50:21', '2021-06-08 00:50:21'),
(23, 'MiFi', 'mifi', NULL, '/storage/photos/1/coolpad-MiFi_CMF01.png', 0, 16, NULL, 'active', '2021-06-08 00:50:53', '2021-06-08 00:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc123', 'fixed', '300.00', 'active', NULL, NULL),
(2, '111111', 'percent', '10.00', 'active', NULL, NULL),
(5, 'abcd', 'fixed', '250.00', 'active', '2020-08-17 20:54:58', '2020-08-17 20:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `division_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Comilla', NULL, NULL),
(2, 2, 'Feni', NULL, NULL),
(3, 2, 'Brahmanbaria', NULL, NULL),
(4, 2, 'Rangamati', NULL, NULL),
(5, 2, 'Noakhali', NULL, NULL),
(6, 2, 'Chandpur', NULL, NULL),
(7, 2, 'Lakshmipur', NULL, NULL),
(8, 2, 'Chattogram', NULL, NULL),
(9, 2, 'Coxsbazar', NULL, NULL),
(10, 2, 'Khagrachhari', NULL, NULL),
(11, 2, 'Bandarban', NULL, NULL),
(12, 3, 'Sirajganj', NULL, NULL),
(13, 3, 'Pabna', NULL, NULL),
(14, 3, 'Bogura', NULL, NULL),
(15, 3, 'Rajshahi', NULL, NULL),
(16, 3, 'Natore', NULL, NULL),
(17, 3, 'Joypurhat', NULL, NULL),
(18, 3, 'Chapainawabganj', NULL, NULL),
(19, 3, 'Naogaon', NULL, NULL),
(20, 4, 'Jashore', NULL, NULL),
(21, 4, 'Satkhira', NULL, NULL),
(22, 4, 'Meherpur', NULL, NULL),
(23, 4, 'Narail', NULL, NULL),
(24, 4, 'Chuadanga', NULL, NULL),
(25, 4, 'Kushtia', NULL, NULL),
(26, 4, 'Magura', NULL, NULL),
(27, 4, 'Khulna', NULL, NULL),
(28, 4, 'Bagerhat', NULL, NULL),
(29, 4, 'Jhenaidah', NULL, NULL),
(30, 5, 'Jhalakathi', NULL, NULL),
(31, 5, 'Patuakhali', NULL, NULL),
(32, 5, 'Pirojpur', NULL, NULL),
(33, 5, 'Barisal', NULL, NULL),
(34, 5, 'Bhola', NULL, NULL),
(35, 5, 'Barguna', NULL, NULL),
(36, 6, 'Sylhet', NULL, NULL),
(37, 6, 'Moulvibazar', NULL, NULL),
(38, 6, 'Habiganj', NULL, NULL),
(39, 6, 'Sunamganj', NULL, NULL),
(40, 1, 'Narsingdi', NULL, NULL),
(41, 1, 'Gazipur', NULL, NULL),
(42, 1, 'Shariatpur', NULL, NULL),
(43, 1, 'Narayanganj', NULL, NULL),
(44, 1, 'Tangail', NULL, NULL),
(45, 1, 'Kishoreganj', NULL, NULL),
(46, 1, 'Manikganj', NULL, NULL),
(47, 1, 'Dhaka', NULL, NULL),
(48, 1, 'Munshiganj', NULL, NULL),
(49, 1, 'Rajbari', NULL, NULL),
(50, 1, 'Madaripur', NULL, NULL),
(51, 1, 'Gopalganj', NULL, NULL),
(52, 1, 'Faridpur', NULL, NULL),
(53, 7, 'Panchagarh', NULL, NULL),
(54, 7, 'Dinajpur', NULL, NULL),
(55, 7, 'Lalmonirhat', NULL, NULL),
(56, 7, 'Nilphamari', NULL, NULL),
(57, 7, 'Gaibandha', NULL, NULL),
(58, 7, 'Thakurgaon', NULL, NULL),
(59, 7, 'Rangpur', NULL, NULL),
(60, 7, 'Kurigram', NULL, NULL),
(61, 8, 'Sherpur', NULL, NULL),
(62, 8, 'Mymensingh', NULL, NULL),
(63, 8, 'Jamalpur', NULL, NULL),
(64, 8, 'Netrokona', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Dhaka', NULL, NULL),
(2, 'Chattagram', NULL, NULL),
(3, 'Rajshahi', NULL, NULL),
(4, 'Khulna', NULL, NULL),
(5, 'Barisal', NULL, NULL),
(6, 'Sylhet', NULL, NULL),
(7, 'Rangpur', NULL, NULL),
(8, 'Mymensingh', NULL, NULL);

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
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `district_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hours` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `district_id`, `address`, `hours`, `product`, `phone`, `created_at`, `updated_at`) VALUES
(1, 45, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">FM Telecom,Sadumiyar Goli,Bhairab Bazar, Bhairab, Kishoregonj.</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01714796818', NULL, '2021-06-02 06:01:14'),
(2, 47, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">Vai Vai Telecom,Tat Bazar, Vulta Gawsia, Narayangonj</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01928288213', NULL, '2021-06-02 05:58:02'),
(3, 48, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">M/S Talukder Electric &amp; Mobile Center, Five Star Market, Sipahipara, Rampal, Munsigonj.</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01937-897385', NULL, '2021-06-02 05:56:36'),
(4, 40, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">M/S S.M Traders,Sultan Uddin Shopping Complex, Narsingdi Sadar.</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01911448206', NULL, '2021-06-02 05:55:34'),
(5, 47, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">Grameen service system,Razzak Plaza(3rd Floor) Shop no:56, Savar, Dhaka</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01677100570', NULL, '2021-06-02 05:54:41'),
(6, 44, '<font color=\"#757575\" face=\"Proxima Nova, Arial, sans-serif\"><span style=\"font-size: 14px;\">Shahan Shahi Telecom,Sikdar supper market,Tangail</span></font><br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01733155688', NULL, '2021-06-02 05:48:27'),
(9, 47, 'Bashundhara City, Osman Telecom, Level #6, Block #B, Shop No#59, Bashundhara City, Dhaka.<br>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01926625225', '2021-06-02 05:42:57', '2021-06-02 05:44:05'),
(10, 47, '<p>Ifsan Enterprise,Kashaf Shopping Complex, CTG Road, Shiddirgonj<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01964222777', '2021-06-02 06:33:53', '2021-06-02 06:33:53'),
(11, 43, '<p>Ifsan Enterprise,Kashaf Shopping Complex, CTG Road, Shiddirgonj<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01964222777', '2021-06-02 22:28:31', '2021-06-02 22:28:31'),
(12, 47, '<p>Abir Telecom,Shop No # 464,Twin Tower Concord Shopping Complex,27 Chamelybagh, Shantinagar, Dhaka-1217.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01739757692', '2021-06-02 22:30:39', '2021-06-02 22:30:39'),
(13, 43, '<p>Super Electronics, Soruj Super Market, Shasongoan Bazar, BSCIC, Fatullah, Narayongong<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01911076792', '2021-06-02 22:31:29', '2021-06-02 22:31:29'),
(14, 41, '<p>Shapon Telecom,Anupam Super Market(2nd Floor)Chandona Chowrasta, Gazipur.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01913331132', '2021-06-02 22:32:41', '2021-06-02 22:32:41'),
(15, 62, '<p>MH Telecom,Aloka Nodi Bangla Complex,shop no:427(level-4), Rambabu Road, Mymensingh&nbsp;<br></p>', '10:00 AM to 7:00 PM, Friday closed', '10:00 AM to 7:00 PM, Friday closed', '01911009710', '2021-06-02 22:35:13', '2021-06-02 22:35:13'),
(16, 4, '<p>AST Telecom &amp; Global Service,Shop No:206(2nd Floor),VIP Tower,Kazir Dewri,Chattogram<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01811188200', '2021-06-02 22:36:05', '2021-06-02 22:36:05'),
(17, 4, '<p>Easy Telecom,BM Shopping Complex-2,Banorupa, Rangamati Sadar.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01820306778', '2021-06-02 22:37:38', '2021-06-02 22:37:38'),
(18, 1, '<p>Mobile Fair,Townhall Supper Market,Kandirpar, Cumilla<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01855515552', '2021-06-02 22:39:34', '2021-06-02 22:39:48'),
(19, 9, '<p>Mobile Center,Jafar Mansion(1st Floor),Behind the One Bank, Cox\'s Bazar<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01828218278', '2021-06-02 22:40:29', '2021-06-02 22:40:29'),
(20, 3, '<p>Tuba Telecom,Kali Bari More,Beside SA Paribahan, B.Baria sadar<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01968876003', '2021-06-02 22:42:59', '2021-06-02 22:42:59'),
(21, 2, '<p>Mobile Shop,Mohipal Plaza,Mohipal, Feni<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01887745459', '2021-06-02 22:47:31', '2021-06-02 22:47:31'),
(22, 6, '<p>3G Mobile Center,Bhuyan Center(Ground Floor),Muktijoddah Road, Chandpur<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01711277646', '2021-06-02 22:48:07', '2021-06-02 22:48:07'),
(23, 5, '<p>Takwa Telecom,BOC Market,Chomohoni, Noakhali<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01767000091', '2021-06-02 22:48:51', '2021-06-02 22:48:51'),
(24, 52, '<p>Mobile Dot Com,50/A Sikdar Tower, Thana Road, Faridpur.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01712711666', '2021-06-02 22:55:07', '2021-06-02 22:55:07'),
(25, 52, '<p>Mobile Dot Com,50/A Sikdar Tower, Thana Road, Faridpur.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01712711666', '2021-06-02 22:57:36', '2021-06-02 22:57:36'),
(26, 20, '<p>SR Mobile Shop,H # 1330/1, Flat# A2, Ambika Bashu Lane, Khaldhar Road, Jessore.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01634-915915', '2021-06-02 22:59:44', '2021-06-02 22:59:44'),
(27, 27, '<p>Maxtel,Azmol Plaza(1st Floor), 79/1, Lower Jessore Road, Khulna<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01712-405185', '2021-06-02 23:01:00', '2021-06-02 23:01:00'),
(28, 25, '<p>Bismillah Telecom,5 Rastar more, kustia<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01932685020', '2021-06-02 23:01:56', '2021-06-02 23:01:56'),
(29, 59, '<p>Bandon Telecom,Shop No:222,(1st Floor),Zilaporishad Market, Rangpur<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01712363596', '2021-06-02 23:02:50', '2021-06-02 23:02:50'),
(30, 54, '<p>Lipon Electronic, Sadar Hospital road,(opposite site of Dinajpur Zila School), Dinajpur.&nbsp;<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01727057282', '2021-06-02 23:03:35', '2021-06-02 23:03:35'),
(31, 15, '<p>Rafa Telecom,Green Plaza(Ground Floor)Opsit side of Rajshahi New market, Rajshahi.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01954273799', '2021-06-02 23:04:59', '2021-06-02 23:04:59'),
(32, 14, '<p>Star Telecom,Shop no:39(2nd Floor)Shoptobodi Market, Bogura.<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01757800770', '2021-06-02 23:05:43', '2021-06-02 23:05:43'),
(33, 12, '<p>Shahmim Telecom,Ma Mension(2nd floor),Muktarpara more, Sirajgonj<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01312120659', '2021-06-02 23:06:52', '2021-06-02 23:06:52'),
(34, 19, '<p>Ethen Mobile Care,Sharisha Hatir More, Naogoan<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01729666768', '2021-06-02 23:07:27', '2021-06-02 23:07:27'),
(35, 33, '<p>Barisal Mobile sales Center, Ali Mansion(1st Floor), 601 Hospital Road, Barisal<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01784656640', '2021-06-02 23:08:15', '2021-06-02 23:08:15'),
(36, 30, '<p>M/S Enayet Brothers,24,Kalibari road, Jhalakathi<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01752534353', '2021-06-02 23:08:52', '2021-06-02 23:08:52'),
(37, 36, '<p>Fahmida Care,6/16,5th Floor,Karimullah Market,Bondor Bazar, Sylhet<br></p>', '10:00 AM to 7:00 PM, Friday closed', 'CoolPad Products', '01711787258', '2021-06-02 23:09:34', '2021-06-02 23:09:34');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `photo`, `phone`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Prajwal Rai', 'About price', 'prajwal.iar@gmail.com', NULL, '9807009999', 'Hello sir i am from kathmandu nepal.', '2020-08-14 08:25:46', '2020-08-14 08:00:01', '2020-08-14 08:25:46'),
(2, 'Prajwal Rai', 'About Price', 'prajwal.iar@gmail.com', NULL, '9800099000', 'Hello i am Prajwal Rai', '2020-08-18 03:04:15', '2020-08-15 07:52:39', '2020-08-18 03:04:16'),
(3, 'Prajwal Rai', 'lorem ipsum', 'prajwal.iar@gmail.com', NULL, '1200990009', 'hello sir sdfdfd dfdjf ;dfjd fd ldkfd', '2021-05-09 03:53:22', '2020-08-17 21:15:12', '2021-05-09 03:53:22'),
(4, 'MienzLoomy', 'nigerian labour act 2014 pdf', 'polokrat@foxmaily.com', NULL, '82465415471', 'latest edo news https://fmohconnect.gov.ng/health_system.html', NULL, '2021-06-17 06:35:57', '2021-06-17 06:35:57'),
(5, 'Mithu', 'Need Coolpad cool s back cover', 'mithumiah74@gmail.com', NULL, '01719250959', 'I have searching many times Coolpad cool s back cover', NULL, '2021-06-26 01:36:39', '2021-06-26 01:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_10_021010_create_brands_table', 1),
(5, '2020_07_10_025334_create_banners_table', 1),
(6, '2020_07_10_112147_create_categories_table', 1),
(7, '2020_07_11_063857_create_products_table', 1),
(8, '2020_07_12_073132_create_post_categories_table', 1),
(9, '2020_07_12_073701_create_post_tags_table', 1),
(10, '2020_07_12_083638_create_posts_table', 1),
(11, '2020_07_13_151329_create_messages_table', 1),
(12, '2020_07_14_023748_create_shippings_table', 1),
(13, '2020_07_15_054356_create_orders_table', 1),
(15, '2020_07_16_041623_create_notifications_table', 1),
(16, '2020_07_16_053240_create_coupons_table', 1),
(17, '2020_07_23_143757_create_wishlists_table', 1),
(18, '2020_07_24_074930_create_product_reviews_table', 1),
(19, '2020_07_24_131727_create_post_comments_table', 1),
(20, '2020_08_01_143408_create_settings_table', 1),
(22, '2021_05_20_041502_create_smallbanners_table', 2),
(23, '2021_05_20_053845_create_testimonials_table', 3),
(24, '2021_05_23_121912_create_partners_table', 4),
(31, '2021_05_30_042341_create_divisions_table', 5),
(32, '2021_05_30_042514_create_districts_table', 5),
(33, '2021_05_30_042647_create_locations_table', 5),
(36, '2021_05_31_061403_create_videos_table', 6),
(37, '2021_06_07_040932_create_productbanners_table', 7),
(38, '2021_07_10_115101_create_wheretobuys_table', 8),
(39, '2020_07_15_102626_create_carts_table', 9),
(41, '2021_07_11_070554_create_popups_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('05ee1a92-a25c-41fe-b9fd-842a78488388', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/15\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-29 06:10:25', '2021-05-29 06:10:25'),
('11b143a1-81d2-4223-a411-425fbb706543', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/product-detail\\/coolpad\",\"fas\":\"fa-star\"}', '2021-05-22 00:09:05', '2021-05-20 05:59:04', '2021-05-22 00:09:05'),
('2145a8e3-687d-444a-8873-b3b2fb77a342', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:31:21', '2020-08-15 07:31:21'),
('384a9e77-846e-446a-993b-da2584da5dcb', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/7\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 04:37:39', '2021-05-25 04:37:39'),
('3af39f84-cab4-4152-9202-d448435c67de', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/4\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 07:54:52', '2020-08-15 07:54:52'),
('4a0afdb0-71ad-4ce6-bc70-c92ef491a525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:51', '2020-08-17 21:13:51'),
('540ca3e9-0ff9-4e2e-9db3-6b5abc823422', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', '2020-08-15 07:30:44', '2020-08-14 07:12:28', '2020-08-15 07:30:44'),
('57e81736-27e6-47c1-8110-42b1ada5c1ea', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/14\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-29 06:06:54', '2021-05-29 06:06:54'),
('5da09dd1-3ffc-43b0-aba2-a4260ba4cc76', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:51:02', '2020-08-15 07:51:02'),
('5e91e603-024e-45c5-b22f-36931fef0d90', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/white-sports-casual-t\",\"fas\":\"fa-star\"}', NULL, '2020-08-15 07:44:07', '2020-08-15 07:44:07'),
('72d4b306-76b7-49eb-8d0a-40ff1cdf3751', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/coolpadbd.com\\/public\\/product-detail\\/coolpad-n8-plus\",\"fas\":\"fa-star\"}', NULL, '2021-06-16 11:09:42', '2021-06-16 11:09:42'),
('73a3b51a-416a-4e7d-8ca2-53b216d9ad8e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
('7a56f87f-0353-45c7-a189-274f78cd0502', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/10\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 05:43:50', '2021-05-25 05:43:50'),
('8605db5d-1462-496e-8b5f-8b923d88912c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/1\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-14 07:20:44', '2020-08-14 07:20:44'),
('9059f47c-9385-45a0-85bc-318775392017', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/8\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 04:42:09', '2021-05-25 04:42:09'),
('9a14d81d-5c02-4562-84de-c7ecaba9cc5d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/12\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 05:54:12', '2021-05-25 05:54:12'),
('9f93f0f3-b237-4fac-ad26-60b4f6381292', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/11\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 05:49:56', '2021-05-25 05:49:56'),
('a3efe9a1-ab5a-42ed-b910-1f739dcdb15f', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/13\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-29 00:04:26', '2021-05-29 00:04:26'),
('a6ec5643-748c-4128-92e2-9a9f293f53b5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/5\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-17 21:17:03', '2020-08-17 21:17:03'),
('ac5ccaad-a3fe-408d-961b-f77c897dc661', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/16\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-29 06:34:57', '2021-05-29 06:34:57'),
('b186a883-42f2-4a05-8fc5-f0d3e10309ff', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/2\",\"fas\":\"fa-file-alt\"}', '2020-08-15 04:17:24', '2020-08-14 22:14:55', '2020-08-15 04:17:24'),
('bd4cd486-494b-4152-a32d-3fa9e9a5fa4a', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/9\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-25 05:17:16', '2021-05-25 05:17:16'),
('d2fd7c33-b0fe-47d6-8bc6-f377d404080d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:08:50', '2020-08-14 07:08:50'),
('dcec92d4-2ff2-473b-8b0f-4b81fe5851f5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/127.0.0.1:8000\\/admin\\/order\\/6\",\"fas\":\"fa-file-alt\"}', NULL, '2021-05-09 03:37:16', '2021-05-09 03:37:16'),
('dff78b90-85c8-42ee-a5b1-de8ad0b21be4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/3\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 06:40:54', '2020-08-15 06:40:54'),
('e28b0a73-4819-4016-b915-0e525d4148f5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/lorem-ipsum-is-simply\",\"fas\":\"fa-star\"}', NULL, '2020-08-17 21:08:16', '2020-08-17 21:08:16'),
('ffffa177-c54e-4dfe-ba43-27c466ff1f4b', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('cod','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 'ORD-PMIQF5MYPK', 1, 14399.00, 1, 573.90, 13925.10, 6, 'cod', 'unpaid', 'delivered', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9800887778', 'NP', '44600', 'Koteshwor', 'Kathmandu', '2020-08-14 07:20:44', '2020-08-14 09:37:37'),
(2, 'ORD-YFF8BF0YBK', 1, 1939.03, 1, NULL, 2039.03, 1, 'cod', 'unpaid', 'delivered', 'Sandhya', 'Rai', 'user@gmail.com', '90000000990', 'NP', NULL, 'Lalitpur', NULL, '2020-08-14 22:14:49', '2020-08-14 22:15:19'),
(3, 'ORD-1CKWRWTTIK', 1, 200.00, 1, NULL, 300.00, 1, 'paypal', 'paid', 'process', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9807009999', 'NP', '44600', 'Kathmandu', 'Kadaghari', '2020-08-15 06:40:49', '2020-08-17 20:52:40'),
(4, 'ORD-HVO0KX0YHW', 33, 23660.00, 3, 150.00, 23910.00, 6, 'paypal', 'paid', 'process', 'Prajwal', 'Rai', 'prajwal.iar@gmail.com', '9800098878', 'NP', '44600', 'Pokhara', NULL, '2020-08-15 07:54:52', '2021-05-09 03:39:28'),
(7, 'ORD-60LZW3PQ3A', 33, 59500.00, 3, NULL, 59900.00, 4, 'cod', 'unpaid', 'process', 'Md Rakib', 'Islam', 'user@gmail.com', '01648477222', 'AD', '1100', 'Shipping Address', 'Billing Address', '2021-05-25 04:37:38', '2021-05-26 22:19:09'),
(8, 'ORD-AQGS3MC7Y9', 33, 16000.00, 1, NULL, 16000.00, 1, 'cod', 'unpaid', 'delivered', 'g fcsgvzxcfvz', 'cxzvzxcvz', 'zxcvzxcvz@gmail.com', '01674284254441', 'NP', '1200', 'fgbszfvzs', 'zxdcvzsdxfvg', '2021-05-25 04:42:09', '2021-05-26 22:19:16'),
(9, 'ORD-GW3S1CF2SF', 33, 16000.00, 4, NULL, 16400.00, 1, 'cod', 'unpaid', 'new', 'Rakibul', 'Hassan', 'rakibul@gmail.com', '01648488524', 'BD', '1200', 'Baridhara', 'Gulshan', '2021-05-25 05:17:16', '2021-05-25 05:17:16'),
(10, 'ORD-U02BPADZB4', 33, 46000.00, 3, NULL, 46000.00, 3, 'cod', 'unpaid', 'process', 'John', 'Kabir', 'john@gmail.com', '01648477222', 'BD', '1200', 'Gulshan 2', 'Shahjadpur', '2021-05-25 05:43:50', '2021-05-26 22:19:24'),
(11, 'ORD-VTIMNXEBKT', 33, 13500.00, 4, NULL, 13900.00, 1, 'cod', 'unpaid', 'new', 'vzxdz', 'zbfxcvzx', 'zxdvz@gmail.com', '01768618001', 'NP', '1200', 'sdfasdc', 'zsdcfasdfc', '2021-05-25 05:49:56', '2021-05-25 05:49:56'),
(12, 'ORD-STKTPXOSQK', 33, 15000.00, 3, NULL, 15400.00, 1, 'cod', 'unpaid', 'new', 'fsgdfsvsa', 'fdvgsdfas', 'adshjkfhaksj@gmail.com', '01648477222', 'BD', '1200', 'Shipping Adress', 'Billing Address', '2021-05-25 05:54:12', '2021-05-25 05:54:12'),
(13, 'ORD-FKUTXA6AKH', 33, 89500.00, 3, NULL, 89900.00, 6, 'cod', 'unpaid', 'new', 'bdjakhsdja', 'adcasd', 'asd@gmail.com', '01648477222', 'BD', '1200', 'dkashkjdcasd', 'dadsgvasdf', '2021-05-29 00:04:25', '2021-05-29 00:04:25'),
(14, 'ORD-XKW8VCICSW', 33, 13500.00, 2, NULL, 13550.00, 1, 'paypal', 'paid', 'new', 'xdfvbxcfg', 'fdghdsfx', 'fdxgbdxf@gmail.com', '01648477222', 'BD', '1200', 'hgndxfg', 'dxfgbf', '2021-05-29 06:06:54', '2021-05-29 06:06:54'),
(15, 'ORD-PBHPWKEHJE', 33, 13500.00, 3, NULL, 13620.00, 1, 'cod', 'unpaid', 'new', 'retgfasdxfsz', 'sdfasd', 'fdas@gmail.com', '01648477222', 'BD', '1200', 'dfsdafca', 'dcafcs', '2021-05-29 06:10:25', '2021-05-29 06:10:25'),
(16, 'ORD-QUNFRLUHXY', 33, 12000.00, 2, NULL, 12050.00, 1, 'cod', 'unpaid', 'new', 'd.gxjzdlfgd', 'dfgxd', 'fmsd@gmail.com', '01648475512', 'BD', '1200', 'dflzsjidf', 'sdfszd', '2021-05-29 06:34:57', '2021-05-29 06:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holidays` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$M2YUT0i3aOtIhsFbmFMvSeYczY/Tsy.OSr5lyZ.OuXn44WXCWs.ou', '2021-07-06 07:42:22');

-- --------------------------------------------------------

--
-- Table structure for table `popups`
--

CREATE TABLE `popups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `popups`
--

INSERT INTO `popups` (`id`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '/storage/photos/1/cybermonday.jpg', 'active', '2021-07-12 02:42:50', '2021-07-12 02:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `description`, `quote`, `photo`, `tags`, `post_cat_id`, `post_tag_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Where can I get some?', 'where-can-i-get-some', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader</span><br></h2>', '<blockquote style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-size: 24px; padding: 0px; font-family: DauphinPlain;\"><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span></blockquote>', NULL, '/storage/photos/1/Base.png', 'Enjoy', 2, NULL, 1, 'active', '2020-08-14 01:58:52', '2021-05-27 03:15:30'),
(3, 'The standard Lorem Ipsum passage, used since the 1500s', 'the-standard-lorem-ipsum-passage-used-since-the-1500s', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span><br></p>', '<h3 style=\"margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"text-align: justify; font-weight: 400;\">\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human&nbsp;</span><br></h3>', '<p>The standard Lorem Ipsum passage<br></p>', 'https://coolpadbd.com//storage/photos/1/Banner-583x275.jpg', 'Enjoy', 2, NULL, 33, 'active', '2020-08-14 02:59:33', '2021-06-15 09:41:09'),
(5, 'The standard Lorem Ipsum passage,', 'the-standard-lorem-ipsum-passage', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit</span><br></p>', '<h3 style=\"text-align: left; margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\"><span style=\"font-weight: 400; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is....</span><br></h3>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ...</span><br></p>', '/storage/photos/1/dvdv.jpg', 'Enjoy,2020,Visit nepal 2020', 1, NULL, 1, 'active', '2020-08-15 06:58:45', '2021-06-02 00:02:30'),
(6, 'Lorem Ipsum is simply', 'lorem-ipsum-is-simply', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br></p>', '<blockquote style=\"text-align: justify; margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; line-height: 24px;\"><font face=\"Open Sans, Arial, sans-serif\"><span style=\"font-size: 14px;\">Lorem Ipsum text is very rich text..... This is very important text data.</span></font></blockquote>', '<p>This is another quote</p>', '/storage/photos/1/111.jpg', 'Enjoy,2020', 2, NULL, 1, 'active', '2020-08-17 20:54:19', '2021-05-27 03:18:46'),
(7, 'Lorem Ipsum is simply', 'lorem-ipsum-is-simply-2105270852-907', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text.</span><br></p>', '<blockquote><font face=\"Open Sans, Arial, sans-serif\">Lorem Ipsum text is not a simple text... So This is very important</font></blockquote>', '<p>This is another quote<br></p>', '/storage/photos/1/111.jpg', 'Enjoy', 2, NULL, 1, 'active', '2021-05-26 23:08:52', '2021-05-27 03:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 'contrary', 'active', '2020-08-14 01:51:03', '2020-08-14 01:51:39'),
(2, 'Electronics', 'richard', 'active', '2020-08-14 01:51:22', '2020-08-14 01:52:00'),
(3, 'Cloths', 'cloths', 'active', '2020-08-14 01:52:22', '2020-08-14 01:52:22'),
(4, 'enjoy', 'enjoy', 'active', '2020-08-14 03:16:10', '2020-08-14 03:16:10'),
(5, 'Post Category', 'post-category', 'active', '2020-08-15 06:59:04', '2020-08-15 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `replied_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `replied_comment`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 'Testing comment edited', 'active', NULL, NULL, '2020-08-14 07:08:42', '2020-08-15 06:59:58'),
(2, NULL, 2, 'testing 2', 'active', NULL, 1, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
(3, NULL, 2, 'That\'s cool', 'active', NULL, 2, '2020-08-14 07:12:27', '2020-08-14 07:12:27'),
(4, NULL, 2, 'nice', 'active', NULL, NULL, '2020-08-15 07:31:19', '2020-08-15 07:31:19'),
(5, NULL, 5, 'nice blog', 'active', NULL, NULL, '2020-08-15 07:51:01', '2020-08-15 07:51:01'),
(6, NULL, 3, 'nice', 'active', NULL, NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29'),
(7, NULL, 3, 'really', 'active', NULL, 6, '2020-08-17 21:13:51', '2020-08-17 21:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Enjoy', 'enjoy', 'active', '2020-08-14 01:53:52', '2020-08-14 01:53:52'),
(2, '2020', '2020', 'active', '2020-08-14 01:54:09', '2020-08-14 01:54:09'),
(3, 'Visit nepal 2020', 'visit-nepal-2020', 'active', '2020-08-14 01:54:33', '2020-08-14 01:54:33'),
(4, 'Tag', 'tag', 'active', '2020-08-15 06:59:31', '2020-08-15 06:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `productbanners`
--

CREATE TABLE `productbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productbanners`
--

INSERT INTO `productbanners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CoolPad Cool', 'coolpad-cool-10', '/storage/photos/1/Banner-583x275.jpg', 'fffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 'active', '2021-06-06 22:40:40', '2021-06-07 22:16:47'),
(2, 'Cool 6', 'cool-6', '/storage/photos/1/Coolpad-Cool-watch-1S-289x275.jpg', '<p>ccccccccccccccccccccccc</p>', 'active', '2021-06-06 22:45:46', '2021-06-07 22:17:33'),
(3, 'Cool 5', 'cool-5', '/storage/photos/1/Coolpad-coolbuds-T1.jpg', '<p>gggggggggggggggggggggg</p>', 'active', '2021-06-06 22:49:35', '2021-06-07 22:17:23'),
(4, 'CoolPad Cool 10', 'coolpad-cool-10-2106075514-794', '/storage/photos/1/Upcoming-Banner-2.jpg', 'bbbbbbbbbbbbbbbbbbbbbbb', 'active', '2021-06-06 22:55:14', '2021-06-06 23:21:28');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'M',
  `condition` enum('default','new','hot') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) NOT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `summary`, `description`, `photo`, `stock`, `size`, `condition`, `status`, `price`, `discount`, `is_featured`, `cat_id`, `child_cat_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(16, 'Cool S', 'coolpad-n8-plus', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base2.png', 10, 'Black', 'new', 'active', 15000.00, 2.00, 1, 1, NULL, 3, '2021-05-20 06:14:08', '2021-06-08 00:27:50'),
(17, 'Cool 6 Plus', 'coolpad-cool6-plus-151620', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base2.png', 10, 'Red,Blue', 'new', 'active', 13500.00, 0.00, 1, 1, NULL, 2, '2021-05-21 22:10:40', '2021-06-08 00:27:37'),
(18, 'Cool 5', 'coolpad-cool5-2105233237-17', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.png', 10, 'Black,Red,Blue', 'new', 'active', 15000.00, 0.00, 1, 1, NULL, 3, '2021-05-22 22:32:37', '2021-06-08 00:27:29'),
(19, 'Cool 10', 'coolpad-cool10-2105233327-838', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.png', 9, 'Red', 'new', 'active', 16000.00, 1.00, 1, 1, NULL, 4, '2021-05-22 22:33:27', '2021-06-07 00:02:19'),
(20, 'Cool S', 'coolpad-n8-plus-2105274327-893', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.jpg,/storage/photos/1/Base.png,/storage/photos/1/Base1.jpg,/storage/photos/1/Base2.png', 1, 'Black', 'hot', 'active', 12000.00, 1.00, 1, 1, NULL, 1, '2021-05-27 02:43:27', '2021-07-10 22:49:34'),
(21, 'Cool 6', 'coolpad-n8-plus-2105270818-262', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.png', 100, 'Red,Blue,Black', 'hot', 'active', 15000.00, 0.00, 1, 1, NULL, 3, '2021-05-27 03:08:18', '2021-06-08 00:26:51'),
(23, 'Cool 5', 'coolpad-n8-plus-2105271022-153', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base2.png', 100, 'Black', 'hot', 'active', 11000.00, 1.00, 1, 1, NULL, 2, '2021-05-27 03:10:22', '2021-06-08 00:26:38'),
(24, 'Cool 5', 'coolpad-n8-plus-2105271131-386', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.png', 100, 'Blue,Red', 'hot', 'active', 50000.00, 2.00, 1, 1, NULL, 3, '2021-05-27 03:11:31', '2021-06-08 00:28:51'),
(25, 'Cool 20', 'coolpad-cool-20', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div><table class=\"table table-bordered\" style=\"width: 1598px;\"><tbody><tr><td>OS</td><td>Android</td></tr><tr><td>RAM</td><td>4GB</td></tr><tr><td>Product Dimention</td><td>15.7x23x3</td></tr><tr><td>Batteries</td><td>1 Lithium ion</td></tr><tr><td>Model Number</td><td>M-824520g3</td></tr><tr><td>Wireless Technology</td><td>cellular</td></tr><tr><td>Connectivity Technology</td><td>Bluetooth</td></tr><tr><td>Special Feature</td><td>Smart Technology</td></tr><tr><td>Other Display Feature</td><td>LED</td></tr><tr><td>Other Camera Feature</td><td>13 MP</td></tr><tr><td>Audio Jack</td><td>Gold Pin</td></tr><tr><td>Form Factor</td><td>Touchscreen Handy</td></tr><tr><td>Color&nbsp;</td><td>Blue</td></tr><tr><td>Battery Power</td><td>5000 mah</td></tr><tr><td>Phone Standby Time</td><td>120hrs</td></tr><tr><td>What\'s in the box</td><td>Handset, Charger, Usb cable, Headphone, Back cover, Quick start guide<br></td></tr><tr><td>Manufacturer</td><td><p>Coolpad Bangladesh</p></td></tr><tr><td>Country of Origin</td><td>China</td></tr><tr><td>Item Weight</td><td>195g</td></tr></tbody></table><div><br></div>', '<p><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\'</span><br></p>', '/storage/photos/1/Base.jpg,/storage/photos/1/Base.png,/storage/photos/1/Base1.jpg', 100, 'Black,Blue,Red', 'default', 'active', 16500.00, 0.00, 1, 1, NULL, 1, '2021-06-06 23:35:06', '2021-07-10 22:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` tinyint(4) NOT NULL DEFAULT 0,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rate`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 5, 'nice product', 'active', '2020-08-15 07:44:05', '2020-08-15 07:44:05'),
(2, NULL, NULL, 5, 'nice', 'active', '2020-08-17 21:08:14', '2020-08-17 21:18:31'),
(3, NULL, NULL, 5, 'Helloo', 'active', '2021-05-20 05:59:04', '2021-05-20 05:59:04'),
(4, 37, 16, 5, 'Good', 'active', '2021-06-16 11:09:42', '2021-06-16 11:09:42');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `short_des`, `logo`, `photo`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis unde omnis iste natus error sit voluptatem Excepteu\r\n\r\n                            sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspiciatis Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. sed ut perspi deserunt mollit anim id est laborum. sed ut perspi.', 'Coolpad is a young, innovative leading global smartphone brand that leverages its competitive advantages of R and D and manufacturing to advance in all walks of life. Leading with a customer-centric model, everything we do in science and technology innovation must relate back to the essence of the brand’s passion, vigor, and personality of the people we serve.', '/storage/photos/1/logo.png', '/storage/photos/1/human.jpg', 'MAKTEL LIMITED House-277(Level-4), Lane-4,  Baridhara DOHS, Dhaka-1206.', '+880 1844241530', 'info@maktel.com.bd', NULL, '2021-06-06 04:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Free shipping', '0.00', 'active', '2020-08-14 04:22:17', '2021-05-22 23:05:20'),
(2, 'Inside Dhaka', '50.00', 'active', '2020-08-14 04:22:41', '2020-08-14 04:22:41'),
(3, 'Outside Dhaka', '120.00', 'active', '2020-08-15 06:54:04', '2020-08-15 06:54:04'),
(4, 'Service point', '0.00', 'active', '2020-08-17 20:50:48', '2020-08-17 20:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `smallbanners`
--

CREATE TABLE `smallbanners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `smallbanners`
--

INSERT INTO `smallbanners` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Fist Small Banner', 'fist-small-banner', '/storage/photos/1/Banner-3.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley</span><br></p>', 'active', '2021-05-19 23:31:55', '2021-06-06 03:46:00'),
(3, 'Second Small Banner Title', 'second-small-banner-title', '/storage/photos/1/Banner-2.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley</span><br></p>', 'active', '2021-05-19 23:33:19', '2021-06-06 03:46:07'),
(4, 'Third Small Banner', 'third-small-banner', '/storage/photos/1/Banner-1.jpg', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley</span><br></p>', 'active', '2021-05-19 23:34:05', '2021-06-06 03:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `title`, `slug`, `photo`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Selina', 'selina', '/storage/photos/1/client-2.jpg', 'I\'m very happy with your service. I find your customer service outstanding, and your products quality and after sales service is best.', 'active', '2021-05-20 01:11:43', '2021-06-13 10:39:17'),
(3, 'Mr. Docklin', 'elegance-group', '/storage/photos/1/client-1.jpg', '<div><div>I am so pleased with the service I got from Coolpad. I was searching for a quality smartphone, capable with multi-tasking, long time gaming, and good battery backup. I bought a unit of Coolpad Cool S from this website which delivered the expected performance as I wanted. Moreover, speaking with their dedicated client service team helped me get exact product what I was looking for.</div><div>-Thank you Coolpad</div></div><div><br></div>', 'active', '2021-05-23 23:53:22', '2021-06-13 10:40:05'),
(4, 'Al Hasib', 'al-hasib', 'https://yourbigidea.xyz//storage/photos/1/testimonial-author-1.jpg', '<p>I am satisfied with the high-quality products and super supportive customer services of Coolpad. Your website is so informative, well-structured and smooth.<br></p>', 'active', '2021-06-13 10:42:52', '2021-06-13 10:42:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$I/OkTY6bdQOC/mv.hRFkkOmAsZeCWepvfube2da3Kb7uW8ytzEh5y', '/storage/photos/1/logo1.png', 'admin', NULL, NULL, 'active', 'neYEVz0v7gBD5Fg9m6B1olJFSTMVYdev8jJRlkDgSR6EKUREhjVor1m93EVg', NULL, '2021-05-17 00:51:23'),
(33, 'Md Rakibul', 'user@gmail.com', NULL, '$2y$10$jkcsBl1tOrVQBy8oYBoC4uZEjD1ay1FJp7MT.br0eBL.oU1Wrklh.', 'https://yourbigidea.xyz//storage/photos/1/client-1.jpg', 'user', NULL, NULL, 'active', NULL, '2021-05-22 23:39:56', '2021-06-08 13:23:38'),
(37, 'Shimul Bhattacharjee', 'shimul0194@gmail.com', NULL, '$2y$10$i.ASf/A1OATJmalAXYnQfOPW6moaWaXEHJ/S9k7nOPAMazTW2v3j2', NULL, 'user', NULL, NULL, 'active', NULL, '2021-06-16 10:54:55', '2021-06-16 10:54:55'),
(38, 'Abid', 'abid@gmail.com', NULL, '$2y$10$8yXB93JRWnRdxjfY2K5t1.LpOIxkOo1F8aBXqkpo2.tSvlfq9r2Mm', NULL, 'user', NULL, NULL, 'active', NULL, '2021-08-23 04:44:12', '2021-08-23 04:44:12');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `slug`, `image`, `video_url`, `status`, `created_at`, `updated_at`) VALUES
(2, 'CoolPad Cool S', 'cool-68', '/storage/photos/1/cool-s.jpg', 'https://www.youtube.com/watch?v=3lIgrRfN3jY', 'active', '2021-05-31 05:47:32', '2021-06-06 03:55:07'),
(3, 'CoolPad N7 Air', 'coolpad-68', '/storage/photos/1/n7-air.jpg', 'https://www.youtube.com/watch?v=IN2nob7X3uE', 'active', '2021-05-31 05:48:42', '2021-06-13 10:36:24'),
(4, 'CoolPad N7 Plus', 'coolpad-10', '/storage/photos/1/N7-plus.jpg', 'https://www.youtube.com/watch?v=1pTkIFexo9o', 'active', '2021-05-31 05:49:06', '2021-06-13 10:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `wheretobuys`
--

CREATE TABLE `wheretobuys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wheretobuys`
--

INSERT INTO `wheretobuys` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Cool S', 'https://www.coolpadindia.com/', '2021-07-10 06:46:20', '2021-07-10 22:43:07'),
(2, 'N7 Plus', 'https://www.coolpadindia.com/', '2021-07-10 06:14:31', '2021-07-10 06:46:00'),
(3, 'N7 Air', 'https://www.coolpadindia.com/', '2021-07-10 06:13:17', '2021-07-10 22:31:31'),
(21, 'Accessories Url', 'https://www.coolpadindia.com/', '2021-07-10 22:41:19', '2021-07-10 22:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `product_id`, `cart_id`, `user_id`, `price`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(5, 19, 14, 1, 15840.00, 1, 15840.00, '2021-05-22 22:57:24', '2021-05-22 23:08:45'),
(6, 17, NULL, 1, 13500.00, 1, 13500.00, '2021-05-22 23:09:22', '2021-05-22 23:09:22'),
(7, 19, NULL, 33, 15840.00, 1, 15840.00, '2021-05-22 23:41:10', '2021-05-25 06:31:22'),
(8, 16, NULL, 33, 14700.00, 1, 14700.00, '2021-05-22 23:41:37', '2021-05-25 06:31:22'),
(9, 17, NULL, 33, 13500.00, 1, 13500.00, '2021-05-29 06:36:18', '2021-05-29 06:36:18'),
(10, 24, NULL, 1, 49000.00, 1, 49000.00, '2021-07-10 22:54:25', '2021-07-10 22:54:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `popups`
--
ALTER TABLE `popups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  ADD KEY `posts_post_tag_id_foreign` (`post_tag_id`),
  ADD KEY `posts_added_by_foreign` (`added_by`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_tags_slug_unique` (`slug`);

--
-- Indexes for table `productbanners`
--
ALTER TABLE `productbanners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `productbanners_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_child_cat_id_foreign` (`child_cat_id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smallbanners`
--
ALTER TABLE `smallbanners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `smallbanners_slug_unique` (`slug`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testimonials_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wheretobuys`
--
ALTER TABLE `wheretobuys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_cart_id_foreign` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popups`
--
ALTER TABLE `popups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productbanners`
--
ALTER TABLE `productbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `smallbanners`
--
ALTER TABLE `smallbanners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wheretobuys`
--
ALTER TABLE `wheretobuys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_tag_id_foreign` FOREIGN KEY (`post_tag_id`) REFERENCES `post_tags` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
