<div class="h-big-box-thongbao mt-3">
    <div class="h-box-thongbao float-left">
        <h2 class="text-dark">Thông báo mới nhất <i class="far fa-comment-dots"></i></h2>
        <?php foreach ($ds as $row) { ?>
            <div class="h-box-tb-con mt-3">
                <h5 class="h-tb-title text-uppercase float-left mr-2"><a href="">
                        <?= $row['noi_dung'] ?>
                    </a>
                </h5>
                <p class="text-info text-right"><i class="fas fa-check-circle"></i>
                </p>
                <div class="text-box-tb float-left text-secondary">
                    <span class="mr-2"><i class="far fa-user"></i><?php $sv = getSinhvienByID($row['id_ng_gui']); ?>
                        <?= $sv['ho_ten'] ?></span>
                    <span class="mr-2"><i class="far fa-clock"></i> <?= $row['thoi_gian'] ?> </span>
                    <!-- <p class=""><i class="fas fa-map-pin"></i> Tuyển nhân Viên Thiết Kế 2D Animation
                    (Chế Độ Tốt)</p> -->
                </div>
                <div class="noidung-tb">
                <p><a href="" class="text-secondary text-uppercase">
                 Số điện thoại: <?= $sv['sdt']?>
                </a></p>
                </div>
            </div>
        <?php } ?>

        <!-- Div box cũ - Ko Xóa
        <div class="h-box-tb-con mt-3">
            <h5 class="h-tb-title text-uppercase float-left mr-2">Công ty thiết kế web VinaLink
            </h5>
            <p class="text-success text-right">Thành công <i class="fas fa-check-circle"></i>
            </p>
            <div class="text-box-tb float-left text-secondary">
                <span class="mr-3"><i class="far fa-user"></i> Admin</span>
                <span class=""><i class="far fa-clock"></i> 01/12/2020 </span>
                <p class=""><i class="fas fa-map-pin"></i> Nhân Viên Kỹ Thuật Sơn Gò Ô Tô (Taxi
                    Thành Hưng) - Đi Làm Ngay</p>
            </div>
            <div class="noidung-tb">
                <p>Sinh viên <a href="">Hoàng Nguyễn</a> đã đăng ký thực tập</p>
            </div>
        </div> -->
    </div>
</div>