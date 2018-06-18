-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-06-2018 a las 21:44:23
-- Versión del servidor: 5.6.38
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `categoria_id` int(11) NOT NULL,
  `nomCategoria` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`categoria_id`, `nomCategoria`) VALUES
(1, 'jugador'),
(2, 'entrenador'),
(3, 'directiu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equip_local`
--

CREATE TABLE `equip_local` (
  `NomEquip` varchar(255) NOT NULL DEFAULT '',
  `RelPlantilla` int(11) NOT NULL,
  `PistaJocHabitual` varchar(255) DEFAULT NULL,
  `DiaJocHabitual` varchar(255) DEFAULT NULL,
  `HoraJocHabitual` time DEFAULT NULL,
  `ColorsPrimEquipacio` varchar(255) DEFAULT NULL,
  `ColorsSegEquipacio` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `equip_local`
--

INSERT INTO `equip_local` (`NomEquip`, `RelPlantilla`, `PistaJocHabitual`, `DiaJocHabitual`, `HoraJocHabitual`, `ColorsPrimEquipacio`, `ColorsSegEquipacio`) VALUES
('Cadet Femeni', 2, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '11:00:00', 'Vermella', 'Blanca'),
('Cadet Masculi InterTerritorial', 10, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '17:30:00', 'Vermella ', 'Blanca'),
('Cadet Masculi Niv B', 9, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '12:45:00', 'Vermella', 'Blanca'),
('Junior Femeni Niv B', 3, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '21:00:00', 'Vermella', 'Blanca'),
('Junior Masculi Niv C', 11, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '17:30:00', 'Vermella', 'Blanca'),
('Mini Femeni', 1, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '12:45:00', 'Vermella', 'Blanca'),
('Mini Masculi Niv A', 7, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '12:30:00', 'Vermella', 'Blanca'),
('Mini Masculi Niv B', 6, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '11:00:00', 'Vermella', 'Blanca'),
('Pre-Infantil Masculi', 8, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '12:30:00', 'Vermella', 'Blanca'),
('Pre-Mini Masculi', 5, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '11:00:00', 'Vermella', 'Blanca'),
('Segona Categoria Femenina', 4, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '19:15:00', 'Vermella', 'Blanca'),
('Sots21 Masculi Niv A-2', 12, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Diumenge', '17:30:00', 'Vermella', 'Blanca'),
('Sots21 Masculi Preferent', 13, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '20:15:00', 'Vermella ', 'Blanca'),
('Tercera Categoria Masculina', 14, 'Instal. Esportives Corbera (Av.Josep Terradellas S/N - Corbera de Ll.)', 'Dissabte', '18:45:00', 'Vermella', 'Blanca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuari` int(45) NOT NULL,
  `Refcategoria_id` int(11) DEFAULT NULL,
  `dni` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL,
  `nomUsuari` varchar(45) DEFAULT NULL,
  `primercog` varchar(55) DEFAULT NULL,
  `segoncog` varchar(55) DEFAULT NULL,
  `fecha_neix` date DEFAULT NULL,
  `direccio` varchar(255) DEFAULT NULL,
  `localitat` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telf` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuari`, `Refcategoria_id`, `dni`, `password`, `nomUsuari`, `primercog`, `segoncog`, `fecha_neix`, `direccio`, `localitat`, `email`, `telf`) VALUES
(1, 1, '12345678J', 'jpx', 'jugador01', 'Puig', 'Xicola', '1992-07-29', 'C/Rafel, 4', 'Corbera de Ll', 'jugador01puig@gmail.com', '618428979'),
(2, 2, '12345678E', 'epx', 'entrenador01', 'Puig', 'Xicola', '1992-07-29', 'C/Rafel, 4', 'Corbera de Ll.', 'entrenador01puig@gmail.com', '618428979'),
(3, 3, '12345678D', 'dpx', 'directiu01', 'Puig', 'Xicola', '1992-07-29', 'C/Rafel, 4', 'Corbera de Ll.', 'directiu01puig@gmail.com', '123456789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indices de la tabla `equip_local`
--
ALTER TABLE `equip_local`
  ADD PRIMARY KEY (`NomEquip`),
  ADD KEY `RelPlantilla` (`RelPlantilla`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuari`),
  ADD KEY `categoria_id_fk_idx` (`Refcategoria_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `equip_local`
--
ALTER TABLE `equip_local`
  MODIFY `RelPlantilla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `categoria_id_fk` FOREIGN KEY (`Refcategoria_id`) REFERENCES `categoria` (`categoria_id`) ON DELETE CASCADE ON UPDATE CASCADE;

