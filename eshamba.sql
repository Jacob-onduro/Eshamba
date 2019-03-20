-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 18, 2019 at 02:50 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eshamba`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `fname` text,
  `lname` text,
  `username` varchar(200) DEFAULT NULL,
  `pwd` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `buyer` varchar(245) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `reference` varchar(200) DEFAULT NULL,
  `pesapal_tracking_id` varchar(200) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `product_id`, `buyer`, `amount`, `reference`, `pesapal_tracking_id`, `status`) VALUES
(17, 3, 'jackvinesontrinity@yahoo.com', '	2000', '54097962', NULL, 'Pending'),
(18, 3, 'jackvinesontrinity@yahoo.com', '	2000', '122200292', NULL, 'Pending'),
(19, 3, 'jackvinesontrinity@yahoo.com', '	2000', '199949496', NULL, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `product_type` varchar(200) DEFAULT NULL,
  `product_title` varchar(100) DEFAULT NULL,
  `product_desc` varchar(245) DEFAULT NULL,
  `product_price` varchar(100) DEFAULT NULL,
  `seller` varchar(100) DEFAULT NULL,
  `seller_id` int(11) DEFAULT NULL,
  `status` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `product_type`, `product_title`, `product_desc`, `product_price`, `seller`, `seller_id`, `status`) VALUES
(3, 'w1500.jpeg', NULL, 'cabbages', '50 pieces of cabbage', '2000', 'erikkarim.g@gmail.com', NULL, 'in stock'),
(4, '', NULL, 'Milk', '20 litres', '1800.00', 'jackvinesontrinity@yahoo.com', NULL, 'in stock');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE `users_table` (
  `user_id` int(11) NOT NULL,
  `fname` text,
  `lname` text,
  `idno` int(11) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `kra` varchar(200) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `county` text,
  `policies` text,
  `residence` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `occupation` varchar(245) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `pwd` varchar(200) DEFAULT NULL,
  `active` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `fname`, `lname`, `idno`, `dob`, `kra`, `mobile`, `county`, `policies`, `residence`, `address`, `occupation`, `email`, `pwd`, `active`) VALUES
(3, 'Jacob', 'Onduro', 32768211, '1994-10-24', 'A457898453', 710684091, 'Uasin Gishu', 'yes', 'Kesses', '142-40404', 'Peasant', 'jackvinesontrinity@yahoo.com', 'zxcvbnm', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `seller_id` (`seller_id`);

--
-- Indexes for table `users_table`
--
ALTER TABLE `users_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_table`
--
ALTER TABLE `users_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users_table` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
