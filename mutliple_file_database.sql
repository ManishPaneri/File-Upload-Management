-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 24, 2016 at 07:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mutliple_file_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `folder_database`
--

CREATE TABLE `folder_database` (
  `id` text NOT NULL,
  `file_name` text NOT NULL,
  `folder_name` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `folder_database`
--

INSERT INTO `folder_database` (`id`, `file_name`, `folder_name`, `type`) VALUES
('65', 'Hydrangeas.jpg', 'Destop', 'pic'),
('66', 'Koala.jpg', 'Destop', 'pic'),
('56', 'Jellyfish.jpg', 'Destop', 'pic');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
