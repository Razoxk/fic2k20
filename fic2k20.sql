-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-06-2020 a las 22:12:45
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fic2k20`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anexos`
--

CREATE TABLE `anexos` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(9) NOT NULL,
  `anexo_2` varchar(255) NOT NULL,
  `anexo_3` varchar(255) NOT NULL,
  `grafico_imagen` varchar(255) NOT NULL,
  `objetivos_especificos` varchar(255) NOT NULL,
  `anexo_6` varchar(255) NOT NULL,
  `presupuesto_detallado` varchar(255) NOT NULL,
  `resultados_esperados` varchar(255) NOT NULL,
  `indicador_evaluacion` varchar(255) NOT NULL,
  `carta_gantt` varchar(255) NOT NULL,
  `funcion_integrantes` varchar(255) NOT NULL,
  `copia_rol_tributario` varchar(255) NOT NULL,
  `copia_cedula_identidad` varchar(255) NOT NULL,
  `copia_instrumento` varchar(255) NOT NULL,
  `carta_autoridad` varchar(255) NOT NULL,
  `antecedentes_relevantes` varchar(255) NOT NULL,
  `copia_certificado_vigencia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anexos`
--

INSERT INTO `anexos` (`id`, `id_proyecto`, `anexo_2`, `anexo_3`, `grafico_imagen`, `objetivos_especificos`, `anexo_6`, `presupuesto_detallado`, `resultados_esperados`, `indicador_evaluacion`, `carta_gantt`, `funcion_integrantes`, `copia_rol_tributario`, `copia_cedula_identidad`, `copia_instrumento`, `carta_autoridad`, `antecedentes_relevantes`, `copia_certificado_vigencia`) VALUES
(1, 4, './proyectos/publicos/4/fic3.sql', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 1, 'Estado arte', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 37, './proyectos/publicos/37/archivo1.xls', './proyectos/publicos/37/archivo2.xls', './proyectos/publicos/37/archivo3.xls', './proyectos/publicos/37/indicadores_evaluacion_ex-ante.xlsx', './proyectos/publicos/37/archivo4.xls', './proyectos/publicos/37/archivo5.xls', './proyectos/publicos/37/archivo6.xls', './proyectos/publicos/37/archivo14.xls', './proyectos/publicos/37/archivo13.xls', './proyectos/publicos/37/archivo7.xls', './proyectos/publicos/37/archivo8.xls', './proyectos/publicos/37/archivo9.xls', './proyectos/publicos/37/archivo10.xls', './proyectos/publicos/37/archivo11.xls', './proyectos/publicos/37/archivo12.xls', ''),
(5, 38, './proyectos/publicos/38/archivo1.xls', './proyectos/publicos/38/archivo2.xls', './proyectos/publicos/38/archivo3.xls', './proyectos/publicos/38/archivo16.xls', './proyectos/publicos/38/archivo4.xls', './proyectos/publicos/38/archivo5.xls', './proyectos/publicos/38/archivo6.xls', './proyectos/publicos/38/archivo15.xls', './proyectos/publicos/38/archivo13.xls', './proyectos/publicos/38/archivo7.xls', './proyectos/publicos/38/archivo8.xls', './proyectos/publicos/38/archivo9.xls', './proyectos/publicos/38/archivo10.xls', './proyectos/publicos/38/archivo11.xls', './proyectos/publicos/38/archivo12.xls', ''),
(6, 39, './proyectos/publicos/39/archivo1.xls', './proyectos/publicos/39/archivo2.xls', './proyectos/publicos/39/archivo3.xls', './proyectos/publicos/39/archivo16.xls', './proyectos/publicos/39/archivo4.xls', './proyectos/publicos/39/archivo5.xls', './proyectos/publicos/39/archivo6.xls', './proyectos/publicos/39/archivo15.xls', './proyectos/publicos/39/archivo13.xls', './proyectos/publicos/39/archivo7.xls', './proyectos/publicos/39/archivo8.xls', './proyectos/publicos/39/archivo9.xls', './proyectos/publicos/39/archivo10.xls', './proyectos/publicos/39/archivo11.xls', './proyectos/publicos/39/archivo12.xls', ''),
(7, 40, './proyectos/publicos/40/archivo1.xls', './proyectos/publicos/40/archivo2.xls', './proyectos/publicos/40/archivo3.xls', './proyectos/publicos/40/archivo16.xls', './proyectos/publicos/40/archivo4.xls', './proyectos/publicos/40/archivo5.xls', './proyectos/publicos/40/archivo6.xls', './proyectos/publicos/40/archivo15.xls', './proyectos/publicos/40/archivo13.xls', './proyectos/publicos/40/archivo7.xls', './proyectos/publicos/40/archivo8.xls', './proyectos/publicos/40/archivo9.xls', './proyectos/publicos/40/archivo10.xls', './proyectos/publicos/40/archivo11.xls', './proyectos/publicos/40/archivo12.xls', ''),
(8, 41, './proyectos/publicos/41/archivo1.xls', './proyectos/publicos/41/archivo2.xls', './proyectos/publicos/41/archivo3.xls', './proyectos/publicos/41/archivo16.xls', './proyectos/publicos/41/archivo4.xls', './proyectos/publicos/41/archivo5.xls', './proyectos/publicos/41/archivo6.xls', './proyectos/publicos/41/archivo15.xls', './proyectos/publicos/41/archivo13.xls', './proyectos/publicos/41/archivo7.xls', './proyectos/publicos/41/archivo8.xls', './proyectos/publicos/41/archivo9.xls', './proyectos/publicos/41/archivo10.xls', './proyectos/publicos/41/archivo11.xls', './proyectos/publicos/41/archivo12.xls', ''),
(9, 42, './proyectos/publicos/42/archivo1.xls', './proyectos/publicos/42/archivo2.xls', './proyectos/publicos/42/archivo3.xls', './proyectos/publicos/42/archivo16.xls', './proyectos/publicos/42/archivo4.xls', './proyectos/publicos/42/archivo5.xls', './proyectos/publicos/42/archivo6.xls', './proyectos/publicos/42/archivo15.xls', './proyectos/publicos/42/archivo13.xls', './proyectos/publicos/42/archivo7.xls', './proyectos/publicos/42/archivo8.xls', './proyectos/publicos/42/archivo9.xls', './proyectos/publicos/42/archivo10.xls', './proyectos/publicos/42/archivo11.xls', './proyectos/publicos/42/archivo12.xls', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antecedentes_iniciativa`
--

CREATE TABLE `antecedentes_iniciativa` (
  `id` int(9) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `prioridad_regional` text NOT NULL,
  `destino_proyecto` text NOT NULL,
  `duracion_sede_iniciativa` text NOT NULL,
  `lugar_ejecucion` text NOT NULL,
  `presupuesto_total` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `antecedentes_iniciativa`
--

INSERT INTO `antecedentes_iniciativa` (`id`, `id_proyecto`, `prioridad_regional`, `destino_proyecto`, `duracion_sede_iniciativa`, `lugar_ejecucion`, `presupuesto_total`) VALUES
(1, 42, 'I+D+i para apoyo al reciclaje y la valorización de los de desechos y subproductos de las actividades productivas regionales: minería, agropecuario, construcción y turismo.', 'Innovación Social', '32', 'Mi casa', 3978);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `id` int(11) NOT NULL,
  `rut` varchar(30) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `id_proyecto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`id`, `rut`, `nombre`, `cargo`, `telefono`, `celular`, `email`, `direccion`, `id_proyecto`) VALUES
(1, '123124', '123123', '123123', '123123', '11111111', '111111111', '111111111', '1'),
(2, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '2'),
(3, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '3'),
(4, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '4'),
(5, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '5'),
(6, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '6'),
(7, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '7'),
(8, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '8'),
(9, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '9'),
(10, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '10'),
(11, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '11'),
(12, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '12'),
(13, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '13'),
(14, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '14'),
(15, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '15'),
(16, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '16'),
(17, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '17'),
(18, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '18'),
(19, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '19'),
(20, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '20'),
(21, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '21'),
(22, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '22'),
(23, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '23'),
(24, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '24'),
(25, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '25'),
(26, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '26'),
(27, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '27'),
(28, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '28'),
(29, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '29'),
(30, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '30'),
(31, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '31'),
(32, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '32'),
(33, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '33'),
(34, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '34'),
(35, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '35'),
(36, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '36'),
(37, '123123', 'ghjfdsdfhg', 'fsddsfgfsd', '3425435645', '3453455345', 'jhdsf@gmail.com', 'hfgpws9u1', '37'),
(38, '1239127', '123123', 'sadklfjdsfgj', '3425435645', '876837509', 'jhdsf@gmail.com', 'hfgpws9u1', '38'),
(39, '1239127', '123123', 'sadklfjdsfgj', '3425435645', '876837509', 'jhdsf@gmail.com', 'hfgpws9u1', '39'),
(40, '1239127', '123123', 'sadklfjdsfgj', '3425435645', '876837509', 'jhdsf@gmail.com', 'hfgpws9u1', '40'),
(41, '1239127', '123123', 'sadklfjdsfgj', '3425435645', '876837509', 'jhdsf@gmail.com', 'hfgpws9u1', '41'),
(42, '1239127', '123123', 'sadklfjdsfgj', '3425435645', '876837509', 'jhdsf@gmail.com', 'hfgpws9u1', '42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_propuesta`
--

CREATE TABLE `descripcion_propuesta` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `problema_oportunidad` text NOT NULL,
  `merito_innovador` text NOT NULL,
  `descripcion_resultados` text NOT NULL,
  `objetivo_general` text NOT NULL,
  `indicador_resultado` text NOT NULL,
  `meta_indicador` text NOT NULL,
  `medios_verificacion` text NOT NULL,
  `beneficiarios_num_hombres` int(9) NOT NULL,
  `beneficiarios_text_hombres` text NOT NULL,
  `beneficiarios_num_mujeres` int(9) NOT NULL,
  `beneficiarios_text_mujeres` text NOT NULL,
  `beneficiarios_num_empresas` int(9) NOT NULL,
  `beneficiarios_text_empresas` text NOT NULL,
  `metodologia_proyecto` text NOT NULL,
  `actividades_difusion` text NOT NULL,
  `mecanismos_transferencias` text NOT NULL,
  `modelo_sustentabilidad` text NOT NULL,
  `plan_contingencia` text NOT NULL,
  `bibliografia_referencial` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `descripcion_propuesta`
--

INSERT INTO `descripcion_propuesta` (`id`, `id_proyecto`, `problema_oportunidad`, `merito_innovador`, `descripcion_resultados`, `objetivo_general`, `indicador_resultado`, `meta_indicador`, `medios_verificacion`, `beneficiarios_num_hombres`, `beneficiarios_text_hombres`, `beneficiarios_num_mujeres`, `beneficiarios_text_mujeres`, `beneficiarios_num_empresas`, `beneficiarios_text_empresas`, `metodologia_proyecto`, `actividades_difusion`, `mecanismos_transferencias`, `modelo_sustentabilidad`, `plan_contingencia`, `bibliografia_referencial`) VALUES
(1, 2, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(2, 3, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(3, 4, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(4, 5, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(5, 6, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(6, 7, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(7, 8, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(8, 9, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(9, 10, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(10, 11, '', '', '', '', '', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(11, 12, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(12, 13, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(13, 14, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(14, 15, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', '', '', 0, '', 0, '', 0, '', '', '', '', '', '', ''),
(15, 16, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 0, '', 0, '', '', '', '', '', '', ''),
(16, 17, 'sadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agil', 'Si', 'No', 'talvez', 'si', 'si'),
(17, 18, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(18, 19, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(19, 20, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(20, 21, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(21, 22, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(22, 23, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(23, 24, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(24, 25, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(25, 26, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(26, 27, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(27, 28, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(28, 29, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(29, 30, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(30, 31, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(31, 32, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(32, 33, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(33, 34, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(34, 35, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(35, 36, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(36, 37, 'sadasd3', 'asdasd2', 'asdasd1', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2313, 'ghfgdfgdf', 123, 'asdasd', 0, '', 'agils', 'Sis', 'Nos', 'talvez', 'si', 'si'),
(37, 38, 'asdasdsdgfa', 'eqweqwe', '123125123', '123', 'asd', 'asdasd22', 'asdasd', 23, 'asdasdasd asdasd', 12, ' asdasd asd asd', 0, '', 'dfggdffgd', 'sdffdsfdsdfs', 'sdfsdfsdf', 'sdffdssd', 'sdfsdf', 'sdfsdfsdsfd'),
(38, 39, 'asdasdsdgfa', 'eqweqwe', '123125123', '123', 'asd', 'asdasd22', 'asdasd', 23, 'asdasdasd asdasd', 12, ' asdasd asd asd', 0, '', 'dfggdffgd', 'sdffdsfdsdfs', 'sdfsdfsdf', 'sdffdssd', 'sdfsdf', 'sdfsdfsdsfd'),
(39, 40, 'asdasdsdgfa', 'eqweqwe', '123125123', '123', 'asd', 'asdasd22', 'asdasd', 23, 'asdasdasd asdasd', 12, ' asdasd asd asd', 0, '', 'dfggdffgd', 'sdffdsfdsdfs', 'sdfsdfsdf', 'sdffdssd', 'sdfsdf', 'sdfsdfsdsfd'),
(40, 41, 'asdasdsdgfa', 'eqweqwe', '123125123', '123', 'asd', 'asdasd22', 'asdasd', 23, 'asdasdasd asdasd', 12, ' asdasd asd asd', 0, '', 'dfggdffgd', 'sdffdsfdsdfs', 'sdfsdfsdf', 'sdffdssd', 'sdfsdf', 'sdfsdfsdsfd'),
(41, 42, 'asdasdsdgfa', 'eqweqwe', '123125123', '123', 'asd', 'asdasd22', 'asdasd', 23, 'asdasdasd asdasd', 12, ' asdasd asd asd', 0, '', 'dfggdffgd', 'sdffdsfdsdfs', 'sdfsdfsdf', 'sdffdssd', 'sdfsdf', 'sdfsdfsdsfd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_arte`
--

CREATE TABLE `estado_arte` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `estado_arte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_arte`
--

INSERT INTO `estado_arte` (`id`, `id_proyecto`, `estado_arte`) VALUES
(1, 1, 'Estado arte'),
(2, 6, 'Estado arte asdasdadasdasdasd'),
(3, 7, 'Estado arte asdasdadasdasdasd'),
(4, 8, 'Estado arte asdasdadasdasdasd'),
(5, 9, 'Estado arte asdasdadasdasdasd'),
(6, 10, 'Estado arte asdasdadasdasdasd'),
(7, 11, 'Estado arte asdasdadasdasdasd'),
(8, 12, 'Estado arte asdasdadasdasdasd'),
(9, 13, 'Estado arte asdasdadasdasdasd'),
(10, 14, 'Estado arte asdasdadasdasdasd'),
(11, 15, 'Estado arte asdasdadasdasdasd'),
(12, 16, 'Estado arte asdasdadasdasdasd'),
(13, 17, 'Estado arte asdasdadasdasdasd'),
(14, 18, 'Estado arte asdasdadasdasdasd4'),
(15, 19, 'Estado arte asdasdadasdasdasd4'),
(16, 20, 'Estado arte asdasdadasdasdasd4'),
(17, 21, 'Estado arte asdasdadasdasdasd4'),
(18, 22, 'Estado arte asdasdadasdasdasd4'),
(19, 23, 'Estado arte asdasdadasdasdasd4'),
(20, 24, 'Estado arte asdasdadasdasdasd4'),
(21, 25, 'Estado arte asdasdadasdasdasd4'),
(22, 26, 'Estado arte asdasdadasdasdasd4'),
(23, 27, 'Estado arte asdasdadasdasdasd4'),
(24, 28, 'Estado arte asdasdadasdasdasd4'),
(25, 29, 'Estado arte asdasdadasdasdasd4'),
(26, 30, 'Estado arte asdasdadasdasdasd4'),
(27, 31, 'Estado arte asdasdadasdasdasd4'),
(28, 32, 'Estado arte asdasdadasdasdasd4'),
(29, 33, 'Estado arte asdasdadasdasdasd4'),
(30, 34, 'Estado arte asdasdadasdasdasd4'),
(31, 35, 'Estado arte asdasdadasdasdasd4'),
(32, 36, 'Estado arte asdasdadasdasdasd4'),
(33, 37, 'Estado arte asdasdadasdasdasd4'),
(34, 38, 'dasdasd'),
(35, 39, 'dasdasd'),
(36, 40, 'dasdasd'),
(37, 41, 'dasdasd'),
(38, 42, 'dasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `nombre_entidad` varchar(255) NOT NULL,
  `estado` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyecto`
--

INSERT INTO `proyecto` (`id`, `nombre`, `nombre_entidad`, `estado`) VALUES
(1, 'asdadasdasd123', 'qweqweqwe123', 'En proceso'),
(2, 'proyectito', 'pelao', 'Pendiente'),
(3, 'proyectito', 'pelao', 'Pendiente'),
(4, 'proyectito', 'pelao', 'Pendiente'),
(5, 'proyectito', 'pelao', 'Pendiente'),
(6, 'proyectito', 'pelao', 'Pendiente'),
(7, 'proyectito', 'pelao', 'Pendiente'),
(8, 'proyectito', 'pelao', 'Pendiente'),
(9, 'proyectito', 'pelao', 'Pendiente'),
(10, 'proyectito', 'pelao', 'Pendiente'),
(11, 'proyectito', 'pelao', 'Pendiente'),
(12, 'proyectito', 'pelao', 'Pendiente'),
(13, 'proyectito', 'pelao', 'Pendiente'),
(14, 'proyectito', 'pelao', 'Pendiente'),
(15, 'proyectito', 'pelao', 'Pendiente'),
(16, 'proyectito', 'pelao', 'Pendiente'),
(17, 'proyectito', 'pelao', 'Pendiente'),
(18, 'proyectito', 'pelao', 'Pendiente'),
(19, 'proyectito', 'pelao', 'Pendiente'),
(20, 'proyectito', 'pelao', 'Pendiente'),
(21, 'proyectito', 'pelao', 'Pendiente'),
(22, 'proyectito', 'pelao', 'Pendiente'),
(23, 'proyectito', 'pelao', 'Pendiente'),
(24, 'proyectito', 'pelao', 'Pendiente'),
(25, 'proyectito', 'pelao', 'Pendiente'),
(26, 'proyectito', 'pelao', 'Pendiente'),
(27, 'proyectito', 'pelao', 'Pendiente'),
(28, 'proyectito', 'pelao', 'Pendiente'),
(29, 'proyectito', 'pelao', 'Pendiente'),
(30, 'proyectito', 'pelao', 'Pendiente'),
(31, 'proyectito', 'pelao', 'Pendiente'),
(32, 'proyectito', 'pelao', 'Pendiente'),
(33, 'proyectito', 'pelao', 'Pendiente'),
(34, 'proyectito', 'pelao', 'Pendiente'),
(35, 'proyectito', 'pelao', 'Pendiente'),
(36, 'proyectito', 'pelao', 'Pendiente'),
(37, 'proyectito', 'pelao', 'Pendiente'),
(38, 'proyectito', '', 'Pendiente'),
(39, 'proyectito', '', 'Pendiente'),
(40, 'proyectito', '', 'Pendiente'),
(41, 'proyectito', '', 'Pendiente'),
(42, 'proyectito', '', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante_legal`
--

CREATE TABLE `representante_legal` (
  `id` int(11) NOT NULL,
  `id_proyecto` varchar(30) NOT NULL,
  `rut` varchar(30) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `direccion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `representante_legal`
--

INSERT INTO `representante_legal` (`id`, `id_proyecto`, `rut`, `nombre`, `cargo`, `telefono`, `celular`, `email`, `direccion`) VALUES
(1, '1', '1111111111111111', '1111111111', '1111111111', '1111111111111', '11111111111', '111111111111111', 'asjkdaskjdasjkd'),
(2, '2', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(3, '3', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(4, '4', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(5, '5', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(6, '6', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(7, '7', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(8, '8', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(9, '9', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(10, '10', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(11, '11', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(12, '12', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(13, '13', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(14, '14', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(15, '15', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(16, '16', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(17, '17', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(18, '18', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(19, '19', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(20, '20', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(21, '21', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(22, '22', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(23, '23', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(24, '24', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(25, '25', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(26, '26', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(27, '27', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(28, '28', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(29, '29', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(30, '30', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(31, '31', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(32, '32', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(33, '33', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(34, '34', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(35, '35', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(36, '36', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(37, '37', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(38, '38', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(39, '39', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(40, '40', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(41, '41', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745'),
(42, '42', '184294564', 'jf0fdsksdflsdf', 'lksdfglksdgj', '86893478', '890345893', 'jfgioudf@gmail.com', 'kljswdkljsdgjk128745');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anexos`
--
ALTER TABLE `anexos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `antecedentes_iniciativa`
--
ALTER TABLE `antecedentes_iniciativa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `descripcion_propuesta`
--
ALTER TABLE `descripcion_propuesta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_arte`
--
ALTER TABLE `estado_arte`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `representante_legal`
--
ALTER TABLE `representante_legal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anexos`
--
ALTER TABLE `anexos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `antecedentes_iniciativa`
--
ALTER TABLE `antecedentes_iniciativa`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `descripcion_propuesta`
--
ALTER TABLE `descripcion_propuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `estado_arte`
--
ALTER TABLE `estado_arte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `representante_legal`
--
ALTER TABLE `representante_legal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
