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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idProduto` int NOT NULL AUTO_INCREMENT,
  `nomeProduto` varchar(35) NOT NULL,
  `valorProduto` float NOT NULL,
  `qtdProduto` int NOT NULL,
  `imgUrl` varchar(45) NOT NULL,
  `promocao` tinyint NOT NULL,
  `categoria_idCat` int NOT NULL,
  PRIMARY KEY (`idProduto`),
  KEY `fk_produto_categoria1_idx` (`categoria_idCat`),
  CONSTRAINT `fk_produto_categoria1` FOREIGN KEY (`categoria_idCat`) REFERENCES `categoria` (`idCat`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Red bull',12,20,'../uploads/relBull.jpg',0,1),(2,'Wisky buchanan',900,20,'../uploads/buchanan.png',1,1),(3,'Wisky Passaport',400,10,'../uploads/whiskyPassport.jpg',1,1),(4,'Gin Tanquery',700,50,'../uploads/ginTanqueray.jpg',1,1),(5,'Boss',1200,10,'../uploads/BossNight.jpg',1,5),(6,'Pasta de dente',12,10,'../uploads/colgate12.jpg',0,5),(7,'Creme Facial',150,10,'../uploads/cremeFacial.png',1,5),(8,'Desodorante Rexona',11,10,'../uploads/rexonaV8.png',0,5),(9,'Perfume One Milion',1500,10,'../uploads/oneMillion.jpg',1,5),(10,'Bisteca',50,10,'../uploads/bisteca.jpg',0,3),(11,'Manteiga',8,10,'../uploads/margarinaQualy.jpg',0,3),(12,'Batata frita',15,10,'../uploads/batataFrita.jpg',0,3),(13,'Costela',60,10,'../uploads/costela.png',1,3),(14,'Queijo Cuia',150,10,'../uploads/queijoCuia.png',1,3),(15,'Amora',40,10,'../uploads/amora.png',1,2),(16,'Pitaya',30,10,'../uploads/pitaya.jpg',1,2),(17,'Morango',30,10,'../uploads/morango.jpg',1,2),(18,'Kiwi',20,10,'../uploads/kiwi.jpg',0,2),(19,'Melancia',15,10,'../uploads/melancia.jpg',0,2),(20,'Bolo decorado',110,10,'../uploads/boloBrigadeiro.jpg',1,4),(21,'Caixa de chocolate ',15,10,'../uploads/CaixaLacta.jpg',1,4),(22,'Biscoito Passa tempo',6,10,'../uploads/PassaTempo.jpg',1,4),(23,'Donuts',2,10,'../uploads/donuts.jpg',1,4),(24,'P?o de Hamburger',3,10,'../uploads/paoHambuger.jpg',0,4),(25,'Mop Limpeza',50,10,'../uploads/mop.jpg',1,6),(26,'Aromatizante',60,10,'../uploads/aromatizadorEletrico.jpg',1,6),(27,'Lisoform',40,10,'../uploads/lisoform.jpg',1,6),(28,'Amaciante Downy',20,10,'../uploads/AmacianteDowny.jpg',0,6),(29,'Germinicida ',26,10,'../uploads/germicida.jpg',0,6),(30,'Vanish',10,10,'../uploads/vanish.jpg',0,6),(31,'Maracuja',4,10,'../uploads/maracuja.jpg',0,2);
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

-- Dump completed on 2021-06-16 19:34:25
