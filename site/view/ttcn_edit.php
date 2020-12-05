<form action="index.php?ctrl=sinh_vien&act=ttcn_update" method="post" id="capnhapttcn" enctype="multipart/form-data">
    <div class="media boder p-3 sv8-12 mt3" style="border-radius: 5px;">
        <div class="row col-sm-12 ">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h5 style="padding: 10px 5px;font-weight: 600;">THÔNG TIN CÁ NHÂN</h5>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4 mb-4">
                <p><strong>Ảnh đại diện</strong></p>
                <div class="h-tt-left-img2">
                    <img class="" style="margin-bottom: 30px;width: 100%;" src="../uploads/<?= $ttsv['anh'] ?>"
                        onerror=this.src="view/images/avt1.jpg" alt="John Doe">
                    <div class="h-tt-left-img-txt2">
                        <label for="file-upload" class="h-custom-file-upload">
                            <i class="far fa-camera"></i>
                        </label>
                        <input id="file-upload" type="file" class="input-anh" name="anh">
                    </div>
                </div>
            </div>

            <!-- -->
            <!-- <div class="giua-tt1 ">
                <div class="item-tt1">
                    
                </div>
            </div> -->
            <!-- -->
            <div class="hr-right"></div>
            <div class="row col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9  mb-4">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Họ và tên<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p><input type="text" class="form-control mb-2 mr-sm-2" readonly value="<?= $ttsv['ho_ten'] ?>"
                            name="ho_ten" id="ho_ten"></p>
                </div>



                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Mã số sinh viên<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9 ">
                    <p><input type="text" class="form-control mb-2 mr-sm-2" readonly value="<?= $ttsv['mssv'] ?>"
                            name="mssv" id="mssv"></p>
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
                            <option value="<?= $i ?>"
                                <?php if ($i == date('d', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                <?= $i ?></option>';
                            <?php } ?>
                        </select>

                        <select name="month" style="padding:3px 10px;">
                            <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <option value="<?= $i ?>"
                                <?php if ($i == date('m', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
                                <?= $i ?></option>';
                            <?php } ?>
                        </select>

                        <select name="year" style="padding:3px 10px;">
                            <?php for ($i = 1995; $i <= 2020; $i++) { ?>
                            <option value="<?= $i ?>"
                                <?php if ($i == date('Y', strtotime($ttsv['ngay_sinh']))) echo 'selected' ?>>
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
                        <input type="email" class="form-control mb-2 " value="<?= $tttk['email'] ?>"
                            placeholder="Nhập email" name='email' id="email">
                    </p>
                </div>

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Số Điện Thoại<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p>
                        <input type="number" value="<?= $ttsv['sdt'] ?>" id="sdt" name="sdt"
                            class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success"
                            data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại."
                            data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự.">
                    </p>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ">
                    <p><strong>Địa Chỉ<span style="color:tomato;">*</span></strong></p>
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <p>
                        <input type="text" id="dia_chi" name="dia_chi"
                            class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success"
                            data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại."
                            data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự."
                            value="<?= $ttsv['dia_chi'] ?>">
                    </p>
                </div>
            </div>

            <div class="col-12 text-center mt-4 mb-3">

                <button class="btn buttoncapnhat float-right" type="submit">
                    <!-- <svg style="color: white;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                    </svg> -->
                    Cập nhật
                </button>
                <button class="btn buttonhuy mr-2 float-right" type="button">
                    <!-- <svg style="color:white;" width="1.2em" height="1.2em" viewBox="0 0 16 16" class="bi bi-x-circle mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                        <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                    </svg> -->
                    Hủy
                </button>
            </div>
        </div>
    </div>
</form>