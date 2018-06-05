-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2018 at 01:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apkepegawaian`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `yourname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `yourname`) VALUES
(1, 'admin', 'admin', 'Ibnul Qoyyim');

-- --------------------------------------------------------

--
-- Table structure for table `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `kode` int(15) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departemen`
--

INSERT INTO `departemen` (`kode`, `departemen`) VALUES
(1010, 'Pemasaran'),
(1011, 'Financial'),
(1012, 'Produksi'),
(1013, 'Logistik');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `name`, `dateofbirth`, `gender`, `departemen`, `email`, `addres`, `photo`) VALUES
(1012, 'Yosep', '1990-10-13', 'Male', 'Pendidikan', 'yosep33@gmail.com', 'Jl. suka asih raya no 78, Bandung', 'yosep.jpg'),
(12130001, 'Maya Septriasa', '1994-11-06', 'Female', 'Financial', 'mayaseptri23@gmail.com', 'jl. cisaranten endah 09, bandung', 'maya.jpg'),
(12130002, 'Yosep', '1991-11-03', 'Male', 'Financial', 'yosep33@gmail.com', 'jl. suka asih 17, bandung', 'yosep.jpg'),
(12130003, 'Farida nurhayati', '1982-07-21', 'Female', 'Financial', 'faridanur@gmail.com', 'jl. purwakarta 7 antapani, bandung', 'farida.jpg'),
(12140001, 'Anton Siahaan', '1989-12-25', 'Male', 'Pemasaran', 'anton1933@gmial.com', 'jl. margahayu raya 23, bandung', 'anton.jpg'),
(12140002, 'Cahyati Alhusna', '1980-01-02', 'Female', 'Pemasaran', 'cahyatihusna7@gmail.com', 'jl. hantap 9 antapani, bandung', 'cahyati.jpg'),
(12140003, 'Andres Tawalani', '1984-04-06', 'Male', 'Pemasaran', 'andrestawalani7@gmail.com', 'jl. mengger raya 02, bandung', 'andres.jpg'),
(12150001, 'Indah permata', '1995-01-13', 'Female', 'Produksi', 'indahpermata95@gmail.com', 'jl. arcamanik raya 05, bandung', 'indah.jpg'),
(12150002, 'Kiki Rizki', '1993-09-14', 'Male', 'Produksi', 'kikirizki34gmail.com', 'jl. antapani raya 32, bandung', 'kiki.jpg'),
(12150003, 'Reza Syahrial', '1993-12-22', 'Male', 'Produksi', 'rezathea@gmail.com', 'jl. suka makmur 42, bandung', 'reza.jpg'),
(12150004, 'Rico Situmorang', '1987-09-18', 'Male', 'Produksi', 'ricositumorang87@gmail.com', 'jl. pahlawan 89. bandung', 'rico.jpg'),
(12150005, 'Arwadi ', '1995-12-01', 'Male', 'Produksi', 'arwadigans@gmail.com', 'jl. sumber raya 9, arcamanik bandung', 'arwadi.jpg'),
(12160001, 'Wini Dwi Yanti', '1994-05-17', 'Female', 'Logistik', 'winidwiyanti@gmail.com', 'jl. rancasari 6, bandung', 'wini.jpg'),
(12160002, 'Ganjar ridwan', '1980-11-27', 'Male', 'Logistik', 'ganjar6677@gmail.com', 'jl. hayam wuruk 23, bandung', 'ganjar.jpg'),
(12160003, 'Aan Rusdi', '1990-10-22', 'Male', 'Logistik', 'aanteagitu@gmail.com', 'jl. cikutra raya 22, bandung', 'cecep.jpg'),
(12160004, 'Miya', '1979-05-27', 'Female', 'Logistik', 'miyaini@gmail.com', 'jl. suka kamu iya kamu 89, bandung', 'miya.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
