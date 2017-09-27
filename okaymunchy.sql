-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2017 at 06:21 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `okaymunchy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'alfred', 'coffee'),
(2, 'daniel', 'coffee'),
(3, 'carlos', 'coffee'),
(4, 'william', 'coffee');

-- --------------------------------------------------------

--
-- Table structure for table `base`
--

CREATE TABLE IF NOT EXISTS `base` (
  `id_base` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(24) NOT NULL,
  `address num` int(18) NOT NULL,
  `street` varchar(24) NOT NULL,
  `state` varchar(24) NOT NULL,
  `zip` int(8) NOT NULL,
  `categories` varchar(26) NOT NULL,
  `phone` varchar(20) NOT NULL,
  PRIMARY KEY (`id_base`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `base`
--

INSERT INTO `base` (`id_base`, `name`, `address num`, `street`, `state`, `zip`, `categories`, `phone`) VALUES
(10, 'Black Hole Coffee House', 4504, 'Graustark St', 'Ismael', 77006, 'coffee', '713 528 0653'),
(18, 'The Nook Cafe', 4701, 'Calhoun St', 'Texas', 77004, 'coffee', '832 831 3620'),
(19, 'Honeymoon', 300, 'Main St', 'Texas', 77002, 'coffee', '281 846 6995'),
(20, 'Toasters', 1004, 'N San Jacinto St', 'Texas', 77002, 'sandwich', '713 226 7373'),
(21, 'Brown Bag Deli', 702, 'Main St', 'Texas', 77002, 'sandwich', '713 224 7000'),
(22, 'Which wich', 811, 'Main St', 'Texas', 77002, 'sandwich', '713 227 0860'),
(23, 'Dizzy Kaktus', 301, 'Main St', 'Texas', 77002, 'tacos', '713 227 0440'),
(24, 'La Calle Tacos', 909, 'Franklin St', 'Texas', 77002, 'tacos', '832 735 8226'),
(25, 'Fusion Taco', 801, 'Congress', 'Texas', 77002, 'tacos', '713 422 2882'),
(26, 'tuit suit', 123, 'commerce', 'TX', 77022, 'Coffee', '281-888-9999'),
(27, 'starbucks', 123, 'Saturn and mars', 'TX', 90210, 'coffee', '8329991011'),
(28, 'Alfred Albizures', 1333, 'main', 'TX', 77530, 'coffee', '111111111');

-- --------------------------------------------------------

--
-- Table structure for table `commenttable`
--

CREATE TABLE IF NOT EXISTS `commenttable` (
  `id_com` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(26) NOT NULL,
  `message` varchar(100) NOT NULL,
  `com_id` int(11) NOT NULL,
  PRIMARY KEY (`id_com`),
  KEY `com_id` (`com_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `commenttable`
--

INSERT INTO `commenttable` (`id_com`, `name`, `message`, `com_id`) VALUES
(7, 'Daniel', 'I ordered a cappuccino and it was good. Would recommend!', 10),
(10, 'alfred', 'The wifi was slow', 10),
(11, 'Esteban', 'I have never heard of this place. I will go!', 10),
(13, 'Carrie ', 'mmm no tea ?\r\n', 10),
(14, 'Mike', 'Graustark!', 10),
(24, 'alfred', 'very fast wifi and great environment', 18),
(27, 'Daniel', 'LF GF', 18),
(36, 'william', 'Best place to be when sad', 18),
(38, 'Willy', 'Hate it dont go', 19),
(40, 'izzy', 'If you lose you win.', 22),
(42, 'john', 'cool page', 18),
(43, 'LF GF', 'PM for INFO', 19),
(46, 'alfred', 'very secret spot ', 20),
(48, 'andy', 'is alright', 18),
(49, 'lf gf pm 4 info', '[Blessed Blade of the Windseeker]', 10),
(50, 'ab', 'hi anything', 10),
(51, 'lame', 'is lame', 10),
(52, 'brown bag', 'brown bag', 21);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `ev_id` int(11) NOT NULL AUTO_INCREMENT,
  `event` varchar(26) NOT NULL,
  `event_id` int(11) NOT NULL,
  `day` varchar(20) NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`ev_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ev_id`, `event`, `event_id`, `day`, `time`) VALUES
(2, 'acoustic band ', 18, 'friday', '18:00:00'),
(3, 'Mariachis  ', 23, 'friday', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Food Menu`
--

CREATE TABLE IF NOT EXISTS `Food Menu` (
  `fo_id` int(11) NOT NULL AUTO_INCREMENT,
  `item` varchar(25) NOT NULL,
  `price` double(11,2) NOT NULL,
  `rest_id` int(11) NOT NULL,
  PRIMARY KEY (`fo_id`),
  KEY `rest_id` (`rest_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=88 ;

--
-- Dumping data for table `Food Menu`
--

INSERT INTO `Food Menu` (`fo_id`, `item`, `price`, `rest_id`) VALUES
(5, 'chai tea', 3.75, 10),
(6, 'brownie', 4.00, 10),
(7, 'rattlesnake latte', 4.25, 18),
(8, 'Oatmeal Cookie', 3.75, 18),
(9, 'bottomless coffee', 2.75, 18),
(10, 'sangria', 5.00, 18),
(11, 'Honeymoon Burger', 14.00, 19),
(12, 'Croque Madame', 13.00, 19),
(13, 'French Toast', 12.00, 19),
(14, 'Iced Coffee', 3.50, 19),
(15, 'French Press', 5.00, 19),
(16, 'Breakfast Sandwich', 7.49, 20),
(17, 'Continental Breakfast', 8.29, 20),
(18, 'ChickenWaffle Platte', 12.99, 20),
(19, 'coffee cup', 2.10, 20),
(20, 'sandwich', 6.95, 21),
(21, 'sandwich, Chips, Drink', 9.95, 21),
(24, 'sandwich, side, Drink', 10.45, 21),
(25, 'chocolate chip cookie', 1.95, 21),
(26, 'Rice Krispy Treat', 1.95, 21),
(27, 'Vegan Wich', 6.00, 22),
(28, 'Med Wich', 8.50, 22),
(29, 'Large Wich', 11.50, 22),
(30, 'Brownie', 1.50, 22),
(31, 'THE POTATO WAY', 2.50, 23),
(32, 'THE BACON WAY', 3.00, 23),
(33, 'FISH TACO', 4.25, 23),
(34, 'BOND, JAMES BOND', 4.50, 23),
(35, 'BANANA NUTELLA & CREAM', 4.75, 23),
(36, 'Chilango Tacos', 8.31, 24),
(37, 'Gringo Tacos', 8.00, 24),
(38, 'Plato', 8.00, 24),
(39, 'Torta', 8.00, 24),
(40, 'Horchata', 3.00, 24),
(41, 'Lamb Keema', 3.95, 25),
(42, 'Huevos Rancheros', 3.50, 25),
(43, 'Blackened Tilapia', 3.50, 25),
(44, 'Tampura Local Shrimp', 3.98, 25),
(75, 'cafe au lait', 3.85, 19),
(76, 'cookie', 2.10, 10),
(82, 'choco', 2.00, 18),
(83, 'unicorn coffee', 5.50, 10),
(84, 'killer coffee ', 10.00, 26),
(85, 'crazy stuff', 25.00, 26),
(86, 'snake cakes', 100.00, 27),
(87, 'death cake', 50.00, 27);

-- --------------------------------------------------------

--
-- Table structure for table `Parking`
--

CREATE TABLE IF NOT EXISTS `Parking` (
  `par_id` int(11) NOT NULL AUTO_INCREMENT,
  `availablespots` int(11) NOT NULL,
  `pstatus` varchar(26) NOT NULL,
  `crowdedtime` int(13) NOT NULL,
  `park_id` int(11) NOT NULL,
  PRIMARY KEY (`par_id`),
  KEY `park_id` (`park_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `Parking`
--

INSERT INTO `Parking` (`par_id`, `availablespots`, `pstatus`, `crowdedtime`, `park_id`) VALUES
(2, 16, 'public', 5, 10),
(3, 0, 'none', 6, 19),
(4, 74, 'public', 5, 18),
(5, 0, 'public', 7, 20),
(6, 0, 'none', 6, 21),
(7, 0, 'none', 3, 22),
(8, 0, 'none', 3, 23),
(9, 0, 'none', 3, 24),
(10, 0, 'none', 1, 25);

-- --------------------------------------------------------

--
-- Table structure for table `payment method`
--

CREATE TABLE IF NOT EXISTS `payment method` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `method` varchar(50) NOT NULL,
  `payment_id` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`),
  KEY `payment_id` (`payment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `payment method`
--

INSERT INTO `payment method` (`pay_id`, `method`, `payment_id`) VALUES
(2, 'cash, amex, visa, mastercard', 10),
(3, 'cash, amex, visa, mastercard', 18),
(4, 'cash, amex, visa, mastercard', 19),
(5, 'cash, amex, visa, mastercard', 20),
(6, 'cash, amex, visa, mastercard', 21),
(7, 'cash, amex, visa, mastercard', 22),
(8, 'cash, amex, visa, mastercard', 23),
(9, 'cash, amex, visa, mastercard', 24),
(10, 'cash, visa, mastercard', 25);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `stf_id` int(11) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `slaves` varchar(26) NOT NULL,
  PRIMARY KEY (`stf_id`),
  KEY `staff_id` (`staff_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`stf_id`, `staff_id`, `slaves`) VALUES
(2, 10, 'becky'),
(3, 10, 'samuel'),
(4, 18, 'tommy'),
(5, 18, 'andres'),
(6, 18, 'natalie'),
(7, 19, 'Takuya'),
(8, 19, 'Daniel'),
(9, 19, 'Tuan'),
(10, 20, 'Gabby'),
(11, 20, 'George'),
(12, 21, 'Mercedes'),
(13, 21, 'bianca'),
(14, 21, 'hitesh'),
(15, 22, 'Rick'),
(16, 22, 'Morti'),
(17, 22, 'Rebecca'),
(18, 23, 'Chang'),
(19, 23, 'mike'),
(20, 23, 'Oscar'),
(21, 23, 'Ben'),
(22, 24, 'Victor'),
(23, 24, 'Akshay'),
(24, 24, 'Johnny'),
(25, 25, 'Kua'),
(26, 25, 'Joshua'),
(27, 25, 'carrie');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE IF NOT EXISTS `vendors` (
  `ven_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor` varchar(26) NOT NULL,
  `vend_id` int(11) NOT NULL,
  PRIMARY KEY (`ven_id`),
  KEY `vend_id` (`vend_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`ven_id`, `vendor`, `vend_id`) VALUES
(2, 'sysco', 10),
(3, 'Georgia Pacific', 10),
(4, 'Java Pura Coffee Roasters', 10),
(5, 'Houston Coffee Exchange', 10),
(6, 'Boomtown', 10),
(7, 'katz coffee', 18),
(8, 'glazed donuts', 18),
(9, 'sysco', 18),
(10, 'bon appetit', 18),
(11, 'Boomtown', 19),
(12, 'Houston Coffee Exchange', 19),
(13, 'Sams Club', 19),
(14, 'Cosco', 20),
(15, 'Sams Club', 20),
(16, 'sysco', 21),
(17, 'sherwood', 21),
(18, 'farmers fresh meat', 21),
(19, 'sysco', 22),
(20, 'Cosco', 22),
(21, 'Kroger', 23),
(22, 'Whole Foods', 23),
(23, 'Cosco', 23),
(24, 'Belly Up', 24),
(25, 'Janco Foods', 24),
(26, 'Sysco Houston Inc', 24),
(27, 'Sams Club', 24),
(28, 'sysco', 25),
(29, 'Georgia Pacific', 25);

-- --------------------------------------------------------

--
-- Table structure for table `vendortrans`
--

CREATE TABLE IF NOT EXISTS `vendortrans` (
  `tran_id` int(11) NOT NULL AUTO_INCREMENT,
  `itemo` varchar(26) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  `fk_trid` int(11) NOT NULL,
  PRIMARY KEY (`tran_id`),
  KEY `fk_trid` (`fk_trid`),
  KEY `fk_trid_2` (`fk_trid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `vendortrans`
--

INSERT INTO `vendortrans` (`tran_id`, `itemo`, `quantity`, `price`, `date`, `fk_trid`) VALUES
(1, 'disposable cups', 200, 10, '2017-04-19 20:50:45.343445', 2),
(2, 'cream', 55, 5, '2017-02-13 14:00:00.000000', 2),
(3, 'milk', 60, 3, '2017-03-08 14:36:00.000000', 2),
(4, 'toilet paper', 55, 1, '2017-03-14 07:00:00.000000', 3),
(5, 'Colombian coffee', 20, 40, '2017-04-18 07:00:00.000000', 4),
(6, 'Mocha Java', 35, 30, '2017-04-20 07:00:00.000000', 5),
(7, 'Blond', 50, 15, '2017-04-18 07:00:00.000000', 5);

-- --------------------------------------------------------

--
-- Table structure for table `wifi`
--

CREATE TABLE IF NOT EXISTS `wifi` (
  `wii_id` int(11) NOT NULL AUTO_INCREMENT,
  `provider` varchar(26) NOT NULL,
  `downspeed` int(26) NOT NULL,
  `password` varchar(26) NOT NULL,
  `wifi_id` int(11) NOT NULL,
  `upspeed` int(11) NOT NULL,
  PRIMARY KEY (`wii_id`),
  UNIQUE KEY `wifi_id` (`wifi_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `wifi`
--

INSERT INTO `wifi` (`wii_id`, `provider`, `downspeed`, `password`, `wifi_id`, `upspeed`) VALUES
(2, 'comcast', 6, 'blackholeguest', 10, 1),
(3, 'At&t', 14, 'downtowncoffee', 19, 1),
(4, 'comcast', 50, 'No Password Needed', 18, 10),
(5, 'At&t', 5, 'No Password Needed', 20, 1),
(6, 'comcast', 8, 'No Password Needed', 21, 2),
(7, 'none', 0, 'No wifi', 22, 0),
(8, 'comcast', 7, 'No Password Needed', 23, 3),
(9, 'comcast', 12, 'No Password Needed', 24, 4),
(10, 'At&t', 8, 'No Password Needed', 25, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commenttable`
--
ALTER TABLE `commenttable`
  ADD CONSTRAINT `id_comment` FOREIGN KEY (`com_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `event_id_fk` FOREIGN KEY (`event_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Food Menu`
--
ALTER TABLE `Food Menu`
  ADD CONSTRAINT `base_food_fk` FOREIGN KEY (`rest_id`) REFERENCES `base` (`id_base`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Parking`
--
ALTER TABLE `Parking`
  ADD CONSTRAINT `parki_id` FOREIGN KEY (`park_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment method`
--
ALTER TABLE `payment method`
  ADD CONSTRAINT `base_payment` FOREIGN KEY (`payment_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `base_staff` FOREIGN KEY (`staff_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `base_id_fk` FOREIGN KEY (`vend_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vendortrans`
--
ALTER TABLE `vendortrans`
  ADD CONSTRAINT `tran_venf_id` FOREIGN KEY (`fk_trid`) REFERENCES `vendors` (`ven_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wifi`
--
ALTER TABLE `wifi`
  ADD CONSTRAINT `base_wifi_id` FOREIGN KEY (`wifi_id`) REFERENCES `base` (`id_base`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
