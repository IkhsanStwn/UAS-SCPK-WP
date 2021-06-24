-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 06.42
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkwp_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bobot_data`
--

CREATE TABLE `bobot_data` (
  `id` int(11) NOT NULL,
  `id_mobil` int(11) NOT NULL,
  `grade_mesin` int(11) NOT NULL,
  `grade_interior` int(11) NOT NULL,
  `grade_eksterior` int(11) NOT NULL,
  `usia` int(11) NOT NULL,
  `besar_cc` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bobot_data`
--

INSERT INTO `bobot_data` (`id`, `id_mobil`, `grade_mesin`, `grade_interior`, `grade_eksterior`, `usia`, `besar_cc`, `harga`) VALUES
(8, 8, 4, 3, 3, 4, 3, 2),
(9, 9, 5, 4, 4, 3, 2, 2),
(10, 10, 3, 4, 3, 3, 2, 2),
(11, 11, 2, 3, 4, 2, 4, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mobil`
--

CREATE TABLE `data_mobil` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `grade_mesin` varchar(2) NOT NULL,
  `grade_interior` varchar(2) NOT NULL,
  `grade_eksterior` varchar(2) NOT NULL,
  `usia` int(11) NOT NULL,
  `besar_cc` varchar(40) NOT NULL,
  `harga` int(11) NOT NULL,
  `vektor_s` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mobil`
--

INSERT INTO `data_mobil` (`id`, `nama`, `jenis`, `grade_mesin`, `grade_interior`, `grade_eksterior`, `usia`, `besar_cc`, `harga`, `vektor_s`) VALUES
(8, ' kijang innova 2.4G', 'MPV', 'B', 'C', 'C', 3, '2400', 289000000, 2.82233),
(9, 'avanza 1.3G', 'MPV', 'A', 'B', 'B', 5, '1300', 135000000, 3.00796),
(10, 'Jazz type e', 'Hatchback', 'C', 'B', 'C', 5, '1500', 186000000, 2.52147),
(11, 'Lc', 'SUV', 'D', 'C', 'B', 12, '3000', 378000000, 2.29512);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bobot_data`
--
ALTER TABLE `bobot_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_mobil` (`id_mobil`);

--
-- Indeks untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bobot_data`
--
ALTER TABLE `bobot_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `data_mobil`
--
ALTER TABLE `data_mobil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `bobot_data`
--
ALTER TABLE `bobot_data`
  ADD CONSTRAINT `fk_id_mobil` FOREIGN KEY (`id_mobil`) REFERENCES `data_mobil` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
