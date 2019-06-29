-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 11:45 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `italentfinalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'music', '2019-04-30 15:08:50', '2019-04-30 15:08:50'),
(2, 'literature', '2019-04-30 15:08:55', '2019-04-30 15:08:55'),
(3, 'art', '2019-05-12 16:10:35', '2019-05-12 16:10:35'),
(4, 'drama', '2019-06-22 21:53:11', '2019-06-22 21:53:11');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(3, 'comment useful', 1, 2, '2019-04-30 16:58:50', '2019-04-30 16:58:50'),
(6, 'another comment', 1, 2, '2019-04-30 17:06:02', '2019-04-30 17:06:02'),
(8, 'hcomment', 5, 2, '2019-04-30 19:30:51', '2019-04-30 19:30:51'),
(9, 'comment test', 1, 11, '2019-05-14 21:44:49', '2019-05-14 21:44:49');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `friend_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follow_system`
--

CREATE TABLE `follow_system` (
  `id` int(10) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED DEFAULT NULL,
  `leader_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow_system`
--

INSERT INTO `follow_system` (`id`, `follower_id`, `leader_id`, `created_at`, `updated_at`) VALUES
(2, 1, 22, '2019-06-23 14:50:36', '2019-06-23 14:50:36');

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id_1` int(10) UNSIGNED DEFAULT NULL,
  `user_id_2` int(10) UNSIGNED DEFAULT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id_1`, `user_id_2`, `approved`, `created_at`, `updated_at`) VALUES
(4, 1, 3, 1, '2019-04-30 18:33:29', '2019-04-30 18:51:34'),
(9, 1, 2, 1, '2019-04-30 18:47:27', '2019-04-30 18:50:22'),
(10, 5, 1, 1, '2019-04-30 18:53:54', '2019-04-30 20:52:42'),
(11, 5, 2, 1, '2019-04-30 18:54:04', '2019-04-30 20:39:31'),
(12, 2, 5, 1, '2019-04-30 18:59:34', '2019-04-30 19:13:32'),
(13, 2, 1, 1, '2019-04-30 18:59:51', '2019-04-30 20:52:44'),
(15, 8, 4, 0, '2019-04-30 21:16:19', '2019-04-30 21:16:19'),
(16, 8, 3, 1, '2019-04-30 21:16:56', '2019-04-30 21:17:22'),
(19, 1, 5, 1, '2019-05-14 21:46:39', '2019-05-14 21:48:42'),
(21, 1, 22, 0, '2019-06-22 15:13:36', '2019-06-22 15:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `friend_post`
--

CREATE TABLE `friend_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `friend_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friend_post`
--

INSERT INTO `friend_post` (`id`, `friend_id`, `post_id`, `created_at`, `updated_at`) VALUES
(4, 10, 6, NULL, NULL),
(5, 11, 7, NULL, NULL),
(6, 10, 8, NULL, NULL),
(7, 11, 8, NULL, NULL),
(8, 4, 10, NULL, NULL),
(9, 9, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `like` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `user_id`, `like`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '2019-04-30 16:46:18', '2019-04-30 17:34:23'),
(3, 2, 5, 1, '2019-04-30 19:30:30', '2019-04-30 19:30:30'),
(6, 9, 1, 1, '2019-05-14 21:24:31', '2019-05-14 21:24:31'),
(12, 13, 1, 1, '2019-06-15 18:53:10', '2019-06-15 18:53:10'),
(13, 7, 1, 1, '2019-06-16 06:29:23', '2019-06-16 06:29:23'),
(27, 16, 1, 1, '2019-06-17 17:21:27', '2019-06-17 17:36:49'),
(28, 15, 1, 1, '2019-06-17 17:36:59', '2019-06-17 17:36:59'),
(29, 14, 1, 0, '2019-06-17 17:48:42', '2019-06-17 17:48:50'),
(31, 11, 1, 1, '2019-06-17 17:52:00', '2019-06-17 17:52:00'),
(32, 10, 1, 1, '2019-06-17 17:53:59', '2019-06-17 17:53:59'),
(35, 6, 1, 1, '2019-06-21 04:44:18', '2019-06-21 04:44:18'),
(38, 15, 5, 1, '2019-06-21 11:51:26', '2019-06-21 11:51:26'),
(44, 18, 5, 1, '2019-06-21 12:14:48', '2019-06-21 12:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_02_23_234451_create_roles_table', 1),
(4, '2019_03_20_013824_create_posts_table', 1),
(5, '2019_03_20_111855_create_categories_table', 1),
(6, '2019_03_21_200220_create_comments_table', 1),
(7, '2019_03_23_114712_create_likes_table', 1),
(8, '2019_03_23_115123_create_friends_table', 1),
(9, '2019_04_02_184654_create_post_media_table', 1),
(10, '2019_04_30_210401_create_friends_posts_table', 2),
(11, '2019_04_30_214154_create_friend_post_table', 3),
(12, '2019_06_21_173537_add_aboutme_to_users', 4),
(13, '2019_06_16_053839_create_followers_table', 5),
(14, '2019_06_22_114450_create_post_user_table', 5),
(15, '2019_06_22_174254_create_table_follow_user', 6),
(16, '2019_06_22_223202_create_follow_system_table', 7),
(17, '2019_06_25_075412_create_contacts_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `body`, `image`, `user_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'useful posts', NULL, 1, 1, '2019-04-30 16:44:47', '2019-04-30 16:44:47'),
(6, 'tag post', NULL, 5, 2, '2019-04-30 20:45:21', '2019-04-30 20:45:21'),
(7, 'tag to others', NULL, 5, 1, '2019-04-30 20:47:00', '2019-04-30 20:47:00'),
(8, 'post tag test from hawary', NULL, 5, 1, '2019-04-30 21:19:00', '2019-04-30 21:19:00'),
(9, 'post body test upload image', NULL, 9, 1, '2019-05-13 12:33:38', '2019-05-13 12:33:38'),
(10, 'body', NULL, 1, 1, '2019-05-14 21:25:13', '2019-05-14 21:25:13'),
(11, 'post body', NULL, 1, 2, '2019-05-14 21:43:39', '2019-05-14 21:43:39'),
(13, 'fmfmmf', NULL, 10, 2, '2019-05-14 22:30:40', '2019-05-14 22:30:40'),
(14, 'hello from ui', NULL, 1, 1, '2019-06-16 08:43:19', '2019-06-16 08:43:19'),
(15, 'front test', NULL, 1, 2, '2019-06-16 08:45:25', '2019-06-16 08:45:25'),
(16, 'hello', NULL, 1, 3, '2019-06-16 08:48:22', '2019-06-16 08:48:22'),
(17, 'hhhh', NULL, 1, 1, '2019-06-21 10:48:50', '2019-06-21 10:48:50'),
(18, 'art', NULL, 1, 3, '2019-06-21 10:49:41', '2019-06-21 10:49:41'),
(19, 'mary posts', NULL, 22, 2, '2019-06-22 08:12:10', '2019-06-22 08:12:10'),
(20, 'test', NULL, 1, 2, '2019-06-26 07:42:40', '2019-06-26 07:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `post_media`
--

CREATE TABLE `post_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_media`
--

INSERT INTO `post_media` (`id`, `path`, `type`, `post_id`, `created_at`, `updated_at`) VALUES
(2, '_1556649887.MP4', 'video', 2, '2019-04-30 16:44:47', '2019-04-30 16:44:47'),
(5, '_1556664321.jpg', 'image', 6, '2019-04-30 20:45:21', '2019-04-30 20:45:21'),
(6, '_1556664420.jpg', 'image', 7, '2019-04-30 20:47:00', '2019-04-30 20:47:00'),
(7, '_1556666340.jpg', 'image', 8, '2019-04-30 21:19:00', '2019-04-30 21:19:00'),
(8, '_1557758018.png', 'image', 9, '2019-05-13 12:33:38', '2019-05-13 12:33:38'),
(9, '_1557876313.jpg', 'image', 10, '2019-05-14 21:25:13', '2019-05-14 21:25:13'),
(10, '_1557877419.jpg', 'image', 11, '2019-05-14 21:43:39', '2019-05-14 21:43:39'),
(11, '_1557880240.jpg', 'image', 13, '2019-05-14 22:30:40', '2019-05-14 22:30:40'),
(12, '_1560682102.png', 'image', 16, '2019-06-16 08:48:22', '2019-06-16 08:48:22'),
(13, '_1561121381.jpg', 'image', 18, '2019-06-21 10:49:41', '2019-06-21 10:49:41'),
(14, '_1561198330.jpg', 'image', 19, '2019-06-22 08:12:10', '2019-06-22 08:12:10'),
(15, '_1561542160.jpg', 'image', 20, '2019-06-26 07:42:40', '2019-06-26 07:42:40');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(8, 19, 1, '2019-06-22 10:30:05', '2019-06-22 10:30:05'),
(10, 6, 1, '2019-06-22 10:39:20', '2019-06-22 10:39:20'),
(14, 9, 1, '2019-06-22 15:04:37', '2019-06-22 15:04:37'),
(15, 2, 1, '2019-06-22 15:05:07', '2019-06-22 15:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Expert', NULL, NULL),
(3, 'Talent', NULL, NULL),
(4, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `table_follow_user`
--

CREATE TABLE `table_follow_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `follower_id` int(10) UNSIGNED DEFAULT NULL,
  `leader_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '4',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `profile_image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `bio`, `links`) VALUES
(1, 1, 'ahmed', 'ahmed@example.com', '$2y$10$575B8Pm9KTqWa9FLhuCGDOg5dIO.97HTBuVknuJwyKBEmxOQWf2sm', 'ahmed_1556656384.jpg', NULL, 'SIw8etp0yH85axaSN0RYYW9VzT9E5zf9UVaREtt7WwYOoEOdNb4sfdaI4qhY', '2019-04-30 15:05:36', '2019-06-22 14:32:11', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'https://www.facebook.com'),
(2, 3, 'john Doe', 'john@gmail.com', '$2y$10$jCPr/Ou8xqXgXYcshK8NA.hSM2FO/NVb1UYPTPhQ7AkVuNkze/kUi', 'john-doe_1556653676.png', NULL, '1P0ZYdVsh60ianOeIGSuCBJZQXSd3DQkF9Y9z626yRevoFJx83chFcqR9yq8', '2019-04-30 17:47:56', '2019-04-30 17:47:56', '', ''),
(3, 3, 'maria', 'maria@example.com', '$2y$10$YfmfgUzIqyg9C7hq2iZLUuBeUBqTtO3ZrX4WQsyXcS7Z0hQJP1gTK', 'maria_1556656195.jpg', NULL, 'ivjlcV4YHNI38NeyZUmncI3g2aLPSJJWtcCRsYzM2RSJr9yM3eEtxcNFsT2d', '2019-04-30 18:29:55', '2019-06-21 16:51:49', 'my bio here', 'www.facebook.com'),
(4, 4, 'osama', 'osama@example.com', '$2y$10$rVAR8tcdVJgKbBnVLpg7GuISxo6bmefww7lE4bdDgpPnZX2zdfBry', 'osama_1561246948.jpg', NULL, 'SW7pWNq8Ytu7ICODi7nbY8ek1UhcTq2jaL1UyYuQjA44OmDAOWBIoNZk6KBr', '2019-04-30 18:51:57', '2019-06-22 21:42:28', '', ''),
(5, 3, 'hawary', 'hawary@example.com', '$2y$10$XRz9GWsp9BEClmone25yjeB9lXB7zuh9UzXVjJf1sfUJ2DUZ3L24y', 'hawary_1556657612.jpg', NULL, 'VOgWC9qLxrWlINoyZfB3ry2xfhZcesQxEJ0Mvdmqzs0wf7uU4x7PSMK60u3M', '2019-04-30 18:52:48', '2019-04-30 18:53:32', '', ''),
(6, 4, 'montasser', 'montasser@example.com', '$2y$10$h0laIAJXVfrr5qn/Ptv87uui45GWVxfI8WwVX5ivCV8HF8KZoSjOK', 'montasser_1561247326.jpg', NULL, '3XhbYAY4cDXz3FmFjJulQ6qbesMZT1b88v8i6PF2yGQQ5wANSSHUtuKt5UeO', '2019-04-30 21:01:13', '2019-06-22 21:48:46', '', ''),
(7, 3, 'sayed', 'sayed@example.com', '$2y$10$oE62WnHTvV/DXNYlx9ypMuq8IWxhCJKCOk/9Z/X0kebtzPIj0vItq', 'sayed_1561247344.png', NULL, 'Z9ksBuhB4ngymobu3tyFxmPx6PggqlGMoRR7jDViGGv9I8e5RPspsBjSV4ji', '2019-04-30 21:06:17', '2019-06-22 21:49:04', '', ''),
(8, 1, 'taras', 'taras@example.com', '$2y$10$dHgQysUtMqQgOLSqNwSADuN1Mx4NtR3JHZ0.Ys/6/k5/bNSBjAjVG', 'taras_1556666114.jpg', NULL, '7xgAD7XjdczsB7h0fwQXKvgTavBi8LV4ZW5Jz6ImEVNy4mIy1pF782UGOhmN', '2019-04-30 21:13:41', '2019-04-30 21:15:14', '', ''),
(9, 3, 'mohammed', 'mohammed@example.com', '$2y$10$YUzmm/HW1lUjk1heV0jPt.wMi1XK2.SXwmQNatjZdpTWzfkBHhmJ6', 'mohammed_1557876886.jpg', NULL, '1wrojjG2vtqLUql3uf50w9jryLoNpi9DR6k1WUJfgE2vMJiCBE5zkLvu1jYf', '2019-05-13 12:32:04', '2019-05-14 21:34:47', '', ''),
(10, 3, 'ham', 'ham@example.com', '$2y$10$T/XP2wBS25oERYJUqmpn/OP.BDcouu9dopkEvXdw6g0rc4FdzkqaW', 'ham_1557880317.png', NULL, 'tVFTrYdcoeVSOwAqgCUGrJSUC9sXyAaAbVzlDxnp7wMLtnwMAKUbqanlBw4F', '2019-05-14 22:30:06', '2019-05-14 22:31:58', '', ''),
(11, 4, 'hamza', 'hamza@example.com', '$2y$10$DuFoZb4OuBS.J5zzgd0dQuA3RTG3SInvmxD85L459o4ByZs.eSgd.', 'hamza_1560786935.jpg', NULL, NULL, '2019-06-11 02:15:34', '2019-06-17 13:55:35', '', ''),
(13, 4, 'benten', 'example@example.com', '$2y$10$ksrDcI/yfQATW3pMNA/VRefft9r9VwZ/Tl113NY6Yque9ja/jvZ96', 'benten_1560786856.jpg', NULL, NULL, '2019-06-11 03:02:34', '2019-06-17 13:54:16', '', ''),
(17, 4, 'khaled', 'khaled@gmail.com', '$2y$10$Izgzwgy1dGi3SCcocWG5fuNpFi1TpJ.zYuX9bBQulnWlk0/DpWUpy', 'khaled_1560786830.jpg', NULL, NULL, '2019-06-11 06:07:32', '2019-06-17 13:53:50', '', ''),
(20, 3, 'wall', 'wall@example.com', '$2y$10$U/Hr0s7lEsz10K4YJGNFYeI6dmEXG1V4fIJQZGVWc1yHJAcRVpPu.', 'wall_1560786734.png', NULL, 'VZr6SUY8I5GJRsCid2NiAvUqsa6gExFDRBXAzng9lk36PvXbkVXhdxaElzBq', '2019-06-11 06:51:35', '2019-06-17 13:52:14', '', ''),
(21, 4, 'gamal', 'smah@example.com', '$2y$10$A4OhUV5GkeOJIu9Qly5NfOp0xb8CE3/2WS7wYLuOG8JVGy/1ynxY.', 'samah_1560786767.jpeg', NULL, NULL, '2019-06-11 06:54:38', '2019-06-17 13:53:02', '', ''),
(22, 3, 'mary', 'mary@example.com', '$2y$10$384vG12fh5aI8T0aq2ehmOujLJT7HwH/hyVO5rtT0MaEhiq9j/Kii', 'mary_1561196707.jpg', NULL, 'NgAPTbkMRB4qx3UoGbSwlSIfkwMDfXMI0OY1Xy3pirKOeuX4fhG7LnAai7AS', '2019-06-21 05:12:33', '2019-06-22 07:45:08', 'mary bio', 'www.facebook.com/mary');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_index` (`post_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `followers_user_id_index` (`user_id`),
  ADD KEY `followers_friend_id_index` (`friend_id`);

--
-- Indexes for table `follow_system`
--
ALTER TABLE `follow_system`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follow_system_follower_id_index` (`follower_id`),
  ADD KEY `follow_system_leader_id_index` (`leader_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `friends_user_id_1_index` (`user_id_1`),
  ADD KEY `friends_user_id_2_index` (`user_id_2`);

--
-- Indexes for table `friend_post`
--
ALTER TABLE `friend_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_post_id_index` (`post_id`),
  ADD KEY `likes_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_index` (`user_id`),
  ADD KEY `posts_category_id_index` (`category_id`);

--
-- Indexes for table `post_media`
--
ALTER TABLE `post_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_media_post_id_index` (`post_id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_post_id_index` (`post_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_follow_user`
--
ALTER TABLE `table_follow_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `table_follow_user_follower_id_index` (`follower_id`),
  ADD KEY `table_follow_user_leader_id_index` (`leader_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `follow_system`
--
ALTER TABLE `follow_system`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `friend_post`
--
ALTER TABLE `friend_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post_media`
--
ALTER TABLE `post_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `table_follow_user`
--
ALTER TABLE `table_follow_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `followers`
--
ALTER TABLE `followers`
  ADD CONSTRAINT `followers_friend_id_foreign` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `followers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `follow_system`
--
ALTER TABLE `follow_system`
  ADD CONSTRAINT `follow_system_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follow_system_leader_id_foreign` FOREIGN KEY (`leader_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_media`
--
ALTER TABLE `post_media`
  ADD CONSTRAINT `post_media_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `table_follow_user`
--
ALTER TABLE `table_follow_user`
  ADD CONSTRAINT `table_follow_user_follower_id_foreign` FOREIGN KEY (`follower_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `table_follow_user_leader_id_foreign` FOREIGN KEY (`leader_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
