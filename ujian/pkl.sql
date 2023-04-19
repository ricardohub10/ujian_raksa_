-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Sep 2019 pada 14.44
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pkl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groupsoal`
--

CREATE TABLE `groupsoal` (
  `idgroup` int(11) NOT NULL,
  `namagroup` varchar(50) NOT NULL,
  `idgurumapel` int(11) NOT NULL,
  `statusgrup` enum('N','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `groupsoal`
--

INSERT INTO `groupsoal` (`idgroup`, `namagroup`, `idgurumapel`, `statusgrup`) VALUES
(8, 'percobaan', 2, 'Y'),
(9, 'percobaan 2', 4, 'N');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gurumapel`
--

CREATE TABLE `gurumapel` (
  `idgurumapel` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idmapel` int(11) NOT NULL,
  `idtahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gurumapel`
--

INSERT INTO `gurumapel` (`idgurumapel`, `iduser`, `idmapel`, `idtahun`) VALUES
(1, 24, 25, 1),
(2, 24, 26, 1),
(3, 26, 26, 1),
(4, 24, 27, 1),
(5, 24, 28, 1),
(6, 26, 27, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jawaban`
--

CREATE TABLE `jawaban` (
  `idjawab` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idujian` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `jawaban` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jawaban`
--

INSERT INTO `jawaban` (`idjawab`, `iduser`, `idujian`, `idsoal`, `jawaban`) VALUES
(128, 25, 13, 8, 'a, b, c, d, e'),
(129, 25, 13, 8, 'a, b, c, d, e'),
(130, 25, 13, 5, 'a'),
(131, 25, 13, 7, 'false');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` int(11) NOT NULL,
  `kdmapel` varchar(20) NOT NULL,
  `mapel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`idmapel`, `kdmapel`, `mapel`) VALUES
(26, 'SOSIO', 'SOSIOLOGI'),
(27, 'MTK', 'MATEMATIKA'),
(28, 'INDO', 'BAHASA INDONESIA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idujian` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`idnilai`, `iduser`, `idujian`, `nilai`, `tgl`) VALUES
(51, 25, 13, 100, '2019-09-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `setujian`
--

CREATE TABLE `setujian` (
  `idujian` int(11) NOT NULL,
  `idgroup` int(11) NOT NULL,
  `waktu` int(11) NOT NULL,
  `token` varchar(10) NOT NULL,
  `status` enum('aktif','tidak aktif','','') NOT NULL,
  `rangesoal` int(11) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `setujian`
--

INSERT INTO `setujian` (`idujian`, `idgroup`, `waktu`, `token`, `status`, `rangesoal`, `user`) VALUES
(13, 8, 100, 'specialone', 'aktif', 4, 24),
(17, 8, 10, '100', 'aktif', 2, 26);

-- --------------------------------------------------------

--
-- Struktur dari tabel `soal`
--

CREATE TABLE `soal` (
  `idsoal` int(11) NOT NULL,
  `idgroup` int(11) NOT NULL,
  `jenissoal` enum('singlechoice','truefalse','shortanswer','sorting','multipleanswer') NOT NULL,
  `soal` longtext NOT NULL,
  `pilihana` longtext NOT NULL,
  `pilihanb` longtext NOT NULL,
  `pilihanc` longtext NOT NULL,
  `pilihand` longtext NOT NULL,
  `pilihane` longtext NOT NULL,
  `pilihanbenar` varchar(20) NOT NULL,
  `pembahasan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `soal`
--

INSERT INTO `soal` (`idsoal`, `idgroup`, `jenissoal`, `soal`, `pilihana`, `pilihanb`, `pilihanc`, `pilihand`, `pilihane`, `pilihanbenar`, `pembahasan`) VALUES
(5, 8, 'singlechoice', '<p>President pertama republik Indonesia ?</p>\r\n', '<p>Soekarno</p>\r\n', '<p>Bung Hatta</p>\r\n', '<p>Soeharto</p>\r\n', '<p>Habibie</p>\r\n', '<p>Jusuf Kalla</p>\r\n', 'a', '<p>jawaban yang benar adalah A</p>\r\n'),
(7, 8, 'truefalse', '<p>soekarno adalah presiden ke 10</p>\r\n', '', '', '', '', '', 'false', '<p>salah, karena soekarno presiden ke 1</p>\r\n'),
(8, 8, 'multipleanswer', '<p>berikut ini adalah presiden RI</p>\r\n', '<p>soekarno</p>\r\n', '<p>soeharto</p>\r\n', '<p>SBY</p>\r\n', '<p>Jokowi</p>\r\n', '<p>Gusdur</p>\r\n', 'a, b, c, d, e', '<p>semua jawaban benar</p>\r\n'),
(9, 8, 'sorting', '<p>urutkan kejadian berikut</p>\r\n', 'berangkat sekolah', 'sarapan', 'berpakaian', 'mandi', 'Bangun tidur', 'e,d,c,b,a', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `idtahun` int(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tahunajaran`
--

INSERT INTO `tahunajaran` (`idtahun`, `tahun`, `status`) VALUES
(1, '2018/2019', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `jk` enum('laki-laki','perempuan') NOT NULL,
  `tempatlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `status` enum('admin','siswa','guru') NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `jk`, `tempatlahir`, `tgllahir`, `status`, `username`, `password`) VALUES
(1, 'Obrin', 'laki-laki', 'Palembang', '1996-11-22', 'admin', 'obrin', 'ODR5dWg0NTRu'),
(24, 'Nabil Putra', 'laki-laki', 'Palembang', '1996-11-22', 'guru', 'putra', 'MTIzNDU='),
(25, 'bill chen', 'laki-laki', 'palembang', '1996-11-22', 'siswa', 'billchen', 'MTIzNDU='),
(26, 'crystal widjaya', 'laki-laki', 'jakarta', '2019-12-31', 'guru', 'wijaya', 'MTIzNDU='),
(27, 'nabil', 'laki-laki', 'plg', '2019-12-31', 'siswa', 'nabil', 'MTIzNDU='),
(28, 'nabilah', 'perempuan', 'plg', '2018-12-31', 'siswa', 'nabilah', 'MTIzNDU='),
(29, 'syukron', 'laki-laki', 'plg', '2019-12-31', 'siswa', 'sukron', 'MTIzNDU='),
(30, 'Hanif Muarif', 'laki-laki', 'Palembang', '1992-08-19', 'siswa', 'hanif', 'aGFuaWY=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groupsoal`
--
ALTER TABLE `groupsoal`
  ADD PRIMARY KEY (`idgroup`);

--
-- Indexes for table `gurumapel`
--
ALTER TABLE `gurumapel`
  ADD PRIMARY KEY (`idgurumapel`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idjawab`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`idmapel`),
  ADD UNIQUE KEY `kdmapel` (`kdmapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idnilai`);

--
-- Indexes for table `setujian`
--
ALTER TABLE `setujian`
  ADD PRIMARY KEY (`idujian`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idsoal`);

--
-- Indexes for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  ADD PRIMARY KEY (`idtahun`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groupsoal`
--
ALTER TABLE `groupsoal`
  MODIFY `idgroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gurumapel`
--
ALTER TABLE `gurumapel`
  MODIFY `idgurumapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idjawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `setujian`
--
ALTER TABLE `setujian`
  MODIFY `idujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `idtahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
