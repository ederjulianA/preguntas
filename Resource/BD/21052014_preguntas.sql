/*
SQLyog Ultimate v9.02 
MySQL - 5.5.32 : Database - preguntas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `answer` */

CREATE TABLE `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` int(11) NOT NULL,
  `content` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `right` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `answer` */

/*Table structure for table `challenge` */

CREATE TABLE `challenge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `challenge` */

insert  into `challenge`(`id`,`name`,`created_at`,`updated_at`) values (1,'Interpretativa','0000-00-00 00:00:00','0000-00-00 00:00:00');
insert  into `challenge`(`id`,`name`,`created_at`,`updated_at`) values (2,'Argumentativa','0000-00-00 00:00:00','0000-00-00 00:00:00');
insert  into `challenge`(`id`,`name`,`created_at`,`updated_at`) values (3,'Propositiva','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `course` */

CREATE TABLE `course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `course` */

insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (3,'Español','0000-00-00 00:00:00','0000-00-00 00:00:00');
insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (4,'Inglés','0000-00-00 00:00:00','0000-00-00 00:00:00');

/*Table structure for table `question` */

CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `content` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `test` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `question` */

/*Table structure for table `rol` */

CREATE TABLE `rol` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(120) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `rol` */

insert  into `rol`(`id`,`rol`,`created_at`,`updated_at`) values (1,'Admin','0000-00-00','0000-00-00');
insert  into `rol`(`id`,`rol`,`created_at`,`updated_at`) values (2,'Profesor','0000-00-00','0000-00-00');
insert  into `rol`(`id`,`rol`,`created_at`,`updated_at`) values (3,'Estudiante','0000-00-00','0000-00-00');

/*Table structure for table `test` */

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` int(11) NOT NULL,
  `challenge` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `test` */

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `password_temp` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `code` varchar(60) COLLATE utf8_spanish2_ci NOT NULL,
  `active` int(11) NOT NULL,
  `tipo_user` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (2,'admin','admin@admin.com','$2y$10$sqK0Mj3nimaU2MfRGnduSOF3eK643iFLg.dRd8ePw8mIcAyaPbP1m','','',1,1,'kh6OmtGB1GbJZmS5XFRSVKRvVpE2Qjm4skBT8HlJpdp5UxUWmk8AtCUnPHmI','2014-05-18','2014-05-21');
insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (3,'estudiante 1','estudiante1@gmail.com','$2y$10$ZItwQRQtnpmPNNYoi5Z4BOJODK6Py7C98l.8/ybbwWoy6hVOBghVO','','',1,2,'','2014-05-18','2014-05-18');
insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (4,'estudiante2','estudiante2@gmail.com','$2y$10$ehe1i6iB8lhEl.UNrtfdn.5YgspxJVafm8BEaKgcW7VZtDZ9cpIBm','','',1,3,'','2014-05-18','2014-05-18');
insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (5,'profesor 2','profesor2@gmail.com','$2y$10$eOh.piBtkaMVdlCdjBPsLeixuBLmH1MxRjE59Vl7hdmFzTo6Cfsyq','','',1,2,'','2014-05-18','2014-05-18');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
