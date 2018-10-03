-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 08:23 AM
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
-- Table structure for table `progress_report`
--

CREATE TABLE `progress_report` (
  `prog_id` int(11) NOT NULL,
  `pat_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pat_address` text COLLATE utf8_unicode_ci NOT NULL,
  `pat_gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `pat_age` int(11) NOT NULL,
  `pat_dob` date NOT NULL,
  `pat_school` text COLLATE utf8_unicode_ci NOT NULL,
  `pat_grlvl` text COLLATE utf8_unicode_ci NOT NULL,
  `date_test` date NOT NULL,
  `place_test` text COLLATE utf8_unicode_ci NOT NULL,
  `referral_reasons` text COLLATE utf8_unicode_ci NOT NULL,
  `tests_administered` text COLLATE utf8_unicode_ci NOT NULL,
  `results` text COLLATE utf8_unicode_ci NOT NULL,
  `remarks` text COLLATE utf8_unicode_ci NOT NULL,
  `recommendations` text COLLATE utf8_unicode_ci NOT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `progress_report`
--

INSERT INTO `progress_report` (`prog_id`, `pat_name`, `pat_address`, `pat_gender`, `pat_age`, `pat_dob`, `pat_school`, `pat_grlvl`, `date_test`, `place_test`, `referral_reasons`, `tests_administered`, `results`, `remarks`, `recommendations`, `patient_id`, `doctor_id`) VALUES
(2, 'wsdawd', 'awdawd', '', 78, '1996-11-08', 'Merryhills', '4th year', '2018-10-04', 'PSPS office', ' qwqweqwe', ' qweqweqwe', '', ' qweqweqweqwe', ' qweqweqweqwe', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress_report`
--
ALTER TABLE `progress_report`
  ADD PRIMARY KEY (`prog_id`),
  ADD UNIQUE KEY `pat_name` (`pat_name`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `progress_report`
--
ALTER TABLE `progress_report`
  MODIFY `prog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
