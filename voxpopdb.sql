-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2014 at 07:02 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voxpopdb`
--
CREATE DATABASE IF NOT EXISTS `voxpopdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voxpopdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_user_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_image` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_user_name`, `admin_password`, `admin_image`) VALUES
(1, 'Deepak pandey', 'deepkiii', 'admin123', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE IF NOT EXISTS `user_comments` (
  `ucomment_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `ucomment_user_id` bigint(50) NOT NULL,
  `ucomment_dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ucomment_report_id` bigint(50) NOT NULL,
  `ucomment_comment` varchar(250) NOT NULL,
  `ucomment_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ucomment_id`),
  KEY `ucomment_report_id` (`ucomment_report_id`),
  KEY `ucomment_user_id` (`ucomment_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `user_phone_no` varchar(13) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_verified` tinyint(1) NOT NULL,
  `user_location` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_reports`
--

CREATE TABLE IF NOT EXISTS `user_reports` (
  `ureport_id` bigint(50) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(50) NOT NULL,
  `ureport_images` varchar(50) NOT NULL,
  `ureport_location` varchar(50) NOT NULL,
  `ureport_title` varchar(30) NOT NULL,
  `ureport_description` varchar(250) NOT NULL,
  `ureport_dateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ureport_verified` tinyint(1) NOT NULL,
  PRIMARY KEY (`ureport_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD CONSTRAINT `rfk` FOREIGN KEY (`ucomment_report_id`) REFERENCES `user_reports` (`ureport_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ufk` FOREIGN KEY (`ucomment_user_id`) REFERENCES `user_reports` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_reports`
--
ALTER TABLE `user_reports`
  ADD CONSTRAINT `Fsk` FOREIGN KEY (`user_id`) REFERENCES `user_detail` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
