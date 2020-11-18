          <div id="home">
                <div class="row">
                    <div class="home-line"></div>
                    <div class="home-note col-12  text-center">
                        <h4 class=" m-auto">Tham gia ứng tuyển công việc thực tập</h4>
                        <p class="mt-2">Sẽ giúp bạn có đầy đủ kỹ năng thực tế để tạo ra những sản phẩm sáng tạo, tinh tế và phù hợp.</p>
                    </div>
                </div>
                <?php
                require_once('model/home.php');
                $ds_nn=ds_nn();
                foreach($ds_nn as $ds_nn){ $ds_nganh=ds_nganh($ds_nn['id_nn']); ?>    

                <div class=" row home-list-job">
                    <div class="col-12">
                        <!-- MENU -->
                        <h3 class="mb-5"><?=$ds_nn['ten_nn']?></h3>
                        <ul class=" nav nav-tabs ">
                            <?php
                             $i=1;
                            foreach($ds_nganh as $ds_nganh){
                               $a=$ds_nganh['id_nganh'];
                            ?>
                            <li class="nav-item ">
                                <a class="nav-link <?php if($i==1) echo 'active';?>" data-toggle="tab" href="#menu<?=$a.$i?>"><?=$ds_nganh['ten_nganh']?></a>
                            </li>
                            <?php $i= $i + 1; } ?>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <?php 
                             $ds_nganh=ds_nganh($ds_nn['id_nn']);
                             $k=1;
                            foreach($ds_nganh as $ds_nganh){ 
                                $a=$ds_nganh['id_nganh'];
                                $ds_dt=ds_dt($ds_nganh['id_nganh']);
                                ?>
                            <div id="menu<?=$a.$k?>" class="tab-pane <?php if($k==1) echo 'active';?>">
                                <div class="row d-flex flex-wrap ">
                                <?php $dem=1; foreach($ds_dt as $ds_dt){ if($dem>4) break; ?>
                                    <div class="col-lg-3 col-md-6 mt-3 float-left">
                                        <div class="card">
                                            <img class="card-img-top " src="../uploads/<?=$ds_dt['anh']?>" onerror=this.src="../uploads/700x400.png" alt="Card image cap ">
                                            <div class="card-body small">
                                                <h5 class="card-title "><?=$ds_dt['tieu_de']?></h5>
                                                <a href="" class="card-text ">Công ty a</a>
                                                <p class="card-text text-gray ">~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</p>
                                                <p class="card-text "><i class="fas fa-map-marker-alt    "></i> Hồ Chí Minh</p>
                                                <p class="card-text text-info  "><i class="fas fa-coins   text-warning    "></i> Mức lương: 100.000 ~ 200.000</p>
                                                <p class="card-text  text-tomato"><i class="fas fa-calendar-alt   text-primary "></i> Hạn chót: 25/09/20</p>
                                                <a href="# " class="btn btn-outline-primary font-weight-bold float-right mt-3">Xem chi tiết <i class="fas fa-align-right    "></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php  $dem++;}?>
                                   <?php if($dem>4) echo'<div class=" col-12 mt-4">
                                        <p class=" text-center border-top p-3"><a href="" class=" text-primary">Xem thêm -></a></p>
                                    </div>';?> 
                                    
                                </div>
                                </div>
                    <?php 
                  $k++;  } ?>                                          
            </div></div>                  
                <?php } ?>                           