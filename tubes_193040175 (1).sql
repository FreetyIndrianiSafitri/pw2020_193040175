-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2020 pada 11.47
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
  `Kantor Pusat` varchar(100) NOT NULL,
  `Warna` varchar(100) NOT NULL,
  `Harga` varchar(100) NOT NULL,
  `Merk` varchar(100) NOT NULL,
  `Logo Merk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `apparel`
--

INSERT INTO `apparel` (`Id`, `Foto`, `Nama Barang`, `Kantor Pusat`, `Warna`, `Harga`, `Merk`, `Logo Merk`) VALUES
(1, 'philipworks.jpg', 'Pride Of Indonesia', 'Jl. Karangsari No.3, Pasteur, Kec.Sukajadi, Kota Bandung, Jawa Barat 40161.', 'White', '525.000', 'Phillip works', 'philps.png'),
(2, 'KORZ.jpg', 'Basic Printed long Sleeve Shirt', 'Jl Jend.Sydirman No.68, Kecamatan Setiabudi, Kota Jakarta Selatan.', 'Red', '489.000', 'Korz', 'korz.png'),
(3, 'SaintLaurent.jpg', 'Saint Laurent Printed Short Sleeve Shirt', 'Paris, Prancis', 'Black', '11.272.000', 'Yves Saint Laurent', 'saintlaurent.png'),
(4, 'Mango.jpg', 'Mango Woman Striped Cotton Shirt', 'Palau-solita i Plegamans, Spanyol', 'Blue', '699.000', 'Mango Woman', 'mango.png'),
(5, 'SGucci.jpg', 'Gucci Sweater With Cristal GG Motif', 'Florence, Italia', 'Oranye', '29.859.507', 'Gucci', 'Gucci.png'),
(6, 'ChanelP.jpg', 'Chanel Pink Kwetwear For Women 38 FR', 'Paris,Prancis', 'Pink', '18.615.955', 'Chanel', 'Chanel.png'),
(7, 'Prada.jpg', 'Pink Kwetwear For Women 44 IT', 'Milan, Italia', 'Pink', '5.962.141', 'Prada', 'prada.png'),
(8, 'DiorP.jpg', 'Dior Beige Leather Jacket For Women 12 UK', 'Huntington Beach, California, Amerika', 'Brown', '5.786.559', 'Dior', 'dior.png'),
(9, 'HermesA.jpg', 'Hermes Cotton Dress For Women 38 FR', 'Beaverton, Oregon, Amerika', 'Red', '22.451.371', 'Hermes', 'hermes.png'),
(10, 'Adidas.jpg', 'Adidas Women', 'Herzogenaurach, Jerman', 'Black', '1.000.000', 'Adidas', 'AdidasB.png');

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
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
