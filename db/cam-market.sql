-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2017 at 04:36 PM
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
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_complement` longtext COLLATE utf8mb4_unicode_ci,
  `zip_postal_code` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `customer_id`, `alias`, `company`, `vat_number`, `first_name`, `last_name`, `address`, `address_complement`, `zip_postal_code`, `city_id`, `country_id`, `phone`, `created_at`, `updated_at`) VALUES
(1, 7, 'My Address', 'GDNT', '9229943dkd', 'Chantouch', 'Sek', '#9B, Chakangreler,Meanchey, Phnom Penh, Cambodia', 'Phnom Penh', 12000, 2, 1, '070375783', '2017-06-27 23:15:01', '2017-06-27 23:15:01');

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
(4, 2, 'Blue', NULL, 'rgba(255,255,255,1)', 4, 1, '2017-05-16 06:32:54', '2017-05-28 06:00:12', NULL),
(5, NULL, 'Package', 'Package like a box, a can,....', NULL, NULL, 1, '2017-07-06 16:17:22', '2017-07-06 16:21:54', NULL),
(6, NULL, 'Length', 'Length has like Meters, centimeter, ...............', NULL, NULL, 1, '2017-07-06 16:17:57', '2017-07-06 16:23:32', NULL),
(7, NULL, 'Weight', 'Weight has sub like Kg, .....', NULL, NULL, 1, '2017-07-06 16:18:48', '2017-07-06 16:21:11', NULL),
(8, 5, 'Box', NULL, NULL, 8, 1, '2017-07-06 16:28:27', '2017-07-06 16:28:27', NULL),
(9, 5, 'Can', NULL, NULL, 9, 1, '2017-07-06 16:30:52', '2017-07-06 16:30:52', NULL),
(10, 5, 'Bottle', NULL, NULL, 10, 1, '2017-07-06 16:32:44', '2017-07-06 16:32:44', NULL);

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
(5, NULL, 'Smartphone & Tablets', 'smartphone-tablets', 'uploads/img/category/', 'Smartphone & Tablets', 1, '2017-05-28 18:13:27', '2017-06-17 16:03:44', NULL),
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
(16, 12, 'Sub of Camera', 'sub-of-camera', '', 'it is just sub of camera and camcorders', 1, '2017-06-02 08:03:19', '2017-06-02 08:03:19', NULL),
(17, 10, 'Advertising', 'advertising', 'uploads/img/category/', 'Advertising', 1, '2017-06-17 16:00:46', '2017-06-17 16:00:46', NULL),
(18, NULL, 'Advertising1', 'advertising1', 'uploads/img/category/', 'sdffsdf', 1, '2017-06-17 16:02:54', '2017-06-17 16:02:54', NULL);

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
(3, 1, 2, 'Phnom Penh Thmei', '12100', 'Phnom Penh Thmei', 1, '2017-05-15 04:39:01', '2017-05-15 04:39:01', NULL),
(4, 1, NULL, 'Kampong Chnange', '8837472', 'My Kampong Chnange city', 1, '2017-06-08 15:18:26', '2017-06-08 15:18:26', NULL),
(5, 1, 4, 'Sammaki MeanChey', '23434', 'yesksll sdlkgms', 1, '2017-06-08 15:19:54', '2017-06-08 15:19:54', NULL);

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
  `rate` float DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `symbol`, `name`, `symbol_native`, `decimal_digits`, `rounding`, `code`, `name_plural`, `rate`, `is_default`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '$', 'US Dollar', '$', '2', '0', 'USD', 'US dollars', NULL, 0, 1, '2017-05-26 23:31:23', '2017-05-26 23:31:23', NULL),
(2, 'KHR', 'Cambodian Riel', '៛', '2', '0', 'KHR', 'Cambodian riels', NULL, 0, 1, '2017-06-10 16:28:30', '2017-06-10 16:28:30', NULL),
(3, '฿', 'Thai Baht', '฿', '2', '0', 'THB', 'Thai baht', NULL, 0, 1, '2017-06-14 15:36:27', '2017-06-14 15:36:27', NULL),
(4, '₫', 'Vietnamese Dong', '₫', '0', '0', 'VND', 'Vietnamese dong', NULL, 0, 1, '2017-06-14 15:38:16', '2017-07-15 17:37:22', '2017-07-15 17:37:22'),
(5, '€', 'Euro', '€', '2', '0', 'EUR', 'euros', NULL, 0, 1, '2017-06-14 16:37:17', '2017-07-15 17:37:17', '2017-07-15 17:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `cus_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commune_id` int(11) UNSIGNED NOT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `country_id` int(10) UNSIGNED DEFAULT NULL,
  `verified_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temp_enroll` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enrollment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified_by` int(10) UNSIGNED DEFAULT NULL,
  `verified_at` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `private_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `cus_code`, `first_name`, `last_name`, `username`, `phone_number`, `email`, `mobile`, `password`, `commune_id`, `city_id`, `country_id`, `verified_code`, `temp_enroll`, `enrollment_id`, `verified_by`, `verified_at`, `status`, `private_note`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, 'customer@gmail.com', NULL, 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'Miss Glenna Ankunding', NULL, 'miss-glenna-ankunding', NULL, 'hmonahan@example.com', NULL, '$2y$10$SM9HxG4KPAdXLF8DhsB.4.aY.ZmGXqIfeuLHmBjjyHavq4Czx9Dji', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'jzcfFWNQOM', '2017-06-06 14:41:15', '2017-06-06 14:41:15', NULL),
(3, NULL, 'Otha Johnston', NULL, 'otha-johnston', NULL, 'wisoky.wanda@example.org', NULL, '$2y$10$SM9HxG4KPAdXLF8DhsB.4.aY.ZmGXqIfeuLHmBjjyHavq4Czx9Dji', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'iZWHvRvsqc', '2017-06-06 14:41:15', '2017-06-06 14:41:15', NULL),
(7, 'C06201700004', 'Chantouch', 'Sek', NULL, '070375783', 'chantouchsek.cs83@gmail.com', NULL, '$2y$10$.vyeU.py3bufLVbjfkUyleIG9y5u.VmL7oHRUHNOYsDEtd4grK.9m', 3, 2, 1, NULL, 'TMP_CM201700004', NULL, NULL, NULL, 1, 'He is a good customer for us.sfsfsfsfsdfsdsfsfdfsfddsfsfsdfsfsdfdsfsfsfsddf', 'IZGUJ98PpqWJFt3bkUfZrbUCV64fbSk8EcIEllohICK8K9fB84ZxzX9cDd5B', '2017-06-07 16:19:59', '2017-07-15 09:34:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `f_x_rates`
--

CREATE TABLE `f_x_rates` (
  `id` int(10) UNSIGNED NOT NULL,
  `source_currency` int(10) UNSIGNED DEFAULT NULL,
  `target_currency` int(10) UNSIGNED DEFAULT NULL,
  `exchange_rate` decimal(8,2) DEFAULT NULL,
  `valid_from_date` date DEFAULT NULL,
  `valid_to_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(2, 1, 'Khan Russei keo', 'Booking Now', '<div class="title1"><span class="txt"><strong>Dream</strong> soluton</span></div><div class="title2"><span class="txt">For every type of sleeper</span></div>', 'https://www.bookingkh.com', 'uploads/home-slider/img/', '1496223803_khan_russei_keo_home_slider_592e903b8eaa5.jpg', NULL, 0, 0, 1, '2017-05-28 04:54:11', '2017-07-22 15:17:11', NULL),
(3, 1, 'Elouise Larson', 'Order Now', '<div class="title1"><span class="txt"><strong>Dream</strong> soluton</span></div><div class="title2"><span class="txt">For every type of sleeper</span></div>', 'https://www.bookingkh.com', 'uploads/home-slider/img/', '1496223812_elouise_larson_home_slider_592e9044b76d4.jpg', NULL, 0, 0, 1, '2017-05-28 04:56:17', '2017-07-07 17:13:50', NULL);

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
(87, 'bags_shoes_accessories_594552d4b5c55_1497715412.jpg', 7, 'App\\Model\\Category', '2017-06-02 12:29:41', '2017-06-17 16:03:32'),
(86, 'automotive_motorcycle_59455304ab222_1497715460.jpg', 1, 'App\\Model\\Category', '2017-06-02 12:23:15', '2017-06-17 16:04:20'),
(88, 'new_prodcuct_5935098ca29fc_1496648076.PNG', 33, 'App\\Model\\Product', '2017-06-05 07:34:36', '2017-06-05 07:34:36'),
(89, 'new_prodcuct_5935098cdd145_1496648076.png', 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(90, 'new_prodcuct_5935098d236ae_1496648077.png', 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(91, 'new_prodcuct_1_593509c7565b5_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(92, 'new_prodcuct_1_593509c7a5432_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:35', '2017-06-05 07:35:35'),
(93, 'new_prodcuct_1_593509c7e01ee_1496648135.PNG', 34, 'App\\Model\\Product', '2017-06-05 07:35:36', '2017-06-05 07:35:36'),
(94, 'new_prodcuct_2_59350a3fa0edb_1496648255.jpg', 35, 'App\\Model\\Product', '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(95, 'new_prodcuct_2_59350a402533a_1496648256.png', 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(96, 'new_prodcuct_2_59350a4066ffb_1496648256.jpg', 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(124, 'P1000_9.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(122, 'P1000_7.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(123, 'P1000_8.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(121, 'P1000_6.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(115, 'P1000.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:11', '2017-07-26 14:09:11'),
(116, 'P1000_1.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:11', '2017-07-26 14:09:11'),
(117, 'P1000_2.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:11', '2017-07-26 14:09:11'),
(118, 'P1000_3.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:11', '2017-07-26 14:09:11'),
(119, 'P1000_4.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(120, 'P1000_5.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:12', '2017-07-26 14:09:12'),
(106, 'advertising1_594552ae9be1d_1497715374.jpg', 18, 'App\\Model\\Category', '2017-06-17 16:02:54', '2017-06-17 16:02:54'),
(130, 'P998.jpeg', 1047, 'App\\Model\\Product', '2017-07-26 16:16:16', '2017-07-26 16:16:16'),
(129, 'P1000_14.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:13', '2017-07-26 14:09:13'),
(128, 'P1000_13.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:13', '2017-07-26 14:09:13'),
(127, 'P1000_12.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:13', '2017-07-26 14:09:13'),
(111, '1498298247.jpg', 39, 'App\\Model\\Product', '2017-06-24 09:57:27', '2017-06-24 09:57:27'),
(112, '1498298248.jpg', 39, 'App\\Model\\Product', '2017-06-24 09:57:28', '2017-06-24 09:57:28'),
(126, 'P1000_11.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:13', '2017-07-26 14:09:13'),
(125, 'P1000_10.jpeg', 1049, 'App\\Model\\Product', '2017-07-26 14:09:13', '2017-07-26 14:09:13'),
(131, 'P998_1.jpeg', 1047, 'App\\Model\\Product', '2017-07-26 16:16:17', '2017-07-26 16:16:17'),
(132, 'P999.jpeg', 1048, 'App\\Model\\Product', '2017-07-26 16:16:17', '2017-07-26 16:16:17'),
(133, 'P1002.jpeg', 1051, 'App\\Model\\Product', '2017-07-26 23:49:54', '2017-07-26 23:49:54'),
(134, 'P1001.jpeg', 1050, 'App\\Model\\Product', '2017-07-26 23:49:54', '2017-07-26 23:49:54'),
(135, 'P1003.jpeg', 1052, 'App\\Model\\Product', '2017-07-26 23:53:14', '2017-07-26 23:53:14'),
(136, 'P1002_1.jpeg', 1051, 'App\\Model\\Product', '2017-07-27 14:06:36', '2017-07-27 14:06:36'),
(137, 'P1000_15.jpeg', 1049, 'App\\Model\\Product', '2017-07-27 14:06:37', '2017-07-27 14:06:37'),
(138, 'P1001_1.jpeg', 1050, 'App\\Model\\Product', '2017-07-27 14:06:37', '2017-07-27 14:06:37'),
(139, 'P1003_1.jpeg', 1052, 'App\\Model\\Product', '2017-07-27 14:06:37', '2017-07-27 14:06:37'),
(140, 'P1000_16.jpeg', 1049, 'App\\Model\\Product', '2017-07-27 14:06:38', '2017-07-27 14:06:38'),
(141, 'P1003_2.jpeg', 1052, 'App\\Model\\Product', '2017-07-27 14:06:38', '2017-07-27 14:06:38'),
(142, 'P1000_17.jpeg', 1049, 'App\\Model\\Product', '2017-07-27 14:06:38', '2017-07-27 14:06:38'),
(143, 'P998_2.jpeg', 1047, 'App\\Model\\Product', '2017-07-27 14:06:38', '2017-07-27 14:06:38'),
(144, 'P998_3.jpeg', 1047, 'App\\Model\\Product', '2017-07-27 14:06:38', '2017-07-27 14:06:38'),
(145, 'P1000_18.jpeg', 1049, 'App\\Model\\Product', '2017-07-27 14:06:39', '2017-07-27 14:06:39'),
(146, 'P999_1.jpeg', 1048, 'App\\Model\\Product', '2017-07-27 14:06:39', '2017-07-27 14:06:39'),
(147, 'P1000_19.jpeg', 1049, 'App\\Model\\Product', '2017-07-27 14:06:39', '2017-07-27 14:06:39'),
(148, '12100.jpg', 1, 'App\\Model\\Product', '2017-07-29 08:19:11', '2017-07-29 08:19:11'),
(157, 'Te0393329938.jpg', 1053, 'App\\Model\\Product', '2017-07-29 09:45:19', '2017-07-29 09:45:19'),
(150, 'Te0393329938_1.jpg', 1053, 'App\\Model\\Product', '2017-07-29 08:22:24', '2017-07-29 08:22:24'),
(151, 'Te0393329938_2.jpg', 1053, 'App\\Model\\Product', '2017-07-29 08:22:24', '2017-07-29 08:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(87, '2017_06_01_184409_create_shoppingcart_table', 9),
(99, '2017_06_08_224221_create_purchases_table', 17),
(89, '2017_06_08_230714_create_purchase_orders_table', 10),
(90, '2017_06_12_234133_create_f_x_rates_table', 11),
(94, '2017_06_13_222930_create_price_converters_table', 14),
(93, '2017_06_15_223534_create_product_price_backups_table', 13),
(96, '2017_06_26_162128_create_addresses_table', 16),
(100, '2017_06_29_230357_create_social_accounts_table', 18),
(101, '2017_07_26_225233_create_temp_products_table', 19),
(102, '2017_07_29_154500_create_jobs_table', 20);

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
-- Table structure for table `price_converters`
--

CREATE TABLE `price_converters` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(20,2) NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_converters`
--

INSERT INTO `price_converters` (`id`, `product_id`, `currency_id`, `amount`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '11998.00', 'USD', '2017-06-19 14:45:13', '2017-07-29 08:19:05'),
(2, 1, 2, '49042784.84', 'KHR', '2017-06-19 14:45:15', '2017-07-29 08:19:07'),
(3, 1, 3, '400642.02', 'THB', '2017-06-19 14:45:17', '2017-07-29 08:19:10'),
(4, 1, 4, '272647920.00', 'VND', '2017-06-19 14:45:19', '2017-06-19 14:45:19'),
(5, 1, 5, '10741.66', 'EUR', '2017-06-19 14:45:21', '2017-06-19 14:45:21'),
(6, 2, 1, '2.95', 'USD', '2017-06-19 14:46:38', '2017-06-19 15:25:56'),
(7, 2, 2, '12000.00', 'KHR', '2017-06-19 14:46:39', '2017-06-19 15:25:57'),
(8, 2, 3, '100.00', 'THB', '2017-06-19 14:46:41', '2017-06-19 15:25:59'),
(9, 2, 4, '66933.60', 'VND', '2017-06-19 14:46:42', '2017-06-19 15:26:00'),
(10, 2, 5, '2.64', 'EUR', '2017-06-19 14:46:43', '2017-06-19 15:26:01'),
(11, 3, 1, '10.00', 'USD', '2017-06-19 14:46:51', '2017-06-19 16:37:23'),
(12, 3, 2, '40747.00', 'KHR', '2017-06-19 14:46:52', '2017-06-19 16:37:24'),
(13, 3, 3, '339.61', 'THB', '2017-06-19 14:46:53', '2017-06-19 16:37:25'),
(14, 3, 4, '227225.60', 'VND', '2017-06-19 14:46:55', '2017-06-19 16:37:26'),
(15, 3, 5, '8.96', 'EUR', '2017-06-19 14:46:56', '2017-06-19 16:37:28'),
(16, 4, 1, '3.19', 'USD', '2017-06-19 14:47:03', '2017-06-19 15:26:26'),
(17, 4, 2, '13000.00', 'KHR', '2017-06-19 14:47:05', '2017-06-19 15:26:27'),
(18, 4, 3, '108.33', 'THB', '2017-06-19 14:47:06', '2017-06-19 15:26:29'),
(19, 4, 4, '72511.40', 'VND', '2017-06-19 14:47:07', '2017-06-19 15:26:30'),
(20, 4, 5, '2.86', 'EUR', '2017-06-19 14:47:09', '2017-06-19 15:26:31'),
(21, 5, 1, '12.00', 'USD', '2017-06-19 14:47:17', '2017-06-19 14:47:17'),
(22, 5, 2, '48876.48', 'KHR', '2017-06-19 14:47:18', '2017-06-19 14:47:18'),
(23, 5, 3, '407.44', 'THB', '2017-06-19 14:47:22', '2017-06-19 14:47:22'),
(24, 5, 4, '272651.40', 'VND', '2017-06-19 14:47:23', '2017-06-19 14:47:23'),
(25, 5, 5, '10.74', 'EUR', '2017-06-19 14:47:25', '2017-06-19 14:47:25'),
(26, 42, 1, '111.90', 'USD', '2017-06-24 09:44:14', '2017-06-24 09:44:14'),
(27, 42, 2, '457317.00', 'KHR', '2017-06-24 09:44:16', '2017-06-24 09:44:16'),
(28, 42, 3, '3798.57', 'THB', '2017-06-24 09:44:18', '2017-06-24 09:44:18'),
(29, 42, 4, '2541437.00', 'VND', '2017-06-24 09:44:20', '2017-06-24 09:44:20'),
(30, 42, 5, '100.00', 'EUR', '2017-06-24 09:44:22', '2017-06-24 09:44:22'),
(31, 39, 1, '103.19', 'USD', '2017-06-24 09:57:18', '2017-07-15 17:08:26'),
(32, 39, 2, '421895.70', 'KHR', '2017-06-24 09:57:21', '2017-07-15 17:08:28'),
(33, 39, 3, '3491.06', 'THB', '2017-06-24 09:57:23', '2017-07-15 17:08:30'),
(34, 39, 4, '2342856.60', 'VND', '2017-06-24 09:57:25', '2017-07-15 17:08:32'),
(35, 39, 5, '90.00', 'EUR', '2017-06-24 09:57:27', '2017-07-15 17:08:37'),
(36, 41, 1, '111.91', 'USD', '2017-06-25 13:30:45', '2017-06-25 13:30:45'),
(37, 41, 2, '457369.00', 'KHR', '2017-06-25 13:30:46', '2017-06-25 13:30:46'),
(38, 41, 3, '3799.19', 'THB', '2017-06-25 13:30:55', '2017-06-25 13:30:55'),
(39, 41, 4, '2541498.00', 'VND', '2017-06-25 13:30:58', '2017-06-25 13:30:58'),
(40, 41, 5, '100.00', 'EUR', '2017-06-25 13:31:03', '2017-06-25 13:31:03'),
(41, 44, 1, '0.00', 'USD', '2017-07-15 15:35:02', '2017-07-15 15:35:02'),
(42, 44, 2, '0.00', 'KHR', '2017-07-15 15:35:03', '2017-07-15 15:35:03'),
(43, 44, 3, '0.00', 'THB', '2017-07-15 15:35:05', '2017-07-15 15:35:05'),
(44, 44, 4, '0.00', 'VND', '2017-07-15 15:35:08', '2017-07-15 15:35:08'),
(45, 44, 5, '0.00', 'EUR', '2017-07-15 15:35:09', '2017-07-15 15:35:09'),
(46, 45, 1, '0.00', 'USD', '2017-07-15 15:47:41', '2017-07-15 15:47:41'),
(47, 45, 2, '0.00', 'KHR', '2017-07-15 15:47:43', '2017-07-15 15:47:43'),
(48, 45, 3, '0.00', 'THB', '2017-07-15 15:47:45', '2017-07-15 15:47:45'),
(49, 45, 4, '0.00', 'VND', '2017-07-15 15:47:46', '2017-07-15 15:47:46'),
(50, 45, 5, '0.00', 'EUR', '2017-07-15 15:47:48', '2017-07-15 15:47:48'),
(51, 46, 1, '0.00', 'USD', '2017-07-15 17:22:27', '2017-07-15 17:22:27'),
(52, 46, 2, '0.00', 'KHR', '2017-07-15 17:22:29', '2017-07-15 17:22:29'),
(53, 46, 3, '0.00', 'THB', '2017-07-15 17:22:31', '2017-07-15 17:22:31'),
(54, 46, 4, '0.00', 'VND', '2017-07-15 17:22:33', '2017-07-15 17:22:33'),
(55, 46, 5, '0.00', 'EUR', '2017-07-15 17:22:35', '2017-07-15 17:22:35'),
(56, 48, 1, '136000.00', 'USD', '2017-07-16 01:55:25', '2017-07-16 06:23:17'),
(57, 48, 2, '556033280.00', 'KHR', '2017-07-16 01:55:27', '2017-07-16 06:23:20'),
(58, 48, 3, '4601600.80', 'THB', '2017-07-16 01:55:28', '2017-07-16 06:23:22'),
(59, 49, 1, '31.80', 'USD', '2017-07-16 02:41:16', '2017-07-16 02:42:01'),
(60, 49, 2, '130000.00', 'KHR', '2017-07-16 02:41:20', '2017-07-16 02:42:04'),
(61, 49, 3, '1075.66', 'THB', '2017-07-16 02:41:24', '2017-07-16 02:42:06'),
(62, 50, 1, '25.00', 'USD', '2017-07-16 06:29:29', '2017-07-16 06:49:34'),
(63, 50, 2, '102212.00', 'KHR', '2017-07-16 06:29:32', '2017-07-16 06:33:47'),
(64, 50, 3, '845.81', 'THB', '2017-07-16 06:29:35', '2017-07-16 06:33:51'),
(65, 51, 1, '25.00', 'USD', '2017-07-16 06:29:37', '2017-07-16 06:49:38'),
(66, 51, 2, '102212.00', 'KHR', '2017-07-16 06:29:39', '2017-07-16 06:33:56'),
(67, 51, 3, '845.81', 'THB', '2017-07-16 06:29:42', '2017-07-16 06:33:59'),
(68, 52, 1, '25.00', 'USD', '2017-07-16 06:29:46', '2017-07-16 06:49:41'),
(69, 52, 2, '102212.00', 'KHR', '2017-07-16 06:29:48', '2017-07-16 06:34:06'),
(70, 52, 3, '845.81', 'THB', '2017-07-16 06:29:50', '2017-07-16 06:34:08'),
(71, 53, 1, '25.00', 'USD', '2017-07-16 06:29:52', '2017-07-16 06:49:45'),
(72, 53, 2, '102212.00', 'KHR', '2017-07-16 06:29:55', '2017-07-16 06:34:12'),
(73, 53, 3, '845.81', 'THB', '2017-07-16 06:29:57', '2017-07-16 06:34:17'),
(74, 54, 1, '25.00', 'USD', '2017-07-16 06:30:00', '2017-07-16 06:49:48'),
(75, 54, 2, '102212.00', 'KHR', '2017-07-16 06:30:03', '2017-07-16 06:34:22'),
(76, 54, 3, '845.81', 'THB', '2017-07-16 06:30:05', '2017-07-16 06:34:26'),
(77, 55, 1, '25.00', 'USD', '2017-07-16 06:30:07', '2017-07-16 06:49:53'),
(78, 55, 2, '102212.00', 'KHR', '2017-07-16 06:30:10', '2017-07-16 06:34:31'),
(79, 55, 3, '845.81', 'THB', '2017-07-16 06:30:12', '2017-07-16 06:34:34'),
(80, 56, 1, '25.00', 'USD', '2017-07-16 06:30:15', '2017-07-16 06:49:58'),
(81, 56, 2, '102212.00', 'KHR', '2017-07-16 06:30:18', '2017-07-16 06:34:38'),
(82, 56, 3, '845.81', 'THB', '2017-07-16 06:30:21', '2017-07-16 06:34:41'),
(83, 57, 1, '25.00', 'USD', '2017-07-16 06:30:24', '2017-07-16 06:50:02'),
(84, 58, 1, '25.00', 'USD', '2017-07-16 06:34:51', '2017-07-16 06:50:04'),
(85, 58, 2, '102212.00', 'KHR', '2017-07-16 06:34:55', '2017-07-16 06:34:55'),
(86, 58, 3, '845.81', 'THB', '2017-07-16 06:34:58', '2017-07-16 06:34:58'),
(87, 59, 1, '25.00', 'USD', '2017-07-16 06:35:01', '2017-07-16 06:50:13'),
(88, 59, 2, '102212.00', 'KHR', '2017-07-16 06:35:04', '2017-07-16 06:35:04'),
(89, 59, 3, '845.81', 'THB', '2017-07-16 06:35:06', '2017-07-16 06:35:06'),
(90, 60, 1, '25.00', 'USD', '2017-07-16 06:35:09', '2017-07-16 06:50:16'),
(91, 60, 2, '102212.00', 'KHR', '2017-07-16 06:35:11', '2017-07-16 06:35:11'),
(92, 60, 3, '845.81', 'THB', '2017-07-16 06:35:13', '2017-07-16 06:35:13'),
(93, 61, 1, '25.00', 'USD', '2017-07-16 06:35:15', '2017-07-16 06:50:19'),
(94, 61, 2, '102212.00', 'KHR', '2017-07-16 06:35:18', '2017-07-16 06:35:18'),
(95, 61, 3, '845.81', 'THB', '2017-07-16 06:35:22', '2017-07-16 06:35:22'),
(96, 62, 1, '25.00', 'USD', '2017-07-16 06:35:25', '2017-07-16 06:50:21'),
(97, 62, 2, '102212.00', 'KHR', '2017-07-16 06:35:28', '2017-07-16 06:35:28'),
(98, 62, 3, '845.81', 'THB', '2017-07-16 06:35:31', '2017-07-16 06:35:31'),
(99, 63, 1, '25.00', 'USD', '2017-07-16 06:35:34', '2017-07-16 06:50:25'),
(100, 63, 2, '102212.00', 'KHR', '2017-07-16 06:35:36', '2017-07-16 06:35:36'),
(101, 63, 3, '845.81', 'THB', '2017-07-16 06:35:39', '2017-07-16 06:35:39'),
(102, 64, 1, '25.00', 'USD', '2017-07-16 06:35:42', '2017-07-16 06:50:28'),
(103, 64, 2, '102212.00', 'KHR', '2017-07-16 06:35:46', '2017-07-16 06:35:46'),
(104, 64, 3, '845.81', 'THB', '2017-07-16 06:35:49', '2017-07-16 06:35:49'),
(105, 65, 1, '25.00', 'USD', '2017-07-16 06:35:55', '2017-07-16 06:50:30'),
(106, 65, 2, '102212.00', 'KHR', '2017-07-16 06:35:58', '2017-07-16 06:35:58'),
(107, 65, 3, '845.81', 'THB', '2017-07-16 06:36:01', '2017-07-16 06:36:01'),
(108, 66, 1, '25.00', 'USD', '2017-07-16 06:36:05', '2017-07-16 06:50:32'),
(109, 66, 2, '102212.00', 'KHR', '2017-07-16 06:36:08', '2017-07-16 06:36:08'),
(110, 66, 3, '845.81', 'THB', '2017-07-16 06:36:13', '2017-07-16 06:36:13'),
(111, 67, 1, '25.00', 'USD', '2017-07-16 06:36:16', '2017-07-16 06:50:36'),
(112, 68, 1, '25.00', 'USD', '2017-07-16 06:50:39', '2017-07-16 06:50:39'),
(113, 69, 1, '25.00', 'USD', '2017-07-16 06:50:41', '2017-07-16 06:50:41'),
(114, 70, 1, '25.00', 'USD', '2017-07-16 06:50:43', '2017-07-16 06:50:43'),
(115, 71, 1, '25.00', 'USD', '2017-07-16 06:50:47', '2017-07-16 06:50:47'),
(116, 72, 1, '25.00', 'USD', '2017-07-16 06:50:51', '2017-07-16 06:50:51'),
(117, 73, 1, '25.00', 'USD', '2017-07-16 06:50:53', '2017-07-16 06:50:53'),
(118, 74, 1, '25.00', 'USD', '2017-07-16 06:50:59', '2017-07-16 06:50:59'),
(119, 75, 1, '25.00', 'USD', '2017-07-16 06:51:02', '2017-07-16 06:51:02'),
(120, 76, 1, '25.00', 'USD', '2017-07-16 06:51:07', '2017-07-16 06:51:07'),
(121, 77, 1, '25.00', 'USD', '2017-07-16 06:51:10', '2017-07-16 06:51:10'),
(122, 78, 1, '25.00', 'USD', '2017-07-16 06:51:13', '2017-07-16 06:51:13'),
(123, 79, 1, '25.00', 'USD', '2017-07-16 06:51:16', '2017-07-16 06:51:16'),
(124, 80, 1, '25.00', 'USD', '2017-07-16 06:51:18', '2017-07-16 06:51:18'),
(125, 81, 1, '25.00', 'USD', '2017-07-16 06:51:21', '2017-07-16 06:51:21'),
(126, 82, 1, '25.00', 'USD', '2017-07-16 06:51:24', '2017-07-16 06:51:24'),
(127, 83, 1, '25.00', 'USD', '2017-07-16 06:51:27', '2017-07-16 06:51:27'),
(128, 84, 1, '25.00', 'USD', '2017-07-16 06:51:31', '2017-07-16 06:51:31'),
(129, 85, 1, '25.00', 'USD', '2017-07-16 06:51:35', '2017-07-16 06:51:35'),
(130, 86, 1, '25.00', 'USD', '2017-07-16 06:51:39', '2017-07-16 06:51:39'),
(131, 87, 1, '25.00', 'USD', '2017-07-16 06:51:42', '2017-07-16 06:51:42'),
(132, 88, 1, '25.00', 'USD', '2017-07-16 06:51:46', '2017-07-16 06:51:46'),
(133, 89, 1, '25.00', 'USD', '2017-07-16 06:51:49', '2017-07-16 06:51:49'),
(134, 90, 1, '25.00', 'USD', '2017-07-16 06:51:53', '2017-07-16 06:51:53'),
(135, 91, 1, '25.00', 'USD', '2017-07-16 06:51:56', '2017-07-16 06:51:56'),
(136, 92, 1, '25.00', 'USD', '2017-07-16 06:52:00', '2017-07-16 06:52:00'),
(137, 93, 1, '25.00', 'USD', '2017-07-16 06:52:02', '2017-07-16 06:52:02'),
(138, 94, 1, '25.00', 'USD', '2017-07-16 06:52:11', '2017-07-16 06:52:11'),
(139, 95, 1, '25.00', 'USD', '2017-07-16 06:52:16', '2017-07-16 06:52:16'),
(140, 96, 1, '25.00', 'USD', '2017-07-16 06:52:18', '2017-07-16 06:52:18'),
(141, 97, 1, '25.00', 'USD', '2017-07-16 06:52:22', '2017-07-16 06:52:22'),
(142, 98, 1, '25.00', 'USD', '2017-07-16 06:52:24', '2017-07-16 06:52:24'),
(143, 99, 1, '25.00', 'USD', '2017-07-16 06:52:29', '2017-07-16 06:52:29'),
(144, 100, 1, '25.00', 'USD', '2017-07-16 06:52:32', '2017-07-16 06:52:32'),
(145, 101, 1, '25.00', 'USD', '2017-07-16 06:52:34', '2017-07-16 06:52:34'),
(146, 102, 1, '25.00', 'USD', '2017-07-16 06:52:38', '2017-07-16 06:52:38'),
(147, 103, 1, '25.00', 'USD', '2017-07-16 06:52:41', '2017-07-16 06:52:41'),
(148, 104, 1, '25.00', 'USD', '2017-07-16 06:52:43', '2017-07-16 06:52:43'),
(149, 105, 1, '25.00', 'USD', '2017-07-16 06:52:47', '2017-07-16 06:52:47'),
(150, 106, 1, '25.00', 'USD', '2017-07-16 06:52:50', '2017-07-16 06:52:50'),
(151, 107, 1, '25.00', 'USD', '2017-07-16 06:52:55', '2017-07-16 06:52:55'),
(152, 108, 1, '25.00', 'USD', '2017-07-16 06:52:59', '2017-07-16 06:52:59'),
(153, 109, 1, '25.00', 'USD', '2017-07-16 06:53:01', '2017-07-16 06:53:01'),
(154, 110, 1, '25.00', 'USD', '2017-07-16 06:53:05', '2017-07-16 06:53:05'),
(155, 111, 1, '25.00', 'USD', '2017-07-16 06:53:10', '2017-07-16 06:53:10'),
(156, 112, 1, '25.00', 'USD', '2017-07-16 06:53:13', '2017-07-16 06:53:13'),
(157, 113, 1, '25.00', 'USD', '2017-07-16 06:53:15', '2017-07-16 06:53:15'),
(158, 114, 1, '25.00', 'USD', '2017-07-16 06:53:17', '2017-07-16 06:53:17'),
(159, 115, 1, '25.00', 'USD', '2017-07-16 06:53:21', '2017-07-16 06:53:21'),
(160, 116, 1, '25.00', 'USD', '2017-07-16 06:53:23', '2017-07-16 06:53:23'),
(161, 117, 1, '25.00', 'USD', '2017-07-16 06:53:26', '2017-07-16 06:53:26'),
(162, 118, 1, '25.00', 'USD', '2017-07-16 06:53:29', '2017-07-16 06:53:29'),
(163, 119, 1, '25.00', 'USD', '2017-07-16 06:53:33', '2017-07-16 06:53:33'),
(164, 120, 1, '25.00', 'USD', '2017-07-16 06:53:35', '2017-07-16 06:53:35'),
(165, 121, 1, '25.00', 'USD', '2017-07-16 06:53:37', '2017-07-16 06:53:37'),
(166, 122, 1, '25.00', 'USD', '2017-07-16 06:53:41', '2017-07-16 06:53:41'),
(167, 123, 1, '25.00', 'USD', '2017-07-16 06:53:44', '2017-07-16 06:53:44'),
(168, 124, 1, '25.00', 'USD', '2017-07-16 06:53:52', '2017-07-16 06:53:52'),
(169, 125, 1, '25.00', 'USD', '2017-07-16 06:53:54', '2017-07-16 06:53:54'),
(170, 126, 1, '25.00', 'USD', '2017-07-16 06:53:57', '2017-07-16 06:53:57'),
(171, 127, 1, '25.00', 'USD', '2017-07-16 06:54:00', '2017-07-16 06:54:00'),
(172, 128, 1, '25.00', 'USD', '2017-07-16 06:54:02', '2017-07-16 06:54:02'),
(173, 129, 1, '25.00', 'USD', '2017-07-16 06:54:05', '2017-07-16 06:54:05'),
(174, 130, 1, '25.00', 'USD', '2017-07-16 06:54:09', '2017-07-16 06:54:09'),
(175, 131, 1, '25.00', 'USD', '2017-07-16 06:54:11', '2017-07-16 06:54:11'),
(176, 132, 1, '25.00', 'USD', '2017-07-16 06:54:15', '2017-07-16 06:54:15'),
(177, 133, 1, '25.00', 'USD', '2017-07-16 06:54:18', '2017-07-16 06:54:18'),
(178, 134, 1, '25.00', 'USD', '2017-07-16 06:54:21', '2017-07-16 06:54:21'),
(179, 135, 1, '25.00', 'USD', '2017-07-16 06:54:25', '2017-07-16 06:54:25'),
(180, 136, 1, '25.00', 'USD', '2017-07-16 06:54:28', '2017-07-16 06:54:28'),
(181, 137, 1, '25.00', 'USD', '2017-07-16 06:54:31', '2017-07-16 06:54:31'),
(182, 138, 1, '25.00', 'USD', '2017-07-16 06:54:33', '2017-07-16 06:54:33'),
(183, 139, 1, '25.00', 'USD', '2017-07-16 06:54:35', '2017-07-16 06:54:35'),
(184, 140, 1, '25.00', 'USD', '2017-07-16 06:54:40', '2017-07-16 06:54:40'),
(185, 141, 1, '25.00', 'USD', '2017-07-16 06:54:43', '2017-07-16 06:54:43'),
(186, 142, 1, '25.00', 'USD', '2017-07-16 06:54:46', '2017-07-16 06:54:46'),
(187, 143, 1, '25.00', 'USD', '2017-07-16 06:54:49', '2017-07-16 06:54:49'),
(188, 144, 1, '25.00', 'USD', '2017-07-16 06:54:54', '2017-07-16 06:54:54'),
(189, 145, 1, '25.00', 'USD', '2017-07-16 06:54:57', '2017-07-16 06:54:57'),
(190, 146, 1, '25.00', 'USD', '2017-07-16 06:55:01', '2017-07-16 06:55:01'),
(191, 147, 1, '25.00', 'USD', '2017-07-16 06:55:03', '2017-07-16 06:55:03'),
(192, 148, 1, '25.00', 'USD', '2017-07-16 06:55:06', '2017-07-16 06:55:06'),
(193, 149, 1, '25.00', 'USD', '2017-07-16 06:55:08', '2017-07-16 06:55:08'),
(194, 150, 1, '25.00', 'USD', '2017-07-16 06:55:11', '2017-07-16 06:55:11'),
(195, 151, 1, '25.00', 'USD', '2017-07-16 06:55:13', '2017-07-16 06:55:13'),
(196, 152, 1, '25.00', 'USD', '2017-07-16 06:55:16', '2017-07-16 06:55:16'),
(197, 153, 1, '25.00', 'USD', '2017-07-16 06:55:19', '2017-07-16 06:55:19'),
(198, 154, 1, '25.00', 'USD', '2017-07-16 06:55:21', '2017-07-16 06:55:21'),
(199, 155, 1, '25.00', 'USD', '2017-07-16 06:55:25', '2017-07-16 06:55:25'),
(200, 156, 1, '25.00', 'USD', '2017-07-16 06:55:28', '2017-07-16 06:55:28'),
(201, 157, 1, '25.00', 'USD', '2017-07-16 06:55:31', '2017-07-16 06:55:31'),
(202, 158, 1, '25.00', 'USD', '2017-07-16 06:55:35', '2017-07-16 06:55:35'),
(203, 159, 1, '25.00', 'USD', '2017-07-16 06:55:41', '2017-07-16 06:55:41'),
(204, 1049, 1, '25.00', 'USD', '2017-07-25 15:59:54', '2017-07-25 15:59:54'),
(205, 1049, 2, '102541.00', 'KHR', '2017-07-25 15:59:56', '2017-07-25 15:59:56'),
(206, 1049, 3, '836.13', 'THB', '2017-07-25 15:59:58', '2017-07-25 15:59:58'),
(207, 1048, 1, '25.00', 'USD', '2017-07-26 23:32:31', '2017-07-26 23:32:57'),
(208, 1048, 2, '102408.25', 'KHR', '2017-07-26 23:32:32', '2017-07-26 23:32:32'),
(209, 1048, 3, '834.61', 'THB', '2017-07-26 23:32:33', '2017-07-26 23:32:33'),
(210, 1050, 1, '10.99', 'USD', '2017-07-26 23:53:47', '2017-07-26 23:54:14'),
(211, 1050, 2, '45000.00', 'KHR', '2017-07-26 23:53:48', '2017-07-26 23:54:15'),
(212, 1050, 3, '366.82', 'THB', '2017-07-26 23:53:49', '2017-07-26 23:54:16'),
(213, 1053, 1, '56.27', 'USD', '2017-07-29 08:22:19', '2017-07-29 09:45:21'),
(214, 1053, 2, '230000.00', 'KHR', '2017-07-29 08:22:21', '2017-07-29 09:45:24'),
(215, 1053, 3, '1878.86', 'THB', '2017-07-29 08:22:23', '2017-07-29 09:45:26');

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
  `attribute_id` int(11) UNSIGNED DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `discount_type` int(11) DEFAULT '0',
  `discount` decimal(8,0) DEFAULT NULL,
  `short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin_place` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` int(10) UNSIGNED DEFAULT NULL,
  `currency_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ali Prohaska', 'ali-prohaska1', NULL, '10000.00', 77, NULL, '12000.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '1', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-07-15 10:22:54', NULL),
(2, 'Coca Cola', 'coca-cola2', NULL, '15000.00', 59, NULL, '12000.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '2', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-07-02 14:30:23', NULL),
(3, 'Ali Prohaska', 'ali-prohaska3', NULL, '10.00', 42, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '1', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-06-28 00:06:07', NULL),
(4, 'Coca Cola', 'coca-cola4', NULL, '12000.00', 54, NULL, '13000.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '2', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-07-02 05:26:39', NULL),
(5, 'Ali Prohaska', 'ali-prohaska5', NULL, '10.00', 36, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '1', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-07-02 14:30:23', NULL),
(6, 'Coca Cola', 'coca-cola6', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(7, 'Ali Prohaska', 'ali-prohaska7', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '5', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(8, 'Coca Cola', 'coca-cola8', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(9, 'Ali Prohaska', 'ali-prohaska9', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '5', 2, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(10, 'Coca Cola', 'coca-cola10', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '3', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(11, 'Ali Prohaska', 'ali-prohaska11', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '2', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(12, 'Coca Cola', 'coca-cola12', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '1', 2, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(13, 'Ali Prohaska', 'ali-prohaska13', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '3', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(14, 'Coca Cola', 'coca-cola14', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(15, 'Ali Prohaska', 'ali-prohaska15', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '2', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(16, 'Coca Cola', 'coca-cola16', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(17, 'Ali Prohaska', 'ali-prohaska17', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '2', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(18, 'Coca Cola', 'coca-cola18', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '1', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(19, 'Ali Prohaska', 'ali-prohaska19', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '1', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(20, 'Coca Cola', 'coca-cola20', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(21, 'Ali Prohaska', 'ali-prohaska21', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '5', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(22, 'Coca Cola', 'coca-cola22', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '5', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(23, 'Ali Prohaska', 'ali-prohaska23', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '3', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(24, 'Coca Cola', 'coca-cola24', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '2', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(25, 'Ali Prohaska', 'ali-prohaska25', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '3', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(26, 'Coca Cola', 'coca-cola26', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '2', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-02 09:20:08', NULL),
(27, 'Ali Prohaska', 'ali-prohaska27', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '4', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(28, 'Coca Cola', 'coca-cola28', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '5', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(29, 'Ali Prohaska', 'ali-prohaska29', NULL, '10.00', 45, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '2', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(30, 'Coca Cola', 'coca-cola30', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '1', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-01 03:36:57', NULL),
(31, 'Ali Prohaska', 'ali-prohaska31', NULL, '10.00', NULL, NULL, '12.00', 1, '2', 'Hello world', 'HI Tesst', '12100', 'Phnom Penh', 2, '3', 1, 'Chantouch', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-24 08:08:21', '2017-05-28 02:55:27', NULL),
(32, 'Coca Cola', 'coca-cola32', NULL, '15.00', 60, NULL, '20.00', NULL, NULL, '<p>“So what? Why not just use TEXT and be done with it?”<br></p>', '<p><span style="color: rgb(51, 51, 51); font-family: Helvetica, Arial, sans-serif; font-size: 16px;">Notebook is a jQuery plugin for creating a floating toolbar containing an multi-line or inline WYSIWYG rich text editor that allows you to in-place edit the selected text of the page.</span><br></p>', 'REF000003', 'Kampong', 2, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-05-27 06:02:13', '2017-06-02 09:19:45', NULL),
(33, 'New Prodcuct', 'new-prodcuct-of-lankunding', NULL, '50.00', 62, NULL, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000033', '', NULL, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:34:36', '2017-06-05 07:34:36', NULL),
(34, 'New Prodcuct 1', 'new-prodcuct-1-of-lankunding', NULL, '50.00', 62, NULL, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000034', '', NULL, '4', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:35:35', '2017-06-05 07:35:35', NULL),
(35, 'New Prodcuct 2', 'new-prodcuct-2-of-lankunding', NULL, '50.00', 62, NULL, '60.00', 2, '10', '<p>sdgadhesdhwrtd</p>', '<p>jhedtyenhryu6rjyrsdfgghmjk</p>', 'REF00000035', '', NULL, '5', 1, '', 2, 1, 1, 'uploads/product/img/', 1, '2017-06-05 07:37:35', '2017-06-05 07:37:35', NULL),
(60, 'Product11', 'product11', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P11', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(61, 'Product12', 'product12', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P12', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(62, 'Product13', 'product13', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P13', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(63, 'Product14', 'product14', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P14', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(64, 'Product15', 'product15', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P15', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(65, 'Product16', 'product16', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P16', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(66, 'Product17', 'product17', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P17', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(67, 'Product18', 'product18', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P18', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(68, 'Product19', 'product19', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P19', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(69, 'Product20', 'product20', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P20', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(70, 'Product21', 'product21', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P21', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(71, 'Product22', 'product22', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P22', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(72, 'Product23', 'product23', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P23', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(73, 'Product24', 'product24', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P24', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(74, 'Product25', 'product25', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P25', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(75, 'Product26', 'product26', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P26', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(76, 'Product27', 'product27', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P27', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(77, 'Product28', 'product28', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P28', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(78, 'Product29', 'product29', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P29', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(79, 'Product30', 'product30', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P30', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(80, 'Product31', 'product31', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P31', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(81, 'Product32', 'product32', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P32', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(82, 'Product33', 'product33', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P33', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(83, 'Product34', 'product34', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P34', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(84, 'Product35', 'product35', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P35', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(85, 'Product36', 'product36', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P36', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(86, 'Product37', 'product37', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P37', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(87, 'Product38', 'product38', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P38', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(88, 'Product39', 'product39', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P39', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(89, 'Product40', 'product40', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P40', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(90, 'Product41', 'product41', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P41', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(91, 'Product42', 'product42', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P42', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(92, 'Product43', 'product43', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P43', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(93, 'Product44', 'product44', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P44', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(94, 'Product45', 'product45', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P45', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(95, 'Product46', 'product46', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P46', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(96, 'Product47', 'product47', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P47', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(97, 'Product48', 'product48', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P48', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(98, 'Product49', 'product49', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P49', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(99, 'Product50', 'product50', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P50', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(100, 'Product51', 'product51', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P51', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(101, 'Product52', 'product52', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P52', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(102, 'Product53', 'product53', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P53', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(103, 'Product54', 'product54', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P54', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(104, 'Product55', 'product55', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P55', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(105, 'Product56', 'product56', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P56', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(106, 'Product57', 'product57', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P57', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(107, 'Product58', 'product58', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P58', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(108, 'Product59', 'product59', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P59', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(109, 'Product60', 'product60', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P60', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(110, 'Product61', 'product61', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P61', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(111, 'Product62', 'product62', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P62', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(112, 'Product63', 'product63', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P63', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(113, 'Product64', 'product64', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P64', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(114, 'Product65', 'product65', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P65', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(115, 'Product66', 'product66', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P66', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(116, 'Product67', 'product67', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P67', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(117, 'Product68', 'product68', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P68', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(118, 'Product69', 'product69', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P69', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(119, 'Product70', 'product70', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P70', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(120, 'Product71', 'product71', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P71', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(121, 'Product72', 'product72', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P72', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(122, 'Product73', 'product73', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P73', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(123, 'Product74', 'product74', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P74', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(124, 'Product75', 'product75', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P75', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(125, 'Product76', 'product76', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P76', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(126, 'Product77', 'product77', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P77', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(127, 'Product78', 'product78', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P78', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(128, 'Product79', 'product79', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P79', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(129, 'Product80', 'product80', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P80', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(130, 'Product81', 'product81', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P81', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(131, 'Product82', 'product82', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P82', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(132, 'Product83', 'product83', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P83', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(133, 'Product84', 'product84', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P84', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(134, 'Product85', 'product85', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P85', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(135, 'Product86', 'product86', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P86', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(136, 'Product87', 'product87', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P87', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(39, 'Partner product clothes', 'partner-product-clothes-of-bernita79', NULL, '90.00', 20, NULL, '100.00', 2, '10', '<p>Test product of the world in cambodia to get more information</p>', '<p>Test product of the world in cambodia to get more information<br></p>', 'REF00000039', 'Prey Veng', 4, '5', 2, NULL, 1, 1, 1, 'uploads/product/img/', 1, '2017-06-24 09:40:23', '2017-07-15 17:08:37', NULL),
(48, 'ឧបករណ៍តម្លើងហ្គាស់រថយន្ត', 'of-lankunding', 2, '120000.00', 1, NULL, '140000.00', 1, '4000', 'យើងខ្ញុំមានលក់រាយ និងបោះដុំឧបករណ៍តម្លើងហ្គាស់គ្រប់ប្រភេទក្នុងតម្លៃសមរម្យ និងមានផ្ញើរជូនទូទាំង២៥ខេត្ត-ក្រុង។', 'យើងខ្ញុំមានលក់រាយ និងបោះដុំឧបករណ៍តម្លើងហ្គាស់គ្រប់ប្រភេទក្នុងតម្លៃសមរម្យ និងមានផ្ញើរជូនទូទាំង២៥ខេត្ត-ក្រុង។', 'HHH23424', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-15 17:38:47', '2017-07-16 06:23:14', NULL),
(49, 'New Product', 'new-product', 2, '110000.00', 1, NULL, '130000.00', NULL, NULL, 'យើងខ្ញុំមានលក់រាយ និងបោះដុំឧបករណ៍តម្លើងហ្គាស់គ្រប់ប្រភេទក្នុងតម្លៃសមរម្យ និងមានផ្ញើរជូនទូទាំង២៥ខេត្ត-ក្រុង។', 'យើងខ្ញុំមានលក់រាយ និងបោះដុំឧបករណ៍តម្លើងហ្គាស់គ្រប់ប្រភេទក្នុងតម្លៃសមរម្យ និងមានផ្ញើរជូនទូទាំង២៥ខេត្ត-ក្រុង។', 'HHH23425', NULL, NULL, '2', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 02:38:08', '2017-07-16 02:41:59', NULL),
(50, 'Product1', 'product1', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P01', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-24 15:51:51', NULL),
(51, 'Product2', 'product2', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P02', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-24 15:51:51', NULL),
(52, 'Product3', 'product3', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P03', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-24 15:51:51', NULL),
(53, 'Product4', 'product4', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P04', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(54, 'Product5', 'product5', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P05', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(55, 'Product6', 'product6', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P06', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(56, 'Product7', 'product7', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P07', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(57, 'Product8', 'product8', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P08', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(58, 'Product9', 'product9', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P09', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(59, 'Product10', 'product10', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P10', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:42', NULL),
(137, 'Product88', 'product88', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P88', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(138, 'Product89', 'product89', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P89', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(139, 'Product90', 'product90', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P90', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(140, 'Product91', 'product91', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P91', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(141, 'Product92', 'product92', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P92', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(142, 'Product93', 'product93', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P93', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(143, 'Product94', 'product94', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P94', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(144, 'Product95', 'product95', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P95', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(145, 'Product96', 'product96', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P96', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(146, 'Product97', 'product97', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P97', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(147, 'Product98', 'product98', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P98', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(148, 'Product99', 'product99', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P99', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(149, 'Product100', 'product100', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P100', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(150, 'Product101', 'product101', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P101', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(151, 'Product102', 'product102', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P102', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(152, 'Product103', 'product103', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P103', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(153, 'Product104', 'product104', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P104', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(154, 'Product105', 'product105', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P105', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(155, 'Product106', 'product106', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P106', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(156, 'Product107', 'product107', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P107', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(157, 'Product108', 'product108', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P108', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(158, 'Product109', 'product109', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P109', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(159, 'Product110', 'product110', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P110', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(160, 'Product111', 'product111', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P111', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(161, 'Product112', 'product112', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P112', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(162, 'Product113', 'product113', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P113', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(163, 'Product114', 'product114', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P114', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(164, 'Product115', 'product115', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P115', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(165, 'Product116', 'product116', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P116', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(166, 'Product117', 'product117', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P117', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(167, 'Product118', 'product118', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P118', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(168, 'Product119', 'product119', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P119', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(169, 'Product120', 'product120', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P120', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(170, 'Product121', 'product121', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P121', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(171, 'Product122', 'product122', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P122', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(172, 'Product123', 'product123', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P123', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(173, 'Product124', 'product124', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P124', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(174, 'Product125', 'product125', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P125', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(175, 'Product126', 'product126', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P126', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(176, 'Product127', 'product127', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P127', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(177, 'Product128', 'product128', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P128', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(178, 'Product129', 'product129', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P129', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(179, 'Product130', 'product130', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P130', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(180, 'Product131', 'product131', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P131', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(181, 'Product132', 'product132', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P132', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(182, 'Product133', 'product133', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P133', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(183, 'Product134', 'product134', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P134', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(184, 'Product135', 'product135', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P135', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(185, 'Product136', 'product136', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P136', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(186, 'Product137', 'product137', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P137', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(187, 'Product138', 'product138', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P138', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(188, 'Product139', 'product139', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P139', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(189, 'Product140', 'product140', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P140', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(190, 'Product141', 'product141', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P141', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(191, 'Product142', 'product142', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P142', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(192, 'Product143', 'product143', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P143', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(193, 'Product144', 'product144', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P144', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(194, 'Product145', 'product145', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P145', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(195, 'Product146', 'product146', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P146', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(196, 'Product147', 'product147', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P147', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(197, 'Product148', 'product148', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P148', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(198, 'Product149', 'product149', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P149', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(199, 'Product150', 'product150', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P150', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(200, 'Product151', 'product151', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P151', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(201, 'Product152', 'product152', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P152', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(202, 'Product153', 'product153', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P153', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(203, 'Product154', 'product154', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P154', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(204, 'Product155', 'product155', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P155', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(205, 'Product156', 'product156', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P156', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:56', '2017-07-16 08:52:43', NULL),
(206, 'Product157', 'product157', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P157', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(207, 'Product158', 'product158', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P158', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(208, 'Product159', 'product159', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P159', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(209, 'Product160', 'product160', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P160', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(210, 'Product161', 'product161', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P161', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(211, 'Product162', 'product162', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P162', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(212, 'Product163', 'product163', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P163', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(213, 'Product164', 'product164', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P164', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(214, 'Product165', 'product165', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P165', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(215, 'Product166', 'product166', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P166', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(216, 'Product167', 'product167', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P167', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(217, 'Product168', 'product168', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P168', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(218, 'Product169', 'product169', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P169', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(219, 'Product170', 'product170', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P170', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(220, 'Product171', 'product171', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P171', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(221, 'Product172', 'product172', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P172', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(222, 'Product173', 'product173', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P173', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(223, 'Product174', 'product174', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P174', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(224, 'Product175', 'product175', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P175', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(225, 'Product176', 'product176', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P176', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(226, 'Product177', 'product177', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P177', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(227, 'Product178', 'product178', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P178', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(228, 'Product179', 'product179', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P179', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(229, 'Product180', 'product180', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P180', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(230, 'Product181', 'product181', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P181', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(231, 'Product182', 'product182', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P182', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(232, 'Product183', 'product183', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P183', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(233, 'Product184', 'product184', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P184', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(234, 'Product185', 'product185', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P185', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(235, 'Product186', 'product186', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P186', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(236, 'Product187', 'product187', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P187', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(237, 'Product188', 'product188', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P188', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(238, 'Product189', 'product189', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P189', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(239, 'Product190', 'product190', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P190', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(240, 'Product191', 'product191', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P191', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(241, 'Product192', 'product192', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P192', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(242, 'Product193', 'product193', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P193', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(243, 'Product194', 'product194', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P194', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(244, 'Product195', 'product195', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P195', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(245, 'Product196', 'product196', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P196', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(246, 'Product197', 'product197', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P197', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(247, 'Product198', 'product198', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P198', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(248, 'Product199', 'product199', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P199', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(249, 'Product200', 'product200', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P200', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(250, 'Product201', 'product201', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P201', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(251, 'Product202', 'product202', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P202', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(252, 'Product203', 'product203', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P203', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(253, 'Product204', 'product204', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P204', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(254, 'Product205', 'product205', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P205', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(255, 'Product206', 'product206', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P206', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(256, 'Product207', 'product207', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P207', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(257, 'Product208', 'product208', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P208', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(258, 'Product209', 'product209', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P209', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(259, 'Product210', 'product210', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P210', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(260, 'Product211', 'product211', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P211', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(261, 'Product212', 'product212', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P212', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(262, 'Product213', 'product213', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P213', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(263, 'Product214', 'product214', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P214', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(264, 'Product215', 'product215', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P215', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(265, 'Product216', 'product216', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P216', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(266, 'Product217', 'product217', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P217', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(267, 'Product218', 'product218', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P218', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(268, 'Product219', 'product219', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P219', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(269, 'Product220', 'product220', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P220', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(270, 'Product221', 'product221', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P221', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(271, 'Product222', 'product222', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P222', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(272, 'Product223', 'product223', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P223', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(273, 'Product224', 'product224', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P224', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(274, 'Product225', 'product225', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P225', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(275, 'Product226', 'product226', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P226', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(276, 'Product227', 'product227', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P227', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(277, 'Product228', 'product228', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P228', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(278, 'Product229', 'product229', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P229', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(279, 'Product230', 'product230', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P230', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(280, 'Product231', 'product231', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P231', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(281, 'Product232', 'product232', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P232', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(282, 'Product233', 'product233', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P233', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(283, 'Product234', 'product234', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P234', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(284, 'Product235', 'product235', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P235', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(285, 'Product236', 'product236', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P236', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(286, 'Product237', 'product237', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P237', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(287, 'Product238', 'product238', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P238', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(288, 'Product239', 'product239', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P239', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(289, 'Product240', 'product240', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P240', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(290, 'Product241', 'product241', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P241', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:43', NULL),
(291, 'Product242', 'product242', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P242', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(292, 'Product243', 'product243', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P243', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(293, 'Product244', 'product244', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P244', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(294, 'Product245', 'product245', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P245', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(295, 'Product246', 'product246', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P246', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(296, 'Product247', 'product247', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P247', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(297, 'Product248', 'product248', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P248', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(298, 'Product249', 'product249', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P249', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(299, 'Product250', 'product250', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P250', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(300, 'Product251', 'product251', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P251', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(301, 'Product252', 'product252', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P252', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(302, 'Product253', 'product253', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P253', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(303, 'Product254', 'product254', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P254', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(304, 'Product255', 'product255', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P255', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(305, 'Product256', 'product256', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P256', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(306, 'Product257', 'product257', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P257', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(307, 'Product258', 'product258', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P258', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(308, 'Product259', 'product259', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P259', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(309, 'Product260', 'product260', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P260', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(310, 'Product261', 'product261', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P261', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(311, 'Product262', 'product262', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P262', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(312, 'Product263', 'product263', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P263', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(313, 'Product264', 'product264', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P264', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(314, 'Product265', 'product265', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P265', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(315, 'Product266', 'product266', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P266', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(316, 'Product267', 'product267', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P267', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(317, 'Product268', 'product268', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P268', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(318, 'Product269', 'product269', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P269', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(319, 'Product270', 'product270', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P270', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(320, 'Product271', 'product271', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P271', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(321, 'Product272', 'product272', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P272', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(322, 'Product273', 'product273', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P273', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(323, 'Product274', 'product274', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P274', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(324, 'Product275', 'product275', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P275', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(325, 'Product276', 'product276', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P276', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(326, 'Product277', 'product277', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P277', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(327, 'Product278', 'product278', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P278', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(328, 'Product279', 'product279', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P279', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(329, 'Product280', 'product280', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P280', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(330, 'Product281', 'product281', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P281', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(331, 'Product282', 'product282', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P282', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(332, 'Product283', 'product283', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P283', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(333, 'Product284', 'product284', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P284', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(334, 'Product285', 'product285', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P285', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(335, 'Product286', 'product286', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P286', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(336, 'Product287', 'product287', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P287', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(337, 'Product288', 'product288', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P288', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(338, 'Product289', 'product289', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P289', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(339, 'Product290', 'product290', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P290', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(340, 'Product291', 'product291', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P291', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(341, 'Product292', 'product292', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P292', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(342, 'Product293', 'product293', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P293', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(343, 'Product294', 'product294', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P294', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(344, 'Product295', 'product295', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P295', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(345, 'Product296', 'product296', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P296', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(346, 'Product297', 'product297', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P297', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(347, 'Product298', 'product298', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P298', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(348, 'Product299', 'product299', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P299', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(349, 'Product300', 'product300', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P300', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(350, 'Product301', 'product301', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P301', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(351, 'Product302', 'product302', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P302', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(352, 'Product303', 'product303', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P303', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(353, 'Product304', 'product304', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P304', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(354, 'Product305', 'product305', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P305', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(355, 'Product306', 'product306', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P306', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(356, 'Product307', 'product307', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P307', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(357, 'Product308', 'product308', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P308', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(358, 'Product309', 'product309', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P309', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(359, 'Product310', 'product310', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P310', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(360, 'Product311', 'product311', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P311', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(361, 'Product312', 'product312', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P312', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(362, 'Product313', 'product313', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P313', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(363, 'Product314', 'product314', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P314', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(364, 'Product315', 'product315', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P315', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(365, 'Product316', 'product316', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P316', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(366, 'Product317', 'product317', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P317', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(367, 'Product318', 'product318', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P318', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(368, 'Product319', 'product319', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P319', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(369, 'Product320', 'product320', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P320', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(370, 'Product321', 'product321', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P321', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(371, 'Product322', 'product322', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P322', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(372, 'Product323', 'product323', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P323', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(373, 'Product324', 'product324', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P324', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(374, 'Product325', 'product325', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P325', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(375, 'Product326', 'product326', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P326', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(376, 'Product327', 'product327', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P327', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(377, 'Product328', 'product328', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P328', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(378, 'Product329', 'product329', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P329', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(379, 'Product330', 'product330', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P330', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(380, 'Product331', 'product331', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P331', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(381, 'Product332', 'product332', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P332', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(382, 'Product333', 'product333', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P333', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(383, 'Product334', 'product334', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P334', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(384, 'Product335', 'product335', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P335', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(385, 'Product336', 'product336', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P336', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(386, 'Product337', 'product337', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P337', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(387, 'Product338', 'product338', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P338', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(388, 'Product339', 'product339', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P339', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(389, 'Product340', 'product340', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P340', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(390, 'Product341', 'product341', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P341', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(391, 'Product342', 'product342', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P342', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(392, 'Product343', 'product343', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P343', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(393, 'Product344', 'product344', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P344', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(394, 'Product345', 'product345', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P345', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(395, 'Product346', 'product346', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P346', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(396, 'Product347', 'product347', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P347', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(397, 'Product348', 'product348', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P348', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(398, 'Product349', 'product349', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P349', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(399, 'Product350', 'product350', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P350', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(400, 'Product351', 'product351', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P351', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(401, 'Product352', 'product352', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P352', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(402, 'Product353', 'product353', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P353', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(403, 'Product354', 'product354', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P354', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(404, 'Product355', 'product355', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P355', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(405, 'Product356', 'product356', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P356', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(406, 'Product357', 'product357', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P357', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(407, 'Product358', 'product358', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P358', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(408, 'Product359', 'product359', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P359', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(409, 'Product360', 'product360', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P360', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(410, 'Product361', 'product361', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P361', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(411, 'Product362', 'product362', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P362', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(412, 'Product363', 'product363', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P363', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(413, 'Product364', 'product364', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P364', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(414, 'Product365', 'product365', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P365', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(415, 'Product366', 'product366', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P366', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(416, 'Product367', 'product367', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P367', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(417, 'Product368', 'product368', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P368', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(418, 'Product369', 'product369', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P369', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(419, 'Product370', 'product370', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P370', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(420, 'Product371', 'product371', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P371', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(421, 'Product372', 'product372', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P372', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(422, 'Product373', 'product373', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P373', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(423, 'Product374', 'product374', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P374', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(424, 'Product375', 'product375', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P375', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(425, 'Product376', 'product376', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P376', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(426, 'Product377', 'product377', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P377', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(427, 'Product378', 'product378', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P378', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(428, 'Product379', 'product379', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P379', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(429, 'Product380', 'product380', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P380', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(430, 'Product381', 'product381', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P381', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(431, 'Product382', 'product382', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P382', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(432, 'Product383', 'product383', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P383', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(433, 'Product384', 'product384', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P384', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(434, 'Product385', 'product385', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P385', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(435, 'Product386', 'product386', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P386', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(436, 'Product387', 'product387', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P387', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(437, 'Product388', 'product388', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P388', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(438, 'Product389', 'product389', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P389', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(439, 'Product390', 'product390', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P390', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(440, 'Product391', 'product391', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P391', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(441, 'Product392', 'product392', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P392', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(442, 'Product393', 'product393', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P393', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(443, 'Product394', 'product394', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P394', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(444, 'Product395', 'product395', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P395', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(445, 'Product396', 'product396', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P396', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(446, 'Product397', 'product397', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P397', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(447, 'Product398', 'product398', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P398', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(448, 'Product399', 'product399', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P399', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(449, 'Product400', 'product400', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P400', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(450, 'Product401', 'product401', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P401', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(451, 'Product402', 'product402', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P402', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(452, 'Product403', 'product403', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P403', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(453, 'Product404', 'product404', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P404', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(454, 'Product405', 'product405', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P405', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(455, 'Product406', 'product406', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P406', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(456, 'Product407', 'product407', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P407', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(457, 'Product408', 'product408', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P408', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(458, 'Product409', 'product409', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P409', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(459, 'Product410', 'product410', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P410', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(460, 'Product411', 'product411', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P411', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(461, 'Product412', 'product412', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P412', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(462, 'Product413', 'product413', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P413', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(463, 'Product414', 'product414', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P414', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(464, 'Product415', 'product415', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P415', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(465, 'Product416', 'product416', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P416', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(466, 'Product417', 'product417', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P417', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(467, 'Product418', 'product418', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P418', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(468, 'Product419', 'product419', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P419', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(469, 'Product420', 'product420', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P420', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(470, 'Product421', 'product421', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P421', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(471, 'Product422', 'product422', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P422', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(472, 'Product423', 'product423', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P423', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(473, 'Product424', 'product424', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P424', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(474, 'Product425', 'product425', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P425', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(475, 'Product426', 'product426', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P426', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(476, 'Product427', 'product427', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P427', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(477, 'Product428', 'product428', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P428', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:44', NULL),
(478, 'Product429', 'product429', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P429', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(479, 'Product430', 'product430', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P430', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(480, 'Product431', 'product431', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P431', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(481, 'Product432', 'product432', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P432', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(482, 'Product433', 'product433', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P433', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(483, 'Product434', 'product434', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P434', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(484, 'Product435', 'product435', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P435', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(485, 'Product436', 'product436', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P436', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(486, 'Product437', 'product437', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P437', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(487, 'Product438', 'product438', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P438', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(488, 'Product439', 'product439', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P439', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(489, 'Product440', 'product440', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P440', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:57', '2017-07-16 08:52:45', NULL),
(490, 'Product441', 'product441', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P441', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(491, 'Product442', 'product442', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P442', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(492, 'Product443', 'product443', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P443', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(493, 'Product444', 'product444', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P444', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(494, 'Product445', 'product445', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P445', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(495, 'Product446', 'product446', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P446', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(496, 'Product447', 'product447', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P447', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(497, 'Product448', 'product448', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P448', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(498, 'Product449', 'product449', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P449', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(499, 'Product450', 'product450', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P450', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(500, 'Product451', 'product451', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P451', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(501, 'Product452', 'product452', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P452', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(502, 'Product453', 'product453', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P453', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(503, 'Product454', 'product454', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P454', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(504, 'Product455', 'product455', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P455', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(505, 'Product456', 'product456', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P456', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(506, 'Product457', 'product457', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P457', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(507, 'Product458', 'product458', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P458', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(508, 'Product459', 'product459', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P459', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(509, 'Product460', 'product460', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P460', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(510, 'Product461', 'product461', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P461', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(511, 'Product462', 'product462', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P462', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(512, 'Product463', 'product463', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P463', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(513, 'Product464', 'product464', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P464', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(514, 'Product465', 'product465', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P465', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(515, 'Product466', 'product466', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P466', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(516, 'Product467', 'product467', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P467', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(517, 'Product468', 'product468', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P468', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(518, 'Product469', 'product469', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P469', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(519, 'Product470', 'product470', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P470', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(520, 'Product471', 'product471', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P471', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(521, 'Product472', 'product472', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P472', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(522, 'Product473', 'product473', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P473', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(523, 'Product474', 'product474', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P474', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(524, 'Product475', 'product475', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P475', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(525, 'Product476', 'product476', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P476', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(526, 'Product477', 'product477', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P477', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(527, 'Product478', 'product478', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P478', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(528, 'Product479', 'product479', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P479', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(529, 'Product480', 'product480', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P480', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(530, 'Product481', 'product481', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P481', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(531, 'Product482', 'product482', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P482', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(532, 'Product483', 'product483', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P483', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(533, 'Product484', 'product484', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P484', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(534, 'Product485', 'product485', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P485', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(535, 'Product486', 'product486', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P486', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(536, 'Product487', 'product487', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P487', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(537, 'Product488', 'product488', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P488', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(538, 'Product489', 'product489', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P489', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(539, 'Product490', 'product490', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P490', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(540, 'Product491', 'product491', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P491', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(541, 'Product492', 'product492', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P492', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(542, 'Product493', 'product493', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P493', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(543, 'Product494', 'product494', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P494', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(544, 'Product495', 'product495', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P495', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(545, 'Product496', 'product496', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P496', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(546, 'Product497', 'product497', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P497', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(547, 'Product498', 'product498', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P498', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(548, 'Product499', 'product499', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P499', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(549, 'Product500', 'product500', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P500', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(550, 'Product501', 'product501', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P501', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(551, 'Product502', 'product502', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P502', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(552, 'Product503', 'product503', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P503', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(553, 'Product504', 'product504', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P504', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(554, 'Product505', 'product505', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P505', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(555, 'Product506', 'product506', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P506', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(556, 'Product507', 'product507', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P507', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(557, 'Product508', 'product508', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P508', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(558, 'Product509', 'product509', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P509', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(559, 'Product510', 'product510', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P510', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(560, 'Product511', 'product511', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P511', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(561, 'Product512', 'product512', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P512', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(562, 'Product513', 'product513', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P513', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(563, 'Product514', 'product514', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P514', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(564, 'Product515', 'product515', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P515', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(565, 'Product516', 'product516', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P516', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(566, 'Product517', 'product517', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P517', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(567, 'Product518', 'product518', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P518', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(568, 'Product519', 'product519', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P519', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(569, 'Product520', 'product520', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P520', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(570, 'Product521', 'product521', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P521', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(571, 'Product522', 'product522', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P522', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(572, 'Product523', 'product523', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P523', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(573, 'Product524', 'product524', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P524', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(574, 'Product525', 'product525', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P525', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(575, 'Product526', 'product526', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P526', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(576, 'Product527', 'product527', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P527', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(577, 'Product528', 'product528', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P528', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(578, 'Product529', 'product529', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P529', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(579, 'Product530', 'product530', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P530', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(580, 'Product531', 'product531', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P531', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(581, 'Product532', 'product532', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P532', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(582, 'Product533', 'product533', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P533', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(583, 'Product534', 'product534', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P534', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(584, 'Product535', 'product535', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P535', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(585, 'Product536', 'product536', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P536', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(586, 'Product537', 'product537', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P537', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(587, 'Product538', 'product538', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P538', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(588, 'Product539', 'product539', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P539', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(589, 'Product540', 'product540', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P540', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(590, 'Product541', 'product541', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P541', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(591, 'Product542', 'product542', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P542', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(592, 'Product543', 'product543', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P543', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(593, 'Product544', 'product544', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P544', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(594, 'Product545', 'product545', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P545', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(595, 'Product546', 'product546', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P546', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(596, 'Product547', 'product547', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P547', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(597, 'Product548', 'product548', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P548', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(598, 'Product549', 'product549', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P549', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(599, 'Product550', 'product550', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P550', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(600, 'Product551', 'product551', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P551', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(601, 'Product552', 'product552', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P552', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(602, 'Product553', 'product553', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P553', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(603, 'Product554', 'product554', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P554', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(604, 'Product555', 'product555', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P555', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(605, 'Product556', 'product556', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P556', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(606, 'Product557', 'product557', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P557', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(607, 'Product558', 'product558', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P558', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(608, 'Product559', 'product559', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P559', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(609, 'Product560', 'product560', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P560', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(610, 'Product561', 'product561', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P561', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(611, 'Product562', 'product562', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P562', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(612, 'Product563', 'product563', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P563', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(613, 'Product564', 'product564', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P564', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(614, 'Product565', 'product565', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P565', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(615, 'Product566', 'product566', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P566', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(616, 'Product567', 'product567', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P567', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(617, 'Product568', 'product568', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P568', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(618, 'Product569', 'product569', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P569', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(619, 'Product570', 'product570', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P570', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(620, 'Product571', 'product571', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P571', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(621, 'Product572', 'product572', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P572', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(622, 'Product573', 'product573', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P573', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(623, 'Product574', 'product574', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P574', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(624, 'Product575', 'product575', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P575', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(625, 'Product576', 'product576', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P576', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(626, 'Product577', 'product577', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P577', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(627, 'Product578', 'product578', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P578', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(628, 'Product579', 'product579', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P579', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(629, 'Product580', 'product580', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P580', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(630, 'Product581', 'product581', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P581', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(631, 'Product582', 'product582', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P582', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(632, 'Product583', 'product583', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P583', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(633, 'Product584', 'product584', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P584', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(634, 'Product585', 'product585', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P585', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(635, 'Product586', 'product586', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P586', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(636, 'Product587', 'product587', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P587', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(637, 'Product588', 'product588', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P588', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(638, 'Product589', 'product589', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P589', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(639, 'Product590', 'product590', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P590', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(640, 'Product591', 'product591', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P591', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(641, 'Product592', 'product592', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P592', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(642, 'Product593', 'product593', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P593', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(643, 'Product594', 'product594', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P594', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(644, 'Product595', 'product595', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P595', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(645, 'Product596', 'product596', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P596', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(646, 'Product597', 'product597', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P597', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(647, 'Product598', 'product598', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P598', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(648, 'Product599', 'product599', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P599', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(649, 'Product600', 'product600', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P600', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(650, 'Product601', 'product601', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P601', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(651, 'Product602', 'product602', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P602', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(652, 'Product603', 'product603', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P603', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(653, 'Product604', 'product604', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P604', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(654, 'Product605', 'product605', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P605', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(655, 'Product606', 'product606', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P606', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(656, 'Product607', 'product607', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P607', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(657, 'Product608', 'product608', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P608', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(658, 'Product609', 'product609', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P609', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(659, 'Product610', 'product610', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P610', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(660, 'Product611', 'product611', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P611', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(661, 'Product612', 'product612', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P612', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(662, 'Product613', 'product613', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P613', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(663, 'Product614', 'product614', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P614', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:45', NULL),
(664, 'Product615', 'product615', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P615', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(665, 'Product616', 'product616', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P616', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(666, 'Product617', 'product617', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P617', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(667, 'Product618', 'product618', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P618', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(668, 'Product619', 'product619', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P619', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(669, 'Product620', 'product620', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P620', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(670, 'Product621', 'product621', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P621', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(671, 'Product622', 'product622', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P622', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(672, 'Product623', 'product623', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P623', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(673, 'Product624', 'product624', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P624', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(674, 'Product625', 'product625', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P625', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(675, 'Product626', 'product626', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P626', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(676, 'Product627', 'product627', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P627', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(677, 'Product628', 'product628', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P628', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(678, 'Product629', 'product629', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P629', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(679, 'Product630', 'product630', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P630', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(680, 'Product631', 'product631', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P631', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(681, 'Product632', 'product632', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P632', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(682, 'Product633', 'product633', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P633', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(683, 'Product634', 'product634', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P634', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(684, 'Product635', 'product635', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P635', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(685, 'Product636', 'product636', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P636', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(686, 'Product637', 'product637', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P637', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(687, 'Product638', 'product638', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P638', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(688, 'Product639', 'product639', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P639', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(689, 'Product640', 'product640', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P640', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(690, 'Product641', 'product641', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P641', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(691, 'Product642', 'product642', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P642', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(692, 'Product643', 'product643', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P643', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(693, 'Product644', 'product644', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P644', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(694, 'Product645', 'product645', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P645', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(695, 'Product646', 'product646', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P646', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(696, 'Product647', 'product647', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P647', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(697, 'Product648', 'product648', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P648', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(698, 'Product649', 'product649', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P649', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(699, 'Product650', 'product650', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P650', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(700, 'Product651', 'product651', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P651', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(701, 'Product652', 'product652', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P652', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(702, 'Product653', 'product653', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P653', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(703, 'Product654', 'product654', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P654', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(704, 'Product655', 'product655', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P655', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(705, 'Product656', 'product656', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P656', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(706, 'Product657', 'product657', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P657', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(707, 'Product658', 'product658', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P658', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(708, 'Product659', 'product659', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P659', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(709, 'Product660', 'product660', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P660', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(710, 'Product661', 'product661', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P661', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(711, 'Product662', 'product662', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P662', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(712, 'Product663', 'product663', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P663', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(713, 'Product664', 'product664', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P664', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(714, 'Product665', 'product665', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P665', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(715, 'Product666', 'product666', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P666', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(716, 'Product667', 'product667', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P667', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(717, 'Product668', 'product668', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P668', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(718, 'Product669', 'product669', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P669', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(719, 'Product670', 'product670', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P670', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(720, 'Product671', 'product671', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P671', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(721, 'Product672', 'product672', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P672', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(722, 'Product673', 'product673', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P673', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(723, 'Product674', 'product674', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P674', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(724, 'Product675', 'product675', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P675', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(725, 'Product676', 'product676', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P676', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(726, 'Product677', 'product677', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P677', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(727, 'Product678', 'product678', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P678', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(728, 'Product679', 'product679', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P679', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(729, 'Product680', 'product680', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P680', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(730, 'Product681', 'product681', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P681', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(731, 'Product682', 'product682', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P682', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(732, 'Product683', 'product683', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P683', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(733, 'Product684', 'product684', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P684', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(734, 'Product685', 'product685', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P685', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(735, 'Product686', 'product686', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P686', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(736, 'Product687', 'product687', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P687', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(737, 'Product688', 'product688', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P688', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(738, 'Product689', 'product689', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P689', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(739, 'Product690', 'product690', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P690', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(740, 'Product691', 'product691', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P691', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(741, 'Product692', 'product692', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P692', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(742, 'Product693', 'product693', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P693', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(743, 'Product694', 'product694', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P694', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(744, 'Product695', 'product695', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P695', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(745, 'Product696', 'product696', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P696', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(746, 'Product697', 'product697', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P697', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(747, 'Product698', 'product698', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P698', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(748, 'Product699', 'product699', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P699', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(749, 'Product700', 'product700', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P700', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(750, 'Product701', 'product701', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P701', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(751, 'Product702', 'product702', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P702', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(752, 'Product703', 'product703', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P703', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(753, 'Product704', 'product704', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P704', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(754, 'Product705', 'product705', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P705', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(755, 'Product706', 'product706', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P706', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(756, 'Product707', 'product707', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P707', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(757, 'Product708', 'product708', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P708', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(758, 'Product709', 'product709', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P709', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(759, 'Product710', 'product710', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P710', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(760, 'Product711', 'product711', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P711', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(761, 'Product712', 'product712', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P712', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(762, 'Product713', 'product713', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P713', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(763, 'Product714', 'product714', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P714', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(764, 'Product715', 'product715', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P715', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(765, 'Product716', 'product716', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P716', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(766, 'Product717', 'product717', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P717', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(767, 'Product718', 'product718', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P718', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(768, 'Product719', 'product719', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P719', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(769, 'Product720', 'product720', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P720', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(770, 'Product721', 'product721', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P721', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(771, 'Product722', 'product722', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P722', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(772, 'Product723', 'product723', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P723', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(773, 'Product724', 'product724', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P724', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(774, 'Product725', 'product725', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P725', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(775, 'Product726', 'product726', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P726', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(776, 'Product727', 'product727', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P727', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(777, 'Product728', 'product728', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P728', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(778, 'Product729', 'product729', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P729', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(779, 'Product730', 'product730', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P730', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(780, 'Product731', 'product731', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P731', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(781, 'Product732', 'product732', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P732', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(782, 'Product733', 'product733', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P733', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(783, 'Product734', 'product734', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P734', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(784, 'Product735', 'product735', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P735', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(785, 'Product736', 'product736', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P736', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(786, 'Product737', 'product737', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P737', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(787, 'Product738', 'product738', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P738', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(788, 'Product739', 'product739', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P739', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(789, 'Product740', 'product740', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P740', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(790, 'Product741', 'product741', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P741', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(791, 'Product742', 'product742', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P742', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(792, 'Product743', 'product743', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P743', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(793, 'Product744', 'product744', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P744', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(794, 'Product745', 'product745', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P745', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(795, 'Product746', 'product746', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P746', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(796, 'Product747', 'product747', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P747', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(797, 'Product748', 'product748', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P748', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(798, 'Product749', 'product749', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P749', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(799, 'Product750', 'product750', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P750', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(800, 'Product751', 'product751', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P751', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(801, 'Product752', 'product752', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P752', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(802, 'Product753', 'product753', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P753', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(803, 'Product754', 'product754', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P754', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(804, 'Product755', 'product755', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P755', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(805, 'Product756', 'product756', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P756', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(806, 'Product757', 'product757', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P757', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(807, 'Product758', 'product758', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P758', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(808, 'Product759', 'product759', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P759', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(809, 'Product760', 'product760', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P760', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(810, 'Product761', 'product761', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P761', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(811, 'Product762', 'product762', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P762', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(812, 'Product763', 'product763', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P763', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(813, 'Product764', 'product764', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P764', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(814, 'Product765', 'product765', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P765', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(815, 'Product766', 'product766', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P766', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(816, 'Product767', 'product767', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P767', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(817, 'Product768', 'product768', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P768', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(818, 'Product769', 'product769', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P769', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(819, 'Product770', 'product770', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P770', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(820, 'Product771', 'product771', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P771', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(821, 'Product772', 'product772', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P772', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(822, 'Product773', 'product773', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P773', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(823, 'Product774', 'product774', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P774', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(824, 'Product775', 'product775', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P775', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(825, 'Product776', 'product776', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P776', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(826, 'Product777', 'product777', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P777', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(827, 'Product778', 'product778', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P778', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(828, 'Product779', 'product779', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P779', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(829, 'Product780', 'product780', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P780', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:58', '2017-07-16 08:52:46', NULL),
(830, 'Product781', 'product781', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P781', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(831, 'Product782', 'product782', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P782', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(832, 'Product783', 'product783', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P783', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(833, 'Product784', 'product784', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P784', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(834, 'Product785', 'product785', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P785', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(835, 'Product786', 'product786', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P786', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(836, 'Product787', 'product787', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P787', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(837, 'Product788', 'product788', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P788', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(838, 'Product789', 'product789', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P789', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(839, 'Product790', 'product790', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P790', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(840, 'Product791', 'product791', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P791', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(841, 'Product792', 'product792', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P792', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(842, 'Product793', 'product793', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P793', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(843, 'Product794', 'product794', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P794', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(844, 'Product795', 'product795', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P795', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(845, 'Product796', 'product796', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P796', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(846, 'Product797', 'product797', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P797', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(847, 'Product798', 'product798', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P798', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:46', NULL),
(848, 'Product799', 'product799', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P799', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(849, 'Product800', 'product800', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P800', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(850, 'Product801', 'product801', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P801', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(851, 'Product802', 'product802', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P802', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(852, 'Product803', 'product803', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P803', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(853, 'Product804', 'product804', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P804', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(854, 'Product805', 'product805', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P805', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(855, 'Product806', 'product806', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P806', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(856, 'Product807', 'product807', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P807', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(857, 'Product808', 'product808', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P808', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(858, 'Product809', 'product809', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P809', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(859, 'Product810', 'product810', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P810', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(860, 'Product811', 'product811', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P811', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(861, 'Product812', 'product812', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P812', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(862, 'Product813', 'product813', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P813', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(863, 'Product814', 'product814', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P814', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(864, 'Product815', 'product815', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P815', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(865, 'Product816', 'product816', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P816', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(866, 'Product817', 'product817', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P817', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(867, 'Product818', 'product818', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P818', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(868, 'Product819', 'product819', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P819', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(869, 'Product820', 'product820', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P820', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(870, 'Product821', 'product821', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P821', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(871, 'Product822', 'product822', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P822', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(872, 'Product823', 'product823', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P823', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(873, 'Product824', 'product824', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P824', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(874, 'Product825', 'product825', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P825', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(875, 'Product826', 'product826', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P826', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(876, 'Product827', 'product827', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P827', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(877, 'Product828', 'product828', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P828', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(878, 'Product829', 'product829', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P829', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(879, 'Product830', 'product830', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P830', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(880, 'Product831', 'product831', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P831', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(881, 'Product832', 'product832', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P832', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(882, 'Product833', 'product833', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P833', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(883, 'Product834', 'product834', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P834', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(884, 'Product835', 'product835', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P835', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(885, 'Product836', 'product836', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P836', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(886, 'Product837', 'product837', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P837', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(887, 'Product838', 'product838', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P838', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(888, 'Product839', 'product839', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P839', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(889, 'Product840', 'product840', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P840', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(890, 'Product841', 'product841', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P841', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(891, 'Product842', 'product842', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P842', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(892, 'Product843', 'product843', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P843', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(893, 'Product844', 'product844', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P844', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(894, 'Product845', 'product845', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P845', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(895, 'Product846', 'product846', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P846', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(896, 'Product847', 'product847', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P847', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(897, 'Product848', 'product848', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P848', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(898, 'Product849', 'product849', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P849', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(899, 'Product850', 'product850', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P850', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(900, 'Product851', 'product851', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P851', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(901, 'Product852', 'product852', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P852', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(902, 'Product853', 'product853', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P853', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(903, 'Product854', 'product854', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P854', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(904, 'Product855', 'product855', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P855', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(905, 'Product856', 'product856', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P856', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(906, 'Product857', 'product857', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P857', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(907, 'Product858', 'product858', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P858', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(908, 'Product859', 'product859', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P859', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(909, 'Product860', 'product860', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P860', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(910, 'Product861', 'product861', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P861', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(911, 'Product862', 'product862', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P862', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(912, 'Product863', 'product863', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P863', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(913, 'Product864', 'product864', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P864', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(914, 'Product865', 'product865', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P865', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(915, 'Product866', 'product866', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P866', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(916, 'Product867', 'product867', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P867', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(917, 'Product868', 'product868', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P868', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(918, 'Product869', 'product869', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P869', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(919, 'Product870', 'product870', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P870', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(920, 'Product871', 'product871', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P871', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(921, 'Product872', 'product872', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P872', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(922, 'Product873', 'product873', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P873', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(923, 'Product874', 'product874', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P874', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(924, 'Product875', 'product875', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P875', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(925, 'Product876', 'product876', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P876', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(926, 'Product877', 'product877', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P877', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(927, 'Product878', 'product878', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P878', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(928, 'Product879', 'product879', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P879', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(929, 'Product880', 'product880', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P880', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(930, 'Product881', 'product881', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P881', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(931, 'Product882', 'product882', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P882', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(932, 'Product883', 'product883', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P883', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(933, 'Product884', 'product884', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P884', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(934, 'Product885', 'product885', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P885', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(935, 'Product886', 'product886', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P886', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(936, 'Product887', 'product887', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P887', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(937, 'Product888', 'product888', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P888', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(938, 'Product889', 'product889', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P889', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(939, 'Product890', 'product890', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P890', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(940, 'Product891', 'product891', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P891', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(941, 'Product892', 'product892', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P892', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(942, 'Product893', 'product893', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P893', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(943, 'Product894', 'product894', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P894', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(944, 'Product895', 'product895', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P895', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(945, 'Product896', 'product896', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P896', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(946, 'Product897', 'product897', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P897', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(947, 'Product898', 'product898', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P898', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(948, 'Product899', 'product899', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P899', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(949, 'Product900', 'product900', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P900', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(950, 'Product901', 'product901', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P901', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(951, 'Product902', 'product902', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P902', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(952, 'Product903', 'product903', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P903', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(953, 'Product904', 'product904', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P904', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(954, 'Product905', 'product905', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P905', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(955, 'Product906', 'product906', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P906', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(956, 'Product907', 'product907', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P907', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(957, 'Product908', 'product908', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P908', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(958, 'Product909', 'product909', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P909', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(959, 'Product910', 'product910', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P910', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(960, 'Product911', 'product911', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P911', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(961, 'Product912', 'product912', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P912', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(962, 'Product913', 'product913', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P913', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(963, 'Product914', 'product914', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P914', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(964, 'Product915', 'product915', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P915', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(965, 'Product916', 'product916', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P916', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(966, 'Product917', 'product917', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P917', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(967, 'Product918', 'product918', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P918', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(968, 'Product919', 'product919', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P919', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(969, 'Product920', 'product920', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P920', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(970, 'Product921', 'product921', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P921', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(971, 'Product922', 'product922', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P922', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(972, 'Product923', 'product923', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P923', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(973, 'Product924', 'product924', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P924', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(974, 'Product925', 'product925', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P925', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(975, 'Product926', 'product926', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P926', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(976, 'Product927', 'product927', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P927', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(977, 'Product928', 'product928', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P928', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(978, 'Product929', 'product929', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P929', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(979, 'Product930', 'product930', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P930', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(980, 'Product931', 'product931', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P931', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL);
INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `cost`, `qty`, `attribute_id`, `price`, `discount_type`, `discount`, `short_description`, `description`, `code`, `origin_place`, `city_id`, `currency_id`, `user_id`, `author`, `can_order`, `new`, `popular`, `img_path`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(981, 'Product932', 'product932', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P932', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(982, 'Product933', 'product933', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P933', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(983, 'Product934', 'product934', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P934', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(984, 'Product935', 'product935', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P935', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(985, 'Product936', 'product936', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P936', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(986, 'Product937', 'product937', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P937', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(987, 'Product938', 'product938', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P938', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(988, 'Product939', 'product939', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P939', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(989, 'Product940', 'product940', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P940', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(990, 'Product941', 'product941', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P941', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(991, 'Product942', 'product942', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P942', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(992, 'Product943', 'product943', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P943', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(993, 'Product944', 'product944', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P944', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(994, 'Product945', 'product945', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P945', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(995, 'Product946', 'product946', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P946', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(996, 'Product947', 'product947', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P947', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(997, 'Product948', 'product948', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P948', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(998, 'Product949', 'product949', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P949', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(999, 'Product950', 'product950', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P950', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1000, 'Product951', 'product951', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P951', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1001, 'Product952', 'product952', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P952', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1002, 'Product953', 'product953', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P953', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1003, 'Product954', 'product954', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P954', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1004, 'Product955', 'product955', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P955', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1005, 'Product956', 'product956', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P956', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1006, 'Product957', 'product957', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P957', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1007, 'Product958', 'product958', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P958', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1008, 'Product959', 'product959', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P959', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1009, 'Product960', 'product960', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P960', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1010, 'Product961', 'product961', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P961', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1011, 'Product962', 'product962', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P962', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1012, 'Product963', 'product963', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P963', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1013, 'Product964', 'product964', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P964', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1014, 'Product965', 'product965', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P965', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1015, 'Product966', 'product966', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P966', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1016, 'Product967', 'product967', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P967', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1017, 'Product968', 'product968', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P968', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1018, 'Product969', 'product969', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P969', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1019, 'Product970', 'product970', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P970', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1020, 'Product971', 'product971', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P971', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1021, 'Product972', 'product972', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P972', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1022, 'Product973', 'product973', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P973', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:47', NULL),
(1023, 'Product974', 'product974', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P974', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1024, 'Product975', 'product975', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P975', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1025, 'Product976', 'product976', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P976', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1026, 'Product977', 'product977', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P977', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1027, 'Product978', 'product978', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P978', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1028, 'Product979', 'product979', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P979', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1029, 'Product980', 'product980', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P980', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1030, 'Product981', 'product981', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P981', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1031, 'Product982', 'product982', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P982', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1032, 'Product983', 'product983', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P983', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1033, 'Product984', 'product984', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P984', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1034, 'Product985', 'product985', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P985', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1035, 'Product986', 'product986', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P986', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1036, 'Product987', 'product987', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P987', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1037, 'Product988', 'product988', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P988', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1038, 'Product989', 'product989', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P989', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1039, 'Product990', 'product990', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P990', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1040, 'Product991', 'product991', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P991', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1041, 'Product992', 'product992', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P992', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1042, 'Product993', 'product993', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P993', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1043, 'Product994', 'product994', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P994', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1044, 'Product995', 'product995', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P995', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1045, 'Product996', 'product996', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P996', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1046, 'Product997', 'product997', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P997', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1047, 'Product998', 'product998', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P998', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-16 08:52:48', NULL),
(1048, 'Product999', 'product999', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P999', NULL, NULL, '1', 1, NULL, 1, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:27:59', '2017-07-26 23:33:00', NULL),
(1049, 'Product1000', 'product1000', 2, '20.00', 10, NULL, '25.00', NULL, NULL, 'Product short description', 'Product description', 'P1000', NULL, NULL, '1', 1, NULL, 0, 0, 0, 'uploads/product/img/', 1, '2017-07-16 06:44:45', '2017-07-16 08:52:48', NULL),
(1050, 'Product 1001', 'product-1001', NULL, '34000.00', 23, NULL, '45000.00', NULL, NULL, 'Product short description 1001', 'Product description 1001', 'P1001', NULL, NULL, '2', 1, NULL, 1, 0, 0, 'uploads/product/img/', 1, '2017-07-26 23:43:38', '2017-07-26 23:54:16', NULL),
(1051, 'Product 1002', 'product-1002', NULL, '43.00', 43, NULL, '56.00', NULL, NULL, 'Product short description 1002', 'Product description 1002', 'P1002', NULL, NULL, '1', 1, NULL, 1, 0, 0, 'uploads/product/img/', 1, '2017-07-26 23:43:38', '2017-07-26 23:45:07', NULL),
(1052, 'Product 1003', 'product-1003', NULL, '64.00', 676, NULL, '76.00', NULL, NULL, 'Product short description 1003', 'Product description 1003', 'P1003', NULL, NULL, '1', 1, NULL, 1, 0, 0, 'uploads/product/img/', 1, '2017-07-26 23:43:38', '2017-07-26 23:45:07', NULL),
(1053, 'Test', 'test-of-lankunding', NULL, '120000.00', 20, NULL, '230000.00', NULL, NULL, '<p>    New test product description</p>', '<p>New test product description slkfsflksdflks<br></p>', 'Te0393329938', NULL, NULL, '2', 1, NULL, 1, 0, 0, 'uploads/product/img/', 1, '2017-07-29 08:22:16', '2017-07-29 08:58:54', NULL);

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
(44, 35, 8, '2017-06-05 07:37:35', '2017-06-05 07:37:35'),
(73, 53, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(72, 52, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(71, 51, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(70, 50, 2, '2017-07-16 08:30:10', '2017-07-16 08:30:10'),
(80, 60, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(79, 59, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(75, 55, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(74, 54, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(78, 58, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(56, 39, 8, '2017-06-24 09:57:28', '2017-06-24 09:57:28'),
(57, 39, 10, '2017-06-24 09:57:28', '2017-06-24 09:57:28'),
(77, 57, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(76, 56, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(83, 63, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(82, 62, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(81, 61, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(87, 67, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(86, 66, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(85, 65, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(84, 64, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(88, 68, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(89, 69, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(90, 70, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(91, 71, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(92, 72, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(93, 73, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(94, 74, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(95, 75, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(96, 76, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(97, 77, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(98, 78, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(99, 79, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(100, 80, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(101, 81, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(102, 82, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(103, 83, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(104, 84, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(105, 85, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(106, 86, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(107, 87, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(108, 88, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(109, 89, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(110, 90, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(111, 91, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(112, 92, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(113, 93, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(114, 94, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(115, 95, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(116, 96, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(117, 97, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(118, 98, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(119, 99, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(120, 100, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(121, 101, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(122, 102, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(123, 103, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(124, 104, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(125, 105, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(126, 106, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(127, 107, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(128, 108, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(129, 109, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(130, 110, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(131, 111, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(132, 112, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(133, 113, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(134, 114, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(135, 115, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(136, 116, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(137, 117, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(138, 118, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(139, 119, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(140, 120, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(141, 121, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(142, 122, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(143, 123, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(144, 124, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(145, 125, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(146, 126, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(147, 127, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(148, 128, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(149, 129, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(150, 130, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(151, 131, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(152, 132, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(153, 133, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(154, 134, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(155, 135, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(156, 136, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(157, 137, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(158, 138, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(159, 139, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(160, 140, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(161, 141, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(162, 142, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(163, 143, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(164, 144, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(165, 145, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(166, 146, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(167, 147, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(168, 148, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(169, 149, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(170, 150, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(171, 151, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(172, 152, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(173, 153, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(174, 154, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(175, 155, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(176, 156, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(177, 157, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(178, 158, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(179, 159, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(180, 160, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(181, 161, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(182, 162, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(183, 163, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(184, 164, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(185, 165, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(186, 166, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(187, 167, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(188, 168, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(189, 169, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(190, 170, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(191, 171, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(192, 172, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(193, 173, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(194, 174, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(195, 175, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(196, 176, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(197, 177, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(198, 178, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(199, 179, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(200, 180, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(201, 181, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(202, 182, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(203, 183, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(204, 184, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(205, 185, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(206, 186, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(207, 187, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(208, 188, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(209, 189, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(210, 190, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(211, 191, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(212, 192, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(213, 193, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(214, 194, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(215, 195, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(216, 196, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(217, 197, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(218, 198, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(219, 199, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(220, 200, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(221, 201, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(222, 202, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(223, 203, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(224, 204, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(225, 205, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(226, 206, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(227, 207, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(228, 208, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(229, 209, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(230, 210, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(231, 211, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(232, 212, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(233, 213, 2, '2017-07-16 08:30:11', '2017-07-16 08:30:11'),
(234, 214, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(235, 215, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(236, 216, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(237, 217, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(238, 218, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(239, 219, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(240, 220, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(241, 221, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(242, 222, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(243, 223, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(244, 224, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(245, 225, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(246, 226, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(247, 227, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(248, 228, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(249, 229, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(250, 230, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(251, 231, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(252, 232, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(253, 233, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(254, 234, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(255, 235, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(256, 236, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(257, 237, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(258, 238, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(259, 239, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(260, 240, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(261, 241, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(262, 242, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(263, 243, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(264, 244, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(265, 245, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(266, 246, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(267, 247, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(268, 248, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(269, 249, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(270, 250, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(271, 251, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(272, 252, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(273, 253, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(274, 254, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(275, 255, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(276, 256, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(277, 257, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(278, 258, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(279, 259, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(280, 260, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(281, 261, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(282, 262, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(283, 263, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(284, 264, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(285, 265, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(286, 266, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(287, 267, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(288, 268, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(289, 269, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(290, 270, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(291, 271, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(292, 272, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(293, 273, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(294, 274, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(295, 275, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(296, 276, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(297, 277, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(298, 278, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(299, 279, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(300, 280, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(301, 281, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(302, 282, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(303, 283, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(304, 284, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(305, 285, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(306, 286, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(307, 287, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(308, 288, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(309, 289, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(310, 290, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(311, 291, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(312, 292, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(313, 293, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(314, 294, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(315, 295, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(316, 296, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(317, 297, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(318, 298, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(319, 299, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(320, 300, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(321, 301, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(322, 302, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(323, 303, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(324, 304, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(325, 305, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(326, 306, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(327, 307, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(328, 308, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(329, 309, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(330, 310, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(331, 311, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(332, 312, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(333, 313, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(334, 314, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(335, 315, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(336, 316, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(337, 317, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(338, 318, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(339, 319, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(340, 320, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(341, 321, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(342, 322, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(343, 323, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(344, 324, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(345, 325, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(346, 326, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(347, 327, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(348, 328, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(349, 329, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(350, 330, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(351, 331, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(352, 332, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(353, 333, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(354, 334, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(355, 335, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(356, 336, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(357, 337, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(358, 338, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(359, 339, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(360, 340, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(361, 341, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(362, 342, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(363, 343, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(364, 344, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(365, 345, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(366, 346, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(367, 347, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(368, 348, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(369, 349, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(370, 350, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(371, 351, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(372, 352, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(373, 353, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(374, 354, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(375, 355, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(376, 356, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(377, 357, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(378, 358, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(379, 359, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(380, 360, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(381, 361, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(382, 362, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(383, 363, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(384, 364, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(385, 365, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(386, 366, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(387, 367, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(388, 368, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(389, 369, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(390, 370, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(391, 371, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(392, 372, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(393, 373, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(394, 374, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(395, 375, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(396, 376, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(397, 377, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(398, 378, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(399, 379, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(400, 380, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(401, 381, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(402, 382, 2, '2017-07-16 08:30:12', '2017-07-16 08:30:12'),
(403, 383, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(404, 384, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(405, 385, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(406, 386, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(407, 387, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(408, 388, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(409, 389, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(410, 390, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(411, 391, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(412, 392, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(413, 393, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(414, 394, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(415, 395, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(416, 396, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(417, 397, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(418, 398, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(419, 399, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(420, 400, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(421, 401, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(422, 402, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(423, 403, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(424, 404, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(425, 405, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(426, 406, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(427, 407, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(428, 408, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(429, 409, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(430, 410, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(431, 411, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(432, 412, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(433, 413, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(434, 414, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(435, 415, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(436, 416, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(437, 417, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(438, 418, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(439, 419, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(440, 420, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(441, 421, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(442, 422, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(443, 423, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(444, 424, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(445, 425, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(446, 426, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(447, 427, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(448, 428, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(449, 429, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(450, 430, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(451, 431, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(452, 432, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(453, 433, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(454, 434, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(455, 435, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(456, 436, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(457, 437, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(458, 438, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(459, 439, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(460, 440, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(461, 441, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(462, 442, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(463, 443, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(464, 444, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(465, 445, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(466, 446, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(467, 447, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(468, 448, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(469, 449, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(470, 450, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(471, 451, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(472, 452, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(473, 453, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(474, 454, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(475, 455, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(476, 456, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(477, 457, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(478, 458, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(479, 459, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(480, 460, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(481, 461, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(482, 462, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(483, 463, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(484, 464, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(485, 465, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(486, 466, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(487, 467, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(488, 468, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(489, 469, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(490, 470, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(491, 471, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(492, 472, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(493, 473, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(494, 474, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(495, 475, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(496, 476, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(497, 477, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(498, 478, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(499, 479, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(500, 480, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(501, 481, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(502, 482, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(503, 483, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(504, 484, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(505, 485, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(506, 486, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(507, 487, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(508, 488, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(509, 489, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(510, 490, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(511, 491, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(512, 492, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(513, 493, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(514, 494, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(515, 495, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(516, 496, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(517, 497, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(518, 498, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(519, 499, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(520, 500, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(521, 501, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(522, 502, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(523, 503, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(524, 504, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(525, 505, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(526, 506, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(527, 507, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(528, 508, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(529, 509, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(530, 510, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(531, 511, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(532, 512, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(533, 513, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(534, 514, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(535, 515, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(536, 516, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(537, 517, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(538, 518, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(539, 519, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(540, 520, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(541, 521, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(542, 522, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(543, 523, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(544, 524, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(545, 525, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(546, 526, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(547, 527, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(548, 528, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(549, 529, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(550, 530, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(551, 531, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(552, 532, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(553, 533, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(554, 534, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(555, 535, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(556, 536, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(557, 537, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(558, 538, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(559, 539, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(560, 540, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(561, 541, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(562, 542, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(563, 543, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(564, 544, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(565, 545, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(566, 546, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(567, 547, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(568, 548, 2, '2017-07-16 08:30:13', '2017-07-16 08:30:13'),
(569, 549, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(570, 550, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(571, 551, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(572, 552, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(573, 553, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(574, 554, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(575, 555, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(576, 556, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(577, 557, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(578, 558, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(579, 559, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(580, 560, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(581, 561, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(582, 562, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(583, 563, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(584, 564, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(585, 565, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(586, 566, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(587, 567, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(588, 568, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(589, 569, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(590, 570, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(591, 571, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(592, 572, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(593, 573, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(594, 574, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(595, 575, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(596, 576, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(597, 577, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(598, 578, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(599, 579, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(600, 580, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(601, 581, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(602, 582, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(603, 583, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(604, 584, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(605, 585, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(606, 586, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(607, 587, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(608, 588, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(609, 589, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(610, 590, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(611, 591, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(612, 592, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(613, 593, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(614, 594, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(615, 595, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(616, 596, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(617, 597, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(618, 598, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(619, 599, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(620, 600, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(621, 601, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(622, 602, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(623, 603, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(624, 604, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(625, 605, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(626, 606, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(627, 607, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(628, 608, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(629, 609, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(630, 610, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(631, 611, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(632, 612, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(633, 613, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(634, 614, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(635, 615, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(636, 616, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(637, 617, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(638, 618, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(639, 619, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(640, 620, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(641, 621, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(642, 622, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(643, 623, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(644, 624, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(645, 625, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(646, 626, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(647, 627, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(648, 628, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(649, 629, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(650, 630, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(651, 631, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(652, 632, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(653, 633, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(654, 634, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(655, 635, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(656, 636, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(657, 637, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(658, 638, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(659, 639, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(660, 640, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(661, 641, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(662, 642, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(663, 643, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(664, 644, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(665, 645, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(666, 646, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(667, 647, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(668, 648, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(669, 649, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(670, 650, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(671, 651, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(672, 652, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(673, 653, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(674, 654, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(675, 655, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(676, 656, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(677, 657, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(678, 658, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(679, 659, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(680, 660, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(681, 661, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(682, 662, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(683, 663, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(684, 664, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(685, 665, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(686, 666, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(687, 667, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(688, 668, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(689, 669, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(690, 670, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(691, 671, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(692, 672, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(693, 673, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(694, 674, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(695, 675, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(696, 676, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(697, 677, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(698, 678, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(699, 679, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(700, 680, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(701, 681, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(702, 682, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(703, 683, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(704, 684, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(705, 685, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(706, 686, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(707, 687, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(708, 688, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(709, 689, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(710, 690, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(711, 691, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(712, 692, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(713, 693, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(714, 694, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(715, 695, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(716, 696, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(717, 697, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(718, 698, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(719, 699, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(720, 700, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(721, 701, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(722, 702, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(723, 703, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(724, 704, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(725, 705, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(726, 706, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(727, 707, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(728, 708, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(729, 709, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(730, 710, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(731, 711, 2, '2017-07-16 08:30:14', '2017-07-16 08:30:14'),
(732, 712, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(733, 713, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(734, 714, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(735, 715, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(736, 716, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(737, 717, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(738, 718, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(739, 719, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(740, 720, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(741, 721, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(742, 722, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(743, 723, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(744, 724, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(745, 725, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(746, 726, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(747, 727, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(748, 728, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(749, 729, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(750, 730, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(751, 731, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(752, 732, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(753, 733, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(754, 734, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(755, 735, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(756, 736, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(757, 737, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(758, 738, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(759, 739, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(760, 740, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(761, 741, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(762, 742, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(763, 743, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(764, 744, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(765, 745, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(766, 746, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(767, 747, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(768, 748, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(769, 749, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(770, 750, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(771, 751, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(772, 752, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(773, 753, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(774, 754, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(775, 755, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(776, 756, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(777, 757, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(778, 758, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(779, 759, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(780, 760, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(781, 761, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(782, 762, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(783, 763, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(784, 764, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(785, 765, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(786, 766, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(787, 767, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(788, 768, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(789, 769, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(790, 770, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(791, 771, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(792, 772, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(793, 773, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(794, 774, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(795, 775, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(796, 776, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(797, 777, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(798, 778, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(799, 779, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(800, 780, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(801, 781, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(802, 782, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(803, 783, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(804, 784, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(805, 785, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(806, 786, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(807, 787, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(808, 788, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(809, 789, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(810, 790, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(811, 791, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(812, 792, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(813, 793, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(814, 794, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(815, 795, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(816, 796, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(817, 797, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(818, 798, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(819, 799, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(820, 800, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(821, 801, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(822, 802, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(823, 803, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(824, 804, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(825, 805, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(826, 806, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(827, 807, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(828, 808, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(829, 809, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(830, 810, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(831, 811, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(832, 812, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(833, 813, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(834, 814, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(835, 815, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(836, 816, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(837, 817, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(838, 818, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(839, 819, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(840, 820, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(841, 821, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(842, 822, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(843, 823, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(844, 824, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(845, 825, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(846, 826, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(847, 827, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(848, 828, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(849, 829, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(850, 830, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(851, 831, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(852, 832, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(853, 833, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(854, 834, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(855, 835, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(856, 836, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(857, 837, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(858, 838, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(859, 839, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(860, 840, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(861, 841, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(862, 842, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(863, 843, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(864, 844, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(865, 845, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(866, 846, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(867, 847, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(868, 848, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(869, 849, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(870, 850, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(871, 851, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(872, 852, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(873, 853, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15');
INSERT INTO `products_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(874, 854, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(875, 855, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(876, 856, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(877, 857, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(878, 858, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(879, 859, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(880, 860, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(881, 861, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(882, 862, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(883, 863, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(884, 864, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(885, 865, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(886, 866, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(887, 867, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(888, 868, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(889, 869, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(890, 870, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(891, 871, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(892, 872, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(893, 873, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(894, 874, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(895, 875, 2, '2017-07-16 08:30:15', '2017-07-16 08:30:15'),
(896, 876, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(897, 877, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(898, 878, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(899, 879, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(900, 880, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(901, 881, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(902, 882, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(903, 883, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(904, 884, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(905, 885, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(906, 886, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(907, 887, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(908, 888, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(909, 889, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(910, 890, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(911, 891, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(912, 892, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(913, 893, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(914, 894, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(915, 895, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(916, 896, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(917, 897, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(918, 898, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(919, 899, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(920, 900, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(921, 901, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(922, 902, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(923, 903, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(924, 904, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(925, 905, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(926, 906, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(927, 907, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(928, 908, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(929, 909, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(930, 910, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(931, 911, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(932, 912, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(933, 913, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(934, 914, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(935, 915, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(936, 916, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(937, 917, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(938, 918, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(939, 919, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(940, 920, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(941, 921, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(942, 922, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(943, 923, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(944, 924, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(945, 925, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(946, 926, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(947, 927, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(948, 928, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(949, 929, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(950, 930, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(951, 931, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(952, 932, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(953, 933, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(954, 934, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(955, 935, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(956, 936, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(957, 937, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(958, 938, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(959, 939, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(960, 940, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(961, 941, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(962, 942, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(963, 943, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(964, 944, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(965, 945, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(966, 946, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(967, 947, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(968, 948, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(969, 949, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(970, 950, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(971, 951, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(972, 952, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(973, 953, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(974, 954, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(975, 955, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(976, 956, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(977, 957, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(978, 958, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(979, 959, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(980, 960, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(981, 961, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(982, 962, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(983, 963, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(984, 964, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(985, 965, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(986, 966, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(987, 967, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(988, 968, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(989, 969, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(990, 970, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(991, 971, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(992, 972, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(993, 973, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(994, 974, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(995, 975, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(996, 976, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(997, 977, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(998, 978, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(999, 979, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1000, 980, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1001, 981, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1002, 982, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1003, 983, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1004, 984, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1005, 985, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1006, 986, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1007, 987, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1008, 988, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1009, 989, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1010, 990, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1011, 991, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1012, 992, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1013, 993, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1014, 994, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1015, 995, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1016, 996, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1017, 997, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1018, 998, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1019, 999, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1020, 1000, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1021, 1001, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1022, 1002, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1023, 1003, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1024, 1004, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1025, 1005, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1026, 1006, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1027, 1007, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1028, 1008, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1029, 1009, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1030, 1010, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1031, 1011, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1032, 1012, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1033, 1013, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1034, 1014, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1035, 1015, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1036, 1016, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1037, 1017, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1038, 1018, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1039, 1019, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1040, 1020, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1041, 1021, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1042, 1022, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1043, 1023, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1044, 1024, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1045, 1025, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1046, 1026, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1047, 1027, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1048, 1028, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1049, 1029, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1050, 1030, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1051, 1031, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1052, 1032, 2, '2017-07-16 08:30:16', '2017-07-16 08:30:16'),
(1053, 1033, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1054, 1034, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1055, 1035, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1056, 1036, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1057, 1037, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1058, 1038, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1059, 1039, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1060, 1040, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1061, 1041, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1062, 1042, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1077, 1051, 2, '2017-07-26 23:45:07', '2017-07-26 23:45:07'),
(1076, 1050, 3, '2017-07-26 23:45:07', '2017-07-26 23:45:07'),
(1075, 1050, 2, '2017-07-26 23:45:07', '2017-07-26 23:45:07'),
(1066, 1046, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1067, 1047, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1068, 1048, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1069, 1049, 2, '2017-07-16 08:30:17', '2017-07-16 08:30:17'),
(1070, 50, 3, '2017-07-16 08:48:51', '2017-07-16 08:48:51'),
(1071, 54, 3, '2017-07-16 08:48:51', '2017-07-16 08:48:51'),
(1072, 1049, 3, '2017-07-16 08:48:57', '2017-07-16 08:48:57'),
(1073, 1048, 5, '2017-07-16 08:50:00', '2017-07-16 08:50:00'),
(1074, 1048, 6, '2017-07-16 08:50:00', '2017-07-16 08:50:00'),
(1078, 1052, 2, '2017-07-26 23:45:07', '2017-07-26 23:45:07'),
(1079, 1053, 14, '2017-07-29 08:22:23', '2017-07-29 08:22:23'),
(1080, 1053, 6, '2017-07-29 08:22:23', '2017-07-29 08:22:23');

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
-- Table structure for table `product_price_backups`
--

CREATE TABLE `product_price_backups` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `currency_id` int(10) UNSIGNED NOT NULL,
  `amount` decimal(20,4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_price_backups`
--

INSERT INTO `product_price_backups` (`id`, `product_id`, `currency_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 5, '2.6455', NULL, '2017-06-17 13:37:11');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `total` decimal(20,2) DEFAULT NULL,
  `address_id` int(10) UNSIGNED NOT NULL,
  `shipping_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `customer_id`, `total`, `address_id`, `shipping_method`, `payment_method`, `order_reference`, `status`, `created_at`, `updated_at`) VALUES
(1, 7, '14.95', 1, '1', '1', 'oJ4pccvNqS', 4, '2017-07-02 14:30:23', '2017-07-02 14:33:15'),
(2, 7, '86000.00', 1, '1', '1', 'QIvEvXjS9f', 4, '2017-07-02 14:32:24', '2017-07-15 10:22:54');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_orders`
--

CREATE TABLE `purchase_orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `purchase_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_orders`
--

INSERT INTO `purchase_orders` (`id`, `purchase_id`, `product_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 1, '2017-07-02 14:30:23', '2017-07-02 14:30:23'),
(2, 1, 2, 1, '2017-07-02 14:30:23', '2017-07-02 14:30:23'),
(3, 2, 38, 2, '2017-07-02 14:32:24', '2017-07-02 14:32:24'),
(4, 2, 1, 3, '2017-07-02 14:32:24', '2017-07-02 14:32:24');

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
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `customer_id` int(11) NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(53, 7, 36, 'App\\Model\\Product', '2017-06-15 16:29:16', '2017-06-15 16:29:16'),
(95, 2, 1, 'App\\Model\\Product', '2017-07-29 08:19:11', '2017-07-29 08:19:11'),
(3, 3, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(4, 3, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(5, 4, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(6, 4, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(7, 5, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(8, 5, 33, 'App\\Model\\Product', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(96, 1, 1, 'App\\Model\\Product', '2017-07-29 08:19:11', '2017-07-29 08:19:11'),
(21, 5, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(20, 4, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(19, 3, 35, 'App\\Model\\Product', '2017-06-05 07:37:36', '2017-06-05 07:37:36'),
(93, 14, 42, 'App\\Model\\Product', '2017-06-24 09:44:24', '2017-06-24 09:44:24'),
(55, 9, 38, 'App\\Model\\Product', '2017-06-15 16:45:41', '2017-06-15 16:45:41'),
(56, 10, 38, 'App\\Model\\Product', '2017-06-15 16:45:41', '2017-06-15 16:45:41'),
(81, 11, 18, 'App\\Model\\Category', '2017-06-17 16:02:54', '2017-06-17 16:02:54'),
(82, 12, 18, 'App\\Model\\Category', '2017-06-17 16:02:54', '2017-06-17 16:02:54'),
(86, 13, 1, 'App\\Model\\Category', '2017-06-17 16:24:18', '2017-06-17 16:24:18'),
(85, 8, 1, 'App\\Model\\Category', '2017-06-17 16:24:18', '2017-06-17 16:24:18'),
(94, 15, 41, 'App\\Model\\Product', '2017-06-25 13:31:05', '2017-06-25 13:31:05');

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
(5, 'nice', 'nice', '2017-06-05 07:34:37', '2017-06-05 07:34:37'),
(7, 'hikvision', 'hikvision', '2017-06-15 16:29:16', '2017-06-15 16:29:16'),
(8, 'camera', 'camera', '2017-06-15 16:29:16', '2017-06-15 16:29:16'),
(9, 'car', 'car', '2017-06-15 16:45:41', '2017-06-15 16:45:41'),
(10, 'rental', 'rental', '2017-06-15 16:45:41', '2017-06-15 16:45:41'),
(11, 'dfs', 'dfs', '2017-06-17 16:02:54', '2017-06-17 16:02:54'),
(12, 'sdfsdf', 'sdfsdf', '2017-06-17 16:02:54', '2017-06-17 16:02:54'),
(13, 'security', 'security', '2017-06-17 16:18:13', '2017-06-17 16:18:13'),
(14, 'partner', 'partner', '2017-06-24 09:44:24', '2017-06-24 09:44:24'),
(15, 'news', 'news', '2017-06-25 13:31:05', '2017-06-25 13:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `temp_products`
--

CREATE TABLE `temp_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `temp_products`
--

INSERT INTO `temp_products` (`id`, `user_id`, `product_code`, `created_at`, `updated_at`) VALUES
(5, 1, 'P1007', '2017-07-26 23:52:23', '2017-07-26 23:52:23'),
(4, 1, 'P1004', '2017-07-26 23:52:22', '2017-07-26 23:52:22'),
(3, 1, 'P1006', '2017-07-26 16:16:17', '2017-07-26 16:16:17');

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
(1, 'lankunding', NULL, 'lesly.boyer@example.com', '$2y$10$Fq1bv2C/P263t8l8ThF42.RcvxJwetWl8omuBDzv.dXCQNfzAbfwq', NULL, '0', '1', NULL, NULL, 'aezWA5gWM4BMrsFd4BMEuAwatUFQxwbYMELOW06EW1twCUZ35G5wBjfYB0XC', '2017-05-12 09:47:28', '2017-05-12 09:47:28', NULL),
(2, 'bernita79', NULL, 'lucie38@example.com', '$2y$10$Fq1bv2C/P263t8l8ThF42.RcvxJwetWl8omuBDzv.dXCQNfzAbfwq', NULL, '0', '2', NULL, NULL, 'S6QM0BC67R22v2cvvdZN4rtbYkG6FDQayq39h1djfKpoFjKiS1Puqj23IJIy', '2017-05-12 09:47:28', '2017-05-12 09:47:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_city_id_foreign` (`city_id`),
  ADD KEY `addresses_country_id_foreign` (`country_id`),
  ADD KEY `addresses_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `f_x_rates`
--
ALTER TABLE `f_x_rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_x_rates_source_currency_foreign` (`source_currency`),
  ADD KEY `f_x_rates_target_currency_foreign` (`target_currency`);

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`);

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
-- Indexes for table `price_converters`
--
ALTER TABLE `price_converters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_converters_product_id_foreign` (`product_id`),
  ADD KEY `price_converters_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attribute_id` (`attribute_id`);

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
-- Indexes for table `product_price_backups`
--
ALTER TABLE `product_price_backups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_price_backups_product_id_foreign` (`product_id`),
  ADD KEY `product_price_backups_currency_id_foreign` (`currency_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_customer_id_foreign` (`customer_id`),
  ADD KEY `purchases_address_id_foreign` (`address_id`);

--
-- Indexes for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchase_orders_purchase_id_foreign` (`purchase_id`),
  ADD KEY `purchase_orders_product_id_foreign` (`product_id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD KEY `social_accounts_customer_id_foreign` (`customer_id`);

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
-- Indexes for table `temp_products`
--
ALTER TABLE `temp_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `temp_products_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `f_x_rates`
--
ALTER TABLE `f_x_rates`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT for table `price_converters`
--
ALTER TABLE `price_converters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1054;
--
-- AUTO_INCREMENT for table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1081;
--
-- AUTO_INCREMENT for table `products_languages`
--
ALTER TABLE `products_languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_price_backups`
--
ALTER TABLE `product_price_backups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `purchase_orders`
--
ALTER TABLE `purchase_orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `temp_products`
--
ALTER TABLE `temp_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
