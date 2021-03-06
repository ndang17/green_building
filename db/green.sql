/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.26-MariaDB : Database - green
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`green` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `green`;

/*Table structure for table `eligibility_criteria` */

DROP TABLE IF EXISTS `eligibility_criteria`;

CREATE TABLE `eligibility_criteria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) DEFAULT NULL,
  `Status` enum('0','1') DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `eligibility_criteria` */

insert  into `eligibility_criteria`(`ID`,`Description`,`Status`) values 
(1,'Minimum luas gedung adalah 2500 m2','1'),
(2,'Kesediaan data gedung untuk diakses GBC Indonesia terkait proses sertifikasi','1'),
(3,'Fungsi gedung sesuai dengan peruntukan lahan berdasarkan RTRWsetempat','1'),
(4,'Kepemilikan AMDAL dan/atau rencana Upaya Pengelolaan Lingkungan (UKL) / Upaya Pemantauan Lingkungan (UPL)','1'),
(5,'Kesesuaian gedung terhadap standar keselamatan untuk kebakaran','1'),
(6,'Kesesuaian gedung terhadap standar ketahanan gempa','1'),
(7,'Kesesuaian gedung terhadap standar aksesibilitas difabel','1');

/*Table structure for table `eligibility_criteria_answ` */

DROP TABLE IF EXISTS `eligibility_criteria_answ`;

CREATE TABLE `eligibility_criteria_answ` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) NOT NULL,
  `EGID` int(11) NOT NULL,
  `Answer` enum('0','1') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `eligibility_criteria_answ` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `jobs` */

insert  into `jobs`(`ID`,`Description`) values 
(1,'Kontraktor'),
(2,'Developer'),
(3,'Konsultan Arsitektur'),
(4,'Manajemen Konstruksi'),
(5,'Building Manajemen');

/*Table structure for table `perpu` */

DROP TABLE IF EXISTS `perpu`;

CREATE TABLE `perpu` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTitle` int(11) NOT NULL,
  `Perpu` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `perpu` */

insert  into `perpu`(`ID`,`IDTitle`,`Perpu`) values 
(2,1,'<p>AREA DASAR HIJAU<span style=\"white-space:pre\">			</span></p><p>TUJUAN<span style=\"white-space:pre\">				</span></p><p>Memelihara atau memperluas kehijauan kota untuk meningkatkan kualitas iklim mikro, mengurangi CO2 dan zat polutan, mencegah erosi tanah, mengurangi beban sistem drainase, menjaga keseimbangan neraca air bersih dan sistem air tanah.<span style=\"white-space:pre\">				</span></p><p>TOLOK UKUR<span style=\"white-space:pre\">				</span></p><p><span style=\"white-space:pre\">		</span>Adanya area lansekap berupa vegetasi (softscape) yang bebas dari struktur bangunan dan struktur sederhana bangunan taman (hardscape) di atas permukaan tanah atau di bawah tanah.&nbsp; <span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">		</span>a. Untuk konstruksi baru, luas areanya adalah minimal 10% dari luas total lahan.<span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">		</span>b. Untuk renovasi utama (major renovation), luas areanya adalah minimal 50% dari ruang terbuka yang bebas basement dalam tapak <span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">				</span></p><p><span style=\"white-space:pre\">		</span>Area ini memiliki vegetasi mengikuti Permendagri No 1 tahun 2007 Pasal 13 (2a) dengan komposisi 50% lahan tertutupi luasan pohon ukuran kecil, ukuran sedang, ukuran besar, perdu setengah pohon, perdu, semak dalam ukuran dewasa, dengan jenis tanaman mempertimbangkan Peraturan Menteri PU No. 5/PRT/M/2008 mengenai Ruang Terbuka Hijau (RTH) Pasal&nbsp; 2.3.1&nbsp; tentang Kriteria Vegetasi untuk Pekarangan<span style=\"white-space:pre\">		</span></p><div><br></div>');

/*Table structure for table `q_label` */

DROP TABLE IF EXISTS `q_label`;

CREATE TABLE `q_label` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTitle` int(11) NOT NULL,
  `Code` varchar(20) DEFAULT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `Purpose` text,
  `TotalPoint` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `q_label` */

insert  into `q_label`(`ID`,`IDTitle`,`Code`,`Label`,`Purpose`,`TotalPoint`) values 
(1,1,'ADS1','Pemilihan Tampak','Menghindari pembangunan di area greenfields dan menghindari pembukaan',2),
(2,1,'ADS2','Aksebilitas Komunitas','Mendorong pembangunan di tempat yang telah memiliki jaringan konektivitas  dan meningkatkan pencapaian penggunaan gedung sehingga mempermudah masyarakat dalam menjalankan kegiatan sehari-hari dan menghindari penggunaan kendaraan bermotor.',2),
(3,1,'ADS3','Transportasi Umum','Mendorong pengguna gedung untuk menggunakan kendaraan umum massal dan  mengurangi kendaraan pribadi.',2),
(4,1,'ADS4','Fasilitas Pengguna Sepeda','Mendorong penggunaan sepeda bagi pengguna gedung dengan memberikan  fasilitas yang memadai sehingga dapat mengurangi penggunaan kendaraan bermotor.',2),
(5,1,'ADS5','Lansekap pada Lahan','Memelihara atau memperluas kehijauan kota untuk meningkatkan kualitas iklim  mikro, mengurangi CO  dan zat polutan, mencegah erosi tanah, mengurangi 2 beban sistem drainase, menjaga keseimbangan neraca air bersih dan sistem air tanah.',3),
(6,1,'ADS6','Iklim Mikro','Meningkatkan kualitas iklim mikro di sekitar gedung yang mencakup kenyamanan  manusia dan habitat sekitar gedung.',3),
(7,1,'ADS7','Manajemen Air Limpasan Hujan','Mengurangi beban sistem drainase lingkungan dari kuantitas limpasan air hujan  dengan sistem manajemen air hujan secara terpadu.',3),
(8,2,'EEC1','Efisiensi dan Konservasi Energi','Mendorong penghematan konsumsi energi melalui aplikasi langkah-langkah  efisiensi energi',15),
(9,2,'ECC2','Pencahayaan Alami','Mendorong penggunaan pencahayaan alami yang optimal untuk mengurangi  konsumsi energi dan mendukung desain bangunan yang memungkinkan pencahayaan alami semaksimal mungkin.',4);

/*Table structure for table `q_question` */

DROP TABLE IF EXISTS `q_question`;

CREATE TABLE `q_question` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTitle` int(11) NOT NULL,
  `IDLabel` int(11) NOT NULL,
  `Order` varchar(11) DEFAULT NULL,
  `Question` text,
  `Type` enum('1','2','3') DEFAULT NULL COMMENT '1 = Berkar, 2 = pilihan ganda, 3 = Isi langsung',
  `Point` int(11) DEFAULT NULL COMMENT 'Jika Type = 3 gunakan poin ini',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `q_question` */

insert  into `q_question`(`ID`,`IDTitle`,`IDLabel`,`Order`,`Question`,`Type`,`Point`) values 
(1,1,5,'1A','Adanya area lansekap berupa vegetasi (softscape) yang bebas dari bangunan taman (hardscape) yang terletak di atas permukaan tanah seluas minimal 40% luas total lahan. Luas area yang diperhitungkan adalah termasuk yang tersebut di Prasyarat 1, taman di atas basement,  roof garden, terrace garden, dan wall garden, dengan mempertimbangkan Peraturan Menteri PU No. 5/PRT/M/2008 mengenai Ruang Terbuka Hijau (RTH) Pasal 2.3.1  tentang Kriteria Vegetasi untuk Pekarangan.','3',1),
(2,1,1,'2','question ok','2',NULL),
(3,1,1,'2','tes type 1','1',NULL);

/*Table structure for table `q_title` */

DROP TABLE IF EXISTS `q_title`;

CREATE TABLE `q_title` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(100) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `q_title` */

insert  into `q_title`(`ID`,`Code`,`Title`) values 
(1,'ADS','AREA DASAR HIJAU'),
(2,'EEC','EFISIENSI DAN KONSERVASI ENERGI'),
(3,'WAC','KONSERVASI AIR'),
(4,'MRC','SUMBER DAN SIKLUS MATERIAL'),
(5,'IHC','KESEHATAN DAN KENYAMANAN DALAM RUANG'),
(6,'BEM','MANAJEMEN LINGKUNGAN BANGUNAN');

/*Table structure for table `q_type_1` */

DROP TABLE IF EXISTS `q_type_1`;

CREATE TABLE `q_type_1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1` */

/*Table structure for table `q_type_1_range` */

DROP TABLE IF EXISTS `q_type_1_range`;

CREATE TABLE `q_type_1_range` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Start` int(11) DEFAULT NULL,
  `End` int(11) DEFAULT NULL,
  `Point` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1_range` */

/*Table structure for table `q_type_2` */

DROP TABLE IF EXISTS `q_type_2`;

CREATE TABLE `q_type_2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `Point` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `q_type_2` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Position` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Hp` varchar(15) DEFAULT NULL,
  `JobID` int(11) DEFAULT NULL,
  `JobOther` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `LandArea` float DEFAULT NULL COMMENT 'luas lahan',
  `BuildingArea` float DEFAULT NULL COMMENT 'luas bangunan',
  `CreateAt` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
