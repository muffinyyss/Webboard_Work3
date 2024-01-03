<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body align = "center">
    <h1 style="text-align: center;">Webboard Muffin</h1>
    <hr>

    <form>
    <div>
    ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']; ?>
    </div>
    <br>
    <div style="text-align: center;">    
    <table style="border: 2px solid black; width: 40%;" align="center">
        <tr>
            <td colspan="2" style="background-color: #6cd2fe;">แสดงความคิดเห็น</td>
        </tr>
        <tr>
            <td>
                <textarea name="cm" cols="80" rows="10"> </textarea>
            </td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <input type="submit" value="ส่งข้อความ">
            </td>
        </tr>
    </table>
    </form>
        <p style="text-align: center;"><a href="index.html">กลับไปหน้าหลัก</a></p>
</body>
</html>