<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once('../system/database.php');
    function getAllSinhvien()
    {
        $sql = "SELECT * from sinh_vien";
        return query($sql);
    }
    function  addNewSinhvien($id_user, $mssv, $id_nganh, $ho_ten, $gioi_tinh, $sdt, $trang_thai, $ket_qua, $ghi_chu, $hinh)
    {
        $sql = "INSERT INTO sinh_vien (id_user,mssv,id_nganh,ho_ten,gioi_tinh,sdt,trang_thai,ket_qua,ghi_chu,hinh) 
    values('$id_user','$mssv','$id_nganh','$ho_ten','$gioi_tinh','$sdt','$trang_thai','$ket_qua','$ghi_chu','$hinh')";
        execute($sql);
    }
    function getSinhvienByID($id_sv)
    {
        $sql = "SELECT * from sinh_vien where id_sv='$id_sv'";
        return queryOne($sql);
    }
    function  updateSinhvien($id_sv, $id_user, $mssv, $id_nganh, $ho_ten, $gioi_tinh, $sdt, $trang_thai, $ket_qua, $ghi_chu, $hinh)
    {
        try {
            $sql = "UPDATE sinh_vien SET id_user='$id_user',mssv='$mssv',id_nganh='$id_nganh',ho_ten='$ho_ten',gioi_tinh='$gioi_tinh',sdt='$sdt',trang_thai='$trang_thai',ket_qua='$ket_qua',ghi_chu='$ghi_chu',hinh='$hinh'
             WHERE id_sv='$id_sv'";
            execute($sql);
        } catch (Exception  $e) {
            print_r($e->errorInfo);
            exit();
        }
    }
    function deleteSinhvien($id_sv)
    {
        $sql = "DELETE FROM sinh_vien WHERE id_sv='$id_sv'";
        execute($sql);
    }
    function checkID_userTonTaiChuaDung($id_user)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE id_user='$id_user' AND trang_thai='0'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function checkID_userTonTai($id_user)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE id_user='$id_user'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function checkMssvTonTai($mssv)
    {
        $sql = "SELECT count(*) as sodong FROM sinh_vien WHERE mssv='$mssv'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function updateUser($id_user)
    {
        try {
            $sql = "UPDATE user SET trang_thai='1' WHERE id_user='$id_user'";
            execute($sql);
        } catch (Exception  $e) {
            print_r($e->errorInfo);
            exit();
        }
    }
    ?>
</body>

</html>