-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 02:55 PM
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
CREATE DATABASE IF NOT EXISTS `psps` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `psps`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

DROP TABLE IF EXISTS `appointment`;
CREATE TABLE `appointment` (
  `appointment_id` int(11) NOT NULL,
  `appointment_start` datetime NOT NULL,
  `appointment_end` datetime NOT NULL,
  `appointment_patient_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `appointment_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'free',
  `appointment_patient_session` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doctor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chat_id`
--

DROP TABLE IF EXISTS `chat_id`;
CREATE TABLE `chat_id` (
  `chat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_id`
--

INSERT INTO `chat_id` (`chat_id`) VALUES
(22),
(23),
(24),
(25),
(26),
(27),
(28),
(29),
(30),
(31),
(32);

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

DROP TABLE IF EXISTS `chat_users`;
CREATE TABLE `chat_users` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `chat_id`, `user_id`) VALUES
(16, 22, 11),
(17, 22, 21),
(18, 23, 11),
(19, 23, 20),
(20, 24, 31),
(21, 24, 20),
(22, 25, 11),
(23, 25, 25),
(24, 26, 32),
(25, 26, 20),
(26, 27, 34),
(27, 27, 32),
(28, 28, 34),
(29, 28, 20),
(30, 29, 34),
(31, 29, 26),
(32, 30, 34),
(33, 30, 36),
(34, 31, 34),
(35, 31, 21),
(36, 32, 34),
(37, 32, 25);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `message_id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `chat_user` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `timesent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`message_id`, `chat_id`, `chat_user`, `message`, `timesent`) VALUES
(30, 22, 11, 'wagawgwg', '2018-06-05 13:32:05'),
(31, 22, 11, 'qwfqwfq', '2018-06-05 13:32:23'),
(32, 22, 11, 'wesgwaegweg', '2018-06-05 13:33:32'),
(33, 22, 21, 'awfawfweag', '2018-06-05 13:35:19'),
(34, 22, 21, 'awegweg', '2018-06-05 13:35:22'),
(35, 23, 11, 'akwfalwfawfawlfawj', '2018-06-05 13:51:54'),
(36, 23, 11, 'afawfawf', '2018-06-05 14:09:08'),
(37, 23, 11, 'sergawegwagw4g', '2018-06-05 14:09:10'),
(38, 23, 11, 'aweweahweh', '2018-06-05 14:09:12'),
(39, 23, 11, 'awegwegwegewg', '2018-06-05 14:09:15'),
(40, 23, 11, 'waegwegwegweag', '2018-06-05 14:09:18'),
(41, 23, 11, 'wegwaeg', '2018-06-05 14:09:20'),
(42, 23, 11, 'a', '2018-06-05 14:09:21'),
(43, 23, 11, 'g', '2018-06-05 14:09:21'),
(44, 23, 11, 'weg', '2018-06-05 14:09:21'),
(45, 23, 11, 'w', '2018-06-05 14:09:21'),
(46, 23, 11, 'we', '2018-06-05 14:09:21'),
(47, 23, 11, 'g', '2018-06-05 14:09:22'),
(48, 23, 11, 'ge', '2018-06-05 14:09:22'),
(49, 23, 11, 'we', '2018-06-05 14:09:22'),
(50, 23, 11, 'w', '2018-06-05 14:09:22'),
(51, 23, 11, 'ge', '2018-06-05 14:09:22'),
(52, 23, 11, 'we', '2018-06-05 14:09:22'),
(53, 23, 11, 'weg', '2018-06-05 14:09:23'),
(54, 23, 11, 'we', '2018-06-05 14:09:23'),
(55, 24, 31, 'awfawfawf', '2018-06-05 15:45:56'),
(56, 24, 31, 'awfawfawfwafawf', '2018-06-05 15:45:59'),
(57, 24, 31, 'wagewgweag', '2018-06-05 15:46:23'),
(58, 24, 31, 'qwfqwfqwf', '2018-06-05 15:48:26'),
(59, 24, 31, 'qwfqwfqwf', '2018-06-05 15:48:28'),
(60, 24, 31, 'waegwegweg', '2018-06-05 15:48:38'),
(61, 24, 31, 'wwgaweg', '2018-06-05 15:48:48'),
(62, 24, 31, 'qafqwfqwf', '2018-06-05 15:48:52'),
(63, 24, 31, 'waewe', '2018-06-05 15:49:16'),
(64, 24, 31, 'awefwe', '2018-06-05 15:49:18'),
(65, 24, 31, 'wegweg', '2018-06-05 15:49:24'),
(66, 24, 31, 'waegwegweg', '2018-06-05 15:49:26'),
(67, 24, 31, 'wegwe', '2018-06-05 15:49:29'),
(68, 24, 31, 'wegwegw', '2018-06-05 15:49:31'),
(69, 24, 31, 'wegwegwewag', '2018-06-05 15:49:31'),
(70, 24, 31, 'g', '2018-06-05 15:49:33'),
(71, 24, 31, 'gge', '2018-06-05 15:49:34'),
(72, 24, 31, 'ggea', '2018-06-05 15:49:34'),
(73, 24, 31, 'ggeaweg', '2018-06-05 15:49:34'),
(74, 24, 31, 'ggeawegweg', '2018-06-05 15:49:34'),
(75, 24, 31, 'ggeawegweg', '2018-06-05 15:49:34'),
(76, 24, 31, 'ggeawegweg', '2018-06-05 15:49:35'),
(77, 24, 31, '', '2018-06-05 15:49:35'),
(78, 24, 31, '', '2018-06-05 15:49:35'),
(79, 24, 31, '', '2018-06-05 15:49:36'),
(80, 24, 31, '', '2018-06-05 15:49:36'),
(81, 24, 31, 'gwgewageawg', '2018-06-05 15:49:38'),
(82, 24, 31, 'awegweg', '2018-06-05 15:49:39'),
(83, 24, 31, 'wegwege', '2018-06-05 15:49:43'),
(84, 24, 31, '', '2018-06-05 15:49:50'),
(85, 24, 31, '', '2018-06-05 15:52:18'),
(86, 24, 31, '', '2018-06-05 15:53:55'),
(87, 24, 31, 'adwdawdawf', '2018-06-05 15:54:41'),
(88, 27, 34, 'Hi', '2018-07-02 13:08:13'),
(89, 27, 32, 'Hello', '2018-07-02 13:08:38'),
(90, 27, 32, 'test', '2018-07-02 13:08:40'),
(91, 27, 32, 'test message', '2018-07-02 13:08:43'),
(92, 27, 32, 'sadsa', '2018-07-02 13:08:51'),
(93, 27, 32, 'sad', '2018-07-02 13:08:51'),
(94, 27, 32, 'wqe', '2018-07-02 13:08:52'),
(95, 27, 32, 'zxc', '2018-07-02 13:08:53'),
(96, 27, 32, 'wqewqe', '2018-07-02 13:08:59'),
(97, 27, 34, 'qewqe', '2018-07-02 13:11:43'),
(98, 27, 34, 'sadwqe', '2018-07-02 13:11:46'),
(99, 27, 34, 'kjklk', '2018-07-02 13:11:56'),
(100, 27, 34, 'asdwqe', '2018-07-02 13:30:02'),
(101, 27, 34, 'to bottom', '2018-07-02 13:30:09'),
(102, 27, 34, 'to bottom', '2018-07-02 13:44:30'),
(103, 27, 34, 'test', '2018-07-02 13:56:31'),
(104, 27, 34, 'test height', '2018-07-02 13:57:53'),
(105, 27, 34, 'qwe', '2018-07-02 13:59:47'),
(106, 27, 34, 'qwewqe', '2018-07-02 14:01:07'),
(107, 27, 34, 'ksajd', '2018-07-02 14:01:53'),
(108, 27, 34, 'qwe', '2018-07-02 14:02:30'),
(109, 27, 34, 'fuck', '2018-07-02 14:02:38'),
(110, 27, 34, 'wqe', '2018-07-02 14:03:42'),
(111, 27, 34, 'wqewqewqewqe', '2018-07-02 14:04:23'),
(112, 27, 34, '123213', '2018-07-02 14:04:44'),
(113, 27, 34, '1200px', '2018-07-02 14:05:05'),
(114, 27, 34, '1452px', '2018-07-02 14:05:15'),
(115, 27, 32, 'wqewqe', '2018-07-02 14:06:12'),
(116, 27, 32, 'scroll pls', '2018-07-02 14:06:57'),
(117, 27, 34, 'sadlkwqewqkdsalkwqkleklwqlkejsaljdlkwqjelkwqjelksajlkdjwqlkejwqlkjsalkdjkwqle', '2018-07-02 14:08:01'),
(118, 27, 34, 'please scroll down to the bototm', '2018-07-02 14:13:56'),
(119, 27, 34, 'test', '2018-07-02 14:15:15'),
(120, 27, 34, 'scroll please', '2018-07-02 14:24:03'),
(121, 27, 34, 'wqewqe', '2018-07-02 14:26:09'),
(122, 27, 34, 'sadwqe', '2018-07-02 14:26:43'),
(123, 27, 34, 'qwe', '2018-07-02 14:27:06'),
(124, 27, 34, 'wqewqe', '2018-07-02 14:27:12'),
(125, 27, 32, 'wqewqewqewqewq', '2018-07-02 14:27:28'),
(126, 27, 32, 'asdsadsad', '2018-07-02 14:27:33'),
(127, 27, 32, 'aaqwweq', '2018-07-02 14:28:45'),
(128, 27, 32, 'wqewqe', '2018-07-02 14:28:59'),
(129, 27, 34, 'wqewqe', '2018-07-02 14:37:38'),
(130, 27, 34, 'kqwwqlkwq', '2018-07-02 14:37:44'),
(131, 27, 34, 'qwewqe', '2018-07-02 15:14:03'),
(132, 27, 32, 'sadwqe', '2018-07-02 15:14:16'),
(133, 27, 32, 'asdwqe', '2018-07-02 15:14:29'),
(134, 27, 32, 'wqewqewq', '2018-07-02 15:14:35'),
(135, 27, 34, 'sadwqe', '2018-07-02 15:16:12'),
(136, 27, 32, 'wqeqwewqe', '2018-07-02 15:18:41'),
(137, 27, 32, 'wqewqe', '2018-07-02 15:19:09'),
(138, 27, 32, 'qwleqwe', '2018-07-02 15:19:21'),
(139, 27, 32, 'wqeqwe', '2018-07-02 15:19:50'),
(140, 27, 34, 'wqewqe', '2018-07-02 15:20:35'),
(141, 27, 34, 'asdwqe', '2018-07-02 15:29:22'),
(142, 27, 34, 'asdwqewqe', '2018-07-02 15:35:11'),
(143, 27, 34, 'wqewqe', '2018-07-02 15:35:26'),
(144, 27, 34, 'wqewqe', '2018-07-02 15:37:00'),
(145, 27, 34, 'kkj', '2018-07-02 15:37:06'),
(146, 27, 34, 'wqewqe', '2018-07-02 15:44:15'),
(147, 27, 34, 'wqewqe', '2018-07-02 15:44:44'),
(148, 27, 34, 'sadqwe', '2018-07-02 15:47:04'),
(149, 27, 34, 'asdwqe', '2018-07-02 15:48:43'),
(150, 30, 34, 'Hi', '2018-07-18 11:47:07'),
(151, 30, 36, 'Test', '2018-07-18 11:47:25'),
(152, 30, 36, 'sadqwe', '2018-07-18 11:47:32'),
(153, 30, 36, 'asdasdqwe', '2018-07-18 11:47:33'),
(154, 30, 36, 'asdwqewqewqewqeasd', '2018-07-18 11:47:35'),
(155, 30, 36, 'sadwqwqewqewqeqwe', '2018-07-18 11:47:38'),
(156, 30, 36, 'sadqew', '2018-07-18 11:54:37'),
(157, 30, 36, 'Latest', '2018-07-18 12:54:44'),
(158, 30, 34, 'latest', '2018-07-18 12:55:09'),
(159, 28, 34, 'test', '2018-07-18 14:18:39'),
(160, 28, 34, 'qwewqe', '2018-07-18 14:18:44'),
(161, 30, 34, 'yo', '2018-07-18 14:19:02'),
(162, 30, 34, 'wqewqeq', '2018-07-18 14:21:18'),
(163, 30, 34, 'test', '2018-07-19 08:17:20'),
(164, 30, 34, 'sadqwe', '2018-07-19 09:16:55'),
(165, 30, 34, 'wqwqqe', '2018-07-19 09:17:01'),
(166, 30, 34, 'aa', '2018-07-19 09:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_date` datetime NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image_header` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `title`, `author`, `news_date`, `body`, `image_header`) VALUES
(1, 'Test News', 'silverej', '2018-06-30 00:00:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'news1.JPG'),
(3, 'Test News 2', 'silverej', '2018-06-30 16:43:57', 'Content for Test News 2', 'morning-coffee-message-hd-wallpaper.jpg'),
(4, 'Test News 3', 'silverej', '2018-07-05 15:50:14', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'pexels-photo-302905.jpg'),
(5, 'Unformatted News', 'dawae', '2018-07-07 09:10:58', 'The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.\r\n\r\nThe quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.', 'slide2.jpg'),
(6, '1 line news', 'silverej', '2018-07-07 13:51:21', 'saldkjwqlkjelsakjdlkwqjelkqjsalkdjwqlkejlksajdaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa111111111111111111111111111111111111111111111111111111111111111111111111bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk', 'slide1.jpg');

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
  `user_type` enum('psy','pat','int','rev','admin') COLLATE utf8_unicode_ci NOT NULL,
  `joining_date` datetime NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_no` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `additional_info` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `surname`, `firstname`, `user_email`, `user_password`, `user_type`, `joining_date`, `picture`, `contact_no`, `additional_info`) VALUES
(11, 'Khaosneel', NULL, NULL, 'khaosneel@gmail.com', '298ea99e414f84c07d09e972f5a32881', 'pat', '2018-03-24 16:09:55', '', '', NULL),
(12, 'renlino60', NULL, NULL, 'michael_ip96@gmail.com', '298ea99e414f84c07d09e972f5a32881', 'admin', '2018-03-25 10:39:24', '', '', NULL),
(13, '12', NULL, NULL, 'khaosneel@yahoo.com', 'c20ad4d76fe97759aa27a0c99bff6710', 'pat', '2018-04-07 08:36:07', '', '', NULL),
(20, '1234', 'Ip', 'Mike', 'michael_ip@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'psy', '2018-04-09 16:15:57', '', '', NULL),
(21, 'dawae', 'Psy2', NULL, 'lazaro@gmail.com', 'b90e721cf86834cdf1260d2ad4a72563', 'psy', '2018-06-05 11:25:38', '', '', NULL),
(22, '432', NULL, NULL, '432@yahoo.com', '248e844336797ec98478f85e7626de4a', 'pat', '2018-06-05 15:07:01', '', '', NULL),
(23, '321', NULL, NULL, '321@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa', 'rev', '2018-06-05 15:07:36', '', '', NULL),
(24, 'rrr', NULL, NULL, 'rrr@yahoo.com', '44f437ced647ec3f40fa0841041871cd', 'pat', '2018-06-05 15:09:00', '', '', NULL),
(25, 'reni', 'Psy3', NULL, 'reni@gmail.com', 'e289e47fb012254afa06cf57b1469d84', 'psy', '2018-06-05 15:42:03', '', '', NULL),
(26, 'erd', 'Psy4', NULL, 'erd@yahoo.com', '1c18b56aef5d89ed04adae9ea110e41d', 'psy', '2018-06-05 15:42:34', '', '', NULL),
(28, 'gggg', 'Psy5', NULL, 'ggggg@yahoo.com', 'c1ebb4933e06ce5617483f665e26627c', 'psy', '2018-06-05 15:43:23', '', '', NULL),
(30, '1111', 'Psy6', NULL, '1111@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'psy', '2018-06-05 15:44:38', '', '', NULL),
(31, 'awegweag', NULL, NULL, 'awegwegweg@Egawegaewg.com', '8d197a4338e11040f6ef2bd325e32e3a', 'pat', '2018-06-05 15:45:26', '', '', NULL),
(32, 'silverej', 'Tubig', 'Earl John', 'earljohntubig@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'psy', '2018-06-21 14:49:04', 'Static/images/users/32.png', '', NULL),
(34, 'test-patient', 'patient', 'test', 'test-patient@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'pat', '2018-07-02 13:04:47', '', '', NULL),
(35, 'test-account', NULL, NULL, 'asdwqe@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'pat', '2018-07-06 18:32:13', '', '', NULL),
(36, 'silverej-psy', 'Tubeeg', 'Earl John', 'tej0326@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'psy', '2018-07-09 14:51:19', '', '09278089200', NULL),
(37, 'modal-test', 'For modal testing', 'This is', 'modaltesting@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'pat', '2018-07-21 20:21:16', '', '09278089200', NULL),
(38, 'modaltest2', 'test2', 'modal ', 'modaltest2@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'psy', '2018-07-21 20:25:33', '', '09278089200', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appointment_id`);

--
-- Indexes for table `chat_id`
--
ALTER TABLE `chat_id`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `chat_id` (`chat_id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `chat_user` (`chat_user`),
  ADD KEY `log_ibfk_3` (`chat_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD UNIQUE KEY `title` (`title`);

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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat_id`
--
ALTER TABLE `chat_id`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD CONSTRAINT `chat_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_users_ibfk_3` FOREIGN KEY (`chat_id`) REFERENCES `chat_id` (`chat_id`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `log_ibfk_2` FOREIGN KEY (`chat_user`) REFERENCES `chat_users` (`user_id`),
  ADD CONSTRAINT `log_ibfk_3` FOREIGN KEY (`chat_id`) REFERENCES `chat_users` (`chat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
