-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2017 at 12:33 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbwebphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `breakfasts`
--

CREATE TABLE `breakfasts` (
  `ID` int(11) NOT NULL,
  `Bname` varchar(256) NOT NULL,
  `Bcalories` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breakfasts`
--

INSERT INTO `breakfasts` (`ID`, `Bname`, `Bcalories`, `created_at`, `updated_at`) VALUES
(1, 'ข้าวต้มหมู', 120, '2017-05-22 00:43:37', '2017-05-22 08:06:39'),
(2, 'ข้าวผัดหมูใส่ไข่', 557, '2017-05-22 19:32:42', '2017-05-22 19:32:42'),
(3, 'ข้าวเหนียวหมูทอด', 440, '2017-05-22 19:32:42', '2017-05-22 19:32:42'),
(4, 'ข้าวผัดกุ้งใส่ไข่', 595, '2017-05-22 19:33:00', '2017-05-22 19:33:30'),
(5, 'ข้าวไข่เจียว', 448, '2017-05-22 20:58:33', '2017-05-22 20:58:33'),
(6, 'ส้มโอ', 100, '2017-05-22 13:59:20', '2017-05-22 13:59:20'),
(7, 'กล้วยหอม', 120, '2017-05-22 21:29:52', '2017-05-22 21:29:52'),
(8, 'apple', 120, '2017-05-22 22:27:04', '2017-05-22 22:27:04'),
(9, 'ข้าวโพด', 150, '2017-05-23 10:39:06', '2017-05-23 10:39:06'),
(10, 'กล้วยหอม', 120, '2017-05-24 02:42:31', '2017-05-24 02:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `charts`
--

CREATE TABLE `charts` (
  `ID` int(11) NOT NULL,
  `InfoCharts` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `charts`
--

INSERT INTO `charts` (`ID`, `InfoCharts`, `created_at`, `updated_at`) VALUES
(1, 'กินแบบนี้ผอมแน่นอน', '2017-05-01 05:14:12', '2017-05-22 18:31:34'),
(2, 'เริ่มแย่แล้วนะ', '2017-04-30 20:12:09', '2017-05-22 18:31:34'),
(3, 'เริ่มแย่แล้วนะ', '2017-05-02 07:08:05', '2017-05-22 18:32:48'),
(4, 'กินแบบนี้ผอมแน่นอน', '2017-05-22 18:32:48', '2017-05-22 18:32:48'),
(5, 'กินแบบนี้ไม่ได้แล้วนะ', '2017-05-22 18:33:26', '2017-05-22 18:33:26'),
(6, 'กินแบบนี้ไม่ได้แล้วนะ', '2017-05-22 18:33:26', '2017-05-22 18:33:26'),
(7, 'กินแบบนี้อ้วนแน่นอ', '2017-05-22 18:33:53', '2017-05-22 18:33:53'),
(8, 'เริ่มแย่แล้วนะ', '2017-05-22 18:33:53', '2017-05-22 18:33:53'),
(9, 'กินแบบนี้อ้วนแน่นอน', '2017-05-22 18:34:14', '2017-05-22 18:34:14'),
(10, 'กินแบบนี้อ้วนแน่นอน', '2017-05-22 18:34:14', '2017-05-22 18:34:14');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`ID`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'TT', 'Gigie@gmail.com', 'ff', '2017-05-24 02:04:22', '2017-05-24 02:04:22'),
(2, 'moo', 'moo@gmail.com', 'คือดี', '2017-05-24 02:05:03', '2017-05-24 02:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `dbtests`
--

CREATE TABLE `dbtests` (
  `ID` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `totals` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dbtests`
--

INSERT INTO `dbtests` (`ID`, `name`, `totals`, `created_at`, `updated_at`) VALUES
(1, 'vary good', 6, '2017-04-30 20:14:19', '2017-05-23 15:35:33'),
(2, 'ดีมาก', 4, '2017-05-23 15:23:51', '2017-05-23 15:35:33'),
(3, 'แย่มาก', 4, '2017-05-23 15:23:51', '2017-05-23 15:35:33'),
(4, 'ปานกลาง', 4, '2017-05-23 15:24:14', '2017-05-23 15:35:33'),
(5, 'ดีมาก', 6, '2017-05-07 19:05:00', '2017-05-23 15:35:33'),
(6, 'แย่มาก', 4, '2017-05-01 17:00:00', '2017-05-23 15:35:33'),
(7, 'ดีมาก', 4, '2017-05-08 17:00:00', '2017-05-23 15:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `dinners`
--

CREATE TABLE `dinners` (
  `Id` int(11) NOT NULL,
  `Dname` varchar(256) NOT NULL,
  `Dcalories` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dinners`
--

INSERT INTO `dinners` (`Id`, `Dname`, `Dcalories`, `created_at`, `updated_at`) VALUES
(1, 'คะน้าหมูกรอบ', 420, '2017-05-22 01:03:54', '2017-05-22 08:06:02'),
(2, 'ข้าวพะแนงเนื้อ', 457, '2017-05-22 19:34:51', '2017-05-22 19:34:51'),
(3, 'สุกี้แห้งทะเล', 375, '2017-05-22 19:34:51', '2017-05-22 19:34:51'),
(4, 'หมูกระทะ', 375, '2017-05-22 19:35:30', '2017-05-22 19:35:30'),
(5, 'บะหมี่น้ำต้มยำหมู', 300, '2017-05-22 19:35:30', '2017-05-22 19:35:30'),
(6, 'ข้าวเหนียวมะม่วง', 500, '2017-05-22 22:07:16', '2017-05-22 22:07:16'),
(7, 'ส้ม', 120, '2017-05-22 22:45:28', '2017-05-22 22:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `lunches`
--

CREATE TABLE `lunches` (
  `id` int(11) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `Lcalories` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lunches`
--

INSERT INTO `lunches` (`id`, `Lname`, `Lcalories`, `created_at`, `updated_at`) VALUES
(2, 'ข้าวกระเพราไก่ไข่ดาว', 630, '2017-05-22 00:21:43', '2017-05-22 00:21:43'),
(3, 'ข้าวหมูทอดกระเทียม', 525, '2017-05-22 00:24:55', '2017-05-22 00:24:55'),
(4, 'ข้าวผัดแหนม', 612, '2017-05-22 19:30:53', '2017-05-22 19:30:53'),
(5, 'ข้าวพะแนงเนื้อ', 457, '2017-05-22 19:30:53', '2017-05-22 19:30:53'),
(6, 'ข้าวราดแกงเขียวหวาน', 483, '2017-05-22 19:31:17', '2017-05-22 19:31:17'),
(7, 'กล้วยหอม', 120, '2017-05-22 21:35:55', '2017-05-22 21:35:55'),
(8, 'ข้าวเหนียวมะม่วง', 500, '2017-05-22 21:37:03', '2017-05-22 21:37:03'),
(9, 'apple', 120, '2017-05-22 22:34:31', '2017-05-22 22:34:31'),
(10, 'apple', 100, '2017-05-22 22:41:09', '2017-05-22 22:41:09'),
(11, 'apple', 100, '2017-05-22 22:42:58', '2017-05-22 22:42:58'),
(12, 'apple', 120, '2017-05-23 10:14:34', '2017-05-23 10:14:34'),
(13, 'apple', 90, '2017-05-23 10:16:08', '2017-05-23 10:16:08'),
(14, 'มาม่า', 250, '2017-05-24 00:28:14', '2017-05-24 00:28:14'),
(15, 'มาม่า', 250, '2017-05-24 00:28:15', '2017-05-24 00:28:15'),
(16, 'ลูกชิ้น', 100, '2017-05-24 00:32:18', '2017-05-24 00:32:18'),
(17, 'แตงโม', 90, '2017-05-24 00:33:39', '2017-05-24 00:33:39'),
(18, 'มะม่วง', 90, '2017-05-24 00:45:28', '2017-05-24 00:45:28'),
(19, 'ไข่เจียว', 200, '2017-05-24 01:05:54', '2017-05-24 01:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(256) NOT NULL,
  `Password` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gigie', 'Gigie@gmail.com', '$2y$10$sa3HtaVx6BeuRKLuiQ.fnuUaFaU.CJzcefHYlCnMUcN5Z78a6bQb6', 'RRCN0Tsuuu2YCBMfWSdti0SgkVrd7RA7MyYIJsumNk4u9ApYLjSj34fvdwfs', '2017-05-21 08:00:17', '2017-05-21 08:00:17'),
(2, 'paopao', 'paopao@ubu.com', '$2y$10$n/TlXVOZyqom2cfH5pGpHebh8X0Qtuo.TCkP6nSZfaDhrUzaxSG3i', '00VI1Dq0wv1tLPn0nQWFExrDlKON7QFShpwlWZtp71qnKbPh50i7eDRLIBuy', '2017-05-22 22:24:50', '2017-05-22 22:24:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breakfasts`
--
ALTER TABLE `breakfasts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `charts`
--
ALTER TABLE `charts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dbtests`
--
ALTER TABLE `dbtests`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dinners`
--
ALTER TABLE `dinners`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lunches`
--
ALTER TABLE `lunches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breakfasts`
--
ALTER TABLE `breakfasts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `charts`
--
ALTER TABLE `charts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dbtests`
--
ALTER TABLE `dbtests`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dinners`
--
ALTER TABLE `dinners`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `lunches`
--
ALTER TABLE `lunches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
