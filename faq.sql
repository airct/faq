-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Feb 25, 2014, 03:54 AM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `system`
-- 
CREATE DATABASE `system` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `system`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `faq`
-- 

CREATE TABLE `faq` (
  `faq_id` int(10) NOT NULL auto_increment,
  `faq_title` varchar(200) NOT NULL,
  `faq_description` text NOT NULL,
  `faq_solution` text NOT NULL,
  `faq_status` varchar(50) NOT NULL,
  `faq_createtime` datetime NOT NULL,
  PRIMARY KEY  (`faq_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `faq`
-- 

INSERT INTO `faq` VALUES (1, 'aaa', ' bbb', 'ccc', 'cancel', '2014-02-25 01:58:08');
