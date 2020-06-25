-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 23, 2020 at 10:20 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `objek_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `objek_id` int(11) NOT NULL,
  `merchandise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `stok` int(50) DEFAULT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `nama`, `harga`, `stok`, `deskripsi`) VALUES
(1, 'Gantungan kunci', '30000', 100, 'Gantungan kunci, didesain unik, ideal untuk souvenir, material : kayu');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `objek`
--

CREATE TABLE `objek` (
  `id_objek` int(200) NOT NULL,
  `nama_objek` varchar(50) DEFAULT NULL,
  `Alamat` text,
  `deskripsi` text,
  `jam_operasional` text,
  `harga_tiket` varchar(250) NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objek`
--

INSERT INTO `objek` (`id_objek`, `nama_objek`, `Alamat`, `deskripsi`, `jam_operasional`, `harga_tiket`, `image`) VALUES
(9876548, 'Museum History Of Java', 'Jl. Parangtritis Km 5.5 ( Pyramid Cafe) Tarudan Bangunharjo Sewon Bantul Regency Special Region of Yogyakarta Tarudan, Tarudan, Bangunharjo, Sewon, Bantul Regency, Special Region of Yogyakarta 55188', 'Museum History Of Java ini disebut – sebut sebagai salah satu museum terbaik di Yogyakarta, bahkan Menteri Kebudayaan Thailand Vira Rojpojchanarat dalam kunjungannya ke museum ini beberapa waktu yang lalu mengungkapkan kekagumannya terhadap museum ini. Vira Rojpojchanarat mengaku terpesona dengan bangunan serta koleksi yang dimiliki oleh Museum History Of Java ini.Sebelum memasuki area dalam dari museum ini, sobat semua akan menjumpai bangunan unik dari museum ini yang menjadi salah satu spot foto menarik di tempat ini. Ya, Museum History Of Java memang dikenal memiliki arsitektur bangunan yang cukup unik, bangunan dari museum ini berbentuk piramida yang menyerupai pyramid mesir. Banyak pengunjung yang berfoto di depan bangunan tersebut sehingga bangunan tersebut menjadi salah satu spot foto favorit di tempat ini.Selanjutnya ketika masuk ke dalam museum ini sobat semua akan ditemani oleh story teller (local guide) melihat film yang bercerita tentang sejarah terbentuknya Pulau Jawa 2,5 juta tahun yang lalu, selanjutnya sobat semua juga akan ditemani melihat berbagai macam koleksi benda – benda kuno atau benda – benda peninggalan bersejarah serta papan informasi yang akan mengedukasi sobat semua tentang sejarah Pulau Jawa serta hal – hal lainnya yang berhubungan dengan Pulau Jawa seperti kerajaan – kerajaan yang pernah berdiri di Pulau Jawa.Selain koleksi benda – benda kuno sobat semua juga akan merasakan sentuhan teknologi modern seperti Augmented Reality, Pertunjukan 4D, hingga tempat swafoto 3D. Ya, teknologi modern tersebut memang menjadi senjata utama dari museum ini dalam menarik wisatawan untuk berkunjung ke tempat ini, dengan diterapkannya teknologi modern diharapkan nantinya muncul anggapan ditengah masyarakat bahwa berkunjung ke museum merupakan suatu kegiatan yang menyenangkan.Dari sekian banyak teknologi modern yang dimiliki oleh museum ini, Augmented Reality menjadi yang paling diminati oleh para wisatawan. Cara kerja dari Augmented Reality ini cukup mudah, sobat semua bisa menginstall aplikasi Augmented Reality Museum ini di Play Store selanjutnya silahkan mengarahkan handphone sobat semua pada gambar yang ada di dinding museum maka secara otomatis gambar yang tadinya hanya terlihat diam biasa saja akan muncul di handphone sobat semua dalam bentuk 3D dilengkapi dengan audio dan efek sehingga terlihat seperti nyata.Selain Augmented Reality sobat semua juga bisa berswafoto di tempat swafoto 3D yang didalamnya terdapat berbagai macam spot foto menarik. Jika ditotal secara keseluruhan Museum History Of Java ini memiliki 5 ruangan yaitu Ruang Teater, Ruang Koleksi, Ruang Pavilion, Ruang Pertunjukan 4D, Ruang Diorama, dan yang terakhir ruang swafoto 3D.', '9.00 - 18.00', '30000', '1592884344_20181210063733.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@coba.com', '$2y$10$yOInb0aXNCYcQdBNNVm0R.vn5SsClboCNGk44oz6F0AzaUbXx2hZK', 'admin', NULL, '2019-12-16 14:10:03', '2019-12-16 14:10:03'),
(2, 'auliya', 'aul@gmail.com', '$2y$10$gE56Cj1kgbAvSVL0oo.PmO5/57C8irqaUIsgS5xJKr7UaTBndAAxa', 'user', NULL, '2019-12-16 14:14:15', '2019-12-16 14:14:15'),
(3, 'admin', 'admin@123.com', '$2y$10$1gjW0XbsqNppEFL9ESDMGeOoVBuN5.Wm.SNwgxgYDz3meQoTaov6W', 'user', NULL, '2019-12-16 17:07:29', '2019-12-16 17:07:29'),
(4, 'admin', 'admin@yogyatrip.com', '$2y$10$eZzqhbSds5wk6jf832oDBOMm/N3r8WkfzOwRsOBIqN.QPX.LX4zFy', 'admin', NULL, '2020-06-21 02:00:45', '2020-06-21 02:00:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD KEY `objek_id` (`objek_id`),
  ADD KEY `merchandise_id` (`merchandise_id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `objek`
--
ALTER TABLE `objek`
  ADD PRIMARY KEY (`id_objek`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `objek`
--
ALTER TABLE `objek`
  MODIFY `id_objek` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9876549;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`objek_id`) REFERENCES `objek` (`id_objek`),
  ADD CONSTRAINT `image_ibfk_2` FOREIGN KEY (`merchandise_id`) REFERENCES `merchandise` (`id`);
