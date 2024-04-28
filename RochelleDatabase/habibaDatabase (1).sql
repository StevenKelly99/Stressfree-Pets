CREATE DATABASE  IF NOT EXISTS `applications` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `applications`;
-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: localhost    Database: applications
-- ------------------------------------------------------
-- Server version	8.0.34

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'Habiba','b00151078@mytudublin.ie','habiba'),(2,'Habiba','b00151078@mytudublin.ie','habiba'),(3,'Habiba','b00151078@mytudublin.ie','habiba'),(4,'Habiba','b00151078@mytudublin.ie','habiba'),(5,'Habiba','b00151078@mytudublin.ie','habiba'),(6,'Habiba','b00151078@mytudublin.ie','habiba'),(7,'Habiba','b00151078@mytudublin.ie','habiba'),(8,'Habiba','b00151078@mytudublin.ie','Habiba'),(9,'Habiba','b00151078@mytudublin.ie','Habiba');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `booking`
--

DROP TABLE IF EXISTS `booking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `booking` (
  `bookingId` int unsigned NOT NULL AUTO_INCREMENT,
  `service` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `customerName` varchar(200) DEFAULT NULL,
  `dogName` varchar(50) DEFAULT NULL,
  `contactNumber` int DEFAULT NULL,
  `businessName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`bookingId`)
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `booking`
--

LOCK TABLES `booking` WRITE;
/*!40000 ALTER TABLE `booking` DISABLE KEYS */;
INSERT INTO `booking` VALUES (119,'dogDaycare','2024-04-11','12:45:00','Habiba Nour','mikjmh',0,'habiba'),(120,'dogDaycare','2024-04-11','17:52:00','Habiba Nour','dog',0,'habiba'),(121,'dogWalking','2024-04-05','17:09:00','Mariam Amr','dog',123456789,'Mariam'),(122,'dogDaycare','2024-04-04','18:42:00','Mariam Amr','dog',123456789,'habiba'),(123,'dogDaycare','2024-04-04','18:42:00','Mariam Amr','dog',123456789,'habiba'),(124,'inHomeSitting','2024-04-05','18:45:00','Habiba Nour','scad',9630,'habiba'),(125,'inHomeSitting','2024-04-05','18:45:00','Habiba Nour','scad',9630,'habiba'),(126,'dogDaycare','2024-04-18','22:44:00','Mariam Amr','jhgfn',123456789,'habiba'),(127,'outHomeSitting','2024-04-04','18:48:00','Mariam Amr','jhgfn',123456789,'Mariam'),(128,'dogWalking','2024-04-25','18:49:00','Habiba Nour','jnde',630,'Mariam');
/*!40000 ALTER TABLE `booking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `businessapplication`
--

DROP TABLE IF EXISTS `businessapplication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `businessapplication` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `businessName` varchar(50) DEFAULT NULL,
  `streetAddress` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `county` varchar(50) DEFAULT NULL,
  `phoneNumber` int DEFAULT NULL,
  `services` varchar(50) DEFAULT NULL,
  `certs` varchar(50) NOT NULL,
  `certFiles` varchar(50) NOT NULL,
  `businessImage` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `businessapplication`
--

LOCK TABLES `businessapplication` WRITE;
/*!40000 ALTER TABLE `businessapplication` DISABLE KEYS */;
INSERT INTO `businessapplication` VALUES (16,'habibanour2005@gmail.com','kjhnjm','habiba','mnbn','khj','kjhjk',0,'inHomeSitting','nmn','cisco gov.jpg.png','ciscoGovernment.png'),(17,'habibanour2005@gmail.com','hgh','habiba','mnbn','khj','kjhjk',45114124,'inHomeSitting','nmn','ciscoReport.png','Assignment 3 Template - Software Engineering.docx'),(18,'habibanour2005@gmail.com','rfdsfrc','habiba','mnbn','khj','kjhjk',45114124,'dogDaycare','nmn','logo.png','OS_Project_LAST.docx'),(19,'b00151078@mytudublin.ie','gky','Mariam','Hollywoodrath Avenue','ddidi','sjddid',123456789,'dogWalking','nbvbnm','Cisco-caseStudy40%.docx','Cisco-caseStudyFinal.docx'),(20,'b00151078@mytudublin.ie','dddddfs','Mariam','Hollywoodrath Avenue','ddidi','sjddid',123456789,'dogWalking','nbvbnm','ciscoGovernment.png','swot.jpg'),(21,'b00151078@mytudublin.ie','dfsg','Mariam','Hollywoodrath Avenue','ddidi','sjddid',123456789,'outHomeSitting','nbvbnm','Stressfree_Pets_RequirementsReport v.2.pdf','Semaphore.docx');
/*!40000 ALTER TABLE `businessapplication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customerapplication`
--

DROP TABLE IF EXISTS `customerapplication`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customerapplication` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int NOT NULL,
  `dogName` varchar(50) NOT NULL,
  `dogType` varchar(50) NOT NULL,
  `age` int DEFAULT NULL,
  `addinfo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customerapplication`
--

LOCK TABLES `customerapplication` WRITE;
/*!40000 ALTER TABLE `customerapplication` DISABLE KEYS */;
INSERT INTO `customerapplication` VALUES (1,'Mariam','Amr','Hollywoodrath Avenue','b00151078@mytudublin.ie','aaaa',123456789,'vjkdhgndms','fcfvks,dv',2,'fdvbfxcv'),(2,'Habiba','Nour','Hollywoodrath Avenue','b00151078@mytudublin.ie','12345',123456789,'djddjsj','djdjdhbwskdk',2,'ddidisjs'),(3,'Habiba','Nour','Hollywoodrath Avenue','b00151078@mytudublin.ie','mmmm',123456789,'djddjsj','djdjdhbwskdk',2,'ddidisjs'),(4,'Habiba','Nour','Hollywoodrath Avenue','b00151078@mytudublin.ie','habiba',123456789,'dog','Bulldog',2,'ddidisjs'),(5,'Habiba','Nour','Hollywoodrath Avenue','b00151078@mytudublin.ie','sdas',123456789,'dog','Bulldog',2,'ddidisjs'),(6,'Habiba','Nour','Hollywoodrath Avenue','b00151078@mytudublin.ie','habiba',123456789,'fdszg','dsfvxz',9,'fgtrur');
/*!40000 ALTER TABLE `customerapplication` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `invoice` (
  `invoiceId` int unsigned NOT NULL AUTO_INCREMENT,
  `bookingId` int DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `customerName` varchar(200) DEFAULT NULL,
  `dogName` varchar(50) DEFAULT NULL,
  `contactNumber` int DEFAULT NULL,
  `businessName` varchar(50) DEFAULT NULL,
  `cost` int DEFAULT NULL,
  PRIMARY KEY (`invoiceId`)
) ENGINE=InnoDB AUTO_INCREMENT=500 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-29  0:55:53
