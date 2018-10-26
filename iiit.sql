-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 01:31 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiit`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `post_id`, `created_at`, `updated_at`, `file`) VALUES
(9, 'root', 'root@gmail.com', 'good tutorial', 17, '2017-08-18 02:42:28', '2017-08-18 02:42:28', 'boy.jpg'),
(10, 'root', 'root@gmail.com', 'Hey!', 15, '2017-08-18 02:43:16', '2017-08-18 02:43:16', 'boy.jpg'),
(11, 'root1', 'root1@gmail.com', 'Nice!', 17, '2017-08-18 02:44:00', '2017-08-18 02:44:00', 'avatar04.png'),
(12, 'root2', 'root2@gmail.com', 'Excellent!', 17, '2017-08-18 02:45:00', '2017-08-18 02:45:00', 'avatar3.png'),
(13, 'root', 'root@gmail.com', 'Liked it!', 16, '2017-08-21 03:07:57', '2017-08-21 03:07:57', 'boy.jpg'),
(14, 'root', 'root@gmail.com', 'Nice one', 18, '2017-08-22 04:36:27', '2017-08-22 04:36:27', 'boy.jpg'),
(15, 'root2', 'root2@gmail.com', 'Good to hear', 18, '2017-08-22 04:40:22', '2017-08-22 04:40:22', 'avatar3.png'),
(16, 'root', 'root@gmail.com', 'Another comment!', 17, '2017-08-24 01:32:31', '2017-08-24 01:32:31', 'boy.jpg'),
(17, 'root1', 'root1@gmail.com', 'Nice one', 19, '2017-08-30 02:03:15', '2017-08-30 02:03:15', 'avatar04.png'),
(18, 'root', 'root@gmail.com', 'Dummy Text.', 20, '2017-09-06 02:57:31', '2017-09-06 02:57:31', 'boy.jpg'),
(19, 'T RAGHAVENDRA SAGAR', 'sagar05091997@gmail.com', 'Yes', 20, '2017-09-06 03:05:27', '2017-09-06 03:05:27', 'user1-128x128.jpg'),
(20, 'root', 'root@gmail.com', 'Nice', 23, '2017-10-23 03:00:02', '2017-10-23 03:00:02', 'boy.jpg'),
(21, 'root', 'root@gmail.com', 'Nice one bro', 22, '2017-10-23 23:32:23', '2017-10-23 23:32:23', 'boy.jpg'),
(22, 'root', 'root@gmail.com', 'I am ome of them!!!!!!!!!!', 28, '2017-12-09 00:43:42', '2017-12-09 00:43:42', 'boy.jpg'),
(23, 'root', 'root@gmail.com', 'Its nice!', 30, '2017-12-12 11:36:23', '2017-12-12 11:36:23', 'Screenshot (74).png'),
(24, 'root', 'root@gmail.com', 'duib ir u', 31, '2018-03-06 00:43:05', '2018-03-06 00:43:05', 'Screenshot (74).png');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friendships`
--

CREATE TABLE `friendships` (
  `id` int(10) UNSIGNED NOT NULL,
  `requester` int(11) NOT NULL,
  `user_requested` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `friendships`
--

INSERT INTO `friendships` (`id`, `requester`, `user_requested`, `status`, `created_at`, `updated_at`) VALUES
(4, 5, 1, 1, '2017-08-22 04:33:19', '2017-08-22 04:33:19'),
(5, 2, 5, 1, '2017-09-06 01:23:47', '2017-09-06 01:23:47'),
(6, 6, 1, 1, '2017-09-06 01:50:30', '2017-09-06 01:50:30'),
(7, 6, 5, 1, '2017-09-06 01:51:32', '2017-09-06 01:51:32'),
(8, 6, 2, 1, '2017-09-06 02:59:51', '2017-09-06 02:59:51'),
(9, 6, 4, 1, '2017-09-06 04:30:13', '2017-09-06 04:30:13'),
(10, 2, 4, 1, '2017-09-06 05:20:01', '2017-09-06 05:20:01'),
(11, 6, 7, 1, '2017-09-07 04:33:05', '2017-09-07 04:33:05'),
(12, 7, 5, 1, '2017-09-08 01:43:35', '2017-09-08 01:43:35'),
(13, 7, 4, 1, '2017-09-08 02:13:57', '2017-09-08 02:13:57'),
(14, 8, 4, 1, '2017-09-08 02:25:42', '2017-09-08 02:25:42'),
(15, 4, 5, 1, '2017-10-23 03:01:24', '2017-10-23 03:01:24'),
(16, 1, 4, 1, '2017-12-08 02:50:50', '2017-12-08 02:50:50'),
(17, 1, 2, 1, '2017-12-12 11:35:23', '2017-12-12 11:35:23'),
(18, 2, 7, 1, '2018-03-06 00:44:04', '2018-03-06 00:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `likeables`
--

CREATE TABLE `likeables` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `likeable_id` int(11) NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likeables`
--

INSERT INTO `likeables` (`id`, `user_id`, `likeable_id`, `likeable_type`, `deleted_at`, `created_at`, `updated_at`) VALUES
(10, 2, 17, 'App\\Post', NULL, '2017-08-18 02:02:59', '2017-08-18 02:02:59'),
(11, 1, 17, 'App\\Post', NULL, '2017-08-18 02:21:18', '2017-08-18 02:21:18'),
(12, 4, 17, 'App\\Post', NULL, '2017-08-18 02:55:05', '2017-08-18 02:55:05'),
(13, 2, 14, 'App\\Post', NULL, '2017-08-18 04:29:31', '2017-08-18 04:29:31'),
(14, 5, 18, 'App\\Post', NULL, '2017-08-22 04:35:56', '2017-08-22 04:35:56'),
(15, 1, 18, 'App\\Post', NULL, '2017-08-22 04:36:09', '2017-08-22 04:36:09'),
(16, 4, 18, 'App\\Post', NULL, '2017-08-22 04:40:13', '2017-08-22 04:40:35'),
(17, 4, 19, 'App\\Post', NULL, '2017-08-30 02:01:42', '2017-08-30 02:01:42'),
(18, 2, 19, 'App\\Post', NULL, '2017-08-30 02:03:00', '2017-09-06 01:03:44'),
(19, 2, 18, 'App\\Post', NULL, '2017-09-06 01:03:48', '2017-09-06 01:03:48'),
(20, 1, 20, 'App\\Post', NULL, '2017-09-06 02:56:54', '2017-09-06 02:56:54'),
(21, 6, 20, 'App\\Post', NULL, '2017-09-06 03:03:20', '2017-09-06 03:03:20'),
(22, 4, 20, 'App\\Post', NULL, '2017-09-06 06:47:52', '2017-09-06 06:47:52'),
(23, 6, 22, 'App\\Post', NULL, '2017-09-07 03:41:49', '2017-09-07 03:41:49'),
(24, 7, 22, 'App\\Post', NULL, '2017-09-07 03:44:44', '2017-09-07 03:44:44'),
(25, 4, 23, 'App\\Post', NULL, '2017-09-08 01:23:39', '2017-09-08 01:23:39'),
(26, 6, 23, 'App\\Post', NULL, '2017-09-08 01:23:43', '2017-09-08 01:23:43'),
(27, 7, 3, 'App\\Post', NULL, '2017-09-08 01:32:11', '2017-09-08 01:32:11'),
(28, 1, 3, 'App\\Post', '2017-10-23 02:59:45', '2017-10-23 02:59:40', '2017-10-23 02:59:45'),
(29, 1, 23, 'App\\Post', NULL, '2017-10-23 02:59:57', '2017-10-23 02:59:57'),
(30, 1, 22, 'App\\Post', NULL, '2017-10-23 23:32:17', '2017-10-23 23:32:17'),
(31, 1, 24, 'App\\Post', NULL, '2017-10-23 23:33:02', '2017-11-29 00:23:36'),
(32, 1, 26, 'App\\Post', NULL, '2017-12-07 22:22:19', '2017-12-07 22:22:19'),
(33, 1, 28, 'App\\Post', NULL, '2017-12-09 00:43:27', '2017-12-09 00:43:27'),
(34, 4, 28, 'App\\Post', NULL, '2017-12-09 00:46:49', '2017-12-09 00:46:49'),
(35, 1, 30, 'App\\Post', NULL, '2017-12-12 11:36:14', '2017-12-12 11:36:14'),
(36, 1, 31, 'App\\Post', NULL, '2018-03-06 00:42:58', '2018-03-06 00:42:58'),
(37, 2, 31, 'App\\Post', NULL, '2018-03-06 00:43:27', '2018-03-06 00:43:27'),
(38, 2, 35, 'App\\Post', NULL, '2018-03-10 04:40:52', '2018-03-10 04:40:52');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `likeable_id` int(11) NOT NULL,
  `likeable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `conversation_id` int(11) NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2017_07_27_120306_create_posts_table', 1),
(46, '2017_08_01_105201_create_profiles_table', 1),
(47, '2017_08_01_122510_create_friendships_table', 1),
(48, '2017_08_03_072102_create_notifications_table', 1),
(49, '2017_08_03_113508_create_messages_table', 1),
(50, '2017_08_03_113631_create_conversations_table', 1),
(51, '2017_08_04_083211_create_comments_table', 2),
(52, '2017_08_10_082448_create_skills_table', 3),
(53, '2017_08_10_084612_create_skills_users_table', 4),
(54, '2017_08_10_101302_create_profiles_skills_table', 5),
(55, '2017_08_10_101632_create_profile_skill_table', 6),
(56, '2017_08_16_070111_create_likes_table', 7),
(57, '2017_08_16_073227_create_likeables_table', 8),
(58, '2017_08_18_080723_add_image_to_comments_table', 9),
(59, '2017_11_29_055958_create_products_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_logged` int(11) NOT NULL,
  `user_accepted` int(11) NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_logged`, `user_accepted`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'accepted your friend request', 1, '2017-08-04 01:16:22', '2017-08-04 01:16:22'),
(2, 1, 3, 'accepted your friend request', 1, '2017-08-04 02:26:01', '2017-08-04 02:26:01'),
(3, 2, 3, 'accepted your friend request', 1, '2017-08-08 05:32:59', '2017-08-08 05:32:59'),
(4, 1, 5, 'accepted your friend request', 1, '2017-08-22 04:33:36', '2017-08-22 04:33:36'),
(5, 5, 2, 'accepted your friend request', 1, '2017-09-06 01:24:35', '2017-09-06 01:24:35'),
(6, 5, 6, 'accepted your friend request', 1, '2017-09-06 02:18:56', '2017-09-06 02:18:56'),
(7, 1, 6, 'accepted your friend request', 1, '2017-09-06 02:25:04', '2017-09-06 02:25:04'),
(8, 2, 6, 'accepted your friend request', 1, '2017-09-06 03:00:24', '2017-09-06 03:00:24'),
(9, 4, 6, 'accepted your friend request', 1, '2017-09-06 04:30:25', '2017-09-06 04:30:25'),
(10, 4, 2, 'accepted your friend request', 1, '2017-09-06 05:20:18', '2017-09-06 05:20:18'),
(11, 4, 6, 'accepted your friend request', 1, '2017-09-06 06:14:43', '2017-09-06 06:14:43'),
(12, 7, 6, 'accepted your friend request', 1, '2017-09-07 04:33:13', '2017-09-07 04:33:13'),
(13, 5, 7, 'accepted your friend request', 1, '2017-09-08 01:52:42', '2017-09-08 01:52:42'),
(14, 4, 7, 'accepted your friend request', 1, '2017-09-08 03:09:42', '2017-09-08 03:09:42'),
(15, 4, 8, 'accepted your friend request', 1, '2017-09-08 03:10:07', '2017-09-08 03:10:07'),
(16, 5, 4, 'accepted your friend request', 1, '2017-10-23 03:01:31', '2017-10-23 03:01:31'),
(17, 4, 1, 'accepted your friend request', 1, '2017-12-09 00:46:15', '2017-12-09 00:46:15'),
(18, 2, 1, 'accepted your friend request', 1, '2017-12-12 10:40:22', '2017-12-12 10:40:22'),
(19, 2, 1, 'accepted your friend request', 1, '2017-12-12 11:35:47', '2017-12-12 11:35:47'),
(20, 7, 2, 'accepted your friend request', 1, '2018-03-06 00:44:36', '2018-03-06 00:44:36');

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
  `user_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, 'hbbbbb', '', NULL, '2017-08-04 02:09:09', '2017-08-04 02:09:09'),
(4, 1, 'This is my first post!cheerss', '', NULL, '2017-08-04 02:17:15', '2017-08-04 02:17:15'),
(5, 2, 'Today there is an event !!!!!!', '', NULL, '2017-08-04 02:20:57', '2017-08-04 02:20:57'),
(6, 1, 'There are only two friends!!', '', NULL, '2017-08-04 02:24:22', '2017-08-04 02:24:22'),
(7, 2, 'Ya dude!', '', NULL, '2017-08-04 02:24:40', '2017-08-04 02:24:40'),
(8, 3, 'A new friend joined!!', '', NULL, '2017-08-04 02:31:54', '2017-08-04 02:31:54'),
(9, 3, 'loremLorem ipsum dolor sit amet, consectetur adipisicing elit. Est possimus sit maiores quisquam quasi id perspiciatis rerum ullam at ut aspernatur dignissimos dolores fugit velit, ab tempora voluptatem quidem explicabo.', '', NULL, '2017-08-04 02:34:19', '2017-08-04 02:34:19'),
(10, 3, 'The Illuminate\\Contracts\\Cache\\Factory and Illuminate\\Contracts\\Cache\\Repository contracts provide access to Laravel\'s cache services. The Factory contract provides access to all cache drivers defined for your application. The Repository contract is typically an implementation of the default cache driver for your application as specified by your cache configuration file.', '', NULL, '2017-08-04 04:53:55', '2017-08-04 04:53:55'),
(11, 1, 'It\'s Kinda Linked In for students!', '', NULL, '2017-08-07 06:02:30', '2017-08-07 06:02:30'),
(13, 2, 'Chabwe', '', NULL, '2017-08-08 05:42:20', '2017-08-08 05:42:20'),
(14, 2, 'Changes are not reflected in php.ini', '', NULL, '2017-08-08 05:42:43', '2017-08-08 05:42:43'),
(15, 4, 'Hello guys!', '', NULL, '2017-08-10 05:17:43', '2017-08-10 05:17:43'),
(16, 1, 'In addition to template inheritance and displaying data, Blade also provides convenient shortcuts for common PHP control structures, such as conditional statements and loops. These shortcuts provide a very clean, terse way of working with PHP control structures, while also remaining familiar to their PHP counterparts.', '', NULL, '2017-08-10 05:48:00', '2017-08-10 05:48:00'),
(17, 1, 'Eloquent relationships are defined as methods on your Eloquent model classes. Since, like Eloquent models themselves, relationships also serve as powerful query builders, defining relationships as methods provides powerful method chaining and querying capabilities.', '', NULL, '2017-08-17 00:55:11', '2017-08-17 00:55:11'),
(18, 5, 'Hey there!\r\nAdding Pure Chat to your site is easy!', '', NULL, '2017-08-22 04:35:49', '2017-08-22 04:35:49'),
(19, 4, 'This Wikipedia is written in English. Started in 2001, it currently contains 5,468,280 articles. Many other Wikipedias are available; some of the largest are listed below.', '', NULL, '2017-08-30 02:01:35', '2017-08-30 02:01:35'),
(20, 6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab nostrum delectus iste sit officia! Molestiae ducimus, sunt omnis earum vitae vel dolore, blanditiis placeat porro aliquid non repudiandae, recusandae quisquam.', '', NULL, '2017-09-06 02:56:35', '2017-09-06 02:56:35'),
(21, 6, 'All Laravel routes are defined in your route files, which are located in the routes directory. These files are automatically loaded by the framework. The routes/web.php file defines routes that are for your web interface. These routes are assigned the web middleware group, which provides features like session state and CSRF protection. The routes in routes/api.php are stateless and are assigned the api middleware group.', '', NULL, '2017-09-07 01:53:44', '2017-09-07 01:53:44'),
(22, 7, 'Laravel stores the current CSRF token in a XSRF-TOKEN cookie that is included with each response generated by the framework. You can use the cookie value to set the X-XSRF-TOKEN request header.', '', NULL, '2017-09-07 03:41:38', '2017-09-07 03:41:38'),
(23, 4, 'Laravel resource routing assigns the typical \"CRUD\" routes to a controller with a single line of code. For example, you may wish to create a controller that handles all HTTP requests for \"photos\" stored by your application. Using the make:controller Artisan command, we can quickly create such a controller:', '', NULL, '2017-09-08 01:22:40', '2017-09-08 01:22:40'),
(26, 1, 'A disorder in which nerve cell activity in the brain is disturbed, causing seizures.', 'epilepsy-1.jpg', NULL, '2017-12-07 21:55:33', '2017-12-07 21:55:33'),
(27, 1, 'Pakistan air force chief order: Shoot down US drones', 'aircraft_in_flight_picture_7_168555.jpg', NULL, '2017-12-08 00:45:47', '2017-12-08 00:45:47'),
(30, 1, 'Problem statement for the following: .....', 'maze-1147506_960_720.png', NULL, '2017-12-12 11:33:05', '2017-12-12 11:33:05'),
(31, 1, 'ivub reu ire er', '', NULL, '2018-03-06 00:42:53', '2018-03-06 00:42:53'),
(32, 7, 'Hey guys!!!!!!', '31wJ4nTGPbL.jpg', NULL, '2018-03-06 00:46:23', '2018-03-06 00:46:23'),
(33, 7, 'Lost my gf!', 'Del0lybb_400x400.jpg', NULL, '2018-03-06 00:47:04', '2018-03-06 00:47:04'),
(34, 7, 'HTML', '', NULL, '2018-03-06 00:47:55', '2018-03-06 00:47:55'),
(35, 2, 'Zerone, programming club of Indian Institute of Information Technology, Design and Manufacturing, Kancheepuram is conducting an online hackathon as part of their annual techno-cultural fest, Samgatha 2018. This hackathon requires you to think out of the box and develop solutions based on the given themes.', '', NULL, '2018-03-10 04:38:52', '2018-03-10 04:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `product_image`, `created_at`, `updated_at`) VALUES
(3, 'Image', 'dddddddd', 'COE14B035.pdf', '2017-12-06 06:05:24', '2017-12-06 06:05:24'),
(4, 'Grade sheet', 'The attached file shows the grade sheet of 4th semester', 'COE14B035.pdf', '2017-12-08 00:49:38', '2017-12-08 00:49:38'),
(5, 'Application form', 'The atached file shows 10th marks sheet', '10th class.pdf', '2017-12-09 00:45:07', '2017-12-09 00:45:07'),
(6, 'Semester timetable', 'It shows the timetable for the semester-8', 'TT-Jan-May2018.pdf', '2017-12-12 11:34:50', '2017-12-12 11:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `city`, `year`, `about`, `branch`, `file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Chennai City', '2017', 'Graph Theory - Expert!\r\nC programming Intermediate', 'Computer Engineering', 'C:\\xampp\\tmp\\php8E43.tmp', '2017-08-04 00:38:39', '2017-08-04 00:38:39'),
(2, 2, 'Hyderabad', '2017', 'IOT Intermediate', 'EDM', NULL, '2017-08-04 01:13:44', '2017-08-04 01:13:44'),
(4, 4, 'Nellore', '2017', 'Would like to learn new technologies', 'EDM', NULL, '2017-08-10 05:12:16', '2017-08-10 05:13:41'),
(5, 5, 'Chennai City', '2018', 'Would love to learn new technologies!', 'EDM', NULL, '2017-08-22 04:32:58', '2017-08-22 04:34:54'),
(6, 6, 'Hyderabad', '2018', 'Would like to learn new technoligies!', 'COE', NULL, '2017-09-06 01:36:20', '2017-09-06 01:37:32'),
(7, 7, 'Chennai', '2017', 'Intern as a Web developer', 'COE', NULL, '2017-09-06 05:30:59', '2017-09-07 03:41:06'),
(8, 8, NULL, NULL, NULL, NULL, NULL, '2017-09-06 05:41:18', '2017-09-06 05:41:18'),
(9, 9, NULL, NULL, NULL, NULL, NULL, '2017-09-06 05:51:21', '2017-09-06 05:51:21'),
(10, 10, NULL, NULL, NULL, NULL, NULL, '2018-03-09 22:57:51', '2018-03-09 22:57:51'),
(11, 11, NULL, NULL, NULL, NULL, NULL, '2018-03-09 23:12:18', '2018-03-09 23:12:18'),
(12, 12, NULL, NULL, NULL, NULL, NULL, '2018-03-09 23:15:49', '2018-03-09 23:15:49'),
(13, 14, NULL, NULL, NULL, NULL, NULL, '2018-03-10 03:07:30', '2018-03-10 03:07:30'),
(14, 15, NULL, NULL, NULL, NULL, NULL, '2018-03-10 03:10:29', '2018-03-10 03:10:29'),
(15, 16, NULL, NULL, NULL, NULL, NULL, '2018-03-10 03:11:53', '2018-03-10 03:11:53'),
(16, 17, NULL, NULL, NULL, NULL, NULL, '2018-03-10 03:15:15', '2018-03-10 03:15:15'),
(17, 18, NULL, NULL, NULL, NULL, NULL, '2018-03-10 03:15:41', '2018-03-10 03:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_skills`
--

CREATE TABLE `profiles_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_skill`
--

CREATE TABLE `profile_skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `profile_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_skill`
--

INSERT INTO `profile_skill` (`id`, `profile_id`, `skill_id`, `created_at`, `updated_at`) VALUES
(7, 4, 1, NULL, NULL),
(8, 4, 2, NULL, NULL),
(9, 4, 4, NULL, NULL),
(10, 2, 1, NULL, NULL),
(11, 2, 2, NULL, NULL),
(12, 2, 3, NULL, NULL),
(13, 5, 2, NULL, NULL),
(14, 5, 4, NULL, NULL),
(15, 5, 5, NULL, NULL),
(16, 6, 2, NULL, NULL),
(17, 6, 3, NULL, NULL),
(18, 7, 1, NULL, NULL),
(19, 7, 3, NULL, NULL),
(20, 7, 5, NULL, NULL),
(21, 1, 3, NULL, NULL),
(22, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'C', NULL, NULL),
(2, 'C++', NULL, NULL),
(3, 'Java', '2017-08-10 03:35:25', '2017-08-10 03:35:25'),
(4, 'JavaScript', '2017-08-10 03:35:30', '2017-08-10 03:35:30'),
(5, 'Full Stack Web Developer', '2017-08-10 03:41:56', '2017-08-10 03:41:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `gender`, `slug`, `body`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'root', 'root@gmail.com', '$2y$10$t/LEYP/bpcByCLkRy6O6A.6bqv/PfnAb.tGaQoCdvX6D/oWD9Uc5C', 'male', 'root', 'Web Developer', 'Screenshot (74).png', 'DsBjqcNH5myifTUwBlc0DGN0K7Q8aMt2gZj3abvo6nGXh7yN46RloLSpjYKu', '2017-08-04 00:38:39', '2017-08-04 00:38:39'),
(2, 'root1', 'root1@gmail.com', '$2y$10$dWDYuCt42cKhVCdABZ3FZ.qffKsg/oxEtVnvXCoOc2HO/gvsouHV6', 'female', 'root1', 'App Developer', 'Del0lybb_400x400.jpg', 'PBGLJpcLmo3p4LbElBJaRy33JysPpcSNyaIY3ytpxiiG05RJVcKjjB5kNIsT', '2017-08-04 01:13:44', '2017-08-04 01:13:44'),
(4, 'root2', 'root2@gmail.com', '$2y$10$xqu3E22WgsY1vdQuIlxmw.bQh69zVopj1OoClRQl8ynz/7pl4aJfa', 'female', 'root2', 'Graphic Designer', 'avatar3.png', 'nI9dMC4hH1HMNsTMKIbkyCRNz36rqnmujfD13ZCTYL8E2AvrYbzDeJseLguq', '2017-08-10 05:12:16', '2017-08-10 05:12:16'),
(5, 'root4', 'root4@gmail.com', '$2y$10$qD9pD4Czi/P8jljaTPlQx../3UdC8R1Z8QhmdKOLI7m3slpZxAe1.', 'female', 'root4', 'Graphic Designer', 'avatar5.png', 'Sj49MRG3CMI7ZNruu8WbhLaphNXhCCJQJE7jMMxXovZejs0gGwNJ9BAN14DE', '2017-08-22 04:32:58', '2017-08-22 04:32:58'),
(6, 'T RAGHAVENDRA SAGAR', 'sagar05091997@gmail.com', '$2y$10$qy/aiEgG2ts/wUcW7IjvouUwKqz.SKZQH5DufbG9refXOFIv4yiQC', 'male', 't-raghavendra-sagar', 'Optimist..', 'user1-128x128.jpg', 'qyxYI8RTukKtZ8tt57sglfr3sMUv03woKFmxCj0Wj7WOcIBMUKh2HMf4YYWC', '2017-09-06 01:36:20', '2017-09-06 01:36:20'),
(7, 'Ganesh Sagar', 'sagar050991997@gmail.com', '$2y$10$8KirFScNYRbasYx.H6JmaOeHvpZS/1DPNjnuZ1onk2bBC2kzKCnrO', 'male', 'ganesh-sagar', 'Web Developer', 'avatar.png', 'NgYZdoJYXlDUkbEFDP8low7BstSBrWfuo3EDL5r0yBgO3LjIAisFIfxwPQlZ', '2017-09-06 05:30:59', '2017-09-06 05:30:59'),
(8, 'Sai Sreekar', 'sreekar@gmail.com', '$2y$10$JwBS6S5Q.8siUpI1kb66AOv7HO18H7m9pSvRclLRRdb4MWeS7BGSq', 'male', 'sai-sreekar', 'Gamer!', 'user6-128x128.jpg', 'nNFR8WPAjSGXkmpr3M1lrtroMiQ2cjbJ6jdw5C5qDTzT4JZdDpgvKAwaYdW9', '2017-09-06 05:41:18', '2017-09-06 05:41:18'),
(9, 'Sai Lokesh', 'sai@gmail.com', '$2y$10$MfL.Hugy4EtoMPspAlrE/.Sa/YPTixxlLee871pYapN/DxEwwa7ym', 'male', 'sai-lokesh', 'App Developer', 'user8-128x128.jpg', 'NSrH66mjTUUCSyiASSp7yloqY5xbXJ8MvZcJo64CrRG11cXVFM9veVzd2CMl', '2017-09-06 05:51:21', '2017-09-06 05:51:21'),
(10, 'john', 'john@gmail.com', '$2y$10$QMzrc0/U7bGmfCnIbpgnCexONPhmLEqaRTiOCrJnALQ9ZKaZuVzzy', 'male', 'john', 'Book Lover!!', 'avatar2.png', 'bZpnBNPMquQaEFggRoJLNwUUBtlNiw3UGrzU6xs2HGLyXwSA59R6vFb7bxa1', '2018-03-09 22:57:51', '2018-03-09 22:57:51'),
(12, 'Ram', 'ram@gmail.com', '$2y$10$QwubLVnD33PyYOK0/pLRsuogj0gKK2Ryrd72Vx7w.Y6p7Vbsaraga', 'male', 'ram', 'Foodie!!', NULL, 'wh6zLMKa3IE6hffCBGhZgGFhSJCrRvkvQZ7rmpI40Q3q3PAmfWQWmBvVmxpu', '2018-03-09 23:15:49', '2018-03-09 23:15:49'),
(13, 'Ravi', 'ravi@gmail.com', '$2y$10$ynercFf5fBMAwCLD3CqB9.LLnyXNaEnHqvpFPO2C0YjfsSZEAkHqq', 'male', 'ravi', 'Self Enthusiast!', NULL, 'ESGNVfAYBjqj6scOGQZNGNGo1r150i5AXNEINAdYHAteQA230QbRjEn6i8do', '2018-03-09 23:55:35', '2018-03-09 23:55:35'),
(14, 'root5', 'root5@gmail.com', '$2y$10$V6Th.kxwL3RAJInrf7W8gOABq3osJpPf0MLb7VudBXjBE1M5EKBy2', 'female', 'root5', 'FOodie', 'boy.jpg', 'GxoRtJRe9hIFTajFTqV64UzuOa224bSbsWvutvWhyHWeau0l95nyXo66fdh2', '2018-03-10 03:07:29', '2018-03-10 03:07:29'),
(16, 'root6', 'root6@gmail.com', '$2y$10$JPn58Bxm7oizyqtp03sCVOIL/GylttI9pp5tRShUaLQNScDn1q82y', 'female', 'root6', 'Scientist', 'boy.jpg', 'uUCfqYBS8JOSKDhFTaU92mFvL3aMP3ixE5MHyQFGjEfXsbmfg2wypdMQ5y2a', '2018-03-10 03:11:53', '2018-03-10 03:11:53'),
(17, 'root7', 'root7@gmail.com', '$2y$10$oteL2YIho1FX2TLgbZE.mu7hL6a7hKEUbyx0lExXeRvNvKHooofeq', 'female', 'root7', 'Scientist', 'girl.png', 'SDARTDrN0eFh0CcNMA6ls2MHjWWF0EHWTkta2CRgwcddNUQBtMTycqeGdF1R', '2018-03-10 03:15:15', '2018-03-10 03:15:15'),
(18, 'root8', 'root8@gmail.com', '$2y$10$bC1QdMm2eyy4dxhbmSrxeev5PYABOWBitmXq1MPsUfY0vpXpvErwO', 'male', 'root8', 'PhD Scholar', 'user3-128x128.jpg', 'iX4HikGdgz9jSeJQdIuUGbLalTV4vO0QxfbvlSUFaEXaYGDlUDshIB5TsCal', '2018-03-10 03:15:41', '2018-03-10 03:15:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friendships`
--
ALTER TABLE `friendships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likeables`
--
ALTER TABLE `likeables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles_skills`
--
ALTER TABLE `profiles_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_skill`
--
ALTER TABLE `profile_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friendships`
--
ALTER TABLE `friendships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `likeables`
--
ALTER TABLE `likeables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `profiles_skills`
--
ALTER TABLE `profiles_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `profile_skill`
--
ALTER TABLE `profile_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
