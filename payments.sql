-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 04:58 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rexp`
--

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transactionid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(8,2) DEFAULT '0.00',
  `trackingid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `package` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `email`, `phone`, `transactionid`, `amount`, `trackingid`, `status`, `package`, `payment_method`, `created_at`, `updated_at`) VALUES
(9, '1', NULL, NULL, 'PESAPALCCYEYO5EBNSR8TS', 10.00, '7a5568b5-e3ac-40a3-a6d9-5c3e1be2573d', 'FAILED', '13', 'PESAPAL', '2018-04-30 07:30:01', '2018-04-30 10:01:55'),
(10, 'Mugula Abbey', 'mugulaabbey@gmail.com', '758281012', 'PESAPAL1D9SMXIMS9TN6TJ', 10.00, NULL, 'NEW', '30', NULL, '2018-04-30 10:38:32', '2018-04-30 10:38:32'),
(11, 'Mugula Abbey', 'mugulaabbey@gmail.com', '758281012', 'PESAPAL55GM7SEHXER46BT', 10.00, '37280f18-b853-4f33-9108-19400245baeb', 'FAILED', '30', 'PESAPAL', '2018-04-30 10:39:42', '2018-04-30 10:43:13'),
(12, 'mugula', 'email@gmail.com', '0758281012', 'PESAPALUOBPXG9U61YMO7S', 10.00, '606cf6a1-8f35-41e6-991b-a1a8895f3a9f', 'PENDING', '47', NULL, '2018-04-30 10:47:41', '2018-04-30 10:49:51'),
(13, 'rona', 'nannet089@gmail.com', '758281012', 'PESAPALRXSWISUZNEJ6Q0I', 100.00, 'c32f8005-f946-4e0a-98ba-ca1ad04459e8', 'INVALID', '57', 'PESAPAL', '2018-04-30 11:00:04', '2018-04-30 11:06:01'),
(14, 'mugula abbey', 'email@gmail.com', '0703921620', 'PESAPAL9WKOJCCGM75JMMB', 100.00, NULL, 'NEW', '13', NULL, '2018-04-30 11:26:36', '2018-04-30 11:26:36'),
(15, 'mugula abbey', 'email@gmail.com', '0703921620', 'PESAPALM29IKE1I2588EQH', 100.00, NULL, 'NEW', '13', NULL, '2018-04-30 11:27:13', '2018-04-30 11:27:13'),
(16, 'Member 1', 'nannet089@gmail.com', '0751534921', 'PESAPALGFEMQOH451EXRGV', 100.00, NULL, 'NEW', '13', NULL, '2018-04-30 11:28:44', '2018-04-30 11:28:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
