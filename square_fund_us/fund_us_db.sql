-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: fund_us
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `payments_status`
--

DROP TABLE IF EXISTS `payments_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_paid` varchar(30) DEFAULT NULL,
  `invoice_unpaid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=396 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments_status`
--

LOCK TABLES `payments_status` WRITE;
/*!40000 ALTER TABLE `payments_status` DISABLE KEYS */;
INSERT INTO `payments_status` VALUES (372,'p','29'),(373,'23','p'),(374,'p','67'),(375,'34','p'),(376,'p','21'),(377,'21','p'),(378,'p','300'),(379,'p','21'),(380,'p','21'),(381,'p','22222'),(382,'p','22222'),(383,'p','78'),(384,'p','300'),(385,'p','10'),(386,'101','p'),(387,'p','10'),(388,'p','300'),(389,'p','11'),(390,'p','10'),(391,'10','p'),(392,'p','300'),(393,'p','300'),(394,'p','300'),(395,'p','300');
/*!40000 ALTER TABLE `payments_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments_status2`
--

DROP TABLE IF EXISTS `payments_status2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments_status2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card` varchar(30) DEFAULT NULL,
  `cash` varchar(30) DEFAULT NULL,
  `gift_card` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=173 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments_status2`
--

LOCK TABLES `payments_status2` WRITE;
/*!40000 ALTER TABLE `payments_status2` DISABLE KEYS */;
INSERT INTO `payments_status2` VALUES (144,'89','p',NULL),(145,'43','p',NULL),(146,'p','21',NULL),(147,'21','p',NULL),(148,'34','p',NULL),(149,'p','34',NULL),(150,'34','p',NULL),(151,'p','21',NULL),(152,'p','21',NULL),(153,'21','p',NULL),(154,'p','21',NULL),(155,'p','34',NULL),(156,'21','p',NULL),(157,'p','21',NULL),(158,'p','34',NULL),(159,'22222','p',NULL),(160,'p','22222',NULL),(161,'22222','p',NULL),(162,'p','22222',NULL),(163,'22222','p',NULL),(164,'p','22222',NULL),(165,'p','22222',NULL),(166,'201','p',NULL),(167,'p','20',NULL),(168,'45','p',NULL),(169,'205','p',NULL),(170,'101','p',NULL),(171,'10','p',NULL),(172,'p','0',NULL);
/*!40000 ALTER TABLE `payments_status2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `post_image` text DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `identity` varchar(100) DEFAULT NULL,
  `comments` varchar(20) DEFAULT NULL,
  `saler_page` text DEFAULT NULL,
  `saler_accounts` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (19,'Say No to Hunger','Donate to Help Charity Organization  and NGO\'s to  fight hunger especially in Africa ','1685656286','post','0','','Esedo Fredrick',NULL,'6479097b8b8d21685653883f90c0dca67abe09854d4ac2627822139',NULL,NULL,'0',NULL,NULL),(20,'Climatic Actions','Climatic Changes is one of the Serious Issues Facing Mankind. Please Donate to help fight Climatic Change','1685656390','post','0','','Esedo Fredrick',NULL,'6479097b8b8d21685653883f90c0dca67abe09854d4ac2627822139',NULL,NULL,'0',NULL,NULL),(21,'Help Refugees','Millions of People are homeless today because of War or one problem to another. Donate to Help Provide Shelter to Refugees and Homeless','1685656551','post','0','','Esedo Fredrick',NULL,'6479097b8b8d21685653883f90c0dca67abe09854d4ac2627822139',NULL,NULL,'0',NULL,NULL),(22,'Gender Equality','Most Women are under-represented in many areas/sectors in life including in Work Place, Science, Technology, Engineering and Mathematics. Donate to help fund Education for Women and Ladies to help fight Gender Inequalities..','1685656862','post','0','','Esedo Fredrick',NULL,'6479097b8b8d21685653883f90c0dca67abe09854d4ac2627822139',NULL,NULL,'0',NULL,NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `given_name` varchar(200) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `family_name` varchar(200) DEFAULT NULL,
  `customer_id` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `data` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `userid` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (10,'esedofredrick@gmail.com','Esedo Fredrick','Fredrick','08064242019','Esedo','M5N6DB6XW07YH7TYEWT3M8D1Z4','$2y$04$YqFrS.F5dnWfW4tZdZS4KOzInWL09Ah2rLRgczteNYB1UQICmu0me','Thursday, June 1, 2023, 5:11 pm','1685653883','User',NULL,NULL,'16856538831685653886.png','6479097b8b8d21685653883f90c0dca67abe09854d4ac2627822139'),(11,'anncool@gmail.com','Ann cool','cool','08064242019','Ann','KVP19PZH376YCM48TQS26NE364','$2y$04$zy/F0ednkifUO2VbJn71kOc3l6Rf8m4W0CrxMzbbRN./QlfBNRLiS','Thursday, June 1, 2023, 7:30 pm','1685662220','User',NULL,NULL,'16856622201685662224.png','64792a0cae73116856622205e0cdfb3151f18a3fdd1670e7acd04ca'),(12,'Tonybair@gmail.com','Tony  Blair','Blair','08064242019','Tony ','7VTPTHT77T08KJ5B670YFT1VHG','$2y$04$RPO7tBihXfthfjoG7J6Ya.0tbQ/6PQz2SNfsz.XGQfNQhJZFl5kn2','Sunday, June 4, 2023, 11:16 am','1685891798','customer',NULL,NULL,'user.png','647caad67225116858917987ab2d5707e1bdba12655541946a76f45');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'fund_us'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-05 19:18:06
