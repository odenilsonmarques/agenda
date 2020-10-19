-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.13-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `agenda`;

-- Copiando estrutura para tabela agenda.contatos
CREATE TABLE IF NOT EXISTS `contatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `telefone` varchar(45) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela agenda.contatos: ~14 rows (aproximadamente)
/*!40000 ALTER TABLE `contatos` DISABLE KEYS */;
INSERT INTO `contatos` (`id`, `nome`, `telefone`, `email`) VALUES
	(14, 'Alandia', '98981601009', 'odmarquesgm@gmail.com'),
	(15, 'Alandia', '98981601009', 'odmarquesregm@gmail.com'),
	(16, 'odenilson marques araújo', '98981601009', 'bia@hotmail.com'),
	(17, 'odenilson', '98999926891', 'odmarquesgm@gmail.com'),
	(22, 'odenilson marques araújo', '98981601009', 'frkkmarques@gmail.com'),
	(24, 'daniel', '98981601009', 'daniel@gmail.com'),
	(41, 'Henrique', '98981601001', 'henrique@gmail.com'),
	(42, 'Polyene', '98988921347', 'polyene@gmail.com'),
	(43, 'Davi', '98981601000', 'davi@gmail.com'),
	(44, 'jorge', '98988921325', 'jorge@gmail.com'),
	(45, 'Bianca silva', '98981504989', 'biaengecomp@gmail.com'),
	(49, 'Leidiane', '(98) 6 5485-8555', 'leide@gmail.com'),
	(50, 'araujo', '(98) 7 2187-1728', 'araujo@gmail.com'),
	(51, 'valquiria', '(98) 2 7182-1782', 'val@gmaill.com');
/*!40000 ALTER TABLE `contatos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
