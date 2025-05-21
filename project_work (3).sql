-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2024 at 05:21 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_work`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `a_id` int(11) NOT NULL,
  `a_username` varchar(20) NOT NULL,
  `a_password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`a_id`, `a_username`, `a_password`) VALUES
(1, 'uttam', '123'),
(2, 'harshvardhan', '777'),
(7, 'rushi', '555');

-- --------------------------------------------------------

--
-- Table structure for table `deta`
--

CREATE TABLE `deta` (
  `id` int(3) NOT NULL,
  `model` varchar(50) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `processer` varchar(100) NOT NULL,
  `ram_rom` varchar(50) NOT NULL,
  `camera` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deta`
--

INSERT INTO `deta` (`id`, `model`, `picture`, `price`, `processer`, `ram_rom`, `camera`) VALUES
(1, 'samsung galaxy S23 5G', 'uploads/samsung galaxy s23 5g.jpg', 59000, 'qualcomm snapdragon 8 Gen 2, octa core ', '8 256', '55'),
(2, 'samsung galaxy z fold 5 5G', 'uploads/samsung galaxy z fold 5 .jpg', 154999, 'qualcomm snapdragon 8 Gen 2, octa core, 3.36 GHZ', '12 256', '50'),
(3, 'samsung galaxy M14 5G', 'uploads/samsung galaxy m14.jpg', 8999, 'samsung exynos 1330,octa core 2.4GHZ', '6 128', '50'),
(4, 'redmi 13 5G', 'uploads/redmi 13 5g.jpg', 15499, 'qualcomm snapdragon 4 Gen 2,octa core, 2.2GHZ', '8 128', '50'),
(5, 'redmi note 13 5G', 'uploads/redmi note 13 5g.jpg', 20999, 'media tek dimensity, 6080 octa core, 2.4GHZ', '12 256', '108'),
(6, 'oppo F27 pro + 5G', 'uploads/oppo F27 Pro+ 5G.jpg', 27999, 'media tek dimensity 7050, octa core , 2.6GHZ', '8 256', '64'),
(7, 'oppo A3 pro 5G', 'uploads/oppo A3 Pro 5G.jpg', 19999, 'media tek 6300, octa core, 2.6GHZ', '8 256', '50'),
(8, 'oppo reno 10 pro 5G', 'uploads/oppo Reno 10 Pro 5G.jpg', 29999, 'qualcomm snapdragon 778G, octa core', '12 256', '50'),
(9, 'vivo y58 5G', 'uploads/vivo Y58 5G .jpg', 19499, 'qualcomm snapdragon 4 Gen 2,octa core, 2.2GHZ', '8 128', '50'),
(10, 'vivo t3x 5G', 'uploads/vivo T3x 5G.jpg', 16499, 'qualcomm snapdragon 6 Gen 1, octa core, 2.26 GHZ', '8 128', '50'),
(11, 'vivo y18', 'uploads/vivo Y18.jpg', 9999, 'media tek Hello G85, octa core, 2GHZ', '4 128', '50'),
(12, 'one plus nord CE4 5G', 'uploads/OnePlus Nord CE4 5G.jpg', 24999, 'qualcomm snapdragon 7+ Gen (4 nm), octa core, 2.4 GHZ', '8 128', '50'),
(13, 'one plus 12R 5G', 'uploads/OnePlus 12R 5G.jpg', 42999, 'qualcomm snapdragon 8 Gen 2', '8 256', '50'),
(14, 'oppo reno 12 pro 5G', 'uploads/oppo Reno 12 Pro 5G.jpg', 40999, 'media tek dimensity 7300, octa core', '12 512', '50'),
(15, 'xiaomi 14 civi 5G', 'uploads/Xiaomi 14 CIVI 5G.jpg', 69999, 'qualcomm snapdragon 8 Gen 3, octa core, 3.3 GHZ', '12 512', '50'),
(16, 'xiaomi 11i Hypercharge 5G', 'uploads/Xiaomi 11i HyperCharge 5G .jpg', 29999, 'media tek dimensity, 920 octa core, 2.5GHZ', '8 128', '108'),
(17, 'apple iphone 15', 'uploads/Apple iPhone 15 .jpg', 99290, 'apple A15 bionic chip, hexa core', '128', '12'),
(18, 'apple iphone 13', 'uploads/Apple iPhone 13 .jpg', 52090, 'apple A15 bionic chip, hexa core', '128', '12'),
(19, 'apple iphone 14', 'uploads/Apple iPhone 14.jpg', 71090, 'A15 bionic chip, Hexa core', '256', '12'),
(20, 'realme 11 pro 5G', 'uploads/realme 11 Pro 5G.jpg', 27999, 'media tek dimensity 7050, octa core 5G chipset, octa core, up to 2.6GHZ', '12 256', '100'),
(21, 'realme 12x 5G', 'uploads/realme 12x 5G.jpg', 17999, 'media tek dimensity 6100+, octa core, 2.2GHZ', '6 128', '50'),
(22, 'realme 9i 5G', 'uploads/realme 9i 5G.jpg', 19999, 'media tek dimensity 810, octa core, 2.4GHZ', '6 128', '50'),
(23, 'samsung galaxy S24 ultra 5G', 'uploads/SAMSUNG Galaxy S24 Ultra 5G.jpg', 129999, 'qualcomm snapdragon 8 Gen 3, octa core, 3.2GHZ', '12 256', '200'),
(35, 'oppo A17 ', 'uploads/oppo A17.jpg', 12500, 'media tek helio G35, octa core, 2.3GHz', '4 64', '50'),
(34, 'vivo V40', 'uploads/vivo V40.jpg', 41999, 'qualcomm snapdragon 7 gen 3,octa core,2.63 GHZ', '12 512', '50'),
(33, 'apple iphone 16 pro', 'uploads/Apple iphone 16 pro.jpg', 169900, 'a18 bionic chip', '1 TB', '48'),
(36, 'samsung galaxy F04', 'uploads/samsung galaxy F04.jpg', 9500, 'exynos 850, octa core, 2 GHz', '4 64', '50'),
(37, 'samsung galaxy z fold6', 'uploads/samsung galaxy z fold6.jpg', 200999, 'qualcomm snapdragon 8 gen 2,octa core, 3.3GHz', '12 1TB', '50'),
(38, 'one Plus 12', 'uploads/onePlus 12.jpg', 64999, 'qualcomm snapdragon 8 Gen 3,octa core', '12 256', '50'),
(39, 'realme 12 pro+', 'uploads/realme 12 pro+.jpg', 28999, 'snapdragon 7s Gen 2,octa core, 2.4 GHz', '12 256', '50');

-- --------------------------------------------------------

--
-- Table structure for table `place_order`
--

CREATE TABLE `place_order` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `model` varchar(50) NOT NULL,
  `product` varchar(50) NOT NULL,
  `price` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place_order`
--

INSERT INTO `place_order` (`id`, `name`, `address`, `contact`, `model`, `product`, `price`) VALUES
(7, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'samsung galaxy z fold 5 5G', 'uploads/samsung galaxy z fold 5 .jpg', 154999),
(5, 'rutvik', 'sardar chok, ahmadabad', '2143658709', 'apple iphone 15', 'uploads/Apple iPhone 15 .jpg', 99290),
(8, 'maharshi', 'vagheswari, porbandar', '987654210', 'one plus nord CE4 5G', 'uploads/OnePlus Nord CE4 5G.jpg', 24999),
(10, 'om', 'godhaniya college', '447834783', 'one plus 12R 5G', 'uploads/OnePlus 12R 5G.jpg', 42999),
(247, 'rushi', 'rajivnagar, porbandar', '1234567890', 'realme 12 pro+', 'uploads/realme 12 pro+.jpg', 28999),
(248, 'rushi', 'rajivnagar, porbandar', '1234567890', 'samsung galaxy S23 5G', 'uploads/samsung galaxy s23 5g.jpg', 59000),
(249, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(250, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(251, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(252, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(253, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(254, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(255, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999),
(256, 'ishan', 'madhapar chokdi, rajkot', '1234556760', 'vivo V40', 'uploads/vivo V40.jpg', 41999);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `city` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `surname`, `password`, `email`, `birthdate`, `city`, `contact`, `gender`, `address`) VALUES
(1, 'rushi', 'thanki', '912', 'rushi@gmail.com', '2004-12-09', 'porbandar', '1234567890', 'male', 'rajivnagar, porbandar'),
(2, 'maharshi', 'pandya', '2403', 'maharshi@gmail.com', '2005-03-24', 'porbandar', '987654210', 'male', 'vagheswari, porbandar'),
(3, 'rutvik', 'gotecha', '1708', 'rutvik@gmail.com', '2000-08-17', 'ahmadabad', '2143658709', 'male', 'sardar chok, ahmadabad'),
(4, 'ramesh', 'kodiatar', '1234', 'harsh@gmail.com', '2004-08-07', 'porbandar', '1234567890', 'male', 'gujrat'),
(5, 'ishan', 'thanki', '1004', 'ishan@gmail.com', '2004-04-10', 'rajkot', '1234556760', 'male', 'madhapar chokdi, rajkot'),
(6, 'maharshi', 'pandya', '243', 'maharshi@gmail.com', '2005-03-24', 'ahmadabad', '3343423323', 'male', 'vagheswari, porbandar'),
(7, 'hina', 'khunti', '2404', 'hina@gmail.com', '2003-05-24', 'porbandar', '63738484', 'female', 'godhaniya college'),
(9, 'om', 'solanki', '123', 'om@gmail.com', '2004-03-05', 'porbandar', '447834783', 'male', 'godhaniya college'),
(10, 'kinjal', 'shingrakhiya', '1105', 'kinjal@gmail.com', '2004-05-11', 'visavada', '73479458', 'female', 'm g road'),
(11, 'harshvardhan', 'purohit', '177', 'vardhan@gmail.com', '2004-07-17', 'mumbai', '1234567890', 'male', 'near suruchi school, porbandar'),
(13, 'vidya', 'lakhani', '2611', 'vani@gmail.com', '2004-11-26', 'porbandar', '348783948', 'female', 'omkaleshwar mandir ,porbandar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `deta`
--
ALTER TABLE `deta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_order`
--
ALTER TABLE `place_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `deta`
--
ALTER TABLE `deta`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `place_order`
--
ALTER TABLE `place_order`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
