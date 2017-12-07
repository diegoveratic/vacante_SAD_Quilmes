-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-12-2017 a las 03:43:06
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `pid` varchar(40) NOT NULL,
  `materia` varchar(80) NOT NULL,
  `modulo` varchar(40) NOT NULL,
  `anio` varchar(40) NOT NULL,
  `orientacion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`pid`, `materia`, `modulo`, `anio`, `orientacion`) VALUES
('MCS', 'Matematicas', '3', '4', 'Economia y Administracion'),
('LIT', 'Literatura ', '3', '4', 'Economia y Administracion'),
('IGS', 'Ingles', '2', '4', 'Economia y Administracion'),
('HTR', 'Historia', '2', '4', 'Economia y Administracion'),
('GGF', 'Geografia', '2', '4', 'Economia y Administracion'),
('SYA', 'Salud y Adolescencia', '2', '4', 'Economia y Administracion'),
('IAF', 'Introduccion a la Fisica', '2', '4', 'Economia y Administracion'),
('NTI', 'Nuevas Tecnologias de la Conectividad', '2', '4', 'Economia y Administracion'),
('BLG', 'Biologia', '2', '4', 'Economia y Administracion'),
('EFC', 'Educacion Fisica', '2', '4', 'Economia y Administracion'),
('SIC', 'Sistema de Informacion Contable', '2', '4', 'Economia y Administracion'),
('TDO', 'Teoria de las Organizaciones', '2', '4', 'Economia y Administracion'),
('MCS', 'Matematicas', '3', '5', 'Economia y Administracion'),
('LIT', 'Literatura ', '2', '5', 'Economia y Administracion'),
('IGS', 'Ingles', '2', '5', 'Economia y Administracion'),
('HTR', 'Historia', '2', '5', 'Economia y Administracion'),
('GGF', 'Geografia', '2', '5', 'Economia y Administracion'),
('PYC', 'Politica y Ciudadania', '2', '5', 'Economia y Administracion'),
('IAQ', 'Introduccion a la Quimica', '3', '5', 'Economia y Administracion'),
('EFC', 'Educacion Fisica', '2', '5', 'Economia y Administracion'),
('CSC', 'Elementos Micro y Macro', '2', '5', 'Economia y Administracion'),
('EPO', 'Economia Politica', '2', '4', 'Economia y Administracion'),
('SOC', 'Sociologia', '2', '4', 'Economia y Administracion'),
('MCS', 'Matematicas', '4', '6', 'Economia y Administracion'),
('LIT', 'Literatura ', '3', '6', 'Economia y Administracion'),
('IGS', 'Ingles', '2', '6', 'Economia y Administracion'),
('HTR', 'Historia', '2', '6', 'Economia y Administracion'),
('GGF', 'Geografia', '2', '6', 'Economia y Administracion'),
('RTE', 'Arte', '2', '6', 'Economia y Administracion'),
('EFC', 'Educacion Fisica', '2', '6', 'Economia y Administracion'),
('FIA', 'Filosofia', '2', '6', 'Economia y Administracion'),
('TYC', 'Trabajo y ciudadania', '2', '6', 'Economia y Administracion'),
('PIC', 'Proyectos de Investigacion en Ciencias Sociales', '4', '6', 'Economia y Administracion'),
('MCS', 'Matematicas', '3', '4', 'Cominicacion'),
('LIT', 'Literatura ', '3', '4', 'Cominicacion'),
('IGS', 'Ingles', '2', '4', 'Cominicacion'),
('HTR', 'Historia', '2', '4', 'Cominicacion'),
('GGF', 'Geografia', '2', '4', 'Cominicacion'),
('SYA', 'Salud y Adolescencia', '2', '4', 'Cominicacion'),
('IAF', 'Introduccion a la Fisica', '2', '4', 'Cominicacion'),
('NTI', 'Nuevas Tecnologias de la Conectividad', '2', '4', 'Cominicacion'),
('BLG', 'Biologia', '2', '4', 'Cominicacion'),
('EFC', 'Educacion Fisica', '2', '4', 'Cominicacion'),
('PSI', 'Psicologia', '2', '4', 'Cominicacion'),
('IAC', 'Introduccion a la Comunicacion', '2', '4', 'Cominicacion'),
('MCS', 'Matematicas', '3', '5', 'Cominicacion'),
('LIT', 'Literatura ', '3', '5', 'Cominicacion'),
('IGS', 'Ingles', '2', '5', 'Cominicacion'),
('HTR', 'Historia', '2', '5', 'Cominicacion'),
('GGF', 'Geografia', '2', '5', 'Cominicacion'),
('PYC', 'Politica y Ciudadania', '2', '5', 'Cominicacion'),
('IAQ', 'Introduccion a la Quimica', '2', '5', 'Cominicacion'),
('EFC', 'Educacion Fisica', '2', '5', 'Cominicacion'),
('CSC', 'Comunicacion y Culturas del Consumo', '2', '5', 'Cominicacion'),
('OCS', 'Observatorio de Comunicacion, Cultura y Sociedad', '3', '5', 'Cominicacion'),
('ODM', 'Observatorio de Medios', '3', '5', 'Cominicacion'),
('MCS', 'Matematicas', '4', '6', 'Cominicacion'),
('LIT', 'Literatura ', '3', '6', 'Cominicacion'),
('IGS', 'Ingles', '2', '6', 'Cominicacion'),
('RTE', 'Arte', '2', '6', 'Cominicacion'),
('EFC', 'Educacion Fisica', '2', '6', 'Cominicacion'),
('FIA', 'Filosofia', '2', '6', 'Cominicacion'),
('TYC', 'Trabajo y ciudadania', '2', '6', 'Cominicacion'),
('TCI', 'Taller de Produccion de Lenguajes', '4', '6', 'Cominicacion'),
('CYT', 'Comunicacion y Transformaciones Socioculturales del Siglo XXI', '2', '6', 'Cominicacion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
