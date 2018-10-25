CREATE DATABASE  IF NOT EXISTS `limit_car` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `limit_car`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: limit_car
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

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
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `cod_cli` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(85) DEFAULT NULL,
  `cpf` varchar(45) DEFAULT NULL,
  `uf` varchar(3) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `contato` varchar(85) DEFAULT NULL,
  `mod_vei` varchar(65) DEFAULT NULL,
  `ano_vei` varchar(45) DEFAULT NULL,
  `modalidade` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cod_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=855191 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `instalacao`
--

DROP TABLE IF EXISTS `instalacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `instalacao` (
  `cod_ins` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_cli` int(10) unsigned DEFAULT NULL,
  `data_soli` date DEFAULT NULL,
  `data_ins` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `data_ag` date DEFAULT NULL,
  PRIMARY KEY (`cod_ins`),
  KEY `fk_instalacao_cliente_idx` (`cod_cli`),
  CONSTRAINT `fk_instalacao_cliente` FOREIGN KEY (`cod_cli`) REFERENCES `cliente` (`cod_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `manutencao`
--

DROP TABLE IF EXISTS `manutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manutencao` (
  `cod_manut` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_cli` int(10) unsigned DEFAULT NULL,
  `data` date DEFAULT NULL,
  `obs` varchar(300) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `data_enc` date DEFAULT NULL,
  `data_ag` date DEFAULT NULL,
  PRIMARY KEY (`cod_manut`),
  KEY `fk_manutencao_cliente1_idx` (`cod_cli`),
  CONSTRAINT `fk_manutencao_cliente1` FOREIGN KEY (`cod_cli`) REFERENCES `cliente` (`cod_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `meta_ins`
--

DROP TABLE IF EXISTS `meta_ins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `meta_ins` (
  `mes` int(10) unsigned NOT NULL,
  `meta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`mes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `retirada`
--

DROP TABLE IF EXISTS `retirada`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `retirada` (
  `cod_ret` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cod_cli` int(10) unsigned DEFAULT NULL,
  `data_ret` date DEFAULT NULL,
  `data_soli` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `data_ag` date DEFAULT NULL,
  PRIMARY KEY (`cod_ret`),
  KEY `fk_retirada_cliente1_idx` (`cod_cli`),
  CONSTRAINT `fk_retirada_cliente1` FOREIGN KEY (`cod_cli`) REFERENCES `cliente` (`cod_cli`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(75) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-25 16:22:09
