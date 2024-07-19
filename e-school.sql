-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 19, 2024 at 08:19 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-school`
--

-- --------------------------------------------------------

--
-- Table structure for table `assigne`
--

CREATE TABLE `assigne` (
  `id_assigne` int NOT NULL,
  `id_user` int NOT NULL,
  `id_cours` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `assigne`
--

INSERT INTO `assigne` (`id_assigne`, `id_user`, `id_cours`) VALUES
(1, 5, 4),
(2, 6, 4),
(3, 2, 1),
(4, 5, 1),
(5, 6, 1),
(6, 9, 1),
(7, 9, 2),
(8, 2, 2),
(10, 25, 6),
(11, 24, 6),
(12, 24, 3),
(13, 25, 3),
(14, 26, 7),
(15, 25, 7),
(16, 24, 7),
(17, 2, 7),
(18, 24, 1),
(19, 25, 1),
(20, 26, 1),
(21, 2, 6),
(22, 26, 6),
(23, 2, 3),
(24, 2, 4),
(25, 28, 7),
(26, 28, 6),
(27, 28, 1),
(28, 31, 1),
(29, 31, 4);

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id_commentaire` int NOT NULL,
  `avis` varchar(800) DEFAULT NULL,
  `notation` smallint DEFAULT NULL,
  `id_etape` int NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id_commentaire`, `avis`, `notation`, `id_etape`, `id_user`) VALUES
(1, 'Parfait! Très bien expliqué et facile à appliquer', 5, 1, 2),
(2, 'Un peu complexe au début, mais bien expliqué', 4, 2, 2),
(3, 'J\'adore Javascript!!!', 5, 3, 2),
(4, 'J\'ai tout compris :)', 4, 1, 5),
(5, 'Trop compliqué pour moi, il manque de la pratique :(', 2, 2, 5),
(6, 'Nul', 1, 2, 6),
(7, 'Génial!', 5, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cours`
--

CREATE TABLE `cours` (
  `id_cours` int NOT NULL,
  `titre` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `id_user` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cours`
--

INSERT INTO `cours` (`id_cours`, `titre`, `description`, `id_user`) VALUES
(1, 'Introduction au Développement Web', 'Ce cours offre une introduction complète au développement web, couvrant les bases du HTML, CSS et JavaScript. Il est conçu pour les débutants sans expérience préalable. Débutant', 7),
(2, 'Développement Front-End Avancé', 'Ce cours approfondit les concepts avancés du développement front-end, y compris les frameworks modernes comme React et Vue.js.', 7),
(3, 'Développement Back-End avec Node.js', 'Ce cours se concentre sur le développement back-end en utilisant Node.js et Express.js pour construire des applications web robustes.', 8),
(4, 'Perfectionnement en CSS', 'Ce cours vous apprendra à maîtriser CSS3 et à augmenter votre rapidité à coder.', 7),
(6, 'Création d\'un Site Web Dynamique avec PHP et MySQL', 'Ce cours couvre les bases de la création de sites web dynamiques en utilisant PHP et MySQL. Vous apprendrez à créer des formulaires interactifs, à interagir avec une base de données et à afficher des données dynamiques sur une page web.', 8),
(7, 'Développement Back/ PHP Symfony', 'Ce cours présente le framework php Symfony.', 27);

-- --------------------------------------------------------

--
-- Table structure for table `etapes`
--

CREATE TABLE `etapes` (
  `id_etape` int NOT NULL,
  `titre` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `contenu` text,
  `id_user` int NOT NULL,
  `id_cours` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `etapes`
--

INSERT INTO `etapes` (`id_etape`, `titre`, `description`, `contenu`, `id_user`, `id_cours`) VALUES
(1, 'Qu\'est-ce que HTML?', 'Cette étape explique les bases du HTML et son rôle dans le développement web.', '<p>Introduction au HTML: D&eacute;finition du HTML, historique et importance.</p>\r\n<p>Structure de base d\'une page HTML: Doctype, balises html, head, body.</p>\r\n<p>Les balises HTML courantes: p pour les paragraphes, h1 &agrave; h6 pour les titres, div pour les divisions,&nbsp; pour les liens, img pour les images, etc.</p>', 7, 1),
(2, 'Qu\'est-ce que CSS?', 'Cette étape introduit le CSS et comment il est utilisé pour styliser les pages web.', '<p>Introduction au CSS: D&eacute;finition du CSS, r&ocirc;le dans le d&eacute;veloppement web.</p>\r\n<p>S&eacute;lecteurs et propri&eacute;t&eacute;s CSS: S&eacute;lecteurs de base (&eacute;l&eacute;ment, classe, id), propri&eacute;t&eacute;s (couleur, police, marges, etc.).</p>\r\n<p>Ajouter du style aux pages HTML: Inclusion du CSS dans HTML (inline, internal, external).</p>', 7, 1),
(3, 'Qu\'est-ce que JavaScript?', 'Cette étape couvre les bases de JavaScript et son utilisation pour rendre les pages web interactives.', '<p>Introduction &agrave; JavaScript: D&eacute;finition de JavaScript, utilisation et int&eacute;gration dans les pages HTML.</p>\r\n<p>Variables et types de donn&eacute;es: D&eacute;claration de variables (var, let, const), types de donn&eacute;es (num&eacute;riques, cha&icirc;nes de caract&egrave;res, bool&eacute;ens).</p>\r\n<p>Fonctions et &eacute;v&eacute;nements: Cr&eacute;ation de fonctions, gestion des &eacute;v&eacute;nements (clic, survol).</p>', 7, 1),
(4, 'Qu\'est-ce que React?', 'Apprendre les bases de React, un des frameworks JavaScript les plus populaires pour la construction d\'interfaces utilisateur.', '<p>Introduction &agrave; React: Concept de composants, avantages de React.</p>\r\n<p>Composants et Props: Cr&eacute;ation de composants, passage de donn&eacute;es avec les props.</p>\r\n<p>&nbsp;&Eacute;tat et cycle de vie des composants: Gestion de l\'&eacute;tat (useState), m&eacute;thodes de cycle de vie (useEffect).</p>', 7, 2),
(5, 'Qu\'est-ce que Vue.js?', 'Apprendre les bases de Vue.js, un framework progressif pour la construction d\'interfaces utilisateur.', '<p>Introduction &agrave; Vue.js: Philosophie de Vue.js, avantages.</p>\r\n<p>Syntaxe de base et directives: Directives (v-bind, v-model), syntaxe de template.</p>\r\n<p>Composants et gestion de l\'&eacute;tat: Cr&eacute;ation de composants, gestion de l\'&eacute;tat avec Vuex.</p>', 7, 2),
(6, 'Utilisation de Webpack et Babel', 'Cette étape couvre les outils de build modernes comme Webpack et Babel, essentiels pour les projets front-end.', '<p>Introduction &agrave; Webpack: Concept de bundling, configuration de base.</p>\r\n<p>Configuration de Babel: Utilisation de Babel pour la transpilation, configuration de presets.</p>\r\n<p>Processus de build et optimisation: Optimisation des builds, minification, gestion des assets.</p>', 7, 2),
(7, 'Qu\'est-ce que Node.js?', 'Apprendre les bases de Node.js, un environnement d\'exécution JavaScript côté serveur.', '<p>Introduction &agrave; Node.js: Historique, avantages et utilisation.</p>\r\n<p>Modules et NPM: Utilisation des modules Node.js, gestion des d&eacute;pendances avec NPM.</p>\r\n<p>Cr&eacute;ation d\'un serveur basique: Mise en place d\'un serveur HTTP simple, gestion des requ&ecirc;tes et r&eacute;ponses.</p>', 7, 3),
(8, 'Qu\'est-ce qu\'Express.js?', 'Apprendre à utiliser Express.js pour construire des applications web avec Node.js.', '<p>Introduction &agrave; Express.js: Avantages et utilisation d\'Express.js.</p>\r\n<p>Routes et middleware: D&eacute;finition des routes, utilisation de middleware pour g&eacute;rer les requ&ecirc;tes.</p>\r\n<p>Gestion des requ&ecirc;tes et r&eacute;ponses: R&eacute;cup&eacute;ration des donn&eacute;es des requ&ecirc;tes, envoi des r&eacute;ponses au client.</p>', 7, 3),
(9, 'Intégration avec MongoDB et Création d\'API REST', 'Cette étape couvre l\'intégration avec MongoDB et la création d\'API RESTful.', '<p>Introduction &agrave; MongoDB: Avantages de MongoDB, installation et configuration de base.</p>\r\n<p>CRUD avec MongoDB: Op&eacute;rations de base (Create, Read, Update, Delete) avec MongoDB et Mongoose.</p>\r\n<p>Cr&eacute;ation d\'API REST avec Express.js: Mise en place d\'une API REST, d&eacute;finition des endpoints, gestion des m&eacute;thodes HTTP (GET, POST, PUT, DELETE).</p>', 7, 3),
(10, 'Les sélecteurs CSS', 'Description des sélecteurs css et de leur utilisation.', '<p style=\"line-height: 2;\">Donec a nibh ut elit vestibulum tristique. Integer at pede. Cras volutpat varius magna. Phasellus eu wisi. Praesent risus justo, lobortis eget, scelerisque ac, aliquet in, dolor. Proin id leo. Nunc iaculis, mi vitae accumsan commodo, neque sem lacinia nulla, quis vestibulum justo sem in eros. Quisque sed massa. Morbi lectus ipsum, vulputate a, mollis ut, accumsan placerat, tellus. Nullam in wisi. Vivamus eu ligula a nunc accumsan congue. Suspendisse ac libero. Aliquam erat volutpat. Donec augue. Nunc venenatis fringilla nibh. Fusce accumsan pulvinar justo. Nullam semper, dui ut dignissim auctor, orci libero fringilla massa, blandit pulvinar pede tortor id magna. Nunc adipiscing justo sed velit tincidunt fermentum. Integer placerat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed in massa. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Phasellus tempus aliquam risus. Aliquam rutrum purus at metus. Donec posuere odio at erat. Nam non nibh. Phasellus ligula. Quisque venenatis lectus in augue. Sed vestibulum dapibus neque.</p>\r\n<p style=\"line-height: 2;\">&nbsp;</p>\r\n<p style=\"line-height: 2;\">Ut auctor, augue porta dignissim vestibulum, arcu diam lobortis velit, vel scelerisque risus augue sagittis risus. Maecenas eu justo. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris congue ligula eget tortor. Nullam laoreet urna sed enim. Donec eget eros ut eros volutpat convallis. Praesent turpis. Integer mauris diam, elementum quis, egestas ac, rutrum vel, orci. Nulla facilisi. Quisque adipiscing, nulla vitae elementum porta, sem urna volutpat leo, sed porta enim risus sed massa. Integer ac enim quis diam sodales luctus. Ut eget eros a ligula commodo ultricies. Donec eu urna viverra dolor hendrerit feugiat. Aliquam ac orci vel eros congue pharetra. Quisque rhoncus, justo eu volutpat faucibus, augue leo posuere lacus, a rhoncus purus pede vel est. Proin ultrices enim.</p>\r\n<p style=\"line-height: 2;\">&nbsp;</p>\r\n<p style=\"line-height: 2;\">Aenean sem dolor, fermentum nec, gravida hendrerit, mattis eget, felis. Nullam non diam vitae mi lacinia consectetuer. Fusce non massa eget quam luctus posuere. Aenean vulputate velit. Quisque et dolor. Donec ipsum tortor, rutrum quis, mollis eu, mollis a, pede. Donec nulla. Duis molestie. Duis lobortis commodo purus. Pellentesque vel quam. Ut congue congue risus. Sed ligula. Aenean dictum pede vitae felis. Donec sit amet nibh. Maecenas eu orci. Quisque gravida quam sed massa.</p>', 7, 4),
(11, 'Styliser une case à cocher', 'Apprenez à personnaliser des checkboxs', '<p><span style=\"background-color: rgb(255, 255, 255);\">Pour apprendre &agrave; personnaliser des checkboxs suivez ce </span><span style=\"background-color: rgb(255, 255, 255);\"><a style=\"background-color: rgb(255, 255, 255);\" href=\"https://grafikart.fr/tutoriels/checkbox-css-423\" target=\"_blank\" rel=\"noopener\">tutoriel.</a></span></p>', 7, 4),
(12, 'Display: grid', 'Ce cours propose de découvrir le fonctionnement des grilles en CSS.', '<p style=\"line-height: 2;\">Nous vous proposons de suivre ce <a href=\"https://youtu.be/2H602-zG62w\" target=\"_blank\" rel=\"noopener\">tutoriel</a> d\'une dur&eacute;e de 31 minutes.</p>\r\n<p style=\"line-height: 2;\">Pour en savoir plus vous pouvez consulter&nbsp;<a href=\"https://developer.mozilla.org/fr/docs/Web/CSS/CSS_grid_layout\" target=\"_blank\" rel=\"noopener\">la documentation officielle MDN.</a></p>\r\n<p style=\"line-height: 2;\">Exercez-vous aux grilles CSS en arrosant des plantes ! <a href=\"http://cssgridgarden.com/#fr\" target=\"_blank\" rel=\"noopener\">Acc&eacute;dez &agrave; grid garden</a>.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 7, 4),
(13, 'Les Bases de PHP', 'Cette étape introduit PHP, un langage de script côté serveur, et enseigne les concepts de base, y compris les variables, les opérateurs et les structures de contrôle.', '<ul>\r\n<li><strong>Qu\'est-ce que PHP ?</strong>\r\n<ul>\r\n<li>PHP (Hypertext Preprocessor) est un langage de script c&ocirc;t&eacute; serveur utilis&eacute; pour cr&eacute;er des pages web dynamiques.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li><strong>Les bases de PHP :</strong>\r\n<ul>\r\n<li>Variables, types de donn&eacute;es, op&eacute;rateurs, conditions, boucles.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li><strong>Exemple pratique :</strong>\r\n<div class=\"dark bg-gray-950 rounded-md border-[0.5px] border-token-border-medium\">\r\n<div class=\"flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md\">\r\n<p>&lt;?php<br>$nom = \"Jean\";<br>$age = 25;</p>\r\n<p>echo \"Nom: \" . $nom . \"&lt;br&gt;\";<br>echo \"Age: \" . $age;<br>?&gt;</p>\r\n</div>\r\n</div>\r\n</li>\r\n</ul>', 8, 6),
(14, 'Connexion à une Base de Données MySQL', 'Cette étape enseigne comment utiliser PHP pour se connecter à une base de données MySQL, exécuter des requêtes SQL et afficher les résultats.', '<ul>\r\n<li><strong>Connexion &agrave; MySQL :</strong>\r\n<ul>\r\n<li>Utiliser <code>mysqli_connect</code> ou <code>PDO</code> pour se connecter &agrave; une base de donn&eacute;es MySQL.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Ex&eacute;cution de requ&ecirc;tes SQL :</strong>\r\n<ul>\r\n<li>Utiliser <code>mysqli_query</code> ou <code>PDO</code> pour ex&eacute;cuter des requ&ecirc;tes SQL (SELECT, INSERT, UPDATE, DELETE).</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Affichage des r&eacute;sultats :</strong>\r\n<ul>\r\n<li>Boucler &agrave; travers les r&eacute;sultats et les afficher sur une page web.</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Exemple pratique :</strong>\r\n<div class=\"flex items-center relative text-token-text-secondary bg-token-main-surface-secondary px-4 py-2 text-xs font-sans justify-between rounded-t-md\">\r\n<p>&lt;?php<br>$servername = \"localhost\";<br>$username = \"root\";<br>$password = \"\";<br>$dbname = \"myDatabase\";</p>\r\n<p>// Cr&eacute;er la connexion<br>$conn = new mysqli($servername, $username, $password, $dbname);</p>\r\n<p>// V&eacute;rifier la connexion<br>if ($conn-&gt;connect_error) {<br>&nbsp; &nbsp; die(\"Connexion &eacute;chou&eacute;e: \" . $conn-&gt;connect_error);<br>}</p>\r\n<p>// Ex&eacute;cuter une requ&ecirc;te SQL<br>$sql = \"SELECT id, nom, prenom FROM utilisateurs\";<br>$result = $conn-&gt;query($sql);</p>\r\n<p>// Afficher les r&eacute;sultats<br>if ($result-&gt;num_rows &gt; 0) {<br>&nbsp; &nbsp; while($row = $result-&gt;fetch_assoc()) {<br>&nbsp; &nbsp; &nbsp; &nbsp; echo \"ID: \" . $row[\"id\"]. \" - Nom: \" . $row[\"nom\"]. \" \" . $row[\"prenom\"]. \"&lt;br&gt;\";<br>&nbsp; &nbsp; }<br>} else {<br>&nbsp; &nbsp; echo \"0 r&eacute;sultats\";<br>}<br>$conn-&gt;close();<br>?&gt;</p>\r\n</div>\r\n</li>\r\n</ul>', 8, 6),
(15, 'Introduction à Symfony', 'Présentation de Symfony et installation. ', '<p>Proin sit amet augue. Praesent lacus. Donec a &nbsp;leo. Ut turpis ante, condimentum sed, sagittis a, blandit sit amet, &nbsp;enim. Integer sed elit. In ultricies blandit libero. Proin molestie &nbsp;erat dignissim nulla convallis ultrices. Aliquam in magna. Etiam &nbsp;sollicitudin, eros a sagittis pellentesque, lacus odio volutpat &nbsp;elit, vel tincidunt felis dui vitae lorem. Etiam leo. Nulla et &nbsp;justo.</p>\r\n<p>&nbsp;</p>\r\n<p>Etiam ac leo a risus tristique nonummy. Donec dignissim tincidunt nulla. Vestibulum rhoncus molestie odio. Sed lobortis, justo et pretium lobortis, mauris turpis condimentum augue, nec ultricies nibh arcu pretium enim. Nunc purus neque, placerat id, imperdiet sed, pellentesque nec, nisl. Vestibulum imperdiet neque non sem accumsan laoreet. In hac habitasse platea dictumst. Etiam condimentum facilisis libero. Suspendisse in elit quis nisl aliquam dapibus. Pellentesque auctor sapien. Sed egestas sapien nec lectus. Pellentesque vel dui vel neque bibendum viverra. Aliquam porttitor nisl nec pede. Proin mattis libero vel turpis. Donec rutrum mauris et libero. Proin euismod porta felis. Nam lobortis, metus quis elementum commodo, nunc lectus elementum mauris, eget vulputate ligula tellus eu neque. Vivamus eu dolor.</p>\r\n<p>Aliquam tortor. Morbi ipsum massa, imperdiet &nbsp;non, consectetuer vel, feugiat vel, lorem. Quisque eget lorem nec &nbsp;elit malesuada vestibulum. Quisque sollicitudin ipsum vel sem. Nulla &nbsp;enim. Proin nonummy felis vitae felis. Nullam pellentesque. Duis &nbsp;rutrum feugiat felis. Mauris vel pede sed libero tincidunt mollis. &nbsp;Phasellus sed urna rhoncus diam euismod bibendum. Phasellus sed &nbsp;nisl. Integer condimentum justo id orci iaculis varius. Quisque et &nbsp;lacus. Phasellus elementum, justo at dignissim auctor, wisi odio &nbsp;lobortis arcu, sed sollicitudin felis felis eu neque. Praesent at &nbsp;lacus.</p>\r\n<p>&nbsp;</p>\r\n<p>Vivamus eu tellus sed tellus consequat suscipit. Nam orci orci, malesuada id, gravida nec, ultricies vitae, erat. Donec risus turpis, luctus sit amet, interdum quis, porta sed, ipsum. Suspendisse condimentum, tortor at egestas posuere, neque metus tempor orci, et tincidunt urna nunc a purus. Sed facilisis blandit tellus. Nunc risus sem, suscipit nec, eleifend quis, cursus quis, libero. Curabitur et dolor. Sed vitae sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ante. Duis ullamcorper enim. Donec tristique enim eu leo. Nullam molestie elit eu dolor. Nullam bibendum, turpis vitae tristique gravida, quam sapien tempor lectus, quis pretium tellus purus ac quam. Nulla facilisi.</p>\r\n<p>&nbsp;</p>\r\n<p>Vestibulum ante ipsum primis in faucibus orci &nbsp;luctus et ultrices posuere cubilia Curae Aliquam interdum porttitor &nbsp;tortor. Donec ultricies justo eget sapien. Proin ac est. Aliquam &nbsp;erat volutpat. In tempus scelerisque ligula. Morbi scelerisque urna. &nbsp;Duis ac nisl. Donec sed leo. Fusce posuere orci mollis nunc. Sed &nbsp;arcu enim, pharetra nec, aliquam eu, consectetuer sit amet, eros. &nbsp;Sed id enim. Etiam mattis est at elit. Pellentesque est risus, &nbsp;pellentesque nec, dignissim vitae, egestas vitae, sapien. Maecenas &nbsp;et eros non libero iaculis facilisis. Mauris porttitor tempor justo. &nbsp;Sed sollicitudin neque nec libero.</p>', 27, 7),
(16, 'Utilisation de Symfony', 'Entrons dans le vif du sujet avec la présentation de toutes les fonctionnalités de Symfony.', '<p>Etiam ac leo a risus tristique nonummy. Donec dignissim tincidunt nulla. Vestibulum rhoncus molestie odio. Sed lobortis, justo et pretium lobortis, mauris turpis condimentum augue, nec ultricies nibh arcu pretium enim. Nunc purus neque, placerat id, imperdiet sed, pellentesque nec, nisl. Vestibulum imperdiet neque non sem accumsan laoreet. In hac habitasse platea dictumst. Etiam condimentum facilisis libero. Suspendisse in elit quis nisl aliquam dapibus. Pellentesque auctor sapien. Sed egestas sapien nec lectus. Pellentesque vel dui vel neque bibendum viverra. Aliquam porttitor nisl nec pede. Proin mattis libero vel turpis. Donec rutrum mauris et libero. Proin euismod porta felis. Nam lobortis, metus quis elementum commodo, nunc lectus elementum mauris, eget vulputate ligula tellus eu neque. Vivamus eu dolor.</p>\r\n<p>&nbsp;</p>\r\n<p>Aliquam tortor. Morbi ipsum massa, imperdiet &nbsp;non, consectetuer vel, feugiat vel, lorem. Quisque eget lorem nec &nbsp;elit malesuada vestibulum. Quisque sollicitudin ipsum vel sem. Nulla &nbsp;enim. Proin nonummy felis vitae felis. Nullam pellentesque. Duis &nbsp;rutrum feugiat felis. Mauris vel pede sed libero tincidunt mollis. &nbsp;Phasellus sed urna rhoncus diam euismod bibendum. Phasellus sed &nbsp;nisl. Integer condimentum justo id orci iaculis varius. Quisque et &nbsp;lacus. Phasellus elementum, justo at dignissim auctor, wisi odio &nbsp;lobortis arcu, sed sollicitudin felis felis eu neque. Praesent at &nbsp;lacus.</p>\r\n<p>&nbsp;</p>\r\n<p>Vivamus eu tellus sed tellus consequat suscipit. Nam orci orci, malesuada id, gravida nec, ultricies vitae, erat. Donec risus turpis, luctus sit amet, interdum quis, porta sed, ipsum. Suspendisse condimentum, tortor at egestas posuere, neque metus tempor orci, et tincidunt urna nunc a purus. Sed facilisis blandit tellus. Nunc risus sem, suscipit nec, eleifend quis, cursus quis, libero. Curabitur et dolor. Sed vitae sem. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas ante. Duis ullamcorper enim. Donec tristique enim eu leo. Nullam molestie elit eu dolor. Nullam bibendum, turpis vitae tristique gravida, quam sapien tempor lectus, quis pretium tellus purus ac quam. Nulla facilisi.</p>\r\n<p>&nbsp;</p>\r\n<p>Vestibulum ante ipsum primis in faucibus orci &nbsp;luctus et ultrices posuere cubilia Curae Aliquam interdum porttitor &nbsp;tortor. Donec ultricies justo eget sapien. Proin ac est. Aliquam &nbsp;erat volutpat. In tempus scelerisque ligula. Morbi scelerisque urna. &nbsp;Duis ac nisl. Donec sed leo. Fusce posuere orci mollis nunc. Sed &nbsp;arcu enim, pharetra nec, aliquam eu, consectetuer sit amet, eros. &nbsp;Sed id enim. Etiam mattis est at elit. Pellentesque est risus, &nbsp;pellentesque nec, dignissim vitae, egestas vitae, sapien. Maecenas &nbsp;et eros non libero iaculis facilisis. Mauris porttitor tempor justo. &nbsp;Sed sollicitudin neque nec libero.</p>', 27, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mdp` varchar(250) NOT NULL,
  `profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nom`, `prenom`, `email`, `mdp`, `profil`) VALUES
(1, 'Martin', 'Jean', 'martin@mail.com', '$2y$10$uy1sJep6EHhgBDraUprM3uGFVRsTzyKLj5VEfo.71ucZfc0Ht08Ey', 'administrateur'),
(2, 'Perrault', 'Julie', 'julie@mail.com', '$2y$10$NF9ljBNLHx/8HvZ7B7TEl.OTz/edqZhM93eYO67shIRK.NEGe2nFW', 'étudiant'),
(5, 'Angenard', 'Elodie', 'elodie@mail.com', '$2y$10$xZyoqJ/4qcQDlYlAVCzWh.QZn/n.aszUcfgbRdIVywKdhlaVoqJOS', 'étudiant'),
(6, 'Lombard', 'Alphonse', 'alphonse@mail.com', '$2y$10$993PKbgA7ZyEbG23ufCAC.V7SSJNGEyafPNhBiWh9uHfd8uHqpuf6', 'étudiant'),
(7, 'Dallain', 'Jeremy', 'jeremy@mail.com', '$2y$10$uS58107Qpy8yIdzVnpvxEuJ7OVyFABzPd.bfUSUTiHiUxnbQEfNIe', 'formateur'),
(8, 'Baudelot', 'Philippe', 'philippe@mail.com', '$2y$10$WUXGsS/OSVbyxOaBqmdL/emjoycjS/Pi7MmTJMbc7fS./Oheqwrpa', 'formateur'),
(9, 'Dupont', 'Samuel', 'samuel@mail.com', '$2y$10$1KL120pRc9LJPeWkWmtp/uK0NURGe.kMREpLErXEa2RSjZdyVfNZ.', 'étudiant'),
(24, 'Durand', 'Lionel', 'lionel@mail.com', '$2y$10$.4xm/lwpouNywNYYKzcc/.LXlTZtdEnfeFbTDXmDxhssP1N752DWm', 'étudiant'),
(25, 'Buisson', 'Lily', 'lily@mail.com', '$2y$10$TDWeyGXTCcRQfFKGDmxGxuSC1C5.7J/iYSsbiX51NC8O.AzxLfxoy', 'étudiant'),
(26, 'Colin', 'Sandrine', 'sandrine@mail.com', '$2y$10$gwaf1FQKUsvksl7ZwGIVbOEmwxvwJbkpT8cum4iXQsCpAnfpBLXpu', 'étudiant'),
(27, 'Rocher', 'Emmanuel', 'emmanuel@mail.com', '$2y$10$lM/hDst9oTyfLeZUHg8j8OQlM.z90r5JUh0HHwm3adpUKMYGI6Orq', 'formateur'),
(28, 'Marchand', 'Quentin', 'quentin@mail.com', '$2y$10$ZDrER46GVhPSHdgOebC4muLCpDJERedc7Run92S94uIMBOjWoP0Nq', 'étudiant'),
(31, 'Dupuis', 'Alexandre', 'alexandre@mail.com', '$2y$10$1ks7RYCESb9KgoJvP3qe1.VB4gud1FKQpStJkw/9LfdaP2BUAKhJi', 'étudiant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assigne`
--
ALTER TABLE `assigne`
  ADD PRIMARY KEY (`id_assigne`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cours` (`id_cours`);

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id_commentaire`),
  ADD KEY `id_etape` (`id_etape`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id_cours`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD UNIQUE KEY `description` (`description`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `etapes`
--
ALTER TABLE `etapes`
  ADD PRIMARY KEY (`id_etape`),
  ADD UNIQUE KEY `description` (`description`),
  ADD UNIQUE KEY `titre` (`titre`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_cours` (`id_cours`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mdp` (`mdp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assigne`
--
ALTER TABLE `assigne`
  MODIFY `id_assigne` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id_commentaire` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cours`
--
ALTER TABLE `cours`
  MODIFY `id_cours` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `etapes`
--
ALTER TABLE `etapes`
  MODIFY `id_etape` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assigne`
--
ALTER TABLE `assigne`
  ADD CONSTRAINT `assigne_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `assigne_ibfk_2` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);

--
-- Constraints for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD CONSTRAINT `commentaires_ibfk_1` FOREIGN KEY (`id_etape`) REFERENCES `etapes` (`id_etape`),
  ADD CONSTRAINT `commentaires_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `etapes`
--
ALTER TABLE `etapes`
  ADD CONSTRAINT `etapes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `etapes_ibfk_2` FOREIGN KEY (`id_cours`) REFERENCES `cours` (`id_cours`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
