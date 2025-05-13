-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `terakhir_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `terakhir_login`) VALUES
(22, 'halo@a', '$2y$10$IJhEdwjJtJ4q3J2XqX.FEOE9UMdNmysjZxxwzRlMZ6gGAQ4K3bzUS', 'Halo12', NULL),
(23, 'ddd@a', '$2y$10$IabtCKpkK9Li0D1qbERNt.DvltkrIqRDKeD9S3RoEeXDrZt6M/3qW', 'ddd', NULL),
(24, 'ddd@h', '$2y$10$GJgSkNbWEP0zFVqsqNVY5uH0DHU6Brm4xZy2G/af7CTXwBthSkgWi', 'ddd', NULL),
(25, 'ggg@a', '$2y$10$ToASClhuD7txeBvoCkm1auq.0OpvyV.cO6F0wN8ysJPBb9iTZunk2', 'ggg', NULL),
(26, 'ho@a', '$2y$10$i8Jlnqdfe/SVbPqWILa8aeb9HGf8tB5mllsPzyI.Ab1gV9r4OlYvW', 'houhou', NULL),
(27, 'tolol@a', '$2y$10$a/ydm3pgF1wASbDU1fr3iOnk4.wWoukjQcur./84HIjz7ckWfRm.2', 'tolol123', NULL),
(28, 'ok@a', '$2y$10$PATXCua7eHnIphojUlz9IO4RxUMtBYtC70T3f6wWZCMwQvCMviPkK', 'ok123', NULL),
(29, 'saya@a', '$2y$10$fohzH8dlQ.DWaVEsQteSb.U0IObXlnOgil02fV1HY.gYtMULNAk5m', 'saya', NULL),
(30, 'zaza@a', '$2y$10$V./fM7lmkwFf.C9bBNk0eONvNic1IabnAtN/xgYsvaJ.geQ6sxwFO', 'zaza', NULL),
(31, 'zaza@a', '$2y$10$faeyGWakXarHd2SvJMzPse9FgPRtXTwGyI5OFLny7gQPWMQYrlGRO', 'zaza', NULL),
(32, 'yoyo@a', '$2y$10$yhZ4eVcjIjKNjUzO9GP2QegLN0rTaWYIq2hqoNqy0lyGmUnJqXUwK', 'yoyo123', NULL),
(33, 'ddd@a', '$2y$10$6OyMwebK2muDyjlD0fzbbufqPf9wVAERpGAanYpWPxd0.ACzzo5QS', 'ddd', NULL),
(34, 'ddd@a', '$2y$10$0ILkCd.9oeWKLGTv2KaVZOu4VZOpYK78JTGfXyT3T495yu4/KQGN6', 'ddd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
--

CREATE TABLE `jasa` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tgl_booking` varchar(255) DEFAULT NULL,
  `waktu_booking` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `paket` varchar(255) DEFAULT NULL,
  `harga` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `tgl_pesan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama`, `tgl_booking`, `waktu_booking`, `lokasi`, `paket`, `harga`, `pembayaran`, `tgl_pesan`) VALUES
('BRG001', 'Alvin', '2024-8-01', '11:20', 'Barber Shop A\'Ujang	', 'Cukur Botak', '30000', 'Mandiri', '31-07-24 04:18:00	'),
('BRG002', 'Houhou', '2024-8-2', '18:00', 'Barber Shop A\'Ujang	', 'Cukur Rambut + Cuci Kepala	', '40000', 'Mandiri', '27-07-24 09:24:46	'),
('BRG003', 'Neuv', '2024-8-2', '12:00', 'Barbershop Yuda Rancak Bana', 'Cukur Rambut Jenggot	', '35000', 'BCA', '2024-07-25'),
('BRG004', 'Saya', '2024-8-3', '14:00', 'Barbershop Yuda Rancak Bana', 'Cukur Rambut Jenggot	', '35000', 'BNA', '2-02-2024'),
('BRG005', 'gaga', '2024-8-4', '15:00', 'Barbershop Yuda Rancak Bana', 'Cukur Rambut + Cuci Kepala	', '40000', 'Mandiri', '23-07-24 09:06:25'),
('BRG015', '', '2024-08-01', '12:40', 'Bekasi', 'Cukur Rambut + Cuci Kepala', '40000', NULL, '31-07-24 04:14:06'),
('BRG016', 'admin', '2024-08-01', '11:20', 'Bekasi', 'Cukur Botak', '30000', 'BCA', '31-07-24 04:18:00'),
('BRG017', 'Anton', '2024-08-21', '12:50', 'Bekasi', 'Cukur Rambut Jenggot', '35000', 'BCA', '12-08-24 03:46:22'),
('BRG018', 'Anton', '2024-08-14', '10:55', 'Bekasi', 'Cukur Rambut + Cuci Kepala', '40000', 'Mandiri', '12-08-24 03:49:21'),
('BRG019', 'Zhu Yuan', '2024-08-29', '14:00', 'Bekasi', 'Cukur Rambut Jenggot', '35000', 'Mandiri', '12-08-24 04:53:57'),
('BRG020', 'Nicole', '2024-08-19', '12:21', 'Bekasi', 'Cukur Rumah Pribadi', '70000', 'BNI', '12-08-24 05:15:56'),
('BRG021', 'Billy', '', '', '', 'Cukur Rumah Pribadi', '70000', 'Mandiri', '12-08-24 05:22:27'),
('BRG022', 'Billy', '2024-08-07', '10:27', '', 'Cukur Rambut + Cuci Kepala', '40000', 'BCA', '12-08-24 05:23:02'),
('BRG023', 'Billy', '2024-08-31', '14:28', 'Barbershop Yuda Rancak Bana', 'Cukur Rambut Jenggot', '35000', 'Mandiri', '12-08-24 05:24:09');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tgl_lahir` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `jenis_kelamin`, `tgl_lahir`, `status`, `pekerjaan`, `alamat`) VALUES
(3, 'GG', 'Perempuan', '2024-08-21', 'AKTIF', 'Pangkas Rambut', 'Belobog'),
(4, 'admin', '1', '4-02-2004', 'Aktif', 'Singer', 'kayumanis'),
(5, 'admin', '2', '4-02-2004', 'Aktif', 'Singer', 'kayumanis'),
(6, 'admin', '2', '4-02-2004', 'Aktif', 'Singer', 'kayumanis'),
(7, 'admin', 'Laki-Laki', '4-02-2004', 'Aktif', 'Singer', 'kayumanis'),
(8, 'Gege', 'Pilih Kelamin', '4-02-2004', 'Laki-Laki', 'Pangkas Rambut', 'Penacony'),
(9, 'Gege', 'Laki-Laki', '4-02-2004', 'Perempuan', 'Pangkas Rambut', 'Penacony'),
(10, 'Blade', 'Laki-Laki', '4-02-2004', 'TIDAK AKTIF', 'Pangkas Rambut', 'Penacony'),
(11, 'ddd', 'Laki-Laki', '4-02-2004', 'TIDAK AKTIF', 'Pangkas Rambut', 'kayumanis'),
(12, 'admin', 'Laki-Laki', '4-02-2004', 'AKTIF', 'Pangkas Rambut', 'kayumanis'),
(13, 'admin', 'Laki-Laki', '2024-07-10', 'TIDAK AKTIF', 'Singer', 'kayumanis'),
(14, 'Topaz', 'Perempuan', '2008-01-15', 'AKTIF', 'Pangkas Rambut', 'Penacony'),
(15, 'Halo', 'Perempuan', '2024-07-09', 'AKTIF', 'Pangkas Rambut', 'kayumanis'),
(16, 'admin', 'Laki-Laki', '2024-07-09', 'TIDAK AKTIF', 'Pangkas Rambut', 'kayumanis'),
(17, 'Anby', 'Perempuan', '2024-08-28', 'AKTIF', 'Sekretaris', 'Eridu');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `no_ktp` varchar(255) DEFAULT NULL,
  `fileupload` varchar(255) DEFAULT NULL,
  `perusahaan` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pembayaran` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `nama`, `no_ktp`, `fileupload`, `perusahaan`, `email`, `telp`, `alamat`, `pembayaran`, `status`) VALUES
(1, 'Rayhan', '213456721', NULL, 'Barber Shop A\'Ujang', 'halo@a', '0858888828128', 'Jalan Matraman Asem, RT.1/RW.9, Utan Kayu Sel., Kec. Matraman, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13120', 'Mandiri', 'AKTIF'),
(2, 'Ellen', '1231039123', NULL, 'Victoria', 'admin@gmail.com', 'SD123131', 'Santa', 'BCA', 'TERDAFTAR'),
(3, '', '231`323', NULL, 'FF', 'rere@a', '2131313', 'Santa Monica Boulevard', 'Mandiri', 'DIBATALKAN'),
(4, '312313', 'dsada', NULL, '3213131', '321313', '12313', NULL, 'Mandiri', ''),
(5, 'admin', '1231039123', NULL, 'SAya', 'SD123', 'SD123131', NULL, 'Select', ''),
(6, '', '', NULL, '', '', '', NULL, 'Select', ''),
(7, 'zzz', 'sd1235', NULL, '3213131', 'admin@gmail.com', '2131313', NULL, 'BCA', ''),
(8, 'saya', '123', NULL, 'GRGR', 'halo@a', '02141', NULL, 'Mandiri', ''),
(9, 'ddd', '32131', NULL, '2313131', '123131', '12313', NULL, 'BCA', ''),
(10, 'Haha', '12313', NULL, '12345', 'halo@a', 'kayumanis', '2123', 'Mandiri', ''),
(11, 'saya', '231`323', NULL, '3213131', 'rere@a', 'kayumanis', '2131313', 'BNI', ''),
(12, 'GSZW', '1231039123', NULL, 'Video', 'zzz@gmail.com', 'Penacony', 'SD123131', 'Mandiri', 'PENDING'),
(13, 'Archeron', '1231039123', NULL, 'Nihilty', 'shring@a', 'Penacony', '69696969', 'Mandiri', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `terakhir_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`, `terakhir_login`) VALUES
(22, 'halo@a', '$2y$10$IJhEdwjJtJ4q3J2XqX.FEOE9UMdNmysjZxxwzRlMZ6gGAQ4K3bzUS', 'Halo12', NULL),
(23, 'ddd@a', '$2y$10$IabtCKpkK9Li0D1qbERNt.DvltkrIqRDKeD9S3RoEeXDrZt6M/3qW', 'ddd', NULL),
(24, 'ddd@h', '$2y$10$GJgSkNbWEP0zFVqsqNVY5uH0DHU6Brm4xZy2G/af7CTXwBthSkgWi', 'ddd', NULL),
(25, 'ggg@a', '$2y$10$ToASClhuD7txeBvoCkm1auq.0OpvyV.cO6F0wN8ysJPBb9iTZunk2', 'ggg', NULL),
(26, 'ho@a', '$2y$10$i8Jlnqdfe/SVbPqWILa8aeb9HGf8tB5mllsPzyI.Ab1gV9r4OlYvW', 'houhou', NULL),
(27, 'tolol@a', '$2y$10$a/ydm3pgF1wASbDU1fr3iOnk4.wWoukjQcur./84HIjz7ckWfRm.2', 'tolol123', NULL),
(28, 'ok@a', '$2y$10$PATXCua7eHnIphojUlz9IO4RxUMtBYtC70T3f6wWZCMwQvCMviPkK', 'ok123', NULL),
(29, 'saya@a', '$2y$10$fohzH8dlQ.DWaVEsQteSb.U0IObXlnOgil02fV1HY.gYtMULNAk5m', 'saya', NULL),
(30, 'zaza@a', '$2y$10$V./fM7lmkwFf.C9bBNk0eONvNic1IabnAtN/xgYsvaJ.geQ6sxwFO', 'zaza', NULL),
(31, 'zaza@a', '$2y$10$faeyGWakXarHd2SvJMzPse9FgPRtXTwGyI5OFLny7gQPWMQYrlGRO', 'zaza', NULL),
(32, 'yoyo@a', '$2y$10$yhZ4eVcjIjKNjUzO9GP2QegLN0rTaWYIq2hqoNqy0lyGmUnJqXUwK', 'yoyo123', NULL),
(33, 'ddd@a', '$2y$10$6OyMwebK2muDyjlD0fzbbufqPf9wVAERpGAanYpWPxd0.ACzzo5QS', 'ddd', NULL),
(34, 'ddd@a', '$2y$10$0ILkCd.9oeWKLGTv2KaVZOu4VZOpYK78JTGfXyT3T495yu4/KQGN6', 'ddd', NULL),
(35, 'dodol@a', '$2y$10$v5gedVdAmW4msfxfvz.KluU2DAQTA.wjKikDj42L6LtWaHBw77E4e', 'dodol', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
