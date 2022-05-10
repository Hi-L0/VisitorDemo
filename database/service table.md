-- Structure de la table `service`
--

CREATE TABLE `service` (
  `ID_SERVICE` int(8) NOT NULL,
  `ABVNOMSERVICE` varchar(8) NOT NULL,
  `NOMSERVICE` varchar(100) NOT NULL,
  `ETAGE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`ID_SERVICE`, `ABVNOMSERVICE`, `NOMSERVICE`, `ETAGE`) VALUES
(1, 'sg', 'Secrétaire Génerale FP', 3),
(2, 'sgap', 'Service gestion affaires du personnel', 3),
(3, 'sgcp', 'Service gestion carriere du personnel', 3),
(4, 'spb', 'Service Programmation et Budget', 3),
(5, 'sagp', 'Service affaires génerale et parq', 0),
(6, 'scm', 'Service comptabilité et marchés', 3),
(7, 'si', 'Service informatique', 0),
(8, 'saf', 'Service affaires Juridique', 2),
(9, 'src', 'Service relation avec le citoyen', 2),
(10, 'ssps', 'Service secteur primaire et secondaire', 2),
(11, 'sst', 'Service secteur tertiaire', 2),
(12, 'sc', 'Service Carte', 2),
(13, 'sio', 'Service information et orientation', 2),
(14, 'ssil', 'Service suivi insertion des lauréats', 2),
(15, 'se', 'Service Evaluation', 2),
(16, 'scomm', 'Service Communication', 2),
(17, 'saps', 'Service autorisations et promotion du secteur', 2),
(18, 'sqa', 'Service Qualification et Accreditation', 2),
(19, 'sctrl', 'Service Controle', 2),
(20, 'spsps', 'Service Programmes Secteur Primaire et Secondaire', 2),
(21, 'spst', 'Service Progrmmes Secteur tertiaire', 2),
(22, 'spfe', 'Service Personnel Formateur et d\'Encadrement', 2),
(23, 'secg', 'Service Examens et Concours Général', 2),
(24, 'sn', 'Service Normalisation', 2),
(25, 'sqp', 'Service Gestion et Promotion de FCE', 1),
(26, 'scf', 'Service Controle De la FCE', 1),
(27, 'seif', 'Service Etude d\'Impact de la FCE', 1),
(28, 'saap', 'Service Apprentissage Agriculture et Peche', 1),
(29, 'saa', 'Service Apprentissage Artisanat', 1),
(30, 'satc', 'Service Apprentissage Textile et Cuire', 1),
(31, 'sat', 'Service Apprentissage Tourisme', 1),
(32, 'sabi', 'Service Apprentissage BTP et IMMEE', 1),
(33, 'sfpa', 'Service Formation Professionnelle Altérnée', 1),
(34, 'sfp', 'Service formation pensionnaire des CRE', 1),
(35, 'sfda', 'Service Formation des détenus adultes', 1),
(36, 'som', 'Service Coopération Multilatérale', 1),
(37, 'scb', 'Service Coopération Bilatérale', 1),
(38, 'sp', 'Service Partenariat', 1);
