-- phpMyAdmin SQL Dump
-- version 5.0.0-rc1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 18 déc. 2019 à 15:20
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `nation_sounds`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuality`
--

CREATE TABLE `actuality` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `actuality`
--

INSERT INTO `actuality` (`id`, `title`) VALUES
(1, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id`, `name`, `picture`, `category`, `description`) VALUES
(4, 'The Strokes', 'https://media.pitchfork.com/photos/592c567913d197565213f137/2:1/w_790/911c7242.jpg', 'Rock', 'Le groupe américain qui, depuis le début des années 2000, a remis le son garage et post-punk au centre du rock n’en finit pas de faire languir ses fans : malgré une production prolifique de ses cinq musiciens dans une multitude de projets solo, THE STROKE'),
(5, 'Twenty One Pilots', 'http://listeniowa.com/wp-content/uploads/2019/07/21-pilots.jpg', 'Pop', 'Avec 10 ans de carrière, avec 5 albums dont le dernier en date, « Trench », est un succès international considéré par le public et la critique comme l’un des meilleurs disques de l’année 2018, le groupe originaire de l’Ohio, TWENTY ØNE PILØTS, est un incr'),
(6, 'MIGOS', 'https://www.rollingstone.com/wp-content/uploads/2018/06/migos-9f83aef5-644f-4372-af82-8639ef75674e-e1530521648504.jpg?resize=900,600&w=450', 'Hip-Hop/rap', 'Offset, Takeoff et Quavo, le trio familial originaire du sud des Etats-Unis qui compose MIGOS prend d’assaut la scène de Lollapalooza Paris avec son hip hop/trap de haute volée. Même si on attend avec impatience leur quatrième album, « Culture III », prév'),
(7, 'Nekfeu', 'https://img.huffingtonpost.com/asset/5cf699b0240000550b857375.jpeg?ops=scalefit_630_noupscale', 'Hip-Hop/rap', 'C’était l’annonce-évènement de ces dernières semaines, Nekfeu rejoint l’édition 2019 de Lollapalooza Paris après avoir été l’un des moments forts de l’édition 2018. Il faut dire que le rappeur, acteur et producteur français est un peu ici chez lui, il a t'),
(8, 'Orelsan', 'https://www.thebackpackerz.com/wp-content/uploads/2017/12/orelsan-interview.jpg', 'Hip-Hop/rap', 'La fête est loin d’être finie avec Orelsan ! D’ailleurs, il a relancé la machine en ressortant son album fin 2018 sous forme de réédition plein d’inédits estampillée « Epilogue ». Que de chemin parcouru, et malgré pas mal de vicissitudes et d’incompréhens'),
(9, 'Jain', 'https://moustique.cdnartwhere.eu/sites/default/files/styles/large/public/field/image/jain_illu_01_ouverture_c_pauletmartin.jpg?itok=TerxW7cV', 'Pop', 'Par ses voyages, sa famille et son art, Jain a déjà vécu mille vies. Par ses influences musicales, à la croisée des cultures africaines, orientales et occidentales, Jain a créé son univers. Sur disque, elle trouve un partenaire de choix en Yodelice qui l’'),
(10, 'The 1975', 'https://static.spin.com/files/2016/02/the-1975-interview-new-album-2500x1000.jpg', 'Rock', 'On a beau venir de Manchester, au lourd héritage musical, faire de la pop indie typiquement anglaise et avoir un nom qui laisse penser qu’on n’est pas né à la bonne époque, on peut garder toute son originalité : d’ailleurs, bien malin qui pourrait définir'),
(11, 'Eric Prydz', 'https://dancingastronaut.com/wp-content/uploads/2019/03/Eric-Prydz-2016.jpg', 'Electro', 'S’il y a bien un habitué des festivals qu’il fréquente assidument chaque année pour délivrer sa tech-house, c’est bien le DJ et producteur suédois Eric Prydz, mais il n’était pas encore passé par l’édition parisienne de Lollapalooza. Programmé cette année'),
(12, 'MØ', 'https://hey-alex.fr/wp-content/uploads/2018/03/mo-nouvelle-chanson-tournee-concert-france-2018.png', 'Electro', 'C’est sans doute parce que la jeune trentenaire danoise cite volontiers dans ses influences qu’elle doit autant sa vocation aux Spice Girls qu’à Sonic Youth ou Nirvana et que la presse britannique n’a pas hésité à la définir comme un croisement entre Siou'),
(13, 'Roméo Elvis', 'https://intrld.com/wp-content/uploads/2019/03/romeo-lomepal-angele.png', 'Hip-Hop/rap', 'Il est fort ce Roméo Elvis ! Même s’il n’en est pas à son coup d’essai, ayant empilé les EPs depuis plus de 5 ans, le rappeur belge signe avec son premier album studio « Chocolat » sorti en avril un coup de maître : des guests prestigieux (Damon Albarn, M'),
(14, 'Kungs', 'https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/culture/musique/kungs-le-nouveau-david-guetta-1128008/17306930-1-fre-FR/Kungs-le-nouveau-David-Guetta.jpg', 'Electro', 'C’est le petit prince de la house française. Révélé à à peine 20 ans en 2016 avec « This Girl », un remix du groupe australien Cookin’ on 3 Burners qui devient viralement planétaire, suivi d’un album « Layers » consécutif à sa signature chez Barclay, le D'),
(15, 'Tash Sultana', 'https://consequenceofsound.net/wp-content/uploads/2018/08/tash-sultana-artist-of-the-month.png?w=807', 'Rock', 'Vous n’avez pas pu passer à côté de Tash Sultana, tant les vidéos de l’artiste australienne, les désormais légendaires « Bedroom Recordings », ont été diffusées sur la toile. Tombée dans la musique au plus tôt de son enfance, poussant le risque à n’appara'),
(16, 'Jaden Smith', 'https://s.abcnews.com/images/GMA/jaden-ap-er-190708_hpMain_16x9_608.jpg', 'Hip-Hop/rap', 'Quand il pèse sur vos épaules une paternité un peu lourde (le fils de Will qui déjà ?), il faut assurément fournir le double d’effort pour prétendre à la légitimité. Tout comme son illustre père, Jaden, âgé de 21 ans ce mois de juillet, joue sur les deux'),
(17, 'Caravan Palace', 'http://scd.rfi.fr/sites/filesrfi/aefimagesnew/imagecache/rfi_16x9_1024_578/sites/images.rfi.fr/files/aefimagesnew/aef_image/caravanpalace_credit_florentdrillon4_0.jpg', 'Rock', 'Les membres du groupe : Arnaud Vial: guitare, programmation / Charles Delaporte: contrebasse, programmation / - Tøøstøø: machines, trombone, programmation / - Colotis Zoé: lead singer /  - Victor Raimondeau: saxophone / - Paul-Marie Barbier: vibraphone, p'),
(18, 'Solange', 'https://media.pitchfork.com/photos/5ce73bf45a46c2fa960989b2/2:1/w_790/Solange.jpg', 'R&B/Soul', 'Chanteuse, compositrice et artiste visuelle saluÈe par les Grammy Award, Solange Knowles sait tirer profit de sa notoriÈtÈ pour dÈfendre la justice, en diffusant des messages politiques de faÁon constructive et percutante. En 2016 le dernier album de Sola'),
(19, 'Lizzo', 'https://img.nrj.fr/dhFBf9GCNM1Nb0-XT7zHVBDj6so=/800x450/smart/https%3A%2F%2Fimage-api.nrj.fr%2Fmedias%2F2019%2F05%2Fgettyimages-1140043744_5ce26b4210b7b.jpg', 'Pop', 'Quand vous vous aimez vous-mÍme, tout devient possible. Canalisant sa confiance en soi dans une voix sismique et une personnalitÈ haute en couleurs, Lizzo est indÈniablement une star impertinente, pleine d\'esprit et avec une rÈelle ‚me.'),
(20, 'IAMDDB', 'https://www.marsatac.com/wp-content/uploads/2018/02/iamddb_web-720x400.jpg', 'R&B/Soul', 'Découverte et propulsée par Drake en 2017, IAMDDB est talentueuse artiste originaire de Manchester, prête à vous hypnotiser avec sa voix hybride trap-soul et sensuelle imprégnée de jazz.'),
(21, 'Little Simz', 'https://lemonmag.com/wp-content/uploads/2019/02/Little-Simz-Jake-Bridgland-1400x600.jpg', 'Hip-Hop/rap', 'A seulement 24 ans, Little Simz a déjà sorti deux albums acclamés par la critique, dont un a été récompensé par un Award. Elle a également déjà joué sur les plus grandes scène du monde, avec le reconnaissance de grands noms tels que Kendrick Lamar, Lauryn');

-- --------------------------------------------------------

--
-- Structure de la table `festival`
--

CREATE TABLE `festival` (
  `id` int(11) NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `meeting`
--

CREATE TABLE `meeting` (
  `id` int(11) NOT NULL,
  `beginning` datetime NOT NULL,
  `ending` datetime NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191217132830', '2019-12-17 13:31:06'),
('20191217142601', '2019-12-17 14:26:27'),
('20191217164704', '2019-12-17 16:48:44'),
('20191218113944', '2019-12-18 14:30:44'),
('20191218114223', '2019-12-18 14:30:44');

-- --------------------------------------------------------

--
-- Structure de la table `scene`
--

CREATE TABLE `scene` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `seance`
--

CREATE TABLE `seance` (
  `id` int(11) NOT NULL,
  `id_scene_id` int(11) NOT NULL,
  `beginning` time NOT NULL,
  `ending` time NOT NULL,
  `date` date NOT NULL,
  `artist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `security_info`
--

CREATE TABLE `security_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `id_festival_id` int(11) DEFAULT NULL,
  `beginning` date NOT NULL,
  `ending` date NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `password`) VALUES
(1, 'cynthia@gmail.com', 'Cynthia', '$argon2i$v=19$m=65536,t=4,p=1$REFacmFIMURsNXU3ampJQQ$2jevmCvih9XkLEnf99SxsnQdudCpi+ZRJ4g2w4pVYdw'),
(2, 'test@yahoo.fr', 'mathieuoma', '$argon2i$v=19$m=65536,t=4,p=1$L20xYmp1OEw2UFFudktFYg$mW7f/S8WgsDU4/dXkQkluqxGZfG4/o5BqeOBFTWVmc4');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actuality`
--
ALTER TABLE `actuality`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `festival`
--
ALTER TABLE `festival`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_F515E139B7970CF8` (`artist_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `scene`
--
ALTER TABLE `scene`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `seance`
--
ALTER TABLE `seance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_DF7DFD0EB7970CF8` (`artist_id`),
  ADD KEY `IDX_DF7DFD0E46BBBF21` (`id_scene_id`);

--
-- Index pour la table `security_info`
--
ALTER TABLE `security_info`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_97A0ADA392F962A0` (`id_festival_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actuality`
--
ALTER TABLE `actuality`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `festival`
--
ALTER TABLE `festival`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `scene`
--
ALTER TABLE `scene`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `seance`
--
ALTER TABLE `seance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `security_info`
--
ALTER TABLE `security_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `meeting`
--
ALTER TABLE `meeting`
  ADD CONSTRAINT `FK_F515E139B7970CF8` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);

--
-- Contraintes pour la table `seance`
--
ALTER TABLE `seance`
  ADD CONSTRAINT `FK_DF7DFD0E46BBBF21` FOREIGN KEY (`id_scene_id`) REFERENCES `scene` (`id`),
  ADD CONSTRAINT `FK_DF7DFD0EB7970CF8` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `FK_97A0ADA392F962A0` FOREIGN KEY (`id_festival_id`) REFERENCES `festival` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

