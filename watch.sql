-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2019 at 10:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watch`
--

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `watching` varchar(30) NOT NULL,
  `title` varchar(260) NOT NULL,
  `genre` varchar(30) NOT NULL,
  `platform` varchar(30) NOT NULL,
  `who` varchar(30) NOT NULL,
  `experience` varchar(30) NOT NULL,
  `comments` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `name`, `watching`, `title`, `genre`, `platform`, `who`, `experience`, `comments`) VALUES
(6, 'AAron', 'TV Show', 'Dark Stuff', 'Horror', 'Hulu', 'Solo', 'Amazing', 'Cheese'),
(8, 'Ty', 'Movie', 'Cheese 2: 2 Swiss to Miss', 'Action/Adventure', 'Netflix', 'Solo', 'Amazing', 'cheese'),
(9, 'Jean', 'Movie', 'Good Burger', 'Comedy', 'Amazon Prime', 'Significant Other', 'Amazing', 'IT WASSSS DOPE'),
(10, 'Jadennifer Jadiniston', 'Movie', 'The Departed', 'Action/Adventure', 'Netflix', 'Significant Other', 'Amazing', 'It was a beautiful experience and I enjoyed every second of it.'),
(11, 'D\'Squarious Lasmoochie Wallace', 'TV Show', 'Key and Peele', 'Comedy', 'Hulu', 'Friend(s)', 'Amazing', 'Hilarious!!'),
(12, 'Robert ', 'Movie', 'Coming to America ', 'Comedy', 'Other', 'Solo', 'Amazing', 'Eddie Murphy is a god.'),
(13, 'Bernard', 'Movie', 'Space Jam', 'Animated', 'Other', 'Solo', 'Great', 'Michael Jordan is the GOAT'),
(14, 'Monkey Man ', 'TV Show', 'Hey Arnold', 'Animated', 'Amazon Prime', 'Solo', 'Solid', 'Nostalgic'),
(15, 'Anderson ', 'Movie', 'Barbershop', 'Comedy', 'Other', 'Significant Other', 'Great', 'Funny movie '),
(16, 'Bom Trady', 'TV Show', 'The Office', 'Comedy', 'Netflix', 'By Myself', 'Solid', 'Love Steve Carell ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
