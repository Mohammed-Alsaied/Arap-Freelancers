-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 11:22 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `f_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `description`, `f_id`) VALUES
(92, 'JS - PHP - Laravel ', 213),
(93, 'JS - C++ - Nodejs', 214);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `job` varchar(100) NOT NULL,
  `salary` int(11) NOT NULL,
  `commesion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `job`, `salary`, `commesion`) VALUES
(1, 'Ahmed', 'Developer', 5000, NULL),
(2, 'Ali', 'Designer', 4000, 100),
(3, 'Sara', 'Developer', 5500, 150),
(4, 'Tamer', 'IT', 3500, NULL),
(5, 'Morad', 'IT', 4000, NULL),
(6, 'Maged', 'Developer', 7000, NULL),
(7, 'Samir', 'Designer', 4500, 90);

-- --------------------------------------------------------

--
-- Table structure for table `freelanccers`
--

CREATE TABLE `freelanccers` (
  `f_id` int(3) NOT NULL,
  `f_name` varchar(55) NOT NULL,
  `f_phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelanccers`
--

INSERT INTO `freelanccers` (`f_id`, `f_name`, `f_phone`, `email`, `password`, `photo`) VALUES
(213, 'Mohamed Alsaied', '0123654', 'mohamed.saied.civil@gmail.com', '123', '1.png'),
(214, 'Sara Mohamed', '159741', 'sara@gmail.com', '963', 'person.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `fristname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(55) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `role` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fristname`, `lastname`, `user_name`, `email`, `user_pass`, `role`) VALUES
(1, 'Mohamed', 'Alsaied', 'mohamed1998', 'mohamed.saied.civil@gmail.com', '0123', 1),
(3, 'Omar', 'Alsaied', 'mostafa2003', 'omar@gmail.com', '123', 2),
(4, 'Yousif', 'Alsaied', 'omar2001', 'yousif@gmail.com', '147', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_id` (`f_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelanccers`
--
ALTER TABLE `freelanccers`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `freelanccers`
--
ALTER TABLE `freelanccers`
  MODIFY `f_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `details`
--
ALTER TABLE `details`
  ADD CONSTRAINT `details_ibfk_1` FOREIGN KEY (`f_id`) REFERENCES `freelanccers` (`f_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
