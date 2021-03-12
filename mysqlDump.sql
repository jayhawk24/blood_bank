-- MySQL dump 10.13  Distrib 8.0.23, for Linux (x86_64)
--
-- Host: localhost    Database: bloodBank
-- ------------------------------------------------------
-- Server version	8.0.23-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `hospitalSamples`
--

DROP TABLE IF EXISTS `hospitalSamples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitalSamples` (
  `hospitalId` int NOT NULL,
  `sampleId` int NOT NULL,
  `quantity` int DEFAULT '0',
  KEY `hospitalId` (`hospitalId`),
  KEY `sampleId` (`sampleId`),
  CONSTRAINT `hospitalSamples_ibfk_1` FOREIGN KEY (`hospitalId`) REFERENCES `hospitals` (`id`),
  CONSTRAINT `hospitalSamples_ibfk_2` FOREIGN KEY (`sampleId`) REFERENCES `samples` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitalSamples`
--

LOCK TABLES `hospitalSamples` WRITE;
/*!40000 ALTER TABLE `hospitalSamples` DISABLE KEYS */;
INSERT INTO `hospitalSamples` VALUES (3,1,55),(3,4,58),(3,6,109),(3,8,98),(3,5,50);
/*!40000 ALTER TABLE `hospitalSamples` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hospitals`
--

DROP TABLE IF EXISTS `hospitals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hospitals` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hospitals`
--

LOCK TABLES `hospitals` WRITE;
/*!40000 ALTER TABLE `hospitals` DISABLE KEYS */;
INSERT INTO `hospitals` VALUES (1,'asef','user2@aresgae.com','fbf1eea21bcc7c141df6a81b1a0b93dc'),(2,'asef','user2@aresgae.com','fbf1eea21bcc7c141df6a81b1a0b93dc'),(3,'test','test@test.com','098f6bcd4621d373cade4e832627b4f6');
/*!40000 ALTER TABLE `hospitals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reciever`
--

DROP TABLE IF EXISTS `reciever`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reciever` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bloodGroup` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bloodGroup` (`bloodGroup`),
  CONSTRAINT `reciever_ibfk_1` FOREIGN KEY (`bloodGroup`) REFERENCES `samples` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reciever`
--

LOCK TABLES `reciever` WRITE;
/*!40000 ALTER TABLE `reciever` DISABLE KEYS */;
INSERT INTO `reciever` VALUES (1,'asef','user2@aresgae.com','fbf1eea21bcc7c141df6a81b1a0b93dc',1),(2,'test2','test2@test.com','ad0234829205b9033196ba818f7a872b',2),(3,'test3','test3@test.com','8ad8757baa8564dc136c1e07507f4a98',2),(4,'test4','test4@test.com','86985e105f79b95d6bc918fb45ec7727',2),(5,'testuser','testuser@test.com','5d9c68c6c50ed3d02a2fcf54f63993b6',1);
/*!40000 ALTER TABLE `reciever` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requests`
--

DROP TABLE IF EXISTS `requests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `requests` (
  `recieverId` int NOT NULL,
  `sampleId` int NOT NULL,
  `hospitalId` int NOT NULL,
  `quantity` int NOT NULL,
  UNIQUE KEY `recieverId` (`recieverId`),
  KEY `sampleId` (`sampleId`),
  KEY `hospitalId` (`hospitalId`),
  CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`recieverId`) REFERENCES `reciever` (`id`),
  CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`sampleId`) REFERENCES `samples` (`id`),
  CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`hospitalId`) REFERENCES `hospitals` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requests`
--

LOCK TABLES `requests` WRITE;
/*!40000 ALTER TABLE `requests` DISABLE KEYS */;
INSERT INTO `requests` VALUES (1,7,2,50),(2,1,3,100),(4,6,3,5),(5,5,3,8);
/*!40000 ALTER TABLE `requests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `samples`
--

DROP TABLE IF EXISTS `samples`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `samples` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `samples`
--

LOCK TABLES `samples` WRITE;
/*!40000 ALTER TABLE `samples` DISABLE KEYS */;
INSERT INTO `samples` VALUES (1,'A RhD positive (A+)'),(2,'A RhD negative (A-)'),(3,'B RhD positive (B+)'),(4,'B RhD negative (B-)'),(5,'O RhD positive (O+)'),(6,'O RhD negative (O-)'),(7,'AB RhD positive (AB+)'),(8,'AB RhD negative (AB-)');
/*!40000 ALTER TABLE `samples` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-12 17:31:14
