-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 04:29 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takagroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `Nik` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Type` varchar(100) NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`Nik`, `Date`, `Type`, `Information`) VALUES
(2313, '2017-03-15', 'Annual leave', 'Sakit');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `Nik` int(20) NOT NULL,
  `KTP` int(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `BIrthday_date` date NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Blood` varchar(3) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Fhoto` blob NOT NULL,
  `NPWP` int(20) NOT NULL,
  `Account` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`Nik`, `KTP`, `Name`, `BIrthday_date`, `Status`, `Agama`, `Blood`, `Email`, `Alamat`, `Fhoto`, `NPWP`, `Account`) VALUES
(2313, 33, 'h', '2017-03-14', 'Divorced', 'Moeslem', 'A', 'g', 'g', 0x31322e412e32783320626972752e6a7067, 33, 3),
(3131, 1, 'w', '2017-03-07', 'Single', 'Moeslem', 'B', 'firmanbrilian@gmail.com', '', 0x70686f746f5f323031372d30332d30345f32312d34392d32372e6a7067, 1, 1),
(2223131, 242424242, 'Firman brilian', '2017-03-13', 'Single', 'Christian', 'AB', 'firmanbrilian@gmail.com', 'Dago', 0x31322e412e32783320626972752e6a7067, 223, 223),
(3434343, 33, 'h', '2017-03-14', 'Divorced', 'Moeslem', 'A', 'g', 'g', 0x31322e412e32783320626972752e6a7067, 33, 3),
(4242424, 2, 'r', '2017-03-15', 'Single', 'Moeslem', 'A', 'r', 'r', 0x70686f746f5f323031372d30332d30345f32312d34392d32372e6a7067, 2, 2),
(320202020, 242424242, 'Firman brilian', '2017-03-13', 'Single', 'Christian', 'AB', 'firmanbrilian@gmail.com', 'Dago', 0x31322e412e32783320626972752e6a7067, 223, 223),
(987654321, 2147483647, 'firman brilian', '1990-09-10', 'Single', 'Moeslem', 'AB', 'firmanbrilian@gmail.com', 'JL Riung Bagja v no 10 Komplek riung bandung ', 0x31322e412e32783320626972752e6a7067, 123, 123),
(1122334455, 12345, 'Bento', '2017-03-14', 'Single', 'Moeslem', 'AB', 'firmanbrilian@gmail.com', 'RIung Bandung', 0x31322e452e34783620626972752e6a7067, 12345, 12345),
(1234567890, 1, 'w', '2017-03-07', 'Single', 'Moeslem', 'B', 'firmanbrilian@gmail.com', '', 0x31322e422e3278332e6a7067, 1, 1),
(2147483647, 1, 'w', '2017-03-07', 'Single', 'Moeslem', 'B', 'firmanbrilian@gmail.com', '', 0x70686f746f5f323031372d30332d30345f32312d34392d32372e6a7067, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `financial`
--

CREATE TABLE `financial` (
  `Nik` int(20) NOT NULL,
  `Salary` decimal(30,0) NOT NULL,
  `Allowance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financial`
--

INSERT INTO `financial` (`Nik`, `Salary`, `Allowance`) VALUES
(2313, '2000000', 'BPJS'),
(3434343, '33333', 'bb');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `Nik` int(20) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `akses` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`Nik`, `Username`, `Password`, `akses`) VALUES
(2313, 'xx', 'xxxx', 'IT'),
(1234567890, 'firman', 'firman', 'IT'),
(987654321, 'yaya', 'yaya', 'LCDC'),
(4242424, 'dono', 'dono', 'IT'),
(3131, 'c', 'c', 'IT'),
(2147483647, 'Satanic', '12345678', 'LCDC');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `Nik` int(20) NOT NULL,
  `Father` varchar(20) NOT NULL,
  `Job_ayah` varchar(30) NOT NULL,
  `Mother` varchar(20) NOT NULL,
  `Job_mother` varchar(30) NOT NULL,
  `couple` varchar(20) NOT NULL,
  `Child` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`Nik`, `Father`, `Job_ayah`, `Mother`, `Job_mother`, `couple`, `Child`) VALUES
(4242424, 'r', 'r', 'r', 'r', 'r', 'r d'),
(320202020, 'dada', 'dad', 'dad', 'dA', 'ww', 'ww,ff'),
(2223131, 'dada', 'dad', 'dad', 'dA', 'ww', 'ww,a,xx,cccc'),
(2313, 'g', 'g', 'g', 'g', 'g', 'g,t,t'),
(3434343, 'g', 'g', 'g', 'g', 'g', 'g'),
(3131, 'd', 'd', 'w', 'd', 'w', 'e'),
(2147483647, 'd', 'd', 'w', 'd', 'w', 'e'),
(1234567890, 'd', 'd', 'w', 'd', 'w', 'e'),
(987654321, 'Tatang Ar', 'Wiraswasta', 'Nurlaela', 'Ibu rumah tangga', '', ''),
(1122334455, 'Michael', 'Atlet', 'Sharavapova', 'Atlet', 'Jeniffer lopez', 'Ujang rahmat');

-- --------------------------------------------------------

--
-- Table structure for table `peformance`
--

CREATE TABLE `peformance` (
  `Nik` int(20) NOT NULL,
  `Year` int(4) NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peformance`
--

INSERT INTO `peformance` (`Nik`, `Year`, `Information`) VALUES
(2313, 2007, ' dadad');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `Nik` int(20) NOT NULL,
  `Gelar` varchar(30) NOT NULL,
  `Major` varchar(20) NOT NULL,
  `University` varchar(30) NOT NULL,
  `IPK` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`Nik`, `Gelar`, `Major`, `University`, `IPK`) VALUES
(4242424, 'Senior Hight School', 'r', 'r', 2),
(320202020, 'Bachelor Degree', 'Teknik Informatika', 'UIN Bandung', 4),
(2223131, 'Bachelor Degree', 'Teknik Informatika', 'UIN Bandung', 4),
(2313, 'Diploma Degree', 'Teknik Informatika', 't', 3),
(3434343, 'Diploma Degree', 'Teknik Informatika', 't', 3.4),
(3131, 'Master Degree', 'd', 'e', 1.7),
(2147483647, 'Master Degree', 'd', 'e', 1.7),
(1234567890, 'Master Degree', 'd', 'e', 1.7),
(987654321, 'Bachelor Degree', 'Teknik Informatika', 'UIN Bandung', 3.4),
(1122334455, 'Doctoral Degree', 'Teknik Informatika', 'Institut teknologi Bandung', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `Nik` int(20) NOT NULL,
  `Join_date` date NOT NULL,
  `Grade` varchar(10) NOT NULL,
  `Posisition` varchar(40) NOT NULL,
  `Organization` varchar(20) NOT NULL,
  `Directorate` varchar(20) NOT NULL,
  `Status_Kepegawaian` varchar(20) NOT NULL,
  `Company` varchar(30) NOT NULL,
  `Location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perusahaan`
--

INSERT INTO `perusahaan` (`Nik`, `Join_date`, `Grade`, `Posisition`, `Organization`, `Directorate`, `Status_Kepegawaian`, `Company`, `Location`) VALUES
(4242424, '2017-03-13', '---select-', '---select---', '---select---', '---select---', 'Contract', 'PT TAKA Precision(TAKA Precisi', 'Jl. Soekarno Hatta No.797, Babakan Penghulu, Cinambo, Kota Bandung, Jawa Barat 40294'),
(2313, '2017-03-15', '---select-', '---select---', '---select---', '---select---', 'Contract', 'PT Taka Indonesia', 'Jl. Raya Cinunuk No.274, Cinunuk, Cileunyi, Bandung, Jawa Barat 40624'),
(3434343, '2017-03-22', '---select-', '---select---', '---select---', '---select---', 'Permanen', 'PT TAKA Geodrill ( TAKA Geodri', 'Jalan Gedebage No.247, Cisaranten Kidul, Gedebage, Cisaranten Kidul, Gedebage, Kota Bandung, Jawa Barat 40295'),
(987654321, '2017-03-16', '---select-', '---select---', '---select---', '---select---', 'Contract', 'PT Taka Indonesia', 'Jl. Soekarno Hatta No.797, Babakan Penghulu, Cinambo, Kota Bandung, Jawa Barat 40294');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `Nik` int(20) NOT NULL,
  `Date` date NOT NULL,
  `Jenis_training` varchar(20) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Information` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`Nik`, `Date`, `Jenis_training`, `Start`, `End`, `Information`) VALUES
(2313, '2017-03-16', '---select---', '2017-03-14', '2017-03-15', 'ddd');

-- --------------------------------------------------------

--
-- Table structure for table `troubleshooting`
--

CREATE TABLE `troubleshooting` (
  `Nik` int(20) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`Nik`);

--
-- Indexes for table `financial`
--
ALTER TABLE `financial`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `peformance`
--
ALTER TABLE `peformance`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD KEY `perusahaan_ibfk_1` (`Nik`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD KEY `Nik` (`Nik`);

--
-- Indexes for table `troubleshooting`
--
ALTER TABLE `troubleshooting`
  ADD KEY `Nik` (`Nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `financial`
--
ALTER TABLE `financial`
  ADD CONSTRAINT `financial_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`Nik`);

--
-- Constraints for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD CONSTRAINT `hak_akses_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `peformance`
--
ALTER TABLE `peformance`
  ADD CONSTRAINT `peformance_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD CONSTRAINT `pendidikan_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD CONSTRAINT `perusahaan_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`Nik`);

--
-- Constraints for table `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`NIK`);

--
-- Constraints for table `troubleshooting`
--
ALTER TABLE `troubleshooting`
  ADD CONSTRAINT `troubleshooting_ibfk_1` FOREIGN KEY (`Nik`) REFERENCES `data_karyawan` (`Nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
