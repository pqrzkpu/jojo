/*
SQLyog Ultimate v10.42 
MySQL - 5.7.19 : Database - db_nutech
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `t_barang` */

DROP TABLE IF EXISTS `t_barang`;

CREATE TABLE `t_barang` (
  `brg_id` int(5) NOT NULL AUTO_INCREMENT,
  `brg_nama` varchar(50) DEFAULT NULL,
  `brg_group` int(3) DEFAULT NULL,
  `brg_harga_beli` int(8) DEFAULT NULL,
  `brg_harga_jual` int(8) DEFAULT NULL,
  `brg_stok` int(3) DEFAULT NULL,
  `brg_photo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`brg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `t_barang` */

insert  into `t_barang`(`brg_id`,`brg_nama`,`brg_group`,`brg_harga_beli`,`brg_harga_jual`,`brg_stok`,`brg_photo`) values (1,'SYR-1',1,1550,1850,30,'sawi-putih.jpg'),(2,'BUA-1',2,3200,5000,30,'nanas.jpg'),(3,'BDP-1',3,800,1000,30,'jahe.jpg'),(5,'SYR-2',1,3200,4000,30,'seledri.jpg'),(7,'SYR-3',1,3000,3200,30,'tomat.jpg'),(16,'LKP-1',4,34000,32000,30,'file_telur-bebek.jpg'),(17,'LKP-2',4,23000,24500,30,'file_ayam-kampung.jpg');

/*Table structure for table `t_group` */

DROP TABLE IF EXISTS `t_group`;

CREATE TABLE `t_group` (
  `group_id` int(3) NOT NULL AUTO_INCREMENT,
  `group_code` varchar(3) DEFAULT NULL,
  `group_name` varchar(25) DEFAULT NULL,
  `group_counter` varchar(3) DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `t_group` */

insert  into `t_group`(`group_id`,`group_code`,`group_name`,`group_counter`) values (1,'SYR','Sayuran','2'),(2,'BUA','Buah','1'),(3,'BDP','Bumbu Dapur','1'),(4,'LPK','Lauk Pauk','2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
