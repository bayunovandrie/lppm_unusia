-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Sep 2023 pada 13.45
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lppm_unusia`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$hwvVvdEEE2fZv42Sp1eGLOjrIpm4C6r9Na9G2WwpQsBW4pD/zKLfm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `article_id` int(11) NOT NULL,
  `article_type` int(11) NOT NULL COMMENT '1. Berita 2. Opini',
  `article_judul` varchar(255) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  `article_body` text NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_donwload`
--

CREATE TABLE `category_donwload` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_donwload`
--

INSERT INTO `category_donwload` (`category_id`, `category_name`, `created_at`) VALUES
(1, 'Dokumen Kebijakan Nasional', '2023-08-16 11:09:19'),
(2, 'Dokumen Kebijakan Unusia', '2023-08-16 11:09:19'),
(3, 'Panduan', '2023-08-16 11:11:14'),
(4, 'SOP', '2023-08-16 11:11:14'),
(5, 'Format / Template', '2023-08-16 11:11:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `download_panduan`
--

CREATE TABLE `download_panduan` (
  `panduan_id` int(11) NOT NULL,
  `category_donwload_id` int(11) NOT NULL,
  `panduan_tema` varchar(255) NOT NULL,
  `panduan_name_ekstensi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `download_panduan`
--

INSERT INTO `download_panduan` (`panduan_id`, `category_donwload_id`, `panduan_tema`, `panduan_name_ekstensi`) VALUES
(9, 1, 'example', 'ilovepdf_merged (5).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `editor_jurnal`
--

CREATE TABLE `editor_jurnal` (
  `jurnal_id` int(11) NOT NULL,
  `jurnal_jumlah` int(11) NOT NULL,
  `jurnal_tipe` int(11) NOT NULL COMMENT '1.jurnal tingkat nasional 2. jurnal tingkat internasional',
  `tahun_id` int(11) NOT NULL,
  `jurnal_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `editor_jurnal`
--

INSERT INTO `editor_jurnal` (`jurnal_id`, `jurnal_jumlah`, `jurnal_tipe`, `tahun_id`, `jurnal_datetime`) VALUES
(1, 10, 1, 6, '2023-08-23 20:27:28'),
(4, 25, 2, 6, '2023-08-23 21:31:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `insentif_jurnal`
--

CREATE TABLE `insentif_jurnal` (
  `insentif_id` int(11) NOT NULL,
  `insentif_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `insentif_jurnal`
--

INSERT INTO `insentif_jurnal` (`insentif_id`, `insentif_link`) VALUES
(3, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invited_speaker`
--

CREATE TABLE `invited_speaker` (
  `invit_id` int(11) NOT NULL,
  `invit_jumlah` int(11) NOT NULL,
  `invit_type` int(11) NOT NULL COMMENT '1.forum tingkat nasional 2. forum tingkat internasional',
  `tahun_id` int(11) NOT NULL,
  `invit_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `invited_speaker`
--

INSERT INTO `invited_speaker` (`invit_id`, `invit_jumlah`, `invit_type`, `tahun_id`, `invit_datetime`) VALUES
(1, 10, 1, 6, '2023-08-23 14:05:58'),
(5, 30, 2, 6, '2023-08-23 21:30:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karya_ilmiah`
--

CREATE TABLE `karya_ilmiah` (
  `karya_ilmiah_id` int(11) NOT NULL,
  `karya_ilmiah_jumlah` int(11) NOT NULL,
  `karya_ilmiah_type` int(11) NOT NULL COMMENT '1. karya ilmiah',
  `tahun_id` int(11) NOT NULL,
  `karya_ilmiah_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `karya_ilmiah`
--

INSERT INTO `karya_ilmiah` (`karya_ilmiah_id`, `karya_ilmiah_jumlah`, `karya_ilmiah_type`, `tahun_id`, `karya_ilmiah_datetime`) VALUES
(3, 20, 1, 6, '2023-08-23 01:42:32'),
(4, 25, 1, 7, '2023-08-25 23:27:29'),
(5, 30, 1, 8, '2023-08-25 23:27:41'),
(7, 31, 1, 9, '2023-09-13 14:53:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_hki`
--

CREATE TABLE `laporan_hki` (
  `hki_id` int(11) NOT NULL,
  `hki_jumlah` int(11) NOT NULL,
  `hki_tipe` int(11) NOT NULL COMMENT '1. hak ciptaan 2. hak paten',
  `tahun_id` int(11) NOT NULL,
  `hki_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_hki`
--

INSERT INTO `laporan_hki` (`hki_id`, `hki_jumlah`, `hki_tipe`, `tahun_id`, `hki_datetime`) VALUES
(5, 10, 2, 6, '2023-08-23 13:42:58'),
(6, 8, 1, 6, '2023-08-23 23:02:49'),
(7, 14, 1, 7, '2023-08-23 00:00:00'),
(8, 10, 1, 8, '2023-08-23 00:00:00'),
(9, 8, 1, 9, '2023-08-23 00:00:00'),
(10, 17, 2, 7, '2023-08-23 00:00:00'),
(11, 20, 2, 8, '2023-08-23 00:00:00'),
(13, 20, 2, 9, '2023-09-13 14:56:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_teknologi`
--

CREATE TABLE `laporan_teknologi` (
  `teknologi_id` int(11) NOT NULL,
  `teknologi_jumlah` int(11) NOT NULL,
  `teknologi_tipe` int(11) NOT NULL COMMENT '1. teknologi',
  `tahun_id` int(11) NOT NULL,
  `teknologi_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporan_teknologi`
--

INSERT INTO `laporan_teknologi` (`teknologi_id`, `teknologi_jumlah`, `teknologi_tipe`, `tahun_id`, `teknologi_datetime`) VALUES
(2, 20, 1, 6, '2023-08-23 12:02:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_hki`
--

CREATE TABLE `layanan_hki` (
  `layanan_id` int(11) NOT NULL,
  `layanan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_hki`
--

INSERT INTO `layanan_hki` (`layanan_id`, `layanan_link`) VALUES
(9, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_kkn`
--

CREATE TABLE `layanan_kkn` (
  `layanan_id` int(11) NOT NULL,
  `layanan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_kkn`
--

INSERT INTO `layanan_kkn` (`layanan_id`, `layanan_link`) VALUES
(3, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_lapor`
--

CREATE TABLE `layanan_lapor` (
  `layanan_id` int(11) NOT NULL,
  `layanan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_lapor`
--

INSERT INTO `layanan_lapor` (`layanan_id`, `layanan_link`) VALUES
(2, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_ppm`
--

CREATE TABLE `layanan_ppm` (
  `layanan_id` int(11) NOT NULL,
  `layanan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan_ppm`
--

INSERT INTO `layanan_ppm` (`layanan_id`, `layanan_link`) VALUES
(3, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `media_massa`
--

CREATE TABLE `media_massa` (
  `media_id` int(11) NOT NULL,
  `media_jumlah` int(11) NOT NULL,
  `media_type` int(11) NOT NULL COMMENT '1.media massa nasional 2.media massa internasional',
  `tahun_id` int(11) NOT NULL,
  `media_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `media_massa`
--

INSERT INTO `media_massa` (`media_id`, `media_jumlah`, `media_type`, `tahun_id`, `media_datetime`) VALUES
(1, 5, 1, 6, '2023-08-23 01:03:55'),
(2, 10, 2, 6, '2023-08-23 01:04:07'),
(4, 11, 1, 7, '2023-08-23 00:00:00'),
(5, 12, 1, 8, '2023-08-23 00:00:00'),
(6, 13, 1, 9, '2023-08-23 00:00:00'),
(7, 14, 2, 7, '2023-08-23 00:00:00'),
(8, 15, 2, 8, '2023-08-23 00:00:00'),
(10, 5, 2, 9, '2023-09-13 14:52:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penelitian`
--

CREATE TABLE `penelitian` (
  `penelitian_id` int(11) NOT NULL,
  `penelitian_nama` varchar(255) NOT NULL,
  `penelitian_judul` varchar(255) NOT NULL,
  `penelitian_year` int(11) NOT NULL,
  `peneletian_type` int(11) NOT NULL COMMENT '1. penelitian internal, 2. penelitian eksternal\r\n3. penelitian_mandiri',
  `penelitian_file_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penelitian`
--

INSERT INTO `penelitian` (`penelitian_id`, `penelitian_nama`, `penelitian_judul`, `penelitian_year`, `peneletian_type`, `penelitian_file_name`, `created_at`, `updated_at`) VALUES
(8, 'example', 'example judul', 6, 1, 'ilovepdf_merged (6).pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'example', 'example', 6, 2, 'ilovepdf_merged (6).pdf', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penerbitan_buku`
--

CREATE TABLE `penerbitan_buku` (
  `penerbitan_id` int(11) NOT NULL,
  `penerbitan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penerbitan_buku`
--

INSERT INTO `penerbitan_buku` (`penerbitan_id`, `penerbitan_link`) VALUES
(3, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengabdian`
--

CREATE TABLE `pengabdian` (
  `pengabdian_id` int(10) NOT NULL,
  `pengabdian_tahun` int(255) NOT NULL,
  `pengabdian_tema` varchar(255) NOT NULL,
  `pengabdian_img` varchar(255) NOT NULL,
  `pengabdian_desk` text NOT NULL,
  `pengabdian_tipe` int(10) NOT NULL COMMENT '1. internal, 2. eksternal 3. kkn 4. mandiri',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengabdian`
--

INSERT INTO `pengabdian` (`pengabdian_id`, `pengabdian_tahun`, `pengabdian_tema`, `pengabdian_img`, `pengabdian_desk`, `pengabdian_tipe`, `created_at`, `updated_at`) VALUES
(5, 6, 'example', 'quertra.png', 'example', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 'example', 'orttube.jpg', 'example ekseternal', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengelolaan_jurnal`
--

CREATE TABLE `pengelolaan_jurnal` (
  `pengelolaan_id` int(11) NOT NULL,
  `pengelolaan_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengelolaan_jurnal`
--

INSERT INTO `pengelolaan_jurnal` (`pengelolaan_id`, `pengelolaan_link`) VALUES
(2, 'https://docs.google.com/forms/d/e/1FAIpQLSet5l_gCIHJhKwly8khKv2KatSVeE-Odf8zs12NQisCAcZX8Q/viewform');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghargaan`
--

CREATE TABLE `penghargaan` (
  `penghargaan_id` int(11) NOT NULL,
  `penghargaan_jumlah` int(11) NOT NULL,
  `penghargaan_tipe` int(11) NOT NULL COMMENT '1.tingkat nasional 2.tingkat internasional',
  `tahun_id` int(11) NOT NULL,
  `penghargaan_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penghargaan`
--

INSERT INTO `penghargaan` (`penghargaan_id`, `penghargaan_jumlah`, `penghargaan_tipe`, `tahun_id`, `penghargaan_datetime`) VALUES
(1, 10, 1, 6, '2023-08-23 20:46:19'),
(4, 44, 2, 6, '2023-08-23 21:32:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi_buku`
--

CREATE TABLE `publikasi_buku` (
  `publikasi_buku_id` int(11) NOT NULL,
  `publikasi_buku_jumlah` int(11) NOT NULL,
  `publikasi_buku_type` int(11) NOT NULL COMMENT '1. tingkat nasional 2. tingkat internasional',
  `tahun_id` int(11) NOT NULL,
  `publikasi_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `publikasi_buku`
--

INSERT INTO `publikasi_buku` (`publikasi_buku_id`, `publikasi_buku_jumlah`, `publikasi_buku_type`, `tahun_id`, `publikasi_datetime`) VALUES
(1, 20, 1, 6, '2023-08-22 23:25:23'),
(2, 30, 2, 6, '2023-08-22 23:27:45'),
(5, 10, 1, 8, '2023-08-23 00:00:00'),
(6, 10, 1, 9, '2023-08-23 00:00:00'),
(7, 15, 2, 7, '2023-08-23 00:00:00'),
(8, 20, 2, 8, '2023-08-23 00:00:00'),
(9, 25, 2, 9, '2023-08-23 00:00:00'),
(10, 5, 1, 9, '2023-09-13 14:09:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi_jurnal`
--

CREATE TABLE `publikasi_jurnal` (
  `publikasi_id` int(11) NOT NULL,
  `publikasi_jumlah` int(11) NOT NULL,
  `publikasi_type` int(11) NOT NULL COMMENT '1. jurnal nasional tidak terakreditasi 2.Jurnal Nasional Terakreditasi 3. Jurnal Nasional 4. Jurnal Nasional Bereputasi',
  `tahun_id` int(11) NOT NULL,
  `publikasi_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `publikasi_jurnal`
--

INSERT INTO `publikasi_jurnal` (`publikasi_id`, `publikasi_jumlah`, `publikasi_type`, `tahun_id`, `publikasi_datetime`) VALUES
(1, 5, 1, 6, '2023-08-22 00:26:08'),
(2, 10, 2, 6, '2023-08-22 00:33:59'),
(3, 5, 3, 6, '2023-08-22 00:34:18'),
(4, 5, 4, 6, '2023-08-22 00:34:30'),
(7, 5, 1, 7, '2023-08-23 22:24:10'),
(9, 5, 3, 7, '2023-08-23 22:27:37'),
(10, 5, 4, 7, '2023-08-23 22:27:48'),
(11, 5, 1, 8, '2023-08-23 22:28:06'),
(12, 5, 2, 8, '2023-08-23 22:28:15'),
(13, 5, 3, 8, '2023-08-23 22:28:25'),
(14, 5, 4, 8, '2023-08-23 22:28:47'),
(15, 5, 1, 9, '2023-08-23 22:29:01'),
(16, 5, 2, 9, '2023-08-23 22:29:14'),
(17, 5, 3, 9, '2023-08-23 22:29:27'),
(18, 5, 4, 9, '2023-08-23 22:30:44'),
(19, 3, 2, 9, '2023-09-13 13:33:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi_prosiding`
--

CREATE TABLE `publikasi_prosiding` (
  `prosiding_id` int(11) NOT NULL,
  `prosiding_jumlah` int(11) NOT NULL,
  `prosiding_type` int(11) NOT NULL COMMENT '1.seminar wilayah 2.seminar nasional 3. seminar internasional',
  `tahun_id` int(11) NOT NULL,
  `prosiding_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `publikasi_prosiding`
--

INSERT INTO `publikasi_prosiding` (`prosiding_id`, `prosiding_jumlah`, `prosiding_type`, `tahun_id`, `prosiding_datetime`) VALUES
(1, 10, 1, 6, '2023-08-22 23:48:19'),
(5, 30, 3, 6, '2023-08-23 01:10:42'),
(6, 20, 2, 6, '2023-09-13 14:13:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf_ahli`
--

CREATE TABLE `staf_ahli` (
  `staf_id` int(11) NOT NULL,
  `staf_jumlah` int(11) NOT NULL,
  `staf_tipe` int(11) NOT NULL COMMENT '1.lembaga tingkat nasional 2.lembaga tingkat  internasional',
  `tahun_id` int(11) NOT NULL,
  `staf_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `staf_ahli`
--

INSERT INTO `staf_ahli` (`staf_id`, `staf_jumlah`, `staf_tipe`, `tahun_id`, `staf_datetime`) VALUES
(1, 20, 1, 6, '2023-08-23 21:40:58'),
(3, 22, 2, 6, '2023-08-23 21:51:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahun`
--

CREATE TABLE `tahun` (
  `TahunID` int(11) NOT NULL,
  `tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tahun`
--

INSERT INTO `tahun` (`TahunID`, `tahun`) VALUES
(6, '2020'),
(7, '2021'),
(8, '2022'),
(9, '2023'),
(10, '2024');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visiting_lecturer`
--

CREATE TABLE `visiting_lecturer` (
  `visit_id` int(11) NOT NULL,
  `visit_jumlah` int(11) NOT NULL,
  `visit_type` int(11) NOT NULL COMMENT '1. pt tingkat nasional 2. pt tingkat internasional',
  `tahun_id` int(11) NOT NULL,
  `visit_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visiting_lecturer`
--

INSERT INTO `visiting_lecturer` (`visit_id`, `visit_jumlah`, `visit_type`, `tahun_id`, `visit_datetime`) VALUES
(1, 10, 1, 6, '2023-08-23 13:41:12'),
(12, 31, 2, 6, '2023-08-23 21:27:19'),
(13, 22, 1, 7, '2023-08-23 00:00:00'),
(14, 22, 1, 8, '2023-08-23 00:00:00'),
(16, 22, 2, 7, '2023-08-23 00:00:00'),
(17, 22, 2, 8, '2023-08-23 00:00:00'),
(18, 22, 2, 9, '2023-08-23 00:00:00'),
(19, 12, 1, 9, '2023-09-13 14:58:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indeks untuk tabel `category_donwload`
--
ALTER TABLE `category_donwload`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `download_panduan`
--
ALTER TABLE `download_panduan`
  ADD PRIMARY KEY (`panduan_id`);

--
-- Indeks untuk tabel `editor_jurnal`
--
ALTER TABLE `editor_jurnal`
  ADD PRIMARY KEY (`jurnal_id`);

--
-- Indeks untuk tabel `insentif_jurnal`
--
ALTER TABLE `insentif_jurnal`
  ADD PRIMARY KEY (`insentif_id`);

--
-- Indeks untuk tabel `invited_speaker`
--
ALTER TABLE `invited_speaker`
  ADD PRIMARY KEY (`invit_id`);

--
-- Indeks untuk tabel `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  ADD PRIMARY KEY (`karya_ilmiah_id`);

--
-- Indeks untuk tabel `laporan_hki`
--
ALTER TABLE `laporan_hki`
  ADD PRIMARY KEY (`hki_id`);

--
-- Indeks untuk tabel `laporan_teknologi`
--
ALTER TABLE `laporan_teknologi`
  ADD PRIMARY KEY (`teknologi_id`);

--
-- Indeks untuk tabel `layanan_hki`
--
ALTER TABLE `layanan_hki`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indeks untuk tabel `layanan_kkn`
--
ALTER TABLE `layanan_kkn`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indeks untuk tabel `layanan_lapor`
--
ALTER TABLE `layanan_lapor`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indeks untuk tabel `layanan_ppm`
--
ALTER TABLE `layanan_ppm`
  ADD PRIMARY KEY (`layanan_id`);

--
-- Indeks untuk tabel `media_massa`
--
ALTER TABLE `media_massa`
  ADD PRIMARY KEY (`media_id`);

--
-- Indeks untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`penelitian_id`);

--
-- Indeks untuk tabel `penerbitan_buku`
--
ALTER TABLE `penerbitan_buku`
  ADD PRIMARY KEY (`penerbitan_id`);

--
-- Indeks untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  ADD PRIMARY KEY (`pengabdian_id`);

--
-- Indeks untuk tabel `pengelolaan_jurnal`
--
ALTER TABLE `pengelolaan_jurnal`
  ADD PRIMARY KEY (`pengelolaan_id`);

--
-- Indeks untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  ADD PRIMARY KEY (`penghargaan_id`);

--
-- Indeks untuk tabel `publikasi_buku`
--
ALTER TABLE `publikasi_buku`
  ADD PRIMARY KEY (`publikasi_buku_id`);

--
-- Indeks untuk tabel `publikasi_jurnal`
--
ALTER TABLE `publikasi_jurnal`
  ADD PRIMARY KEY (`publikasi_id`);

--
-- Indeks untuk tabel `publikasi_prosiding`
--
ALTER TABLE `publikasi_prosiding`
  ADD PRIMARY KEY (`prosiding_id`);

--
-- Indeks untuk tabel `staf_ahli`
--
ALTER TABLE `staf_ahli`
  ADD PRIMARY KEY (`staf_id`);

--
-- Indeks untuk tabel `tahun`
--
ALTER TABLE `tahun`
  ADD PRIMARY KEY (`TahunID`);

--
-- Indeks untuk tabel `visiting_lecturer`
--
ALTER TABLE `visiting_lecturer`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `category_donwload`
--
ALTER TABLE `category_donwload`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `download_panduan`
--
ALTER TABLE `download_panduan`
  MODIFY `panduan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `editor_jurnal`
--
ALTER TABLE `editor_jurnal`
  MODIFY `jurnal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `insentif_jurnal`
--
ALTER TABLE `insentif_jurnal`
  MODIFY `insentif_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `invited_speaker`
--
ALTER TABLE `invited_speaker`
  MODIFY `invit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `karya_ilmiah`
--
ALTER TABLE `karya_ilmiah`
  MODIFY `karya_ilmiah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporan_hki`
--
ALTER TABLE `laporan_hki`
  MODIFY `hki_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `laporan_teknologi`
--
ALTER TABLE `laporan_teknologi`
  MODIFY `teknologi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `layanan_hki`
--
ALTER TABLE `layanan_hki`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `layanan_kkn`
--
ALTER TABLE `layanan_kkn`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan_lapor`
--
ALTER TABLE `layanan_lapor`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `layanan_ppm`
--
ALTER TABLE `layanan_ppm`
  MODIFY `layanan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `media_massa`
--
ALTER TABLE `media_massa`
  MODIFY `media_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `penelitian_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penerbitan_buku`
--
ALTER TABLE `penerbitan_buku`
  MODIFY `penerbitan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengabdian`
--
ALTER TABLE `pengabdian`
  MODIFY `pengabdian_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengelolaan_jurnal`
--
ALTER TABLE `pengelolaan_jurnal`
  MODIFY `pengelolaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `penghargaan`
--
ALTER TABLE `penghargaan`
  MODIFY `penghargaan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `publikasi_buku`
--
ALTER TABLE `publikasi_buku`
  MODIFY `publikasi_buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `publikasi_jurnal`
--
ALTER TABLE `publikasi_jurnal`
  MODIFY `publikasi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `publikasi_prosiding`
--
ALTER TABLE `publikasi_prosiding`
  MODIFY `prosiding_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `staf_ahli`
--
ALTER TABLE `staf_ahli`
  MODIFY `staf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tahun`
--
ALTER TABLE `tahun`
  MODIFY `TahunID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `visiting_lecturer`
--
ALTER TABLE `visiting_lecturer`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
