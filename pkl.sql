-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 12:20 PM
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
(19, 'AUTO', 1, 'Y'),
(20, 'NONAUTO', 7, 'Y'),
(21, 'UWTEKNIS', 9, 'Y'),
(22, 'REINSURANCE', 10, 'Y'),
(23, 'KLAIM AUTO', 11, 'Y'),
(24, 'KLAIM NON AUTO', 12, 'Y'),
(25, 'ROL', 13, 'Y');

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
(1, 2, 29, 1),
(7, 2, 30, 2),
(8, 2, 29, 2),
(9, 2, 31, 2),
(10, 2, 32, 2),
(11, 2, 33, 2),
(12, 2, 34, 2),
(13, 2, 35, 2);

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
(148, 27, 20, 10, NULL),
(199, 30, 27, 62, 'b'),
(200, 30, 27, 60, 'd'),
(201, 30, 27, 55, 'd'),
(202, 30, 27, 61, 'e'),
(203, 30, 27, 64, 'c'),
(204, 30, 27, 65, 'd'),
(205, 30, 27, 57, 'e'),
(206, 30, 27, 58, 'd'),
(207, 30, 27, 59, 'b'),
(208, 30, 27, 56, NULL),
(209, 30, 25, 30, NULL),
(210, 30, 25, 23, NULL),
(211, 30, 25, 27, NULL),
(212, 30, 25, 25, NULL),
(213, 30, 25, 28, NULL),
(214, 30, 25, 29, NULL),
(215, 30, 25, 24, NULL),
(216, 30, 25, 26, NULL),
(217, 30, 25, 31, NULL),
(218, 30, 25, 32, NULL);

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
(55, 27, 20, 33, '2022-06-02'),
(60, 30, 27, 10, '2022-06-03');

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
(21, 19, 30, 'specialone', 'aktif', 10, 2),
(25, 20, 30, 'specialone', 'aktif', 10, 2),
(26, 21, 30, 'specialone', 'aktif', 20, 2),
(27, 22, 30, 'specialone', 'aktif', 10, 2),
(28, 23, 30, 'specialone', 'aktif', 20, 2),
(29, 24, 30, 'specialone', 'aktif', 20, 2),
(30, 25, 30, 'specialone', 'aktif', 10, 2);

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
(10, 19, 'singlechoice', '<p>Kasus dibawah ini yang menyebabkan klaim nasabah ditolak :</p>\r\n', '<p>Nasabah memiliki SIM yang sesuai peraturan perundangan namun masa berlaku sudah habis.</p>\r\n', '<p>Pajak stnk sudah kadarluasa waktu klaim diajukan.</p>\r\n', '<p>Nasabah mundur di exit tol karena salah keluar lalu ditabrak dari belakang.</p>\r\n', '<p>Nasabah membawa barang di dalam mobil dan barang tersebut memecahkan kaca karena rem mendadak.</p>\r\n', '<p>Nasabah mengajukan klaim atas kehilangan kunci remote.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B</p>\r\n'),
(13, 19, 'singlechoice', '<p>Urutkan loss ratio Nasional terbaik sampai terburuk berdasarkan data di Raksa yang pernah di share oleh bagian teknis</p>\r\n', '<p>Honda - Toyota - Merci - BMW - Porsche</p>\r\n', '<p>Toyota - Suzuki - Honda - Merci - BMW</p>\r\n', '<p>Toyota - Daihatsu - Suzuki - Merci - Honda</p>\r\n', '<p>Daihatsu - Toyota -Honda - Merci - Porsche</p>\r\n', '<p>Truck - BMW - Merci - Honda - Toyota</p>\r\n', 'd', '<p>Jawaban yang benar adalah D</p>\r\n'),
(14, 19, 'singlechoice', '<p>Di bawah ini yang bukan alasan mengapa Under Insured pada klaim mobil tidak diperkenankan</p>\r\n', '<p>Merugikan Raksa pada waktu terjadinya klaim Total Loss</p>\r\n', '<p>Merugikan Raksa pada waktu terjadinya klaim partial loss</p>\r\n', '<p>Berisiko terjadinya dispute waktu klaim total loss karena nasabah merasa tidak bisa beli mobil yang sama dengan uang yang diterima dari pembayaran klaim</p>\r\n', '<p>Merugikan Raksa ketika adanya penggantian sparepart.</p>\r\n', '<p>Tidak ada jawaban yang benar</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(15, 19, 'singlechoice', '<p>Portofolio mana yang paling baik untuk kesehatan unit bisnis anda jika Loss Ratio sama.</p>\r\n', '<p>40% SOB A, 30% SOB B, 20% SOB C, 10% Bisnis Direct.</p>\r\n', '<p>90% SOB A, 10% SOB B jadi tidak perlu banyak staf karena tidak banyak SOB.</p>\r\n', '<p>30% SOB A, 20% SOB B, 30% terdiri dari 8 agent, 10% ROL</p>\r\n', '<p>30% SOB A, 20% SOB B, 25% SOB C, 25% SOB D</p>\r\n', '<p>10% ROL, 10% Direct Bisnis, 60% SOB A, 20% SOB B</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(16, 19, 'singlechoice', '<p>Urutan rate wilayah OJK termahal sampai termurah yang benar</p>\r\n', '<p>Wilayah 1-2-3</p>\r\n', '<p>Wilayah 1-3-2</p>\r\n', '<p>Wilayah 2-1-3</p>\r\n', '<p>Wilayah 2-3-1</p>\r\n', '<p>Tidak ada jawaban yang benar</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(17, 19, 'singlechoice', '<p>Rate di bawah ini tidak di atur dalam batas bawah dan batas atas OJK</p>\r\n', '<p>Rate TLO</p>\r\n', '<p>Rate Banjir</p>\r\n', '<p>Rate Eqvet</p>\r\n', '<p>Rate RSCC</p>\r\n', '<p>Rate bengkel Authorized</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(18, 19, 'singlechoice', '<p>Klaim di bawah ini menyebabkan penolakan :</p>\r\n', '<p>Pada saat kejadian nasabah tidak membawa sim yang berlaku</p>\r\n', '<p>Mobil terbakar di kapal penyebrangan ASDP</p>\r\n', '<p>Mobil nasabah sedang diatas towing pada saat kecelakaan</p>\r\n', '<p>Nasabah terbukti pada malam sebelumnya kurang tidur sehingga mengantuk saat mengemudi dan kurang konsentrasi.</p>\r\n', '<p>Jawaban A dan C benar</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(19, 19, 'singlechoice', '<p>Sebagai underwriter yang bijak dalam underwrite bisnis auto, mana pernyataan yang paling bijak.</p>\r\n', '<p>Lihat peta Banjir semata sebelum memberikan persetujuan cover banjir.</p>\r\n', '<p>lihat peta banjir dan kondisi rumah tertanggung sebelum memberikan persetujuan cover banjir</p>\r\n', '<p>Memberikan rate sesuai IM dan memberikan loading rate untuk nasabah baru yang belum ada track record untuk mobil dengan catatan Loss Ratio Buruk di statistik Raksa.</p>\r\n', '<p>Memberikan spesial kondisi untuk agent tertentu dengan histori loss ratio keseluruhan agent masih baik untuk pengajuan kendaraan yang secara histori punya loss ratio buruk.</p>\r\n', '<p>Pernyataan B dan D cukup bijak</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(20, 19, 'singlechoice', '<p>Pernyataan yang benar untuk seorang marketing ABM</p>\r\n', '<p>Hubungan dengan klien terbangun dari kepedulian saya terhadap klien baik secara personal maupun urusan pekerjaan.</p>\r\n', '<p>Hubungan saya terjalin baik selama ada uang untuk entertainment.</p>\r\n', '<p>Faktor rate asuransi adalah faktor paling dominan sales memberikan bisnis kepada saya.</p>\r\n', '<p>Refund sales satu satunya faktor penentu bisnis dari sales.</p>\r\n', '<p>Jawaban A dan D benar</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(21, 19, 'singlechoice', '<p>Menjadi seorang kepala kantor yang benar dimana saat ini 80% bisnis kantor saya adalah bisnis auto, maka yang harus saya lakukan :</p>\r\n', '<p>Harus menguasai informasi semua tempat entertainment dan restoran di kota saya ditempatkan.</p>\r\n', '<p>Harus menguasai kelas produk HVC, Cargo, Fire, dan produk Non Auto lainnya.</p>\r\n', '<p>Harus menguasai penanganan klaim yang benar</p>\r\n', '<p>Harus mampu hemat waste</p>\r\n', '<p>Semua jawaban di atas benar</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(23, 20, 'singlechoice', '<p>PT Rimba Perkasa Utama, yang bergerak di industry coal mining menghubungi asuransi Raksa untuk melakukan perpanjangan asuransi untuk 3 Excavator (SI : @8 MIlyar) habis leasing dari PT Mandiri Tunas Finance. Apa yang harus dilakukan pertama kali oleh marketing Raksa menanggapi permintaan perpanjangan asuransi dari PT Rimba Perkasa Utama?</p>\r\n', '<p>Menginfokan kepada PIC Leasing Mandiri Tunas Finance karena nasabah mereka ingin melakukan perpanjangan asuransi selesai leasing.</p>\r\n', '<p>Memberikan Quotation yang telah di Underwrite dengan Gross Rate dari Leasing ke nasabah serta T/C existing MTF.</p>\r\n', '<p>Memberikan Quotation yang telah di underwrite dengan Net Rate dari Asuransi ke Leasing serta T/C existing MTF.</p>\r\n', '<p>Memberikan Quotation yang telah di underwrite dengan Rate dan Deductible standard Internal Memo Raksa</p>\r\n', '<p>Menanyakan existing asuransi PT Rimba Perkasa Utama sehingga bisa compete dengan Rate Existing Asuransi mereka.</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(24, 20, 'singlechoice', '<p>Mengapa dari Marketing wajib menanyakan kepada perusahaan rental alat berat terkait jenis okupasi alat yang akan direntalkan?</p>\r\n', '<p>Jika pada saat claim alat yang diasuransikan tidak sesuai dengan okupasi yang tertera pada polis, maka claim dapat ditolak.</p>\r\n', '<p>Sebagai bahan pertimbangan dalam melakukan underwrite. (menentukan TC).</p>\r\n', '<p>Sebagai bahan klasifikasi data loss ratio underwriter.</p>\r\n', '<p>Karena Quotation tidak bisa diunderwrite jika tidak jelas okupasi dari rental tersebut.</p>\r\n', '<p>Semua pilihan benar.</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(25, 20, 'singlechoice', '<p>PT Rimba Perkasa Utama, yang bergerak di industry coal mining menghubungi asuransi Raksa untuk melakukan perpanjangan asuransi untuk Excavator (SI : @8 MIlyar include PPN ) setelah habis leasing 3 tahun dari PT Mandiri Tunas Finance. PT Rimba Perkasa Utama menanyakan marketing terkait nilai pertanggungan yang perlu diasuransikan untuk alat tersebut. Berapa advice dari Marketing dalam menentukan harga pertanggungan dari unit excavator yang akan diasuransikan?</p>\r\n', '<p>Sesuai harga dalam polis sebelumnya dengan PT Mandiri Tunas Finance.</p>\r\n', '<p>Depresiasi setelah 3 tahun.</p>\r\n', '<p>Harga pertanggungan dalam polis sebelumnya dikurang dengan PPN.</p>\r\n', '<p>NRV + PPN</p>\r\n', '<p>NRV tanpa PPN</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(26, 20, 'singlechoice', '<p>Standard Wording HVC PT Asuransi Raksa Pratikara adalah</p>\r\n', '<p>Munich Re Standard Wording Heavy Equipment.</p>\r\n', '<p>Munich Re Contractor&rsquo;s Plant and Machinery Insurance Wording.</p>\r\n', '<p>Raksa Modified Munich Re Wording.</p>\r\n', '<p>Swiss Re Heavy Equipment Wording.</p>\r\n', '<p>Polis Standard Asuransi Alat Berat Indonesia (PSAABI).</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(27, 20, 'singlechoice', '<p>Mengapa untuk SOB Direct tidak boleh mencantumkan diskon dalam perhitungan premi asuransi untuk produk selain Auto dan Fire?</p>\r\n', '<p>Karena sesuai ketentun Internal Memo underwriting diskon tidak diperbolehkan.</p>\r\n', '<p>Premi yang didapatkan Setelah reasuransi menjadi lebih sedikit jika mencantumkan diskon pada perhitungn premi.</p>\r\n', '<p>Menimbulkan kecurigaan KKN dengan pencantuman diskon.</p>\r\n', '<p>Setiap Diskon akan dikenakan pajak pph 21 ataupun pph 23 maka tidak dapat ditimbulkan pada perhitungan premi.</p>\r\n', '<p>Tidak lazim mencantumkan diskon pada perhitungan premi pada produk selain ABM dan Fire untuk SOB Direct.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(28, 20, 'singlechoice', '<p>Overall portfolio unit terbanyak alat berat adalah Excavator. Namun dari data loss ratio Excavator tidak terlalu bagus dan diminta untuk menghindari penutupan excavator dari leasing ataupun direct bisnis. Mana dari jawaban dibawah ini yang perlu dilakukan oleh marketing apabila ada customer direct meminta untuk membuat penawaran unit Excavator mereka; kecuali</p>\r\n', '<p>Menanyakan asuransi existing mereka dan alasan mengapa mencari asuransi lain.</p>\r\n', '<p>Menarik Loss Record dari data yang ada di Raksa.</p>\r\n', '<p>Karena Loss Ratio Excavator buruk di wilayahnya maka tidak dapat membuat penawaran.</p>\r\n', '<p>Melihat potensi bisnis dari Customer ini dan membuat waktu kunjungan untuk meyakinkan serta mananyakan jumlah potensi alat serta okupasi dan KYC dari nasabah.</p>\r\n', '<p>Apabila unit ybsk tidak dapat mengcover karena membatasi penutupan excavator akibat profit yang buruk, maka potensial customer ini dapat diinfokan ke unit lain yang mampu menanggung resiko.</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(29, 20, 'singlechoice', '<p>Mana dari pernyataan ini yang merupakan kompetitif advantage standard polis alat berat Raksa:</p>\r\n', '<p>Exclusion C dapat diganti.</p>\r\n', '<p>In Land Transit one province.</p>\r\n', '<p>Tidak diterapkan Additional Deductible Accident Due to Negligence.</p>\r\n', '<p>Bengkel Rekanan Alat Berat.</p>\r\n', '<p>30 hari maksimum pembayaran sejak persetujuan</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(30, 20, 'singlechoice', '<p>Yang mana dari dibawah ini yang tidak dapat dijadikan agent Raksa :</p>\r\n', '<p>Kepala Bengkel.</p>\r\n', '<p>Semua jawaban tidak bisa menjadi agent Raksa.</p>\r\n', '<p>PIC Marketing Leasing.</p>\r\n', '<p>Saudara Staff yang masih bekerja di Raksa.</p>\r\n', '<p>Agent yang terdaftar di asuransi umum lain.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(31, 20, 'singlechoice', '<p>Sebagai marketing kapan waktu yang tepat jika kalian ingin melakukan fakultatif, kecuali :</p>\r\n', '<p>Jika ditolak underwriting.</p>\r\n', '<p>Resiko high risk jadi dapat mengajukan fakultatif.</p>\r\n', '<p>Fakultatif hanya dapat dilakukan untuk produk Auto yang harga pertanggungan diatas 5 Milyar IDR.</p>\r\n', '<p>Bisnis Direct dengan total komisi ke leasing tidak lebih besar komisi dari fakultatif.</p>\r\n', '<p>Bisnis Big Client dengan premi besar namun kapasitas treaty tidak tersedia.</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(32, 20, 'singlechoice', '<p>PT CAR merupakan nasabah direct Raksa dengan rate alat berat 0,75%. PT CAR melakukan pembiayaan menggunakan Leasing PT BAA. Namun TC Raksa dengan PT BAA menggunakan rate 0,88% dengan komisi 15%. Mana tindakan yang paling ideal yang akan anda lakukan dalam situasi seperti ini :</p>\r\n', '<p>Merelakan approval rate turun dari 0,88% menjadi 0,75% dengan Leasing PT BAA dengan konsekuensi TC rate dengan Leasing PT BAA akan turun.</p>\r\n', '<p>Meminta PT CAR bankers clause dengan Raksa sehingga tidak ada ada hubungan dengan Leasing PT BAA.</p>\r\n', '<p>Memberikan special Acceptance untuk PT CAR Rate 0,75% dengan komisi ke Leasing PT BAA 15%.</p>\r\n', '<p>Menolak bisnis dari PT CAR dari PT BAA dengan konsekuensi PT CAR mencari asuransi lain sehingga direct bisnis bisa terbagi dengan asuransi lain.</p>\r\n', '<p>Memberikan pemahaman memang rate dengan Leasing berbeda dengan direct langsung dengan Raksa ke PT CAR.</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(33, 21, 'singlechoice', '<p>Tertanggung ingin mengasuransikan polis PAR untuk pabrik Foam Plastik dengan nilai TSI USD 1,800,000 meliputi bangunan, mesin dan isi. Bisnis tersebut masuk ke Raksa melalui broker dan sudah dilakukan survey. Setelah melihat hasil survey underwriter menetapkan kode okupasi 2342 (manufacture of foam plastic). Manakah dari jawaban berikut yang paling tepat?</p>\r\n', '<p>Bisa cover 100% karena masih di bawah USD 2juta</p>\r\n', '<p>Bisa cover sebagai leader dengan share minimal 60%.</p>\r\n', '<p>Masuk kategori risiko tinggi sehingga Underwriter berpendapat lebih baik ditolak atau ikure share kecil saja sebagai bagian pertimbangan bisnis dengan broker.</p>\r\n', '<p>Tidak bisa dicover karena dikecualikan dalam treaty Raksa.</p>\r\n', '<p>Bisa cover sesuai diskresi Underwriter dengan maksimal share 50%.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(34, 21, 'singlechoice', '<p>Agent ingin mengasuransikan pabrik konveksi dengan TSI USD 3,300,000 meliputi bangunan dan stock. Setelah dilakukan survey pabrik tersebut kondisi baik dan memiliki SOP yang bagus. Kode okupasi yang dipakai 2465. Mana pernyataan di bawah ini yang tepat untuk penutupan di atas?</p>\r\n', '<p>Maksimal sum insured yang dapat diterima adalah 3,3 juta karena ketentuan maksimal sum insured bisa sampai 4 juta untuk pabrik konveksi.</p>\r\n', '<p>Risiko ini tidak dapat ditutup asuransinya karena dikecualikan dalam treaty.</p>\r\n', '<p>Share Raksa maksimal 60% untuk risiko tersebut.</p>\r\n', '<p>Maskimal share yang dapat diterima adalah 10% sesuai ketentuan treaty</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(35, 21, 'singlechoice', '<p>Tertanggung ingin mengasuransikan cargo untuk alat beratnya sebagai berikut :</p>\r\n\r\n<p>5 unit excavator tahun 2021, CN/SN : Menyusul, Harga @ IDR 1.500.000.000</p>\r\n\r\n<p>1 unit motor grader tahun 2021, CN/SN : Menyusul, Harga @ IDR 1.000.000.000</p>\r\n\r\n<p>Total TSI menjadi IDR 8.500.000.000 (USD 586,206.89)</p>\r\n\r\n<p>Menggunakan alat angkut LCT AYU 78 (class : BKI, year : 2007, GRT : 1229) dengan ETD 10 July 2021 (informasi penutupan disampaikan ke Raksa tanggal 12 July 2021)</p>\r\n\r\n<p>Manakah dari opsi berikut yang SESUAI dengan IM Raksa?</p>\r\n', '<p>Tidak bisa cover karena menggunakan alat angkut LCT dan GRT terlalu kecil.</p>\r\n', '<p>Bisa cover dengan ketentuan harus lashing survey karena mnimum ketentuan lashing survey USD 500,000</p>\r\n', '<p>Bisa cover dengan ketentuan harus lashing survey dan tambahkan subject to no claim</p>\r\n', '<p>Bisa cover tanpa lashing survey dan tanpa subject to no claim</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(36, 21, 'singlechoice', '<p>Towing risk hanya bisa dicover untuk wilayah pelayaran di bawah ini :</p>\r\n', '<p>Indonesia, East Timor, Malaysia, Brunei, Singapore, the Phillipines &amp; Thailand waters (ocean tow Thailand subject to Monsoon/Typhoon Warranty)</p>\r\n', '<p>Indonesia, East Timor, Malaysia, Brunei, Singapore, Vietnam &amp; Thailand waters (ocean tow Thailand subject to Monsoon/Typhoon Warranty)</p>\r\n', '<p>Indonesia, East Timor, Malaysia, Brunei, Singapore, Myanmar &amp; Thailand waters (ocean tow Thailand subject to Monsoon/Typhoon Warranty)</p>\r\n', '<p>Indonesia, East Timor, Malaysia, Brunei, Singapore &amp; Thailand waters (ocean tow Thailand subject to Monsoon/Typhoon Warranty)</p>\r\n', '<p>Semua salah</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(37, 21, 'singlechoice', '<p>Manakah untuk kota di bawah ini yang TIDAK memerlukan permintaan budget gempa untuk penutupan polis Gempa Bumi?</p>\r\n', '<p>Jakarta</p>\r\n', '<p>Bogor</p>\r\n', '<p>Tangerang</p>\r\n', '<p>Semarang</p>\r\n', '<p>Depok</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(39, 21, 'singlechoice', '<p>Broker memberikan placing slip alat berat 2 unit Hydraulic Excavator Tahun 2021 dengan Harga per unit IDR 4.000.000.000 (USD 275,862) sehingga total sum insured kedua unit tersebut Rp 8.000.000.000 (atau setara dengan USD 551,724). Mana dari opsi berikut yang TEPAT?</p>\r\n', '<p>Proses Underwrite, CCR dan Voting</p>\r\n', '<p>Proses Underwrite dan CCR</p>\r\n', '<p>Proses Underwrite saja.</p>\r\n', '<p>Proses Underwrite dana Voting</p>\r\n', '<p>Proses CCR dan Voting saja</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(40, 21, 'singlechoice', '<p>Sebuah ruko digunakan untuk rumah tinggal dengan kondisi sebagai berikut. Jenis Penutupan hanya Asuransi kebakaran saja (FLEXAS). Sesuai dengan Internal Memo UW, Penutupan tersebut masuk ke dalam produk apa?</p>\r\n', '<p>HMA</p>\r\n', '<p>HMS</p>\r\n', '<p>HMAS</p>\r\n', '<p>SOA</p>\r\n', '<p>SO</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(41, 21, 'singlechoice', '<p>Manakah dari opsi berikut yang SESUAI untuk kelas bisnis Cargo sesuai IM Raksa</p>\r\n', '<p>Asuransi pengiriman &lsquo;fishmeals&rsquo; dan &lsquo;cement&rsquo; memakai kondisi ICC B</p>\r\n', '<p>Extension Road Risk Clause tidak diperbolehkan sama sekali.</p>\r\n', '<p>Penggunaan Motor Vessel, Classed dengan usia 34 tahun diperbolehkan.</p>\r\n', '<p>Asuransi pengiriman &lsquo;Scrap Metal in bulk&rsquo; boleh menggunakan ICC A</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(42, 21, 'singlechoice', '<p>Terkait proses CCR, mana dari limit CCR berikut yang PALING TEPAT</p>\r\n', '<p>Fire USD 500,000/Risk ; HVC USD 500,000/unit ; Cargo USD 500,000/conveyance</p>\r\n', '<p>Fire USD 250,000/Risk ; HVC USD 500,000/unit ; Cargo USD 250,000/conveyance</p>\r\n', '<p>Fire USD 250,000/Risk ; HVC USD 500,000/unit ; Cargo USD 250,000/conveyance</p>\r\n', '<p>Fire USD 500,000/Risk ; HVC USD 250,000/unit ; Cargo USD 500,000/conveyance</p>\r\n', '<p>Fire USD 250,000/Risk ; HVC USD 750,000/unit ; Cargo USD 500,000/conveyance</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(43, 21, 'singlechoice', '<p>Mana dari opsi berikut yang TEPAT untuk kelas HVC sesuai IM Raksa?</p>\r\n', '<p>Maksimum Ourshare IDR 29,000,000,000 per unit</p>\r\n', '<p>Penutupan Underground mining/works tidak bisa dicover oleh Raksa</p>\r\n', '<p>Perluasan gempa bumi dapat diberikan berdasarkan analisa resiko dan pertimbangan underwriter</p>\r\n', '<p>Untuk Pulau Bangka dan belitung, okupasi tin dan sand mining dikecualikan</p>\r\n', '<p>Semua jawaban benar</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(44, 21, 'singlechoice', '<p>Jaminan pada Polis Standar Kecelakaan Diri Indonesia (Personal Accident) antara lain</p>\r\n', '<p>Kematian karena kecelakaan di seluruh dunia tidak termasuk USA dan Kanada</p>\r\n', '<p>Selain Item I Kematian dan Item 2 Cacat tetap, bisa juga diberikan Item 3 Biaya Medis dengan premi tambahan</p>\r\n', '<p>Jaminan santunan cacat tetap sesuai tabel manfaat</p>\r\n', '<p>Semua benar</p>\r\n', '<p>Semua salah</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(45, 21, 'singlechoice', '<p>Sebagai kepala unit marketing, anda tentu bertanggung jawab secara top line dan bottom line atas hasil produksi unit anda. Dalam konteks kenyamanan resiko, mana dari hal berikut yang sesuai dengan risk appetite Raksa</p>\r\n', '<p>Nilai pertanggungan kecil, volume bisnis kecil, premi kecil</p>\r\n', '<p>Nilai pertanggungan kecil, volume bisnis besar, premi besar</p>\r\n', '<p>Nilai pertanggungan besar, volume bisnis kecil, premi besar</p>\r\n', '<p>Nilai pertanggungan besar, volume bisnis besar, premi besar</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(47, 21, 'singlechoice', '<p>Apa implikasi dilekatkannya klausula &#39; Average Relief Clause 85%&#39; pada polis? Mana jawaban di bawah ini yang paling tepat.</p>\r\n', '<p>Maksimal penggantian klaim adalah 85% dari nilai pertanggungan. Tidak boleh lebih dari 85%.</p>\r\n', '<p>Bila rasio sum insured di bawah 85% dari nilai Value At Risk (VAR) maka kondisi underinsurance tidak berlaku.</p>\r\n', '<p>Tertanggung punya keuntungan lebih dalam klaim di mana Tertanggung tidak dipotong pro rata jika rasio Sum insured pada saat date of loss masih di atas 85% dari Value At Risk (VAR).</p>\r\n', '<p>Klausula ini lebih menguntungkan Penanggung karena Penanggung hanya membayar 85% dari jumlah klaim yang disetujui.</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(48, 21, 'singlechoice', '<p>Dalam asuransi Cargo, sering dengar ada beberapa istilah Incoterms yang dipakai pada saat asuransi Cargo. Mana istilah INCOTERMS yang tidak sesuai?</p>\r\n', '<p>FOB</p>\r\n', '<p>CFR</p>\r\n', '<p>CIF</p>\r\n', '<p>LOC</p>\r\n', '<p>FAS</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(49, 21, 'singlechoice', '<p>Batasan asuransi cargo &#39;Towing Risk&quot; yang kita bisa terima antara lain adalah :</p>\r\n', '<p>Tongkang dengan ketentuan minimal 100 GRT dan usia maksimal 35 tahun.</p>\r\n', '<p>Tug boat dengan ketentuan minimal 25 GRT dan usia maksimal 35 tahun.</p>\r\n', '<p>Single tow only</p>\r\n', '<p>Bisa beroperasi sampai Perairan Hong Kong dan Filipina.</p>\r\n', '<p>Semua salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(50, 21, 'singlechoice', '<p>Mana Produk di bawah ini termasuk dalam asuransi Tanggung Gugat :</p>\r\n', '<p>D &amp; O</p>\r\n', '<p>Professional Indemnity</p>\r\n', '<p>Workmen&rsquo;s Compensation</p>\r\n', '<p>Public Liability</p>\r\n', '<p>Semua jawaban benar</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(51, 21, 'singlechoice', '<p>Pengiriman dokumen berupa surat obligasi atau dikenal dengan istilah bond. Untuk pengiriman dokumen seperti ini lebih tepat dijamin pada polis asuransi apa?</p>\r\n', '<p>Asuransi Fidelity Guarantee</p>\r\n', '<p>Asuransi Pengangkutan/Cargo</p>\r\n', '<p>Asuransi Moveable Property All Risk</p>\r\n', '<p>Asuransi Surety Bond</p>\r\n', '<p>Asuransi Uang</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(52, 21, 'singlechoice', '<p>Maksimal Harga Pertanggungan Asuransi Kendaraan Bermotor yang dapat ditutup oleh Raksai Raksa Tanpa kapasitas tambahan Fakultatif adalah sebesar</p>\r\n', '<p>2 Milyar / Unit</p>\r\n', '<p>3 Milyar / Unit</p>\r\n', '<p>5 Milyar / Unit</p>\r\n', '<p>7 Milyar / Unit</p>\r\n', '<p>Semua jawaban salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(53, 21, 'singlechoice', '<p>Designation Clause : For the purpose of determining, where necessary, the definition of any property insured hereby the Insurer agrees to accept the designation under which such property has been entered in the Insured&rsquo;s books</p>\r\n\r\n<p>Maksud dari designation clause tersebut di atas adalah :</p>\r\n', '<p>Tertanggung berhak untuk memberi nama pada barang yang dijaminkan asuransinya</p>\r\n', '<p>Pengklasifikasian property yang dipertanggungkan menentukan kecukupan nilai pertanggungan yang berpengaruh pada penggantian klaim</p>\r\n', '<p>Asuransi menjamin penggantian atas design produk.</p>\r\n', '<p>Saat terjadi klaim, Penanggung setuju untuk menggunakan acuan pada pembukuan Tertanggung dalam mengklasifikasikan barang yang sedang diklaimkan.</p>\r\n', '<p>Semua salah</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(54, 21, 'singlechoice', '<p>Apabila pada polis asuransi kendaraan bermotor yang akan diperpanjang terdapat klaim dengan LR &gt;100% untuk 3 tahun terakhir, maka sesuai IM Teknis, saat renewal melalui proses underwrite dapat dilakukan :</p>\r\n', '<p>Menaikkan Risiko Sendiri sebesar Rp. 500,000,- / kejadian</p>\r\n', '<p>Menaikkan Rate dengan menggunakan Rate batas atas OJK, atau</p>\r\n', '<p>Menaikkan Risiko Sendiri sebesar Rp. 500,000,- / kejadian dan menaikan Rate dengan menggunakan Rate batas atas OJK</p>\r\n', '<p>Semua benar</p>\r\n', '<p>Semua salah</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(55, 22, 'singlechoice', '<p>Sesuai dengan lampiran 1.1. Apabila Asuransi tersebut memberikan komisi kepada pihak ketiga untuk produk Alat Berat (HVC) sebesar 27,5% berapa net % dari premi yang diterima oleh asuransi setelah porsi reasuransi :</p>\r\n', '<p>28,45625%</p>\r\n', '<p>72.5%</p>\r\n', '<p>11,75%</p>\r\n', '<p>10%</p>\r\n', '<p>15%</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(56, 22, 'singlechoice', '<p>Sesuai dengan lampiran 1.1. Berapa komisi maksimal yang dapat diberikan kepada pihak ketiga agar net % dari premi yang diterima oleh asuransi setelah reasuransi tidak rugi atau negative untuk produk Marine Quota Share:</p>\r\n', '<p>29%</p>\r\n', '<p>20%</p>\r\n', '<p>25%</p>\r\n', '<p>37,75%</p>\r\n', '<p>Sesuai internal Memo Raksa.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D</p>\r\n'),
(57, 22, 'singlechoice', '<p>Bagaimana cara pembayaran premi untuk program Treaty QuotaShare dari perusahaan asuransi ke perusahaan reasuransi :</p>\r\n', '<p>Pembayaran perpolis sehingga perusahaan asuransi membayar setiap bulan untuk polis-polis yang sudah dibayar pada 1 bulan sebelumnya.</p>\r\n', '<p>Menggunakan SOA per 3 bulanan untuk seluruh polis yang terbit 3 bulan sebelumnya.</p>\r\n', '<p>Menggunakan SOA per 3 bulanan untuk seluruh polis yang sudah dibayar client pada 3 bulan sebelumnya</p>\r\n', '<p>Pembayaran perpolis sehingga perusahaan asuransi membayar setiap bulan untuk polis-polis yang terbit pada 1 bulan sebelumnya.</p>\r\n', '<p>Perusahaan asuransi membayar minimum deposit untuk estimasi premi tahun depan kepada perusahaan reasuransi, yang kemudian kekurangan/kelebihan bisa diadjust pada akhir periode kontrak reasuransi.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(58, 22, 'singlechoice', '<p>Terjadi Claim longsor yang menyebabkan 3 unit alat berat yang diasuransikan di Raksa tertimbun dan diestimasikan total loss di lokasi tambang yang sama. Setelah selesai proses adjuster dan asuransi melakukan pengajuan PA kepada tertanggung sebesar total IDR 24 Milyar. Apabila tertanggung menyetujui nilai penggantian IDR 24 Milyar berapa besarnya porsi reasuransi pada claim tersebut?</p>\r\n', '<p>IDR 21.600.000.000</p>\r\n', '<p>IDR 2.400.000.000</p>\r\n', '<p>IDR 24.000.000.000</p>\r\n', '<p>IDR 1.000.000.000</p>\r\n', '<p>IDR 23.000.000.000</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(59, 22, 'singlechoice', '<p>Terjadi Claim Constructive Total Loss Mobil Mclarens 720S Spider dengan sum insured IDR 4,571 Milyar. Nilai indemnity mobil adalah IDR 4,400 Milyar dan Salvage + OR mobil tersebut adalah IDR 571 juta. Berapa besar nilai retensi Raksa untuk claim Mobil Mclarens 720S Spider?</p>\r\n', '<p>IDR 1.000.000.000</p>\r\n', '<p>IDR 3.829.000.000</p>\r\n', '<p>IDR 3.000.000.000</p>\r\n', '<p>IDR 382.900.000</p>\r\n', '<p>IDR 4.000.000.000</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(60, 22, 'singlechoice', '<p>Terjadi Banjir selama bulan Januari 2020 di DKI Jakarta. Berikut total claim Auto berdasarkan DOL selama bulan Januari 2020</p>\r\n\r\n<p>1/1/2020 IDR 14.500.000.000<br />\r\n23/1/2020 IDR 21.000.000.000<br />\r\n30/1/2020 IDR 1.000.000.000</p>\r\n\r\n<p>Berapa Retensi Raksa pada Claim Banjir di atas?</p>\r\n', '<p>IDR 1.000.000.000</p>\r\n', '<p>IDR 23.000.000.000</p>\r\n', '<p>IDR 36.500.000.000</p>\r\n', '<p>IDR 11.000.000.000</p>\r\n', '<p>IDR 2.000.000.000</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(61, 22, 'singlechoice', '<p>Pernyataan mana yang tidak benar terkait Event limit untuk treaty XOL :</p>\r\n', '<p>Apabila terjadi RSCC di Jakarta, Bogor, Depok, Tangerang, dan Bekasi menjadi 1 kesatuan di satu area jika terjadi di daerah tersebut.</p>\r\n', '<p>Hujan badai dan atau tornado akibat gangguan atmosfir serta Banjir maksimum event limit adalah 504 hours.</p>\r\n', '<p>Event Limit untuk gempa bumi, tsunami, dan erupsi gunung berapi adalah 72 hours.</p>\r\n', '<p>Event limit bertujuan agar semua kejadian kerugian yang disebabkan oleh penyebab yang sama dan terjadi dalam periode yang sama dan lokasi yang sama dapat dihitung sebagai satu kejadian kerugian yang sama.</p>\r\n', '<p>Event limit untuk RSCC adalah 72 hours.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(62, 22, 'singlechoice', '<p>Pada Treaty Motor dan Non Motor Combined XOL Programme 2020 Raksa maksimum alat transportasi yang mengangkut bensin adalah :</p>\r\n', '<p>15 unit</p>\r\n', '<p>30 unit</p>\r\n', '<p>60 unit</p>\r\n', '<p>50 unit</p>\r\n', '<p>tidak diperbolehkan sama sekali.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(64, 22, 'singlechoice', '<p>Berikut dibawah ini yang bukan menjadi panel reasuransi Raksa Pratikara pada program treaty 2020 adalah :</p>\r\n', '<p>Swiss Re</p>\r\n', '<p>Munich Re</p>\r\n', '<p>Hannover Re</p>\r\n', '<p>China Re</p>\r\n', '<p>Peak Re</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(65, 22, 'singlechoice', '<p>Dalam program reasuransi, mana dari pernyataan ini yang tidak benar mengenai EGNPI:</p>\r\n', '<p>EGNPI merupakan estimasi Gross Net Premium yang dibutuhkan perusahaan reasuransi untuk menentukan komisi reinsurance program Quota Share.</p>\r\n', '<p>EGNPI untuk menentukan minimum deposit XOL.</p>\r\n', '<p>EGNPI merupakan estimasi Gross Net Premium yang dibutuhkan perusahaan reasuransi untuk menentukan rate on line setiap layer XOL</p>\r\n', '<p>EGNPI akan diadjust setiap akhir periode treaty, apabila EGNPI &gt; GNPI dan min deposit lebih besar dibandingkan premi XOL maka kelebihan premi XOL tidak dapat dikembalikan reasuransi.</p>\r\n', '<p>EGNPI akan diadjust setiap akhir periode treaty, apabila EGNPI &lt; GNPI dan min deposit lebih kecil dibandingkan premi XOL maka kekurangan premi XOL harus dibayarkan oleh perusahaan asuransi.</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(66, 23, 'singlechoice', '<p>Dalam kasus kendaraan dicuri di Bengkel Rekanan oleh orang tidak dikenal, Perusahaan Asuransi menggantikan posisi Tertanggung untuk meminta ganti rugi terhadap bengkel rekanan. Sebutkan prinsip asuransi yang berlaku terhadap kondisi ini ?</p>\r\n', '<p>Kontribusi</p>\r\n', '<p>Indemnity</p>\r\n', '<p>Subrogasi</p>\r\n', '<p>Proximate Cause</p>\r\n', '<p>Korelasi</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(67, 23, 'singlechoice', '<p>Dari part kendaraan yang mengalami kerusakan dibawah ini, mohon dapat dipilih kerusakan yang tidak dijamin di PSAKBI</p>\r\n', '<p>Bemper menabrak pohon</p>\r\n', '<p>Fender Ditabrak becak</p>\r\n', '<p>Kap mesin terkena tumpahan cat</p>\r\n', '<p>Ban bocor melindas serpihan kaca</p>\r\n', '<p>Roof terkena kotoran burung</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(68, 23, 'singlechoice', '<p>Dalam praktek penanganan klaim di Indonesia, sering ditemukan istilah Knock For Knock Agreement. Bagaimana praktek pelaksanaan Knock For Knock Agreement :</p>\r\n', '<p>Tertanggung bisa mengajukan klaim kendaraan yang ditabrak walaupun kendaraan yang ditabrak merupakan kendaraan dari Tertanggung.</p>\r\n', '<p>Perusahaan Asuransi memberikan ganti rugi terhadap kendaraan yang ditabrak oleh Tertanggung dengan limit maksimum TPL</p>\r\n', '<p>Dua atau lebih asuransi sepakat melakukan penyelesaian klaim tabrakan beruntun terhadap kendaraan masing masing yang di-cover dimana Asuransi dari kendaraan penabrak mananggung OR dari kendaraan yang ditabrak dengan menggunakan limit TPL.</p>\r\n', '<p>Tertanggung membantu kendaraan yang ditabrak mengajukan klaim ke Asuransi Tertanggung</p>\r\n', '<p>Tertanggung hanya mengajukan klaim TPL saja</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(69, 23, 'singlechoice', '<p>Apabila Sistem Airbag dari kendaraan mengalami kerusakan, Bagian sistem apa yang sering kali Bengkel ajukan untuk pergantian :</p>\r\n', '<p>Sistem ABS</p>\r\n', '<p>Sistem SRS</p>\r\n', '<p>Sistem EPS</p>\r\n', '<p>Seat Belt</p>\r\n', '<p>Semua panel instrument</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(70, 23, 'singlechoice', '<p>Dalam kasus perusahaan asuransi mengajak perusahaan asuransi lainnya sama sama mengcover kendaraan yang sama dalam penyelesaian pengajuan klaim Tertanggung. Sebutkan prinsip asuransi yang berlaku terhadap kondisi ini :</p>\r\n', '<p>Kontribusi</p>\r\n', '<p>Indemnity</p>\r\n', '<p>Subrogasi</p>\r\n', '<p>Proximate Cause</p>\r\n', '<p>Co-Insurance</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(71, 23, 'singlechoice', '<p>Berapa lama batas pelaporan klaim yang diperbolehkan ?</p>\r\n', '<p>3 hari kerja</p>\r\n', '<p>3 hari kelender</p>\r\n', '<p>5 hari kerja</p>\r\n', '<p>5 hari kalender</p>\r\n', '<p>Semua pilihan salah</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(72, 23, 'singlechoice', '<p>Berapa jumlah berat kendaraan yang diperbolehkan untuk dikendarai oleh seseorang yang memiliki SIM A ?</p>\r\n', '<p>Kurang dari 3.500 kg</p>\r\n', '<p>Lebih dari 3.500 kg</p>\r\n', '<p>Kurang dari 5.000 kg</p>\r\n', '<p>Lebih dari 5.000 kg</p>\r\n', '<p>Semua pilihan salah</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(73, 23, 'singlechoice', '<p>Tentukan part yang dibawah ini yang tidak masuk dalam bagian Suspensi ?</p>\r\n', '<p>Lower Arm</p>\r\n', '<p>Shockbreaker</p>\r\n', '<p>Knuckel</p>\r\n', '<p>Transmisi</p>\r\n', '<p>Ball Joint</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(74, 23, 'singlechoice', '<p>Sehubungan dengan kendaraan yang rusak akibat terbakar, tentukan kondisi yang tidak dijamin di dalam PSAKBI ?</p>\r\n', '<p>Terbakar karena tersambar petir</p>\r\n', '<p>Kendaraan passenger terbakar setelah bertabrakan dengan kendaraan lain dimana kendaraan tertanggung dikemudikan oleh seseorang yang memiliki SIM B1</p>\r\n', '<p>Kendaraan terbakar pada saat membantu kendaraan yang sedang mogok dengan cara ditarik</p>\r\n', '<p>Jalur kabel yang digigit tikus sehingga memicu korsleting listrik dan menyebabkan kebakaran</p>\r\n', '<p>Kendaraan passenger dengan okupasi komersial terbakar tiba tiba di jalan tol saat digunakan mengantar penumpang</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(75, 23, 'singlechoice', '<p>Jenis kapal yang bukan dibawah Direktorat Jendral Perhubungan Darat ?</p>\r\n', '<p>Kapal yang digunakan untuk penyebrangan sungai</p>\r\n', '<p>Kapal yang digunakan untuk penyebrangan danau</p>\r\n', '<p>Kapal yang digunakan untuk penyebrangan selat</p>\r\n', '<p>Kapal Ferry</p>\r\n', '<p>Kapal Kargo</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(76, 23, 'singlechoice', '<p>Sebutkan alur perbaikan sederhana panel part yang terdapat di bengkel rekanan ?</p>\r\n', '<p>Pemeriksaan &ndash; pengetokan &ndash; epoxy &ndash; pengecatan &ndash; finishing</p>\r\n', '<p>Pemeriksaan &ndash; epoxy &ndash; pengetokan &ndash; pengecatan &ndash; finishing</p>\r\n', '<p>Pemeriksaan &ndash; pengetokan &ndash; pengecatan &ndash; epoxy &ndash; finishing</p>\r\n', '<p>Pemeriksaan &ndash; epoxy &ndash; pengecatan &ndash; pengetokan &ndash; finishing</p>\r\n', '<p>Pemeriksaan &ndash; pengecatan &ndash; pengetokan &ndash; epoxy &ndash; finishing</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(77, 23, 'singlechoice', '<p>Apa yang dimaksud dengan New2 -6 ?</p>\r\n', '<p>Tertanggung secara lisan mengancam dan menuntut Raksa secara hukum</p>\r\n', '<p>Tertanggung mengancam alan memasukkan keluhannya ke media cetak/elektronik</p>\r\n', '<p>Tertanggung melaporkan keluhannya ke Leasing / Bank Dealer/ SOB</p>\r\n', '<p>Tertanggung melaporkan keluhannya mengenai follow up Miss Raksa/ Surveyor / Marketing</p>\r\n', '<p>Tertanggung mengancam akan menuntut Raksa ke Pengadilan</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(78, 23, 'singlechoice', '<p>Berapa nilai estimasi pertama sesuai Internal Memo untuk dimasukkan ke sistem apabila terdapat pelaporan klaim Kijang Innova dengan SI 200 juta yang rusak akibat banjir dengan ketinggian banjir mencapai satu roda?</p>\r\n', '<p>5 juta</p>\r\n', '<p>10 juta</p>\r\n', '<p>25 juta</p>\r\n', '<p>25 % dari harga pertanggungan</p>\r\n', '<p>45 % dari harga pertanggungan</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(79, 23, 'singlechoice', '<p>Berapa hari masa berlaku Surat Perintah Kerja</p>\r\n', '<p>10 hari</p>\r\n', '<p>15 hari</p>\r\n', '<p>30 hari</p>\r\n', '<p>60 hari</p>\r\n', '<p>90 hari</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(80, 23, 'singlechoice', '<p>Apabila terdapat Customer meminta kendaraannya dimasukkan ke Bengkel yang diminta Customer yang bukan bengkel rekanan. Pasal di PSAKBI apa yang dapat kita gunakan untuk mengarahkan kendaraan Customer ke bengkel rekanan,</p>\r\n', '<p>Bab IV Pasal 16, Cara Penyelesaian Dan Penetapan Ganti Rugi</p>\r\n', '<p>Bab IV Pasal 15, Penentuan Nilai Ganti Rugi</p>\r\n', '<p>Bab IV Pasal 11, Kewajiban Tertanggung Dalam Hal Terjadi Kerugian Dan / Atau Kerusakan</p>\r\n', '<p>Bab IV Pasal 23, Pembayaran Ganti Rugi</p>\r\n', '<p>Bab IV Pasal 9, Pemeriksaan</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(81, 23, 'singlechoice', '<p>Dalam PSAKBI Bab II Pengecualian Pasal 3 ayat 1 point 1.4 berbunyi Pertanggungan ini <em>tidak menjamin</em> kerugian, kerusakan, biaya atas Kendaraan Bermotor dan/atau tanggung jawab hukum terhadap pihak ketiga, yang disebabkan oleh kelebihan muatan dari kapasitas kendaraan yang telah ditetapkan oleh pabrikan jika hal tersebut tidak diatur oleh pihak yang berwenang. Dari pilihan yang dibawah ini, mana yang bukan terkmaksud bagian dari definisi &rdquo; Kapasitas &rdquo; ?</p>\r\n', '<p>Jumlah berat barang</p>\r\n', '<p>Volume</p>\r\n', '<p>Jenis barang</p>\r\n', '<p>Jumlah orang</p>\r\n', '<p>Jumlah penumpang kendaraaan</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(82, 23, 'singlechoice', '<p>Apabila Kendaraan yang dipertanggungkan beralih kepemilikannya dengan cara apapun dan tidak ada persetujuan tertulis dari tertanggung untuk melanjutkan pertanggungan, maka polis akan berakhir dengan sendirinya setelah berapa hari kalender sejak tanggal pengalihan kepemilikan tersebut?</p>\r\n', '<p>5 hari</p>\r\n', '<p>10 hari</p>\r\n', '<p>15 hari</p>\r\n', '<p>20 hari</p>\r\n', '<p>30 hari</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(83, 23, 'singlechoice', '<p>Apabila ada Customer mengalami bocor ban terkena paku di jalan protokol menggunakan derek swasta untuk mengangkut kendaraan ke rumah. Berapa biaya pergantian maksimum terhadap pengajuan biaya derek dari Customer ?</p>\r\n', '<p>0,5 % dari harga pertanggungan</p>\r\n', '<p>0,5 % dari harga sebenarnya</p>\r\n', '<p>0,05 % dari harga pertanggungan</p>\r\n', '<p>5 % dari harga pertanggungan</p>\r\n', '<p>Tidak memperoleh pergantian rugi</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(84, 23, 'singlechoice', '<p>Dalam kasus klaim banjir, sering kali <em>connecting rod</em> patah dan bengkel meminta Asuransi untuk mengeluarkan SPK terhadap sparepart tersebut. Pada sistem atau bagian part apa tempat connecting rod berada ?</p>\r\n', '<p>Transmisi</p>\r\n', '<p>Rack Steer</p>\r\n', '<p>Kaki-kaki kendaraan</p>\r\n', '<p>Engine</p>\r\n', '<p>Crankshaft</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(85, 23, 'singlechoice', '<p>Dalam proses pengajuan klaim Truk gandeng, salah satu dokumen yang wajib disertakan adalah SIM yang berlaku. Kategori SIM yang di perbolehkan untuk proses klaim ini adalah ?</p>\r\n', '<p>SIM A</p>\r\n', '<p>SIM B1</p>\r\n', '<p>SIM B2</p>\r\n', '<p>SIM C</p>\r\n', '<p>SIMPER</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(86, 24, 'singlechoice', '<p>Setiap <em>Proposal Adjustment</em> Klaim Non-Motor yang dikirimkan kepada Tertanggung umumnya mencakup permintaan beberapa dokumen sebagai berikut kecuali :</p>\r\n', '<p>Permintaan Invoice / Kwitansi Asli.</p>\r\n', '<p>Permintaan Nomor Rekening tujuan pembayaran klaim.</p>\r\n', '<p>Form Kepuasan Pelanggan PT.Asuransi Raksa Pratikara.</p>\r\n', '<p>Surat Pernyataan Penyelesaian Klaim ( claim discharge )</p>\r\n', '<p>Surat Keterangan dari Kepolisian</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(87, 24, 'singlechoice', '<p>Pada Proposal Adjustment Klaim Asuransi Alat Berat harus mencantumkan Disclaimer yang menyatakan bahwa :</p>\r\n', '<p>Proposal Adjustment Klaim menjadi tidak berlaku secara otomatis apabila tidak ada tanggapan dari Tertanggung setelah 30 Hari sejak Proposal tersebut dikeluarkan.</p>\r\n', '<p>Penanggung tidak memberikan ganti rugi atas kehilangan pendapatan Tertanggung</p>\r\n', '<p>Jika ada outstanding premi maka akan dipotong dengan nilai penggantian klaim</p>\r\n', '<p>Penggantian nilai kerugian akan disesuaikan kembali berdasarkan nilai <em>Invoice</em><em> </em>yang diterima, bukan berdasarkan penawaran.</p>\r\n', '<p>Perhitungan nilai kerugian adalah berdasarkan Adjuster Report.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(88, 24, 'singlechoice', '<p>Untuk kasus Klaim Non Motor yang terdapat Cash Call, PLA yang dibuat harus segera di-<em>posting </em>dalam waktu 3 hari kerja<em> </em>(jika DOL sudah pasti).Berapa nilai yang bisa Cash Call saat ini ?</p>\r\n', '<p>USD.150,000</p>\r\n', '<p>USD.125,000</p>\r\n', '<p>USD. 200,000</p>\r\n', '<p>USD. 100,000</p>\r\n', '<p>Semua jawaban salah.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(89, 24, 'singlechoice', '<p>Ketika menerima sebuah laporan klaim dari Tertanggung, Officer Klaim Non Motor harus menanyakan dan mendapatkan informasi awal sebagai berikut KECUALI:</p>\r\n', '<p>Nomor Polis</p>\r\n', '<p>Tanggal Kejadian</p>\r\n', '<p>Estimasi Kerugian</p>\r\n', '<p>Penyebab Kejadian</p>\r\n', '<p>Akta Pendirian Perusahaan</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(90, 24, 'singlechoice', '<p>Suatu Pertanggungan Asuransi secara umum dikatakan Under Insurance apabila ( pilih yang paling tepat ) :</p>\r\n', '<p>Harga Pertanggungan lebih rendah dibandingkan Harga Sebenarnya</p>\r\n', '<p>Harga Pertanggungan lebih rendah dibandingkan Harga Baru</p>\r\n', '<p>Harga Pertanggungan lebih rendah dibandingkan Harga Pasar</p>\r\n', '<p>Harga Pertanggungan lebih rendah dibandingkan Harga Perolehan</p>\r\n', '<p>Harga Pertanggungan lebih rendah dibandingkan Harga Pertanggungan yang disyaratkan Polis</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(91, 24, 'singlechoice', '<p>Seorang Keluarga Nasabah Personal Accident melaporkan terjadi kecelakaan saat naik sepeda di Sudirman, berikut dokumen yang akan diminta KECUALI :</p>\r\n', '<p>Formulir Klaim&nbsp;</p>\r\n', '<p>Estimasi Biaya Perbaikan Sepeda</p>\r\n', '<p>Surat Keterangan Dokter</p>\r\n', '<p>Surat Keterangan Kepolisian</p>\r\n', '<p>Surat Kematian Nasabah ( jika meninggal )</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(92, 24, 'singlechoice', '<p>Yosoa Johar memiliki sebuah Rumah yang dibangun tahun 2000 ukuran tanah 6 x 15 , luas bangunan 100m2. Pada tahun 2021 diasuransikan dengan nilai Rp.250juta, Diketahui harga membangun kembali per m2 saat ini adalah sebesar Rp.3juta. Rumah tersebut terbakar sebagian dan biaya perbaikan Rp.100juta. Berapa nilai klaim yang akan diterima tertanggung dengan reinstatement value clause dan average relief 85%.</p>\r\n', '<p>Rp100juta</p>\r\n', '<p>Rp85juta</p>\r\n', '<p>Rp83,3juta</p>\r\n', '<p>Rp82,5juta</p>\r\n', '<p>Rp.250juta</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(93, 24, 'singlechoice', '<p>Iman seorang pengusaha tambang batu bara memiliki satu unit Excavator diasuransikan di Raksa. Alatnya tersebut mengalami kebakaran tadi malam saat sedang bekerja, Adapun bagian yang terbakar mencakup mesin, kabin, dan electrical, berapa nilai reserve klaim berdasarkan IM ?</p>\r\n', '<p>100% SI</p>\r\n', '<p>90% SI</p>\r\n', '<p>80% SI</p>\r\n', '<p>70% SI</p>\r\n', '<p>60% SI</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(94, 24, 'singlechoice', '<p>PT.Krisander Besar memiliki aset Gudang Sembako diasuransi dengan polis asuransi kebakaran dan diperluas dengan resiko Huru Hara dan Banjir. Gudang tersebut mengalami kebanjiran setinggi 60cm setelah hujan besar dua hari dua malam. Berapa nilai reserve klaim ini berdasarkan IM ?</p>\r\n', '<p>5% SI</p>\r\n', '<p>10% SI</p>\r\n', '<p>15% SI</p>\r\n', '<p>20% SI</p>\r\n', '<p>25% SI</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(95, 24, 'singlechoice', '<p>PT.Pandu Nano Plywood mengirim cargo berupa barang jadi ( kayu lapis ) dari pontianak ke Surabaya. Cargo tersebut basah akibat cuaca buruk. Berapa nilai reserve klaim yang akan diinput berdasarkan IM ?</p>\r\n', '<p>5% SI</p>\r\n', '<p>8% SI</p>\r\n', '<p>10% SI</p>\r\n', '<p>12% SI</p>\r\n', '<p>15% SI</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(96, 24, 'singlechoice', '<p>Manager KNM Raksa memutuskan menunjuk Loss Adjuster untuk menangani sebuah kasus Klaim apabila :</p>\r\n', '<p>Nasabah merupakan korporasi bukan perorangan</p>\r\n', '<p>Nilai Kerugian sama dengan atau lebih besar dari Rp300juta atau ada facultative placement</p>\r\n', '<p>masa periode polis asuransi telah berakhir</p>\r\n', '<p>Penyebab kerugian adalah bencana alam</p>\r\n', '<p>Sulit untuk mencapai kesepakatan dengan nasabah mengenai jumlah ganti rugi.</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(97, 24, 'singlechoice', '<p>Sebuah dokumen yang dibuat untuk melaporkan kerugian sementara kepada Reasuradur atau Member Koasuransi disebut :</p>\r\n', '<p>DLA &ndash; Definite Loss Advice</p>\r\n', '<p>Report Losses Definitely</p>\r\n', '<p>PLA &ndash; Preliminary Loss Advice</p>\r\n', '<p>Adjuster Report</p>\r\n', '<p>Working Sheet</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(98, 24, 'singlechoice', '<p>Apabila stok manufaktur ( pabrik ) terbakar dan mengajukan klaim asuransi kebakaran, maka nilai kerugian nasabah ditentukan berdasarkan :</p>\r\n', '<p>Harga Jual</p>\r\n', '<p>Harga Bahan Baku</p>\r\n', '<p>Harga Barang setengah jadi</p>\r\n', '<p>Biaya Produksi kembali tidak termasuk profit dan tidak melebihi harga pasar</p>\r\n', '<p>Biaya Produksi termasuk profit dan biaya pengiriman.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(99, 24, 'singlechoice', '<p>Apabila terdapat Salvage Klaim Non Motor, maka penjualannya harus dilakukan melalui proses :</p>\r\n', '<p>Sistem Bidding Raksa ( sisbid )</p>\r\n', '<p>Tender Terbuka melalui perusahaan lelang</p>\r\n', '<p>Tender Tertutup dengan surat yang disegel</p>\r\n', '<p>Ditawarkan terlebih dahulu kepada nasabah</p>\r\n', '<p>Ditawarkan kepada karyawan Raksa</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(100, 24, 'singlechoice', '<p>Apa yang dimaksud dengan Double Insurance?</p>\r\n', '<p>Perusahaan Asuransi mengasuransikan dua objek pertanggungan yang berbeda di satu lokasi</p>\r\n', '<p>ada dua perusahaan asuransi yang sejenis di market</p>\r\n', '<p>satu objek pertanggungan diasuransikan lebih dari sekali kepada perusahaan asuransi yang sama atau berbeda.</p>\r\n', '<p>Dua Perusahaan Asuransi asuransikan satu objek pertanggungan Bersama</p>\r\n', '<p>semua jawaban di atas salah</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(101, 24, 'singlechoice', '<p>Penutupan Asuransi Secara Bersama-sama ( ko-Asuransi ) diatur pelaksanaannya dalam POJK sebagai berikut :</p>\r\n', '<p>NOMOR 69 /POJK.05/2016</p>\r\n', '<p>NOMOR 69 /POJK.05/2017</p>\r\n', '<p>NOMOR 79 /POJK.05/2016</p>\r\n', '<p>NOMOR 79 /POJK.05/2017</p>\r\n', '<p>NOMOR 67 /POJK.06/2016</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(102, 24, 'singlechoice', '<p>Ketika menerima sebuah laporan Klaim, bagian KNM harus melakukan verifikasi dokumen polis. Data yang harus diverifikasi adalah sebagai berikut :</p>\r\n', '<p>Periode Polis</p>\r\n', '<p>Lingkup Jaminan dan Klausula Perluasannya</p>\r\n', '<p>Nama Tertanggung dan Nomer Polis</p>\r\n', '<p>Status Pembayaran Premi</p>\r\n', '<p>Semua Jawaban di atas Benar</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(103, 24, 'singlechoice', '<p>Exlusion C pada wording asuransi Alat Berat Raksa mengatur tentang :</p>\r\n', '<p>Kerusakan part yang akan habis terpakai seperti mata bor, pisau, moulding tidak dijamin</p>\r\n', '<p>Kerusakan part yang akan habis terpakai seperti mata bor, pisau, mouding dijamin jika kerusakan disebabkan oleh resiko yang dimain polis, nilai penggantiannya dikurangi depresiasi</p>\r\n', '<p>Kerusakan part yang akan habis terpakai seperti mata bor, pisau, mouding dijamin jika kerusakan disebabkan oleh resiko yang dimain polis, nilai penggantiannya adalah harga baru</p>\r\n', '<p>Kerusakan part yang akan habis terpakai seperti mata bor, pisau, moulding dijamin selama tercantum dalam skedul polis, nilai pertanggungan dirinci</p>\r\n', '<p>semua jawaban di atas salah</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n');
INSERT INTO `soal` (`idsoal`, `idgroup`, `jenissoal`, `soal`, `pilihana`, `pilihanb`, `pilihanc`, `pilihand`, `pilihane`, `pilihanbenar`, `pembahasan`) VALUES
(104, 24, 'singlechoice', '<p>Seorang Tertanggung dapat membangun kembali bangunan yang terbakar atau tidak membangun kembali karena alasan tertentu. Kedua jenis penyelesaian klaim asuransi kebakaran disebut berdasarkan :</p>\r\n', '<p>Interim Payment and Final Payment</p>\r\n', '<p>Indemnity Basis dan Final Payment</p>\r\n', '<p>Interim Payment and Reinstatement</p>\r\n', '<p>Reinstatement and Indemnity Basis</p>\r\n', '<p>Semua jawaban salah.</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(105, 24, 'singlechoice', '<p>Kesalahan Raksa menetapkan liability sebuah kasus klaim dapat menyebabkan :</p>\r\n', '<p>Klaim ditolak oleh Reasuradur sehingga Raksa menanggung sendiri kerugiannya</p>\r\n', '<p>Raksa menghadapi tuntutan nasabah dan mengganti kerugian yang lebih besar</p>\r\n', '<p>Kehilangan kepercayaan nasabah dan merusak brand image perusahaan</p>\r\n', '<p>Raksa mendapat teguran dari OJK</p>\r\n', '<p>&nbsp;semua jawaban di atas benar.</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(106, 25, 'singlechoice', '<p>Minimal SI yang berlaku di Rol untuk dapat menggunakan perluasan bengkel resmi adalah:</p>\r\n', '<p>Rp100.000.000</p>\r\n', '<p>Rp125.000.000</p>\r\n', '<p>Rp150.000.000</p>\r\n', '<p>Rp200.000.000</p>\r\n', '<p>Rp250.000.00</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(107, 25, 'singlechoice', '<p>Nominal MDR yang berlaku untuk pembayaran kartu kredit secara full payment adalah:</p>\r\n', '<p>1,5 %</p>\r\n', '<p>2%</p>\r\n', '<p>2,5%</p>\r\n', '<p>3%</p>\r\n', '<p>3,5%</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(108, 25, 'singlechoice', '<p>Produk perhitungan simulasi yang ada di raksaonline saat ini adalah:</p>\r\n', '<p>Mobil, motor, kebakaran</p>\r\n', '<p>Mobil, cargo, hvc</p>\r\n', '<p>Mobil, motor, hvc</p>\r\n', '<p>Mobil saja</p>\r\n', '<p>Salah semua.</p>\r\n', 'a', '<p>Jawaban yang benar adalah A<br />\r\n&nbsp;</p>\r\n'),
(109, 25, 'singlechoice', '<p>Pilihan metode pembayaran yang ada di website raksaonline adalah sebagai berikut, <strong>kecuali:</strong></p>\r\n', '<p>Transfer</p>\r\n', '<p>Kartu Kredit</p>\r\n', '<p>OVO</p>\r\n', '<p>Gopay</p>\r\n', '<p>Dana</p>\r\n', 'e', '<p>Jawaban yang benar adalah E</p>\r\n'),
(110, 25, 'singlechoice', '<p>Definisi Data B dalam renewal ex leasing adalah</p>\r\n', '<p>Data expired leasing yang tidak melakukan klaim di Raksa</p>\r\n', '<p>Data expired leasing yang memiliki nilai klaim dan dapat di follow up</p>\r\n', '<p>Data expired leasing yang yang mengalami restrukturasi</p>\r\n', '<p>Data expired leasing yang setuju melakukan perpanjangan di Rol</p>\r\n', '<p>Data expired leasing yang membatalkan polisnya sebelum periode habis</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(111, 25, 'singlechoice', '<p>Bank yang dapat melakukan cicilan di Rol adalah</p>\r\n', '<p>BRI</p>\r\n', '<p>BCA</p>\r\n', '<p>OCBC</p>\r\n', '<p>CIMB</p>\r\n', '<p>HSBC</p>\r\n', 'b', '<p>Jawaban yang benar adalah B<br />\r\n&nbsp;</p>\r\n'),
(112, 25, 'singlechoice', '<p>Perluasan yang tidak dicantumkan di pilihan simulasi premi Asuransi mobil website raksaonline adalah:</p>\r\n', '<p>RSCC</p>\r\n', '<p>TPL</p>\r\n', '<p>Derek</p>\r\n', '<p>Banjir</p>\r\n', '<p>EQ</p>\r\n', 'c', '<p>Jawaban yang benar adalah C<br />\r\n&nbsp;</p>\r\n'),
(113, 25, 'singlechoice', '<p>Definisi Data C dalam renewal ex leasing adalah</p>\r\n', '<p>Data expired leasing yang tidak melakukan klaim di Raksa</p>\r\n', '<p>Data expired leasing yang memiliki nilai klaim dan dapat di follow up</p>\r\n', '<p>Data expired leasing yang yang mengalami restrukturasi</p>\r\n', '<p>Data expired leasing yang setuju melakukan perpanjangan di Rol</p>\r\n', '<p>Data expired leasing yang membatalkan polisnya sebelum periode habis</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(114, 25, 'singlechoice', '<p>Kategori yang mendapatkan <strong>rate batas atas</strong> di website raksaonline adalah:</p>\r\n', '<p>Kategori 1 &amp; 2</p>\r\n', '<p>Kategori 2 &amp; 3</p>\r\n', '<p>Kategori 3 &amp; 4</p>\r\n', '<p>Kategori 4 &amp; 5</p>\r\n', '<p>Kategori 5 &amp; 2</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n'),
(115, 25, 'singlechoice', '<p>Data nasabah yang tidak perlu dicantumkan di website Rol adalah:</p>\r\n', '<p>Nama</p>\r\n', '<p>No HP</p>\r\n', '<p>Email</p>\r\n', '<p>Kilometer kendaraan</p>\r\n', '<p>Alamat tinggal</p>\r\n', 'd', '<p>Jawaban yang benar adalah D<br />\r\n&nbsp;</p>\r\n');

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
(1, '2018/2019', 'N'),
(2, '2021/2022', 'Y');

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
(30, 'Hanif Muarif', 'laki-laki', 'Palembang', '1992-08-19', 'siswa', 'hanif', '123456789');

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
  MODIFY `idgroup` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `gurumapel`
--
ALTER TABLE `gurumapel`
  MODIFY `idgurumapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idjawab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `idmapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idnilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `setujian`
--
ALTER TABLE `setujian`
  MODIFY `idujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tahunajaran`
--
ALTER TABLE `tahunajaran`
  MODIFY `idtahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
