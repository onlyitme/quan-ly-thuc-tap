<div id="sinhvien">
    <div class="row mt-4 m-0 py-3">
        <div class="h-sidebar-container shadow mr-4">
            <div class="h-box-left py-3">
                <ul class="h-sidebar-navigation mt-0 px-3 pb-3 ">
                    <li style="background-image: linear-gradient(-25deg, #f19a36 0%, #fa4e42 100%);" class="h-header rounded">HỒ SƠ CỦA BẠN</li>
                    <li>
                        <a href="index.php?ctrl=sinh_vien">
                            <i class="far fa-user"></i>
                            Quản lý thông tin
                        </a>
                    </li>
                    <li>
                        <a href="index.php?ctrl=sinh_vien&act=cv_index">
                            <i class="far fa-file-alt"></i>
                            Quản lý hồ sơ
                        </a>
                    </li>
                    <li>
                        <a href="index.php?ctrl=sinh_vien&act=user_edit">
                            <i class="far fa-key"></i>
                            Đổi mật khẩu
                        </a>
                    </li>
                    <li style="background-image: linear-gradient(-25deg, #f19a36 0%, #fa4e42 100%);" class="h-header rounded">VIỆC LÀM &amp; HỖ TRỢ</li>
                    <li>
                        <a href="index.php?ctrl=sinh_vien&act=danh_sach_don">
                            <i class="far fa-clipboard-list    "></i>
                            Danh sách đơn xin thực tập
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-heart    "></i>
                            Việc làm đã lưu
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="far fa-file-powerpoint    "></i>
                            Việc làm ứng tuyển
                        </a>
                    </li>
                    <li>
                        <a href="index.php?ctrl=sinh_vien&act=hoang">
                            <i class="far fa-engine-warning    "></i>
                            Hướng dẫn thao tác
                        </a>
                    </li>
                    <!-- <li>
                        <a href="<?=SITE_URL?>/?ctrl=home&act=logout">
                            <i class="far fa-sign-out-alt" aria-hidden="true"></i> Đăng xuất
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>

        <div class=" col-sm-9  mb-3 p-0 rounded ">
            <?php include $view_sv; ?>
        </div>

    </div>
</div>


        