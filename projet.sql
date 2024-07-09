-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 20 avr. 2022 à 21:07
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `idA` int(11) NOT NULL,
  `dateA` date NOT NULL,
  `matriculeE` varchar(50) NOT NULL,
  `idC` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`idA`, `dateA`, `matriculeE`, `idC`) VALUES
(4, '2022-01-03', 'Fam-Sog-24', 3),
(5, '2022-01-03', 'Dia-BAK-07', 4),
(6, '2022-01-03', 'Mou-Ndi-09', 5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `libelle` varchar(30) NOT NULL,
  `niveau` varchar(3) NOT NULL,
  `filiere` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`libelle`, `niveau`, `filiere`) VALUES
('L1BAFA', 'L1', 'BAFA'),
('L1FC', 'L1', 'FC'),
('L1GL', 'L1', 'GL'),
('L1RI', 'L1', 'RI'),
('L2GL', 'L2', 'GL'),
('L2RI', 'L2', 'RI'),
('L3GL', 'L3', 'GL'),
('L3RI', 'L3', 'RI');

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `idC` int(11) NOT NULL,
  `dateCo` date NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `matriculeP` varchar(50) NOT NULL,
  `idM` int(11) NOT NULL,
  `semestre` int(11) NOT NULL,
  `nbrheure` int(11) NOT NULL,
  `hdebut` time NOT NULL,
  `hfin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`idC`, `dateCo`, `libelle`, `matriculeP`, `idM`, `semestre`, `nbrheure`, `hdebut`, `hfin`) VALUES
(2, '2021-05-12', 'L1GL', 'abd-dji-10', 5, 2, 14, '08:00:00', '10:00:00'),
(3, '2021-12-20', 'L2RI', 'Che-SY-05', 4, 3, 8, '12:00:00', '14:00:00'),
(4, '2021-12-18', 'L1GL', 'lam-dab-08', 6, 1, 3, '10:00:00', '13:00:00'),
(5, '2021-12-23', 'L1GL', 'Mad-NDI-17', 3, 2, 4, '08:00:00', '12:00:00'),
(6, '2022-01-27', 'L1BAFA', 'abd-dji-10', 4, 2, 5, '08:00:00', '10:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `matriculeE` varchar(50) NOT NULL,
  `nomE` varchar(30) NOT NULL,
  `prenomE` varchar(30) NOT NULL,
  `dateNaissanceE` date NOT NULL,
  `sexe` varchar(3) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `competence` varchar(30) NOT NULL,
  `parcours` varchar(500) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`matriculeE`, `nomE`, `prenomE`, `dateNaissanceE`, `sexe`, `libelle`, `competence`, `parcours`, `avatar`) VALUES
('bir-Sec-28', 'Seck', 'birane', '2022-01-28', 'M', 'L1BAFA', 'Maquettage et Prototypage', 'pas de parours', 'Screenshot_20211014-194458.jpg'),
('Dia-BAK-07', 'BAKHOUM', 'Diatou', '1998-08-07', 'F', 'L3RI', 'Réaliser des Composants Dynami', ' pas de parcours', 'Screenshot_20211111-103314.jpg'),
('Fam-Sog-24', 'Sogue', 'Fama', '2001-07-24', 'F', 'L2GL', 'Maquettage et Prototypage', 'inconnus', 'IMG-20211208-WA0056.jpg'),
('Kha-Kei-13', 'Keita', 'Khadija', '2002-01-13', '', 'L1RI', 'Gestion de Projet Agiles', 'inconnus', 'Snapchat-26640261.jpg'),
('Mou-Ndi-09', 'Ndiaye', 'Mouhamed', '2003-12-09', 'M', 'L2GL', 'Réaliser des Composants Dynami', 'inconnus', 'IMG-20210911-WA0083.jpg'),
('Pap-FAY-15', 'FAYE', 'Papa Birane', '2022-01-15', 'M', 'L3GL', 'Maquettage et Prototypage', 'inconnus', 'Screenshot_20220113-070251.jpg'),
('Sal-Dia-10', 'Diallo', 'Salimata', '2001-12-10', 'F', 'L1RI', 'Maquettage et Prototypage', ' inconnus', 'Screenshot_20220113-070332.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `idM` int(11) NOT NULL,
  `libelleM` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`idM`, `libelleM`) VALUES
(3, 'WEBmaster'),
(4, 'programmation'),
(5, 'Réseaux'),
(6, 'Analyse'),
(7, 'Gestion'),
(8, 'finance'),
(9, 'programme');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `matriculeP` varchar(50) NOT NULL,
  `nomP` varchar(30) NOT NULL,
  `prenomP` varchar(50) NOT NULL,
  `dateNaissance` date NOT NULL,
  `sexe` varchar(3) NOT NULL,
  `grade` varchar(30) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `idM` int(11) NOT NULL,
  `avatar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`matriculeP`, `nomP`, `prenomP`, `dateNaissance`, `sexe`, `grade`, `libelle`, `idM`, `avatar`) VALUES
('abd-dji-10', 'djite', 'abdoulaye', '1998-12-10', 'M', 'ingénieur', 'L3RI', 5, 'FbStory-1618009256175.jpg'),
('Che-SY-05', 'SY', 'Cheikh', '2002-02-05', 'M', 'master', 'L2GL', 4, 'IMG-20211107-WA0041.jpg'),
('lam-dab-08', 'dabo', 'lamine', '1990-05-08', 'M', 'supra', 'L3RI', 6, 'Screenshot_20211111-120550.jpg'),
('Mad-NDI-17', 'NDIAYE', 'Madeguene', '1995-09-17', 'F', 'top model', 'L1RI', 4, 'IMG-20211218-WA0043.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idU` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idU`, `nom`, `login`, `password`, `avatar`, `type`) VALUES
(10, 'administrateur', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Screenshot_20211026-190623_1.jpg', 'admin'),
(15, 'ibousy', 'ibousy', '84c54918bd89a4f64328fa6c77423e68', 'Snapchat-80839976.jpg', 'admin'),
(17, 'khalifa', 'lifa', 'e7247759c1633c0f9f1485f3690294a9', 'Screenshot_20211229-160405.jpg', 'Etudiant'),
(19, 'djite', 'law203', 'e7247759c1633c0f9f1485f3690294a9', 'IMG_20211220_141739_066.jpg', 'Assistant'),
(20, 'Mamy', 'MAND', 'e7247759c1633c0f9f1485f3690294a9', 'IMG_20211222_132532_213.jpg', 'Responsable'),
(21, 'ba', 'Res', 'e7247759c1633c0f9f1485f3690294a9', 'IMG_20220110_142922_841.jpg', 'proff');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`idA`),
  ADD KEY `matriculeE` (`matriculeE`),
  ADD KEY `idC` (`idC`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`libelle`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`idC`),
  ADD KEY `libelle` (`libelle`),
  ADD KEY `matriculeP` (`matriculeP`),
  ADD KEY `idM` (`idM`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`matriculeE`),
  ADD KEY `libelle` (`libelle`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`idM`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`matriculeP`),
  ADD KEY `idM` (`idM`),
  ADD KEY `libelle` (`libelle`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idU`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absence`
--
ALTER TABLE `absence`
  MODIFY `idA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `idC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `idM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idU` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `absence_ibfk_1` FOREIGN KEY (`matriculeE`) REFERENCES `etudiant` (`matriculeE`),
  ADD CONSTRAINT `absence_ibfk_2` FOREIGN KEY (`idC`) REFERENCES `cour` (`idC`);

--
-- Contraintes pour la table `cour`
--
ALTER TABLE `cour`
  ADD CONSTRAINT `cour_ibfk_1` FOREIGN KEY (`matriculeP`) REFERENCES `professeur` (`matriculeP`),
  ADD CONSTRAINT `cour_ibfk_2` FOREIGN KEY (`idM`) REFERENCES `module` (`idM`),
  ADD CONSTRAINT `cour_ibfk_3` FOREIGN KEY (`libelle`) REFERENCES `classe` (`libelle`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`libelle`) REFERENCES `classe` (`libelle`);

--
-- Contraintes pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `professeur_ibfk_1` FOREIGN KEY (`libelle`) REFERENCES `classe` (`libelle`),
  ADD CONSTRAINT `professeur_ibfk_2` FOREIGN KEY (`idM`) REFERENCES `module` (`idM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
