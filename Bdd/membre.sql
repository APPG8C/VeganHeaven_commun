-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 11 Mai 2015 à 16:37
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `membre`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE IF NOT EXISTS `annonces` (
  `idAnnonces` int(5) NOT NULL AUTO_INCREMENT,
  `Members_idMembers` int(11) NOT NULL,
  `Annonceur` text NOT NULL,
  `Transaction` text NOT NULL,
  `prix_offre` int(11) NOT NULL,
  `lieu_transaction` text NOT NULL,
  `departement` text NOT NULL,
  `code_postal` int(6) NOT NULL,
  `Produit` text NOT NULL,
  `Date` date NOT NULL,
  `Description` text NOT NULL,
  `Categorie` text NOT NULL,
  `Url_Image` varchar(255) NOT NULL,
  `DatePublication` datetime NOT NULL,
  `Effectuee` tinyint(1) NOT NULL,
  PRIMARY KEY (`idAnnonces`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`idAnnonces`, `Members_idMembers`, `Annonceur`, `Transaction`, `prix_offre`, `lieu_transaction`, `departement`, `code_postal`, `Produit`, `Date`, `Description`, `Categorie`, `Url_Image`, `DatePublication`, `Effectuee`) VALUES
(1, 74, 'Cédric', 'Echange', 6, 'Paris', 'Ile de France', 3215, 'Oranges', '1994-07-04', 'L''orange est, comme son nom l''indique, de couleur orange. Elle possède une peau épaisse et assez rugueuse. Elle se découpe en quartiers comme sa cousine la mandarine. L''orange est un fruit juteux, sucré, excitant et il contient de la vitamine C. On utilise ce fruit pour les salades de fruits, les confitures, ou pour consommer son jus.\n\nLes oranges sanguines tirent leur nom de la couleur totalement ou partiellement rouge de leur chair.Cette coloration est due à la présence d''anthocyane, dont la synthèse démarre chez certaines espèces quand elles subissent un coup de froid. Les anthocyanes de l''orange sont à l''origine bleues mais virent au rouge en présence de l''acidité de l''orange.', 'fruit', 'orange.jpg', '2015-04-24 12:08:44', 0),
(2, 73, 'Henry', 'Echange', 6, 'Paris', '06', 6150, 'kiwi', '0000-00-00', 'Les kiwis sont des fruits de plusieurs espèces de lianes du genre Actinidia, famille des Actinidiaceae. Ils sont originaires de Chine, notamment de la province de Shaanxi. On en trouve par ailleurs dans des climats dits montagnards tropicaux. En France, les kiwis de l''Adour disposent d''une IGP et d''un label rouge.\r\nLe kiwi est une source de vitamine C, mais aussi de vitamine A et E, de calcium, de fer et d''acide folique.', 'fruit', 'Kiwi.jpg', '2015-04-25 12:08:44', 0),
(49, 74, 'Cédric', 'Echange', 80, '16 bis ave font de veyre', '06', 6150, 'Poire', '2015-05-02', 'La poire est le fruit du poirier (Pyrus communis L.), arbre de la famille des Rosaceae, sous-famille des Maloideae, du genre Pyrus. Elle est communément verte, jaune ou rouge, avec quelques curiosités comme la très ancienne poire noire de Worcester.\n\nLa culture du poirier pour la production de fruits daterait de la Préhistoire, mais c''est à l''époque moderne, en Europe, que le fruit a été amélioré sous la forme que nous lui connaissons.', 'fruit', 'Poires.jpg', '2015-05-02 19:57:38', 0),
(50, 74, 'Cédric', 'Demande', 10, '16 bis ave font de veyre', '06', 6150, 'Abricot', '2015-06-05', 'C''est un fruit charnu, une drupe, de forme arrondie, possédant un noyau dur contenant une seule grosse graine, ou amande.\n\nLa chair est sucrée, peu juteuse, jaune orangé et ferme — la teneur en carotène ou provitamine A est élevée, c’est elle qui donne la couleur orangée et l’abricot est riche en pectines qui se gonflent facilement d’eau et qui lui confèrent son côté moelleux. L''abricot se sépare aisément en suivant le sillon médian.\n\nLa peau veloutée, dont la couleur peut aller du jaune au rouge, est parfois piquetée de « taches de rousseur » et se mange. La couleur rouge n’est pas gage de maturité (le degré de maturité est apprécié par le parfum et la souplesse du fruit) et l''abricot mûrit après sa cueillette, il est climactérique.', 'fruit', '6a00d8341d1d7953ef0115710cd61e970b-800wi.jpg', '2015-05-05 12:07:48', 0),
(73, 74, 'Cédric', 'Demande', 10, '31-29 rue victor Hugo', '92', 92130, 'Aubergine', '2015-02-01', 'La plante, à port dressé, atteint 50 cm à 1,2 m de haut. Les fleurs, de couleur blanche ou violette, solitaires.', 'fruit', 'Aubergine.jpg', '2015-05-05 14:56:18', 0),
(75, 74, 'cedric', 'Vente', 30, '31-29 rue victor Hugo', '06', 92130, 'Ananas', '2016-01-01', '', 'fruit', 'ananas.jpg', '2015-05-08 01:03:17', 0),
(76, 74, 'cedric', 'Echange', 40, '16 bis ave font de veyre', '06', 6150, 'Mandarine', '2016-03-02', 'La mandarine est un agrume. C’est le fruit du mandarinier, un arbre de la famille des Rutacées.\r\nLe fruit d’un diamètre de 5 à 8 cm est sphérique et légèrement aplati. Sa chair, sucrée et parfumée, est l’une des moins acides parmi les agrumes, mais elle a de nombreux pépins. Son écorce est fine, d’une couleur rouge-orangé.\r\n\r\nUne mandarine se divise généralement en une dizaine de quartiers. Un quartier est parfois appelé un éclat, un coussin, une cuisse ou, dans le Périgord, une « perne ».', 'fruit', 'mandarine.jpg', '2015-05-11 14:10:13', 0),
(80, 74, 'cedric', 'Demande', 35, '16 bis ave font de veyre', '06', 6150, 'Mangue', '2016-03-02', 'C''est une drupe, sa chair adhère à un noyau large, plat et glissant. Elle peut être ronde, ovale ou réniforme, et présente une écorce pouvant être de couleur jaune, verte ou rouge, qu''il est nécessaire d''enlever, car elle contient des substances irritantes et n''est donc pas comestible.\r\n\r\nSa chair est jaune foncé, onctueuse et sucrée, avec un goût de pêche et de fleur. Selon les variétés ou lorsque le fruit est trop mûr, la chair devient parfois filandreuse.fruit du mandarinier, un arbre de la famille des Rutacées.\r\n', 'fruit', 'la-mangue1.jpg', '2015-05-11 14:17:13', 0);

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE IF NOT EXISTS `avis` (
  `idAvis` int(11) NOT NULL AUTO_INCREMENT,
  `contenu` longtext NOT NULL,
  `note` int(11) NOT NULL,
  `idMembre_note` int(11) NOT NULL,
  `idEvaluateur` int(11) NOT NULL,
  `DatePublicationAvis` datetime NOT NULL,
  PRIMARY KEY (`idAvis`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `avis`
--

INSERT INTO `avis` (`idAvis`, `contenu`, `note`, `idMembre_note`, `idEvaluateur`, `DatePublicationAvis`) VALUES
(3, 'Henry prend grandement soin de ses produits d''une grande fraîcheur, c''est avec plaisir que j''échange mes produits avec les siens.', 4, 73, 74, '2015-05-06 13:26:18'),
(4, 'Cédric a un potager pourri, membre à éviter comme la peste...', 1, 74, 73, '2015-05-06 14:37:46'),
(5, 'Malgré une bonne volonté apparente, la qualité de ses produits est médiocre', 2, 74, 73, '2015-05-06 14:39:21'),
(6, 'Kiwi manquant de fermeté', 2, 73, 74, '2015-05-06 14:50:23'),
(10, 'Photo de profil pourri ', 5, 77, 74, '2015-05-11 13:21:59'),
(13, 'N''importe quoi', 1, 73, 74, '2015-05-11 13:46:50');

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE IF NOT EXISTS `panier` (
  `idPanier` int(11) NOT NULL AUTO_INCREMENT,
  `idAnnonces` int(11) NOT NULL,
  `idMember` int(11) NOT NULL,
  `Titre` text NOT NULL,
  `Transaction` text NOT NULL,
  `prix_offre` int(11) NOT NULL,
  `Peremtion` date NOT NULL,
  `DatePublication` datetime NOT NULL,
  `lieu_transaction` text NOT NULL,
  `TelephoneMobile` int(10) NOT NULL,
  `TelephoneFixe` int(10) NOT NULL,
  `AdresseEmail` varchar(255) NOT NULL,
  PRIMARY KEY (`idPanier`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=63 ;

--
-- Contenu de la table `panier`
--

INSERT INTO `panier` (`idPanier`, `idAnnonces`, `idMember`, `Titre`, `Transaction`, `prix_offre`, `Peremtion`, `DatePublication`, `lieu_transaction`, `TelephoneMobile`, `TelephoneFixe`, `AdresseEmail`) VALUES
(49, 2, 74, 'kiwi', 'Echange', 6, '0000-00-00', '2015-04-25 12:08:44', 'Paris', 612345987, 140440225, 'cedlautard@gmail.com'),
(57, 75, 73, 'Ananas', 'Vente', 30, '2016-01-01', '2015-05-08 01:03:17', '31-29 rue victor Hugo', 632015963, 123456789, 'cedlautard@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Age` int(3) NOT NULL,
  `TelephoneMobile` varchar(10) NOT NULL,
  `TelephoneFixe` varchar(10) NOT NULL,
  `AdresseEmail` varchar(255) NOT NULL,
  `Adresse` text NOT NULL,
  `PhotoDeProfil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=83 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `Age`, `TelephoneMobile`, `TelephoneFixe`, `AdresseEmail`, `Adresse`, `PhotoDeProfil`) VALUES
(82, 'Albert', '$2y$10$6KPdLGDBMmfm79KcYBqQVervwj7cIJJJSjk5Ia03mk0X0Lv8FG2Ya', 20, '0632015963', '0123456789', 'cedlautard@gmail.com', '29-31 rue Victor hugo', 'IMG_0109.JPG'),
(74, 'Cédric', '$2y$10$fAj7X1MfPFzdIlOl1/dAOOm5jqpeSjObCs4.iJs98jMVGxH3cz77C', 4, '0632015963', '0123456789', 'cedlautard@gmail.com', '', 'photo_id.JPG'),
(76, 'kikos', '$2y$10$TEXIxCHDdcZ3.PNT6Qx4qu0zMd/Z.Pir.RZjLaYsnS/Ev/Rqfr8hq', 16, '0134657834', '0134657834', 'lautard@gmail.com', '', 'IMG_0223.JPG'),
(77, 'lau', '$2y$10$BJz/dCZJr.6OsFV9HX5lHe9sIYZI2l3OLc2U4pXuwj/iY1w2USfY.', 1994, '0684563433', '0452235698', 'lautard@gmail.com', '', 'IMG_0213.JPG'),
(73, 'Henry', '$2y$10$IE/873isl5Slz9A5XPSWheJZJwW0EfbpLFwts4PBkpJJdZrFWv3Hu', 23, '0612345987', '0140440225', 'cedlautard@gmail.com', '', 'thierryhenry.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
