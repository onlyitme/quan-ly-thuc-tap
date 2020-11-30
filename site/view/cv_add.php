                            <div class="media boder p-3 sv8-12 mb-3">
                            <form action="index.php?ctrl=sinh_vien&act=cv_add" method="POST">
                                <div class="row col-sm-12">
                                    <div  class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 ">
                                        <h5  style="border-left: 5px rgb(6, 2, 219) solid;padding: 5px 5px;">THÔNG TIN CHUNG</h5>           
                                    </div>
                                    <div  class="col-sm-2">
                                        <p> &nbsp; </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Tiêu đề hồ sơ</strong> </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2" style="color: black;"  placeholder="Tuổi trẻ chưa trãi sự đời" id="tieude"></p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Trình độ cao nhất</strong> </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <p>
                                            <select style="width:100%;padding: 6px 0;" name="trinhdo" ><option value="0">Trình độ</option><option value="1">Cao học</option><option value="2">Đại học</option><option value="3">Cao Đẳng</option><option selected value="4">Trung cấp</option> <option  value="5">3 Nháy/Ngày</option></select>
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Ngành nghề mong muốn</strong> </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <p>
                                            <select style="width:100%;padding: 6px 0;" name="chonnghe" ><option value="0">Chọn ngành</option><option value="1">Tài chính/Kế toán</option><option value="2">Kinh doanh/Bán hàng</option><option value="3">Dịch vụ</option><option value="4">Giáo dục/Luật sưsư</option><option value="5">Điện tử/Game</option><option selected value="6">Developer</option></select>
                                            
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Nơi làm việc mong muốn</strong> </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <p>
                                            <select style="width:100%;padding: 6px 0;" name="chonnoi" ><option value="0">Chọn nơi</option><option value="1">Hà lội</option><option value="2">Đà nẻn</option><option value="3">Tây nguyên</option><option selected value="4">Tp.HCM</option><option value="5">Cần Thơ</option></select>
                                            
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Mục tiêu nghề nghiệp</strong> </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <textarea style="height: 150px; width: 100%;" id="career_obj" name="career_obj" class="mb-3 input-text  validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success" data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp." >Trở thành ông này bà nọ</textarea>
                                    </div>
                                    
                                </div>
                                
                            </div>
                            <div class="col-sm-12 ">
                                <div class="col-sm-2 mr-center">
                                    <hr style="background: rgb(110, 110, 110);">
                                </div>     
                            </div>
                            <div class="media boder p-3 sv8-12 mt-3 mb-3">
                                <div class="row col-sm-12">
                                    <div  class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 ">
                                        <h5 style="border-left: 5px rgb(6, 2, 219) solid;padding: 0 5px;">KĨ NĂNG & SỞ TRƯỜNG <span style="font-size: 12pt; color: rgb(54, 202, 247);">(không bắt buộc)</span> </h5>        
                                    </div>
                                    <div  class="col-sm-2">
                                        <p> &nbsp; </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Kỹ năng/Sở trường</strong> </p>           
                                    </div>
                                    <div class="col-sm-8">
                                        <p>
                                            <select style="width:100%;padding: 6px 0;" name="kynang" ><option selected value="0">Tinh thông thập bát ban võ nghệ</option><option value="1">Lãnh đạo</option><option value="2">Làm việc nhóm</option><option value="3">Quản lý giao tiếp</option><option value="4">Quản lý stress</option><option value="5">Quản lý dự án</option></select>
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Sở thích</strong> </p>           
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea style="height: 150px; width: 100%;" id="career_obj" name="career_obj" class="mb-3 input-text  validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success" data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp.">Đá bóng, chơi game</textarea>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Kỹ năng đặc biệt/tài lẻ</strong> </p>           
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea style="height: 150px; width: 100%;" id="career_obj" name="career_obj" class="mb-3 input-text  validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success" data-errormessage-value-missing="Yêu cầu nhập mục tiêu nghề nghiệp." >Tấu hài</textarea>
                                    </div>
                                </div>   
                            </div>
                            <div class="col-sm-12 ">
                                <div class="col-sm-2 mr-center">
                                    <hr style="background: rgb(110, 110, 110);">
                                </div>     
                            </div>
                            <div class="media boder p-3 sv8-12 mt-3 mb-3">
                                <div class="row col-sm-12">
                                    <div  class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 ">
                                        <h5 style="border-left: 5px rgb(6, 2, 219) solid;padding: 0 5px;">TIN HỌC & NGOẠI NGỮ</h5>           
                                    </div>
                                    <div  class="col-sm-2">
                                        <p> &nbsp; </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <h6><strong>Tin học văn phòng</strong></h6>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        &nbsp;
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        &nbsp;           
                                    </div>
                                    <div  class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 taohoso">
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1">&nbsp;</div>
                                            <div class="col-2 mr-1"style="background-color: rgb(211, 234, 255);">Tốt</div>
                                            <div class="col-2 mr-1" style="background-color: aliceblue;">Khá</div>
                                            <div class="col-2 mr-1"style="background-color: rgb(211, 234, 255);">Trung bình</div>
                                            <div class="col-2 mr-1" style="background-color: aliceblue;">Kém</div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: aliceblue;">
                                                MS word
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc1" name="tinhoc_level1"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc1" name="tinhoc_level1"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc1" name="tinhoc_level1"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc1" name="tinhoc_level1"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: rgb(211, 234, 255);">
                                                MS Excel
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc2" name="tinhoc_level2"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc2" name="tinhoc_level2"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc2" name="tinhoc_level2"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc2" name="tinhoc_level2"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: aliceblue;">
                                                Power Point
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc3" name="tinhoc_level3"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc3" name="tinhoc_level3"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc3" name="tinhoc_level3"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc3" name="tinhoc_level3"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-2 ml-3 mr-1" style="background-color: rgb(211, 234, 255);">
                                                Outlook
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc4" name="tinhoc_level4"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc4" name="tinhoc_level4"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc4" name="tinhoc_level4"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="tinhoc4" name="tinhoc_level4"value="4">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 taohoso  ml-5">
                                        <p>Các thành tích nổi bật khác</p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">    
                                        <textarea style="height: 150px; width: 100%;" id="career_obj" name="career_obj" class="mb-3 input-text  validate[required,minSize[5],maxSize[1000]] font13 input-has-tooltip select_form_ttc inputbox-success" ></textarea>                                       
                                    </div>
                                    <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 ml-4">
                                        <h6><strong>Ngoại ngữ </strong> </h6>           
                                    </div>
                                    <div class="col-sm-1">
                                        <p> &nbsp; </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 taohoso ml-5">
                                        <p>Thông tạo </p>           
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                                        <p >
                                            <select class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3" style="padding: 6px 0px;" name="ngoaingu" ><option selected value="0">Ngôn ngữ</option><option selected value="1">Tiếng Anh</option><option value="2">Tiếng Trung</option><option value="3">Tiếng Nhật</option><option value="4">Tiếng Tây Ban Nha</option><option value="5">Tiếng Do Thái</option><option value="6">Pháp</option></select>
                                        </p> 
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                                        <p> &nbsp; </p>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 taohoso">
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1">&nbsp;</div>
                                            <div class="col-2 mr-1"style="background-color: rgb(211, 234, 255);">Tốt</div>
                                            <div class="col-2 mr-1" style="background-color: aliceblue;">Khá</div>
                                            <div class="col-2 mr-1"style="background-color: rgb(211, 234, 255);">Trung bình</div>
                                            <div class="col-2 mr-1" style="background-color: aliceblue;">Kém</div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: aliceblue;">
                                                Nghe
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu1" name="ngonngu_level1"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu1" name="ngonngu_level1"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu1" name="ngonngu_level1"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu1" name="ngonngu_level1"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: rgb(211, 234, 255);">
                                                Nói
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu2" name="ngonngu_level2"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu2" name="ngonngu_level2"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu2" name="ngonngu_level2"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu2" name="ngonngu_level2"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-1">
                                            <div class="col-2 ml-3 mr-1" style="background-color: aliceblue;">
                                                Đọc
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu3" name="ngonngu_level3"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu3" name="ngonngu_level3"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu3" name="ngonngu_level3"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu3" name="ngonngu_level3"value="4">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-2 ml-3 mr-1" style="background-color: rgb(211, 234, 255);">
                                                Viết
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu4" name="ngonngu_level4"value="1">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu4" name="ngonngu_level4"value="2">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu4" name="ngonngu_level4"value="3">
                                            </div>
                                            <div class="col-2 mr-1">
                                                <input type="radio"id="ngonngu4" name="ngonngu_level4"value="4">
                                            </div>
                                        </div>
                                    </div>

                                
                                </div>   
                            </div>
                            <div class="col-12 text-center mt-4">
                                <a href="file:///C:/Users/ASUS/Documents/GitHub/quan-ly-thuc-tap/site/view/sv3-qlhoso.html">
                                    <button class="buttoncapnhat ml-4" type="button" onclick="alert('Cập nhật thành công')">
                                        <svg style="color: white;" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-journal-bookmark mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                            <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                                        </svg>
                                        Cập nhật
                                    </button>
                                    <button class="buttonhuy ml-2" type="button" > 
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle mr-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                            <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                        </svg>
                                        Hủy
                                    </button>
                                </a>
                                </form>    
                            </div>

                       
   