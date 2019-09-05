-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2019 at 02:20 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartcampuserp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admission_forms`
--

CREATE TABLE `tbl_admission_forms` (
  `id` int(11) NOT NULL,
  `application_id` int(11) NOT NULL,
  `admission_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `student_id` int(11) NOT NULL,
  `received_by` varchar(500) NOT NULL,
  `received_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `department` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `session` int(11) NOT NULL,
  `roll` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classes`
--

CREATE TABLE `tbl_classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_profile`
--

CREATE TABLE `tbl_student_profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL DEFAULT 'new_user',
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `created_by` varchar(500) NOT NULL,
  `verrified_at` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_name`, `email`, `password`, `profile_id`, `user_role`, `created_by`, `verrified_at`, `status`, `created_at`, `modified_at`) VALUES
(1, 'hafijul233', 'hafijul233@gmail.com', 'c93ccd78b2076528346216b3b2f701e6', 1, 'root', 'hafijul233', '2019-08-29 15:00:00', 1, '2019-08-29 15:00:42', '2019-08-29 16:28:20'),
(2, 'mustak123', 'mustak123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 'parent', 'hafijul233', NULL, 0, '2019-09-02 01:49:27', '2019-09-02 01:50:09'),
(3, 'hamida123', 'hamida123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 'admin', 'hafijul233', NULL, 0, '2019-09-02 01:51:27', '2019-09-02 01:51:27'),
(4, 'razia123', 'razia123@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 'student', 'hafijul233', NULL, 0, '2019-09-02 01:54:35', '2019-09-02 01:54:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admission_forms`
--
ALTER TABLE `tbl_admission_forms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `application_id` (`application_id`);

--
-- Indexes for table `tbl_student_profile`
--
ALTER TABLE `tbl_student_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admission_forms`
--
ALTER TABLE `tbl_admission_forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_student_profile`
--
ALTER TABLE `tbl_student_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
