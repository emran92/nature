-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 12:43 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nature`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fresh Fruits', 'fresh-fruits', 1, '2019-11-06 14:50:08', '2019-11-06 14:50:08'),
(2, 'Regular Fruits', 'regular-fruits', 1, '2019-11-06 14:50:49', '2019-11-06 14:50:49'),
(3, 'Thai Fruits', 'thai-fruits', 1, '2019-11-06 14:51:01', '2019-11-06 14:51:01'),
(6, 'Fresh Vegetables', 'fresh-vegetables', 1, '2019-11-06 15:16:28', '2019-11-06 15:16:28'),
(7, 'Local Vegetables', 'local-vegetables', 1, '2019-11-06 15:16:40', '2019-11-06 15:16:40'),
(9, 'Nuts and Seeds', 'nuts-and-seeds', 1, '2019-11-09 06:52:13', '2019-11-09 06:52:13');

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
(3, '2019_11_06_181219_create_profiles_tables', 1),
(4, '2019_11_06_182140_create_tags_table', 1),
(5, '2019_11_06_182229_create_categories_table', 1),
(6, '2019_11_06_182248_create_products_table', 1),
(7, '2019_11_06_182302_create_reviews_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `image1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `description`, `price`, `amount`, `country`, `status`, `image1`, `image2`, `image3`, `image4`, `created_at`, `updated_at`) VALUES
(1, 2, 'Pineapple', 'pineapple', 'The pineapple is a tropical plant with an edible fruit, also called a pineapple, and the most economically significant plant in the family Bromeliaceae. Pineapples may be cultivated from the offset produced at the top of the fruit, possibly flowering in five to ten months and fruiting in the following six months.', '55', '1kg', 'Bangladesh', 1, 'bc5da1a1-6b40-4233-9abd-1126475d2864_9.0b874251fccc645fd98ac76e797c2d2a.jpeg', '1573305655.imasdfges.jpg', '1573305655.images.jpg', '1573305656.imag1es.jpg', '2019-11-06 15:38:31', '2019-11-09 08:07:58'),
(2, 1, 'Mango', 'mango', 'Mangoes are juicy stone fruit produced from numerous species of tropical trees belonging to the flowering plant genus Mangifera, cultivated mostly for this edible fruit. Most of these species are found in nature as wild mangoes. The genus belongs to the cashew family Anacardiaceae.', '55', '1kg', 'Bangladesh', 1, '1256.970.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:07:15'),
(3, 1, 'Banana', 'banana', 'A banana is an edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus Musa. In some countries, bananas used for cooking may be called \"plantains\", distinguishing them from dessert bananas.', '55', '1kg', 'Bangladesh', 1, 'chompa-banana-12-pcs.webp', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:06:24'),
(4, 1, 'Apple', 'apple', 'An apple is a sweet, edible fruit produced by an apple tree. Apple trees are cultivated worldwide and are the most widely grown species in the genus Malus. The tree originated in Central Asia, where its wild ancestor, Malus sieversii, is still found today.', '55', '1kg', 'Bangladesh', 1, '6000200094514.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:06:11'),
(5, 1, 'Guava', 'guava', 'Guava is a common tropical fruit cultivated in many tropical and subtropical regions. Psidium guajava is a small tree in the myrtle family, native to Mexico, Central America, the Caribbean and northern South America.', '55', '1kg', 'Bangladesh', 1, 'jumbo-natural-guava-500x500.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 17:57:24'),
(6, 1, 'Grapes', 'grapes', 'A grape is a fruit, botanically a berry, of the deciduous woody vines of the flowering plant genus Vitis. Grapes can be eaten fresh as table grapes or they can be used for making wine, jam, grape juice, jelly, grape seed extract, raisins, vinegar, and grape seed oil.', '55', '1kg', 'Bangladesh', 1, 'index.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 17:58:13'),
(7, 1, 'Pears', 'pears', 'The pear tree and shrub are a species of genus Pyrus, in the family Rosaceae, bearing the pomaceous fruit of the same name. Several species of pear are valued for their edible fruit and juices while others are cultivated as trees.', '55', '1kg', 'Bangladesh', 1, 'product-500x500.jpeg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:03:35'),
(8, 7, 'Onion', 'onion', 'The onion, also known as the bulb onion or common onion, is a vegetable that is the most widely cultivated species of the genus Allium. Its close relatives include the garlic, shallot, leek, chive, and Chinese onion.', '200', '1kg', 'Bangladesh', 1, '6000196142911.jpg', '1573309746.onion1.jpg', '1573309746.onion3.jpg', '1573309746.onion4.jpg', '2019-11-06 15:38:31', '2019-11-09 08:47:34'),
(9, 6, 'Potato', 'potato', 'The potato is a root vegetable, a starchy tuber of the plant Solanum tuberosum, and the plant itself, a perennial in the family Solanaceae, native to the Americas. Wild potato species can be found throughout the Americas, from the United States to southern Chile.', '55', '1kg', 'Bangladesh', 1, 'potato-500x500.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:10:04'),
(10, 7, 'Cabbage', 'cabbage', 'Cabbage or headed cabbage is a leafy green, red, or white biennial vegetable grown as an annual vegetable crop for its dense-leaved heads.', '55', '1kg', 'Bangladesh', 1, 'one-big-cabbage.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:10:01'),
(11, 6, 'Eggplant', 'eggplant', 'Eggplant, aubergine, or brinjal is a vegetable species in the nightshade family Solanaceae. Solanum melongena is grown worldwide for its edible. Most commonly purple, the spongy, absorbent is used in various cuisines. Although often considered a vegetable, it is a berry by botanical definition.', '55', '1kg', 'Bangladesh', 1, '6000200094510.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:09:58'),
(12, 7, 'Spinach', 'spinach', 'Spinach is a leafy green flowering plant native to central and western Asia. It is of the order Caryophyllales, family Amaranthaceae, subfamily Chenopodioideae. Its leaves are a common edible vegetable consumed either fresh, or after storage using preservation techniques by canning, freezing, or dehydration.', '55', '1kg', 'Bangladesh', 1, 'fresh-spinach-28palak-29-281kg-29-500x500.png', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:09:54'),
(13, 7, 'Cauliflower', 'cauliflower', 'Cauliflower is one of several vegetables in the species Brassica oleracea in the genus Brassica, which is in the family Brassicaceae. It is an annual plant that reproduces by seed. Typically, only the head is eaten – the edible white flesh sometimes called \"curd\".', '55', '1kg', 'Bangladesh', 1, 'cauliflower-is-rich-in-nutrients-and-fiber.jpg', NULL, NULL, NULL, '2019-11-06 15:38:31', '2019-11-06 18:09:51'),
(14, 3, 'Avocado', 'avocado', 'The avocado fruit, a tree with probable origin in South Central Mexico, is classified as a member of the flowering plant family Lauraceae. The fruit of the plant, also called an avocado, is botanically a large berry containing a single large seed.', '55', '1kg', 'Bangladesh', 1, 'avocado-fruit-600-gm.webp', '1573305532.im5ages.jpg', '1573305532.images.jpg', '1573305532.ContentBolt-bolt-how_to_cut_avocado_1552976776077_960x960.png', '2019-11-06 15:38:31', '2019-11-09 08:47:08'),
(16, 1, 'Fruit Salad', 'fruit-salad', 'Fruit salad is a dish consisting of various kinds of fruit,  sometimes served in a liquid, either their own juices or a syrup. In different forms, fruit salad can be served as an appetizer, a side salad, or a dessert.', '2000', '1kg', 'Various', 1, 'fruit-salad-horizontal-jpg-1522181219.jpg', 'best-fruit-salad-honey-lime-dressing.jpg', 'tropical-fruit-salad-2-1.jpg', 'blueberry-peach-fruit-salad-horiz-a2-1600.jpg', '2019-11-06 19:09:07', '2019-11-09 08:44:49'),
(17, 2, 'Lemon', 'lemon', 'The lemon, Citrus limon (L.) Osbeck, is a species of small evergreen tree in the flowering plant family Rutaceae, native to South Asia, primarily North eastern India.\r\n\r\nThe tree\'s ellipsoidal yellow fruit is used for culinary and non-culinary purposes throughout the world, primarily for its juice, which has both culinary and cleaning uses.', '50', '1kg', 'Bangladesh', 1, 'ima98ges.jpg', 'imag5es.jpg', 'i1mages.jpg', 'images.jpg', '2019-11-09 07:00:48', '2019-11-09 07:00:48'),
(18, 3, 'Rambutan', 'rambutan', 'The rambutan is a medium-sized tropical tree in the family Sapindaceae. The name also refers to the edible fruit produced by this tree. The rambutan is native to Malaysia, and other regions of tropical Southeast Asia.', '650', '1kg', 'Thailand', 1, '1573305909.rambutan.jpg', '1573305910.imawrawrages.jpg', '1573305910.imagraeraes.jpg', '1573305910.imaarrawges.jpg', '2019-11-09 07:25:10', '2019-11-09 07:25:10'),
(19, 3, 'Kiwi', 'kiwi', 'Kiwi berries are edible berry- or grape-sized fruits similar to fuzzy kiwifruit in taste and appearance, but with thin, smooth green skin. They are primarily produced by three species: Actinidia arguta (hardy kiwi), A. kolomikta (Arctic kiwifruit) and A. polygama (silver vine).', '760', '1 Kg', 'Thailand', 1, '1573306067.kiwi.jpg', '1573306067.kiwi1.jpg', '1573306067.kiwi2.jpg', '1573306067.kiwi3.jpg', '2019-11-09 07:27:47', '2019-11-09 08:47:11'),
(20, 3, 'Plum', 'plum', 'Plum, any of various trees or shrubs in the genus Prunus (family Rosaceae) and their edible fruits. Plums are closely related to peaches and cherries and are widely eaten fresh as a dessert fruit, cooked as compote or jam, or baked in a variety of pastries.', '600', '1Kg', 'Thailand', 1, '1573306397.plum2.jpg', '1573306397.plum.jpg', '1573306397.plum3.jpg', '1573306397.plum4.jpg', '2019-11-09 07:33:17', '2019-11-09 07:35:59'),
(21, 3, 'Dragon fruit (Pitaya)', 'dragon-fruit', 'A pitaya or pitahaya is the fruit of several different cactus species indigenous to the Americas. Pitaya usually refers to the fruit of the genus Stenocereus, while pitahaya or dragon fruit refers to the fruit of the genus Hylocereus, both in the family Cactaceae.', '650', '1Kg', 'Thailand', 1, '1573306500.dragon.jpg', '1573306500.dragon2.jpg', '1573306500.dragon3.jpg', '1573306500.dragon4.jpg', '2019-11-09 07:35:00', '2019-11-09 08:47:15'),
(22, 1, 'Watermelon', 'watermelon', 'Watermelon is a surprisingly healthy fruit. It has a high water content and also delivers many other important nutrients, including lycopene and vitamin C. These nutrients mean that watermelon isn\'t only a tasty low-calorie treat — it\'s also very good for your health.', '120', '1Kg', 'Bangladesh', 1, '1573306678.watermelon.jpg', '1573306678.watermelon1.jpg', '1573306678.watermelon2.jpg', '1573306678.watermelon4.png', '2019-11-09 07:37:58', '2019-11-09 08:07:54'),
(23, 9, 'Peanut', 'peanut', 'The peanut, also known as the groundnut, goober, or monkey nut, and taxonomically classified as Arachis hypogaea, is a legume crop grown mainly for its edible seeds. It is widely grown in the tropics and subtropics, being important to both small and large commercial producers.', '280', '1Kg', 'India', 1, '1573308680.peanut.jpg', '1573308680.peanut2.jpg', '1573308680.peanut3.jpg', '1573308680.peanut4.jpg', '2019-11-09 08:11:20', '2019-11-09 08:11:20'),
(24, 9, 'Cashew Nut', 'cashew-nut', 'The cashew tree is a tropical evergreen tree that produces the cashew seed and the cashew apple. It can grow as high as 14 m, but the dwarf cashew, growing up to 6 m, has proved more profitable, with earlier maturity and higher yields.', '900', '1kg', 'USA', 1, '1573308786.cashew.jpg', '1573308786.cashew1.jpg', '1573308786.cashew3.jpg', '1573308786.cashew4.jpg', '2019-11-09 08:13:06', '2019-11-09 08:13:29'),
(25, 9, 'Almond', 'almond', 'The almond is a species of tree native to Iran and surrounding countries but widely cultivated elsewhere. The almond is also the name of the edible and widely cultivated seed of this tree.', '560', '1kg', 'India', 1, '1573308886.almond.jpg', '1573308887.almond1.jpg', '1573308887.almond3.jpg', '1573308887.almond4.jpg', '2019-11-09 08:14:47', '2019-11-09 08:14:47'),
(26, 7, 'Pumpkin', 'pumpkin', 'A pumpkin is a cultivar of a squash plant, most commonly of Cucurbita pepo, that is round with .... Pumpkin leaves are a popular vegetable in the Western and central regions of Kenya; they are called seveve, and are an ingredient of mukimo', '50', '1kg', 'Bangladesh', 1, '1573309191.pumpkin.jpg', '1573309191.pumpkin2.jpg', '1573309191.pumpkin3.jpg', '1573309191.pumpkin4.jpg', '2019-11-09 08:19:51', '2019-11-09 08:19:51');

-- --------------------------------------------------------

--
-- Table structure for table `profiles_tables`
--

CREATE TABLE `profiles_tables` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `review_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$3FYZn7nYmXCYhcr0seg2auQQ0uHvGDXAWax/Ip7spP.N3HjcWs2Ny', 'admin', NULL, '2019-11-09 07:43:18', '2019-11-09 07:43:18'),
(2, 'Emran', 'emran.imam@gmail.com', NULL, '$2y$10$HpadO1EPHEyxi0jhy7dNle2zhq419hlcuuPICkV0coi7iSfRS0GSi', 'customer', NULL, '2019-11-10 17:29:43', '2019-11-10 17:29:43'),
(3, 'Test', 'emran.imam@live.com', NULL, '$2y$10$QNl9EvwvxOi2WSOwlxr60OGubreR8s/mgRv57BJQPAJfsKvjQxMCC', 'customer', NULL, '2019-11-10 17:35:08', '2019-11-10 17:35:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles_tables`
--
ALTER TABLE `profiles_tables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `profiles_tables`
--
ALTER TABLE `profiles_tables`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
