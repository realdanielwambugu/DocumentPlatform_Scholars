-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2021 at 09:46 AM
-- Server version: 5.7.33
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scholars_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `document` varchar(255) DEFAULT NULL,
  `thumbnil` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `user_id`, `document`, `thumbnil`, `title`, `type`, `updated_at`, `created_at`) VALUES
(1, 1, '6047537f4181f.pdf', '6047537f469bc.jpg', 'BIT 4106 FUZZY PATTERNS RECOGNITION AND NEURAL NETWORKS ', 'pdf', '2021-03-09 10:52:48', '2021-03-09 10:52:48'),
(2, 1, '604753b5f2fec.pdf', '604753b5f3c18.png', ' BIT 4103 HUMAN COMPUTER INTERATION', 'pdf', '2021-03-09 10:53:42', '2021-03-09 10:53:42'),
(3, 1, '60475408c14b5.pdf', '60475408c83f1.png', 'BIT 3202 Artificial Intelligence', 'pdf', '2021-03-09 10:55:04', '2021-03-09 10:55:04'),
(4, 1, '60475484bcc2f.pdf', '60475484bd6ba.png', 'BBIT 330 Management of Information System', 'pdf', '2021-03-09 10:57:08', '2021-03-09 10:57:08'),
(5, 1, '604755052e34f.pdf', '604755052ee01.png', 'Computer Network Security and Cryptography', 'pdf', '2021-03-09 10:59:17', '2021-03-09 10:59:17'),
(6, 1, '604756e7bb586.pdf', '604756e7bc0ba.png', 'Bit 4202 Distributed Multimedia Systems', 'pdf', '2021-03-09 11:07:19', '2021-03-09 11:07:19'),
(7, 1, '6047571d9abbe.pdf', '6047571d9b3a3.png', 'BASIC DISCRETE MATHS', 'pdf', '2021-03-09 11:08:13', '2021-03-09 11:08:13'),
(8, 1, '6047575fc3b69.pdf', '6047575fc4309.png', 'Principles of Auditing', 'pdf', '2021-03-09 11:09:19', '2021-03-09 11:09:19'),
(9, 1, '6047589155168.pdf', '6047589155eb0.png', 'FUNDAMENTALS OF ACCOUNTING II', 'pdf', '2021-03-09 11:14:25', '2021-03-09 11:14:25'),
(10, 1, '60475982a4f75.pdf', '60475982a5a09.png', ' BUSINESS STATISTICS II', 'pdf', '2021-03-09 11:18:26', '2021-03-09 11:18:26'),
(11, 1, '60475afe2f474.pdf', '60475afe2fe8a.png', 'BBM 412 STRATEGIC MANAGEMENT', 'pdf', '2021-03-09 11:24:46', '2021-03-09 11:24:46'),
(12, 1, '60475bb165b5c.pdf', '60475bb166b37.png', 'BIT 4204 ICT in Business and Society', 'pdf', '2021-03-09 11:27:45', '2021-03-09 11:27:45'),
(13, 1, '604877a2b9e40.pdf', '604877a2bf7f5.png', 'BIT 2104 BUSINESS INFORMATION SYSTEMS ANALYSIS AND DESIGN', 'pdf', '2021-03-10 07:39:18', '2021-03-10 07:39:18'),
(14, 1, '6048b2be1c8ba.pdf', '6048b2be1caed.png', 'CALCULUS I', 'past paper', '2021-03-10 13:51:27', '2021-03-10 13:51:27'),
(15, 1, '6048b3571dfbc.pdf', '6048b35731afe.png', 'BMA 1204 CALCULUS II Past paper', 'past paper', '2021-03-10 13:53:59', '2021-03-10 13:53:59'),
(16, 1, '6048b3ff7d53e.pdf', '6048b3ff7d7fb.png', 'BASIC DISCRETE MATHEMATICS Past Paper', 'past paper', '2021-03-10 13:56:47', '2021-03-10 13:56:47'),
(17, 1, '6048b4f735292.pdf', '6048b4f7354f6.png', '2013 BASIC DISCRETE MATHEMATICS Past Paper', 'past paper', '2021-03-10 14:00:55', '2021-03-10 14:00:55'),
(18, 1, '6048b5f99387c.pdf', '6048b5f999866.png', '2014 BASIC DISCRETE MATHEMATICS Past Paper ', 'past paper', '2021-03-10 12:57:55', '2021-03-10 14:05:15'),
(19, 1, '6048bbacdf764.pdf', '6048bbacdf92d.png', '2012-2013 BASIC DISCRETE MATHEMATICS Past Paper', 'past paper', '2021-03-10 13:05:18', '2021-03-10 14:29:34'),
(20, 1, '6048c5c6c5fc9.pdf', '6048c5c6c6229.png', 'BMA1208 Analytical Geometry', 'past paper', '2021-03-10 15:12:40', '2021-03-10 15:12:40'),
(21, 1, '6048c7434cf5d.pdf', '6048c7434d0c7.png', 'BBY 4215 AQUATIC ECOLOGY', 'past paper', '2021-03-10 15:18:59', '2021-03-10 15:18:59'),
(22, 1, '6048c7cb1de37.pdf', '6048c7cb1e28d.png', '2014-2015 BBY 4215 AQUATIC ECOLOGY', 'past paper', '2021-03-10 15:21:15', '2021-03-10 15:21:15'),
(23, 1, '6048c85195217.pdf', '6048c8519546d.png', ' BBY 4215 AQUATIC ECOLOGY002', 'past paper', '2021-03-10 15:23:29', '2021-03-10 15:23:29'),
(24, 1, '6048cc8c360a2.pdf', '6048cc8c60105.png', 'BEP 2201 Guidance and counselling in Education', 'past paper', '2021-03-10 15:41:35', '2021-03-10 15:41:35'),
(25, 1, '6048ce7603e1c.pdf', '6048ce7604103.png', 'BMA 3116 BIO STATISTICS', 'past paper', '2021-03-10 15:49:43', '2021-03-10 15:49:43'),
(26, 1, '6048ceea6385e.pdf', '6048ceea63a7a.png', 'BEDU 421 GUIDANCE AND COUNSELLING', 'past paper', '2021-03-10 15:51:38', '2021-03-10 15:51:38'),
(28, 1, '6048cf9100d35.pdf', '6048cf9101c0b.png', ' BEP 2201 Guidance and counselling in Education 2013-2014', 'past paper', '2021-03-10 15:54:25', '2021-03-10 15:54:25'),
(29, 1, '6049b4b79514f.pdf', '6049b4b79eb0c.png', 'Philosophy of Education', 'past paper', '2021-03-11 08:12:10', '2021-03-11 08:12:10'),
(30, 1, '6049b5e1f178d.pdf', '6049b5e1f1ced.png', 'BIT2203 Data Structures And Alogarithms', 'past paper', '2021-03-11 08:17:06', '2021-03-11 08:17:06'),
(31, 1, '6049b66f7488c.pdf', '6049b66f74b1b.png', 'BUCU005 HIV-AIDS AND DRUG ABUSE', 'past paper', '2021-03-11 08:19:27', '2021-03-11 08:19:27'),
(32, 1, '6049bbaf2ea23.pdf', '6049bbaf2ec2d.png', 'BIT3202 Software Engineering', 'past paper', '2021-03-11 08:41:52', '2021-03-11 08:41:52'),
(33, 1, '6049bc4877b99.pdf', '6049bc4877dee.png', 'Foundation Mathematics', 'past paper', '2021-03-11 08:44:24', '2021-03-11 08:44:24'),
(34, 3, '6049cd8844ef0.pdf', '6049cd8845259.png', 'PUBLIC FINANCE AND TAXATION CPA KASNEB ', 'pdf', '2021-03-11 09:58:00', '2021-03-11 09:58:00'),
(35, 3, '6049ce832a5bd.pdf', '6049ce832aa20.png', 'CPA PUBLIC FINANCE AND TAXATION ', 'past paper', '2021-03-11 10:02:11', '2021-03-11 10:02:11'),
(36, 3, '6049cfba8fd37.pdf', '6049cfba90098.png', 'CPA PUBLIC FINANCE AND TAXATION ', 'past paper', '2021-03-11 10:07:22', '2021-03-11 10:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `migration` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `updated_at`, `created_at`) VALUES
(1, 'CreateUsersTable', '2021-03-04 04:56:20', '2021-03-04 04:56:20'),
(3, 'CreateDocumentsTable', '2021-03-04 07:53:03', '2021-03-04 07:53:03'),
(4, 'ModifyDocumentsTable001', '2021-03-06 08:58:17', '2021-03-06 08:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'default.jpg',
  `status` varchar(255) DEFAULT 'active',
  `code` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `photo`, `status`, `code`, `updated_at`, `created_at`) VALUES
(1, 'Daniel Wambugu', 'pairplanet@gmail.com', '$2y$10$zSbE/YivzQnlJAq..su/DOrVK/BLV00VKw1.iHj6h57ECWmKswfHq', 'default.jpg', 'active', NULL, '2021-03-09 11:22:13', '2021-03-09 11:22:13'),
(2, 'Hillary', 'Hillarymutembei49@gmail.com', '$2y$10$nIhuoDVw4.Qs/koHa1.6ien/eTiI9JNkwMramBpFc/35t429qtVtW', 'default.jpg', 'active', NULL, '2021-03-10 14:05:25', '2021-03-10 14:05:25'),
(3, 'Brian Osano', 'osano3204@gmail.com', '$2y$10$DjixKWTX9I0PzpHm19Y7nu4m5AFcu5/hDRPmuNxm1Kf7hBV1Fcgqi', 'default.jpg', 'active', NULL, '2021-03-11 09:53:21', '2021-03-11 09:53:21'),
(4, 'Dennis munene', 'dennismunene660@gmail.com', '$2y$10$fII5mM.fsd3UwD65bKvNA.rDZuEd0gDCXizrt8n.mc2tZ9C.9tVxe', 'default.jpg', 'active', NULL, '2021-03-12 09:35:38', '2021-03-12 09:35:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
