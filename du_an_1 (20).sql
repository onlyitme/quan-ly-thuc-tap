-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 11, 2020 lúc 01:50 PM
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
-- Cấu trúc bảng cho bảng `ho_so_sv`
--

CREATE TABLE `ho_so_sv` (
  `id_ho_so` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `tieu_de` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinh_do` tinyint(1) DEFAULT NULL,
  `noi_lam_viec` tinyint(1) DEFAULT 0,
  `muc_tieu_nghe_nghiep` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ky_nang_so_truong` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `so_thich` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ky_nang_dac_biet` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `word` tinyint(1) DEFAULT 1,
  `excel` tinyint(1) DEFAULT 1,
  `power_point` tinyint(1) DEFAULT 1,
  `outlook` tinyint(1) DEFAULT 1,
  `ung_dung_khac` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `av_nghe` tinyint(1) DEFAULT 1,
  `av_noi` tinyint(1) DEFAULT 1,
  `av_doc` tinyint(1) DEFAULT 1,
  `av_viet` tinyint(1) DEFAULT 1 COMMENT '0 : chưa cập nhập \r\n1 kém\r\n2 trung binh\r\n3 khá\r\n4 tốt \r\náp dụng mọi dữ liệu tinyint',
  `ngon_ngu_khac` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_cap_nhap` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ho_so_sv`
--

INSERT INTO `ho_so_sv` (`id_ho_so`, `id_sv`, `tieu_de`, `trinh_do`, `noi_lam_viec`, `muc_tieu_nghe_nghiep`, `ky_nang_so_truong`, `so_thich`, `ky_nang_dac_biet`, `word`, `excel`, `power_point`, `outlook`, `ung_dung_khac`, `av_nghe`, `av_noi`, `av_doc`, `av_viet`, `ngon_ngu_khac`, `ngay_cap_nhap`) VALUES
(1, 47, 'Thông tin sv', 2, 4, 'aaad', 'nhóm trunogwr', 'aaaá', 'aaa', 3, 2, 2, 3, 'photoshop', 1, 2, 2, 3, '3', '2020-12-03'),
(14, 45, '', 0, 0, '', '', '', '', 1, 1, 1, 1, '', 1, 1, 1, 1, '0', '2020-12-06'),
(15, 46, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  ADD PRIMARY KEY (`id_ho_so`),
  ADD KEY `id_sv` (`id_sv`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  MODIFY `id_ho_so` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  ADD CONSTRAINT `ho_so_sv_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `sinh_vien` (`id_sv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
