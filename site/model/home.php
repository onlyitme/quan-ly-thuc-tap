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
?>