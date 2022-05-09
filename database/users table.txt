-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID_USER` int(8) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL,
  `ROLE` varchar(50) DEFAULT NULL,
  `ETAT` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_USER`, `LOGIN`, `EMAIL`, `PASSWORD`, `ROLE`, `ETAT`) VALUES
(1, 'admin', 'admin@gmail.com', '782f33592b8e7da50f06977cad84dc48', 'admin', 1),
(2, 'user1', 'user1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 0),
(5, 'user2', 'user2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 0);
