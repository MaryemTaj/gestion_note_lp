-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 28 mai 2022 à 19:33
-- Version du serveur :  5.7.28
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_notes`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_adm` varchar(10) NOT NULL,
  `nom_adm` text NOT NULL,
  `prenom_adm` text NOT NULL,
  `id_comp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_adm`),
  KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_adm`, `nom_adm`, `prenom_adm`, `id_comp`) VALUES
('A1', 'MARYEM', 'ZAWI', 'CA1'),
('A2', 'FATIMA', 'YAHYA', 'CA2'),
('A3', 'KAMAL', 'CHARAF', 'CA3');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `id_comp` varchar(20) NOT NULL,
  `login` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`id_comp`, `login`, `pwd`, `type`) VALUES
('CA1', 'MARYEM', 'maryem', 'admin'),
('CA2', 'FATIMA', 'fatima9999', 'admin'),
('CA3', 'kamal.charaf', 'charaf12345', 'admin'),
('CE1', 'ALI', 'ALI', 'etudiant'),
('CE10', 'MOAD', 'MOAD', 'etudiant'),
('CE11', 'AMINA', 'AMINA', 'etudiant'),
('CE12', 'JIHAD', 'JIHAD', 'etudiant'),
('CE2', 'ZAKARIA', 'zakar$$$', 'etudiant'),
('CE3', 'SAID', 'SA0A00IIID', 'etudiant'),
('CE4', 'farah', 'farah', 'etudiant'),
('CE5', 'aziz', 'aziz', 'etudiant'),
('CE6', 'rim', 'rim', 'etudiant'),
('CE7', 'ikram', 'ikram', 'etudiant'),
('CE8', 'yassine', 'yassine', 'etudiant'),
('CE9', 'outhmane', 'outhmane', 'etudiant'),
('CP1', 'redouani', 'redouani@2222', 'professeur'),
('CP10', 'fettah', 'fettah', 'professeur'),
('CP11', 'fadma', 'fadma', 'professeur'),
('CP12', 'HAFSSA', 'HAFSSA', 'professeur'),
('CP13', 'HANANE', 'HANANE', 'professeur'),
('CP14', 'AKRAM', 'AKRAM', 'professeur'),
('CP15', 'FAYSEL', 'FAYSEL', 'professeur'),
('CP16', 'ABDERRAHIM', 'ABDERRAHIM', 'professeur'),
('CP17', 'iyade', 'iyade', 'professeur'),
('CP18', 'adil', 'adil', 'professeur'),
('CP19', 'amine', 'amine', 'professeur'),
('CP2', 'ABDERRAHIM.HASSOUNI', 'HASSOUNI&&&&', 'professeur'),
('CP20', 'sofiane', 'sofiane', 'professeur'),
('CP3', 'WAFAE', 'WA$$222', 'professeur'),
('CP4', 'ismail', 'ismail', 'professeur'),
('CP5', 'abdelghani', 'abdelghani', 'professeur'),
('CP6', 'insafe', 'insafe', 'professeur'),
('CP7', 'israe', 'israe', 'professeur'),
('CP8', 'fatiha', 'fatiha', 'professeur'),
('CP9', 'naima', 'naima', 'professeur');

-- --------------------------------------------------------

--
-- Structure de la table `element`
--

DROP TABLE IF EXISTS `element`;
CREATE TABLE IF NOT EXISTS `element` (
  `id_elem` varchar(20) NOT NULL,
  `nom_elem` varchar(100) NOT NULL,
  `coeff` int(3) NOT NULL,
  `id_mod` varchar(20) NOT NULL,
  PRIMARY KEY (`id_elem`),
  KEY `id_mod` (`id_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element`
--

INSERT INTO `element` (`id_elem`, `nom_elem`, `coeff`, `id_mod`) VALUES
('E111', 'management ', 1, 'M1'),
('E1111', 'Electronique', 1, 'M11'),
('E112', 'Commandes des machines', 1, 'M12'),
('E113', 'Informatique', 1, 'M13'),
('E114', 'Fonctions fandamentales', 1, 'M14'),
('E115', 'Architecture des systémes à processeurs', 1, 'M15'),
('E116', 'AUTOMATIQUE', 1, 'M16'),
('E117', 'Culture de l’entreprise', 1, 'M17'),
('E12', 'Administration Windows server 2012', 1, 'M2'),
('E13', 'ANGLAIS', 1, 'M3'),
('E14', 'PHP', 1, 'M4'),
('E17', 'UML', 1, 'M7'),
('E212', 'Réseaux Electriques', 1, 'M12'),
('E213', 'Analyse numérique', 1, 'M13'),
('E214', 'Fonctions associés au traitement et à la transmission de l’information', 1, 'M14'),
('E215', 'Transmission et acquisation de données', 1, 'M15'),
('E216', 'INSTRUMENTATION', 1, 'M16'),
('E217', 'ANGLAIS', 1, 'M17'),
('E22', 'Administration réseau sous LINUX ', 1, 'M2'),
('E23', 'Management de projet', 1, 'M3'),
('E24', 'Multimedia', 1, 'M4'),
('E27', 'JAVA', 1, 'M7'),
('E555', 'Recherche Opérationnelle', 1, 'M5'),
('M666', 'RESEAUX 2', 1, 'M6');

-- --------------------------------------------------------

--
-- Structure de la table `enseigne`
--

DROP TABLE IF EXISTS `enseigne`;
CREATE TABLE IF NOT EXISTS `enseigne` (
  `id_elem` varchar(20) NOT NULL,
  `id_prof` varchar(20) NOT NULL,
  PRIMARY KEY (`id_elem`,`id_prof`),
  KEY `id_prof` (`id_prof`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseigne`
--

INSERT INTO `enseigne` (`id_elem`, `id_prof`) VALUES
('E14', 'P1'),
('E17', 'P1'),
('E112', 'P10'),
('E114', 'P10'),
('E214', 'P11'),
('E215', 'P11'),
('E117', 'P12'),
('E115', 'P13'),
('E111', 'P14'),
('E117', 'P14'),
('E216', 'P16'),
('E23', 'P16'),
('E116', 'P17'),
('E24', 'P17'),
('E12', 'P18'),
('E22', 'P18'),
('E112', 'P19'),
('E112', 'P2'),
('E113', 'P2'),
('M666', 'P2'),
('E13', 'P20'),
('E217', 'P20'),
('E27', 'P3'),
('E24', 'P4'),
('E23', 'P5'),
('E17', 'P6'),
('E212', 'P7');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `id_etud` varchar(20) NOT NULL,
  `nom_etud` text NOT NULL,
  `prenom_etud` text NOT NULL,
  `cne` varchar(20) NOT NULL,
  `cin` varchar(10) NOT NULL,
  `id_fil` varchar(20) NOT NULL,
  `id_comp` varchar(20) NOT NULL,
  `dateInscrire` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  PRIMARY KEY (`id_etud`),
  UNIQUE KEY `cne` (`cne`),
  KEY `id_fil` (`id_fil`),
  KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id_etud`, `nom_etud`, `prenom_etud`, `cne`, `cin`, `id_fil`, `id_comp`, `dateInscrire`, `dateFin`) VALUES
('E1', 'ALI', 'ERRADI', 'R134567890', 'W2468', 'LP5', 'CE1', '2020-11-04', '2021-09-04'),
('E10', 'MOAD', 'ROUFIR', 'W143829018', 'H679211', 'LP5', 'CE10', '2020-11-04', '2021-09-04'),
('E11', 'AMINA', 'SAKHI', 'D132987654', 'W342517', 'LP5', 'CE11', '2020-11-04', '2021-09-04'),
('E12', 'JIHADE', 'RAFI', 'D138765910', 'P56718', 'LP5', 'CE12', '2020-11-04', '2021-09-04'),
('E2', 'SAID', 'EDDIF', 'R132987634', 'W4500', 'LP5', 'CE3', '2020-11-04', '2021-09-04'),
('E3', 'ZAKARIA', 'SIDKI', 'R135566779', 'Q9876', 'LP5', 'CE2', '2020-11-04', '2021-09-04'),
('E4', 'farah', 'ADIR', 'R132090876', 'W5578', 'LP6', 'CE4', '2020-11-04', '2021-09-04'),
('E5', 'AZIZ', 'GARA', 'W134567910', 'Q21456', 'LP6', 'CE5', '2020-11-04', '2021-09-04'),
('E6', 'RIM', 'BIKRE', 'D132617890', 'P8976', 'LP6', 'CE6', '2020-11-04', '2021-09-04'),
('E7', 'IKRAME', 'AMINE', 'W136782456', 'QU7800', 'LP6', 'CE7', '2020-11-04', '2021-09-04'),
('E8', 'yassine', 'naciri', 'D132901864', 'BB8923', 'LP5', 'CE8', '2020-11-04', '2021-09-04'),
('E9', 'OUTHMANE', 'OUTHMANE', 'C142891834', 'KL8876', 'LP5', 'CE9', '2020-11-04', '2021-09-04');

-- --------------------------------------------------------

--
-- Structure de la table `examen`
--

DROP TABLE IF EXISTS `examen`;
CREATE TABLE IF NOT EXISTS `examen` (
  `id_exam` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `id_session` varchar(20) NOT NULL,
  `id_elem` varchar(20) NOT NULL,
  PRIMARY KEY (`id_exam`),
  KEY `id_elem` (`id_elem`),
  KEY `id_session` (`id_session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `examen`
--

INSERT INTO `examen` (`id_exam`, `date`, `id_session`, `id_elem`) VALUES
('exam', '2021-03-12', 'N', 'E14'),
('exam1', '2021-03-09', 'N', 'E12'),
('exam2', '2021-03-14', 'N', 'E13'),
('exam3', '2020-09-12', 'N', 'E117');

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `id_fil` varchar(20) NOT NULL,
  `code_fil` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`id_fil`, `code_fil`, `designation`) VALUES
('LP1', 'MIAGE', 'METHODE INFORMATIQUE APPLIQUEE A LA GESTION DES ENTREPRISE'),
('LP2', 'mécatrinique', 'MECATRONIQUE'),
('LP3', 'DC', 'DROIT COMERCIALE'),
('LP4', 'TM', 'TECHNIQUE DE MANAGEMENT'),
('LP5', 'GI', 'Genie Informatique'),
('LP6', 'GE', 'Génie Electrique');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

DROP TABLE IF EXISTS `module`;
CREATE TABLE IF NOT EXISTS `module` (
  `id_mod` varchar(20) NOT NULL,
  `nom_mod` varchar(100) NOT NULL,
  `id_semestre` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_mod`),
  KEY `id_semestre` (`id_semestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id_mod`, `nom_mod`, `id_semestre`) VALUES
('M1', 'MANAGEMENT', 's5'),
('M11', 'ELECTRONIQUE', 's5'),
('M12', 'ELECTROTECHNIQUE ET RESEAUX', 's5'),
('M13', 'INFORMATIQUE ET ANALYSE NUMERIQUE', 's5'),
('M14', 'FONCTION ELECTRONIQUES', 's5'),
('M15', 'INFORMATIQUE INDUSTRIELLE', 's5'),
('M16', 'AUTOMATIQUE ET INSTRUMENTATION', 's5'),
('M17', 'LANGUE,COMMUNICATION ET CULTURE D\'ENTREPRISE', 's5'),
('M2', 'ADMINISTRATION SYSTEMES', 's5'),
('M3', 'COMMUNICATION PROFESSIONNELLE ET MANAGEMENT DE PROJET', 's5'),
('M4', 'PROGRAMMATION WEB ET MULTIMEDIA', 's5'),
('M5', 'RECHERCHE OPERATIONNELLE', 's5'),
('M6', 'RESEAUX 2', 's5'),
('M7', 'CONCEPTION ORIENTEE OBJETS ET POO', 's5');

-- --------------------------------------------------------

--
-- Structure de la table `module_filiere`
--

DROP TABLE IF EXISTS `module_filiere`;
CREATE TABLE IF NOT EXISTS `module_filiere` (
  `id_fil` varchar(20) NOT NULL,
  `id_mod` varchar(20) NOT NULL,
  PRIMARY KEY (`id_fil`,`id_mod`),
  KEY `id_mod` (`id_mod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module_filiere`
--

INSERT INTO `module_filiere` (`id_fil`, `id_mod`) VALUES
('LP5', 'M1'),
('LP6', 'M11'),
('LP6', 'M12'),
('LP6', 'M13'),
('LP6', 'M14'),
('LP6', 'M15'),
('LP6', 'M16'),
('LP6', 'M17'),
('LP5', 'M2'),
('LP5', 'M3'),
('LP5', 'M4'),
('LP5', 'M5'),
('LP5', 'M6'),
('LP5', 'M7');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id_etud` varchar(20) NOT NULL,
  `id_exam` varchar(20) NOT NULL,
  `note_exam` double NOT NULL,
  PRIMARY KEY (`id_etud`,`id_exam`),
  KEY `id_exam` (`id_exam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`id_etud`, `id_exam`, `note_exam`) VALUES
('E1', 'exam', 20),
('E1', 'exam1', 16),
('E1', 'exam2', 13),
('E10', 'exam1', 14),
('E11', 'exam1', 18);

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `id_prof` varchar(20) NOT NULL,
  `nom_prof` text NOT NULL,
  `prenom_prof` text NOT NULL,
  `cin_prof` varchar(10) NOT NULL,
  `id_comp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_prof`),
  KEY `id_comp` (`id_comp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id_prof`, `nom_prof`, `prenom_prof`, `cin_prof`, `id_comp`) VALUES
('P1', 'REDOUANI', 'AZIZ', 'L2901', 'CP1'),
('P10', 'MOHAMED', 'FETTAH', 'JK0044', 'CP10'),
('P11', 'AYA', 'FADMA', 'XW6578', 'CP11'),
('P12', 'HAFSSA', 'ZAFI', 'QA3310', 'CP12'),
('P13', 'HANANE', 'KADIR', 'PB7745', 'CP13'),
('P14', 'Akram', 'KADIR', 'FJ1234', 'CP14'),
('P15', 'FAYSEL', 'BAHDI', 'CC8847', 'CP15'),
('P16', 'ABDERRAHIM', 'BEN FARAJ', 'H12345', 'CP16'),
('P17', 'IYADE', 'TAAYNI', 'NM7890', 'CP17'),
('P18', 'adil', 'adil', 'DC3391', 'CP18'),
('P19', 'AMINE ', 'TAOUNI', 'SS7736', 'CP19'),
('P2', 'HASSOUNI', 'YASINE', 'K9866', 'CP2'),
('P20', 'SOFIANE', 'SAFI', 'U1529', 'CP20'),
('P3', 'SABRI', 'HANANE', 'G0177', 'CP3'),
('P4', 'ismail', 'derty', 'B67890', 'CP4'),
('P5', 'abdelghani', 'yousfi', 'SQ3219', 'CP5'),
('P6', 'insafe', 'rokbi', 'V0202', 'CP6'),
('P7', 'israe', 'lamine', 'PL5632', 'CP7'),
('P8', 'FATIHA', 'AMINE', 'F8877', 'CP8'),
('P9', 'NAIMA', 'SAFFI', 'G3224', 'CP9');

-- --------------------------------------------------------

--
-- Structure de la table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
CREATE TABLE IF NOT EXISTS `semestre` (
  `id_semestre` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  PRIMARY KEY (`id_semestre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `semestre`
--

INSERT INTO `semestre` (`id_semestre`, `designation`) VALUES
('s5', 'SEMESTRE 5'),
('s6', 'SEMESTRE 6');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

DROP TABLE IF EXISTS `session`;
CREATE TABLE IF NOT EXISTS `session` (
  `id_session` varchar(20) NOT NULL,
  `nom-session` varchar(20) NOT NULL,
  PRIMARY KEY (`id_session`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id_session`, `nom-session`) VALUES
('N', 'Normale'),
('R', 'Rattrapage');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`id_comp`) REFERENCES `compte` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `element`
--
ALTER TABLE `element`
  ADD CONSTRAINT `element_ibfk_1` FOREIGN KEY (`id_mod`) REFERENCES `module` (`id_mod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enseigne`
--
ALTER TABLE `enseigne`
  ADD CONSTRAINT `enseigne_ibfk_1` FOREIGN KEY (`id_elem`) REFERENCES `element` (`id_elem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enseigne_ibfk_2` FOREIGN KEY (`id_prof`) REFERENCES `professeur` (`id_prof`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_fil`) REFERENCES `filiere` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `etudiant_ibfk_2` FOREIGN KEY (`id_comp`) REFERENCES `compte` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`id_elem`) REFERENCES `element` (`id_elem`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `examen_ibfk_2` FOREIGN KEY (`id_session`) REFERENCES `session` (`id_session`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `module`
--
ALTER TABLE `module`
  ADD CONSTRAINT `module_ibfk_1` FOREIGN KEY (`id_semestre`) REFERENCES `semestre` (`id_semestre`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `module_filiere`
--
ALTER TABLE `module_filiere`
  ADD CONSTRAINT `module_filiere_ibfk_1` FOREIGN KEY (`id_fil`) REFERENCES `filiere` (`id_fil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `module_filiere_ibfk_2` FOREIGN KEY (`id_mod`) REFERENCES `module` (`id_mod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`id_etud`) REFERENCES `etudiant` (`id_etud`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`id_exam`) REFERENCES `examen` (`id_exam`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD CONSTRAINT `professeur_ibfk_1` FOREIGN KEY (`id_comp`) REFERENCES `compte` (`id_comp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
