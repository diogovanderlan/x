-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 27-Nov-2018 às 01:54
-- Versão do servidor: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eusei`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'amor'),
(2, 'Educaçao'),
(3, 'Historia'),
(4, 'Marketing'),
(5, 'Outros'),
(6, 'Ficção'),
(7, 'Clarqui Quente'),
(8, 'Administrador'),
(9, 'Usuario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

DROP TABLE IF EXISTS `curtidas`;
CREATE TABLE IF NOT EXISTS `curtidas` (
  `idUsuario` int(11) NOT NULL,
  `idResposta` int(11) NOT NULL,
  `curtida` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`,`idResposta`),
  KEY `fk3_idx` (`idUsuario`),
  KEY `fk4_idx` (`idResposta`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Estrutura da tabela `denunciarpergunta`
--

DROP TABLE IF EXISTS `denunciarpergunta`;
CREATE TABLE IF NOT EXISTS `denunciarpergunta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `idPergunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk17_idx` (`idPergunta`),
  KEY `fk18_idx` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


-- Estrutura da tabela `denunciarresposta`
--

DROP TABLE IF EXISTS `denunciarresposta`;
CREATE TABLE IF NOT EXISTS `denunciarresposta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `idResposta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk7_idx` (`idResposta`),
  KEY `fk8_idx` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



--
-- Estrutura da tabela `pergunta`
--

DROP TABLE IF EXISTS `pergunta`;
CREATE TABLE IF NOT EXISTS `pergunta` (
  `idPergunta` int(11) NOT NULL AUTO_INCREMENT,
  `pergunta` text NOT NULL,
  `data` date NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  PRIMARY KEY (`idPergunta`),
  KEY `fk1_idx` (`idUsuario`),
  KEY `fk2_idx` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;



--
-- Estrutura da tabela `resposta`
--

DROP TABLE IF EXISTS `resposta`;
CREATE TABLE IF NOT EXISTS `resposta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resposta` text NOT NULL,
  `idPergunta` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk11_idx` (`idUsuario`),
  KEY `fk12_idx` (`idPergunta`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;



--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `dataNasc` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `dataCad` date NOT NULL,
  `ativo` enum('Sim','Nao') NOT NULL,
  `tipo` enum('usu','adm','esp') NOT NULL,
  `idcategoria` int(11) DEFAULT NULL,
  `login` varchar(60) NOT NULL,
  `senha` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk13_idx` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;



--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `curtidas`
--
ALTER TABLE `curtidas`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk4` FOREIGN KEY (`idResposta`) REFERENCES `resposta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `denunciarpergunta`
--
ALTER TABLE `denunciarpergunta`
  ADD CONSTRAINT `fk17` FOREIGN KEY (`idPergunta`) REFERENCES `pergunta` (`idPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk18` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `denunciarresposta`
--
ALTER TABLE `denunciarresposta`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`idResposta`) REFERENCES `resposta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pergunta`
--
ALTER TABLE `pergunta`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk2` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `fk11` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk12` FOREIGN KEY (`idPergunta`) REFERENCES `pergunta` (`idPergunta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk13` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
