CREATE DATABASE  IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `ecommerce`;
-- MySQL dump 10.13  Distrib 5.7.12, for osx10.9 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	5.5.42

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
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(2) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (2,'135 Actress Street','Fargo','ND',92812),(4,'4456 Memory Lane','Salem','MA',93810),(5,'564 Preacher Blvd','Atlanta','GA',49149),(7,'145 gambling circle','St. Petersburg','CA',94828);
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `billing`
--

DROP TABLE IF EXISTS `billing`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `billing` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card` bigint(20) DEFAULT NULL,
  `security_code` int(11) DEFAULT NULL,
  `billing_address_id` int(11) DEFAULT NULL,
  `expiration` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `billing`
--

LOCK TABLES `billing` WRITE;
/*!40000 ALTER TABLE `billing` DISABLE KEYS */;
INSERT INTO `billing` VALUES (2,1231234441,123,2,'2016-04-01'),(3,1234123412341234,134,4,'2022-06-01'),(4,6789678967896789,678,5,'2023-07-01'),(6,1089018901890189,145,7,'2020-03-01');
/*!40000 ALTER TABLE `billing` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Electronics',NULL),(2,'Food',NULL),(3,'Furniture',NULL),(4,'Instructors',NULL),(5,'Computer',1),(6,'Presentation',1),(7,'Office',3),(8,'Home',3),(9,'Snacks',2),(10,'Fruit',2),(11,'Fridge',2),(12,'Intern',4),(13,'Lead',4);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `is_main` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10000 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (1,1,'algorithm1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(2,2,'andy1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(3,3,'ballchair1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(4,4,'basketball1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(5,5,'bluechair1.jpg',NULL,NULL,1),(6,6,'bluecouch1.jpg',NULL,NULL,1),(7,7,'bookshelf1.jpg',NULL,NULL,1),(8,8,'bookshelfsmall1.jpg',NULL,NULL,1),(9,9,'chair1.jpg',NULL,NULL,1),(10,10,'computerstand1.jpg',NULL,NULL,1),(11,11,'fruit1.jpg',NULL,NULL,1),(12,12,'markers1.jpg',NULL,NULL,1),(13,13,'microwave1.jpg',NULL,NULL,1),(14,14,'pingpong1.jpg',NULL,NULL,1),(15,15,'projector1.jpg',NULL,NULL,1),(16,16,'refrigerator1.jpg',NULL,NULL,1),(17,17,'refrigerator2.jpg',NULL,NULL,1),(18,18,'chrisb.jpeg',NULL,NULL,1),(19,19,'blackbelt.jpg',NULL,NULL,1),(20,20,'cheez-it1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(22,22,'sunChips1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(23,23,'fruit-snacks.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(24,24,'trail-mix.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(25,25,'candy1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(26,26,'popcorn1.jpg','0000-00-00 00:00:00','0000-00-00 00:00:00',1),(9999,9999,'placeholder-thumb.jpg',NULL,NULL,2);
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (2,2,0,'2016-09-29 08:43:41','2016-09-29 08:43:41'),(3,3,2,'2016-09-29 08:50:42','2016-09-29 08:50:42'),(4,4,0,'2016-09-29 08:53:25','2016-09-29 08:53:25'),(6,6,1,'2016-09-29 08:57:57','2016-09-29 08:57:57');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_products` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_products`
--

LOCK TABLES `orders_products` WRITE;
/*!40000 ALTER TABLE `orders_products` DISABLE KEYS */;
INSERT INTO `orders_products` VALUES (2,13,12),(2,17,1),(3,13,12),(3,17,1),(4,13,4),(4,15,50),(4,16,3),(6,14,1),(6,16,2);
/*!40000 ALTER TABLE `orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `inventory` int(11) DEFAULT NULL,
  `description` text,
  `is_personal` tinyint(4) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Algorithm',4.99,60,'A great book to really show you how much you don\'t know or understand!',1,8),(2,'Andy',99.99,1,'All of Andy\'s great personal products',1,12),(3,'Ball Chair',59.99,1,'A ball to sit on',1,8),(4,'Basketball Hoop',9.99,2,'Play some hoops while you wait for your coworkers to push up to Github!',1,8),(5,'Blue Chair',49.99,5,'Feeling blue? This is where you can sit',0,7),(6,'Blue Couch',199.99,2,'Great for taking some naps',0,7),(7,'Bookshelf',49.99,5,'Store your stuff here',0,7),(8,'Bookshelf small',39.99,6,'Mini version for little things',0,7),(9,'Chair',99.99,70,'A basic chair covered in \"leather\"',0,7),(10,'Computer Stand',59.99,10,'Move around like a boss!',0,5),(11,'Fruit',9.99,8,'Get some vitamin C',0,10),(12,'Markers',7.99,30,'\'Cuz you\'re always running dry',0,7),(13,'Microwave',99.99,3,'Heat up your lunch, or your dinner, and even your breakfast',0,2),(14,'Ping Pong',199.99,10,'Take a break from coding and bother other people with the bouncy ball',0,8),(15,'Projector',299.99,10,'When you are cold, turn these on to generate some heat',0,6),(16,'White Fridge',599.99,3,'A fridge for communal sharing of leftovers',0,11),(17,'Black Fridge',599.99,3,'Fridge for personal food, don\'t take OPP while others are looking',0,11),(18,'Chris Burns',999.99,1,'Recently reduced and at a bargain price!',0,13),(19,'Black Belt',3.33,99,'Didn\'t get your black belt? Don\'t worry, we\'ve got you covered here!',1,13),(20,'Cheez-Its',1.50,50,'Cheese Snack',1,9),(22,'Sun Chips',1.50,50,'single serving sun chips for eating in the dark.',0,9),(23,'Fruit Snacks',1.50,50,'Single serving fruit snack. Not real fruit but close enough.',0,9),(24,'Trail Mix',5.43,5,'Trail mix for health. Or M&M\'s with obstacle course.',0,9),(25,'Candy',0.50,250,'Candy by the piece.',0,9),(26,'Popcorn',0.75,100,'Single pack of microwavable popcorn. Also air freshener to make everyone hungry.',0,9);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `user_level` tinyint(4) DEFAULT NULL,
  `shipping_address_id` int(11) DEFAULT NULL,
  `billing_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'Frances','McDormand',NULL,2,2,'2016-09-29 08:43:41','2016-09-29 08:43:41'),(3,'Vladimir ','Nabokov',NULL,4,3,'2016-09-29 08:50:42','2016-09-29 08:50:42'),(4,'Hazel','Motes',NULL,5,4,'2016-09-29 08:53:25','2016-09-29 08:53:25'),(6,'Fyodor','Dostoevsky',NULL,7,6,'2016-09-29 08:57:57','2016-09-29 08:57:57');
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

-- Dump completed on 2016-09-30 12:25:35
