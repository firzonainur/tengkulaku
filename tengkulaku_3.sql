-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2021 pada 05.20
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
-- Database: `tengkulaku_3`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesan`
--

CREATE TABLE `detail_pesan` (
  `id_order` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `id_seller` int(8) NOT NULL,
  `kuantitas` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_pesan`
--

INSERT INTO `detail_pesan` (`id_order`, `id_produk`, `id_seller`, `kuantitas`, `subtotal`) VALUES
(1, 6, 2, 3, 15000),
(2, 6, 2, 2, 10000),
(5, 12, 8, 2, 50000),
(5, 9, 2, 3, 36000),
(5, 6, 2, 5, 25000),
(6, 9, 2, 2, 24000),
(7, 9, 2, 1, 12000),
(8, 6, 2, 1, 5000),
(8, 9, 2, 5, 60000),
(8, 12, 8, 1, 25000),
(9, 12, 8, 1, 25000);

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
  `id_seller` int(8) NOT NULL,
  `kuantitas` int(16) NOT NULL,
  `subtotal` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_user`, `id_produk`, `id_seller`, `kuantitas`, `subtotal`) VALUES
(5, 13, 2, 1, 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_bayar`
--

CREATE TABLE `metode_bayar` (
  `id_MB` int(8) NOT NULL,
  `nama_MB` varchar(255) NOT NULL,
  `biaya_MB` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode_bayar`
--

INSERT INTO `metode_bayar` (`id_MB`, `nama_MB`, `biaya_MB`) VALUES
(1, 'Transfer Bank', 10000),
(2, 'COD', 0),
(3, 'OVO', 5000),
(4, 'LINK AJA', 5000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `metode_kirim`
--

CREATE TABLE `metode_kirim` (
  `id_MK` int(8) NOT NULL,
  `nama_MK` varchar(255) NOT NULL,
  `bayar_MK` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `metode_kirim`
--

INSERT INTO `metode_kirim` (`id_MK`, `nama_MK`, `bayar_MK`) VALUES
(1, 'COD', 8000),
(2, 'JNE', 10000),
(3, 'JNT', 10000),
(4, 'Sicepat', 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_order` int(8) NOT NULL,
  `id_pembeli` int(8) NOT NULL,
  `tgl_pesan` date NOT NULL,
  `status_order` enum('diproses','diterima','dibatal') NOT NULL,
  `metode_kirim` int(16) NOT NULL,
  `biaya_kirim` int(16) NOT NULL,
  `biaya_produk` int(16) NOT NULL,
  `total` int(16) NOT NULL,
  `metode_bayar` int(16) NOT NULL,
  `bukti` varchar(255) NOT NULL,
  `keterangan` enum('proses','lunas') NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_order`, `id_pembeli`, `tgl_pesan`, `status_order`, `metode_kirim`, `biaya_kirim`, `biaya_produk`, `total`, `metode_bayar`, `bukti`, `keterangan`, `alamat`, `kota`, `provinsi`) VALUES
(1, 3, '2021-05-10', 'diproses', 1, 0, 15000, 15000, 1, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(2, 3, '2021-05-10', 'diproses', 1, 0, 10000, 10000, 1, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(5, 3, '2021-05-11', 'diproses', 1, 0, 111000, 111000, 1, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(6, 3, '2021-05-15', 'diproses', 1, 8000, 24000, 37000, 3, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(7, 3, '2021-05-15', 'diproses', 1, 8000, 12000, 25000, 3, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(8, 3, '2021-05-15', 'diproses', 2, 10000, 90000, 110000, 1, '', 'proses', 'Kras', 'Kediri', 'Jawa Timur'),
(9, 5, '2021-05-16', 'diproses', 1, 8000, 25000, 43000, 1, '', 'proses', 'Blitar', 'Blitar', 'Jawa Timur'),
(10, 5, '2021-05-16', 'diproses', 1, 8000, 10000, 0, 1, '', 'proses', 'Blitar', 'Blitar', 'Jawa Timur');

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
(6, 'Pepaya', 5000, 0, '609658d69544c.jpg', 'Pepaya, atau betik adalah tumbuhan yang berasal dari Meksiko bagian selatan dan bagian utara dari Amerika Selatan, dan kini menyebar luas dan banyak ditanam di seluruh daerah tropis untuk diambil buahnya. C. papaya adalah satu-satunya jenis dalam genus Carica', 1, '2021-05-08', 'diterima', 2),
(9, 'Buah Mangga', 12000, 5, 'Buah Mangga2609777e1b88ff.jpg', 'Mangga atau mempelam adalah nama sejenis buah, demikian pula nama pohonnya. Mangga termasuk ke dalam marga Mangifera, yang terdiri dari 35-40 anggota dari suku Anacardiaceae. Nama \"mangga\" berasal dari bahasa Tamil, mankay, yang berarti man \"pohon mangga\" + kay \"buah\"', 1, '2021-05-09', 'diterima', 2),
(10, 'Buah Nanas Manis Madu', 15000, 10, 'Buah Nanas Manis Madu260977d1f844d4.jpg', 'enak bnget ', 1, '2021-05-09', 'diproses', 2),
(12, 'Durian', 25000, 35, 'Durian8609a2951b0602.jpeg', 'Durio adalah nama marga durian; termasuk ke dalam suku Malvaceae, anak suku Helicteroideae. Dari sekitar 27-30 spesies anggota marga ini, sejauh ini diketahui sembilan spesies yang menghasilkan buah yang dapat dimakan.', 1, '2021-05-11', 'diterima', 8),
(13, 'Jeruk', 5000, 10, 'Jeruk260a087bc86faf.jpg', 'Jeruk memiliki kandungan vitamin c yang tinggi', 1, '2021-05-16', 'diterima', 2);

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
(1, 'admin', 'admin', '202cb962ac59075b964b07152d234b70', '085852127128', 'Jalan Sumber Sari', 'Malang', 'Jawa Timur', 'admin60a074edec404.svg', 'admin', 'sudah'),
(2, 'Bakul Buah', 'seller', '202cb962ac59075b964b07152d234b70', '085852127126', 'Gresik', 'Kota Gresik', 'Jawa Timur', 'Bakul Buah60a076eb327e8.svg', 'seller', 'sudah'),
(3, 'customer', 'customer', '202cb962ac59075b964b07152d234b70', '', 'Kras', 'Kediri', 'Jawa Timur', 'customer60a06f484e03e.svg', 'customer', 'sudah'),
(4, 'Khafit', 'k@b.z', '202cb962ac59075b964b07152d234b70', '0873535476', 'Tulungagung', 'Tulungagung', 'Jawa Timur', 'Khafit60a0789e823f1.svg', 'customer', 'belum'),
(5, 'Firzon Ainur', 'firzonainur@gmail.com', '202cb962ac59075b964b07152d234b70', '085852127128', 'Blitar', 'Blitar', 'Jawa Timur', 'Firzon Ainur60a06fb94e3a0.svg', 'customer', 'belum'),
(7, 'Kartika Wahyu', 'kartika@gmail.com', '202cb962ac59075b964b07152d234b70', '098765434543', 'Kebumen', 'Kebumen', 'Kebumen', 'Kartika Wahyu60a07692dec64.svg', 'seller', 'belum'),
(8, 'Nandha Mustika', 'nandhams@gmail.com', '202cb962ac59075b964b07152d234b70', '085436256477', 'Jalan Pattimura', 'Indramayu', 'Jawa Barat', 'Nandha Mustika60a0761baca83.svg', 'seller', 'belum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `metode_bayar`
--
ALTER TABLE `metode_bayar`
  ADD PRIMARY KEY (`id_MB`);

--
-- Indeks untuk tabel `metode_kirim`
--
ALTER TABLE `metode_kirim`
  ADD PRIMARY KEY (`id_MK`);

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
-- AUTO_INCREMENT untuk tabel `metode_bayar`
--
ALTER TABLE `metode_bayar`
  MODIFY `id_MB` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `metode_kirim`
--
ALTER TABLE `metode_kirim`
  MODIFY `id_MK` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_order` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
