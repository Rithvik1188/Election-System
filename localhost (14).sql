-- phpMyAdmin SQL Dump
-- version 2.11.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2022 at 06:07 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `db_evoting`
--
CREATE DATABASE `db_evoting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_evoting`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `aid` int(11) NOT NULL auto_increment,
  `admin_username` varchar(30) NOT NULL,
  `admin_password` varchar(30) NOT NULL,
  `date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`aid`, `admin_username`, `admin_password`, `date`) VALUES
(1, 'admin', 'welcome', '2022-10-31 19:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(5) NOT NULL auto_increment,
  `full_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `voter_id` int(10) NOT NULL,
  `loginid` varchar(100) character set latin1 collate latin1_general_cs NOT NULL,
  `password` varchar(100) character set latin1 collate latin1_general_cs NOT NULL,
  `voted_for` varchar(32) NOT NULL,
  `verification` varchar(100) NOT NULL,
  `location` varchar(100) character set latin1 collate latin1_general_cs NOT NULL,
  `aboutcan` varchar(500) character set latin1 collate latin1_general_cs NOT NULL,
  `type` varchar(100) character set latin1 collate latin1_general_cs NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `full_name`, `email`, `voter_id`, `loginid`, `password`, `voted_for`, `verification`, `location`, `aboutcan`, `type`) VALUES
(1, 'candidate1', 'cand1@gmail.com', 45645678, '4745', 'bnvf', '', 'verify', 'wichita', 'Voters also judge candidates by their personal characteristics. Included among the relevant characteristics are such things as the experience, honesty, morality, compassion, competence, and leadership ability of the candidates (Miller and Shanks 1996, 416; Page 1978, 232-265). Apart from how they see the candidates on the issues, voters form images of the personal qualities and abilities of the candidates, and these perceptions are important influences on the vote. One important aspect of person', 'candidate'),
(2, 'candidate2', 'can2@gmail.com', 44554455, '3695', 'mnbg\r\n', '', 'verify', 'wichita', 'The personal characteristics of the candidates received considerable attention in the 2004 presidential election. Republicans attacked Kerry for being inconsistent on the issues (calling him a "flip-flopper"). Democrats claimed that Bush failed to be honest with the American public about Iraq. Both candidates attempted to present themselves as strong and trustworthy leaders. It is not surprising that candidate character received considerable attention in the 2004 presidential election. Many anal', 'candidate'),
(3, 'voter1', 'v1@gmail.com', 444444, '9671', 'egqn', '', 'verify', 'wichita', '', 'voter'),
(4, 'voter2', 'v2@gmail.com', 6666, '7829', 'koni', '1', 'verify', 'wichita', '', 'voter'),
(5, 'voter3', 'v3@gmail.com', 656565, '6150', 'ycmz', '1', 'verify', 'wichita', '', 'voter'),
(6, 'voter4', 'voter3@gmail.com', 222, '8317', 'sfxc', '8', 'verify', 'wichita', '', 'voter'),
(7, 'voter5', 'voter5@gmail.com', 4747, '6524', 'qxoc', '2', 'verify', 'wichita', '', 'voter'),
(8, 'candidate3', 'can@gmail.com', 564785425, '5286', 'ovyf', '', 'verify', 'wichita', 'According to Hogan Assessments â€“ the global leader in personality assessment and leadership consulting â€“ strong leadership is the key to overcoming these challenges. Hoganâ€™s science-based assessments, such as the Hogan Personality Inventory, are backed up by over 30 years of validated research, and Hogan researchers have identified four personality traits that potential voters most prefer in candidates: ambition, interpersonal sensitivity, prudence, and learning approach', 'candidate'),
(9, 'voter7', 'vote7@gamil.com', 5656556, '1502', 'kfns', '', 'verify', 'wichita', '', 'voter');
