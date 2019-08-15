-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09 Agu 2019 pada 09.28
-- Versi Server: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peminjaman_kunci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE IF NOT EXISTS `tbl_jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `jurusan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `jurusan`) VALUES
(1, 'Fakultas'),
(2, 'Biologi'),
(3, 'Fisika'),
(4, 'Kimia'),
(5, 'Matematika'),
(6, 'Teknik Informatika'),
(7, 'Teknik Arsitektur'),
(8, 'Perpustakaan dan Sains Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjam` (
  `id_pinjam` int(11) NOT NULL,
  `tanggal_jam` datetime NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjam`
--

INSERT INTO `tbl_pinjam` (`id_pinjam`, `tanggal_jam`, `id_jurusan`, `no_hp`, `nama`) VALUES
(1, '0000-00-00 00:00:00', 1, '081234567890', ''),
(2, '2019-08-15 00:00:00', 1, '081336349305', 'Dikky Rahmad'),
(4, '2019-08-08 17:43:50', 3, '', NULL),
(5, '2019-08-08 17:56:03', 1, '', NULL),
(6, '2019-08-08 18:30:41', 3, '', NULL),
(7, '2019-08-08 18:31:00', 8, '', NULL),
(8, '2019-08-08 18:31:28', 4, '', NULL),
(9, '2019-08-09 01:02:10', 1, '', NULL),
(10, '2019-08-09 01:30:27', 3, '081336349305', NULL),
(11, '2019-08-09 01:31:02', 7, '08133639999', NULL),
(13, '2019-08-09 01:31:53', 6, '08133631231', NULL),
(14, '2019-08-09 09:19:59', 4, '08133639999', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pinjam_ruang`
--

CREATE TABLE IF NOT EXISTS `tbl_pinjam_ruang` (
  `id` int(11) NOT NULL,
  `id_tbl_pinjam` int(11) NOT NULL,
  `id_tbl_ruangan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pinjam_ruang`
--

INSERT INTO `tbl_pinjam_ruang` (`id`, `id_tbl_pinjam`, `id_tbl_ruangan`) VALUES
(3, 4, 28),
(4, 4, 30),
(5, 5, 3),
(6, 6, 27),
(7, 6, 28),
(8, 7, 104),
(9, 8, 43),
(10, 8, 45),
(11, 9, 3),
(12, 10, 29),
(13, 11, 89),
(14, 13, 73),
(15, 14, 42),
(16, 14, 43),
(17, 14, 44);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ruangan`
--

CREATE TABLE IF NOT EXISTS `tbl_ruangan` (
  `id_ruangan` int(11) NOT NULL,
  `ruangan` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `flag` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ruangan`
--

INSERT INTO `tbl_ruangan` (`id_ruangan`, `ruangan`, `id_jurusan`, `flag`) VALUES
(1, 'Bagian Umum', 1, 1),
(2, 'Pembantu Dekan II Administrasi Keuangan', 1, 0),
(3, 'Pelayanan Akademik', 1, 0),
(4, 'Unit SIM', 1, 1),
(5, 'Pembantu Dekan I Pembantu Dekan III Kepala Laboratorium', 1, 0),
(6, 'Sidang', 1, 0),
(7, 'Dekan', 1, 0),
(8, 'Lab.Integrasi Islam dan Sains', 1, 0),
(9, 'Teknik Informatika', 1, 0),
(10, 'Administrasi Fakultas ', 1, 0),
(11, 'Lab.Biokimia', 2, 0),
(12, 'Lab.Mikrobiologi', 2, 0),
(13, 'Lab.Fisiologi Tumbuhan', 2, 0),
(14, 'Lab.Genetik dan Biomol', 2, 0),
(15, 'Kuliah', 2, 0),
(16, 'Administrasi', 2, 0),
(17, 'Dosen', 2, 0),
(18, 'Ketua Jurusan', 2, 0),
(19, 'Baca dan Diskusi', 2, 0),
(20, 'Lab.Optik', 2, 0),
(21, 'Lab.Ekologi', 2, 0),
(22, 'Lab.Pendidikan', 2, 0),
(23, 'Lab.Hewan Coba', 2, 0),
(24, 'Lab.Fisiologi Hewan', 2, 0),
(25, 'Lab.Kultur Jaringan Hewan dan Tumbuhan', 2, 0),
(26, 'Lab.Riset Material', 2, 0),
(27, 'Lab.Elektronika', 3, 0),
(28, 'Lab.Komputasi', 3, 0),
(29, 'Lab.Geofisika', 3, 0),
(30, 'Administrasi', 3, 0),
(31, 'Ketua Jurusan', 3, 0),
(32, 'Sidang', 3, 0),
(33, 'Lab.Riset Fisika Inti', 3, 0),
(34, 'Lab.Termodinamika', 3, 0),
(35, 'Lab.Fisika Modern', 3, 0),
(36, 'Diskusi', 3, 0),
(37, 'Dosen', 3, 0),
(38, 'Akustik', 3, 0),
(39, 'Lab.Elektromagnetik', 3, 0),
(40, 'Zat Padat dan Optik', 3, 0),
(41, 'Diskusi I', 4, 0),
(42, 'Diskusi II', 4, 0),
(43, 'Komputasi', 4, 0),
(44, 'R.AAS R.HPLC & Turbidimeter Lab.Instrumentasi', 4, 0),
(45, 'UV - VIS & FTIR ', 4, 0),
(46, 'Lab.Riset Fisika', 4, 0),
(47, 'Gelas', 4, 0),
(48, 'Lab.Anorganik dan Kimia Dasar', 4, 0),
(49, 'Lab.Layanan Analisis', 4, 0),
(50, 'Lab.Kimia Fisika & Kimia Analitik', 4, 0),
(51, 'Lab.Organik', 4, 0),
(52, 'Lab.Riset Anorganik', 4, 0),
(53, 'Lab.Riset Kimia Analitik', 4, 0),
(54, 'Lab.Riset Biokimia & Bioteknologi', 4, 0),
(55, 'Lab.Biokimia', 4, 0),
(56, 'Dosen', 4, 0),
(57, 'Administrasi', 4, 0),
(58, 'Chemistry Departement Head of Dept Room', 4, 0),
(59, 'Lab.Fisika Dasar', 3, 0),
(60, 'Lab.Mekanik', 3, 0),
(61, 'Sidang', 5, 0),
(62, 'Kajur', 5, 0),
(63, 'Lab.Komputasi dan Pemrogram', 5, 0),
(64, 'Baca', 5, 0),
(65, 'Administrasi', 5, 0),
(66, 'Lab.Aljabar dan Analisis', 5, 0),
(67, 'Lab.Matematika Terapan', 5, 0),
(68, 'Lab.Statistik dan aktuaria', 5, 0),
(69, 'Diskusi', 5, 0),
(70, 'Meeting', 5, 0),
(71, 'Dosen', 5, 0),
(72, 'Meeting', 6, 0),
(73, 'Dosen', 6, 0),
(74, 'Programming Laboratory', 6, 0),
(75, 'Komputer Vision Laboratory', 6, 0),
(76, 'Mobile Programming Laboratory', 6, 0),
(77, 'R.Jurusan  R.Admin', 6, 0),
(78, 'Digital & Robotic laboratory', 6, 0),
(79, 'Multimedia Laboratory', 6, 0),
(80, 'Technopreneurship Laboratory', 6, 0),
(81, 'Database Laboratory', 6, 0),
(82, 'HCI Laboratory', 6, 0),
(83, 'Computer Network Laboratory', 6, 0),
(84, 'Artificial intelligence Laboratory', 6, 0),
(85, 'Auditorium Utara', 1, 0),
(86, 'Auditorium Selatan', 1, 0),
(87, 'Studio 1', 7, 0),
(88, 'Studio 2', 7, 0),
(89, 'Studio 3', 7, 0),
(90, 'Studio 4', 7, 0),
(91, 'Studio 5', 7, 0),
(92, 'Studio 6', 7, 0),
(93, 'Galeri Arsitektur', 7, 0),
(94, 'Architecture Theory and Criticism', 7, 0),
(95, 'islamic Architecture Design & Education', 7, 0),
(96, 'Architecture Library', 7, 0),
(97, 'Head of Departement Administration', 7, 0),
(98, 'Islamic Design Architecture Laboratory', 7, 0),
(99, 'Science and Building Technology', 7, 0),
(100, 'Majelis Room', 7, 0),
(101, 'Sustainable Contruction Building Technology', 7, 0),
(102, 'Islamic Urban and Built Environment', 7, 0),
(103, 'Digital Architecture Laboratory', 7, 0),
(104, 'R.Kajur R.Admin', 8, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_hp` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama`, `no_hp`) VALUES
(1, 'johan', '2147483647');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  ADD PRIMARY KEY (`id_pinjam`),
  ADD KEY `id_jurusan` (`id_jurusan`),
  ADD KEY `no_hp` (`no_hp`);

--
-- Indexes for table `tbl_pinjam_ruang`
--
ALTER TABLE `tbl_pinjam_ruang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tbl_pinjam` (`id_tbl_pinjam`),
  ADD KEY `id_tbl_ruangan` (`id_tbl_ruangan`),
  ADD KEY `id_tbl_ruangan_2` (`id_tbl_ruangan`),
  ADD KEY `id_tbl_pinjam_2` (`id_tbl_pinjam`);

--
-- Indexes for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD PRIMARY KEY (`id_ruangan`),
  ADD KEY `id_jurusan` (`id_jurusan`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `no_hp` (`no_hp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_pinjam`
--
ALTER TABLE `tbl_pinjam`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_pinjam_ruang`
--
ALTER TABLE `tbl_pinjam_ruang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  MODIFY `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=105;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_pinjam_ruang`
--
ALTER TABLE `tbl_pinjam_ruang`
  ADD CONSTRAINT `tbl_pinjam_ruang_ibfk_1` FOREIGN KEY (`id_tbl_pinjam`) REFERENCES `tbl_pinjam` (`id_pinjam`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `tbl_pinjam_ruang_ibfk_2` FOREIGN KEY (`id_tbl_ruangan`) REFERENCES `tbl_ruangan` (`id_ruangan`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tbl_ruangan`
--
ALTER TABLE `tbl_ruangan`
  ADD CONSTRAINT `tbl_ruangan_ibfk_1` FOREIGN KEY (`id_jurusan`) REFERENCES `tbl_jurusan` (`id_jurusan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
