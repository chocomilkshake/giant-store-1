-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2024 at 11:13 AM
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
  `first_name` varchar(200) NOT NULL,
  `middle_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `designation` varchar(60) NOT NULL,
  `date_created` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `address`, `branch`, `designation`, `date_created`) VALUES
(2, 'admin-001', '$2y$10$J2rigULQFKc7KTu8jYDN1udKvLGDQxwXyZq1s1WY2EFLBRtSpWApK', 'Rogelio', 'M', 'Lansang', 'Unit 1  Eden Townhomes 2001 Eden St. Corner Pedro Gil St.', '1', 'Admin', '2024-06-13'),
(3, 'crempco123', '$2y$10$mo2hrvnS.qbSRP/BTSxwhOhXvZlmx81K5cfLMo4FDUmxDZ48MPZF2', 'John', 'D', 'Doe', 'Unit 1  Eden Townhomes 2001 Eden St. Corner Pedro Gil St.', '1', 'Admin', '2024-06-13'),
(4, 'isabela-001', '$2y$10$nYpaGjiAxS6ctRq4jjZ69.AuI2IlElM0P1xEFFJYAKYrdbOf9Hk3G', 'Isabela', 'C', 'Encoder', 'Isabela', '2', 'Encoder', '2024-06-18'),
(5, 'pangasinan-001', '$2y$10$Nw0uVH/09ZllTJoyrWanzeSPGIOjrKAdjfihKZIpsEjC7BKoxsO.q', 'Pangasinan', 'C', 'Encoder', 'Pangasinan', '3', 'Encoder', '2024-06-18'),
(6, 'cavite-001', '$2y$10$55nILQTTakSeLNfB81A4yeFjvuCX9u95.2h3EGLzeaQZyBvmE5esS', 'Cavite', '', 'Encoder', 'Cavite', '1', 'Encoder', '2024-06-18'),
(7, 'laguna-001', '$2y$10$ebxjIwOhZI/u.nZVlK7BA.sW9P1mECK.vF99mUDS5lyaAwSgB9NJO', 'Laguna', '', 'Encoder', 'Laguna', '5', 'Encoder', '2024-06-18'),
(8, 'bicol-001', '$2y$10$a.7eDEyewkBMI27t45SKMeHlJRKcJcofS.RpgLpH.tG.9q/YGYY6m', 'Bicol', '', 'Encoder', 'Bicol', '6', 'Encoder', '2024-06-18'),
(9, 'mindoro-001', '$2y$10$IiqT3sZo5Ml956OFc3s4wu5EW71P8K1.KoCTYHjcakYxbctpOdPn.', 'Mindoro Oriental', '', 'Encoder', 'Mindoro Oriental', '7', 'Encoder', '2024-06-18'),
(10, 'marinduque-001', '$2y$10$Df1z53.PzHHQlBbry18louqbi1iIKOMF8xYidDhmp1dbBmIqffF26', 'Marinduque', '', 'Encoder', 'Marinduque', '8', 'Encoder', '2024-06-18');

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
(1, 'Manila', 'NCR'),
(2, 'Isabela', 'Region II'),
(3, 'Pangasinan', 'Region II'),
(4, 'Cavite', 'Region IV-A'),
(5, 'Laguna', 'Region IV-A'),
(6, 'Bicol', 'Region IV-A'),
(7, 'Mindoro-Oriental', 'MIMAROPA'),
(8, 'Marinduque', 'MIMAROPA'),
(9, 'Romblon', 'MIMAROPA'),
(10, 'Palawan', 'MIMAROPA'),
(11, 'Iloilo', 'Region VI'),
(12, 'Capiz', 'Region VI'),
(13, 'Leyte', 'Region VI'),
(14, 'Bohol', 'Region VII'),
(15, 'Cebu', 'Region VII'),
(16, 'Bukidnon', 'Region X'),
(17, 'Misamis Occidental', 'Region X'),
(18, 'Cagayan de Oro', 'Region X'),
(19, 'Davao', 'Region XI'),
(20, 'Zamboanga', 'Region XI'),
(21, 'General Santos', 'Region XII'),
(22, 'Butuan', 'Region XIII');

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
  `name` varchar(200) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `category` varchar(150) NOT NULL DEFAULT '',
  `sub_category` varchar(150) NOT NULL DEFAULT '',
  `price` decimal(11,2) NOT NULL DEFAULT 0.00,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `branch` varchar(5) NOT NULL DEFAULT '',
  `shop` varchar(5) NOT NULL DEFAULT '',
  `spec` varchar(50) NOT NULL DEFAULT '',
  `img_dir` varchar(200) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `category`, `sub_category`, `price`, `quantity`, `branch`, `shop`, `spec`, `img_dir`) VALUES
(2, 'Perfume Rare For Men 60ml', 'ARMANI ATTITUDE Paris FRAGRANCE', '9', '34', 160.00, 100, '1', '', '1', 'img/product/ARMANNI ATITUDE (2).jpg'),
(3, 'Perfume Active for men 60ml', 'AQUA DE GIO PARIS  FRAGRANCE 60ML', '9', '34', 160.00, 100, '1', '', '2', 'img/product/aqua de gio (1).jpg'),
(4, 'Perfume Ambitious for men 60ml', 'GIORGIO ARMANI Paris Fragrance 60ml ', '9', '34', 180.00, 100, '1', '', '3', 'img/product/black code.jpg'),
(5, 'Perfume Strong Black code 60ml', 'Strong Black code for Men 60ml', '9', '34', 160.00, 100, '1', '', '4', 'img/product/BLACK CODE1.jpg'),
(6, 'Hot Classic Banana Republic for Men 60ml', 'Hot Classic for Men Banana Republic 60ml', '9', '34', 160.00, 100, '1', '', '5', 'img/product/BANANA REPUBLIC.jpg'),
(7, 'Elegant  BVLGARY for Women 50ml ', 'Elegant BVLGARY for Women 50ml', '9', '34', 160.00, 100, '1', '', '6', 'img/product/bulgary amethyst.jpg'),
(8, 'Perfume Confident cool Water for Men 85ml', 'Perfume Confident Cool Water For Men 85ml', '9', '34', 160.00, 100, '1', '', '7', 'img/product/COOL WATER141.jpg'),
(9, 'Perfume Passionate ACQUA DI GIO for Men 100ml', 'Perfume Passionate ACQUA DI GIO for Men 100ml', '9', '34', 180.00, 100, '1', '', '8', 'img/product/ACQUA DE GIO100.jpg'),
(10, 'Perfume Passionate ACQUA DI GIO for Men 60ml', 'Passionate ACQUA DI GIO for Men 60ml', '9', '34', 180.00, 100, '1', '', '9', 'img/product/ACQUA DE GIO (1).jpg'),
(11, 'Perfume Handsome CK One for Men 60ml', 'Handsome CK One for Men 60ml', '9', '34', 180.00, 100, '1', '', '10', 'img/product/CKL.jpg'),
(12, 'Perfume Fresh Cool Water 100 ml', 'Fresh Cool Water 100 ml', '9', '34', 180.00, 100, '1', '', '11', 'img/product/COOL WATER WOMEN100.jpg'),
(13, 'Perfume Handsome CK One for Men 100ml', 'Handsome CK One for Men 100ml', '9', '34', 180.00, 100, '1', '', '12', 'img/product/CKL100.jpg'),
(14, 'Perfume Confident Cool Water for Men 100ml', 'Confident Cool Water for Men 100ml', '9', '34', 180.00, 100, '1', '', '13', 'img/product/COOL WATER100.jpg'),
(15, 'Perfume Strong Black code for Men 85ml', 'Strong Black Code for Men 85ml', '9', '34', 160.00, 100, '1', '', '14', 'img/product/BLACK CODE12414.jpg'),
(16, 'Perfume Charming Fantasy for Women 85ml', 'Charming Fantasy for Women 85ml', '9', '34', 160.00, 100, '1', '', '15', 'img/product/CHARMING FANTASY100.jpg'),
(17, 'Perfume Hot Classic Banana Republic for Men 100ml', 'Hot CLASSIC Banana Republic for Men 100ml', '9', '34', 160.00, 100, '1', '', '16', 'img/product/BANANA REPUBLIC100.jpg'),
(18, 'Perfume Strong Black code 100ml', 'Perfume Strong BLACK CODE for Men 100ml', '9', '34', 180.00, 100, '1', '', '17', 'img/product/BLACK CODE100.jpg'),
(19, 'Perfume Strong Black code 100ml', 'Perfume Strong BLACK CODE for Men 100ml', '9', '34', 180.00, 100, '1', '', '18', 'img/product/BLACK CODE100.jpg'),
(20, 'Perfume Lively Bvlgari Amethyst Women 60ml', 'Perfume Lively Bvlgari Amethyst Women 60ml', '9', '34', 100.00, 100, '1', '', '19', 'img/product/bvlgari amethyst60.jpg'),
(21, 'Perfume GENTLE COOL WATER MEN 60ml', 'GENTLE COOL WATER MEN 60ml ', '9', '34', 180.00, 100, '1', '', '20', 'img/product/COOL WATER MEN.jpg'),
(22, 'perfume', 'handsome ck one for men 100ml', '9', '34', 200.00, 1, '1', '', '21', 'img/product/web icon.png'),
(23, 'Perfume ENVY Women 50ml', 'ENVY WOMEN DOLCE & GABBANA 50ml', '9', '34', 160.00, 100, '1', '', '22', 'img/product/d&g light blue.jpg'),
(24, 'Perfume Lively Bvlgari Amethyst for Women 100ml', 'Lively Bvlgari Amethyst for Women 100ml', '9', '34', 180.00, 100, '1', '', '23', 'img/product/bvlgari amethyst100.jpg'),
(25, 'Perfume PLUM WOMEN DAVID OFF 50ml', 'PLUM WOMEN DAVID OFF 50ml', '9', '34', 160.00, 100, '1', '', '24', 'img/product/COOL WATER WOMEN.jpg'),
(26, 'Perfume Stylish Happy men 85ml', 'Stylish HAPPY MEN 85ml', '9', '34', 160.00, 100, '1', '', '25', 'img/product/HAPPY MEN1233.jpg'),
(27, 'Perfume Stylish Happy men 100ml', 'Stylish HAPPY for MEN 100ml', '9', '34', 160.00, 100, '1', '', '26', 'img/product/HAPPY MEN100.jpg'),
(28, 'Perfume Stylish Happy men 100ml', 'Stylish HAPPY for MEN 100ml', '9', '34', 160.00, 100, '1', '', '27', 'img/product/HAPPY MEN100.jpg'),
(29, 'Perfume Perfect TOMMY BOY for men 85ml', 'Perfect TOMMY BOY for MEN 85ml', '9', '34', 160.00, 100, '1', '', '28', 'img/product/TOMMY BOY85.jpg'),
(30, 'Perfume Charming Fantasy for Women 60ml', 'Charming FANTASY for WOMEN 60ml ', '9', '34', 160.00, 100, '1', '', '29', 'img/product/CHARMING FANTASY60.jpg'),
(31, 'Perfume Handsome CK ONE for men 85ml', 'Handsome CK ONE FOR MEN 85ml ', '9', '34', 180.00, 100, '1', '', '30', 'img/product/CKL123124.jpg'),
(32, 'Perfume Fresh Cool Water for Women 60 ml', 'Fresh Cool Water for Women 60ml', '9', '34', 180.00, 100, '1', '', '31', 'img/product/COOL WATER WOMEN60.jpg'),
(33, 'Perfume Confident COOL WATER for Men 60ml', 'Confident COOL WATER for Men 60ml', '9', '34', 180.00, 100, '1', '', '32', 'img/product/COOL WATER.jpg'),
(34, 'Perfume Confident COOL WATER for Men 85ml', 'Confident COOL WATER for Men 85ml ', '9', '34', 180.00, 100, '1', '', '33', 'img/product/COOL WATER141 (1).jpg'),
(35, 'Perfume Adorable D&G light Blue Women 100ml', 'Adorable D&G light Blue Women 100ml ', '9', '34', 180.00, 100, '1', '', '34', 'img/product/d&G100 (1).jpg'),
(36, 'Perfume IMPRESS WOMEN DKNY 50ml', 'IMPRESS WOMEN DKNY 50ml', '9', '34', 160.00, 100, '1', '', '35', 'img/product/DKNY.jpg'),
(37, 'Perfume Glamorous Be Delicious Women 60ml', 'Glamorous Be Delicious Women 60ml', '9', '34', 160.00, 100, '1', '', '36', 'img/product/dkny60 (1).jpg'),
(38, 'Perfume Glamorous Be Delicious Women 100ml', 'Glamorous Be Delicious Women 100ml', '9', '34', 180.00, 100, '1', '', '37', 'img/product/dkny100.jpg'),
(39, 'Perfume Charming Women 50ml', 'CHARMING WOMEN inspired by BRITNEY SPEARS 50ml', '9', '34', 160.00, 100, '1', '', '38', 'img/product/FANTASY.jpg'),
(40, 'Perfume EXECUTIVE Men HUGO BOSS 60ml', 'EXECUTIVE Men HUGO BOSS 60ml', '9', '34', 160.00, 100, '1', '', '39', 'img/product/HUGO BOSS.jpg'),
(41, 'Perfume Awesome HUGO SPORT for Men 60ml', 'Awesome HUGO SPORT for Men 60ml ', '9', '34', 160.00, 100, '1', '', '40', 'img/product/HUGO SPORT.jpg'),
(42, 'Perfume Awesome HUGO SPORT for Men 85ml', 'Awesome HUGO SPORT for Men 85ml', '9', '34', 180.00, 100, '1', '', '41', 'img/product/HUGO SPORT85 (1).jpg'),
(43, 'Perfume Awesome HUGO SPORT for Men 100ml', 'Awesome HUGO SPORT for Men 100ml', '9', '34', 180.00, 100, '1', '', '42', 'img/product/HUGO SPORT100.jpg'),
(44, 'Perfume PRECIOUS LACOSTE for Women 50ml ', 'PRECIOUS LACOSTE for Women 50ml', '9', '34', 160.00, 100, '', '', '43', 'img/product/lacoste pink.jpg'),
(45, 'Perfume SUAVE for Men 60ml ', 'SUAVE for Men 60ml  ', '9', '34', 160.00, 100, '1', '', '44', 'img/product/LACOSTE RED.jpg'),
(46, 'Perfume CHERISH WOMEN VICTORIA SECRET 50ml', 'CHERISH WOMEN VICTORIA SECRET 50ml', '9', '34', 160.00, 100, '1', '', '45', 'img/product/LOVE SPELL.jpg'),
(47, 'Perfume Wonderful Omnia Crystalline WOMEN 60ml', 'Wonderful Omnia Crystalline WOMEN 60ml', '9', '34', 160.00, 100, '1', '', '46', 'img/product/omnia crystaline60.jpg'),
(48, 'Perfume Wonderful Omnia Crystalline WOMEN 100ml', 'Wonderful Omnia Crystalline WOMEN 100ml', '9', '34', 180.00, 100, '1', '', '47', 'img/product/omnia crystaline100.jpg'),
(49, 'Perfume BLOSSOM WOMEN PARIS HILTON 50ml', 'BLOSSOM WOMEN PARIS HILTON 50ml ', '9', '34', 160.00, 100, '1', '', '48', 'img/product/PARIS HILTON.jpg'),
(50, 'Perfume Beautiful Paris Hilton WOMEN 60ml', 'Beautiful Paris Hilton WOMEN 60ml', '9', '34', 160.00, 100, '1', '', '49', 'img/product/paris hilton60.jpg'),
(51, 'Perfume Beautiful Paris Hilton WOMEN 100ml', 'Beautiful Paris Hilton WOMEN 100ml ', '9', '34', 180.00, 100, '1', '', '50', 'img/product/paris hilton100.jpg'),
(52, 'Perfume GORGEOUS POLO RED MEN 60ml', 'GORGEOUS POLO RED for Men 60ml', '9', '34', 160.00, 100, '1', '', '51', 'img/product/POLO RED.jpg'),
(53, 'Perfume MANLY MEN 60ml', 'MANLY MEN 60ml', '9', '34', 160.00, 100, '1', '', '52', 'img/product/polo sport.jpg'),
(54, 'Perfume Moody Romantic Wish WOMEN 60ml', 'Moody Romantic Wish WOMEN 60ml', '9', '34', 160.00, 100, '1', '', '53', 'img/product/romantic wise60.jpg'),
(55, 'Perfume Moody Romantic Wish WOMEN 100ml', 'Moody Romantic Wish WOMEN 100ml', '9', '34', 180.00, 100, '1', '', '54', 'img/product/romantic wise100.jpg'),
(56, 'Perfume EXCITE MEN JO MALONE 60ml', 'EXCITE MEN inspired by JO MALONE 60ml', '9', '34', 160.00, 100, '1', '', '55', 'img/product/sweet pea.jpg'),
(57, 'Perfume Perfect TOMMY BOY for Men 60ml  ', 'Perfect TOMMY BOY for Men 60ml', '9', '34', 160.00, 100, '1', '', '56', 'img/product/TOMMY BOY.jpg'),
(58, 'Perfume Perfect TOMMY BOY for Men 85ml  ', 'Perfect TOMMY BOY for Men 85ml', '9', '34', 160.00, 100, '1', '', '57', 'img/product/TOMMY BOY85 (1).jpg'),
(59, 'Perfume Perfect TOMMY BOY for Men 100ml  ', 'Perfect TOMMY BOY for Men 100ml', '9', '34', 180.00, 100, '1', '', '58', 'img/product/TOMMY BOY100.jpg'),
(60, 'Perfume Jolly Tommy Girl WOMEN 60ml', 'Jolly Tommy Girl WOMEN 60ml', '9', '34', 160.00, 100, '1', '', '59', 'img/product/TOMMY GIRL60.jpg'),
(61, 'Perfume Jolly Tommy Girl WOMEN 100ml', 'Jolly Tommy Girl WOMEN 100ml', '9', '34', 180.00, 100, '1', '', '60', 'img/product/TOMMY GIRL100.jpg'),
(62, 'CHEMICAL COMPOUND WHITE BEESWAX MICRO PELLET 1KG', 'WHITE BEESWAX MICRO PELLET 1KG', '11', '35', 420.00, 1, '1', '', '61', 'img/product/WHITE BEESWAX MICRO PELLET.png'),
(63, 'Chemical Compound DIY CHARCOAL SOAP BASE 1KG', 'DIY CHARCOAL SOAP BASE 1KG ', '11', '35', 210.00, 1, '1', '', '62', 'img/product/DIY CHARCOAL SOAP BASE.png'),
(64, 'Chemical Compound DIY SHEA BUTTER SOAP BASE 1KG', 'DIY SHEA BUTTER SOAP BASE 1KG', '11', '35', 210.00, 1, '1', '', '63', 'img/product/DIY SHEA BUTTER SOAP BASE.png'),
(65, 'Chemical Compound GLYCERIN SOAP AVOCADO BUTTER SOAP BASE 1KG', 'GLYCERIN SOAP AVOCADO BUTTER SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '64', 'img/product/GLYCERIN SOAP AVOCADO BUTTER SOAP BASE.png'),
(66, 'Chemical Compound GLYCERIN SOAP BASE OPAQUE 1KG-20KGS', 'GLYCERIN SOAP BASE OPAQUE 1KG - 20KGS', '11', '35', 262.00, 1, '1', '', '65', 'img/product/GLYCERIN SOAP BASE OPAQUE.png'),
(67, 'Chemical Compound GLYCERIN SOAP ULTRA CARE SOAP BASE 1KG', 'GLYCERIN SOAP ULTRA CARE SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '66', 'img/product/GLYCERIN SOAP ULTRA CARE SOAP BASE.png'),
(68, 'Chemical Compound GOLDEN JOJOBA OIL 1LITER', 'GOLDEN JOJOBA OIL 1LITER', '11', '35', 2310.00, 1, '1', '', '67', 'img/product/GOLDEN JOJOBA OIL.png'),
(69, 'Chemical Compound REGULAR YELLOW BEESWAX BLOCK 1KG ', 'REGULAR YELLOW BEESWAX BLOCK 1KG', '11', '35', 315.00, 1, '1', '', '68', 'img/product/REGULAR YELLOW BEESWAX BLOCK.png'),
(70, 'Chemical Compound ARGAN OIL PRODUCT 500ml', 'ARGAN OIL PRODUCT 500ml', '11', '35', 1320.00, 1, '1', '', '69', 'img/product/ARGAN OIL.png'),
(71, 'Chemical Compound GMS AUSTRALIA 1KG - 25KGS', 'GMS AUSTRALIA 1KG - 25KGS', '11', '35', 262.00, 1, '1', '', '70', 'img/product/GMS AUSTRALIA.png'),
(72, 'Chemical Compound SHEA BUTTER 100G - 500G - 1KG', 'SHEA BUTTER 500G PRODUCT', '11', '35', 473.00, 1, '1', '', '71', 'img/product/SHEA BUTTER.png'),
(73, 'Chemical Compound GLYCERIN SOAP WHITENING SOAP BASE 1KG', 'GLYCERIN SOAP WHITENING SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '72', 'img/product/GLYCERIN SOAP WHITENING SOAP BASE.png'),
(74, 'Chemical Compound PREMIUM MINERAL OIL (UNSCENTED) 1LITER', 'PREMIUM MINERAL OIL (UNSCENTED) 1LITER', '11', '35', 168.00, 1, '1', '', '73', 'img/product/PREMIUM MINERAL OIL.png'),
(75, 'Chemical Compound SUGARCANE EXTRACTETHYL ALCOHOL 1LITER', 'SUGARCANE EXTRACT ETHYL ALCOHOL 1LITER ', '11', '35', 179.00, 1, '1', '', '74', 'img/product/SUGARCANE EXTRACT.png'),
(76, 'Chemical Compound STEARIC ACID 1KG', 'STEARIC ACID 1KG', '11', '35', 157.00, 1, '1', '', '75', 'img/product/STEARIC ACID.png'),
(77, 'Chemical Compound PHENOXYETHANOL 500G - 1LITER', 'PHENOXYETHANOL 500G - 1LITER', '11', '35', 262.00, 1, '1', '', '76', 'img/product/PHENOXYETHANOL.png'),
(78, 'Chemical Compound SHEA BUTTER 100G - 500G - 1KG', 'SHEA BUTTER PRODUCT 1KG', '11', '35', 840.00, 1, '1', '', '77', 'img/product/SHEA BUTTER (1).png'),
(79, 'Chemical Compound REGULAR CASTOR OIL 1LITER', 'REGULAR CASTOR OIL 1LITER', '11', '35', 262.00, 1, '1', '', '78', 'img/product/REGULAR CASTOR OIL.png'),
(80, 'Chemical Compound TEA-TRIETHANOLAMINE 1KG', 'TEA-TRIETHANOLAMINE 1KG', '11', '35', 189.00, 1, '1', '', '79', 'img/product/TEA (TRIETHANOLAMINE).png'),
(81, 'Chemical Compound  FRACTIONATED COCONUT OIL 1LITER ', 'FRACTIONATED COCONUT OIL 1LITER  ', '11', '35', 650.00, 1, '1', '', '80', 'img/product/COCONUT OIL.png'),
(82, 'Chemical Compound SODIUM LAUROYL SARCOSINATE  1KG - 25KGS', 'SODIUM LAUROYL SARCOSINATE 1KG', '11', '35', 550.00, 1, '1', '', '81', 'img/product/SLS (1).png'),
(83, 'Chemical Compound TWEEEN POLYSORBATE 80 1KG', 'TWEEN POLYSORBATE 80 1KG ', '11', '35', 473.00, 1, '1', '', '82', 'img/product/TWEEN POLYSORBATE 80.png'),
(84, 'Chemical Compound GLYCERIN SOAP JOJOBA BUTTER SOAP 1KG', 'GLYCERIN SOAP JOJOBA BUTTER SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '83', 'img/product/GLYCERIN SOAP JOJOBA BUTTER SOAP BASE.png'),
(85, 'Chemical Compound COCOAMIDOPROPYL BETAINE 1KG', 'COCOAMIDROPROPYL BETAINE 1KG', '11', '35', 160.00, 1, '1', '', '84', 'img/product/COCOAMIDOPROPYL BETAINE.png'),
(86, 'Negosyo kit Dishwashing liquid kit 17L yield', 'DISHWASHING LIQUID WITH FREE FOAM BOOSTER NEGOSYO KIT\r\n\r\nThis set comes with \r\n\r\n1 Kit of DIY 17Liters 12 Components\r\n\r\n', '16', '38', 490.00, 100, '1', '', '85', 'img/product/dishwashing liquid.jpg'),
(87, 'Negosyo kit dishwashing paste ', ' DISHWASHING PASTE DIY NEGOSYO KIT WITH 12PCS ROUND PLASTIC AND 12PCS GENERIC LABEL', '16', '38', 375.00, 100, '1', '', '86', 'img/product/dishwashing paste.jpg'),
(88, 'Negosyo kit Pet Shampoo', 'PET SHAMPOO DIY NEGOSYO KIT WITH  17PCS 1LITER BOTTLE AND 17PCS GENERIC LABEL', '21', '41', 610.00, 100, '1', '', '87', 'img/product/pet shampoo.jpg'),
(89, 'Chemical Compound LABS 1KG', 'LABS 1KG', '11', '35', 157.00, 1, '1', '', '88', 'img/product/LABS.png'),
(90, 'Chemical Compound SHEA BUTTER 100G - 500G - 1KG', 'SHEA BUTTER 100G PRODUCT', '11', '35', 126.00, 1, '1', '', '89', 'img/product/SHEA BUTTER (2).png'),
(91, 'Chemical Compound DIMETHICONE 100 1KG', 'DIMETHICONE 100 1KG', '11', '35', 630.00, 1, '1', '', '90', 'img/product/DIMETHICONE 100.png'),
(92, 'Chemical Compound SUNFLOWER OIL PRODUCT 1LITER', 'SUNFLOWER OIL PRODUCT 1LITER', '11', '35', 472.00, 1, '1', '', '91', 'img/product/SUNFLOWER OIL.png'),
(93, 'Pet Shampoo Kit 17Liters Yield', '17 LITERS  NA MAGAGAWA', '21', '41', 450.00, 100, '1', '', '92', 'img/product/PET SHAMPOO premium 17 baby powder.jpg'),
(94, 'Negosyo kit car shampoo', 'CAR SHAMPOO DIY NEGOSYO KIT  WITH 17PCS BOTTLE AND 17PCS GENERIC LABEL', '21', '42', 748.00, 100, '1', '', '93', 'img/product/car shampoo (1).jpg'),
(95, 'Pet Cologne 2Liters Yield', '2 LITERS NA MAGAGAWA', '21', '41', 1600.00, 100, '1', '', '94', 'img/product/pet cologne 1600.jpg'),
(96, 'Car Shampoo DIY Kit  17Liters Yield', '17 LITERS NA MAGAGAWA', '21', '42', 400.00, 100, '1', '', '95', 'img/product/car shampoo (2).jpg'),
(97, 'Car Shampoo DIY Kit  17Liters Yield', '17 LITERS NA MAGAGAWA', '21', '42', 400.00, 100, '1', '', '96', 'img/product/car shampoo (2).jpg'),
(98, 'Car Shampoo DIY Kit  17Liters Yield', '17 LITERS NA MAGAGAWA', '21', '43', 400.00, 100, '1', '', '97', 'img/product/car shampoo (2).jpg'),
(99, 'Magic Gatas Kit 17Liters Yield', '7 liters and 14 liters', '21', '42', 1800.00, 100, '1', '', '98', 'img/product/magic gatas.jpg'),
(103, 'Chemical Compound GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE 1KG', 'GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '99', 'img/product/GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE.png'),
(104, 'Chemical Compound ALMOND OIL PRODUCT 1LITER ', 'ALMOND OIL PRODUCT 1LITER ', '11', '35', 682.00, 1, '', '', '100', 'img/product/ALMOND OIL.png'),
(105, 'Chemical Compound SESAME OIL 1LITER', ' SESAME OIL 1LITER', '11', '35', 577.00, 1, '1', '', '101', 'img/product/SESAME OIL.png'),
(106, 'Chemical Compound APRICOT KERNEL OIL 1LITER', 'APRICOT KERNEL OIL 1LITER', '11', '35', 735.00, 1, '1', '', '102', 'img/product/APRICOT KERNEL OIL.png'),
(107, 'Chemical Compound GLYCERIN SOAP LOW SWEAT TRANSPARENT SOAP BASE 1KG', ' GLYCERIN SOAP LOW SWEAT TRANSPARENT SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '103', 'img/product/GLYCERIN SOAP LOW SWEAT TRANSPARENT SOAP.png'),
(108, 'Chemical Compound GLYCERIN SOAP COCOA BUTTER SOAP BASE 1KG', 'GLYCERIN SOAP COCOA BUTTER SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '104', 'img/product/GLYCERIN SOAP COCOA BUTTER SOAP BASE.png'),
(109, 'Chemical Compound GLYCERIN SOAP GOAT MILK (UNSCENTED) SOAP BASE 1KG', 'GLYCERIN SOAP GOAT MILK (UNSCENTED) SOAP BASE 1KG', '11', '35', 263.00, 1, '1', '', '105', 'img/product/GLYCERIN SOAP GOAT MILK (UNSCENTED) SOAP BASE.png'),
(110, 'Chemical Compound GLYCERIN SOAP OATMEAL SLES-FREE OPAQUE SOAP BASE 1KG', 'GLYCERIN SOAP OATMEAL SLES-FREE OPAQUE SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '106', 'img/product/GLYCERIN SOAP OATMEL SLES-FREE OPAQUE SOAP BASE.png'),
(111, 'Chemical Compound GLYCERIN SOAP SUPER  WHITE SOAP BASE 1KG', 'GLYCERIN SOAP SUPER WHITE SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '107', 'img/product/GLYCERIN SOAP SUPER WHITE SOAP BASE.png'),
(112, 'Chemical Compound POLYETHYLENE WAX 1KG/25KGS', 'POLYETHYLENE WAX 1KG/25KGS', '11', '35', 262.00, 1, '1', '', '108', 'img/product/POLYETHYLENE WAX.png'),
(113, 'Chemical Compound GRAPESEED OIL 1LITER', ' GRAPESEED OIL 1LITER', '11', '35', 735.00, 1, '1', '', '109', 'img/product/GRAPESEED OIL.png'),
(114, 'Chemical Compound PREMIUM WHITE BEESWAX BLOCK 1KG', 'PREMIUM WHITE BEESWAX BLOCK 1KG', '11', '35', 420.00, 1, '1', '', '110', 'img/product/PREMIUM WHITE BEESWAX BLOCK.png'),
(115, 'Chemical Compound PREMIUM YELLOW BEESWAX BLOCK 1KG', 'PREMIUM YELLOW BEESWAX BLOCK 1KG', '11', '35', 420.00, 1, '1', '', '111', 'img/product/PREMIUM YELLOW BEESWAX BLOCK.png'),
(116, 'Chemical Compound YELLOW BEESWAX BLOCK 1KG', 'YELLOW BEESWAX BLOCK 1KG', '11', '35', 420.00, 1, '1', '', '112', 'img/product/WHITE BEESWAX MICRO PELLET (1).png'),
(117, 'Chemical Compound WHITE BEESWAX MICRO PELLET 1KG', 'WHITE BEESWAX MICRO PELLET 1KG', '11', '35', 420.00, 1, '1', '', '113', 'img/product/WHITE BEESWAX MICRO PELLET (2).png'),
(118, 'Chemical Compound ROSEHIP OIL PRODUCT 1LITER', ' ROSEHIP OIL PRODUCT 1LITER', '11', '35', 2415.00, 1, '1', '', '114', 'img/product/ROSEHIP OIL.png'),
(119, 'Chemical Compound ROSEHIP OIL PRODUCT 500ml', 'ROSEHIP OIL PRODUCT 500ml', '11', '35', 1260.00, 1, '1', '', '115', 'img/product/ROSEHIP OIL.png'),
(120, 'Chemical Compound ARGAN OIL PRODUCT 1LITER', 'ARGAN OIL PRODUCT 1LITER', '11', '35', 2415.00, 1, '1', '', '116', 'img/product/ARGAN OIL.png'),
(121, 'Chemical Compound GOLDEN JOJOBA OIL 500ml', ' GOLDEN JOJOBA OIL 500ml', '11', '35', 1260.00, 1, '1', '', '117', 'img/product/GOLDEN JOJOBA OIL (1).png'),
(122, 'Chemical Compound TSUBAKI OIL 1LITER', 'TSUBAKI OIL 1LITER', '11', '35', 2625.00, 1, '1', '', '118', 'img/product/TSUBAKI OIL.png'),
(123, 'Chemical Compound CANDELILA WAX 25KGS', 'CANDELILA WAX 25KGS', '11', '35', 35437.00, 1, '1', '', '119', 'img/product/CANDELILA WAX.png'),
(124, 'Chemical Compound CITRIC ACID 25kgs', ' CITRIC ACID 25kgs', '11', '35', 5775.00, 1, '', '', '120', 'img/product/CITRIC ACID.png'),
(125, 'Chemical Compound ALUMINUM CHLOROHYDRATE 1LITER', 'ALUMINUM CHLOROHYDRATE 1LITER', '11', '35', 126.00, 1, '1', '', '121', 'img/product/ALUMINUM CHLOROHYDRATE.png'),
(126, 'Chemical Compound ARGAN OIL PRODUCT 500ml', 'ARGAN OIL PRODUCT 500ml', '11', '35', 1320.00, 1, '1', '', '122', 'img/product/ARGAN OIL (1).png'),
(127, 'Chemical Compound AVOCADO OIL1LITER', 'AVOCADO OIL1LITER', '11', '35', 682.00, 1, '1', '', '123', 'img/product/AVOCADO OIL.png'),
(128, 'Chemical Compound CDEA 1LITER', 'CDEA 1LITER', '11', '35', 160.00, 1, '1', '', '124', 'img/product/CDEA.png'),
(129, 'Chemical Compound CFAS 1kg', ' CFAS 1kg', '11', '35', 190.00, 1, '1', '', '125', 'img/product/CFAS.png'),
(130, 'Chemical Compound ISODODECANE 1LITER', ' ISODODECANE 1LITER', '11', '35', 150.00, 1, '1', '', '126', 'img/product/ISODODECANE.png'),
(131, 'Chemical Compound DIMETHICONE 500 1KG', 'DIMETHICONE 500 1KG', '11', '35', 630.00, 1, '1', '', '127', 'img/product/DIMETHICONE 500.png'),
(132, 'Chemical Compound DOWANOL 1LITER', 'DOWANOL 1LITER', '11', '35', 420.00, 1, '1', '', '128', 'img/product/DOWANOL.png'),
(133, 'Chemical Compound DPG 1KG', 'DPG 1KG', '11', '35', 420.00, 1, '1', '', '129', 'img/product/DPG.png'),
(134, 'Chemical Compound EPSOM SALT COARSE 1KG', 'EPSOM SALT COARSE 1KG', '11', '35', 38.00, 1, '1', '', '130', 'img/product/EPSOM SALT COARSE.png'),
(135, 'Chemical Compound EPSOM SALT COARSE 25KG', 'EPSOM SALT COARSE 25KG', '11', '35', 840.00, 1, '1', '', '131', 'img/product/EPSOM SALT COARSE.png'),
(136, 'Chemical Compound EPSOM SALT FINE PRODUCT 25KG', 'EPSOM SALT FINE PRODUCT 25KG', '11', '35', 735.00, 1, '1', '', '132', 'img/product/EPSOM SALT FINE.png'),
(137, 'Chemical Compound GOLDEN JOJOBA OIL 1LITER', 'GOLDEN JOJOBA OIL 1LITER', '11', '35', 2310.00, 1, '1', '', '133', 'img/product/GOLDEN JOJOBA OIL (2).png'),
(138, 'Chemical Compound GOLDEN JOJOBA OIL 500ML', 'GOLDEN JOJOBA OIL 500ML', '11', '35', 1260.00, 1, '1', '', '134', 'img/product/GOLDEN JOJOBA OIL (2).png'),
(139, 'Chemical Compound FIXATIVE 1LITER', 'FIXATIVE 1LITER', '11', '35', 875.00, 1, '', '', '135', 'img/product/FIXATIVE.png'),
(140, 'Chemical Compound FIXATIVE fixative 1LITER', 'FIXATIVE fixative 1LITER', '11', '35', 145.00, 1, '1', '', '136', 'img/product/GALSILK POLYQUATERNIUM 7.png'),
(141, 'Chemical Compound FIXATIVE RAW MATERIAL 100ml', 'FIXATIVE RAW MATERIAL 100ml', '11', '35', 199.00, 1, '1', '', '137', 'img/product/FIXATIVE.png'),
(142, 'Chemical Compound BENZALKONIUM CHLORIDE 1KG', 'BENZALKONIUM CHLORIDE 1KG', '11', '35', 300.00, 1, '1', '', '138', 'img/product/BENZALKONIUM CHLORIDE.png'),
(143, 'Chemical Compound BEHENTRIMONIUM CHLORIDE 1KG', ' BEHENTRIMONIUM CHLORIDE 1KG', '11', '35', 650.00, 1, '1', '', '139', 'img/product/BEHENTRIMONIUM CHLORIDE.png'),
(144, 'Chemical Compound OLIVE OIL 1LITER', 'OLIVE OIL 1LITER', '11', '35', 577.00, 1, '1', '', '140', 'img/product/OLIVE OIL.png'),
(145, 'Chemical Compound PEG 1LITER', 'PEG 1LITER', '11', '35', 472.00, 1, '1', '', '141', 'img/product/PEG 40.png'),
(146, 'Chemical Compound JOJOBA OIL 1LITER', 'JOJOBA OIL 1LITER', '11', '35', 2200.00, 1, '1', '', '142', 'img/product/JOJOBA OIL.png'),
(147, 'Chemical Compound SODA ASH 1KG', 'SODA ASH 1KG', '11', '35', 52.00, 1, '1', '', '143', 'img/product/SODA ASH.png'),
(148, 'Chemical Compound SOY BEAN 1LITER', 'SOY BEAN 1LITER', '11', '35', 252.00, 1, '1', '', '144', 'img/product/SOY BEAN OIL.png'),
(149, 'Chemical Compound GALSILK POLYQUATERNIUM 7 1KG', 'GALSILK POLYQUATERNIUM 7 1KG', '11', '35', 210.00, 1, '1', '', '145', 'img/product/GALSILK POLYQUATERNIUM 7 (1).png'),
(150, 'Chemical Compound GLYCERIN SOAP AVCADO BUTTER SOAP BASE 1KG', 'GLYCERIN SOAP AVCADO BUTTER SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '146', 'img/product/GLYCERIN SOAP AVOCADO BUTTER SOAP BASE (2).png'),
(151, 'Chemical Compound SODIUM SULFATE 25KG', 'SODIUM SULFATE 25KG', '11', '35', 630.00, 1, '1', '', '147', 'img/product/SODIUM SULFATE.png'),
(152, 'Chemical Compound DIMETHICONE 1000 PRODUCT 1KG', 'DIMETHICONE 1000 PRODUCT 1KG', '11', '35', 630.00, 1, '1', '', '148', 'img/product/DIMETHICONE 1000.png'),
(153, 'Chemical Compound DIY HONEY SOAP BASE PRODUCT 1KG', ' DIY HONEY SOAP BASE PRODUCT 1KG', '11', '35', 210.00, 1, '1', '', '149', 'img/product/DIY HONEY SOAP BASE.png'),
(154, 'Chemical Compound ETHYLHEXYLGLYCERIN 1KG', 'ETHYLHEXYLGLYCERIN 1KG', '11', '35', 1155.00, 1, '1', '', '150', 'img/product/ETHYLHEXYLGLYCERIN.png'),
(155, 'Chemical Compound GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE 1KG', 'GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE 1KG', '11', '35', 262.00, 1, '1', '', '151', 'img/product/GLYCERIN SOAP SLES-FREE TRANSPARENT SOAP BASE (1).png'),
(156, 'Chemical Compound PROCOL 1KG', 'PROCOL 1KG', '11', '35', 262.00, 1, '', '', '152', 'img/product/PROCOL.png'),
(157, 'Chemical Compound BUTYLENE GLYCOL PRODUCT 500ml', 'BUTYLENE GLYCOL PRODUCT 500ml', '11', '35', 840.00, 1, '1', '', '153', 'img/product/BUTYLENE GLYCOL.png'),
(158, 'Chemical Compound ALMOND OIL 1LITER ', 'ALMOND OIL 1LITER ', '11', '35', 682.00, 1, '1', '', '154', 'img/product/ALMOND OIL (1).png'),
(159, 'Chemical Compound REGULAR CASTOR OIL 1LITER ', 'REGULAR CASTOR OIL 1LITER ', '11', '35', 262.00, 1, '1', '', '155', 'img/product/REGULAR CASTOR OIL (1).png'),
(160, 'Chemical Compound TWEEN POLYSORBATE 80 1KG', 'TWEEN POLYSORBATE 80 1KG', '11', '35', 473.00, 1, '1', '', '156', 'img/product/TWEEN POLYSORBATE 80 (1).png'),
(161, 'Chemical Compound PROPANEDIOL 1KG', 'PROPANEDIOL 1KG', '11', '35', 945.00, 1, '1', '', '157', 'img/product/PROPANEDIOL (1).png'),
(162, 'Chemical Compound ISOHEXADECANE SOLUTION 500ml', 'ISOHEXADECANE SOLUTION 500ml', '11', '35', 650.00, 1, '1', '', '158', 'img/product/ISOHEXADECANE.png'),
(163, 'Chemical Compound LACTIC ACID PRODUCT 1LITER', 'LACTIC ACID PRODUCT 1LITER', '11', '35', 315.00, 1, '1', '', '159', 'img/product/LACTIC ACID.png'),
(164, 'Chemical Compound SORBITOL 1LITER', 'SORBITOL 1LITER', '11', '35', 105.00, 1, '1', '', '160', 'img/product/SORBITOL.png'),
(165, 'Chemical Compound INCENSE CONE HEARTSHAPED 40G', ' INCENSE CONE HEARTSHAPED 40G', '11', '35', 630.00, 1, '1', '', '161', 'img/product/INCENSE CONE HEART SHAPED.png'),
(166, 'Chemical Compound SODIUM LAURYL (SLS) 1KG', ' SODIUM LAURYL (SLS) 1KG', '11', '35', 230.00, 1, '1', '', '162', 'img/product/SLS (2).png');

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
(1, '1', '10 cm', 'n/a', 'n/a', '0.1kg', 'Yes', '3  days', 'Yes'),
(2, '1', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(3, '2', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(4, '3', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(5, '4', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(6, '5', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(7, '6', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(8, '7', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(9, '8', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(10, '9', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(11, '10', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(12, '11', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(13, '12', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(14, '13', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(15, '14', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(16, '15', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(17, '16', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(18, '17', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(19, '18', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(20, '19', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(21, '20', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(22, '21', '4', '3', '5', '5', 'Yes', '3days', 'Yes'),
(23, '22', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(24, '23', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(25, '24', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(26, '25', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(27, '26', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(28, '27', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(29, '28', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(30, '29', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(31, '30', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(32, '31', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(33, '32', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(34, '33', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(35, '34', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(36, '35', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(37, '36', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(38, '37', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(39, '38', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(40, '39', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(41, '40', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(42, '41', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(43, '42', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(44, '43', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(45, '44', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(46, '45', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(47, '46', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(48, '47', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(49, '48', '1.5inch', '5.2inch', '5.2inch', '50ml', 'Yes', '3days', 'Yes'),
(50, '49', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(51, '50', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(52, '51', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(53, '52', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(54, '53', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(55, '54', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(56, '55', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(57, '56', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(58, '57', '1.5inch', '5.2inch', '5.2inch', '85ml', 'Yes', '3days', 'Yes'),
(59, '58', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(60, '59', '1.5inch', '5.2inch', '5.2inch', '60ml', 'Yes', '3days', 'Yes'),
(61, '60', '1.5inch', '5.2inch', '5.2inch', '100ml', 'Yes', '3days', 'Yes'),
(62, '61', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(63, '62', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(64, '63', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(65, '64', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(66, '65', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(67, '66', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(68, '67', '4.9mm', '4.9mm', '4.5mm', '1LITER', 'Yes', '3days', 'Yes'),
(69, '68', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(70, '69', '2.95', '7.28', '2.95', '500ml', 'Yes', '3days', 'Yes'),
(71, '70', '4.9mm', '4.9mm', '4.5mm', '1kg - 25KGS', 'Yes', '3days', 'Yes'),
(72, '71', '2.95', '7.28', '2.95', '500G', 'Yes', '3days', 'Yes'),
(73, '72', '2.95', '7.28', '2.95', '1kg', 'Yes', '3days', 'Yes'),
(74, '73', '2.95', '7.28', '2.95', '1LITER', 'Yes', '3days', 'Yes'),
(75, '74', '2.95', '7.28', '2.95', '1LITER', 'Yes', '3days', 'Yes'),
(76, '75', '2.95', '7.28', '2.95', '1kg', 'Yes', '3days', 'Yes'),
(77, '76', '2.95', '7.28', '2.95', '500G-1LITER', 'Yes', '3days', 'Yes'),
(78, '77', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(79, '78', '4.9mm', '7.28', '4.5mm', '1LITER', 'Yes', '3days', 'Yes'),
(80, '79', '4.9mm', '7.28', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(81, '80', '2.95', '7.28', '2.95', '1LITER', 'Yes', '3days', 'Yes'),
(82, '81', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(83, '82', '8cm', '26cm', '8cm', '1000ml', 'Yes', '3days', 'Yes'),
(84, '82', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(85, '82', '8cm', '26cm', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(86, '83', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(87, '83', '4.9mm', '7.28', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(88, '84', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(89, '84', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(90, '84', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(91, '84', '2.95', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(92, '85', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(93, '86', '5inch', '3inch', '3inch', '3kg', 'Yes', '2days', 'Yes'),
(94, '87', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(95, '88', '2.95', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(96, '89', '1.5inch', '5.2inch', '2.95', '1kg', 'Yes', '3days', 'Yes'),
(97, '90', '2.95', '7.28', '2.95', '1kg', 'Yes', '3days', 'Yes'),
(98, '91', '2.95', '7.28', '2.95', '1LITER', 'Yes', '3days', 'Yes'),
(99, '92', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(100, '92', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(101, '93', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(102, '94', '2inch', '5inch', '2inch', '100ml', 'Yes', '3days', 'Yes'),
(103, '95', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(104, '96', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(105, '97', '8cm', '26cm', '8cm', '1000grams', 'Yes', '3days', 'Yes'),
(106, '98', '8cm', '26cm', '7cm', '1000grams', 'Yes', '3days', 'Yes'),
(107, '99', '9', '27', '7', '800grams', 'Yes', '3days', 'Yes'),
(108, '100', '9', '25', '7', '1000ml', 'Yes', '3days', 'Yes'),
(109, '101', '9cm', '26cm', '7cm', '1000ml', 'Yes', '3days', 'Yes'),
(110, '99', '4.9mm', '4.9mm', '4.5mm', '1kg', 'Yes', '3days', 'Yes'),
(111, '100', '4.9mm', '7.28', '4.5mm', '1LITER', 'Yes', '3days', 'Yes'),
(112, '101', '3.3cm', '11cm', '33.3fl.oz', '1LITER', 'Yes', '3days', 'Yes'),
(113, '102', '3.3cm', '11cm', '33.3fl.oz', '1LITER', 'Yes', '3days', 'Yes'),
(114, '103', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(115, '104', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(116, '105', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(117, '106', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(118, '107', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(119, '108', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(120, '109', '3.3cm', '11cm', '33.3fl.oz', '1LITER', 'Yes', '3days', 'Yes'),
(121, '110', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(122, '111', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(123, '112', '3.3cm', '11cm', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(124, '113', '3.3cm', '5.2inch', '33.3fl.oz', '1kg', 'Yes', '3days', 'Yes'),
(125, '114', '3.3cm', '11cm', '33.3fl.oz', '1LITER', 'Yes', '3days', 'Yes'),
(126, '115', '3.3cm', '11cm', '33.3fl.oz', '500ml', 'Yes', '3days', 'Yes'),
(127, '116', '3.3cm', '11cm', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(128, '117', '3.3cm', '11cm', '30ft.oz', '500ml', 'Yes', '3days', 'Yes'),
(129, '118', '3.3cm', '7.28cm', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(130, '119', '4.9mm', '11cm', '33.3fl.oz', '25kgs', 'Yes', '3days', 'Yes'),
(131, '120', '4.9mm', '7.28', '33.3fl.oz', '25kgs', 'Yes', '3days', 'Yes'),
(132, '121', '3.3cm', '11cm', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(133, '122', '3.3cm', '7.28', '30ft.oz', '500ml', 'Yes', '3days', 'Yes'),
(134, '123', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(135, '124', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(136, '125', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(137, '126', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(138, '127', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(139, '128', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(140, '129', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(141, '130', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(142, '131', '3.3cm', '7.28', '30ft.oz', '25KG', 'Yes', '3days', 'Yes'),
(143, '132', '3.3cm', '7.28', '30ft.oz', '25KG', 'Yes', '3days', 'Yes'),
(144, '133', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(145, '134', '3.3cm', '7.28', '30ft.oz', '500ml', 'Yes', '3days', 'Yes'),
(146, '135', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(147, '136', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(148, '137', '3.3cm', '7.28', '30ft.oz', '100ml', 'Yes', '3days', 'Yes'),
(149, '138', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(150, '139', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(151, '140', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(152, '141', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(153, '142', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(154, '143', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(155, '144', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(156, '145', '3.3cm', '7.28', '30ft.oz', '1KG', 'Yes', '3days', 'Yes'),
(157, '146', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(158, '147', '3.3cm', '7.28', '30ft.oz', '25KG', 'Yes', '3days', 'Yes'),
(159, '148', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(160, '149', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(161, '150', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(162, '151', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(163, '152', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(164, '153', '3.3cm', '7.28', '30ft.oz', '500ml', 'Yes', '3days', 'Yes'),
(165, '154', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(166, '155', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(167, '156', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(168, '157', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes'),
(169, '158', '3.3cm', '7.28', '30ft.oz', '500ml', 'Yes', '3days', 'Yes'),
(170, '159', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(171, '160', '3.3cm', '7.28', '30ft.oz', '1LITER', 'Yes', '3days', 'Yes'),
(172, '161', '3.3cm', '2.95', '25fl.oz', '40g', 'Yes', '3days', 'Yes'),
(173, '162', '3.3cm', '7.28', '30ft.oz', '1kg', 'Yes', '3days', 'Yes');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=167;

--
-- AUTO_INCREMENT for table `product_spec`
--
ALTER TABLE `product_spec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
