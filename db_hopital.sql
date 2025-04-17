-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 avr. 2025 à 14:59
-- Version du serveur : 5.6.17
-- Version de PHP : 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_hopital`
--

-- --------------------------------------------------------

--
-- Structure de la table `analyses`
--

CREATE TABLE `analyses` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_analyse` datetime NOT NULL,
  `type_analyse` varchar(100) NOT NULL,
  `resultat` text,
  `statut` enum('en_attente','terminé') DEFAULT 'en_attente',
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `consultations`
--

CREATE TABLE `consultations` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  `date_consultation` datetime NOT NULL,
  `diagnostic` text,
  `traitement` text,
  `service_id` int(11) NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `details_ordonnances`
--

CREATE TABLE `details_ordonnances` (
  `id` int(11) NOT NULL,
  `ordonnance_id` int(11) NOT NULL,
  `medicament_id` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `factures`
--

CREATE TABLE `factures` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_facture` datetime NOT NULL,
  `montant` decimal(10,2) NOT NULL,
  `statut` enum('payé','impayé') DEFAULT 'impayé',
  `details` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lits`
--

CREATE TABLE `lits` (
  `id` int(11) NOT NULL,
  `numero_lit` varchar(20) NOT NULL,
  `service_id` int(11) NOT NULL,
  `statut` enum('disponible','occupé') DEFAULT 'disponible',
  `patient_id` int(11) DEFAULT NULL,
  `date_occupation` datetime DEFAULT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medecins`
--

CREATE TABLE `medecins` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `specialite` varchar(100) NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adresse` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `medicaments`
--

CREATE TABLE `medicaments` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `quantite_stock` int(11) NOT NULL,
  `date_expiration` date DEFAULT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ordonnances`
--

CREATE TABLE `ordonnances` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  `date_ordonnance` datetime NOT NULL,
  `details` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `date_naissance` date NOT NULL,
  `genre` enum('M','F') NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `adresse` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `radiologies`
--

CREATE TABLE `radiologies` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_radiologie` datetime NOT NULL,
  `type_radiologie` varchar(100) NOT NULL,
  `resultat` text,
  `statut` enum('en_attente','terminé') DEFAULT 'en_attente',
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

CREATE TABLE `rendez_vous` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `medecin_id` int(11) NOT NULL,
  `date_rendez_vous` datetime NOT NULL,
  `motif` text,
  `statut` enum('planifié','annulé','terminé') DEFAULT 'planifié',
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `description` text,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `urgences`
--

CREATE TABLE `urgences` (
  `id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `date_urgence` datetime NOT NULL,
  `motif` text,
  `traitement` text,
  `statut` enum('en_cours','terminé') DEFAULT 'en_cours',
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `role` enum('admin','medecin','personnel') NOT NULL,
  `telephone` varchar(20) DEFAULT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `analyses`
--
ALTER TABLE `analyses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_analyses_patient` (`patient_id`);

--
-- Index pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_consultations_patient` (`patient_id`),
  ADD KEY `idx_consultations_medecin` (`medecin_id`),
  ADD KEY `idx_consultations_service` (`service_id`);

--
-- Index pour la table `details_ordonnances`
--
ALTER TABLE `details_ordonnances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_details_ordonnances_ordonnance` (`ordonnance_id`),
  ADD KEY `idx_details_ordonnances_medicament` (`medicament_id`);

--
-- Index pour la table `factures`
--
ALTER TABLE `factures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_factures_patient` (`patient_id`);

--
-- Index pour la table `lits`
--
ALTER TABLE `lits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_lits_service` (`service_id`),
  ADD KEY `idx_lits_patient` (`patient_id`);

--
-- Index pour la table `medecins`
--
ALTER TABLE `medecins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medicaments`
--
ALTER TABLE `medicaments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ordonnances`
--
ALTER TABLE `ordonnances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_ordonnances_patient` (`patient_id`),
  ADD KEY `idx_ordonnances_medecin` (`medecin_id`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `radiologies`
--
ALTER TABLE `radiologies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_radiologies_patient` (`patient_id`);

--
-- Index pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_rendez_vous_patient` (`patient_id`),
  ADD KEY `idx_rendez_vous_medecin` (`medecin_id`);

--
-- Index pour la table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `urgences`
--
ALTER TABLE `urgences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_urgences_patient` (`patient_id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `analyses`
--
ALTER TABLE `analyses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `details_ordonnances`
--
ALTER TABLE `details_ordonnances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `factures`
--
ALTER TABLE `factures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `lits`
--
ALTER TABLE `lits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medecins`
--
ALTER TABLE `medecins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `medicaments`
--
ALTER TABLE `medicaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ordonnances`
--
ALTER TABLE `ordonnances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `radiologies`
--
ALTER TABLE `radiologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `urgences`
--
ALTER TABLE `urgences`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `analyses`
--
ALTER TABLE `analyses`
  ADD CONSTRAINT `analyses_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `consultations`
--
ALTER TABLE `consultations`
  ADD CONSTRAINT `consultations_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `consultations_ibfk_2` FOREIGN KEY (`medecin_id`) REFERENCES `medecins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `consultations_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `details_ordonnances`
--
ALTER TABLE `details_ordonnances`
  ADD CONSTRAINT `details_ordonnances_ibfk_1` FOREIGN KEY (`ordonnance_id`) REFERENCES `ordonnances` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `details_ordonnances_ibfk_2` FOREIGN KEY (`medicament_id`) REFERENCES `medicaments` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `factures`
--
ALTER TABLE `factures`
  ADD CONSTRAINT `factures_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `lits`
--
ALTER TABLE `lits`
  ADD CONSTRAINT `lits_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `lits_ibfk_2` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `ordonnances`
--
ALTER TABLE `ordonnances`
  ADD CONSTRAINT `ordonnances_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ordonnances_ibfk_2` FOREIGN KEY (`medecin_id`) REFERENCES `medecins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `radiologies`
--
ALTER TABLE `radiologies`
  ADD CONSTRAINT `radiologies_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `rendez_vous_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rendez_vous_ibfk_2` FOREIGN KEY (`medecin_id`) REFERENCES `medecins` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `urgences`
--
ALTER TABLE `urgences`
  ADD CONSTRAINT `urgences_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
