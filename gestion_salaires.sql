-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : lun. 18 oct. 2021 à 19:45
-- Version du serveur :  5.7.32
-- Version de PHP : 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données : `gestion_salaires`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande_paiements`
--

CREATE TABLE `demande_paiements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `periode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbSeances` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `listSeances` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volumeHoraireTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coutTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rejete` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paye` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `demande_paiements`
--

INSERT INTO `demande_paiements` (`id`, `matricule`, `periode`, `nbSeances`, `listSeances`, `volumeHoraireTotal`, `coutTotal`, `valide`, `rejete`, `paye`, `created_at`, `updated_at`) VALUES
(3, '5951', '01/09/2021 to 14/09/2021', '10', NULL, '80', '400000', 'non', 'non', 'non', '2021-10-18 19:19:54', '2021-10-18 19:19:54');

-- --------------------------------------------------------

--
-- Structure de la table `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_prenoms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categorie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salaire_par_heure` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_debut_service` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_horaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspendu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `matricule`, `nom_prenoms`, `date_naissance`, `genre`, `service`, `categorie`, `salaire_par_heure`, `date_debut_service`, `volume_horaire`, `photo`, `email`, `password`, `suspendu`, `created_at`, `updated_at`) VALUES
(2, '1011', 'Koffi Amenan', '16/06/1992', 'Femme', 'Marketing', 'Marketing et communication', '3000', '08/01/2016', '0', 'photophoto', 'amenankoffi@entreprise.com', 'password', 'non', '2021-10-16 03:20:33', '2021-10-16 03:20:33'),
(3, '1516', 'Djirabou Leonard', '16/02/1995', 'Homme', 'Logistique', 'Departements achats et logistique', '8000', '01/09/2015', '0', 'photophoto', 'leonarddjirabou@entreprise.com', 'password', 'non', '2021-10-16 03:20:33', '2021-10-16 03:20:33'),
(4, '5951', 'Bamba Madou', '01/01/1990', 'homme', 'Servicee', 'Categorie', '5000', '27/09/2021', '0', NULL, 'bambamadou@gmail.com', '$2y$10$G0M70Eb1P2wuQ03SxuI8gOjb1YFirpdeIkDq3bfcWjZ/9cD7VDeBW', 'non', '2021-10-18 17:04:06', '2021-10-18 17:04:06'),
(5, '9157', 'Tiemoko Alphonsine', '09/02/1995', 'femme', 'Service', 'Categorie', '5000', '27/09/2021', '0', NULL, 'alphonsinetiemoko@gmail.com', '$2y$10$uR7/NvWh7J2OZU4oCqf5GOW5KVW.on9pGoihk.hrJbAivM4B0tw8a', 'non', '2021-10-18 17:11:21', '2021-10-18 17:11:21'),
(6, '8352', 'Tiemoko Bosco', '17/05/1990', 'homme', 'Service', 'Categorie', '5000', '27/09/2021', '0', NULL, 'boscotiemoko@gmail.com', '$2y$10$MuUi5OA87rRtGScjmdUv9OHTarebrEU/teckG4ZOrpjbY6vPXWPTW', 'non', '2021-10-18 17:21:29', '2021-10-18 17:21:29');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(33, '2014_10_12_000000_create_users_table', 1),
(34, '2014_10_12_100000_create_password_resets_table', 1),
(35, '2019_08_19_000000_create_failed_jobs_table', 1),
(36, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(37, '2021_09_12_091607_create_employes_table', 1),
(38, '2021_09_17_183001_create_pointages_table', 1),
(39, '2021_09_23_165630_create_demande_paiements_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pointages`
--

CREATE TABLE `pointages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employe_id` bigint(20) UNSIGNED NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debutSeance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `debutPause` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finPause` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finSeance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateSeance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volumeHoraire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pointages`
--

INSERT INTO `pointages` (`id`, `employe_id`, `matricule`, `debutSeance`, `debutPause`, `finPause`, `finSeance`, `dateSeance`, `volumeHoraire`, `payee`, `created_at`, `updated_at`) VALUES
(3, 2, '1011', '07:00', '12:00', '13:00', '16:00', '04/10/2021', '8', 'non', '2021-10-17 18:52:47', '2021-10-17 18:52:47'),
(4, 2, '1011', '07:00', '12:00', '13:00', '16:00', '05/10/2021', '8', 'non', '2021-10-17 18:57:42', '2021-10-17 18:57:42'),
(5, 2, '1011', '07:00', '12:00', '13:00', '16:00', '06/10/2021', '8', 'non', '2021-10-17 18:58:29', '2021-10-17 18:58:29'),
(6, 4, '5951', '08:00', '12:00', '13:00', '17:00', '01/09/2021', '8', 'oui', '2021-10-18 17:23:34', '2021-10-18 17:23:34'),
(7, 4, '5951', '08:00', '12:00', '13:00', '17:00', '02/09/2021', '8', 'oui', '2021-10-18 17:30:38', '2021-10-18 17:30:38'),
(8, 4, '5951', '08:00', '12:00', '13:00', '17:00', '03/09/2021', '8', 'oui', '2021-10-18 17:37:10', '2021-10-18 17:37:10'),
(9, 4, '5951', '08:00', '12:00', '13:00', '17:00', '06/09/2021', '8', 'oui', '2021-10-18 17:37:27', '2021-10-18 17:37:27'),
(10, 4, '5951', '08:00', '12:00', '13:00', '17:00', '07/09/2021', '8', 'oui', '2021-10-18 17:37:50', '2021-10-18 17:37:50'),
(11, 4, '5951', '08:00', '12:00', '13:00', '17:00', '08/09/2021', '8', 'oui', '2021-10-18 17:38:15', '2021-10-18 17:38:15'),
(12, 4, '5951', '08:00', '12:00', '13:00', '17:00', '09/09/2021', '8', 'oui', '2021-10-18 17:39:12', '2021-10-18 17:39:12'),
(13, 4, '5951', '08:00', '12:00', '13:00', '17:00', '10/09/2021', '8', 'oui', '2021-10-18 17:39:28', '2021-10-18 17:39:28'),
(14, 4, '5951', '08:00', '12:00', '13:00', '17:00', '13/09/2021', '8', 'oui', '2021-10-18 18:01:13', '2021-10-18 18:01:13'),
(15, 4, '5951', '08:00', '12:00', '13:00', '17:00', '14/09/2021', '8', 'oui', '2021-10-18 18:02:23', '2021-10-18 18:02:23'),
(16, 4, '5951', '08:00', '12:00', '13:00', '17:00', '15/09/2021', '8', 'non', '2021-10-18 18:02:45', '2021-10-18 18:02:45'),
(17, 4, '5951', '08:00', '12:00', '13:00', '17:00', '16/09/2021', '8', 'non', '2021-10-18 18:03:03', '2021-10-18 18:03:03'),
(18, 4, '5951', '08:00', '12:00', '13:00', '17:00', '17/09/2021', '8', 'non', '2021-10-18 18:04:22', '2021-10-18 18:04:22'),
(19, 4, '5951', '08:00', '12:00', '13:00', '17:00', '20/09/2021', '8', 'non', '2021-10-18 18:04:39', '2021-10-18 18:04:39'),
(20, 4, '5951', '08:00', '12:00', '13:00', '17:00', '21/09/2021', '8', 'non', '2021-10-18 18:04:55', '2021-10-18 18:04:55'),
(21, 4, '5951', '08:00', '12:00', '13:00', '17:00', '22/09/2021', '8', 'non', '2021-10-18 18:05:12', '2021-10-18 18:05:12'),
(22, 4, '5951', '08:00', '12:00', '13:00', '17:00', '23/09/2021', '8', 'non', '2021-10-18 18:05:31', '2021-10-18 18:05:31'),
(23, 4, '5951', '08:00', '12:00', '13:00', '17:00', '24/09/2021', '8', 'non', '2021-10-18 18:06:14', '2021-10-18 18:06:14'),
(24, 4, '5951', '08:00', '12:00', '13:00', '17:00', '27/09/2021', '8', 'non', '2021-10-18 18:06:40', '2021-10-18 18:06:40'),
(25, 4, '5951', '08:00', '12:00', '13:00', '17:00', '28/09/2021', '8', 'non', '2021-10-18 18:06:57', '2021-10-18 18:06:57'),
(26, 4, '5951', '08:00', '12:00', '13:00', '17:00', '29/09/2021', '8', 'non', '2021-10-18 18:07:14', '2021-10-18 18:07:14'),
(27, 4, '5951', '08:00', '12:00', '13:00', '17:00', '30/09/2021', '8', 'non', '2021-10-18 18:08:09', '2021-10-18 18:08:09'),
(28, 5, '9157', '08:00', '12:00', '13:00', '17:00', '01/09/2021', '8', 'non', '2021-10-18 18:14:23', '2021-10-18 18:14:23'),
(29, 5, '9157', '07:00', '12:00', '13:00', '17:00', '02/09/2021', '9', 'non', '2021-10-18 18:14:38', '2021-10-18 18:14:38'),
(30, 5, '9157', '08:00', '12:00', '13:00', '17:00', '03/09/2021', '8', 'non', '2021-10-18 18:14:54', '2021-10-18 18:14:54'),
(31, 5, '9157', '08:00', '12:00', '13:00', '17:00', '06/09/2021', '8', 'non', '2021-10-18 18:15:16', '2021-10-18 18:15:16'),
(32, 5, '9157', '08:00', '12:00', '13:00', '17:00', '07/09/2021', '8', 'non', '2021-10-18 18:15:45', '2021-10-18 18:15:45'),
(33, 5, '9157', '08:00', '12:00', '13:00', '17:00', '08/09/2021', '8', 'non', '2021-10-18 18:16:15', '2021-10-18 18:16:15'),
(34, 5, '9157', '08:00', '12:00', '13:00', '17:00', '09/09/2021', '8', 'non', '2021-10-18 18:16:32', '2021-10-18 18:16:32'),
(35, 5, '9157', '08:00', '12:00', '13:00', '17:00', '10/09/2021', '8', 'non', '2021-10-18 18:16:47', '2021-10-18 18:16:47'),
(36, 6, '8352', '08:00', '12:00', '13:00', '17:00', '13/09/2021', '8', 'non', '2021-10-18 18:17:54', '2021-10-18 18:17:54'),
(37, 6, '8352', '08:00', '12:00', '13:00', '17:00', '14/09/2021', '8', 'non', '2021-10-18 18:18:11', '2021-10-18 18:18:11'),
(38, 6, '8352', '08:00', '12:00', '13:00', '17:00', '15/09/2021', '8', 'non', '2021-10-18 18:18:27', '2021-10-18 18:18:27'),
(39, 6, '8352', '08:00', '12:00', '13:00', '17:00', '16/09/2021', '8', 'non', '2021-10-18 18:19:02', '2021-10-18 18:19:02'),
(40, 6, '8352', '08:00', '12:00', '13:00', '17:00', '17/09/2021', '8', 'non', '2021-10-18 18:19:21', '2021-10-18 18:19:21'),
(41, 6, '8352', '08:00', '12:00', '13:00', '17:00', '20/09/2021', '8', 'non', '2021-10-18 18:19:37', '2021-10-18 18:19:37'),
(42, 6, '8352', '08:00', '12:00', '13:00', '17:00', '21/09/2021', '8', 'non', '2021-10-18 18:19:55', '2021-10-18 18:19:55'),
(43, 6, '8352', '08:00', '12:00', '13:00', '17:00', '22/09/2021', '8', 'non', '2021-10-18 18:20:11', '2021-10-18 18:20:11'),
(44, 6, '8352', '08:00', '12:00', '13:00', '17:00', '23/09/2021', '8', 'non', '2021-10-18 18:21:04', '2021-10-18 18:21:04'),
(45, 6, '8352', '08:00', '12:00', '13:00', '17:00', '24/09/2021', '8', 'non', '2021-10-18 18:21:21', '2021-10-18 18:21:21'),
(46, 6, '8352', '08:00', '12:00', '13:00', '17:00', '27/09/2021', '8', 'non', '2021-10-18 18:21:38', '2021-10-18 18:21:38'),
(47, 6, '8352', '08:00', '12:00', '13:00', '17:00', '28/09/2021', '8', 'non', '2021-10-18 18:21:58', '2021-10-18 18:21:58'),
(48, 6, '8352', '08:00', '12:00', '13:00', '17:00', '28/09/2021', '8', 'non', '2021-10-18 18:22:33', '2021-10-18 18:22:33'),
(49, 6, '8352', '08:00', '12:00', '13:00', '17:00', '30/09/2021', '8', 'non', '2021-10-18 18:22:59', '2021-10-18 18:22:59'),
(50, 6, '8352', '08:00', '12:00', '13:00', '17:00', '01/10/2021', '8', 'oui', '2021-10-18 18:23:18', '2021-10-18 18:23:18'),
(51, 6, '8352', '08:00', '12:00', '13:00', '17:00', '04/10/2021', '8', 'non', '2021-10-18 18:23:49', '2021-10-18 18:23:49'),
(52, 6, '8352', '08:00', '12:00', '13:00', '17:00', '05/10/2021', '8', 'non', '2021-10-18 18:24:07', '2021-10-18 18:24:07'),
(53, 6, '8352', '08:00', '12:00', '13:00', '17:00', '06/10/2021', '8', 'non', '2021-10-18 18:24:51', '2021-10-18 18:24:51'),
(54, 6, '8352', '08:00', '12:00', '13:00', '17:00', '07/10/2021', '8', 'non', '2021-10-18 18:25:09', '2021-10-18 18:25:09'),
(55, 6, '8352', '08:00', '12:00', '13:00', '17:00', '08/10/2021', '8', 'non', '2021-10-18 18:26:06', '2021-10-18 18:26:06');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `matricule`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin@gmail.com', '2021-10-16 03:20:32', 'admin', '$2y$10$PJ3se9pCr4T2BmcKdBicgOaX5WzkabtXyQ0NtAr68FTW1phjXRD/C', '1234', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(2, 'Employe Employe', 'employe@gmail.com', '2021-10-16 03:20:32', 'employe', '$2y$10$fMrXbT.cHnqRcsRZhgzcW.idkEUooG1Es5uT2CAoGgv/YiCpWqI.K', '5678', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(3, 'Informaticien Informaticien', 'informaticien@gmail.com', '2021-10-16 03:20:32', 'informaticien', '$2y$10$4I.g32XcP7pf7a0MevXHnOpVOQzGIlEQcYNdnFA0siCsjnNy5tOhq', '9101', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(4, 'Directeur Directeur', 'directeur@gmail.com', '2021-10-16 03:20:32', 'directeur', '$2y$10$8N4xPyPIKooEXGDhj2OAy.i8.Ts63lKv3XPLgC2vOZswNNVuj97au', '1213', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(5, 'Comptable Comptable', 'comptable@gmail.com', '2021-10-16 03:20:32', 'comptable', '$2y$10$oPQGRlEqdDj/tEtb0vSqVeD7aixWvYKtUxinDFBG8Ck.kv/Nb49DS', '1415', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(6, 'Secretaire Comptable', 'secretaire_comptable@gmail.com', '2021-10-16 03:20:32', 'secretaire_comptable', '$2y$10$3Vza9Y.qU65V1uwZ0Lgzpe33DzrdlkzXpffnC.zWZh90CE3uOjJBq', '1617', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(7, 'RH', 'rh@gmail.com', '2021-10-16 03:20:32', 'rh', '$2y$10$jye/phQ3gn7IrIH8S.OPau6r1Mkku0Pk/ue.8haZimCGZTq0MvdV6', '1819', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(8, 'Oulai Bernard', 'oulaibernard@gmail.com', '2021-10-16 03:20:32', 'employe', '$2y$10$Wm6Co3FsaM8SaQapT7Pxgu9H4lBOTnnkjrB6l7grBv2hIMmPGaTcm', '0123', NULL, '2021-10-16 03:20:32', '2021-10-16 03:20:32'),
(9, 'Koffi Amenan', 'amenankoffi@gmail.com', '2021-10-16 03:20:32', 'employe', '$2y$10$uUlkyqM/HuVUJlgB9mAEWulMUgb8KQjg4s1R6Yavhw1Iew.061hhC', '1011', NULL, '2021-10-16 03:20:33', '2021-10-16 03:20:33'),
(10, 'Djirabou Leonard', 'leonarddjirabou@gmail.com', '2021-10-16 03:20:33', 'employe', '$2y$10$Z5AssNr.EAcSd7I6IcX2tuJpLhwQSK9p0dnq88ASieavOipR.0pBS', '1516', NULL, '2021-10-16 03:20:33', '2021-10-16 03:20:33'),
(11, 'Bamba Madou', 'bambamadou@gmail.com', NULL, 'employe', '$2y$10$fVFCu.Dg0VceiOmrMPmHsuFjoaLRZEULCoEzylKIZrS5iss.lbfiO', '5951', NULL, '2021-10-18 17:04:06', '2021-10-18 17:04:06'),
(12, 'Tiemoko Alphonsine', 'alphonsinetiemoko@gmail.com', NULL, 'employe', '$2y$10$qJHzRtsSqtwTC7grt8cmbembXiG0Z4kkzlYAlk9yzkGM1LKTJp8Va', '9157', NULL, '2021-10-18 17:11:21', '2021-10-18 17:11:21'),
(13, 'Tiemoko Bosco', 'boscotiemoko@gmail.com', NULL, 'employe', '$2y$10$aX1h9pDLTfjqiYawO1.4QOW.xaFsXCuPrm8OXi95ziBlwfd15Yh/W', '8352', NULL, '2021-10-18 17:21:29', '2021-10-18 17:21:29');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `demande_paiements`
--
ALTER TABLE `demande_paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employes_email_unique` (`email`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pointages`
--
ALTER TABLE `pointages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pointages_employe_id_index` (`employe_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_matricule_unique` (`matricule`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `demande_paiements`
--
ALTER TABLE `demande_paiements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pointages`
--
ALTER TABLE `pointages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pointages`
--
ALTER TABLE `pointages`
  ADD CONSTRAINT `pointages_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);
