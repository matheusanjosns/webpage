-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.21

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
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `cpfUser` varchar(35) NOT NULL,
  `nomeUser` varchar(35) NOT NULL,
  `senhaUser` varchar(35) NOT NULL,
  `emailUser` varchar(35) NOT NULL,
  `dataNasc` date NOT NULL,
  `permissaoUser` varchar(35) NOT NULL,
  `endereco` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  PRIMARY KEY (`cpfUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('111.111.111-11','MARCOS','123','marcos@hotmail.com','1990-05-12','ADM','Vila Tiradentes','BA','Salvador','São Caetano','40391318'),('111.111.111-12','Fernando','123','fernando@hotmail.com','1995-05-12','CLIENTE','Vila Tiradentes','BA','Salvador','São Caetano','40391318'),('111.111.111-13','Luana','123','luana@hotmail.com','1996-11-11','SEPARADOR','Vila Tiradentes','BA','Salvador','São Caetano','40391318'),('111.111.111-14','Xavier','123','xavier@hotmail.com','1998-12-12','ENTREGADOR','','','','','40391318'),('111.111.111-15','Fabio','123','fabio@hotmail.com','1111-11-11','CLIENTE','Vila Tiradentes','BA','Salvador','São Caetano','40391318'),('111.111.111-16','Ana','123','ana@hotmail.com','2000-11-11','CLIENTE','Vila Tiradentes','BA','Salvador','São Caetano','40391318'),('444.444.444-44','ana','123','ana@hotmail.com','2100-02-22','CLIENTE','Vila Tiradentes','BA','Salvador','São Caetano','40391318');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-16 19:34:25
