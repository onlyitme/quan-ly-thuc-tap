<?php
require_once('../system/database.php');
function ds_nn(){
    $sql ="SELECT * FROM nhom_nganh";
   return query($sql);
}
function ds_nganh($id){
    $sql ="SELECT * FROM nganh where id_nn=$id";
   return query($sql);
}
function ds_dt($id){
    $sql ="SELECT * from dang_tuyen where id_nganh=$id order by id_dt desc";
    return query($sql);
}
function checkkhachhang($user,$pass){
    $sql="select * from user where user='$user' and pass='$pass'";
    return queryOne($sql);
}
function checkkhachhangbyid($id){
    $sql="select * from sinh_vien where id_user='$id' ";
    return queryOne($sql);
}
function checkdoanhnghiepbyid($id){
    $sql="select * from doanh_nghiep where id_dn='$id' ";
    return queryOne($sql);
}
function checknganhbyid($id){
    $sql="select * from nganh where id_nganh='$id' ";
    return queryOne($sql);
}
function coutdangtuyen($id_nganh){
    if(isset($id_nganh) && $id_nganh !=0){$sql= "SELECT COUNT(*) as tongdangtuyen FROM dang_tuyen where id_nganh='$id_nganh'";}else
    $sql= "SELECT COUNT(*) as tongdangtuyen FROM dang_tuyen";
    $kq = query($sql);
    $row = $kq->fetch();
    $rowcount = $row['tongdangtuyen'];
    return $rowcount;
}
function thongtindangtuyen($id_nganh){
    if(isset($id_nganh) && $id_nganh !=0){$sql ="select * from dang_tuyen where id_nganh='$id_nganh' order by id_dt desc";}else
    $sql ="select * from dang_tuyen order by id_dt desc";
    return query($sql);
}
?>