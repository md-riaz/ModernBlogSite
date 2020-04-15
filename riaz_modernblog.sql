-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 15, 2020 at 04:45 PM
-- Server version: 5.7.29
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riaz_modernblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Apps review', 'apps-review', 1, '2020-04-07 22:28:34', '2020-04-07 22:28:34'),
(3, 'Facebook Tricks', 'facebook-tricks', 1, '2020-04-15 16:02:22', '2020-04-15 16:02:22');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_02_170621_create_categories_table', 1),
(5, '2020_04_02_173011_create_posts_table', 1),
(6, '2020_04_05_101008_create_tags_table', 1),
(7, '2020_04_07_150030_post_tag', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category_id`, `user_id`, `post_img`, `details`, `created_at`, `updated_at`) VALUES
(2, 'ফ্রিতে যেকাউকে আনলিমিটেড মেসেজ পাঠান নিজের পরিচয় গোপন রেখে।কোনো পয়েন্ট বা ক্রেডিট জমানো ছাড়াই', 2, 1, 'public/frontend/postimg/1663354851158945.png', 'আজকে দেখাব কিভাবে আপনি আপনার নাম,তথ্য,পরিচয় গোপন রেখে ইচ্ছামত যেকাউকে ফ্রি আনলিমিটেড মেসেজ করবেন।\r\nকিছুদিন আগে এক ভাই madinait দিয়ে মেসেজ করা দেখিয়েছে কিন্তু তারা তা বন্ধ করে দিয়েছে।যা অনেক ভালো সিস্টেম ছিল।\r\nআবার অল্প দিন আগে আরেকজন আরেকটি মেসেজিং অ্যাপ দেখিয়েছিল,যা দিয়ে মেসেজ করতে আপনাকে পয়েন্ট আয় করে সেই পয়েন্ট দিলে মেসেজ করতে হবে সাথে আরো ঝামেলা।\r\n\r\nকিন্তু আজকে আমার দেখানো অ্যাপ দিয়ে মেসেজ করতে কিছুই লাগবে না।শুধু লাগবে রেজিস্টার করা।আর হ্যা,মজার ব্যাপার হলো তথ্য ভুয়া হলেও চলে।যা আমি নিজেই করেছি।এবং পুরো প্রক্রিয়া নিচে দেখালাম।আশা করি ভালো লাগবে।\r\nতার জন্য দরকার হবে online sms অ্যাপ টি।যা আপনি এখান থেকে ডাউনলোড করে নিতে পারবেন।\r\n\r\nhttps://www.file-up.org/z8qx2gc3l3js', '2020-04-07 22:33:20', '2020-04-07 22:33:20'),
(3, 'ফেসবুক পেইজের লাইক বাড়াবেন যেভাবে – Promote/Boost Facebook Page', 3, 1, 'public/frontend/postimg/1664055112557361.jpg', 'আসসালামুআলাইকুম, আশা করি সবাই ঘরে আছেন, সুস্থ আছেন। যদি সবাই অনেক বোরিং সময় কাটাচ্ছেন। কিন্তু দেশের যা অবস্থা ভালো না লাগলেও “ঘরে থাকুন ; সুস্থ্য থাকুন।”\r\nমূল কথায় আসি, আমরা সবাই এখন লকডাউনে আছি। এখন পুরো সময়টাই আমরা ফ্রিভাবে কাটাচ্ছি। তো এই সুযোগে অনেকেই আমাদের একটা ফেসবুক পেইজ বড় করার চিন্তা করছি। বিষয়টা কিন্তু খারাপ না। ফেসবুক আইডি, ফেসবুক পেইজ খুলা কঠিন কিছুনা। ৫ মিনিটের কাজ এগুলা। কিন্তু পেইজ লাইক বাড়ানোটাই মূল বিষয়।\r\n\r\nআজকে আমি ফেসবুকে লাইক বাড়ানোর বিষয়টা সম্পূর্ণ ক্লিয়ার করে ধরার চেষ্টা করবো। আমরা অনেকেই পেইজ খুলে ফেসবুকের বিভিন্ন জায়গায় সেটাকে শেয়ার করি। অন্যদের গ্রুপে, মেসেঞ্জারে, আইডিতে শেয়ার করে করে লাইক বাড়ানোর চেষ্টা করি। এভাবে হয়তো হাতে গুনা কয়েকটা লাইক আসবে। কিন্তু পেইজটাকে কখনো বড় করা যাবেনা,যেমনটা আপনি চাচ্ছেন। বরং অন্যদের গ্রুপে, মেসেঞ্জারে শেয়ার করার ফলে আপনার প্রতি তাদের একটা খারাপ আকর্ষণ তৈরী হয়। “প্লিজ আমার পেইজটায় একটি লাইক দিন” এটি অনেকটা ভিক্ষা চাওয়ার মতো, তাই অনেকেই এটা পছন্দ করেননা।\r\n\r\nসত্যি এটাই যে আপনি কিছু টাকা ইনভেষ্ট না করে আপনার পেইজেটিকে বড় করতে পারবেননা। যদি পেইজটি আপনার দরকারী হয় এবং কিছু টাকা খরচ করতে সমস্যা না থাকে তাহলে এই পোষ্টটি আপনার জন্য। ফেসবুক পেইজে লাইক বাড়ানোর বৈধ এবং একমাত্র প্রন্থা হচ্ছে পেইজটিকে প্রমোট (Promote) অথবা বুষ্ট (Boost) করা। যারা জীবনে একবার হলেও ফেসবুক পেইজ খুলেছেন তারা শব্দগুলোর সাথে পরিচিত। আর যারা এগুলো এখনো বুঝেননা তাদেরকে বুঝিয়ে বলছি।\r\n\r\nফেসবুক পেইজ প্রমোটের মাধ্যমে আপনার পেইজটি অন্যদের নিউজফিডে যাবে। এতে করে মানুষ আপনার পেইজটিতে লাইক করবে। আর পেইজের কোনো পোষ্ট যদি বুষ্ট করেন তাহলে সেই পোষ্টটা সবার নিউজফিডে যাবে আর তারা সেটিতে লাইক,কমেন্ট করবে। সহজ ভাষায় হচ্ছে যদি প্রমোট করেন তাহলে আপনার পেইজটিতে লাইক পারবে। আর নির্দিষ্ট কোনো পোষ্ট বুষ্ট করলে শুধু ওই পোষ্টটায় অনেক লাইক,কমেন্ট আসবে।\r\n\r\nপ্রমোট / বুষ্ট কিভাবে করবেন ?\r\nপ্রমোট বা বুষ্ট করার জন্য আপনার দরকার হবে একটি মাষ্টারকার্ড। অর্থাৎ মাষ্টারকার্ড দিয়ে আপনার ফেসবুক প্রমোটের খরচটা ফেসবুককে পেমেন্ট করতে হয়।\r\n\r\nমাষ্টারকার্ড কোথায় পাবেন ?\r\nবিদেশী কিছু কোম্পানি আছে যারা মাষ্টারকার্ড প্রদান করে থাকে। তবে সেটা পাওয়া একটু কষ্ট হয় যায়। আমার জানামতে বাংলাদেশী ইয়েষ্টার্ন ব্যাংক লিমিটেড (EBL) খুব সহজে মাষ্টারকার্ড দিয়ে থাকে। এই ব্যাংক থেকে মাষ্টারকার্ড পেতে হলে পাসপোর্ট থাকা লাগবে ৫০০ টাকা লাগবে। কার্ডটি নেওয়ার পর সেটিকে ডলার ঢুকিয়ে আপনি সহজেই প্রমোট এবং বুষ্ট করতে পারবেন। প্রতি ডলারের দাম ৮০-৮৫ টাকা করে থাকে।\r\n\r\nআর যদি আপনি মাষ্টারকার্ড নিতে না পারেন তাহলে যার কাছে মাষ্টারকার্ড আছে তার থেকে প্রমোট করিয়ে নিতে পারবেন।', '2020-04-15 16:03:41', '2020-04-15 16:03:41');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'MD RIAZ', 'riazmd582@gmail.com', NULL, '$2y$10$DdpaEGiximwyr/u5CkSdlOIxSyvXliB7T8iUbqQkHoFAg32F4cTsu', 'pzU7ZKkmaWRCdivTQnRjSKdQHsIQsWAdC7COAsoli8Z8qljyRDuEhu2O3EZ9', '2020-04-07 11:15:51', '2020-04-07 11:15:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
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
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
