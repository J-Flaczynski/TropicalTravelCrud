<?php
    include_once('../includes/connection.php'); 
    $sql = ("INSERT INTO flights(Destination, Price, DepartureDate, ReturnDate, Description, Image) VALUES (:flightName,:price,:departureDate, :returnDate, :description, :image)");
    $stmt = $conn -> prepare($sql);
    $stmt->bindParam(':flightName',$_POST['flightName']);
    $stmt->bindParam(':price',$_POST['price']);
    $stmt->bindParam(':departureDate', $_POST['departureDate']);
    $stmt->bindParam(':returnDate', $_POST['returnDate']);
    $stmt->bindParam(':description', $_POST['description']);
    $stmt->bindParam(':image', $_POST['image']);
    $stmt -> execute();
    header("Location: ../admin/flights.php");
?>