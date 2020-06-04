-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-11-2019 a las 23:32:00
-- Versión del servidor: 10.3.18-MariaDB-cll-lve
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `amoblamientosrin_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `contenido`, `imagen`, `orden`, `created_at`, `updated_at`) VALUES
(1, '<p>Materiales resistentes<br />\r\ny de larga vida &uacute;til</p>', 'imagenes/caracteristicas/8YMHQRwcUtjjf1dEr1eAxdbBedXsnsJZyb5uw8Za.png', 'aa', '2019-06-06 14:26:52', '2019-06-06 14:26:52'),
(2, '<p>Confort y calidad<br />\r\ngarantizados</p>', 'imagenes/caracteristicas/yxq8AzwBQFY8QnAPg5kJ61zsRZwLTCrVvK0ZJFxv.png', 'ab', '2019-06-06 14:27:38', '2019-06-06 14:27:38'),
(3, '<p>Detalles y terminaciones<br />\r\nde alta calidad</p>', 'imagenes/caracteristicas/f0yqjpb171k8DzmqZjjC12wShFUChX6fv2yzDRne.png', 'ac', '2019-06-06 14:28:48', '2019-06-06 14:28:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `direccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `direccion`, `telefono`, `email`, `terminos`, `created_at`, `updated_at`) VALUES
(1, '{\"calle\":\"Colectora Monse\\u00f1or Rodolfo Bufano\",\"altura\":\"3057\",\"localidad\":\"San Justo\",\"provincia\":\"Buenos Aires\",\"pais\":null}', '[\"011 4484-7667\",\"011 4484-9229\"]', '[{\"seccion\":\"principal\",\"email\":\"info@rinamuebles.com.ar\"}]', '<p>Estos son los terminos de la empresa:&nbsp;</p>', NULL, '2019-06-18 19:04:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `titulo`, `contenido`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 'Nuestra Historia', '<p><span style=\"color:#f39c12\"><span style=\"font-size:20px\">Somos una empresa dedicada al dise&ntilde;o, fabricaci&oacute;n e importaci&oacute;n de muebles contempor&aacute;neos con m&aacute;s de 40 a&ntilde;os en el mercado Argentino.</span></span></p>\r\n\r\n<p><span style=\"color:#f39c12\"><span style=\"font-size:20px\">Estamos ubicados en la localidad de San Justo, Provincia de Buenos Aires. Contamos con un sal&oacute;n de ventas exclusivo donde exhibimos nuestra colecci&oacute;n.</span></span></p>\r\n\r\n<p><span style=\"color:#f39c12\"><span style=\"font-size:20px\">Disponemos de un amplio cat&aacute;logo de productos para equipar el hogar o espacios de trabajo.</span></span></p>\r\n\r\n<p>&nbsp;</p>', NULL, NULL, '2019-06-22 01:47:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` int(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id`, `nombre`, `imagen`, `orden`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Sillones', 'imagenes/familia/aGoTdhc8YgMznGopv3Iy8TeovfsHjBqdeFNh5y51.jpeg', 'aa', 1, '2019-06-05 22:25:05', '2019-06-05 22:55:39'),
(2, 'Colchones & Sommiers', 'imagenes/familia/31u9ok8KVKOwFwqdxlGv12IxhcH7aCkzOR3SvPUi.jpeg', 'ab', 0, '2019-06-05 22:46:27', '2019-08-21 16:56:34'),
(3, 'Juegos de living', 'imagenes/familia/89kI8EV5rPyg5GxWt7tlurPYr2yTZAKT2WFiERpp.jpeg', 'ac', 0, '2019-06-05 22:50:43', '2019-08-21 18:14:38'),
(4, 'Mesas y sillas', 'imagenes/familia/IKoMzeermDdjKC1ABcKdsBJcwbfs8DwCgAIJBgAR.jpeg', 'ad', 0, '2019-06-05 22:51:32', '2019-08-21 18:14:43'),
(5, 'Respaldos de camas', 'imagenes/familia/FfROOGzSHsaNFRs2lFjDioODHuaBDj7kP0YYd60r.jpeg', 'ae', 0, '2019-06-05 22:52:02', '2019-08-21 18:14:54'),
(6, 'Mesas ratonas', 'imagenes/familia/8aszdOdxwqcdl8qqKc05roAlkrd8IRjuxYf9BR4B.jpeg', 'af', 0, '2019-06-05 22:52:42', '2019-08-21 18:15:00'),
(7, 'Cómodas', 'imagenes/familia/zbtMr8CZvX04vBzyArkVLXv6M15W6lqnrvJUG4Mn.jpeg', 'ag', 0, '2019-06-05 22:53:22', '2019-08-21 18:15:05'),
(8, 'Racks de Tv', 'imagenes/familia/ppDO6ZswXHGGbpZCrgFxj051oInIZ4FM8pDzHkZF.jpeg', 'ah', 1, '2019-06-05 22:53:56', '2019-06-19 16:11:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `home`
--

CREATE TABLE `home` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titulo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `home`
--

INSERT INTO `home` (`id`, `titulo`, `contenido`, `imagen`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Nuestros productos', '<p><span style=\"color:#e67e22\"><span style=\"font-size:20px\">Todos nuestros&nbsp;productos se encuentran fabricados&nbsp;con madera Saligna de 1&acute; pulgada, seca y estacionada</span></span></p>\r\n\r\n<p><span style=\"color:#e67e22\"><span style=\"font-size:20px\">Esqueletos armados con tornillos de acero y cinchas de goma</span></span></p>\r\n\r\n<p><span style=\"color:#e67e22\"><span style=\"font-size:20px\">Tapizamos con telas A ELECCION . Panas, Gobelinos, Jackares, Linos, Chenilles, etc</span></span></p>\r\n\r\n<p><span style=\"color:#e67e22\"><span style=\"font-size:20px\">Stock permanente con entrega inmediata</span></span></p>\r\n\r\n<p><span style=\"font-size:20px\"><span style=\"color:#e67e22\">Garantia de fabrica 10 a&ntilde;os!!</span></span></p>', 'imagenes/home/WbETM0Fe9m65OVln3Mvkkw2bcOgYYUSUddr3p4Rt.jpeg', 'producto', 'aa', NULL, '2019-10-30 21:23:38'),
(2, 'Somos fabricantes', '<p><span style=\"color:#2980b9\"><span style=\"font-size:22px\">Lo invitamos a visitar nuestro sal&oacute;n de ventas ubicado&nbsp;en la localidad de San Justo, Provincia de Buenos Aires.</span></span></p>\r\n\r\n<p><span style=\"color:#2980b9\"><span style=\"font-size:22px\">Disponemos de un amplio cat&aacute;logo de productos para equipar el hogar o espacio de trabajo. Somos especialistas en juegos de living.</span></span></p>', 'imagenes/home/5I0O5LzyEKfIH7uQfvXelTwQq6nY1h0RhuRWiY10.jpeg', 'empresa', 'aa', NULL, '2019-06-22 01:46:14'),
(3, 'Desarrollos a Medida', '<p><span style=\"color:#2980b9\"><span style=\"font-size:20px\">Dise&ntilde;amos y fabricamos juegos de living&nbsp; adaptados a tus necesidades, gustos y espacios. Consult&aacute; con nuestro equipo de profesionales para mayor informaci&oacute;n.</span></span></p>', 'imagenes/home/qdlMFq0B5NrXNCK6P8zdFO8Ql7aL7rBkKKhv4Yt0.png', 'desarrollo', 'aa', NULL, '2019-06-22 01:45:02'),
(4, 'Ofertas', '<p><span style=\"color:#e74c3c\"><span style=\"font-size:22px\">Ofertas diarias y permanentes en nuestro showroon y redes sociales</span></span></p>', 'imagenes/home/a29USrFGQN6gJeY0BDlwNImd0kz754sK9E5vTFq3.jpeg', 'amoblamiento', 'aa', NULL, '2019-06-22 01:43:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `logos`
--

INSERT INTO `logos` (`id`, `imagen`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'imagenes/logo/r92mm8zcCJe6w5b2u2lsgHbILVaKoxPRDOr6kjU2.png', 'header', NULL, '2019-06-06 18:25:04'),
(2, 'imagenes/logo/mhGablq3eFctcdit4TDPN9VGwccNaf1I5ejffYEV.png', 'footer', NULL, '2019-06-06 18:25:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `metadatos`
--

CREATE TABLE `metadatos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `metadatos`
--

INSERT INTO `metadatos` (`id`, `keyword`, `descripcion`, `seccion`, `created_at`, `updated_at`) VALUES
(1, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'home', NULL, '2019-06-12 17:41:56'),
(2, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'empresa', NULL, '2019-06-06 18:07:05'),
(3, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'producto', NULL, '2019-06-06 18:07:11'),
(4, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'ambientes', NULL, '2019-06-06 18:07:26'),
(5, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'presupuesto', NULL, '2019-06-06 18:07:33'),
(6, 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'Muebles, Rina Amoblamientos, ambientes, sillas, mesas', 'contacto', NULL, '2019-06-06 18:07:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_05_03_123418_create_logos_table', 1),
(4, '2019_05_03_123429_create_sliders_table', 1),
(5, '2019_05_03_123440_create_metadatos_table', 1),
(6, '2019_05_03_123621_create_redes_table', 1),
(7, '2019_05_03_123629_create_datos_table', 1),
(8, '2019_06_05_144158_create_home_table', 1),
(9, '2019_06_05_144237_create_empresa_table', 1),
(10, '2019_06_05_144247_create_familias_table', 1),
(11, '2019_06_05_144347_create_caracteristicas_table', 1),
(12, '2019_06_05_144350_create_productos_table', 1),
(13, '2019_06_05_144439_create_producto_relacionados_table', 1),
(14, '2019_06_05_144454_create_producto_imagenes_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caracteristicas` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_superior` bigint(20) UNSIGNED DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `contenido`, `seccion`, `caracteristicas`, `id_superior`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'Sofía', '<ul>\r\n	<li>Sofia es un sillon pensado para lugares amplios y de alto transito por su solidez</li>\r\n	<li>Comodo &nbsp;respaldo que permite el apoyo de &nbsp;espalda y cabeza en su totalidad</li>\r\n	<li>Almohadones de placa soft de alta densidad o vellon siliconado. A ELECCION</li>\r\n	<li>Apoya brazos ancho que marcan un dise&ntilde;o fuerte&nbsp;y robusto</li>\r\n	<li>Medidas:</li>\r\n	<li>&nbsp;</li>\r\n</ul>', 'producto', '1,2,3', 1, 'bc', '2019-06-06 16:24:50', '2019-10-30 21:12:18'),
(5, 'Rinconeros', '<ul>\r\n	<li>Rinconeros es una opcion comoda&nbsp; y moderna&nbsp;&nbsp;con chaise longue&nbsp;adaptable para ambos lados</li>\r\n	<li>Almohadones realizados en placa soft de alta densidad o vellon siliconado lisos o capitone</li>\r\n	<li>Ideal para todo tipo de ambientes</li>\r\n	<li>Medidas:</li>\r\n	<li>&nbsp;2,50 x 2,20</li>\r\n</ul>', 'producto', '1,2,3', 1, 'ae', '2019-06-06 16:28:33', '2019-10-30 21:10:33'),
(9, 'Espacio Minimalista', '<p><span style=\"color:#e74c3c\"><span style=\"font-size:22px\">Lineas rectas y simples para desarrollar tu espacio moderno, amplio y luminoso</span></span></p>', 'ambiente', NULL, NULL, 'aa', '2019-06-06 17:53:20', '2019-06-21 19:51:59'),
(10, 'Máxima Funcionalidad', '<p><span style=\"color:#e74c3c\"><span style=\"font-size:22px\">Adaptamos el dise&ntilde;o de acuerdo a tus necesidades</span></span></p>', 'ambiente', NULL, NULL, 'ab', '2019-06-06 17:56:01', '2019-06-22 01:48:53'),
(13, 'Espacio Reducidos', '<p><span style=\"color:#e74c3c\"><span style=\"font-size:22px\">Linea slim para espacios peque&ntilde;os</span></span></p>', 'ambiente', NULL, NULL, 'ae', '2019-06-06 17:59:36', '2019-06-22 01:49:08'),
(28, 'Martin', '<ul>\r\n	<li>Martin&nbsp; esta pensado&nbsp;&nbsp;para ambientes clasicos y reducidos. Por su dise&ntilde;o alto permite el apoyo total de la cabeza. Ideal para consultorios&nbsp;</li>\r\n	<li>Medidas:</li>\r\n	<li>2 cpos. 1,50&nbsp; x&nbsp; 0,90</li>\r\n	<li>3 cpos. 1,90&nbsp; x&nbsp; 0,90</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>', 'producto', NULL, 1, 'ca', '2019-06-21 03:52:56', '2019-10-30 21:48:59'),
(31, 'Giuliano', '<p>Giuliano es un sillon de lineas clasicas&nbsp; pensado&nbsp;&nbsp;para la familia o&nbsp;lugares amplios.&nbsp;Con su respaldo alto permite apoyar comodamente la cabeza. Enfundado en una sola pieza de tela.</p>\r\n\r\n<ul>\r\n	<li>Medidas:&nbsp;</li>\r\n	<li>2 cpos&nbsp; 1,60&nbsp;x 0,85&nbsp;</li>\r\n	<li>3 cpos&nbsp; 2,15 x 0,85</li>\r\n	<li>Esqueleto &nbsp;fabricado con madera Saligna&nbsp;&nbsp;de 1 pulgada totalmente reforzado con tornillos de acero y cinchas de goma</li>\r\n	<li>Almohadones con placa soft entera o vellon siliconado</li>\r\n	<li>Tapizados en simil cuero, Gobelinos, Jackares ,Chenille o Pana. A ELECCION</li>\r\n</ul>', 'producto', '1,2,3', 1, 'aa', '2019-07-22 20:30:10', '2019-10-30 21:07:08'),
(32, 'Bajos', NULL, 'producto', NULL, 8, 'aa', '2019-08-05 23:43:36', '2019-09-06 17:24:19'),
(33, 'Cubic', '<ul>\r\n	<li>Cubic es un sofa&nbsp; con un dise&ntilde;o de lineas rectas &nbsp;e innovadoras con un apoya brazos ancho de 20 cm haciendolo mas robusto</li>\r\n	<li>Pensado para todo tipo de ambientes familiares y comerciales</li>\r\n	<li>Permite diversos cambios en su altura, en el&nbsp;&nbsp;respaldo y o almohadon</li>\r\n	<li>Con opcion a patas de metal para hacerlo totalmente moderno</li>\r\n	<li>medidas:</li>\r\n	<li>2 cpos&nbsp; 1,60&nbsp; x&nbsp; 0,90</li>\r\n	<li>3 cpos&nbsp; 2,20&nbsp; x&nbsp; 0,90</li>\r\n</ul>', 'producto', '1,2,3', 1, 'aa', '2019-09-04 22:40:45', '2019-10-30 21:08:31'),
(34, 'Altos', NULL, 'producto', NULL, 8, NULL, '2019-09-06 17:29:36', '2019-09-06 17:29:36'),
(35, 'Rack con cajones', NULL, 'producto', NULL, 8, NULL, '2019-09-06 22:02:23', '2019-09-09 20:46:11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_imagenes`
--

CREATE TABLE `producto_imagenes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_imagenes`
--

INSERT INTO `producto_imagenes` (`id`, `imagen`, `id_producto`, `orden`, `created_at`, `updated_at`) VALUES
(175, 'imagenes/Producto/JWsAF3NS7CL5nBnyHsQX8K6B945N2O8O24tTurkK.jpeg', 10, 'aa', '2019-06-22 01:48:53', '2019-06-22 01:48:53'),
(176, 'imagenes/Producto/yVudkm0AQ88b3aWIcqkv0C9SHTwSebnsZSzxDhMm.jpeg', 13, 'null', '2019-06-22 01:49:08', '2019-06-22 01:49:08'),
(217, 'imagenes/Producto/iUcdLVI4uTbHczFDIiU2b3K0jXUjzKZJMCdoYaCU.jpeg', 32, 'aa', '2019-09-06 17:24:19', '2019-09-06 17:24:19'),
(226, 'imagenes/Producto/nNeqDx6OQEDjZi6K3TpTzIgFUqiLOmejgmMfiHgo.jpeg', 34, 'aa', '2019-09-06 22:07:33', '2019-09-06 22:07:33'),
(227, 'imagenes/Producto/J7vGKCAXR15z2qgeS1IqgVtWL7KjSBEdFnnoReGA.jpeg', 34, 'ab', '2019-09-06 22:07:33', '2019-09-06 22:07:33'),
(250, 'imagenes/Producto/KcEIEPQB6WB3jIbaT06rXn885b4f0CitcyMZpBDx.jpeg', 35, 'aa', '2019-09-09 20:46:11', '2019-09-09 20:46:11'),
(334, 'imagenes/Producto/w3dII0mBMCH2ikP6fqlbMDXM1cQiUzUfYG48rkd8.jpeg', 31, 'aa', '2019-10-30 21:07:08', '2019-10-30 21:07:08'),
(335, 'imagenes/Producto/KYS1qlNksncey7wBVW1Z9Yb27gugWE9VeQduG0NK.jpeg', 33, 'AA', '2019-10-30 21:08:31', '2019-10-30 21:08:31'),
(336, 'imagenes/Producto/0xMdJ0tu5AumZ5NnBQ0B5tL2hcpVMwAJXB4hjspj.jpeg', 33, 'AB', '2019-10-30 21:08:31', '2019-10-30 21:08:31'),
(337, 'imagenes/Producto/SFH8tozFoSLs2JlbrvWOCx1HMNM9vvHTXc5BfAIS.jpeg', 33, 'AC', '2019-10-30 21:08:31', '2019-10-30 21:08:31'),
(338, 'imagenes/Producto/XduZDx6OkLVW54X8ZsUEfu2e3yoURIPkbX8BZVgi.jpeg', 5, 'null', '2019-10-30 21:10:33', '2019-10-30 21:10:33'),
(339, 'imagenes/Producto/51WIcq9YpAPW81bd47PiyPAjixU8xnakIUsMmsDw.jpeg', 5, 'null', '2019-10-30 21:10:33', '2019-10-30 21:10:33'),
(340, 'imagenes/Producto/HIQpdVj3uukhiLx0OMVPRJGDLLfrpSHVcOHS3WUE.jpeg', 1, 'bc', '2019-10-30 21:12:18', '2019-10-30 21:12:18'),
(341, 'imagenes/Producto/jpq6cwnpYmAhKxMf4Ypf8WZpOFkT8HtcIJK6rwiK.jpeg', 1, 'bd', '2019-10-30 21:12:18', '2019-10-30 21:12:18'),
(342, 'imagenes/Producto/h7nEMwpnybKE6WRc6EFFGE4DQuG7hGtkdTDGadeD.jpeg', 1, 'be', '2019-10-30 21:12:18', '2019-10-30 21:12:18'),
(349, 'imagenes/Producto/UslN4u7GRBH3HGrRR2Fu5f6hwI3eAG5EWJb1Ju32.jpeg', 28, 'aa', '2019-10-30 21:48:59', '2019-10-30 21:48:59'),
(350, 'imagenes/Producto/YoKnOkOoyXY3YFd4WpOATkfa3vZ2FNzPXWB5age7.jpeg', 28, 'ab', '2019-10-30 21:48:59', '2019-10-30 21:48:59'),
(351, 'imagenes/Producto/M5GcAknZ9AUyEtL2NQzqN4VIjKggXsuPXRf9gtsO.jpeg', 28, 'ac', '2019-10-30 21:48:59', '2019-10-30 21:48:59'),
(352, 'imagenes/Producto/7ZvJtOoZVizLeoUqauOY8I5GV6M33AUibY9zYyGz.jpeg', 28, 'ad', '2019-10-30 21:48:59', '2019-10-30 21:48:59'),
(353, 'imagenes/Producto/zg8RvcBMz9tum4dRdgZvQfj0aXu8OlAZEIJIrXkZ.jpeg', 28, 'ae', '2019-10-30 21:48:59', '2019-10-30 21:48:59'),
(354, 'imagenes/Producto/p7DiHhpTvFttkJ2A6NNQZRk3j01SKF8E3f0i1BwF.jpeg', 28, 'af', '2019-10-30 21:48:59', '2019-10-30 21:48:59');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto_relacionados`
--

CREATE TABLE `producto_relacionados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED DEFAULT NULL,
  `id_relacionado` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto_relacionados`
--

INSERT INTO `producto_relacionados` (`id`, `id_producto`, `id_relacionado`, `created_at`, `updated_at`) VALUES
(216, 9, 1, NULL, NULL),
(218, 9, 5, NULL, NULL),
(233, 10, 5, NULL, NULL),
(234, 10, 1, NULL, NULL),
(237, 13, 1, NULL, NULL),
(312, 31, 28, NULL, NULL),
(313, 33, 5, NULL, NULL),
(314, 5, 1, NULL, NULL),
(315, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redes`
--

CREATE TABLE `redes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `redes`
--

INSERT INTO `redes` (`id`, `nombre`, `url`, `created_at`, `updated_at`) VALUES
(1, NULL, 'https://es-la.facebook.com/amoblamientosrina', NULL, '2019-06-21 23:00:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contenido` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seccion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orden` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sliders`
--

INSERT INTO `sliders` (`id`, `imagen`, `contenido`, `seccion`, `orden`, `created_at`, `updated_at`) VALUES
(1, 'imagenes/slider/vWVuNgJEQumnAoTlQ3BjZxASvfT64l36PcUJ6wXa.jpeg', '<p><strong>Mesas ratonas y de tv</strong><br />\r\n&nbsp;</p>', 'home', 'bb', '2019-06-05 21:17:02', '2019-06-21 03:07:26'),
(2, 'imagenes/slider/cJSeg2gFQ2kLsiTC552sdkcYogrfaCqso9YX19wD.jpeg', '<p><span style=\"font-size:36px\"><span style=\"color:#c0392b\"><strong>Descubr&iacute;&nbsp;nuevos espacios</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:28px\"><span style=\"color:#f39c12\">Dedicados al dise&ntilde;o,&nbsp;fabricaci&oacute;n y venta de mobiliario.</span></span><br />\r\n&nbsp;</p>', 'empresa', 'aa', '2019-06-05 21:27:59', '2019-06-21 04:37:23'),
(3, 'imagenes/slider/183g2CqBsOZnEFtsOL7um09Qg4a3qoA6pdmQ7zED.jpeg', '<p><span style=\"font-size:36px\"><span style=\"color:#f39c12\">Amplia gama de sillones</span></span></p>\r\n\r\n<p><span style=\"font-size:36px\"><span style=\"color:#f39c12\">Stock permanente</span></span></p>', 'empresa', 'ab', '2019-06-18 23:47:08', '2019-06-22 01:31:47'),
(4, 'imagenes/slider/C23Ub7DPWxYnMnCCvVwkZ2IEapwzs29BmYBWCnK4.jpeg', '<p><strong>Juegos de living</strong><br />\r\n&nbsp;</p>', 'home', 'aa', '2019-06-18 23:59:36', '2019-06-21 19:09:49'),
(5, 'imagenes/slider/UBUt1lRNjmGkaJpQ8wr3zfEMXHKrVYBeE2cGId1l.jpeg', '<p><strong>Mesas,&nbsp;Sillas y Rack</strong></p>', 'home', 'cc', '2019-06-19 00:03:09', '2019-10-30 21:26:52'),
(6, 'imagenes/slider/tLksJNfCjbhskgKbhqmc5aBEyyaF8HTyJzFg6Ke6.jpeg', '<p><span style=\"font-size:36px\"><span style=\"color:#f39c12\">Dise&ntilde;os realizados a medida</span></span></p>', 'empresa', 'cc', '2019-06-19 16:19:51', '2019-06-21 20:04:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` int(11) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `isAdmin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pablo Cabañuz', 'pablo', NULL, NULL, 1, '$2y$10$UzrHag7kAUWnAvXHPj2K8uAwodury6Dq7aRrK1Ix6BWFAIMfwY8US', 'rrZac9M5IiSuT2cPKuOGmjlCJ5nntT9ORFIj6i5AYUd4rVFiXCK6vreHyOBk', NULL, '2019-05-27 16:41:05'),
(4, 'giuliano', 'Giuliano', NULL, NULL, 1, '$2y$10$aHZmgqB.ZJ1x3WuUbDSGeOr.3CEFFWwWIDPPZyQ8aogk8Ssfjz0/C', 'HfrviWPbvxsZsTdIXjngNcqy84pw7z7faQZRfu5r6nxlaAEBWm3fllvdLrMX', '2019-06-19 19:29:19', '2019-06-19 19:29:19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `metadatos`
--
ALTER TABLE `metadatos`
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
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_superior_foreign` (`id_superior`);

--
-- Indices de la tabla `producto_imagenes`
--
ALTER TABLE `producto_imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_imagenes_id_producto_foreign` (`id_producto`);

--
-- Indices de la tabla `producto_relacionados`
--
ALTER TABLE `producto_relacionados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `producto_relacionados_id_producto_foreign` (`id_producto`),
  ADD KEY `producto_relacionados_id_relacionado_foreign` (`id_relacionado`);

--
-- Indices de la tabla `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `home`
--
ALTER TABLE `home`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `metadatos`
--
ALTER TABLE `metadatos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `producto_imagenes`
--
ALTER TABLE `producto_imagenes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=355;

--
-- AUTO_INCREMENT de la tabla `producto_relacionados`
--
ALTER TABLE `producto_relacionados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT de la tabla `redes`
--
ALTER TABLE `redes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_superior_foreign` FOREIGN KEY (`id_superior`) REFERENCES `familias` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_imagenes`
--
ALTER TABLE `producto_imagenes`
  ADD CONSTRAINT `producto_imagenes_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `producto_relacionados`
--
ALTER TABLE `producto_relacionados`
  ADD CONSTRAINT `producto_relacionados_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `producto_relacionados_id_relacionado_foreign` FOREIGN KEY (`id_relacionado`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
