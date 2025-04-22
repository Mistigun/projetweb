-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 22 avr. 2025 à 10:26
-- Version du serveur : 9.1.0
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `efreitchop`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnee`
--

DROP TABLE IF EXISTS `abonnee`;
CREATE TABLE IF NOT EXISTS `abonnee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `zip` char(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `abonnee`
--

INSERT INTO `abonnee` (`id`, `email`, `lastname`, `firstname`, `ville`, `adresse`, `zip`) VALUES
(3, 'ch.courcol@outlook.fr', 'courcol', 'charles', 'villejuif', 'oui', '78888');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
