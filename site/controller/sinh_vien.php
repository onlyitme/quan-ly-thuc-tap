<?php 

require_once "../system/database.php";
require_once('model/home.php');
// require_once "model/home.php"; 

  $act = "ttcn_index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "ttcn_index":
        $view = "view/ttcn_index.php";
      require_once "view/layout_sv.php";
      break;
    case "ttcn_edit":
        $view = "view/ttcn_edit.php";
      require_once "view/layout_sv.php";
    break;
    case "ttcn_update":
        $ho_ten=$_POST['ho_ten'];
        $gioi_tinh=$_POST['gioi_tinh'];

        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        $sdt=$_POST['sdt'];
        $dia_chi=$_POST['dia_chi'];

        
    break;
  }
?>