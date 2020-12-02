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
            add_dangtuyen($id_nganh, $id_dn, $tieu_de, $luong_khoi_dau, $luong_ket_thuc, $thoi_gian_tt, $sl_sv_can, $full_part_time, $thoi_gian_lam_viec, $che_do_thuong, $dao_tao, $tang_luong, $nghi_phep_nam, $du_lich, $che_do_bao_hiem, $mo_ta, $yeu_cau, $quyen_loi,$thoi_gian);
        }
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
        $view_dn = "view/dn_dshs.php";
        break;
    case "tdmk":
        $view_dn = "view/dn_tdmk.php";
        break;
    case "chi_tiet_dt":
        $id_dt = $_GET["id_dt"];
        settype($id_dt, "int");
        $row = getDangtuyenByID($id_dt);
        $ds = getAllUngtuyen($id_dt);
        $ut = getAllDangtuyen($id_dt);
        $view_dn = "view/chitiet_dt.php";
        break;
}
$view = "view/layout_dn.php";
require_once "view/layout.php";
