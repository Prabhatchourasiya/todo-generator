-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2022 at 08:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`, `created_at`) VALUES
(1, 'prabhat', '12345', '2022-02-10 08:39:02'),
(2, 'prabhat', '12345', '2022-02-10 08:39:55'),
(3, 'prabhat', '12345', '2022-02-10 08:40:13'),
(4, 'prabhatc', '1111', '2022-02-10 09:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `title`, `description`, `created_at`) VALUES
(2, 'Cumque accusantium u', 'Proident dolor odio', '2022-02-10 18:10:22'),
(3, 'Sit iure quasi itaq', 'Deleniti dolorum sit', '2022-02-10 18:10:32'),
(4, 'Sit sit unde volupt', 'Consequatur Adipisi', '2022-02-09 20:03:22'),
(5, 'Eligendi ab sint inc', 'Voluptatem maxime q', '2022-02-09 20:03:25'),
(6, 'Qui laborum reprehen', 'Voluptatibus dolor s', '2022-02-09 20:03:29'),
(7, 'Quidem eligendi quo ', 'Cupiditate inventore', '2022-02-09 20:03:33'),
(84, 'Nisi rerum nulla et ', 'Inventore tempore d', '2022-02-10 18:11:39'),
(118, 'Aut nihil sint fugia', 'Assumenda ipsa omni', '2022-02-10 19:40:14'),
(119, 'Eum iste amet quis ', 'Nulla ea similique i', '2022-02-10 19:40:22'),
(120, 'Maiores excepteur ne', 'In sit perspiciatis', '2022-02-10 19:40:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
