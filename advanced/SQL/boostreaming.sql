-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: boostreaming
-- ------------------------------------------------------
-- Server version	5.7.13-log

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
-- Table structure for table `actores`
--

DROP TABLE IF EXISTS `actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actores` (
  `actor_id` int(11) NOT NULL AUTO_INCREMENT,
  `actor_nombre` varchar(100) NOT NULL DEFAULT 'Edgar Ordoñez Ruiz',
  PRIMARY KEY (`actor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actores`
--

LOCK TABLES `actores` WRITE;
/*!40000 ALTER TABLE `actores` DISABLE KEYS */;
INSERT INTO `actores` VALUES (1,'Salma Hayek'),(2,'Edward Norton'),(3,'Diego Luna'),(4,'asdsdsdsd');
/*!40000 ALTER TABLE `actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directores`
--

DROP TABLE IF EXISTS `directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directores` (
  `director_id` int(11) NOT NULL AUTO_INCREMENT,
  `director_nombre` varchar(100) NOT NULL DEFAULT 'Miguel Fernando Bobadilla Contreras',
  PRIMARY KEY (`director_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directores`
--

LOCK TABLES `directores` WRITE;
/*!40000 ALTER TABLE `directores` DISABLE KEYS */;
INSERT INTO `directores` VALUES (1,'Peter Jackson'),(2,'Christopher Nolan'),(3,'Guillermo del Toro'),(4,'Alejandro G. Iñarritu');
/*!40000 ALTER TABLE `directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas` (
  `pelicula_id` int(11) NOT NULL AUTO_INCREMENT,
  `pelicula_titulo` varchar(150) NOT NULL,
  `pelicula_sinopsis` text NOT NULL,
  `pelicula_ranking` float NOT NULL DEFAULT '0',
  `pelicula_duracion` int(11) NOT NULL,
  `pelicula_clasificacion` varchar(5) NOT NULL DEFAULT 'G',
  `pelicula_anio` year(4) NOT NULL,
  `pelicula_fechaAlta` date NOT NULL,
  `pelicula_url` text NOT NULL,
  `pelicula_portada` text NOT NULL,
  PRIMARY KEY (`pelicula_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas`
--

LOCK TABLES `peliculas` WRITE;
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` VALUES (1,'Bastardos sin gloria','Muchos tipos americanos matando nazis',0,150,'R',2010,'2016-11-16','peliucula',''),(2,'Yo Robot','Robot consiente le pone en la madre a todo',0,150,'PG-13',2006,'2016-11-16','peliucula',''),(3,'Kunfu Panda','Oso panda sabe karate',0,90,'G',2001,'2016-11-16','peliucula',''),(7,'eqewqewd','ascasca',0,30,'G',2016,'2016-11-17','peliculas/sin_titulo','portadas/sin_titulo');
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas_has_actores`
--

DROP TABLE IF EXISTS `peliculas_has_actores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas_has_actores` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `actores_actor_id` int(11) NOT NULL,
  PRIMARY KEY (`peliculas_pelicula_id`,`actores_actor_id`),
  KEY `fk_peliculas_has_actores_actores1_idx` (`actores_actor_id`),
  KEY `fk_peliculas_has_actores_peliculas1_idx` (`peliculas_pelicula_id`),
  CONSTRAINT `fk_peliculas_has_actores_actores1` FOREIGN KEY (`actores_actor_id`) REFERENCES `actores` (`actor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peliculas_has_actores_peliculas1` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas_has_actores`
--

LOCK TABLES `peliculas_has_actores` WRITE;
/*!40000 ALTER TABLE `peliculas_has_actores` DISABLE KEYS */;
INSERT INTO `peliculas_has_actores` VALUES (7,1),(7,4);
/*!40000 ALTER TABLE `peliculas_has_actores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas_has_categorias`
--

DROP TABLE IF EXISTS `peliculas_has_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas_has_categorias` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `categorias_categoria_id` int(11) NOT NULL,
  PRIMARY KEY (`peliculas_pelicula_id`,`categorias_categoria_id`),
  KEY `fk_peliculas_has_categorias_categorias1_idx` (`categorias_categoria_id`),
  KEY `fk_peliculas_has_categorias_peliculas_idx` (`peliculas_pelicula_id`),
  CONSTRAINT `fk_peliculas_has_categorias_categorias1` FOREIGN KEY (`categorias_categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peliculas_has_categorias_peliculas` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas_has_categorias`
--

LOCK TABLES `peliculas_has_categorias` WRITE;
/*!40000 ALTER TABLE `peliculas_has_categorias` DISABLE KEYS */;
/*!40000 ALTER TABLE `peliculas_has_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peliculas_has_directores`
--

DROP TABLE IF EXISTS `peliculas_has_directores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peliculas_has_directores` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `directores_director_id` int(11) NOT NULL,
  PRIMARY KEY (`peliculas_pelicula_id`,`directores_director_id`),
  KEY `fk_peliculas_has_directores_directores1_idx` (`directores_director_id`),
  KEY `fk_peliculas_has_directores_peliculas1_idx` (`peliculas_pelicula_id`),
  CONSTRAINT `fk_peliculas_has_directores_directores1` FOREIGN KEY (`directores_director_id`) REFERENCES `directores` (`director_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_peliculas_has_directores_peliculas1` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peliculas_has_directores`
--

LOCK TABLES `peliculas_has_directores` WRITE;
/*!40000 ALTER TABLE `peliculas_has_directores` DISABLE KEYS */;
/*!40000 ALTER TABLE `peliculas_has_directores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'mredgaror','Edgar','Ordoñez Ruiz','-1g7F_JFqkY6jKOXvXnyOU7NSsRkc2iv','$2y$13$iJacDX9RYax1o/iC22ew7Or50xmDwHvYeDzWar74ILp9y5KUl2nM6',NULL,'mredgaror@gmail.com',10,1479277227,1479277227,0);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-11-17 11:28:31
