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
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

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
(32,6,'BEM1','GP Sebagai Anggota Tim Proyek','Mengarahkan langkah-langkah desain suatu green building sejak tahap awal sehingga memudahkan tercapainya suatu desain yang memenuhi rating.',1),
(33,6,'BEM2','Polusi dari Aktivitas Konstruksi','Mendorong pengurangan sampah yang dibawa ke tempat pembuangan akhir (TPA) dan polusi dari proses konstruksi. Memiliki rencana manajemen sampah konstruksi yang terdiri atas:',2),
(34,6,'BEM3','Pengelolaan Sampah Tingkat Lanjut','Mendorong manajemen kebersihan dan sampah secara terpadu sehingga mengurangi beban TPA.',2),
(35,6,'BEM4','Sistem Komisioning yang Baik dan Benar','Melaksanakan komisioning yang baik dan benar pada bangunan agar kinerja yang dihasilkan sesuai dengan perencanaan awal.',3),
(36,6,'BEM5','Penyerahan Data Green Building','Melengkapi database implementasi green building di Indonesia untuk mempertajam standar-standar dan bahan penelitian.',2),
(37,6,'BEM6','Kesepakatan Dalam Melakukan Aktivitas Fit Out','Mengimplementasikan prinsip green building saat fit out gedung.',1),
(38,6,'BEM7','Survei Pengguna Gedung','Mengukur kenyamanan pengguna gedung melalui survei yang baku terhadap pengaruh desain dan sistem pengoperasian gedung.',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

/*Data for the table `q_question` */

insert  into `q_question`(`ID`,`IDTitle`,`IDLabel`,`Order`,`Question`,`Type`,`Point`) values 
(1,1,1,'1','Memilih daerah pembangunan yang dilengkapi minimal delapan dari 12 prasarana sarana kota.?','1',NULL),
(2,1,1,'2','Melakukan revitalisasi dan pembangunan di atas lahan yang bernilai  negatif dan tak terpakai karena bekas pembangunan atau dampak negatif  pembangunan.','2',NULL),
(3,1,2,'1','Terdapat minimal tujuh jenis fasilitas umum dalam jarak pencapaian jalan utama sejauh 1500 m dari tapak','1',NULL),
(4,1,2,'2','Membuka akses pejalan kaki selain ke jalan utama di luar tapak yang menghubungkannya dengan jalan sekunder dan/atau lahan milik orang lain sehingga tersedia akses ke minimal tiga fasilitas umum sejauh 300 m jarak pencapaian pejalan kaki.','2',NULL),
(5,1,2,'3','Menyediakan fasilitas/akses yang aman, nyaman, dan bebas dari perpotongan dengan akses kendaraan bermotor untuk menghubungkan secara langsung bangunan dengan bangunan lain, di mana terdapat minimal tiga fasilitas umum dan/atau dengan stasiun transportasi masal.','3',1),
(6,1,2,'4','Membuka lantai dasar gedung sehingga dapat menjadi akses pejalan kaki yang aman dan nyaman selama minimum 10 jam sehari','3',1),
(7,1,3,'1','Adanya tempat parkir sepeda yang aman sebanyak satu unit parkir per 20 pengguna gedung hingga maksimal 100 unit parkir sepeda.','3',1),
(8,1,3,'2','Apabila tolok ukur 1 diatas terpenuhi, perlu tersedianya shower sebanyak 1 unit untuk setiap 10 parkir sepeda.','3',1),
(9,1,4,'1','Adanya area lansekap berupa vegetasi (softscape) yang bebas dari bangunan taman (hardscape) yang terletak di atas permukaan tanah seluas minimal 40% luas total lahan. Luas area yang diperhitungkan adalah termasuk yang tersebut di Prasyarat 1, taman di atas basement,  roof garden, terrace garden, dan wall garden, dengan mempertimbangkan Peraturan Menteri PU No. 5/PRT/M/2008 mengenai Ruang Terbuka Hijau (RTH) Pasal 2.3.1  tentang Kriteria Vegetasi untuk Pekarangan.','3',1),
(10,1,4,'2','Bila tolok ukur 1 dipenuhi, setiap penambahan 5% area lansekap dari luas total lahan mendapat 1 nilai.','3',1),
(11,1,4,'3','Penggunaan tanaman yang telah dibudidayakan secara lokal dalam skala provinsi, sebesar 60% luas tajuk dewasa terhadap luas area lansekap pada ASD 5 tolok ukur 1.','3',1),
(12,1,4,'1','Adanya tempat parkir sepeda yang aman sebanyak satu unit parkir per 20 pengguna gedung hingga maksimal 100 unit parkir sepeda.','3',1),
(13,2,8,'1','Nilai OTTV sesuai dengan SNI 03-6389-2011 atau SNI edisi terbaru tentang Konservasi Energi Selubung Bangunan pada Bangunan Gedung.','2',NULL),
(14,2,8,'2','Menggunakan lampu dengan daya pencahayaan lebih hemat sebesar 15% daripada daya pencahayaan yang tercantum dalam SNI 03 6197- 2011 atau SNI edisi terbaru tentang Konservasi Energi pada Sistem Pencahayaan.\n1. Menggunakan 100% ballast frekuensi tinggi (elektronik) untuk ruang kerja.\n2. Zonasi pencahayaan untuk seluruh ruang kerja yang dikaitkan dengan sensor gerak (motion sensor).\n3. Penempatan tombol lampu dalam jarak pencapaian tangan pada saat buka pintu.','3',2),
(15,2,8,'3','Lift menggunakan traffic management system yang sudah lulus traffic analysis atau menggunakan regenerative drive system atau Menggunakan fitur hemat energi pada lift, menggunakan sensor gerak, atau sleep mode pada eskalator.','3',1),
(16,2,8,'4','Menggunakan peralatan AC dengan COP minimum 10% lebih besar dari SNI 03-6390-2011 atau SNI edisi terbaru tentang Konservasi Energi pada Sistem Tata Udara Bangunan Gedung','3',2),
(17,2,9,'1','Penggunaaan cahaya alami secara optimal sehingga minimal 30% luas lantai yang digunakan untuk bekerja mendapatkan intensitas cahaya alami minimal sebesar 300 lux. Perhitungan dapat dilakukan dengan cara manual atau dengan  software. Khusus untuk pusat perbelanjaan, minimal 20% luas lantai nonservice mendapatkan intensitas cahaya alami minimal sebesar 300 lux','2',NULL),
(18,2,9,'2','Jika butir satu dipenuhi lalu ditambah dengan adanya lux sensor untuk otomatisasi pencahayaan buatan apabila intensitas cahaya alami kurang dari 300 lux, didapatkan tambahan  2 nilai','2',NULL),
(19,2,10,'1','Tidak mengkondisikan (tidak memberi AC) ruang WC, tangga, koridor, dan lobi lift, serta melengkapi ruangan tersebut dengan ventilasi alami ataupun mekanik','3',1),
(20,2,11,'1','Menyerahkan perhitungan pengurangan emisi CO  yang didapatkan dari 2 selisih kebutuhan energi antara gedung designed dan gedung baseline dengan menggunakan grid emission factor yang telah ditetapkan dalam Keputusan DNA pada B/277/Dep.III/LH/01/2009','3',1),
(21,2,12,'1','Menggunakan sumber energi baru dan terbarukan. Setiap 0,5% daya listrik yang dibutuhkan gedung yang dapat dipenuhi oleh sumber energi terbarukan.','2',NULL),
(22,3,13,'1','Konsumsi air bersih dengan jumlah tertinggi 80% dari sumber primer 1 tanpa mengurangi jumlah kebutuhan per orang sesuai dengan SNI 03- 7065-2005.','3',1),
(23,3,13,'2','Setiap penurunan konsumsi air bersih dari sumber primer sebesar 5% sesuai dengan acuan pada tolok ukur 1 adalah:','2',NULL),
(24,3,14,'1','Penggunaan fitur air  yang sesuai dengan kapasitas buangan di bawah  standar maksimum kemampuan alat keluaran air, sejumlah minimal 25% dari total pengadaan produk fitur air .','2',NULL),
(25,3,15,'1','Penggunaan seluruh air bekas pakai (grey water) yang telah di daur ulang untuk kebutuhan sistem flushing atau cooling tower.','2',NULL),
(26,3,16,'1','Menggunakan salah satu dari tiga alternatif sebagai berikut: air kondensasi AC, air bekas wudhu, atau air hujan/Menggunakan lebih dari satu sumber air dari ketiga alternatif di atas/Menggunakan teknologi yang memanfaatkan air laut atau air danau atau air sungai untuk keperluan air bersih sebagai sanitasi, irigasi dan kebutuhan lainnya .','2',NULL),
(27,3,17,'1','Menyediakan instalasi tangki penampungan air hujan kapasitas 20% dari jumlah air hujan yang jatuh di atas atap bangunan yang dihitung menggunakan nilai intensitas curah hujan sebesar 50 mm/hari.Menyediakan instalasi tangki penampungan air hujan berkapasitas 35% dari perhitungan di atas.Menyediakan instalasi tangki penampungan air hujan berkapasitas 50% dari perhitungan di atas.','2',NULL),
(28,3,18,'1','Seluruh air yang digunakan untuk irigasi gedung tidak berasal dari sumber  air tanah dan/atau PDAM','3',1),
(29,3,18,'2','Menerapkan teknologi yang inovatif untuk irigasi yang dapat mengontrol kebutuhan air untuk lansekap yang tepat, sesuai dengan kebutuhan tanaman.','3',1),
(30,4,19,'1','Menggunakan kembali material bekas, baik dari bangunan lama maupun tempat lain, berupa bahan struktur utama, fasad, plafon, lantai, partisi, 1 kusen, dan dinding, setara minimal 10% dari total biaya material.','2',NULL),
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
(50,6,32,'1','Melibatkan minimal seorang tenaga ahli yang sudah bersertifikat GREENSHIP Professional (GP), yang bertugas untuk memandu proyek hingga mendapatkan sertifikat GREENSHIP.','3',1),
(51,6,33,'1','Limbah padat, dengan menyediakan area pengumpulan, pemisahan, dan sistem pencatatan. Pencatatan dibedakan berdasarkan limbah padat yang dibuang ke TPA, digunakan kembali, dan didaur ulang oleh pihak ketiga.','3',1),
(52,6,33,'2','Limbah cair, dengan menjaga kualitas seluruh buangan air yang timbul dari aktivitas konstruksi agar tidak mencemari drainase kota','3',1),
(53,6,34,'1','Mengolah limbah organik gedung yang dilakukan secara mandiri maupun bekerjasama dengan pihak ketiga sehingga menambah nilai manfaat dan dapat mengurangi dampak lingkungan.','3',1),
(54,6,34,'2','Mengolah limbah anorganik gedung yang dilakukan secara mandiri maupun bekerjasama dengan pihak ketiga sehingga menambah nilai manfaat dan dapat mengurangi dampak lingkungan.','3',1),
(55,6,35,'1','Melakukan prosedur testing- commissioning sesuai dengan petunjuk GBC Indonesia, termasuk pelatihan terkait untuk optimalisasi kesesuaian fungsi dan kinerja peralatan/sistem dengan perencanaan dan acuannya.','3',2),
(56,6,35,'2','Memastikan seluruh measuring adjusting instrument telah terpasang pada saat konstruksi dan memperhatikan kesesuaian antara desain dan spesifikasi teknis terkait komponen proper commissioning.','3',1),
(57,6,36,'1','Menyerahkan data implementasi green building.','3',1),
(58,6,36,'2','Memberi pernyataan bahwa pemilik gedung akan menyerahkan data implementasi green building dari bangunannya dalam waktu 12 bulan setelah tanggal sertifikasi  dan suatu pusat data energi Indonesia yang akan ditentukan kemudian.','3',1),
(59,6,37,'1','Memiliki surat perjanjian dengan penyewa gedung (tenant) untuk gedung yang disewakan atau POS untuk gedung yang digunakan sendiri, yang terdiri atas:\na. Penggunaan kayu yang bersertifikat untuk material fit-out\nb. Pelaksanaan pelatihan yang akan dilakukan oleh manajemen gedung\nc. Pelaksanaan manajemen indoor air quality (IAQ) setelah konstruksi fit-out. Implementasi dalam bentuk Perjanjian Sewa (lease agreement) atau POS.','3',1),
(60,6,38,'1','Memberi pernyataan bahwa pemilik gedung akan mengadakan survei suhu dan kelembaban paling lambat 12 bulan setelah tanggal sertifikasi dan menyerahkan laporan hasil survei paling lambat 15 bulan setelah tanggal sertifikasi kepada GBC Indonesia.\nCatatan: Apabila hasilnya lebih dari 20% responden menyatakan ketidaknyamanannya, maka pemilik gedung setuju untuk melakukan perbaikan selambat-lambatnya 6 bulan setelah pelaporan hasil survei.','3',2);

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
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1` */

insert  into `q_type_1`(`ID`,`IDQ`,`Label`) values 
(1,1,'Jaringan Jalan'),
(2,1,'Jaringan penerangan dan Listrik'),
(3,1,'Jaringan Drainase'),
(4,1,'STP Kawasan'),
(5,1,'Sistem Pembuangan Sampah'),
(6,1,'Sistem Pemadam Kebakaran'),
(7,1,'Jaringan Fiber Optik'),
(8,1,'Danau Buatan (Minimal 1% luas area)'),
(9,1,'Jalur Pejalan Kaki Kawasan'),
(10,1,'Jalur Pemipaan Gas'),
(11,1,'Jaringan Telepon'),
(12,1,'Jaringan Air bersih'),
(13,3,'Bank'),
(14,3,'Taman Umum'),
(15,3,'Parkiran umum (Diluar lahan)'),
(16,3,'Warung/Toko Kelontong Gedung Serbaguna'),
(17,3,'Pos Keamanan/Polisi'),
(18,3,'Tempat Ibadah'),
(19,3,'Rumah makan/Kantin'),
(20,3,'Fotocopy umum'),
(21,3,'Fasilitas kesehatan'),
(22,3,'kantor pos'),
(23,3,'kantor pemadam kebakaran'),
(24,3,'Terminal/Stasiun Transportasi Umum'),
(25,3,'Perpustakaan'),
(26,3,'Lapangan Olahraga'),
(27,3,'Tempat Penitipan Anak'),
(28,3,'Apotek'),
(29,3,'Kantor Pemerintahan'),
(30,3,'Pasar');

/*Table structure for table `q_type_1_range` */

DROP TABLE IF EXISTS `q_type_1_range`;

CREATE TABLE `q_type_1_range` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Start` int(11) DEFAULT NULL,
  `End` int(11) DEFAULT NULL,
  `Point` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_1_range` */

insert  into `q_type_1_range`(`ID`,`IDQ`,`Start`,`End`,`Point`) values 
(1,1,1,3,0),
(2,1,4,6,1),
(3,1,7,9,1),
(4,1,10,12,1),
(5,3,1,5,0),
(6,3,6,10,0),
(7,3,11,15,0),
(8,3,16,18,1);

/*Table structure for table `q_type_2` */

DROP TABLE IF EXISTS `q_type_2`;

CREATE TABLE `q_type_2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDQ` int(11) NOT NULL,
  `Label` varchar(100) DEFAULT NULL,
  `Point` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `q_type_2` */

insert  into `q_type_2`(`ID`,`IDQ`,`Label`,`Point`) values 
(1,2,'<50%',1),
(2,2,'>50%',1),
(3,4,'<300',0),
(4,4,'>300',0),
(5,13,'<2.5%',1),
(6,13,'2.5%',1),
(7,13,'2.6%-5%',2),
(8,13,'5.1%-7.5%',3),
(9,13,'7.6%-10%',4),
(10,13,'10.1%-12.5%',5),
(11,13,'12.6%-15%',6),
(12,13,'15.1%-17.5%',7),
(13,13,'17.6%-20%',8),
(14,13,'20.1%-22.5%',9),
(15,13,'>22.6%',10),
(16,17,'<300',2),
(17,17,'>300',1),
(18,18,'<300',2),
(19,18,'>300',1),
(20,21,'Ya',5),
(21,21,'Tidak',0),
(22,23,'<5%',1),
(23,23,'5-10%',1),
(24,23,'11-15%',2),
(25,23,'16-20%',3),
(26,23,'21-25%',4),
(27,23,'26-30%',5),
(28,23,'31-35%',6),
(29,23,'>36%',7),
(30,24,'<25%',1),
(31,24,'25%',1),
(32,24,'26-50%',2),
(33,24,'51-75%',3),
(34,24,'>75%',3),
(35,25,'Ya',3),
(36,25,'Tidak',0),
(37,26,'Ya',2),
(38,26,'Tidak',0),
(39,27,'Ya',3),
(40,27,'Tidak',0),
(41,30,'<10%',1),
(42,30,'10%',1),
(43,30,'11-20%',2),
(44,30,'>20%',2),
(45,37,'<10%',1),
(46,37,'20-30%',2),
(47,37,'>30%',3);

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

/*Table structure for table `user_step_log` */

DROP TABLE IF EXISTS `user_step_log`;

CREATE TABLE `user_step_log` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `IDUser` int(11) NOT NULL,
  `Step` int(11) DEFAULT NULL COMMENT '0 = tahap input data projek, 1 = ujicoba tahap 1, 2 = test thp 2, 3 = test thp 3 sampai dengan 6',
  `UpdateAr` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `user_step_log` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
