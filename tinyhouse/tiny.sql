-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2018 年 3 月 02 日 16:22
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tiny`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `admin_user`
--

CREATE TABLE IF NOT EXISTS `admin_user` (
`id` int(12) NOT NULL,
  `admin_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `com_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin_pass` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `admin_user`
--

INSERT INTO `admin_user` (`id`, `admin_name`, `com_name`, `admin_id`, `admin_pass`) VALUES
(1, '大西', 'リークス', 'admin', 'admin'),
(2, '大西', 'リーk数', 'admin', 'admin'),
(3, '大西', 'リークス', 'admin', 'admin'),
(4, '大西', 'リークス', 'admin', 'admin'),
(5, '大西洋平', 'admin', 'yoheionishi1@gmail.com', 'admin'),
(6, '大西洋平', 'admin', 'yoheionishi1@gmail.com', 'admin'),
(7, '大西洋平', 'admin', 'yoheionishi1@gmail.com', 'admin'),
(8, '大西洋平', 'admin', 'yoheionishi1@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- テーブルの構造 `tiny_info`
--

CREATE TABLE IF NOT EXISTS `tiny_info` (
`id` int(12) NOT NULL,
  `housename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `introduction` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `area` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `person` int(12) NOT NULL,
  `access` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tag1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tag5` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `tiny_info`
--

INSERT INTO `tiny_info` (`id`, `housename`, `introduction`, `area`, `address`, `tel`, `price`, `person`, `access`, `image1`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`) VALUES
(1, 'も守ろう', 'とても綺麗なお家です', '沖縄', '3-2-14 新槇町ビル別館第一2階', '09024837492', '1500円/人', 3, '渋谷駅から徒歩10分。', 'upload1/20180225060226a7b113a317a0bcfba6b530d6ac6cf83f.jpg', '', '', '', '', ''),
(2, 'テストハウス', 'とても綺麗なお家です', '北海道', '1-25-18', '09024837492', '1500円/人', 3, '渋谷駅から徒歩10分。', 'upload1/20180227152438bf4f90c12f1c7f298c538e0f642bbcb7.jpg', '', '', '', '', ''),
(3, 'パクチソン', 'いいい', '福島', '1-25-18', '09024837492', '1500円/人', 3, '渋谷駅から徒歩10分。', 'upload1/20180228070044f9f3ab6bab187e56261f237f32d723ee.jpg', '1500円/人', '3', '渋谷駅から徒歩10分。', '', ''),
(4, 'テスト', 'あああ', '福島', '瀬田 4-35-12', '09024837492', '1500円/人', 1, '渋谷駅から徒歩10分。', 'upload1/20180228070355cf4baf688965ac35d45db6231746c00d.jpg', '川', '共有', '茶釜', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiny_info`
--
ALTER TABLE `tiny_info`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tiny_info`
--
ALTER TABLE `tiny_info`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
