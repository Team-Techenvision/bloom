-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `banner_name` varchar(255) DEFAULT NULL,
  `banner_image` varchar(255) DEFAULT NULL,
  `banner_title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 Active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `banner_image`, `banner_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(8, 'home banner 1', 'images/banner/banner_image1635573446.png', 'home banner 1', 'ddemo bannner 1', 1, '2021-10-30 00:25:22', '2021-10-30 00:27:26');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(200) NOT NULL,
  `blog_title` varchar(255) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_content` text DEFAULT NULL,
  `blog_images` varchar(200) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_date`, `blog_content`, `blog_images`, `status`, `created_at`, `updated_at`) VALUES
(1, 'blog 2', '2021-09-30', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'images/blog/blog_image1630569187.jpeg', 1, '2021-09-02 07:47:06', '2021-09-02 07:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_image` varchar(250) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Beauty Products', 'images/category/category_image1635577058.png', 1, '2021-10-30 01:27:38', '2021-10-30 04:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` varchar(50) DEFAULT NULL,
  `cancel_reason` text DEFAULT NULL,
  `cancel_comment` text DEFAULT NULL,
  `address_id` int(11) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `order_status` int(11) NOT NULL DEFAULT 1,
  `copoun_code` varchar(200) DEFAULT NULL,
  `payment_mode` varchar(50) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_status` varchar(50) DEFAULT NULL,
  `shipping_charge` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_id`, `cancel_reason`, `cancel_comment`, `address_id`, `amount`, `order_status`, `copoun_code`, `payment_mode`, `payment_id`, `payment_status`, `shipping_charge`, `created_at`, `updated_at`) VALUES
(1, 4, 'Bloom41636544314', NULL, NULL, 2, '50', 1, NULL, '1', NULL, NULL, 50, '2021-11-10 06:08:34', '2021-11-10 06:08:34'),
(2, 4, 'Bloom41636544341', NULL, NULL, 2, '50', 1, NULL, '1', NULL, NULL, 50, '2021-11-10 06:09:01', '2021-11-10 06:09:01'),
(3, 4, 'Bloom41636544368', NULL, NULL, 2, '500', 1, NULL, 'Online', 'pay_IJtQIGtNcWnOKa', 'success', 50, '2021-11-10 06:09:28', '2021-11-10 06:33:19'),
(4, 4, 'Bloom41636546435', NULL, NULL, 8, '50', 1, NULL, 'Online', 'pay_IJtfIl11U1LeKA', 'success', 50, '2021-11-10 06:43:55', '2021-11-10 06:44:19'),
(5, 4, 'Bloom41636547079', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 06:54:39', '2021-11-10 06:54:39'),
(6, 4, 'Bloom41636547509', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:01:49', '2021-11-10 07:01:49'),
(7, 4, 'Bloom41636547547', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:02:27', '2021-11-10 07:02:27'),
(8, 4, 'Bloom41636547585', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:03:05', '2021-11-10 07:03:05'),
(9, 4, 'Bloom41636547609', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:03:29', '2021-11-10 07:03:29'),
(10, 4, 'Bloom41636547711', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:05:11', '2021-11-10 07:05:11'),
(11, 4, 'Bloom41636547746', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:05:46', '2021-11-10 07:05:46'),
(12, 4, 'Bloom41636547770', NULL, NULL, 8, NULL, 1, NULL, '1', NULL, NULL, NULL, '2021-11-10 07:06:10', '2021-11-10 07:06:10'),
(13, 4, 'Bloom41636547792', NULL, NULL, 8, '550', 1, NULL, 'Online', 'pay_IJu3I2IAAwAzII', 'success', 0, '2021-11-10 07:06:32', '2021-11-10 07:07:00');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` varchar(50) NOT NULL,
  `sub_order_id` varchar(50) NOT NULL,
  `assign_vendor_id` int(11) DEFAULT NULL,
  `prod_name` varchar(255) DEFAULT NULL,
  `prod_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `sub_total` varchar(20) NOT NULL,
  `order_status` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `sub_order_id`, `assign_vendor_id`, `prod_name`, `prod_id`, `attribute_id`, `quantity`, `sub_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 'Bloom41636544314', 'Bloom401636544314', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 06:08:34', '2021-11-10 06:08:34'),
(2, 'Bloom41636546435', 'Bloom401636546435', NULL, 'Tamarind Lip Balm', 3, 2, 1, '520', '1', '2021-11-10 06:43:55', '2021-11-10 06:43:55'),
(3, 'Bloom41636547079', 'Bloom401636547079', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 06:54:39', '2021-11-10 06:54:39'),
(4, 'Bloom41636547509', 'Bloom401636547509', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:01:49', '2021-11-10 07:01:49'),
(5, 'Bloom41636547547', 'Bloom401636547547', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:02:27', '2021-11-10 07:02:27'),
(6, 'Bloom41636547585', 'Bloom401636547586', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:03:06', '2021-11-10 07:03:06'),
(7, 'Bloom41636547609', 'Bloom401636547609', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:03:29', '2021-11-10 07:03:29'),
(8, 'Bloom41636547711', 'Bloom401636547711', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:05:11', '2021-11-10 07:05:11'),
(9, 'Bloom41636547746', 'Bloom401636547746', NULL, 'Clove Lip Balm', 2, 1, 4, '110', '1', '2021-11-10 07:05:46', '2021-11-10 07:05:46'),
(10, 'Bloom41636547770', 'Bloom401636547770', NULL, 'Clove Lip Balm', 2, 1, 5, '110', '1', '2021-11-10 07:06:10', '2021-11-10 07:06:10'),
(11, 'Bloom41636547792', 'Bloom401636547792', NULL, 'Clove Lip Balm', 2, 1, 5, '110', '1', '2021-11-10 07:06:32', '2021-11-10 07:06:32');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(255) NOT NULL,
  `plan_name` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(20) DEFAULT 1 COMMENT '1 active 0 inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_name`, `price`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '500', '<p>Features<br />1. 10% discount on all products.<br />2. 2 free Soap samples in a year.<br />3. 1 free Hair Oil sample in a year.<br />4. 1 free lotion sample in year.<br />5. Notification on all new products.</p>', 1, '2021-11-03 00:32:19', '2021-11-03 00:32:19'),
(2, 'Standard', '750', '<p>Features<br />1. 10% discount on all products.<br />2. 2 free Soap samples in a year.<br />3. 1 free Hair Oil sample in a year.<br />4. 1 free lotion sample in year.<br />5. Notification on all new products.</p>', 1, '2021-11-03 00:32:19', '2021-11-03 00:32:19'),
(3, 'Premium', '1000', '<p>Features<br />1. 10% discount on all products.<br />2. 2 free Soap samples in a year.<br />3. 1 free Hair Oil sample in a year.<br />4. 1 free lotion sample in year.<br />5. Notification on all new products.</p>', 1, '2021-11-03 00:32:19', '2021-11-03 00:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1-activate,0-de-activate',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `product_name`, `slug`, `product_code`, `short_description`, `long_description`, `category_id`, `sub_category_id`, `tags`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Clove Lip Balm', 'jbCwuCBntU', '1234', 'Vitamin E added in Lip-Balm makes it a perfect lip-care product', '<p>Our <strong>natural lip balm combines a rich blend of ingredients such as shea/mango butter</strong>, apricot oil, carnauba wax, Vitamin E and respective extracts. It is one of the best lip balms for dry skin and helps nurture the lip, moisturize chapped lips and give the lips a soft and smooth feel.</p>\r\nVitamin E added in Lip-Balm makes it a perfect lip-care product because it not only smooth the texture of the lips, but make them all the more moisturised, beautiful, soft and well protected.', '1', NULL, NULL, NULL, 1, '2021-11-02 04:52:31', '2021-11-02 04:52:31'),
(3, 'Tamarind Lip Balm', '8duVHvod9C', '12345', 'Our natural lip balm combines a rich blend', '<p>Our <strong>natural lip balm combines a rich blend of ingredients such as shea/mango butter</strong>, apricot oil, carnauba wax, Vitamin E and respective extracts. It is one of the best lip balms for dry skin and helps nurture the lip, moisturize chapped lips and give the lips a soft and smooth feel.</p>\r\n<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">demo</td>\r\n<td style=\"width: 50%;\">demo</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">demo</td>\r\n<td style=\"width: 50%;\">demo</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p><br /><strong>Vitamin E</strong> added in <em>Lip-Balm</em> makes it a perfect lip-care product because it not only smooth the texture of the lips, but make them all the more moisturised, beautiful, soft and well protected.</p>', '1', NULL, NULL, NULL, 1, '2021-11-02 23:30:28', '2021-11-02 23:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `multiple_attribute` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `products_id`, `product_size`, `product_color`, `price`, `special_price`, `quantity`, `status`, `multiple_attribute`, `created_at`, `updated_at`) VALUES
(1, 2, '5 inch', 'grey', '110', NULL, '20', '1', 1, '2021-11-02 05:40:35', '2021-11-02 05:47:18'),
(2, 3, '5 inch', 'grey', '520', NULL, '20', '1', 1, '2021-11-02 05:40:35', '2021-11-02 05:47:18');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `product_images_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT 1 COMMENT '2-main-image,1-sub-image',
  `status` int(20) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`product_images_id`, `products_id`, `product_image`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'images/product/product_main_image1635837698.png', 2, 1, '2021-11-02 01:51:38', '2021-11-02 01:51:38'),
(2, 2, 'images/product/product_main_image1635848551.png', 2, 1, '2021-11-02 04:52:31', '2021-11-02 04:52:31'),
(3, 2, 'images/product/product_sub_image88388.png', 1, 1, '2021-11-02 06:22:34', '2021-11-02 06:22:34'),
(4, 3, 'images/product/product_main_image1635915628.png', 2, 1, '2021-11-02 23:30:28', '2021-11-02 23:30:28');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rating` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `comment` text CHARACTER SET utf8 DEFAULT NULL,
  `status` int(11) DEFAULT 1 COMMENT '1-active, 0-inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `product_id`, `rating`, `comment`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '4', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1, '2021-10-21 07:18:02', '2021-10-21 07:18:02'),
(2, 2, 4, '3', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.', 1, '2021-10-21 08:13:49', '2021-10-21 08:13:49'),
(3, 3, 6, '5', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,', 1, '2021-10-21 08:18:09', '2021-10-21 08:18:09');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_charges`
--

CREATE TABLE `shipping_charges` (
  `id` int(11) NOT NULL,
  `min` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `ship_charges` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shipping_charges`
--

INSERT INTO `shipping_charges` (`id`, `min`, `max`, `ship_charges`, `created_at`, `updated_at`) VALUES
(1, 0, 499, 50, '2021-11-09 05:13:55', '2021-11-09 05:13:55'),
(2, 499, 100000, 0, '2021-11-09 05:15:33', '2021-11-09 05:15:33');

-- --------------------------------------------------------

--
-- Table structure for table `state_list`
--

CREATE TABLE `state_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_list`
--

INSERT INTO `state_list` (`id`, `state`) VALUES
(1, 'ANDAMAN AND NICOBAR ISLANDS'),
(2, 'ANDHRA PRADESH'),
(3, 'ARUNACHAL PRADESH'),
(4, 'ASSAM'),
(5, 'BIHAR'),
(6, 'CHATTISGARH'),
(7, 'CHANDIGARH'),
(8, 'DAMAN AND DIU'),
(9, 'DELHI'),
(10, 'DADRA AND NAGAR HAVELI'),
(11, 'GOA'),
(12, 'GUJARAT'),
(13, 'HIMACHAL PRADESH'),
(14, 'HARYANA'),
(15, 'JAMMU AND KASHMIR'),
(16, 'JHARKHAND'),
(17, 'KERALA'),
(18, 'KARNATAKA'),
(19, 'LAKSHADWEEP'),
(20, 'MEGHALAYA'),
(21, 'MAHARASHTRA'),
(22, 'MANIPUR'),
(23, 'MADHYA PRADESH'),
(24, 'MIZORAM'),
(25, 'NAGALAND'),
(26, 'ORISSA'),
(27, 'PUNJAB'),
(28, 'PONDICHERRY'),
(29, 'RAJASTHAN'),
(30, 'SIKKIM'),
(31, 'TAMIL NADU'),
(32, 'TRIPURA'),
(33, 'UTTARAKHAND'),
(34, 'UTTAR PRADESH'),
(35, 'WEST BENGAL'),
(36, 'TELANGANA');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(100) NOT NULL,
  `category_id` bigint(100) DEFAULT NULL,
  `sub_category_name` varchar(255) DEFAULT NULL,
  `sub_category_image` varchar(255) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1 COMMENT '1 Active 0 Inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `sub_category_name`, `sub_category_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Almond Lip Balm', 'images/subcategory/category_image1635587295.png', 1, '2021-10-30 02:58:13', '2021-10-30 04:20:18'),
(2, 1, 'Black Currant Lip Balm', 'images/subcategory/sub_category_image1635585891.png', 1, '2021-10-30 03:54:51', '2021-10-30 03:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `temp_carts`
--

CREATE TABLE `temp_carts` (
  `temp_carts_id` int(11) NOT NULL,
  `session_id` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_type` int(10) NOT NULL DEFAULT 2 COMMENT '1 Admin 2 User',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(20) NOT NULL DEFAULT 1 COMMENT '1 active 2 inactive',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `user_type`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@bloom.com', '98764543212', 1, NULL, '$2y$10$w24PG7/VcghhKFZfHszFR.N4lRuVPtw9hmA3KSTl0i4nYNu7JcG8a', NULL, 1, '2021-10-29 10:51:15', '2021-10-29 10:51:15'),
(4, 'Dhananjay Sawant', 'prakash@gmail.com', '9876543210', 2, NULL, '$2y$10$fRjsQejQF3Croh4qTCbSwernfSQiWKkIi61Yy2wXVck0pFxbUyVd6', NULL, 1, '2021-11-08 03:21:22', '2021-11-08 03:21:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `selected` tinyint(4) NOT NULL DEFAULT 0,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `apartment` varchar(150) DEFAULT NULL,
  `country` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `phone_alt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `name`, `phone`, `email`, `selected`, `address`, `address_type`, `apartment`, `country`, `state`, `city`, `pin_code`, `created_at`, `updated_at`, `locality`, `landmark`, `phone_alt`) VALUES
(2, 4, 'Akshay Jadhav', '987654310', 'akshay@gmail.com', 0, 'Rajarampuri 1st Lane kolahpur', 'work', 'flat no 2', 'India', 'MAHARASHTRA', 'Kolhapur', 416001, '2021-10-13 08:25:13', '2021-11-10 01:03:51', NULL, NULL, NULL),
(7, 3, 'Dhananjay', '9876543233', 'dhananjay.techenvision@gmail.com', 1, 'Rajarampuri Main Road Kolhapur', 'Work', NULL, 'India', 'MAHARASHTRA', 'Kolhapur', 416216, '2021-10-22 05:20:30', '2021-10-22 05:20:30', 'rajarampuri', 'janata bazar chouck', '9876543210'),
(8, 4, 'dhananjay Sawant', '9876543210', 'prakash@gmail.com', 1, 'Demo Lain Demo City', NULL, NULL, 'India', 'MAHARASHTRA', 'Kolhapur', 416216, '2021-11-09 01:15:46', '2021-11-09 01:15:46', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`products_id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`product_images_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_list`
--
ALTER TABLE `state_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_carts`
--
ALTER TABLE `temp_carts`
  ADD PRIMARY KEY (`temp_carts_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `products_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `product_images_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shipping_charges`
--
ALTER TABLE `shipping_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state_list`
--
ALTER TABLE `state_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_carts`
--
ALTER TABLE `temp_carts`
  MODIFY `temp_carts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
