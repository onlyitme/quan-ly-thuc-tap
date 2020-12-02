<?php
require_once('../system/database.php');
function  updatettcn($ho_ten,$mssv,$gioi_tinh,$ngay_sinh,$anh,$sdt,$dia_chi){
    if(isset($anh)&&$anh!=''){
        $sql = "UPDATE sinh_vien SET ho_ten='$ho_ten', mssv='$mssv', gioi_tinh='$gioi_tinh', ngay_sinh='$ngay_sinh', anh='$anh', sdt='$sdt', dia_chi='$dia_chi'
        where id_user= '$_SESSION[sid]'";
        
    }else $sql = "UPDATE sinh_vien SET ho_ten='$ho_ten', mssv='$mssv', gioi_tinh='$gioi_tinh', ngay_sinh='$ngay_sinh',sdt='$sdt', dia_chi='$dia_chi'
    where id_user= '$_SESSION[sid]'";
    execute($sql);
}
function updatematkhau($mat_khau){
    $sql = "UPDATE user SET pass='$mat_khau' where id_user= '$_SESSION[sid]'";
    execute($sql);
}
function updatecv($tieu_de,$trinh_do,$noi_lam_viec,$muc_tieu_nghe_nghiep,$ky_nang_so_truong,$so_thich,$ky_nang_dac_biet,$word,$excel,$power_point,$outlook,$ung_dung_khac,$av_nghe,$av_noi,$av_doc,$av_viet,$ngon_ngu_khac,$ngay_cap_nhap){
    $sql = "UPDATE ho_so_sv SET tieu_de='$tieu_de', trinh_do='$trinh_do', noi_lam_viec='$noi_lam_viec', muc_tieu_nghe_nghiep='$muc_tieu_nghe_nghiep', ky_nang_so_truong='$ky_nang_so_truong',
    so_thich='$so_thich', ky_nang_dac_biet='$ky_nang_dac_biet', word='$word', excel='$excel', power_point='$power_point', outlook='$outlook', ung_dung_khac='$ung_dung_khac', av_nghe='$av_nghe', av_noi='$av_noi',
    av_doc='$av_doc', av_viet='$av_viet', ngon_ngu_khac='$ngon_ngu_khac', ngay_cap_nhap='$ngay_cap_nhap'  where id_sv= '$_SESSION[sid_sv]'";
    execute($sql);
}
function updatecv_1($tieu_de,$trinh_do,$noi_lam_viec,$muc_tieu_nghe_nghiep,$ngay_cap_nhap){
    $sql = "UPDATE ho_so_sv SET tieu_de='$tieu_de', trinh_do='$trinh_do', noi_lam_viec='$noi_lam_viec', muc_tieu_nghe_nghiep='$muc_tieu_nghe_nghiep', ngay_cap_nhap='$ngay_cap_nhap'  where id_sv= '$_SESSION[sid_sv]'";
    execute($sql);
}
function updatecv_2($ky_nang_so_truong,$so_thich,$ky_nang_dac_biet,$ngay_cap_nhap){
    $sql = "UPDATE ho_so_sv SET  ky_nang_so_truong='$ky_nang_so_truong',so_thich='$so_thich', ky_nang_dac_biet='$ky_nang_dac_biet', ngay_cap_nhap='$ngay_cap_nhap'  where id_sv= '$_SESSION[sid_sv]'";
    execute($sql);
}
function updatecv_3($word,$excel,$power_point,$outlook,$ung_dung_khac,$av_nghe,$av_noi,$av_doc,$av_viet,$ngon_ngu_khac,$ngay_cap_nhap){
    $sql = "UPDATE ho_so_sv SET  word='$word', excel='$excel', power_point='$power_point', outlook='$outlook', ung_dung_khac='$ung_dung_khac', av_nghe='$av_nghe', av_noi='$av_noi',
    av_doc='$av_doc', av_viet='$av_viet', ngon_ngu_khac='$ngon_ngu_khac', ngay_cap_nhap='$ngay_cap_nhap'  where id_sv= '$_SESSION[sid_sv]'";
    execute($sql);
}
function thongtincv(){
    $sql="SELECT * From ho_so_sv where id_sv='$_SESSION[sid_sv]'";
   return queryOne($sql);
}
function thongtindkallbyid(){
    $sql="SELECT * from phieu_dk_in where id_sv='$_SESSION[sid_sv]'";
   return queryAll($sql);
}
?>