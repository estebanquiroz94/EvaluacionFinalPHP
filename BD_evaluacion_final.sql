-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2019 a las 18:51:24
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluacion_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) DEFAULT NULL,
  `titulo` varchar(50) DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `hora_inicio` varchar(50) NOT NULL,
  `fecha_final` date NOT NULL,
  `hora_final` varchar(50) NOT NULL,
  `dia_completo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `email` text NOT NULL,
  `nombre_completo` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`email`, `nombre_completo`, `password`, `fecha_nacimiento`) VALUES
('sofia.quiroz@gmail.com', 'Sofia Quiroz Henao', '$2y$10$hhV6yyvEfTeH2pt4L90oC.EjxiM7IT58JQeILY12sCvTBFu3kEkQq', '2000-07-15'),
('joel.quiroz@gmail.com', 'Joel de Jesus', '$2y$10$1Wa3UQGcNRLHmoeYJUlHQOwlM80dYrQ1Bb2obiV1ieGxmSQ11HaaS', '2000-07-15'),
('valentina.quiroz@gmail.com', 'Valentina Quiroz', '$2y$10$aWN2U2ILXhlPPpJtD/dX7eiVaz5BgHtj9h5zAoAYxCsnMCagcvhLe', '2000-07-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
