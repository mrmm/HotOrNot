-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 10 Mars 2013 à 19:29
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `zooz_webapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(32) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  `pt` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `membre_pseudo` (`login`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `login`, `mdp`, `pt`) VALUES
(1, 'el.ron', 'bc0a0772511ba9ae74bfa869fe3e611b', 5);

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` text NOT NULL,
  `rate` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `path`, `rate`) VALUES
(1, 'images/1337465701_55859.jpg', 9),
(2, 'images/4_chan_epic_Wallpapers_11__1280x800_1326.jpg', 8),
(3, 'images/6918.jpg', 5),
(4, 'images/Broken_Glass_Wallpaper_wht0p.jpg', 2),
(5, 'images/Geek Lifestyle.jpg', 4),
(6, 'images/Geek-Wallpaper-07..jpg', 2),
(7, 'images/Geek.jpg', 3),
(8, 'images/GeekWallpapers.BloggersGeek-14.jpg', 8),
(9, 'images/Geek_Wallpaper_by_iDn5.jpg', 4),
(10, 'images/Spratt_Razer1440x900.jpg', 4),
(11, 'images/The Geek Solution (1).jpg', 3),
(12, 'images/Truth___Wallpaper_1920x1200.jpg', 2),
(13, 'images/Wallpaper-Geek-018.jpg', 2),
(14, 'images/Wallpaper2.jpg', 4),
(15, 'images/axe geek funny wallpaper.jpg', 2),
(16, 'images/billgates.jpg', 0),
(17, 'images/black-lines-wallpaper-wallpapers_14728_1920x1200.jpg', 0),
(18, 'images/black_wood_background_by_egosumpotens-d3fst0k.jpg', 4),
(19, 'images/blue-matrix-binary-code-geek-com-299040.jpg', 0),
(20, 'images/blue-matrix-code-1440-x-900.jpg', 0),
(21, 'images/computer_on_wallpaper1920x10801.jpg', 3),
(22, 'images/computers_text_humor_geek_funny_technology_only_black_desktop_1366x768_hd-wallpaper-484896.jpg', 2),
(23, 'images/fixed-apple-by-android-1680x1050-wallpaper-8220.jpg', 1),
(24, 'images/geek-wallpaper.jpg', 2),
(25, 'images/geek_mobo_wallpaper_by_suchipi-d4cxiwh.jpg', 2),
(26, 'images/geek_wallpaper_by_nitroniuminc-d51m82v.jpg', 1),
(27, 'images/h4k3r.jpg', 2),
(28, 'images/hacker-wallpapers-5352.jpg', 0),
(29, 'images/jpg_linux-wallpaper-for-beginners.jpg', 0),
(30, 'images/line.jpg', 1),
(31, 'images/man_woman_geek_wallpaper.jpg', 0),
(32, 'images/matrix-error-284343.jpg', 1),
(33, 'images/php-wallpaper.jpg', 0),
(34, 'images/radioactive-logo-295972.jpg', 0),
(35, 'images/radioactive-logo-some-of-my-favourite-browse-and-enjoy-how-to-geek-390909.jpg', 1),
(36, 'images/repo_men_wallpaper.jpg', 0),
(37, 'images/stupid-mathematics_00274144.jpg', 0),
(38, 'images/vampire-geek-free-86813.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
