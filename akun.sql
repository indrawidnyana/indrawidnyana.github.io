-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Okt 2019 pada 11.53
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
  `Nama` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `Nama_Pengguna` varchar(255) COLLATE utf8_bin NOT NULL,
  `No_hp` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`Nama`, `Nama_Pengguna`, `No_hp`, `email`, `password`, `photo`) VALUES
('Defah', 'Dera Arafah', '081245678950', 'dera@gmail.com', '2222', 'Tom-Holland-Spider-Man-2-1024x726.jpg'),
('dera', 'Dera arafah', '02838019828', 'asu@gmail.com', 'kiki', 'Tom-Holland-Spider-Man-2-1024x726.jpg'),
('Alex', 'alexander', 'aoisdw@gmail.com', '02838019828', '123456', 'default.svg'),
('hasim alim', 'alim', '02838019828', 'asu@gmail.com', 'sisi', 'Tom-Holland-Spider-Man-2-1024x726.jpg'),
('karim benzema', 'karim', '08224457576', 'karim@gmail.com', '123456', 'High-School-Student-Thumbnail.jpg');

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
