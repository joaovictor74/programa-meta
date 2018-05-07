-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Maio-2018 às 02:20
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `presidio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agente`
--

CREATE TABLE IF NOT EXISTS `agente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(14) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `funcao` varchar(60) NOT NULL,
  `local` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `agente`
--

INSERT INTO `agente` (`id`, `matricula`, `nome`, `funcao`, `local`) VALUES
(1, 21, '21', '21', '12'),
(2, 2, 'teste', 'teste2', 'testee2'),
(3, 1, '0002', '00330', '3120'),
(4, 213123, '123123', '123123', '123123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE IF NOT EXISTS `funcao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `funcao` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `local`
--

CREATE TABLE IF NOT EXISTS `local` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `local` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reeducando`
--

CREATE TABLE IF NOT EXISTS `reeducando` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `vulgo` varchar(60) NOT NULL,
  `nome_pai` varchar(60) NOT NULL,
  `nome_mae` varchar(60) NOT NULL,
  `cela` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `reeducando`
--

INSERT INTO `reeducando` (`id`, `nome`, `vulgo`, `nome_pai`, `nome_mae`, `cela`) VALUES
(1, 'chidoriman', 'pitombeira', 'marilan', 'pironba', '14-chelo'),
(2, 'chidoriman2', 'pitombeira2', 'marilan2', 'pironba2', '14-chelo2'),
(3, 'chidoriman23', 'pitombeira23', 'marilan23', 'pironba23', '14-chelo23'),
(4, 'porraaaa', 'joajaoajo', 'puripa', 'perpeu', 'Ced_ter'),
(5, 'teste 1', '', '', '', ''),
(6, 'nome 2', '', '', '', ''),
(7, 'nome 3', '', '', '', ''),
(8, '11', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
