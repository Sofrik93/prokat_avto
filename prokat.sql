CREATE DATABASE  IF NOT EXISTS `prokat` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `prokat`;
-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: prokat
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.10.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `procat_info`
--

DROP TABLE IF EXISTS `procat_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procat_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Client_first` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Client_last` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Client_och` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Marka_avto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Model_avto` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Tochka` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Data_go` datetime NOT NULL,
  `Data_finish` datetime NOT NULL,
  `Number_avto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procat_info`
--

LOCK TABLES `procat_info` WRITE;
/*!40000 ALTER TABLE `procat_info` DISABLE KEYS */;
INSERT INTO `procat_info` VALUES (1,'Софронов','Сергей','Владимирович','Audi','A8','Крисанова 12','2019-02-28 12:00:00','2019-03-16 12:00:00','в123ка159'),(4,'Хозяшев','Александр','Владимирович','Suzuki','RX-1','Крисанова 12','2019-02-28 12:00:00','2019-03-17 12:00:00','к456ро159'),(5,'Харитов','Евгений','Сергеевич','Audi','A4','Крисанова 12','2019-03-01 12:00:00','2019-03-08 12:00:00','к234нр'),(6,'Камилов','Владислав','Дмитриевич','Subaro','Emprezent','Крисанова 12','2019-03-05 12:00:00','2019-03-13 12:00:00','к496нр'),(7,'Поршаков','Евгений','Александрович','Ford','Focus 2','Крисанова 12','2019-03-05 12:00:00','2019-03-16 13:00:00','а123еп159'),(8,'Ральникова','Анастасия','Владимировна','Nissan','Almera','Крисанова 12','2019-03-09 14:00:00','2019-03-16 11:00:00','с432нр'),(9,'Имайкина','Елизавета','Марселевна','Mersedes','Z8','Крисанова 12','2019-03-14 00:00:00','2019-03-16 00:00:00','с789то159'),(21,'Зарипов','Евгений','Алексеевич','Shivrolet','A3','Крисанова 12','2019-03-11 00:00:00','2019-03-14 00:00:00','с567тр');
/*!40000 ALTER TABLE `procat_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'prokat'
--

--
-- Dumping routines for database 'prokat'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-03-04  1:13:32
