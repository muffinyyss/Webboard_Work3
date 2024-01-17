<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Muffin</title>
</head>
<body>
    <h1 style="text-align: center;">สมัครสมาชิก</h1>
    <hr>
    <?php
        if(isset($_SESSION['id'])){
            header("location:index.php");
        }
    ?>
    <form action="#">
        <table style="border: 2px solid black; width: 40%;" align="center">
            <tr>
                <td colspan="2" style="background-color: #6cd2fe;">กรอกข้อมูล</td>
            </tr>
            <tr>
                <td>ชื่อบัญชี : </td>
                <td>
                    <input type="text" name="login" size="55" required>
                </td>
            </tr>
            <tr>
                <td>รหัสผ่าน : </td>
                <td>
                    <input type="password" name="password" size="55" required>
                </td>
            </tr>
            <tr>
                <td>ชื่อ-นามสกุล : </td>
                <td>
                    <input type="text" name="password" size="55" required>
                </td>
            </tr>
            <tr>
                <td>เพศ : </td>
                <td>
                    <input type="radio" name="sex" value="m">
                    ชาย <br>
                    <input type="radio" name="sex" value="f">
                    หญิง <br>
                    <input type="radio" name="sex" value="o">
                    อื่นๆ <br>
                </td>
            </tr>
            <tr>
                <td>อีเมล : </td>
                <td>
                    <input type="email" name="password" size="55" required>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="สมัครสมาชิก">
                </td>
            </tr>
    
        </table>
        </form>
        <br>
    
        <p style="text-align: center;"><a href="index.html">กลับไปหน้าหลัก</a></p>
    
</body>
</html>