<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO gallery(Image) VALUES (:image)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':image', $_POST['image']);
    $stmt -> execute();
    header("Location: ../admin/gallery.php");
?>