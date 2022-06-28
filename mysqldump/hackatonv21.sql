-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 28-Jun-2022 às 14:38
-- Versão do servidor: 10.5.2-MariaDB-1:10.5.2+maria~bionic
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `hackaton`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `Contato`
--

CREATE TABLE `Contato` (
  `codcontato` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datainc` date NOT NULL,
  `mensagem` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `Conteudo`
--

CREATE TABLE `Conteudo` (
  `codCtu` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `autor` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `conteudo` text NOT NULL,
  `tags` varchar(250) DEFAULT NULL,
  `imageml` varchar(30) DEFAULT NULL,
  `hora` time NOT NULL,
  `conteudo_p` varchar(250) NOT NULL,
  `imageml_p` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `Conteudo`
--

INSERT INTO `Conteudo` (`codCtu`, `titulo`, `autor`, `data`, `conteudo`, `tags`, `imageml`, `hora`, `conteudo_p`, `imageml_p`) VALUES
(1, 'O Processo da Activision Blizzard', 'Thais Garcia', '2022-06-21', '<p>No fim de julho de 2021, o estado da Califórnia, nos Estados Unidos, processou a empresa responsável por jogos como Call of Duty, World of Warcraft e Diablo, por diversos casos e denúncias de assédio, abuso sexual e discriminação contra funcionárias mulheres dentro da companhia.</p><br>\r\n\r\n<p>O caso é grave e como consequência uma das funcionárias cometeu suicídio após formas extremas de abuso na empresa. Além disso, o processo cita casos em que as funcionárias em várias áreas da empresa chegaram a reclamar diretamente com o departamento de Recursos Humanos da Activision, e até ao atual presidente da Blizzard Entertainment, J. Allen Brack, sem sucesso.</p><br>\r\n\r\n<p>“Nos escritórios, mulheres são sujeitas a ‘cube crawls’ em que funcionários homens bebem quantidades significativas de álcool ao se ‘arrastar’ pelos vários cubículos e engajar em comportamento inapropriado quanto a funcionárias mulheres”, diz a ação. “Funcionários homens chegam orgulhosamente ao trabalho de ressaca, jogam videogames durante longos períodos de tempo no trabalho enquanto delegam responsabilidades para as funcionárias, comentam sobre seus encontros sexuais, falam abertamente de corpos femininos, e fazem piadas sobre estupro.”</p><br>\r\n\r\n<p>A empresa também tinha um tratamento preferencial para homens dentro da empresa, com isso, a funcionária Christine que trabalhava lá a 4 anos foi rebaixada de cargo após reclamar sobre os assédios, além de ter seus bônus salariais negados.</p><br>\r\n\r\n<p>De acordo com o processo, apenas 20% da força de trabalho da Activision Blizzard é composta por mulheres, indicando uma disparidade significativa de gênero.</p>', NULL, 'img/blizzard.jpeg', '11:23:00', 'No fim de julho de 2021, o estado da Califórnia, nos Estados Unidos, processou a empresa responsável por jogos como Call of Duty, World of Warcraft e Diablo, por diversos casos e denúncias de assédio, abuso sexual e discriminação contra... ', 'img/blizzardp.jpeg'),
(2, 'Ada Lovelace: sua importância na tecnologia', 'Thais Garcia', '2022-06-22', '<p>Durante a história da tecnologia, as mulheres se destacaram e fizeram a diferença na área. Até hoje, muitas das descobertas feitas por elas são utilizadas por nós. Uma das grandes personalidades da área foi Ada Lovelace (1815-1852), considerada a primeira programadora da história.</p>\r\n<br>\r\n<p>A nota G ficou conhecida como o primeiro programa - algoritmo - de computador do mundo, o qual era capaz de computar os números de Bernoulli.</p>\r\n<br>\r\n<p>É provável que, sem as notas de Lovelace, as máquinas demorassem mais para ser capazes de computar valores e realizar funções matemáticas. Além disso, os sistemas operacionais - os quais são construídos por meio de algoritmos - não existiriam.</p>\r\n<br>\r\n<p>Em 1982, uma linguagem de programação recebeu o nome de “Ada” em homenagem a ela, que ficou conhecida como a primeira programadora da história.</p>\r\n<br>\r\n<p>Ada traz representatividade à área da programação que é formada predominantemente por homens. Saber que as mulheres foram parte importante na construção da tecnologia e programação é algo essencial para que esse grupo ingresse cada vez mais na área e que o machismo enraizado nela diminua.</p>', NULL, 'img/adalovelace.jpg', '01:01:00', 'Durante a história da tecnologia, as mulheres se destacaram e fizeram a diferença na área. Até hoje, muitas das descobertas feitas por elas são utilizadas por nós. Uma das grandes personalidades da área foi Ada Lovelace (1815-1852), considerada...', 'img/adalovelacep.jpg'),
(3, 'Como Grace Hopper mudou a engenharia e a ciência?', 'Thais Garcia', '2022-06-22', '<p>Foi ela quem nomeou o bug de computador. Isso aconteceu quando procurava o problema no Mark II e descobriu um inseto preso nele. Ela deu o nome de debugging (debugar) para a remoção do inseto (bug).</p></br>\r\n\r\n<p>Hopper também fez parte da equipe do UNIVAC I (Universal Automatic Computer), o primeiro computador comercial que foi fabricado e comercializado nos EUA. Depois do UNIVAC I, ela criou seu próprio compilador, que traduz um programa de texto para a linguagem do computador. Isso eliminou a ideia de que os computadores só faziam aritmética.</p></br>\r\n\r\n<p>A almirante também criou uma linguagem de programação chamada Flow-Matic, que serviu de base para o COBOL (Common Business Orientede Laguage), uma linguagem orientada para o processamento de banco de dados. Mesmo não tendo participado diretamente no desenvolvimento dessa linguagem, ela é chamada de “vovó do COBOL”.</p></br> \r\n\r\n<p>Grace Hopper coleciona inúmeros doutorados honoris causa, prêmios e homenagens. Uma delas foi em 1998, quando a Marinha nomeou um navio de USS Hopper. O lema do navio é “aude et effice”, algo como “atreva-se a criar” ou “ouse e faça”, em latim. Anualmente, o congresso Grace Hopper Celebration of Women in Computing reconhece os feitos das mulheres na computação.</p>', NULL, 'img/gracehopper.jpg', '10:10:00', 'Foi ela quem nomeou o bug de computador. Isso aconteceu quando procurava o problema no Mark II e descobriu um inseto preso nele. Ela deu o nome de debugging (debugar) para a remoção do inseto (bug).', 'img/gracehopperp.jpg'),
(4, 'Carol Shaw: A primeira mulher desenvolvedora de jogos', 'Thais Garcia', '2022-06-22', '<p>Como uma das únicas mulheres em um campo dominado pelos homens, Shaw era, por vezes, confrontada com atitudes sexistas. Por exemplo, Shaw conta a história de que \"quando eu estava no ensino fundamental e médio, eu era boa em matemática. Eu entrei em um monte de concursos de matemática e ganhei prêmios. Claro, as pessoas diziam: \"Meu deus, você é boa em matemática - para uma menina\". Isso era meio irritante. Por que meninas não podem ser boas em matemática?\"</p><br>\r\n\r\n<p>Formada em Ciências da Computação pela Universidade de Berkeley, foi contratada pela Atari em 1978. Neste mesmo ano se tornou a primeira programadora de um game chamado 3D Tic-Tac-Toe, mas foi um passo importantíssimo para abrir as portas para outras mulheres entrarem na indústria de desenvolvimento.</p><br>\r\n\r\n<p>Quatro anos depois, Carol já como funcionária da Activision, se tornou programadora do inesquecível River Raid, seu game de maior sucesso. Devido a esse estrondoso sucesso, ela pode deixar os trabalhos produtivos e lucrativos para se aposentar nos anos 90 para poder realizar trabalhos organizacionais e voluntários que possuem relação com a tecnologia.</p>', NULL, 'img/carolshaw.jpg', '10:10:00', 'Como uma das únicas mulheres em um campo dominado pelos homens, Shaw era, por vezes, confrontada com atitudes sexistas. Por exemplo, Shaw conta a história de que \"quando eu estava no ensino fundamental e médio, eu era boa em matemática. Eu entrei...', 'img/carolshawp.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Depoimentos`
--

CREATE TABLE `Depoimentos` (
  `cod_depo` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `titulo_op` varchar(100) DEFAULT NULL,
  `depoimento` varchar(1000) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `Contato`
--
ALTER TABLE `Contato`
  ADD PRIMARY KEY (`codcontato`);

--
-- Índices para tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  ADD PRIMARY KEY (`codCtu`);

--
-- Índices para tabela `Depoimentos`
--
ALTER TABLE `Depoimentos`
  ADD PRIMARY KEY (`cod_depo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Contato`
--
ALTER TABLE `Contato`
  MODIFY `codcontato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  MODIFY `codCtu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `Depoimentos`
--
ALTER TABLE `Depoimentos`
  MODIFY `cod_depo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
