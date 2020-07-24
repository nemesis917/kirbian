-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2020 a las 08:24:27
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
(55, 'A: el hombre y sus ocupaciones.', 'a-el-hombre-y-sus-ocupaciones', 'QCN7hBdjrJ', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(56, 'B: la mujer y sus ocupaciones.', 'b-la-mujer-y-sus-ocupaciones', 'vyHDVY7eQL', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(57, 'C: deidades.', 'c-deidades', 'O1BhMmmHcw', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(58, 'F: partes del cuerpo humano.', 'f-partes-del-cuerpo-humano', 'ZSEugh04Ni', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(59, 'E: mamíferos.', 'e-mamiferos', 'AW5HKjpNTa', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(60, 'F: partes del cuerpo de los mamíferos.', 'f-partes-del-cuerpo-de-los-mamiferos', 'AsMRASGUju', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(61, 'G: aves.', 'g-aves', 'YqWgELIAr3', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(62, 'H: partes del cuerpo de las aves.', 'h-partes-del-cuerpo-de-las-aves', 'dSBLsh5Ixz', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(63, 'I: anfibios, reptiles y partes de anfibios y reptiles.', 'i-anfibios-reptiles-y-partes-de-anfibios-y-reptiles', 'KgXwvZ5o6S', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(64, 'K: peces y partes de peces.', 'k-peces-y-partes-de-peces', '0PLjCZyTOi', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(65, 'L: invertebrados, otros animales.', 'l-invertebrados-otros-animales', '0i1TWkkUmf', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(66, 'M: árboles y otras plantas.', 'm-arboles-y-otras-plantas', 'TfhrfHso20', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(67, 'N: el cielo, la tierra y el agua.', 'n-el-cielo-la-tierra-y-el-agua', 'hlKGHDCY3o', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(68, 'O: edificios y partes de edificios.', 'o-edificios-y-partes-de-edificios', '1LvM5rJcg1', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(69, 'P: barcas y partes de barcas.', 'p-barcas-y-partes-de-barcas', 'vWchxOV7ig', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(70, 'Q: mobiliario.', 'q-mobiliario', 'TWkgwDNF5i', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(71, 'R: templos.', 'r-templos', '8ZPrWgONLD', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(72, 'S: coronas y cetros.', 's-coronas-y-cetros', 'uoVozENI5q', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(73, 'T: guerra y caza.', 't-guerra-y-caza', 'VSWQkoipTh', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(74, 'U: agricultura y artesanía.', 'u-agricultura-y-artesania', 'lgrcUORIRP', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(75, 'V: cuerdas y cestería.', 'v-cuerdas-y-cesteria', 'XmTFnuW9mh', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(76, 'W: vasijas de piedra y cerámica.', 'w-vasijas-de-piedra-y-ceramica', 'DEnxVtSR1W', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(77, 'X: panes y pasteles.', 'x-panes-y-pasteles', 's2mLc6CRq4', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(78, 'Y: escritura, juegos y música.', 'y-escritura-juegos-y-musica', 'VumZi5j32G', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(79, 'Z: trazos y figuras geométricas.', 'z-trazos-y-figuras-geometricas', '1GH49iI7Di', '2020-04-30 08:48:14', '2020-04-30 08:48:14'),
(80, 'Aa: jeroglíficos sin clasificar.', 'aa-jeroglificos-sin-clasificar', 'ETSvqMonfv', '2020-04-30 08:48:14', '2020-04-30 08:48:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios_jero`
--

CREATE TABLE `comentarios_jero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `puntuacion` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibilidad` tinyint(1) NOT NULL,
  `jeroglificos_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comentarios_jero`
--

INSERT INTO `comentarios_jero` (`id`, `comentario`, `puntuacion`, `visibilidad`, `jeroglificos_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '0', 0, 1, 2, NULL, NULL),
(2, 'labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation', '0', 0, 1, 2, NULL, NULL),
(3, 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '0', 0, 1, 3, NULL, NULL),
(4, 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '0', 0, 1, 2, NULL, NULL),
(5, 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,', '0', 0, 1, 1, NULL, NULL);

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
(1, 'Placenta (?)(variante de Y24(?)). Antiguamente interpretada como la placenta de un animal, más probablemente una especie de canasta (?). El cordón umbilical era cortado con un cuchillo especial después de la expulsión de la placenta, ambos tenían asociaciones mágicas y se creía que estaban investidos de un alter ego espiritual o doble de la criatura. La placenta a menudo era enterrada en la casa o arrojada al Nilo para asegurar la supervivencia del niño, mientras que el cordón se dejaba secar y se conservaba para acompañar al individuo incluso a la tumba. La madre mordía su propia placenta ya que le otorgaba un gran valor simbólico (1. Llagostera E. El secreto de la felicidad. Muy Especial. 1998;(33):77-79. 2. Strouhal E. La vida en el antiguo Egipto. 1ª edición. Barcelona: Editorial Folio; 1994.).', 1, '2020-07-24 09:49:05', '2020-07-24 09:49:05'),
(2, 'Variante de Aa1. Similar con el signo Y24 (?), ortografía simplificada de muchos signos circulares (N5, N9, N10, O50, X06, Aa1)', 2, '2020-07-24 09:59:18', '2020-07-24 09:59:18'),
(3, 'Sustituto de varios signos: arcilla(N32), paquete de producto(V32), vendaje, embalsamamiento, cubierta(V38), granito (rojo), Elefantina(W7), madera de coníferas de origen extranjero(W41)', 3, '2020-07-24 10:05:55', '2020-07-24 10:05:55'),
(4, 'Pústula supurativa (variante Aa2).', 4, '2020-07-24 10:08:23', '2020-07-24 10:08:23'),
(5, 'Pústula supurativa (variante de Aa2).', 5, '2020-07-24 10:11:00', '2020-07-24 10:11:00'),
(6, 'Copa utilizada como lámpara (variante de W10a).', 6, '2020-07-24 10:13:07', '2020-07-24 10:13:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_comentario_jero`
--

CREATE TABLE `imagenes_comentario_jero` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ruta_img_jero` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visibilidad` tinyint(1) NOT NULL,
  `jeroglificos_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_comentario_jero`
--

INSERT INTO `imagenes_comentario_jero` (`id`, `ruta_img_jero`, `visibilidad`, `jeroglificos_id`, `users_id`, `created_at`, `updated_at`) VALUES
(1, 'imagenes/comentario/1.jpg', 0, 1, 2, NULL, NULL),
(2, 'imagenes/comentario/2.jpg', 0, 1, 2, NULL, NULL),
(3, 'imagenes/comentario/3.jpg', 0, 1, 1, NULL, NULL),
(4, 'imagenes/comentario/4.jpg', 0, 1, 3, NULL, NULL),
(5, 'imagenes/comentario/5.jpg', 0, 1, 1, NULL, NULL),
(6, 'imagenes/comentario/6.jpg', 0, 1, 2, NULL, NULL),
(7, 'imagenes/comentario/7.jpg', 0, 1, 1, NULL, NULL);

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
(1, 'imagenes/catalogo/80/471-jero-80-801.png', '1', 1, '2020-07-24 09:49:05', '2020-07-24 09:49:05'),
(2, 'imagenes/catalogo/80/750-jero-80-547.png', '2', 1, '2020-07-24 09:49:05', '2020-07-24 09:49:05'),
(3, 'imagenes/catalogo/80/649-jero-80-554.png', '3', 1, '2020-07-24 09:49:05', '2020-07-24 09:49:05'),
(4, 'imagenes/catalogo/80/299-jero-80-935.png', '1', 2, '2020-07-24 09:59:18', '2020-07-24 09:59:18'),
(5, 'imagenes/catalogo/80/422-jero-80-480.png', '2', 2, '2020-07-24 09:59:18', '2020-07-24 09:59:18'),
(6, 'imagenes/catalogo/80/456-jero-80-576.png', '3', 2, '2020-07-24 09:59:18', '2020-07-24 09:59:18'),
(7, 'imagenes/catalogo/80/81-jero-80-500.png', '1', 3, '2020-07-24 10:05:55', '2020-07-24 10:05:55'),
(8, 'imagenes/catalogo/80/791-jero-80-586.png', '2', 3, '2020-07-24 10:05:55', '2020-07-24 10:05:55'),
(9, 'imagenes/catalogo/80/186-jero-80-937.png', '3', 3, '2020-07-24 10:05:55', '2020-07-24 10:05:55'),
(10, 'imagenes/catalogo/80/670-jero-80-934.png', '1', 4, '2020-07-24 10:08:24', '2020-07-24 10:08:24'),
(11, 'imagenes/catalogo/80/912-jero-80-288.png', '2', 4, '2020-07-24 10:08:24', '2020-07-24 10:08:24'),
(12, 'imagenes/catalogo/80/450-jero-80-515.png', '3', 4, '2020-07-24 10:08:24', '2020-07-24 10:08:24'),
(13, 'imagenes/catalogo/80/101-jero-80-82.png', '1', 5, '2020-07-24 10:11:00', '2020-07-24 10:11:00'),
(14, 'imagenes/catalogo/80/292-jero-80-921.png', '2', 5, '2020-07-24 10:11:00', '2020-07-24 10:11:00'),
(15, 'imagenes/catalogo/80/660-jero-80-172.png', '3', 5, '2020-07-24 10:11:00', '2020-07-24 10:11:00'),
(16, 'imagenes/catalogo/80/464-jero-80-46.png', '1', 6, '2020-07-24 10:13:07', '2020-07-24 10:13:07'),
(17, 'imagenes/catalogo/80/991-jero-80-425.png', '2', 6, '2020-07-24 10:13:07', '2020-07-24 10:13:07'),
(18, 'system/no-foto.jpg', '3', 6, '2020-07-24 10:13:07', '2020-07-24 10:13:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jeroglificos`
--

CREATE TABLE `jeroglificos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gandiner` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transliteracion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sentido` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_usuario` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci,
  `catalogo_id` bigint(20) UNSIGNED NOT NULL,
  `visibilidad` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `jeroglificos`
--

INSERT INTO `jeroglificos` (`id`, `gandiner`, `transliteracion`, `sentido`, `nombre_usuario`, `comentario`, `catalogo_id`, `visibilidad`, `created_at`, `updated_at`) VALUES
(1, 'Aa1', 'x', '-', 'admin admin', NULL, 80, 1, '2020-07-24 09:49:05', '2020-07-24 09:49:05'),
(2, 'Aa1a', 'x', '-', 'admin admin', NULL, 80, 1, '2020-07-24 09:59:18', '2020-07-24 09:59:18'),
(3, 'Aa2', 'Xpw / gA / Hsb', 'Enfermedad, estados del cuerpo, hinchado, olor, excremento, sucio, 1/4 ...', 'admin admin', NULL, 80, 1, '2020-07-24 10:05:55', '2020-07-24 10:05:55'),
(4, 'Aa3', 'Hsb', 'Secreciones corporales, olor.', 'admin admin', NULL, 80, 1, '2020-07-24 10:08:23', '2020-07-24 10:08:23'),
(5, 'Aa3', 'Hbs', 'Secreciones corporales, olor', 'admin admin', NULL, 80, 1, '2020-07-24 10:11:00', '2020-07-24 10:11:00'),
(6, 'Aa4', 'iab / sxw / wsx / ab', '-', 'admin admin', NULL, 80, 1, '2020-07-24 10:13:07', '2020-07-24 10:13:07');

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
(136, '2014_10_12_000000_create_users_table', 1),
(137, '2014_10_12_100000_create_password_resets_table', 1),
(138, '2020_07_10_043508_catalogo', 1),
(139, '2020_07_11_044749_jeroglificos', 1),
(140, '2020_07_11_054259_comentarios_jero', 1);

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
  `level` enum('administrador','moderador','usuario') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'usuario',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin', NULL, '$2y$10$g6QnZiMvovrwIq.g7w6LQ.nzEQohdita3Qhk5u5KmVUGd8dMWAgsy', 'administrador', 'KMUMe4nWFezFv4xbCdEttRP3P2346ROqHFTe3GuC8zHtgyQI5Ls8DLbNk5hU', NULL, NULL),
(2, 'usuario', 'usuario', 'usuario@usuario', NULL, '$2y$10$g6QnZiMvovrwIq.g7w6LQ.nzEQohdita3Qhk5u5KmVUGd8dMWAgsy', 'usuario', NULL, NULL, NULL),
(3, 'moderador', 'moderador', 'moderador@moderador', NULL, '$2y$10$g6QnZiMvovrwIq.g7w6LQ.nzEQohdita3Qhk5u5KmVUGd8dMWAgsy', 'moderador', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_catalogo_jeroglifico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_catalogo_jeroglifico` (
`id` bigint(20) unsigned
,`transliteracion` varchar(200)
,`gandiner` varchar(12)
,`ruta_imagen` varchar(100)
,`visibilidad` tinyint(1)
,`catalogo_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_ver_comentarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_ver_comentarios` (
`id` bigint(20) unsigned
,`comentario` text
,`puntuacion` char(1)
,`visibilidad` tinyint(1)
,`jeroglificos_id` bigint(20) unsigned
,`nombre` varchar(61)
,`correo` varchar(120)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_ver_img_paleografica`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_ver_img_paleografica` (
`id` bigint(20) unsigned
,`ruta_img_jero` varchar(250)
,`visibilidad` tinyint(1)
,`jeroglificos_id` bigint(20) unsigned
,`nombre` varchar(61)
,`correo` varchar(120)
);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `vw_ver_jeroglifico`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `vw_ver_jeroglifico` (
`id` bigint(20) unsigned
,`transliteracion` varchar(200)
,`gandiner` varchar(12)
,`descripcion` text
,`significado` text
,`comentario` text
,`catalogo_id` bigint(20) unsigned
);

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_catalogo_jeroglifico`
--
DROP TABLE IF EXISTS `vw_catalogo_jeroglifico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_catalogo_jeroglifico`  AS  select `jeroglificos`.`id` AS `id`,`jeroglificos`.`transliteracion` AS `transliteracion`,`jeroglificos`.`gandiner` AS `gandiner`,`imagenes_jeroglificos`.`ruta_imagen` AS `ruta_imagen`,`jeroglificos`.`visibilidad` AS `visibilidad`,`jeroglificos`.`catalogo_id` AS `catalogo_id` from ((`jeroglificos` left join `descripcion` on((`descripcion`.`jeroglifico_id` = `jeroglificos`.`id`))) left join `imagenes_jeroglificos` on((`imagenes_jeroglificos`.`jeroglifico_id` = `jeroglificos`.`id`))) where ((`imagenes_jeroglificos`.`referencia` = '1') and (`jeroglificos`.`visibilidad` = 1)) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_ver_comentarios`
--
DROP TABLE IF EXISTS `vw_ver_comentarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ver_comentarios`  AS  select `comentarios_jero`.`id` AS `id`,`comentarios_jero`.`comentario` AS `comentario`,`comentarios_jero`.`puntuacion` AS `puntuacion`,`comentarios_jero`.`visibilidad` AS `visibilidad`,`comentarios_jero`.`jeroglificos_id` AS `jeroglificos_id`,concat_ws(' ',`users`.`name`,`users`.`lastname`) AS `nombre`,`users`.`email` AS `correo` from (`comentarios_jero` left join `users` on((`users`.`id` = `comentarios_jero`.`users_id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_ver_img_paleografica`
--
DROP TABLE IF EXISTS `vw_ver_img_paleografica`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ver_img_paleografica`  AS  select `imagenes_comentario_jero`.`id` AS `id`,`imagenes_comentario_jero`.`ruta_img_jero` AS `ruta_img_jero`,`imagenes_comentario_jero`.`visibilidad` AS `visibilidad`,`imagenes_comentario_jero`.`jeroglificos_id` AS `jeroglificos_id`,concat_ws(' ',`users`.`name`,`users`.`lastname`) AS `nombre`,`users`.`email` AS `correo` from (`imagenes_comentario_jero` left join `users` on((`users`.`id` = `imagenes_comentario_jero`.`users_id`))) ;

-- --------------------------------------------------------

--
-- Estructura para la vista `vw_ver_jeroglifico`
--
DROP TABLE IF EXISTS `vw_ver_jeroglifico`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_ver_jeroglifico`  AS  select `jeroglificos`.`id` AS `id`,`jeroglificos`.`transliteracion` AS `transliteracion`,`jeroglificos`.`gandiner` AS `gandiner`,`descripcion`.`descripcion` AS `descripcion`,`jeroglificos`.`sentido` AS `significado`,`jeroglificos`.`comentario` AS `comentario`,`jeroglificos`.`catalogo_id` AS `catalogo_id` from (`jeroglificos` left join `descripcion` on((`descripcion`.`jeroglifico_id` = `jeroglificos`.`id`))) ;

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
  ADD KEY `comentarios_jero_jeroglificos_id_foreign` (`jeroglificos_id`),
  ADD KEY `comentarios_jero_users_id_foreign` (`users_id`);

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
  ADD KEY `imagenes_comentario_jero_jeroglificos_id_foreign` (`jeroglificos_id`),
  ADD KEY `imagenes_comentario_jero_users_id_foreign` (`users_id`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `imagenes_comentario_jero`
--
ALTER TABLE `imagenes_comentario_jero`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `imagenes_jeroglificos`
--
ALTER TABLE `imagenes_jeroglificos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `jeroglificos`
--
ALTER TABLE `jeroglificos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios_jero`
--
ALTER TABLE `comentarios_jero`
  ADD CONSTRAINT `comentarios_jero_jeroglificos_id_foreign` FOREIGN KEY (`jeroglificos_id`) REFERENCES `jeroglificos` (`id`),
  ADD CONSTRAINT `comentarios_jero_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD CONSTRAINT `descripcion_jeroglifico_id_foreign` FOREIGN KEY (`jeroglifico_id`) REFERENCES `jeroglificos` (`id`);

--
-- Filtros para la tabla `imagenes_comentario_jero`
--
ALTER TABLE `imagenes_comentario_jero`
  ADD CONSTRAINT `imagenes_comentario_jero_jeroglificos_id_foreign` FOREIGN KEY (`jeroglificos_id`) REFERENCES `jeroglificos` (`id`),
  ADD CONSTRAINT `imagenes_comentario_jero_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

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
