<?php

session_start();
if(isset($_SESSION['sid'])&& $_SESSION['sid']>0 $_SESSION['chuc_vu']>0){
date_default_timezone_set("Asia/Ho_Chi_Minh");

    define("ARR_CONTROLLER", ['home','login']);

    $ctrl ='home';
    if(isset($_GET['ctrl']) == true) $ctrl=$_GET['ctrl'];
    if(in_array($ctrl, ARR_CONTROLLER) == false) die("Ko ton tai!");
    $pathFile = "controller/$ctrl.php";
    if(file_exists($pathFile) == true) require_once $pathFile;
    else echo "Controller $ctrl ko ton tai.!";

}else
header("location: dangnhap.php");
?>