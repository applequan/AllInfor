-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 12 月 12 日 08:30
-- 服务器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `se`
--
CREATE DATABASE `se` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `se`;

-- --------------------------------------------------------

--
-- 表的结构 `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `aName` (`aName`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `administrators`
--


-- --------------------------------------------------------

--
-- 表的结构 `class_messages`
--

CREATE TABLE IF NOT EXISTS `class_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pubdate` date NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `userclass_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `class_messages`
--


-- --------------------------------------------------------

--
-- 表的结构 `league_notices`
--

CREATE TABLE IF NOT EXISTS `league_notices` (
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth` int(1) NOT NULL DEFAULT '0',
  `discription` text COLLATE utf8_unicode_ci NOT NULL,
  `userleague_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pubDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `league_notices`
--

INSERT INTO `league_notices` (`content`, `auth`, `discription`, `userleague_id`, `id`, `nName`, `pubDate`) VALUES
('æ˜Žå¤©å¤§å®¶å¸¦å¥½åˆ†å‘ç»™å¤§å®¶çš„ç« ', 0, '', 1, 1, 'é‡è¦äº‹æƒ…', '2010-12-12'),
('æ˜Žå¤©å¼€å§‹å¸‚å†…ä¸å¯æ€è®®æ—¶é—´çš„æœç´¢', 0, '', 2, 2, 'é‡è¦äº‹æƒ…', '2010-12-12');

-- --------------------------------------------------------

--
-- 表的结构 `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pubDate` date NOT NULL,
  `discription` text COLLATE utf8_unicode_ci NOT NULL,
  `imageName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `userleague_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `posters`
--

INSERT INTO `posters` (`id`, `theme`, `pubDate`, `discription`, `imageName`, `userleague_id`) VALUES
(1, 'è¦ç›–ç« çš„è¶æ—©', '2010-12-12', 'æˆ‘çš„åœ°ç›˜ç›–æˆ‘çš„', 'a.jpg', 1),
(2, 'soså›¢', '2010-12-12', '', 'b.jpg', 2),
(3, 'ç”µå½±é¦–æ’­', '2010-12-12', '', 'c.jpg', 2),
(4, 'sfsd', '2010-12-12', '', 'd.jpg', 3),
(5, 'sdf', '2010-12-12', '', 'e.jpg', 3),
(6, 'a', '2010-12-12', '', 'f.jpg', 5);

-- --------------------------------------------------------

--
-- 表的结构 `userclasses`
--

CREATE TABLE IF NOT EXISTS `userclasses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `discription` text COLLATE utf8_unicode_ci,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `userclasses`
--


-- --------------------------------------------------------

--
-- 表的结构 `userleagues`
--

CREATE TABLE IF NOT EXISTS `userleagues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `discription` text COLLATE utf8_unicode_ci,
  `publicKey` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `userleagues`
--

INSERT INTO `userleagues` (`id`, `lName`, `discription`, `publicKey`, `user_id`) VALUES
(1, 'ä¸€èµ·è·‘åä¼š', 'å¤§å®¶ä¸€èµ·æ¥ç›–ç« å§ï¼', 'fuck', 1),
(2, 'SOSå›¢', 'æ‰¾å‡ºæœªæ¥äººï¼Œå®‡å®™äººï¼Œå¼‚ä¸–ç•Œäººç„¶åŽä¸€èµ·çŽ©', 'å›¢é•¿', 1),
(3, 'æ»‘è½®åä¼š', 'æ‘”æ­»äº†ä¸å…³æˆ‘äº‹', 'shit', 1),
(4, 'é’å', 'è‹¦åŠ›å¤šå¤šç›Šå–„', 'å‘è·Œ', 1),
(5, 'å¾®è½¯ä¿±ä¹éƒ¨', 'we are solf', 'è½¯å¦¹å­', 1);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`password`, `role`, `id`, `username`) VALUES
('123', 'c', 1, 'Lait');
