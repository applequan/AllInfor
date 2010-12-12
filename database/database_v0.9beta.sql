-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2010 年 12 月 10 日 10:08
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `administrators`
--

INSERT INTO `administrators` (`id`, `aName`, `password`, `type`) VALUES
(1, 'fsefd', 'dfsefe', 'dfesf'),
(2, 'sdfdfsdf', 'fdfdfd', 'fsdfsfd');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `class_messages`
--

INSERT INTO `class_messages` (`id`, `nName`, `pubdate`, `content`, `userclass_id`) VALUES
(2, 'fdsfsd', '2010-12-08', 'fsdfsdfe', 0),
(3, 'gfgd', '2010-12-08', 'dfgsrrege', 0),
(6, 'vegseg', '2010-12-08', 'dgsdgdgad', 8386),
(5, 'ffefd', '2010-12-08', 'fsdfdsfafefwe', 8386),
(7, 'a', '2010-12-08', 'a', 8386),
(8, 'fd', '2010-12-08', 'fdf', 8386),
(9, '222', '2010-12-08', '222', 8386),
(10, 'fdf', '2010-12-08', '222', 8386),
(11, 's', '2010-12-08', 'd', 8386),
(12, 'ss', '2010-12-08', 'd', 8386),
(13, 'd', '2010-12-08', 'a', 8386),
(14, 'fd', '2010-12-08', 'dsef', 8386),
(15, 'qq', '2010-12-08', 'ee', 8386),
(19, 'dwdw', '2010-12-09', 'dwdwadw', 9883);

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
('dfsdf', 0, 'sdfdfsdfsd', 1, 1, 'adfe', '2010-12-08'),
('fge', 2, 'fefe', 1, 2, 'fe3', '2010-12-10');

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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `posters`
--


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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9887 ;

--
-- 转存表中的数据 `userclasses`
--

INSERT INTO `userclasses` (`id`, `cName`, `school`, `department`, `grade`, `discription`, `user_id`) VALUES
(9882, '08 DM', 'Sun-Yat san', 'DM', '08', 'we are the best', 4),
(9883, 'fsdfsdf', 'dsfsdfa', 'erers', 'fsdfs', 'terwedfsf', 3),
(9884, '08 DM', 'Sun-Yat san', 'fsdfsdf', '08', 'fuck', 6),
(9885, 'fds', 'es', 'dfs', 'fds', 'fsdafe', 5),
(9886, 'sdf', 'e', 'w', 're', 'fsdfg', 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `userleagues`
--

INSERT INTO `userleagues` (`id`, `lName`, `discription`, `publicKey`, `user_id`) VALUES
(1, 'wdw', 'fdfds', 'adsd', 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`password`, `role`, `id`, `username`) VALUES
('123456', 's', 3, 'laitao'),
('123456', 's', 2, 'zz'),
('12', 'l', 4, 'apple chuan'),
('123', 'c', 5, 'fuyongshun'),
('12', 'sb', 6, 'zhuangzikang');
