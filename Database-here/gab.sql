-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 23, 2023 at 06:33 AM
-- Server version: 5.5.27
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_accounts`
--

CREATE TABLE `admin_accounts` (
  `id` int(25) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `series_id` varchar(60) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `expires` datetime DEFAULT NULL,
  `admin_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_accounts`
--

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `series_id`, `remember_token`, `expires`, `admin_type`) VALUES
(4, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'Y651eZugMBUmvZwP', '$2y$10$Un2GYw8KrNoeb7X6.KLiCujYO3TpIlrAsRczrCDtP.sDedrquc0QO', '2023-08-03 15:41:12', 'super'),
(7, 'anand', '$2y$10$OrQFRZdSUP3X2kvGZrg.zeplQkxcJAq1s6atRehyCpbEvOVPu8KPe', NULL, NULL, NULL, 'admin'),
(8, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'MyG5Xw2I12EWdJeD', '$2y$10$XL/RhpCz.uQoWE1xV77Wje4I4ker.gtg7YV4yqNwLZfzIYnP7E8Na', '2019-08-22 01:12:33', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `id` int(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `from_name` varchar(255) NOT NULL,
  `from_address` varchar(255) NOT NULL,
  `from_country` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `deposit_payment`
--

CREATE TABLE `deposit_payment` (
  `id` int(20) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `to_user` varchar(255) NOT NULL,
  `to_name` varchar(255) NOT NULL,
  `to_address` varchar(255) NOT NULL,
  `to_country` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(20) NOT NULL,
  `amount` int(20) NOT NULL,
  `time` int(20) NOT NULL,
  `hilo` varchar(20) NOT NULL,
  `pair` varchar(20) NOT NULL,
  `price` decimal(60,30) DEFAULT NULL,
  `result` varchar(10) NOT NULL DEFAULT 'noresult',
  `timestamp` int(100) NOT NULL,
  `firstprice` decimal(60,30) DEFAULT NULL,
  `lastprice` decimal(60,30) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `timesum` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `timerange` varchar(50) NOT NULL,
  `timemin` int(10) NOT NULL,
  `timemax` int(10) NOT NULL,
  `budgetrange` varchar(50) NOT NULL,
  `payout` int(10) NOT NULL DEFAULT '68'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`timerange`, `timemin`, `timemax`, `budgetrange`, `payout`) VALUES
('3,4,5,6,7,8,11', 5, 75, '1,2,3,4,5,6,7,8,9,10,15,20,25,35,50', 68);

-- --------------------------------------------------------

--
-- Table structure for table `smtp`
--

CREATE TABLE `smtp` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `balance` decimal(10,2) DEFAULT '0.00',
  `otp` int(11) DEFAULT NULL,
  `ip` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `cookie` varchar(255) NOT NULL,
  `bitcoin_address` varchar(255) DEFAULT NULL,
  `blocked` int(20) NOT NULL DEFAULT '0',
  `chat_blocked` int(20) NOT NULL DEFAULT '0',
  `code` int(11) NOT NULL DEFAULT '1',
  `online` int(11) NOT NULL DEFAULT '0',
  `sessionid` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `balance`, `otp`, `ip`, `country`, `cookie`, `bitcoin_address`, `blocked`, `chat_blocked`, `code`, `online`, `sessionid`) VALUES
(52, 'proadmini', 'gabriel@easytraderapp.com', 'e10adc3949ba59abbe56e057f20f883e', '118.00', 3397, '94.187.8.175', 'Canada', 'gabriel@easytraderapp.comxxx000eee777', NULL, 0, 0, 1, 0, 1),
(53, 'gabriel@easytraderapp.com', 'gabriel@easytraderapp.com', 'e10adc3949ba59abbe56e057f20f883e', '1.80', 3397, '178.135.0.155', 'Canada', 'gabriel@easytraderapp.comxxx000eee777', NULL, 0, 0, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id` int(20) NOT NULL,
  `user` varchar(255) NOT NULL,
  `amount` int(20) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `to_name` varchar(255) NOT NULL,
  `to_address` varchar(255) NOT NULL,
  `to_country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_payment`
--

CREATE TABLE `withdraw_payment` (
  `id` int(20) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposit_payment`
--
ALTER TABLE `deposit_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD KEY `index` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_payment`
--
ALTER TABLE `withdraw_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `deposit_payment`
--
ALTER TABLE `deposit_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=569;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `withdraw_payment`
--
ALTER TABLE `withdraw_payment`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
