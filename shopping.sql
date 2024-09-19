-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 08:10 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `productid` int(11) DEFAULT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `pprice` decimal(10,2) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `pimage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `productid`, `pname`, `pprice`, `qty`, `pimage`) VALUES
(1, 1, 'guitar', '1500.00', 2, 'product1.jpg'),
(2, 1, 'Acoustic Guitar', '15000.00', 3, 'product1.jpg'),
(3, 1, 'Acoustic Guitar', '15000.00', 3, 'product1.jpg'),
(4, 1, 'Acoustic Guitar', '15000.00', 3, 'product1.jpg'),
(5, 1, 'Acoustic Guitar', '15000.00', 1, 'product1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `user_ID` int(11) NOT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Street_Address_1` varchar(255) DEFAULT NULL,
  `Street_Address_2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `Province` varchar(255) DEFAULT NULL,
  `Zip_code` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `item_1`
--

CREATE TABLE `item_1` (
  `item_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_1`
--

INSERT INTO `item_1` (`item_id`, `name`, `description`, `quantity`, `price`) VALUES
(1, 'Acoustic Guitar', 'An acoustic guitar is a mucical instrument in the string family.When a string is plucked its vibration is transmitted from the bridge,resonating throught the top of the guitar.', 100, '15000.00'),
(2, 'Bass Guitar', 'The bass guitar, electric bass or simply bass, is the lowest-pitched member of the guitar family. It is a plucked string instrument similar in appearance and construction to an electric or an acoustic guitar, but with a longer neck and scale length.', 150, '17000.00'),
(3, 'Acoustic-Rock Guitar', 'The solid-body electric guitar is the youngest member of the guitar family, yet it has established itself as the predominant musical instrument among rock, pop, and a handful of jazz musicians.', 80, '20000.00'),
(4, 'Acoustic-Electric Guitar', 'An acoustic-electric guitar is an acoustic guitar fitted with a microphone or a magnetic or piezoelectric pickup. They are used in a variety of music genres where the sound of an acoustic guitar is desired. ', 20, '25000.00'),
(5, 'Electric Violin', 'An electric violin is a violin equipped with an electronic output of its sound. The term most properly refers to an instrument intentionally made to be electrified with built-in pickups, usually with a solid body.', 25, '75000.00'),
(6, 'Fender Ukulele', 'The ukulele is a member of the lute family of instruments. It generally employs four nylon strings. The ukulele is a small, guitar-like instrument. It was introduced to Hawaii by Portuguese immigrants from Madeira.', 10, '17500.00');

-- --------------------------------------------------------

--
-- Table structure for table `item_2`
--

CREATE TABLE `item_2` (
  `item_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_2`
--

INSERT INTO `item_2` (`item_id`, `name`, `description`, `quantity`, `price`) VALUES
(7, 'Drums', 'A drum is a musical instrument which produces sound by the vibration of a stretched membrane. The membrane, which is known as the head, covers one or both ends of a hollow body known as the shell. ', 5, '55000.00'),
(8, 'YAMAHA Octapad', 'In a simple language, an Octapad Instrument is an electronic percussion instrument which has eight rubber pads on a rectangular surface. These rubber pads produced sounds when they struck on.', 12, '200000.00'),
(9, 'Keyboard', 'A keyboard instrument is a musical instrument played using a keyboard, a row of levers which are pressed by the fingers. The most common of these are the piano, organ, and various electronic keyboards, including synthesizers and digital pianos.', 50, '9500.00'),
(10, 'Wooden Bongo', 'Bongos are an Afro-Cuban percussion instrument consisting of a pair of small open bottomed hand drums of different sizes. They are struck with both hands, most commonly in an eight-stroke pattern called martillo.', 23, '18500.00'),
(11, 'Piano', 'The piano is an acoustic, stringed musical instrument invented in Italy by Bartolomeo Cristofori around the year 1700, in which the strings are struck by wooden hammers that are coated with a softer material.', 1, '1575000.00'),
(12, 'JBL Subwoofer', 'A subwoofer is a loudspeaker designed to reproduce low-pitched audio frequencies known as bass and sub-bass, lower in frequency than those which can be generated by a woofer.', 30, '29999.00');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE `product1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`id`, `name`, `image`, `price`) VALUES
(1, 'Acoustic Guitar', 'product1.jpg', '15000.00'),
(2, 'Bass Guitar', 'product2.jpg', '17000.00'),
(3, 'Acoustic-Rock Guitar', 'product3.jpg', '20000.00'),
(4, 'Acoustic-Electric Guitar', 'product11.jpg', '25000.00'),
(5, 'Electric Violins', 'product5.jpg', '75000.00'),
(6, 'Fender Ukulele', 'product19.jpeg', '17500.00');

-- --------------------------------------------------------

--
-- Table structure for table `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` decimal(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product2`
--

INSERT INTO `product2` (`id`, `name`, `image`, `price`) VALUES
(7, 'Drums', 'product7.jpg', '55000.00'),
(8, 'YAMAHA Octapad', 'product8.jpg', '200000.00'),
(9, 'Keyboard', 'product12.jpg', '9500.00'),
(10, 'Wooden Bongo', 'product15.jpg', '18500.00'),
(11, 'Piano', 'product13.jpg', '1575000.00'),
(12, 'JBL Subwoofer', 'product18.jpg', '29999.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`user_ID`);

--
-- Indexes for table `item_1`
--
ALTER TABLE `item_1`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `item_2`
--
ALTER TABLE `item_2`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `product1`
--
ALTER TABLE `product1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product2`
--
ALTER TABLE `product2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_1`
--
ALTER TABLE `item_1`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item_2`
--
ALTER TABLE `item_2`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product1`
--
ALTER TABLE `product1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product2`
--
ALTER TABLE `product2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
