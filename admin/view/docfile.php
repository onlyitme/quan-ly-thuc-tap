<?php
require_once "view/Classes/PHPExcel.php";
require_once "model/excel.php";

if(isset($_POST['btn'])){
    $file= $_FILES['file']['tmp_name'];
    $objReader=PHPExcel_IOFactory::createReaderForFile($file);
    $objReader -> setLoadSheetsOnly('Sheet1');
    
    $objExcel = $objReader->load($file);
    $sheetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
    
    $highRow=$objExcel->setActiveSheetIndex()->getHighestRow();
  
    for($row=2;$row<=$highRow;$row++){
        $user=$sheetData[$row]['A'];
        $pass=$sheetData[$row]['B'];
        $email=$sheetData[$row]['C'];
        $chuc_vu=0;
     
        addNewUser($user,$pass,$email,$chuc_vu);
    $id_user_full = seach_id_user($email);
    $id_user =   $id_user_full['id_user'];
        
      $mssv=$sheetData[$row]['D'];
      $ho_ten=$sheetData[$row]['E'];
      $id_nganh=$sheetData[$row]['F'];
    if(isset($id_nganh)&&$id_nganh=='sửa máy may')$id_nganh=20;
    elseif($id_nganh=='Du lịch lữ hành')$id_nganh=18;
    else $id_nganh=17;
      addNewSinhvienforexecl($id_user, $mssv, $id_nganh, $ho_ten);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Để upload thành công file excel của bạn phải có dạng như hình dưới đây</h1>
    <img src="../uploads/Excel.PNG" alt="">
</br>
    <form method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="file" >
    <button type="submit" name="btn">uploads</button>
    </form>
</body>
</html>