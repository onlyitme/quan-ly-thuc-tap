<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php require_once('../system/database.php');
    function dangNhap($user, $pass)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE user='$user' and pass='$pass' and chuc_vu='2'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function checkHople($u, $e)
    {
        $sql = "SELECT count(*) as sodong FROM user where user ='$u' and email='$e'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    function updateUser($u,$pass)
    {
        try {
            $sql = "UPDATE  user SET pass='$pass' where user ='$u'";
            execute($sql);
        } catch (Exception  $e) {
            print_r($e->errorInfo);
            exit();
        }
    }
    
    function checkUserTonTai($u)
    {
        $sql = "SELECT count(*) as sodong FROM user WHERE user='$u'";
        $kq = query($sql);
        $row = $kq->fetch();
        $rowcount = $row['sodong'];
        return $rowcount > 0;
    }
    
    ?>
</body>

</html>