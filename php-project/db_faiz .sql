-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Feb 2021 pada 05.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_faiz`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_biodata`
--

CREATE TABLE `tbl_biodata` (
  `id_biodata` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `jurusan` int(5) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `alamat` text NOT NULL,
  `dokument` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_biodata`
--

INSERT INTO `tbl_biodata` (`id_biodata`, `Nama`, `Email`, `jenis_kelamin`, `jurusan`, `tanggal`, `alamat`, `dokument`) VALUES
(12, 'Ahmad Faiz', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2002-07-12', 'asadasda', ''),
(13, 'Ahmad Faiz', 'afaiz6335@gmail.com', '', 0, '0000-00-00', '', ''),
(14, 'puling', 'anonymous@gmail.com', '', 0, '0000-00-00', '', ''),
(15, 'puling', 'puling21346@gmail.com', '', 0, '0000-00-00', '', ''),
(16, 'anonymous', 'anonymous@gmail.com', '', 0, '0000-00-00', '', ''),
(17, 'Ahmad Faiz', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-04', 'Jakarta', ''),
(18, 'puling', 'anonymous@gmail.com', 'Laki-laki', 3, '2021-02-20', 'Jakarta', ''),
(19, 'puling', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-12', 'Bekasi/Jakarta', ''),
(20, 'puling', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-11', 'jakarta', ''),
(21, 'puling', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-12', 'jakarta', ''),
(22, 'puling', 'afaiz6335@gmail.com', 'Laki-laki', 1, '0000-00-00', 'jambi\r\n        ', 'foto jaket putih.jpeg'),
(28, 'anonymous', 'anonymous@gmail.com', 'Laki-laki', 2, '2021-02-19', 'sajdhsada', 'WhatsApp Image 2021-01-27 at 01.48.45 (1).jpeg'),
(29, '', '', '', 0, '0000-00-00', '', ''),
(31, 'Ahmad Faiz', 'afaiz6335@gmail.com', 'Laki-laki', 2, '2021-02-24', 'asdasdad\r\n        ', 'foto hacker pakai topeng.jpeg'),
(32, 'Ahmad Faiz', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-10', '\r\n        asdasda', 'foto jaket putih.jpeg'),
(33, 'Ahmad Faiz', 'afaiz6335@gmail.com', 'Laki-laki', 1, '2021-02-09', '\r\n        sadasdsa', 'download.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `keterangan`) VALUES
(1, 'Sistem informasi'),
(2, 'Ekonomi'),
(3, 'Sastra inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'puling', 'puling'),
(3, 'belajar', 'belajar'),
(4, 'melihat', 'melihat'),
(7, 'webhoz', 'webhoz'),
(8, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  ADD PRIMARY KEY (`id_biodata`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_biodata`
--
ALTER TABLE `tbl_biodata`
  MODIFY `id_biodata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
