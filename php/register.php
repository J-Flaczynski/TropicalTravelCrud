<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO users(Email, Password, Username) VALUES (:email,:password,:username)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':email',$_POST['email']);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt -> execute();
    header("Location: ../login.php");
?>