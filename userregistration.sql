-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2021 at 08:46 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmedride`
--

CREATE TABLE `confirmedride` (
  `c_id` int(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `driver_email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `pickup` varchar(40) NOT NULL,
  `dropoff` varchar(40) NOT NULL,
  `vehicle` varchar(40) NOT NULL,
  `rseat` int(10) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `confirmedride`
--

INSERT INTO `confirmedride` (`c_id`, `email`, `driver_email`, `date`, `pickup`, `dropoff`, `vehicle`, `rseat`, `time`) VALUES
(21, 'test@gmail.com', '19dcs063@charusat.edu.in', '2021-05-09', 'Ankleshwar', 'Surat', 'Honda city', 1, '10:00:00'),
(46, 'modimihir.1021@gmail.com', 'hmkmodi@gmail.com', '2021-04-25', 'Ankleshwar', 'Bharuch', 'Honda city', 1, '17:00:00'),
(47, 'mihir@gmail.com', 'hmkmodi@gmail.com', '2021-04-25', 'Ankleshwar', 'Bharuch', 'Honda city', 1, '17:00:00'),
(49, 'test@gmail.com', 'modimihir.1021@gmail.com', '2021-04-25', 'Ankleshwar', 'Surat', 'Honda city', 1, '13:00:00'),
(50, 'test@gmail.com', 'modimihir.1021@gmail.com', '2021-05-30', 'Ankleshwar', 'Nadiad', 'Honda city', 1, '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(255) NOT NULL,
  `name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `num` int(10) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `address` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `gender`, `num`, `mail`, `address`) VALUES
(9, 'Mihir', 'M', 1029384756, 'mihir@gmail.com', 'Ank'),
(5, 'Mihir', 'M', 1234567890, 'modimihir.1021@gmail.com', 'Ankleshwar'),
(6, 'Mihir', 'M', 1234567890, '19dcs063@charusat.edu.in', 'Ank'),
(7, 'test', 'M', 1234567890, 'test@gmail.com', 'Ank'),
(8, 'modi', 'M', 2147483647, 'modi1021@gmail.com', 'Ankleshwar'),
(10, 'Hemik Modi', 'M', 1234567890, 'hmkmodi@gmail.com', 'Ankleshwar');

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `p_id` int(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `pickup` varchar(40) NOT NULL,
  `dropoff` varchar(40) NOT NULL,
  `vehicle` varchar(40) NOT NULL,
  `seat` int(10) NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider`
--

INSERT INTO `provider` (`p_id`, `email`, `date`, `pickup`, `dropoff`, `vehicle`, `seat`, `time`) VALUES
(10, 'modimihir.1021@gmail.com', '2021-05-30', 'Ankleshwar', 'Nadiad', 'Honda city', 1, '12:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`) VALUES
('mihir@gmail.com', '$2y$10$NnQFzeN6/kVyYcdmSoIV2usQe85FWRuMbilW29/zoj7ImIwRadwJC'),
('hmkmodi@gmail.com', '$2y$10$1aiqYfIjULCCFKUfWsL8L.ziw0kgweHFQY58NoO/hRhsGeMZnzw8G'),
('modimihir.1021@gmail.com', '$2y$10$mGYV5s77bwXzaNJFLE5Ho.KH8VObKxYe2kGZJ7KKZ1KOwRNCNvq1y'),
('19dcs063@charusat.edu.in', '$2y$10$55W8YZjASy5f/ZgskEn7IegcU7KvpJg3TcqrtJsvkUPzHO2L2.rTi'),
('test@gmail.com', '$2y$10$wqWWQ1Fx/mmKxw6In6OG9.YUsyP3CRMEogsqqHwkig59kX60EhV.C'),
('modi1021@gmail.com', '$2y$10$iUs3lne86muXXhG508.C3e6R4BCrL2z83ApEzBxtVU3/Yu4/Emp8q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmedride`
--
ALTER TABLE `confirmedride`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mail` (`mail`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`),
  ADD KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmedride`
--
ALTER TABLE `confirmedride`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `provider`
--
ALTER TABLE `provider`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
