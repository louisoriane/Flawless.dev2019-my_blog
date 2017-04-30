-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2017 at 05:05 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flawless`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `userid`, `title`, `description`, `date`) VALUES
(39, 107, 'Ed Sheeran parle de ses projets ', 'EmbauchÃ© pour un camÃ©o sur le tournage de la derniÃ¨re saison de Â«Game Of ThronesÂ», Ed Sheeran a donnÃ© quelques dÃ©tails sur son rÃ´le lors qu\'une interview avec Tom Green sur les ondes britanniques. Â«Je fais juste une scÃ¨ne avec Maisie Williams, a-t-il rÃ©vÃ©lÃ©. Je chante un peu et elle me dit "oh quelle belle musique".Â» Contrairement Ã  ce que certains fans pouvaient penser, le chanteur ne sera donc pas en danger de mort dans la sÃ©rie qui a la rÃ©putation de tuer ses personnages plus vite que son ombre. \n\nAprÃ¨s cette premiÃ¨re expÃ©rience en tant qu\'acteur, Ed Sheeran semble en tout cas vouloir dÃ©couvrir de plus en plus le monde du cinÃ©ma. Il a en effet confiÃ© qu\'il travaillait sur un nouveau projet de film. Â«Je suis sur un film, je vais faire la bande son et jouer dedans, puis filer un coup de main pour tout mettre en place, a-t-il expliquÃ©. Je voulais faire un mix entre "Eight Mile" et "Notting Hill".Â»\n\nLa suite de l\'aventure... avec Taylor Swift ?\n\nEd Sheeran, qui n\'a visiblement pas trÃ¨s envie de se reposer en ce moment, est aussi revenu sur une possible collaboration avec sa meilleure amie, Taylor Swift. Â«Nous avons parlÃ©, Ã§a va Ã©ventuellement se faire...Ã§a a toujours Ã©tÃ© plus ou moins prÃ©vu mais je viens de sortir un album et elle travaille sur le sien. Donc, ouais Ã§a se fera.Â» \n\nDeux bonnes nouvelles en une donc, puisqu\'Ed Sheeran nous confirme une fois de plus donc en mÃªme temps que Taylor Swift nous prÃ©pare un nouvel opus pour bientÃ´t!', '04/30/2017 Ã  04:31:17 pm'),
(40, 107, 'OneRepublic sort "No Vacancy"!', 'Le dernier album de OneRepublic date de 2016, mais Ryan Tedder et ses acolytes sont dÃ©jÃ  de retour! AprÃ¨s avoir fait deviner le titre du nouveau single sur les rÃ©seaux sociaux, hier (27 avril 17) sur Facebook, le leader de la bande a annoncÃ© que de nouveaux titres allaient arriver trÃ¨s bientÃ´t.\n\nÂ«Nous avons pris 4 mois de vacances, jâ€™ai dÃ» me plonger dans lâ€™Ã©criture pour plein de choses sauf 1Râ€¦ Donc jâ€™ai Ã©tÃ© pas mal occupÃ© avec dâ€™autres artistes, je me suis amusÃ© comme rarement Ã§a mâ€™Ã©tait arrivÃ©, mais lors de ces sessions, une idÃ©e pour 1R mâ€™est venu. Heureusement, nous aimons ce que nous faisons, on vous aime Ã©normÃ©ment les mecs, et on adore nous produire en liveÂ», a Ã©crit Ryan Tedder.\n\nÂ«No VacancyÂ», le nouveau single des OneRepublic\n\nEt le rÃ©sultat est lÃ  tout chaud ce matin: un tout nouveau titre signÃ© OneRepublic. La chanson est intitulÃ©e Â«No VacancyÂ». Â«Notre nouvelle chanson #NoVacancy est disponible maintenant!...Â», a fait savoir le groupe sur son compte Twitter il y a quelques minutes Ã  peine!\n\nHier, Ryan Tedder avait conclu son message ainsi: Â«Nous espÃ©rons que vous allez aimer notre nouvelle approche de faire de la musique, vous pourrez lâ€™entendre en mÃªme temps que nous la faisons. Il nâ€™y a pas de â€˜â€™premier singleâ€™â€™, il nâ€™y a pas de â€˜â€™cycles dâ€™albumâ€™â€™, il y a simplement nous, inspirÃ©s, Ã©crivant une chanson et vous lâ€™offrant, Ã  vous, aussi vite quâ€™on le peutÂ». La vidÃ©o postÃ©e sur le compte YouTube de OneRepublic a dÃ©jÃ  Ã©tÃ© vue 77.088 fois au moment oÃ¹ nous Ã©crivons.Le dernier clip "Let\'s hurt tonight"sorti en fÃ©vrier cumule dÃ©jÃ  prÃ¨s 35 millions de vues. Faites exploser le compteur!', '04/30/2017 Ã  04:33:43 pm'),
(41, 108, 'The Weeknd et Lana Del Rey', 'Lana Del Rey l\'avait annoncÃ© hier, et il n\'aura pas fallu attendre longtemps! Son duo avec The Weeknd, Â«Lust For LifeÂ», est sorti hier! Elle l\'a annoncÃ© elle-mÃªme sur les rÃ©seaux sociaux, en publiant un clichÃ© d\'eux deux pris dans un studio photo.\n\nÂ«Hey! Donc Starboy et moi on sort une nouvelle chanson, en fait c\'est la chanson qui a le mÃªme titre que l\'albumÂ», a-t-elle Ã©crit sur Twitter. The Weeknd, de son cÃ´tÃ©, est trÃ¨s fier d\'avoir pu travailler avec la chanteuse. Â«Le titre de la reine Lana Del Rey "Lust For Life", avec moi, est sorti. Merci de m\'avoir permis d\'y participer. Bisous bisous bisousÂ», a-t-il Ã©crit de son cÃ´tÃ©.\n\n', '04/30/2017 Ã  04:36:15 pm');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `article_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `userid` int(11) NOT NULL,
  `comment` text CHARACTER SET utf8 NOT NULL,
  `date` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `article_name`, `userid`, `comment`, `date`) VALUES
(350, 'Ed Sheeran parle de ses projets ', 108, 'J\'espÃ¨re qu\'il va faire une tournÃ©e en Europe l\'annÃ©e prochaine. Ce serait carrÃ©ment trop cool ! :P', '04/30/2017 Ã  04:37:26 pm'),
(352, 'The Weeknd et Lana Del Rey', 108, 'Bof il aurait pu faire un feat avec quelqu\'un d\'autre mais j\'attends de voir ce que Ã§a donnera. ;)', '04/30/2017 Ã  04:41:12 pm'),
(353, 'Ed Sheeran parle de ses projets ', 107, 'Ouais je prie aussi !!!!', '04/30/2017 Ã  04:55:36 pm'),
(354, 'OneRepublic sort "No Vacancy"!', 107, 'interessant...', '04/30/2017 Ã  04:55:56 pm'),
(355, 'The Weeknd et Lana Del Rey', 107, 'Mais non ces deux chanteurs font tous les deux du bon taff, Ã§a va le faire, hÃ¢te de voir Ã§a :-D', '04/30/2017 Ã  04:56:45 pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(107, 'oriane', '$2y$10$c2FsdHlzYWx0eXNhbHR5cuFtt8/MMidFt5BtPDGC5BhnyNk1JhQm.', 'oriane@hotmail.fr'),
(108, 'chloe', '$2y$10$c2FsdHlzYWx0eXNhbHR5cuRqeVfQUiZe/69F2/M6GoSmVlHklxauq', 'chloe@aol.fr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=356;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
