-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 08:39 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_blood`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`) VALUES
(2, 'admin', '6d4db5ff0c117864a02827bad3c361b9', '2020-04-19 05:15:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bdooners`
--

CREATE TABLE `tbl_bdooners` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `bgorup` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bdooners`
--

INSERT INTO `tbl_bdooners` (`id`, `fname`, `mobile`, `email`, `gender`, `age`, `bgorup`, `address`, `message`, `status`, `date`) VALUES
(3, 'Mahfujur', 1925555115, 'admin@gmail.com', 'Male', '25', 'B+', 'Meherpur', 'adfa', 1, '2020-04-20 03:41:37'),
(4, '', 1555555555, 'admin@admin.com', 'Male', '23', 'AB-', 'adfa', ' adfaf', 0, '2020-04-20 03:30:34'),
(5, 'Jony Islam ', 1640066177, 'super@admin.com', 'Male', '23', 'B-', 'adfa', 'adfad', 1, '2020-04-19 07:57:57'),
(6, 'Jony Islam ', 1640066177, 'super@admin.com', 'Male', '23', 'B-', 'adfa', 'adfad', 1, '2020-04-19 08:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bgroup`
--

CREATE TABLE `tbl_bgroup` (
  `id` int(11) NOT NULL,
  `bgorup` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bgroup`
--

INSERT INTO `tbl_bgroup` (`id`, `bgorup`, `date`) VALUES
(2, 'B+', '2020-04-19 03:25:15'),
(3, 'O+', '2020-04-19 06:18:13'),
(4, 'AB+', '2020-04-19 06:18:29'),
(5, 'AB-', '2020-04-19 06:18:36'),
(6, 'A-', '2020-04-19 06:18:50'),
(7, 'B-', '2020-04-19 06:18:55'),
(8, 'O-', '2020-04-19 06:18:59'),
(9, 'A+', '2020-04-19 07:32:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` int(11) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `contact`, `message`, `status`, `date`) VALUES
(2, 'Mahfujur Rahman', 'admin@admin.com', 1925555115, 'adfadfaf', 1, '2020-04-20 04:54:15'),
(3, 'Mahfujur Rahman', 'admin@admin.com', 1925555115, 'adfadfaf', 1, '2020-04-20 04:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_info`
--

CREATE TABLE `tbl_contact_info` (
  `id` int(11) NOT NULL,
  `address` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact_info`
--

INSERT INTO `tbl_contact_info` (`id`, `address`, `email`, `contact`) VALUES
(1, 'Meherpur', 'moon@gmail.com', '01925555100');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `pagename` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `pagename`, `type`, `details`) VALUES
(1, 'Why Become Donor', 'donor', '<div class=\"d9FyLd\" style=\"padding: 0px 0px 10px; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">Initiatives to encourage&nbsp;<b>blood donation</b></div><span class=\"e24Kjd\" style=\"padding: 0px 8px 0px 0px; color: rgb(34, 34, 34); font-family: arial, sans-serif; font-size: 16px;\">With a huge population of youth,&nbsp;<b>blood donation camps</b>&nbsp;are regularly organized by hospitals and organizations at college campuses.&nbsp;<b>Blood donors</b>&nbsp;and their family members are often given priority in case of emergency or accidents.</span>'),
(2, 'About Us ', 'aboutus', '<div class=\"x-main left\" role=\"main\" style=\"position: relative; float: left; width: 825.469px; color: rgb(39, 39, 39); font-family: Lato, sans-serif; font-size: 15px; background-color: rgb(245, 245, 245);\"><article id=\"post-1435\" class=\"post-1435 page type-page status-publish hentry no-post-thumbnail\" style=\"margin-top: 0px;\"><div class=\"entry-wrap\" style=\"padding: 60px; background-color: rgb(255, 255, 255); border-radius: 0px; box-shadow: rgba(0, 0, 0, 0.067) 0px 1px 3px; margin: 0px auto; border: 1px solid rgb(229, 229, 229);\"><div class=\"entry-content content\" style=\"margin-top: 0px;\"><p style=\"margin-bottom: 0px;\">We all know how hard it can be to make a site look like the demo, so to make your start into the world of X as easy as possible we have included the demo content from our showcase site. Simply import the sample files we ship with the theme and the core structure for your site is already built. Keep in mind that even if you donâ€™t use the demo content, youâ€™ll be much better off than with most other themes since all of the customization options are done right from within the WordPress Customizer making it super easy to configure your site as compared to most of the typical admin panels. You will be pleasantly surprised how easy it is to setup and configure your site with X â€“ with or without the demo content.</p><div><br></div></div></div></article></div><aside class=\"x-sidebar right\" role=\"complementary\" style=\"float: right; width: 303.141px; color: rgb(39, 39, 39); font-family: Lato, sans-serif; font-size: 15px; background-color: rgb(245, 245, 245);\"><div id=\"nav_menu-4\" class=\"widget widget_nav_menu\" style=\"text-shadow: rgba(255, 255, 255, 0.95) 0px 1px 0px; margin-top: 0px;\"></div></aside>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bdooners`
--
ALTER TABLE `tbl_bdooners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bgroup`
--
ALTER TABLE `tbl_bgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_bdooners`
--
ALTER TABLE `tbl_bdooners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_bgroup`
--
ALTER TABLE `tbl_bgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_contact_info`
--
ALTER TABLE `tbl_contact_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
