-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 01:25 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tiketkapal`
--

-- --------------------------------------------------------

--
-- Table structure for table `kapal`
--

CREATE TABLE `kapal` (
  `id_kapal` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nm_kapal` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kapal`
--

INSERT INTO `kapal` (`id_kapal`, `gambar`, `nm_kapal`, `deskripsi`) VALUES
(3, '1658713866_528809999f036c5cf15e.png', 'Kapal Kongkang', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!'),
(4, '1658713831_5b5c2f00aa522cb16562.png', 'Kapal Ferry', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!'),
(5, '1658714319_85b62c329b5257a478d0.png', 'Kapal Selam', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dicta, dolores tenetur nam quae voluptas dolorem impedit exercitationem doloremque odit enim, sunt laborum minus rerum, amet odio ab blanditiis accusantium repellendus!');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nm_pengguna` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `jk` char(15) NOT NULL,
  `nohp` varchar(17) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nm_pengguna`, `email`, `jk`, `nohp`, `password`, `level`) VALUES
(1, 'Haikal Wahyudi', 'admin@gmail.com', 'Laki-Laki', '23423', '1234', 'Admin'),
(2, 'Udang', 'udang@gmail.com', 'Laki-Laki', '123456765432', '1234', 'Pengguna'),
(3, 'mutia', 'mutia@gmail.com', 'Perempuan', '1456', '1234', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `pesantiket`
--

CREATE TABLE `pesantiket` (
  `id_pemesanan` int(11) NOT NULL,
  `nm_pemesan` varchar(50) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `jk` char(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `nik` varchar(17) NOT NULL,
  `nohp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `dewasa` int(11) NOT NULL,
  `bayi` int(11) NOT NULL,
  `jeniskendaraan` varchar(20) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `aksi` int(11) NOT NULL,
  `total_pembayaran` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesantiket`
--

INSERT INTO `pesantiket` (`id_pemesanan`, `nm_pemesan`, `id_pengguna`, `jk`, `tempat_lahir`, `tgl_lahir`, `tgl_pemesanan`, `nik`, `nohp`, `alamat`, `dewasa`, `bayi`, `jeniskendaraan`, `id_pembayaran`, `gambar`, `aksi`, `total_pembayaran`) VALUES
(3, 'Haikal Wahyudi', 2, 'Laki-Laki', 'Penakak', '2002-02-01', '2022-07-13', '6464', '6546', 'fgh', 2, 1, 'Golongan VII', 4, 'default.png', 1, '1759903'),
(4, 'Mutia Rahmi', 2, 'Perempuan', 'Penakak', '2022-06-29', '2022-07-04', '1862381', '212131', 'slkhdjs', 2, 2, 'Golongan IVa', 5, '1658670558_8c028075771b3c099ef2.png', 2, '547155'),
(5, 'Mutia Rahmi', 3, 'Perempuan', 'dfgd', '2022-07-06', '2022-07-04', '3454', '3454', 'erter', 2, 0, 'Golongan VII', 3, '1658664995_2839d1707708e5f2d6d7.jpg', 3, '1754703'),
(6, 'aaa', 2, 'Perempuan', 'aa', '2022-07-06', '2024-07-22', '222', '222', 'sdsf', 2, 0, 'Golongan VIb', 7, 'default.png', 1, '1090738');

-- --------------------------------------------------------

--
-- Table structure for table `rekening`
--

CREATE TABLE `rekening` (
  `id_pembayaran` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `norek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rekening`
--

INSERT INTO `rekening` (`id_pembayaran`, `bank`, `norek`) VALUES
(1, 'BCA', '765'),
(2, 'BRI', '234567'),
(3, 'BNI', '65456'),
(4, 'NTB', '4365'),
(5, 'MANDIRI', '8687'),
(6, 'OVO', '983'),
(7, 'DANA', '983'),
(8, 'LINKAJA', '7834');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kapal`
--
ALTER TABLE `kapal`
  ADD PRIMARY KEY (`id_kapal`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `pesantiket`
--
ALTER TABLE `pesantiket`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `rekening`
--
ALTER TABLE `rekening`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kapal`
--
ALTER TABLE `kapal`
  MODIFY `id_kapal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesantiket`
--
ALTER TABLE `pesantiket`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rekening`
--
ALTER TABLE `rekening`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
