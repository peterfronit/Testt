-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 10:04 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subscribe`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscriber_list`
--

CREATE TABLE `subscriber_list` (
  `id` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscriber_list`
--

INSERT INTO `subscriber_list` (`id`, `email`, `date`) VALUES
(8, 'john@outlook.com', '2021-09-22 22:09:56'),
(9, 'john@test.com', '2021-09-22 22:09:56'),
(10, 'test@gma.com', '2021-09-22 22:50:30'),
(11, 'test@gmail.com', '2021-09-22 23:17:05'),
(12, 'test@gmail.com', '2021-09-22 23:20:16'),
(13, 'test@gmail.com', '2021-09-22 23:51:01'),
(14, 'test@gmail.com', '2021-09-23 00:08:28'),
(15, 'test@gmail.com', '2021-09-23 00:11:09'),
(16, 'tamil@gmail.com', '2021-09-23 00:11:56'),
(17, 'arun@gmail.com', '2021-09-23 00:12:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscriber_list`
--
ALTER TABLE `subscriber_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscriber_list`
--
ALTER TABLE `subscriber_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
