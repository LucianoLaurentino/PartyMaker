-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2022 às 01:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `partymanager`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `party`
--

CREATE TABLE `party` (
  `codeParty` bigint(20) NOT NULL,
  `hostName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `buffetValue` tinyint(4) NOT NULL,
  `deejayValue` smallint(6) NOT NULL,
  `decorationValue` smallint(6) NOT NULL,
  `waiterValue` smallint(6) NOT NULL,
  `cleaningValue` smallint(6) NOT NULL,
  `barmanValue` smallint(6) NOT NULL,
  `securityValue` smallint(6) NOT NULL,
  `guests` int(11) NOT NULL,
  `totalValue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`codeParty`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `party`
--
ALTER TABLE `party`
  MODIFY `codeParty` bigint(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
