-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Sep 2022 pada 04.29
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wazwez_app`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_users`
--

CREATE TABLE `detail_users` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_users`
--

INSERT INTO `detail_users` (`id`, `user_id`, `full_name`, `address`, `gender`, `email`, `mobile_number`) VALUES
(1, 1, 'Faisal Chakiki', 'Tegal', 'male', 'faisalchakiki012018@gmail.com', '085742385602'),
(2, 2, 'Zainuddin Saja', 'Jakarta', 'male', 'zai@gmail.com', '087730076702'),
(17, 12, 'Siti Aisyah', 'Indonesia', 'female', 'stephanie@koinworks.com', '082143213232');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subtasks`
--

CREATE TABLE `subtasks` (
  `id` int(11) NOT NULL,
  `id_tugas` int(11) NOT NULL,
  `nama_subtask` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `subtasks`
--

INSERT INTO `subtasks` (`id`, `id_tugas`, `nama_subtask`) VALUES
(11, 52, 'Low-Fidelity design'),
(12, 52, 'Design Guidelines'),
(13, 52, 'Design Review'),
(21, 52, 'Design Responsive Web'),
(24, 56, 'Alur Web Wazwez'),
(25, 61, 'Algoritma Konversi Suhu'),
(26, 68, 'Membuat Tampilan Wazwez'),
(27, 68, 'Menjalankan Fungsi Wazwez dgn JS and PHP'),
(28, 51, 'Mengembangkan Wazwez Note'),
(35, 56, 'Observasi'),
(40, 54, 'awkward'),
(44, 55, 'test'),
(46, 51, 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_tugas` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `deadline` date NOT NULL,
  `finished` enum('yes','no') DEFAULT 'no',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tasks`
--

INSERT INTO `tasks` (`id`, `user_id`, `nama_tugas`, `deskripsi`, `deadline`, `finished`, `created_at`) VALUES
(51, 1, 'Development', '', '2022-10-07', 'yes', '2022-09-19 14:39:34'),
(52, 1, 'Product Design', 'Tugas untuk design pribadi', '2022-09-19', 'no', '2022-09-19 14:41:39'),
(54, 1, 'Requirement Detail', '', '2022-09-30', 'yes', '2022-09-19 14:43:33'),
(55, 1, 'Backlog Teams', '', '2022-08-25', 'yes', '2022-09-19 14:43:58'),
(56, 1, 'Meeting With Teams', '', '2022-09-19', 'yes', '2022-09-19 14:44:21'),
(61, 1, 'Flowchart', 'Membuat algoritma dengan Flowchart', '0000-00-00', 'no', '2022-09-20 11:52:20'),
(68, 1, 'Create Wazwez Website', '', '2022-09-21', 'no', '2022-09-21 07:43:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'asset/user-icon1.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `avatar`) VALUES
(1, 'zyroka123', '$2y$10$NNDT/ICVMD1h1bH3CQTSe.fLVHh3lOW7F4i4awLb6TMkvk9B3JCse', 'asset/user-icon.jpg'),
(2, 'zainuddin', '$2y$10$hpgOX1SnfTvk7vYW276sVOwiH/QH1S9VHQzuxQ/559wA.KxAHLSpu', 'asset/user-icon1.png\r\n'),
(12, 'user', '$2y$10$tUD/lfsFs6n1qfjMjwwnr.qCCDNb0/wISpkxqHhkIoK1YeKSEsRiW', 'asset/user-icon1.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_subtasks_tasks` (`id_tugas`);

--
-- Indeks untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tasks_users` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT untuk tabel `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_users`
--
ALTER TABLE `detail_users`
  ADD CONSTRAINT `fk_details_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `subtasks`
--
ALTER TABLE `subtasks`
  ADD CONSTRAINT `fk_subtasks_tasks` FOREIGN KEY (`id_tugas`) REFERENCES `tasks` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `fk_tasks_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
