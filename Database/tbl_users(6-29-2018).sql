-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2018 at 03:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psps`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `firstname` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` text COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('psy','pat','int','rev') COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `surname`, `firstname`, `user_email`, `user_password`, `user_type`, `joining_date`) VALUES
(11, 'Khaosneel', NULL, NULL, 'khaosneel@gmail.com', '298ea99e414f84c07d09e972f5a32881', 'pat', '2018-03-24 16:09:55'),
(12, 'renlino60', NULL, NULL, 'michael_ip96@gmail.com', '298ea99e414f84c07d09e972f5a32881', 'pat', '2018-03-25 10:39:24'),
(13, '12', NULL, NULL, 'khaosneel@yahoo.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'pat', '2018-04-07 08:36:07'),
(20, '1234', 'Psy1', NULL, 'michael_ip@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'psy', '2018-04-09 16:15:57'),
(21, 'dawae', 'Psy2', NULL, 'lazaro@gmail.com', 'b90e721cf86834cdf1260d2ad4a72563', 'psy', '2018-06-05 11:25:38'),
(22, '432', NULL, NULL, '432@yahoo.com', '248e844336797ec98478f85e7626de4a', 'pat', '2018-06-05 15:07:01'),
(23, '321', NULL, NULL, '321@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'rev', '2018-06-05 15:07:36'),
(24, 'rrr', NULL, NULL, 'rrr@yahoo.com', '44f437ced647ec3f40fa0841041871cd', 'pat', '2018-06-05 15:09:00'),
(25, 'reni', 'Psy3', NULL, 'reni@gmail.com', 'e289e47fb012254afa06cf57b1469d84', 'psy', '2018-06-05 15:42:03'),
(26, 'erd', 'Psy4', NULL, 'erd@yahoo.com', '1c18b56aef5d89ed04adae9ea110e41d', 'psy', '2018-06-05 15:42:34'),
(28, 'gggg', 'Psy5', NULL, 'ggggg@yahoo.com', 'c1ebb4933e06ce5617483f665e26627c', 'psy', '2018-06-05 15:43:23'),
(30, '1111', 'Psy6', NULL, '1111@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'psy', '2018-06-05 15:44:38'),
(31, 'awegweag', NULL, NULL, 'awegwegweg@Egawegaewg.com', '8d197a4338e11040f6ef2bd325e32e3a', 'pat', '2018-06-05 15:45:26'),
(32, 'silverej', 'Psy7', 'Earl John', 'earljohntubig@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'psy', '2018-06-21 14:49:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`) USING BTREE,
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
