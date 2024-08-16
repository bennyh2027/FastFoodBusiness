-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2022 at 06:45 AM
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
-- Database: `asensation`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(8) NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Rating` int(5) NOT NULL,
  `Description` text NOT NULL,
  `Price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `Picture`, `Name`, `Rating`, `Description`, `Price`) VALUES
(1, 'Burger.jpg', 'Burger', 5, 'Special burger made from homemade sauce, double patties, extra cheese, and large-sized buns', 15),
(2, 'BurgerandFriesCombo.jpg', 'Burger and Fries Combo', 5, 'Regular burger with extra fries, ketcup, and barbecue sauce', 25),
(3, 'CheeseSticks.jpg', 'Cheese Sticks', 4, 'Deep-fried snacks composed of sliced cheeses wrapped in spring roll wrapper', 14),
(4, 'CheesyFries.jpg', 'Cheesy Fries', 4, 'French fries baked and topped with melted cheddar cheese', 12),
(5, 'ChickenFingers.jpg', 'Chicken Fingers', 4, 'Chicken tenders fried in breadcrumbs, flour, and topped with barbecue sauce ', 32),
(6, 'ChickenNuggets.jpg', 'Chicken Nuggets', 3, 'Chicken pieces fried to be extra crispy and crunchy, topped with 3 sauces: ketchup, barbecue sauce, and homemade sauce', 25),
(7, 'FriedRice.jpg', 'Fried Rice', 5, 'Cooked rice mixed with diced vegetables, shrimp, and soy sauce', 18),
(8, 'FriedChicken.jpg', 'Fried Chicken', 3, 'Chicken legs and breast fried in breadcrumbs, topped with homemade sauce', 11),
(9, 'OnionRings.jpg', 'Onion Rings', 3, 'Sliced onions fried in breadcrumbs, egg yolk, and topped with ketchup', 15),
(10, 'SweetandSour.jpg', 'Sweet and Sour Chicken', 4, 'Skinless, diced chicken breasts and thighs coated in a sweet and sour homemade sauce', 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
