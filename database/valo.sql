-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 25, 2022 at 07:52 AM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u937952019_tucyberweekend`
--

-- --------------------------------------------------------

--
-- Table structure for table `valo`
--

CREATE TABLE `valo` (
  `sno` int(11) NOT NULL,
  `teamname` text NOT NULL,
  `temail` varchar(100) NOT NULL,
  `tname` text NOT NULL,
  `trollno` varchar(100) NOT NULL,
  `tdept` varchar(100) NOT NULL,
  `m1name` text NOT NULL,
  `m1rollno` varchar(100) NOT NULL,
  `m2name` text NOT NULL,
  `m2rollno` varchar(100) NOT NULL,
  `m3name` text NOT NULL,
  `m3rollno` varchar(100) NOT NULL,
  `m4name` text NOT NULL,
  `m4rollno` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `valo`
--

INSERT INTO `valo` (`sno`, `teamname`, `temail`, `tname`, `trollno`, `tdept`, `m1name`, `m1rollno`, `m2name`, `m2rollno`, `m3name`, `m3rollno`, `m4name`, `m4rollno`, `timestamp`) VALUES

--
-- Indexes for dumped tables
--

--
-- Indexes for table `valo`
--
ALTER TABLE `valo`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `valo`
--
ALTER TABLE `valo`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
