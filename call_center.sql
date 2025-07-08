-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 08 juil. 2025 à 17:32
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `call_center`
--

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel_cache_nessim.mezhou@esprit.tn|127.0.0.1', 'i:1;', 1751984084),
('laravel_cache_nessim.mezhou@esprit.tn|127.0.0.1:timer', 'i:1751984084;', 1751984084);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('nouveau','lu','traité','fermé') NOT NULL DEFAULT 'nouveau',
  `admin_notes` text DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `first_name`, `last_name`, `email`, `subject`, `message`, `status`, `admin_notes`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Christina', 'Mraz', 'maximillia02@example.org', 'Dolor ipsum et veritatis.', 'Consectetur iste omnis facilis laudantium earum aliquid repellat. Ratione molestias tenetur voluptate magni omnis quam sit. Necessitatibus molestias accusantium qui non.', 'nouveau', 'Qui sequi vel eaque tempore.', NULL, '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(2, 'Karlie', 'Kulas', 'jessika.purdy@example.com', 'Dolores et aut dolorum praesentium optio.', 'Ipsum doloribus veniam ex ut atque tenetur. Ullam expedita ut sit repudiandae repudiandae accusantium harum. Rerum sit omnis minus illo quas aut aperiam. Consequatur quae omnis rerum officiis quis animi non sapiente.', 'lu', NULL, '2025-06-08 13:21:32', '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(3, 'Rosemarie', 'Fahey', 'bailey.trantow@example.com', 'Dolore nostrum ex cumque unde corrupti.', 'Et modi quia sed temporibus iste sed totam assumenda. Quia quod qui asperiores non voluptatibus nesciunt. Autem aut dolores et aut.', 'lu', NULL, '2025-06-25 13:21:32', '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(4, 'Gideon', 'Rippin', 'crystal52@example.org', 'Hic sed delectus nam qui cupiditate fugit.', 'Sint magni rerum fuga corporis dolore possimus. Atque autem non laudantium. Enim ut dolor voluptas voluptatum. Ut facilis aut molestiae aut vitae voluptates.', 'nouveau', NULL, NULL, '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(5, 'Martin', 'Sporer', 'mckenzie.hortense@example.net', 'Nisi quae eius aperiam debitis a sapiente.', 'Aliquam tenetur velit nulla molestiae fugiat. Quia non quia illum aut ut non. Consequatur mollitia sit harum similique asperiores reiciendis possimus. Voluptatem ut sit quis explicabo.', 'nouveau', NULL, NULL, '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(6, 'Percival', 'Kreiger', 'heaney.carole@example.net', 'Corrupti tenetur quo soluta beatae dolor aut.', 'Quia consequatur sed animi provident. Et eum nemo suscipit veritatis sequi. Nulla ipsam enim fugiat omnis pariatur.', 'lu', NULL, '2025-07-07 13:21:32', '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(7, 'Bailee', 'Marquardt', 'leonie.rogahn@example.net', 'Id officiis non qui sunt voluptas.', 'Possimus quia voluptatem voluptatibus dolor et assumenda aliquid. Ut architecto unde eos perferendis consequuntur nostrum. Labore eligendi possimus impedit laudantium.', 'nouveau', NULL, NULL, '2025-07-08 13:21:32', '2025-07-08 13:21:32'),
(8, 'Cielo', 'Ankunding', 'jaquan41@example.org', 'Rerum distinctio rem perspiciatis nulla.', 'Amet voluptas enim aliquid laboriosam velit. Facere consequatur doloribus reprehenderit quia atque. Et perferendis voluptatem mollitia.', 'traité', NULL, '2025-07-08 13:55:11', '2025-07-08 13:24:18', '2025-07-08 13:55:11'),
(9, 'Shirley', 'Bartoletti', 'anne63@example.com', 'Sapiente ut adipisci itaque.', 'Modi illo modi ipsum alias voluptate optio rem. Hic doloribus et corrupti voluptas provident velit. Officia ut sint aut quasi. Facere sint itaque architecto facere.', 'fermé', 'Adipisci nulla delectus aut atque amet corrupti sapiente et exercitationem voluptas.', '2025-07-08 13:49:21', '2025-07-08 13:24:18', '2025-07-08 13:49:21'),
(10, 'Lysanne', 'Haag', 'mjacobs@example.com', 'Et fuga error suscipit est.', 'Et dolorum sit nemo cum magni et dolor. Perspiciatis quae ea earum consequatur incidunt sapiente. Necessitatibus commodi nostrum aliquam pariatur reprehenderit provident amet. Necessitatibus necessitatibus voluptatem delectus aut provident esse.', 'lu', 'Asperiores non doloremque et soluta nesciunt est illo rerum voluptatum corrupti nostrum.', '2025-06-21 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(11, 'Callie', 'Hermann', 'mhermiston@example.org', 'Porro perferendis voluptatibus odio est.', 'Ut est dolorem atque et quae numquam rerum. Tenetur tempora doloremque repudiandae iusto asperiores inventore et. Ut et sit dolor qui.', 'fermé', NULL, '2025-07-08 13:55:21', '2025-07-08 13:24:18', '2025-07-08 13:55:21'),
(12, 'Garland', 'Runolfsdottir', 'jamir43@example.net', 'Corporis et adipisci placeat est et.', 'Sed vel quo harum consequuntur esse non. Accusantium reiciendis officia sunt sunt. Eaque animi iste possimus dicta culpa hic et. Alias consequatur quaerat quasi distinctio.', 'traité', NULL, '2025-06-13 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(13, 'Geo', 'Wiegand', 'beatty.skye@example.org', 'Aliquid aut maxime aut velit rerum.', 'Laudantium reiciendis enim vel. Et velit tempore sed ut consequuntur omnis. Qui dolor et eligendi eveniet ipsa ea. Saepe eaque sit reiciendis aut quidem reprehenderit alias.', 'traité', NULL, '2025-06-23 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(14, 'Jessie', 'Dickens', 'rau.micaela@example.net', 'Velit velit perspiciatis ad dolor et.', 'Minima quidem molestias laborum laborum. Voluptates ut perspiciatis maiores natus recusandae. Dolor sed qui ea illo. Molestiae voluptas iste maiores sit sint voluptatem.', 'fermé', 'Placeat illum dolor nulla qui debitis iusto ut omnis.', '2025-07-08 13:56:00', '2025-07-08 13:24:18', '2025-07-08 13:56:00'),
(15, 'Darrick', 'Labadie', 'reid.boyle@example.net', 'Temporibus voluptatibus voluptas fuga dolores est.', 'Odit sequi nemo deleniti. Quia in voluptatem debitis sed provident nulla quibusdam. Placeat enim ut maiores ut ut non.', 'traité', 'Sit sapiente voluptatem incidunt provident sit harum.', '2025-07-08 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(16, 'Tiara', 'Satterfield', 'wilkinson.ayana@example.com', 'Dolorem nostrum illo aut et sed.', 'Et consectetur tenetur suscipit at dignissimos et. Excepturi earum illo aliquam asperiores id.', 'lu', NULL, '2025-07-04 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(17, 'Francisca', 'Kilback', 'wgoodwin@example.org', 'Dolorum eaque sit qui similique.', 'Aut voluptatem sapiente voluptatibus cumque aut autem sed. Aut animi recusandae ipsam. Aliquid officiis culpa quibusdam doloremque et enim molestias.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(18, 'Susana', 'Schroeder', 'kylie60@example.net', 'Iure necessitatibus voluptate earum consequatur.', 'Et est id minima totam repellendus non. Voluptate blanditiis sequi illo omnis qui aperiam sint. Accusamus unde eum quia. Distinctio atque ipsum quaerat voluptas corporis consequuntur dolorem.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(19, 'Lennie', 'Oberbrunner', 'santina.feest@example.com', 'Et quia dicta ut.', 'Sed enim placeat autem vel omnis et. Commodi dolores eaque dolore et. Tenetur sit occaecati eaque et fuga. Minus repellat quam esse praesentium consectetur.', 'traité', 'Quas eligendi distinctio accusantium sapiente provident culpa iste quas.', '2025-06-19 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(20, 'Jared', 'Heaney', 'dhoeger@example.net', 'Recusandae omnis error et vitae.', 'Alias dolor ullam commodi quia in exercitationem. Voluptas et ratione natus. Aperiam rerum distinctio fugit vero aspernatur vel sed voluptas.', 'lu', 'Ea ad ipsum voluptas sint delectus sapiente quia nihil excepturi et.', '2025-06-18 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(21, 'Andreanne', 'Harber', 'icie.keeling@example.org', 'Qui voluptatem enim ducimus quo voluptatem.', 'Animi qui quia aliquam laboriosam omnis dicta voluptas nobis. Repellat perspiciatis et consequuntur quam. Accusamus sed dolores culpa esse rem maxime.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(22, 'Julia', 'Johnson', 'mcummerata@example.net', 'Suscipit ab quam et voluptatem voluptas.', 'Aut sit id aut. Sit aut facilis suscipit harum. Cupiditate quia est ipsam nemo explicabo.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(23, 'Jules', 'Douglas', 'huel.jewel@example.net', 'Dignissimos est quos voluptates porro.', 'Nesciunt odio minima sint odit quibusdam quis voluptas. Quia et esse ut ut deleniti nisi. Cumque ea eius et praesentium iste sunt. Error neque quod error sunt tempore ut adipisci numquam.', 'nouveau', 'Sit odio nihil error voluptatibus qui quae rem eos assumenda id.', NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(24, 'Cora', 'Corkery', 'dagmar.metz@example.org', 'Provident atque quos architecto quod aut aut.', 'Non ratione eos quae. Et voluptas praesentium veniam sint nisi. Et voluptatem omnis animi voluptatibus et delectus quibusdam.', 'fermé', NULL, '2025-07-03 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(25, 'Frances', 'Dooley', 'earl55@example.org', 'Quas saepe nulla possimus autem quia.', 'Voluptate asperiores sed eum aut. Vel rem eaque sapiente voluptates sunt est id. Non quam est adipisci ex harum. Laboriosam eveniet nemo maiores.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(26, 'Caden', 'Doyle', 'gaylord.torrey@example.net', 'Nihil in aut nesciunt.', 'Alias cupiditate eveniet velit et fuga. Quasi consectetur excepturi sed odio eveniet sit.', 'fermé', 'Explicabo doloremque voluptatem a voluptatem amet iste temporibus tempore autem rerum.', '2025-06-30 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(27, 'Cordie', 'Thompson', 'hayes.nayeli@example.net', 'Repellendus qui doloribus dolor veniam.', 'Laudantium quas et repellat dolor. Sunt nostrum aliquid iusto ut. Nobis impedit cupiditate numquam sapiente dignissimos quis rerum ut.', 'lu', 'Odit nihil consectetur sit ea reprehenderit voluptatum fugiat eum qui sint.', '2025-06-22 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(28, 'Fern', 'Bednar', 'vicente.tillman@example.net', 'Nam magni nemo ut.', 'Atque id omnis consequatur asperiores aut soluta. A eos voluptas nihil cum ullam natus dolores. Molestias laborum tempore ea. Et possimus eum deserunt repudiandae.', 'traité', NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(29, 'Ramona', 'Botsford', 'johan47@example.net', 'Aut mollitia id velit.', 'Qui autem autem voluptates vero. Eius temporibus aut molestiae voluptatibus quas et. Dicta nulla impedit nihil facere nihil.', 'traité', NULL, '2025-07-02 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(30, 'Nia', 'Ernser', 'hill.florian@example.net', 'Quia et quod in minima nisi.', 'Optio est cumque explicabo dolore. Quia ad delectus reprehenderit odit optio et necessitatibus est. Suscipit earum consectetur nemo. Similique totam ut voluptatibus necessitatibus sunt eum consequatur eum. Qui consequatur reprehenderit qui soluta voluptas repudiandae.', 'traité', NULL, '2025-06-26 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(31, 'Virgie', 'Jenkins', 'rozella77@example.com', 'Eos accusantium commodi quis at ipsam.', 'Aspernatur est in recusandae ut autem. Quisquam quod porro consequatur occaecati voluptates. Culpa velit optio iure repudiandae et. Ratione eum ut commodi eligendi ad ducimus officiis.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(32, 'Jaquelin', 'Deckow', 'paris95@example.org', 'Sed voluptate quisquam repellendus ut quia occaecati.', 'Minus doloribus saepe debitis officiis repellendus ut. Omnis sed ab labore sunt repellendus accusantium ullam. Veniam veritatis quasi quidem.', 'traité', 'Vel adipisci neque alias est autem eos iusto.', '2025-06-11 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(33, 'Toney', 'Mosciski', 'oreilly.lilly@example.org', 'Iusto commodi facilis asperiores.', 'Repellat repellat dolorum aut adipisci ut maiores. Iusto atque error magni culpa placeat voluptatum dolor. Suscipit reprehenderit eligendi dignissimos commodi cumque.', 'lu', NULL, '2025-07-07 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(34, 'Devon', 'Larkin', 'michele13@example.net', 'Neque sint molestiae dolore beatae.', 'Facilis sint iure delectus explicabo. Dolorem architecto tempore temporibus est at voluptatem dicta. Velit et et laboriosam reprehenderit.', 'fermé', NULL, '2025-06-26 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(35, 'Margarette', 'Kris', 'quigley.willie@example.com', 'Cupiditate cupiditate quo sequi omnis.', 'Cumque temporibus suscipit voluptatem praesentium doloremque laboriosam. Voluptate assumenda praesentium nisi saepe eaque voluptatibus. Sequi incidunt qui pariatur sequi quaerat eveniet ipsum. Et vel quod saepe hic.', 'fermé', NULL, '2025-06-20 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(36, 'Cora', 'Veum', 'amorar@example.com', 'Recusandae illo maiores numquam vel mollitia consequatur.', 'Aut quia incidunt provident omnis ex quam corporis. Architecto quia quos omnis suscipit reprehenderit nisi repellendus. Officia quisquam sed soluta quia impedit repellat. Ipsa nemo consectetur vitae dignissimos sapiente placeat.', 'lu', NULL, '2025-06-19 13:24:18', '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(37, 'Joan', 'Herzog', 'reggie.lang@example.org', 'Et harum temporibus amet accusamus voluptas tempore.', 'Doloremque beatae saepe earum temporibus. Qui enim dolor sit et soluta corporis. Voluptate delectus nam porro consectetur qui praesentium.', 'nouveau', 'Sunt impedit placeat et distinctio quaerat.', NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(38, 'Nassim', 'Benali', 'nassim@example.com', 'Demande de partenariat', 'Bonjour, je souhaiterais discuter d\'un partenariat entre votre société et la nôtre. Merci de me recontacter rapidement.', 'nouveau', NULL, NULL, '2025-07-08 13:24:18', '2025-07-08 13:24:18'),
(39, 'bonjour', 'bonjour', 'helol@gmail.com', 'bonjour', 'bonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjour', 'fermé', NULL, '2025-07-08 13:49:27', '2025-07-08 13:32:28', '2025-07-08 13:49:27'),
(40, 'Nessim', 'Nesssim', 'nessim.mezhoud@esprit.tn', 'ededr', 'ajdjezfdjencf', 'lu', NULL, '2025-07-08 14:05:07', '2025-07-08 14:03:45', '2025-07-08 14:05:07'),
(41, 'Nessim', 'Mezhoud', 'mazhoud.nassim2003@gmail.com', 'emloi', 'emloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloiemloi*', 'nouveau', NULL, NULL, '2025-07-08 14:16:29', '2025-07-08 14:16:29'),
(42, 'Nessim', 'Nesssim', 'nessim.mezhoud@esprit.tn', 'bonjour', 'bonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjourbonjour', 'nouveau', NULL, NULL, '2025-07-08 14:20:09', '2025-07-08 14:20:09');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_offers`
--

CREATE TABLE `job_offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `location` varchar(255) NOT NULL,
  `salary` double DEFAULT NULL,
  `is_salary_negotiable` tinyint(1) NOT NULL DEFAULT 0,
  `contract_type` enum('CDI','CDD','Stage','Freelance') NOT NULL,
  `work_type` enum('Temps plein','Temps partiel','Remote') NOT NULL,
  `requirements` text DEFAULT NULL,
  `benefits` text DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `category` varchar(255) NOT NULL DEFAULT 'commercial',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `job_offers`
--

INSERT INTO `job_offers` (`id`, `title`, `description`, `location`, `salary`, `is_salary_negotiable`, `contract_type`, `work_type`, `requirements`, `benefits`, `is_active`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Administrateur Système', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Montpellier', 585800, 0, 'CDD', 'Remote', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Marketing', '2025-02-14 07:13:42', '2025-07-08 13:14:14'),
(2, 'Administrateur Système', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Toulouse', 372400, 0, 'Stage', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Tickets restaurant\nMutuelle d\'entreprise\n13ème mois\nPrimes d\'objectifs\nFormation continue', 1, 'Informatique', '2025-01-24 14:17:09', '2025-07-08 13:14:14'),
(3, 'Product Manager', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Marseille', 0, 1, 'CDD', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Marketing', '2025-03-26 11:24:13', '2025-07-08 13:14:14'),
(4, 'Administrateur Système', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Lille', 662600, 0, 'Stage', 'Temps partiel', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Design', '2025-06-26 22:21:59', '2025-07-08 13:14:14'),
(5, 'Chef de Projet Digital', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Nantes', 0, 0, 'Stage', 'Temps partiel', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Informatique', '2025-05-26 18:32:46', '2025-07-08 13:14:14'),
(6, 'Développeur React Native', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Toulouse', 540000, 0, 'Stage', 'Temps plein', 'Formation supérieure\nExpérience en gestion de projet\nMaîtrise des outils collaboratifs\nCapacités de communication\nAutonomie et rigueur', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Finance', '2025-05-31 23:20:48', '2025-07-08 13:14:14'),
(7, 'Développeur React Native', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Bordeaux', 0, 1, 'CDI', 'Remote', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 0, 'Commercial', '2025-07-02 16:45:28', '2025-07-08 13:14:14'),
(8, 'Développeur Python', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Lille', 0, 0, 'CDI', 'Remote', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Informatique', '2025-06-07 23:24:05', '2025-07-08 13:14:14'),
(9, 'Consultant SAP', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Nantes', 379700, 1, 'CDD', 'Remote', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Autre', '2025-02-08 19:54:16', '2025-07-08 13:14:14'),
(10, 'Consultant SAP', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Rennes', 482900, 0, 'Freelance', 'Temps partiel', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Informatique', '2025-02-05 23:50:05', '2025-07-08 13:14:14'),
(11, 'Commercial B2B', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Lille', 379100, 1, 'CDD', 'Temps plein', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Autre', '2025-02-01 12:22:47', '2025-07-08 13:14:14'),
(12, 'Responsable RH', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Lyon', 775200, 0, 'CDI', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 0, 'Autre', '2025-01-31 04:02:08', '2025-07-08 13:14:14'),
(13, 'Marketing Manager', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Bordeaux', 0, 0, 'CDI', 'Temps partiel', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Design', '2025-05-11 18:35:59', '2025-07-08 13:14:14'),
(14, 'Responsable RH', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Toulouse', 0, 0, 'CDD', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Marketing', '2025-06-23 15:30:03', '2025-07-08 13:14:14'),
(15, 'Product Manager', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Paris', 0, 0, 'Freelance', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'RH', '2025-05-20 01:13:59', '2025-07-08 13:14:14'),
(16, 'Architecte Solutions', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Strasbourg', 0, 0, 'CDI', 'Remote', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Autre', '2025-02-07 12:46:50', '2025-07-08 13:14:14'),
(17, 'Développeur Python', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Paris', 0, 0, 'CDD', 'Remote', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'RH', '2025-05-27 08:36:33', '2025-07-08 13:14:14'),
(18, 'Designer UI/UX', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Lille', 700900, 0, 'CDI', 'Remote', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'RH', '2025-06-27 12:40:39', '2025-07-08 13:14:14'),
(19, 'Responsable RH', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Paris', 0, 1, 'Freelance', 'Temps plein', 'Formation supérieure\nExpérience en gestion de projet\nMaîtrise des outils collaboratifs\nCapacités de communication\nAutonomie et rigueur', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Informatique', '2025-05-04 23:48:35', '2025-07-08 13:14:14'),
(20, 'Chef de Projet Digital', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Toulouse', 0, 0, 'CDI', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'RH', '2025-02-05 01:18:36', '2025-07-08 13:14:14'),
(21, 'Data Scientist', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Nantes', 0, 1, 'CDI', 'Temps partiel', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'RH', '2025-01-20 23:10:47', '2025-07-08 13:14:14'),
(22, 'Chef de Projet Digital', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Paris', 0, 1, 'Freelance', 'Remote', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 0, 'Finance', '2025-01-18 20:22:47', '2025-07-08 13:14:14'),
(23, 'Développeur Laravel', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Lille', 349900, 0, 'CDI', 'Temps partiel', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Design', '2025-03-21 12:50:23', '2025-07-08 13:14:14'),
(24, 'Chef de Projet Digital', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Toulouse', 0, 0, 'Stage', 'Remote', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Design', '2025-04-24 00:13:24', '2025-07-08 13:14:14'),
(25, 'Designer UI/UX', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Lyon', 598900, 0, 'Freelance', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 0, 'Autre', '2025-01-13 16:05:47', '2025-07-08 13:14:14'),
(26, 'Administrateur Système', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Remote', 4445, 0, 'CDI', 'Remote', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Tickets restaurant\nMutuelle d\'entreprise\n13ème mois\nPrimes d\'objectifs\nFormation continue', 1, 'Commercial', '2025-04-30 11:45:26', '2025-07-08 13:17:30'),
(27, 'Architecte Solutions', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Rennes', 4526, 1, 'CDD', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'RH', '2025-04-01 08:11:41', '2025-07-08 13:17:30'),
(28, 'Business Analyst', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Lyon', NULL, 0, 'CDD', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'RH', '2025-02-17 23:48:38', '2025-07-08 13:17:30'),
(29, 'Développeur Laravel', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Rennes', 3145, 1, 'CDD', 'Remote', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Commercial', '2025-04-05 08:38:55', '2025-07-08 13:17:30'),
(30, 'Chef de Projet Digital', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Remote', 4814, 1, 'CDI', 'Temps partiel', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Finance', '2025-06-16 08:19:44', '2025-07-08 13:17:30'),
(31, 'Développeur Python', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Nantes', 3285, 0, 'CDD', 'Temps partiel', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'RH', '2025-04-06 04:25:21', '2025-07-08 13:17:30'),
(32, 'Marketing Manager', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Nantes', NULL, 1, 'CDD', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Autre', '2025-06-12 10:33:18', '2025-07-08 13:17:30'),
(33, 'Développeur React Native', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Montpellier', 5694, 1, 'Stage', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Autre', '2025-05-01 23:14:46', '2025-07-08 13:17:30'),
(34, 'Responsable RH', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Montpellier', 3989, 0, 'CDD', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 0, 'Commercial', '2025-06-10 12:31:37', '2025-07-08 13:17:30'),
(35, 'Architecte Solutions', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Marseille', 2562, 0, 'CDI', 'Remote', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Commercial', '2025-05-21 04:17:16', '2025-07-08 13:17:30'),
(36, 'Product Manager', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Marseille', 5005, 0, 'CDD', 'Temps plein', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Marketing', '2025-04-15 02:34:28', '2025-07-08 13:17:30'),
(37, 'Développeur Laravel', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Nantes', NULL, 1, 'Freelance', 'Temps partiel', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'Véhicule de fonction\nTéléphone pro\nPlan d\'épargne entreprise\nAssurance vie\nRestauration sur site', 1, 'Commercial', '2025-03-05 15:02:52', '2025-07-08 13:17:30'),
(38, 'Développeur React Native', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Rennes', 3849, 0, 'Freelance', 'Remote', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Informatique', '2025-02-04 23:43:54', '2025-07-08 13:17:30'),
(39, 'Product Manager', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Nantes', 6886, 1, 'CDI', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'Tickets restaurant\nMutuelle d\'entreprise\n13ème mois\nPrimes d\'objectifs\nFormation continue', 0, 'Informatique', '2025-06-12 20:53:10', '2025-07-08 13:17:30'),
(40, 'Marketing Manager', 'Rejoignez notre startup en pleine croissance ! Nous cherchons une personne motivée pour contribuer à notre expansion. Vous travaillerez sur des projets innovants avec une équipe jeune et créative. Télétravail possible et horaires flexibles.', 'Marseille', 6869, 1, 'Stage', 'Temps plein', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'Autre', '2025-01-22 04:51:22', '2025-07-08 13:17:30'),
(41, 'Développeur Full Stack Senior', 'Nous recherchons un professionnel passionné pour rejoindre notre équipe dynamique. Vous serez en charge de développer et maintenir nos applications web en utilisant les dernières technologies. Un environnement de travail stimulant vous attend avec de nombreuses opportunités d\'évolution.', 'Montpellier', NULL, 0, 'Stage', 'Temps plein', 'Bac+3/5 en informatique\nExpérience de 3+ ans\nMaîtrise de PHP/Laravel\nConnaissance JavaScript\nAnglais courant', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Marketing', '2025-03-06 03:00:29', '2025-07-08 13:17:30'),
(42, 'Développeur Laravel', 'Grande entreprise tech recherche un talent expérimenté. Vous évoluerez dans un environnement international avec des projets à fort impact. Formation continue, équipe experte et technologies de pointe au programme.', 'Lille', NULL, 0, 'CDI', 'Remote', 'Bac+2 minimum\nExpérience commerciale\nExcellent relationnel\nOrganisation rigoureuse\nGoût du challenge', 'Tickets restaurant\nMutuelle d\'entreprise\n13ème mois\nPrimes d\'objectifs\nFormation continue', 1, 'Finance', '2025-03-15 12:30:19', '2025-07-08 13:17:30'),
(43, 'Chef de Projet Digital', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Rennes', 6712, 0, 'Freelance', 'Temps partiel', 'Formation technique\nConnaissances système\nCertifications appréciées\nCapacités d\'analyse\nVeille technologique', 'RTT supplémentaires\nPrime d\'intéressement\nCrèche d\'entreprise\nTickets cinéma\nÉvénements équipe', 1, 'Informatique', '2025-05-24 17:18:53', '2025-07-08 13:17:30'),
(44, 'Développeur Laravel', 'Opportunité unique de rejoindre une équipe passionnée ! Nous développons des solutions innovantes pour nos clients. Ambiance conviviale, projets variés et possibilités d\'évolution rapide vous attendent.', 'Bordeaux', 6922, 0, 'CDD', 'Temps plein', 'Diplôme en design ou équivalent\nPortfolio créatif\nMaîtrise Adobe Creative Suite\nSens artistique développé\nTravail en équipe', 'Télétravail 2j/semaine\nHoraires flexibles\nComité d\'entreprise\nPrime transport\nCorbeille de fruits', 1, 'RH', '2025-05-18 03:21:41', '2025-07-08 13:17:30'),
(45, 'Responsable RH', 'Poste évolutif dans une entreprise leader de son secteur. Nous offrons un cadre de travail moderne avec de nombreux avantages. Vous participerez à des projets stratégiques et pourrez développer vos compétences.', 'Marseille', 2528, 0, 'CDI', 'Remote', 'Formation supérieure\nExpérience en gestion de projet\nMaîtrise des outils collaboratifs\nCapacités de communication\nAutonomie et rigueur', 'Ordinateur portable\nAccès formations\nPrime vacances\nSalle de sport\nConciergerie', 1, 'Finance', '2025-05-29 08:25:40', '2025-07-08 13:17:30'),
(46, 'Lead Developer Laravel', '2aCall recherche un Lead Developer Laravel expérimenté pour diriger notre équipe technique. Vous serez responsable de l\'architecture et du développement de nos applications web innovantes.', 'Paris', 6500, 1, 'CDI', 'Remote', 'Master en informatique\n5+ ans d\'expérience Laravel\nExpérience en management\nMaîtrise des API REST\nDevOps (Docker, CI/CD)', 'Salaire attractif\nStock-options\nTélétravail flexible\nFormation continue\nÉquipement premium', 1, 'Informatique', '2025-07-08 13:17:30', '2025-07-08 13:17:30'),
(47, 'Stagiaire Développeur Web', 'Stage de 6 mois pour apprendre le développement web moderne. Accompagnement par des seniors, projets concrets et formation aux bonnes pratiques.', 'Remote', 800, 0, 'Stage', 'Remote', 'Étudiant en informatique\nConnaissances HTML/CSS/JS\nMotivation et curiosité\nCapacité d\'apprentissage\nTravail en équipe', 'Gratification stage\nFormation intensive\nMentoring senior\nPossibilité d\'embauche\nÉquipe bienveillante', 1, 'Informatique', '2025-07-08 13:17:30', '2025-07-08 13:17:30');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_07_144530_add_role_to_users_table', 1),
(5, '2024_01_01_000010_create_job_offers_table', 2),
(6, '2025_07_08_132650_update_salary_and_negociable_in_job_offers_table', 2),
(7, 'add_roles_to_users_table', 2),
(8, 'create_contact_message_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cKt6XtE6HBQ7cBDjL2WyoEiXmecsrrGjI408TZwZ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNmRUOGcxZE1lRmJGdVkzTEdXUVV1UWlEMDFPaG51dkdQQTFKZURRdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1751988020),
('kWF5cEYJBAF5jzyzEqqoLNPA1OR479z6PKD6V3Lq', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36 Edg/138.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFpoeEVBV1NBa3pxakswQms1eTAzSzZaSk5uQmdHOEFHZmVEeXRmSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1751988023);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nessim', 'nessim.mezhoud@esprit.tn', 'admin', NULL, '$2y$12$cwNZXPNzI4ARO7KuSzBv/.Bd.rlDQguknqWTUgx/47J9S6MKsxGdK', NULL, '2025-07-08 13:13:06', '2025-07-08 13:13:06');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `job_offers`
--
ALTER TABLE `job_offers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `job_offers`
--
ALTER TABLE `job_offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
