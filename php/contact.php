<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO tickets(Name, Email, Subject, Message) VALUES (:Name,:Email,:Subject, :Message)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':Name',$_POST['Name']);
    $stmt->bindParam(':Email',$_POST['Email']);
    $stmt->bindParam(':Subject', $_POST['Subject']);
    $stmt->bindParam(':Message', $_POST['Message']);
    $stmt -> execute();
    header("Location: ../contact.php");
?>