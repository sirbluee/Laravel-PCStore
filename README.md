<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.
## Database

[Uploading-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 11:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(500) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Zinvo', 'zinvo', 'Zinvo', '', '', 6, 0, 0, '2024-02-13 13:10:43', '2024-02-13 13:10:43'),
(2, 'Rolex', 'rolex', 'Rolex', '', '', 6, 0, 0, '2024-02-13 14:44:11', '2024-02-13 14:44:11'),
(3, 'Samsung', 'samsung', 'Samsung', '', '', 6, 0, 0, '2024-02-16 08:18:53', '2024-02-16 08:18:53'),
(4, 'Apple', 'apple', 'Apple', '', '', 6, 0, 0, '2024-02-16 08:19:35', '2024-02-16 08:19:35'),
(5, 'Lacoste', 'lacoste', 'Lacoste', '', '', 6, 0, 0, '2024-02-16 08:19:56', '2024-02-16 08:19:56'),
(6, 'Louis Vuitton', 'louis-vuitton', 'Louis Vuitton', '', '', 6, 0, 0, '2024-02-17 10:22:56', '2024-02-17 10:22:56'),
(7, 'MSI', 'msi', 'msi', '', '', 1, 0, 0, '2024-05-31 08:27:24', '2024-05-31 08:27:24');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_by`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'Watches', 'watches', 'Watches', '', '', 0, 6, 0, '2024-02-12 14:53:01', '2024-02-12 14:53:01'),
(2, 'Smartphone', 'smartphone', 'Smartphone', '', '', 0, 6, 0, '2024-02-12 14:53:50', '2024-02-12 14:53:50'),
(3, 'Apparel', 'apparel', 'Apparel', '', '', 0, 6, 0, '2024-02-12 14:54:32', '2024-02-12 14:54:32'),
(4, 'Gamming Labtop', 'Gamming Labtop', 'Gamming Labtop', '', '', 0, 1, 0, '2024-05-31 08:17:25', '2024-05-31 08:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`, `code`, `created_by`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(3, 'Red', '#ff0000', 6, 0, 0, '2024-02-07 15:41:20', '2024-02-07 15:48:31'),
(4, 'Green', '#00ff00', 6, 0, 0, '2024-02-07 15:42:55', '2024-02-09 21:59:22'),
(5, 'Yellow', '#ffff00', 6, 0, 0, '2024-02-09 21:59:14', '2024-02-09 21:59:14'),
(6, 'Black', '#000000', 6, 0, 1, '2024-02-09 23:16:06', '2024-02-09 23:22:59'),
(7, 'White', '#ffffff', 6, 0, 0, '2024-02-09 23:17:38', '2024-02-09 23:17:38'),
(8, 'Black', '#000000', 6, 0, 0, '2024-02-13 13:12:47', '2024-02-13 13:12:47'),
(9, 'Blue', '#2b00ff', 6, 0, 0, '2024-02-17 10:25:44', '2024-02-17 10:25:44'),
(10, 'Pink', '#ff9eed', 6, 0, 1, '2024-02-17 13:08:33', '2024-02-17 13:13:03'),
(11, 'Purple', '#850aff', 6, 0, 1, '2024-02-17 13:08:49', '2024-02-17 13:13:01');

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
(5, '2024_02_13_165209_create_payments_table', 2);

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL,
  `payer_name` varchar(255) NOT NULL,
  `payer_email` varchar(255) NOT NULL,
  `payer_status` varchar(255) NOT NULL,
  `payer_method` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `old_price` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `short_description` text DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `additional_information` text DEFAULT NULL,
  `shipping_returns` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:Inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Not Delete, 1:Deleted',
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `slug`, `sku`, `category_id`, `sub_category_id`, `brand_id`, `old_price`, `price`, `short_description`, `description`, `additional_information`, `shipping_returns`, `status`, `is_delete`, `created_by`, `created_at`, `updated_at`) VALUES
(1, 'Zinvo Blade Panda', 'zinvo-blade-panda', 'w-m-zinvo-blade-panda', 1, 2, 1, 329, 239, 'ZINVO Watches: Elevate your style with precision and innovation.', 'ZINVO Watches: Elevate your style with precision and innovation. Crafted with a perfect blend of modern design and cutting-edge technology, ZINVO watches redefine timekeeping. Each timepiece is a testament to meticulous craftsmanship, featuring unique dial designs that capture attention and showcase your individuality. Whether you\'re a trendsetter or a classic enthusiast, ZINVO offers a diverse collection that seamlessly merges style and functionality. Embrace the artistry of time with ZINVO Watches – where every second is a statement.', '', '', 0, 0, 6, '2024-02-13 12:54:45', '2024-02-13 13:14:26'),
(2, 'Zinvo Blade Black Gem', 'zinvo-blade-black-gem', 'w-m-zinvo-blade-black-gem', 1, 2, 1, 299, 179, 'ZINVO Watches: Elevate your style with precision and innovation.', 'ZINVO Watches: Elevate your style with precision and innovation. Crafted with a perfect blend of modern design and cutting-edge technology, ZINVO watches redefine timekeeping. Each timepiece is a testament to meticulous craftsmanship, featuring unique dial designs that capture attention and showcase your individuality. Whether you\'re a trendsetter or a classic enthusiast, ZINVO offers a diverse collection that seamlessly merges style and functionality. Embrace the artistry of time with ZINVO Watches – where every second is a statement.', '', '', 0, 0, 6, '2024-02-13 12:56:22', '2024-02-13 13:13:31'),
(5, 'Zinvo Blade Rainbow', 'zinvo-blade-rainbow', 'w-m-zinvo-blade-rainbow', 1, 2, 1, 179, 149, 'ZINVO Watches: Elevate your style with precision and innovation.', 'ZINVO Watches: Elevate your style with precision and innovation. Crafted with a perfect blend of modern design and cutting-edge technology, ZINVO watches redefine timekeeping. Each timepiece is a testament to meticulous craftsmanship, featuring unique dial designs that capture attention and showcase your individuality. Whether you\'re a trendsetter or a classic enthusiast, ZINVO offers a diverse collection that seamlessly merges style and functionality. Embrace the artistry of time with ZINVO Watches – where every second is a statement.', '', '', 0, 0, 6, '2024-02-13 13:04:41', '2024-02-13 13:12:30'),
(6, 'Zinvo Blade Cyan', 'zinvo-blade-cyan', 'w-m-zinvo-blade-cyan', 1, 2, 1, 159, 139, 'ZINVO Watches: Elevate your style with precision and innovation.', 'ZINVO Watches: Elevate your style with precision and innovation. Crafted with a perfect blend of modern design and cutting-edge technology, ZINVO watches redefine timekeeping. Each timepiece is a testament to meticulous craftsmanship, featuring unique dial designs that capture attention and showcase your individuality. Whether you\'re a trendsetter or a classic enthusiast, ZINVO offers a diverse collection that seamlessly merges style and functionality. Embrace the artistry of time with ZINVO Watches – where every second is a statement.', '', '', 0, 0, 6, '2024-02-13 13:07:35', '2024-02-13 13:11:25'),
(7, 'Zinvo Blade Phantom', NULL, 'w-m-zinvo-blade-phantom', 1, 2, 1, 299, 179, 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', '', '', 0, 0, 6, '2024-02-17 10:24:05', '2024-02-17 10:25:08'),
(8, 'Zinvo Blade Titan', NULL, 'w-m-zinvo-blade-titan', 1, 2, 1, 329, 269, 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', '', '', 0, 0, 6, '2024-02-17 10:27:55', '2024-02-17 10:28:37'),
(9, 'Zinvo Blade Skyline', NULL, 'w-m-zinvo-blade-skyline', 1, 2, 1, 259, 239, 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', '', '', 0, 0, 6, '2024-02-17 10:30:09', '2024-02-17 10:31:09'),
(10, 'Zinvo Blade Rival', NULL, 'w-m-zinvo-blade-rival', 1, 2, 1, 229, 189, 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', '', '', 0, 0, 6, '2024-02-17 10:31:37', '2024-02-17 10:32:12'),
(11, 'Zinvo Blade Stealth', NULL, 'w-m-zinvo-blade-stealth', 1, 2, 1, 229, 219, 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', 'Zinvo\'s Blade series combines cutting-edge design and functionality, embodying modern luxury with a distinctive rotating turbine dial.', '', '', 0, 0, 6, '2024-02-17 10:32:52', '2024-02-17 10:33:25'),
(12, 'Rolex Oyster Perpetual', NULL, 'w-l-rolex-oyster-perpetual', 1, 1, 2, 9000, 8500, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 10:34:43', '2024-02-17 10:36:12'),
(13, 'Rolex Submariner', NULL, 'w-l-rolex-submariner', 1, 1, 2, 12200, 12000, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:27:06', '2024-02-17 12:28:03'),
(14, 'Rolex Sky Dweller', NULL, 'w-l-rolex-sky-dweller', 1, 1, 2, 25500, 25000, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:31:11', '2024-02-17 12:32:06'),
(15, 'Rolex Daytona', NULL, 'w-l-rolex-daytona', 1, 1, 2, 14000, 13500, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:32:35', '2024-02-17 12:33:34'),
(16, 'Rolex Day Date', NULL, 'w-l-rolex-day-date', 1, 1, 2, 16500, 16300, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:33:53', '2024-02-17 12:34:37'),
(17, 'Rolex DateJust', NULL, 'w-l-rolex-datejust', 1, 1, 2, 12000, 11300, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:35:09', '2024-02-17 12:35:47'),
(18, 'Rolex Yatch Master', NULL, 'w-l-rolex-yatch-master', 1, 1, 2, 30000, 29000, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:36:17', '2024-02-17 12:36:57'),
(19, 'Rolex Royal Oak', NULL, 'w-l-rolex-royal-oak', 1, 1, 2, 17000, 16800, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:40:05', '2024-02-17 12:40:40'),
(20, 'Rolex Titanium', NULL, 'w-l-rolex-titanium', 1, 1, 2, 30000, 23500, 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', 'Rolex Brand Timeless elegance meets precision with the Oyster Perpetual collection, a symbol of Rolex\'s legendary craftsmanship.', '', '', 0, 0, 6, '2024-02-17 12:41:15', '2024-02-17 12:42:04'),
(21, 'Galaxy S21', NULL, 's-s-galaxy-s21', 2, 3, 3, 800, 799, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:42:28', '2024-02-17 12:43:36'),
(22, 'Galaxy Note20', NULL, 's-s-galaxy-note20', 2, 3, 3, 1000, 999, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:47:49', '2024-02-17 12:48:35'),
(23, 'Galaxy A32', NULL, 's-s-galaxy-a32', 2, 3, 3, 300, 299, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:48:49', '2024-02-17 12:49:40'),
(24, 'Galaxy S21 Plus', NULL, 's-s-galaxy-s21-plus', 2, 3, 3, 900, 899, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:50:36', '2024-02-17 12:55:25'),
(25, 'Galaxy S10', NULL, 's-s-galaxy-s10', 2, 3, 3, 800, 799, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:51:23', '2024-02-17 12:52:02'),
(26, 'Galaxy A72', NULL, 's-s-galaxy-a72', 2, 3, 3, 450, 449, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:53:28', '2024-02-17 12:53:57'),
(27, 'Galaxy Z Fold3', NULL, 's-s-galaxy-z-fold3', 2, 3, 3, 1800, 1799, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:55:40', '2024-02-17 12:56:14'),
(28, 'Galaxy S20 FE', NULL, 's-s-galaxy-s20-fe', 2, 3, 3, 700, 699, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:57:19', '2024-02-17 12:57:47'),
(29, 'Galaxy Flip 3', NULL, 's-s-galaxy-flip-3', 2, 3, 3, 1100, 1099, 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', 'Samsung Brand is elevating your mobile experience with the Samsung Galaxy S21, featuring a stunning display, powerful camera, and seamless performance.', '', '', 0, 0, 6, '2024-02-17 12:58:16', '2024-02-17 12:58:50'),
(30, 'iPhone 13 Pro', NULL, 's-i-13pro', 2, 4, 4, 1100, 1099, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:05:31', '2024-02-17 13:06:49'),
(31, 'iPhone 13', NULL, 's-i-13', 2, 4, 4, 800, 799, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:07:11', '2024-02-17 13:07:36'),
(32, 'iPhone 13 mini', NULL, 's-i-13mini', 2, 4, 4, 700, 699, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:07:49', '2024-02-17 13:08:23'),
(33, 'iPhone 12 Pro', NULL, 's-i-12pro', 2, 4, 4, 1000, 999, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:13:36', '2024-02-17 13:14:17'),
(34, 'iPhone 12', NULL, 's-i-12', 2, 4, 4, 800, 799, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:14:34', '2024-02-17 13:14:56'),
(35, 'iPhone 12 Mini', NULL, 's-i-12mini', 2, 4, 4, 700, 699, 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', 'iPhone experience the pinnacle of innovation with the iPhone 13 Pro, boasting advanced camera technology, stunning design, and unparalleled performance.', '', '', 0, 0, 6, '2024-02-17 13:15:13', '2024-02-17 13:15:37'),
(36, 'Slim Fit Jeans', NULL, 'a-m-slim-fit-jeans', 3, 5, 5, 85, 80, 'Polo Shirt is embracing casual sophistication with Lacoste\'s iconic Polo Shirt, a timeless wardrobe staple synonymous with comfort and style.', 'Polo Shirt is embracing casual sophistication with Lacoste\'s iconic Polo Shirt, a timeless wardrobe staple synonymous with comfort and style.', '', '', 0, 0, 6, '2024-02-17 13:16:02', '2024-02-17 13:16:52'),
(37, 'Pique Polo', NULL, 'a-m-pique-polo', 3, 5, 5, 90, 85, 'Polo Shirt is embracing casual sophistication with Lacoste\'s iconic Polo Shirt, a timeless wardrobe staple synonymous with comfort and style.', 'Polo Shirt is embracing casual sophistication with Lacoste\'s iconic Polo Shirt, a timeless wardrobe staple synonymous with comfort and style.', '', '', 0, 0, 6, '2024-02-17 13:17:08', '2024-02-17 13:17:51'),
(38, 'LV Trainer Sneaker', NULL, 'a-w-lv-trainer-sneaker', 3, 6, 6, 1300, 1250, 'Louis Vuitton is carrying luxury wherever you go with Louis Vuitton\'s Monogram Canvas Tote, a chic blend of fashion and functionality for the modern woman.', 'Louis Vuitton is carrying luxury wherever you go with Louis Vuitton\'s Monogram Canvas Tote, a chic blend of fashion and functionality for the modern woman.', '', '', 0, 0, 6, '2024-02-17 13:21:13', '2024-02-17 13:21:54'),
(39, 'Test', NULL, 'test', 1, 2, 1, 120, 111, 'test', 'test', '', '', 0, 1, 6, '2024-02-17 19:21:32', '2024-02-20 17:00:16'),
(40, 'test', NULL, 'test', 1, 2, 1, 111, 111, '', '', '', '', 0, 0, 2, '2024-02-20 17:03:10', '2024-02-20 17:03:46'),
(41, 'MSI Gaming', NULL, 'msi gaming', 4, 9, 7, 1000, 1000, 'GF63 Thin (Intel® 10th Gen) (GeForce RTX™ 30 Series)', '', '', '', 0, 0, 1, '2024-05-31 08:28:50', '2024-05-31 08:38:48'),
(42, 'MSI', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 1, '2024-05-31 08:48:04', '2024-05-31 08:50:10'),
(43, 'MSI A12', NULL, 'MSI A12', 4, 9, 7, 1000, 2000, '', '', '', '', 0, 0, 1, '2024-05-31 08:50:27', '2024-05-31 08:51:02'),
(44, 'MSI GP60', NULL, 'MSI GP60', 4, 9, 7, 1000, 1000, '', '', '', '', 0, 0, 1, '2024-05-31 08:51:50', '2024-05-31 08:52:34'),
(45, 'MSI Cyborg 15.6', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 0, 1, '2024-05-31 08:53:47', '2024-05-31 08:53:47'),
(46, 'MSI Cyborg', NULL, 'MSI Cyborg', 4, 9, 7, 1000, 1099, '', '', '', '', 0, 0, 1, '2024-05-31 09:00:04', '2024-05-31 09:00:37'),
(47, 'Gamming G10', NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, NULL, 0, 1, 1, '2024-05-31 09:00:56', '2024-05-31 09:06:55'),
(48, 'MSI G10', NULL, 'MSI G10', 4, 9, 7, 1000, 1099, '', '', '', '', 0, 1, 1, '2024-05-31 09:03:27', '2024-05-31 09:07:07'),
(49, 'MSI H20', NULL, 'MSI H20', 4, 9, 7, 1000, 1099, '', '', '', '', 0, 0, 1, '2024-05-31 09:04:27', '2024-05-31 09:04:51'),
(50, 'MSI OP90', NULL, 'MSI OP90', 4, 9, 7, 1000, 8999, '', '', '', '', 0, 0, 1, '2024-05-31 09:07:30', '2024-05-31 09:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_color`
--

CREATE TABLE `product_color` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_color`
--

INSERT INTO `product_color` (`id`, `product_id`, `color_id`, `created_at`, `updated_at`) VALUES
(36, 3, 7, '2024-02-10 15:00:20', '2024-02-10 15:00:20'),
(41, 6, 4, '2024-02-13 13:11:25', '2024-02-13 13:11:25'),
(42, 5, 3, '2024-02-13 13:12:30', '2024-02-13 13:12:30'),
(45, 2, 8, '2024-02-13 13:15:01', '2024-02-13 13:15:01'),
(52, 1, 4, '2024-02-13 14:04:31', '2024-02-13 14:04:31'),
(53, 1, 5, '2024-02-13 14:04:31', '2024-02-13 14:04:31'),
(57, 9, 7, '2024-02-17 10:31:09', '2024-02-17 10:31:09'),
(58, 10, 8, '2024-02-17 10:32:12', '2024-02-17 10:32:12'),
(60, 11, 7, '2024-02-17 10:33:47', '2024-02-17 10:33:47'),
(61, 12, 9, '2024-02-17 10:36:12', '2024-02-17 10:36:12'),
(62, 13, 7, '2024-02-17 12:28:03', '2024-02-17 12:28:03'),
(63, 14, 5, '2024-02-17 12:32:06', '2024-02-17 12:32:06'),
(64, 15, 7, '2024-02-17 12:33:34', '2024-02-17 12:33:34'),
(65, 16, 7, '2024-02-17 12:34:37', '2024-02-17 12:34:37'),
(66, 17, 5, '2024-02-17 12:35:47', '2024-02-17 12:35:47'),
(67, 18, 8, '2024-02-17 12:36:57', '2024-02-17 12:36:57'),
(68, 19, 7, '2024-02-17 12:40:40', '2024-02-17 12:40:40'),
(69, 20, 8, '2024-02-17 12:42:04', '2024-02-17 12:42:04'),
(70, 21, 9, '2024-02-17 12:43:36', '2024-02-17 12:43:36'),
(71, 22, 8, '2024-02-17 12:48:35', '2024-02-17 12:48:35'),
(72, 23, 9, '2024-02-17 12:49:40', '2024-02-17 12:49:40'),
(75, 25, 7, '2024-02-17 12:52:03', '2024-02-17 12:52:03'),
(76, 26, 9, '2024-02-17 12:53:57', '2024-02-17 12:53:57'),
(78, 24, 8, '2024-02-17 12:55:25', '2024-02-17 12:55:25'),
(79, 27, 9, '2024-02-17 12:56:14', '2024-02-17 12:56:14'),
(80, 28, 7, '2024-02-17 12:57:47', '2024-02-17 12:57:47'),
(81, 29, 9, '2024-02-17 12:58:50', '2024-02-17 12:58:50'),
(83, 30, 9, '2024-02-17 13:06:59', '2024-02-17 13:06:59'),
(84, 31, 7, '2024-02-17 13:07:36', '2024-02-17 13:07:36'),
(86, 32, 10, '2024-02-17 13:11:04', '2024-02-17 13:11:04'),
(87, 33, 8, '2024-02-17 13:14:17', '2024-02-17 13:14:17'),
(88, 34, 7, '2024-02-17 13:14:56', '2024-02-17 13:14:56'),
(89, 35, 8, '2024-02-17 13:15:37', '2024-02-17 13:15:37'),
(90, 36, 8, '2024-02-17 13:16:52', '2024-02-17 13:16:52'),
(91, 37, 7, '2024-02-17 13:17:51', '2024-02-17 13:17:51'),
(92, 38, 7, '2024-02-17 13:21:54', '2024-02-17 13:21:54'),
(93, 7, 9, '2024-02-17 13:30:33', '2024-02-17 13:30:33'),
(95, 39, 7, '2024-02-17 19:22:43', '2024-02-17 19:22:43'),
(96, 40, 4, '2024-02-20 17:03:46', '2024-02-20 17:03:46'),
(99, 41, 3, '2024-05-31 08:38:48', '2024-05-31 08:38:48'),
(100, 43, 3, '2024-05-31 08:51:02', '2024-05-31 08:51:02'),
(101, 44, 3, '2024-05-31 08:52:34', '2024-05-31 08:52:34'),
(102, 46, 3, '2024-05-31 09:00:37', '2024-05-31 09:00:37'),
(103, 46, 7, '2024-05-31 09:00:37', '2024-05-31 09:00:37'),
(104, 48, 3, '2024-05-31 09:04:07', '2024-05-31 09:04:07'),
(105, 49, 3, '2024-05-31 09:04:51', '2024-05-31 09:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `image_extension` varchar(255) DEFAULT NULL,
  `order_by` int(11) NOT NULL DEFAULT 100,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `product_id`, `image_name`, `image_extension`, `order_by`, `created_at`, `updated_at`) VALUES
(1, 6, '61pknztlwmt.png', 'png', 100, '2024-02-13 13:11:25', '2024-02-13 13:11:25'),
(2, 5, '54blsmqlk5v.png', 'png', 100, '2024-02-13 13:12:30', '2024-02-13 13:12:30'),
(3, 2, '27j6wyn8vzw.png', 'png', 100, '2024-02-13 13:13:31', '2024-02-13 13:13:31'),
(4, 1, '1zjohcmu1nl.png', 'png', 1, '2024-02-13 13:14:26', '2024-02-13 14:04:30'),
(5, 1, '1yqpuimzlpd.png', 'png', 2, '2024-02-13 13:51:27', '2024-02-13 14:04:30'),
(6, 7, '7xquvcwwks2.png', 'png', 100, '2024-02-17 10:25:08', '2024-02-17 10:25:08'),
(7, 8, '8e5smvsxept.png', 'png', 100, '2024-02-17 10:28:37', '2024-02-17 10:28:37'),
(8, 9, '9gnz1qypsqh.png', 'png', 100, '2024-02-17 10:31:09', '2024-02-17 10:31:09'),
(9, 10, '10qqycoftlxh.png', 'png', 100, '2024-02-17 10:32:12', '2024-02-17 10:32:12'),
(10, 11, '113i9pgpj4z2.png', 'png', 100, '2024-02-17 10:33:47', '2024-02-17 10:33:47'),
(11, 12, '12s4zizvaqvi.png', 'png', 100, '2024-02-17 10:36:12', '2024-02-17 10:36:12'),
(12, 13, '138fwhvxmsfg.png', 'png', 100, '2024-02-17 12:28:03', '2024-02-17 12:28:03'),
(13, 14, '14k39ktdlypy.png', 'png', 100, '2024-02-17 12:32:06', '2024-02-17 12:32:06'),
(14, 15, '15fzxtwthpdv.png', 'png', 100, '2024-02-17 12:33:34', '2024-02-17 12:33:34'),
(15, 16, '16j7vjit5eum.png', 'png', 100, '2024-02-17 12:34:37', '2024-02-17 12:34:37'),
(16, 17, '17wkxjsvkhho.png', 'png', 100, '2024-02-17 12:35:47', '2024-02-17 12:35:47'),
(17, 18, '18fftq3f7vok.png', 'png', 100, '2024-02-17 12:36:57', '2024-02-17 12:36:57'),
(18, 19, '19nov3yrn0kd.png', 'png', 100, '2024-02-17 12:40:40', '2024-02-17 12:40:40'),
(19, 20, '20e9u7now4ws.png', 'png', 100, '2024-02-17 12:42:04', '2024-02-17 12:42:04'),
(20, 21, '21ej8jmolqam.png', 'png', 100, '2024-02-17 12:43:36', '2024-02-17 12:43:36'),
(21, 22, '22y5hvovqh30.png', 'png', 100, '2024-02-17 12:48:35', '2024-02-17 12:48:35'),
(22, 23, '23c9qiia5cuy.png', 'png', 100, '2024-02-17 12:49:40', '2024-02-17 12:49:40'),
(23, 24, '24kp3nq2abwg.png', 'png', 100, '2024-02-17 12:51:02', '2024-02-17 12:51:02'),
(24, 25, '25xtmee9em13.png', 'png', 100, '2024-02-17 12:52:02', '2024-02-17 12:52:02'),
(25, 25, '254alikzih16.png', 'png', 100, '2024-02-17 12:52:03', '2024-02-17 12:52:03'),
(26, 26, '26kyfmwvvnyq.png', 'png', 100, '2024-02-17 12:53:57', '2024-02-17 12:53:57'),
(27, 27, '270bql9jgcvd.png', 'png', 100, '2024-02-17 12:56:14', '2024-02-17 12:56:14'),
(28, 28, '28eolwt3qjew.png', 'png', 100, '2024-02-17 12:57:47', '2024-02-17 12:57:47'),
(29, 29, '29m2ksqm5huo.png', 'png', 100, '2024-02-17 12:58:50', '2024-02-17 12:58:50'),
(30, 30, '302khd0mo7gx.png', 'png', 100, '2024-02-17 13:06:49', '2024-02-17 13:06:49'),
(31, 31, '31dei4jhs19r.png', 'png', 100, '2024-02-17 13:07:36', '2024-02-17 13:07:36'),
(32, 32, '32yd4esemz0d.png', 'png', 100, '2024-02-17 13:08:23', '2024-02-17 13:08:23'),
(33, 33, '33wrdrtkkll5.png', 'png', 100, '2024-02-17 13:14:17', '2024-02-17 13:14:17'),
(34, 34, '34cfildey41f.png', 'png', 100, '2024-02-17 13:14:56', '2024-02-17 13:14:56'),
(35, 35, '35e6hig8zuis.png', 'png', 100, '2024-02-17 13:15:37', '2024-02-17 13:15:37'),
(36, 36, '36tg0rubliws.png', 'png', 100, '2024-02-17 13:16:52', '2024-02-17 13:16:52'),
(37, 37, '373u6phs9lg0.png', 'png', 100, '2024-02-17 13:17:51', '2024-02-17 13:17:51'),
(38, 38, '38e8nedhl1xh.png', 'png', 100, '2024-02-17 13:21:54', '2024-02-17 13:21:54'),
(39, 7, '7my0oeuinzr.png', 'png', 100, '2024-02-17 13:30:33', '2024-02-17 13:30:33'),
(40, 39, '392wco8oeu3y.png', 'png', 100, '2024-02-17 19:22:29', '2024-02-17 19:22:29'),
(41, 40, '40jx5qlfvlit.png', 'png', 100, '2024-02-20 17:03:46', '2024-02-20 17:03:46'),
(42, 41, '41i4klwch4i8.png', 'png', 100, '2024-05-31 08:35:39', '2024-05-31 08:35:39'),
(43, 43, '43socl7vgfnd.png', 'png', 100, '2024-05-31 08:51:02', '2024-05-31 08:51:02'),
(44, 44, '44qa4vuzndfp.png', 'png', 100, '2024-05-31 08:52:34', '2024-05-31 08:52:34'),
(45, 46, '465xl4jixjoy.png', 'png', 100, '2024-05-31 09:00:37', '2024-05-31 09:00:37'),
(46, 48, '489bpzp3jxqd.png', 'png', 100, '2024-05-31 09:04:07', '2024-05-31 09:04:07'),
(47, 49, '49264xrc9oyv.png', 'png', 100, '2024-05-31 09:04:51', '2024-05-31 09:04:51'),
(48, 50, '50spfhpcitrp.png', 'png', 100, '2024-05-31 09:07:59', '2024-05-31 09:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` float NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(49, 3, '1.9', 25, '2024-02-10 15:00:20', '2024-02-10 15:00:20'),
(50, 3, '2.5', 40, '2024-02-10 15:00:20', '2024-02-10 15:00:20'),
(58, 41, 'GF63 Thin', 1000, '2024-05-31 08:38:48', '2024-05-31 08:38:48'),
(59, 41, 'GF63 Thin', 0, '2024-05-31 08:38:48', '2024-05-31 08:38:48');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `name`, `slug`, `meta_title`, `meta_description`, `meta_keywords`, `status`, `created_by`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 'Luxury Watches', 'luxury-watches', 'Luxury Watches', '', '', 0, 6, 0, '2024-02-12 14:55:53', '2024-02-12 14:55:53'),
(2, 1, 'Modern Watches', 'modern-watches', 'Modern Watches', '', '', 0, 6, 0, '2024-02-12 14:56:22', '2024-02-12 14:56:22'),
(3, 2, 'Android Phone', 'android-phone', 'Android Phone', '', '', 0, 6, 0, '2024-02-12 14:56:56', '2024-02-12 14:56:56'),
(4, 2, 'iPhone', 'iphone', 'iPhone', '', '', 0, 6, 0, '2024-02-12 14:57:10', '2024-02-12 14:57:10'),
(5, 3, 'Men\'s Clothing', 'men\'s-clothing', 'Men\'s Clothing', '', '', 0, 6, 0, '2024-02-12 14:57:32', '2024-02-12 14:57:32'),
(6, 3, 'Women\'s Clothing', 'women\'s-clothing', 'Women\'s Clothing', '', '', 0, 6, 0, '2024-02-12 14:58:00', '2024-02-12 14:58:00'),
(9, 4, 'MSI GAMING', 'msi', 'msi', '', '', 0, 1, 0, '2024-05-31 08:25:11', '2024-05-31 09:08:49');

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
  `is_admin` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Customer, 1:Admin',
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Active, 1:Inactive',
  `is_delete` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0:Not, 1:Deleted',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `is_admin`, `status`, `is_delete`, `created_at`, `updated_at`) VALUES
(1, 'sophearum', 'sophearum14@gmail.com', NULL, '$2y$12$Ss2xeexH1sMz8eqP0pKWquzzV9vWgTapjPYsuqRbkB/t.OUVElfyS', 'q77f2JNxp2hvJUR70JHZ4YJJQzQlop0gNU6l00gDMSTEL3L8W4cbbuqELQ9s', 1, 0, 0, '0000-00-00 00:00:00', '2024-05-30 23:18:25'),
(2, 'rith', 'rith@gmail.com', NULL, '$2y$12$V/LvQV6aRfU9pexTBEZPr.ylBsmDvKXWA4Ljyxv.cbLpZNS0AmdT2', NULL, 1, 0, 1, '2024-02-03 04:38:38', '2024-05-30 23:18:55'),
(6, 'Rithtzy', 'rithtzy@gmail.com', NULL, '$2y$12$v2yYjJH9kWEG.8EhQxHNAudvlrcPpOU/aoFh/NnZVf0D8v0.fAtNC', NULL, 1, 0, 1, '2024-02-06 06:36:34', '2024-05-30 23:18:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_color`
--
ALTER TABLE `product_color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
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
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `product_color`
--
ALTER TABLE `product_color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
 pcdb.sql…]()

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
