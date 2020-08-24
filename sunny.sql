-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 02:37 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunny`
--

-- --------------------------------------------------------

--
-- Table structure for table `adviser`
--

CREATE TABLE `adviser` (
  `ID` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `mat1` int(11) NOT NULL,
  `mat2` int(11) NOT NULL,
  `mat3` int(11) NOT NULL,
  `mat4` int(11) NOT NULL,
  `eng1` int(11) NOT NULL,
  `eng2` int(11) NOT NULL,
  `eng3` int(11) NOT NULL,
  `eng4` int(11) NOT NULL,
  `fil1` int(11) NOT NULL,
  `fil2` int(11) NOT NULL,
  `fil3` int(11) NOT NULL,
  `fil4` int(11) NOT NULL,
  `sci1` int(11) NOT NULL,
  `sci2` int(11) NOT NULL,
  `sci3` int(11) NOT NULL,
  `sci4` int(11) NOT NULL,
  `gm1` int(11) NOT NULL,
  `gm2` int(11) NOT NULL,
  `gm3` int(11) NOT NULL,
  `gm4` int(11) NOT NULL,
  `pe1` int(11) NOT NULL,
  `pe2` int(11) NOT NULL,
  `pe3` int(11) NOT NULL,
  `pe4` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`ID`, `fname`, `mname`, `lname`, `level`, `sec`, `mat1`, `mat2`, `mat3`, `mat4`, `eng1`, `eng2`, `eng3`, `eng4`, `fil1`, `fil2`, `fil3`, `fil4`, `sci1`, `sci2`, `sci3`, `sci4`, `gm1`, `gm2`, `gm3`, `gm4`, `pe1`, `pe2`, `pe3`, `pe4`) VALUES
(1, 'Nina', 'Nina', '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `user` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `sub` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`user`, `pass`, `sub`) VALUES
('admin', 'admin', ''),
('12', 'pass', 'sub'),
('13', '13', 'Math'),
('12345', '12345', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `sadness`
--

CREATE TABLE `sadness` (
  `id` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `fn` varchar(60) NOT NULL,
  `mn` varchar(60) NOT NULL,
  `ln` varchar(60) NOT NULL,
  `age` varchar(60) NOT NULL,
  `rel` varchar(60) NOT NULL,
  `cs` varchar(60) NOT NULL,
  `gen` varchar(60) NOT NULL,
  `dob` int(11) NOT NULL,
  `pob` varchar(11) NOT NULL,
  `sib` varchar(60) NOT NULL,
  `fan` varchar(11) NOT NULL,
  `mon` varchar(60) NOT NULL,
  `grade` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `pa` varchar(60) NOT NULL,
  `pro` varchar(60) NOT NULL,
  `pcz` int(11) NOT NULL,
  `coun` varchar(60) NOT NULL,
  `tel` int(11) NOT NULL,
  `guar` varchar(60) NOT NULL,
  `mfir` int(11) NOT NULL,
  `msec` int(11) NOT NULL,
  `mthir` int(11) NOT NULL,
  `mfou` int(11) NOT NULL,
  `mavg` int(11) NOT NULL,
  `efir` int(11) NOT NULL,
  `esec` int(11) NOT NULL,
  `ethir` int(11) NOT NULL,
  `efou` int(11) NOT NULL,
  `eavg` int(11) NOT NULL,
  `ffir` int(11) NOT NULL,
  `fsec` int(11) NOT NULL,
  `fthir` int(11) NOT NULL,
  `ffou` int(11) NOT NULL,
  `favg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sadness`
--

INSERT INTO `sadness` (`id`, `user`, `pass`, `fn`, `mn`, `ln`, `age`, `rel`, `cs`, `gen`, `dob`, `pob`, `sib`, `fan`, `mon`, `grade`, `sec`, `year`, `pa`, `pro`, `pcz`, `coun`, `tel`, `guar`, `mfir`, `msec`, `mthir`, `mfou`, `mavg`, `efir`, `esec`, `ethir`, `efou`, `eavg`, `ffir`, `fsec`, `fthir`, `ffou`, `favg`) VALUES
(342139, 'user', 'pass', '', '', '', '', '', '', '', 0, '', '', '', '', 0, 0, 0, '', '', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(342140, '1234', '1234', 'Psalmer', 'Middle', 'Gomez', '24', 'catholic', 'filipino', 'Male', 7, 'manila', '4', 'Mr. Gomez', 'Mrs. Gomez', 1, 1, 0, '1231 fdfds', 'pampanga', 12, 'philippines', 1231321, 'guardian', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(342141, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', 0, 1, 0, '', '', 0, '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thegang`
--

CREATE TABLE `thegang` (
  `ID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `stat` varchar(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `level` int(11) NOT NULL,
  `sec` int(11) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gen` varchar(20) NOT NULL,
  `rel` varchar(20) NOT NULL,
  `citi` varchar(20) NOT NULL,
  `dob` int(11) NOT NULL,
  `pob` varchar(20) NOT NULL,
  `fn` varchar(20) NOT NULL,
  `mn` varchar(20) NOT NULL,
  `padd` varchar(20) NOT NULL,
  `gn` varchar(20) NOT NULL,
  `tel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thegang`
--

INSERT INTO `thegang` (`ID`, `user`, `pass`, `stat`, `fname`, `mname`, `sname`, `level`, `sec`, `age`, `gen`, `rel`, `citi`, `dob`, `pob`, `fn`, `mn`, `padd`, `gn`, `tel`) VALUES
(1, '0001-001-001', '12345', '', 'Psalmer', 'Gomez', 'Gomez', 1, 1, '7', 'Male', 'Catholic', 'Filipino', 7, 'manila', 'Ruel Gomez', 'Andi Gomez', 'Maia Alta, Antipolo', 'Ruel Gomez', 110110110),
(2, '0001-001-001', '12345', '', 'Psalmer', 'Gomez', 'Gomez', 1, 1, '7', 'Male', 'Catholic', 'Filipino', 7, 'manila', 'Ruel Gomez', 'Andi Gomez', 'Maia Alta, Antipolo', 'Ruel Gomez', 110110110),
(3, '', '', '', '', '', '', 1, 1, '', '', '', '', 0, '', '', '', '', '', 0),
(4, '', '', '', '', '', '', 1, 1, '', '', '', '', 0, '', '', '', '', '', 0),
(5, '110110110', '110110110', 'new', 'Khriz', 'McGwire', 'Tungala', 1, 1, '18', 'Male', 'catholic', 'Filipino', 7, 'manila', 'guardian', 'Middle', '1231 fdfds', 'guardian', 1231321);

-- --------------------------------------------------------

--
-- Table structure for table `tlog`
--

CREATE TABLE `tlog` (
  `ID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `sub` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tlog`
--

INSERT INTO `tlog` (`ID`, `user`, `pass`, `sub`) VALUES
(1, 'math', '123', 'math'),
(2, 'eng', '123', 'eng'),
(3, 'fil', '123', 'fil'),
(4, 'sci', '123', 'sci'),
(5, 'gmrc', '123', 'gmrc'),
(6, 'mapeh', '123', 'mapeh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adviser`
--
ALTER TABLE `adviser`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sadness`
--
ALTER TABLE `sadness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thegang`
--
ALTER TABLE `thegang`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tlog`
--
ALTER TABLE `tlog`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adviser`
--
ALTER TABLE `adviser`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sadness`
--
ALTER TABLE `sadness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342142;

--
-- AUTO_INCREMENT for table `thegang`
--
ALTER TABLE `thegang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tlog`
--
ALTER TABLE `tlog`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
