-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 05:17 PM
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
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `admin_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`admin_id`, `id`, `title`, `text`, `time`) VALUES
(1, 6, 'sarthi', '<h1 style=\"text-align: center; \"><b>About Us</b></h1><h3 style=\"text-align: center; \"><b><br></b></h3><h3 style=\"text-align: center; \"><b><br></b></h3><h3 style=\"text-align: center; \"><img src=\"https://st.depositphotos.com/1000128/2939/i/450/depositphotos_29394915-stock-photo-desktop-computer-with-touchscreen-interface.jpg\" style=\"width: 50%;\"><b><br></b></h3><h3 style=\"text-align: center; \"><b><br></b></h3><h3 style=\"text-align: center; \"><b><br></b></h3><table class=\"table table-bordered\"><tbody><tr><td><h4 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; font-weight: 700; line-height: 1.2; font-size: 24px; color: rgb(17, 17, 17); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Who We Are ?</h4><div><br></div></td><td><h4 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; font-weight: 700; line-height: 1.2; font-size: 24px; color: rgb(17, 17, 17); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Who We Do ?</h4><div><br></div></td><td><h4 style=\"margin-top: 0px; margin-right: 0px; margin-left: 0px; font-weight: 700; line-height: 1.2; font-size: 24px; color: rgb(17, 17, 17); font-family: &quot;Nunito Sans&quot;, sans-serif;\">Why Choose Us</h4><div><br></div></td></tr><tr><td><div class=\"col-lg-4 col-md-4 col-sm-6\" style=\"width: 390px; flex-basis: 33.3333%; max-width: 33.3333%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px;\"><div class=\"about__item\" style=\"margin-bottom: 30px;\"><p style=\"margin-bottom: 0px; font-size: 15px; color: rgb(61, 61, 61); line-height: 25px;\">Contextual advertising programs sometimes have strict policies that need to be adhered too. Let’s take Google as an example.</p></div></div><div class=\"col-lg-4 col-md-4 col-sm-6\" style=\"width: 390px; flex-basis: 33.3333%; max-width: 33.3333%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px;\"><div class=\"about__item\" style=\"margin-bottom: 30px;\"></div></div></td><td><div class=\"col-lg-4 col-md-4 col-sm-6\" style=\"width: 390px; flex-basis: 33.3333%; max-width: 33.3333%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px;\"><div class=\"about__item\" style=\"margin-bottom: 30px;\"><p style=\"margin-bottom: 0px; font-size: 15px; color: rgb(61, 61, 61); line-height: 25px;\">In this digital generation where information can be easily obtained within seconds, business cards still have retained their importance.</p></div></div><div class=\"col-lg-4 col-md-4 col-sm-6\" style=\"width: 390px; flex-basis: 33.3333%; max-width: 33.3333%; color: rgb(33, 37, 41); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 16px;\"><div class=\"about__item\" style=\"margin-bottom: 30px;\"></div></div></td><td><span style=\"color: rgb(61, 61, 61); font-family: &quot;Nunito Sans&quot;, sans-serif; font-size: 15px;\">A two or three storey house is the ideal way to maximise the piece of earth on which our home sits, but for older or infirm people.</span><br></td></tr></tbody></table><h3 style=\"text-align: center; \"><b><br></b></h3><h3 style=\"text-align: center; \"><b><br></b></h3><blockquote style=\"text-align: left;\"><span style=\"font-size: 24px;\"><br></span><table class=\"table table-bordered\"><tbody><tr><td><blockquote style=\"color: rgb(51, 51, 51);\"><span style=\"font-size: 24px;\"><br></span><span style=\"color: inherit; font-family: inherit;\">With a passion for cutting-edge technology, we strive to provide top-notch electronic products to enhance your lifestyle. From sleek smartphones to powerful laptops, and immersive home entertainment systems to state-of-the-art smart home devices, we cater to every digital need. Our curated collection features trusted brands and the latest gadgets, ensuring quality and reliability. With a user-friendly interface and secure transactions, shopping with us is a breeze. Whether you\'re a tech enthusiast or a casual user, discover the perfect electronics solution at our one-stop destination. Elevate your digital experience with us today!</span></blockquote><h3 style=\"color: rgb(51, 51, 51); font-family: Poppins;\"><span style=\"font-weight: 700;\"><br></span></h3></td><td><p><img src=\"https://img.freepik.com/free-photo/modern-stationary-collection-arrangement_23-2149309652.jpg?t=st=1709706967~exp=1709710567~hmac=3fcd46d7077684507850c67b59951b9b3ab91be6d266e969011255c8533f5c40&amp;w=1380\" style=\"\"><br></p></td></tr></tbody></table></blockquote><h1 style=\"text-align: center; \"><b>our team&nbsp;</b></h1><table class=\"table table-bordered\"><tbody><tr><td><p><img src=\"https://img.freepik.com/free-photo/indian-man-smiling-cheerful-expression-closeup-portrait_53876-129387.jpg?w=1380&amp;t=st=1709706604~exp=1709707204~hmac=74c5e73747c4f1ee8cc9699d091b2e40a49e5ec698a5222db99c61775d21c209\" style=\"width: 100%;\"><br></p></td><td><p><img src=\"https://img.freepik.com/free-photo/businessman-dress-code-checking-his-blazer_114579-15934.jpg?w=1380&amp;t=st=1709706681~exp=1709707281~hmac=a65e94807fd377c6724593c363f4001bb5ad7990ce513fb31bd50121301b8a06\" style=\"width: 100%;\"><br></p></td><td><p><img src=\"https://img.freepik.com/free-photo/cheerful-indian-businessman-smiling-closeup-portrait-jobs-career-campaign_53876-129416.jpg?t=st=1709706751~exp=1709710351~hmac=ea783c69480106c3c6c68f389ec9a8bd97960dc71d2ebf5e2aff7e63f1a79f24&amp;w=1380\" style=\"width: 100%;\"><br></p></td><td><p><img src=\"https://img.freepik.com/free-photo/close-up-portrait-young-man-isolated-black-studio-background-photoshot-real-emotions-male-model-dreaming-smiling-hopeful-happy-facial-expression-human-emotions-concept_155003-30432.jpg?t=st=1709706824~exp=1709710424~hmac=2fba8bc608b22d5f8bf73ff86ded82b75708ba76116b37aae93e899ccd8d3967&amp;w=1380\" style=\"width: 100%;\"><br></p></td></tr><tr><td><h2 style=\"color: rgb(51, 51, 51); font-family: Poppins;\"><span style=\"font-weight: 700;\">CEO</span></h2></td><td><h2><b>CTO</b></h2></td><td><h2><b>COO</b></h2></td><td><h2><b>CMO</b></h2></td></tr></tbody></table><h1 style=\"text-align: center; \"><b><br></b></h1><h1 style=\"text-align: center; \"><b>OUR WORK&nbsp;</b></h1><h1 style=\"text-align: center; \"><b><br></b></h1><table class=\"table table-bordered\" style=\"text-align: center;\"><tbody><tr><td><h3 style=\"text-align: center; \"><b>102&nbsp;</b></h3><h3 style=\"text-align: center; \"><b> in country</b></h3></td><td><h3 style=\"text-align: center; \"><b>98% </b></h3><h3 style=\"text-align: center; \"><b>Happy Customer</b></h3></td><td><h3 style=\"text-align: center;\"><b>100+ </b></h3><h3 style=\"text-align: center;\"><b>category&nbsp;</b></h3></td><td><h3 style=\"text-align: center; \"><b>20k+ </b></h3><h3 style=\"text-align: center; \"><b>Orders Shipped</b></h3></td></tr></tbody></table><h1 style=\"text-align: center; \"><b><br></b></h1><h3><br></h3>', '2024-03-07 06:37:48');

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
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `user_id`, `firstname`, `lastname`, `country`, `address_1`, `address_2`, `town`, `state`, `postcode`, `phone`, `email`) VALUES
(63, 1, 'SARTHI', 'JOSHI', 'India', 'N 604 UPVAN BUILDINGS', '', 'AHMEDABAD', 'GUJARAT', 382424, 2147483647, ''),
(66, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(67, 1, 'SARTHI', 'JOSHI', 'India', 'N 604 UPVAN BUILDINGS', '', 'AHMEDABAD', 'GUJARAT', 382424, 2147483647, ''),
(68, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(69, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(70, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(71, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(72, 1, 'SARTHI', 'JOSHI', 'India', 'N 604 UPVAN BUILDINGS', '', 'AHMEDABAD', 'GUJARAT', 382424, 2147483647, ''),
(73, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(74, 1, '', '', '', '', '', '', '', 0, 0, ''),
(75, 1, '', '', '', '', '', '', '', 0, 0, ''),
(76, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(77, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(78, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(79, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(80, 1, 'Sarthi', 'Joshi', 'India', 'Upvan Buildings Tragad Road Chandkheda', '', 'Ahmedabad', 'Gujarat', 382424, 2147483647, 'sa9725979797@gmail.com'),
(81, 1, '', '', '', '', '', '', '', 0, 0, ''),
(82, 1, 'gresd', '', '', '', '', '', '', 0, 0, '');

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
(17, 'admin', '$2y$10$IzBYfIEntGP5bvz2Qhy/xeGXxGwLXCVEWj8LLH7oOvzfMWkUFuzBG'),
(19, 'krisna', '$2y$10$erhdJkf4N6ANjvvcuie2reJqvxM7ktXXfdPMsj6qtBTfJmAoQb1A2'),
(20, 'Ajkldsaj', '$2y$10$7o5MaAMorSYHZQrcyok5SetmD8zX/NORsVR2.ulWcz1aS6F4be4ja'),
(21, 'janish', '$2y$10$9algdit/X7sDVcB1RSlMD.iNK4Bhe1is1G6K8aHMXO/CcgsgkgVnm');

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
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(100) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `admin_id`, `name`) VALUES
(1, 1, 'h'),
(2, 1, 'dell'),
(3, 1, 'asus'),
(4, 1, 'lenovo'),
(5, 1, 'hp'),
(6, 1, 'iphone'),
(7, 1, 'samsung'),
(8, 1, 'vivo'),
(9, 1, 'realme'),
(10, 1, 'mi'),
(11, 1, 'boat'),
(12, 1, 'apple'),
(13, 1, 'fasttrack'),
(14, 1, 'noise');

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
(2, 'Sarthi Joshi', 'sa9725979797@gmail.com', ' hjkhbjn nhbk'),
(3, 'SARTHI NITIN JOSHI', 'sa9725979797@gmail.com', 'tathya'),
(4, 'HARSHI', 'sa9725979797@gmail.com', 'dhtsngzdbd');

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
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `timestap` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`order_id`, `product_id`, `total_price`, `user_id`, `quantity`, `timestap`) VALUES
(28, 2, 50000.00, 1, 1, '2024-03-08 09:00:52'),
(29, 2, 50000.00, 1, 1, '2024-03-08 11:18:18'),
(30, 1, 160000.00, 1, 4, '2024-03-09 05:20:34'),
(31, 7, 45000.00, 1, 1, '2024-03-09 05:20:34'),
(32, 2, 50000.00, 1, 1, '2024-03-10 11:34:57'),
(33, 4, 120000.00, 1, 1, '2024-03-10 11:34:57'),
(34, 1, 40000.00, 1, 1, '2024-03-12 05:15:44'),
(35, 14, 13999.00, 1, 1, '2024-03-12 09:59:56'),
(36, 2, 50000.00, 1, 1, '2024-03-15 15:36:14'),
(37, 1, 40000.00, 1, 1, '2024-03-22 18:48:05'),
(38, 25, 1334423.00, 1, 1, '2024-03-22 18:48:05'),
(39, 2, 50000.00, 1, 1, '2024-03-29 05:06:19'),
(40, 4, 360000.00, 1, 1, '2024-03-29 13:36:52'),
(41, 4, 360000.00, 1, 3, '2024-03-29 13:36:52'),
(42, 7, 45000.00, 1, 1, '2024-04-08 16:10:19'),
(43, 11, 7999.00, 1, 1, '2024-05-01 09:23:26'),
(44, 2, 50000.00, 1, 1, '2024-05-01 09:23:26'),
(45, 6, 98000.00, 1, 1, '2024-05-01 09:23:26'),
(46, 26, 40000.00, 1, 4, '2024-05-11 05:54:27'),
(47, 26, 40000.00, 1, 4, '2024-05-11 06:13:20'),
(48, 2, 50000.00, 1, 1, '2024-10-18 16:38:08'),
(49, 2, 50000.00, 1, 1, '2024-11-13 11:24:23');

-- --------------------------------------------------------

--
-- Stand-in structure for view `order_view`
-- (See below for the actual view)
--
CREATE TABLE `order_view` (
`order_id` int(11)
,`product_id` int(11)
,`user_id` int(11)
,`quantity` int(11)
,`total_price` decimal(10,2)
,`address_1` varchar(100)
,`firstname` varchar(20)
,`lastname` varchar(20)
,`phone` int(10)
,`email` varchar(50)
,`images` text
,`id` int(11)
);

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
  `brand_id` int(11) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `admin_id`, `name`, `description`, `quantity`, `price`, `sale_price`, `type`, `status`, `category_id`, `brand_id`, `images`, `created_at`) VALUES
(1, 1, 'laptop 1', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 193, 40000.00, 38000.00, 'laptop ', 'published', 10, 1, 'product_images/product-1.jpg', '2024-02-08 06:12:15'),
(2, 1, 'laptop-2', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 191, 50000.00, 45000.00, 'laptop', 'published', 10, 2, 'product_images/product-2.avif', '2024-02-08 06:14:42'),
(3, 1, 'laptop 3', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 80000.00, 75000.00, 'laptop', 'published', 10, 3, 'product_images\\product-3.jpg', '2024-02-08 09:37:38'),
(4, 1, 'laptop4', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 195, 120000.00, 100000.00, 'laptop', 'published', 10, 4, 'product_images\\product-4.jpg', '2024-02-08 09:39:39'),
(5, 1, 'laptop5', 'A laptop, sometimes called a notebook computer by manufacturers, is a battery- or AC-powered personal computer (PC) smaller than a briefcase. A laptop can be easily transported and used in temporary spaces such as on airplanes, in libraries, temporary offices and at meetings.', 200, 29000.00, 26000.00, 'laptop', 'published', 10, 5, 'product_images\\product-5.webp', '2024-02-08 09:40:09'),
(6, 1, 'watch1', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 199, 98000.00, 90000.00, 'watch', 'published', 12, 11, 'product_images\\product-11.png\r\n', '2024-02-08 09:47:53'),
(7, 1, 'watch2', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 198, 45000.00, 40000.00, 'watch', 'published', 12, 12, 'product_images\\product-12.jpg\r\n', '2024-02-08 09:49:15'),
(8, 1, 'watch3\r\n', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 32000.00, 28000.00, 'watch', 'published', 12, 13, 'product_images\\product-13.jpg\r\n', '2024-02-08 09:49:56'),
(9, 1, 'watch4', 'A smartwatch is a watch that offers extra functionality and connectivity on top of the features offered by standard watches.', 200, 12000.00, 8000.00, 'watch', 'published', 12, 14, 'product_images\\product-14.png\r\n', '2024-02-08 09:56:21'),
(10, 1, 'phone 1', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 0, 4999.00, 3000.00, 'phone', 'published', 11, 6, 'product_images\\product-6.jpg', '2024-02-08 09:57:44'),
(11, 1, 'phone 2', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 199, 7999.00, 6000.00, 'phone', 'published', 11, 7, 'product_images\\product-7.jpg', '2024-02-08 09:58:14'),
(12, 1, 'phone 3', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 15999.00, 12000.00, 'phone', 'published', 11, 8, 'product_images\\product-8.webp', '2024-02-08 09:59:07'),
(13, 1, 'phone 4', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 200, 30999.00, 25000.00, 'phone', 'published', 11, 9, 'product_images\\product-9.webp', '2024-02-08 10:01:09'),
(14, 1, 'phone 5', 'a device that uses either a system of wires along which electrical signals are sent or a system of radio signals to make it possible for you to speak to someone in another place who has a similar device: Just then, his phone rang.', 199, 13999.00, 10000.00, 'phone', 'published', 11, 10, 'product_images\\product-10.webp', '2024-02-08 10:01:36'),
(25, 1, 's24', '0', 332, 1334423.00, 32422.00, 'phone', 'published', 11, 10, 'product_images/iphone-card-40-iphone15hero-202309_FMT_WHH.jpeg', '2024-03-08 09:14:38'),
(26, 1, 'Sarthi Joshi+', '0', 0, 10000.00, 12344.00, 'laptop', 'published', 10, 0, 'product_images/1.jpg', '2024-05-11 05:53:45'),
(27, 1, 'mohit', '0', 200, 70000.00, 50000.00, 'laptop', 'published', 10, 0, 'product_images/We extend our heartfelt gratitude to you and your family for joining us at the 2024 Diwali Sneh Milan. Your presence made the event a memorable and joyous celebration of Diwali filled with laughte (1).jpg', '2024-11-17 10:36:18'),
(28, 1, 'mohit', '0', 200, 70000.00, 50000.00, 'laptop', 'published', 11, 0, 'product_images/We extend our heartfelt gratitude to you and your family for joining us at the 2024 Diwali Sneh Milan. Your presence made the event a memorable and joyous celebration of Diwali filled with laughte (1).jpg', '2024-11-17 10:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `gender` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `username`, `password`, `email`, `DOB`, `gender`) VALUES
(1, '', '12345', 'sa9725979797@gmail.com', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `wishlist_products_view`
-- (See below for the actual view)
--
CREATE TABLE `wishlist_products_view` (
`wishlist_id` int(11)
,`wishlist_product_id` int(11)
,`quantity` int(11)
,`user_id` int(11)
,`product_id` int(11)
,`images` text
,`name` varchar(255)
,`sale_price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `wish_list`
--

CREATE TABLE `wish_list` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wish_list`
--

INSERT INTO `wish_list` (`id`, `product_id`, `user_id`, `quantity`) VALUES
(3, 1, 1, 1),
(4, 1, 1, 1);

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
-- Structure for view `order_view`
--
DROP TABLE IF EXISTS `order_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `order_view`  AS SELECT DISTINCT `oi`.`order_id` AS `order_id`, `oi`.`product_id` AS `product_id`, `oi`.`user_id` AS `user_id`, `oi`.`quantity` AS `quantity`, `oi`.`total_price` AS `total_price`, `a`.`address_1` AS `address_1`, `a`.`firstname` AS `firstname`, `a`.`lastname` AS `lastname`, `a`.`phone` AS `phone`, `a`.`email` AS `email`, `p`.`images` AS `images`, `p`.`id` AS `id` FROM ((`order_info` `oi` join `address` `a` on(`oi`.`user_id` = `a`.`user_id`)) join `products` `p` on(`oi`.`product_id` = `p`.`id`)) GROUP BY `oi`.`order_id` ;

-- --------------------------------------------------------

--
-- Structure for view `wishlist_products_view`
--
DROP TABLE IF EXISTS `wishlist_products_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `wishlist_products_view`  AS SELECT `wl`.`id` AS `wishlist_id`, `wl`.`product_id` AS `wishlist_product_id`, `wl`.`quantity` AS `quantity`, `wl`.`user_id` AS `user_id`, `p`.`id` AS `product_id`, `p`.`images` AS `images`, `p`.`name` AS `name`, `p`.`sale_price` AS `sale_price` FROM (`wish_list` `wl` join `products` `p` on(`wl`.`product_id` = `p`.`id`)) ;

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
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `forien key` (`user_id`);

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
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`),
  ADD KEY `admin_id` (`admin_id`),
  ADD KEY `brand_id` (`brand_id`);

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
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `electronics_categories`
--
ALTER TABLE `electronics_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wish_list`
--
ALTER TABLE `wish_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `about_us`
--
ALTER TABLE `about_us`
  ADD CONSTRAINT `about_us_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `electronics_categories`
--
ALTER TABLE `electronics_categories`
  ADD CONSTRAINT `electronics_categories_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order_info` (`order_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `electronics_categories` (`id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`admin_id`);

--
-- Constraints for table `wish_list`
--
ALTER TABLE `wish_list`
  ADD CONSTRAINT `wish_list_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_info` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
