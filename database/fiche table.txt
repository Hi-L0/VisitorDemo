-- Structure de la table `fiche`
--

CREATE TABLE `fiche` (
  `ID_FICHE` int(8) NOT NULL,
  `ID_VISITE` int(8) NOT NULL,
  `DATE_CREATION` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--