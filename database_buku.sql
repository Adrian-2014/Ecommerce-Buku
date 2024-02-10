-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Des 2023 pada 06.29
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_buku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor` varchar(100) NOT NULL,
  `judul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`id`, `nama`, `email`, `alamat`, `nomor`, `judul`) VALUES
(43, 'rava', 'ravaXharem@gmail.com', 'jl jj yuk', '01729', 'Alan Turing : E N I G M A'),
(44, 'adrian', 'ianSantay@gmail.com', 'bulak kalitunjang', '2014', 'Dark Knight Trilogy'),
(45, 'siti', 'bratang1h@dds', 'hartono', '9737', 'Doomsday Clock'),
(46, 'rafi', 'risa@gmail.cok', 'oiufdxfgh', '865467', 'Doomsday Clock'),
(47, 'rafi', 'vino@gmail.com', 'jhgfd', '88657', 'Pemerograman Web PHP'),
(48, 'pak rizal', 'vino@gmail.com', 'ufhc', '978', 'W H Y ?');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_form`
--

CREATE TABLE `login_form` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `login_form`
--

INSERT INTO `login_form` (`id`, `username`, `password`, `email`, `status`) VALUES
(17, 'ian', '1', 'adrian@gmail.com', 'admin'),
(18, 'rafi', 'riska', 'rafiSayangrRiska@gmail.com', 'user'),
(19, 'rafi', 'rioGey', 'riska@gmail.com', 'user'),
(20, 'pak rizal', '123', 'vino@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `stok` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `judul`, `kategori`, `harga`, `stok`, `img`) VALUES
(17, 'Artificial Intelegence', 'science', '200000', '67', '   artificial intelegence.jpg'),
(18, 'Complete Screenplay : Interstellar', 'sci-fi', '150000', '90', '  Interstellar CS.jpg'),
(19, 'Alone', 'General', '150000', '100', ' alone.jpg'),
(20, 'Batman Who Laugh', 'comic', '100000', '100', ' Batman Who  Laugh.jpg'),
(21, 'Dark Knight : Death Metal', 'comic', '100000', '100', ' Dark Knight Death Metal.jpg'),
(22, 'A Brief History of Time', 'science', '200000', '66', 'A Brief History Of Time.jpg'),
(23, 'Angels & Demons', 'sci-fi', '140000', '50', 'Angels And Demons.jpg'),
(24, 'Biography of Abraham Lincoln', 'Biography', '180000', '100', 'biography abraham lincoln.jpg'),
(25, 'Alan Turing : E N I G M A', 'Biography', '250000', '80', 'biography alan turing.jpg'),
(26, 'Biography Albert Einstein', 'Biography', '100000', '80', 'Biography Albert Einstein.jpg'),
(27, 'Crypto Guide', 'Guide', '100000', '50', 'crypto guide.jpeg'),
(28, 'Doomsday Clock', 'comic', '80000', '80', 'doomsday clock.jpg'),
(29, 'Filososfi Teras', 'General', '100000', '79', 'Filosofi Teras.webp'),
(30, 'God of War Fallen God', 'comic', '120000', '120', 'God Of War fallen god.jpg'),
(32, 'Thr Basic cook book', 'guide', '100000', '100', 'The basic Cook Book.jpg'),
(33, 'Greek Mythology', 'General', '99000', '100', 'Greek Mythology.jpg'),
(34, 'Pemerograman Web PHP', 'Guide', '130000', '103', 'pemrograman web php.jpg'),
(35, 'W H Y ?', 'general', '100000', '98', 'WHY.jpg'),
(36, 'Dark Knight Trilogy', 'Comic', '99000', '70', 'Dark Knight Trilogy.webp'),
(37, 'TENET Complete Screenplay', 'Sci-fi', '200000', '25', 'Tenet Complete Screenplay.webp'),
(39, 'buku', 'Guide', '130000', '78', 'in search Scrodingers cat.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_form`
--
ALTER TABLE `login_form`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `login_form`
--
ALTER TABLE `login_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
