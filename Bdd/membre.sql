-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 25 Avril 2015 à 16:27
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
  `Transaction` text NOT NULL,
  `prix_offre` int(11) NOT NULL,
  `lieu_transaction` text NOT NULL,
  `departement` text NOT NULL,
  `code_postal` int(6) NOT NULL,
  `Produit` text NOT NULL,
  `Date` date NOT NULL,
  `Description` longtext NOT NULL,
  `Categorie` text NOT NULL,
  `Url_Image` varchar(255) NOT NULL,
  `DatePublication` datetime NOT NULL,
  PRIMARY KEY (`idAnnonces`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `annonces`
--

INSERT INTO `annonces` (`idAnnonces`, `Members_idMembers`, `Transaction`, `prix_offre`, `lieu_transaction`, `departement`, `code_postal`, `Produit`, `Date`, `Description`, `Categorie`, `Url_Image`, `DatePublication`) VALUES
(1, 74, 'Echange', 6, 'Paris', 'Ile de France', 3215, 'Oranges', '1994-07-04', 'L''orange est, comme son nom l''indique, de couleur orange. Elle possède une peau épaisse et assez rugueuse. Elle se découpe en quartiers comme sa cousine la mandarine. L''orange est un fruit juteux, sucré, excitant et il contient de la vitamine C. On utilise ce fruit pour les salades de fruits, les confitures, ou pour consommer son jus.\n\nLes oranges sanguines tirent leur nom de la couleur totalement ou partiellement rouge de leur chair.Cette coloration est due à la présence d''anthocyane, dont la synthèse démarre chez certaines espèces quand elles subissent un coup de froid. Les anthocyanes de l''orange sont à l''origine bleues mais virent au rouge en présence de l''acidité de l''orange.', 'fruit', 'orange.jpg', '2015-04-24 12:08:44'),
(2, 74, 'vente', 1, 'gfnndfn', 'gfc,,gfd', 3215, 'fraise', '1994-07-04', ' vdgser', 'legume', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `DateDeNaissance` varchar(8) NOT NULL,
  `TelephoneMobile` varchar(10) NOT NULL,
  `TelephoneFixe` varchar(10) NOT NULL,
  `AdresseEmail` varchar(255) NOT NULL,
  `PhotoDeProfil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `DateDeNaissance`, `TelephoneMobile`, `TelephoneFixe`, `AdresseEmail`, `PhotoDeProfil`) VALUES
(74, 'cedric', '$2y$10$fAj7X1MfPFzdIlOl1/dAOOm5jqpeSjObCs4.iJs98jMVGxH3cz77C', '04/07/94', '0625403208', '0134657834', 'lautard@gmail.com', 'IMG_0113.JPG'),
(75, 'iyad', '$2y$10$rleRX7ZPtFLKJGb4Ga8ZMO7qBAif5gqTde.HWMWIsLRbBQXfkyD7C', '04/07/94', '0625403208', '0134657834', 'lautard@gmail.com', 'IMG_0177.JPG'),
(76, 'kikos', '$2y$10$TEXIxCHDdcZ3.PNT6Qx4qu0zMd/Z.Pir.RZjLaYsnS/Ev/Rqfr8hq', '16/04/19', '0134657834', '0134657834', 'lautard@gmail.com', 'IMG_0223.JPG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
