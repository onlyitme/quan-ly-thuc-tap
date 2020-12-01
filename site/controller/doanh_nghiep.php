<?php

require_once "../system/database.php";
require_once "model/home.php"; 
require_once "model/doanh_nghiep.php"; 

$act = "index";
if (isset($_GET["act"]) == true) $act = $_GET["act"];
switch ($act) {
    case "index":
        $ds = getAllDoanhnghiep();
        $view = "view/dn_index.php";
        require_once "view/layout.php";
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
        $dia_chi = trim(strip_tags($_POST["dia_chi"]));
        $sdt = $_POST['sdt'];
        settype($sdt, "int");
        $an_hien = $_POST['an_hien'];
        settype($an_hien, "int");
        $anh = $_FILES["anh"]["name"];
        move_uploaded_file($_FILES["anh"]["tmp_name"], "images/$anh");
        updateDoanhnghiep($id_dn, $id_user, $ten_dn, $dia_chi, $sdt, $an_hien, $anh);
        $ds = getAllDoanhnghiep();
        $view = "views/dn_index.php";
        require_once "views/layout.php";
        break;
    case "tttk":
        $view_dn = "view/dn_tttk.php";
        break;
    case "tdmk":
        $view_dn = "view/dn_tdmk.php";
    break;
    case 'taodangtuyen':
        # code...
        break;
    
  }
  $view = "view/layout_dn.php";
  require_once "view/layout.php";
