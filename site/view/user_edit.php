 
                            <div class="media boder p-3 tt-dau bg-tt">                             
                                <a href="#">
                                    <img  src="../uploads/<?=$ttsv['anh']?>" onerror=this.src="view/images/avt1.jpg" alt="John Doe" class="mr-3 mt-3 ml-3 " >
                                </a>                 
                                <div class="thongtin1">
                                    <div class=" media-body ml-4"><br>
                                        
                                        <h3><?=$ttsv['ho_ten']?> </h3>
                                        <p style="width: 100%; "> Thực tập sinh.</p> 
                                        <hr class="mr-4" style="background: white;width: 98% ;float: left;">     
                                        <i class="fa fa-phone mr-3" style="font-size: 12pt; transform: scaleX(-1);"></i>
                                       
                                        <?=$ttsv['sdt']?>  <br>
                                        <i class="fa fa-home mt-3 mr-3" style="font-size: 12pt;"></i> 
                                       
                                           <?=$ttsv['dia_chi']?> 
                                        </div>
                                </div>
                            </div>
                         <form action="index.php?ctrl=sinh_vien&act=user_update" method="post" id="capnhapuser" enctype="multipart/form-data">
                            <div class="media boder p-3 sv8-12 mt3">
                                <div class="row col-sm-12">
                                    <div  class="col-12 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                                        <h5 style="border-left: 5px rgb(6, 2, 219) solid;padding: 0 5px;">Thay đổi mật khẩu</h5>           
                                    </div>                                   

                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Mật Khẩu Mới</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Mật Khẩu Mới" name="mat_khau" id="ho_ten"></p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Nhập Lại Mật Khẩu</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Nhập Lại Mật Khẩu" name="xac_nhan_mk" id="ho_ten"></p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Nhập Mật Khẩu Cũ</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2"  placeholder="Nhập Mật Khẩu Cũ" name="pass" id="ho_ten"></p>
                                    </div>

                                    <div class="col-12 text-center mt-4">
                                       
                                            <button class="buttoncapnhat ml-4" type="submit" >
                                            <svg style="color: white;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                                <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                                            </svg>
                                            Cập nhật
                                        </button>
                                        <button class="buttonhuy ml-2" type="button" > 
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                            Hủy
                                        </button>
                                        
                                    </div>                                    
                                </div>    
                            </div>
                            </form>
  
    
                       