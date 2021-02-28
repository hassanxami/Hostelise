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
-- Database: `hostel_manag`
--

-- --------------------------------------------------------

--
-- Table structure for table `addinfo`
--

CREATE TABLE `addinfo` (
  `id` int(11) NOT NULL,
  `hostel_name` varchar(50) NOT NULL,
  `no_rooms` varchar(100) NOT NULL,
  `hostel_area` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `hostel_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `addinfo`
--

INSERT INTO `addinfo` (`id`, `hostel_name`, `no_rooms`, `hostel_area`, `details`, `hostel_id`) VALUES
(9, 'House of Professional', '90', 'Lahore,Pakistan', 'the best in lahore', 121314),
(10, 'House of Professional', '44', 'cfbvgfb', 'cbgbfgbf', 12),
(12, 'mano', '00', 'awais', '000000', 90),
(13, 'qasim', '00000', 'karachi', 'best one', 90),
(14, 'Karachi Hotel', '100', 'New Karachi', 'The best in town.', 1122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addinfo`
--
ALTER TABLE `addinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addinfo`
--
ALTER TABLE `addinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
