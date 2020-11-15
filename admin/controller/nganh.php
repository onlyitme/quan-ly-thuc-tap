<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "model/nganh.php"; //nạp model để có các hàm tương tác db
    $act = "index"; //chức năng mặc định
    if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
    switch ($act) {
        case "index":
            /* Chức năng hiện trang chủ
          1. nạp view hiện trên trang chủ */
            $ds = getAllNganh();
            $view = "view/nganh-index.php";
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
            $view = "view/nganh-add.php";
            require_once "view/layout.php";
            break;
        case "insert":
            $ten_nganh = trim(strip_tags($_POST['ten_nganh']));
            $thongbao = "";
            $thanhcong = true;
            if ($ten_nganh== "") {
                $thongbao .= "Tên ngành chưa nhập ";
                $thanhcong = false;
            } else if (strlen($ten_nganh) < 4) {
                $thongbao .= "Tên ngành quá ngắn ";
                $thanhcong = false;
            } else if (checkNganhTonTai($ten_nganh) == true) {
                $thongbao .= "Tên ngành đã tồn tại ";
                $thanhcong = false;
            }
            if ($thanhcong == false) {
                session_start();
                $_SESSION['thongbao']=$thongbao;
                header("location:" . ADMIN_URL . "?ctrl=nganh&act=thongbao");
                exit();
            }
            $an_hien = $_POST['an_hien'];
            settype($an_hien, "int");
            $id_nn= $_POST['id_nn'];
            addNewNganh($ten_nganh,$an_hien,$id_nn);
            $thongbao = "Thêm ngành thành công";
            $view = "view/thongbao.php";
            require_once "view/layout.php";
            break;
        case "edit":
            $id_nganh = $_GET["id_nganh"];
            settype($id_nganh, "int");
            $row = getNganhByID($id_nganh);
            $view = "view/nganh-edit.php";
            require_once "view/layout.php";
            break;
        case "update":
            $id_nganh = $_POST["id_nganh"];
            $ten_nganh = trim(strip_tags($_POST["ten_nganh"]));
            $an_hien = $_POST["an_hien"];
            $id_nn = $_POST["id_nn"];
            updateNganh($id_nn, $ten_nganh, $an_hien,$id_nganh);
            $ds = getAllNganh();
            $view = "view/nganh-index.php";
            require_once "view/layout.php";
            break;
        case "delete":
            $id_nganh = $_GET["id_nganh"];
            settype($id_nganh, "int");
            deleteNganh($id_nganh);
            $ds = getAllNganh();
            $view = "view/nganh-index.php";
            require_once "view/layout.php";
            break;
    }
    ?>
</body>

</html>