<?php include_once('../includes/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Tropical travels</title>
</head>
<body>
<?php 
include_once('includes/navbar.php');
?>
    <main>
        <div class="background-gallery">
            <h1>Beautiful journeys at your fingertips</h1>
            <br>
            <div class="search-bar-wrapper">
         <div class="search-bar">
            <form action="#" method="get">
            <input type="text" name="Destination" placeholder="Destination" />
             <input type="number" name="Depart date" placeholder="Depart date" />
             <input type="number" name="Return date" placeholder="Return date" />
            <button type="submit">Search</button>
            </form>
          </div>
       </div>
        </div>
        <div class="content">
        </dialog>

<div class="booked-flights-container">
<?php
$sql = 'SELECT * FROM flights';
$stmt = $conn->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

$sql = 'SELECT * FROM flights';
foreach ($conn->query($sql) as $row) {
echo '<div class="booked-flight" style="background-position: center center; background-image: url(' ."../img/" .$row['Image'] . ')">';
echo('<div class="flights-flight-top">');
echo '<div class="manage-flight-info">' . $row['Destination'] . '</div>';
echo('</div>');
echo '<form action="../php/editFlight.php" method="post">';
echo '<input type="hidden" name="flightID" value="' . $row['FlightID'] . '">';
echo '</form>';
echo '<button id="edit-flight-modal-open" class="edit-flight btn">Edit</button>';
echo '<form action="../php/deleteFlight.php" method="post">';
echo '<input type="hidden" name="flightID" value="' . $row['FlightID'] . '">';
echo '<button type="submit" class="delete-flight btn">Delete</button>';

echo '</form>';
echo('</div>');
echo('</div>');
}

?>



</div>
        </div>
    </main>
    
<?php
include_once('includes/footer.php');
?>
</body>
</html>