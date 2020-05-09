-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2020 pada 18.13
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
  `Id` int(11) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  `Nama Barang` varchar(100) NOT NULL,
  `Stok tersedia` int(10) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Logo Merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`Id`, `Foto`, `Nama Barang`, `Stok tersedia`, `Warna`, `Harga`, `Merk`, `Logo Merk`) VALUES
(1, 'hm.jpg', 'Wool-Blend Coat', 560, 'Beige', '1.900.000', 'H&M', 'hm.png'),
(2, 'KORZ.jpg', 'Basic Printed long Sleeve Shirt', 230, 'Red', '489.000', 'Korz', 'korz.png'),
(3, 'levis_cropped.jpg', 'Cropped Cool Trucker Jacket', 620, 'Cool Sephia Rose', '1.199.900', 'Levis', 'levis_cp.png'),
(4, 'Mango.jpg', 'Mango Woman Striped Cotton Shirt', 465, 'Blue', '699.000', 'Mango Woman', 'mango.png'),
(5, 'SGucci.jpg', 'Gucci Sweater With Cristal GG Motif', 45, 'Oranye', '29.859.507', 'Gucci', 'Gucci.png'),
(6, 'ChanelP.jpg', 'Chanel Pink Kwetwear For Women 38 FR', 365, 'Pink', '18.615.955', 'Chanel', 'Chanel.png'),
(7, 'Prada.jpg', 'Pink Kwetwear For Women 44 IT', 745, 'Pink', '5.962.141', 'Prada', 'prada.png'),
(8, 'DiorP.jpg', 'Dior Beige Leather Jacket For Women 12 UK', 508, 'Brown', '5.786.559', 'Dior', 'dior.png'),
(9, 'HermesA.jpg', 'Hermes Cotton Dress For Women 38 FR', 80, 'Red', '22.451.371', 'Hermes', 'hermes.png'),
(10, 'levis_jacket.jpg', 'Vintage Fit Trucker Jacket', 468, 'Gang Trucker', '1.799.900', 'Levis', 'levis_cp.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `apparel`
--
ALTER TABLE `apparel`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
