-- phpMyAdmin SQL Dump
-- version 5.0.0-rc1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mer. 18 déc. 2019 à 14:33
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
(3, 'The Strokes', 'https://media.pitchfork.com/photos/592c567913d197565213f137/2:1/w_790/911c7242.jpg', 'Rock', 'Le groupe américain qui, depuis le début des années 2000, a remis le son garage et post-punk au centre du rock n’en finit pas de faire languir ses fans : malgré une production prolifique de ses cinq musiciens dans une multitude de projets solo, THE STROKE'),
(4, 'Twenty One Pilots', 'http://listeniowa.com/wp-content/uploads/2019/07/21-pilots.jpg', 'Rock', 'Avec 10 ans de carrière, avec 5 albums dont le dernier en date, « Trench », est un succès international considéré par le public et la critique comme l’un des meilleurs disques de l’année 2018, le groupe originaire de l’Ohio, TWENTY ØNE PILØTS, est un incr'),
(5, 'MIGOS', 'https://www.rollingstone.com/wp-content/uploads/2018/06/migos-9f83aef5-644f-4372-af82-8639ef75674e-e1530521648504.jpg?resize=900,600&w=450', 'Hip-Hop/rap', 'Offset, Takeoff et Quavo, le trio familial originaire du sud des Etats-Unis qui compose MIGOS prend d’assaut la scène de Lollapalooza Paris avec son hip hop/trap de haute volée. Même si on attend avec impatience leur quatrième album, « Culture III », prév'),
(6, 'Nekfeu', 'https://img.huffingtonpost.com/asset/5cf699b0240000550b857375.jpeg?ops=scalefit_630_noupscale', 'Hip-Hop/rap', 'C’était l’annonce-évènement de ces dernières semaines, Nekfeu rejoint l’édition 2019 de Lollapalooza Paris après avoir été l’un des moments forts de l’édition 2018. Il faut dire que le rappeur, acteur et producteur français est un peu ici chez lui, il a t'),
(7, 'Clean Bandit', 'https://img.nrj.fr/G5EmrHuyGVJI1P0uCxpFC_cPxVA=/800x450/smart/http%3A%2F%2Fimage-api.nrj.fr%2Fmedias%2F2018%2F07%2Fclean-bandit-credit-rita-zimmermann_5b3f65d38a457.jpg', 'Pop', 'Clean Bandit est un groupe de musique électronique anglais, fondé à Cambridge en 2009. Il est composé de trois membres : Grace Chatto, Luke Patterson et Jack Patterson. Leur style musical emprunte à la musique classique et à la musique électronique et pou'),
(8, 'Bad Bunny', 'https://images-na.ssl-images-amazon.com/images/I/B12JCwnzUSS._SL1000_.jpg', 'Latino', 'Du latin trap et du reggaeton haut de gamme, ça vous dit ? Dans ce registre, Benito Antonio Martinez Ocasio alias Bad Bunny est le roi. Fort d’une tournée triomphale en 2018, le jeune chanteur portoricain de 25 ans a sorti son premier album « X 100pre » ('),
(9, 'Orelsan', 'https://www.thebackpackerz.com/wp-content/uploads/2017/12/orelsan-interview.jpg', 'Hip-Hop/rap', 'La fête est loin d’être finie avec Orelsan ! D’ailleurs, il a relancé la machine en ressortant son album fin 2018 sous forme de réédition plein d’inédits estampillée « Epilogue ». Que de chemin parcouru, et malgré pas mal de vicissitudes et d’incompréhens'),
(10, 'Jain', 'https://moustique.cdnartwhere.eu/sites/default/files/styles/large/public/field/image/jain_illu_01_ouverture_c_pauletmartin.jpg?itok=TerxW7cV', 'Pop', 'Par ses voyages, sa famille et son art, Jain a déjà vécu mille vies. Par ses influences musicales, à la croisée des cultures africaines, orientales et occidentales, Jain a créé son univers. Sur disque, elle trouve un partenaire de choix en Yodelice qui l’'),
(11, 'the 1975', 'https://static.spin.com/files/2016/02/the-1975-interview-new-album-2500x1000.jpg', 'Rock', 'On a beau venir de Manchester, au lourd héritage musical, faire de la pop indie typiquement anglaise et avoir un nom qui laisse penser qu’on n’est pas né à la bonne époque, on peut garder toute son originalité : d’ailleurs, bien malin qui pourrait définir'),
(12, 'Eric Prydz', 'https://dancingastronaut.com/wp-content/uploads/2019/03/Eric-Prydz-2016.jpg', 'Electro', 'S’il y a bien un habitué des festivals qu’il fréquente assidument chaque année pour délivrer sa tech-house, c’est bien le DJ et producteur suédois Eric Prydz, mais il n’était pas encore passé par l’édition parisienne de Lollapalooza. Programmé cette année'),
(13, 'MØ', 'https://hey-alex.fr/wp-content/uploads/2018/03/mo-nouvelle-chanson-tournee-concert-france-2018.png', 'Pop', 'C’est sans doute parce que la jeune trentenaire danoise cite volontiers dans ses influences qu’elle doit autant sa vocation aux Spice Girls qu’à Sonic Youth ou Nirvana et que la presse britannique n’a pas hésité à la définir comme un croisement entre Siou'),
(14, 'IAM', 'https://cdn.radiofrance.fr/s3/cruiser-production/2017/01/cf426930-2a69-4e76-9690-24ce557224c2/640_iam_presse_1didier_deroin.jpg', 'Hip-Hop/rap', 'C’est ce qui est beau en musique : loin de toute rivalité, Marseille aime Paris et Paris aime Marseille. Pour preuve, IAM revient pour la seconde fois en trois ans à Lollapalooza Paris pour confirmer ce que son premier set avait démontré en 2017 : 30 ans'),
(15, 'Biffy Clyro', 'https://cybmag.de/wp-content/uploads/2018/06/Biffy-Clyro-Luke-Gilford.jpg', 'Rock', 'Avec presque un quart de siècle d’existence, Biffy Clyro fait figure de vétéran à l’affiche de cette nouvelle édition parisienne de Lollapalooza. Avec une discographie riche de sept albums studios entre rock alternatif et pop imparable, sans compter d’inn'),
(16, 'Roméo Elvis', 'https://intrld.com/wp-content/uploads/2019/03/romeo-lomepal-angele.png', 'Hip-Hop/rap', 'Il est fort ce Roméo Elvis ! Même s’il n’en est pas à son coup d’essai, ayant empilé les EPs depuis plus de 5 ans, le rappeur belge signe avec son premier album studio « Chocolat » sorti en avril un coup de maître : des guests prestigieux (Damon Albarn, M'),
(17, 'Kungs', 'https://resize-parismatch.lanmedia.fr/img/var/news/storage/images/paris-match/culture/musique/kungs-le-nouveau-david-guetta-1128008/17306930-1-fre-FR/Kungs-le-nouveau-David-Guetta.jpg', 'Electro', 'C’est le petit prince de la house française. Révélé à à peine 20 ans en 2016 avec « This Girl », un remix du groupe australien Cookin’ on 3 Burners qui devient viralement planétaire, suivi d’un album « Layers » consécutif à sa signature chez Barclay, le D'),
(18, 'Tash Sultana', 'https://consequenceofsound.net/wp-content/uploads/2018/08/tash-sultana-artist-of-the-month.png?w=807', 'Rock', 'Vous n’avez pas pu passer à côté de Tash Sultana, tant les vidéos de l’artiste australienne, les désormais légendaires « Bedroom Recordings », ont été diffusées sur la toile. Tombée dans la musique au plus tôt de son enfance, poussant le risque à n’appara'),
(19, 'Jaden Smith', 'https://s.abcnews.com/images/GMA/jaden-ap-er-190708_hpMain_16x9_608.jpg', 'Hip-Hop/rap', 'Quand il pèse sur vos épaules une paternité un peu lourde (le fils de Will qui déjà ?), il faut assurément fournir le double d’effort pour prétendre à la légitimité. Tout comme son illustre père, Jaden, âgé de 21 ans ce mois de juillet, joue sur les deux'),
(20, 'Caravan Palace', 'http://scd.rfi.fr/sites/filesrfi/aefimagesnew/imagecache/rfi_16x9_1024_578/sites/images.rfi.fr/files/aefimagesnew/aef_image/caravanpalace_credit_florentdrillon4_0.jpg', 'Rock', 'Les membres du groupe : Arnaud Vial: guitare, programmation / Charles Delaporte: contrebasse, programmation / - Tøøstøø: machines, trombone, programmation / - Colotis Zoé: lead singer /  - Victor Raimondeau: saxophone / - Paul-Marie Barbier: vibraphone, p'),
(21, 'Solange', 'https://media.pitchfork.com/photos/5ce73bf45a46c2fa960989b2/2:1/w_790/Solange.jpg', 'R&B/Soul', 'Chanteuse, compositrice et artiste visuelle saluÈe par les Grammy Award, Solange Knowles sait tirer profit de sa notoriÈtÈ pour dÈfendre la justice, en diffusant des messages politiques de faÁon constructive et percutante. En 2016 le dernier album de Sola'),
(22, 'Lizzo', 'https://img.nrj.fr/dhFBf9GCNM1Nb0-XT7zHVBDj6so=/800x450/smart/https%3A%2F%2Fimage-api.nrj.fr%2Fmedias%2F2019%2F05%2Fgettyimages-1140043744_5ce26b4210b7b.jpg', 'Pop', 'Quand vous vous aimez vous-mÍme, tout devient possible. Canalisant sa confiance en soi dans une voix sismique et une personnalitÈ haute en couleurs, Lizzo est indÈniablement une star impertinente, pleine d\'esprit et avec une rÈelle ‚me.'),
(23, 'IAMDDB', 'https://www.marsatac.com/wp-content/uploads/2018/02/iamddb_web-720x400.jpg', 'R&B/Soul', 'Découverte et propulsée par Drake en 2017, IAMDDB est talentueuse artiste originaire de Manchester, prête à vous hypnotiser avec sa voix hybride trap-soul et sensuelle imprégnée de jazz.'),
(24, 'Little Simz', 'https://lemonmag.com/wp-content/uploads/2019/02/Little-Simz-Jake-Bridgland-1400x600.jpg', 'Hip-Hop/rap', 'A seulement 24 ans, Little Simz a déjà sorti deux albums acclamés par la critique, dont un a été récompensé par un Award. Elle a également déjà joué sur les plus grandes scène du monde, avec le reconnaissance de grands noms tels que Kendrick Lamar, Lauryn');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

