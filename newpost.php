<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard Muffin</h1>
    <hr>
    <?php
        if(!isset($_SESSION['id'])){
            header("location:index.php");
        }
    ?>

    ผู้ใช้ : <?php echo $_SESSION['username'];?>
    <form action="#">
        <table>
            หมวดหมู่ : 
            <select>
                <option value="genaral">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
            </select>
            <tr>
                <td>หัวข้อ : </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>เนื้อหา : </td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="บันทึกข้อความ"></td>
            </tr>
        </table>
    </form>
</body>
</html>