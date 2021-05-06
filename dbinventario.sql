-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 14-07-2019 a las 00:47:50
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbinventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
CREATE TABLE IF NOT EXISTS `tbl_categoria` (
  `idcategoria` int(50) NOT NULL AUTO_INCREMENT,
  `idusuario` int(50) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`idcategoria`),
  KEY `fk_tbl_categoria_tbl_usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`idcategoria`, `idusuario`, `nombre_categoria`, `descripcion`, `fecha_mod`) VALUES
(2, 1, 'Juegos', 'Listado de juegos', '2019-06-22 12:12:36'),
(3, 1, 'Protectores', 'Protectores para la categoria', '2019-06-22 11:36:57'),
(4, 1, 'Consolas', 'Consolas disponibles en venta', '2019-06-22 11:45:57'),
(5, 1, 'Calcomanias', 'Calcomanías disponibles en la tienda', '2019-06-22 11:48:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

DROP TABLE IF EXISTS `tbl_empresa`;
CREATE TABLE IF NOT EXISTS `tbl_empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `nit` varchar(17) NOT NULL,
  `iva` varchar(17) NOT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `nombre_empresa`, `direccion`, `telefono`, `nit`, `iva`) VALUES
(1, 'Cyber Game Store', 'Metrocentro San Miguel', '2435-2523', '1221-432423-423-4', '1234-123456-789-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

DROP TABLE IF EXISTS `tbl_inventario`;
CREATE TABLE IF NOT EXISTS `tbl_inventario` (
  `idproducto` int(50) NOT NULL AUTO_INCREMENT,
  `nombre_producto` varchar(50) COLLATE utf8_bin NOT NULL,
  `stock` int(100) NOT NULL,
  `precio` double NOT NULL,
  `idcategoria` int(50) NOT NULL,
  `idproveedor` int(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `descripcion_producto` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`idproducto`),
  KEY `fk_tbl_inventario_tbl_usuarios` (`idusuario`),
  KEY `fk_tbl_inventario_tbl_categoria` (`idcategoria`),
  KEY `fk_tbl_inventario_tbl_provedores` (`idproveedor`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_inventario`
--

INSERT INTO `tbl_inventario` (`idproducto`, `nombre_producto`, `stock`, `precio`, `idcategoria`, `idproveedor`, `idusuario`, `descripcion_producto`, `fecha_mod`) VALUES
(1, 'Nintendo Switch', 198, 299.99, 2, 1, 1, 'Empresa desarrolladora de videojuegos de nintendo1', '2019-07-13 14:05:26'),
(2, 'Xbox One X', 200, 499.99, 2, 1, 1, 'Empresa desarrolladora de videojuegos de xboc', '2019-06-27 09:36:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_proveedores`
--

DROP TABLE IF EXISTS `tbl_proveedores`;
CREATE TABLE IF NOT EXISTS `tbl_proveedores` (
  `idproveedor` int(50) NOT NULL AUTO_INCREMENT,
  `idusuario` int(50) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`idproveedor`),
  KEY `fk_tbl_proveedores_tbl_usuarios` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_proveedores`
--

INSERT INTO `tbl_proveedores` (`idproveedor`, `idusuario`, `nombre_proveedor`, `direccion`, `telefono`, `descripcion`, `fecha_mod`) VALUES
(1, 1, 'Minerva Game Studio', 'Calle alberto masferrer', '78945168', 'Empresa desarrolladora de videojuegos', '2019-06-22 11:49:20'),
(14, 1, 'Nintendo', 'Tokyo Japon', '849579', 'Empresa de Videojuegos', '2019-06-22 14:24:52'),
(15, 1, 'Microsoft', 'USA', '1489-8489', '', '2019-06-22 15:57:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `idusuario` int(50) NOT NULL AUTO_INCREMENT,
  `usu_nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_genero` int(11) NOT NULL,
  `usu_dui` varchar(10) COLLATE utf8_bin NOT NULL,
  `usu_usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_tipo` int(11) NOT NULL,
  `usu_password` varchar(300) COLLATE utf8_bin NOT NULL,
  `usu_estado` int(11) NOT NULL,
  `fecha_mod` datetime NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`idusuario`, `usu_nombre`, `usu_apellido`, `usu_genero`, `usu_dui`, `usu_usuario`, `usu_tipo`, `usu_password`, `usu_estado`, `fecha_mod`) VALUES
(1, 'admin', 'test', 1, '33252352-3', 'admin', 2, 'c108682be7d1cce6abc62e08d2bc6c5fee80f8921adf3f81fe6a2556908606d5bbde9a89221239625ba38e2097657182aa07f5475b353d781c64e73f6dbd07cd', 1, '2019-06-27 15:42:24');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD CONSTRAINT `fk_tbl_categoria_tbl_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `tbl_usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD CONSTRAINT `fk_tbl_inventario_tbl_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `tbl_categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_inventario_tbl_provedores` FOREIGN KEY (`idproveedor`) REFERENCES `tbl_proveedores` (`idproveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_inventario_tbl_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `tbl_usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD CONSTRAINT `fk_tbl_proveedores_tbl_usuarios` FOREIGN KEY (`idusuario`) REFERENCES `tbl_usuarios` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
