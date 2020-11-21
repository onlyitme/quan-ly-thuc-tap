<script language="javascript">
      function get_content(a)
      { 
        var html = document.getElementById(a).value;

        $.ajax({
            type: "post",
            url: "index.php?act=xemdoanhnghiep",
            data: {arr: html},
            success: function(data) {
              var data =  JSON.parse(data);
              console.log(data.tieu_de)
              $("#tieude").html(data.tieu_de)
            }
          });
        
      }
      
       
    </script>
<div id="list-job">
    <div class="row bg-light shadow-sm  py-3 ">
        <form action="" method="post" class="d-lg-flex col-lg-9">
            <input type="text" class="form-control mr-2 mb-2" name="" id="" aria-describedby="helpId" placeholder="Tên công ty, chức danh">
            <input type="text" class="form-control mr-2 mb-2" name="" id="" aria-describedby="helpId" placeholder="Tất cả ngành nghề">
            <input type="text" class="form-control mr-2 mb-2" name="" id="" aria-describedby="helpId" placeholder="Tất cả địa điểm">
            <button type="submit" class="btn btn-dark col-lg-1 mb-2"><i class="fas fa-search"></i></button>
        </form>
        <div class="col-lg-3 d-flex flex-wrap">
            <a href="index.php?act=listjob&id_nganh=<?php $idnganhsv=checkkhachhangbyid($_SESSION['sid']); echo $idnganhsv['id_nganh']?>" class="btn btn-outline-dark form-control overflow-hidden col mr-3"><i class="fas fa-filter"></i> Ngành của bạn</a>
            <div class="text-right px-0">
                <button id="list-grid" class="btn btn-success mr-2"><i class="fas fa-th-large"></i></button>
                <button id="list-inf" class="btn btn-warning"><i class="fas fa-th-list  text-light "></i></button>
            </div>
        </div>
    </div>
    <div class="row detail-job shadow-sm ">
        <div class="col  p-lg-0">
            <div class="d-flex justify-content-between  border-bottom border-top py-2 px-3">
                <h5>Hiện Có <?php echo $coutdangtuyen; ?> Việc Làm <?php echo $tennganh ?></h5>
                <select name="" id="" class="small text-gray border-0">
                    <option value="">Cập Nhập</option>
                    <option value="">Thời Gian</option>
                </select>
            </div>
            <div class="detail-job_list d-flex flex-wrap small">
                <?php
                foreach($thongtindangtuyen as $thongtindangtuyen){
                    $thongtindn= checkdoanhnghiepbyid($thongtindangtuyen['id_dn']);
                    $thongtinnganh=checknganhbyid($thongtindangtuyen['id_nganh']);
                ?>
                <button type="button" class="list-group-item list-group-item-action px-0" value="<?=$thongtindangtuyen['id_dt']?>" id="<?=$thongtindangtuyen['id_dt']?>"  onclick="get_content(<?=$thongtindangtuyen['id_dt']?>)" >
                    <div class="media" >
                        <img class="card-img-top col-3" src="../uploads/<?=$thongtindangtuyen['anh']?>" onerror=this.src="http://placehold.it/300x200" alt="Card image cap ">
                        <div class="media-body text-gray text-left">
                            <a href=""><h5 class="text-dark mt-0 "><?=$thongtinnganh['ten_nganh']?></h5></a>
                            <p class="font-weight-bold "><?=$thongtindn['ten_dn']?></p>
                            <p class="text-info"><i class="fas fa-coins    "></i> Lương: <?=$thongtindangtuyen['luong']?> $</p>
                            <p><i class="fas fa-map-marker-alt    "></i> <?=$thongtindangtuyen['vi_tri']?></p>
                            <p ><i class="fas fa-calendar-alt "></i> Hạn chót: <?php $today = date("Y-m-d");
                                                                                    $expire = $thongtindangtuyen['thoi_gian'];     
                                                                                    $today_time = strtotime($today);
                                                                                    $expire_time = strtotime($expire);
                                                                                    if ($expire_time < $today_time){
                                                                                        echo '<strong style="color:red">hết hạn nộp</strong>';
                                                                                    }else echo  date('d/m/yy',strtotime($expire));
                                                                                    ?></p>
                        </div>
                        </div>
                </button>
                <?php } ?>
          
            </div>
        </div>
                                                                   
                                                                              
        <div class="d-none d-md-block col-8 detail-job_inf p-0" >
            <img src="http://placehold.it/900x200" alt="">
            <div class="row align-items-center  p-3">
                <div class="col-lg-8">
                    <h4 class="mb-0" id='tieude'>Tiêu đề</h4>
                    <p class="font-weight-bold text-gray mb-0">Tên công ty</p>
                </div>
                <div class="col-lg-4 text-right">
                    <button type="submit" class="btn btn-info ">Nộp đơn ứng tuyển</button>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-7">
                    <div class="mb-3">
                        <h5>Phúc lợi</h5>
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
                            <p>Be sure to have your pages set up with </p>
                            <p> Put it all together and your pages should look like this:</p>
                            <p>the latest design and development standards. That means using an HTML5 doctype and including a viewport meta tag for proper responsive behaviors. </p>
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5>Yêu cầu công việc</h5>
                        <div id="yeucau" class="col-12">
                            - Tốt nghiệp Cao đẳng, Đại học chuyên ngành Tài chính - Kế toán. Độ tuổi từ 22 - 28 tuổi. - Có ít nhất 1 năm kinh nghiệm trong lĩnh vực liên quan. - Có khả năng tổng hợp và hướng dẫn, xây dựng kế hoạch để thực hiện nhiệm vụ được phân công - Có thể làm
                            việc theo nhóm và độc lập. - Sử dụng thành thạo vi tính văn phòng, ERP và phần mềm kế toán - Có khả năng tổ chức công việc, thuyết phục tốt.
                        </div>
                    </div>
                    <div class="mb-3">
                        <h5>Quyền lợi</h5>
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
                            <p>Thời gian thử việc: 2 tháng</p>
                            <p>Độ tuổi : 20-28</p>
                            <p>Thời gian làm việc: Thứ 2 - Thứ 6</p>
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
                            <p class="text-gray">30/10/2010</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p class="text-primary">Ngành nghề</p>
                            <p class="text-gray">Thiết kế Website</p>
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
                            <p class="font-weight-bold col-8">Tên công ty</p>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex ">
                                <p class="w-25"><i class="fas fa-map-marker-alt"></i></p>
                                <p class="col-11"> 123 abv, phường 15, q.abv</p>
                            </div>
                            <div class="d-flex ">
                                <p class="w-25"><i class="fas fa-phone-alt"></i></p>
                                <p class="col-11"> Máđá áđâsd</p>
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
            </div>
        </div>
    </div>
</div>