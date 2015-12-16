-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2015 at 02:39 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ojt_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_articles`
--

CREATE TABLE IF NOT EXISTS `blog_articles` (
`article_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article_body` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_articles`
--

INSERT INTO `blog_articles` (`article_id`, `title`, `article_body`) VALUES
(1, 'Hello World', 'Hello Justin Bieber, this is "My World". What? "What do you mean"?? Oh i am "Sorry"!'),
(2, 'Another article', 'Oh yeah, you''ve read it');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE IF NOT EXISTS `blog_comments` (
`comment_id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `comment` text CHARACTER SET latin1 NOT NULL,
  `time` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `cmt_article_id` int(11) NOT NULL,
  `user_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`comment_id`, `name`, `email`, `comment`, `time`, `cmt_article_id`, `user_id`) VALUES
(153, 'jccultima123', 'johncyrillcorsanes@gmail.com', 'I commented using AJAX! Try some!', '2015-12-16 - 09:28 a', 1, NULL),
(154, 'jccultima123', 'johncyrillcorsanes@gmail.com', 'I commented once again, don''t hesitate to try!!!', '2015-12-16 - 09:43 a', 2, NULL),
(155, 'jcc', 'admin@8layertech.com', 'Hi Justin Bieber? Is that Common Denominator exists??', '2015-12-16 - 12:55 p', 1, NULL),
(156, 'jccultima123', 'johncyrillcorsanes@gmail.com', 'Oh yeah.. that''s my Baby Baby Baby, ohhhhhh', '2015-12-16 - 01:03 p', 1, NULL),
(157, 'melbie', 'melanieibisate@otaku.com', 'Justin Bieber?? OMG!! He''s my "Boyfriend" and he''ll never go away!', '2015-12-16 - 01:05 p', 1, NULL),
(158, 'melbie', 'melanieibisate@otaku.com', 'EDI WOW!', '2015-12-16 - 02:20 p', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` bigint(10) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `first_name` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `middle_name` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(160) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_no` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_active` tinyint(4) DEFAULT '1',
  `user_account_type` int(11) DEFAULT NULL COMMENT 'obsolete column'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_email`, `first_name`, `middle_name`, `last_name`, `contact_no`, `user_active`, `user_account_type`) VALUES
(1, 'jccultima123', '7694f4a66316e53c8cdd9d9954bd611d', 'johncyrillcorsanes@gmail.com', 'John Cyrill', 'Cumpio', 'Corsanes', NULL, 0, NULL),
(4, 'jcc', '7694f4a66316e53c8cdd9d9954bd611d', 'admin@8layertech.com', NULL, NULL, NULL, NULL, 1, NULL),
(6, 'melbie', '4614dc573cdb5f2fd8f62fe08096ccbe', 'melanieibisate@otaku.com', NULL, NULL, NULL, NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_articles`
--
ALTER TABLE `blog_articles`
 ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
 ADD PRIMARY KEY (`comment_id`), ADD KEY `cmt_article_id` (`cmt_article_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_articles`
--
ALTER TABLE `blog_articles`
MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=159;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` bigint(10) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index',AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
ADD CONSTRAINT `Comment_Article_ID` FOREIGN KEY (`cmt_article_id`) REFERENCES `blog_articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `Comment_User` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
