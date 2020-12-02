
<div class="row align-items-center">
    <div class="col-lg-12">
        <h2 class="font-weight-600 mb-0">Quản lý bài viết</h2>
        <span class="text-secondary px-1"><i class="far fa-file"></i>
            299
        </span>
    </div>
</div>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
    <i class="fas fa-plus"></i> Thêm đăng tuyển
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thêm đăng tuyển</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= SITE_URL ?>/?ctrl=dang_tuyen&act=insert" enctype="multipart/form-data" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="tieu_de" required placeholder="Tiêu đề...">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="user" name="yeu_cau" required placeholder="Yêu cầu">
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <select name="id_nganh" class="form-control">
                                <option value="">Chọn ngành</option>
                                <?php
                                $nganh = getAllNganh();
                                foreach ($nganh as $n) { ?>
                                    <option value="<?= $n['id_nganh'] ?>"> <?= $n['ten_nganh'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <div class="custom-file ">
                                <input type="file" class="custom-file-input " id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="anh">
                                <label class="custom-file-label " for="inputGroupFile01">ẢNH</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="number" class="form-control" id="user" name="sl_sv_can" required placeholder="Số lượng sinh viên cần">
                        </div>
                        <div class="form-group col-6">
                            <input type="number" class="form-control" id="user" name="luong" required placeholder="Lương">
                        </div>

                    </div>
                    <div class="row">
                        <div class="form-group col-6">
                            <input type="text" class="form-control" id="user" name="quyen_loi" required placeholder="Quyền lợi">
                        </div>
                        <div class="form-group col-6">
                            <input type="number" class="form-control" id="user" name="thoi_gian" required placeholder="Thời gian">
                        </div>
                    </div>
                    <textarea name="mo_ta" id="" cols="60" rows="5" required placeholder="Mô tả"></textarea>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Huỷ</button>
                        <button type="submit" class="btn btn-primary">Lưu đăng tuyển</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<?php foreach ($ds as $row) { ?>
    <div class="h-box-bv">
        <div class="h-box-bv-left">
            <div class="h-bv-left-img">
                <a href="#">
                    <img src="https://img.freepik.com/free-vector/real-estate-logo-icon_126523-966.jpg?size=626&ext=jpg&ga=GA1.2.172804449.1602504837" alt="avatar_logo.png">
                </a>
            </div>
        </div>
        <div class="h-box-bv-right">
            <div class="h-bv-right-title">
                <h4 class="">Nhân viên văn phòng ngồi máy lạnh, lướt shopee</h4>
            </div>
            <div class="h-bv-right-span">
                <span class="text-secondary">
                    <span class="text-success"><i class="fas fa-toggle-on"></i>
                        <span>Hoạt động</span>
                    </span>
                    <i class="far fa-calendar-alt"></i> <span>01/12/2020</span>
                    <i class="far fa-eye"></i> <span>299</span>

                </span>
            </div>
            <hr class="h-bv-hr">
            <div class="h-bv-right-content">
                <p class="text-uppercase text-secondary"> <?php
                                                            $ds = getAllDoanhnghiep();
                                                            foreach ($ds as $r) { ?>
                        <?php if ($row['id_dn'] == $r['id_dn']) { ?>
                            <?= $r['ten_dn'] ?>
                        <?php } ?>
                    <?php } ?></p>
                <span>Sinh viên đăng ký: <span>1.220</span> | </span>
                <span>Sinh viên xác thực: <span>1.020</span> | </span>
                <span>Sinh viên đã duyệt: <span class="text-success">1.209</span></span>
                <br>
                <span class="text-success"><i class="fas fa-dollar-sign"></i> Lương: 6tr - 8tr VNĐ</span>
                <span class="text-secondary"><i class="fas fa-map-marker-alt"></i> Hồ Chí Minh</span>
            </div>
            <div class="h-bv-right-button">
                <button class="btn h-bg-button">Xem chi tiết</button>
                <button class="btn btn-danger">Xóa</button>
                <button class="btn btn-outline-warning h-bv-text-lock">
                    <i class="far fa-lock"></i></button>
            </div>
        </div>
    </div>
<?php } ?>