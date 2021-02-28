-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 04:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `cnic` int(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` int(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `n_seat` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `f_name`, `l_name`, `cnic`, `city`, `address`, `email`, `date`, `mobile`, `n_seat`) VALUES
(0, 'dvvfvfvfffb', 'hgdsggfg', 445445445, 'gggg', 'gggg', 'ggg@ggg', 5, 8520852, 555),
(0, 'fgfg', 'dfcsda', 123423421, 'Lahore', 'ggggdfff', 'dgfgef@gddsc', 1999, 30000000, 3),
(0, 'Mahnoor', 'Butt', 0, 'karachi', 'township', 'manobutt3103@gmail.com', 2020, 300000000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `reemail` varchar(50) NOT NULL,
  `pass` int(11) NOT NULL,
  `repass` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `f_name`, `l_name`, `email`, `reemail`, `pass`, `repass`, `month`, `date`, `year`) VALUES
(0, 'Mahnoor', 'Butt', 'manobutt3103@gmail.com', 'manobutt3103@gmail.com', 0, 0, 3, 17, 1999),
(0, 'M', 'Butt', 'dgfgef@gddsc', 'dgfgef@gddsc', 0, 0, 9, 14, 2008),
(0, 'awais', 'arshad', 'awaisarshad842@gmail.com', 'awaisarshad842@gmail.com', 0, 0, 3, 17, 1999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `First` varchar(40) NOT NULL,
  `Last` varchar(40) NOT NULL,
  `CNIC` varchar(14) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `No of seats` int(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `DOB` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`First`, `Last`, `CNIC`, `address`, `email`, `mobile`, `No of seats`, `city`, `DOB`) VALUES
('Waleed', 'Abid', '37405-12345642', 'aksfafjalkjsakdsajldsajskld', 'waleedmain9@gmail.com', '123456789', 12, 'Rawalpindi', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
