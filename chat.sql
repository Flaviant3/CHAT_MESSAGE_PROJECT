-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 01 oct. 2018 à 16:05
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `chat`
--

-- --------------------------------------------------------

--
-- Structure de la table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `chat_pseudo` varchar(255) NOT NULL,
  `chat_message` varchar(2000) NOT NULL,
  `chat_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `chat`
--

INSERT INTO `chat` (`chat_id`, `chat_pseudo`, `chat_message`, `chat_date`) VALUES
(1, 'Florent', 'Bonjour à tous !', NULL),
(2, 'Florent', ':)', NULL),
(6, 'Henry', ':)', '2018-10-01 17:04:15'),
(7, 'Henry', 'Salut', '2018-10-01 17:04:22'),
(10, 'Fabrice', 'Yo', '2018-10-01 17:07:49'),
(11, 'Martial', 'On arrête de jouer les enfants !', '2018-10-01 17:09:23'),
(12, 'Florent', 'On teste le nouveau chat de l\'iut ;)', '2018-10-01 17:10:09');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
