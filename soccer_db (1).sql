-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 04:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soccer_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipo`
--

CREATE TABLE `equipo` (
  `id_equ` varchar(25) NOT NULL,
  `nombre_eq` varchar(25) DEFAULT NULL,
  `cancha1` varchar(25) DEFAULT NULL,
  `cancha2` varchar(25) DEFAULT NULL,
  `hora` time DEFAULT NULL,
  `espera` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipo`
--

INSERT INTO `equipo` (`id_equ`, `nombre_eq`, `cancha1`, `cancha2`, `hora`, `espera`) VALUES
('1AB', 'Pilares', '1', '5', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jugador`
--

CREATE TABLE `jugador` (
  `id` varchar(15) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL,
  `localidad` varchar(25) DEFAULT NULL,
  `nacimiento` year(4) DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `equipo_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jugador`
--

INSERT INTO `jugador` (`id`, `nombre`, `apellidos`, `foto`, `localidad`, `nacimiento`, `estatus`, `equipo_id`) VALUES
('1', 'Admin', NULL, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSECXS1ct7fra9Z4WH-txo2eEXuMcFgJSoixA&usqp=CAU', NULL, NULL, NULL, NULL),
('2', 'Marcos', 'Santos', 'https://upload.wikimedia.org/wikipedia/commons/2/2e/C_Reeve_in_Marriage_of_Figaro_Opening_night_1985.jpg', 'El Salitre', 2000, 1, NULL),
('3', 'Alex', 'Garcia', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQToaHY8TUauaCfcfdDiYeVcRJptSHekVPC1Q&usqp=CAU', 'Los Pilares', 2001, 1, '1AB'),
('4', 'Pablo', 'Solano', 'https://images2.minutemediacdn.com/image/upload/c_fill,w_720,ar_16:9,f_auto,q_auto,g_auto/shape/cover/sport/Chivas-v-Mazatlan-FC---Torneo-Guard1anes-2020-Liga-e3fc889658d3590d9d4dad8fe100ee54.jpg', 'Higuera', 1990, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equ`);

--
-- Indexes for table `jugador`
--
ALTER TABLE `jugador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `equipo_id` (`equipo_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jugador`
--
ALTER TABLE `jugador`
  ADD CONSTRAINT `jugador_ibfk_1` FOREIGN KEY (`equipo_id`) REFERENCES `equipo` (`id_equ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
