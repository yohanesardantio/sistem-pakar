-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2025 at 10:04 AM
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
-- Database: `skopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `karakter_kopi`
--

CREATE TABLE `karakter_kopi` (
  `id_karakter` int(10) NOT NULL,
  `kode_karakter` varchar(20) NOT NULL,
  `karakter_kopi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karakter_kopi`
--

INSERT INTO `karakter_kopi` (`id_karakter`, `kode_karakter`, `karakter_kopi`) VALUES
(1, 'A001', 'Tingkat keasaman tinggi'),
(2, 'A002', 'Tingkat keasaman sedang'),
(3, 'A003', 'Tingkat keasaman rendah'),
(4, 'A004', 'Memiliki aroma rempah'),
(5, 'A005', 'Memiliki aroma buah'),
(6, 'A006', 'Memiliki aroma kompleks'),
(7, 'A007', 'Memiliki aroma unik'),
(8, 'A008', 'Tingkat kepahitan tinggi'),
(9, 'A009', 'Tingkat kepahitan sedang'),
(10, 'A010', 'Tingkat kepahitan rendah'),
(11, 'A011', 'Karakteristik Rasa halus, ringan'),
(12, 'A012', 'Karakteristik Rasa kuat, tebal'),
(13, 'A013', 'Karakteristik Rasa segar, rasa buah'),
(14, 'A014', 'Karakteristik Rasa penuh, tebal'),
(15, 'A015', 'Karakteristik Rasa penuh, halus'),
(16, 'A016', 'Karakteristik Rasa halus, manis'),
(17, 'A017', 'Tingkat kafein strong'),
(18, 'A018', 'Tingkat kafein halus');

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id` int(10) NOT NULL,
  `kode_kopi` varchar(10) NOT NULL,
  `jenis_kopi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id`, `kode_kopi`, `jenis_kopi`) VALUES
(1, 'K01', 'Arabica'),
(2, 'K02', 'Robusta'),
(3, 'K03', 'Kopi Gayo'),
(4, 'K04', 'Kopi Mandailing'),
(5, 'K05', 'Kopi Toraja'),
(6, 'K06', 'Kopi Bali Kintamani'),
(7, 'K07', 'Kopi Flores Bajawa'),
(8, 'K08', 'Kopi Jawa');

-- --------------------------------------------------------

--
-- Table structure for table `rekomendasi`
--

CREATE TABLE `rekomendasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `keasaman` varchar(50) DEFAULT NULL,
  `kepahitan` varchar(50) DEFAULT NULL,
  `aroma` varchar(50) DEFAULT NULL,
  `karakteristik` varchar(50) DEFAULT NULL,
  `kafein` varchar(50) DEFAULT NULL,
  `rekomendasi_kopi` varchar(255) DEFAULT NULL,
  `tanggal_rekomendasi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tanggal_daftar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karakter_kopi`
--
ALTER TABLE `karakter_kopi`
  ADD PRIMARY KEY (`id_karakter`);

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karakter_kopi`
--
ALTER TABLE `karakter_kopi`
  MODIFY `id_karakter` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rekomendasi`
--
ALTER TABLE `rekomendasi`
  ADD CONSTRAINT `rekomendasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
