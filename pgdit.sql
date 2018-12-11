-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 08:48 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgdit`
--

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` int(11) NOT NULL,
  `application_id` int(6) DEFAULT '100000',
  `roll` int(6) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf32_bin DEFAULT NULL,
  `fatherName` varchar(100) COLLATE utf32_bin DEFAULT NULL,
  `motherName` varchar(100) COLLATE utf32_bin DEFAULT NULL,
  `mailingAddress` varchar(100) COLLATE utf32_bin DEFAULT NULL,
  `permanentAddress` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `birthDate` int(20) DEFAULT NULL,
  `nationality` varchar(100) COLLATE utf32_bin DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf32_bin DEFAULT NULL,
  `school_name` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `ssc_board` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `ssc_group` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `ssc_year` varchar(4) COLLATE utf32_bin DEFAULT NULL,
  `ssc_division` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `ssc_gpa` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `ssc_marksheet` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `ssc_certificate` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `college_name` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `hsc_board` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `hsc_group` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `hsc_year` varchar(4) COLLATE utf32_bin DEFAULT NULL,
  `hsc_division` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `hsc_gpa` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `hsc_marksheet` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `hsc_certificate` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `department` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `university` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `honors_year` varchar(4) COLLATE utf32_bin DEFAULT NULL,
  `honors_class` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `cgpa` varchar(20) COLLATE utf32_bin DEFAULT NULL,
  `honors_marksheet` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `honors_certificate` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `photo` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `sign` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `payment_status` varchar(10) COLLATE utf32_bin NOT NULL DEFAULT 'Unpaid',
  `approval_status` varchar(100) COLLATE utf32_bin NOT NULL DEFAULT 'Not Eligible',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `application_id`, `roll`, `user_id`, `name`, `fatherName`, `motherName`, `mailingAddress`, `permanentAddress`, `birthDate`, `nationality`, `mobile`, `school_name`, `ssc_board`, `ssc_group`, `ssc_year`, `ssc_division`, `ssc_gpa`, `ssc_marksheet`, `ssc_certificate`, `college_name`, `hsc_board`, `hsc_group`, `hsc_year`, `hsc_division`, `hsc_gpa`, `hsc_marksheet`, `hsc_certificate`, `department`, `university`, `honors_year`, `honors_class`, `cgpa`, `honors_marksheet`, `honors_certificate`, `photo`, `sign`, `payment_status`, `approval_status`, `created_at`, `updated_at`) VALUES
(2, 100000, 2018001, 1, 'Jade Prince', 'Aquila Whitley', 'Beatrice Wiley', 'mahi@gmail.com', 'House 86', 931478400, 'Bangladeshi', '01623466193', 'Hector Burgess', 'Dhaka', 'Science', '2012', '1st Division', '4.5', 'uploads/BwrjmvfMc7vzKHdHAAHRhUPHSOZOSeszQuTqig6U.pdf', 'uploads/L0MqK5s2doBSxTCaItQNZaOkU6ipgBAzqu6rjvYY.pdf', 'Karina Valencia', 'Jessore', 'Science', '2014', '2nd Division', '4.5', 'uploads/GTEIwObH5tteFimgx1dBqkPf8CQGdFQfHBRluFW3.pdf', 'uploads/PUFzOdUiKYgmPOsUALDckBXoitgTvm05JINZYYcB.pdf', 'Aut libero quam accusantium et', 'Beatae est sit temporibus qui quisquam aut nisi voluptates dicta quia nihil dolor', '2018', '2nd Division', '3.5', 'uploads/QGfpkNpWcD4ivG59DEf8IYqJioWpxAXmxmYQScHU.pdf', 'uploads/GK5WJLtnLJECJASnsnWxmHI1iJYsUsB4laWGVJHa.pdf', 'uploads/M2EEId5EIXpAA7fCAKUN4AGvPAn26h5D6wWOsh7i.pdf', 'uploads/YaL66JHV63gAkCj68bKcgZ56zedbXVUIU8nxqqKz.pdf', 'Paid', 'Eligible', '2018-12-10 06:22:50', '2018-12-11 00:44:26');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seat_plans`
--

CREATE TABLE `seat_plans` (
  `id` int(11) NOT NULL,
  `room_no` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `capacity` int(10) NOT NULL DEFAULT '0',
  `starting_roll` int(10) DEFAULT NULL,
  `ending_roll` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `seat_plans`
--

INSERT INTO `seat_plans` (`id`, `room_no`, `capacity`, `starting_roll`, `ending_roll`, `created_at`, `updated_at`) VALUES
(1, 'Room 107', 30, 2018001, 2018030, '2018-12-11 01:07:05', '2018-12-11 01:07:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `value` varchar(255) COLLATE utf32_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'circular_published', '1', '2018-12-10 10:00:05', '2018-12-10 04:11:15'),
(2, 'circular_link', 'uploads/circular/eHDZ1MNXJdBgPMuShAAGhtLhM9Wry7kLdBNMymYY.pdf', '2018-12-10 04:23:19', '2018-12-10 04:35:55'),
(3, 'admit_card_published', '1', '2018-12-11 06:45:09', '2018-12-11 12:41:49'),
(4, 'seat_plan_published', '1', '2018-12-11 07:12:00', '2018-12-11 01:13:08'),
(5, 'attendance_sheet_link', 'uploads/attendance/exIgv4d60OJkLpMn01gFSYo5taH1pAeO6n4iWMI2.pdf', '2018-12-11 07:22:22', '2018-12-11 01:29:41'),
(6, 'attendance_sheet_published', '1', '2018-12-11 07:22:22', '2018-12-11 01:29:41'),
(7, 'result_link', 'uploads/result/LKAyeLqAZH3W8qcdAlzpEYykiyPUIm8vVjw9rAnt.pdf', '2018-12-11 07:32:26', '2018-12-11 01:37:52'),
(8, 'result_published', '1', '2018-12-11 07:32:26', '2018-12-11 01:37:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'applicant',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `gender`, `mobile`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'applicant', 'Mahi', 'mahi@gmail.com', 'Female', NULL, NULL, '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', 'fXrnqtSoWXYxwDHpJXjlcYfxehBalWEGUCMzVgkNjsGIs0JdQbXOxFnVZ0eN', '2018-12-10 03:09:34', '2018-12-10 03:09:34'),
(2, 'administrator', 'Administrator', 'administrator@gmail.com', 'Male', NULL, NULL, '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', 'qDreSftoBD5S25r8hRBjG5jLfRYHFGDnNdcaV0HvNFp4NV8hyATz84Od2NEN', NULL, NULL),
(3, 'program-chair', 'Program Chair', 'program-chair@gmail.com', 'Male', NULL, NULL, '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', '8bCxFO0v1tQQMQ3EtZV7vRP59kDV8H0wWOI2NV3cMQtGjviKwUlLnMgzkdm1', NULL, NULL),
(4, 'applicant', 'Mehdi', 'mehedi.iitdu@gmail.com', 'Male', '01642954885', NULL, '$2y$10$jA4FlTPlJ6EBlb0jtENsRe0Aia0JwzsTJ4RBf36SxpmbU7NSljzZm', 'QL2UmTh6ZQFf7FUV4CQ1mKufSPFzTbJgnfpVcfpHgzZK4CUHWyolCMM5yHPu', '2018-12-10 12:16:21', '2018-12-10 12:16:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
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
-- Indexes for table `seat_plans`
--
ALTER TABLE `seat_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_plans`
--
ALTER TABLE `seat_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
