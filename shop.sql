-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2016 at 06:42 PM
-- Server version: 10.1.9-MariaDB-log
-- PHP Version: 7.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `title` text NOT NULL,
  `price` float NOT NULL,
  `stockQuantity` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `description`, `title`, `price`, `stockQuantity`, `picture`) VALUES
(17, '', 'elizabeth swanns gold medalion', 100000, 100, 'medallion.jpg'),
(18, ' with this map immortallity awaits you ', 'map to the fountain of youth', 1000, 100, 'map.jpg'),
(20, 'black pearl ship model', 'black pearl', 100, 10, 'ship.jpg'),
(21, 'chest that holds a heart of a dead man', 'dead mens chest', 1000, 100, 'chest.jpg'),
(23, 'compass points to the destination of the carriers most wanted item', 'Jack sparrow&#39;s compass', 100, 100, 'compass.jpg'),
(24, 'jar of dirt pendant, filled with dirt ', 'jar of dirt', 50, 1000, 'jar.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
