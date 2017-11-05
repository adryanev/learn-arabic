-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 05, 2017 at 04:40 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  `authKey` varchar(32) NOT NULL,
  `accessToken` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL,
  `createdAt` date NOT NULL,
  `updatedAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan semua data admin.' ROW_FORMAT=COMPACT;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idAdmin`, `username`, `nama`, `email`, `password`, `authKey`, `accessToken`, `status`, `createdAt`, `updatedAt`) VALUES
(1, 'admin', 'Administrator', 'admin@learn.dev', '$2y$13$03rnZ4DMR.8h16rNNNPAoOQdJFYMqo5hqo.p0meMMnrjuMasUHj.6', '7XFysc_9x9pMdcD3g8wJMESWL3R8seHd', 'lJh3hQkN-HtVZeFJUJYghPxiup8G_HbN-iHwBnJlJXskGw6EA9uRRmgDgM7VNREJKklx2ODo6fDzTEL3Ehbi81qvTJ_WxHCA5IqYKG13rkdHYTEbrjcdvejPopsSbi2uoEWmtzSKJXb5iZt4EBDqhtzl-Vo-ezzhMOS2ELZIm9bA2cGJeP4k3rg74sfEVgtjYgY48tR2dYVNnJSe3sIkhh5d94_4dA3p7PuolwxdEroKgLsFKLWUobAPemTgf8Q', 10, '2017-09-29', '0000-00-00'),
(2, 'adryanev', 'Adryan Eka Vandra', 'adryan.eka.vandra@students.uin-suska.ac.id', '$2y$13$lLFPJnykOd/uelVdGzx7UeUDZhgYtKENgj5xr17qIbX6BCaz958sC', '0z4frilCMd-T0Zzchtl39zEjKtOmv7ya', 'Ixg1Aa1xyzU_altjFq3RWY83o1NwODkzDAvHGsECvsT6Qltoeqgk9gIyriUv6U57xPAue6P-eHi9WiAjG6IuOndQJ9yiHjz0LHgtmOTQFX4ltsNaibw4MLghvmUi5CmDn_BdN4NXroqLlClSN0ksHlQOA8QAgFBepD7sv8IxgH_12HQh01o0y8Qniy45vJ_Si3Pr7sA4Gy9Qx4iiZgmDZCxof83ByLTAS4C-YBYncQAAk-y36zLeo1LjIqWZVo2', 10, '2017-09-29', '0000-00-00'),
(3, 'mazayarizda', 'Mazaya Rizda', 'mrizda63@gmail.com', '$2y$13$9OD1e765KvhWoTv6rzookuejFRbJAGDALIQ1aVwhge3cukJSQdyOO', 'qHayPEhWJisYNIJYOmlg1L_9pJbgx8cU', 'FdlzrgVoGiO9HdYWVltcbO6q2p4iFrlo5_iTg40ZnjmnaLQrsXELHIvpxRs5x16h_zaYTewUsUESMIpTmxdvm4YthjVSyfrHkgO6GbSoxtT7eyOdKVEXNPOgVYsmblamNKnN7JZvPbOzv_xY_MUncy4zhzlQ0quBoucEWTnGCswhUp21hD_CcPvuubJTgQ4YAtypNTx0elUEFvRsBeokRS285fsQa1t2qe-ngLqniUl7qLjc9dz9kLyj2C6jrpN', 10, '2017-09-30', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `idJawaban` int(11) NOT NULL COMMENT 'Id Jawaban',
  `idSoal` int(11) NOT NULL COMMENT 'Id Soal',
  `idUser` int(11) NOT NULL COMMENT 'Id User',
  `jawabanUser` varchar(1) NOT NULL COMMENT 'Jawaban User',
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan Jawaban yang dilakukan oleh user-user';

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(3) NOT NULL COMMENT 'Id Kategori Pembelajaran',
  `namaKategori` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'Nama Kategori Pembelajaran'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Menyimpan kategori dari pembelajaran B. Arab' ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'Mufrodat');

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `idMateri` int(11) NOT NULL,
  `namaMateri` varchar(100) NOT NULL,
  `idKategori` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan materi-materi B. Arab' ROW_FORMAT=COMPACT;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`idMateri`, `namaMateri`, `idKategori`) VALUES
(1, 'Alat-Alat di Kelas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `materi_detail`
--

CREATE TABLE `materi_detail` (
  `idMateriDetail` int(11) NOT NULL,
  `idMateri` int(11) NOT NULL,
  `isi` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET latin1 NOT NULL,
  `terjemahan` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `materi_detail`
--

INSERT INTO `materi_detail` (`idMateriDetail`, `idMateri`, `isi`, `gambar`, `terjemahan`) VALUES
(1, 1, 'كُرْسِيٌّ', 'kursi.png', 'Kursi'),
(2, 1, 'مَكْتَب', 'meja.png', 'Meja'),
(3, 1, 'سَبُّوْرَة', 'papan_tulis.png', 'Papan Tulis'),
(4, 1, 'قَلَمُ الْحِبِر', 'spidol.png', 'Spidol'),
(5, 1, 'طَبَاشِيْر', 'kapur.png', 'Kapur tulis'),
(6, 1, 'خَرِيْطَة', 'peta.png', 'Peta'),
(7, 1, 'جَدْوَلُ الدُّرُوْس', 'jadwal.png', 'Jadwal Pembelajaran'),
(8, 1, 'مِكْنَسَةٌ', 'sapu.png', 'Sapu'),
(9, 1, 'مَزْبَلَةٌ', 'tempat_sampah.png', 'Tempat sampah');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `idNilai` int(11) NOT NULL COMMENT 'ID nilai',
  `idUser` int(11) NOT NULL COMMENT 'ID user',
  `totalNilai` int(11) NOT NULL COMMENT 'Total Nilai User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan nilai-nilai yang diperoleh oleh user.';

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `idSoal` int(11) NOT NULL COMMENT 'ID Soal',
  `soal` varchar(100) NOT NULL COMMENT 'Soal',
  `a` varchar(50) NOT NULL COMMENT 'Pilihan A',
  `b` varchar(50) NOT NULL COMMENT 'Pilihan B',
  `c` varchar(50) NOT NULL COMMENT 'Pilihan C',
  `d` varchar(50) NOT NULL COMMENT 'Pilihan D',
  `jawaban` varchar(1) NOT NULL COMMENT 'Jawaban yang Benar'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan Soal-Soal Ujian';

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `idUjian` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `tglUjian` date NOT NULL,
  `totalSkor` int(11) NOT NULL,
  `idWaktu` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan Log Ujian yang dilakukan oleh User';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL COMMENT 'Id User',
  `username` varchar(20) CHARACTER SET latin1 NOT NULL COMMENT 'Username',
  `nama` varchar(50) CHARACTER SET latin1 NOT NULL COMMENT 'Nama User',
  `email` varchar(80) CHARACTER SET latin1 NOT NULL COMMENT 'Email User',
  `authKey` varchar(32) NOT NULL COMMENT 'Auth Key user',
  `accessToken` varchar(255) NOT NULL COMMENT 'Access Token user',
  `password` varchar(64) CHARACTER SET latin1 NOT NULL COMMENT 'Password User',
  `tanggalLahir` date NOT NULL COMMENT 'Tanggal Lahir User',
  `status` smallint(6) NOT NULL COMMENT '0 = Deleted, 10 = Active',
  `createdAt` int(11) NOT NULL,
  `updatedAt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Menyimpan data-data user' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `idWaktu` int(3) NOT NULL COMMENT 'Id waktu',
  `namaWaktu` varchar(20) NOT NULL COMMENT 'Nama Waktu',
  `durasiWaktu` time NOT NULL COMMENT 'Durasi dari waktu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Menyimpan Waktu-waktu yang akan diguankan dalam ujian.';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idJawaban`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`idMateri`),
  ADD KEY `fk_kategori_materi_idKategori` (`idKategori`);

--
-- Indexes for table `materi_detail`
--
ALTER TABLE `materi_detail`
  ADD PRIMARY KEY (`idMateriDetail`),
  ADD KEY `fk_materi_detail_materi_idMateri` (`idMateri`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`idNilai`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idSoal`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`idUjian`),
  ADD KEY `fk_user_ujian_idUser` (`idUser`),
  ADD KEY `fk_waktu_ujian_idWaktu` (`idWaktu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`idWaktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idJawaban` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id Jawaban';
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Id Kategori Pembelajaran', AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `idMateri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materi_detail`
--
ALTER TABLE `materi_detail`
  MODIFY `idMateriDetail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `idNilai` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID nilai';
--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idSoal` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID Soal';
--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `idUjian` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id User';
--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `idWaktu` int(3) NOT NULL AUTO_INCREMENT COMMENT 'Id waktu';
--
-- Constraints for dumped tables
--

--
-- Constraints for table `materi`
--
ALTER TABLE `materi`
  ADD CONSTRAINT `fk_kategori_materi_idKategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `materi_detail`
--
ALTER TABLE `materi_detail`
  ADD CONSTRAINT `fk_materi_detail_materi_idMateri` FOREIGN KEY (`idMateri`) REFERENCES `materi` (`idMateri`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ujian`
--
ALTER TABLE `ujian`
  ADD CONSTRAINT `fk_user_ujian_idUser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_waktu_ujian_idWaktu` FOREIGN KEY (`idWaktu`) REFERENCES `waktu` (`idWaktu`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
