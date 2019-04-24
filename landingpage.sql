-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2019 at 11:28 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `landingpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `fototestimoni`
--

CREATE TABLE `fototestimoni` (
  `id` int(10) NOT NULL,
  `fototestimoni` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fototestimoni`
--

INSERT INTO `fototestimoni` (`id`, `fototestimoni`) VALUES
(5, '/fototestimoni/thumb2.png');

-- --------------------------------------------------------

--
-- Table structure for table `instalasi`
--

CREATE TABLE `instalasi` (
  `id` int(10) NOT NULL,
  `status` enum('Aktif','Tidak Aktif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instalasi`
--

INSERT INTO `instalasi` (`id`, `status`) VALUES
(1, 'Aktif');

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
-- Table structure for table `postproduk`
--

CREATE TABLE `postproduk` (
  `id` int(11) NOT NULL,
  `title` varbinary(150) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL,
  `oleh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `statussection`
--

CREATE TABLE `statussection` (
  `id` int(11) NOT NULL,
  `nama_section` varchar(50) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `oleh` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statussection`
--

INSERT INTO `statussection` (`id`, `nama_section`, `status`, `oleh`) VALUES
(1, 'section1', 'Aktif', 'Daryadi Ramadhani'),
(2, 'section2', 'Aktif', 'Daryadi Ramadhani'),
(3, 'section3', 'Aktif', 'Daryadi Ramadhani'),
(4, 'section4', 'Aktif', 'Daryadi Ramadhani'),
(5, 'section5', 'Aktif', 'Daryadi Ramadhani'),
(6, 'section6', 'Aktif', 'Daryadi Ramadhani'),
(7, 'section7', 'Aktif', 'Daryadi Ramadhani');

-- --------------------------------------------------------

--
-- Table structure for table `themes_edit`
--

CREATE TABLE `themes_edit` (
  `idmember` int(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `embedvideo` varchar(250) DEFAULT NULL,
  `fotolanding` varchar(150) DEFAULT NULL,
  `desc_landing` text,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `tw` varchar(100) DEFAULT NULL,
  `yt` varchar(100) DEFAULT NULL,
  `wa` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `footer` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes_edit`
--

INSERT INTO `themes_edit` (`idmember`, `title`, `embedvideo`, `fotolanding`, `desc_landing`, `phone`, `email`, `fb`, `tw`, `yt`, `wa`, `ig`, `footer`) VALUES
(5, 'Selamat Datang Di Landing Page Baru Anda', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/7tLoQx5i-4U\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '/image/berl-face-serum1.jpg', '<p><strong>Serum pencerah wajah</strong> dengan kandungan partikel bahan aktif WOW Capsule, nutrisi, vitamin, dan UV Protection untuk membantu mencerahkan sekaligus merawat dan melindungi kulit wajah anda. Teskturnya yg ringan membuat serum ini mudah menyerap ke dalam lapisan kulit terdalam, sehingga proses perawatan akan lebih cepat. <strong>B ERL LIGHTENING FACIAL SERUM</strong> tidak menimbulkan efek samping sehingga aman untuk semua jenis kulit wajah, pria maupun wanita, juga aman digunakan oleh ibu hamil dan menyusui.</p><p><strong>NETTO : 25 ml dan POM : NA18161900598</strong></p>', '6289606867586', 'berlcosmetics@gmail.com', 'https://www.facebook.com/profile.php?id=100027830594845', 'oke', 'oke', '6289606867586', 'okod', 'Agen Berl Cosmetic Terpercaya');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pw` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pw`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Daryadi Ramadhani', 'daryadiramadhan@gmail.com', '12345', '$2y$10$bp5wa6JfV9c72li9V45KZuUVQBRFpSph1bYIs4QLAh80VRninK.wC', NULL, '2019-03-04 21:46:51', '2019-03-04 21:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fototestimoni`
--
ALTER TABLE `fototestimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instalasi`
--
ALTER TABLE `instalasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postproduk`
--
ALTER TABLE `postproduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statussection`
--
ALTER TABLE `statussection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes_edit`
--
ALTER TABLE `themes_edit`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fototestimoni`
--
ALTER TABLE `fototestimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `instalasi`
--
ALTER TABLE `instalasi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `postproduk`
--
ALTER TABLE `postproduk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `statussection`
--
ALTER TABLE `statussection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `themes_edit`
--
ALTER TABLE `themes_edit`
  MODIFY `idmember` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
