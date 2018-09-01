-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2016 às 05:48
-- Versão do servidor: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `cpf` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `endereco` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`codigo`, `nome`, `cpf`, `email`, `endereco`) VALUES
(5, 'Luigi Martins Belchior', '000.000.000-00', 'luigi.martins.35@hotmail.com', 'Rua da Serra n° 113'),
(6, 'Marileide Martins Belchiior', '000.000.000-00', 'marileide.martins@outlook.com', 'Rua da glória n° 223');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `codigo` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `valor` decimal(4,0) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`codigo`, `titulo`, `genero`, `valor`, `status`) VALUES
(6, 'O gato de botas', 'Animação', '8', 'Disponível'),
(7, 'O boneco do mal', 'Terror', '12', 'Disponível'),
(9, 'A culpa é das estrelas', 'Drama', '10', 'Danificado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `locacao`
--

CREATE TABLE `locacao` (
  `codigo` int(11) NOT NULL,
  `dataLocacao` date NOT NULL,
  `dataDevolucao` datetime NOT NULL,
  `nomeFilme` varchar(45) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `locacao`
--

INSERT INTO `locacao` (`codigo`, `dataLocacao`, `dataDevolucao`, `nomeFilme`, `nomeCliente`) VALUES
(16, '2016-10-10', '2016-10-13 00:00:00', 'O gato de botas', 'Marileide martins'),
(17, '2016-10-08', '2016-10-12 00:00:00', 'O boneco do mal', 'Luigi Martins Belchior');

-- --------------------------------------------------------

--
-- Estrutura da tabela `luigibelchior`
--

CREATE TABLE `luigibelchior` (
  `codigo` int(11) NOT NULL,
  `primeiroNome` varchar(45) NOT NULL,
  `ultimoNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `luigibelchior`
--

INSERT INTO `luigibelchior` (`codigo`, `primeiroNome`, `ultimoNome`) VALUES
(3, 'Luigi ', 'Belchior'),
(4, 'Marileide', 'Belchior'),
(5, 'Levi', 'Belchior'),
(6, 'Maria', 'Belchior');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `locacao`
--
ALTER TABLE `locacao`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `luigibelchior`
--
ALTER TABLE `luigibelchior`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `filme`
--
ALTER TABLE `filme`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `locacao`
--
ALTER TABLE `locacao`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `luigibelchior`
--
ALTER TABLE `luigibelchior`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
