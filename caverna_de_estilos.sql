-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Out-2023 às 23:50
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `caverna_de_estilos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_nome` varchar(30) NOT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_senha` varchar(16) NOT NULL,
  `admin_telefone` varchar(13) NOT NULL,
  `admin_foto` text,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nome`, `admin_email`, `admin_senha`, `admin_telefone`, `admin_foto`) VALUES
(14001, 'Admin', 'AdminCaverna@gmail.com', 'caverna', '+244934212345', 'adm_perfil.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_nome` varchar(30) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nome`) VALUES
(1, 'Caiçados'),
(2, 'Camisas'),
(3, 'Calções'),
(4, 'Casacos'),
(5, 'Blases'),
(6, 'Chapeus');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `cliente_id` int(11) NOT NULL,
  `cliente_nome` varchar(30) NOT NULL,
  `cliente_sobrenome` varchar(30) NOT NULL,
  `cliente_email` varchar(40) NOT NULL,
  `cliente_tel` varchar(13) NOT NULL,
  `cliente_senha` varchar(16) NOT NULL,
  `cliente_sexo` varchar(9) NOT NULL,
  `cliente_nasc` date NOT NULL,
  PRIMARY KEY (`cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`cliente_id`, `cliente_nome`, `cliente_sobrenome`, `cliente_email`, `cliente_tel`, `cliente_senha`, `cliente_sexo`, `cliente_nasc`) VALUES
(201, 'Jorge', 'Aderito', 'jorgeaderito@email.com', '+244923456734', 'JA012345', 'Masculino', '2002-11-27');

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

DROP TABLE IF EXISTS `enderecos`;
CREATE TABLE IF NOT EXISTS `enderecos` (
  `endereco_id` int(11) NOT NULL,
  `provincia` varchar(30) NOT NULL,
  `municipio` varchar(40) NOT NULL,
  `distrito` varchar(10) NOT NULL,
  `bairro` varchar(15) NOT NULL,
  `rua` varchar(15) NOT NULL,
  `casa` varchar(15) NOT NULL,
  PRIMARY KEY (`endereco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`endereco_id`, `provincia`, `municipio`, `distrito`, `bairro`, `rua`, `casa`) VALUES
(141, 'Luanda', 'Kilamba Kiaxi', 'Palanca', 'bairro S/Nome', 'Raua - F', 'Casa S/Nome');

-- --------------------------------------------------------

--
-- Estrutura da tabela `loja_virtual`
--

DROP TABLE IF EXISTS `loja_virtual`;
CREATE TABLE IF NOT EXISTS `loja_virtual` (
  `endereco_id` int(11) NOT NULL,
  `loja_nome` varchar(40) NOT NULL,
  `loja_logo` varchar(10) NOT NULL,
  `loja_foto_logo` varchar(255) NOT NULL,
  `loja_decricao` text NOT NULL,
  PRIMARY KEY (`endereco_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `loja_virtual`
--

INSERT INTO `loja_virtual` (`endereco_id`, `loja_nome`, `loja_logo`, `loja_foto_logo`, `loja_decricao`) VALUES
(141, 'Caverna De Estilos', 'C. DE E.', 'logo.png', 'No entanto, é importante ressaltar que a informática na área da saúde também apresenta desafios, como a segurança e privacidade dos dados médicos, a integração de sistemas diferentes e a necessidade de treinamento adequado para os profissionais de saúde. A implementação eficaz da informática na saúde requer considerações éticas, legais e técnicas para garantir que os benefícios sejam maximizados e os riscos minimizados.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prdutos`
--

DROP TABLE IF EXISTS `prdutos`;
CREATE TABLE IF NOT EXISTS `prdutos` (
  `prduto_id` int(11) NOT NULL AUTO_INCREMENT,
  `prduto_nome` varchar(30) NOT NULL,
  `prduto_preco` decimal(12,2) NOT NULL,
  `prduto_iva` decimal(12,2) NOT NULL,
  `prduto_qtd` int(11) NOT NULL,
  `prduto_cores` json NOT NULL,
  `prduto_fotos` json NOT NULL,
  `prduto_catg_id` int(11) NOT NULL,
  `prduto_genero` varchar(9) NOT NULL,
  `prduto_data` date NOT NULL,
  `prduto_atualiz` date DEFAULT NULL,
  PRIMARY KEY (`prduto_id`),
  KEY `endereco` (`prduto_catg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prdutos`
--

INSERT INTO `prdutos` (`prduto_id`, `prduto_nome`, `prduto_preco`, `prduto_iva`, `prduto_qtd`, `prduto_cores`, `prduto_fotos`, `prduto_catg_id`, `prduto_genero`, `prduto_data`, `prduto_atualiz`) VALUES
(1, 'Adidas 360º', '25500.06', '1455.05', 20, '\"[\'Verde\',\'Amarelo\', Preto]\"', '\"[\'foto0.jpg\',\'foto1.png\']\"', 6, 'todos', '2023-10-27', NULL);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `prdutos`
--
ALTER TABLE `prdutos`
  ADD CONSTRAINT `endereco` FOREIGN KEY (`prduto_catg_id`) REFERENCES `categorias` (`categoria_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
