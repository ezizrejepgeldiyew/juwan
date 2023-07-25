-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: juwan
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

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
-- Table structure for table `authors`
--

DROP TABLE IF EXISTS `authors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `authors` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `authors`
--

LOCK TABLES `authors` WRITE;
/*!40000 ALTER TABLE `authors` DISABLE KEYS */;
INSERT INTO `authors` VALUES (2,'Vladislav','2023-06-22 17:20:39','2023-06-22 17:20:39');
/*!40000 ALTER TABLE `authors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int NOT NULL,
  `author_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ganre_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `audio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (15,'Артур Кларк- Часовой','images/books/2023-07-06/7b867fc2b565367eca096e8d4032e07c.jpg',1,'2','1','audio//2023-07-06/1286b99f399fa26060c2f0ec6b22e8d2.mp3','file/books/2023-07-06/4209d8a37b6d9f040b889cb337377fb3.pdf',NULL,'2023-07-06 16:55:50','2023-07-06 16:55:50'),(16,'Цирул Артур Прекрасные вещи','images/books/2023-07-07/eebb52c351f070c405e63306e6cc5f95.jpg',1,'2','1','audio//2023-07-07/4257e0ea0bc0088a0976aebe75378e9e.mp3','file/books/2023-07-07/1a6776831b2f72e315363383d3b5cf41.pdf',NULL,'2023-07-07 15:59:57','2023-07-07 15:59:57'),(17,'Родари Джанни Робот, которому захотелось спать','images/books/2023-07-07/50aab8a24bf9c0d4a9df5da62995afb1.jpg',1,'2','1','audio//2023-07-07/65572938a989842225cabcea0a8fded3.mp3','file/books/2023-07-07/11a5a2675c1d69780ab0352809a0e53a.pdf',NULL,'2023-07-07 17:03:31','2023-07-07 17:03:31'),(19,'Зеленый проклятый остров','images/books/2023-07-10/c281423bc312f2765cb36ad7cebfafcf.jpg',1,'2','1','audio//2023-07-10/569dc75e8b8822a457ec854d996ea147.mp3','file/books/2023-07-10/ce258b2bdd4baae4b40497a6602d5132.pdf',NULL,'2023-07-10 17:29:20','2023-07-10 17:29:20'),(20,'Осенний заговор','images/books/2023-07-10/4f8043638117540538c42384cc738d03.jpg',1,'2','1','audio//2023-07-10/1ab3ca2dd1a526042b169d10d777a871.mp3','file/books/2023-07-10/3fdd4778bc35ddf2956a167b6e633543.pdf',NULL,'2023-07-10 17:43:37','2023-07-10 17:43:37'),(22,'Академия и Империя','images/books/2023-07-11/80abd683e9f85d00c6a0aecc2ec4d7f8.jpg',1,'2','1','audio//2023-07-11/4475ce53c3023d2fa730c5154530e9a1.mp3','file/books/2023-07-11/27005402257dc23048acd251d1f56313.pdf',NULL,'2023-07-11 10:57:32','2023-07-11 10:57:32'),(23,'Приключение в воздушном океане','images/books/2023-07-12/54787e595f85b9f22d64fa666eedf773.jpg',1,'2','1','audio//2023-07-12/23d261a0217d8f4bac8436a05f10b95f.mp3','file/books/2023-07-12/72b164b7738f663589bdc491d3fa9f70.pdf',NULL,'2023-07-12 11:19:14','2023-07-12 11:19:14'),(24,'Сокровище в лесу','images/books/2023-07-12/e6783c6eed2824203b4efe2916aa5586.jpg',1,'2','1','audio//2023-07-12/c6f54ad384a8bb11d905bf84ac3f4b47.mp3','file/books/2023-07-12/5486193586ba0ed31332b4da20db50c3.pdf',NULL,'2023-07-12 11:22:07','2023-07-12 11:22:07'),(25,'Остров Эпиорниса','images/books/2023-07-12/62c07c5a5c2450719557bf6576875d82.jpg',1,'2','1','audio//2023-07-12/0b00b3e8fe5d38c9adc3b836b363e7bb.mp3','file/books/2023-07-12/34e61149bc4fe07206b4e9c749b10b9d.pdf',NULL,'2023-07-12 14:52:14','2023-07-12 14:52:14'),(26,'Маскарад','images/books/2023-07-12/959b0e1c579b37a7d78d018eebd2be72.jpg',1,'2','3','audio//2023-07-12/4227955825ba652e5528855c0123a532.mp3','file/books/2023-07-12/087881fada5a400aafcc670b1a41e1f8.pdf',NULL,'2023-07-12 15:00:14','2023-07-12 15:00:14'),(27,'Пересадочная Станция','images/books/2023-07-12/9d0628d4fc248648966e4e10bd023fcd.jpg',1,'2','1','audio//2023-07-12/b56f5696e2a6ca74c1024648e7ad2772.mp3','file/books/2023-07-12/c61182341f6be91274e40947e03d0c35.pdf',NULL,'2023-07-12 15:05:00','2023-07-12 15:05:00');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Test1','2023-06-09 20:38:00','2023-06-11 19:09:45');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
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
-- Table structure for table `favorits`
--

DROP TABLE IF EXISTS `favorits`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `favorits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `favorit_id` int NOT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favorits`
--

LOCK TABLES `favorits` WRITE;
/*!40000 ALTER TABLE `favorits` DISABLE KEYS */;
INSERT INTO `favorits` VALUES (3,27,'App\\Models\\PostBook',58,'2023-07-21 18:10:08','2023-07-21 18:10:08'),(4,26,'App\\Models\\PostBook',18,'2023-07-21 18:31:11','2023-07-21 18:31:11'),(5,30,'App\\Models\\PostBook',18,'2023-07-21 18:32:48','2023-07-21 18:32:48'),(7,28,'App\\Models\\PostBook',18,'2023-07-22 09:42:38','2023-07-22 09:42:38'),(8,27,'App\\Models\\PostBook',57,'2023-07-22 09:53:09','2023-07-22 09:53:09'),(9,28,'App\\Models\\PostBook',57,'2023-07-22 09:53:13','2023-07-22 09:53:13'),(12,1,'App\\Models\\PostVideo',18,'2023-07-22 11:36:16','2023-07-22 11:36:16');
/*!40000 ALTER TABLE `favorits` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genres`
--

DROP TABLE IF EXISTS `genres`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genres` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genres`
--

LOCK TABLES `genres` WRITE;
/*!40000 ALTER TABLE `genres` DISABLE KEYS */;
INSERT INTO `genres` VALUES (1,'Sci-Fi','images/genre/2023-06-13/2b88568e5d29568335e04fcb6b7debd2.png','2023-06-09 20:38:38','2023-06-23 17:28:24'),(2,'Soygi hakda','images/genre/2023-06-15/faafe4cb10455c67fe8a842082771699.png','2023-06-15 17:36:54','2023-06-15 17:36:54'),(3,'Howeslendirmek hakda','images/genre/2023-06-15/55dedc20364befb64ced2e62ab8bea9e.png','2023-06-15 17:37:06','2023-06-15 17:37:06'),(4,'Masgala hakda','images/genre/2023-06-15/1332118fa48d201df3246a37a020e5b0.png','2023-06-15 17:37:20','2023-06-15 17:37:20');
/*!40000 ALTER TABLE `genres` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2023_04_12_122013_create_categories_table',1),(7,'2023_04_13_143346_create_books_table',1),(8,'2023_04_15_132839_create_posts_table',1),(9,'2023_04_15_140853_create_podkasts_table',1),(10,'2023_05_01_160631_create_authors_table',1),(11,'2023_05_01_160638_create_genres_table',1),(13,'2023_05_24_161909_create_post_photos_table',1),(14,'2023_05_24_161916_create_post_videos_table',1),(15,'2023_05_24_161923_create_post_books_table',1),(16,'2023_06_02_173432_create_permission_tables',1),(18,'2023_05_10_190838_create_otps_table',2),(46,'2023_06_03_123617_create_favorits_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(3,'App\\Models\\User',3),(1,'App\\Models\\User',4),(2,'App\\Models\\User',5),(2,'App\\Models\\User',6),(2,'App\\Models\\User',7),(2,'App\\Models\\User',8),(2,'App\\Models\\User',9),(2,'App\\Models\\User',10),(2,'App\\Models\\User',12),(2,'App\\Models\\User',14),(2,'App\\Models\\User',15),(2,'App\\Models\\User',16),(2,'App\\Models\\User',17),(2,'App\\Models\\User',18),(2,'App\\Models\\User',19),(2,'App\\Models\\User',20),(2,'App\\Models\\User',21),(2,'App\\Models\\User',22),(1,'App\\Models\\User',26),(2,'App\\Models\\User',27),(2,'App\\Models\\User',28),(2,'App\\Models\\User',29),(2,'App\\Models\\User',30),(2,'App\\Models\\User',31),(2,'App\\Models\\User',32),(2,'App\\Models\\User',33),(2,'App\\Models\\User',34),(2,'App\\Models\\User',35),(2,'App\\Models\\User',36),(2,'App\\Models\\User',37),(2,'App\\Models\\User',38),(1,'App\\Models\\User',39),(2,'App\\Models\\User',40),(2,'App\\Models\\User',41),(2,'App\\Models\\User',42),(2,'App\\Models\\User',43),(1,'App\\Models\\User',45),(1,'App\\Models\\User',46),(2,'App\\Models\\User',49),(2,'App\\Models\\User',50),(2,'App\\Models\\User',51),(2,'App\\Models\\User',52),(2,'App\\Models\\User',53),(2,'App\\Models\\User',54),(2,'App\\Models\\User',55),(2,'App\\Models\\User',57),(2,'App\\Models\\User',58);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otps`
--

DROP TABLE IF EXISTS `otps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=126 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otps`
--

LOCK TABLES `otps` WRITE;
/*!40000 ALTER TABLE `otps` DISABLE KEYS */;
INSERT INTO `otps` VALUES (1,'ezizrejepgeldiyew@gmail.com','3667','windows',0,'2023-07-04 18:55:27','2023-07-04 18:55:27'),(2,'ezizrejepgeldiyew@gmail.com','6472','windows',0,'2023-07-04 18:56:23','2023-07-04 18:56:23'),(3,'ezizrejepgeldiyew@gmail.com','2960','windows',0,'2023-07-04 18:57:55','2023-07-04 18:57:55'),(4,'ezizrejepgeldiyew@gmail.com','7516','windows',0,'2023-07-04 18:57:57','2023-07-04 18:57:57'),(5,'ezizrejepgeldiyew@gmail.com','5546','windows',0,'2023-07-04 18:58:13','2023-07-04 18:58:13'),(6,'ezizrejepgeldiyew@gmail.com','7291','windows',0,'2023-07-04 18:58:51','2023-07-04 18:58:51'),(7,'ezizrejepgeldiyew@gmail.com','9816','windows',0,'2023-07-04 18:58:53','2023-07-04 18:58:53'),(8,'ezizrejepgeldiyew@gmail.com','1090','windows',1,'2023-07-04 18:59:00','2023-07-04 18:59:20'),(9,'ezizrejepgeldiyew@gmail.com','9980','windows',0,'2023-07-04 19:02:34','2023-07-04 19:02:34'),(10,'ezizrejepgeldiyew@gmail.com','4757','windows',1,'2023-07-04 19:13:04','2023-07-04 19:13:27'),(11,'ezizrejepgeldiyew@gmail.com','7442','windows',1,'2023-07-05 15:30:05','2023-07-05 15:30:28'),(12,'ezizrejepgeldiyew@gmail.com','7645','windows',1,'2023-07-05 19:46:43','2023-07-05 19:47:22'),(13,'ezizrejepgeldiyew@gmail.com','9102','windows',1,'2023-07-05 22:47:43','2023-07-05 22:47:58'),(14,'ezizrejepgeldiyew@gmail.com','4746','windows',1,'2023-07-06 09:02:00','2023-07-06 09:02:18'),(15,'ezizrejepgeldiyew@gmail.com','5225','windows',1,'2023-07-06 09:12:19','2023-07-06 09:12:35'),(16,'admin.s@turkmenportal.com','1575','windows',1,'2023-07-06 10:37:50','2023-07-06 10:38:49'),(17,'vv1297145@gmail.com','3196','windows',1,'2023-07-06 11:11:20','2023-07-06 11:11:53'),(18,'ezizrejepgeldiyew@gmail.com','7098','windows',1,'2023-07-06 11:53:10','2023-07-06 11:53:52'),(19,'fsmebk@ya.ru','1187','windows',1,'2023-07-06 12:42:08','2023-07-06 12:42:52'),(20,'admin.s@turkmenportal.com','2858','windows',0,'2023-07-06 15:29:26','2023-07-06 15:29:26'),(21,'ezizrejepgeldiyew@gmail.com','3392','windows',1,'2023-07-06 15:29:43','2023-07-06 15:30:03'),(22,'vv1297145@gmail.com','5342','windows',0,'2023-07-07 09:00:11','2023-07-07 09:00:11'),(23,'ezizrejepgeldiyew@gmail.com','1004','windows',1,'2023-07-07 09:08:50','2023-07-07 09:09:08'),(24,'ezizrejepgeldiyew@gmail.com','1222','windows',1,'2023-07-07 09:11:36','2023-07-07 09:12:14'),(25,'vladislav.p9912@gmail.com','3325','windows',1,'2023-07-07 09:27:56','2023-07-07 09:29:18'),(26,'ezizrejepgeldiyew@gmail.com','5215','windows',1,'2023-07-07 09:29:24','2023-07-07 09:29:49'),(27,'ezizrejepgeldiyew@gmail.com','8727','windows',0,'2023-07-07 09:58:31','2023-07-07 09:58:31'),(28,'vladislav.p9912@gmail.com','6349','windows',1,'2023-07-07 10:06:43','2023-07-07 10:08:08'),(29,'vladislav.p9912@gmail.com','9744','windows',1,'2023-07-07 15:51:52','2023-07-07 15:52:19'),(30,'vladislav.p9912@gmail.com','6669','windows',1,'2023-07-08 09:03:40','2023-07-08 09:04:12'),(31,'vladislav.p9912@gmail.com','1016','windows',0,'2023-07-08 13:02:50','2023-07-08 13:02:50'),(32,'vladislav.p9912@gmail.com','9519','windows',1,'2023-07-10 08:19:46','2023-07-10 08:20:19'),(33,'vladislav.p9912@gmail.com','7422','windows',1,'2023-07-10 15:16:21','2023-07-10 15:16:52'),(34,'admin.s@turkmenportal.com','9675','windows',1,'2023-07-10 15:27:35','2023-07-10 15:28:22'),(35,'vladislav.p9912@gmail.com','5427','windows',0,'2023-07-11 09:21:11','2023-07-11 09:21:11'),(36,'vladislav.p9912@gmail.com','9228','windows',1,'2023-07-11 09:23:53','2023-07-11 09:24:45'),(37,'ezizrejepgeldiyew@gmail.com','4340','windows',1,'2023-07-11 10:20:13','2023-07-11 10:20:39'),(38,'vladislav.p9912@gmail.com','3897','windows',0,'2023-07-11 15:18:32','2023-07-11 15:18:32'),(39,'vladislav.p9912@gmail.com','6647','windows',0,'2023-07-11 15:19:44','2023-07-11 15:19:44'),(40,'vladislav.p9912@gmail.com','1727','windows',0,'2023-07-11 15:21:09','2023-07-11 15:21:09'),(41,'vladislav.p9912@gmail.com','7678','windows',0,'2023-07-11 15:22:08','2023-07-11 15:22:08'),(42,'vladislav.p9912@gmail.com','5559','windows',0,'2023-07-11 15:23:53','2023-07-11 15:23:53'),(43,'vladislav.p9912@gmail.com','1437','windows',0,'2023-07-11 15:25:24','2023-07-11 15:25:24'),(44,'vladislav.p9912@gmail.com','6154','windows',0,'2023-07-11 15:26:49','2023-07-11 15:26:49'),(45,'admin.s@turkmenportal.com','3729','windows',0,'2023-07-11 15:27:43','2023-07-11 15:27:43'),(46,'admin.s@turkmenportal.com','5895','windows',0,'2023-07-11 15:30:11','2023-07-11 15:30:11'),(47,'ezizrejepgeldiyew@gmail.com','6190','windows',0,'2023-07-11 15:31:47','2023-07-11 15:31:47'),(48,'ezizrejepgeldiyew@gmail.com','3097','windows',0,'2023-07-11 15:33:31','2023-07-11 15:33:31'),(49,'ezizrejepgeldiyew@gmail.com','1171','windows',0,'2023-07-11 15:35:12','2023-07-11 15:35:12'),(50,'admin.s@turkmenportal.com','4043','windows',0,'2023-07-11 15:44:51','2023-07-11 15:44:51'),(51,'admin.s@turkmenportal.com','7427','windows',1,'2023-07-11 16:59:29','2023-07-11 17:00:41'),(52,'admin.s@turkmenportal.com','8578','windows',0,'2023-07-11 17:39:04','2023-07-11 17:39:04'),(53,'fddsd@gmail.com','2940','windows',0,'2023-07-12 10:09:13','2023-07-12 10:09:13'),(54,'sdfs@gmail.com','7717','windows',0,'2023-07-12 10:27:38','2023-07-12 10:27:38'),(55,'ezz@gmail.com','4579','windows',0,'2023-07-12 10:41:56','2023-07-12 10:41:56'),(56,'ezz@gmail.com','5658','windows',0,'2023-07-12 10:46:01','2023-07-12 10:46:01'),(57,'ezzz@gmail.com','3121','windows',0,'2023-07-12 10:49:55','2023-07-12 10:49:55'),(58,'ezzz@gmail.com','7654','windows',0,'2023-07-12 10:52:35','2023-07-12 10:52:35'),(59,'ezizrejepgeldiyew@gmail.com','1482','windows',1,'2023-07-12 10:57:37','2023-07-12 10:58:07'),(60,'ezizrejepgeldiyew@gmail.com','7853','windows',1,'2023-07-12 10:58:55','2023-07-12 10:59:15'),(61,'ezizrejepgeldiyew@gmail.com','6669','windows',0,'2023-07-12 11:01:20','2023-07-12 11:01:20'),(62,'ezizrejepgeldiyew@gmail.com','5253','windows',1,'2023-07-12 11:01:22','2023-07-12 11:01:43'),(63,'ezizrejepgeldiyew@gmail.com','5308','windows',1,'2023-07-12 11:02:01','2023-07-12 11:02:16'),(64,'vv1297145@gmail.com','4714','windows',0,'2023-07-12 11:12:10','2023-07-12 11:12:10'),(65,'vv1297145@gmail.com','3156','windows',0,'2023-07-12 11:14:18','2023-07-12 11:14:18'),(66,'vv1297145@gmail.com','4120','windows',0,'2023-07-12 11:14:35','2023-07-12 11:14:35'),(67,'vv1297145@gmail.com','9030','windows',0,'2023-07-12 11:14:56','2023-07-12 11:14:56'),(68,'vv1297145@gmail.com','4231','windows',1,'2023-07-12 11:15:29','2023-07-12 11:15:42'),(69,'vladislav.p9912@gmail.com','6147','windows',1,'2023-07-12 11:16:26','2023-07-12 11:16:44'),(70,'vladislav.p9912@gmail.com','9590','windows',1,'2023-07-12 11:26:09','2023-07-12 11:26:24'),(71,'vlaikp99.99@gmail.com','4636','windows',0,'2023-07-12 11:28:10','2023-07-12 11:28:10'),(72,'vladik99.99@gmail.com','8984','windows',0,'2023-07-12 11:31:42','2023-07-12 11:31:42'),(73,'admin.s@turkmenportal.com','9781','windows',0,'2023-07-12 15:12:35','2023-07-12 15:12:35'),(74,'admin.s@turkmenportal.com','4117','windows',0,'2023-07-12 15:13:11','2023-07-12 15:13:11'),(75,'admin.s@turkmenportal.com','4389','windows',0,'2023-07-12 15:15:34','2023-07-12 15:15:34'),(76,'admin.s@turkmenportal.com','7424','windows',0,'2023-07-12 15:17:28','2023-07-12 15:17:28'),(77,'admin.s@turkmenportal.com','7229','windows',0,'2023-07-12 16:28:18','2023-07-12 16:28:18'),(78,'62043817','6977','phone',0,'2023-07-14 12:24:10','2023-07-14 12:24:10'),(79,'62043817','2427','phone',0,'2023-07-14 12:28:23','2023-07-14 12:28:23'),(80,'62043817','4992','phone',0,'2023-07-14 12:29:36','2023-07-14 12:29:36'),(81,'62043817','6071','phone',0,'2023-07-14 12:31:50','2023-07-14 12:31:50'),(82,'62043817','6931','phone',0,'2023-07-14 15:50:33','2023-07-14 15:50:33'),(83,'65656585','2745','phone',0,'2023-07-14 20:04:15','2023-07-14 20:04:15'),(84,'64626369','9104','phone',0,'2023-07-14 20:55:26','2023-07-14 20:55:26'),(85,'64088471','9196','phone',0,'2023-07-15 06:13:20','2023-07-15 06:13:20'),(86,'61405590','1385','phone',0,'2023-07-15 07:28:55','2023-07-15 07:28:55'),(87,'61405590','8378','phone',0,'2023-07-15 07:33:16','2023-07-15 07:33:16'),(88,'61405590','9000','phone',0,'2023-07-15 07:34:18','2023-07-15 07:34:18'),(89,'61626406','6158','phone',0,'2023-07-15 07:38:49','2023-07-15 07:38:49'),(90,'61405570','6146','phone',0,'2023-07-15 07:54:03','2023-07-15 07:54:03'),(91,'65805651','7602','phone',0,'2023-07-15 09:33:25','2023-07-15 09:33:25'),(92,'62043817','2426','phone',0,'2023-07-15 09:53:26','2023-07-15 09:53:26'),(93,'62043817','7517','phone',0,'2023-07-15 09:54:24','2023-07-15 09:54:24'),(94,'65805651','4571','phone',0,'2023-07-15 09:54:48','2023-07-15 09:54:48'),(95,'65805651','2346','phone',0,'2023-07-15 09:55:52','2023-07-15 09:55:52'),(96,'62657011','4205','phone',0,'2023-07-15 09:57:35','2023-07-15 09:57:35'),(97,'62170272','6437','phone',0,'2023-07-19 16:58:38','2023-07-19 16:58:38'),(98,'62170272','5286','phone',0,'2023-07-19 17:00:50','2023-07-19 17:00:50'),(99,'62170272','1196','phone',0,'2023-07-19 20:39:17','2023-07-19 20:39:17'),(100,'62170272','1653','phone',0,'2023-07-19 22:27:33','2023-07-19 22:27:33'),(101,'62170272','7706','phone',0,'2023-07-19 22:32:31','2023-07-19 22:32:31'),(102,'62170272','5545','phone',0,'2023-07-20 07:23:40','2023-07-20 07:23:40'),(103,'62170272','5164','phone',0,'2023-07-20 07:31:54','2023-07-20 07:31:54'),(104,'62170272','8418','phone',0,'2023-07-20 08:53:02','2023-07-20 08:53:02'),(105,'62043817','1862','phone',0,'2023-07-20 10:24:07','2023-07-20 10:24:07'),(106,'ezizrejepgeldiyew@gmail.com','4338','email',0,'2023-07-20 10:26:47','2023-07-20 10:26:47'),(107,'ezizrejepgeldiyew@gmail.com','7495','email',0,'2023-07-20 10:41:15','2023-07-20 10:41:15'),(108,'62043817','5555','phone',0,'2023-07-21 15:19:16','2023-07-21 15:19:16'),(109,'62170272','7509','phone',0,'2023-07-21 16:32:05','2023-07-21 16:32:05'),(110,'62170272','3460','phone',0,'2023-07-21 16:42:23','2023-07-21 16:42:23'),(111,'62170272','2070','phone',0,'2023-07-21 16:55:47','2023-07-21 16:55:47'),(112,'62170272','2563','phone',0,'2023-07-21 16:57:08','2023-07-21 16:57:08'),(113,'62170272','2011','phone',0,'2023-07-21 17:22:37','2023-07-21 17:22:37'),(114,'62043817','4910','phone',0,'2023-07-21 18:09:33','2023-07-21 18:09:33'),(115,'62043817','6486','phone',0,'2023-07-21 18:13:32','2023-07-21 18:13:32'),(116,'62657011','5950','phone',0,'2023-07-21 18:29:48','2023-07-21 18:29:48'),(117,'65805651','7106','phone',0,'2023-07-22 09:45:53','2023-07-22 09:45:53'),(118,'65805651','8648','phone',0,'2023-07-22 10:03:09','2023-07-22 10:03:09'),(119,'65031546','5069','phone',0,'2023-07-22 12:20:43','2023-07-22 12:20:43'),(120,'65031546','7080','phone',0,'2023-07-22 12:21:25','2023-07-22 12:21:25'),(121,'62657011','5296','phone',0,'2023-07-22 12:30:51','2023-07-22 12:30:51'),(122,'62170272','3967','phone',0,'2023-07-22 13:10:59','2023-07-22 13:10:59'),(123,'62170272','7640','phone',0,'2023-07-22 16:18:35','2023-07-22 16:18:35'),(124,'62657011','9700','phone',0,'2023-07-22 17:17:34','2023-07-22 17:17:34'),(125,'62043817','6827','phone',0,'2023-07-23 09:48:18','2023-07-23 09:48:18');
/*!40000 ALTER TABLE `otps` ENABLE KEYS */;
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
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('ezizrejepgeldiyew@gmail.com','ZSxl4pC9VLbYDM2RF3TiuJwk6N6ebj11KEOPOeU2Sn4GIyVr2eNVtiO92UDuZVVd','2023-07-18 16:31:52');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (1,'App\\Models\\User',2,'JuwanToken','7f74522f951f6c428af83eebb798e084afe086afa79cc4cf7bb5adcc1633dffc','[\"*\"]',NULL,NULL,'2023-06-11 18:19:55','2023-06-11 18:19:55'),(2,'App\\Models\\User',2,'api-token','c5f31fd98e79dc75114f6c18298f5e4b7ae18d69c51dbebafb5e080ade6e4150','[\"*\"]',NULL,NULL,'2023-06-11 18:19:56','2023-06-11 18:19:56'),(3,'App\\Models\\User',2,'api-token','1bd97acab701911c7248b30e81dc9523bed37d92dfdad52d5eb5bef817748dd8','[\"*\"]',NULL,NULL,'2023-06-11 18:19:56','2023-06-11 18:19:56'),(4,'App\\Models\\User',5,'JuwanToken','01f591b0a8997875156d3677ee09d35d5d4deab4fec4d3f9721106c4279a71b9','[\"*\"]',NULL,NULL,'2023-06-12 01:26:30','2023-06-12 01:26:30'),(5,'App\\Models\\User',5,'api-token','249663b1535b753e2cfe973066f614673515562700d7eeb3d21e23ffc0377cfc','[\"*\"]',NULL,NULL,'2023-06-12 01:27:19','2023-06-12 01:27:19'),(6,'App\\Models\\User',6,'JuwanToken','414caff083fd2325a2af06769e3e52280f62aaea8c4a8305eaf731b570987670','[\"*\"]',NULL,NULL,'2023-06-12 02:01:57','2023-06-12 02:01:57'),(7,'App\\Models\\User',6,'api-token','6b3a1b50ad2c4631b9655100ba7cdea51f2bd5061d948e2ea92318c844eb6e1d','[\"*\"]',NULL,NULL,'2023-06-12 02:02:08','2023-06-12 02:02:08'),(9,'App\\Models\\User',8,'JuwanToken','2dac88a1b2bf560ea6235930021b835deff15f06d2c6966ee0d15bb6576450d0','[\"*\"]',NULL,NULL,'2023-06-12 10:14:56','2023-06-12 10:14:56'),(10,'App\\Models\\User',9,'JuwanToken','511fc0cef32887884dc7e1a978ad85cb43ce8b8a36fcd7e0a816dba0a13d4521','[\"*\"]',NULL,NULL,'2023-06-12 10:34:24','2023-06-12 10:34:24'),(11,'App\\Models\\User',10,'JuwanToken','7323df317a0aaf032001b08d57a62b7151bf4f227df7adf58bc587ae9ff472c2','[\"*\"]',NULL,NULL,'2023-06-12 17:22:16','2023-06-12 17:22:16'),(12,'App\\Models\\User',12,'JuwanToken','f38f3677d4acf70de8ceefdb03b517afd569df9b12af8e041af4196837944807','[\"*\"]',NULL,NULL,'2023-06-12 17:25:36','2023-06-12 17:25:36'),(14,'App\\Models\\User',14,'JuwanToken','4ff28856eea3c0b88c61002ff527669913ff6a805b938bf54427f7e05c307566','[\"*\"]',NULL,NULL,'2023-06-13 15:32:13','2023-06-13 15:32:13'),(15,'App\\Models\\User',2,'api-token','b38365c809c4ddc99023eacef0bc20c9e5f656bc18e92418f32b80dbcdff7f5f','[\"*\"]',NULL,NULL,'2023-06-13 15:55:42','2023-06-13 15:55:42'),(17,'App\\Models\\User',16,'JuwanToken','2c75679fb4ba83c610d4f721a502a4955e61e57dac22087408605867062961b9','[\"*\"]',NULL,NULL,'2023-06-13 16:04:08','2023-06-13 16:04:08'),(18,'App\\Models\\User',2,'juwan-token','f53c0411c9409955a67a341ff0b16810c490b2ef3b0d41222928678bb378ab0c','[\"*\"]',NULL,NULL,'2023-06-13 16:45:49','2023-06-13 16:45:49'),(19,'App\\Models\\User',2,'juwan-token','e1222178977ff9b34ed3316b504339c55768954a03adb7f0b2b9d31271ab83db','[\"*\"]',NULL,NULL,'2023-06-13 16:46:40','2023-06-13 16:46:40'),(20,'App\\Models\\User',2,'juwan-token','4b8af038c301ad41703c28c00e086ff9d12f46f794a8a165656ca80e92b977b1','[\"*\"]',NULL,NULL,'2023-06-13 16:46:41','2023-06-13 16:46:41'),(21,'App\\Models\\User',2,'juwan-token','6e6387fbedcf655395392cfe7213288a338ccedeaf7a05d82fae18547ea2d14b','[\"*\"]',NULL,NULL,'2023-06-13 16:46:42','2023-06-13 16:46:42'),(25,'App\\Models\\User',17,'juwan-token','2fd39657dac15f42fba1a075a6f70f168aa14a6925c7b5b598a5ce4fd3ed4271','[\"*\"]',NULL,NULL,'2023-06-14 14:30:59','2023-06-14 14:30:59'),(28,'App\\Models\\User',6,'juwan-token','0a0b55fc7012df20f519b60458a38fc6503e3c690b1ad7594b19f0077190e806','[\"*\"]',NULL,NULL,'2023-06-16 10:03:37','2023-06-16 10:03:37'),(41,'App\\Models\\User',19,'juwan-token','b8f7af034c73e2ebaf489493896e0f9252a247d34510050e2bf867971e4192ca','[\"*\"]',NULL,NULL,'2023-06-19 20:31:06','2023-06-19 20:31:06'),(42,'App\\Models\\User',20,'juwan-token','8f128ed7dde0d048866aeebefbb2d933db772aa4d91b0b5ed17d4c820bb38bf3','[\"*\"]',NULL,NULL,'2023-06-19 20:35:49','2023-06-19 20:35:49'),(43,'App\\Models\\User',21,'juwan-token','fd621eeb0cd3aa367a74d4b823080b39d6c778a85fbe0c9b25abce8724a61a88','[\"*\"]',NULL,NULL,'2023-06-20 07:58:24','2023-06-20 07:58:24'),(44,'App\\Models\\User',22,'juwan-token','d6d49f4ae02ed16b070e78d6a4daa70734763e24a88e09ce54d7b15a146d7c6b','[\"*\"]',NULL,NULL,'2023-06-20 08:55:09','2023-06-20 08:55:09'),(51,'App\\Models\\User',24,'juwan-token','1d5f5a22f110256ec8c94da5ab56b9c33baddce307b7b68efac63f2f938b2f11','[\"*\"]',NULL,NULL,'2023-06-21 17:07:45','2023-06-21 17:07:45'),(53,'App\\Models\\User',27,'juwan-token','0e28f1d07a7bb714cfa8e20d16618b10f15f8607431e156444e230ddad49f98a','[\"*\"]',NULL,NULL,'2023-07-03 20:52:38','2023-07-03 20:52:38'),(54,'App\\Models\\User',28,'juwan-token','467fdbfa00d503bae26a5a721e34081216bbb04be71381a1d7d683fee03f8c72','[\"*\"]',NULL,NULL,'2023-07-03 20:55:37','2023-07-03 20:55:37'),(55,'App\\Models\\User',29,'juwan-token','e26e56cb134fb5a19b0a0a7d558f433698db9e371b43fa011523b6e024ce7dfd','[\"*\"]',NULL,NULL,'2023-07-03 20:58:41','2023-07-03 20:58:41'),(60,'App\\Models\\User',30,'juwan-token','c2cb993740521cfbc3ae73cc7582632c26715f22de46bc83ac3540b81945b71e','[\"*\"]',NULL,NULL,'2023-07-05 22:42:45','2023-07-05 22:42:45'),(61,'App\\Models\\User',31,'juwan-token','b15f5f74f7f424434e863de064b112bac5b23352a311c5892e369da504ac08a1','[\"*\"]',NULL,NULL,'2023-07-05 22:45:29','2023-07-05 22:45:29'),(62,'App\\Models\\User',32,'juwan-token','121f7ef6256b49d7c5ff21b7eafe5ef57dfc6b6e01eb25eb0247be45e61a31a5','[\"*\"]',NULL,NULL,'2023-07-06 09:59:08','2023-07-06 09:59:08'),(63,'App\\Models\\User',33,'juwan-token','e50d9f4c5b40d1fdd9ef31cfe7a698a6a11d55e8b6a3b4a699f2f5460867e956','[\"*\"]',NULL,NULL,'2023-07-06 10:00:29','2023-07-06 10:00:29'),(64,'App\\Models\\User',34,'juwan-token','7ee40a57797fbca51a0150bc220d5c0b3bf9e149a0edc2ac964333f87dc26571','[\"*\"]',NULL,NULL,'2023-07-06 10:02:53','2023-07-06 10:02:53'),(65,'App\\Models\\User',35,'juwan-token','576af61c7206a4895e12c10c3badf1c5c3e4a92daa68cad63118ea8d780889e2','[\"*\"]',NULL,NULL,'2023-07-06 10:04:38','2023-07-06 10:04:38'),(67,'App\\Models\\User',36,'juwan-token','070bb28516669d313b043137c64d7e10d12b31de6f0425eba2af1af1f705f3fa','[\"*\"]',NULL,NULL,'2023-07-06 10:07:20','2023-07-06 10:07:20'),(74,'App\\Models\\User',40,'juwan-token','63f9e80e5d966e3e515a07e7dcba0a3c137827c07f3d0bea7c8bf8d5aaa55342','[\"*\"]',NULL,NULL,'2023-07-07 16:14:29','2023-07-07 16:14:29'),(75,'App\\Models\\User',40,'juwan-token','810212c0bb8fdbcc501c5350876d23f61b1e5240605bac14d4bf66a93071dc06','[\"*\"]',NULL,NULL,'2023-07-07 16:20:09','2023-07-07 16:20:09'),(76,'App\\Models\\User',40,'juwan-token','954253b6e6cc61d2e187266547b327b1348f70fe0965ec722638e8cbb17774da','[\"*\"]',NULL,NULL,'2023-07-07 16:41:33','2023-07-07 16:41:33'),(87,'App\\Models\\User',41,'juwan-token','5a4f330984781fb59aae3f4d898ed0a91b7236c9593e39e77a749e99b209fa90','[\"*\"]',NULL,NULL,'2023-07-11 18:22:12','2023-07-11 18:22:12'),(112,'App\\Models\\User',13,'juwan-token','9568857b459757f3310e9acb709424591c83350b0b615c5084c06eaf5db13465','[\"*\"]',NULL,NULL,'2023-07-14 12:32:26','2023-07-14 12:32:26'),(113,'App\\Models\\User',49,'juwan-token','31198489c1deb20b318f2e1452dc8a8e93c0448dea5a5b6008d9cc7d2503e2e5','[\"*\"]',NULL,NULL,'2023-07-14 15:50:55','2023-07-14 15:50:55'),(114,'App\\Models\\User',53,'juwan-token','698232e928f64f5a9a252835ab50c4cfe6f621278d5c91e86c981abf95b87ed6','[\"*\"]',NULL,NULL,'2023-07-15 07:39:12','2023-07-15 07:39:12'),(115,'App\\Models\\User',55,'juwan-token','3458b9a410ed7931045734977d00a491c8c2d2a53f96f557c3a73e4ff1215803','[\"*\"]',NULL,NULL,'2023-07-15 09:33:38','2023-07-15 09:33:38'),(116,'App\\Models\\User',55,'juwan-token','7c8e31187fa2db293c522b0d03a8e075c8493776b68198d07893ff9187bb447e','[\"*\"]',NULL,NULL,'2023-07-15 09:33:41','2023-07-15 09:33:41'),(117,'App\\Models\\User',55,'juwan-token','20b48e53517a0e3bbafd551b671b8f8608a72fac14943ba708115bcb31c6f003','[\"*\"]',NULL,NULL,'2023-07-15 09:33:44','2023-07-15 09:33:44'),(118,'App\\Models\\User',55,'juwan-token','34f03edd19c69f2dc2ceb2237cd0baa231466d49f95fcc26d462029b18820340','[\"*\"]',NULL,NULL,'2023-07-15 09:33:47','2023-07-15 09:33:47'),(119,'App\\Models\\User',55,'juwan-token','637357785b65ff7b9fbd1c7aad0496ed58ccc6ea0b294dc5872ef31eebbfc08b','[\"*\"]',NULL,NULL,'2023-07-15 09:33:59','2023-07-15 09:33:59'),(120,'App\\Models\\User',56,'juwan-token','d5890b964cb1d7608321110ca907fd045d097edeab1af59887ff38d745998084','[\"*\"]',NULL,NULL,'2023-07-15 09:54:04','2023-07-15 09:54:04'),(132,'App\\Models\\User',7,'juwan-token','3537dde900180780710416beb22d264ef4b924b9a66c3cc0eb238a7def0e9a35','[\"*\"]','2023-07-24 17:34:34',NULL,'2023-07-21 17:23:17','2023-07-24 17:34:34'),(138,'App\\Models\\User',57,'juwan-token','ea2a5a95419a8d08d4571f30a521b0020d56af620f609ebbc1d3ac0d054a6b48','[\"*\"]','2023-07-22 10:03:28',NULL,'2023-07-22 10:03:28','2023-07-22 10:03:28'),(140,'App\\Models\\User',38,'juwan-token','b1f7ce744c9e457a12a38b2ce37d6e88f79eee71e5b069a150becfa80e912f44','[\"*\"]','2023-07-24 11:48:37',NULL,'2023-07-22 12:21:39','2023-07-24 11:48:37'),(141,'App\\Models\\User',18,'juwan-token','d4a645a42903dcfde0fc94c51a4e3b4f6169e0535d4a7c8693bf5c1aeb7b754a','[\"*\"]','2023-07-22 12:31:46',NULL,'2023-07-22 12:31:46','2023-07-22 12:31:46'),(142,'App\\Models\\User',18,'juwan-token','76b62aaa4537e93d7dd6dd4ac305d7deba45bb6fa2de298395cc29a86a937258','[\"*\"]',NULL,NULL,'2023-07-22 12:31:46','2023-07-22 12:31:46'),(143,'App\\Models\\User',18,'juwan-token','a5d9f157dbd237af93de58af495fffe9dca7875fef1312019c5dcb45223fc6e0','[\"*\"]',NULL,NULL,'2023-07-22 12:31:46','2023-07-22 12:31:46'),(144,'App\\Models\\User',18,'juwan-token','8db1399c4e5ebdc4f43ce47f3adc1784df7b1e54f96800b75594f40140766a18','[\"*\"]',NULL,NULL,'2023-07-22 12:31:46','2023-07-22 12:31:46'),(145,'App\\Models\\User',18,'juwan-token','2d2bb5098493e403e17185ab1062eb377f7fa419bcd26658baf08dbb6710b5fe','[\"*\"]',NULL,NULL,'2023-07-22 12:31:47','2023-07-22 12:31:47'),(146,'App\\Models\\User',18,'juwan-token','cfd5f0dbaaac532f643c8122412a133fc087fe6907aa5697d332aa5c0aad55d7','[\"*\"]',NULL,NULL,'2023-07-22 12:31:47','2023-07-22 12:31:47'),(147,'App\\Models\\User',18,'juwan-token','0fa6ea635ceecbc652f1828630826d469946155599c0e993626c9c6128f55848','[\"*\"]',NULL,NULL,'2023-07-22 12:31:47','2023-07-22 12:31:47'),(148,'App\\Models\\User',18,'juwan-token','09c7c9feddeeb301398deaa3699826e64fce143e557bce95ac52111f2c5a344b','[\"*\"]','2023-07-22 12:31:49',NULL,'2023-07-22 12:31:47','2023-07-22 12:31:49'),(149,'App\\Models\\User',18,'juwan-token','353c85ef0ae4cad9ba9eee1e3cd998b33833d803617d532fa18f5369afca3a49','[\"*\"]',NULL,NULL,'2023-07-22 12:31:48','2023-07-22 12:31:48'),(150,'App\\Models\\User',18,'juwan-token','0af46c25f537a5c72c83cd614d3da71c27ec63f0c0cff33d42a5b138cddb1031','[\"*\"]',NULL,NULL,'2023-07-22 12:31:48','2023-07-22 12:31:48'),(151,'App\\Models\\User',18,'juwan-token','1ec04f2c5e7def5176ef50797bb2667685763167a8ef21707af124d7c903bb2a','[\"*\"]','2023-07-22 12:31:49',NULL,'2023-07-22 12:31:49','2023-07-22 12:31:49'),(152,'App\\Models\\User',18,'juwan-token','344f5c5cb5da7bb0a600aba2e4173be2c52a9df145863f54d44e9f91bb4e8509','[\"*\"]',NULL,NULL,'2023-07-22 12:31:49','2023-07-22 12:31:49'),(153,'App\\Models\\User',18,'juwan-token','9482543609d19a11c3bbaad25219f93fa51e13dc94052d791b07842c40fde4d7','[\"*\"]',NULL,NULL,'2023-07-22 12:31:49','2023-07-22 12:31:49'),(154,'App\\Models\\User',18,'juwan-token','1a0d656704af5bab2c4eb26411a42f635b47bfc415a8965eb06e84f2e7f9c958','[\"*\"]','2023-07-22 12:35:18',NULL,'2023-07-22 12:31:49','2023-07-22 12:35:18'),(155,'App\\Models\\User',7,'juwan-token','338bb71ef2666c7ebbd524a422a090297f132578332014f6ab01ad9c9ae7f799','[\"*\"]','2023-07-22 14:05:12',NULL,'2023-07-22 13:11:15','2023-07-22 14:05:12'),(156,'App\\Models\\User',7,'juwan-token','5dc10bb154858ffbc86c4f5a49ecb0358387e2a091dfd214f914fb62840bc392','[\"*\"]','2023-07-22 22:16:42',NULL,'2023-07-22 16:19:02','2023-07-22 22:16:42'),(157,'App\\Models\\User',18,'juwan-token','298853e01ec00e6411b2ca89df3680dac6f2355d2813f66004b85b397560b487','[\"*\"]','2023-07-24 11:55:51',NULL,'2023-07-22 17:17:51','2023-07-24 11:55:51'),(158,'App\\Models\\User',58,'juwan-token','2940c772e3759377b2dacf90ffe6b956ce755e278c297eb3b15f6417e644d88c','[\"*\"]',NULL,NULL,'2023-07-23 09:48:38','2023-07-23 09:48:38');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `podkasts`
--

DROP TABLE IF EXISTS `podkasts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `podkasts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre_id` int NOT NULL,
  `audio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `podkasts`
--

LOCK TABLES `podkasts` WRITE;
/*!40000 ALTER TABLE `podkasts` DISABLE KEYS */;
INSERT INTO `podkasts` VALUES (1,'sdfsdfs','images/podkast/2023-06-15/d5742e36914fcd5cb99fa381aafc4071.jpg',1,'audio/podkast/2023-06-13/c9d914505313ca13ea08bbae6070337a.mp3','-','2023-06-13 15:29:59','2023-06-15 17:59:18'),(2,'Test1','images/podkast/2023-06-15/130d2959ac8435b1e1667ee29457b60c.jpg',2,'audio/podkast/2023-06-15/5feb0d63eee2c5ef030fa3ab501b86a8.mp3','sdfsdfsdf','2023-06-13 17:04:23','2023-06-15 17:59:29'),(3,'Test2','images/podkast/2023-06-15/0c73ba74cf504d333b057615bee735bf.jpg',3,'audio/podkast/2023-06-15/3eff9d6bd85f0f544057e8696deaa185.mp3','sdfwasdfasdgfasdgsdf','2023-06-13 17:04:42','2023-06-15 17:59:49'),(4,'Test3','images/podkast/2023-06-13/17e9f1a8fb7eb7090c54239362528d73.jpg',4,'audio/podkast/2023-06-15/b896f557b3173b1b3bf18f198fbe7952.mp3','-','2023-06-13 17:05:16','2023-06-15 17:53:15'),(5,'Test4','images/podkast/2023-06-15/3a5be1a0925ee99834e4a4807e05b5ec.jpg',1,'audio/podkast/2023-06-15/96dd999b9735c7f56f9c9b8aed91ce9a.mp3','-','2023-06-13 17:05:37','2023-06-15 18:00:06'),(10,'Подкаст','images/podkast/2023-07-10/0df4ee868d41426b2a6fc13c83447577.jpg',3,'audio/podkast/2023-07-10/e06f0bad47a5ce9a19570d883799a8b1.mp3',NULL,'2023-07-10 15:39:02','2023-07-10 15:39:02'),(11,'Подкаст','images/podkast/2023-07-10/b1fb705512edaf1f61eb9ec9fe332e0c.jpg',3,'audio/podkast/2023-07-10/8f530950e6a3a556636f87b72db14ea9.mp3',NULL,'2023-07-10 15:41:58','2023-07-10 15:41:58');
/*!40000 ALTER TABLE `podkasts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_books`
--

DROP TABLE IF EXISTS `post_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_books` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `book_id` int NOT NULL,
  `category_id` int NOT NULL,
  `author_id` int NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `post_books_book_id_unique` (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_books`
--

LOCK TABLES `post_books` WRITE;
/*!40000 ALTER TABLE `post_books` DISABLE KEYS */;
INSERT INTO `post_books` VALUES (26,15,1,2,'images/books/2023-07-06/7b867fc2b565367eca096e8d4032e07c.jpg','Артур Кларк- Часовой',NULL,'2023-07-11 10:34:10','2023-07-11 10:34:10'),(27,16,1,2,'images/books/2023-07-07/eebb52c351f070c405e63306e6cc5f95.jpg','Цирул Артур Прекрасные вещи',NULL,'2023-07-17 09:45:54','2023-07-17 09:45:54'),(28,17,1,2,'images/books/2023-07-07/50aab8a24bf9c0d4a9df5da62995afb1.jpg','Родари Джанни Робот, которому захотелось спать',NULL,'2023-07-17 09:45:54','2023-07-17 09:45:54'),(29,19,1,2,'images/books/2023-07-10/c281423bc312f2765cb36ad7cebfafcf.jpg','Зеленый проклятый остров',NULL,'2023-07-17 09:45:54','2023-07-17 09:45:54'),(30,20,1,2,'images/books/2023-07-10/4f8043638117540538c42384cc738d03.jpg','Осенний заговор',NULL,'2023-07-17 09:46:12','2023-07-17 09:46:12'),(31,22,1,2,'images/books/2023-07-11/80abd683e9f85d00c6a0aecc2ec4d7f8.jpg','Академия и Империя',NULL,'2023-07-17 09:46:12','2023-07-17 09:46:12'),(32,23,1,2,'images/books/2023-07-12/54787e595f85b9f22d64fa666eedf773.jpg','Приключение в воздушном океане',NULL,'2023-07-17 09:46:12','2023-07-17 09:46:12'),(33,24,1,2,'images/books/2023-07-12/e6783c6eed2824203b4efe2916aa5586.jpg','Сокровище в лесу',NULL,'2023-07-17 09:46:12','2023-07-17 09:46:12'),(34,25,1,2,'images/books/2023-07-12/62c07c5a5c2450719557bf6576875d82.jpg','Остров Эпиорниса',NULL,'2023-07-17 09:46:13','2023-07-17 09:46:13'),(35,26,1,2,'images/books/2023-07-12/959b0e1c579b37a7d78d018eebd2be72.jpg','Маскарад',NULL,'2023-07-17 09:46:13','2023-07-17 09:46:13'),(36,27,1,2,'images/books/2023-07-12/9d0628d4fc248648966e4e10bd023fcd.jpg','Пересадочная Станция',NULL,'2023-07-17 09:46:13','2023-07-17 09:46:13');
/*!40000 ALTER TABLE `post_books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_photos`
--

DROP TABLE IF EXISTS `post_photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_photos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `photos` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_photos`
--

LOCK TABLES `post_photos` WRITE;
/*!40000 ALTER TABLE `post_photos` DISABLE KEYS */;
INSERT INTO `post_photos` VALUES (1,1,'[\"images\\/Posts\\/photos\\/2023-06-12\\/7513d7ce9c049d6ec2278322cafd02e9.jpg\",\"images\\/Posts\\/photos\\/2023-06-12\\/03044629479453daf8f3477455180e61.jpg\",\"images\\/Posts\\/photos\\/2023-06-12\\/95b34518760917b2d53c3446a76baac8.jpg\"]',NULL,'2023-06-12 17:23:31','2023-06-12 17:23:31');
/*!40000 ALTER TABLE `post_photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post_videos`
--

DROP TABLE IF EXISTS `post_videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `post_videos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post_videos`
--

LOCK TABLES `post_videos` WRITE;
/*!40000 ALTER TABLE `post_videos` DISABLE KEYS */;
INSERT INTO `post_videos` VALUES (1,1,'video/Posts/videos/2023-06-12/578ffdb1d13875f6a613ff45e0ecd98e.mp4',NULL,'2023-06-12 17:24:15','2023-06-12 17:24:15');
/*!40000 ALTER TABLE `post_videos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `relationable_id` int NOT NULL,
  `relationable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,1,'App\\Models\\PostPhoto','2023-06-12 17:23:31','2023-06-12 17:23:31'),(3,1,'App\\Models\\PostVideo','2023-06-12 17:24:15','2023-06-12 17:24:15'),(28,26,'App\\Models\\PostBook','2023-07-11 10:34:10','2023-07-11 10:34:10'),(29,27,'App\\Models\\PostBook','2023-07-17 09:45:54','2023-07-17 09:45:54'),(30,28,'App\\Models\\PostBook','2023-07-17 09:45:54','2023-07-17 09:45:54'),(31,29,'App\\Models\\PostBook','2023-07-17 09:45:54','2023-07-17 09:45:54'),(32,30,'App\\Models\\PostBook','2023-07-17 09:46:12','2023-07-17 09:46:12'),(33,31,'App\\Models\\PostBook','2023-07-17 09:46:12','2023-07-17 09:46:12'),(34,32,'App\\Models\\PostBook','2023-07-17 09:46:12','2023-07-17 09:46:12'),(35,33,'App\\Models\\PostBook','2023-07-17 09:46:12','2023-07-17 09:46:12'),(36,34,'App\\Models\\PostBook','2023-07-17 09:46:13','2023-07-17 09:46:13'),(37,35,'App\\Models\\PostBook','2023-07-17 09:46:13','2023-07-17 09:46:13'),(38,36,'App\\Models\\PostBook','2023-07-17 09:46:13','2023-07-17 09:46:13');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','web','2023-06-09 20:37:23','2023-06-09 20:37:23'),(2,'user','web','2023-06-09 20:37:23','2023-06-09 20:37:23'),(3,'moderator','web','2023-06-09 20:37:23','2023-06-09 20:37:23');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
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
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_otp_id` int DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_phone_unique` (`phone`),
  UNIQUE KEY `users_last_otp_id_unique` (`last_otp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Eziz','Rejepgeldiyew',NULL,'ezizrejepgeldiyew@gmail.com',NULL,107,'$2y$10$PIvBV2MQn3/2l0zS7lOQyOIOYsZ5bABq2gqt0rXxnZAcoRXDqJkd.','web','2023-07-21 17:41:04',NULL,'2023-06-09 20:37:23','2023-07-21 17:41:04'),(2,'Test',NULL,NULL,NULL,'6*******',NULL,'$2y$10$9LlA0ZmxM6gNq8Fx58XNQedCRVb1SO3yZlYPTr1CgRsZGjjD2cBii','android',NULL,NULL,'2023-06-11 18:19:55','2023-06-11 18:19:55'),(3,'Test1','Test',NULL,'eziz@gmail.com',NULL,NULL,'$2y$10$zLEo81XRIut2EjJd.u/xSu08sNZb6y6Xe52NVaZuI9D0kxf2IxSjS','web','2023-06-11 19:15:46',NULL,'2023-06-11 19:02:28','2023-06-11 19:15:46'),(4,'admin','test',NULL,'admin.s@turkmenportal.com',NULL,NULL,'$2y$10$IkVBZNNMFhHIm4UKJGcNW.QF.4E8MANJcszNDRJHWHll1DLP7A1Su','web','2023-07-22 12:37:08',NULL,'2023-06-11 19:18:50','2023-07-22 12:37:08'),(5,'Test',NULL,NULL,NULL,'612323232323232',NULL,'$2y$10$9oAOErGbFiAh3FR6bI2NkeFrVyo1pz0XTGC73Bemz6q3y0Zuvmy86','android',NULL,NULL,'2023-06-12 01:26:30','2023-06-12 01:26:30'),(6,'Test',NULL,NULL,NULL,'61670716',NULL,'$2y$10$7MmU944I6eg2ywww/M5AluhBkJj7NzY0OIHF26Gy9EKBqoAPZp0Cy','android',NULL,NULL,'2023-06-12 02:01:57','2023-06-12 02:01:57'),(7,'Danifdwv','Sultanovski',NULL,NULL,'62170272',123,'$2y$10$PK6LJNsi7dYMpIF0MOWjouPHRZOBWn.mxbt/Uy4xvj3OyIMMuXZpi','android',NULL,NULL,'2023-06-12 08:52:26','2023-07-22 16:22:26'),(8,'Dani',NULL,NULL,NULL,'62170273',NULL,'$2y$10$lnM.qP0IMBpGZCiy.48dreXIW.UeWeVG12d1nXobIlaeoAbQ7uFBa','android',NULL,NULL,'2023-06-12 10:14:56','2023-06-12 10:14:56'),(9,'Daniyar',NULL,NULL,NULL,'62170274',NULL,'$2y$10$Bkp082U9NJFbvbpK1lMpueC/WUwY5TNnQpER8AzG0utKiNiLOM/Iu','android',NULL,NULL,'2023-06-12 10:34:24','2023-06-12 10:34:24'),(10,'tty',NULL,NULL,NULL,'63112233',NULL,'$2y$10$liYV1BRcZcSUDKuZJfcVRu9YOplyQbTr8xKBaNui1nZd2y2p3sJgK','android',NULL,NULL,'2023-06-12 17:22:16','2023-06-12 17:22:16'),(12,'test',NULL,NULL,NULL,'61405590',88,'$2y$10$dR4LGKrkyIW0EPL9A3/xk.qzIXLJ/dZqR60A7tvKj8.3QHdQePUuC','android',NULL,NULL,'2023-06-12 17:25:36','2023-07-15 07:34:18'),(14,'User',NULL,NULL,NULL,'62170270',NULL,'$2y$10$42eQ.iQYBRiGtQEmwgbQWOSjtCnaEkvskIofG/y3WKj0aoMWsxaIG','android',NULL,NULL,'2023-06-13 15:32:13','2023-06-13 15:32:13'),(15,'test',NULL,NULL,NULL,'61234567',NULL,'$2y$10$msgCrxVEwplf2Knk4UMUAuv1AzafLeScacd.s2cCz3uBDnGY4OKhu','android',NULL,NULL,'2023-06-13 15:58:05','2023-06-13 15:58:05'),(16,'rest',NULL,NULL,NULL,'61232443',NULL,'$2y$10$4LoOr2/NdRmUx9ZVFVk6Meh64vVRnpMG/eA3BeB.p/QszHj9d8opy','android',NULL,NULL,'2023-06-13 16:04:07','2023-06-13 16:04:07'),(17,'Test',NULL,NULL,NULL,'602312214',NULL,'$2y$10$t3c3TFszttn/mEVX9o8suuxpZYq1w9LcDzasAK5DA91bJXvqWqHri','android',NULL,NULL,'2023-06-14 14:30:59','2023-06-14 14:30:59'),(18,'test','Dan7',NULL,NULL,'62657011',124,'$2y$10$j2EC94Jd2PkUOiG0IUfW7.P06n/ey5uj/CHa1rLyTGeKELi4TAAzi','android',NULL,NULL,'2023-06-16 14:12:41','2023-07-24 00:46:20'),(19,'Userme',NULL,NULL,NULL,'65756566',NULL,'$2y$10$7wZx153I4f7VzxbLIYb/ReS/1bgMYG2BxV3nBtBwHjuimnle2vRna','android',NULL,NULL,'2023-06-19 20:31:06','2023-06-19 20:31:06'),(20,'Usermeee',NULL,NULL,NULL,'65756555',NULL,'$2y$10$zuOp8LBAhGBe14VIEXgOO.2pS/LoWBBnrHToMUDY1CxiqcK9jJjv.','android',NULL,NULL,'2023-06-19 20:35:48','2023-06-19 20:35:48'),(21,'user',NULL,NULL,NULL,'65754432',NULL,'$2y$10$xH64UALhrcGap.Hb9SDPu..JDLC4vtPAVXyZjoYWhwgEgeh9DoWUG','android',NULL,NULL,'2023-06-20 07:58:24','2023-06-20 07:58:24'),(22,'userme',NULL,NULL,NULL,'64444567',NULL,'$2y$10$fQu.drF7BM66mpWReA3HDu3APMm.NEjnc2cJwPLCRlwxUsmpsz8Bq','android',NULL,NULL,'2023-06-20 08:55:09','2023-06-20 08:55:09'),(26,'Allamyrat','Allamyradow',NULL,'allamyrat05111999@gmail.com',NULL,NULL,'$2y$10$/KcBl1K7F4JmqySmMLCShOzRoMhBuSVq5qp4yKmiqzHZzip30JKxi','web','2023-06-27 21:12:49',NULL,'2023-06-27 21:07:18','2023-06-27 21:12:49'),(27,'user',NULL,NULL,NULL,'64762770',NULL,'$2y$10$6wv/hY/6LlbpTz/wrkVSz.PBwdVvIYHVHOvTchcA8XkWUZcvoppU2','android',NULL,NULL,'2023-07-03 20:52:38','2023-07-03 20:52:38'),(28,'user',NULL,NULL,NULL,'65938049',NULL,'$2y$10$7zn0F2T250vnVDoG.dLuGunNkxRq6tAF1ifEyWhEVrUz6F8s.T7pK','android',NULL,NULL,'2023-07-03 20:55:37','2023-07-03 20:55:37'),(29,'userme',NULL,NULL,NULL,'61234560',NULL,'$2y$10$ZER0wTtOnFTFLr7fiUgX.OmPAJ.JX2NiPuqDMWTyJ.YbIjyJmraA6','android',NULL,NULL,'2023-07-03 20:58:41','2023-07-03 20:58:41'),(30,'fsdfs',NULL,NULL,NULL,'62043352',NULL,'$2y$10$98.x89yNAdgVAEy7coXgZePIQXewkMWqnCqyrHmi8480N9BUmcrmS','android',NULL,NULL,'2023-07-05 22:42:44','2023-07-05 22:42:44'),(31,'fsdfs',NULL,NULL,NULL,'62043351',NULL,'$2y$10$gbXqLrDV1zQ1VwpV1itkeecdqb8x7MEIiNJLVNSlIRC2c3t7cKP4K','android',NULL,NULL,'2023-07-05 22:45:29','2023-07-05 22:45:29'),(32,'Dani',NULL,NULL,NULL,'61837739',NULL,'$2y$10$VIy/YCoIHa7RW26FVJN/3eyebdhmLL.KeZlGuBDNLQ1RYv398wxZK','android',NULL,NULL,'2023-07-06 09:59:08','2023-07-06 09:59:08'),(33,'Dani',NULL,NULL,NULL,'61727829',NULL,'$2y$10$tbHuvwowOs8NgllM5sHKMe7xH2ta9zrXhd2xFAj9nZJAbI9p1G5lu','android',NULL,NULL,'2023-07-06 10:00:29','2023-07-06 10:00:29'),(34,'Dani',NULL,NULL,NULL,'61728828',NULL,'$2y$10$1PDuleiQ1043jcB775vEjeXqwlmoE4cP6DuxTWhNk4yewrUTkba/e','android',NULL,NULL,'2023-07-06 10:02:53','2023-07-06 10:02:53'),(35,'Dani',NULL,NULL,NULL,'61545118',NULL,'$2y$10$dsdBPS6IFh.1inmUAWwcjeAvcDORyIjVqXrSuYS5qi0Bagm9/5vtm','android',NULL,NULL,'2023-07-06 10:04:38','2023-07-06 10:04:38'),(36,'Danbek',NULL,NULL,NULL,'61515515',NULL,'$2y$10$KV44JCMn7vydUfbkL4fPaOgjcMBMnnfuVHEkXnZDShJAqAjcdGrKi','android',NULL,NULL,'2023-07-06 10:07:20','2023-07-06 10:07:20'),(37,'FS','ME',NULL,'fsmebk@ya.ru',NULL,NULL,'$2y$10$gjrqYDiNLcSEcXcbhVpd/OqP7o/PcKnKkruHQT4UT8q/3op2wpdQK','web','2023-07-06 12:43:09',NULL,'2023-07-06 12:42:07','2023-07-06 12:43:09'),(38,'Vlad','vlad',NULL,NULL,'65031546',120,'$2y$10$LQA3FN0N8P0J5px9eQvqyuDZmdV7KbqeKY1WgFXFvyj7Pjv4F/Y8G','android',NULL,NULL,'2023-07-06 15:48:18','2023-07-24 11:29:45'),(39,'vlad','vlad',NULL,'vladislav.p9912@gmail.com',NULL,NULL,'$2y$10$rV3UvUwJ/iawrvKJg8mpXObsYf41FdLIWGVjWv44UV8xe1HORwccq','web','2023-07-24 08:56:54',NULL,'2023-07-07 09:27:56','2023-07-24 08:56:54'),(40,'Marat',NULL,NULL,NULL,'63187738',NULL,'$2y$10$N5KGOFyff9e2Jq6ZD9OoqersK6mDF6eQET8DgGX6NEgT9eRBHe0Um','android',NULL,NULL,'2023-07-07 16:14:29','2023-07-07 16:14:29'),(41,'Dani',NULL,NULL,NULL,'61234561',NULL,'$2y$10$IYA14MCg8bxGnmHBPuPweORRC.Of0pWG2y9gcUecDOlWUTyCcIZxS','android',NULL,NULL,'2023-07-11 18:22:12','2023-07-11 18:22:12'),(42,'adsas','adsasdasd',NULL,'fddsd@gmail.com',NULL,NULL,'$2y$10$iqfPhp0wTdGFWG08lpk1s.R5Qdpu1EO8OzpE5vHHadERH5vGyki.W','web','2023-07-12 10:11:03',NULL,'2023-07-12 10:09:13','2023-07-12 10:11:03'),(43,'sfsdf','sdfsdf',NULL,'sdfs@gmail.com',NULL,NULL,'$2y$10$gn3jDvQIAnLNUGMZFlMAdOH1P5CYmSTdzybwyA84UMnR40rGOt2YC','web','2023-07-12 10:27:51',NULL,'2023-07-12 10:27:37','2023-07-12 10:27:51'),(45,'dddd','dddd',NULL,'ezzz@gmail.com',NULL,NULL,'$2y$10$x2B.zJ6UEaFkUpmKe962wOBv9IpO2K1f73DAWgbHv5A5cGtUajaTS','web','2023-07-12 11:41:29',NULL,'2023-07-12 10:49:55','2023-07-12 11:41:29'),(46,'vlad','vlad',NULL,'vv1297145@gmail.com',NULL,NULL,'$2y$10$7v6dJB2lGrSoiGiIAfmSXOoLyCwyFACOj42ZxuXRtACNc.s0Y1Tnq','web','2023-07-22 09:55:54',NULL,'2023-07-12 11:12:09','2023-07-22 09:55:54'),(57,'Батыр',NULL,NULL,NULL,'65805651',118,'$2y$10$AdhW.pBOIPMF9au/nPbTauWu.pMBEX6f12FLogBkq/wdEQN.uSEzC','android',NULL,NULL,'2023-07-15 09:54:48','2023-07-22 10:03:09'),(58,'ezko','re','images/Avatar/2023-07-21/6a7de6ed43472cb0b4f2eae0fc503a14.png',NULL,'62043817',125,'$2y$10$w8A88IYVn6evQYw6tdCEduv9CCxUfPPZo1rKPvi.zb6YS36S5geSG','phone',NULL,NULL,'2023-07-20 10:24:06','2023-07-23 09:48:18');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-07-24 12:38:02
