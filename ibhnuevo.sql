/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - ibhnuevo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ibhnuevo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ibhnuevo`;

/*Table structure for table `categorias` */

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `idcate` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `catenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idcate`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `categorias` */

insert  into `categorias`(`idcate`,`catenom`,`created_at`,`updated_at`) values (1,'hgfd','2020-03-04 12:30:17','2020-03-04 12:30:17'),(2,'vc','2020-03-04 12:31:54','2020-03-04 12:31:54'),(3,'vc','2020-03-04 12:32:56','2020-03-04 12:32:56'),(4,'polvo','2020-03-04 12:43:43','2020-03-04 12:43:43'),(5,'Comprimidos','2020-03-04 12:47:40','2020-03-04 12:47:40'),(6,'Ungüentos','2020-03-04 12:48:20','2020-03-04 12:48:20'),(7,'Tónico','2020-03-04 12:48:41','2020-03-04 12:48:41'),(8,'kjhgfd','2020-03-05 13:43:33','2020-03-05 13:43:33'),(9,'gggggg','2020-03-05 15:08:06','2020-03-05 15:08:06'),(10,'prueba2','2020-03-30 08:29:58','2020-03-30 08:29:58'),(11,'Ungüentos','2020-04-02 08:33:13','2020-04-02 08:33:13'),(12,'Ungüentos','2020-04-02 08:33:36','2020-04-02 08:33:36');

/*Table structure for table `encargados` */

DROP TABLE IF EXISTS `encargados`;

CREATE TABLE `encargados` (
  `idencargado` int(50) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(100) NOT NULL,
  `app` varchar(100) NOT NULL,
  `apm` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idencargado`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `encargados` */

insert  into `encargados`(`idencargado`,`nom`,`app`,`apm`,`telefono`,`created_at`,`updated_at`,`deleted_at`) values (1,'dd','dd','dd','dd','0000-00-00 00:00:00',NULL,NULL),(2,'adr','gg','hhh','7223261810','2020-04-01 17:43:05','2020-04-01 17:43:05',NULL),(3,'Dulce','Ruiz','jjj','2652','2020-04-01 17:44:56','2020-04-01 17:44:56',NULL),(4,'Vicente','Garcia','Ortiz','8666666','2020-04-01 19:34:37','2020-04-01 19:34:37',NULL),(5,'Vicente','Garcia','Ortiz','8666666','2020-04-01 19:35:41','2020-04-01 19:35:41',NULL),(6,'Vicente','Garcia','Ortiz','8666666','2020-04-01 19:36:05','2020-04-01 19:36:05',NULL),(7,'Vicente','Garcia','Ortiz','8666666','2020-04-01 19:56:41','2020-04-01 19:56:41',NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2020_02_27_090635_create_promocions_table',1),(8,'2020_02_27_124044_create_sucursals_table',2),(9,'2020_02_27_154501_create_productos_table',2),(10,'2020_02_27_212716_add_imagen_to_productos_table',2),(11,'2020_02_27_223445_add_formula_totable',2),(13,'2020_02_28_085222_add_slug_to_productos',3),(14,'2020_03_03_193621_create_roles_table',3),(15,'2020_03_03_211516_create_categorias_table',3);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `productos` */

DROP TABLE IF EXISTS `productos`;

CREATE TABLE `productos` (
  `idprod` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cant` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`idprod`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `productos` */

insert  into `productos`(`idprod`,`codigo`,`nom`,`cate`,`neto`,`cant`,`stock`,`created_at`,`updated_at`,`imagen`,`formula`) values (6,'rod25148979','Rodillerasfff','granel','1','100','10','2020-03-03 13:51:54','2020-04-02 07:52:12','1585835532WhatsApp Image 2020-03-03 at 14.37.26.jpeg','Esta rodillera cuenta con una funda de rodilla, una abertura para la rótula y correas o refuerzos alrededor de la abertura.'),(12,'ergyh','prueba','de chale','xD','50','5','2020-03-26 19:31:04','2020-04-02 00:13:02','1585807982envasecrema de baba de caracol.png','ayuda en el proyecto'),(13,'DA9','Higado','55','235','50','5','2020-03-27 07:40:47','2020-03-27 07:40:47','1585316447WhatsApp Image 2020-03-03 at 13.44.02 (1).jpeg','depurador de riñon e higado que se disuelve en agua'),(14,'dhrdep1','DHR','gotero','10','100','5','2020-04-02 00:11:39','2020-04-02 00:11:39','1585807899gotero DHR.png','depurador de riñon e higado que se disuelve en agua');

/*Table structure for table `promocions` */

DROP TABLE IF EXISTS `promocions`;

CREATE TABLE `promocions` (
  `idpromo` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ptema` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcosto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pfecha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pnsesion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pdet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idpromo`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `promocions` */

insert  into `promocions`(`idpromo`,`ptema`,`pcosto`,`pfecha`,`pnsesion`,`pdet`,`created_at`,`updated_at`) values (1,'enfermedades respiratorias','150','lunes 3 febrero 2020','5 ventosas','10 unidosis','2020-02-27 11:49:40','2020-02-27 11:49:40'),(2,'Dolores musculares','200','martes 04 febrero 2020','5 terapias','regalo de 5 terapias y 1 ungüento','2020-02-27 11:58:19','2020-02-27 11:58:19'),(3,'regalos','0','Miercoles 05 febrero 2020','0','1 ungüento gratis a las personas que llamen al aire y den su testimonio','2020-02-27 11:59:55','2020-02-27 11:59:55'),(4,'enfermedades respiratorias y cambios de temperatura','100','Jueves 06 febrero 2020','0','10 unidosis','2020-02-27 12:01:11','2020-02-27 12:01:11'),(5,'varices','150','viernes 7 febrero 2020','5 ventosas','sdf','2020-02-27 13:13:10','2020-02-27 13:13:10'),(6,'hola','0','martes 04 febrero 2020','5 terapias','10 unidosis','2020-02-27 19:38:21','2020-02-27 19:38:21'),(7,'ghj','56','xcg','52','vh','2020-03-01 20:13:28','2020-03-01 20:13:28'),(8,'ggggggg','dfghj','tyu','yu','gyui','2020-03-08 13:17:12','2020-03-08 13:17:12'),(9,'kjhgfd','kjhgfd','jhgf','jhgfd','jhg','2020-03-09 14:41:15','2020-03-09 14:41:15'),(10,'bvc','bvc','bv','hgf','gf','2020-03-09 14:43:43','2020-03-09 14:43:43'),(11,'hgf','hg','jhg','g','hg','2020-03-09 14:44:42','2020-03-09 14:44:42'),(12,'hg','hg','hgf','ytr','yt','2020-03-09 15:24:48','2020-03-09 15:24:48'),(13,'rrr','rrr','rr','rr','rr','2020-03-27 08:55:30','2020-03-27 08:55:30');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

/*Table structure for table `sucursals` */

DROP TABLE IF EXISTS `sucursals`;

CREATE TABLE `sucursals` (
  `idsuc` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `snom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sencar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idsuc`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sucursals` */

insert  into `sucursals`(`idsuc`,`snom`,`sencar`,`sdir`,`stel`,`created_at`,`updated_at`) values (4,'otro','otro','gfd','123456','2020-03-09 15:12:27','2020-03-27 08:14:19'),(6,'IBH San Pedro','gaby','San Totoltepec, Centro','12456','2020-03-26 22:42:20','2020-03-26 22:42:20'),(8,'IBH Toluca','Eli','Galeana #122 Toluca, Centro','123456','2020-03-27 06:46:08','2020-03-27 06:46:08'),(9,'IBH Ocoyoacac','Dulce','Ocoyoacac','aaa','2020-03-27 07:55:29','2020-03-27 07:55:52'),(11,'Villa','gaby','Villa Cuauhtemoc','gggg','2020-03-27 08:10:28','2020-03-27 08:10:45'),(12,'otro','g','ghj','1234567','2020-03-27 08:12:04','2020-03-27 08:12:04');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'Adri','bruno_eizeth@hotmail.com','$2y$10$GLU5uDra7WX0vYkvkom9nOQGVQTfEeAbNLcPEvXqXPzkvRghRjF0m','12Bx1tHDWcuZligjm33VcmpclJ4Fq58nuzSUlTtEUj2HJa7WoxQzmFwK0Ffp','2020-03-03 19:28:28','2020-03-03 19:28:28');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
