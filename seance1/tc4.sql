--
-- Base de données: 'tc4'
--

-- --------------------------------------------------------

--
-- Structure de la table 'rdv'
--

CREATE TABLE rdv (
  id int(11) NOT NULL AUTO_INCREMENT,
  description char(255) NOT NULL DEFAULT '',
  debut datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  duree int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (id)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

--
-- Contenu de la table 'rdv'
--

INSERT INTO rdv (description, debut, duree) VALUES('Réunion de coordination projet TC4', '2009-10-19 14:13:30', 120);
INSERT INTO rdv (description, debut, duree) VALUES('Pilotage RECAPSS', '2009-10-19 16:20:00', 60);
INSERT INTO rdv (description, debut, duree) VALUES('Audio Conf Madrid', '2009-10-20 15:15:00', 25);
INSERT INTO rdv (description, debut, duree) VALUES('Visio équipe Stockholm', '2009-10-21 16:10:00', 60);
INSERT INTO rdv (description, debut, duree) VALUES('Pilotage projet CALPI', '2009-10-22 08:00:00', 240);

