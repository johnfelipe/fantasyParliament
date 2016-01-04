-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 04 Janvier 2016 à 08:27
-- Version du serveur: 5.5.45-cll-lve
-- Version de PHP: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `watchIntegrity`
--

-- --------------------------------------------------------

--
-- Structure de la table `Depute`
--

CREATE TABLE IF NOT EXISTS `Depute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Contenu de la table `Depute`
--

INSERT INTO `Depute` (`id`, `nom`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`) VALUES
(1, 'Samia Abbou', 1, 2, 5, 6, 5, 1),
(2, 'Badreddine Abdelkefi', 1, 5, 4, 4, 7, 1),
(3, 'Abir Abdelli', 0, 4, 0, 0, 0, 0),
(4, 'Asma Abou Hana', 0, 0, 2, 0, 0, 0),
(5, 'Mohamed Anouar Adhar', 0, 0, 3, 0, 0, 0),
(6, 'Oussama Al Saghir', 0, 5, 0, 0, 0, 7),
(7, 'Lotfi Ali', 0, 0, 2, 0, 0, 0),
(8, 'Aymen Aloui', 0, 0, 0, 0, 1, 0),
(9, 'Souhail Alouini', 0, 0, 0, 0, 0, 0),
(10, 'Nizar Amami', 0, 0, 0, 0, 0, 0),
(11, 'Ahmed Ameri', 0, 0, 0, 0, 0, 0),
(12, 'Hssan Amri', 0, 0, 0, 0, 0, 0),
(13, 'Noura Amri', 0, 0, 0, 0, 0, 0),
(14, 'Ammar Amroussia', 0, 0, 0, 0, 0, 0),
(15, 'Mbarka Aouania', 0, 0, 0, 0, 0, 0),
(16, 'Jihen Aouichi', 0, 0, 0, 0, 0, 0),
(17, 'Sahbi Atig', 0, 0, 0, 0, 0, 0),
(18, 'Wafa Attia', 0, 0, 0, 0, 0, 0),
(19, 'Chafik Ayadi', 0, 0, 0, 0, 0, 0),
(20, 'Chaker Ayadi', 0, 0, 0, 0, 0, 0),
(21, 'Fathi Ayadi', 0, 0, 0, 0, 0, 0),
(22, 'Dalila Babba', 0, 0, 0, 0, 0, 0),
(23, 'Kalthoum Badreddine', 0, 0, 0, 0, 0, 0),
(24, 'Chakib Bani', 0, 0, 0, 0, 0, 0),
(25, 'Walid Banneni', 0, 0, 0, 0, 0, 0),
(26, 'Salah Bargaoui', 0, 0, 0, 0, 0, 0),
(27, 'Tarek Barrak', 0, 0, 0, 0, 0, 0),
(28, 'Taher Battikh', 0, 0, 0, 0, 0, 0),
(29, 'Souad Bayouli', 0, 0, 0, 0, 0, 0),
(30, 'Mohamed Ali Bedoui', 0, 0, 0, 0, 0, 0),
(31, 'Ali Belakhoua', 0, 0, 0, 0, 0, 0),
(32, 'Abdelmoumen Belanes', 0, 0, 0, 0, 0, 0),
(33, 'Haykel Belgacem', 0, 0, 0, 0, 0, 0),
(34, 'Mondher Belhaj Ali', 0, 0, 0, 0, 0, 0),
(35, 'Bochra Belhaj Hamida', 0, 0, 0, 0, 0, 0),
(36, 'Moez Belhaj Rhouma', 0, 0, 0, 0, 0, 0),
(37, 'Lakhdhar Belhouchat', 0, 0, 0, 0, 0, 0),
(38, 'Aroua Ben Abbas', 0, 0, 0, 0, 0, 0),
(39, 'Najia Ben Abdelhafidh', 0, 0, 0, 0, 0, 0),
(40, 'Noureddine Ben Achour', 0, 0, 0, 0, 0, 0),
(41, 'Mustapha Ben Ahmed', 0, 0, 0, 0, 0, 0),
(42, 'Khawla Ben Aicha', 0, 0, 0, 0, 0, 0),
(43, 'Nadhir Ben Ammou', 0, 0, 0, 0, 0, 0),
(44, 'Bechir Ben Amor', 0, 0, 0, 0, 0, 0),
(45, 'Hedi Ben Braham', 0, 0, 0, 0, 0, 0),
(46, 'Abdelkader Ben Dhifallah', 0, 0, 0, 0, 0, 0),
(47, 'Mahbouba Ben Dhifallah', 0, 0, 0, 0, 0, 0),
(48, 'Faouzia Ben Fodha', 0, 0, 0, 0, 0, 0),
(49, 'Ramzi Ben Fraj', 0, 0, 0, 0, 0, 0),
(50, 'Sahbi Ben Fraj', 0, 0, 0, 0, 0, 0),
(51, 'Mehdi Ben Gharbia', 0, 0, 0, 0, 0, 0),
(52, 'El Khansa Ben Harrath', 0, 0, 0, 0, 0, 0),
(53, 'Rabha Ben Hassine', 0, 0, 0, 0, 0, 0),
(54, 'Ibtihej Ben Helal', 0, 0, 0, 0, 0, 0),
(55, 'Emna Ben Hmayed', 0, 0, 0, 0, 0, 0),
(56, 'Ismail Ben Mahmoud', 0, 0, 0, 0, 0, 0),
(57, 'Imen Ben Mhamed', 0, 0, 0, 0, 0, 0),
(58, 'Mohamed Fadhel Ben Omrane', 0, 0, 0, 0, 0, 0),
(59, 'Ibrahim Ben Said', 0, 0, 0, 0, 0, 0),
(60, 'Ali Ben Salem', 0, 0, 0, 0, 0, 0),
(61, 'Mohamed Ben Salem', 0, 0, 0, 0, 0, 0),
(62, 'Mohamed Ben Souf', 0, 0, 0, 0, 0, 0),
(63, 'Ali Bennour', 0, 0, 0, 0, 0, 0),
(64, 'Mohamed Kamel Besbes', 0, 0, 0, 0, 0, 0),
(65, 'Slim Besbes', 0, 0, 0, 0, 0, 0),
(66, 'Noureddine Bhiri', 0, 0, 0, 0, 0, 0),
(67, 'Nozha Biaoui', 0, 0, 0, 0, 0, 0),
(68, 'Leila Bougatef', 0, 0, 0, 0, 0, 0),
(69, 'Sameh Bouhaouel', 0, 0, 0, 0, 0, 0),
(70, 'Meriem Boujbel', 0, 0, 0, 0, 0, 0),
(71, 'Houssem Bounenni', 0, 0, 0, 0, 0, 0),
(72, 'Heger Bouzemmi', 0, 0, 0, 0, 0, 0),
(73, 'Monia Brahim', 0, 0, 0, 0, 0, 0),
(74, 'Zeineb Brahmi', 0, 0, 0, 0, 0, 0),
(75, 'Fathi Chamkhi', 0, 0, 0, 0, 0, 0),
(76, 'Naceur Channoufi', 0, 0, 0, 0, 0, 0),
(77, 'Ghazi Chaouachi', 0, 0, 0, 0, 0, 0),
(78, 'Ridha Charfeddine', 0, 0, 0, 0, 0, 0),
(79, 'Abderraouf Chebbi', 0, 0, 0, 0, 0, 0),
(80, 'Abderraouf Cherif', 0, 0, 0, 0, 0, 0),
(81, 'Abdennaceur Chouikh', 0, 0, 0, 0, 0, 0),
(82, 'Khaled Chouket', 0, 0, 0, 0, 0, 0),
(83, 'Abderrazak Chraiet', 0, 0, 0, 0, 0, 0),
(84, 'Iyad Dahmani', 0, 0, 0, 0, 0, 0),
(85, 'Imed Daimi', 0, 0, 0, 0, 0, 0),
(86, 'Sameh Dammak', 0, 0, 0, 0, 0, 0),
(87, 'Jamila Debbech', 0, 0, 0, 0, 0, 0),
(88, 'Sabri Dekhil', 0, 0, 0, 0, 0, 0),
(89, 'Ridha Dellai', 0, 0, 0, 0, 0, 0),
(90, 'Kamel Dhaouadi', 0, 0, 0, 0, 0, 0),
(91, 'Samir Dilou', 0, 0, 0, 0, 0, 0),
(92, 'Belgacem Dkhili', 0, 0, 0, 0, 0, 0),
(93, 'Noomane El Euch', 0, 0, 0, 0, 0, 0),
(94, 'Mohamed El Hamdi', 0, 0, 0, 0, 0, 0),
(95, 'Abderraouf El May', 0, 0, 0, 0, 0, 0),
(96, 'Bechir Ellazzem', 0, 0, 0, 0, 0, 0),
(97, 'Mohamed Ennaceur', 0, 0, 0, 0, 0, 0),
(98, 'Tahar Fdhil', 0, 0, 0, 0, 0, 0),
(99, 'Hatem Ferjani', 0, 0, 0, 0, 0, 0),
(100, 'Tarek Fetiti', 0, 0, 0, 0, 0, 0),
(101, 'Sami Fetnassi', 0, 0, 0, 0, 0, 0),
(102, 'Chahida Fraj', 0, 0, 0, 0, 0, 0),
(103, 'Mohamed Frikha', 0, 0, 0, 0, 0, 0),
(104, 'Mohamed Ghannem', 0, 0, 0, 0, 0, 0),
(105, 'Lamia Gharbi', 0, 0, 0, 0, 0, 0),
(106, 'Mohamed Jalel Ghedira', 0, 0, 0, 0, 0, 0),
(107, 'Sabrine Goubantini', 0, 0, 0, 0, 0, 0),
(108, 'Mahmoud Gouiaa', 0, 0, 0, 0, 0, 0),
(109, 'Mohamed Hedi Gueddich', 0, 0, 0, 0, 0, 0),
(110, 'Latifa Habachi', 0, 0, 0, 0, 0, 0),
(111, 'Adnane Hajji', 0, 0, 0, 0, 0, 0),
(112, 'Mourad Hamaidi', 0, 0, 0, 0, 0, 0),
(113, 'Mounir Hamdi', 0, 0, 0, 0, 0, 0),
(114, 'Salem Hamdi', 0, 0, 0, 0, 0, 0),
(115, 'Jilani Hammami', 0, 0, 0, 0, 0, 0),
(116, 'Hela Hammi', 0, 0, 0, 0, 0, 0),
(117, 'Leila Hamrouni', 0, 0, 0, 0, 0, 0),
(118, 'Mohamed Kamel Hamzaoui', 0, 0, 0, 0, 0, 0),
(119, 'Mongi Harbaoui', 0, 0, 0, 0, 0, 0),
(120, 'Kamel Harraghi', 0, 0, 0, 0, 0, 0),
(121, 'Ons Hattab', 0, 0, 0, 0, 0, 0),
(122, 'Karim Helali', 0, 0, 0, 0, 0, 0),
(123, 'Mabrouk Hrizi', 0, 0, 0, 0, 0, 0),
(124, 'Mohsen Hssan', 0, 0, 0, 0, 0, 0),
(125, 'Zohra Idriss', 0, 0, 0, 0, 0, 0),
(126, 'Riadh Jaidane', 0, 0, 0, 0, 0, 0),
(127, 'Walid Jalled', 0, 0, 0, 0, 0, 0),
(128, 'Naoufel Jammali', 0, 0, 0, 0, 0, 0),
(129, 'Houcine Jaziri', 0, 0, 0, 0, 0, 0),
(130, 'Mohamed Ennaceur Jbira', 0, 0, 0, 0, 0, 0),
(131, 'Ibtissem Jebabli', 0, 0, 0, 0, 0, 0),
(132, 'Basma Jebali', 0, 0, 0, 0, 0, 0),
(133, 'Taoufik Jemli', 0, 0, 0, 0, 0, 0),
(134, 'Neji Jmal', 0, 0, 0, 0, 0, 0),
(135, 'Jamila Jouini', 0, 0, 0, 0, 0, 0),
(136, 'Youssef Jouini', 0, 0, 0, 0, 0, 0),
(137, 'Mohamed Amine Kahloul', 0, 0, 0, 0, 0, 0),
(138, 'Mahmoud Kahri', 0, 0, 0, 0, 0, 0),
(139, 'Hayet Kebaier', 0, 0, 0, 0, 0, 0),
(140, 'Abada Kefi', 0, 0, 0, 0, 0, 0),
(141, 'Safia Khalfi', 0, 0, 0, 0, 0, 0),
(142, 'Hmed Khaskhoussi', 0, 0, 0, 0, 0, 0),
(143, 'Habib Khedher', 0, 0, 0, 0, 0, 0),
(144, 'Faycel Khelifa', 0, 0, 0, 0, 0, 0),
(145, 'Bechir Khelifi', 0, 0, 0, 0, 0, 0),
(146, 'Imed Khemiri', 0, 0, 0, 0, 0, 0),
(147, 'Mohamed Ramzi Khmiss', 0, 0, 0, 0, 0, 0),
(148, 'Abdelaziz Kotti', 0, 0, 0, 0, 0, 0),
(149, 'Soulef Ksantini', 0, 0, 0, 0, 0, 0),
(150, 'Khemais Ksila', 0, 0, 0, 0, 0, 0),
(151, 'Ferida Laabidi', 0, 0, 0, 0, 0, 0),
(152, 'Meherzia Laabidi', 0, 0, 0, 0, 0, 0),
(153, 'Heger Laaroussi', 0, 0, 0, 0, 0, 0),
(154, 'Salem Labiadh', 0, 0, 0, 0, 0, 0),
(155, 'Mohamed Lakhdhar Lajili', 0, 0, 0, 0, 0, 0),
(156, 'Zied Lakhdhar', 0, 0, 0, 0, 0, 0),
(157, 'Ali Laraiedh', 0, 0, 0, 0, 0, 0),
(158, 'Ameur Laraiedh', 0, 0, 0, 0, 0, 0),
(159, 'Lajmi Lourimi', 0, 0, 0, 0, 0, 0),
(160, 'Maher Madhioub', 0, 0, 0, 0, 0, 0),
(161, 'Zouhair Maghzaoui', 0, 0, 0, 0, 0, 0),
(162, 'Mohamed Mahjoub', 0, 0, 0, 0, 0, 0),
(163, 'Rim Mahjoub', 0, 0, 0, 0, 0, 0),
(164, 'Wafa Makhlouf', 0, 0, 0, 0, 0, 0),
(165, 'Issam Matoussi', 0, 0, 0, 0, 0, 0),
(166, 'Ahmed Mechergui', 0, 0, 0, 0, 0, 0),
(167, 'Taieb Medni', 0, 0, 0, 0, 0, 0),
(168, 'Abdellatif Mekki', 0, 0, 0, 0, 0, 0),
(169, 'Sana Mersni', 0, 0, 0, 0, 0, 0),
(170, 'Lamia Mlayah', 0, 0, 0, 0, 0, 0),
(171, 'Riadh Mouakhar', 0, 0, 0, 0, 0, 0),
(172, 'Ikram Moulahi', 0, 0, 0, 0, 0, 0),
(173, 'Abdelfattah Mourou', 0, 0, 0, 0, 0, 0),
(174, 'Noureddine Mrabti', 0, 0, 0, 0, 0, 0),
(175, 'Fatma Mseddi', 0, 0, 0, 0, 0, 0),
(176, 'Lotfi Nabli', 0, 0, 0, 0, 0, 0),
(177, 'Brahim Nacef', 0, 0, 0, 0, 0, 0),
(178, 'Hassouna Nasfi', 0, 0, 0, 0, 0, 0),
(179, 'Hela Omrane', 0, 0, 0, 0, 0, 0),
(180, 'Hayet Omri', 0, 0, 0, 0, 0, 0),
(181, 'Leila Oueslati', 0, 0, 0, 0, 0, 0),
(182, 'Leila Ouled Ali', 0, 0, 0, 0, 0, 0),
(183, 'Imed Ouled Jebril', 0, 0, 0, 0, 0, 0),
(184, 'Sayida Ounissi', 0, 0, 0, 0, 0, 0),
(185, 'Mohamed Rachdi Bouguerra', 0, 0, 0, 0, 0, 0),
(186, 'Mongi Rahoui', 0, 0, 0, 0, 0, 0),
(187, 'Zouheir Rajbi', 0, 0, 0, 0, 0, 0),
(188, 'Najla Saadaoui', 0, 0, 0, 0, 0, 0),
(189, 'Mohamed Saidane', 0, 0, 0, 0, 0, 0),
(190, 'Ahmed Saidi', 0, 0, 0, 0, 0, 0),
(191, 'Sana Salhi', 0, 0, 0, 0, 0, 0),
(192, 'Ahmed Seddik', 0, 0, 0, 0, 0, 0),
(193, 'Moncef Sellami', 0, 0, 0, 0, 0, 0),
(194, 'Mohamed Sidhom', 0, 0, 0, 0, 0, 0),
(195, 'Houda Slim', 0, 0, 0, 0, 0, 0),
(196, 'Mohamed Mohsen Soudani', 0, 0, 0, 0, 0, 0),
(197, 'Amal Souid', 0, 0, 0, 0, 0, 0),
(198, 'Olfa Soukri', 0, 0, 0, 0, 0, 0),
(199, 'Hedi Soula', 0, 0, 0, 0, 0, 0),
(200, 'Nawel Tayech', 0, 0, 0, 0, 0, 0),
(201, 'Faycel Tebini', 0, 0, 0, 0, 0, 0),
(202, 'Houda Tekaya', 0, 0, 0, 0, 0, 0),
(203, 'Rim Thairi', 0, 0, 0, 0, 0, 0),
(204, 'Mohamed Nejib Torjmane', 0, 0, 0, 0, 0, 0),
(205, 'Sofien Toubel', 0, 0, 0, 0, 0, 0),
(206, 'Radhia Toumi', 0, 0, 0, 0, 0, 0),
(207, 'Mohamed Troudi', 0, 0, 0, 0, 0, 0),
(208, 'Dorra Yaacoubi', 0, 0, 0, 0, 0, 0),
(209, 'Hssine Yahyaoui', 0, 0, 0, 0, 0, 0),
(210, 'Lilia Younes Ksibi', 0, 0, 0, 0, 0, 0),
(211, 'Leila Zahaf', 0, 0, 0, 0, 0, 0),
(212, 'Nadia Zangar', 0, 0, 0, 0, 0, 0),
(213, 'Souad Zaouali', 0, 0, 0, 0, 0, 0),
(214, 'Ridha Zghondi', 0, 0, 0, 0, 0, 0),
(215, 'Yamina Zoghlami', 0, 0, 0, 0, 0, 0),
(216, 'Hafedh Zouari', 0, 0, 0, 0, 0, 0),
(217, 'Mohamed Zrig', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `depute_history`
--

CREATE TABLE IF NOT EXISTS `depute_history` (
  `id` int(11) NOT NULL,
  `nom` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `r5` int(11) NOT NULL,
  `r6` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `depute_history`
--

INSERT INTO `depute_history` (`id`, `nom`, `week`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`) VALUES
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 0, 1, 1, 1, 1, 2, 3),
(1, 0, 3, 1, 1, 1, 1, 2, 3),
(2, 0, 3, 1, 2, 3, 4, 5, 6),
(2, 0, 3, 0, 0, 1, 1, 2, 2),
(2, 0, 3, 0, 0, 1, 1, 2, 2),
(1, 0, 3, 0, 0, 1, 1, 2, 2),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 3, 0, 0, 0, 0, 0, 0),
(1, 0, 1, 0, 0, 0, 0, 0, 0),
(1, 0, 1, 0, 0, 0, 0, 0, 0),
(1, 0, 1, 2, 4, 1, 1, 2, 3),
(2, 0, 1, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Equipe`
--

CREATE TABLE IF NOT EXISTS `Equipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `deputes` varchar(100) NOT NULL,
  `user` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `Equipe`
--

INSERT INTO `Equipe` (`id`, `name`, `score`, `deputes`, `user`) VALUES
(1, 'alfariq', 100, '1,2,3,4,5,6,7,8,9,10,11', '1'),
(3, 'ossec_hackers', 150, '10,155,12,14,19,85,45,25,34,10', '2'),
(5, 'loosers', 20, '1,45,12,25,75,95,12,3,5,9,8', '3'),
(7, 'hello', 0, '1,9,33,25,17,41,26,34,42,49,50', '2147483647'),
(8, '', 0, '', '2147483647'),
(9, 'vik', 0, '33,41,50,42,34,35,10,9,27,19,43', '2147483647'),
(10, 'vik', 0, '33,41,50,42,34,35,10,9,27,19,43', '2147483647'),
(11, 'mop', 0, '1,9,33,47,54,49,41,17,25,26,34', '2147483647'),
(12, 'mmmpmm', 0, '1,9,54,41,49,33,35,17,25,34,50', '2147483647'),
(13, 'mmmpmm', 0, '1,9,54,41,49,33,35,17,25,34,50', '10208593520941268');

-- --------------------------------------------------------

--
-- Structure de la table `equipe_history`
--

CREATE TABLE IF NOT EXISTS `equipe_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipe` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `week` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `equipe_history`
--

INSERT INTO `equipe_history` (`id`, `equipe`, `user`, `score`, `week`) VALUES
(1, 1, '10208593520941268', 100, 'week1'),
(2, 1, '10208593520941268', 150, 'week2');

-- --------------------------------------------------------

--
-- Structure de la table `top_flop`
--

CREATE TABLE IF NOT EXISTS `top_flop` (
  `id` int(11) NOT NULL,
  `top` int(11) NOT NULL,
  `flop` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `top_flop`
--

INSERT INTO `top_flop` (`id`, `top`, `flop`) VALUES
(1, 5, 4),
(2, 8, 3),
(3, 0, 0),
(4, 0, 0),
(5, 0, 0),
(6, 0, 0),
(7, 0, 0),
(8, 0, 0),
(9, 0, 0),
(10, 0, 0),
(11, 0, 0),
(12, 0, 0),
(13, 0, 0),
(14, 0, 0),
(15, 0, 0),
(16, 0, 0),
(17, 0, 0),
(18, 0, 0),
(19, 0, 0),
(20, 0, 0),
(21, 0, 0),
(22, 0, 0),
(23, 0, 0),
(24, 0, 0),
(25, 0, 0),
(26, 0, 0),
(27, 0, 0),
(28, 0, 0),
(29, 0, 0),
(30, 0, 0),
(31, 0, 0),
(32, 0, 0),
(33, 0, 0),
(34, 0, 0),
(35, 0, 0),
(36, 0, 0),
(37, 0, 0),
(38, 0, 0),
(39, 0, 0),
(40, 0, 0),
(41, 0, 0),
(42, 0, 0),
(43, 0, 0),
(44, 0, 0),
(45, 0, 0),
(46, 0, 0),
(47, 0, 0),
(48, 0, 0),
(49, 0, 0),
(50, 0, 0),
(51, 0, 0),
(52, 0, 0),
(53, 0, 0),
(54, 0, 0),
(55, 0, 0),
(56, 0, 0),
(57, 0, 0),
(58, 0, 0),
(59, 0, 0),
(60, 0, 0),
(61, 0, 0),
(62, 0, 0),
(63, 0, 0),
(64, 0, 0),
(65, 0, 0),
(66, 0, 0),
(67, 0, 0),
(68, 0, 0),
(69, 0, 0),
(70, 0, 0),
(71, 0, 0),
(72, 0, 0),
(73, 0, 0),
(74, 0, 0),
(75, 0, 0),
(76, 0, 0),
(77, 0, 0),
(78, 0, 0),
(79, 0, 0),
(80, 0, 0),
(81, 0, 0),
(82, 0, 0),
(83, 0, 0),
(84, 0, 0),
(85, 0, 0),
(86, 0, 0),
(87, 0, 0),
(88, 0, 0),
(89, 0, 0),
(90, 0, 0),
(91, 0, 0),
(92, 0, 0),
(93, 0, 0),
(94, 0, 0),
(95, 0, 0),
(96, 0, 0),
(97, 0, 0),
(98, 0, 0),
(99, 0, 0),
(100, 0, 0),
(101, 0, 0),
(102, 0, 0),
(103, 0, 0),
(104, 0, 0),
(105, 0, 0),
(106, 0, 0),
(107, 0, 0),
(108, 0, 0),
(109, 0, 0),
(110, 0, 0),
(111, 0, 0),
(112, 0, 0),
(113, 0, 0),
(114, 0, 0),
(115, 0, 0),
(116, 0, 0),
(117, 0, 0),
(118, 0, 0),
(119, 0, 0),
(120, 0, 0),
(121, 0, 0),
(122, 0, 0),
(123, 0, 0),
(124, 0, 0),
(125, 0, 0),
(126, 0, 0),
(127, 0, 0),
(128, 0, 0),
(129, 0, 0),
(130, 0, 0),
(131, 0, 0),
(132, 0, 0),
(133, 0, 0),
(134, 0, 0),
(135, 0, 0),
(136, 0, 0),
(137, 0, 0),
(138, 0, 0),
(139, 0, 0),
(140, 0, 0),
(141, 0, 0),
(142, 0, 0),
(143, 0, 0),
(144, 0, 0),
(145, 0, 0),
(146, 0, 0),
(147, 0, 0),
(148, 0, 0),
(149, 0, 0),
(150, 0, 0),
(151, 0, 0),
(152, 0, 0),
(153, 0, 0),
(154, 0, 0),
(155, 0, 0),
(156, 0, 0),
(157, 0, 0),
(158, 0, 0),
(159, 0, 0),
(160, 0, 0),
(161, 0, 0),
(162, 0, 0),
(163, 0, 0),
(164, 0, 0),
(165, 0, 0),
(166, 0, 0),
(167, 0, 0),
(168, 0, 0),
(169, 0, 0),
(170, 0, 0),
(171, 0, 0),
(172, 0, 0),
(173, 0, 0),
(174, 0, 0),
(175, 0, 0),
(176, 0, 0),
(177, 0, 0),
(178, 0, 0),
(179, 0, 0),
(180, 0, 0),
(181, 0, 0),
(182, 0, 0),
(183, 0, 0),
(184, 0, 0),
(185, 0, 0),
(186, 0, 0),
(187, 0, 0),
(188, 0, 0),
(189, 0, 0),
(190, 0, 0),
(191, 0, 0),
(192, 0, 0),
(193, 0, 0),
(194, 0, 0),
(195, 0, 0),
(196, 0, 0),
(197, 0, 0),
(198, 0, 0),
(199, 0, 0),
(200, 0, 0),
(201, 0, 0),
(202, 0, 0),
(203, 0, 0),
(204, 0, 0),
(205, 0, 0),
(206, 0, 0),
(207, 0, 0),
(208, 0, 0),
(209, 0, 0),
(210, 0, 0),
(211, 0, 0),
(212, 0, 0),
(213, 0, 0),
(214, 0, 0),
(215, 0, 0),
(216, 0, 0),
(217, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `Users`
--

CREATE TABLE IF NOT EXISTS `Users` (
  `UID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Fuid` varchar(100) NOT NULL,
  `Ffname` varchar(60) NOT NULL,
  `Femail` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`UID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `Users`
--

INSERT INTO `Users` (`UID`, `Fuid`, `Ffname`, `Femail`) VALUES
(2, '10201591933756231', 'Atef Arfaoui', ''),
(3, '10208593520941268', 'Hamza Sayadi', ''),
(4, '1918898874993188', 'Ada Rda', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
