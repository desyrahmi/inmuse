-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:06 PM
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
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_username_unique` (`username`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_photo_id_foreign` (`photo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
ADD CONSTRAINT `users_photo_id_foreign` FOREIGN KEY (`photo_id`) REFERENCES `photos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
