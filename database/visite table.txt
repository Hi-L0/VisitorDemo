-- Structure de la table `visite`
--

CREATE TABLE `visite` (
  `ID_VISITE` int(8) NOT NULL,
  `ID_SERVICE` int(8) NOT NULL,
  `ID_VISITEUR` int(8) NOT NULL,
  `OBJET` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `HEURE_ENTREE` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Déchargement des données de la table `visite`
--

INSERT INTO `visite` (`ID_VISITE`, `ID_SERVICE`, `ID_VISITEUR`, `OBJET`, `DATE`, `HEURE_ENTREE`) VALUES
(2, 31, 2, 'visite 1', '2021-07-15', '10:30:00'),
(3, 25, 4, 'visite2', '2021-07-26', '09:00:00'),
(4, 27, 4, 'visite3', '2021-07-16', '11:00:00'),
(11, 27, 6, 'visite3', '2021-07-29', '10:30:00'),
(12, 5, 13, 'objet visite 3', '2021-07-21', '15:00:00'),
(14, 2, 14, 'attestation de stage', '2021-07-15', '10:00:00'),
(15, 7, 15, 'attestation de stage', '2021-07-15', '09:30:00'),
(16, 8, 16, 'visite 8', '2021-07-19', '13:30:00'),
(18, 15, 18, 'visite de recuperation', '2021-07-28', '11:00:00'),
(19, 2, 21, 'visite', '2021-07-28', '09:00:00'),
(30, 3, 33, 'visite ha\r\n', '2021-08-20', '14:30:00'),
(31, 2, 34, 'jfkfvlm lflmd ', '2021-10-06', '09:00:00'),
(32, 3, 36, 'fhjjkl jklkmml', '2021-10-11', '12:00:00'),
(33, 6, 37, 'esrdftyguhijkolmùsdfghjklm', '2021-12-24', '09:00:00');
