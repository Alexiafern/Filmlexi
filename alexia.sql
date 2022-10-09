-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Ago-2022 às 10:50
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `alexia`
--
CREATE DATABASE IF NOT EXISTS `alexia` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `alexia`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alexia_receber`
--

DROP TABLE IF EXISTS `alexia_receber`;
CREATE TABLE IF NOT EXISTS `alexia_receber` (
  `id_senha` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(100) COLLATE utf8_bin NOT NULL,
  `senha` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL,
  PRIMARY KEY (`id_senha`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme_receber`
--

DROP TABLE IF EXISTS `filme_receber`;
CREATE TABLE IF NOT EXISTS `filme_receber` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_bin NOT NULL,
  `sinop` varchar(1000) COLLATE utf8_bin NOT NULL,
  `arquivo` varchar(100) COLLATE utf8_bin NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `filme_receber`
--

INSERT INTO `filme_receber` (`id`, `nome`, `sinop`, `arquivo`, `data`) VALUES
(1, 'ghr', 'ryhrh', 'aladdin.jpg', '2022-08-29 09:41:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabela_alexia`
--

DROP TABLE IF EXISTS `tabela_alexia`;
CREATE TABLE IF NOT EXISTS `tabela_alexia` (
  `id_senha` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(500) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_senha`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `tabela_alexia`
--

INSERT INTO `tabela_alexia` (`id_senha`, `login`, `senha`) VALUES
(1, 'dieimes', '$2y$10$Y8R4B/t9wkNKtB.DGuBAC.8XXJjPvs81J6h6yQnaAs1xMosBmmpnG'),
(2, 'dieimes2', '$2y$10$OLj/S3APG.rYfDhbZUjInOt9MkMWqzEQN4iv5sI2ARTAcdm.MMNZa'),
(3, 'alexia', '$2y$10$UY1bhlJzqH6LyzvrhzyGE.KfjbwrhuA8nRkKIKx7DgGglwx.4qhu2'),
(4, 'Alexia', '$2y$10$23ijJPgR76v3ygMt3X0NP.iikhodYLiJXuPMkiGAIxKOhtGFyYOi6'),
(5, 'Ana', '$2y$10$6tVGssVI3JVP0XRVKp.FuOAYD1eIYIF6blQRc7pHkOpkhol/Zc34S'),
(6, 'Ana', '$2y$10$xsGMq8V9D/fEkI3CTs7xpe7MWuqmlbJtc/a2KVMPHvFQt4B22jLwC'),
(7, 'Rafaela', '$2y$10$UwIa3PBhW4LrPzPd2V41b.kkRj4StUCTLQ/A0FFw3IoTUq/O9d4Gq'),
(8, 'v', '$2y$10$5P4Rgolq2OMpHThckOblkeJSpg0AlxGKXVJNmCtqBf/xwfP8jY2.2'),
(9, 'v', '$2y$10$zU1H9wcytMVkzqnpuQfI/uAYG3p1yKSLXbGQ6e1UMcy8FVzAdw2O6'),
(10, 'Sofia', '$2y$10$B3R61.S5bphe6.Nd4i9piucKdUtKRkLSqPVvtSBhrgN4C9hPluNOK'),
(11, 'Alexia', '$2y$10$kqnizFs/16FhUM6MlD7Lg..8Igs40R.L3l4h5Cj.ufWBi6EGX4Kru'),
(12, 'batatinha', '$2y$10$LXGWY1.AMXCI.nIrs6/.ou5uHHkE1/afE7OfKeR9nTZItrY5M0Sg.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
