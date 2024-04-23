-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: localhost    Database: cycle
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.32-MariaDB

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
-- Table structure for table `bikes`
--

DROP TABLE IF EXISTS `bikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bikes` (
  `number_text` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(45) NOT NULL,
  `cycles_text` varchar(45) NOT NULL,
  `lorem_text` longtext NOT NULL,
  `price_text` varchar(45) NOT NULL,
  PRIMARY KEY (`number_text`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bikes`
--

LOCK TABLES `bikes` WRITE;
/*!40000 ALTER TABLE `bikes` DISABLE KEYS */;
INSERT INTO `bikes` VALUES (1,'images/img-2.png','Outdoor Fat Tire M3','Fat bikes are ideal for some applications, viable for others, and absolutely the wrong choice for certain use-cases. If I could only have three bikes, one of them would be a fatty; if I was limited to one, it would have to be something more utilitarian. But seriously – only one bike? I couldn’t do it.','500'),(2,'images/img-3.png','Stylis Kid Cycle','From colorful and vibrant designs to sturdy and durable frames, our kids\' bikes are built to withstand the rigors of play while providing a smooth and enjoyable ride. With adjustable seats and handlebars, our bikes grow with your child, ensuring a perfect fit as they continue to grow and develop their cycling skills.','150'),(3,'images/bike6.png','Modern Specializer Cycle','With a goal of making sure that the Rockhopper offers both the best fit and best handling performance for every person, no matter their measurements, we’ve paired each frame size with the optimal wheel size. The result is a Rockhopper to fit every rider and the assurance that every Rockhopper is rolling on the best-handling wheel for its frame size.','350'),(4,'images/img-5.png','Modern Cycle','With adjustable seats and handlebars, our bikes grow with your child, ensuring a perfect fit as they continue to grow and develop their cycling skills., the Rockhopper offers both the best fit and best handling performance for every person, no matter their measurements, we’ve paired each frame size with the optimal wheel size. The result is a Rockhopper to fit every rider and the assurance that every Rockhopper is rolling on the best-handling wheel for its frame size.','450');
/*!40000 ALTER TABLE `bikes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contact` (
  `contactId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `longtext` mediumtext DEFAULT NULL,
  PRIMARY KEY (`contactId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact`
--

LOCK TABLES `contact` WRITE;
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` VALUES (1,'sadsadsa','sadasdas','sadsadda','sadsads'),(2,'sadasd','amir@google.com','213213','asdsad'),(3,'Avdo','avdo@google.com','0603541165','Best Website Ever');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `customers` (
  `customerId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `client_text` mediumtext DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customerId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` VALUES (1,'images/customer1.jpg','I recently visited Cycle to purchase a new bicycle, and I couldn\'t be more pleased with the experience. The bike I ended up purchasing has exceeded my expectations in terms of quality and performance. It\'s evident that Cylce takes pride in curating a selection of top-notch bicycles from reputable brands.','Amir Ljubijankic'),(2,'images/Customer2.jpg','Overall, I highly recommend Cycle to anyone in the market for a new bike or cycling gear. Their exceptional service, coupled with high-quality products, makes them stand out in the industry. I\'ll definitely be returning for any future biking needs.','Faris Selimovic'),(3,'images/customer3.jpg','Their expertise helped me find the perfect fit for my cycling style and budget. Not once did I feel pressured into making a purchase, which made the whole process much more enjoyable.','Ahmed Kedic');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `news` (
  `newsId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(100) DEFAULT NULL,
  `speed_text` varchar(100) DEFAULT NULL,
  `post_by` varchar(100) DEFAULT NULL,
  `post_date` varchar(100) DEFAULT NULL,
  `long_text` mediumtext DEFAULT NULL,
  PRIMARY KEY (`newsId`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'images/img-6.png','Routes','Ognjen','21-12-2024','Embark on an unforgettable journey with our curated collection of cycle routes, meticulously designed to inspire and exhilarate riders of all levels. From picturesque countryside paths to thrilling mountain trails and urban adventures, our diverse selection offers something for every cycling enthusiast.'),(2,'images/img-7.png','Average time','Matej','15-05-2024','For casual riders, covering a shorter distance of around 5-10 miles on flat terrain may take approximately 30 minutes to an hour. On the other hand, more experienced cyclists tackling longer distances or challenging terrain may average speeds of 12-20 miles per hour, completing a 20-30 mile ride in 1.5 to 2.5 hours.'),(3,'images/img-8.png','Popular Jumps','Avdo','25-11-2024','Bicycle jumps are an exhilarating aspect of the cycling world, offering riders the chance to defy gravity and unleash their inner daredevil. Whether you\'re hitting a ramp at the local skate park or soaring through the air on a purpose-built dirt jump, mastering the art of the jump requires skill, confidence, and a healthy dose of adrenaline. As you approach the jump, focus on maintaining a balanced...');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `newsletter` (
  `subscriberId` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`subscriberId`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (1,'amir@google.com'),(2,'ahmed@google.com'),(3,'ali@google.com'),(4,'salko@google.com'),(5,'enisa@google.com'),(13,'amdasdir@google.com'),(14,'danda@gmail.com'),(16,'dsadas@asd.sad'),(17,'avdaaa@dasd.com');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `idUsers` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`idUsers`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'amir@google.com','Amir','Ljubijankic','amke1234'),(2,'ahmed@google.com','Ahmed','Kedic','ahmed1234'),(3,'hena@google.com','Hena','Muslic','hena1234'),(4,'hamza@google.com','Hamza','Muslic','hamza1234'),(5,'faruk@google.com','Faruk','Rulic','faruk1234');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wishlist` (
  `UserId` int(10) unsigned DEFAULT NULL,
  `number_text` int(10) unsigned DEFAULT NULL,
  KEY `wishlist_users_FK` (`UserId`),
  KEY `wishlist_bikes_FK` (`number_text`),
  CONSTRAINT `wishlist_bikes_FK` FOREIGN KEY (`number_text`) REFERENCES `bikes` (`number_text`),
  CONSTRAINT `wishlist_users_FK` FOREIGN KEY (`UserId`) REFERENCES `users` (`idUsers`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlist`
--

LOCK TABLES `wishlist` WRITE;
/*!40000 ALTER TABLE `wishlist` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlist` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cycle'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-23  5:55:27
