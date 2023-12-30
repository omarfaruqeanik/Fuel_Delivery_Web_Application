-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2023 at 07:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuel_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `fuelstations`
--

CREATE TABLE `fuelstations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stn_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stn_phn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fuel_name1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_name2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel_name3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel1_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel2_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel3_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `map_url` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fuelstations`
--

INSERT INTO `fuelstations` (`id`, `owner_name`, `owner_email`, `stn_name`, `stn_phn`, `fuel_name1`, `fuel_name2`, `fuel_name3`, `fuel1_price`, `fuel2_price`, `fuel3_price`, `area`, `map_url`, `created_at`, `updated_at`) VALUES
(1, 'Rahim', 'r@gmail.com', 'Khalek Pamp', '+8801234567', 'Petrol', NULL, NULL, '123', NULL, NULL, 'Savar', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1217832773054!2d90.35470837439253!3d23.77867728769199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0bdbd7cfafd%3A0x7b36def92f9e4648!2sKhaleque%20Gas%20Station!5e0!3m2!1sen!2sbd!4v1702918660206!5m2!1sen!2sbd', NULL, NULL);

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
(1, '2023_09_16_063653_create_orders_table', 1),
(2, '2023_09_17_060409_create_fuelstations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Customer_FName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_LName` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Customer_Emailid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Delivery_Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package1` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package2` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package3` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package1_price` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package2_price` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package3_price` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Order_Details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Coupen_Code` double(8,2) DEFAULT NULL,
  `Amount` double(8,2) DEFAULT NULL,
  `paymentmode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shipping_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `Delivery_Status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `Order_Cancel_Status` tinyint(4) NOT NULL DEFAULT '0',
  `Order_Cancelled_On` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `p_status_Updated_By` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@gmail.com', NULL, '$2y$10$76Y31apG0kH.dcBYG4A.xu0O/OZbn0OTF81BprEnt7qBV1V7sNYhO', 'superadmin', NULL, '2023-12-25 18:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fuelstations`
--
ALTER TABLE `fuelstations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fuelstations`
--
ALTER TABLE `fuelstations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
