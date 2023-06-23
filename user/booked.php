<?php include_once('../includes/connection.php');
?>
<?php
    session_start();

    if(!isset($_SESSION["name"])){
        header("Location: ../login.php");
        exit();
    }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Document</title>
  </head>
  <body>
    <header>
<?php include_once('../includes/userNav.php');
?>
    </header>
    <div class="name-container">
      <h1>Manage bookings</h1>
    </div>

    <main class="booked-flights-container">
    <?php
$sql = 'SELECT flights.*, booked_flights.* FROM flights INNER JOIN booked_flights ON flights.FlightID = booked_flights.FlightID';
foreach ($conn->query($sql) as $row) {
  echo '<div class="booked-flight" style="background-position: center center; background-image: url(' ."../img/" .$row['Image'] . ')">';
  echo('<div class="flights-flight-top">');
  echo '<div class="manage-flight-info">' . $row['Destination'] . '</div>';
  echo('</div>');
  echo '<form action="../php/cancelFlight.php" method="post">';
  echo '<input type="hidden" name="bookedID" value="' . $row['BookedID'] . '">';
  echo '<button type="submit" style="margin-top: 15%" class="delete-flight btn">Cancel</button>';
  
  echo '</form>';
  echo('</div>');
  echo('</div>');
}

?>



    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
