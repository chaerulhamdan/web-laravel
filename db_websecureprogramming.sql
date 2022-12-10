-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2022 pada 09.39
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_websecureprogramming`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `acara_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`id`, `acara_id`, `user_id`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Hadir', '2022-12-10 01:18:46', '2022-12-10 01:18:46'),
(2, 2, 2, 'Tidak Hadir', '2022-12-10 01:19:09', '2022-12-10 01:19:09'),
(3, 3, 2, 'Izin', '2022-12-10 01:19:27', '2022-12-10 01:19:27'),
(4, 4, 2, 'Sakit', '2022-12-10 01:19:55', '2022-12-10 01:19:55'),
(5, 1, 3, 'Sakit', '2022-12-10 01:24:07', '2022-12-10 01:24:07'),
(6, 2, 3, 'Izin', '2022-12-10 01:24:24', '2022-12-10 01:24:24'),
(7, 3, 3, 'Tanpa Keterangan', '2022-12-10 01:24:40', '2022-12-10 01:24:40'),
(8, 4, 3, 'Hadir', '2022-12-10 01:24:49', '2022-12-10 01:24:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `acara`
--

CREATE TABLE `acara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `acara`
--

INSERT INTO `acara` (`id`, `image`, `name`, `date`, `desc`, `created_at`, `updated_at`) VALUES
(1, '01.jpg', 'Wall Magazine Competition', '2016-01-22', 'Wall Magazine on the wall Competition, merupakan sebuah loba creatifitas pada sebuah tembok yang akan diselenggarakan pada tanggal 22 Januari 2016\r\nuntuk info selengkapnya : www.wallmagazine.co.id', '2022-12-10 00:57:59', '2022-12-10 00:57:59'),
(2, '02.jpg', 'Live Music Party Night', '2021-02-15', 'Live Music Party Night merupakan sebuah acara Live Music yang diselenggarakan oleh organisasi kami, pada tanggal 15 Februari Pukul 22.00 malam di MoonClub\r\n\r\nuntuk info selengkapnya : www.livemusic.or.id', '2022-12-10 01:01:17', '2022-12-10 01:01:17'),
(3, '03.jpg', 'The Process Series', '2017-03-18', 'The Process Series merupakan sebuah acara seminar yang bertema Build Your Start-Up yang dibawakan oleh accelerator mentors\r\n\r\nuntuk info selengkapnya : www.theprocesseries.co.id', '2022-12-10 01:03:58', '2022-12-10 01:03:58'),
(4, '04.jpg', 'Carrer & Internship Fair', '2022-01-03', 'Carrer & Internship Fair merupakan sebuah event yang bertujuan untuk mengedukasi dan memberikan informasi terkait carrer dan internship\r\n\r\nuntuk info selengkapnya : www.carrerinternfair.or.id', '2022-12-10 01:06:09', '2022-12-10 01:06:09'),
(5, '05.jpg', 'Come and Selebrate', '2023-12-07', 'Come and Selebrate merupakan sebuah acara untuk merayakan libur sekolah bersama keluarga yang didalamnya mempunyai banyak games menarik.\r\n\r\nuntuk info selengkapnya hubungi : 1300 - 88 - 5000', '2022-12-10 01:08:54', '2022-12-10 01:08:54'),
(6, '06.jpg', 'Bela Negara Masa Kini', '2019-08-31', 'Bela Negara Masa Kini merupakan sebuah lomba membuat vlog sebagai upaya untuk menunjukan bela negara pada masa kini.\r\n\r\nuntuk info selengkapnya : www.kominfo.lombabelanegara.com', '2022-12-10 01:12:48', '2022-12-10 01:12:48'),
(7, '07.jpg', 'Kompetensi Adu Bakat', '2023-08-27', 'Kompetensi Adu Bakat adalah sebuah lomba adu bakat seperti Indonesia Mencari Bakat dengan beberapa kriteria yang disebutkan.\r\n\r\nuntuk info selengkapnya follow instagram : @lombaadubakat', '2022-12-10 01:16:33', '2022-12-10 01:16:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `aspirasi`
--

CREATE TABLE `aspirasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `aspirasi`
--

INSERT INTO `aspirasi` (`id`, `judul`, `isi`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'X-Factor', 'X-Factor merupakan usulan saya untuk acara berikutnya, yaitu sebuah acara kompetensi menyanyi, seperti acara indonesia idol', 2, '2022-12-10 01:21:13', '2022-12-10 01:21:13'),
(2, 'Family 100', 'Family 100 merupakan sebuah acara tebak menebak jawaban atau lomba cerdas cermat', 2, '2022-12-10 01:22:26', '2022-12-10 01:22:26'),
(3, 'Lomba Video Kreatif', 'Lomba Video Kreatif adalah usulan dari saya yang mana lomba tersebut adalah sebuah lomba video lucu yang paling kreatif terkait organisasi kita', 3, '2022-12-10 01:26:24', '2022-12-10 01:26:24'),
(4, 'Hiking Together', 'Hiking Together merupakan sebuah acara bagi organisasi kita dan masyarakat luar untuk mendaki gunung everest', 3, '2022-12-10 01:27:04', '2022-12-10 01:27:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2022_11_10_044355_create_profile_table', 1),
(5, '2022_11_10_050750_create_acara_table', 1),
(6, '2022_11_10_052339_create_aspirasi_table', 1),
(7, '2022_11_10_052457_create_absensi_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `umur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `umur`, `alamat`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '21', 'Paskal Hyper Square, Jl. Pasir Kaliki No.25-27, Ciroyom, Kec. Andir, Kota Bandung, Jawa Barat 40181', 1, '2022-12-10 00:41:06', '2022-12-10 00:41:06'),
(2, '21', 'Palmerah, Jakarta Barat, DKI Jakarta, kode pos. 11480', 2, '2022-12-10 00:45:53', '2022-12-10 00:45:53'),
(3, '25', 'Kebon Jeruk, Jakarta Barat, DKI Jakarta, Kode Pos.11530', 3, '2022-12-10 00:48:53', '2022-12-10 00:48:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@mail.com', NULL, '$2y$10$zm8fHPAwcY5OlhDCX4kWI.L42XvJyn3uVogkIhcr6eF9cCOJHCVaG', 1, NULL, '2022-12-10 00:41:06', '2022-12-10 00:41:06'),
(2, 'user', 'user@mail.com', NULL, '$2y$10$/3MQ23/gk9eYqVeOvLOiFO9sgwS5CtvEkB9iad67ZdyLAxYpejubC', NULL, NULL, '2022-12-10 00:45:53', '2022-12-10 00:45:53'),
(3, 'contoh', 'contoh@mail.com', NULL, '$2y$10$7XNSoWk8op2xDKKt92zhdOvPsU2EQseMa8MTPR6xzf3M3SfFzdx4u', NULL, NULL, '2022-12-10 00:48:53', '2022-12-10 00:48:53');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `absensi_acara_id_foreign` (`acara_id`),
  ADD KEY `absensi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `acara`
--
ALTER TABLE `acara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aspirasi_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profile_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `acara`
--
ALTER TABLE `acara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_acara_id_foreign` FOREIGN KEY (`acara_id`) REFERENCES `acara` (`id`),
  ADD CONSTRAINT `absensi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `aspirasi`
--
ALTER TABLE `aspirasi`
  ADD CONSTRAINT `aspirasi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
