<?php
    session_start();
    $cate = $_POST['category'];
    $top = $_POST['topic'];
    $comm = $_POST['comment'];
    $user = $_SESSION['user_id'];

    $conn = new PDO("mysql:host=localhost;dbname=webboard;charset=utf8", "root", "");
    $sql = "SELECT * FROM user where login = '$login'";
    $result = $conn->query($sql);

    $sql1 = "INSERT INTO post (title, content, post_date, cat_id, user_id)
             VALUES('$top', '$comm', NOW(), '$cate', '$user')";
    $conn->exec($sql1);
    $conn = null;
    header("location:register.php");
    die();
?>