-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 04:56 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `timeslot` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `user_type` varchar(150) NOT NULL,
  `ref_id` int(20) DEFAULT NULL,
  `id_number` int(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `appointment_type` varchar(50) NOT NULL,
  `info` varchar(300) NOT NULL,
  `app_status` varchar(150) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `timeslot`, `date`, `user_type`, `ref_id`, `id_number`, `subject`, `appointment_type`, `info`, `app_status`, `updated_at`) VALUES
(1, '09:00AM - 09:30AM', '2022-10-19', 'Student', NULL, 20012546, 'Test Subject1', 'Walk-in', 'Test Info 1', 'Completed', '2022-10-18 12:33:29'),
(2, '09:00AM - 09:30AM', '2022-10-20', 'Student', NULL, 100254256, 'Test Subject2', 'Online', 'Test Info 2', 'Completed', '2022-10-18 12:34:00'),
(3, '09:30AM - 10:00AM', '2022-10-21', 'Student', NULL, 100232541, 'Test Subject3', 'Walk-in', 'Test Info 3', 'Completed', '2022-10-18 12:36:25'),
(4, '09:00AM - 09:30AM', '2022-10-24', 'Student', NULL, 10025123, 'Test Subject4', 'Walk-in', 'Test Info 4', 'Completed', '2022-10-18 13:14:47'),
(5, '12:30PM - 01:00PM', '2022-10-25', 'Student', 12, 1003001, 'Test Subject4', 'Walk-in', 'Poverty, Teachers counseling, Pursigido', 'Completed', '2022-10-18 13:34:37'),
(6, '11:30AM - 12:00PM', '2022-10-27', 'Student', 10, 10025410, 'Test Subject6', 'Online', 'Bullying, Have tutor, Need Psychiatry', 'In Review', '2022-10-18 13:55:49'),
(7, '11:00AM - 11:30AM', '2022-10-26', 'Student', 8, 10025410, 'Test Subject7', 'Walk-in', 'Poverty, Find Part Time Job, Pursigido', 'Completed', '2022-10-18 14:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_history`
--

CREATE TABLE `appointment_history` (
  `id` int(11) NOT NULL,
  `app_id` int(11) NOT NULL,
  `reason` varchar(300) NOT NULL,
  `status` varchar(150) NOT NULL,
  `date_accomplished` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_history`
--

INSERT INTO `appointment_history` (`id`, `app_id`, `reason`, `status`, `date_accomplished`, `updated_at`) VALUES
(1, 1, 'Test Info 1', 'Completed', '2022-10-18', '2022-10-18 12:31:08'),
(2, 2, 'Test Info 2', 'Completed', '2022-10-18', '2022-10-18 12:34:00'),
(3, 3, 'Test Info 3', 'Completed', '2022-10-18', '2022-10-18 12:36:25'),
(4, 4, 'Test Info 4', 'Completed', '2022-10-18', '2022-10-18 13:14:47'),
(5, 5, 'Poverty, Teachers counseling, Pursigido', 'Completed', '2022-10-18', '2022-10-18 13:34:37'),
(6, 7, 'Poverty, Find Part Time Job, Pursigido', 'Completed', '2022-10-18', '2022-10-18 14:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `counseling`
--

CREATE TABLE `counseling` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `section` varchar(150) NOT NULL,
  `app_id` int(20) NOT NULL,
  `session_date` date NOT NULL,
  `feedback_date` date NOT NULL,
  `action_taken` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `student_name`, `program`, `section`, `app_id`, `session_date`, `feedback_date`, `action_taken`, `remarks`, `updated_at`) VALUES
(1, 'Josephine Bracken', 'BSIT', '4', 1, '2022-10-19', '2022-10-18', 'Feedback Action Taken', 'Feedback Remarks', '2022-10-18 12:31:08'),
(2, 'Josephine Bracken', 'BSIT', '4', 1, '2022-10-19', '2022-10-18', 'Feedback Action Taken', 'Feedback Remarks', '2022-10-18 12:33:29'),
(3, 'maria elizabeth galang', 'CpE', '3', 2, '2022-10-20', '2022-10-18', 'Feedback Action Taken2', 'Feedback Remarks2', '2022-10-18 12:34:00'),
(4, 'rex bryan cabiles', 'BSIT', '5', 3, '2022-10-21', '2022-10-18', 'Feedback Action Taken3', 'Feedback Remarks3', '2022-10-18 12:36:25'),
(5, 'jessica bernardo', 'BSIT', '4', 4, '2022-10-24', '2022-10-18', 'Feedback Action Taken4', 'Feedback Remarks4', '2022-10-18 13:14:47'),
(6, 'juan dela cruz', 'BSIT', '4', 5, '2022-10-25', '2022-10-18', 'Feedback Action Taken5', 'Feedback Remarks5', '2022-10-18 13:34:37'),
(7, 'hannah marie perez', 'BSIT', '3', 7, '2022-10-26', '2022-10-18', 'Feedback Action Taken7', 'Feedback Remarks7', '2022-10-18 14:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `offenses`
--

CREATE TABLE `offenses` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `info` varchar(300) NOT NULL,
  `remarks` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 4, 'Others', 2, '2022-09-27', 'Crisis', 'Poverty', 'Find Part Time Job', 'Pursigido', 'Completed', '2022-10-18 14:54:03'),
(9, 7, 'Staff', 2, '2022-09-27', 'Academic', 'Slow learner', 'Have tutor', 'Unhealthy Environment', 'Completed', '2022-10-12 09:42:48'),
(10, 4, 'Staff', 3, '2022-10-12', 'Personal', 'Bullying', 'Have tutor', 'Need Psychiatry', 'Pending', '2022-10-12 09:59:23'),
(11, 5, 'Staff', 3, '2022-10-12', 'Career', 'Poverty', 'Find Part Time Job', 'Unhealthy Environment', 'Pending', '2022-10-12 09:59:17'),
(12, 3, 'Guidance Counselor', 2, '2022-10-12', 'Personal', 'Poverty', 'Teachers counseling', 'Pursigido', 'Completed', '2022-10-18 13:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `refferal_id` int(20) NOT NULL,
  `offense` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_history`
--
ALTER TABLE `appointment_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counseling`
--
ALTER TABLE `counseling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offenses`
--
ALTER TABLE `offenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refferals`
--
ALTER TABLE `refferals`
  ADD PRIMARY KEY (`ref_id`),
  ADD KEY `user_id` (`reffered_user`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment_history`
--
ALTER TABLE `appointment_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counseling`
--
ALTER TABLE `counseling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `offenses`
--
ALTER TABLE `offenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `refferals`
--
ALTER TABLE `refferals`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
