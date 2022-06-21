-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2020 a las 22:11:16
-- Versión del servidor: 8.0.18
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cartbasic1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cart`
--

INSERT INTO `cart` (`id`, `client_email`, `created_at`) VALUES
(1, 'rodrigococuy@hotmail.com', '2020-04-30 14:46:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cart_product`
--

CREATE TABLE `cart_product` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `q` float DEFAULT NULL,
  `cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`) VALUES
(1, 0, 'padre 1'),
(2, 0, 'padre 2'),
(3, 0, 'Padre 3'),
(4, 0, 'padre 4'),
(5, 0, 'padre 5'),
(11, 1, 'hijo 11'),
(21, 2, 'hijo 21'),
(111, 11, 'nieto de 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_padre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_cat`, `category`, `id_padre`) VALUES
(1, 'LINEA KERA', 0),
(2, 'LINEA NATURAL', 0),
(3, 'LINEA TRATAMIENTOS', 0),
(4, 'LINEA MASCARILLAS', 0),
(5, 'LINEA ALISADO', 0),
(6, 'LINEA DECOLORACION', 0),
(7, 'LINEA FINISH', 0),
(8, 'LINEA PROFESIONAL', 0),
(9, 'REPUESTOS DE CARRO', 0),
(10, 'PANADERIA', 0),
(91, 'NUEVOS', 9),
(92, 'USADOS', 9),
(911, 'RENAULT 4', 91),
(912, 'RENAULT 6', 91),
(9111, '1980-1985', 911);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `forcategoria` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `foto`, `forcategoria`) VALUES
(101001, '30000', 'HIDROKERATINA GIORGIO', '101001.png', 'LINEA KERA'),
(101002, '18000', 'SHAMPOO KERA #1', '101002.png', 'LINEA KERA'),
(101003, '15000', 'SHAMPOO KERA #2', '101003.png', 'LINEA KERA'),
(101004, '45000', 'SHAMPOO KERA #3', '101004.png', 'LINEA KERA'),
(101005, '32000', 'PH4 INTENSIVO', '101005.png', 'LINEA KERA'),
(101006, '8000', 'ACONDICIONADOR GIORGIO', '101006.png', 'LINEA KERA'),
(201001, '17000', 'SHAMPOO GREE LINE', '201001.png', 'LINEA NATURAL'),
(201002, '65000', 'MASCARILLA HAIR MASK GREEN LINE', '201002.png', 'LINEA NATURAL'),
(201003, '82000', 'CREMA DE PEINAR GRENN LINE', '201003.png', 'LINEA NATURAL'),
(301001, '26000', 'TRATAMIENTO DE AGUACATE Y GERMEN DE TRIGO', '301001.png', 'LINEA TRATAMIENTOS'),
(301002, '66000', 'R-BORN 15 BENEFICIOS', '301002.png', 'LINEA TRATAMIENTOS'),
(301003, '85000', 'R-BORN REVITALIZANTE COLOR', '301003.png', 'LINEA TRATAMIENTOS'),
(401001, '30000', 'EMPAQUE DE CULATA', '401001.png', 'NUEVOS'),
(401002, '20000', 'VALVULAS DE ESCAPE', '401002.png', 'USADOS'),
(501001, '15000', 'PAN CON MANTEQUILLA', '501001.png', 'PANADERIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(13, 'rodrigococuy@hotmail.com', '$2y$10$JYfgpE414mOPQbqxVeCVROTKfrW8yh9FVzbwYClQz/iES3kN8dQuK', '2020-05-24 09:25:23'),
(15, 'admin@gmail.com', '$2y$10$TCQ41w7uzfurnsctiYbYR.PjriWRNKHAea3ZAuNqplZNjhNrpwKGy', '2020-05-24 11:45:29');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`),
  ADD UNIQUE KEY `id` (`id_cat`),
  ADD UNIQUE KEY `category` (`category`),
  ADD KEY `id_cat` (`id_cat`) USING BTREE,
  ADD KEY `id_cat_2` (`id_cat`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `forprodcat` (`forcategoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `cart_product`
--
ALTER TABLE `cart_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `forprodcat` FOREIGN KEY (`forcategoria`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
