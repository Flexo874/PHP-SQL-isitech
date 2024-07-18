-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 juin 2024 à 14:09
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `meds`
--

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `quantite` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id`, `nom`, `quantite`, `description`) VALUES
(9, 'CoughSyrup', 120, 'Sirop contre la toux qui apaise la gorge et réduit les quintes de toux.'),
(10, 'VitaBoost', 300, 'Complément vitaminé pour renforcer le système immunitaire.'),
(11, 'SleepAid', 90, 'Aide à améliorer la qualité du sommeil et à réduire l\'insomnie.'),
(12, 'DigestWell', 60, 'Aide à la digestion et soulage les maux d\'estomac.'),
(13, 'HeartCare', 70, 'Soutient la santé cardiovasculaire et régule la tension artérielle.'),
(19, 'CalmMind', 90, 'Aide à réduire le stress et l\'anxiété.'),
(20, 'SkinHeal', 80, 'Crème pour accélérer la guérison des plaies et des brûlures légères.'),
(21, 'EyeCare', 60, 'Gouttes pour les yeux pour soulager la sécheresse et les irritations.'),
(22, 'EarEase', 70, 'Gouttes auriculaires pour soulager les douleurs et les infections de l\'oreille.'),
(23, 'NasalSpray', 110, 'Spray nasal pour décongestionner et soulager les sinus encombrés.'),
(24, 'ThroatSoother', 90, 'Pastilles pour soulager les maux de gorge et les irritations.'),
(25, 'Antacid', 120, 'Neutralise l\'acidité gastrique et soulage les brûlures d\'estomac.'),
(26, 'LiverSupport', 130, 'Soutient la fonction hépatique et détoxifie le foie.'),
(27, 'KidneyCare', 80, 'Aide à maintenir une fonction rénale saine.'),
(28, 'ProbioticPlus', 150, 'Améliore la santé digestive et renforce le microbiote intestinal.'),
(29, 'BoneStrength', 70, 'Renforce les os et prévient l\'ostéoporose.'),
(30, 'IronBoost', 90, 'Supplément de fer pour traiter et prévenir l\'anémie.'),
(31, 'CalciumPlus', 100, 'Supplément de calcium pour renforcer les os et les dents.'),
(32, 'VitaminD3', 110, 'Améliore l\'absorption du calcium et renforce le système immunitaire.'),
(33, 'ZincBoost', 60, 'Renforce le système immunitaire et accélère la guérison des plaies.'),
(34, 'Omega3', 140, 'Supplément d\'huile de poisson pour la santé du cœur et du cerveau.'),
(35, 'HairGrowth', 120, 'Stimule la croissance des cheveux et renforce les follicules capillaires.'),
(36, 'NailStrength', 100, 'Renforce les ongles et prévient les cassures.'),
(37, 'SkinGlow', 150, 'Améliore l\'élasticité de la peau et réduit les rides.'),
(38, 'DetoxCleanse', 130, 'Programme de détoxification pour nettoyer le corps des toxines.'),
(39, 'WeightLoss', 90, 'Supplément pour aider à la perte de poids et à la gestion de l\'appétit.'),
(40, 'MemoryPlus', 80, 'Améliore la mémoire et la concentration.'),
(41, 'VisionSupport', 110, 'Soutient la santé des yeux et améliore la vision.'),
(42, 'AntiFatigue', 120, 'Réduit la fatigue et améliore l\'endurance.'),
(43, 'ImmuneBoost', 130, 'Renforce le système immunitaire et aide à prévenir les infections.'),
(44, 'DigestEase', 70, 'Soulage les ballonnements et les inconforts digestifs.'),
(45, 'LungCare', 100, 'Soutient la santé pulmonaire et améliore la respiration.'),
(46, 'ThyroidSupport', 80, 'Aide à maintenir une fonction thyroïdienne saine.'),
(47, 'AntiAging', 90, 'Supplément anti-âge pour une peau jeune et éclatante.'),
(48, 'HydraBalance', 60, 'Maintient une bonne hydratation et équilibre électrolytique.'),
(49, 'SleepDeep', 110, 'Améliore la qualité du sommeil profond et réparateur.'),
(50, 'StressRelief', 140, 'Réduit le stress et améliore la relaxation.'),
(51, 'MoodEnhancer', 100, 'Améliore l\'humeur et réduit les symptômes de la dépression.'),
(52, 'AntiInflamm', 120, 'Réduit l\'inflammation et soulage les douleurs chroniques.'),
(53, 'MenopauseSupport', 70, 'Soulage les symptômes de la ménopause.'),
(54, 'PCOSBalance', 90, 'Aide à équilibrer les hormones et à gérer les symptômes du SOPK.');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `password` text NOT NULL,
  `username` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `password`, `username`) VALUES
(3, '$2y$10$zde1Z.9yqpb4aBLg58Z8yOLh7GuPyejN0aKZ.fk09t7FR2btxQ4B2', 'felix'),
(4, '$2y$10$vbdADyj28FFvr9/dakf3eO02o038c4fDFU9VsQ0jMYcaLTVSbtbUG', 'felix001');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
