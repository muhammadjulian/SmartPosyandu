-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 09:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartposyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayita`
--

CREATE TABLE `bayita` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `biodata_ibu` int(11) NOT NULL,
  `umur` int(3) NOT NULL,
  `bb_saat_lahir` varchar(5) NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nik` int(20) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `posyandu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nik`, `kategori_id`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `posyandu_id`) VALUES
(1, 0, 0, 'Abu Jahal', 'L', 'Mekah, Arab Saudi', '17790', 5),
(2, 0, 0, 'Abu Lahab', 'L', 'Madinah, Arab Saudi', '301912', 5);

-- --------------------------------------------------------

--
-- Table structure for table `dasawisma`
--

CREATE TABLE `dasawisma` (
  `id` int(11) NOT NULL,
  `dasawisma` varchar(128) NOT NULL,
  `posyandu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `umur_kehamilan` int(3) NOT NULL,
  `ukuran-lila` int(5) NOT NULL,
  `pmt` varchar(25) NOT NULL,
  `status` enum('Ibu Hamil','Ibu Nifas','','') NOT NULL,
  `tanggal_regsitrasi` date NOT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ibu_menyusui`
--

CREATE TABLE `ibu_menyusui` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `biodata_anak` int(11) NOT NULL,
  `ukuran_lila` int(10) NOT NULL,
  `masa_menyusui` date NOT NULL,
  `tanggal_registrasi` date NOT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`) VALUES
(1, 'WUS'),
(2, 'PUS');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(4) NOT NULL,
  `kecamatan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `kecamatan`) VALUES
(1, 'Bogor Tengah'),
(2, 'Bogor Utara'),
(3, 'Bogor Selatan'),
(4, 'Bogor Timur'),
(5, 'Bogor Barat'),
(6, 'Tanah Sereal');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(4) NOT NULL,
  `kecamatan_id` int(4) NOT NULL,
  `kelurahan` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `kecamatan_id`, `kelurahan`) VALUES
(1, 1, 'Babakan'),
(2, 1, 'Babakan Pasar'),
(3, 1, 'Babakan Pasar'),
(4, 1, 'Cibogor'),
(5, 1, 'Ciwaringin'),
(6, 1, 'Gudang'),
(7, 1, 'Kebon Kelapa'),
(8, 1, 'Pabaton'),
(9, 1, 'Paledang'),
(10, 1, 'Panaragan'),
(11, 1, 'Sempur'),
(12, 1, 'Tegallega'),
(13, 2, 'Bantarjati'),
(14, 2, 'Cibuluh'),
(15, 2, 'Ciluar'),
(16, 2, 'Cimahpar'),
(17, 2, 'Ciparigi'),
(18, 2, 'Kedung Halang'),
(19, 2, 'Tanah Baru'),
(20, 2, 'Tegal Gundil'),
(21, 3, 'Cipaku'),
(22, 3, 'Pakuan'),
(23, 3, 'Genteng'),
(24, 3, 'Muarasari'),
(25, 3, 'Harjasari'),
(26, 3, 'Kertamaya'),
(27, 3, 'Rancamaya'),
(28, 3, 'Bojongkerta'),
(29, 3, 'Ranggamekar'),
(30, 3, 'Mulyaharja'),
(31, 3, 'Pamoyanan'),
(32, 3, 'Cikaret'),
(33, 3, 'Batutulis'),
(34, 3, 'Bondongan'),
(35, 3, 'Empang'),
(36, 3, 'Lawang Gintung'),
(38, 4, 'Baranangsiang'),
(39, 4, 'Katulampa'),
(40, 4, 'Sindangrasa'),
(41, 4, 'Sindangsari'),
(42, 4, 'Sukasari'),
(43, 4, 'Tajur'),
(44, 5, 'Balungbangjaya'),
(45, 5, 'Bubulak'),
(46, 5, 'Cilendek Barat'),
(47, 5, 'Cilendek Timur'),
(48, 5, 'Curug'),
(49, 5, 'Curugmekar'),
(50, 5, 'Gunungbatu'),
(51, 5, 'Loji'),
(52, 5, 'Margajaya'),
(53, 5, 'Menteng'),
(54, 5, 'Pasirjaya'),
(55, 5, 'Pasirkuda'),
(56, 5, 'Pasirmulya'),
(57, 5, 'Semplak'),
(58, 5, 'Sindangbarang'),
(59, 5, 'Situgede'),
(61, 6, 'Cibadak'),
(62, 6, 'Kayumanis'),
(63, 6, 'Kebonpedes'),
(64, 6, 'Kedungbadak'),
(65, 6, 'Kedungjaya'),
(66, 6, 'Kedungwaringin'),
(67, 6, 'Kencana'),
(68, 6, 'Mekarwangi'),
(69, 6, 'Sukadamai'),
(70, 6, 'Sukaresmi'),
(71, 6, 'Tanahsareal');

-- --------------------------------------------------------

--
-- Table structure for table `lansia`
--

CREATE TABLE `lansia` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat_lahir` varchar(128) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `catatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanantambahan`
--

CREATE TABLE `layanantambahan` (
  `id` int(2) NOT NULL,
  `layanantambahan` varchar(50) NOT NULL,
  `periode` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layananutama`
--

CREATE TABLE `layananutama` (
  `id` int(2) NOT NULL,
  `layananutama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layananutama`
--

INSERT INTO `layananutama` (`id`, `layananutama`) VALUES
(1, 'makan'),
(12, 'baju');

-- --------------------------------------------------------

--
-- Table structure for table `posyandu`
--

CREATE TABLE `posyandu` (
  `id` int(5) NOT NULL,
  `kecamatan_id` int(4) NOT NULL,
  `kelurahan_id` int(4) NOT NULL,
  `posyandu` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `strata_id` int(4) NOT NULL,
  `lat` varchar(100) NOT NULL,
  `lng` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posyandu`
--

INSERT INTO `posyandu` (`id`, `kecamatan_id`, `kelurahan_id`, `posyandu`, `alamat`, `strata_id`, `lat`, `lng`) VALUES
(5, 5, 8, 'merah', 'jl. buntu', 3, '-6.595938', '106.790629'),
(7, 3, 9, 'jajal', 'jalan maju terus', 4, '-6.592165', '106.795477'),
(8, 3, 10, 'kuning', 'jalan murah', 2, '-6.592727', '106.797874');

-- --------------------------------------------------------

--
-- Table structure for table `strataposyandu`
--

CREATE TABLE `strataposyandu` (
  `id` int(2) NOT NULL,
  `strata` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strataposyandu`
--

INSERT INTO `strataposyandu` (`id`, `strata`) VALUES
(1, 'Pratama'),
(2, 'Madya'),
(3, 'Purnama'),
(4, 'Mandiri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'julian', 'muh@student.itera.ac.id', 'default.jpg', '$2y$10$//CTmq1EWZ.xBehuErUczu/wfhHTGCBSc63vM3/vVhcPV8tjL31iy', 1, 1, '0000-00-00'),
(6, 'malih', 'malih@student.itera.ac.id', 'default.jpg', '$2y$10$gftFYYLNnvw7bFPQZU4DqOB..HU84VgxmHZyUADBhCSPSUS8ipSue', 3, 1, '0000-00-00'),
(7, 'aja', 'aja@student.itera.ac.id', 'default.jpg', '$2y$10$ZO1KU66urqab2clTXiLRYOcjFTRMiLDY3SvuRw3G9b2MG0RDC7Da6', 4, 1, '0000-00-00'),
(8, 'itu', 'itu@student.itera.ac.id', 'default.jpg', '$2y$10$1cG/fhVg4EDwp.aR2UKf4eqD0uMT3FeoDwwS7B5WEGR4MCCNuPEOC', 2, 1, '0000-00-00'),
(9, 'Ahmad', 'ahmad@student.itera.ac.id', 'default.jpg', '$2y$10$JT3oRiophKc5HR0T4crWHeCWlfnIz/r9z4oyAAbr0MwS646qUJ8wy', 5, 1, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'administrator'),
(2, 'member'),
(3, 'dinkes'),
(4, 'dpmppa'),
(5, 'kader');

-- --------------------------------------------------------

--
-- Table structure for table `wuspus`
--

CREATE TABLE `wuspus` (
  `id` int(11) NOT NULL,
  `biodata_id` int(11) NOT NULL,
  `biodata_pasangan` int(11) NOT NULL,
  `kategori_id` int(25) NOT NULL,
  `dasawisma_id` int(11) NOT NULL,
  `jumlah_anak` int(5) NOT NULL,
  `tahapan_ks` varchar(128) NOT NULL,
  `catatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayita`
--
ALTER TABLE `bayita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`),
  ADD KEY `biodata_ibu` (`biodata_ibu`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `dasawisma`
--
ALTER TABLE `dasawisma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posyandu_id` (`posyandu_id`);

--
-- Indexes for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`biodata_id`);

--
-- Indexes for table `ibu_menyusui`
--
ALTER TABLE `ibu_menyusui`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`biodata_id`),
  ADD KEY `nik_anak` (`biodata_anak`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `lansia`
--
ALTER TABLE `lansia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nik` (`biodata_id`);

--
-- Indexes for table `layanantambahan`
--
ALTER TABLE `layanantambahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layananutama`
--
ALTER TABLE `layananutama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posyandu`
--
ALTER TABLE `posyandu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahan_id` (`kelurahan_id`),
  ADD KEY `strata_id` (`strata_id`),
  ADD KEY `kecamatan_id` (`kecamatan_id`);

--
-- Indexes for table `strataposyandu`
--
ALTER TABLE `strataposyandu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wuspus`
--
ALTER TABLE `wuspus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_id` (`biodata_id`),
  ADD KEY `biodata_pasangan` (`biodata_pasangan`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `dasawisma_id` (`dasawisma_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bayita`
--
ALTER TABLE `bayita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dasawisma`
--
ALTER TABLE `dasawisma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ibu_menyusui`
--
ALTER TABLE `ibu_menyusui`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
--
-- AUTO_INCREMENT for table `lansia`
--
ALTER TABLE `lansia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layanantambahan`
--
ALTER TABLE `layanantambahan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `layananutama`
--
ALTER TABLE `layananutama`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `posyandu`
--
ALTER TABLE `posyandu`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `strataposyandu`
--
ALTER TABLE `strataposyandu`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `wuspus`
--
ALTER TABLE `wuspus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
