-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2022 at 02:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
('', 'admin', 'cse10');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` varchar(20) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `name`, `email`, `phone`, `message`) VALUES
('5cv436ysj7', 'Zxeal', 'Aj', 'officialzxealaj008@gmail.com', '1237881910', 'hello there \r\nits just a dump message'),
('6331a0662acae', 'Mani', 'Bomzan', 'test@test.com', '464573473', ' Hello its just a test message');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `donationid` varchar(20) NOT NULL,
  `dname` varchar(20) NOT NULL,
  `pname` varchar(20) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`donationid`, `dname`, `pname`, `bgroup`, `date`) VALUES
('5c9ce0b1d1e43', 'Kunal', 'Akash', 'A+', '2022-09-20'),
('5c9f3c40ae7ec', 'Anant', 'Shobek', 'B+', '2022-09-22');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `bgroup` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `number` varchar(12) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `bgroup`, `gender`, `age`, `weight`, `date`, `number`, `address`) VALUES
('5c9dff4e2b7e5', 'Kunal', 'A+', 'Male', 21, 82, '2022-06-22', '9876543210', 'Salbari'),
('5c9dff98d3dff', 'Shobek', 'A+', 'Male', 22, 65, '2022-06-22', '9786352410', 'Seevok More'),
('5c9e0b6d3caaa', 'Akash', 'B+', 'Male', 20, 58, '2022-06-24', '9768543210', 'Salugara'),
('5c9e0c2f7cdd0', 'Anant', 'B+', 'Male', 20, 75, '2022-06-24', '8944809108', 'Salbari'),
('5c9e1637cb0b6', 'Sayoni', 'O+', 'Female', 19, 48, '2022-06-30', '9988866345', 'Coutmore'),
('5c9e24cecca5a', 'Simran', 'AB+', 'Female', 20, 45, '2022-06-30', '9786352401', 'Dagapur'),
('63343965973ac', 'Ashutosh', 'O+', 'Male', 21, 70, '2022-06-30', '6789345321', 'Methibari'),
('63343c528afea', 'Prachi', 'AB+', 'Female', 21, 50, '2022-06-30', '9744653421', 'Courtmore');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` varchar(20) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `latitude`, `longitude`) VALUES
('5c9dff4e2b7e5', 26.76934960750626, 88.37619066238403),
('5c9dff98d3dff', 26.76934960750626, 88.37619066238403),
('5c9e0b6d3caaa', 26.76934960750626, 88.37619066238403),
('5c9e0c2f7cdd0', 26.76934960750626, 88.37619066238403),
('5c9e1637cb0b6', 26.76934960750626, 88.37619066238403),
('5c9e24cecca5a', 26.76934960750626, 88.37619066238403),
('63343965973ac', 26.76934960750626, 88.37619066238403),
('63343c528afea', 26.76934960750626, 88.37619066238403);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bgroup` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(5) NOT NULL,
  `weight` float NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `name`, `bgroup`, `gender`, `age`, `weight`, `number`, `address`) VALUES
('5c9e199469ee5', 'Amesh', 'O+', 'Male', 22, 65, '6846271923', 'Courtmore'),
('5c9f919f9f1fc', 'Subecha', 'B+', 'Female', 21, 50, '9679813632', 'Courtmore'),
('5c9f91fd7b75a', 'Nikki', 'B+', 'Female', 21, 52, '9686774543', 'Darjeeling more'),
('5c9f92e49b9d8', 'Julian', 'A+', 'Male', 18, 60, '6544328910', 'Salbari');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uname`, `pass`) VALUES
('', 'user', 'donation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donation`
--
ALTER TABLE `donation`
  ADD PRIMARY KEY (`donationid`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
