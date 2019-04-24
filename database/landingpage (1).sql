-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 12:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

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
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(30) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `gambar`, `deskripsi`) VALUES
(2, '/imagelayouts/about-us.jpg', '<p>Ini gambar pertama test.</p>'),
(3, '/imagelayouts/C5Ka6mMXAAE00hI.jpg', '<p><a href=\"https://github.com/\"><i><strong>asdasdasdasdasdas</strong></i></a></p>'),
(4, '/imagelayouts/about us-min.jpg', '<p>okokok</p><p><a href=\"https://shop.buttons.com/v/vspfiles/photos/PinkBulkButtons-2.jpg\">&lt;img src=\"https://shop.buttons.com/v/vspfiles/photos/PinkBulkButtons-2.jpg</a>\"/ &gt;<br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `fototestimoni`
--

CREATE TABLE `fototestimoni` (
  `id` int(10) NOT NULL,
  `fototestimoni` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

--
-- Dumping data for table `postproduk`
--

INSERT INTO `postproduk` (`id`, `title`, `slug`, `foto`, `deskripsi`, `oleh`) VALUES
(1, 0x496e6920506f73742050726f64756b, 'ini-post-produk', '/fotoproduk/about-us.jpg', '<p>Ini Deskripsi Produk</p>', 'Daryadi Ramadhani');

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
-- Table structure for table `themes_color`
--

CREATE TABLE `themes_color` (
  `id` int(5) NOT NULL,
  `warna` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `themes_color`
--

INSERT INTO `themes_color` (`id`, `warna`) VALUES
(1, 'black');

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
(5, 'Ini judul website', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FHQG0NR7XPQ\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '/image/about us-min.jpg', '<p>Ini keterangan Untuk DIstributor</p>', '6289606867586', 'berlcosmetics@gmail.com', 'https://www.facebook.com/profile.php?id=100027830594845', 'oke', 'oke', '6289606867586', 'okod', NULL);

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
(5, 'Daryadi Ramadhani', 'daryadiramadhan@gmail.com', '12345', '$2y$10$bp5wa6JfV9c72li9V45KZuUVQBRFpSph1bYIs4QLAh80VRninK.wC', 'BZB4UEJvQ46rcZi6sUo2c7Kqgomeo7UUJcLn2GuWKF9wLuDz7Znyo2yqxlz7', '2019-03-04 21:46:51', '2019-03-04 21:46:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `themes_color`
--
ALTER TABLE `themes_color`
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
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fototestimoni`
--
ALTER TABLE `fototestimoni`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statussection`
--
ALTER TABLE `statussection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `themes_color`
--
ALTER TABLE `themes_color`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
