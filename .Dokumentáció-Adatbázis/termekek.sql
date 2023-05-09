-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 07:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `termekek`
--
CREATE DATABASE IF NOT EXISTS `termekek` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `termekek`;

-- --------------------------------------------------------

--
-- Table structure for table `forgalmazo`
--

CREATE TABLE `forgalmazo` (
  `forgnev` varchar(31) DEFAULT NULL,
  `forgid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `forgalmazo`
--

INSERT INTO `forgalmazo` (`forgnev`, `forgid`) VALUES
('Patella-96 Kft.', 1),
('Pulmo-Medical Kft.', 2),
('Hungimpex Kft.', 3),
('ELEKTRO-OXIGÉN Kft.', 4),
('AIM-Medical Kft.', 5),
('Bus-Oxy Kft.', 6),
('APEX PHARMA KFT.', 7),
('JS-MEDICAL Kft.', 8),
('Alvásterápia Kft.', 9),
('Messer Hungarogáz Kft.', 10),
('Linde Gáz Magyarország Zrt.', 11),
('Rextra Kft.', 12),
('Dispomedic Kft.', 13),
('MedCare Kft.', 14),
('Lohmann & Rauscher Hungary Kft.', 15),
('Compri-Med Kft.', 16),
('medi Hungary Kft.', 17),
('Pharmatextil Kft.', 18),
('Replant 4 Care Kft.', 19),
('Medicaltex Kft.', 20),
('Promobil Rehabilitációs Zrt.', 21),
('Salus Kft.', 22),
('E.T.T.M. Kft.', 23),
('Thuasne Hungary Kft.', 24),
('MEDIQ DIREKT Kft.', 25),
('Veno-Med Kft.', 26),
('Mölnlycke Health Care Kft.', 27),
('Hartmann-Rico Hungária Kft.', 28),
('SALUS Orthopedtechnika Kft.', 29),
('Rehab Medica Kft.', 30),
('Rehab-Észak Kft.', 31),
('SALA-MED Kft.', 32),
('Salix-Med Kft.', 33),
('Consolatio Kft.', 34),
('GYSGY REHA Kft.', 35),
('Ortetika Kft.', 36),
('Ortobrace Kft.', 37),
('TAAN Vagyonkezelő Kft.', 38),
('Prima-Protetika Kft.', 39),
('Rex-San Kft.', 40),
('Rehab-Kelet Kft.', 41),
('Rehab-Centrum Kft.', 42),
('Anita-Hungaria Kft.', 43),
('Korzet Kft.', 44),
('Egyedi gyártás', 45),
('Spranz Kft.', 46),
('Rehab-Hungária Kft.', 47),
('OrtoProfil-Centrum Kft.', 48),
('Becton Dickinson International', 49),
('Sorbens Bt.', 50),
('Novo Nordisk A/S', 51),
('Medcordis Kereskedelmi Kft.', 52),
('Lilly Hungária Kft.', 53),
('Roche (Magyarország) Kft.', 54),
('Medtronic Hungária Kft.', 55),
('Di-Care Zrt.', 56),
('77 Elektronika Kft.', 57),
('REHAB Zrt.', 58),
('Amed-Tech Kft.', 59),
('NOVA Kft.', 60),
('Kondi Bt.', 61),
('OMSZÖV-MEDIC Kft.', 62),
('Minel Kft.', 63),
('Tensol Kft.', 64),
('Victofon Kft.', 65),
('Protone Audio Kft.', 66),
('3M Hungária Kft.', 67),
('Master-Pharma Kft.', 68),
('LBT Kft.', 69);

-- --------------------------------------------------------

--
-- Table structure for table `rendeles`
--

CREATE TABLE `rendeles` (
  `rendelesid` int(10) UNSIGNED NOT NULL,
  `vasarloid` int(10) UNSIGNED NOT NULL,
  `rendelesdatum` date NOT NULL,
  `userid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `rendeles`
--

INSERT INTO `rendeles` (`rendelesid`, `vasarloid`, `rendelesdatum`, `userid`) VALUES
(1, 1, '2023-04-06', 1),
(2, 2, '2023-04-06', 1),
(3, 3, '2023-04-06', 1),
(4, 2, '2023-04-07', 1),
(5, 1, '2023-05-08', 1),
(6, 6, '2023-05-08', 1),
(7, 7, '2023-05-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `termekek`
--

CREATE TABLE `termekek` (
  `termekid` int(10) UNSIGNED NOT NULL,
  `isokod` varchar(18) DEFAULT NULL,
  `termnev` varchar(150) NOT NULL,
  `kep` varchar(255) DEFAULT NULL,
  `forgid` int(10) UNSIGNED DEFAULT NULL,
  `ar` decimal(10,0) DEFAULT NULL,
  `mennyiseg` int(2) DEFAULT NULL,
  `leiras` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `termekek`
--

INSERT INTO `termekek` (`termekid`, `isokod`, `termnev`, `kep`, `forgid`, `ar`, `mennyiseg`, `leiras`) VALUES
(1, '04 03 06 03 03 006', 'Ultrasonic ', 'ultrasonic', 1, '2050', 1, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.  Szakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.'),
(2, '04 03 06 03 03 009', 'Vapor Expert PY-001 ultrahangos inhalátor ', 'py-001', 2, '5608', 28, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n\r\n'),
(3, '04 03 06 06 03 010', 'Omron NE-C28P ', 'ne-c28p', 3, '6579', 6, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n\r\n'),
(4, '04 03 06 06 03 012', 'MIKO kompresszoros inhalátor ', NULL, 4, '2344', 13, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n\r\n'),
(5, '04 03 06 06 03 017', 'PiC Air Spinny Kompresszoros inhalátor ', 'pic-air-spinny', 5, '8069', 21, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n\r\n'),
(6, '04 03 06 06 03 018', 'MiniMax kompresszoros inhalátor ', NULL, 4, '7137', 1, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n\r\n'),
(7, '04 03 06 06 03 019', 'Philips Respironics Innospire Essence kompresszoros inhalátor ', 'philips-resp', 6, '5368', 27, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.'),
(8, '04 03 06 06 03 020', 'OMRON COMP A-I-R Basic NE-C803-E kompresszoros inhalátor ', '803-1', 3, '8143', 35, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.'),
(9, '04 03 06 06 03 021', 'New Family GKA Medical kompresszoros inhalátor ', NULL, 2, '641', 23, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n'),
(10, '04 03 06 06 03 022', 'NB-221C kompresszoros inhalátor ', 'nb221-c', 7, '5454', 44, 'Indikáció: Mucoviscidosis, krónikus bronchitis, bronchiectasia, asthma bronchiale, pseudocroup, tracheostoma.\r\n\r\nSzakképesítési követelmény: tüdőgyógyászat, gyermektüdőgyógyászat, fül-orr-gégegyógyászat, gyermek fül-orr-gégegyógyászat.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tetelek`
--

CREATE TABLE `tetelek` (
  `rendelesid` int(10) UNSIGNED NOT NULL,
  `termekid` int(10) UNSIGNED NOT NULL,
  `mennyiseg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tetelek`
--

INSERT INTO `tetelek` (`rendelesid`, `termekid`, `mennyiseg`) VALUES
(1, 2, 2),
(2, 7, 7),
(2, 5, 5),
(2, 1, 1),
(2, 8, 8),
(3, 9, 9),
(3, 8, 8),
(4, 1, 1),
(4, 7, 7),
(5, 1, 1),
(6, 1, 1),
(7, 3, 4),
(7, 8, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` binary(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`) VALUES
(1, 'admin', 0x61646d696e000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000);

-- --------------------------------------------------------

--
-- Table structure for table `vasarlo`
--

CREATE TABLE `vasarlo` (
  `vasarloid` int(10) UNSIGNED NOT NULL,
  `vasarlonev` varchar(200) NOT NULL,
  `szallitasicim` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `vasarlo`
--

INSERT INTO `vasarlo` (`vasarloid`, `vasarlonev`, `szallitasicim`) VALUES
(1, 'Dominik', 'debrecenKertvarosRakatr'),
(2, 'Nyisztor', 'EpreskertRaktar'),
(3, 'Balázs', 'jozsatekejRaktar'),
(4, 'Nyisztor', 'jozsatekejRaktar'),
(5, 'Dominik', 'debrecenKertvarosRakatr'),
(6, 'Saniy', 'Józsatelek'),
(7, 'Tamás', 'Józsatelek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgalmazo`
--
ALTER TABLE `forgalmazo`
  ADD PRIMARY KEY (`forgid`);

--
-- Indexes for table `rendeles`
--
ALTER TABLE `rendeles`
  ADD PRIMARY KEY (`rendelesid`),
  ADD KEY `fk_rendeles_vasarlo` (`vasarloid`),
  ADD KEY `fk_rendeles_user` (`userid`);

--
-- Indexes for table `termekek`
--
ALTER TABLE `termekek`
  ADD PRIMARY KEY (`termekid`),
  ADD UNIQUE KEY `isokod` (`isokod`),
  ADD KEY `fk_termekek_forgalmazo` (`forgid`);

--
-- Indexes for table `tetelek`
--
ALTER TABLE `tetelek`
  ADD KEY `fk_tetelek_rendeles` (`rendelesid`),
  ADD KEY `fk_tetelek_termek` (`termekid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `vasarlo`
--
ALTER TABLE `vasarlo`
  ADD PRIMARY KEY (`vasarloid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forgalmazo`
--
ALTER TABLE `forgalmazo`
  MODIFY `forgid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `rendeles`
--
ALTER TABLE `rendeles`
  MODIFY `rendelesid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `termekek`
--
ALTER TABLE `termekek`
  MODIFY `termekid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vasarlo`
--
ALTER TABLE `vasarlo`
  MODIFY `vasarloid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rendeles`
--
ALTER TABLE `rendeles`
  ADD CONSTRAINT `fk_rendeles_user` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `fk_rendeles_vasarlo` FOREIGN KEY (`vasarloid`) REFERENCES `vasarlo` (`vasarloid`);

--
-- Constraints for table `termekek`
--
ALTER TABLE `termekek`
  ADD CONSTRAINT `fk_termekek_forgalmazo` FOREIGN KEY (`forgid`) REFERENCES `forgalmazo` (`forgid`);

--
-- Constraints for table `tetelek`
--
ALTER TABLE `tetelek`
  ADD CONSTRAINT `fk_tetelek_rendeles` FOREIGN KEY (`rendelesid`) REFERENCES `rendeles` (`rendelesid`),
  ADD CONSTRAINT `fk_tetelek_termek` FOREIGN KEY (`termekid`) REFERENCES `termekek` (`termekid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
