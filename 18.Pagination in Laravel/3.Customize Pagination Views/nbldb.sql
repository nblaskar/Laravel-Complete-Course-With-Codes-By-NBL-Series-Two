-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 12:15 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nbldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `pass_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `city`, `marks`, `pass_date`) VALUES
(1, 'Sonam', 'sonam@gmail.com', 'Mumbai', '60', '2021-06-05'),
(2, 'Rahul', 'rahul@gmail.com', 'Delhi', '70', '2021-03-02'),
(3, 'Sumit', 'sumit@gmail.com', 'Hyderabad', '80', '2021-04-15'),
(4, 'Rohan', 'rohan@gmail.com', 'Kolkata', '75', '2021-05-26'),
(5, 'Kunal', 'kunal@gmail.com', 'Benglore', '85', '2021-06-19'),
(6, 'Marya', 'marya@gmail.com', 'Guwahati', '55', '2021-05-24'),
(7, 'Mack', 'mack@gmail.com', 'London', '95', '2021-07-02'),
(8, 'Firdaus', 'firdaus@gmail.com', 'Bihar', '88', '2021-07-21'),
(9, 'Kiran', 'kiran@gmail.com', 'Nagaland', '96', '2021-07-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
