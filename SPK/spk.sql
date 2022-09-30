-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 02:28 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `handphone`
--

CREATE TABLE `handphone` (
  `id_handphone` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `ram` varchar(3) NOT NULL,
  `internal` varchar(3) NOT NULL,
  `processor` varchar(30) NOT NULL,
  `kamera_utama` varchar(3) NOT NULL,
  `layar` varchar(20) NOT NULL,
  `baterai` varchar(10) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `handphone`
--

INSERT INTO `handphone` (`id_handphone`, `nama`, `brand`, `harga`, `ram`, `internal`, `processor`, `kamera_utama`, `layar`, `baterai`, `gambar`) VALUES
(1, 'A31', 'OPPO', 2550000, '4', '64', 'MediaTek Helio P35', '13', 'IPS LCD', '4230', 'A31.jpg'),
(2, 'Black Shark 2', 'Xiaomi', 6850000, '8', '128', 'Snapdragon 855', '48', 'Amoled', '4000', 'blackshark2.jpg'),
(3, 'Galaxy A51', 'Samsung', 4399000, '6', '128', 'Exynos 9611', '48', 'Super Amoled', '4000', 'A51.jpg'),
(4, 'Galaxy A70', 'Samsung', 3989000, '6', '128', 'Snapdragon 675', '38', 'Super Amoled', '4500', 'galaxyA70.jpg'),
(5, 'Galaxy A71', 'Samsung', 5949000, '8', '128', 'Snapdragon 730G', '64', 'Super Amoled', '4500', 'galaxyA71.jpg'),
(6, 'Galaxy A80', 'Samsung', 6999000, '8', '128', 'Snapdragon 730', '48', 'Super Amoled', '3700', 'galaxyA80.jpg'),
(7, 'Galaxy M10', 'Samsung', 1595000, '2', '16', 'Exynos 7870', '13', 'TFT', '3400', 'galaxyM10.jpg'),
(8, 'Galaxy M31', 'Samsung', 3499000, '6', '128', 'Exynos 9611', '64', 'Super Amoled', '6000', 'galaxyM31.jpg'),
(9, 'Mi 9', 'Xiaomi', 6900000, '6', '128', 'Snapdragon 855', '48', 'Super Amoled', '3300', 'mi9.png'),
(10, 'OPPO A12', 'OPPO', 1590000, '3', '32', 'MediaTek Helio P35', '13', 'IPS LCD', '4230', 'oppoA12.jpg'),
(11, 'OPPO Reno2', 'OPPO', 7499000, '8', '128', 'Snapdragon 730G', '48', 'Amoled', '4000', 'Reno2.jpg'),
(12, 'Realme 6 Pro', 'Realme', 4599000, '8', '128', 'Snapdragon 720G', '64', 'IPS LCD', '4300', 'Realme6Pro.jpg'),
(13, 'Realme C11', 'Realme', 1590000, '2', '32', 'MediaTek Helio G35', '13', 'IPS LCD', '5000', 'RealmeC11.jpg'),
(14, 'Realme X3', 'Realme', 7999000, '8', '128', 'Snapdragon 855', '64', 'IPS LCD', '4200', 'RealmeX3.jpg'),
(15, 'Redmi 9C', 'Xiaomi', 1399000, '3', '32', 'Mediatek Helio G35', '13', 'IPS LCD', '5000', 'Rendmi9C.jpg'),
(16, 'Redmi Note 9', 'Xiaomi', 2299000, '4', '64', 'MediaTek Helio G85', '48', 'IPS LCD', '5020', 'RendmiNote9.jpg'),
(17, 'Reno3', 'OPPO', 4299000, '8', '128', 'MediaTek Helio P90', '48', 'Amoled', '4000', 'Reno3.jpg'),
(18, 'Vivo V19', 'Vivo', 4999000, '8', '128', 'Snapdragon 675', '48', 'Super Amoled', '4500', 'VivoV19.jpg'),
(19, 'Vivo Y20', 'Vivo', 1980000, '3', '32', 'Snapdragon 460', '13', 'IPS LCD', '5000', 'VivoY20.jpg'),
(20, 'Y30', 'Vivo', 2799000, '4', '128', 'MediaTek Helio P35', '13', 'IPS LCD', '5000', 'VivoY30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `internal`
--

CREATE TABLE `internal` (
  `Kodeinternal` int(11) NOT NULL,
  `internal` varchar(50) NOT NULL,
  `Bobotinternal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `internal`
--

INSERT INTO `internal` (`Kodeinternal`, `internal`, `Bobotinternal`) VALUES
(4, '128', 4),
(1, '16', 1),
(5, '256', 5),
(2, '32', 2),
(3, '64', 3);

-- --------------------------------------------------------

--
-- Table structure for table `kamera_utama`
--

CREATE TABLE `kamera_utama` (
  `Kodekamera` int(11) NOT NULL,
  `kamera_utama` varchar(50) NOT NULL,
  `Bobotkamera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamera_utama`
--

INSERT INTO `kamera_utama` (`Kodekamera`, `kamera_utama`, `Bobotkamera`) VALUES
(1, '13', 1),
(2, '16', 2),
(3, '38', 3),
(4, '48', 4),
(5, '64', 5);

-- --------------------------------------------------------

--
-- Table structure for table `kapasitas_baterai`
--

CREATE TABLE `kapasitas_baterai` (
  `Kode_baterai` char(5) NOT NULL,
  `Baterai` varchar(50) NOT NULL,
  `Bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kapasitas_baterai`
--

INSERT INTO `kapasitas_baterai` (`Kode_baterai`, `Baterai`, `Bobot`) VALUES
('01', '1000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_gaming`
--

CREATE TABLE `kriteria_gaming` (
  `Kodegaming` varchar(5) NOT NULL,
  `Kriteriagaming` varchar(50) NOT NULL,
  `Bobotgaming` int(11) NOT NULL,
  `Cost_Benefitgaming` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_gaming`
--

INSERT INTO `kriteria_gaming` (`Kodegaming`, `Kriteriagaming`, `Bobotgaming`, `Cost_Benefitgaming`) VALUES
('C1', 'RAM', 4, 'Benefit'),
('C2', 'Prosesor', 5, 'Benefit'),
('C3', 'Internal', 3, 'Benefit'),
('C4', 'Layar', 3, 'Benefit'),
('C5', 'Kamera Utama', 2, 'Benefit'),
('C6', 'Kapasitas Baterai', 3, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_sosmed_fotografi`
--

CREATE TABLE `kriteria_sosmed_fotografi` (
  `Kodesosmed` varchar(5) NOT NULL,
  `Kriteriasosmed` varchar(50) NOT NULL,
  `Bobotsosmed` int(11) NOT NULL,
  `Cost_Benefitsosmed` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_sosmed_fotografi`
--

INSERT INTO `kriteria_sosmed_fotografi` (`Kodesosmed`, `Kriteriasosmed`, `Bobotsosmed`, `Cost_Benefitsosmed`) VALUES
('C1', 'RAM', 3, 'Benefit'),
('C2', 'Prosesor', 3, 'Benefit'),
('C3', 'Internal', 3, 'Benefit'),
('C4', 'Layar', 3, 'Benefit'),
('C5', 'Kamera Utama', 5, 'Benefit'),
('C6', 'Kapasitas Baterai', 3, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `kriteria_streaming`
--

CREATE TABLE `kriteria_streaming` (
  `Kodestreaming` varchar(5) NOT NULL,
  `Kriteriastreaming` varchar(50) NOT NULL,
  `Bobotstreaming` int(11) NOT NULL,
  `Cost_Benefitstreaming` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria_streaming`
--

INSERT INTO `kriteria_streaming` (`Kodestreaming`, `Kriteriastreaming`, `Bobotstreaming`, `Cost_Benefitstreaming`) VALUES
('C1', 'RAM', 3, 'Benefit'),
('C2', 'Prosesor', 3, 'Benefit'),
('C3', 'Internal', 3, 'Benefit'),
('C4', 'Layar', 5, 'Benefit'),
('C5', 'Kamera Utama', 3, 'Benefit'),
('C6', 'Kapasitas Baterai', 3, 'Benefit');

-- --------------------------------------------------------

--
-- Table structure for table `layar`
--

CREATE TABLE `layar` (
  `Kodelayar` int(11) NOT NULL,
  `layar` varchar(50) NOT NULL,
  `Bobotlayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layar`
--

INSERT INTO `layar` (`Kodelayar`, `layar`, `Bobotlayar`) VALUES
(4, 'AMOLED', 4),
(3, 'IPS LCD', 3),
(1, 'LCD', 1),
(5, 'SUPER AMOLED', 5),
(2, 'TFT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
('2', 'alvan', 'dd45632a790f3f831d271b2a717593c4');

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kriteria`
--

CREATE TABLE `penilaian_kriteria` (
  `Id` char(2) NOT NULL,
  `Nilai` varchar(50) NOT NULL,
  `Bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_kriteria`
--

INSERT INTO `penilaian_kriteria` (`Id`, `Nilai`, `Bobot`) VALUES
('1', 'Sangat Buruk', 1),
('2', 'Buruk', 2),
('3', 'Cukup', 3),
('4', 'Baik', 4),
('5', 'Sangat Baik', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kriteria_kegunaan`
--

CREATE TABLE `penilaian_kriteria_kegunaan` (
  `Id` char(2) NOT NULL,
  `Nilai` varchar(50) NOT NULL,
  `Bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_kriteria_kegunaan`
--

INSERT INTO `penilaian_kriteria_kegunaan` (`Id`, `Nilai`, `Bobot`) VALUES
('1', 'Tidak Penting', 1),
('2', 'Kurang Penting', 2),
('3', 'Cukup Penting', 3),
('4', 'Peting', 4),
('5', 'Sangat Penting', 5);

-- --------------------------------------------------------

--
-- Table structure for table `prosesor`
--

CREATE TABLE `prosesor` (
  `processor` varchar(50) NOT NULL,
  `Performa` varchar(20) NOT NULL,
  `Bobotprosesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prosesor`
--

INSERT INTO `prosesor` (`processor`, `Performa`, `Bobotprosesor`) VALUES
('Exynos 3475', 'Low', 1),
('Exynos 4212', 'Low', 1),
('Exynos 5260', 'Basic', 2),
('Exynos 5420', 'Basic', 2),
('Exynos 5430', 'Basic', 2),
('Exynos 7420', 'Moderate', 3),
('Exynos 7570', 'Low', 1),
('Exynos 7580', 'Basic', 2),
('Exynos 7870', 'Basic', 2),
('Exynos 7880', 'Basic', 2),
('Exynos 7884B', 'Basic', 2),
('Exynos 7885', 'Moderate', 3),
('Exynos 7904', 'Moderate', 3),
('Exynos 8890', 'High', 4),
('Exynos 8895', 'High', 4),
('Exynos 9609', 'High', 4),
('Exynos 9610', 'High', 4),
('Exynos 9611', 'High', 4),
('Exynos 9810', 'Super High', 5),
('Exynos 9820', 'Super High', 5),
('Exynos 9825', 'Super High', 5),
('Exynos 990', 'Super High', 5),
('Kirin 620', 'Low', 1),
('Kirin 650', 'Basic', 2),
('Kirin 655', 'Basic', 2),
('Kirin 659', 'Basic', 2),
('Kirin 710', 'High', 4),
('Kirin 710F', 'High', 4),
('Kirin 810', 'Super High', 5),
('Kirin 910T', 'Low', 1),
('Kirin 920', 'Basic', 2),
('Kirin 925', 'Basic', 2),
('Kirin 935', 'Basic', 2),
('Kirin 950', 'High', 4),
('Kirin 955', 'High', 4),
('Kirin 960', 'High', 4),
('Kirin 970', 'High', 4),
('Kirin 980', 'Super High', 5),
('Kirin 990', 'Super High', 5),
('Mediatek Helio A20', 'Basic', 2),
('Mediatek Helio A22', 'Basic', 2),
('MediaTek Helio A25', 'Moderate', 3),
('Mediatek Helio G25', 'Basic', 2),
('MediaTek Helio G35', 'Moderate', 3),
('MediaTek Helio G80', 'High', 4),
('MediaTek Helio G85', 'High', 4),
('MediaTek Helio G90T', 'Super High', 5),
('Mediatek Helio G95', 'Super High', 5),
('Mediatek Helio P10', 'Basic', 2),
('Mediatek Helio P20', 'Basic', 2),
('Mediatek Helio P22', 'Moderate', 3),
('Mediatek Helio P23', 'Moderate', 3),
('Mediatek Helio P25', 'Moderate', 3),
('Mediatek Helio P35', 'Moderate', 3),
('Mediatek Helio P60', 'Moderate', 3),
('MediaTek Helio P65', 'High', 4),
('MediaTek Helio P70', 'High', 4),
('MediaTek Helio P90', 'High', 4),
('MediaTek Helio P95', 'High', 4),
('Mediatek Helio X10', 'Basic', 2),
('Mediatek Helio X20', 'Moderate', 3),
('MediaTek Helio X23', 'Moderate', 3),
('MediaTek MT6572', 'Low', 1),
('MediaTek MT6577', 'Low', 1),
('Mediatek MT6580M', 'Low', 1),
('Mediatek MT6582', 'Low', 1),
('Mediatek MT6589', 'Low', 1),
('Mediatek MT6592', 'Low', 1),
('Mediatek MT6595', 'Basic', 2),
('Mediatek MT6732', 'Low', 1),
('Mediatek MT6735', 'Low', 1),
('Mediatek MT6737', 'Low', 1),
('Mediatek MT6739', 'Low', 1),
('Mediatek MT6750', 'Low', 1),
('Mediatek MT6752', 'Basic', 2),
('Mediatek MT6753', 'Low', 1),
('Mediatek MT8735', 'Low', 1),
('Samsung Exynos 850', 'Moderate', 3),
('Snapdragon 200', 'Low', 1),
('Snapdragon 205', 'Low', 1),
('Snapdragon 210', 'Low', 1),
('Snapdragon 212', 'Low', 1),
('Snapdragon 400', 'Low', 1),
('Snapdragon 410', 'Low', 1),
('Snapdragon 415', 'Low', 1),
('Snapdragon 425', 'Low', 1),
('Snapdragon 429', 'Basic', 2),
('Snapdragon 430', 'Low', 1),
('Snapdragon 435', 'Low', 1),
('Snapdragon 439', 'Basic', 2),
('Snapdragon 450', 'Basic', 2),
('Snapdragon 460', 'Basic', 2),
('Snapdragon 600', 'Low', 1),
('Snapdragon 615', 'Basic', 2),
('Snapdragon 616', 'Basic', 2),
('Snapdragon 617', 'Basic', 2),
('Snapdragon 625', 'Moderate', 3),
('Snapdragon 626', 'Moderate', 3),
('Snapdragon 630', 'Moderate', 3),
('Snapdragon 632', 'Moderate', 3),
('Snapdragon 636', 'Moderate', 3),
('Snapdragon 650', 'Moderate', 3),
('Snapdragon 652', 'Moderate', 3),
('Snapdragon 653', 'Moderate', 3),
('Snapdragon 660', 'High', 4),
('Snapdragon 662', 'High', 4),
('Snapdragon 665', 'High', 4),
('Snapdragon 670', 'High', 4),
('Snapdragon 675', 'High', 4),
('Snapdragon 710', 'High', 4),
('Snapdragon 712', 'High', 4),
('Snapdragon 720G', 'Super High', 5),
('Snapdragon 730', 'Super High', 5),
('Snapdragon 730G', 'Super High', 5),
('Snapdragon 732G', 'Super High', 5),
('Snapdragon 765G', 'Super High', 5),
('Snapdragon 820', 'Super High', 5),
('Snapdragon 821', 'Super High', 5),
('Snapdragon 835', 'Super High', 5),
('Snapdragon 845', 'Super High', 5),
('Snapdragon 855', 'Super High', 5),
('Snapdragon 855 Plus', 'Super High', 5),
('Snapdragon 865', 'Super High', 5),
('Snapdragon 865 Plus', 'Super High', 5),
('Snapdragon S1', 'Low', 1),
('Snapdragon S4 Play', 'Low', 1),
('Snapdragon S4 Plus', 'Low', 1),
('Snapdragon S4 Pro', 'Low', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `Koderam` int(11) NOT NULL,
  `ram` varchar(50) NOT NULL,
  `Bobotram` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`Koderam`, `ram`, `Bobotram`) VALUES
(5, '12', 4),
(7, '16', 5),
(1, '2', 1),
(2, '3', 2),
(3, '4', 3),
(4, '6', 3),
(6, '8', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `handphone`
--
ALTER TABLE `handphone`
  ADD PRIMARY KEY (`id_handphone`),
  ADD UNIQUE KEY `id_handpone` (`id_handphone`),
  ADD KEY `FK_RAM` (`ram`),
  ADD KEY `FK_layar` (`layar`),
  ADD KEY `FK_Internal` (`internal`),
  ADD KEY `FK_Kamera` (`kamera_utama`),
  ADD KEY `FK_prosesor` (`processor`);

--
-- Indexes for table `internal`
--
ALTER TABLE `internal`
  ADD PRIMARY KEY (`internal`),
  ADD UNIQUE KEY `Kriteria` (`internal`);

--
-- Indexes for table `kamera_utama`
--
ALTER TABLE `kamera_utama`
  ADD PRIMARY KEY (`kamera_utama`),
  ADD UNIQUE KEY `Kriteria` (`kamera_utama`);

--
-- Indexes for table `kriteria_gaming`
--
ALTER TABLE `kriteria_gaming`
  ADD PRIMARY KEY (`Kodegaming`);

--
-- Indexes for table `kriteria_sosmed_fotografi`
--
ALTER TABLE `kriteria_sosmed_fotografi`
  ADD PRIMARY KEY (`Kodesosmed`);

--
-- Indexes for table `kriteria_streaming`
--
ALTER TABLE `kriteria_streaming`
  ADD PRIMARY KEY (`Kodestreaming`);

--
-- Indexes for table `layar`
--
ALTER TABLE `layar`
  ADD PRIMARY KEY (`layar`),
  ADD UNIQUE KEY `Kriteria` (`layar`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `penilaian_kriteria`
--
ALTER TABLE `penilaian_kriteria`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `penilaian_kriteria_kegunaan`
--
ALTER TABLE `penilaian_kriteria_kegunaan`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `prosesor`
--
ALTER TABLE `prosesor`
  ADD PRIMARY KEY (`processor`),
  ADD UNIQUE KEY `processor` (`processor`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram`),
  ADD UNIQUE KEY `ram` (`ram`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `handphone`
--
ALTER TABLE `handphone`
  MODIFY `id_handphone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `handphone`
--
ALTER TABLE `handphone`
  ADD CONSTRAINT `FK_Internal` FOREIGN KEY (`internal`) REFERENCES `internal` (`internal`),
  ADD CONSTRAINT `FK_Kamera` FOREIGN KEY (`kamera_utama`) REFERENCES `kamera_utama` (`kamera_utama`),
  ADD CONSTRAINT `FK_RAM` FOREIGN KEY (`ram`) REFERENCES `ram` (`ram`),
  ADD CONSTRAINT `FK_layar` FOREIGN KEY (`layar`) REFERENCES `layar` (`layar`),
  ADD CONSTRAINT `FK_prosesor` FOREIGN KEY (`processor`) REFERENCES `prosesor` (`processor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
