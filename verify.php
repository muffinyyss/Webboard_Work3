<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
        <?php
            if(isset($_SESSION['id'])){
                header("location:index.php");
            }
    
            $login = $_POST['login'];
            $pwd = $_POST['password'];

            if($login == "admin" && $pwd == "ad1234"){
                //echo "ยินดีต้อนรับคุณ ADMIN";
                $_SESSION["username"] = "admin";
                $_SESSION["role"] = "a";
                $_SESSION["id"] = session_id();
                header("location:index.php");
                die();
            }
            elseif($login == "member" && $pwd == "mem1234"){
                //echo "ยินดีต้อนรับ MEMBER";
                $_SESSION["username"] = "member";
                $_SESSION["role"] = "m";
                $_SESSION["id"] = session_id();
                header("location:index.php");
                die();
            }
            else{
                $_SESSION['error'] = 'error';
                header("location:login.php");
                die();
                //echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
            }
            
        ?>


</body>
</html>