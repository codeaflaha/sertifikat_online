-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Des 2020 pada 05.24
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_pembayaran`
--

CREATE TABLE `metode_pembayaran` (
  `id_metode` tinyint(2) NOT NULL,
  `nama_metode` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_seminar`
--

CREATE TABLE `pendaftaran_seminar` (
  `id_pendaftaran` int(10) NOT NULL,
  `id_seminar` int(3) NOT NULL,
  `id_peserta` int(4) UNSIGNED ZEROFILL NOT NULL,
  `tgl_daftar` date NOT NULL,
  `bukti_byr` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE `peserta` (
  `no_registrasi` int(4) UNSIGNED ZEROFILL NOT NULL,
  `nama` varchar(40) NOT NULL,
  `institusi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`no_registrasi`, `nama`, `institusi`) VALUES
(0001, 'M Najamuddin dwi M skom', 'Universitas Pelita Bangsa'),
(0002, 'aris supriyadi', 'Itats'),
(0006, 'MUHAMMAD NAJAM DI DUNIA', 'asf'),
(0007, 'Ir Soekarno', 'ITB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seminar`
--

CREATE TABLE `seminar` (
  `id_seminar` int(3) NOT NULL,
  `nama_seminar` varchar(50) NOT NULL,
  `tgl_pelaksana` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `seminar`
--

INSERT INTO `seminar` (`id_seminar`, `nama_seminar`, `tgl_pelaksana`) VALUES
(1, 'Munasba', '2020-12-17'),
(2, 'Munasba', '2020-12-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pendaftaran_seminar`
--
ALTER TABLE `pendaftaran_seminar`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `id_seminar` (`id_seminar`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indeks untuk tabel `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`no_registrasi`);

--
-- Indeks untuk tabel `seminar`
--
ALTER TABLE `seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `peserta`
--
ALTER TABLE `peserta`
  MODIFY `no_registrasi` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `seminar`
--
ALTER TABLE `seminar`
  MODIFY `id_seminar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pendaftaran_seminar`
--
ALTER TABLE `pendaftaran_seminar`
  ADD CONSTRAINT `pendaftaran_seminar_ibfk_1` FOREIGN KEY (`id_seminar`) REFERENCES `seminar` (`id_seminar`),
  ADD CONSTRAINT `pendaftaran_seminar_ibfk_2` FOREIGN KEY (`id_peserta`) REFERENCES `peserta` (`no_registrasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
