-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 18.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbpl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id_barang`, `id_gudang`, `nama_barang`) VALUES
('GLN07', 'GDG7', 'Galon'),
('GLSG01', 'GDG1', 'Gelas'),
('KRS07', 'GDG7', 'Kursi'),
('PSLG01', 'GDG1', 'Pensil'),
('SPTG04', 'GDG4', 'Sepatu'),
('TS01', 'GDG1', 'Tas');

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
-- Struktur dari tabel `gudang`
--

CREATE TABLE `gudang` (
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gudang`
--

INSERT INTO `gudang` (`id_gudang`, `nama_gudang`, `harga_gudang`, `lokasi_gudang`) VALUES
('GDG1', 'Aqua', '450.000', 'Surabaya'),
('GDG10', 'Teh Botol', '1.239.000', 'Sidoarjo'),
('GDG2', 'Gudang Garam', '300.000', 'Malang'),
('GDG3', 'Gudang Baru', '170.000', 'Surabaya'),
('GDG4', 'Eiger', '400.000', 'Malang'),
('GDG5', 'Nagoya', '200.000', 'Kediri'),
('GDG6', 'Downy', '300.000', 'Kediri'),
('GDG7', 'Vans', '402.000', 'Gresik'),
('GDG8', 'Ayam Jago', '124.000', 'Gresik'),
('GDG9', 'Del Monte', '430.000', 'Sidoarjo');

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
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2023_06_12_081646_create_gudang_table', 1),
(4, '2023_06_13_080815_create_barang_table', 1),
(5, '2023_06_13_081602_create_stok_masuk_table', 1),
(6, '2023_06_13_081614_create_stok_keluar_table', 1),
(7, '2023_06_13_132800_create_stok_masuk_trigger', 1),
(8, '2023_06_13_132814_create_stok_keluar_trigger', 1),
(9, '2023_06_14_053733_create_password_resets_table', 1),
(10, '2023_06_14_080936_create_stocks_table', 1),
(11, '2023_07_12_081646_create_order_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stocks`
--

INSERT INTO `stocks` (`id`, `id_barang`, `stok`, `id_gudang`, `tanggal_update`) VALUES
(2, 'GLN07', 100, 'GDG7', '2023-06-18 16:01:46'),
(2, 'PSLG01', 41, 'GDG1', '2023-06-18 16:03:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_keluar`
--

CREATE TABLE `stok_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stok_keluar`
--

INSERT INTO `stok_keluar` (`id_keluar`, `id_barang`, `tanggal_keluar`, `jumlah`, `keterangan`, `id`, `id_gudang`) VALUES
(1, 'PSLG01', '2023-06-18', 74, 'tes', 2, 'GDG1'),
(2, 'PSLG01', '2023-07-18', 25, 're', 2, 'GDG1');

--
-- Trigger `stok_keluar`
--
DELIMITER $$
CREATE TRIGGER `kurangStok` AFTER INSERT ON `stok_keluar` FOR EACH ROW BEGIN
            -- Calculate the new stock value
            SET @new_stock := (SELECT stok - NEW.jumlah FROM stocks WHERE id_barang = NEW.id_barang AND id_gudang = NEW.id_gudang AND id = NEW.id);

            -- Update the stocks table only if the new stock value is not negative
            IF (@new_stock >= 0) THEN
                UPDATE stocks
                SET stok = @new_stock
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id;
            ELSE
                -- You can handle the case when the stock becomes negative here
                -- For example, you can throw an error or log a warning
                -- This example throws an error message
                SIGNAL SQLSTATE '45000'
                    SET MESSAGE_TEXT = 'Insufficient stock.';
            END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `stok_masuk`
--

CREATE TABLE `stok_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_gudang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `stok_masuk`
--

INSERT INTO `stok_masuk` (`id_masuk`, `id_barang`, `tanggal_masuk`, `jumlah`, `keterangan`, `id`, `id_gudang`) VALUES
(1, 'GLN07', '2023-06-18', 100, 'tes', 2, 'GDG7'),
(2, 'PSLG01', '2023-07-18', 140, 'tes', 2, 'GDG1');

--
-- Trigger `stok_masuk`
--
DELIMITER $$
CREATE TRIGGER `tambahStok` AFTER INSERT ON `stok_masuk` FOR EACH ROW BEGIN
            -- Check if the combination of id_barang and id_gudang already exists
            IF EXISTS (
                SELECT 1
                FROM stocks
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id
            ) THEN
                -- Update the existing row in the stocks table
                UPDATE stocks
                SET stok = stok + NEW.jumlah
                WHERE id_barang = NEW.id_barang
                AND id_gudang = NEW.id_gudang
                AND id = NEW.id;
            ELSE
                -- Insert a new row into the stocks table
                INSERT INTO stocks (id, id_barang, stok, id_gudang)
                VALUES (NEW.id, NEW.id_barang, NEW.jumlah, NEW.id_gudang);
            END IF;
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` bigint(20) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `nohp`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Oliver Sykess', 'olivers@gmail.com', 81234567890, NULL, '$2y$10$lYq/avfmsVFRIZANmBDwPu3JYGcbvzBfUL1og.YQGw3tjg0RJaKme', 'TJck3EyrFH4N0QVM1nZyKr7PQREI36VdXkaybrisKTU0DGRIActcib5bg6RM', '2023-06-18 08:39:59', '2023-06-18 08:52:21'),
(2, 'Fausta Irsyad R', 'irsyad@gmail.com', 81234567890, NULL, '$2y$10$C9/QC0V/LdBbtXNS5DG9aO.4vtoILCh.N84ORhnHu4hv2gftkeZj6', 'aQiyCoFFTSG8BnP6ESoNDPNK2FrgLeLoZs6UOpYHp3uqFFf0GFi49ufap2Gz', '2023-06-18 08:58:38', '2023-06-18 09:05:47');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `barang_id_gudang_foreign` (`id_gudang`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gudang`
--
ALTER TABLE `gudang`
  ADD PRIMARY KEY (`id_gudang`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_harga_gudang_foreign` (`harga_gudang`),
  ADD KEY `order_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD UNIQUE KEY `password_resets_email_unique` (`email`);

--
-- Indeks untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD KEY `stocks_id_barang_foreign` (`id_barang`),
  ADD KEY `stocks_id_gudang_foreign` (`id_gudang`);

--
-- Indeks untuk tabel `stok_keluar`
--
ALTER TABLE `stok_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `stok_keluar_id_barang_foreign` (`id_barang`),
  ADD KEY `stok_keluar_id_gudang_foreign` (`id_gudang`);

--
-- Indeks untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `stok_masuk_id_barang_foreign` (`id_barang`),
  ADD KEY `stok_masuk_id_gudang_foreign` (`id_gudang`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`);

--
-- Ketidakleluasaan untuk tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_harga_gudang_foreign` FOREIGN KEY (`harga_gudang`) REFERENCES `gudang` (`id_gudang`),
  ADD CONSTRAINT `order_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `stocks_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`);

--
-- Ketidakleluasaan untuk tabel `stok_keluar`
--
ALTER TABLE `stok_keluar`
  ADD CONSTRAINT `stok_keluar_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `stok_keluar_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`);

--
-- Ketidakleluasaan untuk tabel `stok_masuk`
--
ALTER TABLE `stok_masuk`
  ADD CONSTRAINT `stok_masuk_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `stok_masuk_id_gudang_foreign` FOREIGN KEY (`id_gudang`) REFERENCES `gudang` (`id_gudang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
