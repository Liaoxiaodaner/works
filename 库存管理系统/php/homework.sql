-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-12-19 13:48:04
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(100) NOT NULL COMMENT '产品编号',
  `name` varchar(20) NOT NULL COMMENT '产品名称',
  `type` varchar(20) NOT NULL COMMENT '产品类型',
  `price` int(11) NOT NULL COMMENT '产品价格',
  `dayin` date NOT NULL COMMENT '入库时间',
  `dayout` date NOT NULL COMMENT '出库时间',
  `number` int(11) NOT NULL COMMENT '库存总量',
  `people` varchar(20) NOT NULL COMMENT '经手人'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_product`
--

INSERT INTO `tb_product` (`id`, `name`, `type`, `price`, `dayin`, `dayout`, `number`, `people`) VALUES
(1, '沙发', '家具类', 1000, '2018-11-01', '2018-11-03', 1003, '张三'),
(2, '书柜', '家具类', 1388, '2018-11-01', '2018-11-03', 99, '张三'),
(3, '洗衣液', '用品类', 56, '2018-11-01', '2018-11-03', 78, '王五'),
(4, '牙膏', '用品类', 14, '2018-11-01', '2018-11-03', 123, '张三'),
(5, '果冻', '食品类', 26, '2018-11-01', '2018-11-03', 45, '王五'),
(6, '麦片', '食品类', 36, '2018-11-01', '2018-11-03', 80, '李四'),
(7, '连衣裙', '服装类', 560, '2018-11-01', '2018-11-03', 980, '张三'),
(8, '马甲', '服装类', 98, '2018-11-01', '2018-11-03', 45, '王五'),
(23, '麦片', '食品类', 111, '2018-11-01', '2018-11-03', 58, '李四'),
(19, '洗衣粉', '用品类', 25, '2018-11-01', '2018-11-03', 55, '张三'),
(20, '桌子', '家具类', 289, '2018-11-01', '2018-11-03', 60, '王五');

-- --------------------------------------------------------

--
-- 表的结构 `tb_user`
--

CREATE TABLE `tb_user` (
  `user` varchar(10) NOT NULL,
  `pwd` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `tb_user`
--

INSERT INTO `tb_user` (`user`, `pwd`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '产品编号', AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
