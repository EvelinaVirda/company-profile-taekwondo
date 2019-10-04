-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2017 at 05:17 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taekwondo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '5159d7149979243e6d76021426e0f3c9', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `alamat`
--

CREATE TABLE `alamat` (
  `kd_alamat` int(10) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `judul_artikel` varchar(100) DEFAULT NULL,
  `isi_artikel` text,
  `photo_artikel` varchar(250) DEFAULT NULL,
  `tgl_artikel` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `photo_artikel`, `tgl_artikel`) VALUES
(48, '1500 Taekwondoin Ramaikan Kukkiwon Cup', '<p><strong>Liputan6.com, Jakarta -</strong> Sekitar 1500 taekwondoin bakal mengikuti turnamen taekwondo bertajuk Kukkiwon Cup edisi pertama yang berlangsung di lapangan tenis Indoor Gelora Bung Karno pada 21-22 November 2015. Turnamen ini digelar atas kerjasama Universal Taekwondo Indonesia Profesional (UTI Pro) dan pusat Taekwondo Dunia Kukkiwon.<br />\r\n<br />\r\nTurnamen ini akan mempertandingkan kategori Pra Junior, Junior dan Senior.Ketua Panitia pelaksana Ganis Hartono mengatakan, event Kukkiwon Cup pertama ini merupakan terobosan baru dalam upaya menjaring bibit bibit taekwondo handal dari berbagai daerah di Indonesia.<br />\r\n<br />\r\n&quot;Ini merupakan kerja sama antara UTI Pro dan Kukkiwon yang sudah dirintis sejak lama. Turnamen ini akan memperebutkan trophy dari Kukkiwon,&quot; kata Ganis seperti rilis yang diterima media, Kamis (19/11/2015).<br />\r\n<br />\r\nPresiden Kukkiwon, Jeong Man Soon&nbsp; dipastikan akan hadir langsung menyaksikan event yang berlangsung selama dua hari itu. &quot;Mudah-mudahan kerja sama dengan Pusat Taekwondo Dunia KUkkiwon ini bisa terus berlanjut di tahun tahun mendatang,&quot; ujarnya.<br />\r\n<br />\r\nTurnamen ini juga akan dimeriahkan tim Demo dari Pusat Taekwondo Dunia&nbsp; itu. Sebanyak Dua Tim Demo dari Kukkiwon dipastikan akan&nbsp; melakukan atraksi memukau disela sela acara pembukaan yang berlangsung 21 November. (Def/Rco)</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'asd.JPG', '2017-06-09 02:58:05'),
(59, 'Kemenpora Dukung Turnamen Taekwondo Menhan Cup 2017', '<p><strong>Liputan6.com, Jakarta -</strong> Sesmenpora Gatot S. Dewa Broto menyambut positif digelarnya Turnamen Terbuka&nbsp;<a href=\"http://bola.liputan6.com/read/2613878/atlet-cantik-pon-ini-geluti-taekwondo-gara-gara-digoda-cowok\" title=\"Taekwondo\">Taekwondo</a> Tingkat Nasional Menhan Cup 2017. Hal itu disampaikan Gatot saat menghadiri konfrensi pers di Media Center, Kemenpora, Jakarta, Jumat (24/3). Menurutnya saat ini prestasi menjadi sesuatu yang dirindukan oleh masyarakat termasuk Tekwondo.</p>\r\n\r\n<p>Kejuaraan Coki Tanjung mengatakan bahwa, prestasi hanya akan lahir dari adanya keseriusan dalam melakukan pembinaan olahraga sejak usia dini, dan komitmen untuk menyelenggarakan kompetisi dan turnamen secara berjenjang di semua level.</p>\r\n\r\n<p>&quot;<a href=\"http://bola.liputan6.com/read/2613878/atlet-cantik-pon-ini-geluti-taekwondo-gara-gara-digoda-cowok\" title=\"Taekwondo\">Taekwondo</a> perkembangannya cukup menggembirakan karena keberadaannya makin digemari oleh anak-anak sejak usia dini,&quot; tambahnya.<br />\r\n&nbsp;<br />\r\nSementara itu Direktur Jenderal Strategi Pertahanan Kemenham Mayjen TNI Yoedhi Swastanto menyampaikan, bahwa terselenggaranya Turnamen Taekwondo Menhan Cup 2017 yang pertama ini tidak terlepas dari pemikiran bersama Kemenham dengan Pengurus Besar Taekwondo Indonesia (PBTI) untuk membangun karakter generasi muda, hal ini sesuai dengan apa yang dicanangkan oleh Presiden Joko Widodo tentang Revolusi Mental. Revolusi Mental ini diterjemahkan oleh Kemenham sebagai kesadaran Bela Negara yang merupakan hak dan kewajiban sebagai seluruh warga Negara.<br />\r\n&nbsp;<br />\r\n&ldquo;Kami berharap dengan adanya event ini akan tercipta suatu kebersamaan pada generasi muda Indonesia untuk membentuk kelompok yang solid. Tentu yang tidak kalah penting adalah untuk membangun sportivitas, memupuk rasa bangga dan cinta tanah air dan membangkitkan semangat bela Negara. ini merupaka modal awal kita untuk mencptakan kestabilan Negara,&ldquo; ujar Yoedhi.<br />\r\n&nbsp;<br />\r\n&quot;Kami juga mengapresiasi kepada Kemenpora yang sudah memfasilitasi&nbsp; event&nbsp; ini dengan harapan dapat meningkatkan kualitas dan juga akan muncul atlet-atlet nasional yang bisa berbicara di tingkat internasional. Selain itu, melalui event ini akan meningkatkan hubungan bilateral antara Indonesia dan Korea Selatan melalui olahraga taekwondo,&quot; lanjutnya.<br />\r\n&nbsp;<br />\r\nSementara, Ketua Umum Pengurus Propinsi Taekwondo Indonesia DKi Jakarta (Pengprov TI DKI Jakarta) Brigjen TNI Ivan Ronald&nbsp; mengatakan, dalam rangka pembinaan&nbsp; taekwondo Indonesia kita menyelenggarakan&nbsp; Turnamen Terbuka Taekwondo Tingkat Nasional &ldquo;Menhan Cup&rdquo;. &ldquo;Cabang olahraga taekwondo ini masuk dalam cabang olahraga multieven baik itu di Sea Games, Asian Games dan Olimpiade. Saya berharap melalui ajang ini akan lahir taekwondo-taekwondo Indonesia yang berprestasi di tingkat internasional,&rdquo; ujarnya.<br />\r\n&nbsp;<br />\r\nMenurut Kabid Binpres TI DKI, sekaligus ketua pelaksana kejuaraan Coki Tanjung, tujuan dilaksanakannya event Menhan Cup ini adalah sebagai salah satu program Pengprov TI DKI dalam rangka ikut berkontribusi menciptakan dan meningkatkan atmosfir pembinaan, pengembangan dan prestasi <a href=\"http://www.liputan6.com/tag/taekwondo\">taekwondo</a> Indonesia. Turnamen dengan tema Taekwondo Mematri Semangat Bela Negara akan diselenggarakan pada 31 Maret-2 April di GOR POPKI, Cibubur, Jakarta dan diikuti lebih dari 2500 peserta yang berasal dari 18 Provinsi di Indonesia, juga peserta dari luar negeri yakni, Malaysia dan Thailand.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'asdf.PNG', '2017-06-09 01:05:46'),
(60, 'Taekwondo Mengubah Hidup Bocah Penyandang Autisme', '<p><strong>Liputan6.com, Jakarta</strong> Ethan Fineshriber kini naik ke kelas 7 dan memiliki banyak teman serta penggemar. Bocah 11 tahun asal Sandy, Utah, America Serikat ini didiagnosis dengan autisme saat berumur 3. autisme membuat Ethan sulit berkomunikasi. Tapi olahraga bela diri taekwondo membantu Ethan jadi lebih percaya diri dan bisa bersosialisasi.</p>\r\n\r\n<p>&quot;Dia tidak punya minat berinteraksi dengan teman-temannya dan senang menyendiri di kamarnya membuat sesuatu,&quot; ujar Mara Fineshriber, ibu Ethan pada <em>Today</em>. &quot;Sebagai ibunya, bisa Anda bayangkan betapa hal itu menyakitkan untukku,&quot; lanjutnya.</p>\r\n\r\n<p>Mara memutuskan mendaftarkan Ethan pada kelas bela diri American Taekwondo Association setelah melihat Ethan tidak memiliki teman saat diundang ke sebuah pesta ulang tahun empat tahun lalu. Di kelas taekwondo itu lah Ethan bertransformasi.</p>\r\n\r\n<p>Jika awalnya Ethan marah pada sang ibu karena memaksanya keluar dari kamar, Ethan malah kemudian menikmati berlatih taekwondo. Keseharian Ethan berlatih taekwondo seringkali diabadikan di akun Instagram. Dia memiliki lebih dari 4000 pengikut. Penggemar setianya senang menonton tutorial taekwondo dan trik-trik yang dibuat Ethan.</p>\r\n\r\n<p>&quot;Waktu aku mulai berlatih taekwondo, aku tidak hanya jadi lebih atletis, tapi juga membantuku mendapatkan teman jadi lebih bersosialisasi,&quot; ucap Ethan, dilansir dari laman <em>Today</em>, Sabtu (23/7/2016).</p>\r\n\r\n<p>Anak-anak di kelas taekwondo juga mulai sering menghampiri Ethan, meminta diajari beberapa teknik taekwondo. Etan kini mulai menyadari minatnya mengajar taekwondo. Minat itu juga disalurkannya melaui akun Instagram, di mana dia memberi tutorial <em>step-by-step</em> berlatih taekwondo.</p>\r\n\r\n<p>autisme tidak menghambat Ethan&nbsp;mencetak prestasi. Dia menjadi juara pertama turnamen taekwondo nasional pada Maret 2013. Instruktur taekwondo Ethan bahkan berencana menyertakannya dalam kejuaraan dunia.</p>\r\n\r\n<p>Merasa hidupnya telah berubah jauh lebih baik, Ethan mengungkapkan terima kasihnya pada instruktur taekwondonya.</p>\r\n\r\n<p>&quot;Mereka mengajariku pelajaran kehidupan seperti bagaimana bersikap manis pada orang dan menghormati orang lain agar mereka mau menjadi temanku. Dan aku sangat berterima kasih pada mereka atas hal itu,&quot; ujarnya</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'qwert.PNG', '2017-06-09 00:53:18'),
(61, '21 Negara Perebutkan Indonesian Open Taekwondo Championship', '<p><strong>Liputan6.com, Pekanbaru -</strong> 21 negara dari tiga benua resmi memperebutkan Indonesian Open Taekwondo Championship (IOTC) Tahun 2015 di Pekanbaru, Riau. Kegiatan bertaraf internasional ini dilangsungkan dari tanggal 3 sampai 6 September 2015 di Gelanggang Remaja, Jalan Jenderal Sudirman, Pekanbaru.<br />\r\n<br />\r\nWalikota Pekanbaru, Firdaus, yang membuka kegiatan ini mengucapkan selamat datang kepada seluruh atlet dan official dari utusan 21 negara yang mengikuti turnamen. &quot;Selamat datang di Kota Pekanbaru. Saya ucapkan selamat bertanding dan jaga sportivitas,&quot; kata Firdaus.<br />\r\n<br />\r\nSelain itu, Walikota juga menyampaikan ucapan terima kasih kepada seluruh masyarakat, stakeholder dan juga panitia pelaksana yang telah bekerja keras menyukseskan event berskala internasional tersebut. Dia berharap Pekanbaru menjadi kota yang sukses menggelar ajang Indonesian Open Taekwondo Championship. &nbsp;<br />\r\n<br />\r\n&quot;Harapan kita, semoga event internasional yang perdana digelar di Kota Pekanbaru ini bisa terlaksana dengan lancar dan sukses,&quot; tutur Firdaus.<br />\r\n<br />\r\nLebih lanjut, Walikota meminta agar olahraga Taekwondo ini bisa terus berkembang di Riau, khususnya di Kota Pekanbaru. Firdaus mengatakan, olahraga taekwondo bisa kian populer di Indonesia dan menjadi penyumbang medali di ajang-ajang internasional.<br />\r\n<br />\r\n&quot;Kita juga berharap agar masyarakat di Pekanbaru bisa mengambil nilai-nilai semangat olahraga ini dan mampu meningkatkan persaudaraan di antara peserta dan negara,&quot; jelasnya.<br />\r\n<br />\r\nDi tempat yang sama, Ketua Panitia Pelaksana Sondia Warman mengatakan, 21 negara itu di antaranya berasal dari Arab Saudi, China, Korea, Jepang, Pakistan, Australia, China Taipei, Malaysia, dan Singapura.<br />\r\n<br />\r\n&quot;Acara ini akan berlangsung terhitung 3-6 September 2015. Pertandingan sendiri dimulai dari pukul 08.00-17.00 WIB,&quot; ungkap Sondia, yang kini juga menjabat sebagai Wakil Ketua DPRD Kota Pekanbaru dari Partai Amanat Nasional (PAN) ini.<br />\r\n<br />\r\nEvent berskala internasional yang pertama kali digelar di Kota Pekanbaru ini dihadiri oleh ribuan penonton. Peresmian sendiri ditandai dengan penekanan tombol sirine oleh Walikota Pekanbaru, Presiden Taekwondo Asia dan Presiden Taekwondo Indonesia. Setelah pembukaan, perwakilan masing-masing negara langsung unjung kebolehan dari berbagai kelas. (Win/Ary)</p>\r\n', 'asasa.PNG', '2017-06-09 01:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `atlet`
--

CREATE TABLE `atlet` (
  `nis` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `sabuk` varchar(15) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atlet`
--

INSERT INTO `atlet` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `sekolah`, `sabuk`, `foto`) VALUES
('961401', 'Alvi Fadillah', 'laki-laki', '085773389861', 'graha prima baru blok t3a no 23a tambun selatan, bekasi', 'Universitas Gunadarma', 'biru', '04062017095142empty.png'),
('961402', 'Wisnhu Putro Hutomo', 'laki-laki', '089601144103', 'graha prima blok e1 no 19 tambun selatan, bekasi', 'SMAN 3 Tambun Selatan ', 'biru', '04062017095210empty.png'),
('961403', 'Muhammad Nurhaji', 'laki-laki', '08561561921', 'Taman Raya Tambun Selatan, Bekasi', 'Universitas Darma Persada', 'merah', '04062017095204empty.png'),
('961501', 'M. Gilang Ramadhan', 'laki-laki', '', 'Tambun Square Tambun Selatan, Bekasi', 'Institute Kesenian Jakarta', 'Kuning', '07062017161757empty.png'),
('971301', 'Muhammad Iqbal', 'laki-laki', '082297021894', 'Perum, Papan mas blok 13 no 4 tambun selatan', 'Universitas Islam 45', 'Hitam', '28052017093507empty.png');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `judul`, `photo`) VALUES
(139, 'Pelantikan Kenaikan Tingkat di Bogor', '3.jpg'),
(140, 'Pelantikan Kenaikan Tingkat di Bogor', '4.jpg'),
(141, 'Pelantikan Kenaikan Tingkat di Bogor', '5.jpg'),
(142, 'Kejuaraan Taekwondo Tingkat SMA/SMK 2012', '6.jpg'),
(143, 'Pelantikan Kenaikan Tingkat di Bogor', '1.jpg'),
(144, 'Kejuaraan Taekwondo Tiger CUP Karawang ', '8.jpg'),
(145, 'Kejuaraan Taekwondo Tingkat SMA/SMK 2012', '155486.jpg'),
(148, 'Kejuaraan Taekwondo Tingkat SMA/SMK 2012', '306193.jpg'),
(149, 'Panitia Pelantikan Kenaikan Tingkat di Bogor', '577462.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `kd_prestasi` int(11) NOT NULL,
  `prestasi` varchar(150) NOT NULL,
  `nis` varchar(11) CHARACTER SET latin1 NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`kd_prestasi`, `prestasi`, `nis`, `nama`, `tanggal`) VALUES
(57, 'Kejuaraan Taekwondo Tingkat Nasional Pelajar dan Mahasiswa Bekasi CUP 2016', '971301', 'Muhammad Iqbal', '2016-11-05'),
(64, 'juara 3 (perunggu) kategori Kyorugi under 45kg tingkat SMA/SMK', '961401', 'Alvi Fadillah', '2012-05-06'),
(65, 'juara 3 (perunggu) kategori Kyorugi under 50kg tingkat SMA/SMK', '961402', 'Wisnhu Putro Hutomo', '2012-05-06'),
(67, 'juara 3 (perunggu) kategori Kyorugi under 60kg tingkat SMA/SMK', '961403', 'Muhammad Nurhaji', '2012-05-06'),
(68, 'Junior Putra kategori Kyorugi peserta under 45kg Se-Jawa Barat ', '961401', 'Alvi Fadillah', '2012-09-22'),
(69, 'Junior Putra kategori Kyorugi peserta under 50kg Se-Jawa Barat ', '961402', 'Wisnhu Putro Hutomo', '2012-09-22'),
(70, 'Juara 1 (Emas) Junior Putra kategori Kyorugi peserta under 70kg Se-Jawa Barat', '961403', 'Muhammad Nurhaji', '2012-09-22'),
(78, 'juara 1 (Emas) kategori Kyorugi under 45kg tingkat SMA/SMK', '961501', 'Muhammad Gilang Ramadhan', '2012-05-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`kd_alamat`),
  ADD KEY `fk_alamat` (`nis`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `atlet`
--
ALTER TABLE `atlet`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`kd_prestasi`),
  ADD KEY `nis` (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `alamat`
--
ALTER TABLE `alamat`
  MODIFY `kd_alamat` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=150;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `kd_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alamat`
--
ALTER TABLE `alamat`
  ADD CONSTRAINT `fk_alamat` FOREIGN KEY (`nis`) REFERENCES `atlet` (`nis`);

--
-- Constraints for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD CONSTRAINT `fk_prestasi` FOREIGN KEY (`nis`) REFERENCES `atlet` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
