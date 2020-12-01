<div class="row align-items-center">
    <div class="col-lg-8">
        <h2 class="font-weight-700 mb-0">Thông tin doanh nghiệp</h2>
    </div>
</div>

<div class="h-box-dn rounded mt-3">
    <div class="h-box-dn-img mb-2">
        <img src="https://simplienglish.com/wp-content/uploads/2019/10/banner.jpg" class="rounded border shadow-sm " alt="logofpt" width="900px" height="200px" style="object-fit: cover;">
        <div class="h-box-dn-txt">
            <h5>Đổi ảnh bìa doanh nghiệp</h5>
            <button class="btn btn-outline-light" type="file">Tải lên..</button>
        </div>
    </div>
    <h5>Thông tin chung</h5>
    <span class="font-weight-500 text-success mr-3"><i class="fas fa-toggle-on"></i>
        Hoạt động
    </span>
    <!-- <span class="font-weight-500 text-danger mr-3"><i class="fas fa-toggle-off"></i>
        Tạm ngưng
    </span> -->
    <span class="font-weight-500 text-secondary"><i class="fas fa-users"></i>
        300
    </span>
    <div class="h-ttdn-box text-right mt-2">
        <form method="POST" action="<?= SITE_URL ?>/?ctrl=doanh_nghiep&act=update">
            <?php
            foreach ($ds as $row) { ?>
                <?php if ($row['id_user'] == $_SESSION['sid']) { ?>
                    <div class="form-group row">
                    <input type="hidden" value="<?= $row['id_dn'] ?>" name="id_dn" class="form-control">
                        <label for="" class="col-lg-3 col-form-label">Tên doanh nghiệp:</label>
                        <div class="col-sm-8">
                            <!-- <label for="" class="form-control col-form-label">Chèn thông tin</label> 
                        Nếu ko sử dụng input thì sẽ sử dụng lable-->
                            <input type="text" value="<?= $row['ten_dn'] ?>" name="ten_dn" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword" class="col-lg-3 col-form-label">Mã số thuế:</label>
                        <div class="col-md-3">
                            <input type="number" value="<?= $row['masothue'] ?>" name="masothue" class="form-control">
                        </div>
                        <label for="inputPassword" class="col-lg-2 col-form-label">Mã đơn vị:</label>
                        <div class="col-md-3">
                            <input type="text" value="DV- 234" readonly="readonly" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-lg-3 col-form-label">Địa chỉ:</label>
                        <div class="col-sm-8">
                            <input type="text" value="<?= $row['dia_chi'] ?>" name="dia_chi" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-lg-3 col-form-label">Di động</label>
                        <div class="col-md-3">
                            <input type="text" value="<?= $row['sdt'] ?>" name="sdt" class="form-control">
                        </div>
                        <label for="" class="col-lg-2 col-form-label">Điện thoại:</label>
                        <div class="col-md-3">
                            <input type="text" value="<?= $row['sdt_ban'] ?>" name="sdt_ban" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-lg-3 col-form-label">Website:</label>
                        <div class="col-md-3">
                            <input type="text" value="<?= $row['website'] ?>" name="website" class="form-control">
                        </div>
                        <label for="" class="col-lg-2 col-form-label">Fax:</label>
                        <div class="col-md-3">
                            <input type="text" value="<?= $row['fax'] ?>" name="fax" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-lg-3 col-form-label">Email:</label>
                        <div class="col-md-8">
                            <?php
                            $ds = getAllUser();
                            foreach ($ds as $u) { ?>
                                <?php if ($u['id_user'] == $row['id_user']) { ?>
                                    <input type="email" value="<?= $u['email'] ?>" name="email" class="form-control">
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            <?php } ?>
            <div class="h-thebutton mt-2">
                <button type="submit" class="btn btn-outline-success">Cập nhật <i class="far fa-check"></i></button>
            </div>
        </form>
    </div>

    <!-- <div class="h-box-dn mt-2 rounded">
        <h5>Thông tin người liên hệ</h5>
        <div class="h-ttdn-box text-left">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-5">
                        <label for="">Người liên hệ</label>
                        <input type="text" class="form-control" value="KhaiHoang">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Điện thoại</label>
                        <input type="text" class="form-control" value="+095123623">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Mã TK</label>
                        <input type="text" class="form-control" value="#328465">
                    </div>
                    <div class="form-group col-md-8">
                        <label for="">Địa chỉ</label>
                        <input type="text" class="form-control" value="Công viên phần mềm Quang Trung, Quận 12, Tp. Hồ Chí Minh">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Liên lạc</label>
                        <span class="h-social">
                            <a href="#"><i class="fab fa-facebook-square"></i></a>
                            <a href="#"><i class="fab fa-reddit-square"></i></a>
                            <a href="#"><i class="fab fa-twitter-square"></i></a>
                            <a href="#"><i class="fab fa-github-square"></i></a>
                        </span>
                    </div>
                </div>
               
            </form>
        </div>

    </div> -->
</div>
