-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2023 at 05:20 PM
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
-- Database: `final_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `SCHOOL_NAME` varchar(100) NOT NULL,
  `Sanction_no` int(11) NOT NULL,
  `UDISE` varchar(20) NOT NULL,
  `Fund_Date` date NOT NULL,
  `Inaugeration_date` date NOT NULL,
  `Principal_Name` varchar(100) NOT NULL,
  `Principal_Phone` varchar(15) NOT NULL,
  `ATL_CODE` varchar(20) NOT NULL,
  `ATL_PSWD` varchar(50) NOT NULL,
  `GEM_CODE` varchar(20) NOT NULL,
  `Govt_Email` varchar(100) NOT NULL,
  `PFMS` varchar(50) NOT NULL,
  `PFMS_OP` varchar(50) NOT NULL,
  `ATL_In` varchar(100) NOT NULL,
  `ATL_Phone` varchar(15) NOT NULL,
  `PFMS_AP` varchar(50) NOT NULL,
  `DASHBRD_PSWRD` varchar(50) NOT NULL,
  `GEM_PSWD` varchar(50) NOT NULL,
  `Govt_Mail_PSWD` varchar(50) NOT NULL,
  `PFMS_PSWD` varchar(50) NOT NULL,
  `OP_PSWD` varchar(50) NOT NULL,
  `AP_PSWD` varchar(50) NOT NULL,
  `Reg_Email` varchar(100) NOT NULL,
  `Reg_PhOne` varchar(15) NOT NULL,
  `Bharathkosh` varchar(50) NOT NULL,
  `BkoshPSWD` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `SCHOOL_NAME`, `Sanction_no`, `UDISE`, `Fund_Date`, `Inaugeration_date`, `Principal_Name`, `Principal_Phone`, `ATL_CODE`, `ATL_PSWD`, `GEM_CODE`, `Govt_Email`, `PFMS`, `PFMS_OP`, `ATL_In`, `ATL_Phone`, `PFMS_AP`, `DASHBRD_PSWRD`, `GEM_PSWD`, `Govt_Mail_PSWD`, `PFMS_PSWD`, `OP_PSWD`, `AP_PSWD`, `Reg_Email`, `Reg_PhOne`, `Bharathkosh`, `BkoshPSWD`) VALUES
(1, 'Srinivas University', 145236, '145287', '2023-08-18', '2023-08-20', 'Pinto', '14523698574', '1231231', '132333', 'ehqioj', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668', 'wdqwdwqsd', '4ffff3qd', '125463', 'raks@gmail.com', 'hfuefhe', 'wedfwfeew', 'fwefewfwfr', 'raks@gmail.com', '464987', 'wedwEDC', '132333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
