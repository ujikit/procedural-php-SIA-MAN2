-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: man2
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `data_pegawai`
--

DROP TABLE IF EXISTS `data_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `nip_pegawai` varchar(20) DEFAULT NULL,
  `nama_pegawai` varchar(65) DEFAULT NULL,
  `jabatan_pegawai` varchar(15) DEFAULT NULL,
  `kd_mata_pelajaran_pegawai` varchar(20) DEFAULT NULL,
  `jenis_kelamin_pegawai` varchar(1) NOT NULL,
  `username_pegawai` varchar(20) DEFAULT NULL,
  `password_pegawai` varchar(255) DEFAULT NULL,
  `alamat_pegawai` varchar(255) DEFAULT NULL,
  `tempat_lahir_pegawai` varchar(30) DEFAULT NULL,
  `tanggal_lahir_pegawai` date DEFAULT NULL,
  `no_handphone_pegawai` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_pegawai`),
  KEY `jabatan_pegawai` (`jabatan_pegawai`),
  KEY `nama_mata_pelajaran_pegawai` (`kd_mata_pelajaran_pegawai`),
  CONSTRAINT `data_pegawai_ibfk_1` FOREIGN KEY (`kd_mata_pelajaran_pegawai`) REFERENCES `mata_pelajaran` (`kd_mata_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `dp.jabatan_pegawai-j.nama_jabatan` FOREIGN KEY (`jabatan_pegawai`) REFERENCES `jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_pegawai`
--

LOCK TABLES `data_pegawai` WRITE;
/*!40000 ALTER TABLE `data_pegawai` DISABLE KEYS */;
INSERT INTO `data_pegawai` VALUES (3,'1111','Administrator','admin',NULL,'','admin','$2y$10$PXzGHL7MGkefn9McBJ2h4uBJUsAYeCW.vgDmWu/fa7myp/BKTJ0ai',NULL,NULL,NULL,NULL),(69,'3237762664300033','RUKMI','guru','aa','P',NULL,NULL,NULL,'BLORA','1984-09-05','085878420005'),(70,'197101192006042008','RATRIANI SARJONO','guru','antro','L',NULL,NULL,NULL,'SEMARANG','1971-01-19','085878420006'),(71,'6451749650300022','Ulfia Khoirotunnisa','guru','aqh','P',NULL,NULL,NULL,'Semarang','1992-11-24','085878420007'),(72,'296611082007011021','Aan Rahmaani Mangeshkar','guru','bindo','P',NULL,NULL,NULL,'Semarang','1989-09-18','085878420008'),(73,'196611082007011021','Novi Isnaeni','guru','bing','P',NULL,NULL,NULL,'Demak','1990-11-17','085878420009'),(74,'7447749650200012','Beni Anggoro Setyawan','guru','bio','L',NULL,NULL,NULL,'Salatiga','1988-10-04','085878420010'),(75,'1833735637200032','ANDREAS SAYAT','guru','bjawa','L',NULL,NULL,NULL,'BOYOLALI','1957-10-08','085878420011'),(76,'197101152002121008','WIBOWO TENGARAN','guru','bjep','L',NULL,NULL,NULL,'SEMARANG','1971-01-15','085878420012'),(77,'9440744648200013','BAMBANG MURTIOSO','guru','bjer','L',NULL,NULL,NULL,'BEKASI','1966-11-08','085878420013'),(78,'198411202010011010','AMBA','guru','eko','L',NULL,NULL,NULL,'AMBON','1984-11-20','085878420014'),(79,'195811131987012001','KADARWATI','guru','fis','P',NULL,NULL,NULL,'SEMARANG','1959-11-13','085878420015'),(80,'197705302002122005','FIRDA MURTIASTUTI','guru','fkh','P',NULL,NULL,NULL,'BOYOLALI','1977-05-30','085878420016'),(82,'196610121989012002','MAHAN ASSAGAFF','guru','ilhad','L',NULL,NULL,NULL,'SAPARUA','1966-10-12','085878420018'),(83,'196905191994032006','MARIA SUHARSINI','guru','ilkal','P',NULL,NULL,NULL,'SALATIGA','1969-05-19','085878420019'),(84,'197311181999031002','NGAIDIN','guru','iltaf','L',NULL,NULL,NULL,'SEMARANG','1973-11-18','085878420020'),(85,'197408282002122003','NUR ENDAH SETYORINI','guru','kim','P',NULL,NULL,NULL,'BOYOLALI','1974-08-28','085878420021'),(86,'196502211990032006','NUR ROCHMAH','guru','mtk','P',NULL,NULL,NULL,'KLATEN','1965-02-21','085878420022'),(87,'197007152002121009','PARYADI','guru','mtkIPA','P',NULL,NULL,NULL,'SLEMAN','1970-07-15','085878420023'),(88,'198001252006042006','PAULINA LINDA PERWITANINGRUM','guru','penjas','P',NULL,NULL,NULL,'SALATIGA','1980-01-25','085878420024'),(89,'196006261986032007','PENI SETIYANINGSIH','guru','pkk','P',NULL,NULL,NULL,'PATI','1960-06-26','085878420025'),(90,'196508211994122002','PRAMASTUTI SWASTI MURDANI','guru','pkn','P',NULL,NULL,NULL,'PURWOREJO','1965-08-20','085878420026'),(91,'196801251995122001','PUNIYEM','guru','ppmb','P',NULL,NULL,NULL,'SALATIGA','1968-01-25','085878420027'),(92,'196908162002121004','ROHMAT','guru','sasind','L',NULL,NULL,NULL,'SEMARANG','1969-08-16','085878420028');
/*!40000 ALTER TABLE `data_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_sekolah`
--

DROP TABLE IF EXISTS `data_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_sekolah` (
  `id_data_sekolah` varchar(11) NOT NULL,
  `nama_sekolah_data_sekolah` varchar(25) DEFAULT NULL,
  `nip_kepala_sekolah_data_sekolah` varchar(20) DEFAULT NULL,
  `nama_kepala_sekolah_data_sekolah` varchar(255) DEFAULT NULL,
  `tanggal_jadi_kepala_sekolah_data_sekolah` date DEFAULT NULL,
  `tahun_pelajaran_sekolah_data_sekolah` varchar(15) DEFAULT NULL,
  `foto_kepala_sekolah_data_sekolah` varchar(15) DEFAULT NULL,
  `alamat_sekolah_data_sekolah` varchar(255) DEFAULT NULL,
  `asal_kota_sekolah_data_sekolah` varchar(255) DEFAULT NULL,
  `email_sekolah_data_sekolah` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_data_sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_sekolah`
--

LOCK TABLES `data_sekolah` WRITE;
/*!40000 ALTER TABLE `data_sekolah` DISABLE KEYS */;
INSERT INTO `data_sekolah` VALUES ('man2jogja','MAN 2 Yogyakarta','7826314225','Drs. H. In Amullah M.A.','2018-02-14','2018',NULL,'Jl. K.H Ahmad Dahlan No. 130 Yogyakarta','Yogyakarta','Jl. K.H Ahmad Dahlan No. 130 Yogyakarta');
/*!40000 ALTER TABLE `data_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_siswa`
--

DROP TABLE IF EXISTS `data_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_siswa` (
  `id_siswa` int(7) NOT NULL AUTO_INCREMENT,
  `nisn_siswa` varchar(25) DEFAULT NULL,
  `nis_siswa` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(65) DEFAULT NULL,
  `jenis_kelamin_siswa` varchar(1) DEFAULT NULL,
  `kd_kelas_daftar_siswa` varchar(15) DEFAULT NULL,
  `jabatan_siswa` varchar(25) NOT NULL,
  `alamat_siswa` varchar(20) DEFAULT NULL,
  `tempat_lahir_siswa` varchar(25) DEFAULT NULL,
  `tanggal_lahir_siswa` date DEFAULT NULL,
  `no_handphone_siswa` varchar(15) DEFAULT NULL,
  `anak_ke_siswa` varchar(3) DEFAULT NULL,
  `username_siswa` varchar(20) DEFAULT NULL,
  `password_siswa` varchar(255) DEFAULT NULL,
  `agama_siswa` varchar(20) DEFAULT NULL,
  `status_dalam_keluarga_siswa` varchar(15) DEFAULT NULL,
  `diterima_tanggal_siswa` date DEFAULT NULL,
  `diterima_semester_siswa` varchar(1) DEFAULT NULL,
  `sekolah_asal_nama_siswa` varchar(25) DEFAULT NULL,
  `sekolah_asal_alamat_siswa` varchar(255) DEFAULT NULL,
  `stl_tahun_siswa` varchar(5) DEFAULT NULL,
  `stl_nomor_siswa` varchar(50) DEFAULT NULL,
  `orangtua_nama_ayah_siswa` varchar(65) DEFAULT NULL,
  `orangtua_nama_ibu_siswa` varchar(65) DEFAULT NULL,
  `orangtua_alamat_siswa` varchar(255) DEFAULT NULL,
  `orangtua_telepon_siswa` varchar(15) DEFAULT NULL,
  `orangtua_pekerjaan_ayah_siswa` varchar(25) DEFAULT NULL,
  `orangtua_pekerjaan_ibu_siswa` varchar(25) DEFAULT NULL,
  `username_wali` varchar(20) DEFAULT NULL,
  `password_wali` varchar(255) DEFAULT NULL,
  `nama_wali` varchar(65) DEFAULT NULL,
  `pekerjaan_wali` varchar(25) DEFAULT NULL,
  `jenis_kelamin_wali` varchar(1) DEFAULT NULL,
  `alamat_wali` varchar(255) DEFAULT NULL,
  `tempat_lahir_wali` varchar(25) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `no_handphone_wali` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id_siswa`),
  KEY `jabatan_siswa` (`jabatan_siswa`),
  CONSTRAINT `data_siswa_ibfk_1` FOREIGN KEY (`jabatan_siswa`) REFERENCES `jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_siswa`
--

LOCK TABLES `data_siswa` WRITE;
/*!40000 ALTER TABLE `data_siswa` DISABLE KEYS */;
INSERT INTO `data_siswa` VALUES (25,'0045310829','10888','Ramziyah','P','10ipa1','siswa',NULL,'Jakarta','2004-11-11','085878423288',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'0044735860','10889','Addisty Ayu Rinjani','P','10ipa2','siswa',NULL,'Jakarta','2004-03-31','085878423289',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'0057386934','10890','Mustika Putri','P','10ips1','siswa',NULL,'Jakarta','2005-05-05','085878423290',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'0041893929','10891','Andhika Gunawan','L','10ips2','siswa',NULL,'Jakarta','2004-05-30','085878423291',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'0051777974','10892','Frida Muslimah','P','10agama1','siswa',NULL,'Jakarta','2005-04-17','085878423292',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'0050695154','10893','Azkah Fauziah','P','10agama2','siswa',NULL,'Jakarta','2005-01-27','085878423293',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'0045537991','10894','Cindy Tika Agustin','P','10bahasa1','siswa',NULL,'Jakarta','2004-06-12','085878423294',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'0058784283','10895','Daffa Danendra Halsandrian','L','10bahasa2','siswa',NULL,'Jakarta','2005-09-29','085878423295',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'0053331420','10896','Daffa Fazlu Rahman','L','11ipa1','siswa',NULL,'Kuningan','2005-07-31','085878423296',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'0051393111','10897','Edna Jasmine Parikesit','P','11ipa2','siswa',NULL,'Sidoarjo','2005-07-13','085878423297',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'0041082715','10898','Ganefa Sergian Hanafia','P','11ips1','siswa',NULL,'Jakarta','2004-09-16','085878423298',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'0043206160','10899','Hana Allya Agustin','P','11ips2','siswa',NULL,'Jakarta','2004-09-17','085878423299',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'0052892477','10901','Jordan Imanuel Lontorin','L','11agama2','siswa',NULL,'Jakarta','2005-09-19','085878423301',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'0044967734','10902','Julia Wardani','P','11bahasa1','siswa',NULL,'Jakarta','2004-07-06','085878423302',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'0045380633','10903','Karunia Cahyani','P','11bahasa2','siswa',NULL,'Jakarta','2005-12-12','085878423303',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'0048720934','10904','Lasmana Indra Syach Putra','L','12ipa1','siswa',NULL,'Jakarta','2004-07-02','085878423304',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'0054365221','10905','Muhammad Alwa nLuthfi','L','12ipa2','siswa',NULL,'Jakarta','2005-04-05','085878423305',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'0051995128','10906','Dinda Kairun Musyafa','P','12ips1','siswa',NULL,'Jakarta','2005-04-08','085878423306',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'0051854937','10907','Najwa Nazella Yulianda','P','12ips2','siswa',NULL,'Jakarta','2005-03-07','085878423307',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'0052391206','10908','Nazwa Rizki Aulia','P','12agama1','siswa',NULL,'Brebes','2005-09-13','085878423308',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'0045591131','10909','Nesvadba DInda Permana','P','12agama2','siswa',NULL,'Kuningan','2004-05-21','085878423309',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'0047947089','10910','Nur Fitri Az Zahra','P','12bahasa1','siswa',NULL,'Jakarta','2004-11-22','085878423310',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(48,'0052892450','10911','Petra Christian Nugraha','L','12bahasa2','siswa',NULL,'Jakarta','2005-02-07','085878423311',NULL,NULL,NULL,'Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_wali`
--

DROP TABLE IF EXISTS `data_wali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_wali` (
  `id_wali` int(11) NOT NULL AUTO_INCREMENT,
  `nis_siswa_wali` varchar(25) DEFAULT NULL,
  `username_wali` varchar(25) DEFAULT NULL,
  `password_wali` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_wali`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_wali`
--

LOCK TABLES `data_wali` WRITE;
/*!40000 ALTER TABLE `data_wali` DISABLE KEYS */;
/*!40000 ALTER TABLE `data_wali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_website`
--

DROP TABLE IF EXISTS `data_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `data_website` (
  `id_data_website` int(11) NOT NULL AUTO_INCREMENT,
  `hubungi_kami_data_website` varchar(15) DEFAULT NULL,
  `email_data_website` varchar(100) DEFAULT NULL,
  `marquee_data_website` tinytext,
  `judul_konten_slide_data_website` tinytext,
  `isi_konten_slide_data_website` text,
  `gambar_slide_data_website` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_data_website`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_website`
--

LOCK TABLES `data_website` WRITE;
/*!40000 ALTER TABLE `data_website` DISABLE KEYS */;
INSERT INTO `data_website` VALUES (1,NULL,NULL,NULL,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `data_website` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru_kompetensi_dasar_smt1`
--

DROP TABLE IF EXISTS `guru_kompetensi_dasar_smt1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru_kompetensi_dasar_smt1` (
  `id_guru_kompetensi_dasar_smt1` int(11) NOT NULL AUTO_INCREMENT,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt1` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt1` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt1` text,
  `guru_kompetensi_dasar_nip_pegawai_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kd_mata_pelajaran_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kd_kelas_daftar_smt1` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt1` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_guru_kompetensi_dasar_smt1`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru_kompetensi_dasar_smt1`
--

LOCK TABLES `guru_kompetensi_dasar_smt1` WRITE;
/*!40000 ALTER TABLE `guru_kompetensi_dasar_smt1` DISABLE KEYS */;
/*!40000 ALTER TABLE `guru_kompetensi_dasar_smt1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru_kompetensi_dasar_smt2`
--

DROP TABLE IF EXISTS `guru_kompetensi_dasar_smt2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru_kompetensi_dasar_smt2` (
  `id_guru_kompetensi_dasar_smt2` int(11) NOT NULL AUTO_INCREMENT,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt2` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt2` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt2` text,
  `guru_kompetensi_dasar_nip_pegawai_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kd_mata_pelajaran_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kd_kelas_daftar_smt2` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt2` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_guru_kompetensi_dasar_smt2`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru_kompetensi_dasar_smt2`
--

LOCK TABLES `guru_kompetensi_dasar_smt2` WRITE;
/*!40000 ALTER TABLE `guru_kompetensi_dasar_smt2` DISABLE KEYS */;
/*!40000 ALTER TABLE `guru_kompetensi_dasar_smt2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `kd_jabatan` varchar(25) NOT NULL,
  `nama_jabatan` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`kd_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES ('admin','Administrator'),('bk','BK'),('bot','BOT'),('guru','Guru'),('siswa','Siswa');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas_daftar`
--

DROP TABLE IF EXISTS `kelas_daftar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas_daftar` (
  `id_kelas_daftar` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kelas_daftar` varchar(15) DEFAULT NULL,
  `nama_kelas_daftar` varchar(15) NOT NULL,
  `kelompok_kelas_daftar` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_daftar`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_daftar`
--

LOCK TABLES `kelas_daftar` WRITE;
/*!40000 ALTER TABLE `kelas_daftar` DISABLE KEYS */;
INSERT INTO `kelas_daftar` VALUES (1,'10ipa1','10 IPA 1','IPA'),(2,'10ipa2','10 IPA 2','IPA'),(5,'10ips1','10 IPS 1','IPS'),(6,'10ips2','10 IPS 2','IPS'),(9,'10agama1','10 AGAMA 1','AGAMA'),(10,'10agama2','10 AGAMA 2','AGAMA'),(13,'10bahasa1','10 BAHASA 1','BAHASA'),(14,'10bahasa2','10 BAHASA 2','BAHASA'),(17,'11ipa1','11 IPA 1','IPA'),(18,'11ipa2','11 IPA 2','IPA'),(21,'11ips1','11 IPS 1','IPS'),(22,'11ips2','11 IPS 2','IPS'),(25,'11agama1','11 AGAMA 1','AGAMA'),(26,'11agama2','11 AGAMA 2','AGAMA'),(29,'11bahasa1','11 BAHASA 1','BAHASA'),(30,'11bahasa2','11 BAHASA 2','BAHASA'),(33,'12ipa1','12 IPA 1','IPA'),(34,'12ipa2','12 IPA 2','IPA'),(37,'12ips1','12 IPS 1','IPS'),(38,'12ips2','12 IPS 2','IPS'),(41,'12agama1','12 AGAMA 1','AGAMA'),(42,'12agama2','12 AGAMA 2','AGAMA'),(45,'12bahasa1','12 BAHASA 1','BAHASA'),(46,'12bahasa2','12 BAHASA 2','BAHASA');
/*!40000 ALTER TABLE `kelas_daftar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas_transaksi`
--

DROP TABLE IF EXISTS `kelas_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas_transaksi` (
  `id_kelas_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kd_kelas_daftar_kelas_transaksi` varchar(20) DEFAULT NULL,
  `nip_pegawai_wali_kelas_transaksi` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_kelas_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_transaksi`
--

LOCK TABLES `kelas_transaksi` WRITE;
/*!40000 ALTER TABLE `kelas_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `kelas_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_pelajaran`
--

DROP TABLE IF EXISTS `mata_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT,
  `kd_mata_pelajaran` varchar(15) DEFAULT NULL,
  `nama_mata_pelajaran` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id_mata_pelajaran`),
  KEY `kd_mata_pelajaran` (`kd_mata_pelajaran`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_pelajaran`
--

LOCK TABLES `mata_pelajaran` WRITE;
/*!40000 ALTER TABLE `mata_pelajaran` DISABLE KEYS */;
INSERT INTO `mata_pelajaran` VALUES (1,'aqh','Al-Qur\'an Hadis'),(2,'aa','Akidah Akhlak'),(3,'fkh','Fikih'),(4,'ski','Sejarah Kebudayaan Islam'),(5,'pkn','Pendidikan Pancasila dan Kewarganegaraan'),(6,'mtk','Matematika'),(7,'bindo','Bahasa Indonesia'),(8,'bing','Bahasa Inggris'),(9,'senbud','Seni Budaya'),(10,'penjas','Pendidikan Jasmani, Olahraga dan Kesehat'),(11,'pkk','Prakarya dan Kewirausahaan'),(12,'mtkIPA','Matematika 2'),(13,'bio','Biologi'),(14,'fis','Fisika'),(15,'kim','Kimia'),(16,'geo','Geografi'),(17,'sej','Sejarah'),(18,'sos','Sosiologi'),(19,'eko','Ekonomi'),(20,'iltaf','Tafsir - Ilmu Tafsir'),(21,'ilhad','Hadis - Ilmu Hadis'),(22,'usfik','Fikih - Ushul Fikih'),(23,'ilkal','Ilmu Kalam'),(24,'akhAGAMA','Akhlak'),(25,'barabAGAMA','Bahasa Arab 2'),(26,'sasind','Bahasa dan Sastra Indonesia'),(27,'sasing','Bahasa dan Sastra Inggris'),(28,'bjer','Bahasa Jerman'),(29,'bjep','Bahasa Jepang'),(30,'antro','Antropologi'),(31,'bjawa','Bahasa Jawa'),(32,'ppmb','PPMB'),(33,'tik','Teknologi Informasi dan Komunikasi');
/*!40000 ALTER TABLE `mata_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mata_pelajaran_transaksi`
--

DROP TABLE IF EXISTS `mata_pelajaran_transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mata_pelajaran_transaksi` (
  `id_mata_pelajaran_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `kkm_rendah_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `kkm_tengah_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `kkm_tinggi_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `kd_kelas_daftar_mata_pelajaran_transaksi` varchar(15) DEFAULT NULL,
  `kd_mata_pelajaran_transaksi` varchar(65) DEFAULT NULL,
  `nip_pegawai_mata_pelajaran_transaksi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mata_pelajaran_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mata_pelajaran_transaksi`
--

LOCK TABLES `mata_pelajaran_transaksi` WRITE;
/*!40000 ALTER TABLE `mata_pelajaran_transaksi` DISABLE KEYS */;
/*!40000 ALTER TABLE `mata_pelajaran_transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_siswa_transaksi_smt1_pengetahuan`
--

DROP TABLE IF EXISTS `nilai_siswa_transaksi_smt1_pengetahuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_siswa_transaksi_smt1_pengetahuan` (
  `id_nilai_siswa_transaksi_smt1_pengetahuan` int(11) NOT NULL AUTO_INCREMENT,
  `nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan` varchar(20) DEFAULT NULL,
  `kd_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan` varchar(15) DEFAULT NULL,
  `kd_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(10) DEFAULT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(40) DEFAULT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uts_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uts_remidi_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uts_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi11_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `nilai_akhir_nilai_siswa_transaksi_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `predikat_nilai_siswa_transaksi_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  `deskripsi_nilai_siswa_transaksi_smt1_pengetahuan` text,
  `keterangan_t_tt_nilai_siswa_transaksi_smt1_pengetahuan` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_pengetahuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_siswa_transaksi_smt1_pengetahuan`
--

LOCK TABLES `nilai_siswa_transaksi_smt1_pengetahuan` WRITE;
/*!40000 ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_siswa_transaksi_smt2_pengetahuan`
--

DROP TABLE IF EXISTS `nilai_siswa_transaksi_smt2_pengetahuan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_siswa_transaksi_smt2_pengetahuan` (
  `id_nilai_siswa_transaksi_smt2_pengetahuan` int(11) NOT NULL AUTO_INCREMENT,
  `nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan` varchar(20) DEFAULT NULL,
  `kd_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan` varchar(15) DEFAULT NULL,
  `kd_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(10) DEFAULT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(40) DEFAULT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uts_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uts_remidi_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uts_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi11_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `nilai_akhir_nilai_siswa_transaksi_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `predikat_nilai_siswa_transaksi_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  `deskripsi_nilai_siswa_transaksi_smt2_pengetahuan` text,
  `keterangan_t_tt_nilai_siswa_transaksi_smt2_pengetahuan` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_pengetahuan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_siswa_transaksi_smt2_pengetahuan`
--

LOCK TABLES `nilai_siswa_transaksi_smt2_pengetahuan` WRITE;
/*!40000 ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan`
--

DROP TABLE IF EXISTS `pesan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim_pesan` varchar(50) DEFAULT NULL,
  `penerima_pesan` varchar(50) DEFAULT NULL,
  `judul_pesan` text,
  `isi_pesan` text,
  `waktu_pesan` datetime DEFAULT NULL,
  `cek_pesan` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan`
--

LOCK TABLES `pesan` WRITE;
/*!40000 ALTER TABLE `pesan` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan_chat_bot_kosa_kata_pegawai`
--

DROP TABLE IF EXISTS `pesan_chat_bot_kosa_kata_pegawai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan_chat_bot_kosa_kata_pegawai` (
  `id_pesan_chat_bot_kosa_kata_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `kosa_kata_pesan_chat_bot_kosa_kata_pegawai` varchar(50) NOT NULL,
  `grup_kosa_kata_pesan_chat_bot_kosa_kata_pegawai` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pesan_chat_bot_kosa_kata_pegawai`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan_chat_bot_kosa_kata_pegawai`
--

LOCK TABLES `pesan_chat_bot_kosa_kata_pegawai` WRITE;
/*!40000 ALTER TABLE `pesan_chat_bot_kosa_kata_pegawai` DISABLE KEYS */;
INSERT INTO `pesan_chat_bot_kosa_kata_pegawai` VALUES (1,'nomor induk','nip_pegawai'),(2,'nama lengkap','nama_pegawai'),(8,'nomor telepon','no_handphone_pegawai'),(29,'jabatan','jabatan_pegawai'),(33,'ampu','nama_mata_pelajaran'),(34,'ajar','nama_mata_pelajaran'),(39,'alamat rumah','alamat_pegawai');
/*!40000 ALTER TABLE `pesan_chat_bot_kosa_kata_pegawai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan_chat_bot_kosa_kata_siswa`
--

DROP TABLE IF EXISTS `pesan_chat_bot_kosa_kata_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan_chat_bot_kosa_kata_siswa` (
  `id_pesan_chat_bot_kosa_kata_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `kosa_kata_pesan_chat_bot_kosa_kata_siswa` varchar(50) NOT NULL,
  `grup_kosa_kata_pesan_chat_bot_kosa_kata_siswa` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pesan_chat_bot_kosa_kata_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan_chat_bot_kosa_kata_siswa`
--

LOCK TABLES `pesan_chat_bot_kosa_kata_siswa` WRITE;
/*!40000 ALTER TABLE `pesan_chat_bot_kosa_kata_siswa` DISABLE KEYS */;
INSERT INTO `pesan_chat_bot_kosa_kata_siswa` VALUES (19,'nomor induk','nis_siswa'),(41,'nomor induk nasional','nisn_siswa'),(42,'nama lengkap','nama_siswa'),(43,'jenis kelamin','jenis_kelamin_siswa'),(44,'kelas','kd_kelas_daftar_siswa'),(45,'alamat','alamat_siswa'),(46,'tempat lahir','tempat_lahir_siswa'),(47,'tanggal lahir','tanggal_lahir_siswa'),(48,'nomor telepon','no_handphone_siswa'),(50,'nama ayah','orangtua_nama_ayah_siswa'),(51,'nama ibu','orangtua_nama_ibu_siswa'),(52,'alamat orangtua','orangtua_alamat_siswa'),(53,'telepon orang tua','orangtua_telepon_siswa'),(54,'pekerjaan ayah','orangtua_pekerjaan_ayah_siswa'),(55,'pekerjaan ibu','orangtua_pekerjaan_ibu_siswa'),(56,'nama wali','nama_wali'),(57,'pekerjaan wali','pekerjaan_wali'),(58,'alamat wali','alamat_wali'),(59,'nomor telepon wali','no_handphone_wali');
/*!40000 ALTER TABLE `pesan_chat_bot_kosa_kata_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pesan_chat_pengguna`
--

DROP TABLE IF EXISTS `pesan_chat_pengguna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pesan_chat_pengguna` (
  `id_pesan_chat_pengguna` int(11) NOT NULL AUTO_INCREMENT,
  `pengirim_pesan_chat_pengguna` varchar(50) NOT NULL,
  `penerima_pesan_chat_pengguna` varchar(50) NOT NULL,
  `isi_pesan_chat_pengguna` text NOT NULL,
  `waktu_pesan_chat_pengguna` datetime NOT NULL,
  `cek_pesan_chat_pengguna` enum('0','1') NOT NULL,
  PRIMARY KEY (`id_pesan_chat_pengguna`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pesan_chat_pengguna`
--

LOCK TABLES `pesan_chat_pengguna` WRITE;
/*!40000 ALTER TABLE `pesan_chat_pengguna` DISABLE KEYS */;
/*!40000 ALTER TABLE `pesan_chat_pengguna` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `verifikasi_password`
--

DROP TABLE IF EXISTS `verifikasi_password`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `verifikasi_password` (
  `id_verifikasi_password_baru` int(11) NOT NULL AUTO_INCREMENT,
  `username_verifikasi_password_baru` varchar(50) DEFAULT NULL,
  `password_baru_verifikasi_password_baru` varchar(255) DEFAULT NULL,
  `jabatan_verifikasi_password_baru` varchar(25) DEFAULT NULL,
  `tanggal_ganti_verifikasi_password_baru` date DEFAULT NULL,
  `jam_ganti_verifikasi_password_baru` time DEFAULT NULL,
  `tanggal_verifikasi_verifikasi_password_baru` date DEFAULT NULL,
  `jam_verifikasi_verifikasi_password_baru` time DEFAULT NULL,
  `tanggal_terpakai_verifikasi_password_baru` date DEFAULT NULL,
  `jam_terpakai_verifikasi_password_baru` time DEFAULT NULL,
  `status_verifikasi_password_baru` char(1) DEFAULT NULL,
  PRIMARY KEY (`id_verifikasi_password_baru`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `verifikasi_password`
--

LOCK TABLES `verifikasi_password` WRITE;
/*!40000 ALTER TABLE `verifikasi_password` DISABLE KEYS */;
/*!40000 ALTER TABLE `verifikasi_password` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-07  3:21:01
