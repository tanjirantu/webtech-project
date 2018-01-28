-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 28, 2018 at 01:03 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `organizational_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `organizational_id`, `first_name`, `last_name`, `email`) VALUES
(1, '11-2222-1', 'Alex', 'Hunter', 'hunter@aiub.edu');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `prerequisite` varchar(50) DEFAULT 'NIL',
  `credit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_id`, `title`, `prerequisite`, `credit`) VALUES
(1, 'MAT 1102', 'Diff Calculus & Co-ordinate Geometry', 'NIL', '	3'),
(2, 'PHY 1101', 'Physics 1', 'NIL', '3'),
(3, 'PHY 1102', 'Physics 1 lab', 'NIL', '	1/La'),
(4, 'CSC 1102', 'Programming Language 1', 'NIL', '3/Lab'),
(5, 'CSC 1101', 'Computer Fundamentals', 'NIL', '3/Lab'),
(6, 'ENG 1101', 'English Reading Skills and Public Speaking', 'NIL', '3'),
(7, 'CSC 1204', 'Discrete Mathematics', 'CSC 1102', '3'),
(8, 'MAT 1205	', 'Integral Calculus & Ord. Diff Equation', 'MAT 1101', '3'),
(9, 'PHY 1203', 'Physics 2', 'PHY 1101', '3'),
(10, 'PHY 1204', 'Physics 2 lab', 'PHY 1102', '	1/La'),
(11, 'CSC 1203', 'Programming Language 2', 'CSC 1102', '3/Lab'),
(12, 'BBA 1102', 'Principles of Accounting', 'NIL', '3'),
(13, 'ENG 1202', 'English Writing Skills and Communication', 'ENG 1101', '3'),
(14, 'MAT 2101', 'Complex Variable,Laplace & Z-transformation', 'MAT 1205', '3'),
(15, 'CSC 2105', 'Data Structure', 'CSC 1203, CSC 1204', '3/Lab'),
(16, 'EEE 1201', 'Electrical Circuits -1 (DC)', 'PHY 1101', '3'),
(17, 'EEE 1202', 'Electrical Circuits -1 Lab (DC)', 'PHY 1101', '1/Lab'),
(18, 'CSC 2107', 'Introduction to Database', 'CSC 1203', '3/Lab'),
(19, 'BBA 1204', 'Principles of Economics', 'MAT 1205, CSC 1204	', '3'),
(20, 'ENG 2101', 'Business Communications', 'ENG 1202', '3'),
(21, 'CSC 2106', 'Computer Organization & Architecture', 'CSC 1203', '3/Lab'),
(22, 'CSC 2211', 'Algorithms', 'CSC 2105', '3/Lab'),
(23, 'EEE 2101', 'Electrical Circuits 2 (AC)', 'EEE 1201', '3'),
(24, 'EEE 2102', 'Electrical Circuits-2 (AC) Lab', 'EEE 1202', '1/Lab'),
(25, 'CSC 2209', 'Object Oriented Programming 1', 'CSC 2105', '3/Lab'),
(26, 'EEE 2103', 'Electronic Devices', 'EEE 1202', '3'),
(27, 'EEE 2104', 'Electronic Devices Lab', 'EEE 1201', '1/Lab'),
(28, 'CSC 2208', 'Operating Systems', 'CSC 2106', '3/Lab'),
(30, 'BAE 2101', 'Computer Aided Design & Drafting', 'NIL', '1'),
(31, 'MAT 2202', 'Matrices, Vectors, Fourier analysis', 'MAT 1205', '3'),
(32, 'EEE 2205', 'Digital Logic Design', 'EEE 2103', '3'),
(33, 'EEE 2206', 'Digital Logic Design Lab', 'EEE 2104', '1/Lab'),
(34, 'MAT 3101', 'Mathematical Methods Of Engineering', 'MAT 2202', '3'),
(35, 'CSC 3115', 'Object Oriented Programming 2', 'CSC 2209', '3/Lab'),
(36, 'MAT 3103', 'Statistics And Probability', 'MAT 1205', ''),
(37, 'CSC 3116', 'Computer Networks', 'CSC 2208', '3/Lab'),
(38, 'CSC 3113', 'Theory Of Computation', 'CSC 2211', '3'),
(39, 'CSC 2210', 'Object Oriented Analysis and Design', 'CSC 2107, CSC 2105', '3'),
(40, 'CSC 3220', 'Compiler Design', 'CSC 3113', '3'),
(41, 'CSC 3224	', 'Computer Graphics', 'CSC2211, MAT2202', '3/Lab'),
(42, 'EEE 3101', 'Digital Electronics', 'EEE 2101', '3'),
(43, 'EEE 3102', 'Digital Electronics Lab', 'EEE 2102', '1/Lab'),
(44, 'MGT 3202	', 'Engineering Management', 'ENG 2101', '3'),
(45, 'CSC 3222', 'Web Technologies', 'CSC 3115', '3/Lab'),
(46, 'CSC 3223', 'Advanced Computer Networks', 'CSC 3116', '3/Lab'),
(47, 'CSC 4121', 'Artificial Intelligence & Expert Sys.', 'CSC 2211', '3/Lab'),
(48, 'EEE 3216', 'Electronics Shop', 'EEE 3102', '1/Lab'),
(49, 'EEE 4211', 'Microprocessor & I/O System', 'EEE 2205, CSC 2106', '3/Lab'),
(50, 'CSC 3114', 'Software Engineering', 'CSC 2210', '3'),
(51, 'CSC 4195', 'Research Methodology', '100 Credits', '3'),
(52, 'EEE 3107', 'Engineering Ethics', 'EEE 2205', '1'),
(53, 'CSC 2212', 'Advance Database Management System', 'CSC 2107', '3/Lab'),
(54, 'CSC 3217', 'Computer Science Mathematics', 'CSC 2211, MAT 3101', '3'),
(55, 'EEE 3211', 'Digital Signal Processing', 'EEE 3207', '3/Lab'),
(56, 'MIS 4008', 'Network Resource Management', 'MIS 3201', '3'),
(57, 'ECE 4207', 'Vhdl Modeling And Logic Synthesis', 'EEE 2205', '3/Lab'),
(58, 'EEE 4203', 'Vlsi Circuit Design', 'EEE 2205', '3/Lab'),
(59, 'EEE 3207', 'Signals & Linear System', 'MAT 2202', '3'),
(60, 'CSC 3119', 'Basic Graph Theory', 'CSC 2211', '3'),
(61, 'CSC 4136', 'Multimedia Systems', 'CSC 3222', '3'),
(62, 'CSC 4137', 'Simulation & Modeling', 'CSC 3223, CSC 2211', '3/Lab'),
(63, 'MIS 4001', 'Computer Utilization In Business', 'MIS 3201', '3'),
(64, 'CSC 4135', 'E-Governance', 'CSC 3222', '3'),
(65, 'MIS 4017', 'Decision Support System', 'MIS 3201', '3'),
(66, 'MIS 4018', 'Global Information Technology Management', 'MIS 3201', '3'),
(67, 'CSC 3127', 'Enterprise Resource Planning', 'MIS 3201', '3'),
(68, 'CSC 4139', 'Data Warehouse and Data Mining', 'CSC 4121, CSC 2107', '3'),
(69, 'CSC 3118', 'Computer And Information Ethics', 'MIS 3201', '3'),
(70, 'CSC 4125', 'Software Development Project Management', 'CSC 3114', '3'),
(71, 'CSC 3230', 'Formal Methods of Software Engg.', 'CSC 3114', '3'),
(72, 'CSC 4140', 'Human Computer Interaction', 'CSC 4121', '3'),
(73, 'CSC 4126', 'Software Requirement Engineering', 'CSC 3114', '3'),
(74, 'CSC 3229', 'Embedded Technologies', 'CSC 3115, EEE 2205', '3/Lab'),
(75, 'CSC 4180', 'Advanced Topics in Programming I', 'CSC 3222', '3/Lab'),
(76, 'CSC 4181', 'Advanced Topics in Programming II', 'CSC 3222', '3/Lab'),
(77, 'CSC 4182', 'Advanced Topics in Programming III', 'CSC 3222', '3/Lab'),
(78, 'CSC 4138', 'Computer Vision And Pattern Recognition', 'CSC 3224', '3'),
(79, 'CSC 4141', 'Linear Programming', 'CSC 4121, MAT 3101', '3/Lab'),
(80, 'CSC 4133', 'Software Quality and Testing', 'CSC 3114', '3'),
(81, 'CSC 3231', 'Network Security', 'CSC 3223', '3'),
(82, 'CSC 4134', 'Advanced Operating System', 'CSC 2208', '3/Lab'),
(83, 'CSC 3232', 'Embedded System Software', 'CSC 3114', '3'),
(84, 'EEE 4235', 'Robotics Engineering', 'PHY 1101', '3/Lab');

-- --------------------------------------------------------

--
-- Table structure for table `courses_schedules`
--

CREATE TABLE `courses_schedules` (
  `id` int(11) NOT NULL,
  `day_one` varchar(20) NOT NULL,
  `day_one_schedule` varchar(20) NOT NULL,
  `day_two` varchar(20) NOT NULL,
  `day_two_schedule` varchar(20) NOT NULL,
  `course_id` varchar(20) NOT NULL,
  `section` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_schedules`
--

INSERT INTO `courses_schedules` (`id`, `day_one`, `day_one_schedule`, `day_two`, `day_two_schedule`, `course_id`, `section`) VALUES
(1, 'Mon', '11:00:00 02:00:00', 'Wed', '12:00:00 02:00:00', 'CSC 3222', 'F'),
(3, 'Sun', '02:00:00 05:00:00', 'Tue', '12:00:00 02:00:00', 'CSC 3224	', 'H2'),
(4, 'Sun', '09:30:00 11:00:00', 'Tue', '09:30:00 11:00:00', 'CSC 4126', 'B'),
(5, 'Mon', '02:00:00 05:00:00', 'Wed', '02:00:00 04:00:00', 'CSC 3223', 'G'),
(6, 'Sun', '08:00:00 09:30:00', 'Tue', '08:00:00 09:30:00', 'MAT 1102', 'A'),
(7, 'Mon', '08:00:00 09:30:00', 'Wed', '08:00:00 09:30:00', 'ENG 1101', 'B'),
(8, 'Sun', '09:30:00 11:00:00', 'Tue', '09:30:00 11:00:00', 'CSC 1102', 'D'),
(9, 'Sun', '08:00:00 11:00:00', 'Tue', '08:00:00 09:30:00', 'PHY 1101', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'BSc in Computer Science ');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `organizational_id` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `birth_date` date NOT NULL,
  `parmanent_address` varchar(100) NOT NULL,
  `current_address` varchar(100) NOT NULL,
  `joining_date` date NOT NULL,
  `department_id` int(11) NOT NULL,
  `designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `organizational_id`, `first_name`, `last_name`, `email`, `blood_group`, `gender`, `birth_date`, `parmanent_address`, `current_address`, `joining_date`, `department_id`, `designation`) VALUES
(1, '1501-1341-3', 'Bruce', 'Wayne', 'brucewayne@aiub.edu', 'ANegetive', 'Male', '1985-12-13', 'Gotham City', 'Arkham City', '2002-01-11', 1, 'Professor '),
(2, '1403-1341-1', 'Dead', 'Pool', 'deadpool@live.com', 'APositive', 'Male', '1885-12-03', 'NA', 'NA', '2014-12-18', 1, 'Professor ');

-- --------------------------------------------------------

--
-- Table structure for table `faculties_courses`
--

CREATE TABLE `faculties_courses` (
  `id` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL,
  `course_schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties_courses`
--

INSERT INTO `faculties_courses` (`id`, `faculty_id`, `course_schedule_id`) VALUES
(1, '1501-1341-3', 1),
(2, '1403-1341-1', 3),
(3, '1501-1341-3', 4);

-- --------------------------------------------------------

--
-- Table structure for table `instant_message`
--

CREATE TABLE `instant_message` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `faculty_id` varchar(20) NOT NULL,
  `course_schedule_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instant_message`
--

INSERT INTO `instant_message` (`id`, `student_id`, `faculty_id`, `course_schedule_id`, `name`, `message`, `date`) VALUES
(1, '', '', 3, 'Spider  Man', 'hi, there sir ', '2018-01-28 10:53:25'),
(2, '', '', 3, 'Dead Pool', 'hello student', '2018-01-28 10:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `organizational_id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `organizational_id`, `email`, `password`, `role`) VALUES
(1, '07-25283-1', 'spiderman@gmail.com', 'asd', 'Student'),
(3, '1501-1341-3', 'brucewayne@aiub.edu', 'abcd1234', 'Faculty'),
(4, '03-25283-1', 'alex@gmail.com', 'abcd1234', 'Student'),
(5, '1403-1341-1', 'deadpool@live.com', 'abcd1234', 'Faculty'),
(6, '11-2222-1', 'hunter@aiub.edu', 'abcd1234', 'Admin'),
(7, '07-21153-1', 'groot@aiub.edu', 'abcd1234', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `course_schedule_id` int(11) NOT NULL,
  `section_id` varchar(2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `upload_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `course_schedule_id`, `section_id`, `name`, `size`, `type`, `location`, `upload_date`) VALUES
(14, 1, 'F', 'LICENCE', 34, 'application/octet-stream', '../../public/uploads/LICENCE', '26-Dec-2017 02:42:01am'),
(15, 1, 'F', 'LECTURE_1.ppt', 390144, 'application/vnd.ms-powerpoint', '../../public/uploads/LECTURE_1.ppt', '26-Dec-2017 02:55:48am'),
(16, 1, 'F', 'Lecture file of Midterm(Summer 16 - 17).docx', 996183, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '../../public/uploads/Lecture file of Midterm(Summer 16 - 17).docx', '26-Dec-2017 02:36:51pm'),
(17, 1, 'F', 'Pages To Design.docx', 257680, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '../../public/uploads/Pages To Design.docx', '31-Dec-2017 12:31:14am'),
(18, 1, 'F', 'HowToChangeShell', 417, 'application/octet-stream', '../../public/uploads/HowToChangeShell', '27-Jan-2018 11:43:36pm');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `course_schedule_id` int(20) NOT NULL,
  `section_id` varchar(2) NOT NULL,
  `url` varchar(255) NOT NULL,
  `notice` text NOT NULL,
  `post_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `course_schedule_id`, `section_id`, `url`, `notice`, `post_date`) VALUES
(1, 1, 'F', '', 'Set B exam tomorrow 9:30AM at 3019', '2017-12-25 00:00:00'),
(7, 1, 'F', '', 'No class tomorrow', '28-Jan-2018 12:04:08');

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` int(11) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `department_id` int(11) NOT NULL,
  `abbrevation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programs`
--

INSERT INTO `programs` (`id`, `program_name`, `department_id`, `abbrevation`) VALUES
(1, 'cse', 1, 'Computer Science and Engineering'),
(2, 'csse', 1, 'Computer Science and Software Engineering'),
(3, 'se', 1, 'Software Engineering'),
(4, 'cs', 1, 'Computer Science'),
(5, 'cis', 1, 'Computer Information System');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(11) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `duration` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `start_time`, `end_time`, `duration`) VALUES
(1, '08:00:00', '09:30:00', 1.5),
(2, '09:30:00', '11:00:00', 1.5),
(3, '11:00:00', '12:30:00', 1.5),
(4, '12:30:00', '02:00:00', 1.5),
(5, '02:00:00', '03:30:00', 1.5),
(6, '03:30:00', '05:00:00', 1.5),
(7, '08:00:00', '10:00:00', 2),
(8, '10:00:00', '12:00:00', 2),
(9, '12:00:00', '02:00:00', 2),
(10, '02:00:00', '04:00:00', 2),
(11, '04:00:00', '06:00:00', 2),
(12, '08:00:00', '11:00:00', 3),
(13, '11:00:00', '02:00:00', 3),
(14, '02:00:00', '05:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `organizational_id` varchar(15) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `birth_date` date NOT NULL,
  `parmanent_address` varchar(255) NOT NULL,
  `current_address` varchar(255) NOT NULL,
  `parents_contact_number` varchar(20) NOT NULL,
  `students_contact_number` varchar(20) NOT NULL,
  `local_guardians_contact_number` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL,
  `program_id` int(11) NOT NULL,
  `cgpa` double(10,2) NOT NULL,
  `credits_completed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `organizational_id`, `first_name`, `last_name`, `email`, `blood_group`, `gender`, `birth_date`, `parmanent_address`, `current_address`, `parents_contact_number`, `students_contact_number`, `local_guardians_contact_number`, `department_id`, `program_id`, `cgpa`, `credits_completed`) VALUES
(1, '07-25283-1', 'Spider ', 'Man', 'spiderman@gmail.com', 'ABPositive', 'Male', '1998-11-23', 'NY', 'Classified', '017000000000', '017000000000', '017000000000', 1, 1, 4.00, 15),
(2, '03-25283-1', 'Alex ', 'Summers', 'alex@gmail.com', 'ANegetive', 'Male', '1980-12-13', 'NA', 'NA', 'NA', 'NA', 'NA', 1, 1, 3.23, 12),
(4, '07-21153-1', 'Groot', '', 'groot@aiub.edu', 'Unknown', 'Male', '1950-12-26', 'NA', 'NA', 'NA', 'NA', 'NA', 1, 1, 2.50, 9);

-- --------------------------------------------------------

--
-- Table structure for table `students_courses`
--

CREATE TABLE `students_courses` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `course_schedule_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_courses`
--

INSERT INTO `students_courses` (`id`, `student_id`, `course_schedule_id`) VALUES
(3, '07-25283-1', 1),
(4, '07-25283-1', 3),
(5, '07-25283-1', 4),
(6, '07-25283-1', 5),
(7, '03-25283-1', 6),
(8, '03-25283-1', 7),
(9, '03-25283-1', 8),
(10, '03-25283-1', 9),
(11, '07-21153-1', 1),
(12, '07-21153-1', 6),
(13, '07-21153-1', 4);

-- --------------------------------------------------------

--
-- Table structure for table `students_results`
--

CREATE TABLE `students_results` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `course_schedule_id` int(11) NOT NULL,
  `midterm_quiz1` int(11) NOT NULL,
  `midterm_quiz2` int(11) NOT NULL,
  `midterm_quiz3` int(11) NOT NULL,
  `midterm_written` int(11) NOT NULL,
  `midterm_lab` int(11) NOT NULL,
  `midterm_attendance` int(11) NOT NULL,
  `midterm_class_performance` int(11) NOT NULL,
  `midterm_grade` varchar(2) NOT NULL,
  `midterm_total_marks` int(11) NOT NULL,
  `finalterm_quiz1` int(11) NOT NULL,
  `finalterm_quiz2` int(11) NOT NULL,
  `finalterm_quiz3` int(11) NOT NULL,
  `finalterm_written` int(11) NOT NULL,
  `finalterm_lab` int(11) NOT NULL,
  `finalterm_attendance` int(11) NOT NULL,
  `finalterm_class_performance` int(11) NOT NULL,
  `finalterm_grade` varchar(2) NOT NULL,
  `final_grade` varchar(2) NOT NULL,
  `finalterm_total_marks` int(11) NOT NULL,
  `grade_points` float NOT NULL,
  `term_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_results`
--

INSERT INTO `students_results` (`id`, `student_id`, `course_schedule_id`, `midterm_quiz1`, `midterm_quiz2`, `midterm_quiz3`, `midterm_written`, `midterm_lab`, `midterm_attendance`, `midterm_class_performance`, `midterm_grade`, `midterm_total_marks`, `finalterm_quiz1`, `finalterm_quiz2`, `finalterm_quiz3`, `finalterm_written`, `finalterm_lab`, `finalterm_attendance`, `finalterm_class_performance`, `finalterm_grade`, `final_grade`, `finalterm_total_marks`, `grade_points`, `term_total`) VALUES
(1, '07-25283-1', 1, 20, 20, 20, 20, 10, 10, 10, 'A+', 90, 20, 20, 20, 20, 10, 20, 10, 'A+', 'A+', 100, 4, 96),
(2, '07-21153-1', 1, 20, 20, 20, 20, 1, 20, 20, 'B+', 0, 0, 0, 0, 0, 0, 0, 0, 'F', 'F', 0, 0, 0),
(3, '07-21153-1', 3, 20, 20, 20, 20, 1, 20, 20, 'B+', 0, 0, 0, 0, 0, 0, 0, 0, 'F', 'F', 0, 0, 0),
(4, '07-21153-1', 4, 20, 20, 20, 20, 1, 20, 20, 'B+', 0, 0, 0, 0, 0, 0, 0, 0, 'F', 'F', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`course_id`);

--
-- Indexes for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `schedule_id` (`day_one_schedule`),
  ADD KEY `day_two_schedule_id` (`day_two_schedule`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizational_id` (`organizational_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `faculties_courses`
--
ALTER TABLE `faculties_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_schedule_id` (`course_schedule_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `instant_message`
--
ALTER TABLE `instant_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organizational_id` (`organizational_id`);

--
-- Indexes for table `students_courses`
--
ALTER TABLE `students_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_courses_StudentId` (`student_id`),
  ADD KEY `students_courses_CourseId` (`course_schedule_id`);

--
-- Indexes for table `students_results`
--
ALTER TABLE `students_results`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculties_courses`
--
ALTER TABLE `faculties_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `instant_message`
--
ALTER TABLE `instant_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `students_courses`
--
ALTER TABLE `students_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `students_results`
--
ALTER TABLE `students_results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses_schedules`
--
ALTER TABLE `courses_schedules`
  ADD CONSTRAINT `courses_schedules_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `faculties`
--
ALTER TABLE `faculties`
  ADD CONSTRAINT `faculties_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `faculties_courses`
--
ALTER TABLE `faculties_courses`
  ADD CONSTRAINT `faculties_courses_ibfk_1` FOREIGN KEY (`course_schedule_id`) REFERENCES `courses_schedules` (`id`),
  ADD CONSTRAINT `faculties_courses_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`organizational_id`);

--
-- Constraints for table `programs`
--
ALTER TABLE `programs`
  ADD CONSTRAINT `programs_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `students_courses`
--
ALTER TABLE `students_courses`
  ADD CONSTRAINT `students_courses_CourseId` FOREIGN KEY (`course_schedule_id`) REFERENCES `courses_schedules` (`id`),
  ADD CONSTRAINT `students_courses_StudentId` FOREIGN KEY (`student_id`) REFERENCES `students` (`organizational_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
