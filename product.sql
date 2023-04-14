-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 08:25 AM
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
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `productname` varchar(50) NOT NULL,
  `uom` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `bbd` date NOT NULL,
  `cost` int(50) NOT NULL,
  `image` text NOT NULL,
  `id` int(50) NOT NULL,
  `totalcost` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`productname`, `uom`, `quantity`, `bbd`, `cost`, `image`, `id`, `totalcost`) VALUES
('sa', 'dsa', 12, '2023-04-06', 12, 'C:fakepathcustom-2.jpg', 16, 144),
('sample', 'kilo', 20, '2023-04-14', 30, 'C:fakepathlight violet.jpg', 18, 600),
('dsadada', 'sa', 23, '2023-04-11', 3, 'C:fakepathlight violet.jpg', 20, 69),
('dsa', '110', 10, '2023-04-13', 10, 'C:fakepathlight violet.jpg', 21, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
