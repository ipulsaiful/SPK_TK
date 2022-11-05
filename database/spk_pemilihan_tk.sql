-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 02:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_pemilihan_tk`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tk`
--

CREATE TABLE `data_tk` (
  `Id_TK` int(10) NOT NULL,
  `Nama_TK` varchar(50) NOT NULL,
  `biaya_spp` varchar(50) NOT NULL,
  `biaya_masuk` varchar(50) NOT NULL,
  `batas_tampung` varchar(20) NOT NULL,
  `jumlah_pengajar` varchar(10) NOT NULL,
  `akreditasi` varchar(10) NOT NULL,
  `abk` varchar(10) NOT NULL,
  `jumlah_fasilitas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tk`
--

INSERT INTO `data_tk` (`Id_TK`, `Nama_TK`, `biaya_spp`, `biaya_masuk`, `batas_tampung`, `jumlah_pengajar`, `akreditasi`, `abk`, `jumlah_fasilitas`) VALUES
(6, 'TK Bina  Anaprasa  Ceria Loa  Janan', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(7, 'TK Sehati', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '> 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(8, 'TK Nurul Iman', 'Rp. 40,000 - 90,000', 'Rp. 1,000,000 - 2,500,000', '>10 - <= 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(9, 'TK DDI Tani Aman', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(10, 'TK Pelangi', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Tidak', '<= 4'),
(11, 'TK Kartika V 15', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(13, 'TK Purnama', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(14, 'TK ABA LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 1,000,000 - 2,500,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(15, 'TK Munawarah Loa Janan', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '> 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(16, 'TK AMANAH', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(17, 'TK AS-SA ADAH LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(18, 'TK BATUAH LESTARI LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(19, 'TK BELIBIS LOA JANAN', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(20, 'TK BINA ANAPRASA MELATI', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '> 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(21, 'TK BUAH HATI LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(22, 'TK GEMPITA', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(23, 'TK HARAPAN LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '> 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(24, 'TK ISLAM DARUSSALAM', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(25, 'TK KEMUNING LOA JANAN', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '> 22 Siswa', '2 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(26, 'TK LESTARI LOA JANAN', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(27, 'TK MELATI LOA JANAN', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(28, 'TK MENTARI LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(29, 'TK PUTRA BANGSA LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(30, 'TK PUTRA 1 LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'C', 'Tidak', '> 4 - <= 8'),
(31, 'TK SINAR PANCASILA 2', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '>10 - <= 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(32, 'TK TERATAI BHAKTI LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(33, 'TK TUNAS BERINGIN LOA JANAN', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(34, 'TK A SIDIQ ', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(35, 'TK HARAPAN MANDIRI', 'Rp. 40,000 - 90,000', 'Rp. 1,000,000 - 2,500,000', '> 22 Siswa', '2 Pengajar', 'B', 'Tidak', '> 4 - <= 8'),
(36, 'TK ISLAM TERPADU AL-QOMAR', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Tidak', '<= 4'),
(37, 'TK MARDHATILLAH', 'Rp. 90,000 - 130,000', 'Rp. 1,000,000 - 2,500,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(38, 'TK PONDOK BAMBU', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '>10 - <= 22 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(39, 'TK PUTAK HARAPAN JAYA', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Ya', '> 4 - <= 8'),
(40, 'TK ST.DOMINIKUS', 'Rp. 40,000 - 90,000', 'Rp. 800,000 - 1,000,000', '<= 15 Siswa', '1 Pengajar', 'B', 'Tidak', '<= 4'),
(41, 'TK TERATAI', 'Rp. 90,000 - 130,000', 'Rp. 800,000 - 1,000,000', '> 22 Siswa', '2 Pengajar', 'B', 'Ya', '> 4 - <= 8');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_tk`
--

CREATE TABLE `kriteria_tk` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_tk`
--

INSERT INTO `kriteria_tk` (`id_kriteria`, `nama_kriteria`) VALUES
(1, 'biaya spp'),
(2, 'biaya masuk'),
(3, 'batas tampung kelas'),
(4, 'jumlah pengajar'),
(5, 'akreditasi'),
(7, 'menerima anak berkebutuhan khusus'),
(8, 'jumlah fasilitas');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kriteria`
--

CREATE TABLE `sub_kriteria` (
  `id_subkriteria` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nama_subkriteria` varchar(50) NOT NULL,
  `nilai_subkriteria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kriteria`
--

INSERT INTO `sub_kriteria` (`id_subkriteria`, `id_kriteria`, `nama_subkriteria`, `nilai_subkriteria`) VALUES
(1, 1, 'Rp. 40,000 - 90,000', 1),
(2, 1, 'Rp. 90,000 - 130,000', 2),
(3, 2, 'Rp. 800,000 - 1,000,000', 1),
(4, 2, 'Rp. 1,000,000 - 2,500,000', 2),
(8, 3, '<= 15 Siswa', 3),
(9, 3, '>10 - <= 22 Siswa', 2),
(10, 3, '> 22 Siswa', 1),
(18, 8, '> 8', 3),
(19, 8, '> 4 - <= 8', 2),
(20, 8, '<= 4', 1),
(24, 5, 'A', 3),
(25, 5, 'B', 2),
(26, 5, 'C', 1),
(27, 4, '2 Pengajar', 2),
(28, 4, '1 Pengajar', 1),
(29, 7, 'Ya', 2),
(30, 7, 'Tidak', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'ipul', 'ipul');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tk`
--
ALTER TABLE `data_tk`
  ADD PRIMARY KEY (`Id_TK`);

--
-- Indexes for table `kriteria_tk`
--
ALTER TABLE `kriteria_tk`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD PRIMARY KEY (`id_subkriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tk`
--
ALTER TABLE `data_tk`
  MODIFY `Id_TK` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `kriteria_tk`
--
ALTER TABLE `kriteria_tk`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  MODIFY `id_subkriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_kriteria`
--
ALTER TABLE `sub_kriteria`
  ADD CONSTRAINT `sub_kriteria_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria_tk` (`id_kriteria`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
