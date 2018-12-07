
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `css_themes` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `theme_name` varchar(30) NOT NULL,
    `css_filename` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

CREATE TABLE IF NOT EXISTS `main_pages` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `title` varchar(30) NOT NULL,
    `content` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

CREATE TABLE IF NOT EXISTS `sub_pages` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `title` varchar(30) NOT NULL,
    `content` varchar(30) NOT NULL,
    `main_page_id` int(10) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;

CREATE TABLE IF NOT EXISTS `users` (
    `id` int(10) NOT NULL AUTO_INCREMENT,
    `username` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    `role` varchar(30) NOT NULL,
    `theme_id` varchar(30) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11;