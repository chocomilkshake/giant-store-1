-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2024 at 06:19 PM
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
-- Database: `giantstore_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(150) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `shop` varchar(5) NOT NULL,
  `img_dir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category`, `price`, `quantity`, `branch`, `shop`, `img_dir`) VALUES
(1, 'Quartz Belt Watch<', 'sample', 'Accessories', 150.00, 10, '1', '1', 'img/product/product1.png'),
(2, 'Women Freshwash', 'sample', 'Skin Care', 150.00, 10, '1', '1', 'img/product/product2.png'),
(3, 'Room Flash Light', 'sample', 'Furniture', 150.00, 10, '1', '1', 'img/product/product3.png'),
(4, 'Room Flash Light', 'sample', 'Furniture', 150.00, 10, '1', '1', 'img/product/product4.png'),
(5, 'Man Office Bag', 'sample', 'Apparel', 150.00, 10, '1', '1', 'img/product/product5.png'),
(6, 'Charging Car', 'sample', 'Kid Toy', 150.00, 10, '1', '1', 'img/product/product6.png'),
(7, 'Blutooth Speaker', 'sample', 'Device', 150.00, 10, '1', '1', 'img/product/product7.png'),
(8, 'Charging Car', 'sample', 'Kid Toy', 150.00, 10, '1', '1', 'img/product/product8.png'),
(9, 'Flower Vase', 'sample', 'Decoration', 150.00, 10, '1', '1', 'img/product/product9.png'),
(10, 'Lamp Light', 'sample', 'Furniture', 150.00, 10, '1', '1', 'img/product/product10.png'),
(11, 'Cloth', 'sample', 'Apparel', 150.00, 10, '1', '1', 'img/product/product11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
