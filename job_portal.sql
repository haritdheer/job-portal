-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 07:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(111) NOT NULL,
  `admin_email` varchar(111) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_username` varchar(111) NOT NULL,
  `first_name` varchar(111) NOT NULL,
  `last_name` varchar(111) NOT NULL,
  `admin_type` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `admin_username`, `first_name`, `last_name`, `admin_type`) VALUES
(4, 'yahoo12@gmail.com', '456', 'yahoo', 'yahoo', 'singh', '1'),
(5, 'hardikdheer12@gmail.com', '123', 'hardik', 'hardik', 'dheer', '2'),
(6, 'haritdheer1@gmail.com', '1234', 'harvy', 'harit', 'dheer', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin_type`
--

CREATE TABLE `admin_type` (
  `id` int(111) NOT NULL,
  `admin` varchar(111) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_type`
--

INSERT INTO `admin_type` (`id`, `admin`) VALUES
(1, 'Super admin'),
(2, 'Customer admin');

-- --------------------------------------------------------

--
-- Table structure for table `all_jobs`
--

CREATE TABLE `all_jobs` (
  `job_id` int(111) NOT NULL,
  `customer_email` varchar(111) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `des` varchar(111) NOT NULL,
  `country` varchar(111) NOT NULL,
  `state` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `keyword` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_jobs`
--

INSERT INTO `all_jobs` (`job_id`, `customer_email`, `job_title`, `des`, `country`, `state`, `city`, `keyword`, `category`) VALUES
(1, 'yahoo12@gmail.com', 'Web Developer', 'Frontend Developer', 'India', 'Delhi', 'New Delhi', 'Work from Home', 'React Js'),
(2, 'haritdheer@gmail.com', 'Digital Marketer', 'Youtube Services', 'UK', 'England', 'London', 'Remote', 'Undifferentiated marketing'),
(3, 'yahoo12@gmail.com', 'PHP Developer', 'Have knowledge of PHP,AJAX too', 'India', 'Tamil Nadu', 'Chennai', '4000/- stipend', 'PHP,AJAX'),
(4, 'haritdheer@gmail.com', 'Lawyer Intern', 'Knowledge of LLB mandatory', 'India', 'Rajasthan', 'Jaipur', 'Best tutors', 'BA,LLB');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(111) NOT NULL,
  `company` varchar(111) NOT NULL,
  `des` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company`, `des`) VALUES
(1, 'ASD', 'Marketing company'),
(2, 'RTY', 'Tutoring '),
(3, 'MOTIV', 'Motivational Seminars'),
(4, 'VarieT', 'PHP Developers'),
(5, 'BNM', 'Youtube Ad Services');

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker`
--

CREATE TABLE `jobseeker` (
  `id` int(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobseeker`
--

INSERT INTO `jobseeker` (`id`, `email`, `password`, `first_name`, `last_name`, `dob`, `mobile_number`) VALUES
(1, 'yahoo12@gmail.com', '123456', 'Hardik', 'Dheer', '01-10-2002', '454649494'),
(2, 'haritdheer@gmail.com', '123456', 'Harit', 'Dheer', '01-10-2002', '7847646478');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE `job_category` (
  `id` int(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `des` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`id`, `category`, `des`) VALUES
(1, 'PHP,AJAX', 'For Freshers Only'),
(2, 'Python', 'DSA and OOPs'),
(3, 'React Js', 'Frontend Development'),
(4, 'BA,LLB', 'For Advocates'),
(5, 'Product Category', 'Undifferentiated marketing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_jobs`
--
ALTER TABLE `all_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `jobseeker`
--
ALTER TABLE `jobseeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_category`
--
ALTER TABLE `job_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `all_jobs`
--
ALTER TABLE `all_jobs`
  MODIFY `job_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobseeker`
--
ALTER TABLE `jobseeker`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_category`
--
ALTER TABLE `job_category`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
