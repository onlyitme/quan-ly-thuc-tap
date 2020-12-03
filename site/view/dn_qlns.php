<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý nhân sự</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- JS Boostrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js "
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1 " crossorigin="anonymous ">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js "
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM " crossorigin="anonymous ">
        </script>
    <!-- JS tynyint -->
    <script src="https://cdn.tiny.cloud/1/qtyaj3v4ktk0l2i14oqdby9a72wog89twljoleu6f9syjbvp/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
</head>

<body>
    <main id="main">
        <div class="container">
            <div id="doanhnghiep">
                <div class="h-sidebar-container shadow mr-4">
                    <div class="h-box-left py-3">
                        <ul class="h-sidebar-navigation mt-0 px-3 pb-3">
                            <a href="">
                                <button class="h-dn-dangbai mb-3"><i class="far fa-plus-circle"></i> Đăng bài</button>
                            </a>
                        </ul>
                    </div>
                </div>

                <!-- Modal Nhận xét - Đánh giá - QLNS -->
                <div class="modal fade" id="exampleModal_Hoang" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Đánh giá -
                                    Quản lý nhân sự</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="form-group">
                                        <label for="recipient-name" class="col-form-label">
                                            <i class="far fa-clock-o" aria-hidden="true"></i> Thời gian:
                                            <span class="px-2"> <input type="date"></span>
                                        </label> <br>
                                        <label for="recipient-name" class="col-form-label">
                                            <i class="far fa-trophy-alt"></i> Đánh giá:
                                            <span class="text-success px-2">
                                                <input type="radio" name="h-danhgia" id="h-dat"> Đạt <i
                                                    class="fa fa-check"></i>
                                            </span>
                                            <span class=text-danger>
                                                <input type="radio" name="h-danhgia" id="h-chuadat"> Chưa đạt <i
                                                    class="fas fa-close"></i>
                                            </span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <label for="message-text" class="col-form-label">Nhận xét:</label>
                                        <textarea class="form-control" cols="30" rows="7" id="message-text"></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button> -->
                                <!-- <button type="button" class="btn btn-outline-success">Cập nhật</button> -->
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="">Chưa đạt <i class="far fa-close" aria-hidden="true"></i></button> -->
                                <button type="button" class="btn btn-success" data-dismiss="">Cập nhật </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Modal -->

                <div class="h-big-box mt-3">
                    <div class="h-box-detail p-3 h-box-right shadow">
                        <div class="row align-items-center">
                            <div class="col-lg-8">
                                <h2 class="font-weight-600 mb-0">Quản lý nhân sự</h2>
                                <span class="text-secondary px-1"><i class="far fa-users"></i>
                                    299
                                </span>
                            </div>
                            <div class="col-lg-4">
                                <div class="input-group mb-3">
                                    <div class="input-group col-8">
                                        <!-- <input type="text" class="form-control" placeholder="Tìm kiếm..">
                                        <div class="input-group-append">
                                            <button class="input-group-text">
                                                <a href=""><i class="far fa-search"></i></a>
                                            </button>
                                        </div> -->
                                    </div>
                                    <button class="input-group-text" type="button" data-toggle="dropdown">
                                        Sắp xếp <i class="far fa-angle-down"></i></button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#">Theo MSSV</a>
                                        <a class="dropdown-item" href="#">Theo tên</a>
                                        <a class="dropdown-item" href="#">Theo đánh giá</a>
                                        <a class="dropdown-item" href="#">Theo thời gian</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-secondary m-1"> &ast;Sinh viên đang thực tập tại công ty&ast;</p>
                        <div class=" h-big-box mt-4">
                            <div class="h-box1">
                                <table class="table table-hover table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col" class="text-center">STT</th>
                                            <th scope="col">MSSV</th>
                                            <th scope="col">Họ &amp; tên</th>
                                            <th scope="col">Chuyên ngành</th>
                                            <th scope="col" class="text-center">Hồ sơ</th>
                                            <th scope="col" class="text-center">Đánh giá</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-bordered">
                                        <tr>
                                            <th scope="row" class="text-center">1</th>
                                            <td>PS13557</td>
                                            <td>Nguyễn Hồ Khải Hoàng</td>
                                            <td> <span>Thiết kế Website</span>

                                            <td class="text-center"><a href="#"><i class="fas fa-address-card show-btn"
                                                        style="font-size: 30px; color: #2574A9;"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <div class="h-md-qlns">
                                                    <a href="#" class="text-dark show-btn" data-toggle="modal"
                                                        data-target="#exampleModal_Hoang">
                                                        <i class="far fa-book-open show-btn"
                                                            style="font-size: 30px; color: #2574A9;"></i>
                                                    </a>
                                                    <!-- <button type="button" class="btn text-dark" data-toggle="modal"
                                                        data-target="#exampleModal_Hoang">
                                                        <i class="far fa-edit"></i>
                                                         </button> -->
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>