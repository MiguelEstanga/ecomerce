-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2024 a las 20:55:49
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ecomerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('spatie.permission.cache', 'a:3:{s:5:\"alias\";a:4:{s:1:\"a\";s:2:\"id\";s:1:\"b\";s:4:\"name\";s:1:\"c\";s:10:\"guard_name\";s:1:\"r\";s:5:\"roles\";}s:11:\"permissions\";a:3:{i:0;a:4:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"superadmin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:1:{i:0;i:1;}}i:1;a:4:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:2:{i:0;i:1;i:1;i:2;}}i:2;a:4:{s:1:\"a\";i:3;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";s:1:\"r\";a:3:{i:0;i:1;i:1;i:2;i:2;i:3;}}}s:5:\"roles\";a:3:{i:0;a:3:{s:1:\"a\";i:1;s:1:\"b\";s:10:\"superadmin\";s:1:\"c\";s:3:\"web\";}i:1;a:3:{s:1:\"a\";i:2;s:1:\"b\";s:5:\"admin\";s:1:\"c\";s:3:\"web\";}i:2;a:3:{s:1:\"a\";i:3;s:1:\"b\";s:4:\"user\";s:1:\"c\";s:3:\"web\";}}}', 1718667315);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_empresa_de_envio_y_retiros`
--

CREATE TABLE `cache_empresa_de_envio_y_retiros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_epresas_de_envio_y_retiro` bigint(20) UNSIGNED DEFAULT NULL,
  `id_sucursal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carritos`
--

CREATE TABLE `carritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) DEFAULT NULL,
  `cantidad` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carritos`
--

INSERT INTO `carritos` (`id`, `session`, `cantidad`, `id_producto`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'gdwRE496QQofQVMAf5VZAOzxWvhhuTscGoBN1i1E', '1', 12, 7, '2024-06-17 03:35:24', '2024-06-17 03:35:24'),
(5, 'IXICShamhG74Jxvf0BNFsvly3mvfGPHAEcg9MEAd', '1', 5, 11, '2024-06-17 07:30:30', '2024-06-17 07:30:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`, `imagen`) VALUES
(1, 'Computadora', '2024-06-16 02:22:06', '2024-06-17 22:34:57', 'imagen/YsOxJZCzx30PdtCpFjDXHAmBHObMnlYvSVtfeKhc.png'),
(2, 'Audio', '2024-06-16 02:22:06', '2024-06-17 21:43:00', 'imagen/fIDsr3H47Hyx5HsiGbMsUAryCEldQQe8BHglawqb.jpg'),
(3, 'Calzado', '2024-06-16 02:22:06', '2024-06-17 21:43:18', 'imagen/eLMK7RM7nKIAWXH7s8NBJR3dOeXgftoJY8BId2rO.avif'),
(4, 'Telefonos', '2024-06-16 02:22:06', '2024-06-17 21:43:32', 'imagen/vBf2tNGPkNsIlqjUFlXsV6W3gL6hK5EplCjnsj1J.png'),
(5, 'Monitores', '2024-06-16 02:22:06', '2024-06-17 21:52:19', 'imagen/NYilCjPlOrTcw48TJbfEoLy8wnMugXxfaEJdRzE7.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles`
--

CREATE TABLE `detalles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detalles` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalles`
--

INSERT INTO `detalles` (`id`, `detalles`, `id_producto`, `created_at`, `updated_at`) VALUES
(1, 'Detalle 1', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(2, 'Detalle 2', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(3, 'Detalle 3', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(4, 'Detalle 4', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(5, 'Detalle 5', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(6, 'Detalle 6', 1, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(7, 'Detalle 1', 2, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(8, 'Detalle 2', 2, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(9, 'Detalle 3', 2, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(10, 'Detalle 4', 2, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(11, 'Detalle 5', 2, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(12, 'Detalle 6', 2, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(13, 'Detalle 1', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(14, 'Detalle 2', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(15, 'Detalle 3', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(16, 'Detalle 4', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(17, 'Detalle 5', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(18, 'Detalle 6', 3, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(19, 'Detalle 1', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(20, 'Detalle 2', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(21, 'Detalle 3', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(22, 'Detalle 4', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(23, 'Detalle 5', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(24, 'Detalle 6', 4, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(25, 'Detalle 1', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(26, 'Detalle 2', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(27, 'Detalle 3', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(28, 'Detalle 4', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(29, 'Detalle 5', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(30, 'Detalle 6', 5, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(31, 'Detalle 1', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(32, 'Detalle 2', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(33, 'Detalle 3', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(34, 'Detalle 4', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(35, 'Detalle 5', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(36, 'Detalle 6', 6, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(37, 'Detalle 1', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(38, 'Detalle 2', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(39, 'Detalle 3', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(40, 'Detalle 4', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(41, 'Detalle 5', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(42, 'Detalle 6', 7, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(43, 'Detalle 1', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(44, 'Detalle 2', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(45, 'Detalle 3', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(46, 'Detalle 4', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(47, 'Detalle 5', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(48, 'Detalle 6', 8, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(49, 'Detalle 1', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(50, 'Detalle 2', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(51, 'Detalle 3', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(52, 'Detalle 4', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(53, 'Detalle 5', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(54, 'Detalle 6', 9, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(55, 'Detalle 1', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(56, 'Detalle 2', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(57, 'Detalle 3', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(58, 'Detalle 4', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(59, 'Detalle 5', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(60, 'Detalle 6', 10, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(61, 'Detalle 1', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(62, 'Detalle 2', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(63, 'Detalle 3', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(64, 'Detalle 4', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(65, 'Detalle 5', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(66, 'Detalle 6', 11, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(67, 'Detalle 1', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(68, 'Detalle 2', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(69, 'Detalle 3', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(70, 'Detalle 4', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(71, 'Detalle 5', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(72, 'Detalle 6', 12, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(73, 'Detalle 1', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(74, 'Detalle 2', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(75, 'Detalle 3', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(76, 'Detalle 4', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(77, 'Detalle 5', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(78, 'Detalle 6', 13, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(79, 'Detalle 1', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(80, 'Detalle 2', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(81, 'Detalle 3', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(82, 'Detalle 4', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(83, 'Detalle 5', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(84, 'Detalle 6', 14, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(85, 'Detalle 1', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(86, 'Detalle 2', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(87, 'Detalle 3', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(88, 'Detalle 4', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(89, 'Detalle 5', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(90, 'Detalle 6', 15, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(91, 'Detalle 1', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(92, 'Detalle 2', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(93, 'Detalle 3', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(94, 'Detalle 4', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(95, 'Detalle 5', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(96, 'Detalle 6', 16, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(97, 'Detalle 1', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(98, 'Detalle 2', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(99, 'Detalle 3', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(100, 'Detalle 4', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(101, 'Detalle 5', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(102, 'Detalle 6', 17, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(103, 'Detalle 1', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(104, 'Detalle 2', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(105, 'Detalle 3', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(106, 'Detalle 4', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(107, 'Detalle 5', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(108, 'Detalle 6', 18, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(109, 'Detalle 1', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(110, 'Detalle 2', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(111, 'Detalle 3', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(112, 'Detalle 4', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(113, 'Detalle 5', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(114, 'Detalle 6', 19, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(115, 'Detalle 1', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(116, 'Detalle 2', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(117, 'Detalle 3', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(118, 'Detalle 4', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(119, 'Detalle 5', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(120, 'Detalle 6', 20, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(121, 'test1', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01'),
(122, 'test1', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01'),
(123, 'test1', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dolars`
--

CREATE TABLE `dolars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `precio` varchar(255) NOT NULL DEFAULT '40.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `dolars`
--

INSERT INTO `dolars` (`id`, `precio`, `created_at`, `updated_at`) VALUES
(1, '40.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `epresas_de_envio_y_retiros`
--

CREATE TABLE `epresas_de_envio_y_retiros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `sucursal` varchar(255) DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `epresas_de_envio_y_retiros`
--

INSERT INTO `epresas_de_envio_y_retiros` (`id`, `nombre`, `sucursal`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Mrw', '', '', '2024-06-16 02:40:20', '2024-06-16 02:40:20'),
(2, 'zoom', '', '', '2024-06-17 04:47:34', '2024-06-17 04:47:34'),
(3, 'Retiro en tienda', '', '', '2024-06-17 22:37:37', '2024-06-17 22:37:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `estado` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'APROBADO', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(2, 'DENEGADO', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(3, 'ENESPERA', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(4, 'En transito', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE `favoritos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_compras`
--

CREATE TABLE `historia_compras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cantidad` varchar(255) NOT NULL,
  `id_tipo_de_pago` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tranferencia` bigint(20) UNSIGNED DEFAULT NULL,
  `id_paypal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_mercantil` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `historia_compras`
--

INSERT INTO `historia_compras` (`id`, `cantidad`, `id_tipo_de_pago`, `id_user`, `id_producto`, `id_tranferencia`, `id_paypal`, `id_mercantil`, `created_at`, `updated_at`) VALUES
(4, '1', 2, 5, 12, NULL, NULL, NULL, '2024-06-17 19:50:01', '2024-06-17 19:50:01'),
(5, '4', 2, 5, 2, 9, NULL, NULL, '2024-06-17 19:52:06', '2024-06-17 19:52:06'),
(6, '1', 2, 5, 18, 9, NULL, NULL, '2024-06-17 19:52:06', '2024-06-17 19:52:06'),
(7, '1', 2, 5, 2, 10, NULL, NULL, '2024-06-17 20:03:24', '2024-06-17 20:03:24'),
(8, '2', 1, 5, 6, 11, NULL, NULL, '2024-06-17 20:23:19', '2024-06-17 20:23:19'),
(9, '1', 1, 5, 20, 11, NULL, NULL, '2024-06-17 20:23:19', '2024-06-17 20:23:19'),
(10, '2', 1, 5, 2, 12, NULL, NULL, '2024-06-17 20:30:01', '2024-06-17 20:30:01'),
(11, '1', 1, 5, 2, 13, NULL, NULL, '2024-06-17 20:33:43', '2024-06-17 20:33:43'),
(12, '1', 2, 5, 14, 14, NULL, NULL, '2024-06-17 22:50:39', '2024-06-17 22:50:39'),
(13, '1', 2, 5, 12, 14, NULL, NULL, '2024-06-17 22:50:39', '2024-06-17 22:50:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagenes` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `imagenes`, `id_producto`, `created_at`, `updated_at`) VALUES
(1, 'imagenes/XunnHr9dEajdPT9jcahNh2um80CAOaFxCSLXXMGs.png', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01'),
(2, 'imagenes/IzdN6oRoPN1Z1e3L2C7YsCx3MpSVBbHa6iA9VyYm.png', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01'),
(3, 'imagenes/ApD8uaxdXfhCFbSUZ8TFyWZEOqnjua64e8kk1r7k.jpg', 21, '2024-06-17 22:47:01', '2024-06-17 22:47:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercantils`
--

CREATE TABLE `mercantils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_18_185844_add_two_factor_columns_to_users_table', 1),
(5, '2024_05_18_185908_create_personal_access_tokens_table', 1),
(6, '2024_05_18_195233_create_categorias_table', 1),
(7, '2024_05_18_195356_create_tipo_retiros_table', 1),
(8, '2024_05_18_195357_create_productos_table', 1),
(9, '2024_05_18_195358_create_imagenes_table', 1),
(10, '2024_05_18_195438_create_tipo_de_pagos_table', 1),
(11, '2024_05_18_195439_create_estados_table', 1),
(12, '2024_05_18_195544_create_comentarios_table', 1),
(13, '2024_05_18_203257_create_paypals_table', 1),
(14, '2024_05_18_204254_create_epresas_de_envio_y_retiros_table', 1),
(15, '2024_05_18_204255_create_ordens_table', 1),
(16, '2024_05_18_205715_create_sucursals_table', 1),
(17, '2024_05_24_041806_create_detalles_table', 1),
(18, '2024_05_24_041815_create_favoritos_table', 1),
(19, '2024_06_02_183141_create_carritos_table', 1),
(20, '2024_06_12_014604_create_tranferencias_table', 1),
(21, '2024_06_14_033101_create_mercantils_table', 1),
(22, '2024_06_15_221746_create_permission_tables', 1),
(23, '2024_07_18_195518_create_historia_compras_table', 1),
(25, '2024_06_15_224747_create_dolars_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(3, 'App\\Models\\User', 4),
(3, 'App\\Models\\User', 7),
(3, 'App\\Models\\User', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordens`
--

CREATE TABLE `ordens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) NOT NULL DEFAULT '0',
  `descuento` varchar(255) NOT NULL DEFAULT '0',
  `precio_envio` varchar(255) NOT NULL DEFAULT '0',
  `id_tipo_de_pago` bigint(20) UNSIGNED DEFAULT NULL,
  `id_epresas_de_envio_y_retiros` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paypals`
--

CREATE TABLE `paypals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `comentario` varchar(255) NOT NULL,
  `id_users` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tipo_de_pago` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24'),
(2, 'admin', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24'),
(3, 'user', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `inmagen_default` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `stop` varchar(255) NOT NULL,
  `es_descueto` varchar(255) NOT NULL DEFAULT '0',
  `descuento` varchar(255) DEFAULT NULL,
  `tiempo_descuento` varchar(255) DEFAULT NULL,
  `ventas` varchar(255) NOT NULL,
  `id_categoria` bigint(20) UNSIGNED DEFAULT NULL,
  `id_usuario` bigint(20) UNSIGNED DEFAULT NULL,
  `id_tipo_retiros` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `inmagen_default`, `precio`, `descripcion`, `stop`, `es_descueto`, `descuento`, `tiempo_descuento`, `ventas`, `id_categoria`, `id_usuario`, `id_tipo_retiros`, `created_at`, `updated_at`) VALUES
(1, 'nombre 0', 'imagenes/default.jpg', '49', 'descripcion 0', '3', '0', '0', '0', '1', 1, NULL, NULL, '2024-06-16 02:22:06', '2024-06-17 08:02:25'),
(2, 'nombre 1', 'imagenes/default.jpg', '169', 'descripcion 1', '13', '0', '0', '0', '0', 4, NULL, NULL, '2024-06-16 02:22:06', '2024-06-16 02:22:06'),
(3, 'nombre 2', 'imagenes/default.jpg', '156', 'descripcion 2', '-1', '0', '0', '0', '1', 3, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 08:02:25'),
(4, 'nombre 3', 'imagenes/default.jpg', '49', 'descripcion 3', '13', '0', '0', '0', '1', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 08:02:25'),
(5, 'nombre 4', 'imagenes/default.jpg', '137', 'descripcion 4', '7', '0', '0', '0', '0', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(6, 'nombre 5', 'imagenes/default.jpg', '153', 'descripcion 5', '13', '0', '0', '0', '1', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 19:50:01'),
(7, 'nombre 6', 'imagenes/default.jpg', '40', 'descripcion 6', '1', '0', '0', '0', '1', 5, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 19:52:06'),
(8, 'nombre 7', 'imagenes/default.jpg', '131', 'descripcion 7', '18', '0', '0', '0', '1', 3, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 19:52:06'),
(9, 'nombre 8', 'imagenes/default.jpg', '19', 'descripcion 8', '9', '0', '0', '0', '1', 3, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 20:03:24'),
(10, 'nombre 9', 'imagenes/default.jpg', '81', 'descripcion 9', '13', '0', '0', '0', '1', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 20:23:19'),
(11, 'nombre 10', 'imagenes/default.jpg', '101', 'descripcion 10', '5', '0', '0', '0', '1', 3, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 20:23:19'),
(12, 'nombre 11', 'imagenes/default.jpg', '163', 'descripcion 11', '6', '0', '0', '0', '1', 2, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 20:30:01'),
(13, 'nombre 12', 'imagenes/default.jpg', '41', 'descripcion 12', '7', '0', '0', '0', '1', 5, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 20:33:43'),
(14, 'nombre 13', 'imagenes/default.jpg', '74', 'descripcion 13', '18', '0', '0', '0', '1', 2, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 22:50:39'),
(15, 'nombre 14', 'imagenes/default.jpg', '32', 'descripcion 14', '6', '0', '0', '0', '1', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-17 22:50:39'),
(16, 'nombre 15', 'imagenes/default.jpg', '76', 'descripcion 15', '4', '0', '0', '0', '0', 3, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(17, 'nombre 16', 'imagenes/default.jpg', '125', 'descripcion 16', '17', '0', '0', '0', '0', 4, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(18, 'nombre 17', 'imagenes/default.jpg', '43', 'descripcion 17', '7', '0', '0', '0', '0', 4, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(19, 'nombre 18', 'imagenes/default.jpg', '183', 'descripcion 18', '19', '0', '0', '0', '0', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(20, 'nombre 19', 'imagenes/default.jpg', '171', 'descripcion 19', '5', '0', '0', '0', '0', 1, NULL, NULL, '2024-06-16 02:22:07', '2024-06-16 02:22:07'),
(21, 'Test1', 'imagenes/I3QTBGV3G1rSA04cKHQaQLI3uQckQACjBiWTyL56.jpg', '200', 'descripcion main', '20', '0', NULL, NULL, '0', 1, NULL, NULL, '2024-06-17 22:47:01', '2024-06-17 22:47:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24'),
(2, 'admin', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24'),
(3, 'user', 'web', '2024-06-16 02:26:24', '2024-06-16 02:26:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('d4j0lEAn5FlX52oyncYGlpJgvMMcC2j1X0JFMqGt', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiaGp6VnB0QVRRUUJ6bTNlZ21oZk1OVkRLQjlwYUZMdElxcmwwZ3ZBTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hZG1pbi9jcmVhci1wcm9kdWN0byI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzM6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0by8xNCI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1718650465),
('iRgqzYG4WIrB3tJ77GUac7Y1ttmfPuQwC87n3isV', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:127.0) Gecko/20100101 Firefox/127.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNzNaY0pHMW5YSURueVdJeFNyUmdpTnZUTmx2UkpwVmFaU1ZXY0U5eCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjU7fQ==', 1718647138);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursals`
--

CREATE TABLE `sucursals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `id_epresas_de_envio_y_retiros` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sucursals`
--

INSERT INTO `sucursals` (`id`, `direccion`, `id_epresas_de_envio_y_retiros`, `created_at`, `updated_at`) VALUES
(1, 'Maturin', 1, '2024-06-16 02:40:20', '2024-06-16 02:40:20'),
(2, 'Indio', 1, '2024-06-16 02:40:20', '2024-06-16 02:40:20'),
(3, 'Maturin', 2, '2024-06-17 04:47:34', '2024-06-17 04:47:34'),
(4, 'Caracas', 2, '2024-06-17 04:47:34', '2024-06-17 04:47:34'),
(5, 'Centro plaza 7', 3, '2024-06-17 22:38:08', '2024-06-17 22:38:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_pagos`
--

CREATE TABLE `tipo_de_pagos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_pago` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_de_pagos`
--

INSERT INTO `tipo_de_pagos` (`id`, `tipo_pago`, `created_at`, `updated_at`) VALUES
(1, 'Traferencia Bancaria', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(2, 'Paypal', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(3, 'Mercantil', '2024-06-16 02:21:54', '2024-06-16 02:21:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_retiros`
--

CREATE TABLE `tipo_retiros` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `retiro` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_retiros`
--

INSERT INTO `tipo_retiros` (`id`, `retiro`, `created_at`, `updated_at`) VALUES
(1, 'retiro en tienda', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(2, 'Envio gratuito', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(3, 'Envio nacional', '2024-06-16 02:21:54', '2024-06-16 02:21:54'),
(4, 'Envio cobro a destinatario', '2024-06-16 02:21:54', '2024-06-16 02:21:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tranferencias`
--

CREATE TABLE `tranferencias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referencia` varchar(255) NOT NULL,
  `numero_telefono` varchar(255) NOT NULL,
  `fecha` varchar(255) DEFAULT NULL,
  `banco` varchar(255) DEFAULT NULL,
  `monto` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Comentario` varchar(255) DEFAULT NULL,
  `id_epresas_de_envio_y_retiro` bigint(20) UNSIGNED DEFAULT NULL,
  `id_sucursal` bigint(20) UNSIGNED DEFAULT NULL,
  `id_pago` bigint(20) UNSIGNED DEFAULT NULL,
  `id_estado` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tranferencias`
--

INSERT INTO `tranferencias` (`id`, `referencia`, `numero_telefono`, `fecha`, `banco`, `monto`, `email`, `Comentario`, `id_epresas_de_envio_y_retiro`, `id_sucursal`, `id_pago`, `id_estado`, `id_user`, `created_at`, `updated_at`) VALUES
(9, 'TWPU77LJK6RYW', '+58 426 382 1517', '17/06/2024', 'pago con Paypal', '719', 'admin@example.com', NULL, 1, 1, 2, 3, 5, '2024-06-17 19:52:06', '2024-06-17 19:52:06'),
(10, 'TWPU77LJK6RYW', '+58 426 382 1517', '17/06/2024', 'pago con Paypal', '169', 'admin@example.com', 'su producto fue enviado con exito al mrw direccion plaza indio su codigo de trakin es 123456789', 1, 2, 2, 1, 5, '2024-06-17 20:03:24', '2024-06-17 20:16:46'),
(11, '123123', '04263821517', '2024-06-17', 'Venezuela', '19080', 'admin@example.com', 'de', 2, 4, 1, 1, 5, '2024-06-17 20:23:19', '2024-06-17 20:24:24'),
(12, '123123', '04263821517', '2024-06-17', 'Venezuela', '13520', 'admin@example.com', NULL, 1, 2, 1, 3, 5, '2024-06-17 20:30:01', '2024-06-17 20:30:01'),
(13, '123123', '04263821517', '2024-06-17', 'Venezuela', '6760', 'admin@example.com', NULL, 1, 1, 1, 3, 5, '2024-06-17 20:33:43', '2024-06-17 20:33:43'),
(14, 'TWPU77LJK6RYW', '123123', '17/06/2024', 'pago con Paypal', '237', 'admin@example.com', 'su trakin es 123456789 por favor marcar como completado una vez llegue el producto', 1, 2, 2, 1, 5, '2024-06-17 22:50:39', '2024-06-17 22:53:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `numero_telefono` varchar(255) DEFAULT NULL,
  `ws` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `numero_telefono`, `ws`) VALUES
(4, 'miguel', 'miguel@gmail.com', NULL, '$2y$12$x5BvUMnFg67i8z.bO7qYxeb40wXQqI3zDyiO9KFUBavt0sCj5h15a', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-16 02:26:51', '2024-06-16 02:26:51', NULL, NULL),
(5, 'Admin', 'admin@example.com', NULL, '$2y$12$QLyZrnMjBHMikAR611ebc.ZImB9KqlmoyicQBX1bS5wWtqoUaJGaK', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-16 02:30:12', '2024-06-17 22:54:13', '123123123', '+58 426 382 1517'),
(7, 'miguel', 'miguel3@gmail.com', NULL, '$2y$12$SRqctqcfOgaYCFNITvtLpuTadN.aI0knki5AW3a1dntwevaPP/mfa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 03:35:16', '2024-06-17 03:35:16', NULL, NULL),
(9, 'Carlos Estanga', 'miguelestanga13@gmail.com', NULL, '$2y$12$uiAjJyNxFZBcfZwwBSV/kutF6wy4avXD8YpatC3lV21i5lUS1oOv2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 05:57:43', '2024-06-17 05:57:43', '123123', NULL),
(10, 'Daniela', 'miguelestanga11@gmail.com', NULL, '$2y$12$kDvPxJ0In0YwLhqbZozYe.ZkTHI1NojV/coAP1sRhlVEtg7sXtTDS', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 05:58:33', '2024-06-17 05:58:33', '123123', NULL),
(11, 'daniela', 'daniel2@gmail.com', NULL, '$2y$12$mOKTIyQwJZW/2Nf1zF4TF.32Me57LiF8UwOGoMX9qdx/uLXFrnZ1.', NULL, NULL, NULL, NULL, NULL, NULL, '2024-06-17 07:30:24', '2024-06-17 07:30:24', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_empresa_de_envio_y_retiros`
--
ALTER TABLE `cache_empresa_de_envio_y_retiros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carritos_id_producto_foreign` (`id_producto`),
  ADD KEY `carritos_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_id_producto_foreign` (`id_producto`),
  ADD KEY `comentarios_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalles_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `dolars`
--
ALTER TABLE `dolars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `epresas_de_envio_y_retiros`
--
ALTER TABLE `epresas_de_envio_y_retiros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favoritos_id_producto_foreign` (`id_producto`),
  ADD KEY `favoritos_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `historia_compras`
--
ALTER TABLE `historia_compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historia_compras_id_tipo_de_pago_foreign` (`id_tipo_de_pago`),
  ADD KEY `historia_compras_id_user_foreign` (`id_user`),
  ADD KEY `historia_compras_id_producto_foreign` (`id_producto`),
  ADD KEY `historia_compras_id_tranferencia_foreign` (`id_tranferencia`),
  ADD KEY `historia_compras_id_paypal_foreign` (`id_paypal`),
  ADD KEY `historia_compras_id_mercantil_foreign` (`id_mercantil`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagenes_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mercantils`
--
ALTER TABLE `mercantils`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `ordens`
--
ALTER TABLE `ordens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ordens_id_tipo_de_pago_foreign` (`id_tipo_de_pago`),
  ADD KEY `ordens_id_epresas_de_envio_y_retiros_foreign` (`id_epresas_de_envio_y_retiros`),
  ADD KEY `ordens_id_user_foreign` (`id_user`),
  ADD KEY `ordens_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `paypals_id_users_foreign` (`id_users`),
  ADD KEY `paypals_id_tipo_de_pago_foreign` (`id_tipo_de_pago`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_categoria_foreign` (`id_categoria`),
  ADD KEY `productos_id_usuario_foreign` (`id_usuario`),
  ADD KEY `productos_id_tipo_retiros_foreign` (`id_tipo_retiros`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sucursals_id_epresas_de_envio_y_retiros_foreign` (`id_epresas_de_envio_y_retiros`);

--
-- Indices de la tabla `tipo_de_pagos`
--
ALTER TABLE `tipo_de_pagos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_retiros`
--
ALTER TABLE `tipo_retiros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tranferencias`
--
ALTER TABLE `tranferencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tranferencias_id_epresas_de_envio_y_retiro_foreign` (`id_epresas_de_envio_y_retiro`),
  ADD KEY `tranferencias_id_sucursal_foreign` (`id_sucursal`),
  ADD KEY `tranferencias_id_pago_foreign` (`id_pago`),
  ADD KEY `tranferencias_id_estado_foreign` (`id_estado`),
  ADD KEY `tranferencias_id_user_foreign` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cache_empresa_de_envio_y_retiros`
--
ALTER TABLE `cache_empresa_de_envio_y_retiros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carritos`
--
ALTER TABLE `carritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalles`
--
ALTER TABLE `detalles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `dolars`
--
ALTER TABLE `dolars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `epresas_de_envio_y_retiros`
--
ALTER TABLE `epresas_de_envio_y_retiros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `favoritos`
--
ALTER TABLE `favoritos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `historia_compras`
--
ALTER TABLE `historia_compras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mercantils`
--
ALTER TABLE `mercantils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `ordens`
--
ALTER TABLE `ordens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sucursals`
--
ALTER TABLE `sucursals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tipo_de_pagos`
--
ALTER TABLE `tipo_de_pagos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_retiros`
--
ALTER TABLE `tipo_retiros`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tranferencias`
--
ALTER TABLE `tranferencias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carritos`
--
ALTER TABLE `carritos`
  ADD CONSTRAINT `carritos_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carritos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `detalles`
--
ALTER TABLE `detalles`
  ADD CONSTRAINT `detalles_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `favoritos`
--
ALTER TABLE `favoritos`
  ADD CONSTRAINT `favoritos_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `favoritos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Filtros para la tabla `historia_compras`
--
ALTER TABLE `historia_compras`
  ADD CONSTRAINT `historia_compras_id_mercantil_foreign` FOREIGN KEY (`id_mercantil`) REFERENCES `mercantils` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `historia_compras_id_paypal_foreign` FOREIGN KEY (`id_paypal`) REFERENCES `paypals` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `historia_compras_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `historia_compras_id_tipo_de_pago_foreign` FOREIGN KEY (`id_tipo_de_pago`) REFERENCES `tipo_de_pagos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `historia_compras_id_tranferencia_foreign` FOREIGN KEY (`id_tranferencia`) REFERENCES `tranferencias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `historia_compras_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD CONSTRAINT `imagenes_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ordens`
--
ALTER TABLE `ordens`
  ADD CONSTRAINT `ordens_id_epresas_de_envio_y_retiros_foreign` FOREIGN KEY (`id_epresas_de_envio_y_retiros`) REFERENCES `epresas_de_envio_y_retiros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ordens_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ordens_id_tipo_de_pago_foreign` FOREIGN KEY (`id_tipo_de_pago`) REFERENCES `tipo_de_pagos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `ordens_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `paypals`
--
ALTER TABLE `paypals`
  ADD CONSTRAINT `paypals_id_tipo_de_pago_foreign` FOREIGN KEY (`id_tipo_de_pago`) REFERENCES `tipo_de_pagos` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `paypals_id_users_foreign` FOREIGN KEY (`id_users`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_id_tipo_retiros_foreign` FOREIGN KEY (`id_tipo_retiros`) REFERENCES `tipo_retiros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_id_usuario_foreign` FOREIGN KEY (`id_usuario`) REFERENCES `users` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `sucursals`
--
ALTER TABLE `sucursals`
  ADD CONSTRAINT `sucursals_id_epresas_de_envio_y_retiros_foreign` FOREIGN KEY (`id_epresas_de_envio_y_retiros`) REFERENCES `epresas_de_envio_y_retiros` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `tranferencias`
--
ALTER TABLE `tranferencias`
  ADD CONSTRAINT `tranferencias_id_epresas_de_envio_y_retiro_foreign` FOREIGN KEY (`id_epresas_de_envio_y_retiro`) REFERENCES `epresas_de_envio_y_retiros` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tranferencias_id_estado_foreign` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tranferencias_id_pago_foreign` FOREIGN KEY (`id_pago`) REFERENCES `tipo_de_pagos` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tranferencias_id_sucursal_foreign` FOREIGN KEY (`id_sucursal`) REFERENCES `sucursals` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `tranferencias_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
