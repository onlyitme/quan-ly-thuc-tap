-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 02, 2020 lúc 04:46 PM
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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dang_tuyen`
--
ALTER TABLE `dang_tuyen`
  MODIFY `id_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dang_tuyen`
--
ALTER TABLE `dang_tuyen`
  ADD CONSTRAINT `dang_tuyen_ibfk_1` FOREIGN KEY (`id_dn`) REFERENCES `doanh_nghiep` (`id_dn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dang_tuyen_ibfk_2` FOREIGN KEY (`id_nganh`) REFERENCES `nganh` (`id_nganh`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
