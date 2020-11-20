<?php 

require_once "../system/database.php";
require_once('model/home.php');
// require_once "model/home.php"; 

  $act = "index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "index":
          $view = "view/home.php";   
          // $view = "view/list-job.php";
          // $view = "view/job-detail.php";
          $ds_nn=ds_nn(); 
          require_once "view/layout.php";
      break;
      case "listjob":
          if(isset($_GET['id_nganh'])){
            $id_nganh=$_GET['id_nganh'];
          }else $id_nganh= 0 ;
          $thongtindangtuyen=thongtindangtuyen($id_nganh);
          $coutdangtuyen= coutdangtuyen($id_nganh);
          $view = "view/list-job.php";
        require_once "view/layout.php";
    break;
    case "chitietdangtuyen": 
      if (isset($_GET['iddangtuyen'])){
        echo "<script type='text/javascript'>alert('addaa');</script>";
        echo 'aa';
      }
    case "login":
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      $checkkhachhang=checkkhachhang($user,$pass);
      if(isset($checkkhachhang) && $checkkhachhang!=''){	
        if($checkkhachhang['user']==0){
          $_SESSION['sid']=$checkkhachhang['id_user'];
         $seach_kh_byid =  checkkhachhangbyid($_SESSION['sid']);
          $_SESSION['sname']=$seach_kh_byid['ho_ten'];
          if(isset($_GET['id_nganh'])){
            $id_nganh=$_GET['id_nganh'];
          }else $id_nganh= 0 ;
          $thongtindangtuyen=thongtindangtuyen($id_nganh);
          $coutdangtuyen= coutdangtuyen($id_nganh);
          $view = "view/list-job.php";
          require_once "view/layout.php";
        }else
          echo "<script type='text/javascript'>alert('Sẽ chuyển đến trang Doanh Nghiệp');</script>";
      }else  {
        echo "<script type='text/javascript'>alert('Tài Khoản và mật khẩu ko hợp lệ');</script>";
        $view = "view/home.php";   
        $ds_nn=ds_nn(); 
  require_once "view/layout.php";}
      break;
      case "logout":
        unset($_SESSION['sid']);
        unset($_SESSION['sname']);
        header('location:index.php');
        break;
    }  
?>      