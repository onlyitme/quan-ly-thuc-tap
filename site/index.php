<?php
    session_start();
    define("ARR_CONTROLLER", ['home','login']);

    $ctrl ='home';
    if(isset($_GET['ctrl']) == true) $ctrl=$_GET['ctrl'];
    if(in_array($ctrl, ARR_CONTROLLER) == false) die("Ko ton tai!");
    $pathFile = "controller/$ctrl.php";
    if(file_exists($pathFile) == true) require_once $pathFile;
    else echo "Controller $ctrl ko ton tai.!";

?>