-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 05:24 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `jugador`
--

CREATE TABLE `jugador` (
  `id` varchar(15) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `a_paterno` varchar(15) DEFAULT NULL,
  `a_materno` varchar(12) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `localidad` varchar(25) DEFAULT NULL,
  `nacimiento` date DEFAULT NULL,
  `estatus` tinyint(1) DEFAULT NULL,
  `equipo_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jugador`
--

INSERT INTO `jugador` (`id`, `Nombre`, `a_paterno`, `a_materno`, `foto`, `localidad`, `nacimiento`, `estatus`, `equipo_id`) VALUES
('1', 'Admin', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('2', 'Marcos', 'Santos', 'Perez', NULL, 'El Salitre', '2000-08-02', 1, NULL),
('3', 'Alex', 'Garcia', 'Salas', NULL, 'Los Pilares', '2001-08-04', 0, NULL);

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
ALTER TABLE `jugador` DROP `a_materno`;
ALTER TABLE `jugador` CHANGE `a_paterno` `apellidos` VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;
ALTER TABLE `jugador` CHANGE `Nombre` `nombre` VARCHAR(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;
ALTER TABLE `jugador` CHANGE `nacimiento` `nacimiento` YEAR NULL DEFAULT NULL;
CREATE TABLE `usuario` (
  `user_name` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pasword` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
