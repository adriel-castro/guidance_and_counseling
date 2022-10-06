-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 04:39 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidance_and_counseling`
--

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `ref_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `source` varchar(255) NOT NULL,
  `reffered_by` varchar(255) NOT NULL,
  `reffered_date` date NOT NULL,
  `nature` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `actions` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ref_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`ref_id`, `user_id`, `source`, `reffered_by`, `reffered_date`, `nature`, `reason`, `actions`, `remarks`, `ref_status`, `updated_at`) VALUES
(1, 3, 'Staff', 'admin 2', '2022-10-04', 'Academic', 'Nahihirapan mag follow sa lesson', 'Kinausap ng teacher', 'remarks', 'Pending', '2022-10-05 17:41:38'),
(2, 4, 'Parent/Guardian', 'admin 3', '2022-10-03', 'Career', 'Nahihirapan mag follow sa lesson', 'Kinausap ng teacher', 'Remarks', 'Completed', '2022-10-05 17:41:28'),
(3, 5, 'Parent/Guardian', 'Parent', '2022-09-30', 'Career', 'Madaling mainis', 'Teachers counseling', 'Unhealthy Environment', 'Pending', '2022-10-05 17:31:53'),
(4, 6, 'Staff', 'staff', '2022-09-29', 'Personal', 'Slow learner', 'Have tutor', 'Unhealthy Environment', 'Pending', '2022-10-05 17:31:56'),
(13, 7, 'Classmate/s', 'classmate', '2022-10-05', 'Career', 'Slow learner', 'Teachers counseling', 'Unhealthy Environment', 'Pending', '2022-10-05 12:44:17'),
(14, 7, 'Parent/Guardian', 'Parent', '2022-10-03', 'Personal', 'Bullying', 'Teachers counseling', 'Need Psychiatry', 'Pending', '2022-10-05 12:49:07'),
(36, 7, 'Staff', 'staff', '2022-09-28', 'Career', 'Madaling mainis', 'Teachers counseling', 'Unhealthy Environment', 'Pending', '2022-10-05 14:17:37'),
(37, 4, 'Classmate/s', 'Parent', '2022-09-27', 'Career', 'Slow learner', 'Have tutor', 'Unhealthy Environment', 'Pending', '2022-10-05 14:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `roles` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roles`) VALUES
(1, 'administrator'),
(2, 'staff'),
(3, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `id_number` int(20) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `middle_name` varchar(150) NOT NULL,
  `address` varchar(300) NOT NULL,
  `contact` int(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `position` varchar(150) NOT NULL,
  `status` varchar(50) NOT NULL,
  `image` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `gender`, `department`, `program`, `level`, `position`, `status`, `image`, `email`, `password`, `role`, `updated_at`) VALUES
(1, 1001, 'counselor', 'guidance', '', 'angeles, pampanga', 123456789, 'male', 'admin', 'admin', 'n/a', 'guidance counselor', 'active', '', 'guidance@gmail.com', 'guidance', 1, '2022-10-05 08:29:06'),
(2, 1002, 'doe', 'jane', '', 'angeles, pampanga', 123456789, 'female', 'engineering', 'staff', 'n/a', 'teacher', 'active', '', 'staff@gmail.com', 'staff', 2, '2022-10-05 08:29:20'),
(3, 1003001, 'dela cruz', 'juan', '', 'angeles, pampanga', 123456789, 'male', 'IT', 'BSIT', '4', 'student', 'active', '', 'juandelacruz@gmail.com', 'student', 3, '2022-10-05 08:30:10'),
(4, 10025410, 'perez', 'hannah marie', 'esclito', 'san fernando, pampanga', 238541258, 'female', 'IT', 'BSIT', '3', 'student', 'active', '', 'hannah@gmail.com', 'hannah', 3, '2022-10-05 08:43:43'),
(5, 10025123, 'bernardo', 'jessica', '', 'magalang, pampanga', 52147823, 'female', 'IT', 'BSIT', '4', 'student', 'active', '', 'jessica@gmail.com', 'jessica', 3, '2022-10-05 11:38:37'),
(6, 100232541, 'cabiles', 'rex bryan', 'gayla', 'san fernando, pampanga', 123456789, 'male', 'engineering', 'BSIT', '5', 'student', 'active', '', 'rexbryan@gmail.com', 'rexbryan', 3, '2022-10-05 12:35:59'),
(7, 100254256, 'galang', 'maria elizabeth', '', 'bamban, tarlac', 123456987, 'female', 'engineering', 'CpE', '3', 'student', 'active', '', 'elizabeth@gmail.com', 'elizabeth', 3, '2022-10-05 12:41:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user-role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `referrals`
--
ALTER TABLE `referrals`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user-role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
