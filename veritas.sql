-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2023 at 07:53 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veritas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_jenis`
--

CREATE TABLE `t_jenis` (
  `id_jenis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `jenis_transaksi` varchar(50) NOT NULL,
  `gambar_jenis` varchar(255) NOT NULL,
  `keterangan_jenis` text NOT NULL,
  `saldo_awal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jenis`
--

INSERT INTO `t_jenis` (`id_jenis`, `id_user`, `jenis_transaksi`, `gambar_jenis`, `keterangan_jenis`, `saldo_awal`) VALUES
(1, 3, 'Sektor Pertanian', 'pertanian.png', 'ayam goreng enak', 100000000),
(2, 3, 'Sektor Pertahanan', 'pertahanan.png', 'wiiiiiiiiiiiiiiiiiiiiiiiii', 350000000),
(3, 3, 'Sektor Kesehatan', 'kesehatan.png', 'wellllllllllllllllllllllleaffafsdffer', 250000000),
(9, 3, 'Ayam goreng', 'jenis1686288370.jpg', 'dadadas', 100000000),
(10, 3, 'Ayam Goreng', 'jenis1686388242.jpg', 'ayam', 1000000000);

-- --------------------------------------------------------

--
-- Table structure for table `t_pengumuman`
--

CREATE TABLE `t_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `judul_pengumuman` varchar(50) NOT NULL,
  `pengumuman` text NOT NULL,
  `gambar_pengumuman` varchar(50) NOT NULL,
  `tanggal_pengumuman` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pengumuman`
--

INSERT INTO `t_pengumuman` (`id_pengumuman`, `id_user`, `judul_pengumuman`, `pengumuman`, `gambar_pengumuman`, `tanggal_pengumuman`) VALUES
(4, 3, 'PDIP', 'Tidak lain dan tidak buka', 'bukti1686178185.jpg', '2023-06-08 00:49:45'),
(5, 3, 'AHLI BAHASA INGGRIS', 'profiledasdas', 'bukti1686178939.jpg', '2023-06-08 01:02:19'),
(6, 3, 'Temukan Pencurian 510 Liter BBM di Belaw', 'Medan, CNN Indonesia -- Pertamina Patra Niaga menemukan praktik illegal tapping atau pencurian minyak sebanyak 510 liter di wilayah jalur pipa BBM di Bagian Deli, Kecamatan Medan Belawan, Kota Medan, Sumut. Petugas menyita barang bukti berupa 17 jeriken masing-masing berisi BBM sebanyak 30 liter dan dua jeriken kosong.  Area Manager Comm, Rel & CSR Pertamina Patra Niaga Regional Sumatera Bagian Utara (Sumbagut) Susanto August Satria mengatakan pihaknya bersama polisi dan TNI melakukan patroli di area jalur pipa laut dan darat di Bagan Deli setelah mendapatkan laporan masyarakat.  ', 'bukti1686182291.jpg', '2023-06-08 01:58:11'),
(9, 3, 'Nganu', 'anunya di anu', 'bukti1686241894.jpg', '2023-06-08 18:31:34'),
(10, 3, 'Nganu', 'Jawa adalah kunci', 'bukti1686388314.jpg', '2023-06-10 11:11:54'),
(12, 3, 'Ayam', 'fgvakgdhfhkadfh', 'bukti1686443748.png', '2023-06-11 02:35:48'),
(15, 3, 'f vafagv sadg', 'fghdfsfafdsgd', 'pengumuman1686444443.png', '2023-06-11 02:47:23');

-- --------------------------------------------------------

--
-- Table structure for table `t_report`
--

CREATE TABLE `t_report` (
  `id_report` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_laporan` date NOT NULL,
  `judul_laporan` varchar(255) NOT NULL,
  `keterangan_laporan` varchar(255) NOT NULL,
  `bukti_laporan` varchar(1000) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_report`
--

INSERT INTO `t_report` (`id_report`, `id_user`, `id_transaksi`, `kode_transaksi`, `tanggal_laporan`, `judul_laporan`, `keterangan_laporan`, `bukti_laporan`, `status`) VALUES
(1, 3, 16, '12023', '2023-06-11', 'ayam', 'gsfdasfd', 'gfdsasfd', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi`
--

CREATE TABLE `t_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_transaksi` varchar(255) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `kategori_transaksi` varchar(30) NOT NULL,
  `nominal` int(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `bukti_transaksi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_transaksi`
--

INSERT INTO `t_transaksi` (`id_transaksi`, `id_jenis`, `id_user`, `kode_transaksi`, `tanggal_transaksi`, `kategori_transaksi`, `nominal`, `keterangan`, `bukti_transaksi`) VALUES
(7, 3, 3, '32023', '2023-06-07', 'debit', 10000000, 'Beli masker', 'bukti1686135572.png'),
(10, 2, 3, '22023', '2023-06-07', 'kredit', 1000000, 'beli bom', 'bukti1686171339.png'),
(12, 2, 3, '22023', '2023-06-07', 'debit', 7000000, 'donasi', 'bukti1686266635.jpg'),
(15, 2, 3, '22023', '2023-06-09', 'debit', 10000000, 'di kasih kresna', 'bukti1686267569.jpg'),
(16, 1, 3, '12023', '2023-06-09', 'debit', 10000000, 'jual padi', 'bukti1686267683.jpg'),
(18, 1, 3, '12023', '2023-06-09', 'kredit', 2100000, 'beli ayam', 'bukti1686291659.png'),
(21, 1, 3, '120236', '2023-06-10', 'kredit', 1000000, 'beli pupuk', 'bukti1686388190.jpg'),
(22, 2, 3, '71377812868450395547', '2023-06-11', 'kredit', 10000000, 'beli meriam', 'bukti1686444664.jpg'),
(23, 2, 3, '8', '2023-06-11', 'debit', 10000000, 'Di kasih Stalin', 'bukti1686445683.jpg'),
(24, 2, 3, '3', '2023-06-11', 'kredit', 10000000, 'Di korupsi', 'bukti1686445718.jpg'),
(25, 2, 3, '', '2023-06-11', 'kredit', 10000000, 'hilang', 'bukti1686445866.jpg'),
(26, 2, 3, '', '2023-06-11', 'kredit', 1000000, 'hilang', 'bukti1686445887.jpg'),
(27, 2, 3, '4', '2023-06-11', 'kredit', 10000000, 'Nganu', 'bukti1686445932.png'),
(28, 2, 3, '57287147434402869863', '2023-06-11', 'debit', 1000000000, 'Cheat hesoyam', 'bukti1686445993.jpg'),
(29, 2, 3, '52489629538946201654', '2023-06-11', 'kredit', 100000000, 'Jatuh ke sumur', 'bukti1686446245.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_user`
--

CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(30) NOT NULL,
  `status_admin` varchar(30) NOT NULL,
  `tanggal_pembuatan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user`
--

INSERT INTO `t_user` (`id_user`, `username`, `email`, `password`, `status`, `status_admin`, `tanggal_pembuatan`) VALUES
(3, 'admin', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'active', 'active', '2023-03-21 09:57:59'),
(4, 'ayam', 'ayam@gmail.com', '4f81a91624bc61d1c67a266af385a359', 'active', 'inactive', '2023-06-06 19:56:23'),
(5, 'ayam', 'ayam@gmail.com', '5295d4d2995f645c2d451f167cd8514a', 'active', 'inactive', '2023-06-06 19:56:57'),
(6, 'ayam', 'ayam@gmail.com', '5295d4d2995f645c2d451f167cd8514a', 'active', 'inactive', '2023-06-06 19:57:00'),
(7, 'ayam', 'ayam@gmail.com', '5295d4d2995f645c2d451f167cd8514a', 'active', 'inactive', '2023-06-06 19:57:30'),
(8, 'sapi', 'sapi@gmail.com', 'ec7d5d88ad126b3551e6f9fbc851cc15', 'active', 'inactive', '2023-06-06 19:58:14'),
(9, 'sapi', 'sapi@gmail.com', 'ec7d5d88ad126b3551e6f9fbc851cc15', 'active', 'inactive', '2023-06-09 08:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_jenis`
--
ALTER TABLE `t_jenis`
  ADD PRIMARY KEY (`id_jenis`),
  ADD KEY `fk_user_jenis` (`id_user`);

--
-- Indexes for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`),
  ADD KEY `fk_user_pengumuman` (`id_user`);

--
-- Indexes for table `t_report`
--
ALTER TABLE `t_report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `fk_user_report` (`id_user`),
  ADD KEY `fk_transaksi_report` (`id_transaksi`);

--
-- Indexes for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `fk_jenis_transaksi` (`id_jenis`),
  ADD KEY `fk_user_transaksi` (`id_user`);

--
-- Indexes for table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_jenis`
--
ALTER TABLE `t_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_report`
--
ALTER TABLE `t_report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_jenis`
--
ALTER TABLE `t_jenis`
  ADD CONSTRAINT `fk_user_jenis` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);

--
-- Constraints for table `t_pengumuman`
--
ALTER TABLE `t_pengumuman`
  ADD CONSTRAINT `fk_user_pengumuman` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);

--
-- Constraints for table `t_report`
--
ALTER TABLE `t_report`
  ADD CONSTRAINT `fk_transaksi_report` FOREIGN KEY (`id_transaksi`) REFERENCES `t_transaksi` (`id_transaksi`),
  ADD CONSTRAINT `fk_user_report` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);

--
-- Constraints for table `t_transaksi`
--
ALTER TABLE `t_transaksi`
  ADD CONSTRAINT `fk_jenis_transaksi` FOREIGN KEY (`id_jenis`) REFERENCES `t_jenis` (`id_jenis`),
  ADD CONSTRAINT `fk_user_transaksi` FOREIGN KEY (`id_user`) REFERENCES `t_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
