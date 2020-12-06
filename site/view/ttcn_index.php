<div class="shadow ">
    <div class="h-big-box mt-3">
        <form action="">
            <div class="h-tt-left rounded shadow-sm">
                <div class="h-tt-left-header rounded">
                    <div class="h-tt-left-img">
                        <img src="../uploads/<?=$ttsv['anh']?>" onerror=this.src="view/images/student.png" class="avt-ttsv" id="avt-sv" alt="avatar">
                        <div class="h-tt-left-img-txt">
                            <label for="file-upload-SV" class="h-custom-file-upload">
                                <i class="far fa-camera"></i>
                            </label>
                            <input id="file-upload-SV" type="file" name="file">
                        </div>
                    </div>
                    <div class="h-tt-left-text">
                        <div class="h-tttk-trangthai">
                            <p class="text-success"> <i class="fas fa-check-circle    "></i> </p>
                        </div>
                        <span class="text-uppercase ">
                            <h2> <?= $ttsv['ho_ten'] ?> </h2>
                        </span>
                        <span class="text-dark font-weight-light"><i class="fas fa-circle text-success"></i> Thực tập sinh </span>
                        <hr class="h-bv-hr">

                        <div class="h-ttcn text-left">
                            <form action="">
                                <label class="sr-only" for=""></label>
                                <div class="input-group mr-sm-2">
                                    <div class="input-group-prepend h-tttk-input">
                                        <label class="col-form-label">Tên tài khoản:</label>
                                    </div>
                                    <input type="text" class="form-control col-md-3 border-0" readonly id="" value="<?= $tttk['user'] ?>">
                                </div>

                                <label class="sr-only" for=""></label>
                                <div class="input-group mr-sm-2">
                                    <div class="input-group-prepend h-tttk-input">
                                        <div class="col-form-label">Mật khẩu:</div>
                                    </div>
                                    <input type="password" class="form-control col-md-3 border-0" readonly id="" value="<?= $tttk['pass'] ?>">
                                </div>

                                <label class="sr-only" for=""></label>
                                <div class="input-group mr-sm-2">
                                    <div class="input-group-prepend h-tttk-input">
                                        <div class="col-form-label">Email:</div>
                                    </div>
                                    <input type="text" class="form-control col-md-4 border-0" readonly id="" value="<?= $tttk['email'] ?>">
                                </div>

                            </form>
                        </div>
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

            <div class="h-box-ttsv rounded-sm mt-4">
                <div class="h-ttsv-right w-100">
                    <h3 class="text-left">Thông tin cá nhân
                        <a href="index.php?ctrl=sinh_vien&act=ttcn_edit">
                            <button type="button" class="h-sv-ttcn-edit btn">
                                <span class=""> <i class="far fa-pencil"></i></span>
                            </button>
                        </a>
                    </h3>

                    <div class="h-ttcn text-left py-3">
                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Họ &amp; tên:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?= $ttsv['ho_ten'] ?>">
                        </div>

                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Giới tính:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?php if ($ttsv['gioi_tinh'] == 1) echo 'Nam';
                                                                                                        else echo 'Nữ'; ?>">
                        </div>

                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Ngày sinh:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?= date('d/m/Y', strtotime($ttsv['ngay_sinh'])) ?>">
                        </div>

                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Vị trí thực tập:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?php if ($ttsv['trang_thai'] == 0) echo 'Chưa có nơi thực tập' ?>">
                        </div>


                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Số điện thoại:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?= $ttsv['sdt'] ?>">
                        </div>

                        <label class="sr-only" for=""></label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend h-ttcn-input">
                                <div class="input-group-text">Địa chỉ:</div>
                            </div>
                            <input type="text" class="form-control" id="" readonly="readonly" value="<?= $ttsv['dia_chi'] ?>">
                        </div>

                    </div>
                </div>

            </div>
        </form>
    </div>
</div>