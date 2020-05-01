-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 14, 2020 at 12:27 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boardgame_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `scene_id` bigint(20) UNSIGNED NOT NULL,
  `next_scene` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `options_scene_id_foreign` (`scene_id`),
  KEY `options_next_scene_foreign` (`next_scene`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `description`, `scene_id`, `next_scene`, `created_at`, `updated_at`) VALUES
(3, 'WEST', 1, 2, NULL, NULL),
(4, 'UP', 1, 2, NULL, NULL),
(5, 'NORTH', 1, 3, NULL, NULL),
(6, 'IN', 1, 3, NULL, NULL),
(7, 'SOUTH', 1, 4, NULL, NULL),
(8, 'DOWN', 1, 4, NULL, NULL),
(9, 'EAST', 2, 1, NULL, NULL),
(10, 'DOWN', 2, 1, NULL, NULL),
(11, 'SOUTH', 3, 1, NULL, NULL),
(12, 'OUT', 3, 1, NULL, NULL),
(13, 'NORTH', 4, 1, NULL, NULL),
(14, 'UP', 4, 1, NULL, NULL),
(15, 'SOUTH', 4, 5, NULL, NULL),
(16, 'DOWN', 4, 5, NULL, NULL),
(17, 'NORTH', 5, 4, NULL, NULL),
(18, 'UP', 5, 4, NULL, NULL),
(19, 'SOUTH', 5, 6, NULL, NULL),
(20, 'DOWN', 5, 6, NULL, NULL),
(21, 'NORTH', 6, 5, NULL, NULL),
(22, 'UP', 6, 5, NULL, NULL),
(23, 'SOUTH', 6, 8, NULL, NULL),
(24, 'DOWN', 6, 7, NULL, NULL),
(25, 'FORCED', 7, 6, NULL, NULL),
(26, 'UP', 8, 6, NULL, NULL),
(27, 'OUT', 8, 6, NULL, NULL),
(28, 'IN', 8, 9, NULL, NULL),
(29, 'WEST', 8, 9, NULL, NULL),
(30, 'EAST', 9, 8, NULL, NULL),
(31, 'WEST', 9, 12, NULL, NULL),
(32, 'IN', 9, 10, NULL, NULL),
(33, 'EAST', 10, 9, NULL, NULL),
(34, 'OUT', 10, 11, NULL, NULL),
(35, 'NORTH', 10, 11, NULL, NULL),
(36, 'SOUTH', 10, 11, NULL, NULL),
(37, 'WEST', 10, 11, NULL, NULL),
(38, 'UP', 10, 11, NULL, NULL),
(39, 'DOWN', 10, 11, NULL, NULL),
(41, 'END OF THE GAME!\r\nHEAD BACK TO THE START!', 11, 1, NULL, NULL),
(42, 'EAST', 12, 9, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_next_scene_foreign` FOREIGN KEY (`next_scene`) REFERENCES `scenes` (`id`),
  ADD CONSTRAINT `options_scene_id_foreign` FOREIGN KEY (`scene_id`) REFERENCES `scenes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
