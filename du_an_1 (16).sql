-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2020 lúc 05:30 PM
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
  `tieu_de` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeu_cau` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen_loi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_sv_can` int(11) DEFAULT 1,
  `sl_sv_dk` int(11) DEFAULT 0,
  `thoi_gian` date DEFAULT NULL,
  `vi_tri` tinyint(1) DEFAULT NULL COMMENT '0 nhân viên thực tập\r\n1 nhân viên chính thức',
  `kinh_nghiem` tinyint(1) DEFAULT 0 COMMENT '0: không cần\r\n1: cần',
  `luong_khoi_dau` int(12) DEFAULT 0,
  `luong_ket_thuc` int(12) DEFAULT NULL,
  `thoi_gian_tt` int(2) NOT NULL COMMENT 'từ 1-12 giá trị theo tháng',
  `full_part_time` tinyint(1) DEFAULT 0 COMMENT '0 part time\r\n1 full time',
  `thoi_gian_lam_viec` tinyint(1) DEFAULT 0 COMMENT '0 làm t2-t6\r\n1 lam thu2-thu7\r\n2 lam thu2-cn',
  `che_do_bao_hiem` tinyint(1) DEFAULT 0,
  `du_lich` tinyint(1) DEFAULT 0,
  `che_do_thuong` tinyint(1) DEFAULT 0,
  `dao_tao` tinyint(1) DEFAULT 0,
  `tang_luong` tinyint(1) DEFAULT 0,
  `nghi_phep_nam` tinyint(1) DEFAULT 0,
  `id_dn` int(11) NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `an_hien` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_tuyen`
--

INSERT INTO `dang_tuyen` (`id_dt`, `tieu_de`, `mo_ta`, `yeu_cau`, `quyen_loi`, `sl_sv_can`, `sl_sv_dk`, `thoi_gian`, `vi_tri`, `kinh_nghiem`, `luong_khoi_dau`, `luong_ket_thuc`, `thoi_gian_tt`, `full_part_time`, `thoi_gian_lam_viec`, `che_do_bao_hiem`, `du_lich`, `che_do_thuong`, `dao_tao`, `tang_luong`, `nghi_phep_nam`, `id_dn`, `id_nganh`, `an_hien`) VALUES
(29, 'tuyển 50 bạn thực tập Back-end', 'tuyển 50 thực tập sinh cho doanh nghiệp thành công', 'chăm chỉ ham học hỏi quan trọng biết tiếng việt', '', 50, 0, '2020-11-30', 0, 0, 500, NULL, 0, 0, 0, 1, 0, 0, 0, 0, 0, 15, 21, 1),
(30, 'tuyển 40 bạn thực tập tự động hóa', 'Cần gấp 40 bạn thực tập sinh về công ti', 'biết ăn biết nói biết đọc và biết viết ( ngôn ngữ Việt Nam )', '', 40, 0, '2020-11-25', 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 35, 1),
(31, 'tuyển tts du lịch ', 'công ti đang cần 45 bạn tts ', 'vui vẻ hòa đồng biết ăn nói', '', 45, 0, '2020-11-30', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 30, 1),
(32, 'tuyển tts', 'tuyển 30 thực tập sinh web cho doanh nghiệp thành công', 'biết im lặng và nói đúng lúc', '', 30, 0, '2020-11-21', 0, 0, 50, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 21, 1),
(33, 'tuyển 36 tts', 'tuyển 36 thực tập sinh web cho doanh nghiệp thất bại', 'Là con người', '', 36, 0, '2020-11-25', 0, 0, 10, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 21, 1),
(34, 'tuyển tts thiết web Font-end', 'tuyển 60 tts quản lí code chỉnh sửa layout', 'biết giao tiếp bằng tiếng anh', '', 60, 0, '2021-01-29', 0, 0, 500, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 21, 1),
(35, 'tuyển 20 tts thiết web Back-end', 'tuyển 20 tts chỉnh sửa layout', 'biết giao tiếp bằng tiếng người', '', 20, 0, '2021-04-29', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 21, 1),
(36, 'tuyển tts ttdh', 'dùng các công cụ để chỉnh sửa ảnh', 'biết tiếng người', '', 48, 0, '2020-12-09', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 22, 1),
(37, 'tuyển thiết kế đồ họa', 'tuyển 69 bạn tts đồ họa cho công ti thành công ', 'biết tiếp thu cần cù chăm chỉ', '', 69, 0, '2021-02-27', 0, 0, 250, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 22, 1),
(38, 'tuyển tts ttdh', 'chỉnh sửa ảnh', 'biết tiếng anh', '', 48, 0, '2020-12-09', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 22, 1),
(39, 'tuyển thiết kế đồ họa', 'tuyển 29 bạn tts đồ họa cho công ti thành công ', 'biết tiếp thu cần cù chăm chỉ chuyên môn không cần cao', '', 29, 0, '2021-02-27', 0, 0, 250, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 22, 1),
(40, 'tuyển tkw cho công ti thành công', 'tuyển 96 bạn thực tập fullstack cho công ti', 'thành thạo các ngôn ngữ cơ bản biết giao tiếp tiếng anh', '', 96, 0, '2021-04-22', 0, 0, 666, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 21, 1),
(41, 'tuyển 20 tts thiết web Back-end', 'tuyển 20 tts chỉnh sửa layout', 'biết giao tiếp bằng tiếng người', '', 20, 0, '2021-04-30', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 21, 1),
(42, 'tuyển 50 tts cơ khí', 'tuyển 50 tts cơ khí về công ti', 'biết giao tiếp bằng tiếng anh', '', 50, 0, '2021-04-29', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 17, 38, 1),
(43, 'tuyển 20 tts cơ khí', 'tuyển 20 tts cơ khí', 'biết giao tiếp bằng tiếng người', '', 20, 0, '2021-04-04', 0, 0, 100, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 15, 38, 1),
(44, 'tuyển 40 tts tự động hóa', 'tuyển 40 sv ngành tự động hóa', 'biết giao tiếp bằng tiếng anh', '', 40, 0, '2021-04-29', 0, 0, 150, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 14, 35, 1),
(45, 'tuyển tts font-end', 'tuyển 50 bạn tts font-end ', 'biết tiếng việt', '', 50, 0, '2021-02-19', 0, 0, 200, 500, 3, 0, 0, 1, 1, 1, 1, 0, 1, 14, 21, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanh_nghiep`
--

CREATE TABLE `doanh_nghiep` (
  `id_dn` int(11) NOT NULL,
  `id_user` int(12) NOT NULL,
  `ten_dn` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `anh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toa_do` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'lat và lng cách nhau bởi dấu ,',
  `masothue` int(10) NOT NULL,
  `fax` int(10) NOT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt_ban` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_cap_nhap` date DEFAULT NULL,
  `an_hien` tinyint(1) DEFAULT 1,
  `stt` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanh_nghiep`
--

INSERT INTO `doanh_nghiep` (`id_dn`, `id_user`, `ten_dn`, `banner`, `anh`, `dia_chi`, `toa_do`, `masothue`, `fax`, `sdt`, `sdt_ban`, `facebook`, `website`, `ngay_cap_nhap`, `an_hien`, `stt`) VALUES
(14, 44, 'doanh nghiệp thất bại', 'dn1.png', 'dt1.png', 'a', '', 0, 0, '2147483647', '0123545687', '', 'https://www.youtube.com/', NULL, 0, 0),
(15, 45, 'doanh nghiệp thành công', 'dn2.png', 'dt2.jpg', 'b', '', 0, 0, '2147483647', '0', '', '', NULL, 0, 0),
(17, 47, 'doanh nghiệp đào tạo', 'dn3.png', 'dt3.jpg', 'bv', '', 0, 0, '656465264', '0', '', '', NULL, 0, 0);

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
(1, 47, 'Thông tin sv', 2, 4, 'aaad', 'nhóm trunogwr', 'aaaá', 'aaa', 3, 2, 2, 3, 'photoshop', 3, 2, 2, 3, '3', '2020-12-01');

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
(30, 'Hướng dẫn viên du lịch', 1, 8),
(31, 'Quản trị nhà hàng', 1, 8),
(32, 'Quản trị khách sạn', 1, 8),
(35, 'Điều khiển và tự động hóa', 1, 9),
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
  `trang_thai` tinyint(1) NOT NULL COMMENT '0: sinh viên mới Nộp đơn\r\n1: doanh nghiệp duyệt sv rồi đang đợi sv xác nhận vô\r\n2:doanh nghiệp ko chấp nhận sinh viên ẩn bài viết\r\n3 sau khi doanh nghiệp đồng ý thì sv xác nhận công ti này\r\nđể tt (đặc biệt khi sv xác nhận thì tự hủy những phiếu đăng kí ở Dang_tuyen khác và không cho nộp đơn vào bất kì dang_tuyen nào)\r\n4 sau khi dn đồng ý thì sinh viên đổi ý hủy ko muốn vô nữa\r\n(tự hủy sau 2 ngày nếu sinh viên không chấp nhận)',
  `thoi_gian_duyet` datetime DEFAULT NULL COMMENT 'sau khi doanh nghiệp đồng ý thì cho sinh viên thêm 1 ngày để xác nhận có vô công ti hay ko\r\n',
  `ket_qua` tinyint(1) DEFAULT NULL COMMENT '0 chưa có \r\n1 rớt \r\n2 đạt',
  `danh_gia` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieu_dk_in`
--

INSERT INTO `phieu_dk_in` (`id_phieu`, `id_sv`, `ngay_dk`, `nguyen_vong`, `id_dt`, `trang_thai`, `thoi_gian_duyet`, `ket_qua`, `danh_gia`, `ghi_chu`) VALUES
(8, 47, '0000-00-00', 'vô cho vui', 45, 0, '2020-12-01 23:07:47', 0, '', ''),
(9, 47, '2020-11-30', 'thich vô cho vui ', 41, 1, NULL, NULL, NULL, NULL);

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
  `mssv` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_nganh` int(11) DEFAULT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'Sinh viên',
  `gioi_tinh` tinyint(1) DEFAULT NULL,
  `ngay_sinh` date DEFAULT NULL,
  `anh` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dia_chi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(1) DEFAULT NULL COMMENT '0 chưa có nơi thực tập 1 đã có'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinh_vien`
--

INSERT INTO `sinh_vien` (`id_sv`, `id_user`, `mssv`, `id_nganh`, `ho_ten`, `gioi_tinh`, `ngay_sinh`, `anh`, `sdt`, `dia_chi`, `trang_thai`) VALUES
(45, 39, 'ps11111', 21, 'nguyễn ngọc bảo', 1, NULL, '', '111111111', NULL, 0),
(46, 40, 'ps11112', 21, 'Phan Tấn Khải', 1, NULL, '', '3', NULL, 0),
(47, 41, 'ps11744', 21, 'phạm ngọc hưng', 1, '2015-11-17', 'ps11744-man_dem.png', '0335884626', 'hồ chí minhaaaaaaaaaa', 0),
(48, 42, 'ps11113', 24, 'Huỳnh Đạt', 1, NULL, '', '312456875', NULL, 0),
(52, 48, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `chuc_vu` tinyint(1) NOT NULL,
  `kich_hoat` tinyint(1) DEFAULT 0 COMMENT 'dùng để check lần đầu login '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id_user`, `user`, `pass`, `email`, `chuc_vu`, `kich_hoat`) VALUES
(1, 'admin', 'admin', NULL, 2, 0),
(39, 'bao@fpt.edu.vn', 'sinhvien', 'bao@fpt.edu.vn', 0, 0),
(40, 'khai@fpt.edu.vn', 'sinhvien', 'khai@fpt.edu.vn', 0, 0),
(41, 'hung@fpt.edu.vn', 'z', 'hung@fpt.edu.vn', 0, 0),
(42, 'dat@fpt.edu.vn', 'sinhvien', 'dat@fpt.edu.vn', 0, 0),
(44, 'doanhnghiep1@gmail.com', 'doanhnghiep', 'doanhnghiep1@gmail.com', 1, 0),
(45, 'hungngocpham2001@gmail.com', 'doanhnghiep', 'hungngocpham2001@gmail.com', 1, 0),
(47, 'hungngocpham1995@gmail.com', 'doanhnghiep', 'hungngocpham1995@gmail.com', 1, 0),
(48, 'a', 'a', NULL, 0, 0);

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
-- Chỉ mục cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  ADD PRIMARY KEY (`id_ho_so`),
  ADD KEY `id_sv` (`id_sv`);

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
  MODIFY `id_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  MODIFY `id_ho_so` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_phieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `phieu_dk_out`
--
ALTER TABLE `phieu_dk_out`
  MODIFY `id_phieu_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

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
-- Các ràng buộc cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  ADD CONSTRAINT `ho_so_sv_ibfk_1` FOREIGN KEY (`id_sv`) REFERENCES `sinh_vien` (`id_sv`) ON DELETE CASCADE ON UPDATE CASCADE;

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
