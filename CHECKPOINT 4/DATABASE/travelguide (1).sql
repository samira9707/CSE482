-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 18, 2021 at 06:53 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `up_time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `user_id`, `status`, `up_time`) VALUES
(47, 'Chittagong ', '      sample text about chittagong city.', 'ctg.jpg', 7, 1, '02:21 PM (18-04-2021)'),
(49, 'Khulna', 'beautiful khulnaa', 'khulna.jpg', 7, 1, '04:26 PM (18-04-2021)'),
(50, 'Coxs Bazar', 'beautiful sea in bangladesh.', 'coxs.jpg', 7, 1, '05:17 PM (18-04-2021)'),
(51, 'Dhaka City', ' gisfgvkvrtfg', 'dhaka.jpg', 7, 1, '05:19 PM (18-04-2021)'),
(52, 'New Place', '', 'rajshahi.jpg', 11, 1, '07:48 PM (18-04-2021)');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comment`
--

DROP TABLE IF EXISTS `blog_comment`;
CREATE TABLE IF NOT EXISTS `blog_comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `ctime` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_comment`
--

INSERT INTO `blog_comment` (`comment_id`, `comment`, `ctime`, `user_id`, `blog_id`) VALUES
(4, 'Woooo', '08:22 PM (18-04-2021)', 11, 52),
(5, 'Hello', '08:25 PM (18-04-2021)', 11, 52),
(7, 'Kop!', '11:38 PM (18-04-2021)', 19, 52),
(8, 'WOW!!', '12:32 AM (19-04-2021)', 20, 51);

-- --------------------------------------------------------

--
-- Table structure for table `gl_comment`
--

DROP TABLE IF EXISTS `gl_comment`;
CREATE TABLE IF NOT EXISTS `gl_comment` (
  `gl_comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(45) DEFAULT NULL,
  `gl_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`gl_comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guideline`
--

DROP TABLE IF EXISTS `guideline`;
CREATE TABLE IF NOT EXISTS `guideline` (
  `guideline_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`guideline_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `image_text` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(18, 'khulna.jpg', 'Khulna'),
(17, 'ctg.jpg', 'Chittagong'),
(19, 'coxs.jpg', 'Cox\'s Bazar'),
(20, 'rajshahi.jpg', 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(45) DEFAULT NULL,
  `l_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `fb_link` varchar(100) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `email`, `phone`, `address`, `image`, `fb_link`, `password`, `status`) VALUES
(7, 'Abir ', 'Farajee', 'abirfarajee80@gmail.com', '01622124013', 'Uttara, Dhaka-1230', 'download.jpg', 'https://www.facebook.com/abir.farajee/', 'd54d1702ad0f8326224b817c796763c9', 1),
(11, 'Wegrab Technologies', NULL, 'wegrab.tech@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gil4bkoAaKtoTXntx1XHZGw-FGfPsyi006vHpJT=s96-c', NULL, NULL, 1),
(19, 'GhureFiri Bangladesh', NULL, 'ghurefiribangladesh@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiU2SHwH8hl_NGfgh6_oRT_phftVdg7oody9Uwm=s96-c', NULL, NULL, 1),
(20, 'Foodie Views', NULL, 'foodieviewsorg@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GjRBTP_adqPx9ZZfnKboNoVaqdHjWlT1XyG9szh=s96-c', NULL, NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
