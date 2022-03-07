-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 07, 2022 at 05:29 AM
-- Server version: 10.2.26-MariaDB-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `novo_higitech`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` double(20,17) NOT NULL DEFAULT 0.00000000000000000,
  `longitude` double(20,17) NOT NULL DEFAULT 0.00000000000000000,
  `default` tinyint(1) DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `description`, `address`, `latitude`, `longitude`, `default`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Hotel', '33042 Claudie Garden Apt. 285\nLake Katelynside, GA 85490-1530', 51.16304522000000000, 9.96360546000000000, 0, 7, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(2, 'Home', '217 Corwin Passage Suite 759\nWebertown, AL 06920-6767', 51.48767850000000000, 10.94335358000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(4, 'Work', '95141 Batz View Suite 602\nLake Rosanna, KS 64803-1264', 51.46541702000000000, 10.91425323000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(5, 'Work', '51686 Muller Mews Suite 195\nKutchburgh, IN 87285-0920', 50.82985725000000000, 10.22874078000000000, 0, 3, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(6, 'Office', '66152 O\'Kon Isle\nRobertaport, TN 79024-9553', 51.87177618000000000, 9.35890276000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(7, 'Office', '48371 Upton Unions Apt. 774\nWinifredfurt, VT 78296-1407', 50.34866637000000000, 10.54599345000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(8, 'Work', '76661 Roberts Highway Suite 830\nPort Jerrodfurt, NH 93277-9767', 51.85143630000000000, 10.52008965000000000, 0, 5, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(9, 'Office', '204 Grimes Islands Suite 578\nMayertmouth, HI 54248-1561', 51.80947231000000000, 10.39896543000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(10, 'Office', '96617 Kendrick Wells Suite 914\nNorth Cali, LA 56183-3783', 51.10214263000000000, 11.16014055000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(11, 'Hotel', '822 Weston Overpass\nSouth Fannymouth, IN 59419', 50.72523103000000000, 11.01609261000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(13, 'Hotel', '4036 Predovic Fort\nPort Moises, MN 05309', 50.68499144000000000, 9.62808994000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(14, 'Work', '1629 Alexanne Turnpike\nDarionburgh, NC 57758', 50.30553852000000000, 11.79775184000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(15, 'Hotel', '78538 Goyette Lodge\nNew Christelle, TN 03536', 50.15873504000000000, 11.77068850000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(16, 'Work', '577 Balistreri Plaza Suite 943\nHilpertton, MA 05182-2012', 50.67183427000000000, 10.84947538000000000, 0, 7, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(17, 'Workshop', '5120 Keara Alley Suite 497\nEast Myrtisfort, IL 70867', 51.39583230000000000, 9.90648386000000000, 0, 6, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(18, 'Workshop', '752 Torp Spur\nEast Sheatown, KS 79140-8217', 50.74519740000000000, 10.97081901000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(19, 'Hotel', '8118 Predovic Avenue Apt. 727\nDibbertbury, NV 35274', 51.97361815000000000, 9.26725796000000000, 0, 8, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(20, 'Work', '96005 Corkery Streets Suite 486\nNew Daniellafurt, VA 43180-5346', 51.71448811000000000, 11.52990152000000000, 0, 1, '2021-06-19 22:27:19', '2021-06-19 22:27:19'),
(21, NULL, 'Unnamed Road, Sari, Rajasthan 333027, India', 28.16119544917500000, 75.60797518096900000, NULL, 20, '2021-06-28 08:35:20', '2021-06-28 08:35:20'),
(22, NULL, '1911 Marasi Dr - Business Bay - Dubai - United Arab Emirates', 25.18000000000000000, 55.26000000000000000, 0, 11, '2021-06-30 06:42:26', '2021-06-30 06:42:26'),
(23, NULL, 'Financial Center Street, Along Sheikh Zayed Road, Next to Burj Khalifa - Downtown Dubai - Dubai - United Arab Emirates', 25.20000000000000000, 55.28000000000000000, 0, 22, '2021-06-30 07:32:21', '2021-06-30 07:39:09'),
(24, NULL, '22 4th St - Al QuozAl Quoz 1 - Dubai - United Arab Emirates', 25.17571400000000000, 55.24838210000000000, NULL, 23, '2021-07-06 04:40:21', '2021-07-06 04:40:21'),
(25, NULL, '246 Sheikh Zayed Rd - Business Bay - Dubai - United Arab Emirates', 25.18832920000000000, 55.25844070000000000, 0, 39, '2021-07-06 04:49:12', '2021-09-22 10:36:20'),
(27, NULL, 'H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India', 28.61000000000000000, 77.38000000000000000, 0, 34, '2021-08-13 03:34:58', '2021-08-17 03:46:02'),
(28, NULL, '870 Market St #1277, San Francisco, CA 94102, USA', 37.78582140000000000, -122.40640150000000000, 0, 27, '2021-08-18 06:07:31', '2021-08-18 06:12:09'),
(29, NULL, 'Gali Number 2, Bhagwan Colony, Aggarwal Colony, Fatehabad, Haryana 125050, India', 29.51000000000000000, 75.44000000000000000, 0, 34, '2021-08-23 10:11:02', '2021-08-23 10:11:02'),
(30, 'my home', '606 Hamdan Bin Mohammed St - Zone 1E3-02 - Abu Dhabi - United Arab Emirates', 24.49000000000000000, 54.36000000000000000, 0, 42, '2021-09-17 07:11:54', '2021-09-17 07:11:54'),
(31, NULL, '409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates', 24.49000000000000000, 54.36000000000000000, 0, 42, '2021-09-18 02:42:40', '2021-09-22 08:51:33'),
(32, NULL, '# 3707, The Citadel Tower - مراسي درايف - الخليج التجاري - دبي - United Arab Emirates', 25.18000000000000000, 55.26000000000000000, 0, 46, '2021-09-21 10:13:09', '2021-09-22 04:45:14'),
(33, 'al khail gate', '19113 Marasi Dr - Business Bay - Dubai - United Arab Emirates', 25.18458262963600000, 55.26024428052500000, NULL, 38, '2021-09-21 10:21:39', '2021-09-21 10:21:39'),
(34, NULL, '212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates', 24.49000000000000000, 54.36000000000000000, 0, 42, '2021-09-27 14:04:37', '2021-09-27 14:21:30'),
(35, 'citadel', '57M6+M9 Dubai - United Arab Emirates', 25.18000000000000000, 55.26000000000000000, 0, 38, '2021-09-29 10:40:08', '2021-11-04 04:57:31'),
(36, NULL, '3 شارع ٢٦ - Al Quoz - Al Quoz Industrial Area 2 - Dubai - United Arab Emirates', 25.14000000000000000, 55.26000000000000000, 0, 11, '2021-09-30 09:04:40', '2021-09-30 09:04:40'),
(37, 'Home test', '1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA', 37.42000000000000000, -122.08000000000000000, 0, 42, '2021-10-11 01:28:52', '2021-11-16 02:12:30'),
(38, NULL, '1776 Old Middlefield Way, Mountain View, CA 94043, USA', 37.42000000000000000, -122.09000000000000000, 0, 42, '2021-10-29 23:59:50', '2021-10-31 00:24:30'),
(39, NULL, '6 شارع بِلَيقْعَة - Zone 1 - E6 - Abu Dhabi - United Arab Emirates', 24.49000000000000000, 54.36000000000000000, 0, 42, '2021-11-09 15:29:15', '2021-11-09 15:29:15'),
(40, NULL, 'Dubai - Al Barsha - Al Barsha South - Dubai - United Arab Emirates', 25.07000000000000000, 55.25000000000000000, 0, 55, '2021-11-11 03:37:11', '2021-11-12 16:31:21'),
(41, NULL, 'Dubai - Barsha Heights - Dubai - United Arab Emirates', 25.10111750000000000, 55.17831940000000000, NULL, 59, '2021-11-28 11:20:14', '2021-11-28 11:20:16'),
(42, 'Home', 'Al Zahiyah - Abu Dhabi - United Arab Emirates', 24.50000000000000000, 54.38000000000000000, 0, 42, '2021-12-11 00:05:54', '2021-12-11 00:05:54'),
(43, 'Home', 'F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates', 24.49000000000000000, 54.36000000000000000, 0, 42, '2022-01-21 12:48:40', '2022-01-22 00:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `app_settings`
--

CREATE TABLE `app_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_settings`
--

INSERT INTO `app_settings` (`id`, `key`, `value`) VALUES
(7, 'date_format', 'l jS F Y (H:i:s)'),
(8, 'language', 'en'),
(17, 'is_human_date_format', '1'),
(18, 'app_name', 'Novo'),
(19, 'app_short_description', 'Manage Mobile Application'),
(20, 'mail_driver', 'smtp'),
(21, 'mail_host', 'smtp.hostinger.com'),
(22, 'mail_port', '587'),
(23, 'mail_username', 'test@demo.com'),
(24, 'mail_password', '-'),
(25, 'mail_encryption', 'ssl'),
(26, 'mail_from_address', 'test@demo.com'),
(27, 'mail_from_name', 'Smarter Vision'),
(30, 'timezone', 'Asia/Tbilisi'),
(32, 'theme_contrast', 'light'),
(33, 'theme_color', 'primary'),
(34, 'app_logo', '3cd5a4da-d79d-419d-8ce1-3f040d5b01d8'),
(35, 'nav_color', 'navbar-dark navbar-navy'),
(38, 'logo_bg_color', 'text-light  navbar-navy'),
(66, 'default_role', 'admin'),
(68, 'facebook_app_id', '518416208939727'),
(69, 'facebook_app_secret', '93649810f78fa9ca0d48972fee2a75cd'),
(71, 'twitter_app_id', 'twitter'),
(72, 'twitter_app_secret', 'twitter 1'),
(74, 'google_app_id', '527129559488-roolg8aq110p8r1q952fqa9tm06gbloe.apps.googleusercontent.com'),
(75, 'google_app_secret', 'FpIi8SLgc69ZWodk-xHaOrxn'),
(77, 'enable_google', '0'),
(78, 'enable_facebook', '0'),
(93, 'enable_stripe', '1'),
(94, 'stripe_key', 'pk_live_51IxD08ARRkOUEdcXo5fTtBPjKPnJyLgEQyWFlgMMPzBWuUiBAiQA75ome0CXTQ5vpwAR7Hev2OYVlskqy6WC8vED00O9RMZP03'),
(95, 'stripe_secret', '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'),
(101, 'custom_field_models.0', 'App\\Models\\User'),
(104, 'default_tax', '5'),
(107, 'default_currency', 'AED'),
(108, 'fixed_header', '1'),
(109, 'fixed_footer', '0'),
(110, 'fcm_key', 'AAAAJ9zBlvA:APA91bEk5E7r3cUfdNRn1YfMxluELm2bjAezR1_egS36neS_sOzyVwqnA4egqKzeGvp7idG4mPJ4_lWWLnThe-R2RUnpX0IJJUOBv86jOvGS7AaGgqNPvNgXOoJL750SvPK3Ga4uA3a0'),
(111, 'enable_notifications', '1'),
(112, 'paypal_username', 'sb-z3gdq482047_api1.business.example.com'),
(113, 'paypal_password', '-'),
(114, 'paypal_secret', '-'),
(115, 'enable_paypal', '1'),
(116, 'main_color', '#F4841F'),
(117, 'main_dark_color', '#F4841F'),
(118, 'second_color', '#08143A'),
(119, 'second_dark_color', '#CCCCDD'),
(120, 'accent_color', '#8C9DA8'),
(121, 'accent_dark_color', '#9999AA'),
(122, 'scaffold_dark_color', '#2C2C2C'),
(123, 'scaffold_color', '#FAFAFA'),
(124, 'google_maps_key', 'AIzaSyDW1YMcxFiSIVBsylopoI5AevruvnGs7sc'),
(125, 'mobile_language', 'en'),
(126, 'app_version', '1.0.0'),
(127, 'enable_version', '1'),
(128, 'default_currency_id', '8'),
(129, 'default_currency_code', 'AED'),
(130, 'default_currency_decimal_digits', '2'),
(131, 'default_currency_rounding', '0'),
(132, 'currency_right', '1'),
(133, 'distance_unit', 'km'),
(134, 'default_theme', 'light'),
(135, 'enable_twitter', '0'),
(136, 'firebase_api_key', 'AIzaSyBErO3HuZTsPjxrvm4-j_TQEH9JG63Ge9w'),
(137, 'firebase_auth_domain', 'higitech.firebaseapp.com'),
(138, 'firebase_database_url', '0'),
(139, 'firebase_project_id', 'perfect-1morecode'),
(140, 'firebase_storage_bucket', 'higitech.appspot.com'),
(141, 'firebase_messaging_sender_id', '171207399152'),
(142, 'firebase_app_id', '1:171207399152:android:e94880dbc75358fc44d435'),
(143, 'firebase_measurement_id', '0'),
(144, 'enable_cash', '1');

-- --------------------------------------------------------

--
-- Table structure for table `availability_hours`
--

CREATE TABLE `availability_hours` (
  `id` int(10) UNSIGNED NOT NULL,
  `day` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'monday',
  `start_at` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_at` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_provider` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` smallint(6) DEFAULT 1,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `booking_status_id` int(10) UNSIGNED DEFAULT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` int(10) UNSIGNED DEFAULT NULL,
  `coupon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taxes` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `booking_at` datetime DEFAULT NULL,
  `start_at` datetime DEFAULT NULL,
  `ends_at` datetime DEFAULT NULL,
  `hint` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cancel` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `e_provider`, `e_service`, `options`, `quantity`, `user_id`, `booking_status_id`, `address`, `payment_id`, `coupon`, `taxes`, `booking_at`, `start_at`, `ends_at`, `hint`, `cancel`, `created_at`, `updated_at`) VALUES
(1, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.6099999999999994315658113919198513031005859375,\"longitude\":77.3799999999999954525264911353588104248046875}', NULL, NULL, '[]', '2021-08-13 13:04:41', '2021-08-13 13:04:41', '2021-08-13 16:04:41', NULL, 0, '2021-08-13 03:34:58', '2021-08-13 03:34:58'),
(2, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.609157700000000801310306997038424015045166015625,\"longitude\":77.376606699999996408223523758351802825927734375}', 57, NULL, '[]', '2021-08-17 12:02:38', '2021-08-17 12:02:38', '2021-08-17 15:02:38', NULL, 0, '2021-08-17 02:32:55', '2021-10-03 05:09:29'),
(3, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.609157700000000801310306997038424015045166015625,\"longitude\":77.376606699999996408223523758351802825927734375}', NULL, NULL, '[]', '2021-08-17 13:04:23', '2021-08-17 13:04:23', '2021-08-17 16:04:23', NULL, 0, '2021-08-17 03:34:29', '2021-08-17 03:34:29'),
(4, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":109,\"name\":\"2 Cleaner 3 Hours\",\"price\":300}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.6099999999999994315658113919198513031005859375,\"longitude\":77.3799999999999954525264911353588104248046875}', NULL, NULL, '[]', '2021-08-17 13:15:48', '2021-08-17 13:15:48', '2021-08-17 16:15:48', NULL, 1, '2021-08-17 03:46:03', '2021-08-19 09:38:15'),
(5, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 27, 1, '{\"id\":28,\"description\":null,\"address\":\"870 Market St #1277, San Francisco, CA 94102, USA\",\"latitude\":37.785821400000003222885425202548503875732421875,\"longitude\":-122.4064015000000011923475540243089199066162109375}', NULL, NULL, '[]', '2021-08-18 15:37:22', '2021-08-18 15:37:22', '2021-08-18 18:37:22', NULL, 0, '2021-08-18 06:07:31', '2021-08-18 06:07:31'),
(6, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":50,\"name\":\"Pool Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":150,\"name\":\"600 Sqft Soft Cleaning\",\"price\":169}]', 1, 27, 1, '{\"id\":28,\"description\":null,\"address\":\"870 Market St #1277, San Francisco, CA 94102, USA\",\"latitude\":37.785821400000003222885425202548503875732421875,\"longitude\":-122.4064015000000011923475540243089199066162109375}', NULL, NULL, '[]', '2021-08-18 15:40:53', '2021-08-18 15:40:53', '2021-08-18 18:40:53', NULL, 0, '2021-08-18 06:12:09', '2021-08-18 06:12:09'),
(7, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":50,\"name\":\"Pool Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":150,\"name\":\"600 Sqft Soft Cleaning\",\"price\":169}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.6099999999999994315658113919198513031005859375,\"longitude\":77.3799999999999954525264911353588104248046875}', NULL, NULL, '[]', '2021-08-18 17:08:53', '2021-08-18 17:08:53', '2021-08-18 20:08:53', NULL, 1, '2021-08-18 07:43:35', '2021-08-19 09:38:12'),
(8, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 34, 1, '{\"id\":27,\"description\":null,\"address\":\"H-518, Block A, Sector 66, Noida, Uttar Pradesh 201301, India\",\"latitude\":28.6099999999999994315658113919198513031005859375,\"longitude\":77.3799999999999954525264911353588104248046875}', NULL, NULL, '[]', '2021-08-20 12:27:18', '2021-08-20 12:27:18', '2021-08-20 15:27:18', NULL, 0, '2021-08-20 02:57:25', '2021-08-20 02:57:25'),
(9, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 34, 1, '{\"id\":29,\"description\":null,\"address\":\"Gali Number 2, Bhagwan Colony, Aggarwal Colony, Fatehabad, Haryana 125050, India\",\"latitude\":29.510000000000001563194018672220408916473388671875,\"longitude\":75.43999999999999772626324556767940521240234375}', NULL, NULL, '[]', '2021-08-23 19:40:56', '2021-08-23 19:40:56', '2021-08-23 22:40:56', NULL, 0, '2021-08-23 10:11:02', '2021-08-23 10:11:02'),
(10, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":30,\"description\":\"my home\",\"address\":\"606 Hamdan Bin Mohammed St - Zone 1E3-02 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[]', '2021-09-17 15:11:43', '2021-09-24 10:00:00', '2021-09-24 10:00:00', NULL, 1, '2021-09-17 07:11:54', '2021-09-17 07:12:33'),
(11, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.493590299999990378410075209103524684906005859375,\"longitude\":54.36328400000000016234480426646769046783447265625}', NULL, NULL, '[]', '2021-09-18 10:37:14', '2021-09-20 10:37:00', '2021-09-20 10:37:00', NULL, 0, '2021-09-18 02:42:40', '2021-09-18 02:42:40'),
(12, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140}]', 1, 11, 1, '{\"id\":32,\"description\":null,\"address\":\"# 3707, The Citadel Tower - \\u0645\\u0631\\u0627\\u0633\\u064a \\u062f\\u0631\\u0627\\u064a\\u0641 - \\u0627\\u0644\\u062e\\u0644\\u064a\\u062c \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a - \\u062f\\u0628\\u064a - United Arab Emirates\",\"latitude\":25.18399959999999992987795849330723285675048828125,\"longitude\":55.26079750000000245790943154133856296539306640625}', NULL, NULL, '[]', '2021-09-21 18:13:00', '2021-09-22 18:13:00', '2021-09-22 18:13:00', NULL, 0, '2021-09-21 10:13:09', '2021-09-21 10:13:09'),
(13, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 38, 1, '{\"id\":33,\"description\":\"al khail gate\",\"address\":\"19113 Marasi Dr - Business Bay - Dubai - United Arab Emirates\",\"latitude\":25.18458262963606131279448163695633411407470703125,\"longitude\":55.26024428052492254437311203218996524810791015625}', NULL, NULL, '[]', '2021-09-21 18:21:31', '2021-09-21 10:00:00', '2021-09-21 10:00:00', NULL, 0, '2021-09-21 10:21:39', '2021-09-21 10:21:39'),
(14, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 38, 1, '{\"id\":33,\"description\":\"al khail gate\",\"address\":\"19113 Marasi Dr - Business Bay - Dubai - United Arab Emirates\",\"latitude\":25.18458262963606131279448163695633411407470703125,\"longitude\":55.26024428052492254437311203218996524810791015625}', NULL, NULL, '[]', '2021-09-21 18:21:31', '2021-09-21 10:00:00', '2021-09-21 10:00:00', NULL, 0, '2021-09-21 10:21:39', '2021-09-21 10:21:39'),
(15, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 46, 1, '{\"id\":32,\"description\":null,\"address\":\"# 3707, The Citadel Tower - \\u0645\\u0631\\u0627\\u0633\\u064a \\u062f\\u0631\\u0627\\u064a\\u0641 - \\u0627\\u0644\\u062e\\u0644\\u064a\\u062c \\u0627\\u0644\\u062a\\u062c\\u0627\\u0631\\u064a - \\u062f\\u0628\\u064a - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[]', '2021-09-22 12:45:07', '2021-09-22 14:00:00', '2021-09-22 14:00:00', NULL, 0, '2021-09-22 04:45:14', '2021-09-22 04:45:14'),
(16, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', NULL, 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[]', '2021-09-22 16:39:32', '2021-09-22 10:00:00', '2021-09-22 11:00:00', NULL, 0, '2021-09-22 08:51:33', '2021-09-22 08:51:33'),
(17, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-22 18:18:46', '2021-09-22 10:00:00', '2021-09-22 11:00:00', NULL, 0, '2021-09-22 10:19:39', '2021-09-22 10:19:39'),
(18, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 39, 1, '{\"id\":25,\"description\":null,\"address\":\"246 Sheikh Zayed Rd - Business Bay - Dubai - United Arab Emirates\",\"latitude\":25.188329199999998309067450463771820068359375,\"longitude\":55.25844069999998708908606204204261302947998046875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-22 18:35:12', '2021-09-22 18:35:12', '2021-09-22 21:35:12', NULL, 0, '2021-09-22 10:36:20', '2021-09-22 10:36:20'),
(19, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 16:44:40', '2021-09-27 16:44:40', '2021-09-27 19:44:40', NULL, 0, '2021-09-27 08:58:01', '2021-09-27 08:58:01'),
(20, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 16:44:40', '2021-09-27 16:44:40', '2021-09-27 19:44:40', NULL, 0, '2021-09-27 08:59:34', '2021-09-27 08:59:34'),
(21, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 16:44:40', '2021-09-27 16:44:40', '2021-09-27 19:44:40', NULL, 0, '2021-09-27 08:59:34', '2021-09-27 08:59:34'),
(22, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 21:49:10', '2021-09-27 21:49:10', '2021-09-28 00:49:10', NULL, 0, '2021-09-27 13:49:32', '2021-09-27 13:49:32'),
(23, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 21:49:10', '2021-09-27 21:49:10', '2021-09-28 00:49:10', NULL, 0, '2021-09-27 13:51:09', '2021-09-27 13:51:09'),
(24, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":31,\"description\":null,\"address\":\"409 3rd St - Zone 1 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 21:49:10', '2021-09-27 21:49:10', '2021-09-28 00:49:10', NULL, 0, '2021-09-27 13:52:41', '2021-09-27 13:52:41'),
(25, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.490583099999998495377440121956169605255126953125,\"longitude\":54.36229320000000342361090588383376598358154296875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 22:03:11', '2021-09-27 22:03:11', '2021-09-28 01:03:11', NULL, 0, '2021-09-27 14:04:37', '2021-09-27 14:04:37'),
(26, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":109,\"name\":\"2 Cleaner 3 Hours\",\"price\":300}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.490583099999998495377440121956169605255126953125,\"longitude\":54.36229320000000342361090588383376598358154296875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 22:05:55', '2021-09-27 22:05:55', '2021-09-28 01:05:55', NULL, 0, '2021-09-27 14:06:40', '2021-09-27 14:06:40'),
(27, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 22:20:41', '2021-09-27 10:00:00', '2021-09-28 11:00:00', NULL, 0, '2021-09-27 14:21:30', '2021-09-27 14:21:30'),
(28, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 22:22:35', '2021-09-27 10:00:00', '2021-09-28 11:00:00', NULL, 0, '2021-09-27 14:23:14', '2021-09-27 14:23:14'),
(29, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":111,\"name\":\"2 Cleaner 6 Hours\",\"price\":420}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-27 23:53:35', '2021-09-27 14:00:00', '2021-09-28 15:00:00', NULL, 0, '2021-09-27 15:55:47', '2021-09-27 15:55:47'),
(30, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-28 00:04:40', '2021-09-28 09:00:00', '2021-09-28 10:00:00', NULL, 0, '2021-09-27 16:05:19', '2021-09-27 16:05:19'),
(31, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":106,\"name\":\"1 Cleaner 6 Hours\",\"price\":210}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-28 00:09:02', '2021-09-28 00:09:02', '2021-09-28 03:09:02', NULL, 0, '2021-09-27 16:09:43', '2021-09-27 16:09:43'),
(32, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":104,\"name\":\"1 Cleaner 3 Hours\",\"price\":135}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-28 15:03:35', '2021-09-28 10:00:00', '2021-09-28 11:00:00', NULL, 0, '2021-09-28 07:04:56', '2021-09-28 07:04:56'),
(33, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-29 12:27:55', '2021-09-29 15:00:00', '2021-09-29 16:00:00', NULL, 0, '2021-09-29 04:28:54', '2021-09-29 04:28:54'),
(34, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":44,\"name\":\"Apartment Deep Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":127,\"name\":\"Penthouse\",\"price\":1495}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.184210300000000160025592776946723461151123046875,\"longitude\":55.2609007999999874982677283696830272674560546875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-29 18:39:44', '2021-09-30 10:00:00', '2021-09-30 10:00:00', NULL, 0, '2021-09-29 10:40:08', '2021-09-29 10:40:08'),
(35, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.18421790000000015652403817512094974517822265625,\"longitude\":55.26091719999998730372681166045367717742919921875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-29 18:44:01', '2021-09-29 14:00:00', '2021-09-29 14:00:00', NULL, 0, '2021-09-29 10:44:08', '2021-09-29 10:44:08'),
(36, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Cleaning with Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140}]', 1, 11, 1, '{\"id\":36,\"description\":null,\"address\":\"3 \\u0634\\u0627\\u0631\\u0639 \\u0662\\u0666 - Al Quoz - Al Quoz Industrial Area 2 - Dubai - United Arab Emirates\",\"latitude\":25.1400000000000005684341886080801486968994140625,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-09-30 17:04:30', '2021-09-30 09:00:00', '2021-09-30 10:00:00', NULL, 0, '2021-09-30 09:04:40', '2021-09-30 09:04:40'),
(37, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":37,\"description\":null,\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-10 17:14:14', '2021-10-10 10:00:00', '2021-10-10 11:00:00', NULL, 0, '2021-10-11 01:28:52', '2021-10-11 01:28:52'),
(38, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560}]', 1, 42, 1, '{\"id\":37,\"description\":null,\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-12 19:08:05', '2021-10-12 10:00:00', '2021-10-12 11:00:00', NULL, 0, '2021-10-13 00:21:12', '2021-10-13 00:21:12'),
(39, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560}]', 1, 42, 1, '{\"id\":37,\"description\":null,\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-12 19:09:37', '2021-10-12 09:00:00', '2021-10-12 10:00:00', NULL, 0, '2021-10-13 00:26:54', '2021-10-13 00:26:54'),
(40, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":37,\"description\":null,\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-14 09:51:45', '2021-10-16 09:51:00', '2021-10-16 09:51:00', NULL, 0, '2021-10-14 01:52:46', '2021-10-14 01:52:46'),
(41, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.41523500000000268528310698457062244415283203125,\"longitude\":-122.0856553999999931647835182957351207733154296875}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-30 07:35:43', '2021-10-30 07:35:00', '2021-10-30 07:35:00', NULL, 0, '2021-10-29 23:59:51', '2021-10-29 23:59:51'),
(42, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:18:33', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:24:30', '2021-10-31 00:24:30'),
(43, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', NULL, 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:29:12', '2021-10-31 09:00:00', '2021-10-31 10:00:00', NULL, 0, '2021-10-31 00:29:24', '2021-10-31 00:29:24'),
(44, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:33:03', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:33:07', '2021-10-31 00:33:07'),
(45, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:34:19', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:34:22', '2021-10-31 00:34:22'),
(46, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:35:01', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:35:04', '2021-10-31 00:35:04'),
(47, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:35:26', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:35:31', '2021-10-31 00:35:31'),
(48, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-10-31 08:35:59', '2021-10-31 09:00:00', '2021-10-31 11:00:00', NULL, 0, '2021-10-31 00:36:03', '2021-10-31 00:36:03'),
(49, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 11, 1, '{\"id\":36,\"description\":null,\"address\":\"3 \\u0634\\u0627\\u0631\\u0639 \\u0662\\u0666 - Al Quoz - Al Quoz Industrial Area 2 - Dubai - United Arab Emirates\",\"latitude\":25.1400000000000005684341886080801486968994140625,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-01 15:43:43', '2021-11-01 09:00:00', '2021-11-01 11:00:00', NULL, 0, '2021-11-01 07:43:55', '2021-11-01 07:43:55'),
(50, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 07:53:57', '2021-11-04 14:00:00', '2021-11-04 15:00:00', NULL, 0, '2021-11-03 23:54:30', '2021-11-03 23:54:30'),
(51, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 12:57:19', '2021-11-24 10:00:00', '2021-11-24 12:00:00', NULL, 0, '2021-11-04 04:57:31', '2021-11-04 04:57:31'),
(52, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 12:58:30', '2021-11-04 14:00:00', '2021-11-04 15:00:00', NULL, 0, '2021-11-04 04:58:36', '2021-11-04 04:58:36'),
(53, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 19:17:08', '2021-11-25 19:17:00', '2021-11-25 19:17:00', NULL, 0, '2021-11-05 03:33:14', '2021-11-05 03:33:14'),
(54, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":108,\"name\":\"2 Cleaner 2 Hours\",\"price\":240}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 21:00:46', '2021-11-30 21:00:00', '2021-11-30 21:00:00', NULL, 0, '2021-11-05 08:04:35', '2021-11-05 08:04:35'),
(55, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":69,\"name\":\"Deep Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":227,\"name\":\"Studio\",\"price\":199}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 21:02:43', '2021-11-04 10:00:00', '2021-11-05 11:00:00', NULL, 0, '2021-11-05 08:13:20', '2021-11-05 08:13:20'),
(56, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 21:11:09', '2021-11-26 14:00:00', '2021-11-26 15:00:00', NULL, 0, '2021-11-05 08:14:51', '2021-11-05 08:14:51'),
(57, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 21:11:52', '2021-11-29 21:11:00', '2021-11-29 21:11:00', NULL, 1, '2021-11-05 08:15:34', '2021-11-09 13:58:25'),
(58, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":55,\"name\":\"AC Deep Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":157,\"name\":\"1 Unit\",\"price\":279}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-04 21:26:28', '2021-12-08 10:00:00', '2021-12-08 11:00:00', NULL, 1, '2021-11-05 08:31:50', '2021-11-06 00:39:31'),
(59, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-06 11:44:54', '2021-11-24 14:00:00', '2021-11-24 16:00:00', NULL, 0, '2021-11-06 03:45:14', '2021-11-06 03:45:14'),
(60, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-07 10:18:26', '2021-11-17 14:00:00', '2021-11-17 15:00:00', NULL, 0, '2021-11-07 02:18:40', '2021-11-07 02:18:40'),
(61, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":121,\"name\":\"2 Cleaner 6 Hours\",\"price\":300}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:25:58', '2021-11-17 15:00:00', '2021-11-17 21:00:00', NULL, 1, '2021-11-09 15:29:15', '2021-11-09 15:32:17'),
(62, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:35:09', '2021-11-09 09:00:00', '2021-11-10 11:00:00', NULL, 0, '2021-11-09 15:35:17', '2021-11-09 15:35:17'),
(63, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:38:25', '2021-11-10 23:38:00', '2021-11-10 23:38:00', NULL, 0, '2021-11-09 15:43:19', '2021-11-09 15:43:19'),
(64, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":69,\"name\":\"Deep Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":227,\"name\":\"Studio\",\"price\":199}]', 2, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:47:29', '2021-11-11 23:47:00', '2021-11-11 23:47:00', NULL, 0, '2021-11-09 15:48:14', '2021-11-09 15:48:14'),
(65, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":108,\"name\":\"2 Cleaner 2 Hours\",\"price\":240}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:49:24', '2021-11-16 23:49:00', '2021-11-16 23:49:00', NULL, 0, '2021-11-09 15:49:56', '2021-11-09 15:49:56');
INSERT INTO `bookings` (`id`, `e_provider`, `e_service`, `options`, `quantity`, `user_id`, `booking_status_id`, `address`, `payment_id`, `coupon`, `taxes`, `booking_at`, `start_at`, `ends_at`, `hint`, `cancel`, `created_at`, `updated_at`) VALUES
(66, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":52,\"name\":\"AC Repair\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":154,\"name\":\"1 Unit\",\"price\":349}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:52:27', '2021-11-16 23:52:00', '2021-11-16 23:52:00', NULL, 0, '2021-11-09 15:53:11', '2021-11-09 15:53:11'),
(67, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":61,\"name\":\"Plumbing Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":162,\"name\":\"1 Hour Plumbing Handyman\",\"price\":95}]', 1, 42, 1, '{\"id\":38,\"description\":null,\"address\":\"1776 Old Middlefield Way, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.090000000000003410605131648480892181396484375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-09 23:54:16', '2021-11-24 23:54:00', '2021-11-24 23:54:00', NULL, 0, '2021-11-09 15:54:41', '2021-11-09 15:54:41'),
(68, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-10 00:37:55', '2021-11-10 10:00:00', '2021-11-10 11:00:00', NULL, 0, '2021-11-09 16:38:07', '2021-11-09 16:38:07'),
(69, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-10 00:39:21', '2021-11-10 10:00:00', '2021-11-10 11:00:00', NULL, 0, '2021-11-09 16:39:14', '2021-11-09 16:39:14'),
(70, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-10 00:40:18', '2021-11-10 15:00:00', '2021-11-10 16:00:00', NULL, 0, '2021-11-09 16:40:10', '2021-11-09 16:40:10'),
(71, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-10 00:41:26', '2021-11-10 09:00:00', '2021-11-10 10:00:00', NULL, 0, '2021-11-09 16:41:21', '2021-11-09 16:41:21'),
(72, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100}]', 1, 42, 1, '{\"id\":34,\"description\":null,\"address\":\"212 Sultan Bin Zayed The First St - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-10 00:43:41', '2021-11-10 15:00:00', '2021-11-10 17:00:00', NULL, 0, '2021-11-09 16:47:13', '2021-11-09 16:47:13'),
(73, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140}]', 1, 55, 1, '{\"id\":40,\"description\":null,\"address\":\"Dubai - Al Barsha - Al Barsha South - Dubai - United Arab Emirates\",\"latitude\":25.070378000000008711367627256549894809722900390625,\"longitude\":55.24524819999999891706465859897434711456298828125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-11 11:36:50', '2021-11-13 10:00:00', '2021-11-13 14:00:00', NULL, 1, '2021-11-11 03:37:11', '2021-11-12 16:30:48'),
(74, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140}]', 1, 55, 1, '{\"id\":40,\"description\":null,\"address\":\"Dubai - Al Barsha - Al Barsha South - Dubai - United Arab Emirates\",\"latitude\":25.07000000000000028421709430404007434844970703125,\"longitude\":55.25}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-13 00:31:09', '2021-11-13 10:00:00', '2021-11-13 14:00:00', NULL, 1, '2021-11-12 16:31:21', '2021-11-12 16:39:47'),
(75, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13},{\"id\":204,\"name\":\"Sari\",\"price\":27}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-16 10:11:23', '2021-11-16 14:00:00', '2021-11-16 15:00:00', NULL, 0, '2021-11-16 02:12:30', '2021-11-16 02:12:30'),
(87, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-23 10:11:23', '2021-11-23 14:00:00', '2021-11-23 15:00:00', NULL, 0, '2021-11-22 10:46:23', '2021-11-22 10:46:23'),
(88, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140,\"quantity_unit\":null}]', 1, 59, 1, '{\"id\":41,\"description\":null,\"address\":\"Dubai - Barsha Heights - Dubai - United Arab Emirates\",\"latitude\":25.101117499999990201331456773914396762847900390625,\"longitude\":55.17831939999999946167008602060377597808837890625}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-28 19:19:58', '2021-11-28 14:00:00', '2021-11-28 18:00:00', NULL, 0, '2021-11-28 11:20:14', '2021-11-28 11:20:14'),
(89, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":105,\"name\":\"1 Cleaner 4 Hours\",\"price\":140,\"quantity_unit\":null}]', 1, 59, 1, '{\"id\":41,\"description\":null,\"address\":\"Dubai - Barsha Heights - Dubai - United Arab Emirates\",\"latitude\":25.101117499999990201331456773914396762847900390625,\"longitude\":55.17831939999999946167008602060377597808837890625}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-28 19:19:58', '2021-11-28 14:00:00', '2021-11-28 18:00:00', NULL, 0, '2021-11-28 11:20:18', '2021-11-28 11:20:18'),
(90, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-23 10:11:23', '2021-11-23 14:00:00', '2021-11-23 15:00:00', NULL, 0, '2021-12-07 22:28:14', '2021-12-07 22:28:14'),
(91, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-23 10:11:23', '2021-11-23 14:00:00', '2021-11-23 15:00:00', NULL, 0, '2021-12-07 22:31:14', '2021-12-07 22:31:14'),
(92, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-11-23 10:11:23', '2021-11-23 14:00:00', '2021-11-23 15:00:00', NULL, 0, '2021-12-07 22:34:51', '2021-12-07 22:34:51'),
(93, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 07:55:48', '2021-12-11 14:00:00', '2021-12-11 15:00:00', NULL, 0, '2021-12-10 22:26:11', '2021-12-10 22:26:11'),
(94, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:00:23', '2021-12-11 14:00:00', '2021-12-11 15:00:00', NULL, 0, '2021-12-10 22:30:52', '2021-12-10 22:30:52'),
(95, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":182,\"name\":\"Trouser\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:01:57', '2021-12-11 14:00:00', '2021-12-11 15:00:00', NULL, 0, '2021-12-10 22:33:45', '2021-12-10 22:33:45'),
(96, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":180,\"name\":\"T-Shirt\",\"price\":10,\"quantity_unit\":null}]', 4, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:04:42', '2021-12-11 14:00:00', '2021-12-11 15:00:00', NULL, 0, '2021-12-10 22:35:39', '2021-12-10 22:35:39'),
(97, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:08:10', '2021-12-11 15:00:00', '2021-12-11 16:00:00', NULL, 0, '2021-12-10 22:38:23', '2021-12-10 22:38:23'),
(98, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:42:10', '2021-12-11 15:00:00', '2021-12-11 16:00:00', NULL, 0, '2021-12-10 23:13:39', '2021-12-10 23:13:39'),
(99, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":180,\"name\":\"T-Shirt\",\"price\":10,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:45:33', '2021-12-11 15:00:00', '2021-12-11 16:00:00', NULL, 0, '2021-12-10 23:16:14', '2021-12-10 23:16:14'),
(100, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":182,\"name\":\"Trouser\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:49:13', '2021-12-11 15:00:00', '2021-12-11 16:00:00', NULL, 0, '2021-12-10 23:20:04', '2021-12-10 23:20:04'),
(101, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null},{\"id\":204,\"name\":\"Sari\",\"price\":27,\"quantity_unit\":null}]', 4, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:55:18', '2021-12-12 08:55:00', '2021-12-12 08:55:00', NULL, 0, '2021-12-10 23:25:39', '2021-12-10 23:25:39'),
(102, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":72,\"name\":\"Room Linen\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":216,\"name\":\"Bed Sheet\",\"price\":14,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 08:58:43', '2021-12-12 08:58:00', '2021-12-12 08:58:00', NULL, 0, '2021-12-10 23:28:42', '2021-12-10 23:28:42'),
(103, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:05:15', '2021-12-19 09:05:00', '2021-12-19 09:05:00', NULL, 0, '2021-12-10 23:35:20', '2021-12-10 23:35:20'),
(104, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:11:56', '2021-12-19 09:11:00', '2021-12-19 09:11:00', NULL, 0, '2021-12-10 23:42:05', '2021-12-10 23:42:05'),
(105, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":180,\"name\":\"T-Shirt\",\"price\":10,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:14:36', '2021-12-26 09:14:00', '2021-12-26 09:14:00', NULL, 0, '2021-12-10 23:44:43', '2021-12-10 23:44:43'),
(106, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":180,\"name\":\"T-Shirt\",\"price\":10,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:16:50', '2021-12-26 09:16:00', '2021-12-26 09:16:00', NULL, 0, '2021-12-10 23:46:55', '2021-12-10 23:46:55'),
(107, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":184,\"name\":\"Shorts\",\"price\":8,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:18:53', '2021-12-19 09:18:00', '2021-12-19 09:18:00', NULL, 0, '2021-12-10 23:48:55', '2021-12-10 23:48:55'),
(108, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":180,\"name\":\"T-Shirt\",\"price\":10,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:22:49', '2021-12-26 09:22:00', '2021-12-26 09:22:00', NULL, 0, '2021-12-10 23:52:56', '2021-12-10 23:52:56'),
(109, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:24:16', '2021-12-19 09:24:00', '2021-12-19 09:24:00', NULL, 0, '2021-12-10 23:54:22', '2021-12-10 23:54:22'),
(110, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":204,\"name\":\"Sari\",\"price\":27,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":39,\"description\":null,\"address\":\"6 \\u0634\\u0627\\u0631\\u0639 \\u0628\\u0650\\u0644\\u064e\\u064a\\u0642\\u0652\\u0639\\u064e\\u0629 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:25:54', '2021-12-27 09:25:00', '2021-12-27 09:25:00', NULL, 0, '2021-12-10 23:56:02', '2021-12-10 23:56:02'),
(111, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 09:35:48', '2021-12-26 09:35:00', '2021-12-26 09:35:00', NULL, 0, '2021-12-11 00:05:54', '2021-12-11 00:05:54'),
(112, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":204,\"name\":\"Sari\",\"price\":27,\"quantity_unit\":null},{\"id\":206,\"name\":\"Lady Dress\",\"price\":25,\"quantity_unit\":null}]', 4, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-11 10:50:05', '2021-12-26 10:50:00', '2021-12-26 10:50:00', NULL, 0, '2021-12-11 01:20:17', '2021-12-11 01:20:17'),
(113, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', NULL, 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-16 12:10:38', '2021-12-23 12:10:00', '2021-12-23 12:10:00', NULL, 0, '2021-12-16 04:10:44', '2021-12-16 04:10:44'),
(114, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 07:58:45', '2021-12-29 07:58:00', '2021-12-29 07:58:00', NULL, 0, '2021-12-27 23:58:33', '2021-12-27 23:58:33'),
(115, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 07:58:45', '2021-12-29 07:58:00', '2021-12-29 07:58:00', NULL, 0, '2021-12-27 23:58:33', '2021-12-27 23:58:33'),
(116, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":204,\"name\":\"Sari\",\"price\":27,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 07:59:59', '2021-12-30 07:59:00', '2021-12-30 07:59:00', NULL, 0, '2021-12-27 23:59:39', '2021-12-27 23:59:39'),
(117, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":72,\"name\":\"Room Linen\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":216,\"name\":\"Bed Sheet\",\"price\":14,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 08:01:24', '2021-12-28 15:00:00', '2021-12-28 16:00:00', NULL, 0, '2021-12-28 00:08:11', '2021-12-28 00:08:11'),
(118, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 08:09:57', '2021-12-30 14:00:00', '2021-12-30 15:00:00', NULL, 0, '2021-12-28 00:10:30', '2021-12-28 00:10:30'),
(119, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":70,\"name\":\"Gents\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":178,\"name\":\"Shirts\",\"price\":12,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 08:14:56', '2021-12-31 14:00:00', '2021-12-31 15:00:00', NULL, 0, '2021-12-28 00:17:01', '2021-12-28 00:17:01'),
(120, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 08:26:41', '2021-12-29 15:00:00', '2021-12-29 23:00:00', NULL, 0, '2021-12-28 00:29:20', '2021-12-28 00:29:20'),
(121, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 08:26:41', '2021-12-29 15:00:00', '2021-12-29 23:00:00', NULL, 0, '2021-12-28 00:29:20', '2021-12-28 00:29:20'),
(122, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":58,\"name\":\"Leak Fixing\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":160,\"name\":\"1 hour Leak Fixing\",\"price\":95,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 10:00:53', '2021-12-28 15:00:00', '2021-12-28 16:00:00', NULL, 0, '2021-12-28 02:01:40', '2021-12-28 02:01:40'),
(123, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":58,\"name\":\"Leak Fixing\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":160,\"name\":\"1 hour Leak Fixing\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 10:05:43', '2021-12-28 15:00:00', '2021-12-28 16:00:00', NULL, 0, '2021-12-28 02:11:24', '2021-12-28 02:11:24'),
(124, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":71,\"name\":\"Ladies\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":202,\"name\":\"Blouse\",\"price\":13,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 10:12:03', '2021-12-28 15:00:00', '2021-12-28 16:00:00', NULL, 0, '2021-12-28 02:16:04', '2021-12-28 02:16:04'),
(125, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":57,\"name\":\"Clog Removal\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":159,\"name\":\"1 hour Clog Removal Service\",\"price\":95,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-28 10:14:11', '2021-12-28 15:00:00', '2021-12-28 16:00:00', NULL, 0, '2021-12-28 02:17:39', '2021-12-28 02:17:39'),
(126, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":52,\"name\":\"AC Repair\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":154,\"name\":\"1 Unit\",\"price\":349,\"quantity_unit\":null}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2021-12-29 17:24:50', '2021-12-31 14:00:00', '2021-12-31 15:00:00', NULL, 0, '2021-12-29 09:25:02', '2021-12-29 09:25:02'),
(127, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":57,\"name\":\"Clog Removal\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":159,\"name\":\"1 hour Clog Removal Service\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 05:32:50', '2022-01-12 14:00:00', '2022-01-12 16:00:00', NULL, 0, '2022-01-11 21:33:39', '2022-01-11 21:33:39'),
(128, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 05:35:28', '2022-01-12 15:00:00', '2022-01-12 17:00:00', NULL, 0, '2022-01-11 21:36:05', '2022-01-11 21:36:05'),
(129, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":52,\"name\":\"AC Repair\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":154,\"name\":\"1 Unit\",\"price\":349,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:04:44', '2022-01-12 15:00:00', '2022-01-12 16:00:00', NULL, 0, '2022-01-11 22:04:48', '2022-01-11 22:04:48'),
(130, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:33:46', '2022-01-12 14:00:00', '2022-01-12 16:00:00', NULL, 0, '2022-01-11 22:33:48', '2022-01-11 22:33:48'),
(131, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:36:05', '2022-01-12 15:00:00', '2022-01-12 17:00:00', NULL, 0, '2022-01-11 22:36:41', '2022-01-11 22:36:41'),
(132, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":65,\"name\":\"Walls Only (No Retouching)\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":167,\"name\":\"1 Bedroom\",\"price\":699,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:38:59', '2022-01-12 15:00:00', '2022-01-12 16:00:00', NULL, 0, '2022-01-11 22:39:29', '2022-01-11 22:39:29'),
(133, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:40:33', '2022-01-12 15:00:00', '2022-01-12 17:00:00', NULL, 0, '2022-01-11 22:40:51', '2022-01-11 22:40:51'),
(134, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 06:43:54', '2022-01-30 15:00:00', '2022-01-30 16:00:00', NULL, 0, '2022-01-11 22:43:47', '2022-01-11 22:43:47'),
(135, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100,\"quantity_unit\":null}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-12 22:47:17', '2022-01-12 14:00:00', '2022-01-13 16:00:00', NULL, 0, '2022-01-12 14:47:43', '2022-01-12 14:47:43'),
(136, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":58,\"name\":\"Leak Fixing\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":160,\"name\":\"1 hour Leak Fixing\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 06:31:51', '2022-01-28 15:00:00', '2022-01-28 16:00:00', NULL, 0, '2022-01-17 22:31:14', '2022-01-17 22:31:14'),
(137, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 06:43:11', '2022-01-18 15:00:00', '2022-01-18 23:00:00', NULL, 0, '2022-01-17 22:43:08', '2022-01-17 22:43:08'),
(138, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 06:48:38', '2022-01-31 15:00:00', '2022-01-31 16:00:00', NULL, 0, '2022-01-17 22:48:03', '2022-01-17 22:48:03'),
(139, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":122,\"name\":\"2 Cleaner 8 Hours\",\"price\":400,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 06:59:24', '2022-01-25 15:00:00', '2022-01-25 23:00:00', NULL, 0, '2022-01-17 22:58:50', '2022-01-17 22:58:50'),
(140, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":65,\"name\":\"Walls Only (No Retouching)\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":167,\"name\":\"1 Bedroom\",\"price\":699,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 07:00:22', '2022-01-26 15:00:00', '2022-01-26 16:00:00', NULL, 0, '2022-01-17 22:59:48', '2022-01-17 22:59:48'),
(141, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 07:02:51', '2022-01-27 14:00:00', '2022-01-27 15:00:00', NULL, 0, '2022-01-17 23:05:04', '2022-01-17 23:05:04');
INSERT INTO `bookings` (`id`, `e_provider`, `e_service`, `options`, `quantity`, `user_id`, `booking_status_id`, `address`, `payment_id`, `coupon`, `taxes`, `booking_at`, `start_at`, `ends_at`, `hint`, `cancel`, `created_at`, `updated_at`) VALUES
(142, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:09:24', '2022-01-29 10:00:00', '2022-01-29 11:00:00', NULL, 0, '2022-01-18 00:11:09', '2022-01-18 00:11:09'),
(143, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":122,\"name\":\"2 Cleaner 8 Hours\",\"price\":400,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:20:38', '2022-01-18 10:00:00', '2022-01-18 18:00:00', NULL, 0, '2022-01-18 00:22:09', '2022-01-18 00:22:09'),
(144, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:25:43', '2022-01-18 15:00:00', '2022-01-18 23:00:00', NULL, 0, '2022-01-18 00:26:49', '2022-01-18 00:26:49'),
(145, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:35:29', '2022-01-20 15:00:00', '2022-01-20 16:00:00', NULL, 0, '2022-01-18 00:36:18', '2022-01-18 00:36:18'),
(146, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:38:35', '2022-01-18 14:00:00', '2022-01-18 15:00:00', NULL, 0, '2022-01-18 00:39:09', '2022-01-18 00:39:09'),
(147, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:39:11', '2022-01-18 14:00:00', '2022-01-18 15:00:00', NULL, 0, '2022-01-18 00:39:52', '2022-01-18 00:39:52'),
(148, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:42:24', '2022-01-18 14:00:00', '2022-01-18 15:00:00', NULL, 0, '2022-01-18 00:43:06', '2022-01-18 00:43:06'),
(167, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":112,\"name\":\"2 Cleaner 8 Hours\",\"price\":560,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-19 06:58:57', '2022-01-19 15:00:00', '2022-01-19 23:00:00', NULL, 0, '2022-01-18 22:58:43', '2022-01-18 22:58:43'),
(168, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 08:43:53', '2022-01-31 15:00:00', '2022-01-31 16:00:00', NULL, 0, '2022-01-21 00:46:32', '2022-01-21 00:46:32'),
(169, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 77, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:14:09', '2022-01-25 10:00:00', '2022-01-25 11:00:00', NULL, 0, '2022-01-21 08:15:15', '2022-01-21 08:15:15'),
(170, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 79, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:16:37', '2022-02-01 15:00:00', '2022-02-01 16:00:00', NULL, 0, '2022-01-21 08:16:56', '2022-01-21 08:16:56'),
(171, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:19:18', '2022-02-03 14:00:00', '2022-02-03 15:00:00', NULL, 0, '2022-01-21 08:19:18', '2022-01-21 08:19:18'),
(172, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', 79, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:50:49', '2022-01-18 14:00:00', '2022-01-18 15:00:00', NULL, 0, '2022-01-21 08:31:28', '2022-01-21 08:31:28'),
(173, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":37,\"description\":\"Home test\",\"address\":\"1600 Amphitheatre Pkwy, Mountain View, CA 94043, USA\",\"latitude\":37.4200000000000017053025658242404460906982421875,\"longitude\":-122.0799999999999982946974341757595539093017578125}', 79, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-18 08:50:49', '2022-01-18 14:00:00', '2022-01-18 15:00:00', NULL, 0, '2022-01-21 08:32:18', '2022-01-21 08:32:18'),
(174, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 79, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:16:37', '2022-02-01 15:00:00', '2022-02-01 16:00:00', NULL, 0, '2022-01-21 08:33:34', '2022-01-21 08:33:34'),
(175, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 79, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:16:37', '2022-02-01 15:00:00', '2022-02-01 16:00:00', NULL, 0, '2022-01-21 08:34:12', '2022-01-21 08:34:12'),
(176, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 83, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:46:29', '2022-01-27 14:00:00', '2022-01-27 15:00:00', NULL, 0, '2022-01-21 08:47:03', '2022-01-21 08:47:03'),
(177, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 85, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 16:54:01', '2022-01-31 15:00:00', '2022-01-31 16:00:00', NULL, 0, '2022-01-21 08:53:55', '2022-01-21 08:53:55'),
(178, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 17:02:19', '2022-02-01 10:00:00', '2022-02-01 11:00:00', NULL, 0, '2022-01-21 09:01:48', '2022-01-21 09:01:48'),
(179, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 17:02:19', '2022-02-01 10:00:00', '2022-02-01 11:00:00', NULL, 0, '2022-01-21 09:01:48', '2022-01-21 09:01:48'),
(180, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 87, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 20:20:18', '2022-01-28 14:00:00', '2022-01-28 15:00:00', NULL, 0, '2022-01-21 12:20:46', '2022-01-21 12:20:46'),
(181, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":42,\"description\":\"Home\",\"address\":\"Al Zahiyah - Abu Dhabi - United Arab Emirates\",\"latitude\":24.5,\"longitude\":54.38000000000000255795384873636066913604736328125}', 89, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 20:33:46', '2022-01-23 15:00:00', '2022-01-23 16:00:00', NULL, 0, '2022-01-21 12:33:53', '2022-01-21 12:33:53'),
(182, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":118,\"name\":\"2 Cleaner 2 Hours\",\"price\":200,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489900999999999697820385335944592952728271484375,\"longitude\":54.36171999999999826513885636813938617706298828125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 20:49:22', '2022-01-22 15:00:00', '2022-01-22 17:00:00', NULL, 0, '2022-01-21 12:48:40', '2022-01-21 12:48:40'),
(183, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489900999999999697820385335944592952728271484375,\"longitude\":54.36171999999999826513885636813938617706298828125}', 91, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-21 20:51:32', '2022-01-23 14:00:00', '2022-01-23 15:00:00', NULL, 0, '2022-01-21 12:51:54', '2022-01-21 12:51:54'),
(184, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 08:34:56', '2022-01-22 10:00:00', '2022-01-22 11:00:00', NULL, 0, '2022-01-22 00:34:30', '2022-01-22 00:34:30'),
(185, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', 93, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:15:52', '2022-01-22 15:00:00', '2022-01-22 16:00:00', NULL, 0, '2022-01-22 01:15:57', '2022-01-22 01:15:57'),
(186, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:25:08', '2022-01-26 14:00:00', '2022-01-26 16:00:00', NULL, 0, '2022-01-22 01:24:39', '2022-01-22 01:24:39'),
(187, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:26:22', '2022-01-22 15:00:00', '2022-01-22 16:00:00', NULL, 0, '2022-01-22 01:25:47', '2022-01-22 01:25:47'),
(188, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:26:22', '2022-01-22 15:00:00', '2022-01-22 16:00:00', NULL, 1, '2022-01-22 01:25:57', '2022-01-22 01:46:29'),
(189, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:32:16', '2022-01-28 14:00:00', '2022-01-28 16:00:00', NULL, 0, '2022-01-22 01:31:45', '2022-01-22 01:31:45'),
(190, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":61,\"name\":\"Plumbing Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":162,\"name\":\"1 Hour Plumbing Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:32:47', '2022-01-30 14:00:00', '2022-01-30 15:00:00', NULL, 1, '2022-01-22 01:32:34', '2022-01-22 01:41:51'),
(191, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":62,\"name\":\"Carpenter Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":165,\"name\":\"1 Hour Carpenter Handyman\",\"price\":95,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 09:42:03', '2022-01-22 14:00:00', '2022-01-22 15:00:00', NULL, 1, '2022-01-22 01:41:19', '2022-01-22 01:41:46'),
(192, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 10:36:58', '2022-01-31 14:00:00', '2022-01-31 15:00:00', NULL, 0, '2022-01-22 02:36:34', '2022-01-22 02:36:34'),
(193, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":53,\"name\":\"AC Soft Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":155,\"name\":\"1 Unit\",\"price\":129,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 10:37:51', '2022-01-23 14:00:00', '2022-01-23 15:00:00', NULL, 0, '2022-01-22 02:37:05', '2022-01-22 02:37:05'),
(194, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":55,\"name\":\"AC Deep Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"fixed\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":157,\"name\":\"1 Unit\",\"price\":279,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 16:11:36', '2022-01-23 14:00:00', '2022-01-23 15:00:00', NULL, 0, '2022-01-22 08:10:50', '2022-01-22 08:10:50'),
(195, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":58,\"name\":\"Leak Fixing\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":160,\"name\":\"1 hour Leak Fixing\",\"price\":95,\"quantity_unit\":null}]', 3, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 16:55:00', '2022-01-31 10:00:00', '2022-01-31 13:00:00', NULL, 0, '2022-01-22 08:54:15', '2022-01-22 08:54:15'),
(196, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrical Handyman\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 2, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 16:56:57', '2022-01-26 15:00:00', '2022-01-26 17:00:00', NULL, 0, '2022-01-22 08:56:16', '2022-01-22 08:56:16'),
(197, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":43,\"name\":\"Regular Cleaning without Materials\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":113,\"name\":\"1 Cleaner 2 Hours\",\"price\":100,\"quantity_unit\":null}]', 1, 42, 1, '{\"id\":43,\"description\":\"Home\",\"address\":\"F9Q6+XM9 - Zone 1 - E6 - Abu Dhabi - United Arab Emirates\",\"latitude\":24.489999999999998436805981327779591083526611328125,\"longitude\":54.3599999999999994315658113919198513031005859375}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-22 18:49:28', '2022-01-24 15:00:00', '2022-01-24 17:00:00', NULL, 0, '2022-01-22 10:48:49', '2022-01-22 10:48:49'),
(198, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":42,\"name\":\"Regular Cleaning\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":\"1\",\"duration\":\"01:00\"}', '[{\"id\":103,\"name\":\"1 Cleaner 2 Hours\",\"price\":100,\"quantity_unit\":null}]', 1, 38, 1, '{\"id\":35,\"description\":\"citadel\",\"address\":\"57M6+M9 Dubai - United Arab Emirates\",\"latitude\":25.17999999999999971578290569595992565155029296875,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-25 09:55:59', '2022-01-25 09:00:00', '2022-01-25 11:00:00', NULL, 0, '2022-01-25 01:56:03', '2022-01-25 01:56:03'),
(199, '{\"id\":19,\"name\":\"Higitech\",\"phone_number\":null,\"mobile_number\":null}', '{\"id\":60,\"name\":\"Electrician\",\"price\":0,\"discount_price\":null,\"price_unit\":\"hourly\",\"quantity_unit\":null,\"duration\":null}', '[{\"id\":161,\"name\":\"1 hour\",\"price\":95,\"quantity_unit\":null}]', 1, 62, 1, '{\"id\":36,\"description\":null,\"address\":\"3 \\u0634\\u0627\\u0631\\u0639 \\u0662\\u0666 - Al Quoz - Al Quoz Industrial Area 2 - Dubai - United Arab Emirates\",\"latitude\":25.1400000000000005684341886080801486968994140625,\"longitude\":55.25999999999999801048033987171947956085205078125}', NULL, NULL, '[{\"id\":6,\"name\":\"VAT\",\"value\":5,\"type\":\"percent\"}]', '2022-01-27 14:14:51', '2022-01-28 09:00:00', '2022-01-28 10:00:00', NULL, 0, '2022-01-27 06:15:02', '2022-01-27 06:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `booking_statuses`
--

CREATE TABLE `booking_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `booking_statuses`
--

INSERT INTO `booking_statuses` (`id`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Received', 1, '2021-01-25 15:25:46', '2021-01-29 13:56:35'),
(2, 'In Progress', 40, '2021-01-25 15:26:02', '2021-02-16 17:56:52'),
(3, '{\"en\":\"On Going\"}', 20, '2021-01-28 03:47:23', '2021-07-29 03:36:30'),
(4, '{\"en\":\"Scheduled\"}', 10, '2021-02-16 08:09:29', '2021-07-29 03:36:11'),
(5, 'Ready', 30, '2021-02-16 08:11:50', '2021-02-16 17:56:42'),
(6, '{\"en\":\"Completed\"}', 50, '2021-02-16 17:57:02', '2021-07-29 03:36:47'),
(7, 'Failed', 60, '2021-02-16 17:58:36', '2021-02-16 17:58:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT 0,
  `featured` tinyint(1) DEFAULT 0,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `color`, `description`, `order`, `featured`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Cleaning\"}', '#ff9f43', '{\"en\":\"<p>Higitech Professional Cleaning Services for areas all around Dubai.<\\/p><ul><li>Studio  - 2 Cleaning Hours<\\/li><li>1 B\\/R - 3 Cleaning hours<\\/li><li>2 B\\/R - 4-5 Cleaning Hours<\\/li><li>3 B\\/R - 5-6 Cleaning Hours<\\/li><li>4 B\\/R - 6-7 cleaning hours<\\/li><\\/ul>\"}', 1, 1, NULL, '2021-01-19 13:01:35', '2021-10-12 07:19:05'),
(7, '{\"en\":\"Air Conditioning\"}', '#5f27cd', '{\"en\":\"Experienced technicians with experience and equipment to fullfill your AC requirements.\"}', 2, 1, NULL, '2021-01-31 10:46:15', '2021-10-12 08:53:29'),
(8, '{\"en\":\"Plumbing\"}', '#5f27cd', '{\"en\":\"<p>Higitech specialized technicians provide plumbing services<br><\\/p>\"}', 10, 1, NULL, '2021-01-31 10:47:23', '2022-01-26 06:58:10'),
(10, '{\"en\":\"Handyman\"}', '#ffffffff', '{\"en\":\"<p>Professional handyman services for residents of Dubai. Includes carpentry, general fixing and more.<\\/p>\"}', 6, 1, NULL, '2021-06-20 01:39:47', '2021-10-12 08:55:40'),
(11, '{\"en\":\"Painting\"}', '#ffffffff', '{\"en\":\"<p>Walls, Ceiling painting and retouching services in dubai.<\\/p>\"}', 7, 1, NULL, '2021-06-20 01:41:02', '2021-10-12 08:55:49'),
(12, '{\"en\":\"Sanitizing\"}', '#ffffffff', '{\"en\":\"Dubai Municipality approved Disinfection and Sanitization Service.\"}', 9, 1, NULL, '2021-06-20 01:54:34', '2021-10-12 08:55:57'),
(13, '{\"en\":\"Electrical\"}', '#000000', '{\"en\":null}', 5, 1, NULL, '2021-10-12 08:30:22', '2021-10-12 08:37:31'),
(14, '{\"en\":\"Pest Control\"}', '#ffffffff', '{\"en\":\"<p>Pest Control Services in Dubai<\\/p>\"}', 8, 1, NULL, '2021-10-12 08:56:28', '2021-10-12 08:56:28'),
(15, '{\"en\":\"Moving\"}', '#ffffffff', '{\"en\":\"<p>Moving and Packing services in dubai<\\/p>\"}', 3, 1, NULL, '2021-10-12 09:40:28', '2022-01-26 06:57:57'),
(16, '{\"en\":\"Laundry\"}', '#ffffffff', '{\"en\":\"<p>Discounted Rates on Higi Laundry Services.<\\/p>\"}', 11, 1, NULL, '2021-10-25 08:09:08', '2021-10-25 08:09:39'),
(17, '{\"en\":\"ANNUAL MAINTENANCE\"}', 'BLUE', '{\"en\":null}', NULL, 1, 1, '2022-03-01 03:20:01', '2022-03-01 03:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` double(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'percent',
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `discount`, `discount_type`, `description`, `expires_at`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 'HIGI20NY', 20.00, 'percent', '{\"en\":null}', '2022-02-28 09:52:00', 1, '2022-01-27 01:52:32', '2022-01-27 01:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_digits` tinyint(3) UNSIGNED DEFAULT NULL,
  `rounding` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `code`, `decimal_digits`, `rounding`, `created_at`, `updated_at`) VALUES
(8, '{\"en\":\"AED\"}', '{\"en\":\"AED\"}', '{\"en\":\"AED\"}', 2, 0, '2021-06-20 01:55:33', '2021-06-20 01:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `custom_fields`
--

CREATE TABLE `custom_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(56) COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `required` tinyint(1) DEFAULT NULL,
  `in_table` tinyint(1) DEFAULT NULL,
  `bootstrap_column` tinyint(4) DEFAULT NULL,
  `order` tinyint(4) DEFAULT NULL,
  `custom_field_model` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_fields`
--

INSERT INTO `custom_fields` (`id`, `name`, `type`, `values`, `disabled`, `required`, `in_table`, `bootstrap_column`, `order`, `custom_field_model`, `created_at`, `updated_at`) VALUES
(5, 'bio', 'textarea', NULL, 0, 0, 0, 6, 1, 'App\\Models\\User', '2019-09-06 17:43:58', '2019-09-06 17:43:58'),
(6, 'address', 'text', NULL, 0, 0, 0, 6, 3, 'App\\Models\\User', '2019-09-06 17:49:22', '2019-09-06 17:49:22');

-- --------------------------------------------------------

--
-- Table structure for table `custom_field_values`
--

CREATE TABLE `custom_field_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `custom_field_id` int(10) UNSIGNED NOT NULL,
  `customizable_type` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customizable_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_field_values`
--

INSERT INTO `custom_field_values` (`id`, `value`, `view`, `custom_field_id`, `customizable_type`, `customizable_id`, `created_at`, `updated_at`) VALUES
(30, 'Explicabo. Eum provi.&nbsp;', 'Explicabo. Eum provi.&nbsp;', 5, 'App\\Models\\User', 2, '2019-09-06 17:52:30', '2021-02-02 07:32:57'),
(31, 'Modi est libero qui', 'Modi est libero qui', 6, 'App\\Models\\User', 2, '2019-09-06 17:52:30', '2021-02-02 07:32:57'),
(33, 'Consequatur error ip. ', 'Consequatur error ip. ', 5, 'App\\Models\\User', 1, '2019-09-06 17:53:58', '2021-06-20 00:30:44'),
(34, 'Qui vero ratione vel', 'Qui vero ratione vel', 6, 'App\\Models\\User', 1, '2019-09-06 17:53:58', '2021-02-02 07:32:01'),
(36, 'Dolor optio, error e', 'Dolor optio, error e', 5, 'App\\Models\\User', 3, '2019-10-15 13:21:32', '2021-02-02 07:33:23'),
(37, 'Voluptatibus ad ipsu', 'Voluptatibus ad ipsu', 6, 'App\\Models\\User', 3, '2019-10-15 13:21:32', '2021-02-02 07:33:23'),
(39, 'Faucibus ornare suspendisse sed nisi lacus sed. Pellentesque sit amet porttitor eget dolor morbi non arcu. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta', 'Faucibus ornare suspendisse sed nisi lacus sed. Pellentesque sit amet porttitor eget dolor morbi non arcu. Eu scelerisque felis imperdiet proin fermentum leo vel orci porta', 5, 'App\\Models\\User', 4, '2019-10-16 15:31:46', '2019-10-16 15:31:46'),
(40, 'Sequi molestiae ipsa1', 'Sequi molestiae ipsa1', 6, 'App\\Models\\User', 4, '2019-10-16 15:31:46', '2021-02-21 19:32:10'),
(42, 'Omnis fugiat et cons.', 'Omnis fugiat et cons.', 5, 'App\\Models\\User', 5, '2019-12-15 14:49:44', '2021-02-02 07:29:47'),
(43, 'Consequatur delenit', 'Consequatur delenit', 6, 'App\\Models\\User', 5, '2019-12-15 14:49:44', '2021-02-02 07:29:47'),
(45, '<p>Short bio for this driver</p>', 'Short bio for this driver', 5, 'App\\Models\\User', 6, '2020-03-29 13:28:05', '2020-03-29 13:28:05'),
(46, '4722 Villa Drive', '4722 Villa Drive', 6, 'App\\Models\\User', 6, '2020-03-29 13:28:05', '2020-03-29 13:28:05'),
(48, 'Voluptatem. Omnis op.', 'Voluptatem. Omnis op.', 5, 'App\\Models\\User', 7, '2021-01-17 12:13:24', '2021-02-02 07:31:36'),
(49, 'Perspiciatis aut ei', 'Perspiciatis aut ei', 6, 'App\\Models\\User', 7, '2021-01-17 12:13:24', '2021-02-02 07:31:36'),
(51, 'sdfsdf56', 'sdfsdf56', 5, 'App\\Models\\User', 8, '2021-02-10 07:31:12', '2021-02-19 10:09:37'),
(52, 'Adressttt', 'Adressttt', 6, 'App\\Models\\User', 8, '2021-02-10 07:31:12', '2021-02-19 09:57:27'),
(53, NULL, '', 5, 'App\\Models\\User', 9, '2021-06-22 12:11:16', '2021-06-22 12:11:16'),
(54, NULL, NULL, 6, 'App\\Models\\User', 9, '2021-06-22 12:11:16', '2021-06-22 12:11:16'),
(55, NULL, '', 5, 'App\\Models\\User', 10, '2021-06-22 12:21:05', '2021-06-22 12:21:05'),
(56, NULL, NULL, 6, 'App\\Models\\User', 10, '2021-06-22 12:21:05', '2021-06-22 12:21:05'),
(57, NULL, '', 5, 'App\\Models\\User', 11, '2021-06-22 12:22:12', '2021-06-22 12:22:12'),
(58, '1301, The Citadel Tower,, Business Bay', '1301, The Citadel Tower,, Business Bay', 6, 'App\\Models\\User', 11, '2021-06-22 12:22:12', '2021-06-23 04:28:16'),
(59, NULL, '', 5, 'App\\Models\\User', 12, '2021-06-24 05:49:35', '2021-06-24 05:49:35'),
(60, NULL, NULL, 6, 'App\\Models\\User', 12, '2021-06-24 05:49:35', '2021-06-24 05:49:35'),
(61, NULL, '', 5, 'App\\Models\\User', 13, '2021-06-24 10:02:17', '2021-06-24 10:02:17'),
(62, NULL, NULL, 6, 'App\\Models\\User', 13, '2021-06-24 10:02:17', '2021-06-24 10:02:17'),
(63, NULL, '', 5, 'App\\Models\\User', 14, '2021-06-24 10:05:57', '2021-06-24 10:05:57'),
(64, NULL, NULL, 6, 'App\\Models\\User', 14, '2021-06-24 10:05:57', '2021-06-24 10:05:57'),
(65, NULL, '', 5, 'App\\Models\\User', 15, '2021-06-25 00:05:09', '2021-06-25 00:05:09'),
(66, NULL, NULL, 6, 'App\\Models\\User', 15, '2021-06-25 00:05:09', '2021-06-25 00:05:09'),
(67, NULL, '', 5, 'App\\Models\\User', 16, '2021-06-25 00:10:27', '2021-06-25 00:10:27'),
(68, NULL, NULL, 6, 'App\\Models\\User', 16, '2021-06-25 00:10:27', '2021-06-25 00:10:27'),
(69, NULL, '', 5, 'App\\Models\\User', 17, '2021-06-25 06:38:53', '2021-06-25 06:38:53'),
(70, NULL, NULL, 6, 'App\\Models\\User', 17, '2021-06-25 06:38:53', '2021-06-25 06:38:53'),
(71, NULL, '', 5, 'App\\Models\\User', 18, '2021-06-25 06:57:49', '2021-06-25 06:57:49'),
(72, NULL, NULL, 6, 'App\\Models\\User', 18, '2021-06-25 06:57:49', '2021-06-25 06:57:49'),
(73, NULL, '', 5, 'App\\Models\\User', 19, '2021-06-28 05:25:54', '2021-06-28 05:25:54'),
(74, NULL, NULL, 6, 'App\\Models\\User', 19, '2021-06-28 05:25:54', '2021-06-28 05:25:54'),
(75, NULL, '', 5, 'App\\Models\\User', 20, '2021-06-28 05:38:35', '2021-06-28 05:38:35'),
(76, NULL, NULL, 6, 'App\\Models\\User', 20, '2021-06-28 05:38:35', '2021-06-28 05:38:35'),
(77, NULL, '', 5, 'App\\Models\\User', 21, '2021-06-28 05:52:18', '2021-06-28 05:52:18'),
(78, NULL, NULL, 6, 'App\\Models\\User', 21, '2021-06-28 05:52:18', '2021-06-28 05:52:18'),
(79, NULL, '', 5, 'App\\Models\\User', 22, '2021-06-29 00:53:18', '2021-06-29 00:53:18'),
(80, NULL, NULL, 6, 'App\\Models\\User', 22, '2021-06-29 00:53:18', '2021-06-29 00:53:18'),
(81, NULL, '', 5, 'App\\Models\\User', 23, '2021-07-06 04:00:15', '2021-07-06 04:00:15'),
(82, NULL, NULL, 6, 'App\\Models\\User', 23, '2021-07-06 04:00:15', '2021-07-06 04:00:15'),
(83, NULL, '', 5, 'App\\Models\\User', 24, '2021-07-12 02:54:16', '2021-07-12 02:54:16'),
(84, NULL, NULL, 6, 'App\\Models\\User', 24, '2021-07-12 02:54:16', '2021-07-12 02:54:16'),
(85, NULL, '', 5, 'App\\Models\\User', 25, '2021-07-12 02:54:38', '2021-07-12 02:54:38'),
(86, NULL, NULL, 6, 'App\\Models\\User', 25, '2021-07-12 02:54:38', '2021-07-12 02:54:38'),
(87, NULL, '', 5, 'App\\Models\\User', 26, '2021-07-18 07:21:39', '2021-07-18 07:21:39'),
(88, NULL, NULL, 6, 'App\\Models\\User', 26, '2021-07-18 07:21:39', '2021-07-18 07:21:39'),
(89, NULL, '', 5, 'App\\Models\\User', 27, '2021-07-22 01:41:36', '2021-07-22 01:41:36'),
(90, NULL, NULL, 6, 'App\\Models\\User', 27, '2021-07-22 01:41:36', '2021-07-22 01:41:36'),
(91, NULL, '', 5, 'App\\Models\\User', 28, '2021-07-26 05:58:10', '2021-07-26 05:58:10'),
(92, NULL, NULL, 6, 'App\\Models\\User', 28, '2021-07-26 05:58:10', '2021-07-26 05:58:10'),
(93, NULL, '', 5, 'App\\Models\\User', 29, '2021-07-28 03:51:54', '2021-07-28 03:51:54'),
(94, NULL, NULL, 6, 'App\\Models\\User', 29, '2021-07-28 03:51:54', '2021-07-28 03:51:54'),
(95, NULL, '', 5, 'App\\Models\\User', 30, '2021-07-28 03:57:41', '2021-07-28 03:57:41'),
(96, NULL, NULL, 6, 'App\\Models\\User', 30, '2021-07-28 03:57:41', '2021-07-28 03:57:41'),
(97, NULL, '', 5, 'App\\Models\\User', 31, '2021-07-28 04:40:24', '2021-07-28 04:40:24'),
(98, NULL, NULL, 6, 'App\\Models\\User', 31, '2021-07-28 04:40:24', '2021-07-28 04:40:24'),
(99, NULL, '', 5, 'App\\Models\\User', 32, '2021-07-28 12:20:30', '2021-07-28 12:20:30'),
(100, NULL, NULL, 6, 'App\\Models\\User', 32, '2021-07-28 12:20:30', '2021-07-28 12:20:30'),
(101, NULL, '', 5, 'App\\Models\\User', 33, '2021-08-08 09:56:48', '2021-08-08 09:56:48'),
(102, NULL, NULL, 6, 'App\\Models\\User', 33, '2021-08-08 09:56:48', '2021-08-08 09:56:48'),
(103, NULL, '', 5, 'App\\Models\\User', 34, '2021-08-11 05:38:13', '2021-08-11 05:38:13'),
(104, NULL, NULL, 6, 'App\\Models\\User', 34, '2021-08-11 05:38:13', '2021-08-11 05:38:13'),
(105, NULL, '', 5, 'App\\Models\\User', 35, '2021-08-12 04:32:26', '2021-08-12 04:32:26'),
(106, NULL, NULL, 6, 'App\\Models\\User', 35, '2021-08-12 04:32:26', '2021-08-12 04:32:26'),
(107, NULL, '', 5, 'App\\Models\\User', 36, '2021-08-30 06:29:46', '2021-08-30 06:29:46'),
(108, NULL, NULL, 6, 'App\\Models\\User', 36, '2021-08-30 06:29:46', '2021-08-30 06:29:46'),
(109, NULL, '', 5, 'App\\Models\\User', 37, '2021-08-30 07:53:00', '2021-08-30 07:53:00'),
(110, NULL, NULL, 6, 'App\\Models\\User', 37, '2021-08-30 07:53:00', '2021-08-30 07:53:00'),
(111, NULL, '', 5, 'App\\Models\\User', 38, '2021-09-12 08:06:20', '2021-09-12 08:06:20'),
(112, NULL, NULL, 6, 'App\\Models\\User', 38, '2021-09-12 08:06:20', '2021-09-12 08:06:20'),
(113, NULL, '', 5, 'App\\Models\\User', 39, '2021-09-12 08:07:02', '2021-09-12 08:07:02'),
(114, NULL, NULL, 6, 'App\\Models\\User', 39, '2021-09-12 08:07:02', '2021-09-12 08:07:02'),
(115, NULL, '', 5, 'App\\Models\\User', 40, '2021-09-12 08:23:30', '2021-09-12 08:23:30'),
(116, NULL, NULL, 6, 'App\\Models\\User', 40, '2021-09-12 08:23:30', '2021-09-12 08:23:30'),
(117, NULL, '', 5, 'App\\Models\\User', 41, '2021-09-12 08:35:36', '2021-09-12 08:35:36'),
(118, NULL, NULL, 6, 'App\\Models\\User', 41, '2021-09-12 08:35:36', '2021-09-12 08:35:36'),
(119, NULL, '', 5, 'App\\Models\\User', 42, '2021-09-13 23:57:15', '2021-09-13 23:57:15'),
(120, NULL, NULL, 6, 'App\\Models\\User', 42, '2021-09-13 23:57:15', '2021-09-13 23:57:15'),
(121, NULL, '', 5, 'App\\Models\\User', 43, '2021-09-16 05:22:28', '2021-09-16 05:22:28'),
(122, NULL, NULL, 6, 'App\\Models\\User', 43, '2021-09-16 05:22:28', '2021-09-16 05:22:28'),
(123, NULL, '', 5, 'App\\Models\\User', 44, '2021-09-20 04:49:16', '2021-09-20 04:49:16'),
(124, NULL, NULL, 6, 'App\\Models\\User', 44, '2021-09-20 04:49:16', '2021-09-20 04:49:16'),
(125, NULL, '', 5, 'App\\Models\\User', 45, '2021-09-21 09:06:30', '2021-09-21 09:06:30'),
(126, NULL, NULL, 6, 'App\\Models\\User', 45, '2021-09-21 09:06:30', '2021-09-21 09:06:30'),
(127, NULL, '', 5, 'App\\Models\\User', 46, '2021-09-21 11:26:21', '2021-09-21 11:26:21'),
(128, NULL, NULL, 6, 'App\\Models\\User', 46, '2021-09-21 11:26:21', '2021-09-21 11:26:21'),
(129, NULL, '', 5, 'App\\Models\\User', 47, '2021-09-22 02:47:59', '2021-09-22 02:47:59'),
(130, NULL, NULL, 6, 'App\\Models\\User', 47, '2021-09-22 02:47:59', '2021-09-22 02:47:59'),
(131, NULL, '', 5, 'App\\Models\\User', 48, '2021-09-22 07:57:02', '2021-09-22 07:57:02'),
(132, NULL, NULL, 6, 'App\\Models\\User', 48, '2021-09-22 07:57:02', '2021-09-22 07:57:02'),
(133, NULL, '', 5, 'App\\Models\\User', 49, '2021-09-25 13:22:58', '2021-09-25 13:22:58'),
(134, NULL, NULL, 6, 'App\\Models\\User', 49, '2021-09-25 13:22:58', '2021-09-25 13:22:58'),
(135, NULL, '', 5, 'App\\Models\\User', 50, '2021-10-02 04:15:21', '2021-10-02 04:15:21'),
(136, NULL, NULL, 6, 'App\\Models\\User', 50, '2021-10-02 04:15:21', '2021-10-02 04:15:21'),
(137, NULL, '', 5, 'App\\Models\\User', 53, '2021-10-13 08:26:52', '2021-10-13 08:26:52'),
(138, NULL, NULL, 6, 'App\\Models\\User', 53, '2021-10-13 08:26:52', '2021-10-13 08:26:52'),
(139, NULL, '', 5, 'App\\Models\\User', 54, '2021-10-14 00:23:31', '2021-10-14 00:23:31'),
(140, NULL, NULL, 6, 'App\\Models\\User', 54, '2021-10-14 00:23:31', '2021-10-14 00:23:31'),
(141, NULL, '', 5, 'App\\Models\\User', 55, '2021-10-14 12:21:13', '2021-10-14 12:21:13'),
(142, NULL, NULL, 6, 'App\\Models\\User', 55, '2021-10-14 12:21:13', '2021-10-14 12:21:13'),
(143, NULL, '', 5, 'App\\Models\\User', 56, '2021-10-20 06:36:52', '2021-10-20 06:36:52'),
(144, NULL, NULL, 6, 'App\\Models\\User', 56, '2021-10-20 06:36:52', '2021-10-20 06:36:52'),
(145, NULL, '', 5, 'App\\Models\\User', 57, '2021-10-27 07:28:42', '2021-10-27 07:28:42'),
(146, NULL, NULL, 6, 'App\\Models\\User', 57, '2021-10-27 07:28:42', '2021-10-27 07:28:42'),
(147, NULL, '', 5, 'App\\Models\\User', 58, '2021-11-10 00:58:31', '2021-11-10 00:58:31'),
(148, NULL, NULL, 6, 'App\\Models\\User', 58, '2021-11-10 00:58:31', '2021-11-10 00:58:31'),
(149, NULL, '', 5, 'App\\Models\\User', 59, '2021-11-28 11:17:25', '2021-11-28 11:17:25'),
(150, NULL, NULL, 6, 'App\\Models\\User', 59, '2021-11-28 11:17:25', '2021-11-28 11:17:25'),
(151, NULL, '', 5, 'App\\Models\\User', 60, '2022-01-22 02:17:29', '2022-01-22 02:17:29'),
(152, NULL, NULL, 6, 'App\\Models\\User', 60, '2022-01-22 02:17:29', '2022-01-22 02:17:29'),
(153, NULL, '', 5, 'App\\Models\\User', 61, '2022-01-26 05:15:15', '2022-01-26 05:15:15'),
(154, NULL, NULL, 6, 'App\\Models\\User', 61, '2022-01-26 05:15:15', '2022-01-26 05:15:15'),
(155, NULL, '', 5, 'App\\Models\\User', 62, '2022-01-26 05:16:31', '2022-01-26 05:16:31'),
(156, NULL, NULL, 6, 'App\\Models\\User', 62, '2022-01-26 05:16:31', '2022-01-26 05:16:31'),
(157, NULL, '', 5, 'App\\Models\\User', 63, '2022-01-26 06:49:33', '2022-01-26 06:49:33'),
(158, NULL, NULL, 6, 'App\\Models\\User', 63, '2022-01-26 06:49:33', '2022-01-26 06:49:33'),
(159, NULL, '', 5, 'App\\Models\\User', 64, '2022-01-27 09:59:35', '2022-01-27 09:59:35'),
(160, NULL, NULL, 6, 'App\\Models\\User', 64, '2022-01-27 09:59:35', '2022-01-27 09:59:35'),
(161, NULL, '', 5, 'App\\Models\\User', 65, '2022-01-28 03:36:14', '2022-01-28 03:36:14'),
(162, NULL, NULL, 6, 'App\\Models\\User', 65, '2022-01-28 03:36:14', '2022-01-28 03:36:14');

-- --------------------------------------------------------

--
-- Table structure for table `custom_pages`
--

CREATE TABLE `custom_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `custom_pages`
--

INSERT INTO `custom_pages` (`id`, `title`, `content`, `published`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Privacy Policy\"}', '{\"en\":\"<h4 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 30px; color: rgb(24, 35, 51); font-size: 25px;\\\">Privacy Policy<\\/h4><h1><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><\\/p><ul style=\\\"margin: 16px 0px; padding: 0px 0px 0px 25px; list-style: none;\\\"><li style=\\\"text-align: left;\\\">All credit\\/debit cards’ details and personally identifiable information will NOT be stored, sold, shared, rented or leased to any third parties<\\/li><li style=\\\"text-align: left;\\\"><a href=\\\"http:\\/\\/www.higitech.me\\/\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">http:\\/\\/www.higitech.me\\/<\\/a>will not pass any debit\\/credit card details to&nbsp;<span style=\\\"font-weight: 600;\\\">third parties<\\/span><\\/li><li style=\\\"text-align: left;\\\"><a href=\\\"http:\\/\\/www.higitech.me\\/\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">http:\\/\\/www.higitech.me\\/<\\/a>takes appropriate steps to ensure data privacy and security including through various hardware and software methodologies. However, (<a href=\\\"http:\\/\\/www.higitech.me\\/\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">http:\\/\\/www.higitech.me\\/<\\/a>)&nbsp; cannot guarantee the security of any information that is disclosed online<\\/li><li style=\\\"text-align: left;\\\">The&nbsp;<a href=\\\"http:\\/\\/www.higitech.me\\/\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">http:\\/\\/www.higitech.me\\/<\\/a>is not responsible for the privacy policies of websites to which it links. If you provide any information to such third parties different rules regarding the collection and use of your personal information may apply. You should contact these entities directly if you have any questions about their use of the information that they collect.<\\/li><li style=\\\"text-align: left;\\\">The Website Policies and Terms &amp; Conditions may be changed or updated occasionally to meet the requirements and standards. Therefore, the Customers’ are encouraged to frequently visit these sections to be updated about the changes on the website. Modifications will be effective on the day they are posted.<\\/li><\\/ul><\\/div><\\/h1>\"}', 1, '2021-02-24 07:53:21', '2021-09-22 04:22:05'),
(2, '{\"en\":\"Terms & Conditions\"}', '{\"en\":\"<h4 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 30px; color: rgb(24, 35, 51); font-size: 25px;\\\">Terms &amp; Conditions<\\/h4><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">Higitech Middle East Cleaning Services LLC having been in the residential and commercial cleaning business in Dubai since Sept 2019, have developed an excellent reputation for quality, honesty and reliability. “Higitech Middle East” provides cleaning service, maid service, house cleaning, office cleaning, villa cleaning, move in move out cleaning, deep cleaning, after construction cleaning, professional carpet cleaning and stain removing, professional upholstery cleaning and stain removing, internal and external window cleaning, floor scrubbing and stain removing cleaning service. By continuously improving our procedures and having trained and motivated team members, we are committed to a safe and healthy working environment. We also respect our client’s privacy in their home or office and respect our environment by using earth friendly products. Our goal is to consistently provide the customer with 100% quality, fast and friendly service. You have better things to do so when considering a cleaning service, choose us to help you with your cleaning needs.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Our Mission<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">Our mission is to provide and exceed total customer satisfaction via an unprecedented level of service excellence and quality assurance. We are fully licensed &amp; insured company that is able to handle any kind of project regarding your site or residence.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">When you select us for any cleaning solution, your complete satisfaction is guaranteed. Our professional cleaning technicians use top-of-the-line Spanish equipment coupled with leading German, American and Italian cleaning products. We ensure that every element of your cleaning requirement is cared for promptly and efficiently.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">Our technicians are all certified cleaning professionals. They are our employees and not outside contractors. Our technicians\' years of experience coupled with courtesy and professionalism will ensure that you obtain the best possible service.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.0 NEW HIGITECH MIDDLE EAST INTERNATIONAL CLEANING SERVICES L.L.C maintains the&nbsp;<a href=\\\"http:\\/\\/www.higitech.me\\/\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">http:\\/\\/www.higitech.me\\/<\\/a>&nbsp;Website (Site).<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.1 United Arab of Emirates is our country of domicile and stipulate that the governing law is the local law. All disputes arising in connection therewith shall be heard only by a court of competent jurisdiction in U.A.E.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.1.1 Once the payment is made, the confirmation notice will be sent to the client via email within 24 hours of receipt of payment.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.2 Visa or MasterCard debit and credit cards in AED will be accepted for payment.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.3 We will not trade with or provide any services to OFAC (Office of Foreign Assets Control) and sanctioned countries in accordance with the law of UAE.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.4 Customer using the website who are Minor \\/under the age of 18 shall not register as a User of the website and shall not transact on or use the website.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.5 Cardholder must retain a copy of transaction records and Merchant policies and rules.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">1.6 User is responsible for maintaining the confidentiality of his account.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Headings<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">The Headings contained in these Terms are for convenience only and do not affect their interpretation. However Text in BOLD are important and you should give them careful attention.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Cost<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">5.0<\\/span>&nbsp;The Company will perform its obligations to the client for the remuneration set forth in this agreement. Any additional services requested by the client which falls outside this agreement which the company incurs as a result of providing the service shall be payable by the client in accordance with this clause.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">5.1<\\/span>&nbsp;Any additional service which is not part of the original agreement needs to be brought to the attention of the company’s Operations Manager prior to the commencement. The notice MUST be in writing and not less 48 hrs before the service is required.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">5.2<\\/span>&nbsp;All prices are subject to current rate of 5% VAT.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Our Obligations<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.0<\\/span>&nbsp;The company shall provide the services both timely and professionally, using reasonable care and skill.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.1<\\/span>&nbsp;The company will be responsible to provide the necessary materials to perform its obligations in regards to the agreed service in this contract. Any additional services need to be paid for separately. (See clause 5.2)<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.2<\\/span>&nbsp;The company will reasonably report any matters which interfere with, and or its ability to perform the service to the client.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.3<\\/span>&nbsp;In pursuance to the company’s obligations, we may delegate authority to a third party to provide services to you where it is fitting to do so, or where the company is not able to provide the services in accordance with clause 6.1. In such event, the company will seek the client’s authority to delegate the service.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.4<\\/span>&nbsp;It is our duty to observe all health and safety rules, regulation, policies and practices at work in accordance with the law, however the client has an equal responsibility.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.5<\\/span>&nbsp;The company will keep up-to-date its insurance policy to cover all liabilities arising from any breach committed by us. We will provide a copy of the certificate upon request.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.6<\\/span>&nbsp;We will make restitution where a breach of these terms has been committed by us, or compensate for any liability arising from our negligence.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">6.7<\\/span>&nbsp;In order to provide a smooth service, the company will as far as practically possibly comply with the client’s policies and practices. Where it is not practical to do so, the client fully agrees to settle the matter on the company’s terms.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Client’s Obligations<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.0<\\/span>&nbsp;The client will immediately provide all information required to us in order for us to provide the service.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.1<\\/span>&nbsp;Allow us unrestricted access, including parking for the duration of the service to the property or service address in order for us to provide the service.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.2<\\/span>&nbsp;To provide a safe storage area for us to store equipment including any vacuum cleaners, buckets, chemicals etc at the premises.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.3<\\/span>&nbsp;To be responsible for providing keys or access to the premises or service address. This also includes any keys, or store rooms code, or any other rooms we will need to have access to. (Whether for cleaning or for storage of our equipment).<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.4<\\/span>&nbsp;To keep secure our equipment while on your premises, and immediately compensate us for any loss or damage to our equipment while in your possession.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.5<\\/span>&nbsp;To observe all health and safety policies, regulations, and best practices according to law or recommended by us.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.6<\\/span>&nbsp;To pay promptly for the service, and any additional services including the cost of providing additional services from a third party.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.7<\\/span>&nbsp;To notify us immediately of any changes in circumstances, including changes in working hours, delays, lockouts, change of address, or any other reason which may affect our ability to provide you the service.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Fees<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.0<\\/span>&nbsp;The Client shall (by mutual agreement) pay the company the fee either: a) The full amount per year or b) A proportion of the fee by equal monthly installments.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.1<\\/span>&nbsp;Monthly installments for this purpose shall be a recurring invoice every 15 days after the service delivery date. All our invoices include 5% VAT at the current rate.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.2<\\/span>&nbsp;It is a condition of this agreement that all invoices MUST be paid in ADVANCE.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.3<\\/span>&nbsp;Any invoices not settled within 1 month (30 days) of the invoice date without proper cause, will be referred to a debt collection agency. You agree to pay all fees incurred by us as well as any debt collection agency fees as a result of the company taking recovery action.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.4<\\/span>&nbsp;On the third over-due invoice, the company shall determine this agreement, and shall demand of the client a proportion of the fees equal to 1 month’s fees as a security deposit to be held on account. Such fees will be return at the expiration date.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.5<\\/span>&nbsp;Failure to comply with clause 8.5 may amount to a repudiator beach, and may effect a termination.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.6<\\/span>&nbsp;Upon termination, all fees prior to and after the termination become payable immediately. This may also include payment for any months remaining on the contract.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.7<\\/span>&nbsp;All card transactions are subject to a processing charge of 3%. You agree to accept this fee if and when you authorize card transactions.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.8<\\/span>&nbsp;The company may from time to time within the lifetime of the contract adjust its charges to come in line with national insurance contributions, value added tax, increased prices on cleaning products, minimum wage or any other levy by the government department(s) which it sees fit to pass onto the Client. We will communicate any charge or price adjustments not less than 30 days before it comes into effect. Any disputes resulting from the adjustments should be communicated to the accounts department within 21 days of receiving the notice. If we do not hear from you within 21 days of the notice, we will determine that you have accepted the charge by acquiesce, and the charges becomes payable on the 30th day after notice.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.9<\\/span>&nbsp;The Client agrees to and authorizes the Company to charge his\\/her debit\\/credit card any outstanding balances owed to the Company which is not paid within 30 days of the invoice date.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">8.10<\\/span>&nbsp;We will charge you a fee to change a quote once it has been accepted, or for any additional changes to the service once booked.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Payment<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">9.0<\\/span>&nbsp;We accept cash payments, bank transfer and cheque in UAE.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">9.1<\\/span>&nbsp;We reserve the right to nominate or change a method of payment to the client where three or more invoices are or have been over-due. We also reserve the right to: a) Change the accepted method of payment, or b) Choose to accept or reject a method of payment, or c) Nominate a method of payment to the client where we see it’s fit to do so. We will write to you confirming these changes if such provisions are affected.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">9.2<\\/span>&nbsp;Any \\\"bounced\\\" or dishonored cheque(s) will incur an administration fee per cheque.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Additional Services<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">10.0<\\/span>&nbsp;All additional services must be requested at least 48 hours in advance. The bookings Manager will confirm, or issue a quote for any additional services.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">10.1<\\/span>&nbsp;We cannot always guarantee prices and therefore quotes are valid for 7 days only. All quotes include VAT at the current rate.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">10.2<\\/span>&nbsp;On some occasions where it costs us money to provide you an additional service, we may request a deposit, or a proportion of the fees upfront.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Staff<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">11.0<\\/span>&nbsp;We may replace your regular cleaner at any time due to illness or change of circumstances in order to fulfill our obligations to you. We will exercise discretion when we allocate cleaners to perform the task and notify you as soon as we reasonably can.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">11.1<\\/span>&nbsp;All our staff are fully trained to handle the chemicals we use. We use a traffic light system to differentiate between chemicals therefore we request that ONLY fully trained persons should handle them. Improper use of chemicals can cause serious damage or injury.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Cancellation<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">Higitech Middle East Cleaning Services Cancellation Policy<br>Dear Higitech Middle East Valued Clients,<br>Greetings to you!<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">We would like to inform you about our new policies to be made regarding client rescheduling \\/cancellation. We\'re flexible. Feel free to skip or reschedule any booking for free, as long as you notify us at least 24 hours in advance. Later than that, and there is a fee as mentioned below in order to cover the administrative expenses.<\\/p><ol style=\\\"margin: 16px 0px; padding: 0px 0px 0px 25px; list-style: none;\\\"><li>a) If the booking is cancelled 24 hours prior, no charges will be applicable<\\/li><li>b) If the cancellation is done within 6 hours, 50 % of the total value will be levied.<\\/li><li>c) If the cancellation is done within 2 hours, client will be fully charged.<\\/li><li>d) In case the guest is not in the apartment, the room attendant will wait for maximum of 30 minutes and the full amount will be charged in case staff cannot get inside the apartment.<\\/li><\\/ol><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">Notification must be in written format and to be sent to&nbsp;<a href=\\\"mailto:info@higitech-me.com\\\" style=\\\"color: rgb(24, 35, 51); outline: none medium; transition: all 0.3s ease-in-out 0s;\\\">info@higitech-me.com<\\/a><\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Vouchers<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">13.0<\\/span>&nbsp;The agreement is made solely for the benefit of the client with the intention of providing an ongoing service, and therefore any vouchers, discounts, Group on deals, package deals, and promotional offers ARE NOT VALID in conjunction with this agreement.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">13.1<\\/span>&nbsp;Vouchers and package deals may be bought separately, and may be booked as additional services.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Claims and Refunds<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.0<\\/span>. We MUST receive your claim for damages in writing within 48 hours of the service delivery. This may mean you need to send it by 1st class next day delivery or a courier service. Unfortunately, we cannot accept claims by telephone and email.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.1<\\/span>&nbsp;The Client agrees that due to the nature of the service which the Company provides and for the sake of insurance and data integrity, it is fundamentally important that any claims for damage MUST be received in writing within 48 hours and providing evidence.<\\/p><ol style=\\\"margin: 16px 0px; padding: 0px 0px 0px 25px; list-style: none;\\\"><li>i) For clarity, if any damage occurs on a Wednesday at 2:00 PM, it must be received before Friday 2:00 PM. If it occurs on a Saturday it must be reported by Monday 12:00 PM (Midday) in order to be a valid claim. Failure to meet this requirement will invalidate your claim.<\\/li><li>ii) The Company may require entry to the premises within 24 hours of the claim being made to correct the problem, or investigate the claim. If we are able to offer you an immediate resolution, we will do so upon arrival. Any refunds or adjustments must be requested directly from the Company. We may consider certain factors in validating your claim.<\\/li><li>iii)Refunds will be done only through the Original Mode of Payment, refunds will be made back to the payment solution used initially by the customer. Please allow for up to 45days for the refund transfer to be completed.<\\/li><\\/ol><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\">iii) We encourage the practice of submitting your claim within the time frame specified, as it will minimize the risk of jeopardizing the investigation, or may prevent the client, or 3rd parties from causing further damage.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.2<\\/span>&nbsp;While the Company operatives make every effort to avoid accidents, sometimes it is inevitable. We will try as practical as possible to replace damaged or broken items with the identical replacement. We may substitute new for old, and in the event we cannot replace an identical match, we will compensate with another of similar quality or value. Any key replacement\\/locksmith fees are paid only if keys are lost by our operatives.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.3<\\/span>&nbsp;To minimize the risk of damage, the Company requests all irreplaceable items (whether monetarily or sentimentally valuable) be stored away and \\/or not cleaned by the cleaning operatives.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.4<\\/span>&nbsp;If the company’s staff member has caused damage to your property, we will repair the item at our expense. If the item cannot be repaired the Company will endeavor to replace the item with a like, or near value, if that is not practical, we will offer the client the current value of the item, providing that all the clients accounts has been settled.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.5<\\/span>&nbsp;The Company shall not be responsible for damage due to faulty and\\/or improper installation of any item. All surfaces (i.e., marble, granite, etc.) are assumed sealed and ready to clean without causing harm.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.6<\\/span>&nbsp;Your claim will be invalid if you have over-due balances outstanding.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">14.7<\\/span>&nbsp;Any attempt to commit insurance fraud or the use of false information to commit fraud will be reported to the police and may be prosecuted to the fullest extent permitted by law. We may also make a claim alongside the insurance provider for compensation. You agree to bear the cost of any legal action we take in that regard.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Complaints<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">15.0<\\/span>&nbsp;All complaints which DOES NOT involve damage or claims must be received in writing to Higitech Middle East Cleaning Services LLC; We must receive your complaint within 48 hours of the service delivery.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">15.1<\\/span>&nbsp;We will fully investigate any complaint and attempt to resolve it to the satisfaction of the Client, or alternatively to a reasonable standard.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">15.2<\\/span>&nbsp;If you have submitted a complaint, we may require access to the premises within 24 hours of the report to correct any short-comings, or to investigate. In such event we will give you prior notice.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Liability<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">16.0<\\/span>&nbsp;The Company shall not be liable under any circumstances for any loss, expense, damage, delay, costs or compensation (whether direct, indirect or consequential) which may be suffered or incurred by the Client arising from or in any way connected with:<\\/p><ul style=\\\"margin: 16px 0px; padding: 0px 0px 0px 25px; list-style: none;\\\"><li>a) Late arrival of Company operatives at the service address. The Company endeavors to be punctual, sometimes it is not within our control how the public transport system operates. Company operatives who arrive late due to transportation factors may entitle the client to re-schedule when the services cannot be performed.<\\/li><li>b) A cleaning job not completed due to the lack of cleaning materials, lack of hot water or electricity, or equipment not in full working order.<\\/li><li>c) Third party entering or present at the Client’s premises during the cleaning process.<\\/li><li>d) An existing damage to Client’s property in the form of old stains\\/burns\\/spillages etc. which cannot be cleaned\\/removed completely by the cleaning operative using the Client’s cleaning equipment and materials and in accordance with the industry standard cleaning methods as described in the Company’s method statements.<\\/li><li>e) Any damages caused by faulty\\/not in full working order equipment or materials supplied by the Client.<\\/li><li>f) Services not provided to the client because of dishonored cheques, payments, or overdue accounts.<\\/li><\\/ul><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">16.1<\\/span>&nbsp;We record all incoming and outgoing phone conversations for quality control, record keeping and back-referral for any inquiries or investigations.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Supplementary Terms<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.0<\\/span>&nbsp;The Company reserves the right to re-evaluate rates at any time should the Client’s initial list of tasks changes.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.1<\\/span>&nbsp;Amount of cleaning time required are estimated based on the average workspace area. Estimates are for indication purposes only and are not guaranteed, the actual time will depend on other factors during the cleaning; we tend to allow some flexibility with the time. Please note that one off cleans may take longer to complete due to longer intervals between cleaning sessions, number and type of cleaning tasks required. This may vary when compared to the regular maintenance cleaning of the same property.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.2<\\/span>&nbsp;The Company shall arrange an immediate replacement should an operative cannot attend a scheduled visit, and will inform the Client prior to the visit.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.3<\\/span>&nbsp;Post Construction Cleaning (After Builders Cleaning), After Events Cleaning or badly neglected workspaces may take up to three times longer than a well-maintained workspace requiring general cleaning. Therefore, the Company recommends our specialist cleaning services: After Builders Cleaning or Event Cleaning. These need to be requested as additional services.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.4<\\/span>&nbsp;The cleaning operatives are not allowed to hand wash any items of clothing belonging to the Client. The Company advises that our operatives can only use a washing machine for such tasks.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">7.5<\\/span>&nbsp;All fragile and items of sentimental value must be secured or removed prior to any cleaning job. We will not be responsible for damage where it was an obvious risk.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.6<\\/span>&nbsp;The cleaning operatives are not allowed to use or work with bleach or any product containing bleach. The Company advises the Client to avoid supplying such products to the cleaning operatives. The Company shall not be liable under any circumstances for any damages to Client’s property caused by bleach or products containing bleach.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">17.7<\\/span>&nbsp;The Company reserves the right to make changes to any part of these Terms and Conditions. We will notify you of such change. The Company may add to or alter these Terms and Conditions from time to time and any alterations or additions will apply to new business but not to existing contracts. Please refer to your copy of these Terms and Conditions, or alternatively you can request a copy by contacting the company.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Our Guarantee<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">18.0<\\/span>&nbsp;The Company has built its business and reputation by providing its clients with the best possible cleaning service available. For this reason, the Company offers you a guarantee. If you are not satisfied with the cleaning services provided, we will redo the job until you are satisfied and without charge.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Data Protection<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">19.0<\\/span>&nbsp;We operate a data protection policy, and we do not share your information with anyone, including third parties. However, where a warrant or an order is made in pursuance with fraud, or illegal activities we will make such information available to law enforcement officers.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">19.1<\\/span>&nbsp;We take privacy very seriously, we therefore request that any information obtained from us, or by our staff be held in the strictest confidence.<\\/p><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">19.2<\\/span>&nbsp;All parties agree to keep all information in regards to this agreement or service confidential and secure. An exception exists where that information must be disclosed to law enforcement agencies, regulatory bodies, or professional advisors where it is necessary for them to perform their obligations.<\\/p><\\/div><\\/h2><h2 style=\\\"margin-bottom: 15px; font-family: Poppins, Arial, Helvetica, sans-serif; font-weight: 600; line-height: 46px; color: rgb(24, 35, 51); font-size: 34px;\\\">Abuse \\/ Discrimination<\\/h2><h2><div class=\\\"mb-35\\\" style=\\\"color: rgb(141, 146, 151); font-family: Poppins, Tahoma, Geneva, sans-serif; font-size: 14px; margin-bottom: 35px !important;\\\"><p style=\\\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px;\\\"><span style=\\\"font-weight: 600;\\\">20.0<\\/span>&nbsp;We operate a zero-tolerance policy towards verbal, physical and sexual abuse of staff and customers. This includes intimidation, bullying, harassment, and discrimination in any form. We will prosecute or seek the maximum penalty under the law in the event of such abuse. Additionally, we may make a report to the police and seek compensation where we see fit.<\\/p><\\/div><\\/h2>\"}', 1, '2021-02-24 09:20:06', '2021-09-22 04:20:34'),
(3, '{\"en\":\"About Us\"}', '{\"en\":\"<p>Established in 1995, HIGITECH has been a synonym with service quality, professionalism, character and synergy. After expanding operations all over Europe, we were entrusted to carry forward the legacy in the Middle East in 2020.<\\/p><p><br><\\/p><p>Higi is reknowned growing company for its esteemed integrated facilities management services in the UAE. Our innovative approach to providing efficient and effective procedures and processes ensure Higi FM delivers with the highest level of competence and assurance, With a team of industry professionals. We offer the full range of Integrated Hard & Soft services across the UAE.<\\/p><p><br><\\/p><p>Higi has earned a solid reputation as a trusted provider of Integrated Facilities Management Services. We are able to draw upon our extensive local experience in Self delivering high quality services for a number of clients including Commercial , Residential Towers & Communities and Hotels.<\\/p>\"}', 1, '2021-09-23 01:37:06', '2021-09-23 01:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `discountables`
--

CREATE TABLE `discountables` (
  `id` int(10) UNSIGNED NOT NULL,
  `coupon_id` int(10) UNSIGNED NOT NULL,
  `discountable_type` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discountable_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `discountables`
--

INSERT INTO `discountables` (`id`, `coupon_id`, `discountable_type`, `discountable_id`) VALUES
(1, 1, 'App\\Models\\EService', 43),
(2, 1, 'App\\Models\\EProvider', 19),
(3, 1, 'App\\Models\\Category', 1);

-- --------------------------------------------------------

--
-- Table structure for table `earnings`
--

CREATE TABLE `earnings` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_provider_id` int(10) UNSIGNED DEFAULT NULL,
  `total_bookings` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `total_earning` double(10,2) NOT NULL DEFAULT 0.00,
  `admin_earning` double(10,2) NOT NULL DEFAULT 0.00,
  `e_provider_earning` double(10,2) NOT NULL DEFAULT 0.00,
  `taxes` double(10,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `earnings`
--

INSERT INTO `earnings` (`id`, `e_provider_id`, `total_bookings`, `total_earning`, `admin_earning`, `e_provider_earning`, `taxes`, `created_at`, `updated_at`) VALUES
(1, 19, 0, 0.00, 0.00, 0.00, 0.00, '2021-06-20 22:54:28', '2021-06-20 22:54:28');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_providers`
--

CREATE TABLE `e_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_provider_type_id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availability_range` double(9,2) DEFAULT 0.00,
  `available` tinyint(1) DEFAULT 1,
  `featured` tinyint(1) DEFAULT 0,
  `accepted` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_providers`
--

INSERT INTO `e_providers` (`id`, `name`, `e_provider_type_id`, `description`, `phone_number`, `mobile_number`, `availability_range`, `available`, `featured`, `accepted`, `created_at`, `updated_at`) VALUES
(19, '{\"en\":\"Higitech\"}', 2, '{\"en\":\"<p>Higitech<br><\\/p>\"}', NULL, NULL, 10.00, 1, 1, 1, '2021-06-20 22:54:28', '2021-06-23 02:38:05');

-- --------------------------------------------------------

--
-- Table structure for table `e_provider_addresses`
--

CREATE TABLE `e_provider_addresses` (
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `address_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_provider_payouts`
--

CREATE TABLE `e_provider_payouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `method` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT 0.00,
  `paid_date` datetime NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_provider_taxes`
--

CREATE TABLE `e_provider_taxes` (
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `tax_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_provider_taxes`
--

INSERT INTO `e_provider_taxes` (`e_provider_id`, `tax_id`) VALUES
(19, 6);

-- --------------------------------------------------------

--
-- Table structure for table `e_provider_types`
--

CREATE TABLE `e_provider_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission` double(5,2) NOT NULL DEFAULT 0.00,
  `disabled` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_provider_types`
--

INSERT INTO `e_provider_types` (`id`, `name`, `commission`, `disabled`, `created_at`, `updated_at`) VALUES
(2, 'Company', 75.00, 0, '2021-01-13 14:05:35', '2021-02-01 17:22:19'),
(3, 'Freelancer', 50.00, 0, '2021-01-17 15:27:18', '2021-02-24 14:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `e_provider_users`
--

CREATE TABLE `e_provider_users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `e_services`
--

CREATE TABLE `e_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `discount_price` double(10,2) DEFAULT 0.00,
  `price_unit` enum('hourly','fixed') COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_unit` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` tinyint(1) DEFAULT 0,
  `available` tinyint(1) DEFAULT 1,
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `time_slot_start` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_slot_end` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_services`
--

INSERT INTO `e_services` (`id`, `name`, `price`, `discount_price`, `price_unit`, `quantity_unit`, `duration`, `description`, `featured`, `available`, `e_provider_id`, `time_slot_start`, `time_slot_end`, `created_at`, `updated_at`) VALUES
(78, '{\"en\":\"Ac Soft Cleaning\"}', 169.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>Keeps Indoor AC units in top working condition.<\\/p><p>Recommended every 3-4 Months.<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-02-28 02:31:48', '2022-03-02 03:35:40'),
(79, '{\"en\":\"AC Duct Cleaning\"}', 399.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>When in doubt that the indoor Air Quality has been compromised.<\\/p><p>Recommended once every year.<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-02-28 03:36:32', '2022-03-02 03:36:08'),
(80, '{\"en\":\"AC Deep Cleaning\"}', 299.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>An Extension of AC soft cleaning that involves Cleaning & disinfection of the AC coil.<\\/p><p>Recommended  every 6-8 months<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-02-28 05:19:50', '2022-03-02 03:36:26'),
(81, '{\"en\":\"AC Repair\"}', 349.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>AC is malfunctioning, Non-operational, Creating abnormal noise or leaking excessively.<\\/p><p>Room Temperature is higher than the set point(25*c or higher)<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 00:42:55', '2022-03-02 03:36:52'),
(82, '{\"en\":\"AC Maintenance\"}', 299.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>When your AC is not performing as effective as it used to be.<\\/p><p>Your AC is running normally but not achieving the set temperature.<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 00:49:16', '2022-03-02 03:37:17'),
(83, '{\"en\":\"Electrical Maintenance\"}', 105.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p>The price depends on the quantity of electrical maintenance and the \\r\\nnumber of working hours, and the customer can choose the quantity of \\r\\nelectrical maintenance and the number of working hours, and the price is \\r\\nmultiplied by the quantity and number of hours<br><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 01:13:29', '2022-03-02 03:37:38'),
(84, '{\"en\":\"Handyman\"}', 105.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p>The price depends on the quantity of Handymen and the number of \\r\\nworking hours, and the customer can choose the quantity of handymen \\r\\nand the number of working hours, and the price is multiplied by the \\r\\nquantity and number of hours<br><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 01:14:54', '2022-03-02 03:38:19'),
(85, '{\"en\":\"AC Annual Maintenance(Silver Package)\"}', 4000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two times at year, Periodic Maintenance of the Air conditioner,\\r\\nincluding Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two Free visits per months       <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<\\/span><o:p><\\/o:p><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:02:42', '2022-03-02 03:39:06'),
(86, '{\"en\":\"Electrical  Annual service &Maintenance (Silver Package)\"}', 4000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p class=\\\"MsoNormal\\\"><o:p> <\\/o:p><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two times at year, Periodic Maintenance of the Air conditioner,\\r\\nincluding Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two Free visits per months       <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\">\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<\\/span><o:p><\\/o:p><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:13:59', '2022-03-02 03:39:40'),
(87, '{\"en\":\"Plumbing Annual service &Maintenance (Silver Package)\"}', 4000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two times at year, Periodic Maintenance of the Air conditioner,\\r\\nincluding Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two Free visits per months       <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\">\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<\\/span><o:p><\\/o:p><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:16:00', '2022-03-02 03:39:59'),
(88, '{\"en\":\"AC\\/PLUMBING\\/ELECTRICAL Repair\"}', 4000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two times at year, Periodic Maintenance of the Air conditioner,\\r\\nincluding Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Two Free visits per months       <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\">\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<\\/span><o:p><\\/o:p><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:24:23', '2022-03-02 03:40:21'),
(89, '{\"en\":\"CLOG\"}', 105.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>CLOG<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:31:51', '2022-03-02 03:40:49'),
(90, '{\"en\":\"LEAK\"}', 105.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>LEAK<\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:32:39', '2022-03-02 03:42:23'),
(91, '{\"en\":\"Water Heater\"}', 105.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>Water Heater<br><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:33:32', '2022-03-02 03:42:45'),
(92, '{\"en\":\"Hand Shower\"}', 105.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>Hand Shower<br><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:35:36', '2022-03-02 03:43:32'),
(93, '{\"en\":\"Pump\"}', 200.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p>Pump<br><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-01 03:36:21', '2022-03-02 03:44:15'),
(95, '{\"en\":\"AC Annual service &Maintenance (Gold Package)\"}', 6000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three times at year, Periodic Maintenance of the Air\\r\\nconditioner, including Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three Free visits per\\r\\nmonths    <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<o:p><\\/o:p><\\/span><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-02 03:23:50', '2022-03-02 03:44:48'),
(96, '{\"en\":\"Electrical Annual service &Maintenance (Gold Package)\"}', 6000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three times at year, Periodic Maintenance of the Air\\r\\nconditioner, including Freon filling & cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three Free visits per\\r\\nmonths    <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n& Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits & Signature villas.<o:p><\\/o:p><\\/span><\\/p><p>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<o:p><\\/o:p><\\/span><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-02 03:25:26', '2022-03-02 03:45:30'),
(97, '{\"en\":\"Plumbing Annual service &Maintenance (Gold Package)\"}', 6000.00, NULL, 'hourly', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three times at year, Periodic Maintenance of the Air\\r\\nconditioner, including Freon filling &amp; cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three Free visits per\\r\\nmonths&nbsp;&nbsp;&nbsp; <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n&amp; Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits &amp; Signature villas.<o:p><\\/o:p><\\/span><\\/p><p>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<o:p><\\/o:p><\\/span><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-02 03:31:42', '2022-03-02 03:31:42'),
(98, '{\"en\":\"AC\\/PLUMBING\\/ELECTRICAL Repair Annual service &Maintenance (Gold Package)\"}', 6000.00, NULL, 'fixed', NULL, NULL, '{\"en\":\"<p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three times at year, Periodic Maintenance of the Air\\r\\nconditioner, including Freon filling &amp; cleaning.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Three Free visits per\\r\\nmonths&nbsp;&nbsp;&nbsp; <o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Optional add-ons: TANK\\r\\nCLEANING,WINDOWS CLEANING ,AC DUCT CLEANING,POOL CLEANING,HANDYMAN.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Additional charges apply\\r\\nfor:-<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Modifications, Repair\\r\\n&amp; Parts.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Inaccessible equipment<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Work height above 3m or\\r\\nrequiring scaffolding.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Add on for cleaning pools\\r\\nwith surface area exceeding 600sqft.<o:p><\\/o:p><\\/span><\\/p><p style=\\\"margin-top: 0cm; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Extra- large, Non standard\\r\\nunits &amp; Signature villas.<o:p><\\/o:p><\\/span><\\/p><p>\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n\\r\\n<\\/p><p class=\\\"MsoNormal\\\"><span style=\\\"font-family: Arial, sans-serif;\\\">Non-\\r\\nstandard repairs in accordance with NOVO.<o:p><\\/o:p><\\/span><\\/p>\"}', 0, 1, 19, '09:00', '06:00', '2022-03-02 03:34:36', '2022-03-02 03:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `e_service_categories`
--

CREATE TABLE `e_service_categories` (
  `e_service_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `e_service_categories`
--

INSERT INTO `e_service_categories` (`e_service_id`, `category_id`) VALUES
(78, 7),
(79, 7),
(80, 7),
(81, 7),
(82, 7),
(83, 13),
(84, 10),
(85, 17),
(86, 17),
(87, 17),
(88, 17),
(89, 8),
(90, 8),
(91, 8),
(92, 8),
(93, 8),
(95, 17),
(96, 17),
(97, 17),
(98, 17);

-- --------------------------------------------------------

--
-- Table structure for table `e_service_reviews`
--

CREATE TABLE `e_service_reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` decimal(3,2) NOT NULL DEFAULT 0.00,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `e_service_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq_category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_categories`
--

CREATE TABLE `faq_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_categories`
--

INSERT INTO `faq_categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Service\"}', '2021-06-19 22:27:17', '2021-06-19 22:27:17'),
(2, '{\"en\":\"Service\"}', '2021-06-19 22:27:17', '2021-06-19 22:27:17'),
(3, '{\"en\":\"Service\"}', '2021-06-19 22:27:17', '2021-06-19 22:27:17'),
(4, '{\"en\":\"Service\"}', '2021-06-19 22:27:17', '2021-06-19 22:27:17'),
(5, '{\"en\":\"Service\"}', '2021-06-19 22:27:17', '2021-06-19 22:27:17');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(10) UNSIGNED NOT NULL,
  `e_service_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_options`
--

CREATE TABLE `favorite_options` (
  `option_id` int(10) UNSIGNED NOT NULL,
  `favorite_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `e_provider_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `collection_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `custom_properties` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsive_images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(7, 'App\\Models\\PaymentMethod', 6, 'logo', 'pay_pickup', 'pay_pickup.png', 'image/png', 'public', 11712, '[]', '{\"uuid\":\"5e06e7ca-ac33-413c-9ab0-6fd4e3083cc1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 7, '2021-05-07 14:03:58', '2021-05-07 14:03:58'),
(9, 'App\\Models\\PaymentMethod', 7, 'logo', 'stripe-logo', 'stripe-logo.png', 'image/png', 'public', 5436, '[]', '{\"uuid\":\"bd448a36-8a5e-4c85-8d6e-c356843429c8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 9, '2021-05-07 14:04:23', '2021-05-07 14:04:23'),
(10, 'App\\Models\\Upload', 1, 'app_logo', 'ic_launcher', 'ic_launcher.png', 'image/png', 'public', 13817, '[]', '{\"uuid\":\"3cd5a4da-d79d-419d-8ce1-3f040d5b01d8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 10, '2021-06-20 00:31:52', '2021-06-20 00:31:52'),
(11, 'App\\Models\\Upload', 2, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"5902ab9b-9b9f-4733-a4e0-1d3801379f15\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 11, '2021-06-20 01:23:41', '2021-06-20 01:23:44'),
(13, 'App\\Models\\Upload', 3, 'image', 'Deep Cleaning Service', 'Deep-Cleaning-Service.jpg', 'image/jpeg', 'public', 710472, '[]', '{\"uuid\":\"e2f668ab-0c9a-48cd-8c76-76b95293bd4b\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 13, '2021-06-20 01:25:31', '2021-06-20 01:25:33'),
(15, 'App\\Models\\Upload', 4, 'image', 'Furniture icon-02', 'Furniture-icon-02.jpg', 'image/jpeg', 'public', 65359, '[]', '{\"uuid\":\"04f5fdf6-cb81-496d-9498-2665bb01cd6a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 15, '2021-06-20 01:26:51', '2021-06-20 01:26:51'),
(17, 'App\\Models\\Upload', 5, 'image', 'ic_launcher', 'ic_launcher.png', 'image/png', 'public', 13817, '[]', '{\"uuid\":\"6aeed207-2ed5-444d-80a7-abe790654cb8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 17, '2021-06-20 01:56:21', '2021-06-20 01:56:21'),
(18, 'App\\Models\\Upload', 6, 'image', 'ic_launcher', 'ic_launcher.png', 'image/png', 'public', 13817, '[]', '{\"uuid\":\"44424f0c-901b-4e75-8165-d69418a0ea67\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 18, '2021-06-20 01:59:44', '2021-06-20 01:59:44'),
(19, 'App\\Models\\Upload', 7, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"e2156770-ed87-4b1c-ae19-5d87d013bb7c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 19, '2021-06-20 04:43:16', '2021-06-20 04:43:19'),
(20, 'App\\Models\\Upload', 8, 'image', 'Steam Deep Cleaning', 'Steam-Deep-Cleaning.jpg', 'image/jpeg', 'public', 1148046, '[]', '{\"uuid\":\"8f8c57d0-e45d-4109-9744-94b59377c964\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 20, '2021-06-20 09:05:41', '2021-06-20 09:05:44'),
(22, 'App\\Models\\Upload', 9, 'image', 'Tank Cleaning', 'Tank-Cleaning.jpg', 'image/jpeg', 'public', 549642, '[]', '{\"uuid\":\"1d46df66-e057-4863-ad67-502ecf548c84\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 22, '2021-06-20 09:05:59', '2021-06-20 09:06:01'),
(24, 'App\\Models\\Upload', 10, 'image', 'Air Conditioning', 'Air-Conditioning.jpg', 'image/jpeg', 'public', 656270, '[]', '{\"uuid\":\"ee0b9b49-31cb-4f86-8141-8916e204a2a3\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 24, '2021-06-21 02:30:41', '2021-06-21 02:30:44'),
(26, 'App\\Models\\Upload', 11, 'image', 'Plumbing', 'Plumbing.jpg', 'image/jpeg', 'public', 630023, '[]', '{\"uuid\":\"ccf02634-1492-492e-a197-a2ca04ddae5d\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 26, '2021-06-21 02:30:58', '2021-06-21 02:31:00'),
(27, 'App\\Models\\Upload', 12, 'image', 'Plumbing', 'Plumbing.jpg', 'image/jpeg', 'public', 630023, '[]', '{\"uuid\":\"4d26cd8d-5d0c-473e-809b-dcc6289b601a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 27, '2021-06-21 02:31:11', '2021-06-21 02:31:13'),
(29, 'App\\Models\\Upload', 13, 'image', 'Electrical', 'Electrical.jpg', 'image/jpeg', 'public', 960405, '[]', '{\"uuid\":\"0142d5cb-367b-4318-a4b4-168eaae2760f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 29, '2021-06-21 03:30:01', '2021-06-21 03:30:05'),
(31, 'App\\Models\\Upload', 14, 'image', 'Painting', 'Painting.jpg', 'image/jpeg', 'public', 663585, '[]', '{\"uuid\":\"bc2ef0eb-d284-48bb-ad90-3abff84899ad\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 31, '2021-06-21 04:00:18', '2021-06-21 04:00:21'),
(33, 'App\\Models\\Upload', 15, 'image', 'Disinfection', 'Disinfection.jpg', 'image/jpeg', 'public', 932227, '[]', '{\"uuid\":\"230d5f03-3274-40a0-84b2-13e066dc4a16\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 33, '2021-06-21 04:00:36', '2021-06-21 04:00:38'),
(35, 'App\\Models\\Upload', 16, 'image', 'AMC', 'AMC.png', 'image/png', 'public', 35299, '[]', '{\"uuid\":\"a0a5c8a6-2377-4a73-95ae-4332c94a0f92\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 35, '2021-06-21 04:30:45', '2021-06-21 04:30:45'),
(37, 'App\\Models\\Upload', 17, 'image', 'AMC(1)', 'AMC(1).png', 'image/png', 'public', 33144, '[]', '{\"uuid\":\"9f622dfe-8efa-4e43-9ae3-dff65819e962\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 37, '2021-06-21 04:39:46', '2021-06-21 04:39:47'),
(39, 'App\\Models\\Upload', 18, 'image', 'Pool', 'Pool.png', 'image/png', 'public', 67178, '[]', '{\"uuid\":\"912240a5-8a8f-4bf4-a8b1-055062279e34\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 39, '2021-06-21 04:40:59', '2021-06-21 04:40:59'),
(41, 'App\\Models\\Upload', 19, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"cfabba5e-1c9d-483a-9a8a-cad5458a7438\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 41, '2021-06-21 04:41:50', '2021-06-21 04:41:53'),
(42, 'App\\Models\\Upload', 20, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"40e775e7-6ce0-4812-9c96-289f57485143\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 42, '2021-06-21 04:42:49', '2021-06-21 04:42:51'),
(44, 'App\\Models\\Upload', 21, 'image', '2', '2.png', 'image/png', 'public', 30637, '[]', '{\"uuid\":\"3b2336b1-d92f-4dd9-a51f-f614b0eab956\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 44, '2021-06-21 04:44:57', '2021-06-21 04:44:57'),
(46, 'App\\Models\\Upload', 22, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"cc49c823-d38c-4446-ade4-fc7d17deeeb6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 46, '2021-06-21 05:36:19', '2021-06-21 05:36:19'),
(47, 'App\\Models\\Option', 104, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"cc49c823-d38c-4446-ade4-fc7d17deeeb6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 47, '2021-06-21 06:08:41', '2021-06-21 06:08:41'),
(48, 'App\\Models\\Upload', 23, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"374095bb-3161-4744-b60b-17013c9ebaca\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 48, '2021-06-21 11:21:40', '2021-06-21 11:21:43'),
(49, 'App\\Models\\Upload', 24, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"e10f2544-eb00-4e4e-b447-d145d6fe1342\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 49, '2021-06-21 11:22:11', '2021-06-21 11:22:13'),
(50, 'App\\Models\\Upload', 25, 'image', 'Home Cleaning Service', 'Home-Cleaning-Service.jpg', 'image/jpeg', 'public', 1118046, '[]', '{\"uuid\":\"5c3378f2-33f4-4093-ae80-a52cae8333fe\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 50, '2021-06-21 11:24:57', '2021-06-21 11:25:00'),
(52, 'App\\Models\\Upload', 26, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"b8710845-2221-449d-b23d-2dd2e2a0c947\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 52, '2021-06-21 11:33:59', '2021-06-21 11:33:59'),
(53, 'App\\Models\\Option', 103, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"b8710845-2221-449d-b23d-2dd2e2a0c947\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 53, '2021-06-21 11:34:05', '2021-06-21 11:34:05'),
(54, 'App\\Models\\Upload', 27, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"2736ca7b-c0a6-4f69-bd99-a0ded0fc0d2e\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 54, '2021-06-21 11:34:27', '2021-06-21 11:34:28'),
(55, 'App\\Models\\Option', 105, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"2736ca7b-c0a6-4f69-bd99-a0ded0fc0d2e\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 55, '2021-06-21 11:35:22', '2021-06-21 11:35:22'),
(56, 'App\\Models\\Upload', 28, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"ba1de726-2fbc-4de3-8084-2ea1a9a67029\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 56, '2021-06-22 01:38:50', '2021-06-22 01:38:51'),
(57, 'App\\Models\\Option', 106, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"ba1de726-2fbc-4de3-8084-2ea1a9a67029\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 57, '2021-06-22 01:39:39', '2021-06-22 01:39:39'),
(58, 'App\\Models\\Upload', 29, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"a842dd07-0cfc-4487-b52f-ecf621b1e5d6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 58, '2021-06-22 01:40:30', '2021-06-22 01:40:30'),
(59, 'App\\Models\\Option', 107, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"a842dd07-0cfc-4487-b52f-ecf621b1e5d6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 59, '2021-06-22 01:41:00', '2021-06-22 01:41:00'),
(60, 'App\\Models\\Upload', 30, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"e671183f-8473-4d14-b4c6-50b572cf25de\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 60, '2021-06-22 03:52:00', '2021-06-22 03:52:01'),
(61, 'App\\Models\\Option', 108, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"e671183f-8473-4d14-b4c6-50b572cf25de\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 61, '2021-06-22 03:52:44', '2021-06-22 03:52:44'),
(62, 'App\\Models\\Upload', 31, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"1f76c4f2-9b86-4738-b5fa-47f163fad3d8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 62, '2021-06-22 05:05:55', '2021-06-22 05:05:56'),
(63, 'App\\Models\\Option', 109, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"1f76c4f2-9b86-4738-b5fa-47f163fad3d8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 63, '2021-06-22 05:06:29', '2021-06-22 05:06:29'),
(64, 'App\\Models\\Upload', 32, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"12cad228-dba3-48c6-a90a-11a792d2c4cb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 64, '2021-06-22 05:06:57', '2021-06-22 05:06:57'),
(65, 'App\\Models\\Option', 110, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"12cad228-dba3-48c6-a90a-11a792d2c4cb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 65, '2021-06-22 05:07:31', '2021-06-22 05:07:31'),
(66, 'App\\Models\\Upload', 33, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"535ffc49-ead4-4647-a64c-76e2130b201a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 66, '2021-06-22 05:07:47', '2021-06-22 05:07:48'),
(67, 'App\\Models\\Option', 111, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"535ffc49-ead4-4647-a64c-76e2130b201a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 67, '2021-06-22 05:08:23', '2021-06-22 05:08:23'),
(68, 'App\\Models\\Upload', 34, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"ecbff71e-22ef-42bc-b8bf-79c07aa36293\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 68, '2021-06-22 05:08:46', '2021-06-22 05:08:47'),
(69, 'App\\Models\\Option', 112, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"ecbff71e-22ef-42bc-b8bf-79c07aa36293\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 69, '2021-06-22 06:40:28', '2021-06-22 06:40:28'),
(70, 'App\\Models\\Upload', 35, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"ee415a1a-582a-44fc-8f8e-95467b32d2d0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 70, '2021-06-22 12:16:10', '2021-06-22 12:16:10'),
(71, 'App\\Models\\Option', 113, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"ee415a1a-582a-44fc-8f8e-95467b32d2d0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 71, '2021-06-22 12:16:33', '2021-06-22 12:16:33'),
(72, 'App\\Models\\Upload', 36, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"79ab618d-fca2-4fe7-92de-58aa48054524\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 72, '2021-06-22 12:17:18', '2021-06-22 12:17:18'),
(73, 'App\\Models\\Option', 114, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"79ab618d-fca2-4fe7-92de-58aa48054524\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 73, '2021-06-22 12:17:46', '2021-06-22 12:17:46'),
(74, 'App\\Models\\Upload', 37, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"b8225a15-841c-4fa7-a951-68ef8ef253bb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 74, '2021-06-22 12:18:43', '2021-06-22 12:18:43'),
(75, 'App\\Models\\Option', 115, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"b8225a15-841c-4fa7-a951-68ef8ef253bb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 75, '2021-06-22 12:18:56', '2021-06-22 12:18:56'),
(76, 'App\\Models\\Upload', 38, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"2b561d5a-6f81-4265-b1e7-3f1a0880cf3f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 76, '2021-06-22 12:19:17', '2021-06-22 12:19:17'),
(77, 'App\\Models\\Option', 116, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"2b561d5a-6f81-4265-b1e7-3f1a0880cf3f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 77, '2021-06-22 12:19:33', '2021-06-22 12:19:33'),
(78, 'App\\Models\\Upload', 39, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"9b7fcec1-cbdd-4d40-91f5-23306a54f2dc\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 78, '2021-06-22 12:47:24', '2021-06-22 12:47:24'),
(79, 'App\\Models\\Option', 117, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"9b7fcec1-cbdd-4d40-91f5-23306a54f2dc\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 79, '2021-06-22 12:56:40', '2021-06-22 12:56:40'),
(80, 'App\\Models\\Upload', 40, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"afc46254-098f-42d5-b21b-5856dc45bb59\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 80, '2021-06-22 12:57:35', '2021-06-22 12:57:35'),
(81, 'App\\Models\\Option', 118, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"afc46254-098f-42d5-b21b-5856dc45bb59\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 81, '2021-06-22 12:57:54', '2021-06-22 12:57:54'),
(82, 'App\\Models\\Upload', 41, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"1c39e05c-cc2b-4128-b99f-b0c70094de29\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 82, '2021-06-22 12:59:50', '2021-06-22 12:59:50'),
(83, 'App\\Models\\Option', 119, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"1c39e05c-cc2b-4128-b99f-b0c70094de29\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 83, '2021-06-22 13:00:17', '2021-06-22 13:00:17'),
(84, 'App\\Models\\Upload', 42, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"957a634a-998d-437c-ae6a-c4769c4284bf\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 84, '2021-06-22 13:00:39', '2021-06-22 13:00:40'),
(85, 'App\\Models\\Option', 120, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"957a634a-998d-437c-ae6a-c4769c4284bf\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 85, '2021-06-22 13:01:13', '2021-06-22 13:01:13'),
(86, 'App\\Models\\Upload', 43, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"6e4c474d-607e-4074-a876-b32fdd1207e3\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 86, '2021-06-22 13:01:39', '2021-06-22 13:01:40'),
(87, 'App\\Models\\Option', 121, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"6e4c474d-607e-4074-a876-b32fdd1207e3\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 87, '2021-06-22 13:01:57', '2021-06-22 13:01:57'),
(88, 'App\\Models\\Upload', 44, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"6e1fd7a1-88ff-4372-989a-d2b1dec5ad54\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 88, '2021-06-22 13:02:14', '2021-06-22 13:02:14'),
(89, 'App\\Models\\Option', 122, 'image', '8', '8.png', 'image/png', 'public', 34040, '[]', '{\"uuid\":\"6e1fd7a1-88ff-4372-989a-d2b1dec5ad54\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 89, '2021-06-22 13:02:37', '2021-06-22 13:02:37'),
(90, 'App\\Models\\Upload', 45, 'image', 'apartment-deep', 'apartment-deep.jpg', 'image/jpeg', 'public', 22179, '[]', '{\"uuid\":\"efd65ac8-6462-478f-93d4-e026fdc1653a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 90, '2021-06-22 13:03:14', '2021-06-22 13:03:14'),
(92, 'App\\Models\\Upload', 46, 'image', 'Villa', 'Villa.png', 'image/png', 'public', 44584, '[]', '{\"uuid\":\"f261d923-c106-4837-9ee2-e67e34736a35\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 92, '2021-06-22 13:17:12', '2021-06-22 13:17:12'),
(94, 'App\\Models\\Upload', 47, 'image', 'S', 'S.png', 'image/png', 'public', 35256, '[]', '{\"uuid\":\"6582694a-5824-49c3-a8bf-4ae37deaa432\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 94, '2021-06-22 13:20:07', '2021-06-22 13:20:08'),
(95, 'App\\Models\\Option', 123, 'image', 'S', 'S.png', 'image/png', 'public', 35256, '[]', '{\"uuid\":\"6582694a-5824-49c3-a8bf-4ae37deaa432\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 95, '2021-06-22 13:20:46', '2021-06-22 13:20:46'),
(96, 'App\\Models\\Upload', 48, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"5e34b699-819e-4843-9d4f-bd69cf26e8f0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 96, '2021-06-22 13:22:17', '2021-06-22 13:22:17'),
(97, 'App\\Models\\Option', 124, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"5e34b699-819e-4843-9d4f-bd69cf26e8f0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 97, '2021-06-22 13:22:43', '2021-06-22 13:22:43'),
(98, 'App\\Models\\Upload', 49, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"5ab5608c-101a-40a6-92be-d83feac3521f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 98, '2021-06-22 13:23:15', '2021-06-22 13:23:15'),
(99, 'App\\Models\\Option', 125, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"5ab5608c-101a-40a6-92be-d83feac3521f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 99, '2021-06-22 13:23:24', '2021-06-22 13:23:24'),
(100, 'App\\Models\\Upload', 50, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"b55c973f-d0d4-4263-9e91-67f9e5f1d9f4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 100, '2021-06-22 13:24:18', '2021-06-22 13:24:18'),
(101, 'App\\Models\\Option', 126, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"b55c973f-d0d4-4263-9e91-67f9e5f1d9f4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 101, '2021-06-22 13:24:28', '2021-06-22 13:24:28'),
(102, 'App\\Models\\Upload', 51, 'image', 'P', 'P.png', 'image/png', 'public', 18285, '[]', '{\"uuid\":\"401d0f1e-47df-49d0-85fd-d08d85d16b91\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 102, '2021-06-22 13:26:04', '2021-06-22 13:26:04'),
(103, 'App\\Models\\Option', 127, 'image', 'P', 'P.png', 'image/png', 'public', 18285, '[]', '{\"uuid\":\"401d0f1e-47df-49d0-85fd-d08d85d16b91\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 103, '2021-06-22 13:26:16', '2021-06-22 13:26:16'),
(104, 'App\\Models\\Upload', 52, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"fc17f54f-1558-4f70-bf2e-547ba30796bd\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 104, '2021-06-22 13:26:53', '2021-06-22 13:26:53'),
(105, 'App\\Models\\Option', 128, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"fc17f54f-1558-4f70-bf2e-547ba30796bd\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 105, '2021-06-22 13:27:11', '2021-06-22 13:27:11'),
(106, 'App\\Models\\Upload', 53, 'image', '2', '2.png', 'image/png', 'public', 30637, '[]', '{\"uuid\":\"52e00ed4-7c06-49b7-9d9f-a7c9d1bbe69c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 106, '2021-06-22 13:27:48', '2021-06-22 13:27:48'),
(107, 'App\\Models\\Option', 129, 'image', '2', '2.png', 'image/png', 'public', 30637, '[]', '{\"uuid\":\"52e00ed4-7c06-49b7-9d9f-a7c9d1bbe69c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 107, '2021-06-22 13:28:02', '2021-06-22 13:28:02'),
(108, 'App\\Models\\Upload', 54, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"3bc1c8a4-8b21-40c2-90b7-981d9043d482\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 108, '2021-06-22 13:28:32', '2021-06-22 13:28:33'),
(109, 'App\\Models\\Option', 130, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"3bc1c8a4-8b21-40c2-90b7-981d9043d482\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 109, '2021-06-22 13:28:54', '2021-06-22 13:28:54'),
(110, 'App\\Models\\Upload', 55, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"32251e0a-4cd0-4268-ace0-3b069484e946\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 110, '2021-06-22 13:29:43', '2021-06-22 13:29:43'),
(111, 'App\\Models\\Option', 131, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"32251e0a-4cd0-4268-ace0-3b069484e946\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 111, '2021-06-22 13:30:04', '2021-06-22 13:30:04'),
(112, 'App\\Models\\Upload', 56, 'image', '5', '5.png', 'image/png', 'public', 24330, '[]', '{\"uuid\":\"6fa0423c-ff4a-434f-9f24-ff79fc92674c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 112, '2021-06-22 13:32:02', '2021-06-22 13:32:02'),
(113, 'App\\Models\\Option', 132, 'image', '5', '5.png', 'image/png', 'public', 24330, '[]', '{\"uuid\":\"6fa0423c-ff4a-434f-9f24-ff79fc92674c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 113, '2021-06-22 13:32:15', '2021-06-22 13:32:15'),
(114, 'App\\Models\\Upload', 57, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"a4858572-ec8d-465f-a7a4-f6f65b8e05f4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 114, '2021-06-22 13:33:12', '2021-06-22 13:33:12'),
(115, 'App\\Models\\Option', 133, 'image', '6', '6.png', 'image/png', 'public', 33765, '[]', '{\"uuid\":\"a4858572-ec8d-465f-a7a4-f6f65b8e05f4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 115, '2021-06-22 13:33:28', '2021-06-22 13:33:28'),
(116, 'App\\Models\\Upload', 58, 'image', 'S', 'S.png', 'image/png', 'public', 35256, '[]', '{\"uuid\":\"7f6a20d8-e029-467a-b01b-d5616de5f673\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 116, '2021-06-22 13:40:31', '2021-06-22 13:40:31'),
(118, 'App\\Models\\Upload', 59, 'image', 'Sofa', 'Sofa.png', 'image/png', 'public', 23970, '[]', '{\"uuid\":\"744f537d-f361-4bce-b2b8-d2e7c1efb1ed\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 117, '2021-06-22 13:41:49', '2021-06-22 13:41:49'),
(120, 'App\\Models\\Upload', 60, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"107ea722-4173-498d-b1c6-756f9afdba5f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 119, '2021-06-22 13:43:11', '2021-06-22 13:43:11'),
(121, 'App\\Models\\Option', 134, 'image', '1', '1.png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"107ea722-4173-498d-b1c6-756f9afdba5f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 120, '2021-06-22 13:43:53', '2021-06-22 13:43:53'),
(122, 'App\\Models\\Upload', 61, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"92f181d2-dc79-4dc2-8d76-a8f6d10fb230\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 121, '2021-06-23 02:16:22', '2021-06-23 02:16:23'),
(123, 'App\\Models\\Option', 135, 'image', '2(1)', '2(1).png', 'image/png', 'public', 26899, '[]', '{\"uuid\":\"92f181d2-dc79-4dc2-8d76-a8f6d10fb230\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 122, '2021-06-23 02:16:56', '2021-06-23 02:16:56'),
(124, 'App\\Models\\Upload', 62, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"d05be5f9-48d2-4354-947d-a01ae11e55bf\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 123, '2021-06-23 02:17:23', '2021-06-23 02:17:23'),
(125, 'App\\Models\\Option', 136, 'image', '3', '3.jpg', 'image/jpeg', 'public', 59393, '[]', '{\"uuid\":\"d05be5f9-48d2-4354-947d-a01ae11e55bf\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 124, '2021-06-23 02:17:39', '2021-06-23 02:17:39'),
(126, 'App\\Models\\Upload', 63, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"adf5bf42-eb67-41a0-8f9d-dee1ee561322\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 125, '2021-06-23 02:18:37', '2021-06-23 02:18:37'),
(127, 'App\\Models\\Option', 137, 'image', '4', '4.png', 'image/png', 'public', 18877, '[]', '{\"uuid\":\"adf5bf42-eb67-41a0-8f9d-dee1ee561322\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 126, '2021-06-23 02:18:58', '2021-06-23 02:18:58'),
(128, 'App\\Models\\Upload', 64, 'image', 'L shaped', 'L-shaped.png', 'image/png', 'public', 8419, '[]', '{\"uuid\":\"abcc8df6-6bd3-4989-8fd1-baf1d56569a5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 127, '2021-06-23 02:20:56', '2021-06-23 02:20:56'),
(129, 'App\\Models\\Option', 138, 'image', 'L shaped', 'L-shaped.png', 'image/png', 'public', 8419, '[]', '{\"uuid\":\"abcc8df6-6bd3-4989-8fd1-baf1d56569a5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 128, '2021-06-23 02:21:37', '2021-06-23 02:21:37'),
(130, 'App\\Models\\Upload', 65, 'image', 'Mattress', 'Mattress.jpg', 'image/jpeg', 'public', 23097, '[]', '{\"uuid\":\"d199277a-a4d5-4679-bb96-508c8145eb29\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 129, '2021-06-23 03:47:04', '2021-06-23 03:47:04'),
(132, 'App\\Models\\Upload', 66, 'image', 'AC Deep Cleaning', 'AC-Deep-Cleaning.png', 'image/png', 'public', 17749, '[]', '{\"uuid\":\"a6cfb3e4-5728-4fd2-ac80-45cca3bfd384\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 131, '2021-07-18 08:50:36', '2021-07-18 08:50:37'),
(134, 'App\\Models\\Upload', 67, 'image', 'AC Duct Cleaning', 'AC-Duct-Cleaning.png', 'image/png', 'public', 29064, '[]', '{\"uuid\":\"318b89fe-2016-4c29-ab10-5ed51d1382d1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 133, '2021-07-18 08:50:52', '2021-07-18 08:50:52'),
(136, 'App\\Models\\Upload', 68, 'image', 'AC Maintenance', 'AC-Maintenance.png', 'image/png', 'public', 34030, '[]', '{\"uuid\":\"52dd2d5f-fc2e-4f24-8810-a8c3ca4d8336\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 135, '2021-07-18 08:51:13', '2021-07-18 08:51:13'),
(138, 'App\\Models\\Upload', 69, 'image', 'AC Repair', 'AC-Repair.png', 'image/png', 'public', 27096, '[]', '{\"uuid\":\"129b048d-9cc5-4ac8-8de8-4b6c14210805\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 137, '2021-07-18 08:51:24', '2021-07-18 08:51:25'),
(140, 'App\\Models\\Upload', 70, 'image', 'AC Soft Cleaning', 'AC-Soft-Cleaning.png', 'image/png', 'public', 48525, '[]', '{\"uuid\":\"a56cfb7c-ab7d-4b8b-8f30-ec43760ef3a4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 139, '2021-07-18 08:51:35', '2021-07-18 08:51:36'),
(142, 'App\\Models\\Upload', 71, 'image', 'Carpet Cleaning', 'Carpet-Cleaning.png', 'image/png', 'public', 20341, '[]', '{\"uuid\":\"9b865a47-2761-494a-9cde-9cae5f61e7e9\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 141, '2021-07-18 08:51:49', '2021-07-18 08:51:49'),
(144, 'App\\Models\\Upload', 72, 'logo', 'Telr-logo-green-rgb-2000w', 'Telr-logo-green-rgb-2000w.png', 'image/png', 'public', 30946, '[]', '{\"uuid\":\"9cf72585-aa7a-4d03-ad15-700afa15dcad\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 143, '2021-08-18 04:33:07', '2021-08-18 04:33:08'),
(145, 'App\\Models\\PaymentMethod', 7, 'logo', 'Telr-logo-green-rgb-2000w', 'Telr-logo-green-rgb-2000w.png', 'image/png', 'public', 30946, '[]', '{\"uuid\":\"9cf72585-aa7a-4d03-ad15-700afa15dcad\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 144, '2021-08-18 04:34:13', '2021-08-18 04:34:13'),
(146, 'App\\Models\\Upload', 73, 'logo', 'Telr-logo-green-rgb-2000w', 'Telr-logo-green-rgb-2000w.png', 'image/png', 'public', 30946, '[]', '{\"uuid\":\"eb286377-15e7-4b36-8187-009290745bca\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 145, '2021-08-18 04:34:32', '2021-08-18 04:34:32'),
(147, 'App\\Models\\PaymentMethod', 7, 'logo', 'Telr-logo-green-rgb-2000w', 'Telr-logo-green-rgb-2000w.png', 'image/png', 'public', 30946, '[]', '{\"uuid\":\"eb286377-15e7-4b36-8187-009290745bca\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 146, '2021-08-18 04:34:34', '2021-08-18 04:34:34'),
(148, 'App\\Models\\Upload', 74, 'logo', 'stripe-logo-icon', 'stripe-logo-icon.jpg', 'image/jpeg', 'public', 4948, '[]', '{\"uuid\":\"1ad3e8d2-0868-4d19-9644-bc0f7fa3b574\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 147, '2021-08-18 04:40:11', '2021-08-18 04:40:11'),
(149, 'App\\Models\\PaymentMethod', 7, 'logo', 'stripe-logo-icon', 'stripe-logo-icon.jpg', 'image/jpeg', 'public', 4948, '[]', '{\"uuid\":\"1ad3e8d2-0868-4d19-9644-bc0f7fa3b574\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 148, '2021-08-18 04:40:14', '2021-08-18 04:40:14'),
(150, 'App\\Models\\Upload', 75, 'image', 'S', 'S.png', 'image/png', 'public', 39075, '[]', '{\"uuid\":\"6fdb4adf-f370-4413-9647-488d4543f638\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 149, '2021-09-22 05:29:22', '2021-09-22 05:29:25'),
(152, 'App\\Models\\Upload', 76, 'image', 'A', 'A.png', 'image/png', 'public', 28913, '[]', '{\"uuid\":\"cd66afb8-c705-4a91-8b1c-75b4e466371f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 150, '2021-09-22 05:34:07', '2021-09-22 05:34:07'),
(154, 'App\\Models\\Upload', 77, 'image', 'S', 'S.png', 'image/png', 'public', 39075, '[]', '{\"uuid\":\"bf4db505-6de7-4a96-998c-961af268bde6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 152, '2021-09-22 05:34:57', '2021-09-22 05:34:58'),
(155, 'App\\Models\\Option', 168, 'image', 'S', 'S.png', 'image/png', 'public', 39075, '[]', '{\"uuid\":\"bf4db505-6de7-4a96-998c-961af268bde6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 153, '2021-09-22 05:35:18', '2021-09-22 05:35:18'),
(156, 'App\\Models\\Upload', 78, 'image', 'V', 'V.png', 'image/png', 'public', 27607, '[]', '{\"uuid\":\"ec8510e8-b7fb-415f-9b67-72b21e5abbb9\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 154, '2021-09-22 05:36:48', '2021-09-22 05:36:50'),
(158, 'App\\Models\\Upload', 79, 'image', '1(1)', '1(1).png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"5abd0aa0-4bcd-4912-9ea6-179b4fd1d972\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 156, '2021-09-22 05:37:35', '2021-09-22 05:37:35'),
(159, 'App\\Models\\Option', 167, 'image', '1(1)', '1(1).png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"5abd0aa0-4bcd-4912-9ea6-179b4fd1d972\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 157, '2021-09-22 05:37:36', '2021-09-22 05:37:36'),
(160, 'App\\Models\\Upload', 80, 'image', '1(1)', '1(1).png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"d444b843-00d0-4c51-ad1d-5c58308bc1fc\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 158, '2021-09-22 05:38:42', '2021-09-22 05:38:43'),
(161, 'App\\Models\\Option', 169, 'image', '1(1)', '1(1).png', 'image/png', 'public', 8423, '[]', '{\"uuid\":\"d444b843-00d0-4c51-ad1d-5c58308bc1fc\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 159, '2021-09-22 05:39:05', '2021-09-22 05:39:05'),
(162, 'App\\Models\\Upload', 81, 'image', '2(1)', '2(1).png', 'image/png', 'public', 28830, '[]', '{\"uuid\":\"12ccf47d-19c4-4bbd-bb65-5789eca98565\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 160, '2021-09-22 05:46:32', '2021-09-22 05:46:33'),
(163, 'App\\Models\\Option', 170, 'image', '2(1)', '2(1).png', 'image/png', 'public', 28830, '[]', '{\"uuid\":\"12ccf47d-19c4-4bbd-bb65-5789eca98565\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 161, '2021-09-22 05:46:35', '2021-09-22 05:46:35'),
(164, 'App\\Models\\Upload', 82, 'image', '2(1)', '2(1).png', 'image/png', 'public', 28830, '[]', '{\"uuid\":\"af45bca6-4d0d-43d7-85b7-43a8613a5c93\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 162, '2021-09-22 05:46:55', '2021-09-22 05:46:56'),
(165, 'App\\Models\\Option', 173, 'image', '2(1)', '2(1).png', 'image/png', 'public', 28830, '[]', '{\"uuid\":\"af45bca6-4d0d-43d7-85b7-43a8613a5c93\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 163, '2021-09-22 05:46:59', '2021-09-22 05:46:59'),
(166, 'App\\Models\\Upload', 83, 'image', '3(1)', '3(1).png', 'image/png', 'public', 27613, '[]', '{\"uuid\":\"40db6680-c0b1-4dac-ab67-900b63184675\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 164, '2021-09-22 05:47:21', '2021-09-22 05:47:21'),
(167, 'App\\Models\\Option', 171, 'image', '3(1)', '3(1).png', 'image/png', 'public', 27613, '[]', '{\"uuid\":\"40db6680-c0b1-4dac-ab67-900b63184675\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 165, '2021-09-22 05:47:24', '2021-09-22 05:47:24'),
(168, 'App\\Models\\Upload', 84, 'image', '3(1)', '3(1).png', 'image/png', 'public', 27613, '[]', '{\"uuid\":\"629d1a8e-d552-4118-b426-41dbf1419c5d\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 166, '2021-09-22 05:47:46', '2021-09-22 05:47:46'),
(169, 'App\\Models\\Option', 174, 'image', '3(1)', '3(1).png', 'image/png', 'public', 27613, '[]', '{\"uuid\":\"629d1a8e-d552-4118-b426-41dbf1419c5d\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 167, '2021-09-22 05:47:46', '2021-09-22 05:47:47'),
(170, 'App\\Models\\Upload', 85, 'image', '4(1)', '4(1).png', 'image/png', 'public', 20390, '[]', '{\"uuid\":\"f3053d14-d881-48cb-98d1-266eb1ecb0cb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 168, '2021-09-22 05:48:00', '2021-09-22 05:48:01'),
(171, 'App\\Models\\Upload', 86, 'logo', 'stripe-logo-icon (1)', 'stripe-logo-icon-(1).jpg', 'image/jpeg', 'public', 4948, '[]', '{\"uuid\":\"b56b9a20-6709-4096-874b-774e0a694dd0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 169, '2021-09-22 05:48:02', '2021-09-22 05:48:02'),
(172, 'App\\Models\\Option', 172, 'image', '4(1)', '4(1).png', 'image/png', 'public', 20390, '[]', '{\"uuid\":\"f3053d14-d881-48cb-98d1-266eb1ecb0cb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 170, '2021-09-22 05:48:02', '2021-09-22 05:48:02'),
(173, 'App\\Models\\PaymentMethod', 7, 'logo', 'stripe-logo-icon (1)', 'stripe-logo-icon-(1).jpg', 'image/jpeg', 'public', 4948, '[]', '{\"uuid\":\"b56b9a20-6709-4096-874b-774e0a694dd0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 171, '2021-09-22 05:48:03', '2021-09-22 05:48:03'),
(174, 'App\\Models\\Upload', 87, 'image', '4(1)', '4(1).png', 'image/png', 'public', 20390, '[]', '{\"uuid\":\"8841b3fc-f89b-4d36-840f-ed8c62f62b26\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 172, '2021-09-22 05:48:19', '2021-09-22 05:48:20'),
(175, 'App\\Models\\Option', 175, 'image', '4(1)', '4(1).png', 'image/png', 'public', 20390, '[]', '{\"uuid\":\"8841b3fc-f89b-4d36-840f-ed8c62f62b26\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 173, '2021-09-22 05:48:20', '2021-09-22 05:48:21'),
(177, 'App\\Models\\Upload', 88, 'image', '5(1)', '5(1).png', 'image/png', 'public', 26555, '[]', '{\"uuid\":\"03580812-3a25-46f4-b8c3-c640e1fe1542\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 175, '2021-09-22 05:48:37', '2021-09-22 05:48:38'),
(178, 'App\\Models\\Option', 176, 'image', '5(1)', '5(1).png', 'image/png', 'public', 26555, '[]', '{\"uuid\":\"03580812-3a25-46f4-b8c3-c640e1fe1542\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 176, '2021-09-22 05:48:48', '2021-09-22 05:48:48'),
(179, 'App\\Models\\Upload', 89, 'image', 'Curtain Cleaning', 'Curtain-Cleaning.png', 'image/png', 'public', 19213, '[]', '{\"uuid\":\"2b8b0ffe-7f94-4267-a6bd-489bfc82e8f7\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 177, '2021-09-22 08:52:07', '2021-09-22 08:52:08'),
(181, 'App\\Models\\Upload', 90, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 65548, '[]', '{\"uuid\":\"9594058b-c095-4c73-8b13-0f8e0f9530be\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 179, '2021-09-22 08:54:43', '2021-09-22 08:54:45'),
(183, 'App\\Models\\Upload', 91, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 65548, '[]', '{\"uuid\":\"e5df7da7-b428-49a8-b42e-6635061e0a2a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 181, '2021-09-22 08:55:24', '2021-09-22 08:55:27'),
(184, 'App\\Models\\Upload', 92, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 65548, '[]', '{\"uuid\":\"f2143943-063f-4206-ba61-097137b55961\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 182, '2021-09-22 08:55:33', '2021-09-22 08:55:36'),
(185, 'App\\Models\\Upload', 93, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33531, '[]', '{\"uuid\":\"3a856f19-334c-45e1-b277-b6398cf2512a\",\"user_id\":1}', '[]', 183, '2021-09-30 08:20:35', '2021-09-30 08:20:35'),
(187, 'App\\Models\\Upload', 94, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33531, '[]', '{\"uuid\":\"b69a3d53-edb6-4707-884b-8cc1856919a6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 184, '2021-09-30 08:21:46', '2021-09-30 08:21:48'),
(190, 'App\\Models\\Upload', 95, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33705, '[]', '{\"uuid\":\"ba3c3620-e9b2-45a6-9c52-1b42b5cac1af\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 187, '2021-09-30 10:57:54', '2021-09-30 10:57:55'),
(193, 'App\\Models\\Upload', 96, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33705, '[]', '{\"uuid\":\"94080516-5c1e-4629-a75d-e9bc89231059\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 190, '2021-09-30 11:00:01', '2021-09-30 11:00:01'),
(195, 'App\\Models\\Upload', 97, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33705, '[]', '{\"uuid\":\"6fa66d77-d28c-4323-ab9a-778ed986b247\",\"user_id\":1}', '[]', 192, '2021-09-30 11:00:19', '2021-09-30 11:00:19'),
(197, 'App\\Models\\Upload', 98, 'image', 'AC Cleaning Services Dubai', 'AC-Cleaning-Services-Dubai.png', 'image/png', 'public', 18119, '[]', '{\"uuid\":\"3666bb9a-3fd0-4916-a47f-0081108f4365\",\"user_id\":1}', '[]', 194, '2021-09-30 11:05:32', '2021-09-30 11:05:32'),
(199, 'App\\Models\\Upload', 99, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33705, '[]', '{\"uuid\":\"3228d74f-2151-4b12-8559-d6dc7480a2fe\",\"user_id\":1}', '[]', 196, '2021-09-30 11:29:38', '2021-09-30 11:29:38'),
(201, 'App\\Models\\Upload', 100, 'image', 'Deep Cleaning', 'Deep-Cleaning.png', 'image/png', 'public', 33705, '[]', '{\"uuid\":\"1a8dd33a-1024-493d-bb62-4370d25b1c7a\",\"user_id\":1}', '[]', 197, '2021-10-04 05:19:41', '2021-10-04 05:19:41'),
(203, 'App\\Models\\Upload', 101, 'image', 'T-Shirt', 'T-Shirt.png', 'image/png', 'public', 25546, '[]', '{\"uuid\":\"07144699-083d-4663-aa8d-bb6676e543e8\",\"user_id\":1}', '[]', 199, '2021-10-25 08:29:49', '2021-10-25 08:29:49'),
(205, 'App\\Models\\Upload', 102, 'image', 'T-Shirt', 'T-Shirt.png', 'image/png', 'public', 25546, '[]', '{\"uuid\":\"aa8bad2a-5f3a-4348-86a2-2c47806881a8\",\"user_id\":1}', '[]', 201, '2021-10-25 08:30:18', '2021-10-25 08:30:18'),
(206, 'App\\Models\\Option', 179, 'image', 'T-Shirt', 'T-Shirt.png', 'image/png', 'public', 25546, '[]', '{\"uuid\":\"aa8bad2a-5f3a-4348-86a2-2c47806881a8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 202, '2021-10-25 08:30:22', '2021-10-25 08:30:22'),
(207, 'App\\Models\\Upload', 103, 'image', 'Shirt', 'Shirt.png', 'image/png', 'public', 40851, '[]', '{\"uuid\":\"53f81bb0-4c24-44c8-b056-6cfc7d00e1b8\",\"user_id\":1}', '[]', 203, '2021-10-25 08:32:57', '2021-10-25 08:32:57'),
(208, 'App\\Models\\Option', 177, 'image', 'Shirt', 'Shirt.png', 'image/png', 'public', 40851, '[]', '{\"uuid\":\"53f81bb0-4c24-44c8-b056-6cfc7d00e1b8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 204, '2021-10-25 08:33:01', '2021-10-25 08:33:01'),
(209, 'App\\Models\\Upload', 104, 'image', 'Shirt', 'Shirt.png', 'image/png', 'public', 40851, '[]', '{\"uuid\":\"007206a5-427a-400f-8bc5-2a9c6ebb3766\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 205, '2021-10-25 08:33:23', '2021-10-25 08:33:24'),
(210, 'App\\Models\\Option', 178, 'image', 'Shirt', 'Shirt.png', 'image/png', 'public', 40851, '[]', '{\"uuid\":\"007206a5-427a-400f-8bc5-2a9c6ebb3766\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 206, '2021-10-25 08:33:30', '2021-10-25 08:33:30'),
(211, 'App\\Models\\Upload', 105, 'image', 'T-Shirt', 'T-Shirt.png', 'image/png', 'public', 25546, '[]', '{\"uuid\":\"c0b284f0-76ab-4433-a0e4-1c2c3e8e2c00\",\"user_id\":1}', '[]', 207, '2021-10-25 08:33:54', '2021-10-25 08:33:54'),
(212, 'App\\Models\\Option', 180, 'image', 'T-Shirt', 'T-Shirt.png', 'image/png', 'public', 25546, '[]', '{\"uuid\":\"c0b284f0-76ab-4433-a0e4-1c2c3e8e2c00\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 208, '2021-10-25 08:34:31', '2021-10-25 08:34:32'),
(213, 'App\\Models\\Upload', 106, 'image', 'Trousers(1)', 'Trousers(1).png', 'image/png', 'public', 21836, '[]', '{\"uuid\":\"440767c5-1128-4b63-b226-990319dca617\",\"user_id\":1}', '[]', 209, '2021-10-25 08:37:24', '2021-10-25 08:37:24'),
(214, 'App\\Models\\Option', 181, 'image', 'Trousers(1)', 'Trousers(1).png', 'image/png', 'public', 21836, '[]', '{\"uuid\":\"440767c5-1128-4b63-b226-990319dca617\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 210, '2021-10-25 08:37:30', '2021-10-25 08:37:30'),
(215, 'App\\Models\\Upload', 107, 'image', 'Trousers(1)', 'Trousers(1).png', 'image/png', 'public', 21836, '[]', '{\"uuid\":\"6aa0ca5a-815d-47be-9483-4a2a8663853d\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 211, '2021-10-25 08:37:45', '2021-10-25 08:37:45'),
(216, 'App\\Models\\Option', 182, 'image', 'Trousers(1)', 'Trousers(1).png', 'image/png', 'public', 21836, '[]', '{\"uuid\":\"6aa0ca5a-815d-47be-9483-4a2a8663853d\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 212, '2021-10-25 08:38:06', '2021-10-25 08:38:06'),
(217, 'App\\Models\\Upload', 108, 'image', 'shorts', 'shorts.png', 'image/png', 'public', 23480, '[]', '{\"uuid\":\"4bdf53b3-2da6-4653-b51c-7de0237c4df2\",\"user_id\":1}', '[]', 213, '2021-10-25 08:40:32', '2021-10-25 08:40:32'),
(218, 'App\\Models\\Option', 183, 'image', 'shorts', 'shorts.png', 'image/png', 'public', 23480, '[]', '{\"uuid\":\"4bdf53b3-2da6-4653-b51c-7de0237c4df2\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 214, '2021-10-25 08:40:40', '2021-10-25 08:40:41'),
(219, 'App\\Models\\Upload', 109, 'image', 'shorts', 'shorts.png', 'image/png', 'public', 23480, '[]', '{\"uuid\":\"07253bad-3698-4f15-b0c7-e8183c69e8d8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 215, '2021-10-25 08:41:53', '2021-10-25 08:41:53'),
(220, 'App\\Models\\Option', 184, 'image', 'shorts', 'shorts.png', 'image/png', 'public', 23480, '[]', '{\"uuid\":\"07253bad-3698-4f15-b0c7-e8183c69e8d8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 216, '2021-10-25 08:42:18', '2021-10-25 08:42:18'),
(221, 'App\\Models\\Upload', 110, 'image', 'Jacket(1)', 'Jacket(1).png', 'image/png', 'public', 40587, '[]', '{\"uuid\":\"06e1000d-eb2e-40d5-80d7-100fc24a9d97\",\"user_id\":1}', '[]', 217, '2021-10-25 08:44:32', '2021-10-25 08:44:32'),
(222, 'App\\Models\\Option', 185, 'image', 'Jacket(1)', 'Jacket(1).png', 'image/png', 'public', 40587, '[]', '{\"uuid\":\"06e1000d-eb2e-40d5-80d7-100fc24a9d97\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 218, '2021-10-25 08:44:35', '2021-10-25 08:44:35'),
(223, 'App\\Models\\Upload', 111, 'image', 'Jacket(1)', 'Jacket(1).png', 'image/png', 'public', 40587, '[]', '{\"uuid\":\"de0a2d71-84eb-4f39-9d04-eef36023d83c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 219, '2021-10-25 08:44:58', '2021-10-25 08:44:58'),
(224, 'App\\Models\\Option', 186, 'image', 'Jacket(1)', 'Jacket(1).png', 'image/png', 'public', 40587, '[]', '{\"uuid\":\"de0a2d71-84eb-4f39-9d04-eef36023d83c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 220, '2021-10-25 08:45:17', '2021-10-25 08:45:17'),
(225, 'App\\Models\\Upload', 112, 'image', 'Gathra', 'Gathra.png', 'image/png', 'public', 53506, '[]', '{\"uuid\":\"a7f2be19-d6e9-44e8-88aa-f0b25647389c\",\"user_id\":1}', '[]', 221, '2021-10-25 08:49:20', '2021-10-25 08:49:20'),
(226, 'App\\Models\\Option', 187, 'image', 'Gathra', 'Gathra.png', 'image/png', 'public', 53506, '[]', '{\"uuid\":\"a7f2be19-d6e9-44e8-88aa-f0b25647389c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 222, '2021-10-25 08:49:37', '2021-10-25 08:49:38'),
(227, 'App\\Models\\Upload', 113, 'image', 'Gathra', 'Gathra.png', 'image/png', 'public', 53506, '[]', '{\"uuid\":\"8e7e8d36-c02c-4c67-a1f3-fb4f64f4c50c\",\"user_id\":1}', '[]', 223, '2021-10-25 08:49:53', '2021-10-25 08:49:53'),
(228, 'App\\Models\\Option', 188, 'image', 'Gathra', 'Gathra.png', 'image/png', 'public', 53506, '[]', '{\"uuid\":\"8e7e8d36-c02c-4c67-a1f3-fb4f64f4c50c\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 224, '2021-10-25 08:50:22', '2021-10-25 08:50:22');
INSERT INTO `media` (`id`, `model_type`, `model_id`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `size`, `manipulations`, `custom_properties`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(229, 'App\\Models\\Upload', 114, 'image', 'kandora', 'kandora.png', 'image/png', 'public', 15311, '[]', '{\"uuid\":\"cc8836ed-5beb-4f1f-8933-4658de6afe48\",\"user_id\":1}', '[]', 225, '2021-10-25 08:54:47', '2021-10-25 08:54:47'),
(230, 'App\\Models\\Option', 189, 'image', 'kandora', 'kandora.png', 'image/png', 'public', 15311, '[]', '{\"uuid\":\"cc8836ed-5beb-4f1f-8933-4658de6afe48\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 226, '2021-10-25 08:55:13', '2021-10-25 08:55:13'),
(231, 'App\\Models\\Upload', 115, 'image', 'kandora', 'kandora.png', 'image/png', 'public', 15311, '[]', '{\"uuid\":\"1da8eefc-7f69-4a5c-8233-1ed1e408a438\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 227, '2021-10-25 08:55:28', '2021-10-25 08:55:28'),
(232, 'App\\Models\\Option', 190, 'image', 'kandora', 'kandora.png', 'image/png', 'public', 15311, '[]', '{\"uuid\":\"1da8eefc-7f69-4a5c-8233-1ed1e408a438\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 228, '2021-10-25 08:55:44', '2021-10-25 08:55:44'),
(233, 'App\\Models\\Upload', 116, 'image', 'Tie(1)', 'Tie(1).png', 'image/png', 'public', 20317, '[]', '{\"uuid\":\"4f8772d6-3c46-4334-888c-a729d23ca003\",\"user_id\":1}', '[]', 229, '2021-10-25 08:58:03', '2021-10-25 08:58:03'),
(234, 'App\\Models\\Option', 191, 'image', 'Tie(1)', 'Tie(1).png', 'image/png', 'public', 20317, '[]', '{\"uuid\":\"4f8772d6-3c46-4334-888c-a729d23ca003\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 230, '2021-10-25 08:58:17', '2021-10-25 08:58:17'),
(235, 'App\\Models\\Upload', 117, 'image', 'Tie(1)', 'Tie(1).png', 'image/png', 'public', 20317, '[]', '{\"uuid\":\"2a152412-3c01-460c-b06b-0b0b491fcaf7\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 231, '2021-10-25 08:58:28', '2021-10-25 08:58:29'),
(236, 'App\\Models\\Option', 192, 'image', 'Tie(1)', 'Tie(1).png', 'image/png', 'public', 20317, '[]', '{\"uuid\":\"2a152412-3c01-460c-b06b-0b0b491fcaf7\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 232, '2021-10-25 08:58:46', '2021-10-25 08:58:46'),
(237, 'App\\Models\\Upload', 118, 'image', 'Underwear(1)', 'Underwear(1).png', 'image/png', 'public', 13818, '[]', '{\"uuid\":\"73698134-f1e6-4382-bc02-0071a86a5b92\",\"user_id\":1}', '[]', 233, '2021-10-25 09:01:16', '2021-10-25 09:01:16'),
(238, 'App\\Models\\Option', 193, 'image', 'Underwear(1)', 'Underwear(1).png', 'image/png', 'public', 13818, '[]', '{\"uuid\":\"73698134-f1e6-4382-bc02-0071a86a5b92\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 234, '2021-10-25 09:01:36', '2021-10-25 09:01:36'),
(239, 'App\\Models\\Upload', 119, 'image', 'sweater(1)', 'sweater(1).png', 'image/png', 'public', 22181, '[]', '{\"uuid\":\"e9092021-6252-4b59-b1cb-49b2a29a1833\",\"user_id\":1}', '[]', 235, '2021-10-25 09:03:23', '2021-10-25 09:03:23'),
(240, 'App\\Models\\Option', 194, 'image', 'sweater(1)', 'sweater(1).png', 'image/png', 'public', 22181, '[]', '{\"uuid\":\"e9092021-6252-4b59-b1cb-49b2a29a1833\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 236, '2021-10-25 09:03:44', '2021-10-25 09:03:44'),
(241, 'App\\Models\\Upload', 120, 'image', 'sweater(1)', 'sweater(1).png', 'image/png', 'public', 22181, '[]', '{\"uuid\":\"52fae136-f9a6-4bf2-ae17-1dfc09b44877\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 237, '2021-10-25 09:03:58', '2021-10-25 09:03:58'),
(242, 'App\\Models\\Option', 195, 'image', 'sweater(1)', 'sweater(1).png', 'image/png', 'public', 22181, '[]', '{\"uuid\":\"52fae136-f9a6-4bf2-ae17-1dfc09b44877\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 238, '2021-10-25 09:04:11', '2021-10-25 09:04:11'),
(243, 'App\\Models\\Upload', 121, 'image', 'Pyjamas(1)', 'Pyjamas(1).png', 'image/png', 'public', 19610, '[]', '{\"uuid\":\"2d4f075f-50a1-4292-bde7-015ca005e784\",\"user_id\":1}', '[]', 239, '2021-10-25 09:06:56', '2021-10-25 09:06:56'),
(244, 'App\\Models\\Option', 196, 'image', 'Pyjamas(1)', 'Pyjamas(1).png', 'image/png', 'public', 19610, '[]', '{\"uuid\":\"2d4f075f-50a1-4292-bde7-015ca005e784\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 240, '2021-10-25 09:07:15', '2021-10-25 09:07:17'),
(246, 'App\\Models\\Upload', 122, 'image', 'Pyjamas(1)', 'Pyjamas(1).png', 'image/png', 'public', 19610, '[]', '{\"uuid\":\"02506538-e2a0-4465-b9c4-46d81fb751df\",\"user_id\":1}', '[]', 242, '2021-10-25 09:07:47', '2021-10-25 09:07:47'),
(247, 'App\\Models\\Option', 198, 'image', 'Pyjamas(1)', 'Pyjamas(1).png', 'image/png', 'public', 19610, '[]', '{\"uuid\":\"02506538-e2a0-4465-b9c4-46d81fb751df\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 243, '2021-10-25 09:07:50', '2021-10-25 09:07:50'),
(248, 'App\\Models\\Upload', 123, 'image', 'Track suit', 'Track-suit.png', 'image/png', 'public', 49247, '[]', '{\"uuid\":\"5fe304c8-30a6-40ad-a0b8-a2461e12e07e\",\"user_id\":1}', '[]', 244, '2021-10-25 09:43:27', '2021-10-25 09:43:27'),
(249, 'App\\Models\\Option', 199, 'image', 'Track suit', 'Track-suit.png', 'image/png', 'public', 49247, '[]', '{\"uuid\":\"5fe304c8-30a6-40ad-a0b8-a2461e12e07e\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 245, '2021-10-25 09:43:38', '2021-10-25 09:43:39'),
(250, 'App\\Models\\Upload', 124, 'image', 'Track suit', 'Track-suit.png', 'image/png', 'public', 49247, '[]', '{\"uuid\":\"dc57dee4-f558-4600-8d4f-cc79ebf78c4f\",\"user_id\":1}', '[]', 246, '2021-10-25 09:43:55', '2021-10-25 09:43:55'),
(251, 'App\\Models\\Option', 200, 'image', 'Track suit', 'Track-suit.png', 'image/png', 'public', 49247, '[]', '{\"uuid\":\"dc57dee4-f558-4600-8d4f-cc79ebf78c4f\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 247, '2021-10-25 09:44:21', '2021-10-25 09:44:21'),
(252, 'App\\Models\\Upload', 125, 'image', 'Blouse(1)', 'Blouse(1).png', 'image/png', 'public', 30632, '[]', '{\"uuid\":\"4d66cca4-36d0-4dcf-8ebc-7bfddd637257\",\"user_id\":1}', '[]', 248, '2021-10-25 10:08:00', '2021-10-25 10:08:00'),
(253, 'App\\Models\\Option', 201, 'image', 'Blouse(1)', 'Blouse(1).png', 'image/png', 'public', 30632, '[]', '{\"uuid\":\"4d66cca4-36d0-4dcf-8ebc-7bfddd637257\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 249, '2021-10-25 10:08:04', '2021-10-25 10:08:04'),
(254, 'App\\Models\\Upload', 126, 'image', 'Blouse(1)', 'Blouse(1).png', 'image/png', 'public', 30632, '[]', '{\"uuid\":\"9e89511f-80e8-4485-92bf-7914e6081542\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 250, '2021-10-25 10:08:33', '2021-10-25 10:08:33'),
(255, 'App\\Models\\Option', 202, 'image', 'Blouse(1)', 'Blouse(1).png', 'image/png', 'public', 30632, '[]', '{\"uuid\":\"9e89511f-80e8-4485-92bf-7914e6081542\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 251, '2021-10-25 10:08:44', '2021-10-25 10:08:44'),
(256, 'App\\Models\\Upload', 127, 'image', 'Sari(1)', 'Sari(1).png', 'image/png', 'public', 36089, '[]', '{\"uuid\":\"fcc4df34-1f80-4a54-b1ee-b2a228abcaa4\",\"user_id\":1}', '[]', 252, '2021-10-25 10:11:37', '2021-10-25 10:11:37'),
(257, 'App\\Models\\Option', 203, 'image', 'Sari(1)', 'Sari(1).png', 'image/png', 'public', 36089, '[]', '{\"uuid\":\"fcc4df34-1f80-4a54-b1ee-b2a228abcaa4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 253, '2021-10-25 10:11:54', '2021-10-25 10:11:55'),
(258, 'App\\Models\\Upload', 128, 'image', 'Sari(1)', 'Sari(1).png', 'image/png', 'public', 36089, '[]', '{\"uuid\":\"1085ee4b-7d46-44e3-8d20-6e00fb185ec4\",\"user_id\":1}', '[]', 254, '2021-10-25 10:12:20', '2021-10-25 10:12:20'),
(259, 'App\\Models\\Option', 204, 'image', 'Sari(1)', 'Sari(1).png', 'image/png', 'public', 36089, '[]', '{\"uuid\":\"1085ee4b-7d46-44e3-8d20-6e00fb185ec4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 255, '2021-10-25 10:12:26', '2021-10-25 10:12:27'),
(260, 'App\\Models\\Upload', 129, 'image', 'lady dresss', 'lady-dresss.png', 'image/png', 'public', 32302, '[]', '{\"uuid\":\"b4faed27-044d-442e-b22c-d9845a745564\",\"user_id\":1}', '[]', 256, '2021-10-25 10:22:49', '2021-10-25 10:22:49'),
(261, 'App\\Models\\Option', 205, 'image', 'lady dresss', 'lady-dresss.png', 'image/png', 'public', 32302, '[]', '{\"uuid\":\"b4faed27-044d-442e-b22c-d9845a745564\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 257, '2021-10-25 10:23:00', '2021-10-25 10:23:00'),
(262, 'App\\Models\\Upload', 130, 'image', 'lady dresss', 'lady-dresss.png', 'image/png', 'public', 32302, '[]', '{\"uuid\":\"ff57a282-7601-4eb5-8859-a9a19bdb0f20\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 258, '2021-10-25 10:23:16', '2021-10-25 10:23:16'),
(263, 'App\\Models\\Option', 206, 'image', 'lady dresss', 'lady-dresss.png', 'image/png', 'public', 32302, '[]', '{\"uuid\":\"ff57a282-7601-4eb5-8859-a9a19bdb0f20\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 259, '2021-10-25 10:23:41', '2021-10-25 10:23:41'),
(264, 'App\\Models\\Upload', 131, 'image', 'sccraf', 'sccraf.png', 'image/png', 'public', 21556, '[]', '{\"uuid\":\"e90f63b9-5881-499f-8d62-2c038f521090\",\"user_id\":1}', '[]', 260, '2021-10-25 10:25:18', '2021-10-25 10:25:18'),
(265, 'App\\Models\\Option', 207, 'image', 'sccraf', 'sccraf.png', 'image/png', 'public', 21556, '[]', '{\"uuid\":\"e90f63b9-5881-499f-8d62-2c038f521090\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 261, '2021-10-25 10:25:43', '2021-10-25 10:25:43'),
(266, 'App\\Models\\Upload', 132, 'image', 'sccraf', 'sccraf.png', 'image/png', 'public', 21556, '[]', '{\"uuid\":\"4e7fd78e-ae24-496e-954a-58986aaa4a4e\",\"user_id\":1}', '[]', 262, '2021-10-25 10:25:57', '2021-10-25 10:25:57'),
(267, 'App\\Models\\Option', 208, 'image', 'sccraf', 'sccraf.png', 'image/png', 'public', 21556, '[]', '{\"uuid\":\"4e7fd78e-ae24-496e-954a-58986aaa4a4e\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 263, '2021-10-25 10:26:08', '2021-10-25 10:26:08'),
(268, 'App\\Models\\Upload', 133, 'image', 'Underewaer', 'Underewaer.png', 'image/png', 'public', 25792, '[]', '{\"uuid\":\"668568b1-b7b5-4d42-9e71-2ba576630348\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 264, '2021-10-25 10:27:47', '2021-10-25 10:27:47'),
(269, 'App\\Models\\Option', 209, 'image', 'Underewaer', 'Underewaer.png', 'image/png', 'public', 25792, '[]', '{\"uuid\":\"668568b1-b7b5-4d42-9e71-2ba576630348\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 265, '2021-10-25 10:28:03', '2021-10-25 10:28:03'),
(270, 'App\\Models\\Upload', 134, 'image', 'Abhaya', 'Abhaya.png', 'image/png', 'public', 15834, '[]', '{\"uuid\":\"0e5e4092-d6b3-4e14-81c6-2439a11be406\",\"user_id\":1}', '[]', 266, '2021-10-25 10:30:01', '2021-10-25 10:30:01'),
(271, 'App\\Models\\Option', 210, 'image', 'Abhaya', 'Abhaya.png', 'image/png', 'public', 15834, '[]', '{\"uuid\":\"0e5e4092-d6b3-4e14-81c6-2439a11be406\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 267, '2021-10-25 10:30:10', '2021-10-25 10:30:10'),
(272, 'App\\Models\\Upload', 135, 'image', 'Abhaya', 'Abhaya.png', 'image/png', 'public', 15834, '[]', '{\"uuid\":\"96ae3170-fc47-42cc-a2d6-96d4426593df\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 268, '2021-10-25 10:30:21', '2021-10-25 10:30:22'),
(273, 'App\\Models\\Option', 211, 'image', 'Abhaya', 'Abhaya.png', 'image/png', 'public', 15834, '[]', '{\"uuid\":\"96ae3170-fc47-42cc-a2d6-96d4426593df\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 269, '2021-10-25 10:30:35', '2021-10-25 10:30:35'),
(274, 'App\\Models\\Upload', 136, 'image', 'Skkirt', 'Skkirt.png', 'image/png', 'public', 24441, '[]', '{\"uuid\":\"24ff6632-5c1a-4f07-a22d-f9e90c7efc92\",\"user_id\":1}', '[]', 270, '2021-10-25 10:34:16', '2021-10-25 10:34:16'),
(275, 'App\\Models\\Option', 212, 'image', 'Skkirt', 'Skkirt.png', 'image/png', 'public', 24441, '[]', '{\"uuid\":\"24ff6632-5c1a-4f07-a22d-f9e90c7efc92\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 271, '2021-10-25 10:34:31', '2021-10-25 10:34:31'),
(276, 'App\\Models\\Upload', 137, 'image', 'Skkirt', 'Skkirt.png', 'image/png', 'public', 24441, '[]', '{\"uuid\":\"78303451-55b1-4b1e-a579-039857d2b03a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 272, '2021-10-25 10:35:00', '2021-10-25 10:35:00'),
(277, 'App\\Models\\Option', 213, 'image', 'Skkirt', 'Skkirt.png', 'image/png', 'public', 24441, '[]', '{\"uuid\":\"78303451-55b1-4b1e-a579-039857d2b03a\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 273, '2021-10-25 10:35:03', '2021-10-25 10:35:03'),
(278, 'App\\Models\\Upload', 138, 'image', 'Bra', 'Bra.png', 'image/png', 'public', 43097, '[]', '{\"uuid\":\"16e16812-2989-405d-907f-b23839b0d672\",\"user_id\":1}', '[]', 274, '2021-10-25 10:36:59', '2021-10-25 10:36:59'),
(279, 'App\\Models\\Option', 214, 'image', 'Bra', 'Bra.png', 'image/png', 'public', 43097, '[]', '{\"uuid\":\"16e16812-2989-405d-907f-b23839b0d672\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 275, '2021-10-25 10:37:12', '2021-10-25 10:37:13'),
(280, 'App\\Models\\Upload', 139, 'image', 'Bedsheet', 'Bedsheet.png', 'image/png', 'public', 15982, '[]', '{\"uuid\":\"9555af95-59c7-41c1-8a8f-c4ffcecf1a09\",\"user_id\":1}', '[]', 276, '2021-10-25 10:40:59', '2021-10-25 10:40:59'),
(281, 'App\\Models\\Option', 215, 'image', 'Bedsheet', 'Bedsheet.png', 'image/png', 'public', 15982, '[]', '{\"uuid\":\"9555af95-59c7-41c1-8a8f-c4ffcecf1a09\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 277, '2021-10-25 10:41:02', '2021-10-25 10:41:03'),
(282, 'App\\Models\\Upload', 140, 'image', 'Bedsheet', 'Bedsheet.png', 'image/png', 'public', 15982, '[]', '{\"uuid\":\"77c95acf-98f6-45ac-b1bf-5ee738bfaa36\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 278, '2021-10-25 10:41:13', '2021-10-25 10:41:14'),
(283, 'App\\Models\\Option', 216, 'image', 'Bedsheet', 'Bedsheet.png', 'image/png', 'public', 15982, '[]', '{\"uuid\":\"77c95acf-98f6-45ac-b1bf-5ee738bfaa36\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 279, '2021-10-25 10:41:39', '2021-10-25 10:41:39'),
(284, 'App\\Models\\Upload', 141, 'image', 'blanket and comforter', 'blanket-and-comforter.png', 'image/png', 'public', 31610, '[]', '{\"uuid\":\"d18e94e4-77ed-4636-9af3-1b69988336d4\",\"user_id\":1}', '[]', 280, '2021-10-25 10:44:24', '2021-10-25 10:44:24'),
(285, 'App\\Models\\Option', 217, 'image', 'blanket and comforter', 'blanket-and-comforter.png', 'image/png', 'public', 31610, '[]', '{\"uuid\":\"d18e94e4-77ed-4636-9af3-1b69988336d4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 281, '2021-10-25 10:44:24', '2021-10-25 10:44:25'),
(286, 'App\\Models\\Upload', 142, 'image', 'duvet cover', 'duvet-cover.png', 'image/png', 'public', 48774, '[]', '{\"uuid\":\"9555cba6-16d5-4f10-be65-a5fe26c462a1\",\"user_id\":1}', '[]', 282, '2021-10-25 10:47:15', '2021-10-25 10:47:15'),
(287, 'App\\Models\\Option', 218, 'image', 'duvet cover', 'duvet-cover.png', 'image/png', 'public', 48774, '[]', '{\"uuid\":\"9555cba6-16d5-4f10-be65-a5fe26c462a1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 283, '2021-10-25 10:47:49', '2021-10-25 10:47:49'),
(288, 'App\\Models\\Upload', 143, 'image', 'duvet cover', 'duvet-cover.png', 'image/png', 'public', 48774, '[]', '{\"uuid\":\"7bff7262-19c0-4cb4-b0ed-4f4fdf4baec5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 284, '2021-10-25 10:48:07', '2021-10-25 10:48:07'),
(289, 'App\\Models\\Option', 219, 'image', 'duvet cover', 'duvet-cover.png', 'image/png', 'public', 48774, '[]', '{\"uuid\":\"7bff7262-19c0-4cb4-b0ed-4f4fdf4baec5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 285, '2021-10-25 10:48:22', '2021-10-25 10:48:22'),
(290, 'App\\Models\\Upload', 144, 'image', 'Pillow case', 'Pillow-case.png', 'image/png', 'public', 31840, '[]', '{\"uuid\":\"01f08ee0-7b9a-4df7-b3ba-38d5fb857fd3\",\"user_id\":1}', '[]', 286, '2021-10-25 10:50:34', '2021-10-25 10:50:34'),
(291, 'App\\Models\\Option', 220, 'image', 'Pillow case', 'Pillow-case.png', 'image/png', 'public', 31840, '[]', '{\"uuid\":\"01f08ee0-7b9a-4df7-b3ba-38d5fb857fd3\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 287, '2021-10-25 10:50:45', '2021-10-25 10:50:46'),
(292, 'App\\Models\\Upload', 145, 'image', 'Pillow case', 'Pillow-case.png', 'image/png', 'public', 31840, '[]', '{\"uuid\":\"0cd661ff-5668-4323-a1af-1c0c079e6ff4\",\"user_id\":1}', '[]', 288, '2021-10-25 10:51:03', '2021-10-25 10:51:03'),
(293, 'App\\Models\\Option', 221, 'image', 'Pillow case', 'Pillow-case.png', 'image/png', 'public', 31840, '[]', '{\"uuid\":\"0cd661ff-5668-4323-a1af-1c0c079e6ff4\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 289, '2021-10-25 10:51:19', '2021-10-25 10:51:19'),
(294, 'App\\Models\\Upload', 146, 'image', 'Bath towels', 'Bath-towels.png', 'image/png', 'public', 8623, '[]', '{\"uuid\":\"4705537f-e57d-4732-acfe-d2da11c1ceb1\",\"user_id\":1}', '[]', 290, '2021-10-25 10:52:49', '2021-10-25 10:52:49'),
(295, 'App\\Models\\Option', 222, 'image', 'Bath towels', 'Bath-towels.png', 'image/png', 'public', 8623, '[]', '{\"uuid\":\"4705537f-e57d-4732-acfe-d2da11c1ceb1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 291, '2021-10-25 10:53:06', '2021-10-25 10:53:06'),
(296, 'App\\Models\\Upload', 147, 'image', 'Salwar Kameez', 'Salwar-Kameez.png', 'image/png', 'public', 35079, '[]', '{\"uuid\":\"db8319ec-5694-47c9-8b86-0bdc81348e70\",\"user_id\":1}', '[]', 292, '2021-10-25 10:55:34', '2021-10-25 10:55:34'),
(297, 'App\\Models\\Option', 223, 'image', 'Salwar Kameez', 'Salwar-Kameez.png', 'image/png', 'public', 35079, '[]', '{\"uuid\":\"db8319ec-5694-47c9-8b86-0bdc81348e70\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 293, '2021-10-25 10:55:47', '2021-10-25 10:55:47'),
(298, 'App\\Models\\Upload', 148, 'image', 'Salwar Kameez', 'Salwar-Kameez.png', 'image/png', 'public', 35079, '[]', '{\"uuid\":\"4ccf164b-d8f8-4470-97e9-989041d5f6c1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 294, '2021-10-25 10:56:03', '2021-10-25 10:56:07'),
(299, 'App\\Models\\Option', 224, 'image', 'Salwar Kameez', 'Salwar-Kameez.png', 'image/png', 'public', 35079, '[]', '{\"uuid\":\"4ccf164b-d8f8-4470-97e9-989041d5f6c1\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 295, '2021-10-25 10:56:15', '2021-10-25 10:56:15'),
(300, 'App\\Models\\Upload', 149, 'image', 'Bathrobee', 'Bathrobee.png', 'image/png', 'public', 40057, '[]', '{\"uuid\":\"a6712233-6d9d-4020-90e0-768137fbfa16\",\"user_id\":1}', '[]', 296, '2021-10-25 10:57:54', '2021-10-25 10:57:54'),
(301, 'App\\Models\\Option', 225, 'image', 'Bathrobee', 'Bathrobee.png', 'image/png', 'public', 40057, '[]', '{\"uuid\":\"a6712233-6d9d-4020-90e0-768137fbfa16\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 297, '2021-10-25 10:58:22', '2021-10-25 10:58:22'),
(302, 'App\\Models\\Upload', 150, 'image', 'Bathrobee', 'Bathrobee.png', 'image/png', 'public', 40057, '[]', '{\"uuid\":\"c0ff9705-6998-49af-8bb4-e8c9d938aa73\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 298, '2021-10-25 10:58:36', '2021-10-25 10:58:37'),
(303, 'App\\Models\\Option', 226, 'image', 'Bathrobee', 'Bathrobee.png', 'image/png', 'public', 40057, '[]', '{\"uuid\":\"c0ff9705-6998-49af-8bb4-e8c9d938aa73\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 299, '2021-10-25 10:58:54', '2021-10-25 10:58:54'),
(304, 'App\\Models\\Upload', 151, 'image', 'Electrician', 'Electrician.png', 'image/png', 'public', 66917, '[]', '{\"uuid\":\"dd108d37-0a2b-4859-8b4a-b2518476ffc6\",\"user_id\":1}', '[]', 300, '2021-10-26 07:25:54', '2021-10-26 07:25:54'),
(306, 'App\\Models\\Upload', 152, 'image', 'Electrician', 'Electrician.jpg', 'image/jpeg', 'public', 49993, '[]', '{\"uuid\":\"3e0b843b-d355-4c53-b7f7-2852e120b90f\",\"user_id\":1}', '[]', 302, '2021-10-26 07:27:47', '2021-10-26 07:27:47'),
(308, 'App\\Models\\Upload', 153, 'image', 'Pest', 'Pest.jpg', 'image/jpeg', 'public', 51956, '[]', '{\"uuid\":\"65f9d869-453e-4a84-98aa-0d6d4cf97490\",\"user_id\":1}', '[]', 304, '2021-10-26 07:34:10', '2021-10-26 07:34:10'),
(310, 'App\\Models\\Upload', 154, 'image', 'Moving', 'Moving.jpg', 'image/jpeg', 'public', 54928, '[]', '{\"uuid\":\"e9384527-94e1-430c-9ad5-cbcc835cebe6\",\"user_id\":1}', '[]', 306, '2021-10-26 07:36:55', '2021-10-26 07:36:55'),
(312, 'App\\Models\\Upload', 155, 'image', 'laundry', 'laundry.jpg', 'image/jpeg', 'public', 56701, '[]', '{\"uuid\":\"eae4278b-21da-4f60-a4ae-5f57170bd816\",\"user_id\":1}', '[]', 308, '2021-10-27 07:40:29', '2021-10-27 07:40:29'),
(313, 'App\\Models\\Category', 16, 'image', 'laundry', 'laundry.jpg', 'image/jpeg', 'public', 56701, '[]', '{\"uuid\":\"eae4278b-21da-4f60-a4ae-5f57170bd816\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 309, '2021-10-27 07:40:32', '2021-10-27 07:40:33'),
(314, 'App\\Models\\Upload', 156, 'image', 'Moving', 'Moving.jpg', 'image/jpeg', 'public', 54928, '[]', '{\"uuid\":\"35233dad-2de8-4066-8284-7ef975c4b576\",\"user_id\":1}', '[]', 310, '2021-10-27 07:40:53', '2021-10-27 07:40:53'),
(316, 'App\\Models\\Upload', 157, 'image', 'cleaning service dubai', 'cleaning-service-dubai.png', 'image/png', 'public', 89983, '[]', '{\"uuid\":\"0dd1de88-35a1-455e-9e35-6ceb04c3f3d0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 312, '2022-01-26 05:35:41', '2022-01-26 05:35:42'),
(318, 'App\\Models\\Upload', 158, 'image', 'cleaning service dubai (1)', 'cleaning-service-dubai-(1).png', 'image/png', 'public', 140470, '[]', '{\"uuid\":\"1a8fdd1d-a26b-46d8-bede-20887dbc6a37\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 314, '2022-01-26 05:42:36', '2022-01-26 05:42:37'),
(320, 'App\\Models\\Upload', 159, 'image', 'main cleaning category', 'main-cleaning-category.png', 'image/png', 'public', 126455, '[]', '{\"uuid\":\"a187e4f6-1e9b-4021-9f0f-f818accd3ee8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 316, '2022-01-26 05:49:27', '2022-01-26 05:49:28'),
(321, 'App\\Models\\Category', 1, 'image', 'main cleaning category', 'main-cleaning-category.png', 'image/png', 'public', 126455, '[]', '{\"uuid\":\"a187e4f6-1e9b-4021-9f0f-f818accd3ee8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 317, '2022-01-26 05:49:30', '2022-01-26 05:49:30'),
(322, 'App\\Models\\Upload', 160, 'image', 'main ac category', 'main-ac-category.png', 'image/png', 'public', 125177, '[]', '{\"uuid\":\"3d74ca4a-48d6-49a4-b9ec-2ed8d12ad216\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 318, '2022-01-26 05:49:43', '2022-01-26 05:49:44'),
(324, 'App\\Models\\Upload', 161, 'image', 'main ac category', 'main-ac-category.png', 'image/png', 'public', 127084, '[]', '{\"uuid\":\"8ef7d582-526a-4d59-acd4-4872615123f8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 319, '2022-01-26 06:24:13', '2022-01-26 06:24:13'),
(325, 'App\\Models\\Category', 7, 'image', 'main ac category', 'main-ac-category.png', 'image/png', 'public', 127084, '[]', '{\"uuid\":\"8ef7d582-526a-4d59-acd4-4872615123f8\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 320, '2022-01-26 06:24:16', '2022-01-26 06:24:16'),
(326, 'App\\Models\\Upload', 162, 'image', 'main plumbing category', 'main-plumbing-category.png', 'image/png', 'public', 115151, '[]', '{\"uuid\":\"747380dc-b008-42f8-8998-8ccbea0a1a51\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 321, '2022-01-26 06:33:15', '2022-01-26 06:33:15'),
(327, 'App\\Models\\Category', 8, 'image', 'main plumbing category', 'main-plumbing-category.png', 'image/png', 'public', 115151, '[]', '{\"uuid\":\"747380dc-b008-42f8-8998-8ccbea0a1a51\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 322, '2022-01-26 06:34:52', '2022-01-26 06:34:52'),
(328, 'App\\Models\\Upload', 163, 'image', 'main electrical category', 'main-electrical-category.png', 'image/png', 'public', 121469, '[]', '{\"uuid\":\"11397952-5646-42f0-8d0b-9f05757335a0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 323, '2022-01-26 06:40:38', '2022-01-26 06:40:38'),
(329, 'App\\Models\\Category', 13, 'image', 'main electrical category', 'main-electrical-category.png', 'image/png', 'public', 121469, '[]', '{\"uuid\":\"11397952-5646-42f0-8d0b-9f05757335a0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 324, '2022-01-26 06:40:45', '2022-01-26 06:40:45'),
(330, 'App\\Models\\Upload', 164, 'image', 'main handyman category', 'main-handyman-category.png', 'image/png', 'public', 117229, '[]', '{\"uuid\":\"341211d0-7b31-41d6-b15c-8009da31f376\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 325, '2022-01-26 06:44:02', '2022-01-26 06:44:02'),
(331, 'App\\Models\\Category', 10, 'image', 'main handyman category', 'main-handyman-category.png', 'image/png', 'public', 117229, '[]', '{\"uuid\":\"341211d0-7b31-41d6-b15c-8009da31f376\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 326, '2022-01-26 06:44:05', '2022-01-26 06:44:05'),
(332, 'App\\Models\\Upload', 165, 'image', 'main painting category', 'main-painting-category.png', 'image/png', 'public', 97399, '[]', '{\"uuid\":\"b2539009-f3ac-4f99-8bdb-330a69a2c1bb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 327, '2022-01-26 06:55:02', '2022-01-26 06:55:02'),
(333, 'App\\Models\\Category', 11, 'image', 'main painting category', 'main-painting-category.png', 'image/png', 'public', 97399, '[]', '{\"uuid\":\"b2539009-f3ac-4f99-8bdb-330a69a2c1bb\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 328, '2022-01-26 06:55:07', '2022-01-26 06:55:07'),
(334, 'App\\Models\\Upload', 166, 'image', 'main moving category', 'main-moving-category.png', 'image/png', 'public', 119684, '[]', '{\"uuid\":\"9796c740-fac2-4c9d-8cdf-c755b29939b6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 329, '2022-01-26 06:57:53', '2022-01-26 06:57:53'),
(335, 'App\\Models\\Category', 15, 'image', 'main moving category', 'main-moving-category.png', 'image/png', 'public', 119684, '[]', '{\"uuid\":\"9796c740-fac2-4c9d-8cdf-c755b29939b6\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 330, '2022-01-26 06:57:58', '2022-01-26 06:57:58'),
(336, 'App\\Models\\Upload', 167, 'image', 'main pest control category', 'main-pest-control-category.png', 'image/png', 'public', 140307, '[]', '{\"uuid\":\"dff6da8a-06c2-42a4-99e8-6b5d1ccccf2b\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 331, '2022-01-26 09:52:56', '2022-01-26 09:52:56'),
(337, 'App\\Models\\Upload', 168, 'image', 'main pest control category', 'main-pest-control-category.png', 'image/png', 'public', 140307, '[]', '{\"uuid\":\"2d2443be-3ae0-42b9-a7f1-f8eca6c68634\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 332, '2022-01-26 09:54:53', '2022-01-26 09:54:53'),
(339, 'App\\Models\\Upload', 169, 'image', 'main sanitization category', 'main-sanitization-category.png', 'image/png', 'public', 127533, '[]', '{\"uuid\":\"08fabc34-619e-44c8-b265-49acd2823ce5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 334, '2022-01-26 09:55:49', '2022-01-26 09:55:49'),
(340, 'App\\Models\\Category', 12, 'image', 'main sanitization category', 'main-sanitization-category.png', 'image/png', 'public', 127533, '[]', '{\"uuid\":\"08fabc34-619e-44c8-b265-49acd2823ce5\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 335, '2022-01-26 09:55:52', '2022-01-26 09:55:52'),
(341, 'App\\Models\\Upload', 170, 'image', 'main pest control category (1)', 'main-pest-control-category-(1).png', 'image/png', 'public', 135710, '[]', '{\"uuid\":\"0b6716d6-6e5c-4c72-be2a-f532c70c1a80\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 336, '2022-01-26 09:56:15', '2022-01-26 09:56:19'),
(342, 'App\\Models\\Category', 14, 'image', 'main pest control category (1)', 'main-pest-control-category-(1).png', 'image/png', 'public', 135710, '[]', '{\"uuid\":\"0b6716d6-6e5c-4c72-be2a-f532c70c1a80\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 337, '2022-01-26 09:56:32', '2022-01-26 09:56:32'),
(343, 'App\\Models\\Upload', 171, 'image', 'deep cleaning dubai', 'deep-cleaning-dubai.png', 'image/png', 'public', 128027, '[]', '{\"uuid\":\"f35f59f7-775c-4cc6-b48f-e372db578860\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 338, '2022-01-27 01:55:57', '2022-01-27 01:55:57'),
(345, 'App\\Models\\Upload', 172, 'image', 'cleaning service with materials dubai', 'cleaning-service-with-materials-dubai.png', 'image/png', 'public', 129803, '[]', '{\"uuid\":\"9b741d02-8d55-4fb6-809e-386aaee94678\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 340, '2022-01-27 01:56:36', '2022-01-27 01:56:37'),
(347, 'App\\Models\\Upload', 173, 'image', 'electrician dubai', 'electrician-dubai.png', 'image/png', 'public', 143154, '[]', '{\"uuid\":\"5479faa8-1824-48a7-8087-bcc3c09a04f2\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 342, '2022-01-27 06:12:31', '2022-01-27 06:12:31'),
(349, 'App\\Models\\Upload', 174, 'image', 'ac soft cleaning dubai', 'ac-soft-cleaning-dubai.png', 'image/png', 'public', 107903, '[]', '{\"uuid\":\"c2dced6e-ca04-47a7-92bd-e96fdddab0ea\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 344, '2022-01-27 07:54:14', '2022-01-27 07:54:14'),
(350, 'App\\Models\\Upload', 175, 'image', 'ac soft cleaning dubai', 'ac-soft-cleaning-dubai.png', 'image/png', 'public', 107903, '[]', '{\"uuid\":\"416c8d6f-8411-488c-88ea-2025f0a464b0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 345, '2022-01-27 08:24:41', '2022-01-27 08:24:41'),
(352, 'App\\Models\\Upload', 176, 'image', 'ac deep cleaning dubai', 'ac-deep-cleaning-dubai.png', 'image/png', 'public', 111491, '[]', '{\"uuid\":\"6dc64e42-64c4-4838-b20a-639d247faf17\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 347, '2022-01-28 02:26:32', '2022-01-28 02:26:32'),
(354, 'App\\Models\\Upload', 177, 'image', 'ac duct cleaning dubai (1)', 'ac-duct-cleaning-dubai-(1).png', 'image/png', 'public', 105256, '[]', '{\"uuid\":\"7623a755-c63b-4a31-a961-dca1db3096f2\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 349, '2022-01-28 02:38:43', '2022-01-28 02:38:45'),
(358, 'App\\Models\\Upload', 178, 'image', 'moving services dubai', 'moving-services-dubai.png', 'image/png', 'public', 143040, '[]', '{\"uuid\":\"617732df-eb36-4f0d-8a08-2a6379c3b627\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 353, '2022-01-28 03:37:09', '2022-01-28 03:37:10'),
(360, 'App\\Models\\Upload', 179, 'image', 'moving services dubai', 'moving-services-dubai.png', 'image/png', 'public', 143040, '[]', '{\"uuid\":\"35ff6548-f03e-447c-90de-b2191389f019\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 355, '2022-01-28 03:44:01', '2022-01-28 03:44:02'),
(362, 'App\\Models\\Upload', 180, 'image', 'moving and packing services dubai', 'moving-and-packing-services-dubai.png', 'image/png', 'public', 124460, '[]', '{\"uuid\":\"e74c82ea-11b6-4a05-8029-74247c4ae900\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 356, '2022-01-28 03:51:03', '2022-01-28 03:51:04'),
(364, 'App\\Models\\Upload', 181, 'image', 'ac duct cleaning dubai (2)', 'ac-duct-cleaning-dubai-(2).png', 'image/png', 'public', 118781, '[]', '{\"uuid\":\"fbc6dc3d-c5f0-4399-801e-dfa5266260d0\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 358, '2022-01-28 03:53:34', '2022-01-28 03:53:35'),
(366, 'App\\Models\\Upload', 182, 'image', 'Storage services dubai', 'Storage-services-dubai.png', 'image/png', 'public', 98118, '[]', '{\"uuid\":\"4efae986-b671-4ef5-8480-bb78743f3054\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 360, '2022-01-28 04:01:20', '2022-01-28 04:01:20'),
(367, 'App\\Models\\Upload', 183, 'image', 'Storage services dubai', 'Storage-services-dubai.png', 'image/png', 'public', 98118, '[]', '{\"uuid\":\"8e358699-d869-4798-9932-ec465e3a5b49\",\"user_id\":1,\"generated_conversions\":{\"thumb\":true,\"icon\":true}}', '[]', 361, '2022-01-28 04:19:14', '2022-01-28 04:19:14');

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
(3, '2018_05_26_175145_create_permission_tables', 1),
(4, '2018_06_12_140344_create_media_table', 1),
(5, '2018_06_13_035117_create_uploads_table', 1),
(6, '2018_07_17_180731_create_settings_table', 1),
(7, '2018_07_24_211308_create_custom_fields_table', 1),
(8, '2018_07_24_211327_create_custom_field_values_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_08_29_213829_create_faq_categories_table', 1),
(11, '2019_08_29_213926_create_faqs_table', 1),
(12, '2019_10_22_144652_create_currencies_table', 1),
(13, '2021_01_07_162658_create_payment_methods_table', 1),
(14, '2021_01_07_164755_create_payment_statuses_table', 1),
(15, '2021_01_07_165422_create_payments_table', 1),
(16, '2021_01_13_105605_create_e_provider_types_table', 1),
(17, '2021_01_13_111155_create_e_providers_table', 1),
(18, '2021_01_13_111622_create_experiences_table', 1),
(19, '2021_01_13_111730_create_awards_table', 1),
(20, '2021_01_13_114302_create_taxes_table', 1),
(21, '2021_01_13_200249_create_addresses_table', 1),
(22, '2021_01_15_115239_create_e_provider_addresses_table', 1),
(23, '2021_01_15_115747_create_e_provider_users_table', 1),
(24, '2021_01_15_115850_create_e_provider_taxes_table', 1),
(25, '2021_01_16_160838_create_availability_hours_table', 1),
(26, '2021_01_19_135951_create_e_services_table', 1),
(27, '2021_01_19_140427_create_categories_table', 1),
(28, '2021_01_19_171553_create_e_service_categories_table', 1),
(29, '2021_01_22_194514_create_option_groups_table', 1),
(30, '2021_01_22_200807_create_options_table', 1),
(31, '2021_01_22_205819_create_favorites_table', 1),
(32, '2021_01_22_205944_create_favorite_options_table', 1),
(33, '2021_01_23_125641_create_e_service_reviews_table', 1),
(34, '2021_01_23_201533_create_galleries_table', 1),
(35, '2021_01_25_105421_create_slides_table', 1),
(36, '2021_01_25_162055_create_notifications_table', 1),
(37, '2021_01_25_170522_create_coupons_table', 1),
(38, '2021_01_25_170529_create_discountables_table', 1),
(39, '2021_01_25_191833_create_booking_statuses_table', 1),
(40, '2021_01_25_212252_create_bookings_table', 1),
(41, '2021_01_30_111717_create_e_provider_payouts_table', 1),
(42, '2021_01_30_135356_create_earnings_table', 1),
(43, '2021_02_24_102838_create_custom_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 6),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 7),
(4, 'App\\Models\\User', 8),
(4, 'App\\Models\\User', 9),
(4, 'App\\Models\\User', 10),
(4, 'App\\Models\\User', 12),
(4, 'App\\Models\\User', 13),
(4, 'App\\Models\\User', 14),
(4, 'App\\Models\\User', 15),
(4, 'App\\Models\\User', 16),
(4, 'App\\Models\\User', 17),
(4, 'App\\Models\\User', 18),
(4, 'App\\Models\\User', 19),
(4, 'App\\Models\\User', 20),
(4, 'App\\Models\\User', 21),
(4, 'App\\Models\\User', 22),
(4, 'App\\Models\\User', 23),
(4, 'App\\Models\\User', 24),
(4, 'App\\Models\\User', 25),
(4, 'App\\Models\\User', 26),
(4, 'App\\Models\\User', 27),
(4, 'App\\Models\\User', 28),
(4, 'App\\Models\\User', 29),
(4, 'App\\Models\\User', 30),
(4, 'App\\Models\\User', 32),
(4, 'App\\Models\\User', 33),
(4, 'App\\Models\\User', 34),
(4, 'App\\Models\\User', 35),
(4, 'App\\Models\\User', 36),
(4, 'App\\Models\\User', 37),
(4, 'App\\Models\\User', 38),
(4, 'App\\Models\\User', 39),
(4, 'App\\Models\\User', 40),
(4, 'App\\Models\\User', 41),
(4, 'App\\Models\\User', 42),
(4, 'App\\Models\\User', 43),
(4, 'App\\Models\\User', 44),
(4, 'App\\Models\\User', 46),
(4, 'App\\Models\\User', 47),
(4, 'App\\Models\\User', 48),
(4, 'App\\Models\\User', 49),
(4, 'App\\Models\\User', 50),
(4, 'App\\Models\\User', 51),
(4, 'App\\Models\\User', 52),
(4, 'App\\Models\\User', 53),
(4, 'App\\Models\\User', 54),
(4, 'App\\Models\\User', 55),
(4, 'App\\Models\\User', 56),
(4, 'App\\Models\\User', 57),
(4, 'App\\Models\\User', 58),
(4, 'App\\Models\\User', 59),
(4, 'App\\Models\\User', 60),
(4, 'App\\Models\\User', 61),
(4, 'App\\Models\\User', 62),
(4, 'App\\Models\\User', 63),
(4, 'App\\Models\\User', 64),
(4, 'App\\Models\\User', 65);

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

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(10,2) NOT NULL DEFAULT 0.00,
  `e_service_id` int(10) UNSIGNED NOT NULL,
  `option_group_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `option_groups`
--

CREATE TABLE `option_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allow_multiple` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `option_groups`
--

INSERT INTO `option_groups` (`id`, `name`, `allow_multiple`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"Size\"}', 0, '2021-01-22 15:49:15', '2021-06-23 03:33:46'),
(2, 'Area', 1, '2021-01-22 16:46:28', '2021-01-22 16:46:28'),
(3, 'Surface', 0, '2021-01-22 16:46:47', '2021-01-22 16:46:47'),
(5, '{\"en\":\"Hours\"}', 0, '2021-06-21 04:43:11', '2021-06-21 04:43:11'),
(6, '{\"en\":\"# of Bedrooms\"}', 0, '2021-06-22 13:18:20', '2021-06-22 13:18:20'),
(7, '{\"en\":\"Sofa Count\"}', 1, '2021-06-22 13:42:49', '2021-06-22 13:42:49'),
(8, '{\"en\":\"Curtain Size\"}', 1, '2021-06-23 03:48:34', '2021-06-23 03:48:34'),
(9, '{\"en\":\"Carpet Size\"}', 1, '2021-06-23 04:39:41', '2021-06-23 04:39:41'),
(10, '{\"en\":\"# of AC Units\"}', 1, '2021-06-23 05:42:45', '2021-06-23 05:42:45'),
(11, '{\"en\":\"Hours\"}', 1, '2021-06-24 01:52:32', '2021-06-24 01:52:32'),
(15, '{\"en\":\"Ceiling Only (No Retouching)\"}', 0, '2021-08-01 06:32:59', '2021-08-01 06:32:59'),
(16, '{\"en\":\"Pressing Only\"}', 1, '2021-10-25 08:12:28', '2021-10-25 08:14:57'),
(17, '{\"en\":\"Dry Cleaning\"}', 1, '2021-10-25 08:15:08', '2021-10-25 08:15:08');

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
('abdul.wahab@hotmail.co.za', '$2y$10$FkjsatgWhqTqWRH7..0s0.YNE4c4JLmjbDcs5m7pixl417W/yrZL2', '2021-06-22 12:22:31'),
('pawanpal1915@gmail.com', '$2y$10$sfSbfSxDx3IFj78ThXJ9meFcuCXgMH9jGygGpaOf4CNYI3Ygk8Zie', '2021-06-24 09:04:27'),
('abdul.wahab@higitech-me.com', '$2y$10$eR1L4zSLIzeVvkFKV3/aPu/0PJbRbUcvzbEX1cpCgQNIVlQc7be72', '2021-09-20 05:35:45'),
('admin@newhigitech.com', '$2y$10$GCfvloqjVRhw8rZEk38BE.U3Yza0lg7yfF3KHJcfdRm1E9xAL81Am', '2021-10-11 07:23:47'),
('higisales1@higitech-me.com', '$2y$10$Re8ojtgvFhLwt6dnw9xggOdZODDXi./3xt62gYy6hdbiNd40rzzdi', '2021-10-11 07:37:54'),
('matt9009murdock@gmail.com', '$2y$10$KHVRN.sqM.Rtrk7OjMuNZ.pqmIZ4Ko3w06HyIva55vA/s3AVl7muG', '2021-10-11 07:40:06'),
('starlinkramzy@gmail.com', '$2y$10$ksd75U71gDz793YhM51uHOuQJ5oBBVS00YkDnm84NHzkW/msGhne2', '2021-10-14 00:24:37'),
('ramzymohd@gmail.com', '$2y$10$1qigl4G20zyJ.nIkVsq//OyXvmaeP6HeGEMWg/kOoTyCNZlht2twa', '2021-10-17 13:22:07'),
('rainmaker9752@gmail.com', '$2y$10$XycQeH8g2kODk8rHyrMWge8z9MZKoe9CyVPXccOU33jkw/qA1xoq6', '2021-11-13 05:00:34');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `amount` double(10,2) NOT NULL DEFAULT 0.00,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method_id` int(10) UNSIGNED NOT NULL,
  `payment_status_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `amount`, `description`, `user_id`, `payment_method_id`, `payment_status_id`, `created_at`, `updated_at`) VALUES
(1, 240.00, NULL, 11, 6, 1, '2021-06-30 07:03:12', '2021-06-30 07:03:12'),
(2, 240.00, NULL, 11, 6, 1, '2021-06-30 07:07:16', '2021-06-30 07:07:16'),
(3, 240.00, NULL, 11, 6, 1, '2021-06-30 07:55:58', '2021-06-30 07:55:58'),
(4, 240.00, NULL, 11, 6, 1, '2021-07-06 07:12:01', '2021-07-06 07:12:01'),
(5, 100.00, NULL, 34, 6, 1, '2021-08-17 02:33:30', '2021-08-17 02:33:30'),
(6, 100.00, NULL, 34, 6, 1, '2021-08-17 03:51:46', '2021-08-17 03:51:46'),
(7, 100.00, NULL, 34, 6, 1, '2021-08-17 04:04:27', '2021-08-17 04:04:27'),
(8, 100.00, NULL, 34, 6, 1, '2021-08-17 04:31:02', '2021-08-17 04:31:02'),
(9, 100.00, NULL, 34, 6, 1, '2021-08-17 05:01:16', '2021-08-17 05:01:16'),
(10, 100.00, NULL, 34, 6, 1, '2021-08-17 05:01:48', '2021-08-17 05:01:48'),
(11, 100.00, NULL, 34, 6, 1, '2021-08-17 09:21:46', '2021-08-17 09:21:46'),
(12, 100.00, NULL, 34, 6, 1, '2021-08-18 07:06:53', '2021-08-18 07:06:53'),
(13, 100.00, NULL, 34, 6, 1, '2021-08-18 07:10:58', '2021-08-18 07:10:58'),
(14, 100.00, NULL, 34, 6, 1, '2021-08-18 07:43:07', '2021-08-18 07:43:07'),
(15, 100.00, NULL, 34, 6, 1, '2021-08-19 02:30:41', '2021-08-19 02:30:41'),
(16, 100.00, NULL, 34, 6, 1, '2021-08-19 09:35:11', '2021-08-19 09:35:11'),
(17, 100.00, NULL, 34, 6, 1, '2021-08-19 09:47:25', '2021-08-19 09:47:25'),
(18, 100.00, NULL, 34, 6, 1, '2021-08-19 10:52:53', '2021-08-19 10:52:53'),
(19, 100.00, NULL, 34, 6, 1, '2021-08-20 01:25:58', '2021-08-20 01:25:58'),
(20, 100.00, NULL, 34, 6, 1, '2021-08-20 02:05:26', '2021-08-20 02:05:26'),
(21, 100.00, NULL, 34, 6, 1, '2021-08-20 03:01:13', '2021-08-20 03:01:13'),
(22, 100.00, NULL, 34, 6, 1, '2021-08-20 03:19:31', '2021-08-20 03:19:31'),
(23, 100.00, NULL, 34, 6, 1, '2021-08-20 12:59:00', '2021-08-20 12:59:00'),
(24, 100.00, NULL, 34, 6, 1, '2021-08-20 13:00:07', '2021-08-20 13:00:07'),
(25, 100.00, NULL, 34, 7, 1, '2021-08-20 13:17:50', '2021-08-20 13:17:50'),
(26, 100.00, NULL, 34, 7, 1, '2021-08-20 13:18:18', '2021-08-20 13:18:18'),
(27, 100.00, NULL, 34, 7, 1, '2021-08-23 09:40:44', '2021-08-23 09:40:44'),
(28, 100.00, NULL, 34, 6, 1, '2021-08-23 10:10:34', '2021-08-23 10:10:34'),
(29, 100.00, NULL, 34, 7, 1, '2021-08-23 10:12:15', '2021-08-23 10:12:15'),
(30, 100.00, NULL, 34, 6, 1, '2021-09-22 09:09:22', '2021-09-22 09:09:22'),
(37, 105.00, NULL, 39, 7, 2, '2021-09-27 08:23:45', '2021-09-27 08:23:45'),
(38, 100.00, NULL, 34, 7, 2, '2021-09-27 08:47:55', '2021-09-27 08:47:55'),
(39, 100.00, NULL, 34, 7, 2, '2021-09-27 08:58:40', '2021-09-27 08:58:40'),
(40, 100.00, NULL, 34, 6, 1, '2021-09-27 13:52:21', '2021-09-27 13:52:21'),
(41, 100.00, NULL, 34, 7, 2, '2021-09-27 13:53:40', '2021-09-27 13:53:40'),
(42, 100.00, NULL, 34, 7, 2, '2021-09-27 14:04:04', '2021-09-27 14:04:04'),
(43, 100.00, NULL, 34, 7, 2, '2021-09-27 14:06:37', '2021-09-27 14:06:37'),
(44, 100.00, NULL, 34, 7, 2, '2021-09-27 14:21:25', '2021-09-27 14:21:25'),
(45, 100.00, NULL, 34, 7, 2, '2021-09-27 14:23:11', '2021-09-27 14:23:11'),
(46, 100.00, NULL, 34, 7, 2, '2021-09-27 15:55:42', '2021-09-27 15:55:42'),
(47, 100.00, NULL, 34, 7, 2, '2021-09-27 16:05:17', '2021-09-27 16:05:17'),
(48, 100.00, NULL, 34, 7, 2, '2021-09-27 16:09:42', '2021-09-27 16:09:42'),
(49, 100.00, NULL, 34, 7, 2, '2021-09-28 07:04:54', '2021-09-28 07:04:54'),
(50, 105.00, NULL, 39, 7, 2, '2021-09-29 03:53:38', '2021-09-29 03:53:38'),
(54, 100.00, NULL, 34, 7, 2, '2021-09-29 04:28:52', '2021-09-29 04:28:52'),
(55, 105.00, NULL, 39, 7, 2, '2021-09-29 06:29:55', '2021-09-29 06:29:55'),
(56, 100.00, NULL, 34, 6, 1, '2021-09-30 02:38:24', '2021-09-30 02:38:24'),
(57, 100.00, NULL, 34, 6, 1, '2021-10-03 05:09:29', '2021-10-03 05:09:29'),
(58, 1495.00, NULL, 34, 7, 2, '2021-10-12 06:04:19', '2021-10-12 06:04:19'),
(59, 292.95, NULL, 42, 7, 2, '2022-01-19 05:45:32', '2022-01-19 05:45:32'),
(60, 135.45, NULL, 42, 7, 2, '2022-01-19 05:50:35', '2022-01-19 05:50:35'),
(61, 135.45, NULL, 42, 7, 2, '2022-01-19 05:51:30', '2022-01-19 05:51:30'),
(64, 135.45, NULL, 42, 7, 2, '2022-01-20 02:12:05', '2022-01-20 02:12:05'),
(65, 135.45, NULL, 42, 7, 2, '2022-01-21 00:46:24', '2022-01-21 00:46:24'),
(66, 135.45, NULL, 42, 7, 2, '2022-01-21 00:55:05', '2022-01-21 00:55:05'),
(67, 135.45, NULL, 42, 7, 2, '2022-01-21 00:57:53', '2022-01-21 00:57:53'),
(68, 135.45, NULL, 42, 7, 2, '2022-01-21 01:10:06', '2022-01-21 01:10:06'),
(69, 292.95, NULL, 42, 7, 2, '2022-01-21 01:13:30', '2022-01-21 01:13:30'),
(70, 135.45, NULL, 42, 7, 2, '2022-01-21 01:15:15', '2022-01-21 01:15:15'),
(71, 135.45, NULL, 42, 7, 2, '2022-01-21 07:30:47', '2022-01-21 07:30:47'),
(72, 135.45, NULL, 42, 7, 2, '2022-01-21 07:31:00', '2022-01-21 07:31:00'),
(73, 135.45, NULL, 42, 7, 2, '2022-01-21 07:32:46', '2022-01-21 07:32:46'),
(74, 135.45, NULL, 42, 7, 2, '2022-01-21 08:01:55', '2022-01-21 08:01:55'),
(75, 135.45, NULL, 42, 7, 2, '2022-01-21 08:02:41', '2022-01-21 08:02:41'),
(76, 135.45, NULL, 42, 7, 2, '2022-01-21 08:14:14', '2022-01-21 08:14:14'),
(77, 135.45, NULL, 42, 7, 2, '2022-01-21 08:14:22', '2022-01-21 08:14:22'),
(78, 135.45, NULL, 42, 7, 2, '2022-01-21 08:16:39', '2022-01-21 08:16:39'),
(79, 135.45, NULL, 42, 7, 2, '2022-01-21 08:16:42', '2022-01-21 08:16:42'),
(80, 99.75, NULL, 42, 7, 2, '2022-01-21 08:19:11', '2022-01-21 08:19:11'),
(81, 99.75, NULL, 42, 7, 2, '2022-01-21 08:19:15', '2022-01-21 08:19:15'),
(82, 135.45, NULL, 42, 7, 2, '2022-01-21 08:46:37', '2022-01-21 08:46:37'),
(83, 135.45, NULL, 42, 7, 2, '2022-01-21 08:46:56', '2022-01-21 08:46:56'),
(84, 135.45, NULL, 42, 7, 2, '2022-01-21 08:53:48', '2022-01-21 08:53:48'),
(85, 135.45, NULL, 42, 7, 2, '2022-01-21 08:53:49', '2022-01-21 08:53:49'),
(86, 135.45, NULL, 42, 7, 2, '2022-01-21 12:20:17', '2022-01-21 12:20:17'),
(87, 135.45, NULL, 42, 7, 2, '2022-01-21 12:20:18', '2022-01-21 12:20:18'),
(88, 270.90, NULL, 42, 7, 2, '2022-01-21 12:33:53', '2022-01-21 12:33:53'),
(89, 270.90, NULL, 42, 7, 2, '2022-01-21 12:33:53', '2022-01-21 12:33:53'),
(90, 270.90, NULL, 42, 7, 2, '2022-01-21 12:51:54', '2022-01-21 12:51:54'),
(91, 270.90, NULL, 42, 7, 2, '2022-01-21 12:51:54', '2022-01-21 12:51:54'),
(92, 135.45, NULL, 42, 7, 2, '2022-01-22 01:15:53', '2022-01-22 01:15:53'),
(93, 135.45, NULL, 42, 7, 2, '2022-01-22 01:15:55', '2022-01-22 01:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `route` varchar(127) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `default` tinyint(1) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `description`, `route`, `order`, `default`, `enabled`, `created_at`, `updated_at`) VALUES
(6, '{\"en\":\"Cash\"}', '{\"en\":\"Click to pay cash when finish\"}', '/Cash', 2, 1, 1, '2021-02-17 18:38:42', '2021-09-22 05:45:04'),
(7, '{\"en\":\"Telr Pay Online\"}', '{\"en\":\"Pay Online\"}', '/stripe', 3, 1, 1, '2021-02-17 18:38:42', '2021-09-22 05:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `payment_statuses`
--

CREATE TABLE `payment_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_statuses`
--

INSERT INTO `payment_statuses` (`id`, `status`, `order`, `created_at`, `updated_at`) VALUES
(1, 'Pending', 1, '2021-01-17 11:28:28', '2021-02-17 17:55:15'),
(2, 'Paid', 10, '2021-01-11 19:19:49', '2021-02-17 17:55:53'),
(3, 'Failed', 20, '2021-01-17 10:05:04', '2021-02-17 17:56:32'),
(4, 'Refunded', 40, '2021-02-17 17:58:14', '2021-02-17 17:58:14');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard', 'web', '2021-01-07 09:17:34', '2021-01-07 09:17:34'),
(2, 'medias.create', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(3, 'users.profile', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(4, 'users.index', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(5, 'users.create', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(6, 'users.store', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(7, 'users.show', 'web', '2021-01-07 09:17:35', '2021-01-07 09:17:35'),
(8, 'users.edit', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(9, 'users.update', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(10, 'users.destroy', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(11, 'medias.delete', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(12, 'medias', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(13, 'permissions.index', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(14, 'permissions.create', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(15, 'permissions.store', 'web', '2021-01-07 09:17:36', '2021-01-07 09:17:36'),
(16, 'permissions.show', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(17, 'permissions.edit', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(18, 'permissions.update', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(19, 'permissions.destroy', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(20, 'roles.index', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(21, 'roles.create', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(22, 'roles.store', 'web', '2021-01-07 09:17:37', '2021-01-07 09:17:37'),
(23, 'roles.show', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(24, 'roles.edit', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(25, 'roles.update', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(26, 'roles.destroy', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(27, 'customFields.index', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(28, 'customFields.create', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(29, 'customFields.store', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(30, 'customFields.show', 'web', '2021-01-07 09:17:38', '2021-01-07 09:17:38'),
(31, 'customFields.edit', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(32, 'customFields.update', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(33, 'customFields.destroy', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(34, 'currencies.index', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(35, 'currencies.create', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(36, 'currencies.store', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(37, 'currencies.edit', 'web', '2021-01-07 09:17:39', '2021-01-07 09:17:39'),
(38, 'currencies.update', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(39, 'currencies.destroy', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(40, 'users.login-as-user', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(41, 'app-settings', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(42, 'faqCategories.index', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(43, 'faqCategories.create', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(44, 'faqCategories.store', 'web', '2021-01-07 09:17:40', '2021-01-07 09:17:40'),
(45, 'faqCategories.edit', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(46, 'faqCategories.update', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(47, 'faqCategories.destroy', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(48, 'faqs.index', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(49, 'faqs.create', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(50, 'faqs.store', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(51, 'faqs.edit', 'web', '2021-01-07 09:17:41', '2021-01-07 09:17:41'),
(52, 'faqs.update', 'web', '2021-01-07 09:17:42', '2021-01-07 09:17:42'),
(53, 'faqs.destroy', 'web', '2021-01-07 09:17:42', '2021-01-07 09:17:42'),
(54, 'payments.index', 'web', '2021-01-10 20:04:33', '2021-01-10 20:04:33'),
(55, 'payments.show', 'web', '2021-01-10 20:04:33', '2021-01-10 20:04:33'),
(56, 'payments.update', 'web', '2021-01-10 20:04:33', '2021-01-10 20:04:33'),
(57, 'paymentMethods.index', 'web', '2021-01-10 20:04:33', '2021-01-10 20:04:33'),
(58, 'paymentMethods.create', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(59, 'paymentMethods.store', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(60, 'paymentMethods.edit', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(61, 'paymentMethods.update', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(62, 'paymentMethods.destroy', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(63, 'paymentStatuses.index', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(64, 'paymentStatuses.create', 'web', '2021-01-10 20:04:34', '2021-01-10 20:04:34'),
(65, 'paymentStatuses.store', 'web', '2021-01-10 20:04:35', '2021-01-10 20:04:35'),
(66, 'paymentStatuses.edit', 'web', '2021-01-10 20:04:35', '2021-01-10 20:04:35'),
(67, 'paymentStatuses.update', 'web', '2021-01-10 20:04:35', '2021-01-10 20:04:35'),
(68, 'paymentStatuses.destroy', 'web', '2021-01-10 20:04:35', '2021-01-10 20:04:35'),
(69, 'verification.notice', 'web', '2021-01-12 06:19:50', '2021-01-12 06:19:50'),
(70, 'verification.verify', 'web', '2021-01-12 06:19:50', '2021-01-12 06:19:50'),
(71, 'verification.resend', 'web', '2021-01-12 06:19:51', '2021-01-12 06:19:51'),
(72, 'awards.index', 'web', '2021-01-12 06:19:51', '2021-01-12 06:19:51'),
(73, 'awards.create', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(74, 'awards.store', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(75, 'awards.show', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(76, 'awards.edit', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(77, 'awards.update', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(78, 'awards.destroy', 'web', '2021-01-12 06:19:52', '2021-01-12 06:19:52'),
(79, 'experiences.index', 'web', '2021-01-12 07:20:29', '2021-01-12 07:20:29'),
(80, 'experiences.create', 'web', '2021-01-12 07:20:29', '2021-01-12 07:20:29'),
(81, 'experiences.store', 'web', '2021-01-12 07:20:30', '2021-01-12 07:20:30'),
(82, 'experiences.show', 'web', '2021-01-12 07:20:30', '2021-01-12 07:20:30'),
(83, 'experiences.edit', 'web', '2021-01-12 07:20:30', '2021-01-12 07:20:30'),
(84, 'experiences.update', 'web', '2021-01-12 07:20:30', '2021-01-12 07:20:30'),
(85, 'experiences.destroy', 'web', '2021-01-12 07:20:30', '2021-01-12 07:20:30'),
(92, 'eProviderTypes.index', 'web', '2021-01-13 07:31:08', '2021-01-13 07:31:08'),
(93, 'eProviderTypes.create', 'web', '2021-01-13 07:31:09', '2021-01-13 07:31:09'),
(94, 'eProviderTypes.store', 'web', '2021-01-13 07:31:09', '2021-01-13 07:31:09'),
(95, 'eProviderTypes.edit', 'web', '2021-01-13 07:31:09', '2021-01-13 07:31:09'),
(96, 'eProviderTypes.update', 'web', '2021-01-13 07:31:09', '2021-01-13 07:31:09'),
(97, 'eProviderTypes.destroy', 'web', '2021-01-13 07:31:09', '2021-01-13 07:31:09'),
(98, 'eProviders.index', 'web', '2021-01-13 07:48:55', '2021-01-13 07:48:55'),
(99, 'eProviders.create', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(100, 'eProviders.store', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(101, 'eProviders.edit', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(102, 'eProviders.update', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(103, 'eProviders.destroy', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(104, 'addresses.index', 'web', '2021-01-13 07:48:56', '2021-01-13 07:48:56'),
(105, 'addresses.create', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(106, 'addresses.store', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(107, 'addresses.edit', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(108, 'addresses.update', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(109, 'addresses.destroy', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(110, 'taxes.index', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(111, 'taxes.create', 'web', '2021-01-13 07:48:57', '2021-01-13 07:48:57'),
(112, 'taxes.store', 'web', '2021-01-13 07:48:58', '2021-01-13 07:48:58'),
(113, 'taxes.edit', 'web', '2021-01-13 07:48:58', '2021-01-13 07:48:58'),
(114, 'taxes.update', 'web', '2021-01-13 07:48:58', '2021-01-13 07:48:58'),
(115, 'taxes.destroy', 'web', '2021-01-13 07:48:58', '2021-01-13 07:48:58'),
(116, 'availabilityHours.index', 'web', '2021-01-16 12:14:21', '2021-01-16 12:14:21'),
(117, 'availabilityHours.create', 'web', '2021-01-16 12:14:21', '2021-01-16 12:14:21'),
(118, 'availabilityHours.store', 'web', '2021-01-16 12:14:21', '2021-01-16 12:14:21'),
(119, 'availabilityHours.edit', 'web', '2021-01-16 12:14:21', '2021-01-16 12:14:21'),
(120, 'availabilityHours.update', 'web', '2021-01-16 12:14:22', '2021-01-16 12:14:22'),
(121, 'availabilityHours.destroy', 'web', '2021-01-16 12:14:22', '2021-01-16 12:14:22'),
(122, 'eServices.index', 'web', '2021-01-19 10:03:00', '2021-01-19 10:03:00'),
(123, 'eServices.create', 'web', '2021-01-19 10:03:00', '2021-01-19 10:03:00'),
(124, 'eServices.store', 'web', '2021-01-19 10:03:00', '2021-01-19 10:03:00'),
(126, 'eServices.edit', 'web', '2021-01-19 10:03:01', '2021-01-19 10:03:01'),
(127, 'eServices.update', 'web', '2021-01-19 10:03:01', '2021-01-19 10:03:01'),
(128, 'eServices.destroy', 'web', '2021-01-19 10:03:01', '2021-01-19 10:03:01'),
(129, 'categories.index', 'web', '2021-01-19 10:08:55', '2021-01-19 10:08:55'),
(130, 'categories.create', 'web', '2021-01-19 10:08:55', '2021-01-19 10:08:55'),
(131, 'categories.store', 'web', '2021-01-19 10:08:55', '2021-01-19 10:08:55'),
(132, 'categories.edit', 'web', '2021-01-19 10:08:55', '2021-01-19 10:08:55'),
(133, 'categories.update', 'web', '2021-01-19 10:08:56', '2021-01-19 10:08:56'),
(134, 'categories.destroy', 'web', '2021-01-19 10:08:56', '2021-01-19 10:08:56'),
(135, 'optionGroups.index', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(136, 'optionGroups.create', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(137, 'optionGroups.store', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(138, 'optionGroups.edit', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(139, 'optionGroups.update', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(140, 'optionGroups.destroy', 'web', '2021-01-22 15:48:32', '2021-01-22 15:48:32'),
(141, 'options.index', 'web', '2021-01-22 16:10:51', '2021-01-22 16:10:51'),
(142, 'options.create', 'web', '2021-01-22 16:10:51', '2021-01-22 16:10:51'),
(143, 'options.store', 'web', '2021-01-22 16:10:52', '2021-01-22 16:10:52'),
(144, 'options.edit', 'web', '2021-01-22 16:10:52', '2021-01-22 16:10:52'),
(145, 'options.update', 'web', '2021-01-22 16:10:52', '2021-01-22 16:10:52'),
(146, 'options.destroy', 'web', '2021-01-22 16:10:52', '2021-01-22 16:10:52'),
(147, 'favorites.index', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(148, 'favorites.create', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(149, 'favorites.store', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(150, 'favorites.edit', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(151, 'favorites.update', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(152, 'favorites.destroy', 'web', '2021-01-22 17:01:13', '2021-01-22 17:01:13'),
(153, 'eServiceReviews.index', 'web', '2021-01-23 15:42:57', '2021-01-23 15:42:57'),
(154, 'eServiceReviews.create', 'web', '2021-01-23 15:42:58', '2021-01-23 15:42:58'),
(155, 'eServiceReviews.store', 'web', '2021-01-23 15:42:58', '2021-01-23 15:42:58'),
(156, 'eServiceReviews.edit', 'web', '2021-01-23 15:42:58', '2021-01-23 15:42:58'),
(157, 'eServiceReviews.update', 'web', '2021-01-23 15:42:58', '2021-01-23 15:42:58'),
(158, 'eServiceReviews.destroy', 'web', '2021-01-23 15:42:58', '2021-01-23 15:42:58'),
(160, 'galleries.index', 'web', '2021-01-23 16:17:46', '2021-01-23 16:17:46'),
(161, 'galleries.create', 'web', '2021-01-23 16:17:47', '2021-01-23 16:17:47'),
(162, 'galleries.store', 'web', '2021-01-23 16:17:47', '2021-01-23 16:17:47'),
(163, 'galleries.edit', 'web', '2021-01-23 16:17:47', '2021-01-23 16:17:47'),
(164, 'galleries.update', 'web', '2021-01-23 16:17:47', '2021-01-23 16:17:47'),
(165, 'galleries.destroy', 'web', '2021-01-23 16:17:47', '2021-01-23 16:17:47'),
(166, 'requestedEProviders.index', 'web', '2021-01-25 05:53:17', '2021-01-25 05:53:17'),
(167, 'slides.index', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(168, 'slides.create', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(169, 'slides.store', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(170, 'slides.edit', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(171, 'slides.update', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(172, 'slides.destroy', 'web', '2021-01-25 07:01:20', '2021-01-25 07:01:20'),
(173, 'notifications.index', 'web', '2021-01-25 11:42:33', '2021-01-25 11:42:33'),
(174, 'notifications.show', 'web', '2021-01-25 11:42:34', '2021-01-25 11:42:34'),
(175, 'notifications.destroy', 'web', '2021-01-25 11:42:34', '2021-01-25 11:42:34'),
(176, 'coupons.index', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(177, 'coupons.create', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(178, 'coupons.store', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(179, 'coupons.edit', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(180, 'coupons.update', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(181, 'coupons.destroy', 'web', '2021-01-25 12:11:55', '2021-01-25 12:11:55'),
(182, 'bookingStatuses.index', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(183, 'bookingStatuses.create', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(184, 'bookingStatuses.store', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(185, 'bookingStatuses.edit', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(186, 'bookingStatuses.update', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(187, 'bookingStatuses.destroy', 'web', '2021-01-25 15:21:01', '2021-01-25 15:21:01'),
(188, 'bookings.index', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(189, 'bookings.create', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(190, 'bookings.store', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(191, 'bookings.show', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(192, 'bookings.edit', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(193, 'bookings.update', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(194, 'bookings.destroy', 'web', '2021-01-25 17:27:09', '2021-01-25 17:27:09'),
(195, 'eProviderPayouts.index', 'web', '2021-01-30 07:23:08', '2021-01-30 07:23:08'),
(196, 'eProviderPayouts.create', 'web', '2021-01-30 07:23:08', '2021-01-30 07:23:08'),
(197, 'eProviderPayouts.store', 'web', '2021-01-30 07:23:08', '2021-01-30 07:23:08'),
(198, 'eProviderPayouts.destroy', 'web', '2021-01-30 07:23:09', '2021-01-30 07:23:09'),
(199, 'earnings.index', 'web', '2021-01-30 09:57:57', '2021-01-30 09:57:57'),
(200, 'earnings.create', 'web', '2021-01-30 09:57:57', '2021-01-30 09:57:57'),
(201, 'earnings.store', 'web', '2021-01-30 09:57:57', '2021-01-30 09:57:57'),
(202, 'earnings.destroy', 'web', '2021-01-30 09:57:57', '2021-01-30 09:57:57'),
(203, 'customPages.index', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(204, 'customPages.create', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(205, 'customPages.store', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(206, 'customPages.show', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(207, 'customPages.edit', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(208, 'customPages.update', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44'),
(209, 'customPages.destroy', 'web', '2021-02-24 07:37:44', '2021-02-24 07:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'web',
  `default` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `default`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'web', 0, NULL, NULL),
(3, 'provider', 'web', 0, NULL, NULL),
(4, 'customer', 'web', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(2, 2),
(2, 4),
(3, 2),
(3, 4),
(4, 2),
(5, 2),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(9, 4),
(10, 2),
(11, 2),
(11, 4),
(12, 2),
(13, 2),
(17, 2),
(19, 2),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 2),
(27, 2),
(28, 2),
(29, 2),
(30, 2),
(31, 2),
(32, 2),
(33, 2),
(34, 2),
(35, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(42, 4),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(48, 4),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(54, 4),
(57, 2),
(58, 2),
(59, 2),
(60, 2),
(61, 2),
(62, 2),
(63, 2),
(66, 2),
(67, 2),
(69, 2),
(70, 2),
(71, 2),
(72, 2),
(73, 2),
(74, 2),
(75, 2),
(76, 2),
(77, 2),
(78, 2),
(79, 2),
(80, 2),
(81, 2),
(82, 2),
(83, 2),
(84, 2),
(85, 2),
(104, 2),
(104, 4),
(105, 2),
(105, 4),
(106, 2),
(106, 4),
(107, 2),
(107, 4),
(108, 2),
(108, 4),
(109, 2),
(109, 4),
(110, 2),
(111, 2),
(112, 2),
(113, 2),
(114, 2),
(115, 2),
(116, 2),
(117, 2),
(118, 2),
(119, 2),
(120, 2),
(121, 2),
(122, 2),
(122, 4),
(123, 2),
(124, 2),
(126, 2),
(127, 2),
(128, 2),
(129, 2),
(129, 4),
(130, 2),
(131, 2),
(132, 2),
(133, 2),
(134, 2),
(135, 2),
(136, 2),
(137, 2),
(138, 2),
(139, 2),
(140, 2),
(141, 2),
(142, 2),
(143, 2),
(144, 2),
(145, 2),
(146, 2),
(147, 2),
(147, 4),
(148, 2),
(149, 2),
(150, 2),
(151, 2),
(152, 2),
(153, 2),
(153, 4),
(156, 2),
(156, 4),
(157, 2),
(157, 4),
(158, 2),
(160, 2),
(161, 2),
(162, 2),
(163, 2),
(164, 2),
(165, 2),
(167, 2),
(168, 2),
(169, 2),
(170, 2),
(171, 2),
(172, 2),
(173, 2),
(173, 4),
(174, 2),
(175, 2),
(175, 4),
(176, 2),
(177, 2),
(178, 2),
(179, 2),
(180, 2),
(181, 2),
(182, 2),
(185, 2),
(186, 2),
(188, 2),
(188, 4),
(191, 2),
(191, 4),
(192, 2),
(193, 2),
(194, 2),
(199, 2),
(200, 2),
(203, 2),
(203, 4),
(204, 2),
(205, 2),
(206, 2),
(207, 2),
(208, 2),
(209, 2);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(10) UNSIGNED DEFAULT 0,
  `text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'start',
  `text_color` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_color` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_color` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `indicator_color` varchar(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_fit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'cover',
  `e_service_id` int(10) UNSIGNED DEFAULT NULL,
  `e_provider_id` int(10) UNSIGNED DEFAULT NULL,
  `enabled` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `order`, `text`, `button`, `text_position`, `text_color`, `button_color`, `background_color`, `indicator_color`, `image_fit`, `e_service_id`, `e_provider_id`, `enabled`, `created_at`, `updated_at`) VALUES
(1, 1, 'Assign a Handyman at Work to Fix the Household', 'Discover It', 'bottom_start', '#333333', '#009E6A', '#FFFFFF', '#333333', 'cover', NULL, NULL, 1, '2021-01-25 07:51:45', '2021-01-31 07:08:13'),
(2, 2, 'Fix the Broken Stuff by Asking for the Technicians', 'Repair', 'bottom_start', '#333333', '#F4841F', '#FFFFFF', '#333333', 'cover', NULL, NULL, 1, '2021-01-25 10:23:49', '2021-01-31 07:03:05'),
(3, 3, 'Add Hands to Your Cleaning Chores', 'Book Now', 'bottom_start', '#333333', '#1FA3F4', '#FFFFFF', '#333333', 'cover', NULL, NULL, 1, '2021-01-31 07:04:36', '2021-01-31 07:06:45');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` double(10,2) NOT NULL DEFAULT 0.00,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `name`, `value`, `type`, `created_at`, `updated_at`) VALUES
(6, '{\"en\":\"VAT\"}', 5.00, 'percent', '2021-09-22 04:46:48', '2021-09-22 04:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `uuid`, `created_at`, `updated_at`) VALUES
(1, '3cd5a4da-d79d-419d-8ce1-3f040d5b01d8', '2021-06-20 00:31:52', '2021-06-20 00:31:52'),
(2, '5902ab9b-9b9f-4733-a4e0-1d3801379f15', '2021-06-20 01:23:41', '2021-06-20 01:23:41'),
(3, 'e2f668ab-0c9a-48cd-8c76-76b95293bd4b', '2021-06-20 01:25:31', '2021-06-20 01:25:31'),
(4, '04f5fdf6-cb81-496d-9498-2665bb01cd6a', '2021-06-20 01:26:51', '2021-06-20 01:26:51'),
(5, '6aeed207-2ed5-444d-80a7-abe790654cb8', '2021-06-20 01:56:21', '2021-06-20 01:56:21'),
(6, '44424f0c-901b-4e75-8165-d69418a0ea67', '2021-06-20 01:59:44', '2021-06-20 01:59:44'),
(7, 'e2156770-ed87-4b1c-ae19-5d87d013bb7c', '2021-06-20 04:43:16', '2021-06-20 04:43:16'),
(8, '8f8c57d0-e45d-4109-9744-94b59377c964', '2021-06-20 09:05:41', '2021-06-20 09:05:41'),
(9, '1d46df66-e057-4863-ad67-502ecf548c84', '2021-06-20 09:05:59', '2021-06-20 09:05:59'),
(10, 'ee0b9b49-31cb-4f86-8141-8916e204a2a3', '2021-06-21 02:30:41', '2021-06-21 02:30:41'),
(11, 'ccf02634-1492-492e-a197-a2ca04ddae5d', '2021-06-21 02:30:58', '2021-06-21 02:30:58'),
(12, '4d26cd8d-5d0c-473e-809b-dcc6289b601a', '2021-06-21 02:31:11', '2021-06-21 02:31:11'),
(13, '0142d5cb-367b-4318-a4b4-168eaae2760f', '2021-06-21 03:30:01', '2021-06-21 03:30:01'),
(14, 'bc2ef0eb-d284-48bb-ad90-3abff84899ad', '2021-06-21 04:00:18', '2021-06-21 04:00:18'),
(15, '230d5f03-3274-40a0-84b2-13e066dc4a16', '2021-06-21 04:00:36', '2021-06-21 04:00:36'),
(16, 'a0a5c8a6-2377-4a73-95ae-4332c94a0f92', '2021-06-21 04:30:45', '2021-06-21 04:30:45'),
(17, '9f622dfe-8efa-4e43-9ae3-dff65819e962', '2021-06-21 04:39:46', '2021-06-21 04:39:46'),
(18, '912240a5-8a8f-4bf4-a8b1-055062279e34', '2021-06-21 04:40:59', '2021-06-21 04:40:59'),
(19, 'cfabba5e-1c9d-483a-9a8a-cad5458a7438', '2021-06-21 04:41:50', '2021-06-21 04:41:50'),
(20, '40e775e7-6ce0-4812-9c96-289f57485143', '2021-06-21 04:42:49', '2021-06-21 04:42:49'),
(21, '3b2336b1-d92f-4dd9-a51f-f614b0eab956', '2021-06-21 04:44:57', '2021-06-21 04:44:57'),
(22, 'cc49c823-d38c-4446-ade4-fc7d17deeeb6', '2021-06-21 05:36:19', '2021-06-21 05:36:19'),
(23, '374095bb-3161-4744-b60b-17013c9ebaca', '2021-06-21 11:21:40', '2021-06-21 11:21:40'),
(24, 'e10f2544-eb00-4e4e-b447-d145d6fe1342', '2021-06-21 11:22:11', '2021-06-21 11:22:11'),
(25, '5c3378f2-33f4-4093-ae80-a52cae8333fe', '2021-06-21 11:24:57', '2021-06-21 11:24:57'),
(26, 'b8710845-2221-449d-b23d-2dd2e2a0c947', '2021-06-21 11:33:59', '2021-06-21 11:33:59'),
(27, '2736ca7b-c0a6-4f69-bd99-a0ded0fc0d2e', '2021-06-21 11:34:27', '2021-06-21 11:34:27'),
(28, 'ba1de726-2fbc-4de3-8084-2ea1a9a67029', '2021-06-22 01:38:50', '2021-06-22 01:38:50'),
(29, 'a842dd07-0cfc-4487-b52f-ecf621b1e5d6', '2021-06-22 01:40:30', '2021-06-22 01:40:30'),
(30, 'e671183f-8473-4d14-b4c6-50b572cf25de', '2021-06-22 03:52:00', '2021-06-22 03:52:00'),
(31, '1f76c4f2-9b86-4738-b5fa-47f163fad3d8', '2021-06-22 05:05:55', '2021-06-22 05:05:55'),
(32, '12cad228-dba3-48c6-a90a-11a792d2c4cb', '2021-06-22 05:06:57', '2021-06-22 05:06:57'),
(33, '535ffc49-ead4-4647-a64c-76e2130b201a', '2021-06-22 05:07:47', '2021-06-22 05:07:47'),
(34, 'ecbff71e-22ef-42bc-b8bf-79c07aa36293', '2021-06-22 05:08:46', '2021-06-22 05:08:46'),
(35, 'ee415a1a-582a-44fc-8f8e-95467b32d2d0', '2021-06-22 12:16:10', '2021-06-22 12:16:10'),
(36, '79ab618d-fca2-4fe7-92de-58aa48054524', '2021-06-22 12:17:18', '2021-06-22 12:17:18'),
(37, 'b8225a15-841c-4fa7-a951-68ef8ef253bb', '2021-06-22 12:18:43', '2021-06-22 12:18:43'),
(38, '2b561d5a-6f81-4265-b1e7-3f1a0880cf3f', '2021-06-22 12:19:17', '2021-06-22 12:19:17'),
(39, '9b7fcec1-cbdd-4d40-91f5-23306a54f2dc', '2021-06-22 12:47:24', '2021-06-22 12:47:24'),
(40, 'afc46254-098f-42d5-b21b-5856dc45bb59', '2021-06-22 12:57:35', '2021-06-22 12:57:35'),
(41, '1c39e05c-cc2b-4128-b99f-b0c70094de29', '2021-06-22 12:59:50', '2021-06-22 12:59:50'),
(42, '957a634a-998d-437c-ae6a-c4769c4284bf', '2021-06-22 13:00:39', '2021-06-22 13:00:39'),
(43, '6e4c474d-607e-4074-a876-b32fdd1207e3', '2021-06-22 13:01:39', '2021-06-22 13:01:39'),
(44, '6e1fd7a1-88ff-4372-989a-d2b1dec5ad54', '2021-06-22 13:02:14', '2021-06-22 13:02:14'),
(45, 'efd65ac8-6462-478f-93d4-e026fdc1653a', '2021-06-22 13:03:14', '2021-06-22 13:03:14'),
(46, 'f261d923-c106-4837-9ee2-e67e34736a35', '2021-06-22 13:17:12', '2021-06-22 13:17:12'),
(47, '6582694a-5824-49c3-a8bf-4ae37deaa432', '2021-06-22 13:20:07', '2021-06-22 13:20:07'),
(48, '5e34b699-819e-4843-9d4f-bd69cf26e8f0', '2021-06-22 13:22:17', '2021-06-22 13:22:17'),
(49, '5ab5608c-101a-40a6-92be-d83feac3521f', '2021-06-22 13:23:15', '2021-06-22 13:23:15'),
(50, 'b55c973f-d0d4-4263-9e91-67f9e5f1d9f4', '2021-06-22 13:24:18', '2021-06-22 13:24:18'),
(51, '401d0f1e-47df-49d0-85fd-d08d85d16b91', '2021-06-22 13:26:04', '2021-06-22 13:26:04'),
(52, 'fc17f54f-1558-4f70-bf2e-547ba30796bd', '2021-06-22 13:26:53', '2021-06-22 13:26:53'),
(53, '52e00ed4-7c06-49b7-9d9f-a7c9d1bbe69c', '2021-06-22 13:27:48', '2021-06-22 13:27:48'),
(54, '3bc1c8a4-8b21-40c2-90b7-981d9043d482', '2021-06-22 13:28:32', '2021-06-22 13:28:32'),
(55, '32251e0a-4cd0-4268-ace0-3b069484e946', '2021-06-22 13:29:43', '2021-06-22 13:29:43'),
(56, '6fa0423c-ff4a-434f-9f24-ff79fc92674c', '2021-06-22 13:32:02', '2021-06-22 13:32:02'),
(57, 'a4858572-ec8d-465f-a7a4-f6f65b8e05f4', '2021-06-22 13:33:12', '2021-06-22 13:33:12'),
(58, '7f6a20d8-e029-467a-b01b-d5616de5f673', '2021-06-22 13:40:31', '2021-06-22 13:40:31'),
(59, '744f537d-f361-4bce-b2b8-d2e7c1efb1ed', '2021-06-22 13:41:49', '2021-06-22 13:41:49'),
(60, '107ea722-4173-498d-b1c6-756f9afdba5f', '2021-06-22 13:43:11', '2021-06-22 13:43:11'),
(61, '92f181d2-dc79-4dc2-8d76-a8f6d10fb230', '2021-06-23 02:16:22', '2021-06-23 02:16:22'),
(62, 'd05be5f9-48d2-4354-947d-a01ae11e55bf', '2021-06-23 02:17:23', '2021-06-23 02:17:23'),
(63, 'adf5bf42-eb67-41a0-8f9d-dee1ee561322', '2021-06-23 02:18:37', '2021-06-23 02:18:37'),
(64, 'abcc8df6-6bd3-4989-8fd1-baf1d56569a5', '2021-06-23 02:20:56', '2021-06-23 02:20:56'),
(65, 'd199277a-a4d5-4679-bb96-508c8145eb29', '2021-06-23 03:47:03', '2021-06-23 03:47:03'),
(66, 'a6cfb3e4-5728-4fd2-ac80-45cca3bfd384', '2021-07-18 08:50:36', '2021-07-18 08:50:36'),
(67, '318b89fe-2016-4c29-ab10-5ed51d1382d1', '2021-07-18 08:50:52', '2021-07-18 08:50:52'),
(68, '52dd2d5f-fc2e-4f24-8810-a8c3ca4d8336', '2021-07-18 08:51:12', '2021-07-18 08:51:12'),
(69, '129b048d-9cc5-4ac8-8de8-4b6c14210805', '2021-07-18 08:51:24', '2021-07-18 08:51:24'),
(70, 'a56cfb7c-ab7d-4b8b-8f30-ec43760ef3a4', '2021-07-18 08:51:35', '2021-07-18 08:51:35'),
(71, '9b865a47-2761-494a-9cde-9cae5f61e7e9', '2021-07-18 08:51:49', '2021-07-18 08:51:49'),
(72, '9cf72585-aa7a-4d03-ad15-700afa15dcad', '2021-08-18 04:33:07', '2021-08-18 04:33:07'),
(73, 'eb286377-15e7-4b36-8187-009290745bca', '2021-08-18 04:34:32', '2021-08-18 04:34:32'),
(74, '1ad3e8d2-0868-4d19-9644-bc0f7fa3b574', '2021-08-18 04:40:11', '2021-08-18 04:40:11'),
(75, '6fdb4adf-f370-4413-9647-488d4543f638', '2021-09-22 05:29:22', '2021-09-22 05:29:22'),
(76, 'cd66afb8-c705-4a91-8b1c-75b4e466371f', '2021-09-22 05:34:07', '2021-09-22 05:34:07'),
(77, 'bf4db505-6de7-4a96-998c-961af268bde6', '2021-09-22 05:34:57', '2021-09-22 05:34:57'),
(78, 'ec8510e8-b7fb-415f-9b67-72b21e5abbb9', '2021-09-22 05:36:48', '2021-09-22 05:36:48'),
(79, '5abd0aa0-4bcd-4912-9ea6-179b4fd1d972', '2021-09-22 05:37:35', '2021-09-22 05:37:35'),
(80, 'd444b843-00d0-4c51-ad1d-5c58308bc1fc', '2021-09-22 05:38:42', '2021-09-22 05:38:42'),
(81, '12ccf47d-19c4-4bbd-bb65-5789eca98565', '2021-09-22 05:46:32', '2021-09-22 05:46:32'),
(82, 'af45bca6-4d0d-43d7-85b7-43a8613a5c93', '2021-09-22 05:46:55', '2021-09-22 05:46:55'),
(83, '40db6680-c0b1-4dac-ab67-900b63184675', '2021-09-22 05:47:21', '2021-09-22 05:47:21'),
(84, '629d1a8e-d552-4118-b426-41dbf1419c5d', '2021-09-22 05:47:46', '2021-09-22 05:47:46'),
(85, 'f3053d14-d881-48cb-98d1-266eb1ecb0cb', '2021-09-22 05:48:00', '2021-09-22 05:48:00'),
(86, 'b56b9a20-6709-4096-874b-774e0a694dd0', '2021-09-22 05:48:02', '2021-09-22 05:48:02'),
(87, '8841b3fc-f89b-4d36-840f-ed8c62f62b26', '2021-09-22 05:48:19', '2021-09-22 05:48:19'),
(88, '03580812-3a25-46f4-b8c3-c640e1fe1542', '2021-09-22 05:48:37', '2021-09-22 05:48:37'),
(89, '2b8b0ffe-7f94-4267-a6bd-489bfc82e8f7', '2021-09-22 08:52:07', '2021-09-22 08:52:07'),
(90, '9594058b-c095-4c73-8b13-0f8e0f9530be', '2021-09-22 08:54:43', '2021-09-22 08:54:43'),
(91, 'e5df7da7-b428-49a8-b42e-6635061e0a2a', '2021-09-22 08:55:24', '2021-09-22 08:55:24'),
(92, 'f2143943-063f-4206-ba61-097137b55961', '2021-09-22 08:55:33', '2021-09-22 08:55:33'),
(93, '3a856f19-334c-45e1-b277-b6398cf2512a', '2021-09-30 08:20:34', '2021-09-30 08:20:34'),
(94, 'b69a3d53-edb6-4707-884b-8cc1856919a6', '2021-09-30 08:21:46', '2021-09-30 08:21:46'),
(95, 'ba3c3620-e9b2-45a6-9c52-1b42b5cac1af', '2021-09-30 10:57:54', '2021-09-30 10:57:54'),
(96, '94080516-5c1e-4629-a75d-e9bc89231059', '2021-09-30 11:00:01', '2021-09-30 11:00:01'),
(97, '6fa66d77-d28c-4323-ab9a-778ed986b247', '2021-09-30 11:00:19', '2021-09-30 11:00:19'),
(98, '3666bb9a-3fd0-4916-a47f-0081108f4365', '2021-09-30 11:05:32', '2021-09-30 11:05:32'),
(99, '3228d74f-2151-4b12-8559-d6dc7480a2fe', '2021-09-30 11:29:38', '2021-09-30 11:29:38'),
(100, '1a8dd33a-1024-493d-bb62-4370d25b1c7a', '2021-10-04 05:19:41', '2021-10-04 05:19:41'),
(101, '07144699-083d-4663-aa8d-bb6676e543e8', '2021-10-25 08:29:49', '2021-10-25 08:29:49'),
(102, 'aa8bad2a-5f3a-4348-86a2-2c47806881a8', '2021-10-25 08:30:18', '2021-10-25 08:30:18'),
(103, '53f81bb0-4c24-44c8-b056-6cfc7d00e1b8', '2021-10-25 08:32:57', '2021-10-25 08:32:57'),
(104, '007206a5-427a-400f-8bc5-2a9c6ebb3766', '2021-10-25 08:33:23', '2021-10-25 08:33:23'),
(105, 'c0b284f0-76ab-4433-a0e4-1c2c3e8e2c00', '2021-10-25 08:33:54', '2021-10-25 08:33:54'),
(106, '440767c5-1128-4b63-b226-990319dca617', '2021-10-25 08:37:24', '2021-10-25 08:37:24'),
(107, '6aa0ca5a-815d-47be-9483-4a2a8663853d', '2021-10-25 08:37:45', '2021-10-25 08:37:45'),
(108, '4bdf53b3-2da6-4653-b51c-7de0237c4df2', '2021-10-25 08:40:32', '2021-10-25 08:40:32'),
(109, '07253bad-3698-4f15-b0c7-e8183c69e8d8', '2021-10-25 08:41:53', '2021-10-25 08:41:53'),
(110, '06e1000d-eb2e-40d5-80d7-100fc24a9d97', '2021-10-25 08:44:32', '2021-10-25 08:44:32'),
(111, 'de0a2d71-84eb-4f39-9d04-eef36023d83c', '2021-10-25 08:44:58', '2021-10-25 08:44:58'),
(112, 'a7f2be19-d6e9-44e8-88aa-f0b25647389c', '2021-10-25 08:49:20', '2021-10-25 08:49:20'),
(113, '8e7e8d36-c02c-4c67-a1f3-fb4f64f4c50c', '2021-10-25 08:49:53', '2021-10-25 08:49:53'),
(114, 'cc8836ed-5beb-4f1f-8933-4658de6afe48', '2021-10-25 08:54:47', '2021-10-25 08:54:47'),
(115, '1da8eefc-7f69-4a5c-8233-1ed1e408a438', '2021-10-25 08:55:28', '2021-10-25 08:55:28'),
(116, '4f8772d6-3c46-4334-888c-a729d23ca003', '2021-10-25 08:58:03', '2021-10-25 08:58:03'),
(117, '2a152412-3c01-460c-b06b-0b0b491fcaf7', '2021-10-25 08:58:28', '2021-10-25 08:58:28'),
(118, '73698134-f1e6-4382-bc02-0071a86a5b92', '2021-10-25 09:01:16', '2021-10-25 09:01:16'),
(119, 'e9092021-6252-4b59-b1cb-49b2a29a1833', '2021-10-25 09:03:23', '2021-10-25 09:03:23'),
(120, '52fae136-f9a6-4bf2-ae17-1dfc09b44877', '2021-10-25 09:03:58', '2021-10-25 09:03:58'),
(121, '2d4f075f-50a1-4292-bde7-015ca005e784', '2021-10-25 09:06:56', '2021-10-25 09:06:56'),
(122, '02506538-e2a0-4465-b9c4-46d81fb751df', '2021-10-25 09:07:42', '2021-10-25 09:07:42'),
(123, '5fe304c8-30a6-40ad-a0b8-a2461e12e07e', '2021-10-25 09:43:26', '2021-10-25 09:43:26'),
(124, 'dc57dee4-f558-4600-8d4f-cc79ebf78c4f', '2021-10-25 09:43:55', '2021-10-25 09:43:55'),
(125, '4d66cca4-36d0-4dcf-8ebc-7bfddd637257', '2021-10-25 10:08:00', '2021-10-25 10:08:00'),
(126, '9e89511f-80e8-4485-92bf-7914e6081542', '2021-10-25 10:08:33', '2021-10-25 10:08:33'),
(127, 'fcc4df34-1f80-4a54-b1ee-b2a228abcaa4', '2021-10-25 10:11:37', '2021-10-25 10:11:37'),
(128, '1085ee4b-7d46-44e3-8d20-6e00fb185ec4', '2021-10-25 10:12:20', '2021-10-25 10:12:20'),
(129, 'b4faed27-044d-442e-b22c-d9845a745564', '2021-10-25 10:22:49', '2021-10-25 10:22:49'),
(130, 'ff57a282-7601-4eb5-8859-a9a19bdb0f20', '2021-10-25 10:23:16', '2021-10-25 10:23:16'),
(131, 'e90f63b9-5881-499f-8d62-2c038f521090', '2021-10-25 10:25:18', '2021-10-25 10:25:18'),
(132, '4e7fd78e-ae24-496e-954a-58986aaa4a4e', '2021-10-25 10:25:55', '2021-10-25 10:25:55'),
(133, '668568b1-b7b5-4d42-9e71-2ba576630348', '2021-10-25 10:27:47', '2021-10-25 10:27:47'),
(134, '0e5e4092-d6b3-4e14-81c6-2439a11be406', '2021-10-25 10:30:01', '2021-10-25 10:30:01'),
(135, '96ae3170-fc47-42cc-a2d6-96d4426593df', '2021-10-25 10:30:21', '2021-10-25 10:30:21'),
(136, '24ff6632-5c1a-4f07-a22d-f9e90c7efc92', '2021-10-25 10:34:16', '2021-10-25 10:34:16'),
(137, '78303451-55b1-4b1e-a579-039857d2b03a', '2021-10-25 10:34:59', '2021-10-25 10:34:59'),
(138, '16e16812-2989-405d-907f-b23839b0d672', '2021-10-25 10:36:57', '2021-10-25 10:36:57'),
(139, '9555af95-59c7-41c1-8a8f-c4ffcecf1a09', '2021-10-25 10:40:59', '2021-10-25 10:40:59'),
(140, '77c95acf-98f6-45ac-b1bf-5ee738bfaa36', '2021-10-25 10:41:13', '2021-10-25 10:41:13'),
(141, 'd18e94e4-77ed-4636-9af3-1b69988336d4', '2021-10-25 10:44:24', '2021-10-25 10:44:24'),
(142, '9555cba6-16d5-4f10-be65-a5fe26c462a1', '2021-10-25 10:47:15', '2021-10-25 10:47:15'),
(143, '7bff7262-19c0-4cb4-b0ed-4f4fdf4baec5', '2021-10-25 10:48:07', '2021-10-25 10:48:07'),
(144, '01f08ee0-7b9a-4df7-b3ba-38d5fb857fd3', '2021-10-25 10:50:34', '2021-10-25 10:50:34'),
(145, '0cd661ff-5668-4323-a1af-1c0c079e6ff4', '2021-10-25 10:51:03', '2021-10-25 10:51:03'),
(146, '4705537f-e57d-4732-acfe-d2da11c1ceb1', '2021-10-25 10:52:49', '2021-10-25 10:52:49'),
(147, 'db8319ec-5694-47c9-8b86-0bdc81348e70', '2021-10-25 10:55:30', '2021-10-25 10:55:30'),
(148, '4ccf164b-d8f8-4470-97e9-989041d5f6c1', '2021-10-25 10:56:01', '2021-10-25 10:56:01'),
(149, 'a6712233-6d9d-4020-90e0-768137fbfa16', '2021-10-25 10:57:54', '2021-10-25 10:57:54'),
(150, 'c0ff9705-6998-49af-8bb4-e8c9d938aa73', '2021-10-25 10:58:36', '2021-10-25 10:58:36'),
(151, 'dd108d37-0a2b-4859-8b4a-b2518476ffc6', '2021-10-26 07:25:54', '2021-10-26 07:25:54'),
(152, '3e0b843b-d355-4c53-b7f7-2852e120b90f', '2021-10-26 07:27:46', '2021-10-26 07:27:46'),
(153, '65f9d869-453e-4a84-98aa-0d6d4cf97490', '2021-10-26 07:34:10', '2021-10-26 07:34:10'),
(154, 'e9384527-94e1-430c-9ad5-cbcc835cebe6', '2021-10-26 07:36:55', '2021-10-26 07:36:55'),
(155, 'eae4278b-21da-4f60-a4ae-5f57170bd816', '2021-10-27 07:40:29', '2021-10-27 07:40:29'),
(156, '35233dad-2de8-4066-8284-7ef975c4b576', '2021-10-27 07:40:53', '2021-10-27 07:40:53'),
(157, '0dd1de88-35a1-455e-9e35-6ceb04c3f3d0', '2022-01-26 05:35:41', '2022-01-26 05:35:41'),
(158, '1a8fdd1d-a26b-46d8-bede-20887dbc6a37', '2022-01-26 05:42:36', '2022-01-26 05:42:36'),
(159, 'a187e4f6-1e9b-4021-9f0f-f818accd3ee8', '2022-01-26 05:49:27', '2022-01-26 05:49:27'),
(160, '3d74ca4a-48d6-49a4-b9ec-2ed8d12ad216', '2022-01-26 05:49:43', '2022-01-26 05:49:43'),
(161, '8ef7d582-526a-4d59-acd4-4872615123f8', '2022-01-26 06:24:13', '2022-01-26 06:24:13'),
(162, '747380dc-b008-42f8-8998-8ccbea0a1a51', '2022-01-26 06:33:12', '2022-01-26 06:33:12'),
(163, '11397952-5646-42f0-8d0b-9f05757335a0', '2022-01-26 06:40:38', '2022-01-26 06:40:38'),
(164, '341211d0-7b31-41d6-b15c-8009da31f376', '2022-01-26 06:44:02', '2022-01-26 06:44:02'),
(165, 'b2539009-f3ac-4f99-8bdb-330a69a2c1bb', '2022-01-26 06:55:02', '2022-01-26 06:55:02'),
(166, '9796c740-fac2-4c9d-8cdf-c755b29939b6', '2022-01-26 06:57:53', '2022-01-26 06:57:53'),
(167, 'dff6da8a-06c2-42a4-99e8-6b5d1ccccf2b', '2022-01-26 09:52:56', '2022-01-26 09:52:56'),
(168, '2d2443be-3ae0-42b9-a7f1-f8eca6c68634', '2022-01-26 09:54:53', '2022-01-26 09:54:53'),
(169, '08fabc34-619e-44c8-b265-49acd2823ce5', '2022-01-26 09:55:49', '2022-01-26 09:55:49'),
(170, '0b6716d6-6e5c-4c72-be2a-f532c70c1a80', '2022-01-26 09:56:15', '2022-01-26 09:56:15'),
(171, 'f35f59f7-775c-4cc6-b48f-e372db578860', '2022-01-27 01:55:57', '2022-01-27 01:55:57'),
(172, '9b741d02-8d55-4fb6-809e-386aaee94678', '2022-01-27 01:56:36', '2022-01-27 01:56:36'),
(173, '5479faa8-1824-48a7-8087-bcc3c09a04f2', '2022-01-27 06:12:31', '2022-01-27 06:12:31'),
(174, 'c2dced6e-ca04-47a7-92bd-e96fdddab0ea', '2022-01-27 07:54:14', '2022-01-27 07:54:14'),
(175, '416c8d6f-8411-488c-88ea-2025f0a464b0', '2022-01-27 08:24:41', '2022-01-27 08:24:41'),
(176, '6dc64e42-64c4-4838-b20a-639d247faf17', '2022-01-28 02:26:32', '2022-01-28 02:26:32'),
(177, '7623a755-c63b-4a31-a961-dca1db3096f2', '2022-01-28 02:38:43', '2022-01-28 02:38:43'),
(178, '617732df-eb36-4f0d-8a08-2a6379c3b627', '2022-01-28 03:37:09', '2022-01-28 03:37:09'),
(179, '35ff6548-f03e-447c-90de-b2191389f019', '2022-01-28 03:43:57', '2022-01-28 03:43:57'),
(180, 'e74c82ea-11b6-4a05-8029-74247c4ae900', '2022-01-28 03:50:59', '2022-01-28 03:50:59'),
(181, 'fbc6dc3d-c5f0-4399-801e-dfa5266260d0', '2022-01-28 03:53:31', '2022-01-28 03:53:31'),
(182, '4efae986-b671-4ef5-8480-bb78743f3054', '2022-01-28 04:01:19', '2022-01-28 04:01:19'),
(183, '8e358699-d869-4798-9932-ec465e3a5b49', '2022-01-28 04:19:14', '2022-01-28 04:19:14');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(24) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` char(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_last_four` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `paypal_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `phone_verified_at`, `email_verified_at`, `password`, `api_token`, `device_token`, `stripe_id`, `card_brand`, `card_last_four`, `trial_ends_at`, `paypal_email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'New Higitech', 'admin@newhigitech.com', '+1 234 8996 321', '2021-01-10 13:22:10', '2021-01-10 13:22:10', '$2y$10$k.gX25Z/T18hTZX5Vs6p2ux/M6/h7g.cpOsiEjdRmzqNzMVz25n7W', 'PivvPlsQWxPl1bB5KrbKNBuraJit0PrUZekQUgtLyTRuyBq921atFtoR1HuA', 'caDGTGevcERvCLJzxUHXmf:APA91bEXquMmsvxCWJNxZXn9NdNqpfVU-WwSfrlPHh7yUbt9r4l4SKlDac2nAGKRx3f0SJ7bnQfa7RVUXSGn5ZUI7jQTsgYBoW6XUG8Rp6XO7jE3MpeE4G9nFFRSqN0GbL-xBfhgB-im', NULL, NULL, NULL, NULL, NULL, 'WIuEPsCnIwO7kICxlk4OORLVkBsXTB4B7TQdTGnGfNsN68TrjLG4i4L8KZVU', NULL, '2022-03-02 03:08:15'),
(3, 'Germaine Guzman', 'customer@demo.com', '+1 234 8996 323', '2021-01-10 13:22:10', '2021-01-10 13:22:10', '$2y$10$EBubVy3wDbqNbHvMQwkj3OTYVitL8QnHvh/zV0ICVOaSbALy5dD0K', 'fXLu7VeYgXDu82SkMxlLPG1mCAXc4EBIx6O5isgYVIKFQiHah0xiOHmzNsBv', '', NULL, NULL, NULL, NULL, NULL, 'SPz6luq3aoxCbgIS1gqmFDgM1qzGlIDtF0HgmDbtWcx2reaeFcogcFQzdP2F', NULL, '2021-02-24 17:52:57'),
(4, 'Aimee Mcgee', 'provider1@demo.com', '+1 234 8996 324', '2021-01-10 13:22:10', '2021-01-10 13:22:10', '$2y$10$pmdnepS1FhZUMqOaFIFnNO0spltJpziz3j13UqyEwShmLhokmuoei', 'Czrsk9rwD0c75NUPkzNXM2WvbxYHKj8p0nG29pjKT0PZaTgMVzuVyv4hOlte', '', NULL, NULL, NULL, NULL, NULL, 'yCzPqDP1oczySU57q6G71SxTIJSiZUBE4vYdXbXCqzpzC2iN09igcs3jzSQK', NULL, '2021-02-21 10:50:29'),
(5, 'Josephine Harding', 'customer3@demo.com', NULL, NULL, NULL, '$2y$10$n/06hZG121ZGp3tSwDQS3uhsQKxEYspjKrn7kGlLxRinUZKiulrEm', 'gkEWScQHIol9EIRhP3m5m7JqnK5UvcGdEsKQJo7YeBcQawYFq3JAJ6SX9UKy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-01-11 06:55:52', '2021-02-02 07:29:47'),
(6, 'Nicolette Christiansen', 'provider2@demo.com', NULL, NULL, '2021-01-10 20:00:00', '$2y$04$WRpHC9iMxZ3f.gctQ4igsuZjsYfGjX7igVM8GsC2AMME3.4au3dYu', 'TKArYDDFHNiEI33sfExaBEhxHCs5kFaWP7EO6aNlUZfnqHrvsMCwsYeAk9s2', NULL, NULL, NULL, NULL, NULL, NULL, 'JbiYaHlRWGKkfITxH9qI87GzTMPf0zJ2Iw6NIdlS5dDvWuT5PC2sP5ELGwKx', '2021-01-11 07:33:59', '2021-02-02 07:30:56'),
(7, 'Rose Bauer', 'customer2@demo.com', NULL, NULL, NULL, '$2y$10$3GhoIShzRdSXevYAh1NF/.67J3OshX9D2.sqY50o8kxh7EXPw7tuC', 'w6QJYqZyllY24AIR3nSsKqgj5eMSZevmgpSywwxJxUS9nwULcuriRLBxEXZC', '', NULL, NULL, NULL, NULL, NULL, 'WxYP9zjTBy9SYF5OWjcFbMt2Ob9r0bahBKzPDOtw9OrAJ89JqaMxkN5aqu8J', '2021-01-17 12:13:24', '2021-02-28 14:03:25'),
(8, 'smarter8', 'smartersvision@gmail.com', '+12645595482', NULL, NULL, '$2y$10$MqPMTfg6RUNxxEH6aLdqnOYZUBsT7xtxkglD74pDgThV52.HJrLba', 'WivbG2oAEbEGl51EBeBuHaZeCqyfBnCVGo18nSaj2FwwiDjux2ZOAZWUoddK', '', NULL, NULL, NULL, NULL, NULL, 'SdstZCaeYW0pjqZn832HMzBD7WPGJ5m9hwWG28nhbIrzSS0etj33rbTRJ6kD', '2021-02-10 07:31:12', '2021-02-23 16:41:50'),
(10, 'Redouane', 'redouane@higitech-me.com', '+971529906446', '2006-07-22 22:27:26', NULL, '$2y$10$y82C3nK/ekGzYg49GQLPReNLe9UGBoMEFcivmgaEa29G4cWQ.qKQ6', 'rVuytuZVo1jHpzPnNMGpFMxoAGtrftkv3PYDaxONDFZWGDiaS9iJUKz8x3dD', 'fNsLzJ-2QfCeBYGUrwVlyS:APA91bFf9CCUBsZRDpaTkwfhUBjH1HPwrs3NtAPMUq83KbwK8FJNGJlYFLVyUDcp9HgeQqZPPmprUPkiPo9DBHa12kBRmRs6Hn819JNjlsgNu4PhDTmTTm67XhTBDQ1tXuxUNKTTkB3g', NULL, NULL, NULL, NULL, NULL, 'NpAZLlunV9tsqHk14d0hxfJGhJc8uj4bcYjT7vPIfP1OdPYXnwkx9GPyIdkF', '2021-06-22 12:21:05', '2021-06-22 12:21:05'),
(11, 'Abdul Wahab', 'abdul.wahab@higitech-me.com', '+971555436576', '2007-05-14 10:09:36', NULL, '$2y$10$yfil9i3NvwH0LKtpgAIzmecqzK0ya.tFLhHmE7Bh42w3Kmj2Nm/5O', 'b3OESbsSJ3Brl9uWlqpTv6SpzKJHZLLB38KHl21hGlD5xAwyPC4GWnlepyBF', '', NULL, NULL, NULL, NULL, NULL, 'kcDIoVZUAaNSHKM82wjrtm31qan8wG3IBXzTaRGoMTPddO2MHttAiEvuEKOQ', '2021-06-22 12:22:12', '2022-01-26 05:10:49'),
(12, 'mee', 'me@gmail.com', '+918767879867', '2004-08-05 07:57:47', NULL, '$2y$10$Sf0fSmaVo9CDwlM/ICJLkOLmjUER0tdNk.XvFhdeYOTKtAu.nmTnO', 'jID5bw3J9jqc9S8IQq69L8E8M0kl7k07bYyHadKvLb2zN453u428yAuexa2g', 'dqA0EIgyQaW22BwP9DAvcz:APA91bENo72aorYWOF5enXBQZWV5Il9EZyVPNWVEPHxERWKuzOowsOSp5PZYyszODYwc3fXXJyv_IXFiHkC42hvqMygNNr2BWovBaqf_Uo_5hSz7Y1VVFKFiCt8On27u2EpMBbG1SsIx', NULL, NULL, NULL, NULL, NULL, 'Qk41cUupngC8Kxt2Z33IV7TKx9246TRgskQktWIKajqxNYMnTmLLoBXpYzMw', '2021-06-24 05:49:35', '2021-06-24 05:49:35'),
(13, 'pawan', 'pawanpal1915@gmail.com', '+918802890848', '2005-09-14 13:14:08', NULL, '$2y$10$Pn5JbLWdABUAfS1fy/c7A.nQyZygoQF.JIpZunqyaffhlH4xEL0iu', 'rMioMrB5gssjlVAWRa1ed66cABB7Cv2keMNU6UKUgsmHeaA3g2Z1j6cUr2ey', 'dG8kYlqcTtOXxWF8704X3z:APA91bFHx585VHjnUAeM5Nwp6DjqjEl2gdMUWaQ69nrT78Tge1OpQwhlw38zQnqlkauOQ5eqLtivn3-LSxuwkblsidbrcTWbyYSAbd9MU-AaJQ2bINv8z8PV5ysTw3moLTeqo5wiKeQb', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-24 10:02:17', '2021-06-24 10:02:17'),
(14, 'pawan', 'pgadroit1810@gmail.com', '+919650778568', '2002-07-29 01:36:08', NULL, '$2y$10$NzqJCnPsUXgcdXBXXn.A0O6/.y2nxGTRTkeSHRWM/IFdsLMuAP.m.', 'Js7L1MS1FCyoKeXmQYesr9JX2dEkJU4R3LLaVll7IpauSWuLJXw4xtrQKEBc', 'dG8kYlqcTtOXxWF8704X3z:APA91bFHx585VHjnUAeM5Nwp6DjqjEl2gdMUWaQ69nrT78Tge1OpQwhlw38zQnqlkauOQ5eqLtivn3-LSxuwkblsidbrcTWbyYSAbd9MU-AaJQ2bINv8z8PV5ysTw3moLTeqo5wiKeQb', NULL, NULL, NULL, NULL, NULL, 'UX1RnQdMWX1TgYS7c1hWQ2msNcy9pdLsZCKyDJkLU3RaHqf7KUc0ZJL4IxSW', '2021-06-24 10:05:57', '2021-06-24 10:05:57'),
(15, 'pawan', 'appdev.pb@gmail.com', '+918750620098', '2004-01-18 13:34:58', NULL, '$2y$10$gcV/wGYH8VGCRgbKiZD8DOfGOf5FY8rgJl6mcQLMLA/eelSKaRMG.', 'bG9wzstnUp90FgKi1CXLkGwnPJzw3HIvD4XbUtZYhBHL4nOBNheYgCLLyqIY', 'cCr1h5zjRRGtwJB7uLsp9k:APA91bGrEl3wz8IdfKsJsaS0SWFZxGA4z3V4N96A8Nz-Mzv6ByLsC5zK19Sz85rhBPM2ZZhwyLRUynXe8Dtpb3SQiYu-Zeb2IGorkJErxKo9ShN51HVmvSvGSVj9sk78bPN5lJ_ZeA6P', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-25 00:05:09', '2021-06-25 00:05:09'),
(16, 'pawan', 'uniqueid123456789@gmail.com', '+919625427735', '2001-10-09 15:42:15', NULL, '$2y$10$VRSPiMC.Ap.coyOs7eiqpOC2GvTc9O4VOKhG6sCqX.Yrlhd1DF3yS', 'vqKxIdSweR3YlPbT8VK3WjNA0Rj3xNbR6ymTVPUWOKkukOPupgWLZllf8FGA', 'cCr1h5zjRRGtwJB7uLsp9k:APA91bGrEl3wz8IdfKsJsaS0SWFZxGA4z3V4N96A8Nz-Mzv6ByLsC5zK19Sz85rhBPM2ZZhwyLRUynXe8Dtpb3SQiYu-Zeb2IGorkJErxKo9ShN51HVmvSvGSVj9sk78bPN5lJ_ZeA6P', NULL, NULL, NULL, NULL, NULL, 'C1nWMwumDC2c6uD2YQBP0AAUcQ6kx4M4m0s6IyYhQrbD4ACcv0miETgUxEzJ', '2021-06-25 00:10:27', '2021-06-25 00:10:27'),
(17, 'Test', 'kapil@itxitpro.com', '+919887012345', '2000-01-23 06:05:45', NULL, '$2y$10$nNa/PUUI6iUDpn1BG1SL3Oo5O/bH2Z.yfAqV9lu8egMPs9lECiNaO', 'iE8WHn7rrClffK6XjgPhmn3BKHJrbQtFiQwOYiL0czlxdA9tkIA4V9Nnd2FA', 'fe_6KszORO-dmZKBWU_RBF:APA91bGVqkQ64AOUy9eBeZMkiPxY-ZsWY6So10Rm2wG7My6SoKLfeujQWPIAlSMCs7X4uXIfFyWas3iiMk5Z6GXIle1ILiibM-0F6RRm2M1_oJy0G5kkP4_rRcvfFlA9MhKtKhCrl-Hg', NULL, NULL, NULL, NULL, NULL, 'QtiOjl342JDkLSbfVOLh2ipR2u5vQb00tzXRDC0156PvnEf45GWBiwjvPuut', '2021-06-25 06:38:53', '2021-06-25 06:38:53'),
(18, 'Navin', 'projects.skill@webteklabs.com', '+919599872507', '2000-12-17 21:01:47', NULL, '$2y$10$EvjIZRAqe7DXDdIuIM4kfuxbJNnX0IRjWWdl2w8fsW7R6UyBWiHDa', 'oPjZKgoxXEMRGuivzBmSdmV3b0TU1WwwxsBASyTs50a3yCONxVzl4hfDDZwQ', 'ex3AiuGTRLyOYPivStxVUv:APA91bGGNWeeaVwbzAiQqdn1vq5hrERqr4-Af6QCWOdUSe3jj8ByR7ostVXNZwoCwLTlj3e6mV150VI-N0n7oHO-6rh-j5tApU4veSKpCRh8HVrq7I4mEtgOOdnujq8YxNiNOrvl7r4J', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-25 06:57:49', '2021-06-25 06:57:49'),
(19, 'surbhi', 'surbhi.sharma@itxitpro.com', '+9186576889987', '1981-01-12 05:53:07', NULL, '$2y$10$4wN2Xe579PVpNPKTKUXHge4HU9aButXiEW17j5mftuRAWT0srjNQa', '70rBM3UwWOF17sTgVkFW7hCvgFCa4uAGfDtPPIZ3FhpRQyk4EKZnetvtNuN0', 'eWVO77-LTJ-6jq5h22DUfI:APA91bEM0s6lfQwFShE3b9COtMWJMnsVymsvv_ITiy7c9ZrNbj4eDpPhCDYYqerxL8k5iK0VqW5_8bktodN3e-ktVZso0pFA5MocRURKPKL9uxlEExITFvvxEPHvf5lM797178uF6LzU', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-28 05:25:54', '2021-07-12 02:44:52'),
(20, 'Test', 'kapil@xyz.com', '+919887012346', '2000-01-23 06:05:46', NULL, '$2y$10$dZpQUGANH2NkaQVqoJIQLu7WJ1/65MCYitqGj9d0JKWp1c5RZZSvG', 'Ipew8uEBHfm823JhiEBHwN1xCp9BQM4oZBi1n1kTgwb36EGWXuvk329BlHOP', 'f0f3rna2TO28QpQRXlPReS:APA91bG1CeAXpQh_segkuYDQ7wkaaaM--kNSPnoeMU2dgE7hT_ycUVRU0L_AC5DZKq-A2keiDu8PLrJH_y38GSdb6fp_SxBU7cyDKL0Wib7JvO4zgpnafced-5fL-ivqpQBDqFgq0SSk', NULL, NULL, NULL, NULL, NULL, 'gVo0jHNECjUuZrkZzNGr5V5pGwwJyZHdwMqUQpB9jF1iTPIJOExjhTchhfm5', '2021-06-28 05:38:35', '2021-06-30 06:52:48'),
(21, 'surbhi', 'surbhii@gmail.com', '+917689786578', '2000-06-07 09:36:18', NULL, '$2y$10$MvADDYHXrVgOnYZcEvy2tOZkeNlY7AKk4Q9c3axg4.mwqGDf1TohS', '0xjyrUW65HmNIeoc03tlAdU76oQpYDbSp2hLD04TlVykOzHTwZafqkzsu0rO', 'fdWlFsHcT7uCxkie5ETXK_:APA91bF6t5K7V_tmPJix_d8CrTsMrSqhGReVpnRRbPU_YNjeVMSz6Chfc-JKMR_BiwM73em0SO4Ld-2hQJkcsbi6RP-0i0qLqHi8WXNPyBFP2CRFl2RvLO9bztZQLc1tqPz8OfbWybS1', NULL, NULL, NULL, NULL, NULL, NULL, '2021-06-28 05:52:18', '2021-06-28 05:52:18'),
(22, 'Kapil', 'kapil@abc.com', '+919887012347', '2000-01-23 06:05:47', NULL, '$2y$10$7pCptYlNzqNWYp5H6.IePuQWJH6.hOEB7S6G6/Expp2u2spUQX3/6', 'SRi0HQB0Ca1IDk6cdjEq7pkaoAJPbJ3EH2UzDcccCe3PBdXlVmuOcjBa9ZjL', 'eIbpkdNWRguLCMqiLUOWPz:APA91bH8nffL2TdxMMUYjCYMgPiNTjkyU9yZI3xoQ21ciUwOBdeWVEsgCtfpqbm9GT_GEWdpJ7js5ehor4iOrLvetjVGpRBMX2vtMhOIXZmf26t9rY-Kn5GMJwOiS521WCAKuHwEXnk6', NULL, NULL, NULL, NULL, NULL, 'KUR3OS7M2SZibLIOPTNCXelL2QTTx8jdOcOwjDtTsIhPFHhG3Tk7qaylMjNM', '2021-06-29 00:53:18', '2021-07-01 07:40:31'),
(23, 'dolly', 'info@bhatia.co', '+971545435823', '2007-01-18 16:10:23', NULL, '$2y$10$HaA4mJ1xPgQzp6vkDRUXFu79czIpzgFpCC6qq2dEuCUmGJNYSdArq', 'RNj6SM6KIdz1O3lbrAJgB4DuBP2IxWxIiyEAaf67e7nLnY1iS0WuBXU9EcHw', 'f2rWq8ZoQyaMAHGZ8276gu:APA91bEOVNqXZ_-jrHqtWVGTuo4FBV78oykWvdQu4M5FrCbmtuEPcTUyB_MMDmL7Qv0Wfb5wxPhj5v6-Zf8Y7hVkgULpQWyXyhYC_pPXWGjQWRX1qXFg9tRHmNNX2sojOaegvT7LbeNK', NULL, NULL, NULL, NULL, NULL, 'hO9jrsWmMvbPu5ttbLmhQuAhoaxMj7UECcSfDTnu7GaBWDHtnHjeB30TfbFV', '2021-07-06 04:00:15', '2021-07-06 04:00:15'),
(24, 'surbhi', 'surbhi@gmail.com', '+9186576889988', '1981-01-12 05:53:08', NULL, '$2y$10$knM2e8BY/ceG13lIlnVbiuZzOY.fRNtEfRTQ6wB3iXBUWZ3oMTSS.', '7tzyL6zSBxx4hzvGWqHyNf9ZaYadSRFA19qlIiwP5bHlIbe0Gt0UmQy4CuU3', 'eWVO77-LTJ-6jq5h22DUfI:APA91bEM0s6lfQwFShE3b9COtMWJMnsVymsvv_ITiy7c9ZrNbj4eDpPhCDYYqerxL8k5iK0VqW5_8bktodN3e-ktVZso0pFA5MocRURKPKL9uxlEExITFvvxEPHvf5lM797178uF6LzU', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-12 02:54:16', '2021-07-12 02:54:16'),
(25, 'surbhi', 'surbhis@gmail.com', '+918657688995', '2001-02-06 23:23:15', NULL, '$2y$10$lr0D7rDeHDWmzbdV.CE/rO/viVR78YefRKcYTlTJmds3nS1f0j.a2', 'BFQxDTQadA5x4yaidE1KJfbaa8F6OVepjQsC5Fda3wKJZ2dntgj6tazMpFob', 'eWVO77-LTJ-6jq5h22DUfI:APA91bEM0s6lfQwFShE3b9COtMWJMnsVymsvv_ITiy7c9ZrNbj4eDpPhCDYYqerxL8k5iK0VqW5_8bktodN3e-ktVZso0pFA5MocRURKPKL9uxlEExITFvvxEPHvf5lM797178uF6LzU', NULL, NULL, NULL, NULL, NULL, 'hfKgVGWKDqmkAgxcPJ42pu6oEUERHnb2vgFLDcsQWybXSFKyF7TyIeIUhnho', '2021-07-12 02:54:38', '2021-07-12 02:54:38'),
(26, 'Diwakar Sastry', 'cs@bhatia.co', '+919210039129', '2008-08-09 21:58:49', NULL, '$2y$10$7Ie4dS7hb3Y8pgpZouBV1O6bKrEJrogxB6Vg2aebFhOwYJ4y1594u', 'rGE5lliaS00tbBWD2LbtdtKcduOvU3pJHcVIOhg0qk67qGTCdIpWDSxu6R8a', 'fas7cSPmRdK9MYNjJn8IAr:APA91bHw2cn9MmCzvMnwaZmsJA5UCPiICXbpRgc3HFZ16onDQVTPt5NMIdOL69c9ATNU9k4PIdMJAxC_hk6MXp7_f80j2P2WB6FbXDX2cuXpwtU8a2n-TDfY7EndyJPZPVmo4o6pSG1p', NULL, NULL, NULL, NULL, NULL, '2QsH0jLraCt0AQQ2Z35Zb6BrBiIsrZU6rxNPHvaOUIFCzccAeh0uN43isrSM', '2021-07-18 07:21:39', '2021-07-18 07:21:39'),
(27, 'deepak', 'deep59613@gmail.com', '+917701984767', '2000-10-26 13:59:27', NULL, '$2y$10$poxXFDYnCdS1QEZF4R83mO2DjbBMc3VbMMMKV6/PEG/HIsHDJN/Ua', 'dJ11ZNR0VIJWc3nhNes8Oe6WMmpjacQtYKZbidFDvkhMJNDnn4lvVvC8YSuD', '', NULL, NULL, NULL, NULL, NULL, '5UvanQNDyRiOmrD96vZhcuHO8oJqI6zijZHHHUKnOCaQH80tDQdTcNPKoK4D', '2021-07-22 01:41:36', '2021-08-11 02:04:59'),
(28, 'johndeo', 'playcnx20@gmail.com', '+916364860743', '2008-06-12 14:39:03', NULL, '$2y$10$A5janSGsZ0ieoDCkbPb.7ehBvY0LjbA2m1EBVpl.2nWjM.7Mi1PCO', 'gNXAz0hLE624Rz3nS6ODlSLhRyB2kT6qWaLhMmFoWhXYulGaviusSOFfU4tJ', 'eHk1s4tpSK-6UbXmq2FLMF:APA91bFFrExy8mdVtzFM3cdhuw8LXn9OJJEkPDv0iqcWbuNKVpQlnuZKTq2DnLGp5D8suZpnjLcUMAA9UdbGTXzUJ2GnSQjKrrvcort55WwCEWyyxb9awYZOEo6i4DVgQsdJuoBq8K1S', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-26 05:58:10', '2021-07-26 05:58:10'),
(29, 'Alex', 'ericrosillio@yahoo.com', '+971554717627', '2007-05-06 02:27:07', NULL, '$2y$10$BYhFZu.X92JHNLlAjNvUUuYMjw6vB9FSgPuV/Veq7hyDqjX3zkAGC', 'zng0BoF77UBwkfSTYKum2nBpPfZtKLA1GeiVndyiG0K2gUSx4J9tDcMPcvO7', '', NULL, NULL, NULL, NULL, NULL, 'zZUB8SJMZ75Oof3UnNGJacfZ2KiGuNdKIq2lzo4vDMv6AvHx0BZ5FxPaZSvW', '2021-07-28 03:51:54', '2021-10-10 23:13:27'),
(30, 'Jam Gautane', 'higisales1@higitech-me.com', '+971522156437', '2006-04-24 05:40:37', NULL, '$2y$10$XrkD9nq6V.v6j2d3OLg43.MdWlO2K5/7ft/xlFqwzr0dwf9YobsSe', 'uaMd2ssSZNF4lkPcxHGUIE0w7BNWkRjsk3sM06nwT8Sx7LAQ3Dxi5qhTlrF5', 'eLOOqtokSxua0HYkcAsbiy:APA91bE0ckPqXhMYUghRSpjskdOUM_oJzKl-LrTxh6y5jMYqYDVV0mpXESsKyXYqN4hJpiTKPl3aKreCFe8PUgUYgY5MiYvr4tFGWXdzE75YOy0mLu5KbIcBABGar75BC4jIMZdvWga4', NULL, NULL, NULL, NULL, NULL, 'tmJeF0gUeuywhlun4fBU9eAMNZdti0IvOf9PZZkQ3x2MgU6sXgtRycn3h8RJ', '2021-07-28 03:57:39', '2021-07-28 03:57:39'),
(32, 'Naeem', 'rainmaker9752@gmail.com', '+0971554718041', '2007-05-06 02:34:01', NULL, '$2y$10$Wsj/goaUuV.UECJ1vJ7JZ.vyIUi6b1Qs1hJgIZbfXmwYK0IjkV84q', 'RHLCfVbmCN4C4bb4rheJUfTzAkSH3rRxHtLPHhRco2J4yJIlyXcqnFZaRWx8', 'dDV2LMlQS_mjDt00E5U43v:APA91bFlKirF8ZxoRF0Di07COBInbHfIFsk2otDecCihgJGHbFJPKAG0dmCEPZmtN0_sUg_6u6SUA-fUlKx7oOSqnP3GvtV5r3fKtsX6za_JygBsCTI7DMAbzAKwJlcHRSfxCIYYID9R', NULL, NULL, NULL, NULL, NULL, 'ZD1wiO1Pq5oieKknhnC6qSzF5gXPC1Kwvc7i0V7OkTAE4RuIPihtf9YlPBOr', '2021-07-28 12:20:30', '2021-07-28 12:20:30'),
(33, 'mohamed', 'mohamed@properties.com', '+971504873983', '2005-10-07 04:59:43', NULL, '$2y$10$dVO35heClkq2CueaeymGRO/ZTHKHhOWJzsAWo4WDphAQKhF5IqI.a', 'i04i3daWKNDTvv1rvTeYHKfz53cb5PbTdxAq4gj7taL11xxcSIxHcmyyCvrT', 'fKE75ip4QGmDYHYGAEhoih:APA91bHqJDaN9otm__VaAMhovNNStcITtpRs4DeyZA-O3IPzScSRYfYU5qySuu6SFDgMO-Bl1dTD0rHh0NEfq93cqy-vIgUdfnO0IyMNAUvO_U_zHG0fME9IOdcpHDAqKZ4dNjoMAwHC', NULL, NULL, NULL, NULL, NULL, 'UxZycMZfObXeT9eRoRgb4efhoEsm2vIvERK4tTdvvIow7SdEK4Cs5kqQMvbd', '2021-08-08 09:56:48', '2021-08-08 09:56:48'),
(34, 'hemlata', 'hemlatagarg029@gmail.com', '+918360569138', '2001-09-09 02:05:38', NULL, '$2y$10$P4yqv6uGE4BqcfYdmVtPPOhGYUwAD9R.rx0dxedBZlH0D5f9UB8ne', 'grFfODtcAA1yBQuW0QNdXpDOdbRChLLvO8f1bwsQxFgpL7jXx2CkgbQMXL2d', 'eyUiOcjFQNuncHYtZILMLg:APA91bGBeAzQ4lPFg7TnCP1n5qGtiruEqloF_kiIT7vh3uxG5yzhM6ix8iFIM4ZcTaIvRotRxa8l5biqff2U3hQPHZbDkoHEX9lMmc-ba-ANP5ux0qe0WzR1ZVED5Ai89bmRoVVhoygG', NULL, NULL, NULL, NULL, NULL, 'ehZTlspT5Kpb8XFVIxILM8q5uRzXD6FRaq8ewqldkABuGytpOvxzzFBfKNjg', '2021-08-11 05:38:13', '2021-08-23 09:43:35'),
(35, 'Diwakar Sastry', 'beingdiwakar8@gmail.com', '+919971119410', '2002-09-22 17:10:10', NULL, '$2y$10$i2EYKAcW.yITcPYQbSYy2Oo9wJKph5g66Fl6VKY2hqCRjOyjZ1KNq', 'QicUlNsftxINVRQiPikWu6P223e60ptCY0ff3rKJG949Hp9uMPvcPg3nx9Bq', 'dJJI14AaT5W9kRHAFVzEvS:APA91bErrYG_pvxtRBZh3kRYRcMwtppAH43MpcZGw28Eiw3jnNWU0nTvF85DZ8bzR4kvwimSDo9J5rhewu7P1wj7qa3kmm2m3Ie4NNnEsFCdk_GTCBKfzO-gjOwXe_iTh1YepTAOw8PO', NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-12 04:32:26', '2021-08-12 04:32:26'),
(36, 'Waqas', 'operationsss@higitech-me.com', '+971524151163', '2006-05-17 07:46:03', NULL, '$2y$10$W0QsaEICbIiGrqKXYkWHIuolIdfH6QZZh6j5ZCE4mzU7G/53ttg.2', 'FT4lO3739bN8OGMUCvWo0CxdTGE992eM5uOriX9yDvpBHgkWIjEeNallVQxj', 'cscZTLkRStea3atT-MJjr4:APA91bFwpWLcDf6uL3ETCSGvrZb37mGqpNewldtVRgc_CdG_fUNMoIy-088UYLO3066PbdOTaLPpwE5X8DeN71YqQvuRiphtUGc2aOcq8Lxv2MXn_VE0oIcTfc1KkcHpbmWYL9OffBk2', NULL, NULL, NULL, NULL, NULL, 'VdpqFCI1BxMqDORozccoNVNGzjeZNOmdVSI9NfCxSMHMrKqOeEso3KgbK9zg', '2021-08-30 06:29:45', '2021-08-30 06:29:45'),
(37, 'mourad', 'mourad@higitech-me.com', '+971529906442', '2006-07-22 22:27:22', NULL, '$2y$10$BUf0zL6Z8dLX0t550N2mXe4qlgUXkInDpumQcGKr/HkuLWL6NexnO', 'x0rmk2tS6j6jP2OAl4A2O4ax5lTmFkVGmXPm8D8nNzx49YzD77zmRNJkHMjM', 'eRmlEr4rQCyE96AeZXuW_9:APA91bEFbBTNDATGyu4sAj1vPyN0GbD0d2_jIG0QFNRpZYs9DkeVwtB3hbw4pbuhMCweTka_7mIBV4ID-6KvE6s7Pmi3gwE9aWzNlYZuFZNCfvQgKynYWZhmNUkxj80LAG1oVz5YXT_j', NULL, NULL, NULL, NULL, NULL, 'ySW9Gr918SWdNPOFZOs8fi0Jx5VmtfCSNcu3iSBAqZjFZIUtIQz4uuXWPTsr', '2021-08-30 07:53:00', '2021-08-30 07:53:00'),
(38, 'Muhammad Shahzad', 'shehzad_falak@yahoo.com', '+971525194828', '2006-05-29 09:40:28', NULL, '$2y$10$VFONbZe6MoXpm5PaZOAEBOBOpcW0CrbBvmRNOp9sCQriGh5Q1TjSa', 'P9CIlfxB2MLwa95aoNC50h4KnGccXKBtOq1a5Zwd5Abp3ItHKvLQifb4DO99', '', NULL, NULL, NULL, NULL, NULL, 'FFUB3Ow4ymk2W4xCxFjp55bFKgrJQAyXWbW18aD64h08gF1lz0OAyxCO22Vk', '2021-09-12 08:06:19', '2021-09-12 08:06:19'),
(39, 'mohamed', 'mid0z_93@lve.com', '+971527313418', '2006-06-22 22:10:18', NULL, '$2y$10$FvzU/TDvXgx7WfZTQYNOHOoFWx9etirhBOm7t1U3U6nwGExWEpU7G', 'NYwcL00lcM8btltD7FOO3S2nTLeJeqsoLfF1nFJrm5ZCH05Pv3cEYdsBJh96', '', NULL, NULL, NULL, NULL, NULL, 'rP81wbJyffd0X5isZnnmPPvtTo4hdJV3J2ZHRHe1yEk96UcIkT5myEpfIgtA', '2021-09-12 08:07:01', '2021-09-12 08:07:01'),
(40, 'Sanal', 'sanal.babu@higitech-me.com', '+971529964248', NULL, NULL, '$2y$10$ePenIiQc9fq7hZT0/p118uYHLdS9bX4LAkSMDn4DMI3urHibCeDv6', 'yTA0rLTlpklOr3sZh2hHHIVhHSGScIl1OAZTeJkUA94YayPD0rX5klrthKD7', '', NULL, NULL, NULL, NULL, NULL, 'lug43hPRDXLc57MyMVEJofoyXF0VvwcWfFbR1e3VDAMhp48jUmJgutFOlSPy', '2021-09-12 08:23:30', '2021-09-12 08:56:14'),
(41, 'Edward Senas', 'edwardsenas20@gmail.com', '+971565893316', '2007-09-12 10:48:36', NULL, '$2y$10$a.oHTjBJ5EyXc7Da3zC7vePnaZwolvBB6wuuf4m3eptWIbQhwMUT.', 'EUEWfpf3QgARM06LbAmNZm4vuWM19FVbIPvxh5j58084Cephrl5g1dmxN85D', '', NULL, NULL, NULL, NULL, NULL, 'jce3s2ms5aWXcXEqBwMDGXDQvs868Lcu9iXWJqBrDU3alum7ybW4Qa2X6sBQ', '2021-09-12 08:35:36', '2021-09-12 08:35:36'),
(42, 'Ramzy', 'ramzymohd@gmail.com', '+971522961495', '2006-05-03 13:18:15', NULL, '$2y$10$ydL.8s4ZTqIpRFbDN4KoqOeF6vvAiG9z7ZBfaZURGgMrG2PK.gvbS', 'mYA90w23mQ7A1s9yfHK6S3Mu1s5ZVkg3mIpnFnicA3tuqn6YtkmU1ksIKEvq', NULL, NULL, NULL, NULL, NULL, NULL, 'eTUQ7PsUlyMbEZnsypEwByzOmsl6ROnBWEiiNEM7lWbE7SPDeM3VPFrNA8pC', '2021-09-13 23:57:14', '2022-01-25 23:21:09'),
(43, 'arianne', 'arianne@higitech.me', '+971586195965', '2008-05-05 10:26:05', NULL, '$2y$10$JYw78kmMeeMN8wy9d8dEYOPwttsKWIoW8UprdwYzg5UIm1nvXtYJK', 'zV92HVDatCZPBpBdIDGTRxQkaAMnSxh1lEvSwChSkZW0Nlgz5IZD09UqQkJ8', 'cZH8OwAFTFOtC8Jc6V8Kx4:APA91bHIZMDgRAykyHwWtrptItJtK0sDaVT2FexB1Q7XBLLyZGT2NnZCdFwYG8szmEGb-akQ0O3IrvkgcRgQ5bASWN9jiJgS8qFuKDxaDYwrEE5_XQUQfctVVv5bCmNqoRvfs0y3vbC0', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-16 05:22:28', '2021-09-16 05:22:28'),
(44, 'vxy', 'mid0z_93@live.com', '+971527313416', '2006-06-22 22:10:16', NULL, '$2y$10$XgokzxbL3mZ7WcbA6EoJree1wXj/aWMHuBwjt61u7zOWg1/e4qJVa', 'NAgJSdh01CUTU9xSkdopkphMJGtBAqKRFqGIS9sJBspVpIYcLFtonUyBsyiV', '', NULL, NULL, NULL, NULL, NULL, 'v1jgHT7vOKZPPLhWXhkK1SyDkZOYDlVljDgz1Fdypz1JwtfIAUBwtANsWzbm', '2021-09-20 04:49:16', '2021-09-20 04:49:16'),
(46, 'Jean', 'higitechjean@gmail.com', '+971586193663', '2008-05-05 09:47:43', NULL, '$2y$10$R7YJ/nYDHtUBlC9cmPiZY.qRXpam4MI.NPU9/2al7wf0qt/fx9Lru', 'vlHt9jzoHlYecGOM9MaCaKgOTwarPnq5XsyHkCGP9rsvNDu5vmBZGk9jvYT8', '', NULL, NULL, NULL, NULL, NULL, 'kC0Rg8Hqjs06ifWshVd7ZnDoW99Pq4zPglal7u3VFN86nQ3MFrIprqLM1Xyb', '2021-09-21 11:26:21', '2021-09-21 11:26:21'),
(47, 'matilda matilds', 'matildamatilds13@gmail.com', '+971528635054', '2006-07-08 05:17:34', NULL, '$2y$10$wM2ClxNQgHKR4ljVzODGdOQ0/8lRI6JkxP59R6hAvbqV6WQfc1XQy', 'XMfDptfG4g353zBM7B0zJd7SCIZuO7xcKLaZ5zh2yC9V10wIRfg6XJALElfL', '', NULL, NULL, NULL, NULL, NULL, 'ON3cFdTV5tdroRhOPigQoPVgSFTed4jMgNj9qmmpGDqATRKnuMKtkXHK086K', '2021-09-22 02:47:59', '2021-09-22 02:47:59'),
(48, 'Mabel Alba', 'chinita1201@yahoo.com', '+971567851254', '2007-10-05 02:40:54', NULL, '$2y$10$lUXSgyBuSkfn2vLIEJoge.HrX9jjukIlYSS0tXPi6JZJsWv6olYRO', 'akXdPkMfEVzpuVZ0DwUJhZpsXg4k8GRs2YcH6VqOKKLDDr7jHy5tZwT3nlDN', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-22 07:57:02', '2021-09-22 07:57:02'),
(49, 'Jen Castillo', 'jenrossette@gmail.com', '+971581939961', '2008-03-17 04:12:41', NULL, '$2y$10$Nqwh4fsjKmpJnc2v5Fq0MuLYlY4SUjpk4eiKxGcup.dIahVAhQGvG', '7Vw5ZHXTIt6y0nzWniqvHDx7CXemqbFM9fJBb8n0XWD2w9nIOxlrc2joU3Vn', '', NULL, NULL, NULL, NULL, NULL, 'kzSCuSkwHqoLuXfFw2OMOd9hbdwI2Y0WtlwtTDR6oVdkXLCVNoOAGwRZn0yH', '2021-09-25 13:22:58', '2021-09-25 13:22:58'),
(50, 'Mary Elias', 'mary.elias.sh@outlook.com', '+971558053279', '2007-06-13 17:01:19', NULL, '$2y$10$PhAf6JQhX9lIj8VBfn5ucOQEQgJqLNXQFsIfBn1TWHicTfDm317cC', 'PQqIWGgNxiYeIeOYjZi0Rsz4mkRkzeAqCLbjae0VCR0DDhELcBWLHnp6uP7x', '', NULL, NULL, NULL, NULL, NULL, '1pgWWdwMuh4VTjFOzH3MLcfbp2TjXvmRpvADqb2S1aA0RMV1gq0G178rXQe4', '2021-10-02 04:15:21', '2021-10-02 04:15:21'),
(52, 'nitin singh', 'matt9009murdock@gmail.com', NULL, NULL, NULL, '$2y$10$k.gX25Z/T18hTZX5Vs6p2ux/M6/h7g.cpOsiEjdRmzqNzMVz25n7W', 'DPkqeqQVGC3BJ8ft1QUnHyCaIUwUZSwi2KRoSPUh2aCXf2Ma26Y0xYnrA6ae', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-11 07:43:34', '2021-10-11 07:43:34'),
(53, 'lama', 'Caty_lulu89@hotmail.com', '+971585154877', '2008-04-23 09:14:37', NULL, '$2y$10$4.hnmbYwoxuxFBJhoR6ak.udO3aOHSG4eM5EoNE7gkcInVGFNWBBO', 'tAwvdrgICZfsHxLkunZwm3bPmUh7Clw0INO7pzpVY2mbznygoZLrOhO3wWip', '', NULL, NULL, NULL, NULL, NULL, 'UYcmzUOfJ4Vn7tJaRNYr91S5e1G84DDshJZTGZb42oLiTDQTX94XWKfFXlAa', '2021-10-13 08:26:51', '2021-10-13 08:26:51'),
(54, 'Ramzy test2', 'starlinkramzy@gmail.com', '+971503129404', '2005-09-17 00:23:24', NULL, '$2y$10$8hOJSxSK.vEi8kKdEBRgBezHHE/ymH97GBajmQOCbJZxjVfhaU7W2', 'NvrjdTCADh0TgxNVHClPUNZlQB7l9WJoBPGb5wWPncoII6XqflzNCi3swDfF', '', NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-14 00:23:30', '2021-10-14 00:23:30'),
(55, 'Tamara Kayed', 'tami.k92@gmail.com', '+971529098836', '2006-07-13 14:07:16', NULL, '$2y$10$LUWOoEWRzRlUOr1pQlGcQuP75tjOVt444Sxt615/VTJ78B8nBg/3e', 'p5zVuWCakI1la9Pghjuu4iyS5c7ajtxZs9jPRpzAcSbxwYud7ahSM0aGGftW', '', NULL, NULL, NULL, NULL, NULL, 'f9FYpslP0g8J0cF4Z4gfCoyRoPQZ4QOM10e8Jovjt2aDWtQwfx6hf7mZwkHr', '2021-10-14 12:21:13', '2021-10-14 12:21:13'),
(56, 'Silvia', 'silviajulio1907@gmail.com', '+971585431907', '2008-04-26 14:11:47', NULL, '$2y$10$Agcx4/huyJveHeNXdH0fKuEMyNSlwTcg7Hh9C9QjRJhiFE2DoO0w2', 'Ve5wBGZ5P4sntRsosFGKl6dLZKRiCPQimHIOq8rd5fBTGurbUWTxb5h4TFWi', '', NULL, NULL, NULL, NULL, NULL, 'm7606j40uKkpunfb6zur0zCyZHAWACJDGC1NqNHYuhZ887DD9rGBetHKveqe', '2021-10-20 06:36:52', '2021-10-20 06:36:52'),
(57, 'Emad Ali', 'emad.elwakel@gmail.com', '+971558116111', '2007-06-14 10:28:31', NULL, '$2y$10$bgTx8vkVR5dFXXL.Z7Zfg.hgr.Z787hyHfS81F76KSjNzVFu32RZS', 'DUHfUOBVjpTKYxKs4Y3QXBPQVAc4rAFGb4iUn5JGRnN9REm1YICp3RE9yLrP', '', NULL, NULL, NULL, NULL, NULL, 'xP53HhnLwzxOKgp2p6S9gVVG5OVCKEgbCF4Pzb7GDYm5d3EzyMQQmSWO5fj5', '2021-10-27 07:28:41', '2021-10-27 07:28:41'),
(58, 'Irfan Shaukat', 'Irfan.shaukatmep@gmail.com', '+971588713742', '2008-06-03 13:49:02', NULL, '$2y$10$31FixsftskBptUPQpDC6huMCzgWQdqMtjABbalXmwQmYOLP3/scli', 'fvuVkkvK9JuWYSRnoKkul8PGWDKR6F3AmWvR2EtP1qFdKl6oZ07gUzfiXzTB', '', NULL, NULL, NULL, NULL, NULL, 'dt0dcRDTZNRj13TdQNGDiwUCMzdec6gNa8A3WNS6Ohx5CHMjILQOVYFq1LSc', '2021-11-10 00:58:31', '2021-11-10 00:58:31'),
(59, 'Basant Issam', 'Basant.easam@gmail.com', '+971505686870', '2005-10-16 14:47:50', NULL, '$2y$10$zclBrIjbZvOrdBpon46OnuXVq4snJKZ0wFwWZUrnx61F2ynnLy5CO', 'PeCuahsiDhGNB3XE8NKCxjLTIPlajh3GAX0eag13sWEtGiKORTzbLoKiSdOt', '', NULL, NULL, NULL, NULL, NULL, 'XDQYr9atOwilp5rERmYPH6WR7a7lvoheRsXdHa8HyUuTostIxJNbWiRPRDFc', '2021-11-28 11:17:25', '2021-11-28 11:17:25'),
(60, 'Tarek', 'Tarekismaeeel@gmail.com', '+971565369825', '2007-09-06 09:23:45', NULL, '$2y$10$ATuIzWZLAq928kBToBol3OryPqpAS0Sndumdf1ad84bKR15L3DJj2', 'rp5aGKiN2W6t3exLyHC6QPb5MgkxWrgEfqQHvKhGuS4YS9pFVNYWhiKBT7pE', '', NULL, NULL, NULL, NULL, NULL, 'UPNdxSOnRiN6IEKehNIDJqW6Ljsl0m9ufxI6sdDeOFI8h8L0jNH5NZRBoSzL', '2022-01-22 02:17:29', '2022-01-22 02:17:29'),
(61, 'Muhammad', 'muhammed@higitech.me', '+971524454184', '2006-05-20 19:56:24', NULL, '$2y$10$vpviPvZdtBii9pTy0F3xBuoEERM7KRe.oqcwDtF3ebLMrvwH2jzni', 'WN6WGtsuJTMIGyjmrQiXCEz5WUZNkc9Irw9deSBdHweELlrl1jW8V1r6mwaJ', '', NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-26 05:15:15', '2022-01-26 05:15:15'),
(62, 'Muhammad', 'abrubtly@gmail.com', '+971524721690', '2006-05-23 22:14:50', NULL, '$2y$10$9/HO/Ubez5E.HNzZT2fOmedU0ySuyrAXJVqmLKZIRKxZ49BhlZK7u', 'U7vWAKHYeY3GFoQDWNpUO5t6D3nLDCnILQiMUgWM25qr0xwkW0QwxZve7sJe', NULL, NULL, NULL, NULL, NULL, NULL, 'BoJo6F29G7d1ilXXoNUhiarT6MQtlKjSdxYIVC2ESOds1Aj33Btjkov6Xn1y', '2022-01-26 05:16:31', '2022-01-26 05:16:31'),
(63, 'Jerry', 'jeriam26@gmail.com', '+971566146883', '2007-09-15 09:14:43', NULL, '$2y$10$lqu2SkayxE4KRS/SIBNvMeghNoAgr.HFvNP3ctqbUOeD0iUBMPgxa', 'Q04FzbIZpKZPCYqguHjR25XnpmESpNhI4SxHKWrCz4ODN89pFeGlR6YM0L2E', '', NULL, NULL, NULL, NULL, NULL, 'a0zDCfz2EmKt1SfLACubi0lqAL8Xzer99UX3vj2A11nVoHQnzo0Q7YfDUsKW', '2022-01-26 06:49:33', '2022-01-26 06:49:33'),
(64, 'Reji Jose', 'ericnderic@gmail.com', '+971558570257', '2007-06-19 16:37:37', NULL, '$2y$10$45OyYFlDheR8x8ohjjl8zOutMC6g/RSDgRSPwe7M5plIqO4WwBmpK', 'C3BNYwS7pD1HtsEKbAknTFNPFl36HER2MVx1GlL5PugCrwyxmmWJi61b6V59', '', NULL, NULL, NULL, NULL, NULL, 'O3PchrnoH1kMNtxWFPrB8ss77bzrQkoUjOOV5Y867yHBhBTyKI1Fr4v9pfQ0', '2022-01-27 09:59:35', '2022-01-27 09:59:35'),
(65, 'Livia', 'Livia.hoffman@yahoo.com', '+971586900253', '2008-05-13 14:04:13', NULL, '$2y$10$vNwWcHOPdoX.Z4vqkyLgVORW./KgFc4MN2UBFlOdtZ2z7yCB51m1O', 'n3ysXu12mwTooOCutbTUEflrf3YaR5lSSSkQoHVKEfR2XAUlIcvR0mjeDS18', '', NULL, NULL, NULL, NULL, NULL, 'q0mmSuFXZZ0AnzvjjJfniYrMQevhc7MjZJhJMI3PzEbEoywzCCe5SIoXwnfE', '2022-01-28 03:36:14', '2022-01-28 03:36:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `app_settings`
--
ALTER TABLE `app_settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `app_settings_key_index` (`key`);

--
-- Indexes for table `availability_hours`
--
ALTER TABLE `availability_hours`
  ADD PRIMARY KEY (`id`),
  ADD KEY `availability_hours_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `awards_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`),
  ADD KEY `bookings_booking_status_id_foreign` (`booking_status_id`),
  ADD KEY `bookings_payment_id_foreign` (`payment_id`);

--
-- Indexes for table `booking_statuses`
--
ALTER TABLE `booking_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_fields`
--
ALTER TABLE `custom_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  ADD PRIMARY KEY (`id`),
  ADD KEY `custom_field_values_custom_field_id_foreign` (`custom_field_id`);

--
-- Indexes for table `custom_pages`
--
ALTER TABLE `custom_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discountables`
--
ALTER TABLE `discountables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discountables_coupon_id_foreign` (`coupon_id`);

--
-- Indexes for table `earnings`
--
ALTER TABLE `earnings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `earnings_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `e_providers`
--
ALTER TABLE `e_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_providers_e_provider_type_id_foreign` (`e_provider_type_id`);

--
-- Indexes for table `e_provider_addresses`
--
ALTER TABLE `e_provider_addresses`
  ADD PRIMARY KEY (`e_provider_id`,`address_id`),
  ADD KEY `e_provider_addresses_address_id_foreign` (`address_id`);

--
-- Indexes for table `e_provider_payouts`
--
ALTER TABLE `e_provider_payouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_provider_payouts_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `e_provider_taxes`
--
ALTER TABLE `e_provider_taxes`
  ADD PRIMARY KEY (`e_provider_id`,`tax_id`),
  ADD KEY `e_provider_taxes_tax_id_foreign` (`tax_id`);

--
-- Indexes for table `e_provider_types`
--
ALTER TABLE `e_provider_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e_provider_users`
--
ALTER TABLE `e_provider_users`
  ADD PRIMARY KEY (`user_id`,`e_provider_id`),
  ADD KEY `e_provider_users_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `e_services`
--
ALTER TABLE `e_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_services_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `e_service_categories`
--
ALTER TABLE `e_service_categories`
  ADD PRIMARY KEY (`e_service_id`,`category_id`),
  ADD KEY `e_service_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `e_service_reviews`
--
ALTER TABLE `e_service_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `e_service_reviews_user_id_foreign` (`user_id`),
  ADD KEY `e_service_reviews_e_service_id_foreign` (`e_service_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_faq_category_id_foreign` (`faq_category_id`);

--
-- Indexes for table `faq_categories`
--
ALTER TABLE `faq_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favorites_e_service_id_foreign` (`e_service_id`),
  ADD KEY `favorites_user_id_foreign` (`user_id`);

--
-- Indexes for table `favorite_options`
--
ALTER TABLE `favorite_options`
  ADD PRIMARY KEY (`option_id`,`favorite_id`),
  ADD KEY `favorite_options_favorite_id_foreign` (`favorite_id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `galleries_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_e_service_id_foreign` (`e_service_id`),
  ADD KEY `options_option_group_id_foreign` (`option_group_id`);

--
-- Indexes for table `option_groups`
--
ALTER TABLE `option_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_payment_method_id_foreign` (`payment_method_id`),
  ADD KEY `payments_payment_status_id_foreign` (`payment_status_id`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_statuses`
--
ALTER TABLE `payment_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_e_service_id_foreign` (`e_service_id`),
  ADD KEY `slides_e_provider_id_foreign` (`e_provider_id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `app_settings`
--
ALTER TABLE `app_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `availability_hours`
--
ALTER TABLE `availability_hours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `booking_statuses`
--
ALTER TABLE `booking_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `custom_fields`
--
ALTER TABLE `custom_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `discountables`
--
ALTER TABLE `discountables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `earnings`
--
ALTER TABLE `earnings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_providers`
--
ALTER TABLE `e_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `e_provider_payouts`
--
ALTER TABLE `e_provider_payouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `e_provider_types`
--
ALTER TABLE `e_provider_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_services`
--
ALTER TABLE `e_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `e_service_reviews`
--
ALTER TABLE `e_service_reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_categories`
--
ALTER TABLE `faq_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=369;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=269;

--
-- AUTO_INCREMENT for table `option_groups`
--
ALTER TABLE `option_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment_statuses`
--
ALTER TABLE `payment_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `availability_hours`
--
ALTER TABLE `availability_hours`
  ADD CONSTRAINT `availability_hours_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_booking_status_id_foreign` FOREIGN KEY (`booking_status_id`) REFERENCES `booking_statuses` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_payment_id_foreign` FOREIGN KEY (`payment_id`) REFERENCES `payments` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `custom_field_values`
--
ALTER TABLE `custom_field_values`
  ADD CONSTRAINT `custom_field_values_custom_field_id_foreign` FOREIGN KEY (`custom_field_id`) REFERENCES `custom_fields` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discountables`
--
ALTER TABLE `discountables`
  ADD CONSTRAINT `discountables_coupon_id_foreign` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `earnings`
--
ALTER TABLE `earnings`
  ADD CONSTRAINT `earnings_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_providers`
--
ALTER TABLE `e_providers`
  ADD CONSTRAINT `e_providers_e_provider_type_id_foreign` FOREIGN KEY (`e_provider_type_id`) REFERENCES `e_provider_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_provider_addresses`
--
ALTER TABLE `e_provider_addresses`
  ADD CONSTRAINT `e_provider_addresses_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `e_provider_addresses_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_provider_payouts`
--
ALTER TABLE `e_provider_payouts`
  ADD CONSTRAINT `e_provider_payouts_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_provider_taxes`
--
ALTER TABLE `e_provider_taxes`
  ADD CONSTRAINT `e_provider_taxes_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `e_provider_taxes_tax_id_foreign` FOREIGN KEY (`tax_id`) REFERENCES `taxes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_provider_users`
--
ALTER TABLE `e_provider_users`
  ADD CONSTRAINT `e_provider_users_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `e_provider_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_services`
--
ALTER TABLE `e_services`
  ADD CONSTRAINT `e_services_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_service_categories`
--
ALTER TABLE `e_service_categories`
  ADD CONSTRAINT `e_service_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `e_service_categories_e_service_id_foreign` FOREIGN KEY (`e_service_id`) REFERENCES `e_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `e_service_reviews`
--
ALTER TABLE `e_service_reviews`
  ADD CONSTRAINT `e_service_reviews_e_service_id_foreign` FOREIGN KEY (`e_service_id`) REFERENCES `e_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `e_service_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_faq_category_id_foreign` FOREIGN KEY (`faq_category_id`) REFERENCES `faq_categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `favorites_e_service_id_foreign` FOREIGN KEY (`e_service_id`) REFERENCES `e_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `favorite_options`
--
ALTER TABLE `favorite_options`
  ADD CONSTRAINT `favorite_options_favorite_id_foreign` FOREIGN KEY (`favorite_id`) REFERENCES `favorites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favorite_options_option_id_foreign` FOREIGN KEY (`option_id`) REFERENCES `options` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galleries`
--
ALTER TABLE `galleries`
  ADD CONSTRAINT `galleries_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_e_service_id_foreign` FOREIGN KEY (`e_service_id`) REFERENCES `e_services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `options_option_group_id_foreign` FOREIGN KEY (`option_group_id`) REFERENCES `option_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_payment_method_id_foreign` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_methods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_payment_status_id_foreign` FOREIGN KEY (`payment_status_id`) REFERENCES `payment_statuses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_e_provider_id_foreign` FOREIGN KEY (`e_provider_id`) REFERENCES `e_providers` (`id`) ON DELETE SET NULL ON UPDATE SET NULL,
  ADD CONSTRAINT `slides_e_service_id_foreign` FOREIGN KEY (`e_service_id`) REFERENCES `e_services` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
