-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : Dim 10 oct. 2021 à 15:06
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `employes`
--

INSERT INTO `employes` (`id`, `matricule`, `nom_prenoms`, `date_naissance`, `genre`, `service`, `categorie`, `salaire_par_heure`, `date_debut_service`, `volume_horaire`, `photo`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, '0123', 'Oulai Bernard', '27/03/1980', 'H', 'Recrutement', 'RH', '5000', '16/08/2010', '0', 'photophoto', 'oulaibernard@entreprise.com', 'oulaibernard', '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(2, '1011', 'Koffi Amenan', '16/06/1992', 'F', 'Marketing', 'Marketing et communication', '3000', '08/01/2016', '0', 'photophoto', 'amenankoffi@entreprise.com', 'amenankoffi', '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(3, '1516', 'Djirabou Leonard', '16/02/1995', 'H', 'Logistique', 'Departements achats et logistique', '8000', '01/09/2015', '0', 'photophoto', 'leonarddjirabou@entreprise.com', 'leonarddjirabou', '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(4, '9107', 'Tiemoko Bosco', '08/06/1988', 'homme', 'Service technique', 'Technicien', '5000', '04/10/2021', '0', NULL, 'tiemokobosco@gmail.com', '$2y$10$WHWvNDNNk.651XM6LpOxQeDHkE.wpAqLTVw8iRBapE/zxpzvmaHSe', '2021-10-09 18:24:07', '2021-10-09 18:24:07');

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
(26, '2014_10_12_000000_create_users_table', 1),
(27, '2014_10_12_100000_create_password_resets_table', 1),
(28, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(30, '2021_09_12_091607_create_employes_table', 1),
(31, '2021_09_17_183001_create_pointages_table', 1),
(32, '2021_09_23_165630_create_demande_paiements_table', 1);

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
(1, 1, '0123', '07:00', '12:00', '13:00', '16:00', '09/10/2021', '8', 'non', '2021-10-09 06:43:19', '2021-10-09 06:43:19'),
(2, 2, '1011', '07:00', '12:00', '13:00', '17:00', '09/10/2021', '9', 'non', '2021-10-09 17:43:52', '2021-10-09 17:43:52'),
(3, 4, '9107', '07:00', '12:00', '13:00', '17:00', '09/10/2021', '9', 'non', '2021-10-09 18:24:43', '2021-10-09 18:24:43'),
(4, 1, '0123', '07:00', '12:00', '13:00', '16:00', '20/09/2021', '8', 'non', '2021-10-09 19:10:43', '2021-10-09 19:10:43'),
(5, 1, '0123', '10:00', '12:00', '14:00', '17:00', '21/09/2021', '5', 'non', '2021-10-09 19:11:25', '2021-10-09 19:11:25'),
(6, 1, '0123', '08:00', '12:00', '13:00', '18:00', '22/09/2021', '9', 'non', '2021-10-09 19:11:50', '2021-10-09 19:11:50'),
(7, 1, '0123', '07:30', '12:00', '13:30', '16:00', '23/09/2021', '7', 'non', '2021-10-09 19:12:34', '2021-10-09 19:12:34'),
(8, 1, '0123', '08:00', '12:00', '13:00', '16:00', '24/09/2021', '7', 'non', '2021-10-09 19:21:54', '2021-10-09 19:21:54'),
(9, 1, '0123', '09:00', '13:00', '14:00', '16:00', '27/09/2021', '6', 'non', '2021-10-09 19:22:18', '2021-10-09 19:22:18'),
(10, 1, '0123', '08:00', '12:00', '13:30', '16:00', '28/09/2021', '6.5', 'non', '2021-10-09 19:22:43', '2021-10-09 19:22:43'),
(11, 1, '0123', '08:00', '12:00', '14:00', '17:00', '29/09/2021', '7', 'non', '2021-10-09 19:24:03', '2021-10-09 19:24:03'),
(12, 1, '0123', '10:00', '14:00', '15:00', '17:00', '30/09/2021', '6', 'non', '2021-10-09 19:24:38', '2021-10-09 19:24:38'),
(13, 1, '0123', '08:00', '12:00', '13:00', '17:00', '01/10/2021', '8', 'non', '2021-10-09 19:25:01', '2021-10-09 19:25:01');

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
(1, 'Admin Admin', 'admin@gmail.com', '2021-10-09 05:54:21', 'admin', '$2y$10$LSkIZmUiPtZZ9G.yEl3hleql6.ap8vUyAjuiAbvfZjUVFgPPZeEpS', '1234', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(2, 'Employe Employe', 'employe@gmail.com', '2021-10-09 05:54:21', 'employe', '$2y$10$Tsbs8Mz2NbU9N3cNivxa0uh1yr1a/RZjOaa//zj5FmsvtEUWol6IW', '5678', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(3, 'Informaticien Informaticien', 'informaticien@gmail.com', '2021-10-09 05:54:21', 'informaticien', '$2y$10$TR2230MV6F6pt5aMzH.PUunxuf2oOqsbIl9hxLyco25.Xm38e0gim', '9101', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(4, 'Directeur Directeur', 'directeur@gmail.com', '2021-10-09 05:54:21', 'directeur', '$2y$10$ntvkgmLAzzEY3C1102OwQeKioc9AmFI4tMn0.EhMzL2jBa2N/Me8q', '1213', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(5, 'Comptable Comptable', 'comptable@gmail.com', '2021-10-09 05:54:21', 'comptable', '$2y$10$96M3Xxiygp6VyEGFGZbnwe0aW68a0hlgAoIdGCihm3AuYovZsiV.6', '1415', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(6, 'Secretaire Comptable', 'secretaire_comptable@gmail.com', '2021-10-09 05:54:21', 'secretaire_comptable', '$2y$10$XL37xrlcF7xZRvfdcZ0DDunQzTbyUppj7Nl14.5hEOEDsyk3fAif2', '1617', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(7, 'RH', 'rh@gmail.com', '2021-10-09 05:54:21', 'rh', '$2y$10$SFH6xFIFQeFb8j1oLU3x..17hBuFvsAwsghFXBrZylqhgxl6Fpbai', '1819', NULL, '2021-10-09 05:54:21', '2021-10-09 05:54:21'),
(8, 'Tiemoko Bosco', 'tiemokobosco@gmail.com', NULL, 'employe', '$2y$10$b7yGUaOpyYeKOssRIszk/Oog2f2lwJArBhhexlrZZNXVV1ftNPbrC', '9107', NULL, '2021-10-09 18:24:07', '2021-10-09 18:24:07');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pointages`
--
ALTER TABLE `pointages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `pointages`
--
ALTER TABLE `pointages`
  ADD CONSTRAINT `pointages_employe_id_foreign` FOREIGN KEY (`employe_id`) REFERENCES `employes` (`id`);
