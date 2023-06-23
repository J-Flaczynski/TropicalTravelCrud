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
<?php include_once('../includes/adminNav.php');
?>
    </header>
    <div class="name-container">
      <h1>Manage flights</h1>
    </div>
    <div class="search-bar-wrapper">
      <button id="add-flight-modal-open" class="create-flight btn">
        Create flight
      </button>
    </div>

    <dialog id="add-flight-modal">
      <div class="modal-top">
        <h1>Flight creation</h1>
      </div>
      <div class="modal-middle">
        <div class="date-container">
          <form action="../php/addFlight.php" method="post">
          <label>Departure date</label><br />
          <input type="date" name="departureDate" /><br />
        </div>
        <div class="date-container">
          <label>Return date</label><br />
          <input type="date" name="returnDate" />
        </div>
      </div>
      <div class="modal-lower-middle">
        <div class="lower-modal-container">
          <label>Destination</label><br />
          <input type="text" name="flightName" />
        </div>
        <div class="lower-modal-container">
          <label>Price</label><br />
          <input type="text" name="price" />
        </div>
      </div>
      <div class="modal-bottom">
        <label>Description</label>
        <textarea name="description"></textarea>
      </div>
      <div class="modal-bottom-buttons">
        <div class="lower-bottom-container">
          <button type="submit" class="modal-submit btn">Submit</button>
          <input type="file" name="image" id="image" accept="image/*" />
          <label for="image" id="modal-img" class="modal-image btn"
            >Attach image</label
          >
        </div>
        </form>
      </div>
    </dialog>

    <dialog id="edit-flight-modal">
    <?php
$sql = 'SELECT * FROM flights';
$stmt = $conn->query($sql);
$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<div class="modal-top">';
echo '<h1>Edit flight</h1>';
echo '</div>';
echo '<div class="modal-middle">';
echo '<div class="date-container">';
echo '<form action="../php/editFlight.php" method="post">';
echo '<label>Departure date</label><br />';
echo '<input type="date" name="departureDate" value="' . $row['DepartureDate'] . '" /><br />';
echo '</div>';
echo '<div class="date-container">';
echo '<label>Return date</label><br />';
echo '<input type="date" name="returnDate" value="' . $row['ReturnDate'] . '" />';
echo '</div>';
echo '</div>';
echo '<div class="modal-lower-middle">';
echo '<div class="lower-modal-container">';
echo '<label>Destination</label><br />';
echo '<input type="text" name="flightName" value="' . $row['Destination'] . '" />';
echo '</div>';
echo '<div class="lower-modal-container">';
echo '<label>Price</label><br />';
echo '<input type="text" name="price" value="' . $row['Price'] . '" />';
echo '</div>';
echo '</div>';
echo '<div class="modal-bottom">';
echo '<label>Description</label>';
echo '<textarea name="description">' . $row['Description'] . '</textarea>';
echo '</div>';
echo '<div class="modal-bottom-buttons">';
echo '<div class="lower-bottom-container">';
echo '<input type="hidden" name="FlightID" value="' . $row['FlightID'] . '">';
echo '<button type="submit" class="modal-submit btn">Submit</button>';
echo '<input type="file" name="image" id="image" accept="image/*" />';
echo '<label for="image" id="modal-img" class="modal-image btn">Attach image</label>';
echo '</div>';
echo '</form>';
echo '</div>';
?>


    </dialog>

    <main class="booked-flights-container">
    <?php
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



    </main>
    <script src="../js/script.js"></script> 
  </body>
</html>
