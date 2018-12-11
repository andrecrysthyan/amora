-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql01-farm76.kinghost.net
-- Tempo de geração: 11/12/2018 às 09:18
-- Versão do servidor: 5.6.36-log
-- Versão do PHP: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `amoradh`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(180) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `blog`
--

INSERT INTO `blog` (`id`, `titulo`, `text`, `image`, `created`, `modified`) VALUES
(1, 'Dica Marketing Digital', '<p>Uma dica importante para o Marketing Digital em 2018 &eacute; criar conte&uacute;do em menor quantidade, por&eacute;m mais eficiente. Isso de certa maneira pode reduzir o volume de trabalho mas acabar gerando mais resultados!</p>\r\n', 'c337f74123fbdf524096b3c1c30f5201.png', '2018-07-19 18:26:17', '2018-07-19 18:26:17'),
(2, 'Motivação', '<p>&quot; O segredo da felicidade &eacute;, a felicidade em segredo!&quot;</p>\r\n', '325a2f511d5e12931c1efa6861f0aac7.png', '2018-07-19 18:28:07', '2018-07-19 18:28:07'),
(3, 'Motivação', '<p>&quot; Se a vida fosse f&aacute;cil seria miojo, e perderia toda a gra&ccedil;a!&quot;</p>\r\n', '7d2133f38f752f0992d54bd24f20e1f9.png', '2018-07-19 18:29:01', '2018-07-19 18:29:01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `text` text,
  `image` varchar(255) NOT NULL,
  `linkface` varchar(255) NOT NULL,
  `linkinsta` varchar(255) NOT NULL,
  `linksite` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `tipocategoria` int(11) NOT NULL,
  `destaque` int(11) NOT NULL,
  `destaqueser` int(11) NOT NULL,
  `destaqueredes` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `tipo`, `text`, `image`, `linkface`, `linkinsta`, `linksite`, `created`, `modified`, `tipocategoria`, `destaque`, `destaqueser`, `destaqueredes`) VALUES
(4, 'Stout Alfa', 'Web site | Redes Sociais', '<p>A Stout Alfa &eacute; uma cl&iacute;nica de fisioterapia e studio de pilates atuando na preven&ccedil;&atilde;o, reabilita&ccedil;&atilde;o e na qualidade de vida do paciente.</p>\r\n', 'a9a84f5de6c885ff2b60ab768fb8e457.jpg', 'https://www.facebook.com/stoutAlfa/', 'https://www.instagram.com/stoutalfa/', 'http://www.stoutalfa.com.br', '2018-07-19 17:11:28', '2018-07-19 20:05:52', 3, 1, 1, 0),
(5, 'Mp Caminhões e Carretas', 'Web site | Redes Sociais', '<p>A MP Caminh&otilde;es e Carretas &eacute; uma empresa que tem em sua base uma larga experi&ecirc;ncia no mercado de ve&iacute;culos pesados e utilit&aacute;rios.</p>\r\n', '2bb7502bb88ba7f2ba5a082d58f1c16c.jpg', 'https://www.facebook.com/mpcaminhoes/', 'https://www.instagram.com/mp_caminhoes_carretas/', 'http://www.mpcaminhoesecarretas.com.br', '2018-07-19 17:24:47', '2018-07-19 20:06:43', 3, 1, 0, 1),
(6, 'Mendes de Andrade Advocacia Médica', 'Web site | Redes Sociais', '<p>Empresa especializada com consultoria m&eacute;dica em processo de erro m&eacute;dico.</p>\r\n', '68b8bd7fdac8e54d1f1256a45062f7af.jpg', 'https://www.facebook.com/mendesdeandradeadvocaciamedica', 'https://www.instagram.com/advmendesdeandrade/', 'http://www.advocaciamedica.com.br', '2018-07-19 17:26:21', '2018-07-19 20:06:55', 3, 1, 1, 0),
(7, 'California Wood', 'Web Site', '<p>Destaque no plantio-piloto de mogno africano (Khaya senegalensis) desde 2015!</p>\r\n', '4e6ae0281bee5784031d8dd825511f80.jpg', '', '', 'http://www.californiainvestment.com.br', '2018-07-19 17:27:14', '2018-07-19 20:00:58', 1, 0, 1, 0),
(8, 'D+ Academia', 'Redes Sociais', '<p>Academia com diversas modalidades e planos especiais em Patos de Minas - MG.</p>\r\n', 'd0f1ce999b1b84c0b7615a780a90c650.jpg', 'https://www.facebook.com/dmaisacademiapatosdeminas', 'https://www.instagram.com/dmais_academia/', '', '2018-07-19 17:28:34', '2018-07-19 20:03:58', 2, 0, 0, 1),
(9, 'Euro Factoring', 'Web site | Redes Sociais', '<p>Receba &agrave; vista suas vendas &agrave; prazo. Com a Euro, voc&ecirc; recebe antecipadamente suas duplicatas e sua empresa cresce.</p>\r\n', '91046606656e8ed0f5a6b9c5988a0678.jpg', 'https://www.facebook.com/europatos/', 'https://www.instagram.com/eurofactoring/', 'http://www.eurocreditoempresarial.com.br', '2018-07-19 17:29:41', '2018-07-19 20:07:13', 3, 0, 0, 1),
(10, 'IGP Engenharia', 'Web site | Redes Sociais', '<p>A IGP Engenharia atua nas &aacute;reas de inc&ecirc;ndio e p&acirc;nico, constru&ccedil;&atilde;o e reformas, medicina e seguran&ccedil;a do trabalho.</p>\r\n', '706ce668ac980471e33dd8bc3c059f73.jpg', 'https://www.facebook.com/igpengenharia/', 'https://www.instagram.com/igpengenharia/', 'http://www.igpengenharia.com.br', '2018-07-19 17:31:00', '2018-07-19 19:07:52', 3, 0, 0, 0),
(11, 'Sinapse', 'Web Site', '<p>A Cl&iacute;nica Sinapse em Patos de Minas, possui completo respeito e dedica&ccedil;&atilde;o ao cliente.</p>\r\n', 'fa080a70ba371db84ada6569dff454cb.jpg', '', '', 'http://www.leonardobarretopsi.com.br', '2018-07-19 17:31:57', '2018-07-19 20:07:26', 1, 0, 0, 0),
(12, 'Locco Arquitetura', 'Web site | Redes Sociais', '<p>Locco arquitetura e urbanismo desenvolve projetos de arquitetura, atendendo aos mais diversos programas e escalas</p>\r\n', 'f2dda3b444727822e5dc52aed66de689.jpg', 'https://www.facebook.com/loccoarquitetura/', 'https://www.instagram.com/loccoarquitetura/', '', '2018-07-19 17:33:29', '2018-07-19 19:08:22', 3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created`, `modified`) VALUES
(3, 'Admin', 'admin', 'admin@nuvemdesenvolvimentoweb.com.br', '$2y$10$/EXD26LAFAuH3358UjoYXexHjuD4yZJnYnzU0A40i5.vYK.IIFqjK', '2018-06-15 21:10:33', '2018-06-15 21:10:33');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
