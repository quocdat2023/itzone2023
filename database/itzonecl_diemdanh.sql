-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 05:22 PM
-- Server version: 10.5.19-MariaDB-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itzonecl_diemdanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_attendance`
--

CREATE TABLE `tbl_attendance` (
  `id_attendance` int(255) NOT NULL,
  `id_user` varchar(8) NOT NULL,
  `id_student` varchar(8) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `shift` varchar(255) NOT NULL,
  `attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_attendance`
--

INSERT INTO `tbl_attendance` (`id_attendance`, `id_user`, `id_student`, `schoolyear`, `semester`, `date`, `shift`, `attendance`) VALUES
(451, '522H0031', '522H0031', '2022-2023', 'Học kỳ 2', '2023-02-16', 'Ca 1', 'Present'),
(452, '522H0068', '522H0068', '2022-2023', 'Học kỳ 2', '2023-02-16', 'Ca 1', 'Present'),
(453, '52200049', '52200049', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 1', 'Present'),
(454, '52200044', '52200044', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 1', 'Present'),
(455, '52200090', '52200090', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 1', 'Present'),
(456, '521H0442', '521H0442', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 3', 'Present'),
(457, '520H0538', '520H0538', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 4', 'Present'),
(458, '52200278', '52200278', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 4', 'Present'),
(459, '522K0013', '522K0013', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 4', 'Present'),
(460, '522H0019', '522H0019', '2022-2023', 'Học kỳ 2', '2023-02-20', 'Ca 4', 'Present'),
(461, '522H0028', '522H0028', '2022-2023', 'Học kỳ 1', '2023-02-20', 'Ca 1', 'Present'),
(462, '522H0046', '522H0046', '2022-2023', 'Học kỳ 1', '2023-02-20', 'Ca 1', 'Present'),
(463, '52200277', '52200277', '2022-2023', 'Học kỳ 1', '2023-02-20', 'Ca 1', 'Absent'),
(464, '52200278', '52200278', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 1', 'Present'),
(465, '52200020', '52200020', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 1', 'Present'),
(466, '522H0041', '522H0041', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 2', 'Present'),
(467, '522K0013', '522K0013', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 2', 'Present'),
(468, '52200020', '52200020', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 4', 'Present'),
(469, '522H0066', '522H0066', '2022-2023', 'Học kỳ 2', '2023-02-22', 'Ca 4', 'Present'),
(470, '522H0030', '522H0030', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 1', 'Present'),
(471, '522H0047', '522H0047', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 1', 'Present'),
(472, '522H0068', '522H0068', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 1', 'Present'),
(473, '522H0046', '522H0046', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 1', 'Present'),
(474, '52200049', '52200049', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 2', 'Present'),
(475, '522H0030', '522H0030', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 2', 'Present'),
(476, '522H0041', '522H0041', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 2', 'Present'),
(477, '52200008', '52200008', '2022-2023', 'Học kỳ 2', '2023-02-24', 'Ca 2', 'Present'),
(478, '52200049', '52200049', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 1', 'Present'),
(479, '52200044', '52200044', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 1', 'Present'),
(480, '52200090', '52200090', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 1', 'Present'),
(481, '522K0013', '522K0013', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 4', 'Present'),
(482, '522H0019', '522H0019', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 4', 'Present'),
(483, '52200278', '52200278', '2022-2023', 'Học kỳ 2', '2023-02-27', 'Ca 4', 'Present'),
(484, '52200278', '52200278', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 1', 'Present'),
(485, '52200020', '52200020', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 1', 'Present'),
(486, '522H0066', '522H0066', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 4', 'Present'),
(487, '52200278', '52200278', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 4', 'Present'),
(488, '522H0041', '522H0041', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 4', 'Present'),
(489, '52200020', '52200020', '2022-2023', 'Học kỳ 2', '2023-03-01', 'Ca 4', 'Present'),
(490, '52200049', '52200049', '2022-2023', 'Học kỳ 2', '2023-03-03', 'Ca 2', 'Present'),
(491, '522H0030', '522H0030', '2022-2023', 'Học kỳ 2', '2023-03-03', 'Ca 2', 'Absent'),
(492, '522H0047', '522H0047', '2022-2023', 'Học kỳ 2', '2023-03-03', 'Ca 2', 'Present'),
(493, '522H0041', '522H0041', '2022-2023', 'Học kỳ 2', '2023-03-03', 'Ca 2', 'Present'),
(494, '52200008', '52200008', '2022-2023', 'Học kỳ 2', '2023-03-03', 'Ca 2', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fix`
--

CREATE TABLE `tbl_fix` (
  `id_fix` int(255) NOT NULL,
  `id_student` varchar(8) NOT NULL,
  `id_ktv` varchar(10) NOT NULL DEFAULT 'admin',
  `semester` varchar(15) NOT NULL,
  `schoolyear` varchar(15) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `timebook` time NOT NULL,
  `status` int(1) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `shift` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_fix`
--

INSERT INTO `tbl_fix` (`id_fix`, `id_student`, `id_ktv`, `semester`, `schoolyear`, `fullname`, `phone`, `date`, `description`, `timebook`, `status`, `password`, `shift`) VALUES
(75, '222H0107', '522H0046', 'Học kỳ 2', '2022-2023', 'Nguyễn Phương Lam', '0909484360', '2023-02-20', 'Cài office 2016', '14:31:16', 5, '', '3'),
(76, '02200165', '522H0046', 'Học kỳ 2', '2022-2023', 'Hà Liêu Quế ', '0374354310', '2023-02-20', 'Cài office 2016', '14:34:18', 5, '', '3'),
(77, '02200178', '522H0028', 'Học kỳ 2', '2022-2023', 'Huỳnh Thanh Thảo ', '0949333409', '2023-02-20', 'Cài Word ', '14:36:05', 5, '030692', '3'),
(82, 'H2100316', '522K0013', 'Học kỳ 2', '2022-2023', 'Vy Quỳnh Yến Nhi', '0818606084', '2023-02-20', 'cài office', '16:42:12', 5, '', '4'),
(83, 'H2100419', '522H0167', 'Học kỳ 2', '2022-2023', 'Nguyễn Anh Khoa', '0974965250', '2023-02-20', 'cài office', '16:52:01', 5, '', '4'),
(84, '72200384', '52200020', 'Học kỳ 2', '2022-2023', 'Lê Thị Kim Ngân', '0366967259', '2023-02-22', 'cài office 2016 + winrar', '08:24:51', 5, '123321', '1'),
(85, '720H1520', '52200278', 'Học kỳ 2', '2022-2023', 'Trần Mỹ Châu', '0911382340', '2023-02-22', 'cài office 2016', '09:55:33', 5, '', '1'),
(86, '72200333', '522K0013', 'Học kỳ 2', '2022-2023', 'Trần Thy My', '0912630654', '2023-02-22', 'Cài Office 2016', '10:19:29', 5, '04129204', '2'),
(87, '02200160', '522H0028', 'Học kỳ 2', '2022-2023', 'Đỗ Thị Tường Vi', '0569932153', '2023-02-22', 'cài office', '15:25:29', 5, '', '4'),
(89, 'B2000424', '522H0046', 'Học kỳ 2', '2022-2023', 'Đoàn Thuỳ Trang', '0799423208', '2023-02-24', 'Office', '08:58:38', 5, '', '1'),
(90, '72200370', '522H0030', 'Học kỳ 2', '2022-2023', 'Huỳnh Quốc Vinh', '0817185224', '2023-02-24', 'Office 2016', '09:06:26', 5, '311809', '1'),
(91, '72200236', '522H0030', 'Học kỳ 2', '2022-2023', 'Trình Quach Vy ', '0826616055', '2023-02-24', 'caif office 2016', '10:17:06', 5, '', '2'),
(92, '62100023', '522H0047', 'Học kỳ 2', 'Choose...', 'Pham Hoang Linh Chi', '0703347459', '2023-02-24', 'autocad', '10:21:14', 5, '', '2'),
(93, '82200041', '52200049', 'Học kỳ 2', '2022-2023', 'Lê Hữu Tài', '0908963525', '2023-02-24', 'Cài office 2016', '11:36:26', 5, '', '2'),
(94, '62100023', '522H0019', 'Học kỳ 2', '2022-2023', 'phạm hoàng linh chi ', '', '2023-02-24', 'cài autocad', '14:01:46', 5, '', '3'),
(95, '22200054', '52200044', 'Học kỳ 2', '2022-2023', 'Nguyễn Ngọc Bảo Trâm', '0938677831', '2023-02-24', '', '14:13:58', 5, '', '3'),
(97, 'h2200176', '52200278', 'Học kỳ 2', 'Choose...', 'Trần Thanh Việt ', '0925650414', '2023-02-24', 'cài office', '16:01:01', 5, '', '3'),
(98, '62200260', '52200008', 'Học kỳ 2', 'Choose...', 'Lê Hà My', '0377653241', '2023-02-24', 'Cài office', '16:36:34', 5, '', '4'),
(99, '72200433', '522H0068', 'Học kỳ 2', '2022-2023', 'Trương Trần Kim Thoa', '0838698757', '2023-02-24', 'Cài office ', '16:51:36', 5, '', '4'),
(104, '02200213', '52200044', 'Học kỳ 2', '2022-2023', 'Nguyễn Lê Yến Vy', '0334496036', '2023-02-27', 'cài office 2016', '08:45:07', 5, '', '1'),
(107, '72200228', '522H0167', 'Học kỳ 2', '2022-2023', 'Trần Nguyễn Phương Thy', '0332361954', '2023-02-27', 'cài word 2016', '11:37:25', 5, '', '2'),
(109, '82200065', '52200278', 'Học kỳ 2', '2022-2023', 'Nguyễn Đoàn Anh Thư', '0787780293', '2023-02-28', 'cài office 2016', '13:57:37', 5, '', '1'),
(110, '31800783', '52200020', 'Học kỳ 2', '2022-2023', 'Trần Trọng Hiếu', '0338451779', '2023-03-01', 'Cài office 2016', '08:51:53', 5, '', '1'),
(111, '72200230', '522H0028', 'Học kỳ 2', '2022-2023', 'Trần Phan Hoàng Triều ', '0327876796', '2023-03-01', 'Cài office', '09:18:59', 5, '1357924680', '1'),
(112, 'H2200169', '522H0028', 'Học kỳ 2', '2022-2023', 'Trần Ngọc Như', '0911358961', '2023-03-01', 'cài office2016', '11:55:30', 5, '', '2'),
(113, 'H220184', '522H0028', 'Học kỳ 2', '2022-2023', 'Trang Ngọc Kim', '0886324119', '2023-03-01', 'cài office 2016', '11:57:13', 5, 'Trangngockim@29012004', '2'),
(114, '72200344', '520H0335', 'Học kỳ 2', '2022-2023', 'Võ Thanh Ngân', '0386459791', '2023-03-01', '', '12:01:21', 1, '131095', '2'),
(115, '02200185', '522H0028', 'Học kỳ 2', '2022-2023', 'Lê Hoàn Mỹ', '0335862299', '2023-03-01', 'cài office 2016', '12:13:23', 5, '', '2'),
(116, '62200087', '522K0013', 'Học kỳ 2', '2022-2023', 'Ngô Tuyết Ý', '0946552434', '2023-03-01', 'Cài office 2016', '13:29:44', 3, '', '3'),
(117, '22000440', '522H0066', 'Học kỳ 2', '2022-2023', 'Nguyễn Thị Thùy Vân', '0769503509', '2023-03-01', 'Cài office', '13:50:25', 1, '', '3'),
(118, '62200114', '52200278', 'Học kỳ 2', '2022-2023', 'Nguyễn Minh Trí', '0342772632', '2023-03-01', 'Cài đặt office 2016', '14:50:55', 5, '', '3'),
(119, 'A2200015', '522H0066', 'Học kỳ 2', '2022-2023', 'Hồ Thị Thuý', '0367505548', '2023-03-01', 'Cài đặt word 2016', '15:32:29', 1, '111111', '4'),
(120, 'A2200039', '522H0066', 'Học kỳ 2', '2022-2023', 'Ngô Thị Mỹ Duyên', '0336545655', '2023-03-01', 'Cài Office', '15:33:04', 1, 'khai2607', '4'),
(121, '022H0018', '52200020', 'Học kỳ 2', '2022-2023', 'Danh Ngọc Lan Nhi', '0392049140', '2023-03-01', 'Cài Office 2016', '15:53:32', 5, 'Dt@12345', '4'),
(123, '72200010', '522H0047', 'Học kỳ 2', '2022-2023', 'Hà Kim Ngân', '0353903993', '2023-03-03', 'microsoft office 2016 ', '10:06:25', 5, '', '1'),
(124, '72200236', '522H0047', 'Học kỳ 2', '2022-2023', 'Trình Quách Vy', '0826616055', '2023-03-03', 'microsoft office 2016 ', '10:07:35', 5, '020804', '2'),
(125, '72200374', '52200008', 'Học kỳ 2', '2022-2023', 'Huỳnh Thị Mỹ Duyên', '', '2023-03-03', 'cài office 2016', '11:01:05', 5, '', '2'),
(126, '221H0021', '52200008', 'Học kỳ 2', '2022-2023', 'Nguyễn Đỗ Nhật Hạ', '0916470008', '2023-03-03', 'Cài office 2016', '11:02:34', 5, '', '2'),
(129, '72200302', '522H0019', 'Học kỳ 2', '2022-2023', 'Nguyễn Thị Thanh Mai', '0359442524', '2023-03-03', 'Cài office 2016', '13:20:41', 1, '12345', '3'),
(130, '02100928', '522H0167', 'Học kỳ 2', '2022-2023', 'Nguyễn Huyền Trân', '0399717916', '2023-03-03', 'Cài office 2016', '15:40:36', 5, '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maxim`
--

CREATE TABLE `tbl_maxim` (
  `id_maxim` int(11) NOT NULL,
  `content_maxim` text NOT NULL,
  `id_student` varchar(8) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_maxim`
--

INSERT INTO `tbl_maxim` (`id_maxim`, `content_maxim`, `id_student`, `role`) VALUES
(1, ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '51900030', '1'),
(2, ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '51900030', 'Admin2'),
(3, ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '51900030', '3'),
(4, ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '51900030', 'Admin4'),
(5, ' Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.', '51900030', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permission`
--

CREATE TABLE `tbl_permission` (
  `id_user` int(255) NOT NULL,
  `id_student` varchar(8) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT 0,
  `attendance` int(1) NOT NULL DEFAULT 0,
  `block` int(1) NOT NULL DEFAULT 0,
  `personnel` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_permission`
--

INSERT INTO `tbl_permission` (`id_user`, `id_student`, `admin`, `attendance`, `block`, `personnel`) VALUES
(107, 'admin', 1, 0, 0, 0),
(108, 'test', 0, 0, 0, 1),
(109, '520H0335', 1, 0, 0, 0),
(110, '520H0335', 1, 0, 0, 0),
(111, '520H0335', 1, 0, 0, 0),
(112, '522H0031', 0, 0, 0, 1),
(113, '522H0031', 0, 0, 0, 1),
(114, '522H0031', 0, 0, 0, 1),
(115, '522H0031', 0, 0, 0, 1),
(116, '522H0031', 0, 0, 0, 1),
(117, '22H50202', 0, 0, 0, 1),
(118, '520H0538', 0, 0, 0, 1),
(119, 'E20H0411', 0, 0, 1, 0),
(120, '52200052', 0, 0, 0, 1),
(121, '42100946', 0, 0, 0, 1),
(122, '52000432', 1, 0, 0, 0),
(123, '51900030', 0, 0, 0, 1),
(124, '522H0014', 0, 0, 0, 1),
(125, '52200278', 0, 1, 0, 0),
(126, '522H0028', 0, 0, 0, 1),
(127, '520H0555', 0, 0, 0, 1),
(128, '522K0013', 0, 1, 0, 0),
(129, '52200049', 0, 1, 0, 0),
(130, '52200044', 0, 1, 0, 0),
(131, '', 0, 0, 0, 1),
(132, '522H0167', 0, 1, 0, 0),
(133, '522H0030', 0, 0, 0, 1),
(134, '521H0005', 1, 0, 0, 0),
(135, '522H0047', 0, 0, 0, 1),
(136, '52000830', 0, 0, 0, 1),
(137, '522H0034', 0, 0, 1, 0),
(138, '52200212', 0, 0, 0, 1),
(139, '522H0046', 0, 1, 0, 0),
(140, '42200405', 0, 0, 1, 0),
(141, '521H0442', 0, 1, 0, 0),
(142, '42100283', 0, 0, 0, 1),
(143, '52200277', 0, 0, 0, 1),
(144, '522H0041', 0, 1, 0, 0),
(145, '521H0509', 0, 0, 0, 1),
(146, '522H0019', 0, 0, 0, 1),
(147, '52200020', 0, 0, 0, 1),
(148, '52200090', 0, 0, 0, 1),
(149, '52200008', 0, 0, 0, 1),
(150, '52100986', 0, 0, 0, 1),
(151, '520H0335', 1, 0, 0, 0),
(152, '522H0066', 0, 1, 0, 0),
(153, 'C2200099', 0, 0, 1, 0),
(154, '522H0051', 0, 0, 0, 1),
(155, '32100912', 0, 0, 1, 0),
(156, '720H0033', 0, 0, 0, 1),
(157, '32100892', 0, 0, 0, 1),
(158, '720H0983', 0, 0, 0, 1),
(159, '42001050', 0, 0, 0, 1),
(160, '52100403', 0, 0, 1, 0),
(161, '519H0059', 0, 0, 1, 0),
(162, '521H0004', 0, 0, 0, 1),
(163, ' ', 0, 0, 0, 1),
(164, '521H0005', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE `tbl_position` (
  `id_position` int(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id_position`, `position`, `description`) VALUES
(1, 'Chủ Nhiêm', NULL),
(2, 'Trưởng Ban Kỹ Thuật', NULL),
(3, 'Phó Ban Kỹ Thuật', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id_role`, `name`, `role`) VALUES
(2, 'Lich truc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schedule`
--

CREATE TABLE `tbl_schedule` (
  `id_schedule` int(255) NOT NULL,
  `id_student` varchar(10) NOT NULL,
  `shift12` int(11) NOT NULL,
  `shift22` int(11) NOT NULL,
  `shift32` int(11) NOT NULL,
  `shift42` int(11) NOT NULL,
  `shift14` int(11) NOT NULL,
  `shift24` int(11) NOT NULL,
  `shift34` int(11) NOT NULL,
  `shift44` int(11) NOT NULL,
  `shift16` int(11) NOT NULL,
  `shift26` int(11) NOT NULL,
  `shift36` int(11) NOT NULL,
  `shift46` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_schedule`
--

INSERT INTO `tbl_schedule` (`id_schedule`, `id_student`, `shift12`, `shift22`, `shift32`, `shift42`, `shift14`, `shift24`, `shift34`, `shift44`, `shift16`, `shift26`, `shift36`, `shift46`) VALUES
(176, '522H0028', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(177, '522H0028', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(178, '52200049', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(179, '52200049', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(180, '522H0019', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(181, '522H0019', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(182, '52200278', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(183, '52200278', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(186, '52200044', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(187, '52200044', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(188, '522H0030', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(190, '522H0030', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(192, '522H0046', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(193, '522H0046', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(194, '522H0047', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(195, '522H0047', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0),
(196, '522H0167', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(199, '52200020', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0),
(200, '52200020', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(213, '522K0013', 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(214, '522K0013', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(215, '52200008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(216, '52200008', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(217, '52200090', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(218, '52200090', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(219, '522H0066', 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0),
(220, '522H0066', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0),
(221, '522H0167', 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(222, '522H0167', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
(226, '522H0041', 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0),
(227, '522H0041', 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0),
(228, '521H0005', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(229, '521H0005', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(230, '52200212', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(231, '52200212', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_schoolyear`
--

CREATE TABLE `tbl_schoolyear` (
  `id_schoolyear` int(255) NOT NULL,
  `schoolyear` varchar(255) NOT NULL,
  `note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_schoolyear`
--

INSERT INTO `tbl_schoolyear` (`id_schoolyear`, `schoolyear`, `note`) VALUES
(5, '2022-2023', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_semester`
--

CREATE TABLE `tbl_semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_semester`
--

INSERT INTO `tbl_semester` (`id_semester`, `semester`) VALUES
(5, 'Học kỳ 2'),
(6, 'Học kỳ 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seminar`
--

CREATE TABLE `tbl_seminar` (
  `id_seminar` int(255) NOT NULL,
  `seminar` varchar(255) NOT NULL,
  `host` varchar(8) NOT NULL,
  `description` text NOT NULL,
  `date_create` varchar(10) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `schoolyear` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_seminar`
--

INSERT INTO `tbl_seminar` (`id_seminar`, `seminar`, `host`, `description`, `date_create`, `semester`, `schoolyear`) VALUES
(36, 'HẠP BÌ BỚT ĐẦY TU DU NGUYỄN NGỌC ANH', '521H0005', '<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcaitzone%2Fposts%2Fpfbid0PWpTMVWFFZFQAaUSNzWjfAAHnmKptJRD6TPdBZvrD5tjSg9PKnz982eN19qju152l&show_text=true&width=auto\" width=\"100%\" height=\"580\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowfullscreen=\"true\" allow=\"autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share\"></iframe>', '2023-01-20', 'Học kỳ 2', '2022-2023'),
(37, '[THÔNG BÁO TẠM DỪNG HOẠT ĐỘNG]', '521H0005', '<p>&lt;iframe src=&quot;https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fcaitzone%2Fposts%2Fpfbid0n6U3P7vg6nqPb4oQVeUbeRWL6jTcFfJG8DmG6gANmXu8KNnAxU7iiqP2Cahaaav6l&amp;show_text=true&amp;width=auto&quot; width=&quot;100%&quot; height=&quot;743&quot; style=&quot;border:none;overflow:hidden&quot; scrolling=&quot;no&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;true&quot; allow=&quot;autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share&quot;&gt;&lt;/iframe&gt;</p>\r\n', '2023-02-18', 'Học kỳ 2', '2022-2023'),
(38, 'TỔNG KẾT CHẶN ĐƯỜNG NĂM 2022', '522H0047', '<p>&lt;iframe src=&quot;https://www.facebook.com/plugins/video.php?height=314&amp;href=https%3A%2F%2Fwww.facebook.com%2Fcaitzone%2Fvideos%2F1564716294035396%2F&amp;show_text=false&amp;width=560&amp;t=0&quot; width=&quot;100%&quot; height=&quot;314&quot; style=&quot;border:none;overflow:hidden&quot; scrolling=&quot;no&quot; frameborder=&quot;0&quot; allowfullscreen=&quot;true&quot; allow=&quot;autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share&quot; allowFullScreen=&quot;true&quot;&gt;&lt;/iframe&gt;</p>\r\n', '2023-03-10', 'Học kỳ 2', '2022-2023'),
(40, 'SEMINAR VỀ ỨNG DỤNG CỦA TỰ ĐỘNG HOÁ', '522H0046', '<p><img alt=\"Không có mô tả.\" src=\"https://scontent.fsgn5-12.fna.fbcdn.net/v/t1.15752-9/327622836_1574983683021441_792763696235360369_n.jpg?_nc_cat=103&amp;ccb=1-7&amp;_nc_sid=ae9488&amp;_nc_ohc=2AHzjtNkskYAX-Hydi9&amp;_nc_ht=scontent.fsgn5-12.fna&amp;oh=03_AdRaQluwOyN3rfUxKPn81hacgNq9pUGGt3cWzj0C5PCi5w&amp;oe=641D4858\" /></p>\r\n', '2023-03-15', 'Học kỳ 2', '2022-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `id_team` int(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `onoff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_team`
--

INSERT INTO `tbl_team` (`id_team`, `team`, `description`, `onoff`) VALUES
(11, 'Truyền thông', 'Truyền thông', 0),
(12, 'Kỹ thuật', '', 0),
(13, 'Hành Chính - Nhân Sự', '<p>H&agrave;nh Ch&iacute;nh - Nh&acirc;n Sự</p>\r\n', 1),
(14, 'Truyền Thông', '<p>Truyền Th&ocirc;ng</p>\r\n', 1),
(15, 'Kỹ Thuật', '<p>Kỹ Thuật</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(255) NOT NULL,
  `id_student` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `gender` int(1) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `faculty` varchar(255) DEFAULT NULL,
  `major` varchar(255) DEFAULT NULL,
  `id_team` int(255) NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT 'xxx@gmail.com',
  `reset_link_token` varchar(255) NOT NULL,
  `exp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `id_student`, `password`, `fullname`, `birthday`, `gender`, `phone`, `faculty`, `major`, `id_team`, `facebook`, `email`, `reset_link_token`, `exp_date`) VALUES
(102, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', NULL, NULL, NULL, NULL, '', 11, '', 'qwertyuio.vn@gmail.com', '', '0000-00-00'),
(111, '522H0031', '561ee01b2556989ba1e259248b55cb31 ', 'Lê Thành Đạt', '2004-04-28', 1, '0903096994', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100012295129425', 'ledat2842004@gmail.com', '', '0000-00-00'),
(112, '522H0068', '30b946f31156623ec46aeddcb92c032e ', 'Phạm Văn Phúc', '2004-03-18', 1, '0358948134', 'Khoa công nghệ thông tin', 'khong', 14, 'https://www.facebook.com/phucpham1803', 'phucpham.1803@gmail.com', '', '0000-00-00'),
(113, '520H0538', 'ce5d81a6831f405a17f903e703808859', 'Trần Văn Huy', '2002-03-04', 1, '0703389491', 'Khoa công nghệ thông tin', 'khong', 14, 'https://www.facebook.com/profile.php?id=100012115789151', 'huyv8867@gmail.com', '', '0000-00-00'),
(114, 'E20H0411', 'd8861f3233c1308d2d381ada0bc47211 ', 'Trần Minh Thư', '2002-05-26', 0, '0949259095', 'Khoa luật', 'khong', 14, 'https://www.facebook.com/profile.php?id=100006678559054', 'jennytranleoily@gmail.com', '', '0000-00-00'),
(115, '52200052', '0a80394f3aab06fc30b175e98e9a955c ', 'Mai Thị Ánh Như', '2004-03-03', 0, '0984201762', 'Khoa công nghệ thông tin', 'khong', 14, 'https://www.facebook.com/nhu.maithianh.3', 'mainhu.3304@gmail.com', '', '0000-00-00'),
(116, '42100946', '9fda0966a6b1d6567fa58282ad0302d6', 'Trần Trọng Đức ', '2003-02-12', 2, '0859915881', 'Khoa điện - điện tử', 'khong', 13, '', 'duc3873ddd@gmail.com', '', '0000-00-00'),
(117, '52000432', '85a55464cb4a678982b2eca0e3b5ae49', 'Lê Tường Vy ', '2002-03-09', 2, '0328882773', 'Khoa công nghệ thông tin', 'khong', 13, 'https://www.facebook.com/profile.php?id=100023872698166', 'Letuongvy9322@gmail.com', '', '0000-00-00'),
(118, '51900030', '17dd54b49eadccf8e149e6d224fd99d9', 'Nguyễn Quốc Đạt', '1970-01-01', 0, '0961418516', '                Khoa công nghệ thông tin', 'khong', 13, '', 'quocdat51930@gmail.com', '', '0000-00-00'),
(119, '522H0014', 'db47ef71829330182d749df88547cf7e', 'Dương Nhựt Khương', '2004-03-18', 2, '0945629869', 'Khoa công nghệ thông tin', 'khong', 13, 'https://www.facebook.com/profile.php?id=100022259452876', 'dnk.kero2k4@gmail.com', '', '0000-00-00'),
(120, '52200278', '244657d020f900ccbf8b52c2bbceac2d', 'Nguyễn Ngọc Anh', '2004-01-20', 2, '0828930579', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100012588518755', 'nguyenanh20012004@gmail.com', '', '0000-00-00'),
(121, '522H0028', 'ed76e5a7f7df4e68b8014966b7223b12', 'Lê Nguyễn Minh Kha ', '2004-10-09', 2, '0356880430', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/minkha910', 'minhkha09102004@gmail.com', '', '0000-00-00'),
(122, '520H0555', '3cb4eeba4614040ba115c28b2fccab6f', 'Đỗ Hoàng Minh Mẫn', '2002-01-16', 2, '0835469493', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/dhmman02', 'dhmman.contacts@gmail.com', '', '0000-00-00'),
(123, '522K0013', 'c7c8b2197ecf204972fe8aa9bbcc9144 ', 'Trần Đinh Nhất Đăng', '2004-05-05', 2, '0888835504', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/nhat.dang.5076798', 'sockhi2004@gmail.com', '', '0000-00-00'),
(124, '52200049', '576c4109eb1f69df075d498eef513bab', 'Mã Lương Khánh ', '2004-11-22', 2, '0913127856', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/ma.luong.311493', 'truongnguyenhuu610@gmail.com', '', '0000-00-00'),
(125, '52200044', 'dbb99320aeba4d6f5610c9a580f9ba6a', 'Lê Tùng Dương', '2004-09-26', 2, '0922125499', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100031377485991', 'yuu3110duong@gmail.com', '', '0000-00-00'),
(127, '522H0167', 'a22ab193665af10a75ac824823e128c2', 'Trương Trí Phong', '2004-07-09', 2, '0329237623', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/phong097', 'triphong294@gmail.com', '', '0000-00-00'),
(128, '522H0030', 'diemdanhitzone', 'Lê Tấn Huy', '1970-01-01', 1, '0946209492', ' Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/huy.1e', '', 'd41d8cd98f00b204e9800998ecf8427e1760', '2023-03-11'),
(129, '521H0005', 'f3f7c4697affbfd3b33e1ffe70902fba ', 'Nguyễn Đức Anh', '2003-09-27', 2, '0919761820', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100013108141079', 'anhlop755@gmail.com ', '', '0000-00-00'),
(130, '522H0047', 'ffbfa2d25828a6ef738c74381783067e', 'Nguyễn Ngọc Thiện', '2004-10-11', 2, '0352133352', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/nguyen.ngoc.thien.2004', 'nngocthienn2004@gmail.com', '', '0000-00-00'),
(131, '52000830', '5512764ed625346e1062b1f8d5e3e002', 'Nguyễn Thị Anh Đào', '2002-03-30', 2, '0373154392', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/sakura303', 'vyanhdao303@gmail.com', '', '0000-00-00'),
(133, '52200212', 'adabcb05ced2623890bf2070f43d38f8 ', 'Tô Đại Trí ', '2004-03-19', 2, '0372948056', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/todaitri19', 'todaitri19@gmail.com', '', '0000-00-00'),
(134, '522H0046', '9e80d2dbc6ed79172f6b912fb7f786ec', 'Nguyễn Huỳnh Anh Khoa', '2004-11-19', 2, '0799423208', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/anhkhoakz', 'anhkhoakz@pm.me', '', '0000-00-00'),
(135, '42200405', '17d9001878f550af186673f0a9a6cd72', 'Trần Thành Luân', '2004-01-01', 2, '0901987342', 'Khoa điện - điện tử', 'khong', 15, '', 'thanhluantm2004', '', '0000-00-00'),
(136, '521H0442', '59a5ce28d1ed7bc8583e270366568a55 ', 'Tạ Tiến Đạt', '2003-09-29', 2, '0356779197', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/S2TD06', 'tiendat79197@gmail.com', '', '0000-00-00'),
(137, '42100283', 'fbef7f6313693798de20149e7146699f', 'Lữ Ngọc Thu Trang', '2003-01-19', 2, '0942949884', 'Khoa điện - điện tử', 'khong', 15, '', 'lungocthutrang@gmail.com', '', '0000-00-00'),
(138, '52200277', 'f34c56ea511b54693c5c68b782bb4179 ', 'Nguyễn Huỳnh Đăng Minh ', '2004-12-13', 2, '0815252789', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/nhdm611', 'dangminh1312@gmail.com', '', '0000-00-00'),
(139, '522H0041', '88b43de9e0d66747c547d22c0ec330e5 ', 'Nguyễn Bảo Ngọc', '2004-01-01', 2, '0778456979', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/baongocz.01', 'baongocnguyen.qna@gmail.com', '', '0000-00-00'),
(140, '521H0509', '88b3a86daba9581d1229417e75197061 ', 'Nguyễn Hoàng phúc ', '2003-10-24', 2, '0907030725', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100024604172210', 'Phucnguyenhoang3839@gmail.com ', '', '0000-00-00'),
(141, '522H0019', 'e11923e563caa4e489efbcc160a53f01', 'Hoàng Thị Xuân Ny ', '2004-03-23', 2, '0384310230', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/htxn.03', '0384310230	hoangxuanny2004@gmail.com ', '', '0000-00-00'),
(142, '52200020', '8d98d36275e527841d2ae327ac66695f', 'Hồ Nguyễn An Khang', '2004-05-31', 2, '0388313867', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/profile.php?id=100017482985594', 'khangho150@gmail.com', '', '0000-00-00'),
(143, '52200090', '84a33709032ba29b45c467acb4b85c5b', 'Nguyễn Thị Huyền Diệu', '2004-07-13', 2, '0379036004', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/huyendiu1307', 'nguyrnthihuyendieu130720004@gmail.com', '', '0000-00-00'),
(144, '52200008', 'a9cf59cfcaf1b7abbd0c11974af079f3', 'Danh Nguyễn Nhựt An', '2004-04-25', 2, '0788862904', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/nhat.an.58152', 'andanh25042004@gmail.com', '', '0000-00-00'),
(145, '52100986', '5f225123792c82e36f087a93cfdcd7c2 ', 'Trần Đức Phát', '2003-03-27', 2, '0906891868', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/i.am.phattrn', 'phatpro2003@gmail.com', '', '0000-00-00'),
(146, '520H0335', 'f49cb0b8fb68ab73b56140058569a209', 'Nguyễn Chí Anh', '2002-05-08', 2, '0931426669', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/chanhhh85', 'chianh747@gmail.com', '', '0000-00-00'),
(147, '522H0066', '0c4dfc19506de4fb9c6169cc821c85f3 ', 'Phạm Quốc Việt', '2004-02-09', 2, '0367420012', 'Khoa công nghệ thông tin', 'khong', 15, 'https://www.facebook.com/viet.phamquoc.1422409', 'quocviet09022004@gmail.com', '', '0000-00-00'),
(149, '522H0051', 'aa15949a346d1a2f91cc6afa64f90ac1', 'Nguyễn Thành Nhân', '2004-04-10', 2, '0326223564', 'Khoa công nghệ thông tin', 'khong', 14, 'https://www.facebook.com/ntn10042004', 'nguyenthanhnhantg15@gmail.com', '', '0000-00-00'),
(151, '720H0033', '461334156525579d5bda345a1fc13c3a ', 'Phan Tiến Dũng', '2002-06-29', 2, '0941112561', 'Khoa quản trị kinh doanh', 'khong', 15, 'https://www.facebook.com/tiendung.phan.5872', 'phantiendung2906@gmail.com', '', '0000-00-00'),
(152, '32100892', 'eb246ff6c30f54f44b15057e0426f316', 'Bùi Thị Kim Huệ', '2003-03-21', 2, '0774152624', 'Khoa khoa học xã hội và nhân văn', 'khong', 14, 'https://www.facebook.com/hue.kin', 'buithikimhue2624@gmail.com', '', '0000-00-00'),
(153, '720H0983', 'e30b8270320cf7b71082381d13c450af', 'Bùi Đoàn Minh Quân', '2002-03-24', 2, '0912284445', 'Khoa quản trị kinh doanh', 'khong', 14, 'https://www.facebook.com/mquanne', '4work.mq@gmail.com', '', '0000-00-00'),
(155, '52100403', '6797062142f0ada49a90f190d27ee3b1 ', 'Trần Bảo Duy', '2003-06-17', 2, '0829743972', 'Khoa công nghệ thông tin', 'khong', 14, 'https://www.facebook.com/ttduyyy', 'tranbaoduy176@gmail.com', '', '0000-00-00'),
(156, '519H0059', 'a076ddab7402b7aaea74be228de400bf', 'Nguyễn Đức Bình', '2001-12-03', 2, '0904400842', 'Khoa công nghệ thông tin', 'khong', 15, '', 'truongbinh15a@gmail.com', '', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  ADD PRIMARY KEY (`id_attendance`),
  ADD KEY `fk_tbl_attendance_id_user` (`id_user`),
  ADD KEY `fk_tbl_attendance_id_schoolyear` (`schoolyear`),
  ADD KEY `fk_tbl_attendance_id_semesters` (`semester`);

--
-- Indexes for table `tbl_fix`
--
ALTER TABLE `tbl_fix`
  ADD PRIMARY KEY (`id_fix`);

--
-- Indexes for table `tbl_maxim`
--
ALTER TABLE `tbl_maxim`
  ADD PRIMARY KEY (`id_maxim`);

--
-- Indexes for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`id_position`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  ADD PRIMARY KEY (`id_schedule`),
  ADD KEY `fk_tbl_schedule_id_user` (`id_student`);

--
-- Indexes for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  ADD PRIMARY KEY (`id_schoolyear`);

--
-- Indexes for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_tbl_user_id_team` (`id_team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_attendance`
--
ALTER TABLE `tbl_attendance`
  MODIFY `id_attendance` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `tbl_fix`
--
ALTER TABLE `tbl_fix`
  MODIFY `id_fix` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `tbl_maxim`
--
ALTER TABLE `tbl_maxim`
  MODIFY `id_maxim` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_permission`
--
ALTER TABLE `tbl_permission`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `id_position` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_schedule`
--
ALTER TABLE `tbl_schedule`
  MODIFY `id_schedule` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `tbl_schoolyear`
--
ALTER TABLE `tbl_schoolyear`
  MODIFY `id_schoolyear` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_semester`
--
ALTER TABLE `tbl_semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_seminar`
--
ALTER TABLE `tbl_seminar`
  MODIFY `id_seminar` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_team`
--
ALTER TABLE `tbl_team`
  MODIFY `id_team` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `fk_tbl_user_id_team` FOREIGN KEY (`id_team`) REFERENCES `tbl_team` (`id_team`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
