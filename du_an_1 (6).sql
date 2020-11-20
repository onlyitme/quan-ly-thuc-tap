-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 20, 2020 lúc 04:31 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

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
-- Cấu trúc bảng cho bảng `dang_tuyen`
--

CREATE TABLE `dang_tuyen` (
  `id_dt` int(11) NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tieu_de` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noi_dung` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yeu_cau` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sl_sv_can` int(11) NOT NULL,
  `sl_sv_dk` int(11) NOT NULL,
  `thoi_gian` date DEFAULT NULL,
  `vi_tri` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `luong` int(12) NOT NULL,
  `id_dn` int(11) NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `trang_thai` tinyint(4) NOT NULL COMMENT '0 chua duyet 1 da duyet',
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_tuyen`
--

INSERT INTO `dang_tuyen` (`id_dt`, `anh`, `tieu_de`, `noi_dung`, `yeu_cau`, `sl_sv_can`, `sl_sv_dk`, `thoi_gian`, `vi_tri`, `luong`, `id_dn`, `id_nganh`, `trang_thai`, `an_hien`) VALUES
(18, NULL, 'tuyển sv thực tập cho doanh nghiệp 1', 'sắp có', 'biết chữ việt', 50, 1, '2020-11-25', 'Hồ Chí Minh', 0, 11, 21, 1, 1),
(19, NULL, 'chua có tiêu đề', 'ko có gì hot', 'ko', 60, 0, '2020-11-03', 'Hồ Chí Minh', 1000, 12, 22, 1, 1),
(20, 'dt1.png', 'tuyen sv tt cho vui', '', '', 50, 0, '2020-11-28', 'Hồ Chí Minh', 100, 12, 30, 1, 1),
(21, NULL, 'đâsdasdsad', 'da', 'dá', 60, 0, '2020-12-24', 'Hồ Chí Minh', 20, 12, 31, 1, 1),
(22, 'dt4.jpg', 'hung', '', '', 25, 0, '2021-02-11', 'Hồ Chí Minh', 50, 12, 29, 1, 1),
(23, NULL, 'ưeb', 'đâsdsadas', '', 60, 0, '2021-05-13', 'Hồ Chí Minh', 100, 11, 21, 1, 1),
(26, 'dt2.jpg\r\n', 'ko co', 'adsadsad', 'ádsada', 50, 0, '2020-11-04', 'Hồ Chí Minh', 0, 11, 21, 1, 1),
(27, 'dt3.jpg', 'kđasadsadco', 'adsadsad', 'ádsada', 50, 0, '2020-11-29', 'Hồ Chí Minh', 200, 11, 21, 1, 1),
(28, 'dt5.jpg', 'đasad', 'đasada', 'đâsd', 60, 0, '2020-11-22', 'Hồ Chí Minh', 300, 12, 21, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanh_nghiep`
--

CREATE TABLE `doanh_nghiep` (
  `id_dn` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `ten_dn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `an_hien` tinyint(1) DEFAULT 1,
  `stt` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanh_nghiep`
--

INSERT INTO `doanh_nghiep` (`id_dn`, `id_user`, `ten_dn`, `anh`, `dia_chi`, `sdt`, `an_hien`, `stt`) VALUES
(11, 2, 'CÔNG TY CP ĐẦU TƯ THÀNH THÀNH CÔNG', NULL, 'ho chi minh', 335884626, 1, 0),
(12, 3, '	\r\nTỔNG CÔNG TY XÂY DỰNG SỐ 1', NULL, 'quận 1 hcm', 333555620, 1, 0),
(13, 32, 'háuhdasudh', '', 'hudashduasd', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `id_nganh` int(11) NOT NULL,
  `ten_nganh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an_hien` tinyint(1) DEFAULT NULL,
  `id_nn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`id_nganh`, `ten_nganh`, `an_hien`, `id_nn`) VALUES
(21, 'Thiết kế web', 1, 6),
(22, 'Thiết kế đồ họa', 1, 6),
(23, 'Lập trình di động - máy tính', 1, 6),
(24, 'ứng dụng phần mềm', 1, 6),
(25, 'Kế toán doanh nghiệp', 1, 7),
(26, 'QHCC-PR & Tổ chức sự kiện', 1, 7),
(27, 'QTDN- Marketing & sale', 1, 7),
(28, 'MTĐT - Digital & Online Maketing', 1, 7),
(29, 'Quản trị lữ hành', 1, 8),
(30, 'Hướng dẫn viên du lịch', 1, 8),
(31, 'Quản trị nhà hàng', 1, 8),
(32, 'Quản trị khách sạn', 1, 8),
(35, 'Điều khiển và tự động hóa', 1, 9),
(36, 'Điện - Điện tử', 1, 9),
(37, 'Điện công nghiệp', 1, 9),
(38, 'cơ khí', 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhom_nganh`
--

CREATE TABLE `nhom_nganh` (
  `id_nn` int(11) NOT NULL,
  `ten_nn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `an_hien` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhom_nganh`
--

INSERT INTO `nhom_nganh` (`id_nn`, `ten_nn`, `an_hien`) VALUES
(6, 'CÔNG NGHỆ THÔNG TIN', 1),
(7, 'KINH TẾ', 1),
(8, 'DU LỊCH - NHÀ HÀNG - KHÁCH SẠN', 1),
(9, 'CƠ KHÍ, (ĐIỆN) TỰ ĐỘNG HOÁ', 1),
(10, 'Thiết kế trang phục', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu_dk_in`
--

CREATE TABLE `phieu_dk_in` (
  `id_phieu` int(11) NOT NULL,
  `id_sv` int(11) NOT NULL,
  `ngay_dk` date NOT NULL,
  `nguyen_vong` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_dt` int(11) NOT NULL,
  `id_dn` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL,
  `ket_qua` tinyint(1) NOT NULL COMMENT '0 chưa có \r\n1 rớt \r\n2 đạt',
  `ghi_chu` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieu_dk_in`
--

INSERT INTO `phieu_dk_in` (`id_phieu`, `id_sv`, `ngay_dk`, `nguyen_vong`, `id_dt`, `id_dn`, `trang_thai`, `ket_qua`, `ghi_chu`) VALUES
(7, 37, '2020-11-17', 'thích thì vô', 18, 11, 0, 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phieu_dk_out`
--

CREATE TABLE `phieu_dk_out` (
  `id_phieu_` int(11) NOT NULL,
  `ten_dn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sv` int(11) NOT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL COMMENT '0: chưa xử lí \r\n1 đã duyet',
  `ket_qua` tinyint(1) NOT NULL COMMENT '0 chưa co\r\n1 ko đạt\r\n2 đat',
  `ghi_chu` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinh_vien`
--

CREATE TABLE `sinh_vien` (
  `id_sv` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `mssv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gioi_tinh` tinyint(1) NOT NULL,
  `anh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `trang_thai` tinyint(1) NOT NULL COMMENT '0 chưa có nơi thực tập 1 đã có'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinh_vien`
--

INSERT INTO `sinh_vien` (`id_sv`, `id_user`, `mssv`, `id_nganh`, `ho_ten`, `gioi_tinh`, `anh`, `sdt`, `trang_thai`) VALUES
(36, 4, 'ps11744', 21, 'Phạm Ngọc Hưng', 1, '', 335884626, 0),
(37, 28, 'ps12345', 24, 'huỳnh tấn đạt', 1, '', 332554124, 0),
(39, 33, 'ps11744', 21, 'hung phạm', 1, '', 31125454, 0),
(40, 34, 'PS1744', 21, 'Phạm Ngọc Hưng', 0, '', 0, 0),
(41, 35, 'PS08876', 23, 'Nguyễn Thị Ngọc Hân', 0, '', 0, 0),
(42, 36, 'PS10789', 25, 'Trình Mộc Đức', 0, '', 0, 0),
(43, 37, 'PS09395', 27, 'Nguyễn Phú Hy', 0, '', 0, 0),
(44, 38, 'PS13423', 24, 'Võ Văn Thìn', 0, '', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `chuc_vu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `email`, `chuc_vu`) VALUES
(1, 'admin', 'admin', NULL, 2),
(2, 'doanhnghiep1', 'doanhnghiep', NULL, 1),
(3, 'doanhnghiep2', 'doanhnghiep', NULL, 1),
(4, 'sinhvien1', 'sinhvien', NULL, 0),
(28, 'sinhvien2', 'sinhvien', NULL, 0),
(29, 'doanhnghiep5', 'doanhnghiep', 'cc@gmail.com', 1),
(30, 'ngochung5', 'hnug', 'caahhhhh@gmail.com', 1),
(31, 'ngochung5', 'hung', 'caahddhhhh@gmail.com', 1),
(32, 'adminhung', 'hnug', 'huasd@gmail.com', 1),
(33, 'hungaaa', 'hung', 'hnug@gmail.com', 0),
(34, 'hung@gmail.com', '123', 'hung@gmail.com', 0),
(35, 'han@gmail.com', '123', 'han@gmail.com', 0),
(36, 'duc@gmail.com', '123', 'duc@gmail.com', 0),
(37, 'hy@gmail.com', '123', 'hy@gmail.com', 0),
(38, 'thin@gmail.com', '123', 'thin@gmail.com', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dang_tuyen`
--
ALTER TABLE `dang_tuyen`
  ADD PRIMARY KEY (`id_dt`),
  ADD KEY `id_dn` (`id_dn`,`id_nganh`),
  ADD KEY `id_nganh` (`id_nganh`);

--
-- Chỉ mục cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  ADD PRIMARY KEY (`id_dn`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`id_nganh`),
  ADD KEY `id_nn` (`id_nn`);

--
-- Chỉ mục cho bảng `nhom_nganh`
--
ALTER TABLE `nhom_nganh`
  ADD PRIMARY KEY (`id_nn`);

--
-- Chỉ mục cho bảng `phieu_dk_in`
--
ALTER TABLE `phieu_dk_in`
  ADD PRIMARY KEY (`id_phieu`),
  ADD KEY `id_sv` (`id_sv`,`id_dt`),
  ADD KEY `id_dt` (`id_dt`);

--
-- Chỉ mục cho bảng `phieu_dk_out`
--
ALTER TABLE `phieu_dk_out`
  ADD PRIMARY KEY (`id_phieu_`),
  ADD KEY `id_sv` (`id_sv`);

--
-- Chỉ mục cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD PRIMARY KEY (`id_sv`),
  ADD KEY `id_nganh` (`id_nganh`),
  ADD KEY `id_user1` (`id_user`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dang_tuyen`
--
ALTER TABLE `dang_tuyen`
  MODIFY `id_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nganh`
--
ALTER TABLE `nganh`
  MODIFY `id_nganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `nhom_nganh`
--
ALTER TABLE `nhom_nganh`
  MODIFY `id_nn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `phieu_dk_in`
--
ALTER TABLE `phieu_dk_in`
  MODIFY `id_phieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `phieu_dk_out`
--
ALTER TABLE `phieu_dk_out`
  MODIFY `id_phieu_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dang_tuyen`
--
ALTER TABLE `dang_tuyen`
  ADD CONSTRAINT `dang_tuyen_ibfk_1` FOREIGN KEY (`id_dn`) REFERENCES `doanh_nghiep` (`id_dn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dang_tuyen_ibfk_2` FOREIGN KEY (`id_nganh`) REFERENCES `nganh` (`id_nganh`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD CONSTRAINT `nganh_ibfk_1` FOREIGN KEY (`id_nn`) REFERENCES `nhom_nganh` (`id_nn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieu_dk_in`
--
ALTER TABLE `phieu_dk_in`
  ADD CONSTRAINT `phieu_dk_in_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `sinh_vien` (`id_sv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `phieu_dk_in_ibfk_2` FOREIGN KEY (`id_dt`) REFERENCES `dang_tuyen` (`id_dt`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `phieu_dk_out`
--
ALTER TABLE `phieu_dk_out`
  ADD CONSTRAINT `phieu_dk_out_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `sinh_vien` (`id_sv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD CONSTRAINT `id_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sinh_vien_ibfk_1` FOREIGN KEY (`id_nganh`) REFERENCES `nganh` (`id_nganh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
