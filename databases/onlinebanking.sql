-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 02:53 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebanking`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch_data`
--

CREATE TABLE `branch_data` (
  `id` int(11) NOT NULL,
  `branch_uid` varchar(30) NOT NULL,
  `branch_code` varchar(30) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `manager` varchar(100) NOT NULL,
  `assi_manager` varchar(100) NOT NULL,
  `branch_email` varchar(100) NOT NULL,
  `branch_contact` varchar(40) NOT NULL,
  `building_block` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `milestone` varchar(40) NOT NULL,
  `pin_code` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `tehsil` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `fax` varchar(40) NOT NULL,
  `mngr_phone` varchar(40) NOT NULL,
  `mngr_mobile` varchar(40) NOT NULL,
  `mngr_email` varchar(40) NOT NULL,
  `assi_mngr_phone` varchar(40) NOT NULL,
  `assi_mngr_mobile` varchar(40) NOT NULL,
  `assi_mngr_email` varchar(40) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch_data`
--

INSERT INTO `branch_data` (`id`, `branch_uid`, `branch_code`, `branch_name`, `manager`, `assi_manager`, `branch_email`, `branch_contact`, `building_block`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `fax`, `mngr_phone`, `mngr_mobile`, `mngr_email`, `assi_mngr_phone`, `assi_mngr_mobile`, `assi_mngr_email`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(12, 'D3MWWO', '150', 'Mulund East', 'Sagar Vasant Ayare', 'Priyanka J', 'abc@mulundeast.com', '02254789936', '29,Janta darbar', 'navghar', 'L.T.Road', 'Near Highway', '4000081', 'J3TEUH', 'GFRU2G', 'VBDJ0G', 'GT63NJ', '022654789', '96465845', '649964878', 'mngr@gmail.com', '5589652659', '4995659', 'asm@gmail.com', 'Akash Ravindra Vichare', '2019-07-06 04:05:59', '', '0000-00-00 00:00:00', 0),
(13, 'WHUDFV', '151', 'Mulund West', 'priyanka sambhaji jagtap', 'Sagar ayare', 'abc@mulundwest.co', '0224865625', '105,kapeesh mall', 'near police station', 'd.l.road', 'mulund west', '400082', 'J3TEUH', 'GFRU2G', 'VBDJ0G', 'GT63NJ', '485445', '5656665', '65656565', 'mngr@gmail.com', '6565656', '465656', 'amd@gmak.com', 'Akash Ravindra Vichare', '2019-07-06 04:13:34', '', '0000-00-00 00:00:00', 0),
(14, '9LFL4V', '152', 'Bhandup east', 'Suresh Gaikwae', 'Rahul Narale', 'bhandu@gmail.com', '0225455465', '1/Sudarshan Darshan', 'Macchi market', 'Gandhi Road', 'Near shamshan', '400042', 'J3TEUH', 'EORBPM', 'YF5PRW', 'GT63NJ', '024844554', '45454874', '45487878', 'mngr@gmail.com', '5454545', '546565', 'asm@gmail.com', 'Akash Ravindra Vichare', '2019-07-06 04:31:06', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE `city_master` (
  `id` int(11) NOT NULL,
  `city_uid` varchar(30) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_abbr` varchar(5) NOT NULL,
  `tehsil` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city_master`
--

INSERT INTO `city_master` (`id`, `city_uid`, `city_name`, `city_abbr`, `tehsil`, `district`, `state`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(1, 'J3TEUH', 'Mumbai', 'MUM', 'EORBPM', 'YF5PRW', 'GT63NJ', 'superuser', '2019-01-27 18:50:22', '', '0000-00-00 00:00:00', 0),
(2, '6D7VW7', 'Satara', 'STR', 'FLA4C8', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-27 18:51:15', '', '0000-00-00 00:00:00', 0),
(3, 'RCCH4L', 'Thane', 'TNA', 'OTVU8J', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 18:52:35', '', '0000-00-00 00:00:00', 0),
(4, 'CYI7Y6', 'Ratnagiri', 'RNA', '0TBK8J', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-27 18:53:11', '', '0000-00-00 00:00:00', 0),
(5, 'NRBD5T', 'Pune', 'PNA', 'F07V4F', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-27 18:53:59', '', '0000-00-00 00:00:00', 0),
(6, 'J1O7T7', 'Karad', 'KRD', 'D0N7IX', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-27 18:54:36', '', '0000-00-00 00:00:00', 0),
(7, 'TO1C8W', '', '', '', '', '', 'superuser', '2019-01-27 18:55:46', 'Akash Ravindra Vichare', '2019-07-06 03:18:56', 0);

-- --------------------------------------------------------

--
-- Table structure for table `current_account`
--

CREATE TABLE `current_account` (
  `id` int(11) NOT NULL,
  `customer_uid` varchar(30) NOT NULL,
  `acc_no` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sir_name` varchar(30) NOT NULL,
  `sex` int(2) NOT NULL DEFAULT '0',
  `is_married` int(2) NOT NULL DEFAULT '0',
  `adhar` int(15) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `building` varchar(255) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `milestone` varchar(40) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `tehsil` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `mobile_no` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `OTP` varchar(30) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `current_account`
--

INSERT INTO `current_account` (`id`, `customer_uid`, `acc_no`, `first_name`, `middle_name`, `sir_name`, `sex`, `is_married`, `adhar`, `pan`, `birth_date`, `building`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `phone_no`, `mobile_no`, `email`, `qualification`, `branch`, `balance`, `OTP`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(0, 'VHAS1Y', '', 'Veronica', '', '', 0, 0, 0, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2019-07-05 01:51:13', '', '0000-00-00 00:00:00', 0),
(0, '', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00 00:00:00', 'Akash Ravindra Vichare', '2019-07-05 22:40:54', 0),
(0, '', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00 00:00:00', 'Akash Ravindra Vichare', '2019-07-05 22:40:54', 0),
(0, 'BZNSY4', '', 'vishal', '', '', 0, 0, 0, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2019-07-05 02:42:15', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `customer_uid` varchar(30) NOT NULL,
  `acc_no` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sir_name` varchar(30) NOT NULL,
  `sex` int(2) NOT NULL DEFAULT '0',
  `is_married` int(2) NOT NULL DEFAULT '0',
  `adhar` int(15) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `building` varchar(255) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `milestone` varchar(40) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `tehsil` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `mobile_no` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `OTP` varchar(30) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_uid`, `acc_no`, `first_name`, `middle_name`, `sir_name`, `sex`, `is_married`, `adhar`, `pan`, `birth_date`, `building`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `phone_no`, `mobile_no`, `email`, `qualification`, `branch`, `balance`, `OTP`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(11, 'P0ARXP', '1', 'Akash', 'Ravindra', 'Vichare', 0, 0, 0, 'HHH54857', '1994-02-17', 'B/203,Dnyaneshwar Darshan', 'G.V.Scheme', 'G.V.Scheme Road', 'Mulund East', '400081', '', 'GFRU2G', 'YF5PRW', 'GT63NJ', '9987570548', '9987570548', 'vichareakashravindra@gmail.com', 'GXHUJM', '1ZOTP4', 1000, '229885', 'ak', 'ak', 'Akash Ravindra Vichare', '2019-07-06 03:22:43', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `degree_master`
--

CREATE TABLE `degree_master` (
  `id` int(11) NOT NULL,
  `degree_uid` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `degree_code` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(30) NOT NULL,
  `updated_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_master`
--

INSERT INTO `degree_master` (`id`, `degree_uid`, `degree`, `degree_code`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted`) VALUES
(1, 'GXHUJM', 'Bachelor Of Computer Applicati', 'BCA', 'superuser', '2019-01-20 11:37:40', '', '0000-00-00 00:00:00', 0),
(2, 'IPRG2Y', 'Bachelor Of Computer Science', 'BSC.computer', 'superuser', '2019-01-20 11:38:53', '', '0000-00-00 00:00:00', 0),
(3, 'MT6ANM', 'Bachelor Of Science', 'BSC', 'superuser', '2019-01-20 11:39:13', '', '0000-00-00 00:00:00', 0),
(4, 'BQJLYQ', 'Bachelor Of Commerce', 'BCOM', 'superuser', '2019-01-20 11:39:37', '', '0000-00-00 00:00:00', 0),
(5, 'MB077M', 'Bachelor Of Science In Informa', 'BSCIT', 'superuser', '2019-01-20 11:40:30', '', '0000-00-00 00:00:00', 0),
(6, 'JXBVYU', 'Master In Computer Application', 'MCA', 'superuser', '2019-01-20 11:42:58', '', '0000-00-00 00:00:00', 0),
(7, 'TE99FE', 'Master Of Science', 'MSC', 'superuser', '2019-01-20 11:43:34', '', '0000-00-00 00:00:00', 0),
(9, 'H85W1H', 'Master Of Science In Informati', 'MSCIT', 'superuser', '2019-01-20 11:44:55', '', '0000-00-00 00:00:00', 0),
(10, 'NFE0VR', 'Master Of Computer Science', 'MSC.computer', 'superuser', '2019-01-20 11:45:47', '', '0000-00-00 00:00:00', 0),
(11, 'BSEVSI', 'Matriculation', 'SSC', '', '2019-07-04 23:51:56', '', '0000-00-00 00:00:00', 0),
(12, 'AJRUE5', 'Higher Secondary Certificate', 'HSC', '', '2019-07-04 23:53:41', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `id` int(11) NOT NULL,
  `department_uid` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `department_code` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(30) NOT NULL,
  `updated_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`id`, `department_uid`, `department`, `department_code`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted`) VALUES
(1, 'AWFZTP', 'Information Technology', 'IT', 'superuser', '2019-01-20 11:11:26', '', '0000-00-00 00:00:00', 0),
(2, 'IMES3R', 'Loan & Finance', 'LF', 'superuser', '2019-01-20 11:12:19', '', '0000-00-00 00:00:00', 0),
(3, 'C9211J', 'Individual Banking', 'IB', 'superuser', '2019-01-20 11:12:44', '', '0000-00-00 00:00:00', 0),
(4, 'OA7X1A', 'Customer Service', 'CS', '', '2019-04-13 13:42:33', '', '0000-00-00 00:00:00', 0),
(5, '1IB9YW', 'Human Resource', 'HRD', '', '2019-04-13 13:44:27', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `designation_master`
--

CREATE TABLE `designation_master` (
  `id` int(11) NOT NULL,
  `des_uid` varchar(30) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `desi_code` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(30) NOT NULL,
  `updated_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_master`
--

INSERT INTO `designation_master` (`id`, `des_uid`, `designation`, `desi_code`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted`) VALUES
(1, 'ICDEG9', 'Clerk', 'CK', 'superuser', '2019-01-19 13:04:00', '', '0000-00-00 00:00:00', 0),
(2, 'NJXBF3', 'Manager', 'MGR', 'superuser', '2019-01-27 19:02:44', '', '0000-00-00 00:00:00', 0),
(3, '3VCQRC', 'Assignment Manager', 'ASM', 'superuser', '2019-01-27 19:03:02', '', '0000-00-00 00:00:00', 0),
(6, 'N0DQMZ', 'Bank Teller', 'BTR', 'superuser', '2019-01-27 19:03:51', '', '0000-00-00 00:00:00', 0),
(7, 'WLGHKI', 'Loan Officer', 'LO', 'superuser', '2019-01-27 19:04:02', '', '0000-00-00 00:00:00', 0),
(8, 'SYEBOX', 'check', 'ck', '', '2019-04-13 13:49:43', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `district_master`
--

CREATE TABLE `district_master` (
  `id` int(11) NOT NULL,
  `district_uid` varchar(30) NOT NULL,
  `district_name` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(30) NOT NULL,
  `updated_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_master`
--

INSERT INTO `district_master` (`id`, `district_uid`, `district_name`, `state`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted`) VALUES
(1, 'YF5PRW', 'Mumbai', 'GT63NJ', 'superuser', '2019-01-13 20:14:58', '', '0000-00-00 00:00:00', 0),
(2, 'K1A5Q8', 'Ahmednagar', 'GT63NJ', 'superuser', '2019-01-13 20:17:26', '', '0000-00-00 00:00:00', 0),
(3, 'BH89RB', 'Akola', 'GT63NJ', 'superuser', '2019-01-13 20:17:33', '', '0000-00-00 00:00:00', 0),
(4, 'K3Q47U', 'Amravati', 'GT63NJ', 'superuser', '2019-01-13 20:17:40', '', '0000-00-00 00:00:00', 0),
(5, 'X5758L', 'Aurangabad', 'GT63NJ', 'superuser', '2019-01-13 20:17:54', '', '0000-00-00 00:00:00', 0),
(6, 'HUFUPL', 'Beed', 'GT63NJ', 'superuser', '2019-01-13 20:18:09', '', '0000-00-00 00:00:00', 0),
(7, '3JUB8W', 'Bhandara', 'GT63NJ', 'superuser', '2019-01-13 20:18:16', '', '0000-00-00 00:00:00', 0),
(8, '3FN5A6', 'Buldhana', 'GT63NJ', 'superuser', '2019-01-13 20:18:30', '', '0000-00-00 00:00:00', 0),
(9, 'FBIF2M', 'Chandrapur', 'GT63NJ', 'superuser', '2019-01-13 20:18:37', '', '0000-00-00 00:00:00', 0),
(10, 'BXSGGI', 'Dhule', 'GT63NJ', 'superuser', '2019-01-13 20:18:42', '', '0000-00-00 00:00:00', 0),
(11, 'USNWNL', 'Gadchiroli', 'GT63NJ', 'superuser', '2019-01-13 20:18:56', '', '0000-00-00 00:00:00', 0),
(12, 'RSI4GJ', 'Gondia', 'GT63NJ', 'superuser', '2019-01-13 20:19:08', '', '0000-00-00 00:00:00', 0),
(13, 'JCWKO4', 'Hingoli', 'GT63NJ', 'superuser', '2019-01-13 20:19:20', '', '0000-00-00 00:00:00', 0),
(14, 'QSIH31', 'Jalgaon', 'GT63NJ', 'superuser', '2019-01-13 20:20:10', '', '0000-00-00 00:00:00', 0),
(15, 'NB4CU1', 'Jalna', 'GT63NJ', 'superuser', '2019-01-13 20:20:14', '', '0000-00-00 00:00:00', 0),
(16, 'QD8VJU', 'Kolhapur', 'GT63NJ', 'superuser', '2019-01-13 20:20:21', '', '0000-00-00 00:00:00', 0),
(17, 'SQ8SJ2', 'Latur', 'GT63NJ', 'superuser', '2019-01-13 20:20:34', '', '0000-00-00 00:00:00', 0),
(18, 'VBDJ0G', 'Mumbai Suburban', 'GT63NJ', 'superuser', '2019-01-13 20:20:56', '', '0000-00-00 00:00:00', 0),
(19, 'U7EM0K', 'Nagpur', 'GT63NJ', 'superuser', '2019-01-13 20:21:10', '', '0000-00-00 00:00:00', 0),
(20, 'KKR9BB', 'Nanded', 'GT63NJ', 'superuser', '2019-01-13 20:21:15', '', '0000-00-00 00:00:00', 0),
(21, 'HBT5OT', 'Nandurbar', 'GT63NJ', 'superuser', '2019-01-13 20:21:21', '', '0000-00-00 00:00:00', 0),
(22, 'BX4ALI', 'Nashik', 'GT63NJ', 'superuser', '2019-01-13 20:21:36', '', '0000-00-00 00:00:00', 0),
(23, 'J1X95N', 'Osmanabad', 'GT63NJ', 'superuser', '2019-01-13 20:21:42', '', '0000-00-00 00:00:00', 0),
(24, 'KC2HB9', 'Palghar', 'GT63NJ', 'superuser', '2019-01-13 20:21:49', '', '0000-00-00 00:00:00', 0),
(25, '0PWK0G', '', '', 'superuser', '2019-01-13 20:22:01', 'Akash Ravindra Vichare', '2019-07-06 02:49:02', 0),
(26, '3U0TKP', 'Pune', 'GT63NJ', 'superuser', '2019-01-13 20:22:05', '', '0000-00-00 00:00:00', 0),
(27, '8VLMRV', 'Raigad', 'GT63NJ', 'superuser', '2019-01-13 20:22:10', '', '0000-00-00 00:00:00', 0),
(28, 'J32RKS', 'Ratnagiri', 'GT63NJ', 'superuser', '2019-01-13 20:22:22', '', '0000-00-00 00:00:00', 0),
(29, 'C6VULF', 'Sangli', 'GT63NJ', 'superuser', '2019-01-13 20:22:27', '', '0000-00-00 00:00:00', 0),
(30, 'TANAR4', 'Satara', 'GT63NJ', 'superuser', '2019-01-13 20:22:33', '', '0000-00-00 00:00:00', 0),
(31, 'EQ394C', 'Sindhudurg', 'GT63NJ', 'superuser', '2019-01-13 20:22:48', '', '0000-00-00 00:00:00', 0),
(32, '23AY5W', 'Solapur', 'GT63NJ', 'superuser', '2019-01-13 20:22:53', '', '0000-00-00 00:00:00', 0),
(33, '7SRELM', 'Thane', 'GT63NJ', 'superuser', '2019-01-13 20:22:58', '', '0000-00-00 00:00:00', 0),
(34, 'KHA75W', 'Wardha', 'GT63NJ', 'superuser', '2019-01-13 20:23:10', '', '0000-00-00 00:00:00', 0),
(35, '3S9NX4', 'Washim', 'GT63NJ', 'superuser', '2019-01-13 20:23:20', '', '0000-00-00 00:00:00', 0),
(36, 'L95FMU', 'Yavatmal', 'GT63NJ', 'superuser', '2019-01-13 20:23:33', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fd_account`
--

CREATE TABLE `fd_account` (
  `id` int(11) NOT NULL,
  `customer_uid` varchar(30) NOT NULL,
  `acc_no` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sir_name` varchar(30) NOT NULL,
  `sex` int(2) NOT NULL DEFAULT '0',
  `is_married` int(2) NOT NULL DEFAULT '0',
  `adhar` int(15) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `building` varchar(255) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `milestone` varchar(40) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `tehsil` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `mobile_no` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `OTP` varchar(30) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fd_account`
--

INSERT INTO `fd_account` (`id`, `customer_uid`, `acc_no`, `first_name`, `middle_name`, `sir_name`, `sex`, `is_married`, `adhar`, `pan`, `birth_date`, `building`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `phone_no`, `mobile_no`, `email`, `qualification`, `branch`, `balance`, `OTP`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(0, '74GGOM', '', 'vishal', '', '', 0, 0, 0, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2019-07-05 02:42:52', '', '0000-00-00 00:00:00', 0),
(0, '4U6WEQ', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00 00:00:00', 'Akash Ravindra Vichare', '2019-07-05 22:59:02', 0),
(0, '08XK3P', '', '', '', '', 0, 0, 0, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2019-07-05 22:52:51', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL,
  `job_appl_uid` varchar(30) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan_applications`
--

CREATE TABLE `loan_applications` (
  `id` int(11) NOT NULL,
  `loan_appl_uid` varchar(30) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager_master`
--

CREATE TABLE `manager_master` (
  `id` int(11) NOT NULL,
  `mngr_uid` varchar(30) NOT NULL,
  `emp_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin_code` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `birth_date` date NOT NULL,
  `age` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile_no` varchar(40) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `hired_date` date NOT NULL,
  `is_manager` int(2) NOT NULL DEFAULT '0',
  `is_assi_manager` int(2) NOT NULL DEFAULT '0',
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(30) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager_master`
--

INSERT INTO `manager_master` (`id`, `mngr_uid`, `emp_no`, `name`, `branch`, `address`, `pin_code`, `state`, `birth_date`, `age`, `email_id`, `mobile_no`, `phone_no`, `hired_date`, `is_manager`, `is_assi_manager`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(1, '', '1', 'Priyanka Sagar Ayare', '', '', '', '', '0000-00-00', '', '', '', '', '0000-00-00', 0, 0, 'priyanka', '7b035e5e82588d71d53e3d7a48df6e825322c4edeb35619953d2a4f89f5548ba', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rd_account`
--

CREATE TABLE `rd_account` (
  `id` int(11) NOT NULL,
  `customer_uid` varchar(30) NOT NULL,
  `acc_no` varchar(40) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sir_name` varchar(30) NOT NULL,
  `sex` int(2) NOT NULL DEFAULT '0',
  `is_married` int(2) NOT NULL DEFAULT '0',
  `adhar` int(15) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `building` varchar(255) NOT NULL,
  `area` varchar(40) NOT NULL,
  `street` varchar(40) NOT NULL,
  `milestone` varchar(40) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(15) NOT NULL,
  `tehsil` varchar(15) NOT NULL,
  `district` varchar(15) NOT NULL,
  `state` varchar(100) NOT NULL,
  `phone_no` varchar(40) NOT NULL,
  `mobile_no` varchar(40) NOT NULL,
  `email` varchar(255) NOT NULL,
  `qualification` varchar(40) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `balance` float NOT NULL DEFAULT '0',
  `OTP` varchar(30) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rd_account`
--

INSERT INTO `rd_account` (`id`, `customer_uid`, `acc_no`, `first_name`, `middle_name`, `sir_name`, `sex`, `is_married`, `adhar`, `pan`, `birth_date`, `building`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `phone_no`, `mobile_no`, `email`, `qualification`, `branch`, `balance`, `OTP`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(0, 'JYERVQ', '', '', '', '', 0, 0, 0, '', '1970-01-01', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '2019-07-05 03:01:21', '', '0000-00-00 00:00:00', 0),
(0, 'ORCIJN', '', '', '', '', 0, 0, 0, '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00 00:00:00', 'Akash Ravindra Vichare', '2019-07-05 23:13:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `staff_master`
--

CREATE TABLE `staff_master` (
  `id` int(11) NOT NULL,
  `emp_uid` varchar(255) NOT NULL,
  `emp_no` varchar(30) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `sir_name` varchar(30) NOT NULL,
  `sex` int(11) NOT NULL DEFAULT '0',
  `is_married` int(11) NOT NULL DEFAULT '0',
  `adhar_card` varchar(30) NOT NULL,
  `pan_card` varchar(30) NOT NULL,
  `birthdate` date NOT NULL,
  `building_block` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `street` varchar(30) NOT NULL,
  `milestone` varchar(30) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `tehsil` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `department` varchar(100) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `joining_date` date NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_master`
--

INSERT INTO `staff_master` (`id`, `emp_uid`, `emp_no`, `first_name`, `middle_name`, `sir_name`, `sex`, `is_married`, `adhar_card`, `pan_card`, `birthdate`, `building_block`, `area`, `street`, `milestone`, `pin_code`, `city`, `tehsil`, `district`, `state`, `phone_no`, `mobile_no`, `email_id`, `qualification`, `branch`, `department`, `designation`, `joining_date`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(12, 'IM65Q6', '', 'Akash', 'Ravindra', 'Vichare', 0, 0, '15478963554555', 'hh5656', '2019-07-06', 'B/203 Dnyaneshwar', 'g.b.scheme', 'l.t.road', 'near station', '400081', 'J3TEUH', 'EORBPM', 'YF5PRW', 'GT63NJ', '465656', '65656', 'ak@gmail.com', 'GXHUJM', 'D3MWWO', 'AWFZTP', 'N0DQMZ', '2019-07-06', '', '', 'Akash Ravindra Vichare', '2019-07-06 04:16:46', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE `state_master` (
  `id` int(11) NOT NULL,
  `state_uid` varchar(30) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  `state_abbr` varchar(5) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(100) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_master`
--

INSERT INTO `state_master` (`id`, `state_uid`, `state_name`, `state_abbr`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(1, 'RUYTR1', 'Andhra Pradesh', 'AP', 'superuser', '2019-01-13 19:24:41', '', '0000-00-00 00:00:00', 0),
(2, '44U53N', 'Arunachal Pradesh', 'AR', 'superuser', '2019-01-13 19:25:27', '', '0000-00-00 00:00:00', 0),
(3, '6VOAKW', 'Assam', 'AS', 'superuser', '2019-01-13 19:26:06', '', '0000-00-00 00:00:00', 0),
(4, 'JBN3I2', 'Bihar', 'BR', 'superuser', '2019-01-13 19:26:31', '', '0000-00-00 00:00:00', 0),
(5, '4P7O94', 'Chattisgarh', 'CG', 'superuser', '2019-01-13 19:26:57', '', '0000-00-00 00:00:00', 0),
(6, 'TPA7U6', 'Goa', 'GA', 'superuser', '2019-01-13 19:27:24', '', '0000-00-00 00:00:00', 0),
(7, 'K5YG8P', 'Gujrat', 'GJ', 'superuser', '2019-01-13 19:27:51', '', '0000-00-00 00:00:00', 0),
(8, '8JJPTB', 'Haryana', 'HR', 'superuser', '2019-01-13 19:28:15', '', '0000-00-00 00:00:00', 0),
(9, 'LTT6JU', 'Himachal Pradesh', 'HP', 'superuser', '2019-01-13 19:28:34', '', '0000-00-00 00:00:00', 0),
(10, 'HCYDNH', 'Jammu And Kashmir', 'JK', 'superuser', '2019-01-13 19:28:53', '', '0000-00-00 00:00:00', 0),
(11, 'YXZR47', 'Jharkhand', 'JH', 'superuser', '2019-01-13 19:29:12', '', '0000-00-00 00:00:00', 0),
(12, 'D3082J', 'Karnatka', 'KA', 'superuser', '2019-01-13 19:29:29', '', '0000-00-00 00:00:00', 0),
(13, 'TUMLFF', 'Kerla', 'KL', 'superuser', '2019-01-13 19:29:45', '', '0000-00-00 00:00:00', 0),
(14, 'KMFTRE', 'Madhya Pradesh', 'MP', 'superuser', '2019-01-13 19:30:03', '', '0000-00-00 00:00:00', 0),
(15, 'GT63NJ', 'Maharashtra', 'MH', 'superuser', '2019-01-13 19:30:20', '', '0000-00-00 00:00:00', 0),
(16, '2PYY6P', 'Manipur', 'MN', 'superuser', '2019-01-13 19:30:35', '', '0000-00-00 00:00:00', 0),
(17, '8RUJ7I', 'Meghalaya', 'ML', 'superuser', '2019-01-13 19:30:56', '', '0000-00-00 00:00:00', 0),
(18, 'MFRDT0', 'Mizoram', 'MZ', 'superuser', '2019-01-13 19:31:12', '', '0000-00-00 00:00:00', 0),
(19, 'QTG6AP', 'Nagaland', 'NL', 'superuser', '2019-01-13 19:31:28', '', '0000-00-00 00:00:00', 0),
(20, 'BUSMF9', 'Orissa', 'OR', 'superuser', '2019-01-13 19:32:00', '', '0000-00-00 00:00:00', 0),
(21, 'IS91UY', 'Punjab', 'PB', 'superuser', '2019-01-13 19:32:16', '', '0000-00-00 00:00:00', 0),
(22, '322IF6', 'Rajsthan', 'RJ', 'superuser', '2019-01-13 19:32:33', '', '0000-00-00 00:00:00', 0),
(23, 'P1ZQPP', 'Sikkim', 'SK', 'superuser', '2019-01-13 19:32:49', '', '0000-00-00 00:00:00', 0),
(24, 'QRWQ9N', 'Tamil Nadu', 'TN', 'superuser', '2019-01-13 19:35:46', '', '0000-00-00 00:00:00', 0),
(25, '1XD1VV', 'Tripura', 'TR', 'superuser', '2019-01-13 19:36:17', '', '0000-00-00 00:00:00', 0),
(26, 'F2ZBJV', 'Telangana', 'TS', 'superuser', '2019-01-21 09:08:31', '', '0000-00-00 00:00:00', 0),
(27, '23DBT5', 'Andaman & Nicobar Island', 'AN', 'superuser', '2019-01-21 09:10:16', '', '0000-00-00 00:00:00', 0),
(28, 'I2NVSN', 'Chandigarh', 'CH', 'superuser', '2019-01-21 09:11:26', '', '0000-00-00 00:00:00', 0),
(29, 'V7ZIQ2', 'Dadar & Nagar Haveli', 'DH', 'superuser', '2019-01-21 09:11:58', '', '0000-00-00 00:00:00', 0),
(30, 'AXLHTJ', 'Daman & Diu', 'DD', 'superuser', '2019-01-21 09:14:06', '', '0000-00-00 00:00:00', 0),
(31, 'HEZVAG', 'Delhi', 'DL', 'superuser', '2019-01-21 09:14:31', '', '0000-00-00 00:00:00', 0),
(32, '25N5JJ', 'Lakshadweep', 'LD', 'superuser', '2019-01-21 09:15:00', '', '0000-00-00 00:00:00', 0),
(33, 'TQSJM4', 'Pondicherry', 'PY', 'superuser', '2019-01-21 09:15:26', '', '0000-00-00 00:00:00', 0),
(34, 'I6TGRZ', 'Uttar Pradesh', 'UP', 'superuser', '2019-01-21 09:20:59', '', '0000-00-00 00:00:00', 0),
(35, '0705OT', 'utt', '', 'superuser', '2019-01-21 09:22:06', 'Akash Ravindra Vichare', '2019-07-06 02:50:33', 0),
(36, '898KWJ', 'West Bengal', 'WB', 'superuser', '2019-01-21 09:22:56', '', '0000-00-00 00:00:00', 0),
(37, 'BP0GRU', '', '', '', '2019-07-06 02:29:03', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `super_user`
--

CREATE TABLE `super_user` (
  `id` int(11) NOT NULL,
  `super_uid` varchar(30) NOT NULL,
  `emp_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pin_code` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `birth_date` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` int(2) NOT NULL DEFAULT '0',
  `email_id` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_by` varchar(30) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_by` varchar(30) NOT NULL,
  `modified_date` datetime NOT NULL,
  `deleted` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_user`
--

INSERT INTO `super_user` (`id`, `super_uid`, `emp_no`, `name`, `address`, `pin_code`, `city`, `state`, `birth_date`, `age`, `sex`, `email_id`, `mobile_no`, `phone_no`, `user_name`, `password`, `created_by`, `created_date`, `modified_by`, `modified_date`, `deleted`) VALUES
(1, '', '1', 'Akash Ravindra Vichare', '', '', '', '', '0000-00-00', 0, 0, '', '', '', 'akash', '3300241d19f24576d97569a5521fb0a15762f0df27c4a076b1c4de3ba89aa282', '', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tehsil_master`
--

CREATE TABLE `tehsil_master` (
  `id` int(11) NOT NULL,
  `tehsil_uid` varchar(30) NOT NULL,
  `tehsil_name` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` varchar(100) NOT NULL,
  `updated_date` datetime NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tehsil_master`
--

INSERT INTO `tehsil_master` (`id`, `tehsil_uid`, `tehsil_name`, `district`, `state`, `created_by`, `created_date`, `updated_by`, `updated_date`, `deleted`) VALUES
(1, '0JEWR4', 'Akole', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:41:11', '', '0000-00-00 00:00:00', 0),
(2, 'F4QTSP', 'Jamkhed', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:41:37', '', '0000-00-00 00:00:00', 0),
(3, '015896', 'Karjat', '', '', 'superuser', '2019-01-21 09:41:48', 'Akash Ravindra Vichare', '2019-07-06 03:03:15', 0),
(4, '1AXTSG', 'Kopargaon', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:42:58', '', '0000-00-00 00:00:00', 0),
(5, 'HNLUPV', 'Nagar', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:05', '', '0000-00-00 00:00:00', 0),
(6, 'H1729D', 'Nevasa', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:09', '', '0000-00-00 00:00:00', 0),
(7, 'R361SX', 'Parner', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:25', '', '0000-00-00 00:00:00', 0),
(8, 'DJ6ERM', 'Pathrdi', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:30', '', '0000-00-00 00:00:00', 0),
(9, '33BH7E', 'Rahata', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:43', '', '0000-00-00 00:00:00', 0),
(10, 'D5HSH4', 'Rahuri', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:43:48', '', '0000-00-00 00:00:00', 0),
(11, '929CQT', 'Shevgaon', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:44:05', '', '0000-00-00 00:00:00', 0),
(12, 'EBVKHV', 'Shrigonda', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:44:18', '', '0000-00-00 00:00:00', 0),
(13, '2IHTD3', 'Shrirampur', 'K1A5Q8', 'GT63NJ', 'superuser', '2019-01-21 09:44:31', '', '0000-00-00 00:00:00', 0),
(14, 'Z571BG', 'Telhara', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:47:56', '', '0000-00-00 00:00:00', 0),
(15, 'O6TJRU', 'Akot', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:48:01', '', '0000-00-00 00:00:00', 0),
(16, 'IHJGGL', 'Balapur', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:48:07', '', '0000-00-00 00:00:00', 0),
(17, '63PMKO', 'Akola', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:48:22', '', '0000-00-00 00:00:00', 0),
(18, '4M6MU1', 'Murtijapur', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:48:31', '', '0000-00-00 00:00:00', 0),
(19, 'EAVNXK', 'Patur', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:48:45', '', '0000-00-00 00:00:00', 0),
(20, '4DL6U6', 'Barshitakli', 'BH89RB', 'GT63NJ', 'superuser', '2019-01-21 09:49:00', '', '0000-00-00 00:00:00', 0),
(21, 'RABBGL', 'Amravati', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:51:51', '', '0000-00-00 00:00:00', 0),
(22, '717747', 'Achalpur', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:51:57', '', '0000-00-00 00:00:00', 0),
(23, 'QGPBNX', 'Warud', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:52:10', '', '0000-00-00 00:00:00', 0),
(24, 'NPCTBC', 'Chandurbazar', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:52:18', '', '0000-00-00 00:00:00', 0),
(25, 'KKAT72', 'Dharni', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:52:30', '', '0000-00-00 00:00:00', 0),
(26, '4RJ7AM', 'Morshi', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:52:35', '', '0000-00-00 00:00:00', 0),
(27, 'AVY9UF', 'Daryapur', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:53:10', '', '0000-00-00 00:00:00', 0),
(28, 'LUF7B6', 'Ajangaon Surji', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:53:29', '', '0000-00-00 00:00:00', 0),
(29, 'HO9HV4', 'Dhamangaon Railway', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:53:40', '', '0000-00-00 00:00:00', 0),
(30, '6IZQ5G', 'Nandgaon Khandeshwar', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:53:59', '', '0000-00-00 00:00:00', 0),
(31, 'DGEA7M', 'Chikhaldara', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:54:17', '', '0000-00-00 00:00:00', 0),
(32, '8ITU3L', 'Bhatkuli', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:54:24', '', '0000-00-00 00:00:00', 0),
(33, 'O5EJNG', 'Teosa', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:54:35', '', '0000-00-00 00:00:00', 0),
(34, 'QIGWB3', 'Chandur Railway', 'K3Q47U', 'GT63NJ', 'superuser', '2019-01-21 09:54:44', '', '0000-00-00 00:00:00', 0),
(35, 'F2WX39', 'Aurangabad', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:03', '', '0000-00-00 00:00:00', 0),
(36, 'YPENND', 'Silod', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:07', '', '0000-00-00 00:00:00', 0),
(37, 'T6YTIN', 'Gangapur', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:13', '', '0000-00-00 00:00:00', 0),
(38, '53G1UT', 'Paithan', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:30', '', '0000-00-00 00:00:00', 0),
(39, 'A28YWB', 'Kannad', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:35', '', '0000-00-00 00:00:00', 0),
(40, '32TA9W', 'Vaijapur', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:58:48', '', '0000-00-00 00:00:00', 0),
(41, 'YK3RL7', 'Phulambri', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:59:02', '', '0000-00-00 00:00:00', 0),
(42, '1DLPII', 'Khuldabad', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:59:18', '', '0000-00-00 00:00:00', 0),
(43, 'VWKOYI', 'Soegaon', 'X5758L', 'GT63NJ', 'superuser', '2019-01-21 09:59:24', '', '0000-00-00 00:00:00', 0),
(44, 'MBMKZF', 'Beed', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:04:22', '', '0000-00-00 00:00:00', 0),
(45, 'BCFQXL', 'Georai', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:04:28', '', '0000-00-00 00:00:00', 0),
(46, '3NH1LY', 'Parli', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:04:34', '', '0000-00-00 00:00:00', 0),
(47, 'JY325I', 'Ambejogai', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:04:52', '', '0000-00-00 00:00:00', 0),
(48, '829OPO', 'Manjlegaon', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:01', '', '0000-00-00 00:00:00', 0),
(49, 'S6JAYZ', 'Kaij', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:12', '', '0000-00-00 00:00:00', 0),
(50, 'T5SUG8', 'Ashti', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:17', '', '0000-00-00 00:00:00', 0),
(51, '1N9478', 'Shirur', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:34', '', '0000-00-00 00:00:00', 0),
(52, 'QVKMW3', 'Patoda', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:41', '', '0000-00-00 00:00:00', 0),
(53, 'Q0DFE2', 'Dharur', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:05:58', '', '0000-00-00 00:00:00', 0),
(54, 'EDQGL0', 'Wadwani', 'HUFUPL', 'GT63NJ', 'superuser', '2019-01-21 10:06:03', '', '0000-00-00 00:00:00', 0),
(55, '0V173N', 'Bhandara', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:07:52', '', '0000-00-00 00:00:00', 0),
(56, '5M0XK0', 'Tumsar', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:07:57', '', '0000-00-00 00:00:00', 0),
(57, '1CIWVP', 'Pauni', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:08:07', '', '0000-00-00 00:00:00', 0),
(58, 'GAMB4D', 'Mohadi', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:08:12', '', '0000-00-00 00:00:00', 0),
(59, 'QDEDY0', 'Sakoli', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:08:23', '', '0000-00-00 00:00:00', 0),
(60, 'D3A4G0', 'Lakhani', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:08:29', '', '0000-00-00 00:00:00', 0),
(61, 'S9LD62', 'Lakhandur', '3JUB8W', 'GT63NJ', 'superuser', '2019-01-21 10:08:42', '', '0000-00-00 00:00:00', 0),
(62, 'C4N0NA', 'Khamgaon', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:10:11', '', '0000-00-00 00:00:00', 0),
(63, 'GLQ1YV', 'Buldhana', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:10:17', '', '0000-00-00 00:00:00', 0),
(64, 'J2WCU4', 'Chikhli', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:10:37', '', '0000-00-00 00:00:00', 0),
(65, 'JNJL56', 'Mehkar', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:10:46', '', '0000-00-00 00:00:00', 0),
(66, 'COCTFT', 'Malkapur', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:05', '', '0000-00-00 00:00:00', 0),
(67, 'Y8VTG1', 'Sindkhed Raja', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:13', '', '0000-00-00 00:00:00', 0),
(68, '49UE2C', 'Nandura', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:23', '', '0000-00-00 00:00:00', 0),
(69, 'LVBEUR', 'Motala', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:27', '', '0000-00-00 00:00:00', 0),
(70, 'RHQB14', 'QSIH31', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:40', '', '0000-00-00 00:00:00', 0),
(71, '9D58B4', 'Shegaon', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:45', '', '0000-00-00 00:00:00', 0),
(72, 'TSPEBR', 'Lonar', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:11:58', '', '0000-00-00 00:00:00', 0),
(73, 'VIBOJW', 'Sangrampur', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:12:05', '', '0000-00-00 00:00:00', 0),
(74, '5Y6SV6', 'Deolgaon Raja', '3FN5A6', 'GT63NJ', 'superuser', '2019-01-21 10:12:24', '', '0000-00-00 00:00:00', 0),
(75, 'UBF9LD', 'Chandrapur', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:14:41', '', '0000-00-00 00:00:00', 0),
(76, '665Z97', 'Warora', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:14:46', '', '0000-00-00 00:00:00', 0),
(77, 'DJKGA1', 'Chimur', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:14:58', '', '0000-00-00 00:00:00', 0),
(78, 'W7UCDV', 'Brahmapuri', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:15:05', '', '0000-00-00 00:00:00', 0),
(79, 'RK98RE', 'Bhandravati', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:15:22', '', '0000-00-00 00:00:00', 0),
(80, 'E572NI', 'Rajura', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:15:27', '', '0000-00-00 00:00:00', 0),
(81, 'JP7M1D', 'Ballarpur', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:15:44', '', '0000-00-00 00:00:00', 0),
(82, '57P6J4', 'Nagbhir', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:15:58', '', '0000-00-00 00:00:00', 0),
(83, '8EM5FH', 'Korpana', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:16:09', '', '0000-00-00 00:00:00', 0),
(84, 'EZS2MO', 'Mul', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:16:13', '', '0000-00-00 00:00:00', 0),
(85, 'BYMLJ0', 'Sindewahi', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:16:32', '', '0000-00-00 00:00:00', 0),
(86, '4S0N4U', 'Sawali', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:16:37', '', '0000-00-00 00:00:00', 0),
(87, 'YTQXFI', 'Gondpipri', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:16:51', '', '0000-00-00 00:00:00', 0),
(88, 'Z38AHC', 'JIwati', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:17:05', '', '0000-00-00 00:00:00', 0),
(89, 'FYVY50', 'Pombhurna', 'FBIF2M', 'GT63NJ', 'superuser', '2019-01-21 10:17:13', '', '0000-00-00 00:00:00', 0),
(90, 'A7I6Z2', 'Dhule', 'BXSGGI', 'GT63NJ', 'superuser', '2019-01-21 10:20:00', '', '0000-00-00 00:00:00', 0),
(91, '2FX8XC', 'Sakri', 'BXSGGI', 'GT63NJ', 'superuser', '2019-01-21 10:20:09', '', '0000-00-00 00:00:00', 0),
(92, 'QH66B8', 'Shirpur', 'BXSGGI', 'GT63NJ', 'superuser', '2019-01-21 10:20:19', '', '0000-00-00 00:00:00', 0),
(93, '8THRCP', 'Sindkhede', 'BXSGGI', 'GT63NJ', 'superuser', '2019-01-21 10:20:32', '', '0000-00-00 00:00:00', 0),
(94, 'XSFYR0', 'Chamorshi', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:33:46', '', '0000-00-00 00:00:00', 0),
(95, 'UVIFKE', 'Gadchiroli', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:33:54', '', '0000-00-00 00:00:00', 0),
(96, '2CTB5X', 'Aheri', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:07', '', '0000-00-00 00:00:00', 0),
(97, '49XRJ3', 'Armori', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:13', '', '0000-00-00 00:00:00', 0),
(98, 'FWR17H', 'Kurkheda', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:28', '', '0000-00-00 00:00:00', 0),
(99, 'LMDLFI', 'Desaiganj', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:34', '', '0000-00-00 00:00:00', 0),
(100, 'IY87KB', 'Dhanora', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:48', '', '0000-00-00 00:00:00', 0),
(101, 'M4KS4P', 'Etapalli', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:34:59', '', '0000-00-00 00:00:00', 0),
(102, 'TTANST', 'Sironcha', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:35:13', '', '0000-00-00 00:00:00', 0),
(103, 'H8L3D2', 'Mulchera', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:35:24', '', '0000-00-00 00:00:00', 0),
(104, 'V3J5CJ', 'Korchi', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:35:34', '', '0000-00-00 00:00:00', 0),
(105, '0W5AVP', 'Bhamragad', 'USNWNL', 'GT63NJ', 'superuser', '2019-01-21 14:35:53', '', '0000-00-00 00:00:00', 0),
(106, 'CHJ4K4', 'Gondia', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:39:44', '', '0000-00-00 00:00:00', 0),
(107, 'NRMKLB', 'Tirora', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:39:50', '', '0000-00-00 00:00:00', 0),
(108, 'PJJPKH', 'Arjuni Morgaon', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:40:16', '', '0000-00-00 00:00:00', 0),
(109, '24HYVG', 'Amgaon', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:40:22', '', '0000-00-00 00:00:00', 0),
(110, 'VMK4K1', 'Goregaon', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:40:29', '', '0000-00-00 00:00:00', 0),
(111, 'A7I2BD', 'Sadak-Arjuni', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:40:47', '', '0000-00-00 00:00:00', 0),
(112, 'C5LCYZ', 'Deori', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:40:52', '', '0000-00-00 00:00:00', 0),
(113, 'CY28NL', 'Salekasa', 'RSI4GJ', 'GT63NJ', 'superuser', '2019-01-21 14:41:07', '', '0000-00-00 00:00:00', 0),
(114, 'H25KRQ', 'Basmath', 'JCWKO4', 'GT63NJ', 'superuser', '2019-01-21 14:42:59', '', '0000-00-00 00:00:00', 0),
(115, 'PCS2AE', 'Hingoli', 'JCWKO4', 'GT63NJ', 'superuser', '2019-01-21 14:43:04', '', '0000-00-00 00:00:00', 0),
(116, 'INP24V', 'Kalamnuri', 'JCWKO4', 'GT63NJ', 'superuser', '2019-01-21 14:43:18', '', '0000-00-00 00:00:00', 0),
(117, '17V83D', 'Sengaon', 'JCWKO4', 'GT63NJ', 'superuser', '2019-01-21 14:43:41', '', '0000-00-00 00:00:00', 0),
(118, '7SYPU5', 'Aundha', 'JCWKO4', 'GT63NJ', 'superuser', '2019-01-21 14:43:47', '', '0000-00-00 00:00:00', 0),
(119, 'P0NGTP', 'Jalgaon', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:46:27', '', '0000-00-00 00:00:00', 0),
(120, 'KCJM7Z', 'Chalisgaon', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:46:34', '', '0000-00-00 00:00:00', 0),
(121, 'EVOE38', 'Bhusawal', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:46:55', '', '0000-00-00 00:00:00', 0),
(122, 'FS1ORW', 'Jamner', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:47:00', '', '0000-00-00 00:00:00', 0),
(123, 'CGFTR8', 'Chopda', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:49:34', '', '0000-00-00 00:00:00', 0),
(124, 'HW0YGE', 'Raver', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:49:38', '', '0000-00-00 00:00:00', 0),
(125, '0KY0DH', 'Pachora', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:49:50', '', '0000-00-00 00:00:00', 0),
(126, 'H4B0QH', 'Amalner', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:49:58', '', '0000-00-00 00:00:00', 0),
(127, 'TZUQ1R', 'Yawal', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:50:17', '', '0000-00-00 00:00:00', 0),
(128, 'CPU3TT', 'Parola', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:50:22', '', '0000-00-00 00:00:00', 0),
(129, '4PGMT7', 'Dharangaon', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:50:28', '', '0000-00-00 00:00:00', 0),
(130, 'RD3CA8', 'Erandol', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:50:45', '', '0000-00-00 00:00:00', 0),
(131, '4J05WU', 'Muktainagar', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:50:52', '', '0000-00-00 00:00:00', 0),
(132, 'F7C3HC', 'Bhadgaon', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:51:05', '', '0000-00-00 00:00:00', 0),
(133, 'GZGFBM', 'Bodvad', 'QSIH31', 'GT63NJ', 'superuser', '2019-01-21 14:51:15', '', '0000-00-00 00:00:00', 0),
(134, 'Z8WVJN', 'Jalna', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:53:57', '', '0000-00-00 00:00:00', 0),
(135, 'L27F4Q', 'Bhokardan', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:54:08', '', '0000-00-00 00:00:00', 0),
(136, 'YFPK39', 'Ambad', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:54:13', '', '0000-00-00 00:00:00', 0),
(137, 'PV08WG', 'Ghansawangi', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:54:33', '', '0000-00-00 00:00:00', 0),
(138, 'ZWFCYL', 'Partur', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:54:46', '', '0000-00-00 00:00:00', 0),
(139, 'BVXEW4', 'Mantha', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:54:51', '', '0000-00-00 00:00:00', 0),
(140, 'KGP8KD', 'Jafferabad', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:55:14', '', '0000-00-00 00:00:00', 0),
(141, 'ZDC1C2', 'Badnapur', 'NB4CU1', 'GT63NJ', 'superuser', '2019-01-21 14:55:23', '', '0000-00-00 00:00:00', 0),
(142, '27EFJ2', 'Karvir', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:57:16', '', '0000-00-00 00:00:00', 0),
(143, '4RU3V0', 'Hatkanangle', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:57:33', '', '0000-00-00 00:00:00', 0),
(144, 'F9EJX1', 'Shirol', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:57:45', '', '0000-00-00 00:00:00', 0),
(145, 'K5TSL8', 'Kagal', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:57:49', '', '0000-00-00 00:00:00', 0),
(146, '9YDEWX', 'Panhala', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:57:54', '', '0000-00-00 00:00:00', 0),
(147, 'QV4BW1', 'Gadhinglaj', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:58:28', '', '0000-00-00 00:00:00', 0),
(148, '6IDL5Z', 'Radhanagari', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 14:58:34', '', '0000-00-00 00:00:00', 0),
(149, '64KF7X', 'Chandgad', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 15:02:28', '', '0000-00-00 00:00:00', 0),
(150, 'T9H2HY', 'Shahuwadi', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 15:02:35', '', '0000-00-00 00:00:00', 0),
(151, '09A64C', 'Bhudargad', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 15:02:50', '', '0000-00-00 00:00:00', 0),
(152, '15B5KD', 'Ajra', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 15:02:55', '', '0000-00-00 00:00:00', 0),
(153, 'MQY7Y2', 'Bavda', 'QD8VJU', 'GT63NJ', 'superuser', '2019-01-21 15:03:06', '', '0000-00-00 00:00:00', 0),
(154, 'S7HNAQ', 'Latur', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:18', '', '0000-00-00 00:00:00', 0),
(155, '7VB327', 'Nilanga', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:24', '', '0000-00-00 00:00:00', 0),
(156, '8444SQ', 'Udgir', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:32', '', '0000-00-00 00:00:00', 0),
(157, '4O0XWG', 'Ausa', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:36', '', '0000-00-00 00:00:00', 0),
(158, 'BLT867', 'Ahmadpur', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:53', '', '0000-00-00 00:00:00', 0),
(159, 'E0E58D', 'Chakur', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:05:59', '', '0000-00-00 00:00:00', 0),
(160, 'FW8UP1', 'Renapur', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:06:10', '', '0000-00-00 00:00:00', 0),
(161, 'V36TF2', 'Deoni', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:06:15', '', '0000-00-00 00:00:00', 0),
(162, '4SIKV2', 'Jalkot', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:06:27', '', '0000-00-00 00:00:00', 0),
(163, 'F5E6UQ', 'Shirpur-Anantpal', 'SQ8SJ2', 'GT63NJ', 'superuser', '2019-01-21 15:06:43', '', '0000-00-00 00:00:00', 0),
(164, 'EORBPM', 'Mumbai City', 'YF5PRW', 'GT63NJ', 'superuser', '2019-01-21 15:08:55', '', '0000-00-00 00:00:00', 0),
(165, 'GFRU2G', 'Mumbai Suburban', 'VBDJ0G', 'GT63NJ', 'superuser', '2019-01-21 15:10:21', '', '0000-00-00 00:00:00', 0),
(166, 'OS60QG', 'Nagpur Urban', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:12:52', '', '0000-00-00 00:00:00', 0),
(167, 'WQUFHI', 'Nagpur Rural', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:13:01', '', '0000-00-00 00:00:00', 0),
(168, 'Y2GX7J', 'Hingna', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:13:19', '', '0000-00-00 00:00:00', 0),
(169, '6WKT06', 'Kamptee', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:13:38', '', '0000-00-00 00:00:00', 0),
(170, 'M96UYS', 'Savner', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:13:44', '', '0000-00-00 00:00:00', 0),
(171, 'O9HO9J', 'Katol', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:13:54', '', '0000-00-00 00:00:00', 0),
(172, '9RDVR4', 'Ramtek', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:03', '', '0000-00-00 00:00:00', 0),
(173, 'HKJJCB', 'Umred', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:08', '', '0000-00-00 00:00:00', 0),
(174, 'YPEH2I', 'Narkhed', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:21', '', '0000-00-00 00:00:00', 0),
(175, '8QZ3OK', 'Parseoni', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:35', '', '0000-00-00 00:00:00', 0),
(176, '34V4MW', 'Mauda', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:40', '', '0000-00-00 00:00:00', 0),
(177, 'LU9K8Z', 'Kuhi', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:14:45', '', '0000-00-00 00:00:00', 0),
(178, 'WZ3QMB', 'Kamaleshwar', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:15:06', '', '0000-00-00 00:00:00', 0),
(179, '6Q1KBB', 'Bhiwpur', 'U7EM0K', 'GT63NJ', 'superuser', '2019-01-21 15:15:16', '', '0000-00-00 00:00:00', 0),
(180, 'ELQZMX', 'Nanded', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:17:46', '', '0000-00-00 00:00:00', 0),
(181, 'PZINOO', 'Mukhed', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:17:53', '', '0000-00-00 00:00:00', 0),
(182, '9I3S90', 'Hadgaon', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:09', '', '0000-00-00 00:00:00', 0),
(183, 'IDWIFQ', 'Kandhar', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:14', '', '0000-00-00 00:00:00', 0),
(184, 'KFRZC6', 'Kinwat', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:26', '', '0000-00-00 00:00:00', 0),
(185, '0JDGMS', 'Loha', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:30', '', '0000-00-00 00:00:00', 0),
(186, 'SRUWVN', 'Deglur', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:50', '', '0000-00-00 00:00:00', 0),
(187, 'IVJH9M', 'Naigaon', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:18:55', '', '0000-00-00 00:00:00', 0),
(188, 'Q4E1UF', 'Biloli', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:07', '', '0000-00-00 00:00:00', 0),
(189, 'CL1WSI', 'Bhokar', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:12', '', '0000-00-00 00:00:00', 0),
(190, 'H1JG5O', 'Mudkhed', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:27', '', '0000-00-00 00:00:00', 0),
(191, 'WIUM45', 'Himayatnagar', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:33', '', '0000-00-00 00:00:00', 0),
(192, '1S8JPS', 'Ardhapur', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:49', '', '0000-00-00 00:00:00', 0),
(193, 'YWLMYT', 'Mahoor', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:19:53', '', '0000-00-00 00:00:00', 0),
(194, 'D7B2PC', 'Umri', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:20:03', '', '0000-00-00 00:00:00', 0),
(195, '18XJSL', 'Dharmabad', 'KKR9BB', 'GT63NJ', 'superuser', '2019-01-21 15:20:10', '', '0000-00-00 00:00:00', 0),
(196, 'M8TT8S', 'Shahade', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:22:54', '', '0000-00-00 00:00:00', 0),
(197, 'GB7X97', 'Nandurbar', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:23:00', '', '0000-00-00 00:00:00', 0),
(198, 'MX5NIC', 'Nawapur', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:23:14', '', '0000-00-00 00:00:00', 0),
(199, 'JYAKRJ', 'Akkalkuwa', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:23:30', '', '0000-00-00 00:00:00', 0),
(200, 'TXHW50', 'Akrani', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:23:40', '', '0000-00-00 00:00:00', 0),
(201, 'B09361', 'Talode', 'HBT5OT', 'GT63NJ', 'superuser', '2019-01-21 15:23:45', '', '0000-00-00 00:00:00', 0),
(202, 'V37VFW', 'Nashik', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:25:22', '', '0000-00-00 00:00:00', 0),
(203, 'F0A9QA', 'Malegaon', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:25:29', '', '0000-00-00 00:00:00', 0),
(204, 'PJE39E', 'Niphad', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:25:34', '', '0000-00-00 00:00:00', 0),
(205, '923NOH', 'Baglan', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:25:47', '', '0000-00-00 00:00:00', 0),
(206, 'T57JEI', 'Sinnar', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:25:54', '', '0000-00-00 00:00:00', 0),
(207, 'P42YD0', 'Dindori', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:26:11', '', '0000-00-00 00:00:00', 0),
(208, 'TE9383', 'Nandgaon', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:26:16', '', '0000-00-00 00:00:00', 0),
(209, 'LWXP5Z', 'Yevla', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:26:28', '', '0000-00-00 00:00:00', 0),
(210, 'VMKI54', 'Igatpuri', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:26:35', '', '0000-00-00 00:00:00', 0),
(211, 'B2C02K', 'Chandwad', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:26:50', '', '0000-00-00 00:00:00', 0),
(212, 'OYD3XA', 'Kalwan', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:27:02', '', '0000-00-00 00:00:00', 0),
(213, 'DCULL7', 'Surgana', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:27:09', '', '0000-00-00 00:00:00', 0),
(214, 'FNRU7Y', 'Trimbakeshwar', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:27:28', '', '0000-00-00 00:00:00', 0),
(215, '76130I', 'Deola', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:27:33', '', '0000-00-00 00:00:00', 0),
(216, 'G6V9VA', 'Peint', 'BX4ALI', 'GT63NJ', 'superuser', '2019-01-21 15:27:37', '', '0000-00-00 00:00:00', 0),
(217, 'NGYNTI', 'Osmanabad', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:30:52', '', '0000-00-00 00:00:00', 0),
(218, 'Y8A9U1', 'Tuljapur', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:30:58', '', '0000-00-00 00:00:00', 0),
(219, 'M6JR7H', 'Umarga', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:11', '', '0000-00-00 00:00:00', 0),
(220, 'AXUPN3', 'Kalamb', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:15', '', '0000-00-00 00:00:00', 0),
(221, '9G9Q1Q', 'Paranda', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:27', '', '0000-00-00 00:00:00', 0),
(222, '7K2YV1', 'Bhum', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:34', '', '0000-00-00 00:00:00', 0),
(223, 'EQH2XX', 'Lohara', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:45', '', '0000-00-00 00:00:00', 0),
(224, 'RT63M1', 'Washi', 'J1X95N', 'GT63NJ', 'superuser', '2019-01-21 15:31:50', '', '0000-00-00 00:00:00', 0),
(225, 'WI0XQI', 'Dahanu', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:35:27', '', '0000-00-00 00:00:00', 0),
(226, 'YTY48T', 'Jawahar', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:35:32', '', '0000-00-00 00:00:00', 0),
(227, '3W7TLT', 'Mokhada', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:35:44', '', '0000-00-00 00:00:00', 0),
(228, 'WKRRVG', 'Palghar', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:35:52', '', '0000-00-00 00:00:00', 0),
(229, 'JXTZXZ', 'Talasari', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:36:06', '', '0000-00-00 00:00:00', 0),
(230, '5L2RZF', 'Vasai', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:36:11', '', '0000-00-00 00:00:00', 0),
(231, '0UAXI0', 'Vikramgad', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:36:24', '', '0000-00-00 00:00:00', 0),
(232, '15FW5T', 'Wada', 'KC2HB9', 'GT63NJ', 'superuser', '2019-01-21 15:36:32', '', '0000-00-00 00:00:00', 0),
(233, 'A8DFDB', 'Parabhani', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:00', '', '0000-00-00 00:00:00', 0),
(234, 'PELWYR', 'Jintur', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:05', '', '0000-00-00 00:00:00', 0),
(235, 'KEB0K1', 'Gangakhed', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:11', '', '0000-00-00 00:00:00', 0),
(236, 'TQL8HY', 'Purna', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:23', '', '0000-00-00 00:00:00', 0),
(237, '493A7L', 'Sailu', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:28', '', '0000-00-00 00:00:00', 0),
(238, 'T3EWJQ', 'Pathri', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:40', '', '0000-00-00 00:00:00', 0),
(239, 'G4NRBW', 'Manwath', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:53', '', '0000-00-00 00:00:00', 0),
(240, '9VANOR', 'Palam', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:39:58', '', '0000-00-00 00:00:00', 0),
(241, 'ZJOSNO', 'Sonpeth', '0PWK0G', 'GT63NJ', 'superuser', '2019-01-21 15:40:08', '', '0000-00-00 00:00:00', 0),
(242, 'F07V4F', 'Pune City', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:41:57', '', '0000-00-00 00:00:00', 0),
(243, 'OJURPP', 'Haveli', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:09', '', '0000-00-00 00:00:00', 0),
(244, 'DA8GO3', 'Khed', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:14', '', '0000-00-00 00:00:00', 0),
(245, 'M03YSQ', 'Baramati', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:19', '', '0000-00-00 00:00:00', 0),
(246, 'H9GLRE', 'Junnar', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:30', '', '0000-00-00 00:00:00', 0),
(247, 'J7Q2M8', 'Shirur', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:35', '', '0000-00-00 00:00:00', 0),
(248, 'NEH79C', 'Indapur', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:42:54', '', '0000-00-00 00:00:00', 0),
(249, 'NOL296', 'Daund', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:00', '', '0000-00-00 00:00:00', 0),
(250, '71QYJF', 'Mawal', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:16', '', '0000-00-00 00:00:00', 0),
(251, 'J45OK1', 'Ambegaon', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:23', '', '0000-00-00 00:00:00', 0),
(252, 'Q1U69K', 'Purandhar', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:31', '', '0000-00-00 00:00:00', 0),
(253, '6MG6TY', 'Bhor', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:42', '', '0000-00-00 00:00:00', 0),
(254, 'PA3F84', 'Mulshi', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:48', '', '0000-00-00 00:00:00', 0),
(255, '35MSPD', 'Velhe', '3U0TKP', 'GT63NJ', 'superuser', '2019-01-21 15:43:56', '', '0000-00-00 00:00:00', 0),
(256, 'UNB68T', 'Panvel', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:46:39', '', '0000-00-00 00:00:00', 0),
(257, '9212JW', 'Alibag', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:46:45', '', '0000-00-00 00:00:00', 0),
(258, 'P35OL1', 'Karjat', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:46:50', '', '0000-00-00 00:00:00', 0),
(259, 'K1THEV', 'Khalapur', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:03', '', '0000-00-00 00:00:00', 0),
(260, '19MITI', 'Pen', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:07', '', '0000-00-00 00:00:00', 0),
(261, '5CW5IB', 'Mahad', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:12', '', '0000-00-00 00:00:00', 0),
(262, 'L1DBWU', 'Roha', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:25', '', '0000-00-00 00:00:00', 0),
(263, 'IVO923', 'Uran', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:29', '', '0000-00-00 00:00:00', 0),
(264, '55ZK5N', 'Mangaon', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:34', '', '0000-00-00 00:00:00', 0),
(265, 'CUUOQ7', 'Shrivardhan', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:53', '', '0000-00-00 00:00:00', 0),
(266, '26Q4WV', 'Murud', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:47:58', '', '0000-00-00 00:00:00', 0),
(267, '4DZ8H2', 'Sudhagad', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:48:13', '', '0000-00-00 00:00:00', 0),
(268, 'DTT5PK', 'Mhasla', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:48:22', '', '0000-00-00 00:00:00', 0),
(269, 'EA0L4O', 'Poladpur', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:48:35', '', '0000-00-00 00:00:00', 0),
(270, 'ZXC7AC', 'Tala', '8VLMRV', 'GT63NJ', 'superuser', '2019-01-21 15:48:39', '', '0000-00-00 00:00:00', 0),
(271, '0TBK8J', 'Ratnagiri', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:50:58', '', '0000-00-00 00:00:00', 0),
(272, 'LL1WMX', 'Chiplun', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:08', '', '0000-00-00 00:00:00', 0),
(273, 'QXZ6JD', 'Sangmeshwar', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:20', '', '0000-00-00 00:00:00', 0),
(274, 'TYQHVC', 'Khed', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:30', '', '0000-00-00 00:00:00', 0),
(275, 'NB89N5', 'Dapoli', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:35', '', '0000-00-00 00:00:00', 0),
(276, 'W0C04Y', 'Rajapur', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:41', '', '0000-00-00 00:00:00', 0),
(277, 'U7EOPO', 'Guhaghar', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:51:55', '', '0000-00-00 00:00:00', 0),
(278, '6PSEP8', 'Lanja', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:52:02', '', '0000-00-00 00:00:00', 0),
(279, '9VB42S', 'Mandangad', 'J32RKS', 'GT63NJ', 'superuser', '2019-01-21 15:52:34', '', '0000-00-00 00:00:00', 0),
(280, '9NY3V7', 'Miraj', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:54:29', '', '0000-00-00 00:00:00', 0),
(281, '3ZB9RH', 'Walwa', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:54:34', '', '0000-00-00 00:00:00', 0),
(282, 'HLPUCC', 'Jat', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:54:38', '', '0000-00-00 00:00:00', 0),
(283, 'WRHW2J', 'Tasgaon', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:54:53', '', '0000-00-00 00:00:00', 0),
(284, 'BTCE4J', 'Khanapur', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:00', '', '0000-00-00 00:00:00', 0),
(285, 'ZWJXVR', 'Palus', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:06', '', '0000-00-00 00:00:00', 0),
(286, '0FHMZV', 'Shirala', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:24', '', '0000-00-00 00:00:00', 0),
(287, 'OZU1JX', 'Kavathemakal', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:44', '', '0000-00-00 00:00:00', 0),
(288, '99RWJY', 'Kadegaon', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:49', '', '0000-00-00 00:00:00', 0),
(289, 'CJ6CK9', 'Atpadi', 'C6VULF', 'GT63NJ', 'superuser', '2019-01-21 15:55:57', '', '0000-00-00 00:00:00', 0),
(290, 'D0N7IX', 'Karad', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:57:52', '', '0000-00-00 00:00:00', 0),
(291, 'FLA4C8', 'Satara', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:57:57', '', '0000-00-00 00:00:00', 0),
(292, 'SQBSKV', 'Phaltan', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:02', '', '0000-00-00 00:00:00', 0),
(293, 'G5PMPT', 'Patan', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:07', '', '0000-00-00 00:00:00', 0),
(294, 'B7VXOX', 'Khatav', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:18', '', '0000-00-00 00:00:00', 0),
(295, 'EUNSTN', 'Koregaon', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:25', '', '0000-00-00 00:00:00', 0),
(296, '5KI8JC', 'Man', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:29', '', '0000-00-00 00:00:00', 0),
(297, 'L2HS2B', 'Wai', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:36', '', '0000-00-00 00:00:00', 0),
(298, 'NM5P0B', 'Khandala', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:48', '', '0000-00-00 00:00:00', 0),
(299, '9DUX1Y', 'Jawali', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:58:57', '', '0000-00-00 00:00:00', 0),
(300, '6RYXBH', 'Mahabaleshwar', 'TANAR4', 'GT63NJ', 'superuser', '2019-01-21 15:59:05', '', '0000-00-00 00:00:00', 0),
(301, 'O59NN5', 'Kudal', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:35:58', '', '0000-00-00 00:00:00', 0),
(302, 'UGV9XX', 'Sawantwadi', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:36:05', '', '0000-00-00 00:00:00', 0),
(303, 'VOYOSV', 'Kankavli', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:36:22', '', '0000-00-00 00:00:00', 0),
(304, 'ZPS3AH', 'Devgad', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:36:28', '', '0000-00-00 00:00:00', 0),
(305, 'UC6KUH', 'Malwan', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:36:45', '', '0000-00-00 00:00:00', 0),
(306, '27FS61', 'Vengurla', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:37:02', '', '0000-00-00 00:00:00', 0),
(307, '8EV1N9', 'Dodmarg', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:37:10', '', '0000-00-00 00:00:00', 0),
(308, 'N0EWAA', 'Vaibhavvadi', 'EQ394C', 'GT63NJ', 'superuser', '2019-01-27 17:37:29', '', '0000-00-00 00:00:00', 0),
(309, 'UC7ZA0', 'Solapur North', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:39:28', '', '0000-00-00 00:00:00', 0),
(310, 'QF02TD', 'Malshiras', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:39:41', '', '0000-00-00 00:00:00', 0),
(311, 'O1XLW4', 'Pandharpur', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:39:49', '', '0000-00-00 00:00:00', 0),
(312, '0HJNYL', 'Barshi', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:01', '', '0000-00-00 00:00:00', 0),
(313, '28MIZB', 'Madha', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:06', '', '0000-00-00 00:00:00', 0),
(314, '6MBWTQ', 'Sangole', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:20', '', '0000-00-00 00:00:00', 0),
(315, 'H7HA0T', 'Akkalkot', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:27', '', '0000-00-00 00:00:00', 0),
(316, '947280', 'Mohol', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:37', '', '0000-00-00 00:00:00', 0),
(317, '6ZDUX8', 'Solapur South', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:40:47', '', '0000-00-00 00:00:00', 0),
(318, 'G8IAIY', 'Karmala', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:41:01', '', '0000-00-00 00:00:00', 0),
(319, 'G01O1P', 'Mangalvedhe', '23AY5W', 'GT63NJ', 'superuser', '2019-01-27 17:41:16', '', '0000-00-00 00:00:00', 0),
(320, 'OTVU8J', 'Thane', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:43:45', '', '0000-00-00 00:00:00', 0),
(321, '9Z59QX', 'Kalyan', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:43:51', '', '0000-00-00 00:00:00', 0),
(322, 'V0YMR0', 'Bhiwandi', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:05', '', '0000-00-00 00:00:00', 0),
(323, 'D0RFJ4', 'Vasai', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:10', '', '0000-00-00 00:00:00', 0),
(324, 'SIG2F3', 'Ambarnath', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:18', '', '0000-00-00 00:00:00', 0),
(325, 'GR8YQX', 'KC2HB9', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:24', '', '0000-00-00 00:00:00', 0),
(326, 'R2Z76C', 'Ulhasnagar', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:40', '', '0000-00-00 00:00:00', 0),
(327, 'SX3FN4', 'Dahanu', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:45', '', '0000-00-00 00:00:00', 0),
(328, 'WP7BSL', 'Shahapur', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:44:55', '', '0000-00-00 00:00:00', 0),
(329, '169R8G', 'Murbad', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:00', '', '0000-00-00 00:00:00', 0),
(330, 'OEZF2C', 'Vada', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:17', '', '0000-00-00 00:00:00', 0),
(331, 'EP5I2U', 'Talasari', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:25', '', '0000-00-00 00:00:00', 0),
(332, 'RJRL90', 'Jawhar', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:41', '', '0000-00-00 00:00:00', 0),
(333, 'AYCMU5', 'Vikramgad', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:47', '', '0000-00-00 00:00:00', 0),
(334, '75K7G8', 'Mokhada', '7SRELM', 'GT63NJ', 'superuser', '2019-01-27 17:45:58', '', '0000-00-00 00:00:00', 0),
(335, 'D83PC7', 'Wardha', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:48:27', '', '0000-00-00 00:00:00', 0),
(336, 'R3ISWG', 'Hinganghat', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:48:39', '', '0000-00-00 00:00:00', 0),
(337, 'TBOQ2C', 'Deoli', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:48:46', '', '0000-00-00 00:00:00', 0),
(338, 'WLS0DA', 'Arvi', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:48:54', '', '0000-00-00 00:00:00', 0),
(339, 'X9HDK7', 'Seloo', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:49:01', '', '0000-00-00 00:00:00', 0),
(340, '3VMRNV', 'Samudrapur', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:49:16', '', '0000-00-00 00:00:00', 0),
(341, '2N5PMX', 'Karanja', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:49:26', '', '0000-00-00 00:00:00', 0),
(342, '5WCJJS', 'Ashti', 'KHA75W', 'GT63NJ', 'superuser', '2019-01-27 17:49:32', '', '0000-00-00 00:00:00', 0),
(343, 'N7DDKR', 'Washim', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:51:23', '', '0000-00-00 00:00:00', 0),
(344, 'M3OCEL', 'Karanja', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:51:28', '', '0000-00-00 00:00:00', 0),
(345, 'YUNXHI', 'Risod', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:51:40', '', '0000-00-00 00:00:00', 0),
(346, '0UXC7W', 'Malegaon', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:52:02', '', '0000-00-00 00:00:00', 0),
(347, 'U7OQRT', 'Manora', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:52:07', '', '0000-00-00 00:00:00', 0),
(348, 'SCTPJ1', 'Mangrulpir', '3S9NX4', 'GT63NJ', 'superuser', '2019-01-27 17:52:31', '', '0000-00-00 00:00:00', 0),
(349, 'O46J1S', 'Yavatmal', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:10', '', '0000-00-00 00:00:00', 0),
(350, 'P00W7M', 'Pusad', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:15', '', '0000-00-00 00:00:00', 0),
(351, '6RH15I', 'Umarkhed', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:21', '', '0000-00-00 00:00:00', 0),
(352, 'UXO1DO', 'Wani', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:36', '', '0000-00-00 00:00:00', 0),
(353, '16UG5U', 'Darwha', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:41', '', '0000-00-00 00:00:00', 0),
(354, '5JA5IW', 'Mahagaon', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:54:53', '', '0000-00-00 00:00:00', 0),
(355, 'EY0BCI', 'Arni', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:06', '', '0000-00-00 00:00:00', 0),
(356, 'YA6Z9K', 'Kelapur', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:11', '', '0000-00-00 00:00:00', 0),
(357, 'JZ029W', 'Digras', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:18', '', '0000-00-00 00:00:00', 0),
(358, '7AZ8A2', 'Ghatanji', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:34', '', '0000-00-00 00:00:00', 0),
(359, 'GRJXPI', 'Ner', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:38', '', '0000-00-00 00:00:00', 0),
(360, 'T71WR1', 'Ralegaon', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:50', '', '0000-00-00 00:00:00', 0),
(361, 'QSM56F', 'Kalamb', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:55:55', '', '0000-00-00 00:00:00', 0),
(362, 'QB2M3I', 'Babulgaon', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:56:09', '', '0000-00-00 00:00:00', 0),
(363, 'PWV63Z', 'Zari-Jamani', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:56:20', '', '0000-00-00 00:00:00', 0),
(364, '0Z7PTS', 'Maregaon', 'L95FMU', 'GT63NJ', 'superuser', '2019-01-27 17:56:30', '', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_log`
--

CREATE TABLE `transaction_log` (
  `id` int(11) NOT NULL,
  `tran_uid` varchar(30) NOT NULL,
  `trans_time` datetime NOT NULL,
  `from_uid` varchar(30) NOT NULL,
  `to_uid` varchar(30) NOT NULL,
  `amount` float NOT NULL DEFAULT '0',
  `is_credit` int(2) NOT NULL DEFAULT '0',
  `is_debit` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch_data`
--
ALTER TABLE `branch_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_master`
--
ALTER TABLE `city_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `degree_master`
--
ALTER TABLE `degree_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_master`
--
ALTER TABLE `designation_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district_master`
--
ALTER TABLE `district_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager_master`
--
ALTER TABLE `manager_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_master`
--
ALTER TABLE `staff_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state_master`
--
ALTER TABLE `state_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_user`
--
ALTER TABLE `super_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tehsil_master`
--
ALTER TABLE `tehsil_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_log`
--
ALTER TABLE `transaction_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch_data`
--
ALTER TABLE `branch_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `city_master`
--
ALTER TABLE `city_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `degree_master`
--
ALTER TABLE `degree_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `district_master`
--
ALTER TABLE `district_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `manager_master`
--
ALTER TABLE `manager_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff_master`
--
ALTER TABLE `staff_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `state_master`
--
ALTER TABLE `state_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `super_user`
--
ALTER TABLE `super_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tehsil_master`
--
ALTER TABLE `tehsil_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=365;

--
-- AUTO_INCREMENT for table `transaction_log`
--
ALTER TABLE `transaction_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
