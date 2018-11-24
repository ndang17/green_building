/*
SQLyog Community v13.0.1 (64 bit)
MySQL - 10.1.26-MariaDB : Database - apgt1743_green
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`apgt1743_green` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `apgt1743_green`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(20) DEFAULT NULL,
  `Name` varchar(200) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `PasswordTxt` varchar(255) DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`ID`,`Username`,`Name`,`Password`,`PasswordTxt`,`LastLogin`) values 
(1,'Admin','Rifai','7cf6ca99540d171dc10a791a339a0536','toor123',NULL),
(2,'ndang','Nandang','202cb962ac59075b964b07152d234b70','123',NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=latin1;

/*Data for the table `eligibility_criteria_answ` */

insert  into `eligibility_criteria_answ`(`ID`,`UserID`,`EGID`,`Answer`) values 
(1,1,1,'0'),
(2,1,2,'0'),
(3,1,3,'0'),
(8,2,1,'0'),
(9,2,2,'0'),
(10,2,3,'0'),
(11,2,4,'0'),
(12,2,5,'0'),
(13,2,6,'0'),
(14,2,7,'0'),
(15,3,1,'0'),
(16,3,2,'0'),
(17,3,3,'0'),
(18,3,4,'0'),
(19,3,5,'0'),
(20,3,6,'0'),
(21,3,7,'0'),
(22,4,1,'0'),
(23,4,2,'0'),
(24,4,3,'0'),
(25,4,4,'0'),
(26,4,5,'0'),
(27,4,6,'0'),
(28,4,7,'0'),
(29,5,1,'0'),
(30,5,2,'0'),
(31,5,3,'0'),
(32,5,4,'0'),
(33,5,5,'0'),
(34,5,6,'0'),
(35,5,7,'0'),
(36,6,1,'0'),
(37,6,2,'0'),
(38,6,3,'0'),
(39,6,4,'0'),
(40,6,5,'0'),
(41,6,6,'0'),
(42,6,7,'0'),
(43,7,1,'1'),
(44,7,2,'1'),
(45,7,3,'1'),
(46,7,4,'1'),
(47,7,5,'0'),
(48,7,6,'1'),
(49,7,7,'0'),
(53,1,4,'1'),
(54,1,5,'0'),
(55,1,6,'1'),
(57,2,1,'0'),
(58,2,2,'0'),
(59,2,3,'0'),
(60,2,4,'0'),
(61,2,5,'0'),
(62,2,6,'1'),
(63,2,7,'1'),
(64,3,1,'0'),
(65,3,2,'0'),
(66,3,3,'0'),
(67,3,4,'0'),
(68,3,5,'0'),
(69,3,6,'0'),
(70,3,7,'0');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `perpu` */

insert  into `perpu`(`ID`,`IDTitle`,`Perpu`) values 
(2,1,'<p>AREA DASAR HIJAU<span style=\"white-space:pre\">			</span></p><p>TUJUAN<span style=\"white-space:pre\">				</span></p><p>Memelihara atau memperluas kehijauan kota untuk meningkatkan kualitas iklim mikro, mengurangi CO2 dan zat polutan, mencegah erosi tanah, mengurangi beban sistem drainase, menjaga keseimbangan neraca air bersih dan sistem air tanah.<span style=\"white-space:pre\">				</span></p><p>TOLOK UKUR<span style=\"white-space:pre\">				</span></p><p><span style=\"white-space:pre\">		</span>Adanya area lansekap berupa vegetasi (softscape) yang bebas dari struktur bangunan dan struktur sederhana bangunan taman (hardscape) di atas permukaan tanah atau di bawah tanah.&nbsp; <span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">		</span>a. Untuk konstruksi baru, luas areanya adalah minimal 10% dari luas total lahan.<span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">		</span>b. Untuk renovasi utama (major renovation), luas areanya adalah minimal 50% dari ruang terbuka yang bebas basement dalam tapak <span style=\"white-space:pre\">		</span></p><p><span style=\"white-space:pre\">				</span></p><p><span style=\"white-space:pre\">		</span>Area ini memiliki vegetasi mengikuti Permendagri No 1 tahun 2007 Pasal 13 (2a) dengan komposisi 50% lahan tertutupi luasan pohon ukuran kecil, ukuran sedang, ukuran besar, perdu setengah pohon, perdu, semak dalam ukuran dewasa, dengan jenis tanaman mempertimbangkan Peraturan Menteri PU No. 5/PRT/M/2008 mengenai Ruang Terbuka Hijau (RTH) Pasal&nbsp; 2.3.1&nbsp; tentang Kriteria Vegetasi untuk Pekarangan<span style=\"white-space:pre\">		</span></p><div><br></div>'),
(3,2,'<p>EFISIENSI DAN KONSERVASI ENERGI</p><p>a. Pemasangan Sub-meter</p><p>TUJUAN</p><p>Memantau penggunaan energi sehingga dapat menjadi dasar penerapan&nbsp;</p><p>TOLOK UKUR</p><p>Memasang&nbsp; kWh meter untuk mengukur konsumsi listrik pada setiap&nbsp; kelompok beban dan sistem peralatan, yang meliputi:</p><p>o Sistem tata udara</p><p>o Sistem tata cahaya dan kotak kontak</p><p>o Sistem beban lainnya&nbsp;</p><p><br></p><p>b.&nbsp;Perhitungan OTTV&nbsp;&nbsp;</p><p>TUJUAN</p><p>Mendorong sosialisasi arti selubung bangunan gedung yang baik untuk penghematan energi.&nbsp;&nbsp;</p><p>TOLOK UKUR</p><p>Menghitung dengan cara perhitungan OTTV berdasarkan SNI 03-6389- 2011 atau SNI edisi terbaru tentang Konservasi Energi selubung bangunan pada Bangunan Gedung.&nbsp;</p>'),
(4,3,'<p>KONSERVASI AIR</p><p>a. Meteran Air</p><p>TUJUAN</p><p>Memantau penggunaan air sehingga dapat menjadi dasar penerapan manajemen air yang lebih baik. manajemen energi yang lebih baik.&nbsp;</p><p>TOLOK UKUR</p><p>Pemasangan alat meteran air (volume meter) yang ditempatkan di lokasi- lokasi tertentu pada sistem distribusi air, sebagai berikut:</p><p>o Satu volume meter di setiap sistem keluaran sumber air bersih seperti sumber PDAM atau air tanah.&nbsp;</p><p>o Satu volume meter untuk memonitor keluaran sistem air daur ulang.</p><p>o Satu volume meter dipasang untuk mengukur tambahan keluaran air bersih apabila dari sistem daur ulang tidak mencukupi.&nbsp;</p><p><br></p><p>b.&nbsp;Perhitungan Penggunaan Air&nbsp;</p><p>TUJUAN</p><p>Memahami perhitungan menggunakan worksheet perhitungan air dari GBC Indonesia untuk mengetahui simulasi penggunaan air pada saat tahap operasi gedung penghematan energi.</p><p>TOLOK UKUR</p><p>Mengis ceklist yang telah disediakan.<br></p>'),
(5,4,'<p>SUMBER DAN SIKLUS MATERIAL</p><p>Refigeran fundamental&nbsp;</p><p>TUJUAN</p><p>Mencegah pemakaian bahan dengan potensi merusak ozon yang tinggi manajemen air yang lebih baik manajemen energi yang lebih baik.&nbsp;</p><p>TOLOK UKUR</p><p>Pemasangan alat meteran air (volume meter) yang ditempatkan di lokasi-Tidak menggunakan chloro fluoro-carbon (CFC) sebagai refrigeran dan halon sebagai bahan pemadam kebakaran.</p>'),
(9,5,'<p style=\"text-align: center; \"><b>KESEHATAN DAN KENYAMANAN DALAM RUANG</b></p><p style=\"text-align: center; \"><br></p><p style=\"text-align: center; \">Introduksi Udara Luar <span style=\"white-space:pre\">				</span></p><p style=\"text-align: center; \">Tujuan<span style=\"white-space:pre\">				</span></p><p style=\"text-align: center; \">\"Menjaga dan meningkatkan kualitas udara di dalam ruangan dengan melakukan</p><p style=\"text-align: center; \">introduksi udara luar ruang sesuai dengan kebutuhan laju ventilasi untuk kesehatan pengguna gedung. manajemen air yang lebih baik.manajemen energi yang lebih baik. \"<span style=\"white-space:pre\">				</span></p><p style=\"text-align: center; \">Tolok Ukur<span style=\"white-space:pre\">				</span></p><p style=\"text-align: center; \">\"Desain ruangan yang menunjukkan adanya potensi introduksi udara luar&nbsp;</p><p style=\"text-align: center; \">minimal sesuai dengan Standar ASHRAE 62.1-2007 atau Standar ASHRAE edisi terbaru\"</p>'),
(12,6,'<p><b style=\"background-color: rgb(255, 255, 0);\">MANAJEMEN LINGKUNGAN BANGUNAN</b><br></p><p>Dasar Pengelolaan Sampah<span style=\"white-space:pre\">				</span></p><p>Tujuan<span style=\"white-space:pre\">				</span></p><p>\"Mendorong gerakan pemilahan sampah secara sederhana yang mempermudah&nbsp;</p><p>proses daur ulang.\"<span style=\"white-space:pre\">				</span></p><p>Tolok Ukur<span style=\"white-space:pre\">				</span></p><p>\"Adanya instalasi atau fasilitas untuk memilah dan mengumpulkan sampah&nbsp;</p><p>sejenis sampah rumah tangga (UU No. 18 Tahun 2008) berdasarkan jenis</p><p>organik, anorganik, dan B3\"<span style=\"white-space:pre\">				</span></p><div><br></div>');

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
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

/*Data for the table `q_label` */

insert  into `q_label`(`ID`,`IDTitle`,`Code`,`Label`,`Purpose`,`TotalPoint`) values 
(3,1,'ADS3','Transportasi Umum','Mendorong pengguna gedung untuk menggunakan kendaraan umum massal dan  mengurangi kendaraan pribadi.',2),
(5,1,'ADS5','Lansekap pada Lahan','Memelihara atau memperluas kehijauan kota untuk meningkatkan kualitas iklim  mikro, mengurangi CO  dan zat polutan, mencegah erosi tanah, mengurangi 2 beban sistem drainase, menjaga keseimbangan neraca air bersih dan sistem air tanah.',3),
(6,1,'ADS6','Iklim Mikro','Meningkatkan kualitas iklim mikro di sekitar gedung yang mencakup kenyamanan  manusia dan habitat sekitar gedung.',3),
(7,1,'ADS7','Manajemen Air Limpasan Hujan','Mengurangi beban sistem drainase lingkungan dari kuantitas limpasan air hujan  dengan sistem manajemen air hujan secara terpadu.',3),
(8,2,'EEC1','Efisiensi dan Konservasi Energi','Mendorong penghematan konsumsi energi melalui aplikasi langkah-langkah  efisiensi energi',15),
(9,2,'EEC2','Pencahayaan Alami','Mendorong penggunaan pencahayaan alami yang optimal untuk mengurangi  konsumsi energi dan mendukung desain bangunan yang memungkinkan pencahayaan alami semaksimal mungkin.',4),
(10,2,'EEC3','Ventilasi','Mendorong penggunaan ventilasi yang efisien di area publik (non nett lettable  area) untuk mengurangi konsumsi energi.',1),
(11,2,'EEC4','Pengaruh Perubahan Iklim','Memberikan pemahaman bahwa pola konsumsi energi yang berlebihan akan berpengaruh terhadap perubahan iklim.',1),
(12,2,'EEC5','Energi Terbarukan dalam Tapak','Mendorong penggunaan sumber energi baru dan terbarukan yang   bersumber dari dalam lokasi tapak bangunan.',5),
(13,3,'WAC1','Pengurangan Penggunaan Air','Meningkatkan penghematan penggunaan air bersih yang akan mengurangi beban  konsumsi air bersih dan mengurangi keluaran air limbah.',8),
(14,3,'WAC2','Fitur Air','Mendorong upaya penghematan air dengan pemasangan fitur air efisiensi tinggi.',3),
(15,3,'WAC3','Daur Ulang Air','Menyediakan air dari sumber daur ulang yang bersumber dari air limbah gedung  untuk mengurangi kebutuhan air dari sumber utama.',3),
(16,3,'WAC4','Sumber Air Alternatif','Menggunakan sumber air alternatif yang diproses sehingga menghasilkan air  bersih  untuk mengurangi kebutuhan air dari sumber utama.',2),
(17,3,'WAC5','Penampungan Air Hujan','Mendorong penggunaan air hujan atau limpasan air hujan sebagai salah satu  sumber air untuk mengurangi kebutuhan air dari sumber utama.',3),
(18,3,'WAC6','Efisiensi Penggunaan Air Lansekap','Meminimalisasi penggunaan sumber air bersih dari air tanah dan PDAM untuk  kebutuhan irigasi lansekap dan menggantinya dengan sumber lainnya.',2),
(19,4,'MRC1','Penggunaan Gedung dan Material','Menggunakan material bekas bangunan lama dan/atau dari tempat lain untuk mengurangi penggunaan bahan mentah yang baru, sehingga dapat mengurangi  limbah pada pembuangan akhir serta memperpanjang usia pemakaian suatu bahan material.',2),
(20,4,'MRC2','Material Ramah Lingkungan','Mengurangi jejak ekologi dari proses ekstraksi bahan mentah dan proses   produksi material.',3),
(21,4,'MRC3','Penggunaan Refrigeran tanpa ODP','Menggunakan bahan yang tidak memiliki potensi merusak ozon.',2),
(22,4,'MRC4','Kayu Bersertifikat','Menggunakan bahan baku kayu yang dapat dipertanggungjawabkan asal-usulnya  untuk melindungi kelestarian hutan.',2),
(23,4,'MRC5','Material Prafabrikasi','Meningkatkan efisiensi dalam penggunaan material dan mengurangi sampah konstruksi.',3),
(24,4,'MRC6','Material Regional','Mengurangi jejak karbon dari moda transportasi untuk distribusi dan mendorong  pertumbuhan ekonomi dalam negeri.',2),
(25,5,'IHC1','Pemantauan Kadar CO2','Memantau konsentrasi karbondioksida (CO2) dalam mengatur masukan udara segar sehingga menjaga kesehatan pengguna gedung.',1),
(26,5,'IHC2','Kendali Asap Rokok di Lingkungan','Mengurangi tereksposnya para pengguna gedung dan permukaan material interior dari lingkungan yang tercemar asap rokok sehingga kesehatan pengguna gedung dapat terpelihara.',2),
(27,5,'IHC3','Polutan Kimia','Mengurangi polusi udara ruang dari emisi material bangunan yang dapat mengganggu kenyamanan dan kesehatan pekerja konstruksi dan pengguna gedung.',3),
(28,5,'IHC4','Pemandangan keluar Gedung','Mengurangi kelelahan mata dengan memberikan pemandangan jarak jauh dan menyediakan koneksi visual ke luar gedung.',1),
(29,5,'IHC5','Kenyamanan Visual','Mencegah terjadinya gangguan visual akibat tingkat pencahayaan yang tidak sesuai dengan daya akomodasi mata.',1),
(30,5,'IHC6','Kenyamanan Termal','Menjaga kenyamanan suhu dan kelembaban udara ruangan yang dikondisikan stabil untuk meningkatkan produktivitas pengguna gedung.',1),
(31,5,'IHC7','Tingkat Kebisingan','Menjaga tingkat kebisingan di dalam ruangan pada tingkat yang optimal.',1),
(32,6,'BEM1','GP Sebagai Anggota Tim Proyek','Mengarahkan langkah-langkah desain suatu apgt1743_green building sejak tahap awal sehingga memudahkan tercapainya suatu desain yang memenuhi rating.',1),
(33,6,'BEM2','Polusi dari Aktivitas Konstruksi','Mendorong pengurangan sampah yang dibawa ke tempat pembuangan akhir (TPA) dan polusi dari proses konstruksi. Memiliki rencana manajemen sampah konstruksi yang terdiri atas:',2),
(34,6,'BEM3','Pengelolaan Sampah Tingkat Lanjut','Mendorong manajemen kebersihan dan sampah secara terpadu sehingga mengurangi beban TPA.',2),
(35,6,'BEM4','Sistem Komisioning yang Baik dan Benar','Melaksanakan komisioning yang baik dan benar pada bangunan agar kinerja yang dihasilkan sesuai dengan perencanaan awal.',3),
(36,6,'BEM5','Penyerahan Data apgt1743_green Building','Melengkapi database implementasi apgt1743_green building di Indonesia untuk mempertajam standar-standar dan bahan penelitian.',2),
(37,6,'BEM6','Kesepakatan Dalam Melakukan Aktivitas Fit Out','Mengimplementasikan prinsip apgt1743_green building saat fit out gedung.',1),
(38,6,'BEM7','Survei Pengguna Gedung','Mengukur kenyamanan pengguna gedung melalui survei yang baku terhadap pengaruh desain dan sistem pengoperasian gedung.',2),
(39,1,'ADS1','Pemilihan Tampak','Menghindari pembangunan di area apgt1743_greenfields dan menghindari pembukaan',2),
(40,1,'ADS2','Aksebilitas Komunitas','Mendorong pembangunan di tempat yang telah memiliki jaringan konektivitas  dan meningkatkan pencapaian penggunaan gedung sehingga mempermudah masyarakat dalam menjalankan kegiatan sehari-hari dan menghindari penggunaan kendaraan bermotor.',2),
(41,1,'ADS4','Fasilitas Pengguna Sepeda','Mendorong penggunaan sepeda bagi pengguna gedung dengan memberikan  fasilitas yang memadai sehingga dapat mengurangi penggunaan kendaraan bermotor.',2);

/*Table structure for table `q_question` */

DROP TABLE IF EXISTS `q_question`;

CREATE TABLE `q_question` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDTitle` int(11) NOT NULL,
  `IDLabel` int(11) NOT NULL,
  `Order` varchar(11) DEFAULT NULL,
  `Question` text,
  `Type` enum('1','2','3') DEFAULT NULL COMMENT '1 = Berkar, 2 = pilihan ganda, 3 = Isi langsung',
  `Point` float DEFAULT NULL COMMENT 'Jika Type = 3 gunakan poin ini',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

/*Data for the table `q_question` */

insert  into `q_question`(`ID`,`IDTitle`,`IDLabel`,`Order`,`Question`,`Type`,`Point`) values 
(14,2,8,'2','Menggunakan lampu dengan daya pencahayaan lebih hemat sebesar 15% daripada daya pencahayaan yang tercantum dalam SNI 03 6197- 2011 atau SNI edisi terbaru tentang Konservasi Energi pada Sistem Pencahayaan.\n1. Menggunakan 100% ballast frekuensi tinggi (elektronik) untuk ruang kerja.\n2. Zonasi pencahayaan untuk seluruh ruang kerja yang dikaitkan dengan sensor gerak (motion sensor).\n3. Penempatan tombol lampu dalam jarak pencapaian tangan pada saat buka pintu.','3',2),
(15,2,8,'3','Lift menggunakan traffic management system yang sudah lulus traffic analysis atau menggunakan regenerative drive system atau Menggunakan fitur hemat energi pada lift, menggunakan sensor gerak, atau sleep mode pada eskalator.','3',1),
(16,2,8,'4','Menggunakan peralatan AC dengan COP minimum 10% lebih besar dari SNI 03-6390-2011 atau SNI edisi terbaru tentang Konservasi Energi pada Sistem Tata Udara Bangunan Gedung','3',2),
(19,2,10,'1','Tidak mengkondisikan (tidak memberi AC) ruang WC, tangga, koridor, dan lobi lift, serta melengkapi ruangan tersebut dengan ventilasi alami ataupun mekanik','3',1),
(20,2,11,'1','Menyerahkan perhitungan pengurangan emisi CO  yang didapatkan dari 2 selisih kebutuhan energi antara gedung designed dan gedung baseline dengan menggunakan grid emission factor yang telah ditetapkan dalam Keputusan DNA pada B/277/Dep.III/LH/01/2009','3',1),
(21,2,12,'1','Menggunakan sumber energi baru dan terbarukan. Setiap 0,5% daya listrik yang dibutuhkan gedung yang dapat dipenuhi oleh sumber energi terbarukan.','2',NULL),
(22,3,13,'1','Konsumsi air bersih dengan jumlah tertinggi 80% dari sumber primer 1 tanpa mengurangi jumlah kebutuhan per orang sesuai dengan SNI 03- 7065-2005.','3',1),
(25,3,15,'1','Penggunaan seluruh air bekas pakai (grey water) yang telah di daur ulang untuk kebutuhan sistem flushing atau cooling tower.','2',NULL),
(26,3,16,'1','Menggunakan salah satu dari tiga alternatif sebagai berikut: air kondensasi AC, air bekas wudhu, atau air hujan/Menggunakan lebih dari satu sumber air dari ketiga alternatif di atas/Menggunakan teknologi yang memanfaatkan air laut atau air danau atau air sungai untuk keperluan air bersih sebagai sanitasi, irigasi dan kebutuhan lainnya .','2',NULL),
(27,3,17,'1','Menyediakan instalasi tangki penampungan air hujan kapasitas 20% dari jumlah air hujan yang jatuh di atas atap bangunan yang dihitung menggunakan nilai intensitas curah hujan sebesar 50 mm/hari.Menyediakan instalasi tangki penampungan air hujan berkapasitas 35% dari perhitungan di atas.Menyediakan instalasi tangki penampungan air hujan berkapasitas 50% dari perhitungan di atas.','2',NULL),
(28,3,18,'1','Seluruh air yang digunakan untuk irigasi gedung tidak berasal dari sumber  air tanah dan/atau PDAM','3',1),
(29,3,18,'2','Menerapkan teknologi yang inovatif untuk irigasi yang dapat mengontrol kebutuhan air untuk lansekap yang tepat, sesuai dengan kebutuhan tanaman.','3',1),
(31,4,20,'1','Menggunakan material yang memiliki sertifikat sistem manajemen lingkungan pada proses produksinya minimal bernilai 30% dari total biaya material. Sertifikat dinilai sah bila masih berlaku dalam rentang waktu proses pembelian dalam konstruksi berjalan.','3',1),
(32,4,20,'2','Menggunakan material yang merupakan hasil proses daur ulang minimal bernilai 5% dari total biaya material.','3',1),
(33,4,20,'3','Menggunakan material yang bahan baku utamanya berasal dari sumber daya (SD) terbarukan dengan masa panen jangka pendek (<10 tahun) minimal bernilai 2% dari total biaya material.','3',1),
(34,4,21,'1','Tidak menggunakan bahan perusak ozon pada seluruh sistem pendingin gedung','3',2),
(35,4,22,'1','Menggunakan bahan material kayu yang bersertifikat legal sesuai dengan Peraturan Pemerintah tentang asal kayu (seperti faktur angkutan kayu 1 olahan/FAKO, sertifikat perusahaan, dan lain-lain) dan sah terbebas dari 2 perdagangan kayu ilegal sebesar 100% biaya total material kayu','3',1),
(36,4,22,'2','Jika 30% dari butir di atas menggunakan kayu bersertifikasi dari pihak 1 Lembaga Ekolabel Indonesia (LEI) atau Forest Stewardship Council (FSC).','3',1),
(37,4,23,'1','Desain yang menggunakan material modular atau prafabrikasi (tidak termasuk equipment) dari total biaya material.','3',3),
(38,4,24,'1','Menggunakan material yang lokasi asal bahan baku utama dan pabrikasinya berada di dalam radius 1.000 km dari lokasi proyek minimal bernilai 50% dari total biaya material.','3',1),
(39,4,24,'2','Menggunakan material yang lokasi asal bahan baku utama dan pabrikasinya berada dalam wilayah Republik Indonesia bernilai minimal 80% dari total biaya material.','3',1),
(40,5,25,'1','Ruangan dengan kepadatan tinggi, yaitu < 2.3 m2 per orang dilengkapi dengan instalasi sensor gas karbon dioksida (CO2) yang memiliki mekanisme untuk mengatur jumlah ventilasi udara luar sehingga konsentrasi C02 di dalam ruangan tidak lebih dari 1.000 ppm, sensor diletakkan 1,5 m di atas lantai dekat return air grille atau return air duct.','3',1),
(41,5,26,'1','Memasang tanda “Dilarang Merokok di Seluruh Area Gedung” dan tidak menyediakan bangunan/area khusus untuk merokok di dalam gedung. Apabila tersedia, bangunan/area merokok di luar gedung, minimal berada pada jarak 5 m dari pintu masuk, outdoor air intake, dan bukaan jendela.','3',2),
(42,5,27,'1','Menggunakan cat dan coating yang mengandung kadar volatile organic \ncompounds (VOCs) rendah, yang ditandai dengan label/sertifikasi yang\ndiakui GBC Indonesia.','3',1),
(43,5,27,'2','Menggunakan produk kayu komposit dan laminating adhesive dengan syarat memiliki kadar emisi formaldehida rendah, yang ditandai dengan label/sertifikasi yang diakui GBC Indonesia','3',1),
(44,5,27,'3','Menggunakan material lampu yang kandungan merkurinya pada toleransi maksimum yang disetujui GBC Indonesia dan tidak menggunakan material yang mengandung asbestos.','3',1),
(45,5,28,'1','Apabila 75% dari net lettable area (NLA) menghadap langsung ke pemandangan luar yang dibatasi bukaan transparan bila ditarik suatu garis lurus.','3',1),
(46,5,29,'1','Menggunakan lampu dengan iluminansi (tingkat pencahayaan) ruangan sesuai dengan SNI 03-6197-2011 tentang Konservasi Energi pada Sistem Pencahayaan.','3',1),
(47,5,30,'','Menetapkan perencanaan kondisi termal ruangan secara umum pada suhu 250 C dan kelembaban relatif 60%','3',1),
(48,5,31,'1','Tingkat kebisingan pada 90% dari nett lettable area (NLA) tidak lebih dari atau sesuai dengan SNI 03-6386-2000 tentang Spesifikasi Tingkat Bunyi dan Waktu Dengung dalam Bangunan Gedung dan Perumahan (kriteria desain yang direkomendasikan).','3',1),
(50,6,32,'1','Melibatkan minimal seorang tenaga ahli yang sudah bersertifikat apgt1743_greenSHIP Professional (GP), yang bertugas untuk memandu proyek hingga mendapatkan sertifikat apgt1743_greenSHIP.','3',1),
(51,6,33,'1','Limbah padat, dengan menyediakan area pengumpulan, pemisahan, dan sistem pencatatan. Pencatatan dibedakan berdasarkan limbah padat yang dibuang ke TPA, digunakan kembali, dan didaur ulang oleh pihak ketiga.','3',1),
(52,6,33,'2','Limbah cair, dengan menjaga kualitas seluruh buangan air yang timbul dari aktivitas konstruksi agar tidak mencemari drainase kota','3',1),
(53,6,34,'1','Mengolah limbah organik gedung yang dilakukan secara mandiri maupun bekerjasama dengan pihak ketiga sehingga menambah nilai manfaat dan dapat mengurangi dampak lingkungan.','3',1),
(54,6,34,'2','Mengolah limbah anorganik gedung yang dilakukan secara mandiri maupun bekerjasama dengan pihak ketiga sehingga menambah nilai manfaat dan dapat mengurangi dampak lingkungan.','3',1),
(55,6,35,'1','Melakukan prosedur testing- commissioning sesuai dengan petunjuk GBC Indonesia, termasuk pelatihan terkait untuk optimalisasi kesesuaian fungsi dan kinerja peralatan/sistem dengan perencanaan dan acuannya.','3',2),
(56,6,35,'2','Memastikan seluruh measuring adjusting instrument telah terpasang pada saat konstruksi dan memperhatikan kesesuaian antara desain dan spesifikasi teknis terkait komponen proper commissioning.','3',1),
(57,6,36,'1','Menyerahkan data implementasi apgt1743_green building.','3',1),
(58,6,36,'2','Memberi pernyataan bahwa pemilik gedung akan menyerahkan data implementasi apgt1743_green building dari bangunannya dalam waktu 12 bulan setelah tanggal sertifikasi  dan suatu pusat data energi Indonesia yang akan ditentukan kemudian.','3',1),
(59,6,37,'1','Memiliki surat perjanjian dengan penyewa gedung (tenant) untuk gedung yang disewakan atau POS untuk gedung yang digunakan sendiri, yang terdiri atas:\na. Penggunaan kayu yang bersertifikat untuk material fit-out\nb. Pelaksanaan pelatihan yang akan dilakukan oleh manajemen gedung\nc. Pelaksanaan manajemen indoor air quality (IAQ) setelah konstruksi fit-out. Implementasi dalam bentuk Perjanjian Sewa (lease agreement) atau POS.','3',1),
(60,6,38,'1','Memberi pernyataan bahwa pemilik gedung akan mengadakan survei suhu dan kelembaban paling lambat 12 bulan setelah tanggal sertifikasi dan menyerahkan laporan hasil survei paling lambat 15 bulan setelah tanggal sertifikasi kepada GBC Indonesia.\nCatatan: Apabila hasilnya lebih dari 20% responden menyatakan ketidaknyamanannya, maka pemilik gedung setuju untuk melakukan perbaikan selambat-lambatnya 6 bulan setelah pelaporan hasil survei.','3',2),
(62,1,3,'2','Menyediakan fasilitas jalur pedestrian di dalam area gedung untuk menuju ke stasiun transportasi umum terdekat yang aman dan nyaman  dengan mempertimbangkan Peraturan Menteri Pekerjaan Umum 30/PRT/M/2006 mengenai Pedoman Teknis Fasilitas dan Aksesibilitas pada Bangunan Gedung dan Lingkungan Lampiran 2B.','3',1),
(63,1,5,'1','Adanya area lansekap berupa vegetasi (softscape) yang bebas dari bangunan taman (hardscape) yang terletak di atas permukaan tanah seluas minimal 40% luas total lahan. Luas area yang diperhitungkan adalah termasuk yang tersebut di Prasyarat 1, taman di atas basement,  roof garden, terrace garden, dan wall garden, dengan mempertimbangkan Peraturan Menteri PU No. 5/PRT/M/2008 mengenai Ruang Terbuka Hijau (RTH) Pasal 2.3.1  tentang Kriteria Vegetasi untuk Pekarangan.','3',1),
(64,1,5,'2','Bila tolok ukur 1 dipenuhi, setiap penambahan 5% area lansekap dari luas total lahan mendapat 1 nilai.','3',1),
(65,1,5,'3','Penggunaan tanaman yang telah dibudidayakan secara lokal dalam skala provinsi, sebesar 60% luas tajuk dewasa terhadap luas area lansekap pada ASD 5 tolok ukur 1.','3',1),
(68,1,6,'3','Desain lansekap berupa vegetasi (softscape) pada sirkulasi utama pejalan kaki menunjukkan adanya pelindung dari panas akibat radiasi matahari / Desain lansekap berupa vegetasi (softscape) pada sirkulasi utama pejalan kaki menunjukkan adanya pelindung dari terpaan angin kencang.','3',1),
(70,1,7,'2','Menunjukkan adanya upaya penanganan pengurangan beban banjir lingkungan dari luar lokasi bangunan.','3',1),
(72,1,7,'3','Menggunakan teknologi-teknologi yang dapat mengurangi debit limpasan air hujan.','3',1),
(75,1,39,'2','Melakukan revitalisasi dan pembangunan di atas lahan yang bernilai  negatif dan tak terpakai karena bekas pembangunan atau dampak negatif  pembangunan.','2',NULL),
(77,1,40,'2','Membuka akses pejalan kaki selain ke jalan utama di luar tapak yang menghubungkannya dengan jalan sekunder dan/atau lahan milik orang lain sehingga tersedia akses ke minimal tiga fasilitas umum sejauh 300 m jarak pencapaian pejalan kaki.','2',NULL),
(78,1,3,'1','1. Adanya halte atau stasiun  transportasi umum dalam jangkauan 300 m (walking distance) dari gerbang lokasi bangunan dengan tidak memperhitungkan panjang jembatan penyeberangan dan ramp. \n2. Menyediakan shuttle bus untuk pengguna tetap gedung dengan jumlah unit minimum untuk 10% pengguna tetap gedung','3',1),
(79,1,41,'1','Adanya tempat parkir sepeda yang aman sebanyak satu unit parkir per 20 pengguna gedung hingga maksimal 100 unit parkir sepeda.','3',1),
(80,1,41,'2','Apabila tolok ukur 1 diatas terpenuhi, perlu tersedianya shower sebanyak 1 unit untuk setiap 10 parkir sepeda.','3',1),
(81,1,6,'1','Menggunakan berbagai material untuk menghindari efek heat island pada area atap gedung sehingga nilai albedo (daya refleksi panas matahari) minimum 0,3 sesuai dengan perhitungan / Menggunakan apgt1743_green roof sebesar 50% dari luas atap yang tidak digunakan untuk mechanical electrical (ME), dihitung dari luas tajuk','3',1),
(82,1,6,'2','Menggunakan berbagai material untuk menghindari efek heat island pada area perkerasan non-atap sehingga nilai albedo (daya refleksi panas matahari) minimum 0,3 sesuai dengan perhitungan.','2',NULL),
(84,1,7,'1','Pengurangan beban volume limpasan air hujan ke jaringan drainase kota dari lokasi bangunan hingga 50%, yang dihitung menggunakan nilai intensitas curah hujan sebesar 50 mm/hari. atau Pengurangan beban volume limpasan air hujan ke jaringan drainase kota 3 dari lokasi bangunan hingga 85%, yang dihitung menggunakan nilai 2 intensitas curah hujan sebesar 50 mm/hari.','3',1),
(85,2,8,'','Nilai OTTV sesuai dengan SNI 03-6389-2011 atau SNI edisi terbaru tentang Konservasi Energi Selubung Bangunan pada Bangunan Gedung.Apabila tolok ukur 1 dipenuhi, penurunan per 2.5% .','2',NULL),
(86,2,9,'1','Penggunaaan cahaya alami secara optimal sehingga minimal 30% luas lantai yang digunakan untuk bekerja mendapatkan intensitas cahaya alami minimal sebesar 300 lux. Perhitungan dapat dilakukan dengan cara manual atau dengan  software. Khusus untuk pusat perbelanjaan, minimal 20% luas lantai nonservice mendapatkan intensitas cahaya alami minimal sebesar 300 lux','2',NULL),
(87,2,9,'2','Jika butir satu dipenuhi lalu ditambah dengan adanya lux sensor untuk otomatisasi pencahayaan buatan apabila intensitas cahaya alami kurang dari 300 lux, didapatkan tambahan  2 nilai','2',NULL),
(88,3,13,'2','Setiap penurunan konsumsi air bersih dari sumber primer sebesar 5% sesuai dengan acuan pada tolok ukur 1 adalah:','2',NULL),
(89,3,14,'1','Penggunaan fitur air  yang sesuai dengan kapasitas buangan di bawah  standar maksimum kemampuan alat keluaran air, sejumlah minimal 25% dari total pengadaan produk fitur air .','2',NULL),
(90,4,19,'1','Menggunakan kembali material bekas, baik dari bangunan lama maupun tempat lain, berupa bahan struktur utama, fasad, plafon, lantai, partisi, 1 kusen, dan dinding, setara minimal 10% dari total biaya material.','2',NULL),
(92,1,39,'1','Memilih daerah pembangunan yang dilengkapi minimal delapan dari 12 prasarana sarana kota.','1',NULL),
(93,1,40,'1','Terdapat jenis fasilitas umum dalam jarak pencapaian jalan utama sejauh 1500 m dari tapak','1',NULL);

/*Table structure for table `q_title` */

DROP TABLE IF EXISTS `q_title`;

CREATE TABLE `q_title` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Code` varchar(100) DEFAULT NULL,
  `Title` varchar(200) DEFAULT NULL,
  `Point` float DEFAULT NULL,
  `Percentage` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `q_title` */

insert  into `q_title`(`ID`,`Code`,`Title`,`Point`,`Percentage`) values 
(1,'ADS','AREA DASAR HIJAU',17,16.8),
(2,'EEC','EFISIENSI DAN KONSERVASI ENERGI',26,25.7),
(3,'WAC','KONSERVASI AIR',21,20.8),
(4,'MRC','SUMBER DAN SIKLUS MATERIAL',14,13.9),
(5,'IHC','KESEHATAN DAN KENYAMANAN DALAM RUANG',10,9.9),
(6,'BEM','MANAJEMEN LINGKUNGAN BANGUNAN',13,12.9);

/*Table structure for table `q_type_1` */

DROP TABLE IF EXISTS `q_type_1`;

CREATE TABLE `q_type_1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Label` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1` */

insert  into `q_type_1`(`ID`,`IDQ`,`Label`) values 
(62,92,'Jaringan Jalan'),
(63,92,'Jaringan penerangan dan Listrik'),
(64,92,'Jaringan Drainase'),
(65,92,'STP Kawasan'),
(66,92,'Sistem Pembuangan Sampah'),
(67,92,'Sistem Pemadam Kebakaran'),
(68,92,'Jaringan Fiber Optik'),
(69,92,'Danau Buatan (Minimal 1% luas area)'),
(70,92,'Jalur Pejalan Kaki Kawasan'),
(71,92,'Jalur Pemipaan Gas'),
(72,92,'Jaringan Telepon'),
(73,92,'Jaringan Air bersih'),
(74,93,'Bank'),
(75,93,'Taman Umum'),
(76,93,'Parkiran umum (Diluar lahan)'),
(77,93,'Warung/Toko Kelontong'),
(78,93,'Gedung Serbaguna'),
(79,93,'Pos Keamanan/Polisi'),
(80,93,'Tempat Ibadah'),
(81,93,'Rumah makan/Kantin'),
(82,93,'Fotocopy umum'),
(83,93,'Fasilitas kesehatan'),
(84,93,'kantor pos'),
(85,93,'kantor pemadam kebakaran'),
(86,93,'Terminal/Stasiun Transportasi Umum'),
(87,93,'Perpustakaan'),
(88,93,'Lapangan Olahraga'),
(89,93,'Tempat Penitipan Anak'),
(90,93,'Apotek'),
(91,93,'Kantor Pemerintahan'),
(92,93,'Pasar');

/*Table structure for table `q_type_1_range` */

DROP TABLE IF EXISTS `q_type_1_range`;

CREATE TABLE `q_type_1_range` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Start` float DEFAULT NULL,
  `End` float DEFAULT NULL,
  `Point` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1_range` */

insert  into `q_type_1_range`(`ID`,`IDQ`,`Start`,`End`,`Point`) values 
(17,92,1,3,0.25),
(18,92,4,6,0.5),
(19,92,7,9,0.75),
(20,92,10,12,1),
(21,93,1,5,0.15),
(22,93,6,10,0.3),
(23,93,11,15,0.45),
(24,93,16,19,0.6);

/*Table structure for table `q_type_2` */

DROP TABLE IF EXISTS `q_type_2`;

CREATE TABLE `q_type_2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `Point` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_2` */

insert  into `q_type_2`(`ID`,`IDQ`,`Label`,`Point`) values 
(20,21,'Ya',5),
(21,21,'Tidak',0),
(35,25,'Ya',3),
(36,25,'Tidak',0),
(37,26,'Ya',2),
(38,26,'Tidak',0),
(39,27,'Ya',3),
(40,27,'Tidak',0),
(45,37,'<10%',1),
(46,37,'20-30%',2),
(47,37,'>30%',3),
(58,75,'< 50%',0.5),
(59,75,'> 50%',1),
(60,77,'< 300',0.2),
(61,77,'> 300',0.4),
(62,82,'< 0.3',0.5),
(63,82,'> 0.3',1),
(64,85,'<2,5%',0.5),
(65,85,'2.5 %',1),
(66,85,'2.6 % - 5%',2),
(67,85,'5,1 % - 7,5%',3),
(68,85,'7,6 % - 10%',4),
(69,85,'10,1 % - 12.5%',5),
(70,85,'12,6% - 15%',6),
(71,85,'15,1% - 17,5%',7),
(72,85,'17,6% - 20%',8),
(73,85,'20,1% - 22,5%',9),
(74,85,'>22,6%',10),
(75,86,'<300',2),
(76,86,'>300',1),
(77,87,'<300',2),
(78,87,'>300',1),
(79,88,'<5%',0.5),
(80,88,'5-10%',1),
(81,88,'11-15 %',2),
(82,88,'16-20 %',3),
(83,88,'21-25 %',4),
(84,88,'26-30%',5),
(85,88,'31-35 %',6),
(86,88,'>36%',7),
(87,89,'<25%',0.5),
(88,89,'25%',1),
(89,89,'26-50 %',2),
(90,89,'51-75%',2.5),
(91,89,'>75%',3),
(92,90,'<10%',0.5),
(93,90,'10%',1),
(94,90,'11-20 %',1.5),
(95,90,'>20%',2);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) DEFAULT NULL,
  `Position` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Hp` varchar(15) DEFAULT NULL,
  `JobID` int(11) DEFAULT NULL,
  `JobOther` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(200) DEFAULT NULL,
  `Location` varchar(200) DEFAULT NULL,
  `LandArea` float DEFAULT NULL COMMENT 'luas lahan',
  `BuildingArea` float DEFAULT NULL COMMENT 'luas bangunan',
  `CreateAt` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`ID`,`Name`,`Position`,`Email`,`Password`,`Hp`,`JobID`,`JobOther`,`ProjectName`,`Location`,`LandArea`,`BuildingArea`,`CreateAt`) values 
(1,'Meydita Nirmala P','IT','n@mail.com','d41d8cd98f00b204e9800998ecf8427e',NULL,1,'','Kuningan City','Jalan Kuningan Jakarta Selatan',300,200,'2018-11-19 21:00:29'),
(2,'Nandang','i','n@mail.com','d41d8cd98f00b204e9800998ecf8427e',NULL,1,'','s','sa',20,30,'2018-11-20 09:50:47');

/*Table structure for table `user_step_log` */

DROP TABLE IF EXISTS `user_step_log`;

CREATE TABLE `user_step_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` int(11) NOT NULL,
  `IDTitle` int(11) DEFAULT NULL COMMENT '0 = tahap input data projek, 1 = ujicoba tahap 1, 2 = test thp 2, 3 = test thp 3 sampai dengan 6',
  `TotalPoint` float(5,2) DEFAULT NULL,
  `Percentage` float(5,2) DEFAULT NULL,
  `UpdateAt` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `user_step_log` */

insert  into `user_step_log`(`ID`,`IDUser`,`IDTitle`,`TotalPoint`,`Percentage`,`UpdateAt`) values 
(1,1,1,9.40,9.29,'2018-11-19 21:01:58'),
(2,1,2,16.00,15.82,'2018-11-19 21:02:38'),
(3,1,3,21.00,20.80,'2018-11-19 21:03:33'),
(4,1,4,11.50,11.42,'2018-11-19 21:04:08'),
(5,1,5,8.00,7.92,'2018-11-19 21:04:38'),
(6,1,6,11.00,10.92,'2018-11-19 21:04:58'),
(7,2,1,15.45,15.27,'2018-11-20 09:51:47'),
(8,2,2,19.00,18.78,'2018-11-20 09:52:33'),
(9,2,3,21.00,20.80,'2018-11-20 09:52:59'),
(10,2,4,14.00,13.90,'2018-11-20 09:53:22'),
(11,2,5,10.00,9.90,'2018-11-20 09:53:39'),
(12,2,6,13.00,12.90,'2018-11-20 09:53:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
