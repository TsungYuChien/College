-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 建立日期: Dec 05, 2019, 11:20 AM
-- 伺服器版本: 5.1.36
-- PHP 版本: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `myschool`
--

-- --------------------------------------------------------

--
-- 資料表格式： `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `cno` varchar(5) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- 列出以下資料庫的數據： `classes`
--

INSERT INTO `classes` (`sno`, `cno`) VALUES
('S001', 'CS101'),
('S001', 'CS102'),
('S001', 'CS203'),
('S002', 'CS101'),
('S002', 'CS102'),
('S002', 'CS201'),
('S005', 'CS204'),
('S005', 'CS203'),
('S006', 'CS201'),
('S006', 'CS203'),
('S006', 'CS204');

-- --------------------------------------------------------

--
-- 資料表格式： `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `cno` varchar(5) NOT NULL DEFAULT '',
  `pname` varchar(12) NOT NULL DEFAULT '',
  `title` varchar(30) NOT NULL DEFAULT '',
  `credits` int(11) NOT NULL DEFAULT '3',
  PRIMARY KEY (`cno`)
) ENGINE=MyISAM DEFAULT CHARSET=big5;

--
-- 列出以下資料庫的數據： `courses`
--

INSERT INTO `courses` (`cno`, `pname`, `title`, `credits`) VALUES
('CS101', '陳慶新', '計算機概論', 3),
('CS102', '王陽明', '程式語言', 3),
('CS104', '張獻忠', '網頁設計', 3),
('CS201', '陳慶新', '資料結構', 4),
('CS203', '張獻忠', '多媒體網頁設計', 2),
('CS204', '王陽明', '資料庫系統', 4);

-- --------------------------------------------------------

--
-- 資料表格式： `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `sno` varchar(5) NOT NULL DEFAULT '',
  `name` varchar(12) NOT NULL,
  `address` varchar(50) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `username` varchar(12) NOT NULL DEFAULT '',
  `password` varchar(12) NOT NULL DEFAULT '',
  `CHI` int(11) NOT NULL,
  `ENG` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `COM` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=MyISAM DEFAULT CHARSET=big5 COMMENT='學生基本資料';

--
-- 列出以下資料庫的數據： `students`
--

INSERT INTO `students` (`sno`, `name`, `address`, `birthday`, `username`, `password`, `CHI`, `ENG`, `MATH`, `COM`) VALUES
('S001', '陳會安', '新北市五股區', '1967-10-05', 'hueyan', '1234', 95, 88, 90, 91),
('S002', '江小魚', '新北市中和區', '1986-05-25', 'AAA', 'BBB', 80, 85, 90, 73),
('S003', '周傑倫', '台北市松山區', '1972-05-01', 'jay', '1234', 70, 75, 90, 86),
('S004', '蔡依玲', '台北市大安區', '1969-07-22', 'jolin', '1234', 80, 95, 86, 88),
('S005', '張會妹', '台北巿信義區', '1980-03-01', 'chiang', '1234', 90, 80, 80, 75),
('S006', '張無忌', '台北市內湖區', '1981-03-01', 'chiang1234', '1234', 95, 70, 70, 60),
('S007', '林先生', '新竹市元培街', '1988-06-05', 'lin', '34567', 85, 80, 95, 90),
('S008', '吳某人', '台中市大里區', '1966-05-04', 'wumo', '1234rewq', 80, 80, 75, 65),
('S009', '丁某人', '高雄市100號', '1944-04-05', 'dinmolen', '1234ras', 75, 85, 80, 70),
('S010', '張三', '桃園市中壢區', '2000-11-07', 'three', 'three', 90, 80, 75, 65),
('S011', '李四', '桃園市中壢區元智大學', '1999-07-22', 'four', 'four', 80, 80, 70, 60),
('S012', '王五', '台北市信義區', '2001-11-05', 'five', 'five', 80, 60, 75, 60),
('S013', '無印良品', '新北市板橋區', '1996-03-20', 'nono', 'nono', 85, 90, 70, 70),
('S014', '路人甲', '苗栗縣999號', '1997-09-22', 'AAA', 'AAA', 60, 60, 75, 65),
('S015', '路人乙', '高雄市2000號', '1998-02-24', 'BBBB', 'BBBB', 60, 55, 65, 55);
