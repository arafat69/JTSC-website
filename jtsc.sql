-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 06:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jtsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `first_name`, `last_name`, `email`, `password`, `picture`) VALUES
(1, 'arafat', 'ali', 'arafat@gmail.com', 'abcd1234', 'ara.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `logo` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `photo`, `logo`) VALUES
(1, 'logo.png', 'banner'),
(2, 'tsc-removebg-preview.png', 'tlogo'),
(3, 'bag.png', 'flogo');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(200) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `duration` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `name`, `category`, `duration`) VALUES
(1, 'Fundamentals of Computer', 'Office And Database', '3-Month And 6-Month'),
(2, 'Microsoft Word', 'Office Application', '3-Month And 6-Month'),
(3, 'Microsoft Excel', 'Office Application', '3-Month And 6-Month'),
(4, 'Microsoft Access', 'select category', ''),
(5, 'Microsoft Access', 'Office Application', '3-Month And 6-Month'),
(6, 'Microsoft Powerpoint', 'Office Application', '3-Month And 6-Month'),
(7, 'Microsoft Frontpage', 'Office Application', '3-Month And 6-Month'),
(8, 'Windows XP & 7', 'Office Application', '3-Month And 6-Month'),
(9, 'Internet, Facebook', 'Office Application', '3-Month And 6-Month'),
(10, 'Typing Tutor', 'Office Application', '3-Month And 6-Month'),
(11, 'Basic Hardware', 'Office Application', '6-Month'),
(12, 'Adobe Photoshop', 'Office Application', '6-Month'),
(13, 'Microsoft Access', 'Database', '3-Month And 6-Month'),
(14, 'à¦¸à¦¬ à¦§à¦°à¦£à§‡à¦° à¦¸à¦¾à¦®à¦¾à¦¨à§à¦¯ à¦ªà¦°à¦¿à¦¬à¦¹à¦£à§‡ à¦—à¦¾à¦¡à¦¼à¦¿ à¦šà¦¾à¦²à¦¾à¦¨à§‹à¥¤', 'Driving', '3-Month And 6-Month'),
(16, 'à¦‡à¦žà§à¦œà¦¿à¦¨, à¦•à§à¦²à¦¿à¦‚ à¦à¦¬à¦‚ à¦²à§à¦¬à§à¦°à¦¿à¦•à§‡à¦Ÿà¦¿à¦‚ à¦¸à¦¿à¦¸à§à¦Ÿà§‡à¦®, à¦œà§à¦¬à¦¾à¦²à¦¾à¦¨à§€ à¦¸à¦¿à¦¸à§à¦Ÿà§‡à¦®, à¦¸à¦‚à¦•à§à¦°à¦®à¦£ à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾, à¦‡à¦—à¦¨à¦¿à¦¶à¦¨ à¦à¦¬à¦‚ à¦¬à§ˆà¦¦à§à¦¯à§à¦¤à¦¿à¦• à¦¬à§à¦¯à¦¬à¦¸à§à¦¥à¦¾ à¦¸à¦®à§à¦ªà¦°à§à¦•à¦¿à¦¤ à¦œà§à¦žà¦¾à¦¨ à¦¶à¦¿à¦•à§à¦·à¦¾à¦°à§à¦¥à§€à¦¦à§‡à¦° à¦¹à¦¾à¦²à¦•à¦¾ à¦ªà¦°à¦¿à¦¬à¦¹à¦¨ à¦¬à¦¿à¦·à¦¯à¦¼à§‡ à¦¶à§‡à¦–à¦¾à¦¨à§‹ à¦¹à¦¯à¦¼à¥¤', 'Driving', '3-Month And 6-Month'),
(17, 'à¦²à¦¾à¦‡à¦Ÿ à¦ªà¦°à¦¿à¦¬à¦¹à¦¨à§‡à¦° à¦¨à¦¿à¦¯à¦¼à¦®à¦¿à¦¤ à¦“ à¦ªà¦°à§à¦¯à¦¾à¦¯à¦¼à¦•à§à¦°à¦®à¦¿à¦• à¦°à¦•à§à¦·à¦£à¦¾à¦¬à§‡à¦•à§à¦·à¦£à¥¤', 'Driving', '3-Month And 6-Month'),
(18, 'à¦°à¦¾à¦¸à§à¦¤à¦¾ à¦šà¦¿à¦¹à§à¦¨, à¦°à¦¾à¦¸à§à¦¤à¦¾ à¦šà¦¿à¦¹à§à¦¨à¦¿à¦¤à¦•à¦°à¦£, à¦°à¦¾à¦¸à§à¦¤à¦¾à¦° à¦šà¦¿à¦¹à§à¦¨ à¦à¦¬à¦‚ à¦Ÿà§à¦°à¦¾à¦«à¦¿à¦• à¦¨à¦¿à¦¯à¦¼à¦®à¥¤', 'Driving', '3-Month And 6-Month'),
(19, 'à¦¸à§Œà¦œà¦¨à§à¦¯à§‡ à¦—à¦¾à¦¡à¦¼à¦¿ à¦šà¦¾à¦²à¦¾à¦¨à§‹à¦° à¦¸à¦®à¦¯à¦¼', 'Driving', '3-Month And 6-Month'),
(20, 'Visual Basic', 'Database', '3-Month And 6-Month'),
(21, 'SQL', 'Database', '3-Month And 6-Month'),
(22, 'Oracle', 'Database', '3-Month And 6-Month'),
(23, 'Microsoft Word', 'Database', '6-Month'),
(24, 'Microsoft Excel', 'Database', '6-Month'),
(25, 'Microsoft Powerpoint', 'Database', '6-Month'),
(26, 'Microsoft Frontpage', 'Database', '6-Month'),
(27, 'Windows XP & 7', 'Database', '6-Month'),
(28, 'Internet, Facebook', 'Database', '6-Month'),
(29, 'Typing Tutor', 'Database', '6-Month');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(200) NOT NULL,
  `photo` varchar(800) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `photo`, `date`) VALUES
(13, 'p-44.jpg', 'November 3, 2020'),
(4, 'g1.jpg', 'October 21, 2020'),
(5, 'g2.jpg', 'October 21, 2020'),
(6, 'g3.jpg', 'October 21, 2020'),
(7, 'g4.jpg', 'October 21, 2020'),
(8, '50868996_2055623347849734_6992425968723820544_n.jpg', 'November 3, 2020'),
(9, '14068489_509252902604338_9180473776282288254_o.jpg', 'November 3, 2020'),
(14, '78372612_177659749955738_8021836720842473472_o.jpg', 'November 3, 2020'),
(15, '79092147_177660236622356_7935829919135694848_o.jpg', 'November 3, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(100) NOT NULL,
  `title` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `photo` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `photo`, `date`) VALUES
(3, '২০২০-২১ শিক্ষাবর্ষে ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রমের ভর্তি বিজ্ঞপ্তি।', '12.png', 'October 18, 2020'),
(5, 'জাতীয় শুদ্ধাচার কৌশল কমিটি স্বচ্ছ ও সেবামূলক কার্যালয় ঘোষনা', '33.png', 'October 19, 2020'),
(6, 'বার্ষিক উদ্ভাবন কর্মপরিকল্পনা ইনোভেশন টিম উদ্ভাবন বাণিজ্যিকীকরণ', '9.png', 'October 19, 2020'),
(7, 'ভিডিও কনফারেন্স [Poly.] স্কাইপি ঠিকানা [Skype, TSC] স্কাইপি ঠিকানা [Skype, Poly.] প্রতিষ্ঠান প্রধান [সকল]', '2.png', 'October 19, 2020'),
(9, '২০২০-২১ শিক্ষাবর্ষে ডিপ্লোমা ইন ইঞ্জিনিয়ারিং শিক্ষাক্রমের ভর্তি বিজ্ঞপ্তি a', '1.png', 'October 20, 2020'),
(10, 'JTSC Electrical Department Class 9 Assignment', 'class 9 assignment.pdf', 'November 4, 2020'),
(11, 'JTSC Computer Department Class 9 Assignment', 'logo.png', 'October 4, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `principal_message`
--

CREATE TABLE `principal_message` (
  `id` int(1) NOT NULL,
  `name` varchar(200) NOT NULL,
  `message` varchar(20000) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `principal_message`
--

INSERT INTO `principal_message` (`id`, `name`, `message`, `photo`) VALUES
(1, 'Md. Khalilur Rahman', 'Welcome to the  Technical School and College , Jhenaidah . I encourage  you to explore our web site to find out more about the College and its numerous strength including trade (department).Staff and Students.I heartily welcome you to the official website of Jhenaidah Technical School & College (300014). You will have a clear idea about the location and activities of this institute by surfing its website. This website is aimed to provide essential information to the students, teachers and staffs and most importantly to the online visitors.As a government institute, our job is to provide service to the people of the Republic and to implement decisions and plans of the government of the Republic. The main target of the present government is to make Bangladesh as a developed country by 2041.', 'k-12.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(200) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `department` varchar(100) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(200) NOT NULL,
  `title` varchar(2000) NOT NULL,
  `category` varchar(50) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `title`, `category`, `photo`, `date`) VALUES
(1, 'à§¨à§¦à§¨à§¦-à§¨à§§ à¦¶à¦¿à¦•à§à¦·à¦¾à¦¬à¦°à§à¦·à§‡ à¦¡à¦¿à¦ªà§à¦²à§‹à¦®à¦¾ à¦‡à¦¨ à¦‡à¦žà§à¦œà¦¿à¦¨à¦¿à§Ÿà¦¾à¦°à¦¿à¦‚ à¦¶à¦¿à¦•à§à¦·à¦¾à¦•à§à¦°à¦®à§‡à¦° à¦­à¦°à§à¦¤à¦¿ à¦¬à¦¿à¦œà§à¦žà¦ªà§à¦¤à¦¿à¥¤', 'class routine', 'sl1.jpg', 'October 21, 2020'),
(2, 'Easy To Customize Easy To Customize Easy To Customize Easy To Customize', 'class routine', '3.png', 'October 21, 2020'),
(3, 'Follow the instructions to embed the icon font in your site and learn how to style your icons using CSS.', 'exam routine', '8.png', 'October 21, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(3) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `picture`, `title`, `description`) VALUES
(1, '70502773_2400343096921159_1085761796783996928_n.jpg', 'Government Technical School And College, Jhenaidah.', 'College View'),
(2, 'inside.jpg', 'Government Technical School And College, Jhenaidah.', 'Inside view '),
(3, '1559058301002-s.jpg', 'Government Technical School and College Jhenaidah', 'Class Room');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `student_roll` varchar(100) NOT NULL,
  `student_reg` varchar(200) NOT NULL,
  `student_session` varchar(50) NOT NULL,
  `student_shift` varchar(50) NOT NULL,
  `student_semester` varchar(50) NOT NULL,
  `student_dipartment` varchar(100) NOT NULL,
  `student_father` varchar(100) NOT NULL,
  `student_mother` varchar(100) NOT NULL,
  `student_birth` varchar(100) NOT NULL,
  `student_section` varchar(100) NOT NULL,
  `student_photo` varchar(500) NOT NULL,
  `student_contact` varchar(150) NOT NULL,
  `student_address` varchar(500) NOT NULL,
  `student_email` varchar(500) NOT NULL,
  `date` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `student_roll`, `student_reg`, `student_session`, `student_shift`, `student_semester`, `student_dipartment`, `student_father`, `student_mother`, `student_birth`, `student_section`, `student_photo`, `student_contact`, `student_address`, `student_email`, `date`) VALUES
(1, 'md.Arafat Ali', '913439', '886601', '2017-18', '1st', '6th', 'computer', 'romjan ali biswas', 'forida begum', '5 / june /1999', 'diploma-in-engineering', '2018-08-09-20-09-18-851.jpg', '01704039173', 'Moheshpur , jhenaidah ,bangladesh', 'arafataliar69@gmail.com', 'November 4, 2020'),
(2, 'fahim akber sojib', '913430', '8865345', '2017-18', '1st', '6th', 'computer', 'optional', 'optional', 'optional birth', 'diploma-in-engineering', '', '0180000000000', '', '', 'October 16, 2020'),
(3, 'md. Ajijur Rahman', '791470', '1913392586', '2019-20', '1st', 'ten', 'mechanical', '', '', '', 'vocational', '2018-07-07-21-42-03-586.jpg', '', '', '', 'October 24, 2020'),
(4, 'md. rasel hasan', '116697', '19133925325', '2019-20', '1st', 'nine', 'automobile', '', '', '', 'vocational', '2018-07-01-21-20-32-034.jpg', '', '', '', 'October 16, 2020'),
(5, 'shakil shek', '116697', '19133925325', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', '26758303_322460904935426_5847958755776108944_o.jpg', '', '', '', 'November 3, 2020'),
(8, 'Shaha', '112233', '1122334455', '2020-21', '1st', 'nine', 'mechanical', '', '', '', 'vocational', '', '', '', '', 'October 24, 2020'),
(9, 'Rasel Hasan', '913446', '886590', '2017-18', '1st', '6th', 'computer', '', '', '12 May 2001', 'diploma-in-engineering', 'Rasel.jpg.jpg', '01757527570', 'Jhenaidah, Dhaka Bangladesh.', 'raselhasan.cse@gmail.com', 'November 4, 2020'),
(10, 'MD. Naiem Islam', '913438', '886602', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'naiem.jpg', '01992354283', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(11, 'Mahfuz Hasan', '913434', '886606', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', '87538099_724899864714940_4090000221000433664_o.jpg', '01956582101', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(12, 'Dipa Khatun', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'dipa.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(13, 'Sabina', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'sabina.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(14, 'Afrin', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'afrin.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(15, 'Mukta', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'mukta.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(16, 'Sagor Ali', '913436', '886604', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'sagor.jpg', '01716651721', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(17, 'Rakibul Islam', '913461', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'rakib.jpg', '01821613494', 'Bogura, Dhaka Bangladesh', '', 'November 3, 2020'),
(18, 'Alamin Islam', '913464', '883899', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'alamin.jpg', '01904876754', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(19, 'Shimul Kumar', '913441', '886598', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'shimul.jpg', '01997036745', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(20, 'Shuvro dev paul', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'shuvro.jpg', '01786420291', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(21, 'Imran Hossain', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'imran.jpg', '01837695773', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(22, 'Tamim Kaysar', '913433', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'tamim.jpg', '01855111649', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(23, 'Labib Khan', '913465', '853898', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'khan.jpg', '01749826695', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(24, 'Ashikur Rahaman', '913445', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'ashik.jpg', '01999118395', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(25, 'Anik Hasan', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', '105707868_143810797292067_15655281180012058_o.jpg', '01718801701', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(26, 'Zillur Rahman', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', '', '01722458050', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(27, 'Rana', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', 'rana.jpg', '01638977120', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(28, 'Mujahid Hossin', '913438', '886591', '2017-18', '1st', '6th', 'computer', '', '', '', 'diploma-in-engineering', '', '01955010178', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 3, 2020'),
(29, 'Shamim Munshi', '913438', '886591', '2018-19', '1st', '4th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'munshi.jpg', '', 'Village + Post - Jatrapur, Upazila - Muradnagar, District - Comilla.', '', 'November 4, 2020'),
(30, 'Sourav Karmakar', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Sourav.jpg', '', 'Khalishpur, Maheshpur, Jhenaidah', '', 'November 4, 2020'),
(31, 'Roopam Biswas Hriday', '913438', '886591', '2018-19', '1st', '4th', 'computer', '', '', '1 January 2001', 'diploma-in-engineering', 'Roopam.jpg', '', 'Village + Post - Singra, Upazila - Shalikha, District - Magura', '', 'November 4, 2020'),
(32, 'Souvik Bissas', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Souvik.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(33, 'Rahul bissas', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Rahul.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(34, 'Md. Rafat bin Omar', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Rafat.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(35, 'Rubayet Ahmed Turjo', '913438', '886591', '2019-20', '1st', 'ten', 'electrical', '', '', '1 January 2001', 'vocational', 'Rubayet.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(36, ' Md. Mahinuzzaman Mahin', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Mahin.jpg', '', 'Village-Pragpur Post-Char-Pragpur Upazila-Daulatpur District-Kushtia', '', 'November 4, 2020'),
(37, 'Md. Ramzan Ali', '913438', '886591', '2019-20', '1st', '2nd', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Ramzan.jpg', '', 'Godagari Rajshahi, Bangladesh', '', 'November 4, 2020'),
(38, 'Shimul Chandra Sen', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Shimul Chandra.jpg', '', 'Noakhali, Bangladesh', '', 'November 4, 2020'),
(39, 'Md Imran Hossain', '913438', '886591', '2019-20', '1st', '2nd', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Md Imran Hossain.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(40, 'MD. Hridoy sheikh', '913438', '886591', '2019-20', '1st', '2nd', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Hridoy.jpg', '', 'Rajshahi, Bangladesh', '', 'November 4, 2020'),
(41, 'MD Shomraj Biswas', '913438', '886591', '2017-18', '1st', '6th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Shomraj.jpg', '', 'Jhenaidah, Dhaka Bangladesh.', '', 'November 4, 2020'),
(42, 'Saidul Islam Sagar', '913438', '886591', '2018-19', '1st', '4th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Saidul.jpg', '', 'Azampur Jhikargachha Jessore', '', 'November 4, 2020'),
(43, 'Md. Shahriar Hossain Shishir', '913438', '886591', '2017-18', '1st', '6th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Shishir.jpg', '', 'Jhaudia, Daulatpur, Kushtia', '', 'November 4, 2020'),
(44, 'Md. Sohan Rahman', '913438', '886591', '2016-17', '1st', '8th', 'electrical', '', '', '1 January 2001', 'diploma-in-engineering', 'Sohan.jpg', '', 'Allardarga, Daulatpur, Kushtia', '', 'November 4, 2020'),
(45, ' Priyam Poddar', '01', '886590', 'Empty', '1st', 'nine', 'computer', 'Pancharesh Chandra Poddar', '', '1 January 2001', 'vocational', '', '01723205922', '', '', 'November 18, 2020'),
(46, 'Mushfiqur Rahman Naeem', '02', '000000', 'Empty', '1st', 'nine', 'computer', ' Md. Nurul Qayem', '', '1 January 2001', 'vocational', '', '0191987869', '', '', 'November 18, 2020');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `code` varchar(50) NOT NULL,
  `cradit` varchar(50) NOT NULL,
  `fm` varchar(20) NOT NULL,
  `tc` varchar(20) NOT NULL,
  `tf` varchar(20) NOT NULL,
  `pc` varchar(20) NOT NULL,
  `pf` varchar(20) NOT NULL,
  `department` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`, `semester`, `code`, `cradit`, `fm`, `tc`, `tf`, `pc`, `pf`, `department`, `section`) VALUES
(3, 'bangla', '1st', '65711', '4', '20', '40', '20', '10', '10', 'computer', 'diploma'),
(4, 'English', '1st', '65712', '2', '100', '40', '60', '0', '0', 'computer', 'diploma'),
(5, 'Mathematicsâ€1', '1st', '65911', '4', '200', '60', '90', '50', '0', 'computer', 'diploma'),
(6, 'Physicsâ€1', '1st', '65912', '4', '200', '60', '90', '25', '25', 'computer', 'diploma'),
(7, 'Computer application', '1st', '66611', '2', '100', '0', '0', '50', '50', 'computer', 'diploma'),
(8, 'Electrical engineering fundamentals', '1st', '66712', '2', '200', '40', '90', '0', '0', 'computer', 'diploma'),
(9, 'Physical education & life skills development', '1st', '65812', '2', '200', '60', '60', '25', '25', 'computer', 'diploma'),
(10, 'Database Application', '2nd', '66621', '4', '200', '0', '90', '25', '25', 'computer', 'diploma'),
(11, 'Mathematics-2', '2nd', '65921', '4', '200', '60', '90', '50', '50', 'computer', 'diploma'),
(12, 'IT support System-I', '2nd', '66622', '4', '200', '60', '90', '25', '25', 'computer', 'diploma'),
(13, 'Physics-2', '1st', '65922', '4', '200', '60', '90', '50', '50', 'computer', 'diploma'),
(14, 'Graphics Design-I', '2nd', '66623', '4', '100', '40', '60', '25', '25', 'computer', 'diploma'),
(15, 'Communicative English', '1st', '65722', '2', '100', '40', '60', '0', '0', 'computer', 'diploma'),
(16, 'Analog Electronics', '2nd', '66823', '4', '200', '40', '60', '50', '50', 'computer', 'diploma'),
(17, 'Programming Essentials', '3rd', '66631', '4', '200', '40', '60', '50', '50', 'computer', 'diploma'),
(18, 'Mathematicsâ€3', '3rd', '65931', '4', '200', '60', '60', '25', '25', 'computer', 'diploma'),
(19, 'Web Design', '3rd', '66632', '2', '100', '40', '60', '0', '25', 'computer', 'diploma'),
(20, 'Chemistry', '3rd', '65913', '4', '200', '40', '60', '25', '25', 'computer', 'diploma'),
(21, 'Graphics designâ€II', '3rd', '66633', '2', '100', '40', '60', '25', '0', 'computer', 'diploma'),
(22, 'Social Science', '3rd', '65811', '4', '200', '40', '60', '50', '50', 'computer', 'diploma'),
(23, 'IT support Systemâ€II', '3rd', '66634', '2', '100', '40', '60', '25', '0', 'computer', 'diploma'),
(24, 'Object-Oriented Programming', '4th', '66641', '4', '200', '60', '90', '50', '25', 'computer', 'diploma'),
(25, 'Web Development', '4th', '66643', '2', '100', '40', '60', '25', '0', 'computer', 'diploma'),
(26, 'Data Structure & Algorithm', '4th', '66642', '4', '200', '40', '60', '50', '50', 'computer', 'diploma'),
(27, 'Computer Peripherals', '4th', '66645', '2', '100', '60', '60', '25', '25', 'computer', 'diploma'),
(28, 'Data Communication System', '4th', '66644', '4', '200', '40', '90', '50', '25', 'computer', 'diploma'),
(29, 'Business Organization & Communication', '4th', '65841', '4', '200', '60', '90', '0', '25', 'computer', 'diploma'),
(30, 'Principle of Digital Electronics', '4th', '66842', '4', '200', '60', '60', '50', '25', 'computer', 'diploma'),
(31, 'Programming in Java', '5th', '66651', '4', '200', '40', '60', '0', '50', 'computer', 'diploma'),
(32, 'Surveillance Security System', '5th', '66653', '2', '100', '40', '60', '50', '0', 'computer', 'diploma'),
(33, 'Web Development Project', '5th', '66654', '2', '100', '40', '60', '0', '0', 'computer', 'diploma'),
(34, 'Operating Systems application', '5th', '66652', '4', '200', '60', '0', '50', '25', 'computer', 'diploma'),
(35, 'PCB Design and Circuit Making', '5th', '66656', '2', '100', '40', '90', '0', '25', 'computer', 'diploma'),
(36, 'Accounting Theory & Practice', '5th', '65851', '4', '100', '40', '60', '25', '0', 'computer', 'diploma'),
(37, 'Sequential Logic System', '5th', '66655', '4', '200', '60', '90', '25', '25', 'computer', 'diploma'),
(38, 'Principals of Software Engineering', '6th', '66661', '4', '200', '60', '60', '0', '25', 'computer', 'diploma'),
(39, 'Microcontroller Application', '6th', '66663', '4', '200', '0', '90', '25', '25', 'computer', 'diploma'),
(40, 'Microprocessor & Interfacing', '6th', '66662', '4', '200', '40', '90', '50', '25', 'computer', 'diploma'),
(41, ' Optional Subject', '6th', '6666x', '', '', '', '', '', '', 'computer', 'diploma'),
(42, 'Database Management System', '6th', '66664', '4', '100', '40', '90', '25', '50', 'computer', 'diploma'),
(43, 'Industrial Management', '6th', '65852', '2', '200', '40', '60', '50', '0', 'computer', 'diploma'),
(44, 'Environmental Studies', '6th', '64054', '4', '200', '40', '90', '50', '0', 'computer', 'diploma'),
(45, 'System Analysis & Design', '7th', '66671', '4', '200', '40', '60', '25', '25', 'computer', 'diploma'),
(46, 'Eâ€Commerce & CMS', '7th', '66674', '4', '200', '40', '60', '50', '0', 'computer', 'diploma'),
(47, 'NetworkAdministration&Services', '7th', '66672', '2', '200', '60', '60', '25', '0', 'computer', 'diploma'),
(48, 'Cyber Security & Ethics', '7th', '66675', '2', '200', '40', '90', '50', '50', 'computer', 'diploma'),
(49, 'Innovation & Entrepreneurship', '7th', '65853', '4', '200', '40', '60', '50', '25', 'computer', 'diploma'),
(50, 'Apps Development Project', '7th', '66673', '2', '100', '40', '60', '25', '25', 'computer', 'diploma'),
(51, 'Optional Subjectâ€II', '7th', '6667X', '', '', '', '', '', '', 'computer', 'diploma'),
(52, 'Computer Technology Industrial Training', '8th', '', '3', '150', '0', '0', '150', '0', 'computer', 'diploma'),
(53, 'Project Presentation', '8th', '', '3', '150', '0', '0', '0', '150', 'computer', 'diploma'),
(54, 'Basic Electricity', '1st', '66711', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(55, 'Electrical Engineering Materials', '1st', '66713', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(56, 'Basic Electronics', '1st', '66811', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(57, 'Engineering Drawing', '1st', '61011', '2', '100', '0', '0', '50', '50', 'electrical', 'diploma'),
(58, 'Mathematics-1', '1st', '65911', '4', '200', '60', '90', '50', '0', 'electrical', 'diploma'),
(59, 'Chemistry', '1st', '65913', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(60, 'Physical & Life Skill Education', '1st', '65812', '1', '50', '0', '0', '25', '25', 'electrical', 'diploma'),
(61, 'Electrical Circuits-1', '2nd', '66721', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(62, 'Electrical Appliances', '2nd', '66722', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(63, 'Computer Application', '2nd', '66611', '2', '100', '0', '0', '50', '50', 'electrical', 'diploma'),
(64, 'Mathematics-2', '2nd', '65921', '4', '200', '60', '90', '50', '0', 'electrical', 'diploma'),
(66, 'Physics-1', '2nd', '65912', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(67, 'Bangla', '2nd', '65711', '4', '200', '60', '90', '50', '0', 'electrical', 'diploma'),
(68, 'English', '2nd', '65712', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(69, 'Electrical Circuits â€2', '3rd', '66731', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(70, 'Advance Electricity', '3rd', '66732', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(71, 'Electrical Engineering Drawing', '3rd', '66733', '1', '50', '0', '0', '25', '25', 'electrical', 'diploma'),
(72, 'Mathematics â€3', '3rd', '65931', '4', '200', '60', '90', '50', '0', 'electrical', 'diploma'),
(73, 'Physics â€2', '3rd', '65922', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(74, 'Communicative English', '3rd', '65722', '2', '100', '20', '30', '50', '0', 'electrical', 'diploma'),
(75, 'Social Science', '3rd', '65811', '3', '150', '60', '90', '0', '0', 'electrical', 'diploma'),
(76, 'Electrical Installation Planning and Estimating', '4th', '66741', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(77, 'DC Machines', '4th', '66742', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(78, 'Industrial Electronics', '4th', '66845', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(79, 'Applied Mechanics', '4th', '67045', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(80, 'Programming Essentials', '4th', '66631', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(81, 'Businessorganization & Communication', '4th', '65841', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(82, 'Electrical & Electronic Measurement â€1', '5th', '66751', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(83, 'Generation of Electrical Power', '5th', '66752', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(84, 'Renewable Energy', '5th', '66753', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(85, 'Digital Electronics & Microprocessor', '5th', '66856', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(87, 'Environmental Studies', '5th', '69054', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(88, 'Accounting Theory & Practice', '5th', '65851', '3', '150', '40', '60', '50', '0', 'electrical', 'diploma'),
(89, 'Alternating Current Machinesâ€1', '6th', '66761', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(90, 'Electrical & Electronic Measurementâ€2', '6th', '66762', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(91, 'Transmission and Distribution of Electrical Powerâ€1', '6th', '66763', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(92, 'Communication Engineering', '6th', '66867', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(93, 'Micro Controller & PLC', '6th', '66868', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(94, 'Industrial Management', '6th', '65852', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(95, 'Alternating Current Machinesâ€2', '7th', '66771', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(96, 'Electrical Engineering project', '7th', '66772', '2', '100', '0', '0', '50', '50', 'electrical', 'diploma'),
(97, 'Switch Gear & Protection', '7th', '66773', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(98, 'Transmission and Distribution of Electrical Powerâ€2', '7th', '66774', '4', '200', '60', '90', '25', '25', 'electrical', 'diploma'),
(99, 'Testing and Maintenance of Electrical Equipment', '7th', '66775', '2', '100', '20', '30', '25', '25', 'electrical', 'diploma'),
(100, 'Instrumentation and Process Control', '7th', '66863', '3', '150', '40', '60', '25', '25', 'electrical', 'diploma'),
(101, 'Innovation & Entrepreneurship', '7th', '65853', '2', '100', '40', '60', '0', '0', 'electrical', 'diploma'),
(102, 'Electrical Technology Industrial Training', '8th', '66781', '3', '150', '0', '0', '150', '0', 'electrical', 'diploma'),
(103, 'Graduation Project Presentation', '8th', '66781', '3', '150', '0', '0', '0', '150', 'electrical', 'diploma'),
(104, 'Engineering drawing', '1st', '61011', '', '', '', '', '', '', 'civil', 'diploma'),
(105, 'English', '1st', '65712', '', '', '', '', '', '', 'civil', 'diploma'),
(106, 'Bangla', '1st', '65711', '', '', '', '', '', '', 'civil', 'diploma'),
(107, 'Physicsâ€1', '1st', '65912', '', '', '', '', '', '', 'civil', 'diploma'),
(108, 'Mathematicsâ€1', '1st', ' 65911', '', '', '', '', '', '', 'civil', 'diploma'),
(109, 'Workshop practice', '1st', ' 67012', '', '', '', '', '', '', 'civil', 'diploma'),
(110, 'Electrical engineering fundamental', '1st', ' 66712', '', '', '', '', '', '', 'civil', 'diploma'),
(111, 'Civil engineering materials', '2nd', ' 66421', '', '', '', '', '', '', 'civil', 'diploma'),
(112, 'Mathematicsâ€2', '2nd', ' 65921', '', '', '', '', '', '', 'civil', 'diploma'),
(113, 'Communicative English', '2nd', ' 65722', '', '', '', '', '', '', 'civil', 'diploma'),
(114, 'Computer application', '2nd', ' 66611', '', '', '', '', '', '', 'civil', 'diploma'),
(115, 'Physicsâ€2 ', '2nd', '65922', '', '', '', '', '', '', 'civil', 'diploma'),
(116, 'Physical education and life skill development', '2nd', '65812', '', '', '', '', '', '', 'civil', 'diploma'),
(117, 'Electronic engineering fundamentals', '2nd', '66822', '', '', '', '', '', '', 'civil', 'diploma'),
(118, 'Civil engineering drawingâ€1', '3rd', '66431', '', '', '', '', '', '', 'civil', 'diploma'),
(119, 'Construction processâ€1', '3rd', '66433', '', '', '', '', '', '', 'civil', 'diploma'),
(120, 'Surveyingâ€1', '3rd', '66432', '', '', '', '', '', '', 'civil', 'diploma'),
(121, 'Mathematicsâ€3', '3rd', '65931', '', '', '', '', '', '', 'civil', 'diploma'),
(122, 'Civil workshop practice', '3rd', '66434', '', '', '', '', '', '', 'civil', 'diploma'),
(123, 'Social science', '3rd', '65811', '', '', '', '', '', '', 'civil', 'diploma'),
(124, 'Chemistry', '3rd', '65913', '', '', '', '', '', '', 'civil', 'diploma'),
(125, 'Structural mechanics', '4th', ' 66441', '', '', '', '', '', '', 'civil', 'diploma'),
(126, 'Surveyingâ€2', '4th', '66444', '', '', '', '', '', '', 'civil', 'diploma'),
(127, 'Estimating & costingâ€1', '4th', '66442', '', '', '', '', '', '', 'civil', 'diploma'),
(128, 'Environmental studies', '4th', '69054', '', '', '', '', '', '', 'civil', 'diploma'),
(129, 'Business organization & communication', '4th', '65841', '', '', '', '', '', '', 'civil', 'diploma'),
(130, 'Civil engineering drawingâ€2 (CAD)', '4th', '66443', '', '', '', '', '', '', 'civil', 'diploma'),
(131, 'Construction processâ€2', '5th', '66451', '', '', '', '', '', '', 'civil', 'diploma'),
(132, 'Theory of structure', '5th', '66454', '', '', '', '', '', '', 'civil', 'diploma'),
(133, 'Surveyingâ€3', '5th', '66452', '', '', '', '', '', '', 'civil', 'diploma'),
(134, 'Hydraulics', '5th', '66456', '', '', '', '', '', '', 'civil', 'diploma'),
(135, 'Water supply engineering', '5th', '66453', '', '', '', '', '', '', 'civil', 'diploma'),
(136, 'Estimating & costingâ€2', '5th', '66455', '', '', '', '', '', '', 'civil', 'diploma'),
(137, 'Accounting theory & practice', '5th', '65851', '', '', '', '', '', '', 'civil', 'diploma'),
(138, 'Advance surveying', '6th', '66461', '', '', '', '', '', '', 'civil', 'diploma'),
(139, 'Design of structureâ€1', '6th', '66463', '', '', '', '', '', '', 'civil', 'diploma'),
(140, 'Transportation engineeringâ€1', '6th', '66462', '', '', '', '', '', '', 'civil', 'diploma'),
(141, 'Foundation engineering', '6th', '66465', '', '', '', '', '', '', 'civil', 'diploma'),
(142, 'Civil engineering drawingâ€3 (CAD)', '6th', '66464', '', '', '', '', '', '', 'civil', 'diploma'),
(143, 'Industrial Management', '6th', '65852', '', '', '', '', '', '', 'civil', 'diploma'),
(144, 'Civil engineering software', '6th', '66466', '', '', '', '', '', '', 'civil', 'diploma'),
(145, 'Construction management & documentation', '7th', '68873', '', '', '', '', '', '', 'civil', 'diploma'),
(146, 'Transportation engineeringâ€2', '7th', '66473', '', '', '', '', '', '', 'civil', 'select Section'),
(147, 'Sanitary engineering', '7th', '66472', '', '', '', '', '', '', 'civil', 'diploma'),
(148, 'Water resources engineering', '7th', '66475', '', '', '', '', '', '', 'civil', 'diploma'),
(149, 'Design of structure-2', '7th', '66474', '', '', '', '', '', '', 'civil', 'diploma'),
(150, 'Innovation & Entrepreneurship', '7th', '65853', '', '', '', '', '', '', 'civil', 'diploma'),
(151, 'Civil engineering project', '7th', '66476', '', '', '', '', '', '', 'civil', 'diploma'),
(152, 'Engineering Drawing ', '1st', '61011', '', '', '', '', '', '', 'mechanical', 'diploma'),
(153, 'Mechanical Engineering Materials ', '1st', '67013', '', '', '', '', '', '', 'mechanical', 'diploma'),
(154, 'Electrical Engineering Fundamentals ', '1st', '66712', '', '', '', '', '', '', 'mechanical', 'diploma'),
(155, 'Bangla ', '1st', '65711', '', '', '', '', '', '', 'mechanical', 'diploma'),
(156, 'Physical Education & Life Skill Development ', '1st', '65812', '', '', '', '', '', '', 'mechanical', 'diploma'),
(157, 'Mathematicsâ€1', '1st', '65911', '', '', '', '', '', '', 'mechanical', 'diploma'),
(158, 'Chemistry', '1st', '65913', '', '', '', '', '', '', 'mechanical', 'diploma'),
(159, 'Advanced Mechanical Engineering Drawing', '2nd', '67021', '', '', '', '', '', '', 'mechanical', 'diploma'),
(160, 'Machine Shop Practiceâ€1', '2nd', '67022', '', '', '', '', '', '', 'mechanical', 'diploma'),
(161, 'Mechanical Workshop Practice', '2nd', '67023', '', '', '', '', '', '', 'mechanical', 'diploma'),
(162, 'English ', '2nd', '65712', '', '', '', '', '', '', 'mechanical', 'diploma'),
(163, 'Mathematicsâ€2', '2nd', '65921', '', '', '', '', '', '', 'mechanical', 'diploma'),
(164, 'Physicsâ€1', '2nd', '65912', '', '', '', '', '', '', 'mechanical', 'diploma'),
(165, 'Social Science', '2nd', '65811', '', '', '', '', '', '', 'mechanical', 'diploma'),
(166, 'Machine Shop Practiceâ€2', '3rd', '67031', '', '', '', '', '', '', 'mechanical', 'diploma'),
(167, 'Electronic Engineering Fundamentals', '3rd', '66822', '', '', '', '', '', '', 'mechanical', 'diploma'),
(168, 'Communicative English', '3rd', '65722', '', '', '', '', '', '', 'mechanical', 'diploma'),
(169, 'Mathematicsâ€3', '3rd', '65931', '', '', '', '', '', '', 'mechanical', 'diploma'),
(170, 'Physicsâ€2', '3rd', '65922', '', '', '', '', '', '', 'mechanical', 'diploma'),
(171, 'Computer Application', '3rd', '66611', '', '', '', '', '', '', 'mechanical', 'diploma'),
(172, 'Foundry & Pattern Making', '3rd', '67032', '', '', '', '', '', '', 'mechanical', 'diploma'),
(173, 'Engineering Mechanics', '4th', '67041', '', '', '', '', '', '', 'mechanical', 'diploma'),
(174, 'Metallurgy', '4th', '67042', '', '', '', '', '', '', 'mechanical', 'diploma'),
(175, 'Machine Shop Practiceâ€3', '4th', '67043', '', '', '', '', '', '', 'mechanical', 'diploma'),
(176, 'Electrical Circuits & Machines', '4th', '66743', '', '', '', '', '', '', 'mechanical', 'diploma'),
(177, 'Environmental Studies', '4th', '69054', '', '', '', '', '', '', 'mechanical', 'diploma'),
(178, 'Programming Essentials', '4th', '66631', '', '', '', '', '', '', 'mechanical', 'diploma'),
(179, 'Business Organization & Communication', '4th', '65841', '', '', '', '', '', '', 'mechanical', 'diploma'),
(180, 'Hydraulics & Hydraulic Machineries', '5th', '67051', '', '', '', '', '', '', 'mechanical', 'diploma'),
(181, 'Mechanical Estimating& Costing', '5th', '67052', '', '', '', '', '', '', 'mechanical', 'diploma'),
(182, 'Advance Weldingâ€1', '5th', '67053', '', '', '', '', '', '', 'mechanical', 'diploma'),
(183, 'CAD & CAM', '5th', '67054', '', '', '', '', '', '', 'mechanical', 'diploma'),
(184, 'Manufacturing Process', '5th', '67055', '', '', '', '', '', '', 'mechanical', 'diploma'),
(185, 'Accounting Theory & Practice', '5th', '65851', '', '', '', '', '', '', 'mechanical', 'diploma'),
(186, 'Thermodynamics & Heat Engine', '6th', '67061', '', '', '', '', '', '', 'mechanical', 'diploma'),
(187, 'Mechanical Measurement & Metrology', '6th', '67062', '', '', '', '', '', '', 'mechanical', 'diploma'),
(188, 'Plant Engineering', '6th', '67063', '', '', '', '', '', '', 'mechanical', 'diploma'),
(189, 'The strength of Materials', '6th', '67064', '', '', '', '', '', '', 'mechanical', 'diploma'),
(190, 'Advance Weldingâ€2', '6th', '67065', '', '', '', '', '', '', 'mechanical', 'diploma'),
(191, 'Industrial Management', '6th', '65852', '', '', '', '', '', '', 'mechanical', 'diploma'),
(192, 'Design of Machine Elements', '7th', '67071', '', '', '', '', '', '', 'mechanical', 'diploma'),
(193, 'Tool Design', '7th', '67072', '', '', '', '', '', '', 'mechanical', 'diploma'),
(194, 'Heat Treatment of Metal', '7th', '67073', '', '', '', '', '', '', 'mechanical', 'diploma'),
(195, 'Mechanical Engineering Project', '7th', '67074', '', '', '', '', '', '', 'mechanical', 'diploma'),
(196, 'Production Planning & Control', '7th', '67075', '', '', '', '', '', '', 'mechanical', 'diploma'),
(197, 'Mechatronics & PLC', '7th', '67076', '', '', '', '', '', '', 'mechanical', 'diploma'),
(198, 'Innovation & Entrepreneurship', '7th', '65853', '', '', '', '', '', '', 'mechanical', 'diploma'),
(199, 'Textile Raw materials-I', '1st', '1911', '4', '', '', '', '', '', 'text', 'diploma'),
(200, 'General Textile Processes-I', '1st', '1912', '10', '', '', '', '', '', 'text', 'diploma'),
(201, 'Engineering Drawing', '1st', '1011', '8', '', '', '', '', '', 'text', 'diploma'),
(202, 'Mathematics-I ', '1st', '5911', '10', '', '', '', '', '', 'text', 'diploma'),
(203, 'Chemistry', '1st', '5913', '10', '', '', '', '', '', 'text', 'diploma'),
(204, 'Bangla', '1st', '5711', '7', '', '', '', '', '', 'text', 'diploma'),
(205, 'Basic Workshop practice', '1st', '7011', '8', '', '', '', '', '', 'text', 'diploma'),
(206, 'Physical Education & Life Skill Development', '1st', '5812', '3', '', '', '', '', '', 'text', 'diploma'),
(207, 'Textile Raw materials-II', '2nd', '1921', '4', '', '', '', '', '', 'text', 'diploma'),
(208, 'General Textile Processes-II', '2nd', '1922', '10', '', '', '', '', '', 'text', 'diploma'),
(209, 'Basic Electricity', '2nd', '6711', '10', '', '', '', '', '', 'text', 'diploma'),
(210, 'Mathematics-II ', '2nd', '5921', '10', '', '', '', '', '', 'text', 'diploma'),
(211, 'Physics-I', '2nd', '5912', '10', '', '', '', '', '', 'text', 'diploma'),
(212, 'English-I', '2nd', '5712', '4', '', '', '', '', '', 'text', 'diploma'),
(213, 'Social Science-I', '2nd', '5811', '4', '', '', '', '', '', 'text', 'diploma'),
(214, 'Yarn Manufacturing-I', '3rd', '1931', '10', '', '', '', '', '', 'text', 'diploma'),
(215, 'Fabric Manufacturing-I ', '3rd', '1932', '10', '', '', '', '', '', 'text', 'diploma'),
(216, 'Computer Application-I', '3rd', '6621', '8', '', '', '', '', '', 'text', 'diploma'),
(217, 'Mathematics-III', '3rd', '5931', '10', '', '', '', '', '', 'text', 'diploma'),
(218, 'Physics-II', '3rd', '5922', '10', '', '', '', '', '', 'text', 'diploma'),
(219, 'Social Science-II', '3rd', '5821', '4', '', '', '', '', '', 'text', 'diploma'),
(220, 'English-II', '3rd', '5722', '7', '', '', '', '', '', 'text', 'diploma'),
(221, 'Yarn Manufacturing-II', '4th', '1941', '10', '', '', '', '', '', 'text', 'diploma'),
(222, 'Fabric Manufacturing-II', '4th', '1942', '10', '', '', '', '', '', 'text', 'diploma'),
(223, 'Wet Processing-I', '4th', '1943', '10', '', '', '', '', '', 'text', 'diploma'),
(224, 'Textile Testing & Quality Control-I', '4th', '1944', '10', '', '', '', '', '', 'text', 'diploma'),
(225, 'Statistic', '4th', '2149', '4', '', '', '', '', '', 'text', 'diploma'),
(226, 'Computer Application-II', '4th', '6632', '8', '', '', '', '', '', 'text', 'diploma'),
(227, 'Environmental Management', '4th', '5840', '4', '', '', '', '', '', 'text', 'diploma'),
(228, 'Yarn Manufacturing-III', '5th', '1951', '10', '', '', '', '', '', 'text', 'diploma'),
(229, 'Fabric Manufacturing-III', '5th', '1952', '8', '', '', '', '', '', 'text', 'diploma'),
(230, 'Wet Processing-II', '5th', '1953', '10', '', '', '', '', '', 'text', 'diploma'),
(231, 'Clothing-I', '5th', '1954', '8', '', '', '', '', '', 'text', 'diploma'),
(232, 'Textile Testing & Quality Control-II', '5th', '1955', '8', '', '', '', '', '', 'text', 'diploma'),
(233, 'Fabric Structure & Analysis-I', '5th', '1956', '8', '', '', '', '', '', 'text', 'diploma'),
(234, 'Book keeping & Accounting', '5th', '2013', '4', '', '', '', '', '', 'text', 'diploma'),
(235, 'Wet processing-III ', '6th', '1961', '10', '', '', '', '', '', 'text', 'diploma'),
(236, 'Clothing-II', '6th', '1962', '10', '', '', '', '', '', 'text', 'diploma'),
(237, 'Textile testing & quality control-III', '6th', '1963', '10', '', '', '', '', '', 'text', 'diploma'),
(238, 'Textile Calculation-I', '6th', '1964', '4', '', '', '', '', '', 'text', 'diploma'),
(239, 'Fabric structure & analysis-II', '6th', '1965', '10', '', '', '', '', '', 'text', 'diploma'),
(240, 'Business organization & communication', '6th', '5841', '4', '', '', '', '', '', 'text', 'diploma'),
(241, 'Industrial management', '6th', '2012', '6', '', '', '', '', '', 'text', 'diploma'),
(242, 'Textile Design & Color', '7th', '1971', '10', '', '', '', '', '', 'text', 'diploma'),
(243, 'Advanced Short Staple Spinning / Advanced Weaving / Advanced Dyeing / woven Garments And Finishing', '7th', '1972 / 1973 / 1974 / 1975 ', '10', '', '', '', '', '', 'text', 'diploma'),
(244, 'Long Staple Spinning / Ad. Knitting & NonWoven / Ad. Printing & Finishing / Ad. knit Garments & Fish', '7th', '1976 / 1977 / 1978 / 1979', '10', '', '', '', '', '', 'text', 'diploma'),
(245, 'Maintenance of Yarn Manufacturing / Fabric Manufacturing / Wet Processing / Garments Manufacturing M', '7th', '1980 / 1980 / 1980 / 1980', '10', '', '', '', '', '', 'text', 'diploma'),
(246, 'Textile Calculation-II', '7th', '1984', '4', '', '', '', '', '', 'text', 'diploma'),
(247, 'Production Planning & Control', '7th', '', '4', '', '', '', '', '', 'text', 'diploma'),
(248, 'Entrepreneurship', '7th', '2014', '4', '', '', '', '', '', 'text', 'diploma'),
(249, 'Industrial Training', '8th', '1986', '6', '', '', '', '', '', 'text', 'diploma');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `position` varchar(300) NOT NULL,
  `department` varchar(100) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `category` varchar(100) NOT NULL,
  `contact` varchar(200) NOT NULL,
  `qualification` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `name`, `position`, `department`, `photo`, `category`, `contact`, `qualification`, `address`, `email`) VALUES
(1, 'Md. Khalilur Rahman', 'PRINCIPAL', 'non tech', 'k-12.jpg', 'teacher', '01716610775', 'B.Sc in engineering , computer', 'Jhenaidah , bangladesh', 'jhenidah.tsc@gmail.com'),
(2, 'Md. Shafiqul Alam', 'Department Head', 'computer', 't.jpg', 'teacher', '01712222143', 'B.sc in engineering ,computer', 'Jhenaidah , bangladesh', 'shafiq.tsc@gmail.com'),
(4, 'Boni Shozib', 'Assistant ', 'computer', '52384566_1908105675985329_6138860377523355648_n.jpg', 'teacher', '8801940543398', 'B.Sc In Engineering ,Computer ', 'Jhenaidah , bangladesh', 'bonishozib54@gmail.com'),
(5, 'Mst.Shahida Begum', 'Assistant ', 'computer', 'sha.webp', 'teacher', '8801920112946', 'Bsc in  engineers ', 'Jhenaidah , Bangladesh', ''),
(6, 'Moniruzzaman Monir', ' Instructor', 'non tech', '72769470_940640822966393_259700364398297088_o.jpg', 'teacher', '01718669788', 'Bsc in  engineers ', 'Jhenaidah , bangladesh', ''),
(7, 'Md Mokshuduzzaman Khan  (Pappu)', ' Instructor', 'electrical', 'p.jpg', 'teacher', '01777777777', 'M.Sc in EEE (Engineering)', 'Jhenaidah, Dhaka Bangladesh.', ''),
(8, 'Alim Kabir', ' Instructor', 'non tech', 'a.jpg', 'teacher', '01912064327', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(9, 'Md.Zahidul Islam', 'Junior Instructor', 'farm machinery', 'z.jpg', 'teacher', '01912327252', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(10, 'Golam Azam', 'Part time teacher', 'automobile', 'g.jpg', 'teacher', '01717286874', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(11, 'Md Mofazzel', ' Instructor', 'automobile', '27983478_108427679984482_2895548608815634405_o.jpg', 'teacher', '01777777777', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(12, 'Humayun Kabir (Shohel)', ' Instructor', 'non tech', '107212918_3654150477935280_5761777339014490152_o.jpg', 'teacher', '01777777777', 'Bsc in  engineers ', 'Kushtia, Dhaka, Bangladesh', ''),
(13, 'Md Hadiuzzaman', ' Instructor', 'non tech', 'h.jpg', 'teacher', '01777777777', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(14, 'MD. Anishur Zaman', 'Chif-Instructor', 'automobile', '270x270-male-avatar.png', 'teacher', '01552499540', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(15, 'MD.Abdus Salam', ' Instructor', 'non tech', 'sa.jpg', 'teacher', '01718145500', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(16, 'MD.Alomgir Hossain', ' Instructor', 'non tech', '270x270-male-avatar.png', 'teacher', '01747453736', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(17, 'MD. Hasanur zaman ', ' Instructor', 'electrical', '270x270-male-avatar.png', 'teacher', '01746934533', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(18, 'MD. Amanul Islam', ' Instructor', 'farm machinery', '270x270-male-avatar.png', 'teacher', '01552499538', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(19, 'MD. Moffazal Hossain', ' Instructor', 'farm machinery', '270x270-male-avatar.png', 'teacher', '01552499534', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(20, 'MD. Hanif ', 'Part time teacher', 'automobile', '270x270-male-avatar.png', 'teacher', '01747397256', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', ''),
(21, 'Oliur Rahman', 'Accounter', 'select department', '270x270-male-avatar.png', 'staff', '01714599690', 'Honars', 'Jhenaidah, Dhaka Bangladesh.', ''),
(22, 'Mst. Sharmin Ara Parvin', 'Librarian', 'select department', 'avatar-female-person-profile-user-website-woman-icon-female-profile-png-512_512.png', 'staff', '01720572999', 'Masters', 'Jhenaidah, Dhaka Bangladesh.', ''),
(23, 'Aubul Hossain', 'Office Assistant', 'none', '270x270-male-avatar.png', 'staff', '01922312119', 'Honars', 'Jhenaidah, Dhaka Bangladesh.', ''),
(24, 'Abullah al masud', 'Office Assistant', 'none', '270x270-male-avatar.png', 'staff', '01849160111', 'Honars', 'Jhenaidah, Dhaka Bangladesh.', ''),
(25, 'Israyal hossin milita', 'Bicycle guard', 'none', '270x270-male-avatar.png', 'staff', '01919363622', 'H.Sc', 'Jhenaidah, Dhaka Bangladesh.', ''),
(26, 'Sri bijoy krishno shorma', 'Night guard', 'none', '270x270-male-avatar.png', 'staff', '01716465140', 'S.Sc', 'Jhenaidah, Dhaka Bangladesh.', ''),
(27, 'Bizli dashi', 'sweeper', 'none', 'avatar-female-person-profile-user-website-woman-icon-female-profile-png-512_512.png', 'staff', '01931438951', 'JSC', 'Jhenaidah, Dhaka Bangladesh.', ''),
(28, 'Md. Shafiqul Alam', 'Department head', 'short-course', 'shafiq sir.jpg', 'Microsoft Office', '01712222143', 'B.sc in engineering ,computer', 'Jhenaidah, Dhaka Bangladesh.', 'shafiq.tsc@gmail.com'),
(29, 'Boni Shozib', 'Assistant Teacher', 'short-course', 's.jpg', 'Microsoft Office', '01940543398', 'B.sc in engineering ,computer', 'Jhenaidah, Dhaka Bangladesh.', 'bonishozib54@gmail.com'),
(30, 'Md.Zahidul Islam', ' Instructor', 'short-course', 'z.jpg', 'Driving', '01912327252', 'Bsc in  engineers ', 'Jhenaidah, Dhaka Bangladesh.', '');

-- --------------------------------------------------------

--
-- Table structure for table `top_note`
--

CREATE TABLE `top_note` (
  `id` int(1) NOT NULL,
  `title` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `top_note`
--

INSERT INTO `top_note` (`id`, `title`, `date`) VALUES
(1, 'আমি কোনো ভাষাবিজ্ঞানী নই। তাই ভাষাগত, শব্দব্যঞ্জনগত শুদ্ধতা, তাল-লয় -এসব বিষয়ে আমার জ্ঞান খুবই প্রাথমিক। তাই এই লেখায় এসব ভাষাবিজ্ঞানগত তাত্ত্বিক উপাদান খুঁজতে যাওয়া অর্থহীন হবে। আমি চেষ্টা করেছি বাংলা ভাষায় দীর্ঘ শব্দ রাখতে, তবে তা দীর্ঘতম – এমন দাবি আমি করছি না। আমি চেষ্টা করেছি, অংক (সংখ্যা) রাখতে, যাতে ফন্টের অবয়বটা টের পাওয়া যায়। আমি চেষ্টা করেছি যুক্তাক্ষর রাখতে, যতিচিহ্ন রাখতে,… অর্ধমাত্রার অক্ষর, পূর্ণমাত্রার অক্ষর, মাত্রাহীন অক্ষর, কার-ফলাযুক্ত শব্দ, বাক্যের এখানে-ওখানে রাখতে।', 'November 30, 2021');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(100) NOT NULL,
  `file` varchar(500) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `file`, `date`) VALUES
(20, 'frcdMeF9E2s', 'October 23, 2020'),
(19, '3Cix3YGezrI', 'October 23, 2020'),
(21, 'esUxkQSbRGE', 'November 5, 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `principal_message`
--
ALTER TABLE `principal_message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `top_note`
--
ALTER TABLE `top_note`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `principal_message`
--
ALTER TABLE `principal_message`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `top_note`
--
ALTER TABLE `top_note`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
