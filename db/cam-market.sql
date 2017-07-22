-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2017 at 03:01 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cam-market`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `public_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `parent_id`, `name`, `public_name`, `value`, `position`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Size', 'Size', NULL, NULL, 1, '2017-05-15 01:15:31', '2017-05-15 01:15:31', NULL),
(2, NULL, 'Color', 'Color', NULL, NULL, 1, '2017-05-15 01:16:40', '2017-05-15 01:16:40', NULL),
(3, 1, 'M', NULL, NULL, 3, 1, '2017-05-16 06:32:07', '2017-05-16 06:32:07', NULL),
(4, 2, 'Blue', NULL, 'rgba(255,255,255,1)', 4, 1, '2017-05-16 06:32:54', '2017-05-28 06:00:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_id`, `name`, `slug`, `path`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, 'Automotive & Motorcycle', 'automotive-motorcycle', 'uploads/img/category/', 'Automotive & Motorcycle', 1, '2017-05-24 01:55:22', '2017-06-02 12:05:33', NULL),
(2, 1, 'Drink', 'drink', '', 'Drink is sub category of Beverage category.', 1, '2017-05-27 05:14:02', '2017-06-02 04:54:27', NULL),
(3, NULL, 'Electronics', 'electronics', '', 'Electronics', 1, '2017-05-28 18:12:20', '2017-06-02 04:54:34', NULL),
(4, NULL, 'Sports & Outdoors', 'sports-outdoors', '', 'Sports & Outdoors', 1, '2017-05-28 18:12:47', '2017-06-02 04:55:01', NULL),
(5, NULL, 'Smartphone & Tablets', 'smartphone-tablets', '', 'Smartphone & Tablets', 1, '2017-05-28 18:13:27', '2017-06-02 04:54:39', NULL),
(6, NULL, 'Health & Beauty', 'health-beauty', '', 'Health & Beauty', 1, '2017-05-28 18:13:54', '2017-06-02 04:54:46', NULL),
(7, NULL, 'Bags, Shoes & Accessories', 'bags-shoes-accessories', 'uploads/img/category/', 'Bags, Shoes & Accessories', 1, '2017-05-28 18:14:25', '2017-06-02 12:29:41', NULL),
(8, NULL, 'Computers & Networking', NULL, '', 'Computers & Networking', 1, '2017-05-28 18:15:00', '2017-05-28 18:15:00', NULL),
(9, NULL, 'Laptops & Accessories', 'laptops-accessories', '', 'Laptops & Accessories', 1, '2017-05-28 18:15:23', '2017-06-02 05:30:32', NULL),
(10, NULL, 'Entertainment', 'entertainment', '', 'Entertainment', 1, '2017-05-28 18:15:51', '2017-06-02 08:24:22', NULL),
(11, 3, 'electronic', NULL, '', 'electronic', 1, '2017-05-28 18:18:49', '2017-05-28 18:18:49', NULL),
(12, 11, 'Camera & Camcorders', NULL, '', 'Camera & Camcorders', 1, '2017-05-28 18:19:35', '2017-05-28 18:19:35', NULL),
(13, 11, 'Electronic', NULL, '', 'Electronic', 1, '2017-05-28 18:23:44', '2017-05-28 18:23:44', NULL),
(14, 1, 'Laptop', NULL, '', 'Laptop', 1, '2017-05-28 18:24:47', '2017-05-28 18:24:47', NULL),
(15, 2, 'Sub Drink', 'sub-drink', '', 'it is just sub drink category', 1, '2017-06-02 07:57:08', '2017-06-02 07:57:08', NULL),
(16, 12, 'Sub of Camera', 'sub-of-camera', '', 'it is just sub of camera and camcorders', 1, '2017-06-02 08:03:19', '2017-06-02 08:03:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_id`, `city_id`, `name`, `code`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 'Cambodia', '+855', 'Cambodia', 1, '2017-05-15 04:38:04', '2017-05-15 04:38:04', NULL),
(2, 1, NULL, 'Phnom Penh', '12000', 'Cambodia', 1, '2017-05-15 04:38:30', '2017-05-15 04:38:30', NULL),
(3, 1, 2, 'Phnom Penh Thmei', '12100', 'Phnom Penh Thmei', 1, '2017-05-15 04:39:01', '2017-05-15 04:39:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol_native` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_digits` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rounding` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_plural` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `symbol`, `name`, `symbol_native`, `decimal_digits`, `rounding`, `code`, `name_plural`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '$', 'US Dollar', '$', '2', '0', 'USD', 'US dollars', 1, '2017-05-26 23:31:23', '2017-05-26 23:31:23', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `cus_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `verified_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_enroll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enrollment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` int(10) UNSIGNED DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speed` int(11) DEFAULT NULL,
  `pause_on_hover` tinyint(1) NOT NULL DEFAULT '0',
  `loop_forever` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `parent_id`, `name`, `caption`, `description`, `url`, `img_path`, `img_name`, `speed`, `pause_on_hover`, `loop_forever`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5000, 1, 1, 1, '2017-05-15 01:07:50', '2017-05-28 04:45:57', NULL),
(2, 1, 'Khan Russei keo', 'Booking Now', 'Sign up\r\nImage Upload with preview and Delete option - Javascript / Jquery', 'https://www.bookingkh.com', 'uploads/home-slider/img/', '1496223803_khan_russei_keo_home_slider_592e903b8eaa5.jpg', NULL, 0, 0, 1, '2017-05-28 04:54:11', '2017-05-31 02:43:23', NULL),
(3, 1, 'Elouise Larson', 'Order Now', 'Sign up\r\nImage Upload with preview and Delete option - Javascript / Jquery', 'https://www.bookingkh.com', 'uploads/home-slider/img/', '1496223812_elouise_larson_home_slider_592e9044b76d4.jpg', NULL, 0, 0, 1, '2017-05-28 04:56:17', '2017-05-31 02:43:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imageables`
--

CREATE TABLE `imageables` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_id` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `imageables`
--

INSERT INTO `imageables` (`id`, `image_id`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(33, 33, 2, 'App\\Model\\Product', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`, `imageable_id`, `imageable_type`, `created_at`, `updated_at`) VALUES
(33, 'coca_cola_592ae8d60c5b3_1495984342.jpg', 0, '', '2017-05-28 08:12:22', '2017-05-28 08:12:22'),
(45, 'ali_prohaska_592fcd614fce7_1496304993.jpg', 1, 'App\\Model\\Product', '2017-06-01 01:16:33', '2017-06-01 01:16:33'),
(46, 'ali_prohaska_592fcd616d60b_1496304993.jpg', 1, 'App\\Model\\Product', '2017-06-01 01:16:33', '2017-06-01 01:16:33'),
(49, 'coca_cola_592fcd716d282_1496305009.jpg', 2, 'App\\Model\\Product', '2017-06-01 01:16:49', '2017-06-01 01:16:49'),
(48, 'coca_cola_592fcd7150885_1496305009.jpg', 2, 'App\\Model\\Product', '2017-06-01 01:16:49', '2017-06-01 01:16:49'),
(47, 'coca_cola_592fcd713509e_1496305009.jpg', 2, 'App\\Model\\Product', '2017-06-01 01:16:49', '2017-06-01 01:16:49'),
(50, 'coca_cola_592fcd7187e8d_1496305009.jpg', 2, 'App\\Model\\Product', '2017-06-01 01:16:49', '2017-06-01 01:16:49'),
(51, 'ali_prohaska_5931200d26f67_1496391693.jpg', 3, 'App\\Model\\Product', '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(52, 'ali_prohaska_5931200d45690_1496391693.jpg', 3, 'App\\Model\\Product', '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(53, 'ali_prohaska_5931200d6220c_1496391693.jpg', 3, 'App\\Model\\Product', '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(54, 'ali_prohaska_5931200d7dea4_1496391693.jpg', 3, 'App\\Model\\Product', '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(55, 'coca_cola_5931208d06393_1496391821.jpg', 4, 'App\\Model\\Product', '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(56, 'coca_cola_5931208d251a7_1496391821.jpg', 4, 'App\\Model\\Product', '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(57, 'coca_cola_5931208d44158_1496391821.jpg', 4, 'App\\Model\\Product', '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(58, 'ali_prohaska_593120a2a6cee_1496391842.jpg', 5, 'App\\Model\\Product', '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(59, 'ali_prohaska_593120a2c5f13_1496391842.jpg', 5, 'App\\Model\\Product', '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(60, 'ali_prohaska_593120a2e35cb_1496391842.jpg', 5, 'App\\Model\\Product', '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(61, 'coca_cola_59312db171838_1496395185.jpg', 32, 'App\\Model\\Product', '2017-06-02 09:19:45', '2017-06-02 09:19:45'),
(62, 'coca_cola_59312db192a43_1496395185.jpg', 32, 'App\\Model\\Product', '2017-06-02 09:19:45', '2017-06-02 09:19:45'),
(63, 'coca_cola_59312db1ad36d_1496395185.jpg', 32, 'App\\Model\\Product', '2017-06-02 09:19:45', '2017-06-02 09:19:45'),
(64, 'coca_cola_59312db1c9664_1496395185.jpg', 32, 'App\\Model\\Product', '2017-06-02 09:19:45', '2017-06-02 09:19:45'),
(65, 'coca_cola_59312dc754617_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(66, 'coca_cola_59312dc76f686_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(67, 'coca_cola_59312dc78ae65_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(68, 'coca_cola_59312dc7a5db5_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(69, 'coca_cola_59312dc7c1306_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(70, 'coca_cola_59312dc7e0c51_1496395207.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:07', '2017-06-02 09:20:07'),
(71, 'coca_cola_59312dc8068d0_1496395208.jpg', 26, 'App\\Model\\Product', '2017-06-02 09:20:08', '2017-06-02 09:20:08'),
(87, 'bags_shoes_accessories_59315a35d5519_1496406581.jpg', 7, 'App\\Model\\Category', '2017-06-02 12:29:41', '2017-06-02 12:29:41'),
(86, 'automotive_motorcycle_593158b3a7fb6_1496406195.jpg', 1, 'App\\Model\\Category', '2017-06-02 12:23:15', '2017-06-02 12:23:15'),
(88, 'new_prodcuct_5935098ca29fc_1496648076.PNG', 33, 'App\\Model\\Product', '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(89, 'new_prodcuct_5935098cdd145_1496648076.png', 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(90, 'new_prodcuct_5935098d236ae_1496648077.png', 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(91, 'new_prodcuct_1_593509c7565b5_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(92, 'new_prodcuct_1_593509c7a5432_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(93, 'new_prodcuct_1_593509c7e01ee_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:36', '2017-06-05 07:35:36'),
(94, 'new_prodcuct_2_59350a3fa0edb_1496648255.jpg', 35, 'App\\Model\\Product', '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(95, 'new_prodcuct_2_59350a402533a_1496648256.png', 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(96, 'new_prodcuct_2_59350a4066ffb_1496648256.jpg', 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Englsh', 'It is just language description.', 1, '2017-05-27 02:00:40', '2017-05-27 02:00:40', NULL),
(2, 'Khmer', 'It is just khmer language description', 1, '2017-05-27 02:01:12', '2017-05-27 02:01:12', NULL),
(3, 'Japan', 'Tis iskis', 1, '2017-05-28 06:46:25', '2017-05-28 06:46:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(59, '2014_10_12_000000_create_users_table', 1),
(60, '2014_10_12_100000_create_password_resets_table', 1),
(61, '2017_05_10_025246_create_customers_table', 1),
(62, '2017_05_10_072848_create_countries_table', 1),
(63, '2017_05_10_115211_create_categories_table', 1),
(74, '2017_05_10_153226_create_products_table', 5),
(71, '2017_05_10_153746_create_home_sliders_table', 2),
(66, '2017_05_10_155508_create_currencies_table', 1),
(67, '2017_05_12_050937_create_attributes_table', 1),
(73, '2017_05_24_090250_create_languages_table', 4),
(76, '2017_05_27_013229_create_product_languages_table', 6),
(82, '2017_05_27_150212_create_images_table', 7),
(84, '2017_05_28_140410_create_tags_table', 8),
(87, '2017_06_01_184409_create_shoppingcart_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `cost` decimal(8,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `discount_type` int(11) DEFAULT '0',
  `discount` decimal(8,0) DEFAULT NULL,
  `short_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `currency_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `can_order` int(10) NOT NULL DEFAULT '0',
  `new` tinyint(4) NOT NULL DEFAULT '0',
  `popular` tinyint(4) NOT NULL DEFAULT '0',
  `img_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ali Prohaska', 'ali-prohaska1', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(2, 'Coca Cola', 'coca-cola2', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(3, 'Ali Prohaska', 'ali-prohaska3', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(4, 'Coca Cola', 'coca-cola4', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(5, 'Ali Prohaska', 'ali-prohaska5', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(6, 'Coca Cola', 'coca-cola6', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(7, 'Ali Prohaska', 'ali-prohaska7', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(8, 'Coca Cola', 'coca-cola8', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(9, 'Ali Prohaska', 'ali-prohaska9', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(10, 'Coca Cola', 'coca-cola10', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(11, 'Ali Prohaska', 'ali-prohaska11', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(12, 'Coca Cola', 'coca-cola12', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(13, 'Ali Prohaska', 'ali-prohaska13', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(14, 'Coca Cola', 'coca-cola14', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(15, 'Ali Prohaska', 'ali-prohaska15', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(16, 'Coca Cola', 'coca-cola16', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(17, 'Ali Prohaska', 'ali-prohaska17', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(18, 'Coca Cola', 'coca-cola18', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(19, 'Ali Prohaska', 'ali-prohaska19', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(20, 'Coca Cola', 'coca-cola20', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(21, 'Ali Prohaska', 'ali-prohaska21', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(22, 'Coca Cola', 'coca-cola22', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(23, 'Ali Prohaska', 'ali-prohaska23', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(24, 'Coca Cola', 'coca-cola24', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(25, 'Ali Prohaska', 'ali-prohaska25', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(26, 'Coca Cola', 'coca-cola26', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, NULL, 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-02 09:20:08', NULL),
(27, 'Ali Prohaska', 'ali-prohaska27', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(28, 'Coca Cola', 'coca-cola28', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(29, 'Ali Prohaska', 'ali-prohaska29', NULL, '10.00', 45, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(30, 'Coca Cola', 'coca-cola30', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(31, 'Ali Prohaska', 'ali-prohaska31', NULL, '10.00', NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, 1, 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(32, 'Coca Cola', 'coca-cola32', NULL, '15.00', 60, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, 1, 1, NULL, 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-02 09:19:45', NULL),
(33, 'New Prodcuct', 'new-prodcuct-of-lankunding', NULL, '50.00', 62, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000033', NULL, NULL, 1, 1, NULL, 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:34:36', '2017-06-05 07:34:36', NULL),
(34, 'New Prodcuct 1', 'new-prodcuct-1-of-lankunding', NULL, '50.00', 62, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000034', NULL, NULL, 1, 1, NULL, 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:35:35', '2017-06-05 07:35:35', NULL),
(35, 'New Prodcuct 2', 'new-prodcuct-2-of-lankunding', NULL, '50.00', 62, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000035', NULL, NULL, 1, 1, NULL, 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:37:35', '2017-06-05 07:37:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_categories`
--

INSERT INTO `products_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 11, 2, '2017-05-27 05:14:21', '2017-05-27 05:14:21'),
(3, 1, 1, '2017-05-27 05:15:12', '2017-05-27 05:15:12'),
(4, 12, 2, '2017-05-27 06:02:13', '2017-05-27 06:02:13'),
(6, 2, 5, '2017-06-02 06:59:26', '2017-06-02 06:59:26'),
(7, 13, 6, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(8, 3, 8, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(9, 3, 10, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(10, 14, 14, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(11, 3, 16, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(12, 4, 3, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(13, 15, 7, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(14, 4, 10, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(15, 5, 4, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(16, 16, 12, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(17, 5, 16, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(18, 17, 2, '2017-05-27 05:14:21', '2017-05-27 05:14:21'),
(19, 18, 1, '2017-05-27 05:15:12', '2017-05-27 05:15:12'),
(20, 19, 2, '2017-05-27 06:02:13', '2017-05-27 06:02:13'),
(21, 20, 5, '2017-06-02 06:59:26', '2017-06-02 06:59:26'),
(22, 22, 6, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(23, 23, 8, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(24, 24, 10, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(25, 25, 14, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(26, 26, 16, '2017-06-02 08:21:33', '2017-06-02 08:21:33'),
(27, 27, 3, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(28, 28, 7, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(29, 29, 10, '2017-06-02 08:23:41', '2017-06-02 08:23:41'),
(30, 30, 4, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(31, 31, 12, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(32, 32, 16, '2017-06-02 08:24:02', '2017-06-02 08:24:02'),
(33, 33, 5, '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(34, 33, 14, '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(35, 33, 6, '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(36, 33, 8, '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(37, 34, 5, '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(38, 34, 14, '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(39, 34, 6, '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(40, 34, 8, '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(41, 35, 5, '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(42, 35, 14, '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(43, 35, 6, '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(44, 35, 8, '2017-06-05 07:37:35', '2017-06-05 07:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `products_languages`
--

CREATE TABLE `products_languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `taggable_id` int(11) NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taggables`
--

INSERT INTO `taggables` (`id`, `tag_id`, `taggable_id`, `taggable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'App\\Model\\Product', '2017-06-05 06:58:08', '2017-06-05 06:58:08'),
(2, 2, 1, 'App\\Model\\Product', '2017-06-05 06:58:08', '2017-06-05 06:58:08'),
(3, 3, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(4, 3, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(5, 4, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(6, 4, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(7, 5, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(8, 5, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(22, 2, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(21, 5, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(20, 4, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(19, 3, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tags`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'good news for here now', 'good-news-for-here-now', '2017-06-05 06:58:08', '2017-06-05 06:58:08'),
(2, 'and now', 'and-now', '2017-06-05 06:58:08', '2017-06-05 06:58:08'),
(3, 'tag', 'tag', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(4, 'new', 'new', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(5, 'nice', 'nice', '2017-06-05 07:34:37', '2017-06-05 07:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'To verified partner by admin',
  `gender` enum('0','1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `role` enum('0','1','2') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `temp_enroll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enrollment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `email`, `password`, `user_id`, `gender`, `role`, `temp_enroll`, `enrollment_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'lankunding', NULL, 'lesly.boyer@example.com', '$2y$10$Fq1bv2C/P263t8l8ThF42.RcvxJwetWl8omuBDzv.dXCQNfzAbfwq', NULL, '0', '0', NULL, NULL, 'x5WNsSUaWG2Pm4wz8mbPEmVdegaDnYs6FhqCD0ua3VvEMxX3NLShZ6knF7mF', '2017-05-12 09:47:28', '2017-05-12 09:47:28', NULL),
(2, 'bernita79', NULL, 'lucie38@example.com', '$2y$10$Fq1bv2C/P263t8l8ThF42.RcvxJwetWl8omuBDzv.dXCQNfzAbfwq', NULL, '0', '0', NULL, NULL, 'Mq5MXctxvY', '2017-05-12 09:47:28', '2017-05-12 09:47:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attributes_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `countries_country_id_foreign` (`country_id`),
  ADD KEY `countries_city_id_foreign` (`city_id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`),
  ADD KEY `customers_verified_by_foreign` (`verified_by`),
  ADD KEY `customers_city_id_foreign` (`city_id`),
  ADD KEY `customers_country_id_foreign` (`country_id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `home_sliders_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `imageables`
--
ALTER TABLE `imageables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imageables_image_id_foreign` (`image_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_product_id_foreign` (`product_id`),
  ADD KEY `products_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `products_languages`
--
ALTER TABLE `products_languages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_languages_product_id_foreign` (`product_id`),
  ADD KEY `products_languages_language_id_foreign` (`language_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taggables_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `imageables`
--
ALTER TABLE `imageables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `products_languages`
--
ALTER TABLE `products_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
