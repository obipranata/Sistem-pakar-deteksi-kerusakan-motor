-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 09:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak-wahyu`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kasus_lama`
--

CREATE TABLE `detail_kasus_lama` (
  `kd_detail_kasus_lama` int(9) NOT NULL,
  `kd_kasus_lama` int(9) NOT NULL,
  `id_gejala` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_kasus_lama`
--

INSERT INTO `detail_kasus_lama` (`kd_detail_kasus_lama`, `kd_kasus_lama`, `id_gejala`) VALUES
(1, 5, 'G05'),
(2, 5, 'G06'),
(3, 5, 'G07'),
(8, 6, 'G14'),
(9, 6, 'G17'),
(11, 6, 'G22'),
(12, 6, 'G23'),
(13, 7, 'G01'),
(14, 7, 'G02'),
(15, 8, 'G40'),
(16, 8, 'G41'),
(17, 9, 'G09'),
(18, 9, 'G10'),
(19, 9, 'G11'),
(20, 10, 'G13'),
(21, 11, 'G03'),
(22, 11, 'G04'),
(23, 12, 'G14'),
(24, 12, 'G17'),
(25, 13, 'G18'),
(26, 13, 'G19'),
(27, 14, 'G14'),
(28, 14, 'G28'),
(29, 15, 'G14'),
(30, 15, 'G15'),
(31, 16, 'G18'),
(32, 16, 'G20'),
(33, 17, 'G24'),
(34, 17, 'G25'),
(35, 17, 'G26'),
(36, 17, 'G27'),
(37, 18, 'G30'),
(38, 18, 'G31'),
(39, 19, 'G12'),
(40, 20, 'G14'),
(41, 20, 'G17'),
(42, 21, 'G14'),
(43, 21, 'G17'),
(45, 21, 'G23'),
(46, 22, 'G18'),
(47, 22, 'G20'),
(48, 23, 'G16'),
(49, 24, 'G03'),
(50, 24, 'G04'),
(51, 25, 'G08'),
(52, 26, 'G08'),
(53, 27, 'G13'),
(54, 28, 'G12'),
(55, 29, 'G05'),
(56, 29, 'G07'),
(57, 30, 'G16'),
(58, 31, 'G18'),
(59, 31, 'G19'),
(60, 32, 'G01'),
(61, 32, 'G02'),
(62, 33, 'G02'),
(63, 34, 'G04'),
(64, 34, 'G05'),
(65, 34, 'G06'),
(66, 35, 'G29'),
(67, 35, 'G30'),
(68, 35, 'G31'),
(69, 36, 'G43'),
(70, 36, 'G44'),
(71, 37, 'G35'),
(72, 37, 'G36'),
(73, 37, 'G37'),
(74, 37, 'G38'),
(75, 37, 'G39'),
(76, 38, 'G18'),
(77, 38, 'G19'),
(78, 39, 'G18'),
(79, 39, 'G21'),
(80, 40, 'G32'),
(81, 40, 'G34'),
(82, 41, 'G40'),
(83, 42, 'G14'),
(84, 42, 'G28'),
(85, 43, 'G43'),
(86, 43, 'G44'),
(87, 43, 'G45'),
(88, 44, 'G33'),
(89, 44, 'G34'),
(90, 45, 'G13'),
(91, 46, 'G14'),
(92, 46, 'G17'),
(93, 47, 'G41'),
(94, 47, 'G42'),
(95, 48, 'G16'),
(96, 49, 'G14'),
(97, 49, 'G15'),
(98, 50, 'G44'),
(99, 50, 'G45'),
(100, 51, 'G09'),
(101, 51, 'G10'),
(102, 51, 'G11'),
(103, 52, 'G40'),
(104, 52, 'G41'),
(105, 52, 'G42'),
(106, 53, 'G32'),
(107, 53, 'G33'),
(108, 53, 'G34'),
(109, 54, 'G40'),
(110, 54, 'G41'),
(111, 55, 'G35'),
(112, 55, 'G36'),
(113, 55, 'G37'),
(114, 55, 'G38'),
(115, 56, 'G28'),
(116, 21, 'G22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` char(9) NOT NULL,
  `nama_gejala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `nama_gejala`) VALUES
('G01', 'Rem kaki mulai jauh'),
('G02', 'Adanya bunyi dipiringan belakang ketika menginjakan rem kaki'),
('G03', 'Rem tangan mulai jauh'),
('G04', 'Adanya bunyi di piringan depan ketika rem tangan'),
('G05', 'Setiap pergantian membutuhkan tenaga transmisi (1 ke 2) ada hentakan'),
('G06', 'Rante mulai renggang'),
('G07', 'Gir sudah kalah (tajam)'),
('G08', 'Roda ban motor gocak'),
('G09', 'Awal tarikan kopling berat/keras '),
('G10', 'Perpindahan transmisi (1 ke 2) keras'),
('G11', 'Tali kopling berkarat'),
('G12', 'Jarum pengukur speedometer tidak bergerak'),
('G13', 'Arah stir berlawanan (saat mengendarai  motor)'),
('G14', 'Tenaga performa kecepatan berkurang'),
('G15', 'Terjadi slep saat melepas kopling'),
('G16', 'Suara terdengar kasar saat hidup (ditempat)'),
('G17', 'Mesin berisik saat hidup'),
('G18', 'Motor sulit untuk dinyalain'),
('G19', 'busi hangus (habis terpakai)'),
('G20', 'Terdapat bocor dipermukaan kepala busi'),
('G21', 'Mulai mengeluarkan asap putih'),
('G22', 'Oli cepat berkurang'),
('G23', 'Oli cepat berubah warna'),
('G24', 'Motor tidak langsung hidup ketika kita starter, perlu dilakukan berulang-ulang'),
('G25', 'Klakson tidak bersuara/kecil'),
('G26', 'Lampu utama redup saat mesin dinyalakan'),
('G27', 'Saat kontak ON dan mesin belum dinyalakan, lampu sein tidak menyala/redup'),
('G28', 'Posisi jarum skep pada karburator tidak benar'),
('G29', 'Suara kasar pada dynamo starter dan dynamo starter panas'),
('G30', 'Saat dihidupkan dengan electric starter ada bunyi, tetapi selip tidak mau berputar'),
('G31', 'Saat dihidupkan dengan electric starter, tidak ada bunyi'),
('G32', 'Lampu mati dan pengisian aki berkurang menyebabkan aki cepat tekor'),
('G33', 'Jika komponen spul terbakar adalah tidak mampunya alternator diberi beban listrik'),
('G34', 'Jika soket kiprok ke spul di lepas dan diukur dengan voltmeter AC, terbaca voltase nya cukup. Namun, ketika diberi beban ke kiprok dan diukur ulang, biasanya voltase nya drop sehingga tidak ada arus yang masuk ke kiprok.'),
('G35', 'Voil bermasalah (jika voil mengalami masalah atau kerusakan maka tegangan listrik yang dihasilkan kecil sehingga percikan api dari busi tidak mampu memulai proses pembakaran'),
('G36', 'Adanya masalah pada komponen CDI, CDI sudah lama/rusak'),
('G37', 'Busi kotor/bermasalah dan bunga api kecil'),
('G38', 'Mesin tersendat sendat saat mau jalan (seperti mau mati)'),
('G39', 'Bensin boros'),
('G40', 'Oli bocor pada shock depan'),
('G41', 'Setelah dibersihkan oli keluar lagi'),
('G42', 'Seal shock tidak rusak'),
('G43', 'Bila berjalan di permukaan tidak rata terasa tidak nyaman'),
('G44', 'Angin ban sudah sesuia'),
('G45', 'Bila shock di ayun kebawah shock tidak berayun normal');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_motor`
--

CREATE TABLE `jenis_motor` (
  `id_jns_motor` int(9) NOT NULL,
  `jns_motor` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_motor`
--

INSERT INTO `jenis_motor` (`id_jns_motor`, `jns_motor`) VALUES
(1, 'D-tracker'),
(3, 'Klx'),
(4, 'Ninja RR');

-- --------------------------------------------------------

--
-- Table structure for table `kasus_lama`
--

CREATE TABLE `kasus_lama` (
  `kd_kasus_lama` int(9) NOT NULL,
  `nama_kasus_lama` varchar(50) NOT NULL,
  `id_jns_motor` int(9) NOT NULL,
  `id_kerusakan` char(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasus_lama`
--

INSERT INTO `kasus_lama` (`kd_kasus_lama`, `nama_kasus_lama`, `id_jns_motor`, `id_kerusakan`) VALUES
(5, 'P-01', 1, 'K03'),
(6, 'P-02', 3, 'K13'),
(7, 'P-03', 1, 'K01'),
(8, 'P-04', 3, 'K19'),
(9, 'P-05', 1, 'K05'),
(10, 'P-06', 4, 'K07'),
(11, 'P-07', 1, 'K02'),
(12, 'P-08', 1, 'K10'),
(13, 'P-09', 4, 'K11'),
(14, 'P-10', 4, 'K15'),
(15, 'P-11', 1, 'K08'),
(16, 'P-12', 1, 'K12'),
(17, 'P-13', 3, 'K14'),
(18, 'P-14', 3, 'K16'),
(19, 'P-15', 3, 'K06'),
(20, 'P-16', 4, 'K10'),
(21, 'P-17', 1, 'K13'),
(22, 'P-18', 4, 'K12'),
(23, 'P-19', 1, 'K09'),
(24, 'P-20', 3, 'K02'),
(25, 'P-21', 3, 'K04'),
(26, 'P-22', 1, 'K04'),
(27, 'P-23', 3, 'K07'),
(28, 'P-24', 1, 'K06'),
(29, 'P-25', 3, 'K03'),
(30, 'P-26', 4, 'K09'),
(31, 'P-27', 1, 'K11'),
(32, 'P-28', 3, 'K01'),
(33, 'P-29', 4, 'K01'),
(34, 'P-30', 1, 'K14'),
(35, 'P-31', 1, 'K16'),
(36, 'P-32', 4, 'K21'),
(37, 'P-33', 1, 'K18'),
(38, 'P-34', 3, 'K11'),
(39, 'P-35', 3, 'K12'),
(40, 'P-36', 3, 'K17'),
(41, 'P-37', 4, 'K19'),
(42, 'P-38', 3, 'K15'),
(43, 'P-39', 1, 'K21'),
(44, 'P-40', 4, 'K17'),
(45, 'P-41', 1, 'K07'),
(46, 'P-42', 3, 'K10'),
(47, 'P-43', 1, 'K20'),
(48, 'P-44', 3, 'K09'),
(49, 'P-45', 3, 'K08'),
(50, 'P-46', 3, 'K21'),
(51, 'P-47', 3, 'K05'),
(52, 'P-48', 3, 'K20'),
(53, 'P-49', 1, 'K17'),
(54, 'P-50', 1, 'K19'),
(55, 'P-51', 3, 'K18'),
(56, 'P-52', 1, 'K15');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id_kerusakan` char(7) NOT NULL,
  `nama_kerusakan` varchar(25) NOT NULL,
  `id_solusi` char(7) NOT NULL,
  `solusi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`id_kerusakan`, `nama_kerusakan`, `id_solusi`, `solusi`) VALUES
('K01', 'Kanvas rem belakang', 'S01', 'Jika kampas rem belakang sudah habis atau terdapat bunyi saat mengendarai motor, sebaiknya tidak dilakukan dulu proses berkendara dan gantilah kampas rem tersebut di dealer terdekat.'),
('K02', 'Kanvas Rem Depan', 'S02', 'Jika kampas rem depan sudah habis atau terdapat bunyi saat mengendarai motor, sebaiknya tidak dilakukan dulu proses berkendara dan gantilah kampas rem tersebut di dealer terdekat.'),
('K03', 'Gear Set', 'S03', 'Segera ganti gear tersebut pada dealer terdekat dan apabila gear masih baik penggunaannya, lakukanlah check up pada rantai motor agar tidak terjadi kerenggangan saat mengendarai sepeda motor.'),
('K04', 'Laker', 'S04', 'Segera ganti laker tersebut dengan yang baru.'),
('K05', 'Tali Kopling', 'S05', 'Jika kondisinya masih terlihat bagus maka, lakukan lah dengan cara membersihkan tali kopling tersebut hingga benar-benar bersih, oleskan pelumas oil pada area tali dan jika keadaan tali kopling sudah rusak segeralah ganti dengan yang baru.'),
('K06', 'Tali Spedometer', 'S06', 'Jika kerusakan terletak pada kabel yang putus, maka tidak ad acara yang lain dengan menggantikannya dengan kabel baru.'),
('K07', 'Laher Komstir', 'S07', 'Segeralah ganti dengan yang baru.'),
('K08', 'Kampas Kopling', 'S08', 'Segeralah ganti dengan yang baru.'),
('K09', 'Rantai Ketek', 'S09', 'Buka blok mesin pada motor bersihkan dan oleskan sedikit oli atau pelumas jika kondisi tidak ada perubahan maka, segeralah ganti dengan yang baru.'),
('K10', 'Glep', 'S10', 'Buka blok mesin pada motor bersihkan dan oleskan sedikit oli atau pelumas jika kondisi tidak ada perubahan maka, segeralah ganti dengan yang baru.'),
('K11', 'Busi', 'S11', 'Segeralah ganti dengan yang baru'),
('K12', 'Kepala Busi', 'S12', 'Segeralah ganti dengan yang baru'),
('K13', 'Piston', 'S13', 'Segeralah ganti dengan yang baru'),
('K14', 'Aki', 'S14', 'Lakukan pengisian ulang atau segera mengganti dengan yang baru'),
('K15', 'Karborator', 'S15', 'Buka blok pada karburator segeralah bersihkan cuci kemudian keringkan jika, kondisi karburator rusak berat maka segeralah ganti dengan baru.'),
('K16', 'Electric Starter', 'S16', 'Segeralah ganti dengan yang baru'),
('K17', 'Spull', 'S17', 'Segeralah ganti dengan yang baru'),
('K18', 'Sistem Pembakaran', 'S18', 'Lakukanlah pengecekan rutin pada setiap komponen pengapian pada motor seperti busi, koil, CDI, Spull, dan aki apabila komponen salah satu ada yang rusak segeralah ganti.'),
('K19', 'Seal Shock', 'S19', 'Segeralah ganti dengan yang baru'),
('K20', 'Tube Shock', 'S20', 'Segeralah ganti dengan yang baru'),
('K21', 'Shock Absorber', 'S21', 'Segeralah ganti dengan yang baru');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2021_06_15_154216_create_sessions_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('obikanuk@gmail.com', '$2y$10$gBCyEqPqXypQ2D6WHZFX8OYWJsqFVWG4rKbbW/3iADb9L3jYnhBCe', '2021-06-15 06:56:57');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('XjVEqsj7oAE5GkgrEO6P0OwVxjOmts1JkuMeLXEZ', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.106 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicjZwSFV1d080MDZOMHZ0QmFqRWRnN3ZRZUI1UWdMWXhpcWVSY2RXYyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rYXN1c2xhbWEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkdnB4ZHY3VGpMMk05L050Qzh3NHc2LmZZeHNoelJsNU9QWkIuTEtsWHhibkd2WEk3aVNOaS4iO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHZweGR2N1RqTDJNOS9OdEM4dzR3Ni5mWXhzaHpSbDVPUFpCLkxLbFh4Ym5HdlhJN2lTTmkuIjt9', 1624342118),
('xUzXl45QDx4j8C44i9lkOWma1hu7zkEGNSF8saC8', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.114 Safari/537.36 Edg/91.0.864.54', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiZVVZOENFYzFFZXdDQUJhY01Na3h2M1RtZ3lHYkJ4REJWcEhKdk9NbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rb25zdWx0YXNpIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MztzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJG9zRUVIb1pBYWUvbmZCTDBHblhyNk9nUW1TNDdiUHZEUXpueS5lWHJRcURNTTVONm9acmdpIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRvc0VFSG9aQWFlL25mQkwwR25YcjZPZ1FtUzQ3YlB2RFF6bnkuZVhyUXFETU01TjZvWnJnaSI7fQ==', 1624344908);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(1) NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@kawasaki.com', NULL, '$2y$10$vpxdv7TjL2M9/NtC8w4w6.fYxshzRl5OPZB.LKlXxbnGvXI7iSNi.', 1, NULL, NULL, NULL, '2021-06-15 06:52:22', '2021-06-15 06:52:22'),
(2, 'wahyu', 'wahyu@gmail.com', NULL, '$2y$10$rLtDkSsFHm.z.ulbtHh7Guvkwq4SEpNp/4HQptA/22gqZTcX6akV2', 2, NULL, NULL, NULL, '2021-06-15 09:32:07', '2021-06-15 09:32:07'),
(3, 'Tian', 'tian@gmail.com', NULL, '$2y$10$osEEHoZAae/nfBL0GnXr6OgQmS47bPvDQzny.eXrQqDMM5N6oZrgi', 2, NULL, NULL, NULL, '2021-06-21 21:04:11', '2021-06-21 21:04:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_kasus_lama`
--
ALTER TABLE `detail_kasus_lama`
  ADD PRIMARY KEY (`kd_detail_kasus_lama`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `jenis_motor`
--
ALTER TABLE `jenis_motor`
  ADD PRIMARY KEY (`id_jns_motor`);

--
-- Indexes for table `kasus_lama`
--
ALTER TABLE `kasus_lama`
  ADD PRIMARY KEY (`kd_kasus_lama`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `detail_kasus_lama`
--
ALTER TABLE `detail_kasus_lama`
  MODIFY `kd_detail_kasus_lama` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_motor`
--
ALTER TABLE `jenis_motor`
  MODIFY `id_jns_motor` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kasus_lama`
--
ALTER TABLE `kasus_lama`
  MODIFY `kd_kasus_lama` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
