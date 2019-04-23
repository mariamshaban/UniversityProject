-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 02:17 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `title2` varchar(255) DEFAULT NULL,
  `text` text,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `title2`, `text`, `image`, `created_at`, `updated_at`) VALUES
(7, 'من نحن', 'ما يميزنا', 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم  لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم  لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', '1555444131.jpg', '2019-04-16 17:48:51', '2019-04-16 17:48:51');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `image`, `short_description`, `text`, `created_at`, `updated_at`) VALUES
(4, 'some dummy text', '1555443948.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus', '2019-04-16 17:45:48', '2019-04-16 17:45:48'),
(5, 'some dummy text', '1555451614.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus', '2019-04-17 10:15:29', '2019-04-16 19:53:35'),
(6, 'some dsdsdtext', '1555451614.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus', '2019-04-17 10:15:29', '2019-04-16 19:53:35'),
(7, 'sdsdsds dsdsdtext', '1555451614.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus', '2019-04-17 10:15:29', '2019-04-16 19:53:35');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(200) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `name_en`, `name_ar`, `created_at`, `updated_at`) VALUES
(2, 'Alex', 'الإسكندرية', '2019-04-16 13:08:12', '2019-04-14 09:33:03'),
(3, 'Cairo', 'القاهرة', '2019-04-16 12:24:37', '2019-04-16 12:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `mail`, `name`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'lokixysuxe@mailinator.net', 'Carlos Hines', '+1 (222) 575-8367', 'Rerum et quis ea fug', 'Officiis quisquam au', '2019-04-15 11:13:08', '2019-04-15 11:13:08'),
(7, 'metatamuw@mailinator.com', 'mariam', '+1 (804) 801-7436', 'Assumenda tenetur mo', 'gfdgbvdsfgvb', '2019-04-15 11:26:21', '2019-04-15 11:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `code` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `name_en`, `name_ar`, `code`, `created_at`, `updated_at`) VALUES
(1, 'ِArabic', 'العربية', '1', '2019-04-16 19:42:53', '2019-04-16 17:42:53'),
(2, 'English', 'الإنجليزية', '2', '2019-04-16 19:43:04', '2019-04-16 17:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `news_latter`
--

CREATE TABLE `news_latter` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `massage` text NOT NULL,
  `cretaed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news_latter`
--

INSERT INTO `news_latter` (`id`, `mail`, `massage`, `cretaed_at`, `updated_at`) VALUES
(1, 'hh.hh@aa.com', 'kkkkk', '2019-04-14 12:50:07', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `comment` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(255) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `text`, `title`, `created_at`, `updated_at`) VALUES
(3, 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', '2019-04-16 17:49:28', '2019-04-16 17:49:28'),
(4, 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', '2019-04-16 17:49:38', '2019-04-16 17:49:38'),
(5, 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', '2019-04-16 17:49:46', '2019-04-16 17:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(40) NOT NULL,
  `logo` varchar(25) DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `facebook` varchar(200) DEFAULT NULL,
  `twitter` varchar(200) DEFAULT NULL,
  `instgram` varchar(200) DEFAULT NULL,
  `pinterst` varchar(200) DEFAULT NULL,
  `google_plus` varchar(200) DEFAULT NULL,
  `linkedin` varchar(200) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `logo`, `name`, `facebook`, `twitter`, `instgram`, `pinterst`, `google_plus`, `linkedin`, `email`, `phone`, `address`, `longitude`, `latitude`, `video`, `created_at`, `updated_at`) VALUES
(8, '49454.jpeg', 'Heidi Lane', 'Esse at repellendus', 'Vero voluptatum quia', 'Voluptatem possimus', 'Vitae aliquip illo i', 'Aut tempore archite', 'Dolores libero conse', 'zaduqa@mailinator.com', '+1 (781) 513-7641', 'Sit ad libero quisqu', 'Fuga Duis dolorem d', 'In hic omnis ex odio', '32504361.mp4', '2019-04-18 12:11:06', '2019-04-18 10:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(25) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `text1` varchar(255) DEFAULT NULL,
  `text2` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `link`, `text1`, `text2`, `short_description`, `created_at`, `updated_at`) VALUES
(13, '1555444258.jpg', 'Adipisci quia velit', 'Aut quia deserunt im', 'nihil et d', 'لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم لوريم ابسوم', '2019-04-16 17:50:58', '2019-04-16 17:50:58'),
(14, '1555444277.jpg', 'Sunt Nam neque ea i', 'Aut quia deserunt im', 'nihil et d', 'Dolores adipisci mol', '2019-04-16 17:51:17', '2019-04-16 17:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(11) NOT NULL,
  `uni_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `uni_id`, `name`, `description`, `type`, `created_at`, `updated_at`) VALUES
(3, NULL, 'مواعيد هامة', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', '11', '2019-04-16 17:41:56', '2019-04-16 17:41:56'),
(5, NULL, 'مواعيد هامة', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore impedit quae repellendus provident dolor iure poss imusven am aliquam. Officiis totam ea laborum deser unt vonsess. iure poss imusven am aliquam', '10', '2019-04-17 19:11:30', '2019-04-17 19:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(200) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `type` double DEFAULT '1',
  `city_id` int(255) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `int_order` int(11) DEFAULT NULL,
  `loc_order` int(11) DEFAULT NULL,
  `est_date` date DEFAULT NULL,
  `uni_website` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `about` text,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `exam` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `name_ar`, `name_en`, `type`, `city_id`, `status`, `int_order`, `loc_order`, `est_date`, `uni_website`, `latitude`, `longitude`, `about`, `image`, `created_at`, `updated_at`, `exam`) VALUES
(10, 'جامعة عدنان مندريس', 'Emerald Horne', 1, 3, 1, 45, 54, '1974-06-14', 'https://www.rycisebufonit.cm', 'Quod ex quis ipsam a', 'Vel ducimus dolores', 'Soluta quia incidunt', '1555443553.png', '2019-04-17 10:15:11', '2019-04-16 17:39:13', 0),
(11, 'جامعة عدنان مندريس', 'Hollee Hammond', 0, 3, 0, 41, 64, '2014-09-26', 'https://www.hakuxex.co.uk', 'Magni do cum et nost', 'Exercitationem illo', 'Expedita unde obcaec', '1555443582.png', '2019-04-16 17:39:42', '2019-04-16 17:39:42', 0),
(12, 'جامعة عدنان مندريس', 'Angelica Whitney', 0, 3, 0, 93, 59, '1989-09-06', 'https://www.jejucycuxav.com.au', 'Sapiente consequat', 'Facere facilis enim', 'Ad exercitationem ex', '1555443604.png', '2019-04-16 17:40:04', '2019-04-16 17:40:04', 0);

-- --------------------------------------------------------

--
-- Table structure for table `university_lang`
--

CREATE TABLE `university_lang` (
  `id` int(11) NOT NULL,
  `university_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `university_lang`
--

INSERT INTO `university_lang` (`id`, `university_id`, `lang_id`, `created_at`, `updated_at`) VALUES
(7, 10, 2, '2019-04-16 17:39:13', '2019-04-16 17:39:13'),
(8, 11, 1, '2019-04-16 17:39:42', '2019-04-16 17:39:42'),
(9, 11, 2, '2019-04-16 17:39:42', '2019-04-16 17:39:42'),
(10, 12, 1, '2019-04-16 17:40:04', '2019-04-16 17:40:04'),
(11, 12, 2, '2019-04-16 17:40:04', '2019-04-16 17:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `password`, `admin`, `created_at`, `updated_at`) VALUES
(1, 'mariam', 'm.sh@ex.com', NULL, '$2y$10$wp1YY2a281YIo9kkkxj8duAL2MxWSZeUf6kNpSgwwUstPzvLsvNau', 0, '2019-04-11 11:54:14', '2019-04-11 11:54:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_latter`
--
ALTER TABLE `news_latter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university_lang`
--
ALTER TABLE `university_lang`
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
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news_latter`
--
ALTER TABLE `news_latter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `university_lang`
--
ALTER TABLE `university_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
