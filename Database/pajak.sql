-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Feb 2019 pada 14.32
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dppk`
--

CREATE TABLE `dppk` (
  `ID_Pegawai` char(8) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(14) NOT NULL,
  `Nama_Pegawai` varchar(22) NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `No_Telepon` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dppk`
--

INSERT INTO `dppk` (`ID_Pegawai`, `Username`, `Password`, `Nama_Pegawai`, `Alamat`, `No_Telepon`) VALUES
('17061998', 'Elizabeth', 'Elizabeth123', 'Elizabeth Ramah S.M.', 'Jalan Bawal No. 19', '081239401901'),
('17071998', 'Daffa', 'Daffa123', 'Daffa Globa Era', 'Jalan Lele No. 18', '087715238491'),
('17081998', 'Zulfah', 'Zulfah123', 'Nenden Zulfah N.H.', 'Jalan Salak No. 17', '087712345510'),
('17091998', 'MFikriS', 'Fikri123', 'Muh. Fikri Septiawan', 'Jalan Manggis No. 16', '087715298247');

-- --------------------------------------------------------

--
-- Struktur dari tabel `objek pajak`
--

CREATE TABLE `objek pajak` (
  `NOP` char(18) NOT NULL,
  `Jenis_Penggunaan_Bangunan` varchar(24) NOT NULL,
  `Letak_Objek_Pajak` varchar(1000) NOT NULL,
  `Objek_Pajak` varchar(8) NOT NULL,
  `Nilai_Jual` int(11) NOT NULL,
  `Luas_M2` int(11) NOT NULL,
  `Kelas` varchar(3) NOT NULL,
  `NJOP_Per_M2` int(11) NOT NULL,
  `Total_NJOP` int(11) NOT NULL,
  `NJOPTKP` int(11) NOT NULL,
  `NJKP` int(11) NOT NULL,
  `PBB_Terhutang` int(11) NOT NULL,
  `NPWP` char(15) NOT NULL,
  `ID_Pegawai` char(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `objek pajak`
--

INSERT INTO `objek pajak` (`NOP`, `Jenis_Penggunaan_Bangunan`, `Letak_Objek_Pajak`, `Objek_Pajak`, `Nilai_Jual`, `Luas_M2`, `Kelas`, `NJOP_Per_M2`, `Total_NJOP`, `NJOPTKP`, `NJKP`, `PBB_Terhutang`, `NPWP`, `ID_Pegawai`) VALUES
('102839480819384', 'Perumahan', 'Jalan Manggis No.16 Tegal', '', 0, 0, '', 0, 0, 0, 0, 0, '123456789012345', '17232011'),
('123456789012345678', 'Hotel', 'Jalan Manggis No. 100', 'Bangunan', 200000000, 600, 'A13', 200000, 400000, 50000, 40000000, 500000, '123456789012345', '17061998');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `ID_Bayar` char(10) NOT NULL,
  `ID_Pegawai` char(8) NOT NULL,
  `NPWP` char(15) NOT NULL,
  `No_SPPT` varchar(11) NOT NULL,
  `Tgl_Bayar` date NOT NULL,
  `Total_Bayar` int(11) NOT NULL,
  `Status_Pembayaran` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`ID_Bayar`, `ID_Pegawai`, `NPWP`, `No_SPPT`, `Tgl_Bayar`, `Total_Bayar`, `Status_Pembayaran`) VALUES
('1233535', '17061998', '123456789014810', '4Aiwjdiw', '2019-02-08', 50000, 'Lunas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sppt`
--

CREATE TABLE `sppt` (
  `No_SPPT` varchar(11) NOT NULL,
  `NOP` char(18) NOT NULL,
  `ID_Pegawai` char(8) NOT NULL,
  `Tahun` year(4) NOT NULL,
  `Tgl_Jatuh_Tempo` date NOT NULL,
  `Denda` int(11) NOT NULL,
  `Total_Tagihan` int(11) NOT NULL,
  `Tempat_Pembayaran` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sppt`
--

INSERT INTO `sppt` (`No_SPPT`, `NOP`, `ID_Pegawai`, `Tahun`, `Tgl_Jatuh_Tempo`, `Denda`, `Total_Tagihan`, `Tempat_Pembayaran`) VALUES
('4Aiwjdiw', '102839480819384', '17232011', 2011, '2019-01-08', 0, 0, 'Tegal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wajib pajak`
--

CREATE TABLE `wajib pajak` (
  `NPWP` char(15) NOT NULL,
  `Nama` varchar(22) NOT NULL,
  `Alamat` varchar(1000) NOT NULL,
  `No_Telepon` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wajib pajak`
--

INSERT INTO `wajib pajak` (`NPWP`, `Nama`, `Alamat`, `No_Telepon`) VALUES
('123456789012345', 'Muh. Fikri Septiawan', 'Jalan Manggis No. 16', '087715298247'),
('123456789014810', 'Elizabeth Ramah S.M.', 'Jalan Bawal No. 19', '081239401901'),
('123456789018275', 'Daffa Globa Era', 'Jalan Lele No. 18', '087715238491'),
('123456789054321', 'Nenden Zulfah N.H.', 'Jalan Salak No. 17', '087712345510');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dppk`
--
ALTER TABLE `dppk`
  ADD PRIMARY KEY (`ID_Pegawai`),
  ADD UNIQUE KEY `No_Telepon` (`No_Telepon`),
  ADD UNIQUE KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Indexes for table `objek pajak`
--
ALTER TABLE `objek pajak`
  ADD PRIMARY KEY (`NOP`),
  ADD UNIQUE KEY `NOP_2` (`NOP`),
  ADD KEY `NOP` (`NOP`),
  ADD KEY `NPWP` (`NPWP`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`ID_Bayar`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`),
  ADD KEY `NPWP` (`NPWP`),
  ADD KEY `No_SPPT` (`No_SPPT`);

--
-- Indexes for table `sppt`
--
ALTER TABLE `sppt`
  ADD PRIMARY KEY (`No_SPPT`),
  ADD KEY `NOP` (`NOP`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Indexes for table `wajib pajak`
--
ALTER TABLE `wajib pajak`
  ADD PRIMARY KEY (`NPWP`),
  ADD UNIQUE KEY `No_Telepon` (`No_Telepon`),
  ADD UNIQUE KEY `NPWP` (`NPWP`),
  ADD KEY `NPWP_2` (`NPWP`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `objek pajak`
--
ALTER TABLE `objek pajak`
  ADD CONSTRAINT `objek pajak_ibfk_1` FOREIGN KEY (`NPWP`) REFERENCES `wajib pajak` (`NPWP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`ID_Pegawai`) REFERENCES `dppk` (`ID_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`NPWP`) REFERENCES `wajib pajak` (`NPWP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`No_SPPT`) REFERENCES `sppt` (`No_SPPT`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `sppt`
--
ALTER TABLE `sppt`
  ADD CONSTRAINT `sppt_ibfk_1` FOREIGN KEY (`NOP`) REFERENCES `objek pajak` (`NOP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sppt_ibfk_2` FOREIGN KEY (`ID_Pegawai`) REFERENCES `dppk` (`ID_Pegawai`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
