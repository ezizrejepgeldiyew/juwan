-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 09 2023 г., 17:21
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `juwan`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gideon Littel Sr.', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(2, 'Tiara Hudson', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(3, 'Alayna Mitchell', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(4, 'Easter Kilback Jr.', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(5, 'King Waelchi', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(6, 'Dr. Jo Stracke', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(7, 'Ethel Gleason', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(8, 'Dena Upton', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(9, 'Brycen Medhurst', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(10, 'Freeman Lakin', '2023-06-02 13:31:42', '2023-06-02 13:31:42');

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` varchar(255) NOT NULL,
  `ganre_id` varchar(255) NOT NULL,
  `audio` text NOT NULL,
  `file` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `name`, `photo`, `category_id`, `author_id`, `ganre_id`, `audio`, `file`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Rene Bayer', 'images/books/2023-06-07/3dc1eb09bc10e95ac9fc1e3997077ab2.jpg', 1, '1', '1', 'audio//2023-06-07/12835cf8cb40cf87862d8783701e9ba8.mp3', 'file/books/2023-06-07/16727b7d10e1aeb035faf537c19e6793.pdf', NULL, '2023-06-02 13:31:42', '2023-06-07 14:08:34'),
(2, 'Yazmin Schuster III', 'images/books/2023-06-06/3-7.jpg', 1, '1', '1', 'audio//2023-06-06/1684866758_aydayozin-goyber-meni-2023.mp3', 'file/books/2023-06-06/02-06-2023 11_44_15Mergen.pdf', NULL, '2023-06-02 13:31:42', '2023-06-06 14:49:29'),
(5, 'Dr. Ara Carter Sr.', 'https://via.placeholder.com/100x100.png/008866?text=omnis', 6, '10', '1', 'audio//2023-05-27/1684866758_aydayozin-goyber-meni-2023.mp3', 'file/books/2023-05-31/Jumageldi Mülkiýew~Seljuklar-2010`Türkmen döwlet neşirýat gullugy.pdf', 'Sing her \"Turtle Soup,\" will you, won\'t you, will you join the dance? Will you, won\'t you, will you join the dance. So.', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(6, 'Akeem Keebler', 'https://via.placeholder.com/100x100.png/005599?text=voluptatibus', 10, '1', '2', 'audio//2023-05-27/1684866758_aydayozin-goyber-meni-2023.mp3', 'file/books/2023-05-31/Jumageldi Mülkiýew~Seljuklar-2010`Türkmen döwlet neşirýat gullugy.pdf', 'ME\' were beautifully marked in currants. \'Well, I\'ll eat it,\' said the King, \'that only makes the matter with it.', '2023-06-02 13:31:42', '2023-06-02 13:31:42');

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Clifford Harris', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(2, 'Dr. Sarai Hodkiewicz PhD', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(3, 'Jeffry Mante', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(4, 'Prof. Marjory Cormier DVM', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(5, 'Stephen Sauer', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(6, 'Dr. Crystal Hudson Sr.', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(7, 'Edd Schowalter', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(8, 'Prof. Cleveland Nader IV', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(9, 'Prof. Haskell Daniel', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(10, 'Esther Fay', '2023-06-02 13:31:42', '2023-06-02 13:31:42');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
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
-- Структура таблицы `favorits`
--

CREATE TABLE `favorits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favorit_id` int(11) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `favorits`
--

INSERT INTO `favorits` (`id`, `favorit_id`, `model_name`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 6, 'App\\Models\\Book', 1, '2023-06-06 06:40:16', '2023-06-06 06:40:16'),
(4, 6, 'App\\Models\\Book', 2, '2023-06-06 06:51:33', '2023-06-06 06:51:33'),
(5, 6, 'App\\Models\\Book', 3, '2023-06-06 06:51:37', '2023-06-06 06:51:37'),
(6, 1, 'App\\Models\\Book', 3, '2023-06-06 06:51:44', '2023-06-06 06:51:44'),
(7, 1, 'App\\Models\\Podkast', 3, '2023-06-08 12:25:41', '2023-06-08 12:25:41');

-- --------------------------------------------------------

--
-- Структура таблицы `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `genres`
--

INSERT INTO `genres` (`id`, `name`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Söýgi hakda', 'images/genre/2023-06-08/f151e6b2693cfe46642cac68926a120a.svg', '2023-06-08 06:35:25', '2023-06-08 06:35:25'),
(2, 'Höweslendirmek hakda', 'images/genre/2023-06-08/5ceead0c2bd76d72cb726e27b5af22f4.svg', '2023-06-08 07:08:41', '2023-06-08 07:08:41');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(7, '2016_06_01_000004_create_oauth_clients_table', 1),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(11, '2023_04_12_122013_create_categories_table', 1),
(12, '2023_04_13_143346_create_books_table', 1),
(13, '2023_04_15_132839_create_posts_table', 1),
(15, '2023_05_01_160631_create_authors_table', 1),
(17, '2023_05_10_190838_create_otps_table', 1),
(18, '2023_05_24_161909_create_post_photos_table', 1),
(19, '2023_05_24_161916_create_post_videos_table', 1),
(20, '2023_05_24_161923_create_post_books_table', 1),
(21, '2023_06_02_173432_create_permission_tables', 1),
(23, '2023_06_03_123617_create_favorits_table', 2),
(24, '2023_05_01_160638_create_genres_table', 3),
(27, '2023_04_15_140853_create_podkasts_table', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Структура таблицы `otps`
--

CREATE TABLE `otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
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

--
-- Дамп данных таблицы `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(3, 'App\\Models\\User', 6, 'JuwanToken', '136a0e5ac60a0c8f0ab7c0e154cd5f825307aba552395ee8f0c8ebe7554bf95b', '[\"*\"]', NULL, NULL, '2023-06-02 15:17:18', '2023-06-02 15:17:18'),
(4, 'App\\Models\\User', 6, 'JuwanToken', '07bf6df05804972cb5803e16803e94248d859c5eb16be31333de99db4de8b347', '[\"*\"]', '2023-06-02 15:26:01', NULL, '2023-06-02 15:17:43', '2023-06-02 15:26:01'),
(5, 'App\\Models\\User', 6, 'JuwanToken', '79da50211e4e74e58f5c0c8896113bcf43c4c4946e6fc4d29c368dfd5efbcf73', '[\"*\"]', NULL, NULL, '2023-06-03 06:11:33', '2023-06-03 06:11:33'),
(6, 'App\\Models\\User', 6, 'api-token', '208830416bde754ea33878d5d0456be89959236087d291b6a765e1ba320c11ad', '[\"*\"]', NULL, NULL, '2023-06-03 06:13:14', '2023-06-03 06:13:14'),
(7, 'App\\Models\\User', 6, 'api-token', '6259206500c7af6f29f15746f4fd0a20b78f267e1a593a344f557e340012ac19', '[\"*\"]', NULL, NULL, '2023-06-03 06:13:17', '2023-06-03 06:13:17'),
(8, 'App\\Models\\User', 7, 'JuwanToken', 'e6bb6d2bfdff8dedb4644c330c8dc0b9709d0a1b9e622fdf7823f52c75380dd7', '[\"*\"]', NULL, NULL, '2023-06-03 06:31:48', '2023-06-03 06:31:48');

-- --------------------------------------------------------

--
-- Структура таблицы `podkasts`
--

CREATE TABLE `podkasts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` text NOT NULL,
  `genre_id` int(11) NOT NULL,
  `audio` text NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `podkasts`
--

INSERT INTO `podkasts` (`id`, `title`, `photo`, `genre_id`, `audio`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'images/podkast/2023-06-08/d782e6c7613fc8b913a89e72fdfc5e88.jpg', 1, 'audio/podkast/2023-06-08/5114ebb2edbbd2a8df9423ed806ea3b0.mp3', '1 seriya', '2023-06-08 11:28:18', '2023-06-08 11:28:18'),
(2, 'TEst1', 'images/podkast/2023-06-08/224034f350f173882f6ac8a778cfba4c.jpg', 2, 'audio/podkast/2023-06-08/f3781f9ec3765ff957fa2f4529665237.mp3', NULL, '2023-06-08 11:28:40', '2023-06-08 11:28:40');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `relationable_id` int(11) NOT NULL,
  `relationable_type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `relationable_id`, `relationable_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'App\\Models\\PostBook', '2023-06-03 07:45:26', '2023-06-03 07:45:26'),
(2, 2, 'App\\Models\\PostBook', '2023-06-03 07:45:26', '2023-06-03 07:45:26'),
(3, 1, 'App\\Models\\PostPhoto', '2023-06-06 10:18:03', '2023-06-06 10:18:03'),
(4, 2, 'App\\Models\\PostPhoto', '2023-06-06 10:18:46', '2023-06-06 10:18:46'),
(8, 7, 'App\\Models\\PostVideo', '2023-06-06 12:55:38', '2023-06-06 12:55:38'),
(9, 8, 'App\\Models\\PostVideo', '2023-06-06 13:04:29', '2023-06-06 13:04:29'),
(10, 9, 'App\\Models\\PostVideo', '2023-06-06 13:33:11', '2023-06-06 13:33:11'),
(14, 10, 'App\\Models\\PostVideo', '2023-06-06 14:13:38', '2023-06-06 14:13:38'),
(15, 3, 'App\\Models\\PostPhoto', '2023-06-07 13:49:48', '2023-06-07 13:49:48');

-- --------------------------------------------------------

--
-- Структура таблицы `post_books`
--

CREATE TABLE `post_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_books`
--

INSERT INTO `post_books` (`id`, `book_id`, `category_id`, `author_id`, `photo`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 4, 'images/books/2023-06-06/Magtimguli_Pyragy.jpg', 'Rene Bayer', 'Knave of Hearts, and I shall only look up in a natural way again. \'I should think you might like to drop the jar for.', '2023-06-03 07:45:26', '2023-06-03 07:45:26'),
(2, 2, 4, 9, 'images/books/2023-06-06/3-7.jpg', 'Yazmin Schuster III', 'And concluded the banquet--] \'What IS the fun?\' said Alice. \'I\'ve tried every way, and the words \'DRINK ME,\' but.', '2023-06-03 07:45:26', '2023-06-03 07:45:26');

-- --------------------------------------------------------

--
-- Структура таблицы `post_photos`
--

CREATE TABLE `post_photos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `photos` text NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_photos`
--

INSERT INTO `post_photos` (`id`, `category_id`, `photos`, `description`, `created_at`, `updated_at`) VALUES
(1, 5, '[\"images\\/Posts\\/photos\\/2023-06-06\\/Bez-imeni-1_7IJaT6HlD3.jpg\",\"images\\/Posts\\/photos\\/2023-06-06\\/3-7.jpg\"]', NULL, '2023-06-06 10:18:03', '2023-06-06 10:18:03'),
(2, 10, '[\"images\\/Posts\\/photos\\/2023-06-06\\/Magtimguli_Pyragy.jpg\"]', NULL, '2023-06-06 10:18:46', '2023-06-06 10:18:46'),
(3, 1, '[\"images\\/Posts\\/photos\\/2023-06-07\\/8df3ad4a2b6f797927705099ac4a24c1.webp\",\"images\\/Posts\\/photos\\/2023-06-07\\/5f1e73310210f0fa678f310b867ce727.jpg\",\"images\\/Posts\\/photos\\/2023-06-07\\/8c86ca00d19bab09799e1fed0af5e86f.jpg\",\"images\\/Posts\\/photos\\/2023-06-07\\/310d4f8afddced50c5f58e3d6757620a.jpg\"]', NULL, '2023-06-07 13:49:48', '2023-06-07 13:49:48');

-- --------------------------------------------------------

--
-- Структура таблицы `post_videos`
--

CREATE TABLE `post_videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `video` text NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `post_videos`
--

INSERT INTO `post_videos` (`id`, `category_id`, `video`, `description`, `created_at`, `updated_at`) VALUES
(7, 1, 'video/Posts/videos/2023-06-06/post.mp4', NULL, '2023-06-06 13:33:38', '2023-06-06 13:34:02'),
(8, 1, 'video/Posts/videos/2023-06-06/$2y$10$bZQjvQ5DN0BB0.mp4', NULL, '2023-06-06 13:34:13', '2023-06-06 13:34:13'),
(9, 8, 'video/Posts/videos/2023-06-06/$2y$10$iolJnCp46lRYL.mp4', NULL, '2023-06-06 13:34:39', '2023-06-06 13:34:39'),
(10, 1, 'video/Posts/videos/2023-06-06/$2y$10$PmfA9OjGJEtxj.mp4', NULL, '2023-06-06 14:13:38', '2023-06-06 14:13:38');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(2, 'user', 'web', '2023-06-02 13:31:42', '2023-06-02 13:31:42'),
(3, 'moderator', 'web', '2023-06-02 13:31:42', '2023-06-02 13:31:42');

-- --------------------------------------------------------

--
-- Структура таблицы `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `last_otp_id` int(11) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `device` varchar(255) NOT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `avatar`, `email`, `phone`, `last_otp_id`, `password`, `device`, `last_seen`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eziz', 'Rejepgeldiyew', NULL, 'ezizrejepgeldiyew@gmail.com', NULL, NULL, '$2y$10$A540HCJEyWAfAthkK7K2MefvwgN2R4ChWtPNQjHHWNTbiU8iqPWKy', 'web', '2023-06-09 12:50:43', NULL, '2023-06-02 13:31:42', '2023-06-09 12:50:43'),
(7, 'Eziz', NULL, NULL, NULL, '62043817', NULL, '$2y$10$32jVE7n9TNrf0O0goPbjqOuuYjbAn8BOYMNx8WWxuRZ3ko1CMDgmq', 'android', NULL, NULL, '2023-06-03 06:31:48', '2023-06-03 06:31:48');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `favorits`
--
ALTER TABLE `favorits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Индексы таблицы `otps`
--
ALTER TABLE `otps`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Индексы таблицы `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `podkasts`
--
ALTER TABLE `podkasts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post_books`
--
ALTER TABLE `post_books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_books_book_id_unique` (`book_id`);

--
-- Индексы таблицы `post_photos`
--
ALTER TABLE `post_photos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `post_videos`
--
ALTER TABLE `post_videos`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Индексы таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`),
  ADD UNIQUE KEY `users_last_otp_id_unique` (`last_otp_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `favorits`
--
ALTER TABLE `favorits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `otps`
--
ALTER TABLE `otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `podkasts`
--
ALTER TABLE `podkasts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `post_books`
--
ALTER TABLE `post_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `post_photos`
--
ALTER TABLE `post_photos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `post_videos`
--
ALTER TABLE `post_videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
