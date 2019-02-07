-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Fev-2019 às 13:09
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE `answers` (
  `id` smallint(6) NOT NULL,
  `question_id` smallint(6) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `description`) VALUES
(10, 11, 'A - As pessoas em primeiro lugar!'),
(11, 11, 'B - Acredito que posso extrair o melhor do meu time a partir de uma boa divisão de decisões e responsabilidades.'),
(12, 11, 'C - Entregar o resultado esperado é uma obrigação, não preciso agradecer ou reconhecê-los por isso.'),
(13, 11, 'D - Não abro mão de trabalhar com uma equipe automotivada e competente.'),
(14, 11, 'E - Acho importante conhecer os clientes / o negócio e para onde ele caminha e compartilhar isso com meu time.'),
(15, 10, 'A - Gosto de criar harmonia e ligação emocional.'),
(16, 10, 'B - Com frequência pergunto a meu time: O que você acha?'),
(17, 10, 'C - Costumo exigir obediência imediata quando passo tarefas para o time.'),
(18, 10, 'D - Não me sinto bem enquanto eu não tiver o controle total da situação.'),
(19, 10, 'E - Atuo bem em situações onde exigem-se mudança, quando se requer uma nova visão, uma direção mais clara.'),
(20, 10, 'F - Faço questão de desenvolver pessoas para o futuro.'),
(21, 11, 'F - Gosto de ajudar o colaborador a melhorar sua performance ou a desenvolver qualidades a longo prazo.'),
(22, 12, 'A - Procuro sempre ter empatia, bons relacionamentos e boa comunicação.'),
(23, 12, 'B - Estimulo a participação do time, encorajando-os a expressar suas opiniões, dar sugestões e desenvolver soluções.'),
(24, 12, 'C - Gosto de proporcionar um ambiente de cobrança constante para que todos se mantenham motivados.'),
(25, 12, 'D - Meu estilo é liderar pelo exemplo.'),
(26, 12, 'E - Gosto de ter visão sistêmica e recebo bons feedbacks sobre isso.'),
(27, 12, 'F - Ajudo meus liderados a encontrarem seus pontos fortes e pontos de melhoria como eles podem ser chave para carreira.'),
(28, 13, 'A - Me sinto com obrigação de motivar as pessoas em momentos de stress ou depois de um trauma.'),
(29, 13, 'B - Prefiro que a própria equipe decida como será a divisão de tarefas.'),
(31, 13, 'C - Não gosto ou tenho dificuldades com feedbacks e com ouvir e lidar com pessoas.'),
(33, 13, 'D - Quando tem algo importante que meu time tem dificuldade, prefiro fazer eu mesmo para garantir que tudo dê certo.'),
(34, 13, 'E - Sou capaz de antecipar tendências e tenho disposição para correr riscos.'),
(35, 13, 'F - Encorajo meu time a criarem metas de desenvolvimento de longo prazo e ajudo a formular o plano para alcança-las.'),
(36, 14, 'A - Procuro evitar conflitos.'),
(37, 14, 'B - Faço questão de envolver o time no planejamento das ações, na elaboração de metas e procedimentos.'),
(39, 14, 'C - Espero que meu time tenha senso de urgência elevado.'),
(40, 14, 'D - Costumo fazer microgerenciamento (acompanho de perto as tarefas e quero saber no detalhe o andamento das mesmas).'),
(41, 14, 'E - Sou exigente, mas meus times normalmente são leais, muito motivados, engajados e comprometidos.'),
(42, 14, 'F - Costumo dar feedbacks pensando no desenvolvimento do colaborador.'),
(43, 15, 'A - tenho dificuldade em situações onde exige-se mais pulso e direcionamento em casos de emergência/crise.'),
(44, 15, 'B - Às vezes me sinto inseguro quanto à melhor direção a tomar, por isso preciso de idéias e orientações de liderados capazes.'),
(46, 15, 'C - Tenho facilidade em tomar decisões duras ou decisões rápidas.'),
(47, 15, 'D - Parece que meu time fica perdido na minha ausência, me preocupa tirar férias.'),
(48, 15, 'E - Converso com meu time sobre possibilidades de crescimento.'),
(49, 15, 'F - Me preocupo mais com o desenvolvimento pessoal do time do que com as tarefas imediatas.'),
(50, 16, 'A - Ofereço amplo feedback positivo.'),
(51, 16, 'B - Na execução das tarefas, dialogo com a equipe e assumo o papel de orientador.'),
(52, 16, 'C - Sinto que meu time não tem senso de responsabilidade suficiente.'),
(53, 16, 'D - Sou agressivo quanto a metas e à perseguição das mesmas.'),
(54, 16, 'E - Gosto de deixar claro como o trabalho dos meus colaboradores se enquadra numa visão maior para a organização.'),
(55, 16, 'F - Faço questão que meu time saiba que me importo com eles e que eles têm liberdade para experimentar.'),
(56, 17, 'A - Valorizo os indivíduos e suas emoções, mais do que as tarefas e metas.'),
(57, 17, 'B - Dificilmente tomo decisões sozinho.'),
(58, 17, 'C - Colaboradoers são como peças no tabuleiro onde eu decido qual a direção e prioridades.'),
(59, 17, 'D - Enxergo com facilidade o mau desempenho do time e sou exigente quanto a isso.'),
(60, 17, 'E - Estabeleço as metas, mas forneço às pessoas bastante liberdade para alcança-las por seus próprios meios.'),
(61, 17, 'F - Tenho por objetivo que meus colaboradores se tornem autônomos para exercerem os seus trabalhos com excelência.'),
(62, 18, 'A - Busco a felicidade do time, criando vínculos emocionais fortes.'),
(63, 18, 'B - Fico chateado quando não existe consenso em uma reunião.'),
(64, 18, 'C - Nâo costumo compartilhar estratégia ou visão da empresa ou da minha área.'),
(65, 18, 'D - Acompanho sempre de perto e faço correções, críticas e elogios frequentemente.'),
(66, 18, 'E - Sou bastante focado, não admito ser disperso e não deixo ninguém se abater perante uma dificuldades.'),
(67, 18, 'F - Não deixo o meu julgamento turvar o meu discernimento.'),
(68, 19, 'A - Gosto de proporcionar uma sensação de reconhecimento e recompensa pelo trabalho bem feito.'),
(69, 19, 'B - Me preocupo com o impacto das minhas ações no comprometimento do time.'),
(70, 19, 'C - Quando algo dá errado, quero saber quem foi para poder expressar minha insatisfação.'),
(71, 19, 'D - Quero ser copiado (e-mail) e envolvido em todas as negociações da minha equipe.'),
(72, 19, 'E - Repasso as tarefas indicando a importância dela bem como do prazo.'),
(73, 19, 'F - Eu me adapto facilmente às pessoas com personalidades diferentes da minha.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `titulo` varchar(180) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions`
--

CREATE TABLE `questions` (
  `id` smallint(6) NOT NULL,
  `test_id` smallint(6) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`id`, `test_id`, `description`) VALUES
(11, 3, 'Grupo 2'),
(10, 3, 'Grupo 1'),
(12, 3, 'Grupo 3'),
(13, 3, 'Grupo 4'),
(14, 3, 'Grupo 5'),
(15, 3, 'Grupo 6'),
(16, 3, 'Grupo 7'),
(17, 3, 'Grupo 8'),
(18, 3, 'Grupo 9'),
(19, 3, 'Grupo 10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tests`
--

CREATE TABLE `tests` (
  `id` smallint(6) NOT NULL,
  `title` varchar(65) NOT NULL,
  `description` text NOT NULL,
  `result` text NOT NULL,
  `image` varchar(65) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tests`
--

INSERT INTO `tests` (`id`, `title`, `description`, `result`, `image`) VALUES
(3, 'Estilos de liderança', 'Há várias teorias sobre estilos de liderança, cujo objetivo é compreender como o líder conduz a sua a relação com seus liderados no dia a dia, quais são seus traços de personalidade e seu estilo de liderança. De acordo com psicólogo Ph.D. Daniel Goleman, os líderes utilizam normalmente seis estilos de liderança. Cada um destes estilos possui efeitos diferentes sobre suas equipes e impactam significativamente o clima organizacional.', '.', '85e78efd3d9c1168b32f0cd70ec302b9.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `created`, `modified`) VALUES
(3, 'Admin', 'admin', 'admin@nuvemdesenvolvimentoweb.com.br', '$2y$10$/EXD26LAFAuH3358UjoYXexHjuD4yZJnYnzU0A40i5.vYK.IIFqjK', '2018-06-15 21:10:33', '2018-06-15 21:10:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_answers_fk` (`question_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tests_questions_fk` (`test_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
