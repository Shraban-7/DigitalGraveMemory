-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 12, 2024 at 05:27 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalgravememory_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_auth`
--

CREATE TABLE `admin_auth` (
  `id` int NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_auth`
--

INSERT INTO `admin_auth` (`id`, `mail`, `password`) VALUES
(1, 'digitalgravememory@gmail.com', '$2y$12$r3V5/XPZJWcbSMoChvG6W.Z83otw0vwNlttQsrMbJj/pMw06fSLpq'),
(2, 'digitalgravememory@admin.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- --------------------------------------------------------

--
-- Table structure for table `editor_auth`
--

CREATE TABLE `editor_auth` (
  `id` int NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editor_auth`
--

INSERT INTO `editor_auth` (`id`, `mail`, `password`, `name`, `role`, `create_date`) VALUES
(1, 'editor@gmail.com', '$2y$12$zxWAO1EGNF1CFLkp3R2/euHXltjaZb1XHmsxuky9y9mmc/tBRmXAK$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Editor1', NULL, NULL),
(2, 'editor2@gmail.com', '$2y$12$zxWAO1EGNF1CFLkp3R2/euHXltjaZb1XHmsxuky9y9mmc/tBRmXAK', 'Editor2', NULL, NULL),
(3, 'editor3@gmail.com', '$2y$12$zxWAO1EGNF1CFLkp3R2/euHXltjaZb1XHmsxuky9y9mmc/tBRmXAK', 'Editor3', NULL, NULL),
(4, 'nnasiruddin1996@gmail.com', '$2y$12$GiNOytBVCljYVdNT3NWNL.LJYXMuL9XUiV.xtM4OlWQW0DX45Ad2e', 'Nasir Uddin', NULL, '2023-12-15'),
(5, 'nnasiruddin199@gmail.com', '$2y$12$xsAfaOQsfi1j1pFLF9KMJe/YTVMPgADUyx9bOAFMplwAFG0.jOnKe', '.htaccess', NULL, '2024-01-15'),
(6, 'nnasiruddin13499@gmail.com', '$2y$12$bT/7V03qiY4Yr/Sy5g8kBepadSQdkqDEWuz3phC3ElstKuwUfmvG2', 'index.html', NULL, '2024-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int NOT NULL,
  `messaage` text COLLATE utf8mb4_general_ci,
  `sender_id` int DEFAULT NULL,
  `receiver_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_accepted`
--

CREATE TABLE `order_accepted` (
  `id` int NOT NULL,
  `editor_id` int DEFAULT NULL,
  `video_id` int DEFAULT NULL,
  `create_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_cancel`
--

CREATE TABLE `order_cancel` (
  `id` int NOT NULL,
  `editor_id` int DEFAULT NULL,
  `video_id` int DEFAULT NULL,
  `cancel_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_completed`
--

CREATE TABLE `order_completed` (
  `id` int NOT NULL,
  `editor_id` int DEFAULT NULL,
  `video_id` int DEFAULT NULL,
  `order_complete_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qr_payment_info`
--

CREATE TABLE `qr_payment_info` (
  `id` int NOT NULL,
  `qr_price_info` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payment_info` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `payer_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_payment_info`
--

INSERT INTO `qr_payment_info` (`id`, `qr_price_info`, `amount`, `payment_info`, `payer_id`) VALUES
(1, 'fa_p_l_a_5_10$', '10', NULL, '2'),
(3, 'pr_a_s_p_1_7$', '7', NULL, '2'),
(4, 'fa_pa_ac_10_55$', '55', NULL, '2'),
(5, 'pr_a_s_p_1_7$', '7', NULL, '2'),
(6, 'fr_to_1_7$', '7', NULL, '2'),
(7, 'fr_to_1_7$', '7', NULL, '2'),
(8, 'fr_to_1_7$', '7', NULL, '2'),
(9, 'fr_to_1_7$', '7', NULL, '2'),
(10, 'fa_pa_ac_10_55$', '55', NULL, '2'),
(11, 'fr_to_1_7$', '7', NULL, '7'),
(12, 'fa_p_l_a_5_10$', '10', NULL, '8'),
(13, 'fa_p_l_a_5_10$', '10', NULL, '8'),
(14, 'fa_p_l_a_5_10$', '10', NULL, '9'),
(15, 'fa_p_l_a_5_10$', '10', NULL, '8'),
(16, 'fa_p_l_a_5_10$', '10', NULL, '7'),
(17, 'fr_to_1_7$', '7', NULL, '12'),
(18, 'pr_a_s_p_1_7$', '7', NULL, '12'),
(19, 'fa_p_l_a_5_10$', '10', NULL, '12'),
(20, 'fa_p_l_a_5_10$', '10', NULL, '12'),
(21, 'fr_to_1_7$', '7', NULL, '12'),
(22, 'fr_to_1_7$', '7', NULL, '12');

-- --------------------------------------------------------

--
-- Table structure for table `qr_photos_link`
--

CREATE TABLE `qr_photos_link` (
  `id` int NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `qr_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_photos_link`
--

INSERT INTO `qr_photos_link` (`id`, `photo`, `title`, `qr_id`) VALUES
(32, '601f8a7f9864b951f2913828d5cd299f.png', 'Youtube', 55);

-- --------------------------------------------------------

--
-- Table structure for table `qr_profile`
--

CREATE TABLE `qr_profile` (
  `id` int NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `birth_day` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `death_day` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_general_ci,
  `bio` text COLLATE utf8mb4_general_ci,
  `img_path` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `img_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube_link` text COLLATE utf8mb4_general_ci,
  `video_title` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cemetery_name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cemetery_plot_number` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cemetery_plot_location` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tributes` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `profile_img` text COLLATE utf8mb4_general_ci,
  `video_description` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tribute_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tribute_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_auth_id` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `paid_status` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_profile`
--

INSERT INTO `qr_profile` (`id`, `full_name`, `birth_day`, `death_day`, `slug`, `bio`, `img_path`, `img_title`, `youtube_link`, `video_title`, `cemetery_name`, `cemetery_plot_number`, `cemetery_plot_location`, `tributes`, `profile_img`, `video_description`, `tribute_type`, `tribute_link`, `user_auth_id`, `paid_status`) VALUES
(55, 'Akkash Ali', '20/12/2000', '20/02/2018', 'abc', '<p>Abcd</p>', NULL, NULL, 'https://www.youtube.com/embed/Y_dgZ6yt368?si=0Aky6QT1K5PKyBRd', 'abcd', NULL, NULL, NULL, NULL, '5f8872b0229a3ade5a5153e85d9b18c1.jpg', NULL, NULL, NULL, '12', 'fr_to_1_7$');

-- --------------------------------------------------------

--
-- Table structure for table `qr_scanner_history`
--

CREATE TABLE `qr_scanner_history` (
  `id` int NOT NULL,
  `scanned` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `scanner` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_scanner_history`
--

INSERT INTO `qr_scanner_history` (`id`, `scanned`, `scanner`) VALUES
(2, '55', '4,');

-- --------------------------------------------------------

--
-- Table structure for table `qr_scanner_ip`
--

CREATE TABLE `qr_scanner_ip` (
  `id` int NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qr_scanner_ip`
--

INSERT INTO `qr_scanner_ip` (`id`, `ip`, `date`) VALUES
(1, '127.0.0.120', '2024-01-21'),
(2, '127.0.0.1400', '2024-01-21'),
(3, '127.0.0.1', '2024-01-26'),
(4, '45.125.223.57', '2024-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `seo_setting`
--

CREATE TABLE `seo_setting` (
  `id` int NOT NULL,
  `keyword` text COLLATE utf8mb4_general_ci,
  `author` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sitemap_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seo_setting`
--

INSERT INTO `seo_setting` (`id`, `keyword`, `author`, `sitemap_link`, `description`) VALUES
(1, 'ABC', '/', 'Digital Grave Memory', 'Digital Grave Memory'),
(2, 'abcd', '/about-us', 'About page  | Digital Grave Memory', 'ef'),
(3, NULL, '/faq', 'FAQ page  | Digital Grave Memory', 'deecf'),
(4, 'abcd', '/video', 'Video page  | Digital Grave Memory', 'DEC'),
(5, 'abcd', '/shop', 'Pricing page  | Digital Grave Memory | ABC', 'decd'),
(6, NULL, '/donation', 'Donation Page  | Digital Grave Memory', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `site_visitor`
--

CREATE TABLE `site_visitor` (
  `id` int NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `site_visitor`
--

INSERT INTO `site_visitor` (`id`, `ip`, `date`) VALUES
(1, '127.0.0.1', '2024-02-12'),
(2, '45.125.223.57', '2024-01-31'),
(3, '185.107.44.117', '2024-01-29'),
(4, '198.235.24.223', '2024-01-29'),
(5, '43.134.170.46', '2024-02-05'),
(6, '46.101.80.192', '2024-01-30'),
(7, '116.212.185.151', '2024-02-07'),
(8, '173.252.111.120', '2024-02-04'),
(9, '173.252.111.118', '2024-01-30'),
(10, '173.252.87.11', '2024-02-06'),
(11, '66.249.74.106', '2024-01-30'),
(12, '172.245.217.105', '2024-01-30'),
(13, '93.158.91.24', '2024-01-30'),
(14, '167.71.3.115', '2024-01-30'),
(15, '51.77.111.99', '2024-01-31'),
(16, '46.4.33.48', '2024-01-31'),
(17, '203.112.74.206', '2024-02-11'),
(18, '51.222.253.5', '2024-02-02'),
(19, '106.119.167.146', '2024-02-05'),
(20, '173.211.8.116', '2024-01-31'),
(21, '104.223.149.110', '2024-01-31'),
(22, '51.222.253.20', '2024-01-31'),
(23, '103.242.22.239', '2024-01-31'),
(24, '54.203.242.6', '2024-01-31'),
(25, '52.89.103.56', '2024-01-31'),
(26, '34.217.253.81', '2024-01-31'),
(27, '51.222.253.7', '2024-02-02'),
(28, '51.222.253.2', '2024-01-31'),
(29, '51.222.253.3', '2024-01-31'),
(30, '124.6.231.196', '2024-01-31'),
(31, '173.252.111.1', '2024-02-04'),
(32, '52.38.157.146', '2024-01-31'),
(33, '95.217.18.177', '2024-01-31'),
(34, '3.255.172.18', '2024-01-31'),
(35, '117.62.235.53', '2024-02-04'),
(36, '116.212.191.97', '2024-01-31'),
(37, '205.237.94.69', '2024-01-31'),
(38, '43.159.63.75', '2024-02-04'),
(39, '192.71.126.27', '2024-02-01'),
(40, '199.244.88.228', '2024-02-01'),
(41, '43.163.1.85', '2024-02-04'),
(42, '143.198.150.30', '2024-02-01'),
(43, '176.78.196.245', '2024-02-01'),
(44, '212.113.167.165', '2024-02-01'),
(45, '123.60.68.42', '2024-02-01'),
(46, '81.17.22.42', '2024-02-01'),
(47, '51.222.253.11', '2024-02-02'),
(48, '51.222.253.18', '2024-02-02'),
(49, '23.129.64.221', '2024-02-02'),
(50, '51.222.253.10', '2024-02-02'),
(51, '74.208.2.216', '2024-02-02'),
(52, '74.208.2.196', '2024-02-02'),
(53, '74.208.2.186', '2024-02-02'),
(54, '74.208.2.206', '2024-02-02'),
(55, '51.222.253.14', '2024-02-02'),
(56, '116.212.185.150', '2024-02-02'),
(57, '51.222.253.9', '2024-02-02'),
(58, '103.102.138.18', '2024-02-02'),
(59, '51.222.253.17', '2024-02-09'),
(60, '182.44.2.148', '2024-02-04'),
(61, '54.196.211.86', '2024-02-02'),
(62, '54.67.37.201', '2024-02-02'),
(63, '182.42.111.156', '2024-02-05'),
(64, '66.249.75.203', '2024-02-03'),
(65, '180.252.112.250', '2024-02-03'),
(66, '109.121.24.3', '2024-02-03'),
(67, '121.91.225.56', '2024-02-03'),
(68, '50.21.188.117', '2024-02-03'),
(69, '50.21.188.120', '2024-02-03'),
(70, '50.21.188.119', '2024-02-03'),
(71, '50.21.188.118', '2024-02-03'),
(72, '149.56.160.166', '2024-02-03'),
(73, '149.56.160.150', '2024-02-03'),
(74, '198.235.24.58', '2024-02-03'),
(75, '117.33.163.216', '2024-02-03'),
(76, '66.249.79.105', '2024-02-07'),
(77, '205.210.31.174', '2024-02-03'),
(78, '178.128.227.141', '2024-02-03'),
(79, '20.238.125.138', '2024-02-04'),
(80, '43.163.6.35', '2024-02-03'),
(81, '170.106.101.31', '2024-02-04'),
(82, '205.210.31.177', '2024-02-04'),
(83, '43.131.248.209', '2024-02-04'),
(84, '124.226.222.66', '2024-02-04'),
(85, '43.134.66.205', '2024-02-04'),
(86, '111.172.249.49', '2024-02-05'),
(87, '43.130.31.48', '2024-02-04'),
(88, '114.80.36.40', '2024-02-04'),
(89, '150.109.253.34', '2024-02-05'),
(90, '106.227.49.113', '2024-02-05'),
(91, '182.44.12.37', '2024-02-05'),
(92, '69.171.249.2', '2024-02-04'),
(93, '69.171.249.8', '2024-02-08'),
(94, '69.171.249.6', '2024-02-05'),
(95, '69.171.249.116', '2024-02-05'),
(96, '69.171.249.117', '2024-02-04'),
(97, '69.171.249.1', '2024-02-04'),
(98, '69.171.249.118', '2024-02-04'),
(99, '69.171.249.7', '2024-02-04'),
(100, '173.252.111.4', '2024-02-04'),
(101, '31.13.127.9', '2024-02-04'),
(102, '31.13.127.11', '2024-02-04'),
(103, '31.13.127.17', '2024-02-05'),
(104, '31.13.115.4', '2024-02-04'),
(105, '31.13.115.119', '2024-02-04'),
(106, '69.63.184.3', '2024-02-04'),
(107, '173.252.87.3', '2024-02-04'),
(108, '173.252.87.5', '2024-02-04'),
(109, '69.63.189.3', '2024-02-04'),
(110, '69.63.189.6', '2024-02-04'),
(111, '173.252.127.16', '2024-02-04'),
(112, '69.63.189.119', '2024-02-04'),
(113, '66.220.149.16', '2024-02-05'),
(114, '173.252.83.2', '2024-02-04'),
(115, '173.252.95.19', '2024-02-04'),
(116, '173.252.95.1', '2024-02-04'),
(117, '173.252.95.113', '2024-02-04'),
(118, '69.171.231.9', '2024-02-04'),
(119, '69.171.231.3', '2024-02-04'),
(120, '69.171.231.7', '2024-02-04'),
(121, '173.252.107.6', '2024-02-04'),
(122, '173.252.107.119', '2024-02-04'),
(123, '173.252.107.9', '2024-02-04'),
(124, '66.220.149.5', '2024-02-04'),
(125, '66.220.149.6', '2024-02-04'),
(126, '173.252.79.5', '2024-02-08'),
(127, '173.252.79.2', '2024-02-07'),
(128, '173.252.79.1', '2024-02-04'),
(129, '173.252.127.10', '2024-02-04'),
(130, '173.252.127.17', '2024-02-04'),
(131, '173.252.127.11', '2024-02-04'),
(132, '173.252.127.1', '2024-02-04'),
(133, '173.252.127.2', '2024-02-04'),
(134, '173.252.127.4', '2024-02-04'),
(135, '66.249.79.229', '2024-02-04'),
(136, '103.145.135.228', '2024-02-04'),
(137, '31.13.103.4', '2024-02-04'),
(138, '31.13.103.119', '2024-02-04'),
(139, '31.13.103.9', '2024-02-04'),
(140, '103.145.113.47', '2024-02-10'),
(141, '69.171.251.116', '2024-02-04'),
(142, '69.171.251.113', '2024-02-04'),
(143, '69.171.251.8', '2024-02-04'),
(144, '43.163.8.148', '2024-02-04'),
(145, '150.109.16.20', '2024-02-09'),
(146, '43.133.72.69', '2024-02-10'),
(147, '182.42.110.255', '2024-02-05'),
(148, '173.252.83.8', '2024-02-04'),
(149, '173.252.83.7', '2024-02-04'),
(150, '45.248.151.248', '2024-02-04'),
(151, '173.252.83.5', '2024-02-04'),
(152, '173.252.79.8', '2024-02-04'),
(153, '103.161.151.16', '2024-02-04'),
(154, '173.252.83.4', '2024-02-04'),
(155, '173.252.83.117', '2024-02-04'),
(156, '103.54.148.98', '2024-02-04'),
(157, '37.111.247.47', '2024-02-04'),
(158, '43.128.110.17', '2024-02-04'),
(159, '69.63.189.5', '2024-02-04'),
(160, '121.229.185.160', '2024-02-05'),
(161, '220.247.129.218', '2024-02-04'),
(162, '103.237.36.231', '2024-02-04'),
(163, '43.153.216.189', '2024-02-05'),
(164, '43.163.0.99', '2024-02-05'),
(165, '43.128.100.220', '2024-02-05'),
(166, '173.252.79.10', '2024-02-04'),
(167, '103.145.135.229', '2024-02-04'),
(168, '113.11.90.119', '2024-02-04'),
(169, '69.63.189.2', '2024-02-04'),
(170, '103.133.134.142', '2024-02-04'),
(171, '173.252.83.111', '2024-02-04'),
(172, '31.13.115.117', '2024-02-04'),
(173, '161.35.225.14', '2024-02-04'),
(174, '103.65.195.28', '2024-02-04'),
(175, '173.252.79.120', '2024-02-04'),
(176, '27.147.200.143', '2024-02-04'),
(177, '103.15.42.69', '2024-02-04'),
(178, '173.252.83.120', '2024-02-08'),
(179, '43.131.249.153', '2024-02-05'),
(180, '43.163.8.36', '2024-02-05'),
(181, '43.155.160.173', '2024-02-04'),
(182, '66.220.149.118', '2024-02-04'),
(183, '43.134.190.89', '2024-02-04'),
(184, '124.156.193.7', '2024-02-05'),
(185, '43.131.243.208', '2024-02-04'),
(186, '173.252.95.22', '2024-02-09'),
(187, '43.163.6.124', '2024-02-05'),
(188, '182.42.105.85', '2024-02-05'),
(189, '43.155.183.138', '2024-02-05'),
(190, '69.63.189.8', '2024-02-05'),
(191, '103.76.154.72', '2024-02-10'),
(192, '34.255.176.47', '2024-02-05'),
(193, '52.18.162.57', '2024-02-05'),
(194, '43.155.166.202', '2024-02-08'),
(195, '182.44.67.97', '2024-02-05'),
(196, '203.33.203.148', '2024-02-05'),
(197, '223.15.245.170', '2024-02-05'),
(198, '175.6.217.4', '2024-02-05'),
(199, '69.63.184.19', '2024-02-05'),
(200, '69.63.184.2', '2024-02-05'),
(201, '69.171.231.4', '2024-02-05'),
(202, '43.134.142.8', '2024-02-05'),
(203, '101.91.148.219', '2024-02-05'),
(204, '203.2.64.59', '2024-02-05'),
(205, '69.63.189.4', '2024-02-05'),
(206, '69.63.189.120', '2024-02-08'),
(207, '69.63.189.118', '2024-02-05'),
(208, '5.49.90.104', '2024-02-10'),
(209, '130.255.166.79', '2024-02-05'),
(210, '43.155.138.79', '2024-02-05'),
(211, '182.42.105.144', '2024-02-05'),
(212, '135.148.195.12', '2024-02-05'),
(213, '31.13.127.14', '2024-02-05'),
(214, '31.13.127.118', '2024-02-05'),
(215, '31.13.127.21', '2024-02-05'),
(216, '31.13.127.117', '2024-02-05'),
(217, '69.171.249.9', '2024-02-05'),
(218, '69.171.249.119', '2024-02-05'),
(219, '69.171.249.4', '2024-02-05'),
(220, '52.34.73.19', '2024-02-05'),
(221, '157.230.105.177', '2024-02-05'),
(222, '5.133.192.168', '2024-02-05'),
(223, '35.163.5.172', '2024-02-05'),
(224, '182.42.111.213', '2024-02-05'),
(225, '182.44.9.147', '2024-02-05'),
(226, '66.249.74.105', '2024-02-06'),
(227, '66.220.149.119', '2024-02-06'),
(228, '173.252.87.116', '2024-02-06'),
(229, '173.252.87.119', '2024-02-06'),
(230, '173.252.87.117', '2024-02-06'),
(231, '104.244.78.233', '2024-02-06'),
(232, '83.229.85.81', '2024-02-06'),
(233, '173.252.95.11', '2024-02-06'),
(234, '209.99.139.44', '2024-02-06'),
(235, '65.154.226.166', '2024-02-06'),
(236, '173.252.87.2', '2024-02-06'),
(237, '35.171.144.152', '2024-02-06'),
(238, '35.184.232.156', '2024-02-07'),
(239, '103.139.8.226', '2024-02-07'),
(240, '14.215.163.132', '2024-02-07'),
(241, '66.220.149.13', '2024-02-07'),
(242, '188.225.60.227', '2024-02-07'),
(243, '116.212.185.158', '2024-02-08'),
(244, '69.63.184.4', '2024-02-07'),
(245, '45.151.198.10', '2024-02-07'),
(246, '23.226.24.235', '2024-02-07'),
(247, '69.63.189.116', '2024-02-07'),
(248, '191.102.187.132', '2024-02-07'),
(249, '95.164.158.242', '2024-02-07'),
(250, '191.102.149.95', '2024-02-07'),
(251, '66.249.79.106', '2024-02-07'),
(252, '44.202.104.216', '2024-02-07'),
(253, '167.172.59.163', '2024-02-07'),
(254, '62.141.44.236', '2024-02-07'),
(255, '95.164.156.238', '2024-02-07'),
(256, '209.127.107.105', '2024-02-07'),
(257, '209.127.105.154', '2024-02-07'),
(258, '191.102.179.137', '2024-02-07'),
(259, '191.102.187.171', '2024-02-07'),
(260, '95.164.159.218', '2024-02-07'),
(261, '192.241.67.142', '2024-02-07'),
(262, '34.233.122.181', '2024-02-07'),
(263, '69.63.189.9', '2024-02-08'),
(264, '35.90.113.92', '2024-02-08'),
(265, '18.237.14.235', '2024-02-08'),
(266, '54.36.148.6', '2024-02-08'),
(267, '69.160.160.61', '2024-02-08'),
(268, '54.36.148.231', '2024-02-08'),
(269, '54.36.149.23', '2024-02-08'),
(270, '103.117.195.24', '2024-02-08'),
(271, '54.36.148.102', '2024-02-09'),
(272, '66.249.82.134', '2024-02-09'),
(273, '172.255.48.134', '2024-02-09'),
(274, '69.171.231.5', '2024-02-09'),
(275, '66.249.66.201', '2024-02-09'),
(276, '194.33.191.139', '2024-02-09'),
(277, '116.212.185.159', '2024-02-09'),
(278, '186.179.59.53', '2024-02-09'),
(279, '198.20.189.74', '2024-02-09'),
(280, '172.255.48.147', '2024-02-09'),
(281, '45.139.66.140', '2024-02-09'),
(282, '95.164.157.13', '2024-02-09'),
(283, '170.254.179.127', '2024-02-09'),
(284, '191.102.174.102', '2024-02-09'),
(285, '38.154.214.171', '2024-02-09'),
(286, '23.21.20.39', '2024-02-09'),
(287, '172.255.48.145', '2024-02-09'),
(288, '209.127.106.251', '2024-02-09'),
(289, '173.252.111.14', '2024-02-09'),
(290, '103.108.61.6', '2024-02-09'),
(291, '66.220.149.15', '2024-02-09'),
(292, '13.56.168.96', '2024-02-09'),
(293, '77.246.109.162', '2024-02-09'),
(294, '46.101.7.247', '2024-02-09'),
(295, '34.227.46.172', '2024-02-10'),
(296, '192.36.109.86', '2024-02-10'),
(297, '103.125.233.7', '2024-02-10'),
(298, '69.171.251.7', '2024-02-10'),
(299, '54.36.148.144', '2024-02-10'),
(300, '205.210.31.15', '2024-02-10'),
(301, '52.13.81.80', '2024-02-10'),
(302, '34.211.155.251', '2024-02-10'),
(303, '69.171.251.2', '2024-02-10'),
(304, '114.130.72.178', '2024-02-10'),
(305, '103.151.11.164', '2024-02-10'),
(306, '44.220.161.241', '2024-02-10'),
(307, '116.212.185.148', '2024-02-10'),
(308, '202.134.8.193', '2024-02-10'),
(309, '3.94.252.213', '2024-02-10'),
(310, '91.92.252.172', '2024-02-10'),
(311, '43.155.136.16', '2024-02-11'),
(312, '103.148.114.26', '2024-02-11'),
(313, '34.214.157.248', '2024-02-11'),
(314, '51.81.46.212', '2024-02-11'),
(315, '135.148.100.196', '2024-02-11'),
(316, '103.205.36.64', '2024-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `tributes_link`
--

CREATE TABLE `tributes_link` (
  `id` int NOT NULL,
  `tributes_link` text COLLATE utf8mb4_general_ci,
  `qr_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tributes_link`
--

INSERT INTO `tributes_link` (`id`, `tributes_link`, `qr_id`) VALUES
(36, NULL, 55);

-- --------------------------------------------------------

--
-- Table structure for table `user_auth`
--

CREATE TABLE `user_auth` (
  `id` int NOT NULL,
  `mail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_auth`
--

INSERT INTO `user_auth` (`id`, `mail`, `password`, `religion`, `name`, `role`, `create_date`) VALUES
(7, 'nnasiruddin1996@gmail.com', '$2y$12$upx7VeK.iGMVRicOUcO.ceQGCj.MMGOx9KEwMpZmNPc/GiTNwOmii', '1', 'Nasir', NULL, '2024-01-29'),
(8, 'kanakdebnath826@gmail.com', '$2y$12$OC6Bc3bkDaGzXHR97N.Ae.g8Ow/l0sbItrRbQCdYVBGna2jigOVKW', '2', 'Kanak', NULL, '2024-02-04'),
(9, 'arakib259@gmail.com', '$2y$12$7bgpCHcBioHJNOsb5FareuGoY6gl3Sfh8LGsFr0W6j6ctudGaOsr.', '1', 'Abdullah Al Rakib', NULL, '2024-02-04'),
(10, 'bondhuraamar@gmail.com', '$2y$12$qSAp9GV1q.rrWgR.bGQR1.C98cvtmnEpM3duYzm9OcpACDxrXgNy2', '4', 'Md. Kaiser', NULL, '2024-02-05'),
(11, 'bari@gmail.com', '$2y$12$dnOrw/mWafFWnZLmMualS.2edGoyG5Z/ek8xIQkJcdzmPSegO/hty', '1', 'MD.Abdul Bari', NULL, '2024-02-08'),
(12, 'admin@example.com', '$2y$12$.L2BS7B.y2bSTYhTxF8C7OpDhi00xIq.3K2cfCCOQBW0W.MCRXFsy', '1', 'Admin', NULL, '2024-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `video_edit`
--

CREATE TABLE `video_edit` (
  `id` int NOT NULL,
  `relationship` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `specific_music_link` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `shown_beginning` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `video_type` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `about_your_desired_video` text COLLATE utf8mb4_general_ci,
  `drive_link` text COLLATE utf8mb4_general_ci,
  `auth_id` int DEFAULT NULL,
  `editing_price` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `order_date` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `is_accept` varchar(255) COLLATE utf8mb4_general_ci DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_auth`
--
ALTER TABLE `admin_auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editor_auth`
--
ALTER TABLE `editor_auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `order_accepted`
--
ALTER TABLE `order_accepted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cancel`
--
ALTER TABLE `order_cancel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_completed`
--
ALTER TABLE `order_completed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_payment_info`
--
ALTER TABLE `qr_payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_photos_link`
--
ALTER TABLE `qr_photos_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qr_id` (`qr_id`);

--
-- Indexes for table `qr_profile`
--
ALTER TABLE `qr_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_scanner_history`
--
ALTER TABLE `qr_scanner_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qr_scanner_ip`
--
ALTER TABLE `qr_scanner_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seo_setting`
--
ALTER TABLE `seo_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_visitor`
--
ALTER TABLE `site_visitor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tributes_link`
--
ALTER TABLE `tributes_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qr_id` (`qr_id`);

--
-- Indexes for table `user_auth`
--
ALTER TABLE `user_auth`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `video_edit`
--
ALTER TABLE `video_edit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_id` (`auth_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_auth`
--
ALTER TABLE `admin_auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `editor_auth`
--
ALTER TABLE `editor_auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_accepted`
--
ALTER TABLE `order_accepted`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_cancel`
--
ALTER TABLE `order_cancel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_completed`
--
ALTER TABLE `order_completed`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qr_payment_info`
--
ALTER TABLE `qr_payment_info`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `qr_photos_link`
--
ALTER TABLE `qr_photos_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `qr_profile`
--
ALTER TABLE `qr_profile`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `qr_scanner_history`
--
ALTER TABLE `qr_scanner_history`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qr_scanner_ip`
--
ALTER TABLE `qr_scanner_ip`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `seo_setting`
--
ALTER TABLE `seo_setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `site_visitor`
--
ALTER TABLE `site_visitor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=317;

--
-- AUTO_INCREMENT for table `tributes_link`
--
ALTER TABLE `tributes_link`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_auth`
--
ALTER TABLE `user_auth`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `video_edit`
--
ALTER TABLE `video_edit`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `user_auth` (`id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `user_auth` (`id`);

--
-- Constraints for table `qr_photos_link`
--
ALTER TABLE `qr_photos_link`
  ADD CONSTRAINT `qr_photos_link_ibfk_1` FOREIGN KEY (`qr_id`) REFERENCES `qr_profile` (`id`);

--
-- Constraints for table `tributes_link`
--
ALTER TABLE `tributes_link`
  ADD CONSTRAINT `tributes_link_ibfk_1` FOREIGN KEY (`qr_id`) REFERENCES `qr_profile` (`id`);

--
-- Constraints for table `video_edit`
--
ALTER TABLE `video_edit`
  ADD CONSTRAINT `video_edit_ibfk_1` FOREIGN KEY (`auth_id`) REFERENCES `user_auth` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
