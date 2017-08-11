-- MySQL dump 10.13  Distrib 5.7.14, for Win64 (x86_64)
--
-- Host: localhost    Database: laravel54
-- ------------------------------------------------------
-- Server version	5.7.14

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin_permission_role`
--

DROP TABLE IF EXISTS `admin_permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_permission_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permission_role`
--

LOCK TABLES `admin_permission_role` WRITE;
/*!40000 ALTER TABLE `admin_permission_role` DISABLE KEYS */;
INSERT INTO `admin_permission_role` VALUES (1,1,2,NULL,NULL),(2,2,8,NULL,NULL),(5,1,3,NULL,NULL),(4,1,1,NULL,NULL),(6,1,4,NULL,NULL),(33,2,3,NULL,NULL),(9,3,6,NULL,NULL),(10,3,7,NULL,NULL),(11,3,8,NULL,NULL),(12,3,9,NULL,NULL),(13,3,1,NULL,NULL),(14,3,2,NULL,NULL),(15,3,3,NULL,NULL),(16,3,4,NULL,NULL),(17,3,5,NULL,NULL),(18,3,10,NULL,NULL),(19,3,11,NULL,NULL),(20,3,12,NULL,NULL),(21,3,13,NULL,NULL),(22,1,6,NULL,NULL),(23,1,7,NULL,NULL),(24,1,8,NULL,NULL),(25,1,9,NULL,NULL),(26,1,5,NULL,NULL),(27,1,10,NULL,NULL),(28,1,11,NULL,NULL),(29,1,12,NULL,NULL),(30,1,13,NULL,NULL),(35,2,9,NULL,NULL),(36,3,14,NULL,NULL),(37,3,15,NULL,NULL),(38,3,16,NULL,NULL),(39,3,17,NULL,NULL),(40,3,18,NULL,NULL),(41,3,19,NULL,NULL),(42,3,20,NULL,NULL),(43,3,21,NULL,NULL),(44,3,22,NULL,NULL),(45,3,23,NULL,NULL),(46,3,24,NULL,NULL),(47,3,25,NULL,NULL),(48,3,26,NULL,NULL),(49,3,27,NULL,NULL),(50,3,28,NULL,NULL),(51,3,29,NULL,NULL),(52,3,30,NULL,NULL),(53,3,31,NULL,NULL),(54,3,32,NULL,NULL),(55,2,6,NULL,NULL),(56,2,7,NULL,NULL),(57,2,1,NULL,NULL),(58,2,12,NULL,NULL),(59,2,25,NULL,NULL),(60,2,26,NULL,NULL),(61,2,27,NULL,NULL),(62,2,28,NULL,NULL);
/*!40000 ALTER TABLE `admin_permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_permissions`
--

DROP TABLE IF EXISTS `admin_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `pid` int(10) NOT NULL DEFAULT '0',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_permissions`
--

LOCK TABLES `admin_permissions` WRITE;
/*!40000 ALTER TABLE `admin_permissions` DISABLE KEYS */;
INSERT INTO `admin_permissions` VALUES (6,'system_setting',1,'站点设置','2017-08-01 09:27:06','2017-08-01 09:27:06'),(7,'users_setting',1,'用户设置','2017-08-01 09:38:07','2017-08-01 09:38:07'),(8,'roles_setting',1,'角色设置','2017-08-01 09:40:12','2017-08-01 09:40:12'),(9,'classes_setting',1,'课程设置','2017-08-01 09:40:39','2017-08-01 09:40:39'),(1,'platform',0,'平台','2017-08-02 07:30:47','2017-08-02 07:30:47'),(2,'courses',0,'课程','2017-08-02 07:31:39','2017-08-02 07:31:39'),(3,'operate',0,'运营','2017-08-02 07:32:17','2017-08-02 07:32:17'),(4,'order',0,'订单','2017-08-02 07:32:47','2017-08-02 07:32:47'),(5,'user',0,'用户','2017-08-02 07:33:01','2017-08-02 07:33:01'),(10,'curriculum_manager',2,'课程管理','2017-08-02 07:33:01','2017-08-02 07:33:01'),(12,'consult_manager',3,'咨询管理','2017-08-02 07:33:01','2017-08-02 07:33:01'),(13,'curriculum_order',4,'课程订单','2017-08-02 07:33:01','2017-08-02 07:33:01'),(14,'user_manager',5,'用户管理','2017-08-02 07:33:01','2017-08-02 07:33:01'),(11,'open_class_manager',2,'公开课管理','2017-08-03 07:38:10','2017-08-03 07:38:10'),(15,'live_manager',2,'直播管理','2017-08-03 09:28:27','2017-08-03 09:28:27'),(16,'class_manager',2,'班级管理','2017-08-03 09:38:33','2017-08-03 09:38:33'),(17,'theme_manager',2,'话题管理','2017-08-03 09:42:05','2017-08-03 09:42:05'),(18,'qanda_manager',2,'问答管理','2017-08-03 09:45:58','2017-08-03 09:45:58'),(19,'note_manager',2,'笔记管理','2017-08-03 09:47:20','2017-08-03 09:47:20'),(20,'evaluate_manager',2,'评价管理','2017-08-03 09:48:04','2017-08-03 09:48:04'),(21,'classify_manager',2,'分类管理','2017-08-03 09:48:46','2017-08-03 09:48:46'),(22,'questions_manager',2,'题库管理','2017-08-03 09:49:20','2017-08-03 09:49:20'),(23,'paper_manager',2,'试卷管理','2017-08-03 09:49:54','2017-08-03 09:49:54'),(24,'label_manager',2,'标签管理','2017-08-03 09:50:37','2017-08-03 09:50:37'),(25,'website_manager',3,'网站公告管理','2017-08-03 09:51:31','2017-08-03 09:51:31'),(26,'instation_notice',3,'全站站内通知','2017-08-03 09:52:40','2017-08-03 09:52:40'),(27,'editarea_manager',3,'编辑区管理','2017-08-03 09:53:21','2017-08-03 09:53:21'),(28,'page_manager',3,'页面管理','2017-08-03 09:53:55','2017-08-03 09:53:55'),(29,'classes_order',4,'班级订单','2017-08-03 09:54:40','2017-08-03 09:54:40'),(30,'books_order',4,'图书订单','2017-08-03 09:55:54','2017-08-03 09:55:54'),(31,'teacher_manager',5,'教师管理','2017-08-03 09:56:28','2017-08-03 09:56:28'),(32,'letter_manager',5,'私信管理','2017-08-03 09:57:06','2017-08-03 09:57:06');
/*!40000 ALTER TABLE `admin_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_role_user`
--

DROP TABLE IF EXISTS `admin_role_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_role_user`
--

LOCK TABLES `admin_role_user` WRITE;
/*!40000 ALTER TABLE `admin_role_user` DISABLE KEYS */;
INSERT INTO `admin_role_user` VALUES (1,2,10,NULL,NULL),(7,1,10,NULL,NULL),(3,2,9,NULL,NULL),(9,3,1,NULL,NULL),(5,1,11,NULL,NULL),(6,2,11,NULL,NULL),(8,2,6,NULL,NULL),(10,2,2,NULL,NULL);
/*!40000 ALTER TABLE `admin_role_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_roles`
--

DROP TABLE IF EXISTS `admin_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_roles`
--

LOCK TABLES `admin_roles` WRITE;
/*!40000 ALTER TABLE `admin_roles` DISABLE KEYS */;
INSERT INTO `admin_roles` VALUES (1,'sys-manager','系统管理员','2017-08-01 09:49:15','2017-08-01 09:49:15'),(2,'normal','一般管理员','2017-08-01 09:51:37','2017-08-01 09:51:37'),(3,'super_manager','超级管理员','2017-08-03 01:49:46','2017-08-03 01:49:46');
/*!40000 ALTER TABLE `admin_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_users`
--

LOCK TABLES `admin_users` WRITE;
/*!40000 ALTER TABLE `admin_users` DISABLE KEYS */;
INSERT INTO `admin_users` VALUES (1,'admin','','$2y$10$vn2m56gCjNs3g1C.lR8EmeZv1m3UVjcVwDf/UdXMAEz1JZjknajTq','2017-07-30 18:37:47','2017-08-07 03:24:07'),(2,'hello','','$2y$10$lxkrqtCRN5ei5PlwmoxksOWcJS5qrrdd1IaeKFk1opY0qduWqa.fG','2017-07-31 00:02:29','2017-07-31 00:02:29'),(3,'王俊杰','wjj900906@126.com','$2y$10$4ArblGhlnjKyTEHafKKeJOa173eYkddnfnP5FY8sashW6PBrsExQK','2017-07-31 00:03:23','2017-07-31 00:03:23'),(5,'Tom23','','$2y$10$VnszfxuUIZsdvnQa4YBgOOMWi8TqvA9WlKfhjF4JGRKK6iN4jBBrO','2017-07-31 08:13:50','2017-08-01 01:17:34'),(6,'暗室逢灯','asfd@qq.com','$2y$10$tFcrjDsL.x.XMVskIBqZwOYNvxDyzK4eDtf3xi3qBPrE0ye5utYou','2017-07-31 09:36:07','2017-08-01 01:53:18'),(9,'熊大','xiongda@qq.com','$2y$10$n.zhBZmgDfrRx1uNNi7PLOgecwQAiLKHM/CZJ5i0VmnM.EajQq3n.','2017-08-01 01:51:38','2017-08-07 03:47:41'),(10,'Alex','Alex@gmail.com','$2y$10$rTwzoJvJJ8b5Pttdfpvl4eaDmrsgjAD9gsZWayaL1WmaIpiECuR7C','2017-08-01 01:54:02','2017-08-01 01:54:02');
/*!40000 ALTER TABLE `admin_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `enName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `catType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '1:课程分类，2班级分类',
  `pid` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'中学','middle','1',0,'2017-08-09 02:56:31','2017-08-09 02:56:31'),(2,'小学','primary','1',0,'2017-08-09 02:58:12','2017-08-09 02:58:12'),(3,'幼儿','child','1',0,'2017-08-09 02:59:09','2017-08-09 02:59:09'),(4,'中学综合素质','middle_qulity','1',1,'2017-08-09 03:29:53','2017-08-09 03:29:53'),(5,'幼儿综合素质','child_qulity','1',3,'2017-08-09 03:30:21','2017-08-09 03:30:21'),(6,'小学综合素质','primary_qulity','1',2,'2017-08-09 03:30:55','2017-08-09 03:30:55'),(7,'小学综合子分类222','xiaozi33333','1',6,'2017-08-09 06:18:30','2017-08-09 07:17:02');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curriculums`
--

DROP TABLE IF EXISTS `curriculums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `curriculums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `category_id` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `price` decimal(7,2) NOT NULL DEFAULT '0.00',
  `serialise` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0非连载状态，1更新中，2已完结',
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `list_order` int(4) NOT NULL DEFAULT '0',
  `recommend` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0不推荐，1推荐',
  `status` tinyint(4) NOT NULL COMMENT '0正常，-1已删除',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curriculums`
--

LOCK TABLES `curriculums` WRITE;
/*!40000 ALTER TABLE `curriculums` DISABLE KEYS */;
INSERT INTO `curriculums` VALUES (1,'计算机编程','4',999.00,0,'PHP是世界上最好的语言！！！',1,1,0,'2017-08-08 10:22:52','2017-08-11 02:37:11'),(2,'幼儿综合素质','3',199.00,1,'幼儿综合素质主要讲的是幼儿资格证考试的综合素质',2,1,-1,'2017-08-08 10:24:33','2017-08-11 02:30:11'),(3,'高中政治','1',99.00,2,'政治 ，每个人都必须学习的东西！',12,1,0,'2017-08-09 01:43:51','2017-08-11 02:42:52'),(4,'中学综合素质','6',999.99,2,'先不写了',20,0,0,'2017-08-09 01:56:00','2017-08-11 02:44:11'),(5,'测试','2',465.00,1,'暗室逢灯',11,1,-1,'2017-08-09 08:44:15','2017-08-11 02:42:00');
/*!40000 ALTER TABLE `curriculums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) unsigned NOT NULL,
  `reserved_at` int(10) unsigned DEFAULT NULL,
  `available_at` int(10) unsigned NOT NULL,
  `created_at` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_reserved_at_index` (`queue`,`reserved_at`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_07_31_015310_create_admin_user_table',1),(4,'2017_08_01_110026_create_permission_and_roles',2),(6,'2017_08_02_161135_create_tree_table',3),(7,'2017_08_04_151828_create_teachers_table',4),(8,'2017_08_06_111530_create_notice_table',5),(9,'2017_08_06_154651_create_jobs_table',6),(10,'2017_08_07_155207_create_curriculum_table',7),(11,'2017_08_09_101208_create_categories_table',8);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notices`
--

DROP TABLE IF EXISTS `notices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notices`
--

LOCK TABLES `notices` WRITE;
/*!40000 ALTER TABLE `notices` DISABLE KEYS */;
INSERT INTO `notices` VALUES (1,'这个是测试通知','这个是测试通知这个是测试通知','2017-08-06 08:38:13','2017-08-06 08:38:13'),(2,'这是第二个通知','大家注意了啊','2017-08-06 08:43:46','2017-08-06 08:43:46');
/*!40000 ALTER TABLE `notices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sex` tinyint(4) NOT NULL DEFAULT '3' COMMENT '1:男2:女3:未知',
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `subject` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `headImg` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'王教授',1,'wjj90@test.com','13212312312','计算机科学与技术','','王老师的学生，你很不一样','sfd',NULL,NULL),(3,'李大宝',1,'lidabao@qq.com','15265457789','伐木','','','$2y$10$HXkM6sf9vkXOlH6ELnnA.eZw/evDVGc0o2TjFbd8GraVY3KzuacCW','2017-08-06 00:49:59','2017-08-06 01:54:17');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trees`
--

DROP TABLE IF EXISTS `trees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CateName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trees`
--

LOCK TABLES `trees` WRITE;
/*!40000 ALTER TABLE `trees` DISABLE KEYS */;
INSERT INTO `trees` VALUES (1,0,' ',' hello',' ','2017-08-16 08:12:53','2017-08-02 08:12:59'),(2,0,' ','hehe',' ','2017-08-08 08:13:13','2017-08-02 08:13:17'),(4,1,' ','world',' ','2017-08-02 08:13:33','2017-08-02 08:13:37'),(5,1,'  ','why',' ','2017-08-02 08:13:50','2017-08-02 08:13:53'),(6,2,' ','haha',' ','2017-08-23 08:14:04','2017-08-02 08:14:08'),(3,0,' ','news',' ','2017-08-22 08:13:58','2017-08-03 08:14:01'),(7,3,' ','777777',' ','2017-08-09 08:31:20','2017-08-03 08:31:23'),(8,10,'  ','88888',' ','2017-08-16 08:36:48','2017-08-03 08:36:52'),(10,0,' ','1010110',' ','2017-08-03 09:10:27','2017-08-24 09:10:30');
/*!40000 ALTER TABLE `trees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_notice`
--

DROP TABLE IF EXISTS `user_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `notice_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_notice`
--

LOCK TABLES `user_notice` WRITE;
/*!40000 ALTER TABLE `user_notice` DISABLE KEYS */;
INSERT INTO `user_notice` VALUES (1,1,1),(2,2,1),(3,3,1),(4,5,1),(5,6,1),(6,9,1),(7,10,1),(8,1,2),(9,2,2),(10,3,2),(11,5,2),(12,6,2),(13,9,2),(14,10,2);
/*!40000 ALTER TABLE `user_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2017-08-11 11:20:12
