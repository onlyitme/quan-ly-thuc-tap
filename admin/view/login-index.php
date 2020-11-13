<?php
ob_start();
session_start();
require_once "models/khach_hang.php";


if(isset($_GET['log_out'])&&$_GET['log_out']){
	unset($_SESSION['sid']);
	header("location: index.php");
}

if(isset($_POST['login'])&&$_POST['login']){
	$tai_khoan=$_POST['user'];
	$mat_khau=$_POST['pass'];
	
	$checkkhachhang=checkkhachhang($tai_khoan,$mat_khau);
	
	if(isset($checkkhachhang) && $checkkhachhang!=''){	
		if($checkkhachhang['admin']==1){
			$_SESSION['sid']=$checkkhachhang['idkh'];
			header("location: index.php");
		}else{
			echo "<script type='text/javascript'>alert('Sẽ chuyển đến trang chủ');</script>";
		}

	}else{
	
		echo "<script type='text/javascript'>alert('Mầy là thằng nào mà xâm nhập vô đây');</script>";
	}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="section-login">
        <div class="section-login-create flex-betw">
            <h2>LOGIN</h2>
           
                <form action="?ctrl=login" method="post">

                    <div class="login flex-betw">
                        <div class="login-sec flex-betw">
                            <label for="user">Tên đăng nhập</label>
                            <input type="text" name="user" id="user" required>
                        </div>
                        <div class="login-sec flex-betw">
                            <label for="pass">Mật khẩu</label>
                            <input type="password" name="pass" id="pass" required>
                        </div>
                        <input type="submit" value="LOGIN" name="login">
                    </div>
                </form>
                <a href="index.php">Home - Register</a>
        </div>
    </section>
</body>

</html>