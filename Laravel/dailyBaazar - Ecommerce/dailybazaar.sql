-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 10:29 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dailybazaar`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `user_id`, `email`, `phone`, `address`, `country`, `city`, `district`, `zip`, `notes`, `created_at`, `updated_at`) VALUES
(7, 'Abdul Hadi Butt', '1', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', NULL, '2021-12-24 17:20:01', '2021-12-24 17:20:01'),
(8, 'Abdul Hadi Butt', '7', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', NULL, '2021-12-26 13:20:35', '2021-12-26 13:20:35'),
(9, 'Abdul Hadi Butt', '8', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', NULL, '2022-01-04 17:22:35', '2022-01-04 17:22:35'),
(10, 'Abdul Hadi Butt', '9', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, AECHS', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', NULL, '2022-02-10 14:21:03', '2022-02-10 14:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Men', '', 'men', NULL, NULL),
(2, 'Women', '', 'women', NULL, NULL),
(3, 'Kids', '', 'kids', NULL, NULL),
(4, 'Sports', '', 'sports', NULL, NULL),
(5, 'Digital', '', 'digital', NULL, NULL),
(6, 'Furniture', '', 'furniture', NULL, NULL),
(8, 'Watches', '1644940743rolex.png', 'watches', '2022-02-12 14:36:42', '2022-02-15 15:59:03');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_12_11_154853_create_products_table', 1),
(7, '2021_12_21_122638_create_category_table', 1),
(8, '2021_12_21_122702_create_subcategory_table', 1),
(9, '2021_12_21_145237_create_sessions_table', 1),
(10, '2021_12_22_144003_create_orders_table', 1),
(11, '2021_12_22_144553_create_order_items_table', 1),
(12, '2021_12_22_145130_create_addresses_table', 1),
(13, '2021_12_22_145810_create_order_details_table', 1),
(14, '2022_02_04_175018_create_wishlist_table', 2),
(15, '2022_02_14_194717_create_product_images_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paystatus` int(11) NOT NULL,
  `paymethod` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `paystatus`, `paymethod`, `status`, `created_at`, `updated_at`) VALUES
(42, '1', 0, 'COD', '0', '2021-12-24 17:20:01', '2021-12-24 17:20:01'),
(43, '1', 0, 'COD', '0', '2021-12-24 17:22:34', '2021-12-24 17:22:34'),
(44, '7', 0, 'COD', '0', '2021-12-26 13:20:35', '2021-12-26 13:20:35'),
(45, '8', 1, 'Paypal', '0', '2022-01-04 17:22:35', '2022-01-04 17:22:35'),
(46, '1', 0, 'COD', '0', '2022-02-04 13:31:09', '2022-02-04 13:31:09'),
(47, '9', 1, 'Paypal', '0', '2022-02-10 14:21:03', '2022-02-10 14:21:03'),
(48, '9', 0, 'COD', '0', '2022-02-10 14:23:20', '2022-02-10 14:23:20'),
(49, '1', 1, 'Paypal', '0', '2022-02-19 20:03:40', '2022-02-19 20:03:40'),
(50, '1', 0, 'COD', '0', '2022-02-19 20:05:56', '2022-02-19 20:05:56'),
(51, '1', 0, 'COD', '0', '2022-02-20 14:22:58', '2022-02-20 14:22:58'),
(52, '1', 0, 'COD', '0', '2022-02-20 14:45:49', '2022-02-20 14:45:49'),
(53, '1', 0, 'COD', '0', '2022-02-20 15:11:00', '2022-02-20 15:11:00'),
(54, '1', 0, 'COD', '0', '2022-02-20 15:41:54', '2022-02-20 15:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `name`, `email`, `phone`, `address`, `country`, `city`, `district`, `zip`, `notes`, `created_at`, `updated_at`) VALUES
(41, '42', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'None', '2021-12-24 17:20:01', '2021-12-24 17:20:01'),
(42, '43', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2021-12-24 17:22:34', '2021-12-24 17:22:34'),
(43, '44', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2021-12-26 13:20:35', '2021-12-26 13:20:35'),
(44, '45', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-01-04 17:22:35', '2022-01-04 17:22:35'),
(45, '46', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-04 13:31:09', '2022-02-04 13:31:09'),
(46, '47', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, AECHS', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Please deliver with caution.', '2022-02-10 14:21:03', '2022-02-10 14:21:03'),
(47, '48', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, AECHS', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-10 14:23:21', '2022-02-10 14:23:21'),
(48, '49', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-19 20:03:40', '2022-02-19 20:03:40'),
(49, '50', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-19 20:05:56', '2022-02-19 20:05:56'),
(50, '51', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-20 14:22:58', '2022-02-20 14:22:58'),
(51, '52', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-20 14:45:49', '2022-02-20 14:45:49'),
(52, '53', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', 'Special Notes', '2022-02-20 15:11:00', '2022-02-20 15:11:00'),
(53, '54', 'Abdul Hadi Butt', 'hadibutt476@gmail.com', '+923045260527', 'House#428/1, Street 2, Sector 2, Airport Housing Society', 'Pakistan', 'Rawalpindi', 'Chaklala', '44000', '', '2022-02-20 15:41:54', '2022-02-20 15:41:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_title`, `product_price`, `product_quantity`, `product_image`, `product_color`, `product_size`, `total`, `created_at`, `updated_at`) VALUES
(44, '42', 'Apple iPhone X', '10.25', '1', 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1', NULL, NULL, '10.25', '2021-12-24 17:20:01', '2021-12-24 17:20:01'),
(45, '43', 'Apple iPhone X', '10.25', '1', 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1', NULL, NULL, '11.275', '2021-12-24 17:22:34', '2021-12-24 17:22:34'),
(46, '44', 'Samsung Galaxy S9', '45.90', '1', 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1', NULL, NULL, '50.49', '2021-12-26 13:20:35', '2021-12-26 13:20:35'),
(47, '45', 'Samsung Galaxy S9', '45.90', '1', 'https://i.ebayimg.com/00/s/ODY0WDgwMA==/z/9S4AAOSwMZRanqb7/$_35.JPG?set_id=89040003C1', NULL, NULL, '50.49', '2022-01-04 17:22:35', '2022-01-04 17:22:35'),
(48, '45', 'LG V10 H900', '15.90', '4', 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1', NULL, NULL, '120.45', '2022-01-04 17:22:35', '2022-01-04 17:22:35'),
(49, '46', 'LG V10 H900', '15.90', '1', 'https://i.ebayimg.com/00/s/NjQxWDQyNA==/z/VDoAAOSwgk1XF2oo/$_35.JPG?set_id=89040003C1', NULL, NULL, '17.49', '2022-02-04 13:31:09', '2022-02-04 13:31:09'),
(50, '47', 'Apple iPhone X', '10.25', '1', 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1', NULL, NULL, '11.275', '2022-02-10 14:21:03', '2022-02-10 14:21:03'),
(51, '48', 'Apple iPhone X', '10.25', '1', 'https://i.ebayimg.com/00/s/MTYwMFg5OTU=/z/9UAAAOSwFyhaFXZJ/$_35.JPG?set_id=89040003C1', NULL, NULL, '11.275', '2022-02-10 14:23:21', '2022-02-10 14:23:21'),
(52, '48', 'Google Pixel 2 XL', '5.90', '1', 'https://i.ebayimg.com/00/s/MTYwMFg4MzA=/z/G2YAAOSwUJlZ4yQd/$_35.JPG?set_id=89040003C1', NULL, NULL, '17.765', '2022-02-10 14:23:21', '2022-02-10 14:23:21'),
(53, '49', 'Konflict Men\'s Chaos T Shirt - Black & White', '23', '2', '16451842396t.jpg', NULL, NULL, '50.6', '2022-02-19 20:03:40', '2022-02-19 20:03:40'),
(54, '50', 'Konflict Men\'s Chaos T Shirt - Black & White', '23', '2', '16451842396t.jpg', NULL, NULL, '50.6', '2022-02-19 20:05:56', '2022-02-19 20:05:56'),
(55, '51', 'Konflict Men\'s Chaos T Shirt - Black & White', '23', '1', '16451842396t.jpg', NULL, NULL, '25.3', '2022-02-20 14:22:58', '2022-02-20 14:22:58'),
(56, '52', 'Konflict Men\'s Chaos T Shirt - Black & White', '23', '1', '16451842396t.jpg', NULL, NULL, '25.3', '2022-02-20 14:45:49', '2022-02-20 14:45:49'),
(57, '52', 'Konflict Men\'s 3D T Shirt', '25', '1', '16451845358t.jpg', NULL, NULL, '52.8', '2022-02-20 14:45:49', '2022-02-20 14:45:49'),
(58, '53', 'Konflict Men\'s 3D T Shirt', '25', '1', '16451845358t.jpg', NULL, NULL, '27.5', '2022-02-20 15:11:00', '2022-02-20 15:11:00'),
(59, '53', 'Woven Maheshwari Cotton Silk Saree - Sky Blue', '45', '1', '16451879356w.jpg', NULL, NULL, '77', '2022-02-20 15:11:00', '2022-02-20 15:11:00'),
(60, '54', 'Konflict Men\'s 3D T Shirt', '25', '1', '16451845358t.jpg', NULL, NULL, '27.5', '2022-02-20 15:41:54', '2022-02-20 15:41:54'),
(61, '54', 'Woven Maheshwari Cotton Silk Saree - Sky Blue', '45', '2', '16451879356w.jpg', NULL, NULL, '126.5', '2022-02-20 15:41:54', '2022-02-20 15:41:54');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discounted_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_featured` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `in_sale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `category_id`, `subcategory_id`, `description`, `photo`, `price`, `discounted_price`, `stock`, `is_featured`, `in_sale`, `created_at`, `updated_at`) VALUES
(9, 'Oyster Perpetual 42', 'oyster-perpetual-42', '8', '7', '<p>Rolex is good to watch.</p>', '1644940365rolex.png', '25', '22', '4', 'Yes', 'Yes', '2022-02-15 15:52:45', '2022-02-15 15:52:45'),
(10, 'Konflict Men\'s Rockstar Guitar T Shirt - Black', 'konflict-mens-rockstar-guitar-t-shirt-black', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451834601t.jpg', '16', '14', '1', 'Yes', 'Yes', '2022-02-18 11:24:20', '2022-02-18 11:24:20'),
(11, 'Konflict Men\'s Sailer T Shirt - Red & Black', 'konflict-mens-sailer-t-shirt-red-black', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451836662t.jpg', '13', '12', '0', 'Yes', 'Yes', '2022-02-18 11:27:46', '2022-02-18 11:27:46'),
(12, 'Konflict Men\'s Lion T Shirt - Blue & White', 'konflict-mens-lion-t-shirt-blue-white', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451838043t.jpg', '12', '10', '1', 'Yes', 'No', '2022-02-18 11:30:04', '2022-02-18 11:30:04'),
(13, 'Konflict Men\'s Wolf T Shirt - Blue', 'konflict-mens-wolf-t-shirt-blue', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451839414t.jpg', '18', '16', '1', 'Yes', 'Yes', '2022-02-18 11:32:21', '2022-02-18 11:32:21'),
(14, 'Konflict Men\'s Rose T Shirt - Red & White', 'konflict-mens-rose-t-shirt-red-white', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451841155t.jpg', '28', '26', '0', 'Yes', 'Yes', '2022-02-18 11:35:15', '2022-02-18 11:35:15'),
(15, 'Konflict Men\'s Chaos T Shirt - Black & White', 'konflict-mens-chaos-t-shirt-black-white', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451842396t.jpg', '23', '22', '3', 'Yes', 'No', '2022-02-18 11:37:19', '2022-02-18 11:37:19'),
(16, 'Konflict Men\'s Rocky Balboa T Shirt - White', 'konflict-mens-rocky-balboa-t-shirt-white', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451843837t.jpg', '14', '12', '0', 'Yes', 'Yes', '2022-02-18 11:39:43', '2022-02-18 11:39:43'),
(17, 'Konflict Men\'s 3D T Shirt', 'konflict-mens-3d-t-shirt', '1', '1', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451845358t.jpg', '25', '23', '1', 'Yes', 'No', '2022-02-18 11:42:15', '2022-02-18 11:42:15'),
(18, 'Woven Maheshwari Cotton Silk Saree - Blue & Purple', 'woven-maheshwari-cotton-silk-saree-blue-purple', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451870531w.jpg', '44', '42', '1', 'Yes', 'No', '2022-02-18 12:24:13', '2022-02-18 12:24:13'),
(19, 'Woven Maheshwari Cotton Silk Saree - Brown', 'woven-maheshwari-cotton-silk-saree-brown', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451871712w.jpg', '58', '56', '0', 'Yes', 'No', '2022-02-18 12:26:11', '2022-02-18 12:26:11'),
(20, 'Woven Maheshwari Cotton Silk Saree - Dark Blue', 'woven-maheshwari-cotton-silk-saree-dark-blue', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451872823w.jpg', '65', '62', '2', 'Yes', 'Yes', '2022-02-18 12:28:02', '2022-02-18 12:28:02'),
(21, 'Woven Maheshwari Cotton Silk Saree - Redish Orange', 'woven-maheshwari-cotton-silk-saree-redish-orange', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451874394w.jpg', '45', '42', '1', 'No', 'Yes', '2022-02-18 12:30:39', '2022-02-18 12:30:39'),
(22, 'Woven Maheshwari Cotton Silk Saree - Peacock', 'woven-maheshwari-cotton-silk-saree-peacock', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451875655w.jpg', '55', '52', '1', 'Yes', 'No', '2022-02-18 12:32:45', '2022-02-18 12:32:45'),
(25, 'Woven Maheshwari Cotton Silk Saree - Sky Blue', 'woven-maheshwari-cotton-silk-saree-sky-blue', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451879356w.jpg', '45', '43', '2', 'Yes', 'Yes', '2022-02-18 12:38:55', '2022-02-18 12:38:55'),
(26, 'Woven Maheshwari Cotton Silk Saree - Red', 'woven-maheshwari-cotton-silk-saree-red', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451880727w.jpg', '48', '46', '3', 'Yes', 'Yes', '2022-02-18 12:41:12', '2022-02-18 12:41:12'),
(27, 'Woven Maheshwari Cotton Silk Saree - Grey', 'woven-maheshwari-cotton-silk-saree-grey', '2', '5', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '16451881668w.jpg', '65', '63', '2', 'Yes', 'Yes', '2022-02-18 12:42:46', '2022-02-18 12:42:46'),
(28, 'Football - X1', 'football-x1', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645188672f1.jpg', '21', '20', '0', 'No', 'Yes', '2022-02-18 12:51:12', '2022-02-18 12:51:12'),
(29, 'Football - X2', 'football-x2', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645188761f2.jpg', '21', '18', '2', 'No', 'No', '2022-02-18 12:52:41', '2022-02-18 12:52:41'),
(30, 'Football - X3', 'football-x3', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645188843f3.jpg', '23', '20', '2', 'No', 'Yes', '2022-02-18 12:54:03', '2022-02-18 12:54:03'),
(31, 'Football - X4', 'football-x4', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645188945f4.jpg', '21', '20', '0', 'No', 'Yes', '2022-02-18 12:55:45', '2022-02-18 12:55:45'),
(32, 'Football - X5', 'football-x5', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645189038f5.jpg', '12', '10', '3', 'No', 'No', '2022-02-18 12:57:18', '2022-02-18 12:57:18'),
(33, 'Football - X6', 'football-x6', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645189114f6.jpg', '25', '22', '0', 'No', 'Yes', '2022-02-18 12:58:34', '2022-02-18 12:58:34'),
(34, 'Football - X7', 'football-x7', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645189199f7.jpg', '23', '22', '4', 'Yes', 'No', '2022-02-18 12:59:59', '2022-02-18 12:59:59'),
(35, 'Football - X8', 'football-x8', '4', '9', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply a dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645189283f8.jpg', '12', '10', '2', 'No', 'Yes', '2022-02-18 13:01:23', '2022-02-18 13:01:23'),
(36, 'Samsung A1', 'samsung-a1', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645190585m1.jpg', '225', '222', '1', 'Yes', 'Yes', '2022-02-18 13:23:05', '2022-02-18 13:23:05'),
(37, 'Nokia C3', 'nokia-c3', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645190661m2.png', '195', '192', '0', 'Yes', 'Yes', '2022-02-18 13:24:21', '2022-02-18 13:24:21'),
(38, 'Nokia L8', 'nokia-l8', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645190763m3.jpg', '215', '210', '2', 'No', 'Yes', '2022-02-18 13:26:03', '2022-02-18 13:26:03'),
(39, 'Redmi Note 9', 'redmi-note-9', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645190858m4.jpg', '275', '272', '3', 'Yes', 'No', '2022-02-18 13:27:38', '2022-02-18 13:27:38'),
(40, 'Realme C1', 'realme-c1', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645190949m5.jpg', '215', '210', '0', 'No', 'Yes', '2022-02-18 13:29:09', '2022-02-18 13:29:09'),
(41, 'IPhone X', 'iphone-x', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645191078m6.png', '599', '598', '2', 'Yes', 'No', '2022-02-18 13:31:18', '2022-02-18 13:31:18'),
(42, 'Samsung A12', 'samsung-a12', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645193092m7.jpg', '335', '332', '2', 'Yes', 'Yes', '2022-02-18 14:04:52', '2022-02-18 14:04:52'),
(43, 'Huawie P10 Lite', 'huawie-p10-lite', '5', '6', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '1645193169m8.jpg', '455', '452', '1', 'Yes', 'Yes', '2022-02-18 14:06:09', '2022-02-18 14:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_1`, `image_2`, `image_3`, `created_at`, `updated_at`) VALUES
(3, '9', '1644940365rolex.png', '1644940365rolex.png', '1644940365rolex.png', '2022-02-15 15:52:45', '2022-02-15 15:52:45'),
(4, '10', '16451834601t.jpg', '16451834601t.jpg', '16451834601t.jpg', '2022-02-18 11:24:20', '2022-02-18 11:24:20'),
(5, '11', '16451836662t.jpg', '16451836662t.jpg', '16451836662t.jpg', '2022-02-18 11:27:46', '2022-02-18 11:27:46'),
(6, '12', '16451838043t.jpg', '16451838043t.jpg', '16451838043t.jpg', '2022-02-18 11:30:04', '2022-02-18 11:30:04'),
(7, '13', '16451839414t.jpg', '16451839414t.jpg', '16451839414t.jpg', '2022-02-18 11:32:21', '2022-02-18 11:32:21'),
(8, '14', '16451841155t.jpg', '16451841155t.jpg', '16451841155t.jpg', '2022-02-18 11:35:15', '2022-02-18 11:35:15'),
(9, '15', '16451842396t.jpg', '16451842396t.jpg', '16451842396t.jpg', '2022-02-18 11:37:19', '2022-02-18 11:37:19'),
(10, '16', '16451843837t.jpg', '16451843837t.jpg', '16451843837t.jpg', '2022-02-18 11:39:43', '2022-02-18 11:39:43'),
(11, '17', '16451845368t.jpg', '16451845368t.jpg', '16451845368t.jpg', '2022-02-18 11:42:16', '2022-02-18 11:42:16'),
(12, '18', '16451870531w.jpg', '16451870531w.jpg', '16451870531w.jpg', '2022-02-18 12:24:13', '2022-02-18 12:24:13'),
(13, '19', '16451871712w.jpg', '16451871712w.jpg', '16451871712w.jpg', '2022-02-18 12:26:11', '2022-02-18 12:26:11'),
(14, '20', '16451872833w.jpg', '16451872833w.jpg', '16451872833w.jpg', '2022-02-18 12:28:03', '2022-02-18 12:28:03'),
(15, '21', '16451874394w.jpg', '16451874394w.jpg', '16451874394w.jpg', '2022-02-18 12:30:39', '2022-02-18 12:30:39'),
(16, '22', '16451875655w.jpg', '16451875655w.jpg', '16451875655w.jpg', '2022-02-18 12:32:45', '2022-02-18 12:32:45'),
(18, '24', '16451877296w.jpg', '16451877296w.jpg', '16451877296w.jpg', '2022-02-18 12:35:29', '2022-02-18 12:35:29'),
(19, '25', '16451879356w.jpg', '16451879356w.jpg', '16451879356w.jpg', '2022-02-18 12:38:55', '2022-02-18 12:38:55'),
(20, '26', '16451880727w.jpg', '16451880727w.jpg', '16451880727w.jpg', '2022-02-18 12:41:12', '2022-02-18 12:41:12'),
(21, '27', '16451881678w.jpg', '16451881678w.jpg', '16451881678w.jpg', '2022-02-18 12:42:47', '2022-02-18 12:42:47'),
(22, '28', '1645188672f1.jpg', '1645188672f1.jpg', '1645188672f1.jpg', '2022-02-18 12:51:12', '2022-02-18 12:51:12'),
(23, '29', '1645188762f2.jpg', '1645188762f2.jpg', '1645188762f2.jpg', '2022-02-18 12:52:42', '2022-02-18 12:52:42'),
(24, '30', '1645188844f3.jpg', '1645188844f3.jpg', '1645188844f3.jpg', '2022-02-18 12:54:04', '2022-02-18 12:54:04'),
(25, '31', '1645188945f4.jpg', '1645188945f4.jpg', '1645188945f4.jpg', '2022-02-18 12:55:45', '2022-02-18 12:55:45'),
(26, '32', '1645189038f5.jpg', '1645189038f5.jpg', '1645189038f5.jpg', '2022-02-18 12:57:18', '2022-02-18 12:57:18'),
(27, '33', '1645189114f6.jpg', '1645189114f6.jpg', '1645189114f6.jpg', '2022-02-18 12:58:34', '2022-02-18 12:58:34'),
(28, '34', '1645189199f7.jpg', '1645189199f7.jpg', '1645189199f7.jpg', '2022-02-18 12:59:59', '2022-02-18 12:59:59'),
(29, '35', '1645189284f8.jpg', '1645189284f8.jpg', '1645189284f8.jpg', '2022-02-18 13:01:24', '2022-02-18 13:01:24'),
(30, '36', '1645190585m1.jpg', '1645190585m1.jpg', '1645190585m1.jpg', '2022-02-18 13:23:05', '2022-02-18 13:23:05'),
(31, '37', '1645190661m2.png', '1645190661m2.png', '1645190661m2.png', '2022-02-18 13:24:21', '2022-02-18 13:24:21'),
(32, '38', '1645190763m3.jpg', '1645190763m3.jpg', '1645190763m3.jpg', '2022-02-18 13:26:03', '2022-02-18 13:26:03'),
(33, '39', '1645190858m4.jpg', '1645190858m4.jpg', '1645190858m4.jpg', '2022-02-18 13:27:38', '2022-02-18 13:27:38'),
(34, '40', '1645190949m5.jpg', '1645190949m5.jpg', '1645190949m5.jpg', '2022-02-18 13:29:09', '2022-02-18 13:29:09'),
(35, '41', '1645191078m6.png', '1645191078m6.png', '1645191078m6.png', '2022-02-18 13:31:18', '2022-02-18 13:31:18'),
(36, '42', '1645193092m7.jpg', '1645193092m7.jpg', '1645193092m7.jpg', '2022-02-18 14:04:52', '2022-02-18 14:04:52'),
(37, '43', '1645193169m8.jpg', '1645193169m8.jpg', '1645193169m8.jpg', '2022-02-18 14:06:09', '2022-02-18 14:06:09');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `name`, `image`, `slug`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'T-Shirts', '', 't-shirts', '1', NULL, NULL),
(2, 'Casual', '', 'casual', '1', NULL, NULL),
(3, 'Sports', '', 'sports', '1', NULL, NULL),
(4, 'Kurta & Kurti', '', 'kurta-kurti', '2', NULL, NULL),
(5, 'Sarees', '', 'sarees', '2', NULL, NULL),
(6, 'Smart Phone', '', 'smart-phone', '5', NULL, NULL),
(7, 'Rolex', '1644940793rolex.png', 'rolex', '8', '2022-02-13 16:29:24', '2022-02-15 15:59:53'),
(8, 'Sofas', '1645182030sofas.png', 'sofas', '6', '2022-02-18 11:00:30', '2022-02-18 11:00:30'),
(9, 'Footballs', '1645182222football.jpg', 'footballs', '4', '2022-02-18 11:03:42', '2022-02-18 11:03:42'),
(10, 'Diapers', '1645182374diapers.png', 'diapers', '3', '2022-02-18 11:06:14', '2022-02-18 11:06:14');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hadi Butt', 'hadibutt476@gmail.com', '2021-12-26 15:32:59', '$2y$10$Q8q9QObLamPRUpivIwT/kudpMcSuHG6ESup3S9LptcKc1FtLIB1x2', NULL, NULL, 'rT1ZzE5zRK2JFtbsMN7JQbVdZ76atcnVeYma9qxErSBBSdljjBZvpWFTqEEF', '2021-12-22 10:05:58', '2022-02-10 14:31:45'),
(7, 'Admin', 'admin@admin.com', '2021-12-26 15:25:56', '$2y$10$7z7FrT9APfps9U41ltU8BOhu1mKiqhlkTACevKvlALD4hGqNAxiPS', NULL, NULL, 'fEEDlG2y9MU0SFYFLbc0zlgXWlQQdOzP3n1l8lBdY4CdMRxyBwslgdcFwTrM', '2021-12-26 13:16:42', '2021-12-26 15:25:56'),
(8, 'Uzair', 'uzair@afzal.com', '2022-01-04 17:21:53', '$2y$10$tTqPox.UPuMcwBQ06aQfieWbA3gNBXs9vITNHlnaZUNbIxsehqNjC', NULL, NULL, NULL, '2022-01-04 17:18:24', '2022-01-04 17:21:53'),
(9, 'droopy_64', 'droopy@hadi.com', '2022-02-10 14:19:49', '$2y$10$YUXkwjBJqYG4BEJwTS/CJeaCDDGnpq7R4UYyHu1hrrFR1tUWtKUMe', NULL, NULL, NULL, '2022-02-10 14:17:01', '2022-02-10 14:19:49'),
(10, 'Hello World', 'hello@world.com', NULL, '$2y$10$N.0zdFOXuOOEuzXAzpAiNeeaR9SRWazfDRbDDptnDvsYMrNiEBP7C', NULL, NULL, NULL, '2022-02-10 14:37:34', '2022-02-10 14:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `p_id`, `name`, `price`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(20, '1', 15, 'Konflict Men\'s Chaos T Shirt - Black & White', '23', '16451842396t.jpg', 'In Stock', '2022-02-19 19:58:38', '2022-02-19 19:58:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name_unique` (`name`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subcategory_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
