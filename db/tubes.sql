-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 11:35 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tanggal` date NOT NULL,
  `lokasi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `gambar`, `judul`, `isi`, `tanggal`, `lokasi`) VALUES
(7, 'event6.jpg', 'Weekend Property', 'Kami memiliki begitu banyak permintaan untuk ini sehingga kami memutuskan untuk mengadakan acara untuk bertemu dengan beberapa dari Anda secara langsung!\r\n\r\nUntuk Sumber Properti Potensial:\r\n\r\nMengapa mencari sumber properti?\r\n\r\nBagaimana cara mencari properti?\r\n\r\nApa yang perlu Anda lakukan untuk menghasilkan uang dari sumber?\r\n\r\nStrategi peretasan pertumbuhan untuk pendapatan pasif\r\n\r\n... ditambah lebih banyak lagi!\r\n\r\nApa ESENSI yang perlu Anda ketahui SEBELUM Anda memulai\r\n\r\n... ditambah lebih banyak lagi!', '2019-01-01', 'Bandung Barat'),
(8, 'even4.jpg', 'Mandiri Expo', 'Event penawaran Properti Developer Rekanan Mandiri KPR khususnya di wilayah Jabodetabek yang diselenggarakan oleh pihak PT. Debindomulti Adhiswasti dimana Bank Mandiri menjadi Official Bank Sponsor pada event ini. Mandiri Properti Expo 2018 diselenggarakan di Jakarta Convention Center tanggal 05 Mei s.d 13 Mei 2018. Suku Bunga Spesial Mandiri KPR\r\nSelama event berlangsung, berlaku suku bunga 5,55% p.a. eff fixed 2 tahun pertama dan 6,55% p.a. eff fixed 3 tahun selanjutnya. Selama event berlangsung, nasabah berkesempatan mendapatkan benefit instant/ same day approval, yaitu proses pemutusan kredit pada hari yang sama untuk aplikasi masuk s.d pukul 13.00,  info lebih lanjut hubungi mandiri call 14000.', '2019-01-01', 'Buah Batu'),
(9, 'even5.jpg', 'Sharia Property', 'Pameran SHARIA PROPERTY & BANKING Expo 2019, 27-30 Juni 2019, di Jakarta Convention Center (JCC). Penyelenggaraan pameran ini didukung oleh Kementerian Pariwisata, Kementerian Agama, dan Badan Penyelenggara Jaminan Produk Halal (BPJPH). Pameran ini diselenggarakan bersamaan dengan pameran Gebyar Wisata dan Budaya Nusantara Ke-18, dan pameran Agro Food Expo Ke-17 yang juga diselenggarakan PT. Wahyu Promo Citra.\r\n\r\nIndonesia adalah negara yang memiliki populasi Muslim terbesar di seluruh dunia. Data sensus penduduk tahun 2010 menunjukkan ada sekitar 87,18% atau 207 juta jiwa dan diperkirakan dengan jumlah tersebut, 13% muslim di seluruh dunia tinggal di Indonesia. Tidak heran jika pemain bisnis syariah dunia menjadikan Indonesia sebagai target pasar penting penetrasi pasarnya. Diantaranya sektor properti dan perbankan syariah yang terus menunjukkan peranannya dalam pembangunan Indonesia seiring dengan tren halal sebagai gaya hidup semakin luas di kalangan generasi muda dan professional muslim Indonesia. Terlebih di sektor di sektor properti dan perbankan syariah ini dirasakan lebih aman dibandingkan properti dan perbankan konvensional.\r\n\r\nDalam rangka lebih memperkenalkan properti dan perbankan syariah kepada masyarakat sekaligus menjadi wahana promosi yang efektif bagi properti dan perbankan syariah, akan diselenggarakan SHARIA PROPERTY & BANKING Expo 2019 yang merupakan bagian dari pameran HALAL INDONESIA EXPO 2019. Event ini akan dikunjungi masyarakat dari kalangan majlis taklim, komunitas mahasiswa peduli halal, komunitas masyarakat tanpa riba, komunitas hijabers, dan komunitas kajian Islam, serta mahasiswa dan masyarakat umum. Ditargekan, pameran ini akan dikunjungi lebih dari 15.000 orang selama 4 hari pameran dengan kegiatan promosi yang dilakukan melalui media cetak dan elektronik, penyebaran flier/brosur, media social, blast email, dll.\r\n\r\nInfo dan kontak :\r\n\r\nPT. Wahyu Promo Citra\r\nCP: Endang Romyanti\r\nTelp. 0838 1514 2765 \r\nE: endangromyanti@gmail.com', '2019-01-01', 'Jakarta Barat'),
(11, 'download.jpg', 'Indobuildtech Expo', 'Didirikan pada tahun 2003, Indobuildtech Jakarta adalah pameran berjalan terbesar dan terpanjang di Indonesia yang didedikasikan untuk industri arsitektur, bangunan, desain dan dekorasi. Menyambut lebih dari 20.000 pembeli industri B2B setiap tahun, acara ini diakui sebagai platform utama untuk memasuki pasar yang paling berkembang di Asia Tenggara.\r\n\r\nPameran Produk:\r\n\r\nBahan & Peralatan Bangunan\r\nInterior, Desain & Dekorasi\r\nCat & Pelapis\r\nTekstil & Bahan Hias\r\nKamar Mandi & Sanitasi\r\nLantai keramik\r\nPerangkat Keras & Alat\r\nKayu, Veneer & Lantai\r\nGerbang & Otomasi\r\nPemanasan & Ventilasi\r\nDapatkan manfaat berharga bagi diri Anda sendiri di pameran bangunan dan arsitektur ini, seperti:\r\n\r\nTransportasi Gratis ke ICE, BSD oleh UBER (untuk 1000 pendaftar online pertama)\r\nParkir Gratis\r\nWifi gratis\r\nShuttle Bus dari titik-titik tertentu di Jakarta\r\nPameran ini juga menawarkan Program Bisnis, Forum, Klinik Pencocokan Bisnis dan Arsitek yang komprehensif.\r\n\r\nDaftarkan diri Anda sekarang dengan mengunjungi www.indobuildtech.com dan nikmati pameran bangunan dan arsitektur lengkap!\r\n\r\n—————–\r\n\r\nInfo dan kontak:\r\n\r\nMuthia +62 857 1183 1383 / muthia.debindo@gmail.com\r\nwww.indobuildtech.com', '2017-04-03', 'Cimahi'),
(12, 'Kitchen.jpg', 'Kitchen Indonesia', 'Dapur dan Kamar Mandi Indonesia adalah satu-satunya pameran dagang di Asia Tenggara yang dikhususkan untuk industri dapur dan kamar mandi. Edisi pertamanya telah menarik lebih dari 12.000 pengunjung dari 38 negara.\r\n\r\nPameran ini akan menghadirkan spektrum luas dari teknologi terbaru, peralatan, bahan bangunan dan aksesori untuk arsitektur rumah, konstruksi, penyelesaian interior dan proyek desain.\r\n\r\nPembangun, produsen, pemasok, distributor, pengecer, dan penyedia layanan Perabot Dapur, Peralatan dan Aksesori Dapur, Peralatan Listrik Dapur, Wastafel, Keran dan Perlengkapan, Peralatan & Aksesori Kamar Mandi, Dekorasi Dapur dan Kamar Mandi, Kontrol dan Sistem Instalasi Rumah Pintar, Green Home Teknologi dan Solusi akan memenuhi lantai pameran dengan serangkaian produk unik yang paling trendi dan terbaru di industri.\r\n\r\nPameran ini akan menjadi kesempatan baik bagi pengunjung dan pembeli perdagangan internasional dan regional yang mencari peluang di Indonesia dan Asia.\r\n\r\nAudiens: Pengunjung Profesional dan Masyarakat Umum\r\nProduk yang Ditawarkan: Perabot Dapur, Peralatan dan Aksesori Dapur, Peralatan Listrik Dapur, Wastafel, Keran dan Perlengkapan, Peralatan & Aksesori Kamar Mandi, Dekorasi Dapur dan Kamar Mandi, Sistem Kontrol dan Instalasi Rumah Pintar, Teknologi dan Solusi Rumah Hijau, Mandi, Toilet, Shower Peralatan\r\nPenyelenggara yang Adil:\r\n\r\nPT Wahana Kemalaniaga Makmur Komp. Perkantoran Graha Kencana Blok CH-CI Jl. Raya Pejuangan No. 88 Jakarta 11530\r\nTel: +6221 53660804\r\n\r\nFaks: +6221 5325887/90 info@kitchenbathroomindonesia.com www.wakeni.com\r\n\r\nSitus web: www.kitchenbathroomindonesia.com', '2019-01-01', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`) VALUES
(10, 'Luxury', 'Didirikan pada tahun 1997 memasuki barang saniter di pasar Indonesia. Sejak itu, PT. Luxury telah berkembang dari kekuatan ke kekuatan dan memperluas jangkauan produknya untuk menjadi pemimpin industri di Indonesia dalam barang saniter.\r\n\r\nInvestasi berkelanjutan dalam penelitian dan pengembangan, didukung dengan pengujian dan sistem kontrol kualitas tanpa kompromi, PT. PT. Luxury telah diakui dan dipercaya oleh pelanggan dan pengembang real estat untuk memasok perlengkapan dan aksesori kamar mandi ke banyak jaringan hotel, proyek perumahan dan komersial di Indonesia.\r\n\r\nSetiap produk menjadi sintesis nyata dari kualitas, desain, dan gaya, untuk menyesuaikan gaya hidup modern dan gaya.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(155) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`) VALUES
(1, 'Sanitary', 'Produk yang berkaitan dengan hal-hal yang berhubungan dengan penyediaan fasilitas kebersihan yang sehat'),
(2, 'Fitting', 'Peralatan yang berhubungan dengan aksesoris '),
(3, 'Shower', 'Sanitary ware ini paling banyak digunakan oleh masyarakat umum. Selain praktis, shower lebih hemat air, tidak menghabiskan tempat, dan mudah dirawat. Shower terbagi menjadi dua jenis, yaitu fix shower head dan hand shower. Ukuran dan modelnya bervariasi, ');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE IF NOT EXISTS `kontak` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `alamat` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `mobile`, `email`) VALUES
(1, 'Universita Jenderal Achmad Yani Fakultas Sains Dan Informatika Jurusan Informatika', '089740065487', 'admin@superadmin.com');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `namaB` varchar(155) NOT NULL,
  `gambar` varchar(155) NOT NULL,
  `kategori` text NOT NULL,
  `harga` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `stok` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `namaB`, `gambar`, `kategori`, `harga`, `keterangan`, `stok`) VALUES
(18, 'Westafle', 'westafle.jpg', 'Sanitary', 200000, 'Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.\r\nbagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.Ini produk bagus.', 30),
(19, 'Toilet Duduk', 'wc.jpg', 'Sanitary', 30000, 'Kloset atau toilet memiliki fungsi utama sebagai tempat pembuangan air besar. Jenisnya ada dua, kloset duduk dan jongkok. Dalam perkembangannya, kloset diciptakan dengan bentuk yang beragam. Ada tiga tipe kloset jongkok yang beredar di pasaran, yakni U-Trap, S-Trap, dan Back Suppley; sedangkan model kloset duduk yang paling banyak digunakan adalah monoblok, duoblok, dan wall hung.', 30),
(20, 'Filter Air', 'filter.png', 'Sanitary', 5000000, 'Filter keran merupakan produk luxury yang dipasang ke pipa air yang ada dirumah supaya air yang keluar dari keran dapat diminum secara langsung tanpa perlu direbus lagi, tanpa menunggu. Filter air keran dapat menyaring air sumur dan air PDAM selama tekanan cukup dan air sudah jernih.', 1),
(21, 'Fitting Gantung', '39-single-default.jpg', 'Fitting', 30000, 'FITTING adalah suatu alat listrik untuk menghubungi lampu dengan kawat-kawat kabel (wire) pada jaringan listrik secara aman. Dengan menggunakan fitting peralatan listrik kita seperti lampu akan lebih aman bila digunakan dan menjadi rapi. Berikut ini akan diberikan penjelasan lebih lanjut mengenaimanfaat dan jenis fitting. ', 10),
(22, 'Staker', 'alat-alat-listrik-8.jpg', 'Fitting', 12000, 'Steker adalah istilah salah satu alat listrik yang biasa disebut colokan listrik.\r\n\r\nFungsinya untuk menghantarkan listrik ke stop kontak.\r\n\r\nBeberapa jenis steker yang sering ditemui yaitu:\r\n\r\nSteker Bengkok\r\nSteker Adapter\r\nSteker T\r\nSteker Arde', 2),
(23, 'Shower', 'wwwdotkamarmandikudotcom_american-standard-refit-active-shower-only-faucet_full01.jpg', 'Shower', 80000, 'Untuk mengalirkan air', 30);

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE IF NOT EXISTS `sosmed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ig` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `ig`, `fb`, `twitter`) VALUES
(1, 'https://www.instagram.com/devifajarrr/', 'https://www.facebook.com/KnightProtec', 'https://twitter.com/AhsinBuchori');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `namaL` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `telp` varchar(12) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaL`, `username`, `password`, `email`, `jk`, `telp`) VALUES
('Ahsin Fauzi', 'Ahsin', '35ef8e3cae98e27875babc0777ad1b28', 'ahsin@gmail.com', 'Laki-Laki', '085886907353'),
('Angga Fantiya Hermawan', 'Angga', '8479c86c7afcb56631104f5ce5d6de62', 'anggafantiya@Gmail.com', 'Laki-Laki', '089640065487'),
('Devi Fajar Wati', 'Devi', 'f5c2db1f19bdde37e740e86b70d0534f', 'devifajarr@gmail.com', 'Perempuan', '085777772306'),
('Panji', 'Panji', 'd6b16b990a41b83f81a58d38ad7265f1', 'panji@gmail.com', 'Laki-Laki', '081809121331');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
