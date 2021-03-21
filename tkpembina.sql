-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2021 pada 05.24
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tkpembina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buktistatuses`
--

CREATE TABLE `buktistatuses` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `bukti_id` int(10) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buktistatuses`
--

INSERT INTO `buktistatuses` (`id`, `user_id`, `bukti_id`, `status`, `created_at`, `updated_at`) VALUES
(29, 62, 80, 'Terima', '2021-02-25 15:08:57', '2021-02-25 15:08:57'),
(30, 61, 79, 'Terima', '2021-02-25 15:09:13', '2021-02-25 15:09:13'),
(31, 58, 77, 'Terima', '2021-02-25 15:09:17', '2021-02-25 15:09:17'),
(32, 59, 78, 'Terima', '2021-02-25 15:09:27', '2021-02-25 15:09:27'),
(33, 70, 83, 'Terima', '2021-02-25 15:36:25', '2021-02-25 15:36:25'),
(34, 64, 84, 'Terima', '2021-02-25 15:38:16', '2021-02-25 15:38:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calonbuktis`
--

CREATE TABLE `calonbuktis` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data_calon_id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `metode` varchar(100) NOT NULL,
  `pemilik` varchar(200) NOT NULL,
  `bukti` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calonbuktis`
--

INSERT INTO `calonbuktis` (`id`, `user_id`, `data_calon_id`, `nama`, `metode`, `pemilik`, `bukti`, `created_at`, `updated_at`) VALUES
(77, 58, 76, 'satu', 'ATM', 'sayo', '1614248458_tf.jpg', '2021-02-25 10:20:58', '2021-02-25 10:20:58'),
(78, 59, 77, 'Dedek', 'E-BANKING', 'dea', '1614248877_tfr.jpg', '2021-02-25 10:27:57', '2021-02-25 10:27:57'),
(79, 61, 78, 'yola', 'ATM', 'sasa', '1614249390_tf.jpg', '2021-02-25 10:36:30', '2021-02-25 10:36:30'),
(80, 62, 79, 'rainal', 'Setor Tunai', 'Demo', '1614249665_tff.jpg', '2021-02-25 10:41:05', '2021-02-25 10:41:05'),
(81, 68, 83, 'Arkan Al-Ghifary', 'Setor Tunai', 'Arkan', '1614266902_tff.jpg', '2021-02-25 15:28:22', '2021-02-25 15:28:22'),
(82, 69, 84, 'Padli', 'ATM', 'Rain', '1614267086_tf.jpg', '2021-02-25 15:31:26', '2021-02-25 15:31:26'),
(83, 70, 85, 'Dwi Rahmini', 'E-BANKING', 'Demo', '1614267321_tfr.jpg', '2021-02-25 15:35:21', '2021-02-25 15:35:21'),
(84, 64, 80, 'Firman', 'Setor Tunai', 'sayo', '1614267445_tfr.jpg', '2021-02-25 15:37:25', '2021-02-25 15:37:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calondatas`
--

CREATE TABLE `calondatas` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `calon_id` varchar(150) NOT NULL,
  `id_registrasi` varchar(50) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `panggilan` varchar(150) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tempat` varchar(200) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `jalan` varchar(250) NOT NULL,
  `lurah` varchar(100) NOT NULL,
  `camat` varchar(100) NOT NULL,
  `kotakab` varchar(100) DEFAULT NULL,
  `kodepos` varchar(100) NOT NULL,
  `jarak` varchar(10) NOT NULL,
  `transportasi` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `warganegara` varchar(10) NOT NULL,
  `anakke` varchar(50) NOT NULL,
  `berat` varchar(50) NOT NULL,
  `tinggi` varchar(50) NOT NULL,
  `saudara` varchar(50) NOT NULL,
  `goldarah` varchar(10) NOT NULL,
  `penyakit` varchar(200) NOT NULL,
  `imunisasi` varchar(200) NOT NULL,
  `cirikhusus` varchar(200) DEFAULT NULL,
  `ayah` varchar(200) NOT NULL,
  `ttlayah` varchar(100) NOT NULL,
  `ibu` varchar(200) NOT NULL,
  `ttlibu` varchar(100) NOT NULL,
  `nokk` varchar(100) NOT NULL,
  `pendidikanayah` varchar(50) NOT NULL,
  `pendidikanibu` varchar(50) NOT NULL,
  `kerjaayah` varchar(100) NOT NULL,
  `kerjaibu` varchar(100) NOT NULL,
  `hpayah` varchar(20) NOT NULL,
  `hpibu` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL,
  `bayar` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calondatas`
--

INSERT INTO `calondatas` (`id`, `user_id`, `calon_id`, `id_registrasi`, `nama`, `panggilan`, `jk`, `tempat`, `ttl`, `nik`, `jalan`, `lurah`, `camat`, `kotakab`, `kodepos`, `jarak`, `transportasi`, `agama`, `warganegara`, `anakke`, `berat`, `tinggi`, `saudara`, `goldarah`, `penyakit`, `imunisasi`, `cirikhusus`, `ayah`, `ttlayah`, `ibu`, `ttlibu`, `nokk`, `pendidikanayah`, `pendidikanibu`, `kerjaayah`, `kerjaibu`, `hpayah`, `hpibu`, `status`, `bayar`, `created_at`, `updated_at`) VALUES
(76, 58, 'satu', NULL, 'Satuan', 'satu', 'Perempuan', 'Jambi', '2015-09-08', '1272070409280202', 'Jl. pangeran', 'Kenali', 'Kota Baru', 'Jambi', '32212', '8', 'Mobil', 'Islam', 'WNI', '2', '23', '120', '1', 'AB', 'Tidak Ada', 'Polio', NULL, 'Ayah', '1989-12-02', 'Ibu', '1990-09-11', '070409280070409280', 'S2', 'D3', 'Wiraswasta', 'PNS/TNI/Polri', '08521112223', '08522255565', 'DITERIMA', 'BAYAR', '2021-02-25 03:10:57', '2021-02-25 03:51:23'),
(77, 59, 'Dedek', NULL, 'dedek', 'dek', 'Laki-Laki', 'Jambi', '2016-02-11', '1272070409280202', 'Jl. Mayang', 'Mayang Mangurai', 'Kota Baru', 'Jambi', '36121', '10', 'Motor', 'Islam', 'WNI', '1', '28', '120', '1', 'A', 'Tidak Ada', 'Polio', 'Tidak Ada', 'Ayah', '1988-06-11', 'Ibu', '1994-09-09', '1272070409280202', 'S2', 'D1', 'Wiraswasta', 'PNS/TNI/Polri', '081311334562', '08511155561', 'DITERIMA', 'BAYAR', '2021-02-25 03:26:08', '2021-02-25 03:51:05'),
(78, 61, 'yola', NULL, 'Yolanda', 'Yol', 'Perempuan', 'Jambi', '2015-10-10', '1272070409280202', 'Perum. Puri Mayang', 'Mayang Mangurai', 'Alam Barajo', 'Jambi', '3623', '15', 'Mobil', 'Islam', 'WNI', '1', '20', '100', '1', 'O', 'Tidak Ada', 'Polio', NULL, 'Ayah', '1990-08-19', 'Ibu', '1999-09-09', '12720704092', 'D4/S1', 'D3', 'PNS/TNI/Polri', 'Tidak Bekerja', '08525556765', '086555656', 'DITERIMA', 'BAYAR', '2021-02-25 03:33:52', '2021-02-25 03:51:00'),
(80, 64, 'Firman', NULL, 'Wulan', 'lan', 'Perempuan', 'Jambi', '2016-03-23', '1272070409280202', 'Jambi', 'Jambi Timur', 'Jambi Timur', 'Jambi', '3342', '22', 'Motor', 'Islam', 'WNI', '1', '23', '108', '2', 'O', 'Tidak Ada', 'Campak', 'Tidak Ada', 'Ayah', '1980-06-05', 'Ibu', '1990-08-09', '12720704092', 'D3', 'D1', 'Peternak', 'Petani', '087666767', '089909898', 'DITERIMA', 'BAYAR', '2021-02-25 03:48:00', '2021-02-25 08:37:25'),
(81, 65, 'Fery', NULL, 'Sinta', 'sin', 'Perempuan', 'Jambi', '2015-09-08', '1272070409280202', 'Jl. Mayang Mangurai', 'Mayang Mangurai', 'Alam Barajo', 'Kota Jambi', '435621', '5', 'Motor', 'Islam', 'WNI', '2', '22', '129', '2', 'B', 'Tidak Ada', 'Campak', 'Tidak Ada', 'Ayah', '1980-09-08', 'Ibu', '1990-08-09', '2070409280202', 'D3', 'SMA', 'Petani', 'PNS/TNI/Polri', '08999565454', '08522555142', 'DIVERIFIKASI', 'BELUM', '2021-02-25 08:13:31', NULL),
(82, 67, 'revo', NULL, 'Adinda', 'din', 'Perempuan', 'Jambi', '2015-07-22', '1272070409280202', 'Jl. Rd. Pamuk', 'Kenali', 'Kota Baru', 'Jambi', '361661', '6', 'Motor', 'Islam', 'WNI', '1', '29', '104', '1', 'A', 'Tidak Ada', 'Polio', 'Tidak Ada', 'Ayah', '1998-08-08', 'Ibu', '1999-09-09', '2070409280202', 'D1', 'S2', 'PNS/TNI/Polri', 'PNS/TNI/Polri', '0855444545', '085213334343', 'DIVERIFIKASI', 'BELUM', '2021-02-25 08:21:37', NULL),
(83, 68, 'Arkan Al-Ghifary', NULL, 'abdul', 'dul', 'Laki-Laki', 'Jambi', '2015-09-08', '1272070409280202', 'Jl. Siswa', 'Kenali', 'kota baru', 'Jambi', '36124', '4', 'Motor', 'Islam', 'WNI', '1', '22', '109', '1', 'O', 'Tidak Ada', 'Polio', 'Tidak ada', 'Ayah', '1990-05-08', 'Ibu', '1997-09-08', '2070409280202', 'D1', 'D4/S1', 'Petani', 'PNS/TNI/Polri', '0853334343', '0852223112', 'DIVERIFIKASI', 'BAYAR', '2021-02-25 08:26:37', '2021-02-25 08:28:23'),
(84, 69, 'Padli', NULL, 'Raiva', 'rain', 'Laki-Laki', 'Jambi', '2015-09-08', '1272070409280202', 'Jl. Mayang Mangurai', 'Mayang Mangurai', 'Kota Baru', 'Jambi', '36142', '9', 'Mobil', 'Islam', 'WNI', '1', '30', '129', '1', 'B', 'Tidak Ada', 'Polio', 'Tidak Ada', 'Ayah', '1997-09-05', 'Ibu', '1999-09-22', '2070409280202', 'S2', 'S2', 'PNS/TNI/Polri', 'PNS/TNI/Polri', '08521455543', '085255544454', 'DIVERIFIKASI', 'BAYAR', '2021-02-25 08:31:07', '2021-02-25 08:31:26'),
(85, 70, 'Dwi Rahmini', NULL, 'Mia', 'mi', 'Perempuan', 'Jambi', '2015-09-09', '1272070409280202', 'JL. Vila Kenali', 'Mayang Mangurai', 'Alam Barajo', 'Jambi', '36212', '9', 'Mobil', 'Islam', 'WNI', '1', '20', '125', '1', 'O', 'Tidak Ada', 'Polio', NULL, 'Ayah', '1996-09-08', 'Ibu', '1997-09-08', '2070409280202', 'SMA', 'S2', 'PNS/TNI/Polri', 'PNS/TNI/Polri', '085212224567', '085215557898', 'DITERIMA', 'BAYAR', '2021-02-25 08:35:07', '2021-02-25 08:35:55'),
(86, 71, 'Demo', NULL, 'Sinta', 'Sin', 'Perempuan', 'Jambi', '2015-06-15', '1272070409280202', 'Jl. Mayang', 'Mayang Mangurai', 'Kota Baru', 'Jambi', '36214', '5', 'Motor', 'Islam', 'WNI', '1', '25', '108', '2', 'B', 'Tidak Ada', 'Polio', 'Tidak Ada', 'Ayah', '1980-09-08', 'Ibu', '1990-09-08', '127026667080', 'D4/S1', 'D4/S1', 'PNS/TNI/Polri', 'PNS/TNI/Polri', '085215455556', '08521555876', 'BATAL', 'BELUM', '2021-02-26 00:40:58', '2021-02-26 00:48:43'),
(88, 62, 'rainal', 'REG-202103-033433', 'rainal', 'coba', 'Laki-Laki', 'Jambi', '2018-12-06', '1272070409280202', 'hjla', 'Mayang Mangurai', 'aa', 'Jambi', '1', '3', 'motor', 'Islam', 'WNI', '1', '1', '1', '1', 'A', 'a', '1', 'tidak ada', 'Ayah', '1985-12-31', 'Ibu', '2003-10-31', '1272070409280202', 'SD', 'SD', 'Nelayan', 'Tidak Bekerja', '14', '9', 'DIVERIFIKASI', 'BAYAR', '2021-03-01 20:34:33', '2021-03-01 21:21:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `calons`
--

CREATE TABLE `calons` (
  `id` int(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calons`
--

INSERT INTO `calons` (`id`, `user_id`, `nama`, `email`, `status`, `created_at`, `updated_at`) VALUES
(31, 58, 'satu', 'satu@gmail.com', 'DIVERIFIKASI', '2021-02-21 09:12:47', '2021-02-21 09:12:47'),
(32, 59, 'Dedek', 'dedek@gmail.com', 'DIVERIFIKASI', '2021-02-22 14:12:37', '2021-02-22 14:12:37'),
(33, 61, 'yola', 'yola@gmail.com', 'DIVERIFIKASI', '2021-02-22 14:20:04', '2021-02-22 14:20:04'),
(34, 62, 'rainal', 'rainal@gmail.com', 'DIVERIFIKASI', '2021-02-22 15:05:20', '2021-02-22 15:05:20'),
(35, 63, 'Firman', 'firman@gmail.com', 'DIVERIFIKASI', '2021-02-25 10:44:27', '2021-02-25 10:44:27'),
(36, 64, 'Firman', 'firman@gmail.com', 'DIVERIFIKASI', '2021-02-25 10:45:40', '2021-02-25 10:45:40'),
(37, 65, 'Fery', 'fery@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:11:20', '2021-02-25 15:11:20'),
(38, 66, 'nanda', 'nanda@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:18:42', '2021-02-25 15:18:42'),
(39, 67, 'revo', 'revo@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:19:21', '2021-02-25 15:19:21'),
(40, 68, 'Arkan Al-Ghifary', 'arkan@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:24:30', '2021-02-25 15:24:30'),
(41, 69, 'Padli', 'padlirainal@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:28:47', '2021-02-25 15:28:47'),
(42, 70, 'Dwi Rahmini', 'dwi@gmail.com', 'DIVERIFIKASI', '2021-02-25 15:33:15', '2021-02-25 15:33:15'),
(43, 71, 'Demo', 'demo@gmail.com', 'DIVERIFIKASI', '2021-02-26 07:35:42', '2021-02-26 07:35:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakegiatans`
--

CREATE TABLE `datakegiatans` (
  `id` int(10) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datakegiatans`
--

INSERT INTO `datakegiatans` (`id`, `judul`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Agama & Akhlak Mulia', 'Program pembelajaran agama dan akhlak mulia dimaksudkan untuk peningkatan potensi spiritual peserta didik melalui contoh pengalaman dari pendidik agar menjadi kebiasaan sehari-hari, baik di dalam mapupun di luar sekolah sehingga menjadi bagian dari budaya', '2021-01-15 22:52:35', '2021-01-15 22:52:35'),
(2, 'Social & Kepribadian', 'Program pembelajaran social dan kepribadian dimaksudkan untuk pembentukan kesadaran dan wawasan peserta didik atas hak dan kewajibannya sebagai warga masyarakat dan dalam interaksi social serta pemahaman terhadap diri dan peningkatan kulaitas diri sebagai', '2021-01-16 00:10:18', '2020-11-06 18:42:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapegawais`
--

CREATE TABLE `datapegawais` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nip` varchar(200) DEFAULT NULL,
  `jabatan` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapegawais`
--

INSERT INTO `datapegawais` (`id`, `nama`, `nip`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Siti Aisyah, S.Pd', '196211091986092001', 'Kepala TK', '2021-01-15 13:30:41', '2021-02-23 08:54:58'),
(8, 'Ropiah, S.Pd', '196407101986022004', 'Guru', '2021-02-24 03:27:07', '2021-02-24 03:27:07'),
(9, 'ERNA, S.Pd AUD', '196912012000122002', 'Guru', '2021-02-24 03:29:17', '2021-02-24 03:29:17'),
(10, 'SUSANA, S.Pd', '197206052000122003', 'Guru', '2021-02-24 03:29:35', '2021-02-24 03:29:35'),
(11, 'NOVIANTI, S.Pd AUD', '197911132005012005', 'Guru', '2021-02-24 03:29:48', '2021-02-24 03:29:48'),
(12, 'JULIANI SIHOMBING, S.Pd', '197207092012122001', 'Guru', '2021-02-24 03:30:11', '2021-02-24 03:30:11'),
(13, 'JAMILAH', '196512132014072008', 'Guru', '2021-02-24 03:30:26', '2021-02-24 03:30:26'),
(14, 'Said Zein', NULL, 'Guru Iqro', '2021-02-24 03:32:53', '2021-02-24 03:32:53'),
(15, 'Zunifal Hendri, S.Kom', NULL, 'T.U', '2021-02-24 03:33:06', '2021-02-24 03:34:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datasiswas`
--

CREATE TABLE `datasiswas` (
  `id` int(10) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat` varchar(100) NOT NULL,
  `ttl` date DEFAULT NULL,
  `nik` varchar(50) NOT NULL,
  `ayah` varchar(200) NOT NULL,
  `ibu` varchar(200) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datasiswas`
--

INSERT INTO `datasiswas` (`id`, `nama`, `jk`, `tempat`, `ttl`, `nik`, `ayah`, `ibu`, `pekerjaan`, `alamat`, `kecamatan`, `created_at`, `updated_at`) VALUES
(9, 'Muhammad Hafizh Mahardika', 'Laki-Laki', 'Jambi', '2015-09-05', '1571020410150005', 'Harmoko', 'Superiyanti', 'PNS/TNI/POLRI', 'R. Wijaya', 'Thehok', '2021-02-23 21:19:18', '2021-02-24 04:19:18'),
(10, 'Muhammad Fahri Azizi', 'Laki-Laki', 'Jambi', '2015-10-21', '1571082110150001', 'Andri', 'Sophie.A', 'Swasta', 'Gajah Mada', 'Jelutung', '2021-02-24 07:51:52', '2021-02-24 14:51:52'),
(11, 'M. Davinzio Al Fatih', 'Laki-Laki', 'Jambi', '1015-08-28', '1571072808150001', 'Zunifal Hendri', 'Atika Fitri', 'Honorer', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-24 07:57:48', '2021-02-24 14:57:48'),
(12, 'Arkan Al-Ghifary', 'Laki-Laki', 'Jambi', '2015-11-15', '1504041411150001', 'Andi Mora', 'Aurelia Dini.', 'Wiraswasta', 'P. Hidayat', 'Kota Baru', '2021-02-24 07:59:02', '2021-02-24 14:59:02'),
(13, 'Azel Haziq Shakeel', 'Laki-Laki', 'Jambi', '2016-07-04', '1571070407160001', 'Roma Arnandes', 'Desi Dwi Putri', 'Wiraswasta', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-24 08:02:11', '2021-02-24 15:02:11'),
(14, 'Desvira Aulia Zahra', 'Perempuan', 'Jambi', '2015-12-20', '1505056012150001', 'Sandra Wahyudi', 'Yesi Susanti', 'PNS/TNI/Polri', 'Jl. Prof Yasmin', 'Jelutung', '2021-02-24 08:03:40', '2021-02-24 15:03:40'),
(15, 'Hanum Hanania Qonita', 'Perempuan', 'Jambi', '2015-11-26', '1571076611150001', 'Mariyadi', 'Novianti', 'PNS/TNI/Polri', 'Perum Guru', 'Kota Baru', '2021-02-24 08:04:58', '2021-02-24 15:04:58'),
(16, 'Nadine Marissa Praja', 'Perempuan', 'Jambi', '2016-03-12', '1571085203160002', 'Andi Praja', 'Epa', 'Wiraswasta', 'Platur Purnama', 'Kota Baru', '2021-02-24 09:36:41', '2021-02-24 16:36:41'),
(17, 'Qaireen', 'Perempuan', 'Jambi', '2016-05-06', '1571074605160004', 'Sulaiman', 'Mastri.S', 'Wiraswasta', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-24 09:37:48', '2021-02-24 16:37:48'),
(18, 'Valencia', 'Perempuan', 'Jambi', '2016-02-09', '1571084902160001', 'Yanto', 'Delvia', 'Lainnya.', 'Kirana II', 'Jelutung', '2021-02-24 09:38:43', '2021-02-24 16:38:43'),
(19, 'Achmad Luthfie Maulana', 'Laki-Laki', 'Jambi', '2015-01-23', '1571072301150002', 'Wahyudi', 'Mucharni', 'Wiraswasta', 'Perum Guru', 'Kota Baru', '2021-02-24 09:40:04', '2021-02-24 16:40:04'),
(164, 'Ahmad Dzikrullah Supriyadi', 'Laki-Laki', 'Jambi', '2015-04-26', '1571072604150005', 'Edy Supriyadi', 'Ratnawati', 'Lainnya.', 'Jl. Sunan Giri', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:31:39'),
(165, 'Aqra Zahre Abbasy', 'Perempuan', 'Jambi', '2015-01-29', '1571072901150003', 'Pardiansyah', 'Renita Januasti', 'Wiraswasta', 'Sunan Giri Kel. S III S', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:33:09'),
(166, 'Enzofiandra Arsakha Tawaffal', 'Laki-Laki', 'Jambi', '2015-08-20', '1571072008150001', 'Fernada Tawaffal', 'Snova Senja Dwi. P', 'PNS/TNI/Polri', 'Jl. Sari Bakti', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:34:00'),
(167, 'Fauzannoly Milano', 'Laki-Laki', 'Jambi', '2015-08-22', '1571072208150001', 'Yuliano.M', 'Lilik', 'Wiraswasta', 'KH. Ismail Malik', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:34:36'),
(168, 'M. Zaki Mirza', 'L', 'Jambi', NULL, '1571070508150005', 'Novri Ariansyah', 'Dessy T', 'K. Swasta', 'Kimaja', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(169, 'Septian Al Rasyid', 'L', 'Jambi', NULL, '1571070609140004', 'Antoni', 'Fala Yastati', 'K. Swasta /Irt', 'Spalatur IV Kel. Paal Lima', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(170, 'Aisyah Shidqia Arimi', 'P', 'Padang', NULL, '1371064507150010', 'Tommy. S', 'Ririn', 'K. Swasta', 'Perum. Pesona', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(171, 'Azalea Zhafira Ediasti', 'P', 'Jambi', NULL, '1571076007150001', 'Edia Saputra', 'Betty', 'Swasta', 'P. Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(172, 'Glissandria Ereiskha Ershad', 'P', 'Jambi', NULL, '1571086310140001', 'Yanuar Ershad', 'Geiskha Erwin', 'PNS', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(173, 'Gwyvaleska Ereiskha Ershad', 'P', 'Jambi', NULL, '1571086310140002', 'Yanuar Ershad', 'Geiskha Erwin', 'PNS', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(174, 'Imelda Febriani Rosadi', 'P', 'Jambi', NULL, '1571075202150007', 'Supriyadi', 'Roslina', 'K. Swasta', 'Mayor Marzuki', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(175, 'Inaya Isfa Shabira', 'P', 'Jambi', NULL, '1571074501150001', 'Iskandar', 'Andi Fauziah', 'Swasta', 'Peru. Villa ', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(176, 'Khanza Humaira', 'P', 'Jambi', NULL, '1571075307150004', 'Hendri', 'Sri Mulyani', 'Wiraswasta', 'Jl. Jambi', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(177, 'Meysha Eveline Lim', 'P', 'Jambi', NULL, '1571075207160001', 'Asanudin', 'Susanti', 'Swasta', 'Serunai Malam', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(178, 'Syahira Malika Putry', 'P', 'Jambi', NULL, '1571086808150002', 'Rd. Feri Pirdaus', 'Mike Purnama Sari', 'K. Swasta', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(179, 'Rafanda Putri Inara', 'P', 'Jambi', NULL, '1571074606150001', 'Muchairil Fikri', 'Kurnia Apriyanti', 'Honorer', 'Kimaja Lrg. Arizona', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(180, 'Billal Raziq Ramadhan', 'L', 'Jambi', NULL, '1571072107150004', 'Cecep Supriyadi', 'Febriyanti', 'K. Swasta/Irt', 'Jl. Siswa No. 33 ', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(181, 'Byan Adelio Pratama', 'L', 'Jambi', NULL, '1571073103150004', 'Sardedi', 'Erlina Sari', 'K. Swasta', 'Sunan Kali Jaga', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(182, 'Dandi Aldavi', 'L', 'Jambi', NULL, '1571022506140001', 'Nopriansya', 'Yuli Sustiani', 'Guru', 'H. Adam Malik', 'Jambi Selatan', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(183, 'Muhammad Pitto ', 'L', 'Jambi', NULL, '1571112605140001', 'Haryanto', 'Pithriyati', 'Wiraswasta', 'TMD Damai', 'Paal Merah', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(184, '', '', '', NULL, '', '', '', '', '', '', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(185, 'Muhammad Fakhrezy AL Azza', 'L', 'Jambi', NULL, '1505030108150001', 'M. Fakrurozy', 'Sri Ayu Hartati', 'Wiraswasta', 'Jl. Sari Bakti', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(186, 'Muhammad Al Nazril', 'L', 'Jambi', NULL, '1571071812140002', 'Doni', 'Rahmawaty', 'Wiraswasta', 'Jl. TP. Sriwijaya', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(187, 'Maahir Alfred Tamir', 'L', 'Jambi', NULL, '1571070401150001', 'Jufri ', 'Suyati', 'K. Swasta', 'Sunan Ampel', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(188, 'Luqman Al Hadi', 'L', 'Jambi', NULL, '1571071212140011', 'Sulaiman', 'Baiputri Agustini', 'Perawat', 'Jl. Kimaja', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(189, 'Alya Ramadhani Akmal', 'P', 'Jambi', NULL, '1571096706150002', 'Akmaluddin Ilyas', 'Lili Wardani', 'PNS', 'Jl. Suanang Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(190, 'Aqila Rahma Afriza', 'P', 'Jambi', NULL, '', 'Afrizal', 'Nurlaila', 'Pedagang', 'P. Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(191, 'Audra Gavin Aryamehr', 'P', 'Jambi', NULL, '1571072401150005', 'Zulhendry Ary Amehr', 'Pebrini', 'Swasta', 'Jl. Pengeran Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(192, 'Bilqis Humairoh Salim', 'P', 'Jambi', NULL, '1571075912140001', 'Agus Salim', 'Paridah', 'Buruh HL', 'P. Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(193, 'Hana Tasya', 'P', 'Muaro Jambi', NULL, '1505056809150003', 'Edy Subara', 'Eka Jasa Gusrini', 'Polri', 'Pondok Meja', 'Mestong', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(194, 'Humairoh Jasmin', 'P', 'Jambi', NULL, '1571034906150004', 'Akhmad Firdaus', 'Amalia', 'Swasta', 'Orang Kayo Pingai', 'Jambi Timur', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(195, 'Miftahul Jannah', 'P', 'Jambi', NULL, '1571076312140003', 'Jumadi', 'Maryatul', 'PNS', 'J.P. Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(196, 'Sifa Faradiba Hayva', 'P', 'Jambi', NULL, '1571075603150002', 'Ismail', 'Areka', 'Guru', 'Jl. Batam Indah', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(197, 'Alvaro Wisley Valian Sibuea', 'L', 'Jambi', NULL, '1571072605150003', 'Edison Sibuen', 'Wirdayani ', 'Swasta', 'Kasturi I ', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(198, 'Boni Manumpak Pangaribuan', 'L', 'Jambi', NULL, '1571072205150003', 'Parulian Pangaribuan', 'Farida Yentie', 'K. Swasta/Irt', 'Jl. Pesona Jambi', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(199, 'Frans Leonhard Lumban Gaol', 'L', 'Sampetua', NULL, '1216082712130001', 'Hanaekan Lumban', 'Pinta Rawati.S', 'Wiraswasta', 'Jl. Nusa Inda 2 Lrg Bangsa', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(200, 'Muhammad Rafi', 'L', 'Jambi', NULL, '1571072203150002', 'Ranu Alfad', 'Evriyana Siregar', 'Polri /Irt', 'Sunan Giri Kel. S III S', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(201, 'M. Kevin Riyantio Al Ghifari', 'L', 'Jambi', NULL, '1571071609140006', 'Jufri', 'Dessy Damayanti', 'K. Swasta', 'Sunan Kali Jaga', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(202, 'M. Alham Aqro Raziq Alfatih Dalimunthe', 'L', 'Jambi', NULL, '1571010701150002', 'Hotmatua Dalimunthe', 'Murniati Nasution', 'TNI', 'Perum Villa Permata', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(203, 'Rafie Arsyad Al Faiz', 'L', 'Jambi', NULL, '1571071906150001', 'Rifal', 'Rino Putri', 'Wiraswasta', 'P. Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(204, 'Alicetia Poetri', 'P', 'B. Hari', NULL, '1504015901150001', 'Riki Agustia', 'Siti Sartika', 'K. BUMN', 'Sunang Boang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(205, 'Alika Naila Putri Nasution', 'P', 'Jambi', NULL, '1571077008150002', 'Ibrahim Edi Nasution', 'Ninuk', 'Wiraswasta', 'Jl. Siswa', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(206, 'Almira Azizi', 'P', 'Jambi', NULL, '1571074312140001', 'Benni Susanto', 'Meri', 'K. Swasta', 'Muitatuli', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(207, 'Andi Salsa Sabila', 'P', 'Jambi', NULL, '1571086301150002', 'Andi Basok', 'Marwah', 'Wiraswasta', 'Lirik', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(208, 'Aulya Mardiani', 'P', 'Jambi', NULL, '1571085002150001', 'Mardiefendi', 'Yuliani', 'K. Swasta', 'Kebun daging', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(209, 'Bilkist Hanif', 'P', 'Jambi', NULL, '1571075905150003', 'Kerry Arbian Syan', 'Riska Wahyuni', 'Wiraswasta', 'Sunan Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(210, 'Saqila Arafah', 'P', 'Jambi', NULL, '1505016112140005', 'Sumarjono', 'Sri Mulyani', 'Swasta', 'SP Sei. Duren', 'Muaro Jambi', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(211, 'Umaira As Syifa', 'P', 'Jambi', NULL, '1571074106150005', 'Afrizal', 'Harmaini', 'Dagang', 'TP. Sriwijaya ', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(212, 'Najwa Hizwatul Maulida', 'P', 'Jambi', NULL, '1571085311140003', 'Hardini Apriyanto', 'Jamilah', 'Buruh', 'Merabu', 'Jelutung', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(213, 'Andi Arsy Indra Batara', 'L', 'Sinjai', NULL, '7371031906150003', 'Achmad ', 'Andi Daltika', 'Wiraswasta', 'Lrg. Siswa', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(214, 'Daffa Rafif Arkhan', 'L', 'Jambi', NULL, '1571070908890102', 'Fahmi', 'Vera Idmalita Sari', 'PNS', 'Jl. Gado-gado', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(215, 'Muhammad Arizky', 'L', 'Jambi', NULL, '1571010709140002', 'Rizal', 'Nuriela', 'Swasta', 'Jl. Nusa Indah ', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(216, 'Nabil Zufaro Abrar', 'L', 'Jambi', NULL, '1571082607150002', 'Bharly Faladin', 'Nony N.', 'K. Swasta', 'Kilangan', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(217, 'Omar Daffa Attaya Hadi', 'L', 'Jambi', NULL, '1571042811140001', 'Sofyanhadi', 'Darmawati', 'Karyawan Swasta', 'Jl. Sultan Thaha', 'Pasar Jambi', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(218, 'Asyifa Fariha Raihana', 'P', 'Jambi', NULL, '1571075012140003', 'M. Suhelmi', 'Yana Hindra', 'PNS', 'Jl. Jambi No. 42 ', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(219, 'Aqilla Azzahra Junaidi', 'P', 'Jambi', NULL, '1571076911140001', 'Junaidi', 'Yuni Tri dasa', 'Karyawan Swasta', 'Jl. Pengeran Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(220, 'Aqila Oktavia Putri', 'P', 'Jambi', NULL, '1571075010140005', 'Tri Puji Yulianto', 'Novi Saputri', 'Wiraswasta', 'Jl. Perdana Raya', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(221, 'Everlyn Ardhania', 'P', 'Jambi', NULL, '1571077011150001', 'Yudi Susanto', 'Ervina', 'Wiraswasta', 'Jl. Sunan Bonang', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(222, 'Faiha Annisa Fathin', 'P', 'Jambi', NULL, '1571075405150003', 'Joni ', 'Rian Novita', 'Guru', 'Jl. Platur Purnama', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:19:03'),
(223, 'Ghina Shafwatul Inayah', 'Perempuan', 'Jambi', '2015-09-23', '1507106903150002', 'Robit Helmi', 'Eka Ujiani', 'Wiraswasta', 'Arba II', 'Telanaipura', '2021-02-25 02:19:03', '2021-02-25 09:38:16'),
(224, 'Rasya Azzahra Ramadhani', 'Perempuan', 'Jambi', '2015-06-17', '1272070409280202', 'Aspul Anwar', 'Sri Yarni N', 'Wiraswasta', 'TP. Sriwijaya', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:37:51'),
(225, 'Sekar Ayuning Tyas', 'Perempuan', 'Jambi', '2015-01-27', '1571076701150004', 'Surtaman', 'Sri Partini', 'Lainnya.', 'Sunan Giri Kel. S III S', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:37:01'),
(226, 'Shazia Qiana Rizky', 'Perempuan', 'Jambi', '2014-11-30', '1571077011140003', 'Rizky Yulion Putra', 'Fidinda Ayangsari', 'Lainnya.', 'Jl. Sunan Giri No. 62', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:36:19'),
(227, 'Siren Sofia', 'Perempuan', 'Tapsel, Medan', '2014-09-15', '1571075509140006', 'Sabaruddin Pohan', 'Hutna Leli Sormin', 'Lainnya.', 'Jl. Pengeran Hidayat', 'Kota Baru', '2021-02-25 02:19:03', '2021-02-25 09:35:44'),
(228, 'R.A Rani Ufaira Nur Afifa', 'Perempuan', 'Jambi', '2014-11-03', '1571074311140001', 'Rd. Arjuli Tabrani', 'Purnaningsih', 'Wiraswasta', 'TP. Sriwijaya', 'Alam Barajo', '2021-02-25 02:19:03', '2021-02-25 09:35:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurikulums`
--

CREATE TABLE `kurikulums` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `isi` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kurikulums`
--

INSERT INTO `kurikulums` (`id`, `kode`, `isi`, `created_at`, `updated_at`) VALUES
(2, 'KI-1', 'Menerima ajaran Agama yang dianut.', '2021-02-18 16:36:14', '2021-02-18 16:59:33'),
(3, 'KI-2', 'Memiliki perilaku hidup sehat, rasa ingin tahu, kreatif dan estetis, percaya diri, disiplin, mandiri, peduli, mampu menghargai dan toleran kepada orang lain, mampu menyesuaikan diri, tanggung jawab, jujur, rendah hati dan santun dalam berinteraksi dengan keluarga, pendidikan dan teman', '2021-02-18 17:02:55', '2021-02-23 08:48:56'),
(4, 'KI-3', 'Mengenali diri, keluarga, teman, pendidik, lingkungansekitar, agama, teknologi, seni, dan budaya di rumah,tempat bermain dan satuan PAUD dengan cara: mengamati dengan indera (melihat, mendengar, menghidu, merasa, meraba); menanya; mengumpulkan informasi; menalar, dan mengomunikasikan melalui kegiatan bermain.', '2021-02-23 08:49:50', '2021-02-23 08:49:50'),
(5, 'KI-4', 'Menunjukkan yang diketahui, dirasakan, dibutuhkan, dan dipikirkan melalui bahasa, musik, gerakan, dan karya secara produktif dan kreatif, serta mencerminkan perilaku anak berakhlak mulia.', '2021-02-23 08:51:58', '2021-02-23 08:51:58');

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
(2, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', NULL, '$2y$10$cpFvN5MR3/BszjDNQ4yULeorkJUGk8J3usbIqxZ6qomuuXYXZ7uQa', NULL, '2020-11-21 22:49:28', '2020-11-21 22:49:28'),
(58, 'siswa', 'satu', 'satu@gmail.com', NULL, '$2y$10$Y58P4x0KoWooqnX50rj1mO9XdoAQpE8h9GI8UP1idK9DXWpSbIRl6', '5g7EoTvRLlXAw7l5rQ2m4IqlpBG6Up4RxtFTEXM5tcqjZfKuGk4fnLV41l8x', '2021-02-21 02:12:47', '2021-02-21 02:12:47'),
(59, 'siswa', 'Dedek', 'dedek@gmail.com', NULL, '$2y$10$vXaILzsJ7qGWC4HqYkWyXerQ4eqVVeP89WZ5HDri8rtJIHX2JHccW', 'OkKD20qzSTjYP5OvQN9DWl9wGBzAMSrrT2STfQkUk6pPoZpfXe8sgcxTBmkF', '2021-02-22 07:12:37', '2021-02-22 07:12:37'),
(61, 'siswa', 'yola', 'yola@gmail.com', NULL, '$2y$10$ORf4BN0kLp2VFXqc2AK4R.vG3MfhR4VZOZbMff9q7oYSlKJTle2g.', 'GgX14Z12JcWgmQitm0PIGNx3JMMAz9gDWdQnIPouqe3S4SnRJQvc3IJI6non', '2021-02-22 07:20:04', '2021-02-22 07:20:04'),
(62, 'siswa', 'rainal', 'rainal@gmail.com', NULL, '$2y$10$P0LlJbYuz3ygA.O8i01L1Oqp08aCDvV6qwi2Sq3fqsvyU5h6TvWkG', 'PbJC4zJrkUOZLEbAUqDB0rNZMFOFggyUuhvbPNmYZnbTJEeCtx6nIw6zCAB4', '2021-02-22 08:05:20', '2021-02-22 08:05:20'),
(64, 'siswa', 'Firman', 'firman@gmail.com', NULL, '$2y$10$g6ySHNRYyJEeIubu8HIvxuNMncX5YvoAgEVofwM8MQ.bWdj4HVCBS', 'nNhkHskiWlgNfZLty0DebOYTJjO4fC17PAiMRhwvL43gbC80nQrR1Q5wnUOj', '2021-02-25 03:45:40', '2021-02-25 03:45:40'),
(65, 'siswa', 'Fery', 'fery@gmail.com', NULL, '$2y$10$wp0DXksX2/Y.XlI8JTw7s.JqhQYKalmF.TkWKOxo6thpFOPFfehZm', 'mhUChYxYkpC87I3KRcgC6KAWYZpy7l5LOBCt7a7pvTayiUDull6NPHn0IH1F', '2021-02-25 08:11:20', '2021-02-25 08:11:20'),
(66, 'siswa', 'nanda', 'nanda@gmail.com', NULL, '$2y$10$fDTm4GrWl/jXbRS5molZyu1Yik/G/.bLxfROwtLCs4HmwRcrf8jtG', 'wrTzvEa2Fh4EhKiz8qzHAumWAjzy7ObZAN595Iih82zMFA9lGVtrCU7CLNwX', '2021-02-25 08:18:42', '2021-02-25 08:18:42'),
(67, 'siswa', 'revo', 'revo@gmail.com', NULL, '$2y$10$ki4XAtLSIS.rUun1kytNo.HwOHN3Qd79sLu/35tySST.3EUa7qEe.', 'rp8U5ENA7KTdJsaVKcBv6svEoiucX8yyfRmB71OJ0VsDVn3cwuGmXemkM0EZ', '2021-02-25 08:19:21', '2021-02-25 08:19:21'),
(68, 'siswa', 'Arkan Al-Ghifary', 'arkan@gmail.com', NULL, '$2y$10$uSQdpZ86fIsZayN2wSv9Q.wehfNbSVsM93i6RDOCr0deUjRZoIdii', 'Ws9vsfmHzrDISnGKG88TcbPTbcXUZFohnC6UmJ91UMMCBKYxJEHRzCD6stv3', '2021-02-25 08:24:30', '2021-02-25 08:24:30'),
(69, 'siswa', 'Padli', 'padlirainal@gmail.com', NULL, '$2y$10$h4uPc1yCJlXwDjMKsr52zOk00F9.rYR9Kod48gXGSNT5ix/vCo0r6', 'L49V0i88NgglmxLDyoP0asdv5a2tDnwNkmqcZKYm4dch5VxV2uSro9vgZzd4', '2021-02-25 08:28:47', '2021-02-25 08:28:47'),
(70, 'siswa', 'Dwi Rahmini', 'dwi@gmail.com', NULL, '$2y$10$eA7EDgEzY9oZnLkmbvxLEOnL0qOZTNKSUGRHwOkNbxaVW3hLuKb1.', 'SelMFvkkvbfnAWDqbLWQukBGpMF8HpIJL6zM75eBLhs1sq2HFx1C3rHHIPfk', '2021-02-25 08:33:15', '2021-02-25 08:33:15'),
(71, 'siswa', 'Demo', 'demo@gmail.com', NULL, '$2y$10$/rwtPAKq/ZrkcqLU9z2VjO2yfN2qEQaiHOufDpPiJzdw40rSZc4di', 'iqp5GqIGLyF3IWqgXXP1lQEqmx25X2uCQEWgbkWObzoMz9wzatkiIc5dXJ3U', '2021-02-26 00:35:42', '2021-02-26 00:35:42');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buktistatuses`
--
ALTER TABLE `buktistatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calonbuktis`
--
ALTER TABLE `calonbuktis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calondatas`
--
ALTER TABLE `calondatas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `calons`
--
ALTER TABLE `calons`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datakegiatans`
--
ALTER TABLE `datakegiatans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapegawais`
--
ALTER TABLE `datapegawais`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datasiswas`
--
ALTER TABLE `datasiswas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kurikulums`
--
ALTER TABLE `kurikulums`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buktistatuses`
--
ALTER TABLE `buktistatuses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT untuk tabel `calonbuktis`
--
ALTER TABLE `calonbuktis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT untuk tabel `calondatas`
--
ALTER TABLE `calondatas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `calons`
--
ALTER TABLE `calons`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `datakegiatans`
--
ALTER TABLE `datakegiatans`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `datapegawais`
--
ALTER TABLE `datapegawais`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `datasiswas`
--
ALTER TABLE `datasiswas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT untuk tabel `kurikulums`
--
ALTER TABLE `kurikulums`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
