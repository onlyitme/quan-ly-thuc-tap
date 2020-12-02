
    <?php require_once('../system/database.php');
    function getAllUser()
    {
        $sql = "SELECT * from user";
        return query($sql);
    }
    function getAllDangtuyen()
    {
        $sql = "SELECT * from dang_tuyen";
        return query($sql);
    }

    function getAllDoanhnghiep()
    {
        $sql = "SELECT * from doanh_nghiep";
        return query($sql);
    }
    function  addNewDoanhnghiep($id_user, $ten_dn, $dia_chi, $sdt, $an_hien, $anh, $website)
    {
        $sql = "INSERT INTO doanh_nghiep (id_user,ten_dn,dia_chi,sdt,an_hien,anh,website) 
    values('$id_user','$ten_dn','$dia_chi','$sdt','$an_hien','$anh','$website')";
        execute($sql);
    }
    function addNewUser($user, $pass, $email, $chuc_vu)
    {
        $sql = "INSERT INTO user (user,pass,email,chuc_vu) 
        values('$user','$pass','$email','$chuc_vu')";
        execute($sql);
    }
    function getDoanhnghiepByID($id_dn)
    {
        $sql = "SELECT * from doanh_nghiep where id_dn='$id_dn'";
        return queryOne($sql);
    }

    function updateUser($id_user, $email)
    {
        try {
            $sql = "UPDATE user SET email='$email' WHERE id_user='$id_user'";
            execute($sql);
        } catch (Exception  $e) {
            print_r($e->errorInfo);
            exit();
        }
    }
    function  updateDoanhnghiep($id_dn, $id_user, $ten_dn, $masothue, $dia_chi, $website, $fax, $sdt, $sdt_ban)
    {
        try {
            $sql = "UPDATE doanh_nghiep SET id_user='$id_user', ten_dn ='$ten_dn',masothue='$masothue',dia_chi='$dia_chi',website='$website',fax='$fax',sdt='$sdt',sdt_ban='$sdt_ban'
             WHERE id_dn='$id_dn'";
            execute($sql);
        } catch (Exception  $e) {
            print_r($e->errorInfo);
            exit();
        }
      
    }
    function deleteUser($id_user)
    {
        $sql = "DELETE FROM user WHERE id_user='$id_user'";
        execute($sql);
    }
    function checkUserTonTai($user)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE user='$user'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function checkEmailTonTai($email)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE email='$email'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function checkuserTonTaiChuaDung($user)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE user='$user' ";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function demBaidang($id_dn)
    {
        $sql = "SELECT count(*) as sodong FROM dang_tuyen WHERE id_dn='$id_dn'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
    }
    function demSinhvien($id_dt)
    {
        $sql = "SELECT count(*) as sodong FROM phieu_dk_in WHERE id_dt='$id_dt' AND trang_thai='1' ";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount;
    }
    function searchDoanhnghiep($ten_dn)
    {
        $sql = "SELECT * from doanh_nghiep WHERE ten_dn='$ten_dn'";
        return query($sql);
    }
    function checkDoanhnghiepTonTai($ten_dn)
    {
        $sql = "SELECT count(*) as sodong FROM doanh_nghiep WHERE ten_dn='$ten_dn'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    
    
    // baokun
    function checkdoanhnghiep_iduser($id){
        $sql="select * from doanh_nghiep where id_user='$id'";
        return queryOne($sql);
    }
    function add_dangtuyen($id_nganh,$id_dn,$tieu_de,$luong_khoi_dau,$luong_ket_thuc,$sl_sv_can,$full_part_time,$thoi_gian_lam_viec,$che_do_thuong,$dao_tao,$tang_luong,$nghi_phep_nam,$du_lich,$che_do_bao_hiem,$mo_ta,$yeu_cau,$quyen_loi)
    {
        $sql = "INSERT INTO dang_tuyen (id_nganh,id_dn,tieu_de,luong_khoi_dau,luong_ket_thuc,sl_sv_can,full_part_time,thoi_gian_lam_viec,che_do_thuong,dao_tao,tang_luong,nghi_phep_nam,du_lich,che_do_bao_hiem,mo_ta,yeu_cau,quyen_loi)) 
        values('$id_nganh','$id_dn','$tieu_de','$luong_khoi_dau','$luong_ket_thuc','$sl_sv_can','$full_part_time','$thoi_gian_lam_viec','$che_do_thuong','$dao_tao','$tang_luong','$nghi_phep_nam','$du_lich','$che_do_bao_hiem','$mo_ta','$yeu_cau','$quyen_loi')";
        execute($sql);
    }
    ?>