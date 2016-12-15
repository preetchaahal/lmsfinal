-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 03:42 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dzstd_lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `lms_admins_dzstd`
--

CREATE TABLE `lms_admins_dzstd` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_admins_dzstd`
--

INSERT INTO `lms_admins_dzstd` (`id`, `username`, `password`, `email`, `fullname`, `image`, `active`) VALUES
(5, 'admin', '25d55ad283aa400af464c76d713c07ad', 'admin@site.co', 'Harpreet Singh', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lms_assignments_dzstd`
--

CREATE TABLE `lms_assignments_dzstd` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `max_marks` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lms_cms_pages_dzstd`
--

CREATE TABLE `lms_cms_pages_dzstd` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `note` text,
  `route` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `filename` varchar(255) NOT NULL,
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lms_courses_dzstd`
--

CREATE TABLE `lms_courses_dzstd` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_courses_dzstd`
--

INSERT INTO `lms_courses_dzstd` (`id`, `name`, `display_name`, `duration`, `description`, `active`, `archived`) VALUES
(1, 'MID', 'Masters In Interior Deisgn', 3, 'Just a dummy text to describe how awesome this course is', 1, 0),
(2, 'MID', 'Master in Interior Designing', 3, 'Well just a dummy description', 1, 0),
(3, 'BID', 'Bachelor in Interior Designing', 3, 'Nothing just feelin awesome', 1, 0),
(4, 'DID', 'Diploma in Interior Designing', 3, 'nothing just a bs stuff', 1, 0),
(5, 'BCA', 'Bachelor in Computer Applications', 6, 'Total time waster.', 1, 0),
(6, 'MCA', 'Masters In Computer Applications', 6, 'Well again a time waster. I would say', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lms_relation_courses_assignments_dzstd`
--

CREATE TABLE `lms_relation_courses_assignments_dzstd` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `assignment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lms_relation_courses_students_dzstd`
--

CREATE TABLE `lms_relation_courses_students_dzstd` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lms_students_dzstd`
--

CREATE TABLE `lms_students_dzstd` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `access_level` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `archived` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lms_students_dzstd`
--

INSERT INTO `lms_students_dzstd` (`id`, `username`, `email`, `password`, `fullname`, `image`, `dob`, `created_at`, `access_level`, `active`, `archived`) VALUES
(2, 'johndoe', 'john@doe.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, '2016-12-02 19:37:52', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lms_study_material_dzstd`
--

CREATE TABLE `lms_study_material_dzstd` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `course_id` int(11) NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `link` text,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lms_admins_dzstd`
--
ALTER TABLE `lms_admins_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_assignments_dzstd`
--
ALTER TABLE `lms_assignments_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_cms_pages_dzstd`
--
ALTER TABLE `lms_cms_pages_dzstd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `lms_courses_dzstd`
--
ALTER TABLE `lms_courses_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_relation_courses_assignments_dzstd`
--
ALTER TABLE `lms_relation_courses_assignments_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_relation_courses_students_dzstd`
--
ALTER TABLE `lms_relation_courses_students_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lms_students_dzstd`
--
ALTER TABLE `lms_students_dzstd`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lms_study_material_dzstd`
--
ALTER TABLE `lms_study_material_dzstd`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lms_admins_dzstd`
--
ALTER TABLE `lms_admins_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `lms_assignments_dzstd`
--
ALTER TABLE `lms_assignments_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lms_cms_pages_dzstd`
--
ALTER TABLE `lms_cms_pages_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lms_courses_dzstd`
--
ALTER TABLE `lms_courses_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `lms_relation_courses_assignments_dzstd`
--
ALTER TABLE `lms_relation_courses_assignments_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lms_relation_courses_students_dzstd`
--
ALTER TABLE `lms_relation_courses_students_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lms_students_dzstd`
--
ALTER TABLE `lms_students_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `lms_study_material_dzstd`
--
ALTER TABLE `lms_study_material_dzstd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
