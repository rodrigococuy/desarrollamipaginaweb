-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-05-2020 a las 18:31:58
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
(1, 'rodrigococuy@hotmail.com', '2020-04-30 14:46:53'),
(2, 'rodrigococuy@hotmail.com', '2020-05-01 00:45:30'),
(3, 'rodrigococuy@hotmail.com', '2020-05-01 16:22:22'),
(4, 'rodrigococuy@hotmail.com', '2020-05-02 18:47:05'),
(5, 'rodrigococuy@hotmail.com', '2020-05-02 20:42:31'),
(6, 'rodrigococuy@hotmail.com', '2020-05-05 14:28:21'),
(7, 'rodrigococuy@hotmail.com', '2020-05-06 09:17:05'),
(8, 'rodrigococuy@hotmail.com', '2020-05-14 11:26:58');

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

--
-- Volcado de datos para la tabla `cart_product`
--

INSERT INTO `cart_product` (`id`, `product_id`, `q`, `cart_id`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1),
(4, 4, 1, 1),
(5, 5, 1, 1),
(6, 7, 1, 2),
(7, 6, 1, 2),
(8, 12, 55, 3),
(9, 1, 1, 3),
(10, 2, 2, 3),
(11, 1, 1, 4),
(12, 200, 1, 5),
(13, 1, 2, 6),
(14, 2, 3, 6),
(15, 200, 1, 6),
(16, 2, 3, 7),
(17, 3, 2, 7),
(18, 8, 1, 8),
(19, 1, 1, 8),
(20, 2, 1, 8),
(21, 3, 1, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_cat` int(10) UNSIGNED NOT NULL,
  `category` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_cat`, `category`) VALUES
(2, 'Alimentos Naturales'),
(3, 'Artesanias'),
(4, 'Categoria 4'),
(1, 'PAGINAS WEB');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `price` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` text COLLATE utf8mb4_general_ci NOT NULL,
  `id_categoria` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `price`, `name`, `foto`, `id_categoria`) VALUES
(1, '75.00', 'Pagina Web Basica', '1.jpg', 1),
(2, '100.00', 'Pagina Web WhatsApp', '2.jpg', 1),
(3, '200', 'Pagina web Administrativa', '3.jpg', 1),
(4, '400', 'Pagina Web Empresarial', '4.jpg', 1),
(5, '10', 'Magnesio Plus', '5.jpg', 3),
(6, '5', 'Colageno', '6.jpg', 3),
(7, '8', 'Graviola', '7.jpg', 3),
(8, '6', 'Rodiola', '8.jpg', 2),
(10, '12', 'Nombre 10', '10.jpg', 4),
(11, '15', 'Nombre 11', '11.jpg', 2),
(1005, '7.5', 'Detox', '9.jpg', 2);

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
  ADD KEY `Forancat` (`id_categoria`) USING BTREE;

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
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `cascada` FOREIGN KEY (`id_categoria`) REFERENCES `category` (`id_cat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
