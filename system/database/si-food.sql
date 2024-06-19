-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2024 at 02:12 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-food`
--

-- --------------------------------------------------------

--
-- Table structure for table `dftr_menu`
--

CREATE TABLE `dftr_menu` (
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(120) NOT NULL,
  `detail` varchar(300) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dftr_menu`
--

INSERT INTO `dftr_menu` (`id_menu`, `nm_menu`, `detail`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Bakso Urat ', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Bakso besar(urat), dan Bakso kecil ', 'bakso', 30000, 11, 'baksourat.png'),
(2, 'Ayam Bakar spesial', 'Nasi, Ayam Bakar, Sambal, Lalapan + Es jeruk', 'ayam', 35000, 4, 'ayambakarspesial.png'),
(4, 'Bakso Ikan', 'Mie kuning, Bihun, Sawi, Tauge, daun seledri, Bakso ikan', 'Bakso', 25000, 14, 'baksoikan.png'),
(5, 'Bakso Babat', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Bakso Babat (Babat/Perut Sapi', 'Bakso', 17000, 15, 'baksobabat.png'),
(6, 'Bakso Beranak', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Bakso Besar/ Beranak(telur puyuh & bakso kecil) bakso kecil\r\n', 'Bakso', 20000, 15, 'baksoberanak.png'),
(7, 'Bakso Mercon', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Bakso Mercon(isi cabe), bakso kecil', 'Bakso', 23000, 15, 'baksomercon.png'),
(8, 'Bakso Rusuk', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Rusuk Sapi, Bakso Kecil', 'Bakso', 17000, 15, 'baksorusuk.png'),
(9, 'Bakso Telur', 'Mie kuning, Bihun, Sawi,Tauge, Daun Seledri, Bakso Besar(isi telur), Bakso Kecil', 'Bakso', 17000, 15, 'baksotelur.png'),
(10, 'Ayam Asam Pedas', 'Nasi, Ayam Asam Pedas', 'Ayam', 24000, 15, 'ayamasampedas.png'),
(11, 'Ayam Bakar', 'Nasi, Ayam Bakar, Sambal, Lalapan', 'Ayam', 22000, 15, 'ayambakar.png'),
(12, 'Ayam Crispy', 'Nasi, Ayam Crispy, Sambal, Lalapan', 'Ayam', 21000, 15, 'ayamcrispy.png'),
(13, 'Ayam Goreng', 'Nasi, Ayam Goreng, Sambal, Lalapan', 'Ayam', 22000, 15, 'ayamgoreng.png'),
(14, 'Ayam Pop', 'Nasi, Ayam pop, Timun, Sambal, Tomat, Ubi', 'Ayam', 20000, 15, 'ayampop.png'),
(15, 'Mie Ayam', 'Mie, Daging Ayam, Sawi Hijau, Seledri, Pangsit', 'Mie', 15000, 15, 'mieayam.png'),
(16, 'Mie ayam spesial', 'Mie, Daging Ayam, Bakso, Sawi Hijau, Seledri, Pangsit', 'Mie', 25000, 15, 'mieayambakso.png'),
(17, 'Mie Pangsit ', 'Mie pangsit, Adonan Daging Cincang, Tauge (kecambah kacang hijau), Daun bawang, Bawang goreng', 'Mie', 14000, 15, 'miepangsit.png'),
(18, 'Mietiaw', 'Mietiaw, tauge, Daun bawang, Potongan daging ayam', 'Mie', 15000, 15, 'mietiawgoreng.png'),
(19, 'Mietiaw Rebus', '', 'Mie', 15000, 15, 'mietiawrebus.png'),
(20, 'Mietiaw Goreng Telur', '', 'Mie', 23000, 15, 'miewtiawgorengtelur.png'),
(21, 'Air Mineral', '', 'Minuman', 3000, 15, 'mineral.png'),
(22, 'Air Tahu', '', 'Minuman', 5000, 15, 'airtahu.png'),
(23, 'Teh Es', '', 'Minuman', 5000, 15, 'esteh.png'),
(24, 'Es Jeruk Besar', '', 'Minuman', 5000, 15, 'esjeruk.png'),
(25, 'Es Jeruk Nipis', '', 'Minuman', 4000, 15, 'esjeruknipis.png'),
(26, 'Es Cendol ', '', 'Minuman', 7000, 15, 'escendol.png'),
(27, 'Pangsit', '', 'Pelengkap', 2000, 14, 'pangsit.png'),
(28, 'Rempeyek Kacang ', '', 'Pelengkap', 3000, 15, 'rempeyekkacang.png'),
(30, 'Kerupuk Ikan', '', 'Pelengkap', 2000, 15, 'kerupukikan.png'),
(31, 'Kerupuk Emping', '', 'Pelengkap', 2000, 15, 'kerupukemping.png'),
(32, 'Kerupuk Bandung', '', 'Pelengkap', 2000, 20, 'kerupukblek1.png'),
(33, 'Keripik Tempe', '', 'Pelengkap', 3000, 20, 'keripiktempe1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `no_telp`) VALUES
(12, 'Rizki Syahwal Ludiansyah', 'Kp.jawa tengah', '2024-06-12 15:59:54', '0898999181217'),
(13, '', '', '2024-06-12 19:06:49', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `nm_menu` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(20) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_menu`, `nm_menu`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 1, 'Bakso Urat isi telur', 1, 30000, ''),
(2, 1, 3, 'Mie Ayam', 1, 17000, ''),
(3, 2, 1, 'Bakso Urat isi telur', 1, 30000, ''),
(4, 2, 3, 'Mie Ayam', 1, 17000, ''),
(5, 3, 1, 'Bakso Urat isi telur', 1, 30000, ''),
(6, 3, 3, 'Mie Ayam', 1, 17000, ''),
(7, 4, 1, 'Bakso Urat isi telur', 1, 30000, ''),
(8, 4, 3, 'Mie Ayam', 1, 17000, ''),
(9, 5, 1, 'Bakso Urat isi telur', 1, 30000, ''),
(10, 5, 3, 'Mie Ayam', 1, 17000, ''),
(11, 6, 3, 'Mie Ayam', 2, 17000, ''),
(12, 8, 28, 'Rempeyek Kacang ', 1, 3000, ''),
(13, 8, 4, 'Bakso Ikan', 3, 25000, ''),
(14, 8, 2, 'Ayam Bakar spesial', 1, 25000, ''),
(15, 9, 1, 'Bakso Urat ', 1, 30000, ''),
(16, 10, 27, 'Pangsit', 1, 2000, ''),
(17, 10, 1, 'Bakso Urat ', 1, 30000, ''),
(18, 10, 4, 'Bakso Ikan', 1, 25000, ''),
(19, 11, 1, 'Bakso Urat ', 1, 30000, ''),
(20, 12, 1, 'Bakso Urat ', 1, 30000, ''),
(21, 13, 1, 'Bakso Urat ', 1, 30000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_menu` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE dftr_menu SET stok = stok-NEW.jumlah
    WHERE id_menu = NEW.id_menu;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `Nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', '123', 1),
(2, 'user', 'user', '123', 2),
(3, 'wal', 'wall', '1234', 2),
(4, 'wal admin', 'waladmin', '123', 2),
(5, 'wal Admin', 'welladmin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dftr_menu`
--
ALTER TABLE `dftr_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dftr_menu`
--
ALTER TABLE `dftr_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
