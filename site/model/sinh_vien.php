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
?>