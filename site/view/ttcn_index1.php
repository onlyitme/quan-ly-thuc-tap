<div class="row align-items-center">
    <div class="col-lg-8">
        <h2 class="font-weight-700 mb-0">Quản lí thông tin</h2>
    </div>
</div>

<div class="h-big-box mt-3">
    <form action="">
        <div class="h-tt-left rounded shadow">
            <div class="h-tt-left-header rounded">
                <div class="h-tt-left-img">
                    <img src="<?php if($ttsv['anh'] != "") echo $ttsv['anh']; else echo ("view/images/student.png"); ?>" id="avt-sv" alt="avatar">
                    <div class="h-tt-left-img-txt">
                        <label for="file-upload" class="h-custom-file-upload">
                            <i class="far fa-camera"></i>
                        </label>
                        <input id="file-upload" type="file" name="file">
                    </div>
                </div>
                <div class="h-tt-left-text">
                    <span class="text-uppercase">
                        <h2> <?= $ttsv['ho_ten'] ?> </h2>
                    </span>
                    <span class="text-secondary font-weight-light">Thực tập sinh</span>
                    <hr class="h-bv-hr">
                    <span class="h-tt-text-con font-weight-normal">
                        <i class="far fa-phone-alt" aria-hidden="true"></i>
                        <?= $ttsv['sdt'] ?> <br>
                        <i class="far fa-map-marker-alt" aria-hidden="true"></i>
                        <?= $ttsv['dia_chi'] ?> <br>
                    </span>

                    <div class="h-tt-social">
                        <span class="h-social">
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                            <a href="#"><i class="fa fa-reddit-square"></i></a>
                            <a href="#"><i class="fa fa-twitter-square"></i></a>
                            <a href="#"><i class="fa fa-github-square"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-box-ttsv mt-4">
            <div class="h-ttsv-left border p-3 rounded-lg">
                <h3 class="text-left">Thông tin tài khoản</h3>
                <div class="h-ttcn text-left py-3">
                    <form action="">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Tên đăng nhập:</span>
                            </div>
                            <input type="text" class="form-control" value="<?= $ttsv['ho_ten'] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Mật khẩu:</span>
                            </div>
                            <input type="text" class="form-control" value="<?= $tttk['pass'] ?>">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="">Email:</span>
                            </div>
                            <input type="text" class="form-control" value="<?= $tttk['email'] ?>">
                        </div>
                    </form>
                </div>
            </div>

            <button type="button" class="h-sv-ttcn-edit btn">
                <a href="index.php?ctrl=sinh_vien&act=ttcn_edit">
                    <span class="">Thay đổi <i class="far fa-pencil ml-2"></i></span>
                </a>
            </button>

            <div class="h-ttsv-right border p-3 rounded-lg">
                <h3 class="text-left">Thông tin cá nhân</h3>
                <div class="h-ttcn text-left py-3">
                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-left">Họ &amp; tên: </label>
                        <div class="col-sm-8">
                            <input type="text" for="" class="form-control" readonly="readonly" value="<?= $ttsv['ho_ten'] ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-left">Giới tính: </label>
                        <div class="col-sm-8">
                            <input type="text" for="" class="form-control" readonly="readonly" value="<?php if ($ttsv['gioi_tinh'] == 1) echo 'Nam';
                                                                                                        else echo 'Nữ'; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-left">Ngày sinh: </label>
                        <div class="col-sm-8">
                            <input type="text" for="" class="form-control" readonly="readonly" value="<?= date('d/m/Y', strtotime($ttsv['ngay_sinh'])) ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="" class="col-sm-4 col-form-label text-left">Vị trí thực tập: </label>
                        <div class="col-sm-8">
                            <input type="text" for="" class="form-control" readonly="readonly" value="<?php if ($ttsv['trang_thai'] == 0) echo 'chưa có nơi thực tập' ?>">
                        </div>
                    </div>

                    <div class="row">
                        <label for="" class="col-sm-2 col-form-label text-left">Địa chỉ:</label>
                        <div class="col-sm-10">
                            <input type="text" for="" class="form-control" readonly="readonly" value="<?= $ttsv['dia_chi'] ?>">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>
</div>
