-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 02:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fwmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 8989898989, 'admin@gmail.com', 'f925916e2754e5e03f75dd58a5733251', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `ID` int(10) NOT NULL,
  `StateID` int(10) DEFAULT NULL,
  `City` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`ID`, `StateID`, `City`, `CreationDate`) VALUES
(15, 11, 'Chennai', '2019-06-18 18:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Phone` bigint(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `EnquiryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `IsRead` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`ID`, `FirstName`, `LastName`, `Email`, `Phone`, `Message`, `EnquiryDate`, `IsRead`) VALUES
(1, 'Manu', 'Sharma', 'manu@gmail.com', 9879879879, 'Tell me fee of play school', '2021-11-01 04:53:55', 1),
(2, 'Anuj', 'Kumar', 'ak@gmail.com', 1234567890, 'test', '2021-11-09 17:42:29', 1),
(3, 'Devyansh', 'Rai', 'dev@gmail.com', 7977897978, 'yuiyuiyuiueyfiurbyv', '2021-12-08 12:02:22', NULL),
(4, 'Test', 'Tes', 'ddshg@gmail.com', 1234567789, 'dsafsd', '2022-01-23 06:34:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbldonor`
--

CREATE TABLE `tbldonor` (
  `ID` int(10) NOT NULL,
  `FullName` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbldonor`
--

INSERT INTO `tbldonor` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
(3, 'John Doe', 'johndoe@gmail.com', 1234567890, 'f925916e2754e5e03f75dd58a5733251', '2021-11-29 05:12:21'),
(7, 'Mainland China', 'mnchina@gmail.com', 8988712567, '801c4be2f391d662ae02510787469dc4', '2023-05-06 14:46:31'),
(8, 'Samco', 'smc@gmail.com', 8907683411, '41e3b75f7ab02719f0d47c7e314886a0', '2023-05-06 14:47:05'),
(9, 'CEG Hostel', 'ceghos@gmail.com', 9908723221, '62a083e0a3a02a84fa7f102ab741f353', '2023-05-06 14:47:37'),
(11, 'Mad Over Doughnuts', 'mod@gmail.com', 9088876543, '7da612c97fe645201451db5c7e9122a5', '2023-05-10 09:48:18'),
(22, 'Star Biriyani', 'starbir@gmail.com', 9089756784, '4d4c96630bdf16460341eb112babf7f8', '2023-05-10 10:55:55'),
(23, 'Buhari', 'buhari@gmail.com', 9900087666, '44356e89be775e55a3a5a0cf031fa6f5', '2023-05-28 18:00:34'),
(24, 'SSN Hostel', 'ssn@gmail.com', 89877650009, '8b51e41500e93e856084e0745f7a7679', '2023-05-29 04:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblfood`
--

CREATE TABLE `tblfood` (
  `ID` int(10) NOT NULL,
  `DonorID` int(10) DEFAULT NULL,
  `foodId` int(10) DEFAULT NULL,
  `FoodItems` mediumtext DEFAULT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `CityName` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `PickupDate` varchar(200) DEFAULT NULL,
  `PickupAddress` mediumtext DEFAULT NULL,
  `ContactPerson` varchar(200) DEFAULT NULL,
  `CPMobNumber` bigint(10) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfood`
--

INSERT INTO `tblfood` (`ID`, `DonorID`, `foodId`, `FoodItems`, `Status`, `CityName`, `Description`, `PickupDate`, `PickupAddress`, `ContactPerson`, `CPMobNumber`, `Image`, `CreationDate`, `UpdationDate`) VALUES
(5, 6, 780203826, 'Chicken Biriyani', 'Requested', 'Chennai', 'Fresh food, good quality', '2023-05-07', 'X 42, Annanagar', 'Raj Kumar', 909987767, NULL, '2023-05-07 14:03:54', '2023-05-09 13:28:28'),
(6, 8, 164440586, 'Fried Rice,Tandoori Chicken', 'Requested', 'Chennai', 'Tasty food.', '2023-05-07', 'J Block, Annanagar', 'Shanah', 7780987950, NULL, '2023-05-07 18:48:14', '2023-05-08 05:26:12'),
(7, 8, 851754301, 'Parotta,Chicken Curry', 'Requested', 'Chennai', 'Fresh food', '2023-05-08', '6th main road, 12th street, Mogappair', 'Rita', 8878909556, NULL, '2023-05-08 04:06:15', '2023-05-08 05:32:05'),
(8, 9, 719839901, 'Rice,Sambar', 'Requested', 'Chennai', 'Fresh food for 50 people', '2023-05-08', 'Sardar Patel Road, Guindy', 'XYZ', 9840182500, NULL, '2023-05-08 04:30:01', '2023-05-09 15:16:05'),
(9, 7, 332582014, 'Roti,Mutton Curry', 'Requested', 'Chennai', 'Can feed 10 people', '2023-05-10', 'Ambattur', 'Rydu', 9908876998, NULL, '2023-05-10 08:11:45', '2023-05-10 08:15:28'),
(10, 8, 882973499, 'Roti,Dal', 'Requested', 'Chennai', 'Fresh food', '2023-05-17', 'J Block, Annanagar', 'Shanah', 7780987950, NULL, '2023-05-17 03:37:33', '2023-05-29 04:04:27'),
(11, 9, 352036025, 'Rice,Sambar', 'Available', 'Chennai', 'Good quality food', '2023-05-17', 'Anna University, Guindy', 'Riya', 8825560774, NULL, '2023-05-17 03:52:38', NULL),
(12, 24, 220914404, 'Roti, dal', 'Requested', 'Chennai', 'Fresh food for 20 people', '2023-05-29', 'Vadapalani', 'Rita', 9900888776, NULL, '2023-05-29 04:07:57', '2023-05-29 04:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `tblfoodrequests`
--

CREATE TABLE `tblfoodrequests` (
  `id` int(11) NOT NULL,
  `requestNumber` bigint(12) DEFAULT NULL,
  `foodId` int(1) DEFAULT NULL,
  `fullName` varchar(150) DEFAULT NULL,
  `mobileNumber` bigint(12) DEFAULT NULL,
  `message` mediumtext DEFAULT NULL,
  `requestDate` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(120) DEFAULT NULL,
  `donorRemark` mediumtext DEFAULT NULL,
  `requestCompletionDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblfoodrequests`
--

INSERT INTO `tblfoodrequests` (`id`, `requestNumber`, `foodId`, `fullName`, `mobileNumber`, `message`, `requestDate`, `status`, `donorRemark`, `requestCompletionDate`) VALUES
(7, 972542059, 164440586, 'Sam', 8988876090, 'Requesting this food for Liitle Dreams Orphanage', '2023-05-08 05:26:12', 'Accepted', NULL, '2023-05-08 18:25:00'),
(8, 181091928, 851754301, 'Paul', 6652662451, 'Thanks for helping the needy', '2023-05-08 05:32:05', 'Rejected', 'Sorry', '2023-05-08 18:31:36'),
(9, 376631032, 780203826, 'James', 6676509008, 'Thank you \r\n', '2023-05-09 13:28:28', 'Not Confirmed', NULL, NULL),
(10, 486734657, 719839901, 'Matthew', 9099889667, 'Thank you for the food', '2023-05-09 15:16:05', 'Not Confirmed', NULL, NULL),
(11, 278838373, 332582014, 'Riya', 7846756009, 'Thnks you sweetie', '2023-05-10 08:15:28', 'Accepted', 'You can pick up by 10pm', '2023-05-10 08:18:14'),
(12, 838863127, 882973499, 'rida', 6384521550, 'thank you', '2023-05-29 04:04:27', 'Not Confirmed', NULL, NULL),
(13, 559819652, 220914404, 'Tina', 9088876567, 'Thank you', '2023-05-29 04:09:15', 'Not Confirmed', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `ID` int(10) NOT NULL,
  `StateName` varchar(120) DEFAULT NULL,
  `RegState` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`ID`, `StateName`, `RegState`) VALUES
(3, 'Uttar Pradesh', '2019-05-07 07:07:21'),
(4, 'Andra Pradesh', '2019-05-07 07:07:31'),
(5, 'Delhi/NCR', '2019-05-07 07:07:39'),
(6, 'Kerala', '2019-05-07 07:07:58'),
(7, 'Arunachal Pradesh', '2019-05-07 07:08:12'),
(8, 'Sikkim', '2019-05-07 07:08:37'),
(9, 'Maharastra', '2019-05-07 07:08:49'),
(10, 'Gujrat', '2019-05-07 07:09:16'),
(11, 'Tamilnadu', '2019-06-18 18:14:43'),
(12, 'Punjab', '2022-01-23 06:32:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldonor`
--
ALTER TABLE `tbldonor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfood`
--
ALTER TABLE `tblfood`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfoodrequests`
--
ALTER TABLE `tblfoodrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldonor`
--
ALTER TABLE `tbldonor`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblfood`
--
ALTER TABLE `tblfood`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblfoodrequests`
--
ALTER TABLE `tblfoodrequests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
