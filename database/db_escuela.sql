-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2022 a las 22:26:17
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
-- Base de datos: `db_escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calificaciones`
--

CREATE TABLE `calificaciones` (
  `id` int(11) NOT NULL,
  `NDNI` int(20) NOT NULL,
  `Materia` varchar(20) NOT NULL,
  `Anio_Correspondiente` varchar(20) NOT NULL,
  `Docente` varchar(100) NOT NULL,
  `Calificacion` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `calificaciones`
--

INSERT INTO `calificaciones` (`id`, `NDNI`, `Materia`, `Anio_Correspondiente`, `Docente`, `Calificacion`) VALUES
(38, 35545477, 'matematica', '3', 'Marcos Tolosa', 6),
(40, 46717779, 'matematica', '6', 'Marcos Tolosa', 7),
(41, 35545477, 'Ingles', '2', 'Juan Henderson', 3),
(42, 47654112, 'Cs.Sociales', '6', 'Lus Lopez', 5),
(43, 35545477, 'Historia', '3', 'Natalia Rezola', 2),
(44, 47619438, 'Prácticas del lengua', '3', 'Karen Figueroa', 5),
(45, 47654112, 'Ed. Física', '2', 'Santiago Luque', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `NDNI` int(20) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Telefono` varchar(100) NOT NULL,
  `Curso` int(10) NOT NULL,
  `Division` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`NDNI`, `Nombre`, `Direccion`, `Telefono`, `Curso`, `Division`) VALUES
(35545477, 'Mariana Garmendia', 'Moreno 123', '1546687', 5, 'b'),
(44558701, 'Lourdes Di Batista', 'Marconi 1653', '154664214', 1, 'A'),
(45678641, 'Roman Rodriguez', 'Rodriguez 234', '154672348', 5, 'B'),
(46717779, 'Sandra Lopez', 'Rodriguez 39', '154672348', 5, 'B'),
(47619438, 'Rodolfo Garcia', 'Sarmiento 1254', '154541233', 3, 'A'),
(47654112, 'Marcos Lopez', 'Garibaldi 541', '154008123', 4, 'A'),
(47876123, 'Mariana Fernandez', 'Montiel 719', '2345', 5, 'B'),
(49876208, 'Camila Lezcano', 'Arana 12', '154672563', 1, 'A'),
(49876334, 'Mariela Fontana ', '9 de Julio 563', '154776423', 2, 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'directivo@escuela.com', '$2a$12$Qn5PrMy6Eki0rJ.pmdPX8uDO.8KBjm5L9GF9loRFLGKmZSVbYhO9a'),
(2, 'profesor1@escuela.com', '$2a$12$/PLk36VZ4teN09FLaeY6/.kwWCnQ9HDj.saG4I5otiBgjswB8fPWu');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `NDNI` (`NDNI`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`NDNI`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `calificaciones`
--
ALTER TABLE `calificaciones`
  ADD CONSTRAINT `calificaciones_ibfk_1` FOREIGN KEY (`NDNI`) REFERENCES `estudiantes` (`NDNI`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
