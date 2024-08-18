-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: diploma
-- ------------------------------------------------------
-- Server version	8.0.36

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('mama@bk.ru|172.19.0.1','i:1;',1719290280),('mama@bk.ru|172.19.0.1:timer','i:1719290279;',1719290279);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `information` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'SQL','Декларативный язык программирования, применяемый для создания, модификации и управления данными в реляционной базе данных',NULL,'2024-06-09 18:47:44','2024-08-05 07:28:55','images/sql.png'),(2,'JAVASCRIPT','Мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили.','<h4 class=\"category-course-homework\">Несколько вступительных слов о Javascript</h4>\r\n<p class=\"category-course-paragraph-homework\">JavaScript один из основных, входящих в топ-10, языков программирования. У пользователя появляется больше возможностей\r\n    взаимодействовать с web-страницей.</p><p class=\"category-course-paragraph-homework\">С помощью Javascript web-страница, при взаимодействии с пользователем, из статичной становится интерактивной.</p>\r\n<p class=\"category-course-paragraph-homework\">JavaScript и Java это разные языки программирования и их не стоит путать.</p>\r\n<p class=\"category-course-paragraph-homework\">С приобретением знаний вы сможете программировать на страницах не шаблонное, а абсолютно новое\r\n    отображение реакций на действия пользователя.</p><p class=\"category-course-paragraph-homework\">В HTML5 JavaScript стал стандартным языком сценариев и поддерживается всеми современными браузерами.</p>\r\n<p class=\"category-course-paragraph-homework\">Помимо frontend части сайта (того что мы видим в браузере), Javascript можно использовать как серверный язык. Для этого используется  платформа node.js.</p>','2024-06-09 18:47:44','2024-08-14 16:48:32','images/javascript.png'),(3,'PHP','Скриптовый язык общего назначения, применяется для разработки веб-приложений и для создания динамических веб-сайтов. ',NULL,'2024-06-09 18:47:44',NULL,'images/php.png');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_post_idx` (`post_id`),
  KEY `comments_user_idx` (`user_id`),
  CONSTRAINT `comments_post_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `comments_user_f` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,2,8,'xxbvcnbcnbmnvmmbmbm,','2024-06-17 19:05:02','2024-06-17 19:05:02'),(2,2,8,'1111111111111111111111111','2024-06-17 19:09:04','2024-06-17 19:09:04'),(3,2,8,'dfrvc xvb fd nb dfugio xvcvb','2024-06-17 19:10:33','2024-06-17 19:10:33'),(4,2,1,'Отлично','2024-06-17 19:15:54','2024-06-17 19:15:54'),(5,1,17,'Отправляем комментарий для урока \"Анонимные функции, замыкания\"','2024-07-17 14:20:30','2024-07-17 14:20:30'),(6,3,2,'Отправляем комментарий.Создайте файл Blade для вашего меню, например resources/views/partials/menu.blade.php. В этом файле вы можете использовать функцию Route::currentRouteName() для определения текущего маршрута и добавить класс active к активной ссылке:','2024-07-20 13:56:06','2024-07-20 13:56:06');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estimations`
--

DROP TABLE IF EXISTS `estimations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estimations` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `post_id` bigint unsigned NOT NULL,
  `option` enum('Отлично','Хорошо','Слабо','Очень плохо') COLLATE utf8mb4_unicode_ci NOT NULL,
  `radio` enum('Да, все было понятно и хватило','Было много полезного, но хотелось бы больше','Было недостаточно','Я ничего не понял') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `estimations_option_index` (`option`),
  KEY `estimations_radio_index` (`radio`),
  KEY `estimations_post_idx` (`post_id`),
  KEY `estimations_user_idx` (`user_id`),
  CONSTRAINT `estimations_post_fk` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  CONSTRAINT `estimations_user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estimations`
--

LOCK TABLES `estimations` WRITE;
/*!40000 ALTER TABLE `estimations` DISABLE KEYS */;
INSERT INTO `estimations` VALUES (1,2,2,'Отлично','Да, все было понятно и хватило','2024-08-01 15:18:24','2024-08-01 15:18:24',NULL),(8,3,2,'Очень плохо','Я ничего не понял','2024-08-01 16:29:35','2024-08-01 16:29:35',NULL),(12,3,2,'Слабо','Было недостаточно','2024-08-01 16:42:07','2024-08-01 16:42:07',NULL),(13,4,2,'Отлично','Да, все было понятно и хватило','2024-08-01 19:42:39','2024-08-01 19:42:39',NULL),(14,4,2,'Слабо','Было недостаточно','2024-08-02 09:00:40','2024-08-02 09:00:40',NULL),(15,4,2,'Очень плохо','Я ничего не понял','2024-08-02 09:06:16','2024-08-02 09:06:16','Ужасно'),(16,4,2,'Хорошо','Было много полезного, но хотелось бы больше','2024-08-02 19:06:13','2024-08-02 19:06:13','55555555555555555555');
/*!40000 ALTER TABLE `estimations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_06_09_122059_add_admin_field_to_users_table',1),(5,'2024_06_09_151458_create_categories_table',1),(6,'2024_06_09_152010_create_posts_table',1),(7,'2024_06_10_161655_add_image_field_to_categories_table',2),(9,'2024_06_13_175340_create_comments_table',3),(10,'2024_07_22_090110_create_plans_table',4),(11,'2024_07_23_050410_create_practice_table',5),(12,'2024_07_24_151756_add_image_field_to_practice_table',6),(13,'2024_07_24_171316_drop_decision_column_from_practice_table',7),(14,'2024_07_31_200105_create_estimations_table',8),(15,'2024_08_02_073125_drop_message_column_from_estimations_table',9),(16,'2024_08_02_084535_add_message_column_from_estimations_table',10),(17,'2024_08_14_154257_add_information_column_from_categories_table',11);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
INSERT INTO `password_reset_tokens` VALUES ('anna@bk.ru','$2y$12$b8/i6m3T692vYSHA86fyw.GwjQbVUtgO4lDruGXdRMPSuvQRA5NCu','2024-06-24 17:24:31');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plans`
--

DROP TABLE IF EXISTS `plans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `posts_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `plans_posts_id_foreign` (`posts_id`),
  CONSTRAINT `plans_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

LOCK TABLES `plans` WRITE;
/*!40000 ALTER TABLE `plans` DISABLE KEYS */;
INSERT INTO `plans` VALUES (1,2,'Принципы работы JavaScript.',NULL,NULL),(2,2,'Принципы написания кода на JavaScript.',NULL,NULL),(3,2,'Структура кода.',NULL,NULL),(4,2,'Типы данных.',NULL,NULL),(5,2,'Стандарт языка.',NULL,NULL),(6,4,'Операторы.','2024-08-03 18:24:26','2024-08-03 18:24:26'),(7,4,'Принципы ветвления, блок-схемы.','2024-08-03 18:26:16','2024-08-03 18:26:16'),(8,4,'Конструкция if-else.','2024-08-03 18:27:34','2024-08-03 18:27:34'),(9,4,'Конcтрукция switch.','2024-08-03 18:28:30','2024-08-03 18:28:30'),(10,4,'Тернарный оператор.','2024-08-03 18:29:18','2024-08-03 18:29:18'),(11,4,'Функции.','2024-08-03 18:30:00','2024-08-03 18:30:00');
/*!40000 ALTER TABLE `plans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Admin',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('draft','active','blocked') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `posts_category_id_foreign` (`category_id`),
  KEY `posts_status_index` (`status`),
  CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,1,'Урок 1. Инструменты для работы с базами данных','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 08:43:43'),(2,2,'Урок 1. Основы языка JavaScript','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 13:59:01'),(3,1,'Урок 2. SQL – создание объектов, изменение данных, логические операторы','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 08:47:47'),(4,2,'Урок 2. Основные операторы JavaScript','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 14:00:55'),(5,1,'Урок 3. SQL – выборка данных, сортировка, агрегатные функции','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 09:09:22'),(6,1,'Урок 4. SQL – объединение таблиц union, соединение - join, подзапросы','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 09:12:37'),(7,2,'Урок 3. Циклы, массивы, структуры данных','Admin',NULL,'active','Урок в разработке','2024-06-09 18:47:45','2024-07-15 14:06:18'),(8,3,'Урок 1. Введение в PHP','Admin',NULL,'active','Описание Введение в PHP','2024-06-09 18:47:45','2024-07-17 10:27:48'),(9,2,'Урок 4. Объекты в JavaScript','Admin',NULL,'active','Описание Объекты в JavaScript','2024-06-09 18:47:45','2024-07-15 14:08:35'),(11,3,'Урок 2. Управление потоком','Admin',NULL,'active','Некоторое описание этого курса','2024-06-13 09:24:42','2024-07-17 10:37:44'),(12,2,'Урок 5. Введение в DOM','Admin',NULL,'active','Описания. Введение в DOM','2024-06-19 12:06:48','2024-07-15 14:10:37'),(13,2,'Урок 6. Обработка событий в JavaScript','Admin',NULL,'active','Описания Обработка событий в JavaScript','2024-06-19 12:08:58','2024-07-15 14:12:22'),(14,1,'Урок 5. SQL – оконные функции','Admin',NULL,'active','Описание SQL – оконные функции','2024-06-19 16:34:57','2024-07-15 09:16:18'),(15,2,'Урок 7. Урок-практикум','Admin',NULL,'active','Описание Урок-практикум','2024-06-19 16:41:46','2024-07-17 10:43:23'),(16,1,'Урок 6. SQL – Транзакции, ACID. Временные таблицы, управляющие конструкции, циклы','Admin',NULL,'active','Описание SQL – Транзакции, ACID. Временные таблицы, управляющие конструкции, циклы','2024-07-15 09:18:25','2024-07-15 09:18:25'),(17,2,'Урок 8. Анонимные функции, замыкания','Admin',NULL,'draft','Описание Анонимные функции, замыкания','2024-07-15 14:16:22','2024-07-15 14:16:22'),(18,3,'Урок 3. Массивы и словари','Admin',NULL,'active','Описание Массивы и словари','2024-07-17 10:34:03','2024-07-17 10:40:41'),(19,3,'Урок 4. Функции','Admin',NULL,'active','Описание Урок 4. Функции','2024-07-17 10:38:56','2024-07-17 10:41:53'),(20,3,'Урок 6. Обработка запросов','Admin',NULL,'active','Описание Обработка запросов','2024-07-17 10:45:55','2024-07-17 10:45:55'),(21,3,'Урок 7. Базы данных','Admin',NULL,'active','Описание Базы данных','2024-07-17 10:47:27','2024-07-17 10:47:27'),(22,3,'Урок 8. Исключения и отладка','Admin',NULL,'draft','Описание Исключения и отладка','2024-07-17 10:49:13','2024-07-17 10:49:13');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `practice`
--

DROP TABLE IF EXISTS `practice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `practice` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `posts_id` bigint unsigned NOT NULL,
  `homework` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `practice_posts_id_foreign` (`posts_id`),
  CONSTRAINT `practice_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `practice`
--

LOCK TABLES `practice` WRITE;
/*!40000 ALTER TABLE `practice` DISABLE KEYS */;
INSERT INTO `practice` VALUES (1,2,'<p class=\"homework\">1. Необходимо пользователя попросить ввести температуру в градусах Цельсия, преобразовать введенное пользователем значение в соответствующую температуру в градусах по Фаренгейту и вывести в alert сообщение с текстом: \"Цельсий: {C}, Фаренгейт: {F}\"</p>\r\n<p class=\"homework\">Где вместо {C} и {F} должны быть подставлены соответствующие значения, которые были получены ранее.</p><p class=\"homework\">\r\nФормула перевода градусов Цельсия в градусы Фаренгейта: градусы Фаренгейта = (9 / 5) * градусы Цельсия + 32</p><p class=\"homework\">\r\nУточнение: пользователь всегда вводит корректное число.</p>',NULL,NULL,'images/script.png'),(2,2,'<p class=\"homework\">\r\n2. Необходимо создать переменную name, записать в эту переменную свое имя.</p><p class=\"homework\">\r\nНеобходимо также создать переменную admin и присвоить этой переменной значение\r\nиз переменной name.</p><p class=\"homework\">\r\nВывести значение переменной admin в консоль.</p>',NULL,NULL,'images/script_1.png'),(3,2,'<p class=\"homework\">\r\n3. Необходимо вывести в консоль значения выражений:</p><p class=\"homework\">\r\n10 + 10 + \"10\"</p><p class=\"homework\">\r\n10 + \"10\" + 10</p><p class=\"homework\">\r\n10 + 10 + +\"10\"</p><p class=\"homework\">\r\n10 / -\"\"</p><p class=\"homework\">\r\n10 / +\"2,5\"</p><p class=\"homework\">\r\nВ этих выражениях нет опечаток, вам их нужно скопировать и вывести в консоль.</p><br><p class=\"homework\">\r\n\r\nНад каждым выводом в консоль необходимо объяснить почему мы получаем такой\r\nрезультат.</p><br><p class=\"homework\">\r\n\r\nОбъяснения пишите в таком формате:</p><p class=\"homework\">\r\n/*</p><p class=\"homework\">\r\n1. 4 умножаем на 2 получаем 8.</p><p class=\"homework\">\r\n2. 3 минус 8 получаем -5.</p><p class=\"homework\">\r\n3. С помощью console.log выводим число -5 в консоль.</p><p class=\"homework\">\r\n*/</p><p class=\"homework\">\r\nconsole.log(3 - 4 * 2);</p>',NULL,NULL,'images/script_2.png'),(4,2,'<p class=\"homework\">\r\n4. Необходимо от пользователя получить число.</p><p class=\"homework\">\r\nНеобходимо вывести разряды числа, а именно: количество сотен, десятков и единиц.</p><p class=\"homework\">\r\n\r\nПример:</p><p class=\"homework\">\r\nПользователь ввел число 163. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 163 количество сотен: 1, десятков: 6, единиц: 3\"</p><p class=\"homework\">\r\n\r\nПример 2:</p><p class=\"homework\">\r\nПользователь ввел число 74. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 74 количество сотен: 0, десятков: 7, единиц: 4\"</p><p class=\"homework\">\r\n\r\nПример 3:</p><p class=\"homework\">\r\nПользователь ввел число 9537. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 9537 количество сотен: 5, десятков: 3, единиц: 7\"</p><p class=\"homework\">\r\n\r\nУточнение: пользователь всегда вводит корректное положительное целое число.</p>',NULL,NULL,'images/script_3.png'),(5,4,'<p class=\"homework\">5.  Для кода вставленного в теге script необходимо дать комментарии, почему мы получаем такой результат (в свободной форме).</p><p class=\"homework\">Подсказка. Чтобы лучше разобраться возьмите этот код и запустите в отладчике в браузере со включенными точками остановки.</p><p class=\"homework\">let a = 1, b = 1, c, d;</p><p class=\"homework\">/*Ваш комментарий, почему переменная `c` хранит данное значение?*/</p><p class=\"homework\">c = ++a;</p><p class=\"homework\">console.log(c);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `d` хранит данное значение?*/</p><p class=\"homework\">d = b++;</p><p class=\"homework\">console.log(d);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `c` хранит данное значение?*/</p><p class=\"homework\">c = 2 + ++a;</p><p class=\"homework\">console.log(c);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `d` хранит данное значение?*/</p><p class=\"homework\">d = 2 + b++;</p><p class=\"homework\">console.log(d);</p><p class=\"homework\">console.log(a);</p><p class=\"homework\">console.log(b);</p>','2024-08-04 19:40:40','2024-08-04 19:40:40','images/script_4.png'),(6,4,'<p class=\"homework\">6. Для кода вставленного в теге script необходимо дать комментарии, почему мы получаем такой результат (в свободной форме).</p>  <p class=\"homework\">Подсказка. Чтобы лучше разобраться возьмите этот код и запустите в отладчике в браузере со включенными точками остановки.</p>     <p class=\"homework\">let a = 2;</p>   <p class=\"homework\">let x = 1 + (a *= 2);</p>    <p class=\"homework\">/*</p>   <p class=\"homework\">Ваш комментарий, почему переменные `x` и `a` хранят данные значения?</p>    <p class=\"homework\">*/</p>   <p class=\"homework\">console.log(x);</p>   <p class=\"homework\">console.log(a);</p','2024-08-04 21:25:18','2024-08-04 21:25:18','images/script_5.png'),(7,4,'<p class=\"homework\">7. Необходимо попросить пользователя ввести два числа в переменные `a` и `b`.</p> <p class=\"homework\">Необходимо вывести в консоль один результат из следующих проверок:</p> <p class=\"homework\">1. Если оба числа в переменных `a` и `b` положительные, вывести разность чисел `a` и `b`, а именно, вычесть из переменной `a` значение переменной `b`.</p> <p class=\"homework\">2. Если оба числа в переменных `a` и `b` отрицательные, вывести произведение чисел `a` и `b`.</p> <p class=\"homework\">3. Если числа в переменных `a` и `b` разных знаков, вывести сумму чисел `a` и `b`.</p> <p class=\"homework\">В остальных случаях программа не должна ничего выводить.</p>','2024-08-04 21:57:21','2024-08-04 21:57:21','images/script_6.png'),(8,4,'<p class=\"homework\">8. Необходимо реализовать четыре функции, каждая функция должна принимать по два числа и выполнять одну из операций (каждая функция выполняет одну из них):</p> <p class=\"homework\">1. Сложение</p> <p class=\"homework\">2. Разность</p> <p class=\"homework\">3. Умножение</p> <p class=\"homework\">4. Деление</p>  <p class=\"homework\">Необходимо сделать так, чтобы функция вернула число, например выражение `console.log(sum(2, 6));` должно вывести число 8 в консоль (sum - функция сложения в данном примере, ваши названия функций могут отличаться).</p>  <p class=\"homework\">Округлять значения, которые возвращают функции не нужно, однако, обратите внимание на разность, функция должна вычесть из большего числа меньшее, либо вернуть 0, если числа равны.</p>  <p class=\"homework\">Функциям всегда передаются корректные числа, проверки на NaN, Infinity делать не нужно.</p>  <p class=\"homework\">Необходимо для всех функций прописать комментарии jsdoc https://jsdoc.app/.</p>','2024-08-05 04:06:12','2024-08-05 04:06:12','images/script_7.png'),(9,4,'<p class=\"homework\">9. Необходимо скопировать и вставить в данный скрипт все функции из 4 задания.</p> <p class=\"homework\">Необходимо реализовать функцию:</p> <p class=\"homework\">mathOperation(arg1, arg2, operation);</p> <p class=\"homework\">Параметры:</p> <p class=\"homework\">arg1 - первое число.</p> <p class=\"homework\">arg2 - второе число.</p> <p class=\"homework\">operation - строка, которая содержит один символ из: \"+\", \"-\", \"*\", \"/\".</p> <p class=\"homework\">Функция mathOperation должна вернуть результат операции, который был передан в</p> <p class=\"homework\">параметр operation для двух первых аргументов (arg1 и arg2).</p> <p class=\"homework\">Функция mathOperation должна использовать для вычисления функции из 4 задания.</p>  <p class=\"homework\">Примеры вызова функции:</p> <p class=\"homework\">console.log(mathOperation(5, 3, \"+\")); // 8</p> <p class=\"homework\">console.log(mathOperation(5, 3, \":)\")); // NaN</p>  <p class=\"homework\">Функции mathOperation всегда передаются корректные числа, проверки на NaN, Infinity делать не нужно, однако, в случае если был передан некорректный аргумент в параметр operation, необходимо вернуть NaN.</p>  <p class=\"homework\">Необходимо для всех функций прописать комментарии jsdoc https://jsdoc.app/.</p>','2024-08-05 04:20:54','2024-08-05 04:20:54','images/script_8.png'),(10,4,'<p class=\"homework\">10. Необходимо реализовать функцию, которая будет принимать первым аргументом целое положительное число, в следующих трех аргументах функция принимает слова в разных склонениях.</p> <p class=\"homework\">Функция должна возвращать одно из трех переданных в параметры слов подходящее под число, которое передано первым аргументом.</p>  <p class=\"homework\">Пример:</p> <p class=\"homework\">console.log(declinationOfNumber(1, \"яблоко\", \"яблока\", \"яблок\")); // \"яблоко\"</p> <p class=\"homework\">console.log(declinationOfNumber(2, \"мяч\", \"мяча\", \"мячей\")); // \"мяча\"</p> <p class=\"homework\">console.log(declinationOfNumber(5, \"стул\", \"стула\", \"стульев\")); // \"стульев\"</p>  <p class=\"homework\">Функция должна работать с любым словом и любым целым положительным числом. Все аргументы, которые будут передаваться функции будут верны.</p>    <p class=\"homework\">function declinationOfNumber(count, one, two, five) {</p>    <p class=\"homework\">}</p>    <p class=\"homework\">// Число яблок, можно пробовать поставить свое целое, положительное число.   const applesNumber = 5;</p>   <p class=\"homework\">// Получаем от функции одно из слов \"яблоко\", \"яблока\" или \"яблок\".</p>   <p class=\"homework\">const word = declinationOfNumber(applesNumber, \"яблоко\", \"яблока\", \"яблок\");</p>   <p class=\"homework\">// Выводим корректную строку, например:</p>   <p class=\"homework\">// \"У меня есть 1 яблоко.\"</p>   <p class=\"homework\">// \"У меня есть 2 яблока.\"</p>   <p class=\"homework\">// \"У меня есть 5 яблок.\"</p>   <p class=\"homework\">// При любом целом, положительном числе в applesNumber, строка, которая    выводится в console.log, должна иметь правильное склонение слова \"яблоко\".</p>   <p class=\"homework\">console.log(`У меня есть ${applesNumber} ${word}.`);</p>','2024-08-05 05:26:57','2024-08-05 05:26:57','images/script_9.png');
/*!40000 ALTER TABLE `practice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@bk.ru',NULL,'$2y$12$U3diy9dy7BjXJVpNzcbHmegypw3f/QXGwbTdVwkVsT94BIzu1cXfy',NULL,'2024-06-16 11:25:21','2024-06-16 11:25:21',NULL,1,1),(2,'Anna','anna@bk.ru',NULL,'$2y$12$UIHKxfc13B/aAgDNpelYHOMo1FkbaCYMK1Tg2.D.kPG7MHxThl1/u','iQUsK1HIrxTpw58vTnqMZk8zg35GdG7SReweYjUsW3nR01CrKw1dALe7suIP','2024-06-16 11:29:29','2024-08-17 14:32:32',NULL,1,0),(3,'Pavel','pavel@bk.ru',NULL,'$2y$12$6ln7j81cKBX1q00MBU4VB.URrVHy4v88H3141lud4Jr21kA/2UwUi',NULL,'2024-06-16 11:33:37','2024-06-16 11:33:37',NULL,1,0),(4,'Luba','luba@bk.ru',NULL,'$2y$12$qWEsBMOKC/Mluh0W0gQvKODA51PEwtbXM3hraGXO3xf8m6vHpog8O',NULL,'2024-08-01 16:53:11','2024-08-01 16:53:11',NULL,1,0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'diploma'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-18 16:21:30
