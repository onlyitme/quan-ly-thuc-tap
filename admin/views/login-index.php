<link rel="stylesheet" href="../css/login.css">
<?php
session_start();
unset($_SESSION['admin']);
?>
   <link href='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.newscientist.com%2Farticle%2F2244234-the-sun-may-have-formed-because-a-small-galaxy-passed-by-the-milky-way%2F&psig=AOvVaw1exiLbuN7IVfiIhnLqmUCJ&ust=1606070614100000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCPCKn7illO0CFQAAAAAdAAAAABAD' rel='stylesheet' type='text/css'>

<div class="login">
  <h2 class="active"> sign in </h2>
  <form action="/quan-ly-thuc-tap/admin/?ctrl=home&act=dangnhap" method="POST" >
   
    <input type="text" class="text" name="user">
     <span>username</span>

    <br>
    
    <br>

    <input type="password" class="text" name="pass">
    <span>password</span>
    <br>

    
    
    <button type="submit" class="signin">
      Sign In
    </button>


    <hr>

    <a href="/quan-ly-thuc-tap/admin/?ctrl=home&act=taikhoan">Quên mật khẩu?</a>
  </form>

</div>