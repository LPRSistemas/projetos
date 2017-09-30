-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Out-2017 às 00:40
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concurso_bm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formulario`
--

CREATE TABLE `formulario` (
  `id_inscricao` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rep_legal` varchar(50) DEFAULT NULL,
  `cpf_rl` int(11) DEFAULT NULL,
  `dia_vencimento` int(11) NOT NULL,
  `primeira_parcela` varchar(50) NOT NULL,
  `valor_insc` float NOT NULL,
  `forma_pgto_insc` varchar(50) NOT NULL,
  `num_parcelas` int(2) NOT NULL,
  `valor_parcelas` float NOT NULL,
  `forma_pgto_parc` varchar(50) NOT NULL,
  `valor_md` int(11) NOT NULL COMMENT 'Valor material didático',
  `forma_pgto_md` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_inscricao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_inscricao` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
