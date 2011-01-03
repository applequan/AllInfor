-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2011 年 01 月 01 日 04:33
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
  `nName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pubdate` date NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `userclass_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `class_messages`
--

INSERT INTO `class_messages` (`id`, `nName`, `pubdate`, `content`, `userclass_id`) VALUES
(1, '关于2011年元旦放假期间教学安排的通知', '2010-12-30', '各教学单位：\r\n\r\n接校办〔2010〕60号通知，我校2011年元旦放假安排：1月1日至3日放假公休，共3天。我校全日制本科学生在元旦放假期间的教学工作安排如下：\r\n\r\n一、2010年1月1日至1月3日放假，共3天。其中，1月1日（星期六）为法定节假日；1月2日（星期日）为公休日；将1月1日（星期六）的课程调至1月3日（星期一）；原安排在1月3日（星期一）的各类课程停课。\r\n\r\n二、放假期间各校区全天开放以下课室供学生自修：\r\n\r\n南校区  —第一教学楼\r\n\r\n珠海校区—教学大楼E、F区二楼、三楼的所有课室\r\n\r\n东校区  —教学大楼B、C栋一楼、二楼的所有课室\r\n\r\n三、北校区的教学安排由医学教务处另行通知。\r\n\r\n哎……学院总是能把一个简单的通知搞得这么复杂……', 1),
(2, '第二学期选课的通知', '2010-12-23', '第二学期选课具体流程及细节和第二学期课表的通知已挂在学院网上，详情请点击\r\n\r\nhttp://ss.sysu.edu.cn/InformationSystem/Article.aspx?id=5265\r\n\r\n里面6个附件中，附件4和附件6不关我们事，可以不看~~\r\n\r\n这次选课是用新的系统，大家注意~~附件2是新系统使用手册', 1),
(3, '有关寒假留校登记的通知', '2010-12-15', '同学们，有关寒假留校的文件已经上传，请寒假想留校的同学下载《寒假留校本科生统计表》并填写相关信息。\r\n\r\n另外，如果有寒假患病住院的同学请下载《软件学院寒假患病住院留校学生登记表》并填写相关信息。\r\n\r\n有关同学请将表格在1月2号24：00前发到我QQ邮箱，谢谢~~~\r\n\r\n寒假留校本科生统计表\r\n\r\n软件学院寒假患病住院留校学生登记表', 2);

-- --------------------------------------------------------

--
-- 表的结构 `league_notices`
--

CREATE TABLE IF NOT EXISTS `league_notices` (
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `auth` int(1) NOT NULL DEFAULT '0',
  `discription` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userleague_id` int(11) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pubDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `league_notices`
--

INSERT INTO `league_notices` (`content`, `auth`, `discription`, `userleague_id`, `id`, `nName`, `pubDate`) VALUES
('一·[WILL]的成立\r\n\r\n中山大学[WILL]动漫协会成立于2002年5月，是一个以讨论动漫文化，探求动漫生活为宗旨的学校动漫爱好者建立而成的同好会，拥有注册会员2千多名。多年来，协会一直致力于为同好们搭建良好的交流平台，发展了协会的论坛和FTP。富有深度的动漫交流，品质精良的动漫资源，这些都让[WILL]的名声响遍中大，进而发展出了一大批会员和支持者。\r\n\r\n二·[WILL]的发展\r\n\r\n[WILL]的成长离不开和外面世界的交流。从成立之初，[WILL]便积极参与由广州其他动漫同好组织的漫展活动，多次在漫展上展示自己的风采。其中包括摊位展示，COSPLAY表演等。这些进一步让[WILL]的影响力扩展到广州全市乃至华南地区。同时，协会对学校团工委所倡导的活动保持着积极的态度，组织举办学校范围内的多项活动，例如珠海校区的“迎奥运绘画大赛”，东校区的“警钟长鸣安全活动”等等。\r\n\r\n随着时代的进步，[WILL]的发展已不仅局限在南校区和珠海校区。北校区和新建成的东校区分会都逐步地发展起立。至此，协会开始成为一个横跨四个校区的大协会。\r\n\r\n三·东校区分会的成立和发展\r\n\r\n东校区分会是伴随着东校区学子们拓荒的脚印一步步走过来的。2004年，随着中山大学大学城校区的落成和投入使用，协会也开始在东校区招新。从最初的十几名干事发展到现在每年都能吸纳150~200名注册会员，分会的发展离不开协会前辈们的艰辛和学校团工委的关怀。在成立到发展壮大的三年间，东校区分会多次承办各项校区规模的活动，取得了学校老师以及学子们的交口称赞。', 0, '发展历程\r\n', 10, 1, '协会简介', '2010-12-12'),
('中山大学东校区各院系排球队：\r\n\r\n       2010年举世瞩目的第16届亚运会即将拉开帷幕，为响应广州亚组委“激情盛会，和谐亚洲”的口号，弘扬奥林匹克精神，展现中国\r\n\r\n特色和广东风采，突出大学生青春活力与激情，同时提高2010年亚运会的吸引力和影响力，充分体现全民参与、共迎亚运的理念迎接广\r\n\r\n州亚运会，我校决定举行“五四杯”排球比赛。同时藉此发展排球运动，提高学生身体素质，形成一股健康向上，积极运动锻炼的风气。', 0, '比赛', 9, 2, '关于举办中山大学第三十届“五四杯”排球比', '2010-12-12'),
('经过了漫长的酝酿和准备，我们终于在广州的一夜暴风雨之后迎来了我们第三届点盛杯魔方赛！\r\n\r\n这天的天气异常舒适~~\r\n史上最猥琐的人！宣传部部长~~\r\n\r\n 是他！！是他！！！就是他！！！！培育了左右脑协会这一届最可爱最团结的队伍！！', 0, '', 8, 3, '第三届“点盛杯”魔方赛', '2010-12-31'),
('投稿/报名方式：\r\n\r\n       1.在楼下宿管处领取报名表，填写完毕后将设计稿与报名表订在一起投入报名箱中。\r\n\r\n       2.登录社团论坛或博客下载报名表，填写完毕并附上作品电子稿发送至willeastcampusno2@gmail.com邮箱，邮件标题为环保袋手绘大赛报名。\r\n\r\n         如有任何疑问亦可发送邮件至willeastcampusno2@gmail.com询问。\r\n\r\n报名截止日期：2009年6月1日\r\n\r\n \r\n\r\n活动流程：\r\n\r\n海报贴出日起至6月1日征集CG/手绘形式的稿件，我们将从中评选出优秀作品15组参加6月6日的现场作画比赛，将稿件画在环保袋上。我们将在比赛前3天内通知参赛选手并确认出席情况。\r\n\r\n6月6日当天的现场作画比赛分上下午两场在瑞士饭堂门口广场进行（雨天的话比赛地点转到惠佳三楼）。上午组：10:00-12:00；下午组：1:00-3:00。我们将提供环保袋、颜料、油性笔与调色盘，选手们可根据自身需要自备材料。\r\n\r\n当天的作品将统一收集，在周年庆晚会前由评委们评选出1、2、3等奖，并于晚会上宣布得奖名单并颁奖，实体作品将一并发还给各组选手。\r\n\r\n \r\n\r\n奖品设置：1等奖：1名，羊驼公仔一只；2等奖：2名，画册；3 等奖：3名，精美速写本; 参与奖9个：书签各一套\r\n\r\n \r\n\r\n报名表下载地址：\r\n\r\n校内下载\r\n\r\nhttp://will.sysu.edu.cn/bbs/job.php?action=download&pid=tpc&tid=24200&aid=39173\r\n\r\n \r\n\r\n校外下载\r\n\r\nhttp://www.jsharer.com/file/1211091.htm', 0, '描述一下，呵呵', 10, 4, '环保袋手绘大赛', '2010-12-23');

-- --------------------------------------------------------

--
-- 表的结构 `posters`
--

CREATE TABLE IF NOT EXISTS `posters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pubDate` date NOT NULL,
  `discription` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imageName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userleague_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `posters`
--

INSERT INTO `posters` (`id`, `theme`, `pubDate`, `discription`, `imageName`, `userleague_id`) VALUES
(1, '青协大学城义诊', '2010-12-12', '昨日下午，我们终于经过跋涉，终于完成······', 'd.jpg', 1),
(2, '母亲节的问候', '2010-12-12', '即使到达彼岸的成功。母亲的那一碗糖水仍让人不能忘怀，仅以康乃馨献给我们的母亲，···', 'b.jpg', 4),
(3, '岭南诗文大赛', '2010-12-12', '南方文学社隆重推出诗文大赛，欢迎童鞋们参加', 'c.jpg', 7),
(4, '青协志愿', '2010-12-12', '有我，更精彩', 'a.jpg', 1),
(5, '智力大赛', '2010-12-12', '欢迎能够参加大赛，魔方，桥牌等', 'e.jpg', 8),
(6, 'Google创新大赛', '2010-12-12', '创新大赛，现在开始···', 'f.jpg', 2),
(7, '环保袋手绘大赛', '2010-12-31', '投稿/报名方式：见详细内容\r\n\r\n       ', 'huanbao.jpg', 10);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `userclasses`
--

INSERT INTO `userclasses` (`id`, `cName`, `school`, `department`, `grade`, `discription`, `user_id`) VALUES
(1, '08数媒', 'SolfwareSchool', '软件工程', '08', '08数字媒体，你我ta', 2),
(2, '10行管', 'PoliticalSchool', '政务院', '10', '10级政务院，让你不再寂寞', 3);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `userleagues`
--

INSERT INTO `userleagues` (`id`, `lName`, `discription`, `publicKey`, `user_id`) VALUES
(1, '青年志愿者协会', '大家一起来，志愿更精彩', 'fuck', 9),
(2, 'Google camp', '谷歌走了，但Camp还在，O(∩_∩)O~', 'jimo', 4),
(6, '中大武侠', '让武侠文化遍地开花', 'wujk', 8),
(3, '苹果俱乐部', '给你不一样的苹果', 'shit', 6),
(4, '创业协会', '不一样的未来由我创造', 'a5g5', 2),
(5, 'solf协会', 'we are solf', 'solf', 2),
(7, '南方文学社', '子兮子兮，如此粲者何', 'fghj', 7),
(8, '中山大学左右脑协会', '左脑，右脑，都是闹', 'fdfgf', 1),
(9, '中东排协', '快乐排球，有你有我~！', 'fdgktre', 2),
(10, 'will动漫', '最重要的还是爱啊=V=', 'willgh', 2);

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`password`, `role`, `id`, `username`) VALUES
('123', 'c', 1, 'Lait'),
('applequan', '1', 2, 'applequan'),
('xili', '犀利哥班长', 3, 'xili'),
('likaifu', '总裁', 4, 'likaifu'),
('bill', 'CEO', 5, 'bill'),
('qiaobusi', '部长', 6, 'qiaobusi'),
('quyuan', '部长', 7, 'quyuan'),
('meichaofeng', '部长', 8, 'meichaofeng'),
('leifeng', '会长', 9, 'leifeng'),
('jmoge', '0', 12, 'jimoge');
--
-- 数据库: `setest`
--
CREATE DATABASE `setest` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `setest`;

-- --------------------------------------------------------

--
-- 表的结构 `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `acos`
--


-- --------------------------------------------------------

--
-- 表的结构 `i18n`
--

CREATE TABLE IF NOT EXISTS `i18n` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `locale` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `locale` (`locale`),
  KEY `model` (`model`),
  KEY `row_id` (`foreign_key`),
  KEY `field` (`field`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `i18n`
--


-- --------------------------------------------------------

--
-- 表的结构 `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci,
  `published` varchar(1) COLLATE utf8_unicode_ci DEFAULT 'N',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `posts`
--

