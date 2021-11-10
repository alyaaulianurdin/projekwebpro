-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 01:56 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tamasya`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `id_wisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `username`, `id_wisata`) VALUES
(0, 'alya', 3),
(1, 'alya', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `id_kuliner` int(11) NOT NULL,
  `nama_kuliner` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`id_kuliner`, `nama_kuliner`, `deskripsi`, `alamat`, `foto`) VALUES
(1, 'Boba Mahkota Ajun', 'Kuliner berupa minuman kekinian.', 'Jalan Bunga xxxx', 'bobamahkota.jpg'),
(2, 'Lunpia Bu Lulu', 'Merupakan kuliner khas Kota Semarang yang tersedia dalam varian lunpia basah dan kering.', '', ''),
(3, 'Wingko Babat', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id_wisata`, `nama_wisata`, `deskripsi`, `harga`, `foto`) VALUES
(1, 'Mangkang Zoo', 'Merupakan sebuah kebun binatang di Mangkang, Kota Semarang.', 'Rp20.000', 'mangkangzoo.jpg'),
(2, 'Museum Kota Lama Semarang', 'Merupakan sebuah museum di Kawasan Kota Lama, Kota Semarang.', 'Rp10.000', 'museumkotalama.jpg'),
(3, 'Masjid Agung Jawa Tengah', 'Merupakan tempat peribadatan umat Islam yang seringkali dikunjungi untuk berwisata.', 'Rp0', ''),
(7, 'Water Blaster', 'Merupakan sebuah waterboom yang cocok untuk wisata anak dan keluarga.', 'Rp50.000', ''),
(8, 'Dusun Semilir', 'Merupakan tempat wisata yang eco dan memiliki ragam jenis wahana.', 'Rp15.000', ''),
(14, 'Umbul Sidomukti', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tour_guide`
--

CREATE TABLE `tour_guide` (
  `id_guide` int(11) NOT NULL,
  `nama_guide` varchar(256) NOT NULL,
  `deskripsi` varchar(256) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `foto` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tour_guide`
--

INSERT INTO `tour_guide` (`id_guide`, `nama_guide`, `deskripsi`, `no_hp`, `foto`) VALUES
(1, 'Nurdin', 'Tour Guide berjenis kelamin laki-laki yang bisa mengantar Anda berkeliling tempat wisata religi di Semarang.', '08999999974', 'nana2.jpg'),
(2, 'Nana', 'Tour Guide berjenis kelamin perempuan yang bisa menemani Anda kulineran di Semarang.', '0754578899', 'nana.jpg'),
(3, 'Lala', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`, `nama`, `no_hp`, `alamat`) VALUES
('alya', 'alya@gmail.com', 'alya123', 'alya aulia n', '082220424881', 'kaliwungu, kendal'),
('lulu', 'lulu@gmail.com', 'lulu123', 'lulua fauzia n', '08122881785', 'kaliwungu, kendal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_wisata` (`id_wisata`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- Indexes for table `tour_guide`
--
ALTER TABLE `tour_guide`
  ADD PRIMARY KEY (`id_guide`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `id_kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tour_guide`
--
ALTER TABLE `tour_guide`
  MODIFY `id_guide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
