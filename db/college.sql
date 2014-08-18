-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2009 at 10:43 AM
-- Server version: 5.0.45
-- PHP Version: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `college_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `assignid` int(11) NOT NULL auto_increment,
  `assigntitle` varchar(50) collate latin1_general_ci NOT NULL,
  `assigndate` text collate latin1_general_ci NOT NULL,
  `assigntext` varchar(100) collate latin1_general_ci NOT NULL,
  `staffloginid` varchar(20) collate latin1_general_ci NOT NULL,
  `studsemester` varchar(10) collate latin1_general_ci NOT NULL,
  UNIQUE KEY `assignid` (`assignid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `assignment`
--


-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blogid` int(11) NOT NULL auto_increment,
  `blogtext` varchar(100) collate latin1_general_ci NOT NULL,
  `loginid` varchar(20) collate latin1_general_ci NOT NULL,
  `blogvisit` int(20) NOT NULL,
  `blogdate` varchar(10) collate latin1_general_ci NOT NULL,
  `blogsubject` varchar(50) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`blogid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `blog`
--


-- --------------------------------------------------------

--
-- Table structure for table `blogreply`
--

CREATE TABLE `blogreply` (
  `blogid` int(11) NOT NULL,
  `blogreplier` varchar(20) collate latin1_general_ci NOT NULL,
  `blogreplytxt` varchar(100) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `blogreply`
--


-- --------------------------------------------------------

--
-- Table structure for table `examresult`
--

CREATE TABLE `examresult` (
  `examid` int(11) NOT NULL auto_increment,
  `studid` varchar(20) collate latin1_general_ci NOT NULL,
  `examdate` text collate latin1_general_ci NOT NULL,
  `examtime` text collate latin1_general_ci NOT NULL,
  `examsubject` varchar(20) collate latin1_general_ci NOT NULL,
  `examquetotal` int(11) NOT NULL,
  `examquetrue` int(11) NOT NULL,
  `examquefalse` int(11) NOT NULL,
  PRIMARY KEY  (`examid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `examresult`
--


-- --------------------------------------------------------

--
-- Table structure for table `logtable`
--

CREATE TABLE `logtable` (
  `logid` int(11) NOT NULL auto_increment,
  `loginid` varchar(20) collate latin1_general_ci NOT NULL,
  `logindate` varchar(10) collate latin1_general_ci NOT NULL,
  `logintime` varchar(10) collate latin1_general_ci NOT NULL,
  `logoutdate` varchar(10) collate latin1_general_ci NOT NULL,
  `logouttime` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `logtable`
--

INSERT INTO `logtable` (`logid`, `loginid`, `logindate`, `logintime`, `logoutdate`, `logouttime`) VALUES
(1, 'admin', '21/09/2009', '11:37:35', '21/09/2009', '11:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `queryid` int(11) NOT NULL auto_increment,
  `querysubject` varchar(20) collate latin1_general_ci NOT NULL,
  `querydate` text collate latin1_general_ci NOT NULL,
  `querytext` varchar(100) collate latin1_general_ci NOT NULL,
  `studid` varchar(20) collate latin1_general_ci NOT NULL,
  `staffid` varchar(20) collate latin1_general_ci NOT NULL,
  `querystatus` varchar(10) collate latin1_general_ci NOT NULL,
  `queryreply` varchar(100) collate latin1_general_ci NOT NULL,
  UNIQUE KEY `queryid` (`queryid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `query`
--


-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `queid` int(11) NOT NULL auto_increment,
  `quesubject` varchar(20) collate latin1_general_ci NOT NULL,
  `quetext` varchar(100) collate latin1_general_ci NOT NULL,
  `queans1` varchar(20) collate latin1_general_ci NOT NULL,
  `queans2` varchar(20) collate latin1_general_ci NOT NULL,
  `queans3` varchar(20) collate latin1_general_ci NOT NULL,
  `queans4` varchar(20) collate latin1_general_ci NOT NULL,
  `queansfinal` int(11) NOT NULL,
  PRIMARY KEY  (`queid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

--
-- Dumping data for table `questionbank`
--


-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(11) NOT NULL auto_increment,
  `staffsurname` varchar(20) collate latin1_general_ci NOT NULL,
  `stafffirstname` varchar(20) collate latin1_general_ci NOT NULL,
  `stafflastname` varchar(20) collate latin1_general_ci NOT NULL,
  `staffdesignation` varchar(20) collate latin1_general_ci NOT NULL,
  `staffloginid` varchar(20) collate latin1_general_ci NOT NULL,
  `staffpassword` varchar(20) collate latin1_general_ci NOT NULL,
  `staffrole` varchar(20) collate latin1_general_ci NOT NULL,
  `staffimg` varchar(50) collate latin1_general_ci NOT NULL,
  `staffqualification` varchar(50) collate latin1_general_ci NOT NULL,
  `staffcertification` varchar(50) collate latin1_general_ci NOT NULL,
  `staffexperience` varchar(50) collate latin1_general_ci NOT NULL,
  `staffemail` varchar(20) collate latin1_general_ci NOT NULL,
  `staffhobby` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`staffloginid`),
  UNIQUE KEY `staffid` (`staffid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffsurname`, `stafffirstname`, `stafflastname`, `staffdesignation`, `staffloginid`, `staffpassword`, `staffrole`, `staffimg`, `staffqualification`, `staffcertification`, `staffexperience`, `staffemail`, `staffhobby`) VALUES
(3, 'ADMIN', 'ADMIN', 'ADMIN', 'BCA-6', 'admin', 'admin', 'Admin', 'default.gif', 'admin                                 ', 'admin', 'admin', 'admin@yahoo.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studid` int(11) NOT NULL auto_increment,
  `studsurname` varchar(20) collate latin1_general_ci NOT NULL,
  `studfirstname` varchar(20) collate latin1_general_ci NOT NULL,
  `studlastname` varchar(20) collate latin1_general_ci NOT NULL,
  `studsemester` varchar(20) collate latin1_general_ci NOT NULL,
  `studloginid` varchar(20) collate latin1_general_ci NOT NULL,
  `studpassword` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`studloginid`),
  UNIQUE KEY `studid` (`studid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `student`
--

