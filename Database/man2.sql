-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2018 at 11:41 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `nip_pegawai` varchar(20) DEFAULT NULL,
  `nama_pegawai` varchar(65) DEFAULT NULL,
  `jabatan_pegawai` varchar(15) DEFAULT NULL,
  `nama_mata_pelajaran_pegawai` varchar(20) DEFAULT NULL,
  `username_pegawai` varchar(20) DEFAULT NULL,
  `password_pegawai` varchar(20) DEFAULT NULL,
  `foto_pegawai` varchar(20) DEFAULT NULL,
  `alamat_pegawai` varchar(255) DEFAULT NULL,
  `tempat_lahir_pegawai` varchar(30) DEFAULT NULL,
  `tanggal_lahir_pegawai` date DEFAULT NULL,
  `no_handphone_pegawai` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`id_pegawai`, `nip_pegawai`, `nama_pegawai`, `jabatan_pegawai`, `nama_mata_pelajaran_pegawai`, `username_pegawai`, `password_pegawai`, `foto_pegawai`, `alamat_pegawai`, `tempat_lahir_pegawai`, `tanggal_lahir_pegawai`, `no_handphone_pegawai`) VALUES
(3, '1111', NULL, 'admin', NULL, 'admin', 'admin', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolah`
--

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
  `email_sekolah_data_sekolah` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_sekolah`
--

INSERT INTO `data_sekolah` (`id_data_sekolah`, `nama_sekolah_data_sekolah`, `nip_kepala_sekolah_data_sekolah`, `nama_kepala_sekolah_data_sekolah`, `tanggal_jadi_kepala_sekolah_data_sekolah`, `tahun_pelajaran_sekolah_data_sekolah`, `foto_kepala_sekolah_data_sekolah`, `alamat_sekolah_data_sekolah`, `asal_kota_sekolah_data_sekolah`, `email_sekolah_data_sekolah`) VALUES
('man2jogja', 'MAN 2 Yogyakarta', '7826314225', 'Drs. H. In Amullah M.A.', '2018-02-14', '2018', NULL, 'Jl. K.H Ahmad Dahlan No. 130 Yogyakarta', 'Yogyakarta', 'Jl. K.H Ahmad Dahlan No. 130 Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id_siswa` int(7) NOT NULL,
  `nisn_siswa` varchar(25) DEFAULT NULL,
  `nis_siswa` varchar(20) DEFAULT NULL,
  `nama_siswa` varchar(65) DEFAULT NULL,
  `foto_siswa` varchar(20) DEFAULT NULL,
  `jenis_kelamin_siswa` varchar(1) DEFAULT NULL,
  `id_kelas_daftar_siswa` varchar(15) DEFAULT NULL,
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
  `no_handphone_wali` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_wali`
--

CREATE TABLE `data_wali` (
  `id_wali` int(11) NOT NULL,
  `nisn_siswa_wali` varchar(25) DEFAULT NULL,
  `username_wali` varchar(25) DEFAULT NULL,
  `password_wali` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_website`
--

CREATE TABLE `data_website` (
  `id_data_website` int(11) NOT NULL,
  `hubungi_kami_data_website` varchar(15) DEFAULT NULL,
  `email_data_website` varchar(100) DEFAULT NULL,
  `marquee_data_website` tinytext,
  `judul_konten_slide_data_website` tinytext,
  `isi_konten_slide_data_website` text,
  `gambar_slide_data_website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_website`
--

INSERT INTO `data_website` (`id_data_website`, `hubungi_kami_data_website`, `email_data_website`, `marquee_data_website`, `judul_konten_slide_data_website`, `isi_konten_slide_data_website`, `gambar_slide_data_website`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guru_kompetensi_dasar_smt1`
--

CREATE TABLE `guru_kompetensi_dasar_smt1` (
  `id_guru_kompetensi_dasar_smt1` int(11) NOT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt1` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt1` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt1` text,
  `guru_kompetensi_dasar_nip_pegawai_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_mata_pelajaran_smt1` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_smt1` tinyint(4) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_daftar_smt1` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt1` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru_kompetensi_dasar_smt2`
--

CREATE TABLE `guru_kompetensi_dasar_smt2` (
  `id_guru_kompetensi_dasar_smt2` int(11) NOT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKI_smt2` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noKD_smt2` varchar(25) DEFAULT NULL,
  `guru_kompetensi_dasar_pengetahuan_noDKD_smt2` text,
  `guru_kompetensi_dasar_nip_pegawai_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_mata_pelajaran_smt2` varchar(20) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_smt2` tinyint(4) DEFAULT NULL,
  `guru_kompetensi_dasar_kelas_daftar_smt2` varchar(15) DEFAULT NULL,
  `guru_kompetensi_dasar_semester_smt2` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_hak_akses` int(11) NOT NULL,
  `kd_hak_akses` varchar(11) DEFAULT NULL,
  `nama_hak_akses` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `kd_jabatan` varchar(25) NOT NULL,
  `nama_jabatan` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`kd_jabatan`, `nama_jabatan`) VALUES
('admin', 'Administrator'),
('bk', 'BK'),
('guru', 'Guru'),
('siswa', 'Siswa');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_daftar`
--

CREATE TABLE `kelas_daftar` (
  `id_kelas_daftar` int(11) NOT NULL,
  `kd_kelas_daftar` varchar(15) DEFAULT NULL,
  `kelompok_kelas_daftar` varchar(10) DEFAULT NULL,
  `kelas_kelas_daftar` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas_transaksi`
--

CREATE TABLE `kelas_transaksi` (
  `id_kelas_transaksi` int(11) NOT NULL,
  `id_kelas_daftar_kelas_transaksi` varchar(15) DEFAULT NULL,
  `nama_kelas_transaksi` varchar(10) DEFAULT NULL,
  `wali_kelas_transaksi` int(2) DEFAULT NULL,
  `kelompok_kelas_kelas_transaksi` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mata_pelajaran` int(11) NOT NULL,
  `kd_mata_pelajaran` varchar(15) DEFAULT NULL,
  `nama_mata_pelajaran` varchar(40) DEFAULT NULL,
  `nama_jabatan_mata_pelajaran` varchar(15) DEFAULT NULL,
  `kelompok_kelas_mata_pelajaran` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mata_pelajaran_transaksi`
--

CREATE TABLE `mata_pelajaran_transaksi` (
  `id_mata_pelajaran_transaksi` int(11) NOT NULL,
  `id_kelas_daftar_mata_pelajaran_transaksi` varchar(15) DEFAULT NULL,
  `id_mata_pelajaran_mata_pelajaran_transaksi` varchar(10) DEFAULT NULL,
  `kkm_rendah_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `kkm_tengah_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `kkm_tinggi_mata_pelajaran_transaksi` varchar(7) DEFAULT NULL,
  `nama_kelas_mata_pelajaran_transaksi` varchar(15) DEFAULT NULL,
  `nama_mata_pelajaran_transaksi` varchar(65) DEFAULT NULL,
  `nip_pegawai_mata_pelajaran_transaksi` varchar(50) DEFAULT NULL,
  `kelas_mata_pelajaran_transaksi` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt1_pengetahuan`
--

CREATE TABLE `nilai_siswa_transaksi_smt1_pengetahuan` (
  `id_nilai_siswa_transaksi_smt1_pengetahuan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt1_pengetahuan` varchar(20) DEFAULT NULL,
  `id_kelas_daftar_nilai_siswa_transaksi_smt1_pengetahuan` varchar(15) DEFAULT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(10) DEFAULT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt1_pengetahuan` varchar(40) DEFAULT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt1_pengetahuan` varchar(20) DEFAULT NULL,
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
  `keterangan_t_tt_nilai_siswa_transaksi_smt1_pengetahuan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_siswa_transaksi_smt2_pengetahuan`
--

CREATE TABLE `nilai_siswa_transaksi_smt2_pengetahuan` (
  `id_nilai_siswa_transaksi_smt2_pengetahuan` int(11) NOT NULL,
  `nis_siswa_nilai_siswa_transaksi_smt2_pengetahuan` varchar(20) DEFAULT NULL,
  `id_kelas_daftar_nilai_siswa_transaksi_smt2_pengetahuan` varchar(15) DEFAULT NULL,
  `id_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(10) DEFAULT NULL,
  `nama_mata_pelajaran_nilai_siswa_transaksi_smt2_pengetahuan` varchar(40) DEFAULT NULL,
  `nip_pegawai_nilai_siswa_transaksi_smt2_pengetahuan` varchar(20) DEFAULT NULL,
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
  `keterangan_t_tt_nilai_siswa_transaksi_smt2_pengetahuan` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(11) NOT NULL,
  `pengirim_pesan` varchar(50) DEFAULT NULL,
  `penerima_pesan` varchar(50) DEFAULT NULL,
  `judul_pesan` text,
  `isi_pesan` text,
  `waktu_pesan` datetime DEFAULT NULL,
  `cek_pesan` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_password`
--

CREATE TABLE `verifikasi_password` (
  `id_verifikasi_password_baru` int(11) NOT NULL,
  `username_verifikasi_password_baru` varchar(50) DEFAULT NULL,
  `password_baru_verifikasi_password_baru` varchar(255) DEFAULT NULL,
  `jabatan_verifikasi_password_baru` varchar(25) DEFAULT NULL,
  `tanggal_ganti_verifikasi_password_baru` date DEFAULT NULL,
  `jam_ganti_verifikasi_password_baru` time DEFAULT NULL,
  `tanggal_verifikasi_verifikasi_password_baru` date DEFAULT NULL,
  `jam_verifikasi_verifikasi_password_baru` time DEFAULT NULL,
  `tanggal_terpakai_verifikasi_password_baru` date DEFAULT NULL,
  `jam_terpakai_verifikasi_password_baru` time DEFAULT NULL,
  `status_verifikasi_password_baru` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `jabatan_pegawai` (`jabatan_pegawai`);

--
-- Indexes for table `data_sekolah`
--
ALTER TABLE `data_sekolah`
  ADD PRIMARY KEY (`id_data_sekolah`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `data_wali`
--
ALTER TABLE `data_wali`
  ADD PRIMARY KEY (`id_wali`);

--
-- Indexes for table `data_website`
--
ALTER TABLE `data_website`
  ADD PRIMARY KEY (`id_data_website`);

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
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_hak_akses`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`kd_jabatan`);

--
-- Indexes for table `kelas_daftar`
--
ALTER TABLE `kelas_daftar`
  ADD PRIMARY KEY (`id_kelas_daftar`);

--
-- Indexes for table `kelas_transaksi`
--
ALTER TABLE `kelas_transaksi`
  ADD PRIMARY KEY (`id_kelas_transaksi`);

--
-- Indexes for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mata_pelajaran`);

--
-- Indexes for table `mata_pelajaran_transaksi`
--
ALTER TABLE `mata_pelajaran_transaksi`
  ADD PRIMARY KEY (`id_mata_pelajaran_transaksi`);

--
-- Indexes for table `nilai_siswa_transaksi_smt1_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt1_pengetahuan`);

--
-- Indexes for table `nilai_siswa_transaksi_smt2_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan`
  ADD PRIMARY KEY (`id_nilai_siswa_transaksi_smt2_pengetahuan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `verifikasi_password`
--
ALTER TABLE `verifikasi_password`
  ADD PRIMARY KEY (`id_verifikasi_password_baru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id_siswa` int(7) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_wali`
--
ALTER TABLE `data_wali`
  MODIFY `id_wali` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_website`
--
ALTER TABLE `data_website`
  MODIFY `id_data_website` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `guru_kompetensi_dasar_smt1`
--
ALTER TABLE `guru_kompetensi_dasar_smt1`
  MODIFY `id_guru_kompetensi_dasar_smt1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guru_kompetensi_dasar_smt2`
--
ALTER TABLE `guru_kompetensi_dasar_smt2`
  MODIFY `id_guru_kompetensi_dasar_smt2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_hak_akses` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_daftar`
--
ALTER TABLE `kelas_daftar`
  MODIFY `id_kelas_daftar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas_transaksi`
--
ALTER TABLE `kelas_transaksi`
  MODIFY `id_kelas_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  MODIFY `id_mata_pelajaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mata_pelajaran_transaksi`
--
ALTER TABLE `mata_pelajaran_transaksi`
  MODIFY `id_mata_pelajaran_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt1_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt1_pengetahuan`
  MODIFY `id_nilai_siswa_transaksi_smt1_pengetahuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nilai_siswa_transaksi_smt2_pengetahuan`
--
ALTER TABLE `nilai_siswa_transaksi_smt2_pengetahuan`
  MODIFY `id_nilai_siswa_transaksi_smt2_pengetahuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verifikasi_password`
--
ALTER TABLE `verifikasi_password`
  MODIFY `id_verifikasi_password_baru` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD CONSTRAINT `dp.jabatan_pegawai-j.nama_jabatan` FOREIGN KEY (`jabatan_pegawai`) REFERENCES `jabatan` (`kd_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
