-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 14-Set-2021 às 21:51
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tatu`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `altautilc`
--

CREATE TABLE `altautilc` (
  `id` int(11) NOT NULL,
  `internacao` varchar(200) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `dataAlta` varchar(200) NOT NULL,
  `obs` varchar(200) NOT NULL,
  `status` varchar(250) NOT NULL,
  `grafico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `altautilc`
--

INSERT INTO `altautilc` (`id`, `internacao`, `nome`, `dataAlta`, `obs`, `status`, `grafico`) VALUES
(1, '2020-05-19', 'Fulano Silveira', '2020-05-23', 'data', 'ALTA', 'CONFIRMADO'),
(2, '2020-05-03', 'Fulano Silveira', '2020-05-08', 'teste', 'ALTA', 'SUSPEITO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `completa`
--

CREATE TABLE `completa` (
  `id` int(11) NOT NULL,
  `dataAtual` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dia` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mes` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ano` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horaInicial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `horaFinal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codPlaca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kInicial` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kfinal` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gnv` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gasolina` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lavacao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `outros` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vale` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comissao` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `corridas`
--

CREATE TABLE `corridas` (
  `Id` int(11) NOT NULL,
  `destino` varchar(50) NOT NULL,
  `pagamento` varchar(100) NOT NULL,
  `valor` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `data` varchar(100) NOT NULL,
  `dia` varchar(20) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `ano` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `corridas`
--

INSERT INTO `corridas` (`Id`, `destino`, `pagamento`, `valor`, `usuario`, `data`, `dia`, `mes`, `ano`) VALUES
(1, 'sdasdsdasd', 'cartao', '25,00', 'admin@admin', '09/09/2021', '09', '09', '2021'),
(2, 'sdasdsdasd', 'dinheiro', '36,00', 'admin@admin', '08/09/2021', '09', '09', '2021'),
(3, 'sdasdsdasd', 'cartao', '30,00', 'admin@admin', '09/09/2021', '09', '09', '2021'),
(4, 'sdasdsdasd', 'dinheiro', '25,00', 'admin@admin', '09/09/2021', '09', '09', '2021'),
(5, 'asdasdasdas', 'cartao', '1.200,00', 'admin@admin', '13/09/2021', '13', '09', '2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabsaude`
--

CREATE TABLE `estabsaude` (
  `id` int(11) NOT NULL,
  `cnes` varchar(50) NOT NULL,
  `nomef` varchar(250) NOT NULL,
  `uf` varchar(10) NOT NULL,
  `municipio` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupainternadouti`
--

CREATE TABLE `ocupainternadouti` (
  `id` int(11) NOT NULL,
  `internacao` varchar(100) NOT NULL,
  `cns` varchar(100) NOT NULL,
  `nomePac` varchar(100) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `convenio` varchar(200) NOT NULL,
  `tipoLeito` varchar(200) NOT NULL,
  `vm` varchar(200) NOT NULL,
  `hospitalOrigem` varchar(250) NOT NULL,
  `CRIH` varchar(200) NOT NULL,
  `unidadeDestino` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `obs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ocupainternadouti`
--

INSERT INTO `ocupainternadouti` (`id`, `internacao`, `cns`, `nomePac`, `idade`, `convenio`, `tipoLeito`, `vm`, `hospitalOrigem`, `CRIH`, `unidadeDestino`, `status`, `obs`) VALUES
(1, '20/05/2020', '123131231311', 'Fulano da Silva', '20', 'privado', 'Enfermaria', 'sim', 'Hospital do Santo', 'sdasdasd', 'Hospital de Florianopolis', 'CONFIRMADO', ''),
(2, '10/05/2020', '123655454648', 'Segundo Candidato ', '60', 'SUS', 'UTI COVID', 'SIM', 'HOSPITAL DO SANTO', '123123', 'Hospital de Florianopolis', 'SUSPEITO', ''),
(3, '10/05/2020', '123655454648', 'Segundo Candidato ', '60', 'SUS', 'UTI COVID', 'SIM', 'HOSPITAL DO SANTO', '123123', 'Hospital de Florianopolis', 'DESCARTADO', ''),
(4, 'internacao', 'cns', 'nomePac', 'idade', 'convenio', '	tipoLeito', 'vm', 'hospitalOrigem', 'CRIH', 'unidadeDestino', 'status', 'Sem observaÃ§Ã£o'),
(5, '20/05/20', '123131231311', 'Fulano da Silva', '20', 'privado', 'Enfermaria', 'sim', 'Hospital do Santo', 'sdasdasd', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(6, '10/05/20', '123655454648', 'Segundo Candidato ', '60', 'SUS', 'UTI COVID', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'SUSPEITO', 'Sem observaÃ§Ã£o'),
(7, '10/05/20', '123655454648', 'Segundo Candidato ', '60', 'SUS', 'UTI COVID', 'SIM', 'HOSPITAL Santin', '123123', 'Hospital de Florianopolis', 'DESCARTADO', 'Sem observaÃ§Ã£o'),
(8, '12/05/20', '123655454648', 'Terceiro Candidato', '40', 'privado', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(9, '13/05/20', '123655454648', 'Quarto Candidato', '66', 'privado', 'UTI COVID', 'SIM', 'HOSPITAL Santin', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(10, '15/05/20', '123655454648', 'Quinto Candidado', '64', 'privado', 'UTI COVID', 'SIM', 'HOSPITAL Santin', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(11, '16/05/20', '123655454648', 'Sexto Candidado', '30', 'privado', 'UTI COVID', 'SIM', 'HOSPITAL Santin', '123123', 'Hospital de Florianopolis', 'SUSPEITO', 'Sem observaÃ§Ã£o'),
(12, '17/05/20', '123655454648', 'Paciente um ', '28', 'privado', 'UTI COVID', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'SUSPEITO', 'Sem observaÃ§Ã£o'),
(13, '18/05/20', '123655454648', 'Paciente dois ', '32', 'privado', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'SUSPEITO', 'Sem observaÃ§Ã£o'),
(14, '19/05/20', '123655454648', 'Paciente Três', '13', 'privado', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'DESCARTADO', 'Sem observaÃ§Ã£o'),
(15, '20/05/20', '123655454648', 'Paciente Quatro', '22', 'privado', 'Enfermaria', 'SIM', 'Hospital Santin', '123123', 'Hospital de Florianopolis', 'DESCARTADO', 'Sem observaÃ§Ã£o'),
(16, '30/05/20', '123655454648', 'Paciente Cinco', '22', 'Privado', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'DESCARTADO', 'Sem observaÃ§Ã£o'),
(17, '25/05/20', '123655454648', 'Paciente Seis', '41', 'Privado', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(18, '26/05/20', '123655454648', 'Paciente Sete', '25', 'SUS', 'Enfermaria', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(19, '27/05/20', '123655454648', 'Paciente Oito', '63', 'SUS', 'UTI COVID', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(20, '12/05/20', '123655454648', 'Paciente nove', '22', 'SUS', 'UTI COVID', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'CONFIRMADO', 'Sem observaÃ§Ã£o'),
(21, '13/05/20', '123655454648', 'Paciente Dez', '21', 'SUS', 'UTI COVID', 'SIM', 'Hospital do Santo', '123123', 'Hospital de Florianopolis', 'SUSPEITO', 'Sem observaÃ§Ã£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `usuario`, `senha`) VALUES
(7, 'admin', 'admin', 'admin@admin', 'a3175a452c7a8fea80c62a198a40f6c9'),
(8, 'admin1@admin', 'admin1@admin', 'admin1@admin', '815db043b970e0a9b6ab10b64cea710c');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `altautilc`
--
ALTER TABLE `altautilc`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `completa`
--
ALTER TABLE `completa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `corridas`
--
ALTER TABLE `corridas`
  ADD PRIMARY KEY (`Id`);

--
-- Índices para tabela `estabsaude`
--
ALTER TABLE `estabsaude`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ocupainternadouti`
--
ALTER TABLE `ocupainternadouti`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `altautilc`
--
ALTER TABLE `altautilc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `completa`
--
ALTER TABLE `completa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `corridas`
--
ALTER TABLE `corridas`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `estabsaude`
--
ALTER TABLE `estabsaude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ocupainternadouti`
--
ALTER TABLE `ocupainternadouti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
