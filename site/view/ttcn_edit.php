 
                            
                         <form action="index.php?ctrl=sinh_vien&act=ttcn_update" method="post" id="capnhapttcn" enctype="multipart/form-data">
                            <div class="media boder p-3 sv8-12 mt3">
                                <div class="row col-sm-12">
                                    <div  class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <h5 style="border-left: 5px rgb(6, 2, 219) solid;padding: 0 5px;">THÔNG TIN CÁ NHÂN</h5>           
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4" style="height: 300px;">
                                    <p><strong>Ảnh đại diện</strong></p>
                                    <a href="#" class="tep1 ">
                                    <img  src="../uploads/<?=$ttsv['anh']?>" onerror=this.src="view/images/avt1.jpg" alt="John Doe" >
                                    </a> 
                                    <div class="tep2">
                                        <input type="file" name="anh">
                                    </div>
                                    
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        
                                    <p> &nbsp; </p>
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Họ và tên</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2"  value="<?=$ttsv['ho_ten']?>" name="ho_ten" id="ho_ten"></p>
                                    </div>

                                    

                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Mã Số Sinh Viên</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p><input type="text" class="form-control mb-2 mr-sm-2"  value="<?=$ttsv['mssv']?>" name="mssv" id="mssv"></p>
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Giới tính</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p style="margin-top: -5px;">
                                            <input type="radio" id="male" name="gioi_tinh" value="1" checked>                                   
                                            <label style="margin-right: 10px;" for="male">Nam</label>
                                            <input type="radio" id="male" name="gioi_tinh" value="0">                                   
                                            <label for="male">Nữ</label>
                                        </p> 
                                    </div>

                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Ngày sinh</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p style="margin-top: -5px; width: 100%;"><select name="day"><option value="0">Ngày</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
                                            <select name="month"><option value="0">Tháng</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>
                                            <select name="year"><option value="0">Năm</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option></select>                        
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Số Điện Thoại</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p>
                                            <input type="number" value="<?=$ttsv['sdt']?>" id="sdt" name="sdt" class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success" data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại." data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự.">                                            
                                        </p>
                                    </div>
                                    <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 ml-4">
                                        <p><strong>Địa Chỉ</strong></p>   
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8 ml-2">
                                        <p>
                                            <input type="text" id="dia_chi" name="dia_chi" class="form-control mb-2 mr-sm-2 frm_profile w315 validate[required,minSize[5]] inputbox-success" data-errormessage-value-missing="Yêu cầu nhập chỗ ở hiện tại." data-errormessage-range-underflow="Chỗ ở hiện tại phải lớn hơn hoặc bằng 5 ký tự." value="<?=$ttsv['dia_chi']?>">                                            
                                        </p>
                                    </div> 
                                    <div class="col-12 text-center mt-4">
                                       
                                            <button class="buttoncapnhat ml-4" type="submit" >
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
                                        
                                    </div>                                    
                                </div>    
                            </div>
                            </form>
  
    
                       