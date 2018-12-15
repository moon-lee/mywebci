CREATE DATABASE  IF NOT EXISTS `myweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
USE `myweb`;
-- MySQL dump 10.13  Distrib 8.0.13, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: myweb
-- ------------------------------------------------------
-- Server version	8.0.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wpayment`
--

DROP TABLE IF EXISTS `wpayment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wpayment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_date` date NOT NULL,
  `pay_gross` decimal(13,2) NOT NULL DEFAULT '0.00',
  `pay_net` decimal(13,2) NOT NULL DEFAULT '0.00',
  `pay_base` decimal(13,2) DEFAULT '0.00',
  `pay_shift` decimal(13,2) DEFAULT '0.00',
  `pay_overtime_1_5` decimal(13,2) DEFAULT '0.00',
  `pay_overtime_2` decimal(13,2) DEFAULT '0.00',
  `pay_personal_leave` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_pay` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_load` decimal(13,2) DEFAULT '0.00',
  `pay_withholding` decimal(13,2) DEFAULT '0.00',
  `pay_super` decimal(13,2) DEFAULT '0.00',
  `pay_holiday_leave` decimal(13,2) DEFAULT '0.00',
  `pay_status` int(11) DEFAULT '0',
  `pay_user` varchar(50) DEFAULT '',
  `pay_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `pay_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpayment`
--

LOCK TABLES `wpayment` WRITE;
/*!40000 ALTER TABLE `wpayment` DISABLE KEYS */;
INSERT INTO `wpayment` VALUES (1,'2018-07-05',1099.17,882.17,699.20,104.88,89.70,0.00,0.00,174.80,30.59,-217.00,92.99,55.31,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(2,'2018-07-12',1150.12,915.12,524.40,78.66,136.28,0.00,0.00,349.60,61.18,-235.00,90.51,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(3,'2018-07-19',1200.72,948.72,874.00,131.10,195.62,0.00,0.00,0.00,0.00,-252.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(4,'2018-07-26',1249.36,980.36,874.00,131.10,244.26,0.00,0.00,0.00,0.00,-269.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(6,'2018-08-02',1212.10,956.10,874.00,131.10,207.00,0.00,0.00,0.00,0.00,-256.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(7,'2018-08-09',1160.35,922.35,874.00,131.10,155.25,0.00,0.00,0.00,0.00,-238.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(9,'2018-08-16',1143.10,911.10,874.00,131.10,138.00,0.00,0.00,0.00,0.00,-232.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(10,'2018-08-23',1174.84,931.84,874.00,131.10,169.74,0.00,0.00,0.00,0.00,-243.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(21,'2018-08-29',1108.60,888.60,874.00,131.10,103.50,0.00,0.00,0.00,0.00,-220.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(22,'2018-09-06',1074.45,866.45,874.00,104.88,95.57,0.00,0.00,0.00,0.00,-208.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(23,'2018-09-13',1125.85,899.85,874.00,131.10,120.75,0.00,0.00,0.00,0.00,-226.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(24,'2018-09-20',1324.46,1029.46,699.20,104.88,253.58,92.00,174.80,0.00,0.00,-295.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(25,'2018-09-27',1281.10,1001.10,874.00,131.10,276.00,0.00,0.00,0.00,0.00,-280.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(26,'2018-10-04',1163.46,924.46,874.00,104.88,184.58,0.00,0.00,0.00,0.00,-239.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(27,'2018-10-11',1226.59,965.59,874.00,131.10,221.49,0.00,0.00,0.00,0.00,-261.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(28,'2018-10-18',1220.73,961.73,874.00,131.10,215.63,0.00,0.00,0.00,0.00,-259.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(32,'2018-10-25',1212.10,956.10,874.00,131.10,207.00,0.00,0.00,0.00,0.00,-256.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(33,'2018-11-01',1246.60,978.60,874.00,131.10,241.50,0.00,0.00,0.00,0.00,-268.00,95.48,2.92,0,'','2018-11-02 00:32:31','2018-11-03 17:59:51'),(34,'2018-11-08',1163.46,924.46,699.20,104.88,184.58,0.00,174.80,0.00,0.00,-239.00,93.00,2.92,0,'moonkyu lee','2018-11-09 01:49:44','2018-11-09 01:49:44'),(35,'2018-11-15',1281.10,1001.10,874.00,131.10,276.00,0.00,0.00,0.00,0.00,-280.00,95.48,2.92,0,'moonkyu lee','2018-11-16 10:17:20','2018-11-16 10:17:20');
/*!40000 ALTER TABLE `wpayment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wtasks`
--

DROP TABLE IF EXISTS `wtasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wtasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task_item` varchar(80) NOT NULL DEFAULT '',
  `task_priority` int(11) NOT NULL DEFAULT '0',
  `task_due_date` date NOT NULL DEFAULT '0000-00-00',
  `task_status` int(11) NOT NULL DEFAULT '0',
  `task_user` varchar(50) NOT NULL DEFAULT '',
  `task_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `task_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtasks`
--

LOCK TABLES `wtasks` WRITE;
/*!40000 ALTER TABLE `wtasks` DISABLE KEYS */;
INSERT INTO `wtasks` VALUES (1,'[DEV] Payment - prediction total amount of gross',3,'2018-10-31',99,'moonkyu lee','2018-10-27 00:29:35','2018-11-04 15:03:46'),(2,'Apply - Kevin Passport',2,'2018-10-31',1,'moonkyu lee','2018-10-27 00:29:56','2018-11-02 00:30:58'),(3,'[DEV] update task status to done ',1,'2018-10-27',99,'moonkyu lee','2018-10-27 00:30:26','2018-10-31 09:49:16'),(4,'[DEV] task input text limit- 80char',1,'2018-10-26',99,'moonkyu lee','2018-10-27 00:30:50','2018-10-31 09:49:20'),(5,'Add Task testing',4,'2018-11-01',99,'moonkyu lee','2018-10-27 01:02:38','2018-10-27 01:09:34'),(6,'Add Task testing222',3,'2018-12-05',99,'moonkyu lee','2018-10-27 01:02:57','2018-10-27 01:09:57'),(7,'task test 01',2,'2018-12-29',99,'moonkyu lee','2018-10-27 01:03:10','2018-10-27 01:03:48'),(8,'[DEV] handle overdue and how long completed task been shown ',3,'2018-11-03',99,'moonkyu lee','2018-10-27 01:12:38','2018-11-04 14:39:21'),(9,'[DEV] when ajax post file, how to handle error - duplicated data saved',1,'2018-11-30',99,'moonkyu lee','2018-10-27 01:18:20','2018-11-04 12:16:12'),(10,'[DEV]spending - develope expense web page ',3,'2018-11-30',99,'moonkyu lee','2018-10-29 11:58:53','2018-11-16 10:16:02'),(11,'[DEV] delete and update for payment ',2,'2018-11-03',99,'moonkyu lee','2018-10-31 09:49:59','2018-11-04 15:04:06'),(12,'[DEV] Store id with chart dataset',2,'2018-11-04',99,'moonkyu lee','2018-11-03 02:27:34','2018-11-04 15:04:14'),(13,'[DEV] setting page',2,'2018-11-30',99,'moonkyu lee','2018-11-04 15:05:43','2018-11-09 02:16:09'),(14,'[DEV] weight page',3,'2018-11-30',99,'moonkyu lee','2018-11-04 15:06:23','2018-11-09 02:16:13'),(15,'[DEV] Define the category for spending',2,'2018-11-30',0,'moonkyu lee','2018-11-09 02:16:49','2018-11-09 02:16:49'),(16,'[DEV] create table for spending',1,'2018-11-12',99,'moonkyu lee','2018-11-09 02:17:27','2018-11-16 10:16:08');
/*!40000 ALTER TABLE `wtasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wuser`
--

DROP TABLE IF EXISTS `wuser`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wuser` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(11) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wuser`
--

LOCK TABLES `wuser` WRITE;
/*!40000 ALTER TABLE `wuser` DISABLE KEYS */;
INSERT INTO `wuser` VALUES (1,'Moon','lee.moonkyu@gmail.com','123',47,432624230),(2,'Jung','woojs0801@naver.com','123',46,410111821),(3,'Kevin','kevin@gmail.com','123',16,232342343),(4,'Ian','ian@gmail.com','202cb962ac59075b964b07152d234b70',11,324234234),(5,'Hannah','hannah@gmail.com','202cb962ac59075b964b07152d234b70',5,324234234);
/*!40000 ALTER TABLE `wuser` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-19 11:51:14
