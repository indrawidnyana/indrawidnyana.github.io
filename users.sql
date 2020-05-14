-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 10.40
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `Nama` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `Nama_Pengguna` varchar(100) COLLATE utf8_bin NOT NULL,
  `No_hp` varchar(30) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`Nama`, `Nama_Pengguna`, `No_hp`, `email`, `password`) VALUES
('Alex', 'alexander', 'aoisdw@gmail.com', '02838019828', '123456'),
('asu', 'asyu', 'asu@gmail.com', '082245457676', 'santuy'),
('muhammad jail', 'jail', 'jail.de@gmail.com', '082255668778', 'redaksi'),
('maul', 'mael', 'sdasd', '12345', '123456'),
('faza', 'mahmud faza', 'asu@gmail.com', '08123', '1234'),
('Rezaaa', 'reza', '0822', 'reza@gmail.com', 'susilawati'),
('kontoru', 'ridho', 'aoisdw@gmail.com', '02838019828', '2222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Nama_Pengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
