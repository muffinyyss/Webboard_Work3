<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <title>Login</title>
</head>
<body>
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">★Webboard Muffin★</h1>
        <?php include "nav.php" ?>

        <div class="row mt-4">
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
            <div class="col-lg-4 col-md-6 col-sm-8 col-10">
                <?php
                    if(isset($_SESSION['error'])){
                        echo "<div class='alert alert-danger'>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง!</div>";
                        unset($_SESSION['error']);
                    }

                ?>

                <div class="card bg-light text-dark">
                    <div class="card-header">เข้าสู่ระบบ</div>
                    <div class="card-body">
                        <form action="verify.php" method="post">
                            <div class="form-group">
                                <label for="login" class="form-label">Login:</label>
                                <input type="text" name="login" id="login" class="form-control">
                            </div>

                            <div class="form-group mt-2">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="mt-3 d-flex justify-content-center"> 
                                <!-- <a href="newpost.php" class="btn btn-secondary btn-sm">Login</a>
                                <a href="newpost.php" class="btn btn-secondary btn-sm">Reset</a> -->
                                <button type="submit" class="btn btn-secondary btn-sm me-2">Login</button>
                                <button type="reset" class="btn btn-danger btn-sm">Reset</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-3 col-sm-2 col-1"></div>
        </div>

        <?php
            if(isset($_SESSION['id'])){
                header("location:index.php");
            }
        ?>

        <!-- <form action="verify.php" method="post">
            <table style="border: 2px solid black; width: 40%;" align="center">
            <tr>
                <td colspan="2" style="background-color: #6cd2fe;">เข้าสู่ระบบ</td>
            </tr>
            <tr>
                <td>Login</td>
                <td>
                    <input type="text" name="login" size="55" required>
            </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" size="55" required>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value="Login">
                </td>
            </tr> -->

    </table>
    </form>
    <br>

    <p style="text-align: center;">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php"> กรุณาสมัครสมาชิก</a></p>
</div>
</body>
</html>