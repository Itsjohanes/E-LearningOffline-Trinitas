-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 04, 2024 at 10:16 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `offline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_akun`
--

CREATE TABLE `tb_akun` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_akun`
--

INSERT INTO `tb_akun` (`id`, `email`, `nama`, `password`, `role`) VALUES
(1, 'johanesalex774@gmail.com', 'Johannes Alexander Putra', '$2y$10$HUJsr2XKW5AJiUqLDQ9YQuyhAIBcFjAuOAFnTUfNR5gRl/hK9Uw9K', 1),
(3, 'saifulgifarievandwi@gmail.com', 'Evan Dwi Saiful Gifari ', '$2y$10$KGFTrjGugUyt2XNcEIfkb.mWrI5d.H1C.NPfX2bN4FhPIyx5loP9S', 0),
(4, 'evliyasatarii@gmail.com', 'Evliya Satari Nurarifah', '$2y$10$s2QutYnoAgoIBG0ktdxlVeBYungoxmd0AMlVPcUUYgFb1SucH3i3C', 0),
(5, 'mansyurfarizky@gmail.com', 'Andhika Farizky Mansyur', '$2y$10$eKZQTikPw24G6N7znscWtuDes/Qs/Wp27zjJxFT//QyO.d/d2VOgW', 0),
(6, 'rakamaulidasukmawan@gmail.com', 'raka Maulida Sukmawan', '$2y$10$1IKEjmU5oM2sKetJEcVfk.j7235ok9XSZ644BLxnr7vQ.vgZhokjC', 0),
(7, 'ikmalhanaanz31@gmail.com', 'Ikmal Hanaan Zikri', '$2y$10$B1WqRzi5NgM8GmYdiilpguWhxzI1Jp.HeRScIG3cYh2R4sJY07gTK', 0),
(8, '8h.juangsyahidaljihad@gmail.com', 'juang syahid al jihad', '$2y$10$F8Oo1JyI0Djaas122W6HbOsdPVvSaBUZgAw53hlmeySFhLI.SnT5S', 0),
(9, 'naufalajhh632@gmail.com', 'Naufal Aulia Sabhani', '$2y$10$18rzJfkx2PIS9MMOUjQPAeAS8GeAX7xgv/2oKHBin52ruwbEjQpai', 0),
(10, 'kayladwiramadhani6@gmail.com', 'Kayla Dwi Ramadhany', '$2y$10$JmxpUAA2IPLN8Ra1V1W7yeWRWadpRqeqHDpRzlfr9w1/pWlPQI2RO', 0),
(11, 'reyvaaafarysta@gmail.com', 'Reyva Azka Ali Farysta', '$2y$10$JtbYn25TY6aEUscv91773Owp06UFJZGMv1GnG5bIoFCP0fg2yOowO', 0),
(12, 'salmanhh125@gmail.com', 'Muhammad Salman Hanan Hakim', '$2y$10$OKg5pCBSjMBTnS12A63yjeR/B1vYkeFP2uir1FmWSt0ZxBKzfFtrS', 0),
(13, 'dreenation21@gmail.com', 'Adrenalin Muhammad Dewangga', '$2y$10$csQa3d3XaSbgVzGbbZoULuYSgXz6fO6KqdhESpbu86kuhdhtsSFDe', 0),
(14, 'arcello.azzahran@gmail.com', 'Arcello Azzahran', '$2y$10$7wVTgMRJplqMngH8oiEtquAZh86NpRHk9NVH1fZTSFl76ypCh9CaC', 0),
(15, 'meirara9@gmail.com', 'Khumeira Nur\'aini', '$2y$10$SixB2e4LWkC/yAb57k5E0uowf6rPWVfqFv0RALtah9UfnvC0cCbwW', 0),
(16, 'hanudza07@gmail.com', 'Muhamad Hanif Nur Dzakwan', '$2y$10$pKn37oy/BWiveNkalM592OT/Dy2nleJ5LRb0pBZq/iP6cftudCY0y', 0),
(17, 'aneiyrap@gmail.com', 'Aneiyra Anindya Pawwaz', '$2y$10$Jt8S62n41hgfYLPN04yYuufz1rMsMr5H164wVhOlfQJby2aG4ryZq', 0),
(18, 'leokun7660@gmail.com', 'Yusuf Leonard Passandaraan', '$2y$10$rxSiwdZ5EV6HRfkpvXZ7juJA4Pw5ZGjIrBDp5zyU2.YzpUawi3aq2', 0),
(19, 'rstdhy10@gmail.com', 'Daiva Afdal Rizki Febrian', '$2y$10$W.1TfjYWclE4NLSqE5C4dOp3fS/.yY563OMU1OoyxZyROTOTItZB.', 0),
(20, 'septyaningrumberty@gmail.com', 'BERTY SEPTYANINGRUM', '$2y$10$28z341zASIIoF0hJ9kHqoOCdYPOB7nO9hh38MdFuhJskf/FnB2gIq', 0),
(21, 'muhammadrafishidqi56@gmail.com', 'Muhammad Rafi Shidqi', '$2y$10$Rlnz3ZPdM22NVFbG/YdDLO1biZVcQZDIByjph/u4R0VwYmVGBwAqu', 0),
(22, 'zufarrasyidibrahim@gmail.com', 'Muhammad Zufar Rasyid Ibrahim', '$2y$10$QcAN2J2EwP3pblSgCp0K2OPFe3IzHgVphvEsUaFfM0gNFxJQFUBcO', 0),
(23, 'yahyaabdulazizabbaz@gmail.com', 'Yahya Abdul Aziz A S ', '$2y$10$u43lMuy3mXsdQ4TQiQ0GGOXh9QDg48uUGQvmgHIxToU6SXdhdjiJ2', 0),
(24, 'kiranlestrii@gmail.com', 'KIRANI LESTARI', '$2y$10$YE6ZORrhtSvHMvfZCoSFQORbk2jMGXGHxk9xttb4OC4LMAGQxrF7G', 0),
(25, 'reffireskian13@gmail.com', 'Reffi Reskian', '$2y$10$EvZSNkgW04Vj0CqoKIBoq.gwbzfY1740qz.larXug36WerXzGc3zu', 0),
(26, 'azijulakbar19@gmail.com', 'Azijul Akbar Nur Fatihah', '$2y$10$imzeGEkHoK.xdbkiUMJwwem2vvbL2lMtmCWx9ux9BBOX3rxz7xga.', 0),
(27, 'esterrenata16@gmail.com', 'Esther Renata Situmorang ', '$2y$10$Cey8QzuDWti3QzyKZ4r58OU8/JUdIx.8uVJsW7DPm9ULT07ymLajC', 0),
(28, 'Daffaabiyu0705@gmail.com', 'Daffa Abiyu Hidayaturohiim', '$2y$10$0SYFzs2fIOEY1/3E3FLcA.Fn2uGV.lamWACef8wJ.UKeW8MT6JFWu', 0),
(30, 'qinthara2607@gmail.com', 'qinthara', '$2y$10$bsOI1a/f3fHicXtg4ijV8uSdhYkv2pG9dHL0XM8kooQ3QttoMoNra', 0),
(31, 'hannymaudii@gmail.com', 'Hany Alya Maudina', '$2y$10$U3Rq/IgyhAtVkBHujquyte6eXuNGqooQ.5uZK1mEHOYSKzwVB3BSu', 0),
(32, 'abayganteng0801@gmail.com', 'ZanabarMuhamadFirzi', '$2y$10$WmUV6afArY2m2WacjCfN7.qxlm5PBjGHLEEKxqkWU5MZNNHb.uyLC', 0),
(34, 'paradillaafifah@gmail.com', 'Paradilla Soraya Afifah', '$2y$10$In78uGA/5FoKPjtzZoRUe.By6mcwDGflCrAmJ5Vqry9jQW3nMNHrm', 0),
(35, 'radityafwudnd@gmail.com', 'Raditya Faiz Fathir Ahmad', '$2y$10$FRwrQk5MB0dtQbmiEjNwDuzyVPcG6FRdZ6FglApb/sOBQfBuWNaji', 0),
(36, 'salmaaaaisyahhh@gmail.com', 'salma siti aisyah', '$2y$10$3dGr2g9YWU5Eecx2ywJqs.xrFCRodicERZ6PSgvtrpoVxtxhYEOkW', 0),
(38, 'saelan95@gmail.com', 'Ira Setiawati ', '$2y$10$c6gQKI1najPVK6VFxdFhH.2271Hscxzihz7iurTPYwxGapYgKDXRC', 0),
(41, 'ristiyanurputri@gmail.com', 'Ristiya Nur Putri', '$2y$10$2pW4r7.4SrnAmkQgg2czDOeG2RF3rzT08/A9OM.RSsURVkRgtgHde', 0),
(42, 'danendra@gmail.com', 'Danendra', '$2y$10$2vPa4Up1OaLqxVkUwkq3DedUSrhl1wFVP6zS2d5rUJnAZfNvgkPEK', 0),
(44, 'muhamadzalfadliyaulhaq@gmail.com', 'Muhamad zalfa dliyaulhaq', '$2y$10$LUxD6Nl4btpaLFz.l9kG8ehYBNm9JKPgdA3D5LSErb1Yh8Y3aPclu', 0),
(45, 'johannes@upi.edu', 'Doni', '$2y$10$3VYjafSqBYc3xIGH7.p/NeawC2559lf4Y1SRWQTDwEzlawuCzREYK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasilquiz`
--

CREATE TABLE `tb_hasilquiz` (
  `id_hasilquiz` int NOT NULL,
  `id_siswa` int NOT NULL,
  `jawaban` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `benar` int NOT NULL,
  `salah` int NOT NULL,
  `nilai` int NOT NULL,
  `kosong` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasiltugas`
--

CREATE TABLE `tb_hasiltugas` (
  `id_hasiltugas` int NOT NULL,
  `nilai` int DEFAULT NULL,
  `id_pertemuan` int NOT NULL,
  `id_siswa` int NOT NULL,
  `komentar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `upload` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `scored_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_hasiltugas`
--

INSERT INTO `tb_hasiltugas` (`id_hasiltugas`, `nilai`, `id_pertemuan`, `id_siswa`, `komentar`, `text`, `upload`, `created_at`, `updated_at`, `scored_at`) VALUES
(74, NULL, 3, 13, NULL, 'Ini Pak', '7f4b358ebb0b32b340e0ba78d11fc664.pdf', '2024-08-04 15:11:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id_materi` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `materi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id_materi`, `id_pertemuan`, `materi`) VALUES
(26, 3, 'backtraking.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int NOT NULL,
  `id_siswa` int NOT NULL,
  `tugas_1` int DEFAULT NULL,
  `tugas_2` int DEFAULT NULL,
  `tugas_3` int DEFAULT NULL,
  `quiz_1` int DEFAULT NULL,
  `quiz_2` int DEFAULT NULL,
  `quiz_3` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_siswa`, `tugas_1`, `tugas_2`, `tugas_3`, `quiz_1`, `quiz_2`, `quiz_3`) VALUES
(2, 3, 100, NULL, NULL, 100, 95, NULL),
(3, 4, 100, NULL, NULL, 83, 95, NULL),
(4, 5, 100, NULL, NULL, 83, 74, NULL),
(5, 6, 78, NULL, NULL, 50, NULL, NULL),
(6, 7, 88, NULL, NULL, 100, 79, NULL),
(7, 8, 81, NULL, NULL, 83, NULL, NULL),
(8, 9, 100, NULL, NULL, 83, NULL, NULL),
(9, 10, 100, NULL, NULL, 50, 89, NULL),
(10, 11, 100, NULL, NULL, 83, 84, NULL),
(11, 12, 100, NULL, NULL, 67, NULL, NULL),
(12, 13, 70, NULL, NULL, 100, NULL, 100),
(13, 14, 100, NULL, NULL, 50, 26, NULL),
(14, 15, 97, NULL, NULL, NULL, NULL, NULL),
(15, 16, 88, NULL, NULL, 100, 84, NULL),
(16, 17, 97, NULL, NULL, 100, 95, NULL),
(17, 18, 100, NULL, NULL, 83, NULL, NULL),
(18, 19, 78, NULL, NULL, 100, NULL, NULL),
(19, 20, 97, NULL, NULL, 50, 89, NULL),
(20, 21, 88, NULL, NULL, 100, 89, NULL),
(21, 22, 100, NULL, NULL, 50, NULL, NULL),
(22, 23, 88, NULL, NULL, 67, NULL, NULL),
(23, 24, 97, NULL, NULL, 100, 95, NULL),
(24, 25, 100, NULL, NULL, 100, 84, NULL),
(25, 26, 100, NULL, NULL, 83, 63, NULL),
(26, 27, 78, NULL, NULL, 67, 95, NULL),
(27, 28, 88, NULL, NULL, 83, NULL, NULL),
(29, 30, 100, NULL, NULL, 100, NULL, NULL),
(30, 31, 78, NULL, NULL, 33, 89, NULL),
(31, 32, NULL, NULL, NULL, 50, NULL, NULL),
(33, 34, 100, NULL, NULL, 100, 95, NULL),
(34, 35, 100, NULL, NULL, 100, NULL, NULL),
(35, 36, 100, NULL, NULL, 33, NULL, NULL),
(37, 38, 97, NULL, NULL, 33, 95, NULL),
(40, 41, 97, NULL, NULL, 17, NULL, NULL),
(41, 42, 100, NULL, NULL, 100, NULL, NULL),
(43, 44, NULL, NULL, NULL, 33, NULL, NULL),
(44, 45, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pertemuan`
--

CREATE TABLE `tb_pertemuan` (
  `id_pertemuan` int NOT NULL,
  `pertemuan` int NOT NULL,
  `penjelasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `aktif` int NOT NULL,
  `tp` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dateline_tgs` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pertemuan`
--

INSERT INTO `tb_pertemuan` (`id_pertemuan`, `pertemuan`, `penjelasan`, `aktif`, `tp`, `gambar`, `dateline_tgs`) VALUES
(1, 1, 'Pertemuan Pertama kita membahas computational thinking', 0, 'Menerapkan proses komputasi untuk memecahkan masalah menggunakan elemen computational thinking', '16.png', '2024-08-05 16:59:00'),
(2, 2, 'Menerapkan proses komputasi untuk memecahkan masalah menggunakan elemen computational thinking', 1, 'Menerapkan proses komputasi untuk memecahkan masalah menggunakan elemen computational thinking', '222.png', '2024-08-07 16:59:00'),
(3, 3, 'Menerapkan konsep algoritma standar untuk menyelesaikan permasalahan dalam pengolahan data', 1, 'Menerapkan konsep algoritma standar untuk menyelesaikan permasalahan dalam pengolahan data', '333.png', '2024-08-07 16:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_quiz`
--

CREATE TABLE `tb_quiz` (
  `id_soal` int NOT NULL,
  `soal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `gambar` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_a` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_b` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_d` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opsi_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kunci` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pembahasan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `id_pertemuan` int NOT NULL,
  `id_ps` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_quiz`
--

INSERT INTO `tb_quiz` (`id_soal`, `soal`, `gambar`, `opsi_a`, `opsi_b`, `opsi_c`, `opsi_d`, `opsi_e`, `kunci`, `pembahasan`, `id_pertemuan`, `id_ps`) VALUES
(70, 'apa contohnya', '', ' A', ' B', ' C', ' D', ' E', 'A', 'Kunci adalah A karena begitu dari sananya', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tugas`
--

CREATE TABLE `tb_tugas` (
  `id_tugas` int NOT NULL,
  `id_pertemuan` int NOT NULL,
  `tugas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tugas`
--

INSERT INTO `tb_tugas` (`id_tugas`, `id_pertemuan`, `tugas`) VALUES
(18, 3, 'GOOGA241102080.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_akun`
--
ALTER TABLE `tb_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  ADD PRIMARY KEY (`id_hasilquiz`),
  ADD KEY `id_pertemuan` (`id_pertemuan`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  ADD PRIMARY KEY (`id_hasiltugas`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id_materi`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  ADD PRIMARY KEY (`id_pertemuan`);

--
-- Indexes for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  ADD PRIMARY KEY (`id_soal`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- Indexes for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD PRIMARY KEY (`id_tugas`),
  ADD KEY `id_pertemuan` (`id_pertemuan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_akun`
--
ALTER TABLE `tb_akun`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  MODIFY `id_hasilquiz` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  MODIFY `id_hasiltugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id_materi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_pertemuan`
--
ALTER TABLE `tb_pertemuan`
  MODIFY `id_pertemuan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  MODIFY `id_soal` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  MODIFY `id_tugas` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_hasilquiz`
--
ALTER TABLE `tb_hasilquiz`
  ADD CONSTRAINT `tb_hasilquiz_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`),
  ADD CONSTRAINT `tb_hasilquiz_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_hasiltugas`
--
ALTER TABLE `tb_hasiltugas`
  ADD CONSTRAINT `tb_hasiltugas_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`),
  ADD CONSTRAINT `tb_hasiltugas_ibfk_2` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `tb_akun` (`id`);

--
-- Constraints for table `tb_quiz`
--
ALTER TABLE `tb_quiz`
  ADD CONSTRAINT `tb_quiz_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);

--
-- Constraints for table `tb_tugas`
--
ALTER TABLE `tb_tugas`
  ADD CONSTRAINT `tb_tugas_ibfk_1` FOREIGN KEY (`id_pertemuan`) REFERENCES `tb_pertemuan` (`id_pertemuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
