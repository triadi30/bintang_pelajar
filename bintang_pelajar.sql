-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 16 Jun 2021 pada 07.32
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bintang_pelajar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id` int(11) NOT NULL,
  `id_user` int(128) NOT NULL,
  `nama_cabang` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `id_user`, `nama_cabang`) VALUES
(1, 5, 'SMP IT BOGOR'),
(2, 7, 'SMP IT Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `tempat_lahir` varchar(225) NOT NULL,
  `tanggal_lahir` varchar(225) NOT NULL,
  `nisn` int(128) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `asal_sekolah` varchar(225) NOT NULL,
  `sekolah_pilihan` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `tempat_lahir`, `tanggal_lahir`, `nisn`, `alamat`, `asal_sekolah`, `sekolah_pilihan`, `status`, `role_id`, `is_active`, `date_created`) VALUES
(4, 'Sulistiowati', 'panitia@gmail.com', 'default.jpg', '$2y$10$Av5LsWex0cZSarDjNwEpp.auanIhNOLtwrtvRFRdWaeIdxllI8vYG', '', '', 0, '', '', '', '', 2, 1, 1621908782),
(5, 'Antonio', 'cabang@gmail.com', 'default.jpg', '$2y$10$Av5LsWex0cZSarDjNwEpp.auanIhNOLtwrtvRFRdWaeIdxllI8vYG', '', '', 0, '', '', '', '', 1, 1, 1621909505),
(6, 'Triadi Kurniawan', 'siswa2@gmail.com', 'default.jpg', '$2y$10$1aQfbG4AeWe0AzYHTG17mup0Iq5Wv4KieJ2Mp9jKBBOAXD/YSVV/K', 'unaaha', '1991-11-11', 2147483647, 'Swasembada Barat Street 4, Kebon Bawang', 'MIN 2 KENDARI', 'SMP IT BOGOR', 'Terdaftar', 3, 1, 1623826572),
(7, 'Rayhan', 'cabang2@gmail.com', 'default.jpg', '$2y$10$Av5LsWex0cZSarDjNwEpp.auanIhNOLtwrtvRFRdWaeIdxllI8vYG', '', '', 0, '', '', '', '', 1, 1, 0),
(8, 'Aco', 'siswa3@gmail.com', 'default.jpg', '$2y$10$qC/GTp01jtyP2jAqCMjsW.PVkqlZaCxZPFwFs.9mPqgUF17PJp4W6', 'bogor', '1998-02-02', 2147483647, 'Jakarta Utara', 'SDN 2 Lamongan', 'SMP IT BOGOR', 'Terdaftar', 3, 1, 1623828263);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Kepala Cabang'),
(2, 'Panitia PPDB'),
(3, 'Siswa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
