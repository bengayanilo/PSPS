-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 09:28 AM
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
-- Table structure for table `compre_report`
--

CREATE TABLE `compre_report` (
  `compre_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `examiner` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `compre_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `procedures` text COLLATE utf8_unicode_ci NOT NULL,
  `history` text COLLATE utf8_unicode_ci NOT NULL,
  `observations` text COLLATE utf8_unicode_ci NOT NULL,
  `summaries` text COLLATE utf8_unicode_ci NOT NULL,
  `tests` text COLLATE utf8_unicode_ci NOT NULL,
  `test_results` text COLLATE utf8_unicode_ci NOT NULL,
  `conclusion` text COLLATE utf8_unicode_ci NOT NULL,
  `recommendations` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `compre_report`
--

INSERT INTO `compre_report` (`compre_id`, `patient_id`, `examiner`, `compre_date`, `start_date`, `end_date`, `procedures`, `history`, `observations`, `summaries`, `tests`, `test_results`, `conclusion`, `recommendations`) VALUES
(3, 37, 'Doctors', '2018-10-25', '2014-12-01', '2018-12-07', 'wala wala ', 'wala  ', 'wala ', 'wala  ', 'wala  ', 'wala ', 'wala  ', 'wala  ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compre_report`
--
ALTER TABLE `compre_report`
  ADD PRIMARY KEY (`compre_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compre_report`
--
ALTER TABLE `compre_report`
  MODIFY `compre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compre_report`
--
ALTER TABLE `compre_report`
  ADD CONSTRAINT `compre_report_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `tbl_users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
