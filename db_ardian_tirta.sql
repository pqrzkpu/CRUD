/*
SQLyog Ultimate v10.42 
MySQL - 5.7.19 : Database - db_ardian_tirta
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `t_mahasiswa` */

DROP TABLE IF EXISTS `t_mahasiswa`;

CREATE TABLE `t_mahasiswa` (
  `mhs_id` int(3) NOT NULL AUTO_INCREMENT,
  `mhs_name` varchar(50) DEFAULT NULL,
  `mhs_class` varchar(25) DEFAULT NULL,
  `mhs_address` varchar(255) DEFAULT NULL,
  `mhs_major` varchar(50) DEFAULT NULL,
  `mhs_birth_place` varchar(50) DEFAULT NULL,
  `mhs_birth_date` date DEFAULT NULL,
  PRIMARY KEY (`mhs_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `t_mahasiswa` */

insert  into `t_mahasiswa`(`mhs_id`,`mhs_name`,`mhs_class`,`mhs_address`,`mhs_major`,`mhs_birth_place`,`mhs_birth_date`) values (7,'Jessica Iskanda','ADM-A','Jl. Kapt. A. Rivai Blok BII No. 08, Ilir Barat II','Administrasi & Bisnis','Jakarta','2000-08-09'),(6,'Abdul Milea ','TKJ-B','Jl. Pegangsaan Timur No. 56, Palembang','Teknik Komputer','Palembang','2000-09-10');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
