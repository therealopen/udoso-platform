-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 06:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uis_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv_tb`
--

CREATE TABLE `adv_tb` (
  `a_id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `file` varchar(255) NOT NULL,
  `adv` longtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL,
  `id` int(11) NOT NULL,
  `confirm_adv` enum('','no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adv_tb`
--

INSERT INTO `adv_tb` (`a_id`, `description`, `file`, `adv`, `date`, `status`, `id`, `confirm_adv`) VALUES
(3, 'Corona virus', '', 'Object-oriented design is the process of using an object-oriented methodology to design a computing system or application. This technique enables the implementation of a software solution based on the concepts of objects. OOD serves as part of the object-oriented programming (OOP) process or lifecycle.', '2022-03-31 19:34:43', 'afya', 96, ''),
(4, 'Block 1 & 3 kiumeni', '', 'improve customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-04-01 15:28:32', 'makazi', 90, ''),
(8, 'UDSM VS UDOM', '', 'improve customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-04-01 15:58:20', 'michezo', 91, 'yes'),
(12, 'mwisho wa chumba', '', 'improve customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide', '2022-05-01 08:00:55', 'makazi', 96, 'yes'),
(13, 'wiki ya test', '', 'improve customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-05-02 18:18:25', 'elimu', 96, 'no'),
(14, 'software testing', '', 'improve customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-05-09 23:36:10', 'michezo', 89, 'no'),
(17, 'dwqdqwd', '', 'dwqdfqef', '2022-05-20 11:12:31', 'makazi', 89, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `comments` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `a_id` int(11) NOT NULL,
  `regno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comments`, `date`, `a_id`, `regno`) VALUES
(53, 'mprove customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-05-13 02:55:52', 8, 'T/UDOM/2020/00392'),
(54, 'mprove customer interactions with intelligent, lifelike responses. get started for free. deliver a better voice experience for customer service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network. get the support you need', '2022-05-13 02:56:07', 8, 'T/UDOM/2020/00392'),
(59, ' customer interactions with intelligent, lifelike responses. get started for free.', '2022-05-13 03:15:48', 13, 'T/UDOM/2020/00375'),
(60, 'accessible data analytics. use our worldwide\r\ncomment', '2022-05-13 03:21:02', 13, 'T/UDOM/2020/00375'),
(70, 'service with voicebots on dialogflow. tailored to your business. accessible data analytics. use our worldwide network', '2022-05-14 07:38:53', 8, 'T/UDOM/2020/00366'),
(71, 'tailored to your business. accessible data analytics. use our worldwide network.', '2022-05-16 01:33:03', 8, 'T/UDOM/2020/00392'),
(72, 'get started for free. deliver a better voice experience for customer service with voicebots on dialogflow.', '2022-05-16 01:39:19', 8, 'T/UDOM/2020/00392'),
(111, ' get started for free. deliver a better voice experience for customer service with voicebots on dialogflow.', '2022-05-16 02:39:57', 12, 'T/UDOM/2020/00392');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `persname` varchar(100) DEFAULT NULL,
  `phonenumber` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`persname`, `phonenumber`, `city`) VALUES
('juma', '0743093954', 'dom'),
('mtani', '07437893954', 'dsm'),
('hija', '07437890954', 'bukoba');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `buyer` varchar(100) DEFAULT NULL,
  `seller` varchar(100) DEFAULT NULL,
  `store` varchar(100) DEFAULT NULL,
  `product` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`buyer`, `seller`, `store`, `product`) VALUES
('dulani', 'mtani', 'mtanistore', 'kondomu'),
('hasani', 'mo', 'hstore', 'alkasusi'),
('idrisa', 'mpemba', 'jstore', 'pweza');

-- --------------------------------------------------------

--
-- Table structure for table `student_tb`
--

CREATE TABLE `student_tb` (
  `id` int(11) NOT NULL,
  `regno` varchar(30) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `password` varchar(255) NOT NULL,
  `program` enum('BIS','MTA','SE','CS','TE','CE','IDIT','IS','HIS','DET') NOT NULL,
  `accademic_year` date NOT NULL,
  `role` enum('makazi','student','gavana','fedha','mikopo','jinsia','sheria','superControl','michezo','elimu','uraia na usawa','none') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tb`
--

INSERT INTO `student_tb` (`id`, `regno`, `fname`, `mname`, `lname`, `gender`, `email`, `phone`, `password`, `program`, `accademic_year`, `role`) VALUES
(89, 'T/UDOM/2020/00392', 'HASSAN', 'Z', 'MNYAWAN', 'male', 'hassanmnyawami@gmail.com', '0779285367', '1fa45062e80713b8a8e038b9580b70c791fd7761', 'SE', '2020-10-19', 'superControl'),
(90, 'T/UDOM/2017/00383', 'RAMADHANI', 'MUSSA', 'MTANI', 'male', 'ramamtani@gmail.com', '0787646231', '1e2dea5aad39e17b9c1fdc6977fde0172591eefc', 'SE', '2017-10-19', 'sheria'),
(91, 'T/UDOM/2020/06793', 'HUSSEIN', 'MCHENI', 'HASSANI', 'male', 'husseinmcheni@yahoo.com', '0718897654', 'a639100af178db9e3f4803d0938a5f8bb2d7c433', 'SE', '2020-10-19', 'gavana'),
(96, 'T/UDOM/2020/00375', 'kasara', 'G', 'venas', 'male', 'zionarafat@yahoo.com', '0736751711', 'a639100af178db9e3f4803d0938a5f8bb2d7c433', 'SE', '2020-10-19', 'jinsia'),
(97, 'T/UDOM/2020/00366', 'RAMADHANI', 'KASSIMU', 'BAKARI', 'male', 'ramapablo126@gmail.com', '0987689087', 'a639100af178db9e3f4803d0938a5f8bb2d7c433', 'SE', '2020-10-19', 'michezo'),
(99, 'T/UDOM/2020/00345', 'KIDULANI', 'MAN', 'KIDU', 'male', 'kidulaniman@yahoo.com', '0756872891', 'c7517c0d9fb3c0af6b4b5753fe9bca5a317dcfba', 'SE', '2020-10-19', 'sheria'),
(100, 'T/UDOM/2020/00333', 'ASHURA', 'zambezi', 'MWITA', 'female', 'ashumwita@gmail.com', '0717369493', 'a639100af178db9e3f4803d0938a5f8bb2d7c433', 'MTA', '2020-10-19', 'fedha'),
(105, 'T/UDOM/2020/00689', 'JAMAL', 'KASHOGI', 'RONIA', 'male', 'ron@hotmail.com', '0987634855', '94b0ea11040c3491dc4da25d71eec267c0256640', 'CS', '2020-10-19', 'student'),
(106, 'T/UDOM/2020/00632', 'KHATIBU', 'KASSIMU', 'MANYANYA', 'male', 'khatibymanyanya@hotmail.com', '0718908764', 'fbc9885ec668ed3cbc097335cc9ba846bb543d53', 'TE', '2020-10-19', 'mikopo'),
(111, 'T/UDOM/2020/00379', 'MAISAM', 'DANIEL', 'KAMILISA', 'female', 'maisam@hotmail.com', '0748909876', '547f713e98c3424cd804abab0e6c59c67cf0c64c', 'BIS', '2020-10-19', 'student'),
(119, 'T/UDOM/2020/00349', 'AMINA', 'KASIMU', 'MAHENGE', 'female', 'emmiby@yahoo.com', '0765909800', 'b04f4eb3c0623406aeef9feedc36dbe9d1405046', 'IS', '2020-10-19', 'elimu'),
(156, 'T/UDOM/2020/00505', 'HASSAN', 'KIM', 'KIMJON', 'male', 'kimtoday@gmail.com', '0659038944', 'a20b1362b022c7692f3f9a68c512e2c06be81f8d', 'MTA', '2020-10-19', 'student'),
(157, 'T/UDOM/2020/00506', 'MUSTAPHA', 'MCHENI', 'HASSANI', 'male', 'mustmcheni@gmail.com', '0689049039', '6946147e96597e30e38ab47493c849537b74808b', 'CS', '2020-10-19', 'student'),
(158, 'T/UDOM/2020/00507', 'WILLIAM', 'MLUTO', 'JOHSON', 'male', 'wildmimi@gmail.com', '0767893874', 'b398d966234a4bbd9a51bd1cf3ae34046934db84', 'TE', '2020-10-19', 'uraia na usawa'),
(159, 'T/UDOM/2020/00508', 'IMMANUEL', 'JACKOB', 'NATORY', 'male', 'natorymei@gmail.com', '0798090987', 'a1f6d83427289ecb1fec3a9b713ca55fb871ee69', 'MTA', '2020-10-19', 'student'),
(161, 'T/UDOM/2020/00510', 'JUDITH', 'AYUB', 'MILLIAM', 'male', 'judith@gmail.com', '0738970987', 'f7fcf83edfddd39bc353f8580b374763ec1f2851', 'SE', '2020-10-19', 'makazi'),
(162, 'T/UDOM/2020/00400', 'ZAHARA', 'MAHMUDU', 'ZUBERI', 'female', 'zaharazuberi@yahoo.com', '0786751723', '923fc8794d8647b2db36694f9aaf80ea4bb07582', 'TE', '2020-10-19', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv_tb`
--
ALTER TABLE `adv_tb`
  ADD PRIMARY KEY (`a_id`),
  ADD KEY `adv_id` (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cmt` (`a_id`);

--
-- Indexes for table `student_tb`
--
ALTER TABLE `student_tb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adv_tb`
--
ALTER TABLE `adv_tb`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `student_tb`
--
ALTER TABLE `student_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adv_tb`
--
ALTER TABLE `adv_tb`
  ADD CONSTRAINT `adv_id` FOREIGN KEY (`id`) REFERENCES `student_tb` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `cmt` FOREIGN KEY (`a_id`) REFERENCES `adv_tb` (`a_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
