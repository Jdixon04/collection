# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.8.3-MariaDB-1:10.8.3+maria~jammy)
# Database: cuttlefish
# Generation Time: 2022-08-01 09:44:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table nba
# ------------------------------------------------------------

DROP TABLE IF EXISTS `nba`;

CREATE TABLE `nba` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL DEFAULT '',
  `points` int(11) NOT NULL,
  `games` int(11) DEFAULT NULL,
  `rings` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

LOCK TABLES `nba` WRITE;
/*!40000 ALTER TABLE `nba` DISABLE KEYS */;

INSERT INTO `nba` (`id`, `name`, `points`, `games`, `rings`)
VALUES
	(1,'Lebron James',37062,1366,4),
	(2,'Steph Curry',20064,826,4),
	(3,'Kevin Durrant',25526,939,2),
	(4,'DeMar DeRozan',19869,957,0),
	(5,'Giannis Antetokounmpo',14321,656,1),
	(6,'Daimian Lillard',17510,711,0),
	(7,'Dwight Howard',19485,1242,1),
	(8,'Derrick Rose',12230,672,0),
	(9,'Klay Thompson ',12647,647,4),
	(10,'Chris Paul',20936,1155,0);

/*!40000 ALTER TABLE `nba` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
