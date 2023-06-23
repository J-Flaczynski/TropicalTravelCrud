<?php
include_once('../includes/connection.php');

if (isset($_POST['bookedID'])) {
  $bookedID = $_POST['bookedID'];
  $deleteSql = "DELETE FROM booked_flights WHERE bookedID = :bookedID";
  $deleteStmt = $conn->prepare($deleteSql);
  $deleteStmt->bindParam(':bookedID', $bookedID);
  $deleteStmt->execute();

  header("Location: ../user/booked.php");
}
?>
