                           <div class="bg-ttcn">
                                
                            <div class="media boder p-3 tt-dau bg-tt">  
                                                           
                                    <img  src="../uploads/<?=$ttsv['anh']?>" onerror=this.src="view/images/avt1.PNG" alt="John Doe" class="mr-3 mt-3 ml-3" style="border-radius: 50%;">                                       
                                    <div class="thongtin1">
                                        <div class=" media-body ml-4"><br>
                                        <h3><?=$ttsv['ho_ten']?> </h3>
                                            <p > Thực tập sinh.</p> 
                                            <hr class="mr-5" style="background: white;width: 98% ;">     
                                            <i class="fa fa-phone mr-3" style="font-size: 12pt; transform: scaleX(-1);"></i>
                                            <?=$ttsv['sdt']?><br>
                                            <i class="fa fa-home mt-3 mr-3" style="font-size: 12pt;"></i> 
                                            <?=$ttsv['dia_chi']?> 
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            
                                <div class="media boder p-3 sv8-12" style="border-radius: 5px;background-image: linear-gradient(-25deg, #d1d1d1 0%, #c1ecfd 100%);">
                                    <div class="row col-sm-12"style="background-image: linear-gradient(-25deg, #ffffff 0%, #ffffff 100%);margin:auto;">
                                        <div  class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mb-2">
                                            <h5 style="padding: 15px 5px;font-weight: 600;">THÔNG TIN TÀI KHOẢN</h5>           
                                        </div>
                                        <div  class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-2 "style="padding: 15px 5px;">
                                            <a class=" btn btn-white-36 " href="index.php?ctrl=sinh_vien&act=user_edit" style="border-radius: 5px;">
                                                <i style="color: black;" class="fa fa-pencil ml-2"></i>
                                                <span class=" text-gray-75 font400 ml-2 mr-2 " style="font-size: 14px;"> Chỉnh sửa</span>
                                            </a>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Tên đăng nhập </p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=$tttk['user']?> </p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Mật khẩu</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=$tttk['pass']?> </p>
                                        </div>
                                        
                                        
                                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mb-2">
                                            <h5 style="padding: 0 5px;font-weight: 600;">THÔNG TIN CÁ NHÂN</h5>           
                                        </div>

                                        <div  class="col-sm-2 col-md-2 col-lg-2 col-xl-2 col-2 mb-2"style="padding: 0px 5px;">
                                            <a class=" btn btn-white-36 " href="index.php?ctrl=sinh_vien&act=ttcn_edit" style="border-radius: 5px;">
                                                <i style="color: black;" class="fa fa-pencil ml-2"></i>
                                                <span class=" text-gray-75 font400 ml-2 mr-2" style="font-size: 14px;"> Chỉnh sửa</span>
                                            </a>
                                        </div>

                                        
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Họ và tên </p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=$ttsv['ho_ten']?> </p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Email</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=$tttk['email']?> </p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Giới tính</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?php if($ttsv['gioi_tinh']==1)echo 'Nam';else echo 'Nữ';?> </p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                            <p style="font-weight: 500;">Ngày sinh</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=date('d/m/Y',strtotime($ttsv['ngay_sinh'])) ?> </p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Địa chỉ</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?=$ttsv['dia_chi']?></p>
                                        </div>
                                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3  ml-4">
                                            <p style="font-weight: 500;">Nơi thực tập</p>           
                                        </div>
                                        <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8  ml-2">
                                            <p>: <?php if($ttsv['trang_thai']==0)echo 'chưa có nơi thực tập' ?></p>
                                        </div>
                                    </div>
                                </div>
                                    
                 
                    