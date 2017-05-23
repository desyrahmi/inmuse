-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:25 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inmuse`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `review` longtext COLLATE utf8_unicode_ci NOT NULL,
  `release` date NOT NULL,
  `artist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `review`, `release`, `artist`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Generasi Y', 'Album yang diberi titel "Generation Y" menjadi pembuktian keseriusan Kunto Aji menyusuri dunia musik Indonesia. Album yang konon laris hingga 1000 copy ini berisi 10 lagu ;Suara, Akhir Bulan, Buka Buka Buka, Ekspektasi, Amatiran, Terlalu, Lama Sendiri, Me', '2014-11-01', 'Kunto Aji', '', '2017-05-17 09:36:56', '2017-05-17 09:36:56'),
(4, 'Explore', 'Lewat albumnya bertajuk "Explore", Isyana tampil percaya diri  menunjukkan kemampuanyya dalam mencipta, memainkan alat musik dan bernyanyi.  Album yang penggarapannya diselesaikan disebuah studio di Swedia, The Kennel Studio" itu menampilkan karakter yang', '2015-11-11', 'Isyana Sarasvati', '', '2017-05-17 09:49:20', '2017-05-17 09:49:20'),
(5, 'Home', 'Akhir tahun 2014 Mocca melempar album bertajuk "Home" . Seperti album Mocca sebelumnya, band asal Bandung ini bermain dengan gaya karakter yang khas Mocca. Suara khas merdu Arina dan permainan musik dari para personelnya, plus personel tambahan ; Agung (k', '2015-01-09', 'Mocca', '', '2017-05-17 09:51:07', '2017-05-17 09:51:07'),
(6, 'Kolaborasoe', 'Mendengar album garapan Endank Soekamti bertajuk "Kolaborasoe" kita seakan dibawa ke nuansa lain dari lagu versi aslinya. Keahlian Endank Soekamti meng-aransement ulang  lagu tentu tidak lepas dari kerja sama team, termasuk para personel Endank Soekamti ;', '2014-11-11', 'Endank Soekamti', '', '2017-05-17 09:53:14', '2017-05-17 09:53:14'),
(8, 'Raya', 'Menyimak album "Raya" kita seakan dibawa kemasa lalu, termasuk kita diingatkan dengan  gaya musik Iwan Fals saat bermain dengan gitaris Ian Antono dan Setiawan Djodi. Ya, peran gitaris serba bisa "Totok Tewel" dialbum ini memang tidak bisa dilepaskan dari', '2013-06-25', 'Iwan Fals', '', '2017-05-17 09:57:58', '2017-05-17 09:57:58'),
(9, 'Dunia Batas', 'Mungkin benar, apa kata Nietzsche dalam "Beyond Good and Evil"; In music the passions enjoy themselves. Memainkan musik bisa terasa lebih "hidup" karena didukung dan didaulat dengan kuatnya passion dari yang memainkannya. Keberanian "Payung Teduh"  menemp', '2012-04-01', 'Payung Teduh', '', '2017-05-17 09:59:22', '2017-05-17 09:59:22'),
(10, 'Berlayar', '1. Have Fun (lyric by Adam So7)\r\nLagu ini mengisahkan seseorang yang sedang akan menikmati malam minggunya setelah semingguan mengisi dompet untuk mengejar mimpi.. Wah, lagu ini fresh banget.. Di lagu pembuka ini sheila on 7 seolah mengajak kita untuk sek', '2011-03-01', 'Sheila On Seven', '', '2017-05-17 10:04:08', '2017-05-17 10:04:08'),
(11, 'Sinestesia', 'Sinestesia adalah album studio ketiga dari grup musik indie-rock alternatif asal Indonesia, Efek Rumah Kaca. Album ini dirilis pada tanggal 18 Desember 2015, 7 tahun setelah album sebelumnya, Kamar Gelap.', '2015-12-18', 'Efek Rumah Kaca', '', '2017-05-17 22:48:26', '2017-05-17 22:48:26'),
(12, 'Monokrom ', 'Monokrom adalah album ketiga dari penyanyi Tulus. Album ini diliris pada tanggal 3 Agustus 2016', '2016-08-03', 'Tulus', '', '2017-05-17 22:51:38', '2017-05-17 22:51:38'),
(13, 'Handmade ', 'Handmade adalah album ketiga oleh penyanyi Indonesia, Raisa. Album ini dirilis pada 20 April 2016 oleh Juni Records. ingel utama album ini, "Jatuh Hati" dirilis pada 15 Januari 2015. Singel kedua album ini, "Percayalah" yang menampilkan penyanyi Afgan tel', '2016-04-20', 'Raisa', '', '2017-05-17 22:54:52', '2017-05-17 22:54:52'),
(14, 'Yura ', 'Yura merupakan album studio pertama karya Yura. Dirilis pada tahun 2014. Lagu utamanya di album ini ialah Balada Sirkus, Cinta dan Rahasia dan Berawal Dari Tatap.', '2014-03-19', 'Yura ', '', '2017-05-17 23:01:54', '2017-05-17 23:01:54'),
(15, 'Gajah ', 'Gajah adalah album kedua dari penyanyi Tulus. Album ini resmi diliris pada tanggal 19 Februari 2014 oleh Demajors. Beberapa bulan setelah perilisan, Gajah berhasil berada di deretan tangga lagu indonesia. Album ini menempati posisi kedelapan di iTunes Indonesia pada bulan Juli. Selain itu lagu Sepatu dan Jangan Cintai Aku Apa Adanya juga sukses di situs tersebut dengan posisi ke-30 dan ke-12 pada bulan yang sama.', '2014-02-19', 'Tulus', '', '2017-05-21 23:01:21', '2017-05-21 23:01:21'),
(16, 'Taifun', 'Taifun merupakan sebuah album perdana karya Barasuara. Dirilis pada tahun 2015 dengan lagu utamanya yang berjudul "Bahas Bahasa" dan "Sendu Melagu". Album ini menjadi salah satu dari 10 album indie terbaik 2015', '2015-10-16', 'Barasuara', '', '2017-05-21 23:15:02', '2017-05-21 23:15:02'),
(17, 'Musim Yang Baik ', 'Musim Yang Baik merupakan album musik utama karya Sheila on 7. Dirilis pada tahun 2014. Lagu utamanya di album ini ialah Lapang Dada. Berisi 10 judul lagu yang kesemuanya baru, kecuali Brian (Drummer) semua personel Sheila on 7 menyumbang lagu dalam porsi yang sama di album ini. Eross sang gitaris tetap sebagai penyumbang lagu terbanyak dengan 4 lagu sedangkan Adam dan Duta masing masing menyumbang 3 lagu.', '2014-10-12', 'Sheila On 7', '', '2017-05-21 23:20:16', '2017-05-21 23:20:16'),
(18, 'For All', 'For All adalah album studio ketiga karya Bondan Prakoso & Fade 2 Black. Album ini dirilis pada tahun 2010 melalui label Sony BMG Indonesia dengan singel Ya Sudahlah dan Kita Selamanya. Di Album ini banyak unsur musik rapnya daripada yang sebelumnya.', '2010-07-10', 'Bondan Prakoso & Fade2Black', '', '2017-05-21 23:25:03', '2017-05-21 23:25:03'),
(19, 'Kereta Kencan', 'Kereta Kencan berisi sepuluh lagu dimana empat di antaranya telah dirilis sebagai single, yakni "Sama-sama Tahu", "Pelangi","Siapkah Kau "Tuk Jatuh Cinta Lagi" (feat. Andi Rianto) dan yang paling akhir dirilis, tepat pada Hari Musik Nasional, 9 Maret lalu adalah "Merakit Perahu".', '2017-09-03', 'HiVi!', '', '2017-05-21 23:29:09', '2017-05-21 23:29:09'),
(20, 'Kamar Gelap', 'Kamar Gelap adalah album studio kedua dari grup musik indie asal Indonesia, Efek Rumah Kaca. Album ini dirilis pada tanggal 19 Desember 2008.', '2008-12-19', 'Efek Rumah Kaca', '', '2017-05-21 23:30:19', '2017-05-21 23:30:19'),
(21, 'Dosa, Kota, & Kenangan', 'Album Dosa, Kota, dan Kenangan ini merupakan album terbaru Silampukau. Album kedua yang menyegarkan dan lumayan punya banyak perbedaan dengan mini album Sementara Ini. Dosa, Kota, dan Kenangan mirip seperti rangkuman perjalanan Silampukau menuju kedewasaan. Album ini merekam segala dosa masa muda, fragmen sangkala lampau, dan pengaruh Surabaya dalam kehidupan mereka.', '2015-04-19', 'Silampukau', '', '2017-05-21 23:39:11', '2017-05-21 23:39:11'),
(22, 'The Sophomore', 'The Sophomore adalah album studio kedua karya Pee Wee Gaskins yang dirilis pada tahun 2009 melalui Alfa Records. Singel dari album ini adalah adalah "Welcoming The Sophomore" dan "Di Balik Hari Esok".', '2009-05-18', 'Pee Wee Gaskins', '', '2017-05-22 00:03:28', '2017-05-22 00:03:28'),
(23, 'Stronger', 'Stronger adalah album kedua dari grup vokal, Gamaliel, Audrey, Cantika. Album ini dirilis pada 28 Mei 2015 oleh Sony Music Indonesia. Lagu utamanya dialbum ini adalah "Bahagia".', '2015-05-28', 'Gamaliel Audrey Cantika', 'album_23.jpg', '2017-05-22 00:13:16', '2017-05-22 00:13:16'),
(24, 'Top Of The Pop', 'Top Of The Pop adalah album musik kompilasi pertama karya Project Pop. Dirilis pada tahun 2008. Berisi 15 buah lagu yang terdiri atas 12 buah lagu lama yang pernah dipopulerkan terlebih dahulu dan 3 buah lagu baru yang dijadikan hits singel album ini adalah lagu Bukan Superstar, Goyang Duyu dan Maramaramara.', '2008-09-26', 'Project Pop', '', '2017-05-22 00:19:26', '2017-05-22 00:19:26'),
(25, 'Friday ', 'Friday adalah album musik kedua karya RAN yang dirilis pada tahun 2009. Berisi 10 buah lagu dengan hits singel lagu yang berjudul Jadi Gila dan Bosan. Lagu T.G.I. Friday menjadi hits di stasiun radio di Indonesia. Lagu Tunjukkan Cintamu juga menjadi hits karena sempat digunakan dalam iklan salah satu produk makanan di Indonesia. Sementara itu, lagu Ratu Lebah dijadikan lagu tema untuk film Queen Bee, yang dibintangi oleh Tika Putri.', '2009-03-10', 'RAN', 'album_25.jpg', '2017-05-22 00:23:41', '2017-05-22 00:23:41'),
(26, 'The Best Of Naif', 'The Best Of merupakan album musik karya Naif yang dirilis pada tahun 2005. Album ini adalah kompilasi lagu terbaik dari album-album sebelumnya ditambah dengan dua lagu baru Air dan Api dan Senang Bersamamu.', '2005-03-03', 'Naif', '', '2017-05-22 00:32:50', '2017-05-22 00:32:50'),
(28, 'For Your Life', 'For Your Life adalah album musik pertama karya RAN. Dirilis pada tahun 2008. Lagu utamanya ialah Pandangan Pertama. Lagu-lagu lainnya yang dijadikan andalan adalah Hanya Untukmu, Nothing Lasts Forever, Warnai Malam Ini, dan Selamat Pagi. Beberapa lagu di album ini pernah dijadikan jingle iklan, seperti Pandangan Pertama yang dijadikan jingle iklan Honda Jazz, Selamat Pagi yang dijadikan jingle iklan XL Liburan Rame yang dibintangi oleh Luna Maya dan Raffi Ahmad', '2008-01-01', 'RAN', 'album_28.jpg', '2017-05-22 00:35:01', '2017-05-22 00:35:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_05_03_042716_create_photos_table', 1),
('2017_05_03_042728_create_users_table', 1),
('2017_05_03_042742_create_albums_table', 1),
('2017_05_03_042806_create_songs_table', 1),
('2017_05_03_042825_create_reviews_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `name`, `extension`, `created_at`, `updated_at`) VALUES
(1, '7.jpg', 'jpg', '2017-05-18 09:28:07', '2017-05-18 09:28:07'),
(2, '15.jpg', 'jpg', '2017-05-22 01:01:58', '2017-05-22 01:01:58'),
(3, '14.jpg', 'jpg', '2017-05-22 01:09:12', '2017-05-22 01:09:12'),
(4, '14.jpg', 'jpg', '2017-05-22 01:09:41', '2017-05-22 01:09:41'),
(5, '6.jpg', 'jpg', '2017-05-22 02:29:05', '2017-05-22 02:29:05'),
(6, '6.jpg', 'jpg', '2017-05-22 19:44:09', '2017-05-22 19:44:09'),
(7, '6.jpg', 'jpg', '2017-05-22 19:44:43', '2017-05-22 19:44:43'),
(8, '6.jpg', 'jpg', '2017-05-22 19:48:37', '2017-05-22 19:48:37'),
(9, '6.jpg', 'jpg', '2017-05-22 19:48:59', '2017-05-22 19:48:59'),
(10, '6.jpg', 'jpg', '2017-05-22 19:50:22', '2017-05-22 19:50:22'),
(11, '6.jpg', 'jpg', '2017-05-22 19:50:59', '2017-05-22 19:50:59'),
(12, '6.jpg', 'jpg', '2017-05-22 19:51:18', '2017-05-22 19:51:18'),
(13, '6.jpg', 'jpg', '2017-05-22 19:51:50', '2017-05-22 19:51:50'),
(14, '16.jpg', 'jpg', '2017-05-22 21:30:14', '2017-05-22 21:30:14'),
(15, '17.jpg', 'jpg', '2017-05-22 21:32:52', '2017-05-22 21:32:52'),
(16, '18.jpg', 'jpg', '2017-05-22 21:41:40', '2017-05-22 21:41:40'),
(17, '19.jpg', 'jpg', '2017-05-22 21:43:07', '2017-05-22 21:43:07'),
(18, '20.jpg', 'jpg', '2017-05-22 21:48:36', '2017-05-22 21:48:36'),
(19, '21.jpg', 'jpg', '2017-05-22 21:49:18', '2017-05-22 21:49:18'),
(20, '22.jpg', 'jpg', '2017-05-22 21:59:41', '2017-05-22 21:59:41'),
(21, '23.jpg', 'jpg', '2017-05-22 22:22:51', '2017-05-22 22:22:51'),
(22, '25.jpg', 'jpg', '2017-05-22 23:04:49', '2017-05-22 23:04:49'),
(23, '26.jpg', 'jpg', '2017-05-22 23:46:14', '2017-05-22 23:46:14');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
`id` int(10) unsigned NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `album_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 4, 'bagus sekali album ini. semangat', 6, 14, '2017-05-21 23:55:27', '2017-05-21 23:55:27'),
(2, 4, 'wow bagus sekali. semangat', 4, 14, '2017-05-21 23:59:22', '2017-05-21 23:59:22'),
(3, 5, 'lagunya bagus-bagus!', 16, 14, '2017-05-22 01:10:26', '2017-05-22 01:10:26'),
(4, 5, 'lebih bagus dengan suara vokalis yang baru. GOOD JOB!!', 19, 7, '2017-05-22 01:52:04', '2017-05-22 01:52:04'),
(5, 4, 'Seperti nama albumnya. STRONGER!', 23, 7, '2017-05-22 01:52:49', '2017-05-22 01:52:49'),
(6, 5, 'BAGUS!', 12, 7, '2017-05-22 02:02:39', '2017-05-22 02:02:39'),
(7, 3, 'memang membuat jatuh hati.', 13, 7, '2017-05-22 02:04:03', '2017-05-22 02:04:03'),
(8, 2, 'TOP!', 16, 7, '2017-05-22 02:05:21', '2017-05-22 02:05:21'),
(9, 4, 'memang best of the best!', 26, 7, '2017-05-22 02:07:03', '2017-05-22 02:07:03'),
(10, 4, 'Lagunya pas di telinga!', 19, 6, '2017-05-22 02:28:49', '2017-05-22 02:28:49'),
(11, 5, 'Muda dan berbakat!', 4, 6, '2017-05-22 07:38:24', '2017-05-22 07:38:24'),
(12, 4, 'Lagunya keren-keren.', 11, 6, '2017-05-22 07:50:35', '2017-05-22 07:50:35'),
(13, 3, 'Nice!', 21, 6, '2017-05-22 07:51:03', '2017-05-22 07:51:03'),
(15, 5, 'bagus nih albumnya bondan prakoso & fade2black, sayang tapi mereka udah misah dan bikin single sendiri-sendiri', 18, 16, '2017-05-22 21:29:11', '2017-05-22 21:29:11'),
(16, 5, 'salah satu album terbaik dari efek rumah kaca yang isinya hampir semuanya enak, tapi cholil masih di amerika jadi masih belum lengkap mereka:(', 20, 16, '2017-05-22 21:31:19', '2017-05-22 21:31:19'),
(17, 5, 'emang album the best isinya mantap2 semua!', 26, 16, '2017-05-22 21:32:14', '2017-05-22 21:32:14'),
(18, 5, 'band jaman smp yang terkenal banget sama suara vokal nya dan synth nya', 22, 16, '2017-05-22 21:33:12', '2017-05-22 21:33:12'),
(20, 5, 'keren banget albumnya seperti "ngeliat" warna pas dengerin', 11, 16, '2017-05-22 21:34:37', '2017-05-22 21:34:37'),
(21, 5, 'menggambarkan kehidupan kuliah saya di surabaya :'')', 21, 17, '2017-05-22 21:35:35', '2017-05-22 21:35:35'),
(22, 4, 'enak-enak semua lagunya mantap', 9, 16, '2017-05-22 21:35:47', '2017-05-22 21:35:47'),
(23, 5, 'keren', 15, 16, '2017-05-22 21:36:37', '2017-05-22 21:36:37'),
(24, 5, 'musiknya keren, suaranya lembut, sayang udah di lamar orang :"', 13, 17, '2017-05-22 21:38:47', '2017-05-22 21:38:47'),
(25, 5, 'keren nih band (atau vocal group?) lagu-lagu paling keren di album ini', 24, 16, '2017-05-22 21:38:50', '2017-05-22 21:38:50'),
(26, 5, 'musik favorit saya dari jaman sma, lirik liriknya sangat berarti bagi saya', 20, 17, '2017-05-22 21:39:29', '2017-05-22 21:39:29'),
(27, 3, 'bagus sih musiknya, cuma lirik nya yang guyonan jadi biasa aja dan cepet bosan', 24, 17, '2017-05-22 21:41:04', '2017-05-22 21:41:04'),
(28, 4, 'Lagunya menyentuh bangeeet :"', 13, 18, '2017-05-22 21:42:42', '2017-05-22 21:42:42'),
(29, 4, 'Lagunya KEREN BANGET MAS TULUSSS !!!', 12, 18, '2017-05-22 21:43:24', '2017-05-22 21:43:24'),
(31, 4, 'sangat suka dengan lagu yang berjudul "langit abu-abu" di album monokrom mengajarkan saya tentang bagaimana rasanya ditinggalkan', 12, 19, '2017-05-22 21:44:29', '2017-05-22 21:44:29'),
(32, 5, 'bagus banget ini albumnyaaa ku suka <3', 15, 18, '2017-05-22 21:44:41', '2017-05-22 21:44:41'),
(33, 5, 'mantap! apalagi yang featuring Didi Kempot!', 6, 20, '2017-05-22 21:45:18', '2017-05-22 21:45:18'),
(34, 2, 'liriknya susah dipahami', 16, 19, '2017-05-22 21:45:31', '2017-05-22 21:45:31'),
(35, 5, 'keren nih lagunya yg tetap semangat, bikin semangat', 18, 20, '2017-05-22 21:45:57', '2017-05-22 21:45:57'),
(36, 5, 'KEREN BANGET PEE WEE GASKINS', 22, 20, '2017-05-22 21:46:44', '2017-05-22 21:46:44'),
(37, 3, 'NEIDA CANTIK!', 19, 19, '2017-05-22 21:46:55', '2017-05-22 21:46:55'),
(38, 4, 'Literally RAN for your life to the concert', 28, 21, '2017-05-22 21:48:21', '2017-05-22 21:48:21'),
(39, 4, 'ekspektasi terbaik', 1, 19, '2017-05-22 21:48:22', '2017-05-22 21:48:22'),
(40, 4, 'keren mocca masih khas suaranya', 5, 20, '2017-05-22 21:49:21', '2017-05-22 21:49:21'),
(41, 4, 'musim yang baik untuk album yang baik', 17, 20, '2017-05-22 21:49:50', '2017-05-22 21:49:50'),
(42, 5, 'keren OI', 8, 20, '2017-05-22 21:50:27', '2017-05-22 21:50:27'),
(43, 4, '"kau buatku jadi gila!" terbaik lah band inii', 25, 19, '2017-05-22 21:50:33', '2017-05-22 21:50:33'),
(44, 4, 'enak nih berlayar baren so7', 10, 20, '2017-05-22 21:51:00', '2017-05-22 21:51:00'),
(45, 4, 'lagu lagu di album berlayar ini bagus dan menunjukan s07 tetap konsisten di permusikan indonesia', 10, 19, '2017-05-22 21:53:16', '2017-05-22 21:53:16'),
(46, 5, 'WENAK BOSKU', 12, 23, '2017-05-22 22:22:16', '2017-05-22 22:22:16'),
(47, 1, 'jelek', 5, 25, '2017-05-22 23:06:25', '2017-05-22 23:06:25'),
(48, 3, 'bagus', 19, 26, '2017-05-22 23:45:50', '2017-05-22 23:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE IF NOT EXISTS `songs` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `title`, `duration`, `album_id`, `created_at`, `updated_at`) VALUES
(1, 'Suara', NULL, 1, '2017-05-17 19:30:17', '2017-05-17 19:30:17'),
(2, 'Akhir Bulan', NULL, 1, '2017-05-17 19:30:59', '2017-05-17 19:30:59'),
(3, 'Buka Buka Buka', NULL, 1, '2017-05-17 19:31:12', '2017-05-17 19:31:12'),
(4, 'Ekspektasi', NULL, 1, '2017-05-17 19:31:28', '2017-05-17 19:31:28'),
(5, 'Amatiran', NULL, 1, '2017-05-17 19:31:37', '2017-05-17 19:31:37'),
(6, 'Terlalu Lama Sendiri', NULL, 1, '2017-05-17 19:31:55', '2017-05-17 19:31:55'),
(7, 'Mercusuar', NULL, 1, '2017-05-17 19:32:07', '2017-05-17 19:32:07'),
(8, 'Gema', NULL, 1, '2017-05-17 19:32:14', '2017-05-17 19:32:14'),
(9, 'Pengingat (ft Barry Likumahua)', NULL, 1, '2017-05-17 19:32:35', '2017-05-17 19:32:35'),
(10, 'All or Nothing', NULL, 4, '2017-05-17 22:20:54', '2017-05-17 22:20:54'),
(11, 'Keep Being You', NULL, 4, '2017-05-17 22:21:43', '2017-05-17 22:21:43'),
(12, 'Tap Tap Tap', NULL, 4, '2017-05-17 22:22:05', '2017-05-17 22:22:05'),
(13, 'Mimpi', NULL, 4, '2017-05-17 22:22:27', '2017-05-17 22:22:27'),
(14, 'The Way I Love You', NULL, 4, '2017-05-17 22:22:44', '2017-05-17 22:22:44'),
(15, 'Tetap Dalam Jiwa', NULL, 4, '2017-05-17 22:23:00', '2017-05-17 22:23:00'),
(16, 'All Over Me', NULL, 4, '2017-05-17 22:23:17', '2017-05-17 22:23:17'),
(17, 'Kau Adalah', NULL, 4, '2017-05-17 22:23:32', '2017-05-17 22:23:32'),
(18, 'Di Batas Waktu', NULL, 4, '2017-05-17 22:23:50', '2017-05-17 22:23:50'),
(19, 'Pesta', NULL, 4, '2017-05-17 22:24:03', '2017-05-17 22:24:03'),
(20, 'Good Morning Song', NULL, 5, '2017-05-17 22:25:51', '2017-05-17 22:25:51'),
(21, 'Bandung (Flower City)', NULL, 5, '2017-05-17 22:26:14', '2017-05-17 22:26:14'),
(22, 'Building Memories', NULL, 5, '2017-05-17 22:26:31', '2017-05-17 22:26:31'),
(23, 'Last Piece', NULL, 5, '2017-05-17 22:26:47', '2017-05-17 22:26:47'),
(24, 'Somewhere In My Dreamland', NULL, 5, '2017-05-17 22:27:11', '2017-05-17 22:27:11'),
(25, 'Stars in Your Eyes', NULL, 5, '2017-05-17 22:27:24', '2017-05-17 22:27:24'),
(26, 'Imaginary Girlfriend', NULL, 5, '2017-05-17 22:27:40', '2017-05-17 22:27:40'),
(27, 'You’re The Man', NULL, 5, '2017-05-17 22:28:10', '2017-05-17 22:28:10'),
(28, 'Bundle of Joy', NULL, 5, '2017-05-17 22:28:25', '2017-05-17 22:28:25'),
(29, 'Changing Fate', NULL, 5, '2017-05-17 22:28:40', '2017-05-17 22:28:40'),
(30, 'Home', NULL, 5, '2017-05-17 22:29:01', '2017-05-17 22:29:01'),
(31, 'Goodnight Song (Outro)', NULL, 5, '2017-05-17 22:29:16', '2017-05-17 22:29:16'),
(32, 'Have Fun', NULL, 10, '2017-05-17 22:31:44', '2017-05-17 22:31:44'),
(33, 'Pasti Ku Bisa', NULL, 10, '2017-05-17 22:32:29', '2017-05-17 22:32:29'),
(34, 'Hujan Turun', NULL, 10, '2017-05-17 22:33:11', '2017-05-17 22:33:11'),
(35, 'On The Phone', NULL, 10, '2017-05-17 22:33:27', '2017-05-17 22:33:27'),
(36, 'Hari Bersamanya', NULL, 10, '2017-05-17 22:34:08', '2017-05-17 22:34:08'),
(37, 'Berlayar Denganku', NULL, 10, '2017-05-17 22:34:24', '2017-05-17 22:34:24'),
(38, 'Perfect Time', NULL, 10, '2017-05-17 22:34:43', '2017-05-17 22:34:43'),
(39, 'Kamus Hidupku (Demo)', NULL, 10, '2017-05-17 22:35:08', '2017-05-17 22:35:08'),
(40, 'Heavy Birthday (feat. Jarwo)', NULL, 6, '2017-05-17 22:35:10', '2017-05-17 22:35:10'),
(41, 'Bait Pertama', NULL, 10, '2017-05-17 22:35:26', '2017-05-17 22:35:26'),
(42, 'Luar Biasa (feat. Kemal Palevi)', NULL, 6, '2017-05-17 22:35:36', '2017-05-17 22:35:36'),
(43, 'Benci Untuk Mencinta (feat. Naif)', NULL, 6, '2017-05-17 22:35:46', '2017-05-17 22:35:46'),
(44, 'Hari Bersamanya (Accoustic Version)', NULL, 10, '2017-05-17 22:35:55', '2017-05-17 22:35:55'),
(45, 'Kunang Kunang (feat. E’snanas)', NULL, 6, '2017-05-17 22:35:56', '2017-05-17 22:35:56'),
(46, 'Parang Tritis (feat. Didi Kempot)', NULL, 6, '2017-05-17 22:36:07', '2017-05-17 22:36:07'),
(47, 'Parang Tritis (feat. Didi Kempot)', NULL, 6, '2017-05-17 22:36:08', '2017-05-17 22:36:08'),
(48, 'Pandangi Langit Malam Ini (feat. Pongki Barata)', NULL, 6, '2017-05-17 22:36:31', '2017-05-17 22:36:31'),
(49, 'Anyer 10 Maret (feat. Slank)', NULL, 6, '2017-05-17 22:36:34', '2017-05-17 22:36:34'),
(50, 'Dilema (feat. Cherrybelle)', NULL, 6, '2017-05-17 22:36:47', '2017-05-17 22:36:47'),
(51, 'Cintailah Cinta Mereka (feat. GIGI)', NULL, 6, '2017-05-17 22:37:02', '2017-05-17 22:37:02'),
(52, '#eeeaa (feat. CJR)', NULL, 6, '2017-05-17 22:37:09', '2017-05-17 22:37:09'),
(53, 'Kosong (feat. Pure Saturday)', NULL, 6, '2017-05-17 22:37:19', '2017-05-17 22:37:19'),
(54, 'Tak Kan Ada Cinta Yang Lain (feat. Dewa 19)', NULL, 6, '2017-05-17 22:37:36', '2017-05-17 22:37:36'),
(55, 'Masa Kecil (feat. Tom Kill Jerry)', NULL, 6, '2017-05-17 22:37:41', '2017-05-17 22:37:41'),
(56, 'Syubidu (feat. Jarwo)', NULL, 6, '2017-05-17 22:37:52', '2017-05-17 22:37:52'),
(57, 'Raya', NULL, 8, '2017-05-17 22:40:13', '2017-05-17 22:40:13'),
(58, 'Aku Ada', NULL, 8, '2017-05-17 22:40:21', '2017-05-17 22:40:21'),
(59, 'Negeri Kaya', NULL, 8, '2017-05-17 22:40:32', '2017-05-17 22:40:32'),
(60, 'Katanya', NULL, 8, '2017-05-17 22:40:43', '2017-05-17 22:40:43'),
(61, 'Kopi Top', NULL, 8, '2017-05-17 22:41:00', '2017-05-17 22:41:00'),
(62, 'Sampah', NULL, 8, '2017-05-17 22:41:12', '2017-05-17 22:41:12'),
(63, 'Tangan Kosong', NULL, 8, '2017-05-17 22:41:21', '2017-05-17 22:41:21'),
(64, 'Lagu Cinta', NULL, 8, '2017-05-17 22:41:39', '2017-05-17 22:41:39'),
(65, 'Adalah', NULL, 8, '2017-05-17 22:41:44', '2017-05-17 22:41:44'),
(66, 'Api Unggun', NULL, 8, '2017-05-17 22:41:56', '2017-05-17 22:41:56'),
(67, 'Gadis Tani', NULL, 8, '2017-05-17 22:42:13', '2017-05-17 22:42:13'),
(68, 'Lekaslah Sembuh', NULL, 8, '2017-05-17 22:42:20', '2017-05-17 22:42:20'),
(69, 'Rekening Gendut', NULL, 8, '2017-05-17 22:42:34', '2017-05-17 22:42:34'),
(70, 'Si Putri Dan Si Fulan', NULL, 8, '2017-05-17 22:42:42', '2017-05-17 22:42:42'),
(71, 'Bangsat', NULL, 8, '2017-05-17 22:42:59', '2017-05-17 22:42:59'),
(72, 'Dajal Net', NULL, 8, '2017-05-17 22:43:06', '2017-05-17 22:43:06'),
(73, 'Pelaut', NULL, 8, '2017-05-17 22:43:23', '2017-05-17 22:43:23'),
(74, 'Tak Kenal Maka Tak Sayang', NULL, 8, '2017-05-17 22:43:31', '2017-05-17 22:43:31'),
(75, 'Berdua Saja', NULL, 9, '2017-05-17 22:44:07', '2017-05-17 22:44:07'),
(76, 'Menuju Senja', NULL, 9, '2017-05-17 22:44:14', '2017-05-17 22:44:14'),
(77, 'Untuk Perempuan Yang Sedang di Pelukan', NULL, 9, '2017-05-17 22:44:29', '2017-05-17 22:44:29'),
(78, 'Rahasia', NULL, 9, '2017-05-17 22:44:35', '2017-05-17 22:44:35'),
(79, 'Angin Pujaan Hujan', NULL, 9, '2017-05-17 22:44:56', '2017-05-17 22:44:56'),
(80, 'Di Ujung Malam', NULL, 9, '2017-05-17 22:45:04', '2017-05-17 22:45:04'),
(81, 'Resah', NULL, 9, '2017-05-17 22:45:16', '2017-05-17 22:45:16'),
(82, 'Biarkan', NULL, 9, '2017-05-17 22:45:21', '2017-05-17 22:45:21'),
(83, 'Merah', NULL, 11, '2017-05-17 22:48:47', '2017-05-17 22:48:47'),
(84, 'Biru', NULL, 11, '2017-05-17 22:49:41', '2017-05-17 22:49:41'),
(85, 'Jingga', NULL, 11, '2017-05-17 22:49:56', '2017-05-17 22:49:56'),
(86, 'Hijau', NULL, 11, '2017-05-17 22:50:11', '2017-05-17 22:50:11'),
(87, 'Putih', NULL, 11, '2017-05-17 22:50:25', '2017-05-17 22:50:25'),
(88, 'Kuning', NULL, 11, '2017-05-17 22:50:40', '2017-05-17 22:50:40'),
(89, 'Manusia Kuat', NULL, 12, '2017-05-17 22:51:53', '2017-05-17 22:51:53'),
(90, 'Pamit', NULL, 12, '2017-05-17 22:52:17', '2017-05-17 22:52:17'),
(91, 'Ruang Sendiri', NULL, 12, '2017-05-17 22:52:24', '2017-05-17 22:52:24'),
(92, 'Tukar Jiwa', NULL, 12, '2017-05-17 22:52:39', '2017-05-17 22:52:39'),
(93, 'Tergila-gila', NULL, 12, '2017-05-17 22:52:46', '2017-05-17 22:52:46'),
(94, 'Cahaya', NULL, 12, '2017-05-17 22:52:59', '2017-05-17 22:52:59'),
(95, 'Langit Abu-abu', NULL, 12, '2017-05-17 22:53:06', '2017-05-17 22:53:06'),
(96, 'Mahakarya', NULL, 12, '2017-05-17 22:53:20', '2017-05-17 22:53:20'),
(97, 'Lekas', NULL, 12, '2017-05-17 22:53:25', '2017-05-17 22:53:25'),
(98, 'Monokrom', NULL, 12, '2017-05-17 22:53:36', '2017-05-17 22:53:36'),
(99, 'Intro - Handmade', NULL, 13, '2017-05-17 22:55:06', '2017-05-17 22:55:06'),
(100, 'Kali Kedua', NULL, 13, '2017-05-17 22:55:14', '2017-05-17 22:55:14'),
(101, 'Percayalah', NULL, 13, '2017-05-17 22:55:29', '2017-05-17 22:55:29'),
(102, 'Sang Rembulan', NULL, 13, '2017-05-17 22:55:42', '2017-05-17 22:55:42'),
(103, 'Tentang Cinta', NULL, 13, '2017-05-17 22:55:54', '2017-05-17 22:55:54'),
(104, 'Jatuh Hati', NULL, 13, '2017-05-17 22:56:05', '2017-05-17 22:56:05'),
(105, 'Letting You Go', NULL, 13, '2017-05-17 22:56:17', '2017-05-17 22:56:17'),
(106, 'Usai di Sini', NULL, 13, '2017-05-17 22:56:24', '2017-05-17 22:56:24'),
(107, 'Love You Longer', NULL, 13, '2017-05-17 22:56:42', '2017-05-17 22:56:42'),
(108, 'Love You Longer', NULL, 13, '2017-05-17 22:57:56', '2017-05-17 22:57:56'),
(109, 'Biarkanlah', NULL, 13, '2017-05-17 22:58:03', '2017-05-17 22:58:03'),
(110, 'Nyawa dan Harapan', NULL, 13, '2017-05-17 22:58:15', '2017-05-17 22:58:15'),
(111, 'Balada Sirkus', NULL, 14, '2017-05-17 23:02:20', '2017-05-17 23:02:20'),
(112, 'Keruh Di Air Jenuh', NULL, 14, '2017-05-17 23:02:27', '2017-05-17 23:02:27'),
(113, 'Cinta dan Rahasia (ft. Glenn Fredly)', NULL, 14, '2017-05-17 23:02:41', '2017-05-17 23:02:41'),
(114, 'Jester Suit', NULL, 14, '2017-05-17 23:02:48', '2017-05-17 23:02:48'),
(115, 'Superlunar', NULL, 14, '2017-05-17 23:03:02', '2017-05-17 23:03:02'),
(116, 'Get Along With You', NULL, 14, '2017-05-17 23:03:26', '2017-05-17 23:03:26'),
(117, 'Itu Kamu', NULL, 14, '2017-05-17 23:03:45', '2017-05-17 23:03:45'),
(118, 'Itu Kamu', NULL, 14, '2017-05-17 23:04:06', '2017-05-17 23:04:06'),
(119, 'Kataji', NULL, 14, '2017-05-17 23:04:11', '2017-05-17 23:04:11'),
(120, 'Baru', '2:58', 15, '2017-05-21 23:02:25', '2017-05-21 23:02:25'),
(121, 'Bumerang', NULL, 15, '2017-05-21 23:02:52', '2017-05-21 23:02:52'),
(122, 'Sepatu', NULL, 15, '2017-05-21 23:03:37', '2017-05-21 23:03:37'),
(123, 'Bunga Tidur', NULL, 15, '2017-05-21 23:03:46', '2017-05-21 23:03:46'),
(124, 'Tanggal Merah', NULL, 15, '2017-05-21 23:03:57', '2017-05-21 23:03:57'),
(125, 'Lagu Untuk Matahari', NULL, 15, '2017-05-21 23:15:53', '2017-05-21 23:15:53'),
(126, 'Satu Hari di Bulan Juni', NULL, 15, '2017-05-21 23:16:49', '2017-05-21 23:16:49'),
(127, 'Nyala Suara', '4:58', 16, '2017-05-21 23:16:53', '2017-05-21 23:16:53'),
(128, 'Jangan Cintai Aku Apa Adanya', NULL, 15, '2017-05-21 23:17:14', '2017-05-21 23:17:14'),
(129, 'Sendu Melagu', '4:08', 16, '2017-05-21 23:17:42', '2017-05-21 23:17:42'),
(130, 'Bahas Bahasa', '4:29', 16, '2017-05-21 23:18:07', '2017-05-21 23:18:07'),
(131, 'Hagia', NULL, 16, '2017-05-21 23:21:09', '2017-05-21 23:21:09'),
(132, 'Selamat Datang', NULL, 1, '2017-05-21 23:21:11', '2017-05-21 23:21:11'),
(133, 'Satu Langkah', NULL, 17, '2017-05-21 23:21:24', '2017-05-21 23:21:24'),
(134, 'Api & Lentera', NULL, 16, '2017-05-21 23:21:33', '2017-05-21 23:21:33'),
(135, 'Buka Mata Dan Telinga', NULL, 17, '2017-05-21 23:21:37', '2017-05-21 23:21:37'),
(136, 'Canggung', NULL, 17, '2017-05-21 23:22:00', '2017-05-21 23:22:00'),
(137, 'My Lovely', NULL, 17, '2017-05-21 23:22:19', '2017-05-21 23:22:19'),
(138, 'Menungang Badai', NULL, 16, '2017-05-21 23:22:20', '2017-05-21 23:22:20'),
(139, 'Tarintih', NULL, 16, '2017-05-21 23:22:35', '2017-05-21 23:22:35'),
(140, 'Beruntungnya Aku', NULL, 17, '2017-05-21 23:22:39', '2017-05-21 23:22:39'),
(141, 'Mengunci Ingatan', NULL, 16, '2017-05-21 23:22:55', '2017-05-21 23:22:55'),
(142, 'Lapang Dada', NULL, 17, '2017-05-21 23:23:11', '2017-05-21 23:23:11'),
(143, 'Taifun', NULL, 16, '2017-05-21 23:23:41', '2017-05-21 23:23:41'),
(144, 'Musim Yang Baik', NULL, 17, '2017-05-21 23:23:48', '2017-05-21 23:23:48'),
(145, 'Belum', NULL, 17, '2017-05-21 23:23:55', '2017-05-21 23:23:55'),
(146, 'Sampai Jumpa', NULL, 17, '2017-05-21 23:24:10', '2017-05-21 23:24:10'),
(147, 'Ya Sudahlah', NULL, 18, '2017-05-21 23:25:39', '2017-05-21 23:25:39'),
(148, 'Good Time', NULL, 18, '2017-05-21 23:26:29', '2017-05-21 23:26:29'),
(149, 'Tetap Semangat', NULL, 18, '2017-05-21 23:27:01', '2017-05-21 23:27:01'),
(150, 'Sang Juara', NULL, 18, '2017-05-21 23:27:13', '2017-05-21 23:27:13'),
(151, 'Bumi ke Langit', NULL, 18, '2017-05-21 23:27:28', '2017-05-21 23:27:28'),
(152, 'Not With Me', NULL, 18, '2017-05-21 23:27:41', '2017-05-21 23:27:41'),
(153, 'S.O.S', NULL, 18, '2017-05-21 23:27:52', '2017-05-21 23:27:52'),
(154, 'For All', NULL, 18, '2017-05-21 23:28:05', '2017-05-21 23:28:05'),
(155, 'Terinjak Terhempas', NULL, 18, '2017-05-21 23:28:16', '2017-05-21 23:28:16'),
(156, 'Kita Selamanya', NULL, 18, '2017-05-21 23:28:28', '2017-05-21 23:28:28'),
(157, 'Tidurlah', NULL, 18, '2017-05-21 23:28:40', '2017-05-21 23:28:40'),
(158, 'Tubuhmu Membiru... Tragis', NULL, 20, '2017-05-21 23:30:52', '2017-05-21 23:30:52'),
(159, 'Kau dan Aku Menuju Ruang Hampa', NULL, 20, '2017-05-21 23:31:07', '2017-05-21 23:31:07'),
(160, 'Mosi Tidak Percaya', NULL, 20, '2017-05-21 23:31:22', '2017-05-21 23:31:22'),
(161, 'Lagu Kesepian', NULL, 20, '2017-05-21 23:31:39', '2017-05-21 23:31:39'),
(162, 'Hujan Jangan Marah', NULL, 20, '2017-05-21 23:32:26', '2017-05-21 23:32:26'),
(163, 'Kenakalan Remaja di Era Informatika', NULL, 20, '2017-05-21 23:33:34', '2017-05-21 23:33:34'),
(164, 'Menjadi Indonesia', NULL, 20, '2017-05-21 23:33:46', '2017-05-21 23:33:46'),
(165, 'Kamar Gelap', NULL, 20, '2017-05-21 23:33:56', '2017-05-21 23:33:56'),
(166, 'Jangan Bakar Buku', NULL, 20, '2017-05-21 23:34:09', '2017-05-21 23:34:09'),
(167, 'Intro', NULL, 19, '2017-05-21 23:34:24', '2017-05-21 23:34:24'),
(168, 'Merakit Perahu', NULL, 19, '2017-05-21 23:34:33', '2017-05-21 23:34:33'),
(169, 'Sama Sama Tahu', NULL, 19, '2017-05-21 23:34:49', '2017-05-21 23:34:49'),
(170, 'Gadis Sampul', NULL, 19, '2017-05-21 23:35:01', '2017-05-21 23:35:01'),
(171, 'Apa Adanya', NULL, 19, '2017-05-21 23:35:20', '2017-05-21 23:35:20'),
(172, 'Banyak Asap di Sana', NULL, 20, '2017-05-21 23:35:41', '2017-05-21 23:35:41'),
(173, 'Laki-Laki Pemalu', NULL, 20, '2017-05-21 23:36:14', '2017-05-21 23:36:14'),
(174, 'Balerina', NULL, 20, '2017-05-21 23:36:53', '2017-05-21 23:36:53'),
(176, 'Sang Juragan', '2:41', 21, '2017-05-21 23:44:11', '2017-05-21 23:44:11'),
(177, 'Malam Jatuh di Surabaya', '2:48', 21, '2017-05-21 23:44:37', '2017-05-21 23:44:37'),
(178, 'Doa 1', '3:55', 21, '2017-05-21 23:44:54', '2017-05-21 23:44:54'),
(179, 'Lagu Rantau', '3:55', 21, '2017-05-21 23:45:14', '2017-05-21 23:45:14'),
(180, 'Bola Raya', '3:31', 21, '2017-05-21 23:47:09', '2017-05-21 23:47:09'),
(181, 'Puan Kelana', '3:41', 21, '2017-05-21 23:47:40', '2017-05-21 23:47:40'),
(182, 'Si Pelanggan', '3:53', 21, '2017-05-21 23:48:02', '2017-05-21 23:48:02'),
(183, 'Balada Harian', '3:38', 21, '2017-05-21 23:48:29', '2017-05-21 23:48:29'),
(184, 'Bianglala', '3:40', 21, '2017-05-21 23:49:30', '2017-05-21 23:49:30'),
(185, 'Aku Duduk Menanti', '2:31', 21, '2017-05-21 23:50:12', '2017-05-21 23:50:12'),
(186, 'Pelangi', NULL, 19, '2017-05-22 00:00:41', '2017-05-22 00:00:41'),
(187, 'Kereta Kencan', NULL, 19, '2017-05-22 00:00:49', '2017-05-22 00:00:49'),
(188, 'Siapkah Kau ''Tuk Jatuh Cinta Lagi (Feat. Andi Rianto)', NULL, 19, '2017-05-22 00:01:02', '2017-05-22 00:01:02'),
(189, 'Mata Ke Hati (Acoustic Version)', NULL, 19, '2017-05-22 00:01:13', '2017-05-22 00:01:13'),
(190, 'When Did Men Start Shaving Their Beards', NULL, 22, '2017-05-22 00:04:47', '2017-05-22 00:04:47'),
(191, 'Welcoming The Sophomore', NULL, 22, '2017-05-22 00:06:51', '2017-05-22 00:06:51'),
(192, 'Di Balik Hari Esok', NULL, 22, '2017-05-22 00:08:03', '2017-05-22 00:08:03'),
(193, 'Be Seen and Be Scene', NULL, 22, '2017-05-22 00:08:21', '2017-05-22 00:08:21'),
(194, 'On A Day Just Like This', NULL, 22, '2017-05-22 00:09:07', '2017-05-22 00:09:07'),
(195, 'Heartbreak Can Be A Good Business', NULL, 22, '2017-05-22 00:09:19', '2017-05-22 00:09:19'),
(196, 'Hadapi Dunia', NULL, 22, '2017-05-22 00:09:35', '2017-05-22 00:09:35'),
(197, 'Tentukan Akhir Yang Terbaik', NULL, 22, '2017-05-22 00:09:50', '2017-05-22 00:09:50'),
(198, 'Everyday and Everynight', NULL, 22, '2017-05-22 00:10:02', '2017-05-22 00:10:02'),
(199, 'I Hang Out With Zombies Without Being One of Them', NULL, 22, '2017-05-22 00:10:13', '2017-05-22 00:10:13'),
(200, 'Dorks Never Say Die', NULL, 22, '2017-05-22 00:10:25', '2017-05-22 00:10:25'),
(201, 'Berdiri Terinjak 2k9', NULL, 22, '2017-05-22 00:10:37', '2017-05-22 00:10:37'),
(202, 'Tatiana 2k9', NULL, 22, '2017-05-22 00:10:51', '2017-05-22 00:10:51'),
(203, 'Bahagia ', NULL, 23, '2017-05-22 00:19:22', '2017-05-22 00:19:22'),
(204, 'Kamu ', NULL, 23, '2017-05-22 00:19:32', '2017-05-22 00:19:32'),
(205, 'Goooo ', NULL, 23, '2017-05-22 00:20:03', '2017-05-22 00:20:03'),
(206, 'Cinta ', NULL, 23, '2017-05-22 00:20:14', '2017-05-22 00:20:14'),
(207, ' I Want You', NULL, 23, '2017-05-22 00:20:32', '2017-05-22 00:20:32'),
(208, 'Never Leave Ya', NULL, 23, '2017-05-22 00:20:41', '2017-05-22 00:20:41'),
(209, 'Terbang ', NULL, 23, '2017-05-22 00:20:47', '2017-05-22 00:20:47'),
(210, 'Stronger ', NULL, 23, '2017-05-22 00:20:57', '2017-05-22 00:20:57'),
(211, 'Berhenti ', NULL, 23, '2017-05-22 00:21:07', '2017-05-22 00:21:07'),
(212, 'Untuk Indonesia', NULL, 23, '2017-05-22 00:21:23', '2017-05-22 00:21:23'),
(213, 'T.G.I. Friday', NULL, 25, '2017-05-22 00:24:24', '2017-05-22 00:24:24'),
(214, 'Karena Kusuka Dirimu', NULL, 25, '2017-05-22 00:24:31', '2017-05-22 00:24:31'),
(215, 'Tunjukkan Cintamu', NULL, 25, '2017-05-22 00:24:48', '2017-05-22 00:24:48'),
(216, 'Jadi Gila', NULL, 25, '2017-05-22 00:24:55', '2017-05-22 00:24:55'),
(217, 'Bosan', NULL, 25, '2017-05-22 00:25:11', '2017-05-22 00:25:11'),
(218, 'GOD', NULL, 25, '2017-05-22 00:25:19', '2017-05-22 00:25:19'),
(219, 'Budak Cinta', NULL, 25, '2017-05-22 00:25:35', '2017-05-22 00:25:35'),
(220, 'Ratu Lebah', NULL, 25, '2017-05-22 00:25:42', '2017-05-22 00:25:42'),
(221, 'P.S.K.', NULL, 25, '2017-05-22 00:25:56', '2017-05-22 00:25:56'),
(222, 'Bukan Superstar', NULL, 24, '2017-05-22 00:25:58', '2017-05-22 00:25:58'),
(223, 'Goyang Duyu', NULL, 24, '2017-05-22 00:26:12', '2017-05-22 00:26:12'),
(224, 'Piano', NULL, 25, '2017-05-22 00:26:16', '2017-05-22 00:26:16'),
(225, 'Maramaramara', NULL, 24, '2017-05-22 00:26:26', '2017-05-22 00:26:26'),
(226, 'Metal Vs. Dugem', NULL, 24, '2017-05-22 00:26:39', '2017-05-22 00:26:39'),
(227, 'Jatuh Cinta', NULL, 24, '2017-05-22 00:26:49', '2017-05-22 00:26:49'),
(228, 'Jangan Ganggu', NULL, 24, '2017-05-22 00:27:38', '2017-05-22 00:27:38'),
(229, 'Pacarku Superstar', NULL, 24, '2017-05-22 00:27:50', '2017-05-22 00:27:50'),
(230, 'Tu Wa Ga Pat', NULL, 24, '2017-05-22 00:27:59', '2017-05-22 00:27:59'),
(231, 'Burkat (Feat. Chrisye)', NULL, 24, '2017-05-22 00:28:11', '2017-05-22 00:28:11'),
(232, 'Jangan Piki-Piki', NULL, 24, '2017-05-22 00:28:23', '2017-05-22 00:28:23'),
(233, 'Pacaran Atau Nggak (T.T.N)', NULL, 24, '2017-05-22 00:30:07', '2017-05-22 00:30:07'),
(234, 'Ade', NULL, 24, '2017-05-22 00:30:18', '2017-05-22 00:30:18'),
(235, 'Cintaku Berat Di Ongkos', NULL, 24, '2017-05-22 00:30:35', '2017-05-22 00:30:35'),
(236, 'Angkat Dong', NULL, 24, '2017-05-22 00:30:51', '2017-05-22 00:30:51'),
(237, 'Dangdut Is The Music Of My Country', NULL, 24, '2017-05-22 00:31:08', '2017-05-22 00:31:08'),
(238, 'Air dan Api', NULL, 26, '2017-05-22 00:33:29', '2017-05-22 00:33:29'),
(239, 'Piknik ''72', NULL, 26, '2017-05-22 00:33:44', '2017-05-22 00:33:44'),
(240, 'Rumah Yang Yahud', NULL, 26, '2017-05-22 00:34:10', '2017-05-22 00:34:10'),
(241, 'Mobil Balap', NULL, 26, '2017-05-22 00:34:22', '2017-05-22 00:34:22'),
(242, 'Jauh', NULL, 26, '2017-05-22 00:34:30', '2017-05-22 00:34:30'),
(243, 'Hai Monas', NULL, 26, '2017-05-22 00:34:40', '2017-05-22 00:34:40'),
(244, 'Towal Towel', NULL, 26, '2017-05-22 00:34:50', '2017-05-22 00:34:50'),
(245, 'Selalu', NULL, 26, '2017-05-22 00:34:59', '2017-05-22 00:34:59'),
(246, 'Johan dan Enny', NULL, 26, '2017-05-22 00:35:12', '2017-05-22 00:35:12'),
(247, 'Warna Warni Dunia', NULL, 28, '2017-05-22 00:35:18', '2017-05-22 00:35:18'),
(248, 'Pandangan Pertama', NULL, 28, '2017-05-22 00:35:27', '2017-05-22 00:35:27'),
(249, 'Posesif', NULL, 26, '2017-05-22 00:35:30', '2017-05-22 00:35:30'),
(250, 'Hanya Untukmu', NULL, 28, '2017-05-22 00:35:39', '2017-05-22 00:35:39'),
(251, 'Curi-Curi Pandang', NULL, 26, '2017-05-22 00:35:44', '2017-05-22 00:35:44'),
(252, 'D'' Inspiration', NULL, 28, '2017-05-22 00:35:47', '2017-05-22 00:35:47'),
(253, 'Jikalau', NULL, 26, '2017-05-22 00:35:56', '2017-05-22 00:35:56'),
(254, 'Aku Rela', NULL, 26, '2017-05-22 00:36:06', '2017-05-22 00:36:06'),
(255, 'Kembali', NULL, 28, '2017-05-22 00:36:08', '2017-05-22 00:36:08'),
(256, 'Sepi', NULL, 26, '2017-05-22 00:36:18', '2017-05-22 00:36:18'),
(257, 'Selamat Pagi', NULL, 28, '2017-05-22 00:36:24', '2017-05-22 00:36:24'),
(258, 'Auramu', NULL, 28, '2017-05-22 00:36:32', '2017-05-22 00:36:32'),
(259, 'Dia Adalah Pusaka Sejuta Umat Manusia Yang Ada Di Seluruh Dunia', NULL, 26, '2017-05-22 00:36:32', '2017-05-22 00:36:32'),
(260, 'Senang Bersamamu', NULL, 26, '2017-05-22 00:36:42', '2017-05-22 00:36:42'),
(261, 'Let Me Be', NULL, 28, '2017-05-22 00:36:48', '2017-05-22 00:36:48'),
(262, 'Warnai Malam Ini', NULL, 28, '2017-05-22 00:36:59', '2017-05-22 00:36:59'),
(263, 'Nothing Lasts Forever', NULL, 28, '2017-05-22 00:37:47', '2017-05-22 00:37:47'),
(264, 'Lagu Untuk Riri', NULL, 28, '2017-05-22 00:38:09', '2017-05-22 00:38:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `email`, `password`, `remember_token`, `role`, `photo_id`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'administrator', '-', 'admin@inmuse.com', '$2y$10$XkjNOtlXEASwuSj4fI21jO/9oyBAf3gMxJknuA3AEZ5nK0Eahdyj.', 'bxD2z3HMPThzSxc0ovwZO3Mfs6LwLmvuQDwIjlpHPAekQY7XtKLBuhNOghLj', 'admin', NULL, NULL, '2017-05-22 19:42:33'),
(2, 'qwe', 'qwe', '123', 'qwe@qwe', '$2y$10$agCSyRSYPhSloZbp8SpfEOsEEL79w0S8MMRdI9iMw8jPZmzfZX7rq', NULL, 'user', NULL, '2017-05-18 00:18:44', '2017-05-18 00:18:44'),
(5, 'qwe', 'qwe1', '123', 'qwe@qwe1', '$2y$10$Zzce/eePtFu2DnuVuTUYseTKbnjWJQ/EB7NtHM9iBQrT1RJmItAGy', NULL, 'user', NULL, '2017-05-18 00:22:07', '2017-05-18 00:22:07'),
(6, 'Desy ', 'desyrahmi', '-', 'desy@gmail.com', '$2y$10$Xy0GtZXRNpVGWUmRNitWVOc4RfUJUuKLQQ9FsqSBpeglyIFv34j26', 'SlRGJi8tfWJmv6kXYgAhIZ3tlM5lHgilzT42pDK8bjkJkD3Rym6rwDL280OT', 'user', 13, '2017-05-18 00:25:24', '2017-05-22 19:52:10'),
(7, 'Raras Anggita', 'rarasang', '-', 'raras@gmail.com', '$2y$10$kG1Q5ehTo0obm0WQMtU3c.GAjKU9lPfIy64VaaCY0a/ddUQ7aUHYe', 'N0Ramlf9RqUYduLvDnWOQ67zkPBQeJcLveAEktfUZ7dXqsgz920sWv2gw4Px', 'user', 1, '2017-05-18 09:26:54', '2017-05-22 01:58:43'),
(8, 'hilma', 'hilma', '9183', 'hilma@gmail.com', '$2y$10$q6RiKUWCGqmIAFgecNYkFOWgB/H6Ej6HZUf0K3z5/IP/PANDVeMRm', NULL, 'user', NULL, '2017-05-21 23:31:55', '2017-05-21 23:31:55'),
(14, 'rani', 'rani', '1234', 'rani@gmail.com', '$2y$10$EWOPgFqsqz.mLBCMvw4UwuGVuHwD.K3DYOevTnNGhSI161y3V5v9K', '7q5wdsb1SQ0uptRA9JwnKTmi7MyLWSwisS5oXMFrrveteZPow7bUru7MICrx', 'user', 4, '2017-05-21 23:48:27', '2017-05-22 01:09:41'),
(15, 'Dewangga', 'dewangga', '-', 'dewangga@gmail.com', '$2y$10$9oyeOQHFEmQoF0olCFwUe.b6dZpCGujtBgtn6docf5zkN9hwdH2lS', '5CFlqhzDXUqX2INQa3Ox4lL2EQmfQTHhu1onlMEf0cxXxUBPLK99dMoVPX7j', 'user', 2, '2017-05-22 01:00:40', '2017-05-22 01:11:04'),
(16, 'Glleen Allan M', 'glleena', '08123456789', 'aglleen@yahoo.com', '$2y$10$j4x2zzJfj3/eZaBg7zsS0ew2c9kzdIq4ij2q0XwWC/cY5qXzrArkS', '2b4lbvW9sSHea2JZSok63RRoqjSSqXSKvxCd5RWnHVgqjQtygej99XCegiX5', 'user', 14, '2017-05-22 21:26:39', '2017-05-22 21:41:57'),
(17, 'Rezky', 'Almsyah', '085718246369', 'rezkyal2@gmail.com', '$2y$10$DWWrhx0HAZaBEDZMPt7md.cSBRudtyU9uw9S4LMjJd5Cjpm8hyR3C', 'BsVRybUmBk1haGN3aEMY0GsbIitYTQPXEvnxpT6boLIXJwIQfGOEnr2XSb6R', 'user', 15, '2017-05-22 21:26:55', '2017-05-22 21:41:11'),
(18, 'Aditya Wicaksono', 'dtywcksnndrwn', '+6281232867191', 'tida_gelem@yahoo.com', '$2y$10$N9PegoKIa1.HdBCDeYfEkeaC/9s5eflSJGRdMK5ksIMxk/tVo15la', 'PKSt8iliCpNQP7VvcgoQwXcPwwJfcjGa1aELGA5ZnmDmx1uryvHuVt4B1X5X', 'user', 16, '2017-05-22 21:38:47', '2017-05-22 21:41:40'),
(19, 'Rizky Fenaldo', 'Maulana', '082338577227', 'rizkyfenaldoo@gmail.com', '$2y$10$5jC2nUtWjSlZtcJmRO2JIuYbRLj11dQw31r0bAMTjuFEoe/eW6i/O', 'yMqo9NNp8VaYOSHUmA8XeXoF6kandSws9FCq8YpuqBAG2LyVHWUlBcXKXgwn', 'user', 17, '2017-05-22 21:42:18', '2017-05-22 21:55:49'),
(20, 'Faris Salbari', 'farisa', '081727272727', 'faris@gmail.com', '$2y$10$ehQG4aTOCRO9xOdqFCDOoOhH0J2xku/eVAdMe.HrL99FK2djhFN9m', '9cqFBVdBFMtCrXWwBCoya03QOwZ2yA0qCw6QZqxoAKa6F7xpsEhTaLEnTr5c', 'user', 18, '2017-05-22 21:43:07', '2017-05-22 21:58:35'),
(21, 'Firman Maulana', 'firmanmm', '+6288801415', 'maulana.firman56@rendoru.com', '$2y$10$gOzC7RYGR2JkSD3xdZQpSewzPlDjoG1b4JwukA3qCheb3ZhsLznq2', 'zdCCiJy1Gn23ayFTQGOCN4v53M6oSbOvl5xLLBbuCLeQd3Phc45J2L5tfS6q', 'user', 19, '2017-05-22 21:44:10', '2017-05-22 21:49:18'),
(22, 'Hamka Aminullah', 'hamkaka22', '0897868584838', 'hamkaka22@gmail.com', '$2y$10$TRwSYBsk0JFw.DI8tkYed.A.EsxnCOaLvCNCBN5.g9Oq6ERp8cnBy', '0qunjFRDD3q3ic9LeedQDZ2HS3AvVfYJlRAr7HmRUcTC7FFcsklQG2zT7y6e', 'user', 20, '2017-05-22 21:56:48', '2017-05-22 21:59:41'),
(23, 'Danis', 'Danis', '081235563169', 'asaddhana@gmail.com', '$2y$10$mkBA1KoXF6mYeWoaqIddeeXUe4zNiw4izMQrMQMOW98HwR.T9TWoC', 'io05lfiK5D0MXYsADhgUmeUKg0PrXPfV4gQbeclm188FrmIwJA4l5ZMyo760', 'user', 21, '2017-05-22 22:21:16', '2017-05-22 22:29:20'),
(24, 'yoona', 'yoona', '085850059599', 'cp.hikmawan@gmail.com', '$2y$10$Ip/Iyh7pDcftfCq1vFMRHeUoIPc3WN/EUStPZWl1ICtnyX0drtj6W', NULL, 'user', NULL, '2017-05-22 23:01:20', '2017-05-22 23:01:20'),
(25, 'nakula', 'nakula', '085850059599', 'nasa.nakula@gmail.com', '$2y$10$CttMKq5sHYddMD9.0TQsguaIWOfigpv.KA9XnWoGwyPQIUfwdMaWe', 'kyBlP8QkNDOUOAiQ4H7keIWKHKjvf4IanY6p9gGJgOJ6srySFRjXN6catIWb', 'user', 22, '2017-05-22 23:03:44', '2017-05-22 23:04:49'),
(26, 'coba', 'coba', '08664323245', 'coba@gmail.com', '$2y$10$MuPil2GAZIdsCUVcgPWzo.8rZPNqvNEL4FtAyNv7GbJhCt5mv8heu', 'Og4VFyJ8B2ircSOYsh8jSQXJSXF73hyxx5Wp7XFgfONg9ONJDadqXWjFZk83', 'user', 23, '2017-05-22 23:45:08', '2017-05-22 23:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
 ADD PRIMARY KEY (`id`), ADD KEY `reviews_album_id_foreign` (`album_id`), ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
 ADD PRIMARY KEY (`id`), ADD KEY `songs_album_id_foreign` (`album_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_photo_id_foreign` (`photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=265;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
ADD CONSTRAINT `reviews_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`),
ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
ADD CONSTRAINT `songs_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
