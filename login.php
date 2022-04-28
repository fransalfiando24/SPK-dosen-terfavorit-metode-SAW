<div class="loginForm">
    <img src="img/avatar.png" alt="" class="avatar">
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" class="login-submit" value="Login">
        
        <?php 
        if($_POST["login"]){
            $sqla = mysqli_query($kon, "select * from admin where username='$_POST[username]' and password='$_POST[password]'");
            $ra = mysqli_fetch_array($sqla);
            $row = mysqli_num_rows($sqla);
            if($row > 0){
                session_start();
                $_SESSION["useradm"] = $ra["username"];
                $_SESSION["passadm"] = $ra["password"];
                echo "<div align='center'>Login Berhasil</div>";
                echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=dashboard'>";
            }
            else{
                echo "<div align='center'>Login Gagal</div>";
                echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=home'>";
            }
            
        }
    ?>
    </form>
</div>
<img src="img/login.png" class="login-img">