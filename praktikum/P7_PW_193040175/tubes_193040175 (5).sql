-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2020 pada 18.25
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
-- Database: `tubes_193040175`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok_tersedia` int(10) NOT NULL,
  `warna` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `logo_merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`id`, `foto`, `nama_barang`, `stok_tersedia`, `warna`, `harga`, `merk`, `logo_merk`) VALUES
(1, 'hm.jpg', 'Wool-Blend Coat', 560, 'Beige', '1.900.000', 'H&M', 'hm.png'),
(2, 'KORZ.jpg', 'Basic Printed long Sleeve Shirt', 230, 'Red', '489.000', 'Korz', 'korz.png'),
(3, 'levis_cropped.jpg', 'Cropped Cool Trucker Jacket', 620, 'Cool Sephia Rose', '1.199.900', 'Levis', 'levis_cp.png'),
(4, 'Mango.jpg', 'Mango Woman Striped Cotton Shirt', 465, 'Blue', '699.000', 'Mango Woman', 'mango.png'),
(5, 'SGucci.jpg', 'Gucci Sweater With Cristal GG Motif', 45, 'Oranye', '29.859.507', 'Gucci', 'Gucci.png'),
(6, 'ChanelP.jpg', 'Chanel Pink Kwetwear For Women 38 FR', 365, 'Pink', '18.615.955', 'Chanel', 'Chanel.png'),
(7, 'Prada.jpg', 'Pink Kwetwear For Women 44 IT', 745, 'Pink', '5.962.141', 'Prada', 'prada.png'),
(8, 'DiorP.jpg', 'Dior Beige Leather Jacket For Women 12 UK', 508, 'Brown', '5.786.559', 'Dior', 'dior.png'),
(9, 'HermesA.jpg', 'Hermes Cotton Dress For Women 38 FR', 80, 'Red', '22.451.371', 'Hermes', 'hermes.png'),
(10, 'levis_jacket.jpg', 'Vintage Fit Trucker Jacket', 468, 'Gang Trucker', '1.799.900', 'Levis', 'levis_cp.png'),
(46, 'hm.jpg', 'tty', 4, 'frws', '6455', 'de', 'h&amp;m.png'),
(47, '', 'erre', 3, 'rrgrg', '34554', 'tbtb', 'hm.png'),
(48, 'hm.jpg', 'tty', 4, 'rrgrg', '34554', 'tbtb', 'hm.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', '12345'),
(3, 'freety', '54321'),
(7, 'indriani', '$2y$10$rFsl83kiSkgvhPKnhuXS.eVgfGxqvYCkLPxDz5M0pUUacaU4TCPGW'),
(8, 'safitri', '$2y$10$3PBdyB0/W/Ak6VrpVF2nJez1aVfEfaXtiNIV53q58.GkhYDUeFaiC'),
(9, 'fitri', '$2y$10$WTxS.ohKVbjnH/d0u9K90OTRf69B0r97ZGp7b/EFJjzUNkbzzGjFO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
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
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
