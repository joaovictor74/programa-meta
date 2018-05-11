-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 11-Maio-2018 às 17:38
-- Versão do servidor: 5.7.21-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presidio`
--
CREATE DATABASE IF NOT EXISTS `presidio` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `presidio`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agente`
--

DROP TABLE IF EXISTS `agente`;
CREATE TABLE IF NOT EXISTS `agente` (
  `matricula` int(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `funcao` varchar(60) NOT NULL,
  `local` varchar(255) NOT NULL,
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agente`
--

INSERT INTO `agente` (`matricula`, `nome`, `funcao`, `local`) VALUES
(20053, 'Agente Inspecao', 'Agente', 'Pavilhao-A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

DROP TABLE IF EXISTS `funcao`;
CREATE TABLE IF NOT EXISTS `funcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcao`
--

INSERT INTO `funcao` (`id`, `funcao`) VALUES
(2, 'Medico'),
(3, 'Agente'),
(4, 'Cazé');

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

DROP TABLE IF EXISTS `local`;
CREATE TABLE IF NOT EXISTS `local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `local`
--

INSERT INTO `local` (`id`, `local`) VALUES
(1, 'Pavilhao-A'),
(13, 'Pavilhao-B'),
(14, 'Pavilhao-C');

-- --------------------------------------------------------

--
-- Estrutura da tabela `reeducando`
--

DROP TABLE IF EXISTS `reeducando`;
CREATE TABLE IF NOT EXISTS `reeducando` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `vulgo` varchar(60) NOT NULL,
  `nome_mae` varchar(60) NOT NULL,
  `nome_pai` varchar(60) NOT NULL,
  `cela` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `reeducando`
--

INSERT INTO `reeducando` (`id`, `nome`, `vulgo`, `nome_mae`, `nome_pai`, `cela`) VALUES
(14, 'Daniel das Ideia', 'Via dhin', 'Mae', 'Pai', 'Cela Rosa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(30) NOT NULL,
  `senha` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'joao', '202cb962ac59075b964b07152d234b70'),
(2, 'MEOW', '035466283a3b0c16f87041e2cf843f08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
