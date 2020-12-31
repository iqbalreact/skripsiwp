-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2020 pada 04.47
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsiwp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatifs`
--

INSERT INTO `alternatifs` (`id`, `nama`, `deskripsi`, `solusi`, `created_at`, `updated_at`) VALUES
(1, 'Busuk Hitam', 'Penyakit ini terutama dijumpai pada anggrek Cattleya sp, Phalaenopsis sp, dendrodium sp, epidendrum sp dan Oncidium sp. Infeksi tampak pada daun bercak berwarna ungu kecoklatan dikelilingi lingkran kuning. Batang dipangkalnya berwarna hitam, akar berwarna', 'lorem1', '2020-02-07 01:04:44', '2020-02-10 21:38:23'),
(2, 'Antraknosa', 'Penyakit ini dijumpai pada anggrek jenis Dendrobium sp, Arachnis sp, Ascocendo sp, Phalaenopsis sp, Vanda sp, Oncidium sp. Infeksi pada daun terdapat bercak cekung tidak beraturan berwarna coklat kehitaman mengumpul, dimulai dari ujung daun. Batang tampak', 'lorem2', '2020-02-07 01:05:02', '2020-02-07 01:05:02'),
(3, 'Layu Sclerotium', 'Penyakit ini menyerak jenis anggrek terrestrial seperti Vanda sp, Arachnis. Infeksi pada daun menjadi menguning dan layu dimulai dari daun muda. Pangkal batang membusuk membentuk benang jamur putih dan ada berbutir coklat. Akar membusuk berwarna hitam. Me', 'lorem3', '2020-02-07 01:05:15', '2020-02-07 01:05:15'),
(4, 'Virus Mosaik Cymbidium', 'Dijumpai di 8 genera, yaitu Aranthera sp., Calanthe sp., Cattleya sp., Cymbidium sp., Gromatophyllum sp., Phalaenopsis sp., Oncidium sp., dan Vanda sp. Menyerang pada lingkungan yang lembab. Infeksi pada daun tampak bercak berwarna kuning pucat bentuk tid', 'lorem', '2020-02-07 01:05:29', '2020-02-07 01:05:29'),
(5, 'Virus Mosaik Tembakau', 'Virus penyakit ini dikenal dengan virus bercak bercincin. Jenis anggrek yang biasa terserang virus ini mencangkup dendrobium sp, Epidendrum sp, Vanda sp, Cattleya sp, Oncidium sp, cymbidium sp, Phalaenopsis.Infeksi pada daun terdapat bercak bercincin dipe', 'lorem', '2020-02-07 01:05:42', '2020-02-07 01:05:42'),
(6, 'Hawar Bunga', 'Penyakit ini menyerang pada cuaca lembab. Menyerang bunga dengan gejala bintik-bintik hitam, menguning, kering, membusuk pada kuncup. Penanganan dengan memberikan fungisida berupa protein harpin, mancozeb, bacillus subtilis+Trichoderma.', 'lorem', '2020-02-07 01:05:58', '2020-02-07 01:05:58'),
(8, 'Rebah Bibit / Kecambah', 'Penyakit in dijumpai ada tanaman muda didalam kompot pada anggrek jenis  Cymbidium sp, Dendrobium sp, Oncidium sp. Infeksi pada daun mudah roboh dan ada bercak bening. Pangkal batang membusuk dan ada bercak bening, warna akar coklat kemerahan dibagian pan', 'lorem1', '2020-02-07 01:11:58', '2020-09-14 07:25:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alternatif_kriteria`
--

CREATE TABLE `alternatif_kriteria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `alternatif_id` int(11) NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `bobotnilai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alternatif_kriteria`
--

INSERT INTO `alternatif_kriteria` (`id`, `alternatif_id`, `kriteria_id`, `bobotnilai`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 5, '2020-09-14 07:16:29', '2020-09-14 07:16:29'),
(2, 1, 4, 7, '2020-09-14 07:16:40', '2020-09-14 07:16:40'),
(3, 1, 5, 6, '2020-09-14 07:16:50', '2020-09-14 07:16:50'),
(4, 1, 6, 4, '2020-09-14 07:17:07', '2020-09-14 07:17:07'),
(5, 1, 7, 1, '2020-09-14 07:18:26', '2020-09-14 07:18:26'),
(6, 2, 3, 5, '2020-09-14 07:18:41', '2020-09-14 07:18:41'),
(7, 2, 4, 6, '2020-09-14 07:18:50', '2020-09-14 07:18:50'),
(8, 2, 5, 5, '2020-09-14 07:19:03', '2020-09-14 07:19:03'),
(9, 2, 6, 1, '2020-09-14 07:19:14', '2020-09-14 07:19:14'),
(10, 2, 7, 5, '2020-09-14 07:19:24', '2020-09-14 07:19:24'),
(11, 3, 3, 5, '2020-09-14 07:19:35', '2020-09-14 07:19:35'),
(12, 3, 4, 5, '2020-09-14 07:19:44', '2020-09-14 07:19:44'),
(13, 3, 5, 4, '2020-09-14 07:19:51', '2020-09-14 07:19:51'),
(14, 3, 6, 5, '2020-09-14 07:20:11', '2020-09-14 07:20:11'),
(15, 3, 7, 1, '2020-09-14 07:20:21', '2020-09-14 07:20:21'),
(16, 4, 3, 5, '2020-09-14 07:22:06', '2020-09-14 07:22:06'),
(17, 4, 4, 4, '2020-09-14 07:22:19', '2020-09-14 07:22:19'),
(18, 4, 5, 1, '2020-09-14 07:22:28', '2020-09-14 07:22:28'),
(19, 4, 6, 1, '2020-09-14 07:22:35', '2020-09-14 07:22:35'),
(20, 4, 7, 4, '2020-09-14 07:22:44', '2020-09-14 07:22:44'),
(21, 5, 3, 5, '2020-09-14 07:22:55', '2020-09-14 07:22:55'),
(22, 5, 4, 3, '2020-09-14 07:23:07', '2020-09-14 07:23:07'),
(23, 5, 5, 1, '2020-09-14 07:23:17', '2020-09-14 07:23:17'),
(24, 5, 6, 1, '2020-09-14 07:23:28', '2020-09-14 07:23:28'),
(25, 5, 7, 3, '2020-09-14 07:23:39', '2020-09-14 07:23:39'),
(26, 6, 3, 5, '2020-09-14 07:23:49', '2020-09-14 07:23:49'),
(27, 6, 4, 1, '2020-09-14 07:24:03', '2020-09-14 07:24:03'),
(28, 6, 5, 1, '2020-09-14 07:24:12', '2020-09-14 07:24:12'),
(29, 6, 6, 1, '2020-09-14 07:24:24', '2020-09-14 07:24:24'),
(30, 6, 7, 2, '2020-09-14 07:24:33', '2020-09-14 07:24:33'),
(31, 8, 3, 5, '2020-09-14 07:28:18', '2020-09-14 07:28:18'),
(32, 8, 4, 2, '2020-09-14 07:28:29', '2020-09-14 07:28:29'),
(33, 8, 5, 2, '2020-09-14 07:28:42', '2020-09-14 07:28:42'),
(34, 8, 6, 3, '2020-09-14 07:28:53', '2020-09-14 07:28:53'),
(35, 8, 7, 1, '2020-09-14 07:29:00', '2020-09-14 07:29:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `histori`
--

CREATE TABLE `histori` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gejala` varchar(225) NOT NULL,
  `hasil` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `histori`
--

INSERT INTO `histori` (`id`, `nama`, `gejala`, `hasil`) VALUES
(4, 'Andrianus Tinas1212', 'a:5:{i:3;s:1:\"4\";i:4;s:1:\"6\";i:5;s:1:\"3\";i:6;s:1:\"1\";i:7;s:1:\"1\";}', 'Rebah Bibit / Kecambah'),
(5, 'Lidya', 'a:5:{i:3;s:1:\"3\";i:4;s:1:\"6\";i:5;s:1:\"6\";i:6;s:1:\"3\";i:7;s:1:\"3\";}', 'Layu Sclerotium');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisanggreks`
--

CREATE TABLE `jenisanggreks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenisanggreks`
--

INSERT INTO `jenisanggreks` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(14, 'Anggrek Bulan', 'Anggrek ini ditetapkan sebagai Puspa Pesona Indonesia mendampingi Melati. Pertama kali ditemukan di Maluku. Anggrek ini memiliki ciri khas kelopak bunga lebar dan berwarna putih.', '1. Anggrek-Bulan.jpg', '2020-09-14 06:41:18', '2020-09-14 06:41:18'),
(15, 'Anggrek Tebu', 'Anggrek Tebu(Grammatophyllum speciosum) merupakan jenis anggrek terbesar dan terberat dari jenis anggrek lainnya. Ciri utama  memiliki ukuran yang besar. Tinggi 2,5 - 3 meter dengan diameter 1,5-2 cm. Sosok batang yang mirip dengan tebu lantaran itu maka ', '3.Anggrek-Tebu.jpg', '2020-09-14 06:41:51', '2020-09-14 06:41:51'),
(16, 'Anggrek Hartinah', 'Anggrek Hartinah atau Anggrek Tien Soeharto(Cymbidium hartinahianum), merupakan salah satu jenis anggrek endemik(tumbuh didaerah tertentu) Sumatra Utara. Jenis anggrek yang diketemukan pertama kali tahun 1976 di Desa Baniara Tele kabupaten Samosir, Sumatr', '2. anggrek-hartinah.jpg', '2020-09-14 06:42:24', '2020-09-14 06:42:24'),
(17, 'Anggrek Hitam', 'Anggrek hitam (Coelogyne Pandurata) salah satu spesies anggrek yang dilindungi di Indonesia. Anggrek ini adalah flora identitas(mascot) Provinsi Kalimantan Timur. Memiliki ciri khas pada bunganya yang memiliki lidah berwarna hitam dengan sedikit garis ber', '4. Anggrek-Hitam.jpg', '2020-09-14 06:43:13', '2020-09-14 06:43:13'),
(18, 'Anggrek Serat', 'Anggrek serat(Diplocaulobium utile) merupakan flora maskot Provinsi Sulawesi Tenggara. Anggrek ini merupakan tanaman epifit yang tumbuh pada batang pohon. Uniknya pertumbuhan akarnya yang berbentuk rhizome merambat dan membentuk roset seperti paku sarang ', '5. Anggrek-Serat.jpg', '2020-09-14 06:43:49', '2020-09-14 06:43:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriterias`
--

CREATE TABLE `kriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `namakriteria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atribut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `range` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kriterias`
--

INSERT INTO `kriterias` (`id`, `namakriteria`, `atribut`, `range`, `created_at`, `updated_at`) VALUES
(3, 'Lingkungan', 'cost', 25, '2020-02-07 01:21:37', '2020-02-18 22:08:59'),
(4, 'Daun', 'cost', 25, '2020-02-07 01:21:56', '2020-02-07 01:21:56'),
(5, 'Batang', 'cost', 20, '2020-02-07 01:22:18', '2020-02-07 01:22:18'),
(6, 'Akar', 'cost', 20, '2020-02-07 01:22:35', '2020-02-07 01:22:35'),
(7, 'Bunga', 'cost', 10, '2020-02-07 01:22:53', '2020-02-07 01:22:53');

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
(4, '2020_01_17_090138_create_alternatifs_table', 1),
(5, '2020_01_17_090300_create_kriterias_table', 1),
(6, '2020_01_19_062336_create_subkriterias_table', 1),
(7, '2020_02_11_185025_create_jenisanggreks_table', 2),
(8, '2020_02_12_045618_create_penyakitanggreks_table', 3),
(9, '2020_02_12_053607_create_tentangs_table', 4),
(10, '2020_02_15_151532_create_nilaialternatifs_table', 5),
(11, '2020_05_10_091551_create_sarans_table', 6);

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
-- Struktur dari tabel `penyakitanggreks`
--

CREATE TABLE `penyakitanggreks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penyakitanggreks`
--

INSERT INTO `penyakitanggreks` (`id`, `nama`, `keterangan`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 'Busuk Hitam', 'Penyakit ini terutama dijumpai pada anggrek Cattleya sp, Phalaenopsis sp, dendrodium sp, epidendrum sp dan Oncidium sp. Infeksi tampak pada daun bercak berwarna ungu kecoklatan dikelilingi lingkran kuning. Batang dipangkalnya berwarna hitam, akar berwarna hitam keunguan terdapat benang-benang jamur putih.Penyebaran penyakit ini sangat cepat ketika lingkungan lembab. Solusi penanganan bisa potong bagian yang terkena penyakit. Pemberian fungisida (fosetyl-al, mefenoxam, banrot, subdue)', 'busuk hitam 2.jpg', '2020-09-14 06:50:38', '2020-09-14 06:50:38'),
(8, 'Virus Mozaik Cymbidium', 'Dijumpai di 8 genera, yaitu Aranthera sp., Calanthe sp., Cattleya sp., Cymbidium sp., Gromatophyllum sp., Phalaenopsis sp., Oncidium sp., dan Vanda sp. Menyerang pada lingkungan yang lembab. Infeksi pada daun tampak bercak berwarna kuning pucat bentuk tidak beraturan(mosaik). Bunga tampak lebih kecil dan ada bercak coklat nekrosis pada petal dan sepalnya. Penanganan dengan melakukan pembuangan bagian tanaman yang terserang.', 'mozaik cymbidium.jpg', '2020-09-14 06:51:13', '2020-09-14 06:51:13'),
(9, 'Antraknosa', 'Penyakit ini dijumpai pada anggrek jenis Dendrobium sp, Arachnis sp, Ascocendo sp, Phalaenopsis sp, Vanda sp, Oncidium sp. Infeksi pada daun terdapat bercak cekung tidak beraturan berwarna coklat kehitaman mengumpul, dimulai dari ujung daun. Batang tampak kerdil dan bercak coklat/hitam kecil pada bunga. Mudah terserang pada cuaca lembab/hujan dipancarkan dari percikan air hujan/siraman dan bisa dari serangga. Penanganan berupa membuang bagian yang terserang serta fungisida(metil tiophanat dan ma', 'antraknosa_2.jpg', '2020-09-14 06:51:34', '2020-09-14 06:51:34'),
(10, 'Layu Sclerotium', 'Penyakit ini menyerak jenis anggrek terrestrial seperti Vanda sp, Arachnis. Infeksi pada daun menjadi menguning dan layu dimulai dari daun muda. Pangkal batang membusuk membentuk benang jamur putih dan ada berbutir coklat. Akar membusuk berwarna hitam. Menyerang pada cuaca lembab, menyerang bagian tanaman yang luka. Penanganan dengan memotong bagian yang terserang atau dengan dibakar.', 'antraknosa_2.jpg', '2020-09-14 07:03:27', '2020-09-14 07:03:27'),
(11, 'Virus Mozaik Tembakau', 'Virus penyakit ini dikenal dengan virus bercak bercincin. Jenis anggrek yang biasa terserang virus ini mencangkup dendrobium sp, Epidendrum sp, Vanda sp, Cattleya sp, Oncidium sp, cymbidium sp, Phalaenopsis.Infeksi pada daun terdapat bercak bercincin dipermukaan daun dan tepi bunga tampak bergelombang. Mudah menyerang tanaman pada lingkungan lembab. Penenganan dengan cara membuang/memotong bagian tanaman yang terserang.', 'antraknosa_2.jpg', '2020-09-14 07:03:55', '2020-09-14 07:03:55'),
(12, 'Hawar Bunga', 'Penyakit ini menyerang pada cuaca lembab. Menyerang bunga dengan gejala bintik-bintik hitam, menguning, kering, membusuk pada kuncup. Penanganan dengan memberikan fungisida berupa protein harpin, mancozeb, bacillus subtilis+Trichoderma.', 'antraknosa_2.jpg', '2020-09-14 07:04:15', '2020-09-14 07:04:15'),
(13, 'Rebah Bibit / Kecambah', 'Penyakit in dijumpai ada tanaman muda didalam kompot pada anggrek jenis  Cymbidium sp, Dendrobium sp, Oncidium sp. Infeksi pada daun mudah roboh dan ada bercak bening. Pangkal batang membusuk dan ada bercak bening, warna akar coklat kemerahan dibagian pangkal. Bibit penyakit bisa melalui cipratan air. Penanganan dengan cara membakar tanaman yang terserang.', 'antraknosa_2.jpg', '2020-09-14 07:04:38', '2020-09-14 07:04:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sarans`
--

CREATE TABLE `sarans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subkriterias`
--

CREATE TABLE `subkriterias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` int(11) NOT NULL,
  `namasub` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobotsub` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `subkriterias`
--

INSERT INTO `subkriterias` (`id`, `kriteria_id`, `namasub`, `bobotsub`, `created_at`, `updated_at`) VALUES
(1, 4, 'Bercak berwarna ungu kecoklatan dikelilingi lingkaran kuning', 7, '2020-09-14 07:06:36', '2020-09-14 07:06:36'),
(2, 4, 'Bercak cekung dan tidak beraturan berwarna coklat kehitaman mengumpul, dimulai dari ujung daun', 6, '2020-09-14 07:06:48', '2020-09-14 07:06:48'),
(3, 4, 'Menguning dan Layu dimulai dari daun muda', 5, '2020-09-14 07:07:00', '2020-09-14 07:07:00'),
(4, 4, 'Permukaan daun mosaic(bercak kuning pucat dikelilingi warna hijau gelap) dan belang-belang', 4, '2020-09-14 07:07:12', '2020-09-14 07:07:12'),
(5, 4, 'Bercak bercincin warna kuning di permukaan daun', 3, '2020-09-14 07:07:26', '2020-09-14 07:07:26'),
(6, 4, 'Tanaman Mudah roboh', 2, '2020-09-14 07:07:44', '2020-09-14 07:07:44'),
(8, 3, 'Lembab', 5, '2020-09-14 07:08:32', '2020-09-14 07:08:32'),
(9, 3, 'Teduh', 4, '2020-09-14 07:08:46', '2020-09-14 07:08:46'),
(10, 3, 'Kering', 3, '2020-09-14 07:09:11', '2020-09-14 07:09:11'),
(12, 5, 'Batang berwarna hitam di pangkalnya', 6, '2020-09-14 07:09:45', '2020-09-14 07:09:45'),
(13, 5, 'Kerdil', 5, '2020-09-14 07:09:56', '2020-09-14 07:09:56'),
(14, 5, 'Pangkal batang membusuk, membentuk benang-benang jamur putih dan butiran warna coklat', 4, '2020-09-14 07:10:11', '2020-09-14 07:10:11'),
(15, 5, 'Membusuk, ketika dibelah berwarna coklat', 3, '2020-09-14 07:10:24', '2020-09-14 07:10:24'),
(16, 5, 'Pangkal tanaman membusuk dan ada bercak bening', 2, '2020-09-14 07:10:36', '2020-09-14 07:10:36'),
(17, 6, 'Membusuk warna hitam', 5, '2020-09-14 07:13:08', '2020-09-14 07:13:08'),
(18, 6, 'Akar berwarna hitam keunguan terdapat benang-benang jamur berarna putih', 4, '2020-09-14 07:13:17', '2020-09-14 07:13:17'),
(19, 6, 'Busuk warna coklat kemerahan bagian pangkal', 3, '2020-09-14 07:13:29', '2020-09-14 07:13:29'),
(20, 7, 'Bercak coklat/hitam kecil', 5, '2020-09-14 07:13:46', '2020-09-14 07:13:46'),
(21, 7, 'Bunga lebih kecil, ada bercak coklat nekrosis pada petal dan sepalnya', 4, '2020-09-14 07:13:58', '2020-09-14 07:13:58'),
(22, 7, 'Tepi bunga tampak bergelombang', 3, '2020-09-14 07:14:13', '2020-09-14 07:14:13'),
(23, 7, 'Bintik-bintik hitam, Menguning, kering, membusuk pada kuncup', 2, '2020-09-14 07:14:24', '2020-09-14 07:14:24'),
(24, 3, 'Tidak Ada Gejala', 1, '2020-09-14 07:17:49', '2020-09-14 07:17:49'),
(25, 4, 'Tidak Ada Gejala', 1, '2020-09-14 07:17:56', '2020-09-14 07:17:56'),
(26, 5, 'Tidak Ada Gejala', 1, '2020-09-14 07:18:02', '2020-09-14 07:18:02'),
(27, 6, 'Tidak Ada Gejala', 1, '2020-09-14 07:18:08', '2020-09-14 07:18:08'),
(28, 7, 'Tidak Ada Gejala', 1, '2020-09-14 07:18:14', '2020-09-14 07:18:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tentangs`
--

CREATE TABLE `tentangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'iqbaldev', 'iqbaldev@gmail.com', NULL, '$2y$10$LSSzltGgOj5NlHzHL7fJae6fUYqxwREKv3QjUhdCE5W97sdAKzfOW', NULL, '2020-02-07 01:04:19', '2020-02-07 01:04:19'),
(2, 'admin', 'admin@mail.com', NULL, '$2y$10$U6yXIg9X6yGEn1kOnv4UDOwcBrKZYzKMvjoI9aF0RDZ5hlSllGK92', NULL, '2020-02-20 00:20:45', '2020-02-20 00:20:45'),
(3, 'iqbaldev', 'mitneira@gmail.com', NULL, '$2y$10$A6s4KR14BvV2Up4NV72oMu2dHJITpkFT59nmjG3IXO9PKedA2Irk.', NULL, '2020-12-16 04:21:41', '2020-12-16 04:21:41');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `alternatif_kriteria`
--
ALTER TABLE `alternatif_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `histori`
--
ALTER TABLE `histori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenisanggreks`
--
ALTER TABLE `jenisanggreks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `penyakitanggreks`
--
ALTER TABLE `penyakitanggreks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sarans`
--
ALTER TABLE `sarans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `subkriterias`
--
ALTER TABLE `subkriterias`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `alternatif_kriteria`
--
ALTER TABLE `alternatif_kriteria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `histori`
--
ALTER TABLE `histori`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `jenisanggreks`
--
ALTER TABLE `jenisanggreks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `penyakitanggreks`
--
ALTER TABLE `penyakitanggreks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `sarans`
--
ALTER TABLE `sarans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `subkriterias`
--
ALTER TABLE `subkriterias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tentangs`
--
ALTER TABLE `tentangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
