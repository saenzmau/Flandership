-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2019 a las 00:40:50
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `flandership`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `idCategoria` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`idCategoria`, `Nombre`) VALUES
(2, 'Tecnología'),
(3, 'Papelería'),
(4, 'Cocina'),
(5, 'Juguetes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenes`
--

CREATE TABLE `ordenes` (
  `idOrden` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `Registrado` tinyint(1) NOT NULL,
  `Fecha` datetime NOT NULL,
  `Total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenitems`
--

CREATE TABLE `ordenitems` (
  `idOrdenItem` int(11) NOT NULL,
  `idOrden` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `Nombre` varchar(255) NOT NULL,
  `Descripcion` text NOT NULL,
  `Imagen` varchar(255) NOT NULL,
  `PrecioMenudeo` float NOT NULL,
  `PrecioMedioMayoreo` float NOT NULL,
  `PrecioMayoreo` float NOT NULL,
  `idCategoria` int(11) NOT NULL,
  `CantidadInventario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `Descripcion`, `Imagen`, `PrecioMenudeo`, `PrecioMedioMayoreo`, `PrecioMayoreo`, `idCategoria`, `CantidadInventario`) VALUES
(1, 'Funda contra agua smartphone', 'Funda universal a prueba de agua para smartphone genérica', 'FundaAgua.jpg', 20, 19.5, 19, 2, 1),
(2, 'Audífonos', 'Audífonos conector 3.5 mm stereo', 'TEC002.jpg', 20, 19.5, 19, 2, 3),
(3, 'Lapices amarillos', 'Paquete con 4 lapices amarillos', 'PAP012.jpg', 20, 19.5, 19, 3, 3),
(4, 'Tijeras', 'Tijeras marca flex', 'PAP020.jpg', 20, 19.5, 19, 3, 1),
(5, 'Cuaderno de rayas paq/2', 'Cuaderno de rayas paq/2 ', 'PAP021.jpg', 20, 19.5, 19, 3, 2),
(6, 'Cuchara madera', 'Cuchara de madera 15 cm', 'COC012.jpg', 20, 19.5, 19, 4, 1),
(7, 'Figura Dinosaurio', 'Figura dinosaurio 10 cm', 'JUG007.jpg', 20, 19.5, 19, 5, 2),
(8, 'Pony', 'Pony Niña', 'JUG030.jpg', 20, 19.5, 19, 5, 2),
(9, 'Sandwichera super heroes ', 'Sandwichera de tus súper héroes favoritos de Marvel y DC', 'PLA015.jpg', 20, 19.5, 19, 6, 1),
(10, 'Telas absorbentes', 'Telas absorbentes de la marca Great Value', 'LIM017.jpg', 20, 19.5, 19, 7, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(40) NOT NULL,
  `Apellido` varchar(40) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Email`, `Password`) VALUES
(1, 'Mau', 'Saenz', 'saenzmau29@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Rodrigo', 'Saenz', 'rodrigo.saenz@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'Jose Luis', 'Gutierrez', 'jolgutierrez@up.edu.mx', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Gabriel', 'Escobedo', '0177725@up.edu.mx', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`idCategoria`);

--
-- Indices de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  ADD PRIMARY KEY (`idOrden`);

--
-- Indices de la tabla `ordenitems`
--
ALTER TABLE `ordenitems`
  ADD PRIMARY KEY (`idOrdenItem`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ordenes`
--
ALTER TABLE `ordenes`
  MODIFY `idOrden` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ordenitems`
--
ALTER TABLE `ordenitems`
  MODIFY `idOrdenItem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
