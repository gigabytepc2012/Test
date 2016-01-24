-- MySQL dump 10.13  Distrib 5.5.20, for Win32 (x86)
--
-- Host: localhost    Database: cpsdb
-- ------------------------------------------------------
-- Server version	5.5.20-log

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
-- Table structure for table `pay_records`
--

DROP TABLE IF EXISTS `pay_records`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pay_records` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` int(24) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pay_records`
--

LOCK TABLES `pay_records` WRITE;
/*!40000 ALTER TABLE `pay_records` DISABLE KEYS */;
/*!40000 ALTER TABLE `pay_records` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_studreg`
--

DROP TABLE IF EXISTS `tbl_studreg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_studreg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(24) NOT NULL,
  `mname` varchar(24) NOT NULL,
  `lname` varchar(24) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `bday` date NOT NULL,
  `jdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_studreg`
--

LOCK TABLES `tbl_studreg` WRITE;
/*!40000 ALTER TABLE `tbl_studreg` DISABLE KEYS */;
INSERT INTO `tbl_studreg` VALUES (1,'Sample','','Example','0','0000-00-00','0000-00-00'),(2,'Test','','Test','0','0000-00-00','0000-00-00'),(3,'Test02','','Test02','0','0000-00-00','0000-00-00'),(4,'value','','valu','0','0000-00-00','0000-00-00'),(5,'asd','dasdasd','fasfsadfa','a','0000-00-00','0000-00-00'),(6,'asd','dasdasd','fasfsadfa','a','0000-00-00','0000-00-00');
/*!40000 ALTER TABLE `tbl_studreg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tuition`
--

DROP TABLE IF EXISTS `tbl_tuition`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_tuition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sy` int(11) NOT NULL,
  `entrance` int(11) NOT NULL,
  `tuition` int(11) NOT NULL,
  `misc` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tuition`
--

LOCK TABLES `tbl_tuition` WRITE;
/*!40000 ALTER TABLE `tbl_tuition` DISABLE KEYS */;
INSERT INTO `tbl_tuition` VALUES (1,0,0,0,0),(2,2012,22222,4444,55555),(3,2012,22222,4444,55555);
/*!40000 ALTER TABLE `tbl_tuition` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL,
  `name` varchar(32) NOT NULL,
  `verify` int(1) NOT NULL,
  `email` varchar(24) NOT NULL,
  `datej` date NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (1,'admin','admin','admin',1,'admin@test.user','0000-00-00',0),(2,'user','user','user',0,'user@test.user','0000-00-00',0);
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-24 11:49:28
