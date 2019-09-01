-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2019 at 01:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `facebook_id` varchar(250) DEFAULT NULL,
  `google_id` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `loginaccess` int(11) NOT NULL DEFAULT '1',
  `age` int(11) NOT NULL,
  `location` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `facebook_id`, `google_id`, `created_at`, `loginaccess`, `age`, `location`, `gender`, `deleted_at`) VALUES
(1, 'Om Kumar Yadav', '', 'om@o.m', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-08-31 21:30:00', 1, 0, '', '', NULL),
(2, 'Om Kumar', '', 'ombitcse@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-08-31 21:36:00', 1, 0, '', '', NULL),
(4, 'DFDF', '', 'DFDF', 'd457ccc058d82f9d901de91c3ecd1629', NULL, NULL, '2019-08-31 21:39:00', 1, 0, '', '', NULL),
(5, 'fgdg', '', '1234567', '8f60c8102d29fcd525162d02eed4566b', NULL, NULL, '2019-08-31 21:43:00', 1, 0, '', '', NULL),
(6, 'om kumar', 'kumarom120311@gmail.com', '939146', '20978758d7fd9fd6bce67ca557e9a9b4', NULL, NULL, '2019-08-31 21:56:00', 1, 28, 'Baltimore, MD, USA', 'MALE', NULL),
(7, 'om kumar', 'kumarom1203@gmail.com', '123', '202cb962ac59075b964b07152d234b70', NULL, NULL, '2019-08-31 22:01:00', 1, 60, 'Bayonne, France', 'MALE', '2019-08-31 22:57:00'),
(10, 'omkumar', 'kumarom1203@gmail.com', '790114', '2f8a546c10b6499322e0960bbce9df24', NULL, NULL, '2019-08-31 22:04:00', 1, 12, '1234', 'FEMALE', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE `user_logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `login_via` varchar(10) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(250) NOT NULL,
  `action_page` varchar(250) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`id`, `user_id`, `login_via`, `date_time`, `ip_address`, `action_page`, `remarks`) VALUES
(1, '1', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/signup', 'Login Via Username'),
(2, '123', 'Username', '2019-09-01 11:19:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(3, '123', 'Username', '2019-09-01 11:20:15', '::1', '/authentication/index.php/Home/deleteAccount', 'Login Via Username'),
(4, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(5, '123', '', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Home/deleteAccount', 'User Deleted'),
(6, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(7, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(8, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(9, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(10, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(11, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(12, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(13, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(14, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username'),
(15, '123', 'Username', '2019-09-01 11:18:15', '::1', '/authentication/index.php/Login/doLogin', 'Login Via Username');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_logs`
--
ALTER TABLE `user_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_logs`
--
ALTER TABLE `user_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
