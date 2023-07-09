-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2023 pada 10.27
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
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`id_order`, `id_product`, `id_pelanggan`, `jumlah`, `harga`) VALUES
(2, 7, 1, 2, 18000),
(3, 8, 2, 2, 22);

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
(1, 'Asep', 'Maja', '085722384826', 'Asep', 'asep'),
(2, 'Dadan', 'Majalengka', '085722384826', 'Dadan', 'dadan'),
(3, 'Nurjaman', '<p><span style=\"font-weight: normal;\">Majalengka</span><br></p>', '083150687527', 'Nurjaman', 'nur');

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
  `harga_galon` double NOT NULL DEFAULT 10000
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`id_product`, `kode`, `judul`, `deskripsi`, `harga`, `gl`, `air`, `tutup`, `pembersih`, `harga_air`, `harga_tutup`, `harga_pembersih`, `harga_galon`) VALUES
(7, 'GK01', 'Aqua', 'Paket Lengkap', 18000, 1, 1, 1, 1, 10000, 1500, 1500, 10000),
(8, 'GU01', 'Aqua', 'Isi Ulang ', 8000, 0, 1, 1, 1, 10000, 1500, 1500, 10000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Trigger `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `t_transaksi` AFTER INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
UPDATE tb_product SET stok=stok - NEW.jumlah
WHERE id_product = NEW.id_product;
END
$$
DELIMITER ;

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
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_petugas` (`id_petugas`,`id_order`),
  ADD KEY `id_order` (`id_order`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

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
-- Ketidakleluasaan untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_order`) REFERENCES `tb_order` (`id_order`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
