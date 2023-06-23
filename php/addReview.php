<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO reviews(username, review) VALUES (:username,:review)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':username',$_POST['username']);
    $stmt->bindParam(':review',$_POST['review']);
    $stmt -> execute();
    header("Location: ../user/review.php");
?>