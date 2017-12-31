-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2017 at 04:17 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brw_files`
--

CREATE TABLE `brw_files` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `record_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brw_images`
--

CREATE TABLE `brw_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `record_id` int(10) UNSIGNED NOT NULL,
  `model` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brw_images`
--

INSERT INTO `brw_images` (`id`, `name`, `record_id`, `model`, `description`, `category_code`, `created`, `modified`) VALUES
(1, '6732ae4b41b38d5f2d73d2626a8f6c9c02065c8f.jpg', 4, 'Post', '', 'main', '2017-12-19 23:52:55', '2017-12-19 23:52:55'),
(2, '_6732ae4b41b38d5f2d73d2626a8f6c9c02065c8f.jpg', 4, 'Post', '123', 'gallery', '2017-12-19 23:52:55', '2017-12-19 23:52:55'),
(3, '.jpeg', 5, 'Fang', '', 'main', '2017-12-21 20:52:42', '2017-12-21 20:52:42'),
(4, 'slider3.png', 1, 'History', '', 'main', '2017-12-31 04:10:54', '2017-12-31 04:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `brw_users`
--

CREATE TABLE `brw_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brw_users`
--

INSERT INTO `brw_users` (`id`, `email`, `password`, `last_login`, `created`, `modified`) VALUES
(2, 'test@gmail.com', 'cb9dd60a394cddb9abf1a0dc0d973ca7cd015edf', '2017-12-31 04:10:06', '2017-12-19 22:41:55', '2017-12-19 22:41:55');

-- --------------------------------------------------------

--
-- Table structure for table `fangs`
--

CREATE TABLE `fangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `body` text,
  `price` int(11) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fangs`
--

INSERT INTO `fangs` (`id`, `address`, `body`, `price`, `link`, `city`, `created`, `modified`) VALUES
(5, '2345 wemman dr', '1500 fts\r\n', 500, 'baidu.com', 'Vancouver', '2017-12-21 20:52:42', '2017-12-21 20:52:42');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `body` text,
  `price` int(11) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `address`, `body`, `price`, `link`, `city`, `created`, `modified`) VALUES
(1, '2775', '123321', 30, '', 'van', '2017-12-31 04:10:54', '2017-12-31 04:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created`, `modified`) VALUES
(1, 'The title', 'This is the post body.', '2017-12-19 23:17:24', NULL),
(2, 'A title once again', 'And the post body follows.', '2017-12-19 23:17:24', NULL),
(3, 'Title strikes back', 'This is really exciting! Not.', '2017-12-19 23:17:24', NULL),
(4, '', '', '2017-12-19 23:52:55', '2017-12-19 23:52:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brw_files`
--
ALTER TABLE `brw_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `brw_images`
--
ALTER TABLE `brw_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_code` (`category_code`);

--
-- Indexes for table `brw_users`
--
ALTER TABLE `brw_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- Indexes for table `fangs`
--
ALTER TABLE `fangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brw_files`
--
ALTER TABLE `brw_files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brw_images`
--
ALTER TABLE `brw_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brw_users`
--
ALTER TABLE `brw_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fangs`
--
ALTER TABLE `fangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
