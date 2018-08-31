-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2015 at 12:04 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `p7_lfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cadgallery`
--

CREATE TABLE IF NOT EXISTS `cadgallery` (
  `cadfilesID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `cadpathfile` text NOT NULL,
  `projectID` int(11) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`cadfilesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cadgallery`
--

INSERT INTO `cadgallery` (`cadfilesID`, `userID`, `cadpathfile`, `projectID`, `Time`) VALUES
(1, 2, '../proposalPDF/6-CO-HK-VIRTUAL-OFFICES.pdf', 10, '2015-01-08 03:50:07'),
(5, 2, 'cadfiles/visualization_-_aerial.dwg', 11, '2015-01-08 05:22:33');

-- --------------------------------------------------------

--
-- Table structure for table `commentgallery`
--

CREATE TABLE IF NOT EXISTS `commentgallery` (
  `projectgalleryID` int(11) NOT NULL,
  `commentID` int(11) NOT NULL AUTO_INCREMENT,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `usersID` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` int(11) NOT NULL,
  `manager` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  PRIMARY KEY (`commentID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `commentgallery`
--

INSERT INTO `commentgallery` (`projectgalleryID`, `commentID`, `comment`, `usersID`, `date`, `admin`, `manager`, `client`) VALUES
(1, 1, 'asdfasfd', 1, '2014-12-18 05:11:07', 0, 0, 0),
(1, 2, 'Testing Comment', 2, '2015-01-06 04:36:10', 0, 0, 0),
(1, 3, 'This is a comment', 2, '2015-01-07 19:08:06', 0, 0, 0),
(1, 4, 'Alots of comment', 2, '2015-01-07 19:08:24', 0, 0, 0),
(5, 6, 'Test Comment', 3, '2015-01-31 03:25:19', 0, 0, 0),
(1, 7, 'tae', 1, '2015-02-03 13:24:52', 0, 0, 0),
(1, 8, 'testing', 1, '2015-02-03 14:35:13', 0, 0, 0),
(2, 9, ' Test', 1, '2015-02-03 21:03:03', 1, 0, 0),
(1, 10, ' TEst', 1, '2015-02-03 21:04:17', 1, 0, 0),
(1, 11, ' TEst', 1, '2015-02-03 21:04:37', 1, 0, 0),
(3, 12, ' Test', 1, '2015-02-03 21:06:23', 1, 0, 0),
(3, 13, ' Last na', 1, '2015-02-03 21:06:41', 1, 0, 0),
(2, 14, ' Try', 1, '2015-02-03 21:09:15', 1, 0, 0),
(1, 15, 'EDITOR', 1, '2015-02-04 02:31:51', 1, 0, 0),
(1, 16, ' test KO TO', 3, '2015-02-04 05:19:25', 0, 0, 1),
(6, 17, ' Lala', 3, '2015-02-04 05:22:07', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `ID` int(11) NOT NULL,
  `Address` text NOT NULL,
  `Telephone` text NOT NULL,
  `Cellphone` text NOT NULL,
  `Email` text NOT NULL,
  `Facebook` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Address`, `Telephone`, `Cellphone`, `Email`, `Facebook`) VALUES
(1, 'THIS IS LFI ADDRESS.com', '111111', '0905741852963', 'Lfi.local@gmail.com', 'https://www.facebook.com/    ');

-- --------------------------------------------------------

--
-- Table structure for table `galleryarchive`
--

CREATE TABLE IF NOT EXISTS `galleryarchive` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text,
  `Description` text,
  `PathFile` text NOT NULL,
  `GalleryNumber` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `galleryarchive`
--

INSERT INTO `galleryarchive` (`ID`, `Title`, `Description`, `PathFile`, `GalleryNumber`) VALUES
(11, NULL, NULL, 'gallery/images/galleryArchive/IMG_6212.JPG', 1),
(12, NULL, NULL, 'gallery/images/galleryArchive/IMG_7081.JPG', 1),
(13, NULL, NULL, 'gallery/images/galleryArchive/IMG_7318.JPG', 1),
(14, NULL, NULL, 'gallery/images/galleryArchive/IMG_7349.JPG', 1),
(15, NULL, NULL, 'gallery/images/galleryArchive/IMG_7353.JPG', 1),
(16, NULL, NULL, 'gallery/images/galleryArchive/New folder.JPG', 1),
(17, NULL, NULL, 'gallery/images/galleryArchive/IMG_6319.JPG', 2),
(18, NULL, NULL, 'gallery/images/galleryArchive/IMG_6428.JPG', 2),
(19, NULL, NULL, 'gallery/images/galleryArchive/IMG_6982.JPG', 2),
(20, NULL, NULL, 'gallery/images/galleryArchive/IMG_7045.JPG', 2),
(21, NULL, NULL, 'gallery/images/galleryArchive/IMG_7065.JPG', 2),
(22, NULL, NULL, 'gallery/images/galleryArchive/IMG_7288.JPG', 2),
(23, NULL, NULL, 'gallery/images/galleryArchive/IMG_7313.JPG', 2),
(24, NULL, NULL, 'gallery/images/galleryArchive/IMG_8350.JPG', 2),
(25, '', '', 'gallery/images/galleryArchive/ThisIMG.JPG', 3),
(26, NULL, NULL, 'gallery/images/galleryArchive/image2.JPG', 3),
(27, NULL, NULL, 'gallery/images/galleryArchive/imagae.JPG', 3),
(28, NULL, NULL, 'gallery/images/galleryArchive/IMG_8382.JPG', 3),
(29, NULL, NULL, 'gallery/images/galleryArchive/IMG_8454.JPG', 3),
(30, NULL, NULL, 'gallery/images/galleryArchive/IMG_8463.JPG', 3),
(31, NULL, NULL, 'gallery/images/galleryArchive/IMG_8468.JPG', 3),
(32, NULL, NULL, 'gallery/images/galleryArchive/imaga.JPG', 3),
(33, NULL, NULL, 'gallery/images/galleryArchive/IMG_5980.JPG', 4),
(34, NULL, NULL, 'gallery/images/galleryArchive/IMG_5984.JPG', 4),
(35, NULL, NULL, 'gallery/images/galleryArchive/IMG_6011.JPG', 4),
(36, NULL, NULL, 'gallery/images/galleryArchive/IMG_6016.JPG', 4),
(37, NULL, NULL, 'gallery/images/galleryArchive/IMG_6017.JPG', 4),
(38, NULL, NULL, 'gallery/images/galleryArchive/IMG_6266.JPG', 4),
(39, NULL, NULL, 'gallery/images/galleryArchive/IMG_6356.JPG', 4),
(40, NULL, NULL, 'gallery/images/galleryArchive/IMG_6359.JPG', 4),
(41, NULL, NULL, 'gallery/images/galleryArchive/IMG_6490.JPG', 4),
(42, NULL, NULL, 'gallery/images/galleryArchive/IMG_6493.JPG', 4),
(43, NULL, NULL, 'gallery/images/galleryArchive/IMG_6496.JPG', 4),
(44, NULL, NULL, 'gallery/images/galleryArchive/IMG_7169.JPG', 4),
(45, NULL, NULL, 'gallery/images/galleryArchive/IMG_7276.JPG', 4),
(46, NULL, NULL, 'gallery/images/galleryArchive/IMG_8715.JPG', 4),
(47, NULL, NULL, 'gallery/images/galleryArchive/IMG_8794.JPG', 4),
(48, NULL, NULL, 'gallery/images/galleryArchive/IMG_6095.JPG', 5),
(49, NULL, NULL, 'gallery/images/galleryArchive/IMG_6110.JPG', 5),
(50, NULL, NULL, 'gallery/images/galleryArchive/IMG_6871.JPG', 5),
(51, NULL, NULL, 'gallery/images/galleryArchive/IMG_7089.JPG', 5),
(52, NULL, NULL, 'gallery/images/galleryArchive/IMG_7136.JPG', 5),
(53, NULL, NULL, 'gallery/images/galleryArchive/IMG_7143.JPG', 5),
(54, NULL, NULL, 'gallery/images/galleryArchive/IMG_7203.JPG', 5),
(55, NULL, NULL, 'gallery/images/galleryArchive/IMG_7206.JPG', 5),
(56, NULL, NULL, 'gallery/images/galleryArchive/IMG_7373.JPG', 5),
(57, NULL, NULL, 'gallery/images/galleryArchive/IMG_8234.JPG', 5),
(58, NULL, NULL, 'gallery/images/galleryArchive/IMG_8261.JPG', 5),
(59, NULL, NULL, 'gallery/images/galleryArchive/IMG_8283.JPG', 5),
(60, NULL, NULL, 'gallery/images/galleryArchive/IMG_8539.JPG', 5),
(62, NULL, NULL, 'gallery/images/galleryArchive/IMG_8630.JPG', 5),
(63, NULL, NULL, 'gallery/images/galleryArchive/IMG_8778.JPG', 5),
(64, NULL, NULL, 'gallery/images/galleryArchive/vm1.jpg', 6),
(65, NULL, NULL, 'gallery/images/galleryArchive/vm2.jpg', 6),
(66, NULL, NULL, 'gallery/images/galleryArchive/vm3.jpg', 6),
(67, NULL, NULL, 'gallery/images/galleryArchive/vm4.jpg', 6),
(68, NULL, NULL, 'gallery/images/galleryArchive/vm5.jpg', 6),
(69, NULL, NULL, 'gallery/images/galleryArchive/vm6.jpg', 6),
(70, NULL, NULL, 'gallery/images/galleryArchive/IMG_6473.JPG', 7),
(71, NULL, NULL, 'gallery/images/galleryArchive/IMG_7098.JPG', 7),
(72, NULL, NULL, 'gallery/images/galleryArchive/IMG_7110.JPG', 7),
(73, NULL, NULL, 'gallery/images/galleryArchive/IMG_7115.JPG', 7),
(74, NULL, NULL, 'gallery/images/galleryArchive/IMG_7125.JPG', 7),
(75, NULL, NULL, 'gallery/images/galleryArchive/IMG_7162.JPG', 7),
(76, NULL, NULL, 'gallery/images/galleryArchive/IMG_7234.JPG', 7),
(77, NULL, NULL, 'gallery/images/galleryArchive/IMG_7248.JPG', 7),
(78, NULL, NULL, 'gallery/images/galleryArchive/IMG_8416.JPG', 7),
(79, NULL, NULL, 'gallery/images/galleryArchive/IMG_8669.JPG', 7),
(80, NULL, NULL, 'gallery/images/galleryArchive/IMG_8704.JPG', 7);

-- --------------------------------------------------------

--
-- Table structure for table `homeblog`
--

CREATE TABLE IF NOT EXISTS `homeblog` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` text NOT NULL,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `homeblog`
--

INSERT INTO `homeblog` (`ID`, `Path`, `Title`, `Description`) VALUES
(1, '/Images/blogImages/cmaa1.jpg', 'Commercial Models', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum nibh dui, quis egestas nunc lacinia in. Nam augue quam, ultricies ut aliquet non, mollis ut nisi. Praesent luctus arcu semper sem tristique vehicula. Nullam sed tempor eros. Praesent faucibus arcu quis lorem porttitor, eget porta nibh hendrerit. Fusce mauris ante, lobortis nec imperdiet consequat, aliquet in leo. Fusce consequat, sapien ac viverra aliquam, massa mi sodales mauris, sed faucibus tellus leo ac arcu. Nam eros elit, cursus et suscipit nec, pharetra sed nisi. Etiam eget consequat dui. Quisque non maximus lorem, quis scelerisque nisl. Pellentesque efficitur dapibus purus nec dictum.'),
(2, '/Images/blogImages/cmaa6.jpg', 'Residential Models\n', '2nd Description'),
(3, '/Images/blogImages/Jellyfish.jpg', 'ModelShow Room\n', 'yea'),
(4, '/Images/blogImages/Lighthouse.jpg', 'High Rise', 'asdfasdfasdf'),
(5, '/Images/blogImages/Hydrangeas.jpg', 'Site Development\n', 'sadfafasd'),
(6, '/Images/blogImages/Chrysanthemum.jpg', 'Vessel Models\n', 'This is Site development Description'),
(7, '/Images/blogImages/vm2.jpg', 'Hotels, Condominium Office Building', 'This are the Vessels');

-- --------------------------------------------------------

--
-- Table structure for table `homecontext`
--

CREATE TABLE IF NOT EXISTS `homecontext` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` text NOT NULL,
  `Description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `homecontext`
--

INSERT INTO `homecontext` (`ID`, `Title`, `Description`) VALUES
(1, 'Context 1', 'Yes description.'),
(2, 'Context 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum nibh dui, quis egestas nunc lacinia in. Nam augue quam, ultricies ut aliquet non, mollis ut nisi. Praesent luctus arcu semper sem tristique vehicula. Nullam sed tempor eros. Praesent faucibus arcu quis lorem porttitor, eget porta nibh hendrerit. Fusce mauris ante, lobortis nec imperdiet consequat, aliquet in leo. Fusce consequat, sapien ac viverra aliquam, massa mi sodales mauris, sed faucibus tellus leo ac arcu. Nam eros elit, cursus et suscipit nec, pharetra sed nisi. Etiam eget consequat dui. Quisque non maximus lorem, quis scelerisque nisl. Pellentesque efficitur dapibus purus nec dictum.\r\n\r\nDonec eget nibh et quam feugiat fermentum. Praesent a blandit metus, eget consequat purus. Nam elementum ac velit sed interdum. Curabitur euismod massa a pellentesque mattis. Nam et elit eu ex dictum mollis. Cras nec tristique purus, eu commodo tellus. Nulla facilisis vestibulum felis, viverra tincidunt est sollicitudin nec. Fusce dictum erat vel enim vulputate, eget viverra felis sollicitudin. Sed quis dolor mattis enim facilisis tempus ac et enim. Aliquam erat volutpat. Mauris dignissim urna at ante commodo, posuere volutpat metus dignissim. In posuere justo sed semper lacinia.'),
(3, 'Context 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elementum nibh dui, quis egestas nunc lacinia in. Nam augue quam, ultricies ut aliquet non, mollis ut nisi. Praesent luctus arcu semper sem tristique vehicula. Nullam sed tempor eros. Praesent faucibus arcu quis lorem porttitor, eget porta nibh hendrerit. Fusce mauris ante, lobortis nec imperdiet consequat, aliquet in leo. Fusce consequat, sapien ac viverra aliquam, massa mi sodales mauris, sed faucibus tellus leo ac arcu. Nam eros elit, cursus et suscipit nec, pharetra sed nisi. Etiam eget consequat dui. Quisque non maximus lorem, quis scelerisque nisl. Pellentesque efficitur dapibus purus nec dictum.\r\n\r\nDonec eget nibh et quam feugiat fermentum. Praesent a blandit metus, eget consequat purus. Nam elementum ac velit sed interdum. Curabitur euismod massa a pellentesque mattis. Nam et elit eu ex dictum mollis. Cras nec tristique purus, eu commodo tellus. Nulla facilisis vestibulum felis, viverra tincidunt est sollicitudin nec. Fusce dictum erat vel enim vulputate, eget viverra felis sollicitudin. Sed quis dolor mattis enim facilisis tempus ac et enim. Aliquam erat volutpat. Mauris dignissim urna at ante commodo, posuere volutpat metus dignissim. In posuere justo sed semper lacinia.');

-- --------------------------------------------------------

--
-- Table structure for table `homegallery`
--

CREATE TABLE IF NOT EXISTS `homegallery` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Path` text NOT NULL,
  `Title` text,
  `Description` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `homegallery`
--

INSERT INTO `homegallery` (`ID`, `Path`, `Title`, `Description`) VALUES
(1, 'Images/UploadedImage/mainpage.png', 'Test Page One', 'This is our Description\r\nThis is our Description'),
(2, 'Images/UploadedImage/Desert.jpg', 'Test Page Two', ''),
(4, 'Images/UploadedImage/Penguins.jpg', '', 'LAte'),
(5, 'Images/UploadedImage/vm6.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `materiallist`
--

CREATE TABLE IF NOT EXISTS `materiallist` (
  `materiallistID` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialName` text NOT NULL,
  `Scale` int(11) NOT NULL,
  `Weight` int(11) NOT NULL,
  `MinimumRange` int(11) NOT NULL,
  `MaximumRange` int(11) NOT NULL,
  PRIMARY KEY (`materiallistID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `materiallist`
--

INSERT INTO `materiallist` (`materiallistID`, `MaterialName`, `Scale`, `Weight`, `MinimumRange`, `MaximumRange`) VALUES
(1, 'Pako', 20, 123, 10, 20),
(2, 'Bubong', 50, 12, 10, 100),
(3, 'Pako', 9, 6, 0, 12);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `materialsID` int(11) NOT NULL AUTO_INCREMENT,
  `projectID` int(11) NOT NULL,
  `usersID` int(11) NOT NULL,
  `materiallistID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`materialsID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`materialsID`, `projectID`, `usersID`, `materiallistID`, `Quantity`, `Date`) VALUES
(2, 10, 30, 1, 30, '2014-12-18'),
(3, 0, 0, 0, 0, '2015-01-29'),
(4, 0, 0, 0, 0, '2015-01-29'),
(5, 0, 0, 0, 0, '2015-01-30'),
(6, 0, 0, 0, 0, '2015-01-30'),
(7, 0, 0, 0, 0, '2015-01-30'),
(8, 0, 0, 0, 0, '2015-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `materialsproject`
--

CREATE TABLE IF NOT EXISTS `materialsproject` (
  `materialsPID` int(11) NOT NULL AUTO_INCREMENT,
  `mainprojectID` int(11) NOT NULL,
  `MaterialsStorageID` int(11) NOT NULL,
  `MPQuantity` int(11) NOT NULL,
  PRIMARY KEY (`materialsPID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `materialsproject`
--

INSERT INTO `materialsproject` (`materialsPID`, `mainprojectID`, `MaterialsStorageID`, `MPQuantity`) VALUES
(1, 10, 1, 60),
(2, 11, 4, 21),
(3, 10, 3, 74),
(4, 11, 3, 2),
(5, 11, 1, 1),
(6, 11, 2, 5),
(7, 41, 2, 13),
(8, 10, 2, 18),
(9, 41, 1, 4),
(10, 41, 4, 11),
(11, 52, 4, 5),
(12, 52, 1, 4),
(13, 52, 3, 3),
(14, 41, 7, 4),
(15, 41, 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `materialsprojectbreak`
--

CREATE TABLE IF NOT EXISTS `materialsprojectbreak` (
  `materialsBID` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialProjectID` int(11) NOT NULL,
  `MBQuantity` int(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL,
  `encoder` int(11) NOT NULL,
  PRIMARY KEY (`materialsBID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `materialsprojectbreak`
--

INSERT INTO `materialsprojectbreak` (`materialsBID`, `MaterialProjectID`, `MBQuantity`, `TimeStamp`, `encoder`) VALUES
(1, 2, 23, '2015-01-29 13:37:43', 1),
(2, 1, 342, '2015-01-29 13:38:15', 1),
(3, 1, 342, '2015-01-29 13:38:50', 1),
(4, 2, 233, '2015-01-30 00:12:07', 1),
(5, 1, 10, '2015-01-30 00:25:57', 1),
(6, 1, 1, '2015-01-30 00:27:08', 1),
(7, 1, 1, '2015-01-30 01:26:53', 1),
(8, 1, 1, '2015-01-30 01:28:15', 1),
(9, 3, 1, '2015-01-30 01:34:43', 1),
(10, 1, 1, '2015-01-30 01:34:48', 1),
(11, 1, 1, '2015-01-30 01:34:50', 1),
(12, 1, 1, '2015-01-30 01:34:55', 1),
(13, 3, 1, '2015-01-30 01:35:01', 1),
(14, 3, 1, '2015-01-30 01:35:02', 1),
(15, 3, 1, '2015-01-30 01:35:03', 1),
(16, 1, 1, '2015-01-30 01:56:06', 1),
(17, 1, 1, '2015-01-30 01:56:07', 1),
(18, 1, 1, '2015-01-30 01:59:44', 1),
(19, 1, 1, '2015-01-30 01:59:45', 1),
(20, 3, 1, '2015-01-30 01:59:51', 1),
(21, 3, 1, '2015-01-30 01:59:51', 1),
(22, 3, 1, '2015-01-30 01:59:52', 1),
(23, 3, 1, '2015-01-30 02:01:43', 1),
(24, 3, 1, '2015-01-30 02:01:44', 1),
(25, 3, 1, '2015-01-30 02:01:54', 1),
(26, 3, 1, '2015-01-30 02:01:56', 1),
(27, 3, 1, '2015-01-30 02:03:08', 1),
(28, 3, 1, '2015-01-30 02:03:10', 1),
(29, 3, 1, '2015-01-30 02:17:17', 1),
(30, 3, 1, '2015-01-30 02:17:18', 1),
(31, 3, 1, '2015-01-30 02:17:18', 1),
(32, 3, 1, '2015-01-30 02:17:19', 1),
(33, 3, 1, '2015-01-30 02:17:20', 1),
(34, 3, 1, '2015-01-30 02:17:21', 1),
(35, 3, 1, '2015-01-30 02:17:22', 1),
(36, 3, 1, '2015-01-30 02:17:23', 1),
(37, 4, 1, '2015-01-30 02:17:40', 1),
(38, 4, 1, '2015-01-30 02:17:43', 1),
(39, 5, 1, '2015-01-30 02:17:52', 1),
(40, 6, 5, '2015-01-30 02:20:48', 1),
(41, 7, 5, '2015-01-30 02:21:03', 1),
(42, 7, 5, '2015-01-30 02:21:06', 1),
(43, 8, 5, '2015-01-30 02:52:46', 1),
(44, 2, 4, '2015-01-30 02:53:55', 1),
(45, 8, 5, '2015-01-30 02:54:42', 1),
(46, 9, 2, '2015-01-30 03:51:32', 1),
(47, 9, 2, '2015-01-30 03:51:35', 1),
(48, 10, 3, '2015-01-30 03:56:04', 1),
(49, 10, 3, '2015-01-30 03:56:07', 1),
(50, 10, 3, '2015-01-30 03:56:10', 1),
(51, 8, 6, '2015-01-30 03:58:31', 1),
(52, 2, 3, '2015-01-30 04:10:59', 1),
(53, 2, 3, '2015-01-30 04:11:02', 1),
(54, 2, 3, '2015-01-30 04:11:04', 1),
(55, 11, 5, '2015-01-30 04:27:47', 1),
(56, 12, 4, '2015-01-30 04:27:55', 1),
(57, 13, 3, '2015-01-30 04:28:41', 1),
(58, 3, 1, '2015-01-30 05:07:36', 1),
(59, 3, 1, '2015-01-30 05:07:37', 1),
(60, 8, 1, '2015-01-30 05:13:01', 1),
(61, 8, 1, '2015-01-30 05:13:27', 1),
(62, 7, 1, '2015-01-30 07:38:00', 1),
(63, 7, 1, '2015-01-30 07:38:01', 1),
(64, 7, 1, '2015-01-30 07:38:02', 1),
(65, 14, 4, '2015-01-31 01:47:42', 11),
(66, 10, 2, '2015-01-31 12:35:49', 11),
(67, 15, 2, '2015-01-31 12:35:57', 11);

-- --------------------------------------------------------

--
-- Table structure for table `materialsstorage`
--

CREATE TABLE IF NOT EXISTS `materialsstorage` (
  `materialsSID` int(11) NOT NULL AUTO_INCREMENT,
  `MaterialName` text NOT NULL,
  `MaterialsTypeID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Minimum` int(11) NOT NULL,
  `AlertNot` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`materialsSID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `materialsstorage`
--

INSERT INTO `materialsstorage` (`materialsSID`, `MaterialName`, `MaterialsTypeID`, `Quantity`, `Minimum`, `AlertNot`) VALUES
(1, 'Pako', 2, 0, 8, 0),
(2, 'Bubong', 1, 4, 10, 0),
(3, 'Post', 1, 7, 5, 0),
(4, 'Rugby', 1, 41, 10, 0),
(6, 'Martilyo', 1, 19, 5, 0),
(7, 'Keyboard', 1, 1, 1, 0),
(8, 'Epoxy-Grams', 2, 14, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `materialstype`
--

CREATE TABLE IF NOT EXISTS `materialstype` (
  `materialsTID` int(11) NOT NULL AUTO_INCREMENT,
  `Types` text NOT NULL,
  PRIMARY KEY (`materialsTID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `materialstype`
--

INSERT INTO `materialstype` (`materialsTID`, `Types`) VALUES
(1, 'Unit Count'),
(2, 'Weight'),
(3, 'Volume');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `projectID` int(11) NOT NULL AUTO_INCREMENT,
  `adminOwner` int(11) DEFAULT '1',
  `userID` int(11) NOT NULL,
  `ProjectName` text NOT NULL,
  `Activated` int(11) NOT NULL DEFAULT '0',
  `projectcategoryID` int(11) NOT NULL DEFAULT '0',
  `filePath` text,
  `View` int(11) NOT NULL DEFAULT '0',
  `Employees` text,
  `Scale` text,
  PRIMARY KEY (`projectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`projectID`, `adminOwner`, `userID`, `ProjectName`, `Activated`, `projectcategoryID`, `filePath`, `View`, `Employees`, `Scale`) VALUES
(10, 2, 3, 'HuhuProject', 2, 1, '../ProfilePic/Penguins.jpg', 0, '', 'ETO PO ANG SCALe'),
(11, 1, 3, 'TestLocalProjectA', 2, 1, '../ProfilePic/Penguins.jpg', 0, 'Test Load', NULL),
(40, 2, 29, 'Wohnsitzbestatigung_Razel.pdf', 3, 0, '', 0, NULL, NULL),
(41, 2, 2, '#journeytomarsNASA.pdf', 2, 2, '../ProfilePic/Penguins.jpg', 0, '', NULL),
(42, 2, 30, '#journeytomarsNASA.pdf', 3, 0, '', 0, NULL, NULL),
(43, 2, 33, '#journeytomarsNASA.pdf', 0, 0, '', 2, NULL, NULL),
(44, 2, 34, '112_Receipt_4_FairyClean_HK_2013.pdf', 0, 0, '', 3, NULL, NULL),
(45, 2, 35, '6-CO-HK-VIRTUAL-OFFICES.pdf', 0, 0, '', 0, NULL, NULL),
(46, 2, 36, '../proposalPDF/Bonus_5_Types_Of_Orgasms.pdf', 0, 0, '', 0, NULL, NULL),
(47, 2, 37, '#journeytomarsNASA.pdf', 0, 0, '../proposalPDF/#journeytomarsNASA.pdf', 0, NULL, NULL),
(48, 2, 2, 'This is new project', 0, 2, '../ProfilePic/Abschluss_2010_FC.PDF', 0, NULL, NULL),
(49, 1, 2, 'This project name', 0, 1, '../ProfilePic/6-CO-HK-VIRTUAL-OFFICES.pdf', 0, NULL, NULL),
(50, 1, 1, 'This is my ProjectArch', 4, 1, '../ProfilePic/mario bros..PNG', 0, '', NULL),
(51, 2, 1, 'My Own Project', 1, 2, '../ProfilePic/10882246_982822015078992_8271693759579988532_n.jpg', 0, '', NULL),
(52, 2, 29, 'Myles', 1, 1, '../ProfilePic/Royal Maids logo.pdf', 0, 'this is Employee', NULL),
(53, 3, 3, 'Testing Proposal No. 1', 1, 1, '../ProfilePic/Tekken neutral game guide full finished v1.0.pdf', 0, '', NULL),
(55, 1, 40, 'Ceiling Pro 1.pdf', 0, 0, '../proposalPDF/Ceiling Pro 1.pdf', 0, NULL, NULL),
(56, 1, 41, 'Staff English Report.pdf', 0, 0, '../proposalPDF/Staff English Report.pdf', 0, NULL, NULL),
(57, 1, 42, 'TORQ.LIMITED.INVOICE2.pdf', 0, 0, '../proposalPDF/TORQ.LIMITED.INVOICE2.pdf', 0, NULL, NULL),
(58, 1, 43, 'h97-chipset-brief.pdf', 1, 0, '../proposalPDF/h97-chipset-brief.pdf', 0, '', NULL),
(59, 1, 44, 'Cranked Joint.pdf', 1, 0, '../proposalPDF/Cranked Joint.pdf', 2, NULL, NULL),
(60, 1, 45, 'Celi To (April 16th).pdf', 0, 0, '../proposalPDF/Celi To (April 16th).pdf', 0, NULL, NULL),
(61, 38, 43, 'this is our Admin', 0, 2, '../proposalPDF/Mr. Justin.Temara(Client 105).pdf', 0, NULL, NULL),
(62, 1, 30, 'ETO NANAAMN', 0, 1, '../proposalPDF/112_Receipt_4_FairyClean_HK_2013.pdf', 0, NULL, NULL),
(63, 2, 40, 'LAETO', 0, 2, '../proposalPDF/Celi To (April 16th).pdf', 0, NULL, NULL),
(64, 1, 44, 'COMEIN', 0, 1, '../proposalPDF/cleaning service invoice.pdf', 0, NULL, NULL),
(65, 1, 3, 'Trying To send', 0, 1, '../proposalPDF/cleaning service invoice.pdf', 0, NULL, NULL),
(66, 1, 3, 'Magnanakaw', 0, 2, '../proposalPDF/Fairyclean HG17404.pdf', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projectbalance`
--

CREATE TABLE IF NOT EXISTS `projectbalance` (
  `projectID` int(11) NOT NULL AUTO_INCREMENT,
  `Balance` text NOT NULL,
  PRIMARY KEY (`projectID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `projectbalance`
--

INSERT INTO `projectbalance` (`projectID`, `Balance`) VALUES
(10, '123'),
(11, '554'),
(53, '555555');

-- --------------------------------------------------------

--
-- Table structure for table `projectcategory`
--

CREATE TABLE IF NOT EXISTS `projectcategory` (
  `projectcategoryID` int(11) NOT NULL AUTO_INCREMENT,
  `CategoryName` text NOT NULL,
  PRIMARY KEY (`projectcategoryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `projectcategory`
--

INSERT INTO `projectcategory` (`projectcategoryID`, `CategoryName`) VALUES
(0, 'Not Set'),
(1, 'Village'),
(2, 'Building');

-- --------------------------------------------------------

--
-- Table structure for table `projectfiles`
--

CREATE TABLE IF NOT EXISTS `projectfiles` (
  `projectFilesID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `pathfile` text NOT NULL,
  `filename` text NOT NULL,
  `projectID` int(11) NOT NULL,
  `TimeStamp` timestamp NOT NULL,
  `Uploader` int(11) DEFAULT NULL,
  PRIMARY KEY (`projectFilesID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `projectfiles`
--

INSERT INTO `projectfiles` (`projectFilesID`, `userID`, `pathfile`, `filename`, `projectID`, `TimeStamp`, `Uploader`) VALUES
(12, 2, '../proposalPDF/6-CO-HK-VIRTUAL-OFFICES.pdf', '', 10, '0000-00-00 00:00:00', NULL),
(13, 3, '../proposalPDF/6-CO-HK-VIRTUAL-OFFICES.pdf', '', 11, '0000-00-00 00:00:00', NULL),
(23, 29, '../proposalPDF/Wohnsitzbestatigung_Razel.pdf', '', 40, '0000-00-00 00:00:00', NULL),
(24, 30, '../proposalPDF/#journeytomarsNASA.pdf', '', 41, '0000-00-00 00:00:00', NULL),
(25, 31, '../proposalPDF/#journeytomarsNASA.pdf', '', 42, '0000-00-00 00:00:00', NULL),
(26, 33, '../proposalPDF/#journeytomarsNASA.pdf', '', 1, '0000-00-00 00:00:00', NULL),
(27, 34, '../proposalPDF/112_Receipt_4_FairyClean_HK_2013.pdf', '', 1, '0000-00-00 00:00:00', NULL),
(28, 35, '../proposalPDF/6-CO-HK-VIRTUAL-OFFICES.pdf', '', 1, '0000-00-00 00:00:00', NULL),
(29, 36, '../proposalPDF/Bonus_5_Types_Of_Orgasms.pdf', '', 1, '0000-00-00 00:00:00', NULL),
(30, 37, '../proposalPDF/#journeytomarsNASA.pdf', '', 1, '0000-00-00 00:00:00', NULL),
(32, 40, '../proposalPDF/Ceiling Pro 1.pdf', '', 1, '2015-02-02 10:19:37', NULL),
(33, 41, '../proposalPDF/Staff English Report.pdf', '', 1, '2015-02-02 10:41:25', NULL),
(34, 42, '../proposalPDF/TORQ.LIMITED.INVOICE2.pdf', '', 57, '2015-02-02 10:46:17', NULL),
(35, 0, '../proposalPDF/', '', 0, '2015-02-02 11:00:47', NULL),
(36, 0, '../proposalPDF/', '', 53, '2015-02-02 11:42:29', NULL),
(37, 0, '../proposalPDF/', '', 53, '2015-02-02 11:46:48', 0),
(38, 3, '../proposalPDF/', '', 53, '2015-02-02 14:18:24', 1),
(39, 3, '../proposalPDF/Authorisation.pdf', '', 53, '2015-02-02 14:20:19', 1),
(40, 42, '../proposalPDF/113_Invoice_2_FairyClean_HK_2013 Invoice.pdf', '113_Invoice_2_FairyClean_HK_2013 Invoice.pdf', 57, '2015-02-02 14:37:08', 1),
(41, 3, '../proposalPDF/Bonus_Her_Best_Lover_Ever.pdf', 'Bonus_Her_Best_Lover_Ever.pdf', 53, '2015-02-02 14:37:35', 1),
(42, 42, '../proposalPDF/Connection bulok.PNG', 'Connection bulok.PNG', 57, '2015-02-03 03:33:18', 1),
(43, 3, '../proposalPDF/14982golf_ball_on_tee.jpg', '14982golf_ball_on_tee.jpg', 53, '2015-02-03 04:20:50', 3),
(44, 3, '../proposalPDF/14982golf_ball_on_tee.jpg', '14982golf_ball_on_tee.jpg', 10, '2015-02-04 05:23:14', 3),
(45, 3, '../proposalPDF/14982golf_ball_on_tee.jpg', '14982golf_ball_on_tee.jpg', 11, '2015-02-04 05:47:44', 3),
(46, 3, '../proposalPDF/bbd4b7db6bfc4bf099174b9d9386764a.jpeg', 'bbd4b7db6bfc4bf099174b9d9386764a.jpeg', 53, '2015-02-04 05:50:13', 3),
(47, 3, '../proposalPDF/HOW TO USE API.docx', 'HOW TO USE API.docx', 11, '2015-02-04 05:52:40', 1),
(48, 3, '../proposalPDF/HOW TO USE API.docx', 'HOW TO USE API.docx', 10, '2015-02-04 05:53:40', 1),
(49, 29, '../proposalPDF/HOW TO USE API.docx', 'HOW TO USE API.docx', 52, '2015-02-04 05:54:22', 1),
(50, 3, '../proposalPDF/Arbeitsvertrag - Sample - Royal Maids.docx', 'Arbeitsvertrag - Sample - Royal Maids.docx', 53, '2015-02-04 05:55:25', 1),
(51, 3, '../proposalPDF/changes required.txt', 'changes required.txt', 53, '2015-02-04 05:55:47', 1),
(52, 3, '../proposalPDF/eto.PNG', 'eto.PNG', 53, '2015-02-04 05:57:54', 3),
(53, 3, '../proposalPDF/18hrs.PNG', '18hrs.PNG', 53, '2015-02-04 05:58:28', 3),
(54, 43, '../proposalPDF/h97-chipset-brief.pdf', 'h97-chipset-brief.pdf', 58, '2015-02-04 09:07:49', 43),
(55, 44, '../proposalPDF/Cranked Joint.pdf', 'Cranked Joint.pdf', 59, '2015-02-04 09:13:04', 44),
(56, 45, '../proposalPDF/Celi To (April 16th).pdf', 'Celi To (April 16th).pdf', 60, '2015-02-04 09:17:25', 45),
(57, 43, '../proposalPDF/Mr. Justin.Temara(Client 105).pdf', 'Mr. Justin.Temara(Client 105).pdf', 61, '2015-02-04 09:33:43', 0),
(58, 30, '../proposalPDF/112_Receipt_4_FairyClean_HK_2013.pdf', '112_Receipt_4_FairyClean_HK_2013.pdf', 62, '2015-02-04 09:38:13', 0),
(59, 40, '../proposalPDF/Celi To (April 16th).pdf', 'Celi To (April 16th).pdf', 63, '2015-02-04 09:39:31', 0),
(60, 44, '../proposalPDF/cleaning service invoice.pdf', 'cleaning service invoice.pdf', 64, '2015-02-04 09:41:17', 1),
(61, 3, '../proposalPDF/cleaning service invoice.pdf', 'cleaning service invoice.pdf', 65, '2015-02-04 12:13:42', 3),
(62, 3, '../proposalPDF/Fairyclean HG17404.pdf', 'Fairyclean HG17404.pdf', 66, '2015-02-04 12:33:53', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projectgallery`
--

CREATE TABLE IF NOT EXISTS `projectgallery` (
  `projectgalleryID` int(11) NOT NULL AUTO_INCREMENT,
  `projectID` int(11) NOT NULL,
  `ImageName` text NOT NULL,
  `ImagePath` text NOT NULL,
  `Approved` int(11) NOT NULL,
  PRIMARY KEY (`projectgalleryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `projectgallery`
--

INSERT INTO `projectgallery` (`projectgalleryID`, `projectID`, `ImageName`, `ImagePath`, `Approved`) VALUES
(1, 10, 'bbd4b7db6bfc4bf099174b9d9386764a.jpeg', 'projectGallery/bbd4b7db6bfc4bf099174b9d9386764a.jpeg', 1),
(2, 10, 'item_21092_1280px_52160472879f49efa5324e4043139b50.jpeg', 'projectGallery/item_21092_1280px_52160472879f49efa5324e4043139b50.jpeg', 0),
(3, 10, 'bruceHOGedited.png', 'projectGallery/bruceHOGedited.png', 0),
(5, 10, '10882246_982822015078992_8271693759579988532_n.jpg', 'projectGallery/10882246_982822015078992_8271693759579988532_n.jpg', 0),
(6, 53, '1st time I saw this lol B.PNG', 'projectGallery/1st time I saw this lol B.PNG', 0),
(7, 10, '14982golf_ball_on_tee.jpg', 'projectGallery/14982golf_ball_on_tee.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `usersID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` text NOT NULL,
  `FirstName` text,
  `LastName` text,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  `Activated` int(11) DEFAULT '0',
  `Role` int(11) NOT NULL,
  `Avatar` text,
  PRIMARY KEY (`usersID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersID`, `UserName`, `FirstName`, `LastName`, `Email`, `Password`, `Activated`, `Role`, `Avatar`) VALUES
(1, 'Hwoarang', 'Trial', 'trying', 'tyr@gmail.com', '912ec803b2ce49e4a541068d495ab570', 1, 1, '/Images/userAvatar/Koala.jpg'),
(2, 'Testing', 'First', 'Last', 'Email@Email.com', '962012d09b8170d912f0669f6d7d9d07', 1, 2, NULL),
(3, 'Makubex', 'Makube', 'Xavier', 'Maku@yahoo.com', '5737c6ec2e0716f3d8a7a5c4e0de0d9a', 1, 3, NULL),
(29, 'thsiUSer', '', '', 'asdg@gam.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(30, 'bruisemaker', 'myFirstName', '', 'lala@a.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(38, 'myUsername', '', '', 'thisEMAIL', '', 1, 2, NULL),
(39, 'ThisisJames', '', '', 'localEmail@yahoo.com', 'efa1fa91e866ca93a4c02535b43f0de5', 0, 1, NULL),
(40, 'ThisLocale', '', '', 'fasdfa@haol.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(41, 'TrialUsername', '', '', 'asdfasf@yahoo.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(42, 'NextUsername', '', '', 'lala@yahads.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(43, 'TestUsername20', '', '', 'e241241@yahoo.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(44, 'bruceirvin', '', '', 'b2d43ff1@yahoo.com', 'efa1fa91e866ca93a4c02535b43f0de5', 1, 3, NULL),
(45, 'decline mo ko', '', '', 'asfa@yahoo.com', 'efa1fa91e866ca93a4c02535b43f0de5', 3, 3, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
