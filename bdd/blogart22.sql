-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 mars 2022 à 00:30
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogart22`
--

-- --------------------------------------------------------

--
-- Structure de la table `angle`
--

DROP TABLE IF EXISTS `angle`;
CREATE TABLE IF NOT EXISTS `angle` (
  `numAngl` varchar(8) NOT NULL,
  `libAngl` varchar(60) NOT NULL,
  `numLang` varchar(8) NOT NULL,
  PRIMARY KEY (`numAngl`),
  KEY `ANGLE_FK` (`numAngl`),
  KEY `FK_ASSOCIATION_3` (`numLang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `angle`
--

INSERT INTO `angle` (`numAngl`, `libAngl`, `numLang`) VALUES
('ANGL0106', 'Paranormal', 'FRAN01');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `numArt` int(8) NOT NULL AUTO_INCREMENT,
  `dtCreArt` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `libTitrArt` varchar(100) DEFAULT NULL,
  `libChapoArt` text,
  `libAccrochArt` varchar(100) DEFAULT NULL,
  `parag1Art` text,
  `libSsTitr1Art` varchar(100) DEFAULT NULL,
  `parag2Art` text,
  `libSsTitr2Art` varchar(100) DEFAULT NULL,
  `parag3Art` text,
  `libConclArt` text,
  `urlPhotArt` varchar(70) DEFAULT NULL,
  `numAngl` varchar(8) NOT NULL,
  `numThem` varchar(8) NOT NULL,
  PRIMARY KEY (`numArt`),
  KEY `ARTICLE_FK` (`numArt`),
  KEY `FK_ASSOCIATION_1` (`numAngl`),
  KEY `FK_ASSOCIATION_2` (`numThem`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`numArt`, `dtCreArt`, `libTitrArt`, `libChapoArt`, `libAccrochArt`, `parag1Art`, `libSsTitr1Art`, `parag2Art`, `libSsTitr2Art`, `parag3Art`, `libConclArt`, `urlPhotArt`, `numAngl`, `numThem`) VALUES
(1, '2022-03-05 00:17:46', 'Bordeaux: êtes-vous prêts à vous faire interner?', 'Pour la p&eacute;riode d&rsquo;Halloween, le Sensas de Bordeaux renouvelle pour la 3&egrave;me fois son parcours sensoriel sur le th&egrave;me de l&rsquo;&eacute;pouvante. Cette ann&eacute;e, les joueurs &eacute;volueront dans un asile d&eacute;saffect&eacute; au sein duquel de dangereux psychopathes les attendent dans l&rsquo;obscurit&eacute; la plus totale.', 'Vous &ecirc;tes vous d&eacute;j&agrave; imagin&eacute; dans un film d&rsquo;horreur? ', 'Avez-vous d&eacute;j&agrave; r&eacute;fl&eacute;chi &agrave; tout ce que vous feriez pour rester en vie?  Je suis certaine par exemple, que vous n&rsquo;iriez pas seul dans une cabane abandonn&eacute;e au fond de la for&ecirc;t ou bien dans un asile d&eacute;saffect&eacute; ! Vous ne vous &eacute;loigneriez pas non plus de votre groupe d&rsquo;amis. Et m&ecirc;me dans l\'hypoth&egrave;se o&ugrave; vous vous retrouveriez malgr&eacute; tout dans cette situation incongrue, au grand jamais vous ne vous mettriez &agrave; crier &ldquo;Wouhouuuu il y a quelqu&rsquo;un?&rdquo;. &Eacute;videmment, vous &ecirc;tes plus malin que cela, et vous allez pouvoir le prouver au sein d&rsquo;un &eacute;v&eacute;nement in&eacute;dit &agrave; Bordeaux: Le Sensas&rsquo;ylum!\r\nDeux heures d&rsquo;exp&eacute;rience immersive qui sollicitent vos cinq sens et stimulent votre cortex c&eacute;r&eacute;bral au travers d&rsquo;&eacute;nigmes macabres. Tandis que vous tentez de trouver vos rep&egrave;res dans l&rsquo;obscurit&eacute;, une horde de tueurs en s&eacute;rie s&rsquo;efforce de vous assassiner. C&rsquo;est une course contre la montre, durant laquelle vos perceptions, alli&eacute;es &agrave; votre imagination, seront vos pires ennemies. Il vous est conseill&eacute; de venir accompagn&eacute; d\'une dizaine de personnes (auxquelles vous ne tenez pas beaucoup) afin de pouvoir en sacrifier quelques-unes aux psychopathes qui hantent les lieux.', 'Le noir, entre peur et fascination', 'Halloween est la f&ecirc;te qui met &agrave; l&rsquo;honneur les monstres et les criminels tapis dans le noir. Ceux- l&agrave; m&ecirc;me que l&rsquo;on redoute de trouver sous notre lit enfant.  Cependant, plus que les entit&eacute;s qu&rsquo;elle abrite, ne serait-ce pas l&rsquo;obscurit&eacute; elle-m&ecirc;me que nous craignons? En effet, d&egrave;s leur plus jeune &acirc;ge et tout au long de leur vie, les Hommes, tout en l&rsquo;appr&eacute;hendant,  &eacute;prouvent une certaine fascination pour la profondeur des t&eacute;n&egrave;bres. Dans le noir, nos perceptions ne sont plus les m&ecirc;mes qu&rsquo;en plein jour. Lorsque nos yeux sont rel&eacute;gu&eacute;s au second rang et que nous sommes plong&eacute;s dans le silence le plus total, notre imagination s&rsquo;emballe. Plus rien ne fait sens, les objets semblent s&rsquo;animer, le moindre bruit est amplifi&eacute; et d&rsquo;inqui&eacute;tantes silhouettes semblent nous surveiller. Comme le dit l&rsquo;adage, &ldquo;la nuit tous les chats sont gris&rdquo; et ces belles paroles n&rsquo;ont jamais &eacute;t&eacute; plus vraies qu&rsquo;au sein de cette exp&eacute;rience immersive. C&rsquo;est donc sans surprise, pour cr&eacute;er l&rsquo;&eacute;pouvante, que 80 % des &eacute;preuves du Sensas&rsquo;ylum se font dans le noir. Il vous sera donc impossible de discerner le vrai du faux. Qui sont vos amis? Qui sont vos ennemis? Et quel &eacute;tait donc ce bruit &eacute;trange? Vous serez surpris de constater &agrave; quel point la vue prend le pas sur nos autres sens dans notre quotidien et qu&rsquo;une fois &ocirc;t&eacute;e, nos perceptions sont chamboul&eacute;es.', '&ldquo;Plus qu&rsquo;un argument promotionnel, c\'est un v&eacute;ritable engagement solidaire&rdquo;', 'Cet &eacute;v&eacute;nement est plus qu&rsquo;un &eacute;ni&egrave;me escape game, il est le produit d&rsquo;une entreprise fran&ccedil;aise ayant pour objectif premier de sensibiliser son public aux handicaps. De fa&ccedil;on ludique, Sensas permet au joueur de se mettre &agrave; la place de personnes d&eacute;ficientes en les privant de certains de leurs sens tels que l&rsquo;ou&iuml;e ou la vue. Plus qu&rsquo;un simple argument promotionnel, il s&rsquo;agit d&rsquo;un v&eacute;ritable engagement solidaire. En effet, tout au long de votre p&eacute;riple, vous aurez la possibilit&eacute; de remporter des amulettes. Chaque amulette remport&eacute;e est plus qu&rsquo;un troph&eacute;e puisque pour chacune d&rsquo;entre elles,  un don est effectu&eacute;  &agrave; une association locale &oelig;uvrant pour les personnes en situation de handicap. De plus, afin de pousser cette d&eacute;marche &agrave; son apog&eacute;e, les parcours sont accessibles aux personnes d&eacute;ficientes ou &agrave; mobilit&eacute; r&eacute;duite. De la m&ecirc;me mani&egrave;re, une attention particuli&egrave;re est port&eacute;e &agrave; chaque joueur, et ce, quelque soit son r&eacute;gime alimentaire, son &acirc;ge ou sa condition physique. Si le Sensas&rsquo;ylum vous effraie trop ou que vous pr&eacute;sentez des probl&egrave;mes cardiaques, tout n&rsquo;est pas perdu! Vous aurez l&rsquo;occasion de d&eacute;couvrir ce nouveau concept lors de prochains &eacute;v&eacute;nements &agrave; th&egrave;mes partout en France.', 'Que vous souhaitiez d&eacute;couvrir une exp&eacute;rience sensorielle, soutenir une association locale ou tout simplement c&eacute;l&eacute;brer Halloween autrement, le Sensas&rsquo;ylum Bordeaux, situ&eacute; 10 rue Pourmann, se d&eacute;roulera du 22 Octobre 2022 au 03 Novembre 2022, tous les jours de 9h &agrave; 23h. Au sein de cet asile de fous, finirez vous enferm&eacute; &agrave; tout jamais? Assassin&eacute; de sang froid par les dangereux criminels qui s&rsquo;y cachent? Ou bien vos sens vous resteront fid&egrave;les et vous m&egrave;neront jusqu\'&agrave; la sortie? \r\nSi vous aussi vous &ecirc;tes devenu acteur de votre propre film d&rsquo;horreur ou avez v&eacute;cu une exp&eacute;rience similaire, n&rsquo;h&eacute;sitez pas &agrave; partager votre ressenti dans les commentaires. \r\n\r\nPS: La r&eacute;daction d&eacute;cline toute responsabilit&eacute; si cela vous a fait perdre la raison, ou bien donn&eacute; envie de devenir un dangereux criminel .', 'imgArtfd1521a4fe859e77ebfd4c8761dbd42b.png', 'ANGL0106', 'THEM0101'),
(2, '2022-03-05 00:29:19', 'Les myst&egrave;res de Bordeaux : la sombre r&eacute;alit&eacute;.', 'D&eacute;mystifier les mythes et l&eacute;gendes de Bordeaux, c&rsquo;est l&rsquo;objectif que s\'est fix&eacute;  notre &eacute;quipe de r&eacute;daction, et pour cela rien de tel que d&rsquo;interroger Hubert Saint-B&eacute;at. Ancien journaliste devenu guide sp&eacute;cialis&eacute; de Bordeaux, il nous pr&eacute;sente les histoires vraies les plus terrifiantes de la ville!', 'Tout quitter. Sa vie, son m&eacute;tier, Paris.', 'C&rsquo;est ce qu&rsquo;a os&eacute; Hubert Saint-B&eacute;at, ancien journaliste pour la cha&icirc;ne M6. Ce d&eacute;tenteur d&rsquo;un Master d&rsquo;Histoire romaine, mais aussi de Journalisme, a d&eacute;cid&eacute; de tout plaquer afin de renouer avec ses racines bordelaises. &laquo; L&rsquo;id&eacute;e, c&rsquo;&eacute;tait qu&rsquo;apr&egrave;s mon exp&eacute;rience &agrave; Paris, j&rsquo;avais envie de revenir, de retrouver ma ville natale mais aussi de r&eacute;aliser un travail en accord avec ma premi&egrave;re passion: l&rsquo;Histoire. &raquo; C&rsquo;est avec cette motivation qui le caract&eacute;rise, qu&rsquo;Hubert d&eacute;cide de se lancer dans le monde de l&rsquo;entreprenariat et qu&rsquo;il devient alors guide conf&eacute;rencier &agrave; Bordeaux. &laquo; Je me suis dit : qu&rsquo;est-ce que je pouvais faire dans ma ville en rapport avec l&rsquo;histoire? La r&eacute;ponse s&rsquo;est impos&eacute;e d&rsquo;elle-m&ecirc;me : je pouvais &ecirc;tre guide touristique. C&rsquo;est ce que j&rsquo;ai commenc&eacute; &agrave; faire. D&rsquo;abord avec des visites un petit peu g&eacute;n&eacute;rales sur la ville, et ensuite avec des visites th&eacute;matiques comme les Myst&egrave;res de Bordeaux. &raquo; Cette passion, elle se ressent. Si Hubert semblait sur la r&eacute;serve au d&eacute;but de notre entretien, les traits de son visage se sont peu &agrave; peu d&eacute;li&eacute;s pour s&rsquo;animer d&rsquo;enthousiasme tandis qu&rsquo;il nous exposait ses choix de sujets pour les visites.', '&laquo; L&rsquo;histoire d&rsquo;une ville, ce sont les habitants qui la racontent le mieux &raquo;', 'La transmission de l&rsquo;Histoire et l&rsquo;&eacute;change avec autrui. Ce sont les valeurs qui ont pouss&eacute; Hubert &agrave; quitter sa vie d&rsquo;avant pour devenir guide. A travers ses r&eacute;cits sur la ville de Bordeaux, il cherche &agrave; transmettre des histoires insolites, pass&eacute;es de g&eacute;n&eacute;ration en g&eacute;n&eacute;ration. Des histoires vraies, toujours. Des souvenirs de la vie pass&eacute;e des bordelais, s&ucirc;rement transform&eacute;s et enjoliv&eacute;s au fil des ann&eacute;es certes, mais bas&eacute;s sur des faits r&eacute;els. Chercher des anecdotes oubli&eacute;es et m&eacute;connues du public, est un travail de longue haleine qui n&eacute;cessite patience et minutie. Il s&rsquo;agit de trouver des sources fiables. &laquo; Il y a des livres, dont la plupart ne sont plus &eacute;dit&eacute;s mais que l&rsquo;on peut retrouver chez des bouquinistes et il y a les archives de Bordeaux &raquo; nous explique t-il. N&eacute;anmoins, &laquo; L&rsquo;histoire d&rsquo;une ville, ce sont les habitants qui la racontent le mieux &raquo;, ajoute le guide. En effet, il n&rsquo;h&eacute;site pas &agrave; interroger des personnes &acirc;g&eacute;es, ravies de partager leurs connaissances. Ce sont ces dialogues, qui lui permettent d&rsquo;affirmer que le pass&eacute; ne doit pas &ecirc;tre n&eacute;glig&eacute;. Pour mieux comprendre le pr&eacute;sent, il faut d&rsquo;abord comprendre le pass&eacute; qui interf&egrave;re et fa&ccedil;onne notre quotidien.', 'Au coeur des myst&egrave;res de la Belle endormie', 'Les d&eacute;formations des histoires et les &laquo; on dit &raquo;, c&rsquo;est ce qui donne naissance aux mythes et l&eacute;gendes urbaines. La belle endormie qu&rsquo;est la ville de Bordeaux en regorge et c&rsquo;est ce que partage Hubert lors de son tour le plus demand&eacute; : Les myst&egrave;res de Bordeaux. Pris dans le r&eacute;cit de ce que propose son parcours de nuit, il nous offre des brins d&rsquo;histoires et de l&eacute;gendes. Dans cette ville qu&rsquo;il appr&eacute;cie tant, nous red&eacute;couvrons des rues, des places ou des bars d&rsquo;un tout nouvel &oelig;il. Il nous conte ces myst&egrave;res encore jamais &eacute;lucid&eacute;s qui nous plongent dans une profonde envie d&rsquo;en savoir plus. Il &eacute;voque le proc&egrave;s d&rsquo;un loup-garou, le jugement de sorci&egrave;res, l&rsquo;antre d&rsquo;un basilic cach&eacute;e dans un puits, et m&ecirc;me le palais Gallien, suppos&eacute;ment hant&eacute; et maudit. Son anecdote pr&eacute;f&eacute;r&eacute;e: les 74 momies parfaitement conserv&eacute;es qui ont &eacute;t&eacute; retrouv&eacute;es au sein du c&eacute;l&egrave;bre quartier de Saint-Michel au milieu de corps naturellement d&eacute;compos&eacute;s. &ldquo;On ne sait rien de particulier sur ces momies: ni &agrave; quel moment ces gens sont morts, ni qui ils &eacute;taient et surtout pourquoi et comment ces corps ont &eacute;t&eacute; pr&eacute;serv&eacute;s?&amp;quot;. Ces momies naturelles restent une &eacute;nigme &agrave; part enti&egrave;re.', 'Si l&rsquo;on devait retenir quelque chose du portrait d&rsquo;Hubert, c&rsquo;est qu&rsquo;il n&rsquo;est jamais trop tard pour suivre ses passions. N&rsquo;h&eacute;sitez pas &agrave; exp&eacute;rimenter et &agrave; saisir les opportunit&eacute;s qui s&rsquo;offrent &agrave; vous. Ouvrez vous aux personnes qui vous entourent, elles ont souvent plus &agrave; vous apporter que vous ne l&rsquo;imaginez. Faites de m&ecirc;me avec votre environnement, soyez sensible et spirituel. La spiritualit&eacute; est la cl&eacute; du succ&egrave;s qui vous permettra d&rsquo;acc&eacute;der au monde de l&rsquo;invisible et de cultiver votre ouverture d&rsquo;esprit. M&eacute;diter permet &eacute;galement d&rsquo;organiser son esprit et de d&eacute;velopper des parties de notre cerveau que nous utilisons peu voir pas du tout. N&rsquo;oubliez pas que vous &ecirc;tes libres de vos choix et que les seules barri&egrave;res qui s&rsquo;imposent &agrave; vous sont celles que vous vous cr&eacute;ez vous m&ecirc;me.', 'imgArt1621659caca22ddaf0cb995d19753368.png', 'ANGL0106', 'THEM0102');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `dtCreCom` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `libCom` text NOT NULL,
  `attModOK` tinyint(1) DEFAULT '0',
  `dtModCom` timestamp NULL DEFAULT NULL,
  `notifComKOAff` text,
  `delLogiq` tinyint(1) DEFAULT '0',
  `numMemb` int(10) NOT NULL,
  PRIMARY KEY (`numSeqCom`,`numArt`),
  KEY `COMMENT_FK` (`numSeqCom`,`numArt`),
  KEY `FK_ASSOCIATION_8` (`numArt`),
  KEY `FK_ASSOCIATION_9` (`numMemb`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commentplus`
--

DROP TABLE IF EXISTS `commentplus`;
CREATE TABLE IF NOT EXISTS `commentplus` (
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `numSeqComR` int(10) NOT NULL,
  `numArtR` int(8) NOT NULL,
  PRIMARY KEY (`numSeqCom`,`numArt`,`numSeqComR`,`numArtR`),
  KEY `COMMENTPLUS_FK` (`numSeqCom`,`numArt`,`numSeqComR`,`numArtR`),
  KEY `FK_COMMENTPLUS` (`numSeqComR`,`numArtR`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `langue`
--

DROP TABLE IF EXISTS `langue`;
CREATE TABLE IF NOT EXISTS `langue` (
  `numLang` varchar(8) NOT NULL,
  `lib1Lang` varchar(30) DEFAULT NULL,
  `lib2Lang` varchar(60) DEFAULT NULL,
  `numPays` char(4) DEFAULT NULL,
  PRIMARY KEY (`numLang`),
  KEY `LANGUE_FK` (`numLang`),
  KEY `FK_ASSOCIATION_7` (`numPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `langue`
--

INSERT INTO `langue` (`numLang`, `lib1Lang`, `lib2Lang`, `numPays`) VALUES
('FRAN01', 'Français(e)', 'Langue française', 'FRAN');

-- --------------------------------------------------------

--
-- Structure de la table `likeart`
--

DROP TABLE IF EXISTS `likeart`;
CREATE TABLE IF NOT EXISTS `likeart` (
  `numMemb` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeA` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numArt`),
  KEY `LIKEART_FK` (`numMemb`,`numArt`),
  KEY `FK_LIKEART` (`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `likecom`
--

DROP TABLE IF EXISTS `likecom`;
CREATE TABLE IF NOT EXISTS `likecom` (
  `numMemb` int(10) NOT NULL,
  `numSeqCom` int(10) NOT NULL,
  `numArt` int(8) NOT NULL,
  `likeC` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`numMemb`,`numSeqCom`,`numArt`),
  KEY `LIKECOM_FK` (`numMemb`,`numSeqCom`,`numArt`),
  KEY `FK_LIKECOM` (`numSeqCom`,`numArt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `numMemb` int(10) NOT NULL AUTO_INCREMENT,
  `prenomMemb` varchar(70) NOT NULL,
  `nomMemb` varchar(70) NOT NULL,
  `pseudoMemb` varchar(70) NOT NULL,
  `passMemb` varchar(70) NOT NULL,
  `eMailMemb` varchar(100) NOT NULL,
  `dtCreaMemb` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `accordMemb` tinyint(1) DEFAULT '1',
  `confirmation_token` varchar(70) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(70) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL,
  `idStat` int(5) NOT NULL,
  PRIMARY KEY (`numMemb`),
  KEY `MEMBRE_FK` (`numMemb`),
  KEY `FK_ASSOCIATION_10` (`idStat`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`numMemb`, `prenomMemb`, `nomMemb`, `pseudoMemb`, `passMemb`, `eMailMemb`, `dtCreaMemb`, `accordMemb`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`, `idStat`) VALUES
(1, 'Admin', 'Administrateur', 'Admin01', 'AdM1n!;', 'admin@mysql.php', '2022-03-03 09:13:43', 1, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Membre', 'Connecte', 'Pseudo', 'C&euro;C1T&euro;sT', 'membre@connecte.com', '2022-03-05 00:21:47', 1, NULL, NULL, NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Structure de la table `motcle`
--

DROP TABLE IF EXISTS `motcle`;
CREATE TABLE IF NOT EXISTS `motcle` (
  `numMotCle` int(8) NOT NULL AUTO_INCREMENT,
  `libMotCle` varchar(60) NOT NULL,
  `numLang` varchar(8) NOT NULL,
  PRIMARY KEY (`numMotCle`),
  KEY `MOTCLE_FK` (`numMotCle`),
  KEY `FK_ASSOCIATION_5` (`numLang`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `motclearticle`
--

DROP TABLE IF EXISTS `motclearticle`;
CREATE TABLE IF NOT EXISTS `motclearticle` (
  `numArt` int(8) NOT NULL,
  `numMotCle` int(8) NOT NULL,
  PRIMARY KEY (`numArt`,`numMotCle`),
  KEY `MOTCLEARTICLE_FK` (`numArt`),
  KEY `MOTCLEARTICLE2_FK` (`numMotCle`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `numPays` char(4) NOT NULL,
  `cdPays` char(2) NOT NULL,
  `frPays` varchar(255) NOT NULL,
  `enPays` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`numPays`),
  KEY `PAYS_FK` (`numPays`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`numPays`, `cdPays`, `frPays`, `enPays`) VALUES
('AFGH', 'AF', 'Afghanistan', 'Afghanistan'),
('AFRI', 'ZA', 'Afrique du Sud', 'South Africa'),
('ALBA', 'AL', 'Albanie', 'Albania'),
('ALGE', 'DZ', 'Algérie', 'Algeria'),
('ALLE', 'DE', 'Allemagne', 'Germany'),
('ANDO', 'AD', 'Andorre', 'Andorra'),
('ANGL', 'GB', 'Royaume-Uni', 'United Kingdom'),
('ANGO', 'AO', 'Angola', 'Angola'),
('ANGU', 'AI', 'Anguilla', 'Anguilla'),
('ANTG', 'AG', 'Antigua-et-Barbuda', 'Antigua & Barbuda'),
('ANTI', 'AN', 'Antilles néerlandaises', 'Netherlands Antilles'),
('ARAB', 'SA', 'Arabie saoudite', 'Saudi Arabia'),
('ARGE', 'AR', 'Argentine', 'Argentina'),
('ARME', 'AM', 'Arménie', 'Armenia'),
('ARTA', 'AQ', 'Antarctique', 'Antarctica'),
('ARUB', 'AW', 'Aruba', 'Aruba'),
('AUST', 'AU', 'Australie', 'Australia'),
('AUTR', 'AT', 'Autriche', 'Austria'),
('AZER', 'AZ', 'Azerbaïdjan', 'Azerbaijan'),
('BAHA', 'BS', 'Bahamas', 'Bahamas, The'),
('BAHR', 'BH', 'Bahreïn', 'Bahrain'),
('BANG', 'BD', 'Bangladesh', 'Bangladesh'),
('BARB', 'BB', 'Barbade', 'Barbados'),
('BELA', 'PW', 'Belau', 'Palau'),
('BELG', 'BE', 'Belgique', 'Belgium'),
('BELI', 'BZ', 'Belize', 'Belize'),
('BENI', 'BJ', 'Bénin', 'Benin'),
('BERM', 'BM', 'Bermudes', 'Bermuda'),
('BHOU', 'BT', 'Bhoutan', 'Bhutan'),
('BIEL', 'BY', 'Biélorussie', 'Belarus'),
('BIRM', 'MM', 'Birmanie', 'Myanmar (ex-Burma)'),
('BOIN', 'IO', 'Territoire britannique de l Océan Indien', 'British Indian Ocean Territory'),
('BOLV', 'BO', 'Bolivie', 'Bolivia'),
('BOSN', 'BA', 'Bosnie-Herzégovine', 'Bosnia and Herzegovina'),
('BOTS', 'BW', 'Botswana', 'Botswana'),
('BOUV', 'BV', 'Ile Bouvet', 'Bouvet Island'),
('BRES', 'BR', 'Brésil', 'Brazil'),
('BRUN', 'BN', 'Brunei', 'Brunei Darussalam'),
('BULG', 'BG', 'Bulgarie', 'Bulgaria'),
('BURK', 'BF', 'Burkina Faso', 'Burkina Faso'),
('BURU', 'BI', 'Burundi', 'Burundi'),
('CAFR', 'CF', 'République centrafricaine', 'Central African Republic'),
('CAMB', 'KH', 'Cambodge', 'Cambodia'),
('CAME', 'CM', 'Cameroun', 'Cameroon'),
('CANA', 'CA', 'Canada', 'Canada'),
('CAYM', 'KY', 'Iles Cayman', 'Cayman Islands'),
('CHIL', 'CL', 'Chili', 'Chile'),
('CHIN', 'CN', 'Chine', 'China'),
('CHRI', 'CX', 'Ile Christmas', 'Christmas Island'),
('CHYP', 'CY', 'Chypre', 'Cyprus'),
('CNOR', 'KP', 'Corée du Nord', 'Korea, Demo. People s Rep. of'),
('COCO', 'CC', 'Iles des Cocos (Keeling)', 'Cocos (Keeling) Islands'),
('COLO', 'CO', 'Colombie', 'Colombia'),
('COMO', 'KM', 'Comores', 'Comoros'),
('CON1', 'CD', 'République démocratique du Congo', 'Congo, Democratic Rep. of the'),
('CON2', 'CG', 'Congo', 'Congo'),
('COOK', 'CK', 'Iles Cook', 'Cook Islands'),
('CROA', 'HR', 'Croatie', 'Croatia'),
('CSUD', 'KR', 'Corée du Sud', 'Korea, (South) Republic of'),
('CUBA', 'CU', 'Cuba', 'Cuba'),
('CVER', 'CV', 'Cap-Vert', 'Cape Verde'),
('DANE', 'DK', 'Danemark', 'Denmark'),
('DJIB', 'DJ', 'Djibouti', 'Djibouti'),
('DOM1', 'DM', 'Dominique', 'Dominica'),
('DOM2', 'DO', 'République dominicaine', 'Dominican Republic'),
('EGYP', 'EG', 'Égypte', 'Egypt'),
('EMIR', 'AE', 'Émirats arabes unis', 'United Arab Emirates'),
('EQUA', 'EC', 'Équateur', 'Ecuador'),
('ERYT', 'ER', 'Érythrée', 'Eritrea'),
('ESPA', 'ES', 'Espagne', 'Spain'),
('ESTO', 'EE', 'Estonie', 'Estonia'),
('ETHO', 'ET', 'Éthiopie', 'Ethiopia'),
('FALK', 'FK', 'Iles Falkland', 'Falkland Islands (Malvinas)'),
('FERO', 'FO', 'Iles Féroé', 'Faroe Islands'),
('FIDJ', 'FJ', 'Iles Fidji', 'Fiji'),
('FINL', 'FI', 'Finlande', 'Finland'),
('FRAN', 'FR', 'France', 'France'),
('GABO', 'GA', 'Gabon', 'Gabon'),
('GAMB', 'GM', 'Gambie', 'Gambia, the'),
('GANA', 'GH', 'Ghana', 'Ghana'),
('GEO1', 'GE', 'Géorgie', 'Georgia'),
('GEO2', 'GS', 'Iles Géorgie du Sud et Sandwich du Sud', 'S. Georgia and S. Sandwich Is.'),
('GIBR', 'GI', 'Gibraltar', 'Gibraltar'),
('GREC', 'GR', 'Grèce', 'Greece'),
('GREN', 'GD', 'Grenade', 'Grenada'),
('GROE', 'GL', 'Groenland', 'Greenland'),
('GUAD', 'GP', 'Guadeloupe', 'Guinea, Equatorial'),
('GUAM', 'GU', 'Guam', 'Guam'),
('GUAT', 'GT', 'Guatemala', 'Guatemala'),
('GUIB', 'GW', 'Guinée-Bissao', 'Guinea-Bissau'),
('GUIE', 'GQ', 'Guinée équatoriale', 'Equatorial Guinea'),
('GUIN', 'GN', 'Guinée', 'Guinea'),
('GUYA', 'GY', 'Guyana', 'Guyana'),
('GUYF', 'GF', 'Guyane française', 'Guiana, French'),
('HAIT', 'HT', 'Haïti', 'Haiti'),
('HEAR', 'HM', 'Iles Heard et McDonald', 'Heard and McDonald Islands'),
('HOND', 'HN', 'Honduras', 'Honduras'),
('HONG', 'HU', 'Hongrie', 'Hungary'),
('INDE', 'IN', 'Inde', 'India'),
('INDO', 'ID', 'Indonésie', 'Indonesia'),
('IRAN', 'IR', 'Iran', 'Iran, Islamic Republic of'),
('IRAQ', 'IQ', 'Iraq', 'Iraq'),
('IRLA', 'IE', 'Irlande', 'Ireland'),
('ISLA', 'IS', 'Islande', 'Iceland'),
('ISRA', 'IL', 'Israël', 'Israel'),
('ITAL', 'IT', 'Italie', 'Italy'),
('IVOI', 'CI', 'Côte d\'Ivoire', 'Ivory Coast (see Cote d\'Ivoire)'),
('JAMA', 'JM', 'Jamaïque', 'Jamaica'),
('JAPO', 'JP', 'Japon', 'Japan'),
('JORD', 'JO', 'Jordanie', 'Jordan'),
('KAZA', 'KZ', 'Kazakhstan', 'Kazakhstan'),
('KIRG', 'KG', 'Kirghizistan', 'Kyrgyzstan'),
('KIRI', 'KI', 'Kiribati', 'Kiribati'),
('KNYA', 'KE', 'Kenya', 'Kenya'),
('KONG', 'HK', 'Hong Kong', 'Hong Kong, (China)'),
('KWEI', 'KW', 'Koweït', 'Kuwait'),
('LAOS', 'LA', 'Laos', 'Lao People s Democratic Republic'),
('LEON', 'SL', 'Sierra Leone', 'Sierra Leone'),
('LESO', 'LS', 'Lesotho', 'Lesotho'),
('LETT', 'LV', 'Lettonie', 'Latvia'),
('LIBA', 'LB', 'Liban', 'Lebanon'),
('LIBE', 'LR', 'Liberia', 'Liberia'),
('LIBY', 'LY', 'Libye', 'Libyan Arab Jamahiriya'),
('LIEC', 'LI', 'Liechtenstein', 'Liechtenstein'),
('LITU', 'LT', 'Lituanie', 'Lithuania'),
('LUXE', 'LU', 'Luxembourg', 'Luxembourg'),
('MACA', 'MO', 'Macao', 'Macao, (China)'),
('MACE', 'MK', 'ex-République yougoslave de Macédoine', 'Macedonia, TFYR'),
('MADA', 'MG', 'Madagascar', 'Madagascar'),
('MALA', 'MY', 'Malaisie', 'Malaysia'),
('MALD', 'MV', 'Maldives', 'Maldives'),
('MALI', 'ML', 'Mali', 'Mali'),
('MALT', 'MT', 'Malte', 'Malta'),
('MALW', 'MW', 'Malawi', 'Malawi'),
('MARI', 'MP', 'Mariannes du Nord', 'Northern Mariana Islands'),
('MARO', 'MA', 'Maroc', 'Morocco'),
('MARS', 'MH', 'Iles Marshall', 'Marshall Islands'),
('MART', 'MQ', 'Martinique', 'Martinique'),
('MAUC', 'MU', 'Maurice', 'Mauritius'),
('MAUR', 'MR', 'Mauritanie', 'Mauritania'),
('MAYO', 'YT', 'Mayotte', 'Mayotte'),
('MEXI', 'MX', 'Mexique', 'Mexico'),
('MICR', 'FM', 'Micronésie', 'Micronesia, Federated States of'),
('MINE', 'UM', 'Iles mineures éloignées des États-Unis', 'US Minor Outlying Islands'),
('MOLD', 'MD', 'Moldavie', 'Moldova, Republic of'),
('MONA', 'MC', 'Monaco', 'Monaco'),
('MONG', 'MN', 'Mongolie', 'Mongolia'),
('MONS', 'MS', 'Montserrat', 'Montserrat'),
('MOZA', 'MZ', 'Mozambique', 'Mozambique'),
('NAMI', 'NA', 'Namibie', 'Namibia'),
('NAUR', 'NR', 'Nauru', 'Nauru'),
('NEPA', 'NP', 'Népal', 'Nepal'),
('NICA', 'NI', 'Nicaragua', 'Nicaragua'),
('NIEV', 'KN', 'Saint-Christophe-et-Niévès', 'Saint Kitts and Nevis'),
('NIGA', 'NG', 'Nigeria', 'Nigeria'),
('NIGE', 'NE', 'Niger', 'Niger'),
('NIOU', 'NU', 'Nioué', 'Niue'),
('NORF', 'NF', 'Ile Norfolk', 'Norfolk Island'),
('NORV', 'NO', 'Norvège', 'Norway'),
('NOUC', 'NC', 'Nouvelle-Calédonie', 'New Caledonia'),
('NOUZ', 'NZ', 'Nouvelle-Zélande', 'New Zealand'),
('OMAN', 'OM', 'Oman', 'Oman'),
('OUGA', 'UG', 'Ouganda', 'Uganda'),
('OUZE', 'UZ', 'Ouzbékistan', 'Uzbekistan'),
('PAKI', 'PK', 'Pakistan', 'Pakistan'),
('PANA', 'PA', 'Panama', 'Panama'),
('PAPU', 'PG', 'Papouasie-Nouvelle-Guinée', 'Papua New Guinea'),
('PARA', 'PY', 'Paraguay', 'Paraguay'),
('PBAS', 'NL', 'pays-Bas', 'Netherlands'),
('PERO', 'PE', 'Pérou', 'Peru'),
('PHIL', 'PH', 'Philippines', 'Philippines'),
('PITC', 'PN', 'Iles Pitcairn', 'Pitcairn Island'),
('POLO', 'PL', 'Pologne', 'Poland'),
('POLY', 'PF', 'Polynésie française', 'French Polynesia'),
('PORT', 'PT', 'Portugal', 'Portugal'),
('QATA', 'QA', 'Qatar', 'Qatar'),
('REUN', 'RE', 'Réunion', 'Reunion'),
('RICA', 'CR', 'Costa Rica', 'Costa Rica'),
('RICO', 'PR', 'Porto Rico', 'Puerto Rico'),
('ROUM', 'RO', 'Roumanie', 'Romania'),
('RUSS', 'RU', 'Russie', 'Russia (Russian Federation)'),
('RWAN', 'RW', 'Rwanda', 'Rwanda'),
('SAHA', 'EH', 'Sahara occidental', 'Western Sahara'),
('SALO', 'SB', 'Iles Salomon', 'Solomon Islands'),
('SALV', 'SV', 'Salvador', 'El Salvador'),
('SAMA', 'AS', 'Samoa américaines', 'American Samoa'),
('SAMO', 'WS', 'Samoa', 'Samoa'),
('SENE', 'SN', 'Sénégal', 'Senegal'),
('SEYC', 'SC', 'Seychelles', 'Seychelles'),
('SING', 'SG', 'Singapour', 'Singapore'),
('SLN_', 'SH', 'Sainte-Hélène', 'Saint Helena'),
('SLOQ', 'SK', 'Slovaquie', 'Slovakia'),
('SLOV', 'SI', 'Slovénie', 'Slovenia'),
('SLUC', 'LC', 'Sainte-Lucie', 'Saint Lucia'),
('SMAR', 'SM', 'Saint-Marin', 'San Marino'),
('SOMA', 'SO', 'Somalie', 'Somalia'),
('SOUD', 'SD', 'Soudan', 'Sudan'),
('SPIE', 'PM', 'Saint-Pierre-et-Miquelon', 'Saint Pierre and Miquelon'),
('SRIL', 'LK', 'Sri Lanka', 'Sri Lanka (ex-Ceilan)'),
('SSIE', 'VA', 'Saint-Siège ', 'Vatican City State (Holy See)'),
('SUED', 'SE', 'Suède', 'Sweden'),
('SUIS', 'CH', 'Suisse', 'Switzerland'),
('SURI', 'SR', 'Suriname', 'Suriname'),
('SVAL', 'SJ', 'Iles Svalbard et Jan Mayen', 'Svalbard and Jan Mayen Islands'),
('SVIN', 'VC', 'Saint-Vincent-et-les-Grenadines', 'Saint Vincent and the Grenadines'),
('SWAZ', 'SZ', 'Swaziland', 'Swaziland'),
('SYRY', 'SY', 'Syrie', 'Syrian Arab Republic'),
('TADJ', 'TJ', 'Tadjikistan', 'Tajikistan'),
('TAIW', 'TW', 'Taïwan', 'Taiwan'),
('TANZ', 'TZ', 'Tanzanie', 'Tanzania, United Republic of'),
('TCHA', 'TD', 'Tchad', 'Chad'),
('TCHE', 'CZ', 'République tchèque', 'Czech Republic'),
('TERR', 'TF', 'Terres australes françaises', 'French Southern Territories - TF'),
('THAI', 'TH', 'Thaïlande', 'Thailand'),
('TIMO', 'TL', 'Timor Oriental', 'Timor-Leste (East Timor)'),
('TOBA', 'TT', 'Trinité-et-Tobago', 'Trinidad & Tobago'),
('TOGO', 'TG', 'Togo', 'Togo'),
('TOKE', 'TK', 'Tokélaou', 'Tokelau'),
('TOME', 'ST', 'Sao Tomé-et-Principe', 'Sao Tome and Principe'),
('TONG', 'TO', 'Tonga', 'Tonga'),
('TUNI', 'TN', 'Tunisie', 'Tunisia'),
('TUR1', 'TC', 'Iles Turks-et-Caicos', 'Turks and Caicos Islands'),
('TUR2', 'TM', 'Turkménistan', 'Turkmenistan'),
('TURQ', 'TR', 'Turquie', 'Turkey'),
('TUVA', 'TV', 'Tuvalu', 'Tuvalu'),
('UKRA', 'UA', 'Ukraine', 'Ukraine'),
('URUG', 'UY', 'Uruguay', 'Uruguay'),
('USA_', 'US', 'États-Unis', 'United States'),
('VANU', 'VU', 'Vanuatu', 'Vanuatu'),
('VENE', 'VE', 'Venezuela', 'Venezuela'),
('VIEA', 'VI', 'Iles Vierges américaines', 'Virgin Islands, U.S.'),
('VIEB', 'VG', 'Iles Vierges britanniques', 'Virgin Islands, British'),
('VIET', 'VN', 'Viêt Nam', 'Viet Nam'),
('WALI', 'WF', 'Wallis-et-Futuna', 'Wallis and Futuna'),
('YEME', 'YE', 'Yémen', 'Yemen'),
('YOUG', 'YU', 'Yougoslavie', 'Saint Pierre and Miquelon'),
('ZAMB', 'ZM', 'Zambie', 'Zambia'),
('ZIMB', 'ZW', 'Zimbabwe', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `idStat` int(5) NOT NULL AUTO_INCREMENT,
  `libStat` varchar(25) NOT NULL,
  PRIMARY KEY (`idStat`),
  KEY `STATUT_FK` (`idStat`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `statut`
--

INSERT INTO `statut` (`idStat`, `libStat`) VALUES
(1, 'Super Administrateur'),
(2, 'Autre'),
(3, 'Membre niveau 1');

-- --------------------------------------------------------

--
-- Structure de la table `thematique`
--

DROP TABLE IF EXISTS `thematique`;
CREATE TABLE IF NOT EXISTS `thematique` (
  `numThem` varchar(8) NOT NULL,
  `libThem` varchar(60) NOT NULL,
  `numLang` varchar(8) NOT NULL,
  PRIMARY KEY (`numThem`),
  KEY `THEMATIQUE_FK` (`numThem`),
  KEY `FK_ASSOCIATION_4` (`numLang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `thematique`
--

INSERT INTO `thematique` (`numThem`, `libThem`, `numLang`) VALUES
('THEM0101', 'L\'événement', 'FRAN01'),
('THEM0102', 'L\'acteur-clé', 'FRAN01'),
('THEM0104', 'L\'insolite / le clin d\'oeil', 'FRAN01');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `pseudoUser` varchar(60) NOT NULL,
  `passUser` varchar(60) NOT NULL,
  `nomUser` varchar(60) DEFAULT NULL,
  `prenomUser` varchar(60) DEFAULT NULL,
  `eMailUser` varchar(70) NOT NULL,
  `confirmation_token` varchar(70) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(70) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `remember_token` varchar(250) DEFAULT NULL,
  `idStat` int(5) NOT NULL,
  PRIMARY KEY (`pseudoUser`,`passUser`),
  KEY `USER_FK` (`pseudoUser`,`passUser`),
  KEY `FK_ASSOCIATION_6` (`idStat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`pseudoUser`, `passUser`, `nomUser`, `prenomUser`, `eMailUser`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`, `remember_token`, `idStat`) VALUES
('admin', 'admin', 'Star', 'Joe', 'JoeStar@free.fr', NULL, NULL, NULL, NULL, NULL, 1);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `angle`
--
ALTER TABLE `angle`
  ADD CONSTRAINT `FK_ASSOCIATION_3` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `FK_ASSOCIATION_1` FOREIGN KEY (`numAngl`) REFERENCES `angle` (`numAngl`),
  ADD CONSTRAINT `FK_ASSOCIATION_2` FOREIGN KEY (`numThem`) REFERENCES `thematique` (`numThem`);

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_ASSOCIATION_8` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`),
  ADD CONSTRAINT `FK_ASSOCIATION_9` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`);

--
-- Contraintes pour la table `commentplus`
--
ALTER TABLE `commentplus`
  ADD CONSTRAINT `FK_COMMENTPLUS` FOREIGN KEY (`numSeqComR`,`numArtR`) REFERENCES `comment` (`numSeqCom`, `numArt`),
  ADD CONSTRAINT `FK_COMMENTPLUS2` FOREIGN KEY (`numSeqCom`,`numArt`) REFERENCES `comment` (`numSeqCom`, `numArt`);

--
-- Contraintes pour la table `langue`
--
ALTER TABLE `langue`
  ADD CONSTRAINT `FK_ASSOCIATION_7` FOREIGN KEY (`numPays`) REFERENCES `pays` (`numPays`);

--
-- Contraintes pour la table `likeart`
--
ALTER TABLE `likeart`
  ADD CONSTRAINT `FK_LIKEART` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`),
  ADD CONSTRAINT `FK_LIKEART2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`);

--
-- Contraintes pour la table `likecom`
--
ALTER TABLE `likecom`
  ADD CONSTRAINT `FK_LIKECOM` FOREIGN KEY (`numSeqCom`,`numArt`) REFERENCES `comment` (`numSeqCom`, `numArt`),
  ADD CONSTRAINT `FK_LIKECOM2` FOREIGN KEY (`numMemb`) REFERENCES `membre` (`numMemb`);

--
-- Contraintes pour la table `membre`
--
ALTER TABLE `membre`
  ADD CONSTRAINT `FK_ASSOCIATION_10` FOREIGN KEY (`idStat`) REFERENCES `statut` (`idStat`);

--
-- Contraintes pour la table `motcle`
--
ALTER TABLE `motcle`
  ADD CONSTRAINT `FK_ASSOCIATION_5` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `motclearticle`
--
ALTER TABLE `motclearticle`
  ADD CONSTRAINT `FK_MotCleArt1` FOREIGN KEY (`numMotCle`) REFERENCES `motcle` (`numMotCle`),
  ADD CONSTRAINT `FK_MotCleArt2` FOREIGN KEY (`numArt`) REFERENCES `article` (`numArt`);

--
-- Contraintes pour la table `thematique`
--
ALTER TABLE `thematique`
  ADD CONSTRAINT `FK_ASSOCIATION_4` FOREIGN KEY (`numLang`) REFERENCES `langue` (`numLang`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_ASSOCIATION_6` FOREIGN KEY (`idStat`) REFERENCES `statut` (`idStat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
