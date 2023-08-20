-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2023 at 08:09 AM
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
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `ATL_CODE` varchar(20) NOT NULL,
  `pay_catg` varchar(50) DEFAULT NULL,
  `pay_slab` varchar(10) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `comment` text DEFAULT NULL,
  `file` varchar(500) NOT NULL,
  `vendor` varchar(50) DEFAULT NULL,
  `pay_type` varchar(50) DEFAULT NULL,
  `ref_no` varchar(50) DEFAULT NULL,
  `pfms` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `ATL_CODE`, `pay_catg`, `pay_slab`, `date`, `amount`, `comment`, `file`, `vendor`, `pay_type`, `ref_no`, `pfms`) VALUES
(1, '', 'Paytm', '5%', '2023-08-11', 12542.00, 'nonw', 'images/raks.png', 'E-Wallet', 'Google Pay', '1254896325', 'DSC'),
(2, '', 'Paytm', '5%', '2023-08-11', 12542.00, 'nonw', 'images/raks.png', 'E-Wallet', 'Google Pay', '1254896325', 'DSC'),
(3, '1231231', 'Google Pay', '5%', '2023-08-24', 1452.00, 'NONE', 'images/logo2.png', 'Bank Transfer', 'Credit card', '12548963', 'CINB'),
(4, '46486', 'Credit card', '20%', '2023-08-26', 480000.00, 'nil', 'images/logo1.png', 'E-Wallet', 'Credit card', '12548963', 'DSC'),
(6, '1323', 'Paytm', '15%', '2023-08-29', 100000.00, 'none\r\n', 'images/DSC_0617.JPG', 'Bank Transfer', 'Paytm', '123123', 'PPA'),
(7, '987456', 'Debit card', '15%', '2023-08-26', 480000.00, 'NONE', 'images/DSC_0626.JPG', 'E-Wallet', 'Credit card', '12548963', 'DSC');

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
(1, 'Srinivas University', 145236, '145287', '2023-08-18', '2023-08-20', 'Pinto', '14523698574', '1231231', '132333', 'ehqioj', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668', 'wdqwdwqsd', '4ffff3qd', '125463', 'raks@gmail.com', 'hfuefhe', 'wedfwfeew', 'fwefewfwfr', 'raks@gmail.com', '464987', 'wedwEDC', '132333'),
(2, 'SIT', 147852, '145287', '2023-08-22', '2023-08-27', 'Thomas', '93333', '46486', '123456', '54', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668555', 'wdqwdwqsd', '4ffff3qd', '4521', 'raks@gmail.com', 'hfuefhe', 'UHU', '4785', 'raks@gmail.com', '464987', 'TYTDD', '7854'),
(3, 'SIT', 147852, '145287', '2023-08-22', '2023-08-27', 'Thomas', '93333', '46486', '123456', '54', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668555', 'wdqwdwqsd', '4ffff3qd', '4521', 'raks@gmail.com', 'hfuefhe', 'UHU', '4785', 'raks@gmail.com', '464987', 'TYTDD', '7854'),
(4, 'SIT', 147852, '145287', '2023-08-22', '2023-08-27', 'Thomas', '93333', '46486', '123456', '54', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668555', 'wdqwdwqsd', '4ffff3qd', '4521', 'raks@gmail.com', 'hfuefhe', 'UHU', '4785', 'raks@gmail.com', '464987', 'TYTDD', '7854'),
(5, 'SIT', 147852, '145287', '2023-08-22', '2023-08-27', 'Thomas', '93333', '46486', '123456', '54', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668555', 'wdqwdwqsd', '4ffff3qd', '4521', 'raks@gmail.com', 'hfuefhe', 'UHU', '4785', 'raks@gmail.com', '464987', 'TYTDD', '7854'),
(6, 'Rithika University', 4521369, '145287', '2023-08-16', '2023-08-16', 'Rithika', '54', '1323', '1323', '1000', 'raks@gmail.com', 'wnqwjdnq', 'foiute6y98', 'guuy', 'gjt09y0', 'gmtcdj', 'dgjhntgdfd', 'thyjt', 'dfs', 'vfdb', 'fbbn', 'vdffdfv', 'raks@gmail.com', '45985631', 'fvbfbg', 'fghbnnnn'),
(7, 'Prasad Univers+ity', 125455, 'dweoidjwef', '2023-08-02', '2023-08-18', 'Prasad', '47855', '987456', '741852', 'ihccaeiuf', 'raks@gmail.com', 'wnqwjdnq', 'qwijdiodj', 'wjhqwiu', '5668w', 'wdqwdwqsd', '4ffff3qd', 'iueieuf/', 'raks@gmail.com', 'hfuefhe', 'wedfwfeew', 'WRFWED', 'raks@gmail.com', '464987', 'wdqwdwD', '87768');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
