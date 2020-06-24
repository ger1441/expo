-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-06-2020 a las 08:00:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `expo`
--
CREATE DATABASE IF NOT EXISTS `expo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `expo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'XAXX010101000',
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `companies`
--

INSERT INTO `companies` (`id`, `name`, `rfc`, `logo`, `description`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Yerman\'s Factory', 'XAXX010101000', 'logo_yermans_factory.jpg', 'Yerman\'s Factory is a new company, with an important social vision, ready to create opportunities for everyone.', 'yermans@gmail.com', '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(2, 'Wens S.A.S', 'XAXX010101000', 'logo_wens_sas.jpg', 'Quality and commitment is what sets us apart from the rest. The customer comes first for us.', 'wens@gmail.com', '2020-06-24 09:42:02', '2020-06-24 09:42:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locals`
--

CREATE TABLE `locals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `locals`
--

INSERT INTO `locals` (`id`, `number`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'local1@gmail.com', 0, '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(2, 2, 'local2@gmail.com', 1, '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(3, 3, 'local3@gmail.com', 0, '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(4, 4, 'local4@gmail.com', 0, '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(5, 5, 'local5@gmail.com', 0, '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(6, 6, 'local6@gmail.com', 1, '2020-06-24 09:42:02', '2020-06-24 09:42:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_local` bigint(20) UNSIGNED NOT NULL,
  `id_company` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reservations`
--

INSERT INTO `reservations` (`id`, `id_local`, `id_company`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2020-08-14', '2020-08-18', '2020-06-24 09:42:02', '2020-06-24 09:42:02'),
(2, 6, 2, '2020-10-01', '2020-10-07', '2020-06-24 09:42:02', '2020-06-24 09:42:02');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `locals`
--
ALTER TABLE `locals`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_id_local_foreign` (`id_local`),
  ADD KEY `reservations_id_company_foreign` (`id_company`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `locals`
--
ALTER TABLE `locals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_id_company_foreign` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `reservations_id_local_foreign` FOREIGN KEY (`id_local`) REFERENCES `locals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
