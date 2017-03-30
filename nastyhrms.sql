-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 03:03 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nastyhrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

CREATE TABLE IF NOT EXISTS `certificate` (
  `certificate_NameOfCollege` varchar(50) NOT NULL,
  `certificate_cgpa` decimal(10,0) NOT NULL,
  `certificate_major` varchar(40) NOT NULL,
  `certificate_YearStart` int(11) NOT NULL,
  `certificate_Yearsale` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `degree_NameOfCollege` varchar(50) NOT NULL,
  `degree_cgpa` int(11) NOT NULL,
  `degree_major` varchar(40) NOT NULL,
  `degree_yearStart` int(11) NOT NULL,
  `degree_yearEnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `deptName` varchar(20) NOT NULL,
  `dept_description` varchar(100) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `deptName`, `dept_description`) VALUES
(11, 'IT', '<p>- Protects site by designing and installing security precautions.\r\n\r\n<br></p>'),
(12, 'GRAPHIC AND DESIGNER', '<p>\r\n\r\nDesign or create graphics to meet specific commercial or promotional needs, such as packaging'),
(13, 'INVENTORY', '<p>- To take daily inventory of the assigned supply, requisitions, and to restock supplies to par le'),
(15, 'HUMAN RESOURSE & ADM', ''),
(16, 'DISTRIBUTION', ''),
(17, 'PRODUCTION', ''),
(18, 'CUSTOMER SERVICE', ''),
(19, 'SALES', ''),
(20, 'LABORATORY', ''),
(21, 'ACCOUNTING', ''),
(22, 'MARKETING', ''),
(23, 'MANAGEMENT', '');

-- --------------------------------------------------------

--
-- Table structure for table `diploma`
--

CREATE TABLE IF NOT EXISTS `diploma` (
  `diploma_NameOfCollege` varchar(50) NOT NULL,
  `diploma_cgpa` decimal(10,0) NOT NULL,
  `diploma_major` varchar(40) NOT NULL,
  `diploma_yearStart` int(11) NOT NULL,
  `diploma_yearEnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_claim`
--

CREATE TABLE IF NOT EXISTS `employee_claim` (
  `claim_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `emp_OTDate` date DEFAULT NULL,
  `emp_OTIn` time DEFAULT NULL,
  `emp_OTOut` time DEFAULT NULL,
  `emp_OTRate` double NOT NULL,
  `emp_OTTotal_hour` int(11) DEFAULT NULL,
  `emp_OTTotal` int(11) DEFAULT NULL,
  `emp_OTDay` varchar(10) NOT NULL,
  `emp_OTDes` varchar(100) NOT NULL,
  PRIMARY KEY (`claim_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `employee_claim`
--

INSERT INTO `employee_claim` (`claim_id`, `emp_id`, `emp_name`, `emp_OTDate`, `emp_OTIn`, `emp_OTOut`, `emp_OTRate`, `emp_OTTotal_hour`, `emp_OTTotal`, `emp_OTDay`, `emp_OTDes`) VALUES
(18, 30053, 'test', '2017-02-23', '14:00:00', '18:00:00', 1.5, 40000, 44, 'Monday', '<p>NAK SIAPKAN SYSTEM</p>'),
(19, 30053, 'test', '2017-03-08', '14:00:00', '18:00:00', 1.5, 40000, 44, 'Tuesday', ''),
(20, 30053, 'test', '2017-03-15', '19:00:00', '21:00:00', 1.5, 2, 22, 'Thursday', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_dependents`
--

CREATE TABLE IF NOT EXISTS `employee_dependents` (
  `emp_id` int(11) NOT NULL,
  `emp_depenName` varchar(30) NOT NULL,
  `emp_depenRelationship` varchar(20) NOT NULL,
  `emp_depenDob` date NOT NULL,
  `emp_wifeName` varchar(40) NOT NULL,
  `emp_NoOfChildren` int(11) NOT NULL,
  `emp_depen_IdNumber` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_educationinformation`
--

CREATE TABLE IF NOT EXISTS `employee_educationinformation` (
  `emp_id` int(11) NOT NULL,
  `emp_educatLevel` varchar(20) NOT NULL,
  `emp_educatYears` int(11) NOT NULL,
  `emp_educatCgpa` decimal(10,0) NOT NULL,
  `emp_educatMajor` varchar(30) NOT NULL,
  `emp_educatCollege` varchar(60) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_emergencycontacts`
--

CREATE TABLE IF NOT EXISTS `employee_emergencycontacts` (
  `emp_id` int(11) NOT NULL,
  `emp_emerName` varchar(30) NOT NULL,
  `emp_emerRelationship` varchar(20) NOT NULL,
  `emp_emerHomePhone` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_holiday`
--

CREATE TABLE IF NOT EXISTS `employee_holiday` (
  `emp_holidayDate` date NOT NULL,
  `emp_holidayDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE IF NOT EXISTS `employee_information` (
  `emp_id` int(5) NOT NULL AUTO_INCREMENT,
  `emp_fullname` varchar(100) NOT NULL,
  `ic_No` varchar(15) NOT NULL,
  `date_Birth` date NOT NULL,
  `marital` varchar(7) NOT NULL,
  `spouse_Name` varchar(30) NOT NULL,
  `emp_address` varchar(100) NOT NULL,
  `emp_poscode` int(11) NOT NULL,
  `emp_city` varchar(15) NOT NULL,
  `emp_state` varchar(25) NOT NULL,
  `emp_contactNo` varchar(12) NOT NULL,
  `emp_email` varchar(20) NOT NULL,
  `emp_hireDate` date NOT NULL,
  `employeeType` varchar(20) NOT NULL,
  `emp_socsoNo` varchar(20) NOT NULL,
  `emp_kwspNo` varchar(20) NOT NULL,
  `emp_accBank` varchar(20) NOT NULL,
  `emp_salary` decimal(10,0) NOT NULL,
  `emp_deptId` int(11) NOT NULL,
  `emp_designation` varchar(30) NOT NULL,
  `emp_annualLeave` int(5) NOT NULL,
  `emp_medicalLeave` int(11) NOT NULL,
  `emp_unpaidLeave` int(11) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30059 ;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`emp_id`, `emp_fullname`, `ic_No`, `date_Birth`, `marital`, `spouse_Name`, `emp_address`, `emp_poscode`, `emp_city`, `emp_state`, `emp_contactNo`, `emp_email`, `emp_hireDate`, `employeeType`, `emp_socsoNo`, `emp_kwspNo`, `emp_accBank`, `emp_salary`, `emp_deptId`, `emp_designation`, `emp_annualLeave`, `emp_medicalLeave`, `emp_unpaidLeave`) VALUES
(30053, 'test', '930927105811', '1993-03-15', 'single', '', 'test', 11111, 'test', 'Melaka', '011-23234587', 'test@nastyjuice.co', '2017-03-15', 'Permanent', '1111111', '1111111', '111111', '1500', 17, 'Web Developer', 0, 0, 0),
(30054, 'test', '930927105812', '0000-00-00', '', '', 'test', 11111, 'test', 'Melaka', '011-23234587', 'test@nastyjuice.com', '2017-03-15', 'Permanent', '1111111', '1111111', '111111', '1500', 0, 'Web Developer', 0, 0, 0),
(30055, 'test', '565534645435', '0000-00-00', '', '', 'test', 11111, 'test', 'Kedah', '011-23234587', 'test@nastyjuice.com', '2017-03-15', 'Part Time', '1111111', '1111111', '111111', '1500', 0, 'Web Developer', 0, 0, 0),
(30056, 'test2', '11111110000', '2017-03-14', 'single', '', 'asdasd', 23123, 'seremban', 'Negeri Sembilan', '11111111111', 'example@gmail.com', '2017-03-09', 'Permanent', '1111111', '1111111', '111111', '1800', 0, 'Production', 0, 0, 0),
(30057, 'test2', '2312323', '2017-03-21', 'single', '', 'sdadaw', 341422, 'sdasdsaa', 'Kuala Lumpur', '123232', 'example@gmail.com', '2017-03-22', 'Part Time', '234214', '2412', '2313213', '12323', 17, 'sdsad', 0, 0, 0),
(30058, 'test3', '111111', '2017-03-22', 'single', '', 'ewe', 23213, '23132', 'Negeri Sembilan', '11111', 'example@gmail.com', '2017-03-16', 'Part Time', '232131', '23132', '3123123', '2211', 17, 'weqwewew', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_internship`
--

CREATE TABLE IF NOT EXISTS `employee_internship` (
  `intern_id` int(5) NOT NULL AUTO_INCREMENT,
  `emp_internFullName` varchar(50) NOT NULL,
  `emp_internIcNum` varchar(15) NOT NULL,
  `emp_internDob` date NOT NULL,
  `emp_internAge` int(11) NOT NULL,
  `intern_marital` varchar(20) NOT NULL,
  `intern_spouseName` varchar(30) NOT NULL,
  `emp_internAdress` varchar(50) NOT NULL,
  `emp_internPoscode` int(11) NOT NULL,
  `emp_internCity` varchar(20) NOT NULL,
  `emp_internState` varchar(20) NOT NULL,
  `emp_internPhoneNo` varchar(20) NOT NULL,
  `emp_internHomePhone` varchar(20) NOT NULL,
  `emp_internEmail` varchar(30) NOT NULL,
  `emp_internStart` date NOT NULL,
  `emp_internEnd` date NOT NULL,
  `intern_level` varchar(7) NOT NULL,
  `elaun` varchar(7) NOT NULL,
  `intern_department` varchar(100) NOT NULL,
  PRIMARY KEY (`intern_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40004 ;

--
-- Dumping data for table `employee_internship`
--

INSERT INTO `employee_internship` (`intern_id`, `emp_internFullName`, `emp_internIcNum`, `emp_internDob`, `emp_internAge`, `intern_marital`, `intern_spouseName`, `emp_internAdress`, `emp_internPoscode`, `emp_internCity`, `emp_internState`, `emp_internPhoneNo`, `emp_internHomePhone`, `emp_internEmail`, `emp_internStart`, `emp_internEnd`, `intern_level`, `elaun`, `intern_department`) VALUES
(40001, 'Siti Nuraishah binti Ab Raub', '0', '0000-00-00', 0, 'single', '', '', 83000, 'Segamat', 'Johor', '0', '0', '', '0000-00-00', '0000-00-00', 'Diploma', 'RM 100', 'IT Dept.'),
(40002, 'rabiatul adawiyah binti harun', '950118017734', '1995-01-18', 22, 'single', '', '', 0, '', 'Johor', '', '', '', '0000-00-00', '0000-00-00', 'Diploma', 'RM 100', 'Sales Dept.'),
(40003, 'Siti Sarah', '', '0000-00-00', 23, 'single', '', '', 0, '', 'Johor', '', '', '', '0000-00-00', '0000-00-00', 'Diploma', 'RM 100', 'IT Dept.');

-- --------------------------------------------------------

--
-- Table structure for table `employee_jobs`
--

CREATE TABLE IF NOT EXISTS `employee_jobs` (
  `emp_jobTitle` varchar(50) NOT NULL,
  `emp_jobDesignation` varchar(40) NOT NULL,
  `emp_jobNumberOfPosts` int(11) NOT NULL,
  `emp_jobDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave`
--

CREATE TABLE IF NOT EXISTS `employee_leave` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_fullname` varchar(100) NOT NULL,
  `leaveType` varchar(30) NOT NULL,
  `leaveRequestDate` date NOT NULL,
  `leaveStartDate` date NOT NULL,
  `leaveEndDate` date NOT NULL,
  `leave_description` varchar(100) NOT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `employee_leave`
--

INSERT INTO `employee_leave` (`leave_id`, `emp_id`, `emp_fullname`, `leaveType`, `leaveRequestDate`, `leaveStartDate`, `leaveEndDate`, `leave_description`) VALUES
(8, 30022, 'Jah Hamizah', 'Maternity/Paternity', '2017-02-18', '2017-02-25', '2017-04-25', ''),
(9, 30017, 'Saiful Amirul', 'Personal Leave', '2017-02-21', '2017-02-22', '2017-02-25', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_medicalinformation`
--

CREATE TABLE IF NOT EXISTS `employee_medicalinformation` (
  `emp_id` int(11) NOT NULL,
  `emp_medic_NameOfDisease` varchar(50) NOT NULL,
  `emp_medicSince` int(11) NOT NULL,
  `emp_medic_TypeOfMedicine` varchar(40) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_notification`
--

CREATE TABLE IF NOT EXISTS `employee_notification` (
  `emp_notiTitle` varchar(50) NOT NULL,
  `emp_notiDate` date NOT NULL,
  `emp_notiTime` time NOT NULL,
  `emp_notiDescription` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_user`
--

CREATE TABLE IF NOT EXISTS `employee_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_role` int(11) NOT NULL,
  PRIMARY KEY (`user_password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_user`
--

INSERT INTO `employee_user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_role`) VALUES
(0, 'farid', '123456', 'farid@nastyjuice.com', 0),
(0, 'admin', 'admin', 'admin@nastyjuice.com', 1),
(0, 'ahmad', 'ahmad', 'ahmad@nastyjuice.com', 0),
(0, 'baru', 'baru', 'baru@nastyjuice.com', 0),
(0, 'hasan', 'hasan', 'hasan@nastyjuice.com', 0),
(0, 'kay', 'kay', 'kay@nastyjuice.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emp_mileage`
--

CREATE TABLE IF NOT EXISTS `emp_mileage` (
  `mlg_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(50) NOT NULL,
  `mlg_date` date NOT NULL,
  `mlg_destination` varchar(100) NOT NULL,
  `mlg_BusinesPurpose` varchar(100) NOT NULL,
  `mlg_km` int(11) NOT NULL,
  `expensesType` char(50) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`mlg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `emp_mileage`
--

INSERT INTO `emp_mileage` (`mlg_id`, `emp_id`, `emp_name`, `mlg_date`, `mlg_destination`, `mlg_BusinesPurpose`, `mlg_km`, `expensesType`, `amount`) VALUES
(9, 0, '', '2017-02-27', 'Melaka', 'cod', 300, 'gas', 200),
(10, 0, '', '2017-02-14', 'Kuala Lumpur', 'penghantaran barang e KLIA', 2001, 'gas', 500),
(11, 0, 'siti', '2017-03-13', 'seremban', 'ade hal', 1200, 'toll', 100),
(12, 0, 'dehy', '2017-03-13', 'pulau sebang', 'ghmv ', 523, 'toll', 1500),
(13, 0, 'dehy', '2017-03-13', 'pulau sebang', 'ghmv ', 5232, 'toll', 1500),
(14, 0, 'gyajfavj', '2017-03-24', 'gfjddjfjf', 'hgfsdjjy', 6523, 'toll', 3366);

-- --------------------------------------------------------

--
-- Table structure for table `emp_payslip`
--

CREATE TABLE IF NOT EXISTS `emp_payslip` (
  `emp_id` int(11) NOT NULL,
  `inc_basicRate` double NOT NULL,
  `inc_allowance` double NOT NULL,
  `inc_overtime` double NOT NULL,
  `inc_allowanceTrip` double NOT NULL,
  `inc_allowanceMarket` int(11) NOT NULL,
  `inc_lastMonth_salary` int(11) NOT NULL,
  `inc_specialAllowance` int(11) NOT NULL,
  `emp_epf` double NOT NULL,
  `emp_zakat` double NOT NULL,
  `emp_advance` double NOT NULL,
  `emp_loan` double NOT NULL,
  `emp_asb` double NOT NULL,
  `emp_unpaidLeave` double NOT NULL,
  `grossPay` double NOT NULL,
  `subTotal` double NOT NULL,
  `netPay` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `expenses_claim`
--

CREATE TABLE IF NOT EXISTS `expenses_claim` (
  `emp_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `expen_no` int(11) NOT NULL,
  `expen_date` date NOT NULL,
  `expen_description` varchar(100) NOT NULL,
  `expen_price` decimal(10,0) NOT NULL,
  `approval_hr` int(11) NOT NULL,
  `approval_finance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `intable`
--

CREATE TABLE IF NOT EXISTS `intable` (
  `in_id` int(11) NOT NULL AUTO_INCREMENT,
  `stf_id` int(11) NOT NULL,
  `time_in` datetime NOT NULL,
  PRIMARY KEY (`in_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `intable`
--

INSERT INTO `intable` (`in_id`, `stf_id`, `time_in`) VALUES
(1, 30053, '2017-02-23 09:00:00'),
(2, 30053, '2017-02-24 09:00:00'),
(3, 30053, '2017-02-25 09:00:00'),
(4, 30053, '2017-02-27 09:00:00'),
(5, 30053, '2017-02-28 09:00:00'),
(6, 30053, '2017-03-01 09:00:00'),
(7, 30053, '2017-03-02 09:00:00'),
(8, 30053, '2017-03-03 09:00:00'),
(9, 30053, '2017-03-04 09:00:00'),
(10, 30053, '2017-03-06 09:00:00'),
(11, 30053, '2017-03-07 09:00:00'),
(12, 30053, '2017-03-08 09:00:00'),
(13, 30053, '2017-03-09 09:00:00'),
(14, 30053, '2017-03-10 09:00:00'),
(15, 30053, '2017-03-11 00:00:00'),
(16, 30053, '2017-03-13 09:00:00'),
(17, 30053, '2017-03-14 09:00:00'),
(18, 30053, '2017-03-15 09:00:00'),
(19, 30053, '2017-03-16 09:00:00'),
(20, 30053, '2017-03-18 09:00:00'),
(21, 30053, '2017-03-20 09:00:00'),
(22, 30053, '2017-03-21 09:00:00'),
(23, 30053, '2017-03-22 09:00:00'),
(28, 30053, '2017-03-23 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `outtable`
--

CREATE TABLE IF NOT EXISTS `outtable` (
  `out_id` int(11) NOT NULL AUTO_INCREMENT,
  `sta_id` int(11) NOT NULL,
  `time_out` datetime NOT NULL,
  PRIMARY KEY (`out_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `outtable`
--

INSERT INTO `outtable` (`out_id`, `sta_id`, `time_out`) VALUES
(1, 30053, '2017-02-23 09:00:00'),
(2, 30053, '2017-02-24 09:00:00'),
(3, 30053, '2017-02-25 09:00:00'),
(4, 30053, '2017-02-27 09:00:00'),
(5, 30053, '2017-02-28 09:00:00'),
(6, 30053, '2017-03-01 09:00:00'),
(7, 30053, '2017-03-02 09:00:00'),
(8, 30053, '2017-03-03 09:00:00'),
(9, 30053, '2017-03-04 09:00:00'),
(10, 30053, '2017-03-06 09:00:00'),
(11, 30053, '2017-03-07 09:00:00'),
(12, 30053, '2017-03-08 09:00:00'),
(13, 30053, '2017-03-09 09:00:00'),
(14, 30053, '2017-03-10 09:00:00'),
(15, 30053, '2017-03-11 00:00:00'),
(16, 30053, '2017-03-13 09:00:00'),
(17, 30053, '2017-03-14 09:00:00'),
(18, 30053, '2017-03-15 09:00:00'),
(19, 30053, '2017-03-16 09:00:00'),
(20, 30053, '2017-03-18 09:00:00'),
(21, 30053, '2017-03-20 09:00:00'),
(22, 30053, '2017-03-21 09:00:00'),
(23, 30053, '2017-03-22 09:00:00'),
(28, 30053, '2017-03-23 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `petty_cash`
--

CREATE TABLE IF NOT EXISTS `petty_cash` (
  `emp_id` int(10) NOT NULL,
  `dept_id` int(2) NOT NULL,
  `petty_id` int(10) NOT NULL AUTO_INCREMENT,
  `petty_date` date NOT NULL,
  `date_request` date NOT NULL,
  `request_amount` decimal(10,0) NOT NULL,
  `bal_date` date NOT NULL,
  `bal_amount` decimal(10,0) NOT NULL,
  `descrip` varchar(200) NOT NULL,
  PRIMARY KEY (`petty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `petty_cash`
--

INSERT INTO `petty_cash` (`emp_id`, `dept_id`, `petty_id`, `petty_date`, `date_request`, `request_amount`, `bal_date`, `bal_amount`, `descrip`) VALUES
(0, 3, 30, '2017-02-17', '0000-00-00', '100', '0000-00-00', '30', '<p>beli gam</p>'),
(0, 5, 31, '2017-02-17', '2017-02-17', '250', '2017-02-17', '50', '<p>beli PC baru</p>');

-- --------------------------------------------------------

--
-- Table structure for table `spm`
--

CREATE TABLE IF NOT EXISTS `spm` (
  `spm_NameOfSchool` varchar(50) NOT NULL,
  `spm_result` decimal(10,0) NOT NULL,
  `spm_major` varchar(40) NOT NULL,
  `spm_yearStart` int(11) NOT NULL,
  `spm_yearEnd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff_id`
--

CREATE TABLE IF NOT EXISTS `staff_id` (
  `sta_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(100) NOT NULL,
  `birthDate` varchar(20) NOT NULL,
  `pass` int(11) NOT NULL,
  PRIMARY KEY (`sta_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_user`
--

CREATE TABLE IF NOT EXISTS `staff_user` (
  `staff_id` int(6) NOT NULL AUTO_INCREMENT,
  `staff_username` varchar(60) NOT NULL,
  `staff_password` varchar(10) NOT NULL,
  `staff_email` varchar(50) NOT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `staff_user`
--

INSERT INTO `staff_user` (`staff_id`, `staff_username`, `staff_password`, `staff_email`) VALUES
(1, 'admin', '123456', 'hr@nastyjuice.com');

-- --------------------------------------------------------

--
-- Table structure for table `to_do_list`
--

CREATE TABLE IF NOT EXISTS `to_do_list` (
  `list_id` int(11) NOT NULL,
  `list` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `to_do_list`
--

INSERT INTO `to_do_list` (`list_id`, `list`) VALUES
(0, 'staff wages');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
