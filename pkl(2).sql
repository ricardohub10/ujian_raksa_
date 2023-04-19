-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2022 at 01:26 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Table structure for table `groupsoal`
--

CREATE TABLE `groupsoal` (
  `idgroup` int(11) NOT NULL,
  `namagroup` varchar(50) NOT NULL,
  `idgurumapel` int(11) NOT NULL,
  `statusgrup` enum('N','Y') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupsoal`
--

INSERT INTO `groupsoal` (`idgroup`, `namagroup`, `idgurumapel`, `statusgrup`) VALUES
(1, 'AUTO', 2, 'Y'),
(8, 'Sosiologi', 1, 'Y'),
(11, 'NONAUTO', 1, 'N'),
(14, 'AUTO', 1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `gurumapel`
--

CREATE TABLE `gurumapel` (
  `idgurumapel` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idmapel` int(11) NOT NULL,
  `idtahun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gurumapel`
--

INSERT INTO `gurumapel` (`idgurumapel`, `iduser`, `idmapel`, `idtahun`) VALUES
(1, 2, 29, 1);

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `idjawab` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idujian` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `jawaban` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`idjawab`, `iduser`, `idujian`, `idsoal`, `jawaban`) VALUES
(128, 25, 13, 8, 'a, b, c, d, e'),
(129, 25, 13, 8, 'a, b, c, d, e'),
(130, 25, 13, 5, 'a'),
(131, 25, 13, 7, 'false'),
(132, 27, 13, 8, 'a'),
(133, 27, 13, 5, 'b'),
(134, 27, 13, 7, 'true'),
(135, 27, 13, 8, NULL),
(136, 27, 17, 7, 'true'),
(137, 27, 17, 9, NULL),
(138, 1, 13, 5, NULL),
(139, 1, 13, 8, NULL),
(140, 1, 13, 5, NULL),
(141, 1, 13, 8, NULL),
(142, 28, 13, 7, 'true'),
(143, 28, 13, 8, 'd'),
(144, 28, 13, 7, 'true'),
(145, 28, 13, 5, NULL),
(146, 27, 20, 12, 'c'),
(147, 27, 20, 11, 'b'),
(148, 27, 20, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `idmapel` int(11) NOT NULL,
  `kdmapel` varchar(20) NOT NULL,
  `mapel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`idmapel`, `kdmapel`, `mapel`) VALUES
(26, 'SOSIO', 'SOSIOLOGI'),
(27, 'MTK', 'MATEMATIKA'),
(28, 'INDO', 'BAHASA INDONESIA'),
(29, 'AUTO', 'AUTOJun22'),
(30, 'NONAUTO', 'NONAUTOJun22'),
(31, 'UWTEKNIS', 'UWTEKNISJun22'),
(32, 'REINSURANCE ', 'REINSURANCEJun22'),
(33, 'KLAIMAUTO ', 'KlAIMAUTOJun22'),
(34, 'KLAIMNONAUTO ', 'KLAIMNONAUTOJun22'),
(35, 'ROL ', 'ROLJun22');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idnilai` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `idujian` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`idnilai`, `iduser`, `idujian`, `nilai`, `tgl`) VALUES
(51, 25, 13, 100, '2019-09-28'),
(52, 27, 13, 100, '2022-06-02'),
(53, 27, 17, 70, '2022-06-02'),
(54, 28, 13, 0, '0000-00-00'),
(55, 27, 20, 33, '2022-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `setujian`
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
-- Dumping data for table `setujian`
--

INSERT INTO `setujian` (`idujian`, `idgroup`, `waktu`, `token`, `status`, `rangesoal`, `user`) VALUES
(13, 8, 100, 'specialone', 'aktif', 4, 24),
(17, 8, 10, '100', 'aktif', 2, 26),
(20, 14, 11, 'specialone', 'aktif', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
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
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`idsoal`, `idgroup`, `jenissoal`, `soal`, `pilihana`, `pilihanb`, `pilihanc`, `pilihand`, `pilihane`, `pilihanbenar`, `pembahasan`) VALUES
(5, 8, 'singlechoice', '<p>President pertama republik Indonesia ?</p>\r\n', '<p>Soekarno</p>\r\n', '<p>Bung Hatta</p>\r\n', '<p>Soeharto</p>\r\n', '<p>Habibie</p>\r\n', '<p>Jusuf Kalla</p>\r\n', 'a', '<p>jawaban yang benar adalah A</p>\r\n'),
(7, 8, 'truefalse', '<p>soekarno adalah presiden ke 10</p>\r\n', '', '', '', '', '', 'false', '<p>salah, karena soekarno presiden ke 1</p>\r\n'),
(8, 8, 'multipleanswer', '<p>berikut ini adalah presiden RI</p>\r\n', '<p>soekarno</p>\r\n', '<p>soeharto</p>\r\n', '<p>SBY</p>\r\n', '<p>Jokowi</p>\r\n', '<p>Gusdur</p>\r\n', 'a, b, c, d, e', '<p>semua jawaban benar</p>\r\n'),
(9, 8, 'sorting', '<p>urutkan kejadian berikut</p>\r\n', 'berangkat sekolah', 'sarapan', 'berpakaian', 'mandi', 'Bangun tidur', 'e,d,c,b,a', ''),
(10, 14, 'singlechoice', '<ol>\r\n	<li>\r\n	<p>Kasus dibawah ini yang menyebabkan klaim nasabah ditolak :</p>\r\n	</li>\r\n</ol>\r\n', '<p>Nasabah memiliki SIM yang sesuai peraturan perundangan namun masa berlaku sudah habis.</p>\r\n', '<p>Pajak stnk sudah kadarluasa waktu klaim diajukan.</p>\r\n', '<p>Nasabah mundur di exit tol karena salah keluar lalu ditabrak dari belakang.</p>\r\n', '<p>Nasabah membawa barang di dalam mobil dan barang tersebut memecahkan kaca karena rem mendadak.</p>\r\n', '<ol style=\"list-style-type:lower-alpha\">\r\n	<li>\r\n	<p>Nasabah mengajukan klaim atas kehilangan kunci remote.</p>\r\n	</li>\r\n</ol>\r\n', 'b', '<p>Jawaban yang benar adalah B</p>\r\n'),
(11, 14, 'singlechoice', '<ol>\r\n	<li>\r\n	<p>Kasus dibawah ini yang menyebabkan klaim nasabah ditolak :</p>\r\n	</li>\r\n</ol>\r\n', '<p>Nasabah memiliki SIM yang sesuai peraturan perundangan namun masa berlaku sudah habis.</p>\r\n', '<p>Pajak stnk sudah kadarluasa waktu klaim diajukan.</p>\r\n', '<p>Nasabah mundur di exit tol karena salah keluar lalu ditabrak dari belakang.</p>\r\n', '<p>Nasabah membawa barang di dalam mobil dan barang tersebut memecahkan kaca karena rem mendadak.</p>\r\n', '<ol style=\"list-style-type:lower-alpha\">\r\n	<li>\r\n	<p>Nasabah mengajukan klaim atas kehilangan kunci remote.</p>\r\n	</li>\r\n</ol>\r\n', 'b', '<p>Jawaban yang benar adalah B</p>\r\n'),
(12, 14, 'singlechoice', '<ol>\r\n	<li>\r\n	<p>Kasus dibawah ini yang menyebabkan klaim nasabah ditolak :</p>\r\n	</li>\r\n</ol>\r\n', '<p>Nasabah memiliki SIM yang sesuai peraturan perundangan namun masa berlaku sudah habis.</p>\r\n', '<p>Pajak stnk sudah kadarluasa waktu klaim diajukan.</p>\r\n', '<p>Nasabah mundur di exit tol karena salah keluar lalu ditabrak dari belakang.</p>\r\n', '<p>Nasabah membawa barang di dalam mobil dan barang tersebut memecahkan kaca karena rem mendadak.</p>\r\n', '<ol style=\"list-style-type:lower-alpha\">\r\n	<li>\r\n	<p>Nasabah mengajukan klaim atas kehilangan kunci remote.</p>\r\n	</li>\r\n</ol>\r\n', 'b', '<p>Jawaban yang benar adalah B</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tahunajaran`
--

CREATE TABLE `tahunajaran` (
  `idtahun` int(11) NOT NULL,
  `tahun` varchar(11) NOT NULL,
  `status` enum('Y','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahunajaran`
--

INSERT INTO `tahunajaran` (`idtahun`, `tahun`, `status`) VALUES
(1, '2018/2019', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `user`
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
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `jk`, `tempatlahir`, `tgllahir`, `status`, `username`, `password`) VALUES
(1, 'Ricardo', 'laki-laki', 'Palembang', '1996-11-22', 'admin', 'ricardo', '123456789'),
(2, 'afif', 'laki-laki', 'Jakarta', '1995-09-06', 'guru', 'afif', '123456789'),
(24, 'Nabil Putra', 'laki-laki', 'Palembang', '1996-11-22', 'guru', 'putra', '123456789='),
(25, 'bill chen', 'laki-laki', 'palembang', '1996-11-22', 'siswa', 'billchen', 'MTIzNDU='),
(26, 'crystal widjaya', 'laki-laki', 'jakarta', '2019-12-31', 'guru', 'wijaya', 'MTIzNDU='),
(27, 'nabil', 'laki-laki', 'plg', '2019-12-31', 'siswa', 'nabil', '123456789'),
(28, 'nabilah', 'perempuan', 'plg', '2018-12-31', 'siswa', 'nabilah', '123456789'),
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
  MODIFY `idgroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gurumapel`
--
ALTER TABLE `gurumapel`
  MODIFY `idgurumapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idjawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `setujian`
--
ALTER TABLE `setujian`
  MODIFY `idujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
