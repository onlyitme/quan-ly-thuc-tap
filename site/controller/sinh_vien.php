<?php 
require_once "../system/database.php";
require_once('model/home.php');
require_once('model/sinh_vien.php');
if(isset( $_SESSION['sname'])&&  $_SESSION['schuc_vu'] == 0){

  $act = "ttcn_index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "ttcn_index":
      $view_sv = "view/ttcn_index.php";
      break;
    case "ttcn_edit":
        $view_sv = "view/ttcn_edit.php";
    break;
    case "user_edit":
      $view_sv = "view/user_edit.php";
  break;
  case "user_update":
        $mat_khau=$_POST['mat_khau'];
        $xac_nhan_mk=$_POST['xac_nhan_mk'];
        $pass=$_POST['pass'];
        $tttk=checktaikhoanbyid($_SESSION['sid']);
        
        if($mat_khau!=$xac_nhan_mk && $pass != $tttk['pass']){
        echo "<script type='text/javascript'>alert('Thông tin điền không chính xác');</script>";
        }else{
          updatematkhau($mat_khau);
          echo "<script type='text/javascript'>alert('Mật Khẩu Đã Được Cập Nhập');</script>";
        }
        $view_sv = "view/ttcn_index.php";
  break;
    case "ttcn_update":
        $ho_ten=$_POST['ho_ten'];
        $mssv=$_POST['mssv'];
        $gioi_tinh=$_POST['gioi_tinh'];

        $anh=$_FILES['anh']['name'];

        $target_dir = "../uploads/";
        $target_file = $target_dir ."$mssv-".basename($anh);
        move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);

        if(isset($anh)&&$anh!=''){
            $anh=$mssv."-".basename($anh);
        }
       
        echo "<script type='text/javascript'>alert(' $anh');</script>";
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        $ngay_sinh=$year.'-'.$month.'-'.$day;
        $sdt=$_POST['sdt'];
        $dia_chi=$_POST['dia_chi'];

        
   updatettcn($ho_ten,$mssv,$gioi_tinh,$ngay_sinh,$anh,$sdt,$dia_chi);
        $view_sv = "view/ttcn_index.php";
    break;
  }
  $view="view/layout_sv.php";
  require_once "view/layout.php";
}else{
    echo "<script type='text/javascript'>alert('Hãy Đăng Nhập Để Coi Thông Tin');</script>";
      $view = "view/home.php";   
          $ds_nn=ds_nn(); 
          require_once "view/layout.php";
}
?>