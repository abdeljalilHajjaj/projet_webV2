-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 29 avr. 2019 à 19:25
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monsiteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(11) NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(255) NOT NULL,
  `prix_article` decimal(6,2) NOT NULL,
  `quantite_article` int(11) NOT NULL,
  `description_article` varchar(255) NOT NULL,
  `type_article` int(11) NOT NULL,
  PRIMARY KEY (`id_article`),
  KEY `type_article` (`type_article`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `nom_article`, `prix_article`, `quantite_article`, `description_article`, `type_article`) VALUES
(1, 'pc portable', '250.00', 10, 'pc portable de marque azus ', 1),
(2, 'livre Madame Bovary', '12.50', 15, 'Romanesque (roman) ', 2),
(3, 'chaine hifi sony', '210.00', 6, 'chaine hifi de marque sony  ', 3),
(4, 'souris', '10.00', 100, 'souris sans fil ', 1),
(5, 'Boitier PC noir', '65.00', 200, 'Le boÃ®tier PC Gamer Zalman Z1 Neo bÃ©nÃ©ficie d\'un superbe design typÃ© Gaming dans la plus pure tradition Zalman. Il intÃ¨gre une solution de refroidissement efficace avec 2 ventilateurs Ã  LEDs 120 mm Ã  l\'avant et un ventilateur 120 mm en extraction.', 1),
(6, 'Corsair Builder Series VS650 80PLUS', '60.00', 150, 'L\'alimentation Corsair VS650 80PLUS constitue un excellent choix si vous assemblez un systÃ¨me domestique ou bureautique Ã  faible consommation, mais exigez la compatibilitÃ© et la fiabilitÃ© qui font la renommÃ©e de Corsair.', 1),
(7, 'Enceinte Pc Logitech', '25.00', 120, 'Ces haut-parleurs compacts Logitech Z120 alimentÃ©s par le port USB avec leurs commandes d\'alimentation et de volume intÃ©grÃ©es sont simples Ã  connecter sur Ã  peu prÃ¨s n\'importe quelle source audio.', 1),
(8, 'Tablette Huawei MediaPad M5 10.8', '410.00', 50, 'DÃ©couvrez sans attendre une nouvelle expÃ©rience numÃ©rique en compagnie du MediaPad M5 de Huawei ! Cette tablette s\'attache Ã  vous proposer le meilleur de la technologie pour vous offrir une immersion complÃ¨te Ã  chaque instant. Pour toutes vos utilis', 1),
(9, ' Le beau livre du franÃ§ais ', '12.00', 100, 'Bon livre pour apprendre le franÃ§ais', 2),
(10, 'Guide des unitÃ©s de mesure', '15.00', 150, 'Admis actuellement comme systÃ¨me lÃ©gal dans la plupart des pays, le systÃ¨me international doit encore vaincre de nombreuses habitudes. Un coup d\'Å“il sur les Ã©crits tous azimuts est significatif Ã  cet Ã©gard.', 2),
(11, 'Web Design Index by Content.02 ', '14.95', 120, 'L\'ensemble de livre et CD-ROM Web Design Index By Content.02 prÃ©sente 500 sites Web actuels classÃ©s par sujet, offrant un aperÃ§u global des diffÃ©rents designs Web.', 2),
(12, 'Tout sur la recherche avancÃ©e et les services', '7.95', 120, 'Depuis sa crÃ©ation en 1998, Google est devenu le leader incontournable des moteurs de recherche. La mission que s\'est assignÃ©e cette sociÃ©tÃ© est d\'organiser l\'immense volume d\'informations disponible sur le Web.', 2),
(13, 'Des fondamentaux Ã  la prÃ©sentation dÃ©taillÃ©e', '9.95', 100, 'Ce livre sur AutoCAD 2010 est destinÃ© Ã  un public de dessinateurs techniques qui se forment Ã  AutoCAD.', 2),
(14, 'CÃ¢ble audio pour haut-parleur Calibre 16 Section', '10.00', 100, 'CÃ¢ble haut-parleur - Calibre 16 - Section 1,3 mmÂ² - 65 brins - Longueur 30 m ', 3),
(15, 'Adaptateur CÃ¢ble HDMI MÃ¢le ', '2.00', 120, 'Haute QualitÃ©:FabriquÃ© en matÃ©riel d\'haute qualitÃ© .', 3),
(16, 'Lecteur cassette portable', '35.00', 50, 'MICROPHONE INTÃ‰GRÃ‰ Ã€ ENREGISTRER ET SÅ½AMUSER - Ã‰conomisez des histoires stupides ou crÃ©ez votre propre mixtape! Le Ricatech PR85 permet de tout enregistrer avec la fonction d\'enregistrement intÃ©grÃ©e. ', 3),
(17, 'MaxKu housse EVA Dur Cas for JBL', '10.99', 120, 'FabriquÃ© en boÃ®tier dur Premium ProtÃ¨ge et stocke votre haut-parleur BOSE avec cÃ¢bles, berceau de recharge. ', 3),
(18, 'Adaptateur universel 45 tours ', '12.49', 50, ' Un must pour tous les DJ et les amateurs de vinyle, Disques adaptateur 7 &quot;(45 tours), Convient Ã  toutes les platines ,Poids: 21 g MatÃ©riel: Aluminium ', 3);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int(11) NOT NULL AUTO_INCREMENT,
  `date_commande` date NOT NULL,
  `client_id` int(11) NOT NULL,
  `prix_commande` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id_commande`),
  KEY `client_id` (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `date_commande`, `client_id`, `prix_commande`) VALUES
(1, '2018-05-14', 10, '0.00'),
(3, '2018-05-14', 10, '482.50'),
(4, '2018-05-14', 10, '482.50'),
(5, '2018-05-14', 13, '750.00'),
(6, '2018-05-27', 21, '480.45'),
(7, '2018-05-27', 21, '437.50');

-- --------------------------------------------------------

--
-- Structure de la table `comment_article`
--

DROP TABLE IF EXISTS `comment_article`;
CREATE TABLE IF NOT EXISTS `comment_article` (
  `id_comment` int(11) NOT NULL AUTO_INCREMENT,
  `nom_comment` varchar(255) NOT NULL,
  `date_comment` date NOT NULL,
  `auteur_comment` varchar(255) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id_comment`),
  KEY `utilisateur_id` (`utilisateur_id`),
  KEY `article_id` (`article_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment_article`
--

INSERT INTO `comment_article` (`id_comment`, `nom_comment`, `date_comment`, `auteur_comment`, `utilisateur_id`, `article_id`) VALUES
(1, 'tres bon pc', '2018-05-10', 'adel', 10, 1),
(2, 'tres bon livre &agrave; lire absolument ', '2018-05-10', 'adel', 10, 2),
(3, 'oui c\'est de la qualit&eacute;', '2018-05-10', 'adel', 12, 1),
(4, 'manque un peu d\'espace m&eacute;moire', '2018-05-27', 'testeur', 21, 1);

-- --------------------------------------------------------

--
-- Structure de la table `connexion_utilisateur`
--

DROP TABLE IF EXISTS `connexion_utilisateur`;
CREATE TABLE IF NOT EXISTS `connexion_utilisateur` (
  `id_connexion` int(11) NOT NULL AUTO_INCREMENT,
  `utilisateur_id` int(11) NOT NULL,
  `date_connexion` date NOT NULL,
  PRIMARY KEY (`id_connexion`),
  KEY `id_utilisateur` (`utilisateur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=425 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `connexion_utilisateur`
--

INSERT INTO `connexion_utilisateur` (`id_connexion`, `utilisateur_id`, `date_connexion`) VALUES
(1, 10, '0000-00-00'),
(2, 10, '0000-00-00'),
(3, 10, '0000-00-00'),
(4, 10, '2017-12-03'),
(5, 10, '2017-12-04'),
(6, 10, '2017-12-04'),
(7, 10, '2017-12-04'),
(8, 10, '2017-12-04'),
(9, 10, '2017-12-04'),
(10, 10, '2017-12-04'),
(11, 12, '2017-12-04'),
(12, 10, '2017-12-04'),
(13, 10, '2017-12-04'),
(14, 10, '2017-12-04'),
(15, 10, '2017-12-04'),
(16, 12, '2017-12-04'),
(17, 12, '2017-12-06'),
(18, 12, '2017-12-06'),
(19, 10, '2017-12-14'),
(20, 10, '2017-12-17'),
(21, 10, '2017-12-17'),
(22, 10, '2017-12-17'),
(23, 10, '2017-12-17'),
(24, 10, '2017-12-17'),
(25, 10, '2017-12-17'),
(26, 10, '2017-12-17'),
(27, 10, '2017-12-17'),
(28, 10, '2017-12-17'),
(29, 10, '2017-12-17'),
(30, 10, '2017-12-17'),
(31, 10, '2017-12-17'),
(32, 10, '2017-12-17'),
(33, 10, '2017-12-17'),
(34, 10, '2017-12-17'),
(35, 10, '2017-12-17'),
(36, 10, '2017-12-17'),
(37, 10, '2017-12-17'),
(38, 10, '2017-12-17'),
(39, 10, '2017-12-17'),
(40, 10, '2017-12-17'),
(41, 10, '2017-12-17'),
(42, 10, '2017-12-17'),
(43, 10, '2017-12-18'),
(44, 10, '2017-12-18'),
(45, 10, '2017-12-18'),
(46, 12, '2017-12-18'),
(47, 12, '2017-12-18'),
(48, 10, '2017-12-18'),
(49, 10, '2017-12-18'),
(50, 10, '2017-12-18'),
(51, 12, '2017-12-18'),
(52, 10, '2017-12-18'),
(53, 10, '2017-12-18'),
(54, 10, '2017-12-18'),
(55, 10, '2017-12-18'),
(56, 10, '2017-12-18'),
(57, 10, '2017-12-18'),
(58, 12, '2017-12-18'),
(59, 10, '2017-12-18'),
(60, 10, '2017-12-18'),
(61, 10, '2017-12-18'),
(62, 10, '2017-12-19'),
(63, 10, '2017-12-19'),
(64, 10, '2017-12-19'),
(65, 12, '2017-12-19'),
(66, 12, '2017-12-19'),
(67, 10, '2017-12-19'),
(68, 10, '2017-12-24'),
(69, 10, '2017-12-24'),
(70, 10, '2017-12-26'),
(71, 10, '2017-12-26'),
(72, 10, '2017-12-26'),
(73, 10, '2017-12-26'),
(74, 10, '2017-12-26'),
(75, 10, '2017-12-26'),
(76, 10, '2017-12-26'),
(77, 10, '2017-12-26'),
(78, 10, '2017-12-26'),
(79, 10, '2017-12-26'),
(80, 10, '2017-12-26'),
(81, 10, '2017-12-26'),
(82, 10, '2017-12-26'),
(83, 10, '2017-12-26'),
(84, 10, '2017-12-26'),
(85, 10, '2017-12-26'),
(86, 10, '2017-12-26'),
(87, 10, '2017-12-26'),
(88, 10, '2017-12-26'),
(89, 10, '2017-12-26'),
(90, 10, '2017-12-26'),
(91, 10, '2017-12-26'),
(92, 10, '2017-12-26'),
(93, 10, '2017-12-26'),
(94, 10, '2017-12-26'),
(95, 10, '2017-12-26'),
(96, 10, '2017-12-26'),
(97, 10, '2017-12-26'),
(98, 10, '2017-12-26'),
(99, 10, '2017-12-26'),
(100, 10, '2017-12-26'),
(101, 10, '2017-12-26'),
(102, 10, '2017-12-26'),
(103, 10, '2017-12-26'),
(104, 10, '2017-12-26'),
(105, 10, '2017-12-26'),
(106, 10, '2017-12-26'),
(107, 10, '2017-12-30'),
(108, 10, '2017-12-30'),
(109, 10, '2017-12-30'),
(110, 10, '2017-12-30'),
(111, 10, '2017-12-30'),
(112, 10, '2017-12-30'),
(113, 10, '2017-12-30'),
(114, 10, '2017-12-30'),
(115, 10, '2017-12-30'),
(116, 10, '2017-12-30'),
(117, 10, '2017-12-30'),
(118, 10, '2017-12-30'),
(119, 10, '2017-12-30'),
(120, 10, '2017-12-30'),
(121, 10, '2017-12-30'),
(122, 10, '2017-12-30'),
(123, 10, '2017-12-30'),
(124, 10, '2017-12-30'),
(125, 10, '2017-12-30'),
(126, 10, '2017-12-30'),
(127, 10, '2017-12-30'),
(128, 10, '2017-12-30'),
(129, 10, '2017-12-30'),
(130, 10, '2017-12-30'),
(131, 10, '2017-12-30'),
(132, 10, '2017-12-30'),
(133, 10, '2018-01-01'),
(134, 10, '2018-01-01'),
(135, 10, '2018-01-01'),
(136, 10, '2018-01-01'),
(137, 10, '2018-01-01'),
(138, 10, '2018-01-01'),
(139, 10, '2018-01-01'),
(140, 10, '2018-01-01'),
(141, 10, '2018-01-01'),
(142, 10, '2018-01-01'),
(143, 10, '2018-01-01'),
(144, 10, '2018-01-01'),
(145, 10, '2018-01-01'),
(146, 10, '2018-01-01'),
(147, 10, '2018-01-01'),
(148, 10, '2018-01-01'),
(149, 10, '2018-01-01'),
(150, 10, '2018-01-01'),
(151, 10, '2018-01-01'),
(152, 10, '2018-01-01'),
(153, 10, '2018-01-01'),
(154, 10, '2018-01-01'),
(155, 10, '2018-01-01'),
(156, 10, '2018-01-01'),
(157, 10, '2018-01-01'),
(158, 10, '2018-01-01'),
(159, 10, '2018-01-01'),
(160, 10, '2018-01-01'),
(161, 10, '2018-01-01'),
(162, 10, '2018-01-01'),
(163, 12, '2018-01-01'),
(164, 10, '2018-01-01'),
(165, 10, '2018-01-01'),
(166, 10, '2018-01-01'),
(167, 10, '2018-01-01'),
(168, 12, '2018-01-01'),
(169, 12, '2018-01-01'),
(170, 12, '2018-01-01'),
(171, 12, '2018-01-01'),
(172, 12, '2018-01-01'),
(173, 12, '2018-01-01'),
(174, 10, '2018-01-01'),
(175, 10, '2018-01-14'),
(176, 10, '2018-01-14'),
(177, 10, '2018-01-14'),
(178, 10, '2018-01-14'),
(179, 10, '2018-01-14'),
(180, 10, '2018-01-14'),
(181, 10, '2018-01-18'),
(182, 10, '2018-01-18'),
(183, 10, '2018-01-18'),
(184, 10, '2018-01-19'),
(185, 10, '2018-01-19'),
(186, 10, '2018-01-19'),
(187, 10, '2018-01-19'),
(188, 10, '2018-01-19'),
(189, 10, '2018-01-19'),
(190, 10, '2018-01-20'),
(191, 10, '2018-01-20'),
(192, 10, '2018-01-20'),
(193, 10, '2018-01-20'),
(194, 10, '2018-01-21'),
(195, 10, '2018-01-21'),
(196, 10, '2018-01-21'),
(197, 10, '2018-01-21'),
(198, 10, '2018-01-21'),
(199, 10, '2018-01-21'),
(200, 10, '2018-01-21'),
(201, 10, '2018-01-21'),
(202, 10, '2018-01-21'),
(203, 10, '2018-01-21'),
(204, 10, '2018-01-21'),
(205, 10, '2018-01-21'),
(206, 10, '2018-01-21'),
(207, 10, '2018-01-21'),
(208, 10, '2018-01-21'),
(209, 10, '2018-01-21'),
(210, 10, '2018-01-21'),
(211, 10, '2018-01-21'),
(212, 10, '2018-01-21'),
(213, 10, '2018-01-21'),
(214, 10, '2018-01-21'),
(215, 10, '2018-01-21'),
(216, 10, '2018-01-21'),
(217, 10, '2018-01-21'),
(218, 10, '2018-01-21'),
(219, 10, '2018-01-21'),
(220, 10, '2018-01-21'),
(221, 10, '2018-01-21'),
(222, 10, '2018-01-21'),
(223, 10, '2018-01-21'),
(224, 10, '2018-01-21'),
(225, 10, '2018-01-21'),
(226, 10, '2018-01-21'),
(227, 10, '2018-01-21'),
(228, 10, '2018-01-21'),
(229, 10, '2018-01-21'),
(230, 10, '2018-01-21'),
(231, 10, '2018-01-21'),
(232, 10, '2018-01-21'),
(233, 10, '2018-01-21'),
(234, 10, '2018-01-21'),
(235, 10, '2018-01-21'),
(236, 10, '2018-01-21'),
(237, 10, '2018-01-21'),
(238, 10, '2018-01-21'),
(239, 10, '2018-01-21'),
(240, 10, '2018-01-21'),
(241, 10, '2018-01-21'),
(242, 10, '2018-01-22'),
(243, 10, '2018-01-22'),
(244, 10, '2018-01-22'),
(245, 10, '2018-01-22'),
(246, 10, '2018-01-22'),
(247, 10, '2018-01-22'),
(248, 10, '2018-01-22'),
(249, 10, '2018-01-22'),
(250, 10, '2018-01-22'),
(251, 10, '2018-01-22'),
(252, 10, '2018-01-22'),
(253, 10, '2018-01-22'),
(254, 10, '2018-01-22'),
(255, 10, '2018-01-22'),
(256, 10, '2018-01-22'),
(257, 10, '2018-01-22'),
(258, 10, '2018-01-22'),
(259, 10, '2018-01-22'),
(260, 10, '2018-01-22'),
(261, 12, '2018-01-22'),
(262, 12, '2018-01-22'),
(263, 10, '2018-01-22'),
(264, 10, '2018-01-22'),
(265, 10, '2018-01-24'),
(266, 10, '2018-01-24'),
(267, 10, '2018-01-24'),
(268, 10, '2018-01-24'),
(269, 10, '2018-01-25'),
(270, 10, '2018-01-25'),
(271, 10, '2018-01-25'),
(272, 10, '2018-01-25'),
(273, 10, '2018-01-25'),
(274, 10, '2018-01-25'),
(275, 10, '2018-01-25'),
(276, 10, '2018-01-26'),
(277, 10, '2018-01-26'),
(278, 10, '2018-01-26'),
(279, 10, '2018-01-26'),
(280, 10, '2018-01-26'),
(281, 10, '2018-01-26'),
(282, 10, '2018-01-26'),
(283, 10, '2018-01-28'),
(284, 10, '2018-01-28'),
(285, 10, '2018-01-28'),
(286, 10, '2018-01-28'),
(287, 10, '2018-01-28'),
(288, 10, '2018-01-28'),
(289, 10, '2018-01-28'),
(290, 10, '2018-01-28'),
(291, 10, '2018-01-28'),
(292, 10, '2018-01-28'),
(293, 10, '2018-01-28'),
(294, 10, '2018-02-01'),
(295, 12, '2018-02-01'),
(296, 12, '2018-02-01'),
(297, 12, '2018-02-01'),
(298, 12, '2018-02-01'),
(299, 10, '2018-02-01'),
(300, 12, '2018-02-01'),
(301, 10, '2018-02-02'),
(302, 10, '2018-02-04'),
(303, 12, '2018-02-04'),
(304, 10, '2018-02-04'),
(305, 10, '2018-02-04'),
(306, 10, '2018-02-04'),
(307, 10, '2018-02-04'),
(308, 10, '2018-02-04'),
(309, 12, '2018-02-04'),
(310, 10, '2018-02-04'),
(311, 10, '2018-02-04'),
(312, 10, '2018-02-04'),
(313, 10, '2018-02-04'),
(314, 12, '2018-02-04'),
(315, 12, '2018-02-04'),
(316, 12, '2018-02-04'),
(317, 12, '2018-02-04'),
(318, 12, '2018-02-04'),
(319, 10, '2018-02-04'),
(320, 10, '2018-02-04'),
(321, 10, '2018-02-04'),
(322, 10, '2018-02-04'),
(323, 10, '2018-02-04'),
(324, 10, '2018-02-04'),
(325, 10, '2018-02-04'),
(326, 10, '2018-02-06'),
(327, 12, '2018-02-06'),
(328, 10, '2018-02-07'),
(329, 12, '2018-02-07'),
(330, 10, '2018-04-23'),
(331, 10, '2018-04-23'),
(332, 17, '2018-05-10'),
(333, 20, '2018-05-10'),
(334, 12, '2018-05-10'),
(335, 12, '2018-05-10'),
(336, 12, '2018-05-10'),
(337, 12, '2018-05-10'),
(338, 12, '2018-05-10'),
(339, 12, '2018-05-10'),
(340, 12, '2018-05-10'),
(341, 12, '2018-05-10'),
(342, 12, '2018-05-10'),
(343, 12, '2018-05-10'),
(344, 12, '2018-05-10'),
(345, 10, '2018-05-10'),
(346, 10, '2018-05-10'),
(347, 10, '2018-05-10'),
(348, 10, '2018-05-10'),
(349, 10, '2018-05-10'),
(350, 12, '2018-05-10'),
(351, 10, '2018-05-12'),
(352, 10, '2018-05-12'),
(353, 10, '2018-05-13'),
(354, 10, '2018-05-13'),
(355, 10, '2018-05-13'),
(356, 10, '2018-05-13'),
(357, 10, '2018-05-13'),
(358, 10, '2018-05-13'),
(359, 10, '2018-05-13'),
(360, 10, '2018-05-13'),
(361, 10, '2018-05-13'),
(362, 10, '2018-05-13'),
(363, 10, '2018-05-13'),
(364, 10, '2018-05-13'),
(365, 10, '2018-05-13'),
(366, 10, '2018-05-13'),
(367, 10, '2018-05-13'),
(368, 10, '2018-05-13'),
(369, 10, '2018-05-13'),
(370, 10, '2018-05-13'),
(371, 10, '2018-05-13'),
(372, 10, '2018-05-13'),
(373, 10, '2018-05-13'),
(374, 10, '2018-05-13'),
(375, 10, '2018-05-13'),
(376, 10, '2018-05-13'),
(377, 10, '2018-05-13'),
(378, 10, '2018-05-13'),
(379, 10, '2018-05-13'),
(380, 10, '2018-05-13'),
(381, 10, '2018-05-13'),
(382, 10, '2018-05-14'),
(383, 10, '2018-05-14'),
(384, 10, '2018-05-14'),
(385, 10, '2018-05-14'),
(386, 10, '2018-05-14'),
(387, 10, '2018-05-14'),
(388, 10, '2018-05-14'),
(389, 13, '2018-05-14'),
(390, 13, '2018-05-14'),
(391, 10, '2018-05-14'),
(392, 10, '2018-05-14'),
(393, 10, '2018-05-14'),
(394, 10, '2018-05-14'),
(395, 10, '2018-05-14'),
(396, 10, '2018-05-14'),
(397, 10, '2018-05-14'),
(398, 10, '2018-05-14'),
(399, 10, '2018-05-15'),
(400, 10, '2018-05-15'),
(401, 10, '2018-05-15'),
(402, 10, '2018-05-15'),
(403, 10, '2018-05-15'),
(404, 12, '2018-05-21'),
(405, 10, '2018-05-21'),
(406, 10, '2018-05-21'),
(407, 12, '2018-05-27'),
(408, 12, '2018-05-27'),
(409, 10, '2018-05-27'),
(410, 21, '2018-05-27'),
(411, 12, '2018-05-27'),
(412, 21, '2018-05-27'),
(413, 21, '2018-05-27'),
(414, 21, '2018-05-27'),
(415, 12, '2018-05-27'),
(416, 12, '2018-05-27'),
(417, 10, '2018-05-27'),
(418, 21, '2018-05-27'),
(419, 21, '2018-05-27'),
(420, 21, '2018-05-28'),
(421, 21, '2018-06-05'),
(422, 21, '2018-06-05'),
(423, 21, '2018-06-05'),
(424, 12, '2018-06-05');

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

DROP TABLE IF EXISTS `ligne_commande`;
CREATE TABLE IF NOT EXISTS `ligne_commande` (
  `article_id` int(11) NOT NULL,
  `commande_id` int(11) NOT NULL,
  `quantite_commande` int(11) NOT NULL,
  PRIMARY KEY (`article_id`,`commande_id`),
  KEY `commande_id` (`commande_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`article_id`, `commande_id`, `quantite_commande`) VALUES
(1, 1, 2),
(1, 3, 1),
(1, 4, 1),
(1, 5, 3),
(1, 6, 1),
(1, 7, 1),
(2, 1, 1),
(2, 3, 1),
(2, 4, 1),
(2, 6, 1),
(2, 7, 1),
(3, 1, 1),
(3, 3, 1),
(3, 4, 1),
(3, 6, 1),
(4, 1, 1),
(4, 3, 1),
(4, 4, 1),
(4, 7, 2),
(5, 7, 2),
(7, 7, 1),
(12, 6, 1);

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

DROP TABLE IF EXISTS `mini_chat`;
CREATE TABLE IF NOT EXISTS `mini_chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  PRIMARY KEY (`id_chat`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mini_chat`
--

INSERT INTO `mini_chat` (`id_chat`, `user_id`, `message`, `pseudo`) VALUES
(1, 10, 'Que pensez vous du nouvel iPhone 8 ?', 'adelbigbos'),
(2, 10, 'avez vous le nouveau clavier sans fil Apple?', 'adelbigbos'),
(3, 10, 'Salut Ã  tous.', 'adelbigbos'),
(4, 12, 'Bon tÃ©lÃ©phone mais assez cher', 'ADMIN'),
(5, 10, 'je pense que Samsung est plus performant.', 'ADMIN'),
(6, 10, 'plus de 850 euros l\'iPhone 8 contre 599 pour le nouveau Galaxy !', 'adelbigbos'),
(7, 12, 'beaucoup trop cher !', 'ADMIN'),
(11, 10, 'ddddd', 'dd'),
(12, 10, '???', 'adelbigbos'),
(13, 10, '???', 'adelbigbos'),
(14, 10, '???', 'adelbigbos'),
(15, 10, '???', 'adelbigbos'),
(16, 10, 'je n\'ai pas compris ?', 'adelbigbos'),
(17, 10, 'tu parles tjrs de l\'iphone ?', 'adelbigbos'),
(18, 10, 'oui pas mal', 'adelbigbos'),
(19, 10, 'qui connais un bon informaticien ?', 'albatros'),
(20, 10, 'il y \'a personne ???', 'albatros'),
(21, 10, '????', 'albatros'),
(22, 10, 'non ?', 'albatros'),
(23, 10, 'moi j\'en connais un ', 'hercule'),
(24, 10, 'Salut Ã  tous', 'zozor'),
(25, 10, 'salut', 'zozor'),
(26, 10, 'je test le mini tchat et vous ?', 'pablo'),
(27, 10, 'je connais un bon livre si sa interesse quelqu\'un.', 'celio'),
(28, 21, 'un message', 'bkkk');

-- --------------------------------------------------------

--
-- Structure de la table `type_article`
--

DROP TABLE IF EXISTS `type_article`;
CREATE TABLE IF NOT EXISTS `type_article` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type` varchar(255) NOT NULL,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type_article`
--

INSERT INTO `type_article` (`id_type`, `nom_type`) VALUES
(1, 'informatique'),
(2, 'livre'),
(3, 'hifi');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` int(11) NOT NULL,
  `date_naissance` date NOT NULL,
  `login` varchar(30) NOT NULL,
  `mot_de_passe` varchar(80) NOT NULL,
  `adresse_email` varchar(50) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `adresse`, `code_postal`, `date_naissance`, `login`, `mot_de_passe`, `adresse_email`) VALUES
(2, 'adel', 'zaidani', 'rue de la limite 32', 1080, '2017-10-31', 'albar', 'miawou', 'adelzaidani@gmail.com'),
(3, 'soufiane', 'anarchie', 'boulverd de verdin 36', 1000, '2017-10-31', 'soufsouf', '$2y$10$78Sko0O3LqMBPZdPq3VFluvID.Q7CikgPQx2etaBJANALqe3gors.', 'adelzaidani@gmail.com'),
(4, 'adsds', 'anarchie', 'boulverd de verdin 36', 1000, '2017-10-31', 'alawi2526', '$2y$10$hLnsJ09.FOXtuFYvw65M/edlH5SkCth8Z/YpBuauzmlxqKiDJfUjO', 'adelzaidani@gmail.com'),
(5, 'adsds', 'anarchie', 'boulverd de verdin 36', 1000, '2017-10-31', 'alawifdfdfdf', '$2y$10$9POD.V02acUBiRwhjspYwe9ssxMom8IgiFy0z9AdVjIamejGITZWC', 'adelzaidani@gmail.com'),
(6, 'adsds', 'anarchie', 'boulverd de verdin 36', 1000, '2017-10-31', 'alawifdfdfdf', '$2y$10$K4Fpa3hQaur3tzwWG0Up8.lKlDnA8X9LyM82thIlq3tDepUQgJtuG', 'adelzaidani@gmail.com'),
(7, 'adsds', 'anarchie', 'boulverd de verdin 36', 1000, '2017-10-31', 'alawifdfdfdf', '$2y$10$19rJWcL0o7tOv9Rx6b8M6OmE8QL.kCDmmmjFq4att03VA3FMwVKVG', 'adelzaidani@gmail.com'),
(8, 'pierre', 'richard', 'rue de france', 1020, '2017-11-01', 'alladin34', '$2y$10$shHcTCX8Tm8Uv7OvZQbd..r7YeXcswb23sxc3oXqlKatRKh7laf5S', 'adelzaidani@gmail.com'),
(9, 'adel', 'asasa', 'asasas', 1000, '2017-11-01', 'albatros', '$2y$10$rCidvLEPtlZcOLLVYxLSb.zaR8.EztQiA/uJZUk6RQSwUfi5.lNEG', 'adelzaidani@gmail.com'),
(10, 'adel', 'asasa', 'asasas', 1080, '2017-11-02', 'adelbigbos', '$2y$10$IHESMEJVZNEofGBHEPZRP.w1LVEGMIIapAqoer9yYtZpG6wwTsAv.', 'adelzaidani@gmail.com'),
(11, 'elhamdi', 'rachid', 'rue de jette 355', 1091, '1982-11-05', 'rachid123', '$2y$10$ALUyKQJ.jZNPX7S2n8dPCO6MqDsBiRhI0sNyEg5Jm.GtLPEsY9Z1y', 'elhamdirachid@gmail.com'),
(12, 'adel', 'zaidani', 'bd louis mettewie 32', 1080, '2013-11-07', 'ADMIN', '$2y$10$emhXNMy7XPRNxJW1C2iQT.8R0iLD.YpQpFwYS/xhGXoz.4kXYO2hK', 'adelzaidani@gmail.com'),
(13, 'rimo', 'bilal', 'rue de ganshoren', 1081, '2017-11-21', 'rimo123', '$2y$10$lSA/3sE9nbANHTJy0mG7YuYqE1xUdZI42UhIIHFfGh/agp1/nQdKG', 'rimo@gmail.com'),
(14, 'Issa', 'Mike', 'rue de tubize', 1800, '1993-11-26', 'issa1', '$2y$10$iLDyv53OVq6NW/GfEwN3xuaMnY8EWdme5nXOxCedhRc6ECMA0Z7hi', 'issamike@gmail.com'),
(15, 'Fernand', 'Richard', 'rue de paris 18', 1070, '1982-04-02', 'fernand', '$2y$10$BqlMIPamKiLptS998.FxaOqVW1drsjO6UPs.7IK9weBzdEj/DrjQW', 'fernad@gmail.com'),
(16, 'van roos', 'beatrice', 'rue de neck', 1083, '1991-05-01', 'beatrice', '$2y$10$NyL0n1NwHwedlRIz6kAtYO//1fOCeVhn62sJHQXVVfLFJ6619R23C', 'beatrice@gmail.com'),
(17, 'alphonse', 'berand', 'rue de la prosperitÃ© ', 1030, '2016-04-01', 'alphonse123', '$2y$10$jcdnG4qIrhDByxAbjeCaHe9FuusKYfuSAxubUejgaf.sJfr2JaqoC', 'alphonse@gmail.com'),
(18, 'lefou', 'faysal', 'rue de l\'intendant 17', 1600, '1992-03-01', 'faysal123', '$2y$10$af/oHUBH23zcfkn0Bcxhues/RcXQGchmYhEcxAP91ActcmDEa6USG', 'faysal@gmail.com'),
(19, 'chantale', 'wavier', 'rue de la rue 32', 1080, '2003-01-12', 'chantale123', '$2y$10$eoXD5LCzfzlgPuvygzJFeOYrT/3P8uo0VCpMHq1747jPrlfjQMNoS', 'chantale@gmail.com'),
(20, 'pierre', 'paul', 'rue de la pierre 22', 1000, '1990-01-12', 'pierre123', '$2y$10$ZV1j1XlT.sx5rqu4eyWMjuqvhplUwDDLV5TIfNEEkAmd4vxnWNmgy', 'pierre@gmail.com'),
(21, 'testeur', 'mike', 'rue de la loi n 25', 1050, '1987-03-02', 'testeur', '$2y$10$Lk.qE/d6R9e9wpQN2ykM9u.ORQGhCgI/YppWKaRUHljQIRdXNvOka', 'testeur123@gmail.com'),
(25, 'zebra', 'Abdeljalil', 'rue haute 344', 1000, '1995-11-10', 'xero2019', '$2y$10$knhzRwfzal14NPzZXdpg2uVJw.sQsqmdAYFNl4jt9CuJV5ATzX86e', 'dragonfith@hotmail.fr');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`type_article`) REFERENCES `type_article` (`id_type`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `comment_article`
--
ALTER TABLE `comment_article`
  ADD CONSTRAINT `comment_article_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `comment_article_ibfk_2` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`);

--
-- Contraintes pour la table `connexion_utilisateur`
--
ALTER TABLE `connexion_utilisateur`
  ADD CONSTRAINT `connexion_utilisateur_ibfk_1` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id_utilisateur`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `article` (`id_article`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`commande_id`) REFERENCES `commande` (`id_commande`);

--
-- Contraintes pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
  ADD CONSTRAINT `mini_chat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `utilisateur` (`id_utilisateur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
