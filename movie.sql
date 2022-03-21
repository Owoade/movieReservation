-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 09:22 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `Id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Moviename` varchar(200) NOT NULL,
  `Datemovie` varchar(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Location` varchar(15) NOT NULL,
  `seatpurchased` bigint(11) NOT NULL,
  `numseat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`Id`, `Name`, `Moviename`, `Datemovie`, `Email`, `Location`, `seatpurchased`, `numseat`) VALUES
(1, 'Popoola Rofih', 'Tom and Jer', '11/1/20', 'popoolarofi', 'Watts Cinema, L', 0, 0),
(2, 'John', 'The Dark an', '20/1/20', 'raphaelomo2', 'Aish Cinema, Ab', 0, 0),
(3, 'John', 'The Dark an', '20/1/20', 'raphaelomo2', 'Aish Cinema, Ab', 0, 0),
(4, 'rofih', 'No time to ', '15/3/20', 'raphaelomo2', 'Zahrr Cinema, I', 0, 0),
(5, 'rofih', 'Nightbooks', '12/3/20', 'bw090906299', 'Zahrr Cinema, I', 4000, 2),
(6, 'bode', 'Tom and Jer', '11/3/20', 'groupone@gm', 'Zahrr Cinema, I', 10000, 5),
(7, 'uswat', 'Nightbooks', '12/3/20', 'raphaelomo2', 'Zahrr Cinema, I', 2000, 1),
(8, 'Popoola Rofih', 'Tom and Jer', '3/1/202', 'poolarofih@', 'Zahrr Cinema, I', 8800, 4),
(9, 'Adewale David', 'Black Adam', '12/3/2022 ', 'adewaledavid@gmail.c', 'Cee Cinema, Por', 5000, 2),
(10, 'Adewale David', 'Black Adam', '12/3/2022 ', 'adewaledavid@gmail.c', 'Cee Cinema, Por', 5000, 2);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Food` varchar(30) NOT NULL,
  `Drink` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Id`, `Name`, `Food`, `Drink`) VALUES
(3, 'Adeyemi oyinda', 'Pop-corn #1,000', 'Pepsi');

-- --------------------------------------------------------

--
-- Table structure for table `ilorin`
--

CREATE TABLE `ilorin` (
  `Id` int(11) NOT NULL,
  `user_hash` varchar(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `time` varchar(50) NOT NULL,
  `Date` varchar(10) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `Dateweek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ilorin`
--

INSERT INTO `ilorin` (`Id`, `user_hash`, `Name`, `Title`, `Phone`, `time`, `Date`, `seat`, `Dateweek`) VALUES
(1, '', 'sanni uswat', 'Bad Boys for Life', '09068095424', '12am - 2pm', '2022-03-09', '2', 'Wednesday'),
(2, '', 'Olamide Omo ope', 'Avengers', '08034351010', '9am - 11am', '2022-03-14', '5', 'Monday'),
(3, '', 'Olamide Omo ope', 'My Spy', '08034351010', '7pm - 9pm', '2022-03-01', '7', 'Monday'),
(4, '', 'MORICK', 'Scoob', '07063785030', '12am - 2pm', '2022-12-05', '5', 'Sunday'),
(5, '837ec5754f503cfaaee0929fd48974e7', 'MORICK', 'Avengers', '07063785030', '9am - 11am', '2022-03-15', '3', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `lagos`
--

CREATE TABLE `lagos` (
  `Id` int(11) NOT NULL,
  `user_hash` varchar(200) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  `seat` varchar(10) NOT NULL,
  `Dateweek` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lagos`
--

INSERT INTO `lagos` (`Id`, `user_hash`, `Name`, `Title`, `Date`, `Phone`, `time`, `seat`, `Dateweek`) VALUES
(1, NULL, 'sanni uswat', 'Scoob', '2022-03-13', '09068095424', '12am - 2pm', '2', 'Sunday'),
(2, NULL, 'MORICK', 'Avengers', '2022-03-15', '07063785030', '9am - 11am', '2', 'Monday'),
(3, '837ec5754f503cfaaee0929fd48974e7', 'MORICK', 'Mulan', '2022-03-15', '07063785030', '9am - 11am', '5', 'Thursday'),
(4, '837ec5754f503cfaaee0929fd48974e7', 'fulani', 'Bad Boys for Life', '2022-03-01', '08034351010', '7pm - 9pm', '5', 'Tuesday');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `Id` int(11) NOT NULL,
  `user_hash` varchar(200) DEFAULT NULL,
  `Name` varchar(200) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Dateweek` varchar(25) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `seat` varchar(20) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`Id`, `user_hash`, `Name`, `Title`, `Date`, `Dateweek`, `Phone`, `seat`, `time`) VALUES
(1, NULL, 'Adeyemi oyinda', 'FrozenII', '2022-03-08', 'Tuesday', '08034351010', '50', '12am - 2pm'),
(2, NULL, 'sanni uswat', 'Joker', '2022-03-01', 'Tuesday', '09068095424', '2', '9am - 11am'),
(3, NULL, 'sanni uswat', 'Bad Boys for Life', '2022-03-07', 'Monday', '09068095424', '10', '9am - 11am'),
(4, NULL, 'MORICK', 'Bad Boys for Life', '2022-03-16', 'Monday', '07063785030', '5', '9am - 11am'),
(5, '837ec5754f503cfaaee0929fd48974e7', 'MORICK', 'Bad Boys for Life', '2022-03-16', 'Monday', '07063785030', '5', '9am - 11am'),
(6, '', 'fulani', 'Bad Boys for Life', '2022-03-02', 'Monday', '08034351010', '8', '3pm - 5pm'),
(7, '', 'fulani', 'Bad Boys for Life', '2022-03-02', 'Monday', '08034351010', '8', '3pm - 5pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ilorin`
--
ALTER TABLE `ilorin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lagos`
--
ALTER TABLE `lagos`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `Id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ilorin`
--
ALTER TABLE `ilorin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lagos`
--
ALTER TABLE `lagos`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
