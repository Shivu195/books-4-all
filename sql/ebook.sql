-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2014 at 09:09 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `title` varchar(30) NOT NULL,
  `author` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `price` int(10) NOT NULL,
  `pages` int(10) NOT NULL,
  `isbn` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`title`, `author`, `category`, `price`, `pages`, `isbn`, `description`, `image`) VALUES
('abc', 'jfjfj', 'chemical', 100, 34, 'hfhfhfhfhfhfhf', 'dhdhdjdjdkdknxckxkmdmk', 'images/image_01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_username` varchar(30) NOT NULL,
  `customer_password` varchar(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `customer_mobile` bigint(10) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `customer_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_username`, `customer_password`, `customer_name`, `customer_mobile`, `customer_email`, `customer_address`) VALUES
(742890, 'shivu', 'blah', 'Shivaranjini', 9987645678, 'shivu@gmail.com', 'F-919\r\nsuu ki block\r\n643234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
 ADD PRIMARY KEY (`customer_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
