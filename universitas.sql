-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 18, 2024 at 12:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `jurusan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `nim`, `nama_mhs`, `jurusan`, `alamat`, `email`, `no_telp`) VALUES
(1, '23022222', 'Hana', 'Informatika', 'Cilacap', 'hana@gmail.com', '08156789'),
(2, '2345678', 'levi', 'Listrik', 'Jakarta', 'dek@gmail.com', '0888888888888'),
(3, '34236776', 'Siti', 'Informatika', 'Cilacap', 'siti@gmail.com', '081233456'),
(4, '2345677', 'Nadin', 'Mesin', 'Purwokerto', 'bertaut@gmail.com', '083456789'),
(5, '20123456', 'Hani', 'Akuntansi', 'Cilacap', 'hani@gmail.com', '083456789'),
(6, '24023456', 'Indah', 'Listrik', 'Purwokerto', 'ind@gmail.com', '08123445'),
(7, '230123478', 'Iqbaal', 'Mesin', 'Jakarta', 'baale@gmail.com', '085678900'),
(8, '23000123', 'Nichol', 'Mesin', 'Purwokerto', 'nichol@gmail.com', '08765432'),
(9, '24020202', 'Riski', 'Elektro', 'Jakarta', 'riski@gmail.com', '085123456');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `nilai_id` int NOT NULL,
  `mahasiswa_id` int NOT NULL,
  `nilai` decimal(10,2) NOT NULL,
  `nilai_akhir` decimal(10,2) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `matkul_id` int NOT NULL,
  `semester_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`nilai_id`, `mahasiswa_id`, `nilai`, `nilai_akhir`, `grade`, `matkul_id`, `semester_id`) VALUES
(11, 1, '85.00', '90.00', 'A', 0, 0),
(12, 3, '90.00', '88.00', 'A', 0, 0),
(13, 4, '60.00', '75.00', 'BC', 0, 0),
(14, 5, '80.00', '95.00', 'A', 0, 0),
(15, 2, '78.00', '70.00', 'B', 0, 0),
(16, 5, '90.00', '90.00', 'A', 0, 0),
(21, 2, '78.00', '88.00', 'AB', 0, 0),
(22, 4, '80.00', '85.00', 'AB', 0, 0),
(23, 3, '50.00', '60.00', 'C', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`nilai_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
