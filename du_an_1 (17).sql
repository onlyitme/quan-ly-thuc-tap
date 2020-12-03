-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 03, 2020 lúc 09:29 PM
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
(25, 'Tuyển Nhân Viên Lập Trình tay nghề cứng.', '- Thực hiện các yêu cầu phát triển mới/ chỉnh sửa các phần mềm của công ty.\r\n- Cùng khảo sát, phân tích và viết các phần mềm theo nhu cầu của các phòng ban trong công ty.\r\n- Tiếp nhận chuyển giao, đào tạo công nghệ từ các đối tác', '- Có khả năng lập trình với một trong các ngôn ngữ như : Visual Fox, Visual Basic, ASP.NET, C#, SQL server.\r\n- Trình độ cao đẳng trở lên', '- Chế độ đầy đủ theo luật LĐ Việt Nam.\r\n- Được tham gia đào tạo, bồi dưỡng, các khóa học về kỹ năng và nghiệp vụ\r\n- Môi trường trẻ trung, năng động và thân thiện\r\n- Mức lương hưởng năng lực', 15, 0, '2020-12-13', 0, 0, 474, 754, 5, 0, 0, 0, 0, 0, 0, 0, 0, 13, 21, 1),
(29, 'Tuyển nữ nhân viên bán hàng đa cấp', '- Lập kế hoạch và thực hiện mua hàng theo đúng quy trình Công ty quy định;\r\n- Tham gia tìm kiếm, lựa chọn nhà cung cấp vật tư, nguyên, nhiên vật liệu phù hợp và thực hiện đánh giá theo quy định;\r\n- Theo dõi và thực hiện giải quyết các vấn đề phát sinh trong quá trình mua hàng: vận chuyển, giao nhận hàng hóa, …;\r\n- Phối hợp với các bộ phận liên quan thực hiện các công việc để hoàn tất hoạt động mua hàng: nhập kho, thanh toán, …;\r\n- Thực hiện các công việc liên quan đến nhập khẩu hàng hóa: khai báo hải quan, nhận hàng từ cảng về các nhà máy, nộp thuế - đối chiếu công nợ thuế với hải quan và các vấn đề liên quan, … theo đúng yêu cầu của Công ty và quy định của pháp luật;\r\n- Tiếp nhận, kiểm tra thông tin và nhập liệu vào phần mềm quản lý ERP các quy trình nghiệp vụ theo yêu cầu của hệ thống;\r\n- Thực hiện việc quản lý, bảo quản và lưu trữ các chứng từ, hồ sơ: hợp đồng, bảng giá, chứng từ hải quan, chứng từ thanh toán, … theo quy định;\r\n- Theo dõi tình hình giá cả, diễn biến và xu hướng thị ', '- Giới tính: Nam\r\n- Độ tuổi: Từ 22 đến 34 tuổi;\r\n- Trình độ chuyên môn: Tốt nghiệp Đại học các chuyên ngành Tài chính kế toán, Kinh tế, Quản trị kinh doanh;\r\n- Trình độ tin học: Các chứng chỉ ứng dụng công nghệ thông tin hoặc tương đương;\r\n- Trình độ ngoại ngữ: Giao tiếp tốt, tương đương IELTS 5.0/Toeic 600;\r\n- Có ít nhất 1 năm kinh nghiệm trong công việc tương tự;\r\n- Ưu tiên: Hiểu biết về phần mềm quản lý tổng thể doanh nghiệp - ERP', '- Thưởng 6 tháng đầu năm và 6 tháng cuối năm, thưởng Lễ, Tết, thành lập Công ty, …;\r\n- Tham gia BHXH, BHYT, BHTN ngay từ khi ký hợp đồng;\r\n- Phúc lợi khác: Bồi dưỡng ăn giữa ca, nghỉ phép, đồng phục, …;\r\n- Được đào tạo để nâng cao trình độ chuyên môn;\r\n- Được tham gia Bảo hiểm tai nạn 24/24;', 12, 0, '2020-12-16', 0, 0, 400, 401, 6, 0, 0, 1, 0, 0, 0, 0, 0, 19, 25, 1),
(30, 'Tuyển hướng dẫn viên, các khâu tổ chức ăn uống', '	\r\n- Nghiên cứu thu thập thông tin về thị trường.\r\n- Tìm kiếm, mở rộng khách hàng tiềm năng.\r\n- Duy trì, chăm sóc khách hàng cũ.\r\n- Mọi giao tiếp công việc sẽ được trao đổi cụ thể trong quá trình phỏng vấn.', 'Tốt nghiệp Trung cấp trở lên.\r\n- Ứng viên có ít nhất 1 năm kinh nghiệm trở lên ở vị trí ứng tuyển.\r\n- Nhạy bén xử lý tình huống khi gặp phải vấn đề xảy ra.\r\n- Có khả năng chịu được áp lực công việc cao.\r\n- Thành thạo vi tính văn phòng.\r\n- Năng động nhiệt tình, trung thực, tinh thần cầu tiến.\r\n- Mong muốn làm việc lâu dài với công ty.\r\n- Ưu tiên người có khả năng giao tiếp bằng tiếng Anh.\r\n- Có sức khỏe tốt.\r\n- Có thể đi công tác các tỉnh', '- Thưởng hấp dẫn theo năng lực.\r\n- Du lịch một năm một lần.\r\n- Khám sức khoẻ 1 năm 1 lần\r\n- Các chế độ khác theo chế độ đãi ngộ của Công ty và quy định pháp luật', 22, 0, '2020-12-22', 0, 0, 456, 654, 5, 0, 0, 0, 0, 0, 0, 0, 0, 22, 30, 1),
(31, ' bán hàng trực tiếp chuyên sản xuất và phân phối các sản phẩm', 'Xây dựng chiến lược marketing cho các dòng sản phẩm\r\n- Xây dựng quy trình, vận hành và phát triển việc bán hàng thông qua kênh online: website,\r\n- Xây dựng và phát triển hệ thống kênh bán hàng E-commerce : tiki, lazada, shopee…\r\n- Xây dựng các CTKM push sale tại các điểm bán của kênh MT và CTKM push PO cho kênh GT\r\n- Triển khai kế hoạch marketing, bán hàng và phát triển thị trường trong nước.\r\n- Tìm kiếm thông tin, tham gia các hoạt động trưng bày, hội chợ.\r\n- Phân tích nhu cầu thị trường, liên hệ đối tác sản xuất để phát triển dòng sản phẩm phù hợp với thị hiếu người tiêu dùng Việt.', '• Có kinh nghiệm ở vị trí chuyên viên Digital Marketing hoặc vị trí tương đương.\r\n• Hiểu biết sâu sắc về các bộ phận tiếp thị (bao gồm tiếp thị truyền thống và tiếp thị kỹ thuật số như truyền thông xã hội) và các phương pháp nghiên cứu thị trường.\r\n• Có kinh nghiệm phân tích dữ liệu và sử dụng các công cụ marketing.\r\n• Sử dụng thành thạo phần mềm MS Office và phần mềm tiếp thị (chẳng hạn như Adobe Creative Suite & CRM)\r\n• Kỹ năng giao tiếp và viết lách tốt.', '- Lương 8-15 triệu ( troa đổi trực tiếp khi phỏng vấn theo năng lực)\r\n- Được hưởng các chế độ hiện hành\r\n- Được hưởng lương và các chế độ chính sách như: BHYT, BHXH, BHTN... đầy đủ theo chính sách Công ty và qui định của pháp luật.\r\n- Thăm quan, du lịch,nghỉ dưỡng hàng năm\r\n- Có những chương trình tưởng thưởng xứng đáng dành cho những cá nhân và tập thể có thành tích kinh doanh tốt.\r\n- Được tạo điều kiện tốt nhất để học hỏi nâng cao trình độ kiến thức và tạo mọi điều kiện để thăng tiến trong công việc.', 13, 0, '2020-12-26', 0, 0, 100, 523, 3, 0, 0, 0, 0, 0, 0, 0, 0, 20, 25, 1),
(34, 'Tuyển nhân viên thiết kế website.', ' Giao dịch với KH, tiếp nhận bảo hành / Phụ Tùng\r\n- Bán hàng tại cửa hàng.\r\nCông việc trao đổi cụ thể khi phỏng vấn.\r\n\r\nĐịa điểm làm việc tại các Cửa hàng huyện trong tỉnh Bình Thuận.\r\n1/Hàm Tân (km46)\r\n2/Đức Linh\r\n3/Chợ Lầu (Phan Rí)\r\n4/Tuy Phong.', '- Ít nhất 2 năm kinh nghiệm ở vị trí tương đương\r\n- Ưu tiên dân địa phương, Vi tính văn phòng thành thạo.\r\n- Kỹ năng giao tiếp tốt, tinh thần trách nhiệm cao, chịu được áp lực công việc cao\r\n- Chủ động trong công việc, có kỹ năng làm việc độc lập và làm việc nhóm.\r\n- Chịu khó, siêng năng, cần cù, trung thực.\r\n- Tốt nghiệp trung cấp trở lên.Được đào tạo nghiệp vụ khi gia nhập Công ty.', 'Tham gia đầy đủ chế độ BHXH, BHYT, BHTN,...\r\nLương thưởng hấp dẫn. Chính sách chiết khấu hoa hồng cao.\r\nĐược tham gia nhiều khóa đào tạo nâng cao tay nghề theo tiêu chuẩn Nhật', 60, 0, '2020-12-15', 0, 0, 500, 712, 5, 0, 0, 0, 0, 0, 0, 0, 0, 15, 21, 1),
(35, 'Tuyển nhân viên SEO website, tên miền, hosting', '- Công việc chủ yếu Check mail, trả lời khách hàng, kiểm tra sản phẩm, giới thiệu cho khách hàng vế chất lượng - hoạt động của sản phẩm.\r\n- Có thể đi công tác trong nước và nước ngoài…)\r\nCông việc trao đổi cụ thể khi phỏng vấn.', '- Tốt nghiệp Cao đẳng Dược trở lên hoặc các chuyên ngành kinh tế, quản trị kinh doanh.\r\n- Giao tiếp tốt.\r\n- Vi tính văn phòng: Excel, word\r\n- Thái độ: Chăm chỉ, tỉ mỉ, chủ động trong công việc.\r\n- Ưu tiên ứng viên có kinh nghiệm Telesale, sales admin.', '- Hưởng thu nhập hấp dẫn >8 triệu.\r\n- Môi trường làm việc ngành Dược trẻ trung, chuyên nghiệp.\r\n- Được làm việc tại Top Công ty có Nhà máy sản xuất Dược Phẩm hiện đại bậc nhất Việt Nam.', 20, 0, '2021-04-29', 0, 0, 100, 214, 6, 0, 0, 0, 0, 0, 0, 0, 0, 16, 21, 1),
(40, 'Tuyển nhân Viên chăm sóc làm mặt.', '- Thực hiện các yêu cầu phát triển mới/ chỉnh sửa các phần mềm của công ty.\r\n- Cùng khảo sát, phân tích và viết các phần mềm theo nhu cầu của các phòng ban trong công ty.\r\n- Tiếp nhận chuyển giao, đào tạo công nghệ từ các đối tác', '- Có khả năng lập trình với một trong các ngôn ngữ như : Visual Fox, Visual Basic, ASP.NET, C#, SQL server.\r\n- Trình độ cao đẳng trở lên', '- Chế độ đầy đủ theo luật LĐ Việt Nam.\r\n- Được tham gia đào tạo, bồi dưỡng, các khóa học về kỹ năng và nghiệp vụ\r\n- Môi trường trẻ trung, năng động và thân thiện\r\n- Mức lương hưởng năng lực', 7, 0, '2020-12-12', 0, 0, 123, 321, 4, 0, 0, 0, 0, 0, 0, 0, 0, 21, 25, 1),
(41, 'Tuyển nhân viên SEO website, tên miền, hosting', '	\r\n- Gọi điện chăm sóc nhà thuốc.\r\n- Chốt đơn hàng qua điện thoại.\r\n- Tổng hợp số liệu bán ra của hệ thống nhà thuốc tại miền Nam.\r\n- Gửi chương trình bán hàng cho các nhà thuốc hàng tháng theo từng khu vực.\r\n- Cung cấp các hồ sơ sản phẩm cho nhà thuốc.\r\n- Tiếp nhận và giải quyết khiếu nại của nhà thuốc.\r\n- Phụ trách hỗ trợ đơn hàng online tại Miền Nam.', '- Tốt nghiệp Cao đẳng Dược trở lên hoặc các chuyên ngành kinh tế, quản trị kinh doanh.\r\n- Giao tiếp tốt.\r\n- Vi tính văn phòng: Excel, word\r\n- Thái độ: Chăm chỉ, tỉ mỉ, chủ động trong công việc.\r\n- Ưu tiên ứng viên có kinh nghiệm Telesale, sales admin.', '- Hưởng thu nhập hấp dẫn >8 triệu.\r\n- Môi trường làm việc ngành Dược trẻ trung, chuyên nghiệp.\r\n- Được làm việc tại Top Công ty có Nhà máy sản xuất Dược Phẩm hiện đại bậc nhất Việt Nam.', 15, 1, '2021-03-12', 0, 0, 375, 754, 5, 0, 0, 0, 0, 0, 0, 0, 0, 17, 21, 1),
(42, 'Tuyển nhân Viên Thiết Kế 2D Animation (Chế Độ Tốt)', '- Dựng phim và diễn hoạt animation như trong video.\r\n- Thực hiện Animation dựa trên các ý tưởng đề xuất và có sẵn.', '- Khả năng thực hiện animation bằng bất kỳ phần mềm nào, miễn là đẹp và chất lượng.\r\n- Kỹ năng tư duy chuyển động tốt.\r\n- Sử dụng tốt phần mềm MOHO\r\n- Ưu tiên ứng viên có kinh nghiệm làm game animator.\r\n- Yêu thích chơi game.', '- Lương từ 8 -15 triệu : Lương Cơ Bản + Thưởng doanh thu, thu nhập cao theo năng lực\r\n- Được xét tăng lương 6 tháng/1 lần.\r\n- Thưởng theo năng lực.\r\n- Lương tháng thứ 13\r\n- Được nghỉ các ngày quốc lễ có lương.\r\n- Môi trường năng động, thân thiện, dễ dàng phát triển khả năng sáng tạo của bản thân.', 6, 0, '2020-12-19', 0, 0, 538, 695, 6, 0, 0, 1, 1, 1, 1, 0, 1, 14, 21, 1),
(43, 'Nhân Viên Kinh Doanh Thu Nhập 15 Triệu-25 Triệu / Tháng (Đi Làm Ngay)', '+ Lập và chủ động triển khai kế hoạch bán hàng hàng ngày, tuần, tháng, quý\r\n+ Công việc chính: xác định danh mục khách hàng, lên kế hoạch giới thiệu sản phẩm & dịch vụ của công ty, tổ chức demo + hướng dẫn sử dụng và giải đáp các thắc mắc phản hồi của khách hàng, ghi nhận yêu cầu, báo giá, đàm phán, thương lượng, chốt đơn hàng, theo dõi tiến độ đơn hàng, hỗ trợ giao hàng + hoàn tất thanh toán và thanh lý hợp đồng\r\n+ Chịu trách nhiệm triển khai và hoàn tất các chỉ tiêu kinh doanh theo chiến lược của công ty (sẽ trao đổi chi tiết khi phỏng vấn)\r\n+ Phối hợp tổ chức & triển khai các hoạt động phát triển thị trường, phát triển khách hàng mới + khách hàng tiềm năng\r\n+ Phối hợp & triển khai các chương trình chăm sóc khách hàng, chương trình khuyến mãi\r\n+ Báo cáo kết quả công việc thường xuyên hàng tuần với TPKD.\r\n+ Mọi chi tiết sẽ được trao đổi trong buổi phỏng vấn', '	\r\nTốt nghiệp Cao đẳng/ Đại học ngành nghề thuộc lĩnh vực Kinh tế, Kỹ Thuật Điện & Điện Tử, Cơ khí, Tự động hóa\r\n• Tối thiểu 02 năm kinh nghiệm ở vị trí nhân viên kinh doanh\r\n• Yêu thích việc kinh doanh, kỹ năng tìm kiếm + mở rộng quan hệ khách hàng, xây dựng và phát triển cơ hội bán hàng\r\n• Kỹ năng giao tiếp, đàm phán, tác phong chuyên nghiệp, năng động.\r\n* Ưu tiên ứng viên có kinh nghiệm về một trong những dòng sản phẩm thương hiệu như bên dưới là một trong những ưu thế cho việc tuyển dụng:\r\n+ Hiểu biết về thiết bị lưu Điện dự phòng (UPS) của các hãng như: APC-Schneider, Santak, Eaton, Socomec, Emerson…\r\n+ Hiểu biết về thiết bị đo lường Cơ khí: MITUTOYO, Accretech (Tokyo Seimitsu), Carl Zeiss, Hexagon\r\n+ Hiểu biết về máy móc, công cụ dụng cụ như: Milwaukee,Bosch, Makita, DeWalt, Stanley', '+ Lương cơ bản + thưởng doanh số. Thu nhập bình quân từ 10 triệu-25 triệu/ tháng.\r\n+ Được hưởng các chế độ thưởng theo doanh thu.\r\n+ Được làm việc trong một môi trường năng động, tác phong chuyên nghiệp.\r\n+ Được đào tạo nâng cao nghiệp vụ thường xuyên.\r\n+ Được cấp đồng phục, hỗ trợ đầy đủ phương tiện, quyền lợi khi đi công tác, gặp gỡ đối tác, khách hàng.\r\n+ Được hưởng chế độ nghĩ mát hàng năm, đầy đủ các quyền lợi BHXH, BHYT, BHTN… theo luật lao động hiện hành.\r\n+ Ngày nghỉ và chính sách lao động: Theo quy định của nhà nước.\r\n+ Thời gian làm việc: Thứ 2 đến thứ 6, thứ 7 làm việc luân phiên tuần nghỉ tuần làm.', 5, 0, '2020-12-10', 0, 0, 0, 101, 5, 0, 0, 0, 0, 0, 0, 0, 0, 18, 25, 1),
(53, 'tuyển thiết kế logo', '<p>ngồi kh&ocirc;ng đếm tiền</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', '<p>biết tiếng người</p>\r\n<div id=\"eJOY__extension_root\" class=\"eJOY__extension_root_class\" style=\"all: unset;\"></div>', '<p>lương c&oacute; thể &acirc;m</p>', 20, 0, '2020-12-11', NULL, 0, 0, 2000, 5, 0, 0, 1, 1, 1, 1, 1, 1, 13, 22, 0);

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
(13, 49, 'CÔNG TY CỔ PHẦN TẬP ĐOÀN THỜI TRANG THÁI TUẤN', 'banner-dn1.jpg', 'logo-dn1.jpg', '1/148 Nguyễn Văn Quá, Phường Đông Hưng Thuận, Quận 12', '', 0, 0, '028 3952 47', '028.777.779', '', 'https://www.thaituanfashion.com/', '2020-12-13', 1, 0),
(14, 44, 'Công ty thiết kế web Vinalink', 'banner-dn2.jpg', 'logo-dn2.jpg', 'Số 85 Vương Thừa Vũ - Thanh Xuân - Hà Nội.', '', 0, 0, '0439726746', '0138212345', '', 'https://www.youtube.com/', NULL, 0, 0),
(15, 51, 'Công ty thiết kế web Sapo', 'banner-dn3.jpg', 'logo-dn3.jpg', 'Tầng 6 - Tòa nhà Ladeco - 266 Đội Cấn - Phường Liễu Gia - Quận Ba Đình - Tp Hà Nội.', '', 0, 0, '1800 6750', '0138212345', '', '', NULL, 0, 0),
(16, 52, 'Công ty thiết kế web 123Crop - Thiết kế web uy tín', 'banner-dn4.jpg', 'logo-dn4.jpg', 'Số 60 Nguyễn Đình Chiểu, phường Ka Đao, quận 1, thành phố Hồ Chí Minh', '', 0, 0, '(08) 38.121', '028.777.779', '', 'www.thietkeweb9999.com', '2020-12-16', 1, 0),
(17, 53, 'Công ty thiết kế website Haravan', 'banner-dn5.jpg', 'logo-dn5.jpg', 'Tầng 1, Tòa nhà GP Invest, 170 Đê La Thành, Ô Chợ Dừa, Đống Đa, Hà Nội.', '', 0, 0, '1900.2297', '0138212345', '', '', NULL, 0, 0),
(18, 54, 'Công ty TNHH Amway Việt Nam', 'banner-dn6.jpg', 'logo-dn6.jpg', 'Số 18 VSIP II-A, Đường số 30,Khu Công nghiệp Việt Nam–Singapore II-A, Phường Vĩnh Tân, Thị xã Tân Uy', '', 0, 0, '1800 1700', '028.777.779', '', 'https://www.amway.com.vn/', '2020-12-17', 1, 0),
(19, 55, 'Công ty TNHH Unicity Việt Nam', 'banner-dn7.jpg', 'logo-dn7.jpg', 'Số 141 đường Cộng Hòa, P. 12, Q. Tân Bình, TP.HCM', '', 0, 0, '08 7300 541', '028.777.779', '', 'https://www.unicity.com/vnm/', NULL, 1, 0),
(20, 56, 'Công Ty TNHH Nu Skin Enterprises Việt Nam', 'banner-dn8.jpg', 'logo-dn8.jpg', 'Tầng 2, tòa nhà Terra Royal Tower - 280 Nam Kỳ Khởi Nghĩa,Phường 8, Quận 3, Tp. Hồ Chí Minh', '', 0, 0, '028 3932 43', '028.777.779', '', 'www.nuskin.com', NULL, 1, 0),
(21, 57, 'Công ty TNHH một thành viên Herbalife Việt Nam', 'banner-dn9.jpg', 'logo-dn9.jpg', '26 Trần Cao Vân, P. 6, Q. 3, TP.HCM', '', 0, 0, '028 3827 91', '028.777.779', '', 'dichvuthanhvien@herbalife.com', '2020-12-21', 1, 0),
(22, 58, 'Công ty TNHH Saigontourist', 'banner-dn10.jpg', 'logo-dn10.jpg', '45 Lê Thánh Tôn, Phường Bến Nghé, Q.1, TP.HCM.', '', 0, 0, '08 7300 541', '028.777.779', '', 'https://www.saigontourist.net/', '2020-12-22', 1, 0);

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
(14, 45, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(15, 46, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(16, 83, 'Thông tin sv', 2, 4, 'dsadasdas', 'đâsd', 'ádasd', 'ádasd', 1, 1, 1, 1, '', 1, 1, 1, 1, '1', '2020-12-04'),
(17, 85, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(18, 86, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(19, 87, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(20, 88, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL),
(21, 89, NULL, NULL, 0, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, 1, 1, 1, 1, NULL, NULL);

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
  `id_dn` int(11) DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL COMMENT '0: sinh viên mới Nộp đơn\r\n1: doanh nghiệp duyệt sv rồi đang đợi sv xác nhận vô\r\n2:doanh nghiệp ko chấp nhận sinh viên ẩn bài viết\r\n3 sau khi doanh nghiệp đồng ý thì sv xác nhận công ti này\r\nđể tt (đặc biệt khi sv xác nhận thì tự hủy những phiếu đăng kí ở Dang_tuyen khác và không cho nộp đơn vào bất kì dang_tuyen nào)\r\n4 sau khi dn đồng ý thì sinh viên đổi ý hủy ko muốn vô nữa\r\n(tự hủy sau 2 ngày nếu sinh viên không chấp nhận)',
  `thoi_gian_duyet` datetime DEFAULT NULL COMMENT 'sau khi doanh nghiệp đồng ý thì cho sinh viên thêm 1 ngày để xác nhận có vô công ti hay ko\r\n',
  `ket_qua` tinyint(1) DEFAULT NULL COMMENT '0 chưa có \r\n1 rớt \r\n2 đạt',
  `danh_gia` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ghi_chu` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phieu_dk_in`
--

INSERT INTO `phieu_dk_in` (`id_phieu`, `id_sv`, `ngay_dk`, `nguyen_vong`, `id_dt`, `id_dn`, `trang_thai`, `thoi_gian_duyet`, `ket_qua`, `danh_gia`, `ghi_chu`) VALUES
(9, 47, '2020-11-30', 'thich vô cho vui ', 41, 17, 4, '2020-12-08 16:30:11', NULL, NULL, NULL),
(12, 47, '0000-00-00', '', 43, 18, 2, NULL, NULL, NULL, NULL),
(13, 47, '0000-00-00', 'c', 42, 14, 4, NULL, NULL, NULL, NULL),
(15, 46, '2020-12-09', 'ĐÂSDAS', 42, 14, 4, NULL, NULL, NULL, NULL),
(16, 83, '2020-12-04', '', 53, 13, 3, '2020-12-04 03:21:23', NULL, NULL, NULL);

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
  `trang_thai` tinyint(1) DEFAULT 0 COMMENT '0 chưa có nơi thực tập 1 đã có'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinh_vien`
--

INSERT INTO `sinh_vien` (`id_sv`, `id_user`, `mssv`, `id_nganh`, `ho_ten`, `gioi_tinh`, `ngay_sinh`, `anh`, `sdt`, `dia_chi`, `trang_thai`) VALUES
(45, 39, 'ps11111', 21, 'Nguyễn Ngọc Bảo', 1, '1975-04-30', 'avt1.PNG', '0637182945', 'Phường 26, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', 0),
(46, 40, 'ps11112', 21, 'Phan Tấn Khải', 1, '1979-08-13', 'avt2.PNG', '0812749365', '395 Kinh Dương Vương, An Lạc, Bình Tân, Thành phố Hồ Chí Minh, Việt Nam', 0),
(47, 41, 'ps11744', 21, 'Phạm Ngọc Hưng', 0, '1995-11-17', 'ps11744-man_dem.png', '0335884626', '201B Nguyễn Chí Thanh, Phường 12, Quận 5, Thành phố Hồ Chí Minh, Việt Nam', 0),
(83, 105, 'ps11111', NULL, 'cao văn quá', 1, '2001-03-17', NULL, '0335884626', 'vô gia cư', 0),
(84, 106, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0),
(85, 107, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0),
(86, 108, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0),
(87, 109, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0),
(88, 110, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0),
(89, 111, NULL, NULL, 'Sinh viên', NULL, NULL, NULL, NULL, NULL, 0);

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
(41, 'hung@fpt.edu.vn', 'sinhvien', 'hung@fpt.edu.vn', 0, 0),
(44, 'doanhnghiep1@gmail.com', 'doanhnghiep', 'doanhnghiep1@gmail.com', 1, 0),
(49, 'b', 'z', NULL, 1, 0),
(51, 'd', 'z', NULL, 1, 0),
(52, 'e', 'z', NULL, 1, 0),
(53, 'f', 'z', NULL, 1, 0),
(54, 'g', 'z', NULL, 1, 0),
(55, 'h', 'z', NULL, 1, 0),
(56, 'i', 'z', NULL, 1, 0),
(57, 'k', 'z', NULL, 1, 0),
(58, 'l', 'z', NULL, 1, 0),
(105, 'sinhvien1', '1', NULL, 0, 1),
(106, 'sinhvien2', '1', NULL, 0, 0),
(107, 'sinhvien3', '1', NULL, 0, 0),
(108, 'sinhvien4', '1', NULL, 0, 0),
(109, 'sinhvien5', '1', NULL, 0, 0),
(110, 'sinhvien6', '1', NULL, 0, 0),
(111, 'sinhvien7', '1', NULL, 0, 0);

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
  ADD KEY `id_dt` (`id_dt`),
  ADD KEY `id_dn` (`id_dn`);

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
  MODIFY `id_dt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT cho bảng `doanh_nghiep`
--
ALTER TABLE `doanh_nghiep`
  MODIFY `id_dn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `ho_so_sv`
--
ALTER TABLE `ho_so_sv`
  MODIFY `id_ho_so` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id_phieu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `phieu_dk_out`
--
ALTER TABLE `phieu_dk_out`
  MODIFY `id_phieu_` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sinh_vien`
--
ALTER TABLE `sinh_vien`
  MODIFY `id_sv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

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
  ADD CONSTRAINT `id_dn` FOREIGN KEY (`id_dn`) REFERENCES `doanh_nghiep` (`id_dn`) ON DELETE CASCADE ON UPDATE CASCADE,
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