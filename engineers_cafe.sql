-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2019 at 04:48 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engineers_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(100) NOT NULL,
  `post_heading` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `link` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) NOT NULL,
  `sector` varchar(500) NOT NULL,
  `question` varchar(10000) NOT NULL,
  `option_a` varchar(500) NOT NULL,
  `option_b` varchar(500) NOT NULL,
  `option_c` varchar(500) NOT NULL,
  `option_d` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `sector`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `answer`, `is_active`) VALUES
(1, 'auto mobile', 'Are you sure ____ success?', 'on', 'about', 'by', '', 'of', 0),
(2, 'auto mobile', 'These mangoes are superior __ those mangoes.', 'of', 'to', 'on', '', 'to', 0),
(3, 'auto mobile', 'We made an arrangement __  a picnic.', 'on', 'for', 'against', '', 'for', 0),
(4, 'auto mobile', 'Your advice is valuable __ me.', 'for', 'to', 'over', '', 'to', 0),
(5, 'auto mobile', 'Some parents are very strict __  their children.', 'on', 'to', 'about', '', 'with', 0),
(6, 'auto mobile', 'He wrote an application __ the chairman __ casual leave.', 'by,on', 'to,on', 'to,for', '', 'to,for', 0),
(7, 'auto mobile', 'what is engineers cafe?', 'a site', 'an education website', 'social site', '', 'an education site', 0),
(8, 'auto mobile', 'what is engineers cafe?', 'a site', 'an education website', 'social site', '', 'an education site', 0),
(9, 'auto mobile', 'what is engineers cafe?', 'a site', 'an education website', 'social site', '', 'an education site', 0),
(10, 'English', 'what is engineers cafe?', 'a site', 'an education website', 'social site', 'sfgdgdg', 'bababba', 0),
(11, 'English', 'what is engineers cafe?', 'a site', 'an education website', 'social site', '', 'an education site', 0),
(12, 'English', 'Are you sure ____ success?', 'dsfsfsf', 'rtreter', 'social site', '', 'an education site', 0),
(13, 'English', 'Are you sure ____ success?', 'dsfsfsf', 'rtreter', 'social site', '', 'an education site', 0),
(14, 'English', 'retetretretet', 'sada', 'dadsd', 'rttertretu', 'uyiuyiy', 'tryry', 0),
(15, 'English', 'wqey i', 'ioywe ', ' hwiwe ', 'eoiwyriy', 'hkfhksdhfks', 'ewrfds', 0),
(16, 'auto mobile', 'what is auto mobile?', 'janina', 'tao janina', 'kisu janina', 'ghorar dim jani', 'kisu janina', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `regtime` datetime(6) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
