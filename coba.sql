-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Apr 2019 pada 03.19
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_kamar` int(11) NOT NULL,
  `fasilitas` varchar(30) NOT NULL,
  `fotofasilitas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id_kamar`, `fasilitas`, `fotofasilitas`) VALUES
(1, 'Shower', 'shower.png'),
(1, 'AC', 'ac.png'),
(2, 'Shower', 'shower.png'),
(2, 'TV LCD', 'tv.png'),
(2, 'Air Conditioner', 'ac.png'),
(2, 'Sarapan Gratis', 'toaster.png'),
(3, 'WiFi', 'wifi.png'),
(3, 'TV Kabel', 'tv.png'),
(3, 'Shower', 'shower.png'),
(3, 'Air Conditioner', 'ac.png'),
(4, 'WiFi', 'wifi.png'),
(4, 'Air Conditioner', 'ac.png'),
(4, 'TV Kabel', 'tv.png'),
(4, 'Sarapan Gratis', 'toaster.png'),
(4, 'Shower', 'shower.png'),
(4, 'Bathub', 'bathub.png'),
(5, 'WiFi', 'wifi.png'),
(5, 'Air Conditioner', 'ac.png'),
(5, 'TV Kabel', 'tv.png'),
(5, 'Sarapan Gratis', 'toaster.png'),
(5, 'Shower', 'shower.png'),
(5, 'Bathub', 'bathub.png'),
(5, 'Brankas', 'brankas.png'),
(6, 'WiFi', 'wifi.png'),
(6, 'TV Kabel', 'tv.png'),
(6, 'Air Conditioner', 'ac.png'),
(6, 'Shower', 'shower.png'),
(6, 'Bathub', 'bathub.png'),
(6, 'Sarapan Gratis', 'toaster.png'),
(6, 'Minibar', 'minibar.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(3) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `penjelasan` varchar(3000) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `tipe`, `penjelasan`, `harga`, `status`, `foto`) VALUES
(1, 'Standard Room', 'Standard Room dilengkapi dengan satu buah tempat tidur berukuran single untuk satu orang. Fasilitas pada kamar ini yaitu AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh. Kamar Standar tanpa sarapan pagi.', 460000, 'tersedia', 'standar.jpg'),
(2, 'Superior Room', 'Superior Room dilengkapi dengan dua buah tempat tidur masing – masing berukuran single. Fasilitas pada kamar ini yaitu WiFi, AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh. Dilengkapi dengan sarapan pagi.', 540000, 'tersedia', 'superior.jpg'),
(3, 'Grand Deluxe Room', 'Grand Deluxe Room dilengkapi dengan satu buah tempat tidur berukuran double (ranjang besar) atau Twin. Fasilitas pada kamar ini yaitu WiFi, AC, peralatan mandi gratis, sandal, meja tulis, air minum kemasan gratis, TV LCD, fasilitas membuat kopi teh, dan brankas. Dilengkapi dengan sarapan pagi. Luas masing-masing kamar adalah 27m2. Setiap sudut kamar dirancang modern minimalis, kami menyediakan Anda kamar merokok dan kamar bebas rokok.', 700000, 'tersedia', 'grand.jpg'),
(4, 'Deluxe Room', 'Tipe Kamar Bussines Bed: tempat tidur kembar Ukuran kamar: 27,0 sqm Hiburan - WiFi gratis, TV LCD 42 inci dengan saluran premium Makanan & Minuman - Pembuat kopi / teh, minibar, layanan kamar 24 jam, dan air kemasan gratis. Fasilitas Kamar: Mini Kulkas, AC, Brankas dalam kamar, Fasilitas Sofa Kursi Kursi: Pengering rambut, Kamar mandi pribadi, pancuran, sandal, dan perlengkapan mandi lengkap gratis', 1000000, 'tersedia', 'deluxe.jpg'),
(5, 'Club King', 'Dengan luas kamar 32 sqm, nikmati pemandangan menghadap kota bandung, dengan dekorasi yang modern dan akses Internet berkecepatan tinggi. Dilengkapi tempat tidur untuk menjamin kenyamanan Anda. dan preferensi kamar untuk merokok tergantung pada ketersediaan kamar yang dapat ditentukan pada saat Anda check-in.', 1953000, 'tersedia', 'king.jpg'),
(6, 'The Suite', 'Nikmati pemandangan gunung dan kota yang menakjubkan menyambut Anda di suite seluas 70 m2 yang luas terletak di lantai 5 sampai dengan lantai 15. Jadikan diri Anda senyaman di rumah sendiri dengan menikmati ruang tamu yang terpisah lengkap dengan sofa yang nyaman, kursi santai dan area kerja dengan WIFI berkecepatan tinggi, dilengkapi dengan karya seni bernuansa Indonesia kontemporer yang unik. Nikmati akses ke Executive Lounge yang menyajikan santapan pagi, minuman, koktail malam dan canapes.', 3150000, 'tersedia', 'suite.jpg'),
(7, 'standard', 'hanya untuk sultan', 300, 'tersedia', ''),
(8, 'Standard', 'hanya untuk sultan', 2147483647, 'tersedia', ''),
(9, 'Standard', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 211111111, 'tersedia', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamarfasilitas`
--

CREATE TABLE `kamarfasilitas` (
  `id_kamar` int(3) NOT NULL,
  `fasilitas` varchar(30) NOT NULL,
  `fotofasilitas` varchar(30) NOT NULL,
  `fotokamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamarfasilitas`
--

INSERT INTO `kamarfasilitas` (`id_kamar`, `fasilitas`, `fotofasilitas`, `fotokamar`) VALUES
(1, 'Shower', 'shower.png', 'std1.jpg'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamarfoto`
--

CREATE TABLE `kamarfoto` (
  `id_kamar` int(11) NOT NULL,
  `fotokamar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamarfoto`
--

INSERT INTO `kamarfoto` (`id_kamar`, `fotokamar`) VALUES
(1, 'std1.jpg'),
(1, 'std2.jpg'),
(2, 'supe1.jpg'),
(2, 'supe2.jpg'),
(3, 'gd1.jpg'),
(3, 'gd2.jpg'),
(4, 'del1.jpg'),
(4, 'del2.jpg'),
(5, 'ck1.png'),
(5, 'ck2.png'),
(6, 'ts1.jpg'),
(6, 'ts2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `email` varchar(50) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `staff`
--

CREATE TABLE `staff` (
  `id` int(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `umur` int(5) NOT NULL,
  `password` varchar(100) NOT NULL,
  `imageUrl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staff`
--

INSERT INTO `staff` (`id`, `nama`, `jabatan`, `email`, `jeniskelamin`, `umur`, `password`, `imageUrl`) VALUES
(1, 'ferina', 'Manager', 'ferin@gmail.com', 'Perempuan', 23, 'ferin', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tamu`
--

CREATE TABLE `tamu` (
  `username` char(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `umur` int(3) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tamu`
--

INSERT INTO `tamu` (`username`, `email`, `password`, `nama`, `jeniskelamin`, `umur`, `foto`) VALUES
('pungki', 'pungki@gmail.com', 'pungki', 'pungki', 'male', 20, ''),
('tira', 'tiratira@gmail.com', 'tira', 'Tira Vieri', 'Male', 21, 'Tp_ModulJRK2.jpg'),
('tiravier', 'tira@gmail.com', 'tira', 'Tira Vieri Andrian', 'laki laki', 20, 'tir.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` varchar(20) NOT NULL,
  `username` char(20) NOT NULL,
  `id_kamar` int(3) NOT NULL,
  `durasi` int(3) NOT NULL,
  `totalbayar` int(15) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `username`, `id_kamar`, `durasi`, `totalbayar`, `jenis`, `status`, `tanggal`) VALUES
('5ca9da011c3c2', 'tira', 6, 1, 3150000, 'Virtual BCA', 'dipesan', '2019-04-07'),
('5ca9da3270378', 'pungki', 2, 1, 540000, 'Virtual BCA', 'dipesan', '2019-04-07'),
('5ca9da4655c3c', 'pungki', 3, 1, 700000, 'Virtual BCA', 'dipesan', '2019-04-07'),
('5cb511b41d632', 'tirav', 1, 1, 460000, 'Virtual BCA', 'dipesan', '2019-04-16'),
('5cb527c3ad7e8', 'tiravier', 2, 1, 540000, 'Virtual BCA', 'dipesan', '2019-04-16');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `kamarfasilitas`
--
ALTER TABLE `kamarfasilitas`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `kamarfoto`
--
ALTER TABLE `kamarfoto`
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `kamarfasilitas`
--
ALTER TABLE `kamarfasilitas`
  MODIFY `id_kamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `kamarfasilitas`
--
ALTER TABLE `kamarfasilitas`
  ADD CONSTRAINT `kamarfasilitas_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`),
  ADD CONSTRAINT `kamarfasilitas_ibfk_2` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);

--
-- Ketidakleluasaan untuk tabel `kamarfoto`
--
ALTER TABLE `kamarfoto`
  ADD CONSTRAINT `kamarfoto_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `kamar` (`id_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
