-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.6-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table dbmyapp.tbuser
CREATE TABLE IF NOT EXISTS `tbuser` (
  `cliduser` int(10) NOT NULL AUTO_INCREMENT,
  `clname` varchar(50) NOT NULL DEFAULT '0',
  `clemail` varchar(50) NOT NULL DEFAULT '0',
  `cldate` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cliduser`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table dbmyapp.tbuser: ~3 rows (approximately)
/*!40000 ALTER TABLE `tbuser` DISABLE KEYS */;
INSERT INTO `tbuser` (`cliduser`, `clname`, `clemail`, `cldate`) VALUES
	(1, 'NURIN MOHD NAPI', 'nurin@gmail.com', '09-Mar-2020'),
	(2, 'HALIZA YA\'ACOB', 'haliza2@gmail.com', '10-Mar-2020'),
	(3, 'MUHAMMAD ABDUL GHANI', 'muhammad@gmail.com', '10-Mar-2020'),
	(4, 'HAZIM YAHYA', 'hazim@gmail.com', '02-Mar-2020');
/*!40000 ALTER TABLE `tbuser` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
