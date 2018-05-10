-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 07, 2018 at 04:18 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahp_analisa_alternatif`
--

CREATE TABLE `ahp_analisa_alternatif` (
  `alternatif_pertama` varchar(2) NOT NULL,
  `nilai_analisa_alternatif` double NOT NULL,
  `hasil_analisa_alternatif` double NOT NULL,
  `alternatif_kedua` varchar(2) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_analisa_alternatif`
--

INSERT INTO `ahp_analisa_alternatif` (`alternatif_pertama`, `nilai_analisa_alternatif`, `hasil_analisa_alternatif`, `alternatif_kedua`, `id_kriteria`) VALUES
('', 0.111111111111, 0, '', '1'),
('1', 1, 0, '1', '1'),
('2', 1, 0, '2', '1'),
('3', 1, 0, '3', '1'),
('6', 1, 0, '6', '1'),
('A1', 1, 0.692307692308, 'A1', 'C1'),
('A1', 1, 0.652173913044, 'A1', 'C2'),
('A1', 1, 0.09375, 'A1', 'C3'),
('A1', 1, 0.087366689383339, 'A1', 'C4'),
('A1', 1, 0.073657552474568, 'A1', 'C5'),
('A1', 9, 0.870967741936, 'A2', 'C1'),
('A1', 5, 0.789473684211, 'A2', 'C2'),
('A1', 3, 0.22237002490505, 'A2', 'C3'),
('A1', 4, 0.39204144101719, 'A2', 'C4'),
('A1', 0.143, 0.021799888205701, 'A2', 'C5'),
('A1', 9, 0.468208092486, 'A3', 'C1'),
('A1', 9, 0.468208092486, 'A3', 'C2'),
('A1', 3, 0.29268292682927, 'A3', 'C3'),
('A1', 5, 0.3804347826087, 'A3', 'C4'),
('A1', 3, 0.17448954689661, 'A3', 'C5'),
('A1', 9, 0.320158102767, 'A4', 'C1'),
('A1', 9, 0.320158102767, 'A4', 'C2'),
('A1', 0.25, 0.043475740536781, 'A4', 'C3'),
('A1', 0.143, 0.015930780942478, 'A4', 'C4'),
('A1', 0.2, 0.043994691571449, 'A4', 'C5'),
('A1', 9, 0.243243243243, 'A5', 'C1'),
('A1', 9, 0.243243243243, 'A5', 'C2'),
('A1', 0.2, 0.041814760610496, 'A5', 'C3'),
('A1', 0.333, 0.064459930313589, 'A5', 'C4'),
('A1', 4, 0.27907625758739, 'A5', 'C5'),
('A2', 0.111111111111, 0.076923076923, 'A1', 'C1'),
('A2', 0.2, 0.130434782609, 'A1', 'C2'),
('A2', 0.33333333333333, 0.03125, 'A1', 'C3'),
('A2', 0.25, 0.021841672345835, 'A1', 'C4'),
('A2', 6.993006993007, 0.51508777954243, 'A1', 'C5'),
('A2', 1, 0.0967741935484, 'A2', 'C1'),
('A2', 1, 0.157894736842, 'A2', 'C2'),
('A2', 1, 0.074123341635016, 'A2', 'C3'),
('A2', 1, 0.098010360254297, 'A2', 'C4'),
('A2', 1, 0.15244677066924, 'A2', 'C5'),
('A2', 9, 0.468208092486, 'A3', 'C1'),
('A2', 9, 0.468208092486, 'A3', 'C2'),
('A2', 2, 0.19512195121951, 'A3', 'C3'),
('A2', 5, 0.3804347826087, 'A3', 'C4'),
('A2', 6, 0.34897909379322, 'A3', 'C5'),
('A2', 9, 0.320158102767, 'A4', 'C1'),
('A2', 9, 0.320158102767, 'A4', 'C2'),
('A2', 0.167, 0.029041794678569, 'A4', 'C3'),
('A2', 0.5, 0.055702031267407, 'A4', 'C4'),
('A2', 0.2, 0.043994691571449, 'A4', 'C5'),
('A2', 9, 0.243243243243, 'A5', 'C1'),
('A2', 9, 0.243243243243, 'A5', 'C2'),
('A2', 0.333, 0.069621576416475, 'A5', 'C3'),
('A2', 0.333, 0.064459930313589, 'A5', 'C4'),
('A2', 4, 0.27907625758739, 'A5', 'C5'),
('A3', 0.111111111111, 0.076923076923, 'A1', 'C1'),
('A3', 0.111111111111, 0.0724637681159, 'A1', 'C2'),
('A3', 0.33333333333333, 0.03125, 'A1', 'C3'),
('A3', 0.2, 0.017473337876668, 'A1', 'C4'),
('A3', 0.33333333333333, 0.024552517491522, 'A1', 'C5'),
('A3', 0.111111111111, 0.010752688172, 'A2', 'C1'),
('A3', 0.111111111111, 0.0175438596491, 'A2', 'C2'),
('A3', 0.5, 0.037061670817508, 'A2', 'C3'),
('A3', 0.2, 0.019602072050859, 'A2', 'C4'),
('A3', 0.16666666666667, 0.025407795111541, 'A2', 'C5'),
('A3', 1, 0.0520231213873, 'A3', 'C1'),
('A3', 1, 0.0520231213873, 'A3', 'C2'),
('A3', 1, 0.097560975609756, 'A3', 'C3'),
('A3', 1, 0.076086956521739, 'A3', 'C4'),
('A3', 1, 0.058163182298869, 'A3', 'C5'),
('A3', 9, 0.320158102767, 'A4', 'C1'),
('A3', 9, 0.320158102767, 'A4', 'C2'),
('A3', 4, 0.69561184858849, 'A4', 'C3'),
('A3', 7, 0.7798284377437, 'A4', 'C4'),
('A3', 0.143, 0.031456204473586, 'A4', 'C5'),
('A3', 9, 0.243243243243, 'A5', 'C1'),
('A3', 9, 0.243243243243, 'A5', 'C2'),
('A3', 0.25, 0.052268450763119, 'A5', 'C3'),
('A3', 0.5, 0.096786682152536, 'A5', 'C4'),
('A3', 5, 0.34884532198423, 'A5', 'C5'),
('A4', 0.111111111111, 0.076923076923, 'A1', 'C1'),
('A4', 0.111111111111, 0.0724637681159, 'A1', 'C2'),
('A4', 4, 0.375, 'A1', 'C3'),
('A4', 6.993006993007, 0.61095586981356, 'A1', 'C4'),
('A4', 5, 0.36828776237284, 'A1', 'C5'),
('A4', 0.111111111111, 0.010752688172, 'A2', 'C1'),
('A4', 0.111111111111, 0.0175438596491, 'A2', 'C2'),
('A4', 5.9880239520958, 0.44385234511986, 'A2', 'C3'),
('A4', 2, 0.19602072050859, 'A2', 'C4'),
('A4', 5, 0.76223385334621, 'A2', 'C5'),
('A4', 0.111111111111, 0.0057803468208, 'A3', 'C1'),
('A4', 0.111111111111, 0.0057803468208, 'A3', 'C2'),
('A4', 0.25, 0.024390243902439, 'A3', 'C3'),
('A4', 0.14285714285714, 0.010869565217391, 'A3', 'C4'),
('A4', 6.993006993007, 0.40673554055153, 'A3', 'C5'),
('A4', 1, 0.0355731225296, 'A4', 'C1'),
('A4', 1, 0.0355731225296, 'A4', 'C2'),
('A4', 1, 0.17390296214712, 'A4', 'C3'),
('A4', 1, 0.11140406253481, 'A4', 'C4'),
('A4', 1, 0.21997345785725, 'A4', 'C5'),
('A4', 9, 0.243243243243, 'A5', 'C1'),
('A4', 9, 0.243243243243, 'A5', 'C2'),
('A4', 3, 0.62722140915743, 'A5', 'C3'),
('A4', 3, 0.58072009291521, 'A5', 'C4'),
('A4', 0.333, 0.02323309844415, 'A5', 'C5'),
('A5', 0.111111111111, 0.076923076923, 'A1', 'C1'),
('A5', 0.111111111111, 0.0724637681159, 'A1', 'C2'),
('A5', 5, 0.46875, 'A1', 'C3'),
('A5', 3.003003003003, 0.2623624305806, 'A1', 'C4'),
('A5', 0.25, 0.018414388118642, 'A1', 'C5'),
('A5', 0.111111111111, 0.010752688172, 'A2', 'C1'),
('A5', 0.111111111111, 0.0175438596491, 'A2', 'C2'),
('A5', 3.003003003003, 0.22259261752257, 'A2', 'C3'),
('A5', 3.003003003003, 0.29432540616906, 'A2', 'C4'),
('A5', 0.25, 0.03811169266731, 'A2', 'C5'),
('A5', 0.111111111111, 0.0057803468208, 'A3', 'C1'),
('A5', 0.111111111111, 0.0057803468208, 'A3', 'C2'),
('A5', 4, 0.39024390243902, 'A3', 'C3'),
('A5', 2, 0.15217391304348, 'A3', 'C4'),
('A5', 0.2, 0.011632636459774, 'A3', 'C5'),
('A5', 0.111111111111, 0.00395256916996, 'A4', 'C1'),
('A5', 0.111111111111, 0.00395256916996, 'A4', 'C2'),
('A5', 0.33333333333333, 0.05796765404904, 'A4', 'C3'),
('A5', 0.33333333333333, 0.037134687511604, 'A4', 'C4'),
('A5', 3.003003003003, 0.66058095452627, 'A4', 'C5'),
('A5', 1, 0.027027027027, 'A5', 'C1'),
('A5', 1, 0.027027027027, 'A5', 'C2'),
('A5', 1, 0.20907380305248, 'A5', 'C3'),
('A5', 1, 0.19357336430507, 'A5', 'C4'),
('A5', 1, 0.069769064396846, 'A5', 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_analisa_kriteria`
--

CREATE TABLE `ahp_analisa_kriteria` (
  `kriteria_pertama` varchar(2) NOT NULL,
  `nilai_analisa_kriteria` double NOT NULL,
  `hasil_analisa_kriteria` double NOT NULL,
  `kriteria_kedua` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_analisa_kriteria`
--

INSERT INTO `ahp_analisa_kriteria` (`kriteria_pertama`, `nilai_analisa_kriteria`, `hasil_analisa_kriteria`, `kriteria_kedua`) VALUES
('', 0, 0, ''),
('1', 1, 1, '1'),
('2', 1, 1, '2'),
('3', 1, 1, '3'),
('4', 1, 1, '4'),
('5', 1, 1, '5'),
('6', 1, 1, '6'),
('7', 1, 1, '7'),
('7', 0, 0, '8'),
('8', 0, 0, '7'),
('8', 1, 1, '8'),
('C1', 1, 0.107142857143, 'C1'),
('C1', 0.125, 0.0857142857143, 'C2'),
('C1', 9, 0.468208092486, 'C3'),
('C1', 9, 0.320158102767, 'C4'),
('C1', 9, 0.243243243243, 'C5'),
('C2', 8, 0.857142857143, 'C1'),
('C2', 1, 0.685714285714, 'C2'),
('C2', 9, 0.468208092486, 'C3'),
('C2', 9, 0.320158102767, 'C4'),
('C2', 9, 0.243243243243, 'C5'),
('C3', 0.111111111111, 0.0119047619048, 'C1'),
('C3', 0.111111111111, 0.0761904761904, 'C2'),
('C3', 1, 0.0520231213873, 'C3'),
('C3', 9, 0.320158102767, 'C4'),
('C3', 9, 0.243243243243, 'C5'),
('C4', 0.111111111111, 0.0119047619048, 'C1'),
('C4', 0.111111111111, 0.0761904761904, 'C2'),
('C4', 0.111111111111, 0.0057803468208, 'C3'),
('C4', 1, 0.0355731225296, 'C4'),
('C4', 9, 0.243243243243, 'C5'),
('C5', 0.111111111111, 0.0119047619048, 'C1'),
('C5', 0.111111111111, 0.0761904761904, 'C2'),
('C5', 0.111111111111, 0.0057803468208, 'C3'),
('C5', 0.111111111111, 0.00395256916996, 'C4'),
('C5', 1, 0.027027027027, 'C5');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_bobot_alternatif`
--

CREATE TABLE `ahp_bobot_alternatif` (
  `id_alternatif` int(2) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `harga` float NOT NULL,
  `jarak` float NOT NULL,
  `suasana` float NOT NULL,
  `fasilitas` float NOT NULL,
  `varian` float NOT NULL,
  `kebersihan` float NOT NULL,
  `pelayanan` float NOT NULL,
  `rasa` float NOT NULL,
  `hasil_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_bobot_alternatif`
--

INSERT INTO `ahp_bobot_alternatif` (`id_alternatif`, `nama_alternatif`, `harga`, `jarak`, `suasana`, `fasilitas`, `varian`, `kebersihan`, `pelayanan`, `rasa`, `hasil_akhir`) VALUES
(1, 'Resto A', 0.4, 1, 1, 1, 1, 1, 0.8, 1, 0),
(2, 'Resto B', 0.4, 0.428571, 1, 1, 1, 1, 0.8, 1, 0),
(3, 'Resto C', 1, 0.75, 0.75, 0.666667, 0.416667, 0.75, 1, 0.8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_alternatif`
--

CREATE TABLE `ahp_data_alternatif` (
  `id_alternatif` int(2) NOT NULL,
  `nama_alternatif` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL,
  `jarak` int(11) NOT NULL,
  `suasana` int(11) NOT NULL,
  `fasilitas` int(11) NOT NULL,
  `varian` int(11) NOT NULL,
  `kebersihan` int(11) NOT NULL,
  `pelayanan` int(11) NOT NULL,
  `rasa` int(11) NOT NULL,
  `hasil_akhir` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_data_alternatif`
--

INSERT INTO `ahp_data_alternatif` (`id_alternatif`, `nama_alternatif`, `harga`, `jarak`, `suasana`, `fasilitas`, `varian`, `kebersihan`, `pelayanan`, `rasa`, `hasil_akhir`) VALUES
(1, 'Resto A', 5, 3, 4, 6, 12, 4, 4, 5, 0.820403762717),
(2, 'Resto B', 5, 7, 4, 6, 12, 4, 4, 5, 0.760790338071),
(3, 'Resto C', 2, 4, 3, 4, 5, 3, 5, 4, 0.832273482328);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_data_kriteria`
--

CREATE TABLE `ahp_data_kriteria` (
  `id_kriteria` int(2) NOT NULL,
  `nama_kriteria` varchar(45) NOT NULL,
  `jumlah_kriteria` double NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_data_kriteria`
--

INSERT INTO `ahp_data_kriteria` (`id_kriteria`, `nama_kriteria`, `jumlah_kriteria`, `bobot_kriteria`) VALUES
(1, 'Harga', 1, 0.264557308325),
(2, 'Jarak (KM)', 1, 0.104323414888),
(3, 'Suasana', 1, 0.104323414888),
(4, 'Fasilitas', 1, 0.0381080907638),
(5, 'Varian', 1, 0.0599687170604),
(6, 'Kebersihan', 1, 0.0599687170604),
(7, 'Pelayanan', 1, 0.104309261437),
(8, 'Rasa', 1, 0.264441075577);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_jum_alt_kri`
--

CREATE TABLE `ahp_jum_alt_kri` (
  `id_alternatif` varchar(2) NOT NULL,
  `id_kriteria` varchar(2) NOT NULL,
  `jumlah_alt_kri` double NOT NULL,
  `skor_alt_kri` double NOT NULL,
  `hasil_alt_kri` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_jum_alt_kri`
--

INSERT INTO `ahp_jum_alt_kri` (`id_alternatif`, `id_kriteria`, `jumlah_alt_kri`, `skor_alt_kri`, `hasil_alt_kri`) VALUES
('A1', 'C1', 1.4444444444439997, 0.2918194768949445, 0.0714646394492),
('A1', 'C2', 1.5333333333329997, 0.21957079523471676, 0.113055534915),
('A1', 'C3', 10.66666666666666, 0.22485389795781163, 0.031637829614),
('A1', 'C4', 11.44600999601, 0.2156521046816235, 0.0160743607128),
('A1', 'C5', 13.576340326340329, 0.19624240121472752, 0.00490037610914),
('A2', 'C1', 10.333333333333002, 0.1953775080327011, 0.0478466458668),
('A2', 'C2', 6.333333333332999, 0.17228057468508967, 0.0887061164286),
('A2', 'C3', 13.4910269550988, 0.11744785512253837, 0.0165253760893),
('A2', 'C4', 10.203003003003001, 0.11910833018139519, 0.00887814318371),
('A2', 'C5', 6.55966666666667, 0.14887004787166533, 0.00371743935786),
('A3', 'C1', 19.222222222222, 0.1520195112455489, 0.0372285622468),
('A3', 'C2', 19.222222222222, 0.1457296418892452, 0.0750352185913),
('A3', 'C3', 10.25, 0.1439972650437816, 0.0202609826991),
('A3', 'C4', 13.14285714285714, 0.1574868231001113, 0.0117388142618),
('A3', 'C5', 17.193006993007, 0.14552645933447894, 0.00363394648739),
('A4', 'C1', 28.111111111111, 0.22726711207740763, 0.0556561967559),
('A4', 'C2', 28.111111111111, 0.24732193367875183, 0.127344410618),
('A4', 'C3', 5.75033333333333, 0.24429208917361944, 0.0343728597259),
('A4', 'C4', 8.976333333333331, 0.25871758242969267, 0.0192843920946),
('A4', 'C5', 4.546003003003, 0.27819261444663335, 0.0069467578522),
('A5', 'C1', 37, 0.13351639174949145, 0.032697271952),
('A5', 'C2', 37, 0.21509705451225541, 0.110752035718),
('A5', 'C3', 4.7829999999999995, 0.26940889270224844, 0.0379068929702),
('A5', 'C4', 5.166, 0.249035159607177, 0.0185626798848),
('A5', 'C5', 14.333, 0.2311684771324953, 0.005772516416);

-- --------------------------------------------------------

--
-- Table structure for table `ahp_nilai`
--

CREATE TABLE `ahp_nilai` (
  `id_nilai` int(11) NOT NULL,
  `jum_nilai` double NOT NULL,
  `ket_nilai` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_nilai`
--

INSERT INTO `ahp_nilai` (`id_nilai`, `jum_nilai`, `ket_nilai`) VALUES
(2, 9, 'Mutlak sangat penting dari'),
(3, 8, 'Mendekati mutlak dari'),
(8, 7, 'Sangat penting dari'),
(9, 6, 'Mendekati sangat penting dari'),
(10, 5, 'Lebih penting dari'),
(11, 4, 'Mendekati lebih penting dari'),
(12, 3, 'Sedikit lebih penting dari'),
(13, 2, 'Mendekati sedikit lebih penting dari'),
(14, 1, 'Sama penting dengan'),
(15, 0.5, '1 bagi mendekati sedikit lebih penting dari'),
(16, 0.333, '1 bagi sedikit lebih penting dari'),
(17, 0.25, '1 bagi mendekati lebih penting dari'),
(18, 0.2, '1 bagi lebih penting dari'),
(19, 0.167, '1 bagi mendekati sangat penting dari'),
(20, 0.143, '1 bagi sangat penting dari'),
(21, 0.125, '1 bagi mendekati mutlak dari');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_pengguna`
--

CREATE TABLE `ahp_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ahp_pengguna`
--

INSERT INTO `ahp_pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Teuku Ghazali', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'Samudra Wolf', 'user', 'ee11cbb19052e40b07aac0ca060c23ee');

-- --------------------------------------------------------

--
-- Table structure for table `ahp_rangking`
--

CREATE TABLE `ahp_rangking` (
  `id` int(5) NOT NULL,
  `alternatif` varchar(100) NOT NULL,
  `skor_bobot` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahp_analisa_alternatif`
--
ALTER TABLE `ahp_analisa_alternatif`
  ADD PRIMARY KEY (`alternatif_pertama`,`alternatif_kedua`,`id_kriteria`);

--
-- Indexes for table `ahp_analisa_kriteria`
--
ALTER TABLE `ahp_analisa_kriteria`
  ADD PRIMARY KEY (`kriteria_pertama`,`kriteria_kedua`);

--
-- Indexes for table `ahp_bobot_alternatif`
--
ALTER TABLE `ahp_bobot_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `ahp_data_alternatif`
--
ALTER TABLE `ahp_data_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `ahp_data_kriteria`
--
ALTER TABLE `ahp_data_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ahp_jum_alt_kri`
--
ALTER TABLE `ahp_jum_alt_kri`
  ADD PRIMARY KEY (`id_alternatif`,`id_kriteria`);

--
-- Indexes for table `ahp_nilai`
--
ALTER TABLE `ahp_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `ahp_pengguna`
--
ALTER TABLE `ahp_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `ahp_rangking`
--
ALTER TABLE `ahp_rangking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahp_bobot_alternatif`
--
ALTER TABLE `ahp_bobot_alternatif`
  MODIFY `id_alternatif` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ahp_data_alternatif`
--
ALTER TABLE `ahp_data_alternatif`
  MODIFY `id_alternatif` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ahp_data_kriteria`
--
ALTER TABLE `ahp_data_kriteria`
  MODIFY `id_kriteria` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ahp_nilai`
--
ALTER TABLE `ahp_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ahp_pengguna`
--
ALTER TABLE `ahp_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ahp_rangking`
--
ALTER TABLE `ahp_rangking`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
