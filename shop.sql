-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 07, 2017 at 03:57 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `sales_item`
--

DROP TABLE IF EXISTS `sales_item`;
CREATE TABLE IF NOT EXISTS `sales_item` (
  `item_id` varchar(20) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `colour` varchar(20) NOT NULL,
  `in_stock` int(5) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_item`
--

INSERT INTO `sales_item` (`item_id`, `item_name`, `category`, `price`, `colour`, `in_stock`, `description`, `image`) VALUES
('dk_001', 'Acer Aspire AIO Touch Desktop', 'desktop', '102702.65', 'black', 1, 'th Generation Intel Core i5-7400T Processor (Up to 3.0GHz)\r\n23.8\" Full HD Widescreen IPS LED Back-lit Touch Screen Display (1920 x 1080)\r\n12GB DDR4 Memory, 1TB 5400RPM Hard Drive. Processor Core : Quad-core (4 core) Wireless LAN Standard : IEEE 802.11ac\r\n802.11ac Wi-Fi, Wireless Keyboard & Mouse\r\nWindows 10 Home', 'images/sales/dk_001');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'kasun', '123', 'kasunprageethdissanayake@gmail.com'),
(2, 'KasunDissanayake', '1234567', 'wasuradananjith@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
