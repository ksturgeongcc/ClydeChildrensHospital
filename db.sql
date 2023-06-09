-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 01:59 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `title` varchar(132) NOT NULL,
  `date` datetime DEFAULT NULL,
  `dept_id` int(10) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `video_path` tinytext NOT NULL,
  `description` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `title`, `date`, `dept_id`, `patient_id`, `video_path`, `description`) VALUES
(3, 'Hand x-ray', '2023-06-13 01:33:14', 1, 11, 'https://www.youtube.com/embed/J6Po-Uc7IPY', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum e'),
(4, 'Toy removal from ear', '2023-06-21 10:20:00', 2, 12, 'https://www.youtube.com/embed/HDJdR8m3-CQ', 'ent description');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `staff_nurse_img` varchar(32) NOT NULL,
  `doctor_img` varchar(32) NOT NULL,
  `nurse_img` varchar(32) NOT NULL,
  `staff_nurse_name` varchar(64) NOT NULL,
  `doctor_name` varchar(64) NOT NULL,
  `nurse_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `name`, `staff_nurse_img`, `doctor_img`, `nurse_img`, `staff_nurse_name`, `doctor_name`, `nurse_name`) VALUES
(1, 'X-Ray', 'xray-nurse.jpg', 'xray-consultant.jpg', 'ent-nurse.jpg', 'X-Ray Staff Nurse', 'X-Ray Doctor', 'X-Ray Nurse'),
(2, 'ENT', 'ent-nurse.jpg', 'ent-consultant.jpg', 'xray-nurse.jpg', 'Ent Staff Nurse', 'Ent Doctor', 'Ent Nurse');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(264) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `username`, `password`, `admin`) VALUES
(18, 'karen', '$2y$10$7XLBuMQzJKwhqoLsSuBSbecT81bdRp1ag5fp.L.5u7l4dNXQxHJCu', 0),
(19, 'admin', '$2y$10$7XLBuMQzJKwhqoLsSuBSbecT81bdRp1ag5fp.L.5u7l4dNXQxHJCu', 1),
(20, 'adam', '$2y$10$e7swl1Wz0IPionu1JN5M5uNVkpD3Rld75B03fMLujUm0dxLQE91cm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_details`
--

CREATE TABLE `patient_details` (
  `id` int(11) NOT NULL,
  `firstname` tinytext NOT NULL,
  `surname` varchar(32) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `guardian` varchar(132) DEFAULT NULL,
  `guardian_role` varchar(32) DEFAULT NULL,
  `tel_num` varchar(12) DEFAULT NULL,
  `login_details_id` int(11) NOT NULL,
  `email` varchar(132) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_details`
--

INSERT INTO `patient_details` (`id`, `firstname`, `surname`, `address`, `guardian`, `guardian_role`, `tel_num`, `login_details_id`, `email`) VALUES
(11, 'karen', 'sturgeon', NULL, NULL, NULL, NULL, 18, 'karen@email.com'),
(12, 'Adam', 'Stephen', NULL, NULL, NULL, NULL, 20, 'adam@email.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_id` (`dept_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_details_id` (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patient_details`
--
ALTER TABLE `patient_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`dept_id`) REFERENCES `department` (`id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patient_details` (`id`);

--
-- Constraints for table `patient_details`
--
ALTER TABLE `patient_details`
  ADD CONSTRAINT `patient_details_ibfk_1` FOREIGN KEY (`login_details_id`) REFERENCES `login_details` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
