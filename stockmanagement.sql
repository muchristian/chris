-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 05:56 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stockmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `campany`
--

CREATE TABLE `campany` (
  `campanyid` int(10) NOT NULL,
  `CampanyName` varchar(25) NOT NULL,
  `CampanyLocation` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campany`
--

INSERT INTO `campany` (`campanyid`, `CampanyName`, `CampanyLocation`) VALUES
(1, 'MTN', 'kanombe'),
(2, 'Ericson', 'Nyabugogo'),
(3, 'Tres ', 'gisenyi');

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `Inputid` int(10) NOT NULL,
  `Inputdate` date NOT NULL,
  `Itypeid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `camanyid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Itemid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Userid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `siteid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `quantity` varchar(560) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`Inputid`, `Inputdate`, `Itypeid`, `camanyid`, `Itemid`, `Userid`, `siteid`, `quantity`) VALUES
(8, '2018-09-17', '', '', '', '', '', ''),
(7, '2018-09-17', 'Materials News', 'Ericson ', 'Dug', '3456278', 'Ericson site ', '234'),
(10, '2018-09-17', '', '', '', '', '', ''),
(11, '2018-09-17', 'Materials News', 'MTN ', 'Antenna', '2', 'Ericson site ', '234'),
(12, '2018-09-23', '', '', 'Dug', '', '', ''),
(20, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'MTN Site ', '3456'),
(15, '0000-00-00', 'uuuuuuuuuu', 'Tres', 'Dug', 'mukakmana', 'gaju', '87'),
(19, '2018-09-24', 'Materials used', 'MTN ', 'Dug', '12', 'Ericson site ', '12'),
(21, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'MTN Site ', '3456'),
(22, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', ''),
(23, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', ''),
(24, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', ''),
(25, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'MTN Site ', '3456'),
(26, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '3456'),
(27, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '3456'),
(28, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '3456');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--
-- Error reading structure for table stockmanagement.item: #1932 - Table 'stockmanagement.item' doesn't exist in engine
-- Error reading data for table stockmanagement.item: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `stockmanagement`.`item`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `itemtype`
--

CREATE TABLE `itemtype` (
  `Itypeid` int(10) NOT NULL,
  `Itypestatus` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `itemtype`
--

INSERT INTO `itemtype` (`Itypeid`, `Itypestatus`) VALUES
(1, 'Materials News'),
(2, 'Materials used');

-- --------------------------------------------------------

--
-- Table structure for table `output`
--

CREATE TABLE `output` (
  `outputid` int(10) NOT NULL,
  `outputdate` date NOT NULL,
  `Itypeid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Campanyid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Itemid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Userid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `siteid` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `Quantity` varchar(30) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `output`
--

INSERT INTO `output` (`outputid`, `outputdate`, `Itypeid`, `Campanyid`, `Itemid`, `Userid`, `siteid`, `Quantity`) VALUES
(12, '2018-09-26', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '345'),
(10, '2018-09-26', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '123'),
(11, '2018-09-26', 'Materials News', 'Tres ', 'Dug', '3456278', 'Ericson site ', '12356'),
(7, '2018-09-23', 'Materials News', 'Ericson ', 'Dug', '3456278', 'Ericson site ', '47'),
(8, '0000-00-00', 'Materials Used', 'MTN ', 'Dug', '3456278', 'Tres site', '47'),
(9, '2018-09-26', 'Materials News', 'MTN ', 'Dug', '2', 'Ericson site ', '345'),
(13, '2018-10-04', 'Materials News', 'Tres ', 'Dug', '3456278', 'MTN Site ', '67');

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE `site` (
  `siteid` int(10) NOT NULL,
  `siteName` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `sitelocation` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`siteid`, `siteName`, `sitelocation`, `userid`) VALUES
(1, 'Ericson site ', 'kimironko', 0),
(2, 'MTN Site ', 'Remera', 0),
(3, 'MTN Site ', 'Remera', 0),
(4, 'MTN Site ', 'Remera', 0),
(5, 'MTN Site ', 'Remera', 0),
(6, 'MTN Site ', 'Remera', 0),
(7, 'MTN Site ', 'Remera', 0),
(8, 'MTN Site ', 'Remera', 0),
(9, 'MTN Site ', 'Remera', 0),
(10, 'MTN Site ', 'Remera', 0),
(11, 'MTN Site ', 'Remera', 0),
(12, 'MTN Site ', 'Remera', 0),
(13, 'MTN Site ', 'Remera', 0),
(14, 'MTN Site ', 'Remera', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` int(20) NOT NULL,
  `FName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `LName` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `contact` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `role` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `useridentinty` int(255) NOT NULL,
  `username` varchar(255) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `FName`, `LName`, `contact`, `role`, `password`, `useridentinty`, `username`) VALUES
(14, '', 'ji', '', 'kui', 'md5()', 3456278, 'mugenzipatrick'),
(9, 'Abikunze', 'arlette', '', 'Admin', 'Aq123456789', 34, 'nana'),
(10, '', 'Ester', '', 'Stockmanager', 'md5()', 2147483647, 'nana'),
(15, 'Akimana', 'Marie Josiane', '', 'user', 'md5()', 7452, ''),
(16, 'Akimana', 'Marie Josiane', '', 'user', 'md5()', 7452, ''),
(17, '', '', '', '', 'md5()', 0, ''),
(18, '', '', '', '', 'md5()', 0, ''),
(19, 'Abikunze', 'nadege', '', 'stockmanager', 'md5()', 0, ''),
(21, 'Abikunze', 'Marie Josiane', '', 'stockmanager', 'md5()', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campany`
--
ALTER TABLE `campany`
  ADD PRIMARY KEY (`campanyid`);

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`Inputid`);

--
-- Indexes for table `itemtype`
--
ALTER TABLE `itemtype`
  ADD PRIMARY KEY (`Itypeid`);

--
-- Indexes for table `output`
--
ALTER TABLE `output`
  ADD PRIMARY KEY (`outputid`);

--
-- Indexes for table `site`
--
ALTER TABLE `site`
  ADD PRIMARY KEY (`siteid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campany`
--
ALTER TABLE `campany`
  MODIFY `campanyid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `Inputid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `itemtype`
--
ALTER TABLE `itemtype`
  MODIFY `Itypeid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `output`
--
ALTER TABLE `output`
  MODIFY `outputid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `site`
--
ALTER TABLE `site`
  MODIFY `siteid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
