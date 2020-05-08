/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50724
Source Host           : 127.0.0.1:3306
Source Database       : ppdb_db

Target Server Type    : MYSQL
Target Server Version : 50724
File Encoding         : 65001

Date: 2020-05-08 12:54:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for tabel_admin
-- ----------------------------
DROP TABLE IF EXISTS `tabel_admin`;
CREATE TABLE `tabel_admin` (
  `kode_admin` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(75) DEFAULT NULL,
  `no_telp` char(13) DEFAULT NULL,
  PRIMARY KEY (`kode_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel_admin
-- ----------------------------
INSERT INTO `tabel_admin` VALUES ('GA01', 'Aditya Muhammad', 'adit', '486b6c6b267bc61677367eb6b6458764', 'adit@gmail.com', '09876543213');
INSERT INTO `tabel_admin` VALUES ('GA02', 'Elia rahma', 'rahma', 'b007b7d6520a7b3dcccd2a1ec2891009', 'Kidot24@gmail.com', '08783458585');
INSERT INTO `tabel_admin` VALUES ('SA01', 'Ramandhika Ilham Pratama', 'rama', 'e04f28cc33cb20274dd3ff44e600a923', 'ndikarama@gmail.com', '0987654412');
INSERT INTO `tabel_admin` VALUES ('SA02', 'Adi Widya', 'adi', 'c46335eb267e2e1cde5b017acb4cd799', 'adi@gmail.com', '09876543');
INSERT INTO `tabel_admin` VALUES ('SA03', 'Jihad', 'jihad', 'e04f28cc33cb20274dd3ff44e600a923', 'jihad@gmail.com', '087838412335');

-- ----------------------------
-- Table structure for tabel_datadiri
-- ----------------------------
DROP TABLE IF EXISTS `tabel_datadiri`;
CREATE TABLE `tabel_datadiri` (
  `no_pendaftaran` int(5) DEFAULT NULL,
  `kode_siswa` varchar(7) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(20) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `gol_darah` char(2) DEFAULT NULL,
  `alamat_siswa` varchar(500) DEFAULT NULL,
  `no_telp` varchar(13) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `id_jur` int(2) DEFAULT NULL,
  `n_bhsinggris` varchar(3) DEFAULT NULL,
  `n_mat` varchar(3) DEFAULT NULL,
  `n_bhsindo` varchar(3) DEFAULT NULL,
  `password` varchar(500) NOT NULL,
  PRIMARY KEY (`kode_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel_datadiri
-- ----------------------------
INSERT INTO `tabel_datadiri` VALUES (null, 'SW0001', '0020083459', 'Ramandhika Ilham Pratama', 'Surakarta', '2020-03-11', 'L', 'O', 'Surakarta', '087838412335', 'ndikarama@gmail.com', null, '82', '56', '75', 'e04f28cc33cb20274dd3ff44e600a923');

-- ----------------------------
-- Table structure for tabel_jurusan
-- ----------------------------
DROP TABLE IF EXISTS `tabel_jurusan`;
CREATE TABLE `tabel_jurusan` (
  `id_jur` int(2) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `kuota` int(4) NOT NULL,
  PRIMARY KEY (`id_jur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel_jurusan
-- ----------------------------
INSERT INTO `tabel_jurusan` VALUES ('1', 'Akuntansi', '145');
INSERT INTO `tabel_jurusan` VALUES ('2', 'Administrasi. Perkantoran', '80');
INSERT INTO `tabel_jurusan` VALUES ('3', 'Pemasaran', '80');
INSERT INTO `tabel_jurusan` VALUES ('4', 'Usaha Perjalanan Wisata', '80');
INSERT INTO `tabel_jurusan` VALUES ('5', 'Multimedia', '80');
INSERT INTO `tabel_jurusan` VALUES ('6', 'Broadcast', '80');
INSERT INTO `tabel_jurusan` VALUES ('7', 'Rekayasa Perangkat Lunak', '80');

-- ----------------------------
-- Table structure for tabel_ortuwali
-- ----------------------------
DROP TABLE IF EXISTS `tabel_ortuwali`;
CREATE TABLE `tabel_ortuwali` (
  `kode_siswa` varchar(7) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(13) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel_ortuwali
-- ----------------------------
INSERT INTO `tabel_ortuwali` VALUES ('SW0001', 'Coba', 'Coba', '087838412335', 'Surakarta');

-- ----------------------------
-- Table structure for tabel_pendaftaran
-- ----------------------------
DROP TABLE IF EXISTS `tabel_pendaftaran`;
CREATE TABLE `tabel_pendaftaran` (
  `no_pendaftaran` int(5) DEFAULT NULL,
  `kode_siswa` varchar(7) NOT NULL,
  `id_jur` varchar(3) DEFAULT NULL,
  `nilai_un` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`kode_siswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of tabel_pendaftaran
-- ----------------------------
INSERT INTO `tabel_pendaftaran` VALUES (null, 'SW0001', null, null);
