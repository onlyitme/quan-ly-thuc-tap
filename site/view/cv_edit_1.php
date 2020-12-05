<form action="index.php?ctrl=sinh_vien&act=cv_update&trang=1" method="POSt">
    <div class="media boder p-3 sv8-12 mb-3">
        <div class="row col-sm-12"
            style="background-image: linear-gradient(-25deg, #8a8a8a 0%, #82dcff 100%);margin:auto;">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <h5 style="font-weight: 700;">THÔNG TIN CHUNG</h5>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong>Tiêu đề hồ sơ</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <p><input type="text" class="form-control mb-2 mr-sm-2" value="<?=$thongtincv['tieu_de']?>"
                        placeholder="Tiêu đề" name="tieu_de"></p>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong>Trình độ cao nhất</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <p>
                    <select class="form-control" style="width:100%;padding: 6px 0;" name="trinh_do">
                        <option value="0" <?php if($thongtincv['trinh_do']==0) echo "selected";?>>Tự Học</option>
                        <option value="1" <?php if($thongtincv['trinh_do']==1) echo "selected";?>>Trung cấp</option>
                        <option value="2" <?php if($thongtincv['trinh_do']==2) echo "selected";?>>Cao đẳng</option>
                        <option value="3" <?php if($thongtincv['trinh_do']==3) echo "selected";?>>Đại học</option>
                        <option value="4" <?php if($thongtincv['trinh_do']==4) echo "selected";?>>Cao học</option>
                    </select>
                </p>
            </div>

            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong>Nơi làm việc mong muốn</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <p>
                    <select style="width:100%;padding: 6px 0;" name="noi_lam_viec">
                        <option value="0" <?php if($thongtincv['noi_lam_viec']==0) echo "selected";?>>Chưa xác định
                        </option>
                        <option value="1" <?php if($thongtincv['noi_lam_viec']==1) echo "selected";?>>Hà Nội</option>
                        <option value="2" <?php if($thongtincv['noi_lam_viec']==2) echo "selected";?>>Đà Nẵng</option>
                        <option value="3" <?php if($thongtincv['noi_lam_viec']==3) echo "selected";?>>Tây Nguyên
                        </option>
                        <option value="4" <?php if($thongtincv['noi_lam_viec']==4) echo "selected";?>>Tp.HCM</option>
                        <option value="5" <?php if($thongtincv['noi_lam_viec']==5) echo "selected";?>>Cần Thơ</option>
                    </select>

                </p>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong>Mục tiêu nghề nghiệp</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
                <textarea  style="height: 135px; width: 100%;" id="career_obj" name="muc_tieu_nghe_nghiep"
                    class="mb-3 form-control input-text  validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success"
                    data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp."><?=$thongtincv['muc_tieu_nghe_nghiep']?></textarea>
            </div>

        </div>

    </div>

    </div>
    <div class="col-12 text-center mt-2 mb-3">
        <a href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv3-qlhoso.html">
            <button class="buttoncapnhat ml-4" type="submit">
                <svg style="color: white;" width="1.3em" height="1.3em" viewBox="0 0 16 16"
                    class="bi bi-journal-bookmark mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                    <path
                        d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                    <path fill-rule="evenodd"
                        d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z" />
                </svg>
                Lưu hồ sơ
            </button>
        </a>

    </div>
</form>