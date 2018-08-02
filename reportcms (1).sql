-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-07-30 04:10:52
-- 服务器版本： 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reportcms`
--

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(8) NOT NULL,
  `vlevel` tinyint(8) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `vlevel`, `name`) VALUES
(1, 3, 'SQL注入漏洞');

-- --------------------------------------------------------

--
-- 表的结构 `project`
--

CREATE TABLE `project` (
  `id` int(8) NOT NULL,
  `name` varchar(128) NOT NULL,
  `client` varchar(128) NOT NULL,
  `pnumber` varchar(32) NOT NULL,
  `pdomain` varchar(256) NOT NULL,
  `pip` varchar(128) NOT NULL,
  `puser` varchar(256) NOT NULL,
  `ptime` varchar(32) NOT NULL,
  `psummary` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `project`
--

INSERT INTO `project` (`id`, `name`, `client`, `pnumber`, `pdomain`, `pip`, `puser`, `ptime`, `psummary`) VALUES
(6, '丁牛科技知守平台', '丁牛科技', '00001', 'digapis.cn', '127.0.0.1', 'user/pass', '永久事件', '貌似不错'),
(10, 'test', 'test', 'test', '测试数据', '测试数据', '测试数据', '测试数据', '总结'),
(11, 'aaaaa', 'aaaaaa', 'aaaaaa', '测试数据', '测试数据', '测试数据', '测试数据', '总结');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` tinyint(2) NOT NULL,
  `name` varchar(32) NOT NULL,
  `passwd` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `passwd`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- 表的结构 `vuls`
--

CREATE TABLE `vuls` (
  `id` int(32) NOT NULL,
  `groupid` int(8) NOT NULL,
  `urls` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `risk` varchar(128) NOT NULL,
  `vulsparam` varchar(128) NOT NULL,
  `vulsdetails` text NOT NULL,
  `suggestions` text NOT NULL,
  `projid` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `vuls`
--

INSERT INTO `vuls` (`id`, `groupid`, `urls`, `description`, `risk`, `vulsparam`, `vulsdetails`, `suggestions`, `projid`) VALUES
(3, 1, 'sadfasdfas', '漏洞描述fsadfasdf', '危害描述asdfasdf', 'dfasdfasd', '漏洞详情asdfasdf', '修复建议asdfasdf', '10'),
(4, 1, '', '漏洞描述', '危害描述', '', '漏洞详情', '修复建议', '6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vuls`
--
ALTER TABLE `vuls`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `project`
--
ALTER TABLE `project`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` tinyint(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `vuls`
--
ALTER TABLE `vuls`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
