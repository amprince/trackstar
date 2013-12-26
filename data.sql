-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for yii
CREATE DATABASE IF NOT EXISTS `yii` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `yii`;


-- Dumping structure for table yii.affiliate
CREATE TABLE IF NOT EXISTS `affiliate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `affiliate_name` varchar(45) NOT NULL,
  `added_on` varchar(45) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_key_affiliate_idx` (`user_id`),
  CONSTRAINT `user_key_affiliate` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table yii.affiliate: ~2 rows (approximately)
DELETE FROM `affiliate`;
/*!40000 ALTER TABLE `affiliate` DISABLE KEYS */;
INSERT INTO `affiliate` (`id`, `affiliate_name`, `added_on`, `user_id`) VALUES
	(4, 'Abc', '2013-12-24 13:04:22', 1),
	(5, 'Pqr', '2013-12-24 13:08:18', 1);
/*!40000 ALTER TABLE `affiliate` ENABLE KEYS */;


-- Dumping structure for table yii.commission
CREATE TABLE IF NOT EXISTS `commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merchant_id` int(11) NOT NULL,
  `affiliate_id` int(11) NOT NULL,
  `date_of_report` date NOT NULL,
  `commission` int(11) NOT NULL,
  `no_of_clicks` int(11) NOT NULL,
  `no_of_sales` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `added_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `merchant_key_commission_idx` (`merchant_id`),
  KEY `affiliate_key_commission_idx` (`affiliate_id`),
  KEY `user_key_commission_idx` (`user_id`),
  CONSTRAINT `affiliate_key_commission` FOREIGN KEY (`affiliate_id`) REFERENCES `affiliate` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `merchant_key_commission` FOREIGN KEY (`merchant_id`) REFERENCES `merchant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `user_key_commission` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table yii.commission: ~1 rows (approximately)
DELETE FROM `commission`;
/*!40000 ALTER TABLE `commission` DISABLE KEYS */;
INSERT INTO `commission` (`id`, `merchant_id`, `affiliate_id`, `date_of_report`, `commission`, `no_of_clicks`, `no_of_sales`, `user_id`, `added_on`) VALUES
	(4, 1, 4, '2013-12-24', 0, 10, 5, 2, '2013-12-24 15:29:35');
/*!40000 ALTER TABLE `commission` ENABLE KEYS */;


-- Dumping structure for table yii.merchant
CREATE TABLE IF NOT EXISTS `merchant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `merchant_name` varchar(45) NOT NULL,
  `added_on` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `user_key_idx` (`user_id`),
  CONSTRAINT `user_key` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table yii.merchant: ~3 rows (approximately)
DELETE FROM `merchant`;
/*!40000 ALTER TABLE `merchant` DISABLE KEYS */;
INSERT INTO `merchant` (`id`, `merchant_name`, `added_on`, `user_id`) VALUES
	(1, 'Flipkart', '2013-12-24 13:06:16', 2),
	(2, 'Jabong', '2013-12-24 13:08:04', 1),
	(3, 'Myntra', '2013-12-24 15:30:39', 2);
/*!40000 ALTER TABLE `merchant` ENABLE KEYS */;


-- Dumping structure for table yii.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `added_on` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`username`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table yii.user: ~2 rows (approximately)
DELETE FROM `user`;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `fname`, `lname`, `username`, `password`, `added_on`) VALUES
	(1, 'Admin', 'Admin', 'admin@admin.com', 'admin', '2013-12-23 19:48:53'),
	(2, 'Abc', 'Abc', 'abc@abc.com', 'abc', '2013-12-23 20:13:33');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
