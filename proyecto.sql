-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-07-2019 a las 22:41:26
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `twitter`
--

CREATE TABLE `twitter` (
  `id` int(250) NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `twitter`
--

INSERT INTO `twitter` (`id`, `mensaje`) VALUES
(1, '		Primer mensaje modificado  en Base de datos que armamos h'),
(4, '		Los tweets anteriores fueron eliminados Haciendo Prubeas ac'),
(5, 'Este Tweet Es para superar el limite de los borde de la tabla, para comprobar si hay un salto de linea o si el tweet se oculta.'),
(7, 'Este tweet es un tweet actualizado desde cero porque no me gusto la manguangua que hice'),
(9, 'este es otro tweet actualizado para ver que funciona jeje'),
(11, '		hola esta es una prueba para probar los botones de actualizacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `twitter`
--
ALTER TABLE `twitter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `twitter`
--
ALTER TABLE `twitter`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
