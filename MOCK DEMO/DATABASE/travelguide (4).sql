-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2021 at 08:00 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Travel Giude Admin', 'admin', 'admin123');

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
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `user_id`, `status`, `up_time`) VALUES
(47, 'Chittagong ', '      sample text about chittagong city.', 'ctg.jpg', 7, 1, '02:21 PM (18-04-2021)'),
(49, 'Khulna', 'beautiful khulnaa', 'khulna.jpg', 7, 1, '04:26 PM (18-04-2021)'),
(50, 'Coxs Bazar', 'beautiful sea in bangladesh.', 'coxs.jpg', 7, 1, '05:17 PM (18-04-2021)'),
(51, 'Dhaka City', ' gisfgvkvrtfg', 'dhaka.jpg', 7, 1, '05:19 PM (18-04-2021)'),
(52, 'New Place', ' Nice Place', 'rajshahi.jpg', 11, 1, '07:48 PM (18-04-2021)'),
(56, 'test 2', 'hwllo', 'dhaka.jpg', 21, 0, '12:06 PM (19-04-2021)');

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
  `ctime` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gl_comment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gl_comment`
--

INSERT INTO `gl_comment` (`gl_comment_id`, `comment`, `gl_id`, `user_id`, `ctime`) VALUES
(1, 'Good tips.', 1, 7, '12:45 AM (03-05-2021)'),
(2, 'Thanks.', 1, 7, '12:47 AM (03-05-2021)');

-- --------------------------------------------------------

--
-- Table structure for table `guideline`
--

DROP TABLE IF EXISTS `guideline`;
CREATE TABLE IF NOT EXISTS `guideline` (
  `guideline_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(500) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `place` varchar(45) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`guideline_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guideline`
--

INSERT INTO `guideline` (`guideline_id`, `title`, `image`, `description`, `place`, `time`) VALUES
(1, 'Easy way to go Sajek', 'asjek.jpg', 'test test test test ', 'Sajek', '12:50 PM (02-05-2021)'),
(2, 'Coxâ€™s Bazar Tour Guide|you should know before travel', 'coxs.jpg', 'How to go Coxâ€™s Bazar:\r\n\r\nThe fasted way to get from Dhaka to Coxâ€™s Bazar is to fly which costs $50-$430 and takes 3h 1m. The road distance between Dhaka to Coxâ€™s Bazar is about 387.5 km.\r\n\r\n\r\nThe cheapest way to get Dhaka to Coxâ€™s Bazar is by bus which costs $31-$34 and takes 11h 40m.\r\n\r\n\r\nCoxâ€™s Bazar bus goes directly to the major cities of the country including Dhaka. For example, Chittagong, Khulna, Sylhet, Rangpur, etc. There are many non-AC buses from Dhaka like Shyamoli, TR, Hanif, Unique, S Alam, Saadia, etc. The rent will be 800Taka. And if there is a Green Line, Saudia, Desh Travels, TR, Sohag, etc. The fare will be 1600 (Economy Class) â€“ Tk 2000 (Business Class). It may take 12-14 hours. Coxâ€™s Bazar car is available from Chittagong every hour from Baddhar Hat. Most cars are also extremely local. S Alam and Saadia offer good service, leave from Garibullah Shah Mazar, Dampara.\r\n\r\n\r\nWhat is the best time to go to Coxâ€™s Bazar tour?\r\n\r\nCoxâ€™s Bazar is a place where you can have fun anytime. Anytime you can visit Coxâ€™s Bazar tour and that will be enjoyable.\r\n\r\n\r\nThe peak season of Coxâ€™s Bazar is from October to March. During this time more tourists come due to the lack of rain. In addition, the beaches are more enjoyable in winter but crowded. Although there is an off-peak season, there are many tourists after two Eid. It is not right to leave without booking at this time. In the off-season, hotels offer discounts of 30% to 60%. In addition, during the monsoon, the waves are very large. St. Martinâ€™s ships usually run from October to April. If you wish to board the ship, you can leave at that time.\r\n\r\n\r\nAccommodation in Coxâ€™s Bazar\r\n\r\nCurrently, there are several hotels in the Fivestar category for accommodation in Coxâ€™s Bazar. As well as there are many hotels and resorts under the four-star and three-star. Most hotels near the beach are of good quality. At present, hotels in Coxâ€™s Bazar have a capacity of about 1,50,000 peoples. So, there is a possibility of getting a hotel even if you have not booked. However, this risk may not be appropriate in late December and early New Year.\r\n\r\n\r\nThe hotel and resort area located at Kalatali and Laboni points. Several hotels have also been set up to stay in the vicinity of Inani. Apart from this, there are eco-resorts. Seasonal payoffs vary between peak and off-peak room rentals. September to April is the peak time of the year and May to August are considered off-peak time. Up to 25%-50% discount on hotel rentals at off-peak times. There are many hotels of general quality just a short distance from the beach.\r\n\r\n\r\nThe 5 Best Family Tour Hotels in Coxâ€™s Bazar\r\n\r\nLong Beach Hotel\r\nGrace Cox Smart Hotel\r\nHotel Water Orchid\r\nHotel Quality Home\r\nHotel Ocean Palace\r\n\r\nFrom where to have a meal\r\n\r\nWe know that every hotel has its own restaurant, where the price of food is relatively high. You can have your breakfast, lunch, and dinner in your booked restaurant otherwise you can have breakfast, lunch, and dinner outside. There are more restaurants in Kalatali Road. Zhouban, Live Fish, Coila, Poushy, Stone Forest, Taranga, Kanshavn, Pankouri, Niribili Orchid Club and Restaurant, Mermaid Cafe and Divine Sea Stone Cafe. In the mentioned places, all kinds of food are available, from rice to marine fish, meat, rice-fried, dried fish. It is important to know the price before ordering a meal. Apart from the food, there are several restaurants on the beach at Kalatali Beach to enjoy the beauty of the sea and the afternoon sunset.', 'Coxs Bazar', '12:30 PM (03-05-2021)');

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
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

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
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`link_id`, `link`, `name`) VALUES
(1, 'https://www.toursbylocals.com/Bangladesh-Tours', 'tours by local'),
(2, 'https://travelbd.xyz/', 'Travel Bangladesh - à¦Ÿà§à¦°à¦¾à¦­à§‡à¦² à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶'),
(3, 'https://www.sharetrip.net/', 'ShareTrip: Best travel agency in Bangladesh'),
(4, 'http://www.tourismboard.gov.bd/', 'à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶ à¦Ÿà§à¦¯à§à¦°à¦¿à¦œà¦® à¦¬à§‹à¦°à§à¦¡'),
(5, 'https://www.deshghuri.com/bangladesh-travel/', 'Bangladesh Travel - Authentic Experience - Deshghuri');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_link` varchar(400) NOT NULL,
  `news_text` varchar(500) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_link`, `news_text`) VALUES
(1, 'https://bdnews24.com/bangladesh/2021/05/01/bangladesh-resumes-international-flights-with-some-curbs-on-travel', 'Bangladesh resumes international flights, with some curbs on travel'),
(2, 'https://timesofindia.indiatimes.com/travel/travel-news/bangladesh-temporarily-closes-land-borders-with-india-due-to-rise-in-covid-cases/as82265288.cms', 'Bangladesh temporarily closes land borders with India due to rise in COVID  cases');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `place_id` int(11) NOT NULL AUTO_INCREMENT,
  `place_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`place_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`) VALUES
(1, 'Sajek'),
(2, 'Bandarban'),
(3, 'Coxs Bazar');

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `f_name`, `l_name`, `email`, `phone`, `address`, `image`, `fb_link`, `password`, `status`) VALUES
(7, 'Abir ', 'Farajee', 'abirfarajee80@gmail.com', '01622124013', 'Uttara, Dhaka-1230', 'download.jpg', 'https://www.facebook.com/abir.farajee/', 'd54d1702ad0f8326224b817c796763c9', 1),
(11, 'Wegrab Technologies', NULL, 'wegrab.tech@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14Gil4bkoAaKtoTXntx1XHZGw-FGfPsyi006vHpJT=s96-c', NULL, NULL, 1),
(19, 'GhureFiri Bangladesh', NULL, 'ghurefiribangladesh@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GiU2SHwH8hl_NGfgh6_oRT_phftVdg7oody9Uwm=s96-c', NULL, NULL, 1),
(20, 'Foodie Views', NULL, 'foodieviewsorg@gmail.com', NULL, NULL, 'https://lh3.googleusercontent.com/a-/AOh14GjRBTP_adqPx9ZZfnKboNoVaqdHjWlT1XyG9szh=s96-c', NULL, NULL, 1),
(21, 'Mahbubul Kabir Farajee', '', 'mk.farajee@ieee.org', '01622124012', '', 'download.jpg', '', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
