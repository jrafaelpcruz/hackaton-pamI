-- MySQL dump 10.13  Distrib 8.0.29, for Linux (x86_64)
--
-- Host: localhost    Database: hackaton
-- ------------------------------------------------------
-- Server version	8.0.29-0ubuntu0.22.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Contato`
--

DROP TABLE IF EXISTS `Contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Contato` (
  `codcontato` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `categoria` varchar(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `datainc` date NOT NULL,
  `mensagem` varchar(600) NOT NULL,
  PRIMARY KEY (`codcontato`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Contato`
--

LOCK TABLES `Contato` WRITE;
/*!40000 ALTER TABLE `Contato` DISABLE KEYS */;
INSERT INTO `Contato` VALUES (1,'Teste de Contato','contato','Teste User','teste@teste.com','2022-06-16','Mensagem de teste'),(2,'Teste de Sugestão','sugestao','Teste','teste@teste.com','2022-06-16','Such test is my intention.'),(3,'Teste de Contato 3','noticia','Teste','teste@teste.com','2022-06-16','Teste.'),(4,'Teste de Contato 4','denuncia','Teste','teste@teste.com','2022-06-16','Such delation is my intention.'),(5,'Teste de Contato 5','contato','Teste','teste@teste.com','2022-06-16','Afg'),(6,'Teste de Contato 6','contato','Teste','teste@teste.com','2022-06-16','Teste.'),(7,'Teste 8','sugestao','Teste','teste@teste.com','2022-06-17','Testando');
/*!40000 ALTER TABLE `Contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Conteudo`
--

DROP TABLE IF EXISTS `Conteudo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Conteudo` (
  `codCtu` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `autor` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `conteudo` text NOT NULL,
  `tags` varchar(250) DEFAULT NULL,
  `imageml` varchar(30) DEFAULT NULL,
  `hora` time NOT NULL,
  `conteudo_p` varchar(250) NOT NULL,
  `imageml_p` varchar(100) NOT NULL,
  PRIMARY KEY (`codCtu`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Conteudo`
--

LOCK TABLES `Conteudo` WRITE;
/*!40000 ALTER TABLE `Conteudo` DISABLE KEYS */;
INSERT INTO `Conteudo` VALUES (1,'O Processo da Activision Blizzard','Thais Garcia','2022-06-21','<p>No fim de julho de 2021, o estado da Califórnia, nos Estados Unidos, processou a empresa responsável por jogos como Call of Duty, World of Warcraft e Diablo, por diversos casos e denúncias de assédio, abuso sexual e discriminação contra funcionárias mulheres dentro da companhia.</p><br>\r\n\r\n<p>O caso é grave e como consequência uma das funcionárias cometeu suicídio após formas extremas de abuso na empresa. Além disso, o processo cita casos em que as funcionárias em várias áreas da empresa chegaram a reclamar diretamente com o departamento de Recursos Humanos da Activision, e até ao atual presidente da Blizzard Entertainment, J. Allen Brack, sem sucesso.</p><br>\r\n\r\n<p>“Nos escritórios, mulheres são sujeitas a ‘cube crawls’ em que funcionários homens bebem quantidades significativas de álcool ao se ‘arrastar’ pelos vários cubículos e engajar em comportamento inapropriado quanto a funcionárias mulheres”, diz a ação. “Funcionários homens chegam orgulhosamente ao trabalho de ressaca, jogam videogames durante longos períodos de tempo no trabalho enquanto delegam responsabilidades para as funcionárias, comentam sobre seus encontros sexuais, falam abertamente de corpos femininos, e fazem piadas sobre estupro.”</p><br>\r\n\r\n<p>A empresa também tinha um tratamento preferencial para homens dentro da empresa, com isso, a funcionária Christine que trabalhava lá a 4 anos foi rebaixada de cargo após reclamar sobre os assédios, além de ter seus bônus salariais negados.</p><br>\r\n\r\n<p>De acordo com o processo, apenas 20% da força de trabalho da Activision Blizzard é composta por mulheres, indicando uma disparidade significativa de gênero.</p>',NULL,'img/blizzard.jpeg','11:23:00','No fim de julho de 2021, o estado da Califórnia, nos Estados Unidos, processou a empresa responsável por jogos como Call of Duty, World of Warcraft e Diablo, por diversos casos e denúncias de assédio, abuso sexual e discriminação contra... ','img/blizzardp.jpeg'),(2,'Ada Lovelace: sua importância na tecnologia','Thais Garcia','2022-06-22','<p>Durante a história da tecnologia, as mulheres se destacaram e fizeram a diferença na área. Até hoje, muitas das descobertas feitas por elas são utilizadas por nós. Uma das grandes personalidades da área foi Ada Lovelace (1815-1852), considerada a primeira programadora da história.</p>\r\n<br>\r\n<p>A nota G ficou conhecida como o primeiro programa - algoritmo - de computador do mundo, o qual era capaz de computar os números de Bernoulli.</p>\r\n<br>\r\n<p>É provável que, sem as notas de Lovelace, as máquinas demorassem mais para ser capazes de computar valores e realizar funções matemáticas. Além disso, os sistemas operacionais - os quais são construídos por meio de algoritmos - não existiriam.</p>\r\n<br>\r\n<p>Em 1982, uma linguagem de programação recebeu o nome de “Ada” em homenagem a ela, que ficou conhecida como a primeira programadora da história.</p>\r\n<br>\r\n<p>Ada traz representatividade à área da programação que é formada predominantemente por homens. Saber que as mulheres foram parte importante na construção da tecnologia e programação é algo essencial para que esse grupo ingresse cada vez mais na área e que o machismo enraizado nela diminua.</p>',NULL,'img/adalovelace.jpg','01:01:00','Durante a história da tecnologia, as mulheres se destacaram e fizeram a diferença na área. Até hoje, muitas das descobertas feitas por elas são utilizadas por nós. Uma das grandes personalidades da área foi Ada Lovelace (1815-1852), considerada...','img/adalovelacep.jpg'),(3,'Como Grace Hopper mudou a engenharia e a ciência?','Thais Garcia','2022-06-22','<p>Foi ela quem nomeou o bug de computador. Isso aconteceu quando procurava o problema no Mark II e descobriu um inseto preso nele. Ela deu o nome de debugging (debugar) para a remoção do inseto (bug).</p></br>\r\n\r\n<p>Hopper também fez parte da equipe do UNIVAC I (Universal Automatic Computer), o primeiro computador comercial que foi fabricado e comercializado nos EUA. Depois do UNIVAC I, ela criou seu próprio compilador, que traduz um programa de texto para a linguagem do computador. Isso eliminou a ideia de que os computadores só faziam aritmética.</p></br>\r\n\r\n<p>A almirante também criou uma linguagem de programação chamada Flow-Matic, que serviu de base para o COBOL (Common Business Orientede Laguage), uma linguagem orientada para o processamento de banco de dados. Mesmo não tendo participado diretamente no desenvolvimento dessa linguagem, ela é chamada de “vovó do COBOL”.</p></br> \r\n\r\n<p>Grace Hopper coleciona inúmeros doutorados honoris causa, prêmios e homenagens. Uma delas foi em 1998, quando a Marinha nomeou um navio de USS Hopper. O lema do navio é “aude et effice”, algo como “atreva-se a criar” ou “ouse e faça”, em latim. Anualmente, o congresso Grace Hopper Celebration of Women in Computing reconhece os feitos das mulheres na computação.</p>',NULL,'img/gracehopper.jpg','10:10:00','Foi ela quem nomeou o bug de computador. Isso aconteceu quando procurava o problema no Mark II e descobriu um inseto preso nele. Ela deu o nome de debugging (debugar) para a remoção do inseto (bug).','img/gracehopperp.jpg'),(4,'Carol Shaw: A primeira mulher desenvolvedora de jogos','Thais Garcia','2022-06-22','<p>Como uma das únicas mulheres em um campo dominado pelos homens, Shaw era, por vezes, confrontada com atitudes sexistas. Por exemplo, Shaw conta a história de que \"quando eu estava no ensino fundamental e médio, eu era boa em matemática. Eu entrei em um monte de concursos de matemática e ganhei prêmios. Claro, as pessoas diziam: \"Meu deus, você é boa em matemática - para uma menina\". Isso era meio irritante. Por que meninas não podem ser boas em matemática?\"</p><br>\r\n\r\n<p>Formada em Ciências da Computação pela Universidade de Berkeley, foi contratada pela Atari em 1978. Neste mesmo ano se tornou a primeira programadora de um game chamado 3D Tic-Tac-Toe, mas foi um passo importantíssimo para abrir as portas para outras mulheres entrarem na indústria de desenvolvimento.</p><br>\r\n\r\n<p>Quatro anos depois, Carol já como funcionária da Activision, se tornou programadora do inesquecível River Raid, seu game de maior sucesso. Devido a esse estrondoso sucesso, ela pode deixar os trabalhos produtivos e lucrativos para se aposentar nos anos 90 para poder realizar trabalhos organizacionais e voluntários que possuem relação com a tecnologia.</p>',NULL,'img/carolshaw.jpg','10:10:00','Como uma das únicas mulheres em um campo dominado pelos homens, Shaw era, por vezes, confrontada com atitudes sexistas. Por exemplo, Shaw conta a história de que \"quando eu estava no ensino fundamental e médio, eu era boa em matemática. Eu entrei...','img/carolshawp.jpg');
/*!40000 ALTER TABLE `Conteudo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-22 11:45:54
