-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2020 a las 07:03:34
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
(55, 'A: el hombre y sus ocupaciones.', 'a-el-hombre-y-sus-ocupaciones', 'QCN7hBdjrJ', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(56, 'B: la mujer y sus ocupaciones.', 'b-la-mujer-y-sus-ocupaciones', 'vyHDVY7eQL', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(57, 'C: deidades.', 'c-deidades', 'O1BhMmmHcw', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(58, 'F: partes del cuerpo humano.', 'f-partes-del-cuerpo-humano', 'ZSEugh04Ni', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(59, 'E: mamíferos.', 'e-mamiferos', 'AW5HKjpNTa', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(60, 'F: partes del cuerpo de los mamíferos.', 'f-partes-del-cuerpo-de-los-mamiferos', 'AsMRASGUju', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(61, 'G: aves.', 'g-aves', 'YqWgELIAr3', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(62, 'H: partes del cuerpo de las aves.', 'h-partes-del-cuerpo-de-las-aves', 'dSBLsh5Ixz', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(63, 'I: anfibios, reptiles y partes de anfibios y reptiles.', 'i-anfibios-reptiles-y-partes-de-anfibios-y-reptiles', 'KgXwvZ5o6S', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(64, 'K: peces y partes de peces.', 'k-peces-y-partes-de-peces', '0PLjCZyTOi', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(65, 'L: invertebrados, otros animales.', 'l-invertebrados-otros-animales', '0i1TWkkUmf', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(66, 'M: árboles y otras plantas.', 'm-arboles-y-otras-plantas', 'TfhrfHso20', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(67, 'N: el cielo, la tierra y el agua.', 'n-el-cielo-la-tierra-y-el-agua', 'hlKGHDCY3o', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(68, 'O: edificios y partes de edificios.', 'o-edificios-y-partes-de-edificios', '1LvM5rJcg1', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(69, 'P: barcas y partes de barcas.', 'p-barcas-y-partes-de-barcas', 'vWchxOV7ig', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(70, 'Q: mobiliario.', 'q-mobiliario', 'TWkgwDNF5i', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(71, 'R: templos.', 'r-templos', '8ZPrWgONLD', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(72, 'S: coronas y cetros.', 's-coronas-y-cetros', 'uoVozENI5q', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(73, 'T: guerra y caza.', 't-guerra-y-caza', 'VSWQkoipTh', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(74, 'U: agricultura y artesanía.', 'u-agricultura-y-artesania', 'lgrcUORIRP', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(75, 'V: cuerdas y cestería.', 'v-cuerdas-y-cesteria', 'XmTFnuW9mh', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(76, 'W: vasijas de piedra y cerámica.', 'w-vasijas-de-piedra-y-ceramica', 'DEnxVtSR1W', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(77, 'X: panes y pasteles.', 'x-panes-y-pasteles', 's2mLc6CRq4', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(78, 'Y: escritura, juegos y música.', 'y-escritura-juegos-y-musica', 'VumZi5j32G', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(79, 'Z: trazos y figuras geométricas.', 'z-trazos-y-figuras-geometricas', '1GH49iI7Di', '2020-04-30 00:48:14', '2020-04-30 00:48:14'),
(80, 'Aa: jeroglíficos sin clasificar.', 'aa-jeroglificos-sin-clasificar', 'ETSvqMonfv', '2020-04-30 00:48:14', '2020-04-30 00:48:14');

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2020_07_10_043508_catalogo', 1);

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
(1, 'admin', 'admin', 'admin@admin', NULL, '$2y$10$g6QnZiMvovrwIq.g7w6LQ.nzEQohdita3Qhk5u5KmVUGd8dMWAgsy', 'administrador', 'bqsuEJjK1LRg6sROma8BY2s8FjwQvuwmGPpb288t', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;