-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 08:23 PM
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
-- Table structure for table `appointment_slots`
--

CREATE TABLE `appointment_slots` (
  `slot_id` int(11) NOT NULL,
  `slot_date` date NOT NULL,
  `available_slot` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_slots`
--

INSERT INTO `appointment_slots` (`slot_id`, `slot_date`, `available_slot`, `updated_at`) VALUES
(1, '2022-10-07', 5, '2022-10-10 10:47:26');

-- --------------------------------------------------------

--
-- Table structure for table `refferals`
--

CREATE TABLE `refferals` (
  `ref_id` int(11) NOT NULL,
  `reffered_user` int(20) NOT NULL,
  `source` varchar(255) NOT NULL,
  `reffered_by` int(20) NOT NULL,
  `reffered_date` date NOT NULL,
  `nature` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `actions` text NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `ref_status` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refferals`
--

INSERT INTO `refferals` (`ref_id`, `reffered_user`, `source`, `reffered_by`, `reffered_date`, `nature`, `reason`, `actions`, `remarks`, `ref_status`, `updated_at`) VALUES
(1, 6, 'Guidance Counselor', 3, '2022-10-03', 'Academic', 'Slow learner', 'Kinausap ng teacher ng masisinsinan', 'Unhealthy Environment', 'Cancelled', '2022-10-12 09:26:29'),
(2, 3, 'Faculty', 4, '2022-10-04', 'Career', 'Madaling mainis', 'Have Tutor', 'Unhealthy Environment', 'Cancelled', '2022-10-12 09:26:33'),
(3, 7, 'Faculty', 2, '2022-10-03', 'Personal', 'Nagwawala', 'Pinacheck up sa Doctor', 'Needs Psychiatry', 'Pending', '2022-10-12 11:43:18'),
(5, 5, 'Guidance Counselor', 3, '2022-09-26', 'Personal', 'Slow learner', 'Kinausap ng teacher ng masisinsinan', 'Unhealthy Environment', 'For Approval', '2022-10-12 09:40:53'),
(6, 4, 'Classmate/s', 2, '2022-09-21', 'Career', 'Madaling mainis', 'Have tutor', 'Remarks', 'For Approval', '2022-10-12 09:42:36'),
(7, 4, 'Classmate/s', 2, '2022-09-21', 'Career', 'Madaling mainis', 'Have tutor', 'Remarks', 'Completed', '2022-10-12 09:42:40'),
(8, 4, 'Others', 2, '2022-09-27', 'Crisis', 'Poverty', 'Find Part Time Job', 'Pursigido', 'Pending', '2022-10-12 09:42:45'),
(9, 7, 'Staff', 2, '2022-09-27', 'Academic', 'Slow learner', 'Have tutor', 'Unhealthy Environment', 'Completed', '2022-10-12 09:42:48'),
(10, 4, 'Staff', 3, '2022-10-12', 'Personal', 'Bullying', 'Have tutor', 'Need Psychiatry', 'Pending', '2022-10-12 09:59:23'),
(11, 5, 'Staff', 3, '2022-10-12', 'Career', 'Poverty', 'Find Part Time Job', 'Unhealthy Environment', 'Pending', '2022-10-12 09:59:17'),
(12, 3, 'Guidance Counselor', 2, '2022-10-12', 'Personal', 'Poverty', 'Teachers counseling', 'Pursigido', 'For Approval', '2022-10-12 11:42:56');

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
  `image` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `id_number`, `last_name`, `first_name`, `middle_name`, `address`, `contact`, `gender`, `department`, `program`, `level`, `position`, `status`, `image`, `email`, `password`, `role`, `updated_at`) VALUES
(1, 1001, 'counselor', 'guidance', '', 'angeles, pampanga', 123456789, 'male', 'admin', 'admin', 'n/a', 'guidance', 'active', '', 'guidance@gmail.com', 'guidance', 1, '2022-10-12 15:02:45'),
(2, 1002, 'doe', 'jane', '', 'angeles, pampanga', 123456789, 'female', 'engineering', 'staff', 'n/a', 'staff', 'active', '', 'staff@gmail.com', 'staff', 2, '2022-10-12 15:01:13'),
(3, 1003001, 'dela cruz', 'juan', '', 'angeles, pampanga', 123456789, 'male', 'IT', 'BSIT', '4', 'student', 'active', '', 'juandelacruz@gmail.com', 'student', 3, '2022-10-05 08:30:10'),
(4, 10025410, 'perez', 'hannah marie', 'esclito', 'san fernando, pampanga', 238541258, 'female', 'IT', 'BSIT', '3', 'student', 'active', '', 'hannah@gmail.com', 'hannah', 3, '2022-10-05 08:43:43'),
(5, 10025123, 'bernardo', 'jessica', '', 'magalang, pampanga', 52147823, 'female', 'IT', 'BSIT', '4', 'student', 'active', '', 'jessica@gmail.com', 'jessica', 3, '2022-10-05 11:38:37'),
(6, 100232541, 'cabiles', 'rex bryan', 'gayla', 'san fernando, pampanga', 123456789, 'male', 'engineering', 'BSIT', '5', 'student', 'active', '', 'rexbryan@gmail.com', 'rexbryan', 3, '2022-10-05 12:35:59'),
(7, 100254256, 'galang', 'maria elizabeth', '', 'bamban, tarlac', 123456987, 'female', 'engineering', 'CpE', '3', 'student', 'active', '', 'elizabeth@gmail.com', 'elizabeth', 3, '2022-10-05 12:41:36'),
(8, 20012546, 'Bracken', 'Josephine', 'Clemente', 'Arayat, Pampanga', 453257892, 'Female', 'IT', 'BSIT', '4', 'Student', 'Active', '', 'josephine@gmail.com', 'josephine', 3, '2022-10-12 17:50:08'),
(9, 422856789, 'Mammaril', 'Juanna Marie', 'Lopez', 'Magalang, Pampanga', 2147483647, 'Female', 'IT', '', '', 'staff', 'Active', '', 'juanna@gmail.com', 'juanna', 2, '2022-10-12 18:07:24'),
(10, 498752314, 'Reyes', 'John Archee', 'Romualdez', 'Bamban, Tarlac', 2147483647, 'Male', 'Engineering', '', '', 'Staff', 'Active', '', 'johnarchee@gmail.com', 'johnarchee', 2, '2022-10-12 18:11:08'),
(11, 1000095, 'Marquez', 'Justine', 'Del Valle', 'Clark, Pampanga', 487451230, 'Male', 'Admin', '', '', 'Guidance', 'Active', '', 'justinemarquez@gmail.com', 'justine', 1, '2022-10-12 18:21:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_slots`
--
ALTER TABLE `appointment_slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `refferals`
--
ALTER TABLE `refferals`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `user_id` (`reffered_user`);

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
-- AUTO_INCREMENT for table `appointment_slots`
--
ALTER TABLE `appointment_slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refferals`
--
ALTER TABLE `refferals`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `refferals`
--
ALTER TABLE `refferals`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`reffered_user`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user-role` FOREIGN KEY (`role`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
