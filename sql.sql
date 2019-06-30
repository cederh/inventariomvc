
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-06-2019 a las 00:32:43
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.17

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
(5, 1, 'Calcomanias', 'Calcomanías disponibles en la tienda', '2019-06-22 11:48:29'),
(6, 1, 'Nintendo', 'Categoría de Nintendo', '2019-06-22 12:06:38'),
(7, 1, 'Telefonos', 'Telefonos Disponibles', '2019-06-22 16:03:38'),
(8, 1, 'Calculadoras', 'Calculadoras Disponibles', '2019-06-22 17:02:58'),
(9, 1, 'Sony', 'Humo x2', '2019-06-24 07:02:15'),
(10, 1, '1', '1', '2019-06-26 22:34:12');

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
(1, 'Nintendo Switch', 198, 299.99, 2, 1, 1, 'Empresa desarrolladora de videojuegos de nintendo1', '2019-06-27 15:13:54'),
(2, 'Xbox One X', 200, 499.99, 2, 1, 1, 'Empresa desarrolladora de videojuegos de xboc', '2019-06-27 09:36:44'),
(3, '1wwrhhe', 120, 11241, 9, 25, 1, '1315RT42Y2EWET', '2019-06-27 09:33:50'),
(4, '1', 1, 1, 8, 15, 1, '1', '2019-06-26 22:36:15'),
(5, 'test', 22, 12424, 9, 15, 1, '12t4t32t23t', '2019-06-27 09:37:43'),
(6, 'dw0ihew', 3412, 23424, 5, 20, 1, 'qrgqggerg', '2019-06-27 09:42:21');

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
(15, 1, 'Microsoft', 'USA', '1489-8489', '', '2019-06-22 15:57:22'),
(16, 1, '1', '1', '1', '', '2019-06-22 16:59:03'),
(17, 1, '1', '1', '1', '1', '2019-06-22 17:01:04'),
(18, 1, '', '', '', '', '2019-06-22 15:35:24'),
(19, 1, '', '', '', '', '2019-06-22 15:35:59'),
(20, 1, 'u', '', '', '', '2019-06-22 15:46:34'),
(21, 1, '1', '1', '1234-5665', '', '2019-06-22 15:56:08'),
(22, 1, 'q', 'q', 'q', '', '2019-06-22 16:53:28'),
(23, 1, '1', '1', '1', '', '2019-06-22 16:53:57'),
(24, 1, '1', '1', '1', '1', '2019-06-22 17:00:46'),
(25, 1, '999', '999', '9999-9999', '999', '2019-06-26 22:31:47');

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
(1, 'Carlos', 'Romero', 1, '33252352-3', 'cederh', 2, 'c108682be7d1cce6abc62e08d2bc6c5fee80f8921adf3f81fe6a2556908606d5bbde9a89221239625ba38e2097657182aa07f5475b353d781c64e73f6dbd07cd', 1, '2019-06-27 15:42:24'),
(14, 'Monica', 'Mendiola', 2, '45574551-4', 'monic', 2, 'eb920bc48e4b41660947ba8aa0bedb0be46deb719a46a461a65b0dec4d7f58cf047003646ae50d7dba09f1e0e388aa29227f14bc14315429d5e8450dfd6d148b', 2, '2019-06-27 16:08:10'),
(15, 'Julio', 'Pineda', 1, '46548845-4', 'julio', 1, '65902dcd6a6403491ebb6c66eb303a498eb3dbf4f7581ceb81f68dbc747ae8637d287fb08d6e0e5cff411f614403146ccb22225f4e5f1e8296b43fd48acf5f6a', 2, '2019-06-27 16:26:15'),
(16, 'Luis', 'Hernandez', 1, '48848747-4', 'luis', 1, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 16:36:06'),
(17, '1', '1', 1, '1', '1', 1, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 18:04:20'),
(18, '1', '1', 1, '1111111111', '1', 1, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 17:26:54'),
(19, '', '', 0, '', '', 0, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 16:38:11'),
(20, 'd', 'd', 1, '', '', 0, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 16:39:28'),
(21, 'q', 'q', 1, '', '', 0, '65902dcd6a6403491ebb6c66eb303a498eb3dbf4f7581ceb81f68dbc747ae8637d287fb08d6e0e5cff411f614403146ccb22225f4e5f1e8296b43fd48acf5f6a', 1, '2019-06-22 16:44:48'),
(22, '1', '1', 1, '1', '2@e.com', 1, 'e349e40c8f50b09917762882735d910ba0a651224f8450ee495868c3c0de368f32c715be7da1e7e469de3ea0cb1f389038834c8b4a24f5544c4450c31d533abf', 1, '2019-06-22 16:43:55'),
(23, '', '', 0, '', '', 0, '5e1a9be929a1863f81f4e801a6564c53fa061a9123ad18c7d3a5e346dc103b86edc57ee5d67ffedcf8b26abf85e95f5262f3057346733ec23f0a751a8fdd7511', 1, '2019-06-22 17:40:25'),
(24, 'eqeqe', 'qeq', 1, 'qeqe', 'q', 1, 'f78f6cf22e8417cee3c70e059de3eed83d407ad6452ae3119ee5c03c0724c0a74b14609c0c1a1073ca421fcd1edc4dcc457afeb92f7bb2f40ee738c6859b6cfa', 1, '2019-06-24 07:02:42'),
(25, '1', '1', 1, '1', '1', 1, '65902dcd6a6403491ebb6c66eb303a498eb3dbf4f7581ceb81f68dbc747ae8637d287fb08d6e0e5cff411f614403146ccb22225f4e5f1e8296b43fd48acf5f6a', 1, '2019-06-24 07:03:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD KEY `fk_tbl_categoria_tbl_usuarios` (`idusuario`);

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
  MODIFY `idusuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
