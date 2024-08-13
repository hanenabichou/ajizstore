-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 13, 2024 at 04:10 PM
-- Server version: 8.2.0
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `ajizstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `description` text,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `category`) VALUES
(1, 'Dell XPS 13', 999.99, 'Compact and powerful laptop with a 13.4-inch InfinityEdge display.', 'laptop'),
(2, 'Apple MacBook Air', 1199.99, 'Lightweight laptop with the M1 chip and Retina display.', 'laptop'),
(3, 'HP Spectre x360', 1299.99, '2-in-1 convertible laptop with a 360-degree hinge and a 13.3-inch OLED display.', 'laptop'),
(4, 'Lenovo ThinkPad X1 Carbon', 1399.99, 'Durable business laptop with a 14-inch display and Intel Core i7 processor.', 'laptop'),
(5, 'Asus ROG Zephyrus G14', 1599.99, 'Gaming laptop with a Ryzen 9 processor and a 14-inch Full HD display.', 'laptop'),
(6, 'Acer Predator Helios 300', 1799.99, 'High-performance gaming laptop with a 15.6-inch display and NVIDIA GeForce RTX 3060.', 'laptop'),
(7, 'Microsoft Surface Pro 9', 999.99, 'Versatile 2-in-1 tablet with a detachable keyboard and 11th Gen Intel Core processors.', 'tablet'),
(8, 'Samsung Galaxy Tab S9', 799.99, 'High-resolution Android tablet with a Super AMOLED display and S Pen.', 'tablet'),
(9, 'Apple iPad Pro', 1099.99, 'Powerful tablet with a 12.9-inch Liquid Retina display and M1 chip.', 'tablet'),
(10, 'Lenovo IdeaPad Flex 5', 849.99, 'Flexible 2-in-1 laptop with a 14-inch touchscreen and AMD Ryzen 7 processor.', 'laptop'),
(11, 'Dell Alienware Aurora R15', 2399.99, 'High-end gaming desktop with Intel Core i9 and NVIDIA GeForce RTX 4080.', 'desktop'),
(12, 'HP Omen 45L', 2299.99, 'Gaming desktop with a sleek design, Intel Core i7, and NVIDIA GeForce RTX 3070.', 'desktop'),
(13, 'Apple iMac 24-inch', 1499.99, 'All-in-one desktop with a 24-inch 4.5K Retina display and M1 chip.', 'desktop'),
(14, 'ASUS ROG Strix Scar 17', 1899.99, 'High-performance gaming laptop with a 17.3-inch display and NVIDIA GeForce RTX 3070.', 'laptop'),
(15, 'Razer Blade 15', 1899.99, 'Slim gaming laptop with a 15.6-inch Full HD display and Intel Core i7 processor.', 'laptop'),
(16, 'Corsair K95 RGB Platinum', 199.99, 'Mechanical gaming keyboard with customizable RGB lighting and dedicated macro keys.', 'accessory'),
(17, 'Logitech MX Master 3S', 99.99, 'High-performance wireless mouse with customizable buttons and ergonomic design.', 'accessory'),
(18, 'Dell UltraSharp U2720Q', 629.99, '27-inch 4K monitor with USB-C connectivity and factory-calibrated color accuracy.', 'monitor'),
(19, 'BenQ ZOWIE XL2546K', 399.99, '24.5-inch esports monitor with 240Hz refresh rate and 1ms response time.', 'monitor'),
(20, 'Samsung Odyssey G7', 699.99, '32-inch curved gaming monitor with QHD resolution and 240Hz refresh rate.', 'monitor'),
(21, 'Western Digital My Passport 2TB', 89.99, 'Portable external hard drive with 2TB storage capacity and USB 3.0 connectivity.', 'storage'),
(22, 'Samsung 970 EVO Plus 1TB', 149.99, 'High-performance NVMe SSD with 1TB storage capacity and up to 3500 MB/s read speed.', 'storage');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(30) NOT NULL,
  `name` varchar(60) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`) VALUES
(1, 'admin@test.com', '123456', 'Ahmed Lazher', ''),
(2, 'zefzef@zeffe', 'zefzef@zeffe', 'ekjzfhkzej', '4848'),
(3, 'ejezgnre@zefezf', 'ejezgnre@zefezf', 'zelkfkzelkgjf', '35315');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products` ADD FULLTEXT KEY `name` (`name`,`description`);
COMMIT;
