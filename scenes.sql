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
-- Table structure for table `scenes`
--

DROP TABLE IF EXISTS `scenes`;
CREATE TABLE IF NOT EXISTS `scenes` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scenes`
--

INSERT INTO `scenes` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Outside building', 'You are standing at the end of a road before a small brick building.  A small stream flows out of the building and down a gully to the south.  A road runs up a small hill to the west.', NULL, NULL),
(2, 'End of road', 'You are at the end of a road at the top of a small hill. You can see a small building in the valley to the east.', NULL, NULL),
(3, 'Inside building', 'You are inside a building, a well house for a large spring.', NULL, NULL),
(4, 'Valley beside a stream', 'You are in a valley in the forest beside a stream tumbling along a rocky bed.  The stream is flowing to the south.', NULL, NULL),
(5, 'Slit in rock', 'At your feet all the water of the stream splashes into a two-inch slit in the rock.  To the south, the streambed is bare rock.', NULL, NULL),
(6, 'Outside grate', 'You are in a 25-foot depression floored with bare dirt. Set into the dirt is a strong steel grate mounted in concrete.  A dry streambed leads into the depression from the north.', NULL, NULL),
(7, 'Above locked grate', 'The grate is locked and you don\'t have any keys.', NULL, NULL),
(8, 'Beneath grate', 'You are in a small chamber beneath a 3x3 steel grate to the surface.  A low crawl over cobbles leads inward to the west.', NULL, NULL),
(9, 'Cobble crawl', 'You are crawling over cobbles in a low east/west passage. There is a dim light to the east.', NULL, NULL),
(10, 'Darkness', 'It is now pitch dark.  If you proceed you will likely fall into a pit.', NULL, NULL),
(11, 'Pit', 'You fell into a pit and broke every bone in your body!', NULL, NULL),
(12, 'Debris room', 'You are in a debris room filled with stuff washed in from the surface.  A low wide passage with cobbles becomes plugged with mud and debris here, but an extremely narrow canyon leads upward a', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
