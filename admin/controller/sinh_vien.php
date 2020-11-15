<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "model/sinh_vien.php"; //nạp model để có các hàm tương tác db
    $act = "index"; //chức năng mặc định
    if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
    switch ($act) {
        case "index":
            /* Chức năng hiện trang chủ
          1. nạp view hiện trên trang chủ */
            $ds = getAllSinhvien();
            $view = "view/sinh_vien-index.php";
            require_once "view/layout.php";
            break;
        case "thongbao":
            session_start();
            if (isset($_SESSION['thongbao'])) {
                $thongbao = $_SESSION['thongbao'];
                unset($_SESSION['thongbao']);
            } else
                $thongbao = "Không có gì để thông báo";
            $view = "view/thongbao.php";
            require_once "view/layout.php";
            break;
        case "addnew":
            $view = "view/sinh_vien-add.php";
            require_once "view/layout.php";
            break;
        case "addnew_":
            $view = "view/docfile.php";
            require_once "view/layout.php";
            break;
        case "insert":
            $user = trim(strip_tags($_POST["user"]));
            $mssv = trim(strip_tags($_POST["mssv"]));
            $id_nganh = $_POST['id_nganh'];
            settype($id_nganh, "int");
            $ho_ten = trim(strip_tags($_POST["ho_ten"]));
            $gioi_tinh = $_POST['gioi_tinh'];
            settype($gioi_tinh, "int");
            $sdt = $_POST['sdt'];
            settype($sdt, "int");
            $trang_thai = $_POST['trang_thai'];
            settype($trang_thai, "int");
            $ket_qua = $_POST['ket_qua'];
            settype($ket_qua, "int");
            $ghi_chu = trim(strip_tags($_POST["ghi_chu"]));
            $hinh = $_FILES["hinh"]["name"];
            move_uploaded_file($_FILES["hinh"]["tmp_name"], "images/$hinh");
            $thongbao = "";
            $thanhcong = true;
            if ($id_nganh == "") {
                $thongbao .= "Bạn chưa chọn ngành";
                $thanhcong = false;
            }
            if ($thanhcong == false) {
                session_start();
                $_SESSION['thongbao'] = $thongbao;
                header("location:" . ADMIN_URL . "?ctrl=sinh_vien&act=thongbao");
                exit();
            }
            $ds = getAllUser();
            foreach ($ds as $k) {
                if($user==$k["user"]){
                    $id_user=$k["id_user"];
                }
            }
            updateUser($id_user);
            addNewSinhvien($id_user, $mssv, $id_nganh, $ho_ten, $gioi_tinh, $sdt, $trang_thai, $ket_qua, $ghi_chu, $hinh);
            $thongbao = "Thêm sinh viên thành công";
            $view = "view/thongbao.php";
            require_once "view/layout.php";
            break;
        case "edit":
            $id_sv = $_GET["id_sv"];
            settype($id_sv, "int");
            $row = getSinhvienByID($id_sv);
            $view = "view/sinh_vien-edit.php";
            require_once "view/layout.php";
            break;
        case "update":
            $id_sv = $_POST['id_sv'];
            settype($id_sv, "int");
            $id_user = $_POST['id_user'];
            settype($id_user, "int");
            $mssv = trim(strip_tags($_POST["mssv"]));
            $id_nganh = $_POST['id_nganh'];
            settype($id_nganh, "int");
            $ho_ten = trim(strip_tags($_POST["ho_ten"]));
            $gioi_tinh = $_POST['gioi_tinh'];
            $sdt = $_POST['sdt'];
            $trang_thai = $_POST['trang_thai'];
            $ket_qua = $_POST['ket_qua'];
            $ghi_chu = trim(strip_tags($_POST["ghi_chu"]));
            $hinh = $_FILES["hinh"]["name"];
            move_uploaded_file($_FILES["hinh"]["tmp_name"], "images/$hinh");
            updateSinhvien($id_sv, $id_user, $mssv, $id_nganh, $ho_ten, $gioi_tinh, $sdt, $trang_thai, $ket_qua, $ghi_chu, $hinh);
            $ds = getAllSinhvien();
            $view = "view/sinh_vien-index.php";
            require_once "view/layout.php";
            break;
        case "delete":
            $id_sv = $_GET["id_sv"];
            settype($id_sv, "int");
            deleteSinhvien($id_sv);
            $ds = getAllSinhvien();
            $view = "view/sinh_vien-index.php";
            require_once "view/layout.php";
            break;
        case "kiemtrauser":
            if (isset($_GET['user'])) $user = trim(strip_tags($_GET['user']));
            else $user = "";
            if ($user == "") echo "<pan class ='badge badge-danger'>Username không có</pan>";
            else if (checkUserTonTai($user) == false) echo "<pan class = 'badge badge-danger'>User này không tồn tại</pan>";
            else if (checkUserTonTaiChuaDung($user)) echo "<pan class = 'badge badge-success '>Bạn có thể dùng User này</pan>";
            else echo "<pan class ='badge badge-danger'>User này đã có người dùng</pan>";
            break;
        case "kiemtramssv":
            if (isset($_GET['mssv'])) $mssv = trim(strip_tags($_GET['mssv']));
            else $mssv  = "";
            if ($mssv  == "") echo "<pan class ='badge badge-danger'>Mã số sinh viên không được rỗng</pan>";
            else if (checkMssvTonTai($mssv)) echo "<pan class = 'badge badge-danger'>Mã số sinh viên đã có người dùng</pan>";
            else echo "<pan class ='badge badge-success'>Bạn có thể dùng mã số sinh viên này</pan>";
            break;
    }
    ?>
</body>

</html>