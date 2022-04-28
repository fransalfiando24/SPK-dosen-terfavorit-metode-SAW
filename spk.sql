-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 11:31 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'frans', 'frans24', 'Fran''s Alfiando');

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE IF NOT EXISTS `alternatif` (
  `idalternatif` int(11) NOT NULL AUTO_INCREMENT,
  `kodealternatif` varchar(5) NOT NULL,
  `namaalternatif` varchar(40) NOT NULL,
  PRIMARY KEY (`idalternatif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`idalternatif`, `kodealternatif`, `namaalternatif`) VALUES
(5, 'A1', 'Rini Sovia S.Kom, M.Kom'),
(6, 'A2', 'Eka Praja Wiyata Mandala S.Kom, M.Kom'),
(8, 'A3', 'Devia Kartika S.Kom, M.Kom'),
(9, 'A4', 'Guslendra S.Kom, M.Kom'),
(10, 'A5', 'Pradani Ayu Widya Purnama S.Kom, M.Kom');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `idkriteria` int(11) NOT NULL AUTO_INCREMENT,
  `kodekriteria` varchar(5) NOT NULL,
  `namakriteria` varchar(30) NOT NULL,
  `bobotkriteria` float NOT NULL,
  PRIMARY KEY (`idkriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`idkriteria`, `kodekriteria`, `namakriteria`, `bobotkriteria`) VALUES
(6, 'C1', 'Kedisiplinan', 0.25),
(7, 'C2', 'Sikap', 0.2),
(8, 'C3', 'Tanggung Jawab', 0.3),
(9, 'C4', 'Inisiatif', 0.15),
(10, 'C5', 'Presensi', 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `idnilai` int(11) NOT NULL AUTO_INCREMENT,
  `idalternatif` int(11) NOT NULL,
  `idkriteria` int(11) NOT NULL,
  `nilaikriteria` int(11) NOT NULL,
  PRIMARY KEY (`idnilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `idalternatif`, `idkriteria`, `nilaikriteria`) VALUES
(54, 5, 6, 81),
(55, 5, 7, 83),
(56, 5, 8, 86),
(57, 5, 9, 89),
(58, 5, 10, 84),
(59, 6, 6, 88),
(60, 6, 7, 88),
(61, 6, 8, 88),
(62, 6, 9, 90),
(63, 6, 10, 87),
(64, 8, 6, 86),
(65, 8, 7, 87),
(66, 8, 8, 86),
(67, 8, 9, 86),
(68, 8, 10, 83),
(69, 9, 6, 81),
(70, 9, 7, 79),
(71, 9, 8, 80),
(72, 9, 9, 83),
(73, 9, 10, 78),
(74, 10, 6, 85),
(75, 10, 7, 84),
(76, 10, 8, 86),
(77, 10, 9, 87),
(78, 10, 10, 85);

-- --------------------------------------------------------

--
-- Table structure for table `rengking`
--

CREATE TABLE IF NOT EXISTS `rengking` (
  `idrengking` int(11) NOT NULL AUTO_INCREMENT,
  `idalternatif` int(11) NOT NULL,
  `totalnilai` float NOT NULL,
  PRIMARY KEY (`idrengking`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `rengking`
--

INSERT INTO `rengking` (`idrengking`, `idalternatif`, `totalnilai`) VALUES
(10, 5, 0.957),
(11, 6, 1),
(12, 8, 0.973),
(13, 9, 0.911),
(14, 10, 0.968);

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE IF NOT EXISTS `subkriteria` (
  `idsubkriteria` int(11) NOT NULL AUTO_INCREMENT,
  `idkriteria` int(11) NOT NULL,
  `namasubkriteria` varchar(30) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`idsubkriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`idsubkriteria`, `idkriteria`, `namasubkriteria`, `nilai`) VALUES
(1, 6, '', 1),
(2, 6, 'Baik', 3);
