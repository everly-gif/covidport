-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 14, 2021 at 07:57 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-hackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int NOT NULL AUTO_INCREMENT,
  `comment` text NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `author_id` int NOT NULL,
  `parent_id` int NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_id` int NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=323 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment`, `comment_author`, `author_id`, `parent_id`, `date`, `post_id`) VALUES
(322, 'Congratulations!!\n Is it normal to feel that way? cuz I feel the same way, I was discharged few weeks back.', 'example', 13, 0, '2021-07-13 19:56:20', 66),
(320, 'Also zzz is providing some as well, do contact them', 'example', 13, 0, '2021-07-13 19:54:43', 63),
(318, 'Glad you are doing great now!', 'example', 13, 0, '2021-07-13 19:53:44', 64),
(319, 'Hey XYZ is providing some, you should contact them immediately', 'example', 13, 0, '2021-07-13 19:54:14', 63),
(317, 'This is so motivating ! So proud of you!', 'exampl2', 14, 0, '2021-07-13 19:52:53', 62),
(315, 'Such a important Discussion', 'exampl2', 14, 0, '2021-07-13 19:52:09', 61),
(316, 'Worth a read', 'exampl2', 14, 0, '2021-07-13 19:52:25', 61);

-- --------------------------------------------------------

--
-- Table structure for table `orgs`
--

DROP TABLE IF EXISTS `orgs`;
CREATE TABLE IF NOT EXISTS `orgs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `org` text NOT NULL,
  `field` text NOT NULL,
  `website` text NOT NULL,
  `place` text NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orgs`
--

INSERT INTO `orgs` (`id`, `org`, `field`, `website`, `place`, `status`) VALUES
(1, 'Akshaya Patra', 'food and grocery kits', 'https://www.akshayapatra.org/covid-relief-services/', 'Chennai', 'approved'),
(2, 'Dream Girl Foundation', 'Food', 'https://dreamgirlfoundation.ngo/covid-19-response-ngo/', 'Chennai', 'approved'),
(3, 'Mission Oxygen', 'Oxygen Cylinders', 'https://missionoxygen.org', 'Delhi NCR', 'approved'),
(4, 'Bhumi NGO', 'This fundraiser will support interventions with partner hospitals and other NGOs to address the shortage of oxygen and critical supplies.', 'https://fundraisers.giveindia.org/fundraisers/covid-help-bhumi', 'Chennai', 'approved'),
(5, 'Pharm Foundation', 'Help The Transgender Community Survive Covid-19 2nd Wave In India', 'https://milaap.org/fundraisers/support-m-nila', 'Chennai', 'approved'),
(6, 'Dream Girl Foundation', 'Oxygen Cylinders', 'https://dreamgirlfoundation.ngo/covid-19-response-ngo/', 'Chennai', 'not approved');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `short-desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `user_id` int NOT NULL,
  `author` varchar(255) NOT NULL,
  `date_published` datetime NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `short-desc`, `category`, `content`, `user_id`, `author`, `date_published`) VALUES
(64, 'My Mental Health Journey', 'My mental health journey', 'recovery-stories', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 14, 'exampl2', '2021-07-14 01:11:30'),
(63, 'Need Oxygen cylinder', 'Chennai', 'help', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 14, 'exampl2', '2021-07-14 01:10:34'),
(61, 'let\\\'s talk about our mental health shall we?', 'A much needed discussion on our mental healths during quarantine', 'Discussion', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 13, 'example', '2021-07-14 01:06:18'),
(62, 'My recovery story', 'My health journey', 'recovery-stories', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 13, 'example', '2021-07-14 01:07:39'),
(60, 'let\\\'s talk about our mental health shall we?', 'A much needed discussion on our mental healths during quarantine', 'Discussion', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 13, 'example', '2021-07-14 01:05:50'),
(65, 'Need help with donars', 'Delhi', 'help', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 14, 'exampl2', '2021-07-14 01:12:16'),
(66, 'My Journey to Full recovery and Happiness', 'My journey to happiness', 'recovery-stories', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 14, 'exampl2', '2021-07-14 01:13:06'),
(67, 'Need Verified Leads for Oxygen Cylinders', 'Delhi', 'help', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer blandit risus vitae maximus ornare. Proin ac tempor erat. Duis cursus at libero et maximus. Sed vitae finibus odio. Mauris arcu diam, eleifend ut tortor eget, tempor dapibus nunc. In pretium pulvinar aliquam. Proin aliquam augue elementum, euismod lacus vel, tempor purus. Aenean sollicitudin ipsum quis nisi interdum porttitor. Maecenas nec suscipit dui.</p>\r\n\r\n<p>Sed dignissim ex erat, sed interdum libero iaculis quis. Etiam venenatis nisl eu elit viverra, feugiat maximus neque condimentum. Nulla varius est consequat leo pharetra, at dictum nunc commodo. Donec libero diam, tincidunt nec dui sed, aliquam pretium orci. Maecenas tincidunt tellus nibh, et efficitur dolor iaculis quis. Duis eu enim nec diam pretium tristique. Nulla sit amet semper turpis, vitae mattis turpis. Fusce mi purus, varius eu odio vitae, malesuada maximus nibh. Pellentesque in urna ut elit fringilla mattis. In molestie vel orci eget pellentesque. Vivamus vel libero vitae tellus pharetra maximus. Phasellus imperdiet volutpat nibh eget pellentesque. Fusce augue tortor, ultricies non scelerisque vitae, pretium eu urna. Cras elementum ullamcorper dolor ac varius. Fusce sed varius sapien.</p>\r\n', 14, 'exampl2', '2021-07-14 01:14:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile_no`) VALUES
(14, 'exampl2', 'example2@example.com', '$2y$10$4pWHObN1hfCaQ2aqkm6aFuswqEKGZ.PsoVUZdM9TuSWvwweT4HvnS', '1111111111'),
(13, 'example', 'example@example.com', '$2y$10$UDVqkqW3V6aD7bTI6HAwvuNZl9lET6PInTl77Yz59t1rHE11dHXh6', '0000000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
