<form action="index.php?ctrl=sinh_vien&act=ttcn_update" method="post" id="capnhapttcn" enctype="multipart/form-data">
    <div class="row align-items-center">
        <div class="col-lg-8">
            <h3 class="font-weight-700 mb-0">Chỉnh sửa thông tin</h3>
        </div>
    </div>

    <div class="media p-3" style="border-radius: 5px;">
        <div class="row">
            <div class="h-tt-left rounded shadow-sm">
                <div class="h-tt-left-header rounded">
                    <div class="h-tt-left-img">
                        <img src="<?php if ($ttsv['anh'] != "") echo $ttsv['anh'];
                                    else echo ("view/images/student.png"); ?>" class="avt-ttsv" id="avt-sv" alt="avatar">
                        <div class="h-tt-left-img-txt">
                            <label for="file-upload" class="h-custom-file-upload">
                                <i class="far fa-camera"></i>
                            </label>
                            <input id="file-upload" type="file" name="file">
                        </div>
                    </div>
                    <div class="h-tt-left-text">
                        <span class="text-uppercase ">
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
            <!-- -->
            <!-- <div class="giua-tt1 ">
                <div class="item-tt1">
                    
                </div>
            </div> -->
            <!-- -->
            <div class="h-ttsv-edit rounded mt-3 mb-5">
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="">Họ &amp; tên&ast; :</label>
                            <input type="text" class="form-control" name="ho_ten" id="ho_ten" readonly="readonly" value="<?= $ttsv['ho_ten'] ?>">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Mã số sinh viên&ast; :</label>
                            <input type="text" class="form-control" name="mssv" id="mssv" readonly="readonly" value="<?= $ttsv['mssv'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Giới tính&ast; :</label>
                            <input type="radio" class="ml-3" id="male" name="gioi_tinh" value="1" checked> Nam
                            <input type="radio" class="ml-3" id="male" name="gioi_tinh" value="0"> Nữ
                            <input type="radio" class="ml-3" id="" name="gioi_tinh" value=""> Giới tính thứ 3
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Ngày sinh&ast; : </label>
                            <span class="ml-3">
                                <select name="day" style="padding:3px 10px;">
                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                        <option value="<?= $i ?>" <?php if ($i == date('d', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                            <?= $i ?></option>';
                                    <?php } ?>
                                </select>

                                <select name="month" style="padding:3px 10px;">
                                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                                        <option value="<?= $i ?>" <?php if ($i == date('m', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                            <?= $i ?></option>';
                                    <?php } ?>
                                </select>

                                <select name="year" style="padding:3px 10px;">
                                    <?php for ($i = 1995; $i <= 2020; $i++) { ?>
                                        <option value="<?= $i ?>" <?php if ($i == date('Y', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                            <?= $i ?></option>';
                                    <?php } ?>
                                </select>
                            </span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Email&ast; :</label>
                            <input type="text" class="form-control" id="" name="" value="<?= $tttk['email'] ?>">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="">Số điện thoại&ast; : </label>
                            <input type="text" class="form-control" id="" name="" placeholder="0912 345 6789" value="<?= $ttsv['sdt'] ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-10">
                            <label for="inputCity">Địa chỉ&ast; : </label>
                            <input type="text" class="form-control validate[required,minSize[5]] inputbox-success" id="dia_chi" name="dia_chi" data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại." data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự." value="<?= $ttsv['dia_chi'] ?>">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip">Zip</label>
                            <input type="text" class="form-control" id="zip" readonly="readonly" value="70000">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                Check me out
                            </label>
                        </div> -->
                    </div>
                    <div class="form-row ttsv-edit-button float-right">
                        <button type="submit" class="btn buttonhuy mr-2"><a href="<?SITE?>index.php?ctrl=sinhvien"> Hủy </a></button>
                        <button type="submit" class="btn buttoncapnhat"><a href=""> Cập nhật </a></button>
                    </div>
                </form>
            </div>


            <!-- VAILOL CODE -->
            <!-- <div class="row col-9 bg-info  mb-4">
                <div class="col-3 ">
                    <p><strong>Họ và tên<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p><input type="text" class="form-control mb-2 mr-sm-2" readonly value="<?= $ttsv['ho_ten'] ?>" name="ho_ten" id="ho_ten"></p>
                </div>



                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Mã số sinh viên<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p><input type="text" class="form-control mb-2 mr-sm-2" readonly value="<?= $ttsv['mssv'] ?>" name="mssv" id="mssv"></p>
                </div>

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Giới tính<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p style="margin-top: -5px;">
                        <input type="radio" id="male" name="gioi_tinh" value="1" checked>
                        <label style="margin-right: 10px;" for="male">Nam</label>
                        <input type="radio" id="male" name="gioi_tinh" value="0">
                        <label for="male">Nữ</label>
                    </p>
                </div>

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Ngày sinh<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p>
                        <select name="day" style="padding:3px 10px;">
                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                <option value="<?= $i ?>" <?php if ($i == date('d', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                    <?= $i ?></option>';
                            <?php } ?>
                        </select>

                        <select name="month" style="padding:3px 10px;">
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                                <option value="<?= $i ?>" <?php if ($i == date('m', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                    <?= $i ?></option>';
                            <?php } ?>
                        </select>

                        <select name="year" style="padding:3px 10px;">
                            <?php for ($i = 1995; $i <= 2020; $i++) { ?>
                                <option value="<?= $i ?>" <?php if ($i == date('Y', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                    <?= $i ?></option>';
                            <?php } ?>

                        </select>
                    </p>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <p><strong>Email<span style="color:tomato;">*</span></strong> </p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p>
                        <input type="email" class="form-control mb-2 " value="<?= $tttk['email'] ?>" placeholder="Nhập email" name='email' id="email">
                    </p>
                </div>

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Số Điện Thoại<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p>
                        <input type="number" value="<?= $ttsv['sdt'] ?>" id="sdt" name="sdt" class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success" data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại." data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự.">
                    </p>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Địa Chỉ<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p>
                        <input type="text" id="dia_chi" name="dia_chi" class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success" data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại." data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự." value="<?= $ttsv['dia_chi'] ?>">
                    </p>
                </div>
            </div> -->
            <!-- <div class="col-12 text-center mt-4 mb-3">
                <button class="btn buttoncapnhat float-right" type="submit">
                    <svg style="color: white;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                    </svg>
                    Cập nhật
                </button>
                <button class="btn buttonhuy mr-2 float-right" type="button">
                    <svg style="color:white;" width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-x-circle mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg>
                    Hủy
                </button>
            </div> -->
            <!-- END -->
        </div>
    </div>
</form>