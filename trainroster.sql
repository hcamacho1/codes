-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2013 at 10:05 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `trainroster`
--
CREATE DATABASE IF NOT EXISTS `trainroster` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `trainroster`;

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `Unit` varchar(10) NOT NULL,
  `Notes` varchar(30) NOT NULL,
  `Model` varchar(20) NOT NULL,
  `Serial` varchar(20) NOT NULL,
  `Pictures` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Unit`, `Notes`, `Model`, `Serial`, `Pictures`) VALUES
('UP ', '', 'AC44CW', '1234', '5'),
('UP ', '', 'AC44CW', '53426', '1'),
('UP ', '', 'SD40-2', '768987', '1'),
('UP XXXX', '', 'UNKNOWN', '6587678', '5'),
('UP 1', 'blt 8/58, retired 8/68, to GE ', '8500 GTEL', '33215', '3'),
('UP 1', 'Steam Turbine, returned to GE ', '2-C-C-2', '12136', '6'),
('UP 1', '', 'SD45', '33410', '5'),
('UP 1B', 'blt 8/58, retired 8/68, to GE ', '8500 GTEL', '33210', '2'),
('UP EC-1', '', 'MoW Equipment', '675875', '2'),
('UP 2', 'Steam Turbine built 1938', '2-C-C-2', '12137', '3'),
('UP 2', '', 'SD45', '33411', '1'),
('UP 3', 'blt 9/58, retired 8/69, to GE ', '8500 GTEL', '33209', '1'),
('UP 3', '', 'SD45', '33412', '2'),
('UP DC-3', 'Rail Detector Car, retired 12/', 'Doodlebug', '201', '6'),
('UP EC-3', '', 'MoW Equipment', '876587', '1'),
('UP S3', 'blt 9/57 as UP GP9B 301B', 'Yard Slug', '23707', '1'),
('UP 4', '', 'SD45', '33413', '1'),
('UP DC-4', '', 'MoW Equipment', '786987', '2'),
('UP ec-4', 'UP Track Inspection Vehicle', 'MoW Equipment', '876987', '42'),
('UP S4', 'reblt 8/75 from 316B, retired ', 'Yard Slug', '23722', '4'),
('UP 5', '', 'SD45', '33414', '1'),
('UP 5', 'blt 12/58, retired 1/69, to GE', '8500 GTEL', '33217', '4'),
('UP 5B', '', '8500 GTEL', '33218', '1'),
('UP DC5', '', 'MoW Equipment', '897698', '1'),
('UP EC-5', 'Plasser & Thuerer', 'MoW Equipment', '159', '57'),
('UP S5', 'blt 9/57 as GP9B 314B ret 4/89', 'Yard Slug', '23720', '1'),
('UP 6', '', '8500 GTEL', '33205', '1'),
('UP S6', 'reblt 9/76 from 306B, retired ', 'Yard Slug', '23712', '6'),
('UP 7', 'blt 3/57, ret 2/70, sfs', '8500 GTEL', '33211', '2'),
('UP MW7', '25DM-42A', '25 Tonner', '40694', '1'),
('UP S7', 'reblt from 406B 1/78, retired ', 'Yard Slug', '25394', '2'),
('UP S8', 'reblt 12/78 from 444B, wrecked', 'Yard Slug', '25432', '2'),
('UP 9', 'ex-UP 3609', 'SD45', '33418', '1'),
('UP S9', 'MP 1400,MP 1206 SW7', 'Yard Slug', '8886', '2'),
('UP S10', 'MP 1401', 'Yard Slug', '15833', '1'),
('UP S11', 'ex-T&P 811, 8001, ex-MP 1402', 'Yard Slug', '15831', '2'),
('UP 12', 'Gas Turbine', '8500 GTEL', '33227', '1'),
('UP 12B', 'retired 10/69', '8500 GTEL', '33228', '1'),
('UP S12', 'ex-T&P 818, 8007, ex-MP 1403', 'Yard Slug', '15837', '18'),
('UP S13', 'ex-T&P 813, 8002, ex-MP 1404', 'Yard Slug', '15832', '1'),
('UP 14', 'blt 3/60, retired 2/70', '8500 GTEL', '33231', '4'),
('UP S14', 'ex-MP 6102/1214/1405', 'Yard Slug', '11558', '1'),
('UP S15', 'MP 1406', 'Yard Slug', '15830', '1'),
('UP 16', '', '8500 GTEL', '34065', '1'),
('UP 18', '', '8500 GTEL', '34069', '120'),
('UP 18B', '', '8500 GTEL', '34070', '19'),
('UP S18', 'ex-T&P 815, 8004, ex-MP 1409', 'Yard Slug', '15834', '1'),
('UP 19', 'ret 3/18/85, cab reused to fix', 'SD45', '33428', '2'),
('UP 20', 'Republic RD20 leased by UP in ', 'RD20', '492 J300', '2'),
('UP S20', '', 'Yard Slug', '11554', '1'),
('UP 21', 'ret 7/85, sfs', 'SD45', '33430', '2'),
('UP S21', 'Ex-T&P 1026, MP 1221, MP Slug', 'Yard Slug', '14024', '1'),
('UP 22', 'blt 4/68, ret 8/84, sfs 12/85', 'SD45', '33431', '2'),
('UP 23', 'blt 12/60, retired 2/70, trade', '8500 GTEL', '34079', '1'),
('UP M-23', 'McKeen Motor Car', 'Doodlebug', '148', '1'),
('UP S23', '', 'Yard Slug', '15836', '14'),
('UP 24', 'blt 1/61, retired 2/70', '8500 GTEL', '34081', '2'),
('UP S24', 'MP 1204', 'Yard Slug', '11999', '9'),
('UP 25', 'to Up 3625, sfs 8/30/85', 'SD45', '33434', '1'),
('UP S25', '01/1952, 6360-06, xTP 815', 'Yard Slug', '15835', '6'),
('UP 26', 'Also UP X-26', '8500 GTEL', '34085', '39'),
('UP 26B', 'B Unit for UP 26/X26', '8500 GTEL', '34086', '5'),
('UP 27', 'ex-UP 3627', 'SD45', '33436', '1'),
('UP 27', 'GMC bus', 'UNKNOWN', '87687', '1'),
('UP S27', 'ex-MP SW7 1418 to UPY 921', 'Yard Slug', '11556', '1'),
('UP S28', 'MP1219, MP1419, UPY922', 'Yard Slug', '14022', '1'),
('UP 29', 'retired 02/70', '8500 GTEL', '34091', '1'),
('UP S29', 'rblt EMD yd slug xMP1420', 'Yard Slug', '14329', '3'),
('UP 30', 'ex-UP 3630', 'SD45', '33439', '1'),
('UP 31', 'blt as # 3631', 'SD45', '33440', '3'),
('UP 31', 'blt 10/63, retired 1/74', 'U50', '34891', '3'),
('UP S31', 'Ex-T&P 1025, MP 1220; MP Slug', 'Yard Slug', '14023', '3'),
('UP 32', 'retired 11/74', 'U50', '34892', '2'),
('UP 32', 'ex-UP 3632', 'SD45', '33441', '1'),
('UP 33', 'retired 10/73', 'U50', '34893', '2'),
('UP 34', 'retired 02/74', 'U50', '35094', '5'),
('UP 35', 'blt 7/64, retired 09/73, trade', 'U50', '35095', '1'),
('UP 36', 'blt 3/68, retired 7/85, sfs', 'SD45', '33445', '3'),
('UP 37', 'retired 11/74', 'U50', '35097', '1'),
('UP 38', 'blt 7/64, traded to GE 09/25/7', 'U50', '35098', '1'),
('UP 39', 'retired 01/74', 'U50', '35099', '1'),
('UP 39', '', 'SD45', '33448', '1'),
('UP 40', '', 'SD45', '34016', '2'),
('UP 41', 'blt 8/64, retired 01/74', 'U50', '35101', '1'),
('UP 41', '', 'SD45', '34017', '3'),
('UP 43', 'blt 8/64, retired 01/74, trade', 'U50', '35103', '1'),
('UP 44', 'blt 9/64, retired 12/73, trade', 'U50', '35104', '1'),
('UP 46', 'blt 05/65, retired 09/73', 'U50', '35644', '2'),
('UP 48', '', 'SD45', '34024', '1'),
('UP 49', 'blt 07/65, retired 01/74', 'U50', '35647', '1'),
('UP 50', 'blt 07/65, retired 01/74, trad', 'U50', '35648', '1'),
('UP 50', '', 'SD45', '33409', '1'),
('UP 51', 'blt 1/52, retired 4/62', '4500 GTEL', '30760', '1'),
('UP 51', 'retired 04/77, sfs', 'U50', '35649', '2'),
('UP 52', 'Built NEW with experimental Cu', 'U50', '35650', '1'),
('UP 52', 'blt 3/52, retired 4/62', '4500 GTEL', '30761', '1'),
('UP 55', 'blt 6/52, retired 9/62', '4500 GTEL', '30764', '1'),
('UP 58', 'Used in film Union Pacific', '4/4/2000', '765876', '3'),
('UP 60', 'retired 8/63', '4500 GTEL', '30769', '2'),
('UP 60', 'Alco spec DL-855, ret 8/70', 'C855', '84730', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
