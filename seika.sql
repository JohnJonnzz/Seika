-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 05, 2023 at 05:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seika`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `abt_id` int(11) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `minitext` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `abt_desc` varchar(1000) NOT NULL,
  `extra_txt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`abt_id`, `experience`, `minitext`, `judul`, `abt_desc`, `extra_txt`) VALUES
(1, '2+', 'LEARN ABOUT US', 'The Perfect Place For Your Staycation', 'Seika, didirikan pada bulan Desember 2021, mengawali perjalanan bisnisnya dengan Alesha Blue Villahouse dan Apartmen Skyhouse yang dirancang dengan konsep studio eksklusif. Awalnya, fokus utama kami adalah menyediakan tempat yang nyaman untuk staycation atau keperluan bisnis, terutama bagi para profesional yang menghadiri acara di sekitar Indonesia Convention Exhibition (ICE) BSD.\r\n\r\nDengan tingkat okupansi yang baik, mencapai 15 malam per bulan, Seika memutuskan untuk memperluas pangsa pasar di kawasan BSD. Setelah melewati masa sulit pandemi COVID-19, meningkatnya jumlah acara di sekitar ICE BSD menciptakan permintaan yang signifikan akan tempat menginap. Sebagai respons terhadap peluang ini, Seika menambahkan unit-unit baru ke portofolio kami, termasuk Alesha Red, Akasa, dan yang terbaru adalah apartemen premium yang akan dihadirkan pada tahun 2023.', 'Apartment | House');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `carousel_id` int(11) NOT NULL,
  `carousel_img_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`carousel_id`, `carousel_img_id`) VALUES
(1, 34),
(2, 35),
(38, 36);

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
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(100) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `img`) VALUES
(1, 'Apart-1.1.jpg'),
(2, 'Apart-1.2.jpg'),
(3, 'Apart-1.3.jpg'),
(4, 'Apart-1.4.jpg'),
(5, 'Apart-1.5.jpg'),
(6, 'Apart-1.jpg'),
(7, 'Apart-2.jpg'),
(9, 'Apart-2.1.jpg'),
(10, 'Apart-2.2.jpg'),
(11, 'Apart-2.3.jpg'),
(12, 'Apart-2.4.jpg'),
(13, 'Apart-3.jpg'),
(14, 'Apart-3.1.jpg'),
(15, 'Apart-3.2.jpg'),
(16, 'Apart-3.3.jpg'),
(17, 'Apart-3.4.jpg'),
(18, 'Apart-3.5.jpg'),
(19, 'Apart-4.jpg'),
(20, 'Apart-4.1.jpg'),
(21, 'Apart-4.2.jpg'),
(22, 'Apart-4.3.jpg'),
(23, 'Apart-5.jpg'),
(24, 'Apart-6.jpg'),
(25, 'Apart-6.1.jpg'),
(27, 'Apart-6.3.png'),
(28, 'Apart-6.4.png'),
(30, 'cust-bg.jpeg'),
(31, 'customer.jpg'),
(32, 'customer-2.jpg'),
(33, 'customer-bg.png'),
(34, 'home-1.jpg'),
(35, 'home-2.jpg'),
(36, 'home-3.jpg'),
(37, 'instagram.jpeg'),
(38, 'Logo Seika.jpg'),
(39, 'logoseika.png'),
(40, 'Apart-4.4.jpg'),
(41, 'Apart-4.5.jpg'),
(43, 'Apart-1.6.jpg'),
(44, 'Apart-2.5.jpg'),
(48, 'ComingSoon.jpg'),
(49, 'ComingSoon2.jpg');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `gallery_id` int(100) NOT NULL,
  `display1` text DEFAULT NULL,
  `display2` text DEFAULT NULL,
  `display3` text DEFAULT NULL,
  `display4` text DEFAULT NULL,
  `display5` text DEFAULT NULL,
  `display6` text DEFAULT NULL,
  `display7` text DEFAULT NULL,
  `display8` text DEFAULT NULL,
  `unit_name` varchar(100) NOT NULL,
  `subjudul` varchar(1000) NOT NULL,
  `room` varchar(1000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `units_desc` varchar(2000) NOT NULL,
  `location_link` varchar(2000) NOT NULL,
  `price` varchar(100) NOT NULL,
  `availability` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `gallery_id`, `display1`, `display2`, `display3`, `display4`, `display5`, `display6`, `display7`, `display8`, `unit_name`, `subjudul`, `room`, `category`, `units_desc`, `location_link`, `price`, `availability`) VALUES
(1, 1, 'Apart-1.1.jpg', 'Apart-1.2.jpg', 'Apart-1.3.jpg', 'Apart-1.4.jpg', 'Apart-1.5.jpg', 'Apart-1.6.jpg', 'Apart-1.8.png', 'Apart-1.9.png', 'Premium Branz Apartment', 'All rental units in Pagedangan District, Indonesia', '3 Guests  |  1 Bedroom  |  1 Bed  |  1 Bathroom', 'Apartment', 'Premium 1BR 5 star BRANZ Apartment, located at CBD BSD City with AEON Mall City View.\r\n\r\nCity Center located, Walkable distance to AEON, 4 Min to ICE BSD Convention & QBIG Mall\r\n\r\nEquipped with All Premium Brand\r\nThe space\r\n*Living Room*\r\n- Electric Reclining Leather Sofa by FERRARA\r\n- 55” Smart TV by LG\r\n- TV Console with Built in Bluetooth Speaker by CELLINI\r\n- Free Netflix Access\r\n- 100 Mbps Wifi\r\n\r\n*Bed Room*\r\n- Queen size bed (160) by SIMMONS (Commonly used by 5 Star Hotel)\r\n- Wardrobe\r\n- Dressing table\r\n\r\n*Kitchen*\r\n- DRINKABLE japanese tech Tap water\r\n- Stove by Modena\r\n- Cooker Hood by Franke\r\n- Fridge by Panasonic\r\n- Cooking Utensil are Provided (Knife, board, scissor, frying spatula, Pan)\r\n- Dining Utensils are Provided (Bowl, Small Plate, Big Plate, Drinking Cup, Wine Glass)\r\n- Microwave by Samsung\r\n\r\n*The Bathroom*\r\n- Hair & Body Shampoo Provided\r\n- 2 Towels Provided\r\n- All Marble Flooring\r\n\r\n*Others*\r\n- Iron and Board\r\n- Hair Dryer\r\n- AC Air Conditioning by Panasonic\r\n- Japanese Heat Reduction Apart Window by VCool\r\n- All Genuine Marble Flooring', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.            7186231693086!2d106.64046542483678!3d-6.            3006551616638005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.            1!3m3!1m2!1s0x2e69fb7b42110f75%3A0x657fd55728a63c92!2sBranz%20Bsd%20City%            20Apartment!5e0!3m2!1sen!2sid!4v1699906903780!5m2!1sen!2sid', 'Rp.692,857/night', 'Available'),
(2, 13, 'Apart-3.1.jpg', 'Apart-3.2.jpg', 'Apart-3.3.jpg', 'Apart-3.4.jpg', 'Apart-2.7.png', 'Apart-2.6.png', 'Apart-2.8.png', 'Apart-2.9.png', '4BR Pool Villa, Alesha House', 'All villas in Pagedangan District, Indonesia', '6 Guests  |  4 Bedrooms  |   4 Beds  |   3 Bathrooms', 'House', '4 Bedroom Pool Villa located at the central of West BSD City, 10 Minutes Distance to ICE Convention, AEON Mall and BSD CBD with semi private Swimming Pool.\r\n\r\n- Free Unlimited 50mbps Wifi\r\n- Free Netflix Access\r\n- BBQ Grill\r\n- Semi Private 24 Hours Swimming Pool\r\n- Free Spacious Parking\r\n\r\nEquipped by Luxury Furniture:\r\n- Living Room Sofa by CELLINI Singapore\r\n- All Queen & Single Bed by Florence Italy\r\n- Panasonic Smart TV 55” inch\r\n- Samsung AC', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.\r\n            77206677476!2d106.61440427483669!3d-6.29365806159887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.\r\n            1!3m3!1m2!1s0x2e69fcaf6b52e097%3A0xf7ab12aee11f023b!2sAlesha%20House%2C%20Vanya%\r\n            20Park!5e0!3m2!1sen!2sid!4v1700012628873!5m2!1sen!2sid', 'Rp.1,500,000/night', 'Available'),
(3, 7, 'Apart-2.1.jpg', 'Apart-2.2.jpg', 'Apart-2.3.jpg', 'Apart-2.4.jpg', 'Apart-2.5.jpg', 'Apart-3.6.jpg', 'Apart-3.7.jpg', 'Apart-3.8.png', '3BR Premium Pool Villa, Alesha House', 'All houses in Ciledug District, Indonesia', '6 Guests  |  3 Bedrooms  |  3 Beds  |   2 Bathrooms\r\n\r\n', 'House', 'Located at the heart of West BSD City, 10 Minutes distance to ICE Convention Center, AEON Mall and BSD CBD.\r\n\r\nEnjoy our most luxurious unit, semi private pool, equipped with Premium Brand furniture & electronics\r\n\r\n[Self Check in Available]\r\nThe space\r\n*The Living Room*\r\n- 3+1 Seater Sofa by VINOTI Living\r\n- Smart 55”inch TV by Panasonic with FREE Netflix Access & Youtube\r\n- FREE Wifi with 50mbps\r\n\r\n*Master Room*\r\n- Queen Size Bed (160) by SERTA US\r\n- Smart 43”Inch TV by Samsung\r\n- 3 Seater Daybed Sofa by VINOTI Living\r\n- En-suite Private Bathroom with Water Heater\r\n\r\n*Room 2*\r\n- Queen Size Bed (160) by Florence\r\n\r\n*Room 3*\r\n- Single Size Bed (100) by Florence\r\n\r\n*The Dining*\r\n- 4 Seater Round Table\r\n- Dining Utensils are Provided (Bowl, Small Plate, Big Plate, Drinking Cup, Wine Glass)\r\n\r\n*The Kitchen*\r\n- Fridge by Panasonic\r\n- Cooker\r\n- Cooking Utensils are Provided (Knife, board, scissor, frying spatula, Pan)\r\n- Microwave by Samsung\r\n- Water Dispenser\r\n- Rice Cooker\r\n\r\n*The Bathroom*\r\n- Hair & Body Shampoo Provided\r\n- 5Towels Provided\r\n\r\n*Others*\r\n- BBQ Grill\r\n- Outdoor 3+1 Seater Rattan Sofa\r\n- Iron and Board\r\n- Hair Dryer\r\n- AC Air Conditioning by Samsung\r\n- Free Spacious Parking for up to 5 Cars', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.\r\n            77206677476!2d106.61440427483669!3d-6.29365806159887!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.\r\n            1!3m3!1m2!1s0x2e69fcaf6b52e097%3A0xf7ab12aee11f023b!2sAlesha%20House%2C%20Vanya%\r\n            20Park!5e0!3m2!1sen!2sid!4v1700012628873!5m2!1sen!2sid', 'Rp.1,857,143/night', 'Available'),
(4, 24, 'Apart-6.1.jpg', 'Akasa Table.png', 'Apart-4.3.jpg', 'Apart-4.4.jpg', 'Akasa Bed.jpg', 'Apart-6.6.png', 'Apart-6.7.png', 'Apart-6.8.png', '1BR Apartemen, Akasa', 'All rental units in BSD, Indonesia', '3 Guests  |  1 Bedroom  |   1 Bed  |  1 Bathroom', 'Apartment', 'Akasa BSD City Apartment. Close to various entertainment venues in BSD City\r\n- Near AEON Mall\r\n- Near exit Toll BSD\r\n- Near Terrace Kota Mall\r\n- Dekat ICE BSD\r\n\r\n1 Bedroom Apartment\r\nView Swimming Pool\r\nLantai 25\r\nFree WIFI\r\nThe space\r\n*Bedroom*\r\n1 Queen Size Bed 160\r\nAircon\r\n\r\n*Living Room*\r\nTV\r\nWifi\r\nAircon\r\n2 Seater Sofa\r\n\r\n*Kitchen*\r\nKettle\r\nStove', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.\r\n                7498555881493!2d106.68413401744382!3d-6.296567000000003!2m3!1f0!2f0!3f0!3m2!\r\n                1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fad1bbc37fe1%3A0x5ee907a8d1c9e067!2sApartment%\r\n                20Akasa!5e0!3m2!1sen!2sid!4v1700063722104!5m2!1sen!2sid', 'Rp.300,000/night', 'Available'),
(5, 19, 'Apart-4.3.jpg', 'Apart-4.2.jpg', 'Apart-4.3.jpg', 'Apart-4.4.jpg', 'Apart-4.5.jpg', 'Apart-4.6.jpg', 'Apart-4.7.jpg', 'Apart-4.8.jpg', 'Luxury Studio, SkyHouse', 'All rental units in Serpong District, Indonesia', '2 Guests  |  1 Bedroom  |  1 Bed  |  1 Bathroom\r\n\r\n', 'Apartment', 'Located at the heart of CBD BSD City.\r\nOnly one step to Aeon Mall and The Breeze\r\n\r\nFacilities:\r\n- Smart TV\r\n- Queen Size Bed by FLORENCE Italy\r\n- Free Netflix\r\n- Free Unlimited 4G Wifi\r\n- Snacks and Drinks\r\n\r\nApartment Facilities\r\n- Swimming Pool\r\n- Gym\r\n- Mini Market\r\n- Cafe', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5608.\r\n                341588270626!2d106.64319796383799!3d-6.303566600496529!2m3!1f0!2f0!3f0!\r\n                3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fbc5ccca6fc3%3A0x844ea4f92c9eb4aa!2s\r\n                Sky%20House%20BSD!5e0!3m2!1sen!2sid!4v1700062217099!5m2!1sen!2sid', 'Rp.335,714/night', 'Available'),
(8, 49, 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Logo Seika.jpg', 'Coming Soon', 'N/A', 'N/A', 'ComingSoon', 'N/A', 'N/A', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `question`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'raisa', 'Kio', 'Raina@gmail.com', NULL, '$2y$10$mawkGRdnsSzgb1x7Ja0wJuvjJI9VYCF929qKEsG4siumXE.r/TPyG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`abt_id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`carousel_id`),
  ADD KEY `carousel_img_id` (`carousel_img_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `gallery_id` (`gallery_id`);

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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `abt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `carousel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carousel`
--
ALTER TABLE `carousel`
  ADD CONSTRAINT `carousel_ibfk_1` FOREIGN KEY (`carousel_img_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
