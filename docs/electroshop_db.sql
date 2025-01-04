-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 06:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electroshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorie`
--

CREATE TABLE `categorie` (
  `idCategorie` int(25) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nom`) VALUES
(1, 'Informatique'),
(2, 'Homme'),
(3, 'Femme'),
(4, 'Maison'),
(5, 'Bricolage'),
(6, 'Cuisine'),
(7, 'Accessoires'),
(8, 'Climatisation'),
(9, 'Téléviseurs'),
(10, 'Montres');

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `idCommande` int(11) NOT NULL,
  `idClient` int(11) DEFAULT NULL,
  `dateCommande` date NOT NULL,
  `datePaiement` date DEFAULT NULL,
  `modePaiement` varchar(25) DEFAULT NULL CHECK (`modePaiement` in ('En ligne','A la livraison')),
  `statusCommande` enum('En attente','Traitée','Livrée','Annulée') DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commande`
--

INSERT INTO `commande` (`idCommande`, `idClient`, `dateCommande`, `datePaiement`, `modePaiement`, `statusCommande`, `total`) VALUES
(17, 7, '2023-12-06', NULL, 'A la livraison', 'Livrée', 24456),
(20, 7, '2023-12-06', NULL, 'A la livraison', 'Livrée', 5499),
(21, 7, '2023-12-06', NULL, 'A la livraison', 'Livrée', 6780),
(22, 7, '2023-12-06', NULL, 'A la livraison', 'Livrée', 6780),
(23, 7, '2023-12-06', NULL, 'A la livraison', 'Livrée', 12498),
(24, 7, '2024-01-05', NULL, 'A la livraison', 'Annulée', 1599),
(25, 7, '2024-01-05', NULL, 'A la livraison', 'Annulée', 7999),
(26, 7, '2024-01-11', NULL, 'A la livraison', 'Annulée', 14297),
(27, 7, '2024-01-12', NULL, 'A la livraison', 'En attente', 7999),
(28, 7, '2024-01-12', NULL, 'A la livraison', 'En attente', 128823);

-- --------------------------------------------------------

--
-- Table structure for table `commentaire`
--

CREATE TABLE `commentaire` (
  `idCommentaire` int(11) NOT NULL,
  `idCompte` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `Message` text DEFAULT NULL,
  `Note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commentaire`
--

INSERT INTO `commentaire` (`idCommentaire`, `idCompte`, `idProduit`, `Message`, `Note`) VALUES
(5, 7, 54, 'Ce produit est très bien', 3),
(8, 7, 53, 'Qualité très très bas!! j', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `idCompte` int(25) NOT NULL,
  `cin` varchar(25) DEFAULT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `motDepasse` varchar(25) DEFAULT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `telephone` varchar(25) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `compte`
--

INSERT INTO `compte` (`idCompte`, `cin`, `nom`, `prenom`, `email`, `motDepasse`, `adresse`, `telephone`, `admin`) VALUES
(1, '', '', '', 'agent@electroshop.com', 'admin123', '', '', 1),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, 'EL567', 'ADDOU', 'Malika', 'addou@gmail.com', '2023', 'Casa', '087988562', 0),
(9, NULL, 'Ladnany', 'Ali', 'ali@gmail.com', '2012', 'casa', '060006', 0),
(10, NULL, 'SAMI', 'Ayoub', 'ayoub@gmail.com', '2002', 'Marrakech', '0600030388', 0);

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `idProduit` int(25) NOT NULL,
  `idCompte` int(25) NOT NULL,
  `quantite` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `idProduit` int(25) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `prix` int(25) DEFAULT NULL,
  `stock` int(25) DEFAULT NULL,
  `idCategorie` int(25) DEFAULT NULL,
  `codeBare` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`idProduit`, `nom`, `description`, `prix`, `stock`, `idCategorie`, `codeBare`) VALUES
(48, 'HP 6E1P5', 'Pc portable HP 6E1P5', 7999, 34, 9, 'PC1'),
(49, 'BOSCH SMS45DI10Q', 'Lave-vaisselle pose libre BOSCH SMS45DI10Q', 5599, 23, 6, 'LAVE2'),
(52, 'BEKO RDNE49X NF480LT INOX', 'BEKO RDNE49X DOUBLE DOOR NF480LT INOX A+', 8699, 23, 6, 'CONG1'),
(53, 'KARCHER K5 COMPACT EU', 'Nettoyeur à vapeur KARCHER K5 COMPACT EU', 3999, 178, 4, 'NETT1'),
(54, 'iPhone 13 Pro Max', 'iPhone 13 Pro Max new serie', 12458, 23, 1, 'IPHON1'),
(55, 'LG LAVE ', 'LG LAVE LINGE/LAVANTE SECHANTE/12/8KG', 6780, 34, 4, 'LAVE3'),
(56, 'ROWENTA SECHE CHEVEUX ', 'ROWENTA SECHE CHEVEUX MAESTR ULTIMA CV9920F', 1599, 21, 3, 'SECHE'),
(57, 'BOSCH LV SERIE 2 ', 'BOSCH LV SERIE 2 SMS25AB00G 60CM NOIR', 4499, 26, 4, 'LAVE1'),
(58, 'Montre intelligente Vital', 'Montre intelligente Vital Plus', 1000, 19, 7, 'MONT1'),
(59, 'AEG MIXEUR PLONG ', 'AEG MIXEUR PLONG 6000 SERIES K6HB1-52GG', 799, 47, 6, 'MIXE1'),
(60, 'MOULINEX BLENDER', 'MOULINEX BLENDER LM458110 FORCE XXL', 599, 63, 6, 'BLEN1'),
(65, 'Hachoir JDF 67 LAVA', 'Hachoir JDF 67 LAVA', 540, 12, 6, 'HASH1'),
(66, 'Téléviseur Crystal ', 'Téléviseur Crystal ', 4494, 27, 9, 'TELE7'),
(67, 'Tondeuse', 'Tondeuse pour les hommes LYTY 6773 ', 384, 45, 2, 'TOND672'),
(68, 'SAMSUNG LED ', 'SAMSUNG LED QA65QN700BUXMV 8K', 26999, 34, 9, 'TELE1'),
(69, 'LG 65CS3VA', 'Reference fournisseur	65CS3VA ,Taille d\'écran	65, Type d\'ecran	FLA, Type du rectroeclairage OLED, Norme hd : UHD (4K)\r\n', 21999, 45, 9, 'TELE8'),
(70, 'SIERA SP9605TH', 'Cuisinière 5 feux', 5079, 16, 6, 'CUIS12'),
(71, 'MEGA LIFE CLIM 9 ', 'Climatiseur MEGA LIFE CLIM 9 NEBULA ML-FMT1H09A4-N+', 2999, 65, 8, 'CLIM12'),
(72, 'ELEXIA CONVECTEUR', 'Convecteur ELEXIA CONVECTEUR ELX-COH-811 2000W', 349, 34, 8, 'CONV1'),
(73, 'JATA CONVECTEUR', 'Convecteur JATA CONVECTEUR TC92 CERAMIC', 549, 56, 8, 'CONV2'),
(75, 'HP SPROCKET', 'Imprimante photo HP SPROCKET', 499, 31, 1, 'IMP1');

-- --------------------------------------------------------

--
-- Table structure for table `produit_commande`
--

CREATE TABLE `produit_commande` (
  `idCommande` int(11) NOT NULL,
  `idProduit` int(11) NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produit_commande`
--

INSERT INTO `produit_commande` (`idCommande`, `idProduit`, `quantite`) VALUES
(17, 48, 1),
(17, 53, 1),
(17, 54, 1),
(20, 57, 1),
(20, 58, 1),
(21, 55, 1),
(22, 55, 1),
(23, 48, 1),
(23, 57, 1),
(24, 56, 1),
(25, 48, 1),
(26, 48, 1),
(26, 57, 1),
(26, 58, 1),
(26, 59, 1),
(27, 48, 1),
(28, 48, 4),
(28, 49, 1),
(28, 52, 3),
(28, 53, 3),
(28, 54, 1),
(28, 55, 1),
(28, 57, 1),
(28, 58, 1),
(28, 59, 1),
(28, 60, 1),
(28, 68, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCategorie`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idCommande`);

--
-- Indexes for table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`idCommentaire`),
  ADD KEY `commentaire_ibfk_1` (`idCompte`),
  ADD KEY `commentaire_ibfk_2` (`idProduit`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`idCompte`);

--
-- Indexes for table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`idProduit`,`idCompte`),
  ADD KEY `idCompte_Compte` (`idCompte`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`idProduit`),
  ADD KEY `FK_Produit_idCategorie_Categorie` (`idCategorie`);

--
-- Indexes for table `produit_commande`
--
ALTER TABLE `produit_commande`
  ADD PRIMARY KEY (`idCommande`,`idProduit`),
  ADD KEY `idProduit` (`idProduit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCategorie` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `idCommande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `idCommentaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `idCompte` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `idProduit` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `panier`
--
ALTER TABLE `panier`
  ADD CONSTRAINT `panier_ibfk_1` FOREIGN KEY (`idCompte`) REFERENCES `compte` (`idCompte`),
  ADD CONSTRAINT `panier_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`),
  ADD CONSTRAINT `panier_ibfk_3` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);

--
-- Constraints for table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK_Produit_idCategorie_Categorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Constraints for table `produit_commande`
--
ALTER TABLE `produit_commande`
  ADD CONSTRAINT `produit_commande_ibfk_1` FOREIGN KEY (`idCommande`) REFERENCES `commande` (`idCommande`),
  ADD CONSTRAINT `produit_commande_ibfk_2` FOREIGN KEY (`idProduit`) REFERENCES `produit` (`idProduit`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
