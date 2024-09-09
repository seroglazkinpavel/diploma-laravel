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
LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('mama@bk.ru|172.19.0.1','i:1;',1719290280),('mama@bk.ru|172.19.0.1:timer','i:1719290279;',1719290279);
LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'SQL','Декларативный язык программирования, применяемый для создания, модификации и управления данными в реляционной базе данных',NULL,'2024-06-09 18:47:44','2024-09-07 11:16:27','categories/WoEZYvf6IeSQxlQJjUXJDm8qShP7MFrcoLy7whB9.png'),(2,'JAVASCRIPT','Мультипарадигменный язык программирования. Поддерживает объектно-ориентированный, императивный и функциональный стили.','<h4 class=\"category-course-homework\">Несколько вступительных слов о Javascript</h4>\r\n<p class=\"category-course-paragraph-homework\">JavaScript один из основных, входящих в топ-10, языков программирования. У пользователя появляется больше возможностей\r\n    взаимодействовать с web-страницей.</p><p class=\"category-course-paragraph-homework\">С помощью Javascript web-страница, при взаимодействии с пользователем, из статичной становится интерактивной.</p>\r\n<p class=\"category-course-paragraph-homework\">JavaScript и Java это разные языки программирования и их не стоит путать.</p>\r\n<p class=\"category-course-paragraph-homework\">С приобретением знаний вы сможете программировать на страницах не шаблонное, а абсолютно новое\r\n    отображение реакций на действия пользователя.</p><p class=\"category-course-paragraph-homework\">В HTML5 JavaScript стал стандартным языком сценариев и поддерживается всеми современными браузерами.</p>\r\n<p class=\"category-course-paragraph-homework\">Помимо frontend части сайта (того что мы видим в браузере), Javascript можно использовать как серверный язык. Для этого используется  платформа node.js.</p>','2024-06-09 18:47:44','2024-09-07 11:30:33','categories/DesPRkt3SJgknU1uXYMMhaFIImRjGcBy6jlu3npZ.png'),(3,'PHP','Скриптовый язык общего назначения, применяется для разработки веб-приложений и для создания динамических веб-сайтов.','<h4 class=\"category-course-homework\">Несколько вступительных слов о PHP</h4>\r\n<p class=\"category-course-paragraph-homework\">PHP — интерпретируемый серверный язык программирования общего назначения. Является одним из\r\nсамых популярных инструментов веб-разработки, для чего изначально и создавался. На нём написано\r\nоколо 80% всех веб-сайтов интернет и это значение не убывает на протяжении многих лет. Язык\r\nактивно развивается и регулярно публикуются новые версии</p>\r\n<p class=\"category-course-paragraph-homework\">Несмотря на то, что на PHP написана большая часть сайтов интернет, область его применения\r\nотнюдь не ограничена вебом, но в ней, пожалуй, лучше всего раскрывается потенциал языка. Язык\r\nможет стать полезным инструментом в разработке скриптов автоматизации, отложенных заданий или\r\nдаже как бэкенд-часть для Десктоп-приложения</p>','2024-06-09 18:47:44','2024-09-07 12:27:38','categories/EFXmVgjNlOdehQCakRf3bzAH3oxLT9Ox1vtM8WOK.png');
LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,3,2,'Отправка тестового комментария','2024-08-27 15:41:49','2024-08-27 15:41:49'),(2,3,2,'qqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq','2024-09-03 16:17:48','2024-09-03 16:17:48'),(3,3,2,'И так генеральная проверка отправки комментарий','2024-09-03 16:21:13','2024-09-03 16:21:13'),(4,3,2,'Не прошло, повторяем генеральную проверку на отправку комментарий','2024-09-03 16:26:31','2024-09-03 16:26:31');
LOCK TABLES `estimations` WRITE;
/*!40000 ALTER TABLE `estimations` DISABLE KEYS */;
INSERT INTO `estimations` VALUES (1,2,2,'Отлично','Да, все было понятно и хватило','2024-08-01 15:18:24','2024-08-01 15:18:24',NULL),(8,3,2,'Очень плохо','Я ничего не понял','2024-08-01 16:29:35','2024-08-01 16:29:35',NULL),(12,3,2,'Слабо','Было недостаточно','2024-08-01 16:42:07','2024-08-01 16:42:07',NULL),(13,4,2,'Отлично','Да, все было понятно и хватило','2024-08-01 19:42:39','2024-08-01 19:42:39',NULL),(14,4,2,'Слабо','Было недостаточно','2024-08-02 09:00:40','2024-08-02 09:00:40',NULL),(15,4,2,'Очень плохо','Я ничего не понял','2024-08-02 09:06:16','2024-08-02 09:06:16','Ужасно'),(16,4,2,'Хорошо','Было много полезного, но хотелось бы больше','2024-08-02 19:06:13','2024-08-02 19:06:13','55555555555555555555'),(17,2,1,'Отлично','Да, все было понятно и хватило','2024-08-19 13:29:46','2024-08-19 13:29:46','Хотелось бы перечень летературы');
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
LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'0001_01_01_000000_create_users_table',1),(2,'0001_01_01_000001_create_cache_table',1),(3,'0001_01_01_000002_create_jobs_table',1),(4,'2024_06_09_122059_add_admin_field_to_users_table',1),(5,'2024_06_09_151458_create_categories_table',1),(6,'2024_06_09_152010_create_posts_table',1),(7,'2024_06_10_161655_add_image_field_to_categories_table',2),(9,'2024_06_13_175340_create_comments_table',3),(10,'2024_07_22_090110_create_plans_table',4),(11,'2024_07_23_050410_create_practice_table',5),(12,'2024_07_24_151756_add_image_field_to_practice_table',6),(13,'2024_07_24_171316_drop_decision_column_from_practice_table',7),(14,'2024_07_31_200105_create_estimations_table',8),(15,'2024_08_02_073125_drop_message_column_from_estimations_table',9),(16,'2024_08_02_084535_add_message_column_from_estimations_table',10),(17,'2024_08_14_154257_add_information_column_from_categories_table',11),(19,'2024_08_18_150355_create_informations_table',12),(21,'2024_08_26_135107_drop_comments_table',13),(22,'2024_08_27_144831_create_reviews_table',13),(23,'2024_08_27_152156_create_comments_table',14);
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plans`
--

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
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

раузер отобразит оповещение с заданным текстом. Это малая часть возможностей языка, с которыми нам предстоит познакомиться. Но этот пример в духе «Hello, World» дает общее представление о том, как происходит подключение и вызов скрипта.</p>\r\n                <p>Бывают случаи, когда код выносят в отдельный файл, подключаемый в HTML-коде: если кода много; если код работает на многих страницах сайта</p>\r\n                <p class=\"code-background\">&lt;script src=\"/path/to/script.js\"&gt;&lt;/script&gt;</p>\r\n                <p>В качестве значения атрибута src указывается путь к файлу, содержащему скрипт. Браузер скачивает и выполняет его. Можно указать скрипт, который расположен на другом сервере:</p>\r\n                <div class=\"code-background\">\r\n                    <p>&lt;script&gt;</p>\r\n                    <p>src=\"https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js\"</p>\r\n                    <p>&lt;/script&gt;</p>\r\n                </div>\r\n                <h3 class=\"operating-principle-title\"><strong>Структура кода</strong></h3>\r\n                <p>В JavaScript код состоит из команд. Сама по себе команда описывает операцию. Набор команд, из\r\n                    которых состоит код, и задает поведение страницы. Команды в коде, представленном ниже,\r\n                    объявляют переменные, в которых будут храниться значения. В дальнейшем они повлияют на\r\n                    принятие решений.</p>\r\n                <div class=\"code-background\">\r\n                    <p>let car = \"Audi\";</p>\r\n                    <p>let power = 500;</p>\r\n                    <p>if (power < 400) {</p>\r\n                    <p>alert(\"This page is for fast cars only!\");</p>\r\n                    <p>} else {</p>\r\n                    <p>alert(\"Welcome \" + car + \" owner!\");</p>\r\n                    <p>}</p>\r\n                </div>\r\n                <p>В переменных могут храниться числа, строки, логические значения и другие данные — познакомимся\r\n                    с ними позже. Вне зависимости от типа данных все переменные создаются по одному алгоритму</p>\r\n                <p>Переменную можно объявить тремя способами, начинают с ключевого слова var, let, const. Затем пишут имя переменной. При\r\n                    необходимости можно указать ее начальное значение через знак равенства, но это необязательно, так\r\n                    как его можно присвоить позднее. Переменную можно объявить и без ключевого слова var, let, const, но в таком\r\n                    случае она сразу становится глобальной. О минусах такого решения поговорим чуть позже.\r\n                    Если в программе переменная не будет меняться, то создаем ее как const, иначе let.\r\n                    Ключевое слово var устаревшее название.\r\n                </p>\r\n                <p>const power = 500;</p>\r\n                <p>const speed;</p>\r\n                <p>Имя переменной должно начинаться с буквы, подчеркивания или знака $. Потом может следовать\r\n                    любое количество букв, цифр, подчеркиваний и знаков $. В JavaScript есть набор ключевых слов,\r\n                    использовать которые в качестве имен переменных не следует.  Вот их полный список:</p>\r\n                <p>break; case; catch; class; const; continue; const; debugger; default; delete; do; else; enum; export; extends; false;\r\n                    finally; for; function; if; implements; import; in; instanceof; interface; let; new; package;\r\n                    private; protected; public; return; static; super; switch; this; throw; true; try; typeof; var; void; while; with; yield.</p>\r\n                <p>В JavaScript регистр символов имеет значение практически везде. Поэтому будьте внимательны,\r\n                    давая имена переменным</p>\r\n                <p>Когда пишете код и даете переменным имена вроде _qwe, $ или bar, помните, что ваш код, возможно,\r\n                    будет читать еще кто-то. И даже если эти наименования понятны и осмыслены лично для вас, коллега\r\n                    их не поймет. А имена currentSpeed, isValid сразу показывают, что за значение хранится в них.</p>\r\n                <p>Предположим, что вы пишете код и надо подобрать имя для переменной, в которой хранится массив с\r\n                    четными строками текста красного цвета. В данном случае удобно использовать стиль\r\n                    lowerCamelCase — начинайте с прописной буквы каждое слово, кроме первого: evenRedStringsText.</p>\r\n                <p>Чтобы выполнять действия, в JavaScript применяются выражения. Они вычисляются, после чего\r\n                    становится доступен их результат в виде значения:\r\n                </p>\r\n                <p>let distance = time * speed;</p>\r\n                <p>let fullname = \"Mr \" + \"Rick \" + \"Sanches\";</p>\r\n                <p>power < 400; // логическое выражение</p>\r\n                <p>Здесь используется комментарий. Он может находиться в любом месте программы. Комментарии не\r\n                    влияют на выполнение кода — интерпретатор игнорирует их. Они используются, чтобы оставить\r\n                    важную информацию об участке кода или временно деактивировать его, не удаляя</p>\r\n                <p>Однострочные комментарии начинаются с двойного слэша //.</p>\r\n                <p>Многострочные — со слэша и звездочки /* и заканчиваются звездочкой и слэшем */.</p>\r\n                <h3 class=\"operating-principle-title\"><strong>Типы данных</strong></h3>\r\n                <p>Типы данных в JavaScript делятся на две группы: простые типы и объекты. Простые типы — это числа,\r\n                    текстовые строки и логические, или булевы, значения. Специальные значения null и undefined — это\r\n                    простые значения, но они не являются ни числами, ни строками, ни логическими значениями. Каждое\r\n                    из них определяет только одно значение собственного специального типа.</p>\r\n                <p>Значение, которое не является числом, строкой, логическим значением или специальным значением\r\n                    null или undefined — это объект, то есть коллекция свойств, каждое из которых имеет имя и значение.</p>\r\n                <h4 class=\"\"><i>Тип number (число)</i></h4>\r\n                <div class=\"code-background\">\r\n                    <p>let n = 123;</p>\r\n                    <p>n = 12.345;</p>\r\n                </div>\r\n                <p>Нужно учитывать, что тип number (число) используется как для целых, так и для дробных чисел. У\r\n                    него есть специальные числовые значения Infinity (бесконечность) и NaN (ошибка вычислений, not a\r\n                    number).</p>\r\n                <p>Infinity получается при делении на ноль:</p>\r\n                <div class=\"code-background\">\r\n                    <p>alert( 1 / 0 ); // Infinity</p>\r\n                </div>\r\n                <p>Ошибка вычислений NaN будет результатом некорректной математической операции:</p>\r\n                <div class=\"code-background\">\r\n                    <p>alert(\"не число\" * 2 ); // NaN, ошибка</p>\r\n                </div>\r\n                <h4><i>Тип string (строка)</i></h4>\r\n                <div class=\"code-background\">\r\n                    <p>let str = \"Мама мыла раму\";</p>\r\n                    <p>str = \"Одинарные кавычки тоже подойдут\";</p>\r\n                </div>\r\n                <p>В JavaScript одинарные и двойные кавычки равноправны. Выберите для себя один тип и будьте последовательны.</p>\r\n                <h4><i>Булевый (логический) тип boolean</i></h4>\r\n                <p>У данного типа есть два значения: true (истина) и false (ложь).</p>\r\n                <div class=\"code-background\">\r\n                    <p>let checked = true; // поле формы помечено галочкой</p>\r\n                    <p>checked = false; // поле формы без галочки</p>\r\n                </div>\r\n                <h4><i>Специальное значение null</i></h4>\r\n                <p>null не относится к вышеперечисленным типам. Он указывает на несуществующий объект — это\r\n                    просто специальное значение для понятия «ничто».</p>\r\n                <div class=\"code-background\">\r\n                    <p>let age = null;</p>\r\n                </div>\r\n                <h4><i>Специальное значение undefined</i></h4>\r\n                <p>Этот особый тип фигурирует, когда переменная объявлена, но значение ей еще не успели присвоить.</p>\r\n                <div class=\"code-background\">\r\n                    <p>let x;</p>\r\n                    <p>alert( x ); // выведет undefined</p>\r\n                </div>\r\n                <h4><i>Тип object (объекты)</i></h4>\r\n                <p>Перечисленные выше типы называют примитивными. Тип «объекты» применяется для хранения\r\n                    коллекций данных и объявления сложных сущностей. Подробно объекты изучаются в продвинутом\r\n                    курсе JavaScript.</p>\r\n                <p>В любом месте кода можно узнать, какой тип имеет та или иная переменная. Для этого применяется\r\n                    оператор typeof. Он возвращает тип переданного аргумента в виде строкового значения.</p>\r\n                <div class=\"code-background\">\r\n                    <p>typeof undefined // undefined</p>\r\n                    <p>typeof 0 // number</p>\r\n                    <p>typeof true // boolean</p>\r\n                    <p>typeof \"foo\" // string</p>\r\n                    <p>typeof {} // object</p>\r\n                    <p>typeof null // object</p>\r\n                    <p>typeof function(){} // function</p>\r\n                </div>\r\n                <p>Обратите внимание на поведение последних двух строк:</p>\r\n                <p>1. Результат typeof null == \"object\" — это официально признанная ошибка в языке, которая\r\n                    сохраняется для совместимости. На самом деле null — это не объект, а отдельный тип\r\n                    данных.</p>\r\n                <p>2. Функции будем обсуждать позже, но сейчас отметим, что они не являются отдельным базовым\r\n                    типом в JavaScript, а представляют подвид объектов. При этом typeof выделяет функции,\r\n                    возвращая для них function. Это удобно, так как позволяет легко определить функцию.</p>\r\n                <h3 class=\"operating-principle-title\"><strong>Стандарт языка</strong></h3>\r\n                <p>Довольно долго язык JavaScript развивался, сохраняя обратную совместимость. Новые возможности\r\n                    добавлялись, а старые не менялись, чтобы не сломать существующие HTML/JS-страницы. Это\r\n                    привело к тому, что любая ошибка в дизайне языка фиксировалась в нем навсегда.</p>\r\n                <p>Так продолжалось до появления стандарта ECMAScript 5 (ES5), который добавил новые\r\n                    возможности, а также привнес в язык множество исправлений. И старый код перестал работать.</p>\r\n                <p>Чтобы нивелировать эту проблему, разработчики решили, что по умолчанию опасные изменения будут\r\n                    выключены, а интерпретатор языка будет работать по-прежнему. Чтобы перевести код в режим\r\n                    полного соответствия современному стандарту, требуется указать специальную директиву use strict\r\n                    (не поддерживается браузерами младше IE9).</p>\r\n                <p>Сама директива — это строка use strict, которая /*!40000 ALTER TABLE `posts` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `practice`
--

LOCK TABLES `practice` WRITE;
/*!40000 ALTER TABLE `practice` DISABLE KEYS */;
INSERT INTO `practice` VALUES (1,2,'<p class=\"homework\">1. Необходимо пользователя попросить ввести температуру в градусах Цельсия, преобразовать введенное пользователем значение в соответствующую температуру в градусах по Фаренгейту и вывести в alert сообщение с текстом: \"Цельсий: {C}, Фаренгейт: {F}\"</p>\r\n<p class=\"homework\">Где вместо {C} и {F} должны быть подставлены соответствующие значения, которые были получены ранее.</p><p class=\"homework\">\r\nФормула перевода градусов Цельсия в градусы Фаренгейта: градусы Фаренгейта = (9 / 5) * градусы Цельсия + 32</p><p class=\"homework\">\r\nУточнение: пользователь всегда вводит корректное число.</p>',NULL,NULL,'images/script.png'),(2,2,'<p class=\"homework\">\r\n2. Необходимо создать переменную name, записать в эту переменную свое имя.</p><p class=\"homework\">\r\nНеобходимо также создать переменную admin и присвоить этой переменной значение\r\nиз переменной name.</p><p class=\"homework\">\r\nВывести значение переменной admin в консоль.</p>',NULL,NULL,'images/script_1.png'),(3,2,'<p class=\"homework\">\r\n3. Необходимо вывести в консоль значения выражений:</p><p class=\"homework\">\r\n10 + 10 + \"10\"</p><p class=\"homework\">\r\n10 + \"10\" + 10</p><p class=\"homework\">\r\n10 + 10 + +\"10\"</p><p class=\"homework\">\r\n10 / -\"\"</p><p class=\"homework\">\r\n10 / +\"2,5\"</p><p class=\"homework\">\r\nВ этих выражениях нет опечаток, вам их нужно скопировать и вывести в консоль.</p><br><p class=\"homework\">\r\n\r\nНад каждым выводом в консоль необходимо объяснить почему мы получаем такой\r\nрезультат.</p><br><p class=\"homework\">\r\n\r\nОбъяснения пишите в таком формате:</p><p class=\"homework\">\r\n/*</p><p class=\"homework\">\r\n1. 4 умножаем на 2 получаем 8.</p><p class=\"homework\">\r\n2. 3 минус 8 получаем -5.</p><p class=\"homework\">\r\n3. С помощью console.log выводим число -5 в консоль.</p><p class=\"homework\">\r\n*/</p><p class=\"homework\">\r\nconsole.log(3 - 4 * 2);</p>',NULL,NULL,'images/script_2.png'),(4,2,'<p class=\"homework\">\r\n4. Необходимо от пользователя получить число.</p><p class=\"homework\">\r\nНеобходимо вывести разряды числа, а именно: количество сотен, десятков и единиц.</p><p class=\"homework\">\r\n\r\nПример:</p><p class=\"homework\">\r\nПользователь ввел число 163. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 163 количество сотен: 1, десятков: 6, единиц: 3\"</p><p class=\"homework\">\r\n\r\nПример 2:</p><p class=\"homework\">\r\nПользователь ввел число 74. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 74 количество сотен: 0, десятков: 7, единиц: 4\"</p><p class=\"homework\">\r\n\r\nПример 3:</p><p class=\"homework\">\r\nПользователь ввел число 9537. Программа должна вывести:</p><p class=\"homework\">\r\n\"В числе 9537 количество сотен: 5, десятков: 3, единиц: 7\"</p><p class=\"homework\">\r\n\r\nУточнение: пользователь всегда вводит корректное положительное целое число.</p>',NULL,NULL,'images/script_3.png'),(5,4,'<p class=\"homework\">5.  Для кода вставленного в теге script необходимо дать комментарии, почему мы получаем такой результат (в свободной форме).</p><p class=\"homework\">Подсказка. Чтобы лучше разобраться возьмите этот код и запустите в отладчике в браузере со включенными точками остановки.</p><p class=\"homework\">let a = 1, b = 1, c, d;</p><p class=\"homework\">/*Ваш комментарий, почему переменная `c` хранит данное значение?*/</p><p class=\"homework\">c = ++a;</p><p class=\"homework\">console.log(c);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `d` хранит данное значение?*/</p><p class=\"homework\">d = b++;</p><p class=\"homework\">console.log(d);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `c` хранит данное значение?*/</p><p class=\"homework\">c = 2 + ++a;</p><p class=\"homework\">console.log(c);</p><p class=\"homework\">/*Ваш комментарий, почему переменная `d` хранит данное значение?*/</p><p class=\"homework\">d = 2 + b++;</p><p class=\"homework\">console.log(d);</p><p class=\"homework\">console.log(a);</p><p class=\"homework\">console.log(b);</p>','2024-08-04 19:40:40','2024-08-04 19:40:40','images/script_4.png'),(6,4,'<p class=\"homework\">6. Для кода вставленного в теге script необходимо дать комментарии, почему мы получаем такой результат (в свободной форме).</p>  <p class=\"homework\">Подсказка. Чтобы лучше разобраться возьмите этот код и запустите в отладчике в браузере со включенными точками остановки.</p>     <p class=\"homework\">let a = 2;</p>   <p class=\"homework\">let x = 1 + (a *= 2);</p>    <p class=\"homework\">/*</p>   <p class=\"homework\">Ваш комментарий, почему переменные `x` и `a` хранят данные значения?</p>    <p class=\"homework\">*/</p>   <p class=\"homework\">console.log(x);</p>   <p class=\"homework\">console.log(a);</p','2024-08-04 21:25:18','2024-08-04 21:25:18','images/script_5.png'),(7,4,'<p class=\"homework\">7. Необходимо попросить пользователя ввести два числа в переменные `a` и `b`.</p> <p class=\"homework\">Необходимо вывести в консоль один результат из следующих проверок:</p> <p class=\"homework\">1. Если оба числа в переменных `a` и `b` положительные, вывести разность чисел `a` и `b`, а именно, вычесть из переменной `a` значение переменной `b`.</p> <p class=\"homework\">2. Если оба числа в переменных `a` и `b` отрицательные, вывести произведение чисел `a` и `b`.</p> <p class=\"homework\">3. Если числа в переменных `a` и `b` разных знаков, вывести сумму чисел `a` и `b`.</p> <p class=\"homework\">В остальных случаях программа не должна ничего выводить.</p>','2024-08-04 21:57:21','2024-08-04 21:57:21','images/script_6.png'),(8,4,'<p class=\"homework\">8. Необходимо реализовать четыре функции, каждая функция должна принимать по два числа и выполнять одну из операций (каждая функция выполняет одну из них):</p> <p class=\"homework\">1. Сложение</p> <p class=\"homework\">2. Разность</p> <p class=\"homework\">3. Умножение</p> <p class=\"homework\">4. Деление</p>  <p class=\"homework\">Необходимо сделать так, чтобы функция вернула число, например выражение `console.log(sum(2, 6));` должно вывести число 8 в консоль (sum - функция сложения в данном примере, ваши названия функций могут отличаться).</p>  <p class=\"homework\">Округлять значения, которые возвращают функции не нужно, однако, обратите внимание на разность, функция должна вычесть из большего числа меньшее, либо вернуть 0, если числа равны.</p>  <p class=\"homework\">Функциям всегда передаются корректные числа, проверки на NaN, Infinity делать не нужно.</p>  <p class=\"homework\">Необходимо для всех функций прописать комментарии jsdoc https://jsdoc.app/.</p>','2024-08-05 04:06:12','2024-08-05 04:06:12','images/script_7.png'),(9,4,'<p class=\"homework\">9. Необходимо скопировать и вставить в данный скрипт все функции из 4 задания.</p> <p class=\"homework\">Необходимо реализовать функцию:</p> <p class=\"homework\">mathOperation(arg1, arg2, operation);</p> <p class=\"homework\">Параметры:</p> <p class=\"homework\">arg1 - первое число.</p> <p class=\"homework\">arg2 - второе число.</p> <p class=\"homework\">operation - строка, которая содержит один символ из: \"+\", \"-\", \"*\", \"/\".</p> <p class=\"homework\">Функция mathOperation должна вернуть результат операции, который был передан в</p> <p class=\"homework\">параметр operation для двух первых аргументов (arg1 и arg2).</p> <p class=\"homework\">Функция mathOperation должна использовать для вычисления функции из 4 задания.</p>  <p class=\"homework\">Примеры вызова функции:</p> <p class=\"homework\">console.log(mathOperation(5, 3, \"+\")); // 8</p> <p class=\"homework\">console.log(mathOperation(5, 3, \":)\")); // NaN</p>  <p class=\"homework\">Функции mathOperation всегда передаются корректные числа, проверки на NaN, Infinity делать не нужно, однако, в случае если был передан некорректный аргумент в параметр operation, необходимо вернуть NaN.</p>  <p class=\"homework\">Необходимо для всех функций прописать комментарии jsdoc https://jsdoc.app/.</p>','2024-08-05 04:20:54','2024-08-05 04:20:54','images/script_8.png'),(10,4,'<p class=\"homework\">10. Необходимо реализовать функцию, которая будет принимать первым аргументом целое положительное число, в следующих трех аргументах функция принимает слова в разных склонениях.</p> <p class=\"homework\">Функция должна возвращать одно из трех переданных в параметры слов подходящее под число, которое передано первым аргументом.</p>  <p class=\"homework\">Пример:</p> <p class=\"homework\">console.log(declinationOfNumber(1, \"яблоко\", \"яблока\", \"яблок\")); // \"яблоко\"</p> <p class=\"homework\">console.log(declinationOfNumber(2, \"мяч\", \"мяча\", \"мячей\")); // \"мяча\"</p> <p class=\"homework\">console.log(declinationOfNumber(5, \"стул\", \"стула\", \"стульев\")); // \"стульев\"</p>  <p class=\"homework\">Функция должна работать с любым словом и любым целым положительным числом. Все аргументы, которые будут передаваться функции будут верны.</p>    <p class=\"homework\">function declinationOfNumber(count, one, two, five) {</p>    <p class=\"homework\">}</p>    <p class=\"homework\">// Число яблок, можно пробовать поставить свое целое, положительное число.   const applesNumber = 5;</p>   <p class=\"homework\">// Получаем от функции одно из слов \"яблоко\", \"яблока\" или \"яблок\".</p>   <p class=\"homework\">const word = declinationOfNumber(applesNumber, \"яблоко\", \"яблока\", \"яблок\");</p>   <p class=\"homework\">// Выводим корректную строку, например:</p>   <p class=\"homework\">// \"У меня есть 1 яблоко.\"</p>   <p class=\"homework\">// \"У меня есть 2 яблока.\"</p>   <p class=\"homework\">// \"У меня есть 5 яблок.\"</p>   <p class=\"homework\">// При любом целом, положительном числе в applesNumber, строка, которая    выводится в console.log, должна иметь правильное склонение слова \"яблоко\".</p>   <p class=\"homework\">console.log(`У меня есть ${applesNumber} ${word}.`);</p>','2024-08-05 05:26:57','2024-09-06 20:29:58',NULL),(11,8,'<p>1. Воспользуйтесь материалами урока и установите интерпретатор PHP версии 8.2 на ваш компьютер.</p>','2024-09-09 14:29:29','2024-09-09 14:40:28',NULL),(12,8,'<p>2. Реализуйте скрипт для запуска из командной строки. При запуске скрипт должен спросить у пользователя его имя, а после получения ответа задать вопрос о возрасте. После получения всех необходимых данных необходимо вывести строчный результат вида «Вас зовут ИМЯ, вам ВОЗРАСТ лет».</p>','2024-09-09 14:51:22','2024-09-09 14:51:22','images/script_php_1.png'),(13,8,'<p>3. Доработайте скрипт, реализованный во втором задании, следующим образом: Замените вопрос о возрасте на цепочку опроса о важных делах, запланированных на день (три задачи). Программа спрашивает: «Какая задача стоит перед вами сегодня?». Пользователь отвечает текстом и нажимает Enter. Следующий вопрос программы: «Сколько примерно времени эта задача займет?». Пользователь отвечает числом и нажимает Enter. Обратите внимание, что количество задач строго ограничено в коде и равно трём. Вероятность ввода некорректных значений в данном задании игнорируем. После трёх вопросов выводится итог следующего вида: Иван, сегодня у вас запланировано 3 приоритетных задачи на день: - Погулять с кошкой (1ч) - Попить кофе (2ч) - Полежать на диване (4ч) Примерное время выполнения плана = 7ч</p>','2024-09-09 14:54:15','2024-09-09 14:54:15','images/script_php_2.png'),(14,8,'<p>4*. Сгенерируйте шаблон страницы 3 способами, выведите title h1 и год через переменные.</p><p>Ссылка на решение задачи: https://disk.yandex.ru/d/Srx0bu47xha2cA</p>','2024-09-09 14:59:58','2024-09-09 14:59:58','images/link.png');
/*!40000 ALTER TABLE `practice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@bk.ru',NULL,'$2y$12$U3diy9dy7BjXJVpNzcbHmegypw3f/QXGwbTdVwkVsT94BIzu1cXfy',NULL,'2024-06-16 11:25:21','2024-06-16 11:25:21',NULL,1,1),(2,'Anna','anna@bk.ru',NULL,'$2y$12$UIHKxfc13B/aAgDNpelYHOMo1FkbaCYMK1Tg2.D.kPG7MHxThl1/u','LzM6RXezYzmKUNYpJSLundGEyJm3tU2bVbJVHganiyHZJ62fN9QUtUHOAdTl','2024-06-16 11:29:29','2024-08-17 14:32:32',NULL,1,0),(3,'Pavel','pavel@bk.ru',NULL,'$2y$12$6ln7j81cKBX1q00MBU4VB.URrVHy4v88H3141lud4Jr21kA/2UwUi',NULL,'2024-06-16 11:33:37','2024-06-16 11:33:37',NULL,1,0),(4,'Luba','luba@bk.ru',NULL,'$2y$12$qWEsBMOKC/Mluh0W0gQvKODA51PEwtbXM3hraGXO3xf8m6vHpog8O',NULL,'2024-08-01 16:53:11','2024-08-01 16:53:11',NULL,1,0);
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-09 21:30:24
