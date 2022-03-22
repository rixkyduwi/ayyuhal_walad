-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Mar 2022 pada 06.09
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `big_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `deskripsi`) VALUES
(1, 'bigproject', 'bigproject123', 'admin pengelola data website');

-- --------------------------------------------------------

--
-- Struktur dari tabel `akumulasi`
--

CREATE TABLE `akumulasi` (
  `id` int(11) NOT NULL,
  `timestap` date NOT NULL DEFAULT current_timestamp(),
  `jenis` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `berat` varchar(11) NOT NULL,
  `satuan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akumulasi`
--

INSERT INTO `akumulasi` (`id`, `timestap`, `jenis`, `user`, `berat`, `satuan`) VALUES
(1, '2022-01-16', 'organik', 'rizky@gmail.com', '1', 'kg'),
(2, '2022-01-16', 'anorganik', 'bela@gmail.com', '1', ''),
(3, '2022-01-16', 'anorganik', 'rizky@gmail.com', '0', ''),
(4, '2022-01-16', 'organik', 'bela@gmail.com', '12', 'kg'),
(5, '2022-01-16', 'b3', 'rizky@gmail.com', '0', ''),
(6, '2022-01-16', 'b3', 'bela@gmail.com', '0', ''),
(7, '2022-01-16', 'anorganik', 'bella@gmail.com', '0', ''),
(8, '2022-01-16', 'anorganik', 'bella@gmail.com', '0', ''),
(9, '2022-01-16', 'anorganik', 'yudis@gmail.com', '0', ''),
(10, '2022-01-16', 'anorganik', 'yudis@gmail.com', '0', ''),
(11, '2022-01-16', 'b3', 'yudis@gmail.com', '0', ''),
(12, '2022-01-16', 'b3', 'yudis@gmail.com', '0', ''),
(13, '2022-01-16', 'b3', 'yudis@gmail.com', '0', ''),
(15, '2022-01-16', 'anorganik', 'yudis@gmail.com', '0', ''),
(16, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(17, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(18, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(19, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(20, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(21, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(22, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(23, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(24, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(25, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(27, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(28, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(29, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(30, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(31, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(32, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '0', ''),
(33, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '0', ''),
(34, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '20', ''),
(35, '2022-01-16', 'anorganik', 'yudhis@gmail.com', '20', ''),
(36, '2022-01-16', 'b3', 'rizky@gmail.com', '1', ''),
(37, '2022-01-16', 'anorganik', 'rizky@gmail.com', '1', ''),
(38, '2022-01-16', 'b3', 'yudis@gmail.com', '23', ''),
(39, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '1', ''),
(40, '2022-01-16', 'b3', 'yudis@gmail.com', '1', ''),
(41, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '30', ''),
(42, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '2', ''),
(43, '2022-01-16', 'anorganik', 'yudis@gmail.com', '1', ''),
(44, '2022-01-16', 'anorganik', 'yudis@gmail.com', '1', ''),
(45, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '2', ''),
(46, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '1', ''),
(47, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '1', ''),
(48, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '1', ''),
(49, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '3', ''),
(50, '2022-01-16', 'organik', 'yudhis@gmail.com', '10', 'hg'),
(51, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '100', ''),
(52, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '100', ''),
(53, '2022-01-16', 'b3', 'admin@gmail.con', '100', ''),
(54, '2022-01-16', 'b3', 'admin@gmail.con', '100', ''),
(55, '2022-01-16', 'anorganik', 'admin@gmail.con', '700', ''),
(56, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '100', ''),
(57, '2022-01-16', 'anorganik', 'admin@gmail.con', '700', ''),
(58, '2022-01-16', 'b3', 'admin@gmail.con', '100', 'gram'),
(59, '2022-01-16', 'anorganik', 'admin@gmail.con', '700', 'gram'),
(60, '2022-01-16', 'b3', 'Abdussalam@gmail.com', '100', 'gram'),
(61, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '700', 'gram'),
(62, '2022-01-16', 'anorganik', 'admin@gmail.con', '700', 'gram'),
(63, '2022-01-16', 'anorganik', 'Abdussalam@gmail.com', '700', 'gram'),
(64, '2022-01-17', 'anorganik', 'Abdussalam@gmail.com', '700', 'gram'),
(65, '2022-01-17', 'anorganik', 'username = Abdussalam@gmail.com', '700', 'gram'),
(66, '2022-01-17', 'anorganik', 'username = username = Abdussalam@gmail.com', '700', 'gram'),
(67, '2022-01-17', 'organik', 'username = username = username = Abdussalam@gmail.com', '200', 'gram'),
(68, '2022-03-15', 'anorganik', 'rds@gmail.com', '700', 'gram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_warga`
--

CREATE TABLE `data_warga` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_rumah` varchar(100) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_warga`
--

INSERT INTO `data_warga` (`id`, `nama`, `no_rumah`, `kontak`, `password`, `email`) VALUES
(1, 'Abdus Salam', 'A NO 01', '081929295254', 'Abdussalam123', 'Abdussalam@gmail.com'),
(2, 'Agus Purwanto', 'A NO 02', '081291387617', 'aguspurwanto123', 'AgusPurwanto@gmail.com'),
(3, 'Andi wijaya\r\n', 'A NO 03\r\n', '085279294445\r\n', 'andiwijaya123', 'Andiwijaya@gmail.com'),
(4, 'Aryo Ega Aditya\r\n', 'A NO 04\r\n', '081231812206\r\n', 'aryoegaaditya123', 'AryoEgaAditya@gmail.com'),
(5, 'Awaludin\r\n', 'A NO 05\r\n', '081278953331\r\n', 'awaludin123', 'awaludin@gmail.com'),
(6, 'Bambang Supriono\r\n', 'B NO 01\r\n', '082175068464\r\n', 'bambangsupriono123', 'BambangSupriono@gmail.com'),
(7, 'Budi Chandra\r\n', 'B NO 02\r\n', '08268586381\r\n', 'budichandra123', 'BudiChandra@gmail.com'),
(8, 'Cjolidin\r\n', 'B NO 03\r\n', '087796095834\r\n', 'cjolidin123', 'Cjolidin@gmail.com'),
(9, 'Damanhuri', 'B NO 04\r\n', '085669550943\r\n', 'damanhuri123', 'Damanhuri@gmail.com'),
(10, 'Denny Juraijin\r\n', 'B NO 05\r\n', '085243276590\r\n', 'DennyJuraijin123', 'DennyJuraijin@gmail.com'),
(11, 'Derry oktory', 'C NO 01\r\n', '081373377877\r\n', 'derryoktory123', 'Derryoktory@gmail.com'),
(12, 'Dodi Lesmono\r\n', 'C NO 02\r\n', '085279340109\r\n', 'dodilesmono123', 'DodiLesmono@gmail.com'),
(13, 'Dodi', 'C NO 03', '085378293310', 'dodo123', 'Dodo@gmail.com'),
(14, 'Doni kuncoro', 'C NO 04\r\n', '081373777040\r\n', 'donikuncoro123', 'Donikuncoro@gmail.com'),
(15, 'Eki Prima\r\n', 'C NO 05\r\n', '085279347896\r\n', 'ekiprima123', 'EkiPrima@gmail.com'),
(16, 'Elvis Sudarso\r\n', 'D NO 01\r\n', '081277246547\r\n', 'elvissudarso123', 'ElvisSudarso@gmail.com'),
(17, 'Herman Suhendra\r\n', 'D NO 02\r\n', '0813731394818\r\n', 'HermanSuhendra123', 'HermanSuhendra@gmail.com'),
(18, 'Herarldi\r\n', 'D NO 03\r\n', '082185343666\r\n', 'Herarldi123', 'Herarldi@gmail.com'),
(19, 'Hermansyah\r\n', 'D NO 04\r\n', '085926899534\r\n', 'hermansyah123', 'Hermansyah@gmail.com'),
(0, 'admin', 'mrgadana', '085848687129', 'admin', 'admin@gmail.con'),
(0, 'rizky dwi', 'jl balamoa selatan', '0895360510704', 'rds123', 'rds@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akumulasi`
--
ALTER TABLE `akumulasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akumulasi`
--
ALTER TABLE `akumulasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
