-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/10/2024 às 23:45
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sga`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adm`
--

CREATE TABLE `adm` (
  `ADM_CPF` int(11) NOT NULL,
  `ADM_EMAIL` varchar(80) NOT NULL,
  `ADM_SENHA` varchar(25) NOT NULL,
  `ADM_NIVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adm`
--

INSERT INTO `adm` (`ADM_CPF`, `ADM_EMAIL`, `ADM_SENHA`, `ADM_NIVEL`) VALUES
(123, 'LUCAS@GMAIL.COM', '100', 1),
(456, 'JOAO@GMAIL.COM', '101', 1),
(789, 'LAURA@GMAIL.COM', '102', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `descricao` text NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tipo_animal` varchar(50) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `ong` varchar(80) NOT NULL DEFAULT 'Sem ONG'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `animais`
--

INSERT INTO `animais` (`id`, `nome`, `sexo`, `descricao`, `foto`, `tipo_animal`, `data_cadastro`, `ong`) VALUES
(3, 'Neblina', 'Femea', 'k k kk kk kk kk kk  mnmnasmn alkdjk  klk j j y gjhb nbn kh gh gh bnjj h g hjhg hg jg jjh g gk jg h g g jg hgj gj gkjh g hgj ghg jghb jghjh bjg j gk ', '66f76930e2f7c.png', 'Cavalo', '2024-09-28 02:25:52', 'Sem ONG'),
(5, 'Pingo', 'Macho', 'o oi oi oi oio i ioi oi ', '66f7fb7e60a96.jpg', 'Cachorro', '2024-09-28 12:50:06', 'Sem ONG'),
(6, 'Mario', 'Femea', 'Escombros de casa', '66faf67043002.jpg', 'Gato', '2024-09-30 19:05:20', 'Sem ONG'),
(7, 'Lucas', 'Macho', 'Estava perdido na floresta', '66fb00b5e16fc.jpg', 'Gato', '2024-09-30 19:49:10', 'Sem ONG'),
(9, 'Glauber', 'Macho', 'Resgate no rio', '66fb09bc76294.jpg', 'Cachorro', '2024-09-30 20:27:40', 'Sem ONG'),
(10, 'Patrick', 'Macho', ' k lk lk kl klk lk k lkl l kl lkl klk lk lkl kl kl k llk l klk l kl k lkl klklklk l k lkl j j hjf hg g  cdcbc bgc h hfh fh fh fh fgh f jfh gfh fh fh fh fh fh fh gfhg fh fh f jfh fhj f hfhfj f', '66fc3d758c3f7.jpg', 'Cachorro', '2024-10-01 18:20:37', 'Sem ONG'),
(11, 'Anthonio', 'Macho', 'Um gato de janela', '66fc6cd014cce.png', 'Gato', '2024-10-01 21:42:40', 'Sem ONG'),
(12, 'Rex', 'Macho', 'Foi um animal resgatado de uma correnteza', '66fdbc472ed2a.jpg', 'Cachorro', '2024-10-02 21:33:59', 'SUIPA');

-- --------------------------------------------------------

--
-- Estrutura para tabela `feedback`
--

CREATE TABLE `feedback` (
  `ID` int(11) NOT NULL,
  `FED_NOME` varchar(255) NOT NULL,
  `FED_EMAIL` varchar(80) NOT NULL,
  `FED_ASSUNTO` varchar(80) NOT NULL,
  `FED_DESCRICAO` text NOT NULL,
  `FED_DATA` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `feedback`
--

INSERT INTO `feedback` (`ID`, `FED_NOME`, `FED_EMAIL`, `FED_ASSUNTO`, `FED_DESCRICAO`, `FED_DATA`) VALUES
(1, 'Lucas', 'lucas@gmail.com', 'Agradecimento', 'Obrigado', '2024-10-01 17:45:41'),
(2, 'João Jorge', 'Joao@gmail.com', 'Quero me tornar parceiro', 'Sou gerente do pet shop \"Bela Linda\" uma rede de venda de ração e roupas para pets de São José e gostaria de fechar uma parceria com esse projeto inovador , pois já venho acompanhando já faz anos, e hoje tenho condição de ajuda-los, mas claro se vocês quiserem. Por favor entre em contato quando possível estarei no aguardo de um retorno.', '2024-10-01 17:50:34'),
(3, 'Loki', 'lk@hotmail.com', 'Reclamação', 'Muito ruim', '2024-10-01 17:53:44');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formulario`
--

CREATE TABLE `formulario` (
  `ID` int(11) NOT NULL,
  `AA_CPF` int(11) NOT NULL,
  `AA_EMAIL` varchar(80) NOT NULL,
  `AA_NOME` varchar(255) NOT NULL,
  `AA_TELEFONE` varchar(80) NOT NULL,
  `AA_ID_ANIMAL` int(11) NOT NULL,
  `AA_ACAO` varchar(80) NOT NULL,
  `AA_DATA` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `formulario`
--

INSERT INTO `formulario` (`ID`, `AA_CPF`, `AA_EMAIL`, `AA_NOME`, `AA_TELEFONE`, `AA_ID_ANIMAL`, `AA_ACAO`, `AA_DATA`) VALUES
(2, 222, 'Fer@gmail.com', 'Fernando', '(12) 98745-1023', 7, 'Apadrinhamento', '2024-10-01 21:10:59');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `USU_CPF` int(11) NOT NULL,
  `USU_EMAIL` varchar(80) NOT NULL,
  `USU_USERNAME` varchar(100) NOT NULL,
  `USU_NOME` varchar(100) NOT NULL,
  `USU_SENHA` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`USU_CPF`, `USU_EMAIL`, `USU_USERNAME`, `USU_NOME`, `USU_SENHA`) VALUES
(1010, 'Davi@Gmail.com', 'bfbf', 'Davi Ramos', '987'),
(888777, 'a@gmail.com', 'aaa', 'A', '888'),
(111222333, 'LK@hotmail.com', 'Kai', 'LUCAS', '555'),
(2147483647, 'K@HOTMAIL.COM', 'LKZIN', 'LUKA', '789');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ADM_CPF`);

--
-- Índices de tabela `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`USU_CPF`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `feedback`
--
ALTER TABLE `feedback`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `formulario`
--
ALTER TABLE `formulario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
