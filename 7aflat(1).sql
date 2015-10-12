-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 07, 2015 at 11:40 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `7aflat`
--

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE IF NOT EXISTS `business` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `member_id` int(100) NOT NULL,
  `description` text NOT NULL,
  `video` text NOT NULL,
  `invitation` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `party_date` text NOT NULL,
  `picture` text NOT NULL,
  `party_type` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`user_id`, `username`, `member_id`, `description`, `video`, `invitation`, `phone`, `email`, `address`, `facebook`, `party_date`, `picture`, `party_type`) VALUES
(2, 'Crystal App', 42, 'Description ', 'youtube.com', 'Invitation', 788823917, 'crystal@yahoo.com', 'amman', 'soso', '2015-10-28', 'rose_PNG651.png', 'Opening'),
(4, 'Crystal App', 46, 'Description About Your Company', 'youtube.com', 'Invitation', 788888880, 'crystal@yahoo.com', 'amman', 'facebook.com/crystal', '2015-10-29', 'logo.png', 'Opening');

-- --------------------------------------------------------

--
-- Table structure for table `business_pic`
--

CREATE TABLE IF NOT EXISTS `business_pic` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `picture` text NOT NULL,
  `category` text NOT NULL,
  `member_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `business_pic`
--

INSERT INTO `business_pic` (`id`, `picture`, `category`, `member_id`) VALUES
(3, 'rose_PNG637.png', 'company activities employee', 42),
(9, '', '', 42),
(10, '', '', 42),
(11, '', '', 42),
(12, '', '', 42),
(13, 'interior-design-828545_1280.jpg', 'company activities employee', 46),
(14, 'roundtable-828546_1280.jpg', 'company', 46),
(16, 'wedding-467915_1280.jpg', 'activities', 46),
(17, 'Untitled-1.jpg', 'company activities employee', 49);

-- --------------------------------------------------------

--
-- Table structure for table `couples`
--

CREATE TABLE IF NOT EXISTS `couples` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `bride` text NOT NULL,
  `groom` text NOT NULL,
  `member_id` int(100) NOT NULL,
  `description_bride` text NOT NULL,
  `description_groom` text NOT NULL,
  `video` text NOT NULL,
  `invitation` text NOT NULL,
  `phone` int(11) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `party_date` text NOT NULL,
  `bride_picture` text NOT NULL,
  `groom_picture` text NOT NULL,
  `party_type` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `couples`
--

INSERT INTO `couples` (`user_id`, `bride`, `groom`, `member_id`, `description_bride`, `description_groom`, `video`, `invitation`, `phone`, `email`, `address`, `facebook`, `party_date`, `bride_picture`, `groom_picture`, `party_type`) VALUES
(3, 'sara', 'ahmad', 44, 'Description About Bride', 'Description About Groom', 'youtube.com', 'Invitation', 788823917, 'ahmad@yahoo.com', 'amman', 'facebook', '2015-11-06', '11937424_788890251234420_8506094793593549044_o - Copy.jpg', 'boss-selection-mens-silk-suit-profile.png', 'Engagement'),
(6, 'sara', 'ahmad', 51, '123', '456', 'http://123456', '1234', 788823917, 'mon@yahoo', 'amman', 'soso', '2015-10-08', 'bride.jpg', 'groom.jpg', 'Engagement');

-- --------------------------------------------------------

--
-- Table structure for table `couples_pic`
--

CREATE TABLE IF NOT EXISTS `couples_pic` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `picture` text NOT NULL,
  `category` text NOT NULL,
  `member_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `couples_pic`
--

INSERT INTO `couples_pic` (`id`, `picture`, `category`, `member_id`) VALUES
(1, 'rose_PNG638.png', 'engagment jaha hennah preparation party honeymoon friends', 43),
(2, '01.jpg', 'engagment jaha hennah preparation', 44),
(4, '02.jpg', 'jaha hennah preparation party', 44),
(5, '03.jpg', 'engagment party honeymoon friends', 44),
(6, '04.jpg', 'engagment jaha hennah preparation party honeymoon friends', 44),
(7, '170efe956829f50ff340ccaa91fce75a.jpeg', 'engagment jaha hennah preparation party honeymoon friends', 51);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `email` text NOT NULL,
  `country` text NOT NULL,
  `accout_type` text NOT NULL,
  PRIMARY KEY (`member_id`),
  UNIQUE KEY `member_id` (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member_id`, `username`, `password`, `email`, `country`, `accout_type`) VALUES
(1, 'Ahmad', '987654321', 'ahmad@yahoo.com', 'Jordan', 'Organizer personal'),
(2, 'your name', 'pass', 'sa@yahoo.com', 'Jordan', 'Organizer business'),
(4, 'moh', '123456', 'moh@hotmail.com', 'Jordan', 'Organizer personal'),
(5, 'lina', '123456', 'ioio@yahoo.com', 'Iraq', 'Organizer personal'),
(10, 'dd', 'pass', 'dd@yahoo.com', 'Jordan', 'Organizer couples'),
(11, 'sondos', '123456', 'sondos@yahoo.com', 'Jordan', 'Organizer personal'),
(12, 'mona', '123456', 'mona@yahoo.com', 'Jordan', 'Organizer couples'),
(16, 'name', 'pass', 'vv@yahhoo.com', 'Jordan', 'Organizer couples'),
(24, 'wqwq', 'pass', 'vvq@yahhoo.com', 'Jordan', 'Organizer supplier'),
(26, 'lolo', 'pass', 'be@gmail.com', 'Iraq', 'Organizer personal'),
(27, 'Salma', 'pass', 'salma@yahoo.com', 'Bahrein', 'Organizer personal'),
(35, 'mon', 'pass', 'mon@yahoo', 'Jordan', 'Organizer personal'),
(36, 'mon', 'pass', 'mon@yahoo', 'Jordan', 'Organizer personal'),
(37, 'Ahmad', '987654321', 'ahmad@yahoo.com', 'Jordan', 'Organizer personal'),
(38, 'sosos', '123456', 'sana2_ci23s@yahoo.com', 'Jordan', 'Organizer personal'),
(39, 'leana', '123456', 'lina@yahoo.com', 'Qatar', 'Organizer personal'),
(40, 'k2', '123456', 'saqwe@yahoo.com', 'Qatar', 'Organizer personal'),
(41, 'sanaa', '123456', 'sana2_cis@yahoo23.com', 'Syria', 'Organizer business'),
(42, 'sanaa', 'pass', 'sana2_cis@yahoo23.com', 'Syria', 'Organizer business'),
(43, 'eman', '123456', 'eman@yahoo.com', 'Syria', 'Organizer couples'),
(44, '123', '123', 'sana2_ci23s@yahoo.com', 'Jordan', 'Organizer couples'),
(45, 'wqw', '123456', 'w@yah.com', 'Syria', 'Organizer couples'),
(46, 'crystal', '123456', 'crystal@yahoo.com', 'Iraq', 'Organizer business'),
(48, 'personal', 'pass', 'personal@yahoo.com', 'Jordan', 'Organizer personal'),
(49, 'business', '123456', 'business@yahoo.com', 'Jordan', 'Organizer business'),
(51, 'couples', '123', 'couples@yahoo.com', 'Jordan', 'Organizer couples'),
(52, '123', '123', 'qwe@yahoo.com', 'Jordan', 'Organizer couples'),
(53, 'your name', '123456', 'sana2_cis@yahoo.com', 'Jordan', 'Organizer business');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'crysatl_all@yahoo.com'),
(2, 'sana@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE IF NOT EXISTS `occasion` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `occasion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `occasion`
--


-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `member_id` int(100) NOT NULL,
  `description` text NOT NULL,
  `video` text NOT NULL,
  `invitation` text NOT NULL,
  `phone` int(10) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `facebook` text NOT NULL,
  `party_date` text NOT NULL,
  `picture` text NOT NULL,
  `party_type` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=95 ;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`user_id`, `username`, `member_id`, `description`, `video`, `invitation`, `phone`, `email`, `address`, `facebook`, `party_date`, `picture`, `party_type`) VALUES
(59, '123', 26, '', '', '', 0, '', '', '', '2015-10-28', 'groom.jpg', ''),
(67, '123', 5, '', 'http://player.vimeo.com/video/84413332', '', 0, '', '', '', '2015-09-05', 'groom.jpg', 'heena'),
(75, 'salma', 27, 'some description', 'http://youtub.com/123', 'invatition', 1234567890, 'salma@yahoo.com', 'Address', 'Facebook', '2015-09-10', 'groom.jpg', 'Graduation'),
(76, 'your name', 33, 'Description About You', 'youtube.com', 'your Invitation', 78880000, 'email@yahoo.com', 'amman', 'facebook.com', '2015-10-31', 'groom.jpg', 'Birthday'),
(89, '', 35, '', '', '', 0, '', '', '', '2015-10-01', 'ATT_1433337378554_image.jpg', ''),
(90, '', 35, '', '', '', 0, '', '', '', '2015-10-05', 'groom.jpg', ''),
(91, 'lina', 39, 'Description ', 'youtube.com', 'Invitation', 788823917, 'sana@yahoo.com', 'amman', 'soso', '2015-10-30', 'groom.jpg', 'Henna'),
(92, 'lina', 39, 'Description ', 'youtube.com', 'Invitation', 788823917, 'sana@yahoo.com', 'amman', 'soso', '2015-10-30', 'rose_PNG656.png', 'Henna'),
(94, 'personal', 48, '123', 'http://123', '123', 788888880, 'sana@yahoo.com', 'amman', 'facebook.com/crystal', '2015-10-13', 'groom.jpg', 'Birthday');

-- --------------------------------------------------------

--
-- Table structure for table `personal_pic`
--

CREATE TABLE IF NOT EXISTS `personal_pic` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `picture` text NOT NULL,
  `category` text NOT NULL,
  `member_id` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `personal_pic`
--

INSERT INTO `personal_pic` (`id`, `picture`, `category`, `member_id`) VALUES
(13, 'white_roses_PNG2788.png', 'family special party', 4),
(15, 'white_roses_PNG2778.png', 'life friends special party', 5),
(16, 'white_roses_PNG2780.png', 'friends family special', 5),
(17, '243e6eb6cca1691e5d0e853532d90da1-d4oxakn.png', 'family special party', 5),
(18, 'white_roses_PNG2788.png', 'party', 5),
(19, 'ATT_1433337697629_image.jpg', 'friends family special', 27),
(20, 'ATT_1433337378554_image.jpg', 'life friends family', 27),
(21, 'rose_PNG656.png', 'friends special party', 27),
(22, 'Untitled-1.jpg', 'friends family special', 33),
(23, '243e6eb6cca1691e5d0e853532d90da1-d4oxakn.png', 'life friends family special party', 33),
(24, '243e6eb6cca1691e5d0e853532d90da1-d4oxakn.png', 'life friends family', 39),
(25, 'rose_PNG637.png', 'friends family special party', 39),
(27, 'Untitled-1.jpg', 'life friends family special party', 47);
