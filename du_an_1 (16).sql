-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2020 lúc 04:51 PM
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
-- Cấu trúc bảng cho bảng `dang_tuyen`
--

CREATE TABLE `dang_tuyen` (
  `id_dt` int(11) NOT NULL,
  `tieu_de` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mo_ta` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yeu_cau` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quyen_loi` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl_sv_can` int(11) DEFAULT NULL,
  `sl_sv_dk` int(11) DEFAULT NULL,
  `thoi_gian` date DEFAULT NULL,
  `vi_tri` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 nhân viên thực tập\r\n1 nhân viên chính thức',
  `kinh_nghiem` tinyint(1) DEFAULT 0 COMMENT '0: không cần\r\n1: cần',
  `luong_khoi_dau` int(12) DEFAULT NULL,
  `luong_ket_thuc` int(12) DEFAULT NULL,
  `thoi_gian_tt` int(2) DEFAULT NULL COMMENT 'từ 1-12 giá trị theo tháng',
  `full_part_time` tinyint(1) DEFAULT NULL COMMENT '0 part time\r\n1 full time',
  `thoi_gian_lam_viec` tinyint(1) DEFAULT 0 COMMENT '0 làm t2-t6\r\n1 lam thu2-thu7\r\n2 lam thu2-cn',
  `che_do_bao_hiem` tinyint(1) DEFAULT 0,
  `du_lich` tinyint(1) DEFAULT 0,
  `che_do_thuong` tinyint(1) DEFAULT 0,
  `dao_tao` tinyint(1) DEFAULT 0,
  `tang_luong` tinyint(1) DEFAULT 0,
  `nghi_phep_nam` tinyint(1) DEFAULT 0,
  `id_dn` int(11) NOT NULL,
  `id_nganh` int(11) NOT NULL,
  `an_hien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dang_tuyen`
--

INSERT INTO `dang_tuyen` (`id_dt`, `tieu_de`, `mo_ta`, `yeu_cau`, `quyen_loi`, `sl_sv_can`, `sl_sv_dk`, `thoi_gian`, `vi_tri`, `kinh_nghiem`, `luong_khoi_dau`, `luong_ket_thuc`, `thoi_gian_tt`, `full_part_time`, `thoi_gian_lam_viec`, `che_do_bao_hiem`, `du_lich`, `che_do_thuong`, `dao_tao`, `tang_luong`, `nghi_phep_nam`, `id_dn`, `id_nganh`, `an_hien`) VALUES
(47, 'Tester / Nhân Viên Kiểm Thử Phần Mềm', '- Đọc hiểu các tài liệu đặc tả hệ thống, yêu cầu nghiệp vụ, tài liệu thiết kế liên quan.\r\n- Lập kế hoạch test và thiết kế testcase.\r\n- Thực hiện test sản phẩm dựa trên testcase.\r\n- Quản lý và phân tích kết quả test.\r\n- Viết báo cáo test, viết quy trình, hướng dẫn.\r\n- Thực hiện tốt các công việc khác khi được giao từ cấp trên.', '- Tốt nghiệp đại học chuyên ngành CNTT hoặc chuyên ngành tương đương.\r\n- Đã có kinh nghiệm ở vị trí Tester.\r\n- Ưu tiên có kinh nghiệm làm các sản phẩm website.\r\n- Có khả năng lập kế hoạch test và viết testcase.\r\n- Trách nhiệm, cân thận, tỉ mỉ và nhanh nhẹn.\r\n- Chủ động, thích nghi nhanh công việc.', '- Nhiều cơ hội thăng tiến và học hỏi, được đào tạo để nâng cao năng lực chuyên môn\r\n- Thu nhập xứng đáng với khả năng.\r\n- Được hưởng các chế độ phúc lợi: BHXH, BHYT, BHTN theo luật định\r\n- Môi trường làm việc năng động, sáng tạo, thân thiện\r\n- Nghỉ lễ, tết Theo Quy định của Luật Lao Động và Quy định của Nhà nước', 30, 0, NULL, 0, 0, 100, 200, 5, 0, 0, 0, 0, 0, 0, 0, 0, 21, 23, 1),
(48, 'Nhân Viên Thiết Kế 2D Animation (Chế Độ Tốt)', '	\r\n- Dựng phim và diễn hoạt animation như trong video.\r\n- Thực hiện Animation dựa trên các ý tưởng đề xuất và có sẵn.', '- Khả năng thực hiện animation bằng bất kỳ phần mềm nào, miễn là đẹp và chất lượng.\r\n- Kỹ năng tư duy chuyển động tốt.\r\n- Sử dụng tốt phần mềm MOHO\r\n- Ưu tiên ứng viên có kinh nghiệm làm game animator.\r\n- Yêu thích chơi game.', '- Lương từ 8 -15 triệu : Lương Cơ Bản + Thưởng doanh thu, thu nhập cao theo năng lực\r\n- Được xét tăng lương 6 tháng/1 lần.\r\n- Thưởng theo năng lực.\r\n- Lương tháng thứ 13\r\n- Được nghỉ các ngày quốc lễ có lương.\r\n- Môi trường năng động, thân thiện, dễ dàng phát triển khả năng sáng tạo của bản thân.', 30, NULL, '2020-12-18', 0, 0, 200, 300, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 21, 22, 1),
(49, 'Nhân Viên Lập Trình Winform Erp - Đi Làm Ngay', '· Tham gia xây dựng Form nhập liệu, Form phân tích thống kê theo yêu cầu.\r\n· Tham gia xây dựng biểu mẫu, báo cáo theo yêu cầu.\r\n· Tham gia bảo trì hệ thống: Xử lý lỗi, Ưu hóa truy xuất CSDL, Ưu hóa các chức năng của hệ thống.\r\n· Phối hợp với Đội Dự án để triển khai hệ thống.\r\n\r\n• Thời gian làm việc: Thứ 2-7 (08:00 ~ 17:00)\r\n• Địa chỉ làm việc:\r\n\r\nCTY TNHH PHẦN MỀM ERP KHOÁNG TRIỂN\r\nHCM: 268 Tô Hiến Thành, P.15, Q. 10, TP.HCM\r\nHà Nội: Tòa nhà Việt Á, Số 9 Duy Tân, P. Dịch Vọng Hậu, Q. Cầu Giấy, TP. Hà Nội', '• Yêu từ 22 tuổi đến 30 tuổi\r\n• Tốt nghiệp CAO ĐẲNG trở lên chuyên ngành CNTT, Tự động hóa, Toán - Tin học hoặc các ngành liên quan…\r\n• Yêu thích công việc lập trình và có tư duy logic trong toán học.\r\n• Giao tiếp tốt, trình bày vấn đề rõ ràng, dễ hiểu.\r\n• Ưu tiên ứng viên có hiểu biết về SQL Server / Database.\r\n\r\n✅✅✅ QUY TRÌNH PHỎNG VẤN:\r\nBước 1: Sau khi nhận CV, chúng tôi gửi File thông tin theo mẫu để ứng viên điền thông tin (Ứng viên gửi kèm bằng cấp, bảng điểm và các chứng chỉ liên quan).\r\nBước 2: Sau khi được duyệt File thông tin, ứng viên nhận đề tài khảo hạch lập trình.\r\nBước 3: Ứng viên đạt yêu cầu khảo hạch, chúng tôi gửi lịch hẹn ngày phỏng vấn trực tiếp.\r\nBước 4: Đánh giá kết quả phỏng vấn, hẹn ngày đến nhận việc.', '· Sinh viên mới ra trường, lương thử việc: 5.000.000 - 6.000.000 / tháng.\r\n· Lương chính thức: Từ 7.000.000 - 12.000.000\r\n· Môi trường làm việc hiện đại, chuyên nghiệp, có cơ hội thăng tiến và ổn định lâu dài.\r\n· Được đào tạo về:\r\n- Lập trình cơ sở dữ liệu và lập trình hướng đối tượng.\r\n- Nghiệp vụ và quy trình làm việc của hệ thống ERP.\r\n- Làm việc và triển khai dự án cho các doanh nghiệp lớn.\r\n· Có cơ hội phát triển vào các vị trí quản lý của các chi nhánh công ty ở nước ngoài (Trung Quốc, Đài Loan, Myanmar,…).\r\n· Xét tăng lương 2 lần/năm theo năng lực và hiệu quả công việc.\r\n· Chế độ thưởng theo dự án, thưởng theo tình hình sản xuất kinh doanh cuối năm.\r\n· Hưởng các chế độ, phúc lợi: Lương tháng 13; Thưởng lễ tết; 12 ngày phép năm; tham gia đầy đủ BHXH, BHYT, BHTN,…\r\n· Các khoản phụ cấp khác: Phụ cấp ăn trưa, chi phí xăng xe, điện thoại,…\r\n· Môi trường có văn hóa \"Mở\", mọi người đều được thoải mái feedback, đưa ra ý kiến đóng góp.\r\n· Được tư vấn và chia sẻ về phát triển năng lực và ', 100, NULL, '2021-01-21', 0, 0, 50, 100, NULL, NULL, 0, 0, 0, 0, 0, 0, 0, 18, 24, 1),
(57, 'Lập Trình Viên', '- Lập trình thành thạo C#,VB, ASP.NET, SQL server,...\r\n- Cài đặt chương trình trên máy các đơn vị khi có yêu cầu\r\n- Cấp user, cấp quyền trong chương trình khi có yêu cầu của các đơn vị\r\n- Kiểm tra backup dữ liệu các chương trình trên server thường xuyên\r\n- Quản lý và duy trì các chương trình được giao\r\n- Khảo sát yêu cầu các đơn vị để thực hiện hiệu chỉnh hoặc viết mới đúng yêu cầu công việc.\r\n- Hướng dẫn rõ ràng, chính xác, hỗ trợ kịp thời khi đơn vị có yêu', '-Tốt nghiệp Đại Học, chuyên ngành công nghệ thông tin\r\n-Ưu tiên ứng viên có kinh nghiệm\r\n-Sử dụng vi tính văn phòng ( word, excel)\r\n- Tiếng Anh chuyên ngành\r\n- Lập trình thành thạo C#,VB, ASP.NET, SQL server,...\r\n- Có khả năng làm việc độc lập và khả năng làm việc theo nhóm.\r\n- Năng động, sáng tạo, tinh thần làm việc nhóm cao\r\n- Có trách nhiệm, chịu được áp lực cao trong công việc\r\n- Đã từng làm việc trong nhóm phát triển phần mềm là một lợi thế', '	\r\n- Được hưởng các chế độ và quyển lợi theo quy định.\r\n- Lương thỏa thuận từ 7 - 10 triệu', 70, NULL, '2020-12-18', 0, 0, 50, 300, 4, 0, 0, 0, 0, 0, 0, 0, 0, 23, 21, 1);

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
  `dia_chi` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `toa_do` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lat và lng cách nhau bởi dấu ,',
  `masothue` int(10) DEFAULT NULL,
  `fax` int(10) DEFAULT NULL,
  `sdt` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sdt_ban` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngay_cap_nhap` date DEFAULT NULL,
  `an_hien` tinyint(1) DEFAULT 1,
  `stt` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `doanh_nghiep`
--

INSERT INTO `doanh_nghiep` (`id_dn`, `id_user`, `ten_dn`, `banner`, `anh`, `dia_chi`, `toa_do`, `masothue`, `fax`, `sdt`, `sdt_ban`, `facebook`, `website`, `ngay_cap_nhap`, `an_hien`, `stt`) VALUES
(18, 44, 'Siêu Việt Group', 'dn1.png', 'dt1.png', '23 Trần Cao Vân, Phường Đa Kao, Quận 1, TP HCM', NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/baokun.97s/', 'https://www.facebook.com/baokun.97s/', NULL, 1, NULL),
(19, 47, 'CÔNG TY TNHH GIẢI PHÁP MẠNG EDT', 'dn2.png', 'dt2.png', '268 Tô Hiến Thành, Phường 15, Quận 10, Thành phố Hồ Chí Minh, Việt Nam', NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/baokun.97s/', 'https://www.facebook.com/baokun.97s/', NULL, 1, NULL),
(21, 45, 'CÔNG TY CP WEMO MEDIA', 'dn3.png', 'dt3.png', '30 Nguyễn Thị Bảy, Phường Thanh Khê Tây, Quận Thanh Khê, Thành phố Đà Nẵng, Việt Nam', NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/baokun.97s/', 'https://www.facebook.com/baokun.97s/', NULL, 1, NULL),
(23, 48, 'CÔNG TY TNHH BÌNH TIÊN ĐỒNG NAI', 'dn2.png', 'dt2.png', '1/1, đường Phạm Văn Thuận - Phường Tam Hiệp - Thành phố Biên Hoà - Đồng Nai', NULL, NULL, NULL, NULL, NULL, 'https://www.facebook.com/baokun.97s/', 'https://www.facebook.com/baokun.97s/', NULL, 1, NULL);

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
(1, 52, 'Thông tin sv', 2, 4, 'aaa', 'nhóm trunogwr', 'aaa', 'aaa', 3, 2, 3, 2, '', 4, 4, 4, 4, '4', '2020-12-01');

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
(38, 'Cơ khí', 1, 9),
(42, 'Điện, Điện Tử', NULL, 9),
(43, 'Điện công nghiệp', NULL, 9),
(44, 'Quản trị lữ hành', NULL, 8);

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
(9, 'CƠ KHÍ, (ĐIỆN) TỰ ĐỘNG HOÁ', 1);

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
  `trang_thai` tinyint(1) NOT NULL COMMENT '0: sinh viên mới Nộp đơn\r\n1: doanh nghiệp duyệt sv rồi đang đợi sv xác nhận vô\r\n2:doanh nghiệp ko chấp nhận sinh viên ẩn bài viết\r\n3 sau khi doanh nghiệp đồng ý thì sv xác nhận công ti này\r\nđể tt (đặc biệt khi sv xác nhận thì tự hủy những phiếu đăng kí ở Dang_tuyen khác và không cho nộp đơn vào bất kì dang_tuyen nào)\r\n4 sau khi dn đồng ý thì sinh viên đổi ý hủy ko muốn vô nữa\r\n(tự hủy sau 2 ngày nếu sinh viên không chấp nhận)',
  `thoi_gian_duyet` datetime DEFAULT NULL COMMENT 'sau khi doanh nghiệp đồng ý thì cho sinh viên thêm 1 ngày để xác nhận có vô công ti hay ko\r\n',
  `ket_qua` tinyint(1) NOT NULL COMMENT '0 chưa có \r\n1 rớt \r\n2 đạt',
  `danh_gia` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(39, 'sinhvien1@gmail.com', 'sinhvien', 'sinhvien1@gmail.com', 0, 0),
(40, 'sinhvien2@gmail.com', 'sinhvien', 'sinhvien2@gmail.com', 0, 0),
(41, 'sinhvien3@gmail.com', 'sinhvien', 'sinhvien3@gmail.com', 0, 0),
(42, 'sinhvien4@gmail.com', 'sinhvien', 'sinhvien4@gmail.com', 0, 0),
(44, 'doanhnghiep1@gmail.com', 'doanhnghiep', 'doanhnghiep1@gmail.com', 1, 0),
(45, 'doanhnghiep2@gmail.com', 'doanhnghiep', 'doanhnghiep2@gmail.com', 1, 0),
(47, 'doanhnghiep3@gmail.com', 'doanhnghiep', 'doanhnghiep3@gmail.com', 1, 0),
(48, 'doanhnghiep4@gmail.com', 'doanhnghiep', 'doanhnghiep4@gmail.com', 0, 0);

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
  MODIFY `id_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  MODIFY `id_ho_so` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `nganh`
--
ALTER TABLE `nganh`
  MODIFY `id_nganh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
