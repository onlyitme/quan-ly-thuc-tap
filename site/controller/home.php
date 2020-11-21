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
      case "xemdoanhnghiep":   
      if (isset($_POST['arr'])){
        // print_r(checkdangtuyenbyid($_POST['arr']));
        $thongtindt= checkdangtuyenbyid($_POST['arr']);
        $thongtindn=checkdoanhnghiepbyid($thongtindt['id_dn']);
        $thongtinnganh=checknganhbyid($thongtindt['id_nganh']);
        echo ' <img src="http://placehold.it/900x200" alt="">
        <div class="row align-items-center  p-3">
            <div class="col-lg-8">
                <h4 class="mb-0">'.$thongtindt['tieu_de'].'</h4>
                <p class="font-weight-bold text-gray mb-0">'.$thongtindn['ten_dn'].'</p>
            </div>
            <div class="col-lg-4 text-right">
                <button type="submit" class="btn btn-info ">Nộp đơn ứng tuyển</button>
            </div>
        </div>
        <div class="row p-3">
            <div class="col-lg-7">
                <div class="mb-3">
                    <h5>Phúc lợi(sẽ thêm sau)</h5>
                    <div class="d-flex small">
                        <div class="col-4">
                            <p><i class="fas fa-folder-plus  text-primary "></i> Chế độ bảo hiểm</p>
                            <p><i class="fas fa-graduation-cap   text-primary "></i> Đào tạo</p>
                        </div>
                        <div class="col-4">
                            <p><i class="fas fa-plane  text-primary  "></i> Du lịch</p>
                            <p><i class="fas fa-sort-numeric-up  text-primary  "></i> Tăng lương</p>
                        </div>
                        <div class="col-4">
                            <p><i class="fas fa-coins  text-primary  "></i> Chế độ thưởng</p>
                            <p><i class="fas fa-business-time  text-primary  "></i> Nghỉ phép năm</p>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Mô tả công việc</h5>
                    <div id="mota" class="col-12">
                    '.$thongtindt['noi_dung'].'
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Yêu cầu công việc</h5>
                    <div id="yeucau" class="col-12">
                    '.$thongtindt['yeu_cau'].'
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Quyền lợi(sẽ thêm sau)</h5>
                    <div id="quyenloi" class="col-12">
                        <p> - Thu nhập cạnh tranh theo năng lực làm việc. - Thưởng lương tháng 13 và hiệu quả hoạt động kinh doanh của công ty 2-3 tháng lương. - Nghỉ mát/team-building hàng năm. - Chế độ BHXH, BHYT, BHTN theo quy định của Pháp luật.
                            - Chế độ ngày nghỉ, lễ tết, được công ty thực hiện theo luật lao động Việt Nam. - Làm việc trong môi trường trẻ năng động, nhiều thử thách và cơ hội phát triển năng lực cá nhân.</p>
                    </div>
                </div>
                <div class="mb-3">
                    <h5>Thông tin khác</h5>
                    <div id="quyenloi" class="col-12">
                        <p>Bằng cấp : Không</p>
                        <p>Hình thức: Nhân viên thực tập</p>
                        <p>Thời gian thực tập: 2 tháng</p>
                        <p>Thời gian làm việc: Thứ 2 - Thứ 6 </br>(Chi tiết cụ thể sẽ liên lạc với Sinh Viên)</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="mb-4">
                    <h5>Địa điểm</h5>
                    <img src="view/images/map.jpg" alt="">
                </div>
                <div class="mb-4 p-3 shadow">
                    <h5 class="border-bottom py-3 mb-3">Thông tin tuyển dụng</h5>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Nơi làm việc</p>
                        <p class="text-gray">Hồ Chí Minh</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Cấp bậc</p>
                        <p class="text-gray">Nhân viên</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Lương</p>
                        <p class="text-gray">Cạnh tranh</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Hết hạn nộp</p>
                        <p class="text-gray">'.date('d/m/yy',strtotime($thongtindt['thoi_gian'])).'</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Ngành nghề</p>
                        <p class="text-gray">'.$thongtinnganh['ten_nganh'].'</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="text-primary">Kinh Nghiệm</p>
                        <p class="text-gray">Không</p>
                    </div>
                </div>
                <div class="mb-4 p-3 shadow">
                    <h5 class="border-bottom py-3 mb-3">Giới thiệu công ty</h5>
                    <div class="d-flex mb-3">
                        <img src="http://placehold.it/900x200" class="col-4 p-0" alt="logo">
                        <p class="font-weight-bold col-8">'.$thongtindn['ten_dn'].'</p>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex ">
                            <p class="w-25"><i class="fas fa-map-marker-alt"></i></p>
                            <p class="col-11"> '.$thongtindn['vi_tri'].'</p>
                        </div>
                        <div class="d-flex ">
                            <p class="w-25"><i class="fas fa-phone-alt"></i></p>
                            <p class="col-11"> '.$thongtindn['sdt'].'</p>
                        </div>
                        <div class="d-flex ">
                            <p class="w-25"><i class="fas fa-people-carry"></i></p>
                            <p class="col-11"> 3500 nhân viên</p>

                        </div>
                        <div class="d-flex">
                            <p class="w-25"><i class="fab fa-internet-explorer"></i></p>
                            <p class="col-11"> <a href="">file:///D:/XamPP/htdocs/quan-ly-thuc-tap/site/view/list-job.html</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';

      }
    break;
      case "listjob":
       
          if(isset($_GET['id_nganh'])){
            $id_nganh=$_GET['id_nganh'];
            $thongtinnganh=checknganhbyid($id_nganh);
            $tennganh= $thongtinnganh['ten_nganh'];
          }else {$id_nganh= 0 ;
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
        if($checkkhachhang['user']==0){
          $_SESSION['sid']=$checkkhachhang['id_user'];
         $seach_kh_byid =  checkkhachhangbyid($_SESSION['sid']);
          $_SESSION['sname']=$seach_kh_byid['ho_ten'];
          header("Location: " . $_SERVER["HTTP_REFERER"]);
        }else
          echo "<script type='text/javascript'>alert('Sẽ chuyển đến trang Doanh Nghiệp');</script>";
      }else  {
        echo "<script type='text/javascript'>alert('Tài Khoản và mật khẩu ko hợp lệ');</script>";
        header("Location: " . $_SERVER["HTTP_REFERER"]);}
      break;
      case "logout":
        unset($_SESSION['sid']);
        unset($_SESSION['sname']);
        header('location:index.php');
        break;
    }  
?>      