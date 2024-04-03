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

    <title>Webboard Muffin</title>
    <style>
        h1{
            text-align: center;
        }
    </style>

    <script>
        function myFunction(){
            let r = confirm("ต้องการจะลบจริงหรือไม่?");
            return r;
        }

        function edit(name){
            var button = document.getElementById('button');
            button.innerHTML = name;
        }

        
    </script>

</head>
<body>
    
    <div class="container-lg">
        <h1 style="text-align: center;" class="mt-3">★Webboard Muffin★</h1>
        <?php include "nav.php" ?>

    <div class="mt-3 d-flex justify-content-between">
        <!-- <?php if(isset($_SESSION['id'])){ ?> -->
        <div>
            <label>หมวดหมู่</label>
            <span class="dropdown">
                <?php
                    if(isset($_GET['cat_id']) && !empty($_GET['cat_id'])){
                        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                        $sql = "SELECT * FROM category as c
                                WHERE c.id = {$_GET['cat_id']}";
                        foreach($conn->query($sql) as $row){
                ?>
                        <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?=$row['name']?>
                        </button>

                <?php
                    }
                    }else{    
                ?>
                    <button class="btn btn-light btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        --ทั้งหมด--
                    </button>
                <?php
                    }
                ?>
                
                <ul class="dropdown-menu" aria-labelledby="Button2">
                    <li><a class="dropdown-item" href="index.php">ทั้งหมด</a></li>
                    <?php
                        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
                        $sql = "SELECT * FROM category";
                        foreach($conn->query($sql) as $row){
                            echo "<li><a class='dropdown-item' href='index.php?cat_id={$row['id']}'>{$row['name']}</a></li>";
                        }
                        $conn = null;
                    
                    ?>

                </ul>
                
            </span>
        </div>
       
        <div> <a href="newpost.php" class="btn btn-success btn-sm">
            <i class="bi bi-file-earmark-plus"></i> สร้างกระทู้ใหม่</a>
        </div>
        <?php } ?>
    </div>
    
    <table class="table table-striped mt-4">
    <?php
        $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");

        $sql = "SELECT t3.name, t1.title, t1.id, t2.login, t1.post_date FROM post as t1
        INNER JOIN user as t2 ON (t1.user_id = t2.id)
        INNER JOIN category as t3 ON (t1.cat_id = t3.id)";

        if(isset($_GET['cat_id']) && !empty($_GET['cat_id'])){
            $category_id = $_GET['cat_id'];
            $sql .= " WHERE t1.cat_id = $category_id";
        }
        $sql .= " ORDER BY t1.post_date DESC";

        $result = $conn->query($sql);

        while($row = $result->fetch()){
            echo "<tr><td class='d-flex justify-content-between'>

                <div [{$row['name']}]
                    <a href='post.php?id={$row['id']}' style='text-decoration:none'> {$row['title']} </a>
                    <br>
                    {$row['login']} - {$row['post_date']} </div> ";

                if(isset($_SESSION['id'])){
                    echo "<span style='display: flex; justify-content: center;'>";

                    if(isset($_SESSION['id']) && $_SESSION['role'] == 'a') {
                        echo "<span class='me-2 mt-2'><a href=delete.php?id=$row[id] class='btn btn-danger btn-sm' onclick='return myFunction()'><i class='bi bi-trash3'></i></a></span>";
                        if($_SESSION['user_id'] == $row['user_id']) {
                            echo "<span class='me-2 mt-2'><a href=editpost.php?id=$row[id] class='btn btn-warning btn-sm'><i class='bi bi-pencil-square'></i></a></span></span>";
                        }
                    }

                    else if(isset($_SESSION['id']) && $_SESSION['role'] != 'a') {
                        if($_SESSION['user_id'] == $row['user_id']) {
                            echo "<span class='me-2 mt-2'><a href=delete.php?id=$row[id] class='btn btn-warning btn-sm'><i class='bi bi-pencil-square'></i></a></span></span>
                            <span class='me-2 mt-2'><a href=editpost.php?id=$row[id] class='btn btn-warning btn-sm'><i class='bi bi-pencil-square'></i></a></span></span>";
                        }
                    }
                }
                echo "</td> </tr>";

        }
        $conn = null;
    ?>

    </table>
    </div>
</body>
</html>