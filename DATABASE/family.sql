
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
(1, 'sdfsdfsdfsd', '62d4e4116b67d.jpg', '2022-07-18 07:39:48');

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

--
-- Dumping data for table `occasion`
--

INSERT INTO `occasion` (`id`, `title`, `date`, `content`, `photo`) VALUES
(1, 'kashdfushdfushfkjsd', '2022-07-18', '<p>sdlfnsdjfnsjdnfkjsndfkjsdnbfkjsbdfkjsdfn</p>', '62d4e40715306.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `website_name` varchar(255) DEFAULT NULL,
  `website_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`website_name`, `website_url`) VALUES
('عائلة الجريفاني', 'http://localhost/family');

-- --------------------------------------------------------

--
-- Table structure for table `tree_names`
--

CREATE TABLE `tree_names` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `father` int(11) DEFAULT NULL,
  `photo` longtext,
  `dateofbirth` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `work` varchar(255) DEFAULT NULL,
  `death_city` varchar(255) DEFAULT NULL,
  `death_date` varchar(255) DEFAULT NULL,
  `daughter_info` longtext,
  `extra_info` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tree_names`
--

INSERT INTO `tree_names` (`id`, `fullname`, `father`, `photo`, `dateofbirth`, `city`, `work`, `death_city`, `death_date`, `daughter_info`, `extra_info`) VALUES
(9, 'محمد', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'جريفان', 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'محمد', 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'سالم', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'سليمان (قريان)', 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, '<h4 class=\"header-title\">نسب العائلة</h4><div><br></div>', '<h4 class=\"header-title\">عن العائلة</h4><div><br></div>', '<p><b>السلام عليكم ورحمة الله وبركاته</b></p><p>أهلا <font color=\"#ff00ff\">ومرحبا</font> بكم</p>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tree_names`
--
ALTER TABLE `tree_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
