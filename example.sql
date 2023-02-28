-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 08:50
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `example`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars`
--

INSERT INTO `cars` (`id`, `nom`, `image`, `created_at`, `updated_at`) VALUES
(2, 'dacia logan', '20221031160111.jpg', '2022-10-28 14:32:54', '2022-10-31 15:01:11'),
(3, 'Incassable', '20221031171554.jpg', '2022-10-28 14:33:29', '2022-10-31 16:15:54'),
(4, 'mercedes 240', '20221031160053.jpg', '2022-10-28 14:48:26', '2022-10-31 15:00:53'),
(5, 'docker', '20221031160044.jpg', '2022-10-31 07:01:00', '2022-10-31 15:00:44'),
(14, 'car009', '20221031171610.jpg', '2022-10-31 14:12:55', '2022-10-31 16:16:10'),
(17, 'car009', '20221031152504.jpg', '2022-10-31 14:25:04', '2022-10-31 14:25:04'),
(18, 'lorem ipsum', '20221102113449.jpg', '2022-11-02 10:34:49', '2022-11-02 10:34:49'),
(19, 'lorem ipsum', '20221102114849.jpg', '2022-11-02 10:48:49', '2022-11-02 10:48:49'),
(36, 'qqqqqqqqq', '20221103093409.jpg', '2022-11-03 08:34:09', '2022-11-03 08:34:09'),
(37, 'test', '20221103094742.jpg', '2022-11-03 08:47:42', '2022-11-03 08:47:42'),
(38, 'lorem ipsum', '20221103095716.jpg', '2022-11-03 08:57:16', '2022-11-03 08:57:16'),
(39, 'test', '20221103095851.jpg', '2022-11-03 08:58:51', '2022-11-03 08:58:51'),
(40, 'test', '20221103105458.jpg', '2022-11-03 09:54:58', '2022-11-03 09:54:58'),
(41, 'zzzzzzzzzzzzz', '20221103105735.jpg', '2022-11-03 09:57:35', '2022-11-03 09:57:35'),
(42, 'zzzzzzzzzzzzz', '20221103105759.jpg', '2022-11-03 09:57:59', '2022-11-03 09:57:59'),
(43, 'zzzzzzzzzzzzz', '20221103105809.jpg', '2022-11-03 09:58:09', '2022-11-03 09:58:09'),
(44, 'ggggggggggg', '20221103110113.jpg', '2022-11-03 10:01:13', '2022-11-03 10:01:13'),
(45, 'test', '20221103111342.jpg', '2022-11-03 10:13:42', '2022-11-03 10:13:42'),
(46, 'test', '20221103111436.jpg', '2022-11-03 10:14:36', '2022-11-03 10:14:36'),
(47, 'Lorem ipsum dolor.', '20221103112842.jpg', '2022-11-03 10:28:42', '2022-11-03 10:28:42'),
(48, 'Lorem ipsum dolor.', '20221103112906.jpg', '2022-11-03 10:29:06', '2022-11-03 10:29:06'),
(49, 'Lorem ipsum dolor.', '20221103112920.jpg', '2022-11-03 10:29:20', '2022-11-03 10:29:20');

-- --------------------------------------------------------

--
-- Structure de la table `cars_drivers`
--

CREATE TABLE `cars_drivers` (
  `car_id` int(11) NOT NULL,
  `deiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cars_drivers`
--

INSERT INTO `cars_drivers` (`car_id`, `deiver_id`) VALUES
(2, 3),
(3, 3),
(2, 1),
(2, 2),
(2, 4),
(2, 5),
(3, 1),
(4, 4),
(4, 5),
(5, 5),
(14, 2),
(17, 1),
(5, 1),
(4, 1),
(4, 2),
(18, 1),
(19, 2),
(36, 1),
(37, 2),
(38, 1),
(39, 1),
(40, 2),
(41, 2),
(42, 2),
(43, 2);

-- --------------------------------------------------------

--
-- Structure de la table `drivers`
--

CREATE TABLE `drivers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `drivers`
--

INSERT INTO `drivers` (`id`, `nom`, `created_at`, `updated_at`) VALUES
(1, 'Verla', '2022-10-28 14:29:44', '2022-10-28 14:29:44'),
(2, 'Phyllis', '2022-10-28 14:29:44', '2022-10-28 14:29:44'),
(3, 'Loma', '2022-10-28 14:29:44', '2022-10-28 14:29:44'),
(4, 'Patricia', '2022-10-28 14:29:44', '2022-10-28 14:29:44'),
(5, 'Henri', '2022-10-28 14:29:44', '2022-10-28 14:29:44');

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
(6, '2014_10_12_000000_create_users_table', 1),
(7, '2014_10_12_100000_create_password_resets_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_10_27_094116_create_posts_table', 1),
(11, '2022_10_27_133158_create_cars_table', 2),
(12, '2022_10_27_133317_create_drivers_table', 2),
(13, '2022_10_27_133827_create_cars_drivers_table', 3),
(14, '2022_10_31_082257_create_roles_table', 4),
(16, '2022_11_02_103100_create_tests_table', 5),
(17, '2022_11_02_112233_create_notifications_table', 6);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('02c88dcc-9e4f-449d-8ae3-3113512f35f9', 'App\\Notifications\\NewCarNotification', 'App\\Models\\User', 4, '{\"name\":\"test\",\"email\":\"\"}', NULL, '2022-11-03 09:54:58', '2022-11-04 08:12:19'),
('2677755e-ac4e-4830-a63e-797a482cf979', 'App\\Notifications\\NewCarNotification', 'App\\Models\\User', 4, '{\"name\":\"test\",\"email\":\"\"}', NULL, '2022-11-03 10:14:36', '2022-11-04 08:56:34'),
('2a7b8f1c-3317-4862-b496-0c5ab7ec3c95', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 4, '{\"name\":\"register\",\"email\":\"eeeeeeee@eeeee\"}', NULL, '2022-11-02 15:21:47', '2022-11-04 08:12:22'),
('4838e2fa-7560-4ed8-9203-a7f859b5d012', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 4, '{\"name\":\"ttt\",\"email\":\"ttt@ss.com\"}', NULL, '2022-11-02 13:25:12', '2022-11-04 07:56:45'),
('74080b3b-02a4-4bdc-8751-8f62a930c88e', 'App\\Notifications\\NewUserNotification', 'App\\Models\\User', 4, '{\"name\":\"dd@ww.com\",\"email\":\"dd@ww.com\"}', NULL, '2022-11-02 15:21:02', '2022-11-04 08:12:24'),
('80c8aada-619b-4973-aaf9-85804dcbe325', 'App\\Notifications\\NewCarNotification', 'App\\Models\\Car', 39, '{\"name\":\"test\",\"email\":\"\"}', NULL, '2022-11-03 08:58:51', '2022-11-03 08:58:51'),
('9dbcafd8-d5e2-4c31-a91e-f1b698734e05', 'App\\Notifications\\NewCarNotification', 'App\\Models\\User', 4, '{\"name\":\"ggggggggggg\",\"email\":\"\"}', NULL, '2022-11-03 10:01:14', '2022-11-04 08:56:36'),
('cfb0c50a-7e60-4330-a325-7be8e507a855', 'App\\Notifications\\NewCarNotification', 'App\\Models\\Car', 43, '{\"name\":\"zzzzzzzzzzzzz\",\"email\":\"\"}', NULL, '2022-11-03 09:58:09', '2022-11-03 09:58:09'),
('ef1bfd00-b04d-43e2-b7d0-2f75eb5c8880', 'App\\Notifications\\NewCarNotification', 'App\\Models\\Car', 49, '{\"name\":\"Lorem ipsum dolor.\",\"email\":\"\"}', NULL, '2022-11-03 10:29:20', '2022-11-03 10:29:20');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'aa', 'aa', 1, '2023-02-27 12:56:27', '2023-02-27 12:56:27'),
(2, 'vvv', 'vvv', 1, '2023-02-27 12:57:44', '2023-02-27 12:57:44'),
(3, 'sss', 'aaa', 1, '2023-02-27 14:00:33', '2023-02-27 14:00:33');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'user normal', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alexander Kassulke Jr.', 2, 'hsenger@example.com', '2022-10-27 09:03:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IDV8BKgGOa', '2022-10-27 09:03:08', '2022-10-27 09:03:08', NULL),
(2, 'Mr. Sonny Durgan PhD', 2, 'curt17@example.org', '2022-10-27 09:03:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'XLuhuQnRRA', '2022-10-27 09:03:08', '2022-10-27 09:03:08', NULL),
(4, 'hamid', 1, 'hamid@hamid.com', NULL, '$2y$10$TgAaYP/RkxY9IvvpHHOomucLj8RJrGonIQRxeLcOKUFp4/jo9D4IO', NULL, '2022-10-28 14:56:07', '2022-10-28 14:56:07', NULL),
(5, 'test', 2, 'test@gmail.com', NULL, '$2y$10$YWJiCZmeXJRxhwLcc5.S6OY3c5RYuRfL4Iwdb2Ub9yiZZ3srhqz2u', NULL, '2022-10-31 08:07:55', '2022-10-31 08:07:55', NULL),
(10, 'achraf', NULL, 'cccc@ccc.com', NULL, '$2y$10$kg9x.aatRXmBObbhODSkA.5vGuGKzHFRtrYW1a2IdxXta0Znc.BgS', NULL, '2022-11-02 11:54:35', '2022-11-02 11:54:35', NULL),
(11, 'achraf', NULL, 'cccc@cccc.com', NULL, '$2y$10$s3vcM0DfrAo5PdJ0B8kiduv3UKJBV2wE.dSKAoVEjuiPZQh/19f4e', NULL, '2022-11-02 11:55:49', '2022-11-02 11:55:49', NULL),
(12, 'achraf', NULL, 'ccccd@cccc.com', NULL, '$2y$10$TtlPZSGOzlcAyglvhkujUumhRYttrgY1QsPbBFuvwhjZ32UOQqcBa', NULL, '2022-11-02 12:07:09', '2022-11-02 12:07:09', NULL),
(13, 'achraf', NULL, 'ccccd@csccc.com', NULL, '$2y$10$y3xIu4DmrN/UkwOMxZdBYeSneZXhWe8CY0C2wou7H8gXR1dHSX9ke', NULL, '2022-11-02 12:08:07', '2022-11-02 12:08:07', NULL),
(14, 'achraf', NULL, 'ccccd@csccc.comc', NULL, '$2y$10$YouDQzPA2YzcaOOfoZc3GuoLN9Y4lbz38FP5FBKfU7AQ0oOrr6Zhe', NULL, '2022-11-02 12:11:50', '2022-11-02 12:11:50', NULL),
(15, 'ttt', NULL, 'ttt@ss.com', NULL, '$2y$10$tbUmyjYaFLRotix6jE9mj.UoDCPmyfWc/S7YSCykRlgL8vTINExKu', NULL, '2022-11-02 13:25:12', '2022-11-02 13:25:12', NULL),
(16, 'dd@ww.com', NULL, 'dd@ww.com', NULL, '$2y$10$.7w4QqJMBBpg4blwuclvI.OuHxfOSpt24wDzjL1zCZU5tttzyW9fG', NULL, '2022-11-02 15:21:02', '2022-11-02 15:21:02', NULL),
(17, 'register', NULL, 'eeeeeeee@eeeee', NULL, '$2y$10$FJnQ6A.Y7yMjl3a18F6Ox.0SyXLXnrDHjoMFeJ8mkS8DwFvDTyM8G', NULL, '2022-11-02 15:21:47', '2022-11-02 15:21:47', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

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
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
