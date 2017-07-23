-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 24/07/2017 às 00:19
-- Versão do servidor: 10.1.25-MariaDB
-- Versão do PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sisfinanceiro`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contas_pagar`
--

CREATE TABLE `contas_pagar` (
  `id`        INT(11)      NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `valor`     FLOAT        NOT NULL,
  `data`      DATE         NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `id`        INT(11)      NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `valor`     FLOAT        NOT NULL,
  `data`      DATE         NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 0;
--
-- AUTO_INCREMENT de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 0;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
