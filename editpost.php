<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newpost</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>
<body>
    <div class="container">
        <h1 style="text-align: center;" class="mt-3">★Webboard Muffin★</h1>
        <?php include "nav.php"?>
        <div class="row mt-4">
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
            <div class="col-lg-6 col-md-8 col-sm-10">
                <div class="card border-warning">
                    <div class="card-header bg-warning text-white">แก้ไขกระทู้</div>
                    <div class="card-body">
                        <form action="newpost_save.php" method="post">
                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">หมวดหมู่:</label>
                                <div class="col-lg-9">
                                    <select name="category" class="form-select">
                                        <?php
                                            $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                                            $sql = "SELECT * FROM category";
                                            foreach($conn->query($sql) as $row){
                                                echo "<option value=$row[id]>$row[name]</option>";
                                            }
                                            $conn = null;
                                        ?>
                                        <!-- <option value="general">เรื่องทั่วไป</option>
                                        <option value="study">เรื่องเรียน</option> -->
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">หัวข้อ:</label>
                                <div class="col-lg-9">
                                    <input type="text" name="topic" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <label class="col-lg-3 col-form-label">เนื้อหา:</label>
                                <div class="col-lg-9">
                                    <textarea name="comment" rows="8" class="form-control" required></textarea>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-lg-12 d-flex justify-content-center">
                                    <button type="submit" class="btn btn-warning btn-sm text-white me-2">
                                        <i class="bi bi-caret-right-square"></i> บันทึกข้อความ
                                    </button>

                                    
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-2 col-sm-1"></div>
        </div>
    </div>
    <br>
</body>
</html>