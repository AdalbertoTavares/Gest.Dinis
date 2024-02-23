-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 23-Fev-2024 às 13:38
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestd.dinis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `AdminID` int NOT NULL,
  `Nome` varchar(200) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `admins`
--

INSERT INTO `admins` (`AdminID`, `Nome`, `Email`, `Password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hardware`
--

DROP TABLE IF EXISTS `hardware`;
CREATE TABLE IF NOT EXISTS `hardware` (
  `HardwareId` int NOT NULL AUTO_INCREMENT,
  `Estado` varchar(25) DEFAULT NULL,
  `Obs` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`HardwareId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `ProfId` int NOT NULL AUTO_INCREMENT,
  `UserName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Estado` int NOT NULL DEFAULT '0',
  `Email` varchar(255) NOT NULL,
  `NumeroFuncionario` int NOT NULL,
  PRIMARY KEY (`ProfId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`ProfId`, `UserName`, `Password`, `Estado`, `Email`, `NumeroFuncionario`) VALUES
(1, 'MD', '1234', 1, 'md@gmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservas`
--

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE IF NOT EXISTS `reservas` (
  `ReservaId` int NOT NULL AUTO_INCREMENT,
  `ProfId` int NOT NULL,
  `HardwareId` int NOT NULL,
  `DataInicio` datetime NOT NULL,
  `DataFim` datetime NOT NULL,
  `Tempo` int DEFAULT NULL,
  `TurmaId` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ReservaId`),
  KEY `ProfId` (`ProfId`),
  KEY `HardwareId` (`HardwareId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
