-- MySQL dump 10.13  Distrib 8.0.16, for Linux (x86_64)
--
-- Host: localhost    Database: myweb
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `test` (
  `testcol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES ('A00'),('A01'),('A02'),('A03'),('A04'),('A05'),('A06'),('A07'),('A08'),('A99'),('B00'),('B01'),('B02'),('B03'),('B04'),('B05'),('B99');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tmp_spend`
--

DROP TABLE IF EXISTS `tmp_spend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tmp_spend` (
  `spend_date` date DEFAULT NULL,
  `spend_amount` decimal(13,2) DEFAULT NULL,
  `spend_description` varchar(80) DEFAULT NULL,
  `spend_category` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tmp_spend`
--

LOCK TABLES `tmp_spend` WRITE;
/*!40000 ALTER TABLE `tmp_spend` DISABLE KEYS */;
INSERT INTO `tmp_spend` VALUES ('2019-03-29',5.00,'Reversal Of Account Servicing Fee Minimum $2000 In Deposits Received','D09'),('2019-03-29',-5.00,'Account Servicing Fee','D09'),('2019-03-29',-100.00,'Anz M-Banking Funds Tfer Transfer 649272  To  014536587763751','F02'),('2019-03-29',-100.00,'Anz Internet Banking Bpay Commonwealth Cards            {649913}','F02'),('2019-03-29',-100.00,'Payment To Clink Dir Debit  Vdbig088420729143v','F99'),('2019-03-29',-60.00,'Anz M-Banking Funds Tfer Transfer 649535  To 4564627119604502','F01'),('2019-03-29',-34.04,'Payment To Goodlife Helensv A003grfu0ldz','C04'),('2019-03-29',-22.25,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-29',-20.00,'Payment To Clink Dir Debit  Vdbig088420729145k','F99'),('2019-03-28',-32.16,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven','B01'),('2019-03-28',-15.17,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-28',-3.30,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-28',863.65,'Pay/Salary From Dart Laser Emplo Gci Wages','G01'),('2019-03-28',60.00,'Anz M-Banking Funds Tfer Transfer 910351  From       587763751','G02'),('2019-03-27',-57.00,'Visa Debit Purchase Card 7079 Pacific Pines Primary Pacific Pines','D05'),('2019-03-27',-18.00,'Visa Debit Purchase Card 7079 K Town Supermarket Southport','D01'),('2019-03-26',-40.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-26',-10.30,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-26',-20.56,'Visa Debit Purchase Card 7079 Helensvale Dis Fruit Helensvale','D01'),('2019-03-25',-20.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-25',-14.60,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-25',-36.26,'Visa Debit Purchase Card 7079 Woolworths 2713 Helensvale','D01'),('2019-03-25',-20.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-25',-65.70,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-25',-55.05,'Eftpos 7-Eleven 4154            Pacific Pinesql','B01'),('2019-03-25',-36.00,'Visa Debit Purchase Card 7079 Jummps Parkwood Pty Lt Parkwood','E99'),('2019-03-25',-4.00,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-22',-840.00,'Anz M-Banking Payment Transfer 234204 To Dhc  Investment','A02'),('2019-03-22',-200.00,'Anz M-Banking Funds Tfer Transfer 234408  To  014536587763751','F02'),('2019-03-22',-50.00,'Anz M-Banking Funds Tfer Transfer 234567  To 4564627119604502','F01'),('2019-03-22',-27.95,'Eftpos Mcdonalds Pacific Pin Pacific Pinesqldau','D06'),('2019-03-22',-7.98,'Eftpos Aldi Stores - Helensva   Helensvale   Au','D01'),('2019-03-21',-43.63,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-21',-29.65,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-21',-14.85,'Eftpos Aldi Stores - Helensva   Helensvale   Au','D01'),('2019-03-21',863.65,'Pay/Salary From Dart Laser Emplo Gci Wages','G01'),('2019-03-20',-0.01,'Debit Interest Charged','D09'),('2019-03-20',-970.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-20',-34.54,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven','B01'),('2019-03-20',1745.36,'Pay/Salary From Queensland Healt Salary 00342073','G01'),('2019-03-19',-11.10,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-19',50.00,'Anz M-Banking Funds Tfer Transfer 999389  From       587763751','G02'),('2019-03-18',-77.25,'Payment To Medibank Private 006315903905','C01'),('2019-03-18',-16.18,'Payment To Paypal Australia 1005178585986','D99'),('2019-03-18',-74.00,'Visa Debit Purchase Card 7079 Ms Charcoal Pty. Ltd. Runcorn','D06'),('2019-03-18',-40.90,'Eftpos Domino\'s Helensvale      Helensvale   Ql','D01'),('2019-03-18',-37.20,'Eftpos Hanaro Trading     Sunnybank         Au','D01'),('2019-03-18',-33.50,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-18',-32.00,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-15',-100.00,'Payment To Clink Dir Debit  Vdbig074420729143v','F99'),('2019-03-15',-99.00,'Anz Internet Banking Bpay Telstra Corp Ltd              {807202}','A04'),('2019-03-15',-58.00,'Payment To Qnmu Membership  1981097','D10'),('2019-03-15',-55.00,'Anz M-Banking Payment Transfer 806625 To Qahs General Account','D05'),('2019-03-15',-50.00,'Anz M-Banking Funds Tfer Transfer 807412  To  014536587763751','F02'),('2019-03-15',-50.00,'Anz M-Banking Funds Tfer Transfer 807588  To 4564627119604502','F01'),('2019-03-15',-49.75,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven','B01'),('2019-03-15',-34.04,'Payment To Goodlife Helensv A003eykc17xy','C04'),('2019-03-15',-20.00,'Payment To Clink Dir Debit  Vdbig074420729145k','F99'),('2019-03-15',-13.05,'Eftpos Coles 4584               Helensvale   Au','D01'),('2019-03-15',-11.67,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-14',-17.98,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-14',-3.30,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-14',821.10,'Pay/Salary From Dart Laser Emplo Gci Wages','G01'),('2019-03-12',-58.19,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-12',-45.00,'Eftpos 7-Eleven 4154            Pacific Pinesql','B01'),('2019-03-12',-26.05,'Visa Debit Purchase Card 7079 K Town Supermarket Southport','D01'),('2019-03-11',-70.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-11',-24.98,'Eftpos Pacific Pines ChemmPacific Pines     Au','C03'),('2019-03-11',-24.92,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven','B01'),('2019-03-11',-6.60,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-11',-104.95,'Eftpos Woolworths      2713Helensvale Qld   Au','D01'),('2019-03-11',-38.15,'Eftpos Helensvale Dis FruitHelensvale Qld   Au','D01'),('2019-03-11',-2.20,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-11',-69.10,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-11',-54.28,'Eftpos Ww Petrol       2296Robina Qld       Au','B01'),('2019-03-11',-31.00,'Eftpos Chikor Pty Ltd           Southport    Au','D06'),('2019-03-11',-8.51,'Eftpos Aldi Stores - Helensva   Helensvale   Au','D01'),('2019-03-11',-0.80,'Visa Debit Purchase Card 7079 Officeworks 0401 Southport','D07'),('2019-03-11',-16.63,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-08',-840.00,'Anz M-Banking Payment Transfer 327870 To Dhc  Investment','A02'),('2019-03-08',-200.00,'Anz M-Banking Funds Tfer Transfer 328124  To  014536587763751','F02'),('2019-03-08',-60.00,'Anz M-Banking Funds Tfer Transfer 328320  To 5468279041172986','F01'),('2019-03-08',-1.85,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-07',-716.60,'Anz Phone Banking Bpay Tmr Reg Renew 4817            {755996}','B03'),('2019-03-07',-100.63,'Payment To Vodafone         T3 131bcd 19','D12'),('2019-03-07',-60.00,'Anz Phone Banking Bpay Justice Sper                  {756014}','B07'),('2019-03-07',-15.65,'Eftpos We Brew Pty Ltd          Helensvale   Au','D01'),('2019-03-07',821.10,'Pay/Salary From Dart Laser Emplo Gci Wages','G01'),('2019-03-06',-100.00,'Anz M-Banking Funds Tfer Transfer 834577  To  014536587763751','F02'),('2019-03-06',-75.01,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-06',-70.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-06',-34.99,'Eftpos Pline Ph Helensvale   Helensvale   Qldau','D99'),('2019-03-06',-20.00,'Anz Atm Pacific Pine Sc          Gaven        Ql','D13'),('2019-03-06',-14.30,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-06',-4.14,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines','D01'),('2019-03-06',2077.55,'Pay/Salary From Queensland Healt Salary 00342073','G01'),('2019-03-06',-50.00,'Visa Debit Purchase Card 7079 Pacific Pines Primary Pacific Pines','D05'),('2019-03-06',-44.99,'Visa Debit Purchase Card 7079 Betts Brand Direct Biggera Water','D04'),('2019-03-06',-34.59,'Visa Debit Purchase Card 7079 Happy Market Runcorn Runcorn','D01'),('2019-03-05',-60.00,'Visa Debit Purchase Card 7079 Nike Harbourtown Biggera Watrs','D04'),('2019-03-05',-49.00,'Visa Debit Purchase Card 7079 Ms Charcoal Pty. Ltd. Runcorn','D06'),('2019-03-05',-6.19,'Visa Debit Purchase Card 7079 Iga Runcorn Runcorn','D01'),('2019-03-05',-13.82,'Visa Debit Purchase Card 7079 Aldi Stores - Helensva Helensvale','D01'),('2019-03-04',-48.85,'Eftpos Aldi Stores - Helensva   Helensvale   Au','D01'),('2019-03-04',-56.79,'Eftpos Hanaro Trading     Sunnybank         Au','D01'),('2019-03-04',-66.60,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-04',-25.40,'Eftpos Woolworths      2691Pacific Pine Qld Au','D01'),('2019-03-04',-53.00,'Visa Debit Purchase Card 7079 Kmart 1179 Helensvale','D01'),('2019-03-04',-33.20,'Visa Debit Purchase Card 7079 Aldi Stores - Helensva Helensvale','D01'),('2019-03-01',-100.00,'Anz M-Banking Funds Tfer Transfer 815147  To  014536587763751','F02'),('2019-03-01',-100.00,'Payment To Clink Dir Debit  Vdbig060420729143v','F99'),('2019-03-01',-60.00,'Anz M-Banking Funds Tfer Transfer 815333  To 5468279041172986','F01'),('2019-03-01',-34.04,'Payment To Goodlife Helensv A003d3ye1l15','C04'),('2019-03-01',-20.00,'Payment To Clink Dir Debit  Vdbig060420729145k','F99');
/*!40000 ALTER TABLE `tmp_spend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `v_spending`
--

DROP TABLE IF EXISTS `v_spending`;
/*!50001 DROP VIEW IF EXISTS `v_spending`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8mb4;
/*!50001 CREATE VIEW `v_spending` AS SELECT 
 1 AS `DT_RowId`,
 1 AS `spend_date`,
 1 AS `spend_amount`,
 1 AS `spend_account`,
 1 AS `spend_description`,
 1 AS `spend_category`,
 1 AS `category_code`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `wcategory`
--

DROP TABLE IF EXISTS `wcategory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_code` varchar(3) NOT NULL,
  `cat_name` varchar(45) NOT NULL,
  `cat_status` tinyint(4) DEFAULT '1',
  `cat_budget` int(11) DEFAULT '0',
  `cat_user` varchar(45) DEFAULT '',
  `cat_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `cat_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `Index_status` (`cat_status`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wcategory`
--

LOCK TABLES `wcategory` WRITE;
/*!40000 ALTER TABLE `wcategory` DISABLE KEYS */;
INSERT INTO `wcategory` VALUES (1,'A00','Housing Expenses',1,0,'','2019-05-12 14:36:55','2019-05-12 14:36:55'),(2,'A01','Mortgage',1,0,'','2019-05-12 14:36:55','2019-05-12 14:36:55'),(3,'A02','Rent',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(4,'A03','Electricity',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(5,'A04','Internet/Phone',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(6,'A99','Other',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(7,'B00','Transportation',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(8,'B01','Fuel',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(9,'B02','Insurance',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(10,'B03','Registration',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(11,'B04','Car Service',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(12,'B05','Fare',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(13,'B06','Parking Fee',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(14,'B07','Fines',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(15,'B99','Other',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(16,'C00','Medical/Health',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(17,'C01','Insurance',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(18,'C02','Medical Service',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(19,'C03','Medicine/Drugs',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(20,'C04','Health Club',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(21,'C99','Other',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(22,'D00','Daily Living',1,0,'','2019-05-12 14:36:56','2019-05-12 14:36:56'),(23,'D01','Groceries',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(24,'D02','Alcohol',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(25,'D03','Clothing',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(26,'D04','shoes',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(27,'D05','Education/Lessons',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(28,'D06','Dining/Eating Out',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(29,'D07','Office Supplies',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(30,'D08','Gifts',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(31,'D09','Bank Fee',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(32,'D10','License Fee',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(33,'D11','Annual Fee',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(34,'D12','Mobile Phone Fee',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(35,'D13','Withdraw Cash',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(36,'D99','Other',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(37,'E00','Entertainment',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(38,'E01','Travel/Vacation',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(39,'E02','Movies',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(40,'E99','Other',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(41,'F00','Payment',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(42,'F01','Credit Card ANZ',1,0,'','2019-05-12 14:36:57','2019-05-12 14:36:57'),(43,'F02','Credit Card CBank',1,0,'','2019-05-12 14:36:57','2019-05-12 23:33:15'),(44,'F03','Fund to ',1,0,'','2019-05-12 14:36:57','2019-05-12 23:30:57'),(45,'F99','Other',1,0,'','2019-05-12 14:36:58','2019-05-12 14:36:58'),(46,'G00','Miscellaneous',0,0,'','2019-05-12 14:36:58','2019-05-12 17:28:34'),(47,'G01','Income',0,0,'','2019-05-12 14:36:58','2019-05-12 17:28:34'),(48,'G02','Fund from ',0,0,'','2019-05-12 14:36:58','2019-05-12 23:30:57'),(49,'G99','Other',0,0,'','2019-05-12 14:36:58','2019-05-12 17:28:34');
/*!40000 ALTER TABLE `wcategory` ENABLE KEYS */;
UNLOCK TABLES;

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
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wpayment`
--

LOCK TABLES `wpayment` WRITE;
/*!40000 ALTER TABLE `wpayment` DISABLE KEYS */;
INSERT INTO `wpayment` VALUES (1,'2018-07-05',1099.17,882.17,699.20,104.88,89.70,0.00,0.00,174.80,30.59,-217.00,92.99,55.31,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(2,'2018-07-12',1150.12,915.12,524.40,78.66,136.28,0.00,0.00,349.60,61.18,-235.00,90.51,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(3,'2018-07-19',1200.72,948.72,874.00,131.10,195.62,0.00,0.00,0.00,0.00,-252.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(4,'2018-07-26',1249.36,980.36,874.00,131.10,244.26,0.00,0.00,0.00,0.00,-269.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(6,'2018-08-02',1212.10,956.10,874.00,131.10,207.00,0.00,0.00,0.00,0.00,-256.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(7,'2018-08-09',1160.35,922.35,874.00,131.10,155.25,0.00,0.00,0.00,0.00,-238.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(9,'2018-08-16',1143.10,911.10,874.00,131.10,138.00,0.00,0.00,0.00,0.00,-232.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(10,'2018-08-23',1174.84,931.84,874.00,131.10,169.74,0.00,0.00,0.00,0.00,-243.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(21,'2018-08-29',1108.60,888.60,874.00,131.10,103.50,0.00,0.00,0.00,0.00,-220.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(22,'2018-09-06',1074.45,866.45,874.00,104.88,95.57,0.00,0.00,0.00,0.00,-208.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(23,'2018-09-13',1125.85,899.85,874.00,131.10,120.75,0.00,0.00,0.00,0.00,-226.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(24,'2018-09-20',1324.46,1029.46,699.20,104.88,253.58,92.00,174.80,0.00,0.00,-295.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(25,'2018-09-27',1281.10,1001.10,874.00,131.10,276.00,0.00,0.00,0.00,0.00,-280.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(26,'2018-10-04',1163.46,924.46,874.00,104.88,184.58,0.00,0.00,0.00,0.00,-239.00,92.99,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(27,'2018-10-11',1226.59,965.59,874.00,131.10,221.49,0.00,0.00,0.00,0.00,-261.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(28,'2018-10-18',1220.73,961.73,874.00,131.10,215.63,0.00,0.00,0.00,0.00,-259.00,95.48,2.92,0,'','2018-10-29 00:09:06','2018-10-29 00:09:06'),(32,'2018-10-25',1212.10,956.10,874.00,131.10,207.00,0.00,0.00,0.00,0.00,-256.00,95.49,2.92,0,'','2018-10-29 00:09:06','2018-11-03 17:59:51'),(33,'2018-11-01',1246.60,978.60,874.00,131.10,241.50,0.00,0.00,0.00,0.00,-268.00,95.48,2.92,0,'','2018-11-02 00:32:31','2018-11-03 17:59:51'),(34,'2018-11-08',1163.46,924.46,699.20,104.88,184.58,0.00,174.80,0.00,0.00,-239.00,93.00,2.92,0,'moonkyu lee','2018-11-09 01:49:44','2018-11-09 01:49:44'),(35,'2018-11-15',1281.10,1001.10,874.00,131.10,276.00,0.00,0.00,0.00,0.00,-280.00,95.48,2.92,0,'moonkyu lee','2018-11-16 10:17:20','2018-11-16 10:17:20'),(36,'2018-11-22',1282.83,1001.83,874.00,131.10,270.83,6.90,0.00,0.00,0.00,-281.00,95.49,2.92,0,'moonkyu lee','2018-11-25 20:13:54','2018-11-25 20:13:54'),(40,'2018-11-29',1202.67,949.67,699.20,104.88,193.20,0.00,0.00,174.80,30.59,-253.00,92.99,-4.68,0,'moonkyu lee','2019-02-22 11:35:39','2019-02-22 11:35:39'),(41,'2018-12-06',1220.73,961.73,874.00,131.10,215.63,0.00,0.00,0.00,0.00,-259.00,95.48,2.92,0,'moonkyu lee','2019-02-24 14:36:02','2019-02-24 14:36:02'),(42,'2018-12-13',1255.23,984.23,874.00,131.10,250.13,0.00,0.00,0.00,0.00,-271.00,95.49,2.92,0,'moonkyu lee','2019-02-24 14:37:06','2019-02-24 14:37:06'),(43,'2018-12-20',1074.10,866.10,874.00,131.10,69.00,0.00,0.00,0.00,0.00,-208.00,95.48,2.92,0,'moonkyu lee','2019-02-24 14:38:56','2019-02-24 14:38:56'),(45,'2018-12-27',904.59,755.59,699.20,0.00,0.00,0.00,0.00,174.80,30.59,-149.00,83.03,-4.68,0,'moonkyu lee','2019-02-24 14:44:08','2019-02-24 14:44:08'),(46,'2019-01-03',996.36,815.36,174.80,0.00,0.00,0.00,0.00,699.20,122.36,-181.00,83.03,-27.48,0,'moonkyu lee','2019-02-24 14:46:25','2019-02-24 14:46:25'),(47,'2019-01-10',1055.24,853.24,524.40,78.66,41.40,0.00,0.00,349.60,61.18,-202.00,90.50,-12.28,0,'moonkyu lee','2019-02-24 14:47:54','2019-02-24 14:47:54'),(48,'2019-01-17',1074.10,866.10,874.00,131.10,69.00,0.00,0.00,0.00,0.00,-208.00,95.49,2.92,0,'moonkyu lee','2019-02-24 14:49:08','2019-02-24 14:49:08'),(49,'2019-01-24',1074.10,866.10,874.00,131.10,69.00,0.00,0.00,0.00,0.00,-208.00,95.48,2.92,0,'moonkyu lee','2019-02-24 14:50:12','2019-02-24 14:50:12'),(50,'2019-01-31',1024.65,833.65,699.20,78.66,41.40,0.00,0.00,174.80,30.59,-191.00,90.50,-4.68,0,'moonkyu lee','2019-02-24 14:51:42','2019-02-24 14:51:42'),(51,'2019-02-07',1074.10,866.10,874.00,131.10,69.00,0.00,0.00,0.00,0.00,-208.00,95.48,2.92,0,'moonkyu lee','2019-02-24 14:52:49','2019-02-24 14:52:49'),(52,'2019-02-14',1125.85,899.85,874.00,131.10,120.75,0.00,0.00,0.00,0.00,-226.00,95.49,2.92,0,'moonkyu lee','2019-02-24 14:54:14','2019-02-24 14:54:14'),(53,'2019-02-21',1117.23,894.23,874.00,131.10,112.13,0.00,0.00,0.00,0.00,-223.00,95.48,2.92,0,'moonkyu lee','2019-02-24 14:55:41','2019-02-24 14:55:41'),(54,'2019-02-28',1082.73,871.73,874.00,131.10,77.63,0.00,0.00,0.00,0.00,-211.00,95.49,2.92,0,'moonkyu lee','2019-03-12 09:41:03','2019-03-12 09:41:03'),(55,'2019-03-07',1005.10,821.10,874.00,131.10,0.00,0.00,0.00,0.00,0.00,-184.00,95.48,2.92,0,'moonkyu lee','2019-03-12 09:42:15','2019-03-12 09:42:15'),(58,'2019-03-14',1005.10,821.10,874.00,131.10,0.00,0.00,0.00,0.00,0.00,-184.00,95.49,2.92,0,'moonkyu lee','2019-03-17 18:31:31','2019-03-17 18:31:31'),(61,'2019-03-21',1070.65,863.65,931.00,139.65,0.00,0.00,0.00,0.00,0.00,-207.00,101.71,2.92,0,'moonkyu lee','2019-04-01 10:06:56','2019-04-01 10:06:56'),(62,'2019-03-28',1070.65,863.65,931.00,139.65,0.00,0.00,0.00,0.00,0.00,-207.00,101.71,2.92,0,'moonkyu lee','2019-04-01 10:27:31','2019-04-01 10:27:31'),(63,'2019-04-04',1144.15,911.15,931.00,139.65,73.50,0.00,0.00,0.00,0.00,-233.00,101.71,2.92,0,'moonkyu lee','2019-04-19 13:33:24','2019-04-19 13:33:24'),(64,'2019-04-11',1236.03,971.03,931.00,139.65,165.38,0.00,0.00,0.00,0.00,-265.00,101.71,2.92,0,'moonkyu lee','2019-04-19 13:35:04','2019-04-19 13:35:04'),(65,'2019-04-17',1226.84,965.84,931.00,139.65,156.19,0.00,0.00,0.00,0.00,-261.00,101.72,2.92,0,'moonkyu lee','2019-04-19 13:37:49','2019-04-19 13:37:49'),(66,'2019-04-24',1058.89,855.89,931.00,83.79,44.10,0.00,0.00,0.00,0.00,-203.00,96.40,2.92,0,'moonkyu lee','2019-05-06 13:31:54','2019-05-06 13:31:54'),(67,'2019-05-01',1190.46,941.46,931.00,111.72,147.74,0.00,0.00,0.00,0.00,-249.00,99.06,2.92,0,'moonkyu lee','2019-05-06 13:33:29','2019-05-06 13:33:29'),(68,'2019-05-09',1193.40,943.40,931.00,111.72,150.68,0.00,0.00,0.00,0.00,-250.00,99.06,2.92,0,'moonkyu lee','2019-05-19 14:38:31','2019-05-19 14:38:31'),(69,'2019-05-16',1309.53,1019.53,931.00,139.65,238.88,0.00,0.00,0.00,0.00,-290.00,101.71,2.92,0,'moonkyu lee','2019-05-19 14:39:54','2019-05-19 14:39:54');
/*!40000 ALTER TABLE `wpayment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wspending`
--

DROP TABLE IF EXISTS `wspending`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wspending` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `spend_date` date NOT NULL,
  `spend_amount` decimal(13,2) NOT NULL DEFAULT '0.00',
  `spend_account` varchar(3) NOT NULL DEFAULT '',
  `spend_category` varchar(3) NOT NULL DEFAULT '',
  `spend_tax_refund` tinyint(4) NOT NULL DEFAULT '0',
  `spend_description` varchar(80) NOT NULL DEFAULT '',
  `spend_status` int(11) NOT NULL DEFAULT '0',
  `spend_user` varchar(50) NOT NULL DEFAULT '',
  `spend_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `spend_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=217 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wspending`
--

LOCK TABLES `wspending` WRITE;
/*!40000 ALTER TABLE `wspending` DISABLE KEYS */;
INSERT INTO `wspending` VALUES (1,'2019-02-28',5.00,'1','D09',0,'Reversal Of Account Servicing Fee Minimum $2000 In Deposits Received',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(2,'2019-02-28',-5.00,'1','D09',0,'Account Servicing Fee',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(3,'2019-02-28',871.73,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(4,'2019-02-27',-9.50,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(5,'2019-02-26',-34.96,'1','D01',0,'Eftpos Coles 4584               Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(6,'2019-02-26',-10.00,'1','D01',0,'Eftpos Brumbys Pacific PinPacific Pines     Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(7,'2019-02-25',-56.42,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(8,'2019-02-25',-31.10,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(9,'2019-02-25',-8.99,'1','D99',0,'Payment To Paypal Australia 1005024281115',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(10,'2019-02-25',-103.05,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(11,'2019-02-25',-90.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(12,'2019-02-25',-80.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(13,'2019-02-25',-24.20,'1','D01',0,'Eftpos Jhy Pty Ltd              Southport    Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(14,'2019-02-25',-21.30,'1','D01',0,'Eftpos Breadtop Australia F     Southport    Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(15,'2019-02-25',-19.80,'1','D01',0,'Eftpos Green Valley ButcheSouthport         Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(16,'2019-02-25',-16.80,'1','D01',0,'Eftpos Tachibana Pty Ltd        Southport    Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(17,'2019-02-25',-16.60,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(18,'2019-02-25',-10.50,'1','D07',0,'Eftpos Officeworks 0401         Southport    Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(19,'2019-02-25',-6.55,'1','D01',0,'Eftpos Woolworths      2577Australia Fr Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(20,'2019-02-22',-840.00,'1','A02',0,'Anz M-Banking Payment Transfer 400710 To Dhc  Investment',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(21,'2019-02-22',-200.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 399972  To  014536587763751',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(22,'2019-02-22',-50.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 400163  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(23,'2019-02-22',-16.60,'1','D06',0,'Eftpos Mcdonalds Pacific Pin Pacific Pinesqldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(24,'2019-02-22',-9.60,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(25,'2019-02-21',-450.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(26,'2019-02-21',-89.16,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(27,'2019-02-21',894.23,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(28,'2019-02-20',-0.01,'1','D09',0,'Debit Interest Charged',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(29,'2019-02-20',-554.86,'1','A03',0,'Anz Phone Banking Bpay Origin Energy                 {658417}',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(30,'2019-02-20',-15.98,'1','D99',0,'Eftpos Pline Ph Helensvale   Helensvale   Qldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(31,'2019-02-20',1885.67,'1','G01',0,'Pay/Salary From Queensland Healt Salary 00342073',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(32,'2019-02-19',-70.76,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(33,'2019-02-19',-19.99,'1','C03',0,'Visa Debit Purchase Card 7079 Pacific Pines Chemma Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(34,'2019-02-18',-77.25,'1','C01',0,'Payment To Medibank Private 006513980549',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(35,'2019-02-18',-15.99,'1','D05',0,'Eftpos Love That BookHelensvale Qld         Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(36,'2019-02-18',-7.00,'1','D01',0,'Eftpos Kmart 1179               Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(37,'2019-02-18',-89.02,'1','D01',0,'Eftpos Woolworths      2713Helensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(38,'2019-02-18',-13.16,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(39,'2019-02-18',-60.49,'1','D01',0,'Eftpos Helensvale Dis FruitHelensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(40,'2019-02-18',-33.30,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(41,'2019-02-15',-100.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 131523  To  014536587763751',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(42,'2019-02-15',-100.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig046420729143v',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(43,'2019-02-15',-99.00,'1','A04',0,'Anz Internet Banking Bpay Telstra Corp Ltd              {131168}',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(44,'2019-02-15',-58.00,'1','D10',0,'Payment To Qnmu Membership  1981097',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(45,'2019-02-15',-50.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 131825  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(46,'2019-02-15',-34.04,'1','C04',0,'Payment To Goodlife Helensv A003axft0lnh',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(47,'2019-02-15',-32.19,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(48,'2019-02-15',-20.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig046420729145k',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(49,'2019-02-15',-19.91,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(50,'2019-02-15',-17.55,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(51,'2019-02-14',899.85,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(52,'2019-02-14',-14.94,'1','C03',0,'Visa Debit Purchase Card 7079 Pacific Pines Chemma Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(53,'2019-02-13',-70.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(54,'2019-02-13',-47.56,'1','B01',0,'Eftpos Ww Petrol       2229Helensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(55,'2019-02-13',-12.00,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(56,'2019-02-13',-10.40,'1','D01',0,'Eftpos Coles 4584               Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(57,'2019-02-13',-10.20,'1','D01',0,'Eftpos Zarraffas Coffee   Pacific Pines     Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(58,'2019-02-13',-10.00,'1','D05',0,'Visa Debit Purchase Card 7079 Pacific Pines Primary Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(59,'2019-02-12',-28.21,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(60,'2019-02-12',-13.20,'1','D01',0,'Eftpos Coles 8732               Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(61,'2019-02-12',-12.89,'1','D01',0,'Visa Debit Purchase Card 7079 Helensvale Dis Fruit Helensvale',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(62,'2019-02-11',-26.48,'1','D99',0,'Eftpos Pline Ph Helensvale   Helensvale   Qldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(63,'2019-02-11',-21.35,'1','D06',0,'Eftpos Mcdonalds Pacific Pin Pacific Pinesqldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(64,'2019-02-11',-18.65,'1','D06',0,'Eftpos Mcdonalds Pacific Pin Pacific Pinesqldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(65,'2019-02-11',-24.69,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2713 Helensvale',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(66,'2019-02-11',-65.80,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(67,'2019-02-11',-18.98,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(68,'2019-02-11',-10.27,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(69,'2019-02-08',-840.00,'1','A02',0,'Anz M-Banking Payment Transfer 727611 To Dhc  Investment',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(70,'2019-02-08',-200.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 726772  To  014536587763751',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(71,'2019-02-08',-60.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 726974  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(72,'2019-02-08',-60.00,'1','B07',0,'Anz Phone Banking Bpay Justice Sper                  {583119}',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(73,'2019-02-08',-17.75,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(74,'2019-02-08',-17.60,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(75,'2019-02-07',-90.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(76,'2019-02-07',-26.84,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(77,'2019-02-07',-4.99,'1','D07',0,'Eftpos Officeworks 0422         Nerang       Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(78,'2019-02-07',866.10,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(79,'2019-02-06',-689.25,'1','D05',0,'Anz M-Banking Payment Transfer 244085 To Qahs General Account',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(80,'2019-02-06',-42.97,'1','D05',0,'Eftpos Love That BookHelensvale Qld         Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(81,'2019-02-06',-36.75,'1','D01',0,'Eftpos Woolworths      2713Helensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(82,'2019-02-06',-17.75,'1','D01',0,'Eftpos Woolworths      2713Helensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(83,'2019-02-06',-7.99,'1','D01',0,'Eftpos Helensvale Dis FruitHelensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(84,'2019-02-06',1627.24,'1','G01',0,'Pay/Salary From Queensland Healt Salary 00342073',9,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(85,'2019-02-05',-109.99,'1','D12',0,'Payment To Vodafone         T3 12b775 1b',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(86,'2019-02-05',-50.00,'1','B01',0,'Eftpos 7-Eleven 4154            Pacific Pinesql',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(87,'2019-02-05',-49.43,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(88,'2019-02-05',-9.50,'1','D01',0,'Eftpos Zarraffas Coffee   Pacific Pines     Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(89,'2019-02-05',-6.00,'1','D06',0,'Eftpos Mcdonalds Harbourtown Biggera Waterqldau',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(90,'2019-02-04',-25.64,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(91,'2019-02-04',-94.17,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(92,'2019-02-04',-37.20,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(93,'2019-02-04',-2.25,'1','D07',0,'Eftpos Officeworks 0422         Nerang       Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(94,'2019-02-04',-2.00,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(95,'2019-02-04',-33.61,'1','D01',0,'Visa Debit Purchase Card 7079 Dominos Pizza Pac Pi Pacific Pines',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(96,'2019-02-01',-150.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 430227  To  014536587763751',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(97,'2019-02-01',-100.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig032420729143v',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(98,'2019-02-01',-60.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 430525  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(99,'2019-02-01',-49.58,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(100,'2019-02-01',-34.04,'1','C04',0,'Payment To Goodlife Helensv A00396r90l1t',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(101,'2019-02-01',-20.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig032420729145k',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(102,'2019-02-01',-8.83,'1','D01',0,'Visa Debit Purchase Card 7079 Aldi Stores - Underwoo Underwood',0,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(103,'2019-03-29',5.00,'1','D09',0,'Reversal Of Account Servicing Fee Minimum $2000 In Deposits Received',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(104,'2019-03-29',-5.00,'1','D09',0,'Account Servicing Fee',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(105,'2019-03-29',-100.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 649272  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(106,'2019-03-29',-100.00,'1','F02',0,'Anz Internet Banking Bpay Commonwealth Cards            {649913}',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(107,'2019-03-29',-100.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig088420729143v',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(108,'2019-03-29',-60.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 649535  To 4564627119604502',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(109,'2019-03-29',-34.04,'1','C04',0,'Payment To Goodlife Helensv A003grfu0ldz',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(110,'2019-03-29',-22.25,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(111,'2019-03-29',-20.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig088420729145k',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(112,'2019-03-28',-32.16,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(113,'2019-03-28',-15.17,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(114,'2019-03-28',-3.30,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(115,'2019-03-28',863.65,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(116,'2019-03-28',60.00,'1','G02',0,'Anz M-Banking Funds Tfer Transfer 910351  From       587763751',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(117,'2019-03-27',-57.00,'1','D05',0,'Visa Debit Purchase Card 7079 Pacific Pines Primary Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(118,'2019-03-27',-18.00,'1','D01',0,'Visa Debit Purchase Card 7079 K Town Supermarket Southport',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(119,'2019-03-26',-40.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(120,'2019-03-26',-10.30,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(121,'2019-03-26',-20.56,'1','D01',0,'Visa Debit Purchase Card 7079 Helensvale Dis Fruit Helensvale',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(122,'2019-03-25',-20.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(123,'2019-03-25',-14.60,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(124,'2019-03-25',-36.26,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2713 Helensvale',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(125,'2019-03-25',-20.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(126,'2019-03-25',-65.70,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(127,'2019-03-25',-55.05,'1','B01',0,'Eftpos 7-Eleven 4154            Pacific Pinesql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(128,'2019-03-25',-36.00,'1','E99',0,'Visa Debit Purchase Card 7079 Jummps Parkwood Pty Lt Parkwood',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(129,'2019-03-25',-4.00,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(130,'2019-03-22',-840.00,'1','A02',0,'Anz M-Banking Payment Transfer 234204 To Dhc  Investment',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(131,'2019-03-22',-200.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 234408  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(132,'2019-03-22',-50.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 234567  To 4564627119604502',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(133,'2019-03-22',-27.95,'1','D06',0,'Eftpos Mcdonalds Pacific Pin Pacific Pinesqldau',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(134,'2019-03-22',-7.98,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(135,'2019-03-21',-43.63,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(136,'2019-03-21',-29.65,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(137,'2019-03-21',-14.85,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(138,'2019-03-21',863.65,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(139,'2019-03-20',-0.01,'1','D09',0,'Debit Interest Charged',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(140,'2019-03-20',-970.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(141,'2019-03-20',-34.54,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(142,'2019-03-20',1745.36,'1','G01',0,'Pay/Salary From Queensland Healt Salary 00342073',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(143,'2019-03-19',-11.10,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(144,'2019-03-19',50.00,'1','G02',0,'Anz M-Banking Funds Tfer Transfer 999389  From       587763751',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(145,'2019-03-18',-77.25,'1','C01',0,'Payment To Medibank Private 006315903905',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(146,'2019-03-18',-16.18,'1','D99',0,'Payment To Paypal Australia 1005178585986',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(147,'2019-03-18',-74.00,'1','D06',0,'Visa Debit Purchase Card 7079 Ms Charcoal Pty. Ltd. Runcorn',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(148,'2019-03-18',-40.90,'1','D01',0,'Eftpos Domino\'s Helensvale      Helensvale   Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(149,'2019-03-18',-37.20,'1','D01',0,'Eftpos Hanaro Trading     Sunnybank         Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(150,'2019-03-18',-33.50,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(151,'2019-03-18',-32.00,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(152,'2019-03-15',-100.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig074420729143v',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(153,'2019-03-15',-99.00,'1','A04',0,'Anz Internet Banking Bpay Telstra Corp Ltd              {807202}',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(154,'2019-03-15',-58.00,'1','D10',0,'Payment To Qnmu Membership  1981097',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(155,'2019-03-15',-55.00,'1','D05',0,'Anz M-Banking Payment Transfer 806625 To Qahs General Account',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(156,'2019-03-15',-50.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 807412  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(157,'2019-03-15',-50.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 807588  To 4564627119604502',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(158,'2019-03-15',-49.75,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(159,'2019-03-15',-34.04,'1','C04',0,'Payment To Goodlife Helensv A003eykc17xy',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(160,'2019-03-15',-20.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig074420729145k',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(161,'2019-03-15',-13.05,'1','D01',0,'Eftpos Coles 4584               Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(162,'2019-03-15',-11.67,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(163,'2019-03-14',-17.98,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(164,'2019-03-14',-3.30,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(165,'2019-03-14',821.10,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(166,'2019-03-12',-58.19,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(167,'2019-03-12',-45.00,'1','B01',0,'Eftpos 7-Eleven 4154            Pacific Pinesql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(168,'2019-03-12',-26.05,'1','D01',0,'Visa Debit Purchase Card 7079 K Town Supermarket Southport',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(169,'2019-03-11',-70.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(170,'2019-03-11',-24.98,'1','C03',0,'Eftpos Pacific Pines ChemmPacific Pines     Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(171,'2019-03-11',-24.92,'1','B01',0,'Visa Debit Purchase Card 7079 Ww Petrol 2229 Gaven',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(172,'2019-03-11',-6.60,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(173,'2019-03-11',-104.95,'1','D01',0,'Eftpos Woolworths      2713Helensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(174,'2019-03-11',-38.15,'1','D01',0,'Eftpos Helensvale Dis FruitHelensvale Qld   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(175,'2019-03-11',-2.20,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(176,'2019-03-11',-69.10,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(177,'2019-03-11',-54.28,'1','B01',0,'Eftpos Ww Petrol       2296Robina Qld       Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(178,'2019-03-11',-31.00,'1','D06',0,'Eftpos Chikor Pty Ltd           Southport    Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(179,'2019-03-11',-8.51,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(180,'2019-03-11',-0.80,'1','D07',0,'Visa Debit Purchase Card 7079 Officeworks 0401 Southport',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(181,'2019-03-11',-16.63,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(182,'2019-03-08',-840.00,'1','A02',0,'Anz M-Banking Payment Transfer 327870 To Dhc  Investment',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(183,'2019-03-08',-200.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 328124  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(184,'2019-03-08',-60.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 328320  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(185,'2019-03-08',-1.85,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(186,'2019-03-07',-716.60,'1','B03',0,'Anz Phone Banking Bpay Tmr Reg Renew 4817            {755996}',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(187,'2019-03-07',-100.63,'1','D12',0,'Payment To Vodafone         T3 131bcd 19',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(188,'2019-03-07',-60.00,'1','B07',0,'Anz Phone Banking Bpay Justice Sper                  {756014}',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(189,'2019-03-07',-15.65,'1','D01',0,'Eftpos We Brew Pty Ltd          Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(190,'2019-03-07',821.10,'1','G01',0,'Pay/Salary From Dart Laser Emplo Gci Wages',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(191,'2019-03-06',-100.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 834577  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(192,'2019-03-06',-75.01,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(193,'2019-03-06',-70.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(194,'2019-03-06',-34.99,'1','D99',0,'Eftpos Pline Ph Helensvale   Helensvale   Qldau',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(195,'2019-03-06',-20.00,'1','D13',0,'Anz Atm Pacific Pine Sc          Gaven        Ql',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(196,'2019-03-06',-14.30,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(197,'2019-03-06',-4.14,'1','D01',0,'Visa Debit Purchase Card 7079 Woolworths 2691 Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(198,'2019-03-06',2077.55,'1','G01',0,'Pay/Salary From Queensland Healt Salary 00342073',9,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(199,'2019-03-06',-50.00,'1','D05',0,'Visa Debit Purchase Card 7079 Pacific Pines Primary Pacific Pines',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(200,'2019-03-06',-44.99,'1','D04',0,'Visa Debit Purchase Card 7079 Betts Brand Direct Biggera Water',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(201,'2019-03-06',-34.59,'1','D01',0,'Visa Debit Purchase Card 7079 Happy Market Runcorn Runcorn',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(202,'2019-03-05',-60.00,'1','D04',0,'Visa Debit Purchase Card 7079 Nike Harbourtown Biggera Watrs',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(203,'2019-03-05',-49.00,'1','D06',0,'Visa Debit Purchase Card 7079 Ms Charcoal Pty. Ltd. Runcorn',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(204,'2019-03-05',-6.19,'1','D01',0,'Visa Debit Purchase Card 7079 Iga Runcorn Runcorn',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(205,'2019-03-05',-13.82,'1','D01',0,'Visa Debit Purchase Card 7079 Aldi Stores - Helensva Helensvale',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(206,'2019-03-04',-48.85,'1','D01',0,'Eftpos Aldi Stores - Helensva   Helensvale   Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(207,'2019-03-04',-56.79,'1','D01',0,'Eftpos Hanaro Trading     Sunnybank         Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(208,'2019-03-04',-66.60,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(209,'2019-03-04',-25.40,'1','D01',0,'Eftpos Woolworths      2691Pacific Pine Qld Au',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(210,'2019-03-04',-53.00,'1','D01',0,'Visa Debit Purchase Card 7079 Kmart 1179 Helensvale',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(211,'2019-03-04',-33.20,'1','D01',0,'Visa Debit Purchase Card 7079 Aldi Stores - Helensva Helensvale',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(212,'2019-03-01',-100.00,'1','F02',0,'Anz M-Banking Funds Tfer Transfer 815147  To  014536587763751',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(213,'2019-03-01',-100.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig060420729143v',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(214,'2019-03-01',-60.00,'1','F01',0,'Anz M-Banking Funds Tfer Transfer 815333  To 5468279041172986',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(215,'2019-03-01',-34.04,'1','C04',0,'Payment To Goodlife Helensv A003d3ye1l15',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03'),(216,'2019-03-01',-20.00,'1','F99',0,'Payment To Clink Dir Debit  Vdbig060420729145k',0,'moonkyu lee','2019-05-12 17:02:03','2019-05-12 17:02:03');
/*!40000 ALTER TABLE `wspending` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wtasks`
--

LOCK TABLES `wtasks` WRITE;
/*!40000 ALTER TABLE `wtasks` DISABLE KEYS */;
INSERT INTO `wtasks` VALUES (1,'[DEV] Payment - prediction total amount of gross',3,'2018-10-31',99,'moonkyu lee','2018-10-27 00:29:35','2018-11-04 15:03:46'),(2,'Apply - Kevin Passport',2,'2018-10-31',99,'moonkyu lee','2018-10-27 00:29:56','2018-12-08 20:59:48'),(3,'[DEV] update task status to done ',1,'2018-10-27',99,'moonkyu lee','2018-10-27 00:30:26','2018-10-31 09:49:16'),(4,'[DEV] task input text limit- 80char',1,'2018-10-26',99,'moonkyu lee','2018-10-27 00:30:50','2018-10-31 09:49:20'),(5,'Add Task testing',4,'2018-11-01',99,'moonkyu lee','2018-10-27 01:02:38','2018-10-27 01:09:34'),(6,'Add Task testing222',3,'2018-12-05',99,'moonkyu lee','2018-10-27 01:02:57','2018-10-27 01:09:57'),(7,'task test 01',2,'2018-12-29',99,'moonkyu lee','2018-10-27 01:03:10','2018-10-27 01:03:48'),(8,'[DEV] handle overdue and how long completed task been shown ',3,'2018-11-03',99,'moonkyu lee','2018-10-27 01:12:38','2018-11-04 14:39:21'),(9,'[DEV] when ajax post file, how to handle error - duplicated data saved',1,'2018-11-30',99,'moonkyu lee','2018-10-27 01:18:20','2018-11-04 12:16:12'),(10,'[DEV]spending - develope expense web page ',3,'2018-11-30',99,'moonkyu lee','2018-10-29 11:58:53','2018-11-16 10:16:02'),(11,'[DEV] delete and update for payment ',2,'2018-11-03',99,'moonkyu lee','2018-10-31 09:49:59','2018-11-04 15:04:06'),(12,'[DEV] Store id with chart dataset',2,'2018-11-04',99,'moonkyu lee','2018-11-03 02:27:34','2018-11-04 15:04:14'),(13,'[DEV] setting page',2,'2018-11-30',99,'moonkyu lee','2018-11-04 15:05:43','2018-11-09 02:16:09'),(14,'[DEV] weight page',3,'2018-11-30',99,'moonkyu lee','2018-11-04 15:06:23','2018-11-09 02:16:13'),(15,'[DEV] Define the category for spending',2,'2018-11-30',99,'moonkyu lee','2018-11-09 02:16:49','2019-02-24 18:24:54'),(16,'[DEV] create table for spending',1,'2018-11-12',99,'moonkyu lee','2018-11-09 02:17:27','2018-11-16 10:16:08'),(17,'[DEV] Auto extract holiday leave hours ',4,'2019-02-28',99,'moonkyu lee','2018-12-08 20:59:40','2019-03-12 09:27:33'),(18,'Kevin Passport',1,'2018-12-31',0,'moonkyu lee','2018-12-08 21:00:10','2018-12-08 21:00:10'),(19,'Login add css for copyright div',4,'2019-04-05',99,'moonkyu lee','2019-02-19 10:13:31','2019-02-22 11:46:45'),(20,'Review Category and Redesign income page',2,'2019-04-30',99,'moonkyu lee','2019-02-22 11:46:10','2019-02-24 14:26:16'),(21,'Create category selection',2,'2019-03-13',99,'moonkyu lee','2019-02-24 14:26:03','2019-03-12 09:27:37'),(22,'Review Datatable',2,'2019-03-08',99,'moonkyu lee','2019-02-24 18:25:41','2019-03-18 09:43:39'),(23,'Add spending data',3,'2019-03-21',99,'moonkyu lee','2019-03-04 11:52:51','2019-03-18 09:43:48'),(24,'list spend data and refresh after add data',2,'2019-04-05',99,'moonkyu lee','2019-03-17 22:48:53','2019-03-25 10:49:08'),(25,'upgrade task modal',3,'2019-04-05',0,'moonkyu lee','2019-03-17 22:49:42','2019-03-17 22:49:42'),(26,'Add spending data summary',3,'2019-04-21',99,'moonkyu lee','2019-03-31 21:11:37','2019-05-11 01:33:55'),(27,'manage and apply base rate ',1,'2019-04-06',99,'moonkyu lee','2019-03-31 21:12:52','2019-04-01 10:28:33'),(28,'Research Load data from file and apply to spending page',2,'2019-05-01',99,'moonkyu lee','2019-04-03 11:20:55','2019-05-11 01:33:48'),(29,'Add Financial year total',2,'2019-05-30',99,'moonkyu lee','2019-05-12 15:54:20','2019-05-22 13:12:40'),(30,'Add Financial year spending thread',2,'2019-05-30',0,'moonkyu lee','2019-05-12 15:55:03','2019-05-12 15:55:03'),(31,'Exclude Category - Miscellaneous from spending',2,'2019-05-30',99,'moonkyu lee','2019-05-12 15:56:03','2019-05-13 01:11:56'),(32,'Add function for editing spending data',2,'2019-06-07',0,'moonkyu lee','2019-05-22 13:13:17','2019-05-22 13:13:17');
/*!40000 ALTER TABLE `wtasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wuploaddata`
--

DROP TABLE IF EXISTS `wuploaddata`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `wuploaddata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `upload_file_name` varchar(100) NOT NULL,
  `upload_orig_name` varchar(50) NOT NULL,
  `upload_file_type` varchar(10) DEFAULT '',
  `upload_file_size` decimal(13,2) DEFAULT '0.00',
  `upload_file_status` int(11) DEFAULT '0',
  `upload_user` varchar(50) DEFAULT '',
  `upload_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `upload_updated` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wuploaddata`
--

LOCK TABLES `wuploaddata` WRITE;
/*!40000 ALTER TABLE `wuploaddata` DISABLE KEYS */;
INSERT INTO `wuploaddata` VALUES (1,'/opt/lampstack-7.1.26-0/mysql/uploads/e5bd693e9c83cff1c760673e6ec221cd.csv','spend_data_Feburary_2019.csv','text/plain',7.18,99,'moonkyu lee','2019-05-12 17:01:17','2019-05-12 17:01:17'),(2,'/opt/lampstack-7.1.26-0/mysql/uploads/a08281a0ef85dcea946c4104c9f6b9d6.csv','spend_data_March_2019.csv','text/plain',8.21,99,'moonkyu lee','2019-05-12 17:02:02','2019-05-12 17:02:03');
/*!40000 ALTER TABLE `wuploaddata` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wuser`
--

LOCK TABLES `wuser` WRITE;
/*!40000 ALTER TABLE `wuser` DISABLE KEYS */;
INSERT INTO `wuser` VALUES (1,'Moon','lee.moonkyu@gmail.com','123',47,432624230),(2,'Jung','woojs0801@naver.com','123',46,410111821),(3,'Kevin','kevin@gmail.com','123',16,232342343),(4,'Ian','ian@gmail.com','202cb962ac59075b964b07152d234b70',11,324234234),(5,'Hannah','hannah@gmail.com','202cb962ac59075b964b07152d234b70',5,324234234);
/*!40000 ALTER TABLE `wuser` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'myweb'
--
/*!50003 DROP FUNCTION IF EXISTS `current_financial_year` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` FUNCTION `current_financial_year`(fromto INT, financeyear DATE) RETURNS varchar(100) CHARSET utf8mb4
BEGIN
SET @rst = NULL;
IF fromto = 1 THEN 
	/*
		To get from financial year
    */
	IF MONTH(financeyear) < 7 THEN
		SELECT CONCAT(YEAR(financeyear)-1,'-07-01') INTO @rst ;
    ELSE
		SELECT CONCAT(YEAR(financeyear),'-07-01') INTO @rst ;
    END IF;
ELSE
	/*
		To get to financial year
    */
	IF MONTH(financeyear) < 7 THEN
		SELECT CONCAT(YEAR(financeyear),'-06-30') INTO @rst ;
    ELSE
		SELECT CONCAT(YEAR(financeyear)-1,'-06-30') INTO @rst ;
    END IF;
END IF;
RETURN @rst;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_finance_income_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_income_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
	SET @sql_row = 
	'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
	  FROM wspending 
	  WHERE spend_date between ? and ?  AND spend_status != 0
	  GROUP BY spend_category  ORDER BY spend_category) a';

	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
					spend_category,'\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM
	   wspending
	WHERE spend_date BETWEEN @finance_from_year AND @finance_to_year
	AND spend_status != 0;

	SET @sql_columns = NULL;
	SELECT 

		  GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
					spend_category,'\' THEN sum_spend_amount END),0) AS `',
					spend_category, '`'))

	INTO @sql_columns FROM   wspending
	WHERE spend_date BETWEEN @finance_from_year AND @finance_to_year
	AND spend_status != 0;

	SET @final_sql = CONCAT('SELECT ', 
							@sql_columns, ',', @total_column,
							' AS Total FROM ' , 
							@sql_row);

	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_finance_months_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_months_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
    
	SET @sql_row = 
		'(SELECT  DATE_FORMAT(spend_date, ''%Y-%m'') AS s_ym, 
			   SUM(spend_amount) AS sum_amount
		FROM wspending 
		WHERE spend_date between ? and ? 
        and spend_category NOT IN(SELECT cat_code FROM wcategory WHERE cat_status = 0)
		GROUP BY s_ym) a ';

	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN s_ym =\'',
					b.finance_month,'\' THEN sum_amount END),0) AS `', b.finance_month, '`'))
	INTO @sql_columns 
	FROM
    
    (SELECT DATE_FORMAT(@finance_from_year + interval a.a month, '%Y-%m') as finance_month
	 FROM (	select 0 as a 
			union all select 1 union all select 2 union all select 3 union all select 4 
			union all select 5 union all select 6 union all select 7 union all select 8 
			union all select 9 union all select 10 union all select 11 ) as a) as b;

    /*
    (SELECT DISTINCT DATE_FORMAT(spend_date, '%Y-%m') AS finance_month
		FROM wspending) b;
	*/

	SET @final_sql = CONCAT('SELECT , ', @sql_columns, ' FROM ', @sql_row);
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_finance_year_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_finance_year_summary`(IN c_date VARCHAR(10))
BEGIN
	SET @f_date = CONCAT(c_date,'-01');
	SET @finance_from_year = current_financial_year(1,@f_date);
	SET @finance_to_year = current_financial_year(2,@f_date);
    SET @finance_year = NULL;
    SELECT CONCAT(YEAR(current_financial_year(1,@f_date)),'-',YEAR(current_financial_year(2,@f_date))) INTO @finance_year ;
	SET @sql_row = 
		'(SELECT ? AS `Financial Year`, SUBSTR(spend_category, 1, 1) AS master_category,
			 SUM(spend_amount) AS sum_spend_amount
		FROM wspending
        WHERE spend_date between ? and ?
		GROUP BY master_category
		ORDER BY master_category) a';

	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0) AS `',
                SUBSTR(cat_code,1,1),
                '`'))
	INTO @sql_columns FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @final_sql = CONCAT('SELECT `Financial Year` , ',
							@sql_columns, ',', @total_column,
							' AS Total FROM ' , @sql_row, ' GROUP BY `Financial Year`');
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @finance_year, @finance_from_year, @finance_to_year;
	DEALLOCATE PREPARE stmt;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_income_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_income_summary`(IN s_ym VARCHAR(10))
BEGIN
SET @spend_ym = CONCAT(s_ym,'%');
SET @sql_row = NULL;
SET @sql_row = 
'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
  FROM wspending 
  WHERE spend_date like ?  AND spend_status != 0
  GROUP BY spend_category  ORDER BY spend_category) a';

SET @total_column = NULL;
SELECT 
	GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,'\' THEN sum_spend_amount END),0)') SEPARATOR '+')
INTO @total_column FROM
   wspending
WHERE spend_date LIKE @spend_ym
AND spend_status != 0;

SET @sql_columns = NULL;
SELECT 

      GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,'\' THEN sum_spend_amount END),0) AS `',
                spend_category, '`'))

INTO @sql_columns FROM   wspending
WHERE spend_date LIKE @spend_ym
AND spend_status != 0;

SET @final_sql = CONCAT('SELECT ', 
                        @sql_columns, ',', @total_column,
                        ' AS Total FROM ' , 
                        @sql_row);

PREPARE stmt FROM @final_sql ;
EXECUTE stmt USING @spend_ym;
DEALLOCATE PREPARE stmt;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_mastercategory_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_mastercategory_summary`(IN s_ym VARCHAR(10))
BEGIN
	SET @spend_ym = CONCAT(s_ym,'%');
	SET @sql_row = 
		'(SELECT DATE_FORMAT(spend_date, ''%Y-%m'') AS spend_year_month, 
			 SUBSTR(spend_category, 1, 1) AS master_category,
			 SUM(spend_amount) AS sum_spend_amount
		FROM wspending 
		WHERE spend_date like ? 
		GROUP BY spend_year_month, master_category
		ORDER BY master_category) a';

	SET @sql_columns = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT(' IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0) AS `',
                SUBSTR(cat_code,1,1),
                '`'))
	INTO @sql_columns FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @total_column = NULL;
	SELECT 
		GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN master_category =\'',
                SUBSTR(cat_code,1,1),
                '\' THEN sum_spend_amount END),0)') SEPARATOR '+')
	INTO @total_column FROM wcategory
	WHERE SUBSTR(cat_code,2,2) = '00' AND cat_status = 1 ;

	SET @final_sql = CONCAT('SELECT spend_year_month as `Year Month`, ', 
                        @sql_columns, ',', @total_column,
                        ' AS Total FROM ' , 
                        @sql_row, ' GROUP BY `Year Month`');
                        
	PREPARE stmt FROM @final_sql ;
	EXECUTE stmt USING @spend_ym;
	DEALLOCATE PREPARE stmt;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_subcategory_summary` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_subcategory_summary`(IN s_ym VARCHAR(10), IN s_code VARCHAR(3))
BEGIN
DECLARE EXIT HANDLER FOR 1064 
BEGIN
	SELECT '';
END;

SET @spend_ym = CONCAT(s_ym,'%');
SET @spend_category = CONCAT(s_code,'%');
SET @sql_row = NULL;
SET @sql_row = 
'(SELECT spend_category, SUM(spend_amount) AS sum_spend_amount
  FROM wspending 
  WHERE spend_date like ?  AND spend_category like ?
  GROUP BY spend_category  ORDER BY spend_category) a';

SET @sql_columns = NULL;
SELECT 
    GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,
                '\' THEN sum_spend_amount END),0) AS `',
                spend_category,
                '`'))
INTO @sql_columns FROM
    wspending
WHERE
    spend_date LIKE @spend_ym
        AND spend_category LIKE @spend_category;

SET @total_column = NULL;
SELECT 
    GROUP_CONCAT(DISTINCT CONCAT('IFNULL(MAX(CASE WHEN spend_category =\'',
                spend_category,
                '\' THEN sum_spend_amount END),0)')
        SEPARATOR '+')
INTO @total_column FROM
    wspending
WHERE
    spend_date LIKE @spend_ym
        AND spend_category LIKE @spend_category;


SET @final_sql = CONCAT('SELECT ',@sql_columns,',', @total_column,' AS Total FROM ',@sql_row);
PREPARE stmt FROM @final_sql ;
EXECUTE stmt USING @spend_ym, @spend_category;
DEALLOCATE PREPARE stmt;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 DROP PROCEDURE IF EXISTS `sp_trans_spend_data` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */ ;
DELIMITER ;;
CREATE DEFINER=`wom`@`localhost` PROCEDURE `sp_trans_spend_data`(IN s_account VARCHAR(3), IN s_user VARCHAR(50))
BEGIN
	DECLARE done INT DEFAULT FALSE;
	DECLARE t_spend_date DATE;
    DECLARE t_spend_amount DECIMAL(13,2);
    DECLARE t_spend_category VARCHAR(3);
    DECLARE t_spend_description VARCHAR(80);
    DECLARE v_spend_status INT DEFAULT 0;
    
    DECLARE tmp_cur CURSOR FOR SELECT spend_date, spend_amount, spend_category, spend_description FROM tmp_spend;
    DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = TRUE;
    
    OPEN tmp_cur;
    
    read_loop: LOOP
		FETCH tmp_cur INTO t_spend_date, t_spend_amount, t_spend_category, t_spend_description;
        IF done THEN LEAVE read_loop;
        END IF;
        
        IF (SUBSTR(t_spend_category,1,1) = 'G' )THEN SET v_spend_status = 9;
        ELSE SET v_spend_status = 0;
        END IF;
        
        INSERT INTO wspending 
		(spend_date,spend_amount,spend_account,spend_category,spend_description,spend_user, spend_status)
		VALUES
        (t_spend_date,t_spend_amount,s_account,t_spend_category,t_spend_description, s_user, v_spend_status);
        
	END LOOP;
    
    CLOSE tmp_cur;
    
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Final view structure for view `v_spending`
--

/*!50001 DROP VIEW IF EXISTS `v_spending`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`wom`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `v_spending` AS select `a`.`id` AS `DT_RowId`,`a`.`spend_date` AS `spend_date`,`a`.`spend_amount` AS `spend_amount`,`a`.`spend_account` AS `spend_account`,`a`.`spend_description` AS `spend_description`,concat(`c`.`cat_name`,'	  --  ',`a`.`spend_category`) AS `spend_category`,`a`.`sub_category_code` AS `category_code` from (((select `s`.`id` AS `id`,`s`.`spend_date` AS `spend_date`,`s`.`spend_amount` AS `spend_amount`,(case `s`.`spend_account` when 1 then 'Bank Saving' when 2 then 'Credit Card' when 3 then 'Cash' else '' end) AS `spend_account`,`s`.`spend_description` AS `spend_description`,concat(substr(`c`.`cat_code`,1,1),'00') AS `master_category`,`c`.`cat_name` AS `spend_category`,`c`.`cat_code` AS `sub_category_code` from (`myweb`.`wspending` `s` left join `myweb`.`wcategory` `c` on((`s`.`spend_category` = `c`.`cat_code`))) where (`s`.`spend_status` = 0))) `a` left join `myweb`.`wcategory` `c` on((`a`.`master_category` = `c`.`cat_code`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-23 10:35:21
