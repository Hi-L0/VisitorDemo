-- Structure de la table `visiteur`
--

CREATE TABLE `visiteur` (
  `ID_VISITEUR` int(8) NOT NULL,
  `CIN` varchar(10) NOT NULL,
  `NOM` varchar(30) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `TEL` varchar(10) NOT NULL,
  `ADRESSE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Déchargement des données de la table `visiteur`
--

INSERT INTO `visiteur` (`ID_VISITEUR`, `CIN`, `NOM`, `PRENOM`, `TEL`, `ADRESSE`) VALUES
(2, 'AS12547', 'jade', 'john', '0632145814', '38, rue Guynemer'),
(3, 'M1247', 'gholbi', 'mohmed', '0658754123', 'boulevard hassan 2 res 15 appt 11 sale '),
(4, 'K12548', 'boulin', 'isslam', '0647851234', 'allee rachid tazzi res 04 appt 14'),
(6, 'as3522', 'kandal', 'moad', '0651284874', 'avenue hay ennahda res 10 appt 4 rabat '),
(13, 'M45875', 'khalid', 'amir', '0632541789', 'adresse4'),
(14, 'L124587', 'lotfi', 'mehdi', '0657841231', 'adresse 5'),
(15, 'khfgh58', 'ahgjroussi', 'hamza', '0668984512', 'fgdfhghfj gh gfjhjh'),
(16, 'R15421', 'khalid', 'fad', '0658784512', 'adresse 10 '),
(18, 'M660033', 'laaroussi', 'nour el houda', '0668939848', 'sidi dawi'),
(21, 'Af11111', 'laaroussi', 'imane', '0665989566', 'aldgsghgfh hhfhgf'),
(33, 'asf458', 'laaroussidfs', 'imane', '0665989566', 'aldgsghgfh hhfhgf'),
(34, 'asld', 'kfdfk', 'wail', '0655215421', 'sdfffs rbat \r\n'),
(35, 'jd2554321', 'fgghjsi', 'hamza', '0664443686', 'aldgsghgfh hhfhgfa'),
(36, 'jd2554321', 'fossi', 'hamza', '0664443686', 'aldgsghgfh hhfhgfa'),
(37, 'asf45jki', 'jhdhsjkfs', 'imane', '0665986568', 'aldgsghgfh hhfhgfl jadid');

--