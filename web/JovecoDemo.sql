-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: hl1548.dinaserver.com:3306
-- Tiempo de generación: 13-05-2026 a las 08:18:32
-- Versión del servidor: 11.8.6-MariaDB-deb11-log
-- Versión de PHP: 8.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jovec_demo`
--
CREATE DATABASE IF NOT EXISTS `jovec_demo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `jovec_demo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productes_demo`
--

CREATE TABLE `productes_demo` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `origen` varchar(100) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preu` decimal(5,2) NOT NULL,
  `descripcio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productes_demo`
--

INSERT INTO `productes_demo` (`id`, `nom`, `origen`, `categoria`, `preu`, `descripcio`) VALUES
(1, 'Poma Golden', 'Girona', 'Fruita', 1.80, 'Poma dolça i cruixent, ideal com a producte de temporada.'),
(2, 'Tomàquet de proximitat', 'Baix Empordà', 'Verdura', 2.50, 'Tomàquet cultivat a prop del supermercat.'),
(3, 'Enciam ecològic', 'Cultiu propi', 'Verdura', 1.20, 'Enciam fresc procedent de cultiu ecològic.'),
(4, 'Oli d’oliva', 'Catalunya', 'Alimentació', 6.90, 'Oli d’oliva de qualitat produït a Catalunya.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productes_demo`
--
ALTER TABLE `productes_demo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productes_demo`
--
ALTER TABLE `productes_demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
