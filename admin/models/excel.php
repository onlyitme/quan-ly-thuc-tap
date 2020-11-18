<?php require_once('../system/database.php');
  function addNewUserE($user,$pass,$email,$chuc_vu)
  {
      $sql = "INSERT INTO user (user,pass,email,chuc_vu) 
      values('$user','$pass','$email','$chuc_vu')";
      execute($sql);
  }
    function  seach_id_user($email){
        $sql = "SELECT id_user FROM user WHERE email='$email'";
        return queryOne($sql);
    }
    function  addNewSinhvienforexecl($id_user,$mssv,$id_nganh,$ho_ten)
    {
        $sql = "INSERT INTO sinh_vien (id_user,mssv,id_nganh,ho_ten) 
    values('$id_user','$mssv','$id_nganh','$ho_ten')";
        execute($sql);
    }
    function tim_id_nganh($ten_nganh){
        $sql = "SELECT * FROM nganh WHERE ten_nganh='$ten_nganh'";
        return queryOne($sql);
    }
    ?>