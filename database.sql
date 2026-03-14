-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 14 mars 2026 à 12:47
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bymquiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `data_learning`
--

CREATE TABLE `data_learning` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `bible_references` text DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `data_learning`
--

INSERT INTO `data_learning` (`id`, `title`, `description`, `bible_references`, `language`, `created_on`) VALUES
(1, 'Faith', 'Faith is trusting in God and believing in His promises even when we cannot see the outcome. Faith allows believers to rely on God’s power and guidance in every situation.', 'Hebrews 11:1; Romans 10:17; Mark 11:22-24', 'EN', '2026-03-14 11:59:31'),
(2, 'Foi', 'La foi consiste à faire confiance à Dieu et à croire en Ses promesses même lorsque nous ne voyons pas le résultat. La foi permet aux croyants de s’appuyer sur la puissance et la direction de Dieu.', 'Hébreux 11:1; Romains 10:17; Marc 11:22-24', 'FR', '2026-03-14 11:59:31'),
(3, 'Love', 'Love is the greatest commandment in the Bible. God calls believers to love Him and to love others unconditionally, reflecting His divine nature.', '1 Corinthians 13:4-7; Matthew 22:37-39; John 13:34', 'EN', '2026-03-14 11:59:31'),
(4, 'Amour', 'L’amour est le plus grand commandement dans la Bible. Dieu appelle les croyants à L’aimer et à aimer les autres de manière inconditionnelle.', '1 Corinthiens 13:4-7; Matthieu 22:37-39; Jean 13:34', 'FR', '2026-03-14 11:59:31'),
(5, 'Salvation', 'Salvation is God’s gift through Jesus Christ. Through His sacrifice, people are forgiven and reconciled with God.', 'Ephesians 2:8-9; Acts 4:12; John 3:16', 'EN', '2026-03-14 11:59:31'),
(6, 'Salut', 'Le salut est le don de Dieu par Jésus-Christ. Par Son sacrifice, les hommes reçoivent le pardon et sont réconciliés avec Dieu.', 'Éphésiens 2:8-9; Actes 4:12; Jean 3:16', 'FR', '2026-03-14 11:59:31'),
(7, 'Eternal Life', 'Eternal life is the promise given to those who believe in Jesus Christ. It is life with God that never ends.', 'John 3:16; John 10:28; Romans 6:23', 'EN', '2026-03-14 11:59:31'),
(8, 'Vie éternelle', 'La vie éternelle est la promesse donnée à ceux qui croient en Jésus-Christ. C’est une vie avec Dieu qui ne finit jamais.', 'Jean 3:16; Jean 10:28; Romains 6:23', 'FR', '2026-03-14 11:59:31'),
(9, 'Commandments', 'God gave commandments to guide His people in righteous living. The commandments teach love, obedience, and holiness.', 'Exodus 20:1-17; Matthew 5:17-19', 'EN', '2026-03-14 11:59:31'),
(10, 'Commandements', 'Dieu a donné les commandements pour guider Son peuple dans une vie juste. Ils enseignent l’amour, l’obéissance et la sainteté.', 'Exode 20:1-17; Matthieu 5:17-19', 'FR', '2026-03-14 11:59:31'),
(11, 'The Cross', 'The cross represents the sacrifice of Jesus Christ for the sins of the world. It is the symbol of redemption and victory over sin.', 'Luke 23:33-34; 1 Corinthians 1:18; Colossians 2:14', 'EN', '2026-03-14 11:59:31'),
(12, 'La Croix', 'La croix représente le sacrifice de Jésus-Christ pour les péchés du monde. Elle est le symbole de la rédemption et de la victoire sur le péché.', 'Luc 23:33-34; 1 Corinthiens 1:18; Colossiens 2:14', 'FR', '2026-03-14 11:59:31'),
(13, 'Forgiveness', 'Forgiveness is a central teaching of Jesus. Believers are called to forgive others just as God forgives them.', 'Matthew 6:14-15; Ephesians 4:32; Colossians 3:13', 'EN', '2026-03-14 11:59:31'),
(14, 'Pardon', 'Le pardon est un enseignement central de Jésus. Les croyants doivent pardonner aux autres comme Dieu leur pardonne.', 'Matthieu 6:14-15; Éphésiens 4:32; Colossiens 3:13', 'FR', '2026-03-14 11:59:31'),
(15, 'Patience', 'Patience is the ability to endure trials while trusting God’s timing and purpose.', 'James 5:7-8; Romans 12:12; Galatians 5:22', 'EN', '2026-03-14 11:59:31'),
(16, 'Patience', 'La patience est la capacité d’endurer les épreuves tout en faisant confiance au temps et au plan de Dieu.', 'Jacques 5:7-8; Romains 12:12; Galates 5:22', 'FR', '2026-03-14 11:59:31'),
(17, 'Hope', 'Christian hope is the confident expectation that God will fulfill His promises.', 'Romans 15:13; Hebrews 6:19; Jeremiah 29:11', 'EN', '2026-03-14 11:59:31'),
(18, 'Espérance', 'L’espérance chrétienne est l’attente confiante que Dieu accomplira Ses promesses.', 'Romains 15:13; Hébreux 6:19; Jérémie 29:11', 'FR', '2026-03-14 11:59:31'),
(19, 'Grace', 'Grace is the unmerited favor of God given to humanity through Jesus Christ.', 'Ephesians 2:8; Titus 2:11; Romans 3:24', 'EN', '2026-03-14 11:59:31'),
(20, 'Grâce', 'La grâce est la faveur imméritée de Dieu accordée aux hommes par Jésus-Christ.', 'Éphésiens 2:8; Tite 2:11; Romains 3:24', 'FR', '2026-03-14 11:59:31'),
(21, 'Prayer', 'Prayer is communication with God. Through prayer believers worship, give thanks, and present their needs to Him.', 'Philippians 4:6; Matthew 6:6; 1 Thessalonians 5:17', 'EN', '2026-03-14 11:59:31'),
(22, 'Prière', 'La prière est une communication avec Dieu. Les croyants adorent, rendent grâce et présentent leurs besoins.', 'Philippiens 4:6; Matthieu 6:6; 1 Thessaloniciens 5:17', 'FR', '2026-03-14 11:59:31'),
(23, 'Humility', 'Humility is recognizing our dependence on God and valuing others above ourselves.', 'Philippians 2:3-4; James 4:10; 1 Peter 5:6', 'EN', '2026-03-14 11:59:31'),
(24, 'Humilité', 'L’humilité consiste à reconnaître notre dépendance envers Dieu et à considérer les autres avec respect.', 'Philippiens 2:3-4; Jacques 4:10; 1 Pierre 5:6', 'FR', '2026-03-14 11:59:31'),
(25, 'Repentance', 'Repentance means turning away from sin and turning toward God with a sincere heart.', 'Acts 3:19; Luke 15:7; 2 Peter 3:9', 'EN', '2026-03-14 11:59:31'),
(26, 'Repentance', 'La repentance signifie se détourner du péché et se tourner vers Dieu avec un cœur sincère.', 'Actes 3:19; Luc 15:7; 2 Pierre 3:9', 'FR', '2026-03-14 11:59:31'),
(27, 'Obedience', 'Obedience to God demonstrates love and faithfulness to His Word.', 'John 14:15; Deuteronomy 11:1; James 1:22', 'EN', '2026-03-14 11:59:31'),
(28, 'Obéissance', 'L’obéissance à Dieu démontre l’amour et la fidélité envers Sa parole.', 'Jean 14:15; Deutéronome 11:1; Jacques 1:22', 'FR', '2026-03-14 11:59:31'),
(29, 'Wisdom', 'Biblical wisdom is the ability to live according to God’s truth and apply His Word in daily life.', 'Proverbs 9:10; James 1:5; Ecclesiastes 7:12', 'EN', '2026-03-14 11:59:31'),
(30, 'Sagesse', 'La sagesse biblique est la capacité de vivre selon la vérité de Dieu et d’appliquer Sa parole.', 'Proverbes 9:10; Jacques 1:5; Ecclésiaste 7:12', 'FR', '2026-03-14 11:59:31');

-- --------------------------------------------------------

--
-- Structure de la table `data_mcq`
--

CREATE TABLE `data_mcq` (
  `id` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `choiceA` text DEFAULT NULL,
  `choiceB` text DEFAULT NULL,
  `choiceC` text DEFAULT NULL,
  `choiceD` text DEFAULT NULL,
  `reponseChoice` char(1) DEFAULT NULL,
  `explication` text DEFAULT NULL,
  `bible_references` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `data_mcq`
--

INSERT INTO `data_mcq` (`id`, `title`, `question`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `reponseChoice`, `explication`, `bible_references`, `description`, `language`, `created_on`) VALUES
(1, 'Faith', 'What is faith according to the Bible?', 'Believing only what we can see', 'Trusting God and His promises', 'Following traditions', 'Doing good works only', 'B', 'Faith is trusting in God even without seeing the result.', 'Hebrews 11:1', 'Understanding the meaning of faith in Christian life.', 'EN', '2026-03-14 12:10:27'),
(2, 'Foi', 'Qu’est-ce que la foi selon la Bible ?', 'Croire seulement ce que nous voyons', 'Faire confiance à Dieu et à Ses promesses', 'Suivre des traditions', 'Faire seulement de bonnes œuvres', 'B', 'La foi consiste à faire confiance à Dieu même sans voir le résultat.', 'Hébreux 11:1', 'Comprendre la signification de la foi dans la vie chrétienne.', 'FR', '2026-03-14 12:10:27'),
(3, 'Love', 'According to Jesus, what is the greatest commandment?', 'To build churches', 'To love God and love others', 'To follow traditions', 'To become rich', 'B', 'Jesus said the greatest commandment is to love God and love your neighbor.', 'Matthew 22:37-39', 'Teaching about Christian love.', 'EN', '2026-03-14 12:10:27'),
(4, 'Amour', 'Selon Jésus, quel est le plus grand commandement ?', 'Construire des églises', 'Aimer Dieu et aimer son prochain', 'Suivre des traditions', 'Devenir riche', 'B', 'Jésus enseigne que le plus grand commandement est d’aimer Dieu et son prochain.', 'Matthieu 22:37-39', 'Enseignement sur l’amour chrétien.', 'FR', '2026-03-14 12:10:27'),
(5, 'Salvation', 'How is salvation received according to the Bible?', 'By good works only', 'By believing in Jesus Christ', 'By following traditions', 'By money offerings', 'B', 'Salvation is a gift from God received through faith in Jesus Christ.', 'Ephesians 2:8-9', 'Understanding the doctrine of salvation.', 'EN', '2026-03-14 12:10:27'),
(6, 'Salut', 'Comment reçoit-on le salut selon la Bible ?', 'Par les bonnes œuvres seulement', 'En croyant en Jésus-Christ', 'En suivant des traditions', 'Par des offrandes', 'B', 'Le salut est un don de Dieu reçu par la foi en Jésus-Christ.', 'Éphésiens 2:8-9', 'Comprendre la doctrine du salut.', 'FR', '2026-03-14 12:10:27'),
(7, 'Eternal Life', 'Who gives eternal life according to the Bible?', 'Prophets', 'Jesus Christ', 'Angels', 'Kings', 'B', 'Jesus promises eternal life to those who believe in Him.', 'John 3:16', 'Teaching about eternal life.', 'EN', '2026-03-14 12:10:27'),
(8, 'Vie éternelle', 'Qui donne la vie éternelle selon la Bible ?', 'Les prophètes', 'Jésus-Christ', 'Les anges', 'Les rois', 'B', 'Jésus promet la vie éternelle à ceux qui croient en Lui.', 'Jean 3:16', 'Enseignement sur la vie éternelle.', 'FR', '2026-03-14 12:10:27'),
(9, 'The Cross', 'What does the cross symbolize for Christians?', 'Punishment', 'Defeat', 'The sacrifice of Jesus', 'Human power', 'C', 'The cross represents the sacrifice of Jesus for humanity.', '1 Corinthians 1:18', 'Meaning of the cross in Christianity.', 'EN', '2026-03-14 12:10:27'),
(10, 'La Croix', 'Que symbolise la croix pour les chrétiens ?', 'La punition', 'La défaite', 'Le sacrifice de Jésus', 'La puissance humaine', 'C', 'La croix représente le sacrifice de Jésus pour l’humanité.', '1 Corinthiens 1:18', 'Signification de la croix dans le christianisme.', 'FR', '2026-03-14 12:10:27'),
(11, 'Forgiveness', 'How many times did Jesus tell Peter to forgive?', '3 times', '7 times', '77 times', 'Unlimited forgiveness', 'D', 'Jesus teaches believers to forgive without limit.', 'Matthew 18:21-22', 'Teaching about forgiveness.', 'EN', '2026-03-14 12:10:27'),
(12, 'Pardon', 'Combien de fois Jésus a-t-il demandé à Pierre de pardonner ?', '3 fois', '7 fois', '77 fois', 'Un pardon sans limite', 'D', 'Jésus enseigne que le pardon doit être sans limite.', 'Matthieu 18:21-22', 'Enseignement sur le pardon.', 'FR', '2026-03-14 12:10:27'),
(13, 'Patience', 'Patience is considered a fruit of what?', 'Human strength', 'The Holy Spirit', 'Education', 'Wisdom only', 'B', 'Patience is listed among the fruits of the Spirit.', 'Galatians 5:22', 'Christian character and virtues.', 'EN', '2026-03-14 12:10:27'),
(14, 'Patience', 'La patience est considérée comme un fruit de quoi ?', 'La force humaine', 'Le Saint-Esprit', 'L’éducation', 'La sagesse seulement', 'B', 'La patience fait partie des fruits de l’Esprit.', 'Galates 5:22', 'Vertus du caractère chrétien.', 'FR', '2026-03-14 12:10:27'),
(15, 'Hope', 'Christian hope is based on what?', 'Human power', 'God’s promises', 'Luck', 'Money', 'B', 'Christian hope is trusting that God will fulfill His promises.', 'Romans 15:13', 'Understanding hope in Christianity.', 'EN', '2026-03-14 12:10:27'),
(16, 'Espérance', 'Sur quoi repose l’espérance chrétienne ?', 'La puissance humaine', 'Les promesses de Dieu', 'La chance', 'L’argent', 'B', 'L’espérance chrétienne repose sur la confiance dans les promesses de Dieu.', 'Romains 15:13', 'Comprendre l’espérance chrétienne.', 'FR', '2026-03-14 12:10:27'),
(17, 'Commandments', 'How many commandments did God give to Moses?', '5', '7', '10', '12', 'C', 'God gave the Ten Commandments to guide His people.', 'Exodus 20:1-17', 'Understanding the Ten Commandments.', 'EN', '2026-03-14 12:10:27'),
(18, 'Commandements', 'Combien de commandements Dieu a-t-il donnés à Moïse ?', '5', '7', '10', '12', 'C', 'Dieu a donné les dix commandements pour guider Son peuple.', 'Exode 20:1-17', 'Comprendre les dix commandements.', 'FR', '2026-03-14 12:10:27'),
(19, 'Love Neighbor', 'Jesus taught that we must love who?', 'Only family', 'Only friends', 'Our neighbors', 'Only believers', 'C', 'Jesus teaches believers to love their neighbors.', 'Luke 10:27', 'Teaching about loving others.', 'EN', '2026-03-14 12:10:27'),
(20, 'Aimer son prochain', 'Jésus enseigne que nous devons aimer qui ?', 'Seulement la famille', 'Seulement les amis', 'Notre prochain', 'Seulement les croyants', 'C', 'Jésus enseigne que nous devons aimer notre prochain.', 'Luc 10:27', 'Enseignement sur l’amour du prochain.', 'FR', '2026-03-14 12:10:27');

-- --------------------------------------------------------

--
-- Structure de la table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `languages`
--

INSERT INTO `languages` (`id`, `code`, `name`) VALUES
(1, 'EN', 'English'),
(2, 'FR', 'Français'),
(3, 'ES', 'Español');

-- --------------------------------------------------------

--
-- Structure de la table `learning_stats`
--

CREATE TABLE `learning_stats` (
  `suite_id` int(10) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `learning_stats`
--

INSERT INTO `learning_stats` (`suite_id`, `createdOn`) VALUES
(1, '2026-03-14 12:40:32'),
(1, '2026-03-14 12:41:20'),
(1, '2026-03-14 12:42:24'),
(2, '2026-03-14 10:56:24'),
(2, '2026-03-14 12:42:41');

-- --------------------------------------------------------

--
-- Structure de la table `learning_suites`
--

CREATE TABLE `learning_suites` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `search` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`search`)),
  `articles_id` text DEFAULT NULL,
  `total_question` int(11) DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `learning_suites`
--

INSERT INTO `learning_suites` (`id`, `title`, `description`, `search`, `articles_id`, `total_question`, `language`, `created_by`, `created_at`) VALUES
(2, 'good girl', 'good description', '\"good search\"', '1,2,5', 3, 'ROR', 'lala', '2026-03-14 10:55:53'),
(3, 'good girl', 'good description', '\"good search\"', '23,19,13,23,5,25,21,23,3,19', 10, 'EN', 'lala', '2026-03-14 12:47:30');

-- --------------------------------------------------------

--
-- Structure de la table `mcq_scores`
--

CREATE TABLE `mcq_scores` (
  `id` int(11) NOT NULL,
  `suite_id` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `passed` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mcq_scores`
--

INSERT INTO `mcq_scores` (`id`, `suite_id`, `total`, `passed`, `created_at`) VALUES
(1, 2, 22, 11, '2026-03-14 02:32:28');

-- --------------------------------------------------------

--
-- Structure de la table `mcq_stats`
--

CREATE TABLE `mcq_stats` (
  `suite_id` int(10) NOT NULL,
  `createdOn` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mcq_stats`
--

INSERT INTO `mcq_stats` (`suite_id`, `createdOn`) VALUES
(1, '2026-03-14 10:54:01'),
(2, '2026-03-14 10:58:05'),
(2, '2026-03-14 12:43:29');

-- --------------------------------------------------------

--
-- Structure de la table `mcq_suites`
--

CREATE TABLE `mcq_suites` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `search` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`search`)),
  `articles_id` text DEFAULT NULL,
  `total_question` int(11) DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `mcq_suites`
--

INSERT INTO `mcq_suites` (`id`, `title`, `search`, `articles_id`, `total_question`, `language`, `created_by`, `created_at`) VALUES
(2, 'homme 1', '\"here is the big one\"', '1,2,5', 3, 'ROR', 'lala', '2026-03-14 10:57:47'),
(3, 'homme 2 go', '\"Duclair here is the big one\"', '', 10, 'ROR', 'lala', '2026-03-14 12:44:45'),
(4, 'homme 2 go', '\"Duclair here is the big one\"', '1,19,19,11,13,15,1,9,1,9', 10, 'EN', 'lala', '2026-03-14 12:46:13');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_code` varchar(10) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `theme` int(10) DEFAULT NULL,
  `language` varchar(5) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `createdOn` datetime DEFAULT NULL,
  `lastConnexion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_code`, `code`, `email`, `theme`, `language`, `user_type`, `createdOn`, `lastConnexion`) VALUES
(7, NULL, 'sososososo', NULL, 1, 'RER', 'guess', '2026-03-13 21:17:00', '2026-03-13 21:18:04'),
(8, NULL, 'tioladuc@yahoo.fr', 'tioladuc@yahoo.fr', 1, 'ROP', 'user', '2026-03-13 21:20:25', '2026-03-13 21:29:09'),
(9, NULL, NULL, NULL, 1, NULL, NULL, '2026-03-13 21:31:54', '2026-03-13 21:31:54'),
(10, NULL, 'gogo', NULL, 1, 'EN', 'guess', '2026-03-13 21:34:12', '2026-03-13 21:34:12'),
(11, '267708', 'lala', 'lala', 11, 'EN', 'user', '2026-03-13 21:34:50', '2026-03-14 12:47:30'),
(12, NULL, NULL, NULL, 1, NULL, NULL, '2026-03-14 10:50:22', '2026-03-14 10:50:22'),
(13, NULL, NULL, NULL, 1, NULL, NULL, '2026-03-14 10:51:45', '2026-03-14 10:51:45'),
(14, NULL, NULL, NULL, 1, NULL, NULL, '2026-03-14 10:53:24', '2026-03-14 10:53:24');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `data_learning`
--
ALTER TABLE `data_learning`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `data_mcq`
--
ALTER TABLE `data_mcq`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Index pour la table `learning_stats`
--
ALTER TABLE `learning_stats`
  ADD PRIMARY KEY (`suite_id`,`createdOn`);

--
-- Index pour la table `learning_suites`
--
ALTER TABLE `learning_suites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mcq_scores`
--
ALTER TABLE `mcq_scores`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mcq_stats`
--
ALTER TABLE `mcq_stats`
  ADD PRIMARY KEY (`suite_id`,`createdOn`);

--
-- Index pour la table `mcq_suites`
--
ALTER TABLE `mcq_suites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `data_learning`
--
ALTER TABLE `data_learning`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `data_mcq`
--
ALTER TABLE `data_mcq`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `learning_suites`
--
ALTER TABLE `learning_suites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `mcq_scores`
--
ALTER TABLE `mcq_scores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `mcq_suites`
--
ALTER TABLE `mcq_suites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
