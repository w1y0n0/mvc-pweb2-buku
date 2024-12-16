-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 160.19.166.42
-- Generation Time: Nov 25, 2024 at 09:36 AM
-- Server version: 8.0.40
-- PHP Version: 8.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2D_klp4`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE `tabel_buku` (
  `id_buku` int NOT NULL,
  `judul_buku` varchar(65) NOT NULL,
  `pengarang` varchar(45) NOT NULL,
  `tahun` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`id_buku`, `judul_buku`, `pengarang`, `tahun`) VALUES
(4, 'Naaaa', 'Nala', 2096),
(5, 'Rewrite My Heart', 'Skyter', 2005),
(6, 'Hujan', 'Na', 2000),
(12, 'kisah nabi', 'sukrom', 2003),
(14, 'kisah nabi', 'Nala', 2005),
(15, 'serambanget', 'mamang', 2005),
(17, 'Kisah Cinta', 'James smit', 1997);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_loans`
--

CREATE TABLE `tabel_loans` (
  `id_loans` int NOT NULL,
  `id_buku` int NOT NULL,
  `id_user` int NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_loans`
--

INSERT INTO `tabel_loans` (`id_loans`, `id_buku`, `id_user`, `tgl_pinjam`, `tgl_kembali`) VALUES
(3, 4, 1, '2024-11-20', '2024-11-21'),
(9, 4, 4, '2024-11-21', '2024-11-21'),
(15, 14, 4, '2024-11-18', '2024-11-30'),
(17, 12, 5, '2024-11-12', '2024-11-23'),
(18, 12, 6, '2024-11-17', '2024-11-22'),
(20, 17, 12, '2024-11-19', '2024-11-23');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `no_anggota` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama`, `email`, `password`, `no_anggota`) VALUES
(1, 'Joki Kula', 'irmaashe@gmail.com', '86756', 49),
(3, 'yusuf efendi', 'yusuf@gmail.com', 'ffyusuf334455', 30),
(4, 'sumirah', 'indra@gmail.com', '876445w', 96),
(5, 'ff', 'msyafakamira12@gmail.com', '088755eg', 65),
(6, 'RATNA NUR HIDAYAH ', 'ratnanurhidayah475@gmail.com', 'oke123', 33),
(8, 'anisa fan', 'anisatunfaoziah@gmail.com', 'hehehhaha', 2),
(10, 'yusuf efendi', 'yusuf@gmail.com', '988665', 9775),
(11, 'Ratna Nur Hidayah', 'ratna@gmail.com', '54346809', 9874),
(12, 'Irma Sena Marliana', 'sena@gmail.com', '97cbcw7', 965);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tabel_loans`
--
ALTER TABLE `tabel_loans`
  ADD PRIMARY KEY (`id_loans`),
  ADD UNIQUE KEY `id_buku` (`id_buku`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_buku`
--
ALTER TABLE `tabel_buku`
  MODIFY `id_buku` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tabel_loans`
--
ALTER TABLE `tabel_loans`
  MODIFY `id_loans` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_loans`
--
ALTER TABLE `tabel_loans`
  ADD CONSTRAINT `tabel_loans_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tabel_user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tabel_loans_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `tabel_buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
