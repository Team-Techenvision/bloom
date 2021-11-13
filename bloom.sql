-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 01:41 PM
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
(1, 'blog 2', '2021-09-30', '<h6>About Sustainability</h6>\r\n<p>It would seem that everything is clear here: the higher the concentration of aromatic components - the more stable the aroma. But not everything is so simple: even if in the laboratory the aroma stays calm for a day or more, in life it is influenced by humidity and temperature, skin condition and the aroma of your body. Therefore, experts advise to apply fragrances on a clean, moisturizing body lotion. But even this does not guarantee that super-concentrated perfumes will last longer than perfumed or eau de toilette. It all depends on the volatility of the ingredients themselves.</p>\r\n<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li>PerfumeIs the most expensive type of perfume, because it contains the highest concentration of aromatic composition - 20-30%. Therefore, they should be used only for special events.</li>\r\n</ul>\r\n</td>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li>Perfumed WaterIs the most concentrated after perfumes mixture of perfume composition 12-15% with ethyl alcohol 85%.</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li>Cologneis the least concentrated type of perfume. Contains 5% aromatic substances dissolved in 80% ethyl alcohol. By the way, it was the most famous French emperor who introduced colognes into fashion and used 1-2 bottles a day</li>\r\n</ul>\r\n</td>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li>Eau De Toiletteis what is most likely on your cosmetic table. The most common type of perfume. Contains 6-12% of the perfume composition. The term itself, by the way, was invented by Napoleon when he invented a bergamot-based fragrance recipe during a military campaign and called it \"eau de toilette.\"</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'images/blog/blog_image1630569187.jpg', 1, '2021-09-02 07:47:06', '2021-09-02 07:59:29'),
(3, 'blog 3', '2021-11-01', '<h3 style=\"color: #ff0000;\"><span style=\"background-color: #ffffff; font-family: \'andale mono\', monospace; color: #000000;\">About Sustainability</span></h3>\r\n<p>It would seem that everything is clear here: the higher the concentration of aromatic components - the more stable the aroma. But not everything is so simple: even if in the laboratory the aroma stays calm for a day or more, in life it is influenced by humidity and temperature, skin condition and the aroma of your body. Therefore, experts advise to apply fragrances on a clean, moisturizing body lotion. But even this does not guarantee that super-concentrated perfumes will last longer than perfumed or eau de toilette. It all depends on the volatility of the ingredients themselves.</p>\r\n<p><img src=\"../images/product/product_main_image1635848551.png\" alt=\"blog image\" width=\"150\" height=\"150\" /></p>', 'images/blog/blog_image1630569187.jpg', 1, '2021-09-02 07:47:06', '2021-11-13 00:39:29'),
(4, 'A Step-By-Step Guide To Add Blog', '2021-11-05', '<h2><strong>About Sustainability</strong></h2>\r\n<p>It would seem that everything is clear here: the higher the concentration of aromatic components - the more stable the aroma. But not everything is so simple: even if in the laboratory the aroma stays calm for a day or more, in life it is influenced by humidity and temperature, skin condition and the aroma of your body. Therefore, experts advise to apply fragrances on a clean, moisturizing body lotion. But even this does not guarantee that super-concentrated perfumes will last longer than perfumed or eau de toilette. It all depends on the volatility of the ingredients themselves.</p>\r\n<table style=\"border-collapse: collapse; width: 100%; margin-left: auto; margin-right: auto;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li style=\"text-align: justify;\"><strong>PerfumeIs the most expensive type of perfume,</strong> because it contains the highest concentration of aromatic composition.</li>\r\n</ul>\r\n</td>\r\n<td style=\"width: 50%;\">\r\n<ul>\r\n<li style=\"text-align: left;\"><strong>Perfumed WaterIs the most concentrated after perfumes</strong> mixture of perfume composition 12-15% with ethyl alcohol 85%.</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li><strong>Cologneis the least concentrated type of perfume.</strong> Contains 5% aromatic substances dissolved in 80% ethyl alcohol. By the way, it was the most famous French emperor who introduced colognes into fashion&nbsp;</li>\r\n</ul>\r\n</td>\r\n<td style=\"width: 50%;\">\r\n<ul class=\"post-list\">\r\n<li><strong>Eau De Toiletteis what is most likely on your cosmetic table.</strong> The most common type of perfume. Contains 6-12% of the perfume composition. The term itself, by the way, was invented by Napoleon when he invented a bergamot-based fragran</li>\r\n</ul>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>', 'images/blog/blog_image1636780750.jpeg', 1, '2021-11-12 23:49:11', '2021-11-13 00:17:47');

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

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `attribute_id`, `quantity`, `created_at`, `updated_at`) VALUES
(13, 5, 3, 2, 1, '2021-11-12 06:11:54', '2021-11-12 06:11:54'),
(17, 4, 2, 1, 1, '2021-11-13 07:29:52', '2021-11-13 07:29:52'),
(18, 5, 2, 1, 11, '2021-11-13 07:29:52', '2021-11-13 07:29:52');

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
(1, 'Beauty Products', 'images/category/category_image1636711549.jpeg', 1, '2021-10-30 01:27:38', '2021-11-12 04:35:49'),
(2, 'Nails', 'images/category/category_image1636711583.jpeg', 1, '2021-11-12 04:36:23', '2021-11-12 04:36:23'),
(3, 'Perfumes', 'images/category/category_image1636711614.jpeg', 1, '2021-11-12 04:36:54', '2021-11-12 04:36:55');

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
(1, 4, 'Bloom41636548091', NULL, NULL, 8, '740', 1, NULL, 'Online', 'pay_IJu8LvFEvBTZBj', 'success', 0, '2021-11-10 07:11:31', '2021-11-10 07:11:48'),
(2, 4, 'Bloom41636548414', NULL, NULL, 8, '160', 1, NULL, 'Online', 'pay_IJuEJZdqLAA8LG', 'success', 50, '2021-11-10 07:16:54', '2021-11-10 07:17:27'),
(3, 4, 'Bloom41636548624', NULL, NULL, 8, '160', 1, NULL, 'Online', 'pay_IJuHw32lZKNL1J', 'success', 50, '2021-11-10 07:20:24', '2021-11-10 07:20:59'),
(4, 4, 'Bloom41636635073', NULL, NULL, 8, '160', 1, NULL, 'Online', 'pay_IKIpfOsiirNwHI', 'success', 50, '2021-11-11 07:21:13', '2021-11-11 07:21:27'),
(5, 4, 'Bloom41636699256', NULL, NULL, 8, '490', 1, NULL, 'Online', 'pay_IKb3sYj6TNzpyy', 'success', 50, '2021-11-12 01:10:56', '2021-11-12 01:11:23'),
(6, 4, 'Bloom41636719920', NULL, NULL, 8, '160', 1, NULL, '1', NULL, NULL, 50, '2021-11-12 06:55:20', '2021-11-12 06:55:20');

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
(1, 'Bloom41636548091', 'Bloom401636548091', NULL, 'Clove Lip Balm', 2, 1, 2, '110', '1', '2021-11-10 07:11:31', '2021-11-10 07:11:31'),
(2, 'Bloom41636548091', 'Bloom411636548091', NULL, 'Tamarind Lip Balm', 3, 2, 1, '520', '1', '2021-11-10 07:11:31', '2021-11-10 07:11:31'),
(3, 'Bloom41636548414', 'Bloom401636548415', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:16:55', '2021-11-10 07:16:55'),
(4, 'Bloom41636548624', 'Bloom401636548624', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-10 07:20:24', '2021-11-10 07:20:24'),
(5, 'Bloom41636635073', 'Bloom401636635073', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-11 07:21:13', '2021-11-11 07:21:13'),
(6, 'Bloom41636699256', 'Bloom401636699256', NULL, 'Clove Lip Balm', 2, 1, 4, '110', '1', '2021-11-12 01:10:56', '2021-11-12 01:10:56'),
(7, 'Bloom41636719920', 'Bloom401636719920', NULL, 'Clove Lip Balm', 2, 1, 1, '110', '1', '2021-11-12 06:55:20', '2021-11-12 06:55:20');

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
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `profile_pic`, `user_type`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@bloom.com', '98764543212', NULL, 1, NULL, '$2y$10$w24PG7/VcghhKFZfHszFR.N4lRuVPtw9hmA3KSTl0i4nYNu7JcG8a', NULL, 1, '2021-10-29 10:51:15', '2021-10-29 10:51:15'),
(4, 'Dhananjay Sawant', 'prakash@gmail.com', '9876543211', 'images/profile/profile_pic1636635919.png', 2, NULL, '$2y$10$fRjsQejQF3Croh4qTCbSwernfSQiWKkIi61Yy2wXVck0pFxbUyVd6', NULL, 1, '2021-11-08 03:21:22', '2021-11-11 07:35:19'),
(5, 'akshay Jadhav', 'akshay@gmail.com', '9876543210', NULL, 2, NULL, '$2y$10$xnDiG.U674p4c7swrHMQNeDv//trv9EDU/MOXfoPkNQ.mnEiEuRqO', NULL, 1, '2021-11-12 00:41:26', '2021-11-12 00:41:26');

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
(8, 4, 'dhananjay Sawant', '9876543210', 'prakash@gmail.com', 1, 'Demo Lain Demo City', NULL, NULL, 'India', 'MAHARASHTRA', 'Kolhapur', 416216, '2021-11-09 01:15:46', '2021-11-09 01:15:46', NULL, NULL, NULL),
(10, 5, 'Akshay Jadhav', '9876543126', 'akshay@gmail.com', 1, 'demo lane demo city demo pincode', NULL, NULL, 'India', 'MAHARASHTRA', 'Pune', 521365, '2021-11-12 01:07:02', '2021-11-12 01:07:02', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_subcription`
--

CREATE TABLE `user_subcription` (
  `id` int(100) NOT NULL,
  `user_id` int(100) DEFAULT NULL,
  `plan_id` int(100) DEFAULT NULL,
  `payment_status` varchar(200) DEFAULT NULL,
  `payment_id` varchar(200) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT 1,
  `plan_start` varchar(250) DEFAULT NULL,
  `plan_end` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `attribute_id` int(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `attribute_id`, `quantity`, `type`, `created_at`, `updated_at`) VALUES
(4, 4, 2, 1, 1, NULL, '2021-11-12 13:08:11', '2021-11-12 13:08:11');

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
-- Indexes for table `user_subcription`
--
ALTER TABLE `user_subcription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
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
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `temp_carts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_subcription`
--
ALTER TABLE `user_subcription`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
