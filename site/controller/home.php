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
      case "thongtindt":
        $thongtindt= checkdangtuyenbyid($_GET['id_dt']);
        $thongtindn=checkdoanhnghiepbyid($thongtindt['id_dn']);
        $thongtinnganh=checknganhbyid($thongtindt['id_nganh']);
        $view = "view/job-detail.php";
          require_once "view/layout.php";
      break;
      case "xemdoanhnghiep":   
      if (isset($_POST['arr'])){
        $thongtindt= checkdangtuyenbyid($_POST['arr']);
        $thongtindn=checkdoanhnghiepbyid($thongtindt['id_dn']);
        $thongtinnganh=checknganhbyid($thongtindt['id_nganh']);
        require_once 'view/ajax_chitiet_dangtuyen.php';
      }
    break;
      case "listjob":
          if(isset($_GET['id_nganh'])){
            $id_nganh=$_GET['id_nganh'];
            $thongtinnganh=checknganhbyid($id_nganh);
            $tennganh= $thongtinnganh['ten_nganh'];
          }elseif(isset($_SESSION['sid'])&& isset($_GET['id_nganh_sv'])){
            $id_nganh=$_GET['id_nganh_sv'];
            $thongtinnganh=checknganhbyid($id_nganh);
            $tennganh= $thongtinnganh['ten_nganh'];
          }elseif(isset($_GET['id_nganh_sv']) && $_GET['id_nganh_sv']==0 ){
          header("Location: " . $_SERVER["HTTP_REFERER"]);
          echo "<script type='text/javascript'>alert('Hãy đăng nhập để xem chức năng này ');</script>";
          }
          else {$id_nganh= 0 ;
            $tennganh='Tất Cả';
          }
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
        if($checkkhachhang['chuc_vu']==0){
          $_SESSION['sid']=$checkkhachhang['id_user'];
         $seach_kh_byid =  checkkhachhangbyid($_SESSION['sid']);
          $_SESSION['sname']=$seach_kh_byid['ho_ten'];
          header("Location: " . $_SERVER["HTTP_REFERER"]);
        }else
          echo "<script type='text/javascript'>alert('Sẽ chuyển đến trang Doanh Nghiệp');</script>";
          
      }else  {
        $link=substr($_SERVER["HTTP_REFERER"],39);
        echo "<script type='text/javascript'>alert('Tài Khoản Mật Khẩu Không Hợp Lệ');</script>";
       
       if($link=='index.php'||$link=='index.php?ctrl=home&act=login' ) {
          $view = "view/home.php";   
          $ds_nn=ds_nn(); 
          require_once "view/layout.php";}
          else{
            header("Location: " . $_SERVER["HTTP_REFERER"]);
          }
       }
       
      break;
      case "logout":
        unset($_SESSION['sid']);
        unset($_SESSION['sname']);
        header('location:index.php');
        break;
 
    } 
 
?>      