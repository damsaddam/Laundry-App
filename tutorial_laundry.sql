-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Feb 2023 pada 15.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial_laundry`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_laundry`
--

CREATE TABLE `tb_laundry` (
  `id_laundry` int(11) NOT NULL,
  `id_pelanggan` varchar(15) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `tanggal_terima` date NOT NULL,
  `tanggal_selesai` date NOT NULL,
  `jumlah_kiloan` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_laundry`
--

INSERT INTO `tb_laundry` (`id_laundry`, `id_pelanggan`, `kode_user`, `tanggal_terima`, `tanggal_selesai`, `jumlah_kiloan`, `nominal`, `status`, `catatan`) VALUES
(1, 'PLG-0003', 2, '2020-04-13', '2020-04-15', 2, 14000, 'lunas', 'Kaos 2, Celana 1'),
(2, 'PLG-0001', 1, '2020-04-18', '2020-04-19', 2, 14000, 'lunas', 'Kemeja 1\r\nBaju 2'),
(3, 'PLG-0001', 1, '2020-04-19', '2020-04-21', 2, 14000, 'lunas', 'testing'),
(4, 'PLG-0001', 1, '2020-04-19', '2020-04-19', 2, 14000, 'lunas', 'wsss'),
(5, 'PLG-0001', 1, '2020-04-19', '2020-04-19', 2, 0, 'lunas', 'wsss'),
(6, 'PLG-0003', 1, '2020-04-19', '2020-04-19', 2, 14000, 'lunas', 'd'),
(7, 'PLG-0003', 1, '2020-04-19', '2020-04-19', 2, 14000, 'lunas', 's');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `kode_pelanggan` varchar(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telpon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`kode_pelanggan`, `nama`, `alamat`, `telpon`) VALUES
('PLG-0001', 'Pangeran Saddam Husain', 'Kingston, Jamaica', '08578148039600'),
('PLG-0002', 'Saddam Marley', 'Gorong-Gorong', '544445'),
('PLG-0004', 'Ziggy', 'Land Of Dawn', '08999999');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `kode_transaksi` int(11) NOT NULL,
  `kode_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `catatan` text NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`kode_transaksi`, `kode_user`, `tgl_transaksi`, `pemasukan`, `pengeluaran`, `catatan`, `keterangan`) VALUES
(1, 1, '2020-04-19', 14000, 0, 'testing', 'pemasukan'),
(6, 1, '2020-04-18', 14000, 0, 'Kemeja 1\r\nBaju 2', 'pemasukan'),
(8, 1, '2020-04-19', 0, 0, 'wsss', 'pemasukan'),
(9, 1, '2020-04-19', 0, 5000, 'Beli Skin Epic', 'pengeluaran'),
(10, 1, '2020-05-04', 0, 5000, 'Beli sabun', 'pengeluaran'),
(11, 1, '2023-02-06', 0, 3, 'd', 'pengeluaran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `username`, `nama_user`, `password`, `level`, `foto`) VALUES
(1, 'admin', 'Admin', 'admin', 'admin', 'avatar.png'),
(2, 'kasir', 'kasir1', '123456', 'kasir', 'avatar2.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_laundry`
--
ALTER TABLE `tb_laundry`
  ADD PRIMARY KEY (`id_laundry`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`kode_pelanggan`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`kode_transaksi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_laundry`
--
ALTER TABLE `tb_laundry`
  MODIFY `id_laundry` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `kode_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
