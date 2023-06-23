<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO booked_flights(FlightID, UserID, Username) VALUES (:flightID,:userID,:username)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':flightID',$_POST['flightID']);
    $stmt->bindParam(':userID',$_POST['userID']);
    $stmt->bindParam(':username', $_POST['username']);
    $stmt -> execute();
    header("Location: ../book.php");
?>