-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Novemember 9, 2018 at 06:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `content_data`
--

-- --------------------------------------------------------


CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;



CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `ingredients` TEXT NOT NULL,
  `instructions` TEXT NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;


INSERT INTO `users` (`id`, `username`,`password`) VALUES
(1, 'admin', 'test');



INSERT INTO `recipes` (`id`,`name`,`category`, `ingredients`,`instructions`) VALUES
(1, 'Tacos','mexican','', ''),
(2, 'Quesadilla','mexican','You will need flour tortillas, shredded cheese, toppings of your choice', 'Place one tortilla down and place cheese and other toppings on top the of tortilla and proceed to place other tortilla on top of the torilla with the cheese and toppings. Now lighty grease a pan and turn on heat, then place it in the pan to get your quesadilla heated up until cheese it melted.'),
(3, 'Nachos','mexican','You will need a package of resturant-style chips, 1 pound of ground beef, 1 can of refried beans,shredded sharp cheddar cheese, sour cream, salsa, any other toppings you many enjoy.', 'Cook and stir ground beef in a skillet over medium heat until meat is crumbly and no longer pink, 5 to 10 minutes. Drain excess grease. Stir in seasonings and simmer until beef mixture has thickened, 8 to 10 minutes.Spread tortilla chips on the prepared baking sheet; top with Cheddar cheese and dot with refried beans and ground beef mixture.Broil in the preheated oven until cheese is melted, watching carefully to prevent burning, 3 to 5 minutes.Top nachos with salsa, sour cream, black olives, green onions, and jalapeno peppers.');




/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;