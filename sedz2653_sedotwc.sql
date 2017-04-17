-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 17, 2017 at 04:09 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sedz2653_sedotwc`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(3) NOT NULL,
  `foto` varchar(120) NOT NULL,
  `slider` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `slider`) VALUES
(11, '4ca8e87180ed97493f8f17092c00dcc1.jpg', '0'),
(12, '4333e1957db52b5ab0bcb09cf8072c7a.jpg', '0'),
(13, '584477a43276a5a22eb05c1f765de88b.jpg', '0'),
(14, 'e50f88fcffca485d9f72711d2e8c81cc.jpg', '0'),
(15, '74be09e7ae49a075f9d53c9833cea25b.jpg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(3) NOT NULL,
  `kontak` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `kontak`) VALUES
(1, '0891231'),
(2, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2<br> \\r\\nLabuhan Dalam Tanjung Senang<br>\\r\\nBandar Lampung 35142.<br>\\r\\nTelp : 085377528233 / 081252711000<br>'),
(3, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2<br>\\r\\nLabuhan Dalam Tanjung Senang<br>\\r\\nBandar Lampung 35142.<br>\\r\\nTelp : 085377528233 / 081252711000<br>'),
(4, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 \\r\\nLabuhan Dalam Tanjung Senang \\r\\nBandar Lampung 35142.\\r\\nTelp : 085377528233 / 081252711000'),
(5, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 \r\nLabuhan Dalam Tanjung Senang \r\nBandar Lampung 35142.\r\nTelp : 085377528233 / 081252711000'),
(6, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 <br>\r\nLabuhan Dalam Tanjung Senang <br>\r\nBandar Lampung 35142.<br>\r\nTelp : 085377528233 / 081252711000<br>'),
(7, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 <br>\r\nLabuhan Dalam Tanjung Senang <br>\r\nBandar Lampung 35142.<br>\r\nTelp : 085377528233 / 085101400060<br>'),
(8, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.3 <br>\r\nLabuhan Dalam Tanjung Senang <br>\r\nBandar Lampung 35142.<br>\r\nTelp : 085377528233 / 085101400060<br>'),
(9, 'Jl. R.A. Basyid Perumahan Panorama Alam Blok A No.2 <br>\r\nLabuhan Dalam Tanjung Senang <br>\r\nBandar Lampung 35142.<br>\r\nTelp : 085377528233 / 085101400060<br>');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(3) NOT NULL,
  `detail_profil` text,
  `visi` text,
  `misi` text,
  `foto_profil` varchar(120) NOT NULL,
  `foto_visi` varchar(120) NOT NULL,
  `foto_misi` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `detail_profil`, `visi`, `misi`, `foto_profil`, `foto_visi`, `foto_misi`) VALUES
(5, 'Kami perusahaan berpengalaman selama hampir 10 tahun dengan banyak cabang biberbagai daerah (Bandar Lampung, Jambi, Pekan Baru, Karawang, Sidempuan, dll.) dan jumlah armada yang memadai. Segera hubungi kami jika wc anda bermasalah, karena hanya kami yang mengerti. Anda telepon maka kami\r\nakan segera datang tanpa menunggu lama. \"Profesionalisme Perwujudan Tanggung Jawab\" Kami tahu bahwa ketika masyarakat memilih kami sebagai solusi dalam persoalan wc penuh atau mampet yang mereka alami, hal oini merupakan tanggung jawab yang harus kami selesaikan dengan penuh tanggung jawab. Tentunya banyak masyarakat yang bingung dalam memberikan penilaian profesionalisme bagi jenis usaha kami. Tapi masyarakat mampu membedakan dengan menghubungi beberapa jasa penyedotan wc lain dan bandingakan dengan pelayanan yang kami berikan.', '1. Bertanggung jawab atas semua pekerjaan penyedotan maupun atasi mampet yang diberikan semua pelanggan.\r\n<br>2.  Bekerja secara cepat dan tanggap dalam menanggapi semua permintaan pelanggan\r\n<br>3.  Memberikan pelayanan yang profesional serta memuaskan kepada semua pelanggan\r\n<br>4.  Menawarkan harga yang sangat terjangkau untuk semua pelayanan terbaik yang kami berikan', '1. Bertanggung jawab atas semua pekerjaan penyedotan maupun atasi mampet yang diberikan semua pelanggan.\r\n<br>2.  Bekerja secara cepat dan tanggap dalam menanggapi semua permintaan pelanggan\r\n<br>3.  Memberikan pelayanan yang profesional serta memuaskan kepada semua pelanggan\r\n<br>4.  Menawarkan harga yang sangat terjangkau untuk semua pelayanan terbaik yang kami berikan', 'afa434908ba9ffd7e2449a1d6f4317d7.jpg', 'e8d9b6173647e255178e410e2b1f5c15.jpg', '307f68d9cb765c062ec9b32e8e6fac28.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
