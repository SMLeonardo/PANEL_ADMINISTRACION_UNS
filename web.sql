-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-01-2021 a las 15:10:43
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web`
--
CREATE DATABASE  IF NOT EXISTS `web` /*!40100 DEFAULT CHARACTER SET utf8_spanish_ci */;
USE `web`;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `MENU_id` int(11) NOT NULL,
  `MENU_descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `NT_id` int(11) NOT NULL,
  `NT_descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `NT_imagen` longblob NOT NULL,
  `NT_extension` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `NT_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `SEC_id` int(11) NOT NULL,
  `SEC_descripcion` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `SEC_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`SEC_id`, `SEC_descripcion`, `SEC_estado`) VALUES
(1, 'MENU1', 1),
(2, 'MENU2', 1),
(3, 'SERVICIOS', 1),
(4, 'NOTICIAS', 1),
(5, 'SECCION VIDEO', 1),
(6, 'VINCULOS', 1);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id_slider` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ruta_imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id_slider`, `descripcion`, `ruta_imagen`, `estado`) VALUES
(1, 'IMAGEN1', 'fotos/6974ce5ac660610b44d9b9fed0ff9548.jpg', 1),
(2, 'IMAGEN2', 'fotos/banner1.jpg', 1),
(3, 'IMAGEN3', 'fotos/ec8956637a99787bd197eacd77acce5e.jpg', 1);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_estado`
--

CREATE TABLE `tipo_estado` (
  `id_estado` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo_estado`
--

INSERT INTO `tipo_estado` (`id_estado`, `descripcion`) VALUES
(1, 'HABILITADO'),
(2, 'DESHABILITADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `User_id` int(11) NOT NULL,
  `User_nombres` varchar(125) COLLATE utf8_spanish_ci DEFAULT NULL,
  `User_apellidos` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `User_usuario` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `User_password` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `User_email` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`User_id`, `User_nombres`, `User_apellidos`, `User_usuario`, `User_password`, `User_email`) VALUES
(1, 'LEONARDO', 'SUYON ', 'LEO', '12345678', 'SUYON@GMAIL.COM'),
(2, 'MIGUEL ', 'GAMBINI', 'MIGUEL', '12345678', 'GAMBINI@GMAIL.COM'),
(3, 'JOSEPH', 'GOICOCHEA', 'JOSEPH', '12345678', 'JOSEPH@GMAIL.COM'),
(4, 'CESAR', 'AGUIRRE', 'CESAR', '12345678', 'AGUIRRE@GMAIL.COM'),
(5, 'JUNIOR1', 'SILVA', 'JUNIOR', '12345678', 'JUNIOR@GMAIL.COM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vinculos`
--

CREATE TABLE `vinculos` (
  `id_vinculos` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ruta_imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;


INSERT INTO `vinculos` (`id_vinculos`, `descripcion`, `ruta_imagen`, `estado`) VALUES
(1, 'CONTROLORIA', 'fotos/V1.png', 1),
(2, 'EL PERUANO', 'fotos/V2.png', 1),
(4, 'INFOBRAS', 'fotos/V3.png', 1),
(5, 'PODER JUDICIAL', 'fotos/V4.png', 1),
(6, 'PRONABEC', 'fotos/V5.png', 1);


--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`MENU_id`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`NT_id`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`SEC_id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id_slider`),
  ADD KEY `estado` (`estado`),
  ADD KEY `estado_2` (`estado`);

--
-- Indices de la tabla `tipo_estado`
--
ALTER TABLE `tipo_estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `id_estado` (`id_estado`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`User_id`);

--
-- Indices de la tabla `vinculos`
--
ALTER TABLE `vinculos`
  ADD PRIMARY KEY (`id_vinculos`),
  ADD KEY `id_vinculos` (`id_vinculos`),
  ADD KEY `estado` (`estado`),
  ADD KEY `estado_2` (`estado`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `MENU_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `NT_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `SEC_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vinculos`
--
ALTER TABLE `vinculos`
  MODIFY `id_vinculos` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD CONSTRAINT `sliders_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `tipo_estado` (`id_estado`);

--
-- Filtros para la tabla `vinculos`
--
ALTER TABLE `vinculos`
  ADD CONSTRAINT `vinculos_ibfk_1` FOREIGN KEY (`estado`) REFERENCES `tipo_estado` (`id_estado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
