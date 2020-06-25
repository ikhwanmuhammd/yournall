-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2020 pada 18.08
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
-- Database: `db_yournall`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(2, 'Bussiness Management'),
(3, 'Mechanic'),
(4, 'Civil'),
(5, 'Psycology'),
(12, 'Math'),
(15, 'Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `issn` varchar(64) NOT NULL,
  `title` varchar(256) NOT NULL,
  `abstract` varchar(10000) NOT NULL,
  `type` enum('National','International') NOT NULL,
  `category` varchar(128) NOT NULL,
  `year` varchar(11) NOT NULL,
  `date_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `upload_by` varchar(128) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `journal`
--

INSERT INTO `journal` (`id`, `issn`, `title`, `abstract`, `type`, `category`, `year`, `date_upload`, `upload_by`, `file`) VALUES
(32, '67163746735', 'jurnal 1', 'Jurnal 1 merupakan tulisan khusus yang memuat artikel suatu bidang ilmu tertentu. Jurnal merupakan tulisan khusus yang memuat artikel suatu bidang ilmu tertentu. Jurnal juga merupakan tulisan yang dikeluarkan oleh seorang yang berkompeten di bidangnya dan diterbitkan oleh Suatu instansi (Lembaga). Astrophysical Journal – astronomi.', 'National', 'Bussiness Management', '2005', '2020-06-25 14:08:45', 'Muhammad Fikri', '05_use_case_diagram.pdf'),
(33, '67163746737', 'jurnal 2', 'Jurnal 2 merupakan tulisan khusus yang memuat artikel suatu bidang ilmu tertentu. Jurnal merupakan tulisan khusus yang memuat artikel suatu bidang ilmu tertentu. Jurnal juga merupakan tulisan yang dikeluarkan oleh seorang yang berkompeten di bidangnya dan diterbitkan oleh Suatu instansi (Lembaga). Astrophysical Journal – astronomi.', 'National', 'Civil', '2007', '2020-06-25 14:08:55', 'Muhammad Ikhwanudin', '10_Naskah_Publikasi_Ilmiah.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `photo` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `photo`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(6, 'Mohammad Fikri', 'fikri3@gmail.com', 'default.jpg', '$2y$10$EaWnNISVMGrpLGJvWrWUzeyGC/iayWdm6iyl4b5ge.BEAS5kGNLU.', 2, 1, 1587280340),
(7, 'Ikhwan Muhammad', 'm.ikhwanudin777@gmail.com', 'default.jpg', '$2y$10$4.bUAYZo7Y5hosiARCD.0OtOl2P5lmHiqAgtFT0uxPOUI34ULynR6', 1, 1, 1587280497);

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
(1, 'Administrator'),
(2, 'Member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `journal`
--
ALTER TABLE `journal`
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
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
