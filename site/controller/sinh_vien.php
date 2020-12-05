<?php 
require_once "../system/database.php";
require_once('model/home.php');
require_once('model/sinh_vien.php');
if(isset( $_SESSION['sname'])&&  $_SESSION['schuc_vu'] == 0){

  $act = "ttcn_index";
  if(isset($_GET["act"])==true) $act=$_GET["act"];
  switch ($act) {
    case "ttcn_index":
      $view_sv = "view/ttcn_index1.php";
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
        
        if($mat_khau == $xac_nhan_mk && $pass == $tttk['pass']){
          updatematkhau($mat_khau);
          echo "<script type='text/javascript'>alert('Mật Khẩu Đã Được Cập Nhập');</script>";
        }else{
          echo "<script type='text/javascript'>alert('Thông tin điền không chính xác');</script>";
         
        }
        $view_sv = "view/ttcn_index.php";
  break;
    case 'ttcn_upload_anh':
      if(isset($_FILES['file']['name'])){
        $mssv = $_SESSION['sid_sv'];
        $anh=$_FILES['file']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir .$mssv.".png";
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)){
            update_avtsv($target_file);
            echo($target_file);
        }
      }else $anh='';
      exit();
      break;
      case "ttcn_update":
        $ho_ten=$_POST['ho_ten'];
        $mssv=$_POST['mssv'];
        $gioi_tinh=$_POST['gioi_tinh'];

       if(isset($_FILES['anh']['name'])){
        $anh=$_FILES['anh']['name'];
        $target_dir = "../uploads/";
        $target_file = $target_dir ."$mssv-".basename($anh);
        move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file);

        if(isset($anh)&&$anh!=''){
            $anh=$mssv."-".basename($anh);
        }}else $anh='';
       
        $day=$_POST['day'];
        $month=$_POST['month'];
        $year=$_POST['year'];

        $ngay_sinh=$year.'-'.$month.'-'.$day;
        $sdt=$_POST['sdt'];
        $dia_chi=$_POST['dia_chi'];

        if(isset($_POST['email'])){
          updateemail($_POST['email']);
        }
        
   updatettcn($ho_ten,$mssv,$gioi_tinh,$ngay_sinh,$anh,$sdt,$dia_chi);
   suatrangthai();
        $view_sv = "view/ttcn_index.php";
    break;
    case "danh_sach_don":
      $phieu_dk_all=thongtindkallbyid();
      $view_sv = "view/danh_sach_don.php";
    break;
    case "xac_thuc_sv":
      xacthuc_tt_dt($_POST['id']); 
      $tt_phieu_dk= checkphieudkinbyid($_POST['id']);

      $tt_dang_tuyen= checkdangtuyenbyid($tt_phieu_dk['id_dt']);
      $dem =  $tt_dang_tuyen['sl_sv_dk'];
      $dem++;
      $id_dt =  $tt_dang_tuyen['id_dt'];
      them_sl_sv_dk($dem,$id_dt);
      huy_dk_dt();
   exit();
    break;
    case "cv_index":
      $thongtincv=thongtincv();
      $view_sv = "view/cv_index.php";
    break;
    case "cv_edit":
      if(isset($_GET['trang']))$i=$_GET['trang'];else $i=0;
      $thongtincv=thongtincv();
      if($i==1)$view_sv = "view/cv_edit_1.php";
      elseif($i==2)$view_sv = "view/cv_edit_2.php";
      elseif($i==3)$view_sv = "view/cv_edit_3.php";
      else $view_sv = "view/cv_edit.php";
    break;
    case "cv_update":
      if(isset($_GET['trang']))$i=$_GET['trang'];else $i=0;
      if($i==0){
        $tieu_de=$_POST['tieu_de'];
        $trinh_do=$_POST['trinh_do'];
        $noi_lam_viec=$_POST['noi_lam_viec'];
        $muc_tieu_nghe_nghiep=$_POST['muc_tieu_nghe_nghiep'];
        $ky_nang_so_truong=$_POST['ky_nang_so_truong'];
        $so_thich=$_POST['so_thich'];
        $ky_nang_dac_biet=$_POST['ky_nang_dac_biet'];
        $word=$_POST['word'];
        $excel=$_POST['excel'];
        $power_point=$_POST['power_point'];
        $outlook=$_POST['outlook'];
        $ung_dung_khac=$_POST['ung_dung_khac'];
        $av_nghe=$_POST['av_nghe'];
        $av_noi=$_POST['av_noi'];
        $av_doc=$_POST['av_doc'];
        $av_viet=$_POST['av_viet'];
        $ngon_ngu_khac=$_POST['ngon_ngu_khac'];
        $ngay_cap_nhap=date("Y/m/d");
        updatecv($tieu_de,$trinh_do,$noi_lam_viec,$muc_tieu_nghe_nghiep,$ky_nang_so_truong,$so_thich,$ky_nang_dac_biet,$word,$excel,$power_point,$outlook,$ung_dung_khac,$av_nghe,$av_noi,$av_doc,$av_viet,$ngon_ngu_khac,$ngay_cap_nhap);
      }elseif($i==1){
        $tieu_de=$_POST['tieu_de'];
        $trinh_do=$_POST['trinh_do'];
        $noi_lam_viec=$_POST['noi_lam_viec'];
        $muc_tieu_nghe_nghiep=$_POST['muc_tieu_nghe_nghiep'];
        $ngay_cap_nhap=date("Y/m/d");
        updatecv_1($tieu_de,$trinh_do,$noi_lam_viec,$muc_tieu_nghe_nghiep,$ngay_cap_nhap);
      }
      elseif($i==2){
        $ky_nang_so_truong=$_POST['ky_nang_so_truong'];
        $so_thich=$_POST['so_thich'];
        $ky_nang_dac_biet=$_POST['ky_nang_dac_biet'];
        $ngay_cap_nhap=date("Y/m/d");
        updatecv_2($ky_nang_so_truong,$so_thich,$ky_nang_dac_biet,$ngay_cap_nhap);
      }
      elseif($i==3){
        $word=$_POST['word'];
        $excel=$_POST['excel'];
        $power_point=$_POST['power_point'];
        $outlook=$_POST['outlook'];
        $ung_dung_khac=$_POST['ung_dung_khac'];
        $av_nghe=$_POST['av_nghe'];
        $av_noi=$_POST['av_noi'];
        $av_doc=$_POST['av_doc'];
        $av_viet=$_POST['av_viet'];
        $ngon_ngu_khac=$_POST['ngon_ngu_khac'];
        $ngay_cap_nhap=date("Y/m/d");
        updatecv_3($word,$excel,$power_point,$outlook,$ung_dung_khac,$av_nghe,$av_noi,$av_doc,$av_viet,$ngon_ngu_khac,$ngay_cap_nhap);
      }
      echo "<script type='text/javascript'>alert('Cập Nhập Hồ Sơ Thành Công');</script>";
      $thongtincv=thongtincv();
      $view_sv = "view/cv_index.php";
    break;
    case "hoang":
      $view_sv = "view/hoang.php";

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