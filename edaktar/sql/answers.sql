-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 21, 2021 at 01:56 PM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mdspbd_edaktar`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `doctors_id` int(11) DEFAULT NULL,
  `token_id` int(11) DEFAULT NULL,
  `medicine` text CHARACTER SET utf8 DEFAULT NULL,
  `referral` text CHARACTER SET utf8 DEFAULT NULL,
  `answer_time` varchar(200) CHARACTER SET utf8 DEFAULT NULL,
  `need_followup` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `note` longtext CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `doctors_id`, `token_id`, `medicine`, `referral`, `answer_time`, `need_followup`, `note`, `created_at`, `updated_at`) VALUES
(95, 111, 4741, NULL, NULL, 'Dr. Ahmed Lutful Mubin-Interventional Cardiology-Mirpur - 1-01711059294, ', '2019-04-12 06:46:20', NULL, 'Azithromycin 500 mg, Rosuva 10, Helmisole, \n\nPatient is stable. Need some rest. ', '2019-04-12 06:46:20', '2019-04-12 06:46:20'),
(94, 114, 4741, NULL, NULL, 'Professor Dr. M.A. Rouf-Interventional Cardiology-Dhaka-, ', '2019-04-04 13:45:06', NULL, 'Drink lots of water.\n\nPanadol   EXTRA, 0+0+1 AM.\n\nTests:\nCBC ', '2019-04-04 13:45:06', '2019-04-04 13:45:06'),
(93, 113, 4741, NULL, NULL, '', '2019-04-04 13:26:00', NULL, 'প্রেসেন্টস এমটিভি ইংলিশে বলতে চাই.\n\nRenesa 300 mg, 1+0+0 BM\nAzithromycin 500 mg,  0+0+1 AM.\n\nFollow up in 3 days ', '2019-04-04 13:26:00', '2019-04-04 13:26:00'),
(92, 108, 4741, NULL, NULL, '', '2019-03-29 08:47:57', NULL, 'Narox, 0+0+1 AM, Thyrotab, \nI will be back in 3 weeks ago about.', '2019-03-29 08:47:57', '2019-03-29 08:47:57'),
(90, 104, 4734, NULL, NULL, '', '2019-03-28 09:32:45', NULL, 'Could be seasonal allergies, \n\nRosuva 20, \nAntilep 200, \nPentadol 75\n\nTests:\nCBC,\nThyroid TSH', '2019-03-28 09:32:45', '2019-03-28 09:32:45'),
(91, 103, 4734, NULL, NULL, '', '2019-03-28 09:38:50', NULL, 'Mild case of cardio attack.\n\nAzithromycin 500 mg 1+0+1 AM\nMaxpro 500 mg 0+0+1 BM\nAntacid BM.\n\nTest:\nCBC\nTSH', '2019-03-28 09:38:50', '2019-03-28 09:38:50'),
(89, 101, 4734, NULL, NULL, 'cardiologist ', '2019-03-27 13:21:27', NULL, 'Vibose 0+0+1 AM \nPentaloc 0+0+1 AM\n\nTest \nCSR.\nFBS. \n\nFollow up :\n30 Days', '2019-03-27 13:21:27', '2019-03-27 13:21:27'),
(88, 100, 4741, NULL, NULL, '', '2019-03-27 11:24:22', NULL, 'Mild concussion. Need Rest, and drink lots of water.\n\nMedication:\nVibose 0.3,\nBislol Plus 2.5 mg, \nMetaloc    100\n\nTests:\nCBC,\nT4,\n', '2019-03-27 11:24:22', '2019-03-27 11:24:22'),
(87, 99, 4741, NULL, NULL, 'Dr. Hasan Shahriar Kallol-General Surgery-Pallobi, Mirpur-01819287064, Dr. Mirza Nurul Karim-Medicine-Dhaka-01711065068, ', '2019-03-27 11:05:39', NULL, 'Mayil Condition Not So Much Issues With The Patients Attention At This Point But Following Up On The Current Condition In Few Days.\n\nMedicine:, A Cal   Chewable 250 1+1+1 After meal, \nOceancal DX 1+0+1  every 6 hour\n\nTest:  need Widal Test, VDRL, CBC\n\nFollowup after 3 days', '2019-03-27 11:05:39', '2019-03-27 11:05:39'),
(86, 98, 4741, NULL, NULL, '', '2019-03-27 09:46:19', NULL, 'Mussle put most likely. Need to rest. No heavy lifting.\n\nIf the pain persists. Take follow medication.\n\n1. Panadol 0+0+1 AM\n2. Pentaloc 75 mg 0+0+1 BM.\n\nFollow up 30 days.\n\nTests: \n1. CBC\n2. Fasting Sugar.\n\n', '2019-03-27 09:46:19', '2019-03-27 09:46:19'),
(85, 97, 4734, NULL, NULL, '', '2019-03-27 09:18:18', NULL, 'Mild fever. Need rest. \n\n1. Maxpro 30 mg 1+0+1 AM.\n2. Olmesan 20 mg 0+0+1 AM.\n\nFollow Up: 30days. \n\nPathology:\n1. CBC\n2. TSH \n3. H1CB', '2019-03-27 09:18:18', '2019-03-27 09:18:18'),
(96, 109, 4741, NULL, NULL, NULL, '2019-12-23 07:04:57', NULL, 'Panagra 50, 1+0+1 After Meal\nMaxpro    40, 1+1+1 Before Meal\nDivastin    20, 1+1+1 after Meal\n\nFollow up in 7 days\nCBC,\nTHS\n', '2019-12-23 07:04:57', '2019-12-23 07:04:57'),
(97, 116, 4741, NULL, NULL, NULL, '2019-12-23 07:10:58', NULL, 'Panadol   EXTRA,\nMaxpro 20, ', '2019-12-23 07:10:58', '2019-12-23 07:10:58'),
(98, 110, 4738, NULL, NULL, NULL, '2019-12-23 08:56:32', NULL, 'Panadol 500 mg 0+0+1 After', '2019-12-23 08:56:32', '2019-12-23 08:56:32'),
(99, 122, 4741, NULL, NULL, NULL, '2019-12-23 09:17:46', NULL, 'Napa    125 1+1+1,\n G Paracetamol.  1+0+1, \n\nTake rest and drink water', '2019-12-23 09:17:46', '2019-12-23 09:17:46'),
(100, 123, 4738, NULL, NULL, NULL, '2019-12-30 11:00:22', NULL, 'Come To The Office Next Monday Thank You', '2019-12-30 11:00:22', '2019-12-30 11:00:22'),
(101, 128, 4738, NULL, NULL, NULL, '2020-04-13 14:34:18', NULL, 'Paracetamol 500 1+0+1\nMetlab 0+0+1.\nResuva 5', '2020-04-13 14:34:18', '2020-04-13 14:34:18'),
(102, 129, 4738, NULL, NULL, NULL, '2020-04-15 04:19:59', NULL, 'Clean the surface regularly  with soapy water. \nPapa 500 0+0+1\nMaxtromer 0+0+1\n\nShow me the picture  in 3 days.', '2020-04-15 04:19:59', '2020-04-15 04:19:59'),
(103, 134, 4743, NULL, NULL, NULL, '2021-04-01 18:08:00', NULL, 'Migraine \nAlso out of control diabetes.\n\nTylenol 500 mg 1+1+1 5 days\nPentaloc 50 mg 1+0+0 30 days\nEmpa 20 mg 0+0+1 30 days\nResuva 20g 0+0+1 30 days\n\nFollow up with CT scan in a ween', '2021-04-01 18:08:00', '2021-04-01 18:08:00'),
(104, 137, 4743, NULL, NULL, NULL, '2021-11-08 06:39:30', NULL, 'Panagra 100, Omeprazole, \n\n\n', '2021-11-08 06:39:30', '2021-11-08 06:39:30'),
(105, 130, 4744, NULL, NULL, NULL, '2021-12-16 16:25:04', NULL, '', '2021-12-16 16:25:04', '2021-12-16 16:25:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
