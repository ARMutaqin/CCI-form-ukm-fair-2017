-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Des 2017 pada 10.22
-- Versi Server: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cci_ukm-fair`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('cici', 'admin-ukmfair2017'),
('cicicantix', '2a4ab02e19d8f5766d1d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakultas`
--

CREATE TABLE `fakultas` (
  `id_fakultas` varchar(3) NOT NULL,
  `nama_fakultas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
('feb', 'Fakultas Ekonomi dan Bisnis'),
('fif', 'Fakultas Informatika'),
('fik', 'Fakultas Industri Kreatif'),
('fit', 'Fakultas Ilmu Terapan'),
('fkb', 'Fakultas Komunikasi dan Bisnis'),
('fri', 'Fakultas Rekayasa Industri'),
('fte', 'Fakultas Teknik Elektro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id_fakultas` varchar(3) NOT NULL,
  `id_jurusan` varchar(10) NOT NULL,
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id_fakultas`, `id_jurusan`, `nama_jurusan`) VALUES
('fit', 'd3if', 'D3 Teknik Informatika'),
('fit', 'd3ka', 'D3 Komputerisasi Akuntansi'),
('fit', 'd3mi', 'D3 Manajemen Informatika'),
('fit', 'd3mp', 'D3 Manajemen Pemasaran'),
('fit', 'd3ph', 'D3 Perhotelan'),
('fit', 'd3tk', 'D3 Teknik Komputer'),
('fit', 'd3tt', 'D3 Teknik Telekomunikasi'),
('fit', 'd4sm', 'D4 Sistem Multimedia'),
('fkb', 's1adbis', 'S1 Administrasi Bisnis'),
('feb', 's1akun', 'S1 Akuntansi'),
('fik', 's1despro', 'S1 Desain Produk'),
('fik', 's1di', 'S1 Desain Interior'),
('fik', 's1dkv', 'S1 Desain Komunikasi Visual'),
('fif', 's1if', 'S1 Teknik Informatika'),
('fif', 's1ik', 'S1 Ilmu Komputasi'),
('fkb', 's1ikom', 'S1 Ilmu Komunikasi'),
('fik', 's1ktm', 'S1 Kriya Tekstil dan Mode'),
('feb', 's1mbti', 'S1 MBTI'),
('fri', 's1sisfo', 'S1 Sistem Informasi'),
('fte', 's1sk', 'S1 Sistem Komputer'),
('fik', 's1srm', 'S1 Seni Rupa Murni'),
('fte', 's1te', 'S1 Teknik Elektro'),
('fif', 's1tekinf', 'S1 Teknologi Informasi'),
('fte', 's1tf', 'S1 Teknik Fisika'),
('fri', 's1ti', 'S1 Teknik Industri'),
('fte', 's1tt', 'S1 Teknik Telekomunikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftar`
--

CREATE TABLE `pendaftar` (
  `id_pendaftar` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(10) NOT NULL,
  `tempat_tanggal_lahir` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `fakultas` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `alasanGabung` varchar(255) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `idLine` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftar`
--

INSERT INTO `pendaftar` (`id_pendaftar`, `nama`, `nim`, `tempat_tanggal_lahir`, `jenis_kelamin`, `fakultas`, `jurusan`, `divisi`, `alasanGabung`, `nohp`, `idLine`) VALUES
(1, 'demo', '123', 'Bandung, 18 Desember 2017', 'Laki-laki', 'fif', 's1ik', 'Design', 'demo1', '081', 'demo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `fakultas`
--
ALTER TABLE `fakultas`
  ADD PRIMARY KEY (`id_fakultas`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `id_fakultas` (`id_fakultas`);

--
-- Indexes for table `pendaftar`
--
ALTER TABLE `pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pendaftar`
--
ALTER TABLE `pendaftar`
  MODIFY `id_pendaftar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD CONSTRAINT `jurusan_ibfk_1` FOREIGN KEY (`id_fakultas`) REFERENCES `fakultas` (`id_fakultas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
