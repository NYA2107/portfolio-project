-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 08:23 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_name` varchar(50) NOT NULL,
  `comment_text` text NOT NULL,
  `fk_image_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_name`, `comment_text`, `fk_image_id`) VALUES
('Imam Najibulloh HR', 'Wah bagus nih', 'img4'),
('Paijo', 'Waw keren', 'img4'),
('Imam', 'Go to Setting', 'img4'),
('Imam Najib', 'Wah bagus', 'img1'),
('Ghost', 'aha', 'img1'),
('Paijo', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.It is a long established fact ', 'img1'),
('Paijo', 'This defines the default behaviour for how flex items are laid out along the cross axis on the current line. Think of it as the justify-content version for the cross-axis (perpendicular to the main-axis).', 'img1'),
('Kipas Angin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sodales, eros ac fermentum consequat, lorem libero venenatis tellus, lacinia pulvinar arcu quam nec turpis. Integer sagittis leo et purus convallis, ut volutpat ex convallis. Pellentesque elementum euismod ligula vitae consectetur. Maecenas luctus tortor quis eleifend egestas. Pellentesque rhoncus at mi at commodo. Vivamus mollis, elit ac mattis tempor, nunc felis aliquam elit, sed luctus lacus erat sit amet tellus. Donec tristique leo nec nisl gravida mollis. Phasellus at odio suscipit, blandit nunc a, sagittis urna.', 'img1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` varchar(4) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `image_url`) VALUES
('img1', 'img/1.jpg'),
('img2', 'img/2.jpg'),
('img3', 'img/3.jpg'),
('img4', 'img/4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD KEY `fk_image_id` (`fk_image_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`fk_image_id`) REFERENCES `image` (`image_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
