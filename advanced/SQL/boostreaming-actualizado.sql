-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Dec 04, 2016 at 06:11 AM
-- Server version: 5.5.42
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `boostreaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `actores`
--

CREATE TABLE `actores` (
  `actor_id` int(11) NOT NULL,
  `actor_nombre` varchar(100) NOT NULL DEFAULT 'Edgar Ordoñez Ruiz'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actores`
--

INSERT INTO `actores` (`actor_id`, `actor_nombre`) VALUES
(1, 'Salma Hayek'),
(2, 'Edward Norton'),
(3, 'Diego Luna'),
(4, 'asdsdsdsd'),
(5, 'Chris Evans'),
(6, 'Benedict Cumberbatch'),
(7, 'Tom Cruise'),
(8, 'Matt Damon'),
(9, 'Ellen Burstyn'),
(10, 'Anthony Perkins'),
(11, ' Bruce Willis'),
(12, 'Will Smith'),
(13, 'Will Smith');

-- --------------------------------------------------------

--
-- Table structure for table `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nombre` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`categoria_id`, `categoria_nombre`) VALUES
(1, 'Accion'),
(2, 'Terror'),
(3, 'Suspenso'),
(4, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `directores`
--

CREATE TABLE `directores` (
  `director_id` int(11) NOT NULL,
  `director_nombre` varchar(100) NOT NULL DEFAULT 'Miguel Fernando Bobadilla Contreras'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `directores`
--

INSERT INTO `directores` (`director_id`, `director_nombre`) VALUES
(1, 'Peter Jackson'),
(2, 'Christopher Nolan'),
(3, 'Guillermo del Toro'),
(4, 'Alejandro G. Iñarritu');

-- --------------------------------------------------------

--
-- Table structure for table `peliculas`
--

CREATE TABLE `peliculas` (
  `pelicula_id` int(11) NOT NULL,
  `pelicula_titulo` varchar(150) NOT NULL,
  `pelicula_sinopsis` text NOT NULL,
  `pelicula_categoria` varchar(20) NOT NULL,
  `pelicula_ranking` float NOT NULL DEFAULT '0',
  `pelicula_duracion` int(11) NOT NULL,
  `pelicula_clasificacion` varchar(5) NOT NULL DEFAULT 'G',
  `pelicula_anio` year(4) NOT NULL,
  `pelicula_fechaAlta` datetime NOT NULL,
  `pelicula_url` text NOT NULL,
  `pelicula_portada` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peliculas`
--

INSERT INTO `peliculas` (`pelicula_id`, `pelicula_titulo`, `pelicula_sinopsis`, `pelicula_categoria`, `pelicula_ranking`, `pelicula_duracion`, `pelicula_clasificacion`, `pelicula_anio`, `pelicula_fechaAlta`, `pelicula_url`, `pelicula_portada`) VALUES
(9, 'Captain America', '''Capitán América: Civil War'' sigue a Steve Rogers liderando al nuevo equipo de Vengadores en sus continúos esfuerzos para mantener a salvo a la humanidad. Pero después de los daños colaterales de otro incidente en el que el grupo de superhéroes está involucrado, la presión política instala un sistema de responsabilidad encabezado por el Gobierno para supervisar y dirigir al equipo. El nuevo ‘status quo’ provoca la ruptura de los Vengadores y da como resultado dos bandos -uno liderado por Steve Rogers y su deseo de que los superhéroes sigan siendo libres para defender a la humanidad sin la intromisión del Gobierno y otro liderado por Tony Stark que decide apoyar la decisión de la clase dirigente.', 'Accion', 0, 147, 'PG-13', 2016, '2016-12-04 05:05:15', '../../backend/web/peliculas/accion/CaptainAmerica.mp4', '../../backend/web/portadas/CaptainAmerica.jpeg'),
(10, 'Doctor Strange', 'El doctor Stephen Strange (Benedict Cumberbatch) es un reputado neurocirujano de Nueva York. Todo lo que tiene de brillante y talentoso también lo tiene de arrogante y vanidoso. Pero su vida no volverá a ser la misma después de que un terrible accidente de tráfico le prive del uso de las manos. Con sus manos dañadas, no puede ejercer su profesión y esto arruinará por completo su carrera. Después de varias intervenciones quirúrgicas realizadas por su compañero, el doctor Nicodemus West (Michael Stuhlbarg), las manos de Stephen consiguen recuperar su movilidad parcial, aunque no la pericia necesaria para volver a operar. ', 'Accion', 0, 115, 'PG-13', 2016, '2016-12-04 05:06:15', '../../backend/web/peliculas/accion/DoctorStrange.mp4', '../../backend/web/portadas/DoctorStrange.jpeg'),
(11, 'Jack Reacher', 'Jack Reacher (Tom Cruise) regresa a su antigua base militar en Virginia. Allí descubrirá que Susan Turner (Cobie Smulders), la mujer que lo ha reemplazado como líder de su unidad, ha sido arrestada por espionaje. Pero Reacher sospecha que algo no encaja, por lo que el exmilitar acaba huyendo de la ley junto a ella mientras intenta dar con los verdaderos culpables, a la vez que investiga crímenes ocurridos en extrañas circunstancias. ', 'Accion', 0, 118, 'PG-13', 2016, '2016-12-04 05:07:15', '../../backend/web/peliculas/accion/JackReacher.mp4', '../../backend/web/portadas/JackReacher.jpeg'),
(12, 'Jason Bourne', 'Jason Bourne (Matt Damon) está empezando a recuperar su memoria, pero eso no significa que ahora el más letal agente de los cuerpos de élite de la CIA lo sepa todo. Han pasado ya doce años desde la última vez que Bourne tuviera que operar desde las sombras. Pero, ¿qué ha ocurrido desde entonces? Todavía le quedan muchos interrogantes por responder. En medio de un mundo convulso, azotado por la crisis económica, el colapso financiero y la guerra cibernética, diversas organizaciones secretas luchan por hacerse con el poder. ', 'Accion', 0, 123, 'PG-13', 2016, '2016-12-04 05:08:15', '../../backend/web/peliculas/accion/JasonBourne.mp4', '../../backend/web/portadas/JasonBourne.jpeg'),
(14, 'The Exorcist', 'Adaptación de la novela de William Peter Blatty que se inspiró en un exorcismo real ocurrido en Washington en 1949. Regan, una niña de doce años, es víctima de fenómenos paranormales como la levitación o la manifestación de una fuerza sobrehumana. Su madre, aterrorizada, tras someter a su hija a múltiples análisis médicos que no ofrecen ningún resultado, acude a un sacerdote con estudios de psiquiatría. Éste, convencido de que el mal no es físico sino espiritual, es decir que se trata de una posesión diabólica, decide practicar un exorcismo. Seguramente la película de terror más popular de todos los tiempos.', 'Terror', 0, 122, 'R', 1973, '2016-12-04 05:09:15', '../../backend/web/peliculas/terror/TheExorcist.mp4', '../../backend/web/portadas/TheExorcist.jpeg'),
(15, 'Psycho', 'Inspirada en la novela homónima de Robert Bloch, la historia está ambientada en un tétrico motel de carretera llamado cuyo dueño es Norman Bates (Anthony Perkins, ''Asesinato en el Orient Express''). Junto al motel hay una casa, tan poco acogedora como el edificio, en la que reside el señor Bates con su madre.', 'Suspenso', 0, 109, 'PG-13', 1960, '2016-12-04 05:10:15', '../../backend/web/peliculas/suspenso/Psycho.mp4', '../../backend/web/portadas/Psycho.jpeg'),
(16, 'The Sixth Sense', 'El doctor Malcom Crowe es un conocido psicólogo infantil de Philadelphia que vive obsesionado por el doloroso recuerdo de un joven paciente desequilibrado al que fue incapaz de ayudar. Cuando conoce a Cole Sear, un aterrorizado y confuso niño de ocho años que necesita tratamiento, ve que se le presenta la oportunidad de redimirse haciendo todo lo posible por ayudarlo. Sin embargo, el doctor Crowe no está preparado para conocer la terrible verdad acerca del don sobrenatural de su paciente: recibe visitas no deseadas de espíritus atormentados.', 'Suspenso', 0, 107, '', 1999, '2016-12-04 05:11:15', '../../backend/web/peliculas/suspenso/TheSixthSense.mp4', '../../backend/web/portadas/TheSixthSense.jpeg'),
(18, 'The Pursuit Of Happyness', 'Chris Gardner (Will Smith) es un padre de familia que lucha por sobrevivir. A pesar de sus valientes intentos para mantener a la familia a flote, la madre (Thandie Newton) de su hijo de cinco años Christopher (Jaden Christopher Syre Smith) comienza a derrumbarse a causa de la tensión constante de la presión económica; incapaz de soportarlo, en contra de sus sentimientos, decide marcharse. ', 'Drama', 0, 117, 'PG-13', 2006, '2016-12-04 05:12:15', '../../backend/web/peliculas/drama/ThePursuitOfHappyness.mp4', '../../backend/web/portadas/ThePursuitOfHappyness.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `peliculas_has_actores`
--

CREATE TABLE `peliculas_has_actores` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `actores_actor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `peliculas_has_categorias`
--

CREATE TABLE `peliculas_has_categorias` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `categorias_categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `peliculas_has_directores`
--

CREATE TABLE `peliculas_has_directores` (
  `peliculas_pelicula_id` int(11) NOT NULL,
  `directores_director_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `apellido` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nombre`, `apellido`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'mredgaror', 'Edgar', 'Ordoñez Ruiz', '-1g7F_JFqkY6jKOXvXnyOU7NSsRkc2iv', '$2y$13$iJacDX9RYax1o/iC22ew7Or50xmDwHvYeDzWar74ILp9y5KUl2nM6', NULL, 'mredgaror@gmail.com', 10, 1479277227, 1479277227, 0),
(2, 'mbobadilla', 'Miguel', 'Bobadilla', '7-v7dQn2vTPQoASx03s2ie8kx9qK9wFJ', '$2y$13$WDnvgndInKZ4e87OC2Ml/uNwE/sdud4TkhbRsdeSeWq.cbhb0eqw.', NULL, 'mbobadilla@outlook.com', 10, 1479412172, 1479412172, 0),
(3, 'fernando2', 'Miguel', 'Bobadilla', '9CYVbfHx5dS9rY0K3py70Dso9ReAAij5', '$2y$13$BejXkhPd/jqYBhxy2k04be6IFzpirbQ7U0kANbGeI5FPOOBxkJgxe', NULL, 'mbobadilla@hotmail.com', 10, 1480800137, 1480800137, 0),
(4, 'imvo', 'imvo', '2', 'lDCikHY02iXS3RSMBrL95OXY99GP2_uo', '$2y$13$bRwi7aiPiDtmdRvvO6/Eaua7own7KR1xwcBlTPFmPsN6f6jgZfoBO', NULL, 'branches@yii2.com', 10, 1480800322, 1480800322, 0),
(5, 'Lameramera', 'Elízabeth', 'Contreras', '_dBZkOr6rKmX6XNSRnT6eCxvuaR2sFF_', '$2y$13$6mk.yNLh5mulgUOIl9.xyOJQ4qYqplUGPUJ786/Vr79DfSnE0FEAS', NULL, 'econtreras6_7@hotmail.com', 10, 1480819402, 1480819402, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`actor_id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Indexes for table `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`director_id`);

--
-- Indexes for table `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`pelicula_id`);

--
-- Indexes for table `peliculas_has_actores`
--
ALTER TABLE `peliculas_has_actores`
  ADD PRIMARY KEY (`peliculas_pelicula_id`,`actores_actor_id`),
  ADD KEY `fk_peliculas_has_actores_actores1_idx` (`actores_actor_id`),
  ADD KEY `fk_peliculas_has_actores_peliculas1_idx` (`peliculas_pelicula_id`);

--
-- Indexes for table `peliculas_has_categorias`
--
ALTER TABLE `peliculas_has_categorias`
  ADD PRIMARY KEY (`peliculas_pelicula_id`,`categorias_categoria_id`),
  ADD KEY `fk_peliculas_has_categorias_categorias1_idx` (`categorias_categoria_id`),
  ADD KEY `fk_peliculas_has_categorias_peliculas_idx` (`peliculas_pelicula_id`);

--
-- Indexes for table `peliculas_has_directores`
--
ALTER TABLE `peliculas_has_directores`
  ADD PRIMARY KEY (`peliculas_pelicula_id`,`directores_director_id`),
  ADD KEY `fk_peliculas_has_directores_directores1_idx` (`directores_director_id`),
  ADD KEY `fk_peliculas_has_directores_peliculas1_idx` (`peliculas_pelicula_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actores`
--
ALTER TABLE `actores`
  MODIFY `actor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `directores`
--
ALTER TABLE `directores`
  MODIFY `director_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `pelicula_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `peliculas_has_actores`
--
ALTER TABLE `peliculas_has_actores`
  ADD CONSTRAINT `fk_peliculas_has_actores_actores1` FOREIGN KEY (`actores_actor_id`) REFERENCES `actores` (`actor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peliculas_has_actores_peliculas1` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peliculas_has_categorias`
--
ALTER TABLE `peliculas_has_categorias`
  ADD CONSTRAINT `fk_peliculas_has_categorias_categorias1` FOREIGN KEY (`categorias_categoria_id`) REFERENCES `categorias` (`categoria_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peliculas_has_categorias_peliculas` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `peliculas_has_directores`
--
ALTER TABLE `peliculas_has_directores`
  ADD CONSTRAINT `fk_peliculas_has_directores_directores1` FOREIGN KEY (`directores_director_id`) REFERENCES `directores` (`director_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_peliculas_has_directores_peliculas1` FOREIGN KEY (`peliculas_pelicula_id`) REFERENCES `peliculas` (`pelicula_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
