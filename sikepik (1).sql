-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2016 at 10:49 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sikepik`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_datakelompok`
--

CREATE TABLE IF NOT EXISTS `db_datakelompok` (
`id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` char(12) NOT NULL,
  `id_kecamatan` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=635 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_datakelompok`
--

INSERT INTO `db_datakelompok` (`id`, `nama`, `alamat`, `no_hp`, `id_kecamatan`) VALUES
(1, 'Kelompok Gemah Ripah', 'Jabung, Kalitirto Berbah Sleman ', '0274 6505033', 1),
(2, 'Kelompok Mina jaya', 'Cangaan, Baran, Kalitirto Berbah Sleman', '087838151001', 2),
(3, 'kelompok Tirta mas', 'Ledok Peri, Kalitirto Berbah Sleman', '08157905865', 1),
(4, 'Kelompok Yasa Mina', 'Cangaan, Kalitirto Berbah Sleman ', '085727262011', 1),
(5, 'Kelompok Mina Tirta', 'Sumber Lor, Kalitirto Berbah Sleman', '081572812281', 1),
(6, 'Kelompok Mina Air Jaya', 'Kaliajir Lor, Kalitirto Berbah Sleman', '0818465381', 1),
(7, 'kelompok Mino Komandowo', 'Kaliajir Lor, Kalitirto Berbah Sleman', '087793744959', 1),
(8, 'Kelompok Ngebruk Mina', 'Mangunan, Kalitirto Berbah Sleman', '0', 1),
(9, 'Kelompok Mina Tanjung Mandiri', 'Tanjungtirto, Kalitirto Berbah Sleman', '0274 7411236', 1),
(10, 'Kelompok Tlogo Mino', 'Tlogowono, Tegaltirto Berbah Sleman', '085292698398', 1),
(11, 'Kelompok Mina muda Ata', 'Tlogowono, Tegaltirto Berbah Sleman', '081578488885', 1),
(12, 'Kelompok Mina Rukun', 'Kuton, Tegaltirto Berbah Sleman', '08122956880', 1),
(13, 'Kelompok Ngupoyo Mino ', 'Sanggrahan, Tegaltirto Berbah Sleman', '08179408278', 1),
(14, 'Kelompok Mina Gerras', 'Sanggrahan, Tegaltirto Berbah Sleman', '081904221964', 1),
(15, 'Kelompok Mina Sari', 'Tegalsari, Tegaltirto Berbah Sleman', '083876967933', 1),
(16, 'Kelompok Mina Mukti', 'Karang Wetan, Tegaltirto Berbah Sleman', '08179408278', 1),
(17, 'Kelompok Mina Karya ', 'Blendangan, Tegaltirto Berbah Sleman', '08156818009', 1),
(18, 'Kelompok Mina Jaya', 'Kadipolo, Sendangtirto Berbah Sleman', '08122772581', 1),
(19, 'Kelompok Planet Ikan ', 'Sribit, Sendangtirto Berbah Sleman', '081328707739', 1),
(20, 'Kelompok Agung Rahayu', 'Klayar, Sendangtirto Berbah Sleman', '08179432089', 1),
(21, 'Kelompok Mina Sejahtera', 'Maredan, Sendangtirto Berbah Sleman', '087838151001', 1),
(22, 'Kelompok Mina Barokah', 'Gandu, Sendangtirto Berbah Sleman', '081215481395', 1),
(23, 'Kelompok Mina Mandiri Sejahtera', 'Gandu, Sendangtirto Berbah Sleman', '6', 1),
(24, 'Kelompok Mina Sejahtera', 'Klakah, Sendangtirto Berbah Sleman', '087838700274', 1),
(25, 'Kelompok Mina Mukti', 'Karang Wetan, Tegaltirto Berbah Sleman', '081328096842', 1),
(26, 'Kelompok Mina Karya ', 'Blendangan, Tegaltirto Berbah Sleman', '08156818009', 1),
(27, 'Kelompok Mina Jaya', 'Kadipolo, Sendangtirto Berbah Sleman', '08122772581', 1),
(28, 'Kelompok Planet Ikan ', 'Sribit, Sendangtirto Berbah Sleman', '081328707739', 1),
(29, 'Kelompok Agung Rahayu', 'Klayar, Sendangtirto Berbah Sleman', '08179432089', 1),
(30, 'Kelompok Mina Sejahtera', 'Maredan, Sendangtirto Berbah Sleman', '087838151001', 1),
(31, 'Kelompok Krido Barino', 'Cangkringan, Argomulyo Cangkringan Sleman', '08122780208', 2),
(32, 'Kelompok MIna Harta', 'Cangkringan, Argomulyo Cangkringan Sleman', '0', 2),
(33, 'Kelompok Mina Karya Manunggal', 'Kebur, Argomulyo Cangkeingan Sleman', '087845651921', 2),
(34, 'Kelompok Mina Raharjo', 'Dliring, Argomulyo Cangkringan Sleman', '085868424885', 2),
(35, 'MIna Sari Sidodadi', 'Randusari, Argomulyo Cangkringan Sleman', '085228043153', 2),
(36, 'Kelompok Mina Mulyo', 'Randusari, Argomulyo Cangkringan Sleman', '082138408559', 2),
(37, 'Kelompok Mina Bakri Mulia', 'Kuwang, Argomulyo Cangkringan Sleman', '23', 2),
(38, 'Kelompok Mino Lestari', 'Brongkol, Argomulyo Cangkringan Sleman', '081392123374', 2),
(39, 'Kelompok Mina Karya Usaha', 'Sabrang Wetan, Wukirsari Cangkringan Sleman', '085643599312', 2),
(40, 'Kelompok Mandiri Sejahtera', 'Sabrang Wetan, Wukirsari Cangkringan Sleman', '08122714950', 2),
(41, 'Kelompok Misoyo Mino', 'Selorejo, Wukirsari Cangkringan Sleman', '08128294879', 2),
(42, 'Kelompok Mina Mandiri', 'Bedoyo, Wukirsari Cangkringanj Sleman', '081227752154', 2),
(63, 'Kelompok Mina Sejahtera', 'Sruni, Wukirsari Cangkringan Sleman', '081904211498', 2),
(64, 'Kelompok Mina Merapi Sejahtera', 'Sintokan, Wukirsari Cangkringan Sleman', '085743229014', 2),
(65, 'Kelompok Mina Gemilang', 'Balangan, Wukirsari Cangkringan Sleman', '085228867248', 2),
(66, 'Kelompok Mina Makmur', 'Kiyaran, Wukirsari cangkringan Sleman', '081392674803', 2),
(67, 'Kelompok Mina Raharja', 'Plagrak, Wukirsari Cangkringan Sleman', '7', 2),
(68, 'Kelompok Mina Kaca', 'Pusmalang, Wukirsari Cangkringan Sleman', '081393907879', 2),
(69, 'Kelompok Mina Mandiri', 'Sempon, Wukirsari Cangkringan Sleman', '085743666811', 2),
(70, 'Kelompok Mina Rejo', 'Glagah Wero, Wukirsari Cangkringan Sleman', '0274 6929498', 2),
(71, 'Kelompok Taruno Mulyo', 'Geblog, Wukirsari Cangkringan Sleman', '675', 2),
(72, 'Kelompok Kabul Makmur', 'Kregan, Wukirsari Cangkringan Sleman', '085868599719', 2),
(73, 'kalompok Makmur Mandiri', 'Karang Pakis, Wukirsari Cangkringan Sleman', '081804137319', 2),
(74, 'Kelompok Mina Makmur', 'Cakran, Wukirsari Cangkringan Sleman', '08170414164', 2),
(75, 'kelompok Mino Melati', 'Kedung, Wukirsari Cangkringan Sleman', '087738841042', 2),
(76, 'kelompok Mina Sejahtera', 'Ngemplak, Wukirsari Cangkringan Sleman', '083840708448', 2),
(77, 'Kelompok Mina Manunggal', 'Dawung, Wukirsari Cangkringan Sleman', '085292572247', 2),
(78, 'Kelompok MIna Gatak Sejahtera', 'Gatak, Wukirsari Cangkringan Sleman', '02749344587', 2),
(79, 'Kelompok Mina Agung Rezeki', 'Gondang, Umbulharjo Cangkringan Sleman', '085743375003', 2),
(80, 'Kelompok Mina Puspita', 'Pentingsari, Umbulharjo Cangkeingan Sleman', '081227553004', 2),
(81, 'Kelompok Mina lestari', 'Karang Geneng, Umbulharjo Cangkringan Sleman', '85', 2),
(82, 'Kelompok Mina Manunggal II', 'Kopeng, Kepuharjo Cangkringan Sleman', '636', 2),
(83, 'Kelompok Mina Rahayu Sembada', 'Glendongan, Caturtunggal Depok Sleman', '081392581473', 3),
(84, 'Kelompok Mina Tirto Aji', 'Tambakbayan, Caturtunggal Depok Sleman', '(0274) 91109', 3),
(85, 'Kelompok  Mino Karyo', 'Demangan, Maguwoharjo Depok Sleman', '08175492538', 3),
(86, 'Kelompok Mina Sejahtera', 'Pugeran, Maguwoharjo Depok Sleman', '081392476159', 3),
(87, 'Kelompok Mina Rejeki', 'Pugeran, Maguwoharjo Depok Sleman', '085729683413', 3),
(88, 'Kelompok Mina Rahayu Sembada', 'Glendongan, Caturtunggal Depok Sleman', '081392581473', 3),
(89, 'Kelompok Mina Tirto Aji', 'Tambakbayan, Caturtunggal Depok Sleman', '(0274) 91109', 3),
(90, 'Kelompok  Mino Karyo', 'Demangan, Maguwoharjo Depok Sleman', '08175492538', 3),
(91, 'Kelompok Mina Sejahtera', 'Pugeran, Maguwoharjo Depok Sleman', '081392476159', 3),
(92, 'Kelompok Mina Rejeki', 'Pugeran, Maguwoharjo Depok Sleman', '085729683413', 3),
(93, 'Kelompok Mina Mulya', 'Tempelsari, Banjeng, Maguwoharjo Depok Sleman', '081225946711', 3),
(94, 'Kelompok Mina Makmur', 'Kr.Anom, Banjeng, Maguwoharjo Depok Sleman', '(0274) 66870', 0),
(95, 'Kelompok Mino Ngudi Lestari', 'Nayan, Maguwoharjo Depok Sleman', '08156814471', 3),
(96, 'Kelompok Mino Laras', 'Nayan, Maguwoharjo Depok Sleman', '085868521478', 3),
(97, 'Kelompok Mina Tani Mulya', 'Ringinsari, Maguwoharjo Depok Sleman', '081587831951', 3),
(98, 'Kelompok Mino Rejo', 'Tapanrejo, Tajem, Maguwoharjo Depok Sleman', '087739588570', 3),
(99, 'Kelompok Mina Lestari', 'Kopen, Nanggulan, Maguwoharjo Depok Sleman', '08170418943', 3),
(100, 'Kelompok Mina Rejomulyo', 'Rejoinangun, Kalongan, Maguwoharjo Depok Sleman', '085643547631', 3),
(101, 'Kelompok Mina Jaya Lestari', 'Sembego, Maguwoharjo Depok Sleman', '081392137227', 3),
(102, 'Kelompok Mina Aji Handayani', 'Nanggulan, Maguwoharjo Depok Sleman', '085743711492', 3),
(103, 'Kelompok Mino Ledhok Deso', 'Sopalan, Maguwoharjo Depok Sleman', '087839213334', 3),
(104, 'Kelompok Mina Legi', 'Sambilegi Lor, Maguwoharjo Depok Sleman', '08578125252', 3),
(105, 'Kelompok Mino Pantes Mulyo', 'Kradenan, Ringinsari, Maguwoharjo Depok Sleman', '085228619936', 3),
(106, 'Kelompok Mina Sambi Makmur', 'Sambilegi Kidul, Maguwoharjo Depok Sleman', '(0274) 92198', 3),
(107, 'Kelompok  Mina Lestari', 'Denokan, Maguwoharjo Depok Sleman', '081328399956', 3),
(108, 'Kelompok Mina Rejomulyo', 'Sembego, Maguwoharjo  Depok Sleman', '081392137227', 3),
(109, 'Kelompok Mina Mulya', 'Tempelsari, Banjeng, Maguwoharjo Depok Sleman', '081225946711', 3),
(110, 'Kelompok Mina Makmur', 'Kr.Anom, Banjeng, Maguwoharjo Depok Sleman', '(0274) 66870', 0),
(111, 'Kelompok Mino Ngudi Lestari', 'Nayan, Maguwoharjo Depok Sleman', '08156814471', 3),
(112, 'Kelompok Mino Laras', 'Nayan, Maguwoharjo Depok Sleman', '085868521478', 3),
(113, 'Kelompok Mina Tani Mulya', 'Ringinsari, Maguwoharjo Depok Sleman', '081587831951', 3),
(114, 'Kelompok Mino Rejo', 'Tapanrejo, Tajem, Maguwoharjo Depok Sleman', '087739588570', 3),
(115, 'Kelompok Mina Lestari', 'Kopen, Nanggulan, Maguwoharjo Depok Sleman', '08170418943', 3),
(116, 'Kelompok Mina Rejomulyo', 'Rejoinangun, Kalongan, Maguwoharjo Depok Sleman', '085643547631', 3),
(117, 'Kelompok Mina Jaya Lestari', 'Sembego, Maguwoharjo Depok Sleman', '081392137227', 3),
(118, 'Kelompok Mina Aji Handayani', 'Nanggulan, Maguwoharjo Depok Sleman', '085743711492', 3),
(119, 'Kelompok Mino Ledhok Deso', 'Sopalan, Maguwoharjo Depok Sleman', '087839213334', 3),
(120, 'Kelompok Mina Legi', 'Sambilegi Lor, Maguwoharjo Depok Sleman', '08578125252', 3),
(121, 'Kelompok Mino Pantes Mulyo', 'Kradenan, Ringinsari, Maguwoharjo Depok Sleman', '085228619936', 3),
(122, 'Kelompok Mina Sambi Makmur', 'Sambilegi Kidul, Maguwoharjo Depok Sleman', '(0274) 92198', 3),
(125, 'Kelompok Santan Mina Lestari', 'Santan, Kalongan, Maguwoharjo Depok Sleman', '085878818878', 3),
(126, 'Kelompok Mina Mukti', 'Panjen, Maguwoharjo Depok Sleman', '02747852643', 3),
(127, 'Kelompok Mina 21', 'Demangan, Maguwoharjo Depok Sleman', '085292716515', 3),
(130, 'Kelompok Santan Mina Lestari', 'Santan, Kalongan, Maguwoharjo Depok Sleman', '085878818878', 3),
(131, 'Kelompok Mina Mukti', 'Panjen, Maguwoharjo Depok Sleman', '02747852643', 3),
(132, 'Kelompok Mina 21', 'Demangan, Maguwoharjo Depok Sleman', '085292716515', 3),
(135, 'Kelompok Harum', 'Gamping Lor, Ambarketawang Gamping Sleman', '087738059420', 4),
(136, 'Kelompok Mina Makmur', 'Mejing Lor, Ambarketawang Gamping Sleman', '081392168622', 4),
(137, 'Kelompok Mina Mandiri', 'Kalimanjung, Ambarketawang Gamping Sleman', '085743556675', 4),
(138, 'Kelompok Mina Bakti', 'Depok, Ambarketawang Gamping Sleman', '(0274)787872', 4),
(139, 'Kelompok Mina Sejahtera', 'Tlogo, Ambarketawang Gamping Sleman', '08562883392', 4),
(140, 'Kelompok Mina Rukun', 'Bodeh, Ambarketawang Gamping Sleman', '535', 4),
(141, 'Kelompok Mina Tirta', 'Ngaran, Balecatur Gamping Sleman', '(0274)744241', 4),
(142, 'Kelompok Mina Makmur', 'Gejawan, Balecatur Gamping Sleman', '085228774551', 4),
(143, 'Kelompok Mina Sejahtera', 'Gamol, Balecatur Gamping Sleman', '2344', 4),
(144, 'Kelompok Ngudi Makmur', 'Kluwih, Balecatur Gamping Sleman', '081578121226', 4),
(145, 'Kelompok Pattin', 'Nyamplung Kidul, Balecatur Gamping Sleman', '081904011118', 4),
(146, 'Kelompok Varia Mina Makmur', 'Pereng Dawe, Balecatur Gamping Sleman', '5356', 4),
(147, 'Kelompok Sumber Rejeki', 'Sumber, Balecatur Gamping Sleman', '081328085322', 4),
(148, 'Kelompok Mino Mulyo', 'Jambon, Trihanggo Gamping Sleman', '(0274) 91704', 4),
(149, 'Kelompok Mina Asih', 'Salakan, Trihanggo Gamping Sleman', '08156857316', 4),
(150, 'Kelompok Guyup Rukun', 'Baturan Kidul, Trihanggo Gamping Sleman', '085228723706', 4),
(151, 'Kelompok Mina Mekar', 'Trini, Trihanggo Gamping Sleman', '081328193190', 4),
(152, 'Kelompok Mina Delapan', 'Kronggahan Ii, Trihanggo Gamping Sleman', '081568485386', 4),
(153, 'Kelompok Tegal Makmur', 'Kronggahan II, Trihanggo Gamping Sleman', '082220044898', 4),
(154, 'Kelompok Mino Bulak Niten', 'Niten, Nogotirto Gamping Sleman', '088216078411', 4),
(155, 'Kelompok Ngudi Makmur', 'Cambahan, Nogotirto Gamping Sleman', '66', 4),
(156, 'Kelompok Mino Tirta', 'Guyangan, Nogotirto Gamping Sleman', '087738406999', 4),
(157, 'Kelompok Mina Sejahtera', 'Ponowaren, Nogotirto Gamping Sleman', '(0274) 71438', 4),
(158, 'Kelompok Mina Waras', 'Kwarasan, Nogotirto Gamping Sleman', '(0274) 70202', 4),
(159, 'Kelompok Sambung Roso', 'Kwarasan, Nogotirto Gamping Sleman', '087739540206', 4),
(160, 'Kelompok Mina Mulya', 'Pundung, Nogotirto Gamping Sleman', '081328732355', 4),
(161, 'Kelompok Mina Asri', 'Karang Tengah, Nogotirto Gamping Sleman', '6467', 4),
(162, 'Kelompok Mina Tirta', 'Mlangi, Nogotirto Gamping Sleman', '085725828905', 4),
(163, 'Kelompok Noto Mino Tirto', 'Mlangi, NogotirtoGamping Sleman', '089619000703', 4),
(164, 'Kelompok Mino Maju Lestari', 'Karang Tengah, Nogotirto Gamping Sleman', '(0274) 65665', 4),
(165, 'Kelompok Harum', 'Gamping Lor, Ambarketawang Gamping Sleman', '087738059420', 4),
(166, 'Kelompok Mina Makmur', 'Mejing Lor, Ambarketawang Gamping Sleman', '081392168622', 4),
(167, 'Kelompok Mina Mandiri', 'Kalimanjung, Ambarketawang Gamping Sleman', '085743556675', 4),
(168, 'Kelompok Mina Bakti', 'Depok, Ambarketawang Gamping Sleman', '(0274)787872', 4),
(169, 'Kelompok Mina Sejahtera', 'Tlogo, Ambarketawang Gamping Sleman', '08562883392', 4),
(170, 'Kelompok Mina Rukun', 'Bodeh, Ambarketawang Gamping Sleman', '535', 4),
(171, 'Kelompok Mina Tirta', 'Ngaran, Balecatur Gamping Sleman', '(0274)744241', 4),
(172, 'Kelompok Mina Makmur', 'Gejawan, Balecatur Gamping Sleman', '085228774551', 4),
(173, 'Kelompok Mina Sejahtera', 'Gamol, Balecatur Gamping Sleman', '2344', 4),
(174, 'Kelompok Ngudi Makmur', 'Kluwih, Balecatur Gamping Sleman', '081578121226', 4),
(175, 'Kelompok Pattin', 'Nyamplung Kidul, Balecatur Gamping Sleman', '081904011118', 4),
(176, 'Kelompok Varia Mina Makmur', 'Pereng Dawe, Balecatur Gamping Sleman', '5356', 4),
(177, 'Kelompok Sumber Rejeki', 'Sumber, Balecatur Gamping Sleman', '081328085322', 4),
(178, 'Kelompok Mino Mulyo', 'Jambon, Trihanggo Gamping Sleman', '(0274) 91704', 4),
(179, 'Kelompok Mina Asih', 'Salakan, Trihanggo Gamping Sleman', '08156857316', 4),
(180, 'Kelompok Guyup Rukun', 'Baturan Kidul, Trihanggo Gamping Sleman', '085228723706', 4),
(181, 'Kelompok Mina Mekar', 'Trini, Trihanggo Gamping Sleman', '081328193190', 4),
(182, 'Kelompok Mina Delapan', 'Kronggahan Ii, Trihanggo Gamping Sleman', '081568485386', 4),
(183, 'Kelompok Tegal Makmur', 'Kronggahan II, Trihanggo Gamping Sleman', '082220044898', 4),
(184, 'Kelompok Mino Bulak Niten', 'Niten, Nogotirto Gamping Sleman', '088216078411', 4),
(185, 'Kelompok Ngudi Makmur', 'Cambahan, Nogotirto Gamping Sleman', '66', 4),
(186, 'Kelompok Mino Tirta', 'Guyangan, Nogotirto Gamping Sleman', '087738406999', 4),
(187, 'Kelompok Mina Sejahtera', 'Ponowaren, Nogotirto Gamping Sleman', '(0274) 71438', 4),
(188, 'Kelompok Mina Waras', 'Kwarasan, Nogotirto Gamping Sleman', '(0274) 70202', 4),
(189, 'Kelompok Sambung Roso', 'Kwarasan, Nogotirto Gamping Sleman', '087739540206', 4),
(190, 'Kelompok Mina Mulya', 'Pundung, Nogotirto Gamping Sleman', '081328732355', 4),
(191, 'Kelompok Mina Asri', 'Karang Tengah, Nogotirto Gamping Sleman', '6467', 4),
(192, 'Kelompok Mina Tirta', 'Mlangi, Nogotirto Gamping Sleman', '085725828905', 4),
(193, 'Kelompok Noto Mino Tirto', 'Mlangi, NogotirtoGamping Sleman', '089619000703', 4),
(194, 'Kelompok Mino Maju Lestari', 'Karang Tengah, Nogotirto Gamping Sleman', '(0274) 65665', 4),
(195, 'Kelompok Mino Saroyo', 'Kajor, Nogotirto Gamping Sleman', '085292203225', 4),
(196, 'Kelompok Mina Sari', 'Sawahan, Nogotirto Gamping Sleman', '08510162339', 4),
(197, 'Kelompok Upr Sigrak', 'Kanoman, Banyuraden Gamping Sleman', '(0274) 61987', 4),
(198, 'Kelompok Mino Mukti', 'Dowangan, Banyuraden Gamping Sleman', '462667', 4),
(199, 'Kelompok Mina Sejahtera', 'Geplakan, Banyuraden Gamping Sleman', '08179417223', 4),
(200, 'Kelompok Mina Makmur Modinan', 'Modinan, Banyuraden Gamping Sleman', '266', 4),
(201, 'Kelompok Karamba Sejahtera', 'Somodaran, Banyuraden Gamping Sleman', '242', 4),
(210, 'Kelompok Mino Saroyo', 'Kajor, Nogotirto Gamping Sleman', '085292203225', 4),
(211, 'Kelompok Mina Sari', 'Sawahan, Nogotirto Gamping Sleman', '08510162339', 4),
(212, 'Kelompok Upr Sigrak', 'Kanoman, Banyuraden Gamping Sleman', '(0274) 61987', 4),
(213, 'Kelompok Mino Mukti', 'Dowangan, Banyuraden Gamping Sleman', '462667', 4),
(214, 'Kelompok Mina Sejahtera', 'Geplakan, Banyuraden Gamping Sleman', '08179417223', 4),
(215, 'Kelompok Mina Makmur Modinan', 'Modinan, Banyuraden Gamping Sleman', '266', 4),
(216, 'Kelompok Karamba Sejahtera', 'Somodaran, Banyuraden Gamping Sleman', '242', 4),
(225, 'Kelompok Marsudi Luhur', 'Pirak Mertosutan, Sidoluhur Godean Sleman', '525', 5),
(226, 'Kelompok Mina Swadaya', 'Gatak, Sidoluhur Godean Sleman', '42', 5),
(227, 'Kelompok Mina Manunggal Karya Makmur', 'Krajan, Sidoluhur Godean Sleman', '(0274) 71141', 5),
(228, 'Kelompok Mina Raharjo', 'Sokonilo, Sidoluhur Godean Sleman', '0857986767', 5),
(229, 'Kelompok Mina Sembada', 'Tebon Wetan, Sidoluhur Godean Sleman', '(0274) 79421', 5),
(230, 'Kelompok Mina Luhur', 'Jowah Ii, Sidoluhur Godean Sleman', '(0274) 68328', 5),
(231, 'Kelompok Tegal Mina', 'Jowah Vi, Sidoluhur Godean Sleman', '(0274) 71691', 5),
(232, 'Kelompok Mina Makmur', 'Jowah Vi, Sidoluhur Godean Sleman', '085651177686', 5),
(233, 'Kelompok Mina Tani Makmur', 'Ngabangan, SidoluhurGodean Sleman', '455', 5),
(234, 'Kelompok Mina Makmur', 'Ngabangan, Sidoluhur Godean Sleman', '888', 5),
(235, 'Kelompok Mina Usaha', 'Juragan, Sidoluhur Godean Sleman', '(0274)660312', 5),
(236, 'Kelompok Dadapan Sejahtera', 'Dadapan, Sidoluhur Godean Sleman', '355', 5),
(237, 'Kelompok Mina Migunani', 'Dadapan, Sidoluhur Godean Sleman', '081392386171', 5),
(238, 'Kelompok Mina Adi', 'Pandean Vii, Sidoluhur Godean Sleman', '23425', 5),
(239, 'Kelompok Mina Karya', 'Serangan, Sidoluhur Godean Sleman', '56466', 5),
(240, 'Kelompok Mina Agung', 'Gentingan, Sidoagung Godean Sleman', '081802624343', 5),
(241, 'Kelompok Mina Jaya', 'Gentingan, Sidoagung Godean Sleman', '(0274) 68072', 5),
(242, 'Kelompok Dadi Mulyo', 'Gentingan, Sidoagung Godean Sleman', '(0274)315517', 5),
(243, 'Kelompok Dewi Sri', 'Senuko, Sidoagung Godean Sleman', '(0274) 79377', 5),
(244, 'Kelompok Mina Agung', 'Supitan, Jetis, Sidoagung Godean Sleman', '(0274) 70093', 5),
(245, 'Kelompok Mina Karya Mandiri', 'Genitem, Sidoagung Godean Sleman', '35265', 5),
(246, 'Kelompok Mina Harapan Mulya', 'Bendungan, Sidoagung Godean Sleman', '245', 5),
(247, 'Kelompok Sumber Rejeki Ii', 'Sangonan Karang, Sidorejo Godean Sleman', '081328745680', 5),
(248, 'Kelompok Mina Pare Mulyo', 'Pare Ii, Sidorejo Godean Sleman', '081392643311', 5),
(249, 'Kelompok Mina Sido Maju', 'Bakungan, Sidorejo Godean Sleman', '(0274) 79457', 5),
(250, 'Kelompok Sumber Rejeki I', 'Kemirisewu, Sidorejo Godean Sleman', '081804235363', 5),
(251, 'Kelompok Mina Lestari', 'Taragan, Sidorejo Godean Sleman', '(0274) 68072', 5),
(252, 'Kelompok Mina Jumbo', 'Dukuh, Sidokarto Godean Sleman', '3356', 5),
(253, 'Kelompok Upr Mina Widyakarta Bangkit', 'Dukuh, Sidokarto Godean Sleman', '087838993791', 5),
(254, 'Kelompok Mina Sipule', 'Jetak I, Sidokarto Godean Sleman', '(0274) 66235', 5),
(255, 'Kelompok Marsudi Luhur', 'Pirak Mertosutan, Sidoluhur Godean Sleman', '525', 5),
(256, 'Kelompok Mina Swadaya', 'Gatak, Sidoluhur Godean Sleman', '42', 5),
(257, 'Kelompok Mina Manunggal Karya Makmur', 'Krajan, Sidoluhur Godean Sleman', '(0274) 71141', 5),
(258, 'Kelompok Mina Raharjo', 'Sokonilo, Sidoluhur Godean Sleman', '0857986767', 5),
(259, 'Kelompok Mina Sembada', 'Tebon Wetan, Sidoluhur Godean Sleman', '(0274) 79421', 5),
(260, 'Kelompok Mina Luhur', 'Jowah Ii, Sidoluhur Godean Sleman', '(0274) 68328', 5),
(261, 'Kelompok Tegal Mina', 'Jowah Vi, Sidoluhur Godean Sleman', '(0274) 71691', 5),
(262, 'Kelompok Mina Makmur', 'Jowah Vi, Sidoluhur Godean Sleman', '085651177686', 5),
(263, 'Kelompok Mina Tani Makmur', 'Ngabangan, SidoluhurGodean Sleman', '455', 5),
(264, 'Kelompok Mina Makmur', 'Ngabangan, Sidoluhur Godean Sleman', '888', 5),
(265, 'Kelompok Mina Usaha', 'Juragan, Sidoluhur Godean Sleman', '(0274)660312', 5),
(266, 'Kelompok Dadapan Sejahtera', 'Dadapan, Sidoluhur Godean Sleman', '355', 5),
(267, 'Kelompok Mina Migunani', 'Dadapan, Sidoluhur Godean Sleman', '081392386171', 5),
(268, 'Kelompok Mina Adi', 'Pandean Vii, Sidoluhur Godean Sleman', '23425', 5),
(269, 'Kelompok Mina Karya', 'Serangan, Sidoluhur Godean Sleman', '56466', 5),
(270, 'Kelompok Mina Agung', 'Gentingan, Sidoagung Godean Sleman', '081802624343', 5),
(271, 'Kelompok Mina Jaya', 'Gentingan, Sidoagung Godean Sleman', '(0274) 68072', 5),
(272, 'Kelompok Dadi Mulyo', 'Gentingan, Sidoagung Godean Sleman', '(0274)315517', 5),
(273, 'Kelompok Dewi Sri', 'Senuko, Sidoagung Godean Sleman', '(0274) 79377', 5),
(274, 'Kelompok Mina Agung', 'Supitan, Jetis, Sidoagung Godean Sleman', '(0274) 70093', 5),
(275, 'Kelompok Mina Karya Mandiri', 'Genitem, Sidoagung Godean Sleman', '35265', 5),
(276, 'Kelompok Mina Harapan Mulya', 'Bendungan, Sidoagung Godean Sleman', '245', 5),
(277, 'Kelompok Sumber Rejeki Ii', 'Sangonan Karang, Sidorejo Godean Sleman', '081328745680', 5),
(278, 'Kelompok Mina Pare Mulyo', 'Pare Ii, Sidorejo Godean Sleman', '081392643311', 5),
(279, 'Kelompok Mina Sido Maju', 'Bakungan, Sidorejo Godean Sleman', '(0274) 79457', 5),
(280, 'Kelompok Sumber Rejeki I', 'Kemirisewu, Sidorejo Godean Sleman', '081804235363', 5),
(281, 'Kelompok Mina Lestari', 'Taragan, Sidorejo Godean Sleman', '(0274) 68072', 5),
(282, 'Kelompok Mina Jumbo', 'Dukuh, Sidokarto Godean Sleman', '3356', 5),
(283, 'Kelompok Upr Mina Widyakarta Bangkit', 'Dukuh, Sidokarto Godean Sleman', '087838993791', 5),
(284, 'Kelompok Mina Sipule', 'Jetak I, Sidokarto Godean Sleman', '(0274) 66235', 5),
(285, 'Kelompok Mina Sehati', 'Jetak I, Sidokarto Godean Sleman', '243', 5),
(286, 'Kelompok Mina Manunggal Karya', 'Jetak II, Sidokarto Godean Sleman', '757', 5),
(287, 'Kelompok Mina Karya Widyakarta', 'Jetak II, Sidokarto Godean Sleman', '7371', 5),
(288, 'Kelompok Donowarih', 'Rewulu Wetan, Sidokarto Godean Sleman', '087839824234', 5),
(289, 'Kelompok Mina Makmur', 'Cokrobedog, Sidoarum Godean Sleman', '(0274)315517', 5),
(290, 'Kelompok Mina Makmur', 'Jomboran, Sidoarum Godean Sleman', '(0274) 74311', 5),
(291, 'Kelompok Mina Arum', 'Nglarang Lor, Sidoarum Godean Sleman', '976', 5),
(292, 'Kelompok Al-Ihsan', 'Bantulan, Sidoarum Godean Sleman', '08164263277', 5),
(293, 'Kelompok Mina Sembada', 'Tajen, Sidomoyo Godean Sleman', '08174129203', 5),
(294, 'Kelompok Sri Rejeki', 'Gancahan VII, Sidomulyo Godean Sleman', '(0274) 66286', 5),
(295, 'Kelompok Mina Sehati', 'Jetak I, Sidokarto Godean Sleman', '243', 5),
(296, 'Kelompok Mina Manunggal Karya', 'Jetak II, Sidokarto Godean Sleman', '757', 5),
(297, 'Kelompok Mina Karya Widyakarta', 'Jetak II, Sidokarto Godean Sleman', '7371', 5),
(298, 'Kelompok Donowarih', 'Rewulu Wetan, Sidokarto Godean Sleman', '087839824234', 5),
(299, 'Kelompok Mina Makmur', 'Cokrobedog, Sidoarum Godean Sleman', '(0274)315517', 5),
(300, 'Kelompok Mina Makmur', 'Jomboran, Sidoarum Godean Sleman', '(0274) 74311', 5),
(301, 'Kelompok Mina Arum', 'Nglarang Lor, Sidoarum Godean Sleman', '976', 5),
(302, 'Kelompok Al-Ihsan', 'Bantulan, Sidoarum Godean Sleman', '08164263277', 5),
(303, 'Kelompok Mina Sembada', 'Tajen, Sidomoyo Godean Sleman', '08174129203', 5),
(304, 'Kelompok Sri Rejeki', 'Gancahan VII, Sidomulyo Godean Sleman', '(0274) 66286', 5),
(305, 'Kelompok Mino Soka Makmur', 'Kadisoko, Purwomartani Kalasan Sleman', '(0274) 74220', 6),
(306, 'Kelompok Mina Soka Mandiri', 'Kadisoko, Purwomartani Kalasan Sleman', '(02174)65507', 6),
(307, 'Kelompok Mina Perkasa', 'Randusari, Purwomartani Kalasan Sleman', '085292743331', 6),
(308, 'Kelompok Mino Rejo', 'Kadirojo, Purwomartani Kalasan Sleman', '(0274) 68418', 5),
(309, 'Kelompok Mina Ngaglik Jaya', 'Ngaglik, Cupuwatu, Purwomartani Kalasan Sleman', '081904250692', 6),
(310, 'Kelompok Mina Tunggal', 'Tundan, Purwomartani Kalasan Sleman', '25626', 6),
(311, 'Kelompok Mina Makmur', 'Brintikan, Tirtomartani Kalasan Sleman', '085643595141', 6),
(312, 'Kelompok Mino Rono Drono', 'Bendungan, Tirtomartani Kalasan Sleman', '087839610362', 6),
(313, 'Kelompok Mina Taruna Jaya', 'Bendan, Tirtomartani Kalasan Sleman', '081392627546', 6),
(314, 'Kelompok Mina Mitayani', 'Ngajek, Tirtomartani Kalasan Sleman', '081578061226', 6),
(315, 'Kelompok Mino Unggul', 'Tulung, Tamanmartani Kalasan Sleman', '081578753641', 6),
(316, 'Kelompok Mino Mukti', 'Cageran, Tamanmartani Kalasan Sleman', '081578702785', 6),
(317, 'Kelompok Mina Sejahtera', 'Pucung, Tamanmartani Kalasan Sleman', '08122796467', 6),
(318, 'Kelompok Mino Selosembodo', 'Kiyudan, Selomartani Kalasan Sleman', '0815984900', 6),
(319, 'Kelompok Mina Sejahtera', 'Jomblang, Selomartani Kalasan Sleman', '085799792914', 6),
(320, 'Kelompok Mina Jaya', 'Kaliwaru, Selomartani Kalasan Sleman', '081328703226', 6),
(321, 'Kelompok Mino Suromakarti', 'Surokerten, Selomartani Kalasan Sleman', '081578682228', 6),
(322, 'Kelompok Mina Rahayu', 'Ngrangsan, Selomartani Kalasan Sleman', '0817466047', 6),
(335, 'Kelompok Mino Soka Makmur', 'Kadisoko, Purwomartani Kalasan Sleman', '(0274) 74220', 6),
(336, 'Kelompok Mina Soka Mandiri', 'Kadisoko, Purwomartani Kalasan Sleman', '(02174)65507', 6),
(337, 'Kelompok Mina Perkasa', 'Randusari, Purwomartani Kalasan Sleman', '085292743331', 6),
(338, 'Kelompok Mino Rejo', 'Kadirojo, Purwomartani Kalasan Sleman', '(0274) 68418', 6),
(339, 'Kelompok Mina Ngaglik Jaya', 'Ngaglik, Cupuwatu, Purwomartani Kalasan Sleman', '081904250692', 6),
(340, 'Kelompok Mina Tunggal', 'Tundan, Purwomartani Kalasan Sleman', '25626', 6),
(341, 'Kelompok Mina Makmur', 'Brintikan, Tirtomartani Kalasan Sleman', '085643595141', 6),
(342, 'Kelompok Mino Rono Drono', 'Bendungan, Tirtomartani Kalasan Sleman', '087839610362', 6),
(343, 'Kelompok Mina Taruna Jaya', 'Bendan, Tirtomartani Kalasan Sleman', '081392627546', 6),
(344, 'Kelompok Mina Mitayani', 'Ngajek, Tirtomartani Kalasan Sleman', '081578061226', 6),
(345, 'Kelompok Mino Unggul', 'Tulung, Tamanmartani Kalasan Sleman', '081578753641', 6),
(346, 'Kelompok Mino Mukti', 'Cageran, Tamanmartani Kalasan Sleman', '081578702785', 6),
(347, 'Kelompok Mina Sejahtera', 'Pucung, Tamanmartani Kalasan Sleman', '08122796467', 6),
(348, 'Kelompok Mino Selosembodo', 'Kiyudan, Selomartani Kalasan Sleman', '0815984900', 6),
(349, 'Kelompok Mina Sejahtera', 'Jomblang, Selomartani Kalasan Sleman', '085799792914', 6),
(350, 'Kelompok Mina Jaya', 'Kaliwaru, Selomartani Kalasan Sleman', '081328703226', 6),
(351, 'Kelompok Mino Suromakarti', 'Surokerten, Selomartani Kalasan Sleman', '081578682228', 6),
(352, 'Kelompok Mina Rahayu', 'Ngrangsan, Selomartani Kalasan Sleman', '0817466047', 6),
(365, 'Kelompok Mino Makmur I', 'Butuhan, Sendangrejo Minggir Sleman', '081326849743', 7),
(366, 'Kelompok Mino Makmur Ii', 'Ngagul-Agulan, Sendangrejo Minggir Sleman', '08122783461', 7),
(367, 'Kelompok Mino Mulyo', 'Sidomulyo, Sendangrejo Minggir Sleman', '(0274) 74134', 7),
(368, 'Kelompok Mina Asri', 'Sidomulyo, Sendangrejo Minggir Sleman', '0817274057', 7),
(369, 'Kelompok Rukun Agawe Santoso', 'Jamur, Sendangrejo Minggir Sleman', '085228045394', 7),
(370, 'Kelompok Sendang Mino Lestari', 'Jamur, Sendangrejo Minggir Sleman', '081904017603', 7),
(371, 'Kelompok Sendang Rejeki', 'Padon, Sendangrejo Minggir Sleman', '(0274) 83886', 7),
(372, 'Kelompok Mina Sejahtera', 'Plaosan, Sendangrejo Minggir Sleman', '(0274)669134', 7),
(373, 'Kelompok Mino Lestari', 'Soronandan, Sendangrejo Minggir Sleman', '081328627078', 7),
(374, 'Kelompok Mino Tumangkar', 'Sawo, Sendangagung Minggir Sleman', '087839600386', 7),
(375, 'Kelompok Sari Agung', 'Bontitan, Sendangagung Minggir Sleman', '081328055111', 7),
(376, 'Kelompok Mina Karya', 'Kisik I, Sendangagung Minggir Sleman', '081328042928', 7),
(377, 'Kelompok Mino Agung', 'Minggir III, Sendangagung Minggir Sleman', '(0274) 74939', 7),
(378, 'Kelompok Tunas Manunggal', 'Brajan, Sendangagung Minggir Sleman', '081917775441', 7),
(379, 'Kelompok Mino Kumpar', 'Klepu Kidul, Sendangmulyo Minggir Sleman', '081328798670', 7),
(380, 'Kelompok Langgeng Mulyo', 'Krompakan, Sendangmulyo Minggir Sleman', '081226953943', 7),
(381, 'Kelompok Lestari', 'Kwarasan, Sendangmulyo Minggir Sleman', '081227021486', 7),
(382, 'Kelompok Tri Husada Warga', 'Kewayuhan, Sendangmulyo Minggir Sleman', '081328444598', 7),
(383, 'Kelompok Mina Lele', 'Jetis, Depok, Sendangsari Minggir Sleman', '085292470655', 7),
(384, 'Kelompok Sembada Mina Mandiri', 'Parakan Wetan, Sendangsari Minggir Sleman', '08128754253', 7),
(385, 'Kelompok Mino Makmur I', 'Butuhan, Sendangrejo Minggir Sleman', '081326849743', 7),
(386, 'Kelompok Mino Makmur Ii', 'Ngagul-Agulan, Sendangrejo Minggir Sleman', '08122783461', 7),
(387, 'Kelompok Mino Mulyo', 'Sidomulyo, Sendangrejo Minggir Sleman', '(0274) 74134', 7),
(388, 'Kelompok Mina Asri', 'Sidomulyo, Sendangrejo Minggir Sleman', '0817274057', 7),
(389, 'Kelompok Rukun Agawe Santoso', 'Jamur, Sendangrejo Minggir Sleman', '085228045394', 7),
(390, 'Kelompok Sendang Mino Lestari', 'Jamur, Sendangrejo Minggir Sleman', '081904017603', 7),
(391, 'Kelompok Sendang Rejeki', 'Padon, Sendangrejo Minggir Sleman', '(0274) 83886', 7),
(392, 'Kelompok Mina Sejahtera', 'Plaosan, Sendangrejo Minggir Sleman', '(0274)669134', 7),
(393, 'Kelompok Mino Lestari', 'Soronandan, Sendangrejo Minggir Sleman', '081328627078', 7),
(394, 'Kelompok Mino Tumangkar', 'Sawo, Sendangagung Minggir Sleman', '087839600386', 7),
(395, 'Kelompok Sari Agung', 'Bontitan, Sendangagung Minggir Sleman', '081328055111', 7),
(396, 'Kelompok Mina Karya', 'Kisik I, Sendangagung Minggir Sleman', '081328042928', 7),
(397, 'Kelompok Mino Agung', 'Minggir III, Sendangagung Minggir Sleman', '(0274) 74939', 7),
(398, 'Kelompok Tunas Manunggal', 'Brajan, Sendangagung Minggir Sleman', '081917775441', 7),
(399, 'Kelompok Mino Kumpar', 'Klepu Kidul, Sendangmulyo Minggir Sleman', '081328798670', 7),
(400, 'Kelompok Langgeng Mulyo', 'Krompakan, Sendangmulyo Minggir Sleman', '081226953943', 7),
(401, 'Kelompok Lestari', 'Kwarasan, Sendangmulyo Minggir Sleman', '081227021486', 7),
(402, 'Kelompok Tri Husada Warga', 'Kewayuhan, Sendangmulyo Minggir Sleman', '081328444598', 7),
(403, 'Kelompok Mina Lele', 'Jetis, Depok, Sendangsari Minggir Sleman', '085292470655', 7),
(404, 'Kelompok Sembada Mina Mandiri', 'Parakan Wetan, Sendangsari Minggir Sleman', '08128754253', 7),
(405, 'Kelompok Jetis', 'Jetis, Sinduadi Mlati Sleman', '081328783451', 8),
(406, 'Kelompok Mina Sindu Makmur', 'Patran, Sinduadi Mlati Sleman', '08122724881', 8),
(407, 'Kelompok Mina Karamba', 'Jombor Lor, Sinduadi Mlati Sleman', '08122742050', 8),
(408, 'Kelompok Mina Talok', 'Jongke Kidul, Sendangadi Mlati Sleman', '08180273760', 8),
(409, 'Kelompok Sumber Rejeki', 'Mulungan Wetan, Sendangadi Mlati Sleman', '567', 8),
(410, 'Kelompok Mina Adi Kencana', 'Mlati Dukuh, Sendangadi Mlati Sleman', '(0274)782114', 8),
(411, 'Kelompok Mina Kangkung Mandiri', 'Gedongan, Nglarang, Tlogoadi Mlati Sleman', '081392481444', 8),
(412, 'Kelompok Bolawen', 'Bolawen, Tlogoadi Mlati Sleman', '081578870207', 8),
(413, 'Kelompok Mina Mulya', 'Kalongan, Tlogoadi Mlati Sleman', '(0274) 74501', 8),
(414, 'Kelompok Mina Manunggal', 'Cebongan, Tlogoadi Mlati Sleman', '087839012260', 8),
(415, 'Kelompok Mina Sejahtera', 'Nambongan, Tlogoadi Mlati Sleman', '08121570399', 8),
(416, 'Kelompok Mina Manunggal Karya', 'Ketingan, Tirtoadi Mlati Sleman', '02748353598', 8),
(417, 'Kelompok Mina Tirta', 'Janturan, Tirtoadi Mlati Sleman', '(0274) 65655', 8),
(418, 'Kelompok Mina Tirta Mandiri', 'Jetis, Tirtoadi Mlati Sleman', '081328688643', 8),
(419, 'Kelompok Nogo Gini', 'Pundong I, Tirtoadi Mlati Sleman', '081802772833', 8),
(420, 'Kelompok Mina Karya', 'Gombang, Tirtoadi Mlati Sleman', '366', 8),
(421, 'Kelompok Mina Kebun', 'Danen, Sumberadi Mlati Sleman', '085643146943', 8),
(422, 'Kelompok Mina Kepis', 'Burikan, Sumberadi Mlati Sleman', '081329069356', 8),
(423, 'Kelompok Mina Sumber Rejeki', 'Konteng, Sumberadi Mlati Sleman', '081804200536', 8),
(424, 'Kelompok Mina Sompil', 'Gabahan VI, Sumberadi Mlati Sleman', '085868000031', 8),
(425, 'Kelompok Jetis', 'Jetis, Sinduadi Mlati Sleman', '081328783451', 8),
(426, 'Kelompok Mina Sindu Makmur', 'Patran, Sinduadi Mlati Sleman', '08122724881', 8),
(427, 'Kelompok Mina Karamba', 'Jombor Lor, Sinduadi Mlati Sleman', '08122742050', 8),
(428, 'Kelompok Mina Talok', 'Jongke Kidul, Sendangadi Mlati Sleman', '08180273760', 8),
(429, 'Kelompok Sumber Rejeki', 'Mulungan Wetan, Sendangadi Mlati Sleman', '567', 8),
(430, 'Kelompok Mina Adi Kencana', 'Mlati Dukuh, Sendangadi Mlati Sleman', '(0274)782114', 8),
(431, 'Kelompok Mina Kangkung Mandiri', 'Gedongan, Nglarang, Tlogoadi Mlati Sleman', '081392481444', 8),
(432, 'Kelompok Bolawen', 'Bolawen, Tlogoadi Mlati Sleman', '081578870207', 8),
(433, 'Kelompok Mina Mulya', 'Kalongan, Tlogoadi Mlati Sleman', '(0274) 74501', 8),
(434, 'Kelompok Mina Manunggal', 'Cebongan, Tlogoadi Mlati Sleman', '087839012260', 8),
(435, 'Kelompok Mina Sejahtera', 'Nambongan, Tlogoadi Mlati Sleman', '08121570399', 8),
(436, 'Kelompok Mina Manunggal Karya', 'Ketingan, Tirtoadi Mlati Sleman', '02748353598', 8),
(437, 'Kelompok Mina Tirta', 'Janturan, Tirtoadi Mlati Sleman', '(0274) 65655', 8),
(438, 'Kelompok Mina Tirta Mandiri', 'Jetis, Tirtoadi Mlati Sleman', '081328688643', 8),
(439, 'Kelompok Nogo Gini', 'Pundong I, Tirtoadi Mlati Sleman', '081802772833', 8),
(440, 'Kelompok Mina Karya', 'Gombang, Tirtoadi Mlati Sleman', '366', 8),
(441, 'Kelompok Mina Kebun', 'Danen, Sumberadi Mlati Sleman', '085643146943', 8),
(442, 'Kelompok Mina Kepis', 'Burikan, Sumberadi Mlati Sleman', '081329069356', 8),
(443, 'Kelompok Mina Sumber Rejeki', 'Konteng, Sumberadi Mlati Sleman', '081804200536', 8),
(444, 'Kelompok Mina Sompil', 'Gabahan VI, Sumberadi Mlati Sleman', '085868000031', 8),
(445, 'Kelompok Mina Sayur', 'Keboan, Ngentak, Sumberadi Mlati Sleman', '2425', 8),
(446, 'Kelompok Mina Ledok Warak', 'Warak Kidul , Sumberadi Mlati Sleman', '085878371288', 8),
(447, 'Kelompok Sumber Mina', 'Bedingin, Sumberadi Mlati Sleman', '081578066360', 8),
(448, 'Kelompok Mina Karya', 'Brengosan, Sumberadi Mlati Sleman', '356', 8),
(455, 'Kelompok Mina Sayur', 'Keboan, Ngentak, Sumberadi Mlati Sleman', '2425', 8),
(456, 'Kelompok Mina Ledok Warak', 'Warak Kidul , Sumberadi Mlati Sleman', '085878371288', 8),
(457, 'Kelompok Sumber Mina', 'Bedingin, Sumberadi Mlati Sleman', '081578066360', 8),
(458, 'Kelompok Mina Karya', 'Brengosan, Sumberadi Mlati Sleman', '356', 8),
(465, 'Kelompok Mina Jati Sumilir', 'Sejati Pasar, Sumberarum Moyudan Sleman', '081328755632', 9),
(466, 'Kelompok Mina Arum', 'Gejagan, Sumberarum Moyudan Sleman', '08121597993', 9),
(467, 'Kelompok Mina Maju', 'Malangan, Sumberagung Moyudan Sleman', '(0274) 78974', 9),
(468, 'Kelompok Mina Sakti', 'Jetis, Sumberagung Moyudan Sleman', '085100882839', 9),
(469, 'Kelompok Mina Segar', 'Kaliurang, Sumberagung Moyudan Sleman', '082138118787', 9),
(470, 'Kelompok Sumber Mina', 'Sumberan, Sumberagung Moyudan Sleman', '087838157124', 9),
(471, 'Kelompok Mina Sejahtera', 'Kedungbanteng, Sumberagung Moyudan Sleman', '085736393137', 9),
(472, 'Kelompok Mina Mulya', 'Kaliduren, Sumberagung Moyudan Sleman', '(0274) 82082', 9),
(473, 'Kelompok Mina Karya', 'Kaliduren I, Sumberagung Moyudan Sleman', '081328700716', 9),
(474, 'Kelompok Mina Rukun Santoso', 'Kaliduren , Sumberagung Moyudan Sleman', '081802797393', 9),
(475, 'Kelompok Mina Usaha', 'Kaliduren Ii, Sumberagung Moyudan Sleman', '0816685096', 9),
(476, 'Kelompok Mina Rukun', 'Jenggalan, Sumberagung Moyudan Sleman', '081328066215', 9),
(477, 'Kelompok Mina Langgeng Mulyo', 'Gedongan, Sumberagung Moyudan Sleman', '081328708320', 9),
(478, 'Kelompok Mina Kencana', 'Ponggok, Sumberagung Moyudan Sleman', '081578025945', 9),
(479, 'Kelompok Catur Mina', 'Malangan, Sumberagung Moyudan Sleman', '081328815354', 9),
(480, 'Kelompok Mina Rukun Manunggal', 'Tiwir, Sumbersari Moyudan Sleman', '0816677836', 9),
(481, 'Kelompok Taruna Mina Sari', 'Nasri, Sumbersari Moyudan Sleman', '(0274) 71551', 9),
(482, 'Kelompok Mina Berseri', 'Blendung VIII, Sumbersari Moyudan Sleman', '083867792081', 9),
(483, 'Kelompok Mina Karya Yudha', 'Moyudan, Sumberrahayu Moyudan Sleman', '081328288701', 9),
(484, 'Kelompok Mina Tani', 'Betakan, Sumberrahayu Moyudan Sleman', '08121577073', 9),
(485, 'Kelompok Mina Jati Sumilir', 'Sejati Pasar, Sumberarum Moyudan Sleman', '081328755632', 9),
(486, 'Kelompok Mina Arum', 'Gejagan, Sumberarum Moyudan Sleman', '08121597993', 9),
(487, 'Kelompok Mina Maju', 'Malangan, Sumberagung Moyudan Sleman', '(0274) 78974', 9),
(488, 'Kelompok Mina Sakti', 'Jetis, Sumberagung Moyudan Sleman', '085100882839', 9),
(489, 'Kelompok Mina Segar', 'Kaliurang, Sumberagung Moyudan Sleman', '082138118787', 9),
(490, 'Kelompok Sumber Mina', 'Sumberan, Sumberagung Moyudan Sleman', '087838157124', 9),
(491, 'Kelompok Mina Sejahtera', 'Kedungbanteng, Sumberagung Moyudan Sleman', '085736393137', 9),
(492, 'Kelompok Mina Mulya', 'Kaliduren, Sumberagung Moyudan Sleman', '(0274) 82082', 9),
(493, 'Kelompok Mina Karya', 'Kaliduren I, Sumberagung Moyudan Sleman', '081328700716', 9),
(494, 'Kelompok Mina Rukun Santoso', 'Kaliduren , Sumberagung Moyudan Sleman', '081802797393', 9),
(495, 'Kelompok Mina Usaha', 'Kaliduren Ii, Sumberagung Moyudan Sleman', '0816685096', 9),
(496, 'Kelompok Mina Rukun', 'Jenggalan, Sumberagung Moyudan Sleman', '081328066215', 9),
(497, 'Kelompok Mina Langgeng Mulyo', 'Gedongan, Sumberagung Moyudan Sleman', '081328708320', 9),
(498, 'Kelompok Mina Kencana', 'Ponggok, Sumberagung Moyudan Sleman', '081578025945', 9),
(499, 'Kelompok Catur Mina', 'Malangan, Sumberagung Moyudan Sleman', '081328815354', 9),
(500, 'Kelompok Mina Rukun Manunggal', 'Tiwir, Sumbersari Moyudan Sleman', '0816677836', 9),
(501, 'Kelompok Taruna Mina Sari', 'Nasri, Sumbersari Moyudan Sleman', '(0274) 71551', 9),
(502, 'Kelompok Mina Berseri', 'Blendung VIII, Sumbersari Moyudan Sleman', '083867792081', 9),
(503, 'Kelompok Mina Karya Yudha', 'Moyudan, Sumberrahayu Moyudan Sleman', '081328288701', 9),
(504, 'Kelompok Mina Tani', 'Betakan, Sumberrahayu Moyudan Sleman', '08121577073', 9),
(505, 'Kelompok Mina Baruna', 'Dagen, Sumberrahayu Moyudan Sleman', '081392462147', 9),
(506, 'Kelompok Mina Tirta Rahayu', 'Sangubanyu, Sumberrahayu Moyudan Sleman', '(0274) 65277', 9),
(508, 'Kelompok Mina Sari Rahayu', 'Sangubanyu, Sumberrahayu Moyudan Sleman', '081392549781', 9),
(510, 'Kelompok Mina Baruna', 'Dagen, Sumberrahayu Moyudan Sleman', '081392462147', 9),
(511, 'Kelompok Mina Tirta Rahayu', 'Sangubanyu, Sumberrahayu Moyudan Sleman', '(0274) 65277', 9),
(513, 'Kelompok Mina Sari Rahayu', 'Sangubanyu, Sumberrahayu Moyudan Sleman', '081392549781', 9),
(514, 'Kelompok ', ' Moyudan Sleman', '', 0),
(515, 'Kelompok Mina Insang Mas', 'Donolayan, Donoharjo Ngaglik Sleman', '087832496416', 10),
(516, 'Kelompok Mina Andini', 'Jetis Donolayan, Donoharjo Ngaglik Sleman', '08122965744', 9),
(517, 'Kelompok Mina Tirta', 'Bandolole, Sardonoharjo Ngaglik Sleman', '(0274) 67728', 10),
(518, 'Kelompok Mina Raharjo', 'Candi III, Sardonoharjo Ngaglik Sleman', '081802628085', 10),
(519, 'Kelompok Makmur Mulyo', 'Klumprit, Sardonoharjo Ngaglik Sleman', '085743355541', 10),
(520, 'Kelompok Mina Umbul Makmur', 'Lojajar, Sinduharjo Ngaglik Sleman', '244', 10),
(521, 'Kelompok Mina Gading Mas', 'Palgading, Sinduharjo Ngaglik Sleman', '085799350027', 10),
(522, 'Kelompok Mina Rengganis', 'Gondanglegi, Sariharjo Ngaglik Sleman', '081328828660', 10),
(535, 'Kelompok Mina Insang Mas', 'Donolayan, Donoharjo Ngaglik Sleman', '087832496416', 10),
(536, 'Kelompok Mina Andini', 'Jetis Donolayan, Donoharjo Ngaglik Sleman', '08122965744', 9),
(537, 'Kelompok Mina Tirta', 'Bandolole, Sardonoharjo Ngaglik Sleman', '(0274) 67728', 10),
(538, 'Kelompok Mina Raharjo', 'Candi III, Sardonoharjo Ngaglik Sleman', '081802628085', 10),
(539, 'Kelompok Makmur Mulyo', 'Klumprit, Sardonoharjo Ngaglik Sleman', '085743355541', 10),
(540, 'Kelompok Mina Umbul Makmur', 'Lojajar, Sinduharjo Ngaglik Sleman', '244', 10),
(541, 'Kelompok Mina Gading Mas', 'Palgading, Sinduharjo Ngaglik Sleman', '085799350027', 10),
(542, 'Kelompok Mina Rengganis', 'Gondanglegi, Sariharjo Ngaglik Sleman', '081328828660', 10),
(555, 'Kelompok Mina Guyub Rukun', 'Degolan, Umbulmartani Ngemplak Sleman', '085712355550', 11),
(556, 'Kelompok Mina Sari', 'Dongkelsari, Umbulmartani Ngemplak Sleman', '081804284580', 11),
(557, 'Kelompok Mina Arum', 'Kalisoro, Umbulmartani Ngemplak Sleman', '08157984394', 11),
(558, 'Kelompok Mina Mulya', 'Babadan, Wedomartani Ngemplak Sleman', '08122708719', 11),
(559, 'Kelompok Siwar Emas', 'Bakungan, Wedomartani Ngemplak Sleman', '085640232827', 11),
(560, 'Kelompok Mina Baru', 'Krapyak, Wedomartani Ngemplak Sleman', '081990594999', 11),
(561, 'Kelompok Mina Karya', 'Pucanganom, Wedomartani Ngemplak Sleman', '(0274) 65855', 11),
(562, 'Kelompok Mina Dadi Makmur', 'Krandon, Wedomartani Ngemplak Sleman', '081381441441', 11),
(563, 'Kelompok Mina Banyu Bening', 'Sawahan Lor, Wedomartani Ngemplak Sleman', '08122790130', 11),
(564, 'Kelompok Mina Arum', 'Karang, Widodomartani Ngemplak Sleman', '085743702482', 11),
(565, 'Kelompok Mino Kemasan', 'Kemasan, Widodomartani Ngemplak Sleman', '081578746122', 11),
(566, 'Kelompok Mina Tirta', 'Wonontoro, Widodomartani Ngemplak Sleman', '0817165053', 11),
(567, 'Kelompok Mina Waris', 'Blambangan, Widodomartani Ngemplak Sleman', '08799133378', 11),
(568, 'Kelompok Mina Usaha Muda', 'Kalijeruk II, Widodomartani Ngemplak Sleman', '085868180681', 11),
(569, 'Kelompok Prigen Makmur', 'Prigen, Widodomartani Ngemplak Sleman', '085868435749', 11),
(570, 'Kelompok Mino Minulyo', 'Ngalian, Widodomartani Ngemplak Sleman', '(0274) 70215', 11),
(571, 'Kelompok Mina Lestari', 'Kwadungan, Widodomartani Ngemplak Sleman', '085743063550', 11),
(572, 'Kelompok Mina Kencana', 'Koripan, Sindumartani Ngemplak Sleman', '081578128211', 11),
(573, 'Kelompok Mina Subur', 'Kejambon Kidul, Sindumartani Ngemplak Sleman', '08122714448', 11),
(574, 'Kelompok Mino Ngremboko', 'Bokesan, Sindumartani Ngemplak Sleman', '(0274) 74804', 11),
(575, 'Kelompok Mina Guyub Rukun', 'Degolan, Umbulmartani Ngemplak Sleman', '085712355550', 11),
(576, 'Kelompok Mina Sari', 'Dongkelsari, Umbulmartani Ngemplak Sleman', '081804284580', 11),
(577, 'Kelompok Mina Arum', 'Kalisoro, Umbulmartani Ngemplak Sleman', '08157984394', 11),
(578, 'Kelompok Mina Mulya', 'Babadan, Wedomartani Ngemplak Sleman', '08122708719', 11),
(579, 'Kelompok Siwar Emas', 'Bakungan, Wedomartani Ngemplak Sleman', '085640232827', 11),
(580, 'Kelompok Mina Baru', 'Krapyak, Wedomartani Ngemplak Sleman', '081990594999', 11),
(581, 'Kelompok Mina Karya', 'Pucanganom, Wedomartani Ngemplak Sleman', '(0274) 65855', 11),
(582, 'Kelompok Mina Dadi Makmur', 'Krandon, Wedomartani Ngemplak Sleman', '081381441441', 11),
(583, 'Kelompok Mina Banyu Bening', 'Sawahan Lor, Wedomartani Ngemplak Sleman', '08122790130', 11),
(584, 'Kelompok Mina Arum', 'Karang, Widodomartani Ngemplak Sleman', '085743702482', 11),
(585, 'Kelompok Mino Kemasan', 'Kemasan, Widodomartani Ngemplak Sleman', '081578746122', 11),
(586, 'Kelompok Mina Tirta', 'Wonontoro, Widodomartani Ngemplak Sleman', '0817165053', 11),
(587, 'Kelompok Mina Waris', 'Blambangan, Widodomartani Ngemplak Sleman', '08799133378', 11),
(588, 'Kelompok Mina Usaha Muda', 'Kalijeruk II, Widodomartani Ngemplak Sleman', '085868180681', 11),
(589, 'Kelompok Prigen Makmur', 'Prigen, Widodomartani Ngemplak Sleman', '085868435749', 11),
(590, 'Kelompok Mino Minulyo', 'Ngalian, Widodomartani Ngemplak Sleman', '(0274) 70215', 11),
(591, 'Kelompok Mina Lestari', 'Kwadungan, Widodomartani Ngemplak Sleman', '085743063550', 11),
(592, 'Kelompok Mina Kencana', 'Koripan, Sindumartani Ngemplak Sleman', '081578128211', 11),
(593, 'Kelompok Mina Subur', 'Kejambon Kidul, Sindumartani Ngemplak Sleman', '08122714448', 11),
(594, 'Kelompok Mino Ngremboko', 'Bokesan, Sindumartani Ngemplak Sleman', '(0274) 74804', 11),
(595, 'Kelompok Mina Santosa', 'Macanan, Bimomartani Ngemplak Sleman', '0812700282', 11),
(596, 'Kelompok Mina Pondok Mas', 'Pondok Dawung, Bimomartani Ngemplak Sleman', '08156803633', 11),
(597, 'Kelompok Cakra Mina Maju', 'Cokrogaten, Bimomartani Ngemplak Sleman', '085729512697', 11),
(598, 'Kelompok Mina Raharja', 'Banjarharjo, Bimomartani Ngemplak Sleman', '081324018831', 11),
(599, 'Kelompok Mina Bimo Sembodo', 'Krebet, Bimomartani Ngemplak Sleman', '08157940152', 11),
(600, 'Kelompok Mina Rukun Damai', 'Pakemgede, Pakembinangun Pakem Sleman', '083869503085', 12),
(601, 'Kelompok Mina Muda', 'Pakem Tegal, Pakembinangun Pakem Sleman', '08122740925', 12),
(602, 'Kelompok Sido Maju', 'Sempu, Pakembinangun Pakem Sleman', '087700303321', 12),
(603, 'Kelompok Mina Sari Mulya', 'Paraksari, Pakembinangun Pakem Sleman', '085640151035', 12),
(604, 'Kelompok Mina Raharja', 'Karanggeneng, Purwobinangun Pakem Sleman', '081586648834', 12),
(605, 'Kelompok Mina Lestari', 'Sembung, Purwobinangun Pakem Sleman', '087838270224', 12),
(606, 'Kelompok Mina Ledok Boyong', 'Glondong, Purwobinangun Pakem Sleman', '(0274) 26617', 12),
(607, 'Kelompok Mina Karya', 'Tawangrejo, Purwobinangun Pakem Sleman', '081328157007', 12),
(608, 'Kelompok Mina Muda Sambirembe', 'Sambirembe, Candibinangun Pakem Sleman', '087738314678', 12),
(609, 'Kelompok Mina Ngrembaka', 'Magersari, Candibinangun Pakem Sleman', '08122780601', 12),
(610, 'Kelompok Mina Mandiri', 'Pelem, Candibinangun Pakem Sleman', '087738510825', 12),
(611, 'Kelompok Mina Ngelo Sembada', 'Ngelo, Harjobinangun Pakem Sleman', '081385498790', 12),
(612, 'Kelompok Mina Manunggal', 'Klarangan, Harjobinangun Pakem Sleman', '085292943106', 12),
(613, 'Kelompok Mina Sejahtera', 'Sempol, Harjobinangun Pakem Sleman', '085729760170', 12),
(614, 'Kelompok Mina Merapi', 'Kaliwanglu Kulon, Harjobinangun Pakem Sleman', '081999028866', 12),
(620, 'Kelompok Mina Rukun Damai', 'Pakemgede, Pakembinangun Pakem Sleman', '083869503085', 12),
(621, 'Kelompok Mina Muda', 'Pakem Tegal, Pakembinangun Pakem Sleman', '08122740925', 12),
(622, 'Kelompok Sido Maju', 'Sempu, Pakembinangun Pakem Sleman', '087700303321', 12),
(623, 'Kelompok Mina Sari Mulya', 'Paraksari, Pakembinangun Pakem Sleman', '085640151035', 12),
(624, 'Kelompok Mina Raharja', 'Karanggeneng, Purwobinangun Pakem Sleman', '081586648834', 12),
(625, 'Kelompok Mina Lestari', 'Sembung, Purwobinangun Pakem Sleman', '087838270224', 12),
(626, 'Kelompok Mina Ledok Boyong', 'Glondong, Purwobinangun Pakem Sleman', '(0274) 26617', 12),
(627, 'Kelompok Mina Karya', 'Tawangrejo, Purwobinangun Pakem Sleman', '081328157007', 12),
(628, 'Kelompok Mina Muda Sambirembe', 'Sambirembe, Candibinangun Pakem Sleman', '087738314678', 12),
(629, 'Kelompok Mina Ngrembaka', 'Magersari, Candibinangun Pakem Sleman', '08122780601', 12),
(630, 'Kelompok Mina Mandiri', 'Pelem, Candibinangun Pakem Sleman', '087738510825', 12),
(631, 'Kelompok Mina Ngelo Sembada', 'Ngelo, Harjobinangun Pakem Sleman', '081385498790', 12),
(632, 'Kelompok Mina Manunggal', 'Klarangan, Harjobinangun Pakem Sleman', '085292943106', 12),
(633, 'Kelompok Mina Sejahtera', 'Sempol, Harjobinangun Pakem Sleman', '085729760170', 12),
(634, 'Kelompok Mina Merapi', 'Kaliwanglu Kulon, Harjobinangun Pakem Sleman', '081999028866', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_panen`
--

CREATE TABLE IF NOT EXISTS `hasil_panen` (
  `kecamatan` varchar(120) NOT NULL,
  `lele` text NOT NULL,
  `gurami` text NOT NULL,
  `nila` text NOT NULL,
  `grasscarp` text NOT NULL,
  `karper` text NOT NULL,
  `tawes` text NOT NULL,
  `bawal` text NOT NULL,
  `lain_lain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_panen`
--

INSERT INTO `hasil_panen` (`kecamatan`, `lele`, `gurami`, `nila`, `grasscarp`, `karper`, `tawes`, `bawal`, `lain_lain`) VALUES
('Gamping', '3.986.140', '788.760 ', '117.880', '0', '0', '0', '', ''),
('Godean', '2.800.250', '1.565.440', '495.200', '0', '0', '0', '', ''),
('Moyudan', '8.2.280 ', '353.670', '334.830', '0', '0', '0', '', ''),
('Minggir   ', '27 15.005', '1.393.010', '1.764.100', '0', '0', '0', '', ''),
('Seyegan', '235.780', '235.770', '97.793.820', '70.800', '0', '70.000', '', ''),
('Mlati', '11 50.500', '235.780', '235.770', '97.793.820', '3.225.050', '70.800', '', ''),
('Depok', '6.219.130', '654.180', '24.965.490', '0', '1.709.360', '0', '0', '0'),
('Berbah', '34.796.580', '7.005.010', '6.981.720', '0', '3.660.620', '464.230', '3.124.380', '1.509.890'),
('Prambanan', '5.420.000', '1.336.910', '200.310', '0', '0', '0', '0', '0'),
('Kalasan', '73.805.900', '1.432.450', '8.536.140', '7.536.940', '3.477.950', '0', '2.493.400', '0'),
('Ngemplak', '249.686.150', '5.320.850', '327.538.090', '6.282.015', '1.692.050', '0', '3.672.730', '0'),
('Ngaglik', '22.887.230', '106.160', '0', '0', '0', '0', '0', '0'),
('Sleman', '5.467.600', '0', '2.617.390', '0', '105.760', '0', '0', '0'),
('Tempel', '1.106.870', '167.380', '2.143.360', '11.730', '4.080', '58.840', '0', '6.220'),
('Turi', '825.330', '11.870', '8.017.380', '0', '0', '0', '0', '0'),
('Pakem', '8.253.170', '0', '9.255.270', '0', '2.108.930', '0', '0', '0'),
('Cangkringan', '12.208.490', '259.410', '7.074.130', '1.002.185', '1.040.420', '0', '0', '0'),
('Cangkringan', '12.208.490', '259.410', '7.074.130', '1.002.185', '1.040.420', '0', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE IF NOT EXISTS `kecamatan` (
`id_kecamatan` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL,
  `long` varchar(120) NOT NULL,
  `lat` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `nama`, `long`, `lat`) VALUES
(1, 'Kecamatan Berbah', '110.438125', '-7.802726'),
(2, 'Kecamatan Cangkringan', '110.456001', '-7.632309'),
(3, 'Kecamatan Depok', '110.394702', '-7.758690'),
(4, 'Kecamatan Gamping', '110.324924', '-7.792943'),
(5, 'Kecamatan Godean', '110.301094', '-7.773542'),
(6, 'Kecamatan Kalasan', '110.469498', '-7.757892'),
(7, 'Kecamatan Minggir', '110.247479', '-7.729886'),
(8, 'kecamatan Mlati', '110.335403', '-7.716165'),
(9, 'Kecamatan Moyudan', '110.247479', '-7.771050'),
(10, 'Kecamatan Ngaglik', '110.396418', '-7.717399'),
(11, 'Kecamatan Ngemplak', '110.456001', '-7.704174'),
(12, 'Kecamatan Pakem', '110.414292', '-7.639487'),
(13, 'Kecamatan Prambanan', '110.509628', '-7.799136'),
(14, 'Kecamatan Seyegan', '110.301094', '-7.722105'),
(15, 'Kecamatan Sleman', '110.335403', '-7.716165'),
(16, 'Kecamatan Tempel', '110.318966', '-7.664695'),
(17, 'Kecamatan Turi', '110.384502', '-7.625549');

-- --------------------------------------------------------

--
-- Table structure for table `komoditas`
--

CREATE TABLE IF NOT EXISTS `komoditas` (
`id_komoditas` int(11) NOT NULL,
  `nama` varchar(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komoditas`
--

INSERT INTO `komoditas` (`id_komoditas`, `nama`) VALUES
(1, 'lele'),
(2, 'gurami'),
(3, 'nila'),
(4, 'grasscarp'),
(5, 'karper'),
(6, 'tawes'),
(7, 'bawal'),
(8, 'dan_lain_lain'),
(9, 'cobadulu'),
(10, 'lele bakar');

-- --------------------------------------------------------

--
-- Table structure for table `subkomoditas`
--

CREATE TABLE IF NOT EXISTS `subkomoditas` (
`id_subkomoditas` int(11) NOT NULL,
  `id_datakelompok` int(11) NOT NULL,
  `id_komoditas` int(11) NOT NULL,
  `hasil_panen` int(120) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subkomoditas`
--

INSERT INTO `subkomoditas` (`id_subkomoditas`, `id_datakelompok`, `id_komoditas`, `hasil_panen`) VALUES
(5, 2, 3, 5670000),
(6, 2, 6, 456000),
(10, 638, 7, 0),
(11, 638, 9, 0),
(12, 638, 8, 0),
(13, 638, 2, 0),
(14, 640, 9, 0),
(15, 640, 8, 0),
(16, 640, 2, 0),
(17, 640, 3, 0),
(24, 641, 7, 1202),
(25, 641, 9, 1234),
(26, 641, 8, 1203),
(30, 634, 7, 7800890),
(31, 634, 4, 567000),
(32, 634, 1, 53000),
(33, 633, 2, 3000),
(34, 633, 3, 6500),
(35, 632, 7, 3500),
(36, 632, 3, 8500),
(38, 630, 1, 4000),
(39, 630, 3, 4700),
(40, 631, 3, 12450),
(41, 629, 7, 5400),
(42, 629, 4, 4300),
(43, 629, 3, 6300),
(44, 625, 4, 8300),
(45, 625, 3, 5000),
(46, 626, 7, 5000),
(47, 626, 4, 7600),
(48, 626, 3, 4600),
(49, 627, 1, 3700),
(50, 627, 3, 8700),
(51, 628, 7, 3750),
(52, 628, 1, 24000),
(53, 628, 3, 23000),
(54, 610, 1, 8700),
(55, 610, 3, 6400),
(56, 611, 3, 12450),
(57, 612, 7, 3500),
(58, 612, 3, 8500),
(59, 613, 2, 6500),
(60, 613, 3, 3000),
(61, 614, 3, 4500),
(62, 620, 4, 2800),
(63, 620, 3, 5200),
(67, 621, 7, 2400),
(68, 621, 1, 4000),
(69, 621, 3, 7300),
(70, 622, 7, 7400),
(71, 622, 2, 6000),
(72, 622, 3, 14700),
(73, 623, 1, 18700),
(74, 623, 3, 4000),
(75, 624, 7, 38200),
(76, 624, 3, 9500),
(77, 600, 4, 2800),
(78, 600, 3, 5200),
(79, 601, 7, 2400),
(80, 601, 1, 3800),
(81, 601, 3, 2300),
(82, 602, 7, 6000),
(83, 602, 2, 4300),
(84, 602, 3, 14700),
(85, 603, 1, 18700),
(86, 603, 3, 5000),
(87, 604, 7, 9500),
(88, 604, 3, 38200),
(89, 605, 4, 6000),
(90, 605, 3, 13300),
(91, 606, 7, 2300),
(92, 606, 4, 5000),
(93, 606, 3, 13300),
(94, 607, 1, 4600),
(95, 607, 3, 8700),
(96, 608, 7, 25000),
(97, 608, 1, 24000),
(98, 608, 3, 3750),
(99, 599, 2, 2100),
(100, 599, 1, 7250),
(101, 598, 7, 20000),
(102, 598, 1, 78300),
(103, 598, 3, 23000),
(104, 597, 7, 54440),
(105, 597, 3, 3710),
(106, 596, 3, 6950),
(107, 595, 2, 6000),
(108, 595, 1, 89900),
(109, 595, 3, 27360),
(110, 594, 1, 771220),
(111, 594, 3, 689400),
(112, 593, 2, 34000),
(113, 593, 1, 42000),
(114, 593, 3, 36000),
(115, 592, 3, 30120),
(116, 591, 2, 34000),
(117, 591, 1, 86660),
(118, 591, 3, 76730);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT 'user',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `level`, `id_session`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '3jt2fpemfo2p7qjblcf2plfrf1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_datakelompok`
--
ALTER TABLE `db_datakelompok`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
 ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `komoditas`
--
ALTER TABLE `komoditas`
 ADD PRIMARY KEY (`id_komoditas`);

--
-- Indexes for table `subkomoditas`
--
ALTER TABLE `subkomoditas`
 ADD PRIMARY KEY (`id_subkomoditas`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_datakelompok`
--
ALTER TABLE `db_datakelompok`
MODIFY `id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=635;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `komoditas`
--
ALTER TABLE `komoditas`
MODIFY `id_komoditas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `subkomoditas`
--
ALTER TABLE `subkomoditas`
MODIFY `id_subkomoditas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=119;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
