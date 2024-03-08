-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 12:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address_1` varchar(100) NOT NULL,
  `address_2` varchar(100) DEFAULT NULL,
  `town` varchar(30) NOT NULL,
  `state` varchar(25) NOT NULL,
  `postcode` int(6) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `firstname`, `lastname`, `country`, `address_1`, `address_2`, `town`, `state`, `postcode`, `phone`, `email`, `order_id`) VALUES
(1, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com', 0),
(2, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(3, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(4, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(5, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(6, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(7, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(8, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(9, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(10, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(11, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(12, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(13, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(14, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(15, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(16, 0, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 0, 2147483647, 'sa9725979797@gmail.com', 0),
(17, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(18, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(19, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(20, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(21, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(22, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(23, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(24, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(25, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(26, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(27, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(28, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(29, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(30, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(31, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(32, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(33, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(34, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(35, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(36, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(37, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(38, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(39, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(40, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(41, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(42, 0, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', 'porbandar', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com', 0),
(43, 0, 'SARTHI', 'JOSHI', 'India', 'N 604 UPVAN BUILDINGS', '', 'AHMEDABAD', 'GUJARAT', 382424, 2147483647, '', 0),
(44, 0, '', '', '', '', '', '', '', 0, 0, '', 0),
(45, 0, '', '', '', '', '', '', '', 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`) VALUES
(1, 'admin123', '$2y$10$D7RDSnjMDAze3tsTEpo6IOGwrPhHkQFMjE4JHFKXprai2GVf5nAfu'),
(3, '0875808080', '$2y$10$x2dVpdeV3zUX3WL78K5M/uKPww222T4C4IKurmL7lS99Qk.3Vp6j.'),
(11, 'mohit', '$2y$10$FAI0h91kMjEj7I3wnhCxu.k8FkcIVdZ9/FCB/KIEHNaIscVFQAtfG'),
(12, '12345', '$2y$10$./kdz.eTev24T.6Ib84jDeWra41E3s4269g2T03qWHxvZLzljUNFK'),
(14, '1234', '$2y$10$0CJxwhMi/SpBfWe0JLGzNemc4Y.12Y3tcg.74F6mFj1zkl6SsEAWq'),
(15, '123', '$2y$10$n9BfLi/Y4ZUB3Gj8QXhxO.C9Si.ahxdHqBinSriOIbOLvjI1PH25a'),
(16, 'sarthi', '$2y$10$ZPLQrAUPUFEc//c8JNLo.eZmRhzKTU6M5vxZwvjyhkUUvmY2e/GPK'),
(17, 'admin', '$2y$10$IzBYfIEntGP5bvz2Qhy/xeGXxGwLXCVEWj8LLH7oOvzfMWkUFuzBG');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `admin_id`, `name`, `image`, `link`) VALUES
(1, 1, 'main', 'uploads\\1.jpg', 'https://stock.adobe.com/in/search?k=electronics+logo&asset_id=320726662'),
(2, 1, 'banner 2 ', 'uploads\\2.jpg', 'https://stock.adobe.com/in/search?k=electronics+logo&asset');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` int(11) NOT NULL,
  `delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`, `total_price`, `delete`) VALUES
(53, 6, 1, 6, 60000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(100) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`) VALUES
(1, 'Sarthi Joshi', 'sa9725979797@gmail.com', 'vdsadcvxfdedscx'),
(2, 'Sarthi Joshi', 'sa9725979797@gmail.com', ' hjkhbjn nhbk');

-- --------------------------------------------------------

--
-- Table structure for table `electronics_categories`
--

CREATE TABLE `electronics_categories` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `display_order` int(11) NOT NULL,
  `state` enum('published','draft') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `electronics_categories`
--

INSERT INTO `electronics_categories` (`id`, `admin_id`, `name`, `image`, `display_order`, `state`) VALUES
(10, 1, 'laptop', 'uploads/download.jpg', 1, 'published'),
(11, 1, 'phone', 'uploads/product-10.webp', 2, 'published'),
(12, 1, 'watch', 'uploads/product-14.png', 3, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_details`
-- (See below for the actual view)
--
CREATE TABLE `order_details` (
`order_id` int(11)
,`product_id` int(11)
,`quantity` int(11)
,`total_price` decimal(10,2)
,`user_id` int(11)
,`address_1` varchar(100)
,`firstname` varchar(20)
,`lastname` varchar(20)
,`phone` int(10)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `product_id`, `total_price`, `user_id`, `quantity`) VALUES
(1, 3, 7000.00, 1, 7),
(2, 6, 1000.00, 1, 1),
(3, 3, 50000.00, 1, 5),
(4, 2, 10000.00, 1, 1),
(5, 4, 10000.00, 1, 1),
(6, 4, 10000.00, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `sale_price` decimal(10,2) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `status` enum('published','draft') NOT NULL,
  `category_id` int(11) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `admin_id`, `name`, `description`, `quantity`, `price`, `sale_price`, `type`, `status`, `category_id`, `images`, `created_at`) VALUES
(1, 1, 'laptop 1', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 10000.00, 1000.00, 'laptop ', 'published', 10, 'product_images/product-1.jpg', '2024-02-08 06:12:15'),
(2, 1, 'laptop-2', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 10000.00, 1000.00, 'laptop', 'published', 10, 'product_images/product-2.avif', '2024-02-08 06:14:42'),
(3, 1, 'laptop 3', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 10000.00, 1000.00, 'laptop', 'published', 10, 'product_images\\product-3.jpg', '2024-02-08 09:37:38'),
(4, 1, 'laptop4', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 10000.00, 1000.00, 'laptop', 'published', 10, 'product_images\\product-4.jpg', '2024-02-08 09:39:39'),
(5, 1, 'laptop5', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 10000.00, 1000.00, 'laptop', 'published', 10, 'product_images\\product-5.webp', '2024-02-08 09:40:09'),
(6, 1, 'watch1', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 10000.00, 1000.00, 'watch', 'published', 12, 'product_images\\product-11.png\r\n', '2024-02-08 09:47:53'),
(7, 1, 'watch2', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 10000.00, 1000.00, 'watch', 'published', 12, 'product_images\\product-12.jpg\r\n', '2024-02-08 09:49:15'),
(8, 1, 'watch3\r\n', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 10000.00, 1000.00, 'watch', 'published', 12, 'product_images\\product-13.jpg\r\n', '2024-02-08 09:49:56'),
(9, 1, 'watch4', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 10000.00, 1000.00, 'watch', 'published', 12, 'product_images\\product-14.png\r\n', '2024-02-08 09:56:21'),
(10, 1, 'phone 1', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 10000.00, 1000.00, 'phone', 'published', 11, 'product_images\\product-6.jpg', '2024-02-08 09:57:44'),
(11, 1, 'phone 2', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 10000.00, 1000.00, 'phone', 'published', 11, 'product_images\\product-7.jpg', '2024-02-08 09:58:14'),
(12, 1, 'phone 3', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 10000.00, 1000.00, 'phone', 'published', 11, 'product_images\\product-8.webp', '2024-02-08 09:59:07'),
(13, 1, 'phone 4', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 10000.00, 1000.00, 'phone', 'published', 11, 'product_images\\product-9.webp', '2024-02-08 10:01:09'),
(14, 1, 'phone 5', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 10000.00, 1000.00, 'phone', 'published', 11, 'product_images\\product-10.webp', '2024-02-08 10:01:36');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'admin123', '$2y$10$xUTVFtJGgE/sF6ssBi5NKeWu.S/IgRtlYeKTjiSivvvy.JhX1rZlW', 'sa9725979797@gmail.com');

-- --------------------------------------------------------

--
-- Stand-in structure for view `your_view_name`
-- (See below for the actual view)
--
CREATE TABLE `your_view_name` (
`id` int(11)
,`name` varchar(255)
,`images` text
,`sale_price` decimal(10,2)
,`quantity` int(11)
,`product_id` int(11)
,`total_price` int(11)
);

-- --------------------------------------------------------

--
-- Structure for view `order_details`
--
DROP TABLE IF EXISTS `order_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_details`  AS SELECT `order_info`.`order_id` AS `order_id`, `order_info`.`product_id` AS `product_id`, `order_info`.`quantity` AS `quantity`, `order_info`.`total_price` AS `total_price`, `order_info`.`user_id` AS `user_id`, `address`.`address_1` AS `address_1`, `address`.`firstname` AS `firstname`, `address`.`lastname` AS `lastname`, `address`.`phone` AS `phone`, `address`.`email` AS `email` FROM (`order_info` join `address` on(`order_info`.`user_id` = `address`.`user_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `your_view_name`
--
DROP TABLE IF EXISTS `your_view_name`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `your_view_name`  AS SELECT `products`.`id` AS `id`, `products`.`name` AS `name`, `products`.`images` AS `images`, `products`.`sale_price` AS `sale_price`, `cart`.`quantity` AS `quantity`, `cart`.`product_id` AS `product_id`, `cart`.`total_price` AS `total_price` FROM (`products` join `cart` on(`products`.`id` = `cart`.`product_id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forien key` (`user_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics_categories`
--
ALTER TABLE `electronics_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD KEY `order_id` (`order_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `electronics_categories`
--
ALTER TABLE `electronics_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`),
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `electronics_categories`
--
ALTER TABLE `electronics_categories`
  ADD CONSTRAINT `electronics_categories_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `electronics_categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
