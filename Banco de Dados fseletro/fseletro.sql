-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Nov-2020 às 20:49
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `mensagem` varchar(300) NOT NULL,
  `data` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `nome`, `mensagem`, `data`) VALUES
(75, 'Patricia Torres', 'Olá, tudo bem?', '2020-11-03 16:43:24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja`
--

CREATE TABLE `loja` (
  `id` int(11) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `loja`
--

INSERT INTO `loja` (`id`, `cidade`, `endereco`, `complemento`, `bairro`, `telefone`) VALUES
(1, 'Rio de Janeiro', 'Avenida Presidente Vargas, 5000', '10 º andar', 'Centro', '(21) 3333-3333'),
(2, 'São Paulo', 'Avenida Paulista, 985', '3 º andar', 'Jardins', '(11) 4444-4444'),
(3, 'Santa Catarina', 'Rua Major Ávila, 370', '-', 'Vila Mariana', '(47) 5555-5555');

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
(1, 'geladeira', 'Geladeira Frost Free Brastemp Side Inverse 540 Litros', 6389, 5019, './img/produtos/geladeira_brastemp.JPG'),
(2, 'geladeira', 'Geladeira Frost Free Brastemp Branca 375 Litros', 2068.68, 1910.9, './img/produtos/geladeira_brastemp_branca.JPG'),
(3, 'geladeira', 'Geladeira Frost Free Consul Prata 340 Litros', 2199.9, 2069, './img/produtos/geladeira_consul.JPG'),
(4, 'fogao', 'Fogão 4 Bocas Consul Inox com Mesa de Vidro', 1209.99, 1129, './img/produtos/fogao_consul.JPG'),
(5, 'fogao', 'Fogão de Piso 4 Bocas Atlas Monaco com Acendimento Automático', 600, 519.7, './img/produtos/fogao_atlas_branco.JPG'),
(6, 'microondas', 'Microondas Consul 32 Litros Inox 220V', 580.99, 409.88, './img/produtos/microondas_consul.JPG'),
(7, 'microondas', 'Microondas 25L Espelhado Philco 220V', 5080.7, 464.53, './img/produtos/microondas_espelhado.JPG'),
(8, 'microondas', 'Forno de Microondas Eletrolux 20L Branco', 459.99, 436.05, './img/produtos/microondas_branco.JPG'),
(9, 'lavaLoucas', 'Lava-Louças Eletolux Inox com 10 Serviços. 06 Programas de Lavagem e Painel Blue Touch', 3599, 2799.9, './img/produtos/lava_loucas_eletrolux.JPG'),
(10, 'lavaLoucas', 'Lava-Louças Compacta 8 Serviços Branca 127V Brastemp', 1970.5, 1730.61, './img/produtos/lava_louca_brastemp.JPG'),
(11, 'lavaRoupas', 'Lavadora de Roupas Philco Inverter 12kg', 2399.9, 2179.9, './img/produtos/lavadora_philco.JPG'),
(12, 'lavaRoupas', 'Lavadora de Roupas Brastemp 11kg com Turbo Performance Branca', 1699, 1214.1, './img/produtos/lavadora_brastemp.JPG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `loja`
--
ALTER TABLE `loja`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT de tabela `loja`
--
ALTER TABLE `loja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
