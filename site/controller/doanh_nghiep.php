<?php 

require_once "../system/database.php";
require_once "model/home.php"; 

  $act = "index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "index":
        $view_dn = "view/dn_index.php";
    break;
    case "dshs":
        $view_dn = "view/dn_dshs.php";
    break;
    case "tttk":
        $view_dn = "view/dn_tttk.php";
    break;
    case "tdmk":
        $view_dn = "view/dn_tdmk.php";
    break;
    
  }
  $view = "view/layout_dn.php";
  require_once "view/layout.php";
