-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2023 pada 06.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_galon`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_product`, `id_pelanggan`, `jumlah`, `harga`, `deleted`) VALUES
(7, 7, 1, 5, 18000, '0');

--
-- Trigger `tb_order`
--
DELIMITER $$
CREATE TRIGGER `t_order` AFTER INSERT ON `tb_order` FOR EACH ROW BEGIN
UPDATE tb_product set jumlah=jumlah - NEW.jumlah
WHERE id_product = NEW.id_product;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_hp`, `username`, `password`) VALUES
(1, 'Asep', 'Majalengka', '085722384826', 'Asep', 'asep'),
(2, 'Dadan', 'Majalengka', '085722384826', 'Dadan', 'dadan'),
(3, 'Nurjaman', '<p><span style=\"font-weight: normal;\">Majalengka</span><br></p>', '083150687527', 'Nurjaman', 'nur'),
(4, 'Jaja', 'Apuy', '085722384826', 'jaja', 'jaja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penghasilan`
--

CREATE TABLE `tb_penghasilan` (
  `id_penghasilan` int(11) NOT NULL,
  `pemasukan` int(11) NOT NULL,
  `pengeluaran` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_penghasilan`
--

INSERT INTO `tb_penghasilan` (`id_penghasilan`, `pemasukan`, `pengeluaran`, `tanggal`) VALUES
(1, 500000, 300000, '2023-07-15'),
(3, 600000, 340000, '2023-07-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `umur` int(2) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(8) NOT NULL,
  `level` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama`, `umur`, `no_hp`, `alamat`, `username`, `password`, `level`) VALUES
(1, 'Risya', 23, '085722384826', '<p>Kuningan<br></p>', 'risya', 'ris123', 'Admin'),
(3, 'Rizal', 23, '085722384826', '<p>Maja<br></p>', 'rizal', '1234', 'Owner'),
(4, 'Andre', 23, '676767', 'Maja', 'andre', '1234', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `id_product` int(11) NOT NULL,
  `kode` varchar(4) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `gl` int(11) NOT NULL,
  `air` int(11) NOT NULL,
  `tutup` int(11) NOT NULL,
  `pembersih` int(11) NOT NULL,
  `harga_air` double NOT NULL DEFAULT 10000,
  `harga_tutup` double NOT NULL DEFAULT 1500,
  `harga_pembersih` double NOT NULL DEFAULT 1500,
  `harga_galon` double NOT NULL DEFAULT 10000,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `kode`, `judul`, `deskripsi`, `harga`, `gl`, `air`, `tutup`, `pembersih`, `harga_air`, `harga_tutup`, `harga_pembersih`, `harga_galon`, `jumlah`) VALUES
(7, 'GK01', 'Aqua', 'Paket Lengkap', 18000, 1, 1, 1, 1, 10000, 1500, 1500, 10000, 93),
(8, 'GU01', 'Aqua', 'Isi Ulang ', 8000, 0, 1, 1, 1, 10000, 1500, 1500, 10000, 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `metode_bayar` varchar(120) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_petugas`, `id_order`, `jumlah`, `harga`, `metode_bayar`, `tanggal`) VALUES
(4, 0, 7, 5, 18000, 'Cod', '2015-07-23');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_product` (`id_product`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `tb_penghasilan`
--
ALTER TABLE `tb_penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_order` (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_penghasilan`
--
ALTER TABLE `tb_penghasilan`
  MODIFY `id_penghasilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `tb_product` (`id_product`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
