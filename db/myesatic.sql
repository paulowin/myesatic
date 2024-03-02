-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 02 mars 2024 à 06:52
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `upload`
--

INSERT INTO `upload` (`id`, `fname`, `name`) VALUES
(1, '20240302063701_demo.sql', 'demo.sql'),
(2, '20240302063755_myesatic.sql', 'myesatic.sql'),
(3, '20240302064125_Great-zim-aerial-looking-West.JPG', 'Great-zim-aerial-looking-West.JPG'),
(4, '20240302064818_TD Calcul vectoriel.pdf', 'TD Calcul vectoriel.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `nom` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `prenoms` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `birth` text,
  `matricule` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `niveau_etude` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `filiere` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `classe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `nom`, `prenoms`, `birth`, `matricule`, `niveau_etude`, `filiere`, `classe`, `mail`, `mdp`) VALUES
(1, 'Koffi', 'Loukou Paul-Erwin', NULL, NULL, NULL, NULL, NULL, 'paulerwink@gmail.com', '$2y$10$k8LdLrB4EWnuHohSmO'),
(2, 'Koffi', 'Loukou Paul-Erwin', 'A', 'B', 'C', 'D', 'E', 'paulerwi@gmail.com', '$2y$10$kcVb54yB37/21Ic..K'),
(3, 'Koffi', 'Loukou Paul-Erwin', 'A', 'ab', 'C', 'D', 'E', 'paul@gmail.com', '$2y$10$92kINWcyedXqO9N6WT'),
(4, 'Koffi', 'Loukou Paul-Erwin', 'A', 'C', 'C', 'D', 'E', 'p@gmail.com', '$2y$10$jqq70Nquq62KzIEYlc'),
(5, 'Koffi', 'Loukou Paul-Erwin', 'A', 'abc', 'C', 'D', 'E', 'k@gmail.com', '$2y$10$eOLitOU3PFuxk6vSH0yfF.2lS6wcr1yD0FOWwBNt1EYJxshMlQrea'),
(6, 'Koffi', 'Loukou Paul-Erwin', 'A', 'ze', 'C', 'D', 'E', 'ze@gmail.com', '$2y$10$O4sje9sA3NS/UkyUFuOgze9Ivx.xpqJ5emqK6jX4RLbTHQtsDvB.a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
