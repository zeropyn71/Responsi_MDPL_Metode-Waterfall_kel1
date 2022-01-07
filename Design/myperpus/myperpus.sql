-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Nov 2021 pada 13.37
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myperpus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_buku`
--

CREATE TABLE `tab_buku` (
  `kode_buku` varchar(10) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis_buku` varchar(100) NOT NULL,
  `penerbit_buku` varchar(100) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_buku`
--

INSERT INTO `tab_buku` (`kode_buku`, `judul_buku`, `penulis_buku`, `penerbit_buku`, `tahun_terbit`) VALUES
('1234567891', 'belajar html ', 'dusk', 'benderang', '2021'),
('1234567892', 'belajar kolaborasi', 'mark', 'cahaya', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_transaksi`
--

CREATE TABLE `tab_transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `no_induk` varchar(10) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `tgl_pinjam` varchar(50) NOT NULL,
  `tgl_kembali` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_transaksi`
--

INSERT INTO `tab_transaksi` (`id_transaksi`, `judul_buku`, `no_induk`, `nama_lengkap`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(19, 'belajar kolaborasi', '123456', 'anggota pertama', '27-11-2021', '04-12-2021', 'Kembali'),
(20, 'belajar html ', '123456', 'anggota pertama', '27-11-2021', '04-12-2021', 'Kembali'),
(21, 'belajar kolaborasi', '123456', 'anggota pertama', '27-11-2021', '04-12-2021', 'Kembali'),
(22, 'belajar html ', '123456', 'anggota pertama', '27-11-2021', '04-12-2021', 'Pinjam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tab_user`
--

CREATE TABLE `tab_user` (
  `no_induk` int(11) NOT NULL,
  `nama_lengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ulang_pass` varchar(100) NOT NULL,
  `level` enum('Anggota','Operator','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tab_user`
--

INSERT INTO `tab_user` (`no_induk`, `nama_lengkap`, `username`, `no_hp`, `password`, `ulang_pass`, `level`) VALUES
(123456, 'anggota pertama', 'anggota1', '081234567890', 'dfb9e85bc0da607ff76e0559c62537e8', 'anggota', 'Anggota'),
(123457, 'operator pertama', 'operator1', '081234567890', '4b583376b2767b923c3e1da60d10de59', 'operator', 'Operator'),
(123458, 'admin pertama', 'admin1', '081234567890', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tab_buku`
--
ALTER TABLE `tab_buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indeks untuk tabel `tab_transaksi`
--
ALTER TABLE `tab_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tab_user`
--
ALTER TABLE `tab_user`
  ADD PRIMARY KEY (`no_induk`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tab_transaksi`
--
ALTER TABLE `tab_transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
