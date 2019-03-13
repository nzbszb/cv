-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2017 at 07:42 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `ftitle` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `religion` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `syear` year(4) NOT NULL,
  `sdept` varchar(255) NOT NULL,
  `sgpa` float NOT NULL,
  `college` varchar(255) NOT NULL,
  `hyear` year(4) NOT NULL,
  `hdept` varchar(255) NOT NULL,
  `hgpa` float NOT NULL,
  `buni` varchar(255) NOT NULL,
  `byear` varchar(255) NOT NULL,
  `bdept` varchar(255) NOT NULL,
  `bgpa` float NOT NULL,
  `muni` varchar(255) NOT NULL,
  `myear` varchar(255) NOT NULL,
  `mdept` varchar(255) NOT NULL,
  `mgpa` float NOT NULL,
  `paddress` text NOT NULL,
  `praddress` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `cobj` text NOT NULL,
  `skill` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `pic`, `title`, `ftitle`, `mtitle`, `gender`, `dob`, `religion`, `nationality`, `school`, `syear`, `sdept`, `sgpa`, `college`, `hyear`, `hdept`, `hgpa`, `buni`, `byear`, `bdept`, `bgpa`, `muni`, `myear`, `mdept`, `mgpa`, `paddress`, `praddress`, `mobile`, `mail`, `cobj`, `skill`, `created_at`, `updated_at`, `deleted_at`) VALUES
(9, 'img/75ca5de921958d00be2c576ae858d5dd.jpg', 'Mohammad Nazib -ul- Islam', 'Mohammad Nazrul Islam', 'Razia Khanom', 'Male', '1991-01-01', 'Islam', 'Bangladesh', 'Adamjee Cantonment Public School', 2006, 'Science', 5, 'Adamjee Cantonment College', 2008, 'Science', 4.6, 'City University', '2018', 'BSc in Computer Science &Engineering', 3, '', '', '', 0, 'Joint Quarter, Aziz Mohollah, Mohammadpur, \r\nDhaka-1207.', 'Mohammadi Housing Society,\r\nMohammadpur, Dhaka - 1207.', '01677382277', 'nazibsazib@gmail.com', 'To make a sound position in IT world and work enthusiastically in team to achieve goal of the organization with devotion and hard work as well as honesty.', 'Can work on office operational programs like, MS Word, MS Excel,MSPowerPoint and also have the knowledge of Structured& Object Oriented programming language(C & Java Programming Language)& MATLAB, PHP, HTML, SQL, CSS, Laravel, JQuery. ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
