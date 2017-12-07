-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2017 a las 14:03:29
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datos_sad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `escuela`
--

CREATE TABLE `escuela` (
  `servicio` varchar(6) NOT NULL,
  `procedencia` varchar(50) NOT NULL,
  `def` int(1) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `escuela`
--

INSERT INTO `escuela` (`servicio`, `procedencia`, `def`, `direccion`, `localidad`, `tipo`) VALUES
('MS 01', 'EX MEDIA 1 y BS 52', 2, 'Los Andes N° 173 ', ' Don Bosco', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 02', '( EX MEDIA 2)', 0, 'Calle 44 N° 2257', ' San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 03', '( EX MEDIA 3 Y BS 3)', 0, 'Corrientes N° 587 ', ' Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 04', '( EX MEDIA 4 Y BS 55)', 0, 'J. López N° 176', ' Bernal', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 05', '( EX MEDIA 5)', 0, 'Río Salado N° 5150', 'Ezpeleta', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 06', '(EX MEDIA 06 Y BS 15)', 0, 'Alem Nº 1545', 'Bernal', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 07', '( EX MEDIA 07 Y BS 01)', 0, 'Rivadavia N° 273', ' Quilmes Centro', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 08', '( EX MEDIA 08 , BS 62 Y BS 83)', 0, 'Roca N° 1022 ', 'Don Bosco', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 09', '(EX MEDIA 09 Y BS 74)', 1, 'Calle 810 e/ 888 y 889', '-B°La Paz', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 11', '(EX MEDIA 11 Y BS 73)', 1, 'San Martin esq. 864', 'La Florida', 'ESCUELAS DE EDUCACION SECUNDARIA '),
('MS 12', '(EX MEDIA 12 Y BS 09)', 0, 'Cerrito N° 943', 'Bernal', 'ESCUELAS DE EDUCACION SECUNDARIA '),
('MS 13', '(EX MEDIA 13 Y BS 20)', 2, 'Pampa e/ 172 y 172 bis', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA '),
('MS 14', '(EX MEDIA 14)', 0, 'Conesa N° 399', 'Quilmes Centro', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 15', '(EX MEDIA 15 Y BS 33)', 0, 'Bottaro N° 1125 ', 'Quilmes Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 16', '(EX MEDIA 16 Y BS 60)', 0, 'Av. Calchaqui N° 840 ', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 17', '(EX BS 38)', 0, 'Avellaneda N° 177 ', 'Bernal Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 18', '(EX BS 06)', 0, 'Brown N° 5239', 'Ezpeleta Centro', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 20', '(EX MEDIA 20 Y BS 27)', 0, 'Mitre N° 374', 'Quilmes Centro', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 21', '( EX MEDIA 21 Y BS 39)', 0, 'San Martin N° 32 ', 'Bernal', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 22', '( EX MEDIA 22 Y BS 58)', 0, 'Estanislao del Campo N° 4445', 'Ezpeleta Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 23', '(EX BS 50)', 1, 'Calle 839 N° 546', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 24', '(EX BS 14)', 1, 'Calle 880 esq. 833', ' La Florida', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 25', '( EX BS 22)', 0, 'Calle 339 N° 3551', 'Quilmes O', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 26', '( EX BS 44)', 0, 'Calle 844 N° 2270 ', ' San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 27', '( EX BS 34)', 1, 'Hto. Primo N° 887 ', 'Quilmes Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 28', '( EX BS 28)', 0, 'Av. La Plata N° 1751', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 29', '(EX BS 40)', 0, 'Cramer N° 721', 'Bernal E.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 30', '( EX BS 43)', 0, 'Otto Bemberg N° 293', ' Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 31', '( EX BS 63)', 1, 'La Rioja N° 1637', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 32', '( EX BS 69)', 1, 'Donato Alvarez y Armesti ', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 33', '(EX BS 12)', 0, 'Pringles e/ Ascasubi y Varela', 'Ezpeleta', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 34', ' ( EX BS 16 Y BS 04)', 1, 'Calle 826 e/ 897 y 898', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 35', '( EX BS 31)', 0, 'Alberdi N° 130 ', 'Quilmes Centro', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 36', '( EX BS 64)', 2, 'Calle 187 N 609 ', ' Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 37', '( EX BS 05)', 0, 'Calle 835 esq. 895 ', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 38', '(EX BS 13)', 2, 'Cbo. R. Sessa N° 1101', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 39', '(EX BS 82)', 0, 'Calle 845 N° 2488 ', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 40', '(EX BS 78)', 1, 'Condarco N° 5350', ' Ezpeleta Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 41', '(EX BS 41)', 1, 'San Luis N° 4216 ', 'Quilmes Oste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 42', '(EX BS 02)', 1, 'Calle 806 e/ 893 y 893', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 43', '(EX BS 17)', 1, 'Ecuador N° 938', 'Ezpeleta O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 44', '(EX BS 21)', 0, 'J. B. Justo N° 4851', ' Ezpeleta O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 45', '(EX BS 25)', 0, 'Entre Rios N° 2812', ' Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 46', '(EX BS 61)', 2, 'Calle 190 esq. Liniers', ' Bernal Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 47', '(EX BS 07)', 0, 'O. de Ocampo N° 335', 'Quilmes Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 48', '(EX BS 86)', 1, 'Balcarse y Mozart', ' Quilmes Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 49', '(EX BS 71)', 0, 'Cevallos N° 1577', 'Ezpeleta Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 50', '(EX BS 10)', 0, 'R. Saenz Peña esq. Rep. Del Libano', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 51 ', '(EX BS 51)', 1, 'Calle 837 N° 1395', ' Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 52 ', '(EX BS 08)', 0, 'L. M. Campos esq. Zapiola', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 53 ', '(EX BS 37)', 0, 'Rodolfo López N° 251', 'Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 54', '(EX BS 24)', 1, 'Calle 891 N° 3121', ' San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 55 ', '(EX BS 45)', 1, 'Ricardo Rojas esq. Nicaragua', 'Ezpeleta O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 56', '(EX BS 56)', 0, 'R. DesaguaderoN° 5180', 'Ezpeleta Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 57', '(EX BS 57)', 1, '1 Calle 874 N° 4983 e/ 850 y 852', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 58', '(EX BS 76)', 1, 'Marinero López N° 575 esq. Alsina', 'Quilmes Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 59', '(EX BS 59)', 0, 'J.B. Justo N° 3402', 'Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 60 ', '(EX BS 67)', 1, 'Calle 819 N° 921', 'Quilmes Oeste', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 61', '(EX BS 77)', 0, 'Yapeyú N° 555', 'Bernal ', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 62', '(EX BS 81)', 0, '0 Joaquín V. Gónzalez N° 751', 'Quilmes Oeste.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 63', '(EX BS 23)', 1, 'Chaco N° 1540', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 64 ', '(EX BS 29)', 0, 'Mendoza N° 187', 'Ezpeleta E.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 65', '(EX BS 65)', 0, 'Av. Provincial esq. 849', 'San Fco. Solano', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 66', '(EX BS 66)', 0, 'Emilio Zola N° 4799', 'Ezpeleta Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 67', '(EX BS 26)', 0, 'Carlos Pelegrini N° 1155', 'Quilmes O.', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 68', '(EX BS 48)', 0, 'Echeverria N° 192', 'Ezpeleta Este', 'ESCUELAS DE EDUCACION SECUNDARIA'),
('MS 69', '(EX BS 47)', 2, 'Rca. del Libano y Camino Gral. Belgrano', 'Bernal O.', 'ESCUELAS DE EDUCACION SECUNDARIA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `escuela`
--
ALTER TABLE `escuela`
  ADD PRIMARY KEY (`servicio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
