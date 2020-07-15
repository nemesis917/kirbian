-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2020 a las 22:22:17
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `kirbian`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencias` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `nombres`, `slug`, `referencias`, `created_at`, `updated_at`) VALUES
(55, 'A: el hombre y sus ocupaciones.', 'a-el-hombre-y-sus-ocupaciones', 'QCN7hBdjrJ', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(56, 'B: la mujer y sus ocupaciones.', 'b-la-mujer-y-sus-ocupaciones', 'vyHDVY7eQL', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(57, 'C: deidades.', 'c-deidades', 'O1BhMmmHcw', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(58, 'F: partes del cuerpo humano.', 'f-partes-del-cuerpo-humano', 'ZSEugh04Ni', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(59, 'E: mamíferos.', 'e-mamiferos', 'AW5HKjpNTa', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(60, 'F: partes del cuerpo de los mamíferos.', 'f-partes-del-cuerpo-de-los-mamiferos', 'AsMRASGUju', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(61, 'G: aves.', 'g-aves', 'YqWgELIAr3', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(62, 'H: partes del cuerpo de las aves.', 'h-partes-del-cuerpo-de-las-aves', 'dSBLsh5Ixz', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(63, 'I: anfibios, reptiles y partes de anfibios y reptiles.', 'i-anfibios-reptiles-y-partes-de-anfibios-y-reptiles', 'KgXwvZ5o6S', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(64, 'K: peces y partes de peces.', 'k-peces-y-partes-de-peces', '0PLjCZyTOi', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(65, 'L: invertebrados, otros animales.', 'l-invertebrados-otros-animales', '0i1TWkkUmf', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(66, 'M: árboles y otras plantas.', 'm-arboles-y-otras-plantas', 'TfhrfHso20', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(67, 'N: el cielo, la tierra y el agua.', 'n-el-cielo-la-tierra-y-el-agua', 'hlKGHDCY3o', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(68, 'O: edificios y partes de edificios.', 'o-edificios-y-partes-de-edificios', '1LvM5rJcg1', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(69, 'P: barcas y partes de barcas.', 'p-barcas-y-partes-de-barcas', 'vWchxOV7ig', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(70, 'Q: mobiliario.', 'q-mobiliario', 'TWkgwDNF5i', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(71, 'R: templos.', 'r-templos', '8ZPrWgONLD', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(72, 'S: coronas y cetros.', 's-coronas-y-cetros', 'uoVozENI5q', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(73, 'T: guerra y caza.', 't-guerra-y-caza', 'VSWQkoipTh', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(74, 'U: agricultura y artesanía.', 'u-agricultura-y-artesania', 'lgrcUORIRP', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(75, 'V: cuerdas y cestería.', 'v-cuerdas-y-cesteria', 'XmTFnuW9mh', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(76, 'W: vasijas de piedra y cerámica.', 'w-vasijas-de-piedra-y-ceramica', 'DEnxVtSR1W', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(77, 'X: panes y pasteles.', 'x-panes-y-pasteles', 's2mLc6CRq4', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(78, 'Y: escritura, juegos y música.', 'y-escritura-juegos-y-musica', 'VumZi5j32G', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(79, 'Z: trazos y figuras geométricas.', 'z-trazos-y-figuras-geometricas', '1GH49iI7Di', '2020-04-30 04:48:14', '2020-04-30 04:48:14'),
(80, 'Aa: jeroglíficos sin clasificar.', 'aa-jeroglificos-sin-clasificar', 'ETSvqMonfv', '2020-04-30 04:48:14', '2020-04-30 04:48:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_jero`
--

CREATE TABLE `comentarios_jero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comentario` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntuacion` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeroglificos_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeroglifico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descripcion`
--

INSERT INTO `descripcion` (`id`, `descripcion`, `jeroglifico_id`, `created_at`, `updated_at`) VALUES
(1, 'Prueba Prueba Prueba Prueba Prueba', 1, '2020-07-15 00:12:43', '2020-07-15 00:12:43'),
(2, 'descripcion del simbolo, el cual asumo es un texto mucho mas largo que el resto del documento, no se me ocurre la longitud pero asumo que es de un tamaño aproximado a esto', 2, '2020-07-15 00:22:14', '2020-07-15 00:22:14'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo', 3, '2020-07-15 00:24:16', '2020-07-15 00:24:16'),
(4, 'si señores, solo tiene una sola imagen nada mas, no hay mas', 4, '2020-07-15 00:51:03', '2020-07-15 00:51:03'),
(5, 'todas las fotostodas las fotostodas las fotostodas las fotostodas las fotostodas las fotos', 5, '2020-07-15 08:30:05', '2020-07-15 08:30:05'),
(6, 'no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo no cursivo', 6, '2020-07-15 08:32:06', '2020-07-15 08:32:06'),
(7, 'algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo algo', 7, '2020-07-15 21:55:05', '2020-07-15 21:55:05'),
(8, 'sdgd gsgdgdg fgdf dgsgsdg', 8, '2020-07-15 21:56:06', '2020-07-15 21:56:06'),
(9, 'svddvs dds vdew vew grthrt htrhrt svddvs dds vdew vew grthrt htrhrt svddvs dds vdew vew grthrt htrhrt svddvs dds vdew vew grthrt htrhrt svddvs dds vdew vew grthrt htrhrt svddvs dds vdew vew grthrt htrhrt svddvs dds vdew', 10, '2020-07-15 22:38:29', '2020-07-15 22:38:29'),
(10, 'dfgdf gdfg dfgdfg dfgdfgd gfdfd fsdfsd fffffff ffffff fffff fffff', 11, '2020-07-15 22:40:41', '2020-07-15 22:40:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_comentario_jero`
--

CREATE TABLE `imagenes_comentario_jero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruta_img_jero` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentarios_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_jeroglificos`
--

CREATE TABLE `imagenes_jeroglificos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruta_imagen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referencia` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jeroglifico_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_jeroglificos`
--

INSERT INTO `imagenes_jeroglificos` (`id`, `ruta_imagen`, `referencia`, `jeroglifico_id`, `created_at`, `updated_at`) VALUES
(1, 'imagenes/catalogo/55/370-jero-55-521.png', '1', 1, '2020-07-15 00:12:44', '2020-07-15 00:12:44'),
(2, 'imagenes/catalogo/55/241-jero-55-70.png', '1', 2, '2020-07-15 00:22:14', '2020-07-15 00:22:14'),
(3, 'imagenes/catalogo/55/825-jero-55-509.png', '2', 2, '2020-07-15 00:22:14', '2020-07-15 00:22:14'),
(4, 'imagenes/catalogo/55/199-jero-55-502.png', '3', 2, '2020-07-15 00:22:14', '2020-07-15 00:22:14'),
(5, 'imagenes/catalogo/55/486-jero-55-666.png', '1', 3, '2020-07-15 00:24:16', '2020-07-15 00:24:16'),
(6, 'imagenes/catalogo/55/912-jero-55-942.png', '2', 3, '2020-07-15 00:24:16', '2020-07-15 00:24:16'),
(7, 'imagenes/catalogo/55/241-jero-55-203.png', '1', 4, '2020-07-15 00:51:03', '2020-07-15 00:51:03'),
(8, 'imagenes/catalogo/55/396-jero-55-595.png', '1', 5, '2020-07-15 08:30:06', '2020-07-15 08:30:06'),
(9, 'imagenes/catalogo/55/509-jero-55-624.png', '2', 5, '2020-07-15 08:30:06', '2020-07-15 08:30:06'),
(10, 'imagenes/catalogo/55/75-jero-55-96.png', '3', 5, '2020-07-15 08:30:06', '2020-07-15 08:30:06'),
(11, 'imagenes/catalogo/55/711-jero-55-896.png', '1', 6, '2020-07-15 08:32:06', '2020-07-15 08:32:06'),
(12, 'system/no-foto.jpg', '2', 6, '2020-07-15 08:32:06', '2020-07-15 08:32:06'),
(13, 'imagenes/catalogo/55/432-jero-55-885.png', '3', 6, '2020-07-15 08:32:06', '2020-07-15 08:32:06'),
(14, 'imagenes/catalogo/64/187-jero-64-417.png', '1', 7, '2020-07-15 21:55:06', '2020-07-15 21:55:06'),
(15, 'system/no-foto.jpg', '2', 7, '2020-07-15 21:55:06', '2020-07-15 21:55:06'),
(16, 'system/no-foto.jpg', '3', 7, '2020-07-15 21:55:06', '2020-07-15 21:55:06'),
(17, 'imagenes/catalogo/58/464-jero-58-256.png', '1', 8, '2020-07-15 21:56:06', '2020-07-15 21:56:06'),
(18, 'system/no-foto.jpg', '2', 8, '2020-07-15 21:56:06', '2020-07-15 21:56:06'),
(19, 'system/no-foto.jpg', '3', 8, '2020-07-15 21:56:06', '2020-07-15 21:56:06'),
(20, 'imagenes/catalogo/69/226-jero-69-964.png', '1', 9, '2020-07-15 21:58:10', '2020-07-15 21:58:10'),
(21, 'system/no-foto.jpg', '2', 9, '2020-07-15 21:58:10', '2020-07-15 21:58:10'),
(22, 'system/no-foto.jpg', '3', 9, '2020-07-15 21:58:10', '2020-07-15 21:58:10'),
(23, 'imagenes/catalogo/55/491-jero-55-702.png', '1', 10, '2020-07-15 22:38:30', '2020-07-15 22:38:30'),
(24, 'system/no-foto.jpg', '2', 10, '2020-07-15 22:38:30', '2020-07-15 22:38:30'),
(25, 'system/no-foto.jpg', '3', 10, '2020-07-15 22:38:30', '2020-07-15 22:38:30'),
(26, 'imagenes/catalogo/66/445-jero-66-935.png', '1', 11, '2020-07-15 22:40:41', '2020-07-15 22:40:41'),
(27, 'system/no-foto.jpg', '2', 11, '2020-07-15 22:40:41', '2020-07-15 22:40:41'),
(28, 'system/no-foto.jpg', '3', 11, '2020-07-15 22:40:41', '2020-07-15 22:40:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jeroglificos`
--

CREATE TABLE `jeroglificos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gandiner` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transliteracion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_usuario` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalogo_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jeroglificos`
--

INSERT INTO `jeroglificos` (`id`, `gandiner`, `transliteracion`, `sentido`, `nombre_usuario`, `catalogo_id`, `created_at`, `updated_at`) VALUES
(1, 'Prueba', 'Prueba', 'Prueba', 'admin admin', 55, '2020-07-15 00:12:43', '2020-07-15 00:12:43'),
(2, 'Gardiner', 'Transliteracion', 'Significa fertilidad, buenas energias y alegrias para la poblacion de esa epoca', 'admin admin', 55, '2020-07-15 00:22:14', '2020-07-15 00:22:14'),
(3, '2 imagenes', 'transliteracion 2', 'segundo significado', 'admin admin', 55, '2020-07-15 00:24:16', '2020-07-15 00:24:16'),
(4, '1 imagen', 'solo una imagen', 'significa que tengo solo una imagen, que mas quiere que diga', 'admin admin', 55, '2020-07-15 00:51:03', '2020-07-15 00:51:03'),
(5, 'All fotos', 'todas las fotos', 'todas las fotos', 'admin admin', 55, '2020-07-15 08:30:05', '2020-07-15 08:30:05'),
(6, 'no cursivo', 'no cursivo', 'no cursivo', 'admin admin', 55, '2020-07-15 08:32:06', '2020-07-15 08:32:06'),
(7, 'algo', 'algo', 'algo', 'admin admin', 64, '2020-07-15 21:55:04', '2020-07-15 21:55:04'),
(8, 'zapato', 'zapato zapatero', 'Lorem ipsum', 'admin admin', 58, '2020-07-15 21:56:06', '2020-07-15 21:56:06'),
(9, 'svdvdvsd', 'svdvdvsdgsdgd', 'svdvdvsdgsdgd', 'admin admin', 69, '2020-07-15 21:58:10', '2020-07-15 21:58:10'),
(10, 'siudosds', 'vpisdv hssd vihsp dvhi VIP HSI', 'pivhsvi psdvh psdv hspd vsipdvh ps dhvps div hpsd dhvp sd vhis pdvh psdispd vhspd ivhs dpivhsp vhiisdpv hsdp ivhsdipv hs pdvhsp dvhs ipd hvi psdh vsipdh  vsipdhv sipd vhsdvpiv', 'admin admin', 55, '2020-07-15 22:38:29', '2020-07-15 22:38:29'),
(11, 'sdgdgdgsdgdg', 'sdsggdf gdf gdfdfg', 'dfgdfgdfg', 'admin admin', 66, '2020-07-15 22:40:41', '2020-07-15 22:40:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2020_07_10_043508_catalogo', 1),
(19, '2020_07_11_044749_jeroglificos', 1),
(20, '2020_07_11_054259_comentarios_jero', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('administrador','moderador') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'moderador',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin', NULL, '$2y$10$g6QnZiMvovrwIq.g7w6LQ.nzEQohdita3Qhk5u5KmVUGd8dMWAgsy', 'administrador', 'vXMVlTnb6qdB1KgoEZH75R9yjzceQIWs8a3vvj9Y9VdxNimbjCN3YpAhXel2', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_catalogo_jeroglifico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_catalogo_jeroglifico` (
`id` bigint(20) unsigned
,`transliteracion` varchar(30)
,`gandiner` varchar(12)
,`ruta_imagen` varchar(100)
,`catalogo_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_ver_jeroglifico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_ver_jeroglifico` (
`id` bigint(20) unsigned
,`transliteracion` varchar(30)
,`gandiner` varchar(12)
,`descripcion` text
,`significado` text
,`catalogo_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_catalogo_jeroglifico`
--
DROP TABLE IF EXISTS `vw_catalogo_jeroglifico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_catalogo_jeroglifico`  AS  select `jeroglificos`.`id` AS `id`,`jeroglificos`.`transliteracion` AS `transliteracion`,`jeroglificos`.`gandiner` AS `gandiner`,`imagenes_jeroglificos`.`ruta_imagen` AS `ruta_imagen`,`jeroglificos`.`catalogo_id` AS `catalogo_id` from ((`jeroglificos` left join `descripcion` on((`descripcion`.`jeroglifico_id` = `jeroglificos`.`id`))) left join `imagenes_jeroglificos` on((`imagenes_jeroglificos`.`jeroglifico_id` = `jeroglificos`.`id`))) where (`imagenes_jeroglificos`.`referencia` = '1') ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_ver_jeroglifico`
--
DROP TABLE IF EXISTS `vw_ver_jeroglifico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ver_jeroglifico`  AS  select `jeroglificos`.`id` AS `id`,`jeroglificos`.`transliteracion` AS `transliteracion`,`jeroglificos`.`gandiner` AS `gandiner`,`descripcion`.`descripcion` AS `descripcion`,`jeroglificos`.`sentido` AS `significado`,`jeroglificos`.`catalogo_id` AS `catalogo_id` from (`jeroglificos` left join `descripcion` on((`descripcion`.`jeroglifico_id` = `jeroglificos`.`id`))) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `comentarios_jero`
--
ALTER TABLE `comentarios_jero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comentarios_jero_jeroglificos_id_foreign` (`jeroglificos_id`);

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descripcion_jeroglifico_id_foreign` (`jeroglifico_id`);

--
-- Indices de la tabla `imagenes_comentario_jero`
--
ALTER TABLE `imagenes_comentario_jero`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagenes_comentario_jero_comentarios_id_foreign` (`comentarios_id`);

--
-- Indices de la tabla `imagenes_jeroglificos`
--
ALTER TABLE `imagenes_jeroglificos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagenes_jeroglificos_jeroglifico_id_foreign` (`jeroglifico_id`);

--
-- Indices de la tabla `jeroglificos`
--
ALTER TABLE `jeroglificos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jeroglificos_catalogo_id_foreign` (`catalogo_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT de la tabla `comentarios_jero`
--
ALTER TABLE `comentarios_jero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `imagenes_comentario_jero`
--
ALTER TABLE `imagenes_comentario_jero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes_jeroglificos`
--
ALTER TABLE `imagenes_jeroglificos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `jeroglificos`
--
ALTER TABLE `jeroglificos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios_jero`
--
ALTER TABLE `comentarios_jero`
  ADD CONSTRAINT `comentarios_jero_jeroglificos_id_foreign` FOREIGN KEY (`jeroglificos_id`) REFERENCES `jeroglificos` (`id`);

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `descripcion_jeroglifico_id_foreign` FOREIGN KEY (`jeroglifico_id`) REFERENCES `jeroglificos` (`id`);

--
-- Filtros para la tabla `imagenes_comentario_jero`
--
ALTER TABLE `imagenes_comentario_jero`
  ADD CONSTRAINT `imagenes_comentario_jero_comentarios_id_foreign` FOREIGN KEY (`comentarios_id`) REFERENCES `comentarios_jero` (`id`);

--
-- Filtros para la tabla `imagenes_jeroglificos`
--
ALTER TABLE `imagenes_jeroglificos`
  ADD CONSTRAINT `imagenes_jeroglificos_jeroglifico_id_foreign` FOREIGN KEY (`jeroglifico_id`) REFERENCES `jeroglificos` (`id`);

--
-- Filtros para la tabla `jeroglificos`
--
ALTER TABLE `jeroglificos`
  ADD CONSTRAINT `jeroglificos_catalogo_id_foreign` FOREIGN KEY (`catalogo_id`) REFERENCES `catalogo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
