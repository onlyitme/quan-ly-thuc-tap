<?php
    require_once "../../system/system.php";
    function getConnection()  {
        try {
            $conn = new PDO("mysql:host=".HOST_DB.";dbname=".NAME_DB, USER_DB, PASS_DB);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
    
            return $conn;
            
            } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            }
        }
        function  xuat_sv(){
            $sql="SELECT ho_ten,ten_nganh,ten_dn,ket_qua FROM sinh_vien inner join nganh on sinh_vien.id_nganh=nganh.id_nganh
             inner join phieu_dk_in on sinh_vien.id_sv=phieu_dk_in.id_sv
             inner join doanh_nghiep on phieu_dk_in.id_dn=doanh_nghiep.id_dn
             where phieu_dk_in.trang_thai=3
             ";
             $conn = getConnection();
             $result = $conn->query($sql);
            return $result;
        }
    require_once "../views/Classes/PHPExcel.php";

if (isset($_POST['btnExport'])) {
    $fileType = 'Excel2007';
    $objPHPExcel = PHPExcel_IOFactory::load("product_import.xlsx");
     $array_data = xuat_sv();
    
    // Thiết lập tên các cột dữ liệu
    $objPHPExcel->setActiveSheetIndex(0)
                                ->setCellValue('A1', "STT")
                                ->setCellValue('B1', "họ tên")
                                ->setCellValue('C1', "Chuyên Ngành")
                                ->setCellValue('D1', "Doanh Nghiệp")
                                ->setCellValue('E1', "Kết quả");
    
    // Lặp qua các dòng dữ liệu trong mảng $array_data và tiến hành ghi dữ liệu vào file excel
    $i = 2;
    foreach ($array_data as $value) {
        $objPHPExcel->setActiveSheetIndex(0)
                    ->setCellValue("A$i", "$i")
                    ->setCellValue("B$i", $value['ho_ten'])
                    ->setCellValue("C$i", $value['ten_nganh'])
                    ->setCellValue("D$i", $value['ten_dn'])
                    ->setCellValue("E$i", $value['ket_qua']);
                
        $i++;
    }
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $fileName = 'product_import.xlsx';
    $objWriter->save($fileName);
    header('Content-Disposition: attachment; filename="'. $fileName .'"');
    header('Content-Type:application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
    header('Content-Length:'.filesize($fileName));
    header('Content-Transfer-Encoding:binary');
    header('Cache-Control:must:-revalidate');
    header('Pragma: no-cache');
    readfile($fileName);
    return;
}
?>