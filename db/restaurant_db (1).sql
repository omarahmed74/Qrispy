-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2026 at 09:47 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`item_id`, `item_name`, `price`, `image`) VALUES
(1, 'Bread Greek Salad', 8.99, 'item_1.jpg'),
(2, 'Lobster Roll Grilled', 18.50, 'item_8.jpg'),
(3, 'Italian Pasta Si', 12.00, 'item_2.jpg'),
(4, 'Crispy Circle Potato', 6.50, 'item_3.jpg'),
(5, 'Mexican Ole Pizza', 14.00, 'item_5.jpg'),
(6, 'Fudg Chewy Chicken', 11.25, 'item_6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` varchar(45) NOT NULL,
  `quantity` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `price`, `status`, `quantity`, `user_id`, `item_id`, `created_at`) VALUES
(1, 'order1', 19, 'pending', 1, 2, 2, '2026-05-09 13:21:19'),
(2, 'order1', 7, 'pending', 1, 2, 4, '2026-05-09 13:21:19'),
(3, 'order1', 11, 'pending', 1, 2, 6, '2026-05-09 13:21:19'),
(13, 'order2', 14, 'pending', 1, 2, 5, '2026-05-10 17:46:51'),
(14, 'order2', 11, 'pending', 1, 2, 6, '2026-05-10 17:46:51'),
(15, 'order3', 7, 'pending', 1, 2, 4, '2026-05-10 19:29:01'),
(16, 'order4', 6, 'pending', 1, 2, 4, '2026-05-10 19:29:20'),
(17, 'order5', 6, 'pending', 1, 2, 4, '2026-05-10 19:29:44'),
(18, 'order6', 6, 'pending', 1, 2, 4, '2026-05-10 19:30:30'),
(19, 'order7', 17, 'pending', 1, 2, 2, '2026-05-10 19:30:48'),
(20, 'order8', 17, 'pending', 1, 2, 2, '2026-05-10 19:31:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user',
  `is_elite` tinyint(1) DEFAULT 0,
  `subscribed_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `is_elite`, `subscribed_at`) VALUES
(1, 'omar', 'omar.ahmed.khalaf2006@gmail.com', '$2y$10$Eeo1OugNLNpckjeTM4GTB.b2ZzOFwy14iP.qnXOGG/yq5MgMZn7Ma', 'admin', 0, NULL),
(2, 'sasa', 'sasa@gmail.com', '$2y$10$QL6Q7dV0XnEhwVjKrUODb.v4dRB2iSSIOpi6iRgqoQeniCX3Dvv1K', 'user', 1, '2026-05-10 18:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_menu_item` (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_menu_item` FOREIGN KEY (`item_id`) REFERENCES `menu` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
