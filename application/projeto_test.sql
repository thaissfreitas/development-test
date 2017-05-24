-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Maio-2017 às 17:52
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_test`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `idPedido` int(11) NOT NULL,
  `dataHora` datetime NOT NULL,
  `valorTotalPedido` double(18,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`idPedido`, `dataHora`, `valorTotalPedido`) VALUES
(1, '2017-05-24 17:51:01', 760.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidoitens`
--

CREATE TABLE `pedidoitens` (
  `idPedidoItens` int(11) NOT NULL,
  `idPedido` int(10) NOT NULL,
  `idProduto` int(10) NOT NULL,
  `valor` double(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidoitens`
--

INSERT INTO `pedidoitens` (`idPedidoItens`, `idPedido`, `idProduto`, `valor`) VALUES
(1, 1, 1, 500.00),
(2, 1, 4, 40.00),
(3, 1, 2, 200.00),
(4, 1, 3, 20.00);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int(10) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `preco` double(18,2) NOT NULL DEFAULT '0.00',
  `quantEstoque` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `descricao`, `preco`, `quantEstoque`) VALUES
(1, 'Televisão', 500.00, 148),
(2, 'Contro PS4', 200.00, 97),
(3, 'Mouse', 20.00, 177),
(4, 'Teclado', 40.00, 63);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indexes for table `pedidoitens`
--
ALTER TABLE `pedidoitens`
  ADD PRIMARY KEY (`idPedidoItens`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pedidoitens`
--
ALTER TABLE `pedidoitens`
  MODIFY `idPedidoItens` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
