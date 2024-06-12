-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28-Maio-2024 às 09:19
-- Versão do servidor: 8.0.36-0ubuntu0.22.04.1
-- versão do PHP: 8.1.2-1ubuntu2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `endereco` varchar(30) DEFAULT NULL,
  `faturas` int DEFAULT NULL,
  `pedidos_de_venda` int DEFAULT NULL,
  `id_duplicatas` int DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(30) DEFAULT NULL,
  `idade` int 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `endereco`, `faturas`, `pedidos_de_venda`, `id_duplicatas`, `email`, `senha`, `idade`) VALUES
(1, 'gabriel kaleb', NULL, 471214, NULL, NULL, 'gabriel@gmail.com', '123456', 18),
(5, 'THAYARA ', NULL, 3542, NULL, NULL, 'TTHAYARADAVIDAVI@GMAIL.COM', 'HHHHJ', 88),
(6, 'Samuel', NULL, 3542, NULL, NULL, 'aghdfghdagh@gmail.com', 'kjldhjkqdhjk', 88),
(7, 'Izabela Maria Arcanjo', NULL, 3254, NULL, NULL, 'belaarcanjo456@gmail.com', '120498u72', 75),
(8, 'Vitin do grau', NULL, 3543, NULL, NULL, 'vitor.diogns@gmail.com', '03060207', 25),
(9, 'Brena', NULL, 345875, NULL, NULL, 'fbrena218@gmail.com', 'teenwolf10', 33),
(10, 'Luza Barreto ', NULL, 574, NULL, NULL, 'luzamag@gmail.com', 'w23thg7u6y ', 78),
(11, 'joão gustavo', NULL, 2542, NULL, NULL, 'tavolopesjg@gmail.com', 'guitavio', 88),
(12, 'emyle', NULL, 2425, NULL, NULL, 'gabrieldasilva@gmail.com', '97698', 100),
(13, 'emanuella sales', NULL, 354, NULL, NULL, 'manusalesmausales@gmail.com', 'gvgyb12ij31', 91),
(14, 'airton ricardo', NULL, 21425, NULL, NULL, 'airtonricardo@gmail.com', 'airtin17', 25),
(15, 'vitor diogenes', NULL, 36524, NULL, NULL, 'vitinhodidi@gmail.com', 'vitordidi', 24),
(17, 'Alice Johnson', NULL, 325432, NULL, NULL, 'alice.johnson@email.com', 'Senha123!', 23),
(18, 'Bob Smith', NULL, 23563, NULL, NULL, 'bob.smith@email.com', 'Segura456$', 45),
(19, 'Clara Rodriguez', NULL, 356365, NULL, NULL, 'clara.rodriguez@email.com', ' P@ssw0rd789', 56),
(20, 'David Brown ', NULL, 3524, NULL, NULL, 'david.brown@email.com', 'D3moPas$w0rd', 77),
(21, 'Emily White', NULL, 356326, NULL, NULL, 'emily.white@email.com', 'EmiLy#2022', 42),
(22, 'Fernando Oliveira', NULL, 3659, NULL, NULL, 'fernando.oliveira@email.com', 'Fer12345!', 25),
(23, 'Grace Lee', NULL, 3243, NULL, NULL, 'grace.lee@email.com', 'Gr@ceL33Pass', 78),
(24, 'Henry Taylor', NULL, 1000, NULL, NULL, 'henry.taylor@email.com', 'H3nryT4yl0r', 78),
(25, 'sabella Chen', NULL, 24520, NULL, NULL, 'isabella.chen@email.com', 'Is@b3lla#567', 25),
(26, 'ack Robinson', NULL, 254324, NULL, NULL, 'jack.robinson@email.com', 'J@ckP@ss2023', 56),
(27, 'Karen Kim', NULL, 365, NULL, NULL, 'karen.kim@email.com', 'K@renK1mPa$$', 87),
(28, ' Lucas Silva', NULL, 33543, NULL, NULL, 'lucas.silva@email.com', 'L$123Luc@s', 25),
(30, 'Maria Perez', NULL, 3543, NULL, NULL, 'maria.perez@email.com', 'Mari@PeRez99', 25),
(31, 'Nathan Turner', NULL, 14124, NULL, NULL, 'nathan.turner@email.com', 'N@thanT#urner', 32),
(32, 'VJ', NULL, 2543, NULL, NULL, 'vj@gmail.com', '222222222222', 79),
(33, 'gabriel kaleb', NULL, 12053, NULL, NULL, 'gabriel@gmail.com', '123456', 25),
(35, 'gabriel kaleb', NULL, 10000, NULL, NULL, 'kaleb@gmail.com', '123456789', 25),
(36, 'Angela', NULL, 25364, NULL, NULL, 'angelalinda@gmail.com', '123456', 25),
(37, 'wendel', NULL, 365743, NULL, NULL, 'wendel@brasil.com', 'wendel', 89),
(38, 'Valter', NULL, 365332, NULL, NULL, 'vv@gmail.com', '123456789', 52),
(39, 'gabriel gustavo', NULL, 3543, NULL, NULL, 'gg@gmail.com', '123456', 45),
(40, 'aluno1', NULL, 354, NULL, NULL, 'aluno1@gmail.com', '123456', 97),
(41, 'Wendel Br', NULL, 36543, NULL, NULL, 'wndellll@gmail.com', '123456', 23),
(42, 'isaac', NULL, 36543, NULL, NULL, 'jdbstgu@gmail.com', '123', 54),
(43, 'savio', NULL, 354, NULL, NULL, 'saviobf@gmail.com', 'pirulito', 98),
(44, 'nome', NULL, NULL, NULL, NULL, 'nome@email.com', 'nome', 99);

-- --------------------------------------------------------

--
-- Estrutura da tabela `distribuidora`
--

CREATE TABLE `distribuidora` (
  `id` int NOT NULL,
  `id_produtos` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `duplicatas`
--

CREATE TABLE `duplicatas` (
  `id` int NOT NULL,
  `numero` int DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `id_cliente` int DEFAULT NULL,
  `banco` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `duplicatas`
--

INSERT INTO `duplicatas` (`id`, `numero`, `vencimento`, `id_cliente`, `banco`) VALUES
(1, 10000, '2024-03-03', 1, 'Bradesco'),
(2, 234534300, '2026-09-08', 14, 'Nubank'),
(3, 123000, '2030-12-09', 12, 'Inter'),
(4, 78451000, '2027-08-02', 10, 'Itau'),
(5, 2323000, '2029-09-09', 14, 'Next'),
(6, 15645400, '2040-09-07', 35, 'BB');

-- --------------------------------------------------------

--
-- Estrutura da tabela `faturas`
--

CREATE TABLE `faturas` (
  `id` int NOT NULL,
  `numero` int DEFAULT NULL,
  `data` date DEFAULT NULL,
  `id_duplicatas` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'EvaPeqeuna', 'eva@example.com', '15451'),
(6, 'Frank', 'frank@example.com', 'senha6'),
(7, 'Grace', 'grace@example.com', 'senha7'),
(8, 'Helen', 'helen@example.com', 'senha8'),
(9, 'Ian', 'ian@example.com', 'senha9'),
(10, 'Julia', 'julia@example.com', 'senha10'),
(11, 'kaleb', 'kaleb@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `id_duplicatas` int DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `familia` varchar(30) DEFAULT NULL,
  `custo` float DEFAULT NULL,
  `quantidade` int NOT NULL,
  `vendas` int NOT NULL,
  `lucro` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `id_duplicatas`, `preco`, `familia`, `custo`, `quantidade`, `vendas`, `lucro`) VALUES
(1, 'Requeijão', 1, 5, 'latcíenos', 3, 67, 100, '2.00'),
(2, 'Leite', 1, 5, 'Laticíneos', 3, 5, 20, '2.00'),
(3, 'Nata', 1, 5, 'Laticíneos', 2, 5, 25, '3.00'),
(4, 'BatGut', 1, 5, 'Laticínios', 2, 5, 2000, '3.00'),
(5, 'Queijo', 1, 22, 'Laticínios', 18.5, 5, 753, '3.50'),
(6, 'Margarina', 1, 8, 'Laticínios', 4.7, 5, 454, '3.30'),
(8, 'Vinho', 2, 87, 'Bebida', 49, 5, 452, '38.00'),
(9, 'Smirnoff', 2, 12, 'Bebida', 8.5, 5, 52356, '3.50'),
(10, 'Vodka', 2, 25, 'Bebida', 17, 5, 3523, '8.00'),
(11, 'Cerveja', 2, 8, 'Bebida', 4.9, 5, 365365, '3.10'),
(12, 'Cachaça', 2, 15, 'Bebida', 10.4, 5, 53, '4.60'),
(13, 'Carne Moida', 2, 27, 'Açougue', 20, 80, 36, '7.00'),
(14, 'Costela Suína', 2, 30, 'Açougue', 25, 5, 356, '5.00'),
(15, 'Picanha', 2, 48, 'Açougue', 39, 5, 3654, '9.00'),
(16, 'Cupim', 2, 36, 'Açougue', 31, 5, 123, '5.00'),
(17, 'Frango', 2, 20, 'Açougue', 18, 5, 52, '2.00'),
(18, 'Arroz', 3, 5, 'Cereais', 2.5, 5, 8532, '2.50'),
(19, 'Aveia', 3, 8, 'Cereais', 6.8, 5, 563, '1.20'),
(20, 'Flocos de Milho', 3, 5, 'Cereais', 1.3, 5, 365, '3.70'),
(21, 'Carne de Lata', 4, 8, 'Enlatados', 7, 5, 356, '1.00'),
(22, 'Sardinha', 4, 5, 'Enlatados', 2, 5, 356, '3.00'),
(23, 'Atúm', 4, 10, 'Enlatados', 6, 5, 356, '4.00'),
(24, 'Milho em Conserva', 4, 4, 'Enlatados', 2, 5, 356, '2.00'),
(25, 'Almondega ', 4, 10, 'Enlatados', 6, 5, 365, '4.00'),
(26, 'Feijoada na Lata', 4, 9, 'Enlatados', 5, 5, 356, '4.00'),
(27, 'Sabonete', 5, 2.5, 'Higiene', 0.5, 5, 22, '2.00'),
(28, 'Shampoo', 5, 20, 'Higiene', 15, 5, 55, '5.00'),
(29, 'Condicionador', 5, 14, 'Higiene', 10, 5, 54, '4.00'),
(30, 'Escova de Dente', 5, 12, 'Higiene', 8, 5, 54, '4.00'),
(31, 'Papel Higiênico', 5, 8, 'Higiene', 5, 5, 542, '3.00'),
(32, 'Tomate', 5, 9, 'Hortifruti', 1.3, 5, 245, '7.70'),
(33, 'Mandioca', 5, 6, 'Hortifruti', 3, 5, 254, '3.00'),
(34, 'Cebola', 5, 6, 'Hortifruti', 3, 5, 254, '3.00'),
(35, 'Alho', 5, 10, 'Hortifruti', 0.6, 5, 254, '9.40'),
(37, 'Repolho', 5, 4, 'Hortifruti', 2.8, 5, 24, '1.20'),
(38, 'Alface', 5, 4, 'Hortifruti', 3, 5, 254, '1.00'),
(39, 'Soja', 3, 12, 'Cereais', 8, 5, 254, '4.00'),
(40, 'coisa', 5, 10, 'ndad', 5, 60, 5, '5.00'),
(41, 'fds', 5, 10, 'fds', 5, 50, 6, '5.00');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duplicatas` (`id_duplicatas`);

--
-- Índices para tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produtos` (`id_produtos`);

--
-- Índices para tabela `duplicatas`
--
ALTER TABLE `duplicatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Índices para tabela `faturas`
--
ALTER TABLE `faturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duplicatas3` (`id_duplicatas`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_duplicatas2` (`id_duplicatas`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `duplicatas`
--
ALTER TABLE `duplicatas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `faturas`
--
ALTER TABLE `faturas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `id_duplicatas` FOREIGN KEY (`id_duplicatas`) REFERENCES `duplicatas` (`id`);

--
-- Limitadores para a tabela `distribuidora`
--
ALTER TABLE `distribuidora`
  ADD CONSTRAINT `id_produtos` FOREIGN KEY (`id_produtos`) REFERENCES `produtos` (`id`);

--
-- Limitadores para a tabela `duplicatas`
--
ALTER TABLE `duplicatas`
  ADD CONSTRAINT `id_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id`);

--
-- Limitadores para a tabela `faturas`
--
ALTER TABLE `faturas`
  ADD CONSTRAINT `id_duplicatas3` FOREIGN KEY (`id_duplicatas`) REFERENCES `duplicatas` (`id`);

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_duplicatas2` FOREIGN KEY (`id_duplicatas`) REFERENCES `duplicatas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
