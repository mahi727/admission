-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 03:29 AM
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
  `session` varchar(4) COLLATE utf32_bin DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_bin;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `application_id`, `roll`, `user_id`, `name`, `fatherName`, `motherName`, `mailingAddress`, `permanentAddress`, `birthDate`, `nationality`, `mobile`, `school_name`, `ssc_board`, `ssc_group`, `ssc_year`, `ssc_division`, `ssc_gpa`, `ssc_marksheet`, `ssc_certificate`, `college_name`, `hsc_board`, `hsc_group`, `hsc_year`, `hsc_division`, `hsc_gpa`, `hsc_marksheet`, `hsc_certificate`, `department`, `university`, `honors_year`, `honors_class`, `cgpa`, `honors_marksheet`, `honors_certificate`, `photo`, `sign`, `payment_status`, `approval_status`, `session`, `created_at`, `updated_at`) VALUES
(5, 100002, 2019001, 7, 'Afrina Sharmin', 'John', 'Doe', 'sharmin@gmail.com', 'Uttara, Dhaka', 1543363200, 'Bangladeshi', '01723566187', 'Rajuk', 'Dhaka', 'Science', '1998', '1st Division', '5.00', NULL, NULL, 'Rajuk', 'Dhaka', 'Science', '2000', '1st Division', '5.00', 'uploads/hDkZFeClb2jCvnhtO5l8lZXYrCcawLsRngUhrTJX.pdf', 'uploads/IckrO1HlDKzqPJvHEZRYV7749XDPq88lp8ZWTh99.pdf', 'IIT DU', 'DU', '2004', '1st Division', '3.20', NULL, NULL, 'uploads/zyLdLjNWFutw8OxOmwYELflhHsituQkwJQbD4KiX.jpeg', NULL, 'Paid', 'Eligible', '2018', '2018-12-13 04:30:08', '2018-12-14 19:37:02'),
(6, 100003, 2019002, 9, 'John', 'Dad', 'Mom', 'afrina@gmail.com', 'Uttara, Dhaka', 1545609600, 'Bangladeshi', '01623466193', 'Rajuk', 'Dhaka', 'Arts', '1990', '2nd Division', '5.00', 'uploads/mdyRZBOavukHFJoR735jtLrZ2O1YV1F2643wkspo.pdf', 'uploads/Ok6umhkcLFT9DV3CKMI01QwAO8n8EtsW4aRDc3lB.pdf', 'Rajuk', 'Rajshahi', 'Business Studies', '1994', '2nd Division', '5.00', 'uploads/GrHhJG3eXMVFRkdXW7JE0itdSp6soCbqnUyEd8Eo.pdf', 'uploads/HjzmBsxlejS282m04hOp0ruwAFmLeMP3qgdzB3WE.pdf', 'IIT DU', 'DU', '2004', '1st Division', '3.20', 'uploads/uy8tZbHRyrxCM0McRvk92VInnasZVoZYRHkbdYQY.pdf', 'uploads/XqxIb67EISIeRObQIKdhwXMh9fvfcmsiDr18RZVB.pdf', 'uploads/2X2324tX0u4jWwMGC84wHYkO16NQECQH4IimFVSU.jpeg', 'uploads/iBcMPtCIUu8SQtcwdJaBGoF5nmTL055a8JtTNhVj.jpeg', 'Paid', 'Eligible', '2018', '2018-12-13 06:36:43', '2018-12-14 19:37:02'),
(9, 100005, 2019003, 12, 'Blossom Knox', 'Ulric Craig', 'Tate Welch', 'mehedi.iitdu@gmail.com', 'Uttara', 945043200, 'bd', '542525235', 'Stuart Harvey', 'Dhaka', 'Arts', '2000', '1st Division', '5.00', 'uploads/cCG10s6AQqFnlWU8cAA65sKSHukdGH995YaF34WD.pdf', 'uploads/y2yZBY7A0ccmADyK0gVXvDouJRj7MMF92hadAnFz.pdf', 'Charde Hendricks', 'Dinajpur', 'Science', '2003', '2nd Division', '5.00', 'uploads/7WVp7S1LL8SXjVD63qW78n3ZHaESSOYp7cQGjja2.pdf', 'uploads/FA1nkT6xek4Z68FVnQVEpYBLZWU9xEUivKlB5MVK.pdf', 'Amet quia inventore aut ad tempora dignissimos officia voluptatem tempora necessitatibus et', 'Ducimus autem sit corrupti consequatur Eum commodi ea error corporis earum est non pariatur Voluptatum blanditiis quis perspiciatis exercitationem', '2015', '1st Division', '3.3', 'uploads/WtweR7A5bKOwXHud0huuLrDdydUruszWukVHk5Ua.pdf', 'uploads/T97MYwy5r3jHMPCV8z0uQdzNUf43nhRTkdKLBNf8.pdf', 'uploads/bXVs6uXe51aebTNjy075dFbakO1SldLzWCYBypqv.jpeg', 'uploads/twNORAfw050ZArNJZttjdPmIj8uTDPPbUjS0UYlu.jpeg', 'Paid', 'Eligible', '2019', '2018-12-14 12:40:07', '2018-12-14 19:37:02'),
(11, 100007, 0, 1, 'Mahi', 'Dad', 'Mom', 'mahi@gmail.com', 'Uttara, Dhaka', 634262400, 'Bangladeshi', '01723566187', 'Idea College', 'Dhaka', 'Science', '2002', '1st Division', '5.00', 'uploads/8CpR6T5GlHw0NlNgrWyyfUbEEfTn6wjkxGXVwYgf.pdf', 'uploads/gxFMWw2VlzyFgnF3XnFAWThXz3gzLSQDd2EYlulu.pdf', 'Idea College', 'Mymensingh', 'Science', '2004', '2nd Division', '3.80', 'uploads/4RJgpFG4Qe2lgXUPgK3vG0FEzElVRXOYhoWk4M2W.pdf', 'uploads/WV0IrD6MNLF9oUehF9acz9MunChWPx8MHVzKVRXH.pdf', 'Math', 'S.K University', '2015', '1st Division', '3.80', 'uploads/dxTl26rV1sp0F2Ycg0KVFiKXLqFI9ZgSBc6FNT1Q.pdf', 'uploads/zNjYamWOcBe6SZXALAiSNTaKuSzW6cmbKqJ986XM.pdf', 'uploads/vEbWqquESU5Ecv0ASW19Q8ES5FDFQruCOzB4mY9p.jpeg', 'uploads/wB62PAz9kYC0eiFDkAs6ZfYdGIwDn1UbhQ042HB8.jpeg', 'Unpaid', 'Not Eligible', '2019', '2018-12-14 19:19:05', '2018-12-14 19:19:05');

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
(3, 'Room 105', 10, 2018031, 2018040, '2018-12-13 04:34:01', '2018-12-13 05:00:22');

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
(1, 'circular_published', '0', '2018-12-10 10:00:05', '2018-12-14 13:04:16'),
(2, 'circular_link', 'uploads/circular/tKi1ZZOtfvLK6VvGULEm15GhCQfEU3MIfiK8nBXL.pdf', '2018-12-10 04:23:19', '2018-12-14 20:10:47'),
(3, 'admit_card_published', '1', '2018-12-11 06:45:09', '2018-12-14 19:37:02'),
(4, 'seat_plan_published', '1', '2018-12-11 07:12:00', '2018-12-14 19:37:12'),
(5, 'attendance_sheet_link', 'uploads/attendance/exIgv4d60OJkLpMn01gFSYo5taH1pAeO6n4iWMI2.pdf', '2018-12-11 07:22:22', '2018-12-11 01:29:41'),
(6, 'attendance_sheet_published', '0', '2018-12-11 07:22:22', '2018-12-11 01:29:41'),
(7, 'result_link', 'uploads/result/dWHi9YmnNEjqUtzyO4Y3PoOHKTkHZ8p6JRlS31Rw.pdf', '2018-12-11 07:32:26', '2018-12-14 04:48:53'),
(8, 'result_published', '0', '2018-12-11 07:32:26', '2018-12-14 04:48:53'),
(9, 'sign_link', 'uploads/sign/1w8eexF0jO5tnKALGCDO6sVYTagsbKEhbLt1YLSo.png', '2018-12-14 04:59:40', '2018-12-14 19:33:33'),
(10, 'submission_date', '1544918400', '2018-12-14 04:59:40', '2018-12-14 19:33:33'),
(11, 'exam_date', '1545350400', '2018-12-14 04:59:40', '2018-12-14 19:33:33'),
(12, 'session_year', '2018', '2018-12-14 05:14:07', '2018-12-14 20:10:47');

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
(1, 'applicant', 'Mahi', 'mahi@gmail.com', 'Female', NULL, '2018-12-13 18:00:00', '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', 'oHVmCcvd7UzCTTbgHsLVTBotogPZPbbpo0mpLRMVatMmf54Hc6QXIgUDkqch', '2018-12-10 03:09:34', '2018-12-10 03:09:34'),
(2, 'administrator', 'Administrator', 'administrator@gmail.com', 'Male', NULL, '2018-12-13 18:00:00', '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', '1NCmt10AyPxGZUq3A06dB7J3vVNvzQJSsSKMp02iqH1paiXEBEv5pVqWacMt', NULL, NULL),
(3, 'program-chair', 'Program Chair', 'program-chair@gmail.com', 'Male', NULL, '2018-12-13 18:00:00', '$2y$10$M6Kn84jK/FQ72fII7Z8z5.jYjn0/yacbWDW4CExkWH0huBxlJeZDS', 'ew7jJs2rYbUT7COzTYn3rWTKuaEOjvRNApKYsR250HsZn33A0oZl5JzpJ8Bk', NULL, NULL),
(11, 'scrutinizer', 'Scrutinizer', 'scrutinizer@gmail.com', NULL, NULL, '2018-12-13 18:00:00', '$2y$10$T1m8RYk5uKpTAG8UBGiWNe6VibqjO9Lw47gPpAVJhEau1dRN7U11W', 'cPJMzQURZ40umOoO7QGkbKnDHzGSQ8Q8xFX07hiHTJu9zfFv9VQcm43OS7pi', NULL, '2018-12-14 06:14:36'),
(12, 'applicant', 'Mehedi', 'mehedi.iitdu@gmail.com', 'Male', '01623466193', '2018-12-13 18:00:00', '$2y$10$oLX.pluaSDCxKwFw5Fp30uDVeaxuIMhFjsDPUhhG5U/9Dw3zAlAhe', 'QKvxQK6VUtPsz2h8o6WL97TKHatxlQS0cfOoDsqmyWeRbhMLj9Ee577Y4XVK', '2018-12-14 06:29:56', '2018-12-14 06:29:56'),
(13, 'applicant', 'Afrina Mahi', 'bsse0727@iit.du.ac.bd', 'Female', '01623466192', '2018-12-14 13:03:39', '$2y$10$457qtrehFu0aEbl4l7.Bb.K7u3Xbl9I.qpvQGbrU2P2I5i/uQICLK', 'tn4fpR6UsUk2yc5fhGJXnIrw6f2uDFHArN3xKSXckm8CCjFsBrt2GDX2GW8u', '2018-12-14 13:00:49', '2018-12-14 13:03:39');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat_plans`
--
ALTER TABLE `seat_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
