-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 07:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `email`, `fullname`) VALUES
(1, 'ahmed', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'ahmed@mgail.com', 'Ahmed Elsayed'),
(3, 'faress', '6eeafaef013319822a1f30407a5353f778b59790', 'fares@gmail.com', 'fares Mohammed'),
(5, 'mohammed', '6eeafaef013319822a1f30407a5353f778b59790', 'ahmed@gmail.com', 'mohammed Elsayed'),
(6, 'mohammedelsayed', '9125e980fb0cb8c8cccc742bd1471e8b3137f9e2', 'ahmed@gmal.com', 'ahmed elsayed '),
(7, 'ahmedelsayed', '3c25924c1b82ff8250e190cf443894bef92c649a', 'mohammed@gmail.com', 'abdellatif '),
(14, 'ahmedsdf ', 'c72633d3afa5f154ee33fca3c64a78014724efe4', 'ahmed@gmiail.com', 'AhmedElsayed'),
(15, 'ahmed_elsayed', 'bacfd42c1bd5db2981ddd2531b8db086d7fa5ec6', 'ahmed@gmial.com', 'full Name');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_image` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_image`, `image`, `type`) VALUES
(6, '868149146212fast.png', 0),
(8, '377956fast.png', 0),
(14, '156752fast.png', 0),
(15, '2963571.mp4', 1),
(16, '732516fast.png', 0),
(17, '156911.mp4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_image`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
