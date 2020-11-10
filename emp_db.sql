-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2020 at 04:07 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp`
--
CREATE DATABASE IF NOT EXISTS `emp` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `emp`;

-- --------------------------------------------------------

--
-- Table structure for table `emp_info`
--

CREATE TABLE `emp_info` (
  `emp_id` int(9) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_phone_no` varchar(15) NOT NULL,
  `emp_email` varchar(25) NOT NULL,
  `emp_address` varchar(35) NOT NULL,
  `emp_city` text NOT NULL,
  `emp_state` text NOT NULL,
  `emp_zipcode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp_info`
--

INSERT INTO `emp_info` (`emp_id`, `emp_name`, `emp_phone_no`, `emp_email`, `emp_address`, `emp_city`, `emp_state`, `emp_zipcode`) VALUES
(1, 'Tom', '9982902175', 'tom@g.com', '2, Anbu Nagar', 'Dindigul', 'Tamilnadu', '624 222'),
(2, 'jerry', '8321920301', 'jerry@g.com', '1, Vel Nagar', 'Trichy', 'Tamilnadu', '620 021'),
(5, 'Kishore', '7689342091', 'kish@g.com', '2, Gandhi Nagar', 'Virudhunagar', 'Tamilnadu', '610098'),
(6, 'Kimiko', '8245691283', 'kim@g.com', '4, Anna Nagar', 'Kodaikanal', 'Tamilnadu', '624 421'),
(7, 'Mani', '9783520144', 'mani@g.com', '11, Ring road', 'Srirangam', 'Tamilnadu', '602 201'),
(10, 'Kimiko', '7329190490', 'kimiko235@g.com', '4, Near Kaasi Theatre', 'Chennai', 'Tamilnadu', '600 001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_info`
--
ALTER TABLE `emp_info`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_info`
--
ALTER TABLE `emp_info`
  MODIFY `emp_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
