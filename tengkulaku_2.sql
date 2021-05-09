-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2021 pada 08.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tengkulaku_1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id_order` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `kuantitas` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(8) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Buah Segar'),
(2, 'Sayur Segar'),
(3, 'Sayur Kering'),
(4, 'Buah Kering');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_user` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `kuantitas` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_order` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status_order` enum('diproses','diterima','dibatal') NOT NULL,
  `biaya_kirim` int(16) NOT NULL,
  `biaya_produk` int(16) NOT NULL,
  `total` int(16) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `keterangan` enum('belum','lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(8) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` int(16) NOT NULL,
  `stok` int(16) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_kategori` int(8) NOT NULL,
  `tgl_upload` date NOT NULL,
  `verifikasi` enum('diproses','diterima') NOT NULL,
  `id_user` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga`, `stok`, `foto`, `deskripsi`, `id_kategori`, `tgl_upload`, `verifikasi`, `id_user`) VALUES
(6, 'Pepaya', 5000, 63, '609658d69544c.jpg', 'Ora mudhun yen ora gawa mrica sakanthong', 1, '2021-05-08', 'diterima', 2),
(9, 'Buah Mangga', 12000, 26, 'Buah Mangga2609777e1b88ff.jpg', 'Mangga Sangat Enak', 1, '2021-05-09', 'diterima', 2),
(10, 'Buah Nanas Manis Madu', 15000, 10, 'Buah Nanas Manis Madu260977d1f844d4.jpg', 'enak bnget ', 1, '2021-05-09', 'diproses', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(8) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(16) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `kota` varchar(255) DEFAULT NULL,
  `provinsi` varchar(255) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `level` enum('admin','seller','customer') NOT NULL,
  `validasi` enum('belum','sudah') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `no_hp`, `alamat`, `kota`, `provinsi`, `profil`, `level`, `validasi`) VALUES
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', '085852127128', 'Jalan Sumber Sari', 'Malang', 'Jawa Timur', NULL, 'admin', 'sudah'),
(2, 'seller', 'seller', '202cb962ac59075b964b07152d234b70', '085852127126', 'Gresik', 'Kota Gresik', 'Jawa Timur', NULL, 'seller', 'sudah'),
(3, 'customer', 'customer', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 'customer', 'sudah'),
(4, 'Khafit', 'k@b.z', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 'customer', 'belum'),
(5, 'Firzon Ainur', 'firzonainur@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 'customer', 'belum'),
(7, 'Kartika Wahyu', 'kartika@gmail.com', '202cb962ac59075b964b07152d234b70', NULL, NULL, NULL, NULL, NULL, 'seller', 'belum'),
(8, 'Nandha Mustika', 'nandhams@gmail.com', '202cb962ac59075b964b07152d234b70', '085436256477', 'Jalan Pattimura', 'Indramayu', 'Indramayu', NULL, 'seller', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_order` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
