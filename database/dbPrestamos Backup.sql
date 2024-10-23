CREATE DATABASE  IF NOT EXISTS `prestamos` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `prestamos`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: prestamos
-- ------------------------------------------------------
-- Server version	8.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `amortizacions`
--

DROP TABLE IF EXISTS `amortizacions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `amortizacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `pago` int NOT NULL,
  `fecha` date NOT NULL,
  `prestamo_id` bigint unsigned NOT NULL,
  `interes` int NOT NULL,
  `abono` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `amortizacions_prestamo_id_foreign` (`prestamo_id`),
  CONSTRAINT `amortizacions_prestamo_id_foreign` FOREIGN KEY (`prestamo_id`) REFERENCES `prestamos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=265 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `amortizacions`
--

LOCK TABLES `amortizacions` WRITE;
/*!40000 ALTER TABLE `amortizacions` DISABLE KEYS */;
INSERT INTO `amortizacions` VALUES (180,1,'2023-12-23',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(181,2,'2024-01-06',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(182,3,'2024-01-20',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(183,4,'2024-02-03',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(184,5,'2024-02-17',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(185,6,'2024-03-02',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(186,7,'2024-03-16',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(187,8,'2024-03-30',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(188,9,'2024-04-13',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(189,10,'2024-04-27',47,44,444,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(190,1,'2023-12-23',48,110,1110,'2023-12-09 20:37:10','2023-12-09 20:37:10'),(191,2,'2024-01-06',48,110,1110,'2023-12-09 20:37:10','2023-12-09 20:37:10'),(192,3,'2024-01-20',48,110,1110,'2023-12-09 20:37:10','2023-12-09 20:37:10'),(193,4,'2024-02-03',48,110,1110,'2023-12-09 20:37:11','2023-12-09 20:37:11'),(194,5,'2024-02-17',48,110,1110,'2023-12-09 20:37:11','2023-12-09 20:37:11'),(195,6,'2024-03-02',48,110,1110,'2023-12-09 20:37:11','2023-12-09 20:37:11'),(196,1,'2023-12-23',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(197,2,'2024-01-06',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(198,3,'2024-01-20',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(199,4,'2024-02-03',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(200,5,'2024-02-17',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(201,6,'2024-03-02',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(202,7,'2024-03-16',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(203,8,'2024-03-30',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(204,9,'2024-04-13',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(205,10,'2024-04-27',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(206,11,'2024-05-11',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(207,12,'2024-05-25',49,92,925,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(208,1,'2023-12-23',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(209,2,'2024-01-06',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(210,3,'2024-01-20',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(211,4,'2024-02-03',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(212,5,'2024-02-17',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(213,6,'2024-03-02',50,128,1295,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(214,1,'2023-12-23',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(215,2,'2024-01-06',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(216,3,'2024-01-20',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(217,4,'2024-02-03',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(218,5,'2024-02-17',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(219,6,'2024-03-02',51,88,888,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(220,7,'2024-03-16',51,88,888,'2023-12-09 20:41:08','2023-12-09 20:41:08'),(221,8,'2024-03-30',51,88,888,'2023-12-09 20:41:08','2023-12-09 20:41:08'),(222,9,'2024-04-13',51,88,888,'2023-12-09 20:41:08','2023-12-09 20:41:08'),(223,10,'2024-04-27',51,88,888,'2023-12-09 20:41:08','2023-12-09 20:41:08'),(224,1,'2023-12-23',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(225,2,'2024-01-06',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(226,3,'2024-01-20',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(227,4,'2024-02-03',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(228,5,'2024-02-17',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(229,6,'2024-03-02',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(230,7,'2024-03-16',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(231,8,'2024-03-30',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(232,9,'2024-04-13',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(233,10,'2024-04-27',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(234,11,'2024-05-11',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(235,12,'2024-05-25',52,46,463,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(259,1,'2023-12-23',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29'),(260,2,'2024-01-06',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29'),(261,3,'2024-01-20',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29'),(262,4,'2024-02-03',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29'),(263,5,'2024-02-17',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29'),(264,6,'2024-03-02',61,92,925,'2023-12-09 20:56:29','2023-12-09 20:56:29');
/*!40000 ALTER TABLE `amortizacions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (8,'Sergio','2023-12-08 23:28:53','2023-12-09 20:36:53'),(11,'Magdiel','2023-12-09 00:43:03','2023-12-09 18:15:51'),(12,'Jorge','2023-12-09 00:43:08','2023-12-09 00:43:08'),(13,'Eduardo','2023-12-09 00:43:12','2023-12-09 00:43:12'),(15,'Maria','2023-12-09 00:43:20','2023-12-09 16:42:11'),(17,'Diana','2023-12-09 00:43:50','2023-12-09 00:43:50'),(18,'Cesar','2023-12-09 06:38:08','2023-12-09 18:15:39'),(19,'Iradier','2023-12-09 16:42:29','2023-12-09 16:42:29');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(8,'2023_12_07_234931_create_clientes_table',2),(17,'2023_12_08_043030_create_montos_table',3),(18,'2023_12_08_045533_create_plazos_table',3),(19,'2023_12_08_052450_create_prestamos_table',3),(20,'2023_12_09_012656_create_amortizacions_table',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `montos`
--

DROP TABLE IF EXISTS `montos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `montos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `monto` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `montos`
--

LOCK TABLES `montos` WRITE;
/*!40000 ALTER TABLE `montos` DISABLE KEYS */;
INSERT INTO `montos` VALUES (1,1000.00,'2023-12-09 04:16:08','2023-12-09 18:16:03'),(2,2000.00,'2023-12-09 04:16:12','2023-12-09 18:16:07'),(3,3000.00,'2023-12-09 04:16:16','2023-12-09 18:16:11'),(4,4000.00,'2023-12-09 04:16:30','2023-12-09 18:16:15'),(5,5000.00,'2023-12-09 04:16:33','2023-12-09 18:16:19'),(6,6000.00,'2023-12-09 06:56:56','2023-12-09 20:35:09'),(7,7000.00,'2023-12-09 20:37:15','2023-12-09 20:37:15'),(8,8000.00,'2023-12-09 20:37:18','2023-12-09 20:37:18'),(9,9000.00,'2023-12-09 20:37:20','2023-12-09 20:37:20'),(10,10000.00,'2023-12-09 20:37:22','2023-12-09 20:37:22');
/*!40000 ALTER TABLE `montos` ENABLE KEYS */;
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
INSERT INTO `password_reset_tokens` VALUES ('sergiofelix7283@gmail.com','$2y$12$W6LRJpJ0jgEwNbDi151YQ.wWN0IRRiT0mWo15RGnEvWQ/7Vb7s.yK','2023-12-08 22:49:12');
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plazos`
--

DROP TABLE IF EXISTS `plazos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plazos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `plazo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plazos`
--

LOCK TABLES `plazos` WRITE;
/*!40000 ALTER TABLE `plazos` DISABLE KEYS */;
INSERT INTO `plazos` VALUES (1,'1','2023-12-09 20:16:24','2023-12-09 20:25:12'),(2,'2','2023-12-09 04:16:20','2023-12-09 20:15:47'),(3,'3','2023-12-09 04:16:21','2023-12-09 20:27:38'),(4,'4','2023-12-09 04:16:22','2023-12-09 20:24:18'),(5,'5','2023-12-09 04:16:23','2023-12-09 20:24:43'),(6,'6','2023-12-09 17:54:23','2023-12-09 20:24:47'),(7,'7','2023-12-09 20:16:17','2023-12-09 20:24:51'),(8,'8','2023-12-09 20:16:18','2023-12-09 20:24:55'),(9,'9','2023-12-09 20:16:20','2023-12-09 20:25:02'),(10,'10','2023-12-09 20:16:22','2023-12-09 20:25:07'),(11,'11','2023-12-09 20:16:24','2023-12-09 20:25:12'),(12,'12','2023-12-09 20:16:26','2023-12-09 20:16:26');
/*!40000 ALTER TABLE `plazos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestamos`
--

DROP TABLE IF EXISTS `prestamos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prestamos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint unsigned NOT NULL,
  `monto` bigint unsigned NOT NULL,
  `plazo` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `prestamos_cliente_id_foreign` (`cliente_id`),
  CONSTRAINT `prestamos_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestamos`
--

LOCK TABLES `prestamos` WRITE;
/*!40000 ALTER TABLE `prestamos` DISABLE KEYS */;
INSERT INTO `prestamos` VALUES (47,11,4,11,'2023-12-09 20:37:01','2023-12-09 20:37:01'),(48,12,6,6,'2023-12-09 20:37:10','2023-12-09 20:37:10'),(49,19,10,12,'2023-12-09 20:37:35','2023-12-09 20:37:35'),(50,18,7,6,'2023-12-09 20:37:45','2023-12-09 20:37:45'),(51,13,8,11,'2023-12-09 20:41:07','2023-12-09 20:41:07'),(52,17,5,12,'2023-12-09 20:43:00','2023-12-09 20:43:00'),(61,11,5,6,'2023-12-09 20:56:29','2023-12-09 20:56:29');
/*!40000 ALTER TABLE `prestamos` ENABLE KEYS */;
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sergio','sergiofelix7283@gmail.com',NULL,'$2y$12$9K3OFeV.ButspGpTV/a71eq5xdg4nsyVWLN.vD3eZ2kQz3c18Ax0m',NULL,'2023-12-08 22:50:32','2023-12-08 22:50:32');
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

-- Dump completed on 2023-12-09 14:06:46
