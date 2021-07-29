-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Bulan Mei 2019 pada 09.21
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelmilos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id_booking` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `jenis` enum('standard','superior','deluxe','suite','big','small') NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tipe_jenis` enum('kamar','meeting') NOT NULL,
  `tgl_checkin` date DEFAULT NULL,
  `tgl_checkout` date DEFAULT NULL,
  `days` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `kd_booking` varchar(100) NOT NULL,
  `status` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_booking`
--

INSERT INTO `tbl_booking` (`id_booking`, `id_user`, `nama_lengkap`, `jenis`, `id_jenis`, `tipe_jenis`, `tgl_checkin`, `tgl_checkout`, `days`, `harga`, `total`, `kd_booking`, `status`) VALUES
(121, 27, 'Adri Firdiansyah Kaufmann', 'big', 3, 'meeting', '2019-05-17', '2019-05-18', 1, 5000000, 5000000, '4539JZLSNHOTEL', 'yes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bookingresto`
--

CREATE TABLE `tbl_bookingresto` (
  `id_bookingresto` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `waktu_pesanan` enum('breakfast','lunch','dinner') NOT NULL,
  `jenis` enum('buffet','menu') NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `tgl_makan` date NOT NULL,
  `kd_booking` varchar(100) NOT NULL,
  `status` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bookingresto`
--

INSERT INTO `tbl_bookingresto` (`id_bookingresto`, `id_user`, `nama_lengkap`, `waktu_pesanan`, `jenis`, `keterangan`, `tgl_makan`, `kd_booking`, `status`) VALUES
(1, 13, 'Adri Firdiansyah Kaufmann', 'breakfast', 'menu', 'Ayam', '2019-05-17', '7147YOQIPHOTEL', 'no'),
(5, 28, 'Ramadhan', 'lunch', 'menu', 'Ayam', '2019-05-17', '3095YEDOUHOTEL', 'no');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `kategori` enum('standard','superior','deluxe','suite') NOT NULL,
  `nomor` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `kategori`, `nomor`, `paid`) VALUES
(1, 'standard', 1, 250000),
(2, 'standard', 2, 250000),
(3, 'standard', 3, 250000),
(4, 'standard', 4, 250000),
(5, 'standard', 5, 250000),
(6, 'superior', 1, 500000),
(7, 'superior', 2, 500000),
(8, 'superior', 3, 500000),
(9, 'superior', 4, 500000),
(10, 'superior', 5, 500000),
(11, 'deluxe', 1, 750000),
(12, 'deluxe', 2, 750000),
(13, 'deluxe', 3, 750000),
(14, 'deluxe', 4, 750000),
(15, 'deluxe', 5, 750000),
(16, 'suite', 1, 1000000),
(17, 'suite', 2, 1000000),
(18, 'suite', 3, 1000000),
(19, 'suite', 4, 1000000),
(20, 'suite', 5, 1000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_meeting`
--

CREATE TABLE `tbl_meeting` (
  `id_meeting` int(11) NOT NULL,
  `kategori` enum('big','small') NOT NULL,
  `nomor` int(11) NOT NULL,
  `paid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_meeting`
--

INSERT INTO `tbl_meeting` (`id_meeting`, `kategori`, `nomor`, `paid`) VALUES
(3, 'big', 1, 5000000),
(4, 'big', 2, 5000000),
(5, 'small', 1, 2500000),
(7, 'small', 2, 2500000),
(8, 'small', 3, 2500000),
(9, 'small', 4, 2500000),
(10, 'small', 5, 2500000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kd_booking` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `nama`, `kd_booking`, `harga`, `tgl_bayar`) VALUES
(4, 'Adri Firdiansyah Kaufmann', '4539JZLSNHOTEL', 500000000, '2019-05-17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `email`, `password`, `nama`, `alamat`) VALUES
(13, 'admin@gmail.com', 'admin123', 'Admin', 'Puri'),
(27, 'ramadhanlawliet@gmail.com', 'rama123', 'Rama', 'Puri'),
(28, 'teguhb@yahoo.co.id', '123', 'Teguh', 'bkp'),
(29, 'ramakan@gmail.com', 'ryuzaki123', 'ramadan', 'puri'),
(30, 'gui@mail.com', '123', 'eri', 'bkp');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `user` (`id_user`);

--
-- Indeks untuk tabel `tbl_bookingresto`
--
ALTER TABLE `tbl_bookingresto`
  ADD PRIMARY KEY (`id_bookingresto`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  ADD PRIMARY KEY (`id_meeting`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT untuk tabel `tbl_bookingresto`
--
ALTER TABLE `tbl_bookingresto`
  MODIFY `id_bookingresto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_meeting`
--
ALTER TABLE `tbl_meeting`
  MODIFY `id_meeting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_bookingresto`
--
ALTER TABLE `tbl_bookingresto`
  ADD CONSTRAINT `tbl_bookingresto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
