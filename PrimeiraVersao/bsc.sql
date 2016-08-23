-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 
-- Versão do Servidor: 5.5.27
-- Versão do PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bsc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE IF NOT EXISTS `aluno` (
  `Matricula` text NOT NULL,
  `Nome` text NOT NULL,
  `Turma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`Matricula`, `Nome`, `Turma`) VALUES
('58585858', 'Yuri', 'IN313'),
('36363636', 'Matheus', 'IN313'),
('787979797997', 'Juan', 'CDZ'),
('123123', 'Jorhe', 'CDZ'),
('456456', 'Lucas', '255'),
('789789', 'Kiko', '123456'),
('159753', 'Neymar', 'CDZ'),
('147963', 'Whey', 'CDZ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_aula`
--

CREATE TABLE IF NOT EXISTS `aluno_aula` (
  `Nome` text NOT NULL,
  `data_Aula` text NOT NULL,
  `cod_Disc` text NOT NULL,
  `Matricula` text NOT NULL,
  `presenca` text NOT NULL,
  `turma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `aluno_aula`
--

INSERT INTO `aluno_aula` (`Nome`, `data_Aula`, `cod_Disc`, `Matricula`, `presenca`, `turma`) VALUES
('Neymar', '10/09/2015', 'Biologia', '159753', 'True', 'CDZ'),
('Whey', '10/09/2015', 'Biologia', '147963', 'True', 'CDZ'),
('Neymar', '10/10/2015', 'Biologia', '159753', 'True', 'CDZ'),
('Whey', '10/10/2015', 'Biologia', '147963', 'True', 'CDZ'),
('Neymar', '10/09/2015', 'Historia', '159753', '', 'CDZ'),
('Whey', '10/09/2015', 'Historia', '147963', 'True', 'CDZ'),
('Neymar', '10/10/2015', 'Historia', '159753', '', 'CDZ'),
('Whey', '10/10/2015', 'Historia', '147963', 'True', 'CDZ'),
('Yuri', '10/09/2015', 'Supernatural', '58585858', 'True', 'IN313'),
('Matheus', '10/09/2015', 'Supernatural', '36363636', 'True', 'IN313'),
('Yuri', '10/10/2015', 'Supernatural', '58585858', 'True', 'IN313'),
('Matheus', '10/10/2015', 'Supernatural', '36363636', 'False', 'IN313'),
('Yuri', '10/09/2015', 'Jacobinos', '58585858', 'True', 'IN313'),
('Matheus', '10/09/2015', 'Jacobinos', '36363636', 'True', 'IN313'),
('Yuri', '10/10/2015', 'Jacobinos', '58585858', '', 'IN313'),
('Matheus', '10/10/2015', 'Jacobinos', '36363636', '', 'IN313');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE IF NOT EXISTS `aluno_turma` (
  `Matricula` text NOT NULL,
  `Turma` text NOT NULL,
  `Ano` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`Matricula`, `Turma`, `Ano`) VALUES
('58585858', 'IN313', '2014'),
('36363636', 'IN313', '2014'),
('58585858', 'IN313', '2015'),
('36363636', 'IN313', '2015'),
('787979797997', 'CDZ', '2014'),
('123123', 'CDZ', '2015'),
('456456', '255', '2015'),
('789789', '123456', '2015'),
('159753', 'CDZ', '2015'),
('147963', 'CDZ', '2015'),
('159753', 'CDZ', '2015'),
('147963', 'CDZ', '2015');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

CREATE TABLE IF NOT EXISTS `conteudo` (
  `cod_cont` int(11) NOT NULL,
  `cod_disc` char(50) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`cod_cont`, `cod_disc`, `descricao`) VALUES
(1, 'Saint Seiya', 'Batalha das Doze Casas'),
(2, 'Saint Seiya', 'Saga de Asgard'),
(3, 'Saint Seiya', 'Saga de Poseidon'),
(4, 'Saint Seiya', 'Saga de Hades'),
(1, 'Battlefield 4', 'Long Range Sniper'),
(2, 'Battlefield 4', 'Medium Range Sniper'),
(3, 'Battlefield 4', 'Close Range Sniper'),
(4, 'Battlefield 4', 'Safe Camp');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `codigo` text NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`codigo`, `descricao`) VALUES
('788', 'ashnhoashdnsa'),
('CDZ', 'demais'),
('Supernatural', 'Negocio da familia'),
('Jacobinos', 'FEUDALISMO'),
('Biologia', '21312312312'),
('Historia', 'STANO'),
('Saint Seiya', 'Fantastico'),
('Battlefield 4', 'FPS'),
('788', 'ashnhoashdnsa'),
('CDZ', 'demais');

-- --------------------------------------------------------

--
-- Estrutura da tabela `disc_aula`
--

CREATE TABLE IF NOT EXISTS `disc_aula` (
  `cod_disc` text NOT NULL,
  `data_aula` text NOT NULL,
  `conteudo` text NOT NULL,
  `cod_prof` text NOT NULL,
  `turma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `disc_aula`
--

INSERT INTO `disc_aula` (`cod_disc`, `data_aula`, `conteudo`, `cod_prof`, `turma`) VALUES
('Biologia', '10/9/2015', 'czzczxczczx', '82364', 'CDZ'),
('Biologia', '10/10/2015', 'zcx zxcz', '82364', 'CDZ'),
('Historia', '10/9/2015', 'dasdffsadfsd', '123654', 'CDZ'),
('Historia', '10/10/2015', 'uuuuuuuuuuuuuuuuuuuuu', '123654', 'CDZ'),
('Supernatural', '10/9/2015', 'Exorcisamus-te', '1212121212121', 'IN313'),
('Supernatural', '10/10/2015', 'Exorcisamus-te', '1212121212121', 'IN313'),
('Jacobinos', '10/9/2015', 'ddddddddddddddddddddddd', '8965322683', 'IN313'),
('Jacobinos', '10/10/2015', 'sssssssssssssssssssssssssssssssssssss', '8965322683', 'IN313');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `matricula` text NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`matricula`, `nome`) VALUES
('234234', 'Seiya'),
('234234', 'Seiya'),
('1212121212121', 'Geremias'),
('8965322683', 'YKIKI'),
('123654', 'Jus??'),
('123654', 'Abraham'),
('82364', 'KIKO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_disciplina`
--

CREATE TABLE IF NOT EXISTS `prof_disciplina` (
  `matricula` text NOT NULL,
  `cod_disc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `prof_disciplina`
--

INSERT INTO `prof_disciplina` (`matricula`, `cod_disc`) VALUES
('234234', 'CDZ'),
('234234', '788'),
('1212121212121', 'Supernatural'),
('8965322683', 'Jacobinos'),
('123654', 'Biologia'),
('123654', 'Historia'),
('82364', 'Biologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prof_turma`
--

CREATE TABLE IF NOT EXISTS `prof_turma` (
  `cod_prof` text NOT NULL,
  `cod_turma` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Extraindo dados da tabela `prof_turma`
--

INSERT INTO `prof_turma` (`cod_prof`, `cod_turma`) VALUES
('1212121212121', 'IN313'),
('8965322683', 'IN313'),
('1212121212121', 'CDZ'),
('8965322683', 'CDZ'),
('123654', 'CDZ'),
('82364', 'CDZ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `questoes`
--

CREATE TABLE IF NOT EXISTS `questoes` (
  `codigo` int(255) NOT NULL AUTO_INCREMENT,
  `autor` varchar(50) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `tipo` varchar(49) NOT NULL,
  `enunciado` varchar(1000) NOT NULL,
  `op1` varchar(1000) NOT NULL,
  `op2` varchar(1000) NOT NULL,
  `op3` varchar(1000) NOT NULL,
  `op4` varchar(1000) NOT NULL,
  `op5` varchar(1000) NOT NULL,
  `cod_disc` char(30) NOT NULL,
  `cod_cont` varchar(1000) NOT NULL,
  `gab` varchar(1000) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=ascii AUTO_INCREMENT=23 ;

--
-- Extraindo dados da tabela `questoes`
--

INSERT INTO `questoes` (`codigo`, `autor`, `nivel`, `tipo`, `enunciado`, `op1`, `op2`, `op3`, `op4`, `op5`, `cod_disc`, `cod_cont`, `gab`) VALUES
(1, 'KIKO', 'Basico', 'Objetiva', '(UFL) Todas as alternativas apresentam ', 'A quest?o do adult?rio, tratada de ', 'O narrador, atrav?s presente .', 'O narrador protagonista, ao assumir a primeira ', 'O autor, introduzindo-se na narrativa, fornece ao', 'A narrativa, marcada pela ironia, ', 'Battlefield 4', 'Safe Camp', 'D'),
(2, 'Abraham', 'Intermediario', 'Objetiva', ' (FUVEST / GV) O meu fim evidente era atar', 'Pelas dificuldades inerentes ? ', 'Pelo receio de confessar suas fraquezas ', 'Porque era imposs?vel ', ' Pela falta de bom senso ', 'Porque o tempo impiedoso,', 'Battlefield 4', 'Safe Camp', 'C'),
(3, 'Seiya', 'Avancado', 'Objetiva', '(UFU-MG) Considere a obra Dom Casmurro, (UFU-MG) Considere a obra Dom Casmurro, (UFU-MG) Considere a obra Dom Casmurro, ', 'Se apenas IV ? correta. gggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 'Se apenas I, II s?o corretas. ', 'Se apenas III e V s?o corretas.', 'Se apenas V ? correta.', ' Nenhuma delas ', 'Battlefield 4', 'Safe Camp', 'A'),
(4, 'Abraham', 'Basico', 'Discursiva', 'A quest?o a seguir baseia-se', '', '', '', '', '', 'Battlefield 4', 'Safe Camp', 'SIM'),
(8, 'asdasd', 'Basico', 'Discursiva', 'asdasd', '', '', '', '', '', 'asdasd', '', 'asdasda'),
(9, 'asdasd', 'Basico', 'Discursiva', 'asdasd', '', '', '', '', '', 'asdasd', '', 'asdasda'),
(10, 'asdasd', 'Basico', 'Discursiva', 'asdas', '', '', '', '', '', 'Jacobinos', 'assasa', 'asdasd'),
(11, 'Yuri', 'Basico', 'Discursiva', 'Dante mata demonios ?', '', '', '', '', '', 'DMC', 'Supernatural', 'Sim '),
(12, 'sdauhdahus', 'Basico', 'Discursiva', 'sauhdsauhdashu', '', '', '', '', '', 'DMC8', 'Supernatural', 'saduhasuhsa'),
(13, 'asdfasdf', 'Basico', 'Objetiva', 'asdfsadf', 'afsafdas', 'asdfasd', 'asdfasdf', 'asdfasdf', 'afasfdsasafd', 'Supernatural', 'asassa', 'e'),
(14, 'asdasdasd', 'Basico', 'Objetiva', 'dasdas', 'asda', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'Historia', 'asasas', 'd'),
(15, 'Nunes', 'Basico', 'Discursiva', 'dfsddddddddddd', '', '', '', '', '', 'Supernatural', 'Vida e Morte de matheus nunes', 'asdas'),
(18, 'wqeqweqwwqwq', 'Basico', 'Discursiva', 'yuh7u7yhuu', '', '', '', '', '', 'Supernatural', 'qqwew', 'uuuuuuuuu'),
(19, 'wqeqweqwwqwq', 'Basico', 'Discursiva', 'yuh7u7yhuu', '', '', '', '', '', 'Supernatural', 'qqwew', 'uuuuuuuuu'),
(20, 'asdasdaasdas', 'Intermediario', 'Discursiva', 'asdsadsad', '', '', '', '', '', 'Supernatural', 'sasadsaasd', 'asa'),
(21, 'qwwwwwwwwwwwww', 'Avancado', 'Discursiva', 'qqqqqqqqqq', '', '', '', '', '', 'Supernatural', 'wqqqqqqqqqq', 'qqqqqqq'),
(22, 'aaaaaaaaaaaaa', 'Basico', 'Objetiva', 'aaaaaaaaaaaaaaa', 'a', 'b', 'c', 'd', 'e', 'Supernatural', 'aaaaaaaaaaa', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `Codigo` text CHARACTER SET ascii NOT NULL,
  `Qtde_Alunos` text CHARACTER SET ascii NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`Codigo`, `Qtde_Alunos`) VALUES
('CDZ', '88'),
('IN313', '21');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
