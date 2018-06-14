-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 14, 2018 at 05:52 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsheeks`
--

-- --------------------------------------------------------

--
-- Table structure for table `forum_categorie`
--

CREATE TABLE `forum_categorie` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `cat_ordre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_categorie`
--

INSERT INTO `forum_categorie` (`cat_id`, `cat_nom`, `cat_ordre`) VALUES
(1, 'Général', 5),
(2, 'Jeux-Vidéos', 15),
(3, 'Autre', 25);

-- --------------------------------------------------------

--
-- Table structure for table `forum_forum`
--

CREATE TABLE `forum_forum` (
  `forum_id` int(11) NOT NULL,
  `forum_cat_id` mediumint(8) NOT NULL,
  `forum_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_desc` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `forum_ordre` mediumint(8) NOT NULL,
  `forum_last_post_id` int(11) NOT NULL,
  `forum_topic` mediumint(8) NOT NULL,
  `forum_post` mediumint(8) NOT NULL,
  `auth_view` tinyint(4) NOT NULL,
  `auth_post` tinyint(4) NOT NULL,
  `auth_topic` tinyint(4) NOT NULL,
  `auth_annonce` tinyint(4) NOT NULL,
  `auth_modo` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_forum`
--

INSERT INTO `forum_forum` (`forum_id`, `forum_cat_id`, `forum_name`, `forum_desc`, `forum_ordre`, `forum_last_post_id`, `forum_topic`, `forum_post`, `auth_view`, `auth_post`, `auth_topic`, `auth_annonce`, `auth_modo`) VALUES
(1, 1, 'Présentation', 'Nouvelle sur le forum ? Présentes toi ici !', 60, 18, 7, 9, 0, 0, 0, 0, 0),
(2, 1, 'Les News', 'Les news du site sont ici', 50, 15, 3, 4, 1, 2, 2, 3, 4),
(3, 1, 'Discussions générales', 'Ici on peut parler de tout sur tous les sujets', 40, 17, 2, 2, 0, 0, 0, 0, 0),
(4, 2, 'MMORPG', 'Parlez ici des MMORPG', 60, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 2, 'Autres jeux', 'Forum sur les autres jeux', 50, 8, 1, 3, 0, 0, 0, 0, 0),
(6, 3, 'Loisir', 'Vos loisirs', 60, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 3, 'Délires', 'Décrivez ici tous vos délires les plus fous', 50, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `forum_membres`
--

CREATE TABLE `forum_membres` (
  `membre_id` int(11) NOT NULL,
  `membre_pseudo` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_mdp` varchar(255) NOT NULL,
  `membre_email` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_msn` varchar(250) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_siteweb` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_avatar` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_signature` varchar(200) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_localisation` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `membre_inscrit` int(11) NOT NULL,
  `membre_derniere_visite` int(11) NOT NULL,
  `membre_rang` tinyint(4) DEFAULT '2',
  `membre_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `forum_mp`
--

CREATE TABLE `forum_mp` (
  `mp_id` int(11) NOT NULL,
  `mp_expediteur` int(11) NOT NULL,
  `mp_receveur` int(11) NOT NULL,
  `mp_titre` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_text` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `mp_time` int(11) NOT NULL,
  `mp_lu` enum('0','1') CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_mp`
--

INSERT INTO `forum_mp` (`mp_id`, `mp_expediteur`, `mp_receveur`, `mp_titre`, `mp_text`, `mp_time`, `mp_lu`) VALUES
(3, 20, 19, 'rene', 'rene', 1528886712, '1');

-- --------------------------------------------------------

--
-- Table structure for table `forum_post`
--

CREATE TABLE `forum_post` (
  `post_id` int(11) NOT NULL,
  `post_createur` int(11) NOT NULL,
  `post_texte` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `post_time` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `post_forum_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_post`
--

INSERT INTO `forum_post` (`post_id`, `post_createur`, `post_texte`, `post_time`, `topic_id`, `post_forum_id`) VALUES
(1, 18, 'bnlblds=djfqs=nfqsfqùlsnfq=ksnmiq', 1528733476, 1, 1),
(2, 18, 'lol', 1528733667, 2, 1),
(3, 19, 'wesh rene', 1528755181, 3, 1),
(4, 20, 'lol', 1528878481, 4, 2),
(5, 20, 'lol', 1528882284, 5, 3),
(6, 20, 'papapa', 1528882460, 6, 5),
(7, 20, 'jojoojo', 1528882503, 6, 5),
(8, 20, 'jflkmf:fds:', 1528882563, 6, 5),
(9, 20, 'fefefefefef:exclamation::exclamation::exclamation::exclamation:', 1528883744, 7, 1),
(10, 21, 'bouh', 1528907957, 8, 2),
(11, 21, 'bouh bouh', 1528907971, 8, 2),
(12, 22, 'tcho', 1528910123, 9, 1),
(13, 22, 'MIAOU', 1528917084, 3, 1),
(14, 22, 'MIAOU', 1528917129, 3, 1),
(15, 22, 'lol', 1528942021, 10, 2),
(16, 22, 'no', 1528942244, 11, 1),
(17, 22, 'p', 1528942271, 12, 3),
(18, 31, 'kljdfd', 1528947709, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forum_topic`
--

CREATE TABLE `forum_topic` (
  `topic_id` int(11) NOT NULL,
  `forum_id` int(11) NOT NULL,
  `topic_titre` char(60) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_createur` int(11) NOT NULL,
  `topic_vu` mediumint(8) NOT NULL,
  `topic_time` int(11) NOT NULL,
  `topic_genre` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `topic_last_post` int(11) NOT NULL,
  `topic_first_post` int(11) NOT NULL,
  `topic_post` mediumint(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forum_topic`
--

INSERT INTO `forum_topic` (`topic_id`, `forum_id`, `topic_titre`, `topic_createur`, `topic_vu`, `topic_time`, `topic_genre`, `topic_last_post`, `topic_first_post`, `topic_post`) VALUES
(1, 1, 'Test', 18, 5, 1528733476, 'Message', 1, 1, 0),
(2, 1, 'mouahaha', 18, 7, 1528733667, 'Message', 2, 2, 0),
(3, 1, 'rene wesh', 19, 9, 1528755181, 'Annonce', 14, 3, 2),
(4, 2, 'j\'aime rire', 20, 4, 1528878481, 'Message', 4, 4, 0),
(5, 3, 'lol', 20, 3, 1528882284, 'Message', 5, 5, 0),
(6, 5, 'papap', 20, 4, 1528882460, 'Message', 8, 6, 2),
(7, 1, 'fefefef', 20, 2, 1528883744, 'Message', 9, 9, 0),
(8, 2, 'bouh', 21, 3, 1528907957, 'Message', 11, 10, 1),
(9, 1, 'tcho tcho', 22, 3, 1528910123, 'Message', 12, 12, 0),
(10, 2, 'lol', 22, 2, 1528942021, 'Message', 15, 15, 0),
(11, 1, 'no', 22, 2, 1528942244, 'Message', 16, 16, 0),
(12, 3, 'p', 22, 2, 1528942271, 'Message', 17, 17, 0),
(13, 1, 'piu', 31, 2, 1528947709, 'Message', 18, 18, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forum_categorie`
--
ALTER TABLE `forum_categorie`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_ordre` (`cat_ordre`);

--
-- Indexes for table `forum_forum`
--
ALTER TABLE `forum_forum`
  ADD PRIMARY KEY (`forum_id`);

--
-- Indexes for table `forum_membres`
--
ALTER TABLE `forum_membres`
  ADD PRIMARY KEY (`membre_id`);

--
-- Indexes for table `forum_mp`
--
ALTER TABLE `forum_mp`
  ADD PRIMARY KEY (`mp_id`);

--
-- Indexes for table `forum_post`
--
ALTER TABLE `forum_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `forum_topic`
--
ALTER TABLE `forum_topic`
  ADD PRIMARY KEY (`topic_id`),
  ADD UNIQUE KEY `topic_last_post` (`topic_last_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forum_categorie`
--
ALTER TABLE `forum_categorie`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forum_forum`
--
ALTER TABLE `forum_forum`
  MODIFY `forum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `forum_membres`
--
ALTER TABLE `forum_membres`
  MODIFY `membre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `forum_mp`
--
ALTER TABLE `forum_mp`
  MODIFY `mp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `forum_post`
--
ALTER TABLE `forum_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `forum_topic`
--
ALTER TABLE `forum_topic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
