-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Sep 2021 pada 06.51
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `green_seafood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `seafood`
--

CREATE TABLE `seafood` (
  `id_seafood` int(11) NOT NULL,
  `nama_seafood` varchar(100) NOT NULL,
  `merk_seefood` varchar(50) NOT NULL,
  `jumlah` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `seafood`
--

INSERT INTO `seafood` (`id_seafood`, `nama_seafood`, `merk_seefood`, `jumlah`, `harga`, `gambar`) VALUES
(1, 'Sosis_Junbo_keju', 'Mitra', '5', '125.000', 'sosisjumbo.jpg'),
(2, 'Bakso_Ayam', 'Royal', '3', '45.000', 'baksoayam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `seafood`
--
ALTER TABLE `seafood`
  ADD PRIMARY KEY (`id_seafood`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `seafood`
--
ALTER TABLE `seafood`
  MODIFY `id_seafood` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
