-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         10.1.28-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.5.0.5229
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crm_bpo.crmpa_empresa: ~2 rows (aproximadamente)
DELETE FROM `crmpa_empresa`;
/*!40000 ALTER TABLE `crmpa_empresa` DISABLE KEYS */;
INSERT INTO `crmpa_empresa` (`id`, `nombre`, `estado`) VALUES
	(1, 'Empresa Pruebas', 1);
/*!40000 ALTER TABLE `crmpa_empresa` ENABLE KEYS */;

-- Volcando estructura para tabla crm_bpo.crmpa_perfiles
CREATE TABLE IF NOT EXISTS `crmpa_perfiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crm_bpo.crmpa_perfiles: ~3 rows (aproximadamente)
DELETE FROM `crmpa_perfiles`;
/*!40000 ALTER TABLE `crmpa_perfiles` DISABLE KEYS */;
INSERT INTO `crmpa_perfiles` (`id`, `perfil`, `estado`) VALUES
	(1, 'Administrador', 1);
INSERT INTO `crmpa_perfiles` (`id`, `perfil`, `estado`) VALUES
	(2, 'Backoffices', 1);
INSERT INTO `crmpa_perfiles` (`id`, `perfil`, `estado`) VALUES
	(3, 'Asesor', 1);
/*!40000 ALTER TABLE `crmpa_perfiles` ENABLE KEYS */;

-- Volcando estructura para tabla crm_bpo.crmpa_permisos
CREATE TABLE IF NOT EXISTS `crmpa_permisos` (
  `id_usuario` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crm_bpo.crmpa_permisos: ~3 rows (aproximadamente)
DELETE FROM `crmpa_permisos`;
/*!40000 ALTER TABLE `crmpa_permisos` DISABLE KEYS */;
INSERT INTO `crmpa_permisos` (`id_usuario`, `id_perfil`, `id_empresa`) VALUES
	(1, 1, 1);
INSERT INTO `crmpa_permisos` (`id_usuario`, `id_perfil`, `id_empresa`) VALUES
	(2, 2, 1);
INSERT INTO `crmpa_permisos` (`id_usuario`, `id_perfil`, `id_empresa`) VALUES
	(3, 3, 1);
/*!40000 ALTER TABLE `crmpa_permisos` ENABLE KEYS */;

-- Volcando estructura para tabla crm_bpo.crmpa_usuarios
CREATE TABLE IF NOT EXISTS `crmpa_usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `apellido` varchar(250) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla crm_bpo.crmpa_usuarios: ~3 rows (aproximadamente)
DELETE FROM `crmpa_usuarios`;
/*!40000 ALTER TABLE `crmpa_usuarios` DISABLE KEYS */;
INSERT INTO `crmpa_usuarios` (`id`, `user`, `password`, `nombre`, `apellido`, `estado`) VALUES
	(1, 'pruebas1', 'ee2ec3cc66427bb422894495068222a8', 'Usuario', 'Administrador', 1);
INSERT INTO `crmpa_usuarios` (`id`, `user`, `password`, `nombre`, `apellido`, `estado`) VALUES
	(2, 'pruebas2', 'ee2ec3cc66427bb422894495068222a8', 'Usuario', 'Backoffices', 1);
INSERT INTO `crmpa_usuarios` (`id`, `user`, `password`, `nombre`, `apellido`, `estado`) VALUES
	(3, 'pruebas3', 'ee2ec3cc66427bb422894495068222a8', 'Usuario', 'Asesor', 1);
/*!40000 ALTER TABLE `crmpa_usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
