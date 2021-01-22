-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jan-2021 às 17:59
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_clientes`
--

INSERT INTO `tb_clientes` (`id`, `nome`, `email`, `senha`, `criado_em`) VALUES
(70, 'Kevin Alec', 'neri.kevin96@gmail.com', '$2y$10$mEQkF/cOd2Hdwvt9CS/l.e/Mvplks.gaoUkacwkoF5JK.fPLzMXW.', '2020-12-30 18:23:09'),
(71, 'Kevin Alec Neri Lazzarotto', 'kevin.lazzarotto@hotmail.com', '$2y$10$NGB2Pa3oG3IHHXWQXMKFvum.BUCXp0R7Mk9ydmwFJe4iwGvq/zqty', '2020-12-30 18:04:13'),
(72, 'Erick Kaik Neri Lazzarotto', 'erick.clamant@gmail.com', '$2y$10$J0TH0DcQAUD.o0Mx7Vh8leISjdGiCXuvY9VwVM3tsPENPa9Oi92g.', '2020-12-16 20:53:35'),
(73, 'Ingrid', 'ingridkneri@hotmail.com', '$2y$10$8fHhmIzxxhFe8/o4cIDyOe8ZBgi5t94BAvS40jLofFMrDscZkPyvK', '2020-12-16 20:58:32'),
(91, 'Kevin Alec', 'teste@gmail.com', '$2y$10$zogMR.Hn3b6V/ewUy7RHsOdS46Z9rfLr9FRYoF0AbkG5r.pkb0Z4O', '2021-01-21 11:44:45'),
(92, 'Teste', 'teste3@gmail.com', '$2y$10$qIiReDxGHQUZVF6YqvNNeOWoqv9WlEFunudboFX6w3TPYrvlMyciC', '2021-01-21 12:13:26'),
(93, 'Kevin Teste', 'teste5@gmail.com', '$2y$10$BOl0obqysXgBSEu3Xz5.vucHzBhV2F3pam3l.lMhHhTtMpUbC6.ky', '2021-01-21 12:17:12'),
(94, 'teste', 'teste6@gmail.com', '$2y$10$kVps7QKi4j2HihInyMxiveMAiEs0qYLHPc2cJakAdI7s/FXxwL3GG', '2021-01-21 12:18:46'),
(95, 'TEste', 'teste7@gmail.com', '$2y$10$CrnwMlE6WlnSXWwb/nQwUO8NCb6Vz/Db7I6uh0RovuOeEWdPQi2My', '2021-01-21 12:22:27'),
(96, 'Teste', 'teste8@gmail.com', '$2y$10$wx/RVE93lasaESK0PiUGwOyViQd1FAvxWFZX9G9JLYUd1CFY.23ii', '2021-01-21 12:25:02'),
(97, 'Kevin Teste', 'teste10@gmail.com', '$2y$10$wWDNSHXro.gw3vOkkEOcUOHpskKp7UdVXad0hcP9mGTf1f6ciPHse', '2021-01-21 12:49:46'),
(98, 'Test', 'teste11@gmail.com', '123456', '2021-01-21 13:10:22'),
(99, 'Kevin Teste', 'teste20@gmail.com', '$2y$10$RaVspfw075IJ3kPUFerxI.IhRRrjxwY1/xKDz1a4.xryhRO0YmznC', '2021-01-21 14:19:49'),
(100, 'Teste', 'teste21@gmail.com', '$2y$10$tuTutjCGGlWhXmIdrcRYy.M0xEhqdj4Pjk97pd77APRBWa7Vo7Uyu', '2021-01-21 14:33:21'),
(101, 'Teste', 'teste22@gmail.com', '$2y$10$7S.QKzcTKBJdmprP6u4gaeEqXx5opRc6LFfW7UWPX4USNgr5FgoZy', '2021-01-21 14:50:31'),
(102, 'Teste', 'teste23@gmail.com', '$2y$10$0XJhEciQm2vJgy.20BhYYO7qvPM3OOvPAzqgGHjCR2tprjtkYDjaK', '2021-01-21 14:56:24'),
(103, 'kevin', 'kevinteste3@gmail.com', '$2y$10$50bH62LkCbIJoHiZUxdfm.w2xSnw91BKSqYZTX/dMlxNzzGwyhpDW', '2021-01-21 15:07:15'),
(104, 'Teste', 'teste40@gmail.com', '$2y$10$SsKXIMpezhrl8Ttrk75h1eG2fOtYX3uLkUYCAcAUZdAue6hLQ6Hiq', '2021-01-21 16:41:44'),
(105, 'Teste', 'teste41@gmail.com', '$2y$10$Ewb1xWHbV9/XhOMoRo62deFgrwGc.HW7RZbmp.eEjUvbEFNTXCK0W', '2021-01-21 16:47:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mensagem`
--

CREATE TABLE `tb_mensagem` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `texto` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `criado_em` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_mensagem`
--

INSERT INTO `tb_mensagem` (`id`, `usuario_id`, `titulo`, `texto`, `email`, `criado_em`) VALUES
(45, 71, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'kevin.lazzarotto@hotmail.com', '2020-12-24 12:52:08'),
(46, 71, 'Why do we use it?', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'kevin.lazzarotto@hotmail.com', '2020-12-24 12:52:20'),
(47, 71, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &#34;de Finibus Bonorum et Malorum&#34; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &#34;Lorem ipsum dolor sit amet..&#34;, comes from a line in section 1.10.32.', 'kevin.lazzarotto@hotmail.com', '2020-12-24 12:52:34'),
(48, 71, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'kevin.lazzarotto@hotmail.com', '2020-12-24 12:53:17'),
(50, 71, 'The standard Lorem Ipsum passage, used since the 1500s', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'kevin.lazzarotto@hotmail.com', '2020-12-26 23:47:25'),
(51, 70, 'Titulo teste de verificacao de logica', 'Mensagem de teste para verificar se esta funcionando a logica de visualizacao de imagem por meio do perfil pessoal', 'neri.kevin96@gmail.com', '2020-12-29 16:34:59'),
(68, 89, 'Teste', 'Teste', 'teste@gmail.com', '2020-12-30 20:17:40');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_planos`
--

CREATE TABLE `tb_planos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `qtdconta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_planos`
--

INSERT INTO `tb_planos` (`id`, `titulo`, `descricao`, `preco`, `qtdconta`) VALUES
(1, 'Premium', 'Leitura online e off-line\r\nDownload de inúmeros títulos\r\nAcesso a fóruns de discussão\r\nCompartilhamento de conteúdo', '24.99', 2),
(2, 'Estudante', 'Leitura online e off-line\r\nDownload de inúmeros títulos\r\nAcesso a fóruns de discussões\r\nCompartilhamento de conteúdo\r\n* Desconto especial de 50% para universitários', '12.49', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_produtos`
--

CREATE TABLE `tb_produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `preco` float(8,2) NOT NULL,
  `img` varchar(60) NOT NULL,
  `urlProduto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_produtos`
--

INSERT INTO `tb_produtos` (`id`, `nome`, `descricao`, `preco`, `img`, `urlProduto`) VALUES
(4, 'Layout Personalizado Loja Escritorio', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuarios, servico de Loja Escritorio.', 150.00, 'dragon-ball-z.png', 'dragon-ball-z'),
(20, 'Layout Responsivo Padrao', 'Layout responsivo padrao sendo uns de novos modelos disponiveis em nosso estoque, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuarios.', 150.00, 'textos-crueis-de-mais.png', 'textos-crueis-de-mais'),
(21, 'Combo, Layout, Banner e Cartao de Visitas', 'Layout responsivo padrao, Banner decorado de acordo com o ramo da empresa e desenvolvimento de cartao de visitas com a finalidade de divulgacao da marca.', 400.00, 'gatilhos-mentais.png', 'gatilhos-mentais'),
(26, 'Layout Teste', 'Teste de layout para verificar se a logica com o banco de dados esta funcionando caorretamento', 1500.00, 'a-garota-do-lago.png', 'a-garota-do-lago'),
(27, 'Layout Personalizado Pizzaria', 'Layout Responsivo feito sobe encomenda, pagina inicial, produtos, pagina de login, pagina de cadastro, pagina de gerenciamento de produtos e usuarios, servico de Pizzaria.', 100.00, 'pizzaria.png', 'layout-personalizado-pizzaria');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_planos`
--
ALTER TABLE `tb_planos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT de tabela `tb_mensagem`
--
ALTER TABLE `tb_mensagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de tabela `tb_planos`
--
ALTER TABLE `tb_planos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb_produtos`
--
ALTER TABLE `tb_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
