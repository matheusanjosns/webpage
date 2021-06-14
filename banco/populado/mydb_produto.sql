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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(35) NOT NULL,
  `valorProduto` float NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `imgUrl` varchar(45) NOT NULL,
  `promocao` tinyint(4) NOT NULL,
  `categoria_idCat` int(11) NOT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `fk_produto_categoria1_idx` (`categoria_idCat`),
  CONSTRAINT `fk_produto_categoria1` FOREIGN KEY (`categoria_idCat`) REFERENCES `categoria` (`idCat`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (15,'Coca-cola Lata',3,50,'../uploads/CocaLata.jpg',0,1),(16,'Black Label',150,15,'../uploads/blackLabel.jpg',1,1),(17,'Colgate Total 12',5,80,'../uploads/colgate12.jpg',0,5),(18,'Boss Nigth',200,50,'../uploads/BossNight.jpg',1,5),(19,'Batata Frita Sadia',18,20,'../uploads/batataFrita.jpg',0,3),(20,'Queijo Cuia',100,10,'../uploads/queijoCuia.png',1,3),(21,'Abacaxi',3,25,'../uploads/abacaxi.png',0,2),(22,'Kiwi',10,50,'../uploads/kiwi.jpg',1,2),(23,'Álcool 70',7,40,'../uploads/alcol 70.jpg',0,6),(24,'Amaciante Confort',15,10,'../uploads/amacianteConfort.jpg',1,6),(25,'Bolo Recheado',55,2,'../uploads/boloBrigadeiro.jpg',1,4),(26,'Caixa de Bombom Lacta',10,10,'../uploads/CaixaLacta.jpg',0,4);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-06-14 17:17:12
