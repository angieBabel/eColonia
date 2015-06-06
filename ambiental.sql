-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2015 a las 18:02:20
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `ambiental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo-ecotecnia`
--

CREATE TABLE IF NOT EXISTS `catalogo-ecotecnia` (
  `idEcotecnia` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `modouso` varchar(100) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  PRIMARY KEY (`idEcotecnia`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `catalogo-ecotecnia`
--

INSERT INTO `catalogo-ecotecnia` (`idEcotecnia`, `nombre`, `ubicacion`, `descripcion`, `modouso`, `imagen`) VALUES
(1, 'eco-ladrillos', 'Koyotlán #291', 'ladrillos de pet con basura dentro', 'Sirven para hacer muros', 'img/ecoladrillos.jpg'),
(2, 'camas de cultivo', 'Gabino Barredo #238', 'sitios para cultivar huertos urbanos', 'En el patio para cosechar plantas propias', 'img/huerto.jpg'),
(3, 'estufa solar', 'Bahía de Manzanillo #113', 'estufa que utiliza los rayos del sol', 'Para comer con los amigos en una parrillada', 'img/estufa.jpg'),
(4, 'composta', 'cuauhtemoc #90', 'es el reciclaje de desperdicios orgánicos que', 'en botes composteros se agregan los desperdicios', 'img/post-composta-un-material-valorizable.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo-residuos`
--

CREATE TABLE IF NOT EXISTS `catalogo-residuos` (
  `idResiduo` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idResiduo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `catalogo-residuos`
--

INSERT INTO `catalogo-residuos` (`idResiduo`, `nombre`, `descripcion`) VALUES
(0, 'PET', 'botellas y envases de plastico limpios y seco'),
(1, 'PET', 'botellas y envases de plastico limpios y seco'),
(2, 'vidrio', 'botellas y envases de vidrio'),
(3, 'papel y carton', 'residuos secos echos de papel o carton proces');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colono`
--

CREATE TABLE IF NOT EXISTS `colono` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `casa` int(11) NOT NULL,
  `apellidoPaterno` varchar(30) NOT NULL,
  `apellidoMaterno` varchar(30) NOT NULL,
  `fechaNacimiento` datetime NOT NULL,
  `estatura` double NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `ocupacion` int(11) NOT NULL,
  `peso` float NOT NULL DEFAULT '0',
  `email` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL,
  `tel_celular` varchar(12) NOT NULL DEFAULT '000-00-00000',
  PRIMARY KEY (`id`),
  KEY `FK_colono_casa` (`casa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `colono`
--

INSERT INTO `colono` (`id`, `casa`, `apellidoPaterno`, `apellidoMaterno`, `fechaNacimiento`, `estatura`, `nombre`, `ocupacion`, `peso`, `email`, `sexo`, `tel_celular`) VALUES
(1, 2, 'garcia', 'montes', '1993-01-25 00:00:00', 1.7, 'jordi', 0, 75, 'jordign@gmail.com', 'M', '3121023510'),
(2, 2, 'salazr', 'salazar', '1992-12-22 00:00:00', 1.8, 'rafa', 0, 90, 'zhivosibdasjbdas@faxland.xxx', 'M', '3121111752'),
(3, 2, 'barreda', 'beltran', '1993-07-21 00:00:00', 1.6, 'angelica', 0, 60, 'anjelyk.b@gmail.com', 'F', '3125959405'),
(4, 2, 'roque', 'santacruz', '1982-12-02 00:00:00', 1.5, 'jorge', 0, 75, 'roque@faxland.xxx', 'M', '3121563752');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecotecnia`
--

CREATE TABLE IF NOT EXISTS `ecotecnia` (
  `idActividad` int(11) NOT NULL AUTO_INCREMENT,
  `idEcotecnia` int(11) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `fecha-inicio` date DEFAULT NULL,
  `fecha-fin` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `eco-bonos` int(11) DEFAULT NULL,
  `Galeria_idGaleria` int(11) NOT NULL,
  PRIMARY KEY (`idActividad`,`Galeria_idGaleria`),
  UNIQUE KEY `idEcotecnia_UNIQUE` (`idEcotecnia`),
  KEY `fk_Ecotécnia_Galeria1_idx` (`Galeria_idGaleria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `ecotecnia`
--

INSERT INTO `ecotecnia` (`idActividad`, `idEcotecnia`, `nombre`, `descripcion`, `responsable`, `fecha-inicio`, `fecha-fin`, `horario`, `lugar`, `eco-bonos`, `Galeria_idGaleria`) VALUES
(1, 2, 'siembra de camas de pepinos', 'Se sembraran pepinos en las camas de cultivo', 'ramon ramirez', '2015-06-05', '2015-06-05', '00:00:09', 'colonia almendros', 3, 1),
(2, 1, 'construcción de jardineras', 'se usaran los eco-ladrillos para hacer jardin', 'felipe hernandez', '2015-08-02', '2015-08-05', '00:00:08', 'las palmas', 5, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecotecnia_has_colono`
--

CREATE TABLE IF NOT EXISTS `ecotecnia_has_colono` (
  `Ecotécnia_idActividad` int(11) NOT NULL,
  `Colono_id` int(11) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Ecotécnia_idActividad`,`Colono_id`),
  KEY `fk_Ecotécnia_has_Colono_Colono1_idx` (`Colono_id`),
  KEY `fk_Ecotécnia_has_Colono_Ecotécnia1_idx` (`Ecotécnia_idActividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ecotecnia_has_colono`
--

INSERT INTO `ecotecnia_has_colono` (`Ecotécnia_idActividad`, `Colono_id`, `estado`) VALUES
(1, 1, 'inscrito'),
(1, 2, 'inscrito'),
(2, 3, 'inscrito');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecotecnia_has_externo`
--

CREATE TABLE IF NOT EXISTS `ecotecnia_has_externo` (
  `Ecotécnia_idActividad` int(11) NOT NULL,
  `Externo_idExterno` int(11) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Ecotécnia_idActividad`,`Externo_idExterno`),
  KEY `fk_Ecotécnia_has_Externo_Externo1_idx` (`Externo_idExterno`),
  KEY `fk_Ecotécnia_has_Externo_Ecotécnia1_idx` (`Ecotécnia_idActividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `idEvento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `idGaleria` int(11) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `fecha_Inicio` date DEFAULT NULL,
  `fecha_Fin` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `eco-bonos` int(11) DEFAULT NULL,
  `convocatoria` varchar(10) DEFAULT NULL,
  `galeria_idGaleria` int(11) NOT NULL,
  PRIMARY KEY (`idEvento`,`galeria_idGaleria`),
  KEY `fk_Evento_Galeria1_idx` (`galeria_idGaleria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='	' AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`idEvento`, `nombre`, `descripcion`, `idGaleria`, `responsable`, `fecha_Inicio`, `fecha_Fin`, `horario`, `lugar`, `eco-bonos`, `convocatoria`, `galeria_idGaleria`) VALUES
(2, 'feria ambiental', 'evento de conferencias y exposiciones', 1, 'juan dominguez', '2015-06-04', '2015-06-06', '00:00:08', 'piedra lisa', 5, '2', 2),
(3, 'brigada', 'birgade de limpieza', 2, 'rafael salazar', '2015-05-04', '2015-05-06', '00:00:08', 'las palmas', 10, '5', 2),
(6, 'Prueba de alta ', 'prueba de alta en la casa de rafa', NULL, 'Rafael Salazar', '2015-06-02', NULL, NULL, 'Casa de rafa', 0, NULL, 0),
(7, 'Otra alta', 'hola muchachas no inventes XD D:', NULL, 'Jordi', '2015-01-25', NULL, NULL, 'Rafa''s house', 5, NULL, 0),
(8, 'prueba', 'asidlhasndlkasndas', NULL, NULL, '2015-01-25', NULL, NULL, 'salon de la paz', 2, NULL, 0),
(9, 'prueba', 'asidlhasndlkasndas', NULL, NULL, '2015-01-25', NULL, NULL, 'salon de la paz', 2, NULL, 0),
(10, 'prueba', 'asidlhasndlkasndas', NULL, NULL, '2015-01-25', NULL, NULL, 'salon de la paz', 2, NULL, 0),
(11, 'Congreso de las', 'Hola que hace', NULL, NULL, '2015-01-25', NULL, NULL, 'Casa de rafa', 3, NULL, 0),
(12, 'Congreso de las', 'Hola que hace', NULL, NULL, '2015-01-25', NULL, NULL, 'Casa de rafa', 3, NULL, 0),
(13, '1', 'Hahahaah', NULL, NULL, '2015-05-25', NULL, NULL, 'casa', 2, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_has_colono`
--

CREATE TABLE IF NOT EXISTS `evento_has_colono` (
  `Evento_idEvento` int(11) NOT NULL,
  `Colono_id` int(11) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Evento_idEvento`,`Colono_id`),
  KEY `fk_Evento_has_Colono_Colono1_idx` (`Colono_id`),
  KEY `fk_Evento_has_Colono_Evento1_idx` (`Evento_idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento_has_externo`
--

CREATE TABLE IF NOT EXISTS `evento_has_externo` (
  `Evento_idEvento` int(11) NOT NULL,
  `Externo_idExterno` int(11) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Evento_idEvento`,`Externo_idExterno`),
  KEY `fk_Evento_has_Externo_Externo1_idx` (`Externo_idExterno`),
  KEY `fk_Evento_has_Externo_Evento1_idx` (`Evento_idEvento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `externo`
--

CREATE TABLE IF NOT EXISTS `externo` (
  `idExterno` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Dirección` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idExterno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `externo`
--

INSERT INTO `externo` (`idExterno`, `Nombre`, `Dirección`) VALUES
(1, 'ramon', 'koyotlan 291 loma hermosa'),
(2, 'juan', 'miramar 111 villa iskalli');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE IF NOT EXISTS `galeria` (
  `idGaleria` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`idGaleria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`idGaleria`, `fecha`) VALUES
(1, '2015-06-03'),
(2, '2015-06-03'),
(3, '2015-06-03'),
(4, '2015-06-03'),
(5, '2015-06-04'),
(6, '2015-06-04'),
(7, '2015-06-04'),
(8, '2015-06-04'),
(9, '2015-06-04'),
(10, '2015-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `idInstructor` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idInstructor`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idInstructor`, `nombre`, `profesion`) VALUES
(1, 'yasser batas', 'traceur'),
(2, 'german garcia', 'arquitecto'),
(3, 'rafael velasco', 'programador'),
(4, 'rodrigo lara', 'piloto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte-residuos`
--

CREATE TABLE IF NOT EXISTS `reporte-residuos` (
  `idReporte-Residuos` int(11) NOT NULL,
  PRIMARY KEY (`idReporte-Residuos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reporte-residuos`
--

INSERT INTO `reporte-residuos` (`idReporte-Residuos`) VALUES
(1),
(2),
(3),
(4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `residuos_has_catalogo-residuos`
--

CREATE TABLE IF NOT EXISTS `residuos_has_catalogo-residuos` (
  `Residuos_idResiduos` int(11) NOT NULL,
  `Catalogo-residuos_idResiduo` int(11) NOT NULL,
  `periodo` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`Residuos_idResiduos`,`Catalogo-residuos_idResiduo`),
  KEY `fk_Residuos_has_Catalogo-residuos_Catalogo-residuos1_idx` (`Catalogo-residuos_idResiduo`),
  KEY `fk_Residuos_has_Catalogo-residuos_Residuos1_idx` (`Residuos_idResiduos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `residuos_has_catalogo-residuos`
--

INSERT INTO `residuos_has_catalogo-residuos` (`Residuos_idResiduos`, `Catalogo-residuos_idResiduo`, `periodo`, `cantidad`) VALUES
(1, 1, '2015-01-30', 30),
(1, 2, '2015-01-30', 50),
(1, 3, '2015-01-30', 25),
(2, 1, '2015-02-28', 30),
(2, 2, '2015-02-28', 50),
(2, 3, '2015-02-28', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller`
--

CREATE TABLE IF NOT EXISTS `taller` (
  `idTaller` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `responsable` varchar(45) DEFAULT NULL,
  `fecha-inicio` date DEFAULT NULL,
  `fecha-fin` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `eco-bonos` int(11) DEFAULT NULL,
  `necesidades` varchar(45) DEFAULT NULL,
  `cupo` int(11) DEFAULT NULL,
  `cuota` int(11) DEFAULT NULL,
  `requerimientos` varchar(45) DEFAULT NULL,
  `Galeria_idGaleria` int(11) NOT NULL,
  PRIMARY KEY (`idTaller`,`Galeria_idGaleria`),
  KEY `fk_Taller_Galeria1_idx` (`Galeria_idGaleria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `taller`
--

INSERT INTO `taller` (`idTaller`, `nombre`, `descripcion`, `responsable`, `fecha-inicio`, `fecha-fin`, `horario`, `lugar`, `eco-bonos`, `necesidades`, `cupo`, `cuota`, `requerimientos`, `Galeria_idGaleria`) VALUES
(1, 'como construir una estufa solar', 'se enseñara a construir una estufa solar de f', 'javier hernandez', '2015-06-03', '2015-06-03', '00:00:10', 'salon de la paz', 0, 'pluma y papel', 50, 0, 'espacio abierto', 2),
(2, 'hablemos de parkour', 'se daran a conocer las ventajas de la practic', 'jordi garcia', '2015-08-02', '2015-08-02', '00:00:06', 'facultad de ciencias de la educacion', 0, 'ninguna', 150, 20, 'proyector y equipo de sonido', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller_has_colono`
--

CREATE TABLE IF NOT EXISTS `taller_has_colono` (
  `Taller_idTaller` int(11) NOT NULL,
  `Colono_id` int(11) NOT NULL,
  `estado` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Taller_idTaller`,`Colono_id`),
  KEY `fk_Taller_has_Colono_Colono1_idx` (`Colono_id`),
  KEY `fk_Taller_has_Colono_Taller1_idx` (`Taller_idTaller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller_has_externo`
--

CREATE TABLE IF NOT EXISTS `taller_has_externo` (
  `Taller_idTaller` int(11) NOT NULL,
  `Externo_idExterno` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Taller_idTaller`,`Externo_idExterno`),
  KEY `fk_Taller_has_Externo_Externo1_idx` (`Externo_idExterno`),
  KEY `fk_Taller_has_Externo_Taller1_idx` (`Taller_idTaller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taller_has_instructor`
--

CREATE TABLE IF NOT EXISTS `taller_has_instructor` (
  `Taller_idTaller` int(11) NOT NULL,
  `Instructor_idInstructor` int(11) NOT NULL,
  `rol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Taller_idTaller`,`Instructor_idInstructor`),
  KEY `fk_Taller_has_Instructor_Instructor1_idx` (`Instructor_idInstructor`),
  KEY `fk_Taller_has_Instructor_Taller1_idx` (`Taller_idTaller`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `taller_has_instructor`
--

INSERT INTO `taller_has_instructor` (`Taller_idTaller`, `Instructor_idInstructor`, `rol`) VALUES
(1, 2, 'ponente'),
(1, 4, 'asistente'),
(2, 1, 'ponente');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ecotecnia`
--
ALTER TABLE `ecotecnia`
  ADD CONSTRAINT `ecotecnia_catalogoEcotecnia` FOREIGN KEY (`idEcotecnia`) REFERENCES `catalogo-ecotecnia` (`idEcotecnia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `galeria_ecotecnia` FOREIGN KEY (`Galeria_idGaleria`) REFERENCES `galeria` (`idGaleria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ecotecnia_has_colono`
--
ALTER TABLE `ecotecnia_has_colono`
  ADD CONSTRAINT `fk_Ecotécnia_has_Colono_Colono1` FOREIGN KEY (`Colono_id`) REFERENCES `colono` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ecotécnia_has_Colono_Ecotécnia1` FOREIGN KEY (`Ecotécnia_idActividad`) REFERENCES `ecotecnia` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ecotecnia_has_externo`
--
ALTER TABLE `ecotecnia_has_externo`
  ADD CONSTRAINT `fk_Ecotécnia_has_Externo_Ecotécnia1` FOREIGN KEY (`Ecotécnia_idActividad`) REFERENCES `ecotecnia` (`idActividad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Ecotécnia_has_Externo_Externo1` FOREIGN KEY (`Externo_idExterno`) REFERENCES `externo` (`idExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento_has_colono`
--
ALTER TABLE `evento_has_colono`
  ADD CONSTRAINT `fk_Evento_has_Colono_Colono1` FOREIGN KEY (`Colono_id`) REFERENCES `colono` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Evento_has_Colono_Evento1` FOREIGN KEY (`Evento_idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `evento_has_externo`
--
ALTER TABLE `evento_has_externo`
  ADD CONSTRAINT `fk_Evento_has_Externo_Evento1` FOREIGN KEY (`Evento_idEvento`) REFERENCES `evento` (`idEvento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Evento_has_Externo_Externo1` FOREIGN KEY (`Externo_idExterno`) REFERENCES `externo` (`idExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `residuos_has_catalogo-residuos`
--
ALTER TABLE `residuos_has_catalogo-residuos`
  ADD CONSTRAINT `fk_Residuos_has_Catalogo-residuos_Catalogo-residuos1` FOREIGN KEY (`Catalogo-residuos_idResiduo`) REFERENCES `catalogo-residuos` (`idResiduo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Residuos_has_Catalogo-residuos_Residuos1` FOREIGN KEY (`Residuos_idResiduos`) REFERENCES `reporte-residuos` (`idReporte-Residuos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `taller_has_colono`
--
ALTER TABLE `taller_has_colono`
  ADD CONSTRAINT `fk_Taller_has_Colono_Colono1` FOREIGN KEY (`Colono_id`) REFERENCES `colono` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Taller_has_Colono_Taller1` FOREIGN KEY (`Taller_idTaller`) REFERENCES `taller` (`idTaller`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `taller_has_externo`
--
ALTER TABLE `taller_has_externo`
  ADD CONSTRAINT `fk_Taller_has_Externo_Externo1` FOREIGN KEY (`Externo_idExterno`) REFERENCES `externo` (`idExterno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Taller_has_Externo_Taller1` FOREIGN KEY (`Taller_idTaller`) REFERENCES `taller` (`idTaller`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `taller_has_instructor`
--
ALTER TABLE `taller_has_instructor`
  ADD CONSTRAINT `fk_Taller_has_Instructor_Instructor1` FOREIGN KEY (`Instructor_idInstructor`) REFERENCES `instructor` (`idInstructor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Taller_has_Instructor_Taller1` FOREIGN KEY (`Taller_idTaller`) REFERENCES `taller` (`idTaller`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
