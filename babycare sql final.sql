-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 01:57 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `babycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `baby_name` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL,
  `appointment_time` time(6) NOT NULL,
  `baby_age` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`baby_name`, `appointment_date`, `appointment_time`, `baby_age`) VALUES
('nahul', '2024-03-15', '13:40:00.000000', 2),
('nahul', '2023-01-05', '14:44:00.000000', 2),
('nahul', '2023-10-13', '03:49:00.000000', 1),
('nahul', '2002-04-25', '12:00:00.000000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `name` varchar(30) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`name`, `username`, `password`) VALUES
('dfdf', 'nahulvijay@gmail.com', 'Nahul@121'),
('hhhhh', 'aldossinbox@gmail.com', 'Nahul@121'),
('Kisan', 'kisannallusamy@gmail.com', 'Kisan@121'),
('Nahul', 'nahulaccord2021@gmail.com', 'Kisan@121'),
('vijay', 'nahulaytin2510@gmail.com', 'Nahul@123');

-- --------------------------------------------------------

--
-- Table structure for table `vaccination_data`
--

CREATE TABLE `vaccination_data` (
  `baby_name` varchar(30) NOT NULL,
  `baby_age` int(20) NOT NULL,
  `dob` date NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `vaccines` varchar(30) NOT NULL,
  `image` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vaccination_data`
--

INSERT INTO `vaccination_data` (`baby_name`, `baby_age`, `dob`, `father_name`, `mother_name`, `vaccines`, `image`) VALUES
('nahul', 2, '2023-01-05', 'sridhar', 'anitha', 'diphtheria, tetanus', 'image/baby.jpg'),
('nahul', 2, '2023-01-05', 'sridhar', 'anitha', 'diphtheria, tetanus, pertussis', 'image/baby.jpg'),
('varun', 1, '2023-03-11', 'sridhar', 'krishnaveni', 'diphtheria, tetanus, pertussis', 'image/baby.jpg'),
('dfdf', 1, '2024-03-12', 'fdfddf', 'fdfd', 'diphtheria, tetanus, pertussis', 'image/user.png'),
('ghghg', 1, '2022-01-11', 'nnnn', 'nnnnn', 'diphtheria, tetanus, pertussis', 'image/vaccination.jpg'),
('dfgdgsdgd', 0, '2024-03-12', 'hhu', 'gdg', 'diphtheria, tetanus, pertussis', 'image/Indian_COVID-19_Vaccinat'),
('nahul', 5, '2002-04-25', 'sritahar', 'krishnaveni', 'diphtheria, tetanus, pertussis', 'image/nahul vaccine.jpe.jpg'),
('nahul', 2, '2023-05-25', 'srithar', 'krishnaveni', 'diphtheria, tetanus, pertussis', 'image/download.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`name`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
