<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
    <!-- <script src="sweetalert2.all.min.js"></script>
    Optional: include a polyfill for ES6 Promises for IE11 
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- JS Boostrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
    </script>
</head>

<body>
    <div id="main">
        <div id="doanhnghiep">

            <div id="doanhnghiep">
                <div class="row mt-4 m-0 py-3">
                    <div class="h-sidebar-container h-menu-sticky shadow mr-4">
                        <div class="h-box-left py-3">
                            <!-- <div class="px-3 py-3">
                    <img src="images/logofpt.png" alt="logofpt" class="h-sidebar-img" width="100%" height="200px" style="object-fit: cover;">
                    <hr style="width: 50%;">
                </div> -->
                            <ul class="h-sidebar-navigation mt-0 px-3 pb-3">
                                <a data-toggle="modal" data-target="#exampleModal-Nghia">
                                    <button class="h-dn-dangbai mb-3"><i class="far fa-plus-circle"></i> Đăng bài</button>
                                </a>
                                <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=tttk">
                                    <span class="h-dn-dangxuat">Đăng xuất <i class="far fa-sign-out-alt" aria-hidden="true"></i></span>
                                </a>
                                <li class="h-header">TÀI KHOẢN</li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=tttk">
                                        <i class="fas fa-user-tie"></i> Thông tin tài khoản
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=tdmk">
                                        <i class="far fa-key"></i> Đổi mật khẩu
                                    </a>
                                </li>
                                <li class="h-header">DOANH NGHIỆP</li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep">
                                        <i class="far fa-briefcase" aria-hidden="true"></i> Thông tin doanh nghiệp
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=qlns">
                                        <i class="far fa-users" aria-hidden="true"></i> Quản lý nhân sự
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=qlbv&id_user=<?= $_SESSION['sid'] ?>">
                                        <i class="far fa-list-ul" aria-hidden="true"></i> Quản lý bài viết
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=dshs">
                                        <i class="far fa-address-card" aria-hidden="true"></i> Quản lý hồ sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=thongbao">
                                        <i class="far fa-info-circle" aria-hidden="true"></i> Thông báo
                                    </a>
                                </li>
                                <!-- <li>
                        <a href="#">
                            <i class="far fa-sign-out-alt" aria-hidden="true"></i> Đăng xuất
                        </a>
                    </li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="h-box-detail p-3 h-box-right shadow">
                        <div class="h-big-box-thongbao mt-3">
                            <div class="h-box-thongbao float-left">
                                <h4 class="text-info">Mới nhất <i class="far fa-comment-dots"></i></h4>

                                <div class="h-box-tb-con mt-3">
                                    <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink</h5>
                                    <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i></p>
                                    <div class="text-box-tb float-left text-secondary">
                                        <span class="mr-2"><i class="far fa-user"></i> Admin</span>
                                        <span class="mr-2"><i class="far fa-clock"></i> 01/12/2020 </span>
                                        <p class=""><i class="fas fa-map-pin"></i> Tuyển nhân Viên Thiết Kế 2D Animation (Chế Độ Tốt)</p>
                                    </div>
                                    <div class="noidung-tb">
                                        <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
                                    </div>
                                </div>

                                <div class="h-box-tb-con mt-3">
                                    <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink</h5>
                                    <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i></p>
                                    <div class="text-box-tb float-left text-secondary">
                                        <span class="mr-3"><i class="far fa-user"></i> Admin</span>
                                        <span class=""><i class="far fa-clock"></i> 01/12/2020 </span>
                                        <p class=""><i class="fas fa-map-pin"></i> Nhân Viên Kỹ Thuật Sơn Gò Ô Tô (Taxi Thành Hưng) - Đi Làm Ngay</p>
                                    </div>
                                    <div class="noidung-tb">
                                        <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
                                    </div>
                                </div>
                                <div class="h-box-tb-con mt-3">
                                    <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink</h5>
                                    <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i></p>
                                    <div class="text-box-tb float-left text-secondary">
                                        <span class="mr-3"><i class="far fa-user"></i> Admin</span>
                                        <span class=""><i class="far fa-clock"></i> 01/12/2020 </span>
                                        <p class=""><i class="fas fa-map-pin"></i> Nhân Viên Kỹ Thuật Sơn Gò Ô Tô (Taxi Thành Hưng) - Đi Làm Ngay</p>
                                    </div>
                                    <div class="noidung-tb">
                                        <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
                                    </div>
                                </div>
                                <div class="h-box-tb-con mt-3">
                                    <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink</h5>
                                    <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i></p>
                                    <div class="text-box-tb float-left text-secondary">
                                        <span class="mr-3"><i class="far fa-user"></i> Admin</span>
                                        <span class=""><i class="far fa-clock"></i> 01/12/2020 </span>
                                        <p class=""><i class="fas fa-map-pin"></i> Nhân Viên Kỹ Thuật Sơn Gò Ô Tô (Taxi Thành Hưng) - Đi Làm Ngay</p>
                                    </div>
                                    <div class="noidung-tb">
                                        <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
                                    </div>
                                </div>
                                <div class="h-box-tb-con mt-3">
                                    <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink</h5>
                                    <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i></p>
                                    <div class="text-box-tb float-left text-secondary">
                                        <span class="mr-3"><i class="far fa-user"></i> Admin</span>
                                        <span class=""><i class="far fa-clock"></i> 01/12/2020 </span>
                                        <p class=""><i class="fas fa-map-pin"></i> Nhân Viên Kỹ Thuật Sơn Gò Ô Tô (Taxi Thành Hưng) - Đi Làm Ngay</p>
                                    </div>
                                    <div class="noidung-tb">
                                        <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
                                    </div>
                                </div>

                            </div>

                            <div class="h-box-tintuc float-left">
                                <h4 class="text-danger px-2">Tin tức <i class="fab fa-hotjar"></i></h4>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">Danh sách sinh viên ứng tuyển thành công</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">Thông báo học phí học kì FALL 2021</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">Danh sách sinh viên hoàn thành học phí GDQP T12/2020</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">Phòng CTSV thông báo DSSV Tốt nghiệp bổ sung đợt 3 năm 2021</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">Danh sách sinh viên đang chờ xét duyệt hồ sơ</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">&lpar;CS1,2&rpar; Thông báo tạm nghỉ học giáo dục thể chất học tại trường Quang Trung</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                                <div class="h-box-tintuc-con mt-3 px-2">
                                    <a href="">
                                        <h6 class="text-dark">&lpar;CS1,2&rpar; Thông báo tạm nghỉ học giáo dục thể chất học tại trường Quang Trung</h6>
                                    </a>
                                    <div class="text-box-tt text-secondary">
                                        <span class=""><i class="far fa-user"></i> Admin</span>
                                        <span class="float-right"><i class="far fa-clock"></i> 01/12/2020 </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>