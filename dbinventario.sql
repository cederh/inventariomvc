-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generaciÃ³n: 06-05-2021 a las 19:35:36
-- VersiÃ³n del servidor: 10.4.18-MariaDB
-- VersiÃ³n de PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `tbl_categoria` (
  `idcategoria` int(50) NOT NULL,
  `idusuario` int(50) NOT NULL,
  `nombre_categoria` varchar(50) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`idcategoria`, `idusuario`, `nombre_categoria`, `descripcion`, `fecha_mod`) VALUES
(2, 1, 'Juegos', 'Listado de juegos', '2019-06-22 12:12:36'),
(3, 1, 'Protectores', 'Protectores para la categoria', '2019-06-22 11:36:57'),
(4, 1, 'Consolas', 'Consolas disponibles en venta', '2019-06-22 11:45:57'),
(5, 1, 'Calcomanias', 'CalcomanÃ­as disponibles en la tienda', '2019-06-22 11:48:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empresa`
--

CREATE TABLE `tbl_empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `nit` varchar(17) NOT NULL,
  `iva` varchar(17) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tbl_empresa`
--

INSERT INTO `tbl_empresa` (`id_empresa`, `nombre_empresa`, `direccion`, `telefono`, `nit`, `iva`) VALUES
(1, 'Cyber Game Store', 'Metrocentro San Miguel', '2435-2523', '1221-432423-423-4', '1234-123456-789-2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inventario`
--

CREATE TABLE `tbl_inventario` (
  `idproducto` int(50) NOT NULL,
  `nombre_producto` varchar(50) COLLATE utf8_bin NOT NULL,
  `stock` int(100) NOT NULL,
  `precio` double NOT NULL,
  `idcategoria` int(50) NOT NULL,
  `idproveedor` int(50) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `descripcion_producto` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `tbl_proveedores` (
  `idproveedor` int(50) NOT NULL,
  `idusuario` int(50) NOT NULL,
  `nombre_proveedor` varchar(50) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(100) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(10) COLLATE utf8_bin NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_bin NOT NULL,
  `fecha_mod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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

CREATE TABLE `tbl_usuarios` (
  `idusuario` int(50) NOT NULL,
  `usu_nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_apellido` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_genero` int(11) NOT NULL,
  `usu_dui` varchar(10) COLLATE utf8_bin NOT NULL,
  `usu_usuario` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_tipo` int(11) NOT NULL,
  `usu_password` varchar(300) COLLATE utf8_bin NOT NULL,
  `usu_estado` int(11) NOT NULL,
  `fecha_mod` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`idusuario`, `usu_nombre`, `usu_apellido`, `usu_genero`, `usu_dui`, `usu_usuario`, `usu_tipo`, `usu_password`, `usu_estado`, `fecha_mod`) VALUES
(1, 'admin', 'admin', 1, '33252352-3', 'admin', 2, 'eb920bc48e4b41660947ba8aa0bedb0be46deb719a46a461a65b0dec4d7f58cf047003646ae50d7dba09f1e0e388aa29227f14bc14315429d5e8450dfd6d148b', 1, '2021-05-06 11:20:39'),
(28, 'prueba', 'usuario', 1, '12452332-5', 'test', 1, 'eb920bc48e4b41660947ba8aa0bedb0be46deb719a46a461a65b0dec4d7f58cf047003646ae50d7dba09f1e0e388aa29227f14bc14315429d5e8450dfd6d148b', 1, '2021-05-06 11:23:24');

--
-- Ãndices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD KEY `fk_tbl_categoria_tbl_usuarios` (`idusuario`);

--
-- Indices de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  ADD PRIMARY KEY (`idproducto`),
  ADD KEY `fk_tbl_inventario_tbl_usuarios` (`idusuario`),
  ADD KEY `fk_tbl_inventario_tbl_categoria` (`idcategoria`),
  ADD KEY `fk_tbl_inventario_tbl_provedores` (`idproveedor`);

--
-- Indices de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  ADD PRIMARY KEY (`idproveedor`),
  ADD KEY `fk_tbl_proveedores_tbl_usuarios` (`idusuario`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `idcategoria` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tbl_empresa`
--
ALTER TABLE `tbl_empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_inventario`
--
ALTER TABLE `tbl_inventario`
  MODIFY `idproducto` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_proveedores`
--
ALTER TABLE `tbl_proveedores`
  MODIFY `idproveedor` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `idusuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
