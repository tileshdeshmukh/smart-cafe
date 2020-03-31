-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 08:37 PM
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
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `title` varchar(30) DEFAULT NULL,
  `discription` text NOT NULL,
  `additional` text NOT NULL,
  `category` text NOT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`title`, `discription`, `additional`, `category`, `price`, `image`) VALUES
('food', 'food is ossum', 'omg', 'Fast', 300, 'app.jpg'),
('Pizza', 'lovely food .....', 'Special', 'Fast', 500, 'pizza.jpg'),
('Burgger', 'ossum', 'lovely', 'Fast', 70, 'burgger.jpg'),
('Pastta', 'omg', 'yum....', 'Fast', 90, 'pasta.jpg'),
('Sandwich', 'sandwich', 'sandwich', 'Fast', 80, 'sandwich.jpg'),
('Cool Dring', 'cool....', 'very cool', 'cooldrink', 75, 'coold.jpg'),
('Maggi', 'maggi', 'maggi', 'Fast', 100, 'maggi.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
