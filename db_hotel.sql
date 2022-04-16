-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 01:49 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_kamar`
--

CREATE TABLE `tbl_jenis_kamar` (
  `id_jenis` int(11) NOT NULL,
  `kamar` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_jenis_kamar`
--

INSERT INTO `tbl_jenis_kamar` (`id_jenis`, `kamar`, `keterangan`, `harga`, `foto`) VALUES
(1, 'Standard', 'Jenis kamar standard room adalah tipe kamar hotel yang paling dasar di hotel. Biasanya, kamar tipe ini dibanderol dengan harga yang relatif murah. Fasilitas yang ditawarkan pun standar seperti kasur ukuran king size atau dua queen size.', 500, 'standard01.jpg'),
(2, 'Superior', 'Superior room merupakan jenis kamar hotel yang lebih baik dari sisi fasilitas hingga ukuran yang diberikan dibandingkan standar room. Perbedaan superior room dengan standar room mungkin tidak terlalu terlihat. Berbeda dengan superior dan standar room, deluxe room di desain lebih menarik dan lebih lengkap fasilitasnya.', 700, 'superior01.jpg'),
(3, 'Deluxe', 'Kamar ini tentu memiliki kamar yang lebih besar. Tersedia pilihan kasur yang bisa kamu pilih, double bed atau twin bed. Biasanya, dari segi interior kamar ini terkesan lebih mewah.', 900, 'deluxe01.jpg'),
(4, 'Junior Suite Room', 'Junior Suite Room hotel yang memiliki fasilitas seperti tempat dudu atau ruang tamu yang terpisah dengan ruang tidur.', 1, 'junior01.jpg'),
(5, 'Suite Room', 'Suite Room merupakan tipe kamar hotel dengan fasilitas yang sangat lengkap.', 900, 'suite01.jpg'),
(6, 'Presidential Suite', 'Presidential Suite adalah tipe kamar yang memiliki fasilitas lengkap dan disediakan untuk tamu yang menyukai privasi.', 850, 'presidential01.jpg'),
(7, 'Single Room', 'Single Room adalah jenis kamar hotel yang umum dimiliki setiap hotel,biasanya hanya terdiri dari satu ruangan yang berisi hanya 1 temapat tidur,sofa,dan kamar mandi.', 350, 'single01.jpg'),
(8, 'Twin room', 'Twin room memiliki dua buah tempat tidur yang biasanya terpisah dan masing masing berukuran single', 550, 'twin01.jpg'),
(9, 'Double Room', 'Double Room memiliki tempat tidur berukuran besar yang muat untuk 2 orang', 800, 'double01.jpg'),
(10, 'family Room/Triple Room', 'family Room/Triple Room hotel ini cocok untuk keluarga dengan satu tempat tidur berukuran besar untuk 2 orang dan 1 tempat tidur berukuran kecil atau single.', 950, 'family01.jpg'),
(11, 'connecting Room', 'connecting Room adalah dua kamar yang memiliki pintu \'spesial\' di tengah ruangan yang bisa menghubungkan kamar kamu dengan kamar hotel lain yang ada di samping mu', 1200, 'connecting01.jpg'),
(12, 'Murphy Room', 'Murphy Room adalah tipe kamar hotel yang menyediakan sofa bed dikamar.', 700, 'murphy01.jpg'),
(13, 'Accessible Room/Disabled Room', 'Accessible Room/Disabled Room ini tersedia untuk para tamu yang memiki keterbatasan,adanya tipe kamar ini diwajibkan oleh hukum,untuk menghindari diskriminasi', 700, 'accessible01.jpg'),
(14, 'Smoking/Non Smoking Room', 'Smoking/Non Smoking Room tersedia di beberapa lantai,tidak semata mata manajemen hotel melengkapinya tanpa melirik sisi keuntungan', 500, 'smoking01.jpg'),
(15, 'Cabana Room', 'Cabana Room kamar yang menghadap ke panati atau kolam renang', 400, 'cabana01.jpg'),
(16, 'Junior Suite Room', 'Junior Suite Room hotel yang memiliki fasilitas seperti tempat dudu atau ruang tamu yang terpisah dengan ruang tidur.', 1, 'junior01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kamar`
--

CREATE TABLE `tbl_kamar` (
  `id_kamar` int(11) NOT NULL,
  `nomor_kamar` varchar(100) NOT NULL,
  `id_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kamar`
--

INSERT INTO `tbl_kamar` (`id_kamar`, `nomor_kamar`, `id_jenis`) VALUES
(1, '001', 1),
(2, '002', 2),
(3, '003', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_konsumen`
--

CREATE TABLE `tbl_konsumen` (
  `id_konsumen` int(11) NOT NULL,
  `nama_depan` varchar(50) NOT NULL,
  `nama_tengah` varchar(50) NOT NULL,
  `nama_belakang` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `negara` varchar(100) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_konsumen`
--

INSERT INTO `tbl_konsumen` (`id_konsumen`, `nama_depan`, `nama_tengah`, `nama_belakang`, `alamat`, `kota`, `provinsi`, `negara`, `no_identitas`, `no_telp`, `email`) VALUES
(1, 'Mr', 'Moch.', 'Ilham', 'Cikanyere', 'Tasikmalaya', 'Jawa Barat', 'Indonesia', '123456', '089666444447', 'mochilham@gmail.com'),
(2, 'Miss', 'Della', 'Azzahra', 'Mangkubumi', 'Tasikmalaya', 'Jawa Barat', 'Indonesia', '23456', '098576423586', 'dellaazzahra@gmail.com'),
(3, 'Muhammad', 'Ivan', 'Kurniawan', 'Tawang ', 'Tasikmalaya', 'Jawa Barat', 'Indonesia', '1234567\r\n', '098765434586', 'ivankurniawan@gmail.com'),
(28, 'ms', 'nurhalipah', '-', 'bantar', 'tasikmalaya', '5', 'indonesia', '12345689', '0895876954587', 'sasa@gmail.com'),
(29, 'ms', 'yuni', '-', 'jkdhfk', 'tasikmalaya', '17', 'indonesia', '12345689', '0895876954587', 'ghaitsaz843@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_provinsi`
--

CREATE TABLE `tbl_provinsi` (
  `id_provinsi` int(5) NOT NULL,
  `nama_provinsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_provinsi`
--

INSERT INTO `tbl_provinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(1, 'Bali'),
(2, 'Papua'),
(3, 'Aceh'),
(4, 'Jawa Timur'),
(5, 'Jawa Barat'),
(6, 'Lampung'),
(7, 'Jawa Tengah'),
(8, 'Nusa Tenggara Timur'),
(9, 'Riau'),
(10, 'Banten'),
(11, 'Papua Barat'),
(12, 'Kalimantan Timur'),
(13, 'Sumatera Selatan '),
(14, 'Daerah Istimewa Yogyakarta'),
(15, 'Sumatera Utara'),
(16, 'Sulawesi Selatan'),
(17, 'Sumatera Barat'),
(18, 'DKI Jakarta'),
(19, 'Kalimantan Barat '),
(20, 'Maluku'),
(21, 'Sulawesi Utara'),
(22, 'Kepulauan Riau'),
(23, 'Kepulauan Bangka Belitung'),
(24, 'Kalimantan Selatan'),
(25, 'Kalimantan Utara'),
(26, 'Kalimantan Tengah'),
(27, 'Nusa Tenggara Barat'),
(28, 'Sulawesi Tenggara'),
(29, 'Sulawesi Tengah'),
(30, 'Maluku Utara '),
(31, 'Sulawesi Barat'),
(32, 'Jambi '),
(33, 'Bengkulu'),
(34, 'Gorontalo');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama_tamu` varchar(100) NOT NULL,
  `tanggal_cek_in` date NOT NULL,
  `tanggal_cek_out` date NOT NULL,
  `lama_sewa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id_transaksi`, `nama_tamu`, `tanggal_cek_in`, `tanggal_cek_out`, `lama_sewa`) VALUES
(1, 'ira', '2022-03-09', '2022-03-03', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('client','admin') NOT NULL,
  `aktivasi` enum('0','1') NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `hak_akses`, `aktivasi`, `no_hp`) VALUES
(1, 'risa n', '827ccb0eea8a706c4c34a16891f84e7b', 'client', '1', '5555'),
(2, 'deby m', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '1', '08956952365');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jenis_kamar`
--
ALTER TABLE `tbl_jenis_kamar`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_kamar`
--
ALTER TABLE `tbl_kamar`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_konsumen`
--
ALTER TABLE `tbl_konsumen`
  MODIFY `id_konsumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_provinsi`
--
ALTER TABLE `tbl_provinsi`
  MODIFY `id_provinsi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
