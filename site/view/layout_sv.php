<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5 Thông báo việc làm</title>
    <link rel="shortcut icon" href="view/images/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
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
            <div id="header-login" class="col p-0">
                <div class="d-none d-lg-flex justify-content-end h-100 ">
                    <a data-toggle="modal" href="#login" class="btn btn-light rounded-0  h-100 border-left  font-weight-500 p-4" role="button" aria-pressed="true">SINH VIÊN</a>
                    <a data-toggle="modal" href="#login" class="btn btn-primary  rounded-0  h-100 border-left   font-weight-500 p-4" role="button" aria-pressed="true">DOANH NGHIỆP</a>
                </div>
            </div>
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
                        <form action="index.php?ctrl=home" class="my-5">
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
    <main id="main">
        <div class="container mt-3">
            <div id="sinhvien">
                <div class="row">
                    <div class=" col-sm-3 sv4 mb-3 mt-3">
                        <div class="py-3">
                            <ul class="nav h-sidebar-navigation">
                                <li class="nav-item h-header" style="color: white;">HỒ SƠ CỦA BẠN</li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv1-ttcn.html">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        </svg>
                                        Quản lý thông tin
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv2-dsdonxv.html">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-list" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                            <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                            <circle cx="3.5" cy="5.5" r=".5"/>
                                            <circle cx="3.5" cy="8" r=".5"/>
                                            <circle cx="3.5" cy="10.5" r=".5"/>
                                        </svg>
                                        Danh sách đơn xin thực tập
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv3-qlhoso.html">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                            <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        </svg>
                                        Quản lý hồ sơ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv4-taohoso.html">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cursor" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"/>
                                        </svg>
                                        Tạo hồ sơ
                                    </a>
                                </li>
                                <li class="h-header" style="color: white;">VIỆC LÀM & HỖ TRỢ</li>
                                <li class="nav-item" data-toggle="modal" data-target=".bs-example-modal-lg">
                                    <a class="nav-link" data-toggle="modal" data-target="#myModal" href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv5-tbvieclam.html">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bell" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2z"/>
                                            <path fill-rule="evenodd" d="M8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>
                                        Thông báo việc làm
                                    </a>
                                    <div class="row">
                                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargemoalLabel">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content modal-content1">
                                                    <div class="modal-body">
                                                        <div class="media col-sm-12 sv-12">
                                                            <img src="view/images/logofpt.png" alt="John Doe" class="mr-3 mt-3 mb-3 rounded-circle align-self-center" style="width:80px;border: 1px black solid;">
                                                                <div class="media-body col-sm-11">
                                                                    <a href="#">
                                                                        <h5 class="media-heading mt-3">CÔNG TY CP FPT</h5>
                                                                    </a>
                                                                    
                                                                    <p class="name">NGÀNH NGHỀ: Hoạt động thông tin khác...</p>
                                                                    <p style="float:left;width: 60%;"class="mb-3">Ngày hết hạn : 16/12/2020</p>     
                                                                    <div style="color: rgb(255, 153, 0);"><span style="margin-top: -10px;" ></span>
                                                                        Không được duyệt
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div style="margin-left: 10px;" class="col-sm-1 ">
                                                                    <a href="#">
                                                                        <i class="fa fa-close" style="font-size:24px;color:rgba(5, 5, 5, 0.466);margin-left: 50px;margin-top: 5px;"></i>
                                                                    </a>
                                                                    
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-sm-12 ">
                                                            <div class="col-sm-2 mr-center">
                                                                <hr style="background: rgb(110, 110, 110);">
                                                            </div>     
                                                        </div>
                                                        <div class="media col-sm-12 sv-12">
                                                            <img src="view/images/lgvinamilk.jpg" alt="John Doe" class="mr-3 mt-3 mb-3 rounded-circle align-self-center" style="width:80px;border: 1px black solid;">
                                                                <div class="media-body col-sm-11">
                                                                    <a href="#">
                                                                        <h5 class="media-heading mt-3">CÔNG TY CP SỮA VIỆT NAM</h5>
                                                                    </a>
                                                                    
                                                                    <p class="name">NGÀNH NGHỀ: Sản xuất, kinh doanh sữa đạt chuẩn...</p>
                                                                    <p style="float:left;width: 60%;"class="mb-3">Ngày hết hạn : 16/12/2020</p>     
                                                                    <div style="color: rgb(81, 255, 0);"><span style="margin-top: -10px;" ></span>
                                                                        Đã phê duyệt
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div style="margin-left: 10px;" class="col-sm-1 ">
                                                                    <a href="#">
                                                                        <i class="fa fa-close" style="font-size:24px;color:rgba(5, 5, 5, 0.466);margin-left: 50px;margin-top: 5px;"></i>
                                                                    </a>
                                                                    
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-sm-12 ">
                                                            <div class="col-sm-2 mr-center">
                                                                <hr style="background: rgb(110, 110, 110);">
                                                            </div>     
                                                        </div>
                                                        <div class="media col-sm-12 sv-12">
                                                            <img src="view/images/lgvinfast.jpg" alt="John Doe" class="mr-3 mt-3 mb-3 rounded-circle align-self-center" style="width:80px;border: 1px black solid;">
                                                                <div class="media-body col-sm-11">
                                                                    <a href="#">
                                                                        <h5 class="media-heading mt-3"> CÔNG TY CP VINFAST </h5>
                                                                    </a>
                                                                    
                                                                    <p class="name">NGÀNH NGHỀ: Sản xuất, kinh doanh ô tô thế hệ mới...</p>
                                                                    <p style="float:left;width: 60%;"class="mb-3">Ngày hết hạn : 18/12/2020</p>     
                                                                    <div style="color: rgb(255, 153, 0);"><span style="margin-top: -10px;" ></span>
                                                                        Không được duyệt
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div style="margin-left: 10px;" class="col-sm-1 ">
                                                                    <a href="#">
                                                                        <i class="fa fa-close" style="font-size:24px;color:rgba(5, 5, 5, 0.466);margin-left: 50px;margin-top: 5px;"></i>
                                                                    </a>
                                                                    
                                                                </div>
                                                        
                                                        </div>
                                                        <div class="col-sm-12 ">
                                                            <div class="col-sm-2 mr-center">
                                                                <hr style="background: rgb(110, 110, 110);">
                                                            </div>     
                                                        </div>
                                                        <div class="media col-sm-12 sv-12">
                                                            <img src="view/images/olam.jpg" alt="John Doe" class="mr-3 mt-3 mb-3 rounded-circle align-self-center" style="width:80px;border: 1px black solid;">
                                                                <div class="media-body col-sm-11">
                                                                    <a href="#">
                                                                        <h5 class="media-heading mt-3">CÔNG TY TNHH OLAM VIỆT NAM </h5>
                                                                    </a>
                                                                    
                                                                    <p class="name">NGÀNH NGHỀ: Sản xuất, chế biến và kinh doanh...</p>
                                                                    <p style="float:left;width: 60%;"class="mb-3">Ngày hết hạn : 19/12/2020</p>     
                                                                    <div style="color: rgb(255, 153, 0);"><span style="margin-top: -10px;" ></span>
                                                                        Không được duyệt
                                                                    </div>
                                                                    
                                                                </div>
                                                                <div style="margin-left: 10px;" class="col-sm-1 ">
                                                                    <a href="#">
                                                                        <i class="fa fa-close" style="font-size:24px;color:rgba(5, 5, 5, 0.466);margin-left: 50px;margin-top: 5px;"></i>
                                                                    </a>
                                                                    
                                                                </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
        
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                                        Việc làm đã lưu
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-richtext" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
                                            <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
                                            <path fill-rule="evenodd" d="M4.5 12.5A.5.5 0 0 1 5 12h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm0-2A.5.5 0 0 1 5 10h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zm1.639-3.708l1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V8.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V8s1.54-1.274 1.639-1.208zM6.25 6a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5z"/>
                                        </svg>
                                        Việc làm ứng tuyển
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-diamond" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M6.95.435c.58-.58 1.52-.58 2.1 0l6.515 6.516c.58.58.58 1.519 0 2.098L9.05 15.565c-.58.58-1.519.58-2.098 0L.435 9.05a1.482 1.482 0 0 1 0-2.098L6.95.435zm1.4.7a.495.495 0 0 0-.7 0L1.134 7.65a.495.495 0 0 0 0 .7l6.516 6.516a.495.495 0 0 0 .7 0l6.516-6.516a.495.495 0 0 0 0-.7L8.35 1.134z"/>
                                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                        </svg>
                                        hướng dẫn thao tác
                                    </a>
                                </li>
                             </ul>
                        </div>
                    </div>

                    <div class=" col-sm-9 mt-3 mb-3">
                        <div class="container"> 
                        <?php include $view; ?>
                        </div>

                    </div>

                </div>
            </div>
            
            
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js " integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo " crossorigin="anonymous "></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js " integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous "></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js " integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous "></script>
    <!-- My script -->
    <script src="view/js/script.js "></script>
</body>

</html>