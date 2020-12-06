<form action="index.php?ctrl=sinh_vien&act=cv_update&trang=2" method="POSt">
    <div class="media boder p-3 sv8-12 mt-3 mb-3">
        <div class="row col-sm-12 Ng"  style=";margin:auto;">
        <div class="bgr"></div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-2">
                <h5 style="font-weight: 700;">KĨ NĂNG & SỞ TRƯỜNG</h5>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong class="">Kỹ năng làm việc</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <textarea style="height: 100px; width: 100%;" id="career_obj" name="ky_nang_so_truong"
                    class="mb-3 input-text form-control validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success"
                    data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp."><?=$thongtincv['ky_nang_so_truong']?></textarea>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                <p><strong>Sở thích</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
                <textarea style="height: 100px; width: 100%;" id="career_obj" name="so_thich" 
                    class="mb-3 input-text form-control validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success"
                    data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp."><?=$thongtincv['so_thich']?></textarea>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4 mt-3">
                <p><strong>Kỹ năng khác</strong> </p>
            </div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 mt-3">
                <textarea style="height: 100px; width: 100%;" id="career_obj" name="ky_nang_dac_biet"
                    class="mb-3 input-text form-control validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success"
                    data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp."><?=$thongtincv['ky_nang_dac_biet']?></textarea>
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