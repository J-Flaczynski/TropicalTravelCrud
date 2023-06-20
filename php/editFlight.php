<?php
include_once('../includes/connection.php');

$sql = "UPDATE flights SET Destination = :flightName, Price = :price, DepartureDate = :departureDate, ReturnDate = :returnDate, Description = :description WHERE FlightID = :FlightID";
$stmt = $conn->prepare($sql);

$stmt->bindParam(':flightName', $_POST['flightName']);
$stmt->bindParam(':price', $_POST['price']);
$stmt->bindParam(':departureDate', $_POST['departureDate']);
$stmt->bindParam(':returnDate', $_POST['returnDate']);
$stmt->bindParam(':description', $_POST['description']);
$stmt->bindParam(':FlightID', $_POST['FlightID']);

$stmt->execute();

header("Location: ../admin/flights.php");
?>
