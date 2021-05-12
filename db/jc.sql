-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: jc_database
-- ------------------------------------------------------
-- Server version	5.6.26-log

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
-- Table structure for table `balances_info`
--

DROP TABLE IF EXISTS `balances_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `balances_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `day_limit` int(11) DEFAULT NULL,
  `service` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `balances_info`
--

LOCK TABLES `balances_info` WRITE;
/*!40000 ALTER TABLE `balances_info` DISABLE KEYS */;
INSERT INTO `balances_info` VALUES (1,1,25,5,'google'),(2,1,500,2,'yandex');
/*!40000 ALTER TABLE `balances_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funnels`
--

DROP TABLE IF EXISTS `funnels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funnels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funnel_name` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funnel_img` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funnels`
--

LOCK TABLES `funnels` WRITE;
/*!40000 ALTER TABLE `funnels` DISABLE KEYS */;
/*!40000 ALTER TABLE `funnels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `support_list`
--

DROP TABLE IF EXISTS `support_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `support_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `mail` varchar(120) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `support_list`
--

LOCK TABLES `support_list` WRITE;
/*!40000 ALTER TABLE `support_list` DISABLE KEYS */;
/*!40000 ALTER TABLE `support_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_recomendes`
--

DROP TABLE IF EXISTS `target_recomendes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `target_recomendes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `text` text,
  `service` varchar(45) DEFAULT NULL,
  `used` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_recomendes`
--

LOCK TABLES `target_recomendes` WRITE;
/*!40000 ALTER TABLE `target_recomendes` DISABLE KEYS */;
INSERT INTO `target_recomendes` VALUES (1,'Рекомендация №1','Текст рекомендации №1','insta',1),(2,'Рекомендация №2','Текст рекомендации №2','facebook',1),(3,'Рекомендация №3','Текст рекомендации №3','VK',1),(4,'Пробный заголовок','Дескриптор для инсты','insta',1),(5,'123','Пробное описание фейсбук','facebook',1);
/*!40000 ALTER TABLE `target_recomendes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `target_recomendes_all`
--

DROP TABLE IF EXISTS `target_recomendes_all`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `target_recomendes_all` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` text,
  `text` text,
  `used` varchar(45) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `target_recomendes_all`
--

LOCK TABLES `target_recomendes_all` WRITE;
/*!40000 ALTER TABLE `target_recomendes_all` DISABLE KEYS */;
INSERT INTO `target_recomendes_all` VALUES (1,'Заголовок','Описание','1');
/*!40000 ALTER TABLE `target_recomendes_all` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ban` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isadmin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Лягуша','Данил','Игоревич','0','0000','Lyagusha',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'jc_database'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-12 16:35:03
