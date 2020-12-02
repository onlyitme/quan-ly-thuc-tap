<h5 class="mb-3" style="border-left: 5px rgb(98, 0, 255) solid;padding: 0 5px;font-weight: 600;">DANH SÁCH ĐƠN XIN THỰC TẬP</h5>
                            <?php foreach($phieu_dk_all as $row){
                                $thong_tin_dt= checkdangtuyenbyid($row['id_dt']);
                                $thong_tin_dn= checkdoanhnghiepbyid($thong_tin_dt['id_dn']);
                                ?>
                                <div class="media col-sm-12 sv-12">
                                <div style="margin-right: 6px;" class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 ">
                                    <div class="bg-ds mt-3">
                                        
                                    </div>
                                </div>
                                <div style="margin-right: 6px;" class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 ds-hva">
                                    <a href="index.php?act=thongtindt&id_dt=<?=$thong_tin_dt['id_dt']?>"><strong><h5 class="media-heading mt-3" style="font-weight: bold;"><?=$thong_tin_dt['tieu_de']?></h5></strong>  </a>                                                           
                                    <p style="margin-bottom:5px;" ><?=$thong_tin_dn['ten_dn']?></p>
                                    <p style="margin-bottom:-1px;">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                        </svg>:
                                      <a style="font-size: 10pt;" href="#"><?=$thong_tin_dn['dia_chi']?></a>
                                    </p>
                                    <p style="margin-bottom:-1px;" class="mb-2">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                        </svg>:
                                        <a style="font-size: 10pt;" href="#"><?=$thong_tin_dn['sdt']?> </a>– <a style="font-size: 10pt;" href="#"><?=$thong_tin_dn['sdt_ban']?></a>
                                    </p>
                                </div>         
                                <div  class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 "style="padding: 5px 15px;">
                                    <div class="row" >
                                        <div class="col-11 col-sm-11 col-md-11 col-lg-11 col-xl-11 mb-5 ml-5" style="padding: 5px 10px; display: flex; ">
                                            <div class="item mr-2">
                                                <p style="color:tomato;">Ngày</p>
                                                <span style="margin-top: -10px;" id="days<?=$row['id_dt']?>">00</span>
                                            </div> <span style="margin-top: 29px;margin-right: 2px;" >:</span>
                                            <div class="item mr-2">
                                                <p style="color:tomato;">Giờ</p>
                                                <span style="margin-top: -10px;" id="hours<?=$row['id_dt']?>">00</span>
                                            </div><span style="margin-top: 29px;margin-right: 2px;" >:</span>
                                            <div class="item mr-2">
                                                <p style="color:tomato;">Phút</p>
                                                <span style="margin-top: -10px;" id="minutes<?=$row['id_dt']?>">00</span>
                                            </div><span style="margin-top: 29px;margin-right: 2px;" >:</span>
                                            <div class="item mr-2">
                                                <p style="color:tomato;">Giây</p>
                                                <span style="margin-top: -10px;" id="seconds<?=$row['id_dt']?>">00</span>
                                            </div>
                                       </div>
                                       <div id="kq_trangthai<?=$row['id_dt']?>" class="row w-100"></div>
                                    </div>

                                </div>
                                                           
                            </div>
                            <div class="col-sm-12 ">
                                <div class="col-sm-2 mr-center">
                                    <hr style="background: rgb(110, 110, 110);">
                                </div>     
                            </div> 
                            

                            <?php if($row['trang_thai']==0){ ?>
                                <script>
                                    var kq='<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center" ></div>'
                                            +'<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mt-2">'
                                                +'<div style="color: rgb(0, 155, 13);">'
                                                    +'<strong style="margin-left: -10px;color: gold;">Đang chờ xác nhận.</strong>'
                                               +'</div>'
                                           +'</div>'
                                                document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            
                                </script>
                                <?php } elseif($row['trang_thai']==1){?>
                                <script>
                                        var fuT =new Date("Dec 4,2020 00:00:00:00").getTime()
                                        setInterval(function(){
                                        var noW = new Date().getTime()
                                        var D = fuT -noW
                                        var days = Math.floor(D/(1000*60*60*24))
                                        var hours = Math.floor(D/(1000*60*60))
                                        var minutes = Math.floor(D/(1000*60))
                                        var seconds = Math.floor(D/(1000))
                                        var kq=
                                        hours %=24
                                        minutes %=60
                                        seconds %=60
                                        if(seconds>0){document.getElementById("days<?=$row['id_dt']?>").innerText = days
                                        document.getElementById("hours<?=$row['id_dt']?>").innerText = hours
                                        document.getElementById("minutes<?=$row['id_dt']?>").innerText = minutes
                                        document.getElementById("seconds<?=$row['id_dt']?>").innerText = seconds

                                            var kq= '<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center" >'
                                          +' <button class="buttoncn" onclick="xac_thuc(<?=$row['id_phieu']?>)" style="width: 100%;" > chấp nhận </button> </div>'
                                          +'<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">'
                                          +' <div style="color: rgb(0, 155, 13);">'
                                          +'<strong style="margin-left: -10px;">'
                                                    +'<svg width="1.4em" height="1.4em" viewBox="0 0 16 16" class="bi bi-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">'
                                                        +'<path fill-rule="evenodd" d="M10.97 4.97a.75.75 0 0 1 1.071 1.05l-3.992 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.236.236 0 0 1 .02-.022z"/>'
                                                    +'</svg>Đã phê duyệt'
                                                +'</strong>'
                                            +'</div>'
                                       +'</div>'
                                            document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            document.getElementById("days<?=$row['id_dt']?>").innerText = days
                                            document.getElementById("hours<?=$row['id_dt']?>").innerText = hours
                                            document.getElementById("minutes<?=$row['id_dt']?>").innerText = minutes
                                            document.getElementById("seconds<?=$row['id_dt']?>").innerText = seconds
                                        }else{

                                                doi_tt_dt(<?php $row['id_phieu'] ?>);
                                                var kq='<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center" ></div>'
                                            +'<div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-2">'
                                                +'<div style="color: rgb(0, 155, 13);">'
                                                    +'<strong style="margin-left: -10px;color: red;"><i class="fa fa-clock-o"style="color:tomato;"></i> Hết hạn.</strong>'
                                               +'</div>'
                                           +'</div>'
                                                document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            }
                                        

                                    },1000)
                                </script>
                            <?php }  elseif($row['trang_thai']==2){?>
                                <script>
                                    var kq='<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center" ></div>'
                                            +'<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mt-2">'
                                                +'<div style="color: rgb(0, 155, 13);">'
                                                    +'<strong style="margin-left: -10px;color: red;">Không được phê duyệt.</strong>'
                                               +'</div>'
                                           +'</div>'
                                                document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            
                                </script>
                            <?php } elseif($row['trang_thai']==3){ ?>
                                <script>
                                    var kq='<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center" ></div>'
                                            +'<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mt-2">'
                                                +'<div style="color: rgb(0, 155, 13);">'
                                                    +'<strong style="margin-left: -10px;">Đã đồng ý thực tập.</strong>'
                                               +'</div>'
                                           +'</div>'
                                                document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            
                                </script>
                            <?php } elseif($row['trang_thai']==4){ ?>
                                <script>
                                    var kq='<div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 text-center" ></div>'
                                            +'<div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10 mt-2">'
                                                +'<div style="color: rgb(0, 155, 13);">'
                                                    +'<strong style="margin-left: -10px;color: red;"><i class="fa fa-clock-o"style="color:tomato;"></i> Đã từ chối xác thực .</strong>'
                                               +'</div>'
                                           +'</div>'
                                                document.getElementById("kq_trangthai<?=$row['id_dt']?>").innerHTML = kq
                                            
                                </script>
                            <?php } ?>
                       <?php } ?>
                       <script>
                                function xac_thuc(id){
                                    alert(id);
                                   $.ajax({
                                       type: "post",
                                       url: "index.php?ctrl=sinh_vien&act=xac_thuc_sv",
                                       data: {id},
                                       success: function (response) {
                                        location.reload();
                                       }
                                   });
                                    
                                }
                            </script>


                           

                           
                            

                            
                            


