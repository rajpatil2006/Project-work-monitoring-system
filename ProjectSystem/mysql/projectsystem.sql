-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jan 23, 2025 at 01:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `mobileno`, `email`, `gender`, `password`) VALUES
(4, 'Admin', 'Ssvps', '9090909090', 'admin@gmail.com', 'male', 'Admin123');

-- --------------------------------------------------------

--
-- Table structure for table `grouptable`
--

CREATE TABLE `grouptable` (
  `id` int(11) NOT NULL,
  `groupno` int(4) NOT NULL,
  `mentorid` int(4) NOT NULL,
  `projecttitle` varchar(50) NOT NULL,
  `projectdetail` varchar(255) NOT NULL,
  `sponsershipname` varchar(50) NOT NULL,
  `sponsershipdetail` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grouptable`
--

INSERT INTO `grouptable` (`id`, `groupno`, `mentorid`, `projecttitle`, `projectdetail`, `sponsershipname`, `sponsershipdetail`, `year`) VALUES
(40, 1, 23, 'College Event Record Systems', 'College Event Record Systems', '', '', '2023'),
(41, 2, 20, 'Rooms on Rent', 'Room on rent system is for student who searching for room', '', '', '2023'),
(42, 3, 22, 'Catering Management System', 'Catering Management System', '', '', '2023'),
(43, 4, 23, 'Legal Case Management ', 'Legal Case Management ', '', '', '2023'),
(44, 5, 24, 'Inventory System for Varma Kitchen Appliances, Dhu', 'We Develop Inventory System for Varma Kitchen Appliances, Dhule', '', '', '2023'),
(45, 6, 19, 'Job portal ', 'Job portal is develop ', '', '', '2023'),
(46, 7, 21, 'Farm Equipment Rental Hub', 'Farm Equipment Rental Hub is develop for farmers', '', '', '2023'),
(47, 8, 19, 'Project Work Monitoring System', 'we manage here capstone project', '', '', '2023'),
(48, 9, 26, 'Bike showroom', 'we develop Bike showroom Web application  for Shivraj Motors.', '', '', '2023'),
(49, 10, 22, 'Java tutor', 'Java tutor is develop', '', '', '2023'),
(50, 11, 27, 'Booking Portal for Banquet Hall', 'develop portal for booking a banquet hall', '', '', '2023'),
(51, 12, 21, 'Teacher Companion: Teaching and Learning Progress ', 'Teacher Companion: Teaching and Learning Progress Monitoring is developed', '', '', '2023'),
(52, 13, 22, 'Furry Paws (android app)', 'develop a android app Furry paws', '', '', '2023'),
(53, 14, 21, 'Income and Expenditure Application for Farmer', 'develop a application for farmer namely as \"Income and Expenditure Application for Farmers\"\r\n', '', '', '2023'),
(54, 15, 20, 'Minutiae Base Finger Print Matching ', 'Minutiae Base Finger Print Matching is develop', '', '', '2023'),
(55, 16, 19, 'Hospital Equipments Rental System', 'Hospital Equipments Rental System is developed', '', '', '2023'),
(56, 17, 20, 'Vehicle Service Management Apps for PT Services, D', 'develop Vehicle Service Management Apps for PT Services, Dhule', '', '', '2023'),
(57, 18, 21, 'Livestock Trading system', 'develop trading system namely as \"livestock trading system\"', '', '', '2023'),
(58, 19, 26, 'Student Performance Analysis (Visualisation)', 'Student Performance Analysis (Visualisation) is develop', '', '', '2023'),
(59, 20, 27, 'Medicine stock management', 'Medicine stock management is develop', '', '', '2023'),
(60, 21, 20, 'Service mate provider system', 'Service mate provider system is develop', '', '', '2023'),
(61, 22, 26, 'Project Topic repository system', 'Devloping project Topic repository system', '', '', '2023'),
(62, 23, 26, 'Student Attendance system', 'student attendance system is develop.\r\n', '', '', '2023'),
(63, 24, 23, 'Building Contractor Management', 'Building Contractor Management is develop', '', '', '2023'),
(64, 25, 25, 'Appointment system for Dental Clinic', 'develop Appointment system for Dental Clinic', '', '', '2023'),
(65, 26, 28, 'Furniture Shope (Stock Maintenace)', 'Furniture Shope (Stock Maintenace) is develop', '', '', '2023'),
(66, 27, 27, 'Inventory System for Santosh Hardware, Dhule ', 'develop Inventory System for Santosh Hardware, Dhule ', '', '', '2023'),
(67, 28, 25, 'Printing Press Management system', 'Printing Press Management system is develop ', '', '', '2023'),
(68, 29, 24, 'Cloud kitchen', 'Cloud kitchen is develop', '', '', '2023'),
(69, 30, 25, 'An Android app for pdf Converter and Video compres', 'develop an Android app for pdf Converter and Video compressor.', '', '', '2023'),
(70, 31, 28, 'Hostel management system', 'Hostel management system is develop.', '', '', '2023'),
(71, 32, 28, '', '', '', '', '2023'),
(72, 33, 24, '', '', '', '', '2023'),
(74, 35, 19, '', '', '', '', '2023'),
(75, 1, 20, '', '', '', '', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `groupwork`
--

CREATE TABLE `groupwork` (
  `id` int(11) NOT NULL,
  `weeknumber` varchar(2) NOT NULL,
  `groupno` int(4) NOT NULL,
  `date` date NOT NULL,
  `semester` varchar(1) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupwork`
--

INSERT INTO `groupwork` (`id`, `weeknumber`, `groupno`, `date`, `semester`, `year`) VALUES
(88, '1', 8, '2024-04-07', '5', '2023'),
(90, '1', 6, '2024-04-17', '5', '2023'),
(91, '2', 8, '2024-04-17', '5', '2023'),
(92, '3', 8, '2024-04-17', '5', '2023'),
(93, '4', 8, '2024-04-17', '5', '2023'),
(94, '5', 8, '2024-04-17', '5', '2023'),
(95, '6', 8, '2024-04-17', '5', '2023'),
(96, '7', 8, '2024-04-17', '5', '2023'),
(97, '8', 8, '2024-04-17', '5', '2023'),
(98, '9', 8, '2024-04-17', '5', '2023'),
(100, '1', 8, '2024-04-18', '6', '2023'),
(101, '2', 6, '2025-01-07', '5', '2023'),
(102, '2', 8, '2025-01-07', '6', '2023'),
(103, '10', 8, '2025-01-09', '5', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `mentor`
--

CREATE TABLE `mentor` (
  `id` int(4) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentor`
--

INSERT INTO `mentor` (`id`, `firstname`, `lastname`, `mobileno`, `email`, `gender`, `password`, `status`) VALUES
(19, 'Surekha', 'Patil', '9090906755', 'surekhapatil@gmail.com', 'female', 'Surekha123', ''),
(20, 'Ratna', 'Patil', '8978987898', 'ratnapatil@gmail.com', 'female', 'Ratna123', ''),
(21, 'Nishad', 'Patel', '7898789098', 'nishadpatel@gmail.com', 'male', 'Nishad123', ''),
(22, 'Chaitali', 'Patil', '9087676545', 'chaitalipatil@gmail.com', 'female', 'Chaitali123', ''),
(23, 'Renuka', 'Dhatrak', '9876567898', 'renukadhatrak@gmail.com', 'female', 'Renuka123', ''),
(24, 'Ankit', 'Agrwal', '8965478741', 'ankitagrwal@gmail.com', 'male', 'Ankit123', ''),
(25, 'Manasi', 'Manikhedkar', '9878909890', 'mansi@gmail.com', 'female', 'Manasi123', ''),
(26, 'Chandrashekar', 'Bhamre', '9604840432', 'cbhamre@gmail.com', 'male', 'Bhamre123', ''),
(27, 'Dhanashri', 'Agrawal', '8523697415', 'dagrawal@gmail.com', 'female', 'Dhanashri123', ''),
(28, 'Sapna', 'Mahale', '7895462536', 'mahela@gmail.com', 'female', 'Sapna123', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `rollno` int(4) NOT NULL,
  `enrollmentno` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobileno` varchar(10) NOT NULL,
  `password` varchar(12) NOT NULL,
  `groupno` int(4) NOT NULL,
  `status` varchar(7) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `firstname`, `middlename`, `lastname`, `rollno`, `enrollmentno`, `gender`, `mobileno`, `password`, `groupno`, `status`, `year`) VALUES
(67, 'Ankit', 'Pradipsing', 'Rajput', 62, '2100590152', 'male', '9089786756', 'Ankit123', 2, 'Regular', '2023'),
(68, 'Rohit', 'Sharad', 'Shewale', 68, '2100590162', 'male', '8765432123', 'Rohit123', 2, 'Regular', '2023'),
(69, 'Vaibhav', 'Shashikant', 'Sonar', 71, '2100590166', 'male', '7654321234', 'Vaibhav123', 2, 'Regular', '2023'),
(70, 'Pranav', 'Yuvraj', 'Shinde', 69, '2100590163', 'male', '8765432123', 'Pranav123', 2, 'Regular', '2023'),
(71, 'Kaveri', 'Dipak', 'Bhamre', 4, '2100590053', 'female', '7865434567', 'Kaveri123', 6, 'Regular', '2023'),
(72, 'Kalyani', 'Hemant', 'Chaudhari', 9, '2100590059', 'female', '9098789098', 'Kalyani123', 6, 'Regular', '2023'),
(73, 'Jayesh', 'Hiralal', 'Mali', 33, '2100590104', 'male', '9865678987', 'Jayesh123', 6, 'Regular', '2023'),
(74, 'Dipen', 'Amol', 'Natekar', 38, '2100590113', 'male', '7709908909', 'Dipen123', 6, 'Regular', '2023'),
(75, 'Tejas', 'Sandeshkumar', 'Patil', 55, '2100590141', 'male', '9876543112', 'Tejas123', 7, 'Regular', '2023'),
(76, 'Vaibhav', 'Bhausaheb', 'Patil', 56, '2100590142', 'male', '8765432123', 'Vaibhav123', 7, 'Regular', '2023'),
(77, 'Yash', 'Laxman', 'Patil', 58, '2100590145', 'male', '7890987890', 'Yash1234', 7, 'Regular', '2023'),
(78, 'Himanshu', 'Kiran', 'Pawar', 60, '2100590148', 'male', '8076545676', 'Himanshu123', 7, 'Regular', '2023'),
(79, 'Atharva', 'Jaywant', 'Patil', 41, '2100590117', 'male', '9878906512', 'Atharva123', 8, 'Regular', '2023'),
(80, 'Lalit', 'Sharad', 'Patil', 46, '2100590126', 'male', '7123456756', 'Lalit123', 8, 'Regular', '2023'),
(81, 'Priyanshu', 'Dipak', 'Patil', 50, '2100590133', 'male', '8765456787', 'Priyanshu123', 8, 'Regular', '2023'),
(82, 'Raj', 'Vijay', 'Patil', 51, '2100590134', 'male', '9579453554', 'Raj12345', 8, 'Regular', '2023'),
(83, 'Tanmay', 'Sanjay', 'Jirekar', 22, '2100590081', 'male', '9123454321', 'Tanmay123', 12, 'Regular', '2023'),
(84, 'Yuvraj', 'Chetan', 'Joshi', 26, '2100590085', 'male', '9878909890', 'Yuvraj123', 12, 'Regular', '2023'),
(86, 'Rohit', 'Narendra', 'More', 35, '2100590110', 'male', '7898767898', 'Rohit123', 12, 'Regular', '2023'),
(87, 'Soham', 'Rajendra', 'More', 36, '2100590111', 'male', '8898767898', 'Soham123', 12, 'Regular', '2023'),
(88, 'Falguni', 'Sanjay', 'Bidve', 8, '2100590057', 'female', '9178987189', 'Falguni123', 14, 'Regular', '2023'),
(89, 'Darshan', 'Krushna', 'Desale', 15, '2100590067', 'male', '9876565434', 'Darshan123', 14, 'Regular', '2023'),
(90, 'Lalit', 'Dnyaneshwar', 'Desale', 16, '2100590068', 'male', '7778909878', 'Lalit123', 14, 'Regular', '2023'),
(91, 'Lakshmi', 'Yogesh', 'Kolte', 29, '2100590096', 'female', '9890986781', 'Lakshmi123', 14, 'Regular', '2023'),
(92, 'Monika', 'Hiraman', 'Patil', 48, '2100590128', 'female', '8909876787', 'Monika123', 15, 'Regular', '2023'),
(93, 'Mrunmai', 'Prashant', 'Wagh', 78, '2100590176', 'female', '9876567656', 'Mrunmai123', 15, 'Regular', '2023'),
(94, 'Priyanka', 'Rajendra', 'Wagh', 80, '2100590178', 'female', '9878904587', 'Priyanka123', 15, 'Regular', '2023'),
(95, 'Jayshree', 'Mahendra', 'Jagtap', 85, '2200590309', 'female', '9087676567', 'Jayshree123', 15, 'Regular', '2023'),
(97, 'Bhagyashri', 'Zipru', 'Desale', 14, '2100590066', 'female', '7878787878', 'Bhagyshri123', 16, 'Regular', '2023'),
(98, 'Pranjal', 'Tushar', 'Desale', 17, '2100590069', 'female', '8090989098', 'Pranjal123', 16, 'Regular', '2023'),
(99, 'Mahek', 'Govind', 'Lasi', 31, '2100590099', 'female', '7898767876', 'Mahek123', 16, 'Regular', '2023'),
(100, 'Diksha', 'Pravinsing', 'Rajput', 63, '2100590153', 'female', '8181812838', 'Diksha123', 16, 'Regular', '2023'),
(101, 'Vrushali', 'Yogesh', 'Chaudhari', 11, '2100590061', 'female', '9090998789', 'Vrushali123', 17, 'Regular', '2023'),
(102, 'Divya', 'Jagdhish', 'Khairnar', 28, '2100590091', 'female', '9876543456', 'Divya123', 17, 'Regular', '2023'),
(103, 'Riya', 'Rajendra', 'Patil', 53, '2100590136', 'female', '9987656787', 'Riya1234', 17, 'Regular', '2023'),
(104, 'Pratiksha', 'Bharat', 'Hire', 61, '2100590150', 'female', '9087656234', 'Pratiksha123', 17, 'Regular', '2023'),
(105, 'Jayesh', 'Dilip', 'Joshi', 23, '2100590082', 'male', '8765456243', 'Jayesh123', 18, 'Regular', '2023'),
(106, 'Prasanna', 'Amol', 'Kulkarni', 30, '2100590098', 'male', '9087656765', 'Prasanna123', 18, 'Regular', '2023'),
(107, 'Om', 'Anil', 'Patil', 117, '2100590131', 'male', '8978767876', 'Om123456', 18, 'YD', '2023'),
(108, 'Yash', 'Anil', 'Pawar', 81, '2100590180', 'male', '8978767876', 'Yash1234', 18, 'Regular', '2023'),
(112, 'Aditya', 'Popat', 'Patil', 39, '2100590115', 'male', '9876543212', 'Aditya123', 9, 'Regular', '2023'),
(113, 'Aryan', 'Umesh', 'Patil', 40, '2100590116', 'male', '7776543212', 'Aryan123', 9, 'Regular', '2023'),
(115, 'Lokesh', 'Satilal', 'Patil', 47, '2100590127', 'male', '9876543212', 'Lokesh123', 11, 'Regular', '2023'),
(116, 'Vishal', 'Ravikiran', 'Salunke', 64, '2100590155', 'male', '7076543212', 'Vishal123', 11, 'Regular', '2023'),
(117, 'Anushka', 'Sandip', 'Kor', 107, '2100590097', 'female', '9422785566', 'Anushka123', 1, 'YD', '2023'),
(118, 'Dakshayani', 'Vishwas', 'Magar', 109, '2100590101', 'female', '7485961452', 'Dakshayani12', 1, 'YD', '2023'),
(119, 'Paratik', 'Bhausaheb', 'Patil', 118, '2100590132', 'male', '7485961452', 'Pratik123', 1, 'YD', '2023'),
(120, 'Rushikesh', 'Nandkishor', 'Pitrubhakta', 131, '2200590319', 'male', '8524695173', 'Rushikesh123', 1, 'YD', '2023'),
(121, 'Abhishek', 'Shital', 'Bhavsar', 6, '2100590055', 'male', '9158418052', 'Abhishek123', 4, 'Regular', '2023'),
(122, 'Pavan', 'Subhash', 'Chavan', 82, '2200590305', 'male', '8521239875', 'Pavan123', 24, 'Regular', '2023'),
(124, 'Sanket', 'Ashok', 'Bhadane', 119, '2100590139', 'male', '9422785566', 'Sanket123', 24, 'YD', '2023'),
(127, 'Kedar', 'Yashwant', 'Joshi', 24, '2100590083', 'male', '8524569513', 'Kedar123', 3, 'Regular', '2023'),
(128, 'Janhvi', 'Sunilkumar', 'Suryawanshi', 75, '2100590171', 'male', '9517538524', 'Janhvi123', 3, 'Regular', '2023'),
(129, 'Ibrahim', 'Bagi', 'Mirza', 34, '2100590106', 'male', '8521239875', 'Ibrahim123', 3, 'Regular', '2023'),
(130, 'Ankit', 'Manoj', 'Tripathi', 76, '2100590172', 'male', '8527893214', 'Ankit123', 10, 'Regular', '2023'),
(131, 'Sanika', 'Ravindra', 'Patil', 54, '2100590138', 'female', '9632587412', 'Sanika123', 10, 'Regular', '2023'),
(132, 'Leena', 'Pravin', 'Patil', 108, '2100590100', 'female', '8527419639', 'Leena123', 10, 'YD', '2023'),
(133, 'Disha', 'Tushar', 'Bhavsar', 7, '2100590056', 'female', '7896541235', 'Disha123', 10, 'Regular', '2023'),
(134, 'Keshav', 'Rajesh', 'Joshi', 25, '2100590084', 'male', '8527419635', 'Keshav123', 13, 'Regular', '2023'),
(135, 'Sarthak', 'Sachin', 'Gite', 66, '2100590158', 'male', '8527893214', 'Sarthak123', 13, 'Regular', '2023'),
(136, 'Chetan', 'Bapu', 'Sonawane', 72, '2100590167', 'male', '7896541235', 'Chetan123', 13, 'Regular', '2023'),
(137, 'Ghanshyam', 'Ashok', 'Pawar', 59, '2100590147', 'male', '8521479633', 'Ghanshyam123', 13, 'Regular', '2023'),
(139, 'Hemant', 'Pratap', 'Patil', 44, '2100590122', 'male', '8798655421', 'Hemant123', 9, 'Regular', '2023'),
(141, 'Vaibhav', 'Dipak', 'Patil', 57, '2100590143', 'male', '7893214568', 'Vaibhav123', 9, 'Regular', '2023'),
(142, 'Sakshi', 'Dipak', 'Chaudhari', 10, '2100590060', 'female', '8524567538', 'Sakshi123', 19, 'Regular', '2023'),
(143, 'Harshada', 'Dipak', 'Patil', 20, '2100590075', 'female', '7412589635', 'Harshada123', 19, 'Regular', '2023'),
(144, 'Pranjal', 'Prabhakar', 'Wagh', 79, '2100590177', 'female', '8523697418', 'Pranjal123', 19, 'Regular', '2023'),
(145, 'Rohinee', 'Deelip', 'Salunke', 70, '2100590165', 'female', '8789858486', 'Rohinee123', 19, 'Regular', '2023'),
(146, 'Suprabha', 'Dinesh', 'Gangurde', 18, '2100590071', 'female', '9897959698', 'Suprabha123', 22, 'Regular', '2023'),
(147, 'Rasika', 'Sunil', 'Patil', 52, '2100590135', 'female', '8527419518', 'Rasika123', 22, 'Regular', '2023'),
(148, 'Ekta', 'Vinod', 'Jain', 21, '2100590079', 'female', '7539518526', 'Ekta1234', 22, 'Regular', '2023'),
(149, 'Purva', 'Shailesh', 'Sonawane', 73, '2100590169', 'female', '8521593578', 'Purva123', 22, 'Regular', '2023'),
(150, 'Mohit', 'Hemant', 'Badgujar', 3, '2100590050', 'male', '7539512582', 'Mohit123', 23, 'Regular', '2023'),
(151, 'Atharva', 'Yogesh', 'Bhat', 5, '2100590054', 'male', '8527539515', 'Atharv123', 23, 'Regular', '2023'),
(152, 'Samarthya', 'Ravindra', 'Deore', 13, '2100590064', 'male', '9511598089', 'Samarthya123', 23, 'Regular', '2023'),
(153, 'Hitesh', 'Bharat', 'Patil', 89, '2200590314', 'male', '8529637415', 'Hitesh123', 11, 'Regular', '2023'),
(154, 'Dhruv', 'Harish', 'Makhija', 32, '2100590102', 'male', '8529637412', 'Dhruv123', 23, 'Regular', '2023'),
(155, 'Chetan', 'Nanabhau', 'Patil', 88, '2200590313', 'male', '7539518634', 'Chetan123', 11, 'Regular', '2023'),
(156, 'Anjali', 'Chandrakant', 'Sangtani', 65, '2100590156', 'female', '7896543215', 'Anjali123', 20, 'Regular', '2023'),
(157, 'Vaishnavi', 'Mahesh', 'Saindane', 90, '2200590321', 'female', '7531599518', 'Vaishnavi123', 20, 'Regular', '2023'),
(158, 'Mayuri', 'Eknath', 'Wagh', 125, '2100590175', 'femal', '7533579518', 'Mayuri123', 20, 'YD', '2023'),
(159, 'Dhanashri', 'Pitambar', 'Desale', 129, '2200590306', 'female', '8523697415', 'Dhanashri123', 20, 'YD', '2023'),
(160, 'Pushkar', 'Nitin', 'Kandre', 27, '2100590086', 'male', '8529637412', 'Pushkar123', 27, 'Regular', '2023'),
(161, 'Amol', 'Vijay', 'Sharma', 67, '2100590160', 'male', '7539518527', 'Amol1234', 1, 'Regular', '2023'),
(162, 'Vishnu', 'Jaipraksh', 'Jangid', 102, '2100590080', 'male', '8523697419', 'Vishnu123', 27, 'YD', '2023'),
(163, 'Jayesh', 'Dnyaneshwar', 'Patil', 116, '2100590118', 'male', '8568547893', 'Jayesh123', 27, 'YD', '2023'),
(164, 'Komal', 'Sandeep', 'Chitte', 12, '2100590062', 'female', '7569548562', 'Komal123', 25, 'Regular', '2023'),
(165, 'Pratik', 'Rajendra', 'Gawale', 19, '2100590072', 'male', '9654745689', 'Pratik123', 25, 'Regular', '2023'),
(166, 'Kanishk', 'Rajesh', 'Lohar', 103, '2100590087', 'male', '9632147895', 'Kanishk123', 25, 'YD', '2023'),
(167, 'Harshal', 'Somnath', 'Mali', 110, '2100590103', 'male', '7896321478', 'Harshal123', 25, 'YD', '2023'),
(168, 'Priya', 'Lotan', 'Nagrale', 37, '2100590112', 'female', '7896321598', 'Priya123', 28, 'Regular', '2023'),
(169, 'Devyani', 'Kishor', 'Gaikwad', 98, '2100590073', 'female', '8523963212', 'Devyani123', 28, 'YD', '2023'),
(170, 'Harshwardhan', 'L', 'Thalnerkar', 100, '2100590076', 'male', '7412369857', 'Harshwardhan', 28, 'YD', '2023'),
(171, 'Riddhi', 'Shekar', 'Patel', 114, '2100590114', 'female', '8547963218', 'Riddhi123', 28, 'YD', '2023'),
(172, 'Anas', 'Idrees', 'Sayyed', 91, '2200590322', 'male', '7412589638', 'Anas1234', 30, 'Regular', '2023'),
(173, 'Ghrushneshwar', 'Dinesh', 'Wagh', 99, '2100590074', 'male', '7533579512', 'Ghrushneshwa', 30, 'YD', '2023'),
(174, 'Tejal', 'Bapu', 'Khairnar', 105, '2100590092', 'female', '7412589512', 'Tejal123', 30, 'YD', '2023'),
(175, 'Kuldeep', 'Multanshing', 'Rajpurohit', 122, '2100590151', 'male', '8258628425', 'Kuldeep123', 30, 'YD', '2023'),
(176, 'Himanshi', 'Vijay', 'Patil', 45, '2100590123', 'female', '7539638524', 'Himanshi123', 26, 'Regular', '2023'),
(177, 'Harashada', 'Vijay', 'Mistri', 112, '2100590107', 'female', '7412589638', 'Harashada123', 26, 'YD', '2023'),
(178, 'Bhushan', 'Balkrishana', 'Pawar', 121, '2100590146', 'male', '8741852963', 'Bhushan123', 26, 'YD', '2023'),
(179, 'Dhanesh', 'Bapu', 'Ahire', 127, '2200590303', 'male', '7539516845', 'Dhanesh123', 26, 'YD', '2023'),
(180, 'Vishal', 'Nana', 'Marsale', 87, '2200590311', 'male', '9295987874', 'Vishal123', 34, 'Regular', '2023'),
(181, 'Nikita', 'Suresh', 'Bhalerao', 93, '2100590052', 'female', '7471758595', 'Nikita123', 31, 'YD', '2023'),
(182, 'Chatali', 'Ankush', 'Ingale', 101, '2100590077', 'female', '8586849575', 'Chaitali123', 31, 'YD', '2023'),
(183, 'Snehal', 'Gulab', 'Marathe', 111, '2100590105', 'female', '7459636255', 'Snehal123', 31, 'YD', '2023'),
(184, 'Bhagyashri', 'Sanjay', 'Desala', 96, '2100590065', 'female', '8595754565', 'Bhagyashri12', 32, 'YD', '2023'),
(185, 'Tanu', 'Pradip', 'Patil', 120, '2100590140', 'female', '9565351575', 'Tanu1234', 32, 'YD', '2023'),
(186, 'Vaishnavi', 'Yuraj', 'Wagh', 126, '2100590179', 'female', '7485963625', 'Vaishnavi123', 32, 'YD', '2023'),
(187, 'Vinita', 'Yogesh', 'Patil', 130, '2200590317', 'female', '9693857415', 'Vinita123', 32, 'YD', '2023'),
(188, 'Pranav', 'Yogesh', 'Borse', 94, '2100590058', 'male', '7485963512', 'Pranav123', 33, 'YD', '2023'),
(189, 'Mansi', 'Suresh', 'Kanjarekar', 104, '2100590088', 'female', '7485962565', 'Mansi123', 33, 'YD', '2023'),
(190, 'Virendra', 'Dipak', 'Bari', 92, '2100590051', 'male', '9685742536', 'Virendra123', 29, 'YD', '2023'),
(191, 'Hitesh', 'Anil', 'Chune', 95, '2100590063', 'male', '7485963216', 'Hitesh123', 29, 'YD', '2023'),
(192, 'Vaibhav', 'Nitin', 'Khairnar', 106, '2100590093', 'male', '7491563268', 'Vaibhav123', 29, 'YD', '2023'),
(193, 'Aiman', 'Nasirhushen', 'Ansari', 1, '2100590048', 'male', '8594762531', 'Aiman123', 5, 'Regular', '2023'),
(194, 'Raj', 'Deepak', 'Verma', 77, '2100590173', 'male', '7485962145', 'Raj12345', 5, 'Regular', '2023'),
(195, 'Nadeem', 'Abdulrheman', 'Malik', 86, '2200590310', 'male', '7495869352', 'Nadeem123', 5, 'Regular', '2023'),
(196, 'Habib', 'Abakasam', 'Sharif', 123, '2100590159', 'male', '7485963214', 'Habib123', 5, 'YD', '2023'),
(197, 'Devesh', 'Vivekchandra', 'Wadile', 124, '2100590174', 'male', '9881810998', 'Devesh123', 4, 'YD', '2023'),
(198, 'Kunal', 'Sunil', 'Atole', 128, '2200590304', 'male', '9158418262', 'Kunal123', 4, 'YD', '2023'),
(199, 'Piyush', 'Tushar', 'Dixit', 97, '2100590070', 'male', '7898654525', 'Piyush123', 4, 'YD', '2023'),
(200, 'Raj', 'Bhikan', 'Jadhav', 83, '2200590307', 'male', '9422785566', 'Raj12345', 24, 'Regular', '2023'),
(201, 'Manoj', 'Kailas', 'Jagdale', 84, '2200590308', 'male', '9604840432', 'Manoj123', 24, 'Regular', '2023'),
(203, 'Obaidurrahman', 'Irfhan', 'Ansari', 2, '2100590049', 'male', '9517538524', 'Obaidurrahma', 3, 'Regular', '2023'),
(204, 'Deepanjali', 'Ravindra', 'Patil', 42, '2100590119', 'female', '9856895748', 'Depanjali123', 21, 'regular', '2023'),
(205, 'Dhanesha', 'Shamkant', 'Patil', 43, '2100590120', 'female', '8969878589', 'Dhanesha123', 21, 'regular', '2023'),
(206, 'Nikita', 'Dilip', 'Patil', 49, '2100590129', 'female', '8767890098', 'Nikita123', 21, 'regular', '2023'),
(207, 'Renuka', 'Ratilal', 'Sonawane', 74, '2100590170', 'female', '9636985236', 'Renuka123', 21, 'regular', '2023'),
(208, 'Harshada', 'Shantilal', 'Mohite', 113, '2100590109', 'female', '8965896589', 'Harshada123', 33, 'YD', '2023'),
(209, 'Bhavik', 'Dipak', 'Patil', 115, '2100590118', 'male', '9632147852', 'Bhavik123', 29, 'YD', '2023'),
(212, 'Rajashri', 'Sharad', 'Patil', 156, '2100590156', 'female', '9898998765', 'Raj12345', 35, 'Regular', '2023'),
(213, 'Raj', 'Vijay', 'Patil', 67, '2100590134', 'male', '9579453554', 'Raj12345', 1, 'Regular', '2025');

-- --------------------------------------------------------

--
-- Table structure for table `taskdetails`
--

CREATE TABLE `taskdetails` (
  `id` int(4) NOT NULL,
  `groupno` int(4) NOT NULL,
  `mentorid` int(4) NOT NULL,
  `timelineid` int(4) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(255) NOT NULL,
  `year` varchar(4) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskdetails`
--

INSERT INTO `taskdetails` (`id`, `groupno`, `mentorid`, `timelineid`, `startdate`, `enddate`, `name`, `details`, `year`, `status`) VALUES
(60, 8, 19, 8, '2024-04-12', '2024-04-17', 'jfioer', 'grgtry', '2023', 'no'),
(61, 8, 19, 8, '2024-04-03', '2024-04-11', 'Prepare question set for literarture review from seniors', 'sadasdasdas', '2023', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `taskstatus`
--

CREATE TABLE `taskstatus` (
  `id` int(4) NOT NULL,
  `taskid` int(4) NOT NULL,
  `studentid` int(4) NOT NULL,
  `evaluation` varchar(20) NOT NULL,
  `solution` varchar(150) NOT NULL,
  `uploaddate` date NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` text NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `remark` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taskstatus`
--

INSERT INTO `taskstatus` (`id`, `taskid`, `studentid`, `evaluation`, `solution`, `uploaddate`, `file_name`, `file_path`, `suggestion`, `remark`) VALUES
(128, 60, 81, '', '', '0000-00-00', 'no', 'no', '', 'No'),
(129, 60, 82, 'Good', 'trtryt', '2024-04-07', 'no', 'no', '', 'approved'),
(130, 61, 80, '', '', '0000-00-00', 'no', 'no', '', 'No'),
(131, 61, 81, '', '', '0000-00-00', 'no', 'no', '', 'No'),
(132, 61, 82, '', 'gydsaudgisa', '2024-04-10', 'no', 'no', '', 'submitted');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `weeknumber` int(4) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `activityplan` varchar(255) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `weeknumber`, `startdate`, `enddate`, `activityplan`, `semester`, `year`) VALUES
(8, 1, '2024-01-19', '2024-01-25', 'Finalization of project team and alocation of project guide', '5', '2023'),
(9, 2, '2024-01-26', '2024-02-01', 'Identify project domain/area.\r\n', '5', '2023'),
(10, 3, '2024-02-02', '2024-02-08', 'Submission of project proposal/project ideas by the project team', '5', '2023'),
(11, 4, '2024-02-09', '2024-02-15', 'Finalization of project idea by project guide and HOD', '5', '2023'),
(12, 5, '2024-02-16', '2024-02-22', 'Industrial survey and Literature survey', '5', '2023'),
(13, 6, '2024-02-23', '2024-02-29', 'Project Identification and Specification', '5', '2023'),
(14, 7, '2024-03-01', '2024-03-07', 'Proposed detailed methodology of solving the identified problem with action plan', '5', '2023'),
(15, 8, '2024-03-08', '2024-03-14', 'Preparation of project planning report and presentation', '5', '2023'),
(16, 9, '2024-03-15', '2024-03-21', 'Presentation', '5', '2023'),
(17, 10, '2024-03-22', '2024-03-28', 'Submission of project planning report', '5', '2023'),
(20, 1, '2024-01-01', '2024-01-06', 'Desing user Inteface', '6', '2023'),
(21, 2, '2024-01-07', '2024-01-13', 'Desing Database Structure,Create database', '6', '2023'),
(22, 3, '2024-01-14', '2024-01-20', 'Develop GUI and various interface\r\n\r\nProgrmming/coding', '6', '2023'),
(23, 4, '2024-01-21', '2024-01-27', 'database connectivity, if required', '6', '2023'),
(24, 5, '2024-01-28', '2024-02-03', 'Installation of project', '6', '2023'),
(25, 6, '2024-02-04', '2024-02-10', 'Testing', '6', '2023'),
(26, 7, '2024-02-11', '2024-02-17', 'modification as per suggestions given by guide and course teacher', '6', '2023'),
(27, 8, '2024-02-18', '2024-02-24', 'Prepare project presentation \r\n\r\nCompile a draft copy of complete project report', '6', '2023'),
(28, 9, '2024-02-25', '2024-03-02', 'Make correction in draft copy project\r\n\r\nPresentation and demonstration of project in presence of facilities of Dept. Of Com.Engg And junior student', '6', '2023'),
(29, 10, '2024-03-03', '2024-03-09', 'Make correction on \r\nProject,Presentation,Final copy of project report,Other termwork', '6', '2023'),
(30, 11, '2024-03-10', '2024-03-16', 'Submissin of project report and term work', '6', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `weeklydiary`
--

CREATE TABLE `weeklydiary` (
  `id` int(11) NOT NULL,
  `weekid` int(11) NOT NULL,
  `activityplan` varchar(300) NOT NULL,
  `studentid` varchar(4) NOT NULL,
  `teamwork` varchar(255) NOT NULL,
  `individualwork` varchar(255) NOT NULL,
  `reasonfordelay` varchar(100) NOT NULL,
  `correcttivemeasure` varchar(100) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `remark` varchar(11) NOT NULL,
  `semester` varchar(1) NOT NULL,
  `year` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weeklydiary`
--

INSERT INTO `weeklydiary` (`id`, `weekid`, `activityplan`, `studentid`, `teamwork`, `individualwork`, `reasonfordelay`, `correcttivemeasure`, `suggestion`, `remark`, `semester`, `year`) VALUES
(7, 8, '• Finalization of project team and alocation of project guide\r\n• create group of 4 members\r\n• allocation of project guide', '79', '• our group created consisting of 4 members project guide assigned to us Ms.S.H.Patil mam\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(8, 9, '• Identify project domain/area in which you want to develop project\r\n\r\n', '79', '• We decide to develop projects for ex:-\r\n• 1> OTT platform\r\n• 2> Online learning web\r\n• 3> Cricket Ticket management system', '• I decide and suggest 2 topic \r\n• 1> OTT platform\r\n• 2> Online learning web\r\n', '-', '-', '', 'approved', '5', '2023'),
(9, 10, '• Submission of project proposal/project ideas by the project team\r\n• collect the 2 topics of per student in group\r\n', '79', '• we decide2 topic for project\r\n• online learning web\r\n• project management system\r\n• travel planer\r\n• cricket ticket management system.\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(10, 11, '• Finalization of project idea by project guide and HOD', '79', '• we finalize our topic namely as \"Project Management System\"\r\n• We decide our scope only for our Computer department', '• ', '-', '-', '', 'approved', '5', '2023'),
(11, 12, '• Take Industrial survey and Literature survey\r\n• Download open source App and used ', '79', '• We take survey by downloading open source application such ass Trello,zono projects\r\n• We logine and use that platform and learn various modules.\r\n ', '• ', '-', '-', '', 'approved', '5', '2023'),
(12, 13, '• Project Identification and Specification\r\n', '79', '• We meet with our guid students which their work on project in groups\r\n• we identify issue of correction faced by guide\r\n• and decide which action system perform to overcome on problems', '• ', '-', '-', '', 'approved', '5', '2023'),
(13, 14, '• Proposed detailed methodology of solving the identified problem with action plan\r\n• survey taken by group discuss with guide\r\n• analyse and identify requirement', '79', '• We collected requirement of project Management system for Computer department\r\n• 1>progress tracking \r\n• 2> monitoring\r\n• 3> File sharing', '• ', '-', '-', '', 'approved', '5', '2023'),
(14, 15, '• Preparation of project planning report and presentation\r\n• Draw system flow diagram and block diagram for project management system\r\n• Block diagram consist input and output of system \r\n• flow diagram show work direction of their system', '79', '• We decide for our system as1> student information\r\n• 2> Guid information \r\n• 3> task/project information \r\n• -system manage document as output', '• ', '-', '-', '', 'approved', '5', '2023'),
(15, 16, '• Draw E>R. Diagram for proposed system \r\n• remark by mentoir\r\n• PPT develop it acording Format given\r\n', '79', '• For ER.Diagram firstly we consider entity mentor group,task, timeline.\r\n• Then we identify relationship between defferent entities, then desuide attributes\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(16, 17, '• Submission of project planning report\r\n• Develop ppt for presentation \r\n• Check by mentor\r\n• Approved by Mentor\r\n• Submission of weekly diary', '79', '• We develop ppt as performat and remark by mentor\r\n• mentor suggest us changes in ER diagram, say to insert use case diagram \r\n• so we make changes', '• \r\n', '-', '-', 'grammaticalliy mistakes', 'viewed', '5', '2023'),
(17, 8, '• Finalization of project team \r\n• alocation of project guide\r\n• limite of group is 4 member', '80', '• our group have 4 members\r\n• mentor assigned to us Ms.S.H.Patil\r\n• our group consist of 4 members namely as\r\n• 1> Raj Patil\r\n• 2> Lalit Patil\r\n• 3> Priyanshu Patil\r\n• 4> Atharva Patil', '• ', '-', '-', '', 'approved', '5', '2023'),
(18, 9, '• Identify project domain/area\r\n• In which domain you want to develop project discuss about that domain.\r\n• Collect information about domain.\r\n', '80', '• we decide to develop project in following domain\r\n• 1> E-Commerc web\r\n• 2> Sports\r\n• 3> Touring\r\n', '• I suggest my group members touring topic.', '-', '-', '', 'approved', '5', '2023'),
(19, 10, '• Submission of project proposal/project ideas by the project team\r\n• Every group member must gige 2 topics', '80', '• We submite total 8 topics.\r\n', '• I find and decideed 2 topic\r\n• 1>traveler planner\r\n• 2> social media platform', '-', '-', '', 'approved', '5', '2023'),
(20, 11, '• Finalization of project idea by project guide and HOD\r\n• Decide scope of project\r\n\r\n', '80', '• In academic domain we finalize our topic namely as \"Project Management System\".\r\n• The scope of our project is only for our Computer Department', '• \r\n', '-', '-', '', 'approved', '5', '2023'),
(21, 12, '• Industrial survey and Literature survey\r\n• how system works collect information about project Management \r\n• take survey in department \r\n', '80', '• We take survey with all project mentors \r\n• we download open source app we login and use of that platform\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(22, 13, '• Project Identification and Specification\r\n• Identify problem while developing the sysytem \r\n• problem identification and specification ', '80', '• We discuss with mentors, Students which work on project in group\r\n• we identify the problems and decide which action system performed to overcome on problems.\r\n\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(23, 14, '• Proposed detailed methodology of solving the identified problem with action plan\r\n• Collect requirement according problem identification \r\n• Take survey of mentoprs and studentrs\r\n• analyse the requriments\r\n', '80', '• We collect requirement of project management system for computer department\r\n• 1>Assign task\r\n• 2> student progress\r\n• 3> task evaluation ', '• ', '-', '-', '', 'approved', '5', '2023'),
(24, 15, '• Preparation of project planning report and presentation.\r\n• Draw system flow diagram and Block diagram for project management sysytem\r\n• BLock diagram consist I/P and O/p of system.\r\n• flow Diagram show work direction of System', '80', '• we decide input for our system as, Student information, Mentor Information, project Information.\r\n• System manage Report of task , project related document as o/p.\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(25, 16, '• Presentation\r\n• draw ER.Diagram for proposed system \r\n• Remark by Mentor\r\n• Parallely Work on ppt develop it according Format given.\r\n\r\n', '80', '• we develo[p 1/2 part of ppt (into Specification).\r\n• ER.Digram finally we consider Entity mentor Group,Task,Timeline,Then we identify relationship between different entities\r\n  \r\n ', '• ', '-', '-', '', 'approved', '5', '2023'),
(26, 17, '• Submission of project planning report\r\n• Develop ppt for presentation \r\n• check by mentor.\r\n• approved bymentor\r\n• submission of weekly diary.', '80', '• We develop ppt as per format and remark by mentor\r\n• I develop ER.Diagram.\r\n• Mentor suggest to changes in ER.Diagram Say to inserrt use case diagram\r\n• so we make changes.', '• ', '-', '-', 'Fill individual work', 'updated', '5', '2023'),
(27, 8, '• Finalization of project team and alocation of project guide\r\n• Assing mentor\r\n• create group of 4 members', '81', '• our group have 4 members\r\n• mentor assigned to us Ms.S.H.Patil\r\n• our group consist of 4 members namely as\r\n• 1> Raj Patil\r\n• 2> Lalit Patil\r\n• 3> Priyanshu Patil\r\n• 4> Atharva Patil', '• ', '-', '-', '', 'approved', '5', '2023'),
(28, 9, '• Identify project domain/area in which you want to develope project \r\n• Identify information about your domain area of project.\r\n', '81', '• We decide to develop project \r\n• for ex:-\r\n• 1> Cricket club management\r\n• 2> travel planner\r\n• 3> project tracking', '• ', '-', '-', '', 'approved', '5', '2023'),
(29, 10, '• Submission of project proposal/project ideas by the project team\r\n• Collect the 2 topics of per Student in group', '81', '• We submitted total 8 topic', '•I decide and suggest 2 topic\r\n• 1> Cricket club Management System\r\n• 2> Hostel management System\r\n• I collect the requirement of this topic', '-', '-', '', 'approved', '5', '2023'),
(30, 11, '• Finalization of project idea by project guide and HOD\r\n• Here the guide directed us to final topic by disscuss with guide and HOD', '81', '• We finalize our topic namely as \"project Management system\".\r\n• We decide our Scope only for to develope our System for Computer Department.', '• ', '-', '-', '', 'approved', '5', '2023'),
(31, 12, '• Industrial survey and Literature survey\r\n• Download open source app and we use it\r\n• How system work, take survey Collect information\r\n', '81', '• We take survey by downloading open Source application such as Trello,Zono Project.\r\n• we logine and use that platform and learn various modules.\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(32, 13, '• Project Identification and Specification\r\n• Needs of this project and platform appropriate action against them', '81', '• we meet the mentors, student which flow of project in groups.\r\n• We identify problems faced by mentors\r\n• Decide which action perform to overcome the problems.', '• ', '-', '-', '', 'approved', '5', '2023'),
(33, 14, '• Proposed detailed methodology of solving the identified problem with action plan\r\n• survey taken by group discuss with mentor\r\n• Learned the Requirements.', '81', '• We collect requirement of project management system for Computer department.\r\n• 1> View task\r\n• 2> Assign task\r\n• 3> project access.', '• ', '-', '-', '', 'approved', '5', '2023'),
(34, 15, '• Preparation of project planning report and presentation\r\n• Draw system flow Diagram and block diagram for project Management System\r\n• Block diagram Consist input/output of system\r\n', '81', '• We decide input for our system as:\r\n• 1> Student information\r\n• 2> mentor information\r\n• 3> task/project information.\r\n• System manage document as output.', '• ', '-', '-', '', 'approved', '5', '2023'),
(35, 16, '• Presentation\r\n• Draw ER.Diagram for proposed system \r\n• remark by mentor\r\n• parallely work on ppt develop it according format given', '81', '• We develop 1/2 part of ppt (into specification)\r\n• ER.Diagram finally we consider Entity. mentor, group, task, timeline \r\n• Then we identify relationship between different entities.\r\n\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(36, 17, '• Submission of project planning report\r\n• develop ppt for presentation \r\n• check by mentor\r\n• Approved by mentor\r\n• Submission of weekly diary.', '81', '• We develp ppt as per format and remark by mentor\r\n• mentor suggest us changes in Er.diagram say to insert use case diagram \r\n• So we make changes', '• ', '-', '-', 'fill individual work', 'viewed', '5', '2023'),
(37, 8, '• Finalization of project team and alocation of project guide\r\n• Here the project head said us that to create group of 4 students\r\n• then mentor assigned to us by Department', '82', '• We decide our group of 4 members\r\n• Namely as \r\n• 1> raj vijay patil\r\n• 2> Lalit sharad patil\r\n• 3> Priyanshu dipak patil\r\n• 4> Atharva jaywant patil.\r\n• Mentor assigned to us Ms.S.H.Patil.\r\n', '• ', '-', '-', '', 'approved', '5', '2023'),
(38, 9, '• Identify project domain/area in which you want to develope project \r\n• Identify information about your domain area of project.\r\n', '82', '• Here we decide to develop project for E-commerce, Touring, sports,academic domain.\r\n• So we collect information about Domain /area we decided.', '• ', '-', '-', '', 'approved', '5', '2023'),
(39, 10, '• Submission of project proposal/project ideas by the project team', '82', '• We make project proposal and project ideas in team.', '• I gather the information requireed for proposal.', '-', '-', '', 'approved', '5', '2023'),
(40, 11, '• Finalization of project idea by project guide and HOD', '82', '• We proposed various topic in front of project coordiantor .', '• But project guide select the topic of project management systemt.Then I gather details of how project management system works.', '-', '-', '', 'approved', '5', '2023'),
(41, 12, '• Industrial survey and Literature survey', '82', '• We decide to take surevey of how our college currently manage the capstone project.', '• I prepare question set to ask student and mentor to know details about the process of our college to manage capstone project', '-', '-', '', 'approved', '5', '2023'),
(42, 13, '• Project Identification and Specification', '82', '• After taking surevey we find various point that show how currently project management system in our college is not efficient to handle capstone project well.', '• So i make report on whtat type of issue faced by college during monitor the projects.', '-', '-', 'ff', 'approved', '5', '2023'),
(43, 14, '• Proposed detailed methodology of solving the identified problem with action plan', '82', '• We decide the step to solve the issue we find during literature surevey that is faced by college during project.', '• I prepare methodology on how to solve the problem like inefficiency in monitoring project phases while devlopement.', '-', '-', '', 'approved', '5', '2023'),
(44, 15, '• Preparation of project planning report and presentation', '82', '• We collect information reuired to prepare report AND PRESENTATION', '• I arrange the information in report and format it.', '-', '-', '', 'approved', '5', '2023'),
(45, 16, '• Presentation', '82', '• During presentation various changes are suggest to us in our project planning.', '• According changes said to us during presentation i list down all suggestion ang applied it our proposed system planning.', '-', '-', '', 'approved', '5', '2023'),
(46, 17, '• Submission of project planning report', '82', '• We submit report in team.', '• I confirm that every changes ,suggestion are applied in report or not before submitting it.', '-', '-', '', 'approved', '5', '2023'),
(47, 20, '• Desing user Inteface', '82', '• hdushhghfgh', '• ygyg\r\n• yghu', '-', '-', '', 'approved', '6', '2023'),
(48, 22, '• Develop GUI and various interface\r\n\r\n• Progrmming/coding', '82', '• dnsdns,d', '• dsadlkas', '-', '-', '', 'approved', '6', '2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grouptable`
--
ALTER TABLE `grouptable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupwork`
--
ALTER TABLE `groupwork`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentor`
--
ALTER TABLE `mentor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskdetails`
--
ALTER TABLE `taskdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taskstatus`
--
ALTER TABLE `taskstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `weeklydiary`
--
ALTER TABLE `weeklydiary`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `grouptable`
--
ALTER TABLE `grouptable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `groupwork`
--
ALTER TABLE `groupwork`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `mentor`
--
ALTER TABLE `mentor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=214;

--
-- AUTO_INCREMENT for table `taskdetails`
--
ALTER TABLE `taskdetails`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `taskstatus`
--
ALTER TABLE `taskstatus`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `weeklydiary`
--
ALTER TABLE `weeklydiary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
