-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2018 at 09:46 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `n9934731`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `locationID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `suburb` varchar(64) NOT NULL,
  `latitude` decimal(20,8) NOT NULL,
  `longitude` decimal(20,7) NOT NULL,
  `rating` int(1) NOT NULL DEFAULT '0' COMMENT '(0-5)',
  `image` varchar(64) NOT NULL DEFAULT '.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`locationID`, `name`, `address`, `suburb`, `latitude`, `longitude`, `rating`, `image`) VALUES
(1, '7th Brigade Park', 'Delaware St\r\n', 'Chermside\r\n', '-27.37893000', '153.0446100', 0, '7th Brigade Park.jpg'),
(3, 'Annerley Library Wifi', '450 Ipswich Road\r\n', 'Annerley, 4103\r\n', '-27.50942285', '153.0333218', 1, 'Annerley Library Wifi.jpg'),
(4, 'Ashgrove Library Wifi', '87 Amarina Avenue\r\n', 'Ashgrove, 4060\r\n', '-27.44394629', '152.9870981', 2, 'Ashgrove Library Wifi.jpg'),
(5, 'Banyo Library Wifi', '284 St. Vincents Road\r\n', 'Banyo, 4014\r\n', '-27.37396641', '153.0783234', 3, 'Banyo Library Wifi.jpg'),
(6, 'Booker Place Park', 'Birkin Rd & Sugarwood St\r\n', 'Bellbowrie\r\n', '-27.56353000', '152.8937200', 4, 'Booker Place Park.jpg'),
(11, 'Bracken Ridge Library Wifi', 'Corner Bracken and Barrett Street\r\n', 'Bracken Ridge, 4017\r\n', '-27.31797261', '153.0378735', 5, 'Bracken Ridge Library Wifi.jpg'),
(12, 'Brisbane Botanic Gardens', 'Mt Coot-tha Rd\r\n', 'Toowong\r\n', '-27.47724000', '152.9759900', 0, 'Brisbane Botanic Gardens.jpg'),
(13, 'Brisbane Square Library Wifi', 'Brisbane Square, 266 George Street\r\n', 'Brisbane, 4000\r\n', '-27.47091173', '153.0224598', 1, 'Brisbane Square Library Wifi.jpg'),
(14, 'Bulimba Library Wifi', 'Corner Riding Road & Oxford Street\r\n', 'Bulimba, 4171\r\n', '-27.45203086', '153.0628242', 2, 'Bulimba Library Wifi.jpg'),
(15, 'Calamvale District Park', 'Formby & Ormskirk Sts\r\n', 'Calamvale\r\n', '-27.62152000', '153.0366500', 3, 'Calamvale District Park.jpg'),
(16, 'Carina Library Wifi', 'Corner Mayfield Road & Nyrang Street\r\n', 'Carina, 4152\r\n', '-27.49169314', '153.0912127', 4, 'Carina Library Wifi.jpg'),
(17, 'Carindale Library Wifi', 'The Home and Leisure Centre, Corner Carindale Street  & Banchory Court, Westfield Carindale Shopping Centre\r\n', 'Carindale, 4152\r\n', '-27.50475928', '153.1003965', 5, 'Carindale Library Wifi.jpg'),
(18, 'Carindale Recreation Reserve', 'Cadogan and Bedivere Sts\r\n', 'Carindale\r\n', '-27.49700000', '153.1110500', 0, 'Carindale Recreation Reserve.jpg'),
(20, 'City Botanic Gardens Wifi', 'Alice Street\r\n', 'Brisbane City\r\n', '-27.47561000', '153.0300500', 1, 'City Botanic Gardens Wifi.jpg'),
(21, 'Coopers Plains Library Wifi', '107 Orange Grove Road\r\n', 'Coopers Plains, 4108\r\n', '-27.56510509', '153.0403183', 2, 'Coopers Plains Library Wifi.jpg'),
(22, 'Corinda Library Wifi', '641 Oxley Road\r\n', 'Corinda, 4075\r\n', '-27.53880237', '152.9809091', 3, 'Corinda Library Wifi.jpg'),
(23, 'D.M. Henderson Park', 'Granadilla St\r\n', 'MacGregor\r\n', '-27.57745000', '153.0760300', 4, 'D.M. Henderson Park.jpg'),
(24, 'Einbunpin Lagoon', 'Brighton Rd\r\n', 'Sandgate\r\n', '-27.31947000', '153.0682200', 5, 'Einbunpin Lagoon.jpg'),
(25, 'Everton Park Library Wifi', '561 South Pine Road\r\n', 'Everton park, 4053\r\n', '-27.40533360', '152.9904205', 0, 'Everton Park Library Wifi.jpg'),
(26, 'Fairfield Library Wifi', 'Fairfield Gardens Shopping Centre, 180 Fairfield Road\r\n', 'Fairfield, 4103\r\n', '-27.50909038', '153.0259709', 1, 'Fairfield Library Wifi.jpg'),
(27, 'Forest Lake Parklands', 'Forest Lake Bld\r\n', 'Forest Lake\r\n', '-27.62020000', '152.9662500', 2, 'Forest Lake Parklands.jpg'),
(45, 'Garden City Library Wifi', 'Garden City Shopping Centre, Corner Logan and Kessels Road\r\n', 'Upper Mount Gravatt, 4122\r\n', '-27.56244221', '153.0809183', 3, 'Garden City Library Wifi.jpg'),
(46, 'Chermside Library Wifi', '375 Hamilton  Road\r\n', 'Chermside, 4032\r\n', '-27.38560320', '153.0349028', 4, 'Chermside Library Wifi.jpg'),
(47, 'Glindemann Park', 'Logan Rd\r\n', 'Holland Park West\r\n', '-27.52552000', '153.0692300', 5, 'Glindemann Park.jpg'),
(48, 'Grange Library Wifi', '79 Evelyn Street\r\n', 'Grange, 4051\r\n', '-27.42531193', '153.0174728', 0, 'Grange Library Wifi.jpg'),
(49, 'Gregory Park', 'Baroona Rd\r\n', 'Paddington\r\n', '-27.46700000', '152.9998100', 1, 'Gregory Park.jpg'),
(50, 'Guyatt Park', 'Sir Fred Schonell Dve\r\n', 'St Lucia\r\n', '-27.49297000', '153.0018700', 2, 'Guyatt Park.jpg'),
(51, 'Hamilton Library Wifi', 'Corner Racecourt Road and Rossiter Parade\r\n', 'Hamilton, 4007\r\n', '-27.43790137', '153.0642227', 3, 'Hamilton Library Wifi.jpg'),
(52, 'Hidden World Park', 'Roghan Rd\r\n', 'Fitzgibbon\r\n', '-27.33971701', '153.0349810', 4, 'Hidden World Park.jpg'),
(53, 'Holland Park Library Wifi', '81 Seville Road\r\n', 'Holland Park, 4121\r\n', '-27.52292286', '153.0722921', 5, 'Holland Park Library Wifi.jpg'),
(54, 'Inala Library Wifi', 'Inala Shopping centre, Corsair Ave\r\n', 'Inala, 4077\r\n', '-27.59828574', '152.9735217', 0, 'Inala Library Wifi.jpg'),
(55, 'Indooroopilly Library Wifi', 'Indrooroopilly Shopping centre, Level 4, 322 Moggill Road\r\n', 'Indooroopilly, 4068\r\n', '-27.49764287', '152.9736471', 1, 'Indooroopilly Library Wifi.jpg'),
(56, 'Kalinga Park', 'Kalinga St\r\n', 'Clayfield\r\n', '-27.40666000', '153.0521700', 2, 'Kalinga Park.jpg'),
(57, 'Kenmore Library Wifi', 'Kenmore Village Shopping Centre, Brookfield Road\r\n', 'Kenmore, 4069\r\n', '-27.50592852', '152.9386437', 3, 'Kenmore Library Wifi.jpg'),
(58, 'King Edward Park (Jacobs Ladder)', 'Turbot St and Wickham Tce\r\n', 'Brisbane\r\n', '-27.46589000', '153.0240600', 4, 'King Edward Park.jpg'),
(59, 'King George Square', 'Ann & Adelaide Sts\r\n', 'Brisbane\r\n', '-27.46843000', '153.0242200', 5, 'King George Square.jpg'),
(60, 'Mitchelton Library Wifi', '37 Helipolis Parada\r\n', 'Mitchelton, 4053\r\n', '-27.41704165', '152.9783402', 0, 'Mitchelton Library Wifi.jpg'),
(61, 'Mt Coot-tha Botanic Gardens Library Wifi', 'Administration Building, Brisbane Botanic Gardens (Mt Coot-tha), Mt Coot-tha Road\r\n', 'Toowong, 4066\r\n', '-27.47529908', '152.9760412', 1, 'Mt Coot-tha Botanic Gardens Library Wifi.jpg'),
(62, 'Mt Gravatt Library Wifi', '8 Creek Road\r\n', 'Mt Gravatt, 4122\r\n', '-27.53855482', '153.0802628', 2, 'Mt Gravatt Library Wifi.jpg'),
(63, 'Mt Ommaney Library Wifi', 'Mt Ommaney Shopping Centre, 171 Dandenong Road\r\n', 'Mt Ommaney, 4074\r\n', '-27.54824198', '152.9378099', 3, 'Mt Ommaney Library Wifi.jpg'),
(64, 'New Farm Library Wifi', '135 Sydney Street\r\n', 'New Farm, 4005\r\n', '-27.46736574', '153.0495841', 4, 'New Farm Library Wifi.jpg'),
(65, 'New Farm Park Wifi', 'Brunswick Street\r\n', 'New Farm\r\n', '-27.47046000', '153.0522300', 5, 'New Farm Park Wifi.jpg'),
(66, 'Nundah Library Wifi', '1 Bage Street\r\n', 'Nundah, 4012\r\n', '-27.40125908', '153.0583751', 0, 'Nundah Library Wifi.jpg'),
(67, 'Oriel Park', 'Cnr of Alexandra & Lancaster Rds\r\n', 'Ascot\r\n', '-27.42928000', '153.0576800', 1, 'Oriel Park.jpg'),
(68, 'Orleigh Park', 'Hill End Tce\r\n', 'West End\r\n', '-27.48995000', '153.0032600', 2, 'Orleigh Park.jpg'),
(91, 'Post Office Square', 'Queen & Adelaide Sts\r\n', 'Brisbane\r\n', '-27.46735000', '153.0273500', 3, 'Post Office Square.jpg'),
(92, 'Rocks Riverside Park', 'Counihan Rd\r\n', 'Seventeen Mile Rocks\r\n', '-27.54153000', '152.9591300', 4, 'Rocks Riverside Park.jpg'),
(93, 'Sandgate Library Wifi', 'Seymour Street\r\n', 'Sandgate, 4017\r\n', '-27.32060523', '153.0704927', 5, 'Sandgate Library Wifi.jpg'),
(94, 'Stones Corner Library Wifi', '280 Logan Road\r\n', 'Stones Corner, 4120\r\n', '-27.49803575', '153.0436550', 0, 'Stones Corner Library Wifi.jpg'),
(95, 'Sunnybank Hills Library Wifi', 'Sunnybank Hills Shopping Centre, Corner Compton and Calam Roads\r\n', 'Sunnybank Hills, 4109\r\n', '-27.61092530', '153.0550706', 1, 'Sunnybank Hills Library Wifi.jpg'),
(96, 'Teralba Park', 'Pullen & Osborne Rds\r\n', 'Everton Park\r\n', '-27.40286000', '152.9805900', 2, 'Teralba Park.jpg'),
(97, 'Toowong Library Wifi', 'Toowong Village Shopping Centre, Sherwood Road\r\n', 'Toowong, 4066\r\n', '-27.48505116', '152.9925091', 3, 'Toowong Library Wifi.jpg'),
(98, 'West End Library Wifi', '178 - 180 Boundary Street\r\n', 'West End, 4101\r\n', '-27.48245078', '153.0120763', 4, 'West End Library Wifi.jpg'),
(99, 'Wynnum Library Wifi', 'Wynnum Civic Centre, 66 Bay Terrace\r\n', 'Wynnum, 4178\r\n', '-27.44244894', '153.1731968', 5, 'Wynnum Library Wifi.jpg'),
(100, 'Zillmere Library Wifi', 'Corner Jennings Street and Zillmere Road\r\n', 'Zillmere, 4034\r\n', '-27.36014232', '153.0407898', 0, 'Zillmere Library Wifi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `reviewID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `locationID` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `comment` varchar(535) NOT NULL,
  `reviewRating` int(1) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`reviewID`, `userID`, `locationID`, `title`, `comment`, `reviewRating`, `date`) VALUES
(1, 15, 3, 'Very Bad Connection', 'Can barely get a signal. Very slow net. Would not come here again. Not worth your time.', 1, '2018-05-17 20:20:00'),
(2, 14, 13, 'Horrible Place and Horrible Wifi', 'This is a horrible place. No where to sit. Very bad connection. Very limited bandwidth.', 1, '2018-05-17 20:20:00'),
(3, 13, 20, 'Very Bad Wifi', 'Very slow net. Limited bandwidth. Connection is bad.', 1, '2018-05-17 20:20:00'),
(4, 12, 26, 'Worse place to study', 'Barely any room to study. Internet is bad here. This place is terrible for studying, very noisy.', 1, '2018-05-17 20:20:00'),
(5, 15, 49, 'Very Bad Connection', 'Can barely get a signal. Very slow net. Would not come here again. Not worth your time.', 1, '2018-05-17 20:20:00'),
(6, 14, 55, 'Horrible Place and Horrible Wifi', 'This is a horrible place. No where to sit. Very bad connection. Very limited bandwidth.', 1, '2018-05-17 20:20:00'),
(7, 13, 61, 'Very Bad Wifi', 'Very slow net. Limited bandwidth. Connection is bad.', 1, '2018-05-17 20:20:00'),
(8, 12, 67, 'Worse place to study', 'Barely any room to study. Internet is bad here. This place is terrible for studying, very noisy.', 1, '2018-05-17 20:20:00'),
(9, 15, 95, 'Very Bad Connection', 'Can barely get a signal. Very slow net. Would not come here again. Not worth your time.', 1, '2018-05-17 20:20:00'),
(10, 15, 4, 'Bad Connection', 'Can barely get a signal. Net was pretty slow. Alright place though.', 2, '2018-05-17 20:20:00'),
(11, 14, 4, 'Quiet place with bad wifi', 'Limited bandwidth. Connection is bad. Quiet place to study. Place could be improved.', 2, '2018-05-17 20:20:00'),
(12, 13, 14, 'Could be better', 'Signal is bad. Bandwidth is limited. Some room to study.', 2, '2018-05-17 20:20:00'),
(13, 12, 14, 'Not a bad place to study', 'Not a bad place to study. Lots of improvements could be made though. Wifi connection is alright.', 2, '2018-05-17 20:20:00'),
(14, 15, 21, 'Bad Connection', 'Can barely get a signal. Net was pretty slow. Alright place though.', 2, '2018-05-17 20:20:00'),
(15, 14, 21, 'Quiet place with bad wifi', 'Limited bandwidth. Connection is bad. Quiet place to study. Place could be improved.', 2, '2018-05-17 20:20:00'),
(16, 13, 27, 'Could be better', 'Signal is bad. Bandwidth is limited. Some room to study.', 2, '2018-05-17 20:20:00'),
(17, 12, 27, 'Not a bad place to study', 'Not a bad place to study. Lots of improvements could be made though. Wifi connection is alright.', 2, '2018-05-17 20:20:00'),
(18, 15, 50, 'Bad Connection', 'Can barely get a signal. Net was pretty slow. Alright place though.', 2, '2018-05-17 20:20:00'),
(19, 14, 50, 'Quiet place with bad wifi', 'Limited bandwidth. Connection is bad. Quiet place to study. Place could be improved.', 2, '2018-05-17 20:20:00'),
(20, 13, 56, 'Could be better', 'Signal is bad. Bandwidth is limited. Some room to study.', 2, '2018-05-17 20:20:00'),
(21, 12, 56, 'Not a bad place to study', 'Not a bad place to study. Lots of improvements could be made though. Wifi connection is alright.', 2, '2018-05-17 20:20:00'),
(22, 15, 62, 'Bad Connection', 'Can barely get a signal. Net was pretty slow. Alright place though.', 2, '2018-05-17 20:20:00'),
(23, 14, 62, 'Quiet place with bad wifi', 'Limited bandwidth. Connection is bad. Quiet place to study. Place could be improved.', 2, '2018-05-17 20:20:00'),
(24, 13, 68, 'Could be better', 'Signal is bad. Bandwidth is limited. Some room to study.', 2, '2018-05-17 20:20:00'),
(25, 12, 68, 'Not a bad place to study', 'Not a bad place to study. Lots of improvements could be made though. Wifi connection is alright.', 2, '2018-05-17 20:20:00'),
(26, 15, 96, 'Bad Connection', 'Can barely get a signal. Net was pretty slow. Alright place though.', 2, '2018-05-17 20:20:00'),
(27, 14, 96, 'Quiet place with bad wifi', 'Limited bandwidth. Connection is bad. Quiet place to study. Place could be improved.', 2, '2018-05-17 20:20:00'),
(28, 15, 5, 'Meh... Could be better', 'Alright place. The wifi is fine, not as good as other places. Place is usually crowded.', 3, '2018-05-17 20:20:00'),
(29, 14, 5, 'Good speed, but there is a download limit', 'The speed of the wifi is pretty good. Wifi has a 50Mb download limit, which is not much at all. It should be at least 1Gb.', 3, '2018-05-17 20:20:00'),
(30, 13, 15, 'Nice place, alright wifi connection', 'This is a nice looking place. Good place to study. Wifi is alright', 3, '2018-05-17 20:20:00'),
(31, 12, 15, 'Alright place to study', 'Good internet speed. Spacious, good place to study. Fun place.', 3, '2018-05-17 20:20:00'),
(32, 15, 22, 'Meh... Could be better', 'Alright place. The wifi is fine, not as good as other places. Place is usually crowded.', 3, '2018-05-17 20:20:00'),
(33, 14, 22, 'Good speed, but there is a download limit', 'The speed of the wifi is pretty good. Wifi has a 50Mb download limit, which is not much at all. It should be at least 1Gb.', 3, '2018-05-17 20:20:00'),
(34, 13, 45, 'Nice place, alright wifi connection', 'This is a nice looking place. Good place to study. Wifi is alright', 3, '2018-05-17 20:20:00'),
(35, 12, 45, 'Alright place to study', 'Good internet speed. Spacious, good place to study. Fun place.', 3, '2018-05-17 20:20:00'),
(36, 15, 51, 'Meh... Could be better', 'Alright place. The wifi is fine, not as good as other places. Place is usually crowded.', 3, '2018-05-17 20:20:00'),
(37, 14, 51, 'Good speed, but there is a download limit', 'The speed of the wifi is pretty good. Wifi has a 50Mb download limit, which is not much at all. It should be at least 1Gb.', 3, '2018-05-17 20:20:00'),
(38, 13, 57, 'Nice place, alright wifi connection', 'This is a nice looking place. Good place to study. Wifi is alright', 3, '2018-05-17 20:20:00'),
(39, 12, 57, 'Alright place to study', 'Good internet speed. Spacious, good place to study. Fun place.', 3, '2018-05-17 20:20:00'),
(40, 15, 63, 'Meh... Could be better', 'Alright place. The wifi is fine, not as good as other places. Place is usually crowded.', 3, '2018-05-17 20:20:00'),
(41, 14, 63, 'Good speed, but there is a download limit', 'The speed of the wifi is pretty good. Wifi has a 50Mb download limit, which is not much at all. It should be at least 1Gb.', 3, '2018-05-17 20:20:00'),
(42, 13, 91, 'Nice place, alright wifi connection', 'This is a nice looking place. Good place to study. Wifi is alright', 3, '2018-05-17 20:20:00'),
(43, 12, 91, 'Alright place to study', 'Good internet speed. Spacious, good place to study. Fun place.', 3, '2018-05-17 20:20:00'),
(44, 15, 97, 'Meh... Could be better', 'Alright place. The wifi is fine, not as good as other places. Place is usually crowded.', 3, '2018-05-17 20:20:00'),
(45, 14, 97, 'Good speed, but there is a download limit', 'The speed of the wifi is pretty good. Wifi has a 50Mb download limit, which is not much at all. It should be at least 1Gb.', 3, '2018-05-17 20:20:00'),
(46, 15, 6, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(47, 14, 6, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(48, 13, 6, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(49, 12, 16, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(50, 15, 16, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(51, 14, 16, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(52, 13, 23, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(53, 12, 23, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(54, 15, 23, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(55, 14, 46, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(56, 13, 46, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(57, 12, 46, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(58, 15, 52, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(59, 14, 52, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(60, 13, 52, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(61, 12, 58, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(62, 15, 58, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(63, 14, 58, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(64, 13, 64, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(65, 12, 64, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(66, 15, 64, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(67, 14, 92, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(68, 13, 92, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(69, 12, 92, 'Would Definitely Come Here Again', 'A relaxing place to study. There are meeting rooms and a big study area. There is also free wifi here; which is a bonus.', 4, '2018-05-17 20:20:00'),
(70, 15, 98, 'Awesome place with free net and a great view.', 'This place is awesome. This place is modern and spacious. The net is great here.', 4, '2018-05-17 20:20:00'),
(71, 14, 98, 'Internet speed is fast and good view.', 'The view at this place is nice. High bandwidth and fast speed.', 4, '2018-05-17 20:20:00'),
(72, 13, 98, 'Nice place study', 'The net here is aweseome. Researching can be done much faster. Nice place.', 4, '2018-05-17 20:20:00'),
(73, 12, 11, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(74, 13, 11, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(75, 14, 11, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(76, 15, 17, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(77, 12, 17, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(78, 13, 17, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(79, 14, 24, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(80, 15, 24, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(81, 12, 24, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(82, 13, 47, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(83, 14, 47, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(84, 15, 47, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(85, 12, 53, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(86, 13, 53, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(87, 14, 53, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(88, 15, 59, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(89, 12, 59, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(90, 13, 59, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(91, 14, 65, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(92, 15, 65, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(93, 12, 65, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(94, 13, 93, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(95, 14, 93, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(96, 15, 93, 'Epic Place with Epic Net!', 'This place is just epic. First time here, never been to a place like this. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(97, 12, 99, 'Gonna come here everyday!', 'Absolutely love this place. The wifi here is awesome. View is beautiful.', 5, '2018-05-17 20:20:00'),
(98, 13, 99, 'Awesome, Great, Fantastic!', 'Awesome place. Great Wifi connection. Fantastic Hotspot. Unlimited Bandwidth.', 5, '2018-05-17 20:20:00'),
(99, 14, 99, 'Highly Recommended', 'Everyone should visit here at least once. Put it on your bucketlist.', 5, '2018-05-17 20:20:00'),
(104, 39, 94, 'Very nostalgic', 'Small and tidy, great place to study and good internet.', 4, '2018-05-19 00:45:00'),
(105, 39, 99, 'Excellent', 'Great stuff to do and wifi is nice', 4, '2018-05-19 00:49:38'),
(106, 39, 3, 'Good', 'wifi is neat', 3, '2018-05-19 17:36:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `gender` tinyint(2) DEFAULT NULL COMMENT '0 = male, 1 = female',
  `profileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `password`, `gender`, `profileImage`) VALUES
(12, 'epicdtx', 'epicdtx1998@hotmail.com', '$2y$10$XkoDCJYv.0D7vCSAblku7OB/VfPsHqrhCUt2BflNLgQjqn.O0DpE.', 0, 'profileImage_M.png'),
(13, 'MrSzAbe', 'kduong99@gmail.com', '$2y$10$qVybCd6GWscdyYklWYdx7.MkEEIJN.4FghLFJAMkgwQi4.BMd7zZu', 0, 'profileImage_M.png'),
(14, 'CrayonsForBilly', 'billy0102@yahoo.com', '$2y$10$7nxzjKG0HzXv.uX/cu4WtugySEA4BhdN3use6vdTJOubNtBVH1VOC', 1, 'profileImage_F.png'),
(15, 'AkaKuro', 'redblack432@hotmail.com', '$2y$10$.onWEnjpDHOENXzRqpwqo.qHvCDWWwBk.vF2t1h5BrfYxA5ggGPlW', 1, 'profileImage_F.png'),
(39, 'Kevin07', '1999duong.kevin@gmail.com', '$2y$10$ZI1JPFOxqYPcpoOwpsWCNOL1PT8l9QzwtMFyxfprrrt2sk8eOvoTG', 0, 'profileImage_M.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locationID`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`reviewID`),
  ADD KEY `locationID` (`locationID`) USING BTREE,
  ADD KEY `user` (`userID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `reviewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `location` FOREIGN KEY (`locationID`) REFERENCES `locations` (`locationID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
