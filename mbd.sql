-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2017 at 02:04 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` enum('admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `hak_akses`) VALUES
(1, 'M. Inyilis Sa\'da', 'inyil', '1234', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `b_id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `k_id` int(11) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `mid` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tgl` date NOT NULL,
  `waktu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`k_id`, `uid`, `mid`, `isi`, `tgl`, `waktu`) VALUES
(4, '150431100025', 5, 'fwerwqer', '2017-12-20', 1513759841);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nim` varchar(20) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `hak_akses` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nim`, `id_admin`, `nama`, `username`, `password`, `jurusan`, `jenis_kelamin`, `tgl_lahir`, `alamat`, `email`, `no_hp`, `hak_akses`) VALUES
('1234567890', 1, '', '', '', '', 'Laki-laki', '0000-00-00', '', '', '', 'mahasiswa'),
('150431100009', 1, 'NURUL ISNAININ', '150431100009', '150431100009', 'TEKNIK INFORMATIKA', 'Perempuan', '1997-12-23', 'Dsn.Beran, Ds.Nglarangan, Kec.Kanor, Kab.Bojonegoro', 'qwerty@gmail.com', '0838320305812', 'mahasiswa'),
('150431100025', 1, 'HERU CAHYONO', '150431100025', '150431100025', ' ', 'Laki-laki', '2017-12-07', 'lkjhgfd', 'kjhgfd', '09876543', 'satpam'),
('150431100099', 1, 'qwerty tok', '150431100099', '150431100099', 'TEKNIK INFORMATIKA', 'Laki-laki', '2017-12-27', 'Dsn.Beran, Ds.Nglarangan, Kec.Kanor, Kab.Bojonegoro', 'qwerty@gmail.com', '083832030588', 'mahasiswa'),
('8425724', 1, '', '', '', '', 'Laki-laki', '0000-00-00', '', '', '', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
