-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 25-Fev-2024 às 21:01
-- Versão do servidor: 8.2.0
-- versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestdinis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `Id` int NOT NULL,
  `FullName` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `IsActive` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `employee`
--

INSERT INTO `employee` (`Id`, `FullName`, `IsActive`) VALUES
(1, 'Douglas Valdo', b'1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hardware`
--

DROP TABLE IF EXISTS `hardware`;
CREATE TABLE IF NOT EXISTS `hardware` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(500) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `IsAvailable` bit(1) NOT NULL DEFAULT b'1',
  `Observation` text,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `hardware`
--

INSERT INTO `hardware` (`Id`, `Name`, `IsAvailable`, `Observation`) VALUES
(1, 'Tablet AD24 Samsung', b'1', NULL),
(2, 'Telefone Xiomi A25', b'1', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `Id` int NOT NULL AUTO_INCREMENT,
  `EmployeeId` int NOT NULL,
  `HardwareId` int NOT NULL,
  `IsActive` int NOT NULL DEFAULT '1',
  `IsDeleted` bit(1) NOT NULL DEFAULT b'0',
  `StartDate` datetime NOT NULL,
  `EndDate` datetime NOT NULL,
  `Observation` text,
  PRIMARY KEY (`Id`),
  KEY `EmployeeId` (`EmployeeId`),
  KEY `HardwareId` (`HardwareId`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `reservation`
--

INSERT INTO `reservation` (`Id`, `EmployeeId`, `HardwareId`, `IsActive`, `IsDeleted`, `StartDate`, `EndDate`, `Observation`) VALUES
(1, 1, 1, 1, b'0', '2024-02-24 16:38:31', '2024-02-29 16:38:39', 'Sem observações');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
