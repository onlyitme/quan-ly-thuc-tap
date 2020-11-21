<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý thực tập</title>
    <link rel="shortcut icon" href="view/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
</head>

<body>
    <header id="header" class="fixed-top shadow-sm border-bottom bg-light">
        <div class="wrap d-flex justify-content-between align-items-center">
            <div id="header-menu" class="col p-0">
                <button id="sidebarToggle" class="btn btn-light border-right rounded-0 p-4">
                            <i class="fas fa-bars"></i>
                            <span class="d-none d-md-inline ml-3">MENU</span>
                    </button>
            </div>
            <a id="header-logo" href="#" class="col text-center">
                <img src="view/images/logo-2.png" alt="">
            </a>
            
           <?php if(isset($_SESSION['sid'])){
               echo '<ul class="navbar-nav ml-auto ml-md-0 mr-5">
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> '.$_SESSION['sname'].'</a>
                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                       <a class="dropdown-item" href="'.SITE_URL.'/?ctrl=home">Kiểm Tra Thông Tin</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="'.SITE_URL.'/?ctrl=home">Lịch Sử Đơn</a>
                       <div class="dropdown-divider"></div>
                       <a class="dropdown-item" href="'.SITE_URL.'/?ctrl=home&act=logout">Đăng xuất</a>
                   </div>
               </li>
           </ul>' ; }else {
               ?>
                <div id="header-login" class="col p-0">
                <div class="d-none d-lg-flex justify-content-end h-100 ">
                    <a data-toggle="modal" href="#login" class="btn btn-light rounded-0  h-100 border-left  font-weight-500 p-4" role="button" aria-pressed="true">SINH VIÊN</a>
                    <a data-toggle="modal" href="#login" class="btn btn-primary  rounded-0  h-100 border-left   font-weight-500 p-4" role="button" aria-pressed="true">DOANH NGHIỆP</a>
                </div>
            </div>
           <?php } ?>
        </div>
    </header>
    <!-- Show box login -->
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
                        <!-- <h3>Đăng Nhập</h3> -->
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
                <a href="" class="btn btn-primary btn-lg rounded-pill mt-5 px-5">Tìm việc </a>
            </div>
        </div>
    </section>
    <?php } ?>
    <main id="main">
        <div class="container">
            <?php include $view; ?>
        </div>
    </main>
    <footer id="footer " class="wrap bg-dark text-light py-3 ">
        <div class="container ">
            <div class="col-3 p-0 ">
                <img src="view/images/logo-2.png " alt=" ">
            </div>
            <h3>Phòng Quan Hệ Doanh Nghiệp</h3>
            <div class="row my-5 ">
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
                    <div class="nav flex-column ">
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 1 </a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 2</a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 3</a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 4</a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-3 ">
                    <h5 class="pb-3 ">Dành cho sinh viên</h5>
                    <div class="nav flex-column ">
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 1</a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 2</a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 3</a>
                        <a class="nav-item nav-link px-0 " href="# ">Thông tin 4</a>
                    </div>
                </div>
            </div>
            <div class="row text-light text-center ">
                <p class="col mt-5 ">Copyright <i class="fa fa-copyright mx-2 " aria-hidden="true "></i> 2020 Bản quyền thuộc về <b>Group 6</b></p>
            </div>
        </div>
    </footer>
    <!-- JS Boostrap --> 

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <!-- My script -->
    <script src="view/js/script.js "></script>
</body>

</html>