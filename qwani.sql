-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 07:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qwani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tlb_blog_genre`
--

CREATE TABLE `tlb_blog_genre` (
  `blog_genre_id` int(11) NOT NULL,
  `genre_name` varchar(40) NOT NULL,
  `genre_posts` longtext DEFAULT NULL,
  `genre_icon` varchar(40) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tlb_blog_genre`
--

INSERT INTO `tlb_blog_genre` (`blog_genre_id`, `genre_name`, `genre_posts`, `genre_icon`, `date_created`, `is_deleted`) VALUES
(5, 'Philosophy', NULL, 'Philosophy.png', '2023-05-28 09:44:30', 0),
(6, 'erty', NULL, 'erty.png', '2023-05-28 09:46:42', 0),
(7, 'rtbnytui', NULL, 'rtbnytui.jpeg', '2023-05-28 09:47:23', 0),
(9, 'Atomic', NULL, 'Atomic.png', '2023-05-28 10:12:32', 0),
(10, 'New genre', NULL, 'New genre.png', '2023-05-28 12:43:57', 0),
(11, 'erthyu,kl;\'@sfgnhmj', NULL, 'erthyu,kl;\'@sfgnhmj.png', '2023-05-28 13:02:06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_blog_post`
--

CREATE TABLE `tlb_blog_post` (
  `blog_post_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `post_body` longtext NOT NULL,
  `post_author` int(11) NOT NULL,
  `post_genre` int(11) NOT NULL,
  `post_media` varchar(200) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_modified` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tlb_blog_post`
--

INSERT INTO `tlb_blog_post` (`blog_post_id`, `post_title`, `post_body`, `post_author`, `post_genre`, `post_media`, `date_created`, `date_modified`, `is_deleted`) VALUES
(1, 'Science Moto Moto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officia praesentium, cum, possimus iste ad tenetur porro quos adipisci cupiditate tempore delectus ea magnam reprehenderit quibusdam eaque veniam soluta quod.', 1, 5, 'Science Moto Moto.png', '2023-05-28 19:39:41', NULL, 0),
(2, 'Why are we here?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officia praesentium, cum, possimus iste ad tenetur porro quos adipisci cupiditate tempore delectus ea magnam reprehenderit quibusdam eaque veniam soluta quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic officia praesentium, cum, possimus iste ad tenetur porro quos adipisci cupiditate tempore delectus ea magnam reprehenderit quibusdam eaque veniam soluta quod.', 1, 9, 'Why are we here?.jpeg', '2023-05-28 19:54:13', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tlb_test`
--

CREATE TABLE `tlb_test` (
  `id` int(11) NOT NULL,
  `test_name` varchar(20) NOT NULL,
  `test_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tlb_test`
--

INSERT INTO `tlb_test` (`id`, `test_name`, `test_time`) VALUES
(1, 'Test no. 1', '2023-05-17 22:03:16'),
(2, 'Test no. 2', '2023-05-17 22:03:16'),
(3, 'Test no. 3', '2023-05-17 22:03:16'),
(4, 'Test no. 1', '2023-05-27 16:44:17'),
(5, 'Test no. 2', '2023-05-27 16:44:17'),
(6, 'Test no. 3', '2023-05-27 16:44:17'),
(7, 'Test no. 1', '2023-05-27 17:06:46'),
(8, 'Test no. 2', '2023-05-27 17:06:46'),
(9, 'Test no. 3', '2023-05-27 17:06:46'),
(10, 'New test no. 1', '2023-05-27 17:12:19'),
(11, 'New test no. 1', '2023-05-27 17:13:02'),
(12, 'New test no. 2', '2023-05-27 17:16:01'),
(13, 'New test no. 2', '2023-05-27 17:16:27'),
(14, 'New test no. 2', '2023-05-27 21:58:33');

-- --------------------------------------------------------

--
-- Table structure for table `tlb_user`
--

CREATE TABLE `tlb_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(270) NOT NULL,
  `confirmation_code` varchar(10) DEFAULT NULL,
  `confirmation_date` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tlb_user`
--

INSERT INTO `tlb_user` (`user_id`, `username`, `email`, `password`, `confirmation_code`, `confirmation_date`, `is_deleted`) VALUES
(1, 'QwaniAdmin', 'qwanitrust@gmail.com', '$2y$10$xyqmfu37jNpHsj2AKuA96uEc62KGENCzeA3EeXWjmKHTtqSNn3niC', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tlb_blog_genre`
--
ALTER TABLE `tlb_blog_genre`
  ADD PRIMARY KEY (`blog_genre_id`),
  ADD UNIQUE KEY `genre_name` (`genre_name`),
  ADD UNIQUE KEY `genre_icon` (`genre_icon`),
  ADD UNIQUE KEY `genre_name_2` (`genre_name`,`genre_icon`);

--
-- Indexes for table `tlb_blog_post`
--
ALTER TABLE `tlb_blog_post`
  ADD PRIMARY KEY (`blog_post_id`),
  ADD KEY `post_author` (`post_author`),
  ADD KEY `post_genre` (`post_genre`);

--
-- Indexes for table `tlb_test`
--
ALTER TABLE `tlb_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tlb_user`
--
ALTER TABLE `tlb_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tlb_blog_genre`
--
ALTER TABLE `tlb_blog_genre`
  MODIFY `blog_genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tlb_blog_post`
--
ALTER TABLE `tlb_blog_post`
  MODIFY `blog_post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tlb_test`
--
ALTER TABLE `tlb_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tlb_user`
--
ALTER TABLE `tlb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tlb_blog_post`
--
ALTER TABLE `tlb_blog_post`
  ADD CONSTRAINT `post_genre` FOREIGN KEY (`post_genre`) REFERENCES `tlb_blog_genre` (`blog_genre_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tlb_blog_post_ibfk_1` FOREIGN KEY (`post_author`) REFERENCES `tlb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
