<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once('../system/database.php');
  function addNewUser($user,$pass,$email,$chuc_vu)
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
    ?>
</body>

</html>