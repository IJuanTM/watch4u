-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 04 jul 2019 om 12:06
-- Serverversie: 10.2.23-MariaDB-cll-lve
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u37477p32749_watch4u`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE `order` (
  `idorder` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `date` datetime NOT NULL,
  `price_ex` decimal(8,2) NOT NULL,
  `price_inc` decimal(8,2) NOT NULL,
  `status` enum('open','succes','on-hold','canceled') NOT NULL DEFAULT 'open'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `order`
--

INSERT INTO `order` (`idorder`, `iduser`, `date`, `price_ex`, `price_inc`, `status`) VALUES
(1, 1, '2019-07-03 20:34:23', '748.33', '898.00', 'succes'),
(2, 1, '2019-07-01 08:44:13', '374.17', '449.00', 'on-hold'),
(3, 1, '2019-07-24 09:41:22', '374.17', '449.00', 'open'),
(4, 3, '2019-07-01 08:44:13', '1122.50', '1379.00', 'canceled'),
(5, 5, '2019-07-04 02:31:20', '374.17', '449.00', 'open'),
(6, 6, '2019-07-03 23:47:37', '374.17', '449.00', 'open'),
(7, 4, '2019-07-03 20:34:23', '374.17', '449.00', 'open');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `orderline`
--

CREATE TABLE `orderline` (
  `idorderproduct` int(10) NOT NULL,
  `idorder` int(10) NOT NULL,
  `idproduct` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `orderline`
--

INSERT INTO `orderline` (`idorderproduct`, `idorder`, `idproduct`, `amount`, `price`, `total`) VALUES
(1, 1, 5, 2, '898.00', '898.00'),
(2, 2, 7, 1, '449.00', '449.00'),
(3, 3, 4, 1, '449.00', '449.00'),
(4, 4, 13, 3, '1379.00', '1397.00'),
(5, 5, 9, 1, '449.00', '449.00'),
(6, 6, 8, 1, '449.00', '449.00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `idproduct` int(10) NOT NULL,
  `idcatagory` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `amount` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`idproduct`, `idcatagory`, `name`, `description`, `price`, `image`, `amount`) VALUES
(1, 1, 'Apple Watch 4 Black', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/black.png', 203),
(2, 2, 'Apple Watch 4 Nike Silver', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/nike_silver.png', 508),
(3, 2, 'Apple Watch 4 Pink', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/pink.png', 154),
(4, 2, 'Apple Watch 4 White', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/white.png', 486),
(5, 1, 'Apple Watch 4 Nike Gray', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/nike_gray.png', 205),
(6, 2, 'Apple Watch 4 Sport Silver', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/sport/silver.png', 24),
(7, 2, 'Apple Watch 4 Sport Pink', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/sport/pink.png', 65),
(8, 1, 'Apple Watch 4 Sport Black', 'The Apple Watch 4 is the newest apple watch in the series. It is stylish, easy to use and has a large amount of functions build in.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '449.99', './img/watches/brands/apple/watch_4/sport/black.png', 48),
(9, 2, 'Apple Watch 3 White', 'The Apple Watch 3 is an older model from the series, but is still a very good smartwatch. It has many functions and looks very nice.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '329.99', './img/watches/brands/apple/watch_3/white.png', 11),
(10, 1, 'Apple Watch 3 Black', 'The Apple Watch 3 is an older model from the series, but is still a very good smartwatch. It has many functions and looks very nice.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '329.99', './img/watches/brands/apple/watch_3/black.png', 100),
(11, 1, 'Apple Watch 3 Nike Black', 'The Apple Watch 3 is an older model from the series, but is still a very good smartwatch. It has many functions and looks very nice.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '329.99', './img/watches/brands/apple/watch_3/nike_black.png', 854),
(12, 2, 'Apple Watch 3 Nike Silver', 'The Apple Watch 3 is an older model from the series, but is still a very good smartwatch. It has many functions and looks very nice.\r\n\r\nA thing to mind is that the Apple watches can only be used in combination with and IPhone.', '329.99', './img/watches/brands/apple/watch_3/nike_silver.png', 323),
(13, 3, 'Samsung Galaxy Watch Black', 'The Samsung Galaxy watches are watches with a wide range of functions. From listening music to playing games. It also features a wide range of support for multiple google apps like: Gmail, Google Agenda and YouTube. Aswell as messaging apps like WhatsApp.\r\n\r\nThe Samsung Galaxy watches can be used in combination with every android phone. But will offer extra options when used with a Samsung phone.', '279.99', './img/watches/brands/samsung/galaxy/42mm/black.png', 598),
(14, 4, 'Samsung Galaxy Watch Pink', 'The Samsung Galaxy watches are watches with a wide range of functions. From listening music to playing games. It also features a wide range of support for multiple google apps like: Gmail, Google Agenda and YouTube. Aswell as messaging apps like WhatsApp.\r\n\r\nThe Samsung Galaxy watches can be used in combination with every android phone. But will offer extra options when used with a Samsung phone.', '249.99', './img/watches/brands/samsung/galaxy/42mm/pink.png', 675);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product_category`
--

CREATE TABLE `product_category` (
  `idcategory` int(10) NOT NULL,
  `parent_id` int(10) NOT NULL,
  `brand` varchar(75) NOT NULL,
  `title` enum('Men','Women','Kids') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `product_category`
--

INSERT INTO `product_category` (`idcategory`, `parent_id`, `brand`, `title`) VALUES
(1, 1, 'Apple', 'Men'),
(2, 2, 'Apple', 'Women'),
(3, 3, 'Samsung', 'Men'),
(4, 4, 'Samsung', 'Women'),
(5, 5, 'Louis Vuitton', 'Men'),
(6, 6, 'Louis Vuitton', 'Women'),
(7, 7, 'Micheal Kors', 'Men'),
(8, 8, 'Micheal Kors', 'Women'),
(9, 9, 'Garmin', 'Men'),
(10, 10, 'Garmin', 'Women'),
(11, 11, 'Garmin', 'Kids'),
(12, 12, 'Polar', 'Men'),
(13, 13, 'Polar', 'Women'),
(14, 14, 'Casio', 'Men'),
(15, 15, 'Casio', 'Women'),
(16, 16, 'FitBit', 'Men'),
(17, 17, 'FitBit', 'Women'),
(18, 18, 'FitBit', 'Kids'),
(19, 19, 'Fossil', 'Men'),
(20, 20, 'Fossil', 'Women'),
(21, 21, 'Amazfit', 'Men'),
(22, 22, 'Amazfit', 'Women'),
(23, 23, 'Mobvoi', 'Men'),
(24, 24, 'Mobvoi', 'Women'),
(25, 25, 'Misfit', 'Men'),
(26, 26, 'Misfit', 'Women'),
(27, 27, 'Connected', 'Kids');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(10) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `infix` varchar(10) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `postalcode` varchar(6) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `userrole` enum('Root','Admin','Customer','') NOT NULL,
  `date` varchar(25) NOT NULL,
  `code` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`iduser`, `firstname`, `infix`, `lastname`, `email`, `password`, `phone`, `address`, `postalcode`, `city`, `userrole`, `date`, `code`) VALUES
(1, 'Richard', 'van de', 'Kooij', 'rvdkooij@live.nl', '$2y$10$fJnYyYU120Uce7Ms2N5K1.ljazbapaXi.ZBSbNppU5auRhnYNsgwy', '622265556', 'Floventhof 1', '3813HB', 'Amersfoort', 'Root', '21-06-2019, 23:46:06', '0'),
(2, 'Mijn', 'naam is', 'Henk', 'iwan2510@gmail.com', '$2y$10$GpG4xu.vrQrcPvlGh0NPLOlyN0NrfKuJoHBe69reodz7VqnTYbyIe', '', '', '', '', 'Root', '25-06-2019, 10:37:36', '0'),
(3, 'Iwan', 'van der', 'Wal', 'iwanvdwal2001@gmail.com', '$2y$10$lXedUFNy.A8LAS/16CZks.DCdobutoWRRBi101DTr1Pl8mGje.vIW', '', '', '', '', 'Admin', '26-06-2019, 11:38:08', '0'),
(4, 'Ridi', '', 'Cage', 'ridicage@gmail.com', '$2y$10$nVpYFHISd9gqrUXWzjTBRunLgLKIYe3HG7wvcyV19FDfvCLIigRNe', '', '', '', '', 'Customer', '28-06-2019, 12:14:15', '0'),
(5, 'Sander', '', 'Molenaar', 'sander1995175@gmail.com', '$2y$10$vTTffqQ1PEcrgUj0fmXeieWImF1vsDFIOiz/E3AlxcdnhRgkhnaEW', '', '', '', '', 'Customer', '04-07-2019, 01:20:04', '0'),
(6, 'Lia', '', 'Lamme', 'edenlia@hotmail.com', '$2y$10$AJ0FCev9VMTfTqnBJUscPO49z/aOvFDmk/.vtGc5vYrJ0k5MZUIVK', '', '', '', '', 'Customer', '04-07-2019, 01:35:59', '0'),
(7, 'Test', '', 'Test', 'ridicage@outlook.com', '$2y$10$b9YfWWBTy7jE2QaujaTWCOso5U/OA2AxjTJ2qH2Dzbq5aJkhSvozq', '', '', '', '', 'Customer', '04-07-2019, 10:03:40', '0');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexen voor tabel `orderline`
--
ALTER TABLE `orderline`
  ADD PRIMARY KEY (`idorderproduct`),
  ADD KEY `idproduct` (`idproduct`),
  ADD KEY `idorder` (`idorder`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD KEY `idcatagory` (`idcatagory`);

--
-- Indexen voor tabel `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`idcategory`),
  ADD UNIQUE KEY `parent_id` (`parent_id`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `orderline`
--
ALTER TABLE `orderline`
  MODIFY `idorderproduct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `idproduct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `product_category`
--
ALTER TABLE `product_category`
  MODIFY `idcategory` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `iduser` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `orderline`
--
ALTER TABLE `orderline`
  ADD CONSTRAINT `idorder` FOREIGN KEY (`idorder`) REFERENCES `order` (`idorder`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idproduct` FOREIGN KEY (`idproduct`) REFERENCES `product` (`idproduct`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Beperkingen voor tabel `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `idcatagory` FOREIGN KEY (`idcatagory`) REFERENCES `product_category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
