-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 30 Mars 2017 à 11:32
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_des_stages`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE `annee` (
  `Id_date_annee` int(11) NOT NULL,
  `Annee` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`Id_date_annee`, `Annee`) VALUES
(1, '2016/2017'),
(2, '2017/2018'),
(3, '2018/2019'),
(4, '2019/2020'),
(5, '2020/2021');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE `classe` (
  `Id_classe` int(11) NOT NULL,
  `Nom_classe` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`Id_classe`, `Nom_classe`) VALUES
(1, 'BTS1'),
(2, 'BTS2');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `Id_entreprise` int(11) NOT NULL,
  `Site_entreprise` varchar(50) NOT NULL,
  `Nom_entreprise` varchar(50) NOT NULL,
  `Chiffre_affaire_entreprise` int(11) NOT NULL,
  `Adresse_entreprise` varchar(50) NOT NULL,
  `Id_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`Id_entreprise`, `Site_entreprise`, `Nom_entreprise`, `Chiffre_affaire_entreprise`, `Adresse_entreprise`, `Id_type`) VALUES
(1, 'nodevo.com', 'Nodevo', 111960000, 'Chantilly', 1),
(2, 'mentalworks.fr', 'Mentalworks', 123100000, 'Compiègne', 1);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `Id_etudiant` int(11) NOT NULL,
  `Nom_etudiant` varchar(25) NOT NULL,
  `Prenom_etudiant` varchar(25) NOT NULL,
  `Date_naissance_etudiant` date NOT NULL,
  `Annee_obtention_bac_etudiant` date NOT NULL,
  `Adresse_etudiant` varchar(50) NOT NULL,
  `Telephone_etudiant` varchar(10) NOT NULL,
  `Id_type_bac` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`Id_etudiant`, `Nom_etudiant`, `Prenom_etudiant`, `Date_naissance_etudiant`, `Annee_obtention_bac_etudiant`, `Adresse_etudiant`, `Telephone_etudiant`, `Id_type_bac`) VALUES
(1, 'ALAYA', 'Hedi', '1994-07-08', '2012-07-04', '14 rue des pissenlits SENLIS', '0685741236', 1),
(2, 'ALIOUATE', 'Adnane', '1994-03-03', '2012-07-05', '27 rue de Mozart, CREIL', '0699410263', 4),
(3, 'AZI', 'Sofiane', '1995-08-01', '2013-07-03', '77 rue du Puit NOGENT-SUR-OISE', '0644082156', 4),
(7, 'DURIEZ', 'Quentin', '1995-10-22', '2012-07-05', '67 rue des Coquelicots  BLAINCOURT LES PRECYS', '0647773036', 4),
(14, 'NOALLY', 'Dylan', '1997-05-02', '2016-07-05', '2 rue Chemin du Roc CINQUEUX', '0636541420', 1),
(15, 'POPYK', 'Dylan', '1994-06-16', '2012-07-02', '19 rue des Joncquilles CREIL', '0621339874', 4);

-- --------------------------------------------------------

--
-- Structure de la table `referent_peda`
--

CREATE TABLE `referent_peda` (
  `Id_referent_peda` int(11) NOT NULL,
  `Nom_referent_peda` varchar(25) NOT NULL,
  `Prenom_referent_peda` varchar(25) NOT NULL,
  `Fonction_referent_peda` varchar(100) NOT NULL,
  `Email_referent_peda` varchar(50) NOT NULL,
  `Tel_referent_peda` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `referent_peda`
--

INSERT INTO `referent_peda` (`Id_referent_peda`, `Nom_referent_peda`, `Prenom_referent_peda`, `Fonction_referent_peda`, `Email_referent_peda`, `Tel_referent_peda`) VALUES
(1, 'AMMAR', 'Fethi', 'Professeur', 'fammar@nodevo.com', '0654841473');

-- --------------------------------------------------------

--
-- Structure de la table `referent_pro`
--

CREATE TABLE `referent_pro` (
  `Id_referent_pro` int(11) NOT NULL,
  `Nom_referent_pro` varchar(25) NOT NULL,
  `Prenom_referent_pro` varchar(25) NOT NULL,
  `Fonction_referent_pro` varchar(100) NOT NULL,
  `Email_referent_pro` varchar(50) NOT NULL,
  `Tel_referent_pro` varchar(10) NOT NULL,
  `Id_entreprise` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `referent_pro`
--

INSERT INTO `referent_pro` (`Id_referent_pro`, `Nom_referent_pro`, `Prenom_referent_pro`, `Fonction_referent_pro`, `Email_referent_pro`, `Tel_referent_pro`, `Id_entreprise`) VALUES
(1, 'MARTINS-JACQUELOT', 'Jeff', 'Développeur web', 'jeffmartins@jacquelot.com', '0685479120', 2),
(2, 'AMMAR', 'Fethi', 'Professeur', 'fammar@nodevo.com', '0654841473', 1);

-- --------------------------------------------------------

--
-- Structure de la table `se_trouver`
--

CREATE TABLE `se_trouver` (
  `Id_etudiant` int(11) NOT NULL,
  `Id_date_annee` int(11) NOT NULL,
  `Id_classe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `Id_stage` int(11) NOT NULL,
  `Date_debut_stage` date NOT NULL,
  `Date_fin_stage` date NOT NULL,
  `Type_stage` varchar(25) NOT NULL,
  `Observations_stage` text NOT NULL,
  `Id_etudiant` int(11) NOT NULL,
  `Id_referent_peda` int(11) NOT NULL,
  `Id_entreprise` int(11) NOT NULL,
  `Id_referent_pro` int(11) NOT NULL,
  `Id_date_annee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`Id_stage`, `Date_debut_stage`, `Date_fin_stage`, `Type_stage`, `Observations_stage`, `Id_etudiant`, `Id_referent_peda`, `Id_entreprise`, `Id_referent_pro`, `Id_date_annee`) VALUES
(1, '2017-05-28', '2017-06-30', 'Développement web', 'Etudiant sérieux et une assiduité omniprésente', 15, 1, 1, 1, 1),
(2, '2016-05-29', '2016-06-30', 'Développement Application', 'Des difficultés, mais persévère pour gagner en autonomie', 7, 1, 2, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE `techno` (
  `Id_techno` int(11) NOT NULL,
  `Nom_techno` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `techno`
--

INSERT INTO `techno` (`Id_techno`, `Nom_techno`) VALUES
(1, 'HTML 5'),
(2, 'CSS 3'),
(3, 'PHP 5'),
(4, 'C#'),
(5, 'C'),
(6, 'C++'),
(7, 'Javascript'),
(8, 'Java'),
(9, 'Symfony'),
(10, 'Drupal'),
(11, 'Wordpress'),
(12, 'Python');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `Id_type` int(11) NOT NULL,
  `Libelle_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`Id_type`, `Libelle_type`) VALUES
(1, 'SARL'),
(2, 'SAS');

-- --------------------------------------------------------

--
-- Structure de la table `typebac`
--

CREATE TABLE `typebac` (
  `Id_type_bac` int(11) NOT NULL,
  `Libelle_type_bac` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `typebac`
--

INSERT INTO `typebac` (`Id_type_bac`, `Libelle_type_bac`) VALUES
(1, 'Bac Scientifique'),
(2, 'Bac Littéraire'),
(3, 'Bac Economique et Social'),
(4, 'Bac technologique STMG'),
(5, 'Bac technologique STI2D');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_utilisateur` int(11) NOT NULL,
  `Email_utilisateur` varchar(50) NOT NULL,
  `Password_utilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_utilisateur`, `Email_utilisateur`, `Password_utilisateur`) VALUES
(1, 'marie-noelle.jullien@lyceestvincent.net', 222);

-- --------------------------------------------------------

--
-- Structure de la table `utiliser`
--

CREATE TABLE `utiliser` (
  `Id_techno` int(11) NOT NULL,
  `Id_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `Id_visite` int(11) NOT NULL,
  `Date_visite` date NOT NULL,
  `Observations_visite` text NOT NULL,
  `Id_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `visite`
--

INSERT INTO `visite` (`Id_visite`, `Date_visite`, `Observations_visite`, `Id_stage`) VALUES
(1, '2016-06-04', 'Travail satisfaisant et assiduité à la réalisation de ses tâches', 1),
(2, '2016-06-14', 'Des difficultés semblent être présentes mais fournis un travail de qualité', 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `annee`
--
ALTER TABLE `annee`
  ADD PRIMARY KEY (`Id_date_annee`);

--
-- Index pour la table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`Id_classe`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`Id_entreprise`),
  ADD KEY `FK_entreprise_Id_type` (`Id_type`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`Id_etudiant`),
  ADD KEY `FK_etudiant_Id_type_bac` (`Id_type_bac`);

--
-- Index pour la table `referent_peda`
--
ALTER TABLE `referent_peda`
  ADD PRIMARY KEY (`Id_referent_peda`);

--
-- Index pour la table `referent_pro`
--
ALTER TABLE `referent_pro`
  ADD PRIMARY KEY (`Id_referent_pro`),
  ADD KEY `FK_referent_pro_Id_entreprise` (`Id_entreprise`);

--
-- Index pour la table `se_trouver`
--
ALTER TABLE `se_trouver`
  ADD PRIMARY KEY (`Id_etudiant`,`Id_date_annee`,`Id_classe`),
  ADD KEY `FK_se_trouver_Id_date_annee` (`Id_date_annee`),
  ADD KEY `FK_se_trouver_Id_classe` (`Id_classe`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`Id_stage`),
  ADD KEY `FK_stage_Id_etudiant` (`Id_etudiant`),
  ADD KEY `FK_stage_Id_referent_peda` (`Id_referent_peda`),
  ADD KEY `FK_stage_Id_entreprise` (`Id_entreprise`),
  ADD KEY `FK_stage_Id_referent_pro` (`Id_referent_pro`),
  ADD KEY `FK_stage_Id_date_annee` (`Id_date_annee`);

--
-- Index pour la table `techno`
--
ALTER TABLE `techno`
  ADD PRIMARY KEY (`Id_techno`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`Id_type`);

--
-- Index pour la table `typebac`
--
ALTER TABLE `typebac`
  ADD PRIMARY KEY (`Id_type_bac`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_utilisateur`);

--
-- Index pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD PRIMARY KEY (`Id_techno`,`Id_stage`),
  ADD KEY `FK_utiliser_Id_stage` (`Id_stage`);

--
-- Index pour la table `visite`
--
ALTER TABLE `visite`
  ADD PRIMARY KEY (`Id_visite`),
  ADD KEY `FK_visite_Id_stage` (`Id_stage`);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_entreprise_Id_type` FOREIGN KEY (`Id_type`) REFERENCES `type` (`Id_type`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_etudiant_Id_type_bac` FOREIGN KEY (`Id_type_bac`) REFERENCES `typebac` (`Id_type_bac`);

--
-- Contraintes pour la table `referent_pro`
--
ALTER TABLE `referent_pro`
  ADD CONSTRAINT `FK_referent_pro_Id_entreprise` FOREIGN KEY (`Id_entreprise`) REFERENCES `entreprise` (`Id_entreprise`);

--
-- Contraintes pour la table `se_trouver`
--
ALTER TABLE `se_trouver`
  ADD CONSTRAINT `FK_se_trouver_Id_classe` FOREIGN KEY (`Id_classe`) REFERENCES `classe` (`Id_classe`),
  ADD CONSTRAINT `FK_se_trouver_Id_date_annee` FOREIGN KEY (`Id_date_annee`) REFERENCES `annee` (`Id_date_annee`),
  ADD CONSTRAINT `FK_se_trouver_Id_etudiant` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`Id_etudiant`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `FK_stage_Id_date_annee` FOREIGN KEY (`Id_date_annee`) REFERENCES `annee` (`Id_date_annee`),
  ADD CONSTRAINT `FK_stage_Id_entreprise` FOREIGN KEY (`Id_entreprise`) REFERENCES `entreprise` (`Id_entreprise`),
  ADD CONSTRAINT `FK_stage_Id_etudiant` FOREIGN KEY (`Id_etudiant`) REFERENCES `etudiant` (`Id_etudiant`),
  ADD CONSTRAINT `FK_stage_Id_referent_peda` FOREIGN KEY (`Id_referent_peda`) REFERENCES `referent_peda` (`Id_referent_peda`),
  ADD CONSTRAINT `FK_stage_Id_referent_pro` FOREIGN KEY (`Id_referent_pro`) REFERENCES `referent_pro` (`Id_referent_pro`);

--
-- Contraintes pour la table `utiliser`
--
ALTER TABLE `utiliser`
  ADD CONSTRAINT `FK_utiliser_Id_stage` FOREIGN KEY (`Id_stage`) REFERENCES `stage` (`Id_stage`),
  ADD CONSTRAINT `FK_utiliser_Id_techno` FOREIGN KEY (`Id_techno`) REFERENCES `techno` (`Id_techno`);

--
-- Contraintes pour la table `visite`
--
ALTER TABLE `visite`
  ADD CONSTRAINT `FK_visite_Id_stage` FOREIGN KEY (`Id_stage`) REFERENCES `stage` (`Id_stage`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
