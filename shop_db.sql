-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 08 Cze 2017, 18:49
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `shop_wheels`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `brands`
--

INSERT INTO `brands` (`id`, `brand_name`) VALUES
(1, 'BBS'),
(2, 'OZ'),
(3, 'VOSSEN'),
(4, 'Enkei'),
(6, 'Motegi Racing');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `images`
--

CREATE TABLE `images` (
  `id_img` int(255) NOT NULL,
  `id_product` int(255) NOT NULL,
  `url_img` varchar(9999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `images`
--

INSERT INTO `images` (`id_img`, `id_product`, `url_img`) VALUES
(1, 107, 'assets/img/products/b4cUqMC-PIc.jpg'),
(2, 107, 'assets/img/products/c_NcWxni684.jpg'),
(3, 114, 'assets/img/products/1d8c1272-b4b4-3900-883c-57edfe76bc7e.jpg'),
(4, 114, 'assets/img/products/1JNA3IPUnE0.jpg'),
(5, 115, 'assets/img/products/K7OdvmHOyYQ.jpg'),
(6, 115, 'assets/img/products/lNsQHZKz614.jpg'),
(7, 5, 'assets/img/products/image-wheels-355-500x500.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `status` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `orderDate` datetime NOT NULL,
  `amount` int(20) NOT NULL,
  `shippedDate` datetime DEFAULT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `orders`
--

INSERT INTO `orders` (`id`, `status`, `customer_id`, `orderDate`, `amount`, `shippedDate`, `transaction_id`) VALUES
(1, 'new (undelivered)', 2, '2017-06-05 14:40:35', 788, NULL, 4),
(2, 'new (undelivered)', 2, '2017-06-05 14:59:50', 788, NULL, 5),
(4, 'new (undelivered)', 2, '2017-06-05 15:03:03', 878, NULL, 7),
(5, 'new (undelivered)', 2, '2017-06-05 15:03:58', 774, NULL, 8),
(6, 'new (undelivered)', 2, '2017-06-05 15:04:52', 892, NULL, 9),
(7, 'new (undelivered)', 4, '2017-06-05 15:10:05', 1562, NULL, 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` decimal(20,0) NOT NULL,
  `brand_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `quantity`, `price`, `brand_id`) VALUES
(5, 12, 1, '242', 4),
(5, 11, 1, '532', 0),
(6, 15, 2, '346', 7),
(6, 14, 1, '200', 0),
(7, 15, 1, '346', 7),
(7, 14, 1, '200', 0),
(7, 12, 2, '242', 4),
(7, 11, 1, '532', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `productCode` int(15) NOT NULL,
  `brand_id` int(30) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productDescription` text NOT NULL,
  `quantityInStock` smallint(6) NOT NULL,
  `buyPrice` decimal(10,2) NOT NULL,
  `warehouseCode` varchar(50) NOT NULL,
  `main_img` mediumtext,
  `its_recommended` tinyint(1) NOT NULL,
  `diameter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`productCode`, `brand_id`, `productName`, `productDescription`, `quantityInStock`, `buyPrice`, `warehouseCode`, `main_img`, `its_recommended`, `diameter`) VALUES
(19, 2, 'MR131', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ducimus et laborum, magnam? Aliquam quo ad delectus, quos ex corporis suscipit tempore minima error, provident magnam id hic odit. Iure!', 20, '250.00', '1', 'assets/img/products/back-top.png', 0, 18),
(20, 1, 'model1', 'Lorem mvklxmkbdf sgdshdhhsdhsdhshsdh', 25, '0.00', '1', 'assets/img/products/bbs_cs5_bs_pdpfull.jpg', 0, 19),
(21, 4, 'RKD 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ducimus et laborum, magnam? Aliquam quo ad delectus, quos ex corporis suscipit tempore minima error, provident magnam id hic odit. Iure!', 22, '345.00', '1', 'assets/img/products/enkei-draco-anth_lg_super.jpg', 0, 18),
(22, 6, 'RS3', 'Lorem mvklxmkbdf sgdshdhhsdhsdhshsdh', 35, '340.00', '1', 'assets/img/products/motegi_mr131tracklite_b_pdpfull.jpg', 0, 20),
(23, 3, 'cv3', 'AmerykaÅ„ska firma Vossen Wheels od ponad 25 lat stara siÄ™ dostarczaÄ‡ najwyÅ¼szej jakoÅ›ci produkty, serwis oraz nowoczesny design. DoÅ›wiadczenie, wiedza oraz ogromna pasja napÄ™dzajÄ…ca inÅ¼ynierÃ³w firmy pozwala im na tworzenie najbardziej innowacyjnych produktÃ³w w branÅ¼y.', 12, '690.00', '1', 'assets/img/products/vossen1.png', 0, 19),
(25, 2, 'ALLEGGERITA HLT', 'OZ Racing to wÅ‚oska legenda motoryzacji. PowstaÅ‚a w 1971 roku firma staÅ‚a siÄ™ liderem w produkcji lekkich obrÄ™czy do sportÃ³w motorowych zaopatrujÄ…c praktycznie wszystkie serie wyÅ›cigowe.  Zdobyte na torach i rajdowych trasach doÅ›wiadczenie OZ przeÅ‚oÅ¼yÅ‚ na produkcjÄ™ felg aluminiowych do samochodÃ³w ulicznych. Firma posiada bardzo szerokÄ… ofertÄ™ podzielonÄ… na kilka serii. W najwyÅ¼szych modelach felg OZ wykorzystuje opatentowanÄ… technologiÄ™ produkcji HLT ktÃ³ra dziÄ™ki uÅ¼yciu odpowiedniego materiaÅ‚u i metody produkcji pozwala na znacznÄ… redukcjÄ™ masy obrÄ™czy. ZnacznÄ… zaletÄ… obrÄ™czy OZ jest fakt, Å¼e od poczÄ…tku do koÅ„ca projektowane i produkowane sÄ… w siedzibie firmy we WÅ‚oszech. Wszystkie modele felg OZ kompatybilne sÄ… z czujnikami ciÅ›nienia TPMS i oponami typu Run Flat.', 20, '370.00', '1', 'assets/img/products/oz_allerghlt_orng_pdpfull.jpg', 1, 18),
(26, 3, 'CH', 'AmerykaÅ„ska firma Vossen Wheels od ponad 25 lat stara siÄ™ dostarczaÄ‡ najwyÅ¼szej jakoÅ›ci produkty, serwis oraz nowoczesny design. DoÅ›wiadczenie, wiedza oraz ogromna pasja napÄ™dzajÄ…ca inÅ¼ynierÃ³w firmy pozwala im na tworzenie najbardziej innowacyjnych produktÃ³w w branÅ¼y.', 16, '1256.00', '1', 'assets/img/products/vossen2.png', 1, 22),
(27, 1, 'CH-R', 'Felgi firmy BBS to istna legenda motoryzacji. Produkowane od ponad 35 lat obrÄ™cze od zawsze byÅ‚y synonimem najwyÅ¼szej jakoÅ›ci wykonania, lekkoÅ›ci i wytrzymaÅ‚oÅ›ci. Firma swoje doÅ›wiadczenie w produkcji felg potwierdziÅ‚a wieloletnim uczestnictwem w wyÅ›cigach najrÃ³Å¼niejszych klas.  CaÅ‚y proces projektowania i produkcji obrÄ™czy odbywa siÄ™ w Niemczech co dodatkowo gwarantuje ich najwyÅ¼szÄ… jakoÅ›Ä‡.', 24, '533.00', '1', 'assets/img/products/bbs_co_bs_pdpfull.jpg', 1, 19);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `amount` int(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `transactions`
--

INSERT INTO `transactions` (`id`, `customer_id`, `amount`, `time`) VALUES
(4, 2, 788, '2017-06-05 14:40:35'),
(5, 2, 788, '2017-06-05 14:59:50'),
(6, 2, 546, '2017-06-05 15:02:24'),
(7, 2, 878, '2017-06-05 15:03:03'),
(8, 2, 774, '2017-06-05 15:03:58'),
(9, 2, 892, '2017-06-05 15:04:52'),
(10, 4, 1562, '2017-06-05 15:10:05');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`, `register_date`) VALUES
(1, 'Serhii', 'bikeadmin@gmail.com', '$2y$13$9D3GJSmCLn5xFqCAkaAU8.0sAoCNrQcAYD43Mn0uK5YulT/cRc.e6', 'user', '2017-06-01'),
(2, 'admin1', 'root@g.g', '$2y$13$FTOj1K4v1HS.Et8RkdE3BeHIG8Km28T1RIiIdCfoQqiS6xlMmDk6m', 'admin', '2017-06-02'),
(4, 'user1', 'user1@g.g', '$2y$13$vKhEIrMaEZNsz3MN3nXWi.mFT7xEo.gfQdWEz7Mski4iUV3Cm4.zS', 'user', '2017-06-02');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `warehouses`
--

CREATE TABLE `warehouses` (
  `warehouseCode` varchar(10) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `warehouses`
--

INSERT INTO `warehouses` (`warehouseCode`, `city`, `phone`, `addressLine1`, `country`) VALUES
('1', 'City1', '123456789', 'adres', 'Poland');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productCode`),
  ADD KEY `warehouseCode` (`warehouseCode`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`warehouseCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `images`
--
ALTER TABLE `images`
  MODIFY `id_img` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `productCode` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT dla tabeli `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`id`);

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`warehouseCode`) REFERENCES `warehouses` (`warehouseCode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
