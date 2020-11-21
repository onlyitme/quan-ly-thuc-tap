<script language="javascript">
      function get_content(a)
      { 
        var html = document.getElementById(a).value;

        $.ajax({
            type: "post",
            url: "index.php?act=xemdoanhnghiep",
            data: {arr: html},
            success: function(data) {
              $("#thongtindt").html(data)
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
                            <a href=""><h5 class="text-dark mt-0 " ><?=$thongtinnganh['ten_nganh']?></h5></a>
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
                                                                   
        <div class="d-none d-md-block col-8 detail-job_inf p-0" id="thongtindt">
           <h1>Hãy chọn bài đăng bất kì để coi thông tin</h1>
        </div>                                                                                                                                            
    </div>
</div>