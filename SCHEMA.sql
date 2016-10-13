/*
SQLyog Ultimate v10.42 
MySQL - 5.5.27 : Database - tiketpesawat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`tiketpesawat` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `tiketpesawat`;

/*Table structure for table `detailpemesanan` */

DROP TABLE IF EXISTS `detailpemesanan`;

CREATE TABLE `detailpemesanan` (
  `KodePemesanan` varchar(40) NOT NULL DEFAULT '',
  `KodeTiket` varchar(30) DEFAULT NULL,
  `Harga` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`KodePemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `detailpemesanan` */

/*Table structure for table `tbbandara` */

DROP TABLE IF EXISTS `tbbandara`;

CREATE TABLE `tbbandara` (
  `KodeBandara` varchar(10) NOT NULL COMMENT 'Kode Bandara Menurut IATA',
  `NamaBandara` varchar(20) NOT NULL,
  `Kota` varchar(30) NOT NULL,
  PRIMARY KEY (`KodeBandara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbbandara` */

insert  into `tbbandara`(`KodeBandara`,`NamaBandara`,`Kota`) values ('BDO','Husesin Sastranegara','Bandung'),('CGK','Soekarno-Hatta','Jakarta'),('DPS','Ngurah Rai','Bali'),('JOG','Adisucipto','Yogyakarta'),('KNO','Kualanamu','Medan'),('SUB','Juanda','Surabaya'),('UPG','Sultan Hasanuddin','Makassar');

/*Table structure for table `tbmaskapai` */

DROP TABLE IF EXISTS `tbmaskapai`;

CREATE TABLE `tbmaskapai` (
  `KodeMaskapai` varchar(3) NOT NULL COMMENT 'Kode Penerbangan Maskapai IATA',
  `NamaMaskapai` varchar(20) NOT NULL,
  PRIMARY KEY (`KodeMaskapai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tbmaskapai` */

insert  into `tbmaskapai`(`KodeMaskapai`,`NamaMaskapai`) values ('GA','Garuda Indonesia'),('JT','Lion Air'),('QG','Citilink'),('QZ','AirAsia');

/*Table structure for table `tbpembatalan` */

DROP TABLE IF EXISTS `tbpembatalan`;

CREATE TABLE `tbpembatalan` (
  `KodePembatalan` int(11) NOT NULL AUTO_INCREMENT,
  `KodePemesanan` varchar(30) DEFAULT NULL,
  `JumlahTiketBatal` int(11) DEFAULT NULL,
  `TglBatal` date DEFAULT NULL,
  `TotalBayar` double(10,0) DEFAULT NULL,
  PRIMARY KEY (`KodePembatalan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbpembatalan` */

/*Table structure for table `tbpembayaran` */

DROP TABLE IF EXISTS `tbpembayaran`;

CREATE TABLE `tbpembayaran` (
  `KodePembayaran` int(11) NOT NULL AUTO_INCREMENT,
  `KodePemesanan` varchar(30) DEFAULT NULL,
  `JenisPembayaran` varchar(30) DEFAULT NULL,
  `NamaBank` varchar(255) DEFAULT NULL,
  `NoRekening` varchar(255) DEFAULT NULL,
  `AtasNama` varchar(255) DEFAULT NULL,
  `Nominal` decimal(10,0) DEFAULT NULL,
  `TglTransfer` date DEFAULT NULL,
  `UploadFoto` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KodePembayaran`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbpembayaran` */

/*Table structure for table `tbpemesanan` */

DROP TABLE IF EXISTS `tbpemesanan`;

CREATE TABLE `tbpemesanan` (
  `KodePemesanan` int(11) NOT NULL AUTO_INCREMENT,
  `KodeUser` varchar(30) DEFAULT NULL,
  `KodePesawat` varchar(30) DEFAULT NULL,
  `TglPesan` date DEFAULT NULL,
  `JamPesan` varchar(255) DEFAULT NULL,
  `TotalBayar` decimal(10,0) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KodePemesanan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `tbpemesanan` */

/*Table structure for table `tbpesawat` */

DROP TABLE IF EXISTS `tbpesawat`;

CREATE TABLE `tbpesawat` (
  `KodePesawat` int(11) NOT NULL AUTO_INCREMENT,
  `TipePesawat` varchar(30) DEFAULT NULL,
  `HargaEksekutif` decimal(10,0) NOT NULL,
  `HargaBisnis` decimal(10,0) NOT NULL,
  `HargaEkonomi` decimal(10,0) NOT NULL,
  `Kapasitas` int(3) DEFAULT NULL,
  `RutePesawat` varchar(255) DEFAULT NULL,
  `PotonganBatal` double(10,0) DEFAULT NULL,
  `JumlahTiket` int(11) DEFAULT NULL,
  `SisaTiket` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KodePesawat`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tbpesawat` */

insert  into `tbpesawat`(`KodePesawat`,`TipePesawat`,`HargaEksekutif`,`HargaBisnis`,`HargaEkonomi`,`Kapasitas`,`RutePesawat`,`PotonganBatal`,`JumlahTiket`,`SisaTiket`,`Keterangan`) values (1,'QZ',500000,400000,300000,100,'Bali Ke Bandung',10,100,'100','');

/*Table structure for table `tbtiket` */

DROP TABLE IF EXISTS `tbtiket`;

CREATE TABLE `tbtiket` (
  `KodeTiket` int(11) NOT NULL AUTO_INCREMENT,
  `NomorTiket` varchar(255) DEFAULT NULL,
  `KodePesawat` varchar(30) DEFAULT NULL,
  `Asal` varchar(255) DEFAULT NULL,
  `Tujuan` varchar(30) DEFAULT NULL,
  `TglBerangkat` date DEFAULT NULL,
  `JamBerangkat` varchar(40) DEFAULT NULL,
  `JamTiba` varchar(30) DEFAULT NULL,
  `HargaTiket` double(10,0) DEFAULT NULL,
  `StatusTiket` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KodeTiket`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=latin1;

/*Data for the table `tbtiket` */

insert  into `tbtiket`(`KodeTiket`,`NomorTiket`,`KodePesawat`,`Asal`,`Tujuan`,`TglBerangkat`,`JamBerangkat`,`JamTiba`,`HargaTiket`,`StatusTiket`) values (1,'QZ-1-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(2,'QZ-2-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(3,'QZ-3-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(4,'QZ-4-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(5,'QZ-5-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(6,'QZ-6-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(7,'QZ-7-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(8,'QZ-8-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(9,'QZ-9-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(10,'QZ-10-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(11,'QZ-11-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(12,'QZ-12-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(13,'QZ-13-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(14,'QZ-14-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(15,'QZ-15-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(16,'QZ-16-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(17,'QZ-17-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(18,'QZ-18-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(19,'QZ-19-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(20,'QZ-20-EX','1','DPS','BDO','2016-10-01','12:00','14:00',500000,'ready'),(21,'QZ-21-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(22,'QZ-22-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(23,'QZ-23-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(24,'QZ-24-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(25,'QZ-25-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(26,'QZ-26-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(27,'QZ-27-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(28,'QZ-28-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(29,'QZ-29-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(30,'QZ-30-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(31,'QZ-31-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(32,'QZ-32-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(33,'QZ-33-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(34,'QZ-34-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(35,'QZ-35-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(36,'QZ-36-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(37,'QZ-37-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(38,'QZ-38-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(39,'QZ-39-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(40,'QZ-40-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(41,'QZ-41-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(42,'QZ-42-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(43,'QZ-43-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(44,'QZ-44-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(45,'QZ-45-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(46,'QZ-46-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(47,'QZ-47-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(48,'QZ-48-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(49,'QZ-49-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(50,'QZ-50-BI','1','DPS','BDO','2016-10-01','12:00','14:00',400000,'ready'),(51,'QZ-51-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(52,'QZ-52-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(53,'QZ-53-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(54,'QZ-54-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(55,'QZ-55-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(56,'QZ-56-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(57,'QZ-57-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(58,'QZ-58-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(59,'QZ-59-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(60,'QZ-60-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(61,'QZ-61-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(62,'QZ-62-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(63,'QZ-63-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(64,'QZ-64-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(65,'QZ-65-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(66,'QZ-66-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(67,'QZ-67-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(68,'QZ-68-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(69,'QZ-69-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(70,'QZ-70-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(71,'QZ-71-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(72,'QZ-72-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(73,'QZ-73-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(74,'QZ-74-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(75,'QZ-75-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(76,'QZ-76-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(77,'QZ-77-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(78,'QZ-78-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(79,'QZ-79-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(80,'QZ-80-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(81,'QZ-81-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(82,'QZ-82-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(83,'QZ-83-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(84,'QZ-84-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(85,'QZ-85-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(86,'QZ-86-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(87,'QZ-87-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(88,'QZ-88-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(89,'QZ-89-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(90,'QZ-90-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(91,'QZ-91-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(92,'QZ-92-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(93,'QZ-93-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(94,'QZ-94-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(95,'QZ-95-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(96,'QZ-96-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(97,'QZ-97-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(98,'QZ-98-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(99,'QZ-99-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready'),(100,'QZ-100-EK','1','DPS','BDO','2016-10-01','12:00','14:00',300000,'ready');

/*Table structure for table `tbuser` */

DROP TABLE IF EXISTS `tbuser`;

CREATE TABLE `tbuser` (
  `KodeUser` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(50) DEFAULT NULL,
  `Password` varchar(50) DEFAULT NULL,
  `NamaLengkap` varchar(255) DEFAULT NULL,
  `JenisKelamin` varchar(20) DEFAULT NULL,
  `Umur` int(3) DEFAULT NULL,
  `Pekerjaan` varchar(100) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `Kota` varchar(255) DEFAULT NULL,
  `Provinsi` varchar(100) DEFAULT NULL,
  `NoTelp` varchar(14) DEFAULT NULL,
  `NoHP` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `LevelUser` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`KodeUser`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbuser` */

insert  into `tbuser`(`KodeUser`,`Username`,`Password`,`NamaLengkap`,`JenisKelamin`,`Umur`,`Pekerjaan`,`Alamat`,`Kota`,`Provinsi`,`NoTelp`,`NoHP`,`Email`,`LevelUser`) values (1,'bagus','12345','Bagus Mantonafi','Laki-laki',17,'Pelajar','Jl. Gunung Batur','Denpasar','Bali','089656557453','089656557453','bagus.mantonafi@gmail.com','member'),(3,'udin','','Sholahudin','Laki-laki',18,'Pelajar','Jl. Gunung Agung','Denpasar','Bali','081111111','08222222','sholahudinbest@gmail.com','member'),(4,'adimas01','3knifeeyes','adimas putra istiawan','Laki-laki',17,'pelajar','Jl. Gunung cemara','denpasar','bali','08811890773','08811890773','adimasistiawan01@gmail.com','member'),(5,'adimasputra','22939e2865a61c8483fcceb6b9e37d06','adimas putra','Laki-laki',17,'pelajar','jalan gunung ringin','denpasar','bali','0361456789','08811890773','adimasistiawan01@gmail.com','member');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
