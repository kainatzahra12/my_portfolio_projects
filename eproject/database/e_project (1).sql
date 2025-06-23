-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 01:51 PM
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
-- Database: `e_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_to_cart`
--

CREATE TABLE `add_to_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_to_cart`
--

INSERT INTO `add_to_cart` (`cart_id`, `user_id`, `product_id`, `product_qty`) VALUES
(15, 17, 2, 1),
(18, 17, 18, 1),
(19, 17, 18, 1),
(20, 17, 3, 1),
(21, 17, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) DEFAULT NULL,
  `cat_detail` varchar(255) DEFAULT NULL,
  `cat_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_detail`, `cat_image`) VALUES
(1, 'Greeting Cards', 'different varities are available in our store ', 'birthday7.jpg'),
(2, 'Gift Articles', 'different type of gift articles are available', 'birthdaygift3.jpg'),
(3, 'Hand bags', 'different varities are available in our store ', 'cross4.jpg'),
(4, 'wallet', 'different varities are available in our store ', 'wallet5.jpg'),
(5, 'Dolls', 'different varities are available in our store ', 'dolls2.jpg'),
(6, 'Beauty products', 'different varities are available in our store ', 'skincare3.jpg'),
(7, 'Files', 'different varities are available in our store ', 'arch2.jpg'),
(9, '...', 'Wooden and Glass ', 'anniversary5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `demandingpro`
--

CREATE TABLE `demandingpro` (
  `demid` int(11) NOT NULL,
  `demname` varchar(50) DEFAULT NULL,
  `demdetail` varchar(255) DEFAULT NULL,
  `demprice` int(11) DEFAULT NULL,
  `bestsub` int(11) DEFAULT NULL,
  `demimg` text DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `demandingpro`
--

INSERT INTO `demandingpro` (`demid`, `demname`, `demdetail`, `demprice`, `bestsub`, `demimg`, `product_id`) VALUES
(1, 'Hand bag', 'good quality', 60, 6, 'birthdaygift6.jpg', 50),
(2, 'Greetings cards', 'amazing variety', 40, 1, 'anniversary8.jpg', 18),
(3, 'gift articles', 'good quality', 60, 3, 'collectdolls1.jpg', 106),
(4, 'gift article', 'good looking ', 60, 5, 'thanks5.jpg', 28);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'employee'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `password`, `role`) VALUES
(1, 'Kainat', 'kainat@gmail.com', '123', 'employee'),
(2, 'atiya', 'atiya@gmail.com', '123', 'employee'),
(3, 'Fasahat', 'fasahat@gmail.com', '123', 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `f_image` text DEFAULT NULL,
  `cf_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`id`, `f_image`, `cf_id`) VALUES
(1, 'hand bag2.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `newarrival`
--

CREATE TABLE `newarrival` (
  `id` int(11) NOT NULL,
  `arrivname` varchar(50) DEFAULT NULL,
  `arrivprice` int(11) DEFAULT NULL,
  `arrivimg` text DEFAULT NULL,
  `arrcat` int(11) DEFAULT NULL,
  `maintag` varchar(255) DEFAULT NULL,
  `descip` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newarrival`
--

INSERT INTO `newarrival` (`id`, `arrivname`, `arrivprice`, `arrivimg`, `arrcat`, `maintag`, `descip`) VALUES
(1, 'Dolls', 40, 'dolls4.jpg', 5, 'Discover our latest collection', 'Discover the latest additions to our collection. Fresh styles, trending picks, and just-in items you won’t want to miss!\n\n'),
(2, 'Greetings cards', 30, 'greeting_card5.jpeg', 1, NULL, NULL),
(3, 'Hand bag', 40, 'hand bag 13.jpg', 3, NULL, NULL),
(4, 'Home decore ', 40, 'gift3.jpg', 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordersfinal`
--

CREATE TABLE `ordersfinal` (
  `order_id` int(11) NOT NULL,
  `users_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `pro_qty` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordersfinal`
--

INSERT INTO `ordersfinal` (`order_id`, `users_id`, `pro_id`, `pro_qty`, `total_amount`) VALUES
(1, 3, 8, 1, NULL),
(2, 17, 18, 1, 120),
(3, 17, 22, 1, 120),
(4, 17, 5, 1, 140),
(5, 17, 14, 2, 140);

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `place_id` int(11) NOT NULL,
  `place_firstName` varchar(255) DEFAULT NULL,
  `place_lastName` varchar(255) DEFAULT NULL,
  `place_email` varchar(255) DEFAULT NULL,
  `place_number` varchar(255) DEFAULT NULL,
  `place_address` varchar(255) DEFAULT NULL,
  `place_city` varchar(255) DEFAULT NULL,
  `place_payment` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `place_order`
--

INSERT INTO `place_order` (`place_id`, `place_firstName`, `place_lastName`, `place_email`, `place_number`, `place_address`, `place_city`, `place_payment`, `customer_id`) VALUES
(1, 'Ayan', 'kahna', 'kainat@gmail.com', '(033) 322-5972', 'port qasim', 'karachi', '1200', 17),
(2, 'Ayan', 'kahna', 'kainat@gmail.com', '(033) 322-5972', 'port qasim', 'karachi', '140', 17);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `proid` int(11) NOT NULL,
  `proname` varchar(50) DEFAULT NULL,
  `prodetail` varchar(255) DEFAULT NULL,
  `proprice` int(11) DEFAULT NULL,
  `prosub` int(11) DEFAULT NULL,
  `proimage` text DEFAULT NULL,
  `c_pro` int(11) DEFAULT NULL,
  `p_id` char(7) DEFAULT NULL,
  `p_code` char(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`proid`, `proname`, `prodetail`, `proprice`, `prosub`, `proimage`, `c_pro`, `p_id`, `p_code`) VALUES
(1, 'dolls', 'beautiful dolls ', 40, 4, 'dolls3.jpg', 5, '1200001', '12'),
(2, 'home decor', 'good quality', 60, 3, 'gift4.jpg', 2, '1200002', '12'),
(3, 'wallet', 'good quality', 30, 5, 'wallet 3.jpg', 4, '1200003', '12'),
(4, 'Hand bag', 'good quality', 60, 6, 'hand bag 4.jpeg', 3, '1200004', '12'),
(5, 'Dolls', 'beautiful dolls ', 60, 4, 'dolls5.jpg', 5, '1200005', '12'),
(6, 'Hand bag', 'good quality', 60, 6, 'hand bag 7.jpg', 3, '1200006', '12'),
(7, 'Hand bag', 'good quality', 60, 6, 'hand bag 4.jpeg', 3, '1200007', '12'),
(8, 'cards', 'good quality', 40, 1, 'birthday2.jpg', 1, '1200008', '12'),
(9, 'cards', 'good quality', 40, 1, 'birthday5.jpg', 1, '1200009', '12'),
(10, 'cards', 'good looking ', 60, 1, 'birthday7.jpg', 1, '1200010', '12'),
(11, 'cards', 'good looking ', 30, 2, 'sorry3.jpg', 1, '1200011', '12'),
(12, 'cards', 'good quality', 30, 2, 'sorry4.jpg', 1, '1200012', '12'),
(13, 'cards', 'good quality', 30, 2, 'sorry5.jpg', 1, '1200013', '12'),
(14, 'cards', 'good quality', 40, 2, 'sorry6.jpg', 1, '1200014', '12'),
(15, 'cards', 'good looking ', 60, 18, 'anniversary cards.jpg', 1, '1200015', '12'),
(16, 'cards', 'good quality', 40, 18, 'anniversary3.jpg', 1, '1200016', '12'),
(17, 'cards', 'good quality', 40, 18, 'anniversary7.jpg', 1, '1200017', '12'),
(18, 'cards', 'good looking ', 60, 18, 'anniversary8.jpg', 1, '1200018', '12'),
(19, 'cards', 'good quality', 60, 18, 'anniversary4.jpg', 1, '1200019', '12'),
(20, 'cards', 'good quality', 60, 21, 'wedding2.jpg', 1, '1200020', '12'),
(21, 'cards', 'good quality', 60, 21, 'wedding5.jpg', 1, '1200021', '12'),
(22, 'cards', 'good quality', 60, 21, 'wedding3.jpg', 1, '1200022', '12'),
(23, 'cards', 'good quality', 40, 27, 'well7.jpg', 1, '1200023', '12'),
(24, 'cards', 'good quality', 40, 27, 'well3.jpg', 1, '1200024', '12'),
(25, 'cards', 'good quality', 40, 27, 'well6.jpg', 1, '1200025', '12'),
(26, 'cards', 'good quality', 60, 27, 'well1.jpg', 1, '1200026', '12'),
(27, 'cards', 'good quality', 60, 28, 'thank6.jpg', 1, '1200027', '12'),
(28, 'cards', 'good quality', 60, 28, 'thanks5.jpg', 1, '1200028', '12'),
(29, 'cards', 'good quality', 40, 28, 'thank8.jpg', 1, '1200029', '12'),
(30, 'cards', 'good quality', 60, 28, 'thank7.jpg', 1, '1200030', '12'),
(31, 'cards', 'good quality', 40, 25, 'cristmis5.jpg', 1, '1200031', '12'),
(32, 'cards', 'good quality', 40, 25, 'cristmas7.jpg', 1, '1200032', '12'),
(33, 'cards', 'good quality', 60, 25, 'cristmis6.jpg', 1, '1200033', '12'),
(34, 'cards', 'good looking ', 60, 25, 'cristmas2.jpg', 1, '1200034', '12'),
(35, 'cards', 'good looking ', 30, 24, 'ramazan5.jpg', 1, '1200035', '12'),
(36, 'cards', 'good looking ', 30, 24, 'ramazan4.jpg', 1, '1200036', '12'),
(37, 'cards', 'good looking ', 30, 24, 'ramazan7.jpg', 1, '1200037', '12'),
(38, 'cards', 'good quality', 60, 24, 'ramazan6.jpg', 1, '1200038', '12'),
(39, 'cards', 'good quality', 40, 24, 'ramazan2.jpg', 1, '1200039', '12'),
(40, 'cards', 'good looking ', 60, 23, 'eid6.jpg', 1, '1200040', '12'),
(41, 'cards', 'good looking ', 40, 23, 'eid1.jpg', 1, '1200041', '12'),
(42, 'cards', 'good quality', 40, 23, 'eid2.jpg', 1, '1200042', '12'),
(43, 'cards', 'good quality', 60, 2, 'sorry4.jpg', 1, '1200043', '12'),
(44, 'cards', 'good quality', 40, 2, 'sorry3.jpg', 1, '1200044', '12'),
(45, 'cards', 'good quality', 40, 32, 'engagement4.jpg', 1, '1200045', '12'),
(46, 'cards', 'good quality', 40, 32, 'engagement7.jpg', 1, '1200046', '12'),
(47, 'cards', 'good looking ', 30, 32, 'engagement cards.jpg', 1, '1200047', '12'),
(48, 'cards', 'good looking ', 30, 32, 'engagement3.jpg', 1, '1200048', '12'),
(49, 'gift articles', 'good looking ', 40, 29, 'birthdaygift5.jpg', 2, '1200049', '12'),
(50, 'gift articles', 'good looking ', 60, 29, 'birthdaygift6.jpg', 2, '1200050', '12'),
(51, 'gift article', 'good looking ', 60, 29, 'birthdaygift3.jpg', 2, '1200051', '12'),
(52, 'gift article', 'good looking ', 40, 29, 'birthdaygift1.jpg', 2, '1200052', '12'),
(53, 'gift article', 'good quality', 60, 30, 'annigift3.jpg', 2, '1200053', '12'),
(54, 'gift article', 'good looking ', 60, 30, 'annigift2.jpg', 2, '1200054', '12'),
(55, 'gift article', 'good looking ', 60, 30, 'annigift1.jpg', 2, '1200055', '12'),
(56, 'gift article', 'good quality', 60, 31, 'gragift2.jpg', 2, '1200056', '12'),
(57, 'gift article', 'good quality', 40, 31, 'gragift3.jpg', 2, '1200057', '12'),
(58, 'gift article', 'good looking ', 60, 31, 'gragift1.jpg', 2, '1200058', '12'),
(59, 'gift article', 'good quality', 60, 33, 'eidgift2.jpg', 2, '1200059', '12'),
(60, 'gift article', 'good looking ', 60, 33, 'eidgift3.jpg', 2, '1200060', '12'),
(61, 'gift article', 'good quality', 40, 33, 'eidgift4.jpg', 2, '1200061', '12'),
(62, 'cards', 'good quality', 40, 22, 'gra5.jpg', 1, '1200062', '12'),
(63, 'cards', 'good quality', 60, 22, 'gra3.jpg', 1, '1200063', '12'),
(64, 'cards', 'good quality', 40, 22, 'gra2.jpg', 1, '1200064', '12'),
(65, 'cards', 'good looking ', 40, 22, 'gra4.jpg', 1, '1200065', '12'),
(66, 'cards', 'good looking ', 40, 26, 'new5.jpg', 1, '1200066', '12'),
(67, 'cards', 'good quality', 40, 26, 'new6.jpg', 1, '1200067', '12'),
(68, 'cards', 'good quality', 40, 26, 'new4.jpg', 1, '1200068', '12'),
(69, 'cards', 'good quality', 40, 26, 'new7.jpg', 1, '1200069', '12'),
(70, 'bag', 'good quality', 60, 34, 'clutch3.jpg', 3, '1200070', '12'),
(71, 'Hand bag', 'good quality', 40, 34, 'clutch5.jpg', 3, '1200071', '12'),
(72, 'Hand bag', 'good quality', 40, 34, 'clutch8.jpg', 3, '1200072', '12'),
(73, 'Hand bag', 'good quality', 40, 34, 'clutch2.jpg', 3, '1200073', '12'),
(74, 'Hand bag', 'good quality', 40, 35, 'cross1.jpg', 3, '1200074', '12'),
(75, ' cross body bag', 'good quality', 40, 35, 'cross5.jpg', 3, '1200075', '12'),
(76, 'Hand bag', 'good quality', 60, 35, 'cross4.jpg', 3, '1200076', '12'),
(77, 'Hand bag', 'good quality', 40, 35, 'cross3.jpg', 3, '1200077', '12'),
(78, 'Hand bag', 'good quality', 40, 36, 'hobo1.jpg', 3, '1200078', '12'),
(79, 'hobo bag', 'good quality', 40, 36, 'hobo3.jpg', 3, '1200079', '12'),
(80, 'Hand bag', 'good quality', 40, 36, 'hobo4.jpg', 3, '1200080', '12'),
(81, 'Hand bag', 'good quality', 40, 36, 'hobo5.jpg', 3, '1200081', '12'),
(82, 'tote bag', 'good quality', 40, 37, 'subhand2.jpg', 3, '1200082', '12'),
(83, 'Hand bag', 'good quality', 40, 37, 'subhand1.jpg', 3, '1200083', '12'),
(84, 'Hand bag', 'good quality', 40, 37, 'subhand4.jpg', 3, '1200084', '12'),
(85, 'Hand bag', 'good quality', 40, 37, 'subhand3.jpg', 3, '1200085', '12'),
(86, 'wallet', 'good quality', 40, 38, 'bfor1.jpg', 4, '1200086', '12'),
(87, 'wallet', 'good quality', 60, 38, 'bfor3.jpg', 4, '1200087', '12'),
(88, 'wallet', 'good quality', 30, 38, 'bfor2.jpg', 4, '1200088', '12'),
(89, 'wallet', 'good quality', 60, 39, 'trifol1.jpg', 4, '1200089', '12'),
(90, 'wallet', 'good quality', 60, 39, 'trifol2.jpg', 4, '1200090', '12'),
(91, 'wallet', 'good quality', 60, 39, 'trifol4.jpg', 4, '1200091', '12'),
(92, 'wallet', 'good quality', 40, 39, 'trifol3.jpg', 4, '1200092', '12'),
(93, 'wallet', 'good quality', 60, 40, 'travelwallet4.jpg', 4, '1200093', '12'),
(94, 'wallet', 'good looking ', 40, 40, 'travelwallet3.jpg', 4, '1200094', '12'),
(95, 'wallet', 'good quality', 60, 40, 'travelwallet1.jpg', 4, '1200095', '12'),
(96, 'wallet', 'good quality', 30, 40, 'travelwallet2.jpg', 4, '1200096', '12'),
(97, 'wallet', 'good quality', 60, 41, 'bfor4.jpg', 4, '1200097', '12'),
(98, 'wallet', 'good quality', 30, 42, 'phone wallet1.jpg', 4, '1200098', '12'),
(99, 'wallet', '', 60, 42, 'phone wallet2.jpg', 4, '1200099', '12'),
(100, 'wallet', 'good quality', 60, 42, 'phone wallet3.jpg', 4, '1200100', '12'),
(101, 'dolls', 'good looking ', 60, 43, 'baby dolls5.jpg', 5, '1200101', '12'),
(102, 'dolls', 'good quality', 40, 43, 'baby dolls1.jpg', 5, '1200102', '12'),
(103, 'dolls', 'good looking ', 40, 43, 'baby dolls4.jpg', 5, '1200103', '12'),
(104, 'dolls', 'good looking ', 60, 43, 'baby dolls3.jpg', 5, '1200104', '12'),
(105, 'dolls', 'beautiful dolls ', 40, 43, 'baby dolls2.jpg', 5, '1200105', '12'),
(106, 'dolls', 'good looking ', 60, 44, 'collectdolls1.jpg', 5, '1200106', '12'),
(107, 'dolls', 'good quality', 60, 44, 'collectdolls4.jpg', 5, '1200107', '12'),
(108, 'dolls', 'good looking ', 40, 44, 'dolls1.jpg', 5, '1200108', '12'),
(109, 'dolls', 'good quality', 60, 45, 'fashion5.jpg', 5, '1200109', '12'),
(110, 'dolls', 'good looking ', 60, 45, 'fashion3.jpg', 5, '1200110', '12'),
(111, 'dolls', 'good looking ', 60, 45, 'dolls2.jpg', 5, '1200111', '12'),
(112, 'dolls', 'good looking ', 60, 46, 'interactive2.jpg', 5, '1200112', '12'),
(113, 'dolls', 'good quality', 40, 46, 'interactive3.jpg', 5, '1200113', '12'),
(114, 'dolls', 'good looking ', 40, 46, 'interactive5.jpg', 5, '1200114', '12'),
(115, 'dolls', 'beautiful dolls ', 40, 46, 'interactive4.jpg', 5, '1200115', '12'),
(116, 'dolls', 'beautiful dolls ', 60, 47, 'dolls5.jpg', 5, '1200116', '12'),
(117, 'dolls', 'beautiful dolls ', 60, 47, 'plush1.jpg', 5, '1200117', '12'),
(118, 'dolls', 'good looking ', 60, 47, 'plush4.jpg', 5, '1200118', '12'),
(119, 'dolls', 'good quality', 40, 47, 'plush3.jpg', 5, '1200119', '12'),
(121, 'dolls', 'beautiful dolls ', 60, 47, 'dolls6.jpg', 5, '1200120', '12'),
(122, 'beauty product', 'amazing variety', 40, 49, 'skincare2.jpg', 6, '1200121', '12'),
(123, 'beauty product', 'amazing variety', 40, 49, 'skincare3.jpg', 6, '1200122', '12'),
(124, 'beauty product', 'good quality', 60, 49, 'skincare5.jpg', 6, '1200123', '12'),
(125, 'beauty product', 'amazing variety', 40, 49, 'skincare4.jpg', 6, '1200124', '12'),
(126, 'beauty product', 'good looking ', 60, 50, 'make1.jpg', 6, '1200125', '12'),
(127, 'beauty product', 'good quality', 60, 50, 'make2.jpg', 6, '1200126', '12'),
(128, 'beauty product', 'good quality', 60, 50, 'make3.jpg', 6, '1200127', '12'),
(129, 'beauty product', 'good quality', 60, 50, 'make4.jpg', 6, '1200128', '12'),
(130, 'beauty product', 'good quality', 60, 50, 'make5.jpg', 6, '1200129', '12'),
(131, 'beauty product', 'good quality', 30, 50, 'make6.jpg', 6, '1200130', '12'),
(132, 'beauty product', 'good looking ', 30, 50, 'make7.jpg', 6, '1200131', '12'),
(133, 'beauty product', 'good quality', 60, 50, 'make8.jpg', 6, '1200132', '12'),
(134, 'beauty product', 'good quality', 30, 52, 'hair2.jpg', 6, '1200133', '12'),
(135, 'beauty product', 'good quality', 60, 52, 'hair1.jpg', 6, '1200134', '12'),
(136, 'beauty product', 'amazing variety', 30, 52, 'hair6.jpg', 6, '1200135', '12'),
(137, 'beauty product', 'amazing variety', 40, 52, 'hair3.jpg', 6, '1200136', '12'),
(138, 'beauty product', 'good quality', 40, 53, 'mens1.jpg', 6, '1200137', '12'),
(139, 'beauty product', 'amazing variety', 60, 53, 'mens3.jpg', 6, '1200138', '12'),
(140, 'beauty product', 'amazing variety', 40, 53, 'mens5.jpg', 6, '1200139', '12'),
(141, 'beauty product', 'good looking ', 40, 53, 'mens4.jpg', 6, '1200140', '12'),
(142, 'files', 'good quality', 30, 54, 'arch file.jpg', 7, '1200141', '12'),
(143, 'files', 'good quality', 40, 54, 'arch2.jpg', 7, '1200142', '12'),
(144, 'files', 'good quality', 40, 54, 'files3.jpg', 7, '1200143', '12'),
(145, 'files', 'good quality', 40, 54, 'files1.jpg', 7, '1200144', '12'),
(146, 'beauty product', 'good quality', 30, 54, 'files2.jpg', 7, '1200145', '12'),
(147, 'files', 'good looking ', 40, 55, 'report cover file3.jpg', 7, '1200146', '12'),
(148, 'files', 'good quality', 40, 55, 'report cover file2.jpg', 7, '1200147', '12'),
(149, 'beauty product', 'good quality', 40, 55, 'report cover file4.jpg', 7, '1200148', '12'),
(150, 'files', 'good quality', 40, 56, 'officedocument1.jpg', 7, '1200149', '12'),
(151, 'files', 'good quality', 60, 56, 'files6.jpg', 7, '1200150', '12'),
(152, 'files', 'good quality', 30, 57, 'index divider1.jpg', 7, '1200151', '12'),
(153, 'files', 'good quality', 60, 57, 'index divider2.jpg', 7, '1200152', '12'),
(154, 'files', 'good quality', 40, 57, 'index divider3.jpg', 7, '1200153', '12');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `PASSWORD` varchar(10) DEFAULT NULL,
  `role` varchar(255) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `name`, `email`, `PASSWORD`, `role`) VALUES
(3, 'tahir abbas', 'tahir@gmail.com', '12345', 'user'),
(4, 'kainat', 'kainat@gmail.com', '12390', 'Admin'),
(6, 'hani', 'hani@gmail.com', '12345', 'user'),
(7, 'muhammad', 'muhammad@gmail.com', '1238', 'user'),
(9, 'hussain', 'hussain@gmail.com', '1234', 'user'),
(12, 'fatima', 'fatima@gmail.com', '1237', 'user'),
(13, 'ashad', 'ashad@gmail.com', '123', 'user'),
(14, 'hajra', 'hajra@gmail.com', '123', 'user'),
(17, 'ayan', 'ayan@gmail.com', '123', 'user'),
(18, 'abbas', 'abbas@gmail.com', '12345', 'user'),
(28, 'alisha', 'alisha@gmail.com', '12345678', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_title` varchar(50) DEFAULT NULL,
  `sub_detail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `category_id`, `sub_title`, `sub_detail`) VALUES
(1, 1, 'birthday cards', 'best cards available '),
(2, 1, 'Sorry cards', 'good'),
(3, 2, 'home decor', 'good looking product'),
(4, 5, 'dolls ', 'Dolls beautiful'),
(5, 4, 'wallet', 'good quality '),
(6, 3, 'hand bag', 'different variety of bags are available'),
(18, 1, 'anniversary card', 'good'),
(21, 1, 'wedding cards', NULL),
(22, 1, 'graduation cards', NULL),
(23, 1, 'Eid cards', NULL),
(24, 1, 'Ramadan cards', NULL),
(25, 1, 'cristmes cards', NULL),
(26, 1, 'new year cards', NULL),
(27, 1, 'get well soon', NULL),
(28, 1, 'thank you', NULL),
(29, 2, 'birthday gift', NULL),
(30, 2, 'anniversary gift', NULL),
(31, 2, 'graduation gift', NULL),
(32, 1, 'engagement cards', NULL),
(33, 2, 'eid gift', NULL),
(34, 3, 'clutch', NULL),
(35, 3, 'body cross bag', NULL),
(36, 3, 'hobo bag', NULL),
(37, 3, 'tote bag', NULL),
(38, 4, 'bi fold wallet', NULL),
(39, 4, 'tri fold wallet', NULL),
(40, 4, 'travel wallte', NULL),
(41, 4, 'card holder', NULL),
(42, 4, 'phone wallet', NULL),
(43, 5, 'baby dolls', NULL),
(44, 5, 'collective dolls', NULL),
(45, 5, 'fashion dolls', NULL),
(46, 5, 'interactive dolls', NULL),
(47, 5, 'plush dolls', NULL),
(49, 6, 'skin care', NULL),
(50, 6, 'make up', NULL),
(52, 6, 'hair products', NULL),
(53, 6, 'mens ', NULL),
(54, 7, 'arch file', NULL),
(55, 7, 'report cover file', NULL),
(56, 7, 'office document file', NULL),
(57, 7, 'index divider', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `demandingpro`
--
ALTER TABLE `demandingpro`
  ADD PRIMARY KEY (`demid`),
  ADD KEY `bestsub` (`bestsub`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newarrival`
--
ALTER TABLE `newarrival`
  ADD PRIMARY KEY (`id`),
  ADD KEY `arrcat` (`arrcat`);

--
-- Indexes for table `ordersfinal`
--
ALTER TABLE `ordersfinal`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`place_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`proid`),
  ADD KEY `prosub` (`prosub`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `demandingpro`
--
ALTER TABLE `demandingpro`
  MODIFY `demid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newarrival`
--
ALTER TABLE `newarrival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ordersfinal`
--
ALTER TABLE `ordersfinal`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_to_cart`
--
ALTER TABLE `add_to_cart`
  ADD CONSTRAINT `add_to_cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `add_to_cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`proid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demandingpro`
--
ALTER TABLE `demandingpro`
  ADD CONSTRAINT `demandingpro_ibfk_1` FOREIGN KEY (`bestsub`) REFERENCES `subcategory` (`sub_id`),
  ADD CONSTRAINT `demandingpro_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`proid`);

--
-- Constraints for table `newarrival`
--
ALTER TABLE `newarrival`
  ADD CONSTRAINT `newarrival_ibfk_1` FOREIGN KEY (`arrcat`) REFERENCES `category` (`cat_id`);

--
-- Constraints for table `ordersfinal`
--
ALTER TABLE `ordersfinal`
  ADD CONSTRAINT `ordersfinal_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `registers` (`id`),
  ADD CONSTRAINT `ordersfinal_ibfk_2` FOREIGN KEY (`pro_id`) REFERENCES `products` (`proid`);

--
-- Constraints for table `place_order`
--
ALTER TABLE `place_order`
  ADD CONSTRAINT `place_order_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `registers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`prosub`) REFERENCES `subcategory` (`sub_id`);

--
-- Constraints for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
