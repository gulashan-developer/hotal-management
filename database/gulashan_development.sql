-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 02:53 PM
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
-- Database: `gulashan_development`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'Ramu', 'ram@gmail.com', 'i am ramu', 'please contact me'),
(2, 'Ramu', 'ram@gmail.com', 'i am ramu', 'please contact me'),
(3, 'Suraj', 'suraj@gmail.com', 'i am suraj', 'this is message'),
(4, 'Sandeep', 'sandeep@gmail.com', 'information', 'i am sandeep');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mob_num` bigint(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `pic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `email_id`, `mob_num`, `pass`, `pic`) VALUES
(3, 'vishal', 'vishal@gmail.com', 9876543213, '123', '882229.jpg'),
(4, 'vinod', 'vinod@gmail.com', 9876543213, '123', '547212.jpg'),
(5, 'vinod', 'vinod@gmail.com', 9876543213, '123', '775192.jpg'),
(6, 'vinod', 'vinod@gmail.com', 9876543213, '123', '526618.jpg'),
(7, 'vinod', 'vinod@gmail.com', 9876543213, '123', '909097.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `ser_title` varchar(100) NOT NULL,
  `ser_desc` text NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `ser_title`, `ser_desc`, `pic`) VALUES
(4, 'Restaurant & Bar', 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', '609541.jpg'),
(5, 'Luxurious Rooms', 'Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater', '170760.jpg'),
(6, 'Banquet', 'Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.', '240122.jpg'),
(7, 'Wi-Fi Internet', 'Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.', '240122.jpg'),
(8, '24/7 Service', 'Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.', '240122.jpg'),
(9, 'Room Service', 'Morbi vitae tortor tempus, placerat leo et, suscipit lectus. Phasellus ut euismod massa, eu eleifend ipsum.', '240122.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE `sign_up` (
  `id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mob_no` bigint(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL DEFAULT 'user',
  `pic` varchar(30) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`id`, `f_name`, `email_id`, `mob_no`, `pass`, `type`, `pic`, `status`) VALUES
(1, 'Gulashan Kumar', 'gulashan@gmail.com', 9506154074, '1234', 'admin', '993859.jpg', 1),
(2, 'Rajeev Kumar', 'rajeevdls@gamil.com', 9876543213, '123', 'user', '608143.jpg', 0),
(3, 'Satish', 'satish@gmail.com', 9369046283, '123', 'user', '585821.jpg', 0),
(4, 'Sachin', 'sachin@gmail.com', 9369046288, 'sachin', 'user', '869832.jpg', 0),
(5, 'Manish', 'manish@gmail.com', 9562548154, '123', 'user', '993859.jpg', 0),
(6, 'gulshan kumar', 'gulshan222125@gmail.com', 9876543211, '123', 'user', '170760.jpg', 0),
(9, 'Naresh', 'naresh@gmail.com', 9506154076, '123', 'user', '152508.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
