-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. Mei 2018 jam 14:29
-- Versi Server: 5.5.16
-- Versi PHP: 5.3.8

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
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `yourname` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `yourname`) VALUES
(1, 'admin', 'admin', 'suke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `kode` int(15) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`kode`, `departemen`) VALUES
(101, 'Pendidikan'),
(102, 'Perkebunan'),
(103, 'Perairan'),
(104, 'Pertahanan'),
(105, 'Perhutanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
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
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id`, `name`, `dateofbirth`, `gender`, `departemen`, `email`, `addres`, `photo`) VALUES
(1306003, 'Yusup Rizal Muttaqin', '2018-05-17', 'Male', 'Pendidikan', 'sukerizal@gmail.com', 'Kp. Bebedahan Rt/Rw 03/01 Des. Wanamekar Kec. Wanaraja - Garut', 'Anime-Wallpaper-Wallpaper.jpg'),
(1306004, 'Akpi Saepul Malik', '2018-05-06', 'Male', 'Perkebunan', 'akpisaepul@gmail.com', 'Garut', 'luffy_by_curlyb34r-d61p7w1.jpg'),
(1306005, 'Rifan Setiawan', '2018-04-29', 'Male', 'Perairan', 'rifansetiawan@gmail.com', 'Garut', 'Anime-Card-Red-Eyes-Anime-Wallpaper.jpg'),
(1306006, 'Yazid Hilman M', '2018-04-29', 'Male', 'Pendidikan', 'yazidhilman@gmail.com', 'Garut', 'logo3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
