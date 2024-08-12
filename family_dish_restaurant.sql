-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 11:31 AM
-- Server version: 8.0.38
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `family_dish_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `guests` int NOT NULL,
  `special_requests` text
) ;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `name`, `email`, `phone`, `date`, `time`, `guests`, `special_requests`) VALUES
(3, 'waruma', 'asd@gmail.com', '0710631468', '2024-08-08', '12:22:00', 5, 'none'),
(4, 'Snow Man', 'warun@gmail.com', '0710631468', '2024-08-16', '13:30:00', 5, 'None'),
(5, 'swe', 'asd@gmail.com', '0710631468', '2024-08-20', '02:03:00', 12, 'dfre'),
(10, 'Alice Johnson', 'alice@example.com', '0712345678', '2024-08-15', '18:30:00', 4, 'Vegetarian meal preferred'),
(11, 'Bob Smith', 'bob@example.com', '0712345679', '2024-08-16', '19:00:00', 2, 'Window seat requested'),
(12, 'yash', 'thisarayashodha4@gmail.com', '12324', '2025-12-05', '12:50:00', 4, 'sdfsdfwef'),
(13, 'ascasc', 'ascacsasc@gmail.com', '12324', '2024-08-16', '20:52:00', 5, 'ascasacsasc');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `name`, `email`, `phone`, `message`) VALUES
(2, 'Snow Man', 'warun@gmail.com', '0710631468', 'good'),
(3, 'Snow Man', 'warun@gmail.com', '0710631468', 'good'),
(4, 'Snow Man', 'warun@gmail.com', '0710631468', 'good'),
(5, 'WHR Wallpaper', 'dh@gmail.com', '0710631468', 'xdfd'),
(6, 'Snow Man', 'warun@gmail.com', '0710631468', 'dgdhsh'),
(7, 'Charlie Brown', 'charlie@example.com', '0712345680', 'I have a question about your menu. Can you provide more details on vegan options?'),
(8, 'asacs', 'thisarayashodha4@gmail.com', '12324', 'sacas');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `rating` int NOT NULL,
  `comments` text NOT NULL
) ;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `name`, `email`, `rating`, `comments`) VALUES
(3, 'Snow Man', 'warun@gmail.com', 2, 'dfdsg'),
(4, 'Dave Wilson', 'dave@example.com', 5, 'Excellent food and service! Highly recommended.'),
(5, 'Eva Green', 'eva@example.com', 4, 'Great experience, but the wait time was a bit long.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
