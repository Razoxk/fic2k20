-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-06-2020 a las 19:10:34
-- Versión del servidor: 10.2.32-MariaDB-cll-lve
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
-- Base de datos: `piedpipe_fic2k20`
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_arte`
--

CREATE TABLE `estado_arte` (
  `id` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `estado_arte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `nombre_entidad` varchar(255) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `tipo_proyecto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `pass`) VALUES
(1, 'john', 'asd123'),
(2, 'Gfuentealba', 'Fge.2020!');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `antecedentes_iniciativa`
--
ALTER TABLE `antecedentes_iniciativa`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descripcion_propuesta`
--
ALTER TABLE `descripcion_propuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_arte`
--
ALTER TABLE `estado_arte`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representante_legal`
--
ALTER TABLE `representante_legal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
