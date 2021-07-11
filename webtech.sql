-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 10:57 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `username`, `Gender`, `Phone`, `Address`, `email`, `DOB`, `url`) VALUES
('Mehedi Hassan ', 'mehedimisson', 'male', '01521441883', '1137 Gulshan, Dhaka', 'missonplay@gmail.com', '1997-10-09', 'uploads/IMG_0084.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `Gender` varchar(15) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Address` varchar(40) NOT NULL,
  `email` varchar(25) NOT NULL,
  `DOB` date NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Name`, `username`, `Gender`, `Phone`, `Address`, `email`, `DOB`, `url`) VALUES
('Anwar Hassan', 'anwar21', 'male', '01341125468', '1137 Gulshan, Dhaka', 'aa@gmail.com', '2019-12-04', ''),
('Tanjimul Hassan', 'tanjimul', 'male', '01435125478', 'Badda,Dhaka', 'tanjimul@gmail.com', '1997-12-04', 'uploads/11tanjimul.PNG'),
('Sharaban Tohura Joly', 'Tohura28', 'female', '01911197712', '1137 Gulshan, Dhaka', 'tohura@gmail.com', '1988-08-04', 'uploads/unnamed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `status`) VALUES
('mehedimisson', '25d55ad283aa400af464c76d713c07ad', 1),
('Tohura28', '25d55ad283aa400af464c76d713c07ad', 0),
('tanjimul', '5e8667a439c68f5145dd2fcbecf02209', 0),
('anwar21', '25d55ad283aa400af464c76d713c07ad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(11) NOT NULL,
  `pid` int(20) NOT NULL,
  `cususername` varchar(25) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `pid`, `cususername`, `price`, `quantity`) VALUES
(5, 2, 'Tohura28', 222000, 3),
(7, 2, 'Tohura28', 2475000, 33),
(8, 2, 'tanjimul', 150000, 2),
(9, 6, 'tanjimul', 7800, 15),
(10, 7, 'tanjimul', 750000, 10),
(11, 7, 'tanjimul', 1125000, 15),
(12, 7, 'tanjimul', 300000, 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(20) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `pname`, `price`, `quantity`) VALUES
(2, 'iPhone 11', 75000, 10),
(3, 'rice', 500, 10),
(4, 'Lenovo ideapad 310', 55000, 25),
(5, 'Nokia 6.1', 12500, 25),
(6, 'Beef', 520, 35),
(7, 'Note 9', 75000, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
