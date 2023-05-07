-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 05:23 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructorID` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `second_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `experience` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentID` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `second_name` varchar(50) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL,
  `course` varchar(30) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`studentID`, `first_name`, `second_name`, `last_name`, `gender`, `phone`, `email`, `password`, `course`, `age`) VALUES
(1, 'moses', 'lyni', 'Mwanza', 'Male', 793702965, '17279@student.embuni.ac.k', '1234', 'IT', 20),
(5, 'Andy', 'Mureithi', 'Irungu', 'Male', 727691196, 'Murray@gmail.com', 'poiuy', 'Computer Science', 19),
(10, 'Bob', 'Amos', 'muhammed', 'Male', 2147483647, 'Salah@gmail.com', '09876', 'PHYSICAL EDUCATION', 22),
(11, 'Leo', 'lyni', 'Mwanza', 'Female', 2147483647, 'LYNI@GMAIL.COM', '1234568', 'ARTS', 55),
(17, 'Jack', 'Chen', 'Kim', 'Male', 2147483647, 'jackchen@yahoo.com', 'PASSWORD', 'BUSINESS', 21),
(48, 'Joan', 'Williams', 'Ben', 'Female', 34567856, 'alicewilliams@hotmail.com', 'CVBNM', 'IT', 33),
(50, 'Kelvin', 'Kinuthia', 'Wilson', 'Male', 2147483647, 'Kinuthia@yahoo.com', '4567', 'BUSINESS', 33),
(63, 'Mary', 'Wanjiru', 'Davis', 'Female', 2147483647, 'maryliii@gmail.com', 'zxczx', 'IT', 21);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructorID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
