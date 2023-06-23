<?php
include_once('../includes/connection.php');

if (isset($_POST['flightID'])) {
  $flightID = $_POST['flightID'];
  $deleteSql = "DELETE FROM flights WHERE FlightID = :flightID";
  $deleteStmt = $conn->prepare($deleteSql);
  $deleteStmt->bindParam(':flightID', $flightID);
  $deleteStmt->execute();

  header("Location: ../admin/flights.php");
}
?>
