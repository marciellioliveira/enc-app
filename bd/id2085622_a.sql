-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2017 at 06:00 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id2085622_a`
--

-- --------------------------------------------------------

--
-- Table structure for table `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_func` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `funcionarios`
--

INSERT INTO `funcionarios` (`id_func`, `nome`, `sobrenome`, `email`, `senha`) VALUES
(1, 'Dener', 'Silva', 'dener@gmail.com', '1234'),
(2, 'Vinicius', 'Peixoto', 'vinipeix@hotmail.com', '123'),
(3, 'teste', 'A', 'teste@gmail.com', '123'),
(4, 'n', 'n', 'n@gmail.com', 'n'),
(5, 'n', 'n', 'n@gmail.com', 'n'),
(6, 'a', 'a', 'a@gmail.com', 'a'),
(7, 'Victor', 'Jonsson', 'victor@victor.com', 'victor'),
(8, 'b', 'b', 'b@gmail.com', 'b'),
(9, 'novo', 'a', 'novo@gmail.com', 'a'),
(10, 'Victor', 'Jonsson', 'victorjonsson@uol.com.br', 'victor123'),
(11, 'q', 'q', 'q@gmail.com', 'q'),
(12, 'Dener', 'Carvalho', 'furiano.k@gmail.com', '123'),
(13, 'jana', 'Clau', 'jana@gmail.com', 'ja'),
(14, 'julio', 'Cesar ', 'j@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `panico`
--

CREATE TABLE `panico` (
  `id_panico` int(11) NOT NULL,
  `email_usado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `imagem_tirada` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `panico`
--

INSERT INTO `panico` (`id_panico`, `email_usado`, `imagem_tirada`) VALUES
(1, 'vinicius@gmail.com', 'testefoto.jpg'),
(2, 'ma', 'file:///storage/emulated/0/Pictures/app_inventor_1499018105503.jpg'),
(3, 'ma', 'file:///storage/emulated/0/Pictures/app_inventor_1499020157183.jpg'),
(4, 'ma', ''),
(5, 'ma', 'file:///storage/emulated/0/Pictures/app_inventor_1499024160494.jpg'),
(6, 'eita', 'file:///storage/emulated/0/Pictures/app_inventor_1499037179128.jpg'),
(7, 'gretchen@gmail.com', 'file:///storage/emulated/0/Pictures/app_inventor_1499040504136.jpg'),
(8, 'maria@gmail.com', 'file:///storage/emulated/0/Pictures/app_inventor_1499080754528.jpg'),
(9, 'maria@gmail.com', 'file:///storage/emulated/0/Pictures/app_inventor_1499080872810.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `endereco_casa` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `data_nasc` varchar(50) NOT NULL,
  `convenio_med` varchar(50) NOT NULL,
  `doador_orgao` varchar(50) NOT NULL,
  `doador_sangue` varchar(50) NOT NULL,
  `tipo_sanguineo` varchar(50) NOT NULL,
  `alergia_alimentar` varchar(50) NOT NULL,
  `alergia_medicamento` varchar(50) NOT NULL,
  `doenca` varchar(50) NOT NULL,
  `cirurgia` varchar(50) NOT NULL,
  `internacao_recente` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email`, `senha`, `latitude`, `longitude`, `endereco`, `nome`, `sobrenome`, `endereco_casa`, `cidade`, `estado`, `data_nasc`, `convenio_med`, `doador_orgao`, `doador_sangue`, `tipo_sanguineo`, `alergia_alimentar`, `alergia_medicamento`, `doenca`, `cirurgia`, `internacao_recente`) VALUES
(1, 'dener', 'dener', 'padrao', 'padrao', 'padrao', 'juliana', 'nsjsj', 'jsjjsj', 'nznsn', 'bsbsb', 'bsbb', 'jdhd', 'shshs', 'hbshs', 'hshd', 'snsnbd', 'udjdj', 'jndhd', 'bdbd', 'hdbs'),
(2, 'j', 'j', 'padrao', 'padrao', 'padrao', 'juliana,b', 'haha', 'hshs', 'sjjs', 'hsbs', 'hshs', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(3, 'vinicius@gmail.com', '123', 'padrao', 'padrao', 'padrao', 'Vinicius', 'Peixoto', 'Travessa,Jair,Costa', 'Cachoeira,Paulista', 'SP', '20/10/91', 'Bradesco', 'não', 'sim', 'a,positivo', 'não', 'não', 'não', 'não', 'não'),
(4, 'victor@victor.com', 'victor', '-22.5873', '-44.96271', 'Rodovia,Julio,Fortes,,588,-,Jardim,America\nCruzeir', 'Victor,', 'Jonsson', 'Rua', 'P4', 'MG', '20/11/1996', 'Sim.,Unimed,', ' ', 'Não,', 'A,Positivo,', 'Não,', 'Não,', 'Não,', 'Não,', 'Não,'),
(5, 'pai', 'pai', '-22.65603', '-45.01791', 'Rua,Jose,Porto,Sobrinho,,124-278\nCachoeira,Paulist', 'joel', 'brutus', 'hzhs', 'hxhs', 'hzhs', 'zgsgs', 'não,tenho,sou,pobre,', 'nao', 'não,,sou,egoísta,', 'N,sei', 'nao', 'sim', 'nao', 'ah,tive,mas,não,foi,tipo,nooooossa,fiz,uma,cirurgi', 'ah,claro,né,,se,eu,tive,cirurgia,'),
(6, 'ma', 'ma', '-22.65609', '-45.01792', 'Rua,Jose,Porto,Sobrinho,,124-278\nCachoeira,Paulist', 'ma', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(7, 'eita', 'a', '-22.65607', '-45.0179', 'Rua,Jose,Porto,Sobrinho,,124-278\nCachoeira,Paulist', 'a', 'djd', 'dhjd', 'hdhd', 'dhhds', 'usus', 'hsjs', 'hsjs', 'zjjzz', 'hzhs', 'jzjjs', 'bxbs', 'bsbs', 'hzbs', 'hsjs'),
(8, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(9, 'vinicius@gmail.com', '123', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(10, 'lucas', 'lucas', '-22.656', '-45.01798', 'Rua,Jose,Porto,Sobrinho,,124-278\nCachoeira,Paulist', 'lucas', 'bshs', 'hdhd', 'shhs', 'gshs', 'hzhs', 'vsbs', 'vsvs', 'vsvs', 'vsvs', 'vshs', 'gzgs', 'gsgd', 'vsgs', 'vsgs'),
(11, 'mariaodete@yahoo.com.br', '123', '-22.66817', '-45.01491', 'R.,Prof.,Valter,Magalhães,Antônio,Hummel,,213,,Cac', 'Maria,Odete', 'Miranda', 'Rua,das,conchas', 'São,Paulo', 'SP', '29/05/59', 'Não', 'Não', 'Não', 'O,positivo', 'Não', 'Não', 'Não', 'Não', 'Não'),
(12, 'julio', 'a', 'padrao', 'padrao', 'padrao', 'Julio', 'bshdu', 'vdhhd', 'gdhd', 'gss', 'hshs', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(13, 'juliob', 'b', 'padrao', 'padrao', 'padrao', 'lucas', 'gdhs', 'hshhs', 'gdhd', 'vsvs', 'hshs', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(14, 'gretchen@gmail.com', '123', '-22.66816', '-45.01491', 'R.,Prof.,Valter,Magalhães,Antônio,Hummel,,213,,Cac', 'Gretchen', 'Miranda', 'Rua,da,carla,perez', 'Salvador', 'Bahia', '25/05/59', 'Não', 'Sim', 'Sim', 'o,positivo', 'Não', 'Não', 'Não', 'Não', 'Não'),
(15, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(16, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(17, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(18, 'josilda@gmail.com', '123', '-22.58653', '-44.96281', 'Rodovia,Julio,Fortes,,409-515,-,Vila,Paulista,,Cru', 'Josilda', 'Nascimento', 'Avenida,Maria,das,Graças', 'Cruzeiro', 'SP', '17/03/79', 'Unimed', 'Sim', 'Sim', 'AB,positivo', 'Amendoim', 'Não', 'Não', 'Não', 'Não'),
(19, 'janaina@email.com', '123', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(20, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(21, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(22, 'vinicius@gmail.com', '123', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(23, 'ma', 'q', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(24, 'vinicius@gmail.com', '123', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(25, 'p', 'p', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(26, 'p', 'p', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(27, 'p', 'p', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(28, 'maria@gmail.com', 'maria', '-22.58667', '-44.96249', 'Rodovia,Julio,Fortes,,588,-,Jardim,America\nCruzeir', 'maria', 'Oliveira,', 'rua,São,pedro', 'cruzeiro', 'sp', '27/04/1992', 'nao', 'nao', 'sim', 'o', 'nao', 'fluoxetina,', 'nao', 'nao', 'nao'),
(29, 'qualquer@k.com', 'senha', '-22.58501', '-44.96166', 'Avenida,Jorge,Tibiriçá,-,Vila,Paulista\nCruzeiro,-,', 'qualquer', 'isso', 'rua', 'Cidade,', 'estado', '02/04/1996', 'nao', 'sim', 'nao', 'A,', 'nao', 'nao', 'nao', 'nao', 'nao'),
(30, 'quaisquer@k.com', 'senha', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(31, 'test@novo.com', '123', '-22.58729', '-44.96269', 'Rodovia,Julio,Fortes,,588,-,Jardim,America\nCruzeir', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(32, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(33, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao'),
(34, '', '', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao', 'padrao');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_func`);

--
-- Indexes for table `panico`
--
ALTER TABLE `panico`
  ADD PRIMARY KEY (`id_panico`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `panico`
--
ALTER TABLE `panico`
  MODIFY `id_panico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
