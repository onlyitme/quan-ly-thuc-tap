<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<?php
  define('ARR_CONTROLLER', ["home","nhom_nganh", "nganh", "sinh_vien","doanh_nghiep","user"]) ;
  $ctrl='home';
  if(isset($_GET['ctrl'])==true) $ctrl=$_GET['ctrl'];    
  if (in_array($ctrl, ARR_CONTROLLER)==false) die("Không tồn tại địa chỉ");
  $pathFile ="controllers/$ctrl.php";  
  if (file_exists($pathFile) ==true) require_once $pathFile;
  else echo "Controller $ctrl không tồn tại";
?>
</body>
</html>