-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/05/2023 às 21:41
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `formularioparte1`
--

CREATE TABLE `formularioparte1` (
  `id` int(11) NOT NULL,
  `nome_pet` varchar(100) NOT NULL,
  `foto_pet` varchar(100) DEFAULT NULL,
  `idade` int(11) NOT NULL,
  `peso` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `formularioparte2`
--

CREATE TABLE `formularioparte2` (
  `id` int(11) NOT NULL,
  `temperatura_corporal` float NOT NULL,
  `batimentos_cardiacos` int(11) NOT NULL,
  `nivel_atividade` varchar(10) NOT NULL,
  `nivel_hidratacao` varchar(10) NOT NULL,
  `formulario_parte1_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `formularioparte1`
--
ALTER TABLE `formularioparte1`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `formularioparte2`
--
ALTER TABLE `formularioparte2`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formulario_parte1_id` (`formulario_parte1_id`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `formularioparte2`
--
ALTER TABLE `formularioparte2`
  ADD CONSTRAINT `formularioparte2_ibfk_1` FOREIGN KEY (`formulario_parte1_id`) REFERENCES `formularioparte1` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
