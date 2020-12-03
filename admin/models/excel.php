<?php require_once('../system/database.php');

  function addNewUserE($user,$pass,$email,$chuc_vu){
      $sql = "INSERT INTO user (user,pass,email,chuc_vu) 
      values('$user','$pass','$email','$chuc_vu')";
      execute($sql);
  }
    function  seach_id_user($user){
        $sql = "SELECT id_user FROM user WHERE user='$user'";
        return queryOne($sql);
    }
    function  seach_id_sv($id_user){
        $sql = "SELECT id_sv FROM sinh_vien WHERE id_user='$id_user'";
        return queryOne($sql);
    }
    function  addNewSinhvienforexecl($id_user,$ho_ten,$mssv)
    {
        $sql = "INSERT INTO sinh_vien (id_user,ho_ten,mssv) 
    values('$id_user','$ho_ten','$mssv')";
        execute($sql);
    }
    function  addNewhosoforexecl($id_sv)
    {
        $sql = "INSERT INTO ho_so_sv (id_sv) 
    values('$id_sv')";
        execute($sql);
    }
    ?>