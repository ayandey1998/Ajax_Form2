-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 12:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_form`
--

CREATE TABLE `ajax_form` (
  `id` tinyint(20) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ajax_form`
--

INSERT INTO `ajax_form` (`id`, `name`, `email`, `password`, `date_of_birth`, `username`) VALUES
(1, 'sdfsdf', 'ggjk@gmail.com', 'zzz', '2022-12-01', 'hgfgyu'),
(2, 'sdfsdf', 'ggjk@gmail.com', 'zzz', '2022-12-01', 'hgfgyu'),
(3, 'sdfsdf', 'ggjk@gmail.com', 'zzz', '2022-12-01', 'hgfgyu'),
(5, 'gfg', 'dfg@sdf.fg', '525', '2022-12-09', 'devil'),
(6, 'sgvrsxd', 'ggjk@gmail.com', '45245', '2022-12-01', 'dxb '),
(7, 'sdfsdf', 'dfg@sdf.fg', '523', '2022-12-02', 'devil'),
(8, 'ftrre', 'user22@gmail.com', '5354', '2022-12-20', 'swreg'),
(10, 'ijijijijijij', 'ayan@test.com', '554554', '2022-12-24', 'devil'),
(11, 'sdfsdf', 'dfg@sdf.fg', '454', '2022-12-21', 'dd'),
(48, 'ftrre', 'ayan@test.com', '26565', '2022-12-30', 'user2'),
(75, 'sdfsdf', 'user22@gmail.com', '4522', '2022-12-08', 'mmmm'),
(76, '5456', 'ggjk@gmail.com', '5134484', '2022-12-08', 'tttttt'),
(77, 'sdfsdf', 'dfg@sdf.fg', '54854', '2022-12-14', 'devil'),
(78, 'sdfsdf', 'dfg', '54854', '2022-12-14', 'devil'),
(79, 'Ayan 2022', 'dfg', '54854', '2022-12-14', 'devil'),
(80, 'sdfsdf', 'ggjk@gmail.com', '5458', '2022-12-08', 'devil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_form`
--
ALTER TABLE `ajax_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax_form`
--
ALTER TABLE `ajax_form`
  MODIFY `id` tinyint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
