<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Muffin</h1>
    <hr>
    <div style="text-align: center;">
        <?php
    
        if(isset($_SESSION['id'])){
            header("location:index.php");
        }
    
            
            // echo "เข้าสู่ระบบด้วย <br>";
            // echo "Login = $_POST[login] <br>";
            // echo "Password = $_POST[password]";
            $login = $_POST['login'];
            $pwd = $_POST['password'];

            if($login == "admin" && $pwd == "ad1234"){
                echo "ยินดีต้อนรับคุณ ADMIN";
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = session_id();
            }
            elseif($login == "member" && $pwd == "mem1234"){
                echo "ยินดีต้อนรับ MEMBER";
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = session_id();
            }
            else{
                echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
            

            
        ?>
        <p style="text-align: center;"><a href="index.php">กลับไปยังหน้าหลัก</a></p>

        <!-- เข้าสู่ระบบด้วย <br>
        Login = <?php echo $_POST['login']; ?> <br>
        Password = <?php echo $_POST['password']; ?> -->

    </div>
    
</body>
</html>