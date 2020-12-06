<?php

require_once "../system/database.php";
require_once "model/home.php";
require_once "model/doanh_nghiep.php";

$act = "index";
if (isset($_GET["act"]) == true) $act = $_GET["act"];
switch ($act) {
    case "index":
        $ds = getAllDoanhnghiep();
        $view_dn = "view/dn_index.php";
        break;
    case "update":
        $id_dn = $_POST["id_dn"];
        $ds = getAllDoanhnghiep();
        foreach ($ds as $id) {
            if ($id['id_dn'] == $id_dn) {
                $id_user = $id['id_user'];
            }
        }
        $email = trim(strip_tags($_POST["email"]));
        updateUser($id_user, $email);
        // doanh nghiep
        $ten_dn = trim(strip_tags($_POST["ten_dn"]));
        $masothue = $_POST['masothue'];
        settype($masothue, "int");
        $dia_chi = trim(strip_tags($_POST["dia_chi"]));
        $website = trim(strip_tags($_POST["website"]));
        $fax = trim(strip_tags($_POST["fax"]));
        $sdt = $_POST['sdt'];
        settype($sdt, "int");
        $sdt_ban = $_POST['sdt_ban'];
        settype($sdt_ban, "int");
        updateDoanhnghiep($id_dn, $id_user, $ten_dn, $masothue, $dia_chi, $website, $fax, $sdt, $sdt_ban);
        $ds = getAllDoanhnghiep();
        $view_dn = "view/dn_index.php";
        break;
    case 'taodangtuyen':
        if (isset($_POST['submit'])) {
            $thoi_gian = $_POST['thoi_gian'];
            $id_nganh = $_POST['nganh_dt'];
            $id_dn = $_POST['id_dn'];
            $tieu_de = $_POST['tieude'];
            $luong_khoi_dau = $_POST['luongthapnhat'];
            $luong_ket_thuc = $_POST['luongcaonhat'];
            $thoi_gian_tt = $_POST['thoigiantt'];
            $sl_sv_can = $_POST['soluongtuyen'];
            $full_part_time = $_POST['hinhthuclamviec'];
            $thoi_gian_lam_viec = $_POST['thoigianlamviec'];
            //phucloi
            if ($_POST['thuong'] = "checked")  $che_do_thuong = 1;
            else $che_do_thuong = 0;
            if ($_POST['daotao'] = "checked") $dao_tao = 1;
            else $dao_tao = 0;
            if ($_POST['tangluong'] = "checked") $tang_luong = 1;
            else $tang_luong = 0;
            if ($_POST['nghiphep'] = "checked") $nghi_phep_nam = 1;
            else $nghi_phep_nam = 0;
            if ($_POST['dulich'] = "checked") $du_lich = 1;
            else $du_lich = 0;
            if ($_POST['baohiem'] = "checked") $che_do_bao_hiem = 1;
            else $che_do_bao_hiem = 0;
            //textarea
            $mo_ta = $_POST['mota'];
            $yeu_cau = $_POST['yeucau'];
            $quyen_loi = $_POST['quyenloi'];
            add_dangtuyen($id_nganh, $id_dn, $tieu_de, $luong_khoi_dau, $luong_ket_thuc, $thoi_gian_tt, $sl_sv_can, $full_part_time, $thoi_gian_lam_viec, $che_do_thuong, $dao_tao, $tang_luong, $nghi_phep_nam, $du_lich, $che_do_bao_hiem, $mo_ta, $yeu_cau, $quyen_loi, $thoi_gian);
        }
        $ds = getAllDangtuyen();
        $view_dn = "view/dn_qlbv.php";
        break;
    case 'chonnganh':
        if (isset($_POST['id_nn'])) {
            $nganh = ds_nganh_all($_POST['id_nn']);
            foreach ($nganh as $nganh) {
                echo "<option value='" . $nganh['id_nganh'] . "'>" . $nganh['ten_nganh'] . "</option>";
            }
            exit();
        }
        break;
    case 'qlbv':
        $id_user = $_GET["id_user"];
        settype($id_user, "int");
        $ds = getAllDoanhnghiep();
        foreach ($ds as $row) {
            if ($row['id_user'] == $id_user) {
                $id_dn = $row['id_dn'];
            }
        }
        $ds = getAllDangtheodn($id_dn);
        $view_dn = "view/dn_qlbv.php";
        break;
    case "tttk":
        $view_dn = "view/dn_tttk.php";
        break;
    case "dshs":
        $id_user = $_SESSION['sid'];
        $trang_thai = 0;
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_dshs.php";
        break;
    case "daduyet":
        $id_user = $_SESSION['sid'];
        $trang_thai = 1;
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_dshs.php";
        break;
    case "tuchoi_":
        $id_user = $_SESSION['sid'];
        $trang_thai = 2;
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_dshs.php";
        break;
    case "pheduyet":
        $trang_thai = 0;
        $id_phieu = $_GET["id_phieu"];
        settype($id_phieu, "int");
        $thoi_gian_duyet = date('Y-m-d H:i:s');
        updatePhieu($id_phieu, $thoi_gian_duyet);
        $id_user = $_SESSION['sid'];
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_dshs.php";
        break;
    case "tuchoi":
        $trang_thai = 1;
        $id_phieu = $_GET["id_phieu"];
        settype($id_phieu, "int");
        updatePhieu_($id_phieu);
        $id_user = $_SESSION['sid'];
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_dshs.php";
        break;
    case "tdmk":
        $view_dn = "view/dn_tdmk.php";
        break;
    case "qlns":
        $id_user = $_SESSION['sid'];
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_qlns.php";
        break;
    case "danhgia":
        $id_phieu = $_GET["id_phieu"];
        settype($id_phieu, "int");
        updateDanhgia($id_phieu);
        $id_user = $_SESSION['sid'];
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_qlns.php";
        break;
    case "delete_dt":
        $id_dt = $_GET["id_dt"];
        settype($id_dt, "int");
        deleteDangtuyen($id_dt);
        $dn = getAllDoanhnghiep();
        foreach ($dn as $d) {
            if ($d['id_user'] == $_SESSION['sid'])
                $id_dn = $d['id_dn'];
        }
        $ds = getAllDangtheodn($id_dn);
        $view_dn = "view/dn_qlbv.php";
        break;
    case "dn_danh_gia":
        $ket_qua = $_POST['h-danhgia'];
        $danh_gia = $_POST['danh_gia'];
        $id_phieu = $_GET['id_phieu'];

        danh_gia_tu_dn($ket_qua, $danh_gia, $id_phieu);
        $id_user = $_SESSION['sid'];
        $ds = getAllDoanhnghiepID($id_user);
        $view_dn = "view/dn_qlns.php";
        break;
    case "danh_gia":
        echo '<div class="modal-header alert alert-info">
        <h5 class="modal-title" id="exampleModalLabel">Đánh giá -
            Quản lý nhân sự</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div><form method="post" action="index.php?ctrl=doanh_nghiep&act=dn_danh_gia&id_phieu=' . $_POST['id_phieu'] . '">
    <div class="modal-body">
        
            <div class="form-group">
                
                <label for="recipient-name" class="col-form-label">
                    <i class="far fa-trophy-alt"></i> Đánh giá:
                    <span class="text-success px-2">
                        <input type="radio" name="h-danhgia" id="h-dat" value="2"> Đạt <i class="fa fa-check"></i>
                    </span>
                    <span class=text-danger>
                        <input type="radio" name="h-danhgia" id="h-chuadat" value="1"> Chưa đạt <i class="fas fa-close"></i>
                    </span>
                </label>
            </div>

            <div class="form-group">
                <label for="message-text" class="col-form-label">Nhận xét:</label>
                <textarea class="form-control" cols="30" rows="7" id="message-text" name="danh_gia"></textarea>
            </div>
            
       
    </div>
    <div class="modal-footer">
        <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> -->
        <!-- <button type="button" class="btn btn-outline-success">Cập nhật</button> -->
        <!-- <button type="button" class="btn btn-danger" data-dismiss="">Chưa đạt <i class="far fa-close" aria-hidden="true"></i></button> -->
        <button type="submit" class="btn btn-success" data-dismiss="">Cập nhật </button>
    
            </form>
    </div>';
        exit();
    case "show_cv":
        $thong_tin = checkphieudkinbyid($_POST['id_phieu']);
        $id_sv = $thong_tin['id_sv'];
        $thong_tin_sv = checksinhvienbyid($id_sv);
        $nganh = checkNganhByID($thong_tin_sv['id_nganh']);
        $email = checktaikhoanbyid($thong_tin_sv['id_user']);
        $kynang = checkHosoByID($thong_tin_sv['id_sv']);
        $dangtuyen = checkdangtuyenbyid($thong_tin['id_dt']);
        $phe_duyet = '';
        if ($thong_tin['trang_thai'] != '3') $phe_duyet = '
        <a class="btn btn-outline-success " href="index.php?ctrl=doanh_nghiep&act=pheduyet&id_phieu=' . $_POST['id_phieu'] . '" id="nutpheduyet"><i class="fas fa-check-circle    "></i> Phê duyệt</a>
        <a class="btn btn-outline-danger " href="index.php?ctrl=doanh_nghiep&act=tuchoi&id_phieu=' . $_POST['id_phieu'] . '" id="nuttuchoi"><i class="fas fa-window-close    "></i> Từ chối </a>';

        echo '  
                <div class="resume_left">
                    <div class="resume_profile">
                        <img src="https://th.bing.com/th/id/OIP.VOE2H2F5pU4nAHDX-l3tyQHaI4?pid=Api&rs=1" alt="profile_pic">
                    </div>
                    <div class="resume_content">
                        <div class="resume_item resume_info">
                            <div class="title">
                                <p class="bold">' . $thong_tin_sv['ho_ten'] . '</p>
                                <p class="regular">' . $nganh['ten_nganh'] . '</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-map-marker"></i>
                                    </div>
                                    <div class="data">
                                    ' . $thong_tin_sv['dia_chi'] . '
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                    <div class="data">
                                    ' . $thong_tin_sv['sdt'] . '
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="data">
                                    ' . $email['email'] . '
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fab fa-weebly"></i>
                                    </div>
                                    <div class="data">
                                        www.Nghiadep.com
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="resume_item resume_skills">
                            <div class="title">
                                <p class="bold"> ' . $kynang['ky_nang_so_truong'] . '</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="skill_name semi-bold">
                                        Tin học
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 80%;"></span>
                                    </div>
                                    <div class="skill_per">80%</div>
                                </li>
                                <li>
                                    <div class="skill_name semi-bold">
                                        Tiếng Anh
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 70%;"></span>
                                    </div>
                                    <div class="skill_per">70%</div>
                                </li>
                                <li>
                                    <div class="skill_name semi-bold">
                                        Sáng tạo
                                    </div>
                                    <div class="skill_progress">
                                        <span style="width: 90%;"></span>
                                    </div>
                                    <div class="skill_per">90%</div>
                                </li>

                            </ul>
                        </div>
                        <div class="resume_item resume_social">
                            <div class="title">
                                <p class="bold">Giải thưởng</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fa fa-code"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Vô địch Code War(Fpt)</p>

                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-basketball-ball"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Giải ba Cầu lông</p>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="resume_item resume_social">
                            <div class="title">
                                <p class="bold">Hoạt động</p>
                            </div>
                            <ul>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-user-shield"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Tình nguyện viên Bụi</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="fas fa-award"></i>
                                    </div>
                                    <div class="data">
                                        <p class="semi-bold">Môi Trường Xanh</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="resume_right">
                    <div class="resume_item1 resume_about1 border-top-0">
                        <div class="title">
                            <h5 class="text-gray font-weight-bold border-bottom pb-3">' . $dangtuyen['tieu_de'] . '</h5>
                            <p class="text-gray">
                                <span class="font-weight-bold ">Nguyện vọng</span> 
                                <span >
                                ' . $thong_tin['nguyen_vong'] . '
                                </span>
                            </p>
                        </div>  <div class="pt-3 text-right">
                        <span class="mr-3 text-gray font-italic">Duyệt đơn ứng tuyển: </span>
                        ' . $phe_duyet . '
                    </div> </div>
                    <div class="resume_item resume_about">
                        <div class="title">
                            <p class="bold">Mục tiêu nghề nghiệp</p>
                        </div>
                        <p>' . $kynang['muc_tieu_nghe_nghiep'] . '
                        </p>
                    </div>
                    <div class="resume_item resume_work">
                        <div class="title">
                            <p class="bold">Dự án đã làm</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">2018 - 2019</div>
                                <div class="info">
                                    <p class="semi-bold">DỰ án bán hàng The corner</p>
                                    <p>Đảm nhận vị trí Front-en</p>
                                    <p>Đảm nhận vị trí back-end</p>

                                </div>
                            </li>
                            <li>
                                <div class="date">2019 - 2020</div>
                                <div class="info">
                                    <p class="semi-bold">Dự án Leading Meida</p>
                                    <p> viết quảng cáo qua các trang mạng xã hội Facebook</p>
                                    <p> viết quảng cáo qua các trang mạng xã hội Facebook</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2020 - Present</div>
                                <div class="info">
                                    <p class="semi-bold"> Web Freelancer</p>
                                    <p>Nhận các dự án đầu tiên Front-end,Back-end,...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_education">
                        <div class="title">
                            <p class="bold">Trình độ học vấn</p>
                        </div>
                        <ul>
                            <li>
                                <div class="date">2018 - 2020</div>
                                <div class="info">
                                    <p class="semi-bold">Web Designer (FPT Polytechnic)</p>
                                    <p>Tốt nghiệp loại giỏi chuyên ngành thiết kế Web của trường cao đẳng Fpt</p>
                                </div>
                            </li>
                            <li>
                                <div class="date">2020 - present</div>
                                <div class="info">
                                    <p class="semi-bold">Imformation Technology(Fpt University)</p>
                                    <p>Sinh viên đại học FPT</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="resume_item resume_hobby">
                        <div class="title">
                            <p class="bold">Sở thích </p>
                        </div>
                        <ul>
                            <li><i class="fas fa-book"></i></li>
                            <li><i class="fas fa-gamepad"></i></li>
                            <li><i class="fas fa-music"></i></li>
                            <li><i class="fab fa-pagelines"></i></li>
                        </ul>
                    </div>
                </div>
           ';
        exit;
}
$view = "view/layout_dn.php";
require_once "view/layout.php";
