-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2021 at 06:47 PM
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
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sonam', 'sonam@gmail.com', '$2y$10$n9ybNV.0X8qOIRIfjd1kqOTB6lfplSZ8N/V9ZrqZEYVHMM4WZCr0a'),
(2, 'rwE9G7J3au', 'azjk8AU0Xx@gmail.com', '$2y$10$hYbTQh6VcyeCpLNPCvnpUuM2OAYxaz7HRIbtiSQwL/.BYrS6zL3ri'),
(3, 'BwCbZ4lHSt', '8TiOVASYdZ@gmail.com', '$2y$10$X1ho7CtMhbGOtssbRsaYteX434WKeBlt2G1l4.pfj0ByMMndDhIYu'),
(4, 'NLlxiOa7rT', 'pfCWpgxD26@gmail.com', '$2y$10$Gs5so6Q/5cXOCOOsY3N8COs0VT3IkMmZwWUmpSINKlBreyJUnVXbi'),
(5, 'txMEVhA5lp', 'RJn42on6on@gmail.com', '$2y$10$8T7AkZexUPBdmfbb7TIBpuVZZyVd3amIPkPWpaVoAg1n.UHQzFZUO'),
(6, 'QjSwgIwPJi', 'aMLZuACHGN@gmail.com', '$2y$10$URQS4iAyvFYMvXAdIsqcGuj/CEYL9nLoBZ0xe2ppwd4FfRJSGWkW2'),
(7, 'F3kkKKyM7b', 'n4C3xU60QL@gmail.com', '$2y$10$irx4/JZrkj7tO43dm6xe7.bHmJ.8LFILhad6tojrNfokXGqAer4iO'),
(8, 'Cristina Olson', 'vrobel@example.com', '$2y$10$Pq3FDzsJRmLCDT3B4h2Zq.5oUesi/NE.0cLrkF0OQDAh6QHf8IOI6'),
(9, 'Ada Wyman PhD', 'stanley01@example.org', '$2y$10$ABickdjht1EF5P2DwMDdIudDYmkyE5RV0rlchqyuixMBB22meWtGe'),
(10, 'Dr. Glenda Wisoky', 'hwilliamson@example.com', '$2y$10$Mzu5BFQ9KivaiGEmwFIwUOMOcIhawIn5d/D3wPvBiGwjpNPtLrbFy'),
(11, 'Miss Eileen Maggio', 'kelsie.harvey@example.com', '$2y$10$C7aY0WAGCBieKc6gj.UtnetFS1ONwDT08aCpfq4MikYj9ITkIjYRm'),
(12, 'Dr. Bella Goldner III', 'awolff@example.com', '$2y$10$6GIsL9ZsotsP0apeB5omSO6Argd0uIRhf./y1NQWJo3Exj2o25fjC');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
