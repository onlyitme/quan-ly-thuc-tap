<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "models/doanh_nghiep.php"; //nạp model để có các hàm tương tác db
    $act = "index"; //chức năng mặc định
    if (isset($_GET["act"]) == true) $act = $_GET["act"]; //tiếp nhận chức năng user request
    switch ($act) {
        case "index":
            /* Chức năng hiện trang chủ
          1. nạp view hiện trên trang chủ */
            $ds = getAllDoanhnghiep();
            $view = "views/dn-index.php";
            require_once "views/layout.php";
            break;
        case "addnew":
            $view = "views/dn-add.php";
            require_once "views/layout.php";
            break;
        case "insert":
            $user = trim(strip_tags($_POST['user']));
            $email = trim(strip_tags($_POST['email']));
            $pass = trim(strip_tags($_POST['pass']));
            $chuc_vu = 1;
            addNewUser($user, $pass, $email, $chuc_vu);
            $ds = getAllUser();
            foreach ($ds as $id) {
                if ($id['user'] == $user) {
                    $id_user = $id['id_user'];
                }
            }
            $ten_dn= trim(strip_tags($_POST["ten_dn"]));
            $dia_chi= trim(strip_tags($_POST["dia_chi"]));
            $sdt = $_POST['sdt'];
            settype($sdt, "int");
            $an_hien = $_POST['an_hien'];
            settype($an_hien, "int");
            $anh = $_FILES["anh"]["name"];
            move_uploaded_file($_FILES["anh"]["tmp_name"], "images/$anh");
          
            addNewDoanhnghiep($id_user, $ten_dn, $dia_chi, $sdt, $an_hien,$anh);
            $thongbao = "Thêm doanh nghiệp thành công";
            $view = "views/thongbao.php";
            require_once "views/layout.php";
            break;
        case "edit":
            $id_dn = $_GET["id_dn"];
            settype($id_dn, "int");
            $row = getDoanhnghiepByID($id_dn);
            $view = "views/dn-edit.php";
            require_once "views/layout.php";
            break;
        case "update":
            $id_dn = $_POST["id_dn"];
            $ds = getAllDoanhnghiep();
            foreach ($ds as $id) {
                if ($id['id_dn'] == $id_dn) {
                    $id_user = $id['id_user'];
                }
            }
            $user = trim(strip_tags($_POST["user"]));
            $pass = trim(strip_tags($_POST["pass"]));
            $email = trim(strip_tags($_POST["email"]));
            updateUser($id_user, $user, $pass, $email);
            // doanh nghiep
            $ten_dn= trim(strip_tags($_POST["ten_dn"]));
            $dia_chi= trim(strip_tags($_POST["dia_chi"]));
            $sdt = $_POST['sdt'];
            settype($sdt, "int");
            $an_hien = $_POST['an_hien'];
            settype($an_hien, "int");
            $anh = $_FILES["anh"]["name"];
            move_uploaded_file($_FILES["anh"]["tmp_name"], "images/$anh");
            updateDoanhnghiep($id_dn,$id_user,$ten_dn, $dia_chi, $sdt, $an_hien,$anh);
            $ds = getAllDoanhnghiep();
            $view = "views/dn-index.php";
            require_once "views/layout.php";
            break;
        case "delete":
            $id_user = $_GET["id_user"];
            settype($id_user,"int");
            deleteUser($id_user);
            $ds = getAllDoanhnghiep();
            $view = "views/dn-index.php";
            require_once "views/layout.php";
            break;
        case "kiemtrauser":
            if (isset($_GET['user'])) $user = trim(strip_tags($_GET['user']));
            else $user = "";
            if ($user == "") echo "<pan class ='badge badge-danger'>Username không có</pan>";
            else if (checkUserTonTaiChuaDung($user)) echo "<pan class = 'badge badge-danger '>User này đã có người dùng</pan>";
            else echo "<pan class ='badge badge-success'>Bạn có thể dùng User này</pan>";
            break;
        case "kiemtraemail":
            if (isset($_GET['email'])) $email = trim(strip_tags($_GET['email']));
            else $email = "";
            if ($email == "") echo "<pan class ='badge badge-danger'>Email không có</pan>";
            else if (checkEmailTonTai($email)) echo "<pan class = 'badge badge-danger'>Email đã có người dùng</pan>";
            else echo "<pan class ='badge badge-success'>Bạn có thể dùng Email này</pan>";
            break;
    }
    ?>
</body>

</html>