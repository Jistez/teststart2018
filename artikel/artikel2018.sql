-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 18 sep 2017 kl 11:08
-- Serverversion: 5.6.17
-- PHP-version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `artikel2018`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `Artid_pk` int(5) NOT NULL AUTO_INCREMENT,
  `Pris` int(6) NOT NULL,
  `Bild` varchar(1000) NOT NULL,
  `Info` varchar(1000) NOT NULL,
  `Art_namn` varchar(1000) NOT NULL,
  PRIMARY KEY (`Artid_pk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `artikel`
--

INSERT INTO `artikel` (`Artid_pk`, `Pris`, `Bild`, `Info`, `Art_namn`) VALUES
(1, 200, 'bild1.jpg', 'Nya X1 Carbon har kolfiberförstärkt chassi och är precis lika tålig som föregångaren. Den har dessutom mindre format och är vår lättaste och tunnaste X1 Carbon någonsin. Ändå är den packad med mer kraft än någonsin: Windows 10 Pro, sjunde generationens Intel® Core™-processorer, blixtsnabb Thunderbolt 3 och 14-tums Quad-HD-bildskärm (Quad-HD endast tillgängligt på vissa modeller).', 'dator'),
(2, 300, 'bild2.jpg', 'Nya X1 Carbon har kolfiberförstärkt chassi och är precis lika tålig som föregångaren. Den har dessutom mindre format och är vår lättaste och tunnaste X1 Carbon någonsin. Ändå är den packad med mer kraft än någonsin: Windows 10 Pro, sjunde generationens Intel® Core™-processorer, blixtsnabb Thunderbolt 3 och 14-tums Quad-HD-bildskärm (Quad-HD endast tillgängligt på vissa modeller).', 'skrivare');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
