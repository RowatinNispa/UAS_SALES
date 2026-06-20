-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2026 at 07:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'sehun', 'Jl.Soul', '089737227929'),
(2, 'Randi Rian', 'Jl.Pakuhaji', '089526715169'),
(3, 'reyhan', 'Jl. Kebon Cabe', '089526715169'),
(4, 'lely', 'Jl. Kebon Cabe', '083808815190');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) DEFAULT NULL,
  `nama_produk` varchar(100) DEFAULT NULL,
  `harga` bigint(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama_produk`, `harga`, `stok`) VALUES
(2, 'P001', 'Laptop', 6000000, 50),
(3, 'P002', 'Tablet', 3000000, 15),
(4, 'P003', 'earphone', 1000000, 25),
(5, 'P004', 'PC', 5000000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id_sales` int(11) NOT NULL,
  `nama_sales` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `nama_sales`) VALUES
(1, 'nispa'),
(2, 'annas'),
(3, 'hanny');

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `id_order` int(11) NOT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` enum('draft','dikirim','selesai','dibatalkan') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`id_order`, `id_sales`, `id_pelanggan`, `id`, `tanggal`, `total`, `status`) VALUES
(1, 1, 2, 0, '2026-06-01', 1, 'draft'),
(2, 2, 1, NULL, '2026-06-02', 2, 'draft'),
(3, 1, 3, NULL, '2026-06-06', 2, 'selesai'),
(4, 3, 4, NULL, '2026-06-07', 3, 'dikirim'),
(5, 1, 3, NULL, '2026-06-08', 3, 'selesai'),
(6, 3, 1, NULL, '2026-05-08', 5, 'draft'),
(7, 1, 2, 2, '2026-06-20', 5, 'selesai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','sales','manager') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `role`, `email`, `telepon`, `alamat`, `foto`) VALUES
(4, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'admin', NULL, NULL, NULL, NULL),
(5, 'sales', '81dc9bdb52d04dc20036dbd8313ed055', 'sales', NULL, NULL, NULL, NULL),
(6, 'manager', '81dc9bdb52d04dc20036dbd8313ed055', 'manager', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_sales` (`id_sales`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD CONSTRAINT `detail_order_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `sales_order` (`id_order`),
  ADD CONSTRAINT `detail_order_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id`);

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`id_sales`) REFERENCES `sales` (`id_sales`),
  ADD CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
