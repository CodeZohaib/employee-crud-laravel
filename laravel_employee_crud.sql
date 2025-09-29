-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2025 at 01:52 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_employee_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_no` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pic_path` varchar(225) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `full_name`, `gender`, `address`, `email`, `position`, `phone_no`, `profile_pic_path`, `created_at`, `updated_at`) VALUES
(6, 'Hamza Khan', 'Male', 'Nowshera', 'khamza@gmail.com', 'Manager', '+92312-7656789', 'profile_pictures/m086RTv9lYWyxpoitiSMFuGdAqJ0FNoUUzLvzCbB.jpg', '2025-09-23 10:32:06', '2025-09-26 07:43:56'),
(7, 'Faizan Khan', 'Male', 'Nowshera Cannt', 'faizan900@gmail.com', 'Sales', '+92300-9897675', 'profile_pictures/M2PazihcDAfgWEd7l5z5wdJw3TIQmJ7ej9gxrdnl.jpg', '2025-09-23 10:32:06', '2025-09-26 07:43:56'),
(8, 'Naseem Shah', 'Male', 'Peshawer Main Bazer', 'naseem987@gma.com', 'Developer', '+92314-8765346', 'profile_pictures/Po1RbZkshD7S0xtwqKI74kgbXMAAPZwXkC7nofrp.jpg', '2025-09-23 10:32:06', '2025-09-26 07:43:56'),
(9, 'Shahzaib Ali', 'Male', 'Karachi gullshan iqabl', 'shahzaib900@gma.com', 'Designer', '+92315-8767876', 'profile_pictures/HBo0pbv8U7nxHXKdl0ZqZmdufTvnYQWFCBvgx6p9.jpg', '2025-09-23 10:32:06', '2025-09-26 07:43:56'),
(10, 'Radia Khan', 'Female', 'Mardan Main Chok', 'rida@gmail.com', 'Manager', '+92316-9876756', 'profile_pictures/UqR10YvY3QW5UbzNayTtpfTQXmKiS9iAyNJFvBMa.jpg', '2025-09-23 10:32:06', '2025-09-26 07:43:56'),
(53, 'Noor Khan', 'Male', 'Dheri Katti Khel Hakeemabad Nowshera', 'noor@gmail.com', 'Developer', '+92300-9898787', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(54, 'Haya Noor', 'Female', '21-E, Fazl-e-Haq Rd.Blue Area', 'haya_noor@gmail.com', 'Manager', '+92315-9876545', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(55, 'Ali Khan', 'Male', 'House #45, Street #3, Lahore', 'alikhan1@gmail.com', 'Manager', '+92313-1234567', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(56, 'Ayesha Malik', 'Female', 'House #12, Street #6, Karachi', 'ayeshamalik2@gmail.com', 'Developer', '+92304-9876543', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(57, 'Hassan Raza', 'Male', 'House #88, Street #9, Islamabad', 'hassanraza3@gmail.com', 'Designer', '+92312-7654321', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(58, 'Sana Bibi', 'Female', 'House #33, Street #5, Multan', 'sanabibi4@gmail.com', 'Sales', '+92301-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(62, 'Laiba Raza', 'Female', 'House #18, Street #2, Faisalabad', 'laibaraza8@gmail.com', 'Sales', '+92302-4567891', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(63, 'Usman Khan', 'Male', 'House #39, Street #11, Hyderabad', 'usmankhan9@gmail.com', 'Designer', '+92308-9873214', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(64, 'Iqra Malik', 'Female', 'House #72, Street #8, Sialkot', 'iqramalik10@gmail.com', 'Other', '+92311-4325678', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(65, 'Shahbaz Ali', 'Male', 'House #14, Street #5, Karachi', 'shahbazali1@gmail.com', 'Manager', '+92313-2345678', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(66, 'Hina Raza', 'Female', 'House #28, Street #11, Lahore', 'hinaraza2@gmail.com', 'Developer', '+92304-6789123', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(67, 'Ahmed Khan', 'Male', 'House #65, Street #9, Islamabad', 'ahmedkhan3@gmail.com', 'Designer', '+92312-7894561', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(68, 'Nimra Malik', 'Female', 'House #33, Street #6, Multan', 'nimramalik4@gmail.com', 'Sales', '+92301-4567893', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(69, 'Usman Raza', 'Male', 'House #80, Street #3, Quetta', 'usmanraza5@gmail.com', 'Other', '+92309-9876123', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(70, 'Sadia Shah', 'Female', 'House #51, Street #10, Rawalpindi', 'sadiashah6@gmail.com', 'Developer', '+92315-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(71, 'Bilal Butt', 'Male', 'House #12, Street #8, Peshawar', 'bilalbutt7@gmail.com', 'Manager', '+92307-8912345', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(72, 'Laiba Ali', 'Female', 'House #40, Street #4, Faisalabad', 'laibaali8@gmail.com', 'Sales', '+92302-7654321', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(73, 'Zain Ali', 'Male', 'House #11, Street #9, Lahore', 'zainali@gmail.com', 'Developer', '+92321-4567890', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(74, 'Sara Khan', 'Female', 'House #22, Street #5, Karachi', 'sarakhan@gmail.com', 'Manager', '+92314-9876541', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(75, 'Omar Malik', 'Male', 'House #7, Street #12, Islamabad', 'omarmalik@gmail.com', 'Designer', '+92310-1234567', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(76, 'Nida Shah', 'Female', 'House #19, Street #3, Rawalpindi', 'nidashah@gmail.com', 'Sales', '+92303-9876542', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(77, 'Hamza Raza', 'Male', 'House #31, Street #7, Quetta', 'hamzraza@gmail.com', 'Other', '+92309-4567892', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(78, 'Maya Butt', 'Female', 'House #14, Street #8, Faisalabad', 'mayabutt@gmail.com', 'Developer', '+92315-6789124', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(79, 'Ayaan Khan', 'Male', 'House #27, Street #6, Hyderabad', 'ayaankhan@gmail.com', 'Manager', '+92308-9871235', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(80, 'Fatima Noor', 'Female', 'House #33, Street #11, Multan', 'fatimanoor@gmail.com', 'Sales', '+92301-2345678', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(81, 'Shayan Ali', 'Male', 'House #50, Street #2, Peshawar', 'shayanali@gmail.com', 'Designer', '+92307-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(82, 'Hira Malik', 'Female', 'House #66, Street #4, Lahore', 'hiramalik@gmail.com', 'Developer', '+92304-4567890', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(83, 'Tariq Raza', 'Male', 'House #12, Street #9, Islamabad', 'tariqraza@gmail.com', 'Other', '+92312-9876543', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(84, 'Sania Shah', 'Female', 'House #28, Street #10, Karachi', 'saniashah@gmail.com', 'Manager', '+92315-2345671', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(85, 'Rehan Ali', 'Male', 'House #40, Street #1, Rawalpindi', 'rehanaali@gmail.com', 'Designer', '+92309-8765432', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(86, 'Mahnoor Malik', 'Female', 'House #18, Street #6, Faisalabad', 'mahnoormalik@gmail.com', 'Sales', '+92302-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(87, 'Adil Butt', 'Male', 'House #25, Street #8, Quetta', 'adilbutt@gmail.com', 'Developer', '+92309-5678912', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(88, 'Zoya Khan', 'Female', 'House #31, Street #3, Multan', 'zoyakhan@gmail.com', 'Manager', '+92301-6789123', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(89, 'Shahmeer Malik', 'Male', 'House #44, Street #5, Peshawar', 'shahmeermalik@gmail.com', 'Other', '+92307-7891234', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(90, 'Amna Raza', 'Female', 'House #21, Street #7, Lahore', 'amnaraza@gmail.com', 'Developer', '+92304-9876543', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(91, 'Fahad Ali', 'Male', 'House #15, Street #2, Islamabad', 'fahadali@gmail.com', 'Manager', '+92312-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(92, 'Laiba Noor', 'Female', 'House #39, Street #11, Karachi', 'laibanoor@gmail.com', 'Sales', '+92315-5678910', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(93, 'Emaan Iqbal', 'Female', 'House #9, Street #14, Karachi', 'emaan.iqbal@gmail.com', 'Developer', '+92311-2345670', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(94, 'Zubair Khan', 'Male', 'House #17, Street #8, Lahore', 'zubair.khan@gmail.com', 'Manager', '+92321-9876540', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(95, 'Areeba Malik', 'Female', 'House #26, Street #3, Islamabad', 'areeba.malik@gmail.com', 'Sales', '+92314-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(96, 'Faris Ali', 'Male', 'House #38, Street #6, Rawalpindi', 'faris.ali@gmail.com', 'Designer', '+92308-5678901', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(97, 'Maha Shah', 'Female', 'House #45, Street #11, Quetta', 'maha.shah@gmail.com', 'Other', '+92301-7890123', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(98, 'Ayaan Raza', 'Male', 'House #52, Street #5, Multan', 'ayaan.raza@gmail.com', 'Developer', '+92310-2345678', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(99, 'Sadaf Butt', 'Female', 'House #61, Street #7, Faisalabad', 'sadaf.butt@gmail.com', 'Manager', '+92302-8765432', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(100, 'Imran Khan', 'Male', 'House #14, Street #10, Hyderabad', 'imran.khan@gmail.com', 'Designer', '+92309-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(101, 'Hira Ali', 'Female', 'House #23, Street #2, Lahore', 'hira.ali@gmail.com', 'Sales', '+92304-6789012', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(102, 'Shahveer Malik', 'Male', 'House #30, Street #9, Karachi', 'shahveer.malik@gmail.com', 'Other', '+92312-2345678', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(103, 'Anum Noor', 'Female', 'House #18, Street #1, Islamabad', 'anum.noor@gmail.com', 'Developer', '+92315-9876543', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(104, 'Sarmad Ali', 'Male', 'House #7, Street #4, Rawalpindi', 'sarmad.ali@gmail.com', 'Manager', '+92308-7654321', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(105, 'Mehak Raza', 'Female', 'House #12, Street #6, Quetta', 'mehak.raza@gmail.com', 'Sales', '+92301-4567890', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(106, 'Adnan Butt', 'Male', 'House #20, Street #3, Multan', 'adnan.butt@gmail.com', 'Designer', '+92309-5678902', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(107, 'Zoya Ali', 'Female', 'House #33, Street #8, Faisalabad', 'zoya.ali@gmail.com', 'Other', '+92302-3456789', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(108, 'Haider Khan', 'Male', 'House #41, Street #11, Hyderabad', 'haider.khan@gmail.com', 'Developer', '+92308-2345670', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(109, 'Iqra Shah', 'Female', 'House #50, Street #5, Lahore', 'iqra.shah@gmail.com', 'Manager', '+92304-9876541', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(110, 'Ali Raza', 'Male', 'House #60, Street #7, Karachi', 'ali.raza@gmail.com', 'Sales', '+92312-5678901', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(111, 'Areej Malik', 'Female', 'House #70, Street #2, Islamabad', 'areej.malik@gmail.com', 'Designer', '+92315-3456782', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(112, 'Danish Ali', 'Male', 'House #80, Street #9, Rawalpindi', 'danish.ali@gmail.com', 'Other', '+92309-6789012', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(113, 'Mahnoor Khan', 'Female', 'House #91, Street #4, Quetta', 'mahnoor.khan@gmail.com', 'Developer', '+92301-7890124', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(164, 'Ayaan Shah', 'Male', 'House #5, Street #1, Karachi', 'ayaan.shah1@gmail.com', 'Developer', '+92301-1000001', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(165, 'Zara Malik', 'Female', 'House #12, Street #3, Lahore', 'zara.malik1@gmail.com', 'Manager', '+92312-1000002', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(166, 'Hamza Ali', 'Male', 'House #7, Street #8, Islamabad', 'hamza.ali1@gmail.com', 'Designer', '+92308-1000003', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(167, 'Sania Raza', 'Female', 'House #20, Street #2, Rawalpindi', 'sania.raza1@gmail.com', 'Sales', '+92315-1000004', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(168, 'Omer Khan', 'Male', 'House #33, Street #7, Quetta', 'omer.khan1@gmail.com', 'Other', '+92309-1000005', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(169, 'Maya Butt', 'Female', 'House #14, Street #6, Multan', 'maya.butt1@gmail.com', 'Developer', '+92301-1000006', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(170, 'Shahveer Malik', 'Male', 'House #25, Street #5, Faisalabad', 'shahveer.malik1@gmail.com', 'Manager', '+92302-1000007', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(171, 'Hira Ali', 'Female', 'House #36, Street #9, Hyderabad', 'hira.ali1@gmail.com', 'Designer', '+92308-1000008', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(172, 'Zubair Raza', 'Male', 'House #48, Street #4, Lahore', 'zubair.raza1@gmail.com', 'Sales', '+92312-1000009', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(173, 'Anum Shah', 'Female', 'House #50, Street #11, Karachi', 'anum.shah1@gmail.com', 'Other', '+92315-1000010', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(174, 'Rehan Malik', 'Male', 'House #18, Street #1, Islamabad', 'rehan.malik1@gmail.com', 'Developer', '+92310-1000011', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(175, 'Sadia Ali', 'Female', 'House #23, Street #6, Rawalpindi', 'sadia.ali1@gmail.com', 'Manager', '+92304-1000012', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(176, 'Faris Khan', 'Male', 'House #32, Street #8, Quetta', 'faris.khan1@gmail.com', 'Designer', '+92309-1000013', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(177, 'Iqra Raza', 'Female', 'House #41, Street #3, Multan', 'iqra.raza1@gmail.com', 'Sales', '+92301-1000014', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(178, 'Adil Butt', 'Male', 'House #53, Street #2, Faisalabad', 'adil.butt1@gmail.com', 'Other', '+92302-1000015', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(179, 'Mehak Shah', 'Female', 'House #61, Street #7, Hyderabad', 'mehak.shah1@gmail.com', 'Developer', '+92308-1000016', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(180, 'Tariq Ali', 'Male', 'House #72, Street #5, Lahore', 'tariq.ali1@gmail.com', 'Manager', '+92312-1000017', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(181, 'Fatima Malik', 'Female', 'House #85, Street #9, Karachi', 'fatima.malik1@gmail.com', 'Designer', '+92315-1000018', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(182, 'Shahbaz Khan', 'Male', 'House #91, Street #4, Islamabad', 'shahbaz.khan1@gmail.com', 'Sales', '+92310-1000019', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(183, 'Mahnoor Ali', 'Female', 'House #6, Street #11, Rawalpindi', 'mahnoor.ali1@gmail.com', 'Other', '+92304-1000020', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(184, 'Ehsan Raza', 'Male', 'House #13, Street #3, Quetta', 'ehsan.raza1@gmail.com', 'Developer', '+92309-1000021', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(185, 'Laiba Shah', 'Female', 'House #21, Street #6, Multan', 'laiba.shah1@gmail.com', 'Manager', '+92301-1000022', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(186, 'Usman Malik', 'Male', 'House #34, Street #8, Faisalabad', 'usman.malik1@gmail.com', 'Designer', '+92302-1000023', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(187, 'Hina Ali', 'Female', 'House #44, Street #2, Hyderabad', 'hina.ali1@gmail.com', 'Sales', '+92308-1000024', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(188, 'Bilal Khan', 'Male', 'House #52, Street #9, Lahore', 'bilal.khan1@gmail.com', 'Other', '+92312-1000025', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(189, 'Sadia Malik', 'Female', 'House #60, Street #1, Karachi', 'sadia.malik1@gmail.com', 'Developer', '+92315-1000026', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(190, 'Ayaan Raza', 'Male', 'House #70, Street #5, Islamabad', 'ayaan.raza1@gmail.com', 'Manager', '+92310-1000027', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(191, 'Mahnoor Butt', 'Female', 'House #82, Street #7, Rawalpindi', 'mahnoor.butt1@gmail.com', 'Designer', '+92304-1000028', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(192, 'Danish Ali', 'Male', 'House #90, Street #4, Quetta', 'danish.ali1@gmail.com', 'Sales', '+92309-1000029', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(193, 'Hira Raza', 'Female', 'House #8, Street #10, Multan', 'hira.raza1@gmail.com', 'Other', '+92301-1000030', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(194, 'Shahmeer Malik', 'Male', 'House #15, Street #2, Faisalabad', 'shahmeer.malik1@gmail.com', 'Developer', '+92302-1000031', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(195, 'Areeba Khan', 'Female', 'House #24, Street #6, Hyderabad', 'areeba.khan1@gmail.com', 'Manager', '+92308-1000032', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(196, 'Imran Raza', 'Male', 'House #35, Street #8, Lahore', 'imran.raza1@gmail.com', 'Designer', '+92312-1000033', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(197, 'Zoya Shah', 'Female', 'House #45, Street #3, Karachi', 'zoya.shah1@gmail.com', 'Sales', '+92315-1000034', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(198, 'Hamza Malik', 'Male', 'House #55, Street #7, Islamabad', 'hamza.malik1@gmail.com', 'Other', '+92310-1000035', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(199, 'Anum Ali', 'Female', 'House #65, Street #9, Rawalpindi', 'anum.ali1@gmail.com', 'Developer', '+92304-1000036', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(200, 'Shayan Raza', 'Male', 'House #73, Street #4, Quetta', 'shayan.raza1@gmail.com', 'Manager', '+92309-1000037', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(201, 'Hina Malik', 'Female', 'House #80, Street #2, Multan', 'hina.malik1@gmail.com', 'Designer', '+92301-1000038', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(202, 'Fahad Khan', 'Male', 'House #88, Street #6, Faisalabad', 'fahad.khan1@gmail.com', 'Sales', '+92302-1000039', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(203, 'Mahnoor Raza', 'Female', 'House #95, Street #1, Hyderabad', 'mahnoor.raza1@gmail.com', 'Other', '+92308-1000040', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(204, 'Rehan Ali', 'Male', 'House #5, Street #11, Lahore', 'rehan.ali1@gmail.com', 'Developer', '+92312-1000041', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(205, 'Zoya Raza', 'Female', 'House #12, Street #5, Karachi', 'zoya.raza1@gmail.com', 'Manager', '+92315-1000042', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(206, 'Ayaan Butt', 'Male', 'House #21, Street #8, Islamabad', 'ayaan.butt1@gmail.com', 'Designer', '+92310-1000043', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(207, 'Sadia Shah', 'Female', 'House #32, Street #3, Rawalpindi', 'sadia.shah1@gmail.com', 'Sales', '+92304-1000044', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(208, 'Bilal Raza', 'Male', 'House #40, Street #6, Quetta', 'bilal.raza1@gmail.com', 'Other', '+92309-1000045', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(209, 'Hira Khan', 'Female', 'House #50, Street #9, Multan', 'hira.khan1@gmail.com', 'Developer', '+92301-1000046', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(210, 'Shahbaz Ali', 'Male', 'House #60, Street #2, Faisalabad', 'shahbaz.ali1@gmail.com', 'Manager', '+92302-1000047', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(211, 'Mahnoor Butt', 'Female', 'House #70, Street #5, Hyderabad', 'mahnoor.butt2@gmail.com', 'Designer', '+92308-1000048', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(212, 'Danish Khan', 'Male', 'House #80, Street #7, Lahore', 'danish.khan1@gmail.com', 'Sales', '+92312-1000049', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(213, 'Areeba Raza', 'Female', 'House #90, Street #4, Karachi', 'areeba.raza1@gmail.com', 'Other', '+92315-1000050', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(214, 'Aariz Khan', 'Male', 'House #1, Street #1, Karachi', 'aariz.khan1@gmail.com', 'Developer', '+92301-2000001', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(215, 'Zunaira Malik', 'Female', 'House #2, Street #2, Lahore', 'zunaira.malik1@gmail.com', 'Manager', '+92312-2000002', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(216, 'Shahroz Ali', 'Male', 'House #3, Street #3, Islamabad', 'shahroz.ali1@gmail.com', 'Designer', '+92308-2000003', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(217, 'Amna Raza', 'Female', 'House #4, Street #4, Rawalpindi', 'amna.raza1@gmail.com', 'Sales', '+92315-2000004', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(218, 'Fahad Butt', 'Male', 'House #5, Street #5, Quetta', 'fahad.butt1@gmail.com', 'Other', '+92309-2000005', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(219, 'Hira Shah', 'Female', 'House #6, Street #6, Multan', 'hira.shah1@gmail.com', 'Developer', '+92301-2000006', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(220, 'Usman Ali', 'Male', 'House #7, Street #7, Faisalabad', 'usman.ali1@gmail.com', 'Manager', '+92302-2000007', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(221, 'Laiba Raza', 'Female', 'House #8, Street #8, Hyderabad', 'laiba.raza1@gmail.com', 'Designer', '+92308-2000008', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(222, 'Bilal Malik', 'Male', 'House #9, Street #9, Lahore', 'bilal.malik1@gmail.com', 'Sales', '+92312-2000009', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(223, 'Anum Shah', 'Female', 'House #10, Street #10, Karachi', 'anum.shah2@gmail.com', 'Other', '+92315-2000010', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(224, 'Rehan Khan', 'Male', 'House #11, Street #11, Islamabad', 'rehan.khan1@gmail.com', 'Developer', '+92310-2000011', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(225, 'Sadia Malik', 'Female', 'House #12, Street #12, Rawalpindi', 'sadia.malik2@gmail.com', 'Manager', '+92304-2000012', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(226, 'Faris Ali', 'Male', 'House #13, Street #13, Quetta', 'faris.ali1@gmail.com', 'Designer', '+92309-2000013', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(227, 'Iqra Shah', 'Female', 'House #14, Street #14, Multan', 'iqra.shah1@gmail.com', 'Sales', '+92301-2000014', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(228, 'Adil Raza', 'Male', 'House #15, Street #15, Faisalabad', 'adil.raza1@gmail.com', 'Other', '+92302-2000015', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(229, 'Mehak Ali', 'Female', 'House #16, Street #16, Hyderabad', 'mehak.ali1@gmail.com', 'Developer', '+92308-2000016', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(230, 'Tariq Butt', 'Male', 'House #17, Street #17, Lahore', 'tariq.butt1@gmail.com', 'Manager', '+92312-2000017', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(231, 'Fatima Shah', 'Female', 'House #18, Street #18, Karachi', 'fatima.shah1@gmail.com', 'Designer', '+92315-2000018', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(232, 'Shahbaz Ali', 'Male', 'House #19, Street #19, Islamabad', 'shahbaz.ali2@gmail.com', 'Sales', '+92310-2000019', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(233, 'Mahnoor Malik', 'Female', 'House #20, Street #20, Rawalpindi', 'mahnoor.malik2@gmail.com', 'Other', '+92304-2000020', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(234, 'Ehsan Shah', 'Male', 'House #21, Street #21, Quetta', 'ehsan.shah1@gmail.com', 'Developer', '+92309-2000021', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(235, 'Laiba Butt', 'Female', 'House #22, Street #22, Multan', 'laiba.butt1@gmail.com', 'Manager', '+92301-2000022', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(236, 'Usman Shah', 'Male', 'House #23, Street #23, Faisalabad', 'usman.shah1@gmail.com', 'Designer', '+92302-2000023', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(237, 'Hina Raza', 'Female', 'House #24, Street #24, Hyderabad', 'hina.raza1@gmail.com', 'Sales', '+92308-2000024', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(241, 'Mahnoor Butt', 'Female', 'House #28, Street #28, Rawalpindi', 'mahnoor.butt3@gmail.com', 'Designer', '+92304-2000028', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(242, 'Danish Ali', 'Male', 'House #29, Street #29, Quetta', 'danish.ali2@gmail.com', 'Sales', '+92309-2000029', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(243, 'Hira Shah', 'Female', 'House #30, Street #30, Multan', 'hira.shah2@gmail.com', 'Other', '+92301-2000030', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(244, 'Shahmeer Ali', 'Male', 'House #31, Street #31, Faisalabad', 'shahmeer.ali2@gmail.com', 'Developer', '+92302-2000031', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(245, 'Areeba Malik', 'Female', 'House #32, Street #32, Hyderabad', 'areeba.malik2@gmail.com', 'Manager', '+92308-2000032', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(248, 'Hamza Ali', 'Male', 'House #35, Street #35, Islamabad', 'hamza.ali2@gmail.com', 'Other', '+92310-2000035', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(249, 'Anum Malik', 'Female', 'House #36, Street #36, Rawalpindi', 'anum.malik2@gmail.com', 'Developer', '+92304-2000036', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(250, 'Shayan Shah', 'Male', 'House #37, Street #37, Quetta', 'shayan.shah2@gmail.com', 'Manager', '+92309-2000037', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(256, 'Ayaan Butt G', 'Male', 'House #43, Street #43, Islamabad', 'ayaan.butt2@gmail.com', 'Designer', '+92310-2000043', 'profile_pictures/T5dNBcIVTsv1wmZsVyMcyLkKOZJlfGjsJ155E9Nd.jpg', '2025-09-23 10:32:06', '2025-09-29 01:40:27'),
(257, 'Sadia Shah', 'Female', 'House #44, Street #44, Rawalpindi', 'sadia.shah2@gmail.com', 'Sales', '+92304-2000044', 'profile_pictures/DmXfcuRaDF07oTexy20DkzXEplsldX15jc1U28C8.jpg', '2025-09-23 10:32:06', '2025-09-28 01:43:39'),
(258, 'Bilal Raza', 'Male', 'House #45, Street #45, Quetta', 'bilal.raza2@gmail.com', 'Other', '+92309-2000045', 'profile_pictures/profile.JPG', '2025-09-23 10:32:06', '2025-09-29 05:53:00'),
(259, 'Ayaan Butt', 'Male', 'House #43, Street #43, Islamabad', 'ayaan.butt@gmail.com', 'Designer', '+92310-2000043', 'profile_pictures/1759152801_5051_Stylish-girl-Dp-image-225x300.jpg', '2025-09-23 10:32:06', '2025-09-29 08:33:21'),
(265, 'Zohaib Ali', 'Male', 'dheri katti khel hakeemabad nowserha', 'zohaib@gmail.com', 'Designer', '+92313-9987654', 'profile_pictures/1759152678_1780_michael-henry-5OyGRn_r9Y4-unsplash.jpg', '2025-09-29 01:47:25', '2025-09-29 08:31:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2025_09_21_123208_create_employees_table', 1),
(9, '2025_09_23_112034_rename_column_employee', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('QjD2vHVasNZM3e6oqZNamBMdOupEgVU8iTUzy6Ij', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/140.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMlVOSVpWaW1ENTZJajk5VnJuYTFHZUdQUHRHRGJtbU44N2xISjIxUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvbGFyYXZlbC1lbXBsb3llZS1jcnVkL2VtcGxveWVlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1759153896);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=268;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
