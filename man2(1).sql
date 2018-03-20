-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2017 at 09:30 
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `man2`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip_pegawai` varchar(20) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jabatan_pegawai` varchar(15) DEFAULT NULL,
  `nama_mata_pelajaran_pegawai` varchar(40) DEFAULT NULL,
  `username_pegawai` varchar(15) NOT NULL,
  `password_pegawai` varchar(20) NOT NULL,
  `foto_pegawai` varchar(20) DEFAULT NULL,
  `alamat_pegawai` varchar(70) DEFAULT NULL,
  `tempat_lahir_pegawai` varchar(30) DEFAULT NULL,
  `tanggal_lahir_pegawai` date DEFAULT NULL,
  `no_handphone_pegawai` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip_pegawai`, `nama_pegawai`, `jabatan_pegawai`, `nama_mata_pelajaran_pegawai`, `username_pegawai`, `password_pegawai`, `foto_pegawai`, `alamat_pegawai`, `tempat_lahir_pegawai`, `tanggal_lahir_pegawai`, `no_handphone_pegawai`) VALUES
(41, '1111', 'administrator', 'Administrator', NULL, 'admin', 'admin', '1111', NULL, NULL, NULL, NULL),
(45, '543254325432', 'Tukijems', 'Guru', 'Al Qur\'an Hadits', 'tukijem', 'tukijem', '543254325432', '', '', '0000-00-00', ''),
(46, '6534545454', 'Sutrisno', 'Guru', 'Fiqih', 'sutrisno', 'sutrisno', '6534545454', '', '', '0000-00-00', ''),
(47, '342343423434234', 'Sukirnok', 'Guru', 'Akidah Akhlak', 'Sukirnoks', 'Sukirnok', '342343423434234', '', '', '0000-00-00', ''),
(48, '234432344323443', 'Bogel Kecuts', 'Guru', 'Sejarah Kebudayaan Islam', 'asdd', 'admins', '234432344323443', '', '', '0000-00-00', ''),
(49, '543445434454344', 'Tumini aka tumono', 'Guru', 'Pendidikan Kewarga Negaraan', 'admin', 'admin', '543445434454344', '', '', '0000-00-00', ''),
(50, '223232232322323', 'Bujong Telo', 'Guru', 'Bahasa dan Sastra Indonesia', 'asdd', 'admin', '223232232322323', '', '', '0000-00-00', ''),
(51, '654566545665456', 'Nonong Hijrah', 'Guru', 'Bahasa Arab', 'asdd', 'asdsa', '654566545665456', '', '', '0000-00-00', ''),
(52, '334323343233432', 'Sukirno Naik Haji', 'Guru', 'Bahasa Inggris', 'asdas', 'admin', '334323343233432', '', '', '0000-00-00', ''),
(53, '657896578965789', 'Joni Markutut', 'Guru', 'Matematika', 'asdd', 'asdsa', '657896578965789', '', '', '0000-00-00', ''),
(54, '9999999', 'Magar Tumino', 'BK', 'Null', 'tes', 'admin', '9999999', '', '', '0000-00-00', ''),
(55, '123321233243212', 'Kalong Lagi Mancing', 'Guru', 'Pendidikan Jasmani', 'admin', 'asdsa', '123321233243212', '', '', '0000-00-00', ''),
(63, '835638356383563', 'Tumiyem LA', 'Guru', 'Teknologi Informasi dan Komunikasi', 'sad', 'sds', '835638356383563', '', '', '0000-00-00', ''),
(64, '744127441274412', 'Mangan Sego', 'Guru', 'Keterampilan Lokal', 'sad', 'asd', '744127441274412', '', '', '0000-00-00', ''),
(65, '844128441284412', 'Aisyah Siti', 'BK', 'Null', 'dadf', 'dsfds', '844128441284412', '', '', '0000-00-00', ''),
(66, '3413423', 'Paijo', 'Guru', 'Bahasa Arab', 'asd', 'asd', '3413423', 's', 's', '2017-07-19', '231'),
(69, '11217322', 'hanyok', 'Guru', 'Bahasa dan Sastra Indonesia', 'tukijem', 'tukijems', '11217322', 's', 's', '2017-08-15', '231');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nisn_siswa` varchar(25) NOT NULL,
  `nis_siswa` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `username_siswa` varchar(20) NOT NULL,
  `password_siswa` varchar(30) NOT NULL,
  `agama_siswa` varchar(10) NOT NULL,
  `jenis_kelamin_siswa` varchar(1) NOT NULL,
  `foto_siswa` varchar(25) NOT NULL,
  `id_kelas_daftar` varchar(15) NOT NULL,
  `alamat_siswa` text,
  `tempat_lahir_siswa` varchar(25) NOT NULL,
  `tanggal_lahir_siswa` date NOT NULL,
  `no_handphone_siswa` varchar(50) DEFAULT NULL,
  `nama_wali` varchar(50) DEFAULT NULL,
  `pekerjaan_wali` varchar(20) DEFAULT NULL,
  `jenis_kelamin_wali` varchar(1) DEFAULT NULL,
  `alamat_wali` varchar(55) DEFAULT NULL,
  `tempat_lahir_wali` varchar(55) DEFAULT NULL,
  `tanggal_lahir_wali` date DEFAULT NULL,
  `no_handphone_wali` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id_siswa`, `nisn_siswa`, `nis_siswa`, `nama_siswa`, `username_siswa`, `password_siswa`, `agama_siswa`, `jenis_kelamin_siswa`, `foto_siswa`, `id_kelas_daftar`, `alamat_siswa`, `tempat_lahir_siswa`, `tanggal_lahir_siswa`, `no_handphone_siswa`, `nama_wali`, `pekerjaan_wali`, `jenis_kelamin_wali`, `alamat_wali`, `tempat_lahir_wali`, `tanggal_lahir_wali`, `no_handphone_wali`) VALUES
(58, '432343255', '432343255', 'Fauzi Zaki Ma\'ruf', '432343255', '432343255', 'Islam', 'L', '432343255', '10IPA1', 'Perum Jatisawit Asri Blok Z 7 No.7 Rt 10 Rw 51 Balecatur, Gamping, Sleman, Yogyakarta', 'Karanganyar', '2017-10-10', '085878419656', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru_kompetensi_dasar_smt1`
--

CREATE TABLE `guru_kompetensi_dasar_smt1` (
  `id_guru_kompetensi_dasar_smt1` int(11) NOT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt1` text,
  `guru_kompetensi_dasar_keterampilan_noKI_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_keterampilan_noKD_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_keterampilan_noDKD_smt1` text,
  `guru_kompetensi_dasar_spiritual_noKI_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_spiritual_noKD_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_spiritual_noDKD_smt1` text,
  `guru_kompetensi_dasar_sosial_noKI_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_sosial_noKD_smt1` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_sosial_noDKD_smt1` text,
  `guru_kompetensi_dasar_nip_pegawai_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_mata_pelajaran_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_smt1` tinyint(4) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_daftar_smt1` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt1` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `guru_kompetensi_dasar_smt1`
--

INSERT INTO `guru_kompetensi_dasar_smt1` (`id_guru_kompetensi_dasar_smt1`, `guru_kompetensi_dasar_pengetahuan_noKI_smt1`, `guru_kompetensi_dasar_pengetahuan_noKD_smt1`, `guru_kompetensi_dasar_pengetahuan_noDKD_smt1`, `guru_kompetensi_dasar_keterampilan_noKI_smt1`, `guru_kompetensi_dasar_keterampilan_noKD_smt1`, `guru_kompetensi_dasar_keterampilan_noDKD_smt1`, `guru_kompetensi_dasar_spiritual_noKI_smt1`, `guru_kompetensi_dasar_spiritual_noKD_smt1`, `guru_kompetensi_dasar_spiritual_noDKD_smt1`, `guru_kompetensi_dasar_sosial_noKI_smt1`, `guru_kompetensi_dasar_sosial_noKD_smt1`, `guru_kompetensi_dasar_sosial_noDKD_smt1`, `guru_kompetensi_dasar_nip_pegawai_smt1`, `guru_kompetensi_dasar_mata_pelajaran_smt1`, `guru_kompetensi_dasar_kelas_smt1`, `guru_kompetensi_dasar_kelas_daftar_smt1`, `guru_kompetensi_dasar_semester_smt1`) VALUES
(1, '3', '3.1', 'peng1sem1', '4', '4.1', 'ket1sem1', '1', '1.1', 'spir1sem1', '2', '2.1', 'sos1sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(2, '3', '3.2', 'peng2sem1', '4', '4.2', 'ket2sem1', '1', '1.2', 'spir2sem1', '2', '2.2', 'sos2sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(3, '3', '3.3', 'peng3sem1', '4', '4.3', 'ket3sem1', '1', '1.3', 'spir3sem1', '2', '2.3', 'sos3sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(4, '3', '3.4', 'peng4sem1', '4', '4.4', 'ket4sem1', '1', '1.4', 'spir4sem1', '2', '2.4', 'sos4sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(5, '3', '3.5', 'peng5sem1', '4', '4.5', 'ket5sem1', '1', '1.5', 'spir5sem1', '2', '2.5', 'sos5sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(6, '3', '3.6', 'peng6sem1', '4', '4.6', 'ket6sem1', '1', '1.6', 'spir6sem1', '2', '2.6', 'sos6sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(7, '3', '3.7', 'peng7sem1', '4', '4.7', 'ket7sem1', '1', '1.7', 'spir7sem1', '2', '2.7', 'sos7sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(8, '3', '3.8', 'peng8sem1', '4', '4.8', 'ket8sem1', '1', '1.8', 'spir8sem1', '2', '2.8', 'sos8sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(9, '3', '3.9', 'peng9sem1', '4', '4.9', 'ket9sem1', '1', '1.9', 'spir9sem1', '2', '2.9', 'sos9sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(10, '3', '3.10', 'peng10sem1', '4', '4.10', 'ket10sem1', '1', '1.10', 'spir10sem1', '2', '2.10', 'sos10sem1', '123321233243212', 'penjas', 10, '10IPA1', 1),
(11, '3', '3.1', 'peng1sem1', '4', '4.1', 'ket1sem1', '1', '1.1', 'spir1sem1', '2', '2.1', 'sos1sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(12, '3', '3.2', 'peng2sem1', '4', '4.2', 'ket2sem1', '1', '1.2', 'spir2sem1', '2', '2.2', 'sos2sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(13, '3', '3.3', 'peng3sem1', '4', '4.3', 'ket3sem1', '1', '1.3', 'spir3sem1', '2', '2.3', 'sos3sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(14, '3', '3.4', 'peng4sem1', '4', '4.4', 'ket4sem1', '1', '1.4', 'spir4sem1', '2', '2.4', 'sos4sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(15, '3', '3.5', 'peng5sem1', '4', '4.5', 'ket5sem1', '1', '1.5', 'spir5sem1', '2', '2.5', 'sos5sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(16, '3', '3.6', 'peng6sem1', '4', '4.6', 'ket6sem1', '1', '1.6', 'spir6sem1', '2', '2.6', 'sos6sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(17, '3', '3.7', 'peng7sem1', '4', '4.7', 'ket7sem1', '1', '1.7', 'spir7sem1', '2', '2.7', 'sos7sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(18, '3', '3.8', 'peng8sem1', '4', '4.8', 'ket8sem1', '1', '1.8', 'spir8sem1', '2', '2.8', 'sos8sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(19, '3', '3.9', 'peng9sem1', '4', '4.9', 'ket9sem1', '1', '1.9', 'spir9sem1', '2', '2.9', 'sos9sem1', '543254325432', 'aqh', 10, '10IPA1', 1),
(20, '3', '3.10', 'peng10sem1', '4', '4.10', 'ket10sem1', '1', '1.10', 'spir10sem1', '2', '2.10', 'sos10sem1', '543254325432', 'aqh', 10, '10IPA1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru_kompetensi_dasar_smt2`
--

CREATE TABLE `guru_kompetensi_dasar_smt2` (
  `id_guru_kompetensi_dasar_smt2` int(11) NOT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt2` text,
  `guru_kompetensi_dasar_keterampilan_noKI_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_keterampilan_noKD_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_keterampilan_noDKD_smt2` text,
  `guru_kompetensi_dasar_spiritual_noKI_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_spiritual_noKD_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_spiritual_noDKD_smt2` text,
  `guru_kompetensi_dasar_sosial_noKI_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_sosial_noKD_smt2` varchar(5) DEFAULT NULL,
  `guru_kompetensi_dasar_sosial_noDKD_smt2` text,
  `guru_kompetensi_dasar_nip_pegawai_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_mata_pelajaran_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_smt2` tinyint(4) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_daftar_smt2` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt2` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru_kompetensi_dasar_smt2`
--

INSERT INTO `guru_kompetensi_dasar_smt2` (`id_guru_kompetensi_dasar_smt2`, `guru_kompetensi_dasar_pengetahuan_noKI_smt2`, `guru_kompetensi_dasar_pengetahuan_noKD_smt2`, `guru_kompetensi_dasar_pengetahuan_noDKD_smt2`, `guru_kompetensi_dasar_keterampilan_noKI_smt2`, `guru_kompetensi_dasar_keterampilan_noKD_smt2`, `guru_kompetensi_dasar_keterampilan_noDKD_smt2`, `guru_kompetensi_dasar_spiritual_noKI_smt2`, `guru_kompetensi_dasar_spiritual_noKD_smt2`, `guru_kompetensi_dasar_spiritual_noDKD_smt2`, `guru_kompetensi_dasar_sosial_noKI_smt2`, `guru_kompetensi_dasar_sosial_noKD_smt2`, `guru_kompetensi_dasar_sosial_noDKD_smt2`, `guru_kompetensi_dasar_nip_pegawai_smt2`, `guru_kompetensi_dasar_mata_pelajaran_smt2`, `guru_kompetensi_dasar_kelas_smt2`, `guru_kompetensi_dasar_kelas_daftar_smt2`, `guru_kompetensi_dasar_semester_smt2`) VALUES
(31, '3', '3.11', 'peng1sem2', '4', '4.11', 'ket1sem2', '1', '1.11', 'spir1sem2', '2', '2.11', 'sos1sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(32, '3', '3.12', 'peng2sem2', '4', '4.12', 'ket2sem2', '1', '1.12', 'spir2sem2', '2', '2.12', 'sos2sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(33, '3', '3.13', 'peng3sem2', '4', '4.13', 'ket3sem2', '1', '1.13', 'spir3sem2', '2', '2.13', 'sos3sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(34, '3', '3.14', 'peng4sem2', '4', '4.14', 'ket4sem2', '1', '1.14', 'spir4sem2', '2', '2.14', 'sos4sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(35, '3', '3.15', 'peng5sem2', '4', '4.15', 'ket5sem2', '1', '1.15', 'spir5sem2', '2', '2.15', 'sos5sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(36, '3', '3.16', 'peng6sem2', '4', '4.16', 'ket6sem2', '1', '1.16', 'spir6sem2', '2', '2.16', 'sos6sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(37, '3', '3.17', 'peng7sem2', '4', '4.17', 'ket7sem2', '1', '1.17', 'spir7sem2', '2', '2.17', 'sos7sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(38, '3', '3.18', 'peng8sem2', '4', '4.18', 'ket8sem2', '1', '1.18', 'spir8sem2', '2', '2.18', 'sos8sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(39, '3', '3.19', 'peng9sem2', '4', '4.19', 'ket9sem2', '1', '1.19', 'spir9sem2', '2', '2.19', 'sos9sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(40, '3', '3.20', 'peng10sem2', '4', '4.20', 'ket10sem2', '1', '1.20', 'spir10sem2', '2', '2.20', 'sos10sem2', '123321233243212', 'penjas', 10, '10IPA1', 2),
(41, '3', '3.11', 'peng1sem2', '4', '4.11', 'ket1sem2', '1', '1.11', 'spir1sem2', '2', '2.11', 'sos1sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(42, '3', '3.12', 'peng2sem2', '4', '4.12', 'ket2sem2', '1', '1.12', 'spir2sem2', '2', '2.12', 'sos2sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(43, '3', '3.13', 'peng3sem2', '4', '4.13', 'ket3sem2', '1', '1.13', 'spir3sem2', '2', '2.13', 'sos3sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(44, '3', '3.14', 'peng4sem2', '4', '4.14', 'ket4sem2', '1', '1.14', 'spir4sem2', '2', '2.14', 'sos4sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(45, '3', '3.15', 'peng5sem2', '4', '4.15', 'ket5sem2', '1', '1.15', 'spir5sem2', '2', '2.15', 'sos5sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(46, '3', '3.16', 'peng6sem2', '4', '4.16', 'ket6sem2', '1', '1.16', 'spir6sem2', '2', '2.16', 'sos6sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(47, '3', '3.17', 'peng7sem2', '4', '4.17', 'ket7sem2', '1', '1.17', 'spir7sem2', '2', '2.17', 'sos7sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(48, '3', '3.18', 'peng8sem2', '4', '4.18', 'ket8sem2', '1', '1.18', 'spir8sem2', '2', '2.18', 'sos8sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(49, '3', '3.19', 'peng9sem2', '4', '4.19', 'ket9sem2', '1', '1.19', 'spir9sem2', '2', '2.19', 'sos9sem2', '543254325432', 'aqh', 10, '10IPA1', 2),
(50, '3', '3.20', 'peng10sem2', '4', '4.20', 'ket10sem2', '1', '1.20', 'spir10sem2', '2', '2.20', 'sos10sem2', '543254325432', 'aqh', 10, '10IPA1', 2);

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `id_jabatan` varchar(10) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `id_jabatan`, `nama_jabatan`) VALUES
(1, 'admin', 'Administrator'),
(2, 'guru', 'Guru'),
(4, 'bk', 'BK');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_daftar`
--

CREATE TABLE `kelas_daftar` (
  `id_kelas_daftar` varchar(15) NOT NULL,
  `nama_kelas_daftar` varchar(15) NOT NULL,
  `kelompok_kelas_daftar` varchar(10) NOT NULL,
  `kelas_daftar_kelas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_daftar`
--

INSERT INTO `kelas_daftar` (`id_kelas_daftar`, `nama_kelas_daftar`, `kelompok_kelas_daftar`, `kelas_daftar_kelas`) VALUES
('10Agama1', '10 Agama 1', 'Agama', 10),
('10Bahasa1', '10 Bahasa 1', 'Bahasa', 10),
('10IPA1', '10 IPA 1', 'IPA', 10),
('10IPA2', '10 IPA 2', 'IPA', 10),
('10IPA3', '10 IPA 3', 'IPA', 10),
('10IPS1', '10 IPS 1', 'IPS', 10),
('10IPS2', '10 IPS 2', 'IPS', 10),
('10IPS3', '10 IPS 3', 'IPS', 10),
('11Agama1', '11 Agama 1', 'Agama', 11),
('11Bahasa1', '11 Bahasa 1', 'Bahasa', 11),
('11IPA1', '11 IPA 1', 'IPA', 11),
('11IPA2', '11 IPA 2', 'IPA', 11),
('11IPA3', '11 IPA 3', 'IPA', 11),
('11IPS1', '11 IPS 1', 'IPS', 11),
('11IPS2', '11 IPS 2', 'IPS', 11),
('11IPS3', '11 IPS 3', 'IPS', 11),
('12Agama1', '12 Agama 1', 'Agama', 12),
('12Bahasa1', '12 Bahasa 1', 'Bahasa', 12),
('12IPA1', '12 IPA 1', 'IPA', 12),
('12IPA2', '12 IPA 2', 'IPA', 12),
('12IPA3', '12 IPA 3', 'IPA', 12),
('12IPS1', '12 IPS 1', 'IPS', 12),
('12IPS2', '12 IPS 2', 'IPS', 12),
('12IPS3', '12 IPS 3', 'IPS', 12);

-- --------------------------------------------------------

--
-- Table structure for table `kelas_transaksi`
--

CREATE TABLE `kelas_transaksi` (
  `id_kelas_transaksi` int(11) NOT NULL,
  `id_kelas_daftar` varchar(15) NOT NULL,
  `nama_kelas_transaksi` varchar(15) NOT NULL,
  `wali_kelas_transaksi` varchar(50) NOT NULL,
  `kelompok_kelas_kelas_transaksi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `kelas_transaksi`
--

INSERT INTO `kelas_transaksi` (`id_kelas_transaksi`, `id_kelas_daftar`, `nama_kelas_transaksi`, `wali_kelas_transaksi`, `kelompok_kelas_kelas_transaksi`) VALUES
(2, '10IPA1', '10 IPA 1', 'Kalong Lagi Mancing', 'IPA'),
(15, '10IPA3', '10 IPA 3', 'Joni Markutut', 'IPA'),
(17, '10Agama1', '10 Agama 1', 'Tukijems', 'Agama');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id` int(11) NOT NULL,
  `id_mata_pelajaran` varchar(15) NOT NULL,
  `nama_mata_pelajaran` varchar(40) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL,
  `kelompok_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id`, `id_mata_pelajaran`, `nama_mata_pelajaran`, `nama_jabatan`, `kelompok_kelas`) VALUES
(3, 'aqh', 'Al Qur\'an Hadits', 'Guru', 'Agama'),
(4, 'aa', 'Akidah Akhlak', 'Guru', 'Agama'),
(5, 'fqh', 'Fiqih', 'Guru', 'Agama'),
(6, 'ski', 'Sejarah Kebudayaan Islam', 'Guru', 'Agama'),
(7, 'pkn', 'Pendidikan Kewarga Negaraan', 'Guru', 'Agama'),
(8, 'bi', 'Bahasa dan Sastra Indonesia', 'Guru', 'Agama'),
(9, 'barab', 'Bahasa Arab', 'Guru', 'Agama'),
(10, 'bing', 'Bahasa Inggris', 'Guru', 'Agama'),
(11, 'mtk', 'Matematika', 'Guru', 'Agama'),
(12, 'ksn', 'Kesenian', 'Guru', 'Agama'),
(13, 'penjas', 'Pendidikan Jasmani', 'Guru', 'Agama'),
(21, 'tik', 'Teknologi Informasi dan Komunikasi', 'Guru', 'Agama'),
(22, 'ketlok', 'Keterampilan Lokal', 'Guru', 'Agama'),
(23, 'bk', 'Bimbingan Konseling', 'Guru', 'Agama'),
(24, 'null', 'Null', 'Administrator', 'Agama'),
(25, 'null2', 'Null', 'BK', 'Agama'),
(26, 'aqh', 'Al Qur\'an Hadits', 'Guru', 'IPA'),
(27, 'aa', 'Akidah Akhlak', 'Guru', 'IPA'),
(28, 'fqh', 'Fiqih', 'Guru', 'IPA'),
(29, 'ski', 'Sejarah Kebudayaan Islam', 'Guru', 'IPA'),
(30, 'pkn', 'Pendidikan Kewarga Negaraan', 'Guru', 'IPA'),
(31, 'bi', 'Bahasa dan Sastra Indonesia', 'Guru', 'IPA'),
(32, 'barab', 'Bahasa Arab', 'Guru', 'IPA'),
(33, 'bing', 'Bahasa Inggris', 'Guru', 'IPA'),
(34, 'mtk', 'Matematika', 'Guru', 'IPA'),
(35, 'ksn', 'Kesenian', 'Guru', 'IPA'),
(36, 'penjas', 'Pendidikan Jasmani', 'Guru', 'IPA'),
(41, 'fis', 'Fisika', 'Guru', 'IPA'),
(42, 'kim', 'Kimia', 'Guru', 'IPA'),
(43, 'bio', 'Biologi', 'Guru', 'IPA'),
(44, 'tik', 'Teknologi Informasi dan Komunikasi', 'Guru', 'IPA'),
(45, 'ketlok', 'Keterampilan Lokal', 'Guru', 'IPA'),
(46, 'bk', 'Bimbingan Konseling', 'Guru', 'IPA'),
(47, 'null', 'Null', 'Administrator', 'IPA'),
(48, 'null2', 'Null', 'BK', 'IPA'),
(49, 'aqh', 'Al Qur\'an Hadits', 'Guru', 'Bahasa'),
(50, 'aa', 'Akidah Akhlak', 'Guru', 'Bahasa'),
(51, 'fqh', 'Fiqih', 'Guru', 'Bahasa'),
(52, 'ski', 'Sejarah Kebudayaan Islam', 'Guru', 'Bahasa'),
(53, 'pkn', 'Pendidikan Kewarga Negaraan', 'Guru', 'Bahasa'),
(54, 'bi', 'Bahasa dan Sastra Indonesia', 'Guru', 'Bahasa'),
(55, 'barab', 'Bahasa Arab', 'Guru', 'Bahasa'),
(56, 'bing', 'Bahasa Inggris', 'Guru', 'Bahasa'),
(57, 'mtk', 'Matematika', 'Guru', 'Bahasa'),
(58, 'ksn', 'Kesenian', 'Guru', 'Bahasa'),
(59, 'penjas', 'Pendidikan Jasmani', 'Guru', 'Bahasa'),
(67, 'tik', 'Teknologi Informasi dan Komunikasi', 'Guru', 'Bahasa'),
(68, 'ketlok', 'Keterampilan Lokal', 'Guru', 'Bahasa'),
(69, 'bk', 'Bimbingan Konseling', 'Guru', 'Bahasa'),
(70, 'null', 'Null', 'Administrator', 'Bahasa'),
(71, 'null2', 'Null', 'BK', 'Bahasa'),
(72, 'aqh', 'Al Qur\'an Hadits', 'Guru', 'IPS'),
(73, 'aa', 'Akidah Akhlak', 'Guru', 'IPS'),
(74, 'fqh', 'Fiqih', 'Guru', 'IPS'),
(75, 'ski', 'Sejarah Kebudayaan Islam', 'Guru', 'IPS'),
(76, 'pkn', 'Pendidikan Kewarga Negaraan', 'Guru', 'IPS'),
(77, 'bi', 'Bahasa dan Sastra Indonesia', 'Guru', 'IPS'),
(78, 'barab', 'Bahasa Arab', 'Guru', 'IPS'),
(79, 'bing', 'Bahasa Inggris', 'Guru', 'IPS'),
(80, 'mtk', 'Matematika', 'Guru', 'IPS'),
(81, 'ksn', 'Kesenian', 'Guru', 'IPS'),
(82, 'penjas', 'Pendidikan Jasmani', 'Guru', 'IPS'),
(83, 'sjr', 'Sejarah', 'Guru', 'IPS'),
(84, 'geo', 'Geografi', 'Guru', 'IPS'),
(85, 'eko', 'Ekonomi', 'Guru', 'IPS'),
(86, 'sos', 'Sosiologi', 'Guru', 'IPS'),
(90, 'tik', 'Teknologi Informasi dan Komunikasi', 'Guru', 'IPS'),
(91, 'ketlok', 'Keterampilan Lokal', 'Guru', 'IPS'),
(92, 'bk', 'Bimbingan Konseling', 'Guru', 'IPS'),
(93, 'null', 'Null', 'Administrator', 'IPS'),
(94, 'null2', 'Null', 'BK', 'IPS'),
(95, 'itaf', 'Ilmu Tafsir', 'Guru', 'Agama'),
(96, 'ihad', 'Ilmu Hadits', 'Guru', 'Agama'),
(97, 'ifqh', 'Ilmu Fiqih', 'Guru', 'Agama'),
(99, 'sindo', 'Sastra Indonesia', 'Guru', 'Bahasa'),
(100, 'sing', 'Sastra Inggris', 'Guru', 'Bahasa'),
(101, 'antro', 'Antropologi', 'Guru', 'Bahasa');

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_transaksi`
--

CREATE TABLE `mata_pelajaran_transaksi` (
  `id_mata_pelajaran_transaksi` int(11) NOT NULL,
  `id_kelas_daftar` varchar(15) NOT NULL,
  `id_mata_pelajaran_mata_pelajaran_transaksi` varchar(10) NOT NULL,
  `kkm_rendah_mata_pelajaran_transaksi` varchar(7) NOT NULL,
  `kkm_tengah_mata_pelajaran_transaksi` varchar(7) NOT NULL,
  `kkm_tinggi_mata_pelajaran_transaksi` varchar(7) NOT NULL,
  `nama_kelas_mata_pelajaran_transaksi` varchar(15) NOT NULL,
  `nama_mata_pelajaran_transaksi` varchar(45) NOT NULL,
  `nip_pegawai_mata_pelajaran_transaksi` varchar(50) NOT NULL,
  `kelas_mata_pelajaran_transaksi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `mata_pelajaran_transaksi`
--

INSERT INTO `mata_pelajaran_transaksi` (`id_mata_pelajaran_transaksi`, `id_kelas_daftar`, `id_mata_pelajaran_mata_pelajaran_transaksi`, `kkm_rendah_mata_pelajaran_transaksi`, `kkm_tengah_mata_pelajaran_transaksi`, `kkm_tinggi_mata_pelajaran_transaksi`, `nama_kelas_mata_pelajaran_transaksi`, `nama_mata_pelajaran_transaksi`, `nip_pegawai_mata_pelajaran_transaksi`, `kelas_mata_pelajaran_transaksi`) VALUES
(4, '10IPA1', 'penjas', '68.00', '79.00', '89.00', '10 IPA 1', 'Pendidikan Jasmani', '123321233243212', 10),
(5, '10IPA1', 'aqh', '90', '', '', '10 IPA 1', 'Al Qur\'an Hadits', '543254325432', 10);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt1_keterampilan`
--

CREATE TABLE `nilai_siswa_transaksi_smt1_keterampilan` (
  `id_nilai_siswa_transaksi_smt1_keterampilan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt1_keterampilan` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt1_keterampilan` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt1_keterampilan`
--

INSERT INTO `nilai_siswa_transaksi_smt1_keterampilan` (`id_nilai_siswa_transaksi_smt1_keterampilan`, `nis_siswa_nilai_siswa_transaksi_smt1_keterampilan`, `nama_kelas_nilai_siswa_transaksi_smt1_keterampilan`, `id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan`, `nip_pegawai_nilai_siswa_transaksi_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi1_smt1_keterampilan`, `observasi_nilai_siswa_transaksi1_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi1_smt1_keterampilan`, `rerata_nilai_siswa_transaksi1_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi1_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi1_smt1_keterampilan`, `uas_nilai_siswa_transaksi1_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi1_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi1_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi1_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi2_smt1_keterampilan`, `observasi_nilai_siswa_transaksi2_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi2_smt1_keterampilan`, `rerata_nilai_siswa_transaksi2_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi2_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi2_smt1_keterampilan`, `uas_nilai_siswa_transaksi2_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi2_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi2_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi2_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi3_smt1_keterampilan`, `observasi_nilai_siswa_transaksi3_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi3_smt1_keterampilan`, `rerata_nilai_siswa_transaksi3_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi3_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi3_smt1_keterampilan`, `uas_nilai_siswa_transaksi3_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi3_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi3_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi3_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi4_smt1_keterampilan`, `observasi_nilai_siswa_transaksi4_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi4_smt1_keterampilan`, `rerata_nilai_siswa_transaksi4_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi4_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi4_smt1_keterampilan`, `uas_nilai_siswa_transaksi4_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi4_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi4_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi4_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi5_smt1_keterampilan`, `observasi_nilai_siswa_transaksi5_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi5_smt1_keterampilan`, `rerata_nilai_siswa_transaksi5_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi5_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi5_smt1_keterampilan`, `uas_nilai_siswa_transaksi5_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi5_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi5_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi5_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi6_smt1_keterampilan`, `observasi_nilai_siswa_transaksi6_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi6_smt1_keterampilan`, `rerata_nilai_siswa_transaksi6_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi6_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi6_smt1_keterampilan`, `uas_nilai_siswa_transaksi6_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi6_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi6_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi6_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi7_smt1_keterampilan`, `observasi_nilai_siswa_transaksi7_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi7_smt1_keterampilan`, `rerata_nilai_siswa_transaksi7_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi7_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi7_smt1_keterampilan`, `uas_nilai_siswa_transaksi7_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi7_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi7_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi7_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi8_smt1_keterampilan`, `observasi_nilai_siswa_transaksi8_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi8_smt1_keterampilan`, `rerata_nilai_siswa_transaksi8_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi8_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi8_smt1_keterampilan`, `uas_nilai_siswa_transaksi8_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi8_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi8_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi8_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi9_smt1_keterampilan`, `observasi_nilai_siswa_transaksi9_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi9_smt1_keterampilan`, `rerata_nilai_siswa_transaksi9_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi9_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi9_smt1_keterampilan`, `uas_nilai_siswa_transaksi9_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi9_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi9_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi9_smt1_keterampilan`, `tes_tulis_nilai_siswa_transaksi10_smt1_keterampilan`, `observasi_nilai_siswa_transaksi10_smt1_keterampilan`, `penugasan_nilai_siswa_transaksi10_smt1_keterampilan`, `rerata_nilai_siswa_transaksi10_smt1_keterampilan`, `nh_remidi_nilai_siswa_transaksi10_smt1_keterampilan`, `nah_kd_nilai_siswa_transaksi10_smt1_keterampilan`, `uas_nilai_siswa_transaksi10_smt1_keterampilan`, `uas_remidi_nilai_siswa_transaksi10_smt1_keterampilan`, `na_uas_nilai_siswa_transaksi10_smt1_keterampilan`, `rerata_akhir_nilai_siswa_transaksi10_smt1_keterampilan`) VALUES
(234, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt1_pengetahuan`
--

CREATE TABLE `nilai_siswa_transaksi_smt1_pengetahuan` (
  `id_nilai_siswa_transaksi_smt1_pengetahuan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(40) NOT NULL,
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
  `rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt1_pengetahuan`
--

INSERT INTO `nilai_siswa_transaksi_smt1_pengetahuan` (`id_nilai_siswa_transaksi_smt1_pengetahuan`, `nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan`, `nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan`, `id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan`, `nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi1_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi1_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi1_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi1_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi1_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi1_smt1_pengetahuan`, `uas_nilai_siswa_transaksi1_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi1_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi1_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi1_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi2_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi2_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi2_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi2_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi2_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi2_smt1_pengetahuan`, `uas_nilai_siswa_transaksi2_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi2_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi2_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi2_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi3_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi3_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi3_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi3_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi3_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi3_smt1_pengetahuan`, `uas_nilai_siswa_transaksi3_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi3_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi3_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi3_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi4_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi4_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi4_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi4_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi4_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi4_smt1_pengetahuan`, `uas_nilai_siswa_transaksi4_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi4_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi4_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi4_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi5_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi5_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi5_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi5_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi5_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi5_smt1_pengetahuan`, `uas_nilai_siswa_transaksi5_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi5_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi5_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi5_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi6_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi6_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi6_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi6_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi6_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi6_smt1_pengetahuan`, `uas_nilai_siswa_transaksi6_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi6_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi6_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi6_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi7_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi7_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi7_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi7_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi7_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi7_smt1_pengetahuan`, `uas_nilai_siswa_transaksi7_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi7_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi7_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi7_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi8_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi8_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi8_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi8_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi8_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi8_smt1_pengetahuan`, `uas_nilai_siswa_transaksi8_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi8_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi8_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi8_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi9_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi9_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi9_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi9_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi9_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi9_smt1_pengetahuan`, `uas_nilai_siswa_transaksi9_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi9_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi9_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi9_smt1_pengetahuan`, `tes_tulis_nilai_siswa_transaksi10_smt1_pengetahuan`, `observasi_nilai_siswa_transaksi10_smt1_pengetahuan`, `penugasan_nilai_siswa_transaksi10_smt1_pengetahuan`, `rerata_nilai_siswa_transaksi10_smt1_pengetahuan`, `nh_remidi_nilai_siswa_transaksi10_smt1_pengetahuan`, `nah_kd_nilai_siswa_transaksi10_smt1_pengetahuan`, `uas_nilai_siswa_transaksi10_smt1_pengetahuan`, `uas_remidi_nilai_siswa_transaksi10_smt1_pengetahuan`, `na_uas_nilai_siswa_transaksi10_smt1_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi10_smt1_pengetahuan`) VALUES
(234, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt1_sosial`
--

CREATE TABLE `nilai_siswa_transaksi_smt1_sosial` (
  `id_nilai_siswa_transaksi_smt1_sosial` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt1_sosial` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt1_sosial` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt1_sosial` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt1_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt1_sosial` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt1_sosial`
--

INSERT INTO `nilai_siswa_transaksi_smt1_sosial` (`id_nilai_siswa_transaksi_smt1_sosial`, `nis_siswa_nilai_siswa_transaksi_smt1_sosial`, `nama_kelas_nilai_siswa_transaksi_smt1_sosial`, `id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial`, `nip_pegawai_nilai_siswa_transaksi_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi1_smt1_sosial`, `observasi_nilai_siswa_transaksi1_smt1_sosial`, `penugasan_nilai_siswa_transaksi1_smt1_sosial`, `rerata_nilai_siswa_transaksi1_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi1_smt1_sosial`, `nah_kd_nilai_siswa_transaksi1_smt1_sosial`, `uas_nilai_siswa_transaksi1_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi1_smt1_sosial`, `na_uas_nilai_siswa_transaksi1_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi1_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi2_smt1_sosial`, `observasi_nilai_siswa_transaksi2_smt1_sosial`, `penugasan_nilai_siswa_transaksi2_smt1_sosial`, `rerata_nilai_siswa_transaksi2_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi2_smt1_sosial`, `nah_kd_nilai_siswa_transaksi2_smt1_sosial`, `uas_nilai_siswa_transaksi2_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi2_smt1_sosial`, `na_uas_nilai_siswa_transaksi2_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi2_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi3_smt1_sosial`, `observasi_nilai_siswa_transaksi3_smt1_sosial`, `penugasan_nilai_siswa_transaksi3_smt1_sosial`, `rerata_nilai_siswa_transaksi3_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi3_smt1_sosial`, `nah_kd_nilai_siswa_transaksi3_smt1_sosial`, `uas_nilai_siswa_transaksi3_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi3_smt1_sosial`, `na_uas_nilai_siswa_transaksi3_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi3_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi4_smt1_sosial`, `observasi_nilai_siswa_transaksi4_smt1_sosial`, `penugasan_nilai_siswa_transaksi4_smt1_sosial`, `rerata_nilai_siswa_transaksi4_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi4_smt1_sosial`, `nah_kd_nilai_siswa_transaksi4_smt1_sosial`, `uas_nilai_siswa_transaksi4_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi4_smt1_sosial`, `na_uas_nilai_siswa_transaksi4_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi4_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi5_smt1_sosial`, `observasi_nilai_siswa_transaksi5_smt1_sosial`, `penugasan_nilai_siswa_transaksi5_smt1_sosial`, `rerata_nilai_siswa_transaksi5_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi5_smt1_sosial`, `nah_kd_nilai_siswa_transaksi5_smt1_sosial`, `uas_nilai_siswa_transaksi5_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi5_smt1_sosial`, `na_uas_nilai_siswa_transaksi5_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi5_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi6_smt1_sosial`, `observasi_nilai_siswa_transaksi6_smt1_sosial`, `penugasan_nilai_siswa_transaksi6_smt1_sosial`, `rerata_nilai_siswa_transaksi6_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi6_smt1_sosial`, `nah_kd_nilai_siswa_transaksi6_smt1_sosial`, `uas_nilai_siswa_transaksi6_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi6_smt1_sosial`, `na_uas_nilai_siswa_transaksi6_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi6_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi7_smt1_sosial`, `observasi_nilai_siswa_transaksi7_smt1_sosial`, `penugasan_nilai_siswa_transaksi7_smt1_sosial`, `rerata_nilai_siswa_transaksi7_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi7_smt1_sosial`, `nah_kd_nilai_siswa_transaksi7_smt1_sosial`, `uas_nilai_siswa_transaksi7_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi7_smt1_sosial`, `na_uas_nilai_siswa_transaksi7_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi7_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi8_smt1_sosial`, `observasi_nilai_siswa_transaksi8_smt1_sosial`, `penugasan_nilai_siswa_transaksi8_smt1_sosial`, `rerata_nilai_siswa_transaksi8_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi8_smt1_sosial`, `nah_kd_nilai_siswa_transaksi8_smt1_sosial`, `uas_nilai_siswa_transaksi8_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi8_smt1_sosial`, `na_uas_nilai_siswa_transaksi8_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi8_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi9_smt1_sosial`, `observasi_nilai_siswa_transaksi9_smt1_sosial`, `penugasan_nilai_siswa_transaksi9_smt1_sosial`, `rerata_nilai_siswa_transaksi9_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi9_smt1_sosial`, `nah_kd_nilai_siswa_transaksi9_smt1_sosial`, `uas_nilai_siswa_transaksi9_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi9_smt1_sosial`, `na_uas_nilai_siswa_transaksi9_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi9_smt1_sosial`, `tes_tulis_nilai_siswa_transaksi10_smt1_sosial`, `observasi_nilai_siswa_transaksi10_smt1_sosial`, `penugasan_nilai_siswa_transaksi10_smt1_sosial`, `rerata_nilai_siswa_transaksi10_smt1_sosial`, `nh_remidi_nilai_siswa_transaksi10_smt1_sosial`, `nah_kd_nilai_siswa_transaksi10_smt1_sosial`, `uas_nilai_siswa_transaksi10_smt1_sosial`, `uas_remidi_nilai_siswa_transaksi10_smt1_sosial`, `na_uas_nilai_siswa_transaksi10_smt1_sosial`, `rerata_akhir_nilai_siswa_transaksi10_smt1_sosial`) VALUES
(234, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(235, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(237, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(238, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(239, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(240, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(241, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(242, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(243, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(244, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(245, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(246, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(247, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(248, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(249, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt1_spiritual`
--

CREATE TABLE `nilai_siswa_transaksi_smt1_spiritual` (
  `id_nilai_siswa_transaksi_smt1_spiritual` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt1_spiritual` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt1_spiritual` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt1_spiritual` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt1_spiritual`
--

INSERT INTO `nilai_siswa_transaksi_smt1_spiritual` (`id_nilai_siswa_transaksi_smt1_spiritual`, `nis_siswa_nilai_siswa_transaksi_smt1_spiritual`, `nama_kelas_nilai_siswa_transaksi_smt1_spiritual`, `id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual`, `nip_pegawai_nilai_siswa_transaksi_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi1_smt1_spiritual`, `observasi_nilai_siswa_transaksi1_smt1_spiritual`, `penugasan_nilai_siswa_transaksi1_smt1_spiritual`, `rerata_nilai_siswa_transaksi1_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi1_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi1_smt1_spiritual`, `uas_nilai_siswa_transaksi1_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi1_smt1_spiritual`, `na_uas_nilai_siswa_transaksi1_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi1_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi2_smt1_spiritual`, `observasi_nilai_siswa_transaksi2_smt1_spiritual`, `penugasan_nilai_siswa_transaksi2_smt1_spiritual`, `rerata_nilai_siswa_transaksi2_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi2_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi2_smt1_spiritual`, `uas_nilai_siswa_transaksi2_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi2_smt1_spiritual`, `na_uas_nilai_siswa_transaksi2_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi2_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi3_smt1_spiritual`, `observasi_nilai_siswa_transaksi3_smt1_spiritual`, `penugasan_nilai_siswa_transaksi3_smt1_spiritual`, `rerata_nilai_siswa_transaksi3_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi3_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi3_smt1_spiritual`, `uas_nilai_siswa_transaksi3_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi3_smt1_spiritual`, `na_uas_nilai_siswa_transaksi3_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi3_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi4_smt1_spiritual`, `observasi_nilai_siswa_transaksi4_smt1_spiritual`, `penugasan_nilai_siswa_transaksi4_smt1_spiritual`, `rerata_nilai_siswa_transaksi4_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi4_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi4_smt1_spiritual`, `uas_nilai_siswa_transaksi4_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi4_smt1_spiritual`, `na_uas_nilai_siswa_transaksi4_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi4_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi5_smt1_spiritual`, `observasi_nilai_siswa_transaksi5_smt1_spiritual`, `penugasan_nilai_siswa_transaksi5_smt1_spiritual`, `rerata_nilai_siswa_transaksi5_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi5_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi5_smt1_spiritual`, `uas_nilai_siswa_transaksi5_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi5_smt1_spiritual`, `na_uas_nilai_siswa_transaksi5_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi5_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi6_smt1_spiritual`, `observasi_nilai_siswa_transaksi6_smt1_spiritual`, `penugasan_nilai_siswa_transaksi6_smt1_spiritual`, `rerata_nilai_siswa_transaksi6_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi6_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi6_smt1_spiritual`, `uas_nilai_siswa_transaksi6_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi6_smt1_spiritual`, `na_uas_nilai_siswa_transaksi6_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi6_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi7_smt1_spiritual`, `observasi_nilai_siswa_transaksi7_smt1_spiritual`, `penugasan_nilai_siswa_transaksi7_smt1_spiritual`, `rerata_nilai_siswa_transaksi7_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi7_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi7_smt1_spiritual`, `uas_nilai_siswa_transaksi7_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi7_smt1_spiritual`, `na_uas_nilai_siswa_transaksi7_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi7_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi8_smt1_spiritual`, `observasi_nilai_siswa_transaksi8_smt1_spiritual`, `penugasan_nilai_siswa_transaksi8_smt1_spiritual`, `rerata_nilai_siswa_transaksi8_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi8_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi8_smt1_spiritual`, `uas_nilai_siswa_transaksi8_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi8_smt1_spiritual`, `na_uas_nilai_siswa_transaksi8_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi8_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi9_smt1_spiritual`, `observasi_nilai_siswa_transaksi9_smt1_spiritual`, `penugasan_nilai_siswa_transaksi9_smt1_spiritual`, `rerata_nilai_siswa_transaksi9_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi9_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi9_smt1_spiritual`, `uas_nilai_siswa_transaksi9_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi9_smt1_spiritual`, `na_uas_nilai_siswa_transaksi9_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi9_smt1_spiritual`, `tes_tulis_nilai_siswa_transaksi10_smt1_spiritual`, `observasi_nilai_siswa_transaksi10_smt1_spiritual`, `penugasan_nilai_siswa_transaksi10_smt1_spiritual`, `rerata_nilai_siswa_transaksi10_smt1_spiritual`, `nh_remidi_nilai_siswa_transaksi10_smt1_spiritual`, `nah_kd_nilai_siswa_transaksi10_smt1_spiritual`, `uas_nilai_siswa_transaksi10_smt1_spiritual`, `uas_remidi_nilai_siswa_transaksi10_smt1_spiritual`, `na_uas_nilai_siswa_transaksi10_smt1_spiritual`, `rerata_akhir_nilai_siswa_transaksi10_smt1_spiritual`) VALUES
(268, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt2_keterampilan`
--

CREATE TABLE `nilai_siswa_transaksi_smt2_keterampilan` (
  `id_nilai_siswa_transaksi_smt2_keterampilan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt2_keterampilan` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt2_keterampilan` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt2_keterampilan` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt2_keterampilan`
--

INSERT INTO `nilai_siswa_transaksi_smt2_keterampilan` (`id_nilai_siswa_transaksi_smt2_keterampilan`, `nis_siswa_nilai_siswa_transaksi_smt2_keterampilan`, `nama_kelas_nilai_siswa_transaksi_smt2_keterampilan`, `id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan`, `nip_pegawai_nilai_siswa_transaksi_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi1_smt2_keterampilan`, `observasi_nilai_siswa_transaksi1_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi1_smt2_keterampilan`, `rerata_nilai_siswa_transaksi1_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi1_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi1_smt2_keterampilan`, `uas_nilai_siswa_transaksi1_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi1_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi1_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi1_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi2_smt2_keterampilan`, `observasi_nilai_siswa_transaksi2_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi2_smt2_keterampilan`, `rerata_nilai_siswa_transaksi2_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi2_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi2_smt2_keterampilan`, `uas_nilai_siswa_transaksi2_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi2_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi2_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi2_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi3_smt2_keterampilan`, `observasi_nilai_siswa_transaksi3_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi3_smt2_keterampilan`, `rerata_nilai_siswa_transaksi3_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi3_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi3_smt2_keterampilan`, `uas_nilai_siswa_transaksi3_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi3_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi3_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi3_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi4_smt2_keterampilan`, `observasi_nilai_siswa_transaksi4_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi4_smt2_keterampilan`, `rerata_nilai_siswa_transaksi4_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi4_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi4_smt2_keterampilan`, `uas_nilai_siswa_transaksi4_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi4_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi4_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi4_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi5_smt2_keterampilan`, `observasi_nilai_siswa_transaksi5_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi5_smt2_keterampilan`, `rerata_nilai_siswa_transaksi5_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi5_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi5_smt2_keterampilan`, `uas_nilai_siswa_transaksi5_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi5_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi5_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi5_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi6_smt2_keterampilan`, `observasi_nilai_siswa_transaksi6_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi6_smt2_keterampilan`, `rerata_nilai_siswa_transaksi6_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi6_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi6_smt2_keterampilan`, `uas_nilai_siswa_transaksi6_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi6_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi6_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi6_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi7_smt2_keterampilan`, `observasi_nilai_siswa_transaksi7_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi7_smt2_keterampilan`, `rerata_nilai_siswa_transaksi7_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi7_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi7_smt2_keterampilan`, `uas_nilai_siswa_transaksi7_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi7_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi7_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi7_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi8_smt2_keterampilan`, `observasi_nilai_siswa_transaksi8_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi8_smt2_keterampilan`, `rerata_nilai_siswa_transaksi8_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi8_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi8_smt2_keterampilan`, `uas_nilai_siswa_transaksi8_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi8_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi8_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi8_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi9_smt2_keterampilan`, `observasi_nilai_siswa_transaksi9_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi9_smt2_keterampilan`, `rerata_nilai_siswa_transaksi9_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi9_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi9_smt2_keterampilan`, `uas_nilai_siswa_transaksi9_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi9_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi9_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi9_smt2_keterampilan`, `tes_tulis_nilai_siswa_transaksi10_smt2_keterampilan`, `observasi_nilai_siswa_transaksi10_smt2_keterampilan`, `penugasan_nilai_siswa_transaksi10_smt2_keterampilan`, `rerata_nilai_siswa_transaksi10_smt2_keterampilan`, `nh_remidi_nilai_siswa_transaksi10_smt2_keterampilan`, `nah_kd_nilai_siswa_transaksi10_smt2_keterampilan`, `uas_nilai_siswa_transaksi10_smt2_keterampilan`, `uas_remidi_nilai_siswa_transaksi10_smt2_keterampilan`, `na_uas_nilai_siswa_transaksi10_smt2_keterampilan`, `rerata_akhir_nilai_siswa_transaksi10_smt2_keterampilan`) VALUES
(268, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt2_pengetahuan`
--

CREATE TABLE `nilai_siswa_transaksi_smt2_pengetahuan` (
  `id_nilai_siswa_transaksi_smt2_pengetahuan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(40) NOT NULL,
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
  `rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt2_pengetahuan`
--

INSERT INTO `nilai_siswa_transaksi_smt2_pengetahuan` (`id_nilai_siswa_transaksi_smt2_pengetahuan`, `nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan`, `nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan`, `id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan`, `nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi1_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi1_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi1_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi1_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi1_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi1_smt2_pengetahuan`, `uas_nilai_siswa_transaksi1_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi1_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi1_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi1_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi2_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi2_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi2_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi2_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi2_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi2_smt2_pengetahuan`, `uas_nilai_siswa_transaksi2_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi2_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi2_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi2_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi3_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi3_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi3_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi3_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi3_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi3_smt2_pengetahuan`, `uas_nilai_siswa_transaksi3_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi3_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi3_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi3_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi4_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi4_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi4_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi4_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi4_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi4_smt2_pengetahuan`, `uas_nilai_siswa_transaksi4_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi4_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi4_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi4_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi5_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi5_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi5_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi5_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi5_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi5_smt2_pengetahuan`, `uas_nilai_siswa_transaksi5_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi5_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi5_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi5_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi6_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi6_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi6_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi6_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi6_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi6_smt2_pengetahuan`, `uas_nilai_siswa_transaksi6_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi6_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi6_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi6_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi7_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi7_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi7_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi7_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi7_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi7_smt2_pengetahuan`, `uas_nilai_siswa_transaksi7_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi7_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi7_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi7_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi8_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi8_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi8_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi8_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi8_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi8_smt2_pengetahuan`, `uas_nilai_siswa_transaksi8_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi8_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi8_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi8_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi9_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi9_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi9_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi9_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi9_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi9_smt2_pengetahuan`, `uas_nilai_siswa_transaksi9_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi9_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi9_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi9_smt2_pengetahuan`, `tes_tulis_nilai_siswa_transaksi10_smt2_pengetahuan`, `observasi_nilai_siswa_transaksi10_smt2_pengetahuan`, `penugasan_nilai_siswa_transaksi10_smt2_pengetahuan`, `rerata_nilai_siswa_transaksi10_smt2_pengetahuan`, `nh_remidi_nilai_siswa_transaksi10_smt2_pengetahuan`, `nah_kd_nilai_siswa_transaksi10_smt2_pengetahuan`, `uas_nilai_siswa_transaksi10_smt2_pengetahuan`, `uas_remidi_nilai_siswa_transaksi10_smt2_pengetahuan`, `na_uas_nilai_siswa_transaksi10_smt2_pengetahuan`, `rerata_akhir_nilai_siswa_transaksi10_smt2_pengetahuan`) VALUES
(268, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt2_sosial`
--

CREATE TABLE `nilai_siswa_transaksi_smt2_sosial` (
  `id_nilai_siswa_transaksi_smt2_sosial` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt2_sosial` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt2_sosial` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt2_sosial` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt2_sosial` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt2_sosial` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt2_sosial`
--

INSERT INTO `nilai_siswa_transaksi_smt2_sosial` (`id_nilai_siswa_transaksi_smt2_sosial`, `nis_siswa_nilai_siswa_transaksi_smt2_sosial`, `nama_kelas_nilai_siswa_transaksi_smt2_sosial`, `id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial`, `nip_pegawai_nilai_siswa_transaksi_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi1_smt2_sosial`, `observasi_nilai_siswa_transaksi1_smt2_sosial`, `penugasan_nilai_siswa_transaksi1_smt2_sosial`, `rerata_nilai_siswa_transaksi1_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi1_smt2_sosial`, `nah_kd_nilai_siswa_transaksi1_smt2_sosial`, `uas_nilai_siswa_transaksi1_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi1_smt2_sosial`, `na_uas_nilai_siswa_transaksi1_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi1_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi2_smt2_sosial`, `observasi_nilai_siswa_transaksi2_smt2_sosial`, `penugasan_nilai_siswa_transaksi2_smt2_sosial`, `rerata_nilai_siswa_transaksi2_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi2_smt2_sosial`, `nah_kd_nilai_siswa_transaksi2_smt2_sosial`, `uas_nilai_siswa_transaksi2_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi2_smt2_sosial`, `na_uas_nilai_siswa_transaksi2_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi2_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi3_smt2_sosial`, `observasi_nilai_siswa_transaksi3_smt2_sosial`, `penugasan_nilai_siswa_transaksi3_smt2_sosial`, `rerata_nilai_siswa_transaksi3_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi3_smt2_sosial`, `nah_kd_nilai_siswa_transaksi3_smt2_sosial`, `uas_nilai_siswa_transaksi3_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi3_smt2_sosial`, `na_uas_nilai_siswa_transaksi3_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi3_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi4_smt2_sosial`, `observasi_nilai_siswa_transaksi4_smt2_sosial`, `penugasan_nilai_siswa_transaksi4_smt2_sosial`, `rerata_nilai_siswa_transaksi4_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi4_smt2_sosial`, `nah_kd_nilai_siswa_transaksi4_smt2_sosial`, `uas_nilai_siswa_transaksi4_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi4_smt2_sosial`, `na_uas_nilai_siswa_transaksi4_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi4_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi5_smt2_sosial`, `observasi_nilai_siswa_transaksi5_smt2_sosial`, `penugasan_nilai_siswa_transaksi5_smt2_sosial`, `rerata_nilai_siswa_transaksi5_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi5_smt2_sosial`, `nah_kd_nilai_siswa_transaksi5_smt2_sosial`, `uas_nilai_siswa_transaksi5_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi5_smt2_sosial`, `na_uas_nilai_siswa_transaksi5_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi5_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi6_smt2_sosial`, `observasi_nilai_siswa_transaksi6_smt2_sosial`, `penugasan_nilai_siswa_transaksi6_smt2_sosial`, `rerata_nilai_siswa_transaksi6_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi6_smt2_sosial`, `nah_kd_nilai_siswa_transaksi6_smt2_sosial`, `uas_nilai_siswa_transaksi6_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi6_smt2_sosial`, `na_uas_nilai_siswa_transaksi6_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi6_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi7_smt2_sosial`, `observasi_nilai_siswa_transaksi7_smt2_sosial`, `penugasan_nilai_siswa_transaksi7_smt2_sosial`, `rerata_nilai_siswa_transaksi7_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi7_smt2_sosial`, `nah_kd_nilai_siswa_transaksi7_smt2_sosial`, `uas_nilai_siswa_transaksi7_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi7_smt2_sosial`, `na_uas_nilai_siswa_transaksi7_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi7_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi8_smt2_sosial`, `observasi_nilai_siswa_transaksi8_smt2_sosial`, `penugasan_nilai_siswa_transaksi8_smt2_sosial`, `rerata_nilai_siswa_transaksi8_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi8_smt2_sosial`, `nah_kd_nilai_siswa_transaksi8_smt2_sosial`, `uas_nilai_siswa_transaksi8_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi8_smt2_sosial`, `na_uas_nilai_siswa_transaksi8_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi8_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi9_smt2_sosial`, `observasi_nilai_siswa_transaksi9_smt2_sosial`, `penugasan_nilai_siswa_transaksi9_smt2_sosial`, `rerata_nilai_siswa_transaksi9_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi9_smt2_sosial`, `nah_kd_nilai_siswa_transaksi9_smt2_sosial`, `uas_nilai_siswa_transaksi9_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi9_smt2_sosial`, `na_uas_nilai_siswa_transaksi9_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi9_smt2_sosial`, `tes_tulis_nilai_siswa_transaksi10_smt2_sosial`, `observasi_nilai_siswa_transaksi10_smt2_sosial`, `penugasan_nilai_siswa_transaksi10_smt2_sosial`, `rerata_nilai_siswa_transaksi10_smt2_sosial`, `nh_remidi_nilai_siswa_transaksi10_smt2_sosial`, `nah_kd_nilai_siswa_transaksi10_smt2_sosial`, `uas_nilai_siswa_transaksi10_smt2_sosial`, `uas_remidi_nilai_siswa_transaksi10_smt2_sosial`, `na_uas_nilai_siswa_transaksi10_smt2_sosial`, `rerata_akhir_nilai_siswa_transaksi10_smt2_sosial`) VALUES
(268, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(269, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(270, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(271, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(272, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(273, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(274, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(275, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(276, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(277, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(278, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(279, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(280, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(281, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(282, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(283, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt2_spiritual`
--

CREATE TABLE `nilai_siswa_transaksi_smt2_spiritual` (
  `id_nilai_siswa_transaksi_smt2_spiritual` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt2_spiritual` varchar(20) NOT NULL,
  `nama_kelas_nilai_siswa_transaksi_smt2_spiritual` varchar(15) NOT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual` varchar(10) NOT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual` varchar(40) NOT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt2_spiritual` varchar(20) NOT NULL,
  `tes_tulis_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual` varchar(3) DEFAULT NULL,
  `tes_tulis_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `observasi_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `penugasan_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nh_remidi_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `nah_kd_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `uas_remidi_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `na_uas_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL,
  `rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `nilai_siswa_transaksi_smt2_spiritual`
--

INSERT INTO `nilai_siswa_transaksi_smt2_spiritual` (`id_nilai_siswa_transaksi_smt2_spiritual`, `nis_siswa_nilai_siswa_transaksi_smt2_spiritual`, `nama_kelas_nilai_siswa_transaksi_smt2_spiritual`, `id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual`, `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual`, `nip_pegawai_nilai_siswa_transaksi_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi1_smt2_spiritual`, `observasi_nilai_siswa_transaksi1_smt2_spiritual`, `penugasan_nilai_siswa_transaksi1_smt2_spiritual`, `rerata_nilai_siswa_transaksi1_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi1_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi1_smt2_spiritual`, `uas_nilai_siswa_transaksi1_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi1_smt2_spiritual`, `na_uas_nilai_siswa_transaksi1_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi1_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi2_smt2_spiritual`, `observasi_nilai_siswa_transaksi2_smt2_spiritual`, `penugasan_nilai_siswa_transaksi2_smt2_spiritual`, `rerata_nilai_siswa_transaksi2_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi2_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi2_smt2_spiritual`, `uas_nilai_siswa_transaksi2_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi2_smt2_spiritual`, `na_uas_nilai_siswa_transaksi2_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi2_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi3_smt2_spiritual`, `observasi_nilai_siswa_transaksi3_smt2_spiritual`, `penugasan_nilai_siswa_transaksi3_smt2_spiritual`, `rerata_nilai_siswa_transaksi3_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi3_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi3_smt2_spiritual`, `uas_nilai_siswa_transaksi3_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi3_smt2_spiritual`, `na_uas_nilai_siswa_transaksi3_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi3_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi4_smt2_spiritual`, `observasi_nilai_siswa_transaksi4_smt2_spiritual`, `penugasan_nilai_siswa_transaksi4_smt2_spiritual`, `rerata_nilai_siswa_transaksi4_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi4_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi4_smt2_spiritual`, `uas_nilai_siswa_transaksi4_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi4_smt2_spiritual`, `na_uas_nilai_siswa_transaksi4_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi4_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi5_smt2_spiritual`, `observasi_nilai_siswa_transaksi5_smt2_spiritual`, `penugasan_nilai_siswa_transaksi5_smt2_spiritual`, `rerata_nilai_siswa_transaksi5_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi5_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi5_smt2_spiritual`, `uas_nilai_siswa_transaksi5_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi5_smt2_spiritual`, `na_uas_nilai_siswa_transaksi5_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi5_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi6_smt2_spiritual`, `observasi_nilai_siswa_transaksi6_smt2_spiritual`, `penugasan_nilai_siswa_transaksi6_smt2_spiritual`, `rerata_nilai_siswa_transaksi6_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi6_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi6_smt2_spiritual`, `uas_nilai_siswa_transaksi6_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi6_smt2_spiritual`, `na_uas_nilai_siswa_transaksi6_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi6_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi7_smt2_spiritual`, `observasi_nilai_siswa_transaksi7_smt2_spiritual`, `penugasan_nilai_siswa_transaksi7_smt2_spiritual`, `rerata_nilai_siswa_transaksi7_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi7_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi7_smt2_spiritual`, `uas_nilai_siswa_transaksi7_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi7_smt2_spiritual`, `na_uas_nilai_siswa_transaksi7_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi7_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi8_smt2_spiritual`, `observasi_nilai_siswa_transaksi8_smt2_spiritual`, `penugasan_nilai_siswa_transaksi8_smt2_spiritual`, `rerata_nilai_siswa_transaksi8_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi8_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi8_smt2_spiritual`, `uas_nilai_siswa_transaksi8_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi8_smt2_spiritual`, `na_uas_nilai_siswa_transaksi8_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi8_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi9_smt2_spiritual`, `observasi_nilai_siswa_transaksi9_smt2_spiritual`, `penugasan_nilai_siswa_transaksi9_smt2_spiritual`, `rerata_nilai_siswa_transaksi9_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi9_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi9_smt2_spiritual`, `uas_nilai_siswa_transaksi9_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi9_smt2_spiritual`, `na_uas_nilai_siswa_transaksi9_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi9_smt2_spiritual`, `tes_tulis_nilai_siswa_transaksi10_smt2_spiritual`, `observasi_nilai_siswa_transaksi10_smt2_spiritual`, `penugasan_nilai_siswa_transaksi10_smt2_spiritual`, `rerata_nilai_siswa_transaksi10_smt2_spiritual`, `nh_remidi_nilai_siswa_transaksi10_smt2_spiritual`, `nah_kd_nilai_siswa_transaksi10_smt2_spiritual`, `uas_nilai_siswa_transaksi10_smt2_spiritual`, `uas_remidi_nilai_siswa_transaksi10_smt2_spiritual`, `na_uas_nilai_siswa_transaksi10_smt2_spiritual`, `rerata_akhir_nilai_siswa_transaksi10_smt2_spiritual`) VALUES
(302, '432343255', '10IPA1', 'aqh', 'Al Qur\'an Hadits', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(303, '432343255', '10IPA1', 'aa', 'Akidah Akhlak', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(304, '432343255', '10IPA1', 'fqh', 'Fiqih', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(305, '432343255', '10IPA1', 'ski', 'Sejarah Kebudayaan Islam', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(306, '432343255', '10IPA1', 'pkn', 'Pendidikan Kewarga Negaraan', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(307, '432343255', '10IPA1', 'bi', 'Bahasa dan Sastra Indonesia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(308, '432343255', '10IPA1', 'barab', 'Bahasa Arab', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(309, '432343255', '10IPA1', 'bing', 'Bahasa Inggris', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(310, '432343255', '10IPA1', 'mtk', 'Matematika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(311, '432343255', '10IPA1', 'ksn', 'Kesenian', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(312, '432343255', '10IPA1', 'penjas', 'Pendidikan Jasmani', '123321233243212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(313, '432343255', '10IPA1', 'fis', 'Fisika', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(314, '432343255', '10IPA1', 'kim', 'Kimia', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(315, '432343255', '10IPA1', 'bio', 'Biologi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(316, '432343255', '10IPA1', 'tik', 'Teknologi Informasi dan Komunikasi', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(317, '432343255', '10IPA1', 'bk', 'Bimbingan Konseling', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pengirim_pesan` varchar(50) NOT NULL,
  `penerima_pesan` varchar(50) NOT NULL,
  `judul_pesan` text NOT NULL,
  `isi_pesan` text NOT NULL,
  `waktu_pesan` datetime NOT NULL,
  `cek_pesan` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pengirim_pesan`, `penerima_pesan`, `judul_pesan`, `isi_pesan`, `waktu_pesan`, `cek_pesan`) VALUES
(61, 'Kalong Lagi Mancing', 'Etdah Rahayu', 'kirim kalong ke etdah', 'kirim kalong ke etdah', '2017-08-09 02:52:36', 'Y'),
(62, 'Etdah Rahayu', 'Kalong Lagi Mancing', 'kirim etdah ke kalong', 'kirim etdah ke kalong', '2017-08-09 07:53:11', 'Y'),
(63, 'Kalong Lagi Mancing', 'Etdah Rahayu', 'bls kalong ke etdah', 'bls kalong ke etdah', '2017-08-09 07:53:49', 'Y'),
(64, 'Etdah Rahayu', 'Kalong Lagi Mancing', 'bls etdah ke kalong', 'bls etdah ke kalong', '2017-08-09 07:54:10', 'Y'),
(65, 'Roro Jongg', 'Bogel Kecuts', 'asd', 'asd', '2017-08-22 08:53:37', 'N'),
(66, 'Kalong Lagi Mancing', 'Roro Jongg', 'sd', 'sd', '2017-08-22 03:50:29', 'N');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD UNIQUE KEY `nip_pegawai` (`nip_pegawai`),
  ADD KEY `jabatan_pegawai` (`jabatan_pegawai`),
  ADD KEY `nama_mata_pelajaran` (`nama_mata_pelajaran_pegawai`),
  ADD KEY `nama_pegawai` (`nama_pegawai`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nisn` (`nisn_siswa`),
  ADD UNIQUE KEY `nis` (`nis_siswa`),
  ADD KEY `id_kelas_daftar` (`id_kelas_daftar`);

--
-- Indexes for table `guru_kompetensi_dasar_smt1`
--
ALTER TABLE `guru_kompetensi_dasar_smt1`
  ADD PRIMARY KEY (`id_guru_kompetensi_dasar_smt1`);

--
-- Indexes for table `guru_kompetensi_dasar_smt2`
--
ALTER TABLE `guru_kompetensi_dasar_smt2`
  ADD PRIMARY KEY (`id_guru_kompetensi_dasar_smt2`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_jabatan` (`nama_jabatan`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `kelas_daftar`
--
ALTER TABLE `kelas_daftar`
  ADD PRIMARY KEY (`id_kelas_daftar`),
  ADD KEY `nama_kelas_daftar` (`nama_kelas_daftar`),
  ADD KEY `kelompok_kelas` (`kelompok_kelas_daftar`);

--
-- Indexes for table `kelas_transaksi`
--
ALTER TABLE `kelas_transaksi`
  ADD PRIMARY KEY (`id_kelas_transaksi`),
  ADD KEY `nama_kelas_transaksi` (`nama_kelas_transaksi`),
  ADD KEY `wali_kelas_transaksi` (`wali_kelas_transaksi`),
  ADD KEY `id_kelas_daftar` (`id_kelas_daftar`),
  ADD KEY `kelompok_kelas_kelas_transaksi` (`kelompok_kelas_kelas_transaksi`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_mata_pelajaran` (`nama_mata_pelajaran`),
  ADD KEY `nama_mata_pelajaran_2` (`nama_mata_pelajaran`),
  ADD KEY `nama_jabatan` (`nama_jabatan`),
  ADD KEY `id_mata_pelajaran` (`id_mata_pelajaran`),
  ADD KEY `kelompok_kelas` (`kelompok_kelas`);

--
-- Indexes for table `mata_pelajaran_transaksi`
--
ALTER TABLE `mata_pelajaran_transaksi`
  ADD PRIMARY KEY (`id_mata_pelajaran_transaksi`),
  ADD KEY `nama_guru_mata_pelajaran_transaksi` (`nip_pegawai_mata_pelajaran_transaksi`),
  ADD KEY `nama_mata_pelajaran_transaksi` (`nama_mata_pelajaran_transaksi`),
  ADD KEY `nama_kelas_mata_pelajaran_transaksi` (`nama_kelas_mata_pelajaran_transaksi`),
  ADD KEY `id_kelas_daftar` (`id_kelas_daftar`),
  ADD KEY `kelompok_kelas_mata_pelajaran_transaksi` (`id_mata_pelajaran_mata_pelajaran_transaksi`);

--
-- Indexes for table `nilai_siswa_transaksi_smt1_keterampilan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_keterampilan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_keterampilan`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt1_keterampilan`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt1_keterampilan`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt1_keterampilan`);

--
-- Indexes for table `nilai_siswa_transaksi_smt1_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_pengetahuan`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt1_pengetahuan`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan`);

--
-- Indexes for table `nilai_siswa_transaksi_smt1_sosial`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_sosial`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_sosial`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt1_sosial`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt1_sosial`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt1_sosial`);

--
-- Indexes for table `nilai_siswa_transaksi_smt1_spiritual`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_spiritual`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_spiritual`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt1_spiritual`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt1_spiritual`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt1_spiritual`);

--
-- Indexes for table `nilai_siswa_transaksi_smt2_keterampilan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_keterampilan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_keterampilan`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt2_keterampilan`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt2_keterampilan`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt2_keterampilan`);

--
-- Indexes for table `nilai_siswa_transaksi_smt2_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_pengetahuan`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt2_pengetahuan`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan`);

--
-- Indexes for table `nilai_siswa_transaksi_smt2_sosial`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_sosial`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_sosial`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt2_sosial`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt2_sosial`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt2_sosial`);

--
-- Indexes for table `nilai_siswa_transaksi_smt2_spiritual`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_spiritual`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_spiritual`),
  ADD KEY `nama_kelas_nilai_siswa_transaksi` (`nama_kelas_nilai_siswa_transaksi_smt2_spiritual`),
  ADD KEY `id_mata_pelajaran_nilai_siswa_transaksi` (`id_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual`),
  ADD KEY `nama_mata_pelajaran_nilai_siswa_transaksi` (`nama_mata_pelajaran_nilai_siswa_transaksi_smt2_spiritual`),
  ADD KEY `nilai_siswa_transaksi_ibfk_4` (`nis_siswa_nilai_siswa_transaksi_smt2_spiritual`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `guru_kompetensi_dasar_smt1`
--
ALTER TABLE `guru_kompetensi_dasar_smt1`
  MODIFY `id_guru_kompetensi_dasar_smt1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `guru_kompetensi_dasar_smt2`
--
ALTER TABLE `guru_kompetensi_dasar_smt2`
  MODIFY `id_guru_kompetensi_dasar_smt2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kelas_transaksi`
--
ALTER TABLE `kelas_transaksi`
  MODIFY `id_kelas_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `mata_pelajaran_transaksi`
--
ALTER TABLE `mata_pelajaran_transaksi`
  MODIFY `id_mata_pelajaran_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt1_keterampilan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_keterampilan`
  MODIFY `id_nilai_siswa_transaksi_smt1_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt1_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan`
  MODIFY `id_nilai_siswa_transaksi_smt1_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt1_sosial`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_sosial`
  MODIFY `id_nilai_siswa_transaksi_smt1_sosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt1_spiritual`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_spiritual`
  MODIFY `id_nilai_siswa_transaksi_smt1_spiritual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt2_keterampilan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_keterampilan`
  MODIFY `id_nilai_siswa_transaksi_smt2_keterampilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt2_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan`
  MODIFY `id_nilai_siswa_transaksi_smt2_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt2_sosial`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_sosial`
  MODIFY `id_nilai_siswa_transaksi_smt2_sosial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=284;
--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt2_spiritual`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_spiritual`
  MODIFY `id_nilai_siswa_transaksi_smt2_spiritual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kelas_transaksi`
--
ALTER TABLE `kelas_transaksi`
  ADD CONSTRAINT `kelas_transaksi_ibfk_3` FOREIGN KEY (`wali_kelas_transaksi`) REFERENCES `data_pegawai` (`nama_pegawai`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_transaksi_ibfk_4` FOREIGN KEY (`nama_kelas_transaksi`) REFERENCES `kelas_daftar` (`nama_kelas_daftar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kelas_transaksi_ibfk_5` FOREIGN KEY (`kelompok_kelas_kelas_transaksi`) REFERENCES `mata_pelajaran` (`kelompok_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD CONSTRAINT `mata_pelajaran_ibfk_1` FOREIGN KEY (`nama_jabatan`) REFERENCES `jabatan` (`nama_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
