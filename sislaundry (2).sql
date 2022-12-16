-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 07:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sislaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`id`, `name`, `phone_number`, `email`, `address`, `registration_date`) VALUES
(1, 'Mujur Sihotang', '085341995516', 'mujursihotang@gmail.com', 'Jl Perumnas No 4', '2022-12-01'),
(2, 'Sadina Hasanah', '085240591592', 'sadinahasanah@gmail.com', 'Rt. 04/01 Guyangan Bangsri ', '2022-12-02'),
(3, 'Kajen Damanik', '088293256300', 'kajendamanik@gmail.com', 'Bintang Alam Blok F no 14 B', '2022-12-03'),
(4, 'Ratna Suartini', '085157856224', 'ratnasuartini@gmail.com', 'Jl. Surya Madya Kav A7', '2022-12-04'),
(5, 'Ilsa Nasyidah', '085251491760', 'ilsanasyidah@gmail.com', 'Jl.Rambutan Timur VIII no.226', '2022-12-05'),
(6, 'Karsana Nababan', '081340281523', 'karsananababan@gmail.com', 'Rt. 04/01 Guyangan Bangsri', '2022-12-06'),
(7, 'Rini Padmasari', '085341996689', 'rinipadmasari@gmail.com', 'Jl. Swadaya IV No4 Kel. Rawa Terate', '2022-12-07'),
(8, 'Hana Astuti', '085341996909', 'hanaastuti@gmail.com', 'Jl Letjen Haryono MT Kav 10', '2022-12-08'),
(9, 'Carla Andriani', '085341991263', 'carlaandriani@gmail.com', 'jalan dahlia gang jati 24B sukajadi', '2022-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `price`, `description`, `category`) VALUES
(1, '\r\nCUCI KERING 1 HARI\r\n', 3000, 'Layanan 1 Hari Selesai, Hanya Cuci,\r\nOne Machine One Customer\r\n', 'pakaian'),
(2, 'SETRIKA 1 HARI\r\n', 4500, '\r\nLayanan 1 Hari Selesai\r\nHanya Setrika\r\nOne Machine One Customer\r\n', 'pakaian'),
(3, 'CUCI + SETRIKA 1 HARI', 5500, 'Layanan 1 Hari Selesai, Pakaian Sudah disetrika One Machine One Customer\r\n', 'pakaian'),
(4, 'SELIMUT TEBAL', 22000, '\r\nLayanan 1 Hari Selesai\r\n', 'seprai'),
(5, 'SELIMUT TIPIS\r\n', 10000, 'Layanan 1 Hari Selesai', 'seprai'),
(6, '\r\nBEDCOVER\r\n', 25000, 'Layanan 1 Hari Selesai', 'seprai'),
(7, 'BONEKA BESAR', 35000, 'Layanan 1 Hari Selesai', 'boneka'),
(8, 'BONEKA SEDANG', 20000, 'Layanan 1 Hari Selesai', 'boneka'),
(9, 'BONEKA KECIL', 5000, 'Layanan 1 Hari Selesai', 'boneka');

-- --------------------------------------------------------

--
-- Stand-in structure for view `totalorder`
-- (See below for the actual view)
--
CREATE TABLE `totalorder` (
`transactions_id` int(11)
,`total` double
,`date_transaction` datetime
,`status` enum('SELESAI','MASUK','KELUAR')
);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transactions_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `costumers_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `date_transaction` datetime NOT NULL,
  `status` enum('SELESAI','MASUK','KELUAR') NOT NULL,
  `weight` float NOT NULL,
  `payment_method` enum('BAYAR DIAWAL','BAYAR NANTI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transactions_id`, `users_id`, `costumers_id`, `service_id`, `date_transaction`, `status`, `weight`, `payment_method`) VALUES
(1, 1, 1, 2, '2022-12-15 14:32:45', 'MASUK', 3, 'BAYAR DIAWAL'),
(2, 1, 2, 2, '2022-12-15 14:37:21', 'KELUAR', 2, 'BAYAR NANTI'),
(3, 1, 3, 8, '2022-12-15 14:38:12', 'SELESAI', 3, 'BAYAR DIAWAL'),
(4, 1, 2, 3, '2022-12-15 14:48:12', 'MASUK', 2, 'BAYAR DIAWAL'),
(5, 1, 4, 5, '2022-12-15 14:48:55', 'SELESAI', 2, 'BAYAR DIAWAL'),
(6, 1, 8, 2, '2022-12-16 04:12:58', 'MASUK', 3, 'BAYAR NANTI'),
(7, 1, 2, 2, '2022-12-16 04:40:38', 'MASUK', 3, ''),
(8, 1, 2, 2, '2022-12-16 04:41:14', 'MASUK', 3, ''),
(9, 1, 2, 2, '2022-12-16 04:41:33', 'MASUK', 3, ''),
(10, 1, 2, 1, '2022-12-16 05:06:07', 'MASUK', 3, 'BAYAR DIAWAL'),
(11, 1, 2, 1, '2022-12-16 05:07:45', 'SELESAI', 6, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `password` text NOT NULL,
  `roles` enum('SUPERADMIN','ADMIN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone_number`, `password`, `roles`) VALUES
(1, 'Ahmad Afrisal X', 'isal', '081340281527', '$2y$10$wIsepV/7eUvwvOy/AebEeOWNj9rrB00hSiBQHniDQ4x4ykA8R4lMK', 'SUPERADMIN'),
(2, 'fajar', 'fajar', '085157856223', '$2y$10$k7ajsc9RObM2BJVlauBsiOfaIX.ujm.t4HwDrnBi60n32pMZIULLy', 'ADMIN');

-- --------------------------------------------------------

--
-- Structure for view `totalorder`
--
DROP TABLE IF EXISTS `totalorder`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `totalorder`  AS SELECT `t`.`transactions_id` AS `transactions_id`, `s`.`price`* `t`.`weight` AS `total`, `t`.`date_transaction` AS `date_transaction`, `t`.`status` AS `status` FROM (`transactions` `t` join `service` `s` on(`t`.`service_id` = `s`.`id`))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transactions_id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `costumers_id` (`costumers_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transactions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_2` FOREIGN KEY (`costumers_id`) REFERENCES `costumers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
