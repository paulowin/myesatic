-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 03 mars 2024 à 01:43
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `myesatic`
--

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` text NOT NULL,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20240302063701_demo.sql', 'demo.sql'),
(2, '20240302063755_myesatic.sql', 'myesatic.sql'),
(3, '20240302064125_Great-zim-aerial-looking-West.JPG', 'Great-zim-aerial-looking-West.JPG'),
(4, '20240302064818_TD Calcul vectoriel.pdf', 'TD Calcul vectoriel.pdf'),
(5, '20240302105036_upload.sql', 'upload.sql'),
(6, '20240302105516_myesatic (1).sql', 'myesatic (1).sql'),
(7, '20240302110248_Configuration.xml', 'Configuration.xml'),
(8, '20240302110509_modele-excel-notes-scolaires.xlsx', 'modele-excel-notes-scolaires.xlsx'),
(9, '20240302113902_Non confirmé 696469.crdownload', 'Non confirmé 696469.crdownload');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
