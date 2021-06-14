-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pedidos` (
  `idpedido` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_cpfUser` varchar(35) NOT NULL,
  `dataHora` datetime NOT NULL,
  `valorTotal` float NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `dataEntrega` datetime DEFAULT NULL,
  `avaliacao` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `fk_pedidos_usuarios1_idx` (`usuarios_cpfUser`),
  CONSTRAINT `fk_pedidos_usuarios1` FOREIGN KEY (`usuarios_cpfUser`) REFERENCES `usuarios` (`cpfUser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pedidos`
--

LOCK TABLES `pedidos` WRITE;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` VALUES (1,'2','2021-06-13 17:46:56',254,'Em PreparaÃ§Ã£o',NULL,NULL),(2,'2','2021-06-13 17:49:29',254,'Em PreparaÃ§Ã£o',NULL,NULL),(3,'2','2021-06-13 17:55:04',254,'Entregue','2021-06-14 02:55:32','\'Excelente\''),(4,'2','2021-06-13 17:57:19',254,'Em transito',NULL,NULL),(5,'2','2021-06-13 18:01:29',254,'Preparando',NULL,NULL),(6,'2','2021-06-13 18:02:46',254,'Preparando',NULL,NULL),(7,'2','2021-06-13 18:14:50',254,'Preparando',NULL,NULL),(8,'2','2021-06-13 18:20:29',254,'Preparando',NULL,NULL),(9,'2','2021-06-13 18:21:06',254,'Preparando',NULL,NULL),(10,'2','2021-06-13 18:40:27',254,'Preparando',NULL,NULL),(11,'2','2021-06-13 18:48:11',0,'Preparando',NULL,NULL),(12,'2','2021-06-14 19:49:04',44,'Preparando',NULL,NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-14 17:17:11
