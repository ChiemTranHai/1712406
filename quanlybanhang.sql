-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--
-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `MSHH` int(11) NOT NULL,
  `TenHH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Gia` int(11) NOT NULL,
  `SoLuongHang` int(11) NOT NULL,
  `MaNhom` int(11) NOT NULL,
  `MoTaHH` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`MSHH`, `TenHH`, `Gia`, `SoLuongHang`, `MaNhom`, `MoTaHH`) VALUES
(1, 'Full Armor Gundam', 1500000, 100, 3, ''),
(2, 'Sword Impluse Gundam', 1050000, 100, 3, 'BanDai'),
(3, '00 Raiser', 5500000, 100, 2, 'BanDai'),
(4, '00 q[T] Full Saber', 1500000, 100, 3, 'BanDai\r\n'),
(5, 'Dynames Gundam', 1050000, 100, 3, '<p>BanDai</p>\r\n'),
(6, 'Age II MAGNUM', 1300000, 100, 3, '<p>BanDai 2019</p>\r\n'),
(7, 'ZZ ver.Ka', 1500000, 100, 3, '<p>BanDai</p>\r\n'),
(8, 'Astray Blue Frame', 2500000, 10, 1, '<p>BanDai</p>\r\n'),
(9, 'Astray Red Frame Kai', 9500000, 5, 1, '<p>BanDai</p>\r\n'),
(10, 'Gundam Astraea Type F', 9500000, 15, 1, '<p>BanDai</p>\r\n'),
(11, '00 Raiser Blue Ver', 6500000, 7, 1, '<p>BanDai</p>\r\n'),
(12, 'Destiny Gundam', 10000000, 10, 1, '<p>BanDai</p>\r\n'),
(13, 'SF Gundam Soul Blue ', 12000000, 5, 1, '<p>BanDai</p>\r\n'),
(14, 'Unicorn 03 Phenex', 12500000, 15, 2, '<p>P-BanDai</p>\r\n'),
(15, 'Gundam GP01/Fb', 4500000, 20, 2, '<p>BanDai</p>\r\n'),
(16, 'MK II Titans', 3300000, 30, 2, '<p>BanDai</p>\r\n'),
(17, 'Zeta', 4000000, 50, 2, '<p>BanDai</p>\r\n'),
(18, 'Sazabi', 990000, 50, 4, '<p>BanDai</p>\r\n'),
(19, 'Build Strike Gundam', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(20, 'Justice Gundam', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(21, 'RX-78 Gundam', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(22, 'Sky Grasper', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(23, 'Astray Gold Frame A.Mina', 6500000, 50, 4, '<p>BanDai</p>\r\n'),
(24, 'Wing Zero Gundam EW', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(25, 'Alie Strike Gundam', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(26, 'Zaku II', 520000, 100, 4, '<p>BanDai</p>\r\n'),
(27, 'Zeta Gundam', 6500000, 100, 4, '<p>BanDai</p>\r\n'),
(28, 'Johnny\'s Zaku II', 650000, 100, 4, 'BanDai'),
(29, 'Unicorn Gundam', 820000, 50, 4, '<p>BanDai</p>\r\n'),
(30, 'Sinanju', 850000, 50, 4, '<p>BanDai</p>\r\n'),
(31, 'F91 Gundam', 280000, 100, 5, '<p>BanDai</p>\r\n'),
(32, 'Unicorn Gundam Perfectebility', 1500000, 5, 5, '<p>BanDai The Gundam Base Limited</p>\r\n'),
(33, 'Mobile Doll Sarah', 530000, 100, 7, '<p>BanDai - Gundam Build Diver</p>\r\n'),
(34, 'Moon Gundam', 680000, 100, 5, '<p>BanDai</p>\r\n'),
(35, 'Try Burning Gundam', 420000, 100, 5, '<p>BanDai</p>\r\n'),
(36, 'Build Burning Gundam', 360000, 100, 5, '<p>BanDai</p>\r\n'),
(37, 'Perfect Strike Gundam', 3000000, 15, 3, '<p>P-BanDai Special Coating</p>\r\n'),
(38, 'Super Fumina A.Angel', 4500000, 100, 7, '<p>BanDai - Gundam Build Try Fighter</p>\r\n'),
(39, 'God Gundam', 420000, 50, 5, '<p>BanDai</p>\r\n'),
(40, 'Scramble Gundam', 420000, 50, 5, '<p>BanDai</p>\r\n'),
(41, 'Diver Name', 500000, 50, 7, '<p>BanDai - Gundam Build Diver</p>\r\n'),
(42, 'Great Mazinger', 900000, 100, 7, '<p>BanDai - Mazinger Z Infinity</p>\r\n'),
(43, 'ARX-8 Laevatein', 800000, 100, 7, '<p>BanDai - Full Metal Panic</p>\r\n'),
(44, 'Barbatos Dragon King', 2300000, 10, 6, ''),
(45, 'Heavy Arm', 900000, 10, 6, '<p>Super Nova&nbsp;</p>\r\n'),
(46, 'Nataku Blue', 680000, 10, 6, '<p>Super Nova</p>\r\n'),
(47, 'Gaia 203', 70000, 100, 8, '<p>Red Brown</p>\r\n'),
(48, 'Gaia Ar-01', 150000, 200, 8, '<p>Blue Steel</p>\r\n'),
(49, 'Gaia Ar-02', 1500000, 200, 8, ''),
(50, 'VLJ Mecha ', 70000, 200, 8, '<p>Matt Varnish</p>\r\n'),
(51, 'Thước đo điện tử', 195000, 100, 9, ''),
(52, 'DSPIAR ST-A', 800000, 100, 9, '<p>Single Blade Nipper</p>\r\n'),
(53, 'Khoan tay bạc nhỏ', 120000, 100, 9, ''),
(54, 'Lưỡi OLFA nhỏ', 120000, 100, 9, ''),
(55, 'Tamiya Cement', 120000, 100, 9, '<p>White</p>\r\n'),
(56, 'Cây kẻ lằn chìm', 120000, 100, 9, '<p>Nine Sea</p>\r\n'),
(57, 'Giấy nhám Tamiya', 65000, 200, 9, '<p>P1500</p>\r\n'),
(58, 'Kềm Godhand', 1400000, 100, 9, '<p>SPN-120</p>\r\n'),
(59, 'Base Stand Campaign', 40000, 100, 10, '<p>Base HG</p>\r\n'),
(60, 'Base Clear 05 1/144', 150000, 100, 10, '<p>BanDai</p>\r\n'),
(61, 'Đại kiếm Astray Red', 480000, 50, 10, '<p>PG M3</p>\r\n'),
(62, 'Build Weapon', 150000, 10, 10, '<p>Transient</p>\r\n'),
(63, 'Chốt Metal', 60000, 100, 10, ''),
(64, 'Súng sơn HD-130', 4500000, 10, 10, ''),
(65, 'Máy bơm', 2000000, 100, 10, '<p>HSENG AS186</p>\r\n'),
(66, 'Hulk Buster', 28500000, 5, 7, '<p>HOTTOY 1/6</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hinhanh`

CREATE TABLE `hinhanh` (
  `hinh_ID` int(11) NOT NULL,
  `hsp_tentaptin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MSHH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hinhanh`
--

INSERT INTO `hinhanh` (`hinh_ID`, `hsp_tentaptin`, `MSHH`) VALUES
(2, 'MG_Sword_Impluse.png', 2),
(4, 'MG_FA_Gundam_verKa.jpg', 1),
(5, 'PG_00_Raiser.jpg', 3),
(6, 'MG_00_q[T]_Full_Saber.jpg', 4),
(7, 'MG_Dynames.jpg', 5),
(8, 'MG_Age2_Mag_verKa.jpg', 6),
(9, 'MG_ZZ_verKa.jpg', 7),
(10, 'Astray_Blue_Frame.jpg', 8),
(11, 'Astray_Red_Frame_Kai.jpg', 9),
(12, 'Gundam_Astraea_Type_F.jpg', 10),
(13, '00_Raiser_Soul_Blue.jpg', 11),
(14, 'Destiny_MB_BD.jpg', 12),
(15, 'SF_Blue_MB_BD.jpg', 13),
(16, 'phenex_PG.jpg', 14),
(17, 'Gundam_GP01_Fb.jpg', 15),
(19, 'zeta_pg.png', 17),
(20, 'sazabi_RG.jpg', 18),
(21, 'build_strike_RG.jpg', 19),
(22, 'mkii_pg.jpg', 16),
(23, 'MK_II_PG.JPG', 16),
(24, 'justice_rg.jpg', 20),
(25, 'RX78_RG.jpg', 21),
(26, 'SkyGrasper_RG.jpg', 22),
(27, 'gold_frame_amatsu_RG.jpg', 23),
(28, 'WingZeroEW.jpg', 24),
(29, 'AlieStrike.jpg', 25),
(30, 'Zaku_II.jpg', 26),
(31, 'zeta_RG.jpg', 27),
(32, 'zeta_rg_pose.png', 27),
(33, 'johnnyRiddenzaku_rg.jpg', 28),
(34, 'unicorn_RG.jpg', 29),
(35, 'sinanju_RG.jpg', 30),
(36, 'F91_hg.jpg', 31),
(37, 'unicorn_perfectibility_hg.jpg', 32),
(38, 'unicorn_perfectibility_hg_pose.jpg', 32),
(39, 'sarah.png', 33),
(40, 'moongundam.jpg', 34),
(41, 'tryburning_hg.jpg', 35),
(42, 'buidburning_hg.jpg', 36),
(43, 'perfectstrike_P_MG.jpg', 37),
(44, 'superfumina_axis.jpg', 38),
(45, 'godgundam_hg.jpg', 39),
(46, 'scramble_hg.jpg', 40),
(47, 'nami_hg.jpg', 41),
(48, 'greatMazinger.jpg', 42),
(49, 'arx_8.jpg', 43),
(50, 'Barbatos_DK_CN.jpg', 44),
(51, 'heavyarrm_supernova.jpg', 45),
(52, 'nataku_blue_supernova.jpg', 46),
(53, 'gaia_203_red_brown.jpg', 47),
(54, 'Gaia_ar_01_blue_steel.jpg', 48),
(55, 'Gaia_ar_02.jpg', 49),
(56, 'vlj_mech_varnish.jpg', 50),
(57, 'thuocdodientu.jpg', 51),
(58, 'dspiae_single_blade.jpg', 52),
(59, 'khoantaybacnho.jpg', 53),
(60, 'luoi_olfa_nho.jpg', 54),
(61, 'tamiya_cement_white.jpg', 55),
(62, 'caykelanchim_nine_sea.jpg', 56),
(63, 'giaytamiya_1500.jpg', 57),
(64, 'kem_godhand.jpg', 58),
(65, 'base_HG_expo.jpg', 59),
(66, 'base_clear_1_144_05.jpg', 60),
(67, 'PG_Weapong_astray_red.jpg', 61),
(68, 'build_weapon_china.jpg', 62),
(69, 'chot_metal.jpg', 63),
(70, 'sungson_hd130.jpg', 64),
(71, 'may_bom.jpg', 65),
(72, 'hulk_buster.jpg', 66);


-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhomhanghoa`
--

CREATE TABLE `nhomhanghoa` (
  `MaNhom` int(11) NOT NULL,
  `TenNhom` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MoTa` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhomhanghoa`
--

INSERT INTO `nhomhanghoa` (`MaNhom`, `TenNhom`, `MoTa`) VALUES
(1, 'Metal Build', ''),
(2, 'PG 1/60', ''),
(3, 'MG 1/100', ''),
(4, 'RG 1/144', ''),
(5, 'HG 1/144', ''),
(6, 'China', ''),
(7, 'KIT KHÁC', ''),
(8, 'SƠN', ''),
(9, 'TOOL', ''),
(10, 'PHỤ KIỆN', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`MSHH`),
  ADD KEY `MaNhom` (`MaNhom`);

--
-- Chỉ mục cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  ADD PRIMARY KEY (`hinh_ID`),
  ADD KEY `MSHH` (`MSHH`);

--
-- Chỉ mục cho bảng `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  ADD PRIMARY KEY (`MaNhom`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `MSHH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT cho bảng `hinhanh`
--
ALTER TABLE `hinhanh`
  MODIFY `hinh_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `nhomhanghoa`
--
ALTER TABLE `nhomhanghoa`
  MODIFY `MaNhom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

ALTER TABLE `hanghoa`
  ADD CONSTRAINT `hanghoa_ibfk_1` FOREIGN KEY (`MaNhom`) REFERENCES `nhomhanghoa` (`MaNhom`);

ALTER TABLE `hinhanh`
  ADD CONSTRAINT `hinhanh_ibfk_1` FOREIGN KEY (`MSHH`) REFERENCES `hanghoa` (`MSHH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
