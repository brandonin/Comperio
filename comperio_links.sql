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
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `link` varchar(255) DEFAULT NULL,
  `interest_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_links_interests1_idx` (`interest_id`),
  CONSTRAINT `fk_links_interests1` FOREIGN KEY (`interest_id`) REFERENCES `interests` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `links`
--

LOCK TABLES `links` WRITE;
/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` VALUES (1,'http://www.29a.ch/sandbox/2011/neonflames/',1),(2,'http://www.bbc.com/earth/story/20141016-your-life-on-earth?ocid',1),(3,'http://www.htwins.net/scale2/',1),(4,'http://www.koalastothemax.com/?aHR0cDovL3d3dy5hbWlyaWdodC5jb20vYWxidW0tY292ZXItdGhlbWVzL2ltYWdlcy9hbGJ1bS1CcmFuZC1OZXctRGVqYS1FbnRlbmR1LmpwZw==',3),(5,'http://www.nathanfriend.io/inspirograph',3),(6,'http://www.thisiscolossal.com/2014/11/architectural-landmarks-created-with-bicycle-tire-tracks-by-thomas-yang',3),(7,'http://www.buzzfeed.com/expresident/21-amazing-examples-of-shadow-art',3),(8,'http://www.worldometers.info',2),(9,'http://www.businessinsider.com/five-statistics-problems-that-will-change-the-way-you-see-the-world-2012-11?op=1',2),(10,'http://www.citylab.com/weather/2015/09/mighty-and-ominous-satellite-images-of-the-human-condition/407095',4),(11,'http://www.favrify.com/history-photos',4),(12,'https://www.archive.org/details/softwarelibrary_msdos',4),(13,'http://www.cloudsovercuba.com',4),(14,'http://www.greatschools.org/gk/articles/cb-extras-1-2-havecollegetalknow/',5),(15,'http://www.usnews.com/education/best-colleges/paying-for-college/articles/paying-for-college-infographic',5);
/*!40000 ALTER TABLE `links` ENABLE KEYS */;
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
