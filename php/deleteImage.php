<?php
include_once('../includes/connection.php');

if (isset($_POST['imageID'])) {
  $imageID = $_POST['imageID'];
  $deleteSql = "DELETE FROM gallery WHERE imageID = :imageID";
  $deleteStmt = $conn->prepare($deleteSql);
  $deleteStmt->bindParam(':imageID', $imageID);
  $deleteStmt->execute();

  header("Location: ../admin/gallery.php");
}
?>
