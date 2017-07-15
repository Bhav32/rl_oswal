-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 05:32 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rl_oswal`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstName` varchar(200) NOT NULL,
  `lastName` varchar(200) NOT NULL,
  `userName` varchar(200) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstName`, `lastName`, `userName`, `email_id`, `password`, `contact`, `date_created`, `date_modified`) VALUES
(8, 'Bhavika', 'Jain', 'Bhavika', 'jain.bhavika32@gmail.com', '202cb962ac59075b964b07152d234b70', '2147483647', '2017-07-14 01:40:44', '2017-07-14 11:40:44'),
(11, 'Kritika', 'Saxena', 'Kritika', 'kritisaxena@gmail.com', '297fb098fc4cf6c47037c2adf8638cdc', '2147483647', '2017-07-14 01:51:29', '2017-07-14 11:51:29'),
(14, 'Mehak', 'Kaur', 'Mehak', 'kaurmehak@gmail.com', '16bf01e39fc993fa4fec2d79a52babb8', '2147483647', '2017-07-14 02:00:00', '2017-07-14 12:00:00'),
(15, 'example', 'eg', 'example', 'example@gmail.com', '7df065c23f49f57077f9113611d6d877', '2147483647', '2017-07-14 02:09:15', '2017-07-14 12:09:15'),
(17, 'Preeti', 'rana', 'Preeti', 'preetirana@gmail.com', '7a272b62640780e9a8d6dc932f702d97', '9802345908', '2017-07-14 03:45:47', '2017-07-14 13:45:48'),
(19, 'sourabh', 'Jain', 'sourabh', 'jain.sourabh690@gmail.com', 'd7f9d29e9f78b1c0e4196f29a02a1124', '9815177107', '2017-07-14 07:52:49', '2017-07-14 17:52:53'),
(24, 'Kriti', 'malik', 'Kriti', 'kriti@gmail.com', '25d55ad283aa400af464c76d713c07ad', '8437300872', '2017-07-14 08:07:17', '2017-07-14 18:07:17'),
(25, 'Mridul', 'kumar', 'Mridul', 'mridul@yahoo.com', 'b93d9c02c914ed367eb14d8730ba4ade', '8437300872', '2017-07-15 05:29:22', '2017-07-15 15:29:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
