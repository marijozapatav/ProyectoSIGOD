-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2021 a las 19:58:20
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsigod`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id_actividad` int(11) NOT NULL,
  `id_tipo_actividad` int(11) NOT NULL,
  `descripcion_actividad` text NOT NULL,
  `id_dependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areas`
--

CREATE TABLE `areas` (
  `id_area` int(11) NOT NULL,
  `nombre_area` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `areas`
--

INSERT INTO `areas` (`id_area`, `nombre_area`) VALUES
(1, 'InformÃ¡tica'),
(2, 'GeografÃ­a'),
(3, 'InglÃ©s'),
(4, 'Sistemas'),
(5, 'ComputaciÃ³n'),
(6, 'Deporte'),
(7, 'AdministraciÃ³n'),
(8, 'MatemÃ¡ticas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas`
--

CREATE TABLE `aulas` (
  `id_aula` int(11) NOT NULL,
  `numero` int(5) NOT NULL,
  `nombre_aula` varchar(20) NOT NULL,
  `ubicacion` varchar(40) NOT NULL,
  `asignacion` varchar(40) NOT NULL,
  `capacidad` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aulas`
--

INSERT INTO `aulas` (`id_aula`, `numero`, `nombre_aula`, `ubicacion`, `asignacion`, `capacidad`) VALUES
(2, 11, 'Pecera', 'giraluna', 'completa', 33);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aulas_disponibilidades`
--

CREATE TABLE `aulas_disponibilidades` (
  `id_aulas_disponibilidades` int(11) NOT NULL,
  `id_aulas` int(11) NOT NULL,
  `id_disponibilidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `aulas_disponibilidades`
--

INSERT INTO `aulas_disponibilidades` (`id_aulas_disponibilidades`, `id_aulas`, `id_disponibilidades`) VALUES
(2, 2, 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `id_bitacora` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `fecha` text NOT NULL,
  `dia` text NOT NULL,
  `hora_inicio` text NOT NULL,
  `acciones` text,
  `hora_salida` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bloques_horas`
--

CREATE TABLE `bloques_horas` (
  `id_bloque_hora` int(11) NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_final` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_categoria`) VALUES
(1, 'Instructor'),
(2, 'Asistente'),
(3, 'Agregado'),
(4, 'Asociado'),
(5, 'Titular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cohortes`
--

CREATE TABLE `cohortes` (
  `id_cohorte` int(11) NOT NULL,
  `numero_cohorte` varchar(4) NOT NULL,
  `fecha_cohorte` date NOT NULL,
  `descripcion_cohorte` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cohortes`
--

INSERT INTO `cohortes` (`id_cohorte`, `numero_cohorte`, `fecha_cohorte`, `descripcion_cohorte`) VALUES
(1, '3', '3333-03-31', 'sdfsdfsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colaboraciones`
--

CREATE TABLE `colaboraciones` (
  `id_colaboracion` int(11) NOT NULL,
  `id_pnf` int(11) NOT NULL,
  `descripcion_colaboracion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `concursos`
--

CREATE TABLE `concursos` (
  `id_concurso` int(11) NOT NULL,
  `tipo_concurso` varchar(30) NOT NULL,
  `anio_concurso` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `concursos`
--

INSERT INTO `concursos` (`id_concurso`, `tipo_concurso`, `anio_concurso`) VALUES
(1, 'Credenciales', 2015),
(2, 'OposiciÃ³n', 2017);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condiciones`
--

CREATE TABLE `condiciones` (
  `id_condicion` int(11) NOT NULL,
  `tipo_condicion` varchar(30) NOT NULL,
  `descripcion_condicion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dedicaciones`
--

CREATE TABLE `dedicaciones` (
  `id_dedicacion` int(11) NOT NULL,
  `abreviatura` varchar(5) NOT NULL,
  `nombre_dedicacion` varchar(40) NOT NULL,
  `hora_dedicacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `dedicaciones`
--

INSERT INTO `dedicaciones` (`id_dedicacion`, `abreviatura`, `nombre_dedicacion`, `hora_dedicacion`) VALUES
(1, 'DE', 'DedicaciÃ³n Exclusiva', 42),
(2, 'TC', 'Tiempo Completo', 36),
(3, 'MT', 'Medio Tiempo', 18),
(4, 'TCV', 'Tiempo convencional ', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id_dependencia` int(11) NOT NULL,
  `nombre_dependencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE `descargas` (
  `id_descarga` int(11) NOT NULL,
  `numero_descarga` int(3) NOT NULL,
  `descripcion_descarga` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disponibilidades`
--

CREATE TABLE `disponibilidades` (
  `id_disponibilidad` int(11) NOT NULL,
  `nombre_disponibilidad` varchar(35) DEFAULT NULL,
  `turno` int(7) DEFAULT NULL,
  `dia_disponibilidad` int(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `disponibilidades`
--

INSERT INTO `disponibilidades` (`id_disponibilidad`, `nombre_disponibilidad`, `turno`, `dia_disponibilidad`) VALUES
(1, 'Lunes (MaÃ±ana)', 1, 1),
(2, 'Lunes (Tarde)', 2, 1),
(3, 'Lunes (Noche)', 3, 1),
(5, 'Martes (MaÃ±ana) ', 1, 2),
(6, 'Martes (Tarde) ', 2, 2),
(7, 'Martes (Noche) ', 3, 2),
(8, 'MiÃ©rcoles (MaÃ±ana) ', 1, 3),
(9, 'MiÃ©rcoles (Tarde) ', 2, 3),
(10, 'MiÃ©rcoles (Noche) ', 3, 3),
(11, 'Jueves (MaÃ±ana) ', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `cedula` varchar(12) NOT NULL,
  `primer_nombre` varchar(15) NOT NULL,
  `segundo_nombre` varchar(15) NOT NULL,
  `primer_apellido` varchar(15) NOT NULL,
  `segundo_apellido` varchar(15) NOT NULL,
  `correo` varchar(82) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_ingreso` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_relacion_laboral` int(11) NOT NULL,
  `id_dedicacion` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `id_concurso` int(11) DEFAULT NULL,
  `titulo_pregrado` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`cedula`, `primer_nombre`, `segundo_nombre`, `primer_apellido`, `segundo_apellido`, `correo`, `direccion`, `telefono`, `id_municipio`, `id_ingreso`, `id_categoria`, `id_relacion_laboral`, `id_dedicacion`, `id_area`, `id_concurso`, `titulo_pregrado`) VALUES
('11333825', 'luis', 'miguel', 'cuicas', 'gomez', 'luismg', 'calle 44 entre 30 y 31', '04245446655', 3, 27, 2, 1, 1, 1, 2, ''),
('26577823', 'Jesus', 'Alberto', 'Cuicas', 'Gomez', 'JesusCuiGo', 'calle 44 entre 30 y 31', '04127733330', 3, 28, 4, 1, 3, 3, 2, ''),
('7359870', 'miguel', 'alberto', 'cuicas', 'gomez', 'arbol', 'calle 44 entre 30 y 31', '0251446693', 3, 24, 2, 1, 1, 1, 1, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes_titulos`
--

CREATE TABLE `docentes_titulos` (
  `id_docente_titulo` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `id_titulo` int(11) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docentes_titulos`
--

INSERT INTO `docentes_titulos` (`id_docente_titulo`, `cedula`, `id_titulo`, `descripcion`) VALUES
(3, '7359870', 4, ''),
(4, '11333825', 3, ''),
(5, '26577823', 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ejes_formacion`
--

CREATE TABLE `ejes_formacion` (
  `id_eje_formacion` int(11) NOT NULL,
  `nombre_eje` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ejes_formacion`
--

INSERT INTO `ejes_formacion` (`id_eje_formacion`, `nombre_eje`) VALUES
(1, 'Ã‰tico-PolÃ­tico'),
(2, 'EpistemolÃ³gico'),
(3, 'Trabajo-Productivo'),
(4, 'EstÃ©tico LÃºdico'),
(5, 'Ã‰tico PolÃ­tico- Socio Ambiental');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` int(11) NOT NULL,
  `id_periodo` int(11) NOT NULL,
  `numero_dia` smallint(6) NOT NULL,
  `id_bloque_hora` int(11) NOT NULL,
  `codigo_seccion` varchar(13) DEFAULT NULL,
  `id_unidad_curricular` int(11) NOT NULL,
  `id_aula` int(11) DEFAULT NULL,
  `cedula` varchar(12) NOT NULL,
  `id_colaboracion` int(11) DEFAULT NULL,
  `id_condicion` int(11) DEFAULT NULL,
  `id_descarga` int(11) DEFAULT NULL,
  `id_tipo_gestion` int(11) DEFAULT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingresos`
--

CREATE TABLE `ingresos` (
  `id_ingreso` int(11) NOT NULL,
  `anio_ingreso` int(4) NOT NULL,
  `post_traslado` text,
  `experiencia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingresos`
--

INSERT INTO `ingresos` (`id_ingreso`, `anio_ingreso`, `post_traslado`, `experiencia`) VALUES
(24, 2021, 'trasladado', 'Media'),
(25, 2021, 'trasladado', 'Media'),
(26, 2021, 'trasladado', 'Media'),
(27, 2021, 'trasladado', 'Media'),
(28, 2021, 'trasladado', 'Media'),
(29, 2021, 'trasladado', 'Media'),
(30, 2021, 'trasladado', 'Media'),
(31, 2021, 'trasladado', 'Media'),
(32, 2021, 'trasladado', 'Media'),
(33, 2021, 'trasladado', 'Media'),
(34, 2021, 'trasladado', 'Media'),
(35, 2021, 'trasladado', 'Media'),
(36, 2021, 'trasladado', 'Media'),
(37, 2021, 'trasladado', 'Media'),
(38, 2021, 'trasladado', 'Media'),
(39, 2121, 'sdfdsf', 'Media'),
(40, 6626, 'gfhgfhgf', 'Media'),
(41, 5555, 'dsfdsf', 'Alta'),
(42, 202, 'trasladado', 'Media'),
(43, 2021, 'trasladadito', 'Media'),
(44, 6666, 'dfdhdfh', 'Media'),
(45, 54354, 'gfdg', 'Baja'),
(46, 43, 'gfdg', 'Baja'),
(47, 53, 'dfgfd', 'Baja');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre`) VALUES
(1, 'AndrÃ©s Eloy Bl'),
(2, 'Crespo'),
(3, 'Iribarren'),
(4, 'JimÃ©nez'),
(5, 'MorÃ¡n'),
(6, 'Palavecino'),
(7, 'SimÃ³n Planas'),
(8, 'Torres'),
(9, 'Urdaneta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id_periodo` int(11) NOT NULL,
  `fase_periodo` varchar(3) NOT NULL,
  `anio_periodo` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos_usuario_modulo`
--

CREATE TABLE `permisos_usuario_modulo` (
  `id_permisos_usuario_modulo` int(11) NOT NULL,
  `usuario` varchar(12) NOT NULL,
  `modulo` int(3) NOT NULL,
  `ver` int(1) NOT NULL,
  `consultar` int(1) NOT NULL,
  `registrar` int(1) NOT NULL,
  `modificar` int(1) NOT NULL,
  `reportar` int(1) NOT NULL,
  `eliminar` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permisos_usuario_modulo`
--

INSERT INTO `permisos_usuario_modulo` (`id_permisos_usuario_modulo`, `usuario`, `modulo`, `ver`, `consultar`, `registrar`, `modificar`, `reportar`, `eliminar`) VALUES
(2, '26577823', 1, 1, 1, 1, 1, 1, 1),
(3, '26577823', 2, 1, 1, 1, 1, 1, 1),
(4, '26577823', 3, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pnfs`
--

CREATE TABLE `pnfs` (
  `id_pnf` int(11) NOT NULL,
  `nombre_pnf` varchar(10) NOT NULL,
  `descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas_seguridad`
--

CREATE TABLE `preguntas_seguridad` (
  `id_pregunta_seguridad` int(11) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `combinacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `relaciones_laborales`
--

CREATE TABLE `relaciones_laborales` (
  `id_relacion_laboral` int(11) NOT NULL,
  `nombre_relacion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `relaciones_laborales`
--

INSERT INTO `relaciones_laborales` (`id_relacion_laboral`, `nombre_relacion`) VALUES
(1, 'Fijo'),
(2, 'Contratado'),
(3, 'Necesidad de servici'),
(4, 'Suplente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `codigo_seccion` varchar(12) NOT NULL,
  `id_trayecto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`codigo_seccion`, `id_trayecto`) VALUES
('1113', 1),
('1114', 1),
('553', 1),
('11116', 2),
('1112', 2),
('2222', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_actividades`
--

CREATE TABLE `tipos_actividades` (
  `id_tipo_actividad` int(11) NOT NULL,
  `nombre_actividad` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_gestiones`
--

CREATE TABLE `tipos_gestiones` (
  `id_tipo_gestion` int(11) NOT NULL,
  `abreviatura` varchar(5) NOT NULL,
  `nombre_tipo_gestion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_gestiones`
--

INSERT INTO `tipos_gestiones` (`id_tipo_gestion`, `abreviatura`, `nombre_tipo_gestion`) VALUES
(1, 'HC', 'Horas Clases'),
(2, 'CI', 'CreaciÃ³n Intelectual'),
(3, 'IC', 'IntegraciÃ³n Comunidad'),
(4, 'AA', 'AsesorÃ­a AcadÃ©mica '),
(5, 'GA', 'GestiÃ³n AcadÃ©mica '),
(6, 'OAA', 'Otras Act. AcadÃ©micas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id_titulo` int(11) NOT NULL,
  `nombre_titulo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `titulos`
--

INSERT INTO `titulos` (`id_titulo`, `nombre_titulo`) VALUES
(2, 'EspecializaciÃ³n'),
(3, 'MaestrÃ­a '),
(4, 'Doctorado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trayectos`
--

CREATE TABLE `trayectos` (
  `id_trayecto` int(11) NOT NULL,
  `nombre_trayecto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `trayectos`
--

INSERT INTO `trayectos` (`id_trayecto`, `nombre_trayecto`) VALUES
(1, 'Trayecto I'),
(2, 'Trayecto II'),
(3, 'Trayecto III'),
(4, 'Trayecto IV');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_curriculares`
--

CREATE TABLE `unidades_curriculares` (
  `id_unidad_curricular` int(11) NOT NULL,
  `nombre_unidad` varchar(40) NOT NULL,
  `trayecto` varchar(7) NOT NULL,
  `fase` varchar(2) NOT NULL,
  `id_eje_formacion` int(11) NOT NULL,
  `hora_unidad` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidades_curriculares`
--

INSERT INTO `unidades_curriculares` (`id_unidad_curricular`, `nombre_unidad`, `trayecto`, `fase`, `id_eje_formacion`, `hora_unidad`) VALUES
(4, 'matematicas', '2 ', '2', 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidades_curriculares_cohortes`
--

CREATE TABLE `unidades_curriculares_cohortes` (
  `id_unidad_curricular_cohorte` int(11) NOT NULL,
  `id_unidad_curricular` int(11) NOT NULL,
  `id_cohorte` int(11) NOT NULL,
  `codigo_unidad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `cedula` varchar(12) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellido` varchar(15) NOT NULL,
  `fecha_n` datetime NOT NULL,
  `correo` varchar(80) NOT NULL,
  `contrasenia` varchar(64) NOT NULL,
  `estado` int(1) NOT NULL,
  `rol_inicio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`cedula`, `nombre`, `apellido`, `fecha_n`, `correo`, `contrasenia`, `estado`, `rol_inicio`) VALUES
('1234567', 'Joseito', 'Guerra', '1999-01-23 00:00:00', 'CheitoGuerra@gmail.com', 'popo', 1, 'Super Usuario'),
('26577823', 'Jesus', 'Cuicas', '1999-07-05 00:00:00', 'sdfsdf@gmail.com', 'hola', 1, 'Super Usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id_actividad`),
  ADD KEY `id_tipo_actividad` (`id_tipo_actividad`),
  ADD KEY `id_dependencia` (`id_dependencia`);

--
-- Indices de la tabla `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `aulas`
--
ALTER TABLE `aulas`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `aulas_disponibilidades`
--
ALTER TABLE `aulas_disponibilidades`
  ADD PRIMARY KEY (`id_aulas_disponibilidades`),
  ADD KEY `id_aulas` (`id_aulas`),
  ADD KEY `id_disponibilidades` (`id_disponibilidades`);

--
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`id_bitacora`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `bloques_horas`
--
ALTER TABLE `bloques_horas`
  ADD PRIMARY KEY (`id_bloque_hora`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `cohortes`
--
ALTER TABLE `cohortes`
  ADD PRIMARY KEY (`id_cohorte`);

--
-- Indices de la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  ADD PRIMARY KEY (`id_colaboracion`),
  ADD KEY `id_pnf` (`id_pnf`);

--
-- Indices de la tabla `concursos`
--
ALTER TABLE `concursos`
  ADD PRIMARY KEY (`id_concurso`);

--
-- Indices de la tabla `condiciones`
--
ALTER TABLE `condiciones`
  ADD PRIMARY KEY (`id_condicion`);

--
-- Indices de la tabla `dedicaciones`
--
ALTER TABLE `dedicaciones`
  ADD PRIMARY KEY (`id_dedicacion`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`id_dependencia`);

--
-- Indices de la tabla `descargas`
--
ALTER TABLE `descargas`
  ADD PRIMARY KEY (`id_descarga`);

--
-- Indices de la tabla `disponibilidades`
--
ALTER TABLE `disponibilidades`
  ADD PRIMARY KEY (`id_disponibilidad`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`cedula`),
  ADD UNIQUE KEY `id_municipio` (`id_municipio`,`id_ingreso`,`id_categoria`,`id_relacion_laboral`,`id_dedicacion`,`id_area`) USING BTREE,
  ADD KEY `id_concurso` (`id_concurso`),
  ADD KEY `id_dedicacion` (`id_dedicacion`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_relacion_laboral` (`id_relacion_laboral`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `id_ingreso` (`id_ingreso`);

--
-- Indices de la tabla `docentes_titulos`
--
ALTER TABLE `docentes_titulos`
  ADD PRIMARY KEY (`id_docente_titulo`),
  ADD KEY `cedula` (`cedula`,`id_titulo`),
  ADD KEY `id_titulo` (`id_titulo`);

--
-- Indices de la tabla `ejes_formacion`
--
ALTER TABLE `ejes_formacion`
  ADD PRIMARY KEY (`id_eje_formacion`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`,`id_periodo`),
  ADD KEY `id_unidad_curricular` (`id_unidad_curricular`),
  ADD KEY `id_bloque_hora` (`id_bloque_hora`,`codigo_seccion`,`id_aula`,`cedula`,`id_colaboracion`,`id_condicion`,`id_descarga`,`id_tipo_gestion`,`id_actividad`),
  ADD KEY `id_periodo` (`id_periodo`),
  ADD KEY `id_descarga` (`id_descarga`),
  ADD KEY `id_condicion` (`id_condicion`),
  ADD KEY `id_tipo_gestion` (`id_tipo_gestion`),
  ADD KEY `codigo_seccion` (`codigo_seccion`),
  ADD KEY `id_aula` (`id_aula`),
  ADD KEY `id_colaboracion` (`id_colaboracion`),
  ADD KEY `id_actividad` (`id_actividad`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  ADD PRIMARY KEY (`id_ingreso`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id_periodo`);

--
-- Indices de la tabla `permisos_usuario_modulo`
--
ALTER TABLE `permisos_usuario_modulo`
  ADD PRIMARY KEY (`id_permisos_usuario_modulo`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `modulo` (`modulo`);

--
-- Indices de la tabla `pnfs`
--
ALTER TABLE `pnfs`
  ADD PRIMARY KEY (`id_pnf`);

--
-- Indices de la tabla `preguntas_seguridad`
--
ALTER TABLE `preguntas_seguridad`
  ADD PRIMARY KEY (`id_pregunta_seguridad`),
  ADD KEY `cedula` (`cedula`);

--
-- Indices de la tabla `relaciones_laborales`
--
ALTER TABLE `relaciones_laborales`
  ADD PRIMARY KEY (`id_relacion_laboral`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`codigo_seccion`),
  ADD KEY `id_trayecto` (`id_trayecto`);

--
-- Indices de la tabla `tipos_actividades`
--
ALTER TABLE `tipos_actividades`
  ADD PRIMARY KEY (`id_tipo_actividad`);

--
-- Indices de la tabla `tipos_gestiones`
--
ALTER TABLE `tipos_gestiones`
  ADD PRIMARY KEY (`id_tipo_gestion`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id_titulo`);

--
-- Indices de la tabla `trayectos`
--
ALTER TABLE `trayectos`
  ADD PRIMARY KEY (`id_trayecto`);

--
-- Indices de la tabla `unidades_curriculares`
--
ALTER TABLE `unidades_curriculares`
  ADD PRIMARY KEY (`id_unidad_curricular`),
  ADD KEY `id_eje_formacion` (`id_eje_formacion`);

--
-- Indices de la tabla `unidades_curriculares_cohortes`
--
ALTER TABLE `unidades_curriculares_cohortes`
  ADD PRIMARY KEY (`id_unidad_curricular_cohorte`),
  ADD KEY `id_unidad_curricular` (`id_unidad_curricular`,`id_cohorte`),
  ADD KEY `id_cohorte` (`id_cohorte`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cedula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `areas`
--
ALTER TABLE `areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `aulas`
--
ALTER TABLE `aulas`
  MODIFY `id_aula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `aulas_disponibilidades`
--
ALTER TABLE `aulas_disponibilidades`
  MODIFY `id_aulas_disponibilidades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `id_bitacora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bloques_horas`
--
ALTER TABLE `bloques_horas`
  MODIFY `id_bloque_hora` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cohortes`
--
ALTER TABLE `cohortes`
  MODIFY `id_cohorte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  MODIFY `id_colaboracion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `concursos`
--
ALTER TABLE `concursos`
  MODIFY `id_concurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `condiciones`
--
ALTER TABLE `condiciones`
  MODIFY `id_condicion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dedicaciones`
--
ALTER TABLE `dedicaciones`
  MODIFY `id_dedicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  MODIFY `id_dependencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `descargas`
--
ALTER TABLE `descargas`
  MODIFY `id_descarga` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `disponibilidades`
--
ALTER TABLE `disponibilidades`
  MODIFY `id_disponibilidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `docentes_titulos`
--
ALTER TABLE `docentes_titulos`
  MODIFY `id_docente_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ejes_formacion`
--
ALTER TABLE `ejes_formacion`
  MODIFY `id_eje_formacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ingresos`
--
ALTER TABLE `ingresos`
  MODIFY `id_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id_periodo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permisos_usuario_modulo`
--
ALTER TABLE `permisos_usuario_modulo`
  MODIFY `id_permisos_usuario_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pnfs`
--
ALTER TABLE `pnfs`
  MODIFY `id_pnf` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas_seguridad`
--
ALTER TABLE `preguntas_seguridad`
  MODIFY `id_pregunta_seguridad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `relaciones_laborales`
--
ALTER TABLE `relaciones_laborales`
  MODIFY `id_relacion_laboral` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipos_actividades`
--
ALTER TABLE `tipos_actividades`
  MODIFY `id_tipo_actividad` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipos_gestiones`
--
ALTER TABLE `tipos_gestiones`
  MODIFY `id_tipo_gestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trayectos`
--
ALTER TABLE `trayectos`
  MODIFY `id_trayecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidades_curriculares`
--
ALTER TABLE `unidades_curriculares`
  MODIFY `id_unidad_curricular` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `unidades_curriculares_cohortes`
--
ALTER TABLE `unidades_curriculares_cohortes`
  MODIFY `id_unidad_curricular_cohorte` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD CONSTRAINT `actividades_ibfk_1` FOREIGN KEY (`id_dependencia`) REFERENCES `dependencias` (`id_dependencia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `actividades_ibfk_2` FOREIGN KEY (`id_tipo_actividad`) REFERENCES `tipos_actividades` (`id_tipo_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `aulas_disponibilidades`
--
ALTER TABLE `aulas_disponibilidades`
  ADD CONSTRAINT `id_aulas` FOREIGN KEY (`id_aulas`) REFERENCES `aulas` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_disponibilidades` FOREIGN KEY (`id_disponibilidades`) REFERENCES `disponibilidades` (`id_disponibilidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `bitacoras_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `usuarios` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `colaboraciones`
--
ALTER TABLE `colaboraciones`
  ADD CONSTRAINT `colaboraciones_ibfk_1` FOREIGN KEY (`id_pnf`) REFERENCES `pnfs` (`id_pnf`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`id_dedicacion`) REFERENCES `dedicaciones` (`id_dedicacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `areas` (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_3` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_4` FOREIGN KEY (`id_relacion_laboral`) REFERENCES `relaciones_laborales` (`id_relacion_laboral`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_5` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_6` FOREIGN KEY (`id_concurso`) REFERENCES `concursos` (`id_concurso`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_ibfk_7` FOREIGN KEY (`id_ingreso`) REFERENCES `ingresos` (`id_ingreso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes_titulos`
--
ALTER TABLE `docentes_titulos`
  ADD CONSTRAINT `docentes_titulos_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `docentes` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `docentes_titulos_ibfk_2` FOREIGN KEY (`id_titulo`) REFERENCES `titulos` (`id_titulo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`id_bloque_hora`) REFERENCES `bloques_horas` (`id_bloque_hora`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_10` FOREIGN KEY (`cedula`) REFERENCES `docentes` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_11` FOREIGN KEY (`id_unidad_curricular`) REFERENCES `unidades_curriculares` (`id_unidad_curricular`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`id_descarga`) REFERENCES `descargas` (`id_descarga`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_3` FOREIGN KEY (`id_condicion`) REFERENCES `condiciones` (`id_condicion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_4` FOREIGN KEY (`id_tipo_gestion`) REFERENCES `tipos_gestiones` (`id_tipo_gestion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_5` FOREIGN KEY (`codigo_seccion`) REFERENCES `secciones` (`codigo_seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_6` FOREIGN KEY (`id_periodo`) REFERENCES `periodos` (`id_periodo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_7` FOREIGN KEY (`id_aula`) REFERENCES `aulas` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_8` FOREIGN KEY (`id_colaboracion`) REFERENCES `colaboraciones` (`id_colaboracion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `horarios_ibfk_9` FOREIGN KEY (`id_actividad`) REFERENCES `actividades` (`id_actividad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `preguntas_seguridad`
--
ALTER TABLE `preguntas_seguridad`
  ADD CONSTRAINT `preguntas_seguridad_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `usuarios` (`cedula`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
