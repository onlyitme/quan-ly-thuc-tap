-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 06, 2020 lúc 05:17 PM
-- Phiên bản máy phục vụ: 10.4.16-MariaDB
-- Phiên bản PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `du_an_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanh_nghiep`
--

CREATE TABLE `doanh_nghiep` (
  `id_dn` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `ten_dn` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `toa_do` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'lat và lng cách nhau bởi dấu ,',
  `masothue` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `sdt` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ban` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_cap_nhap` date DEFAULT NULL,
  `an_hien` tinyint(1) DEFAULT 1,
  `stt` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanh_nghiep`
--

INSERT INTO `doanh_nghiep` (`id_dn`, `id_user`, `ten_dn`, `banner`, `anh`, `dia_chi`, `toa_do`, `masothue`, `fax`, `sdt`, `sdt_ban`, `facebook`, `website`, `ngay_cap_nhap`, `an_hien`, `stt`) VALUES
(13, 49, 'Công ty cổ phần - Tập đoàn thời trang Thái Tuấn', 'banner-dn/banner-dn1.jpg', 'logo-dn/logo-dn1.jpg', '1/148 Nguyễn Văn Quá, Phường Đông Hưng Thuận, Quận 12', '', 0, 0, '028 3952 47', '028.777.779', '', 'https://www.thaituanfashion.com/', '2020-12-13', 1, 0),
(14, 44, 'Công ty thiết kế web Vinalink', 'banner-dn/banner-dn2.jpg', 'logo-dn/logo-dn2.jpg', 'Số 85 Vương Thừa Vũ - Thanh Xuân - Hà Nội.', '', 0, 0, '0439726746', '0138212345', '', 'https://www.youtube.com/', NULL, 0, 0),
(15, 51, 'Công ty thiết kế web Sapo', 'banner-dn/banner-dn3.jpg', 'logo-dn/logo-dn3.jpg', 'Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn - Phường Liễu Gia - Quận Ba Đình - Tp Hà Nội.', '', 0, 0, '1800 6750', '0138212345', '', '', NULL, 0, 0),
(16, 52, 'Công ty thiết kế web 123Crop - Thiết kế web uy tín', 'banner-dn/banner-dn4.jpg', 'logo-dn/logo-dn4.jpg', 'Số 60 Nguyễn Đình Chiểu, phường Ka Đao, quận 1, thành phố Hồ Chí Minh', '', 0, 0, '(08) 38.121', '028.777.779', '', 'www.thietkeweb9999.com', '2020-12-16', 1, 0),
(17, 53, 'Công ty thiết kế website Haravan', 'banner-dn/banner-dn5.jpg', 'logo-dn/logo-dn5.jpg', 'Tầng 1, Tòa nhà GP Invest, 170 Đê La Thành, Ô Chợ Dừa, Đống Đa, Hà Nội.', '', 0, 0, '1900.2297', '0138212345', '', '', NULL, 0, 0),
(18, 54, 'Công ty TNHH Amway Việt Nam', 'banner-dn/banner-dn6.jpg', 'logo-dn/logo-dn6.jpg', 'Số 18 VSIP II-A, Đường số 30,Khu Công nghiệp Việt Nam–Singapore II-A, Phường Vĩnh Tân, Thị xã Tân Uy', '', 0, 0, '1800 1700', '028.777.779', '', 'https://www.amway.com.vn/', '2020-12-17', 1, 0),
(19, 55, 'Công ty TNHH Unicity Việt Nam', 'banner-dn/banner-dn7.jpg', 'logo-dn/logo-dn7.jpg', 'Số 141 đường Cộng Hòa, P. 12, Q. Tân Bình, TP.HCM', '', 0, 0, '08 7300 541', '028.777.779', '', 'https://www.unicity.com/vnm/', NULL, 1, 0),
(20, 56, 'Công Ty TNHH Nu Skin Enterprises Việt Nam', 'banner-dn/banner-dn8.jpg', 'logo-dn/logo-dn8.jpg', 'Tầng 2, tòa nhà Terra Royal Tower - 280 Nam Kỳ Khởi Nghĩa,Phường 8, Quận 3, Tp. Hồ Chí Minh', '', 0, 0, '028 3932 43', '028.777.779', '', 'www.nuskin.com', NULL, 1, 0),
(21, 57, 'Công ty TNHH một thành viên Herbalife Việt Nam', 'banner-dn/banner-dn9.jpg', 'logo-dn/logo-dn9.jpg', '26 Trần Cao Vân, P. 6, Q. 3, TP.HCM', '', 0, 0, '028 3827 91', '028.777.779', '', 'dichvuthanhvien@herbalife.com', '2020-12-21', 1, 0),
(22, 58, 'Công ty TNHH Saigontourist', 'banner-dn/banner-dn10.jpg', 'logo-dn/logo-dn10.jpg', '45 Lê Thánh Tôn, Phường Bến Nghé, Q.1, TP.HCM.', '', 0, 0, '08 7300 541', '028.777.779', '', 'https://www.saigontourist.net/', '2020-12-22', 1, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  ADD PRIMARY KEY (`id_dn`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
