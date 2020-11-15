<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG QUẢN TRỊ</title>
    <link rel="shortcut icon" href="../images/avt/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        header.row {
            height: 650px;
        }

        nav.row {
            height: 40px;
            line-height: 40px
        }

        footer.row {
            height: 60px;
        }

        div.noidung {
            min-height: 700px
        }
    </style>
</head>

<body>
<?php
  session_start();
  if (!isset($_SESSION['admin'])) {
    header('location:views/login-index.php');
  }
  ?>
    <header>
        <div class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="/quan-ly-thuc-tap/admin">TRANG CHỦ</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <a href="<?= ADMIN_URL ?>/?ctrl=excel">thêm nhiều sinh viên (để chỗ khác giùm em)</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Tìm kiếm ..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i> <?php echo $_SESSION['admin'];?></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Cài đặt</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= ADMIN_URL ?>/?ctrl=home&act=logout" >Đăng xuất</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="row noidung p-0">
        <aside class="col-3 bg-dark">
            <div class="accordion" id="accordionExample">
                <div class="card bg-dark">
                    <div class="card-header bg-dark " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-dark btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lí nhóm ngành
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=nhom_nganh">Danh sách nhóm ngành</a></p>
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=nhom_nganh&act=addnew">Thêm nhóm ngành</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card bg-dark">
                    <div class="card-header bg-dark " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-dark btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lí ngành
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=nganh">Danh sách ngành</a></p>
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=nganh&act=addnew">Thêm ngành</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card bg-dark">
                    <div class="card-header bg-dark " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-dark btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lí user
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=user">Danh sách user</a></p>
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=user&act=addnew">Thêm user</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion" id="accordionExample">
                <div class="card bg-dark">
                    <div class="card-header bg-dark " id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-dark btn-block text-left " type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Quản lí sinh viên
                            </button>
                        </h2>
                    </div>
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=sinh_vien">Danh sách sinh vien</a></p>
                            <p><a class="btn btn-dark btn-block text-left" href="<?= ADMIN_URL ?>/?ctrl=sinh_vien&act=addnew">Thêm sinh vien</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <main class="col-9 bg-white">
            <h1 class="h5 py-2 border-bottom text-danger"></h1>
            <?php require_once "$view"; ?>
        </main>
    </div>
    <main class="col-9 bg-white">
        <?php
        if (isset($view) && file_exists($view)) require_once "$view";
        else echo 'Thông tin đang cập nhật';
        ?>
    </main>
    <footer class="row bg-dark mt-1 mb-2 text-warning justify-content-center align-items-center">
        <h6>Nhóm 6 pro</h6>
    </footer>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>