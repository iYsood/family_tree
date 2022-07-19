-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2022 at 08:23 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` longtext NOT NULL,
  `submitted_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `photo`, `submitted_date`) VALUES
(1, 'دوار القربة', '62d60a04c51bc.jpg', '2022-07-19 04:34:17');

-- --------------------------------------------------------

--
-- Table structure for table `occasion`
--

CREATE TABLE `occasion` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `content` longtext NOT NULL,
  `photo` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `website_name` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL,
  `website_state` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`website_name`, `website_url`, `website_state`) VALUES
('عائلة الجريفاني', 'http://94.99.3.4/family', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tree_names`
--

CREATE TABLE `tree_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `father` int(11) DEFAULT NULL,
  `photo` longtext,
  `dateofbirth` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `is_dead` tinyint(1) NOT NULL DEFAULT '0',
  `death_city` varchar(255) DEFAULT NULL,
  `death_date` varchar(255) DEFAULT NULL,
  `daughter_info` longtext,
  `extra_info` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tree_names`
--

INSERT INTO `tree_names` (`id`, `name`, `fullname`, `label`, `father`, `photo`, `dateofbirth`, `city`, `work`, `is_dead`, `death_city`, `death_date`, `daughter_info`, `extra_info`) VALUES
(9, 'محمد', 'محمد', 'الجرافا حاضرة وبادية هم ابناء محمد بن جريفان بن محمد ينتسبون إلى الإلبينداء من المفضل من آل يحيا من عبدة من قبيلة شمر .', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
(10, 'جريفان', 'جريفان بن محمد', NULL, 9, NULL, NULL, 'حائل', 'لايعمل', 1, NULL, '2022', 'تسالنتس\r\n\r\n\r\nبنليبنلايباليبل', 'لايوجد'),
(18, 'محمد', 'محمد بن جريفان بن محمد', NULL, 10, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(19, 'سليمان ( قريان )', 'سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 18, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(20, 'سالم', 'سالم بن محمد بن جريفان بن محمد', NULL, 18, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(21, 'الصعيليك', 'الصعيليك بن سالم بن محمد بن جريفان بن محمد', NULL, 20, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(22, 'العريك', 'العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 20, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(23, 'العراك', 'العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 20, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(24, 'صالح ( شقران )', 'صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 19, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(25, 'محمد ( خزعل )', 'محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 19, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(26, 'حمد', 'حمد بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 19, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(27, 'عبدالله', 'عبدالله بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 19, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(28, 'حمد', 'حمد بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 25, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(29, 'عبدالله', 'عبدالله بن حمد بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 28, '62d60a4dd4e17.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(30, 'ابراهيم', 'ابراهيم بن حمد بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 28, '62d5f445710a0.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(31, 'خزعل', 'خزعل بن حمد بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 28, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(32, 'محمد', 'محمد بن حمد بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 28, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(33, 'سليمان', 'سليمان بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 25, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(34, 'إبراهيم', 'إبراهيم بن سليمان بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 33, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(35, 'حمد', 'حمد بن سليمان بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 33, '62d5f4a83b00d.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(36, 'عبدالله', 'عبدالله بن سليمان بن محمد ( خزعل ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 33, '62d5f4d0d9016.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(37, 'سليمان', 'سليمان بن حمد بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 26, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(38, 'حمد', 'حمد بن سليمان بن حمد بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 37, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(39, 'محمد', 'محمد بن عبدالله بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 27, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(40, 'سليمان', 'سليمان بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 24, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(41, 'محمد', 'محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 24, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(42, 'إبراهيم', 'إبراهيم بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 24, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(43, 'مطر', 'مطر بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 41, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(44, 'ابراهيم', 'ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 41, '62d5f586b5bd5.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(45, 'صالح', 'صالح بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 41, '62d5f59a6b9c6.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(46, 'عبدالرحمن', 'عبدالرحمن بن إبراهيم بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 42, '62d5f5d3137e1.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(47, 'سليمان', 'سليمان بن إبراهيم بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 42, '62d5f5e545ccf.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(48, 'أحمد', 'أحمد بن ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 44, '62d5f5f7d5e3a.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(49, 'علي', 'علي بن ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 44, '62d5f60bef159.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(50, 'عبدالعزيز', 'عبدالعزيز بن ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 44, '62d5f620da8cf.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(51, 'محمد', 'محمد بن ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 44, '62d5f63b8251f.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(52, 'صالح', 'صالح بن ابراهيم بن محمد بن صالح ( شقران ) بن سليمان ( قريان ) بن محمد بن جريفان بن محمد', NULL, 44, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(53, 'فهد', 'فهد بن الصعيليك بن سالم بن محمد بن جريفان بن محمد', NULL, 21, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(54, 'العفيس', 'العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 22, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(55, 'الشنوان', 'الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 23, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(56, 'نحيطر', 'نحيطر بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 54, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(57, 'مضحي', 'مضحي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 54, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(58, 'مثقال', 'مثقال بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 54, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(59, 'الطرقي', 'الطرقي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 54, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(60, 'بهيتان', 'بهيتان بن الطرقي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 59, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(61, 'ضاحي', 'ضاحي بن مثقال بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 58, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(62, 'مزعل ( عبدالهادي )', 'مزعل ( عبدالهادي ) بن ضاحي بن مثقال بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 61, '62d5f7f8dbeb6.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(63, 'حصو', 'حصو بن مضحي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 57, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(64, 'التريف', 'التريف بن مضحي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 57, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(65, 'حماد', 'حماد بن مضحي بن العفيس بن العريك بن سالم بن محمد بن جريفان بن محمد', NULL, 57, '62d5f84ddb4c5.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(66, 'مبارك', 'مبارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 55, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(67, 'مدارك', 'مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 55, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(68, 'مرفوع', 'مرفوع بن مبارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 66, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(69, 'خالد', 'خالد بن مرفوع بن مبارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 68, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(70, 'عتيق', 'عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 67, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(71, 'سالم', 'سالم بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 67, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(72, 'حنيان', 'حنيان بن عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 70, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(73, 'قعيميل', 'قعيميل بن حنيان بن عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 72, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(74, 'نايف', 'نايف بن حنيان بن عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 72, NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(75, 'عليان', 'عليان بن عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 70, '62d5f9042adbd.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL),
(76, 'صالح', 'صالح بن عليان بن عتيق بن مدارك بن الشنوان بن العراك بن سالم بن محمد بن جريفان بن محمد', NULL, 75, '62d5f92617b6d.jpg', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `permission`) VALUES
(1, 'iysood', 'tkfeeny@gmail.com', '202cb962ac59075b964b07152d234b70', '1,2,5,6,8'),
(2, 'faisal', 'aaa@qqq.com', '121', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `website_content`
--

CREATE TABLE `website_content` (
  `id` int(11) NOT NULL,
  `family_lineage` longtext,
  `family_about` longtext,
  `family_men` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `website_content`
--

INSERT INTO `website_content` (`id`, `family_lineage`, `family_about`, `family_men`) VALUES
(1, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occasion`
--
ALTER TABLE `occasion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tree_names`
--
ALTER TABLE `tree_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_content`
--
ALTER TABLE `website_content`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `occasion`
--
ALTER TABLE `occasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tree_names`
--
ALTER TABLE `tree_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `website_content`
--
ALTER TABLE `website_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
