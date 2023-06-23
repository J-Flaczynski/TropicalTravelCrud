<?php
include_once('../includes/connection.php');

if (isset($_POST['ticketID'])) {
  $ticketID = $_POST['ticketID'];
  $deleteSql = "DELETE FROM tickets WHERE ticketID = :ticketID";
  $deleteStmt = $conn->prepare($deleteSql);
  $deleteStmt->bindParam(':ticketID', $ticketID);
  $deleteStmt->execute();

  header("Location: ../admin/tickets.php");
}
?>
