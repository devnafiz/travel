-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2022 at 07:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dream`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '2022-08-12 04:16:05', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7s5s1A5bxi', NULL, NULL, '2022-08-12 04:16:05', '2022-08-12 04:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `allcountries`
--

CREATE TABLE `allcountries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iso` char(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nicename` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_detect_geos`
--

CREATE TABLE `auto_detect_geos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payu_enable` tinyint(1) DEFAULT NULL,
  `instamojo_enable` tinyint(1) DEFAULT NULL,
  `stripe_enable` tinyint(1) DEFAULT NULL,
  `paypal_enable` tinyint(1) DEFAULT NULL,
  `fb_login_enable` tinyint(1) DEFAULT NULL,
  `google_login_enable` tinyint(1) DEFAULT NULL,
  `pincode_system` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `paytm_enable` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `razorpay` int(10) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currenceys`
--

CREATE TABLE `currenceys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `format` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exchange_rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_places`
--

CREATE TABLE `faq_places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genrals`
--

CREATE TABLE `genrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fevicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login` int(10) UNSIGNED NOT NULL,
  `right_click` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inspect` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `guest_login` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genrals`
--

INSERT INTO `genrals` (`id`, `project_name`, `email`, `title`, `currency_code`, `currency_symbol`, `pincode`, `copyright`, `logo`, `fevicon`, `address`, `mobile`, `login`, `right_click`, `inspect`, `guest_login`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dream Travel', 'nafiz@gmail.com', 'dream', '', 'fa fa-dolar', NULL, 'all Right reserve', NULL, NULL, NULL, '012764374', 0, '0', '1', '', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locales`
--

CREATE TABLE `locales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lang_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `def` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `status` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locales`
--

INSERT INTO `locales` (`id`, `lang_code`, `name`, `def`, `status`, `created_at`, `updated_at`) VALUES
(1, 'en', 'English', 1, 1, NULL, NULL),
(2, 'hi', 'Hindi', 0, 1, NULL, NULL),
(3, 'es', 'Spanish', 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(356) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"stay hotel\"}', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42990289.85125594!2d-137.48034145382087!3d48.878819550727954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b68a40abc00001%3A0xf1662b43d3e680a0!2sTribal%20Nations%20Maps!5e0!3m2!1sen!2sus!4v1660502714458!5m2!1sen!2sus', '1', '2022-08-14 12:42:42', '2022-08-14 12:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_07_23_180952_create_sessions_table', 1),
(10, '2022_07_24_135201_create_admins_table', 1),
(11, '2022_07_29_160904_create_locales_table', 1),
(12, '2022_07_30_134735_create_news_table', 1),
(13, '2022_07_30_134757_create_news_cats_table', 1),
(14, '2022_07_30_134818_create_sliders_table', 1),
(15, '2022_07_30_134843_create_contacts_table', 1),
(16, '2022_08_01_041359_create_genrals_table', 1),
(17, '2022_08_01_061352_create_seos_table', 1),
(18, '2022_08_01_061559_create_socials_table', 1),
(19, '2022_08_01_062050_create_allcountries_table', 1),
(20, '2022_08_01_062213_create_multi_currencies_table', 1),
(21, '2022_08_01_062718_create_locations_table', 1),
(22, '2022_08_01_072928_create_auto_detect_geos_table', 1),
(23, '2022_08_01_084800_create_configs_table', 1),
(24, '2022_08_01_091427_create_pages_table', 1),
(25, '2022_08_02_080750_create_places_table', 1),
(26, '2022_08_02_082945_create_multi_images_table', 1),
(27, '2022_08_02_085410_create_place_attributes_table', 1),
(28, '2022_08_02_090059_create_faq_places_table', 1),
(29, '2022_08_06_174539_create_currenceys_table', 1),
(30, '2022_08_14_174537_create_maps_table', 2),
(32, '2022_08_15_091231_create_orders_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `multi_currencies`
--

CREATE TABLE `multi_currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `row_id` int(11) DEFAULT NULL,
  `default_currency` tinyint(1) DEFAULT NULL,
  `currency_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `add_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `place_id` int(11) DEFAULT NULL,
  `image` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `place_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'backend/place/multi-image/1741037561786319.jpg', '2022-08-13 03:26:46', NULL),
(2, 1, 'backend/place/multi-image/1741064438468071.jpg', '2022-08-13 10:33:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `des` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `slug`, `image`, `des`, `user`, `cat_id`, `about`, `status`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"The demand in the Fishinguation of US$ 5.3 Bn in 2021.\"}', 'the-demand-in-the-fishinguation-of-us-53-bn-in-2021', 'backend/news/1741118902505772.jpg', '{\"en\":\"Key players and manufacturers are taking immense efforts in making heavy investments in R&D for innovating as well as advancing the processes by which the machinery is deployed. These efforts will in turn contribute towards expansion of industry as well as its capabilities in the forthcoming years. Manufacturers are taking immense efforts in producing containers that can be customized depending on the needs of the customers.\"}', NULL, NULL, NULL, 1, '2022-08-14 00:59:39', '2022-08-14 00:59:39'),
(3, '{\"en\":\"Analysts that have been part of this report development made sure\"}', 'analysts-that-have-been-part-of-this-report-development-made-sure', 'backend/news/1741119467354780.jpg', '{\"en\":\"Analysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sureAnalysts that have been part of this report development made sure\"}', NULL, NULL, NULL, 1, '2022-08-14 01:08:38', '2022-08-14 01:08:38'),
(4, '{\"en\":\"Manufacturers are taking immense efforts in making heavy investments\"}', 'manufacturers-are-taking-immense-efforts-in-making-heavy-investments', 'backend/news/1741119631305230.jpg', '{\"en\":\"Based on analysis, chemicals packaging industry is expected to create lucrative growth opportunities for rotomolded containers market in the forthcoming years. This is due to increasing need for features of rotomolded containers such as sturdiness and resistance to any surplus transportation hazards.\\r\\nBased on analysis, chemicals packaging industry is expected to create lucrative growth opportunities for rotomolded containers market in the forthcoming years. This is due to increasing need for features of rotomolded containers such as sturdiness and resistance to any surplus transportation hazards.\"}', NULL, NULL, NULL, 1, '2022-08-14 01:11:14', '2022-08-14 01:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `news_cats`
--

CREATE TABLE `news_cats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` int(10) UNSIGNED DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_cats`
--

INSERT INTO `news_cats` (`id`, `title`, `icon`, `image`, `description`, `position`, `status`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Travel', NULL, NULL, 'Travel every  where', 1, '1', '0', '2022-08-13 13:18:50', '2022-08-13 13:18:50'),
(2, 'Tour', NULL, NULL, 'Where is place', 2, '1', '0', '2022-08-13 13:19:18', '2022-08-13 13:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tour_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_dat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `des`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'About us', '{\"en\":\"<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\"><span id=\\\"docs-internal-guid-2e3eaf89-7fff-455f-82d1-2b3403a49984\\\" style=\\\"box-sizing: border-box;\\\">o date, a simple google search of \\\"What is Bitcoin\\\" reveals more than 1,340,000,000 search results. From over a billion outcomes, Filipinos who want to learn more about Web3 will often have to do their own research using multiple websites and then cross-check the reliability of found resources. Added to that - most, if not all, educational content on crypto is in pure English, which immediately adds a barrier to entry for Filipinos who aren\'t as fluent with the language.&nbsp;<\\/span><\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The point is that transitioning to Web3 for a Filipino Web2 native becomes painstaking, with multiple immediate hurdles present with the first step they take.&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Enter Bitskwela.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Bitskwela is a Filipino EduTech company focused on accelerating crypto-adoption regionally in the Philippines by providing inclusive Web3 education for Filipinos, by Filipinos. Bitskwela strives for its mission through multilingual courses, alternative learning methods, educational software, and educational engagements.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">\\\"The Bitskwela team provides cryptocurrency education for Filipinos in different languages and learning methods. We understand that to push for regional crypto adoption and truly make Web 3 known to every Filipino, the learning materials we provide should be simple and diverse enough to cater to all ethnicities,\\\" says Jiro Reyes, CEO of Bitskwela.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The Philippines is dubbed as the \\\"social media capital of the world,\\\" with 89 million active social media users. On average, Filipinos spend over four hours daily using social media platforms like Facebook and Instagram, the highest across the Asia Pacific region. These alone show how much the country has embraced the internet over the past decade.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The sky-high Web2 activity in the Philippines forms the perfect runway for Web3 adoption in the country, which is still only. As early as now, the Philippines is already ranked #15 in terms of global cryptocurrency adoption, just under China and Brazil. This proves the capability of the Philippine population to transition into a Web3 hotspot within Asia and eventually even the world. Through Web3, every Filipino will be one step closer to true ownership of data, increased global connectivity, and elevated financial inclusion. The possibilities are endless.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">A Message from the Team:&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">\\\"We dream of a Philippines that\'s properly positioned for Web3, a population where Filipinos are equipped and prepared for the next revolution, possibly as big as the internet boom, but this time tayo naman &lsquo;yung mauuna,&rdquo; says Vince Edralin, Bitskwela&rsquo;s Chief Operating Officer (COO).<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The Community:&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">To date, Bitskwela has grown its Facebook community to more than 2000 community members who engage in cryptocurrency education and building. The company has also obtained speaking engagements with top brands and organizations in the Philippines, such as Globe, Virtusio, DICT, and PDAX - covering different educational engagements for crypto and Web3.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">\\\"Our most recent stint was the historic CONQuest 2022 powered by AcadArena, where Web3 met gaming. Bitskwela was able to connect with other brand partners for more educational engagements, both public and private projects, while strengthening Bitskwela\'s brand positioning in the Metro,\\\" adds JC Macalintal, Bitskwela\'s Chief Marketing Officer.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">The Bitswela team also recently guested on PDAX\'s Fresh Money webinar series, where their CEO and CMO discussed the importance of Web 3 adoption and Bitskwela\'s upcoming releases. Bitskwela\'s CEO and Marketing team also gave Web3 workshops, in partnership with Virtusio and Globe, to help onboard media giants into the space.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Bitskwela\'s CFO, Lance Chua, also cites the importance of Bitskwela\'s involvement with Web3 companies in the Philippines such as PDAX. \\\"With our partnerships with these organizations, Bitskwela is a step closer to helping the Philippines prepare to harness the potential of Web 3 by giving Filipinos the tools they need to become early adopters of the technology,\\\" he comments.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">Chief Product Officer and co-founder Camille Puentespina also adds that they\'re diligently working on Bitskwela V2&mdash;a more updated iteration of their current product that focuses on peer-to-peer mentorship, curriculum-based learning materials, and community programs.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\"><em style=\\\"box-sizing: border-box;\\\">Bitskwela V2 is expected to launch by the end of August. Bitskwela is also reportedly opening its first funding round soon to accelerate its mission to help Filipinos own a piece of the internet, one region at a time.<\\/em><\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\">&nbsp;<\\/p>\"}', 'about-us', '1', '2022-08-14 06:09:39', '2022-08-14 06:09:39'),
(2, 'privecy', '{\"en\":\"<p style=\\\"box-sizing: border-box; margin: 1em 0px; color: #333333; font-family: Montserrat, sans-serif; background-color: #ffffff; font-size: 16px !important;\\\"><img style=\\\"box-sizing: border-box; border: 0px; vertical-align: middle; float: left; padding-right: 8px; width: 300px;\\\" src=\\\"https:\\/\\/www.prnob.com\\/companylogo\\/Picture1.png\\\" alt=\\\"Picture1\\\" \\/><\\/p>\\r\\n<div id=\\\"article_cc\\\" style=\\\"box-sizing: border-box; color: #333333; font-family: Montserrat, sans-serif; font-size: 14px; background-color: #ffffff;\\\">\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\"><span id=\\\"docs-internal-guid-2e3eaf89-7fff-455f-82d1-2b3403a49984\\\" style=\\\"box-sizing: border-box;\\\">To date, a simple google search of \\\"What is Bitcoin\\\" reveals more than 1,340,000,000 search results. From over a billion outcomes, Filipinos who want to learn more about Web3 will often have to do their own research using multiple websites and then cross-check the reliability of found resources. Added to that - most, if not all, educational content on crypto is in pure English, which immediately adds a barrier to entry for Filipinos who aren\'t as fluent with the language.&nbsp;<\\/span><\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">The point is that transitioning to Web3 for a Filipino Web2 native becomes painstaking, with multiple immediate hurdles present with the first step they take.&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">Enter Bitskwela.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">Bitskwela is a Filipino EduTech company focused on accelerating crypto-adoption regionally in the Philippines by providing inclusive Web3 education for Filipinos, by Filipinos. Bitskwela strives for its mission through multilingual courses, alternative learning methods, educational software, and educational engagements.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">\\\"The Bitskwela team provides cryptocurrency education for Filipinos in different languages and learning methods. We understand that to push for regional crypto adoption and truly make Web 3 known to every Filipino, the learning materials we provide should be simple and diverse enough to cater to all ethnicities,\\\" says Jiro Reyes, CEO of Bitskwela.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">The Philippines is dubbed as the \\\"social media capital of the world,\\\" with 89 million active social media users. On average, Filipinos spend over four hours daily using social media platforms like Facebook and Instagram, the highest across the Asia Pacific region. These alone show how much the country has embraced the internet over the past decade.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">The sky-high Web2 activity in the Philippines forms the perfect runway for Web3 adoption in the country, which is still only. As early as now, the Philippines is already ranked #15 in terms of global cryptocurrency adoption, just under China and Brazil. This proves the capability of the Philippine population to transition into a Web3 hotspot within Asia and eventually even the world. Through Web3, every Filipino will be one step closer to true ownership of data, increased global connectivity, and elevated financial inclusion. The possibilities are endless.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">A Message from the Team:&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">\\\"We dream of a Philippines that\'s properly positioned for Web3, a population where Filipinos are equipped and prepared for the next revolution, possibly as big as the internet boom, but this time tayo naman &lsquo;yung mauuna,&rdquo; says Vince Edralin, Bitskwela&rsquo;s Chief Operating Officer (COO).<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">The Community:&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">To date, Bitskwela has grown its Facebook community to more than 2000 community members who engage in cryptocurrency education and building. The company has also obtained speaking engagements with top brands and organizations in the Philippines, such as Globe, Virtusio, DICT, and PDAX - covering different educational engagements for crypto and Web3.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">\\\"Our most recent stint was the historic CONQuest 2022 powered by AcadArena, where Web3 met gaming. Bitskwela was able to connect with other brand partners for more educational engagements, both public and private projects, while strengthening Bitskwela\'s brand positioning in the Metro,\\\" adds JC Macalintal, Bitskwela\'s Chief Marketing Officer.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">The Bitswela team also recently guested on PDAX\'s Fresh Money webinar series, where their CEO and CMO discussed the importance of Web 3 adoption and Bitskwela\'s upcoming releases. Bitskwela\'s CEO and Marketing team also gave Web3 workshops, in partnership with Virtusio and Globe, to help onboard media giants into the space.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">Bitskwela\'s CFO, Lance Chua, also cites the importance of Bitskwela\'s involvement with Web3 companies in the Philippines such as PDAX. \\\"With our partnerships with these organizations, Bitskwela is a step closer to helping the Philippines prepare to harness the potential of Web 3 by giving Filipinos the tools they need to become early adopters of the technology,\\\" he comments.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">&nbsp;<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">Chief Product Officer and co-founder Camille Puentespina also adds that they\'re diligently working on Bitskwela V2&mdash;a more updated iteration of their current product that focuses on peer-to-peer mentorship, curriculum-based learning materials, and community programs.<\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\"><em style=\\\"box-sizing: border-box;\\\">Bitskwela V2 is expected to launch by the end of August. Bitskwela is also reportedly opening its first funding round soon to accelerate its mission to help Filipinos own a piece of the internet, one region at a time.<\\/em><\\/p>\\r\\n<p dir=\\\"ltr\\\" style=\\\"box-sizing: border-box; margin: 1em 0px; font-size: 16px !important;\\\">&nbsp;<\\/p>\\r\\n<\\/div>\"}', 'privecy-policy', '1', '2022-08-14 06:24:57', '2022-08-14 06:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mainimage` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `p_name` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sale_price` double DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `location` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `start_date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `heading`, `des`, `mainimage`, `type`, `p_name`, `sale_price`, `discount_price`, `location`, `status`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(1, '{\"en\":\"The demand in the Fishing Reels Market grew\"}', '{\"en\":\"by year-on-year (YoY) rate of 4.3% in 2021, reaching a market valuation of US$ 5.3 Bn in 2021.\\r\\n                   Managed relational databases systems and web development and web services\\r\\nManaged and maintained development of PHP backend for dynamic database driven websites\\r\\nProvided technical support in the assurance of quality systems and system changes\"}', 'backend/place/1740984499814039.jpg', 'hotel', 'Biodegradable plastic', 400, 15, '{\"en\":\"dhaka ,bangladesh\"}', '1', '17-08-2022', '2022-08-11', '2022-08-12 13:23:23', '2022-08-13 04:10:50');

-- --------------------------------------------------------

--
-- Table structure for table `place_attributes`
--

CREATE TABLE `place_attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attr_tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ex_include` varchar(266) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata_des` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `metadata_key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analysis` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb_pixel` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IwNcfupTYHIiVKTSVZQAzonUctBbUc4adwkDrR52', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.81 Safari/537.36 Edg/104.0.1293.54', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiZ29kWktGb0ZWbzg3eXQxMTcza09wVmNNdlpnaEQ4Ull6aXdaTzJuUiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkbThqRFJyb2hWMjFneWswRzYwUDZ0LmlIcWV6TE9MSkdpRks2Sjhyck9JdWF0ZlBtYWljcWEiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQ3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvY2FwdGNoYS9kZWZhdWx0P1NJUGt1ZXBUPSI7fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6NzoiY2FwdGNoYSI7YTozOntzOjk6InNlbnNpdGl2ZSI7YjowO3M6Mzoia2V5IjtzOjMxMjoiZXlKcGRpSTZJbGRRYW5NeFMwUklabkpKWm5kNE4zTTJVVWRCUzBFOVBTSXNJblpoYkhWbElqb2llVTV5WXpkMGVrZGxaVll3WjFSNVQwUnFkRXR6ZVRoa2VucDVWSE5vTUc4MFZGQXlXVEY1YkcxV1RHRjFXWFo2UjBaSlJIZG9aV3RQUm5OMk1WUkpiWEZhTWxvNFJtVkRhRWhPYlVOc1RuVnFja1I1TDFCb1VWVTRiRGgwYW1kdGNWRmlVVmhRTUVjdk5GVTlJaXdpYldGaklqb2lNekJoTVRNME4ySTVOak5pWVRZM05tVTNaalUzWTJRMU5UTmpNVFUzWm1Wa1pUaGhOell5WVdFd01UWTRNakZoWmpjNVpEUmlNalJpTkdSaVpUZ3hNU0lzSW5SaFp5STZJaUo5IjtzOjc6ImVuY3J5cHQiO2I6MTt9fQ==', 1660585203),
('XZ2XYdMKT5h6NfldRKk7ThQ2Scn7gT1D2zdTFK8p', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiT3NpeTVwc2R5WXZqUXVtanNEcnhpSEFrWE1CMGM0MVcyRWIwdXpiSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YTowOnt9czo1MjoibG9naW5fYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1660583327);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link_by` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `child` int(10) UNSIGNED DEFAULT NULL,
  `grand_id` int(10) UNSIGNED DEFAULT NULL,
  `topheading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buttonname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btntextcolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btnbgcolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moredesc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moredesccolor` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `link_by`, `category_id`, `child`, `grand_id`, `topheading`, `heading`, `buttonname`, `btntextcolor`, `btnbgcolor`, `moredesc`, `moredesccolor`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"The demand in the Fishing\"}', '{\"en\":\"read\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741156922300342.jpg', '2022-08-14 11:03:57', '2022-08-14 11:03:57'),
(2, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"testsb test one hopew\"}', '{\"en\":\"more\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741157161429355.jpg', '2022-08-14 11:07:46', '2022-08-14 11:07:46'),
(3, NULL, NULL, NULL, NULL, '{\"en\":\"he demand in the\"}', '{\"en\":\"The demand in the Fishing Reels Market\"}', '{\"en\":\"more\"}', NULL, NULL, NULL, NULL, 1, 'backend/slider/1741157850222270.jpg', '2022-08-14 11:18:42', '2022-08-14 11:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'nafiz\'s Team', 1, '2022-08-14 13:24:22', '2022-08-14 13:24:22');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(125) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Nazmul hossain', 'nafiz016@gmail.com', NULL, '$2y$10$m8jDRrohV21gyk0G60P6t.iHqezLOLJGiFK6J8rrOIuatfPmaicqa', NULL, NULL, NULL, NULL, NULL, '202208150643001.jpg', '01963577002', '2022-08-14 13:24:22', '2022-08-15 00:43:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `allcountries`
--
ALTER TABLE `allcountries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_detect_geos`
--
ALTER TABLE `auto_detect_geos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currenceys`
--
ALTER TABLE `currenceys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq_places`
--
ALTER TABLE `faq_places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genrals`
--
ALTER TABLE `genrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locales`
--
ALTER TABLE `locales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_currencies`
--
ALTER TABLE `multi_currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_cats`
--
ALTER TABLE `news_cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place_attributes`
--
ALTER TABLE `place_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliders_category_id_foreign` (`category_id`),
  ADD KEY `sliders_child_foreign` (`child`),
  ADD KEY `sliders_grand_id_foreign` (`grand_id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `allcountries`
--
ALTER TABLE `allcountries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auto_detect_geos`
--
ALTER TABLE `auto_detect_geos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currenceys`
--
ALTER TABLE `currenceys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_places`
--
ALTER TABLE `faq_places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genrals`
--
ALTER TABLE `genrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locales`
--
ALTER TABLE `locales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `multi_currencies`
--
ALTER TABLE `multi_currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_cats`
--
ALTER TABLE `news_cats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `place_attributes`
--
ALTER TABLE `place_attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
