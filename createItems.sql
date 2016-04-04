-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2016 at 03:47 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxonomy`
--

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_type`, `item_name`, `item_weight`, `wpn_hands`, `mel_oal`, `mel_pob`, `rng_projectile`, `rng_range`, `armr_material`, `shld_shape`, `shld_height`, `shld_width`, `created_at`, `updated_at`) VALUES
(1, 'melee', 'Pike', 6.00, 2, 80.00, 45.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-03-29 07:41:47'),
(2, 'melee', 'Falchion', 3.00, 1, 31.00, 11.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'ranged', 'Longbow', 2.30, 2, NULL, NULL, 'arrow', 600.00, NULL, NULL, NULL, NULL, NULL, '2016-03-29 07:34:38'),
(4, 'melee', 'Hatchet', 2.00, 1, 24.00, 20.00, NULL, NULL, NULL, NULL, NULL, NULL, '2016-03-29 07:31:40', '2016-03-29 07:31:40'),
(5, 'armor', 'Gambeson', 5.50, NULL, NULL, NULL, NULL, NULL, 'padded cloth', NULL, NULL, NULL, '2016-03-29 07:35:38', '2016-03-29 07:35:38'),
(6, 'armor', 'Hauberk', 8.50, NULL, NULL, NULL, NULL, NULL, 'maille', NULL, NULL, NULL, '2016-03-29 07:35:59', '2016-03-29 07:35:59'),
(7, 'armor', 'Brigandine', 10.00, NULL, NULL, NULL, NULL, NULL, 'plates', NULL, NULL, NULL, '2016-03-29 07:36:16', '2016-03-29 07:36:16'),
(8, 'armor', 'Cuir Bouilli', 7.00, NULL, NULL, NULL, NULL, NULL, 'other', NULL, NULL, NULL, '2016-03-29 07:36:38', '2016-03-29 07:36:38'),
(9, 'shield', 'Buckler', 1.50, NULL, NULL, NULL, NULL, NULL, NULL, 'circular', 10.00, 10.00, '2016-03-29 07:37:29', '2016-03-29 07:37:29'),
(10, 'shield', 'Heater Shield', 3.00, NULL, NULL, NULL, NULL, NULL, NULL, 'other', 36.00, 27.00, '2016-03-29 07:38:01', '2016-03-29 07:38:01'),
(11, 'shield', 'Pavise', 6.00, NULL, NULL, NULL, NULL, NULL, NULL, 'rectangular', 56.00, 30.00, '2016-03-29 07:38:25', '2016-03-29 07:38:25'),
(12, 'ranged', 'Arquebus', 3.50, 2, NULL, NULL, 'other', 100.00, NULL, NULL, NULL, NULL, '2016-03-29 07:38:56', '2016-03-29 07:38:56'),
(13, 'ranged', 'Crossbow', 5.00, 2, NULL, NULL, 'quarrel', 200.00, NULL, NULL, NULL, NULL, '2016-03-29 07:39:14', '2016-03-29 07:39:14'),
(14, 'melee', 'Lightsaber', 2.00, 1, 40.00, 0.00, NULL, NULL, NULL, NULL, NULL, NULL, '2016-03-29 07:39:41', '2016-03-29 07:40:59'),
(15, 'shield', 'Targe', 3.00, NULL, NULL, NULL, NULL, NULL, NULL, 'circular', 25.00, 25.00, '2016-03-29 07:43:26', '2016-03-29 07:43:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
