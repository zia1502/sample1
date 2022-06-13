-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `developers` varchar(200) NOT NULL,
  `db_name` varchar(200) NOT NULL,
  `language` varchar(200) NOT NULL,
  `framework` varchar(200) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `client_name` varchar(200) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `developers`, `db_name`, `language`, `framework`, `start_date`, `end_date`, `deadline`, `client_name`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(8, 'Online Banking', '2', '1', '2', '3', '2021-12-31', '2022-01-08', '2022-01-07', 'Jason Hussain ', 1, '2021-12-25 21:52:07', NULL, NULL),
(11, 'Easy Signs Ecommerce Site', '4', '4', '3', '3', '2022-03-14', '2022-03-31', '2022-03-29', 'Zakir Hussain from Mascot, Australia', 1, '2021-12-25 23:41:49', NULL, NULL),
(12, 'Blood Bank Database App', '1', '1', '1', '4', '2022-04-01', '2022-06-01', '2022-05-25', 'Abdul Hossain', 1, '2021-12-26 00:03:27', NULL, NULL),
(14, 'eDefence Procurement', '2', '1', '1', '1', '2022-01-27', '2022-01-05', '2022-01-17', 'Jason Wong ', 1, '2022-01-03 20:33:34', NULL, NULL),
(15, 'Project to create a Freedom Fighter List for our Liberation War in 1971', '4', '3', '3', '4', '2022-02-05', '2023-03-26', '2022-12-14', 'Imran Khan', 1, '2022-01-12 11:49:54', NULL, NULL),
(16, 'Oracle Project', '4', '2', '2', '2', '2022-02-05', '2022-04-09', '2022-02-18', 'Zia Hussain', 1, '2022-01-12 23:42:11', NULL, NULL),
(17, 'Online Passport Application System', '1', '1', '1', '4', '2022-02-05', '2022-03-12', '2022-03-11', 'Akbar Ali ', 1, '2022-01-18 20:57:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_by`, `created_at`, `updated_by`, `updated_at`) VALUES
(1, 'Ziaul M Hussain', 'zia.hussain@gmail.com', '202cb962ac59075b964b07152d234b70', 0, '2021-12-25 18:54:22', 0, '2021-12-25 18:54:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
