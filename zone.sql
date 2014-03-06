-- phpMyAdmin SQL Dump
-- version 2.11.9.4
-- http://www.phpmyadmin.net
--
-- 主机: mysql.cylyc.com
-- 生成日期: 2010 年 10 月 09 日 19:19
-- 服务器版本: 5.1.39
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `lyc_zone`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `article_id` int(255) NOT NULL AUTO_INCREMENT,
  `article_title` varchar(200) NOT NULL,
  `article_body` varchar(9999) NOT NULL,
  `article_time` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `article_username` varchar(100) NOT NULL,
  `article_rating` varchar(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 导出表中的数据 `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_body`, `article_time`, `article_username`, `article_rating`, `class_name`) VALUES
(11, 'juyjyujyujuy', '<p>\n	juyjuyjuytyt</p>\n', '2010-09-14  03:23', '33333', '7', 'aaaaa'),
(15, '6666', '<p>\n	utyutyutyutyu</p>', '2010-09-24  02:31', '22222', '11', 'ggg'),
(9, 'rwerwrwerwer', '<p>\n	text....rwerwerwer</p>\n', '2010-09-14  03:22', '22222', '16', 'aaaaa'),
(16, 'tertert', '<p>\n	utyutyutyutyurt</p>', '2010-09-24  02:32', '22222', '18', 'aaaaa'),
(17, 'hahahahah', '<p>\n	hhaahhahahahah</p>\n', '2010-09-25  02:52', '22222', '', 'aaaaa'),
(18, 'qwdqwddfvdfvdf', '<p>\n	text<strong>....fdvdfdfdfvdfqwdwqf</strong><strong> fwefwe</strong></p>\n<p>\n	<strong>f</strong></p>\n<h3 style="color: blue;">\n	<span style="font-size: 16px;"><strong>wefwe</strong></span></h3>\n<h3 style="color: blue;">\n	<span style="font-size: 16px;"><strong>w</strong></span></h3>\n<h3 style="color: blue;">\n	<span style="font-size: 16px;"><strong>ef</strong></span></h3>\n<h3 style="color: blue;">\n	<span style="font-size: 16px;"><strong>we</strong></span></h3>\n<h3 style="color: blue;">\n	<span style="font-size: 16px;"><strong>wef</strong></span></h3>\n<p>\n	<strong>efw</strong></p>\n<p>\n	<strong>fwewewef</strong></p>\n', '2010-09-25  05:30', '22222', '', 'aaaaa'),
(19, 'qwdqw', '<p>\n	text....qwdqwdqw</p>\n', '2010-09-25  05:42', '22222', '', 'aaaaa');

-- --------------------------------------------------------

--
-- 表的结构 `article_class`
--

CREATE TABLE IF NOT EXISTS `article_class` (
  `class_id` int(255) NOT NULL AUTO_INCREMENT,
  `class_name` varchar(100) NOT NULL,
  `class_username` varchar(100) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 导出表中的数据 `article_class`
--

INSERT INTO `article_class` (`class_id`, `class_name`, `class_username`) VALUES
(1, 'aaaaa', '22222'),
(10, 'ggg', '22222');

-- --------------------------------------------------------

--
-- 表的结构 `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int(255) NOT NULL AUTO_INCREMENT,
  `photo_username` varchar(50) NOT NULL,
  `photo_title` varchar(200) NOT NULL,
  `photo_name` varchar(200) NOT NULL,
  `gruop_name` varchar(100) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=85 ;

--
-- 导出表中的数据 `photo`
--

INSERT INTO `photo` (`photo_id`, `photo_username`, `photo_title`, `photo_name`, `gruop_name`) VALUES
(84, '22222', 'hjgj', 't_2010-09-27-12-06.jpg', 'bbvbv'),
(82, '22222', 'khj', 'b_2010-09-26-01-04.jpg', 'bbvbv'),
(81, '22222', 'nghn', 'v_2010-09-26-01-04.jpg', 'bbvbv'),
(77, '22222', 'fsdf', 'c_2010-09-26-00-56.jpg', 'aaa'),
(76, '22222', 'asd', 'a_2010-09-26-00-56.jpg', 'aaa'),
(83, '22222', 'terter', 'g_2010-09-27-11-59.jpg', 'bbvbv');

-- --------------------------------------------------------

--
-- 表的结构 `photo_gruop`
--

CREATE TABLE IF NOT EXISTS `photo_gruop` (
  `gruop_id` int(255) NOT NULL AUTO_INCREMENT,
  `gruop_name` varchar(200) NOT NULL,
  `gruop_username` varchar(100) NOT NULL,
  `gruop_pic` varchar(200) NOT NULL,
  PRIMARY KEY (`gruop_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- 导出表中的数据 `photo_gruop`
--

INSERT INTO `photo_gruop` (`gruop_id`, `gruop_name`, `gruop_username`, `gruop_pic`) VALUES
(28, 'bbvbv', '22222', 'b_2010-09-26-01-04.jpg'),
(27, 'aaa', '22222', 'c_2010-09-26-00-56.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `poll`
--

CREATE TABLE IF NOT EXISTS `poll` (
  `poll_id` int(255) NOT NULL AUTO_INCREMENT,
  `poll_question` varchar(200) NOT NULL,
  `poll_total_vote` varchar(9999) NOT NULL,
  `poll_time` varchar(100) CHARACTER SET ucs2 NOT NULL,
  `poll_username` varchar(100) NOT NULL,
  PRIMARY KEY (`poll_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

--
-- 导出表中的数据 `poll`
--

INSERT INTO `poll` (`poll_id`, `poll_question`, `poll_total_vote`, `poll_time`, `poll_username`) VALUES
(37, 'tet', '2', '2010-09-22  01:53', '22222'),
(30, '4243', '3', '2010-09-22  01:43', '33333'),
(44, '123123', '2', '2010-09-22  01:57', '22222'),
(46, '5435', '9', '2010-09-22  01:57', '33333'),
(47, 'ttt', '5', '2010-09-25  02:51', '22222'),
(48, 'adad', '1', '2010-09-28  05:32', '22222');

-- --------------------------------------------------------

--
-- 表的结构 `poll_user`
--

CREATE TABLE IF NOT EXISTS `poll_user` (
  `poll_user_id` int(255) NOT NULL AUTO_INCREMENT,
  `poll_user_ip` varchar(200) NOT NULL,
  `poll_user_time` varchar(200) NOT NULL,
  `poll_user_question` varchar(200) CHARACTER SET ucs2 NOT NULL,
  `poll_user_option` varchar(200) NOT NULL,
  `poll_user_username` varchar(100) NOT NULL,
  PRIMARY KEY (`poll_user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 导出表中的数据 `poll_user`
--

INSERT INTO `poll_user` (`poll_user_id`, `poll_user_ip`, `poll_user_time`, `poll_user_question`, `poll_user_option`, `poll_user_username`) VALUES
(23, '127.0.0.1', '2010-09-24  12:34', 'tet', 'rwrttt', '22222'),
(7, '127.0.0.1', '2010-09-22  01:43', '4243', '756757', '22222'),
(9, '127.0.0.1', '2010-09-22  03:00', '5435', '1111', '22222'),
(10, '127.0.0.1', '2010-09-22  03:01', '5435', '2222', '22222'),
(11, '127.0.0.1', '2010-09-22  03:02', '5435', '2222', '33333'),
(12, '127.0.0.1', '2010-09-22  03:03', '5435', '1111', '33333'),
(13, '127.0.0.1', '2010-09-22  03:05', '5435', '33333', '22222'),
(14, '127.0.0.1', '2010-09-22  03:08', '5435', '2222', '22222'),
(15, '127.0.0.1', '2010-09-22  03:08', '5435', '1111', '22222'),
(16, '127.0.0.1', '2010-09-22  03:08', '5435', '33333', '22222'),
(17, '127.0.0.1', '2010-09-22  03:09', '123123', '333', '22222'),
(18, '127.0.0.1', '2010-09-22  03:14', '123123', '222', '22222'),
(19, '127.0.0.1', '2010-09-22  03:14', '5435', '1111', '22222'),
(20, '127.0.0.1', '2010-09-22  03:16', 'tet', 'rwr', '22222'),
(21, '127.0.0.1', '2010-09-22  03:16', '5435', '2222', '22222'),
(22, '127.0.0.1', '2010-09-22  03:16', '4243', '6456', '22222'),
(24, '82.128.189.241', '2010-09-25  05:36', 'ttt', 'ertert', '22222'),
(25, '82.128.189.241', '2010-09-25  05:36', 'ttt', 'ertert', '22222'),
(26, '122.48.132.11', '2010-09-25  05:37', 'ttt', 'yrty', '22222'),
(27, '82.128.189.241', '2010-09-25  05:43', 'ttt', 'yrty', '22222'),
(28, '122.48.132.11', '2010-09-27  12:31', 'ttt', 'yrty', '22222'),
(29, '122.48.132.11', '2010-09-27  08:51', '5435', '1111', '22222'),
(30, '122.48.132.11', '2010-09-27  08:52', '4243', '6456', '22222'),
(31, '122.48.132.11', '2010-09-28  05:32', 'adad', 'fsdf', '22222');

-- --------------------------------------------------------

--
-- 表的结构 `poll_vote`
--

CREATE TABLE IF NOT EXISTS `poll_vote` (
  `vote_id` int(255) NOT NULL AUTO_INCREMENT,
  `vote_question` varchar(200) NOT NULL,
  `vote_option` varchar(200) NOT NULL,
  `vote_vote` varchar(9000) NOT NULL,
  `vote_username` varchar(100) NOT NULL,
  PRIMARY KEY (`vote_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

--
-- 导出表中的数据 `poll_vote`
--

INSERT INTO `poll_vote` (`vote_id`, `vote_question`, `vote_option`, `vote_vote`, `vote_username`) VALUES
(99, '5435', '2222', '3', '33333'),
(82, 'tet', 'rwr', '1', '22222'),
(83, 'tet', 'rwrttt', '1', '22222'),
(84, 'tet', 'ttt', '0', '22222'),
(97, '123123', '333', '1', '22222'),
(96, '123123', '222', '1', '22222'),
(95, '123123', '111', '0', '22222'),
(68, '4243', '756757', '1', '33333'),
(67, '4243', '6456', '2', '33333'),
(66, '4243', '4234', '0', '33333'),
(98, '5435', '1111', '4', '33333'),
(100, '5435', '33333', '2', '33333'),
(101, 'ttt', 'ertert', '2', '22222'),
(102, 'ttt', 'yrty', '3', '22222'),
(103, 'ttt', 'utyu', '0', '22222'),
(104, 'adad', 'fsdf', '1', '22222'),
(105, 'adad', 'jghj', '0', '22222'),
(106, 'adad', 'tert', '0', '22222');

-- --------------------------------------------------------

--
-- 表的结构 `sign`
--

CREATE TABLE IF NOT EXISTS `sign` (
  `sign_id` int(255) NOT NULL AUTO_INCREMENT,
  `sign_username` varchar(200) NOT NULL,
  `sign_body` varchar(9999) NOT NULL,
  `sign_time` varchar(100) NOT NULL,
  PRIMARY KEY (`sign_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=175 ;

--
-- 导出表中的数据 `sign`
--

INSERT INTO `sign` (`sign_id`, `sign_username`, `sign_body`, `sign_time`) VALUES
(128, '33333', 'hahaha<img src="http://localhost/back-up/zone/system/application/views/image/face/4.gif">', '2010-09-17  05:17'),
(129, '22222', 'N~~~B!a....<img src="http://localhost/back-up/zone/system/application/views/image/face/15.gif">', '2010-09-17  05:18'),
(130, '22222', 'sdfsfsfs<img src="http://localhost/back-up/zone/system/application/views/image/face/12.gif">', '2010-09-23  05:51'),
(170, '22222', 'gjldfjgljdlfg', '2010-09-25  05:48'),
(171, '22222', 'fsdfsdf<img src="http://www.cylyc.com/liyicheng/zone/system/application/views/image/face/1.gif">', '2010-09-25  05:48'),
(137, '', '', '2010-09-25  03:08'),
(150, '22222', 'hahahhaha<img src="http://www.cylyc.com/liyicheng/zone/system/application/views/image/face/3.gif">', '2010-09-25  03:36');

-- --------------------------------------------------------

--
-- 表的结构 `user_account`
--

CREATE TABLE IF NOT EXISTS `user_account` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_pwd` varchar(50) NOT NULL,
  `first_time` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nameMD` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `captcha` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `active` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `user_account`
--

INSERT INTO `user_account` (`user_id`, `user_name`, `user_pwd`, `first_time`, `email`, `nameMD`, `captcha`, `active`, `image`) VALUES
(1, '22222', '111111', '2010-08-16', '315538036@qq.com', '3d2172418ce305c7', 'e3ceb5881a0a1fda', '1', 'c_2010-09-26-01-06.jpg'),
(2, '33333', '', '', '5345345@qq.com', '', '', '', 'a.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `info_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_nick_name` varchar(50) NOT NULL,
  `user_sex` varchar(50) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_city2` varchar(50) NOT NULL,
  `user_brithday` varchar(50) NOT NULL,
  `user_marry` varchar(50) NOT NULL,
  `user_phone` varchar(50) NOT NULL,
  `user_qq` varchar(50) NOT NULL,
  PRIMARY KEY (`info_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `user_info`
--

INSERT INTO `user_info` (`info_id`, `user_name`, `user_nick_name`, `user_sex`, `user_country`, `user_city`, `user_city2`, `user_brithday`, `user_marry`, `user_phone`, `user_qq`) VALUES
(1, '22222', 'aaaaaaaa', '女', '福建', '福州', '福州市', '14-09-2010', '单身', '4234234', '7567567567'),
(2, '33333', 'haha', '男', '湖北', '武汉', '武汉市', '', '', '4234234', '315538036');

-- --------------------------------------------------------

--
-- 表的结构 `zone_game`
--

CREATE TABLE IF NOT EXISTS `zone_game` (
  `game_id` int(255) NOT NULL AUTO_INCREMENT,
  `game_title` varchar(50) NOT NULL,
  `game_body` varchar(500) NOT NULL,
  PRIMARY KEY (`game_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `zone_game`
--

INSERT INTO `zone_game` (`game_id`, `game_title`, `game_body`) VALUES
(1, 'Oulu地区-CS', 'texttexttexttexttexttexttext'),
(3, 'Oulu地区-实况', 'texttexttexttexttexttext'),
(4, 'Oulu地区-各应之王', 'texttexttexttexttexttext'),
(5, 'Oulu地区-每日教学', 'texttexttexttexttexttext'),
(6, 'Oulu地区-今日最牛逼', 'texttexttexttexttexttext');

-- --------------------------------------------------------

--
-- 表的结构 `zone_gift`
--

CREATE TABLE IF NOT EXISTS `zone_gift` (
  `gift_id` int(255) NOT NULL AUTO_INCREMENT,
  `gift_title` varchar(50) NOT NULL,
  `gift_body` varchar(500) NOT NULL,
  PRIMARY KEY (`gift_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `zone_gift`
--

INSERT INTO `zone_gift` (`gift_id`, `gift_title`, `gift_body`) VALUES
(1, '马勺牛肝', 'texttexttexttexttexttext'),
(2, '鸡汤', 'texttexttexttexttexttext'),
(3, '麻辣烫', 'texttexttexttexttexttext'),
(4, '红烧肉', 'texttexttexttexttexttext'),
(5, '菜心', 'texttexttexttexttexttexttext'),
(6, '汤包', 'texttexttexttexttexttext');

-- --------------------------------------------------------

--
-- 表的结构 `zone_notice`
--

CREATE TABLE IF NOT EXISTS `zone_notice` (
  `notice_id` int(255) NOT NULL AUTO_INCREMENT,
  `notice_title` varchar(50) NOT NULL,
  `notice_body` varchar(500) NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `zone_notice`
--

INSERT INTO `zone_notice` (`notice_id`, `notice_title`, `notice_body`) VALUES
(1, '关于网站测试内容的说明', 'texttexttexttexttext'),
(2, '什么时候公测啊', 'texttexttexttexttexttext'),
(3, '快做啊 速度速度', 'texttexttexttexttexttext'),
(4, '谁要内测账号啊', 'texttexttexttexttexttext');
