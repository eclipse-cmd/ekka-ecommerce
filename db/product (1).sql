-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2021 at 11:16 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekka`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_description` varchar(255) NOT NULL,
  `img_path` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`img_path`)),
  `price` varchar(128) NOT NULL,
  `count` varchar(128) NOT NULL,
  `weight` varchar(128) NOT NULL,
  `dimension` varchar(128) NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `categories` varchar(128) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `short_description`, `long_description`, `img_path`, `price`, `count`, `weight`, `dimension`, `rating`, `categories`, `created_at`, `updated_at`) VALUES
(1, 'Jumbo Carry Bag', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"2_1.jpg\", \"2_2.jpg\"]', '40', '3', '1550 g', '35 × 30 × 7 cm', 2, NULL, '2021-10-21 07:41:23', '2021-10-21 07:41:23'),
(2, 'unisex cotton neck hoodie', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1990.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"6_1.jpg\", \"6_2.jpg\"]', '97', '2', '1000 g', '35 × 30 × 7 cm', 5, NULL, '2021-10-20 17:59:12', '2021-10-20 17:59:12'),
(3, 'Full Sleeve Shirt', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"7_1.jpg\", \"7_2.jpg\"]', '22', '2', '1000 g', '35 × 30 × 7 cm', 2, NULL, '2021-10-21 07:30:33', '2021-10-21 07:30:33'),
(4, 'Cute Baby Toy\'s', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"1_1.jpg\", \"1_2.jpg\"]', '30', '1', '1000 g', '35 × 30 × 7 cm', 4, NULL, '2021-10-21 07:30:33', '2021-10-21 07:30:33'),
(5, 'Digital Smart Watches', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"8_1.jpg\", \"8_2.jpg\"]', '100', '2', '30 g', '35 × 30 × 7 cm', 4, NULL, '2021-10-21 07:48:09', '2021-10-21 07:48:09'),
(6, 'Leather Belt for Men', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"5_1.jpg\", \"5_2.jpg\"]', '50', '3', '100 g', '35 × 30 × 7 cm', 5, NULL, '2021-10-21 07:48:09', '2021-10-21 07:48:09'),
(7, 'Canvas Cowboy Hat', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"4_1.jpg\", \"4_2.jpg\"]', '10', '1', '10 g', '35 × 30 × 7 cm', 4, NULL, '2021-10-21 07:48:09', '2021-10-21 07:48:09'),
(8, 'Designer Leather Purses', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dutmmy text.', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has su', '[\"3_1.jpg\", \"3_2.jpg\"]', '700', '5', '1500 g', '35 × 30 × 7 cm', 5, NULL, '2021-10-21 07:48:09', '2021-10-21 07:48:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
