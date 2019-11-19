-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2019 at 06:02 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE IF NOT EXISTS `tbl_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student` varchar(50) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `batch_id` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `attendance_date` date NOT NULL,
  `attendance_time` varchar(20) NOT NULL,
  `attendance_status` varchar(20) NOT NULL,
  `notify_status` varchar(20) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id`, `student`, `teacher`, `subject_id`, `batch_id`, `period`, `attendance_date`, `attendance_time`, `attendance_status`, `notify_status`) VALUES
(1, '4', '5', 7, 2, 1, '2019-11-09', '12:57:44', 'present', 'yes'),
(2, '5', '5', 7, 2, 1, '2019-11-09', '12:58:15', 'present', 'yes'),
(3, '6', '5', 7, 2, 1, '2019-11-09', '12:58:34', 'present', 'yes'),
(4, '4', '5', 7, 2, 2, '2019-11-09', '12:58:56', 'present', 'yes'),
(5, '5', '5', 7, 2, 2, '2019-11-09', '12:59:10', 'present', 'yes'),
(6, '6', '5', 7, 2, 2, '2019-11-09', '12:59:24', 'present', 'yes'),
(7, '4', '5', 7, 2, 3, '2019-11-09', '12:59:44', 'present', 'yes'),
(8, '5', '5', 7, 2, 3, '2019-11-09', '12:59:57', 'present', 'yes'),
(9, '6', '5', 7, 2, 3, '2019-11-09', '13:00:11', 'present', 'yes'),
(10, '4', '5', 7, 2, 4, '2019-11-09', '13:00:26', 'present', 'yes'),
(11, '5', '5', 7, 2, 4, '2019-11-09', '13:00:40', 'present', 'yes'),
(12, '6', '5', 7, 2, 4, '2019-11-09', '13:00:52', 'present', 'yes'),
(13, '4', '5', 7, 2, 5, '2019-11-09', '13:01:10', 'present', 'yes'),
(14, '5', '5', 7, 2, 5, '2019-11-09', '13:01:22', 'present', 'yes'),
(15, '4', '5', 7, 2, 6, '2019-11-09', '13:01:41', 'present', 'yes'),
(16, '4', '5', 7, 2, 7, '2019-11-09', '13:01:54', 'present', 'yes'),
(17, '2', '5', 8, 1, 1, '2019-11-09', '15:34:17', 'present', 'yes'),
(18, '2', '5', 8, 1, 2, '2019-11-09', '15:35:18', 'present', 'yes'),
(19, '2', '5', 8, 1, 3, '2019-11-09', '15:36:04', 'present', 'yes'),
(20, '2', '5', 8, 1, 4, '2019-11-09', '15:36:52', 'present', 'yes'),
(21, '2', '5', 8, 1, 5, '2019-11-09', '15:37:03', 'present', 'yes'),
(22, '2', '5', 8, 1, 6, '2019-11-09', '15:37:13', 'present', 'yes'),
(23, '2', '5', 8, 1, 7, '2019-11-09', '15:37:24', 'present', 'yes'),
(24, '4', '5', 7, 2, 1, '2019-11-10', '11:07:17', 'present', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_batch`
--

CREATE TABLE IF NOT EXISTS `tbl_batch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_batch`
--

INSERT INTO `tbl_batch` (`id`, `batch`, `branch_name`) VALUES
(1, 'MCA 2018-2020', 'Lateral'),
(2, 'MCA-2017-2020', 'regular');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_events`
--

CREATE TABLE IF NOT EXISTS `tbl_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `remarks` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_events`
--

INSERT INTO `tbl_events` (`id`, `event_name`, `event_date`, `remarks`, `status`) VALUES
(1, 'test name', '2019-10-30', 'Kochi (also known as Cochin) is a city in southwest India''s coastal Kerala state. It has been a port since 1341, when a flood carved out its harbor and opened it to Arab, Chinese and European merchants. Sites reflecting those influences include Fort Kochi, a settlement with tiled colonial bungalows and diverse houses of worship. Cantilevered Chinese fishing nets, typical of Kochi, have been in use for centuries.', 'New'),
(2, 'test', '2019-11-05', 'test is the event name', 'New'),
(3, 'test', '2019-11-06', 'Kochi (also known as Cochin) is a city in southwest India''s coastal Kerala state. It has been a port since 1341, when a flood carved out its harbor and opened it to Arab, Chinese and European merchants. Sites reflecting those influences include Fort Kochi, a settlement with tiled colonial bungalows and diverse houses of worship. Cantilevered Chinese fishing nets, typical of Kochi, have been in use for centuries.', 'New'),
(4, 'test name', '2019-11-07', 'test', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE IF NOT EXISTS `tbl_faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(50) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `answer` text NOT NULL,
  `question_date` date NOT NULL,
  `answer_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `teacher_name`, `student_name`, `question`, `status`, `answer`, `question_date`, `answer_date`) VALUES
(1, '6', '4', 'what is machine learning', 'answered', 'machine learning is learn computer <br>', '2019-10-28', '2019-10-30'),
(2, '5', '4', 'dghg', 'answered', 'testtttttttt the datassssss<br>', '2019-10-29', '2019-10-30'),
(3, '5', '2', 'test', 'answered', 'whats test<br>', '2019-10-16', '2019-10-30'),
(4, '5', '2', 'test', 'answered', 'test<br>', '2019-10-16', '2019-10-30'),
(5, '5', '2', 'test', 'unanswered', '', '2019-10-30', '0000-00-00'),
(6, '5', '2', 'test', 'unanswered', '', '2019-10-30', '0000-00-00'),
(7, '5', '2', 'testttttttt', 'unanswered', '', '2019-10-30', '0000-00-00'),
(8, '5', '4', 'what is html ?', 'answered', 'hypertext markup language<br>', '2019-10-30', '2019-10-30'),
(9, '5', '2', 'what is html', 'unanswered', '', '2019-10-30', '0000-00-00'),
(10, '5', '2', 'what is css', 'answered', 'cascading style sheet<br>', '2019-10-30', '2019-10-30'),
(11, '5', '3', 'what is bootstrap', 'unanswered', '', '2019-10-30', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fingerprint`
--

CREATE TABLE IF NOT EXISTS `tbl_fingerprint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `fingerprint` text NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_fingerprint`
--

INSERT INTO `tbl_fingerprint` (`id`, `user`, `fingerprint`, `user_type`, `batch`) VALUES
(1, '2', 'Rk1SACAyMAAAAAECAAABPAFiAMUAxQEAAAAoJoCZAMTsAEBbAKiEAEC7ANjqAEClAHVxAICWAPd6AEBrAP0AAIBBAN6PAEBLAPIMAEBGAGV7AEEBAHNdAICZAUZpAIEEAFE8AEBBAUCkAICxALZ0AEClAOPrAEBZAJH+AECzAHvuAEDPAJ9wAIBgAPuJAEB6AF5xAEA8AICDAECxAEroAEDfAENqAEAeARgWAIB+AU6HAIBeAU0JAICGAIx6AICzAOB0AEBwAHd7AIBcAOmPAEDGAIRtAEB9AQeFAEClAFxsAIDoAIVsAIBAAQ+WAEAXAF//AED3AEpNAEDtADtTAAAA', 'student', 1),
(2, '3', 'Rk1SACAyMAAAAAGwAAABPAFiAMUAxQEAAAAoQ0CRALazAIB7AKWpAEBnAKekAIDDAL29AEC3APNBAEBTAOyYAECBAHoUAIA8AL6OAEBiAHiCAIDmALWuAEBzAGeBAEBfAR5qAED0AKqWAEAxAP4bAEEGAMzbAIBwATdYAICPAUBSAIDzAHeHAEArARQAAEATAQEqAEEDARntAICBADANAEDmADB4AECeANW/AICzAMDAAECoAJqmAECRAPlBAIBVAKaZAEBgAJGRAEDaAL7KAECrAHaXAIBeAQ1WAIA+AO0bAEBhAGx6AEAsAPKeAEA5AH51AEC8AGD5AEB8AFB6AEBlATdnAIAZAPQTAEEOAL7bAEB/AEVwAEA3ATDuAEEAAGt9AEDKAU9aAEB0AMqwAECQAJilAIBnAOi4AEDNAM/OAEBbAPa4AEBHAKmNAEBcAIOJAEBuARBGAEAyANiOAEBJAQT+AEDWAQRIAECiAFuQAIBCAQ7wAED+ALKnAEBEAGN2AEDjASLgAEAVAOMUAEENAKxuAEENAO1YAEChAVBdAEEgAMFZAED3AFF6AAAA', 'student', 1),
(3, '4', 'Rk1SACAyMAAAAACEAAABPAFiAMUAxQEAAAAoEUCIAMRtAECPAOJhAIC5AIXkAEAvAHQBAICzAF9pAICMADlrAECFAH5xAECgAN7YAEBlAPvaAEBKAP64AEAgAGL7AEBWATZOAEBMAHqCAECJAF7sAIBcAQG5AIBmAQrPAIBWAD15AAAA', 'student', 2),
(4, '5', 'Rk1SACAyMAAAAADwAAABPAFiAMUAxQEAAAAoI4CDALJsAIBLAK4AAIBEAMoJAEBwAGt3AEC5AJTeAEAlAL4iAIAvAHkWAEAxAGUVAIBmARrAAECKAENlAIC1AFFeAEB/AS3VAIB9AM5uAEBtAIR2AIClAJZhAEBFAOi0AICAAGNpAICkAPVeAEAbAJ0/AEB1ARrAAEDeAKheAIAfAGlCAICCASXaAEBzASxAAIBdAM2WAICjAK1iAIByAOuKAEBfAGrzAEC9AIxcAEBrAQi5AEAkAIMoAIDLAHPdAICFARlnAEBLAEV4AIDVAG1fAAAA', 'student', 2),
(5, '6', 'Rk1SACAyMAAAAAGSAAABPAFiAMUAxQEAAAAoPoCFAOmJAIBeAK0CAECQAQrfAICFARDSAECRARXdAEBUAIWPAEDdANzmAEBcAHaCAEDqANLnAIChASleAIA8AH4BAICqAS5aAIAWALFCAED9ALZnAIBtATxIAEA0AR89AEDQAFzlAEAiAHLFAEBNAEmBAICvADjdAEAWAEPHAICpAOJsAICcAJhxAICwAQLbAEBBAM0tAEBHAOsgAIDZANJlAECPASLhAICPAGlsAECXAGjpAEBvAGJ1AICSATLnAECFAFpmAEDeAHvsAEArAHw4AIDRASrbAEDMAFxfAEC1AUFRAEC0AEpgAIDxAS7hAEDZAVlkAEAPAVRFAECvALJtAEBPAM8QAEBGALMZAEBCAOEwAEBDAPIlAIA2AK46AIDDAQ3dAEC0AHNpAIB7ASnUAIC3ASfMAEAsAIxAAEDxAOZoAICpATZeAEASANfCAEDeAHNkAEASAJG9AEDNATvXAECKAEJzAICaADPhAED1AUxcAAAA', 'student', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `apply_date` date NOT NULL,
  `fromdate` date NOT NULL DEFAULT '0000-00-00',
  `todate` date NOT NULL DEFAULT '0000-00-00',
  `remark` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`id`, `student_name`, `teacher_name`, `reason`, `status`, `apply_date`, `fromdate`, `todate`, `remark`) VALUES
(1, '2', '5', 'test', 'rejected', '2019-10-02', '2019-10-08', '2019-10-15', 'test'),
(2, '2', '5', 'rtrt', 'approved', '2019-10-26', '2019-10-25', '2019-10-30', 'rfr'),
(3, '2', '5', 'test', 'applied', '2019-10-01', '2019-10-01', '2019-10-28', 'test'),
(4, '2', '5', 'test', 'approved', '2019-10-26', '2019-10-26', '2019-10-26', 'test'),
(5, '2', '5', 'test', 'rejected', '2019-10-26', '2019-10-29', '2019-10-30', 'test'),
(6, '2', '5', 'test', 'applied', '2019-10-30', '2019-10-31', '2019-11-02', 'testttt'),
(7, '3', '5', 'test', 'applied', '2019-10-30', '2019-10-31', '2019-11-02', 'test'),
(8, '3', '5', 'test', 'applied', '2019-10-30', '2019-11-05', '2019-11-07', 'testttt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE IF NOT EXISTS `tbl_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) NOT NULL,
  `student_dob` date NOT NULL,
  `student_address` varchar(50) NOT NULL,
  `student_username` varchar(50) NOT NULL,
  `student_password` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_mob` varchar(100) NOT NULL,
  `parent_mob` varchar(20) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `current_sem` varchar(50) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `student_gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `student_name`, `student_dob`, `student_address`, `student_username`, `student_password`, `student_email`, `student_mob`, `parent_mob`, `batch`, `current_sem`, `branch_name`, `student_gender`) VALUES
(2, 'MEENU PRABHA', '1998-07-12', 'NADUKKUDY(H),PANICHAYAM', 'meenu', 'meenu123', 'meenuprabha98@gmail.com', '9645405011', '0', '1', '5', 'MCA', 'female'),
(3, 'maju', '2019-10-02', 'fef', 'maju', 'maju', 'majuthambi@gmail.com', '9645760238', '9645405011', '1', '', 'MCA', 'female'),
(4, 'manju ', '1997-05-06', 'ezhumavil', 'manjusha', 'manju', 'majuthampi987@gmail.com', '9645760238', '0', '2', '', 'R AND L', 'female'),
(5, 'Ammu', '1997-06-07', 'xyz', 'ammu123', 'ammu', 'ammu@gmail.com', '9874562720', '0', '2', '', 'MCA', 'female'),
(6, 'Gopika Raj', '1997-10-25', 'Maniyattusheri(h),Pancode(po),Pancode', 'gopikagopu', 'gopu123', 'gopikagopu1997@gmail.com', '9072053356', '9072053356', '2', '', 'R AND L', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE IF NOT EXISTS `tbl_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_code` varchar(50) NOT NULL,
  `subject_name` varchar(50) NOT NULL,
  `teacher_name` int(11) NOT NULL,
  `current_sem` varchar(50) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`id`, `subject_code`, `subject_name`, `teacher_name`, `current_sem`, `batch`) VALUES
(6, 'RLMCA205', 'iml', 6, '2', 1),
(7, 'RLMCA026', 'DBMS', 5, '2', 2),
(8, 'RLMCA207', 'Cryptogra', 5, '2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE IF NOT EXISTS `tbl_teacher` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `teacher_name`, `dob`, `address`, `gender`, `username`, `password`, `qualification`) VALUES
(5, 'anjali sankar', '1990-06-29', 'KALARIKKAL(H),PERUMBAVUR', 'FEMALE', 'anjali', 'anjali123', 'MCA'),
(6, 'Anish Mathew', '1994-05-27', 'Ranni', 'Male', 'anish', 'anish123', 'Btech');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
