-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 06:22 PM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `date_created` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `city` varchar(150) NOT NULL,
  `region` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `city`, `region`) VALUES
(1, 'Manila', 'NCR');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Groceries'),
(2, 'Toy & Baby  Accessories'),
(3, 'Supplies'),
(4, 'Garment'),
(5, 'Home & Decoration'),
(6, 'Electronics'),
(7, 'Motorcylce'),
(8, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `id` int(11) NOT NULL,
  `product` varchar(5) NOT NULL,
  `quantity` varchar(5) NOT NULL,
  `address_of_delivery` varchar(200) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date_order` varchar(15) NOT NULL,
  `date_delivered` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `category` varchar(150) NOT NULL,
  `sub_category` varchar(150) NOT NULL,
  `price` decimal(11,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `shop` varchar(5) NOT NULL,
  `spec` varchar(50) NOT NULL,
  `img_dir` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category`, `sub_category`, `price`, `quantity`, `branch`, `shop`, `spec`, `img_dir`) VALUES
(1, 'Quartz Watch', 'Upgrade your timekeeping style with our Classic Quartz Wristwatch, a perfect blend of precision, durability, and elegance. This timepiece is meticulously crafted to provide accurate timekeeping and a ', '8', '33', 150.00, 10, '', '', '1', 'img/product/product1.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_spec`
--

CREATE TABLE `product_spec` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `width` varchar(15) NOT NULL,
  `height` varchar(15) NOT NULL,
  `depth` varchar(15) NOT NULL,
  `weight` varchar(15) NOT NULL,
  `Quality Checking` varchar(50) NOT NULL,
  `Estimate Delivery` varchar(50) NOT NULL,
  `Returnable/Refundable` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_spec`
--

INSERT INTO `product_spec` (`id`, `product`, `width`, `height`, `depth`, `weight`, `Quality Checking`, `Estimate Delivery`, `Returnable/Refundable`) VALUES
(1, '1', '10 cm', 'n/a', 'n/a', '0.1kg', 'Yes', '3  days', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `category` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category`) VALUES
(1, 'Baby Products ', '1'),
(2, 'Beverages Canned Goods', '1'),
(3, 'Cereals Cleaning Products', '1'),
(4, 'Cooking & Baking Dairy ', '1'),
(5, 'Fresh Goods ', '1'),
(6, 'Frozen food ', '1'),
(7, 'Health & Beauty ', '1'),
(8, 'Imported Goods ', '1'),
(9, 'Insecticides ', '1'),
(10, 'Pet Care ', '1'),
(11, 'Snacks', '1'),
(12, 'Art Supplies', '3'),
(13, 'Bags', '3'),
(14, 'Cutting Instruments', '3'),
(15, 'Paper Supplies', '3'),
(16, 'School Packages', '3'),
(17, 'School Uniform', '3'),
(18, 'Socks', '3'),
(19, 'Tapes & Adhesives', '3'),
(20, 'Writing lnstruments', '3'),
(21, 'Shoes', '4'),
(22, 'Bathware', '5'),
(23, 'Bed Sheetes', '5'),
(24, 'Cabinet', '5'),
(25, 'Carpet', '5'),
(26, 'Dinning Room', '5'),
(27, 'Home Accessories', '5'),
(28, 'Kids Pool', '5'),
(29, 'Living Room', '5'),
(30, 'Gadget', '6'),
(31, 'Appliances', '6'),
(32, 'Medical', '6'),
(33, 'Watch', '8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_spec`
--
ALTER TABLE `product_spec`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_spec`
--
ALTER TABLE `product_spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
