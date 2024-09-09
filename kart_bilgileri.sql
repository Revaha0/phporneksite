-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Oca 2024, 20:31:18
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kart_bilgileri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kartlar`
--

CREATE TABLE `kartlar` (
  `kart_numarasi` int(9) NOT NULL,
  `kart_sahibi` varchar(150) NOT NULL,
  `son_kullanma_tarihi` varchar(10) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kartlar`
--

INSERT INTO `kartlar` (`kart_numarasi`, `kart_sahibi`, `son_kullanma_tarihi`, `cvv`) VALUES
(111111110, 'Revaha Öztekin', '01/2025', 999),
(123134670, 'Emre BilgiÜni', '04/2032', 418),
(128767398, 'Revaha Deneme ', '12/2030', 666),
(193290185, 'Rüveyda Mamak', '04/2024', 418),
(817230987, 'Nana Bal', '04/2028', 418);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kartlar`
--
ALTER TABLE `kartlar`
  ADD PRIMARY KEY (`kart_numarasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
