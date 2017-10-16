-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Out-2017 às 18:37
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
-- Database: `sistema_foco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `id_inscricao` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero_casa` int(11) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rep_legal` varchar(50) DEFAULT NULL,
  `cpf_rl` varchar(50) DEFAULT NULL,
  `dia_vencimento` varchar(11) NOT NULL,
  `primeira_parcela` varchar(50) NOT NULL,
  `valor_insc` float NOT NULL,
  `forma_pgto_insc` varchar(50) NOT NULL,
  `num_parcelas` int(2) NOT NULL,
  `valor_parcelas` float NOT NULL,
  `forma_pgto_parc` varchar(50) NOT NULL,
  `valor_md` float NOT NULL COMMENT 'Valor material didático',
  `forma_pgto_md` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `login_sistema`
--

CREATE TABLE `login_sistema` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `login_sistema`
--

INSERT INTO `login_sistema` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tratar_dados`
--

CREATE TABLE `tratar_dados` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero_casa` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `rep_legal` varchar(50) NOT NULL,
  `cpf_rl` varchar(50) NOT NULL,
  `dia_vencimento` varchar(50) NOT NULL,
  `primeira_parcela` varchar(50) NOT NULL,
  `valor_insc` float NOT NULL,
  `forma_pgto_insc` varchar(50) NOT NULL,
  `num_parcelas` int(11) NOT NULL,
  `valor_parcelas` float NOT NULL,
  `forma_pgto_parc` varchar(50) NOT NULL,
  `valor_md` float NOT NULL,
  `forma_pgto_md` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id_inscricao`);

--
-- Indexes for table `login_sistema`
--
ALTER TABLE `login_sistema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tratar_dados`
--
ALTER TABLE `tratar_dados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id_inscricao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_sistema`
--
ALTER TABLE `login_sistema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tratar_dados`
--
ALTER TABLE `tratar_dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
