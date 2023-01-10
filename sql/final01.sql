-- Adminer 4.8.1 MySQL 5.7.11 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `classes`;
CREATE TABLE `classes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `class_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `classes` (`id`, `class_name`, `intro`, `amount`, `time`, `created_at`, `updated_at`) VALUES
(1,	'光療指甲',	'又可稱為凝膠指甲，材質是天然樹脂，照LED燈後會硬化，可以強化指甲、矯正指形、彩繪，凝膠的厚度，可以改善咬指甲等的指甲問題。',	1000,	'00:30:00',	'2023-01-10 19:54:57',	'2023-01-10 19:54:57'),
(2,	'缷甲服務',	'內含甲面保養及護甲油',	500,	'00:30:00',	'2023-01-10 19:56:20',	'2023-01-10 19:56:20'),
(3,	'手部保養',	'手部深層保養\r\n消毒→去色→修型→修剪甘皮→甲面拋光→去角質→熱敷→放鬆按摩→敷保濕手膜→上電熱套導入→上護甲油→上指緣油→乳液滋潤',	1200,	'01:00:00',	'2023-01-10 19:57:19',	'2023-01-10 19:57:19');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ter_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_ter_id_foreign` (`ter_id`),
  CONSTRAINT `images_ter_id_foreign` FOREIGN KEY (`ter_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `images` (`id`, `image`, `ter_id`, `created_at`, `updated_at`) VALUES
(1,	'磊哥_1673380139.jpg',	1,	'2023-01-10 19:48:59',	'2023-01-10 19:48:59'),
(2,	'黃主任_1673380164.jpg',	2,	'2023-01-10 19:49:24',	'2023-01-10 19:49:24');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2022_12_13_110841_create_sessions_table',	1),
(7,	'2022_12_21_152811_create_classes_table',	1),
(8,	'2022_12_21_153031_create_trades_table',	1),
(9,	'2022_12_27_163700_create_staffs_table',	1),
(10,	'2023_01_10_224334_create_images_table',	1),
(11,	'2023_01_11_010720_add_ismenber_column_to_users_table',	1),
(12,	'2022_12_21_152830_create_schedules_table',	2),
(13,	'2022_12_21_152856_create_reserves_table',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `reserves`;
CREATE TABLE `reserves` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ter_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `class_id` bigint(20) unsigned NOT NULL,
  `date` date NOT NULL,
  `str_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '未完成',
  PRIMARY KEY (`id`),
  KEY `reserves_ter_id_foreign` (`ter_id`),
  KEY `reserves_user_id_foreign` (`user_id`),
  KEY `reserves_class_id_foreign` (`class_id`),
  CONSTRAINT `reserves_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reserves_ter_id_foreign` FOREIGN KEY (`ter_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `reserves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `reserves` (`id`, `ter_id`, `user_id`, `class_id`, `date`, `str_time`, `created_at`, `updated_at`, `status`) VALUES
(1,	1,	1,	1,	'2023-01-11',	'10:00:00',	'2023-01-10 20:02:39',	'2023-01-10 20:02:39',	'未完成'),
(2,	999999,	1,	1,	'2023-01-12',	'12:00:00',	'2023-01-10 20:06:15',	'2023-01-10 20:06:15',	'未完成'),
(3,	1,	1,	3,	'2023-01-12',	'10:00:00',	'2023-01-10 20:11:03',	'2023-01-10 20:11:03',	'未完成');

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE `schedules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ter_id` bigint(20) unsigned NOT NULL,
  `week` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `str_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedules_ter_id_foreign` (`ter_id`),
  CONSTRAINT `schedules_ter_id_foreign` FOREIGN KEY (`ter_id`) REFERENCES `staffs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `schedules` (`id`, `ter_id`, `week`, `str_time`, `end_time`, `created_at`, `updated_at`) VALUES
(1,	1,	'二',	'10:00:00',	'10:00:00',	'2023-01-10 20:13:33',	'2023-01-10 20:14:50'),
(2,	1,	'一',	'10:00:00',	'17:00:00',	'2023-01-10 20:13:42',	'2023-01-10 20:14:36'),
(3,	2,	'三',	'10:00:00',	'18:00:00',	'2023-01-10 20:13:50',	'2023-01-10 20:13:50'),
(4,	2,	'四',	'10:00:00',	'18:00:00',	'2023-01-10 20:14:04',	'2023-01-10 20:14:04');

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`, `created_at`, `updated_at`) VALUES
('Et7nY79mwYqccOFgC0KyXzkU6HhSOgTVaL6suNa6',	2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYkZnVlNSbUhLVUlDNXhOaFhuaURYWUJ0NGlMNVFXS3NvRVY2MmhMdSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYWRtaW4vcmVzZXJ2ZXMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJDdtTm5iNi5vSkFJZzlkWE5kMVpIc091T29meFQ3OE9zOWtKR1dBTkdLdkRNYjMxWFouY242Ijt9',	1673384877,	NULL,	NULL);

DROP TABLE IF EXISTS `staffs`;
CREATE TABLE `staffs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `staff_name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `staffs` (`id`, `staff_name`, `introduce`, `created_at`, `updated_at`) VALUES
(1,	'磊哥',	'五代學生共同班導師，不設隔閡的性格容易與學生打好關係，設身處地為學生著想的態度也讓問題學生一一改過向善，是全校最受學生愛戴的老師之一。跳脫傳統的行事風格在一開始飽受其他老師的非議，直到一陣子過後，因為學生們的轉變並轉而認同他。',	'2023-01-10 19:48:59',	'2023-01-10 19:48:59'),
(2,	'黃主任',	'性格嚴厲，對犯錯學生的處置毫不留情。一開始並不喜歡特立獨行的徐磊，但之後慢慢和徐磊成為損友般的關係。',	'2023-01-10 19:49:24',	'2023-01-10 19:49:24'),
(999999,	'不指定',	'NA',	NULL,	NULL);

DROP TABLE IF EXISTS `trades`;
CREATE TABLE `trades` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `datetime` datetime NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trades_user_id_foreign` (`user_id`),
  CONSTRAINT `trades_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date DEFAULT NULL,
  `phone` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) unsigned DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ismember` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `birth`, `phone`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `ismember`) VALUES
(1,	'user1',	NULL,	NULL,	'user1@gmail.com',	NULL,	'$2y$10$ufAuR2rQOQNiJNdaa2UZ6OVxRowJO7fiU4M3qHqzJTriM3mcWMzoO',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-01-10 19:43:34',	'2023-01-10 19:43:34',	1),
(2,	'root',	NULL,	NULL,	'root@gmail.com',	NULL,	'$2y$10$7mNnb6.oJAIg9dXNd1ZHsOuOofxT78Os9kJGWANGKvDMb31XZ.cn6',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-01-10 19:44:26',	'2023-01-10 19:44:26',	0);

-- 2023-01-10 21:34:20
