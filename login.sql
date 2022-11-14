-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2022 a las 16:23:28
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` int(10) NOT NULL,
  `gerencia` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `gerencia`) VALUES
(1, 'Presidencia'),
(2, 'Administración'),
(3, 'Auditoría'),
(4, 'Presupuesto'),
(5, 'Gestión Humana'),
(6, 'Proyecto'),
(7, 'Oficina de Atención Ciudadana'),
(8, 'Oficina de Consultoría Jurídica'),
(9, 'Seguimiento y Evaluación de Gestión'),
(10, 'Tecnología, Comunicación e Información');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_permisos` int(11) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `id_permisos`, `created_at`) VALUES
(4, 'amanda garcia', 'agarcia', 'agarcia@codecyt.gob.ve', '123456', 7, '2022-10-24 13:10:05'),
(9, 'Luis Moron', 'lmoron', 'lmoron@codecyt.gov.be', 'lmoron123*', 10, '2022-10-24 15:18:59'),
(12, 'ewrged', 'gerg', 'erfgved@gmail.com', '123456', 6, '2022-10-26 15:02:57'),
(13, 'Codecyt S.a', 'codecyt', 'codecyt@codecyt.gob.ve', '123456', 7, '2022-11-07 12:59:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario-permiso`
--

CREATE TABLE `usuario-permiso` (
  `id_usuariopermiso` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_permisos` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_permisos` (`id_permisos`);

--
-- Indices de la tabla `usuario-permiso`
--
ALTER TABLE `usuario-permiso`
  ADD PRIMARY KEY (`id_usuariopermiso`),
  ADD KEY `id` (`id`),
  ADD KEY `id_permisos` (`id_permisos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario-permiso`
--
ALTER TABLE `usuario-permiso`
  MODIFY `id_usuariopermiso` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_usuario_permiso_permiso` FOREIGN KEY (`id_permisos`) REFERENCES `permisos` (`id_permisos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
