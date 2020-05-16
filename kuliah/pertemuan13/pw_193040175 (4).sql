-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Bulan Mei 2020 pada 00.30
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_193040175`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` char(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Freety Indriani Safitri', '193040175', 'freetyindrianis@gmail.com', 'Teknik Informatika', 'freety.jpg'),
(2, 'Mohammad Iqbal Ghifari', '193040147', 'iqbal@gmail.com', 'Teknik Informatika', 'iqbal.jpg'),
(3, 'Elti Rahmawati', '193040154', 'eltirahmawati@gmail.com', 'Teknik Informatika', 'elti.jpg'),
(4, 'Fajri Khoirunisa', '193040159', 'fajrikhoirunisa@gmail.com', 'Teknik Informatika', 'fajri.jpg'),
(5, 'Rizky Angga Saputra', '193040160', 'angga@gmail.com', 'Teknik Informatika', 'angga.jpg'),
(6, 'Nelli Marliana', '193040165', 'nellimarliana@gmail.com', 'Teknik Informatika', 'nelli.jpg'),
(7, 'Jeremy Anadhika Elyas', '193040173', 'dhika@gmail.com', 'Teknik Informatika', 'dhika.jpg'),
(8, 'Ujang Fatah Abwabal Khoer', '193040174', 'ujangfatah@gmail.com', 'Teknik Informatika', 'ujang.jpg'),
(9, 'Muhamad Fawwazt Sabilarrasyad', '193040176', 'fawaz@gmail.com', 'Teknik Informatika', 'fawaz.jpg'),
(10, 'Nur Safitri Wulandari', '193040181', 'nursafitri@gmail.com', 'Teknik Informatika', 'fitri.jpg'),
(45, 'Dzafir', '193040135', 'zhafir@gmail.com', 'Teknik Informatika', 'ujang.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', '12345'),
(3, 'freety', '54321');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
