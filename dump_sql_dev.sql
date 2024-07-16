/*
SQLyog Ultimate v9.10 
MySQL - 8.0.31 : Database - mercedes_shes_form
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*USE `mercedes_shes_form`;*/

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `lastname` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_name` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_concept` longtext COLLATE utf8mb3_unicode_ci,
  `company_website` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `company_composition` longtext COLLATE utf8mb3_unicode_ci,
  `company_creation_date` date DEFAULT NULL COMMENT '(DC2Type:date_immutable)',
  `company_location` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `has_instagram` tinyint(1) DEFAULT NULL,
  `instagram_account_id` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `problematic` longtext COLLATE utf8mb3_unicode_ci,
  `motivation` longtext COLLATE utf8mb3_unicode_ci,
  `video_filename` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `mentor1` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `mentor2` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `mentor3` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `mentor4` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `mentor5` varchar(100) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `future_news` longtext COLLATE utf8mb3_unicode_ci,
  `optin_phone_call` tinyint(1) DEFAULT NULL,
  `optin_email_sms` tinyint(1) DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `parcours` longtext COLLATE utf8mb3_unicode_ci,
  `accompagnement_rse` longtext COLLATE utf8mb3_unicode_ci,
  `pratique_responsable` longtext COLLATE utf8mb3_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `contact` */

insert  into `contact`(`id`,`lastname`,`firstname`,`email`,`phone_number`,`company_name`,`company_concept`,`company_website`,`company_composition`,`company_creation_date`,`company_location`,`has_instagram`,`instagram_account_id`,`problematic`,`motivation`,`video_filename`,`mentor1`,`mentor2`,`mentor3`,`mentor4`,`mentor5`,`future_news`,`optin_phone_call`,`optin_email_sms`,`created_at`,`parcours`,`accompagnement_rse`,`pratique_responsable`) values (1,'vsv','ds','vdd@dvd.com','0123456789','vsvdsv','vdfb',NULL,'dfbd',NULL,'bfd',1,'fefef','dfdg','bdfb',NULL,'fef','fe','fe','fef','fef','fefe',0,0,'2024-02-14 15:18:42','','',NULL),(2,'MARI2','MARI1','test@mail.com','0123456789','MARI sociale','MARI explique','www.google.com','3','2023-03-02','paris',1,'blabla','MARI1 problematique','MARI pourquoi',NULL,'MARI1','MARI2','MARI3','MARI4','MARI5','non MARI1',1,1,'2024-02-15 10:11:28','MARI1 demarche RSE','accomapagnement RSE',NULL),(3,'sdvs','vsdvsd','vsdvdv@vd.com','0123456789','vsdvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sdvs-vsdvsd-vsdvs-video-2-65cf72317a216.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 15:33:21',NULL,NULL,NULL),(4,'vsdvs','vsdv','dvsv@vdvd.com','0123456789','321',NULL,NULL,NULL,NULL,NULL,0,NULL,NULL,NULL,'vsdvs-vsdv-321-video-2-65cf7dc406ac6.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 16:22:44',NULL,NULL,NULL),(5,'fzfez','efzfzfe','fzefzf@fef.com','0123456789','dfdfwd',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,'fzfez-efzfzfe-dfdfwd-video-2-65cf824097840.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 16:41:52',NULL,NULL,NULL),(6,'rzerzerzre','tzetzte','rzrere@vdvdv.com','0123456789','dzaf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'rzerzerzre-tzetzte-dzaf-video-2-65cf82d389e1a.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 16:44:19',NULL,NULL,NULL),(7,'fsdfs','fsds','fsfsdf@fdfsdf.com','0123456789','fsfddsf',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,'fsdfs-fsds-fsfddsf-video-2-65cf83980c04f.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 16:47:36',NULL,NULL,NULL),(8,'vsdvs','vsvsd','vsvdsdv@vdv.com','0123456789','fsdf',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,'vsdvs-vsvsd-fsdf-video-65cf8742ea667.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:03:14',NULL,NULL,NULL),(9,'vsdvs','vsdvds','vsdvsdv@vdv.com','0123456789','vsdvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:08:52',NULL,NULL,NULL),(10,'vxcvcx','vxcvxv','vxvcxcv@vcv.com','0123456789','cqcssq',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:10:52',NULL,NULL,NULL),(11,'fzfez','fefz','fzefezf@fef.com','0123456789','fsdfds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:20:39',NULL,NULL,NULL),(12,'fsdfdf','ssfsdf','fsdfdsf@fdf.com','0123456789','sdss',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,'fsdfdf-ssfsdf-sdss-video-65cf8d8fbd76f.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:30:07',NULL,NULL,NULL),(13,'gfdgfd','gfdgfdg','fgdgfd@gfg.com','0123456789','zfez',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gfdgfd-gfdgfdg-zfez-video-2-65cf92fa53661.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 17:53:14',NULL,NULL,NULL),(14,'gfdgd','dfgdf','gfdgfdg@gfgf.com','0123456789','sfdsf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'gfdgd-dfgdf-sfdsf-video-2-65cf9527af1b2.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 18:02:31',NULL,NULL,NULL),(15,'vsvds','sdvs','vsdvds@vdvd.com','0123456789','vsvds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'vsvds-sdvs-vsvds-video-2-65cf960b06d7c.mp4',NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-16 18:06:19',NULL,NULL,NULL),(16,'zfez','fzfezf','fzeffe@fef.com','0123456789','fsdfdsf','fzfe','fzef','fzefezf','2023-03-03','paris',1,NULL,'ergeg','ggeg','zfez-fzfezf-fsdfdsf-video-2-65d777128524d.mp4',NULL,NULL,NULL,NULL,NULL,'dgfdg',1,1,'2024-02-22 17:32:18','fezfezf','gerg','fzefzef'),(17,'f','fefzf','feffe@ffe.com','0123456789','vsvdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-23 07:46:32',NULL,NULL,NULL),(18,'tetset','test','tets@teet.com','0123456789','sdvs',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-23 14:25:11',NULL,NULL,NULL),(19,'dvsv','vsv','dvsdv@vdv.om','0123456789','fsdfdsf',NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-23 15:49:25',NULL,NULL,NULL),(20,'vfvs','vsvsdv','fvsfvs@vfv.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-23 15:52:13',NULL,NULL,NULL),(21,'dbfdfb','vdfdf','svdv@vdv.com','0123456789','vdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-02-23 16:43:58',NULL,NULL,NULL),(22,'php8','test','test@fefe.com','0123456789','php 8 test',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-12 12:48:28',NULL,NULL,NULL),(23,'dadzd','dedad','dzdzd@dzd.com','0123456789','dsfsdf',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-13 18:16:12',NULL,NULL,NULL),(24,'gdfgfd','dfgfdg','gdfgfdg@gfg.com','0123456789','dvfd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-13 18:18:08',NULL,NULL,NULL),(25,'vdvfd','vdvf','vdfvfv@vf.com','0123456789','cdcsdcds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-13 18:22:07',NULL,NULL,NULL),(26,'fzefz','efezfzf','fzefezf@fefe.com','0123456789','vdsvds',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 13:31:26',NULL,NULL,NULL),(27,'vsdv','vsvd','vdvdv@vdv.com','0123456789','vsdvdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 14:53:05',NULL,NULL,NULL),(28,'vsdv','vsdvs','vsvd@vdv.com','0123456789','vdsvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:35:25',NULL,NULL,NULL),(29,'sdvs','vdsvdsv','vsdvdv@gregrrg.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:37:11',NULL,NULL,NULL),(30,'vsdvs','vsvds','vdssdv@vdv.com','0123456789','vsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:39:57',NULL,NULL,NULL),(31,'vdsvdsv','vsdvdsv','vdsvs@vdv.com','0123456789','vsdvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:41:16',NULL,NULL,NULL),(32,'vsdvs','vdsvdsv','vsdvs@vdv.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:45:32',NULL,NULL,NULL),(33,'vsdv','vsvd','vsdv@vdv.com','0123456789','sdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:48:06',NULL,NULL,NULL),(34,'vsdvs','vdsvdsv','vsdvd@vdvd.com','0123456789','vsdvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:53:43',NULL,NULL,NULL),(35,'vsdv','vsvds','vsdv@vvdvd.com','0123456789','vdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:55:32',NULL,NULL,NULL),(36,'vsv','vsvd','vsdv@ddv.com','0123456789','vs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 16:59:51',NULL,NULL,NULL),(37,'vsvd','vsv','vdvd@vdvd.com','0123456789','vsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:05:37',NULL,NULL,NULL),(38,'vdsv','vsvd','vsvd@vvdv.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:07:49',NULL,NULL,NULL),(39,'vdsv','vsdv','vsvd@dvd.cm','0123456789','vsvd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:11:15',NULL,NULL,NULL),(40,'vdfvf','vv','vsdvs@vezfe.com','0123456789','vs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:15:15',NULL,NULL,NULL),(41,'csqc','cqc','cscs@sc.com','0123456789','dvdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:21:43',NULL,NULL,NULL),(42,'vsdv','vsvd','vdvd@vdv.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:23:51',NULL,NULL,NULL),(43,'dvsvds','vsvds','vsdvdsv@e.com','0123456789','cqvqs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:29:02',NULL,NULL,NULL),(44,'vdsvs','vsvd','vsvd@vdv.com','0123456789','svdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:33:49',NULL,NULL,NULL),(45,'bdbf','bdfbfd','bdfbf@zfz.com','0123456789','vsdvs',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:39:10',NULL,NULL,NULL),(46,'vsdv','vdsv','vsvd@dv.com','0123456789','vsvd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:41:53',NULL,NULL,NULL),(47,'dvsvd','svdsv','dvsdv@dv.com','0123456789','vsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:45:54',NULL,NULL,NULL),(48,'vdsvs','dsvdsv','dvsvds@def.com','0123456789','vdsv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:48:01',NULL,NULL,NULL),(49,'vsv','vsvd','vdvd@dv.com','0123456789','vsdv',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,0,'2024-03-14 17:55:46',NULL,NULL,NULL);

/*Table structure for table `doctrine_migration_versions` */

DROP TABLE IF EXISTS `doctrine_migration_versions`;

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

/*Data for the table `doctrine_migration_versions` */

insert  into `doctrine_migration_versions`(`version`,`executed_at`,`execution_time`) values ('DoctrineMigrations\\Version20211026150608','2024-02-14 12:51:18',68),('DoctrineMigrations\\Version20211026160552','2024-02-14 12:51:18',31),('DoctrineMigrations\\Version20211110164449','2024-02-14 12:51:18',35),('DoctrineMigrations\\Version20211213104342','2024-02-14 12:51:18',70);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
