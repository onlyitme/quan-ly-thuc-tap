<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thực tập</title>
    <link rel="shortcut icon" href="view/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <header id="header" class="fixed-top shadow-sm border-bottom bg-light">
        <div class="wrap d-flex justify-content-between align-items-center">
            <div id="header-menu" class="col p-0">
                <button id="sidebarToggle" class="btn btn-light border-right rounded-0 p-4 ">
                            <i class="fas fa-bars"></i>
                            <span class="d-none d-md-inline ml-3">MENU</span>
                    </button>
            </div>
            <a id="header-logo" href="index.php" class="col text-center">
                <img src="view/images/logo-2.png" alt="">
            </a>
            <?php if(isset($_SESSION['sid'])){ ?>
            <div id="header-login" class="col p-0">
                <div class="d-none d-lg-flex justify-content-end h-100 ">
                <?php if(isset($_SESSION['schuc_vu']) && ($_SESSION['schuc_vu']) == 0){ ?>
                    <div class="btn-group" role="group">
                        <a  id="btnGroupDrop1" type="button" class="dropdown-toggle btn bg-tomato rounded-0  h-100 border-left   p-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle mr-2 "></i> <?php $ttsv=checkkhachhangbyid($_SESSION['sid']); 
                                                                        $tttk=checktaikhoanbyid($_SESSION['sid']);
                                                                        echo $ttsv['ho_ten']?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right w-200 " aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=sinh_vien"><i class="fas fa-list-alt mr-2"></i> Kiểm Tra Thông Tin </a> 
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=home"><i class="fas fa-history    mr-2"></i> Lịch Sử Đơn</a>
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=home&act=logout"><i class="fas fa-sign-out-alt   mr-2 "></i> Đăng xuất</a>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="btn-group" role="group">
                        <a data-toggle="modal" data-target="#exampleModal-Nghia" href="#login" class="btn btn-light rounded-0 h-100 border-left p-4" role="button" aria-pressed="true"><i class="fas fa-edit"></i> Đăng Tin</a>
                        <a  id="btnGroupDrop1" type="button" class="dropdown-toggle btn btn-primary  text-light rounded-0  h-100 border-left    p-4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-circle mr-2 "></i> <?=$_SESSION['sname']?>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right  " aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=doanh_nghiep"><i class="fas fa-list-alt mr-2"></i> Kiểm Tra Thông Tin </a> 
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=home"><i class="fas fa-history    mr-2"></i> Danh sách ứng tuyển</a>
                            <a class="dropdown-item" href="<?=SITE_URL?>/?ctrl=home&act=logout"><i class="fas fa-sign-out-alt   mr-2 "></i> Đăng xuất</a>
                        </div>
                    </div>
                <?php }  ?>    
                </div>    
            </div>
            <?php }else { ?> 
            <div id="header-login" class="col p-0">
                <div class="d-none d-lg-flex justify-content-end h-100 ">
                    <a data-toggle="modal" href="#login" class="btn btn-light rounded-0  h-100 border-left   p-4" role="button" aria-pressed="true">SINH VIÊN</a>
                    <a data-toggle="modal" href="#login" class="btn btn-primary  rounded-0  h-100 border-left    p-4" role="button" aria-pressed="true">DOANH NGHIỆP</a>
                </div>
            </div>
           <?php } ?>
        </div>
    </header>
    <!-- Show box login & Box đăng tuyển-->
    <?php if(isset($_SESSION['sid'])){ ?>
        <!-- Chỗ đẻ của Nghĩa dep trai -->
        <div class="modal fade" id="exampleModal-Nghia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content ">
                <div class="modal-header pb-0">
                <div class="alert alert-primary w-100">
                               <h2 class="d-inline">Đăng Tuyển   </h2>
                               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> 
                            </div>  
        

                </div>
                <div class="modal-body">
                <div class="container">
               <div id="doanhnghiep">
                <div class=" row mt-4 m-0 py-3">
                    <div class="Nghia col-12">
                        <div class="col-12">                        
                            <input type="text" class="N-ninput form-control" placeholder="Tiêu đề bài đăng*">
                            <input type="text" class="N-ninput form-control" placeholder="Vị trí thực tập*">
                            <input type="text" class="N-ninput form-control mb-5" placeholder="Địa chỉ làm việc*">
                            <hr class="new my-3">
                            <div class="">
                                <h4 class="text-primary my-4gi">Option cho sinh viên</h4>
                            </div>
                            <div class="row pl-3 mb-1">
                            <div class="N-input mb-5 mr-4 "><input type="number" class="N-ip form-control" placeholder="Lương thấp nhất*">
                                <span class="VND">VND</span></div>
                            <div class="N-input mb-5 "><input type="number" class="N-ip form-control" placeholder="Lương cao nhất*">
                                <span class="VND">VND</span></div>
                            </div>
                         <div class="row pl-3 mb-4">
                            <div class="N-input mb-4 mr-4"><input type="number" class="N-ip form-control" placeholder="thời gian thực tập*">
                                <span class="VND">Tháng</span></div>
                            <div class="N-input mb-4 "><input type="number" class="N-ip form-control"  placeholder="Số lượng cần tuyển*">
                                <span class="VND"></span></div>
                            </div>
                         </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text bg-primary text-white " for="gender3">Hình thức</label>
                                        </div>
                                        <select class="custom-select"  id="gender3">
                                          <option selected>Thực tập sinh</option>
                                        </select>
                                        <select class="custom-select"   id="gender3">
                                            <option value="1" active >Full-time</option>
                                            <option value="2" >Part-time</option>
                                          </select>
                                    </div>
                                </div>
                            </div>
                            <hr class="new my-3">
                            <h4 class="text-primary mb-4">Phúc lợi</h4>
                            <div class="row">
                                <div class="col-6">
                                    <!-- Default inline 3-->
                                    <div class="custom-control custom-checkbox  mb-3">
                                        <input type="checkbox" class="custom-control-input " id="defaultInline3">
                                        <label class="custom-control-label" for="defaultInline3"> <i class="fas fa-award"></i> Chế độ thưởng</label>
                                    </div>
                                    <div class="custom-control custom-checkbox  mb-3">
                                        <input type="checkbox" class="custom-control-input" id="defaultInline4">
                                        <label class="custom-control-label" for="defaultInline4"><i class="	fas fa-atom "></i> Chương trình đào tạo</label>
                                    </div>
                                    <div class="custom-control custom-checkbox  mb-3">
                                        <input type="checkbox" class="custom-control-input" id="defaultInline5">
                                        <label class="custom-control-label" for="defaultInline5"><i class="fa fa-level-up"></i> Tăng lương</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox  mb-3">
                                        <input type="checkbox" class="custom-control-input" id="defaultInline6">
                                        <label class="custom-control-label" for="defaultInline6"><i class="fa fa-laptop"></i> Laptop</label>
                                    </div>
                                    <div class="custom-control custom-checkbox  mb-3">
                                        <input type="checkbox" class="custom-control-input" id="defaultInline2">
                                        <label class="custom-control-label" for="defaultInline2"><i class="fas fa-suitcase"></i> Du lịch</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Default inline 2-->
                            <!-- Default inline 2-->
                            <!-- Default inline 3-->
                            <hr class="new my-3">
                            <h4 class="mb-4 text-primary mt-4">Mô tả công việc</h4>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <hr class="new my-3">
                            <h4 class="mb-3 text-primary mt-4">Yêu cầu công việc</h4>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                            <hr class="new my-3">
                            <h4 class="mb-3 text-primary mt-4">Các thông tin cơ bản khác</h4>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                </div>
            </div>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger mt-3 px-3" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success mt-3 px-3">Cập nhật</button>
            </div>
            </div>
        </div>
        </div>
    <?php }else { ?>
    <div class="modal fade" id="login">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <img src="view/images/logo-2.png" class="w-25" alt="">
                    <button type="button" class="close p-3" data-dismiss="modal">x</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body row ">
                    <div class="d-none d-lg-inline col-6">
                        <img src="view/images/login.jpg" alt="">
                    </div>
                    <div class="col-lg-6 ">
                        <h3>Đăng Nhập</h3>
                        <form action="index.php?ctrl=home&act=login" method="post" class="my-5">
                            <div class="form-group">
                                <label for="">Tên đăng nhập</label>
                                <input type="text" name="user" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="">Mật khẩu</label>
                                <input type="password" name="pass" id="" class="form-control" placeholder="" aria-describedby="helpId">
                                <small id="helpId" class="text-muted"></small>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                        </form>
                        <a href="" class="text-primary">Quên mật khẩu ?</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php } ?>
    
    <!-- Show menu -->
    <nav id="nav-togger" class="border shadow-lg">
        <div class="list-group">
            <div class="d-flex d-lg-none  list-group-item list-group-item-action p-0 mb-3">
                <a data-toggle="modal" href="#login" class="btn btn-light rounded-0  h-100 border w-50  py-3" role="button" aria-pressed="true">SINH VIÊN</a>
                <a data-toggle="modal" href="#login" class="btn btn-primary  rounded-0  h-100 border w-50  py-3" role="button" aria-pressed="true">DOANH NGHIỆP</a>
            </div>
            <button type="button" class="list-group-item list-group-item-action rounded-0   py-3 active ">Trang chủ</button>
            <button type="button" class="list-group-item list-group-item-action rounded-0  py-3">Hỗ trợ</button>
            <button type="button" class="list-group-item list-group-item-action rounded-0  py-3">Liên lạc</button>
            <button type="button" class="list-group-item list-group-item-action rounded-0  py-3">Về chúng tôi</button>
            <button type="button" class="list-group-item list-group-item-action rounded-0  py-3">Hướng dẫn đăng bài</button>
            <button type="button" class="list-group-item list-group-item-action rounded-0  py-3">Hướng dẫn ứng tuyển</button>
        </div>
    </nav>
    <div id="dangtuyen">
        
    </div>
    <div id="overlay-nav"></div>
    <!-- NỘI DUNG CHÍNH -->
    <?php
        if($view == "view/home.php"){      
    ?>
    <section id="banner" class="wrap">
        <div class="banner-img">
        </div>
        <div class="banner-title  text-center">
            <div class="container">
                <p>Thực Chiến</p>
                <p><span class="d-none d-lg-inline">Tham Gia</span> Ứng Tuyển Ngay</p>
                <a href="index.php?ctrl=home&act=listjob" class="btn btn-primary btn-lg rounded-pill mt-5 px-5">Tìm việc </a>
            </div>
        </div>
    </section>
    <?php } ?>
    <main id="main">
        <div class="container">
            <?php include $view; ?>
        </div>
    </main>
    <footer id="footer " class="wrap bg-dark text-light  ">
        <div class="container ">
            <div class="col-3 p-0 ">
                <img src="view/images/logo-2.png " alt=" ">
            </div>
            <h3>Phòng Quan Hệ Doanh Nghiệp</h3>
            <div class="row mt-5 ">
                <div class="col-lg-6 mb-3 ">
                    <h5 class="pb-3 ">Thông tin trường FPT Polytechnic</h5>
                    <div class="row text-gray ">
                        <div class="col-lg-5 small ">
                            <p class="font-weight-bold my-1 "><i class="fas fa-location-circle mr-1 "></i> Cơ sở Hà Nội</p>
                            <p class="m-0 ">Tòa nhà FPT Polytechnic, Phố Trịnh Văn Bô, Nam Từ Liêm, Hà Nội</p>
                            <p><i class="fas fa-phone-alt "></i> <u>(024) 7300 1955</u></p>
                        </div>
                        <div class="col-lg-5 mb-3 small ">
                            <p class="font-weight-bold my-1 "><i class="fas fa-location-circle mr-1 "></i> Cơ sở Hồ Chí Minh</p>
                            <p class="m-0 ">778/B1 Nguyễn Kiệm, P.4, Q. Phú Nhuận, TP. Hồ Chí Minh</p>
                            <p><i class="fas fa-phone-alt "></i> <u> (028) 62523434</u></p>
                        </div>
                        <div class="col-lg-5 mb-3 small ">
                            <p class="font-weight-bold my-1 "><i class="fas fa-location-circle mr-1 "></i> Cơ sở Đà Nẵng</p>
                            <p class="m-0 ">Số 137 Nguyễn Thị Thập, Phường Hòa Minh, Quận Liên Chiểu, TP. Đà Nẵng</p>
                            <p><i class="fas fa-phone-alt "></i> <u>(0236) 3710 999</u></p>
                        </div>
                        <div class="col-lg-5 small ">
                            <p class="font-weight-bold my-1 "><i class="fas fa-location-circle mr-1 "></i> Cơ sở Cần Thơ</p>
                            <p class="m-0 ">Số 288, Nguyễn Văn Linh, phường An Khánh, quận Ninh Kiều, Tp. Cần Thơ</p>
                            <p><i class="fas fa-phone-alt "></i> <u>(0292) 7300 468</u></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 ">
                    <h5 class="pb-3 ">Dành cho doanh nghiệp</h5>
                    <div class="nav flex-column  ">
                        <a class="nav-item nav-link px-0 text-gray" href="# ">Đăng ký để làm đối tác</a>
                        <a class="nav-item nav-link px-0 text-gray" href="# ">Hỗ trợ doanh nghiệp</a>
                        <a class="nav-item nav-link px-0 text-gray" href="# ">Phản hồi của doanh nghiệp</a>
                        <a class="nav-item nav-link px-0 text-gray" href="# ">Tin tức doanh nghiệp</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 ">
                    <h5 class="pb-3 ">Dành cho sinh viên</h5>
                    <div class="nav flex-column ">
                        <a class="nav-item nav-link px-0 text-gray  " href="# ">Đăng ký thực tập sớm</a>
                        <a class="nav-item nav-link px-0 text-gray " href="# ">Hỗ trợ sinh viên</a>
                        <a class="nav-item nav-link px-0 text-gray " href="# ">Phản hồi của sinh viên</a>
                        <a class="nav-item nav-link px-0 text-gray " href="# ">Tin tức sinh viên</a>
                    </div>
                </div>
            </div>
            <div class="row text-gray text-center ">
                <p class="col">Copyright <i class="fa fa-copyright mx-2 " aria-hidden="true "></i> 2020 Bản quyền thuộc về <b>Group 6</b></p>
            </div>
        </div>
    </footer>
    <!-- JS Boostrap --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <!-- JS tynyint -->
    <script src="https://cdn.tiny.cloud/1/qtyaj3v4ktk0l2i14oqdby9a72wog89twljoleu6f9syjbvp/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            //   toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
        });
    </script>
        <!-- My script -->
    <script src="view/js/script.js "></script>
</body>

</html>