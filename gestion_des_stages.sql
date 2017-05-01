-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 01 Mai 2017 à 23:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_des_stages`
--

-- --------------------------------------------------------

--
-- Structure de la table `annee`
--

CREATE TABLE IF NOT EXISTS `annee` (
  `Id_date_annee` int(11) NOT NULL AUTO_INCREMENT,
  `Annee` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_date_annee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `annee`
--

INSERT INTO `annee` (`Id_date_annee`, `Annee`) VALUES
(0, '2016/2017'),
(1, '2017/2018'),
(2, '2018/2019'),
(3, '2019/2020'),
(4, '2020/2021');

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

CREATE TABLE IF NOT EXISTS `classe` (
  `Id_classe` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_classe` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_classe`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=701 ;

--
-- Contenu de la table `classe`
--

INSERT INTO `classe` (`Id_classe`, `Nom_classe`) VALUES
(0, 'BTS1'),
(1, 'BTS2'),
(2, 'BTS3'),
(3, 'LICENCE');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `Id_entreprise` int(11) NOT NULL AUTO_INCREMENT,
  `Site_entreprise` varchar(50) NOT NULL,
  `Nom_entreprise` varchar(50) NOT NULL,
  `Chiffre_affaire_entreprise` int(11) NOT NULL,
  `Adresse_entreprise` varchar(50) NOT NULL,
  `Id_type` int(11) NOT NULL,
  PRIMARY KEY (`Id_entreprise`),
  KEY `FK_entreprise_Id_type` (`Id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`Id_entreprise`, `Site_entreprise`, `Nom_entreprise`, `Chiffre_affaire_entreprise`, `Adresse_entreprise`, `Id_type`) VALUES
(0, 'nodevo.com', 'Nodevo', 111960000, 'Chantilly', 0),
(1, 'mentalworks.fr', 'Mentalworks', 123100000, 'Compiègne', 0),
(2, 'codeaitec.fr', 'Codeaitec', 234100000, 'Courtry', 1),
(3, 'ipotechnologie.fr', 'Ipo Technologie', 345100000, 'Decines Charpieu', 0),
(4, 'sicmarking.com', 'Sic Marking', 46100000, 'Pommiers', 0),
(5, 'aximum.fr', 'Aximum', 522100000, 'Margny Les Hameaux', 1),
(6, 'ravassarl.fr', 'Ravas Sarl', 456100100, 'Paris', 1),
(7, 'eltec.fr', 'Eltec', 122100000, 'Quint-fonsegrives', 1),
(8, 'tritech.fr', 'Tritech', 123100000, 'Roanne', 1),
(9, '6ta.fr', '6ta', 125000000, 'Bondoufle', 1),
(10, 'altedia.fr', 'Altedia', 600100000, 'Paris', 1),
(11, 'ocean.fr', 'Ocean', 600000000, 'Clichy', 0),
(12, 'enertopia.fr', 'Enertopia', 255000000, 'Paris', 1),
(13, 'intercodeservices.com', 'Intercode Services', 286100000, 'Aix En Provence', 1),
(14, 'seimn.fr', 'Seim N', 22000000, 'Thouare Sur Loire', 0);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `Id_etudiant` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_etudiant` varchar(25) NOT NULL,
  `Prenom_etudiant` varchar(25) NOT NULL,
  `Date_naissance_etudiant` date NOT NULL,
  `Annee_obtention_bac_etudiant` date NOT NULL,
  `Adresse_etudiant` varchar(50) NOT NULL,
  `Telephone_etudiant` varchar(10) NOT NULL,
  `Id_type_bac` int(11) NOT NULL,
  PRIMARY KEY (`Id_etudiant`),
  KEY `FK_etudiant_Id_type_bac` (`Id_type_bac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`Id_etudiant`, `Nom_etudiant`, `Prenom_etudiant`, `Date_naissance_etudiant`, `Annee_obtention_bac_etudiant`, `Adresse_etudiant`, `Telephone_etudiant`, `Id_type_bac`) VALUES
(0, 'ALAYA', 'Hedi', '1994-07-08', '2012-07-04', '14 rue des pissenlits SENLIS', '0685741236', 0),
(1, 'ALIOUATE', 'Adnane', '1994-03-03', '2012-07-05', '27 rue de Mozart, CREIL', '0699410263', 3),
(2, 'AZI', 'Sofiane', '1995-08-01', '2013-07-03', '77 rue du Puit NOGENT-SUR-OISE', '0644082156', 3),
(3, 'SUSSET', 'Romain', '1998-02-08', '2016-07-05', '5 Boulevard Diderot 75012 PARIS', '0644688827', 0),
(4, 'MACHIOCCU', 'Mathias', '1998-03-04', '2016-07-05', '1 place d''ItalieHôtel de Ville 75634 PARIS CEDEX 1', '0644081270', 3),
(5, 'GOURIN', 'Antoine', '1998-03-06', '2016-07-05', '18 rue des BatignollesHôtel de Ville 75840 PARIS C', '0653091012', 3),
(6, 'DURIEZ', 'Quentin', '1995-10-22', '2012-07-05', '67 rue des Coquelicots  BLAINCOURT LES PRECYS', '0647773036', 3),
(7, 'MARTIN', 'Thomas', '1997-02-05', '2015-07-05', '15 bis rue Ordener 75018 PARIS CEDEX 18', '0644691950', 4),
(8, 'DEGAUGUE', 'David', '1996-06-17', '2014-07-04', '31 rue PecletHôtel de Ville 75732 PARIS CEDEX 15', '0656562315', 4),
(9, 'MONMART', 'Jean-Emile', '1997-04-21', '2015-07-05', '14 RUE BREVIN 75014 PARIS', '0653903200', 4),
(10, 'GODSON', 'Valerick', '1998-08-14', '2016-07-05', '23 rue Bichat 75475 PARIS CEDEX 10', '0653192626', 2),
(11, 'EMPTY', 'Vincent', '1999-12-14', '2016-07-05', '21 place du PanthéonMairie de Paris 75231 PARIS', '0656817505', 2),
(12, 'MANDAMBU FUKIAWU', 'Gradi', '1998-07-04', '2016-06-05', '68 rue des plantes 75014 PARIS', '6022474568', 4),
(13, 'NOALLY', 'Dylan', '1997-05-02', '2016-07-05', '2 rue Chemin du Roc CINQUEUX', '0636541420', 0),
(14, 'POPYK', 'Dylan', '1994-06-16', '2012-07-02', '19 rue des Joncquilles CREIL', '0621339874', 3);

-- --------------------------------------------------------

--
-- Structure de la table `referent_peda`
--

CREATE TABLE IF NOT EXISTS `referent_peda` (
  `Id_referent_peda` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_referent_peda` varchar(30) NOT NULL,
  `Fonction_referent_peda` varchar(100) NOT NULL,
  `Email_referent_peda` varchar(50) NOT NULL,
  `Tel_referent_peda` varchar(10) NOT NULL,
  PRIMARY KEY (`Id_referent_peda`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `referent_peda`
--

INSERT INTO `referent_peda` (`Id_referent_peda`, `Nom_referent_peda`, `Fonction_referent_peda`, `Email_referent_peda`, `Tel_referent_peda`) VALUES
(0, 'AMMAR', 'Professeur', 'fammar@nodevo.com', '0654841473'),
(1, 'IDASIAK', 'Professeur', 'mickaelidasiak@gmail.com', '0654246474'),
(2, 'KINTZLER', 'Professeur', 'agneskintzler@gmail.com', '0688241774'),
(3, 'LALOY', 'Professeur', 'elene@gmail.com', '0644671848'),
(4, 'DANIEL', 'Professeur', 'bgdaniel60@gmail.com', '0640408200');

-- --------------------------------------------------------

--
-- Structure de la table `referent_pro`
--

CREATE TABLE IF NOT EXISTS `referent_pro` (
  `Id_referent_pro` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_referent_pro` varchar(30) NOT NULL,
  `Fonction_referent_pro` varchar(100) NOT NULL,
  `Email_referent_pro` varchar(50) NOT NULL,
  `Tel_referent_pro` varchar(10) NOT NULL,
  `Id_entreprise` int(11) NOT NULL,
  PRIMARY KEY (`Id_referent_pro`),
  KEY `FK_referent_pro_Id_entreprise` (`Id_entreprise`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `referent_pro`
--

INSERT INTO `referent_pro` (`Id_referent_pro`, `Nom_referent_pro`, `Fonction_referent_pro`, `Email_referent_pro`, `Tel_referent_pro`, `Id_entreprise`) VALUES
(0, 'MARTINS-JACQUELOT', 'Développeur web', 'jeffmartins@jacquelot.com', '0685479120', 1),
(1, 'AMMAR FETHI', 'Professeur', 'fammar@nodevo.com', '0654841473', 0),
(2, 'PIERRE NATERME', 'Chef de projets', 'naterme@gmail.com', '06000344', 3),
(3, 'FRANCOIS HOLLANDE', 'Chef de projets', 'francerepublique@gmail.com', '0644827610', 2),
(4, 'SEBASTIEN BAZIN', 'Chef de projets', 'bazin@gmail.com', '060015678', 4),
(5, 'HUBERTUS VON GRUNBERG', 'Chef de projets', 'grunberg@gmail.com', '060020344', 5),
(6, 'ULRICH SPIESSHOFER', 'Développeur web', 'spiesshofer@gmail.com', '060035678', 6),
(7, 'Florentino Pérez', 'Chef de projets', 'Florentino@gmail.com', '060094433', 7),
(8, 'Igor Landau', 'Chef de projets', 'landau@gmail.com', '060064433', 8),
(9, 'Kasper Rorsted', 'Chef de projets', 'kasper@gmail.com', '060072727', 9),
(10, 'Dudley Eustace', 'Chef de projets', 'eustace@gmail.com', '060082728', 10),
(11, 'Alex Wynaendts', 'Développeur web', 'wynaendts@gmail.com', '060402727', 11),
(12, 'Mats Jansson', 'Chef de projets', 'jansson@gmail.com', '060411234', 12),
(13, 'Douglas Steenland', 'Développeur web', 'douglas@gmail.com', '060447754', 13),
(14, 'Peter Hancock', 'Développeur web', 'peter@gmail.com', '060640101', 14);

-- --------------------------------------------------------

--
-- Structure de la table `se_trouver`
--

CREATE TABLE IF NOT EXISTS `se_trouver` (
  `Id_etudiant` int(11) NOT NULL,
  `Id_date_annee` int(11) NOT NULL,
  `Id_classe` int(11) NOT NULL,
  PRIMARY KEY (`Id_etudiant`,`Id_date_annee`,`Id_classe`),
  KEY `FK_se_trouver_Id_date_annee` (`Id_date_annee`),
  KEY `FK_se_trouver_Id_classe` (`Id_classe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `se_trouver`
--

INSERT INTO `se_trouver` (`Id_etudiant`, `Id_date_annee`, `Id_classe`) VALUES
(0, 0, 0),
(4, 0, 2),
(5, 0, 2),
(6, 0, 2),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 3),
(14, 0, 3),
(1, 4, 0),
(2, 4, 0),
(3, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE IF NOT EXISTS `stage` (
  `Id_stage` int(11) NOT NULL AUTO_INCREMENT,
  `Date_debut_stage` date NOT NULL,
  `Date_fin_stage` date NOT NULL,
  `Type_stage` varchar(25) NOT NULL,
  `Observations_stage` text NOT NULL,
  `Id_etudiant` int(11) NOT NULL,
  `Id_referent_peda` int(11) NOT NULL,
  `Id_entreprise` int(11) NOT NULL,
  `Id_referent_pro` int(11) NOT NULL,
  `Id_date_annee` int(11) NOT NULL,
  PRIMARY KEY (`Id_stage`),
  KEY `FK_stage_Id_etudiant` (`Id_etudiant`),
  KEY `FK_stage_Id_referent_peda` (`Id_referent_peda`),
  KEY `FK_stage_Id_entreprise` (`Id_entreprise`),
  KEY `FK_stage_Id_referent_pro` (`Id_referent_pro`),
  KEY `FK_stage_Id_date_annee` (`Id_date_annee`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=721 ;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`Id_stage`, `Date_debut_stage`, `Date_fin_stage`, `Type_stage`, `Observations_stage`, `Id_etudiant`, `Id_referent_peda`, `Id_entreprise`, `Id_referent_pro`, `Id_date_annee`) VALUES
(0, '2017-05-28', '2017-06-30', 'Développement web', 'Etudiant sérieux et une assiduité omniprésente', 0, 0, 0, 0, 0),
(1, '2017-05-29', '2017-06-30', 'Développement Application', 'Des difficultés, mais persévère pour gagner en autonomie', 1, 1, 6, 1, 0),
(2, '2017-05-29', '2017-06-30', 'Développement web', 'Être là, tout contre toi,\nÉcouter les battements de ton cœur.\nNe plus penser à nos doutes ou à nos peur.\nEt vivre simplement cet instant empli de joie.\n', 2, 0, 3, 5, 2),
(3, '2017-05-29', '2017-06-30', 'Développement web', 'Quand je suis allé à l''école, ils m''ont demandé ce que je voulais être quand je serais grand. J''ai répondu "heureux". Ils m''ont dit que je n''avais pas compris la question, j''ai répondu qu''ils n''avaient pas compris la vie.', 3, 0, 4, 6, 0),
(4, '2017-05-29', '2017-06-30', 'Développement web', 'Il n''y a pas de mauvais choix, car derrière chaque épreuve se cache une morale qui nous aidera lors de nos futures destinations.', 4, 1, 1, 2, 2),
(5, '2017-05-29', '2017-06-30', 'Développement web', 'On ne peut être vraiment soi qu''aussi longtemps qu''on est seul ; qui n''aime donc pas la solitude n''aime pas la liberté, car on n''est libre qu''étant seul.', 5, 1, 2, 4, 2),
(6, '2017-05-29', '2017-06-30', 'Développement web', 'Nos premiers maîtres de philosophie sont nos pieds, nos mains, nos yeux. Substituer des livres à tout cela, ce n''est pas nous apprendre à raisonner, c''est nous apprendre à nous servir de la raison d''autrui.', 6, 2, 5, 7, 0),
(7, '2017-05-29', '2017-06-30', 'Développement web', 'On ne doit pas mourir pour ses amis...\r\nOn doit vivre pour eux...\r\nc''est le secret d''un avenir heureux!', 12, 2, 13, 3, 0),
(8, '2017-05-29', '2017-06-30', 'Développement web', 'Parle sans savoir, on te croira sot ;\nParle en sachant, on te croira vaniteux ;\nTais-toi, on te croira sage.', 8, 3, 7, 9, 0),
(9, '2017-05-29', '2017-06-30', 'Développement web', 'Placez votre main sur un poêle une minute et ça vous semble durer une heure. Asseyez vous auprès d''une jolie fille une heure et ça vous semble durer une minute. C''est ça la relativité.', 9, 3, 9, 10, 0),
(10, '2017-05-29', '2017-06-30', 'Développement web', 'Dans le monde actuel, nous investissons 5 fois plus d''argent pour la virilité masculine et en silicone pour les seins des femmes que pour la guérison de la maladie d''Alzheimer.\r\nDans quelques années, nous aurons des vieilles avec des gros seins, des vieux à la verge dure, mais aucun d''entre eux ne se rappellera à quoi ça sert.', 10, 4, 10, 11, 0),
(11, '2017-05-29', '2017-06-30', 'Développement web', 'Pour vouloir, il faut pouvoir; Pour pouvoir, il faut savoir; Pour savoir, il faut connaitre; Pour connaitre, il faut appendre; Mais pour appendre, il faut vouloir...', 11, 4, 11, 12, 0),
(12, '2017-05-29', '2017-06-30', 'Développement webv', 'Nous sommes comme des livres ! La plupart des gens ne voient que notre couverture... Au mieux ils lisent notre résumé, ou bien se fient à la critique que d''autres en font. Mais ce qui est certain, c''est que très peu d''entre eux connaissent vraiment notre histoire.', 7, 2, 8, 8, 0),
(13, '2017-05-29', '2017-06-30', 'Développement web', 'On ne voit que ce qu''on veut voir, on n''entend que ce qu''on veut entendre,pire est celui qui ne veut voir, pire est celui qui ne veut entendre.', 13, 0, 12, 13, 0),
(14, '2017-05-29', '2017-06-30', 'Développement web', 'Quand le dernier arbre aura été coupé,\nQuand la dernière rivière aura été empoisonnée,\nQuand le dernier poisson aura été attrapé,\nSeulement alors,\nl''Homme se rendra compte que l''argent ne se mange pas.', 14, 0, 14, 14, 0);

-- --------------------------------------------------------

--
-- Structure de la table `techno`
--

CREATE TABLE IF NOT EXISTS `techno` (
  `Id_techno` int(11) NOT NULL AUTO_INCREMENT,
  `Nom_techno` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_techno`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `techno`
--

INSERT INTO `techno` (`Id_techno`, `Nom_techno`) VALUES
(0, 'HTML 5'),
(1, 'CSS 3'),
(2, 'PHP 5'),
(3, 'C#'),
(4, 'C'),
(5, 'C++'),
(6, 'Javascript'),
(7, 'Java'),
(8, 'Symfony'),
(9, 'Drupal'),
(10, 'Wordpress'),
(11, 'Python');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `Id_type` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle_type` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`Id_type`, `Libelle_type`) VALUES
(0, 'SARL'),
(1, 'SAS');

-- --------------------------------------------------------

--
-- Structure de la table `typebac`
--

CREATE TABLE IF NOT EXISTS `typebac` (
  `Id_type_bac` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle_type_bac` varchar(25) NOT NULL,
  PRIMARY KEY (`Id_type_bac`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `typebac`
--

INSERT INTO `typebac` (`Id_type_bac`, `Libelle_type_bac`) VALUES
(0, 'Bac Scientifique'),
(1, 'Bac Littéraire'),
(2, 'Bac Economique et Social'),
(3, 'Bac technologique STMG'),
(4, 'Bac technologique STI2D');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `Id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `Email_utilisateur` varchar(50) NOT NULL,
  `Password_utilisateur` int(11) NOT NULL,
  PRIMARY KEY (`Id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_utilisateur`, `Email_utilisateur`, `Password_utilisateur`) VALUES
(1, 'marie-noelle.jullien@lyceestvincent.net', 493);

-- --------------------------------------------------------

--
-- Structure de la table `utiliser`
--

CREATE TABLE IF NOT EXISTS `utiliser` (
  `Id_techno` int(11) NOT NULL,
  `Id_stage` int(11) NOT NULL,
  PRIMARY KEY (`Id_techno`,`Id_stage`),
  KEY `FK_utiliser_Id_stage` (`Id_stage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `visite`
--

CREATE TABLE IF NOT EXISTS `visite` (
  `Id_visite` int(11) NOT NULL AUTO_INCREMENT,
  `Date_visite` date NOT NULL,
  `Observations_visite` text NOT NULL,
  `Id_stage` int(11) NOT NULL,
  PRIMARY KEY (`Id_visite`),
  KEY `FK_visite_Id_stage` (`Id_stage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Contenu de la table `visite`
--

INSERT INTO `visite` (`Id_visite`, `Date_visite`, `Observations_visite`, `Id_stage`) VALUES
(1, '2016-06-04', 'Travail satisfaisant et assiduité à la réalisation de ses tâches', 0),
(2, '2016-06-14', 'Des difficultés semblent être présentes mais fournis un travail de qualité', 1),
(3, '2017-04-28', 'N''a plus aucune difficulté', 1),
(4, '2017-04-29', 'Reste toujours bon', 0),
(5, '2017-04-27', 'Peux mieux faire', 1),
(6, '2017-04-25', 'Voila voila', 0),
(7, '2017-05-01', 'La solitude est le nid des pensées.', 2),
(8, '2017-05-02', 'Je croyait que j''apprenais a vivre.\r\nJ''apprenais seulement a mourir.', 2),
(9, '2017-05-01', 'La philosophie c''est l''art de faire des phrases simples avec des mots compliqués', 3),
(10, '2017-05-02', 'Quand un philosophe me répond, je ne comprends plus ma question.', 3),
(11, '2017-05-01', 'Tout est impossible jusqu''à ce que quelqu''un le fasse.', 4),
(12, '2017-05-02', 'Les bons moments du présent crée la nostalgie de l''avenir.', 4),
(13, '2017-05-01', 'Il n''y a qu''une chose qui puisse rendre un rêve impossible, c''est la peur d''échouer.', 5),
(14, '2017-05-02', 'Félicite celui qui devient le meilleur, respecte celui qui le reste.', 5),
(15, '2017-05-01', 'Tout le monde veut devenir unique alors qu''être unique c''est de ne pas chercher à l''être.', 6),
(16, '2017-05-02', 'A quoi bon essayer de tuer le temps ? Il finit toujours par se venger.', 6),
(17, '2017-05-01', 'Il faut deux personnes pour dire la vérité - une pour la dire et l’autre pour l’écouter.', 7),
(18, '2017-05-02', 'Même dans l''alphabet, aime a toujours été voisin de haine.', 7),
(19, '2017-05-01', 'Pourquoi s''attarder a chercher la perfection alors que le bonheur est lui même imparfait.', 8),
(20, '2017-05-02', 'Ne pas s''attarder sera excellent.', 8),
(21, '2017-05-01', 'Le temps est l''image mobile, de l’éternité immobile', 9),
(22, '2017-05-02', 'Regarde ce qu’un homme critique avec le plus de virulence, et tu connaîtras son vice secret.', 9),
(23, '2017-05-01', 'La vie est un mystère qu''il faut vivre, et non un problème à résoudre.\r\n', 10),
(24, '2017-05-02', 'Dans la vengeance et en amour, la femme est plus barbare que l''homme.', 10),
(25, '2017-05-01', 'La richesse n''est pas la quantité d''argent qu''on a mais la façon dont on l''utilise.', 11),
(26, '2017-05-02', 'Pouvoir oublier est le secret de l''éternelle jeunesse. Nous devenons vieux par le souvenir.', 11),
(27, '2017-05-01', 'Le premier pas vers la philosophie, c''est l''incrédulité.', 12),
(28, '2017-05-02', 'Ne fait pas confiance a ceux qui te mentent, ne ment pas a ceux qui te font confiance.', 12),
(29, '2017-05-01', 'L''idiotie des gens renforce mon intelligence', 0),
(30, '2017-05-02', 'Le véritable héroïsme n’est pas l’absence de peur mais, la canalisation de la peur vers l’action.', 13),
(31, '2017-05-08', 'La nature fait les hommes semblables, la vie les rend différents.', 12),
(32, '2017-05-10', 'Agis avec gentillesse, mais n''attends pas de la reconnaissance.', 12),
(33, '2017-04-28', 'Le premier pas vers la philosophie, c''est l''incrédulité.', 13),
(34, '2017-05-01', 'Dans le rire et l’allégresse, laissez venir les rides de l’âge.', 14),
(35, '2017-05-02', 'La jeunesse est courte. C’est la vie qui est longue. ', 14);

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
