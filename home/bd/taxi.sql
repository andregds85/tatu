-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Maio-2020 às 19:51
-- Versão do servidor: 5.7.11
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
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
  `senha` varchar(50) NOT NULL,
  `cnes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `sobrenome`, `usuario`, `senha`, `cnes`) VALUES
(7, 'admin', 'admin', 'admin@admin', 'a3175a452c7a8fea80c62a198a40f6c9', '42c17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `altautilc`
--
ALTER TABLE `altautilc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estabsaude`
--
ALTER TABLE `estabsaude`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocupainternadouti`
--
ALTER TABLE `ocupainternadouti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `altautilc`
--
ALTER TABLE `altautilc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `estabsaude`
--
ALTER TABLE `estabsaude`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ocupainternadouti`
--
ALTER TABLE `ocupainternadouti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
