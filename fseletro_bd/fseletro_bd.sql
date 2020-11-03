-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2020 às 16:03
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fseletro`
--

-- ---------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `mensagem` varchar(300) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `mensagem`, `data`) VALUES
(12, 'Patricia Torres', 'teste123', '2020-11-03 11:43:26'),
(13, 'Patrícia', 'Olá', '2020-11-03 11:43:40'),
(27, 'Patrícia ', '123', '2020-11-03 11:51:58'),
(28, 'Patrícia ', '123', '2020-11-03 11:52:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `imagem` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `categoria`, `descricao`, `preco`, `preco_venda`, `imagem`) VALUES
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 Litros', 6389, 5019, './img/produtos/geladeira_brastemp.jpeg'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 Litros', 2068.68, 1910.9, './img/produtos/geladeira_brastemp_branca.jpeg'),
(3, 'geladeira', 'Geladeira Frost Free Consul Prata 340 Litros', 2199.9, 2069, './img/produtos/geladeira_consul.jpeg'),
(4, 'fogão', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', 1209.99, 1129, './img/produtos/fogao_consul.jpeg'),
(5, 'fogão', 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático', 600, 519.7, './img/produtos/fogao_atlas_branco.jpeg'),
(6, 'microondas', 'Microondas Consul 32 Litros Inox 220V', 580.99, 409.88, './img/produtos/microondas_consul.jpeg'),
(7, 'microondas', 'Microondas 25L Espelhado Philco 220V', 5080.7, 464.53, './img/produtos/microondas_espelhado.jpeg'),
(8, 'microondas', 'Forno de Microondas Eletrolux 20L Branco', 459.99, 436.05, './img/produtos/microondas_branco.jpeg'),
(9, 'Lava-Louças', 'Lava-Louças Eletolux Inox com 10 Serviços. 06 Programas de Lavagem e Painel Blue Touch', 3599, 2799.9, './img/produtos/lava_loucas_eletrolux.jpeg'),
(10, 'Lava-Louças', 'Lava-Louças Compacta 8 Serviços Branca 127V Brastemp', 1970.5, 1730.61, './img/produtos/lava_louca_brastemp.jpeg'),
(11, 'Lava-Louças', 'Lavadora de Roupas Philco Inverter 12kg', 2399.9, 2179.9, './img/produtos/lavadora_philco.jpeg'),
(12, 'Lavadora de Roupas', 'Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca', 1699, 1214.1, './img/produtos/lavadora_brastemp.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
