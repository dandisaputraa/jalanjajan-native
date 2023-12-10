-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2023 pada 15.53
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cart_system`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` varchar(50) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `total_price` varchar(100) NOT NULL,
  `product_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_image`, `qty`, `total_price`, `product_code`) VALUES
(89, 'Pisang Epe', '2000', 'g2.jpg', 2, '4000', 'p3'),
(90, 'Jalangkote', '6', 'WhatsApp Image 2023-12-03 at 19.53.06.jpeg', 7, '42', 'hf'),
(91, 'Pallubasa', '20000', 'g4.jpe', -22, '-440000', 'p4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `makanan` varchar(25) NOT NULL,
  `minuman` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pmode` varchar(50) NOT NULL,
  `products` varchar(255) NOT NULL,
  `amount_paid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `address`, `pmode`, `products`, `amount_paid`) VALUES
(12, 'Ade', 'dandi12@gmail.com', '+6285242749453', 'jl. rahmat', 'cod', 'Apple iPhone X(1), LG v30(1)', '155000'),
(13, 'dandi', 'rickyploks@yahoo.com', '+6285242749453', 'sakaakka', 'netbanking', 'Pisang Ijo(1)', '5000'),
(14, 'Dandi Saputra', 'dandi12@gmail.com', '+6285242749453', 'aadadad', 'cod', 'Pisang Epe(1), Pisang Ijo(1)', '22000'),
(15, 'Dandi Saputra', 'dandinosaurusss@gmail.com', '+6285242749453', 'ddaa', 'cod', 'Pisang Ijo(1)', '5000'),
(16, 'Ade', 'dandinosaurusss@gmail.com', '+6285242749453', 'hhkhkhk', 'cod', 'Pisang Epe(1)', '17000'),
(17, 'DANDI SAPUTRA', 'saputraadand@gmail.com', '+6285242749453', 'gjhgjh', 'cod', 'Coto(3)', '60000'),
(18, 'Dandi Saputra', 'dandinosaurusss@gmail.com', '+6285242749453', 'zzdas', 'cod', 'Pisang Epe(1), Coto(1)', '37000'),
(19, 'Ade', 'dandinosaurusss@gmail.com', '+6285242749453', 'sasadada', 'cod', 'Gogos(5), Jalangkote(6), Coto(1)', '60000'),
(20, 'Ade', 'dandinosaurusss@gmail.com', '+6285242749453', 'mbhvj', 'netbanking', 'Coto(1)', '20000'),
(21, 'Ade', 'dandinosaurusss@gmail.com', '+6285242749453', 'hg', 'netbanking', '', '0'),
(22, 'dan', 'dasd@gmail.com', '+6285242749453', 'adadadd', 'netbanking', 'Jalangkote(1)', '5000'),
(23, 'dadad', 'dandinosaurusss@gmail.com', '+6285242749453', 'dadsa', 'cod', 'Mie Titi(1), Jalangkote(2), Coto(1)', '45000'),
(24, 'dadn', 'dandi12@gmail.com', '+6285242749453', 'adadd', 'cod', 'Pisang Epe(2), Jalangkote(2)', '14000'),
(25, 'Dandi Saputra', 'dandinosaurusss@gmail.com', '15.000', '', 'netbanking', 'Jalangkote(2)', '10000'),
(26, 'Dandi Saputra', 'dandsaputraa@gmail.com', '+6285242749453', 'nn', 'cards', 'Jalangkote(1)', '5000'),
(27, 'Dandi Saputra', 'dandinosaurusss@gmail.com', '081241460493', '', 'cod', 'Coto(2)', '40000'),
(28, 'Ade', 'dandsaputraa@gmail.com', '+6285242749453', 'aaaaaaas', 'cod', 'Pisang Epe(2)', '4000'),
(29, 'ajsdjagsd', 'asmdad@gmail.com', '09888888', 'akhdgjad', 'cod', 'Pallubasa(1), Pisang Epe(2), Jalangkote(2)', '34000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_qty` int(11) NOT NULL DEFAULT 1,
  `product_image` varchar(255) NOT NULL,
  `product_code` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_qty`, `product_image`, `product_code`, `category`) VALUES
(14, 'Jalangkote', '5000', 2, 'g10.jpg', 'p2', ''),
(15, 'Pisang Epe', '2000', 2, 'g2.jpg', 'p3', ''),
(16, 'Pallubasa', '20000', 2, 'g4.jpe', 'p4', ''),
(28, 'Jalangkote', '6', 7, 'WhatsApp Image 2023-12-03 at 19.53.06.jpeg', 'hf', 'Makanan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `email`, `username`, `password`, `level`) VALUES
(1, 'dandi', 'dandi@gmail.com', 'admin', '12345', 'admin'),
(2, 'asep', 'asep@gmail.com', 'user', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `product_price` (`product_price`),
  ADD KEY `product_code` (`product_code`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`),
  ADD KEY `email` (`email`);

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code_2` (`product_code`),
  ADD KEY `product_code` (`product_code`),
  ADD KEY `product_name` (`product_name`),
  ADD KEY `product_price` (`product_price`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `nama` (`nama`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_name`) REFERENCES `product` (`product_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_price`) REFERENCES `product` (`product_price`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`product_code`) REFERENCES `product` (`product_code`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
