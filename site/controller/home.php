<?php
require_once "../system/database.php";
// require_once "model/home.php"; 
  $act = "index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "index":
          $view = "view/home.php";
          // $view = "view/list-job.php";

          require_once "view/layout.php";
      break;
    }
?>      