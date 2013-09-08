-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 Eyl 2013, 18:27:50
-- Sunucu sürümü: 5.5.32
-- PHP Sürümü: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `expublic`
--
CREATE DATABASE IF NOT EXISTS `expublic_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `expublic_db`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'admin@expublic.com', 'exp_12345');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `g_plus` text NOT NULL,
  `skype` text NOT NULL,
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`contact_id`, `facebook`, `twitter`, `g_plus`, `skype`, `address`, `phone`, `email`) VALUES
(1, 'sample face2', 'sample twitter2', 'sample gplus2', 'sample skype2', 'sample address2', 'sample phone2', 'sample email2');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `headline`
--

CREATE TABLE IF NOT EXISTS `headline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `headline`
--

INSERT INTO `headline` (`id`, `title`) VALUES
(1, 'sample item');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `service_icon` text NOT NULL,
  `service_title` text NOT NULL,
  `service_detail` text NOT NULL,
  `service_css` text NOT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `service`
--

INSERT INTO `service` (`service_id`, `service_icon`, `service_title`, `service_detail`, `service_css`) VALUES
(3, 'icon-desktop', 'hizmet başlık', 'hizmet detayı', 'hizmet-baslik');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_detail`
--

CREATE TABLE IF NOT EXISTS `team_detail` (
  `team_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_title` text NOT NULL,
  `team_detail` text NOT NULL,
  PRIMARY KEY (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `team_detail`
--

INSERT INTO `team_detail` (`team_id`, `team_title`, `team_detail`) VALUES
(6, 'yeni isim3', 'yeni pozisyon3');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `team_photo`
--

CREATE TABLE IF NOT EXISTS `team_photo` (
  `team_id` int(11) NOT NULL,
  `team_photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_big_photo` text NOT NULL,
  `team_thumb_photo` text NOT NULL,
  PRIMARY KEY (`team_photo_id`),
  KEY `team_id` (`team_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Tablo döküm verisi `team_photo`
--

INSERT INTO `team_photo` (`team_id`, `team_photo_id`, `team_big_photo`, `team_thumb_photo`) VALUES
(6, 11, 'assets/images/team/24142_7023.jpg', 'assets/images/team/thumb/24142_7023_thumb.jpg');

-- --------------------------------------------------------

--
-- Görünüm yapısı durumu `team_view`
--
CREATE TABLE IF NOT EXISTS `team_view` (
`team_id` int(11)
,`team_title` text
,`team_detail` text
,`team_photo_id` int(11)
,`team_big_photo` text
,`team_thumb_photo` text
);
-- --------------------------------------------------------

--
-- Görünüm yapısı `team_view`
--
DROP TABLE IF EXISTS `team_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`expublic`@`localhost` SQL SECURITY DEFINER VIEW `team_view` AS select `team_detail`.`team_id` AS `team_id`,`team_detail`.`team_title` AS `team_title`,`team_detail`.`team_detail` AS `team_detail`,`team_photo`.`team_photo_id` AS `team_photo_id`,`team_photo`.`team_big_photo` AS `team_big_photo`,`team_photo`.`team_thumb_photo` AS `team_thumb_photo` from (`team_detail` join `team_photo`) where (`team_detail`.`team_id` = `team_photo`.`team_id`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `team_photo`
--
ALTER TABLE `team_photo`
  ADD CONSTRAINT `team_photo_ibfk_1` FOREIGN KEY (`team_id`) REFERENCES `team_detail` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
