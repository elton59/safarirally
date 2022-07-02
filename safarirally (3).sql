-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 09:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safarirally`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'alex@safarirally.co.ke', 'alex123');

-- --------------------------------------------------------

--
-- Table structure for table `award`
--

CREATE TABLE `award` (
  `id` int(50) NOT NULL,
  `awardid` varchar(50) NOT NULL,
  `year` year(4) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `teamtagnumber` varchar(50) NOT NULL,
  `drivername` varchar(50) NOT NULL DEFAULT 'yet to be assigned',
  `codrivername` varchar(50) NOT NULL DEFAULT 'yet to be assigned',
  `Category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `award`
--

INSERT INTO `award` (`id`, `awardid`, `year`, `eventname`, `teamtagnumber`, `drivername`, `codrivername`, `Category`) VALUES
(1, 'ee', 0000, 'fd', '66', 'yet to be assigned', 'yet to be assigned', '11234');

-- --------------------------------------------------------

--
-- Table structure for table `codriverdetails`
--

CREATE TABLE `codriverdetails` (
  `id` int(11) NOT NULL,
  `codriverid` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `teamid` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `insurancenumber` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `driverdetails`
--

CREATE TABLE `driverdetails` (
  `id` int(11) NOT NULL,
  `driverid` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `lincensenumber` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `codriverid` varchar(50) NOT NULL,
  `sponsorid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driverdetails`
--

INSERT INTO `driverdetails` (`id`, `driverid`, `fullname`, `lincensenumber`, `nationality`, `codriverid`, `sponsorid`, `email`, `password`, `status`) VALUES
(1, 'driver045', 'jonte mania', 'sdf3', 'egypt', 'erico mania', 'KCB', 'jontemania@safarirally.com', '1234', 'approved'),
(2, 'driver045', 'jonte mania', 'sdf3', 'egypt', 'erico mania', 'KCB', 'jontekkmania@safarirally.com', '666', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `eventdetail`
--

CREATE TABLE `eventdetail` (
  `id` int(50) NOT NULL,
  `eventid` varchar(50) NOT NULL,
  `eventname` varchar(50) NOT NULL,
  `sponsor` varchar(50) NOT NULL,
  `organizer` varchar(50) NOT NULL,
  `eventdate` date NOT NULL,
  `venue` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `numberofcompetitors` varchar(50) NOT NULL,
  `teamtagnumber` varchar(50) NOT NULL,
  `scheduleid` varchar(50) NOT NULL,
  `awardid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventdetail`
--

INSERT INTO `eventdetail` (`id`, `eventid`, `eventname`, `sponsor`, `organizer`, `eventdate`, `venue`, `duration`, `numberofcompetitors`, `teamtagnumber`, `scheduleid`, `awardid`) VALUES
(1, 'safari001', 'naivasha R1', 'KCB', 'KCB', '2021-07-23', 'testvebyyr', '2:00:00', '77', '23', 'r', 'l');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` enum('pending','read') NOT NULL DEFAULT 'pending',
  `message` varchar(50) NOT NULL,
  `reply` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `sender`, `email`, `status`, `message`, `reply`, `date`) VALUES
(1, '', 'jontemania@safarirally.com', 'read', 'call boss', 'hi future me', '2021-07-23 11:56:20'),
(2, '', 'alex@safarirally.co.ke', 'read', 'my message', 'hi future me', '2021-08-05 10:27:37'),
(3, '', 'alex@safarirally.co.ke', 'pending', 'me to me:haha', '', '2021-08-05 10:24:22'),
(4, 'alex@safarirally.co.ke', 'alex@safarirally.co.ke', 'read', 'me to me:haha', 'ok wait why am i texting my self', '2021-08-05 10:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','rejected','approved') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `sender`, `email`, `password`, `status`) VALUES
(2, '', 'kioko@safarirally.co.ke', '4223', 'approved'),
(3, '', 'financegut@gmail.com', '1234', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logistics`
--

INSERT INTO `logistics` (`id`, `email`, `password`, `status`) VALUES
(2, 'jay@gsafarirally.co.ke', 'jay1121', 'approved'),
(3, 'dfkbj@ssafari.co.ke', '324', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `mediadetails`
--

CREATE TABLE `mediadetails` (
  `id` int(50) NOT NULL,
  `mediaid` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `paymentid` varchar(50) NOT NULL DEFAULT 'null',
  `status` enum('pending','approved','rejected') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mediadetails`
--

INSERT INTO `mediadetails` (`id`, `mediaid`, `fullname`, `category`, `email`, `password`, `contact`, `paymentid`, `status`) VALUES
(1, 'citizen', 'Joyce Kangana', 'private', 'joyce@citizen.co.ke', '12345', '+2543345697', 'null', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `id` int(11) NOT NULL,
  `transactiontid` varchar(50) NOT NULL,
  `accountname` varchar(50) NOT NULL,
  `amountpaid` varchar(50) NOT NULL,
  `usercategory` varchar(50) NOT NULL,
  `paymentfor` varchar(50) NOT NULL,
  `paymentdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`id`, `transactiontid`, `accountname`, `amountpaid`, `usercategory`, `paymentfor`, `paymentdate`, `status`) VALUES
(1, 'KW3AN1N1KESHO', 'jontemania@safarirally.com', '123456', 'driver', 'accomodation', '2021-07-22 11:29:15', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `racingcardetails`
--

CREATE TABLE `racingcardetails` (
  `id` int(11) NOT NULL,
  `tagnumber` varchar(50) NOT NULL,
  `registrationnumber` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `yearofmanufucture` year(4) NOT NULL,
  `enginecapacity` varchar(50) NOT NULL,
  `tonage` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `serviceid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `schedueid` varchar(50) NOT NULL,
  `racedate` date NOT NULL,
  `numberofparticipants` varchar(50) NOT NULL,
  `teamtagnumber` varchar(50) NOT NULL,
  `stage` varchar(50) NOT NULL,
  `startingpoint` varchar(50) NOT NULL,
  `fuellingpoint` varchar(50) NOT NULL,
  `endingpoint` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `schedueid`, `racedate`, `numberofparticipants`, `teamtagnumber`, `stage`, `startingpoint`, `fuellingpoint`, `endingpoint`) VALUES
(2, 'sal', '2021-07-19', '20', '23', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(50) NOT NULL,
  `serviceid` varchar(50) NOT NULL,
  `provider` varchar(50) NOT NULL,
  `racecarregistrationnumber` varchar(50) NOT NULL,
  `teamtagnumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `serviceid`, `provider`, `racecarregistrationnumber`, `teamtagnumber`) VALUES
(1, 'esir', 'ee', 'ee', 'ee');

-- --------------------------------------------------------

--
-- Table structure for table `spectatordetails`
--

CREATE TABLE `spectatordetails` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spectatordetails`
--

INSERT INTO `spectatordetails` (`id`, `name`, `nationality`, `email`, `gender`, `password`, `status`) VALUES
(1, 'kwaninikeso', 'kenya', 'kwano@safarirally.com', 'male', '123456', 'approved'),
(2, 'ew ', 'egypt', 'test@ai.com', 'male', '789', 'rejected');

-- --------------------------------------------------------

--
-- Table structure for table `sponsordetails`
--

CREATE TABLE `sponsordetails` (
  `id` int(11) NOT NULL,
  `sponsorid` varchar(50) NOT NULL,
  `sponsorname` varchar(50) NOT NULL,
  `teamid` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` enum('pending','approved','rejected','') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsordetails`
--

INSERT INTO `sponsordetails` (`id`, `sponsorid`, `sponsorname`, `teamid`, `email`, `password`, `status`) VALUES
(1, 'KCB', 'KCB', 'Mania team', 'erico@kcb.com', 'ericko332', 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `standings`
--

CREATE TABLE `standings` (
  `id` int(50) NOT NULL,
  `standingid` varchar(50) NOT NULL,
  `standingdate` date NOT NULL,
  `tagnumber` varchar(50) NOT NULL,
  `driverid` varchar(50) NOT NULL,
  `drivername` varchar(50) NOT NULL,
  `codrivername` varchar(50) NOT NULL,
  `completiontime` varchar(50) NOT NULL,
  `eventid` varchar(50) NOT NULL,
  `penalty` bigint(50) NOT NULL,
  `reward` bigint(50) NOT NULL,
  `points` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(50) NOT NULL,
  `teamid` varchar(50) NOT NULL,
  `tagnumber` varchar(50) NOT NULL DEFAULT 'yet to be issued',
  `drivername` varchar(50) NOT NULL,
  `codrivername` varchar(50) NOT NULL,
  `racecarregistrationnumber` varchar(50) NOT NULL,
  `paymentid` varchar(50) NOT NULL DEFAULT 'yet to be issued'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `teamid`, `tagnumber`, `drivername`, `codrivername`, `racecarregistrationnumber`, `paymentid`) VALUES
(1, 'themmanias', '33', 'jontemania', 'ericomania', '21AQKMFKGouohza', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `award`
--
ALTER TABLE `award`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `codriverdetails`
--
ALTER TABLE `codriverdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `driverdetails`
--
ALTER TABLE `driverdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `eventdetail`
--
ALTER TABLE `eventdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mediadetails`
--
ALTER TABLE `mediadetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `racingcardetails`
--
ALTER TABLE `racingcardetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `spectatordetails`
--
ALTER TABLE `spectatordetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sponsordetails`
--
ALTER TABLE `sponsordetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `standings`
--
ALTER TABLE `standings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `award`
--
ALTER TABLE `award`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `codriverdetails`
--
ALTER TABLE `codriverdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `driverdetails`
--
ALTER TABLE `driverdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventdetail`
--
ALTER TABLE `eventdetail`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logistics`
--
ALTER TABLE `logistics`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mediadetails`
--
ALTER TABLE `mediadetails`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `racingcardetails`
--
ALTER TABLE `racingcardetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `spectatordetails`
--
ALTER TABLE `spectatordetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsordetails`
--
ALTER TABLE `sponsordetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
