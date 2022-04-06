-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Apr 2022 pada 09.31
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_osis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_anggota`
--

CREATE TABLE `tbl_anggota` (
  `id_anggota` int(5) NOT NULL,
  `nama_anggota` varchar(100) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kelas` varchar(100) DEFAULT NULL,
  `tempat_tanggal_lahir` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `program_keahlian` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `tahun_masa_khidmat` varchar(100) NOT NULL,
  `foto` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_anggota`
--

INSERT INTO `tbl_anggota` (`id_anggota`, `nama_anggota`, `alamat`, `kelas`, `tempat_tanggal_lahir`, `no_hp`, `program_keahlian`, `jabatan`, `tahun_masa_khidmat`, `foto`) VALUES
(13, 'Fidya', 'Jln.Rs.Umum', 'XI RPL 1', 'Tasikmalaya,030904', '082365123', 'RPL', 'Anggota', '2021', 0x696d67),
(14, 'Giva', 'Leuwianyar', 'XI RPL 1', 'Tasikmalaya', '567', 'RPL', 'Anggota', '2021', ''),
(15, 'Tedi', 'Jln.Yudanegara', 'XI RPL 1', 'Tasikmalaya', '083132138147', 'RPL', 'Wakil Ketua Osis', '2021', ''),
(16, 'Alfa', 'Paseh', 'XI RPL 1', 'Tasikmalaya', '774', 'RPL', 'Anggota', '2021', ''),
(17, 'Dea', 'Bebedilan', 'XI RPL 1', 'Tasikmalaya', '6457', 'RPL', 'Anggota', '2021', ''),
(18, 'Ipni', 'Cempaka', 'XI RPL 1', 'Tasikmalaya', '74655', 'RPL', 'Anggota', '2021', ''),
(19, 'Risa', 'Nagarawangi', 'XI RPL 2', 'Tasikmalaya,27 Oktober 2004', '083180975147', 'RPL', 'Wakil Belanegara', '2021', ''),
(20, 'Tita Purnamasari', 'Panjalu', 'XI RPL 2', 'Tasikmalaya,23 Februari 2005', '088214916679', 'RPL', 'Wakil Bendahara', '2021', 0x494d472d32303231313130382d5741303030352e6a7067),
(21, 'Ilan', 'Leuwianyar', 'XI RPL 2', 'Tasikmalaya,10 Januari 2004', '0895336269261', 'RPL', 'Wakil Ketua Ekstrakulikuler', '2021', 0x494d475f32303231313032315f3131313735302e6a7067),
(22, 'Fadlam', 'Purbaratu', 'XI RPL 1', 'Tasikmalaya', '56757', 'RPL', 'Anggota', '2021', ''),
(23, 'Firda', 'Cikanyere', 'XI RPL 1', 'Tasikmalaya', '083872609927', 'RPL', 'Wakil Sekretaris', '2021', ''),
(24, 'Meri', 'Paseh', 'XI RPL 3', 'Tasikmalaya,02 Juli 2005', '082117127449', 'RPL', 'Wakil Ketua Kesenian', '2021', 0x494d472d32303231313032302d5741303030352e6a7067),
(25, 'Ade Muslihin', 'Cikanyere', 'XI TBSM 1', 'Tasikmalaya,21 Maret 2004', '085793676558', 'TBSM', 'Wakil Ketua Mpk', '2021', 0x494d472d32303231313131312d5741303031322e6a7067),
(26, 'Raihan', 'Argasari', 'XI RPL 1', 'Tasikmalaya', '7675', 'RPL', 'Anggota', '2021', ''),
(27, 'Eki', 'Kalangsari', 'XI TBSM 2', 'Tasikmalaya,17 September 2004', '085797817904', 'TBSM', 'Wakil Ketua Keamanan', '2021', 0x494d472d32303231313032372d5741303031302e6a7067),
(28, 'Resti', 'Kawalu', 'XI TBSM 1', 'Tasikmalaya,12 April 2004', '083152501495', 'TBSM', 'Wakil Ketua Kerohanian', '2021', 0x494d472d32303231313130392d5741303030302e6a7067),
(29, 'Bana', 'Argasari', 'XI RPL 1', 'Tasikmalaya', '9678', 'RPL', 'Anggota', '2021', ''),
(30, 'Rizki.A', 'Mangkubumi', 'XI TBSM 2', 'Tasikmalaya,29 Desember 2004', '083856105601', 'TBSM', 'Ekstrakulikuler', '2021', 0x494d472d32303231313031382d5741303030302e6a7067),
(31, 'Yusri', 'Cikanyere', 'XI RPL 1', 'Tasikmalaya', '56854e', 'RPL', 'Anggota', '2021', ''),
(32, 'Rosdiana', 'SawahLempay', 'XII RPL 1', 'Tasikmalaya,12 Januari 2005', '088293166134', 'RPL', 'Sekretaris', '2021', 0x494d472d32303231313032372d5741303031312e6a7067),
(33, 'Laela Mukaromah', 'Indihiang', 'XII RPL 1', 'Bandung,20 Maret 2003', '083827736561', 'RPL', 'Bendahara', '2021', 0x494d472d32303231313032372d5741303030382e6a7067),
(34, 'Lita Wahyuni', 'Cigeureung', 'XII RPL 1', 'Tasikmalaya,22 Agustus 2003', '087835335134', 'RPL', 'Ketua Bela Negara', '2021', 0x494d472d32303231313032372d5741303030342e6a7067),
(35, 'Melinda', 'Cikanyere', 'XI RPL 1', 'Tasikmalaya,28 April 2004', '868', 'RPL', 'ghhg', '2021', ''),
(36, 'Pepi', 'Selaawi', 'XII RPL 2', 'Majalengka,22 Desember 2004', '08996335548', 'RPL', 'Bela Negara', '2021', 0x494d472d32303231313032372d5741303030332e6a7067),
(37, 'Putri', 'Cikanyere', 'XI RPL 1', 'Tasikmalaya', '7467', 'RPL', 'Anggota', '2021', ''),
(38, 'Nazar', 'Leuwianyar', 'XI RPL 1', 'Tasikmalaya', '3553', 'RPL', 'Anggota', '2021', ''),
(39, 'Jiyad Farhanul Hakim', 'KarangResik', 'XII RPL 2', 'Tasikmalaya,10 Januari 2004', '083132138147', 'RPL', 'Ketua Osis', '2021', 0x494d475f32303231313031345f3132353432325f312e6a7067),
(40, 'Ikbal', 'Sukamaju', 'XI RPL 1', 'Tasikmalaya', '3465456', 'RPL', 'Anggota', '2021', ''),
(41, 'Rizki.M', 'Sukamaju', 'XI RPL 1', 'Tasikmalaya', '083152501459', 'RPL', 'Keamanan', '2021', 0x494d472d32303231313032372d5741303030352e6a7067),
(42, 'Syahrul', 'Kalangsari', 'XI RPL 1', 'Tasikmalaya,23 Desember 2003', '088220328567', 'RPL', 'Kesehatan', '2021', 0x494d472d32303231313032372d5741303030362e6a7067),
(43, 'Fahrul', 'Ampera', 'XII TBSM 2', 'Ciamis,17 Juli 2003', '085523759010', 'TBSM', 'Ketua Mpk', '2021', 0x494d472d32303231313032372d5741303031322e6a7067),
(44, 'Saripudin', 'Paseh', 'XII TBSM 2', 'Tasikmalaya,16 Agustus 2003', '0895707433345', 'TBSM', 'Ketua Ekstrakulikuler', '2021', 0x494d475f32303231313032315f3131313535382e6a7067);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(31, 'Ketua Mpk'),
(32, 'Wakil Ketua Mpk'),
(33, 'Ketua Osis'),
(35, 'Wakil Ketua Osis'),
(39, 'Sekretaris'),
(40, 'Wakil Sekretaris'),
(41, 'Bendahara'),
(42, 'Wakil Bendahara'),
(47, 'Ekstrakulikuler'),
(48, 'Kerohanian'),
(49, 'Kesehatan'),
(50, 'Keamanan'),
(51, 'Bela Negara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_masa_khidmat`
--

CREATE TABLE `tbl_masa_khidmat` (
  `id_masa_khidmat` int(5) NOT NULL,
  `nama_ketua` varchar(100) NOT NULL,
  `nama_wakil` varchar(100) NOT NULL,
  `masa_khidmat` varchar(100) NOT NULL,
  `nama_pembina` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_masa_khidmat`
--

INSERT INTO `tbl_masa_khidmat` (`id_masa_khidmat`, `nama_ketua`, `nama_wakil`, `masa_khidmat`, `nama_pembina`) VALUES
(9, 'Jiyad', 'Tedi', '2021', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tahun`
--

CREATE TABLE `tbl_tahun` (
  `id_tahun` int(5) NOT NULL,
  `nama_tahun` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_tahun`
--

INSERT INTO `tbl_tahun` (`id_tahun`, `nama_tahun`) VALUES
(7, '2021'),
(8, '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `email`, `level`) VALUES
(1, 'user1', 'user1', 'risma@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  ADD PRIMARY KEY (`id_anggota`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `tbl_masa_khidmat`
--
ALTER TABLE `tbl_masa_khidmat`
  ADD PRIMARY KEY (`id_masa_khidmat`);

--
-- Indeks untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_anggota`
--
ALTER TABLE `tbl_anggota`
  MODIFY `id_anggota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `tbl_masa_khidmat`
--
ALTER TABLE `tbl_masa_khidmat`
  MODIFY `id_masa_khidmat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_tahun`
--
ALTER TABLE `tbl_tahun`
  MODIFY `id_tahun` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
