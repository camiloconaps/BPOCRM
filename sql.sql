-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.30-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para crm_bpo
CREATE DATABASE IF NOT EXISTS `crm_bpo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crm_bpo`;

-- Volcando estructura para tabla crm_bpo.crmpa_empresa
CREATE TABLE IF NOT EXISTS `crmpa_empresa` (
  `id` int(11) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crm_bpo.crmpa_empresa: ~1 rows (aproximadamente)
DELETE FROM `crmpa_empresa`;
/*!40000 ALTER TABLE `crmpa_empresa` DISABLE KEYS */;
INSERT INTO `crmpa_empresa` (`id`, `nombre`, `estado`) VALUES
	(NULL, 'w', NULL);
/*!40000 ALTER TABLE `crmpa_empresa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
