<?php
require_once "../system/database.php";
require_once "models/home.php";
  $act = "index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "layout":

          $views = "views/home.php";
          require_once "layout.php";
      break;
    
    }
      ?>