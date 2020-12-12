-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2020 a las 00:21:17
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baseforo`
--
CREATE DATABASE IF NOT EXISTS `baseforo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `baseforo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaforo`
--

CREATE TABLE `tablaforo` (
  `id` int(15) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablaforo`
--

INSERT INTO `tablaforo` (`id`, `usuario`, `fecha`, `mensaje`) VALUES
(44, 'jhon', '2020-12-12', 'Esto es un mensaje de prueba '),
(50, 'Admin ', '2020-12-11', 'Solo el administrador puede eliminar los mensajes.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablausuario`
--

CREATE TABLE `tablausuario` (
  `id_usuario` int(15) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `tipo` varchar(30) NOT NULL DEFAULT 'administrador',
  `imagen` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL DEFAULT 'activo '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tablausuario`
--

INSERT INTO `tablausuario` (`id_usuario`, `usuario`, `clave`, `nombre`, `apellido`, `tipo`, `imagen`, `nacionalidad`, `estado`) VALUES
(131, 'jhon', '123', 'jhon freddy', 'Parra', 'administrador', '', '', 'activo '),
(133, 'norma', '123', 'norma', 'Parra', 'usuario', '', '', 'activo ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablaforo`
--
ALTER TABLE `tablaforo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablausuario`
--
ALTER TABLE `tablausuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablaforo`
--
ALTER TABLE `tablaforo`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `tablausuario`
--
ALTER TABLE `tablausuario`
  MODIFY `id_usuario` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
