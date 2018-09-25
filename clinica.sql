-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2018 a las 23:40:44
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(20) NOT NULL,
  `tipo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `doctor` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `cedula` int(20) NOT NULL,
  `hora` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `tipo`, `doctor`, `fecha`, `cedula`, `hora`, `estado`) VALUES
(30, 'OdontologÃ­a General', 'doctor1', '24/09/2018', 1234, '10:00', 'realizada'),
(31, 'Ortodoncia', 'doctor2', '24/09/2018', 555, '2:00', 'pendiente'),
(32, 'Odontologia estetica', 'doctor3', '23/09/2018', 999, '7:00', 'pendiente'),
(33, 'OdontologÃ­a General', 'doctor1', '24/09/2018', 666666, '4:00', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `telefono_cliente` char(30) NOT NULL,
  `email_cliente` varchar(64) NOT NULL,
  `direccion_cliente` varchar(255) NOT NULL,
  `status_cliente` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre_cliente`, `telefono_cliente`, `email_cliente`, `direccion_cliente`, `status_cliente`, `date_added`) VALUES
(1, 'carolina', '222335436546', 'carolina_1@gmai.com', 'Montenegro - Quindio', 1, '2018-09-19 21:28:44'),
(2, 'erika', '23234456787', 'erika@gmai.co', 'Armenia - Quindio', 1, '2018-09-19 21:30:22'),
(3, 'laura', '232323', 'laura@gmail.co', 'nuevo granada', 1, '2018-09-20 20:31:43'),
(4, 'angie maria ajo', '3232456212', 'clinica@odontologica.co', 'tebaida', 1, '2018-09-24 01:16:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) NOT NULL,
  `precision` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `thousand_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `decimal_separator` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `symbol`, `precision`, `thousand_separator`, `decimal_separator`, `code`) VALUES
(1, 'US Dollar', '$', '2', ',', '.', 'USD'),
(2, 'Libra Esterlina', '&pound;', '2', ',', '.', 'GBP'),
(3, 'Euro', 'â‚¬', '2', '.', ',', 'EUR'),
(4, 'South African Rand', 'R', '2', '.', ',', 'ZAR'),
(5, 'Danish Krone', 'kr ', '2', '.', ',', 'DKK'),
(6, 'Israeli Shekel', 'NIS ', '2', ',', '.', 'ILS'),
(7, 'Swedish Krona', 'kr ', '2', '.', ',', 'SEK'),
(8, 'Kenyan Shilling', 'KSh ', '2', ',', '.', 'KES'),
(9, 'Canadian Dollar', 'C$', '2', ',', '.', 'CAD'),
(10, 'Philippine Peso', 'P ', '2', ',', '.', 'PHP'),
(11, 'Indian Rupee', 'Rs. ', '2', ',', '.', 'INR'),
(12, 'Australian Dollar', '$', '2', ',', '.', 'AUD'),
(13, 'Singapore Dollar', 'SGD ', '2', ',', '.', 'SGD'),
(14, 'Norske Kroner', 'kr ', '2', '.', ',', 'NOK'),
(15, 'New Zealand Dollar', '$', '2', ',', '.', 'NZD'),
(16, 'Vietnamese Dong', 'VND ', '0', '.', ',', 'VND'),
(17, 'Swiss Franc', 'CHF ', '2', '\'', '.', 'CHF'),
(18, 'Quetzal Guatemalteco', 'Q', '2', ',', '.', 'GTQ'),
(19, 'Malaysian Ringgit', 'RM', '2', ',', '.', 'MYR'),
(20, 'Real Brasile&ntilde;o', 'R$', '2', '.', ',', 'BRL'),
(21, 'Thai Baht', 'THB ', '2', ',', '.', 'THB'),
(22, 'Nigerian Naira', 'NGN ', '2', ',', '.', 'NGN'),
(23, 'Peso Argentino', '$', '2', '.', ',', 'ARS'),
(24, 'Bangladeshi Taka', 'Tk', '2', ',', '.', 'BDT'),
(25, 'United Arab Emirates Dirham', 'DH ', '2', ',', '.', 'AED'),
(26, 'Hong Kong Dollar', '$', '2', ',', '.', 'HKD'),
(27, 'Indonesian Rupiah', 'Rp', '2', ',', '.', 'IDR'),
(28, 'Peso Mexicano', '$', '2', ',', '.', 'MXN'),
(29, 'Egyptian Pound', '&pound;', '2', ',', '.', 'EGP'),
(30, 'Peso Colombiano', '$', '2', '.', ',', 'COP'),
(31, 'West African Franc', 'CFA ', '2', ',', '.', 'XOF'),
(32, 'Chinese Renminbi', 'RMB ', '2', ',', '.', 'CNY');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_detalle` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_factura`
--

INSERT INTO `detalle_factura` (`id_detalle`, `numero_factura`, `id_producto`, `cantidad`, `precio_venta`) VALUES
(6, 1, 1, 5, 25000),
(5, 1, 26, 1, 50000),
(7, 1, 27, 1, 58000),
(8, 2, 4, 1, 50000),
(9, 2, 2, 1, 20000),
(10, 2, 1, 1, 25000),
(11, 2, 5, 1, 45000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id_factura` int(11) NOT NULL,
  `numero_factura` int(11) NOT NULL,
  `fecha_factura` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL,
  `condiciones` varchar(30) NOT NULL,
  `total_venta` varchar(20) NOT NULL,
  `estado_factura` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id_factura`, `numero_factura`, `fecha_factura`, `id_cliente`, `id_vendedor`, `condiciones`, `total_venta`, `estado_factura`) VALUES
(3, 1, '2018-09-22 19:12:36', 2, 3, '4', '277270', 1),
(4, 2, '2018-09-24 01:17:35', 4, 3, '1', '166600', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre_empresa` varchar(150) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(64) NOT NULL,
  `impuesto` int(2) NOT NULL,
  `moneda` varchar(6) NOT NULL,
  `logo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nombre_empresa`, `direccion`, `ciudad`, `codigo_postal`, `estado`, `telefono`, `email`, `impuesto`, `moneda`, `logo_url`) VALUES
(1, 'CONSULTORIOS ODONTOLOGÃCOS', 'avenida centenario', 'Armenia', '3301', 'Quindio', '0367536122', 'consultorio@odontologico.com', 19, '$', 'img/1537815037_card4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id_producto` int(11) NOT NULL,
  `codigo_producto` char(20) NOT NULL,
  `nombre_producto` char(255) NOT NULL,
  `status_producto` tinyint(4) NOT NULL,
  `date_added` datetime NOT NULL,
  `precio_producto` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id_producto`, `codigo_producto`, `nombre_producto`, `status_producto`, `date_added`, `precio_producto`) VALUES
(1, '01', 'ALAMBRE CUADRADO', 1, '2018-09-19 21:36:57', 25000),
(2, '02', 'ALAMBRE DE LATÃ“N', 1, '2018-09-19 21:37:49', 20000),
(3, '03', 'ALAMBRE PARA LIGADURA ROLLO CHICO', 1, '2018-09-19 21:38:12', 30000),
(4, '04', 'ARCO EXTRA-ORAL DE COLOR USA', 1, '2018-09-19 21:39:16', 50000),
(5, '05', 'ARCOS CURVA INVERSA', 1, '2018-09-19 21:39:40', 45000),
(6, '06', 'ARCOS DE ACERO', 1, '2018-09-19 21:40:03', 40000),
(7, '07', 'ARCOS NÃQUEL TITANIO', 1, '2018-09-19 21:40:33', 55000),
(8, '08', 'BANDAS PARA ORTODONCIA LEONE CON TUBO LEONE', 1, '2018-09-19 21:41:09', 20000),
(9, '09', 'BANDAS PARA ORTODONCIA SIN TUBO\r\n', 1, '2018-09-19 21:41:40', 15000),
(10, '10', 'BRACKETS- EstÃ©ticos', 1, '2018-09-19 21:43:44', 90000),
(11, '11', 'BRACKETS- MetÃ¡licos', 1, '2018-09-19 21:44:44', 99000),
(12, '10a', 'Auxiliares', 1, '2018-09-19 21:46:38', 10000),
(13, '10b', 'Intraorales', 1, '2018-09-19 21:46:53', 15000),
(14, '10c', 'Extraorales', 1, '2018-09-19 21:47:09', 15000),
(15, '10d', 'CAJA ORGANIZADORA P/ENDODONCIA\r\n', 1, '2018-09-19 21:47:46', 25000),
(16, '10e', 'PINES DE FIBRA DE VIDRIO', 1, '2018-09-19 21:48:02', 30000),
(17, '11a', 'FRESAS PARA MINI IMPLANTES ORTODONTICOS\r\n', 1, '2018-09-19 21:49:37', 40000),
(18, '11b', 'KIT DE IMPLANTE PARA ORTODONCIA', 1, '2018-09-19 21:49:56', 89000),
(19, '11c', 'MINI IMPLANTE PARA ORTODONCIA CON RANURA\r\n', 1, '2018-09-19 21:50:20', 99000),
(20, '11d', 'MINI IMPLANTE PARA ORTODONCIA SIN RANURA', 1, '2018-09-19 21:50:33', 89000),
(21, '12a', 'Tornillos Removibles', 1, '2018-09-19 21:51:53', 59000),
(22, '12b', 'Distalizador', 1, '2018-09-19 21:52:14', 49000),
(23, '12c', 'Disyuntor', 1, '2018-09-19 21:52:23', 49000),
(24, '12d', 'Fijos', 1, '2018-09-19 21:52:38', 40000),
(25, '13a', 'REGENERACIÃ“N Ã“SEA Injerto Ã“seo', 1, '2018-09-19 21:53:33', 80000),
(26, '13b', 'REGENERACIÃ“N Ã“SEA Injerto Ã“seo Flexible', 1, '2018-09-19 21:54:06', 50000),
(27, '13c', 'REGENERACIÃ“N Ã“SEA Membranas', 1, '2018-09-19 21:54:21', 58000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp`
--

CREATE TABLE `tmp` (
  `id_tmp` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad_tmp` int(11) NOT NULL,
  `precio_tmp` double(8,2) DEFAULT NULL,
  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL COMMENT 'auto incrementing user_id of each user, unique index',
  `firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s name, unique',
  `user_password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s password in salted and hashed format',
  `user_email` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'user''s email, unique',
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='user data';

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `user_name`, `user_password_hash`, `user_email`, `date_added`) VALUES
(3, 'Brian Alejandro', 'Arenas Restrepo', 'admin', '$2y$10$Rz.670biADSQgQ9ITPbSK.5yZvpAVgI4Lq659VLc/M.GyXi9BAsxm', 'clinica@odontologica.co', '2018-09-17 22:41:13'),
(4, 'doctora', '3', 'doctor3', '$2y$10$NxVD0xpVzkM7B6oeuJpMpuEb0GlSrklgxZM5Ocqr5OIqY0ucTvcay', 'doctor3@gmai.com', '2018-09-19 03:32:45'),
(5, 'doctor(a)', '2', 'doctor2', '$2y$10$eveQhY3JDmcygGDx4T8bz.P1Z8j3UMGLX8xWCuO0aSiIq7tvOLk/e', 'doctor2@hotmail.com', '2018-09-19 21:20:18'),
(6, 'doctor(a)', '1', 'doctor1', '$2y$10$dlIQsLqdmK6oD53nWybN7.EmNzovbBGXeLg6hHhIzZmbE8xScCLYe', 'doctor1@hotmail.com', '2018-09-19 21:21:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` int(20) NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contrasena` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `rol`, `correo`, `contrasena`, `estado`, `fecha_registro`) VALUES
(1234, 'Angie Maria ajo', 'paciente', 'angie@gmai.co', '1234', 'activo', '2018-09-04 18:05:45'),
(12, 'doctor1', 'doctor', 'doctor1@odontologica', '12', 'activo', '2018-09-23 21:58:18'),
(123456, 'doctor2', 'doctor', 'doctor2@gmai.com', '123456', 'activo', '2018-09-03 17:57:40'),
(12345, 'doctor3', 'doctor', 'doctor3', '12345', 'activo', '2018-09-04 18:03:33'),
(1097726591, 'Brian Alejandro Arenas Restrepo', 'administrador', 'clinica@odontologica', '1', 'activo', '2018-09-20 21:08:43'),
(555, 'erika', 'paciente', 'erika12@gmail.com', '555', 'activo', '2018-09-23 22:32:05'),
(999, 'carolina', 'paciente', 'carolina_1@gmai.com', '999', 'activo', '2018-09-15 19:15:41'),
(666666, 'Laura Garcia Prieto', 'paciente', 'lau12@gmail.com', '6', 'activo', '2018-09-20 21:03:56');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD UNIQUE KEY `codigo_producto` (`nombre_cliente`);

--
-- Indices de la tabla `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `numero_cotizacion` (`numero_factura`,`id_producto`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id_factura`),
  ADD UNIQUE KEY `numero_cotizacion` (`numero_factura`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_producto`),
  ADD UNIQUE KEY `codigo_producto` (`codigo_producto`);

--
-- Indices de la tabla `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`id_tmp`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `tmp`
--
ALTER TABLE `tmp`
  MODIFY `id_tmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'auto incrementing user_id of each user, unique index', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
