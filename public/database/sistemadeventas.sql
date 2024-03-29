-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 08:11:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemadeventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_almacen`
--

CREATE TABLE `tb_almacen` (
  `id_producto` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `stock` int(11) NOT NULL,
  `stock_minimo` int(11) DEFAULT NULL,
  `stock_maximo` int(11) DEFAULT NULL,
  `precio_compra` varchar(255) NOT NULL,
  `precio_venta` varchar(255) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `imagen` text DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_almacen`
--

INSERT INTO `tb_almacen` (`id_producto`, `codigo`, `nombre`, `descripcion`, `stock`, `stock_minimo`, `stock_maximo`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `imagen`, `id_usuario`, `id_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(3, 'P-00003', '1/4 Aceite 0W20 FULL SINTÉTICO Valvoline', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege tu motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de descomposición del motor y reparaciones costosas. Nuestra formulación exclusiva va más allá de los estándares de la industria para proteger tu motor. Está fortificado con aditivos mejorados para el desgaste y agentes que combaten la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar dentro de tu motor y acondicionadores de sellado premium para restaurar los sellos de envejecimiento y evitar fugas. Los modificadores de viscosidad superior y los aceites base de alta calidad ayudan a que funcione excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad, y probada con propósito, nuestra fórmula fue innovadora en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 58, 20, 100, '15', '20', '2023-06-12', '2023-06-12-01-48-58__Valvoline.jpg', 7, 13, '2023-06-12 13:48:58', '2023-10-24 23:15:14'),
(4, 'P-00004', 'Pachón Aceite 0W20 FULL SINTÉTICO Valvoline', 'El aceite de motor sintético completo Valvoline de alto kilometraje con tecnología Maxlife está especialmente formulado para motores de mayor kilometraje. El aceite de motor sintético completo Valvoline de alto kilometraje con tecnología Maxlife está formulado con aceites base sintéticos de la más alta calidad además de aditivos especiales para combatir los efectos del envejecimiento y aumentar la vida útil de tu motor.', 67, 20, 100, '95', '100', '2023-06-12', '2023-06-12-01-56-19__2.jpg', 7, 13, '2023-06-12 13:56:19', '0000-00-00 00:00:00'),
(5, 'P-00005', '1/4 Aceite 5W20 FULL SINTÉTICO Valvoline', 'Valvoline El aceite de motor sintético avanzado ofrece la máxima protección para automóviles, camiones y SUV que trabajan duro en las condiciones más duras. Diseñado con tecnología aditiva avanzada, está especialmente formulado para combatir el estrés severo del motor de: conducción de parada y marcha, temperaturas extremas y transporte y remolque. Cuando quieras mantener tu motor funcionando de la mejor manera, elige la máxima protección del aceite de motor sintético completo Valvoline Advanced.', 67, 20, 100, '13', '18', '2023-06-12', '2023-06-12-02-29-59__3.jpeg', 7, 13, '2023-06-12 14:29:59', '0000-00-00 00:00:00'),
(6, 'P-00006', 'Pachón Aceite 5W20 FULL SINTÉTICO Valvoline', 'El aceite de motor sintético avanzado ofrece la máxima protección para automóviles, camiones y SUV que trabajan duro en las condiciones más duras. Diseñado con tecnología aditiva avanzada, está especialmente formulado para combatir el estrés severo del motor de: conducción de parada y marcha, temperaturas extremas y transporte y remolque. Cuando quieras mantener tu motor funcionando de la mejor manera, elige la máxima protección del aceite de motor sintético completo Valvoline Advanced.', 60, 20, 100, '85', '90', '2023-06-12', '2023-06-12-02-34-56__3.jpg', 7, 13, '2023-06-12 14:34:56', '0000-00-00 00:00:00'),
(7, 'P-00007', '1/4 Aceite 5W30 FULL SINTÉTICO Valvoline', 'El aceite de motor está hecho de petróleo crudo y se usa para lubricar, limpiar y enfriar motores. Los tipos de aceite de motor incluyen aceites convencionales, sintéticos, diesel, de base biológica, híbridos (mezclas de convencionales y sintéticos) y reciclados. El aceite de motor varía en peso y viscosidad, así como los aditivos que algunos fabricantes agregan al aceite durante el proceso de refinación. Un sistema de código numérico creado por la Sociedad de Ingenieros Automotrices (SAE, por sus siglas en inglés) clasifica los aceites de motor según su viscosidad: cuanto mayor sea el número entre 0 y 60, más viscoso (más espeso) será el aceite. La mayoría de los aceites de motor de consumo se clasifican con dos números, y el primer número indica el rendimiento en climas fríos (invierno o \"W\").', 60, 20, 100, '13', '18', '2023-06-12', '2023-06-12-02-51-54__5.jpg', 7, 13, '2023-06-12 14:51:54', '0000-00-00 00:00:00'),
(8, 'P-00008', 'Pachón Aceite 5W30 FULL SINTÉTICO Valvoline', 'Los motores europeos necesitan un aceite de motor premium diseñado para ayudarlos a durar. Aceite de motor sintético completo para vehículos europeos Valvoline Es el aceite de motor especialmente desarrollado para prolongar la vida útil de los motores de gasolina y diésel fabricados en Europa. Nuestra fórmula exclusiva utiliza aditivos de desgaste superior, antioxidantes de primera calidad y detergentes añadidos para combatir el desgaste, resistir la descomposición del aceite y defenderse contra depósitos mejor que los estándares de la industria. Su excepcional gama de protección de temperatura garantiza que su motor estará defendido cuando el clima y las condiciones de la carretera se vuelvan difíciles. Este nivel superior de protección lo convierte en la mejor opción para la mayoría de los vehículos Audi, BMW, Mercedes-Benz, Porsche y VW. Diseñada con ingenio, probada con tenacidad y probada con propósito, nuestra fórmula fue innovada en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 60, 20, 100, '85', '90', '2023-06-12', '2023-06-12-02-55-18__6.jpg', 7, 13, '2023-06-12 14:55:18', '0000-00-00 00:00:00'),
(9, 'P-00009', '1/4 Aceite 10W30 FULL SINTÉTICO Valvoline', 'El aceite de motor Valvoline Daily Protection está especialmente formulado para superar los estándares de la industria de protección contra desgaste, depósitos y lodo, para ayudar a mantener los motores funcionando como nuevos. Desarrollado con aditivos de alta calidad y aceites base prémium, está diseñado para reducir el desgaste y proporcionar mayor protección contra la descomposición del aceite del motor en condiciones difíciles.', 70, 20, 100, '11', '16', '2023-06-12', '2023-06-12-02-57-57__7.jpg', 7, 13, '2023-06-12 14:57:57', '0000-00-00 00:00:00'),
(10, 'P-00010', 'Pachón Aceite 10W30 FULL SINTÉTICO Valvoline', 'El aceite para motor con alto kilometraje Valvoline Maxlife brinda un enfoque superior para los motores con más de 100,000 km. Tú dependes de tu vehículo y quieres que te dure el mayor tiempo posible, pero los altos kilometrajes pueden cambiar a tu motor: los sellos del motor se desgastan causando fugas, los depósitos elevan la temperatura y el desgaste del motor puede minimizar el desempeño de tu vehículo. Valvoline™ MaxLife™ está especialmente diseñado para extender la vida de los motores con más de 100,000 km. Diferente a los aceites regulares, el aceite para motor Valvoline MaxLife tiene aditivos adicionales para luchar contra las cuatro principales causas de la rotura del motor: fugas, depósitos, atascamientos y fricciones.', 60, 20, 100, '75', '80', '2023-06-12', '2023-06-12-03-01-27__8.jpg', 7, 13, '2023-06-12 15:01:27', '0000-00-00 00:00:00'),
(11, 'P-00011', '1/4 Aceite 10W40(Motocicleta) FULL SINTÉTICO Valvoline', 'El aceite sintético para motocicletas Valvoline™ de 4 tiempos ofrece un rendimiento en el que los propietarios de motocicletas y los equipos de carreras de todo el mundo confían. Ha sido elaborado para poder satisfacer las necesidades específicas de las motocicletas de alto rendimiento, entre otras, altas temperaturas, altas revoluciones por minuto y sistemas de embrague húmedo.', 70, 20, 100, '7', '12', '2023-06-12', '2023-06-12-03-04-50__9.jpg', 7, 13, '2023-06-12 15:04:50', '0000-00-00 00:00:00'),
(12, 'P-00012', '1/4 Aceite 20W50(Motocicleta) FULL SINTÉTICO Valvoline', 'El aceite sintético para motocicletas Valvoline™ de 4 tiempos ofrece un rendimiento en el que los propietarios de motocicletas y los equipos de carreras de todo el mundo confían. Ha sido elaborado para poder satisfacer las necesidades específicas de las motocicletas de alto rendimiento, entre otras, altas temperaturas, altas revoluciones por minuto y sistemas de embrague húmedo.', 70, 20, 100, '7', '12', '2023-06-12', '2023-06-12-03-06-45__10.jpg', 7, 13, '2023-06-12 15:06:45', '2023-06-12 17:44:21'),
(13, 'P-00013', '1/4 Aceite 0W20 MAX LIFE(semi-sintético) Valvoline', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege tu motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de descomposición del motor y reparaciones costosas. Nuestra formulación exclusiva va más allá de los estándares de la industria para proteger tu motor. Está fortificado con aditivos mejorados para el desgaste y agentes que combaten la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar dentro de tu motor y acondicionadores de sellado premium para restaurar los sellos de envejecimiento y evitar fugas. Los modificadores de viscosidad superior y los aceites base de alta calidad ayudan a que funcione excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad, y probada con propósito, nuestra fórmula fue innovadora en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 60, 20, 100, '6', '11', '2023-06-12', '2023-06-12-03-14-36__11.jpg', 7, 13, '2023-06-12 15:14:36', '0000-00-00 00:00:00'),
(14, 'P-00014', 'Pachón Aceite 0W20 MAX LIFE(semi-sintético) Valvoline', 'El aceite de motor sintético completo Valvoline de alto kilometraje con tecnología Maxlife está especialmente formulado para motores de mayor kilometraje. El aceite de motor sintético completo Valvoline de alto kilometraje con tecnología Maxlife está formulado con aceites base sintéticos de la más alta calidad además de aditivos especiales para combatir los efectos del envejecimiento y aumentar la vida útil de tu motor.', 50, 20, 100, '40', '45', '2023-06-12', '2023-06-12-03-20-03__12.jpg', 7, 13, '2023-06-12 15:20:03', '0000-00-00 00:00:00'),
(15, 'P-00015', '1/4 Aceite 5W20 MAX LIFE(semi-sintético) Valvoline', 'Si tienes más de 75,000 millas, es hora de ponerte más alerta contra las averías del motor. El aceite de motor de mezcla sintética Valvoline High Mileage para alto kilometraje con tecnología MaxLife está especialmente formulado para atacar las causas por las que se descomponen los motores con alto kilometraje: el desgaste, los depósitos, el lodo y las fugas. Desarrollado con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas. Esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una capa antidesgaste gruesa y duradera, proteger contra lodo y depósitos, rejuvenecer los sellos envejecidos del motor y resistir la descomposición del aceite del motor en condiciones extremas.', 80, 20, 100, '5', '10', '2023-06-12', '2023-06-12-03-43-30__1.jpeg', 7, 13, '2023-06-12 15:43:30', '0000-00-00 00:00:00'),
(16, 'P-00016', 'Pachón Aceite 5W20 MAX LIFE(semi-sintético) Valvoline', 'Si tienes más de 75,000 millas, es hora de ponerte más alerta contra las averías del motor. El aceite de motor de mezcla sintética Valvoline High Mileage para alto kilometraje con tecnología MaxLife está especialmente formulado para atacar las causas por las que se descomponen los motores con alto kilometraje: el desgaste, los depósitos, el lodo y las fugas. Desarrollado con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas. Esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una capa antidesgaste gruesa y duradera, proteger contra lodo y depósitos, rejuvenecer los sellos envejecidos del motor y resistir la descomposición del aceite del motor en condiciones extremas.', 38, 20, 100, '38', '43', '2023-06-12', '2023-06-12-03-45-18__2.jpg', 7, 13, '2023-06-12 15:45:18', '0000-00-00 00:00:00'),
(17, 'P-00017', '1/4 Aceite 5W30 MAX LIFE(semi-sintético) Valvoline', 'Valvoline MaxLife es el primer aceite de motor especialmente formulado para abordar las necesidades únicas de los motores con un kilometraje mayor. Valvoline MaxLife es una mezcla de materiales base convencionales sintéticos y de primera calidad con agentes acondicionadores de sellado, agentes de limpieza adicionales, aditivos antidesgaste adicionales y modificadores de fricción novedosos para mayor protección. MaxLife ofrece beneficios de rendimiento para motores de alto kilometraje, nuevos y reconstruidos. Si tienes más de 75,000 millas, es hora de ponerte más alerta contra las averías del motor. Cambia al aceite de motor MaxLife, la mezcla sintética con mucho más.', 75, 20, 100, '5', '10', '2023-06-12', '2023-06-12-03-47-17__3.jpg', 7, 13, '2023-06-12 15:47:17', '0000-00-00 00:00:00'),
(18, 'P-00018', 'Pachón Aceite 5W30 MAX LIFE(semi-sintético) Valvoline', 'Si tienes más de 75,000 millas, es hora de ponerte más alerta contra las averías del motor, con el primer aceite de motor de alto kilometraje del mundo. El aceite de motor de mezcla sintética Valvoline High Mileage para alto kilometraje con tecnología MaxLife está especialmente formulado para atacar las causas por las que se descomponen los motores con alto kilometraje: el desgaste, los depósitos, el lodo y las fugas. Desarrollada con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas, esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una capa antidesgaste gruesa y duradera, proteger contra lodo y depósitos, rejuvenecer los sellos envejecidos del motor y resistir la descomposición del aceite del motor en condiciones extremas.', 60, 20, 100, '40', '45', '2023-06-12', '2023-06-12-03-49-28__4.jpg', 7, 13, '2023-06-12 15:49:28', '0000-00-00 00:00:00'),
(19, 'P-00019', '1/4 Aceite 10W30 MAX LIFE(semi-sintético) Valvoline', 'El primer aceite de motor de alto kilometraje del mundo Valvoline High Mileage con tecnología MaxLife está especialmente formulado para atacar las causas de la avería del motor de alto kilometraje; desgaste, depósitos, lodos y fugas. Desarrollado con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75.000 millas. Esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una película antidesgaste gruesa y duradera, proteger contra lodos y depósitos, rejuvenecer los sellos del motor envejecidos y resistir la rotura del aceite del motor en condiciones extremas.', 50, 20, 100, '5', '9', '2023-06-12', '2023-06-12-03-54-12__5.jpg', 7, 13, '2023-06-12 15:54:12', '0000-00-00 00:00:00'),
(20, 'P-00020', 'Pachón Aceite 10W30 MAX LIFE(semi-sintético) Valvoline', 'Si tu automóvil tiene más de 75,000 millas, es hora de intensificar la lucha contra el desgaste del motor con el primer aceite de motor de alto kilometraje del mundo. El aceite de motor Valvoline High Mileage con tecnología MaxLife está especialmente formulado para atacar las causas de la avería del motor de alto kilometraje: desgaste, depósitos, lodos y fugas. Desarrollada con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas, esta fórmula de mezcla sintética de alta calidad está diseñada para proporcionar una película antidesgaste gruesa y duradera, proteger contra lodos y depósitos, rejuvenecer los sellos del motor envejecimiento y resistir la rotura del aceite del motor en condiciones extremas.', 50, 20, 100, '35', '40', '2023-06-12', '2023-06-12-03-56-14__6.jpg', 7, 13, '2023-06-12 15:56:14', '0000-00-00 00:00:00'),
(21, 'P-00021', '1/4 Aceite 10W40 MAX LIFE(semi-sintético) Valvoline', 'Si tu automóvil tiene más de 75,000 millas, es hora de intensificar la lucha contra el desgaste del motor con el primer aceite de motor de alto kilometraje del mundo. El aceite de motor Valvoline High Mileage con tecnología MaxLife está especialmente formulado para atacar las causas de la avería del motor de alto kilometraje: desgaste, depósitos, lodos y fugas. Desarrollada con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas, esta fórmula de mezcla sintética de alta calidad está diseñada para proporcionar una película antidesgaste gruesa y duradera, proteger contra lodos y depósitos, rejuvenecer los sellos del motor envejecimiento y resistir la rotura del aceite del motor en condiciones extremas.', 40, 20, 100, '40', '45', '2023-06-12', '2023-06-12-03-58-20__7.jpg', 7, 13, '2023-06-12 15:58:20', '0000-00-00 00:00:00'),
(22, 'P-00022', 'Pachón Aceite 10W40 MAX LIFE(semi-sintético) Valvoline', 'A través de su avanzada fórmula de mezcla sintética, proporciona una mayor protección contra el desgaste, acondicionadores especiales de sellado, detergentes añadidos y aditivos antioxidantes que ayudan a maximizar la vida útil de un motor. Su fórmula avanzada también se puede utilizar en automóviles más nuevos para ayudar a prevenir las averías del motor antes de que comiencen. Valvoline High Mileage para alto kilometraje con tecnología Maxlife cumple con la API SN con la especificación SN PLUS, protegiendo los motores de inyección directa de gasolina del preencendido a baja velocidad.', 33, 20, 100, '40', '45', '2023-06-12', '2023-06-12-04-00-38__8.jpg', 7, 13, '2023-06-12 16:00:38', '0000-00-00 00:00:00'),
(23, 'P-00023', '1/4 Aceite 20W50 MAX LIFE(semi-sintético) Valvoline', 'El primer aceite de motor de alto kilometraje del mundo. El aceite de motor de mezcla sintética Valvoline High Mileage para alto kilometraje con tecnología MaxLife está especialmente formulado para atacar las causas por las que se descomponen los motores con alto kilometraje, como el desgaste, los depósitos, el lodo y las fugas. Desarrollado con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas. Esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una capa antidesgaste gruesa y duradera, proteger contra lodo y depósitos, rejuvenecer los sellos envejecidos del motor y resistir la descomposición del aceite del motor en condiciones extremas.', 50, 20, 100, '5', '9', '2023-06-12', '2023-06-12-04-02-46__9.jpg', 7, 13, '2023-06-12 16:02:46', '0000-00-00 00:00:00'),
(24, 'P-00024', 'Pachón Aceite 20W50 MAX LIFE(semi-sintético) Valvoline', 'El primer aceite de motor de alto kilometraje del mundo. El aceite de motor de mezcla sintética Valvoline High Mileage para alto kilometraje con tecnología MaxLife está especialmente formulado para atacar las causas por las que se descomponen los motores con alto kilometraje, como el desgaste, los depósitos, el lodo y las fugas. Desarrollado con tecnología patentada MaxLife para maximizar la vida útil de los motores de más de 75,000 millas. Esta fórmula de mezcla sintética de primera calidad está diseñada para proporcionar una capa antidesgaste gruesa y duradera, proteger contra lodo y depósitos, rejuvenecer los sellos envejecidos del motor y resistir la descomposición del aceite del motor en condiciones extremas.', 82, 20, 100, '35', '40', '2023-06-12', '2023-06-12-04-05-40__3.jpeg', 7, 13, '2023-06-12 16:05:40', '0000-00-00 00:00:00'),
(25, 'P-00025', '1/4 Aceite ATF MAX LIFE(semi-sintético) Valvoline', 'Excelente rendimiento a baja y alta temperatura. Controla la fricción y brinda un rendimiento de cambio suave.\r\nPropiedades de antidesgaste y antioxidación superiores; contiene aditivos para reducir la espuma.\r\nCon licencia oficial y aprobado por Chrysler.', 50, 20, 100, '6', '10', '2023-06-12', '2023-06-12-04-08-21__re.png', 7, 13, '2023-06-12 16:08:21', '0000-00-00 00:00:00'),
(26, 'P-00026', 'Galon Aceite ATF MAX LIFE(semi-sintético) Valvoline', 'Formulado con aceites base totalmente sintéticos y modificadores de fricción de larga duración para ayudar a mejorar el cambio suave, eliminar el deslizamiento y el estremecimiento, evitar el desgaste del embrague y mejorar la capacidad de conducción por más tiempo que los fluidos convencionales.\r\nLos acondicionadores de sello de alto rendimiento mantienen y preservan la elasticidad de los sellos para ayudar a prevenir fugas en transmisiones de alto kilometraje. Desarrollado con tecnología anti desgaste para ayudar a mejorar la durabilidad de la transmisión.', 40, 20, 100, '35', '40', '2023-06-12', '2023-06-12-04-10-14__ttt.jpg', 7, 13, '2023-06-12 16:10:14', '0000-00-00 00:00:00'),
(27, 'P-00027', '1/4 Aceite 15W40 (Diesel) MAX LIFE(semi-sintético) Valvoline', 'es el aceite de motor de alto rendimiento que su vehículo necesita. Diseñado para proteger su motor contra la acumulación de lodos y desgaste, este aceite aumenta la eficiencia del combustible y prolonga la vida útil del motor. ¡Proteja su inversión con el mejor aceite disponible en el mercado!', 21, 20, 100, '35', '40', '2023-06-12', '2023-06-12-04-13-13__di.jpg', 7, 13, '2023-06-12 16:13:13', '0000-00-00 00:00:00'),
(28, 'P-00028', '1/4 Aceite 5W20 PREMIUM(mineral) Valvoline ', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage 5W-20 con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege su motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de avería del motor y reparaciones costosas. Nuestra exclusiva formulación va más allá de los estándares de la industria para proteger su motor. Está fortificado con aditivos de desgaste mejorados y agentes de lucha contra la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar el interior de su motor y acondicionadores de sellado premium para restaurar los sellos envejecidos y evitar fugas. Los modificadores de viscosidad superiores y los aceites base de alta calidad lo ayudan a funcionar excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad y probada con propósito, nuestra fórmula fue innovada en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 45, 20, 100, '5', '8', '2023-06-12', '2023-06-12-05-08-04__1.jpg', 7, 13, '2023-06-12 17:08:04', '2023-06-12 17:29:48'),
(29, 'P-00029', 'Pachón 5W20 PREMIUM(mineral) Valvoline', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage 5W-20 con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege su motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de avería del motor y reparaciones costosas. Nuestra exclusiva formulación va más allá de los estándares de la industria para proteger su motor. Está fortificado con aditivos de desgaste mejorados y agentes de lucha contra la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar el interior de su motor y acondicionadores de sellado premium para restaurar los sellos envejecidos y evitar fugas. Los modificadores de viscosidad superiores y los aceites base de alta calidad lo ayudan a funcionar excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad y probada con propósito, nuestra fórmula fue innovada en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 50, 20, 100, '30', '35', '2023-06-12', '2023-06-12-05-09-48__2.jpg', 7, 13, '2023-06-12 17:09:48', '2023-06-12 17:30:18'),
(30, 'P-00030', '1/4 Aceite 5W30 PREMIUM(mineral)  Valvoline', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege su motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de avería del motor y reparaciones costosas. Nuestra exclusiva formulación va más allá de los estándares de la industria para proteger su motor. Está fortificado con aditivos de desgaste mejorados y agentes de lucha contra la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar el interior de su motor y acondicionadores de sellado premium para restaurar los sellos envejecidos y evitar fugas. Los modificadores de viscosidad superiores y los aceites base de alta calidad lo ayudan a funcionar excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad y probada con propósito, nuestra fórmula fue innovada en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 60, 20, 100, '5', '8', '2023-06-12', '2023-06-12-05-13-32__3.jpg', 7, 13, '2023-06-12 17:13:32', '2023-06-12 17:29:11'),
(31, 'P-00031', 'Pachón 5W30 PREMIUM(mineral) Valvoline', 'Actualizar tu aceite de motor a Valvoline Full Synthetic High Mileage con tecnología MaxLife puede ayudarte a aumentar la longevidad de tu automóvil, camión o SUV con más de 75,000 millas. Está demostrado que protege su motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de avería del motor y reparaciones costosas. Nuestra exclusiva formulación va más allá de los estándares de la industria para proteger su motor. Está fortificado con aditivos de desgaste mejorados y agentes de lucha contra la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar el interior de su motor y acondicionadores de sellado premium para restaurar los sellos envejecidos y evitar fugas. Los modificadores de viscosidad superiores y los aceites base de alta calidad lo ayudan a funcionar excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad y probada con propósito, nuestra fórmula fue innovada en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 60, 20, 100, '30', '35', '2023-06-12', '2023-06-12-05-15-28__4.jpg', 7, 13, '2023-06-12 17:15:28', '2023-06-12 17:30:46'),
(32, 'P-00032', '1/4 Aceite 10W30 PREMIUM(mineral)  Valvoline', 'Está demostrado que protege tu motor de alto kilometraje contra el desgaste, la fricción, el calor y los depósitos, las principales causas de descomposición del motor y reparaciones costosas. Nuestra formulación exclusiva va más allá de los estándares de la industria para proteger tu motor. Está fortificado con aditivos mejorados para el desgaste y agentes que combaten la fricción para proteger los componentes críticos del motor, detergentes adicionales para limpiar dentro de tu motor y acondicionadores de sellado premium para restaurar los sellos de envejecimiento y evitar fugas. Los modificadores de viscosidad superior y los aceites base de alta calidad ayudan a que funcione excepcionalmente tanto en temperaturas altas como bajas. Diseñada con ingenio, probada con tenacidad, y probada con propósito, nuestra fórmula fue innovadora en Estados Unidos con un siglo y medio de experiencia práctica de la marca original de aceite de motor.', 20, 20, 100, '4', '7', '2023-06-12', '2023-06-12-05-20-39__5.jpg', 7, 13, '2023-06-12 17:20:39', '2023-06-12 17:31:07'),
(33, 'P-00033', 'Galón 10W30 PREMIUN(mineral) Valvoline', 'SE UTILIZA PARA MOTORES A GASOLINA\r\nTIENE ADITIVOS ANTIDESGASTE QUE MEJORAN LA PROTECCIÓN Y PROPORCIONAN UN CONTROL DE OXIDACIÓN\r\nMANTIENE EL MOTOR LIMPIO MINIMIZANDO LA FORMACIÓN DE DEPÓSITO\r\nCUMPLE ESPECIFICACIÓN API SN PLUS\r\n', 50, 20, 100, '22', '26', '2023-06-12', '2023-06-12-05-23-11__GetMultimedia.jpeg', 7, 13, '2023-06-12 17:23:11', '0000-00-00 00:00:00'),
(34, 'P-00034', '1/4 Aceite 20W50 PREMIUN(mineral)  Valvoline', 'La fórmula mineral está formulada con tecnología de avanzados aditivos y bases de alta calidad altamente refinadas que protegen a los motores actuales contra depósitos, contaminación, viscosidad, y fallo térmico bajo severas condiciones de servicio. Ofrece protección en cualquier etapa de la vida del motor en multi-viscosidades de 20W50, 15W40 y 10W40, y mono-grado de 50,40 y 30.', 58, 20, 100, '5', '8', '2023-06-12', '2023-06-12-05-25-28__6.jpg', 7, 13, '2023-06-12 17:25:28', '0000-00-00 00:00:00'),
(35, 'P-00035', 'Galón 20W50 PREMIUM(mineral) Valvoline', 'Valvoline Premium Protection™ Mineral ofrece calidad premium a precios atractivos para mantener una inigualable oferta convencional y aumentar sus ventas. Está formulada con tecnología de avanzados aditivos y bases de alta calidad altamente refinadas protegen a los motores actuales contra depósitos, contaminación, y fallo térmico bajo severas condiciones de servicio. También ofrece protección en cualquier etapa de la vida en motores que el fabricante requiera viscosidad 20W50.  Supere las expectativas y aumente los estándares de lo que pueden ser los aceites convencionales y asegúrese de que sus clientes obtienen el producto adecuado para la protección adecuada en viscosidades altas, con Valvoline Premium Protection™ Mineral.', 45, 20, 100, '30', '35', '2023-06-12', '2023-06-12-05-28-38__image-upload1628891706.png', 7, 13, '2023-06-12 17:28:38', '0000-00-00 00:00:00'),
(36, 'P-00036', '1/4 Aceite ATF PREMIUM(mineral)  Valvoline', 'Valvoline ATF es un fluido de transmisión automática de mezcla única que cumple con Chrysler MS-9602. Está diseñado como un líquido de llenado de fábrica para todas las transmisiones y transejes automáticos Chrysler Corporation de 1998 y posteriores.', 62, 20, 100, '5', '8', '2023-06-12', '2023-06-12-05-34-31__descarga.jpeg', 7, 13, '2023-06-12 17:34:31', '0000-00-00 00:00:00'),
(37, 'P-00037', 'Galón Aceite ATF PREMIUM(mineral) Valvoline', 'El aceite de motor Valvoline está especialmente formulado para superar los estándares de la industria de protección contra desgaste, depósitos y lodo, para ayudar a mantener los motores funcionando como nuevos. Desarrollado con aditivos de alta calidad y aceites base prémium, está diseñado para fluir fácilmente a temperaturas frías, reduciendo el desgaste al encender el automóvil, y proporcionando protección adicional contra la descomposición del aceite del motor en condiciones difíciles. Para una mayor eficiencia de combustible, elige la mezcla sintética de protección diaria 5W-20 o 5W-30. Desarrollado con tecnología de baja fricción para un fuerte ahorro de combustible.', 65, 20, 100, '40', '45', '2023-06-12', '2023-06-12-05-37-55__descarga (1).jpeg', 7, 13, '2023-06-12 17:37:55', '0000-00-00 00:00:00'),
(38, 'P-00038', '1/4 Aceite 15W40(Diesel) PREMIUM(mineral)  Valvoline', 'El aceite para motor Valvoline All-Fleet E700 se recomienda para uso en motores diésel turboalimentados y de aspiración natural y proporciona un excelente rendimiento en servicio dentro y fuera de la carretera, incluidas aplicaciones agrícolas, de construcción y mineras', 88, 20, 100, '7', '9', '2023-06-12', '2023-06-12-05-43-47__rrrrrrrrr.jpg', 7, 13, '2023-06-12 17:43:47', '0000-00-00 00:00:00'),
(39, 'P-00039', 'Galón 15W40(Diesel) PREMIUM(mineral) Valvoline', 'Valvoline 15W40 es un aceite de motor SAE 15W-40 para servicio pesado formulado para proporcionar un rendimiento óptimo en motores diésel que operan bajo una amplia variedad de condiciones de servicio, incluyendo motores con recirculación de gases de escape enfriados (EGR). El aceite para motor Valvoline All-Fleet E700 se recomienda para uso en motores diésel turboalimentados y de aspiración natural y proporciona un excelente rendimiento en servicio dentro y fuera de la carretera, incluidas aplicaciones agrícolas, de construcción y mineras.', 56, 20, 100, '30', '35', '2023-06-12', '2023-06-12-05-47-19__4.png', 7, 13, '2023-06-12 17:47:19', '0000-00-00 00:00:00'),
(40, 'P-00040', 'Galón 15W40 G-Blue PREMIUM(mineral) Valvoline', 'Lubricante premium diseñado para proteger los motores alimentados con diésel, gas natural o gasolina que trabajan en condiciones severas de servicio en aplicaciones dentro y fuera de la carretera.\r\nQuímica exhaustivamente probada en motores de diésel y gas natural.\r\nLa excelente resistencia a la oxidación y la retención del TBN permiten una larga vida útil del aceite.\r\nProtección destacada contra el desgaste.\r\nProtección superior contra los depósitos en comparación con los requisitos de la industria\r\nPremium Blue One Solution 9200 15W-40 está certificado por el servicio API CK-4, CJ-4, CI-4 PLUS, CI-4, CH-4, y SN.\r\nPremium Blue One Solution 9200 15W-40 está respaldado por Cummins y cuenta con las aprobaciones CES 20092, CES 20086 y CES 20085 de Cummins. Recomendado para las aplicaciones donde se especifican los aceites Mack EOS-4.5, Volvo VDS-4.5, Detroit Diesel DFS 93K222 o Renault VI RLD-4.', 45, 20, 100, '41', '45', '2023-06-12', '2023-06-12-05-52-55__one solution.jpg', 7, 13, '2023-06-12 17:52:55', '0000-00-00 00:00:00'),
(41, 'P-00041', '1/4 Aceite 20W50 4T (Motocicleta) PREMIUM(mineral)  Valvoline', 'El aceite de motocicleta Valvoline™ de 4 tiempos contiene una mezcla patentada de aceites base de alta calidad y tecnología aditiva avanzada para ayudarte a lograr el máximo rendimiento de tu máquina. Desarrollado para proteger los motores y los sistemas de embrague húmedo en condiciones de altas RPM y altas temperaturas para maximizar la potencia y el cambio suave.', 56, 20, 100, '5', '9', '2023-06-12', '2023-06-12-05-55-41__es.jpg', 7, 13, '2023-06-12 17:55:41', '0000-00-00 00:00:00'),
(42, 'P-00042', '1/4 Aceite 10W40(Motocicleta) PREMIUM(mineral)  Valvoline', 'Los aceites de motor automotrices no pueden manejar las demandas de motocicletas de 4 tiempos, cruceros y bicicletas todoterreno de alta revolución. Pero el aceite de motor convencional Valvoline de 4 tiempos SAE 10W-40 para motocicleta Está específicamente formulado para maximizar la vida útil del motor de motocicletas con sistemas de embrague húmedo. Nuestra mezcla patentada de aceites base de alta calidad y tecnología aditiva avanzada está diseñada para ayudar a tu viaje a lograr el máximo rendimiento, cumpliendo o superando todas las especificaciones establecidas por la Organización Japonesa de Estándares Automotrices (JASO) y el Instituto Americano del Petróleo (API). Proporciona una protección superior del embrague húmedo y ayuda a prevenir el deslizamiento para garantizar un cambio suave y una máxima transferencia de potencia. Mientras que los aditivos avanzados protegen contra los depósitos, la corrosión y el espesamiento del aceite que pueden disminuir el rendimiento y la longevidad. Los agentes de limpieza y dispersantes especiales ayudan a proteger su motor de los subproductos de combustión que causan corrosión, mientras que los mejoradores de viscosidad estable al cizallamiento resisten la rotura de la película de aceite y los aditivos de silicona evitan la formación de espuma para ayudar a mantener una protección lubricante adecuada. Mantén tu bicicleta funcionando como una máquina bien engrasada con Valvoline, la marca de aceite de motor de confianza durante más de 150 años', 78, 20, 100, '11', '15', '2023-06-12', '2023-06-12-05-57-27__7.jpg', 7, 13, '2023-06-12 17:57:27', '0000-00-00 00:00:00'),
(43, 'P-00043', '1/4 Aceite 20W50(Motocicleta) PREMIUM(mineral)  Valvoline', 'Los aceites de motor automotrices no pueden manejar las demandas de motocicletas de 4 tiempos, cruceros y bicicletas todoterreno de alta revolución. Pero el aceite de motor convencional Valvoline de 4 tiempos SAE 10W-40 para motocicleta Está específicamente formulado para maximizar la vida útil del motor de motocicletas con sistemas de embrague húmedo. Nuestra mezcla patentada de aceites base de alta calidad y tecnología aditiva avanzada está diseñada para ayudar a tu viaje a lograr el máximo rendimiento, cumpliendo o superando todas las especificaciones establecidas por la Organización Japonesa de Estándares Automotrices (JASO) y el Instituto Americano del Petróleo (API). Proporciona una protección superior del embrague húmedo y ayuda a prevenir el deslizamiento para garantizar un cambio suave y una máxima transferencia de potencia. Mientras que los aditivos avanzados protegen contra los depósitos, la corrosión y el espesamiento del aceite que pueden disminuir el rendimiento y la longevidad. Los agentes de limpieza y dispersantes especiales ayudan a proteger su motor de los subproductos de combustión que causan corrosión, mientras que los mejoradores de viscosidad estable al cizallamiento resisten la rotura de la película de aceite y los aditivos de silicona evitan la formación de espuma para ayudar a mantener una protección lubricante adecuada. Mantén tu bicicleta funcionando como una máquina bien engrasada con Valvoline, la marca de aceite de motor de confianza durante más de 150 años', 56, 20, 100, '20', '25', '2023-06-12', '2023-06-12-06-00-33__1.jpg', 7, 13, '2023-06-12 18:00:33', '0000-00-00 00:00:00'),
(44, 'P-00044', '1/4 Aceite 2TT PREMIUM(mineral)  Valvoline', 'Homologación del aceite del motor 2 T API TC, JASO FB, ISO L-EGD Bueno para sistemas de lubricación separados diseñados para reducir las emisiones de humo. Evite la contaminación y los depósitos de carbono en las bujías y mantiene el motor limpio. Mezclar la relación combustible / aceite según el fabricante del motor. Aceite de alto rendimiento de Valvoline Vehículos y piezas Partes y accesorios de vehículos Mantenimiento y cuidado de automóviles por fluidos automotrices Nivel de calidad del aceite del motor. Desarrolló la red global de laboratorios de Ashland y prueba productos innovadores de alto rendimiento', 65, 20, 100, '14', '17', '2023-06-12', '2023-06-12-06-03-45__2.jpg', 7, 13, '2023-06-12 18:03:45', '0000-00-00 00:00:00'),
(45, 'P-00045', '1/4 Aceite CVT PREMIUM(mineral)  Valvoline', 'Homologación del aceite del motor CVT Bueno para sistemas de lubricación separados diseñados para reducir las emisiones de humo. Evite la contaminación y los depósitos de carbono en las bujías y mantiene el motor limpio. Mezclar la relación combustible / aceite según el fabricante del motor. Aceite de alto rendimiento de Valvoline Vehículos y piezas Partes y accesorios de vehículos Mantenimiento y cuidado de automóviles por fluidos automotrices Nivel de calidad del aceite del motor. Desarrolló la red global de laboratorios de Ashland y prueba productos innovadores de alto rendimiento', 65, 20, 100, '11', '15', '2023-06-12', '2023-06-12-06-05-28__3.jpg', 7, 13, '2023-06-12 18:05:28', '0000-00-00 00:00:00'),
(46, 'P-00046', '1/4 Aceite ATF+4 PREMIUM(mineral)  Valvoline', 'Beneficios del aceite para transmisión automática Valvoline™ ATF+4®:: \r\nExcelente rendimiento a baja y alta temperatura. Controla la fricción y brinda un rendimiento de cambio suave.\r\nPropiedades de antidesgaste y antioxidación superiores; contiene aditivos para reducir la espuma.\r\nCon licencia oficial y aprobado por Chrysler.\r\nReemplaza ATF+3®.', 44, 20, 100, '7', '10', '2023-06-12', '2023-06-12-06-08-34__4.png', 7, 13, '2023-06-12 18:08:34', '0000-00-00 00:00:00'),
(47, 'P-00047', '1/4 Aceite Mercon V PREMIUM(mineral)  Valvoline', 'Beneficios del aceite de transmisión Valvoline ATF for Mercon®  V Applications: \r\nMejor protección antisacudidas para un rendimiento de cambio suave y protección contra deslizamientos.\r\nResistencia superior a la rotura por viscosidad para mejor protección contra el desgaste en rangos de alta y baja temperatura.\r\nMinimiza el atascamiento y los depósitos de barniz mientras que protege los materiales de sellado de la transmisión.\r\nRecomendado para la mayoría de los vehículos Ford, incluidos Lincoln y Mercury, excepto aquellos que especifican fluidos MERCON® SP o de tipo Fexcep', 50, 20, 100, '7', '10', '2023-06-12', '2023-06-12-06-10-35__5.png', 7, 13, '2023-06-12 18:10:35', '0000-00-00 00:00:00'),
(48, 'P-00048', 'Galón Aceite 10W30 Blue Diesel PREMIUM(mineral)  Valvoline', 'El aceite de motor Premium Blue™ de Valvoline™ Premium Blue™, una mezcla sintética para equipo pesado, ofrece una protección superior para camiones de ejes y equipos de trabajo pesados. La tecnología patentada One Solution está diseñada para motores de peso pesado que usan diésel, gas o gas natural tanto en carretera como en otros lugares. El aceite de motor \"The Only One\"™ es el único avalado y recomendado por Cummins y cuenta con una resistencia excepcional a la oxidación, una excelente protección contra el desgaste y un rendimiento superior de depósito en comparación con los requisitos de la industria. El aceite para motor Premium Blue™ de Valvoline™ es una mezcla sintética que sabe cómo hacer que los rudos se pongan en marcha', 45, 20, 100, '35', '39', '2023-06-12', '2023-06-12-06-17-51__5.jpg', 7, 13, '2023-06-12 18:17:51', '0000-00-00 00:00:00'),
(49, 'P-00049', '1/4 Aceite 15W40 All Fleet PREMIUM(mineral)  Valvoline', 'El aceite de motor  está formulado para proporcionar un rendimiento óptimo en motores diesel equipados con tratamiento de emisiones moderno que operan bajo una variedad de condiciones de servicio, incluyendo motores con recirculación de gases de escape refrigerados con filtros de partículas (DPF). Se mezclan con existencias de primera calidad y química de aditivos de alta calidad', 45, 20, 100, '12', '16', '2023-06-12', '2023-06-12-06-22-08__7.jpg', 7, 13, '2023-06-12 18:22:08', '0000-00-00 00:00:00'),
(50, 'P-00050', 'Galón Aceite 15W40 All Fleet PREMIUM(mineral)  Valvoline', 'El aceite de motor  está formulado para proporcionar un rendimiento óptimo en motores diesel equipados con tratamiento de emisiones moderno que operan bajo una variedad de condiciones de servicio, incluyendo motores con recirculación de gases de escape refrigerados con filtros de partículas (DPF). Se mezclan con existencias de primera calidad y química de aditivos de alta calidad.', 50, 20, 100, '20', '24', '2023-06-12', '2023-06-12-06-25-16__9.jpg', 7, 13, '2023-06-12 18:25:16', '0000-00-00 00:00:00'),
(51, 'P-00051', 'Cubeta Aceite 15W40 All Fleet PREMIUM(mineral)  Valvoline', 'Valvoline™ All-Fleet PLUS es un lubricante multigrado, de nueva generación formulado con básicos vírgenes y un paquete de aditivos que satisfacen el más alto nivel de calidad y desempeño de los motores a diésel de alto rendimiento y bajas emisiones como son los sistemas con EGR, incluyendo los motores de fabricación original (OEM), que estén aún en periodos de garantía. Es un lubricante que brinda una excelente protección contra la formación de depósitos y lodos en altas y bajas temperaturas.', 70, 20, 100, '82', '88', '2023-06-12', '2023-06-12-06-29-30__12.jpg', 7, 13, '2023-06-12 18:29:30', '0000-00-00 00:00:00'),
(52, 'P-00052', 'Pachón Aceite 40 Diesel All Fleet PREMIUM(mineral)  Valvoline', 'Valvoline ™ All-Fleet ™ E700 Engine Oil es un aceite de motor SAE 15W-40 para servicio pesado formulado para proporcionar un rendimiento óptimo en motores diésel que operan bajo una amplia variedad de condiciones de servicio, incluyendo motores con recirculación de gases de escape enfriados (EGR). El aceite para motor Valvoline All-Fleet E700 se recomienda para uso en motores diésel turboalimentados y de aspiración natural y proporciona un excelente rendimiento en servicio dentro y fuera de la carretera, incluidas aplicaciones agrícolas, de construcción y mineras.', 45, 20, 100, '25', '31', '2023-06-12', '2023-06-12-06-40-26__8.png', 7, 13, '2023-06-12 18:40:26', '0000-00-00 00:00:00'),
(53, 'P-00053', '1/4 Aceite 25W60 ALL FLEET PREMIUM(mineral)  Valvoline', 'Valvoline All-Fleet Alta Visc. 25W-60 CF-4/SG es un lubricante multigrado que ha sido cuidadosamente formulado usando bases vírgenes altamente refinadas en combinación con un paquete de aditivos de alta tecnología, que les imparten excelentes propiedades lubricantes, para cubrir satisfactoriamente las más severas condiciones de operación en vehículos con desgaste extremo con más de 100,000 kilómetros, que necesitan una protección superior contra la corrosión, herrumbre, desgaste y formación de depósito', 45, 20, 100, '7', '12', '2023-06-12', '2023-06-12-06-44-12__9.png', 7, 13, '2023-06-12 18:44:12', '0000-00-00 00:00:00'),
(54, 'P-00054', 'Pachón Aceite 25W60 ALL FLEET PREMIUM(mineral)  Valvoline', 'Lubricante mineral diseñado para motores diesel y nafteros turboalimentados o de aspiracion natural.\r\nFormulado para controlar los depositos y el consumo excesivo de lubricante de motores con alto desgaste o que trabajan a temperaturas elevadas. API CF-4 / SL.', 55, 20, 100, '26', '31', '2023-06-12', '2023-06-12-06-50-39__90.png', 7, 13, '2023-06-12 18:50:39', '0000-00-00 00:00:00'),
(55, 'P-00055', '1/4 Aceite SAE 90 PREMIUM(mineral)  Valvoline', 'Aceite lubricante para transmisiones, del tipo mineral puro no corrosivo, hecho con aceites básicos vírgenes refinados que proveen una excelente lubricidad y provocan una resistente película adherente y tenaz entre las partes metálicas en movimiento.', 55, 20, 100, '5', '7', '2023-06-12', '2023-06-12-06-58-18__13.jpg', 7, 13, '2023-06-12 18:58:18', '0000-00-00 00:00:00'),
(56, 'P-00056', '1/4 Aceite SAE 140 PREMIUM(mineral)  Valvoline', 'Aceite lubricante para transmisiones, del tipo mineral puro no corrosivo, hecho con aceites básicos vírgenes refinados que proveen una excelente lubricidad y provocan una resistente película adherente y tenaz entre las partes metálicas en movimiento', 55, 20, 100, '5', '7', '2023-06-12', '2023-06-12-06-59-44__14.jpg', 7, 13, '2023-06-12 18:59:44', '0000-00-00 00:00:00'),
(57, 'P-00057', '1/4 Aceite 80W90 PREMIUM(mineral)  Valvoline', 'Los aceites de motor de mezcla sintética trabajan más duro y más tiempo que los aceites convencionales para proporcionar una mayor protección del motor. Y, en temperaturas más frías, los aceites de mezcla sintética mantienen su viscosidad, lo que le da protección a tu motor incluso al arranque. Los aceites convencionales y las mezclas sintéticas son totalmente compatibles, por lo que puedes cambiar a la protección avanzada de Durablend sin riesgo para tu vehículo.', 35, 20, 100, '7', '10', '2023-06-12', '2023-06-12-07-01-30__712p4Ft2HaL.__AC_SX300_SY300_QL70_FMwebp_.webp', 7, 13, '2023-06-12 19:01:30', '2023-06-12 19:06:06'),
(58, 'P-00058', '1/4 Aceite 85W140 PREMIUM(mineral)  Valvoline', 'Son lubricantes formulados con aceites vírgenes y un paquete de aditivos que protegen a los engranes contra la herrumbre, corrosión y oxidación. Sus aditivos de Extrema Presión (EP), en base a Azufre y Fósforo, así como los mejoradores del índice de viscosidad, lo hacen apropiado para los trabajos en condiciones extremas de temperatura y carga, presentes en los diferenciales.', 55, 20, 100, '7', '9.5', '2023-06-12', '2023-06-12-07-03-13__666.png', 7, 13, '2023-06-12 19:03:13', '2023-06-13 12:03:37'),
(59, 'P-00059', '1/4 Aceite 40 Pennzoil', 'Pennzoil aceite de motor es un aceite tradicional, base fortificada con agentes de limpieza activa para prevenir continuamente la suciedad y contaminantes de Turning into performance-robbing depósitos, ayudando a mantener su motor limpio y capacidad de respuesta. De hecho, Pennzoil aceite de motor ayuda a limpiar el lodo Lesser aceites dejar y mantiene la limpieza de todo el camino a tu próximo cambio de aceite. Tamaño: 1 Qt. SAE 40 W z-7 aceite de motor API Spec GF5 ahora puede ser utilizado en sistemas hidráulicos, compresores de aire y industrial circulante sistemas donde un aceite de motor se recomienda fabricado en EE.', 55, 20, 100, '6.50', '9.50', '2023-06-13', '2023-06-13-12-10-37__418+aVn7HoL._AC_UF894,1000_QL80_.jpg', 7, 13, '2023-06-13 12:10:37', '0000-00-00 00:00:00'),
(60, 'P-00060', 'Galón Aceite 40 Pennzoil', 'Pennzoil, QT, aceite de motor Z-7 de 40 W.', 55, 20, 100, '22', '25.50', '2023-06-13', '2023-06-13-02-04-06__4158HRZsVVL._AC_SX425_.jpg', 7, 13, '2023-06-13 14:04:06', '0000-00-00 00:00:00'),
(61, 'P-00061', '1/4 Aceite 20W50 Pennzoil', 'El aceite de motor Pennzoil SAE 20W-50 es un aceite de motor convencional con tecnología de limpieza activa, formulado para ayudar a evitar que la suciedad, los lodos y los contaminantes se conviertan en depósitos que roban el rendimiento. Adecuado para todos los motores de gasolina de automóviles, SUV y camionetas ligeras y camiones, el aceite de motor Pennzoil proporciona una protección probada contra el desgaste, superando los estándares más duros de la industria basados en API SN. Proporciona un equilibrio entre reducir las pérdidas por fricción y protección contra el desgaste dañino del motor al entrar entre las partes móviles para evitar la fricción. Para obtener una lista completa de aprobaciones y recomendaciones de equipos, consulta tu mostrador de ayuda técnica local de Shell y consulta siempre el manual de propietario.', 55, 20, 100, '6', '9.50', '2023-06-13', '2023-06-13-02-06-24__71mYvM4e-EL._AC_SX425_PIbundle-6,TopRight,0,0_SH20_.jpg', 7, 13, '2023-06-13 14:06:24', '0000-00-00 00:00:00'),
(62, 'P-00062', 'Pachón Aceite 20W50 Pennzoil', 'Aceite de motor multigrado SAE 20W50 es adecuado para todos los motores en los cuales el manual del fabricante recomienda API SN u otra especificacion inferior a la Clasificaciones de Servicio API para este grado de viscosidad. Esto incluye algunos vehiculos mas antiguos o vehiculos modificados. Este producto cuenta con aditivos que controlan los depositos o sedimento que se generan en las condiciones mas severas de manejo en las ciudades.', 50, 20, 100, '15', '20', '2023-06-13', '2023-06-13-02-11-14__Pennzoil_20W-50.jpg', 7, 13, '2023-06-13 14:11:14', '2023-06-13 14:11:26');
INSERT INTO `tb_almacen` (`id_producto`, `codigo`, `nombre`, `descripcion`, `stock`, `stock_minimo`, `stock_maximo`, `precio_compra`, `precio_venta`, `fecha_ingreso`, `imagen`, `id_usuario`, `id_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(63, 'P-00063', '1/4 Aceite 10W30 Pennzoil', 'Aceite de motor Pennzoil del fabricante del líder aceite de motor en Estados Unidos, una fórmula convencional patentada avanzada con agentes de limpieza activos. No solo ayuda a evitar que la suciedad y los contaminantes se conviertan en depósitos que afecten el rendimiento, sino que también limpia los lodos. Porque en Pennzoil sabemos que un motor más limpio está mejor protegido y tiene una mejor capacidad de respuesta. Cumple o supera la protección del motor requerida por ILSAC GF-5 (SAE 5W-20, SAE 5W-30, SAE 10W-30), o API SN (SAE 10W-40, 20W-50), y está especialmente formulado para proporcionar una protección adicional contra los efectos nocivos de la conducción con paradas y arranques y el funcionamiento del motor a altas y bajas temperaturas.', 55, 20, 100, '6', '9', '2023-06-13', '2023-06-13-02-14-03__1.jpg', 7, 13, '2023-06-13 14:14:03', '0000-00-00 00:00:00'),
(64, 'P-00064', 'Pachón Aceite 10W30 Pennzoil', 'El aceite de motor Pennzoil está formulado con tecnología de limpieza activa. En Pennzoil estamos comprometidos con la ingeniería de aceites de motor que están probados para proteger su motor. Es por eso que fortificamos el aceite de motor Pennzoil para ayudar a evitar que la suciedad y los contaminantes se conviertan en depósitos que roban el rendimiento, ayudando a mantener los motores limpios y receptivos', 55, 20, 100, '15', '20', '2023-06-13', '2023-06-13-02-16-52__2.jpg', 7, 13, '2023-06-13 14:16:52', '0000-00-00 00:00:00'),
(65, 'P-00065', '1/4 Aceite 15W40 Pennzoil', 'Aceite Pennzoil Motordiesel 15W40 - 1 Qt', 50, 20, 100, '7', '9.50', '2023-06-13', '2023-06-13-02-25-42__4.jpg', 7, 13, '2023-06-13 14:25:42', '0000-00-00 00:00:00'),
(66, 'P-00066', 'Pachón Aceite 15W40 Pennzoil', 'Aceite Pennzoil P Motor Gasoli 15W40 Gl', 55, 20, 100, '15', '20', '2023-06-13', '2023-06-13-02-28-13__6.png', 7, 13, '2023-06-13 14:28:13', '0000-00-00 00:00:00'),
(67, 'P-00067', '1/4 Aceite 5W20 Full Sintético Pennzoil', 'Aceite para motor pennzoil platinum\r\nPresentación 1 qt (946 ml)\r\nFórmula sintética viscosidad 5w-20\r\nCompleta protección y optimización\r\nAdecuado para motores combustión a gasolina\r\nMantiene los pistones hasta un 30% más limpios\r\nMejora el consumo excesivo de combustible\r\nAyuda a proteger los motores de la pérdida de potencia\r\nProtección contra el desgaste y la fricción\r\nProporciona un flujo de aceite a baja temperatura más rápido y protege en condiciones de calor extremo\r\nCumple con especificaciones de la industria: api sn, sm, sl y sj, ilsac gf-5 y especificaciones oem', 50, 20, 100, '7', '10', '2023-06-13', '2023-06-13-02-34-54__1.jpg', 7, 13, '2023-06-13 14:34:54', '0000-00-00 00:00:00'),
(68, 'P-00068', 'Pachón Aceite 5W20 Full Sintético Pennzoil', ' aceite de motor completamente sintético Platinum Full Synthetic SAE 5W-20 de Pennzoil está hecho de gas natural, no de petróleo crudo. Es el primer aceite de motor totalmente sintético hecho de gas natural y diseñado para proporcionar una protección completa y un rendimiento mejor a los motores más avanzados. Ha sido elaborado para motores modernos con turbocompresor. El aceite de motor Platinum Full Synthetic (totalmente sintético) de Pennzoil mantiene los pistones hasta un 45 % más limpios que lo exigido por el estándar más estricto de la industria (según los resultados de la prueba Sequence IIIH). Proporciona un ahorro de combustible mayor. Ayuda a proteger los motores de la pérdida de potencia', 55, 20, 100, '35', '40', '2023-06-13', '2023-06-13-02-38-04__2.jpg', 7, 13, '2023-06-13 14:38:04', '0000-00-00 00:00:00'),
(69, 'P-00069', '1/4 Aceite 5W30 Full Sintético Pennzoil', 'El aceite de motor completamente sintético Platinum Full Synthetic SAE 5W-30 de Pennzoil está hecho de gas natural, no de petróleo crudo. Es el primer aceite de motor totalmente sintético hecho de gas natural y diseñado para proporcionar una protección completa y un rendimiento mejor a los motores más avanzados. Ha sido formulado para los motores modernos con turbocompresor. El aceite de motor Platinum Full Synthetic (totalmente sintético) de Pennzoil mantiene los pistones hasta un 45 % más limpios que lo exigido por la norma más estricta de la industria (según los resultados de la prueba Sequence IIIH). Proporciona un ahorro de combustible mayor. Ayuda a proteger los motores de la pérdida de potencia.', 55, 20, 100, '7', '10', '2023-06-13', '2023-06-13-02-40-43__3.jpeg', 7, 13, '2023-06-13 14:40:43', '0000-00-00 00:00:00'),
(70, 'P-00070', 'Pachón Aceite 5W30 Full Sintético Pennzoil', 'El aceite de motor completamente sintético Platinum Full Synthetic SAE 5W-30 de Pennzoil está hecho de gas natural, no de petróleo crudo. Es el primer aceite de motor totalmente sintético hecho de gas natural y diseñado para proporcionar una protección completa y un rendimiento mejor a los motores más avanzados. Ha sido formulado para los motores modernos con turbocompresor. El aceite de motor Platinum Full Synthetic (totalmente sintético) de Pennzoil mantiene los pistones hasta un 45 % más limpios que lo exigido por la norma más estricta de la industria (según los resultados de la prueba Sequence IIIH). Proporciona un ahorro de combustible mayor. Ayuda a proteger los motores de la pérdida de potencia.', 55, 20, 100, '35', '40', '2023-06-13', '2023-06-13-02-41-57__3.jpg', 7, 13, '2023-06-13 14:41:57', '0000-00-00 00:00:00'),
(71, 'P-00071', '1/4 Aceite 10W30 Full Sintético Pennzoil', 'El aceite de motor completamente sintético Platinum Full Synthetic SAE 10W-30 de Pennzoil está hecho de gas natural, no de petróleo crudo. Es el primer aceite de motor totalmente sintético hecho de gas natural y diseñado para proporcionar una protección completa y un rendimiento mejor a los motores más avanzados. Ha sido elaborado para motores modernos con turbocompresor. El aceite de motor Platinum Full Synthetic (totalmente sintético) de Pennzoil mantiene los pistones hasta un 45 % más limpios que lo exigido por el estándar más estricto de la industria (según los resultados de la prueba Sequence IIIH). Proporciona un ahorro de combustible mayor. Ayuda a proteger los motores de la pérdida de potencia', 55, 20, 100, '7', '10', '2023-06-13', '2023-06-13-02-43-11__4.jpg', 7, 13, '2023-06-13 14:43:11', '0000-00-00 00:00:00'),
(72, 'P-00072', 'Pachón Aceite 10W30 Full Sintético Pennzoil', 'El aceite de motor completamente sintético Platinum Full Synthetic SAE 10W-30 de Pennzoil está hecho de gas natural, no de petróleo crudo. Es el primer aceite de motor totalmente sintético hecho de gas natural y diseñado para proporcionar una protección completa y un rendimiento mejor a los motores más avanzados. Ha sido elaborado para motores modernos con turbocompresor. El aceite de motor Platinum Full Synthetic (totalmente sintético) de Pennzoil mantiene los pistones hasta un 45 % más limpios que lo exigido por el estándar más estricto de la industria (según los resultados de la prueba Sequence IIIH). Proporciona un ahorro de combustible mayor. Ayuda a proteger los motores de la pérdida de potencia', 55, 20, 100, '7', '10', '2023-06-13', '2023-06-13-02-44-33__6.jpg', 7, 13, '2023-06-13 14:44:33', '0000-00-00 00:00:00'),
(73, 'P-00073', '1/4 Aceite 40HD Castrol', 'Lubricante para motores a gasolina con alto kilometraje\r\n1/4 DE GALON', 55, 20, 100, '7', '9.50', '2023-06-13', '2023-06-13-02-55-40__1.webp', 7, 13, '2023-06-13 14:55:40', '0000-00-00 00:00:00'),
(74, 'P-00074', 'Galón Aceite 40HD Castrol', 'Mantener en buen estado un motor es tan fácil como simplemente respetar los tiempos de cambio de fluido. El aceite lubricante es el medio por el cual un motor mantiene su temperatura, elimina la fricción que se da entre todas sus partes internas y además limpia de impurezas que se forman dentro durante la combustión, trasladándolas al filtro y reteniéndolas ahí. El aceite tiene un periodo de vida equivalente al ritmo de uso del vehículo, aunque existe un promedio muy eficiente que simplifica los tiempos de cambio; Esto es 6 meses o 7,500 kilómetros, lo que ocurra primero, ya que este fluido comienza a quemarse por el uso, haciéndose más espeso y perdiendo sus propiedades lubricantes, si dejas mucho tiempo un aceite en ese estado, corres el riesgo de ralladuras internas, sobrecalentamiento y depósitos de lodo de combustión en hendiduras y empaques', 55, 20, 100, '30', '35', '2023-06-12', '2023-06-13-02-59-47__2.webp', 7, 13, '2023-06-13 14:59:47', '0000-00-00 00:00:00'),
(75, 'P-00075', '1/4 Aceite 20W50 GTX Castrol', 'Si elige un aceite para motor 20W-50 con kilometraje alto o 20W-50 convencional, ambos fluirán como un aceite de viscosidad 20 en climas fríos y, a continuación, con la viscosidad de un aceite de viscosidad 50 cuando el motor esté a la temperatura máxima. Elija Castrol® GTX® 20W-50 para proteger contra los sedimentos y Castrol® GTX® High Mileage para automóviles más antiguos con más de 100 000 kilómetros.', 50, 20, 100, '7', '9.50', '2023-06-13', '2023-06-13-03-02-00__3.jpg', 7, 13, '2023-06-13 15:02:00', '0000-00-00 00:00:00'),
(76, 'P-00076', 'Galón Aceite 20W50 GTX Castrol', 'Aceite mineral 20w50 946 ml.\r\nCastrol GTX es un aceite mineral para motores gasolina, Su fórmula de doble acción elimina los sedimentos y evita la formación de sedimentos nuevos. GTX OFRECE:\r\n-Brinda protección superior contra el sedimentos del motor**\r\n-Brinda protección avanzada contra la descomposición térmica y pérdida de viscosidad\r\n-Brinda aceites básicos de calidad prémium y aditivos antidesgaste para ayudar a extender la vida útil de su motor\r\n-Ayuda a minimizar el consumo de aceite, CUMPLE O SUPERA LOS ESTÁNDARES DEL MERCADO:API SN', 50, 20, 100, '30', '35.50', '2023-06-13', '2023-06-13-03-06-05__4.png', 7, 13, '2023-06-13 15:06:05', '0000-00-00 00:00:00'),
(77, 'P-00077', '1/4 Aceite 10W30 GTX Castrol', 'Aceite mineral 10w30 946 ml.\r\nCastrol GTX es un aceite mineral para motores gasolina, Su fórmula de doble acción elimina los sedimentos y evita la formación de sedimentos nuevos.\r\nGTX OFRECE:\r\n-Brinda protección superior contra el sedimentos del motor**\r\n-Brinda protección avanzada contra la descomposición térmica y pérdida de viscosidad\r\n-Brinda aceites básicos de calidad prémium y aditivos antidesgaste para ayudar a extender la vida útil de su motor\r\n-Ayuda a minimizar el consumo de aceite, CUMPLE O SUPERA LOS ESTÁNDARES DEL MERCADO: API SN', 45, 20, 100, '7', '9.50', '2023-06-13', '2023-06-13-03-09-06__5.jpg', 7, 13, '2023-06-13 15:09:06', '0000-00-00 00:00:00'),
(78, 'P-00078', 'Galón Aceite 10W30 GTX Castrol', 'Aceite mineral 10w30 Galón.\r\nCastrol GTX es un aceite mineral para motores gasolina, Su fórmula de doble acción elimina los sedimentos y evita la formación de sedimentos nuevos.\r\nGTX OFRECE:\r\n-Brinda protección superior contra el sedimentos del motor**\r\n-Brinda protección avanzada contra la descomposición térmica y pérdida de viscosidad\r\n-Brinda aceites básicos de calidad prémium y aditivos antidesgaste para ayudar a extender la vida útil de su motor\r\n-Ayuda a minimizar el consumo de aceite, CUMPLE O SUPERA LOS ESTÁNDARES DEL MERCADO: API SN', 55, 20, 100, '30', '35.50', '2023-06-13', '2023-06-13-03-12-41__61G9VMeCpXL.jpg', 7, 13, '2023-06-13 15:12:41', '0000-00-00 00:00:00'),
(79, 'P-00079', '1/4 Aceite 15W40 CRB Castrol', 'Lubricante Castrol CRB Multi 15W40 es un aceite avanzado Low SAPS para motores Diesel de servicio pesado donde la API CK / CJ es requerida. Su exclusiva formula previene la formación de depósitos y el espesamiento del lubricante permitiendo un intervalo de servicio más largo y evitando la pérdida de viscosidad. Cuenta con aprobaciones a las mas exigentes normas de fabricantes como CUMMINS, Detroit Diesel, Ford, Mack, Mercedes Benz y Volvo.', 50, 20, 100, '7', '9.50', '2023-06-13', '2023-06-13-03-16-52__15W-40.jpg', 7, 13, '2023-06-13 15:16:52', '0000-00-00 00:00:00'),
(80, 'P-00080', 'Galón Aceite 15W40 CRB Castrol', 'Lubricante Castrol CRB Multi 15W40 es un aceite avanzado Low SAPS para motores Diesel de servicio pesado donde la API CK / CJ es requerida. Su exclusiva formula previene la formación de depósitos y el espesamiento del lubricante permitiendo un intervalo de servicio más largo y evitando la pérdida de viscosidad. Cuenta con aprobaciones a las mas exigentes normas de fabricantes como CUMMINS, Detroit Diesel, Ford, Mack, Mercedes Benz y Volvo.', 55, 20, 100, '30', '35', '2023-06-13', '2023-06-13-03-18-04__5.png', 7, 13, '2023-06-13 15:18:04', '0000-00-00 00:00:00'),
(81, 'P-00081', '1/4 Aceite 20W50 4T(Motocicleta) Castrol', 'Castrol Act>evo ESSENTIAL, es un aceite de motor de alta calidad diseñado para motocicletas de 4 tiempos y mototaxis. Formulado con la Tecnología TRIZONE de Castrol para proteger el motor, el embrague y los engranajes, proporciona un viaje libre de problemas una y otra vez.', 70, 20, 100, '5', '7.50', '2023-06-13', '2023-06-13-03-20-17__ICAUMOT-ACTEVO-ESSENTIAL-4T-20W50-1QT-01.jpg', 7, 13, '2023-06-13 15:20:17', '2023-06-13 15:22:45'),
(82, 'P-00082', '1/4 Aceite 10W40 4T(Motocicleta) Castrol', 'Castrol Act>evo ESSENTIAL, es un aceite de motor de alta calidad diseñado para motocicletas de 4 tiempos y mototaxis. Formulado con la Tecnología TRIZONE de Castrol para proteger el motor, el embrague y los engranajes, proporciona un viaje libre de problemas una y otra vez.', 60, 20, 100, '5', '7.50', '2023-06-13', '2023-06-13-03-21-50__d628349c-1475-4867-a067-cf2eea889cc3.jpg', 7, 13, '2023-06-13 15:21:50', '2023-06-13 15:23:03'),
(83, 'P-00083', '1/4 Aceite 40HD CITGO', 'Los aceites de motor CITGO SUPERGARD son aceites de motor de primera calidad diseñados para proporcionar un rendimiento óptimo en motores de gasolina de alto rendimiento (incluidos los turboalimentados y sobrealimentados) en automóviles de pasajeros, camionetas, vehículos utilitarios deportivos y camiones ligeros. La nueva tecnología incorporada en este lubricante de última generación le permite superar los requisitos de rendimiento de los fabricantes. Estos aceites de motor demuestran un rendimiento mejorado en los diseños de motores avanzados de la actualidad. CITGO SUPERGARD está disponible tanto en monogrado como en multigrado. Los SAE 5W-20 y SAE 5W-30 se clasifican como mezclas sintéticas. Recomendado para turismos, vehículos utilitarios deportivos y camiones ligeros que funcionan con gasolina. También se recomienda su uso en motores de gasolina que han sido convertidos para operar con gas natural comprimido (GNC), gas natural licuado (GNL), y gas licuado de petróleo (GLP, que incluye propano y butano). ', 70, 20, 100, '8', '10.50', '2023-06-13', '2023-06-13-04-02-50__1.png', 7, 13, '2023-06-13 16:02:50', '0000-00-00 00:00:00'),
(84, 'P-00084', 'Galón Aceite 40HD CITGO', 'Los aceites de motor CITGO SUPERGARD son aceites de motor de primera calidad diseñados para proporcionar un rendimiento óptimo en motores de gasolina de alto rendimiento (incluidos los turboalimentados y sobrealimentados) en automóviles de pasajeros, camionetas, vehículos utilitarios deportivos y camiones ligeros. La nueva tecnología incorporada en este lubricante de última generación le permite superar los requisitos de rendimiento de los fabricantes. Estos aceites de motor demuestran un rendimiento mejorado en los diseños de motores avanzados de la actualidad. CITGO SUPERGARD está disponible tanto en monogrado como en multigrado. Los SAE 5W-20 y SAE 5W-30 se clasifican como mezclas sintéticas. Recomendado para turismos, vehículos utilitarios deportivos y camiones ligeros que funcionan con gasolina. También se recomienda su uso en motores de gasolina que han sido convertidos para operar con gas natural comprimido (GNC), gas natural licuado (GNL), y gas licuado de petróleo (GLP, que incluye propano y butano). ', 45, 22, 100, '35.50', '40', '2023-06-13', '2023-06-13-04-15-46__2.png', 7, 13, '2023-06-13 16:15:46', '0000-00-00 00:00:00'),
(85, 'P-00085', '1/4 Aceite 20W50 GTX CITGO', 'Supergard 20w50 qt. Los Aceites Sintéticos CITGO SUPERGARD para motor son el resultado de una combinación balanceada de bases sintéticas de la más alta calidad, bases convencionales de calidad Premium y un avanzado sistema de aditivos que cumplen con las más exigentes especificaciones automotores de hoy en día. Están diseñados para brindar una excelente protección a los nuevos motores de gasolina de alto rendimiento (incluyendo los turbocargados y los supercargados) en vehículos de pasajeros, camionetas (vans), deportivos y camiones livianos. Son aceites que proporcionan un excelente desempeño en cualquiera de lo', 45, 20, 100, '8', '10.50', '2023-06-13', '2023-06-13-04-19-26__3.jpg', 7, 13, '2023-06-13 16:19:26', '0000-00-00 00:00:00'),
(86, 'P-00086', 'Galón Aceite 20W50 GTX CITGO', 'Supergard 20w50 qt. Los Aceites Sintéticos CITGO SUPERGARD para motor son el resultado de una combinación balanceada de bases sintéticas de la más alta calidad, bases convencionales de calidad Premium y un avanzado sistema de aditivos que cumplen con las más exigentes especificaciones automotores de hoy en día. Están diseñados para brindar una excelente protección a los nuevos motores de gasolina de alto rendimiento (incluyendo los turbocargados y los supercargados) en vehículos de pasajeros, camionetas (vans), deportivos y camiones livianos. Son aceites que proporcionan un excelente desempeño en cualquiera de lo', 70, 20, 100, '35.50', '40', '2023-06-13', '2023-06-13-04-20-45__4.png', 7, 13, '2023-06-13 16:20:45', '0000-00-00 00:00:00'),
(87, 'P-00087', '1/4 Aceite 10W30 GTX CITGO', 'Aceite para motor sae 10w30 full sintético.\r\n-Son de la más alta calidad de la actualidad y contienen un sistema de aditivos avanzado que cumple con las estrictas especificaciones automotrices.\r\n-Brindan una protección excelente en los motores de gasolina de alto rendimiento\r\n-También se recomiendan para su uso en motores de gasolina que se han convertido para funcionar con GNC,GNL y LPG\r\n-Consulte el manual del propietario del vehículo para seleccionar el lubricante de motor adecuado.\r\n-NOTA: Los aceites de motor totalmente sintéticos CITGO SUPERGARD no se recomiendan para su uso en motores diésel.', 60, 20, 100, '10', '13.50', '2023-06-13', '2023-06-13-04-24-30__5.jpg', 7, 13, '2023-06-13 16:24:30', '0000-00-00 00:00:00'),
(88, 'P-00088', 'Galón Aceite 10W30 GTX CITGO', 'Aceite para motor sae 10w30 full sintético.\r\n-Son de la más alta calidad de la actualidad y contienen un sistema de aditivos avanzado que cumple con las estrictas especificaciones automotrices.\r\n-Brindan una protección excelente en los motores de gasolina de alto rendimiento\r\n-También se recomiendan para su uso en motores de gasolina que se han convertido para funcionar con GNC,GNL y LPG\r\n-Consulte el manual del propietario del vehículo para seleccionar el lubricante de motor adecuado.\r\n-NOTA: Los aceites de motor totalmente sintéticos CITGO SUPERGARD no se recomiendan para su uso en motores diésel.', 45, 20, 100, '40', '45', '2023-06-13', '2023-06-13-04-25-57__6.jpeg', 7, 13, '2023-06-13 16:25:57', '0000-00-00 00:00:00'),
(89, 'P-00089', '1/4 Aceite 15W40 CRB CITGO', 'Citgard 600 sae 15w40 die gas . Los aceites de motor CITGO CITGARD 600 Viscosidad Multi-Grado utilizan tecnología superior para proteger a los motores actuales así como a los modelos de motores más antiguos de bajas emisiones equipados con sistemas pos tratamiento del escape y otras características de diseño nuevas. Este producto excede los requerimientos API CJ-4 para camiones de servicio pesado y también la ya existente API CI-4 PLUS y categorías anteriores.', 80, 20, 100, '8', '10.50', '2023-06-13', '2023-06-13-04-27-59__7.jpg', 7, 13, '2023-06-13 16:27:59', '0000-00-00 00:00:00'),
(90, 'P-00090', 'Galón Aceite 15W40 CRB CITGO', 'Citgard 600 sae 15w40 die gas. Los aceites de motor CITGO CITGARD 600 Viscosidad Multi-Grado utilizan tecnología superior para proteger a los motores actuales así como a los modelos de motores más antiguos de bajas emisiones equipados con sistemas pos tratamiento del escape y otras características de diseño nuevas. Este producto excede los requerimientos API CJ-4 para camiones de servicio pesado y también la ya existente API CI-4 PLUS y categorías anteriores.', 35, 20, 100, '35.50', '40', '2023-06-13', '2023-06-13-04-43-27__8.png', 7, 13, '2023-06-13 16:43:27', '0000-00-00 00:00:00'),
(91, 'P-00091', '1/4 Aceite 20W50 4T(motocicleta) CITGO', 'Los Aceites CITGO SUPERGARD para motor son recomendados para automóviles de pasajeros, vehículos utilitarios deportivos y camiones ligeros que funcionan con gasolina.\r\nLos aceites CITGO SUPERGARD para motor también son recomendados para motores de gasolina que han sido convertidos para funcionar con gas natural comprimido (GNC) o con gas natural licuado (GNL), así como con gas licuado de petróleo (GLP-que incluye propano y butano).', 45, 20, 100, '7.50', '12', '2023-06-13', '2023-06-13-08-12-00__9.png', 7, 13, '2023-06-13 20:12:00', '0000-00-00 00:00:00'),
(92, 'P-00092', '1/4 Aceite 10W40 4T(Motocicleta) CITGO', 'Supergard ultra life 10w40 qt. Los Aceites Sintéticos CITGO SUPERGARD para motor son el resultado de una combinación balanceada de bases sintéticas de la más alta calidad, bases convencionales de calidad Premium y un avanzado sistema de aditivos que cumplen con las más exigentes especificaciones automotores de hoy en día. Están diseñados para brindar una excelente protección a los nuevos motores de gasolina de alto rendimiento (incluyendo los turbocargados y los supercargados) en vehículos de pasajeros, camionetas (vans), deportivos y camiones livianos', 60, 20, 100, '7.50', '12', '2023-06-13', '2023-06-13-08-15-12__d7290873-81c3-4093-8ad9-1e698db6301b.jpg', 7, 13, '2023-06-13 20:15:12', '0000-00-00 00:00:00'),
(93, 'P-00093', '1/4 Aceite 0W20 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.\r\nCumple o supera los requisitos API SP e ILSAC GF-6A.', 55, 20, 100, '7.50', '10', '2023-06-13', '2023-06-13-08-22-18__UNI-801-FOTO1-900x900-1.jpg', 7, 13, '2023-06-13 20:22:18', '0000-00-00 00:00:00'),
(94, 'P-00094', '1/4 Aceite 5W20 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.\r\nCumple o supera los requisitos API SP e ILSAC GF-6A.', 55, 20, 100, '6.90', '8.90', '2023-06-13', '2023-06-13-08-24-33__1.jpg', 7, 13, '2023-06-13 20:24:33', '0000-00-00 00:00:00'),
(95, 'P-00095', '1/4 Aceite 5W30 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.', 55, 20, 100, '6.90', '8.90', '2023-06-13', '2023-06-13-08-26-21__2.png', 7, 13, '2023-06-13 20:26:21', '0000-00-00 00:00:00'),
(96, 'P-00096', ' Galón Aceite 0W20 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.', 55, 20, 100, '30', '35', '2023-06-13', '2023-06-13-08-32-01__2.jpg', 7, 13, '2023-06-13 20:32:01', '0000-00-00 00:00:00'),
(97, 'P-00097', '1/4 Aceite 10W20 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.\r\nCumple o supera los requisitos API SP e ILSAC GF-6A.', 55, 20, 100, '6.50', '8.50', '2023-06-13', '2023-06-13-08-36-59__1.jpg', 7, 13, '2023-06-13 20:36:59', '0000-00-00 00:00:00'),
(98, 'P-00098', 'Pachón Aceite 5W30 FULL SINTÉTICO UNIX', 'Diseñado para mejorar el consumo de combustible y maximizar la potencia y aceleración.\r\nProtección del motor más duradera y mejor que los aceites convencionales, debido a los aceites base sintéticos son más fuertes y uniformes, y las moléculas avanzadas que proporcionan una barrera de película fuerte para controlar la fricción, resiste el desgaste y evita que las superficies metálicas entren en contacto.\r\nCreado para condiciones de conducción extremas de frío y calor: paradas y arranques, viajes cortos frecuentes, cargas pesadas y condiciones de polvo.\r\nCumple o supera los requisitos API SP e ILSAC GF-6A.', 60, 20, 100, '31', '36', '2023-06-13', '2023-06-13-08-40-05__3.png', 7, 13, '2023-06-13 20:40:05', '0000-00-00 00:00:00'),
(99, 'P-00099', '1/4 Aceite 0W20 Semi-Sintético UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo que los aceites convencionales.\r\nLos aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '5.70', '6.70', '2023-06-13', '2023-06-13-09-11-48__2.jpg', 7, 13, '2023-06-13 21:11:48', '0000-00-00 00:00:00'),
(100, 'P-00100', '1/4 Aceite 5W20 Semi-Sintético UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo que los aceites convencionales.\r\nLos aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 70, 20, 100, '25', '30', '2023-06-13', '2023-06-13-09-13-16__pol.jpeg', 7, 13, '2023-06-13 21:13:16', '0000-00-00 00:00:00'),
(101, 'P-00101', 'Pachón Aceite 5W30 Semi-Sintético UNIX', 'Los aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '25', '30', '2023-06-13', '2023-06-13-09-16-56__11.jpg', 7, 13, '2023-06-13 21:16:56', '0000-00-00 00:00:00'),
(102, 'P-00102', ' 1/4 Aceite 10W30 Semi-Sintético UNIX', 'Los aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '4.70', '6.70', '2023-06-13', '2023-06-13-09-19-52__12.png', 7, 13, '2023-06-13 21:19:52', '0000-00-00 00:00:00'),
(103, 'P-00103', 'Pachón Aceite 10W30 Semi-Sintético UNIX', 'Minimiza el consumo de aceite y maximiza la potencia de salida.\r\nResiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo que los aceites convencionales.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.\r\nCumple y supera los requisitos de garantía de automóviles y camiones ligeros de importación y de EE. UU. Para todos los motores de gasolina, para automóviles actualmente en uso.', 55, 20, 100, '25', '30', '2023-06-13', '2023-06-13-09-22-08__13.jpg', 7, 13, '2023-06-13 21:21:18', '2023-06-13 21:22:08'),
(104, 'P-00104', '1/4 Aceite 15W40 Semi-Sintético UNIX', 'Excelente capacidad de drenaje extendido.\r\nCumple con los requisitos de los principales fabricantes de equipos originales como Cummins, Detroit Diesel, Mack / Volvo, Paccar, Navistar, Caterpillar y otros.', 60, 20, 100, '4.50', '5.95', '2023-06-13', '2023-06-13-09-26-30__1.jpg', 7, 13, '2023-06-13 21:26:30', '0000-00-00 00:00:00'),
(105, 'P-00105', 'Pachón Aceite 15W40 Semi-Sintético UNIX', 'Excelente capacidad de drenaje extendido.\r\nCumple con los requisitos de los principales fabricantes de equipos originales como Cummins, Detroit Diesel, Mack / Volvo, Paccar, Navistar, Caterpillar y otros.', 55, 20, 100, '25', '30', '2023-06-13', '2023-06-13-09-29-09__2.jpg', 7, 13, '2023-06-13 21:29:09', '0000-00-00 00:00:00'),
(106, 'P-00106', '1/4 Aceite 20W50 Semi-Sintético UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo que los aceites convencionales.\r\nLos aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 60, 20, 100, '4.50', '5.90', '2023-06-13', '2023-06-13-09-30-57__3.jpg', 7, 13, '2023-06-13 21:30:57', '0000-00-00 00:00:00'),
(107, 'P-00107', 'Pachón Aceite 20W50 Semi-Sintético UNIX', 'Los aditivos actúan para mantener limpios los motores.\r\nEl aditivo ZDDP proporciona una fuerte protección anti desgaste.\r\nMejorado con modificador de fricción para mejorar la potencia.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '24', '27', '2023-06-13', '2023-06-13-09-32-11__4.jpg', 7, 13, '2023-06-13 21:32:11', '0000-00-00 00:00:00'),
(108, 'P-00108', 'Pachón Aceite 10W30 Mineral UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo.\r\nLos aditivos actúan para mantener limpios los motores.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '4', '5.85', '2023-06-13', '2023-06-13-09-37-39__5.jpg', 7, 13, '2023-06-13 21:37:39', '0000-00-00 00:00:00'),
(109, 'P-00109', '1/4 Aceite 10W30 Mineral UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo.\r\nLos aditivos actúan para mantener limpios los motores.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 55, 20, 100, '20', '23.50', '2023-06-13', '2023-06-13-09-38-59__6.jpg', 7, 13, '2023-06-13 21:38:59', '0000-00-00 00:00:00'),
(110, 'P-00110', '1/4 Aceite 20W50 Mineral UNIX', 'Modificadores de fricción especiales para el rendimiento del embrague húmedo.\r\nLicencia JASO MA2\r\nRecomendado para motos de nieve, cuatrimotos, motos acuáticas y motos que requieran un 10W-40 que cumpla con los requisitos de JASO MA, JASO MA 2 o API SL.', 55, 20, 100, '4', '5.55', '2023-06-13', '2023-06-13-09-40-33__7.jpg', 7, 13, '2023-06-13 21:40:33', '0000-00-00 00:00:00'),
(111, 'P-00111', 'Galón Aceite 20W50 Mineral UNIX', 'Resiste la degradación térmica y reduce la formación de depósitos para una mejor protección del motor durante más tiempo.\r\nLos aditivos actúan para mantener limpios los motores.\r\nProporciona una fuerte barrera de película para controlar la fricción, resistir el desgaste y evitar que las superficies metálicas entren en contacto.', 50, 20, 100, '19.75', '22.50', '2023-06-13', '2023-06-13-09-41-59__8.jpg', 7, 13, '2023-06-13 21:41:59', '0000-00-00 00:00:00'),
(112, 'P-00112', '1/4 Aceite ATF Transmisión UNIX', 'ATF Multi-Vehículo UNIX es una fórmula avanzada equilibrada que utiliza una tecnología de aditivos superior y aceites base 100% sintéticos que ayudan a garantizar el máximo rendimiento de casi cualquier transmisión automática. Este producto de primera calidad cumple y supera los requisitos de fricción y desgaste de muchas transmisiones automáticas fabricadas después de 1983, incluidos muchos vehículos extranjeros.', 28, 20, 100, '4', '5.55', '2023-06-13', '2023-06-13-09-43-42__9.jpg', 7, 13, '2023-06-13 21:43:42', '2023-06-13 21:43:56'),
(113, 'P-00113', '1/4 Aceite CVT Transmisión UNIX', 'El fluido UNIX CVT está especialmente formulado con una combinación única de aceites base completamente sintéticos y una avanzada tecnología de aditivos diseñada para las demandas específicas de las CVT.\r\n\r\nEl fluido UNIX  CVT está especialmente formulado con una combinación única de aceites base completamente sintéticos y una avanzada tecnología de aditivos diseñada para las demandas específicas de las CVT. Este producto de primera calidad se recomienda para su uso en la mayoría de las CVT accionadas por correa o cadena. No es un reemplazo de ATF.', 60, 20, 100, '9.45', '12', '2023-06-13', '2023-06-13-09-45-55__10.jpg', 7, 13, '2023-06-13 21:45:55', '0000-00-00 00:00:00'),
(114, 'P-00114', '1/4 Aceite Dual Clutch Transmisión UNIX', 'El líquido de transmisiones automáticas para múltiples vehículos UNIX está diseñado para extender la vida útil de la transmisión y el funcionamiento suave de muchas transmisiones automáticas de una variedad de OEM.\r\n\r\nLíquido de transmisión automática de baja viscosidad UNIX es una fórmula avanzada equilibrada que utiliza una tecnología de aditivos superior y aceites de base 100% sintéticos, lo que ayuda a garantizar el máximo rendimiento de casi cualquier transmisión automática', 55, 20, 100, '9.45', '12', '2023-06-13', '2023-06-13-09-49-02__12.jpg', 7, 13, '2023-06-13 21:49:02', '0000-00-00 00:00:00'),
(115, 'P-00113', 'Refrigerante Prestone', 'Refrigerante concentrado al 33%', -6, 10, 60, '5.34', '10', '2023-06-15', '2023-06-15-03-06-23__93404.jpg', 10, 15, '2023-06-15 15:06:23', '0000-00-00 00:00:00'),
(116, 'P-00114', 'Juego de llaves', 'Son las típicas llaves con dos cabezas, una abierta y otra cerrada. También las en varios tamaños para abarcar todo tipo de superficie.\r\n', 7, 4, 10, '45.50', '49.99', '2023-10-12', '2023-10-14-05-57-04__llaves.jpg', 10, 16, '2023-10-14 17:57:04', '0000-00-00 00:00:00');

--
-- Disparadores `tb_almacen`
--
DELIMITER $$
CREATE TRIGGER `evitar_duplicados_nombre_almacen` BEFORE INSERT ON `tb_almacen` FOR EACH ROW BEGIN
    DECLARE count_nombre INT;
    SET count_nombre = (SELECT COUNT(*) FROM tb_almacen WHERE nombre = NEW.nombre);
    IF count_nombre > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Ya existe un almacén con ese nombre';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_carrito`
--

CREATE TABLE `tb_carrito` (
  `id_carrito` int(11) NOT NULL,
  `num_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_carrito`
--

INSERT INTO `tb_carrito` (`id_carrito`, `num_venta`, `id_producto`, `cantidad`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(4, 4, 3, 23, '2023-10-09 17:10:06', '0000-00-00 00:00:00'),
(5, 5, 27, 12, '2023-10-25 00:00:49', '0000-00-00 00:00:00'),
(6, 6, 115, 45, '2023-10-25 00:02:11', '0000-00-00 00:00:00'),
(7, 7, 21, 5, '2023-10-25 00:03:13', '0000-00-00 00:00:00'),
(8, 5, 112, 12, '2023-10-25 00:04:38', '0000-00-00 00:00:00'),
(9, 5, 16, 12, '2023-10-25 00:05:12', '0000-00-00 00:00:00'),
(10, 7, 4, 3, '2023-10-25 00:07:31', '0000-00-00 00:00:00'),
(11, 8, 5, 12, '2023-10-25 00:08:21', '0000-00-00 00:00:00'),
(12, 9, 22, 34, '2023-10-25 00:08:52', '0000-00-00 00:00:00'),
(13, 10, 22, 2, '2023-10-25 00:09:30', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_categoria`
--

INSERT INTO `tb_categoria` (`id_categoria`, `nombre_categoria`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(13, 'ACEITE', '2023-06-12 13:44:29', '2023-06-14 17:20:46'),
(14, 'COMPONENTE ELECTRÓNICO', '2023-06-15 14:59:00', '0000-00-00 00:00:00'),
(15, 'REFRIGERANTE', '2023-06-15 15:05:14', '0000-00-00 00:00:00'),
(16, 'HERRAMIENTAS', '2023-10-14 17:50:17', '0000-00-00 00:00:00');

--
-- Disparadores `tb_categoria`
--
DELIMITER $$
CREATE TRIGGER `evitar_duplicados_categoria` BEFORE INSERT ON `tb_categoria` FOR EACH ROW BEGIN
    DECLARE count_categoria INT;
    SET count_categoria = (SELECT COUNT(*) FROM tb_categoria WHERE nombre_categoria = NEW.nombre_categoria);
    IF count_categoria > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Ya existe una categoría con ese nombre';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(255) NOT NULL,
  `nit_cliente` varchar(255) NOT NULL,
  `celular_cliente` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `nit_cliente`, `celular_cliente`, `email`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'Brayan GIL', '23456779-9', '76767890', 'prueba@gmai.com', '2023-08-10 17:27:39', '2023-10-24 23:24:56'),
(2, 'Eduardo Rodríguez de Perea ', '23459768-7', '53427257', 'Rodriperea14@gmail.com', '2023-10-14 18:27:43', '2023-10-24 23:25:02'),
(3, 'Cristian Eduardo Quinteros', '76456779-9', '97976567', 'quinteroAlarco@gmail.com', '2023-10-24 23:26:14', '0000-00-00 00:00:00'),
(4, 'Alexis Vega Cruz', '456456779-5', '95647382', 'vega100@outlook.com', '2023-10-24 23:27:25', '0000-00-00 00:00:00'),
(5, 'Jefferson Gutierritos', '2345897633-7', '53427257', 'jeff34400@gmail.com', '2023-10-24 23:28:56', '0000-00-00 00:00:00'),
(6, 'Camila Peña de la Cruz', '2345567633-7', '677979777', 'Cami1234@gmail.com', '2023-10-24 23:30:41', '0000-00-00 00:00:00'),
(7, 'Rodrigo Palacios', '2345567633-7', '95647382', 'PalaRodri1234@gmail.com', '2023-10-24 23:31:22', '0000-00-00 00:00:00'),
(8, 'Ivania Rodríguez Cortez', '2345547633-7', '95647382', 'ivaistheend@gmail.com', '2023-10-24 23:32:08', '0000-00-00 00:00:00'),
(9, 'Lucia Rodríguez Cortez', '2345457633-7', '78647382', 'LuciHertheend@gmail.com', '2023-10-24 23:32:42', '0000-00-00 00:00:00'),
(10, 'Kathya Mejia Ramos', '2345457633-7', '75647982', 'katy1256y@gmail.com', '2023-10-24 23:33:28', '0000-00-00 00:00:00'),
(11, 'Rocio Mejia Ramos', '9345457633-7', '45647982', 'Roci1256y@gmail.com', '2023-10-24 23:34:01', '0000-00-00 00:00:00'),
(12, 'Jennifer Estafina Vazquez', '6745457633-7', '73647982', 'jenniEv@gmail.com', '2023-10-24 23:34:48', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_compras`
--

CREATE TABLE `tb_compras` (
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `num_compra` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `comprobante` varchar(255) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `precio_compra` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_compras`
--

INSERT INTO `tb_compras` (`id_compra`, `id_producto`, `num_compra`, `fecha_compra`, `id_proveedor`, `comprobante`, `id_usuario`, `precio_compra`, `cantidad`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 3, 1, '2023-10-17', 1, 'e', 10, '5', 3, '2023-10-17 17:59:35', '0000-00-00 00:00:00'),
(2, 27, 2, '2023-10-24', 9, 'CR2', 10, '35', 10, '2023-10-24 23:36:37', '0000-00-00 00:00:00'),
(3, 15, 3, '2023-10-24', 3, 'CDP-3', 10, '5', 10, '2023-10-24 23:39:55', '0000-00-00 00:00:00'),
(4, 27, 4, '2023-10-24', 10, 'CDP-4', 10, '35', 30, '2023-10-24 23:43:00', '0000-00-00 00:00:00'),
(5, 24, 5, '2023-10-24', 7, 'CDP-5', 10, '35', 12, '2023-10-24 23:44:45', '0000-00-00 00:00:00'),
(6, 3, 6, '2023-10-24', 3, 'CDP-5', 10, '20', 23, '2023-10-24 23:45:40', '0000-00-00 00:00:00'),
(7, 115, 7, '2023-10-23', 6, 'CDP-7', 10, '5.34', 34, '2023-10-24 23:47:18', '0000-00-00 00:00:00'),
(8, 17, 8, '2023-10-24', 8, 'CDP-8', 10, '5', 5, '2023-10-24 23:48:10', '0000-00-00 00:00:00'),
(9, 36, 8, '2023-10-24', 2, 'CDP-8', 10, '5', 6, '2023-10-24 23:49:06', '0000-00-00 00:00:00'),
(10, 5, 9, '2023-10-24', 4, 'CDP-9', 10, '13', 9, '2023-10-24 23:52:15', '0000-00-00 00:00:00'),
(11, 22, 10, '2023-10-24', 9, 'CDP-10', 10, '40', 9, '2023-10-24 23:53:33', '0000-00-00 00:00:00'),
(12, 27, 8, '2023-10-24', 8, 'CDP-11', 10, '35', 45, '2023-10-24 23:54:20', '0000-00-00 00:00:00'),
(13, 51, 8, '2023-10-24', 10, 'CDP-12', 10, '82', 20, '2023-10-24 23:56:23', '0000-00-00 00:00:00'),
(14, 38, 8, '2023-10-24', 3, 'CDP-13', 10, '7', 23, '2023-10-24 23:57:30', '0000-00-00 00:00:00'),
(15, 74, 8, '2023-10-24', 6, 'CD14', 10, '30', 5, '2023-10-24 23:59:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedores`
--

CREATE TABLE `tb_proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(255) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `empresa` varchar(255) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id_proveedor`, `nombre_proveedor`, `celular`, `telefono`, `empresa`, `email`, `direccion`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'Julian alvarez', '12345678', '12345678', 'Incelium', 'metalicasv@gmail.com', 'CALLE FONT DE PENELLA (POL INDUSTRIAL PISTA)', '2023-10-14 18:13:06', '0000-00-00 00:00:00'),
(2, 'Ana García Prades Guzmán', '55512345', '55598765', 'TechSoluciones', 'ana.garcia@outlook.com', '123 Calle Principal, Ciudad Ejemplo, 45678', '2023-10-24 23:05:19', '0000-00-00 00:00:00'),
(3, 'Luis Rodríguez Chávez Cruz', '55523456', '55587654', 'InnovateCorp', 'luis.rodriguez@gmail.com', '456 Avenida Central, Pueblo de Prueba, 56789', '2023-10-24 23:07:31', '0000-00-00 00:00:00'),
(4, 'María Luisa López', '55346789', '55764321', 'DataTech Solutions', 'maria.lopez@example.com', '789 Calle Ficticia, Villa Simulada, 67890', '2023-10-24 23:09:29', '0000-00-00 00:00:00'),
(5, 'Javier Martínez Cuarta', '5557890', '5557856', 'FuturoInnovador', 'javier.martinez@outlook.com', '1234 Avenida Imaginaria, Ciudad de Pruebas, 78901', '2023-10-24 23:11:42', '0000-00-00 00:00:00'),
(6, 'Gonzalo Montiel Cuarta', '55556889', '21355556', 'CreaciónDigital Inc.', 'montielAlrco@gmail.com', '4321 Calle de Ejemplo, Pueblo Virtual, 89012', '2023-10-24 23:13:42', '0000-00-00 00:00:00'),
(7, 'Carlos González', '55567890', '76895556', 'TechSimulación S.A.', 'carlos.gonzalez@example.com', '5678 Avenida Simulada, Villa de Ejemplo, 90123', '2023-10-24 23:17:03', '0000-00-00 00:00:00'),
(8, 'Marta Fernández Gazí', '78989012', '78989012', 'ByteSolutions', 'marta.fernandez@example.com', '23456 Calle de la Innovación, Ciudad Creativa, 34567', '2023-10-24 23:19:22', '0000-00-00 00:00:00'),
(9, 'Juan López García Pallez ', '75501234', '75501234', 'VirtualSys Ltd.', 'juan.lopez@example.com', '78901 Avenida Imaginativa, Pueblo Creativo, 45678', '2023-10-24 23:20:56', '0000-00-00 00:00:00'),
(10, 'Joy allen jhones', '79890709', '79053245', 'BladeRunner', 'Joyhello@outlook.es', ' 67890 Avenida de Pruebas, Villa de Simulación, 23456', '2023-10-24 23:23:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(1, 'ADMINISTRADOR', '2023-02-27 16:18:33', '2023-02-27 16:18:33'),
(2, 'EMPLEADO', '2023-02-27 10:05:57', '2023-02-27 10:56:32');

--
-- Disparadores `tb_roles`
--
DELIMITER $$
CREATE TRIGGER `evitar_duplicados_rol` BEFORE INSERT ON `tb_roles` FOR EACH ROW BEGIN
    DECLARE count_rol INT;
    SET count_rol = (SELECT COUNT(*) FROM tb_roles WHERE rol = NEW.rol);
    IF count_rol > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Ya existe un rol con ese nombre';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password_user` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nombres`, `email`, `password_user`, `token`, `id_rol`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(7, 'Empleado', 'empleado-sigein@gmail.com', '$2y$10$7r42dFWqPOnt/PFGfofJdux/BQBhazXCvcYypqAL1UO0nTiqA.jTe', '', 2, '2023-02-28 16:13:03', '2023-06-15 14:56:04'),
(10, 'Administrador', 'administrador-sigein@gmail.com', '$2y$10$9ayB15LOaDIlHVLwc7bf7OLKAiwNL4SyaeS7sfi43JgpJYkg/VJ0K', '', 1, '2023-06-15 11:09:50', '0000-00-00 00:00:00');

--
-- Disparadores `tb_usuarios`
--
DELIMITER $$
CREATE TRIGGER `evitar_duplicados_email` BEFORE INSERT ON `tb_usuarios` FOR EACH ROW BEGIN
    DECLARE count_email INT;
    SET count_email = (SELECT COUNT(*) FROM tb_usuarios WHERE email = NEW.email);
    IF count_email > 0 THEN
        SIGNAL SQLSTATE '45000'
        SET MESSAGE_TEXT = 'Ya existe un usuario con ese email';
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ventas`
--

CREATE TABLE `tb_ventas` (
  `id_venta` int(11) NOT NULL,
  `num_venta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `total_pagado` int(11) NOT NULL,
  `fyh_creacion` datetime NOT NULL,
  `fyh_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_ventas`
--

INSERT INTO `tb_ventas` (`id_venta`, `num_venta`, `id_cliente`, `total_pagado`, `fyh_creacion`, `fyh_actualizacion`) VALUES
(6, 4, 1, 460, '2023-10-09 17:10:27', '0000-00-00 00:00:00'),
(7, 5, 12, 480, '2023-10-25 00:01:09', '0000-00-00 00:00:00'),
(8, 6, 9, 450, '2023-10-25 00:02:41', '0000-00-00 00:00:00'),
(9, 7, 5, 225, '2023-10-25 00:03:25', '0000-00-00 00:00:00'),
(10, 5, 11, 1063, '2023-10-25 00:05:54', '0000-00-00 00:00:00'),
(11, 6, 5, 450, '2023-10-25 00:06:16', '0000-00-00 00:00:00'),
(12, 7, 8, 525, '2023-10-25 00:08:00', '0000-00-00 00:00:00'),
(13, 8, 9, 216, '2023-10-25 00:08:30', '0000-00-00 00:00:00'),
(14, 9, 10, 1530, '2023-10-25 00:09:08', '0000-00-00 00:00:00'),
(15, 10, 7, 90, '2023-10-25 00:09:41', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_venta` (`num_venta`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- Indices de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `num_venta` (`num_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT de la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_almacen`
--
ALTER TABLE `tb_almacen`
  ADD CONSTRAINT `tb_almacen_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tb_categoria` (`id_categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_almacen_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_carrito`
--
ALTER TABLE `tb_carrito`
  ADD CONSTRAINT `tb_carrito_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_compras`
--
ALTER TABLE `tb_compras`
  ADD CONSTRAINT `tb_compras_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `tb_proveedores` (`id_proveedor`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `tb_almacen` (`id_producto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_compras_ibfk_3` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_ventas`
--
ALTER TABLE `tb_ventas`
  ADD CONSTRAINT `tb_ventas_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `tb_clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_ventas_ibfk_2` FOREIGN KEY (`num_venta`) REFERENCES `tb_carrito` (`num_venta`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
