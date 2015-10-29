-- MySQL dump 10.13  Distrib 5.6.24, for osx10.8 (x86_64)
--
-- Host: 127.0.0.1    Database: comperio
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL COMMENT '	',
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (8,'brandon','brandonin@me.com','12345678','21'),(9,'Darrick','Darrick@gak.com','password','35'),(10,'Mickey','Mickey@mouse.disney','12345678','101'),(11,'chris','chris@gmail.com','12345678','21'),(12,'sadfdas','sadfsd@sdafdsafsda.com','12345678','21'),(13,'sadfj','sdfljaslk@sdfasd.com','12345678','21'),(14,'sadfj','sdfljaslk@sdfad.com','12345678','21'),(15,'sdfsdaf','sdsadf@sdafdas.com','12345678','21'),(16,'sdfasdf','sdfaesdf@gmail.com','12345678','21'),(17,'sdfasdf','sdfaesdf@gmil.com','12345678','21'),(18,'sdfasdf','sdfaesdf@gil.com','12345678','21'),(19,'sdfasdf','sdfaesdf@gil.co','12345678','21'),(20,'fsdafsdaf','sdfjsadjk@sdafasdf.com','12345678','21'),(21,'steven','slstevenlam@gmail.com','asdfasdf','27'),(22,'steven','slstevenlam@gmal.com','12345678','27'),(23,'steven','slstevenlam@gmal.co','12345678','27'),(24,'chris','sdflkjsadlfk@sdafsda.com','12345678','21'),(25,'dsafkldsajf','brandon@sfadsjkflsdk.com','12345678','21'),(26,'chris','chris@me.com','12345678','21'),(27,'brandon','fasdklfjsldk@sadfdsa.com','12345678','21'),(28,'hello','hello@world.com','12345678','21'),(29,'herro','herro@world.com','12345678','21'),(30,'herro','herro@world.co','12345678','21'),(31,'herro','herro@world.c','12345678','21'),(32,'veasdvsadfds','sfd@fsadfs.ccds','12345678','21'),(33,'bsdfsdaf','sdfsda@sdafdsaf.com','12345678','21'),(34,'bsdfsdaf','sdfsda@sdafsaf.com','12345678','21');
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

-- Dump completed on 2015-10-25  4:19:12
