-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 21, 2017 at 03:32 PM
-- Server version: 5.1.73-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icpetraa_2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Bijo97', 'abcdefg'),
(2, 'kenyot', 'mautauaja'),
(4, 'bambang', 'hehehe'),
(5, 'icpetra', 'icpetra16');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `short` text NOT NULL,
  `author` varchar(30) NOT NULL,
  `updated` datetime NOT NULL,
  `tampil` int(2) NOT NULL,
  `view` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `kategori` int(11) NOT NULL,
  `email` text NOT NULL,
  `judul` text NOT NULL,
  `pesan` text NOT NULL,
  `time` text NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `total` int(30) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggalbayar` datetime NOT NULL,
  `tanggaldaftar` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anggota1` varchar(100) NOT NULL,
  `nama_anggota2` varchar(100) NOT NULL,
  `nama_anggota3` varchar(100) NOT NULL,
  `kelas_anggota1` varchar(100) NOT NULL,
  `kelas_anggota2` varchar(100) NOT NULL,
  `kelas_anggota3` varchar(100) NOT NULL,
  `vege1` int(11) NOT NULL,
  `vege2` int(11) NOT NULL,
  `vege3` int(11) NOT NULL,
  `alergi1` text NOT NULL,
  `alergi2` text NOT NULL,
  `alergi3` text NOT NULL,
  `penyakit1` text NOT NULL,
  `penyakit2` text NOT NULL,
  `penyakit3` text NOT NULL,
  `obat1` int(11) NOT NULL,
  `obat2` int(11) NOT NULL,
  `obat3` int(11) NOT NULL,
  `pembayaran` int(11) NOT NULL,
  `kodeunik` varchar(3) NOT NULL,
  `sekolah` varchar(100) NOT NULL,
  `nohp1` varchar(20) NOT NULL,
  `nohp2` varchar(20) NOT NULL,
  `nohp3` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `flogin` int(11) NOT NULL,
  `kodeverifikasi` varchar(100) NOT NULL,
  `validasi` int(11) NOT NULL,
  `foto1` varchar(16) NOT NULL,
  `foto2` varchar(16) NOT NULL,
  `foto3` varchar(16) NOT NULL,
  `ktm1` varchar(16) NOT NULL,
  `ktm2` varchar(16) NOT NULL,
  `ktm3` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama_anggota1`, `nama_anggota2`, `nama_anggota3`, `kelas_anggota1`, `kelas_anggota2`, `kelas_anggota3`, `vege1`, `vege2`, `vege3`, `alergi1`, `alergi2`, `alergi3`, `penyakit1`, `penyakit2`, `penyakit3`, `obat1`, `obat2`, `obat3`, `pembayaran`, `kodeunik`, `sekolah`, `nohp1`, `nohp2`, `nohp3`, `email`, `username`, `password`, `flogin`, `kodeverifikasi`, `validasi`, `foto1`, `foto2`, `foto3`, `ktm1`, `ktm2`, `ktm3`) VALUES
(31, 'Putu Aditya Pratama', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '459', 'SMA Taruna Nusa Harapan Mojokerto', '082231063492', '', '', 'edo.pratama2000@gmail.com', 'YRQEIZ', 'Ywsjei', 1, 'kS1YHs3F9Kreoy08uGLF0KExcXLunkrHctFUVJz5u1kSAl142MJ2wnzJlkeI', 1, '', '', '', '', '', ''),
(24, 'Edison Febrianto', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '353', 'Spins', '087854965888', '', '', 'gatha.agathaah@gmail.com', 'QDIQHV', 'XZlnLa', 0, '4LC1fxSEY8CW17qtLzNnQClQYJC819u6U679D0NC8qyayYDjyqHp32f2LSaN', 0, '', '', '', '', '', ''),
(26, 'nydia safira', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 1, '833', 'SMA Katholik St. Louis 1 Surabaya', '081333459653', '', '', 'nydiasafira@gmail.com', 'FYVEBN', 'VYJHLO', 0, '8OFaJzzNPAjyLiBWvwLFAiAy1hkQbDaksQubp4ZeEiNqAon5V8Lvqm4rEohP', 1, '', '', '', '', '', ''),
(27, 'happy', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '393', 'SMAK St. Louis 1 Surabaya', '085852878177', '', '', 'trixiesantoso@yahoo.com', 'LLCIWM', 'rWXwXF', 1, 'I5WGW8GlAHGAzwQCZiJjbdL7ah4QBY9j4500dHmOp2pYzfBzykSJxDQIVVzx', 1, '', '', '', '', '', ''),
(28, 'Matthew Stevano Santosa', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 1, '289', 'SMAK St. Louis 1 Surabaya', '085852878177', '', '', 'magnathunder@yahoo.com', 'IWLHYH', '9ONeEh', 0, 'Sjb0aFKpOPfsmuB4Otv7pNheAvTSIGOA0ZAbElBsaQVxlxCa07hqUzEv5xnN', 0, '', '', '', '', '', ''),
(29, 'Trixie Laudion', 'Matthew Stevano Santosa', 'Nydia Safira Sucahyo', 'Sebelas', 'Sebelas', 'Sebelas', 0, 0, 0, 'tidak', 'tidak', 'tidak', '', '', '', 0, 0, 0, 1, '039', 'SMAK St. Louis 1 Surabaya', '085852878177', '089697744993', '081333459653', 'laudiontrixie@gmail.com', 'TEVEGO', 'fAXUWH', 1, 'l2b3jyMXCyEvTKbwvlmGBVVbSP7ARuxcwIfQh2NTArpucB0IWnoxijJb8RLZ', 1, '', '', '', '', '', ''),
(13, 'Levina', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '382', 'Spins', '081330893231', '', '', 't.levina31@gmail.com', 'TGGLWX', 'njA1Q5', 1, 'oZxiktlZ2SvPTqKt91JATDXdeZ3kiUBGT8YdCjdFcIu69fzjgiU9WSmaRqv9', 1, '', '', '', '', '', ''),
(23, 'Hansel Rahardjo', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '140', 'SpIns Interactional School', '087854965888', '', '', 'foodboy1008@gmail.com', 'JMWNOD', 'aYUEt0', 0, 'R1YyW1LyEMef5l0RGtIc0QmZK1tL8TOZVNxRPipt5EJaZJ2GcKSdBfdmgH8p', 1, '', '', '', '', '', ''),
(18, 'Salviana', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '573', 'Spins', '082116881999', '', '', 'salcarissa23@gmail.com', 'BCAXRL', 'KmXR25', 0, 'Sd77Ql8CrMHszTDQWKQRqhCNetPkYAIRNPZEb7gCUY5uRJkOubGVsiIHMy1L', 0, '', '', '', '', '', ''),
(19, 'Edison Febrianto', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '163', 'Spins', '087854965888', '', '', 'roijoan1@gmail.com', 'LYESCN', 'ufKZ4n', 1, '6CjuehjRc1oGq7cvz8GhebpBt88xiMUpoeTCvdtHfRoGZAbyIRQX3gzwoH4H', 1, '', '', '', '', '', ''),
(22, 'Edison Febrianto', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '128', 'Spins', '087854965888', '', '', 'edisonones@yahoo.co.id', 'QFPADX', 'agXGDz', 0, '2fx3LVphZMnucM9Bplcpu6zL3gpDnEtpU0sFWRWWEjqQ5zsvVEUqKubOLAr8', 0, '', '', '', '', '', ''),
(32, 'Agnestasya Rosari Pramana', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '848', 'SMA Taruna Nusa Harapan Mojokerto', '087853905758', '', '', 'agnestasya0405@gmail.com', 'PSDYQF', 'p9Yuq4', 0, 'upGRLnu433nGxazPLiYHWa659BvdqV7VkNM6ahaekxVSIvHtNGbJQiOZUkdk', 1, '', '', '', '', '', ''),
(33, 'Dicksen Alfersius Novian', 'Agnestasya Rosari Pranama', 'Putu Aditya Pratana', 'Sepuluh', 'Sepuluh', 'Sepuluh', 0, 0, 1, '-', '-', '-', '', '', '', 0, 0, 0, 1, '797', 'SMA Taruna Nusa Harapan Mojokerto', '083830292513', '0857853905758', '082231063492', 'dicksenan@gmail.com', 'EWTMBS', 'G0K47x', 1, '55dIo78Q0eSK5NOBXGmrI38JOcQlUK50QiJepS4q7WacKZOIFbaoei73vYpp', 1, '', '', '', '', '', ''),
(34, 'felicia', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '675', 'smak santo agustinus kediri', '08814955755', '', '', 'star2felicia@gmail.com', 'WPHPXF', 'jdwBt2', 0, '8JwgS6QBtRtZgvxNn75X2jhfQSISxqqG9WW23NEwE7vVD2J0aPYc8frZ7aRF', 0, '', '', '', '', '', ''),
(35, 'septianda angelica', 'diignufgujd', 'kfsgugiu', 'Sepuluh', 'DuaBelas', 'Sebelas', 2, 2, 1, 'Ya', 'Tidak', 'Ya', 'Tidak tahu', 'Tidak ada', 'Tidak ada', 1, 1, 2, 0, '478', 'coba coba', '08129387230', '927943598', '743735897489', 'angeloids23@gmail.com', 'MWHBPI', 'IxWEpt', 1, '6pYmhkoIWVddpSKhlBzpcS7JPM9ifT6lj4IAp7jl2wzrojJKVi98bgR031ji', 1, '', '', '', '', '', ''),
(36, 'Agatha', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '473', 'Spins', '081938035241', '', '', 'agathachristy760@yahoo.co.id', 'XOVQJB', '6tjdcs', 1, 'GZJZj9K8PaERwI0yCymgUpnoJAAb1lxHkhGDqqMfBr7797GLG32BtpZc0An1', 1, '', '', '', '', '', ''),
(37, 'william', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '350', 'sekolah ciputra', '082231666663', '', '', 'williamjiawei2000@gmail.com', 'SICQQJ', 'icDYRT', 0, '7YUkRcKgFayugrVS9gYNTk56Y3XRnuWvsQPk3zAIK9c1A8TKpSxidDobHm24', 1, '', '', '', '', '', ''),
(53, 'Raja moris', 'Tomy Andrea Gunawan', 'Samuel Hans wicaksana', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '463', 'SMA KRISTEN PETRA 5 - Jawa Timur', '081245315546', '081336000873', '087853134568', 'Morisliem8@gmail.com', 'YHLVKT', 'oNimDT', 1, '7GcKLU5r1K2Svs3LpkcfIWDweZ98pMuxtHieCoFD8IwEazpATCPByt7NthWS', 1, '463_anggota1.jpg', '463_anggota2.jpg', '463_anggota3.jpg', '463_anggota1.jpg', '463_anggota2.jpg', '463_anggota3.jpg'),
(45, 'Phoebe Diva Zaviera ', 'Michele Soehanto', 'Agatha Gloriana Christy', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '605', 'Spins Interactional School', '082245404888', '089606365212', '089663432901', 'phoebezaviera@yahoo.com', 'SPJSMC', 'QtaNQu', 1, 'ofhJJ0T993EKeegBVSXCl2tPdhGHWHdkWv4GvYPE1upgIFRDyOgURJK40qMX', 1, '605_anggota1.jpg', '605_anggota2.jpg', '', '', '', ''),
(46, 'Jeannie Claudia Diyanto', 'Michael Hans', 'Leonardus Bryan Himawan ', 'Sepuluh', 'Sepuluh', 'Sepuluh', 0, 0, 0, 'Tidak', 'Tidak', 'Tidak', '', '', '', 0, 0, 0, 1, '767', 'Smak st Louis 1 surabaya', '081232904439', '083831703100', '0813308329', 'jenclauddiyantz20@gmail.com', 'QHIOBQ', 'GPj6dF', 1, 'Vlm2mLG8lbZp8YHaCYva28oP5Vi3DWOziaBFViNhtMGCLoMnnixpqVevRxzu', 1, '', '', '', '', '', ''),
(54, 'Michael Ahli', 'Billy Kurniawan', 'Alexander Irvan K', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 1, '804', 'SMAK.St.Louis 1', '083849848883', '081230375233', '087853475781', 'michael.ahli99@gmail.com', 'FANIVP', '3pFpcU', 1, 'GrvNPuug8BBsm9FSoHoHvZlckXlTQpmxQRkGlOWupxWMHCE6j3NP381o5nhW', 1, '804_anggota1.jpg', '804_anggota2.jpg', '804_anggota3.jpg', '804_anggota1.jpg', '804_anggota2.jpg', '804_anggota3.jpg'),
(55, 'Febe Leonora A', 'Coanne Mansula Kweniati', 'Jeremiah Wednesdito', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Udang', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '025', 'SMA KRISTEN PETRA 5 - Jawa Timur', '081330058507', '083830000221', '087787146150', 'jeremiahwednesdito@gmail.com', 'LWDCPI', 'GJizG8', 1, 'VoqU056NVZNulXknqbxwMQvndLcJLqgHPHBPNICIHqc3oxrOJYlvPRS3C5Mo', 1, '025_anggota1.jpg', '025_anggota2.jpg', '', '025_anggota1.jpg', '025_anggota2.jpg', '025_anggota3.jpg'),
(108, 'Daniel Wahyuning Laksono', 'Ivena Natalia', 'Jesslyn Tjiptawan', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'ya', 'ya', 'ya', 'Tidak ada', 'Tidak ada', 'Tidak ada', 1, 1, 1, 0, '217', 'SMA Santa Maria - Surabaya', '082233563480', '08113307680', '082139435600', 'daniellaksono141@yahoo.com', 'YJVLKS', 'VEkkSc', 1, 'H3O3JOG7L83WyhrZdNOEbxzPRUH4cSNUWCXFrDNcMQ9k8Akmn90zGAoyu6CH', 1, '217_anggota1.jpg', '217_anggota2.jpg', '217_anggota3.jpg', '217_anggota1.jpg', '217_anggota2.jpg', '217_anggota3.jpg'),
(56, 'Juro Sutantra', 'Claudia Renata Maharani D.', 'Davina Daniella Serbadi', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '613', 'SMAK St. Louis 1 Surabaya', '081231921872', '081234676006', '087751543539', 'davina.daniella@yahoo.com', 'BLGFRJ', 'F6SftY', 1, '6H1RnZpGuL7gOHW8KonX4JCaBSDAwNVDvWvTWUzqGHGuoCC91065KJfmBTW7', 1, '613_anggota1.jpg', '613_anggota2.jpg', '613_anggota3.jpg', '613_anggota1.jpg', '613_anggota2.jpg', '613_anggota3.jpg'),
(57, 'FREDERICK TIRTA SUSANTO', 'CATHLYN FLORENCIA', 'CELINE MARGARETHA YUDIANTO', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '599', 'SMAK St. LOUIS 1 SURABAYA', '0811379540', '081332679000', '081252564678', 'frederick753159@gmail.com', 'IOEPSM', 'koXOjW', 1, 'KcHpD7IQBUwFowbJQKTsrnNPkB9gc3fXgWmT35KFZhlnNw7Eg06InUxIwHZI', 1, '599_anggota1.jpg', '599_anggota2.jpg', '599_anggota3.jpg', '599_anggota1.jpg', '599_anggota2.jpg', '599_anggota3.jpg'),
(58, 'CATHLYN FLORENCIA', 'FREDERICK TIRTA SUSANTO', 'CELINE MARGARETHA YUDIANTO', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '699', 'SMA KATOLIK ST.LOUIS 1 - Jawa Timur', '081332679000', '0811379540', '081252564678', 'cathlynflorencia@yahoo.com', 'HQOQME', 'cT7UMx', 1, 'Xyi9UYdoGmXQqLx63bGGGPTAWNmuslppTIzNHNbn99ezVMGZYmFEcyf9lBEO', 1, '', '', '', '', '', ''),
(59, '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '487', '', '', '', '', '', 'AILUBG', 'MUUb38', 0, 'X9p2eqCq7czrpiDOkYh71wUVq5ZzAOjxYIAd8cDgpcIOvlDPkUWmrRhSXhsx', 0, '', '', '', '', '', ''),
(60, 'Edwin Setiawan', 'Gregorius Aprisunnea', 'Ian Francis ', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '795', 'SMA KATOLIK ST LOUIS 1', '081216152038', '087875218858', '08185257448298', 'www.edwinsetiawan@gmail.com', 'IETTDA', 'eBQZFh', 1, 'nM0XpnmCDKP6IaL0vUKg2LsoSfG7ZECnrClQZHtDsjKbuvbZqWgsIJRAYyHX', 1, '795_anggota1.jpg', '795_anggota2.jpg', '795_anggota3.jpg', '795_anggota1.jpg', '795_anggota2.jpg', '795_anggota3.jpg'),
(61, 'Pamela Andriani', '', '', '', '', '', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '365', 'SMAK St.Louis 1 surabaya', '089529200688', '', '', 'pamela.hendrata@yahoo.com', 'TVEHKE', '1pVrML', 1, 'uyG1qABH12sni1CiLrs4RD5gzx2kVIUphArIb2pc5SznTbGFD9JuNPKmmMGh', 1, '', '', '', '', '', ''),
(62, 'Kevin Budiono', 'Reyhan Iskandar', 'Beatrix Tanubrata', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '093', 'SMA Katolik st louis 1 - Surabaya', '081803154541', '087854068778', '08563088323', 'kevinbudiono04@yahoo.com', 'ZXJNJM', 'bhOCB8', 1, 'N1DLA0NaCV5P9HqPGlabHEnYs0zA4wYRxCC7Cqiflo4u5ujMQuXx8lwBl5bp', 1, '093_anggota1.jpg', '093_anggota2.jpg', '093_anggota3.jpg', '093_anggota1.jpg', '093_anggota2.jpg', '093_anggota3.jpg'),
(63, 'Felix Halim', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '359', 'SMA KATOLIK FRATERAN - Jawa Timur', '+6282230656651', '', '', 'felix.halim@outlook.com', 'BXMMAH', 'QxeSnY', 1, 'xsSDGrxbptOyp2HC5A5zDoqaCjyAF8ucBmQhNotdRiMhltTr4Z1InrSZKqAp', 1, '', '', '', '', '', ''),
(64, 'Mikael Ndaru Ajiwidodo', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '970', 'SMAK St.Louis 1 Sby', '081259505995', '', '', 'mikaelndaruajiwidodo@yahoo.com', 'MFYSOM', 'vu2Ews', 1, 'wrpYS99bAu3JnSIdlUa4tEzXGeu9cbeJDDIvNRHnmK6JDPXZJ73dLCasREB4', 1, '', '', '', '', '', ''),
(65, 'Christopher Jose Lorenzo Tanaputra', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '124', 'SMAK St. Louis 1-Surabaya', '089677340756', '', '', 'cito@smpsantamaria2sda.sch.id', 'LXSIVX', 'PGWF0z', 1, 'j1fBfJtnPNjUkspvTicd777nspwIxLaRMqs29VpZJJT3ciz6ALjISr5lQC3o', 1, '', '', '', '', '', ''),
(85, 'Ignatius Richard Sutiono', 'Vincentius Aditya Herdianto', 'Erica Geovany Sugianto', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 1, '823', 'SMA ST LOUIS 1 SURABAYA', '08989282888', '089617907326', '085730703087', 'richardjogja@yahoo.com', 'XUIYBC', '34Cixz', 1, 'MzHVlazckxGIwlsQfgaakhepTwWtl9R7Iz24JCg4aXMHjexyuHJPYXeStalP', 1, '823_anggota1.jpg', '823_anggota2.jpg', '823_anggota3.jpg', '823_anggota1.jpg', '823_anggota2.jpg', '823_anggota3.jpg'),
(66, 'Felicia arthur limantara', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '413', 'SMAK ST AGUSTINUS, KEDIRI', '08814955755', '', '', 'star2felicia@yahoo.com', 'EZEFTS', 'stuTLr', 0, 'Bs3dPBbMRFNbbWsV8s5ldMOGhHsI9B2L35ZTHaGzPtL1qeWyG2UTOIA5q3OA', 0, '', '', '', '', '', ''),
(67, 'felicia arthur limantara', '', '', '', '', '', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '701', 'smak st agustinus, kediri', '08814955755', '', '', 'veronicafebrisiswanto@gmail.com', 'GIEVGK', 'XFqaTI', 1, 'aPoqEsjo42BTf22binm8EM5jcgdV2d1d2qEHTY5Y0HRfKUr3iObWAhgNxtIA', 1, '701_anggota1.jpg', '701_anggota2.jpg', '701_anggota3.jpg', '701_anggota1.jpg', '701_anggota2.jpg', ''),
(68, 'Rafael Ivan', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '519', 'SMAK St. Louis 1 Surabaya', '08987871882', '', '', 'mariaveliana98@gmail.com', 'DTNMEF', 'gNcoG9', 1, 'aweZRkf3EqkPNOObWyGqJUHw65dgDodOUrNLM3Oru9giX5tUE9kn42Ub77rL', 1, '', '', '', '', '', ''),
(69, 'Xenia Virrienza', 'Kenneth Febian', 'Anastasia Cherline', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 1, '073', 'SMAK St Louis 1 Surabaya', '085853001919', '081330458460', '085101566318', 'xeniavirrienza99@gmail.com', 'JERDTW', 'Tryhm0', 1, 'XYXJLpO4hhjtpvxDTIi2uaVWJciJd33a20UNqISH0baqHH4AqmCVwxRfK9ZX', 1, '073_anggota1.jpg', '073_anggota2.jpg', '073_anggota3.jpg', '073_anggota1.jpg', '073_anggota2.jpg', '073_anggota3.jpg'),
(70, 'Livia Rachel', 'Ferdian Nathanael', 'Fenicia Santoso', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, '', '', '', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '479', 'SMAK St. Louis 1', '081332013690', '082141714071', '', 'livia.rachel@yahoo.co.id', 'FKSXJP', 'JaonG8', 1, 'a1qQ7liBaSJIdyIDL6kFsVoDkMksf4nq6Ngd8zPjry1F7JjSPDxhzWVUIfnX', 1, '479_anggota1.jpg', '479_anggota2.jpg', '479_anggota3.jpg', '479_anggota1.jpg', '', ''),
(71, 'Ivonia Winoto', 'Richard Medyanto', 'Emanuel Lienardi', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 1, '180', 'SMAK St. Louis 1', '081703690063', '082245234821', '089602887693', 'ivoniawinoto@gmail.com', 'LTWFCZ', 'wJszMT', 1, 'yPqBDJ2Za4XXL6yUxjMKqLh9dRW7ZJaxzA9dkbcvfas1g0WNjJyKuPTHHPOG', 1, '180_anggota1.jpg', '180_anggota2.jpg', '180_anggota3.jpg', '180_anggota1.jpg', '180_anggota2.jpg', '180_anggota3.jpg'),
(72, 'Stephanus Robert', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '513', 'SMA KATOLIK ST.LOUIS 1 - Jawa Timur', '089643259863', '', '', 'stephanus.ko@gmail.com', 'MFWSIX', 'iO7xpK', 1, 'oPuHYRFolXayMVN1p0T7kNq9VXzGxL2VBxDzoiYKg9i2463t7XBsL1CGZbmw', 1, '', '', '', '', '', ''),
(73, 'Alexander Fernando Lauvandy', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '828', 'SMAK St. Louis 1 Surabaya', '081553270703', '', '', 'fernandolau1499@gmail.com', 'MSQZYA', 'qoFwNv', 1, 'BKwi4zCTzXxMOGHOaqs8msyL75yDXMwzx3RCDuvcs2ZgJH5U7x2u0Bf7HNLE', 1, '', '', '', '', '', ''),
(74, 'Ivan', 'Jeremy Sean Kadarman', 'Maria Veliana Liandany', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 1, 1, 1, 0, '554', 'SMAK St. Louis 1 Surabaya', '087852307291', '085931020077', '08987871882', 'mariulululs98@gmail.com', 'RSQNHT', '8uAFF8', 1, '5vg1k1lnw1ExMB91hQFN7pWBZBh87RCdmSeHTA4qBIYok7pBY5p6ulHuWZC4', 1, '554_anggota1.jpg', '554_anggota2.jpg', '554_anggota3.jpg', '554_anggota1.jpg', '554_anggota2.jpg', '554_anggota3.jpg'),
(75, 'Muhamad saepuloh', 'Dzulfikri Ahmadi Kusman', 'Nia Sania', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '568', 'SMK Nusantara Raya Bandung', '085794944315', '085794944315', '085794944315', 'Muhamadsaepuloh07@gmail.com', 'FVZFWQ', 'PDip1E', 1, 'YuEVLMe5obkrRjYGwMGJDjzhBYifzU5xoKtawHfVSAmJTkqq779KqJ11Hkhh', 1, '568_anggota1.jpg', '568_anggota2.jpg', '568_anggota3.jpg', '568_anggota1.jpg', '568_anggota2.jpg', '568_anggota3.jpg'),
(76, 'Wisnu abdilah', 'Evi Ernawati', 'jeje', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '763', 'SMK Nusantara Raya Bandung', '081320566136', '081320566136', '081320566136', 'wisnupaslur100@gmail.com', 'NEXGJY', '1Oqyxe', 1, 'A7YOiXyHpxnc7jmVQxQ4UN5JeEgspVRZ2QOlNm3dUqp2KMXAjOFeBKYPpeiO', 1, '763_anggota1.jpg', '763_anggota2.jpg', '763_anggota3.jpg', '763_anggota1.jpg', '763_anggota2.jpg', '763_anggota3.jpg'),
(77, 'Grace Layrensius', 'Regine Audrea', 'Lie Adelia', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '612', 'SMA KATOLIK FRATERAN - Jawa Timur', '+6282233337989', '081235404516', '081233952205', 'layrensius.grace@yahoo.com', 'DUMPEX', 'SRdTGw', 1, 'CRmBsBn3hu6mI2PkbBOLMHEDVxkr8sELk0mMCKPUeWhXY7iaI6VvNz9J6taf', 1, '612_anggota1.jpg', '612_anggota2.jpg', '612_anggota3.jpg', '612_anggota1.jpg', '612_anggota2.jpg', '612_anggota3.jpg'),
(78, 'a', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '322', 'SMA YSMP CANDRADIMUKA - Jawa Barat', '2', '', '', 'a@b.c', 'WVWAFZ', 'k5Cix1', 0, 'JwXINDGLThwgYmNncCedOcxTPQqR8D8S96BXKhIDyeTwAHUNj907ly0bor3x', 0, '', '', '', '', '', ''),
(86, 'Neysa Winaldo', 'Ray Tjandrakesuma', 'Kevin Ferdinand', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Jika mengkonsumsi terlalu banyak vitamin C', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '314', 'SMA KRISTEN ELYON - Jawa Timur', '081357261148', '087877836056', '082143757780', 'winaldoneysa@gmail.com', 'VSUJOP', 'qIQXqH', 1, 'BDBiI6tlGJTAjSsnHa92ILtrCrSjO2JpFlHorbJ8VCJevbBcmLf4xIw9aotY', 1, '314_anggota1.jpg', '314_anggota2.jpg', '314_anggota3.jpg', '314_anggota1.jpg', '314_anggota2.jpg', '314_anggota3.jpg'),
(80, 'Titi Wiliana', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '153', 'SMA Kr Petra 1', '082282099982', '', '', 'titi.wiliana02@gmail.com', 'VSJGLX', 'TWeDEV', 1, '6e6xG4Mcq4AI8B0XqIkFbdy7scMnnmKuAR2hWOtmS451G5Y6OiMZwl7YxTmV', 1, '', '', '', '', '', ''),
(81, 'A', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '621', 'SMA SWASTA AR RASYID ASAHAN - Sumatera Utara', 'A', '', '', 'a@a', 'LGPFFM', 'MJGVt1', 0, 'JWr4shn37ZMAhT2Zkizyu3leJgHKWYTGVlKnD8rL7dmp7oprHZ0c2lqLC8vz', 0, '', '', '', '', '', ''),
(82, 'Alviena Iswanto', '', '', 'Sepuluh', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '936', 'SMA SANTA MARIA SURABAYA', '087852523303', '', '', 'clara.alviena@gmail.com', 'OTKOSI', 'nLSAJn', 1, 'KB1tgkJgia3ZcllnS6MqO6NAZokmiF13g3xwnhNGrQFEb1148NuWUixTHRgZ', 1, '', '', '', '', '', ''),
(83, 'Hansen Eko Putro', 'Timothy Jordan', 'Michael Gunawan', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'TIDAK', 'TIDAK', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '356', 'SMAK St.Louis 1', '085770316796', '6281230599972', '081230599972', 'hansen.ekoputro@gmail.com', 'UMTWMM', 'QYLHMR', 1, 'tP3872lNYVIBjnDta7d1AGRzszmjVSYoH1wP4SD2NlE6JiATpOU0uMzWlWgh', 1, '356_anggota1.jpg', '356_anggota2.jpg', '356_anggota3.jpg', '356_anggota1.jpg', '356_anggota2.jpg', '356_anggota3.jpg'),
(87, 'Grace Kelly Sunaryo', 'Archer Edward Hermanua', 'Yosafat Christian Wijaya', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'Tidak', 'Tidak ada', 'Tidak ada', '', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '249', 'SMA KRISTEN PETRA 1 - Jawa Timur', '085931353589', '081233829979', '082234694190', 'gracekellycen@yahoo.com.sg', 'BRJWZM', 'mhwBHN', 1, 'xVnZOlKhEFW7govjsbFkb7GtEhbrvCn3yL2n6MEKsASJZo3rzILLQseuJpWf', 1, '', '', '', '', '', ''),
(88, 'Keren Remaliah Karsa', 'Nanda Rika Christanty', 'Rosa Virginia Cahyaningtyas', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '750', 'SMA KRISTEN PETRA 4 - Jawa Timur', '+62 895 354 796 704', '089696723169', '082131360071', 'hailamerkeren@gmail.com', 'ODEATM', '96yiDf', 1, 'lw1hWcHFtHjJ3uYo16z2R4cYCuBRe8XAFYSBbzhEhAok4mJ6tj9lomj0RUS5', 1, '750_anggota1.jpg', '750_anggota2.jpg', '750_anggota3.jpg', '750_anggota1.jpg', '750_anggota2.jpg', '750_anggota3.jpg'),
(89, 'Timothy Daves Hosea', 'Davis Kurniawan', 'Shawn Elmo Samudra', 'DuaBelas', 'Sebelas', 'DuaBelas', 2, 2, 2, 'Amoxciillin , Sulfa', '-', '-', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '827', 'SMA Kr GLORIA 1', '089668332560', '083831535999', '082113037363', 'Timothyhosea.7@gmail.com', 'BCENQT', 'zGcmLP', 1, 'T1oaQ4MCaPtsP8CtbIEHmpg2CDNrt1bm2AwTEivO8ZhX8UrkC61Zvi18WPzp', 1, '827_anggota1.jpg', '827_anggota2.jpg', '827_anggota3.jpg', '827_anggota1.jpg', '827_anggota2.jpg', '827_anggota3.jpg'),
(90, 'nicky christian paparang', 'vania laksaputra', 'putri gracetanita yong angelia', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '957', 'sma kristen petra 5', '087853624090', '0895364070049', '082383668282', 'nickychristian7727@yahoo.com', 'FWCBFX', '2PGLNj', 1, 'W71G5zi07fl6GogUB70FjVH8BsWVnwGkEH0KgjKnz6tfuK95S9Kb5skGUgCi', 1, '957_anggota1.jpg', '957_anggota2.jpg', '957_anggota3.jpg', '957_anggota1.jpg', '957_anggota2.jpg', '957_anggota3.jpg'),
(91, 'Lieshell Novella', 'Adeola Angela Retanubun', 'Marvella Lingadi', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Daging kambing', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '149', 'SMA SANTA MARIA - Jawa Timur', '081277687818', '082233662080', '082132124275', 'lieshelnovela@gmail.com', 'RTOJCM', 'aW8YCa', 1, 'd1FUvaiwi0pkkxg2c0Cz76J3eIGpU5k7702Dak9tkzNE64Hj5kTcqCgFlX5f', 1, '149_anggota1.jpg', '149_anggota2.jpg', '149_anggota3.jpg', '149_anggota1.jpg', '149_anggota2.jpg', '149_anggota3.jpg'),
(92, 'Nerissa Arviana Dara Ninggar', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '075', 'SMA SANTA MARIA - Jawa Timur', '+628970751992', '', '', 'nerissa.vira01@gmail.com', 'HZLOUG', 'DzAzX4', 0, 'WqK5D6rGinKw994Aq41ZQiCpScmXh9uezfkcmMSE9CbjMgTdkVdadPz61W4j', 1, '', '', '', '', '', ''),
(93, 'Sonny Gondo Hudaya', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '709', 'SMA KRISTEN PETRA 1 - Jawa Timur', '081333001821', '', '', 'sonnygondo7@gmail.com', 'MZEBDO', 'GR5CdA', 1, 'YHsofLqUgzTJ5TLDoKOrTm8KrKX2uYYtFqSVbjQsTJbYDXC1HqtBMBleljhQ', 1, '', '', '', '', '', ''),
(94, 'Jeriel', '', '', '', '', '', 0, 0, 0, 'Tidak', 'Tidak', 'Tidak', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '739', 'SMA Kristen Gloria 1 Surabaya', '081357037037', '', '0818397717', 'jerielisaiah@gmail.com', 'CWUQWJ', 'uiJdPO', 1, 'WNewKxHAlrXeqVAX2rJGj6aBQnrE6KA2xPzingTIHQW8Lx5OYPuiWEUM2lq8', 1, '739_anggota1.jpg', '739_anggota2.jpg', '739_anggota3.jpg', '739_anggota1.jpg', '739_anggota2.jpg', '739_anggota3.jpg'),
(95, 'Aldo Setyawan jaya', 'Haris Pratama', 'Evelyn Tjitrodjojo', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'tidak', 'tidak', 'Alergi terhadap makanan laut (seafood)', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '710', 'SMAK Frateran Surabaya', '083831133007', '0895343021772', '81330909498', 'aldosetyawan@gmail.com', 'JFAHRN', '6MMSXp', 1, 'BJDqNEpSCQnDDzehVqkc6RjTDbQ3T03vJGVxllpYbMBOmQ6igquniNgVZ7ZT', 1, '710_anggota1.jpg', '710_anggota2.jpg', '710_anggota3.jpg', '710_anggota1.jpg', '710_anggota2.jpg', '710_anggota3.jpg'),
(96, 'Stella Nathania ', '', '', 'Sepuluh', 'Sebelas', 'Sebelas', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '325', 'SMA KRISTEN PETRA 1 - Jawa Timur', '082119672092', '', '', 'stellanathania1@gmail.com', 'KQUUCF', '8jNOiU', 1, '0BJZQ7d2MrRurOSTcvH0BT9UGXdBjpbj1UjR2wUOXLipAajNG0NhTWcAUpbd', 1, '325_anggota1.jpg', '325_anggota2.jpg', '325_anggota3.jpg', '325_anggota1.jpg', '325_anggota2.jpg', '325_anggota3.jpg'),
(97, 'Stella Nathania', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '310', 'SMA KRISTEN PETRA 1 - Jawa Timur', '082119672092', '', '', 'stellaanathania@yahoo.com', 'DKZEBT', 'JJp2Hk', 0, '9ScSBf3FpuIeuQcBYAB8EmSnMV46gb6p3jiFymkYQ3clUoXSZy1DVT1HP6O5', 0, '', '', '', '', '', ''),
(98, 'Frishella Gunawan', 'Michael Adisasmita', 'Andreas Wisnu Warsito', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, '-', '-', '-', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '201', 'SMAK St Louis 1 Surabaya', '082332101426', '08113132501', '085755258002', 'frishella.gunawan@gmail.com', 'VTSLWS', 'LXsMjQ', 1, 'KcHFFrOcplVARlUB9EkBx1mut9NjlTv66cLMEAY4WUENfyppdJ0KLnffw2zS', 1, '201_anggota1.jpg', '201_anggota2.jpg', '201_anggota3.jpg', '201_anggota1.jpg', '201_anggota2.jpg', '201_anggota3.jpg'),
(99, 'Kenneth Austin', 'Julius Edric Wijaya', 'Susanti', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 1, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '905', 'SMAK St. Louis 1 Surabaya', '083831201984', '0811315007', '081358434340', 'kenneth_austin17@rocketmail.com', 'QFYKBZ', 'cfYQ6B', 1, '9wLxeNcoQZhMnAaOfnKEsIQHHGOiEPNNmzkBmxZdwh0TSaH7ysM0bDISkwbY', 1, '905_anggota1.jpg', '905_anggota2.jpg', '905_anggota3.jpg', '905_anggota1.jpg', '905_anggota2.jpg', '905_anggota3.jpg'),
(100, 'Jefferson Ivan Halim', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '786', 'SMA Kristen Gloria 1 ', '085236959900', '', '', 'jeffersonivanhalim@gmail.com', 'WBCSHZ', 'udiIlW', 1, 'tuJCQYvVFAsIezRqrVxadwErPnMM9CpD69fX7KTMlluzVl0mhyxu4cVUzIGJ', 1, '', '', '', '', '', ''),
(101, 'Ricky Ciputra', 'Mary Vanessa', 'Laurensia Nadja Widjaja', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'udang', 'Makanan Instant', 'Soto', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '752', 'SMAK ST LOUIS 1 SURABAYA', '082245431168', '081934695679', '081542351982', 'ciputra.ricky@gmail.com', 'CRRZOD', 'fXPTna', 1, '1C4xkD1HFERuHJRcQwSO5132QXq1G0jICofX1hFHVwbDf3P6zIUFJXHAV8BB', 1, '752_anggota1.jpg', '752_anggota2.jpg', '', '752_anggota1.jpg', '752_anggota2.jpg', '752_anggota3.jpg'),
(102, 'Felicia Amanda Setiabudi', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '422', 'SMA KATOLIK ST. LOUIS 1', '082132632626', '', '', 'feliciaamandasetiabudi@gmail.com', 'CVVAKS', '0fWOSl', 0, 'knEqpfSrgJd3lwUFBJuC9cDp8rhuQvMbSqBiGtKXdX0yuVd5FIIOUld3MvxD', 0, '', '', '', '', '', ''),
(103, 'Desi Magaretta', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '493', 'SMA SANTA MARIA - SURABAYA', '085103599100', '', '', 'desimaga.1227@gmail.com', 'MBLGSS', '0DMdbB', 1, 'NtdmRAB8pv51eVXXp0pGI7GmUTxwotUbW8xOI9X7E29SY6Qo6f4PnLciFKO3', 1, '', '', '', '', '', ''),
(104, 'Kevin Bodhikumaro Sutanto', 'Nathania Ann', 'Richelle Limsky', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 1, 'Alergi udang', 'tidak ada', 'tidak ada', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '564', 'SMA SANTA MARIA SURABAYA - Jawa Timur', '082244457974', '083849590818', '0895606221216', 'kevin.sutanto9@gmail.com', 'MGOLTP', 'o2gbH1', 1, 'nDCApYQoPfNk4br9GGH7riwtzIbAjQZGtChTA7hqm5LrgdAXUi4lABPak0KE', 1, '564_anggota1.jpg', '564_anggota2.jpg', '564_anggota3.jpg', '564_anggota1.jpg', '564_anggota2.jpg', '564_anggota3.jpg'),
(105, 'Hans Nicholas', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '299', 'sma santa maria surabaya', '081216209069', '', '', 'hans11nicholas@gmail.com', 'IBSVFB', 'WLu24G', 1, '50n8sr43lQIrmgSSzWAo9ClU7oZNFYIKY6TrxYuTOckbtc329DrigNdnbcbQ', 1, '', '', '', '', '', ''),
(106, 'Winfield Hansen Yapto', 'Nathania Michelle', 'Evan', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, '-', '-', '-', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '627', 'SMA Petra 1', '089690492832', '082142215096', '', 'yaptowinfield@gmail.com', 'RPKMTQ', 'ucGEIk', 1, 'pAMB5yialC6ImEVsjwRMhvo2tjgFYton3bZ9Jhj5TqOg4JJofAbx6zzATQfR', 1, '627_anggota1.jpg', '627_anggota2.jpg', '627_anggota3.jpg', '627_anggota1.jpg', '627_anggota2.jpg', '627_anggota3.jpg'),
(107, 'Nataniel albert angstein', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '996', 'Sma petra 1', '085102967373', '', '', 'nataniel241299@gmail.com', 'BPNIAA', 'fLqAng', 1, 'iNkH0IZU02a0YqiktRPMSQ2DgC1xyZ9RNtzOczIdBTdzjvTMnJzfzBTQdVoM', 1, '996_anggota1.jpg', '', '', '', '', ''),
(109, 'Giselle Nadja Ilenka', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '361', 'SMA Katolik St Louis 1 - Jawa Timur', '082131965041', '', '', 'fabyrist@gmail.com', 'GOYTMG', 'Z7yDBl', 1, 'Dm1UM3tglSMjQoxxD6umBKmIiZkEn0L1nMW9Pqqbicu9B2He9cBKWXteXNTk', 1, '361_anggota1.jpg', '361_anggota2.jpg', '361_anggota3.jpg', '361_anggota1.jpg', '361_anggota2.jpg', '361_anggota3.jpg'),
(110, 'Jonathan Wilson', '', '', 'Sepuluh', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '120', 'SMAK St Louis 1', '087855995200', '', '', 'Jonathanwilson2001@rocketmail.com', 'WJXKXY', 'mpCYcg', 1, 'or6oYJaMcSv060UJThEhazEAcCNtJ4v7wCwvmGhyyMyFNtoHK2YUCCvPfijY', 1, '', '', '', '', '', ''),
(111, 'Diane Hadibrata', '', '', 'Sepuluh', 'Sepuluh', 'Sepuluh', 0, 0, 0, '', '', '', 'Tidak ada', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '960', 'SMA KRISTEN PETRA 1 - Jawa Timur', '089531524171', '', '', 'dianehadibrata@yahoo.com', 'NKRRQG', '139Yxg', 1, 'elJu03BJzNTXXFSAbggRTwTWFSuWN902vJwvN7emU8jSNctZsJRlgKiWDMTq', 1, '', '', '', '', '', ''),
(112, 'albert ', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '719', 'sma kr petra 1 , surabaya', '081333888612', '', '', 'josephinejjkkll@gmail.com', 'WURJAR', 'cIP2o9', 1, '3SuzlL1tlzWQaCWqsI6OJL0sB3QKL0FOS9odVqHg0E7ag3BILHxvtyX4BOPm', 1, '', '', '', '', '', ''),
(113, 'Kevin Felixiano Sanjata', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '104', 'SMA KRISTEN PETRA 1 - Jawa Timur', '0818309845', '', '', 'kevinfelixiano0708@gmail.com', 'HZCBJF', '6l90uI', 1, 'n98D9A3l80XloVHhcHof3BmoKmTtxTSV31ycBCxJDu41pMjCuIRxkdW5APz8', 1, '', '', '', '', '', ''),
(114, 'Jovita Chandra', 'Samuel Christian', 'Bryan bernard', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '224', 'SMA GLORIA - Jawa Timur', '082277909090', '082131140880', '081234578738', 'jovitachans75@gmail.com', 'EGTEWA', 'rGKWuC', 1, 'U5FthS9Ghz4knCnaNDVZuXqaInFkCWJw1p0jiaZzJ3U7GhhuUctpaUAShfcT', 1, '224_anggota1.jpg', '224_anggota2.jpg', '224_anggota3.jpg', '224_anggota1.jpg', '224_anggota2.jpg', '224_anggota3.jpg'),
(115, 'Luist Yansen', 'Elvaretta Aurellie', 'Olivia Michaela', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '934', 'SMA Katolik Frateran Surabaya', '08115216876', '087855873518', '081234235276', 'yansenluist0@gmail.com', 'JNYLII', 'QfEvSg', 1, 'Me5RbGQFxbN26QfcdL9E5uvk90cpXyRKNXBZErEbCsdJjtWwe5bjAGEJHR9F', 1, '934_anggota1.jpg', '934_anggota2.jpg', '934_anggota3.jpg', '934_anggota1.jpg', '934_anggota2.jpg', '934_anggota3.jpg'),
(116, 'Vanessa Liem', 'Admilla Wahyu ', 'Renata', 'Sebelas', 'Sebelas', 'Sepuluh', 2, 2, 2, '', 'Aspirin', '', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '522', 'SMA KR CITA HATI - Jawa Timur', '081336261442', '081232809617', '087888666076', 'vnessa1312@gmail.com', 'QGADLJ', 'wBQ2km', 1, '79rZP934sWbhscKyOZzVqVr2Mtn84FmbONbEXeJqbVHD7rcVrLRSHjVtNiCR', 1, '', '', '', '', '', ''),
(117, 'a', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '439', 'SMA KRISTEN PETRA - Jawa Timur', '08123456789', '', '', 'asdfgh@gmail.com', 'KJJLHL', 'u3pm08', 0, '7T1sxL2cmJbiMJha7CyzVZ3ZpqZyTmt1gvtOgw0CgbV2Ucc2PLBKLFJa5JIZ', 0, '', '', '', '', '', ''),
(118, 'Renaldy Kevin', 'Hans Nicholas', 'Antonius Hartono', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '331', 'SMA Santa Maria Surabaya', '081332334655', '081703020149', '089627811047', 'alansanmar@gmail.com', 'ACCQVK', 'ITDlXQ', 1, 'ctwumScA2Hf8Js5GuaM70bPTPbQFwaOJDkd0dpAf6PnQitwNEjUEuJxkUo0r', 1, '', '', '', '', '', ''),
(122, 'William', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '136', 'SMA SANTA MARIA - Jawa Timur', '08113322106', '', '', 'williamanggono@gmail.com', 'JUNAAE', 'ASuOCd', 1, 'oyeNxvZT9tpyMNMfayKbzULrpA4CLofaWuXt0Xn9qMIdzusK3cVD7H5wh993', 1, '', '', '', '', '', ''),
(119, 'Dionysius Jeff Sebastian', 'Reynaldi Kenny Cahyono', 'James Nicholas Suharjono', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '015', 'SMAK St.Louis 1 Surabaya', '08155208558', '85108229388', '081803191359', 'jeff.sebastian@yahoo.com', 'MWTLQS', 'rOR1Y0', 1, 'xiXuLYOfU6dhU9rbEkV6YDxNvzLwCS2aa0EWYtbTApavyCGcWBjVfRILquh3', 1, '', '', '', '', '', ''),
(120, 'Jaysen', '', '', 'DuaBelas', 'DuaBelas', 'DuaBelas', 0, 0, 0, '', '', '', 'Tidak ada', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '801', 'SMA kr petra 5 ', '08994270035', '', '', 'Jaysenerfino@gmail.com', 'KZJIFR', 'iF5AS8', 1, 'g8e6xWm8RtfvBnOZNNl9Z0rE61wfSyp8HEffBCnt5CZG0NGOA1Xz1oe8qKnj', 1, '', '', '', '', '', ''),
(121, 'Michael christopher', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '876', 'SMA KRISTEN PETRA 5 - Jawa Timur', '08968300490', '', '', 'michaelchristopher9625@gmail.com', 'QXRBZN', 'kd0Rcc', 1, 'sxwWViBjVo2lxoAl1v24txpHygTK9CpCaVy6e9p9ysv6R5sSAuX32mKACDlM', 1, '', '', '', '', '', ''),
(123, 'Gregory Aaron', 'Laura Bernadette Putri', 'Herman Josef Ekaputra Jundika', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '029', 'SMA SANTA MARIA - Jawa Timur', '087851455202', '089639791920', '08993837960', 'gregoryaaron24680@gmail.com', 'KOSWIU', 'Ndwg1g', 1, 'XBwUftIuljuhjffwFNex71lkxBmODBMAcjvsMeX7yrpRGEnlsBTACfVaRhYu', 1, '', '', '', '', '', ''),
(126, 'Kennan Trevyn Z', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '103', 'SMA SANTA MARIA SURABAYA', '081230553386', '', '', 'kennantrevynzenjaya@gmail.com', 'JEOBOV', '9lDvcy', 0, 'dpR3zhQhkjmahJZd59M9ICj3fOgNYlbbK2fkk6CEpYPGIOUOXGXGihKy50l4', 0, '', '', '', '', '', ''),
(124, 'Bernadus Marcello Agieus', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '800', 'SMAK Untung Suropati Sidoarjo', '081231654149', '', '', 'marcelloagieus@gmail.com', 'VEFAZK', 'kIdYzR', 1, '1oqnRqUODflwSHg1vqewpER7RQGJFLPHaf52GZQjfcQ7T68pwnVV1N3TDJCj', 1, '', '', '', '', '', ''),
(125, 'Bernardus Marcello Agieus', 'Yohanes ricky wijaya', 'Jose Barta Esanov Siregar', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Udang', '-', '-', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '086', 'SMA KATOLIK UNTUNG SUROPATI SIDOARJO - Jawa Timur', '081231654149', '08113442323', '082141141339', 'leksvaaaa@gmail.com', 'DJATIB', 'dwuovA', 1, 'mjrHdKqPRDVFowoGELGp5KCBf17Q1XsohT5vDwku9gayMyfrjWQpGs1Wt8Nv', 1, '', '', '', '', '', ''),
(127, 'Ricardo Yuwono', 'Kennan Trevyn Z', 'Jeremy Kusardi', 'Sebelas', 'Sebelas', 'Sebelas', 2, 1, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '098', 'SMA SANTA MARIA SURABAYA', '081358810000', '081230553386', '081217794493', 'rido_yuwono@yahoo.com', 'COJSNX', '6HapHI', 1, 'SrqA1yMVsQWouuZYAxlj3hqLsQsaVpZNQqoSYbNr2JQwePuPnQ9r7zcAqFKm', 1, '', '', '', '', '', ''),
(128, 'Ferdi Putra Rahardjo', 'Lindawati Wijoyo', 'Jesslyn Ivana Wibisono', 'Sepuluh', 'Sepuluh', 'Sepuluh', 2, 2, 2, '', 'Telur', '', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '645', 'SMA Santa Maria Surabaya', '082221891119', '083857664151', '0811330695', 'yacobusferdi@yahoo.co.id', 'NQZGIQ', 'EzEl2M', 1, 'xs2ZHa7exFWHHT0aqC8GWMlvrHxdnZNUrQU801nyHkfpdgzETIlPuGkVnR9L', 1, '', '', '', '', '', ''),
(129, 'Hengga Wijayanata IBE', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '155', 'SMA KRISTEN PETRA 2 SURABAYA - Jawa Timur', '087855130740', '', '', 'fontelapis@gmail.com', 'HDAFVX', 'y1XObB', 1, 'NXzVWhrdJo2sKMlV4tXhiSQjQFurM0XzXwvUOW7xla06Wl11PZj7R9rIPW9B', 1, '', '', '', '', '', ''),
(130, 'Angela Laurencia', '', '', 'DuaBelas', 'DuaBelas', 'DuaBelas', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '077', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '082244847999', '', '', 'angelaurencia@gmail.com', 'MMXYMQ', '1jwCiw', 1, 'rf4KKmDvRGwvbUTvnmolR3mbAYt61cRtsVdchRI9xeEJ9yfwUESMHeXhdqof', 1, '', '', '', '', '', ''),
(134, 'Steven Vincent Supratiknyo', 'Syerra Stevanny Liyadi', 'Ivan Sunyoto', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '399', 'SMA SANTA MARIA - Jawa Timu', '082211056437', '082188881828', '085399997298', 'stevenvincent2000@gmail.com', 'WPRUBS', 'ZLaF4s', 1, 'UXQdG7fqIhpfGeE76hMSltS6Eyb7R66M4XZK5faOwA4cOJkV06OmAHtefEl7', 1, '', '', '', '', '', ''),
(131, 'stefen zulkarnain', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '241', 'SMA KR PETRA 1', '081331560182', '', '', 'stefenzulkarnain@yahoo.com', 'GSSFLL', 'RaKeKx', 1, 'PEXAln30fPcebflpu36HuyyFjNpQ4S2Uw0vRnzSDo5SAke0Ph7wMF5rZSRQX', 1, '', '', '', '', '', ''),
(132, 'Amelia Audrey', '', '', 'Sepuluh', 'Sebelas', 'Sebelas', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '489', 'SMA KRISTEN PETRA 4 - Jawa Timur', '081235809461', '', '', 'amelia.audreygunawan@gmail.com', 'RUTUIR', 'zMlOgb', 1, '6ogNuORHGAfC9HKvmwf8SVIEgwVs0Kp79GVDuNlanANwhx1E4hMXcvBt1wV2', 1, '', '', '', '', '', ''),
(133, 'bernard sebastian sidharta', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '469', 'SMA gloria 1 surabaya', '082233073888', '', '', 'jeniferludy@gmail.com', 'LKMVAH', 'ZwXTTI', 1, '6BngBLoAxC1mCyRUZhnOiFNODHIl9mifYGwzrUaYwbl8Kd2JuqyM6mBJ3j5d', 1, '', '', '', '', '', ''),
(135, 'Sarah Sophia', 'Jessie Felicia', 'Marianne Priscilla', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '633', 'Sma Kr. Petra 1', '081216326444', '081333000824', '082231411997', 'sarahnano93@gmail.com', 'EOHROJ', '5o2jbP', 1, 'HmtDFpdSXaNQedcWoLe4jA9HDsTt5dOMAhqgGE9EOXu3aGZzseDMPNusfnVl', 1, '', '', '', '', '', ''),
(136, 'Jonathan Sasmito', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '511', 'SMA KRISTEN GLORIA 1 SURABAYA', '+6281331080770', '', '', 'jonathansasmito@gmail.com', 'YLVHAP', 'OxAzbT', 1, '8m8LhGb3Snuo1HQVEiLVilKQVj2PSbZ1y8NPOYSGlm5n4WiIe3ExoonkIq9A', 1, '', '', '', '', '', ''),
(137, 'Nouchka', 'Cindy Angela S.', 'Agus Perdana', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Nanas', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '728', 'SMA PETRA 5, Surabaya', '081230924721', '081252990097', '081217074462', 'Nouchkaindra@gmail.com', 'DTXYDS', 'SZvYxr', 1, 'qVa3hDz7e7QYaazcij6fsN7sj60KTdzk9KnqoXyC5oBfzasRuy7XmfpFlpqf', 1, '', '', '', '', '', ''),
(138, 'crystalia diamonda', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '321', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '08980608000', '', '', 'crystalia_diamonda@yahoo.com', 'LOXKRR', 'sAyREx', 0, 'H3wqhS4MxNrfLyHUZgPpVwRw4JbC3oJKsgbK9fwH3YWPxEKwUzWQ5NnawyMA', 1, '', '', '', '', '', ''),
(139, 'crystalia diamonda', 'calvin hakinen salim', 'leonard wijaya', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'tidak', 'tidak', 'tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 1, 1, 1, 0, '714', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '08980608000', '08997988652', '087855476895', 'crystaliadiamonda@gmail.com', 'PDKYJN', '6Y7QrQ', 1, 'ToR0AxEL3NrpPjg0UnpRKVYI2OaTxikrGcshK62NUtcKMsLHQbzA6yj9nu2U', 1, '', '', '', '', '', ''),
(140, 'Joshua earvin', '', '', 'DuaBelas', 'DuaBelas', 'DuaBelas', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '628', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '087709533266', '', '', 'joshuaearvin858@gmail.com', 'KBMAWC', 'f0fDkE', 1, 'o8rgd6VFqDNU3camBdQC4WS4cwpRbDGAM7QZeLEEpszsFJPgXFT2CL7OhxGt', 1, '', '', '', '', '', ''),
(141, 'Shandy', 'Juventius Andrew', 'Liliana Wijaya', 'DuaBelas', 'DuaBelas', 'DuaBelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '173', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '081216253078', '081357318212', '082132329690', 'tjoa.shandy@yahoo.com', 'FGONCO', 'tk1IRb', 1, 'rviVY2tlnclcEVER8VqE1Y7l0QdbXWvosOkqQOLd16qG25yb0YP2XWoXMB9K', 1, '', '', '', '', '', ''),
(142, 'Melissa', 'Juventia Limanto', 'Jevon Triliun Setiawan', 'DuaBelas', 'DuaBelas', 'Sebelas', 2, 2, 2, '-', '-', '-', 'maag', 'Tidak ada', 'Tidak ada', 1, 2, 2, 0, '465', 'SMAK ST. LOUIS 1 - Surabaya', '081216882678', '089689925867', '087854711558', 'melissa.otaku@gmail.com', 'EIERHZ', 'JdKBMC', 1, 'wevo11I3Q8l37WBa8WlOdkxq59dHCTd88IwaKfeAnAEvwgGEd1sqm0Rr958M', 1, '', '', '', '', '', ''),
(143, 'Juventius Andrew', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '085', 'SMA KRISTEN GLORIA 2 SURABAYA - Jawa Timur', '081357318212', '', '', 'juventiusandrw@yahoo.co.id', 'CMKMGZ', '3R7vMn', 0, 'm4izPI4frWoybUNtZgSuwSyo03an42Tr7b0WU5cl2ATduGHuXAZtsxRtB2QG', 1, '', '', '', '', '', ''),
(144, 'kartika wijaya', '', '', 'DuaBelas', 'DuaBelas', 'DuaBelas', 0, 0, 0, '', '', '', '', 'Tidak ada', 'Tidak ada', 0, 0, 0, 0, '595', 'SMA Kristen Gloria 1', '0817389538', '', '', 'tika.lee5@gmail.com', 'HIMQMU', 'RxgEfB', 1, 'KsjDa77zAqJttUF0cYuPtiG0ylgaUeHFG0iR7qqIRack5RlhPP7j7NkG9AR3', 1, '', '', '', '', '', ''),
(145, 'SAMUEL', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '057', 'SMA SANTA MARIA SURABAYA', '085853833707', '', '', 'napogistra@gmail.com', 'XLFOXD', 'HUsRRo', 1, '7Ort3peb7wdNc4dgXEsxzAeu25lraSehHFLK5ZVcv8ZIddYbSrIs1WW42ivc', 1, '', '', '', '', '', ''),
(146, 'Michele Juanita Lukman', 'Cynthia Michellita', 'Valentinus Ezra Japola', 'Sebelas', 'Sebelas', 'Sebelas', 2, 2, 2, 'Tidak', 'Tidak', 'Tidak', 'Tidak ada', 'Tidak ada', 'Tidak ada', 2, 2, 2, 0, '793', 'SMA SANTA MARIA Surabaya', '082232362847', '081556447777', '085205637088', 'michelejuanita@gmail.com', 'AOONGU', 'XtXuHQ', 1, 'F6wiqt8hfC2dKzNdAmL6Dx47vyOliOHYVdgmHpDX1GaMgXZQkLXXi25OAUaT', 1, '', '', '', '', '', ''),
(147, 'andy', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, '502', 'SMA IT SWASTA DAARUSSAKINAH - Sumatera Utara', 'dvgd', '', '', 'm25416027@john.petra.ac.id', 'HOEBNE', 'EfRg4J', 0, 'gxE4IjBp7AcEhreVJN5Njgrz7HDQhH9xeNCW6dmeNzT407ZKV5xflZOtHskY', 0, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
