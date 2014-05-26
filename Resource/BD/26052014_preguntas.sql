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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `answer` */

insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (1,1,'A',1,'2014-05-26 01:20:34','2014-05-26 01:20:34');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (2,1,'B',2,'2014-05-26 01:20:34','2014-05-26 01:20:34');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (3,2,'A',1,'2014-05-26 07:10:37','2014-05-26 07:10:37');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (4,2,'B',2,'2014-05-26 07:10:37','2014-05-26 07:10:37');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (5,3,'A',1,'2014-05-26 08:07:03','2014-05-26 08:07:03');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (6,3,'B',2,'2014-05-26 08:07:03','2014-05-26 08:07:03');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (7,4,'A',1,'2014-05-26 08:25:12','2014-05-26 08:25:12');
insert  into `answer`(`id`,`question`,`content`,`right`,`created_at`,`updated_at`) values (8,4,'B',1,'2014-05-26 08:25:12','2014-05-26 08:25:12');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `course` */

insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (3,'Español','0000-00-00 00:00:00','0000-00-00 00:00:00');
insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (4,'Inglés','0000-00-00 00:00:00','0000-00-00 00:00:00');
insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (5,'Matemáticas','2014-05-22 08:24:34','2014-05-22 08:24:34');
insert  into `course`(`id`,`name`,`created_at`,`updated_at`) values (6,'Programación I','2014-05-26 01:20:03','2014-05-26 01:20:03');

/*Table structure for table `question` */

CREATE TABLE `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `content` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `test` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `question` */

insert  into `question`(`id`,`user`,`content`,`test`,`created_at`,`updated_at`) values (1,2,'¿Qué es una variable?',1,'2014-05-26 01:20:34','2014-05-26 01:20:34');
insert  into `question`(`id`,`user`,`content`,`test`,`created_at`,`updated_at`) values (2,2,'¿Qué es esto?',2,'2014-05-26 07:10:37','2014-05-26 07:10:37');
insert  into `question`(`id`,`user`,`content`,`test`,`created_at`,`updated_at`) values (3,2,'¿Qué es una vaca?',3,'2014-05-26 08:07:03','2014-05-26 08:07:03');
insert  into `question`(`id`,`user`,`content`,`test`,`created_at`,`updated_at`) values (4,2,'¿Qué es esto otro?',2,'2014-05-26 08:25:12','2014-05-26 08:25:12');

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

/*Table structure for table `routine` */

CREATE TABLE `routine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `course` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `routine` */

insert  into `routine`(`id`,`user`,`course`,`created_at`,`updated_at`) values (2,4,6,'2014-05-26 01:27:03','2014-05-26 01:27:03');
insert  into `routine`(`id`,`user`,`course`,`created_at`,`updated_at`) values (3,4,5,'2014-05-26 05:01:17','2014-05-26 05:01:17');
insert  into `routine`(`id`,`user`,`course`,`created_at`,`updated_at`) values (4,4,4,'2014-05-26 05:01:23','2014-05-26 05:01:23');

/*Table structure for table `solution` */

CREATE TABLE `solution` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `question` int(11) NOT NULL,
  `answer` int(11) NOT NULL,
  `right` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `solution` */

insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (5,4,3,5,1,'2014-05-26 10:17:36','2014-05-26 10:17:36');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (6,4,3,6,0,'2014-05-26 10:17:41','2014-05-26 10:17:41');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (7,4,3,6,0,'2014-05-26 10:19:19','2014-05-26 10:19:19');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (8,4,3,6,0,'2014-05-26 10:19:47','2014-05-26 10:19:47');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (9,4,2,4,0,'2014-05-26 10:19:59','2014-05-26 10:19:59');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (10,4,4,7,1,'2014-05-26 10:19:59','2014-05-26 10:19:59');
insert  into `solution`(`id`,`user`,`question`,`answer`,`right`,`created_at`,`updated_at`) values (11,4,1,1,1,'2014-05-26 10:20:19','2014-05-26 10:20:19');

/*Table structure for table `test` */

CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `course` int(11) NOT NULL,
  `challenge` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `test` */

insert  into `test`(`id`,`course`,`challenge`,`created_at`,`updated_at`) values (1,6,1,'2014-05-26 01:20:34','2014-05-26 01:20:34');
insert  into `test`(`id`,`course`,`challenge`,`created_at`,`updated_at`) values (2,6,3,'2014-05-26 07:10:36','2014-05-26 07:10:36');
insert  into `test`(`id`,`course`,`challenge`,`created_at`,`updated_at`) values (3,5,2,'2014-05-26 08:07:03','2014-05-26 08:07:03');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (2,'Administrador','administrador@gmail.com','$2y$10$sqK0Mj3nimaU2MfRGnduSOF3eK643iFLg.dRd8ePw8mIcAyaPbP1m','','',1,1,'iypLNP296kZ4qjMe7LRYsGKSE0eoBwjBAtn9GXFbyDj1cbk3JxMhWI7m9P1V','2014-05-18','2014-05-26');
insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (3,'Profesor','profesor@gmail.com','$2y$10$ZItwQRQtnpmPNNYoi5Z4BOJODK6Py7C98l.8/ybbwWoy6hVOBghVO','','',1,2,'JIYHilaoW0mMYbePdxsewvWRv8ebkgDZfOwbMA6w7MGMvnDtUGgYylRxYzC7','2014-05-18','2014-05-26');
insert  into `users`(`id`,`username`,`email`,`password`,`password_temp`,`code`,`active`,`tipo_user`,`remember_token`,`created_at`,`updated_at`) values (4,'Estudiante','estudiante@gmail.com','$2y$10$ehe1i6iB8lhEl.UNrtfdn.5YgspxJVafm8BEaKgcW7VZtDZ9cpIBm','','',1,3,'3esMFufG7bYlFszPUScJCzFq91k8qNaYERn5a0knN3XVc1ZBKVWNucZyfsGs','2014-05-18','2014-05-26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
