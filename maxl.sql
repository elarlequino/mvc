-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 26 mai 2025 à 14:24
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `maxl`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` text NOT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `login`, `mdp`) VALUES
(1, 'admin', '$2y$10$WvGOI3Z83alXjdnG7Y0mLu4E3MUx47VQnnaeZneRQEEldIixZvYXm'),
(2, 'max', '$2y$10$EW/ZS10bgP791rAzOjhROucfCKgsAW.SfG1QmdN/FE7U0Ef4h5fk6');

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL,
  `cat` varchar(45) DEFAULT NULL,
  `text` longtext,
  `titre` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `cat`, `text`, `titre`) VALUES
(1, 'dessin', 'mes inspiration en générale sur les quelle je prend example', 'dessin'),
(2, 'manga', 'une rejeter de la sociéter qui veut jouer dans un groupe de rock pour <br />\r\n        jouer sur scene et devenir connue', 'bochi'),
(3, 'manga', 'seinen parlant d\'un mec qui ce transforme en homme tronsconeuse pour<br />\r\n        réaliser sont rêve : avoir une meuf mais éssaye de ce faire tuer h24', 'chainsawman'),
(4, 'jeuxplat', 'mes jeux de sociéter préférer , mon genre préférer étant la gestion de\r\nrescource .', 'jeux de plateaux'),
(5, 'jeuxplat', 'mes jeux de cartes préférer , pas aussie nombreux que ceux de plateaux\r\n        mais je tiens a pas les mélanger', 'jeux de cartes'),
(6, 'jeuxpap', 'les jeux papier ou jeux de role sont des sorte de jeux de sociéter ou\r\n          un joueur joue le mâitre du donjon et les autre des personage , le\r\n          maître raconte une histoire et le joueur décide des action de leur\r\n          personage , ainsi toute les décision pour savoit si il réussite sont\r\n          décider par les dées', 'c\'est quoi ?'),
(7, 'jeuxpap', 'le genre médiéval fantaisie', 'mes préférer :'),
(8, 'manga', 'un groupe d\'aventurier s\'aventure dans un donjon pour secourir la soeur\r\n        du héro , en mangant des monstre pour survivre', 'glouton et dragon'),
(9, 'projet', NULL, 'zone out'),
(10, 'projet', NULL, 'oxa'),
(11, 'projet', NULL, 'panificatione');

-- --------------------------------------------------------

--
-- Structure de la table `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int NOT NULL AUTO_INCREMENT,
  `num_ensemble` int DEFAULT NULL,
  `alt` mediumtext,
  `url` mediumtext,
  `article_id` int NOT NULL,
  PRIMARY KEY (`id`,`article_id`),
  KEY `fk_img_article_idx` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `img`
--

INSERT INTO `img` (`id`, `num_ensemble`, `alt`, `url`, `article_id`) VALUES
(1, NULL, NULL, '/img/inspi1.jpg', 1),
(2, NULL, NULL, '/img/inspi2.jpg', 1),
(3, NULL, 'bochi', '/img/bochi.jpg', 2),
(7, NULL, 'ryou', '/img/ryou.jpg', 2),
(8, NULL, 'nijika', '/img/nijika.jpg', 2),
(9, NULL, 'kita', '/img/kita.jpg', 2),
(10, NULL, 'denji', '/img/denji.jpg', 3),
(11, NULL, 'kobeni', '/img/kobenicry.jpg', 3),
(12, NULL, 'asa', '/img/asaautiste.jpg', 3),
(13, NULL, 'yoshida', 'img/yoshida.jpg', 3),
(17, NULL, 'mon jeux le plus jouer , des animaux qui s\'entre tue dans une forêt', '/img/root.jpg', 4),
(18, NULL, 'mon jeux préféret , meilleur jeux de stratégie que je connaisse , domnation et royauté', '/img/oath.jpg', 4),
(19, NULL, 'jeux d\'étentte et simple a comprendre sur le voyage au japon', '/img/Tokaido.jpg', 4),
(20, NULL, 'a jouer a l\'apérot simple a comprendre , rapide', '/img/seasalt.jpg', 5),
(21, NULL, 'parfait pour briser des amitier , long , rpg', '/img/munchkin.jpg', 5),
(22, NULL, 'jeux de trahison maladroite , gestion de rescource et rapide', '/img/citadel.jpg', 5),
(23, NULL, 'pathfider est un jeux de role récent en comparaisont avec sont\r\n              cousin d&d et est possède une capaciter de création de personage\r\n              bien supérieur c\'est pour sa que je le préfaire', '/img/path.png', 7),
(24, NULL, 'root le jeux de role ce passe dans le même univers que le jeux de\r\n              plateaux a l\'excespsion que les joueur joue tous des vagabonds', '/img/roologo.jpg', 7),
(25, NULL, 'donjon et draon est le jeux de role au quel j\'aie le plus jouer , je\r\n            me suis fait de bon souvenir avec mes mais il limite la création de\r\n            personage ce qui peut être génant', '/img/dnd.png', 7),
(26, NULL, 'LaiosTouden', '/img/LaiosTouden.jpg', 8),
(27, NULL, 'marcille', '/img/marcille.jpg', 8),
(28, NULL, 'senshi', '/img/senshi.jpg', 8),
(29, NULL, 'chillchunk', '/img/chillchunk.jpg', 8),
(30, NULL, 'Izutsumi', '/img/Izutsumi.jpg', 8),
(31, NULL, 'falin', '/img/falintouden.jpg', 8),
(32, NULL, NULL, '/img/zone_out_c1.png', 9),
(33, NULL, NULL, '/img/zone_out_c1.png', 9),
(34, NULL, NULL, '/img/zone_out_c3.png', 9),
(35, NULL, NULL, '/img/zone_out_c4.png', 9),
(36, NULL, NULL, '/img/Zone_Outbrnadboard.png', 9),
(37, NULL, NULL, '/img/brnadboardoxa.png', 10),
(38, NULL, NULL, '/img/moodboard.png', 10),
(39, NULL, NULL, '/img/logooxa.png', 10),
(40, NULL, NULL, '/img/panificatione.png', 11),
(41, NULL, NULL, '/img/panificatione2.png', 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'lefebvre max', 'maxlefebvre2005@gmail.com', '$2y$10$OFEMO.alYQ.vOi2VMUWQiOPzaOoIU4Nd4SpbX7txNHcGxVajJUq2.'),
(2, 'lefebvre max', 'maxlefebvre2005@gmail.com', '$2y$10$.0FPZXRNMFug2IUY2nLXDODvcYNLdFxfzChZfwfXSQEymGoyI3erC'),
(3, 'toto', 'nigerialoverdanielle@gmail.com', '$2y$10$XGIfKzKGkeE.pAH/pJyuB.xSupQxl9oD0PsKFUu9gSVAHDqToSiXm');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `fk_img_article` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
