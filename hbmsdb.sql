-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 08:21 AM
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
-- Database: `hbmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 5689784592, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2022-11-01 07:25:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

CREATE TABLE `tblbooking` (
  `ID` int(10) NOT NULL,
  `RoomId` int(5) DEFAULT NULL,
  `BookingNumber` varchar(120) DEFAULT NULL,
  `UserID` int(5) NOT NULL,
  `IDType` varchar(120) DEFAULT NULL,
  `Gender` varchar(50) DEFAULT NULL,
  `Address` mediumtext DEFAULT NULL,
  `CheckinDate` varchar(200) DEFAULT NULL,
  `CheckoutDate` varchar(200) DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`ID`, `RoomId`, `BookingNumber`, `UserID`, `IDType`, `Gender`, `Address`, `CheckinDate`, `CheckoutDate`, `BookingDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 2, '803934050', 1, 'Adhar Card', 'Male', 'New Delhi India', '2020-04-29', '2020-05-01', '2020-04-27 14:20:53', 'Cancelled', 'Cancelled', '2020-04-27 15:01:41'),
(2, 1, '132018073', 3, 'Voter Card', 'Male', 'B3253 New Delhi India', '2020-05-15', '2020-05-20', '2020-04-27 14:54:49', 'Booking Confirmed.', 'Approved', '2020-04-27 15:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `ID` int(10) NOT NULL,
  `CategoryName` varchar(120) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Price` int(5) NOT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`ID`, `CategoryName`, `Description`, `Price`, `Date`) VALUES
(1, 'Single Room', 'Only for one person', 800, '2020-02-28 06:43:55'),
(2, 'Double Room', 'For Two Person', 1100, '2020-02-28 06:44:55'),
(3, 'Triple Room', 'A room assigned to three people. May have two or more beds.', 1200, '2020-02-28 06:45:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `Name`, `MobileNumber`, `Email`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Himanshi', 9879797979, 'himanshi@gmail.com', 'Can I get some discount', '2020-03-01 13:49:20', 1),
(2, 'Rakesh Jha', 4564654654, 'jha@gmail.com', 'fhhsdfkjhf', '2020-03-01 13:50:07', 1),
(3, 'Harish', 9879746547, 'harish@gmail.com', 'yiuoic cbhjgdh jhgdhsadb ', '2020-03-01 13:50:46', 1),
(4, 'Mukesh', 5465446446, 'mukesh@gmail.com', 'jkhihihckjdshfhiuweayrufh', '2020-04-06 13:25:45', 1),
(5, 'Anuj', 2715351263, 'djshajdhas@gmail.com', 'Test Message', '2020-04-27 15:02:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfacility`
--

CREATE TABLE `tblfacility` (
  `ID` int(10) NOT NULL,
  `FacilityTitle` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfacility`
--

INSERT INTO `tblfacility` (`ID`, `FacilityTitle`, `Description`, `Image`, `CreationDate`) VALUES
(1, '24-Hour room service', '24-Hour room service available', 'b9fb9d37bdf15a699bc071ce49baea531582890659.jpg', '2020-02-28 11:50:59'),
(2, 'Free wireless internet access', 'Free wireless internet access available in room restro area', '7fdc1a630c238af0815181f9faa190f51582890845.jpg', '2020-02-28 11:54:05'),
(3, 'Laundry service', 'Free Laundry service available for a customer who book queen and king size room', '3c7baecb174a0cbcc64507e9c3308c4b1582890987.jpg', '2020-02-28 11:56:27'),
(4, 'Tour & excursions', 'vehicle are available for tour and travels', '1e6ae4ada992769567b71815f124fac51582891174.jpg', '2020-02-28 11:59:34'),
(5, 'Airport transfers', 'Airport transfers facility available on demand', 'c9e82378a39eec108727a123b09056651582891272.jpg', '2020-02-28 12:01:12'),
(6, 'Babysitting on request', 'Babysitting on request', 'c26be60cfd1ba40772b5ac48b95ab19b1582891331.png', '2020-02-28 12:02:11'),
(8, 'Meeting facilities', 'Meeting facilities available for company person', 'efc1a80c391be252d7d777a437f868701582891713.jpg', '2020-02-28 12:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(120) DEFAULT NULL,
  `PageTitle` varchar(200) DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', 'We have 72 comfortably equipped rooms, including two suites: The President Suite and the Ambassador Suite, with over one hundred metres of surface area, which are sure to awe even the most demanding Guests. We offer 7 rooms, where we have been preparing family and business meetings already for 15 years.', NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', 'D-204, Hole Town South West,Delhi-110096,India', 'info@gmail.com', 8529631236, '2020-02-29 14:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblroom`
--

CREATE TABLE `tblroom` (
  `ID` int(10) NOT NULL,
  `RoomType` int(10) DEFAULT NULL,
  `RoomName` varchar(200) DEFAULT NULL,
  `MaxAdult` int(5) DEFAULT NULL,
  `MaxChild` int(5) DEFAULT NULL,
  `RoomDesc` mediumtext DEFAULT NULL,
  `NoofBed` int(5) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `RoomFacility` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblroom`
--

INSERT INTO `tblroom` (`ID`, `RoomType`, `RoomName`, `MaxAdult`, `MaxChild`, `RoomDesc`, `NoofBed`, `Image`, `RoomFacility`, `CreationDate`) VALUES
(1, 2, 'Standard Room', 2, 1, 'A standard hotel room is an elongated hotel room designed for two people, though some standard doubles can accommodate up to four. The average room size (19.5′ X 12′) with attached toilet & bath rooms (6.5′ X 7.5′) that offers hot & cold running water in the air conditioned rooms,', 1, 'd6f80a07a25a45049b5a94023a06b6f81667976027.jpg', 'Meeting facilities', '2022-10-28 11:33:14'),
(2, 2, 'Villa', 10, 5, 'Located in the hills above Nice, in a secure gated residence community, this luxurious villa is the perfect place for a family vacation, for up to 10 persons. With 4-5 air-conditioned bedrooms, fully equipped kitchen, HD home theater, large garden, private pool and spa/jacuzzi, terraces, and everything you will need or want for a pleasant stay among family and friends. Great location, near from the center of Nice,', 4, '2d1e3bd91efcd39adf1c5c6c26f86c6d1667976869jpeg', '24-Hour room service,Free wireless internet acces', '2022-10-28 11:35:47'),
(3, 3, 'Chalet', 4, 2, 'The car parking and the Wi-Fi are always free, so you can stay in touch and come and go as you please. Conveniently situated in the Ambalangoda, this property puts you close to attractions and interesting dining options.', 3, '82c181f8b482b246443e77c47fcd68881667977281.jpg', '24-Hour room service,Free wireless internet access,Laundry service,Babysitting on request,24-Hour doctor on call,Meeting facilities', '2022-10-28 11:43:58'),
(8, 1, 'Single Room', 1, 1, 'This room is located on the top floor of the hotel and has hot / cold air conditioned, a furnished balcony with sun loungers with swimming pool or mountain views and free WI FI.', 1, 'feaddb4d80eff9f8042834be5eb4eaf71667977818.jpg', 'Laundry service', '2022-11-09 07:10:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FullName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(4, 'K.G.R.S.M.Weerasinghe', 766007089, 'manuw2819@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2022-11-09 07:19:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbooking`
--
ALTER TABLE `tblbooking`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfacility`
--
ALTER TABLE `tblfacility`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblroom`
--
ALTER TABLE `tblroom`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `RoomType` (`RoomType`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooking`
--
ALTER TABLE `tblbooking`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblfacility`
--
ALTER TABLE `tblfacility`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblroom`
--
ALTER TABLE `tblroom`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
