<script language="javascript">
    function nopdonungtuyen(id_dt){
            var nguyen_vong = $("textarea[name=nd-nguyenvong]").val();
            
        $.ajax({
            type: "post",
            url: "index.php?act=nopdonungtuyen",
            data: {nguyen_vong: nguyen_vong,id_dt: id_dt,jobdetail: 'oke'},
            success: function (response) {
                $("#thongtindt").html(response)
                location.reload();
            }
        });
      }
      function xoaphieudk(id_sv,id_dt){
        var y = confirm("Bạn chắc chắn muốn hủy đơn ứng tuyển của mình chứ ?");
        if(y == true){
            $.ajax({
            type: "post",
            url: "index.php?act=xoadonungtuyen",
            data: {id_sv: id_sv, id_dt: id_dt},
            success: function (response) {
                location.reload();
            }
        });
        }
        
      }
</script>
<div class="d-none d-md-block detail-job_inf p-0 shadow">
 <?php 
 $phuc_loi1='';$phuc_loi2='';$phuc_loi3='';$phuc_loi4='';$phuc_loi5='';$phuc_loi6='';
 if($thongtindt['che_do_bao_hiem'] == 1) $phuc_loi1= '<p><i class="fas fa-folder-plus  text-primary "></i> Chế độ bảo hiểm</p>';
 if($thongtindt['dao_tao'] == 1) $phuc_loi2= '<p><i class="fas fa-graduation-cap   text-primary "></i> Đào tạo</p>';
 if($thongtindt['du_lich'] == 1) $phuc_loi3= '<p><i class="fas fa-plane  text-primary  "></i> Du lịch</p>';
 if($thongtindt['tang_luong'] == 1) $phuc_loi4= '<p><i class="fas fa-sort-numeric-up  text-primary  "></i> Tăng lương</p>';
 if($thongtindt['che_do_thuong'] == 1) $phuc_loi5= '<p><i class="fas fa-coins  text-primary  "></i> Chế độ thưởng</p>';
 if($thongtindt['nghi_phep_nam'] == 1) $phuc_loi6= '<p><i class="fas fa-business-time  text-primary  "></i> Nghỉ phép năm</p>';
 if($thongtindt['kinh_nghiem'] == 0) $kinh_nghiem='không';else $kinh_nghiem='cần';
 if($thongtindt['thoi_gian_lam_viec'] == 0) $thoi_gian_lam_viec='Thứ 2 - Thứ 6';
 elseif ($thongtindt['thoi_gian_lam_viec'] == 1) $thoi_gian_lam_viec='Thứ 2 - Thứ 7';
 else $thoi_gian_lam_viec='Cả tuần';
 if($thongtindt['full_part_time'] == 0) $full_part_time='Part Time';else $full_part_time='full Time';
 if($thongtindt['vi_tri'] == 0) $vi_tri='Nhân viên thực tập';else $vi_tri='Nhân viên chính thức';
 $noi_lam_viec=$thongtindn['tinh_tp'];
 $luong=$thongtindt['luong'];
 if(isset($_SESSION['schuc_vu']) && ($_SESSION['schuc_vu']) == 0){
    if(is_array(checkphieudkin($_SESSION['sid_sv'],$thongtindt['id_dt'])) ){
        $button_nopdon = '<button type="button" onclick="xoaphieudk('.$_SESSION['sid_sv'].','.$thongtindt['id_dt'].')" class="btn btn-warning"> <i class="fas fa-times-circle"></i> Huỷ đơn đăng ký</button>';        
    }
    else $button_nopdon = '<button class="btn btn-info" data-toggle="modal" data-target="#nguyenvong"">Nộp đơn ứng tuyển <i class="fas fa-hand-rock ml-3"></i></button>';
}
else $button_nopdon = "";
 echo ' <img src="../uploads/'.$thongtindn['banner'].'" onerror=this.src="http://placehold.it/300x200">
 <div class="row align-items-center border rounded shadow-sm p-5 bg-light">
     <div class="col-lg-8 ">
         <h4 class="mb-0">'.$thongtindt['tieu_de'].'</h4>
         <p class="font-weight-bold text-gray mb-0">'.$thongtindn['ten_dn'].'</p>
     </div>
     <div class="col-lg-4 text-right">
     '.$button_nopdon.'
         <!-- baokun -->
         <div class="modal fade" id="nguyenvong" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
             <div class="modal-dialog" role="document">
                 <div class="modal-content">
                     <form action="javascript:nopdonungtuyen('.$thongtindt['id_dt'].')">
                         <div class="modal-header  alert  bg-info text-light">
                             <h3 class="modal-title font-weight-bold"><i class="fas fa-pen-alt"></i> Nguyện Vọng</h5>
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                     <span aria-hidden="true">&times;</span>
                                 </button>
                         </div>
                         <div class="modal-body p-0">
                             <textarea name="nd-nguyenvong" id="nd_nguyenvong" class="form-control w-100 p-3 border-0 shadow-none"  rows="6" placeholder="Hãy điền nguyện vọng của bạn để được tuyển dụng nào !"></textarea>
                         </div>
                         <div class="modal-footer">
                             <button type="submit" class="btn btn-info px-5">Xác nhận</button>
                         </div>
                     </form>
                 </div>
             </div>
         </div>   
     </div>
 </div>
 <div class="row p-5">
     <div class="col-lg-7">
         <div class="mb-3">
             <h5>Phúc lợi</h5>
             <div class="d-flex small">
                 <div class="col-4">
                     '.$phuc_loi1.'
                     '.$phuc_loi2.'
                 </div>
                 <div class="col-4">
                 '.$phuc_loi3.'
                 '.$phuc_loi4.'                                                   
                     
                     
                 </div>
                 <div class="col-4">
                 '.$phuc_loi5.'
                 '.$phuc_loi6.'
                     
                     
                 </div>
             </div>
         </div>
         <div class="mb-3">
             <h5>Mô tả công việc</h5>
             <div id="mota" class="col-12">
             '.$thongtindt['mo_ta'].'
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
           
                 <p>Hình thức: '.$vi_tri.'</p>
                 <p>Thời gian thực tập: '.$thongtindt['thoi_gian_tt'].' tháng</p>
                 <p>Thời gian làm việc: '.$thoi_gian_lam_viec.' ( '.$full_part_time.' ) </br>(Chi tiết cụ thể sẽ liên lạc với Sinh Viên)</p>
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
                 <p class="text-gray">'.$noi_lam_viec.'</p>
             </div>
             <div class="d-flex justify-content-between">
                 <p class="text-primary">Cấp bậc</p>
                 <p class="text-gray">Nhân viên</p>
             </div>
             <div class="d-flex justify-content-between">
                 <p class="text-primary">Lương</p>
                 <p class="text-gray">'.$luong.' $ </p>
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
                 <p class="text-gray">'.$kinh_nghiem.'</p>
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
                     <p class="col-11"> '.$thongtindn['dia_chi'].$thongtindn['phuong_xa'].$thongtindn['quan_huyen'].$thongtindn['tinh_tp'].'</p>
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
 ?>
        </div>